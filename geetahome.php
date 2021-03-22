




 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible"content="ie-edge">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="geeta.css">

  
 	<title>Geeta Transport</title>
</head>
<body>

   <!-navigation bar-->
    <div class="navbar navbar-expand-sm navbar-light navbar_back ">
      <a class='navbar-brand ' href=""><img src="image/pick-up.jfif"width=80,height=70 class="rounded  mr-3 "><span class="h2  logo-img ">Transport</span></a>
      <button type="button"class="navbar-toggler navbar-toggler-icon"data-toggle="collapse"data-target="#target"role="button"></button>
      <div class="navbar navbar-collapse"id="target">
            <ul class="navbar-nav nav-tabs ">

            <li class="nav-item links "><a class="nav-link  text-warning active"href="geetahome.php"data-toggle="tooltip"data-placement="bottom"title="home">Home</a></li>
            <li class="nav-item links "><a class="nav-link text-white   "href="services.php"data-toggle="tooltip"data-placement="bottom"title="Services">Services</a></li>
            <li class="nav-item links "><a class="nav-link text-white "href="Contact.php"data-toggle="tooltip"data-placement="bottom"title="Contact">Contact</a></li>
            <li class="nav-item links"><a class="nav-link text-white"href="message.php"data-toggle="tooltip"data-placement="bottom"title="Message">message</a></li>
 

            </ul> 
            <form class="form-inline">
              <input class="form-control mr-sm-2">
              <button class="btn btn-outline-info"type="button">Search</button>
            </form>  

  
      </div>   
     </div>  
     <!-- for background image -->

  <div>
    <div class="bg-image  ">
      <div class="container-fluid ">
        <p class="text-center h1 website-margin">Geeta Transport</p>
        <p class="text-center h4 ">Fast and Safe</p>
    
      </div>
    </div>  
  </div>
  

<!-- jumbotron -->
<div class="jumbotron text-justify bg-jumbo">

  <h1 class="display-4 ">Welcome to Geeta Transport</h1>
  <p class="lead">We are happy to serve you that transport service.Geeta Transport is a safe,fast and easiest way to provides your goods service. </p>
  <hr class="my-4">
  <p><b>Geeta Transport</b> is a leading portal for transport industry.Connecting transporter, truck driver,customer and other related entities.Simplicity speed and efficiency drive your bussiness and this is our focus as well.We allow the user to share the information for expansion of service to the customers by providing better rates and vehicles.this service will make the movement of the vehicle and material more efficient.We will provide information to register user about the availability of the loads and vehicles in the city.</p>
  <a class="btn btn-primary btn-lg" href="learn_more.php" role="button">Learn more</a>
</div>
 </div>
          <!-- for form !-->
 

<form class="needs-validation form-border"action=""method="POST">


  <div class="form-row text-center">
       <div class="form-title col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Post your load detail</b>
       </div>
 </div>

 <div class="row">
    <div class="col-md-4">
   <p>Load Type<b style="color: red">*</b></p>
    </div>
    <div class="col-md-4">
        <input type="radio" name="weight1">Full Load<h6>(above 5 Tonn)</h6>  
    </div>
    <div class="col-md-4">
        <input type="radio" name="weight1">Part Load<h6>(below 5 Tonn)</h6>  
    </div>
 </div>    
<div class="row">
     <div class="col-md-6 mb-3">
          <label for="validationTooltip01">From </label>
          <input type="text" class="form-control" id="validationTooltip01" name="from"value="Source city" required>
   
     </div>
     <div class="valid-tooltip">
        Looks good!
     </div>
     <div class="col-md-6 mb-3">
          <label for="validationTooltip02">To</label>
          <input type="text" class="form-control"  id="validationTooltip02" name="to" value="Destination City" required>
     </div>
    
     <div class="valid-tooltip">
        Looks good!
      </div>
</div>
<div class="row">
     <div class="col-md-6 mb-3">
          <label for="validationTooltip03"> Material </label>
      
          <select class="form-control"id="validationTooltip03"name="material"> 
                <option>Material</option>
                <option>building material</option>
                <option>Home furniture</option>
                <option>cement</option>
                <option>vegetables</option>
          </select>
     </div>
     <div class="valid-tooltip">
        Looks goods!
     </div>
     <div class="col-md-6 mb-3">
             <label for="validationTooltip04">Weight(Tonn)</label>
          <select class="form-control" id="validationTooltip04"name="weight1">
                <option>Weight</option>
                <option>Above 10 tonn</option>
                <option>1 tonn</option>
                <option>2 tonn</option>
                <option>3 tonn</option>
          </select>
    </div>    
    <div class="valid-tooltip">
        Looks good!
      </div>
