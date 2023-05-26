 // Add event listener to the form submission
 document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get the input values
    var loginInput = document.getElementById('login').value;
    var passwordInput = document.getElementById('password').value;

    // Perform validation
    if (loginInput.trim() === '') {
      alert('Please enter your login.');
      return;
    }

    if (passwordInput.trim() === '') {
      alert('Please enter your password.');
      return;
    }

    // If validation passes, you can proceed with the login logic here
    // For now, let's just display an alert message
    alert('Login successful!');
  });