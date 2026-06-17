<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            border: none;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,.15);
        }

        .login-left {
            background: rgba(255,255,255,.08);
            color: white;
            padding: 50px;
        }

        .login-right {
            background: white;
            padding: 50px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
        }

        .btn-login {
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            background: #4f46e5;
            border: none;
        }

        .btn-login:hover {
            background: #4338ca;
        }

        .brand-logo {
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,.2);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .login-left {
                display: none;
            }

            .login-right {
                padding: 30px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card login-card">
        <div class="row g-0">

            <!-- Left Side -->
            <div class="col-md-6 login-left d-flex flex-column justify-content-center">
                <div class="brand-logo">
                    🚀
                </div>

                <h2 class="fw-bold mb-3">
                    Selamat Datang
                </h2>

                <p class="mb-0 opacity-75">
                    Masuk untuk mengakses dashboard dan mengelola data aplikasi Anda dengan mudah.
                </p>
            </div>

            <!-- Right Side -->
            <div class="col-md-6 login-right">
                <h3 class="fw-bold mb-4">
                    Login Account
                </h3>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            required
                            autofocus>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            required>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember">

                            <label class="form-check-label" for="remember">
                                Remember me
                            </label>
                        </div>

                        <a href="{{ route('password.request') }}"
                           class="text-decoration-none">
                            Lupa Password?
                        </a>
                    </div>

                    <button type="submit"
                            class="btn btn-primary btn-login w-100">
                        Login
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
