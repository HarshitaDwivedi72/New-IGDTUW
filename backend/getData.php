<?php

function getFaculty($name){
	include ('connect.php');

	echo '<table>';
		$count=0;	
		$sql="SELECT name,username FROM users where department='".$name."' and type='faculty' order by seniority";
		$result = mysqli_query($conn,$sql);
 		while($row = mysqli_fetch_array($result))
	    {
       		$count++;
			$sqlquery = "SELECT * from faculty where username='" . $row['username'] . "'";
			$myresult = mysqli_query($conn,$sqlquery);
			$myrow = mysqli_fetch_array($myresult);

			if($myrow['name']!='' && $myrow['designation']!=''){

				echo 	'<tr>
		        	<th>Name : </th>
		        	<td><a href="appliedScience.php?name='.$myrow['username'].'" target="_blank">'.$myrow['name'].'</a></td>
		        	<td rowspan="2"><img class="facultyDImage" src="uploads/'.$myrow['file'].'" width="auto" height="200px"></td>
		    	</tr>
		    	<tr>
	                <td>Designation : </td>
	                 <td>'.$myrow['designation'].'</td>
	            </tr>';
	        }
	    }	
	echo '</table>';
	
}
function getFacultyInfo($username)
{
	include ('connect.php');
	$sqlquery = "SELECT * from faculty where username='" . $username . "'";
	$myresult = mysqli_query($conn,$sqlquery);
	$myrow = mysqli_fetch_array($myresult);

	if($myrow['name']!='' && $myrow['designation']!=''){

		echo '
		<div class="middleBox">
			<div class="title">
				Department of Applied Science and Humanities
				<br>
				Faculty Profile
			</div>
		<div class="headingPara">
			<div class="pHeading">'.$row['name'].'</div>
			<img src="uploads/'.$file.'" alt="" class="labImages" width="200px" height="150px">
				
				<table class="facultyTable">
					<tr>
						<th>Qualifications :</th>
						<td colspan="2">'. $row['qualification'].'</td>
					</tr>
					<tr>
					<th>Designation :</th>
					<td colspan="2">'. $row['designation'].'</td>
					</tr>
					<tr>
					<th>Teaching Interests :</th>
					<td colspan="2">'. $row['teach_interests'].'</td>
					</tr>
					<tr>
						<th>Office Address "</th>
						<td colspan="2">'. $row['office_add'].'</td>
					</tr>
					<tr>
					<th>Office Phone Number :</th>
					<td colspan="2">'. $row['office_phone'].'</td>
					</tr>
					<tr>
						<th>Email :</th>
						<td colspan="2">'. $row['email'].'</td>
					</tr>
				   
					
					<tr>
						<th>Research Areas :</th>
						<td colspan="2">'. $row['research_area'].'</td>
					</tr>
					<tr>
						<th>Website :</th>
						<td colspan="2"><a href="'. $row['website'].'" target="_blank">'.$row['website'].'</a></td>
					</tr>
				</table>
			</div>
		</div>';
    }
}

?>

		
	
	