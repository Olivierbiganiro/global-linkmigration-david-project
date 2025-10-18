<?php
    $services = \App\Models\Service::all();
?>
<!-- Immigration-sec -->
<div class="immigration-sec common-section pos-relative " id="service">
    <div class="container wow fadeInUp">
        <div class="">
            <h2 class="section-title text-black text-center">Explore Our Canadian Immigration Services</h2>
        </div>
        <div class="row gy-3 gy-sm-4 mt-2">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-sm-12 col-lg-4 mt-1 mt-sm-4">
                    <a href="" class="d-block w-100 event_main">
                        <div class="event-card w-100 align-center">
                            <div class="event-icon-bar">
                                <img class="event-icon"
                                    src="<?php echo e(Storage::url($service->image)); ?>">
                            </div>
                            <div class="event-content">
                                <h4 class="event-title"><?php echo e($service->name); ?></h4>
                                <p><?php echo e(str($service->description)->words(10)->toString()); ?></p>
                                <p><?php echo e($service->price); ?> <?php echo e($service->currency); ?></p>

                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH D:\2025\academia_vision\global-linkmigration\resources\views/section/services.blade.php ENDPATH**/ ?>