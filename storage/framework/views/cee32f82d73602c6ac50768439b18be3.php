<div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23d97706" fill-opacity="0.1"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 60px 60px;"></div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 container mx-auto px-4 py-12">
        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-[80vh]">
            <!-- Left Content -->
            <div class="space-y-8">
                <!-- Welcome Title -->
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl lg:text-6xl font-serif font-bold text-gray-900 mb-6 leading-tight">
                        Welcome to <span class="text-amber-600">GlobalLink</span>
                    </h1>
                </div>

                <!-- Description Text -->
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p class="max-w-lg">
                        GlobalLink is your trusted partner in navigating the journey to study, work, and settle in a new country. With the backing of legal experts, we're here to provide clear, affordable, and reliable support every step of the way.
                    </p>

                    <p class="max-w-lg">
                        To get started, tell us about your journey so we can personalize your experience and help you get set up for success — let's move forward together!
                    </p>
                </div>

                <!-- Call to Action Button -->
                <div class="pt-4">
                    <a href="<?php echo e(route('user.services')); ?>" class="group bg-gray-900 hover:bg-gray-800 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center gap-3">
                        <span>Get Started</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Content - Image Section -->
            <div class="relative flex justify-center lg:justify-end">
                <!-- Hexagonal Image Container -->
                <div class="relative">
                    <!-- Hexagon Shape -->
                    <div class="hexagon w-80 h-80 relative overflow-hidden">
                        <!-- Placeholder for actual image -->
                        <div class="w-full h-full bg-gradient-to-br from-blue-100 to-indigo-200 flex items-center justify-center">
                            <div class="text-center text-gray-600">
                                <img src="<?php echo e(asset('assets/img/pre-screening-people.png')); ?>" alt="Your Journey Image" class="w-full h-full object-cover">
                                
                            </div>
                        </div>
                    </div>

                    <!-- Decorative Chevron Pattern -->
                    <div class="absolute -bottom-8 -left-4 w-32 h-16 opacity-60">
                        <svg viewBox="0 0 200 100" class="w-full h-full">
                            <path d="M0,50 L20,30 L40,50 L60,30 L80,50 L100,30 L120,50 L140,30 L160,50 L180,30 L200,50 L200,70 L180,50 L160,70 L140,50 L120,70 L100,50 L80,70 L60,50 L40,70 L20,50 L0,70 Z"
                                  fill="#10b981" class="animate-pulse"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Additional Features Section -->
    
</div>

<?php /**PATH D:\2025\academia_vision\global-linkmigration\resources\views/livewire/user/user/dashboard/user-dashboard-livewire.blade.php ENDPATH**/ ?>