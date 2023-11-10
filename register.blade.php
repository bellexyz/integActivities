<!-- resources/views/register.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <div class="registration-container">
        <h2>Registration</h2>
        <form action="{{ route('register.store') }}" method="post">
            @csrf <!-- Blade directive for CSRF protection -->

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <button class="register-button" type="submit" name="register">Register</button>
        </form>
    </div>
</body> 
</html>
