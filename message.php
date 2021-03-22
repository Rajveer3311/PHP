  <?php 
$conn=mysqli_connect("localhost","root","","geeta_transport") ;
if(!$conn)
{
	die("connection failed") ;
}
// echo " connection sucess <br/>";
if(isset($_POST['submit'])) 
{
      if (($_POST['msg_name']=="")||($_POST['msg_number']=="") || ($_POST['msg_message']==""))
      {
      	echo" <p style='color:red;'>"."fill your form"."</p>";
      }
      else
      {
      	$name=$_POST['msg_name'];
      	$number=$_POST['msg_number'];
      	$message=$_POST['msg_message'];
        $sql="INSERT INTO geeta_msg(name,phone_number,message) VALUES('$name','$number','$message')";
      	 if (mysqli_query($conn,$sql))
      	 {
      	 	// echo "data insert";
      	 }
      	 else
      	 {
      	 // echo " no data insert";
         }
      }
}

?>

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
    <div class="navbar navbar-expand-sm navbar-light navbar_back">
      <a class='navbar-brand ' href=""><img src="image/pick-up.jfif"width=80,height=70 class="rounded  mr-3 "><span class="h2  logo-img ">Transport</span></a>
      <button type="button"class="navbar-toggler navbar-toggler-icon"data-toggle="collapse"data-target="#target"role="button"></button>
      <div class="navbar navbar-collapse"id="target">
            <ul class="navbar-nav nav-tabs">

            <li class="nav-item links"><a class="nav-link text-warning active"href="geetahome.php"data-toggle="tooltip"data-placement="bottom"title="Home">Home</a></li>
            <li class="nav-item links"><a class="nav-link text-white"href="services.php"data-toggle="tooltip"data-placement="bottom"title="services">Services</a></li>
            <li class="nav-item links"><a class="nav-link text-white"href="Contact.php"data-toggle="tooltip"data-placement="bottom"title="Contact">Contact</a></li>
            <li class="nav-item links"><a class="nav-link text-white"href="message.php"data-toggle="tooltip"data-placement="bottom"title="Message">message</a></li>

            </ul> 
            <form class="form-inline">
              <input class="form-control mr-sm-2">
              <button class="btn btn-outline-info"type="button">Search</button>
            </form>  

  
      </div>   
     </div>  

    <div class=" message"style="background-color: ">
  	<div class="container">
  		     <div class="row">
  		     <div class="  col-xs-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3     ">
  			
  		     <form class="form-group mb-3 msg_form form1"action=""method="POST"style=" ">
  			
  			   <label for="msg_name">Name:</label>
  			   <input type="text"class="form-control mb-2" name="msg_name"><br/>
  			   <label for="msg_name">Phone-Number:</label>
  			   <input type="text"class="form-control mb-2" pattern="[789][0-9]{9}"name="msg_number"><br/>
  			   <label for="msg_name">Message:</label>
               <textarea cols="20"rows="3"class="form-control mb-3"placeholder=""name="msg_message"></textarea>
               <button type="submit"class=" btn btn-info"name='submit'>submit</button>
  			 
  			 
  			 </form>
  			 </div>		
  			 </div>
  		</div>
  	</div>
  

<footer class="card-header border border-info footer">
<p class="text-center h1 information">Company's Information</p> 
<div class="container">
  
  <div class="row">
    <div class="col-md-6 ">
      <h2>About our company</h2>
      <p class="text-justify">Geeta transport, a leading transport and logistics service provider is introducing a truly innovative, modern and high-tech online platform to book the truck in a few simple steps.It will reach your destination before giving time.</p>
    <div class="row">
         <div class="col-md-6 ">
          <h2>Contact us:</h2>
          <p>Email:rajveersinghrawat24051999@gmail.com</p>
          <p >whatsapp:9829273311</p>
          <p>mobile no:9829273311</p>
         <a href=""class="btn btn-primary btn-lg">Go to Top</a>
         </div>
    </div>
    </div>
    <div class="   col-md-4  offset-2">
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
