<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Website</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-<hash>" crossorigin="anonymous" />
  <style>
    /* Custom Styles */
    body {
      font-family: Arial, sans-serif;
    }
    .navbar-brand {
      font-weight: bold;
    }
    .jumbotron {
      background-color: #f8f9fa;
      padding: 100px 0;
      margin-bottom: 0;
    }
    .feature-box {
      text-align: center;
      padding: 50px 20px;
      border: 1px solid #dee2e6;
      border-radius: 5px;
      margin-bottom: 30px;
    }
    .project-image {
  width: 100%;
  height: 200px; /* Adjust the height as needed */
  object-fit: cover; /* Ensures the image covers the entire container */
}
.project-title {
  font-size: 1.25rem;
  font-weight: bold;
  margin-top: 1rem;
}

.project-date {
  font-size: 0.875rem;
  color: #888;
}
.card-img-top {
  height: 350px; /* Adjust the height as needed */
  object-fit: cover;
}

  </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Javier.dev</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Homepage Sections -->
<section id="home" class="jumbotron text-left">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1 class="display-4 font-weight-bold mb-4">Backend PHP Developer</h1>
          <p class="lead">Hi, I am Abdul Javar L. Javier. A passionate backend developer based in the Philippines</p>
        </div>
        <div class="col-md-6">
          <img src="c.png" class="img-fluid" alt="Your Photo" width="500px" height="500px">
        </div>
      </div>
    </div>
  </section>
  
 
  <section id="projects" class="feature-box">
  <h1 class="mb-4">My Projects</h1>
  <div class="row">
    <div class="col-md-4">
      <div class="card project-card">
        <img src="project1.png" class="card-img-top" alt="Project 1">
        <div class="card-body">
          <h5 class="card-title">Project Title 1</h5>
          <p class="card-text">Date: January 1, 2023</p>
          <!-- Add more project details here if needed -->
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card project-card">
        <img src="project2.png" class="card-img-top" alt="Project 2">
        <div class="card-body">
          <h5 class="card-title">Project Title 2</h5>
          <p class="card-text">Date: February 15, 2023</p>
          <!-- Add more project details here if needed -->
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card project-card">
        <img src="project3.png" class="card-img-top" alt="Project 3">
        <div class="card-body">
          <h5 class="card-title">Project Title 3</h5>
          <p class="card-text">Date: March 30, 2023</p>
          <!-- Add more project details here if needed -->
        </div>
      </div>
    </div>
  </div>
</section>

  
  
  
  <section id="about" class="feature-box">
  <div class="container">
    <h2 class="text-center mb-4 font-weight-bold">About Me</h2>
    <div class="row">
      <div class="col-md-6">
        <img src="picture1.png" class="img-fluid" alt="Profile Picture">
      </div>
      <div class="col-md-6">
        <div class="about-content">
          <p class="lead">Hi there! I'm a passionate backend PHP developer based in the Philippines. I have a strong foundation in PHP programming and extensive experience in developing backend systems and web applications.</p>
          <br><br>
          <p>I specialize in building scalable and efficient server-side solutions using PHP frameworks such as Laravel and Symfony. I'm proficient in database management with MySQL, and I have experience in optimizing database queries for improved performance.</p>
          <p>My goal is to deliver high-quality, maintainable code that meets the needs of clients and exceeds their expectations. I'm always eager to learn and stay updated with the latest technologies and best practices in backend development.</p>
        </div>
      </div>
    </div>
  </div>
</section>


  <section id="contact" class="feature-box">
    <div class="container">
      <h2 class="text-center mb-4 font-weight-bold">Contact</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="contact-info">
            <h3>Get in Touch</h3>
            <p>Feel free to connect with me on social media. I'd love to hear from you!</p>
            <ul class="list-unstyled">
              <li><i class="fab fa-twitter mr-2"></i>Twitter: <a href="#">@example_twitter</a></li>
              <li><i class="fab fa-linkedin mr-2"></i>LinkedIn: <a href="#">example_linkedin</a></li>
              <li><i class="fab fa-github mr-2"></i>GitHub: <a href="#">example_github</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="social-icons">
            <h3>Follow Me</h3>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
              <!-- Add more social media icons as needed -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
<!-- Bootstrap JS and jQuery (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
