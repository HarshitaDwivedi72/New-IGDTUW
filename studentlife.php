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
                else if($id==2){
                echo '  <div class="middleBox">
                            <div class="title">
                            Clubs and Societies
                            </div>
                                   <div class="headingPara">
                                            
                                   <ul>
								   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>ACM STUDENT CHAPTER</b></li>
                                   <div class="headingPara">
                                      Department of Information Technology runs a student chapter under the aegis of Association for Computing Machinary (ACM) which is named as ACM Student Chapter @IGDTUW. 
									  <br>
                                      <br>
                                      <a href="studentlife.php?id=4">Read more</a> about  ACM Student chapter.
                                   </div>
           
								   
                                   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Technoliterati</b></li>
                                   <div class="headingPara">
                                       The Technoliterati Society, as the name suggests is the amalgamation of technicality and literary creativity and provides ample opportunities to IGDTUW students to explore their creative writing talents under the mentorship of Dr. Bhavya Raj. The society organizes a plethora of activities, events and writing competitions both Online and Offline to make sure no technocrat at our University is left untouched from the colours of literary Art.
                                       <br>
                                       <br>
                                       <a href="studentlife.php?id=5">Read more</a> about Technoliterati.
                                   </div>
           
                                   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Greensphere</b></li>
                                   <div class="headingPara">
                                   The GreenSphere society at IGDTUW came into existence with a vision to protect and conserve the environment by taking the Green route. The Greensphere Team comprises of dedicated young girls with a vision to protect and conserve the environment by taking the Green route under the guidance of Faculty Advisor, Dr. Bhavani Prasad .
                                   <br>
                                       <br>
                                       <a href="studentlife.php?id=6">Read more</a> about Greensphere.
                                   </div>
           
                                   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>SPIC MACAY  Chapter</b></li>
                                   <div class="headingPara">
                                       SPIC MACAY is an affirmation of a priceless cultural heritage rooted in what is essentially Indian. The movement incorporates the vitality of the youngsters to cajole them into being custodian of what is actually their birthright, namely their heritage, roots and identity. The IGDTUW SPIC MACAY CHAPTER successfully organised a performance by the Kathak dancer, Gauri Diwakar on 25th October, 2017. Faculty advisor for SPIC MACAY is Dr. Geeta.
                                   <br>
                                       <br>
                                       <a href="studentlife.php?id=7">Read more</a> about SPIC MACAY.
                                   </div>
           
           
                                   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Tarannum</b></li>
                                   <div class="headingPara">
                                      Tarannum is a musical society with faculty advisor Dr. Bhavya Raj.
                                   <br>
                                   <br>
                                       <a href="studentlife.php?id=8">Read more</a> about Tarannum.
                                   </div>
           
           
                                   <li><b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>IGDTUW News Letter "BITS & BYTES"</b></li>
                                  
                                       <div class="headingPara">
                                           <a href="pdfs/IGDTUW_BITSandBYTES_2015.pdf">Read more</a> about BUTS & BYTES.
                                       </div>
                                   
                               </ul>
                              
											
                                    </div>
                           
                        </div>';
                }
                else if($id==3){
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
                else if($id==4){
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
                            
                            
                            
                            
                            
                else if($id==5){
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
                            
                
                
                
                else if($id==6){
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
                else if($id==7){
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
                else if($id==8){
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