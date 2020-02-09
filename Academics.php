<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academics</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


<!-- main stylesheet -->
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/departments.css">
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
                        ACADEMICS
                    </div>
                    <ul class="sidenav">
                      <li><a href="Academics.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Dean(Academics)</a></li>
                      <li><a href="Academics.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Programmes Offered</a></li>
                      <li><a href="Academics.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Scheme & Syllabus</a></li>
                      <li><a href="Academics.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Academic Calendar</a></li>
                      <li><a href="Academics.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Tables</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
              <?php
              if($id==1){
              echo '
              <div class="middleBox">
                  <div class="title">
                DEAN (ACADEMIC AFFAIRS)
                  </div>
                <div class="headingPara">
                  <img src="images/DKTAYAL.jfif" class="hodImage" alt="Prof. Devendra Tayal" width="auto" height="200px">
                  I feel honored and privileged to welcome you , as Dean Academic Affair in IGDTUW. At present our University is successfully running under graduate, post graduate and research programs in all emerging areas of Engineering, Technology and Architecture. IGDTUW provides a strong base for learning where young talents are nurtured in different fields of Engineering, Architecture and Research. The major focus here is on imparting technical training to encourage curiosity and innovativeness among the students and the foundation from where they can acquire quick learning ability and adaptive learning with the fast changing needs of the industry. IGDTUW aims to mould the youth into world-class technocrats and engineers of tomorrow who would endeavor to increase the quality of life for human kind. The goal of our faculty members is to position the engineering graduates to be problem solvers, world leaders and ethical citizens. In consistency with the past practice, I am confident that our new students would also be an asset to the organization they join, through their technical and managerial capabilities.
                  <br><br>
                  Last but not the least; I would like mention this quote for all our students:
                    <br>
                    <b>”Bloom where you are planted”.</b><br>
                  Wishing the best for your future.
                  <br><br><b>Prof. Devendra Tayal <br>
                  Dean (Academic Affairs) & <br>Chairman (Academic Quality Assurance Committee)</b>
                </div>
            </div>';
          }

        elseif($id==2) {
          echo '
         <div class="middleBox">
           <div class="title">
           PROGRAMMES OFFERED BY UNIVERSITY
           </div>

           <div class="headingPara">
            <table>
               <tr>
                   <th style="">NAME OF THE PROGRAMME </th>
                   <th style="">SPECIALIZATION</th>
                   <th style="">DURATION OF PROGRAMME</th>
                   <th style="">DEPARTMENT OFFERING THE PROGRAMME</th>
                   <th style="">SEATS OFFERED*</th>
                   <th style="">ADMISSION PROCESS*</th>
               </tr>
               <tr>
                   <th colspan="6" style="text-align:center"><b>UNDER GRADUATE PROGRAMMES</b></th>
               </tr>
               <tr>
                   <th>B.Tech.</th>
                   <td>Computer Science Engineering</td>
                   <td>4 yrs</td>
                   <td>CSE</td>
                   <td>150</td>
                   <td><a target="_blank" href="https://jacdelhi.nic.in/publicinfo/public/home.aspx">Joint Admission Counselling</a></td>
               </tr>
               <tr>
                   <th>B.Tech.</th>
                   <td>Information Technology</td>
                   <td>4 yrs</td>
                   <td>IT</td>
                   <td>150</td>
                   <td><a target="_blank" href="https://jacdelhi.nic.in/publicinfo/public/home.aspx">Joint Admission Counselling</a></td>
               </tr>
               <tr>
                   <th>B.Tech.</th>
                   <td>Electronics and Communications Engineering</td>
                   <td>4 yrs</td>
                   <td>ECE</td>
                   <td>75</td>
                   <td><a target="_blank" href="https://jacdelhi.nic.in/publicinfo/public/home.aspx">Joint Admission Counselling</a></td>
               </tr>
               <tr>
                   <th>B.Tech.</th>
                   <td>Mechanical and Automation Engineering</td>
                   <td>4 yrs</td>
                   <td>MAE</td>
                   <td>75</td>
                   <td><a target="_blank" href="https://jacdelhi.nic.in/publicinfo/public/home.aspx">Joint Admission Counselling</a></td>
               </tr>
               <tr>
                   <th>B.Arch.</th>
                   <td>Architecture and Design</td>
                   <td>5 yrs</td>
                   <td>A&P</td>
                   <td>40</td>
                   <td><a target="_blank" href="https://jacdelhi.nic.in/publicinfo/public/home.aspx">Joint Admission Counselling</a></td>
               </tr>
               <tr>
                   <th>B.B.A.</th>
                   <td>Management</td>
                   <td>3 yrs</td>
                   <td>M</td>
                   <td>60</td>
                   <td>--</td>
               </tr>
               <tr>
                   <th colspan="6" style="text-align:center"><b>POST GRADUATE PROGRAMMES</b></th>
               </tr>
               <tr>
                   <th>M.Tech.</th>
                   <td>IT (Information Security Management)</td>
                   <td>2 yrs</td>
                   <td>IT</td>
                   <td>32</td>
                   <td>--</td>
               </tr>
               <tr>
                   <th>M.Tech.</th>
                   <td>CSE (Artificial Intelligence)</td>
                   <td>2 yrs</td>
                   <td>CSE</td>
                   <td>32</td>
                   <td>--</td>
               </tr>
               <tr>
                   <th>M.Tech.</th>
                   <td>VLSI Design</td>
                   <td>2 yrs</td>
                   <td>ECE</td>
                   <td>32</td>
                   <td>--</td>
               </tr>
               <tr>
                   <th>M.Tech.</th>
                   <td>Robotics and Automation</td>
                   <td>2 yrs</td>
                   <td>MAE</td>
                   <td>32</td>
                   <td>--</td>
               </tr>
               <tr>
                   <th>M.C.A.</th>
                   <td>Computer Applications</td>
                   <td>3 yrs</td>
                   <td>IT</td>
                   <td>60</td>
                   <td>--</td>
               </tr>
               <tr>
                   <th>M.Plan.</th>
                   <td>Urban Planning</td>
                   <td>2 yrs</td>
                   <td>A&P</td>
                   <td>20</td>
                   <td>--</td>
               </tr>
               <tr>
                   <th>M.Tech.</th>
                   <td>ICT(Part Time)</td>
                   <td>3 yrs</td>
                   <td>IT</td>
                   <td>40</td>
                   <td>--</td>
               </tr>
               <tr>
                   <th colspan="6" style="text-align:center"><b>DOCTORATE PROGRAMMES</b></th>
               </tr>
               <tr>
                   <th>Ph.D.</th>
                   <td colspan="6">Currently Ph.D program is running in the streams of Applied Sciences, English, Electronics & Communication, Information Technology, Computer Science & Engineering and Mechanical & Automation Engineering.</td>
               </tr>
           </table>
       </div>
       </div>';
       }
      else if($id==3){
         echo '<div class="middleBox">
             <div class="title">
                SCHEME & SYLLABUS
             </div>
             <div class="headingPara">
             <table>
                 <tr>
                     <th>COURSE</th>
                     <th>SYLLABUS</th>
                 </tr>
                 <tr>
                     <th><b>B.Tech.(CSE)</th>
                     <td><a target="_blank" href="syllabus/btech1st.pdf">1st Year (CBCS)</a><br>
                         <a target="_blank" href="syllabus/btechcse_2nd.pdf">2nd Year</a><br>
                         <a target="_blank" href="syllabus/btechcse_3rd.pdf">3rd Year</a><br>
                         <a target="_blank" href="syllabus/btechcse_4th.pdf">4th Year</a>
                     </td>
                 </tr>
                 <tr>
                     <th><b>B.Tech.(IT)</th>
                     <td><a target="_blank" href="syllabus/btech1st.pdf">1st Year (CBCS)</a><br>
                         <a target="_blank" href="syllabus/btechIt_2nd.pdf">2nd Year</a><br>
                         <a target="_blank" href="syllabus/btechit_3rd.pdf">3rd Year</a><br>
                         <a target="_blank" href="syllabus/btechIt_4th.pdf">4th Year</a></td>
                 </tr>
                 <tr>
                     <th><b>B.Tech.(ECE)</th>
                     <td><a target="_blank" href="syllabus/btech1st.pdf">1st Year (CBCS)</a><br>
                         <a target="_blank" href="syllabus/btechece_2nd.pdf">2nd Year</a><br>
                         <a target="_blank" href="syllabus/btechece_3rd.pdf">3rd Year</a><br>
                         <a target="_blank" href="syllabus/btechece_4th.pdf">4th Year</a>
                         </td>
                 </tr>
                 <tr>
                     <th><b>B.Tech.(MAE)</th>
                     <td><a target="_blank" href="syllabus/btech1st.pdf">1st Year (CBCS)</a><br>
                         <a target="_blank" href="syllabus/btechmae_2_3_4.pdf">2nd, 3rd & 4th Year</a></td>
                 </tr>
                 <tr>
                     <th><b>B.Tech.(AS)</th>
                     <td><a target="_blank" href="syllabus/btechAS1st.pdf">1st Year (CBCS)</a><br> 2,3,4 year syllabus not available</td>
                 </tr>
                 <tr>
                     <th><b>B.Arch.</th>
                     <td><a target="_blank" href="syllabus/bap.pdf">1st & 2nd Year</a><br>
                         <a target="_blank" href="syllabus/barch_3.pdf">3rd Year</a><br>
                         <a target="_blank" href="syllabus/barch_4.pdf">4th Year</a><br>
                         <a target="_blank" href="syllabus/barch_5th.pdf">5th Year</a></td>
                 </tr>
                 <tr>
                     <th><b>B.B.A.</th>
                     <td><a target="_blank" href="syllabus/bba1st.pdf">1st Year (CBCS)</a><br> 2,3 year syllabus not available</td>
                 </tr>
                 <tr>
                     <th><b>M.Tech. (VLSI Design)</th>
                     <td><a target="_blank" href="syllabus/mtech_vlsi.pdf">1st & 2nd Year</a></td>
                 </tr>
                 <tr>
                     <th><b>M.Tech. (Artificial Intelligence)</th>
                     <td><a target="_blank" href="syllabus/mtech_ai.pdf">1st & 2nd Year</a></td>
                 </tr>
                 <tr>
                     <th><b>M.Tech. (ISM)</th>
                     <td><a target="_blank" href="syllabus/mtechIsm.pdf">1st & 2nd Year</a></td>
                 </tr>
                 <tr>
                     <th><b>M.C.A.</th>
                     <td><a target="_blank" href="syllabus/mca1.pdf">1st Year (CBCS)</a><br>
                         <a target="_blank" href="syllabus/mca2.pdf">2nd Year</a><br>
                         <a target="_blank" href="syllabus/mca3.pdf">3rd Year</a> </td>
                 </tr>
                 <tr>
                     <th><b>M.Tech. (ICT)</th>
                     <td><a target="_blank" href="syllabus/mtechict_1.pdf">1st Year</a><br>
                         <a target="_blank" href="syllabus/mtech_ict.pdf">2nd Year</a></td>
                 </tr>
                 <tr>
                     <th><b>Ph.D.</th>
                     <td><a target="_blank" href="syllabus/phd.pdf">pdf</a></td>
                 </tr>

             </table>
         </div>
       </div>';
       }
    elseif($id==4) {
      echo '
      <div class="middleBox">
          <div class="title">
          ACADEMIC CALENDAR
          </div>
          <div class="headingPara">
          <table>
              <tr>
                  <th style="width:5px;">S.No. </td>
                  <th colspan="4">Academic Calender</td>
                  <td>PDF</td>
              </tr>
              <tr>
                  <td style="width:5px;"><b>1.</b></td>
                  <td colspan="4">Academic Calender 2019-2020</td>
                  <td><a target="_blank" href="pdfs/AC-2019-20.pdf">pdf</a>
              </tr>
              <tr>
                  <td style="width:5px;"><b>2.</b></td>
                  <td colspan="4">Academic Calender 2018-2019</td>
                  <td><a target="_blank" href="pdfs/AC-2018-19.pdf">pdf</a>
              </tr>
          </table>
      </div>
    </div>';
  }

else if($id==5){
  echo '<div class="middleBox">
      <div class="title">
      TIME TABLE (JAN-MAY,2020)
      </div>
      <div class="headingPara">
      <table>
          <tr>
              <th>DEPARTMENT</th>
              <th>DOWNLOAD</th>
          </tr>
          <tr>
              <td>Information Technology</td>
              <td><a target="_blank" href="">pdf</a>
          </tr>
          <tr>
              <td>Electronics & Communication Engineering</td>
              <td><a target="_blank" href="pdfs/">pdf</a>
          </tr>
          <tr>
              <td>Computer Science Engineering</td>
              <td><a target="_blank" href="pdfs/">pdf</a>
          </tr>
          <tr>
              <td>Mechanical & Automation Engineering</td>
              <td><a target="_blank" href="pdfs/">pdf</a>
          </tr>
          <tr>
              <td>Applied Sciences & Humanities</td>
              <td><a target="_blank" href="pdfs/">pdf</a>
          </tr>
          <tr>
              <td>Architecture & Planning</td>
              <td><a target="_blank" href="pdfs/">pdf</a>
          </tr>

      </table>
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
