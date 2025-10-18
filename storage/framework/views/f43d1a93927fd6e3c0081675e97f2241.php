<?php
    $user = Auth::user();
    $initials = strtoupper(substr($user->email, 0, 2));
?>
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex justify-between items-center">
            <div class="flex justify-start items-center rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only"></span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="<?php echo e(route('dashboard')); ?>" class="flex ms-2 md:me-24">
                    <img src="<?php echo e(asset('assets/Content/User/images/logo.png')); ?>" alt="homepage" style="height: 40px;"
                        class="dark:hidden">
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <?php if($user->profile_photo_path): ?>
                                <img src="<?php echo e(asset($user->profile_photo_path)); ?>" alt="<?php echo e($user->name); ?>"
                                    class="object-cover w-10 h-10 rounded-full">
                            <?php else: ?>
                                <div
                                    class="flex justify-center items-center w-10 h-10 text-sm font-semibold text-white bg-green-600 rounded-full">
                                    <?php echo e($initials); ?>

                                </div>
                            <?php endif; ?>
                        </button>
                    </div>
                    <div class="hidden z-50 my-4 text-base list-none bg-white rounded-sm divide-y divide-gray-100 shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                <?php echo e($user->name); ?>

                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                <?php echo e($user->email); ?>

                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="<?php echo e(route('profile.show')); ?>" class="px-4 py-5">Security</a>
                            </li>
                            <li>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit"
                                        class="flex items-center px-4 py-2 w-full text-sm text-left text-red-600 hover:bg-red-50">
                                        <svg class="mr-3 w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH D:\2025\academia_vision\global-linkmigration\resources\views/layouts/partial/toopbar.blade.php ENDPATH**/ ?>