
<table align="center">
<form action="updateadvis.php" method="post">
<h1 align="center">Medical Advis Update Form</h1>

      <tr>
          <th>PATIENT ID</th>
	      <td><input type="number" name="patientid" placeholder="patient id" required="required"/></td>
		  
          <th>MIDDLE NAME</th> 
	      <td><input type="text" name="middlename" placeholder="middle name" required="required"/></td>
	
	      <td colspan="2"><input type="submit" name="submit" value="Search"/></td>

	  </tr>

</form>
</table>









<table align="center" width="80%" border="2" style="margin-top:10px ">

           <tr > 
              <th>SERIAL NO</th>
		      <th>FIRST NAME</th>
		      <th>MIDDLE NAME</th>
		      <th>LAST NAME</th>
		      <th>BED NO</th>
			  <th>WORD NO</th>
			  <th>EDIT</th>
         </tr>

		 
		 
		 
		 
		 
		
            <tr> 
               <td><?php echo $count; ?></td>
		       <td><?php echo $data['FIRST_NAME'];?></td>
		       <td><?php echo $data['MIDDLE_NAME'];?></td>
			   <td><?php echo $data['LAST_NAME'];?></td>
			   <td><?php echo $data['BED_NO'];?></td>
			   <td><?php echo $data['WORD_NO'];?></td>
		       <td><a href="update_form.php? sid=<?php echo $data['ID'] ?>">Edit</td>
          </tr>
					




</table>
