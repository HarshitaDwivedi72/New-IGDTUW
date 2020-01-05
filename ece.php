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
                        <li><a href="ece.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>
                        <li><a href="ece.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li>
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
                            <img src="images/nidhiece.png" alt="Dr. Nidhi Goel" height="200px" width="auto">
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
                                 <div class="headingPara">
                                    <table>
                                    <tr>
                                        <td>Name : </td>
                                        <td><a href="images/AshwniKumar.jpg" target="_blank">  
                                        PROF. ASHWANI KUMAR </a></td>
                                        <td rowspan="4"><img class="facultyDImage" src="images/AshwniKumar.jpg" width="100px" height="100px"></td>
                                    </tr>
                                    <tr>
                                        <td>Designation : </td>
                                         <td>Professor</td>
                                    </tr>
                                    <tr>
                                        <td>Qualification : </td>
                                        <td>B.E.(ECE), DCE M.E.(ECE), DCE,Ph.D.(ECE),DU, MBA(FMS), DU.</td>
                                    </tr>
                                    <tr>
                                        <td>Area of Specialisation </td>
                                        <td>Optical Communication, Digital Signal Processing, Strategic Management.</td>
                                    </tr>
                                    <tr>
                                        <td>Name : </td>
                                        <td><a href="images/drjasdeep.jfif" target="_blank">Dr. Jasdeep Kaur Dhanoa</a> </td>
                                        <td rowspan="4"><img class="facultyDImage" src="images/drjasdeep.jfif" ></td>
                                    </tr>
                                    <tr>
                                        <td>Designation : </td>
                                        <td>Associate  Professor. </td>
                                    </tr>
                                    <tr>
                                        <td>Qualification : </td>
                                        <td>B.E. (Electronics), M.E. (ECE), DCE, Ph.D (Low Voltage Analog Design), GGSIPU.</td>
                                    </tr>
                                    <tr>
                                        <td>Area of Specialisation </td>
                                        <td>Low voltage Analog Designs,  VLSI, CMOS & Mixed Signal Design, Analog Signal Processing,Digital Electronics.</td>
                                    </tr>

                                
                                </table>
                                 </div>           
                                    
                               
                        </div>';
                
                     }
                     elseif ($id==3) {
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
                                    
                                </div>';
                
                     }
                     elseif ($id==4) {
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
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   COMMUNICATION LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   ANALOG ELECTRONICS LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   MICROWAVE LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                TELE COMMUNICATION NETWORKS LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   MICROPROCESSOR LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   DIGITAL CIRCUIT & SYSTEMS LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   ELECTRICAL SCIENCE LAB/CONTROL ENGINEERING LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   CIRCUIT & SYSTEMS LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   MOBILE COMMUNICATION LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   VLSI DESIGN LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>
                                <div class="title">
                                   OPTICAL COMMUNICATION LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    <a href="">...Read More</a>
                                </div>

                               
</div>';
                     }
                     elseif ($id==6) {
                        echo '<div class="middleBox">
                                <div class="title">SYLLABUS</div>
                                <div class="headingPara">
                                        <ul class="sidenav">
                                            <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech </a></li>
                                            <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Tech VLSI</a></li>
                                            
                                        </ul>
                                </div>
                          </div>';
                     }
                     elseif ($id==7) {
                         echo '<div class="middleBox">

                                <div class="title">TIME TABLE </div>
                                <div class="headingPara">
                                     <ul class="sidenav">
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech 1st year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech 2nd year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech 3rd year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Tech 4th year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Tech VLSI 1st year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Tech VLSI 2nd year</a></li>
                                    </ul>
                                </div>
                          </div>';
                
                     }
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
                    //  }
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