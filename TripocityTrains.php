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
       margin-left: 30%;
       display: inline-block;
       position: relative;
       text-align: center;
       color: rgb(18, 6, 31);
    }
    .center {
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%, -50%);
    }

.search-form {
  border-radius: 30px 0 0 30px;
}

.input-group {
  width:100%;
}

input-group-btn {
  max-width:50px;

}

#search {
  border: 2px;
}

.search-btn {
  cursor:pointer;
  border-radius: 30px 30px 30px 30px;
  color:rgb(29, 29, 109);
  width:100px;
  
} 

.input-sm{
  width:140px;
  height:50px;
}

.search-btn{
  width:150px;
  height:50px;
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
          <li><a href="file:///D:/images/Tripocity%20(1).html" class="nav-link px-2 text-white"> Home </a></li>
          <li><a href="file:///D:/images/Hotels.html" class="nav-link px-2 text-white"> Hotels </a></li>
          <li><a href="/" class="nav-link px-2 text-white"> Restaurants </a></li>
          <li><a href="file:///D:/images/TripocityTrains.html" class="nav-link px-2 text-white"> Trains </a></li>
          <li><a href="" class="nav-link px-2 text-white"> Buses </a></li>
          <li><a href="file:///D:/images/TripocityReviews.html" class="nav-link px-2 text-white"> Reviews </a></li>
        </ul>

        

        <div class="text-end">
          <button onclick="document.location='file:///C:/Users/Anushka%20Agrawal/Downloads/index.html'">Login / Sign-up</button>

        </div>
  </header>
  
<section>
 <div class="container-fluid ">
    <div class="image">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/%D0%9F%D0%BE%D0%B5%D0%B7%D0%B4_%D0%BD%D0%B0_%D1%84%D0%BE%D0%BD%D0%B5_%D0%B3%D0%BE%D1%80%D1%8B_%D0%A8%D0%B0%D1%82%D1%80%D0%B8%D1%89%D0%B5._%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%B5%D0%B6%D1%81%D0%BA%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C.jpg/1200px-%D0%9F%D0%BE%D0%B5%D0%B7%D0%B4_%D0%BD%D0%B0_%D1%84%D0%BE%D0%BD%D0%B5_%D0%B3%D0%BE%D1%80%D1%8B_%D0%A8%D0%B0%D1%82%D1%80%D0%B8%D1%89%D0%B5._%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%B5%D0%B6%D1%81%D0%BA%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C.jpg" width="100%" height="700"> 

    <div class="header center">
    <form>
        <h1 style="color: rgb(236, 212, 212);"></h1>
        <b>
       <font color="black" size="5"> From Where </font> 
        </b>

        <span style="width:205px;display:inline-block"></span>
        <b>
        <font color="black" size="5"> To Where </font> 
      </b>
  

        <div class="input-group">
  
          
          <input type="text" class="form-control 
                  input-sm" placeholder="Location " />
              
          <span class="input-group-btn" 
              style="width:40px;"></span>
    
          <input type="text" class="form-control 
                  input-sm" placeholder="Destination" />
      </div>

      <div >
        <br>
        
        <input type="text" class="input-sm" placeholder=" Departure Date" />

       
          <span style="width:100px;display:inline-block"></span>

          <label>
              <select>
                  <option selected> Quota </option>
                  <option> General Quota </option>
                  <option> Tatkal Quota </option>
                  <option> Premium Tatkal Quota </option>
                  <option> Senior Citizen Quota </option>
                  <option> Ladies Quota </option>
                  <option> Defence Quota </option>
              </select>
          </label>

          <span style="width:100px;display:inline-block"></span>

          <label>
            <select>
                <option selected> Coaches </option>
                <option> AC first class 1A  </option>
                <option> AC twi tier 2A </option>
                <option> AC three tier 3A </option>
                <option> AC chair car CC </option>
                <option> Sleeper class SL </option>
                <option> Second seater 2S </option>
            </select>
        </label>

      </div>
    <br>
    <span style="width:280px;display:inline-block"></span>
      <button class="search-btn border-1 " 
            type="button1" >     Search    </button>
            <br>
            
        </div>
    </form>
</div>
  </div>
</div>
</section>
</div>

  </div>
  </div>
  <div class="container my-3 ">
    <div class="card border-light text-center" >
      <div class="card-header bg-secondary border-dark"style="border:1px solid black;"> <h3 >Why Tripocity...?</h3></div>
    </div>
  </div>
  <div class="container">
    <div class="card border-dark my-5 text-center mx-4">
      <div class="card-header bg-light ">Contact Us</div>
      <div class="box bg-light">
       
        <a href="https://www.facebook.com/">Facebook</a>
        <a href="https://www.instagram.com/">Instagram</a>
        <a href="https://twitter.com/?lang=en">Twitter</a>
        <a href="https://in.linkedin.com/">Linkedin</a>
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