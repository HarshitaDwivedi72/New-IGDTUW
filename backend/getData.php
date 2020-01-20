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

		echo '<tr>
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

?>

		
	
	