</div>      
<div class="row">
    <div class="col-md-6 mb-3 ">
              <label for="validationTooltip05"> Truck Type </label>
           <select class="form-control"id="validationTooltip05"name="truck_type"> 
                <option>Truck Type</option>
                <option>Pick-Up</option>
                <option>Mini-truck</option>
                <option>Small-Lorry</option>
                <option>Big-lorry</option>
           </select>
    </div>
    <div class="invalid-tooltip">
        please choose valid type!
    </div>
    <div class="col-md-6 mb-3">
               <label for="validationTooltip04">NO Of Trucks</label>
           <select class="form-control" id="validationTooltip04"name="no_of_trucks">
               <option>NO Of Trucks</option>
               <option>1 </option>
               <option>2 </option>
               <option>3 </option>
               <option>More than 5</option>
           </select>
    </div>
    <div class="invalid-tooltip">
          please choose valid no of trucks!
    </div> 
</div>

<div class="row">
     <div class="col-md-6 mb-3">
          <label for="validationTooltip01">Pickup date</label>
          <input type="text" class="form-control" id="validationTooltip01" value="pickup date"name="date" required>
   
     </div>
   </div>



 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck"name="checkbox" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
     <!--  <div class="invalid-feedback">
        You must agree before submitting.
      </div> -->
    </div>
  </div>
    <a class="btn btn-primary btn-lg" href="" role="button"name="submit">Submit</a>  
</form>



<!-- accordion advantages -->
<header class="card-header text-center h2 mt-4 pt-4 pb-4">----About Us----</header>
<div class="container">
        <div class="accordion"id="accordionExample">
        <div class="card">
        <div class="card-header"id="headingOne">
            <h5 class="mb-0"><button class="btn btn-outline-info btn-lg" type="button"data-toggle="collapse"data-target=".first">Who We Are ?</button></h5>
        </div>
        <div class="first collapse"data-parent="#accordionExample">
        <div class="card-body text-justify">
            <p class="çard-text">Geeta Transport is a premier provider of transport services across the country and helping our patrons to transport any freight, any size, anywhere in India. We cover a vast gamut of transportation solutions to present our clients with customized options to meet their needs. Our online truck booking app has been proved the blessing to our customers when they book truck online Delhi or do online truck booking Chennai. Our team works closely with our consumers to look at their whole supply chains, from point of origin to the end-consumer, to find the new opportunities.</p>
        </div>
        </div> 
        </div>
        <div class="card">
        <div class="card-header"id="headingOne">
            <h5 class="mb-0"><button class="btn btn-outline-info btn-lg" type="button"data-toggle="collapse"data-target=".second">What We Do ?</button></h5>
        </div>
        <div class="second collapse "data-parent="#accordionExample">
        <div class="card-body text-justify">
            <p class="çard-text">Our company is majorly engaged in two segments - Logistics and Transportation. We have crafted a complete suite of Logistics and Transportation solutions that incorporates-Transportation Management System</p>
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header"id="headingOne">
           <h5 class="mb-0"><button class="btn btn-outline-info btn-lg" type="button"data-toggle="collapse"data-target=".third">Why Choose Us ?</button></h5>
        </div>
        <div class="third collapse "data-parent="#accordionExample">
        <div class="card-body text-justify">
           <p class="çard-text">24/7 services Security certified drivers SMS/Email alerts Estimated delivery time Over 500 vehicles 100% customer satisfaction</p>
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header"id="headingOne">
           <h5 class="mb-0"><button class="btn btn-outline-info btn-lg" type="button"data-toggle="collapse"data-target=".fourth">Why Are Best From Others ?</button></h5>
        </div>
        <div class="fourth collapse "data-parent="#accordionExample">
        <div class="card-body text-justify">
            <p class="çard-text">We make it faster.We adopt a systematic and collaborative approach.Save you on money by reducing operational expenses.Safe, quick and on-time delivery.Above all, we’ve hired top-shelf talent – experienced operators and officials who know how to serve our clients to reduce costs and improve their productivity. We immediately respond to our customers’ needs who use our feature-rich and user-friendly truck booking app for better transportation and logistics services.</p>
        </div>
        </div> 
        </div> 
