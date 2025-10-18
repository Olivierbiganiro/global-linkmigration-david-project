<?php
    use App\Enums\UserRole;
    $userRole = auth()->user()->user_role;
    // dd($userRole);
?>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 pt-20 w-64 h-screen bg-white border-r border-gray-200 transition-transform -translate-x-full sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="overflow-y-auto px-3 pb-4 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>" wire:navigate
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white <?php echo e(request()->routeIs('admin.dashboard*') ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700'); ?> group">
                    <i class="fa fa-tachometer-alt me-2"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

            <?php if($userRole == UserRole::ADMIN->value): ?>
                <li>
                    <a href=""
                        class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Services</a>
                </li>
                <li>
                    <a href=""
                        class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Applications</a>
                </li>
            <?php elseif($userRole == UserRole::USER->value && auth()->user()->invoice && auth()->user()->invoice->status == true): ?>
                <li>
                    <a href="#"
                        class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Payment</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Applications</a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Document</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Resources</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</aside>
<?php /**PATH D:\2025\academia_vision\global-linkmigration\resources\views/layouts/partial/aside.blade.php ENDPATH**/ ?>