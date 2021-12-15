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
          <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Hotels</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Restraunts</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Transportation</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Activities to do</a></li>
          <li><a href="file:///D:/images/TripocityReviews.html" class="nav-link px-2 text-white">Reviews</a></li>
        </ul>

        

        <div class="text-end">
          <!--<button type="button" class="btn btn-outline-light me-2">Login / Sign-up</button>
          <a href="file:///C:/Users/Anushka%20Agrawal/Downloads/index.html">login or signup</a> -->

          <button onclick="document.location='file:///C:/Users/Anushka%20Agrawal/Downloads/index.html'">Login / Sign-up</button>

        </div>
  </header>
  
  <div class="contener my-5">
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"> name</label>
          <input type="text" class="form-control" id="validationCustom01" value="" required>
           
        </div>
      
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Username</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">About </label>
            <select class="form-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option>Hotels</option>
              <option>Restaurants</option>
              <option>Transportation</option>
              <option>Suggetions</option>
            </select>
             </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Reviews</label>
          <input type="text" class="form-control" id="validationCustom03" required>
           
        </div>
        
         
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    </div>

  </div>
  </div>
  <div class="contener my-3 ">
    <div class="card border-light text-center">
      <div class="card-header bg-light border-dark">Why Tripocity...?
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