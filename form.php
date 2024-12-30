


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crisis Response Network</title>
    <link rel="stylesheet" href="form.css">
    <style>
        #signup-section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        max-width: 400px;
        width: 100%;
        padding: 20px;
        border: 1px solid red;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    form label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    form input, form select, form button {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #28a745;
    }

    .gender-options {
        display: flex;
        gap: 15px;
    }

    .gender-options label {
        font-size: 14px;
    }

    button[type="submit"] {
        background-color: #28a745;
        color: olive;
        font-weight: bold;
        border: none;
        cursor: pointer;
        margin-top: 20px;
    }

    </style>
</head>

<body>

      <!-- Sign-Up Section -->
  <div id="signup-section">
    <div class="img">
      <img src="img\form.jpg" alt="Floods">
    </div>
       <div class="container">
      <h1>Sign Up</h1>
      <form id="signupForm" method="POST" >
        <label for="fullName">Full Name</label>
        <input type="text" name="fullName" id="fullName" placeholder="Full Name" required>

        <label for="email">Enter Email ID</label>
        <input type="email" name="email" id="email" placeholder="Email ID" required>

        

        <label for="age">Age</label>
        <input type="number" name="age" id="age" placeholder="Age" required>

        <label>Gender</label>
        <div class="gender-options">
          <label>
            <input type="radio" name="gender" value="male" required> Male
          </label>
          <label>
            <input type="radio" name="gender" value="female" required> Female
          </label>
          <label>
            <input type="radio" name="gender" value="other" required> Other
          </label>
        </div>

        <label for="contact">Contact Info</label>
        <div style="display: flex; gap: 10px;">
          <select id="countryCode" name="countryCode" required>
            <option value="+880">+880 (Bangladesh)</option>
            
            <!-- Add more country codes as needed -->
          </select>
          <input type="tel" id="contact" name="contact" placeholder="Phone Number" pattern="[0-9]{10}" required>

        </div>
        <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Password" required>
        <button type="submit">Register Now</button>
      </form>
    </div>
  </div>


  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crn";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
// $sql = "INSERT INTO MyGuests (id,firstname, lastname, email)
// VALUES (1,'John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // collect value of input field
  $name = $_POST["fullName"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $contact = $_POST["contact"];
  $password = $_POST["password"];
  $sql = "INSERT INTO users (name,email, age, gender,contact, password)
 VALUES ('$name', '$email', $age,'$gender','$contact','$password')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();
?>
</body>
</html>