<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style_tripocity.css">
  <title>Tripocity</title>
  <!---<style>
     h1{
       text-align: center;
    }
    .imageContainer {
       margin-left: 15%;
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
  max-width:38px;
}

#search {
  border: 1px;
}

.search-btn {
  cursor:pointer;
  border-radius: 0 30px 30px 0;
  color:rgb(29, 29, 109);
  
} 
 </style>-->

</head>

<body>

  <header class="p-3 bg-info text-white">
    <div class="container">
       
      
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <a class="navbar-brand text-primary mx-0" href="#">Tripocity</a>
          <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="Hotels.html" class="nav-link px-2 text-white">Hotels</a></li>
          <li><a href="Restaurants.html" class="nav-link px-2 text-white">Restaurants</a></li>
          <li><a href="TripocityTrains.html" class="nav-link px-2 text-white">Trains</a></li>
          <li><a href="" class="nav-link px-2 text-white"> Buses </a> </li>
          <li><a href="TripocityReviews.html" class="nav-link px-2 text-white"> Reviews </a></li>
        </ul>

        

        <div class="text-end">
          <button class = "login_signup"><a style="color: inherit; text-decoration: inherit;" href="login">Login / Sign-up</a></button>
        </div>
  </header>
  
<section class = "hero">
  <div class="container-fluid hero_container">
      <div class="main_form" >

      <form action="hotels-api.php" method="post">            
        <div class="form_content" >
              <div class="search_content">
                <input type="text" name="location" class="search_box business"  placeholder="Any City Name.....">
                <button class="search_btn">Search</button>
              </div>
              <p class = "or_btn">OR</p>
              <button class="search_btn_season" type="button2" >Search by season<a href="http://127.0.0.1:5500/Season.html"></a></button>
              <!-- <button class="search-btn bg-light" type="button3">Trending<a href="http://127.0.0.1:5500/letsTrip.html"></a></button>
              <button class="search-btn bg-light active" type="button4">Lets Trip<a href="C:\Users\asus\OneDrive\Desktop\tripocity\images\letsTrip.html"></a></button> -->
        </div>
        </form>
    </div>
  </div>
</section>

<div class="container my-4 align-baseline" style=" text-align: center; border: 2px solid grey ;">
  <h3> Trending Trips</h3>             
