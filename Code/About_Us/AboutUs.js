

const form = document.getElementById("contact-form");

form.addEventListener("submit".preventDefault()); 
{
  event.preventDefault();
  
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;
  
  // Send form data to server or display it to the user
  console.log(`Name: ${name}\nEmail: ${email}\nMessage: ${message}`);
  
  // Reset form fields
  form.reset();
};

{/* <form id="signup-form">
  <h2>Sign Up</h2>
  <label for="name">Name:</label>
  <input type="text" id="name" required>
  <label for="email">Email:</label>
  <input type="email" id="email" required>
  <label for="password">Password:</label>
  <input type="password" id="password" required>
  <button type="submit">Sign Up</button>
</form>  */}

{/* <form id="login-form">
  <h2>Log In</h2>
  <label for="email">Email:</label>
  <input type="email" id="email" required>
  <label for="password">Password:</label>
  <input type="password" id="password" required>
  <button type="submit">Log In</button>
</form> */}

{/* {/* const signUpForm = document.getElementById('signup-form');
const loginForm = document.getElementById('login-form');

if (signUpForm) {
  signUpForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    // Here, you can send the form data to the server for processing
  });
} */}

{/* if (loginForm) {
  loginForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    // Here, you can send the login data to the server for authentication
  });
}  
*/}
