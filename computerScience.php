<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSE</title>


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
                        Computer Science & Engineering
                    </div>
                    <ul class="sidenav">
                        <li><a href="computerScience.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Objectives</a></li>

                        <li><a href="computerScience.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Head Of Department</a></li>

                        <li><a href="computerScience.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Faculty Directory</a></li>

                        <li><a href="computerScience.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Achievements</a></li>

                        <li><a href="computerScience.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Events/Workshops/Seminars</a></li>

                        <li><a href="computerScience.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Labs</a></li>

                         <li><a href="computerScience.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Expert Lectures</a></li>

                        <li><a href="computerScience.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>

                        <li><a href="computerScience.php?id=9" id="9"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li>
                        <li><a href="computerScience.php?id=10" id="10"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Lab Manuals</a></li>
                       
                        
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

                                       

                                                <ul>

                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To promote convergence of knowledge,  information, technology and skills.</li>

                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To develop Computer Science and Engineering Students with a global perspective.</li>

                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To ensure total personality development of would be engineers.</li>

                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To  impart specialized knowledge and skills to the students in the field of computers and information technology.</li>

                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To work in collaboration with other institutions/ industries.</li>

                                                   
                                                </ul>
                                    </div>
                            </div>';
               }
               elseif ($id==2) {
                   # code...
                    echo '<div class="middleBox">
                            <div class="title">
                            Head Of Department
                            </div>
                            <div class="profile">
                            <img src="images/Ela_Kumar.jfif" alt="Prof. Ela Kumar" height="200px" width="auto">
                                <div class="pHeading">Prof. Ela Kumar</div>
                                <div class="pText">(Professor & Head)</div>
                            </div>
                            <div class="headingPara">
                                Dr. Ela Kumar has done, B. Tech , Electronics and Communication from IIT Roorkee in 1988. M. Tech in  Computer Science and Technology in  1990, from IIT Roorkee and Ph.D in  Natural Language Processing  ( sub-area of Artificial Intelligence)  from  Delhi University  in 2004. She has cleared GATE in 1988 with 94.29 percentile.  She has professional experience of 27 years. She is actively engaged in teaching and research in areas of Computer Science since 1991. She has published more than 60 research papers in International journals / National journals / International conferences of repute. She has guided more than 45 M.Tech / MPhil   dissertation and many Ph.D scholars. She has represented her research work in countries like USA, UK, Hong Kong and Thailand.  She has authored 4 books and written articles published in newspaper.   She is member of many professional societies like IEEE, IE, ISTE, CSI, International Association of Engineers, Women in Science and Engineering etc. She was chairperson of Centre of Intelligence Systems in GBU and initiated the process of installation of centre of excellence in the area of Artificial intelligence. She is on the reviewer panel / editorial board of many journals. She has organized many   professional activities like FDPs, Workshops, expert lectures. She has delivered many expert talks, keynote speaker, session chair in national / international conferences. She has undertaken various responsibilities in university administration including   Dean Academic Affairs   at IGDTUW for a period of three years, till November 2017.  She has been conferred by Rashtriya Gaurav Award.  She is member of many academic and professional bodies.
                            </div>
                        </div>';
               }
               elseif ($id==3) {
                   # code...
                    echo '<div class="middleBox">
                                <div class="fTitle">
                                    FACULTY DIRECTORY OF INFORMATION TECHNOLOGY
                                </div>
                                 <div class="headingPara">
                                    <table>
                                    <tr>
                                        <td>Name : </td>
                                        <td><a href="images/Ela_Kumar.jfifs" target="_blank">Prof. Ela Kumar</a></td>
                                        <td rowspan="4"><img class="facultyDImage" src="images/Ela_Kumar.jfif" width="100px" height="100px"></td>
                                    </tr>
                                    <tr>
                                        <td>Designation : </td>
                                         <td>Professor & Head</td>
                                    </tr>
                                    <tr>
                                        <td>Qualification : </td>
                                        <td>Ph.D.(DU) ,M.Tech IIT Roorkee, B.E. IIT Roorkee. </td>
                                    </tr>
                                    <tr>
                                        <td>Area of Specialisation </td>
                                        <td>Artificial Intelligence, Natural Language Processing, Semantic Web , Web Technology. </td>
                                    </tr>
                                    <tr>
                                        <td>Name : </td>
                                        <td><a href="DKTAYAL.jfif" target="_blank">  
                                        Prof. D. K. Tayal       </a> </td>
                                        <td rowspan="4"><img class="facultyDImage" src="images/DKTAYAL.jfif" ></td>
                                    </tr>
                                    <tr>
                                        <td>Designation : </td>
                                        <td>    
                                        Professor & Dean  (Academic Affairs), Chairman (Academic Quality Assurance Committee), IGDTUW Chairman (Faculty Grievance Redressal Committee), IGDTUW
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>Qualification : </td>
                                        <td>Ph.D. (Computer Sc. & Technology), JNU, M.Tech. (Computer Sc. & Technology), JNU, MSc(Maths), Delhi University, BSc(Honours) Maths, Delhi University.</td>
                                    </tr>
                                    <tr>
                                        <td>Area of Specialisation </td>
                                        <td>Artificial Intelligence, Database Management Systems, Fuzzy Logic, Data Mining, Graph Theory, Sentiment Analysis, Opinion Mining</td>
                                    </tr>

                                
                                </table>
                                 </div>           
                                    
                               
                        </div>';
               }
               elseif ($id==4) {
                   # code...
                    echo ' <div class="middleBox">
                                    <div class="title">
                                        Achievements
                                    </div>
                                    <div class="headingPara">
                                            <table>
                                                <tr>
                                                    <th>NAME </th>
                                                    <th colspan="2">ACHIEVEMENT</th>
                                                </tr>
                                                <tr>
                                                    <td><b>Taniya Bhatia (M.Tech ISM) </td>
                                                    <td colspan="2">Awarded with the Best Paper Award , “Malware Detection in Android based on Dynamic Analysis”, International Conference on Cyber Security and Protection of Digital Services (Cyber Security 2017)London, on June 19-20, 2017, IEEE Xplore Digital Library.</td>
                                                </tr>
                                            </table>
                                    </div>
                                    <div class="title">
                                        Poster Presentations 
                                    </div>
                                    <div class="headingPara">
                                        <table>
                                            <tr>
                                                <th>NAME </th>
                                                <th colspan="2">ACHIEVEMENT</th>
                                            </tr>
                                            <tr>
                                                <td><b>Madhuri & Rishabh Kaushal</td>
                                                <td colspan="2"> “Creation and Impact of Social Bots in Twitter”,4th, Security and Privacy Symposium 2016,IIITD,New Delhi,India.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>';
               }
               elseif ($id==5) {
                   # code...
                    echo ' <div class="middleBox">
                                        <div class="title">
                                            Latest Events/ Workshops/ Seminars / Expert Lectures
                                        </div>
                                        <div class="headingPara">
                                            <table>
                                                <tr>
                                                    <th>Year</th>
                                                    
                                                    <th>Event</th>
                                                    <th>Date</th>
                                                </tr>
                                                <tr>
                                                    <td>2018</td>
                                                   
                                                    <td>Workshop on “Digital Forensics and Cyber Crime Investigation” conducted under ISEA Project.
                                                    <a href="pdfs/ItEventWorkshopOnDigitalForensics.pdf" target="_blank"> Read More</a></td>
                                                     <td>17 - 18 March</td>
                                                </tr>
                                            </table>
                                        </div>
                                </div>';
               }
               elseif ($id==6) {
                   # code...
                    echo '<div class="middleBox">
                            <div class="title">
                                Laboratory of CSE Department
                            </div>
                            <div class="headingPara">
                                The CSE department has well equipped labs for practical and research work in the following domains:
                                    <ol>
                                        <li>Database and Mobile database Systems</li>
                                        <li>Software and Advanced Software Engineering</li>
                                        <li>Advanced Computer Networking</li>
                                        <li>Programming Labs on Various Platforms</li>
                                        <li>Embedded System and Design</li>
                                        <li>Computer Graphics and Multimedia</li>
                                        <li>Network Security and Management</li>
                                        <li>Mobile Architecture Programming</li>
                                        <li>Design and Innovation Lab</li>
                                    </ol>

                            </div>

                                    <div class="title">
                                               Programming Lab
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                            
                                        This lab is primarily is used for general programming and computational purpose. C, C++, Java etc practicals are scheduled in this lab. 
                                        <br><br>
                                        <b>Softwares in Lab</b>
                                        <ul>
                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i> MS Visual C++</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Rational Rose</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>PROLOG</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Web Premium CS4</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Oracle</li>
                                        </ul>
                                        <br>
                                        <b>Lab Incharge  : </b>Ms. Najme Zehra.

                                    </div>
                                 
                                    <div class="title">
                                                DBMS Lab
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                             This lab is used to conduct the practicals based on DBMS, Multimedia and Computer graphics for all the branches of students. 
                                             <br><br>
                                             <b>Softwares in Lab</b>

                                             <ul>
                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Visual C++</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Rational Rose</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>PASW Modeller 13.0</li>
                                              </ul>
                                              <br>
                                            
                                              <b>Lab Incharge  : </b>Ms. Vibha.
                                              <br>
                                              
                                            <b>Lab Assistant  : </b>Ms. AartiGambhir 
                                    </div>
                                    
                                    <div class="title">
                                               Networking Lab
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                              This lab is used for conducting the practicals based on computer networks, LAN, Advanced Compute Networks for various stream.
                                              <br>
                                              <br>
                                              <b>Softwares in Lab</b>
                                             
                                              <ul>
                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>PROLOG</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Rational Rose</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>MS Visual C++</li>

                                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Network Simulators </li>

                                              </ul>
                                              <br>
                                              
                                              <b>Lab Incharge  : </b> Mr. Vivekanand Jha.
                                    </div>
                                    
                                    <div class="title">
                                              Embedded Systems Design and Mobile Architecture Lab 
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                              There is tremendous growth in the field of mobile and embedded technologies due to the availability of various software tools and a variety of cheap hardware that drives these systems. The objective of this lab is to provide an exposure in the field of hardware and software architecture of the mobile devices and Embedded Systems and research in this area.This lab is used to conduct practical on Embedded Systems for both M.Tech and B.Tech students. Students in this course will demonstrate their complete design, development of embedded systems starting from the scratch. Special training programmes are conducted in the area of Mobile Architecture and Programming for the students and faculty members every year.
                                              <br>
                                              
                                              <b>Lab Incharge  : </b> Dr. SRN Reddy.

                                    </div>
                        </div>';
               }
               elseif($id==7) {
                   # code...
                    echo '<div class="middleBox">
                            <div class="title">
                                Expert lectures
                            </div>
                            <div class="headingPara">
                                <ul>
                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Expert Lecturer on “Mobile- A Platform for Practical Research and Learning By Doing”
                                    <br>
                                    15th Nov 2013
                                    </li>

                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Expert Lecture on "Wireless Personal Area Network"
                                    <br>
                                    31st Oct 2013
                                    </li>

                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Expert Lecture on " Research Issues in Wireless Sensor Networking"
                                    <br>
                                    25th Oct 2013
                                    </li>
                                </ul>
                            </div>
                        </div>
                    ';
               }
               elseif($id==8) {
                   # code...
                    echo '<div class="middleBox">
                                <div class="title">SYLLABUS</div>
                                <div class="headingPara">
                                        <ul class="sidenav">
                                            <li><a href="Syllabus/" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>B.Tech </a></li>
                                            <li><a href="Syllabus/" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>M.Tech</a></li>
                                            
                                        </ul>
                                </div>
                          </div>';
               }
               elseif ($id==9) {
                   # code...
                    echo '<div class="middleBox">

                                <div class="title">TIME TABLE </div>
                                <div class="headingPara">
                                     <ul class="sidenav">
                                            <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>B.Tech</a></li>
                                            <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>M.Tech</a></li>
                                            
                                    </ul>
                                </div>
                          </div>';
               }
               elseif ($id==10) {
                   # code...
                    echo '<div class="middleBox">
                            <div class="title">
                                LAB MANUALS
                            </div>
                            <div class="headingPara">
                                <ul>
                    
                                    <li><a href="labManuals/SoCMTech2sem_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>SoC Architecture</a></li>

                                    <li><a href="labManuals/embeddedsystemdesignMTech_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Embedded System Design</a></li>

                                    <li><a href="labManuals/AI-Lab-Manual_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Artificial Intelligence</a></li>

                                    <li><a href="labManuals/Algorithms_Analysis-&-Design_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Algorithm Analysis and Design</a></li>

                                    <li><a href="labManuals/Computer_organisation_Manual_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Computer Organization</a></li>

                                    <li><a href="labManuals/Microprocessor_8086_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Microprocessor 8086</a></li>

                                    <li><a href="labManuals/multimedia_mannual_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Multimedia</a></li>

                                    <li><a href="labManuals/NetworkSecurityLab_Manual_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Network Security</a></li>

                                    <li><a href="labManuals/OOSE-Uml-Lab-Manual_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>OOSE Uml</a></li>

                                    <li><a href="labManuals/Software EngineeringLABMANUAL_CSE.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Software Engineering</a></li>
                                </ul>
                                        </div>
                                </div>';
               }

               else{
                echo ' <div class="box-1">
                            <div class="title">
                                DEPARTMENT OF CSE
                            </div>
                            <div class="headingPara">
                                The Computer Science and Engineering Department is the most versatile department of college and caters to the needs of other departments as well. The department aims at developing the fundamental conceptual knowledge along with the total personality, which helps computer engineers to face the challenges of rapidly changing software industry. Technical skills, teamwork and specialized knowledge prepare these young engineers to adopt and continuously learn new technologies. Regular updation and expansion of the labs is done as per the requirement of the industry. Exposure to latest developments and technologies is a mandatory exercise for both faculty and students. Continuous research work and live projects are taken up by the department. Numerous professional activities are conducted to improve interaction between students, faculty, other academic institutions and industries.
                               
                            </div>

                    </div>';}
               ?>
            </div>
        </div>
    </div>
   <br>
   <br>
   <!-- footer -->
     <?php include 'footer.php';?>
</body>

</html>
