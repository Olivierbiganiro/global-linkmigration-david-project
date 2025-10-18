<div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60"
            viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg
            fill="%23d97706" fill-opacity="0.1"%3E%3Cpath
            d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
            /%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 60px 60px;"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Left Column: Cart -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <!-- Cart Header -->
                    <div class="flex items-center gap-3 mb-8">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01">
                            </path>
                        </svg>
                        <h2 class="text-2xl font-bold text-gray-900">Cart: All fees are non-refundable</h2>
                    </div>

                    <!--[if BLOCK]><![endif]--><?php if($selectedService): ?>
                        <!-- Service Item -->
                        <div class="bg-gray-50 rounded-xl p-6 mb-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo e($selectedService->name); ?></h3>
                            <div class="space-y-2 text-gray-700 mb-4">
                                <p>• <?php echo e($selectedService->description); ?></p>

                            </div>
                            <div class="text-right">
                                <span
                                    class="text-2xl font-bold text-gray-900"><?php echo e(number_format($selectedService->price, 2)); ?> <?php echo e($selectedService->currency); ?></span>
                            </div>
                        </div>

                        <!-- Credit/Offer Section -->
                        <div class="bg-teal-100 border border-teal-200 rounded-xl p-6 mb-6">
                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-teal-600 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-teal-800 mb-2">You will receive a credit for your
                                        Membership fee! Terms apply.</p>
                                    <ul class="space-y-1 text-sm text-teal-700">
                                        <li>• Apply it toward your first GlobalLink service</li>
                                        <li>• Or get a free 30-minute consultation with a lawyer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                            <span class="text-xl font-semibold text-gray-900">Total</span>
                            <span
                                class="text-2xl font-bold text-gray-900"><?php echo e(number_format($selectedService->price, 2)); ?> <?php echo e($selectedService->currency); ?></span>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <!-- Right Column: Payment Details -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <!-- Payment Header -->
                    <div class="flex items-center gap-3 mb-8">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                        <h2 class="text-2xl font-bold text-gray-900">Payment Details</h2>
                    </div>

                    <p class="text-gray-600 mb-6">Credit card, Canadian debit card, Apple Pay, or Google Pay can be
                        used.</p>

                    <form wire:submit.prevent="confirmPayment" class="space-y-6">
                        <!-- Card Number -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Card number</label>
                            <div class="relative">
                                <input type="text" wire:model="cardNumber" placeholder="1234 1234 1234 1234"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">

                            </div>
                        </div>

                        <!-- Expiry and Security Code -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Expiration date</label>
                                <input type="text" wire:model="expiryDate" placeholder="MM / YY"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Security code</label>
                                <div class="relative">
                                    <input type="text" wire:model="securityCode" placeholder="CVC"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">

                                </div>
                            </div>
                        </div>

                        <!-- Country -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                            <select wire:model="country"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="Canada">Canada</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Australia">Australia</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Payment Terms -->
                        <p class="text-sm text-gray-600">
                            By providing your card information, you allow GlobalLink Corp. to charge your card for
                            future payments in accordance with their terms.
                        </p>
                        <!-- Terms and Conditions -->
                        <div class="flex items-start gap-3">
                            <input type="checkbox" wire:model="termsAccepted" id="terms"
                                class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="terms" class="text-sm text-gray-700">
                                By checking this box, I confirm that I have read and agree to the GlobalLink
                                <a href="#" class="text-blue-600 hover:underline">Terms of Use</a>,
                                <a href="#" class="text-blue-600 hover:underline">Refund Policy</a> and
                                <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>.
                            </label>
                        </div>

                        <!-- Confirm Payment Button -->
                        <button type="submit"
                            class="w-full bg-gray-900 hover:bg-gray-800 text-white py-4 px-6 rounded-lg font-semibold transition-colors duration-300 flex items-center justify-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                            Confirm Payment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\2025\academia_vision\global-linkmigration\resources\views/livewire/user/user/service/service-application-livewire.blade.php ENDPATH**/ ?>