@php
    $services = \App\Models\Service::all();
@endphp
<!-- Immigration-sec -->
<div class="immigration-sec common-section pos-relative " id="service">
    <div class="container wow fadeInUp">
        <div class="">
            <h2 class="section-title text-black text-center">Explore Our Canadian Immigration Services</h2>
        </div>
        <div class="row gy-3 gy-sm-4 mt-2">
            @foreach ($services as $service)
                <div class="col-md-6 col-sm-12 col-lg-4 mt-1 mt-sm-4">
                    <a href="" class="d-block w-100 event_main">
                        <div class="event-card w-100 align-center">
                            <div class="event-icon-bar">
                                <img class="event-icon"
                                    src="{{ Storage::url($service->image) }}">
                            </div>
                            <div class="event-content">
                                <h4 class="event-title">{{ $service->name }}</h4>
                                <p>{{ str($service->description)->words(10)->toString() }}</p>
                                <p>{{ $service->price }} {{ $service->currency }}</p>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
