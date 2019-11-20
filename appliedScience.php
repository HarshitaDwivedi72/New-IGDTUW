<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applied Science and Humanities</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500|Roboto&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/departments.css">

    
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

<!-- Main Body -->
<div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        APPLIED SCIENCES AND HUMANITIES
                    </div>
                    <ul class="sidenav">
                        <li><a href="appliedScience.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Objectives</a></li>
                        <li><a href="appliedScience.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Head Of Department</a></li>
                        <li><a href="appliedScience.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Faculty Directory</a></li>
                        <li><a href="appliedScience.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Labs</a></li>
                        <li><a href="appliedScience.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Exteranlly Funded Research Projects</a></li>
                        <li><a href="appliedScience.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Achievements & Awards</a></li>
                        <li><a href="appliedScience.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>FDPs/Workshops/Expert Lectures</a></li>
                        <li><a href="appliedScience.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Extra Curricular Activities</a></li>
                         <li><a href="appliedScience.php?id=9" id="9"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>
                        <li><a href="appliedScience.php?id=10" id="10"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li>
                    </ul>

                </div>
            </div>
            <!-- <div class="middleBox">
                            <div class="title">

                            </div>
                            <div class="headingPara">
                            </div>
                        </div> -->
            <div class="col-sm-9">
                <?php
                    if($id==1){
                        echo '<div class="middleBox">
                            <div class="title">
                                OBJECTIVES
                            </div>
                            <div class="headingPara">
                                A strong high-rise building can be built only on a strong foundation, which signifies the importance of the Department of Applied Sciences. The important objective of the Department is to prepare and train the first year B. Tech students in Physics, Chemistry, Mathematics and Communication skills with an applied approach. The Applied Sciences Department constitutes of eight highly qualified faculties of respective subjects. The department has two well equipped laboratories of Applied Chemistry/ Environmental Studies and Applied Physics with trained staff.
                                <br>
                                In addition, we have three research labs – Nanomaterials and Thin Films Lab, Environmental Analysis and Research Lab and Digital Signal and Processing Lab where research and development is being undertaken in the field of Material Sciences, Nanomaterials and Nanotechnology, Atmospheric Chemistry, Environmental Monitoring and Analysis, Multi-aperture Imaging, Feature Specific Imaging, Spatial Light Modulators Optical Components and Devices, Optical Designs Adaptive Systems, Neural Networks Matlab.
                            </div>
                        </div>';

                    }
                    else if($id==2){
                         echo '<div class="middleBox">
                    <div class="title">
                    Head Of Department
                    </div>
                    <div class="profile">
                    <img src="images/Dr.Shalini.jpg" alt="Dr. Shalini Arora" height="200px" width="auto">
                        <div class="pHeading">Dr. Shalini Arora </div>
                        <div class="pText">(Associate Professor & Head)</div>
                        
                    </div>
                    <div class="headingPara">
                            Dr. Shalini Arora is presently heading the Department of Applied Sciences and Humanities and is working as an Associate Professor at IGDTUW.  She did her Masters and Ph.D in Mathematics from IIT Delhi. Prior to joining IGDTUW  She  worked as Assistant Professor at the Operations Management Group,  IIM Calcutta and Department of Mathematics at Lady Shri Ram College. She is a recipient of the ‘Young Scientist Award’ by the SERC division of DST. She has a teaching experience of more than 12 years. Her areas of research interest include Mathematical Programming, Allocation Problems, Combinatorial optimization etc.
                            <br>
                            <br>
                            <a href="pdfs/Research_Publications_shalini.pdf" target="_blank">Click here</a>&nbsp&nbspfor her detailed Research Publications. 

                    </div>
                    </div>';
               
                    }
                    elseif ($id==3){
                         echo '
                        <div class="middleBox">
                        <div class="fTitle">
                            FACULTY DIRECTORY OF INFORMATION TECHNOLOGY
                        </div>
                        </div>
        
                           <table>
                                <tr>
                                    <td>Name : </td>
                                    <td><a href="">Prof. R K Singh</a></td>
                                    <td rowspan="4"><img src="images/" width="auto" height="200px" vertical-align="top"></td>
                                </tr>
                                <tr>
                                    <td>Designation : </td>
                                     <td>Professor and Dean (Plg and Dev), Registrar</td>
                                </tr>
                                <tr>
                                    <td>Qualification : </td>
                                    <td>Ph.D. (IT),GGSIP University, M.S., BITS Pilani </td>
                                </tr>
                                <tr>
                                    <td>Area of Specialisation </td>
                                    <td>Software Engineering , Project Management </td>
                                </tr>
                                <tr>
                                    <td>Name : </td>
                                    <td><a href="">Dr. A.K. Mohapatra</a> (on Deputation in Delhi Police)</td>
                                    <td rowspan="4"><img src="images/ak.jfif" height="100px" width="auto"></td>
                                </tr>
                                <tr>
                                    <td>Designation : </td>
                                    <td>Associate Professor</td>
                                </tr>
                                <tr>
                                    <td>Qualification : </td>
                                    <td>Ph.D. (IT), GGSIP University, M.Tech (Computer Science), ISM Dhanbad</td>
                                </tr>
                                <tr>
                                    <td>Area of Specialisation </td>
                                    <td>Cryptography, Information Security, Network Security</td>
                                </tr>

                            
                            </table>';
                
                    }
                    elseif ($id==4){
                        # code...
                    }
                    else if($id==5){

                    }
                    else if($id==6){

                    }
                    else if($id==7){

                    }
                    else if($id==8)
                    {

                    }
                    else if($id==9){

                    echo '<div class="middleBox">
                                <div class="title">SYLLABUS</div>
                                <div class="headingPara">
                            <ul class="sidenav">
                <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>B.Tech (1st year)- Syllabus</a></li>
                
                            </ul>
                                </div>
                          </div>';
                    }
                    else if($id==10){
                         echo '<div class="middleBox">

                                <div class="title">TIME TABLE </div>
                                <div class="headingPara">
                                     <ul class="sidenav">
                        <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>B.Tech</a></li>

                                    </ul>
                                </div>
                          </div>';
                    }
                    else{
                        echo '<div class="box-1">
                    <div class="title">
                        DEPARTMENT OF APPLIED SCIENCES
                    </div>
                    <div class="headingPara">

                       A strong high-rise building can be built only on a strong foundation, which signifies the importance of the Department of Applied Sciences. The important objective of the Department is to prepare and train the first year B. Tech students in Physics, Chemistry, Mathematics and Communication skills with an applied approach. The Applied Sciences Department constitutes of eight highly qualified faculties of respective subjects. The department has two well equipped laboratories of Applied Chemistry/ Environmental Studies and Applied Physics with trained staff.
                    </div>

                </div>';
                    }
                ?>
            </div>
            <!-- <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        QUICK LINKS - ASH
                    </div>
                    <ul class="sidenav">
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>B.Tech (1st year)- Syllabus</a></li>
                        
                    </ul>

                    <div class="sideHeading">Time Table</div>
                    <ul class="sidenav">
                       
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>B.Tech</a></li>
                        
                    </ul>
                </div>
            </div> -->
        </div>
</div>
   
   <!-- footer -->
    <?php include 'footer.php';?>
</body>

</html>
