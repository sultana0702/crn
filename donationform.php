<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donation Form</title>
    <link rel="stylesheet" href="donationforn.css">
    <style>
        #donation-section {
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

    button[type="submit"] {
        background-color: #28a745;
        color: white;
        font-weight: bold;
        border: none;
        cursor: pointer;
        margin-top: 20px;
    }

    </style>
</head>

<body>
      <!-- Donation Section -->
  <div id="donation-section">
    <img
    <div class="container">
      <h1>Donate Now</h1>
      <form id="donationForm">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" placeholder="Full Name" required>

        <label for="email">Enter Email ID</label>
        <input type="email" id="email" placeholder="Email ID" required>

        <label for="donationAmount">Donation Amount</label>
        <input type="number" id="donationAmount" placeholder="Amount to Donate" required min="1">

        <label>Payment Method</label>
        <select id="paymentMethod" name="paymentMethod" required>
          <option value="">Select Payment Method</option>
          <option value="creditCard">Credit Card</option>
          <option value="paypal">PayPal</option>
          <option value="bankTransfer">Bank Transfer</option>
        </select>

        <label for="contact">Contact Info</label>
        <div style="display: flex; gap: 10px;">
          <select id="countryCode" name="countryCode" required>
            <option value="+880">+880 (Bangladesh)</option>
            
            <!-- Add more country codes as needed -->
          </select>
          <input type="tel" id="contact" name="contact" placeholder="Phone Number" pattern="[0-9]{10}" required>
        </div>

        <button type="submit">Donate Now</button>
      </form>
    </div>
  </div>
  
</body>
</html>
