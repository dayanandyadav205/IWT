// header.js
class MyHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `<header>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

  <!-- Header -->
  <div class="header">
    <div>
      <img src="images/iwt5.png" alt="IWT5 Logo"/>
    </div>

    <div>
      <h1>Internet and Web Technology</h1>
    </div>

     <div>
     
    </div>

 </div>
  <!-- Navigation Bar -->
  <div class="navbar">
          <a href="index.html"><i class="fa-solid fa-house"></i></a>
          <a href="contact.html">Contact Us</a>
          <a href="login_admin.php">Admin Login</a>
          <a href="login_user.php">User Login</a>
          <a href="form.php">Sign Up</a>
  </div>
  
    </header>`;
  }
}
customElements.define('my-header', MyHeader);