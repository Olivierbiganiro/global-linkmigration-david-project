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
                    <a href="{{ route('user.services') }}" class="group bg-gray-900 hover:bg-gray-800 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center gap-3">
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
                                <img src="{{ asset('assets/img/pre-screening-people.png') }}" alt="Your Journey Image" class="w-full h-full object-cover">
                                {{-- <p class="text-sm">Your Journey Image</p> --}}
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
    {{-- <div class="relative z-10 container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="text-center p-6 bg-white/50 backdrop-blur-sm rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Study Abroad</h3>
                <p class="text-gray-600">Navigate university applications and student visa processes with expert guidance.</p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center p-6 bg-white/50 backdrop-blur-sm rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Work Permits</h3>
                <p class="text-gray-600">Secure work authorization and employment opportunities in your dream destination.</p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center p-6 bg-white/50 backdrop-blur-sm rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Permanent Residency</h3>
                <p class="text-gray-600">Achieve permanent settlement with comprehensive immigration support and legal expertise.</p>
            </div>
        </div>
    </div> --}}
</div>

