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
      <?php include 'backend/getData.php';?>

<!-- Main -->
<div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sidenav">
                    <div class="sideHeading">
                        <a href="tenders.php">RELATED LINKS</a>
                    </div>
                    <ul class="sidenav">
                        <li><a href="tenders.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Archives</a></li>
                        <li><a href="tenders.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Facilities</a></li>
                        <li><a href="tenders.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Careers</a></li>
                        <li><a href="tenders.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Tenders</a></li>
                        
                        <!-- <li><a href="tenders.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Media</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
            <?php
                if($id==1){
                    echo '<div class="middleBox">
                    <div class="title">
                        ARCHIVES
                        <br>
                        old notices are achived here...
                    </div>
                    <div class="headingPara">
                        <table>
                        <tr>
                            <th> Title</th>
                            <th>Type of Notice</th>
                            <th>Expiry Date</th>
                            <th>File</th>
                            <th>Upload Date</th>

                        </tr>
                    ';
                        getArchives();
                 echo ' </table>
                 </div>
                </div>';
                }
                else if($id==2){
                    echo '<div class="middleBox">
                    <div class="title">
                       FACILITIES AT UNIVERSITY
                    </div>
                    <div class="headingPara"> 
                    <div class="title">
                        University Dispensary
                    </div>
                    <div class="headingPara">
                        <img src="images/dispensary.jfif" class="labImages" width="auto" height="200px">
                        <ul>
                        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The main objective of the opening of the university dispensary was to provide primary health care mainly in the form of first aid to the university students. </li>
                        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The dispensary is equipped with over the counter medications, bed to rest in, medical equipments, physical screening tools and first aid supplies. A team of one registered medical practitioner along with one registered nurse is available from 09:00 am to 05:00 pm.</li>
                        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The dispensary is having all emergency facilities like oxygen, Nebuliser along with arrangement for minor surgical equipment.</li>
                        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>As far as the employees of the university are concerned since they get a fixed lumpsum medical allowance for their OPD care and they are having reimbursement facility for IPD treatment, they are only provided OTC’s i.e one medicine at a time in emergency cases.

                        </li>

                        </ul>
                    </div>
                    <div class="title">
                        Library Services
                    </div>
                    <div class="headingPara">
                    <img src="images/library.jpg" class="labImages" width="auto" height="200px">
                    Learning Resource Centre (LRC) serves as the premier source of academic information for the IGDTU community through its collections, educational and consulting services. The LRC has a highly selective collection of print, electronic, and audiovisual materials in the areas of science, engineering, technology and management to support the learning and research activities of students and faculty. A number of e- journals are being subscribed through consortia mode subscription. All these journals are available online to the member of the LRC in campus LAN. The Digital Library section has e-materials like CDs, DVDs and digital thesis of final year students and are available through an Open Source Institution Repository Software within the campus premises.
                    </div>
                    <div class="title">
                        Hostels
                    </div>
                    <div class="headingPara">
                    <img src="images/hostel.png" class="labImages" width="auto" height="200px">
                    The University has two women hostels -<b> Krishna Hostel </b>and <b>Kaveri Hostel </b>, to accommodate approximately 300 students.These two hostels are located in the University campus. These hostels provide a safe, secure and clean environment for the students to grow, learn and mature in the society away from their own homes. The hostel authorities always facilitate to create an environment for the students to study, do well in their academics and focus on their career and future. All rooms are on twin/triple sharing basis and are equipped with individual beds, chairs, built-in cupboards and study tables.
                    </div>
                    <div class="title">
                        Bank
                    </div>
                    <div class="headingPara">
                    <img src="images/bank.jfif" class="labImages" width="auto" height="200px">
                    The Punjab and Sind bank is available in the university premises.
                    <br>
                    Opening Hours (Lunch Break: 2pm to 2:30pm) :-
                    <br>
                    Monday to Friday: 10 am to 4pm.
                    <br>
                    Saturday: 10 am to 1pm.
                    </div>
                    </div>
                    </div>';
                }
                else if($id==3){
                    echo '<div class="middleBox">
                    <div class="title">
                        CAREERS / RECRUITMENT AT UNIVERSITY
                    </div>
                    <div class="headingPara">
                    <table>
                        <tr>
                        <th> Title</th>
                            
                        <th>File</th>
                        <th>Date of Upload</th>

                        </tr>';
                        getCareers();
                 echo ' </table>
                 </div>
                </div>';
                } 
                else if($id==4){
                    echo '<div class="middleBox">
                    <div class="title">
                        TENDERS
                    </div>
                    <div class="headingPara">
                    <table>
                        <tr>
                            <th> Title</th>
                            
                            <th>File</th>
                            <th>Date of Upload</th>

                        </tr>';
                        getTenders();
                 echo '</table>
                  </div>
                </div>';
                }
                // else if($id==5){
                //     echo '<div class="middleBox">
                //     <div class="title">
                //         MEDIA BYTES
                //     </div>
                //     <div class="headingPara">
                //        Page Under Construction.
                //   </div>
                // </div>';
                // }
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