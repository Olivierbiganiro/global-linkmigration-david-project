<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
    public function showForm()
    {
        return view('sendmessage');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string|min:10',
            'message' => 'required|string|max:1600'
        ]);

        try {
            // Get Twilio credentials from environment
            $accountSid = env('TWILIO_ACCOUNT_SID');
            $authToken = env('TWILIO_AUTH_TOKEN');
            $fromNumber = env('TWILIO_PHONE_NUMBER');

            if (!$accountSid || !$authToken || !$fromNumber) {
                return back()->with('error', 'Twilio credentials not configured. Please check your environment variables.');
            }

            // Format phone number (ensure it starts with +)
            $phoneNumber = $request->phone_number;
            if (!str_starts_with($phoneNumber, '+')) {
                $phoneNumber = '+' . $phoneNumber;
            }

            // Twilio API endpoint
            $url = "https://api.twilio.com/2010-04-01/Accounts/{$accountSid}/Messages.json";

            // Send message via Twilio API with SSL verification disabled for Windows
            $response = Http::withOptions([
                'verify' => false, // Disable SSL verification for Windows SSL issues
                'timeout' => 30,
            ])
            ->withBasicAuth($accountSid, $authToken)
            ->asForm()
            ->post($url, [
                'From' => $fromNumber,
                'To' => $phoneNumber,
                'Body' => $request->message
            ]);

            if ($response->successful()) {
                $responseData = $response->json();
                Log::info('Message sent successfully', [
                    'to' => $phoneNumber,
                    'message_sid' => $responseData['sid'] ?? 'unknown'
                ]);

                return back()->with('success', 'Message sent successfully! Message SID: ' . ($responseData['sid'] ?? 'unknown'));
            } else {
                $errorData = $response->json();
                Log::error('Failed to send message', [
                    'status' => $response->status(),
                    'error' => $errorData
                ]);

                return back()->with('error', 'Failed to send message: ' . ($errorData['message'] ?? 'Unknown error'));
            }

        } catch (\Exception $e) {
            Log::error('Exception while sending message', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()->with('error', 'An error occurred while sending the message: ' . $e->getMessage());
        }
    }
}
