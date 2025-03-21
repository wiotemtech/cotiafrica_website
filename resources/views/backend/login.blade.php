<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CotiAfrica</title>
    <link rel="icon" href="{{ asset('assets/icons/logo3.png') }}" type="image/x-icon">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:whitesmoke;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            max-width: 400px;
            padding: 60px;
            background-color: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            border-radius: 15px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-container h2 {
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-control {
            margin-bottom: 15px;
            padding: 14px;
            font-size: 14px;
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #1e88e5;
            box-shadow: 0 0 8px rgba(30, 136, 229, 0.3);
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg, #1e88e5, #42a5f5);
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #1565c0, #1e88e5);
        }

        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-login a {
            color: #1e88e5;
            margin: 0 10px;
            font-size: 20px;
            transition: color 0.3s;
        }

        .social-login a:hover {
            color: #007bff;
        }

        .forgot-password {
            margin-top: 15px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>

        @if(session('error'))
        <div class="error-message">
            <strong>{{ session('error') }}</strong>
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>

            <div class="forgot-password">
                <a href="{{ route('home') }}">Go to Site</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootsrapbundle.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        $(function(){
            $('#header').load('header.html');
            $('#footer').load('footer.html');
        });
    </script>
</body>
</html>
