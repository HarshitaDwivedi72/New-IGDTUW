<!DOCTYPE html>
<html lang="en">

<head>
    
   
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/header.css">
    
</head>

<body>
    <!-- <script>
        var currentStyle=1;
        function changestyle(n) {

            $(".stylesheet").map(function() {
                
                var link=$(this).attr("href");
                var r=link.replace("style"+currentStyle, "style"+n);
                $(this).attr("href",r);
                currentStyle=n;
            }).get();
            
            
            // var link=$(".stylesheet").attr("href");
            // alert(count(link));
            // var r = link.replace("style"+currentStyle, "style"+n);
            // currentStyle=n;
            // $(".stylesheet").attr("href",link);
                
        }
    </script> -->

    <div class="setting_container">
        <span id="sbutton"><i class="fa fa-gear"></i></span>
        <span id="style1" onclick="changestyle(1)">1</span>
        <span id="style2" onclick="changestyle(2)">2</span>
        <span id="style3" onclick="changestyle(3)">3</span>
        <span id="style4" onclick="changestyle(4)">4</span>
    </div>
    <!-- header -->
    <div class="upperheadernav">
        <div class="container">
            <ul>
                <!-- <li><a href="tenders.php?id=5">MEDIA</a></li> -->
                <li><a href="tenders.php?id=4">TENDERS</a></li>
                <li><a href="tenders.php?id=3">CAREERS</a></li>
                <li> <a href="tenders.php?id=2">FACILITIES</a></li>
                <li> <a href="tenders.php?id=1">ARCHIVES</a></li>
                
            </ul>
        </div>
    </div>
    <header class="container">
        <div class="headContainer">
            <div class="header">

                <a href="index.php" class="logo" target="_blank">
                    <img src="images/log.jpg" alt="IGDTUW logo" height="100px" width="auto" />
                </a>

                <div class="heading">
                    <div id="mainHeading">INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</div>
                    <div id="secondHeading">(Established by Govt. of Delhi wide Act 9 of 2012)</div>
                    <div id="thirdHeading">(Formerly Indira Gandhi Institute of Technology)</div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container responsive-container" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                      </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="AboutUs.php">ABOUT US
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="AboutUs.php?id=1">Institute's History</a></li>
                                <li><a href="AboutUs.php?id=2">Vision/Mission</a></li>
                                <li><a href="AboutUs.php?id=3">Vice Chancellor</a></li>
                                <li><a href="AboutUs.php?id=4">Registrar</a></li>
                                <li><a href="AboutUs.php?id=5">Statutory Bodies</a></li>
                                <li><a href="AboutUs.php?id=10">Administration</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="departments.php">DEPARTMENTS
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="appliedScience.php">Applied Sciences & Humanities</a></li>
                                <li><a href="computerScience.php">Computer Science & Engineering</a></li>

                                <li><a href="ece.php">Electronics & Communication Engineering</a></li>
                                <li><a href="itdepartment.php">Information Technology</a></li>
                                <li><a href="architecture.php">Architecture and Planning</a></li>
                                <li><a href="mechanical.php">Mechanical & Automation Engineering</a></li>


                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">ACADEMICS
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Academics.php?id=1">Dean Academic Affairs</a></li>
                                <li><a href="Academics.php?id=2">Programmes Offered</a></li>
                                <li><a href="Academics.php?id=3">Scheme & Syllabus</a></li>
                                <li><a href="Academics.php?id=5">Time Table</a></li>
                                <li><a href="Academics.php?id=4">Academic Calender</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"  href="">STUDENT LIFE
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="studentlife.php?id=1">Dean (Student Welfare)</a></li>
                               <li><a href="studentlife.php?id=2">Clubs & Societies</a></li>
                               <li><a href="studentlife.php?id=3">Student Notice Board</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"  href="Research.php">RESEARCH 
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               
		<li><a href="Research.php?id=1" id="1">Dean(IRD & R&C)</a></li>
                      <li><a href="Research.php?id=2" id="2">Ph.D Guidelines</a></li>
                      <li><a href="Research.php?id=3" id="3">Research Areas</a></li>
                      <li><a href="Research.php?id=4" id="4">Research Scholars</a></li>
                      <li><a href="Research.php?id=5" id="5">University Approved Supervisors</a></li>
                      <li><a href="Research.php?id=6" id="6">Forms and Applications</a></li>
                      <li><a href="Research.php?id=7" id="7">Ongoing Research Projects</a></li>
 
                           </ul>
                        </li>
                        <!-- <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"  href="">PLACEMENTS
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="">TPOs</a></li>
                               <li><a href="">Companies Visited</a></li>
                               <li><a href="">Placement Record</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"  href="Admission.php?id=1">ADMISSIONS
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="Admission.php?id=1">Admission Officers</a></li>
                               <li><a href="Admission.php?id=2">Admission Notices</a></li>
                               <li><a href="Admission.php?id=3">Hostel Admissions</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"  href="">EXAMINATIONS                           
                             <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="">Dean (Examinations)</a></li>
                               <li><a href="">Date Sheet</a></li>
                               <li><a href="">Notices</a></li>
                               <li><a href="">Results</a></li>
                               <li><a href="">Exam Portal</a></li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"  href="">STUDENT LIFE
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href=""></a></li>
                               <li><a href=""></a></li>
                               <li><a href=""></a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>