<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #d6f5d6, #a8e6a3);
            font-family: 'Poppins', sans-serif;
        }
        .login-card {
            max-width: 420px;
            margin: 80px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px 40px;
        }
        .login-card h3 {
            text-align: center;
            color: #2e7d32;
            font-weight: bold;
            margin-bottom: 25px;
        }
        .btn-login {
            background-color: #2e7d32;
            border: none;
        }
        .btn-login:hover {
            background-color: #256628;
        }
        .text-link {
            color: #2e7d32;
        }
        .text-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h3>🌾 Login</h3>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="form-control @error('email') is-invalid @enderror" placeholder="contoh@email.com">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input id="password" type="password" name="password" required
                    class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan kata sandi">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">
                    Ingat Saya
                </label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-login text-white py-2">Masuk</button>
            </div>

            <div class="text-center mt-3">
                @if (Route::has('password.request'))
                    <a class="text-link d-block" href="{{ route('password.request') }}">
                        Lupa kata sandi?
                    </a>
                @endif
                <a class="text-link d-block mt-1" href="{{ route('register') }}">
                    Belum punya akun?
                </a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
