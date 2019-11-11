<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script>
        function changestyle(n) {
            if (n == 1) {
                $("#stylesheet").attr("href", "stylesheet/style1.css");
            } else if (n == 2) {
                $("#stylesheet").attr("href", "stylesheet/style2.css");
            } else if (n == 3) {
                $("#stylesheet").attr("href", "stylesheet/style3.css");
            } else if (n == 4) {
                $("#stylesheet").attr("href", "stylesheet/style4.css");
            }
        }
    </script>

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
                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=90:abouttnp&catid=2:1&Itemid=428">PLACEMENTS</a></li>
                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=161&Itemid=38">LIBRARY</a></li>
                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=346:rti&catid=2:1">RTI</a></li>
                <li> <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=252:tendersniq&catid=2:1">TENDERS</a></li>
                <li> <a href="https://www.google.com/a/igit.ac.in/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/a/igit.ac.in/&ss=1&ltmpl=default&ltmplcache=2&emr=1">WEBMAIL</a></li>
                <li> <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=301:directory&catid=2:1&Itemid=545">DIRECTORY</a></li>
            </ul>
        </div>
    </div>
    <header class="container">
        <div class="headContainer">
            <div class="header">

                <a href="index.html" class="logo" target="_blank">
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
            <div class="container">
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
                            <a class="dropdown-toggle" data-toggle="dropdown" href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=1&Itemid=2">ABOUT US
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=2&Itemid=3">Vision/Mission</a></li>
                                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=601&Itemid=833">VC's Message</a></li>

                                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=467&Itemid=4">Founder VC's Message</a></li>
                                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=503&Itemid=529">Registrar's Message</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="departments.php">DEPARTMENTS
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="appliedScience.php">Applied Sciences & Humanities</a></li>
                                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=3&Itemid=16">Computer Science & Engineering</a></li>

                                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=115&Itemid=17">Electronics & Communication Engineering</a></li>
                                <li><a href="itdepartment.php">Information Technology</a></li>
                                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=480&Itemid=712">Architecture and Planning</a></li>
                                <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=31&Itemid=18">Mechanical & Automation Engineering</a></li>


                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="https://www.igdtuw.ac.in/index.php#">ACADEMICS
                              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=275&Itemid=201">B.Tech</a>
                                </li>
                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=480&Itemid=713">B.Arch</a>
                                </li>
                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=276&Itemid=453">M.Tech</a>
                                </li>
                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=66&Itemid=476">MCA</a>
                                </li>
                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=610&Itemid=196">Academic Calender</a>
                                </li>
                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=305&Itemid=200">Scholarships</a>
                                </li>
                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=240&Itemid=197">Syllabus</a>
                                </li>
                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=624&Itemid=198">Time Table</a>
                                </li>

                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=332&Itemid=443">Lesson Plans</a>
                                </li>

                                <li>
                                    <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=345&Itemid=593">Assignments</a>
                                </li>

                            </ul>


                        </li>
                        <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=175&Itemid=21">STUDENT LIFE</a></li>
                        <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=165&Itemid=35">FACILITIES</a></li>
                        <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=414&Itemid=588">EXAMINATION</a>
                        </li>

                        <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=442&Itemid=804">RESEARCH</a></li>
                        <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=595&Itemid=594">ADMISSSION</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>