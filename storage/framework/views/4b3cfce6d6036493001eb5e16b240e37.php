<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?> - Register</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        .form-input {
            border: none;
            border-bottom: 1px solid #d1d5db;
            background: transparent;
            padding: 8px 0;
            font-size: 16px;
            width: 100%;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            border-bottom-color: #3b82f6;
        }

        .form-input::placeholder {
            color: #9ca3af;
        }

        .password-toggle {
            cursor: pointer;
            color: #60a5fa;
        }

        .password-toggle:hover {
            color: #3b82f6;
        }

        .requirement-item {
            color: #ef4444;
            font-size: 14px;
            margin-bottom: 4px;
        }

        .requirement-item.valid {
            color: #10b981;
        }

        .country-selector {
            background: #f3f4f6;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
        }

        .offer-card {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .wavy-bg {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #60a5fa 100%);
            position: relative;
            overflow: hidden;
        }

        .wavy-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            opacity: 0.1;
        }

        .person-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ffffff;
        }

        .shape {
            width: 60px;
            height: 60px;
            border-radius: 12px;
        }

        .shape.hexagon {
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }

        .shape.oval {
            border-radius: 50%;
        }

        .shape.rectangle {
            border-radius: 8px;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Left Column - Registration Form -->
        <div class="flex-1 bg-white flex items-center justify-center p-4 lg:p-8">
            <div class="w-full max-w-md">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">
                        Please enter your name exactly as shown in your passport
                    </h1>
                </div>

                <?php if (isset($component)) { $__componentOriginalb24df6adf99a77ed35057e476f61e153 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb24df6adf99a77ed35057e476f61e153 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.validation-errors','data' => ['class' => 'mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb24df6adf99a77ed35057e476f61e153)): ?>
