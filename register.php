<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: white;
        }

        .registration-container {
            background-color: white;
            width: 300px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: darkblue;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        label {
            display: block;
            margin-top: 10px;
            color: darkblue;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 96%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: white;
        }

        .register-button {
            width: 100%;
            padding: 10px;
            background-color: darkblue;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 20px;
        }

        .register-button:hover {
            background-color: #001f3f;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Registration Form</h2>
        <form id="registrationForm" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <button class="register-button" type="submit" name="register">Register</button>
        </form>
    </div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function (event) {
            event.preventDefault();

            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            const user = {
                name: name,
                email: email,
                password: password,
            };

            localStorage.setItem("userData", JSON.stringify(user));

            alert("Registration successful!");

        });
    </script>
</body>
</html>