</div>
</div>  
<header class="card-header text-center h2 mt-4 pt-4 pb-4">Our Advantage</header>
<div class="container">
<div class="row">
  <div class="col-md-4">
    <div class="row">
     <div class="col-md-4">
      <a href=""><img src="image/loading-truck.png"width=100,height=100"></a>
    </div>
     <div class="col-md-7 text-justify">
        <h3>Full load services</h3>
        <p> We provide Full Truck load transportation services with varied type of trucks available with the click of a button..</p>
    </div>
  </div>
  <div class="row">
     <div class="col-md-4">
      <a href=""><img src="image/Portal1.png"width=100,height=100"></a>
    </div>
     <div class="col-md-7 text-justify">
        <h3>Customer Portal</h3>
        <p>Hiring a truck is now just a click away, through our hassle free online booking system..</p>
    </div>
  </div>
  <div class="row">
     <div class="col-md-4">
      <a href=""><img src="image/gps-tracking1.jfif"width=100,height=100"></a>
    </div>
     <div class="col-md-7 text-justify">
        <h3>Gps Tracking</h3>
        <p> transportation services with a varied type of trucks available with the click of a button.</p>
    </div>
  </div>
</div>
  <div class="col-md-4">
    <div class="row">
    <div class="col-md-12">
        <img src="image/mobile.png"class=""height="500px"width="400px">
  </div>
  </div>
</div>
   <div class="col-md-4">
 <div class="row">
     <div class="col-md-4">
      <a href=""><img src="image/transparent-price1.jfif"width=100,height=100"></a>
    </div>
     <div class="col-md-7 text-justify">
        <h3>Transparent Price</h3>
        <p> With our fare calculator, we instantaneously give you best possible rates online.</p>
    </div>
  </div>
<div class="row">
     <div class="col-md-4">
      <a href="#"><img src="image/advancebooking2.png"width=100,height=100></a>
    </div>
     <div class="col-md-7 text-justify">
         <h3>Advanced Booking</h3>
        <p>Our vehicle availability is guaranteed on daily/weekly/monthly basis to ensure on-time reporting..</p>
    </div>
  </div>
  <div class="row">
     <div class="col-md-4">
      <a href=""><img src="image/services2.jfif"width=100,height=100></a>
    </div>
     <div class="col-md-7 text-justify">
        <h3>24/7 Services</h3>
        <p>Get real time updates of your goods with our simplified technology.</p>
    </div>
  </div>
</div>

</div>
</div>

<!-- footer part -->

<footer class="card-header border border-info footer">
<p class="text-center h1 information">Company's Information</p> 
<div class="container">
  
  <div class="row">
    <div class="col-sm-6 ">
      <h2>About our company</h2>
      <p class="text-justify">Geeta transport, a leading transport and logistics service provider is introducing a truly innovative, modern and high-tech online platform to book the truck in a few simple steps.It will reach your destination before giving time.</p>
    <div class="row">
         <div class="col-sm-6 ">
          <h2>Contact us:</h2>
          <p>Email:rajveersinghrawat24051999@gmail.com</p>
          <p >whatsapp:9829273311</p>
          <p>mobile no:9829273311</p>
         <a href=""class="btn btn-primary btn-lg">Go to Top</a>
         </div>
    </div>
    </div>
    <div class="   col-sm-4  offset-2">
     <h2>Our Services</h2> 
     <p>vegetables</p>
     <p>House shift</p>
     <p>Rcc material load</p>
     <p>Cement Load </p>
     <p>Travelling</p>
     <p>Parcel Load(acc to cartoon)</p>

    </div>
  </div>
<h3 class="text-center">Top-cities</h3>
<div class="text-center">
<span >All Rajasthan</span>
<span class="ml-sm-4">Madhya Pardesh</span>
<span class="ml-sm-4">Kota</span>
<span class="ml-sm-4">Jodhpur</span>
<span class="ml-sm-4">Jaislaimer</span>
<span ></span>
</div>

</div>
<div class="card-header h4 text-center designed"><span class=" designed_color">Designed By: Rajveer singh rawat</span></div>
</footer>

 <script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script >
  $(function (){
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
 </body>
</html> 