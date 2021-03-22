



<!DOCTYPE html>
<html>
<head>
	<title>Dropdown</title>
</head>
<body>
    <div class="container">
    	<select class="data"method="post"action=""name="list1">
    		<option></option>
    		<option name="name"value="">name</option>
    		<option name="city">city</option>
    	    <option name="phone">phone</option>
    	</select>
   
  
    <input type="search" name="search"id="search">
    <input type="submit"value="Search" name=""onclick="insertvalue();">
   <script type="text/javascript">
   	function insertvalue()
   	{
   		var select=document.getElementById('list1');
   	}
   </script>
 

    </div>



</body>
</html>