</div>


 
<section_content>
<div class="container my-4">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
           <strong class="d-inline-block mb-2 text-danger">
            <div class="save_icon"><div class="react-container component-widget saveToTripWrapper" id="@ta/trips.save-to-trip:location:8293999_component_1" data-component-props="page-manifest" data-component="@ta/trips.save-to-trip" data-component-init="data-component-init"><div class="bGFob u _S doaMY"><span class="cWdXe Z1 duwGB"><span class="cktrf cQOOa"><svg viewBox="0 0 24 24" width="1em" height="1em" class="fecdL d Vb wQMPa"><path d="M12 2C6.487 2 2 6.487 2 12c0 5.515 4.487 10 10 10 5.515 0 10-4.485 10-10 0-5.513-4.485-10-10-10zm4.688 10.911c-.975 1.188-4.687 4.434-4.687 4.434S8.258 14.1 7.29 12.903c-1.14-1.411-1.12-3.241.049-4.351.611-.58 1.42-.898 2.279-.898s1.668.318 2.279.898l.096.092.09-.087a3.296 3.296 0 012.278-.897c.86 0 1.669.318 2.277.897 1.201 1.139 1.219 2.929.05 4.354z"></path></svg></span><span class="cktrf PlwLo"><svg viewBox="0 0 24 24" width="1em" height="1em" class="fecdL d Vb wQMPa"><path d="M14.361 8.768c-.574 0-1.111.211-1.516.594l-.854.812-.861-.819c-.401-.382-.939-.592-1.513-.592s-1.111.21-1.514.593c-.876.832-.589 2.059.048 2.847.726.896 2.961 2.89 3.845 3.667.878-.779 3.098-2.771 3.831-3.665.662-.808.936-2 .047-2.844a2.182 2.182 0 00-1.513-.593z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.688 10.911c-.975 1.188-4.687 4.435-4.687 4.435s-3.743-3.247-4.711-4.442c-1.141-1.411-1.12-3.241.049-4.351.61-.58 1.419-.898 2.279-.898s1.668.319 2.278.898l.096.091.09-.086a3.291 3.291 0 012.278-.897c.86 0 1.668.317 2.279.897 1.2 1.138 1.218 2.927.049 4.353z"></path></svg></span></span></div></div></div>Trending</strong> 
           
          <h3 class="mb-0">Jabalpur</h3>
           <p class="card-text mb-auto">Bhedaghat is a town and a nagar panchayat in Jabalpur district in the state of Madhya Pradesh, India. It is situated by the side of river Narmada and is approximately 20 km from Jabalpur city. Bhedaghat is famous for the high marble rocks making a valley through which river Narmada flows. The place also has a beautiful waterfall, known as Dhuandhar Falls (literally meaning a stream of smoke, because of its appearance). There are some more spots of tourist interest near the location</p>
          <a href="https://en.wikipedia.org/wiki/Bhedaghat" class="stretched-link">Read More</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          
           <img src="https://source.unsplash.com/200x250/?bhedaghat,bhedaghat" class="img-fluid" alt="">

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger"><div class="save_icon"><div class="react-container component-widget saveToTripWrapper" id="@ta/trips.save-to-trip:location:8293999_component_1" data-component-props="page-manifest" data-component="@ta/trips.save-to-trip" data-component-init="data-component-init"><div class="bGFob u _S doaMY"><span class="cWdXe Z1 duwGB"><span class="cktrf cQOOa"><svg viewBox="0 0 24 24" width="1em" height="1em" class="fecdL d Vb wQMPa"><path d="M12 2C6.487 2 2 6.487 2 12c0 5.515 4.487 10 10 10 5.515 0 10-4.485 10-10 0-5.513-4.485-10-10-10zm4.688 10.911c-.975 1.188-4.687 4.434-4.687 4.434S8.258 14.1 7.29 12.903c-1.14-1.411-1.12-3.241.049-4.351.611-.58 1.42-.898 2.279-.898s1.668.318 2.279.898l.096.092.09-.087a3.296 3.296 0 012.278-.897c.86 0 1.669.318 2.277.897 1.201 1.139 1.219 2.929.05 4.354z"></path></svg></span><span class="cktrf PlwLo"><svg viewBox="0 0 24 24" width="1em" height="1em" class="fecdL d Vb wQMPa"><path d="M14.361 8.768c-.574 0-1.111.211-1.516.594l-.854.812-.861-.819c-.401-.382-.939-.592-1.513-.592s-1.111.21-1.514.593c-.876.832-.589 2.059.048 2.847.726.896 2.961 2.89 3.845 3.667.878-.779 3.098-2.771 3.831-3.665.662-.808.936-2 .047-2.844a2.182 2.182 0 00-1.513-.593z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.688 10.911c-.975 1.188-4.687 4.435-4.687 4.435s-3.743-3.247-4.711-4.442c-1.141-1.411-1.12-3.241.049-4.351.61-.58 1.419-.898 2.279-.898s1.668.319 2.278.898l.096.091.09-.086a3.291 3.291 0 012.278-.897c.86 0 1.668.317 2.279.897 1.2 1.138 1.218 2.927.049 4.353z"></path></svg></span></span></div></div></div>Trending</strong>
          <h3 class="mb-0">Sanchi</h3>
           
          <p class="mb-auto">The Great Stupa at Sanchi is one of the oldest stone structures in India, and an important monument of Indian Architecture.[1] It was originally commissioned by the Mauryan emperor Ashoka the Great in the 3rd century BCE. Its nucleus was a simple hemispherical brick structure built over the relics of the Buddha. It was crowned by the 'chhatra', a parasol-like structure symbolising high rank, which was intended to honour and shelter the relics. The original construction work of this stupa was overseen by Ashoka, whose wife Devi was the daughter of a merchant of nearby Vidisha. Sanchi was also her birthplace as well as the venue of her and Ashoka's wedding.</p>
          <a href="https://en.wikipedia.org/wiki/Sanchi" class="stretched-link">Read More</a>
        </div>
        <div class="col-auto d-none d-lg-block">
 <img src="https://source.unsplash.com/200x250/?Sanchi stup,sanchi stup"  class="img-fluid"alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
           <strong class="d-inline-block mb-2 text-danger"><div class="save_icon"><div class="react-container component-widget saveToTripWrapper" id="@ta/trips.save-to-trip:location:8293999_component_1" data-component-props="page-manifest" data-component="@ta/trips.save-to-trip" data-component-init="data-component-init"><div class="bGFob u _S doaMY"><span class="cWdXe Z1 duwGB"><span class="cktrf cQOOa"><svg viewBox="0 0 24 24" width="1em" height="1em" class="fecdL d Vb wQMPa"><path d="M12 2C6.487 2 2 6.487 2 12c0 5.515 4.487 10 10 10 5.515 0 10-4.485 10-10 0-5.513-4.485-10-10-10zm4.688 10.911c-.975 1.188-4.687 4.434-4.687 4.434S8.258 14.1 7.29 12.903c-1.14-1.411-1.12-3.241.049-4.351.611-.58 1.42-.898 2.279-.898s1.668.318 2.279.898l.096.092.09-.087a3.296 3.296 0 012.278-.897c.86 0 1.669.318 2.277.897 1.201 1.139 1.219 2.929.05 4.354z"></path></svg></span><span class="cktrf PlwLo"><svg viewBox="0 0 24 24" width="1em" height="1em" class="fecdL d Vb wQMPa"><path d="M14.361 8.768c-.574 0-1.111.211-1.516.594l-.854.812-.861-.819c-.401-.382-.939-.592-1.513-.592s-1.111.21-1.514.593c-.876.832-.589 2.059.048 2.847.726.896 2.961 2.89 3.845 3.667.878-.779 3.098-2.771 3.831-3.665.662-.808.936-2 .047-2.844a2.182 2.182 0 00-1.513-.593z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.688 10.911c-.975 1.188-4.687 4.435-4.687 4.435s-3.743-3.247-4.711-4.442c-1.141-1.411-1.12-3.241.049-4.351.61-.58 1.419-.898 2.279-.898s1.668.319 2.278.898l.096.091.09-.086a3.291 3.291 0 012.278-.897c.86 0 1.668.317 2.279.897 1.2 1.138 1.218 2.927.049 4.353z"></path></svg></span></span></div></div></div>Trending</strong> 
          <h3 class="mb-0">Ujjain</h3>
           
          <p class="card-text mb-auto">An ancient city situated on the eastern bank of the Shipra River, Ujjain was the most prominent city on the Malwa plateau of central India for much of its history. It emerged as the political centre of central India around 600 BCE. It was the capital of the ancient Avanti kingdom, one of the sixteen mahajanapadas. It remained an important political, commercial and cultural centre of central India until the early 19th century, when the British administrators decided to develop Indore as an alternative to it. Ujjain continues to be an important place of pilgrimage for Shaivites, Vaishnavites and followers of Shakta.</p>
          <a href="https://en.wikipedia.org/wiki/Ujjain" class="stretched-link">Read More</a>
        </div>
        <div class="col-auto d-none d-lg-block">
           <img src="https://source.unsplash.com/200x250/?mahakal temple,Ujjain temple" class="img-fluid" alt="">

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger"><div class="save_icon"><div class="react-container component-widget saveToTripWrapper" id="@ta/trips.save-to-trip:location:8293999_component_1" data-component-props="page-manifest" data-component="@ta/trips.save-to-trip" data-component-init="data-component-init"><div class="bGFob u _S doaMY"><span class="cWdXe Z1 duwGB"><span class="cktrf cQOOa"><svg viewBox="0 0 24 24" width="1em" height="1em" class="fecdL d Vb wQMPa"><path d="M12 2C6.487 2 2 6.487 2 12c0 5.515 4.487 10 10 10 5.515 0 10-4.485 10-10 0-5.513-4.485-10-10-10zm4.688 10.911c-.975 1.188-4.687 4.434-4.687 4.434S8.258 14.1 7.29 12.903c-1.14-1.411-1.12-3.241.049-4.351.611-.58 1.42-.898 2.279-.898s1.668.318 2.279.898l.096.092.09-.087a3.296 3.296 0 012.278-.897c.86 0 1.669.318 2.277.897 1.201 1.139 1.219 2.929.05 4.354z"></path></svg></span><span class="cktrf PlwLo"><svg viewBox="0 0 24 24" width="1em" height="1em" class="fecdL d Vb wQMPa"><path d="M14.361 8.768c-.574 0-1.111.211-1.516.594l-.854.812-.861-.819c-.401-.382-.939-.592-1.513-.592s-1.111.21-1.514.593c-.876.832-.589 2.059.048 2.847.726.896 2.961 2.89 3.845 3.667.878-.779 3.098-2.771 3.831-3.665.662-.808.936-2 .047-2.844a2.182 2.182 0 00-1.513-.593z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.688 10.911c-.975 1.188-4.687 4.435-4.687 4.435s-3.743-3.247-4.711-4.442c-1.141-1.411-1.12-3.241.049-4.351.61-.58 1.419-.898 2.279-.898s1.668.319 2.278.898l.096.091.09-.086a3.291 3.291 0 012.278-.897c.86 0 1.668.317 2.279.897 1.2 1.138 1.218 2.927.049 4.353z"></path></svg></span></span></div></div></div>Trending</strong>
          <h3 class="mb-0">Gwalior</h3>
          
          <p class="mb-auto">Gwalior was the winter capital of the state of Madhya Bharat which later became a part of the larger state of Madhya Pradesh. Prior to Indian independence on 15 August 1947, Gwalior remained a princely state of the British Raj with the Scindia as the local rulers. High rocky hills surround the city from all sides, on the north it just forms the border of the Ganga- Yamuna Drainage Basin. The city however is situated in the valley between the hills. Gwalior's metropolitan area includes Gwalior city centre, Morar Cantonment,[2] Lashkar Gwalior (Lashkar Subcity), Maharaj Bada, Phool Bagh, Thatipur</p>
          <a href="https://en.wikipedia.org/wiki/Gwalior" class="stretched-link">Read More</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="gwalior.jpg"  class="img-fluid"alt="">
        </div>
      </div>
    </div>
  </div>
</div>
</section_content>
  
  <div class="container my-3 ">
    <div class="card border-light text-center" >
      <div class="card-header bg-secondary border-dark"style="border:1px solid black;"> <h3 >Why Tripocity...?</h3></div>
    </div>
  </div>
  <div class="container contact_container">
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
    <p>A Trip Planner<a href="..">Tripocity</a> by <a href="...">@Yav</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
</body>

</html>