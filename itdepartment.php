<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT Department</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500|Roboto&display=swap" rel="stylesheet">
    
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

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="sideNav">
                    <div class="sideHeading">
                        INFORMATION TECHNOLOGY
                    </div>
                    <ul class="sidenav">
                        <li><a href="itdepartment.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Objectives</a></li>
                        <li><a href="itdepartment.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Head Of Department</a></li>
                        <li><a href="itdepartment.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Faculty Directory</a></li>
                        <li><a href="itdepartment.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Achievements</a></li>
                        <li><a href="itdepartment.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Events/Workshops/Seminars</a></li>
                        <li><a href="itdepartment.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Labs</a></li>
                        <li><a href="itdepartment.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Placement</a></li>
                        <li><a href="itdepartment.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>
                        <li><a href="itdepartment.php?id=9" id="9"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li>

                    </ul>

                </div>
            </div>
            <div class="col-sm-8">
                <?php 
                
                if($id==1)
                {
                    echo '<div class="middleBox">
                        <div class="title">
                            OBJECTIVES
                        </div>
                        <div class="headingPara">

                            Creating an environment of excellence in teaching and research by raising the quality and standards of education and make it globally competitive, and locally relevant.

                            <ul>

                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To converge as an Open, evolving community invested in creating, preserving, and translating knowledge.</li>
                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To manage IT as a strategic resource.</li>
                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To serve as an “incubator” by offering dedicated programs and courses that encourage faculty and student idea generation.</li>
                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Create a technology-enriched environment for learning that is both effective as an aid in supporting the experiences of teaching and learning and is instructive by reflecting the technology environment graduates will work in after leaving
                                    IGDTUW.
                                </li>
                                <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To advance knowledge through research and scholarly activity.</li>

                            </ul>
                        </div>
                    </div>';
                }
                else if($id==2){
                echo '<div class="middleBox">
                    <div class="title">
                    Head Of Department
                    </div>
                    <div class="profile">
                    <img src="images/Dr.Arun.png" alt="Dr. Arun Sharma" height="200px" width="auto">
                        <div class="pHeading">Dr. Arun Sharma</div>
                        <div class="pText">(Associate Professor & Head)</div>
                        
                    </div>
                    <div class="headingPara">
                    Dr. Arun Sharma, is presently Associate Professor and Head of the IT Department. He completed his PhD Degree from Thapar University, Patiala in 2009. Prior to this, he did M.Sc. (Applied Mathematics) from University of Roorkee (now IIT Roorkee) in 1994
                    and M. Tech. (CSE) from Punjabi University, Patiala in 1997. He has a vast teaching experience of approx 20 years in various reputed Govt. and Pvt. Institutions. His areas of interests include Big Data, Data Mining, Software Engineering and
                    Soft Computing Approaches. He has published more than 60 papers (SCI/SCIE/SCOPUS and others) in international journals and conferences including IEEE, ACM, Springer, Elsevier, Wiley, IGI Global and several others. Dr. Sharma is a Senior Member
                    of IEEE and Life Member of Computer Society of India and is actively involved in various activities of these societies. He has been the Chairman of Computer Society of India (CSI) - Ghaziabad Chapter for 2015-16. He has been awarded by CSI
                    in its annual convention for his significant contribution. Dr Sharma was included in World’s Who’s Who by Marquis, USA in 2013. He is also on the panel of Experts and member of Board of Studies for various reputed Universities and institutions.
                    </div>
                    </div>';
                }
                else if($id==3){
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
                                    <td rowspan="4"><img src="images/rksingh.jpg" width="auto" height="100px" vertical-align="top"></td>
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
                else if($id==4){

                }
                else if($id==5){

                }

                else if($id==6) {
                    
                    echo '<div class="middleBox">
        <div class="title">
            Computer Center
        </div>
        <div class="headingPara">
            The Computer Center is housed in centrally air conditioned premises and equipped with state-of-art computing facilities. All the computers are connected using local area network (LAN). The Server hosts software for various disciplines related to Computer Engineering and Information Technology like SQL Server, Java, Microsoft Visual Studio, CASE Tool etc. Computer centre is also connected with the various labs in the campus using optical fiber in Client Server Computing environment. This has enhanced the ambit of Computer Centre by providing programming environment along with computational requirement of the users across the campus. All the computers in the centre are connected to uninterrupted power supply for safe operations. Various software like VIM, GDB, Turbo C, Microsoft Visual Studio.net, Microsoft Office 2007, gcc/g++, Virtual Box and Cloud SIM are installed in the lab with high specification computers.
            
        </div>
        <div class="title">
            Software Design Lab
        </div>
        <div class="headingPara">
            Software Design lab caters to the computing needs of the specialized and elective courses and offers in-depth treatment of some topic in Information Technology. The lab is equipped with CASE Tools required in Design and Testing of the software applications. The lab helps the students to reinforce concepts discussed in the class through case studies or projects. The instructors may stimulate the advanced undergraduate to participate in research efforts by means of a project course or a directed independent study. Various softwares like Turbo C, Microsoft Visual Studio.net, Rational Rose, Microsoft Office 2007 are installed in the lab with high specification computers.
        </div>
        <div class="title">
            Information Security Lab
        </div>
        <div class="headingPara">
            The Information Security Lab is an offensive security research environment where students analyze and understand how attackers take advantage of real systems.  This approach gives our students a unique perspective and a proper foundation that allows them to master any area of security.
        </div>
        
        <div class="title">
            Distributed Computing Lab
        </div>
        <div class="headingPara">
            Distributed Computing lab is well equipped with i7 systems. All the required softwares like virtual box, vmware, MySql, Dev++,Turbo C, Visual C++ and Java are installed in all the systems. All the systems are LAN Connected with 24x7 internet facility.
        </div>
        <div class="title">
            Cyber Forensics and IOT Lab
        </div>
        <div class="headingPara">
             The lab is equipped with FRED Server (i7 5th Gen, 32GB Ram 1 TB Hard Disk) and Net Force Suite –a forensic suite developed by C-DAC. The Server facilitates various ethical hacking modules to be performed.Many forensics tools like encase and FTK are installed and used frequently. Centralized forensic experiments are performed in this lab. All the systems are Dual Booted with Ubuntu 14.04 and Windows 8. HP Proactive care Server is installed in this Lab. The lab has been equipped with real time test bed “SenseNuts: IoT Platform for Excellence” for experimenting sensor for IoT applications. This lab provides infrastructure facility suitable for testing small wireless sensor devices and heterogeneous communicating objects. This lab is developed under the ISEA Project Grant, DeitY, Govt. of India.
        </div>
    </div>';
                }
                else if($id==7){

                }
                 else if($id==8){
                    
                    echo '<div class="middleBox">
                                <div class="title">SYLLABUS</div>
                                <div class="headingPara">
                            <ul class="sidenav">
                <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>B.Tech (IT) - Syllabus</a></li>
                <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>MCA - Syllabus 1st year</a></li>
                <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>MCA - Syllabus 2nd year</a></li>
                <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>MCA - Syllabus 3rd year</a></li>
                <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>M.Tech (ISM) Syllabus</a></li>
                <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Lab Manuals</a></li>
                            </ul>
                                </div>
                          </div>';
                }
                 else if($id==9){
                    
                    echo '<div class="middleBox">

                                <div class="title">TIME TABLE </div>
                                <div class="headingPara">
                                     <ul class="sidenav">
                        <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>B.Tech</a></li>
                        <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>M.Tech</a></li>
                        <li><a href="" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>MCA</a></li>
                                    </ul>
                                </div>
                          </div>';
                }
                else{
                    echo '<div class="middleBox">
                            <div class="title">
                             DEPARTMENT OF IT
                            </div>
                            <div class="headingPara">
                             Department of IT aims to prepare students to undertake careers involving innovation and problem solving using IT, or to undertake advanced studies for research careers in IT. It aims to emerge as a centre of excellence in leveraging information technology to stimulate the exchange and creation of knowledge for intellectual, social, political, moral and material development of the society.   The teaching pedagogy in the department aims to bridge the gap between principles and applications with the goal to apply knowledge of computing sciences for solving real world problems.
                            </div>
                         </div>';
                }
                ?>
                

            </div>
            
            <!-- <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        QUICK LINKS - IT
                    </div>
                    
                </div>
                <div class="sideNav">
                    <div class="sideHeading">
                        Time Table
                    </div>
                   
                </div>
            </div>
        </div> -->
    </div>
</div>
    
    <!-- footer -->
    <br>
    <br>
    <?php include 'footer.php';?>

</body>

</html