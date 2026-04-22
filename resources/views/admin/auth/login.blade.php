<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Galaxy Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    body {
        min-height: 100vh;
        margin: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),
        url('{{ asset("build/assets/img/hero-1.jpeg") }}') center center / cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Arial, sans-serif;
    }

    .login-card {
        width: 100%;
        max-width: 430px;
        background: rgba(20, 20, 20, 0.88);
        border: 1px solid rgba(182, 162, 52, 0.35);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
        border-radius: 14px;
        overflow: hidden;
    }

    .login-header {
        background: linear-gradient(135deg, #b6a234, #d6c15c);
        color: #111;
        padding: 22px 28px;
        text-align: center;
    }

    .login-header h3 {
        margin: 0;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .login-body {
        padding: 30px 28px;
        color: #fff;
    }

    .form-label {
        color: #eaeaea;
        font-size: 14px;
    }

    .form-control {
        background: rgba(255, 255, 255, 0.96);
        border: 1px solid #ddd;
        height: 48px;
    }

    .form-control:focus {
        border-color: #b6a234;
        box-shadow: 0 0 0 0.2rem rgba(182, 162, 52, 0.25);
    }

    .btn-theme {
        background: #b6a234;
        border: none;
        color: #111;
        font-weight: 700;
        height: 48px;
    }

    .btn-theme:hover {
        background: #c7b347;
        color: #111;
    }

    .hotel-mark {
        font-size: 13px;
        letter-spacing: 3px;
        color: #f0de7a;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .small-note {
        color: #cfcfcf;
        font-size: 13px;
    }

    .input-group-text {
        background: #fff;
    }

    .alert {
        font-size: 14px;
    }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="login-header">
            <div class="hotel-mark">Galaxy Hotel</div>
            <h3>Admin Login</h3>
        </div>

        <div class="login-body">
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="1" name="remember" id="remember">
                    <label class="form-check-label small-note" for="remember">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-theme w-100">
                    LOGIN
                </button>
            </form>
        </div>
    </div>

</body>

</html>