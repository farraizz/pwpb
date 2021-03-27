
<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color: #993973;">
    <div class="container" style="color: white;">
      <a class="navbar-brand" aria-current="page" href="admin.php">Admin</a>
      <a class="navbar-brand" href="index.php">User</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#projects">Galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#993973" fill-opacity="1" d="M0,192L48,192C96,192,192,192,288,192C384,192,480,192,576,181.3C672,171,768,149,864,122.7C960,96,1056,64,1152,80C1248,96,1344,160,1392,192L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

  <section class="jumbotron text-center" id="home" style="background-color: white;">
    <img src="https://avatarfiles.alphacoders.com/699/thumb-69905.png" alt="fara" class="rounded-circle img-thumbnail">
    <a class="nav-link active" aria-current="page" href="editprofil.php" style="color:black;"><h1 class="display-4 mb-3">Faradina Aiziz Wibisono
    <i class="bi bi-pen-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
    <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
    </svg></i></a></h1>
    <p class="lead">Student</p>
    
  </section>

  
  
  <section id="about" style="background-color:#993973; color:#fff;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,138.7C384,128,480,128,576,154.7C672,181,768,235,864,245.3C960,256,1056,224,1152,218.7C1248,213,1344,235,1392,245.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <a class="nav-link active" aria-current="page" href="editprofil.php" style="color:white;"><h2>About Me
        <i class="bi bi-pen-fill"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
        <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
        </svg></i></a></h2>
        </div>
      </div>
        <div class="row justify-content-center">
        <div class="col-5">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur asperiores nam perspiciatis harum? Repudiandae, architecto eveniet. Omnis nam explicabo fuga amet earum dolorem vero! Eius nesciunt, maiores ad similique pariatur facilis, voluptas iste harum quis quam enim, molestiae rerum nam.
        </div>
        <div class="col-5">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro soluta, sequi architecto consequuntur hic numquam pariatur tenetur modi ipsa debitis mollitia nisi nobis obcaecati fugiat. Neque vitae ea similique aliquam deleniti odit ducimus quam culpa obcaecati. Dicta laudantium aspernatur dolore!
        </div>
        </div>

       
  </section>
  

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#993973" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,138.7C384,128,480,128,576,154.7C672,181,768,235,864,245.3C960,256,1056,224,1152,218.7C1248,213,1344,235,1392,245.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

  
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>My Galery</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img src="https://wallpapercave.com/wp/wp4751466.jpg" class="card-img-top" alt="galery">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img src="https://wallpapercave.com/wp/wp4751466.jpg" class="card-img-top" alt="galery">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img src="https://wallpapercave.com/wp/wp4751466.jpg" class="card-img-top" alt="galery">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

 

  <section id="contact" style="background-color: #993973; color: white; height: 900px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,138.7C384,128,480,128,576,154.7C672,181,768,235,864,245.3C960,256,1056,224,1152,218.7C1248,213,1344,235,1392,245.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="container">
      <div class="row text-center">
        <div class="col mb-5">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="input.php" method="POST">
           <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
              <textarea class="form-control" name="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="simpan">Send</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <h6 style="text-align: center;">
      Created by | <a href="Faradina Aiziz Wibisono" style="color: white;">Faradina Aiziz Wibisono</a>
  </h6>
  </section>
  </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>