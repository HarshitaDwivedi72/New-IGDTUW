 
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
                        <a href="studentlife.php">STUDENT LIFE</a>
                    </div>
                    <ul class="sidenav">
                        <li><a href="studentlife.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Dean (Student Welfare)</a></li>
						<li><a href="pdfs/DSW office activities on women safety.pdf">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Activities of DSW Office </a></li>
                        <li><a href="studentlife.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Clubs and Societies</a></li>
						<li><a href="studentlife.php?id=3" id="3">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-circle-right">&nbsp&nbsp&nbsp</i>Technical Societies</a></li>
						<li><a href="studentlife.php?id=4" id="4">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-circle-right">&nbsp&nbsp&nbsp</i>Societies Founded / Promoted</a></li>
						<li><a href="studentlife.php?id=5" id="5">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-circle-right">&nbsp&nbsp&nbsp</i>Clubs</a></li>
						<li><a href="studentlife.php?id=6" id="6">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-circle-right">&nbsp&nbsp&nbsp</i>Festivals</a></li>
						<li><a href="studentlife.php?id=7" id="7">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-circle-right">&nbsp&nbsp&nbsp</i>Hostel Services</a></li>
						<li><a href="studentlife.php?id=8" id="8">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-circle-right">&nbsp&nbsp&nbsp</i>Sports</a></li>
                        <li><a href="studentlife.php?id=40" id="40"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Student Notices</a></li>


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
                                       <img src="images/ElaKumar.jpg" class="hodImage" alt="Prof.Ela Kumar" height="200px" width="auto">
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
				
				
				 else if($id==2 ) {
    echo '
            <div class="middleBox">
               <div class="title">
                 CLUBS AND SOCIETIES
               </div>
            <div class="headingPara">
              <ul class="sidenav">
               <li><a href="studentlife.php?id=3" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Technical Societies</a></li>
               <li><a href="studentlife.php?id=4" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Societies Founded / Promoted</a></li>
               <li><a href="studentlife.php?id=5" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Clubs</a></li>
               <li><a href="studentlife.php?id=6" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Festivals</a></li>
			   <li><a href="studentlife.php?id=7" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Hostel Services</a></li>
			   <li><a href="studentlife.php?id=8" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Sports</a></li>
             </ul>
           </div>
          </div>';
      }
                else if($id==3){
                echo '  <div class="middleBox">
                            <div class="title">
                             Technical Societies
                            </div>
                                   <div class="headingPara">
                                            
                                   <ul>
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>ACM STUDENT CHAPTER</b></li>
                                   <div class="headingPara">
                                      Department of Information Technology runs a student chapter under the aegis of Association for Computing Machinary (ACM) which is named as ACM Student Chapter @IGDTUW. 
									  <br>
                                      <br>
                                      <a href="studentlife.php?id=9">Read more</a> about  ACM Student chapter.
                                   </div>
           
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>CSI Student Branch</b></li>
                                   <div class="headingPara">
                                      Computer Society of India (CSI) Student branch was founded in 2008 with 120 members from Department of Computer Science and Engineering. Members of CSI promote confluence between technology and academia. Through regular workshops, competitions and seminars, CSI student branch has been successfully accomplishing its motto LEARN-ENVISION-INSPIRE and continues to strive towards it. Since its formation the society has organized many activities from time to time. These activities include workshops and boot camps on various upcoming technologies, monthly events both formal and informal. 
									  These are attended by students of various reputed colleges across Delhi.<br>
                                      <br>
                                      <a href="studentlife.php?id=10">Read more</a> about CSI Student Branch.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> IEEE Student Chapter</b></li>
                                   <div class="headingPara">
                                      The non-profit organization, IEEE is the worlds leading professional association for the advancement of technology. IEEE student branch was inaugurated on 6th Feb. 2004  with around 33 members. Now the student branch of IEEE boasts of 200 members. The IEEE Student Branch remains active throughout the year with its myriad activities. Other events that keep the branch breathing throughout the year are the IEEE Week, IEEE Day Celebration, and SIGs (Student Interest Groups). The IEEE Student Branch continues to uphold its mission "To encourage 
									  innovation and technical excellence amongst young engineers to achieve socially constructive technical development towards a globally competent India."<br>
                                      <br>
									  <a href="studentlife.php?id=11">Read more</a> about IEEE Student Chapter.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>American Society of Mechanical Engineers (ASME) Chapter</b></li>
                                   <div class="headingPara">
                                      The American Society of Mechanical Engineers (ASME) chapter was established under the guidance of Mr. Vivek Chawla, Assistant Professor, Department of MAE. ASME IGDTUW in its attempt, to pursue desired objectives, which include popularization of the organization and facilitating applicative technical thinking, has organized various events such as industrial visits, 
									  specialized seminar on Rapid Prototyping and other expert lectures to name a few for the benefit of the students.<br><br>
									  <a href="studentlife.php?id=12">Read more</a> about American Society of Mechanical Engineers (ASME) Chapter.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>ENACTUS</b></li>
                                   <div class="headingPara">
                                     Enactus is an international nonprofit organization that brings together students, academic practitioners and business leaders who are committed to using the power of entrepreneurial action to improve the quality of life and standard of living for the people in need. This society aims to take up one entrepreneurial venture at a time and use it to create self-sufficiency in the under privileged strata of society with underprivileged individuals.
									 <br><br>
									 <a href="studentlife.php?id=13">Read more</a> about ENACTUS.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>ROBOLUTION</b></li>
                                   <div class="headingPara">
                                     Team Robolution is the robotics team of IGDTUW. The team comprises of students from various branches (CS, IT, ECE & MAE) including the 1st year students. The new members are trained/mentored by the previous members and encouraged to take part in various inter-college and national robotic Events/Competitions. 
									 Every year, team Robolution participates in an Asia-Pacific Robot Contest ABU-ROBOCON, which has a different theme each year.<br><br>
									 <a href="studentlife.php?id=14">Read more</a> about ROBOLUTION.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>LEAN IN</b></li>
                                   <div class="headingPara">
                                     Lean In at Indira Gandhi Delhi University for Women was established in 2014 and it was among the first five chapters of the world. The members organize weekly meetings to talk over the relevance of women empowerment and to discuss the impacts that were created single handed-ly by women leaders. Currently, it has 200 members and 15 functional circles with a Lean 
									 In at IGDTUW council which has conducted events like Orientation by Council Members, Curtain Raiser events and Corporate Training Sessions
									 <br><br>
									 <a href="studentlife.php?id=15">Read more</a> about LEAN IN.
                                   </div>
                                   
                                   
                               </ul>
                              
											
                            
                           
                        </div>';
                }
				
				  else if($id==4){
                echo '  <div class="middleBox">
                            <div class="title">
                             Societies Founded / Promoted
                            </div>
                                   <div class="headingPara">
                                            
                                   <ul>
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Antargat- Creative Society</b></li>
                                   <div class="headingPara">
                                      <b>ANTARGAT</b> means <b>within</b>. This creative society looks at waste with a different perspective. Waste is only waste if wasted. Every waste has some useful potential to be identified and put to work. The society is initiated to collect like minded individuals who have a different perspective to waste and an eye for creative modeling of the same.The Ideation of the society is to recycle, remodel, reuse Waste from the university and likewise, putting condemnation process to a new visionary outcome. 
									  Registrations will open in July 2018.<br>
                                      <br>
                                      <a href="studentlife.php?id=16">Read more</a> about Antargat- Creative Society.
                                   </div>
           
								  <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Technoliterati</b></li>
                                   <div class="headingPara">
                                       The Technoliterati Society, as the name suggests is the amalgamation of technicality and literary creativity and provides ample opportunities to IGDTUW students to explore their creative writing talents under the mentorship of Dr. Bhavya Raj. The society organizes a plethora of activities, events and writing competitions both Online and Offline to make sure no technocrat at our University is left untouched from the colours of literary Art.
                                       <br>
                                       <br>
                                       <a href="studentlife.php?id=17">Read more</a> about Technoliterati.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> The Economics society</b></li>
                                   <div class="headingPara">
                                      The Economics Society, a virtual forum to make students more comfortable with topics such as stock market, share market, bonds and debentures, 
									  was started by Shailaja Gupta, from the batch of 2009-13, ECE Department.<br><br>
									  <a href="studentlife.php?id=18">Read more</a> about The Economics society.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Taarangana - The Cultural Society</b></li>
                                   <div class="headingPara">
                                     The entire year students are occupied with either exams or technical events, workshops, seminars. What they need is a break from all these and this is what Taarangana(earlier Ronesans) is all about. 
									 The cultural society with Dr. Shalini Arora as the faculty advisor, has intermittently aimed at providing entertainment and a platform to the students<br><br>
									 <a href="studentlife.php?id=19">Read more</a> about Taarangana - The Cultural Society.
                                   </div>
								   
								    <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Greensphere</b></li>
                                   <div class="headingPara">
                                   The GreenSphere society at IGDTUW came into existence with a vision to protect and conserve the environment by taking the Green route. The Greensphere Team comprises of dedicated young girls with a vision to protect and conserve the environment by taking the Green route under the guidance of Faculty Advisor, Dr. Bhavani Prasad .
                                   <br>
                                       <br>
                                       <a href="studentlife.php?id=20">Read more</a> about Greensphere.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>SPIC MACAY  Chapter</b></li>
                                   <div class="headingPara">
                                       SPIC MACAY is an affirmation of a priceless cultural heritage rooted in what is essentially Indian. The movement incorporates the vitality of the youngsters to cajole them into being custodian of what is actually their birthright, namely their heritage, roots and identity. The IGDTUW SPIC MACAY CHAPTER successfully organised a performance by the Kathak dancer, Gauri Diwakar on 25th October, 2017. Faculty advisor for SPIC MACAY is Dr. Geeta.
                                   <br>
                                       <br>
                                       <a href="studentlife.php?id=21">Read more</a> about SPIC MACAY.
                                   </div>
								   
								    <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Tarannum</b></li>
                                   <div class="headingPara">
                                      Tarannum, the music society of IGDTUW came into existence with a vision to facilitate musical talent in the University in September 2016 with a 7 member student core team.  
									  The society has three different music ensembles, namely the Band, Indian Choir and Western Choir who work hand in hand
                                   <br>
                                   <br>
                                       <a href="studentlife.php?id=22">Read more</a> about Tarannum.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>ZENA - Fashion Society</b></li>
                                   <div class="headingPara">
                                     Zena-the fashion society of IGDTUW was founded in the year 2013. Currently the faculty advisor is  Ar. Sneha Maji, Asst. Professor, Deptt of Architecture. Its existence came into light with various shows in and out of college.
                                     <br><br>
									 <a href="studentlife.php?id=23">Read more</a> about ZENA - Fashion Society.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Rotary Club-IGDTUW
                                      </b></li>
                                   <div class="headingPara">
                                     The Rotary club-IGDTUW is the student body representation of Rotary International at Indira Gandhi Delhi Technical University for Women This society aims at womens empowerment through social service.
                                   <br>
                                   <br>
                                       <a href="studentlife.php?id=24">Read more</a> about Rotary Club-IGDTUW.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Synergy</b></li>
                                   <div class="headingPara">
                                        Synergy Sports Club, IGDTUW is a platform for all Sports amateurs and professionals to come live the thrill they feel while running, kicking the ball, smashing a shuttle etc. The club focuses on promoting participation in sports and inculcating the spirit of sportswoman ship among the student.
                                   <br>
                                   <br>
                                       <a href="studentlife.php?id=25">Read more</a> about Synergy.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>RAHNUMA-Dramatics Society</b></li>
                                   <div class="headingPara">
								   A team of enthusiastic and hardworking students who share a common passion for the theatre, the members of Rahnuma always leave the spectators spell bound with their energetic performances. 
                                   <br>
                                   <br>
                                       <a href="studentlife.php?id=26">Read more</a> about RAHNUMA-Dramatics Society.
                                   </div>
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>HYPNOTICS –Dance Society</b></li>
                                   <div class="headingPara">
                                      The Dance Society literally hypnotizes every student of the University with its ever growing charm. It has brought laurels to the University like none other.
                                  
                                   <br>
                                   <br>
                                       <a href="studentlife.php?id=27">Read more</a> about HYPNOTICS –Dance Society.
                                   </div>
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>INSTINCT: The Peer Educator’s and Life Skills society</b></li>
                                   <div class="headingPara">
								   Instinct is the first Peer Educator’s and Life Skills Society of IGDTUW which was initiated in July 2016. The main objective of the society is to help peers change mind-sets, question social norms and explore themselves. The tag line of the society is – <b>‘Define your own Ideal’</b> which focuses on finding your own self and your own principles rather than following the one’s set up by the society
                                    <br>
                                   <br>
                                       <a href="studentlife.php?id=28">Read more</a> about INSTINCT: The Peer Educator’s and Life Skills society.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.H.A.V (Behold an Architects View)- The Role Play Society of IGDTUW</b></li>
                                   <div class="headingPara">
                                     The main aim of the society is to provide a platform that brings within the education curriculum, the social issues and challenges. This would promote creative and innovative thinking among youth to reach upon realistic solutions to problems dawning our society at large, while simultaneously familiarizing them with the professional workflow.
									 <br><br>
									 <a href="studentlife.php?id=29">Read more</a> B.H.A.V (Behold an Architects View)- The Role Play Society of IGDTUW.
                                   </div>
                                   
                                   
                               </ul>
                              
											
                            
                           
                        </div>';
                }
				
				
		  else if($id==5){
                echo '  <div class="middleBox">
                            <div class="title">
                                CLUBS
                            </div>
                                   <div class="headingPara">
                                            
                                   <ul>
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>SAE Collegiate Club</b></li>
                                   <div class="headingPara">
                                      SAE India is an affiliate society of SAE International registered in India. MAE students are active members of SAE India and also have a student chapter in college. SAE extends itself into educational institutions and infuses enthusiasm through their Collegiate Design Competition with events that put classroom training into action by challenging students to design, 
									  build and test the performance of a real vehicle in a competitive environment.
									  <br>
                                      <br>
                                      <a href="studentlife.php?id=30">Read more</a> about SAE Collegiate Club.
                                   </div>
           
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Greensphere : The Eco club</b></li>
                                   <div class="headingPara">
                                      GREENSPHERE, the environment club of IGDTUW, aims at increasing the environmental awareness among students
									  <br>
                                      <br>
                                      <a href="studentlife.php?id=31">Read more</a> about Greensphere : The Eco club.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Sports Club</b></li>
                                   <div class="headingPara">
                                      This Sports Club is set up to inculcate the spirit of sportsmanship and unity in the enthusiastic technocrats.
                                     <br>
									 <br>
									  <a href="studentlife.php?id=32">Read more</a> about Sports Club.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Leaders for Tomorrow</b></li>
                                   <div class="headingPara">
                                      Leaders For Tomorrow is a not for profit youth leadership movement established mainly in the college campuses to awaken the social consciousness of the youth, 
									  encourage volunteerism and social action among them.
									  <br>
									  <br>
									  <a href="studentlife.php?id=33">Read more</a> about  Leaders for Tomorrow.
                                   </div>
								   
								   
                                   
                                   
                               </ul>
                              
											
                            
                           
                        </div>';
                }

            	  else if($id==6){
                echo '  <div class="middleBox">
                            <div class="title">
                                FESTIVALS
                            </div>
                                   <div class="headingPara">
                                            
                                   <ul>
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>ESPECTRO</b></li>
                                   <div class="headingPara">
                                     Students of Department of Information Technology under the aegis of IGDTUW ACM Student Chapter organize a 3-day long Annual Technical Festival titled as Espectro. 
									 It is an extravaganza of a unique kind wherein technical fervor and the non-technical zeal resonated during the same time.
									 <br>
                                     <br>
                                     <a href="studentlife.php?id=34">Read more</a> ESPECTRO.
                                   </div>
           
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>IMPULSE</b></li>
                                   <div class="headingPara">
                                     The Annual Technical Fest of IGDTUW IEEE Student Branch is organized every year on different themes under the guidance of branch mentor- Mr. Akash Tayal, Asst. Prof. and branch counselor Prof. S.B. Jain.. The Core Team and the Associate team along with 
									 their Head coordinators and Coordinators put together a fest consisting of number of events, each one of which was a success in its own.  
									 <br>
                                     <br>
                                     <a href="studentlife.php?id=35">Read more</a> about IMPULSE.
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>TREMORS </b></li>
                                   <div class="headingPara">
                                      The annual technical festival of IGDTUW, TREMORS, is organized by CSI IGDTUW Student Branch every year. 
									  The three day event provides a brilliant platform to young minds across the nation to share the same stage and showcase the plethora of their talents.<br>
									 <br>
									  <a href="studentlife.php?id=36">Read more</a> about TREMORS .
                                   </div>
								   
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> XEBEC</b></li>
                                   <div class="headingPara">
                                     “Xebec” refers to a ship sailing through the Mediterranean. It is symbolic of the zeal and enthusiasm of the students, striving towards excellence in their field. The three day festival saw huge participation of students from 43 institutes and universities of Delhi, Noida, Faridabad, Gurgaon in technical, non-technical and green events.
									  <br>
									  <br>
									  <a href="studentlife.php?id=37">Read more</a> about  XEBEC.
                                   </div>
								   
								   
                                   
                                   
                               </ul>
                           
                        </div>';
                }					
               
			  else if($id==7)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">Krishna & Kaveri Hostel
                                    </div>
								
                                    <div class="headingPara">
                                       <img src="images/hostel.jpg" class="hodImage" alt="hostel" height="200px" width="auto">
                                         The University has two women hostels - <b>Krishna Hostel and Kaveri Hostel</b>, to accommodate approximately 340 students. 
										 <br><br>
										  These two hostels are located in the University campus. The hostels provide a safe, secure and clean environment for the students to grow, learn and mature in the society away from their own homes. The hostel authorities always facilitate to create an environment for the students to study, do well in their academics and focus on their career and future.
										 <br><br>
										 
                                          All rooms are on twin/triple sharing basis and are equipped with individual Beds, Chairs, Built-in Cupboards, Study Tables, Rack, Paid laundry services, Refrigerators’, Induction Heaters, Microwave Ovens, Purified drinking water (RO systems), Wi-Fi facility, etc.

  
									</div>
                            </div>';
                }
				
				
				   
			  else if($id==8)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">SPORTS
                                    </div>
								
                                    <div class="headingPara">
                                       <img src="images/sports.jpg" class="hodImage" alt="sport" height="200px" width="auto">
                                         IGDTUW has introduced new sports and recreation facilities. Students launched their own Sports club in 2009 as an endeavor to refresh minds of students and inculcate spirit of sportsmanship among them.
										 <br><br>
										 <b>Synergy Sports Club</b> is the first sports society of IGDTUW. It has been set up to provide entertainment to students, faculty members and staff members around the year. Sports equipments are provided anytime of day to increase the participation among girls for sports and games. Not only sports are provided by this Club but also leisure activities are organized for students and staff. The Club is in its starting phase and yearning for more participation among students as well as faculty. We organize events for students on regular basis to motivate them to participate in extra-curricular activities
										 <br><br>
										 <em>"We encourage students to play and extirpate their stress and also help them enjoy their leisure time.”</em>
										 
										 
  
									</div>
                            </div>';
                }
				
				 else if($id==9){
                    echo ' <div class="middleBox">
                                   <div class="title">
                                        ACM STUDENT CHAPTER
                                    </div>
                                    <div class="headingPara">
                                        <img src="logo/acm.png" class="societyImages" height="200px" width="auto">
                                        <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Mr. Rishabh Kaushal Assistant Professor Department of Information Technology </b>
                                        <br>
                                        <br>
                                    Department of Information Technology runs a student 
                                    chapter under the aegis of Association for Computing 
                                    Machinary (ACM) which is named as ACM Student Chapter 
                                    @IGDTUW. ACM is world’s largest educational and scientific 
                                    computing society that delivers resources to advance 
                                    computing as a science and a profession. Student Chapter has 
                                    been successfully hosting numerous events in the field of 
                                    computing and has helped students improve their programming 
                                    skills and gain knowledge beyond curriculum. The student 
                                    chapter organizes technical talks from experts in the field 
                                    of academics and industry, technical competitions among 
                                    students and contributes immensely to the Annual Technical 
                                    Festival of the University ‘INNERVE’. All these events are 
                                    organized and managed by students of the University under 
                                    the guidance of faculty advisor. Students from outside the 
                                    University are often invited to participate in large numbers 
                                    in such events. For details, refer
                                    <a href="http://acmigdtuwchapter.tech/" target="_blank">http://acmigdtuwchapter.tech/</a>.  
                                      
                
                                    </div>
                               </div>';
                }			
                            
                            
                   
				 else if($id==10)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">COMPUTER SOCIETY OF INDIA
                                    </div>
								
										 
                                    <div class="headingPara">
                                     <em>CSI IGDTUW student branch was formed in August 2008 with 120 members from Dept. of Computer Science & Engineering.</em>
									</div>
									
									<div class="headingPara">
                                       <img src="images/CSI IGIT photos.jpg" class="hodImage" alt="CSI IGIT photos" height="200px" width="auto">
									   <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Ms.Vibha, Assistant Professor, Department of CSE.</b>
                                        <br><br>
										Our Faculty Advisor is Ms. Vibha, Assistant Professor, CSE, whose enthusiasm has motivated our branch to move ahead at a heady pace
									    <br><br>
										Members of CSI IGDTUW are a part of the confluence between technology and academia in every way. Through regular workshops, competitions and seminars, CSI IGDTUW has been successfully accomplishing its motto LEARN-ENVISION-INSPIRE and continues to strive towards it.
									    <br><br>
										Since its formation the society has indulged in many activities from time to time. These activities include workshops and bar camps on various upcoming technologies, monthly events both formal and informal, these are attended by students of various reputed colleges across Delhi. 
										These activities are coordinated by the elected student council under the guidance of the Branch Mentors.
										<br><br></em>
										
									
										<ul class="sidenav"><strong>Activities under CSI IGDTUW, organized in academic session 2012-2013:</strong>
										 
										 <li><i class="fa fa-hand-o-right"></i>&nbspOrientation ceremony, organized on 24th September’12, included a comprehensive presentation on CSI-IGDTUW and its activities followed by Q&A.</li>
										 <li><i class="fa fa-hand-o-right"></i>&nbspCognition’12 (CSI week), conducted from 27 Sept- 1st Oct’12 where various technical events, fun events and online events were organized.</li>
										 <li><i class="fa fa-hand-o-right"></i>&nbspWorkshop on “ANIMAGIC - 3D Animation” in September, 2012</li>
										 <li><i class="fa fa-hand-o-right"></i>&nbspMock GD - a Seminar-cum-competition in October, 2012</li>
										 <li><i class="fa fa-hand-o-right"></i>&nbspWorkshop on “PYTHON PROGRAMMING” in February, 2013</li>
										 <li><i class="fa fa-hand-o-right"></i>&nbspTremors 13.0, the Annual Technical fest of IGDTUW, 14th – 16th March, 2013</li>
										 <li><i class="fa fa-hand-o-right"></i>&nbspCognizance, annual e-newsletter of CSI IGDTUW to be launched in April, 2013</li>
							
										</ul>
										
									 <em>Cognizance is a venture of CSI IGDTUW, the annual newsletter, which is being brought out for the first time. 
									 It depicts the fervor of IGDTUW students in the technical field, tracing all the activities going on, right from the previous years’ 
									 Tremors to the present year activities. Workshops, online fests and orientation reports are described in detail in this magazine.
									 <br><br>
									 "Tremors” is the annual technical festival of National Level, organized by CSI IGDTUW Student Branch, in March every year.
									 <br><br>
									 True to its name, Tremors sets a thrill across the nation and generates waves of supreme competitiveness amongst budding engineers, managers, bureaucrats and entrepreneurs It gives students a chance of learning and understanding the latest advances in technology, while putting into practice the knowledge they have acquired by education
									 <br><br>
									 With an opportunity to participate in a splendid blend of potential technical, managerial, literary, adventurous, online and informal-fun events, Tremors guarantees an unparalleled learning experience.
									 <br><br></em>
									 <strong>The present student council has the following members:</strong>
									  <table>
									 
									      <tr>
                                                    <th>Title</th>
                                                    <th>Name</th>
                                                    
                                          </tr>
										  <tr>
                                                    <td >Chairperson</td>
                                                    <td>Shipra Jain</td>
                                                    
                                          </tr>
										   <tr>
                                                    <td >Vice-Chairperson</td>
                                                    <td>Isha Gupta</td>
                                                    
                                          </tr>
										   <tr>
                                                    <td >General Secretary </td>
                                                    <td>Anshul Aggarwal</td>
                                                    
                                          </tr>
										   <tr>
                                                    <td >HR Heads  </td>
                                                    <td>Sakshi Goel, Deepti Gupta</td>                   
                   
                                          </tr>
										   <tr>
                                                    <td >Event Heads  </td>
                                                    <td>Sonia Suhag, Akshita Chhabra</td>
                                                    
                                          </tr>
										   <tr>
                                                    <td >Creative Head</td>
                                                    <td>  Ruchika Goel</td>
                                                    
                                          </tr>

										   <tr>
                                                    <td >Treasurer </td>
                                                    <td>  Kanika Chawla</td>
                                                    
                                          </tr>
										   <tr>
                                                    <td >PR Head </td>
                                                    <td> Anubhuti Jain</td>
                                                    
                                          </tr>
										   <tr>
                                                    <td >Membership In-charge</td>
                                                    <td> Priyanka Sangtani</td>
                                                    
                                          </tr>
										  <tr>
                                                    <td >Web Masters</td>
                                                    <td>Nishtha Jain, Puneet Kaur</td>
                                                    
                                          </tr>

                                           </table>
                                      
									<em>Since its inception in 2008, CSI-IGDTUW has come a long way. The branch is active on all major social media like Google groups, Facebook, LinkedIn and Twitter and can be contacted at:</em>											
									<em><p>Email:&nbsp<a href>igit.csi@gmail.com</a></p></em> 
									</div>
                            </div>';
                }
				
				  else if($id==11)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">IEEE Student Chapter
                                    </div>
								
                                    <div class="headingPara">
                                       <img src="images/ieee.jpg" class="hodImage" alt="IEEE Student" height="200px" width="auto">
									   <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Dr.Jasdeep Kaur, Associate Professor, Department of ECE. </b>
                                        <br><br>
                                          The IGDTUW IEEE Student Branch is one of the most active student branches under the Delhi Section, Region 10 (Asia Pacific). Established in 2004, the IGDTUW IEEE SB has progressed under the able mentorship of Branch Counselor Prof. S. B. Jain.
                                         <br><br>
										 Under the IEEE activities, a number of weekly events have been conducted all around the year, like Technical Crosswords, Vocabulary, Techno-Pictionary, Hardware design quiz, to mention a few. The membership of the college has almost doubled with almost 120 new members every year making it the second college under the Delhi Section in terms of Student Members.
										 <br><br>
										 <em>"The annual IEEE technical festival “IMPULSE” is conducted every year. The event was a huge success with massive participation from colleges from Delhi and outside.”</em>
										 <br><br>
										 The Robotics event – <b>“ROBO SOCCER”</b>, in, an extremely popular event with number of teams participating from across India.
										 
  
									</div>
                            </div>';
                }
                        
                	  else if($id==12)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">American Society of Mechanical Engineers (ASME) Chapter
                                    </div>
								
                                    <div class="headingPara">
                                       
									     <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor: Mr.Vivek Chawla, Assistant Professor, Department of MAE.</b>
										 <img src="images/ASME DC logo.jpg" class="hodImage" alt="American Society of Mechanical Engineers (ASME) Chapter" height="200px" width="auto">
                                         <br><br>
                                         The American Society of Mechanical Engineers (ASME) chapter was established to pursue desired objectives, which include popularization of the organization and facilitating applicative technical thinking, has organized various events such as industrial visits, specialized seminar on new technologies, quizzes and expert lectures from industries like LPS-Bossard to name a few to keep up to date knowledge and information of the students of IGDTUW. With the international outreach of ASME, University students can be benefitted by applying their theoretical and practical knowledge for research and innovation. Recently, 
										 IGDTUW-ASME chapter was also recognized by the leadership of ASME for the outstanding student start-up section grant which also includes a cash prize of 500 USD.
										 <br><br>
										 <em>"Industry expert lecture and discussion delivered by LPS-Bossard organized by ASME chapter at IGDTUW.”</em>
										 
  
									</div>
                            </div>';
                }


                	  else if($id==13)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">ENACTUS
                                    </div>
								
                                    <div class="headingPara">
                                       
									   <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Dr.Nidhi Goel, Associate Professor, Department of ECE.</b>
                                        <br><br>
                                         Enactus is an international nonprofit organization that brings together students, academic practitioners and business leaders who are committed to using the power of entrepreneurial action to improve the quality of life and standard of living for the people in need. This society aims to take up one entrepreneurial venture at a time and use it to create self-sufficiency in the under privileged strata of society with underprivileged individuals.
										<br><br>
										 
										Khidmat-Enactus IGDTUW’s first social initiative, aims at making women self-reliant by starting their own culinary business. This has resulted in annual revenue generation of nearly 1 Lakh rupees for each of the associated women in the past 12 months. Another entrepreneurial venture, Project REAP has also been taken up by Enactus IGDTUW to tackle the problem of endless plastic waste. Among the 60 national teams from India, Enactus IGDTUW team has won the Rookie League of Enactus India National Competition 2016. Enactus IGDTUW has also partnered with one of the leading NGO working for women empowerment- Sahyog and has recently won the prestigious KPMG Ethics Grant for 2017.
										<br><br>
										<img src="images/4.png" class="hodImage" alt="IEEE Student" height="200px" width="auto">
									</div>
                            </div>';
                }
				
				
                	  else if($id==14)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">ROBOLUTION
                                    </div>
								
                                    <div class="headingPara">
                                       <img src="images/5.png" class="hodImage" alt="IEEE Student" height="200px" width="auto">
									
									   <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Dr.Nidhi Goel, Associate Professor, Department of ECE.</b>
                                        <br><br>
                                        Team Robolution is the robotics team of IGDTUW. The team comprises of students from various branches (CS, IT, ECE & MAE) including the 1st year students. The new members are trained/mentored by the previous members and encouraged to take part in various inter-college and national robotic Events/Competitions. Every year, team Robolution participates in an Asia-Pacific Robot Contest ABU-ROBOCON, which has a different theme each year.
										<br><br>
										 Every year, the theme of ABU ROBOCON is declared in August; the design phase begins immediately after that as the bot is designed per the theme and specifications of bot. Students build the robots right from the scratch. The last few weeks are spent in practicing in the arena and rectifying the problems. Since the bot is prepared entirely by the students they learn about design, construction and programming using Arduino microcontroller, propellers, pneumatics actuators, omnidirectional wheels, Open-CV, Kinect, MATLAB etc. apart from the cutting, drilling, riveting, welding and wiring tasks.
										<br><br>
										 For the year 2015, the teams had to design a robot for badminton’s doubles game—two robots hit and hit back shuttle by collaborating with each other. In contrast, the theme of ROBOCON 2016 is “Clean Energy Recharging the World” and team IGDTUW had made 2 robots – an eco robot, that receives energy from hybrid robot and a hybrid robot that indirectly drive or provide energy to eco robot. IGDTUW Robolution team was widely acknowledged and appreciated during the ROBOCON Event. The team was also interviewed by DD National for great efforts in ROBOCON 2016. The students were also blessed by our education minister Sh. Manish Sisodia on foundation day of our college. He motivated the students to perform better and make our nation proud.
										<br>
										</div>
                            </div>';
                }
				
					  else if($id==15)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">LEAN IN
                                    </div>
								
                                    <div class="headingPara">
                                       <img src="images/5.png" class="hodImage" alt="IEEE Student" height="200px" width="auto">
									
									   <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Dr.Richa Yadav, Assistant Professor, Department of ECE.</b>
                                        <br><br>
                                        Lean In is an international NGO which is committed to offering women the ongoing support and inspiration to help them achieve their goals. It is focused on encouraging women to pursue their ambitions and aims to change the trajectory of women and create a better world for everyone by openly talking about the challenges. Internationally, it is run by Sheryl Sandberg, the Chief Operating Officer of Facebook.
										<br><br>
										 Lean In at Indira Gandhi Delhi University for Women was established in 2014 and it was among the first five chapters of the world. The members organize weekly meetings to talk over the relevance of women empowerment and to discuss the impacts that were created single handed-ly by women leaders. Currently, it has 200 members and 15 functional circles with a Lean In at IGDTUW council which has conducted events like Orientation by Council Members, Curtain Raiser events and Corporate Training Sessions.
										 
										</div>
                            </div>';
                }
                                     
                            
                else if($id==17){
                    echo ' <div class="middleBox">
                                   <div class="title">
                                        TECHNOLITERATI
                                    </div>
                                    <div class="headingPara">
                                        <img src="images/technoliterati.png" class="societyImages" height="200px" width="auto">
                                        <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Dr. Bhavya, Assistant Professor, Department of ASH. </b>
                                        <br>
                                        <br>
                                        Technoliterati is the Literary Society of IGDTUW which aims at the amalgamation of creativity and talent in the students. It inspires young budding engineers to open their minds up and let their imagination fly, to write candidly, speak fluently and express freely. It encourages students to contribute articles for the college student magazine and actively participate in all the events that the society organizes.
                                        <br>
                                        <br>
                
                                            At the beginning of every year, new core team members are recruited through the strenuous process of interviews. Presently the core team members are Shifa Samreen, Agamani Paul, Mahima Kaushik and Aishwarya. Apart from conducting regular events like Debates and Essay writing the society took some new initiatives like starting a Writing Club and Group Discussion Club. The Writing Club paved way for the society blog where members write and publish articles, stories, poems, monologues etc. among other forms of writing. The blog is also open to guest bloggers from outside the society. The Debate Club, ‘Eloquentia Verax’,initiated last year, continued to train students for Inter and Intra  College debating events along with organizing debate competitions within the campus. The biggest achievement of the year for the society was that Technoliterati in association with Innerve’16 organized the first ever Model United Nations at IGDTUW with the Agenda for United Nations General Assembly-SOCHUM as: Contemporary forms of slavery in the 21st century with special emphasis on commercial sex work, child soldiers and bonded labourers. The event witnessed a participation of more than 100 students and turned out to be a huge success.
                
                
                                    </div>
                               </div>';
                }			
                            
                
                
                
                else if($id==20){
                    echo ' <div class="middleBox">
                                <div class="title">
                                    GREENSPHERE
                                </div>
                                <div class="headingPara">
                                        <img src="images/greensphere.png" class="societyImages" height="200px" width="auto">
                                        The GreenSphere society at IGDTUW came into existence with a vision to protect and conserve the environment by taking the Green route. The Greensphere Team comprises of dedicated young girls with a vision to protect and conserve the environment by taking the Green route under the guidance of Faculty Advisor, Dr. Bhavani Parasad.
                                        <br>
                                        <br>
                                             "Green sphere" is the Environmental Society, which was formed in October 2008. Currently Dr Bhavani Prasad Naik is the Faculty Advisor of this society. It aims at spreading environmental awareness and is an initiation by those who comprehend the engineering of ecological balance and the effect of our routine activities on our immediate environment.
                                        <br>
                                        <br>
                                        The activities and events are organized that focus on creating awareness among students and encourage greener practices. Some of the initiatives taken by the society are: Sapling Distribution on Orientation Day every year to welcome the new students of the Institute, Poster Making Competition, Plantation Drive and Theme Photography Events.
                                        <br>
                                        </br>
                                        Green sphere also organizes several events and awareness campaigns such as Anti Fire-cracker awareness program, Earth Hour signature campaign, thematic T-shirt painting and Video-making competitions , workshops and seminars conducted by NGOs like ICPE, WWF, TERI, CSE, Swechha and many more. In addition, the society has initiated implementing the activities of Swachh Bharat Mission in IGDTUW. This society works in collaboration with Department Of Environment, Govt. of NCT of Delhi.
                                        <br>
                                        </br>
                                        The Greensphere society of IGDTUW has successfully installed a Paper Recycling Unit which is being run by the students quite effectively and efficiently. The unit makes quality paper out 46 of waste, which is used for making Greeting Cards, Invitations, Fest charts etc. The society is active on all major social media and can be contacted at: 
                                        <a href="https://www.facebook.com/greensphereigdtuw" target="_blank" > https://www.facebook.com/greensphereigdtuw </a> 
                                        and mail: <a href="greensphereigdtuw@gmail.com" target="_blank" >greensphereigdtuw@gmail.com.</a>
                                        <br>
                                        <br>
                                        <b>INITIATIVES TAKEN BY GREENSPHERE</b>
                                        <ul>
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Adopt a sapling</b></li>
                                            <div class="headingPara">
                
                                                The Greensphere Team followed its tradition of welcoming the freshers with a plant sapling. On 5th August 2014, the day of orientation, a plant sapling was given to all the freshers outside the auditorium as token. About 100 saplings were distributed.
                                            </div>
                
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Talks and Seminars</b></li>
                                                <div class="headingPara">
                                                Various seminars and workshops have been organised by Greensphere throughout the year -‘Reducing Green Cover in Delhi’ by Plants Guardian Society, ‘E-Waste Management’ by Mr. Daman Dev Sood (IEEE Delhi Section), and ‘Organ Donation’ by Mohan Foundation. These seminars helped us to create awareness among students.
                                            </div>
                                            
                                            
                
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Participation in Technex (IIT-BHU)</b></li>
                                            <div class="headingPara">
                                                The Greensphere team participated in event, GreenX, organised by Technex (annual fest of IIT-BHU). Various awareness programs and cleanliness drive were organised during the event. Working models and projects like Bleach water bulb, mini biogas plant were made. A final presentation was given at IIT-BHU Campus. Our team came sixth all over India and were also awarded Green College Certificate.
                                            </div>
                
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Swachh Bharat Abhiyan</b></li>
                                            <div class="headingPara">
                                                Greensphere organised an online painting competition on the theme "Cleanliness for a better tomorrow"; a Group Discussion on the topic "How effective Swachh Bharat Abhiyan will be in India" and a quiz competition was also conducted during first week of October. These events witnessed participation in huge numbers. A cleanliness drive was also organized.
                                            </div>
                
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Installation of paper recycling unit</b></li>
                                            <div class="headingPara">
                                                The paper recycling unit was set up at the IT block in college campus on 14 October 2014 by Greensphere. The demo of the machine was given by Mr Piyush Pant in presence of faculty members. The equipment for recycling is innovative, low cost and efficient whereas as the process for the same is simple, safe but sophisticated. The recycled paper has constantly been used for pledges, invitations for our cultural festival-Taarangana, making files, bags and pen stands. 
                                            </div>
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Anti-crackers pledge</b></li>
                                            <div class="headingPara">
                                                A pledge was taken on 20-21st October 2014 to celebrate Diwali-festival of lights, in an environment friendly way ( Green Diwali). The pledge stated "This Diwali  light the Earth with happiness and not by crackers". Paper recycled by the Greensphere members was used to make the pledge. The pledge was taken by Ms. Nupur Prakash (Vice Chancellor), faculty members, staff members  and students of the university. The students were made aware of the harmful effects of the crackers and were motivated to celebrate eco-friendly Diwali. 
                                            </div>
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>CATHARSIS</b></li>
                                            <div class="headingPara">
                                                The tacit efforts of the faculty members as well as the students of Eco-Club- GREENSPHERE of Indira Gandhi Delhi Technical for Women (IGDTUW) and Eco-Club-URVAR of Ambedkar institute of Advanced Communication Technologies &Research, Delhi (AIACT&R) under the aegis of Department of Environment, Govt. of Delhi, with the guidance of Dr.B C Sabata (Sr. Scientific Officer,Dept. of Environment), organized a one day environment awareness programme “CATHARSIS” on February 13th, 2015 with a backdrop of fun-learning events, witnessed participation and appreciation from colleges all over Delhi.
                                                <br>
                                                <br>
                
                                                The inaugural began with a plantation drive by the eco-club faculty coordinators and members of the two colleges- Greensphere and Urvar in the IGDTUW grounds. To celebrate the spirit of the cause, events like poster making, ecofie, debate, best out of waste, run for a sapling, Environment quiz, Treasured Herbal Rangoli, Seminar on e-waste, etc were organised. Catharsis also witnessed prolific donations in terms of old clothes and e-waste from faculties and students. Saplings were also distributed among the participants and winners. Catharsis’ first phase accomplished the task of seeking everybody’s attention to mother Earth to revise our obligations for a greener and cleaner world.
                
                                            </div>
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Installation of Dustbins</b></li>
                                            <div class="headingPara">
                                                Permanent metallic dustbins have been set up in the college campus by the Greensphere team. The dustbins have been installed near the canteen, outside GCR and in college grounds.
                                                <br>
                                                Separate markings have been done for biodegradable and non-biodegradable waste
                                            
                
                                            </div>
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Eco-Friendly Holi Celebration</b></li>
                                            <div class="headingPara">
                                                On the occasion of Holi, festival of colours, an initiative was taken by the students of Greensphere    to celebrate an Organic Holi on 3 March’15. Herbal colours made by specially –abled were distributed to all the faculty members and students; along with this a pledge was taken to celebrate clean and green Holi. Waste paper recycled by the students of Greensphere was utilized to make the pledge.
                                            </div>
                
                                            <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Earth Hour in Hostel</b></li>
                                            <div class="headingPara">
                                            On 28th March’15 Earth hour was celebrated in college hostel wit h a candle light dinner  to give the message ‘Save Electricity’.
                                            <br>
                                            <br>
                                            <b>Link to the Facebook Page: <a href="https://www.facebook.com/greensphere.igdtuw" target="_blank">https://www.facebook.com/greensphere.igdtuw</b>
                                            </div>
                                        </ul>
                
                                </div>
                            </div> ';
                }
                else if($id==21){
                    echo '<div class="middleBox">
                                <div class="title">
                                    SPIC MACAY CHAPTER
                                </div>
                                <div class="headingPara">
                                        <img src="images/spicmacay.png" class="societyImages" height="200px" width="auto">
                                        <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Dr. Geeta Sachdev, Assistant Professor, Department of ASH. </b>
                                        <br>
                                        <br>
                                        Society for the Promotion of Indian Classical Music and Culture Amongst Youth (SPIC MACAY) is a voluntary movement founded in 1977 by Dr. Kiran Seth. The movement incorporates the vitality of the youngsters to cajole them into being custodian of what is actually their birthright, namely their heritage, roots and identity. The IGDTUW SPIC MACAY CHAPTER successfully organised a
                                        <br>
                                        <br>
                                        performance by the Kathak dancer, Gauri Diwakar on 25th October, 2017.The audience was captivated with her enthralling performance. The event witnessed a good gathering and turned out to be a great success.
                                </div>
                            </div> ';
                }
                else if($id==22){
                    echo '<div class="middleBox">
                                <div class="title">
                                   TARANNUM
                                </div>
                                <div class="headingPara">
                                        <img src="images/tarannum.png" class="societyImages" height="200px" width="auto">
                                        <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Faculty Advisor : Dr. Bhavya, Assistant Professor, Department of ASH. </b>
                                        <br>
                                        <br>
                                        Tarannum, the music society of IGDTUW came into existence with a vision to facilitate musical talent in the University in September 2016 with a 7 member student core team.  The society has three different music ensembles, namely the Band, Indian Choir and Western Choir who work hand in hand. 
                                        <br>
                                        <br>
                                        The Western Choir of Tarannum is an ensemble of 10 members. With a focus on both western culture of music and A CAPPELLA music, it has been a part of multiple events and plans to be participating in future as well. The Indian Choir wing of the Tarannum has an amazing set of performers. In addition the society also has a 6 member band. Tarannum has been a part of major events held in the college premises namely the Fresher’s Function and Taarangana, and is working hard to achieve bigger milestones in the coming times.
                                </div>
                            </div> ';
                }
				
				 else if($id==40){
                 echo '
                        <div class="middleBox">
                                <div class="title">
                                    Student Notice Board
                                </div>
                                 <div class="headingPara">
                                    <table>
                                                <tr>
                                                    <th colspan="2" >Title</th>
                                                    <th>File</th>
                                                    <th>Date of Upload</th>
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

</html>
