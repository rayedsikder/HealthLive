<html>




<head>
  <title></title>
  <link rel="stylesheet" href="Ward_Information_Form.css" />
 </head>
<body>
<div class="from_name" >
<h1>Ward Information Form</h1>

<form action="Ward_Information_Form.php" method="post">

       
	  
       <div class="ward_id ">
                     WARD ID :
                     <p><input type="number" name="wardid" required  /></p><br/>
	   </div>			 
	   <div class="registrar_id">				 
                     REGISTRAR ID :
                     <p><input type="number" name="registrarid"  required /></p><br/>
	   </div>
	   <div class="nurse_supervisor_id">				 
                     NURSE SUPERVISOR ID:
                     <p><input type="number"name="nursesupervisorid" required /></p><br/>
	   </div>	 
	   <div class="ward_name">				 
                     WARD NAME:
                     <p><input type="text"name="wardname" required /></p><br/>
	   </div>
	   <div class="registrar_name ">				 
                     REGISTRAR NAME:
                     <p><input type="text"name="registrarname" required /></p><br/>
	   </div>
	   <div class="nurse_supervisor_name">				 
                     NURSE SUPERVISOR NAME:
                     <p><input type="text"name="nursesupervisorname" required /></p><br/>
	   </div>
	   
	  
	 
       <h3>Bed Information</h3>
       <table border="2"style="width:55%; margin-left:200px; margin-top:-300px;">
       
       <tr>
       <th>SERIAL NO</th>
       <td><input type="number" name="serial_no" placeholder="Serial No" required></td>
       </tr>
	   
	   <tr>
       <th>BED NO</th>
       <td><input type="number" name="bedno" placeholder="Bed No" required></td>
       </tr>
	   

	   <tr>
       <th>BED TYPE</th>
       <td><input type="text" name="bedtype" placeholder="Bed Type" required></td>
       </tr>
	   
	   <tr>
       <th>RENT</th>
       <td><input type="number" name="rent" placeholder="Rent" required></td>
       </tr>

	   <tr>
       <th>EMPTY OR NOT EMPTY</th>
       <td><input type="text" name="emptyornotempty" placeholder="Empty or Not Empty" required></td>
       </tr>

	 
	  <div class="submit">
	  <p><input type="submit" name="submit"id="submit" value="submit"></p><br/>
      </div>


</form>
</div>
</body>
</html>