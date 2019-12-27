<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAE</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500|Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="index.css"> -->
    
    <link rel="stylesheet" href="stylesheet/style1/departments.css">



</head>
<body>

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
                        MECHANICAL & AUTOMATION ENGINEERING
                    </div>
                    <ul class="sidenav">
                        
                        <li><a href="mechanical.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Head Of Department</a></li>
                        <li><a href="mechanical.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Faculty Directory</a></li>
                        <li><a href="mechanical.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Achievements</a></li>
                        <li><a href="mechanical.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Events/Workshops/Seminars</a></li>
                        <li><a href="mechanical.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Labs</a></li>
                        <li><a href="mechanical.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>
                        <li><a href="mechanical.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li>
                         <li><a href="mechanical.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Lab Manuals</a></li>
                       
                        

                    </ul>

                </div>
            </div>
            <div class="col-sm-9">
                <?php

                    if($id==1)
                    {
                        echo '<div class="middleBox">
                                    <div class="title">
                                    Head Of Department
                                    </div>
                                    <div class="profile">
                                        <img src="images/DrManoj.png" alt="Dr. Arun Sharma" height="200px" width="auto">
                                        <div class="pHeading">
                                        Dr. Manoj Soni
                                        </div>
                                        <div class="pText">
                                        (Associate Professor & Head)
                                        </div>
                                    </div>
                                    <div class="headingPara">
                                        Dr. Manoj Soni did his  doctoral research from DTU erstwhile DCE in the area of Artificial Intelligence to Above Knee Prosthetic leg. He did his M.Tech in Production Engineering from IIT, Delhi ; M .S. Consultancy Management from BITS Pilani - CDC and  B.Tech. Mechanical Engineering, G. B. Pant University of Agriculture and technology, Pantnagar, Nainital, U.P. He had a total experience of more than 21 years. He is honoured with National Award in public recognition for development of new cost effective product for manufacturing aimed at improving the life of persons with disabilities by president of India Smt. Pratibha Devi Singh Patil on 03-December 2009. He is also honoured with best teachers Award in Department of Mechanical and Automation Engineering, MAIT, Rohini, Delhi-86 for year 2005.
                                    </div>
                             </div>';
                
                    }
                    elseif($id==2){
                        echo '
                        <div class="middleBox">
                                <div class="fTitle">
                                    FACULTY DIRECTORY OF INFORMATION TECHNOLOGY
                                </div>
                                <div class="headingPara">
                                    <table>
                                    <tr>
                                        <td>Name : </td>
                                        <td><a href="images/Dr.Chauhan.png" target="_blank">Dr. N.R. Chauhan</a></td>
                                        <td rowspan="4"><img class="facultyDImage" src="images/Dr.Chauhan.png" width="100px" height="100px"></td>
                                    </tr>
                                    <tr>
                                        <td>Designation : </td>
                                         <td>   
                                            Associate Professor , Training and Placement Officer (MAE)</td>
                                    </tr>
                                    <tr>
                                        <td>Qualification : </td>
                                        <td>M.Tech from IIT Roorkee, Ph.D  from IIT Roorkee

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Area of Specialisation </td>
                                        <td>Machine Design Engineering, Tribology, Fluid Film Bearing, Alternate Fuels, Composite Materials, Robotics and Automation</td>
                                    </tr>
                                    <tr>
                                        <td>Name : </td>
                                        <td><a href="images/DrManoj.png" target="_blank">Dr. Manoj Soni</a> </td>
                                        <td rowspan="4"><img class="facultyDImage" src="images/DrManoj.png" ></td>
                                    </tr>
                                    <tr>
                                        <td>Designation : </td>
                                        <td>Associate Professor ,Head of Deapartment</td>
                                    </tr>
                                    <tr>
                                        <td>Qualification : </td>
                                        <td>M.Tech (IIT Delhi), Ph.D  from DTU erstwhile DCE.</td>
                                    </tr>
                                    <tr>
                                        <td>Area of Specialisation </td>
                                        <td>Prosthetics, Mechatronics, Production Engineering</td>
                                    </tr>

                                
                                </table>
                                </div>
                                            
                                    
                               
                        </div>';
                    }
                    elseif($id==3){
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
                    elseif($id==4){
                          echo '<div class="middleBox">
                                    <div class="title">
                                        Events/Workshops/Seminars
                                    </div>
                                    
                                    <div class="headingPara">

                                         <ul>
                                            <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>MODEL UNITED NATIONS WORKSHOP</b></li>
                                            <div class="headingPara">
                                                A model United Nations Workshop is going to be organized by MAE Department under SAE Collegiate Club on 28-29th January 2012. A Model United Nations(MUN) conference is a student model simulation of the actual United Nations proceedings. In this the students act as representatives of various member nations of United Nations and debate and discuss the agenda that is provided to them in advance while keeping in mind the foreign policies of the respective nations. These students are judged on the basis of their research regarding the agenda and knowledge regarding the world affair and the United Nations. The following councils will be simulated at IGDTUW MUN 2012: NSG-Nuclear Supplier Group, UNCSTD-United Nation Commission on Science and Technology for Development.
                                            </div>

                                            <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>ETHICAL HACKING WORKSHOP</b></li>
                                            <div class="headingPara">
                                                MAE Department conducted a workshop on Ethical Hacking on 12th and 13th November 2011 organized by SAE Collegiate Club. SAE conducts many projects which require knowledge of softwares, operating systems and their information securities.Thus ethical hacking workshops provides a unique opportunity to learn and get clear perspective of ethical hacking, information security and cyber crime investigation. It would be an ideal platform to acquire the required knowledge to take counter measures and deal with cyber crime in an organization and personal life. The following issues were discussed in the workshop: Cyber ethics, Trojans and backdoors, Google Hacking, Web application attacks, Cyber crime investigation & information security & many more.
                                                <br>
                                                There was live demonstration of latest hacking techniques and tools, hands on practice sessions, interaction of students with the hacking expert.The certificates were distributed to the students jointly byTech fest IIT Bombay, Tech Defence & IGDTUW.
                                            </div>

                                    </div>

                             </div> ';
                
                    }
                    elseif($id==5){
                        echo '<div class="middleBox">
                                            <div class="title">
                                                KOM/DOM Lab
                                            </div>
                                            <div class="headingPara">
                                                <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                                KOM/DOM lab of IGDTUW, MAE Dept. was established to cater the practical learning needs of the students of second year undergoing KOM/DOM theory course.The KOM/DOM(kinematics of machines/dynamics of machines) Laboratory of the department is well equipped with standard equipment as per requirement of the curriculum.Out of the large number of machines available, the names of some of machines available are as under: Simple and compound pendulum apparatus, cam analysis machine, helical spring apparatus. The course contributes towards knowledge and understanding of various equipments through its practical orientation in the form of models. The students are given a practical introduction on these models of machines.
                                                <br>
                                                <br>
                                                <ul>
                                                    <li><b>Softwares in the Lab</b></li>
                                                    <li>Pro-E</li>
                                                    <li>ANSYS</li>
                                                    <li>Auto Card</li>
                                                </ul>
                                            </div>

                                            <div class="title">
                                              Machine Shop Lab
                                            </div>
                                            <div class="headingPara">
                                            <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                                Machine Shop lab of IGDTUW, MAE Dept. was established to cater the practical learning needs of the students of second year undergoing Manufacturing Machines theory course.
                                                <br>
                                                The machine shop of the institute provides a true industrial environment where the students can hone their skills in manufacturing technology through a number of machines such as Lathe, shaper, milling, drilling machines.Machine shop practice course familiarize the students with the basic shop safety and machine shop equipment. The course unit is practical, and students will be given access to machines for exercises.



                                            </div>
                                            <div class="title">
                                                PRO-E
                                            </div>
                                            <div class="headingPara">
                                            <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                                                                                
                                                The P-IV (PRO-E LAB) aims at learning basic features in part module and drawing module of the PROE Package and practicing the exercises to nourish the skills to develop models in PRO-E.
                                                <br>
                                                <br>
                                                Pro/ENGINEER is a feature-based, parametric solid modeling system with many extended design and manufacturing applications. As a comprehensive CAD/CAE/CAM system, covering many aspects of mechanical design, analysis and Manufacturing, Pro/ENGINEER represents the leading edge of CAD/CAE/CAM technology.
                                            </div>
                                            
                                            <div class="title">
                                               Robotics Lab
                                            </div>
                                            <div class="headingPara">
                                            <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                                Robotics lab of IGDTUW, MAE Dept. was established to cater the practical learning needs of the students of Final year undergoing Robotics theory course (ETME-404).
                                                <br>
                                                <br>
                                                Learning Objective -This course unit introduces undergraduate students to robotic systems covering multi-link robotic systems, mobile robotic systems, actuators, sensors, biologically inspired robotics and machine learning techniques. The main aim is to give students an introduction to the field, historic background, development and current cutting edge research points, as well as a practical introduction how to move and control robots. The course unit is practical, and students will be given access to robots for exercises.
                                                <br>
                                                <br>
                                                <b>Learning Outcomes</b>
                                                <br>
                                                At the end of the course unit students will be able to:
                                                <ul>
                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Undertake kinematics analysis of robot manipulators</li>
                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Understand the importance of robot dynamics</li>
                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Have an understanding of the functionality and limitations of robot actuators and sensors</li>
                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Understand and be able to apply a variety of techniques to solve problems in areas such as robot control and navigation</li>
                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Describe different mechanical configurations of robot manipulators</li>
                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>To be able to program a robot to perform a specified task (e.g obstacle avoidance or wall following) in a target environment.</li>
                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Understand how simulations of robots work, where they can be useful and where they can break down.
                                                    </li>
                                                    <li><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Appreciate the current state and potential for robotics in new application areas.</li>

                                                </ul>
                                                <br>
                                                Contribution to Programme Learning Outcomes:
                                                <br>
                                                <br>
                                                The course contributes towards knowledge and understanding of industrial robotic systems through its practical orientation towards programming robots, real time control and workcell layout design. Intellectual skills are trained through the analysis of control problems, identification of ways of solving them and implementation of the solution. Successes or failures are immediately evident through the resulting robot behaviour. Practical skills are trained through the practical sessions of the course. Finally transferable skills are trained by having to work tight (lab session) deadlines working in groups during practical sessions, understanding task statements, analyzing them and solving problems.
                                                <ul>
                                                    <li><b>Softwares in the Lab</b></li>
                                                    <li>Robocell</li>
                                                    <li>Arena 11.0</li>
                                                </ul>


                                            </div>
                                            <div class="title">
                                                Metrology Lab
                                            </div>
                                            <div class="headingPara">
                                            <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                                 Metrology lab of IGDTUW, MAE Dept. was established to cater the practical learning needs of the students of sixth semester undergoing Metrology theory course (ETME-306). The lab is equipped with high quality measuring instruments for linear and angular measurements such as Sine bar, slip gauges, dial indicator , vernier caliper , vernier height and depth gauges, micrometer etc.
                                            </div>
                                            <div class="title">
                                                Metal Cutting and Tool Design Lab
                                            </div>
                                            <div class="headingPara">
                                            <img src="images/labAS1.png" class="labImages" height="200px" width="auto">
                                                Metal Cutting and Tool Design lab of IGDTUW, MAE Dept. was established to cater the practical learning needs of the students of sixth semester undergoing Metal Cutting and Tool Design theory course (ETME-310). Metal cutting is one of the most important methods of removing unwanted material in the production of mechanical components.The lab is equipped with Tool maker’s microscope to measure various angles of cutting tools as well as various machines to analyse the concept of metal cutting practically.
                                            </div>

                            </div>';
               
                    }
                    elseif($id==6){
                         echo '<div class="middleBox">

                                <div class="title">SYLLABUS</div>
                                <div class="headingPara">
                                     <ul class="sidenav">
                                           
                                            <li><a href="Syllabus/btech_mae"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>B.Tech (MAE)</a></li>
                                            <li><a href="Syllabus/mtech_mae"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>M.Tech (R&A)</a></li>
                        
                                    </ul>
                                </div>
                          </div>
                          ';
                
                    }
                    elseif($id==7){
                        
                    echo '<div class="middleBox">
                                <div class="title">TIME TABLE</div>
                                <div class="headingPara">
                                        <ul class="sidenav">
                                             <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>B.Tech</a></li>
                                              <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>M.Tech</a></li>
                                        </ul>
                                </div>
                          </div>';
                
                    }
                    elseif($id==8){
                        echo '<div class="middleBox">
                                        <div class="title">
                                            LAB MANUALS
                                        </div>
                                        <div class="headingPara">
                                            <ul>
                                                
                                                <li><a href="labManuals/KOMDOM_EXPERIMENT_MANUAL.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>KOM/DOM</a></li>
                                                <li><a href="labManuals/machine_design_lab_manual.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Machine Design</a></li>
                                                <li><a href="labManuals/machine_shop.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Machine Shop</a></li>
                                                <li><a href="labManuals/mctdmanual.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Metal Cutting and Tool Design</a></li>
                                                <li><a href="labManuals/metrologymanual.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Metrology</a></li>
                                                <li><a href="labManuals/PROELabmanual.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>PROE</a></li>
                                                <li><a href="labManuals/QCQALABMANUAL.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>QCQA</a></li>
                                                <li><a href="labManuals/Robotics_lab_Manuals_Final.pdf" target="_blank"><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Robotics</a></li>
                                             </ul>
                                        </div>
                                </div>';
                    }
                    else{
                        echo '<div class="box-1">
                                    <div class="title">
                                        DEPARTMENT OF MAE
                                    </div>
                                    <div class="headingPara">
                                        Besides giving a through grounding in basic sciences and engineering subjects  the curriculum  in mechanical and  automation engineering emphasises on deep understanding of applied mechanics, microprocessors, machine design, heat transfer, refrigeration and air conditioning, machine tools, metrology, robotics and CAD(CAM) etc.  The department has well-equipped laboratories in related fields and students are exposed to various modern equipment in the area of mechanical and automation .   
                                        
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