<?php $attributes = $__attributesOriginalb24df6adf99a77ed35057e476f61e153; ?>
<?php unset($__attributesOriginalb24df6adf99a77ed35057e476f61e153); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb24df6adf99a77ed35057e476f61e153)): ?>
<?php $component = $__componentOriginalb24df6adf99a77ed35057e476f61e153; ?>
<?php unset($__componentOriginalb24df6adf99a77ed35057e476f61e153); ?>
<?php endif; ?>

                <form method="POST" action="<?php echo e(route('register')); ?>" class="space-y-6">
                    <?php echo csrf_field(); ?>

                    <!-- Name Fields -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="given_name" class="block text-sm font-medium text-gray-700 mb-2">Given Name</label>
                            <input type="text" id="given_name" name="given_name" class="form-input"
                                   value="<?php echo e(old('given_name')); ?>" required autofocus>
                        </div>
                        <div>
                            <label for="family_name" class="block text-sm font-medium text-gray-700 mb-2">Family Name(s)</label>
                            <input type="text" id="family_name" name="family_name" class="form-input"
                                   value="<?php echo e(old('family_name')); ?>" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="form-input"
                               value="<?php echo e(old('email')); ?>" required>
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center space-x-1 country-selector">
                                <i class="fas fa-globe text-gray-500"></i>
                                <i class="fas fa-phone text-gray-500"></i>
                                <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                            </div>
                            <input type="tel" id="phone" name="phone" class="form-input flex-1"
                                   value="<?php echo e(old('phone')); ?>" required>
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" class="form-input pr-10" required>
                            <i class="fas fa-eye password-toggle absolute right-0 top-1/2 transform -translate-y-1/2"
                               onclick="togglePassword('password')"></i>
                        </div>

                        <!-- Password Requirements -->
                        <div class="mt-3">
                            <p class="text-sm font-medium text-gray-700 mb-2">Password must:</p>
                            <ul class="space-y-1">
                                <li class="requirement-item" id="req-length">
                                    <i class="fas fa-circle text-xs mr-2"></i>Be at least 12 characters
                                </li>
                                <li class="requirement-item" id="req-uppercase">
                                    <i class="fas fa-circle text-xs mr-2"></i>Contain one uppercase
                                </li>
                                <li class="requirement-item" id="req-lowercase">
                                    <i class="fas fa-circle text-xs mr-2"></i>Contain one lowercase
                                </li>
                                <li class="requirement-item" id="req-number">
                                    <i class="fas fa-circle text-xs mr-2"></i>Contain one number
                                </li>
                                <li class="requirement-item" id="req-special">
                                    <i class="fas fa-circle text-xs mr-2"></i>Contain one special character (-+_!@#$%^&*.,?)
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-input pr-10" required>
                            <i class="fas fa-eye password-toggle absolute right-0 top-1/2 transform -translate-y-1/2"
                               onclick="togglePassword('password_confirmation')"></i>
                        </div>
                    </div>

                    <?php if(Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature()): ?>
                        <div class="flex items-start">
                            <input type="checkbox" name="terms" id="terms" required
                                   class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="terms" class="ml-2 text-sm text-gray-600">
                                I agree to the
                                <a href="<?php echo e(route('terms.show')); ?>" class="text-blue-600 hover:text-blue-500 underline">Terms of Service</a>
                                and
                                <a href="<?php echo e(route('policy.show')); ?>" class="text-blue-600 hover:text-blue-500 underline">Privacy Policy</a>
                            </label>
                        </div>
                    <?php endif; ?>

                    <div class="flex items-center justify-between">
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-blue-600 hover:text-blue-500 underline">
                            Already registered?
                        </a>
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Mobile Promotional Offer -->
        <div class="lg:hidden bg-blue-600 p-6 text-white">
            <div class="text-center">
                <h2 class="text-xl font-bold mb-4">Exclusive Offer for New Members*</h2>
                <p class="text-lg font-semibold mb-2">
                    Get up to <strong>$120</strong> in credits toward BorderPass services
                </p>
                <p class="text-sm opacity-90">
                    Apply for a study permit, work permit, family visa, Express Entry, and more
                </p>
            </div>
        </div>

        <!-- Right Column - Promotional Offer -->
        <div class="flex-1 wavy-bg items-center justify-center p-4 lg:p-8 relative hidden lg:flex">
            <div class="offer-card max-w-md">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Exclusive Offer for New Members*</h2>

                <div class="space-y-4 mb-6">
                    <p class="text-lg font-semibold text-gray-800">
                        Get up to <strong>$120</strong> in credits toward BorderPass services
                    </p>
                    <p class="text-center text-gray-600">or</p>
                    <p class="text-lg font-semibold text-gray-800">
                        Receive a <strong>no-cost</strong> legal consultation
                    </p>
                </div>

                <p class="text-sm text-gray-600 mb-6">
                    Apply for a study permit, work permit, family visa, Express Entry, and more
                </p>

                <!-- People Images and Shapes -->
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <!-- Top Row -->
                    <div class="person-image bg-blue-200 flex items-center justify-center">
                        <i class="fas fa-user text-blue-600 text-xl"></i>
                    </div>
                    <div class="person-image bg-green-200 flex items-center justify-center">
                        <i class="fas fa-user-graduate text-green-600 text-xl"></i>
                    </div>
                    <div class="shape hexagon bg-teal-400"></div>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <!-- Bottom Row -->
                    <div class="shape rectangle bg-purple-400"></div>
                    <div class="person-image bg-orange-200 flex items-center justify-center">
                        <i class="fas fa-users text-orange-600 text-xl"></i>
                    </div>
                    <div class="person-image bg-pink-200 flex items-center justify-center">
                        <i class="fas fa-user-friends text-pink-600 text-xl"></i>
                    </div>
                </div>
            </div>

            <!-- Accessibility Icon -->
            <div class="absolute bottom-4 right-4">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-universal-access text-white text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = field.nextElementSibling;

            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Password validation
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const requirements = {
                'req-length': password.length >= 12,
                'req-uppercase': /[A-Z]/.test(password),
                'req-lowercase': /[a-z]/.test(password),
                'req-number': /\d/.test(password),
                'req-special': /[-+_!@#$%^&*.,?]/.test(password)
            };

            Object.keys(requirements).forEach(req => {
                const element = document.getElementById(req);
                if (requirements[req]) {
                    element.classList.add('valid');
                    element.querySelector('i').classList.remove('fa-circle');
                    element.querySelector('i').classList.add('fa-check-circle');
                } else {
                    element.classList.remove('valid');
                    element.querySelector('i').classList.remove('fa-check-circle');
                    element.querySelector('i').classList.add('fa-circle');
                }
            });
        });
    </script>
</body>
</html>
<?php /**PATH D:\2025\academia_vision\global-linkmigration\resources\views/layouts/register-layout.blade.php ENDPATH**/ ?>