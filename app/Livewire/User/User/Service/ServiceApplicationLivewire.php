<?php

namespace App\Livewire\User\User\Service;

use App\Models\Service;
use Livewire\Component;

class ServiceApplicationLivewire extends Component
{
    public $service;
    public $selectedService;
    public $cardNumber = '';
    public $expiryDate = '';
    public $securityCode = '';
    public $country = 'Canada';
    public $promoCode = '';
    public $termsAccepted = false;

    public function mount($serviceId = null)
    {
        if ($serviceId) {
            $this->service = Service::findOrFail($serviceId);
            $this->selectedService = $this->service;
        }
    }

    public function applyPromoCode()
    {
        // Handle promo code logic here
        $this->dispatch('promo-applied');
    }

    public function confirmPayment()
    {
        $this->validate([
            'cardNumber' => 'required|string|min:16',
            'expiryDate' => 'required|string',
            'securityCode' => 'required|string|min:3',
            'country' => 'required|string',
            'termsAccepted' => 'required|accepted'
        ]);

        // Handle payment processing here
        $this->dispatch('payment-confirmed');
    }

    public function render()
    {
        return view('livewire.user.user.service.service-application-livewire')->layout('layouts.app');
    }
}
