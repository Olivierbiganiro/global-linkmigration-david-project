<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send SMS Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .alert {
            border-radius: 10px;
            border: none;
        }
        .phone-icon {
            color: #667eea;
        }
        .message-icon {
            color: #764ba2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card mt-5">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary">📱 Send SMS Message</h2>
                            <p class="text-muted">Send a message to your customers using Twilio</p>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form action="{{ route('send.message') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="phone_number" class="form-label fw-semibold">
                                    <i class="fas fa-phone phone-icon me-2"></i>Customer Phone Number
                                </label>
                                <input type="tel"
                                       class="form-control @error('phone_number') is-invalid @enderror"
                                       id="phone_number"
                                       name="phone_number"
                                       placeholder="+1234567890 or 1234567890"
                                       value="{{ old('phone_number') }}"
                                       required>
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">
                                    Include country code (e.g., +1 for US, +44 for UK)
                                </small>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label fw-semibold">
                                    <i class="fas fa-comment message-icon me-2"></i>Message
                                </label>
                                <textarea class="form-control @error('message') is-invalid @enderror"
                                          id="message"
                                          name="message"
                                          rows="4"
                                          placeholder="Enter your message here..."
                                          maxlength="1600"
                                          required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">
                                    <span id="char-count">0</span>/1600 characters
                                </small>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </form>

                        <div class="mt-4 text-center">
                            <small class="text-muted">
                                Powered by <strong>Twilio</strong> SMS Service
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script>
        // Character counter for message textarea
        const messageTextarea = document.getElementById('message');
        const charCount = document.getElementById('char-count');

        messageTextarea.addEventListener('input', function() {
            charCount.textContent = this.value.length;

            // Change color based on character count
            if (this.value.length > 1600) {
                charCount.style.color = 'red';
            } else if (this.value.length > 1400) {
                charCount.style.color = 'orange';
            } else {
                charCount.style.color = 'inherit';
            }
        });

        // Phone number formatting
        const phoneInput = document.getElementById('phone_number');
        phoneInput.addEventListener('input', function() {
            let value = this.value.replace(/\D/g, '');
            if (value && !value.startsWith('+')) {
                if (value.length === 10) {
                    this.value = '+1' + value;
                } else if (value.length === 11 && value.startsWith('1')) {
                    this.value = '+' + value;
                }
            }
        });
    </script>
</body>
</html>
