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
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/AboutUs.css">
</head>

<body onload="main()">
     <script>
        function main()
        {

            var r=<?php echo $_GET['id'];?>;
            $('#'+r).addClass('high');
            if(r==7){
              $('#3').addClass('high');
            }
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
              <div class="box-1">
                  <div class="title">
                  INSTITUTE \'S HISTORY
                  </div>
                  <div class="VCimg">
                    <img src="images/igdtuw.jpg" alt="Indraprastha College for Women" width="auto" height="200px">
                  </div>

                  <div class="headingPara">
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
            echo '
            <div class="box-1">
                        <div class="title">
                            VISION
                        </div>
                        <div class="headingPara">
                            <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To make India a Knowledge Society and Knowledge Economy by empowering the women of our country through education in Engineering, Science, Management and Technology.<br><br>
                            <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>To become one of the top technical Universities in the country known for its value based, quality technical education supported with industry relevant research, with focus on environmental and social issues.
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="box-1">
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
                  </div>
                      <div class="box-1">
                        <div class="title">
                                  OBJECTIVE
                        </div>
                      <div class="headingPara">
                        <p>As per IGDTUW Act 2012 vide clause 6 the objectives of the University shall be:-</p>
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
                    </div>
                    </div>';
             }

        elseif($id==3) {
        echo '
        <div class="box-1">
            <div class="title">
            VICE CHANCELLOR
            </div>
            <div class="VCimg">
              <img src="images/Pro_vc.png" alt="Dr(Mrs). Amita Dev" width="160" height="159">

            <h3><b>“You Educate a Man; You Educate a Man. <br>
              You Educate a Woman; You Educate a Generation.”</b></h3>
          </div>

          <div class="headingPara">
            It feels great to be the wind beneath the wings of one of the top ranking Emerging Engineering Institutes of Technology in India. The devouring stride of IGDTUW, since its inception in 1998 as IGIT, has been exemplary, culminating in transforming itself into an icon for women empowerment. To be a vibrant part of this illustrious edifice of teaching and learning is certainly a matter of stupendous pride and a new-found privilege for me. <br>
            IGDTUW has evolved to become a national flagship, research-led university with a mission to foster an environment for excellence in professional education and ensure active participation of women in the field of Engineering, Science, Management and Technology, thereby attempting to strike out a fine balance between world of work and life. The university vows to devise sustainable systems and state-of-the-art infrastructure to enable the Indian women to dawn the role of future leaders, managers, researchers and productive team players in the field of science, technology.<br>
            The University offers a number of B.Tech, B.Arch, M.Tech and Ph.D programmes in faculty of Engineering and Technology. It also aims at teaching, training and elevating the students to an independent level where they can achieve higher level of excellence and professionalism.<br>
            The University is equipped with the state of the art Learning Resource Centre to support the learning and research activities of students and faculty. The renovated infrastructure, the qualified and experienced faculty members, latest equipments, instruments, Hi-end computers, teaching aids, multimedia, wi-fi connectivity required for modern day teaching create an edge over other universities. The hostel, the common room equipped with fitness equipments, yoga facility and indoor games, a guest house, the dispensary and banking facility conjure up a spell of being the most ideal campus.<br>
            Our university has always been a placement/ job utopia for our students. There has been an unprecedented boom in the visiting list of companies. Many of our students have been placed in renowned National and Multinational companies. We hope to retain and revitalize the placement hub.<br>
            With that note, I extend my best wishes to the students of the University and I envisage a very promising and successful professional career for you. My flights of fancy would revel to foresee you in the guise of Savitri Jyotirao Phule, Pratibha patil, Kalpana Chawala ,Vineet Jain, Priya Paul, Suchi Mukherjee, Anisha Singh and a lot other women luminaries who have left their indelible footprints in the history of our nation.
          <br><br><br> <p class="sig">Dr(Mrs).Amita Dev <br>
                      Vice Chancellor, IGDTUW </p>
          <strong>
          <a class="sig1" href="AboutUs.php?id=7">Brief Profile of Dr(Mrs). Amita Dev</a> </strong>
      </div>
    </div>
  </div>';}
    elseif($id==4) {
      echo '
      <div class="box-1">
          <div class="title">
          REGISTRAR
          </div>
          <div class="VCimg">
            <img src="images/rksingh.jpg" alt="Prof. R.K. Singh" width="160" height="159">
          </div>

          <div class="headingPara">
            <h3 class="quote"><b>”Education is not the learning of facts, but the training of the mind to think.”</b></h3>
              <br> <h4 class="name"><b>-- Albert Einstein</b></h4>
                <p> It is my proud privilege and honor to be a part of Indira Gandhi Delhi Technical University for Women, Delhi (IGDTUW), which has made its present felt not only in the academic fraternity but also in industry. In short span of time, the University has received a number of sponsored research projects from the leading Industry/organizations like Microsoft, ITR, Nokia, Department of Science & Technology, Ministry of Electronics & IT, Govt of India and latest being the CURIE Grant amounting Rs. 3.63 crores from Ministry of Science & Technology. This has developed an environment of Research & Development in the University in true sense.
                <br><br>
                The infrastructure of the University has been renovated providing the conducive environment for teachers and students to carry out their studies and research work. IT infrastructure of the University has been recently upgraded providing seamless wireless internet connectivity to students in secure environment.
                <br><br>
                The real achievement is not about how you start your journey with IGDTUW but it’s about how you finish your journey by sustaining to your goals, learning and unlearning various facts in the journey and practicing the profession with highest ethical standards.
                <br><br>
                I, with my committed and dedicated administrative officers/staff assure to provide all possible administrative support to all the young and budding engineering and architect students  of the university.
                <br><br>
                I wish all students of IGDTUW the very best in all their future endeavors and welcome you all to the first women technical university of India i.e. IGDTUW.</p>
            <br><br><br> <p class="sig">Prof. R.K. Singh <br>
                                 Registrar, IGDTUW
                        </p>
        </div>
      </div>
    </div>';
  }
   elseif($id==6){
   echo '
  <div class="box-1">
    <div class="title">
    UNIVERSITY ADMINISTRATION
    </div>

    <div class="headingPara">
    <table>
        <tr class="table1">
            <th style="width:20%">NAME </th>
            <th style="width:30%">DESIGNATION</th>
            <th style="width:30%">EMAIL</th>
            <th style="width:20%">PHONE</th>
        </tr>
        <tr>
            <th style="width:20%">Sh. Anil Baijal, Lt. Governor of Delhi</th>
            <th style="width:30%">Chancellor</th>
            <th style="width:30%"></th>
            <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%">Dr. (Mrs.) Amita Dev</th>
        <th style="width:30%">Vice Chancellor</th>
        <th style="width:30%">vc@igdtuw.ac.in, provc@igdtuw.ac.in</th>
        <th style="width:20%">011-23900220, 011-23869525</th>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center" class="table2">DEANS AND DEPUTY DEANS OF UNIVERSITY</td>
        </tr>
        <tr>
        <th style="width:20%">Prof. Ashwni Kumar</th>
        <th style="width:30%">Dean (International Relations)</th>
        <th style="width:30%">drashwnikumar@gmail.com</th>
        <th style="width:20%">011-23900300</th>
        </tr>
        <tr>
        <th style="width:20%">Prof. Devendra K. Tayal</th>
        <th style="width:30%">Dean (Academic Affairs)</th>
        <th style="width:30%">deanacademics@igdtuw.ac.in</th>
        <th style="width:20%">011-23900204</th>
        </tr>
        <tr>
        <th style="width:20%">Prof. S. R. N. Reddy</th>
        <th style="width:30%">Dean (Examinations)</th>
        <th style="width:30%">deanexam@igdtuw.ac.in</th>
        <th style="width:20%">011-23900260</th>
        </tr>
        <tr>
        <th style="width:20%">Prof. Ela Kumar</th>
        <th style="width:30%">Dean (Student Welfare) & Chief Proctor</th>
        <th style="width:30%">deansw@igdtuw.ac.in</th>
        <th style="width:20%">011-23900204</th>
        </tr>
        <tr>
        <th style="width:20%">Prof. R. K. Singh</th>
        <th style="width:30%">Dean (Planning & Development)</th>
        <th style="width:30%">rksingh@igdtuw.ac.in</th>
        <th style="width:20%">011-23900221</th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Ranu Gadi</th>
        <th style="width:30%">Deputy Dean (Industrial Research & Development)</th>
        <th style="width:30%">ranugadi@igdtuw.ac.in</th>
        <th style="width:20%">011-23900234</th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Chhaya Ravikant</th>
        <th style="width:30%">Deputy Dean (Research & Collaboration)</th>
        <th style="width:30%">researchwing@igdtuw.ac.in </th>
        <th style="width:20%">011-23900234</th>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center" class="table2">HEAD OF DEPARTMENTS AND COORDINATORS</td>
        </tr>
        <tr>
        <th style="width:20%">Dr. Arun Sharma</th>
        <th style="width:30%">HOD (Information Technology)</th>
        <th style="width:30%">arunsharma@igdtuw.ac.in</th>
        <th style="width:20%">011-23900273</th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Shalini Arora		</th>
        <th style="width:30%">HOD (Applied Science & Humanities)</th>
        <th style="width:30%">shaliniarora@igdtuw.ac.in</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Manoj Soni		</th>
        <th style="width:30%">HOD (Mechanical & Automation Engineering)</th>
        <th style="width:30%">manoj.soni2002@gmail.com</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Preeti Chauhan		</th>
        <th style="width:30%">HOD (Architecture & Planning)</th>
        <th style="width:30%">preetichauhan@igdtuw.ac.in</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Nidhi Goel		</th>
        <th style="width:30%">HOD (Electronics & Communication Engineering)</th>
        <th style="width:30%">nidhigoel@igdtuw.ac.in</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Dhanjay Yadav		</th>
        <th style="width:30%">Coordinator (Management)</th>
        <th style="width:30%">dhanyadav@gmail.com</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center" class="table2">TRAINING AND PLACEMENT OFFICERS</td>
        </tr>
        <tr>
        <th style="width:20%">Dr. N. R. Chauhan	</th>
        <th style="width:30%">TPO (MAE)</th>
        <th style="width:30%">tpo@igdtuw.ac.in, nrchauhan@igdtuw.ac.in</th>
        <th style="width:20%">011-23900216</th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Jasdeep Kaur Dhanoa	</th>
        <th style="width:30%">TPO (CSE,IT,ECE)</th>
        <th style="width:30%">tpo@igdtuw.ac.in, jasdeep@igdtuw.ac.in</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center" class="table2">ADMINISTRATION</td>
        </tr>
        <tr>
        <th style="width:20%">Prof. R. K. Singh	</th>
        <th style="width:30%">Officiating Registrar</th>
        <th style="width:30%">registrar@igdtuw.ac.in</th>
        <th style="width:20%">011-23900221</th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Preeti Chauhan</th>
        <th style="width:30%">Deputy Registrar</th>
        <th style="width:30%">drgadmin@igdtuw.ac.in</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%">Mr. Sunny	Deputy 	</th>
        <th style="width:30%">Finance Officer</th>
        <th style="width:30%">inchargefinance@igit.ac.in	</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%">Dr. Sanjib Kumar Sahu		</th>
        <th style="width:30%">Deputy Controller of Examinations</th>
        <th style="width:30%">sahusanjib1977@gmail.com	</th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%"></th>
        <th style="width:30%">Incharge (General Administration)</th>
        <th style="width:30%"></th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%"></th>
        <th style="width:30%">Incharge(Purchase)</th>
        <th style="width:30%"></th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%"></th>
        <th style="width:30%">Incharge (Personnel Branch)</th>
        <th style="width:30%"></th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%">Mr. Subha Rao	</th>
        <th style="width:30%">Assistant Finance Officer</th>
        <th style="width:30%"></th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%"></th>
        <th style="width:30%">Assistant Accounts Officer</th>
        <th style="width:30%"></th>
        <th style="width:20%"></th>
        </tr>
        <tr>
        <th style="width:20%"></th>
        <th style="width:30%"></th>
        <th style="width:30%"></th>
        <th style="width:20%"></th>
        </tr>

    </table>
</div>
</div>';
}
else if($id==7){
  echo '<div class="box-1">
  <div class="title">
      Brief Profile of Dr. (Mrs.) Amita Dev
  </div>
  <div class="VCimg">
    <img src="images/Pro_vc.png" alt="Dr(Mrs).Amita Dev" width="160" height="159">
  </div>

  <div class="headingPara">
    Dr. Amita Dev is the First Pro-Vice Chancellor of Indira Gandhi Delhi Technical University for Women. She has excellent track record of Administration quality Teaching, Innovation and Research.

    She has passion for Teaching and Research. She has published 63 + research papers in International and National Journals and Conference Proceedings.<br><br>
    <h4 style="text-align:center"><b><u>AWARDS</u></b></h4>
      <p>In recognition to her valuable and worthy research contributions, she has been conferred with the following Awards:</p>
      <ul><li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Conferred with National Level AICTE Young Teacher Career Award with Research Grant for pursuing Advanced Research in the area of “Hindi Speech Recognition Using Connectionist Model.”</li>
      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>National Level Best Engineering Teacher Award from ISTE for significant contribution in the field of Research and Technology.</li>
      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Raja Ram Babu Patil National Level Award by Indian Society for Technical Education.</li>
      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>National Level ECONS Education Excellence Award for significant contribution in Education Excellence.</li>
      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>State Level Best Teacher Award awarded by Govt of NCT of Delhi.</li>
      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Vittiya Saksharta Abhiyan Award on 08th March 2017 by the Hon’ble Minister for HRD, Govt. of India for spreading Digital Literacy.</li>
      <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Numerous Appreciation letters have been received from Senior Officials of Delhi Government for the Exemplary Performance, Dedication and Devotion towards the work/duty and for Outstanding Contribution in the field of Technical Education.</li>
    </ul>
    <p>Under her regime, Ambedkar Institute of Technology has been conferred with Outstanding Institute Award Twice [2007-08 and 2016-17] by NITTTR, Chandigarh. Both the Institutes [AIT and BPIBS] have been conferred with International Accreditation by Asia Pacific Accreditation Commission for Certification [APAC] – The only Government Institutes in the Country. She has worked as Chief Admission Officer/Mentor for the past Twelve (12) years for Institutes of Technology, under Department of Training and Technical Education. As the B.Voc. Co-ordinator under Guru Gobind Singh Indra Prastha University , she has taken initiatives for the introduction of Bachelor of Vocational Studies [B.Voc] Programmes in all the Institutes of Technology under DTTE, Govt. of Delhi and received Appreciation Certificate from GGSIP University.</p>
    She received Ph.D.(Computer Engineering) degrees from Delhi Technological University.<br><br>
    <h4 style="text-align:center"><b><u>BOOKS PUBLISHED</u></b></h4>
    <p>Dr. Amita Dev has also authored a book on “Programming in Java”.</p><br>
    <h4 style="text-align:center"><b><u>RESEARCH AREAS</u></b></h4>
    <p>Dr. Amita Dev has more than 33 years of experience in Industry, Teaching, Research and Administration. Her teaching and research areas include Artificial Neural Networks, Speech Processing, Opportunistic Networks, Speech Recognition Systems, MANETS, Advanced Computer Networks, Data Mining etc.
      <br><br>She is the member of the Editorial Boards of several International and National journals. She is reviewer of research papers of International Journals, Conferences and also Examiner to Ph.D and M.Tech. thesis of different universities.</p>
  <br>
</div>
</div>';
}
?>
             </div>
           </div>
         </div>
          <!-- footer -->
          <?php include 'footer.php'?>
      </body>
      </html>
