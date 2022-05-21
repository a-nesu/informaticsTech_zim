<?php
include 'comment.php';

if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $comment= $_POST['comment'];
   

    $sql= "insert into feedbacktbl(email,comment)
    values('$email','$comment')";
    
    $result= mysqli_query($conn,$sql);

    if ($result){
        echo "<script> alert('comment added')</script>";    
    } else{
        echo  "<script> alert('comment not added')</script>";    
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <!-- Custom CSS-->

<link rel="stylesheet" href="style.css">

<!--Typed Js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js" integrity="sha512-zKaK6G2LZC5YZTX0vKmD7xOwd1zrEEMal4zlTf5Ved/A1RrnW+qt8pWDfo7oz+xeChECS/P9dv6EDwwPwelFfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
  <!-- Navbar-->
  <nav  id="navbar"  class="navbar navbar-expand-md navbar-success fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WebTech</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#myCarousel">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#dropdown" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Departments</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#dropdown">Out Patients</a></li>
              <li><a class="dropdown-item" href="#">FCH</a></li>
              <li><a class="dropdown-item" href="#">Laboratory</a></li>
              <li><a class="dropdown-item" href="#">Theatre</a></li>
              <li><a class="dropdown-item" href="#">Phamarcy</a></li>
              <li><a class="dropdown-item" href="#">Martenity</a></li>
              <li><a class="dropdown-item" href="#">Genaral Side</a></li>
              <li><a class="dropdown-item" href="#">Health Information</a></li>
              <li><a class="dropdown-item" href="#">Administration</a></li>
              <li><a class="dropdown-item" href="#">Training School</a></li>
              <li><a class="dropdown-item" href="#">X-ray</a></li>
              <li><a class="dropdown-item" href="#">Dental</a></li>




            </ul>

          <li class="nav-item">
            <a class="nav-link enabled">Services</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#dropdown" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Updates</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Recent updates</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>

        </ul>

        
        <form class="d-flex">
          <button  style="background-color: white;" class="btn btn-outline-success" type="submit" id="sign-up">Signup</button>
          <button  class="btn btn-outline-secondary" type="submit">Login</button>
        </form>
      </div>
    </div>
  </nav>
  

<!--Carousel-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="portfolio/portfolio-4.jpg" alt="teacher">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary"  id="btn"  href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
<img src="portfolio/city.jpg" alt="city">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary"  id="btn"  href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
<img src="portfolio/portfolio-9.jpg" alt="town">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" id="btn" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="px-4 pt-5 my-5 text-center border-bottom" id="about">
    <h1 class="display-4 fw-bold">Centered screenshot</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3"  id="btn">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4"  id="btn">Secondary</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>



<main id="dropdown">

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2"  id="btn">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2"  id="btn">Secondary action</a>
            <!-- Button trigger modal -->
<button type="button"  id="btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <div class="col">
            <input type="email" class="form-control" placeholder="email" name="email" aria-label="email">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Comment" name="comment" aria-label="fname">
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" id="submit" name="submit" class="btn btn-secondary" style="background-color: white;color:black;">Submit</button>
        <button type="button" class="btn btn-primary" id="btn">Cancel</button>
      </div>
    </div>
  </div>
</div>
          </p>
        </div>
      </div>
    </section>





  <script> 
  
    var typed4 = new Typed('.navbar-', {
    strings: ['Front-end developer','Web developer/designer'],
    typeSpeed:100,
    backSpeed:0,
    loop:true,
    cursorChar:'',
    shuffle:true,
    smartBackspace: false,
    });
    
</script>

</body>
</html>