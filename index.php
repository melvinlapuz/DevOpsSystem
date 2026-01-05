<?php
SESSION_START();
include 'config/plugins.php';
?>
<style>
@keyframes popIn {
  0% {
    transform: scale(0.9);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}
.modal-content {
  animation: popIn 0.3s ease-out;
}
</style>
<!--Eto yung navbar-->
<nav class="navbar navbar-expand-sm bg-light navbar-light" style="box-shadow: 0 2px 4px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000;">
  <div class="container-fluid container py-4">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-6" style="width: 4rem;" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" style="width: 6rem;" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" style="width: 6rem;" href="enroll.php">Enroll Now</a>
        </li>  
      </ul>
        <button type="button" class="btn btn-outline-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>
    </div>
  </div>
</nav>
<?php
if (isset($_SESSION['error'])){
    echo '<div class="alert alert-danger mb-0" role="alert">
    <i class="fa-solid fa-exclamation-triangle"></i>
    '.$_SESSION['error'].'</div>';
    unset($_SESSION['error']);
}
?>

<!--yung blue welcome section-->
<div class="container-main">
    <div class="hero-section text-center mb-1" style="background-color: #0dcaf0; background-size: cover; padding: 25px; color: #ffffff;">
        <h1 style="font-size: 2.5rem; font-weight: 350;">Welcome</h1>
        <p style="font-size: 1.2rem;">Your webpage is ready to be set up. If you are the admin, click start and setup the website through content management section.</p>
        <a type="button" class="btn btn-outline-light px-3" data-bs-toggle="modal" data-bs-target="#loginModal">Start</a>
    </div>
</div>

<!--yung tatlong cards section-->
<div class="row mx-0 p-4">
    <div class="col-sm-4">
      <h1 style="font-size: 1.9rem; font-weight: 300;">Content Management System</h1>
      <p style="font-size: 1.2rem; font-weight: 300; text-align: justify;">Using a CMS is the ability to easily set up and manage website elements such as carousels, blogs, footers, and more. For example, you can easily create
         and manage a carousel, which is a slideshow of images or other content, to showcase your services on your website. You can also set up and manage a blog, 
         which allows you to regularly publish new content to your website.
        </p>
    </div>
    <div class="col-sm-4">
      <h1 style="font-size: 1.9rem; font-weight: 300;">Basic Messaging System</h1>
      <p style="font-size: 1.2rem; font-weight: 300; text-align: justify;">A basic messaging app can be a valuable tool for students or users to communicate with an administrator or other authorized parties. With this app, users
         can send messages that will be displayed in an inbox, where they can be reviewed and responded to as needed.
        </p>
    </div>
    <div class="col-sm-4">
      <h1 style="font-size: 1.9rem; font-weight: 300;">Digital Enrollment System</h1>
      <p style="font-size: 1.2rem; font-weight: 300; text-align: justify;">Enrollment systems typically include a wide range of features, including student registration, course management, academic records management, and reporting. 
         Students can use the system to select and register for courses
        </p>
    </div>
    
    <div class="col-sm-4">
     <div class="alert alert-success" role="alert">Status: Complete</div>
    </div>
    <div class="col-sm-4">
      <div class="alert alert-success" role="alert">Status: Complete</div>
    </div>
    <div class="col-sm-4">
      <div class="alert alert-success" role="alert">Status: Complete</div>
    </div>
</div>

<!--Yung login modal-->
<div class="modal p-4" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="wrapper">
        <div class="logo">
            <img src="image/logo.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            LOGIN
        </div>
        <form class="p-3 mt-3" action="config/loginAuth.php" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input autocomplete="off" type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" class="password" id="pwd" placeholder="Password">
                <i class="fa-solid fa-eye me-3 fs-5 cursor-pointer" id="icon"></i>
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6 mb-3">
           <a type="button" class="text-decoration-underline" data-bs-dismiss="modal">Close</a>
        </div>
    </div>
</div>

<script defer>
    const passwordInput = document.querySelector(".form-field .password");
    const eyeIcon = document.querySelector("#icon");

    eyeIcon.addEventListener("click", () => {
    // Toggle the password input type between "password" and "text"
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
    // Update the eye icon class based on the password input type
    eyeIcon.className = `fa-solid fa-eye${passwordInput.type === "password" ? "fa-solid fa-eye me-3 fs-5 cursor-pointer" : "-slash me-3 fs-5 cursor-pointer"}`;
  });
</script>