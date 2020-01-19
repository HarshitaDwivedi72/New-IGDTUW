<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Life</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="stylesheet/style1/studentlife.css">
    
   

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
                        <a href="studentlife.php">STUDENT LIFE</a>
                    </div>
                    <ul class="sidenav">
                        <li><a href="studentlife.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Dean (Student Welfare)</a></li>
                        <li><a href="studentlife.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Clubs and Societies</a></li>
                        <li><a href="studentlife.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Student Notices</a></li>


                    </ul>

                </div>
            </div>

           
            <div class="col-sm-9">
                <?php 
                
                if($id==1)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">DEAN ( STUDENT WELFARE )
                                    </div>
									 <div class="profile">
                            <div class="pHeading">Prof. Ela Kumar</div>
                                <div class="pText">Dean (Student Welfare)</div>
                            </div>
                                    <div class="headingPara">
                                       <img src="images/ElaKumar.jpg" alt="Prof.Ela Kumar" height="200px" width="auto">
                                         Soon after independence of India President Radhakrishnan, made an important recommendation in 1948, for the appointment of Dean Student welfare and created an office of students welfare in all educational institutes to reduce the disparity among Indian society prevailing that time in India. In 1960, UGC through education commission again directed to all universities to establish office of dean student welfare for providing opportunity for holistic development to inoculate the understanding of their social responsibility of passing out.
                                         <br><br>
										 It has long recognized at education has long contribute to social & economic development, while bring out treasure within the student. The aim of higher education system should toaster a deeper and more harmonious human development to include values like general personality, attribute like respect tradition and loyalty to culture and idea to establish. Thus dean student welfare IGDTUW provide ample scope, opportunity &facility for all around development of personality & leadership quality among student. Student effectively participate in social & culture activity, sports activity, literally activity, professional society under various clubs and society under various advisory and faculty
										 <br><br>
                                         The office of DSW at IGDTUW, functions as nodal centre to promote cooperation and fellowship among students on campus. It actively functions for conducting various activities for Welfare of students. It very consciously taken into account the variable socio-economic diversities against cultural relativism. IGDTUW is a first technical women university has girls of large Socio-economic variations. DSW office provides facilities to articulate and nurture their creations and inspirations. It work with ultimate objective of creating Socio-harmony and creating peace to encourage students to give expression to their talents to enrich our social fabric and produce future technocrats leader who can work at global standards besides pursuing their academic targets. It is aligned with university mission of women education Enlightment, empowerment to change students into social assets making them responsible citizens. DSW office function through various societies like Robolution, Hypnotics, Rehnuma, SpicMacay, Technoliterati, Greensphere Enviorment Society, ACM, Enactus, LeanIn, CSI, IEEE, SAE, Syhergy Sports Club, STRIDE, All India Federation of the DEAf, ASMI, Rise all Foundation, TechIndia, TED, Leaders for Tomorrow, Instinct, Tarannum, Quizzing Society, Atargta, Bhav Society under faculty supervision. 
                                         The students also participates in activities like Swach Bharat, Sports, Spic Macay, Cultural, Hecathon, organized from time to time.										 
                                         <br><br>
										 I wish all students good luck, happy learning and purposeful stay in campus, and appeal to students to participate in the activity of their choice for holistic personality development.
									     <br><br>
										 <b>Prof. Ela Kumar
										 <br>
                                         Dean (Student Welfare), IGDTUW</b>

  
									</div>
                            </div>';
                }
                else if($id==2){
                echo '  <div class="middleBox">
                            <div class="title">
                            Clubs and Societies
                            </div>
                                   <div class="headingPara">
                                            <table>
                                                <tr>
                                                    <th colspan="2">Name & Description of Society </th>
                                                    <th>ACHIEVEMENT</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>ACM Student Chapter:</b>
													<br>
													Department of Information Technology runs a student chapter under the aegis of Association for Computing Machinary (ACM) which is named as 
													ACM Student Chapter @IGDTUW. ACM is world’s largest educational and scientific computing society that delivers resources to advance computing 
													as a science and a profession. Student Chapter has been successfully hosting numerous events in the field of computing and has helped students 
													improve their programming skills and gain knowledge beyond curriculum. The student chapter organizes technical talks from experts in the field of 
													academics and industry, technical competitions among students and contributes immensely to the Annual Technical Festival of the University ‘INNERVE’. 
													All these events are organized and managed by students of the University under the guidance of faculty advisor. 
													Students from outside the University are often invited to participate in large numbers in such events. For details, refer
					                                <a href="http://acmigdtuwchapter.tech/" target="_blank">http://acmigdtuwchapter.tech/</a>
													</td>
                                                    <td><b>Mr. Rishabh Kaushal <br> Assistant Professor <br> Department of Information Technology</td>
                                                </tr>
                                            </table>
                                    </div>
                           
                        </div>';
                }
                else if($id==3){
                 echo '
                        <div class="middleBox">
                                <div class="fTitle">
                                    Student Notice Board
                                </div>
                                 <div class="headingPara">
                                    <table>
                                                <tr>
                                                    <th colspan="2">Title</th>
                                                    <th>File</th>
                                                    <th>Date of Upload</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Conduct of Practical Examination of M.Tech (ICT) (Weekend) Programme during Semester Examination, Nov-Dec 2019</td>
                                                    <td><a href="pdfs/ItEventWorkshopOnDigitalForensics.pdf" target="_blank">View/Download</a></td>
                                                    <td>2019-11-22</td>
                                                </tr>
                                            </table>
                                 </div>           
                                    
                               
                        </div>';
                }
               
                else{
                    echo '<div class="middleBox">
                                <div class="title">
                                 STUDENT LIFE (IGDTUW)
                                </div>
                                <div class="headingPara">
                                 To rejuvenate the energies of the students, sports and cultural activities plays a vital role. Through sports and cultural 
								 activities, students explore their interests. Various clubs and societies helps the students conduct various creational and 
								 developmental activities.
                                 <br><br>
                                 Students are given ample oppurtunities for personal growth and exploration of hobbies. A number of societies and clubs are 
								 active on the campus and are managed by the students. The campus also host various student events and festivals. 
								 Each component of the festival or event is organized and executed by the students. The SPIC-MACAY chapter has been 
								 recently added to promote the Indian classical music and culture amongst youth. </div>
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