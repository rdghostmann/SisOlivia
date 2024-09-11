// Form Validation for Register
document.getElementById('registerForm').addEventListener('submit', function(event) {
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirmPassword').value;

  if (password !== confirmPassword) {
      alert('Passwords do not match!');
      event.preventDefault();
  }
});

// Form Validation for Login
document.getElementById('loginForm').addEventListener('submit', function(event) {
  var email = document.getElementById('loginEmail').value;
  var password = document.getElementById('loginPassword').value;

  if (email === '' || password === '') {
      alert('Both email and password are required!');
      event.preventDefault();
  }
});
