<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission</title>
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
                        ADMISSIONS
                    </div>
                    <ul class="sidenav">
                      <li><a href="Admission.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Admission Officers</a></li>
                      <li><a href="Admission.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Admission Notices</a></li>
                      <li><a href="Admission.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Hostel Admissions</a></li>
                    </ul>
                </div>
            </div>
           <div class="col-sm-9">
              <?php
              if($id==1){
              echo '
              <div class="middleBox">
                <div class="title">
                  ADMISSIONS FOR THE YEAR 2019-20
                </div>
                <div class="title">
                  OFFICERS & PROCEDURE
                </div>
                <div class="headingPara">
                 <table>
                  <tr>
                    <th><center>PROGRAMME NAME</center></th>
                    <th><center>ADMISSION OFFICER</center></th>
                    <th><center>ADMISSION PROCEDURE</center></th>
                  </tr>
                  <tr>
                    <td><center>Under-Graduate Admissions <br> (B.Tech. and B.Arch.)</center></td>
                    <td><center>Prof. R.K. Singh <br> 011-23900221<center></td>
                    <td>The admission B.Tech and B.Arch programme will be through Joint Admission Counseling (JAC) – 2019 jointly for DTU, NSUT, IGDTUW and IIITD. For more information, the Candidates may visit regularly <a href="www.jacdelhi.nic.in">www.jacdelhi.nic.in</a> for updates.</td>
                  </tr>
                  <tr>
                    <td><center>B.B.A.<br>+<br>Post-Graduate Admissions<br>(M.Tech., M.C.A. and M.Plan.)<br>+<br>Ph.D.</center></td>
                    <td><center>Prof. Devendra K. Tayal<br> 011-23900228<center></td>
                    <td>For Admission to various PG & Ph.D Programs including newly introduced BBA & M.Plan (Urban Planning),the Admission Portal <br> <a href="http://admission.igdtuw.ac.in">http://admission.igdtuw.ac.in</a> is open.
                    Candidate may download Admission Brochure, read it carefully and check and their eligibility before filling application form.</td>
                  </tr>
                 </table>
                 </div>
            </div>';
            }
            if($id==2){
            echo '
            <div class="middleBox">
              <div class="title">
                NOTICES RELATED TO ADMISSIONS 2019-20
              </div>
              <div class="headingPara">
               <table>
                <tr>
                  <th colspan="2"><center>Title of Notice</center></th>
                  <th><center>File</center></th>
                  <th><center>Date of Upload</center></th>
                </tr>
                <tr>
                  <td colspan="2">List of Final Upgradation of Ranch of Candidates admitted in year 2019 in B.Tech Program due to withdrawal of the students during 1st Aug to 20th Aug 2019</td>
                  <th><center><a href="">View/Download</a></center></th>
                  <th><center>2019-08-27</center></th>
                </tr>
              </table>
            </div>
            </div>';
          }
        if($id==3){
        echo '
        <div class="middleBox">
          <div class="title">
            HOSTEL ADMISSIONS 2019-20
          </div>
          <div class="headingPara">
           <table>
            <tr>
              <th colspan="2"><center>Title of Notice</center></th>
              <th><center>File</center></th>
              <th><center>Date of Upload</center></th>
            </tr>
            <tr>
              <td colspan="2">Hostel Admission 2019-20 Eighth List</td>
              <td><center><a href="">View/Download</a></center></td>
              <td><center>2019-09-16</center></td>
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
