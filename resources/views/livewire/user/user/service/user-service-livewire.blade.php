<div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-50 relative overflow-hidden">

    <!-- Header Section -->
    <div class="relative z-10 container mx-auto px-4 py-16">
        <div class="text-center py-5">
            <h1 class="text-xl lg:text-xl font-bold text-gray-900 mb-6 leading-tight">
                What is the first step of your journey?
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                GlobalLink is here to provide trusted immigration guidance. Select an option to get started:
            </p>
        </div>

        <!-- Services Grid - 2x2 Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            @foreach ($services->take(4) as $index => $service)
                <div
                    class="bg-teal-100 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden relative">
                    <div class="flex items-center h-64">
                        <!-- Text Content (Left Side) -->
                        <div class="flex-1 p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $service->name }}</h3>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">{{ str($service->description)->words(20)->toString() }}</p>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">{{ $service->price }} {{ $service->currency }}</p>

                            <!-- Call to Action Button -->
                            <a href="{{ route('user.service.apply', $service->id) }}"
                                class="inline-flex items-center gap-2 text-gray-900 font-semibold hover:text-gray-700 transition-colors duration-300 group">
                                <span>Start Application</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Hexagonal Image (Right Side) -->
                        <div class="relative w-48 h-48 flex-shrink-0">
                            <div class="hexagon w-full h-full relative overflow-hidden">
                                @if ($service->image)
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}"
                                        class="w-50 h-50 object-cover"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <!-- Fallback for missing images -->
                                    <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center"
                                        style="display: none;">
                                        <div
                                            class="w-12 h-12 {{ $index }} rounded-full flex items-center justify-center">
                                            {!! $service->name !!}
                                        </div>
                                    </div>
                                @else
                                    <!-- Fallback when no image is set -->
                                    <div
                                        class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                        <div class="w-12 h-12  rounded-full flex items-center justify-center">
                                            {!! $service->name !!}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
