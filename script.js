document.getElementById('signupForm').addEventListener('submit', function (e) {
  e.preventDefault();

  // Get user data (Optional: store it if needed)
  const fullName = document.getElementById('fullName').value;
  const email = document.getElementById('email').value;
  const age = document.getElementById('age').value;
  const gender = document.querySelector('input[name="gender"]:checked').value;
  const contact = document.getElementById('contact').value;

  // Hide the sign-up form and show the main website
  document.getElementById('signup-section').style.display = 'none';
  document.getElementById('main-website').style.display = 'block';

  alert(`Welcome, ${fullName}! Your sign-up is complete.`);
});