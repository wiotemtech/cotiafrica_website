<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeToInnovate Africa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            max-width: 800px;
            padding: 50px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }

        .login-container .form-control {
            margin-bottom: 15px;
            padding: 15px;
            font-size: 14px;
        }

        .login-container .btn {
            width: 100%;
            padding: 12px;
            background-color: #1e88e5;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }

        .login-container .btn:hover {
            background-color: #1e88e5;
        }

        .login-container .social-login {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .login-container .social-login a {
            color: #1e88e5;
            margin: 0 10px;
            font-size: 20px;
            transition: color 0.3s;
        }

        .login-container .social-login a:hover {
            color: #007bff;
        }

        .login-container .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

    </style>
<head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>
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















   <!-- Include jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="/js/jquery.min.js"></script>
   <script src="/js/bootsrapbundle.min.js"></script>
   <script src="/js/owl.carousel.min.js"></script>
   <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

   <!-- jQuery to load header and footer -->
   <script>
      $(function(){
          $('#header').load('header.html');
          $('#footer').load('footer.html');
      });
   </script>
</body>
</html>
