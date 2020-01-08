<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar's Message</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


<!-- main department stylesheet -->
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/departments.css">
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/VC_Message.css">
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
      <?php include 'header.php';?>

    <!-- Main body -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        ABOUT IGDTUW
                    </div>
                    <ul class="sidenav">
                        <li><a href="Vision.php">Vision/Mission</a></li>
                        <li><a href="VC_Message.php">VC's Message</a></li>
                        <li><a href="FounderVC_Message.php">Founder VC's Message</a></li>
                        <li><a href="Registrar_Message.php">Registrar's Message</a></li>
                        <li><a href="Registrar_Message.php?id=1">Message-Dean(Examination Affairs)</a></li>
                        <li><a href="Registrar_Message.php?id=2">Message-Dean(Academic Affairs)</a></li>
                        <li><a href="Registrar_Message.php?id=3">Message-Dy. Dean(Industrial Research and Development)</a></li>
                        <li><a href="Registrar_Message.php?id=4">Message-Dy. Dean(Students' Welfare)</a></li>
                        <li><a href="Registrar_Message.php?id=5">Message-Dy. Dean(Research and Consultancy)</a></li>
                        <li><a href="Registrar_Message.php?id=6">Chronicles</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
              <?php
              if($id==1){
              echo '
              <div class="box-1">
                  <div class="title">
                  MESSAGE BY DEAN (EXAMINATION AFFAIRS)
                  </div>
                  <div class="VCimg">
                    <img src="images/Exam Affairs.jfif" alt="Prof. S.R.N Reddy" width="160" height="159">
                  </div>

                  <div class="headingPara">
                  Examination division has a huge responsibility on ensuring the objectives of the teaching and learning process of various programmes of the University and provide the services to different stake holders such as students, faculty, Head of the departments, Academic branch etc. of the system. The section provides the feedback and scope to improve. Activities of examination is immense accountability and requires efficiency and transparency to be maintained in a time bound manner.
                  <br><br>
                  At Indira Gandhi Delhi Technical University for Women, the Examination Division is committed to conduct essential dutiesof various examinations like Internal Mid Semester Examinations, End Semester Examinations, Entrance Examinations for Ph.d and MCA, Practical Examinations and Recruitment tests of Teaching and Non Teaching Staff.
                  <br><br>
                  In such a short span of time the University has not only organized different examinations of varying scales, but has also developed inhouse online examination portal which ensure efficiency and effectiveness in the examination system and renders convenience to all the stakeholders and this division is under the process of improvement of the same and providing the cloud based mobile applications towards the results, dates sheet etc.
                  <br><br>
                  The Examination division of IGDTUW is working for continuous development and endeavours towards the complete automation of the system by creating centralize examination committee (CEC) to provide transparency for the benefit of the students and different stake holders of the system.
                  <br><br><br> <p class="sig">Prof. S.R.N Reddy <br>
                              Dean(Examination Affairs) </p>
              </div>
            </div>';
          }

          elseif($id==2) {
            echo '
            <div class="box-1">
                <div class="title">
                MESSAGE BY DEAN (ACADEMIC AFFAIRS)
                </div>
                <div class="VCimg">
                  <img src="images/DKTAYAL.jfif" alt="Prof. Devendra Tayal" width="160" height="159">
                </div>

                <div class="headingPara">
                I feel honored and privileged to welcome you , as Dean Academic Affair in IGDTUW. At present our University is successfully running under graduate, post graduate and research programs in all emerging areas of Engineering, Technology and Architecture. IGDTUW provides a strong base for learning where young talents are nurtured in different fields of Engineering, Architecture and Research. The major focus here is on imparting technical training to encourage curiosity and innovativeness among the students and the foundation from where they can acquire quick learning ability and adaptive learning with the fast changing needs of the industry. IGDTUW aims to mould the youth into world-class technocrats and engineers of tomorrow who would endeavor to increase the quality of life for human kind. The goal of our faculty members is to position the engineering graduates to be problem solvers, world leaders and ethical citizens. In consistency with the past practice, I am confident that our new students would also be an asset to the organization they join, through their technical and managerial capabilities.
                <br><br>
                Last but not the least; I would like mention this quote for all our students:
                  <h4 class="quote">”Bloom where you are planted”.</h4> <br> <br>
                Wishing the best for your future.
                <br><br><br> <p class="sig">Prof. Devendra Tayal <br>
                Dean (Academic Affairs) & <br>Chairman (Academic Quality Assurance Committee) </p>
            </div>
          </div> ';
        }

        elseif($id==3) {
        echo '
        <div class="box-1">
            <div class="title">
            MESSAGE BY DY. DEAN (INDUSTRIAL RESEARCH AND DEVELOPMENT)
            </div>
            <div class="VCimg">
              <img src="images/DrRanu.png" alt="Dr. Ranu Gadi" width="160" height="159">
            </div>

            <div class="headingPara">
            “Anyone who is satisfied with what has been achieved yesterday has not done anything today”.We must constantly push ourselves to set new goals and achieve greater heights. In fact, every goal we achieve should lead us to a new challenge. With this spirit and our constant endeavour to impart value based quality education, it is our pleasure to have you at IGDTUW. The aim of the Institute is not only to produce good women engineers who excel academically, but also help in widening the perspectives and awakening intellectual curiosity within them.
            <br><br>
            “To accomplish great things, we must not only act, but also dream; not only plan, but also believe”.The faculty members and students of IGDTUW have a passionate commitment to maintain high standards of excellence in research and academics, which is reflected by the large number of publications in international journals and conferences. The faculty members have also actively pursued research in their respective fields of interest by undertaking R&D projects funded by DST, MHRD, Nokia, Intel, Microsoft, MEITY, MCIT etc.
            <br><br>
            Research is a process of discovery and continuous learning. It is an intensive activity, but extremely fulfilling. The Office of Deputy Dean,Industrial Research and Development supports the research efforts of all Faculty Members, provides mentoring for our new Faculty, facilitates and fosters industrial collaboration and identifies and disseminates research opportunities and collaborations. IGDTUW provides and promises an excellent environment for Researchers.
            <br><br>
            <p class="best">Best wishes</p>
            <p class="sig">Dr. Ranu Gadi <br>
            Dy. Dean (Industrial Research & Development) </p>
        </div>
      </div> ';
    }
    elseif($id==4) {
      echo '
      <div class="box-1">
          <div class="title">
          MESSAGE BY DY. DEAN (STUDENTS\' WELFARE)
          </div>
          <div class="VCimg">
            <img src="images/dydeansw.png" alt="Dr. Seeja K. R." width="160" height="159">
          </div>

          <div class="headingPara">
          Welcome to the peaceful and energetic campus of Indira Gandhi Delhi Technical University for Women. Being the first Technical University in India dedicated to Women Education, we care for our students and students’ welfare is of utmost importance to us. IGDTUW is an excellent platform for the women talents of India to build their future.
          <br> <br>
          Education an enlightening experience and prepare students for life, work and citizenship. It should also impart sympathy and compassion for fellow beings and care for environment and harmony. IGDTUW is committed to provide value based education to our students to make them responsible citizens of India.
          <br> <br>
          By joining IGDTUW, you will get a lot of opportunities to develop your skills and talents in and out of the class rooms. Students who are interested in arts, sports, cultural and social activities have a wealth of options to choose from. A group of technical and nontechnical societies and clubs are functioning in IGDTUW campus for students’ overall development and to enhance the campus life. Students are encouraged to participate in the activities of these societies and get connected with your fellow students, the faculty and the staff.
          <br><br>
          Industry relevant curriculum along with state-of-the art Laboratories and highly qualified and experienced faculty help you to achieve excellence in academics. Our Training and Placement cell provide you the best opportunities for training, internships and placements in reputed multinational companies in and outside India. The incubation centre and entrepreneurship development cell provide all support to the students to start new businesses. I invite you to take the advantage of all the facilities available to you in the campus. I extend my full support to all your developmental activities and feel free to contact me.
          <br> <br>
          Best wishes for a successful academic year.
          <br><br><br> <p class="sig">Dr. Seeja K. R. <br>
          Dy. Dean (Students\' Welfare)</p>
      </div>
    </div> ';
  }
  elseif($id==5){
  echo '
  <div class="box-1">
      <div class="title">
      MESSAGE BY DY. DEAN (RESEARCH & CONSULTANCY)
      </div>
      <div class="VCimg">
        <img src="images/Dr. Chaya.png" alt="Dr. Chhaya Ravi Kant" width="160" height="159">
      </div>

      <div class="headingPara">
      It gives me immense pleasure to welcome you all to Indira Gandhi Delhi Technical University for Women which has a mission to promote high quality scientific research in the frontier areas of engineering, science and humanities. Research is of utmost importance for both the economic and social development of a nation. The cognitive and pragmatic approach of the female gender blended with sensitivity to the needs of our society helps in building the knowledge economy of our country.
      <br> <br>
      The PhD program at IGDTUW is designed to encourage cutting edge research enabling the candidates to grow in their professional and academic career.The research excellence at IGDTUW aims to incubate new ideas, encourage innovation and research work integrating evolving technologies to develop novel applications and processes.
      <br> <br>
      IGDTUW offers admission to female candidates in the Ph.D program commencing in August every year. Presently Ph.D Program is run in Computer Science Engineering , Information Technology, Electronics and Communication Engineering, Mechanical and Automation Engineering, and and disciplines of Mathematics, Physics, Chemistry and English in Applied Sciences Department. The research is carried out in various interdisciplinary fields like Nanotechnology and Environmental Sciences. About 70 students are presently registered in the PhD Program across various disciplines. The excellence in research is demonstrated by the quality of the published articles and conference presentations by the students under the mentorship of highly qualified university approved supervisors, This naturally has led to fast achievement of targets in a short span of four years since the commencement of the PhD program wherein few candidates have already reached the milestone of thesis submission.
      <br> <br>
      The Office of Research Wing tries to facilitate and foster research opportunities and collaborations for the students and faculty at IGDTUW and look forward for your research contribution to the growth of our university .
      <br><br><br> <p class="sig">Dr. Chhaya Ravi Kant <br>
                  Dy. Dean(Research & Consultancy) </p>
  </div>
</div>';
}
elseif($id==6){
echo '
<div class="box-1">
    <div class="title">
    CHRONICLES
    </div>

    <div class="headingPara">
    <table>
        <tr>
            <th>NAME </th>
            <th colspan="2">ACTIVITY</th>
        </tr>
        <tr>
            <td><b>1998</td>
            <td colspan="2">The Indira Gandhi Institute of Technology (IGIT) was established by Directorate of Training and Technical Education, Govt of N.C.T of Delhi as the first engineering college for women</td>
        </tr>
        <tr>
            <td><b>1998</td>
            <td colspan="2">B.Tech degree in CSE is introduced</td>
        </tr>
        <tr>
            <td><b>1998</td>
            <td colspan="2">B.Tech degree in ECE is introduced</td>
        </tr>
        <tr>
            <td><b>1998</td>
            <td colspan="2">B.Tech degree in MAE is introduced</td>
        </tr>
        <tr>
            <td><b>2002</td>
            <td colspan="2">The college became the first constituent college of Guru Gobind Singh Indraprastha University</td>
        </tr>
        <tr>
            <td><b>2002-2007</td>
            <td colspan="2">Continued to receive Grant-in-aid from Govt. of Delhi</td>
        </tr>
        <tr>
            <td><b>2005</td>
            <td colspan="2">Ph.D (Engg&Tech),Through, USET, GGSIPU is introduced</td>
        </tr>
        <tr>
            <td><b>2007</td>
            <td colspan="2">M.Tech (ECE) part-time is introduced</td>
        </tr>
        <tr>
            <td><b>2010</td>
            <td colspan="2">B.Tech degree in IT is introduced</td>
        </tr>
        <tr>
            <td><b>2011</td>
            <td colspan="2">MCA is introduced</td>
        </tr>
        <tr>
            <td><b>2013</td>
            <td colspan="2">IGIT granted autonomous status as Indira Gandhi Delhi Technical University for Women(IGDTUW).
            <br>M.Tech(ISM), M.Tech(MPC), M.Tech (R&A) and M.Tech(VLSID) launched.</td>
        </tr>
        <tr>
            <td><b>2014</td>
            <td colspan="2"> Ph.D Program in Engineering, Science and Technology is launched.</td>
        </tr>
        <tr>
            <td><b>2015</td>
            <td colspan="2">B.Arch program is launched (approval of Council of Architecture granted)</td>
        </tr>
        <tr>
            <td><b>2016</td>
            <td colspan="2">M.Tech ICT Weekend  introduced</td>
        </tr>
    </table>
</div>
</div>';
}

    else{          echo' <div class="box-1">
                    <div class="title">
                        MESSAGE FROM REGISTRAR
                    </div>
                    <div class="VCimg">
                      <img src="images/rksingh.jpg" alt="Prof. R.K. Singh" width="160" height="159">
                    </div>

                    <div class="headingPara">
                      <h3 class="quote">”Education is not the learning of facts, but the training of the mind to think.”</h3>
                        <br> <h4 class="name">-- Albert Einstein</h4>
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
            } ?>
            </div>
          </div>
        <?php include 'footer.php';?>
      </body>
    </html>
