<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun - Pupukku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #d6f5d6, #a8e6a3);
            font-family: 'Poppins', sans-serif;
        }
        .register-card {
            max-width: 480px;
            margin: 70px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px 40px;
        }
        .register-card h3 {
            text-align: center;
            color: #2e7d32;
            font-weight: bold;
            margin-bottom: 25px;
        }
        .btn-register {
            background-color: #2e7d32;
            border: none;
        }
        .btn-register:hover {
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

    <div class="register-card">
        <h3>🌾 Daftar Akun Subur Tani</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="form-control @error('email') is-invalid @enderror" placeholder="contoh@email.com">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input id="password" type="password" name="password" required
                    class="form-control @error('password') is-invalid @enderror" placeholder="Minimal 8 karakter">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Ulangi kata sandi">
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-register text-white py-2">
                    Daftar Sekarang
                </button>
            </div>

            <div class="text-center mt-3">
                <p class="mb-0">Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-link">Masuk di sini</a>
                </p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun - Pupukku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #d6f5d6, #a8e6a3);
            font-family: 'Poppins', sans-serif;
        }
        .register-card {
            max-width: 480px;
            margin: 70px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px 40px;
        }
        .register-card h3 {
            text-align: center;
            color: #2e7d32;
            font-weight: bold;
            margin-bottom: 25px;
        }
        .btn-register {
            background-color: #2e7d32;
            border: none;
        }
        .btn-register:hover {
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

    <div class="register-card">
        <h3>🌾 Daftar Akun Subur Tani</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="form-control @error('email') is-invalid @enderror" placeholder="contoh@email.com">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input id="password" type="password" name="password" required
                    class="form-control @error('password') is-invalid @enderror" placeholder="Minimal 8 karakter">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Ulangi kata sandi">
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-register text-white py-2">
                    Daftar Sekarang
                </button>
            </div>

            <div class="text-center mt-3">
                <p class="mb-0">Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-link">Masuk di sini</a>
                </p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
