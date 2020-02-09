<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Research</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


<!-- main stylesheet -->
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/AboutUs.css">
</head>

<body onload="main()">
     <script>
        function main()
        {

            var r=<?php echo $_GET['id'];?>;
            $('#'+r).addClass('high');
            // if(r==7){
            //   $('#3').addClass('high');
            // }
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
                        RESEARCH
                    </div>
                    <ul class="sidenav">
                      <li><a href="Research.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Dean(IRD & R&C)</a></li>
                      <li><a href="Research.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Ph.D Guidelines</a></li>
                      <li><a href="Research.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Research Areas</a></li>
                      <li><a href="Research.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Research Scholars</a></li>
                      <li><a href="Research.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>University Approved Supervisors</a></li>
                      <li><a href="Research.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Forms and Applications</a></li>
                      <li><a href="Research.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Ongoing Research Projects</a></li>
                      <li><a href="Research.php?id=8" id="8">&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Forms</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
              <?php
              if($id==1){
              echo '
              <div class="middleBox">
                  <div class="title">
                MESSAGE BY DY. DEAN (INDUSTRIAL RESEARCH AND DEVELOPMENT)
                  </div>
                <div class="headingPara">
                  <img src="images/DrRanu.png" class="hodImage" alt="Dr. Ranu Gadi" width="auto" height="200px">
                  “Anyone who is satisfied with what has been achieved yesterday has not done anything today”.We must constantly push ourselves to set new goals and achieve greater heights. In fact, every goal we achieve should lead us to a new challenge. With this spirit and our constant endeavour to impart value based quality education, it is our pleasure to have you at IGDTUW. The aim of the Institute is not only to produce good women engineers who excel academically, but also help in widening the perspectives and awakening intellectual curiosity within them.
                  <br><br>
                  “To accomplish great things, we must not only act, but also dream; not only plan, but also believe”.The faculty members and students of IGDTUW have a passionate commitment to maintain high standards of excellence in research and academics, which is reflected by the large number of publications in international journals and conferences. The faculty members have also actively pursued research in their respective fields of interest by undertaking R&D projects funded by DST, MHRD, Nokia, Intel, Microsoft, MEITY, MCIT etc.
                  <br><br>
                  Research is a process of discovery and continuous learning. It is an intensive activity, but extremely fulfilling. The Office of Deputy Dean,Industrial Research and Development supports the research efforts of all Faculty Members, provides mentoring for our new Faculty, facilitates and fosters industrial collaboration and identifies and disseminates research opportunities and collaborations. IGDTUW provides and promises an excellent environment for Researchers.
                  <br><br>
                  Best wishes
                  <br><br><b>Dr. Ranu Gadi <br>
                  Dy. Dean (Industrial Research & Development) </b>
                </div>
                </div>
          <div class="middleBox">
              <div class="title">
            MESSAGE BY DY. DEAN (RESEARCH & CONSULTANCY)
              </div>
            <div class="headingPara">
              <img src="images/Dr. Chaya.png" class="hodImage" alt="Dr. Chhaya Ravi Kant" width="auto" height="200px">
              It gives me immense pleasure to welcome you all to Indira Gandhi Delhi Technical University for Women which has a mission to promote high quality scientific research in the frontier areas of engineering, science and humanities. Research is of utmost importance for both the economic and social development of a nation. The cognitive and pragmatic approach of the female gender blended with sensitivity to the needs of our society helps in building the knowledge economy of our country.
              <br> <br>
              The PhD program at IGDTUW is designed to encourage cutting edge research enabling the candidates to grow in their professional and academic career.The research excellence at IGDTUW aims to incubate new ideas, encourage innovation and research work integrating evolving technologies to develop novel applications and processes.
              <br> <br>
              IGDTUW offers admission to female candidates in the Ph.D program commencing in August every year. Presently Ph.D Program is run in Computer Science Engineering , Information Technology, Electronics and Communication Engineering, Mechanical and Automation Engineering, and and disciplines of Mathematics, Physics, Chemistry and English in Applied Sciences Department. The research is carried out in various interdisciplinary fields like Nanotechnology and Environmental Sciences. About 70 students are presently registered in the PhD Program across various disciplines. The excellence in research is demonstrated by the quality of the published articles and conference presentations by the students under the mentorship of highly qualified university approved supervisors, This naturally has led to fast achievement of targets in a short span of four years since the commencement of the PhD program wherein few candidates have already reached the milestone of thesis submission.
              <br> <br>
              The Office of Research Wing tries to facilitate and foster research opportunities and collaborations for the students and faculty at IGDTUW and look forward for your research contribution to the growth of our university.
              <br><br><b>Dr. Chhaya Ravi Kant <br>
              Dy. Dean(Research & Consultancy) </b>
            </div>
        </div>';
      }
      elseif($id==2) {
        echo '
        <div class="middleBox">
            <div class="title">
            PH.D GUIDELINES
            </div>
            <div class="headingPara">
            <table>
                <tr>
                    <th style="text-align:center;">Title</th>
                    <th style="text-align:center;">Download</th>
                    <th style="text-align:center;">Date of Upload</th>
                </tr>
                <tr>
                    <td>Guidelines for Pre Ph.D Seminar/Synopsis 2019</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/synopsis_1.pdf">pdf</a></td>
                    <td style="text-align:center;">06.04.2019</td>
                </tr>
                <tr>
                    <td>Minutes of IV Meeting of URB</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/attachment_9.pdf">pdf</a></td>
                    <td style="text-align:center;">03-04-2019</td>
                </tr>
                <tr>
                    <td>Revised PhD Regulations 2019</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/regulation2019_2.pdf">pdf</a></td>
                    <td style="text-align:center;">04-06-2019</td>
                </tr>
                <tr>
                    <td>Norms, rules & regulations for undertaking sponsored Research and Industrial Consultancy</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/norms_7.pdf">pdf</a>
                    <td style="text-align:center;">12-04-2018</td>
                </tr>
                <tr>
                    <td> Various forms for approval</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/forms_8.pdf">pdf</a></td>
                    <td style="text-align:center;">12-04-2018</td>
                </tr>
                <tr>
                    <td>Revised Research Fellowship Scheme (JRF/SRF 2019)</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/fellowship_3.pdf">pdf</a></td>
                    <td style="text-align:center;">04-06-2019</td>
                </tr>
                <tr>
                    <td>Guidelines for PhD Thesis Preparation</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/thesis_4.pdf">pdf</a></td>
                    <td style="text-align:center;">24-05-2018</td>
                </tr>
                <tr>
                    <td>IGDTUW Revised PhD Regulations 2017</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/regulation2017_5.pdf">pdf</a></td>
                    <td style="text-align:center;">06-03-2017</td>
                </tr>
                <tr>
                    <td>IGDTUW Research Fellowship Scheme (JRF/SRF 2017)</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/fellowship_6.pdf">pdf</a></td>
                    <td style="text-align:center;">06-03-2017</td>
                </tr>
                <tr>
                    <td>Office order for university approved supervisors and research scholars</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/office_10.pdf">pdf</a></td>
                    <td style="text-align:center;">27-02-2017</td>
                </tr>
                <tr>
                    <td>Time Table for Ph.D Program-2016</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/time_11.pdf">pdf</a></td>
                    <td style="text-align:center;">29-07-2016</td>
                </tr>
                <tr>
                    <td>List of Ph.D Applicants selected for provisional admission to Ph.D Programme 2016<br><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/guidelines_15.pdf">Guidelines to the Applicants for admission to Ph.D Program 2016</a></td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/result_12.pdf">pdf</a></td>
                    <td style="text-align:center;">22-07-2016</td>
                </tr>
                <tr>
                    <td>Interview Schedule and instructions for the shortlisted candidates for Ph.D Programme</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/interview_13.pdf">pdf</a></td>
                    <td style="text-align:center;">22-06-2016</td>
                </tr>
                <tr>
                    <td>Notice for Ph.D Applicants</td>
                    <td style="text-align:center;"><a target="_blank" href="pdfs/interview_14.pdf">pdf</a></td>
                    <td style="text-align:center;">17-06-2016</td>
                </tr>
                <tr>
                    <td>IGDTUW Becomes Partenering institute in I-MADE, a program launched by DoT, Govt. of India</td>
                    <td style="text-align:center;"><a target="_blank" href="">pdf</a></td>
                    <td style="text-align:center;">28-03-2016</td>
                </tr>
                <tr>
                    <td>Withdrawal policy for Ph.D programme-2015</td>
                    <td style="text-align:center;"><a target="_blank" href="">pdf</a></td>
                    <td style="text-align:center;">28-07-2015</td>
                </tr>
                <tr>
                    <td>List of Ph.D Applicants selected for provisional admission to Ph.D Programme 2015<br><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="">Detailed Guidelines and counselling schedule for Ph.D</a></td>
                    <td style="text-align:center;"><a target="_blank" href="">pdf</a></td>
                    <td style="text-align:center;">15-07-2015</td>
                </tr>
                <tr>
                    <td>Ph.D Interview Schdeule and Instructions to Applicants for Ph.D Programme 2015 </td>
                    <td style="text-align:center;"><a target="_blank" href="">pdf</a></td>
                    <td style="text-align:center;">03-07-2015</td>
                </tr>
                <tr>
                    <td>List of Ph.D Applicants shortlisted for Interview for Admission to Ph.D-2015</td>
                    <td style="text-align:center;"><a target="_blank" href="">pdf</a></td>
                    <td style="text-align:center;">03-07-2015</td>
                </tr>
                <tr>
                    <td>Notice for Ph.D Applicants who qualified NET as per result declared on 15th June 2015</td>
                    <td style="text-align:center;"><a target="_blank" href="">pdf</a></td>
                    <td style="text-align:center;">26-06-2015</td>
                </tr>
                <tr>
                    <td>List of Candidates exempted from RAT-2015 for Ph.D</td>
                    <td style="text-align:center;"><a target="_blank" href="">pdf</a></td>
                    <td style="text-align:center;">24-06-2015</td>
                </tr>
                <tr>
                    <td>Ph.D RAT exam Notification</td>
                    <td style="text-align:center;"><a target="_blank" href="">pdf</a></td>
                    <td style="text-align:center;">22-06-2015</td>
                </tr>
            </table>
        </div>
      </div>';
    }

    elseif($id==3) {
         echo '
         <div class="middleBox">
             <div class="title">
             RESEARCH AREAS
             </div>
             <div class="headingPara">
             The Ph.D Program is being offered in the following disciplines subject to the availability of vacancy in the relevant research field:
             <table>
                 <tr>
                     <th style="text-align:center;">Department</th>
                     <th colspan="3" style="text-align:center;">Research Areas</th>
                 </tr>
                 <tr>
                     <td>Computer Science & Engineering/Information Technology/Computer Application</td>
                     <td colspan="3">

                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Internet of Things (IOT), Wireless Communication Cyber Security, Mobile Computing, Artificial Intelligence, Web Technologies.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Natural Language Processing, Big Data Analytics, Fuzzy Database Management, Intelligent Computing, Data & Text Mining, Speech Processing.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Data Analytics, Big Data Analysis, Computer Education, Embedded systems, Mobile Computing, Wireless Sensor Network.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Real Time Systems, Data Mining, Algorithms , Data Science, Sentiment Analysis & opinion Mining, Text Mining, Social Network Analysis.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Fuzzy Theory, Information Security, Cyber Security, Image Processing, Video Retrieval, Image Retrieval, Machine Learning.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Software Engineering / Software Testing, Software Project Management, Information Security, Secure Wireless Networks, Cloud Computing.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Business Intelligence, Software Reliability, Neural Networks, Data Communication Networks, Semantic Web.
                     </td>
                 </tr>
                 <tr>
                     <td>Electronics and Communication</td>
                     <td colspan="3">
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Optical Communication, Digital Signal Processing, VLSI, Strategic MGT, Telecom MGT, Analog, Mixed Mode Circuits and Systems Design.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Embedded System, Computer Vision, Multimedia Security, Medical Image Processing, VLSI Design.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Low Power CMOS Circuits and Analog Integrated Circuits, Micro Electronics, Designing of Fractional Order Differentiators and Integrators.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Optimization of Operators, Evolutionary Algorithms, Digital Image Processing, Digital Signal Processing Machine Learning.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Digital Image Processing (Medical), Big Data Analytic, Combinatorial optimization (Meta-Heuristic), Decision Science.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Power Systems, Power Electronics, Control Systems, Electrical Engineering & Renewable Energy Sources.
                     </td>
                 </tr>
                 <tr>
                     <td>Mechanical and Automation Engineering</td>
                     <td colspan="3">
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Machine Design Engineering, Tribology Fluid Film Bearing, FEM Computation Engineering, Vibration.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Alternate Fuels in IC Engines, Composite Material, Robotics & Automation, Manufacturing & Automation.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Production and Automation Engineering, Prosthetics, Thermal Science and Engineering, Thermal Power Plant.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Refrigeration and Air- Conditioning, Tribology, Applied Mechanics, Green Manufacturing.
                     </td>
                 </tr>
                 <tr>
                     <td>Applied Science & Humanities (Physics, Chemistry, Mathematics, English)</td>
                     <td colspan="3">
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Atmospheric Sciences (carbonaceous aerosols, organic compounds and trace gases), Nanocomposites for waste water treatment, Green Corrosion Inhibitors.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Nanotechnology, Nano materials, Thin Film Technologies, Applied Optics, Digital Image Processing, Optical Information Processing.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Panoramic and 3-D Imaging, Materials Science, Nanoscience and Nanotechnology.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Mathematical Programming, Operations Research, Nonlinear Programming, Combinatorial Optimization, Allocation Problems.<br><br>
                     <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>English Literature, Communication Studies.
                     </td>
                 </tr>
                </table>
                 </div>
              </div>
              ';
              }
          elseif($id==4) {
                echo '
                <div class="middleBox">
                    <div class="title">
                    RESEARCH SCHOLARS
                </div>
                <div class="headingPara">
                    <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/data_16.pdf">List of Research Scholars in Enrolled in IGDTUW in 2014-2016.</a>
                </div>
              </div>';
            }
            elseif($id==5) {
                  echo '
                  <div class="middleBox">
                      <div class="title">
                      UNIVERSITY APPROVED SUPERVISORS PH.D
                  </div>
                  <div class="headingPara">
                      <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/supervisor_17.pdf">List of Supervisors</a>
                  </div>
                </div>';
              }
              elseif($id==6) {
                    echo '
                    <div class="middleBox">
                        <div class="title">
                        RESEARCH AND CONSULTANCY
                    </div>

                    <div class="headingPara">
                    <div class="title">
                    Forms and Applications
                    </div>
                     <table>
                      <tr>
                        <th style="text-align:center;">Title</th>
                        <th style="text-align:center;">Download</th>
                        <th style="text-align:center;">Date of Upload</th>
                      </tr>
                      <tr>
                        <td>Revised Form for recognition as a Ph.D supervisor.<br><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/eligibility_18">Eligibility Conditions</td>
                        <td style="text-align:center;"><a href="pdfs/proforma_19.pdf">pdf </a> , <a href="docs/proforma_1.docx">doc</a></td>
                        <td style="text-align:center;">18-01-2016</td>
                      </tr>
                      <tr>
                        <td>Form for recognition as a Ph.D supervisor</td>
                        <td style="text-align:center;"><a href="pdfs/proforma_20.pdf">pdf </a> , <a href="docs/proforma_2.docx">doc</a></td>
                        <td style="text-align:center;">02-06-2015</td>
                     </table>

                    </div>
                  </div>';
                }
              elseif($id==7) {
                echo '
                <div class="middleBox">
                    <div class="title">
                    ONGOING SPONSORED RESEARCH PROJECTS
                </div>
                <div class="headingPara">
                <center><b><u>CURIE Grant for IGDTUW</u></b><br></center><br>
                <b>“Consolidation of University Research for Innovation and Excellence in Women Universities (CURIE)” Grant for IGDTUW.</b><br>
                Nodal Officer: Dr. Ranu Gadi <br>
                Funding Agency: Department of Science and Technology Year of Sanction: 2018 <br>
                Duration: 3 years <br>
                Total funding sanctioned: 363 Lakhs <br><br><br>

                <center><b><u>CURIE-AI Grant for IGDTUW</u></b><br></center><br>
                <b>“Consolidation of University Research for Innovation and Excellence in Women Universities (CURIE): support for Artificial Intelligence (AI)” Grant for IGDTUW.</b><br>
                Nodal Officer: Dr. Ranu Gadi<br>
                Funding Agency: Department of Science and Technology Year of Sanction: 2019<br>
                Duration: 3 years<br>
                Total funding sanctioned: 70 Lakhs in Ist phase <br><br><br>

                <div class="title">
                Department of Applied Sciences & Humanities
                </div>
                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Project Title: <b>Fabrication and Application of Polymeric Nanoshots as Drug Delivery Agent for Cancer Imaging and Therapy.</b><br>
                Principal Investigator: Dr. Bhavani Prasad Naik Nenavathu<br>
                Funding Agency: Department of Science and Technology Year of Sanction: March 2017<br>
                Duration: 3 years<br>
                Total funding sanctioned: 26 Lakhs<br><br><br>

                <div class="title">
                Department of Computer Science & Engineering
                </div>
                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Research Project: <b>Design & Innovation Center</b><br>
                Principal Investigator: Prof. P.V.M. Rao (IIT Delhi) <br>
                Co-Principal Investigator: Prof. S.R.N. Reddy <br>
                Funding Agency: MHRD <br>
                Year of Sanction: 2014-20 <br>
                Duration: 6 years<br>
                Total funding sanctioned: 26 Lakhs<br><br><br>

                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Research Project: <b>Intel IoT Center for excellence</b><br>
                Principal Investigator: Prof. S.R.N. Reddy<br>
                Funding Agency:  Intel (India)<br>
                Year of Sanction: 2014-17 <br>
                Duration: 3 years<br>
                Total funding sanctioned: 2.25 Lakhs<br><br><br>

                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Research Project: <b>Intel Real Sense</b><br>
                Principal Investigator: Prof. S.R.N. Reddy<br>
                Funding Agency:  Intel (India)<br>
                Year of Sanction: 2015 <br>
                Duration: 2 years<br>
                Total funding sanctioned: 4 Lakhs<br><br><br>

                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Research Project: <b>Mobile Education Kit-3</b><br>
                Principal Investigator: Prof. S.R.N. Reddy<br>
                Funding Agency:  Microsoft University Relation, Finland<br>
                Year of Sanction: 2015-20 <br>
                Duration: 5 years<br>
                Total funding sanctioned: 23.40 Lakhs<br><br><br>

                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Research Project: <b>Detection of life threatening diseases by examining the human genome in Microarray data using distributed implementation of algorithms.</b><br>
                Principal Investigator: Prof. Devendra K. Tayal<br>
                Funding Agency:  Department of Science & Technology<br>
                Year of Sanction: 2019 <br>
                Duration: 3 years<br>
                Total funding sanctioned: 39.50 Lakhs<br><br><br>

                <div class="title">
                Department of Electronics & Communication Engineering
                </div>
                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Research Project: <b>Special Manpower Development Program- Chip to System Design (III- Phase)</b><br>
                Principal Investigator: Dr. Jasdeep Kaur Dhanoa <br>
                Co-Principal Investigator: Dr. Nidhi Goel <br>
                Funding Agency:  MeiTY<br>
                Year of Sanction: 2015 <br>
                Duration: 5 years<br>
                Total funding sanctioned: 99.7 Cr (spread over 5 years among 60 institutes)<br><br><br>

                <div class="title">
                Department of Information Technology
                </div>
                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Research Project: <b>Capacity Building in Information Security Education Awareness Project (ISEA)</b><br>
                Principal Investigator: Prof. R K Singh <br>
                Co-Principal Investigator: Dr A K Mohapatra<br>
                Funding Agency:  Department of Electronics and Information Technology, Ministry of Communication and Information Technology<br>
                Year of Sanction: 2015 <br>
                Duration: 5 years<br>
                Total funding sanctioned: 65 Lakhs<br><br><br>

                <div class="title">
                Department of Mechanical & Automation Engineering
                </div>
                <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Research Project: <b>Design and development of customized Temporo mandibular joint prosthesis for patient suffering from end stage TM disorders.</b><br>
                Principal Investigator: Ms. Mehak Sharma<br>
                Mentor: Dr. Manoj Soni<br>
                Funding Agency:  Department of Science & Technology<br>
                Year of Sanction: 2018 <br>
                Duration: 3 years<br>
                Total funding sanctioned: 21.5 Lakhs
                </div>
              </div>

              <div class="middleBox">
                <div class="title">
                COMPLETED SPONSORED RESEARCH PROJECTS
                </div>
                <div class="headingPara">
                 <div class="title">
                 Department of Applied Sciences & Humanities
                 </div>
                 <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Project Title: <b>Spatio-temporal Variability of Aerosols over National Capital Region of India.</b><br>
                 Principal Investigator: Dr. Ranu Gadi<br>
                 Funding Agency: Department of Science and Technology<br>
                 Year of Sanction: 2015 <br>
                 Duration: 4 years<br>
                 Total funding sanctioned: 53 Lakhs<br><br><br>

                 <div class="title">
                 Department of Computer Science & Engineering
                 </div>
                 <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Project: <b>Web based Mobile Architecture and Programming (Mek-1)</b><br>
                 Principal Investigator: Prof. S.R.N. Reddy<br>
                 Co-Principal Investigator: Prof. M.Balakrishnan (IIT Delhi) and Dr. Amarjeet Singh (IIIT, Delhi)<br>
                 Funding Agency: Nokia University Relation, Finland<br>
                 Year of Sanction: 2012 <br>
                 Duration: 1 years<br>
                 Total funding sanctioned: 13 Lakhs<br><br><br>

                 <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Project: <b>Towards context aware sensing, inference and actuation(Mek-1)</b><br>
                 Principal Investigator: Dr. Amarjeet Singh(IIITD) <br>
                 Co-Principal Investigator: Prof. S.R.N. Reddy and Dr. Debopam Acharya (SNU)<br>
                 Funding Agency: ITRA (MHRD) <br>
                 Year of Sanction: 2013 <br>
                 Duration: 4 years<br>
                 Total funding sanctioned: 21.40 Lakhs<br><br><br>

                 <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Project: <b>Development of Embedded Systems Course Curriculum</b><br>
                 Principal Investigator: Prof. S.R.N. Reddy <br>
                 Co-Principal Investigator: Ms Kavita<br>
                 Funding Agency: Intel(India) <br>
                 Year of Sanction: 2013 <br>
                 Duration: 2 years<br>
                 Total funding sanctioned: 1.5 Lakhs<br><br><br>

                 <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Project: <b>Mobile Education Kit-2</b><br>
                 Principal Investigator: Prof. S.R.N. Reddy  <br>
                 Funding Agency: Nokia University Relation, Finland <br>
                 Year of Sanction: 2014-18 <br>
                 Duration: 4 years<br>
                 Total funding sanctioned: 22.16 Lakhs<br><br><br>

                 <div class="title">
                 Department of Electronics & Communication Engineering
                 </div>
                 <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Title of Project: <b>Vigyan Jyoti Pilot Project</b><br>
                 Principal Investigator: Dr. Jasdeep Kaur Dhanoa<br>
                 Funding Agency: Department of Science & Technology<br>
                 Year of Sanction: 2018 <br>
                 Duration: 1 years<br>
                 Total funding sanctioned: 20 Lakhs
                 </div>
                </div>';
              }
              elseif($id==8) {
                echo '
               <div class="middleBox">
                 <div class="title">
                 FORMS FOR ESTABLISHMENT
                 </div>

                 <div class="headingPara">
                 <table>
                     <tr>
                         <th colspan="2" style="text-align:center;">Title/Heading</th>
                         <th style="text-align:center;">File Format</th>
                     </tr>
                     <tr>
                         <td colspan="2">IT Form for nw requirement and for Email Creation</td>
                         <td style="text-align:center;"><a href="pdfs/IT Form.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Complaint Form (Civil/Electrical)</td>
                         <td style="text-align:center;"><a href="pdfs/Complaint Form PWD.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Hostel Guest House Form for booking/cancellation of accommodation</td>
                         <td style="text-align:center;"><a href="pdfs/Guest House Booking Form_compressed.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Requisition Form for Booking of Seminar Hall/ Conference Room/ Auditorium/ Playground</td>
                         <td style="text-align:center;"><a href="pdfs/Form for conferenceseminar booking.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Requisition Form for Reimbursements</td>
                         <td style="text-align:center;"><a href="pdfs/Reimbursement form.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Requisition Form for Permission of Gate Pass</td>
                         <td style="text-align:center;"><a href="pdfs/gate pass form.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Requisition/Application Form for Sanction/Drawal of Advance</td>
                         <td style="text-align:center;"><a href="pdfs/advance-withdrawal form.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Application Form for availing of L.T.C./LTC Advance</td>
                         <td style="text-align:center;"><a href="pdfs/itc application form.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Application Forms for various Leaves</td>
                         <td style="text-align:center;"><a href="Research.php?id=9">htm</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">API Form-2015</td>
                         <td style="text-align:center;"><a href="docs/API Form 2015.doc">doc, </a><a href="pdfs/API Form 2015.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Family Declaration Form</td>
                          <td style="text-align:center;"><a href="docs/Family Declaration Form.docx">doc, </a><a href="pdfs/Family Declaration Form.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Marital Declaration Form</td>
                         <td style="text-align:center;"><a href="docs/Marital Declaration.docx">doc, </a><a href="pdfs/Marital Declaration.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Form for sending monthly attendance report/event report for teaching/non-teaching employee</td>
                         <td style="text-align:center;"><a href="docs/Absentee Statement.docx">doc, </a><a href="pdfs/Absentee Statement.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Home town declaration form</td>
                         <td style="text-align:center;"><a href="docs/Home Town Declaration.docx">doc, </a><a href="pdfs/Home Town Declaration.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Joint declaration form in the case of where husband and wife both are in service</td>
                         <td style="text-align:center;"><a href="docs/Joint Decalaration of Spouse.docx">doc, </a><a href="pdfs/Joint Decalaration of Spouse.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">APAR Form For Faculty</td>
                         <td style="text-align:center;"><a href="docs/APAR for faculty.docx">doc, </a><a href="pdfs/APAR for faculty.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">API Form for Faculty <br>click here for <a href="pdfs/Guidelines for API.pdf">Guidelines</a></td>
                         <td style="text-align:center;"><a href="docs/Academic Performance Indicators API 20.2.2014.doc">doc, </a><a href="pdfs/Academic Performance Indicators API 20.2.2014.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">APAR Form for officers of IGDTUW</td>
                         <td style="text-align:center;"><a href="docs/JRDRARSO.docx">doc, </a><a href="pdfs/JRDRARSO.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">APAR Form for documentalist/ assistant librarian/ counter assistant/ library attendant</td>
                         <td style="text-align:center;"><a href="docs/Asstt. LIb.docx">doc, </a><a href="pdfs/Asstt. LIb.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">APAR Form for group ‘c’ employees</td>
                         <td style="text-align:center;"><a href="docs/Group C Emp.docx">doc, </a><a href="pdfs/Group C Emp.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">APAR Form for laboratory assistants</td>
                         <td style="text-align:center;"><a href="docs/Lab Asstt.docx">doc, </a><a href="pdfs/Lab Asstt.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">APAR Form for librarian/ programmer </td>
                         <td style="text-align:center;"><a href="docs/Librarian Programmer.docx">doc, </a><a href="pdfs/Librarian Programmer.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">APAR form for senior technical assistants/technical assistants</td>
                         <td style="text-align:center;"><a href="docs/Sr.TATA.docx">doc, </a><a href="pdfs/Sr.TATA.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Form for Oath of allegiance</td>
                         <td style="text-align:center;"><a href="docs/Oath of Allegiance.docx">doc, </a><a href="pdfs/Oath of Allegiance.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Form for Provident fund account number </td>
                         <td style="text-align:center;"><a href="docs/PF Form.docx">doc, </a><a href="pdfs/PF Form.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Form for extension of contract appointment</td>
                         <td style="text-align:center;"><a href="docs/Proforma for extension of contract.docx">doc, </a><a href="pdfs/Proforma for extension of contract.pdf">pdf</a></td>
                     </tr>
                     <tr>
                         <td colspan="2">Requisition form for Staff Vehicle</td>
                         <td style="text-align:center;"><a href="pdfs/Requisition Form for Staff Vehicle.pdf">pdf</a></td>
                     </tr>
                  </table>

                 </div>
                 </div>';
               }
               elseif($id==9) {
                 echo '
                <div class="middleBox">
                  <div class="title">
                  FORMS FOR LEAVE
                  </div>
                  <div class="headingPara">
                  <table>
                      <tr>
                          <th colspan="2" style="text-align:center;">Title/Heading</th>
                          <th style="text-align:center;">File Format</th>
                      </tr>
                      <tr>
                          <td colspan="2">Application for Casual Leave / RH Leave</td>
                          <td style="text-align:center;"><a href="docs/CL app.docx">doc, </a><a href="pdfs/CL app.pdf">pdf</a></td>
                      </tr>
                      <tr>
                          <td colspan="2">Application for Special Casual Leave</td>
                          <td style="text-align:center;"><a href="docs/Special Casual Leave.docx">doc, </a><a href="pdfs/Special Casual Leave.pdf">pdf</a></td>
                      </tr>
                      <tr>
                          <td colspan="2">Application for Paternity Leave</td>
                          <td style="text-align:center;"><a href="docs/Paternity Leave Application.docx">doc, </a><a href="pdfs/Paternity Leave Application.pdf">pdf</a></td>
                      </tr>
                      <tr>
                          <td colspan="2">Application for Child Care Leave</td>
                          <td style="text-align:center;"><a href="docs/CCL Application.docx">doc, </a><a href="pdfs/CCL Application.pdf">pdf</a></td>
                      </tr>
                      <tr>
                          <td colspan="2">Application for Extension of Leave (Earned Leave, Commuted Leave, Half Pay Leave)</td>
                          <td style="text-align:center;"><a href="docs/ELHPL Commuted Leave.docx">doc, </a><a href="pdfs/ELHPL Commuted Leave.pdf">pdf</a></td>
                      </tr>
                      <tr>
                          <td colspan="2">Application Form for Joing after Leave</td>
                          <td style="text-align:center;"><a href="docs/Joining after Leave.docx">doc, </a><a href="pdfs/Joining after Leave.pdf">pdf</a></td>
                      </tr>
                    </table>
                  </div>
                  </div>';
                }

              elseif($id==10) {
                echo '
               <div class="middleBox">
                 <div class="title">
                 Ph.D ADMISSION GUIDELINES
                 </div>

                 <div class="headingPara">
                 <b>Admission Process</b>
                 <ul>

                     <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Admission Process to the Ph.D program is common to all categories of applicants. </li>
                     <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Admission shall be made on the basis of a written Screening Test (Research Aptitude Test, RAT) or an interview or both as decided by the Admission Committee of the university.</li>
                </ul>
                <br><br>
                <b>RAT Guidelines</b><br>
                RAT examination (if conducted) for admission to Ph.D 2018 shall be held on 3 July, 2018 (Tuesday). The applicants are advised to keep a check on the university website for any updates/changes regarding the PhD 2018 admissions.<br>
                <br>The RAT exam may be conducted in the following disciplines :
                <ul>
                     <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Electronics and Communication</li>
                     <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Computer Science/Information Technology/Computer Applications</li>
                     <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Mechanical Engineering</li>
                     <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Physics</li>
                     <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Chemistry</li>
                     <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>English</li>
                </ul>
                 <br>
                       The Screening Test (RAT) shall be waived off for regular female faculty of IGDTUW and applicants who have qualified UGC-CSIR-JRF/NET or applicants who have qualified GATE. These applicants shall be directly called for interview.<br>
                       All candidates taking admission in the Ph.D Programme shall be bound by the Ph.D Ordinances and Regulations of the IGDTUW.
                <ul>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="#"><u>Syllabus of the RAT exam for all disciplines</u></a></li></ul>

                </div>
             </div>';
             }
      else if($id==10){
         echo '<div class="middleBox">
             <div class="title">
                ELIGIBILITY CONDITIONS FOR ADMISSION TO Ph.D - 2018
             </div>
             <div class="headingPara">
             <u><b>CLASSIFICATION OF APPLICANTS</b></u><br>
             The applicants for admission to the Ph.D. programme may apply under any one of the following categories:
              <ul><li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><b>Full Time Research Scholar:</b> A person registered for the Ph.D Degree devoting full time for completing the degree requirements.</li>
               <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><b>Part-Time Research Scholar:</b> A person registered for the Ph.D degree and will devote part of her time towards research and part of her time towards the discharge of her official obligations.</li>
              </ul><br>
             <b><u>ADMISSION ELIGIBILITY</b></u><br>
             <b>For Full Time Ph.D Program</b>
            <ul>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><b>For Engineering (CSE, IT, MAE, ECE):</b> Degree in M.E/M.Tech or equivalent from a recognized University /Institution in the relevant discipline with minimum of 60% marks in aggregate or equivalent CGPA & B.E/ B.Tech or equivalent with minimum of 60% marks in aggregate or equivalent CGPA.</li>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><b>For Computer Application:</b> MCA from a recognized University/ Institution with minimum of 60% marks in aggregate CGPA & Graduation Degree (with Sciences and Mathematics) with minimum of 60% marks in aggregate or equivalent CGPA.</li>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><b>For Sciences and Humanities (Mathematics, Physics, Chemistry, English):</b> Master Degree in the relevant discipline from a recognized University/ Institution with 60% marks or equivalent CGPA & undergraduate degree in the relevant discipline with 60% marks in aggregate or equivalent CGPA.</li>
            </ul>
            <b>For Part Time Ph.D Program</b><br>
            Faculty working in Educational Institutions, Scientists working in R & D Organizations/Labs, Professionals working in a PSUs/ Corporate/Industry registered under Company’s Act.<br>
            Provided that:
            <ul>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The Applicant possesses the minimum entry qualification for the degree as given in the admission eligibility for full Time Research Scholars.</li>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The applicant is presently employed under any of the following categories:</li>
                  <li>&nbsp&nbsp&nbsp&nbsp<i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Applicants working in organizations which have MOU with IGDTUW.</li>
                  <li>&nbsp&nbsp&nbsp&nbsp<i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Applicants working on Full-Time basis (regular/adhoc/contract) in a National Level R&D Lab/ a reputed organization/ recognized educational institution / university/ PSU/ Corporate/ Industry registered under Company’s Act organization.</li>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The Applicant possesses at least two years of relevant teaching/research experience in the above categories at ii (b).</li>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The Applicant proves to the satisfaction of the university that her official duties permit her to devote sufficient time to research.</li>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The Applicant gets an NOC from her employer.</li>
                  <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Facilities for research are available at the applicant’s place of work in the chosen field of research.</li>
            </ul><br>
            <u><b>RELAXATION IN ADMISSION ELIGIBILITY FOR RESERVED CATEGORY CANDIDATES</b></u><br>
            Candidates belonging to Scheduled Castes/Scheduled Tribes will be allowed 5% relaxation of marks in the minimum eligibility requirement.<br><br>

            <u><b>ELIGIBILITY FOR THE IGDTUW-JUNIOR RESEARCH FELLOW (IGDTUW-JRF)</b></u><br>
            A student, who satisfies the minimum eligibility requirement for Full Time Research Scholar, shall be eligible for IGDTUW – JRF, provided that:
          <ul>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>She has qualified UGC-CSIR-JRF/NET examination or has or qualified GATE with a score above the minimum cut off or qualified RAT examination. A candidate who has appeared in the above examination but is awaiting results may also apply. However, she shall be required to produce a valid documentary evidence of having qualified the examination at the time of the interview.</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>She is not receiving any financial assistance from any other sources.</li>
          </ul>
            <b>Reservation Policy:</b> The reservation in the Ph.D Program will be as per government norms.
         </div>
       </div>';
       }
    elseif($id==11) {
      echo '
      <div class="middleBox">
          <div class="title">
          RESEARCH APTITUDE TEST (RAT)
          </div>
          <div class="headingPara">
<center>The university conducts a RAT (Research Aptitude Test) to take admissions in its Ph.D program.<center>
      </div>
    </div>';
  }

?>
             </div>
           </div>
         </div>
         <br><br><br>
          <!-- footer -->
          <?php include 'footer.php'?>
      </body>
      </html>
