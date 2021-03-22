 <?php
$conn=mysqli_connect("localhost","root","","geeta_transport") ;
if(!$conn)
{
  die("connection failed") ;
}
echo " connection sucess <br/>";
if(isset($_POST['submit'])) 
{
      if (($_POST['from']=="") || ($_POST['to']=="")||($_POST['material']=="")||($_POST['weight2']=="") || ($_POST['truck_type']=="")||($_POST['no_of_trucks']=="")||($_POST['date']==""))
      {
          echo" <p style='color:red;'>"."fill your form"."</p>";
      }
      else
      {
        // $weight=$_POST['weight1'];
        $from1=$_POST['from'];
        $to1=$_POST['to'];
        $materials=$_POST['material'];
        $weights=$_POST['weight2'];
        $truck_typ=$_POST['truck_type'];
        $no_of_truck=$_POST['no_of_trucks'];
        $pickup_date=$_POST['date'];
        // $checkbox=$_POST['checkbox'];
        $sql="INSERT INTO geeta_form3(froms,too,material,weight,truck_type,no_of_trucks,dates) VALUES('$from1','$to1','$materials','$weights','$truck_typ','$no_of_truck','$pickup_date')";
         if ($sqli=mysqli_query($conn,$sql))
         {
          echo "data insert";
         }
         else
         {
         echo " no data insert".mysqli_error('$sqli');
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

  
<form class="needs-validation form-border"action=""method="POST">


  <!-- <div class="form-row text-center">
       <div class="form-title col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Post your load detail</b>
       </div>
 </div>

 <div class="row">
    <div class="col-md-4">
   <p>Load Type<b style="color: red">*</b></p>
    </div>
    <div class="col-md-4">
        <input type="radio" name="weight1"value="above 5 tonn">Full Load<h6>(above 5 Tonn)</h6>  
    </div>
    <div class="col-md-4">
        <input type="radio" name="weight3"value="below 5 tonn">Part Load<h6>(below 5 Tonn)</h6>  
    </div>
 </div>     -->
<div class="row">
     <div class="col-md-6 mb-3">
          <label for="validationTooltip01">From </label>
          <input type="text" class="form-control" id="validationTooltip01" name="from"placeholder="source city" required>
   
     </div>
     
     <div class="col-md-6 mb-3">
          <label for="validationTooltip02">To</label>
          <input type="text" class="form-control"  id="validationTooltip02" name="to" placeholder ="Destination City" required>
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
     
     <div class="col-md-6 mb-3">
             <label for="validationTooltip04">Weight(Tonn)</label>
          <select class="form-control" id="validationTooltip04"name="weight2">
                <option>Weight</option>
                <option>Above 10 tonn</option>
                <option>1 tonn</option>
                <option>2 tonn</option>
                <option>3 tonn</option>
          </select>
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
               <label for="validationTooltip06">NO Of Trucks</label>
           <select class="form-control" id="validationTooltip04"name="no_of_trucks">
               <option>NO Of Trucks</option>
               <option>1 </option>
               <option>2 </option>
               <option>3 </option>
               <option>More than 5</option>
           </select>
    </div>
   
</div>

<div class="row">
     <div class="col-md-6 mb-3">
          <label for="validationTooltip01">Pickup date</label>
          <input type="text" class="form-control" id="validationTooltip01" placeholder ="pickup date"name="date" required>
   
     </div>
   </div>



 <!-- <div class="form-group">
    <div class="form-check">
      <input class="" type="checkbox" value="yes i Agree to terms and conditions" name="checkbox" required>
      <label class="form-check-label" for="">
        Agree to terms and conditions
      </label>
      
    </div>
  </div> -->
    <!-- <a class="btn btn-primary btn-lg" href="" role="button"name="submit">Submit</a>  -->
    <button class="btn btn-primary btn-lg" role="button"name="submit">Submit</button> 
</form>

  <script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

 </body>
</html> 