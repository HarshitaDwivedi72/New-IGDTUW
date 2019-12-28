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
                        <li><a href="appliedScience.php?id=9" id="9"><i class="fa fa-chevron-circle-right">&nbsp</i>Externally Funded Research Projects</a></li>
                        <li><a href="appliedScience.php?id=10" id="10"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Extra Corricular Acitivities</a></li>
                    

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
                            FACULTY DIRECTORY OF APPLIED SCIENCES
                        </div>
                        <div class="headingPara">
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

                            
                            </table>
                        </div>
                        </div>
        
                           ';
                
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
                    else if($id==9){
                        echo ' <div class="middleBox">
                                    <div class="title">
                                        EXTERNALLY FUNDED RESEARCH PROJECTS
                                    </div>
                                    <div class="headingPara">
                                            <ul>
                                                <li class="sideHeading">COMPLETED</li>
                                                        <ul>
                                                             <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr Ranu Gadi</b>
                                                                <p> Estimates of Indoor Air pollutants emitted from fuels used in residential sector of Northern India”, funded by CSIR, New Delhi , Funding received: 18 lakhs.</p>
                                                                </li>
                                                             
                                                             <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr Chhaya Ravikant</b>
                                                             <p> Investigation on Optical Properties of Si-ZnO Nanocomposites” funded by UGC, New Delhi, Funding received: 8.5 lakhs.</p>
                                                             </li>

                                                              <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr Dinesh Ganotra</b>
                                                             <p>Multi-aperture Imaging”, funded by DST, New Delhi,  Funding received: 05 lakhs.</p>
                                                             </li>

                                                              <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr. Dinesh Ganotra</b>
                                                             <p> Panoramic Imaging”, funded by UGC New Delhi, Funding received: 05 lakhs.</p>
                                                             </li>
                                                        </ul>

                                                <li class="sideHeading">ONGOING</li>
                                                        <ul>
                                                             <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Principal Investigator: Dr Ranu Gadi</b>                                                                <p>“Spatio-Temporal Variability of Aerosols over National Capital Region (NCR), India”, funded by DST,  New Delhi, Duration: January 2015-December 2017, Funding received: 52 lakhs.</p>
                                                             </li>
                                                              


                                                        </ul>
                                            </ul>
                                    </div>
                                 </div>';}
                                 // <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i></b>
                                 //<p></p>
                    else if($id==10){
                        echo '<div class="middleBox">
                                    <div class="title">
                                        EXTRA CORRICULAR ACTIVITIES
                                    </div>
                                    
                                    <div class="headingPara">

                                         <ul>
                                            <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Technoliterati</b></li>
                                            <div class="headingPara">
                                                The Technoliterati Society, as the name suggests is the amalgamation of technicality and literary creativity and provides ample opportunities to IGDTUW students to explore their creative writing talents under the mentorship of Dr. Bhavya Raj. The society organizes a plethora of activities, events and writing competitions both Online and Offline to make sure no technocrat at our University is left untouched from the colours of literary Art.
                                                <br>
                                                <br>
                                                <a href="appliedScience.php?id=11">Read more</a> about Technoliterati.
                                            </div>

                                            <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Greensphere</b></li>
                                            <div class="headingPara">
                                            The GreenSphere society at IGDTUW came into existence with a vision to protect and conserve the environment by taking the Green route. The Greensphere Team comprises of dedicated young girls with a vision to protect and conserve the environment by taking the Green route under the guidance of Faculty Advisor, Dr. Bhavani Prasad .
                                            <br>
                                                <br>
                                                <a href="appliedScience.php?id=12">Read more</a> about Greensphere.
                                            </div>

                                            <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>SPIC MACAY  Chapter</b></li>
                                            <div class="headingPara">
                                                SPIC MACAY is an affirmation of a priceless cultural heritage rooted in what is essentially Indian. The movement incorporates the vitality of the youngsters to cajole them into being custodian of what is actually their birthright, namely their heritage, roots and identity. The IGDTUW SPIC MACAY CHAPTER successfully organised a performance by the Kathak dancer, Gauri Diwakar on 25th October, 2017. Faculty advisor for SPIC MACAY is Dr. Geeta.
                                            <br>
                                                <br>
                                                <a href="appliedScience.php?id=13">Read more</a> about SPIC MACAY.
                                            </div>


                                            <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Tarannum</b></li>
                                            <div class="headingPara">
                                               Tarannum is a musical society with faculty advisor Dr. Bhavya Raj.
                                            <br>
                                            <br>
                                                <a href="appliedScience.php?id=14">Read more</a> about Tarannum.
                                            </div>


                                            <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>IGDTUW News Letter "BITS & BYTES"</b></li>
                                           
                                                <div class="headingPara">
                                                    <a href="pdfs/IGDTUW_BITSandBYTES_2015.pdf">Read more</a> about BUTS & BYTES.
                                                </div>
                                            
                                        </ul>
                                   
                                    </div>
                                </div> ';}
                    else if($id==11){
                        echo ' <div class="middleBox">
                                       <div class="title">
                                            TECHNOLITERATI
                                        </div>
                                        <div class="headingPara">
                                            <img src="images/technoliterati.png" class="societyImages" height="200px" width="auto">
                                            <b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Dr. Bhavya, Assistant Professor, Department of ASH. </b>
                                            <br>
                                            <br>
                                            Technoliterati is the Literary Society of IGDTUW which aims at the amalgamation of creativity and talent in the students. It inspires young budding engineers to open their minds up and let their imagination fly, to write candidly, speak fluently and express freely. It encourages students to contribute articles for the college student magazine and actively participate in all the events that the society organizes.
                                            <br>
                                            <br>

                                                At the beginning of every year, new core team members are recruited through the strenuous process of interviews. Presently the core team members are Shifa Samreen, Agamani Paul, Mahima Kaushik and Aishwarya. Apart from conducting regular events like Debates and Essay writing the society took some new initiatives like starting a Writing Club and Group Discussion Club. The Writing Club paved way for the society blog where members write and publish articles, stories, poems, monologues etc. among other forms of writing. The blog is also open to guest bloggers from outside the society. The Debate Club, ‘Eloquentia Verax’,initiated last year, continued to train students for Inter and Intra  College debating events along with organizing debate competitions within the campus. The biggest achievement of the year for the society was that Technoliterati in association with Innerve’16 organized the first ever Model United Nations at IGDTUW with the Agenda for United Nations General Assembly-SOCHUM as: Contemporary forms of slavery in the 21st century with special emphasis on commercial sex work, child soldiers and bonded labourers. The event witnessed a participation of more than 100 students and turned out to be a huge success.


                                        </div>
                                   </div>';
                    }
                    else if($id==12){
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
                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Adopt a sapling</b></li>
                                                <div class="headingPara">

                                                    The Greensphere Team followed its tradition of welcoming the freshers with a plant sapling. On 5th August 2014, the day of orientation, a plant sapling was given to all the freshers outside the auditorium as token. About 100 saplings were distributed.
                                                </div>


                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Talks and Seminars</b></li>
                                                    <div class="headingPara">
                                                    Various seminars and workshops have been organised by Greensphere throughout the year -‘Reducing Green Cover in Delhi’ by Plants Guardian Society, ‘E-Waste Management’ by Mr. Daman Dev Sood (IEEE Delhi Section), and ‘Organ Donation’ by Mohan Foundation. These seminars helped us to create awareness among students.
                                                </div>
                                                
                                                


                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Participation in Technex (IIT-BHU)</b></li>
                                                <div class="headingPara">
                                                    The Greensphere team participated in event, GreenX, organised by Technex (annual fest of IIT-BHU). Various awareness programs and cleanliness drive were organised during the event. Working models and projects like Bleach water bulb, mini biogas plant were made. A final presentation was given at IIT-BHU Campus. Our team came sixth all over India and were also awarded Green College Certificate.
                                                </div>


                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Swachh Bharat Abhiyan</b></li>
                                                <div class="headingPara">
                                                    Greensphere organised an online painting competition on the theme "Cleanliness for a better tomorrow"; a Group Discussion on the topic "How effective Swachh Bharat Abhiyan will be in India" and a quiz competition was also conducted during first week of October. These events witnessed participation in huge numbers. A cleanliness drive was also organized.
                                                </div>


                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Installation of paper recycling unit</b></li>
                                                <div class="headingPara">
                                                    The paper recycling unit was set up at the IT block in college campus on 14 October 2014 by Greensphere. The demo of the machine was given by Mr Piyush Pant in presence of faculty members. The equipment for recycling is innovative, low cost and efficient whereas as the process for the same is simple, safe but sophisticated. The recycled paper has constantly been used for pledges, invitations for our cultural festival-Taarangana, making files, bags and pen stands. 
                                                </div>

                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Anti-crackers pledge</b></li>
                                                <div class="headingPara">
                                                    A pledge was taken on 20-21st October 2014 to celebrate Diwali-festival of lights, in an environment friendly way ( Green Diwali). The pledge stated "This Diwali  light the Earth with happiness and not by crackers". Paper recycled by the Greensphere members was used to make the pledge. The pledge was taken by Ms. Nupur Prakash (Vice Chancellor), faculty members, staff members  and students of the university. The students were made aware of the harmful effects of the crackers and were motivated to celebrate eco-friendly Diwali. 
                                                </div>

                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>CATHARSIS</b></li>
                                                <div class="headingPara">
                                                    The tacit efforts of the faculty members as well as the students of Eco-Club- GREENSPHERE of Indira Gandhi Delhi Technical for Women (IGDTUW) and Eco-Club-URVAR of Ambedkar institute of Advanced Communication Technologies &Research, Delhi (AIACT&R) under the aegis of Department of Environment, Govt. of Delhi, with the guidance of Dr.B C Sabata (Sr. Scientific Officer,Dept. of Environment), organized a one day environment awareness programme “CATHARSIS” on February 13th, 2015 with a backdrop of fun-learning events, witnessed participation and appreciation from colleges all over Delhi.
                                                    <br>
                                                    <br>

                                                    The inaugural began with a plantation drive by the eco-club faculty coordinators and members of the two colleges- Greensphere and Urvar in the IGDTUW grounds. To celebrate the spirit of the cause, events like poster making, ecofie, debate, best out of waste, run for a sapling, Environment quiz, Treasured Herbal Rangoli, Seminar on e-waste, etc were organised. Catharsis also witnessed prolific donations in terms of old clothes and e-waste from faculties and students. Saplings were also distributed among the participants and winners. Catharsis’ first phase accomplished the task of seeking everybody’s attention to mother Earth to revise our obligations for a greener and cleaner world.

                                                </div>

                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Installation of Dustbins</b></li>
                                                <div class="headingPara">
                                                    Permanent metallic dustbins have been set up in the college campus by the Greensphere team. The dustbins have been installed near the canteen, outside GCR and in college grounds.
                                                    <br>
                                                    Separate markings have been done for biodegradable and non-biodegradable waste
                                                

                                                </div>

                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Eco-Friendly Holi Celebration</b></li>
                                                <div class="headingPara">
                                                    On the occasion of Holi, festival of colours, an initiative was taken by the students of Greensphere    to celebrate an Organic Holi on 3 March’15. Herbal colours made by specially –abled were distributed to all the faculty members and students; along with this a pledge was taken to celebrate clean and green Holi. Waste paper recycled by the students of Greensphere was utilized to make the pledge.
                                                </div>

                                                <li><b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Earth Hour in Hostel</b></li>
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
                    else if($id==13){
                        echo '<div class="middleBox">
                                    <div class="title">
                                        SPIC MACAY CHAPTER
                                    </div>
                                    <div class="headingPara">
                                            <img src="images/spicmacay.png" class="societyImages" height="200px" width="auto">
                                            <b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i>Faculty Advisor : Dr. Geeta Sachdev, Assistant Professor, Department of ASH. </b>
                                            <br>
                                            <br>
                                            Society for the Promotion of Indian Classical Music and Culture Amongst Youth (SPIC MACAY) is a voluntary movement founded in 1977 by Dr. Kiran Seth. The movement incorporates the vitality of the youngsters to cajole them into being custodian of what is actually their birthright, namely their heritage, roots and identity. The IGDTUW SPIC MACAY CHAPTER successfully organised a
                                            <br>
                                            <br>
                                            performance by the Kathak dancer, Gauri Diwakar on 25th October, 2017.The audience was captivated with her enthralling performance. The event witnessed a good gathering and turned out to be a great success.
                                    </div>
                                </div> ';
                    }
                    else if($id==14){
                        echo '<div class="middleBox">
                                    <div class="title">
                                       TARANNUM
                                    </div>
                                    <div class="headingPara">
                                            <img src="images/tarannum.png" class="societyImages" height="200px" width="auto">
                                            <b><i class="far fa-hand-point-right">&nbsp&nbsp&nbsp</i> Faculty Advisor : Dr. Bhavya, Assistant Professor, Department of ASH. </b>
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
