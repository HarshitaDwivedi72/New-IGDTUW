<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


<!-- main department stylesheet -->
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
    <?php include 'header.php'?>
    <!-- Main body -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        ABOUT IGDTUW
                    </div>
                    <ul class="sidenav">
                      <li><a href="AboutUs.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Institute's History</a></li>
                      <li><a href="AboutUs.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Vision/Mission</a></li>
                      <li><a href="AboutUs.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Vice Chancellor</a></li>
                      <li><a href="AboutUs.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Registrar</a></li>
                      <li><a href="AboutUs.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Statutory Bodies</a></li>
                      <li><a href="AboutUs.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Administration</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
              <?php
              if($id==1){
              echo '
              <div class="middleBox">
                  <div class="title">
                  INSTITUTE \'S HISTORY
                  </div>
                <div class="headingPara">
                  <img src="images/igdtuw.jpg" class="hodImage" alt="Indraprastha College for Women" width="300px" height="200px">
                  Indira Gandhi Delhi Technical University for Women (IGDTUW) was established by the Govt. NCT of Delhi in May, 2013 vide Delhi Act 09 of 2012, as a non-affiliating University to facilitate and promote studies, research, technology, innovation, incubation and extension work in emerging areas of professional education among women, with focus on engineering, technology, applied sciences, architecture and its allied areas with the objective to achieve excellence in these and related fields.

                  <br><br>
                  Erstwhile Indira Gandhi Institute of Technology (IGIT) was established in 1998 by Directorate of Training and Technical Education, Govt. of NCT of Delhi as the first engineering college for women only. In 2002, the college became the first constituent college of Guru Gobind Singh Indraprastha University. Over the years erstwhile IGIT has significantly contributed to the growth of quality technical education in the country and has become not only one of the premier institutions of Delhi but as the most prestigious college of north India.
                  <br><br>
                  Since 2013, the University has steadily grown exponentially. It has continued B.Tech. programmes in four disciplines namely computer science engineering, information technology, electronics & communications and robotics & automation engineering. M.Tech. Programmes in niche areas of technology like Information Security Management, Mobile Pervasive Computing, VLSI Design and Robotics and Automation Engineering were started for the first time in institute. The Ph.D programme was started in 2014 in various disciplines. In 2015, the University started B.Arch. Programme. In short span of few years, the University has drastically increased its student strength.
                  <br><br>
                  The University is not only providing high-quality teaching in an environment of   competitive research but is also committed towards the creation of new knowledge through research,  development and innovation.  At present the various departments of the University are running sponsored research projects from the leading Industry/organizations like Microsoft, Atmel, Nokia, Department of Science & Technology, Department of IT, Govt. of India and IITs to name a few. With the support of the Govt. of NCT of Delhi, the University has started its incubation centre – Anveshan that is offering ample opportunities to the young women engineers to realize their dreams by becoming the entrepreneur.
                  <br><br>
                  The teaching pedagogy of the University is to make students think, to resolve problems by argument supported by evidence and not to be dismayed by complexity, but bold in unravelling it.  The university incessant effort is to produce work-ready graduates and this is achieved through continuously updating the syllabus with the involvement of the experts from Industry and leading academia. As an outcome, the students of the University are placed 100% with multiple job offers in the leading industry like Intel, Microsoft, Facebook, Qualcomm, Intuit, Oracle, ARM, CISCO, Yamaha, Mahindra & Mahindra, Tata Motors to name a few.
                  <br><br>
                  The University has decentralized structure with six academic departments and administrative departments to facilitate functioning of the academic departments. The functioning of the academic departments is well organized under the Head of the Department.  Besides teaching, and service roles to carry out the academic work, the various academic departments have become the epicentre of research and development activities in their respective areas of specialization. The academic administrative responsibilities of the University are shouldered by Dean(Academic Affairs), Dean (Examination Affairs), Dy. Dean (Research & Consultancy), Dy. Dean (Student Welfare), Chief Proctor and Chief Warden.
              </div>
            </div>';
          }

          elseif($id==2) {
            echo '<div class="middleBox">
                        <div class="title">
                            VISION
                        </div>
                        <div class="headingPara">
                            <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To make India a Knowledge Society and Knowledge Economy by empowering the women of our country through education in Engineering, Science, Management and Technology.<br><br>
                            <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To become one of the top technical Universities in the country known for its value based, quality technical education supported with industry relevant research, with focus on environmental and social issues.
                        </div>

                      <div class="title">
                                MISSION
                      </div>
                      <div class="headingPara">
                          <ul>
                          <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To foster an environment for excellence in professional education and ensure active participation of women in the field of Engineering, Science, Management and Technology, while striking out a work-life balance.</li>

                          <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To start new professional courses for women in sun-rise disciplines and forge alliances with industry to impart industry relevant education.</li>

                          <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To emancipate women through pursuit of knowledge enabling them to gain  equal status in society through realization of their rights and responsibilities</li>

                          <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To develop sustainable systems and state-of-the-art infrastructure to enable the Indian women to become the future leaders, managers, researchers and productive team players in the field of science, technology and management.</li>
                        </ul>
                      </div>
                      <div class="title">
                                  OBJECTIVE
                      </div>
                      <div class="headingPara">
                        As per IGDTUW Act 2012 vide clause 6 the objectives of the University shall be:-
                        <ul>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To evolve and impart comprehensive professional education with focus on but not restricted to Engineering, Technology, Sciences, Management and such areas as deemed fit;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To facilitate and promote studies leading to award of degrees, diplomas and certificates;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To achieve excellence in Engineering, Technology, Sciences, Management and allied areas and matters connected therewith or incidental thereto;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To establish Centres of Advanced Studies, Research and innovation in various relevant areas of Sciences, Engineering, Technology, Management and allied areas;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To promote development of products, services and entrepreneurship;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To be industry relevant and to create an impact on the academic community in India and abroad;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To establish linkages between the University, Industries, Research and Development Organizations and other Universities/Institutes for collaborative (including dual degree) teaching and research programmes in India and abroad;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To promote global interaction through faculty and student exchange in the areas of Science, Engineering, Technology, Management and other allied areas as deemed fit;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To set up innovation centres, knowledge Park and Technology incubators to foster Techno-entrepreneurship, innovation and new product development;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To disseminate knowledge and contribute towards nation building and faculty development by organizing expert lectures, seminars, symposia, workshops , conferences, summer and winter schools, short term training programs and refresher courses from time to time;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To promote and foster cultural and ethical values with a view to promote and foster professional morality, research integrity, globally acceptable business ethics and morals for professionals;</li>
                            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To publish periodicals, treatises, studies, books, reports, journals and other literatures on subjects pertinent to academic areas of the university, including electronics resources.</li>
                        </ul>
                     </div>

              </div>';
             }

        elseif($id==3) {
        echo '
        <div class="middleBox">
            <div class="title">
            VICE CHANCELLOR
            </div>
            <div class="profile">

            <div class="pHeading">“You Educate a Man; You Educate a Man.<br>
            You Educate a Woman; You Educate a Generation.”</div>

            </div>


            <div class="headingPara">
                  <img src="images/Pro_vc.png" class="hodImage" alt="Dr(Mrs). Amita Dev" width="auto" height="200px">
                  It feels great to be the wind beneath the wings of one of the top ranking Emerging Engineering Institutes of Technology in India. The devouring stride of IGDTUW, since its inception in 1998 as IGIT, has been exemplary, culminating in transforming itself into an icon for women empowerment. To be a vibrant part of this illustrious edifice of teaching and learning is certainly a matter of stupendous pride and a new-found privilege for me. <br>
                  IGDTUW has evolved to become a national flagship, research-led university with a mission to foster an environment for excellence in professional education and ensure active participation of women in the field of Engineering, Science, Management and Technology, thereby attempting to strike out a fine balance between world of work and life. The university vows to devise sustainable systems and state-of-the-art infrastructure to enable the Indian women to dawn the role of future leaders, managers, researchers and productive team players in the field of science, technology.<br>
                  The University offers a number of B.Tech, B.Arch, M.Tech and Ph.D programmes in faculty of Engineering and Technology. It also aims at teaching, training and elevating the students to an independent level where they can achieve higher level of excellence and professionalism.<br>
                  The University is equipped with the state of the art Learning Resource Centre to support the learning and research activities of students and faculty. The renovated infrastructure, the qualified and experienced faculty members, latest equipments, instruments, Hi-end computers, teaching aids, multimedia, wi-fi connectivity required for modern day teaching create an edge over other universities. The hostel, the common room equipped with fitness equipments, yoga facility and indoor games, a guest house, the dispensary and banking facility conjure up a spell of being the most ideal campus.<br>
                  Our university has always been a placement/ job utopia for our students. There has been an unprecedented boom in the visiting list of companies. Many of our students have been placed in renowned National and Multinational companies. We hope to retain and revitalize the placement hub.<br>
                  With that note, I extend my best wishes to the students of the University and I envisage a very promising and successful professional career for you. My flights of fancy would revel to foresee you in the guise of Savitri Jyotirao Phule, Pratibha patil, Kalpana Chawala ,Vineet Jain, Priya Paul, Suchi Mukherjee, Anisha Singh and a lot other women luminaries who have left their indelible footprints in the history of our nation.
                <br><br>
                <b>Dr(Mrs).Amita Dev
                <br>
                Vice Chancellor, IGDTUW
                </b>
                <strong>
                <a class="sidenav" href="AboutUs.php?id=7">Brief Profile of Dr(Mrs). Amita Dev</a> </strong>
            </div>
    </div>';}
    elseif($id==4) {
      echo '
      <div class="middleBox">
          <div class="title">
          REGISTRAR
          </div>
          <div class="headingPara">
          <img src="images/rksingh.jpg" class="hodImage" alt="Prof. R.K. Singh" width="auto" height="200px">
           <b>”Education is not the learning of facts, but the training of the mind to think.”</b>
              <br> <b>-- Albert Einstein</b>
                <p> It is my proud privilege and honor to be a part of Indira Gandhi Delhi Technical University for Women, Delhi (IGDTUW), which has made its present felt not only in the academic fraternity but also in industry. In short span of time, the University has received a number of sponsored research projects from the leading Industry/organizations like Microsoft, ITR, Nokia, Department of Science & Technology, Ministry of Electronics & IT, Govt of India and latest being the CURIE Grant amounting Rs. 3.63 crores from Ministry of Science & Technology. This has developed an environment of Research & Development in the University in true sense.
                <br><br>
                The infrastructure of the University has been renovated providing the conducive environment for teachers and students to carry out their studies and research work. IT infrastructure of the University has been recently upgraded providing seamless wireless internet connectivity to students in secure environment.
                <br><br>
                The real achievement is not about how you start your journey with IGDTUW but it’s about how you finish your journey by sustaining to your goals, learning and unlearning various facts in the journey and practicing the profession with highest ethical standards.
                <br><br>
                I, with my committed and dedicated administrative officers/staff assure to provide all possible administrative support to all the young and budding engineering and architect students  of the university.
                <br><br>
                I wish all students of IGDTUW the very best in all their future endeavors and welcome you all to the first women technical university of India i.e. IGDTUW.</p>
            <br><br>
            <b> Prof. R.K. Singh <br>
              Registrar, IGDTUW
            </b>
        </div>
      </div>
    </div>';
  }
  elseif($id==5 ) {
    echo '
    <div class="middleBox">
        <div class="title">
        STATUTORY BODIES OF UNIVERSITY
        </div>
        <div class="headingPara">
        <div class="title">
        University Court
        </div>
        The University Court is highest Authority of the University. As per the IGDTU Act, the Court shall review, from time to time, the broad policies and programmes of the University and suggest measures for improvement and development of the University. The first Court of the University has been constituted vide Order No. F.16(5)/Plg/IGDTUW/2017/13-22 dated the 1st March 2017, and it has following composition:
        <table>
        <tr>
        <td style="width:5px;">1.</td>
        <td>Chancellor, IGDTUW</td>
        <td style="width:8px;">Chairperson</td>
        </tr>
        <tr>
        <td style="width:5px;">2.</td>
        <td>Vice Chancellor, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">3.</td>
        <td>Pro Vice Chancellor, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">4.</td>
        <td>Principal Secretary or Secretary, Technical Education,Govt. of NCT of Delhi (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">5.</td>
        <td>Principal Secretary or Secretary, Higher Education,Govt. of NCT of Delhi (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">6.</td>
        <td>Principal Secretary or Secretary, Finance,Govt. of NCT of Delhi (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">7.</td>
        <td>Two eminent persons in discipline of basic and applied science, engineering, technology and management nominated by Chancellor, IGDTUW</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">8.</td>
        <td>All Deans of the University (Ex-Officio)</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">9.</td>
        <td>Registrar, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member Secretary</td>
        </tr>
        </table>
        <b>MINUTES OF MEETINGS OF UNIVERSITY COURT:-</b>
        <table>
          <tr>
            <th style="">Minutes of Meeting</th>
            <th>Date of Upload</th>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/1st_court_minutes.pdf">1st Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/2nd_court_minutes.pdf">2nd Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
        </table>

        <div class="title">
        Board of Management
        </div>
        The Board of Management is the Principal Executive Authority of the University and as such has all powers necessary to administer the University subject to the provisions of the University Act and Statutes. The Board of Management of the university was initially constituted vide Order No. F.16(1)/Plg.(BOM)/2013/2079-2109 dated 23rd Octber 2013 read with Order No. F.16(1)/Plg.(BOM)/2013/4815-4821 dated 28th January 2015. The Board of Management has following composition:-
        <table>
        <tr>
        <td style="width:5px;">1.</td>
        <td>Chairperson has be eminent educationalist or eminent scientist or eminent engineer/technologist or eminent industrialist to be nominated by Chancellor in the manner prescribed</td>
        <td style="width:8px;">Chairperson</td>
        </tr>
        <tr>
        <td style="width:5px;">2.</td>
        <td>Vice Chancellor, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">3.</td>
        <td>Pro Vice Chancellor, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">4.</td>
        <td>Four persons having practical knowledge or special experience in respect of education, engineering and technology, domain of application of technology, to be nominated by Chancellor, from a panel of eight persons submitted by Vice Chancellor</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">5.</td>
        <td>Two representatives of the Industries/Organizations, to be nominated by Vice Chancellor</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">6.</td>
        <td>Representative of University Grants Commission (UGC)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">7.</td>
        <td>Two eminent persons in discipline of basic and applied science, engineering, technology and management nominated by Chancellor, IGDTUW
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">8.</td>
        <td>Principal Secretary or Secretary, Higher Education, Govt. of NCT of Delhi (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">9.</td>
        <td>Principal Secretary or Secretary, Higher Education, Govt. of NCT of Delhi (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">10.</td>
        <td>Principal Secretary or Secretary, Finance, Govt. of NCT of Delhi (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">11.</td>
        <td>Any two Deans of University nominated by Vice Chancellor on rotation basis</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">12.</td>
        <td>Any two Professors of University nominated by Vice Chancellor on rotation basis</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">13.</td>
        <td>Other members as prescribed by the Statue.</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">14.</td>
        <td>Registrar, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member Secretary</td>
        </tr>
        </table>
        <b>MINUTES OF MEETINGS OF BOARD OF MANAGEMENT:-</b>
        <table>
          <tr>
            <th style="">Minutes of Meeting</th>
            <th>Date of Upload</th>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/01 BOM Minutes.pdf">1st Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/02 BOM Minutes.pdf">2nd Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/03 bom minutes.pdf">3rd Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/04 bom minutes.pdf">4th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/05 BOM Minutes.pdf">5th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/06 bom.pdf">6th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/07 bom com.pdf">7th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/eight bom minutes.pdf">8th Meeting</a></td>
            <td>12-11-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/revised minutes 8th bom.pdf">8th Meeting (revised)</a></td>
            <td>12-11-2018</td>
          </tr>
          <tr>
            <td style="w"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/9th bom minutes.pdf">9th Meeting</a></td>
            <td>06-06-2019</td>
          </tr>
        </table>

        <div class="title">
        Finance Committee
        </div>
        The Finance Committee of the University is responsible for providing its recommendations on all financial matters of the University to the Board of Management. The Finance Committee of the University has been constituted vide Order No. F.16(01)/Plg/2017/ dated the 9th March 2017, which has following composition:-
        <table>
        <tr>
        <td style="width:5px;">1.</td>
        <td>Chairman, Board of Management. (Ex-Officio)</td>
        <td style="width:8px;">Chairperson</td>
        </tr>
        <tr>
        <td style="width:5px;">2.</td>
        <td>Vice Chancellor, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">3.</td>
        <td>Pro Vice Chancellor, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">4.</td>
        <td>Cromtroller of Accounts, Govt. of NCT of Delhi</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">5.</td>
        <td>Principal Secretary or Secretary, Technical Education, Govt. of NCT of Delhi (Ex-Officio)</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">6.</td>
        <td>Principal Secretary or Secretary, Finance, Govt. of NCT of Delhi (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">7.</td>
        <td>Two Deans of University nominated by Vice Chancellor</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">8.</td>
        <td>Two HODs of University by rotation based on seniority</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">9.</td>
        <td>Two other members nominated by BOM from amonst its members of whom at least one should be employee of University</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">10.</td>
        <td>Any such members as prescribed by Statues</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">11.</td>
        <td>Registrar, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member Secretary</td>
        </tr>
        </table>
        <b>MINUTES OF MEETINGS OF FINANCE COMMITEE:-</b>
        <table>
          <tr>
            <th style="">Minutes of Meeting</th>
            <th>Date of Upload</th>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/01 fc minutes.pdf">Constitution of FC</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/02 fc minutes.pdf">2nd Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/03 fc minutes.pdf">3rd Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/04 fc minutes.pdf">4th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/05 fc minutes.pdf">5th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/6th Finance Commitee minutes.pdf">6th Meeting</a></td>
            <td>06-04-2019</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/7th fc minutes.pdf">7th Meeting</a></td>
            <td>06-06-2019</td>
          </tr>
        </table>

        <div class="title">
        Academic Council
        </div>
        The Academic Council is the Principal Academic body of the University and shall, subject to the provisions of the University Act, the Statutes and the Ordinances, have the control and regulations of, and be responsible for, the maintenance of standards of instructions, education, research and examination within the University. The Academic Council of the University has been reconstituted vide Order No. F.16(27)/Plg/IGDTUW/2016/3203-30 dated the 8th September 2016, it has following composition:-
        <table>
        <tr>
        <td style="width:5px;">1.</td>
        <td>Vice Chancellor, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Chairperson</td>
        </tr>
        <tr>
        <td style="width:5px;">2.</td>
        <td>Pro Vice Chancellor, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">3.</td>
        <td>Four persons who are not employee of University to be co-opted by Academic Council on recommendations of Vice Chancellor from amongst educationalists, scientists or engineers of repute.</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">4.</td>
        <td>A nominee of University Grants Commission</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">5.</td>
        <td>A nominee of All India Council for Technical Education</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">6.</td>
        <td>A nominee of Industry Association namely NASCOM, ASSOCHAM, FICCI, etc.</td>
        <td style="width:8px;">Member</td>
        </tr>
        <tr>
        <td style="width:5px;">7.</td>
        <td>All Deans of University (ex-Officio)</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">8.</td>
        <td>All HODs of University (ex-Officio)</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">9.</td>
        <td>One Professor, one Associate Professor, one Assistant Professor to be nominated by Vice Chancellor on rotation basis</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">10.</td>
        <td>Any such members as prescribed by Statues</td>
        <td style="width:8px;">Members</td>
        </tr>
        <tr>
        <td style="width:5px;">11.</td>
        <td>Registrar, IGDTUW (Ex-Officio)</td>
        <td style="width:8px;">Member Secretary</td>
        </tr>
        </table>
        <b>MINUTES OF MEETINGS OF ACADEMIC COUNCIL:-</b>
        <table>
          <tr>
            <th style="">Minutes of Meeting</th>
            <th>Date of Upload</th>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/01 ac minutes.pdf">1st Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/02 ac minutes.pdf">2nd Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/03 AC minutes.pdf">3rd Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/04 ac minutes.pdf">4th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/05 ac minutes.pdf">5th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/06-ac-minutes.pdf">6th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/07-ac-minutes.pdf">7th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/08-ac-minutes.pdf">8th Meeting</a></td>
            <td>01-06-2018</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/9th acedemic council minutes.pdf">9th Meeting</a></td>
            <td>06-04-2019</td>
          </tr>
          <tr>
            <td style=""><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/10 acedemic counil minutes.pdf">10th Meeting</a></td>
            <td>06-06-2019</td>
          </tr>
        </table>
        </div>
        </div>';
      }
   elseif($id==6){
   echo '
  <div class="middleBox">
    <div class="title">
    UNIVERSITY ADMINISTRATION
    </div>

    <div class="headingPara">
    <table>
        <tr>
            <th style="">NAME </th>
            <th style="">DESIGNATION</th>
            <th style="">EMAIL</th>
            <th style="">PHONE</th>
        </tr>
        <tr>
            <td style="">Sh. Anil Baijal, Lt. Governor of Delhi</td>
            <td style="">Chancellor</td>
            <td style=""></td>
            <td style=""></td>
        </tr>
        <tr>
            <td style="">Dr. (Mrs.) Amita Dev</td>
            <td style="">Vice Chancellor</td>
            <td style="">vc@igdtuw.ac.in, provc@igdtuw.ac.in</td>
            <td style="">011-23900220, 011-23869525</td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center"><b>DEANS AND DEPUTY DEANS OF UNIVERSITY</b></td>
        </tr>
        <tr>
            <td style="">Prof. Ashwni Kumar</td>
            <td style="">Dean (International Relations)</td>
            <td style="">drashwnikumar@gmail.com</td>
            <td style="">011-23900300</td>
        </tr>
        <tr>
            <td style="">Prof. Devendra K. Tayal</td>
            <td style="">Dean (Academic Affairs)</td>
            <td style="">deanacademics@igdtuw.ac.in</td>
            <td style="">011-23900204</td>
        </tr>
        <tr>
            <td style="">Prof. S. R. N. Reddy</td>
            <td style="">Dean (Examinations)</td>
            <td style="">deanexam@igdtuw.ac.in</td>
            <td style="">011-23900260</td>
        </tr>
        <tr>
            <td style="">Prof. Ela Kumar</td>
            <td style="">Dean (Student Welfare) & Chief Proctor</td>
            <td style="">deansw@igdtuw.ac.in</td>
            <td style="">011-23900204</td>
        </tr>
        <tr>
            <td style="">Prof. R. K. Singh</td>
            <td style="">Dean (Planning & Development)</td>
            <td style="">rksingh@igdtuw.ac.in</td>
            <td style="">011-23900221</td>
        </tr>
        <tr>
            <td style="">Dr. Ranu Gadi</td>
            <td style="">Deputy Dean (Industrial Research & Development)</td>
            <td style="">ranugadi@igdtuw.ac.in</td>
            <td style="">011-23900234</td>
        </tr>
        <tr>
            <td style="">Dr. Chhaya Ravikant</td>
            <td style="">Deputy Dean (Research & Collaboration)</td>
            <td style="">researchwing@igdtuw.ac.in </td>
            <td style="">011-23900234</td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center"><b>HEAD OF DEPARTMENTS AND COORDINATORS</b></td>
        </tr>
        <tr>
            <td style="">Dr. Arun Sharma</td>
            <td style="">HOD (Information Technology)</td>
            <td style="">arunsharma@igdtuw.ac.in</td>
            <td style="">011-23900273</td>
        </tr>
        <tr>
            <td style="">Dr. Shalini Arora		</td>
            <td style="">HOD (Applied Science & Humanities)</td>
            <td style="">shaliniarora@igdtuw.ac.in</td>
            <td style=""></th>
        </tr>
        <tr>
            <td style="">Dr. Manoj Soni		</td>
            <td style="">HOD (Mechanical & Automation Engineering)</td>
            <td style="">manoj.soni2002@gmail.com</td>
            <td style=""></td>
        </tr>
        <tr>
            <td style="">Dr. Preeti Chauhan		</td>
            <td style="">HOD (Architecture & Planning)</td>
            <td style="">preetichauhan@igdtuw.ac.in</td>
            <td style=""></td>
        </tr>
        <tr>
            <td style="">Dr. Nidhi Goel		</td>
            <td style="">HOD (Electronics & Communication Engineering)</td>
            <td style="">nidhigoel@igdtuw.ac.in</td>
            <td style=""></td>
        </tr>
        <tr>
            <td style="">Dr. Dhanjay Yadav		</td>
            <td style="">Coordinator (Management)</td>
            <td style="">dhanyadav@gmail.com</td>
            <td style=""></td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center"><b>TRAINING AND PLACEMENT OFFICERS</b></td>
        </tr>
        <tr>
            <td style="">Dr. N. R. Chauhan	</td>
            <td style="">TPO (MAE)</td>
            <td style="">tpo@igdtuw.ac.in, nrchauhan@igdtuw.ac.in</td>
            <td style="">011-23900216</td>
        </tr>
        <tr>
            <td style="">Dr. Jasdeep Kaur Dhanoa	</td>
            <td style="">TPO (CSE,IT,ECE)</td>
            <td style="">tpo@igdtuw.ac.in, jasdeep@igdtuw.ac.in</td>
            <td style=""></td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center"><b>ADMINISTRATION</b></td>
        </tr>
        <tr>
            <td style="">Prof. R. K. Singh	</td>
            <td style="">Officiating Registrar</td>
            <td style="">registrar@igdtuw.ac.in</td>
            <td style="">011-23900221</td>
        </tr>
        <tr>
            <td style="">Dr. Preeti Chauhan</td>
            <td style="">Deputy Registrar</td>
            <td style="">drgadmin@igdtuw.ac.in</td>
            <td style=""></td>
        </tr>
        <tr>
            <td style="">Mr. Sunny	Deputy 	</td>
            <td style="">Finance Officer</td>
            <td style="">inchargefinance@igit.ac.in	</td>
            <td style=""></td>
        </tr>
        <tr>
            <td style="">Dr. Sanjib Kumar Sahu		</td>
            <td style="">Deputy Controller of Examinations</td>
            <td style="">sahusanjib1977@gmail.com	</td>
            <td style=""></td>
        </tr>
        <tr>
            <td style=""></td>
            <td style="">Incharge (General Administration)</td>
            <td style=""></td>
            <td style=""></td>
        </tr>
        <tr>
            <td style=""></td>
            <td style="">Incharge(Purchase)</td>
            <td style=""></td>
            <td style=""></td>
        </tr>
        <tr>
            <td style=""></td>
            <td style="">Incharge (Personnel Branch)</td>
            <td style=""></td>
            <td style=""></td>
        </tr>
        <tr>
            <td style="">Mr. Subha Rao	</td>
            <td style="">Assistant Finance Officer</td>
            <td style=""></td>
            <td style=""></td>
        </tr>
        <tr>
            <td style=""></td>
            <td style="">Assistant Accounts Officer</td>
            <td style=""></td>
            <td style=""></td>
        </tr>
        <tr>
            <td style=""></td>
            <td style=""></td>
            <td style=""></td>
            <td style=""></td>
        </tr>

    </table>
</div>
</div>';
}
else if($id==7){
  echo '<div class="middleBox">
            <div class="title">
                Brief Profile of Dr. (Mrs.) Amita Dev
            </div>
            <div class="headingPara">
                    <img src="images/Pro_vc.png" class="hodImage" alt="Dr(Mrs).Amita Dev" width="auto" height="200px">
                    Dr. Amita Dev is the First Pro-Vice Chancellor of Indira Gandhi Delhi Technical University for Women.
                     She has excellent track record of Administration quality Teaching, Innovation and Research.
                    She has passion for Teaching and Research. She has published 63 + research papers in International and National Journals and Conference Proceedings.
                    <br>
                    <br>
                    <br>
                    <b>AWARDS :</b>
                    <br>
                      In recognition to her valuable and worthy research contributions, she has been conferred with the following Awards:
                      <ul>
                      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Conferred with National Level AICTE Young Teacher Career Award with Research Grant for pursuing Advanced Research in the area of “Hindi Speech Recognition Using Connectionist Model.”</li>
                      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>National Level Best Engineering Teacher Award from ISTE for significant contribution in the field of Research and Technology.</li>
                      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Raja Ram Babu Patil National Level Award by Indian Society for Technical Education.</li>
                      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>National Level ECONS Education Excellence Award for significant contribution in Education Excellence.</li>
                      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>State Level Best Teacher Award awarded by Govt of NCT of Delhi.</li>
                      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Vittiya Saksharta Abhiyan Award on 08th March 2017 by the Hon’ble Minister for HRD, Govt. of India for spreading Digital Literacy.</li>
                      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Numerous Appreciation letters have been received from Senior Officials of Delhi Government for the Exemplary Performance, Dedication and Devotion towards the work/duty and for Outstanding Contribution in the field of Technical Education.</li>
                      </ul>
                    Under her regime, Ambedkar Institute of Technology has been conferred with Outstanding Institute Award Twice [2007-08 and 2016-17] by NITTTR, Chandigarh. Both the Institutes [AIT and BPIBS] have been conferred with International Accreditation by Asia Pacific Accreditation Commission for Certification [APAC] – The only Government Institutes in the Country. She has worked as Chief Admission Officer/Mentor for the past Twelve (12) years for Institutes of Technology, under Department of Training and Technical Education. As the B.Voc. Co-ordinator under Guru Gobind Singh Indra Prastha University , she has taken initiatives for the introduction of Bachelor of Vocational Studies [B.Voc] Programmes in all the Institutes of Technology under DTTE, Govt. of Delhi and received Appreciation Certificate from GGSIP University.</p>
                    She received Ph.D.(Computer Engineering) degrees from Delhi Technological University.<br><br>
                    <b>BOOKS PUBLISHED</b>
                    <br>
                    Dr. Amita Dev has also authored a book on “Programming in Java”.
                    <br>
                    <b>RESEARCH AREAS</b>
                    <br>Dr. Amita Dev has more than 33 years of experience in Industry, Teaching, Research and Administration. Her teaching and research areas include Artificial Neural Networks, Speech Processing, Opportunistic Networks, Speech Recognition Systems, MANETS, Advanced Computer Networks, Data Mining etc.
                      <br><br>She is the member of the Editorial Boards of several International and National journals. She is reviewer of research papers of International Journals, Conferences and also Examiner to Ph.D and M.Tech. thesis of different universities.

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
          
          <?php include 'footer.php'?>
      </body>
      </html>
