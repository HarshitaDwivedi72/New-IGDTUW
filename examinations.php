<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examination</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="stylesheet/style1/departments.css">
    
   

<!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> -->
</head>

<body onload="main()">

  <script>
        function main()
        {
            
            var r=<?php echo $_GET['id'];?>;
            $('#'+r).addClass('high');
        }   
    </script>
    <?php 
        if(isset($_GET['id']))
        $id=$_GET['id'];
        else
        $id='';
    ?>
    

    <!-- header -->
    <?php include 'header.php';?>
    <!-- main body -->

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        <a href="examinations.php">EXAMINATION</a>
                    </div>
                    <ul class="sidenav">
                        <li><a href="examinations.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Dean (Examinations)</a></li>
                        <li><a href="examinations.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Datesheets</a></li>
                        <li><a href="examinations.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Exam Notices</a></li>
                        <li><a href="examinations.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Results</a></li>
                        <li><a href="http://examination.igdtuw.ac.in/Examination_v2/users/login?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Exam Portal</a></li>


                    </ul>

                </div>
            </div>
			
		            <div class="col-sm-9">
                <?php 
                
                  if($id==1)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">DEAN ( EXAMINATION )</div>
                                   <div class="profile">
                                    <div class="pHeading">Prof. S. R. N. Reddy</div>
                                    <div class="pText">Dean (Examination)</div>
                                   </div>
                                    <div class="headingPara">
                                       <img src="images/srn.jpg" class="hodImage" alt="Prof. S. R. N. Reddy" height="200px" width="auto">
                                         Examination division has a huge responsibility on ensuring the objectives of the teaching and learning process of various programmes of the University and provide the services to different stake holders such as students, faculty, 
			                             head of the departments, Academic branch etc. of the system. The section provides the feedback and scope to improve. Activities of examination is immense accountability and requires efficiency and 
			                             transparency to be maintained in a time bound manner.
			                             <br><br>
										 At Indira Gandhi Delhi Technical University for Women, the Examination Division is committed to conduct essential dutiesof various examinations like Internal Mid Semester Examinations, End Semester Examinations, Entrance Examinations for 
			                             Ph.D and MCA, Practical Examinations and Recruitment tests of Teaching and Non Teaching Staff.
										 <br><br>
                                        In such a short span of time the University has not only organized different examinations of varying scales, but has also developed inhouse online examination portal which ensure 
			                            efficiency and effectiveness in the examination system and renders convenience to all the stakeholders and this division is under the process of improvement of the same and providing the cloud based 
			                            mobile applications towards the results, dates sheet etc.  
										<br><br>
										 The Examination division of IGDTUW is working for continuous development and endeavours towards the complete automation of the system by creating centralize examination 
			                             committee (CEC) to provide transparency for the benefit of the 
			                             students and different stake holders of the system. 
										 <br><br>
										 <b>Prof. S. R. N. Reddy
										 <br>
                                         Dean (Examinations), IGDTUW</b>

  
									</div>
                            </div>';
                
                }
                else if($id==2){
                echo '  <div class="middleBox">
                            <div class="title">
                           Date Sheets of Examinations
                            </div>
     
                            <div class="headingPara">
                            <table>
                            <tr>
                                <th>Title</th>
                                    <th>File</th>
                                    <th>Date of Upload</th>
                                 </tr>
                
                            <tr>
                                <td >Final End Term Practical Examination Date Sheet for B.Tech (CSE/ECE/IT/MAE) Programme (Regular and Reappear), November-December 2019</td>
                                <td><a target="_blank" href="">View/Download</a></td>
                                <td >2019-11-28</td>
                            </tr>
                            
                        </table>
                            </div>
   
                        </div>';
                }
                else if($id==3){
                 echo '
                        <div class="middleBox">
                                <div class="fTitle">
                                    Notices related to Examinations Division
                                </div>
                                 <div class="headingPara">
                                 <table>
                                 <tr>
                                     <th>Title</th>
                                     <th>File</th>
                                     <th>Date of Upload</th>
                                 </tr>
                             
                                 <tr>
                                     <td>Circular regarding Extension of date for Registration of Students</td>
                                     <td><a target="_blank" href="uploads/New Doc 2019-09-02.pdf">View/Download</a></td>
                                     <td>2019-09-02</td>
                                 </tr>
                                 
                             </table> 
                                 </div>
                                        
                                    
                               
                        </div>';
                }
                else if($id==4){
                        echo ' <div class="middleBox">
                                    <div class="title">
                                       Examination Results
                                    </div>
                                     <div class="headingPara">
                                     <table >
                                     <tr>
                                         <th>Title</th>
                                         <th>File</th>
                                         <th>Date of Upload</th>
                                     </tr>
                                 
                                     <tr>
                                         <td>M.Tech ICT Supplementary Exam Result July 2019</td>
                                         <td><a target="_blank" href="uploads/M.TECH ICT PART-TIME_compressed.pdf">View/Download</a></td>
                                         <td>2019-08-19</td>
                                     </tr>
                                     
                                 </table>  
                                     </div>

                                </div>';
                }


                

       
                else{
                    echo '<div class="middleBox">
                                 <div class="title">
                                 Examination Division 
                                </div>
                                 <div class="headingPara">
                                 
                                 Examination branch is the most crucial and inevitable part of any institution. 
								 It is actively involved in the evaluation process of students. 
								 The branch conducts exams for the programmes offered by the University that includes End semester examination for 
								 various programs and CET for admission to programmes.
                                 <br><br>
                                 The branch is headed by <b>Prof. S.R.N Reddy</b> as Dean (Examination Affairs)
						 </div>';
                }
                ?>
            </div>
        
        </div>
    </div>
    
    <!-- footer -->
    <br>
    <br>
    
    <?php include 'footer.php';?>

</body>

</html