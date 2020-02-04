<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECE</title>

    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="stylesheet/style1/departments.css">



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
    <!-- main body -->
    <!-- main body -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        ELECTRONICS & COMMUNICATION ENGINEERING
                    </div>
                    <ul class="sidenav">
                        
                        <li><a href="ece.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Head Of Department</a></li>
                        <li><a href="ece.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Faculty Directory</a></li>
                        <li><a href="ece.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Achievements</a></li>
                        <li><a href="ece.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Events/Workshops/Seminars</a></li>
                        <li><a href="ece.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Labs</a></li>
                        <!-- <li><a href="ece.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>
                        <li><a href="ece.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li> -->
                        <!-- <li><a href="ece.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Lab Manuals</a></li> -->
<!-- SMDP for Chip to System Design ????? -->
                    </ul>

                </div>
            </div>
            <div class="col-sm-9">
               <?php
                    if($id==1){
                        echo ' <div class="middleBox">
                            <div class="title">
                            Head Of Department
                            </div>
                            <div class="profile">
                            
                                <div class="pHeading">Dr. Nidhi Goel</div>
                                <div class="pText">(Associate Professor )</div>
                            </div>
                            <div class="headingPara">
                            <img class="hodImage" src="images/nidhiece.png" alt="Dr. Nidhi Goel" height="200px" width="auto">
                            <b>Email Id :</b>nidhigoel@igdtuw.ac.in
                            <br>
                            <b>Office Location :</b>Room No. 102, Electrical Block
                            <br>
                            <b>Area of Interest:</b>Digital System Design, ASIC, Embedded Systems, Multimedia Security, Computer Vision, Soft Computing Techniques
                            <br>
                            <br>
                            <b>Biographical Sketch : </b>Dr. Nidhi Goel is working as an Associate Professor in Department of Electronics and Communication Engineering Department at Indira Gandhi Delhi Technical University, New Delhi. Prior to joining IGDTUW, she was associated with Delhi Technical University (Formerly, DCE). She has a teaching and research experience of approximately 17 years. She received her B.E. degree in Electronics and Communication and M.Tech. Degree in Digital Communication in 2001 and 2006, respectively. She pursued her research interest and completed her Ph.D. from Department of Electrical Engineering at the Indian Institute of Technology Roorkee, India. Her area of interest includes embedded systems, biomedical image processing, wireless communication, multimedia encryption and multimedia security.
                            <br>
                            <br>
                            <b>Publications : </b>She has published 2 book chapters, and over 45 research papers in reputed international journals and international conferences.

                            </div>
                        </div>';
                    }
                    elseif ($id==2) {
                        echo '
                        <div class="middleBox">
                                <div class="fTitle">
                                    FACULTY DIRECTORY OF  Electronics & Communication Engineering 
                                </div>
                                  <div class="headingPara">';
                                getFaculty("ECE");
                                   
                        echo '</div>
                               
                        </div>';
                
                     }
                     elseif ($id==3) {
                        echo '<div class="middleBox">
                         <div class="title">
                             Achievements
                         </div>
                         <div class="headingPara">';
                         getAchievements("ECE");
                                      echo '</div>
                                          </div>';
                
                     }
                     elseif ($id==4) {
                         echo ' <div class="middleBox">
                         <div class="title">
                         Latest Events/ Workshops/ Seminars / Expert Lectures
                     </div>
                     <div class="headingPara">';
                     getEvents("ECE");
                     echo '  </div>
                     </div>';
                 }
                     
                     elseif ($id==5) {
                         echo '<div class="middleBox">
                                <div class="title">
                                    LABS
                                </div>
                                <div class="headingPara">
                                    The department has following well equiped laboratories in  related fields and students are exposed to various practical assignments in the area of electronics and communication.
                                </div>

                                <div class="title">
                                   DSP LAB
                                </div>
                                <div class="headingPara">
                                Content Not Available.
                               
                                </div>
                                <div class="title">
                                   COMMUNICATION LAB
                                </div>
                                <div class="headingPara">
                                This laboratory caters the students of Electronics Department. The general objective
                                of this lab is to make the student understand the basic building blocks of analog
                                communication systems and different analog modulation techniques. The student
                                can further use these conceptual skills in the course of his/her own experimental
                                projects in various fields and advance subjects pertaining to communication field. 
                                    <a href="ecelabpdfs/communication.pdf">...Read More</a>
                                </div>
                                <div class="title">
                                   ANALOG ELECTRONICS LAB
                                </div>
                                <div class="headingPara">
                                
                                This laboratory caters the students of all the branches of B.Tech. The objective of
                                this laboratory is to link the theoretical concepts of analog electronics and Digital
                                Electronics circuits with practical feasibility thereby giving them a scope to learn
                                basic analog & digital electronics and their different electrical characteristics in a
                                better way. This lab is adequately equipped to conduct the experiments of Analog
                                & Digital Electronics. <a href="ecelabpdfs/analog.pdf">...Read More</a>
                                </div>
                                <div class="title">
                                   MICROWAVE LAB
                                </div>
                                <div class="headingPara">
                                
            This laboratory caters the students of ECE Department of B.Tech branch. The objective of this
                laboratory is to link the theoretical concepts with practical feasibility thereby giving them a scope
                to learn basic circuitry and various waveguides of Microwave Engineering with their
                characteristics in a better way. This laboratory also caters the students of ECE about the basic
                concept of working principle of Radar Training system and its Doppler effect.    
                                <a href="ecelabpdfs/microwave.pdf">...Read More</a>
                                </div>
                                <div class="title">
                                TELE COMMUNICATION NETWORKS LAB
                                </div>
                                <div class="headingPara">
                                Content Not Available.
                                   
                                </div>
                                <div class="title">
                                   MICROPROCESSOR LAB
                                </div>
                                <div class="headingPara">
                                Content Not Available.
                                    <a href="ecelabpdfs/microprocessor.pdf">...Read More</a>
                                </div>
                                <div class="title">
                                   DIGITAL CIRCUIT & SYSTEMS LAB
                                </div>
                                <div class="headingPara">
                                Content Not Available.
                                    <a href="ecelabpdfs/digital.pdf">...Read More</a>
                                </div>
                                <div class="title">
                                   ELECTRICAL SCIENCE LAB/CONTROL ENGINEERING LAB
                                </div>
                                <div class="headingPara">
                                About Electrical Science Lab: Department of ECE offers one laboratory course of Electrical
                                Science to all the branches (ECE, CSE, IT, ME, ASH) of first year undergraduate course and
                                courses of Network Analysis & Synthesis, Electronics Measurement and Instrumentation
                                mainly to ECE students. In this lab, experiments are conducted which include study of
                                various laws of electrical energy like thevenins theorem, Norton’s theorem, Maximum Power
                                transfer theorem, Reciprocity theorem etc, analysis of AC and DC circuits, study of different
                                network techniques like Z-, Y-, ABCD, H-parameters, study of characteristics of different
                                types of transducer, photo transistor, photo voltaic cell, photoconductivity cell, PIN
                                photodiode, analog and digital multimeter, ammeter, voltmeter.
                                
                                    <a href="ecelabpdfs/electrical.pdf">...Read More</a>
                                </div>
                                <div class="title">
                                   CIRCUIT & SYSTEMS LAB
                                </div>
                                <div class="headingPara">
                                Content Not Available.
                                   
                                </div>
                                <div class="title">
                                   MOBILE COMMUNICATION LAB
                                </div>
                                <div class="headingPara">
                                Content Not Available.
                                   
                                </div>
                                <div class="title">
                                   VLSI DESIGN LAB
                                </div>
                                <div class="headingPara">
                                Content Not Available.
                                    <a href="ecelabpdfs/vlsi.pdf">...Read More</a>
                                </div>
                                <div class="title">
                                   OPTICAL COMMUNICATION LAB
                                </div>
                                <div class="headingPara">
                                
                                    Content Not Available.
                                </div>

                               
</div>';
                     }
                    //  elseif ($id==6) {
                    //     echo '<div class="middleBox">
                    //             <div class="title">SYLLABUS</div>
                    //             <div class="headingPara">
                    //                     <ul class="sidenav">
                    //                         <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech </a></li>
                    //                         <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Tech VLSI</a></li>
                                            
                    //                     </ul>
                    //             </div>
                    //       </div>';
                    //  }
                    //  elseif ($id==7) {
                    //      echo '<div class="middleBox">

                    //             <div class="title">TIME TABLE </div>
                    //             <div class="headingPara">
                    //                  <ul class="sidenav">
                    //                         <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech 1st year</a></li>
                    //                         <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech 2nd year</a></li>
                    //                         <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech 3rd year</a></li>
                    //                         <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech 4th year</a></li>
                    //                         <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Tech VLSI 1st year</a></li>
                    //                         <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Tech VLSI 2nd year</a></li>
                    //                 </ul>
                    //             </div>
                    //       </div>';
                
                    //  }
                    //  elseif ($id==8) {
                        
                    // echo '<div class="middleBox">
                    //         <div class="title">
                    //             LAB MANUALS
                    //         </div>
                    //         <div class="headingPara">
                    //             <ul>
                    
                    //                 <li><a href="labManuals/SoCMTech2sem_CSE.pdf" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>SoC Architecture</a></li>

                                    
                    //             </ul>
                    //         </div>
                    //     </div>';
                    //  }Electronics & Communication Engineering 
                    elseif(isset($_GET['name']) && $_GET['name'] !='')
                    {     
                        $username=$_GET['name'];
                        echo '
                        <div class="middleBox">
                            <div class="title">
                                Department of Electronics & Communication Engineering 
                                <br>
                                Faculty Profile
                            </div>';
                        getFacultyInfo($username);
                        echo '</div>';
                    }
                    else{
                        echo ' <div class="box-1">
                    <div class="title">
                        DEPARTMENT OF ECE
                    </div>
                    <div class="headingPara">
                            The department aims to impart quality technical education to the students aspiring for a career in the field of electronics and communications engineering. The department also caters to the needs of other engineering disciplines where electronics is taught either as an essential or an elective subject. The department offers subjects like basic electronics, EMT theory, communications, VLSI, microwave engg, digital signal processing, optical communications, advanced microprocessor and other related subjects.
                    </div>

                </div>';
                    }
               ?>
            </div>
            
        </div>
    </div>
    <br>
   <br>

    <!-- footer -->
     <?php include 'footer.php';?>

</body>

</html