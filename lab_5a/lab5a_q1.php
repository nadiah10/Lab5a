<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
    <body>
        <?php
        $name = "Nur Ariffin Mohd Zin";
		$matric_number= "AI22939";
		$course="Bachelor of Web Technology";
		$year_of_study="3";
		$address="No.10, Jalan Pelutong, Kuala Lumpur";
        ?>
		
 <table border="1">
   <tr>
       <td>Name</td>
       <td><?php echo "$name"; ?></td>
   </tr>
   <tr>
       <td>Course</td>
	   <td><?php echo "$matric_number"; ?></td>
	</tr>
	<tr>
	    <td> Year Of Study</td>
		<td><?php echo "$year_of_study"; ?></td>
	</tr>
	<tr>
         <td>Address</td>
         <td><?php echo "$address"; ?></td>
    </tr>
 </table>

</body>
</html>