<?php
	$UPLOADS_DIR='../uploads/';

function getDataAll(){
	include ('connect.php');
	$sql="SELECT department FROM users where type='faculty' order by seniority";
	$result = mysqli_query($conn,$sql);
 		while($row = mysqli_fetch_array($result)){
			echo '<pre>'.$row['department'].'</pre>'; }

		 }

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
		        	<td rowspan="2"><img class="facultyDImage" src="' . $UPLOADS_DIR . $myrow['file'] .'" width="auto" height="200px"></td>
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
	
	if($myrow['name']!='' && $myrow['designation']!=''&& $myrow['qualification']!=''){
	
		echo '
			<div class="headingPara">
			<div class="pHeading">'.$myrow['name'].'</div>
			<img src="' . $UPLOADS_DIR . $myrow['file'] .'" alt="" class="labImages" width="200px" height="150px">
				
				<table class="facultyTable">
					<tr>
						<th>Qualifications :</th>
						<td colspan="2">'. $myrow['qualification'].'</td>
					</tr>
					<tr>
					<th>Designation :</th>
					<td colspan="2">'. $myrow['designation'].'</td>
					</tr>
					<tr>
					<th>Teaching Interests :</th>
					<td colspan="2">'. $myrow['teach_interests'].'</td>
					</tr>
					<tr>
						<th>Office Address :</th>
						<td colspan="2">'. $myrow['office_add'].'</td>
					</tr>
					<tr>
					<th>Office Phone Number :</th>
					<td colspan="2">'. $myrow['office_phone'].'</td>
					</tr>
					<tr>
						<th>Email :</th>
						<td colspan="2">'. $myrow['email'].'</td>
					</tr>
				   
					
					<tr>
						<th>Research Areas :</th>
						<td colspan="2">'. $myrow['research_area'].'</td>
					</tr>
					<tr>
						<th>Website :</th>
						<td colspan="2"><a href="'. $myrow['website'].'" target="_blank" class="sideHeading">'.$myrow['website'].'</a></td>
					</tr>
				</table>
			</div>';
			
			//journal
			$selected ="SELECT * from journal where username='$username' order by pub_year desc";
			if($result=mysqli_query($conn,$selected))
			 {
			   $rowcount = mysqli_num_rows($result);
			 }
			 if($rowcount){
				
					echo '<div class="title">
								JOURNAL PAPERS
						</div>
						<div class="headingPara">
						<table>';

			while ($row = mysqli_fetch_array($result)){
				echo '
				
					<tr>
						<td><b>'.$row['authors'].' </b>:'.$row['title'].' ,'
						.$row['name_of_journal'].' ,
						 VOL : '.$row['volume'].',
						PP :'.$row['page_no'].',
					 YEAR : '.$row['pub_year'].'.</td>
					</tr>
				
				';
			}

			echo '</table>
			</div>';
			
			}

			// conference
	$selected ="SELECT * from conference where username='$username' order by year desc";
		if($result=mysqli_query($conn,$selected))
			{
			$rowcount = mysqli_num_rows($result);
			}
			if($rowcount)
			{
				echo '<div class="title">
				CONFERENCE PAPERS
				</div>
				<div class="headingPara">
				<table>
				';
				while ($row = mysqli_fetch_array($result)){
					echo '
					
						<tr>
							<td><b>'.$row['authors'].'</b> : '.$row['title'].',
							'.$row['name_of_conf'].',YEAR: '.$row['year'].', VENUE: '.$row['venue'].','
							.$row['publisher'].'
						PP : '.$row['page_no'].'.</td>
						</tr>
					
					';
				}
	
				echo '</table>
				</div>';
			}
	
    }
}

function getAchievements($name) {
	#echo 'hello';
	include ('connect.php');
	echo '<table>';
        echo '<tr>
	<th style="width:7%;">S.No.</th>
        <th style="width:25%;">Title</th>
	<th style="width:15%;text-align:center;">Year</th>
        <th style="width:53%;">Achievement Description</th>
        </tr>';
	$query = "SELECT * FROM achievements WHERE department ='" . $name ."' and approve=1 order by duration desc";
	#echo $query;
	$result = mysqli_query($conn,$query);
        $i = 1;

        while ($row = mysqli_fetch_array($result))
        	{
		echo '<tr>';
			echo '<td align="center" valign="top">'. $i .'</td>';
			echo '<td align="left" valign="top">'. $row['title'] .'</td>';
			echo '<td align="center" valign="top">'. $row['duration'] . '</td>';
			echo '<td align="left" valign="top">'. $row['content'];
			if (!empty($row['file']))
                                {
                                $df = $row['file'];
                                echo ". <br> For details, click <a target=\"_blank\" href=\"$UPLOADS_DIR$df\">here</a>.";
                                }
			echo '</td>';
		echo '</tr>';
		$i = $i + 1;
		}
        echo '</table>';
}

function getEvents($name) {
	include ('connect.php');
	echo '<table>';
        echo '<tr>
	<th style="width:7%;">S.No.</th>
        <th style="width:25%;">Event Title</th>
	<th style="width:25%;">Event Duration</th>
        <th style="width:43%;">Event Description</th>
        </tr>';
	$query = "SELECT * FROM events WHERE department = '" . $name ."' order by fromDate desc";
	#echo $query;
	$result = mysqli_query($conn,$query);
        $i = 1;
        while ($row = mysqli_fetch_array($result))
        	{
		echo '<tr>';
			echo '<td align="left" valign="top">'. $i .'</td>';
			echo '<td align="left" valign="top">'. $row['title'] .'</td>';
			echo '<td align="left" valign="top">'. $row['fromDate'] .' to ' .$row['toDate'] .'</td>';
			echo '<td align="left" valign="top">'. $row['description'];
			if (!empty($row['file']))
                                {
                                $df = $row['file'];
                                echo ". <br> For details, click <a target=\"_blank\" href=\"$UPLOADS_DIR$df\">here</a>.";
                                }
			echo '</td>';
		echo '</tr>';
		$i = $i + 1;
		}
        echo '</table>';
}


function getArchives(){
	include ('connect.php');
	$result = mysqli_query($conn,"SELECT * FROM notices where expiryDate <= now() order by expiryDate desc");
    while($row = mysqli_fetch_array($result)){
		echo '<tr>
			<th>'.$row['Title'].'</th>
			<td>'.$row['types'].'</td>
			<td>'.$row['expiryDate'].'</td>
			<td><a target="_blank" class="sideHeading" href="' . $UPLOADS_DIR . $row['file'] .'">View/Download</a></td>
			<td>'.$row['postingDate'].'</td>
		</tr>';
	}
}
function getTenders(){
	
	include ('connect.php');
	$result = mysqli_query($conn,"SELECT * FROM notices where types=\"Tenders\"order by postingDate desc");
    while($row = mysqli_fetch_array($result)){
		echo '<tr>
			<th>'.$row['Title'].'</th>
			
			<td><a target="_blank" class="sideHeading" href="' . $UPLOADS_DIR . $row['file'] .'">View/Download</a></td>
			<td>'.$row['postingDate'].'</td>
		</tr>';
	}
}

function getCareers(){
	
	include ('connect.php');
	$result = mysqli_query($conn,"SELECT * FROM notices where types=\"careers\"order by postingDate desc");
    while($row = mysqli_fetch_array($result)){
		echo '<tr>
		<th>'.$row['Title'].'</th>
			
		<td><a target="_blank" class="sideHeading" href="' . $UPLOADS_DIR . $row['file'] .'">View/Download</a></td>
		<td>'.$row['postingDate'].'</td>
		</tr>';
	}
}

?>

		
	
	