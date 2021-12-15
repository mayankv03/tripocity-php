<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Tripocity</title>
  <style>
    h1{
       text-align: center;
    }
    .imageContainer {
       margin-left: 15%;
       display: inline-block;
       position: relative;
       text-align: center;
       color: rgb(64, 11, 124);
    }
    .center {
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%, -50%);
    }
    </style>

</head>

<body>

  <header class="p-3 bg-dark text-white">
    <div class="container">
       
      
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <a class="navbar-brand text-primary mx-0" href="#">Tripocity</a>
          <li><a href="http://127.0.0.1:5500/images/tripocity.html" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="/" class="nav-link px-2 text-white">Hotels</a></li>
          <li><a href="/" class="nav-link px-2 text-white">Restraunts</a></li>
          <li><a href="/" class="nav-link px-2 text-white">Transportation</a></li>
          <li><a href="/" class="nav-link px-2 text-white">Activities to do</a></li>
          <li><a href="http://127.0.0.1:5500/images/TripocityReviews.html" class="nav-link px-2 text-white">Reviews</a></li>
        </ul>

        

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
  

  <div class="contener">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="background.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="background.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="background.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>

  
  <div class="contener my-4">
      <h3> Popular places</h3>
      <div class="card-group">
        <div class="card">
          <img src="top.jpg" class="card-img-top mx-1" alt="...">
        </div>
        <div class="card">
          <img src="top.jpg" class="card-img-top mx-1" alt="...">
           </div>
        <div class="card">
          <img src="top.jpg" class="card-img-top mx-1" alt="...">
          </div>
        <div class="card">
          <img src="top.jpg" class="card-img-top mx-1" alt="...">
        </div>
      </div>
  </div>

  <div class="contener my-4">
    <h3> Stay</h3>
    <div class="card-group">
      <div class="card">
        <img src="stay.jpg" class="card-img-top mx-1" alt="...">
      </div>
      <div class="card">
        <img src="stay.jpg" class="card-img-top mx-1" alt="...">
         </div>
      <div class="card">
        <img src="stay.jpg" class="card-img-top mx-1" alt="...">
        </div>
      <div class="card">
        <img src="stay.jpg" class="card-img-top mx-1" alt="...">
      </div>
    </div>
</div>

<div class="contener my-4 border-4-dark">
  <h3> Eat</h3>
  <div class="card-group">
    <div class="card">
      <img src="Eat.png" class="card-img-top mx-1" alt="...">
    </div>
    <div class="card">
      <img src="Eat.png" class="card-img-top mx-1" alt="...">
       </div>
    <div class="card">
      <img src="Eat.png" class="card-img-top mx-1" alt="...">
      </div>
    <div class="card">
      <img src="Eat.png" class="card-img-top mx-1" alt="...">
    </div>
  </div>
</div>
  
    
  

  
  <div class="contener">
    <div class="card border-dark my-5 text-center mx-4">
      <div class="card-header bg-light ">contact us</div>
      <div class="card-body">
        <button type="button" class="btn btn-primary position-relative">
          gmail
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-primary position-relative">
          phone
      </div>
    </div>
  </div>
  </div>




  

  <footer class="blog-footer text-center">
    <p>A Trip Planner<a href="https://getbootstrap.com/">Tripocity</a> by <a href="https://twitter.com/mdo">@Yav</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
</body>

</html>