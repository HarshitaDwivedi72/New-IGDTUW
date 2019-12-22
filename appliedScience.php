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
                        <li><a href="appliedScience.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>
                        <li><a href="appliedScience.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li>
                    

                        <!-- Extra corricular activities & Externally funded research cutted -->
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
                                    <td><a href="images/DrRanu.png" target="_blank">Dr. Ranu Gadi</a></td>
                                    <td rowspan="4"><img class="facultyDImage" src="images/DrRanu.png" width="auto" height="200px" vertical-align="top"></td>
                                </tr>
                                <tr>
                                    <td>Designation : </td>
                                     <td>Dy. Dean (Industrial Research & Development), Chief Warden (Hostels) and Associate Professor (Chemistry)  </td>
                                </tr>
                                <tr>
                                    <td>Qualification : </td>
                                    <td>Ph.D. (Chemistry) IIT Roorkee, Post Doctoral Fellowship (Environmental Sciences) Lancaster University, Lancaster, U.K.</td>
                                </tr>
                                <tr>
                                    <td>Area of Specialisation </td>
                                    <td>Atmospheric Chemistry and Climate Change, Biomass emissions, Characterization of atmospheric aerosols (elemental, organics, carbonaceous, metals), Environmental Analytical Chemistry, Speciation and Bioremediation of priority pollutants in water/wastewater. </td>
                                </tr>
                                <tr>
                                    <td>Name : </td>
                                    <td><a href="images/DrChhaya.png" target="_blank">Dr. Chhaya Ravikant</a> (on Deputation in Delhi Police)</td>
                                    <td rowspan="4"><img class="facultyDImage" src="images/DrChhaya.png" height="200px" width="200"></td>
                                </tr>
                                <tr>
                                    <td>Designation : </td>
                                    <td>Dy. Dean (Research & Consultancy), First Appellate Authority and Associate Professor (Physics)</td>
                                </tr>
                                <tr>
                                    <td>Qualification : </td>
                                    <td>Ph.D. (Physics), Delhi University, M.S. (Software Systems), BITS Pilani</td>
                                </tr>
                                <tr>
                                    <td>Area of Specialisation </td>
                                    <td>Nanomaterials, Condensed Matter Physics, Plasma Science and Technology, Mobile Communication.</td>
                                </tr>

                            
                            </table>';
                
                    }
                    elseif ($id==4){
                         echo ' <div class="middleBox">
                                        <div class="title">
                                            Achievements
                                        </div>
                                        <div class="headingPara">
                                          <ul>
                                          <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Dr. Ranu Gadi was conferred with the Third Best Researcher Award at GGSIP University, Delhi in September 2012 for the Academic year 2011-12.</li>
                                          <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Dr. Ranu Gadi has also been awarded with the ‘Thomas Kuhn Honour Pin’ as hope for sustainable region for her research paper presented at the Third Int. Symposium on Non-CO2Green house Gases, 21st-23rdJanuary, 2002 at Maastricht, The Netherlands.</li>
                                          <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Two Indian patents have been granted  to Dr. Chhaya Ravikant in collaboration with National Research Development Corporation of India, INDIA
                                          <ol>
                                            <li>“A method of depositing thin films of metals and non metals”<br>
                                           <b> Patentee:</b> Prof. M.P.Srivastava, Savita Roy and Dr. Chhaya Ravi Kant
                                            <br>
                                            <b>Patent no.</b> 232763, Dt: 21/03/2009</li>

                                            <li>
                                                Dr. Shailini Arora has been awarded the ‘Young Scientist Award’ by the SERC division of DST.
                                            </li>
                                          </ol>
                                          </li>

                                          </ul>
                                        </div>
                                </div>
                            ';
                                    }
                    else if($id==5){
                         echo ' <div class="middleBox">
                                        <div class="title">
                                            Latest Events/ Workshops/ Seminars / Expert Lectures
                                        </div>
                                        <div class="headingPara">
                                            <table>
                                                <tr>
                                                    <th>Year</th>
                                                    
                                                    <th colspan="4">Event</th>
                                                    <th>Date</th>
                                                </tr>
                                                <tr>
                                                    <td>2017</td>
                                                   
                                                    <td colspan="4">Expert Lecture in association with EDP Cell IGDTUW by Mr. Deepak Sar, IT Professional, Oracle, on “Campus to Corporate World” in the Seminar Hall, Administrative Block.<a href=""> Read More</a></td>
                                                     <td> April</td>
                                                </tr>
                                            </table>
                                        </div>
                                </div>'; }
                    else if($id==6){

                         echo '<div class="middleBox">
                                    <div class="title">
                                       Applied Physics Lab 1:
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                       The lab hosts experiments based on Mechanics, Thermal Physics, Electronics and basic experiments on electricity and magnetism.
                                    </div>
                                    <div class="title">
                                       Applied Physics Lab 2 (Optics Lab):
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                       The lab is housed in a Dark Room with experiments based on optics, ultrasonics and Lasers.
                                    </div>
                                    <div class="title">
                                       Applied Chemistry Lab:
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                      The lab is fully equipped to hold experiments on quantitative chemical analysis like volumetric titrations, conductometric titrations etc. Experiments based on thermo-chemistry and rate of reaction are also performed.
                                    </div>


                                    <div class="title">
                                        Environmental Studies Lab:
                                    </div>
                                    <div class="headingPara">
                                            <img src="images/labAS2.png" class="labImages" height="200px" width="auto">
                                               The lab holds experiments on water analysis like DO, BOD, COD, TDS etc., spectrophotometric determination of metals, soil analysis, particulate matter in the ambient atmosphere and polymer preparation.
                                               <br>
                                               <br>
                                                In addition, the department provides cutting edge research, innovation and education in emerging areas of Science and Technology. 
                                                <br>
                                                The Department presently has three Research labs:
                                                <div class="title">
                                                   1. Environmental Analysis and Research Lab:         
                                                </div>
                                                <div class="headingPara">
                                                <img src="images/labAS3.png" class="labImages" height="200px" width="auto">
                                                    The lab is equipped for the measurement, processing and analysis of aerosols and organic pollutants in the ambient Atmosphere.
                                                        Active research work is being carried out on emissions estimates of organic compounds from biomass and fossil fuels, aerosols and volatile organic compounds in atmosphere. Work is also being undertaken on bioremediation of trace metals in the waste waters.
                                                </div>
                                                <div class="title">
                                                   2. Nanomaterials and Thin Films Lab:        
                                                </div>
                                                <div class="headingPara">
                                                <img src="images/labAS4.png" class="labImages" height="200px" width="auto">
                                                    The lab has a Hind High Vac Thermal Evaporation Coating Unit used by several Ph.D research Scholars for deposition of nanomaterials and thin films.  Research work is presently being undertaken in application oriented thrust areas of nanotechnology like White Light LEDs, Surface Plasmonics and Nanocomposites.
                                                </div>
                                                <div class="title">
                                                   3. Digital Image and Speech Processing Lab:     
                                                </div>
                                                <div class="headingPara">
                                                <img src="images/labAS5.png" class="labImages" height="200px" width="auto">
                                                    The lab is equipped with Image Processing software and equipments like Matrox Image processing library and Pinnacle studio plus. The laboratory has a panoramic imaging lens and a stereo camera along with range of lenses and other optical research instruments.
                                                </div>
                                        </div>
                          </div>'; }
                    else if($id==7){
                         echo '<div class="middleBox">
                                     <div class="title">SYLLABUS</div>
                                <div class="headingPara">
                            <ul class="sidenav">
                <li><a href="Syllabus/btechAS1st.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>B.Tech (1st year)- Syllabus</a></li>
                
                            </ul>
                                </div>
                          </div>';
                    }
                    else if($id==8)
                    {
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
       
        </div>
</div>

   
   <!-- footer -->
   <br>
    <br>
<?php include 'footer.php';?>

</body>

</html>
