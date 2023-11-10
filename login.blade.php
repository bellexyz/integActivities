{{-- resources/views/login.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ route('login.store') }}" method="post">
            @csrf <!-- CSRF Token -->

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <button class="login-button" type="submit" name="login">Login</button>
        </form>
        <a class="signup-link" href="{{ route('register.index') }}">Sign Up</a>
    </div>
</body>
</html>
