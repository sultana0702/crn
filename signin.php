<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign-In Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        #signin-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        form input, form button {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid #28a745;
    font-size: 14px;
    color: #333;
    box-sizing: border-box;
}

        button[type="submit"] {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #218838;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #28a745;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Sign-In Section -->
    <div id="signin-section">
        <div class="container">
            <h1>Sign In</h1>
            <form id="signinForm">
                <label for="email">Enter Email ID</label>
                <input type="email" id="email" placeholder="Email ID" required>

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" required>

                <button type="submit">Sign In</button>
            </form>

            <div class="forgot-password">
                <p>Forgot your password? <a href="#">Reset it here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
