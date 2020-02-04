<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applied Science and Humanities</title>


    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    

    
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
      <?php include 'backend/getData.php';?>


<!-- Main Body -->
<div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                       <a href="appliedScience.php"> APPLIED SCIENCES AND HUMANITIES</a>
                    </div>
                    <ul class="sidenav">
                        <li><a href="appliedScience.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Objectives</a></li>
                        <li><a href="appliedScience.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Head Of Department</a></li>
                        <li><a href="appliedScience.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Faculty Directory</a></li>
                        <li><a href="appliedScience.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Achievements & Awards</a></li>
                        <li><a href="appliedScience.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Events /Workshops /Seminars</a></li>
                        <li><a href="appliedScience.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Labs</a></li>
                        <!-- <li><a href="appliedScience.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>
                        <li><a href="appliedScience.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li> -->
                        <li><a href="appliedScience.php?id=9" id="9"><i class="fa fa-chevron-circle-right">&nbsp</i>Externally Funded Research Projects</a></li>
                        <!-- <li><a href="appliedScience.php?id=10" id="10"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Extra Corricular Acitivities</a></li> -->
                    

                        <!-- Extra corricular activities cutted -->
                    </ul>

                </div>
            </div>
           
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
                    
                        <div class="pHeading">Dr. Shalini Arora </div>
                        <div class="pText">(Associate Professor & Head)</div>
                        
                    </div>
                    <div class="headingPara">
                    <img class="hodImage" src="images/Dr.Shalini.jpg" alt="Dr. Shalini Arora" height="200px" width="auto">
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
                            FACULTY DIRECTORY OF APPLIED SCIENCES
                        </div>
                        <div class="headingPara">';
                        getFaculty("ASH");
                        echo '</div>
                        </div>';
                
                    }
                    elseif ($id==4){
                         echo '<div class="middleBox">
                         <div class="title">
                             Achievements
                         </div>
                         <div class="headingPara">';
                         getAchievements("ASH");
                                      echo '</div>
                                          </div>';
                            }
        
                    else if($id==5){
                         echo ' <div class="middleBox">
                                        <div class="title">
                                            Latest Events/ Workshops/ Seminars / Expert Lectures
                                        </div>
                                        <div class="headingPara">';
                                        getEvents("ASH");
                                        echo '  </div>
                                        </div>';
                                    }
                     else if($id==6){

                         echo '<div class="middleBox">
                                    <div class="title">
                                       Applied Physics Lab 1 &  Applied Physics Lab 2 (Optics Lab):
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/LabAS1.png" class="labImages" height="200px" width="auto">
                                       <b>LAB 1 : </b>The lab hosts experiments based on Mechanics, Thermal Physics, Electronics and basic experiments on electricity and magnetism.
                                       <br>
                                       <br>

                                       <b>LAB 2 : </b>The lab is housed in a Dark Room with experiments based on optics, ultrasonics and Lasers.
                                    </div>
                                   
                                    <div class="title">
                                        Environmental Studies Lab & Applied Chemistry Lab:
                                    </div>
                                    <div class="headingPara">
                                            <img src="images/LabAS2.png" class="labImages" height="200px" width="auto">
                                            <b>Applied Chemistry Lab </b>The lab is fully equipped to hold experiments on quantitative chemical analysis like volumetric titrations, conductometric titrations etc. Experiments based on thermo-chemistry and rate of reaction are also performed.
                                            <br>
                                            <b>Environmental Lab  : </b>   
                                            The lab holds experiments on water analysis like DO, BOD, COD, TDS etc., spectrophotometric determination of metals, soil analysis, particulate matter in the ambient atmosphere and polymer preparation.
                                               <br>
                                               <br>
                                                In addition, the department provides cutting edge research, innovation and education in emerging areas of Science and Technology. 
                                                <br>
                                                The Department presently has three Research labs:
                                                </div>
                                                <div class="title">
                                                   1. Environmental Analysis and Research Lab:         
                                                </div>
                                                <div class="headingPara">
                                                <img src="images/LabAS3.png" class="labImages" height="200px" width="auto">
                                                    The lab is equipped for the measurement, processing and analysis of aerosols and organic pollutants in the ambient Atmosphere.
                                                        Active research work is being carried out on emissions estimates of organic compounds from biomass and fossil fuels, aerosols and volatile organic compounds in atmosphere. Work is also being undertaken on bioremediation of trace metals in the waste waters.
                                                </div>
                                                <div class="title">
                                                   2. Nanomaterials and Thin Films Lab:        
                                                </div>
                                                <div class="headingPara">
                                                <img src="images/LabAS4.png" class="labImages" height="200px" width="auto">
                                                    The lab has a Hind High Vac Thermal Evaporation Coating Unit used by several Ph.D research Scholars for deposition of nanomaterials and thin films.  Research work is presently being undertaken in application oriented thrust areas of nanotechnology like White Light LEDs, Surface Plasmonics and Nanocomposites.
                                                </div>
                                                <div class="title">
                                                   3. Digital Image and Speech Processing Lab:     
                                                </div>
                                                <div class="headingPara">
                                                <img src="images/LabAS5.png" class="labImages" height="200px" width="auto">
                                                    The lab is equipped with Image Processing software and equipments like Matrox Image processing library and Pinnacle studio plus. The laboratory has a panoramic imaging lens and a stereo camera along with range of lenses and other optical research instruments.
                                                </div>
                                        
                          </div>'; }
                    else if($id==9){
                        echo ' <div class="middleBox">
                                    <div class="title">
                                        EXTERNALLY FUNDED RESEARCH PROJECTS
                                    </div>
                                    <div class="headingPara">
                                            <ul>
                                                <li class="sideHeading">COMPLETED</li>
                                                        <ul>
                                                             <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr Ranu Gadi</b>
                                                                <p> Estimates of Indoor Air pollutants emitted from fuels used in residential sector of Northern India”, funded by CSIR, New Delhi , Funding received: 18 lakhs.</p>
                                                                </li>
                                                             
                                                             <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr Chhaya Ravikant</b>
                                                             <p> Investigation on Optical Properties of Si-ZnO Nanocomposites” funded by UGC, New Delhi, Funding received: 8.5 lakhs.</p>
                                                             </li>

                                                              <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr Dinesh Ganotra</b>
                                                             <p>Multi-aperture Imaging”, funded by DST, New Delhi,  Funding received: 05 lakhs.</p>
                                                             </li>

                                                              <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr. Dinesh Ganotra</b>
                                                             <p> Panoramic Imaging”, funded by UGC New Delhi, Funding received: 05 lakhs.</p>
                                                             </li>
                                                        </ul>

                                                <li class="sideHeading">ONGOING</li>
                                                        <ul>
                                                             <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr Ranu Gadi</b>                                                                <p>“Spatio-Temporal Variability of Aerosols over National Capital Region (NCR), India”, funded by DST,  New Delhi, Duration: January 2015-December 2017, Funding received: 52 lakhs.</p>
                                                             </li>
                                                              


                                                        </ul>
                                            </ul>
                                    </div>
                                 </div>';}
                                 
                    
                    elseif(isset($_GET['name']) && $_GET['name'] !='')
                    {     
                        $username=$_GET['name'];
                        echo '
                        <div class="middleBox">
                            <div class="title">
                                Department of Applied Science and Humanities
                                <br>
                                Faculty Profile
                            </div>';
                        getFacultyInfo($username);
                        echo '</div>';
                    }
                    elseif($id=='tanya'){
                        getDataAll();
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
            
        </div>
</div>

   <!-- footer -->

   <br>
    <br>
<?php include 'footer.php';?>

</body>

</html>
