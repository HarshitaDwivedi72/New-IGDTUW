<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT Department</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500|Roboto&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="departments/itdepartment/itdepartment.css">
    
   


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
    <style>
        
    </style>

    <!-- header -->
    <?php include '../../header/header.php';?>
    <!-- main body -->

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        INFORMATION TECHNOLOGY
                    </div>
                    <ul class="sidenav">
                        <li><a href="itdepartment.php?id=1" id="1" >Objectives</a></li>
                        <li><a href="itdepartment.php?id=2" id="2">Head Of Department</a></li>
                        <li><a href="itdepartment.php?id=3" id="3">Faculty Directory</a></li>
                        <li><a href="itdepartment.php?id=4" id="4">Achievements</a></li>
                        <li><a href="itdepartment.php?id=5" id="5">Events/Workshops/Seminars</a></li>
                        <li><a href="itdepartment.php?id=6" id="6">Labs</a></li>
                        <li><a href="itdepartment.php?id=7" id="7">Placement</a></li>

                    </ul>

                </div>
            </div>
            <div class="col-sm-6">

                <?php 
                
                if($id==1)
                {
                    echo '<div class="box-1">
                        <div class="title">
                            Objectives
                        </div>
                        <div class="headingPara">

                            Creating an environment of excellence in teaching and research by raising the quality and standards of education and make it globally competitive, and locally relevant.

                            <ul>

                                <li>To converge as an Open, evolving community invested in creating, preserving, and translating knowledge.</li>
                                <li>To manage IT as a strategic resource.</li>
                                <li>To serve as an “incubator” by offering dedicated programs and courses that encourage faculty and student idea generation.</li>
                                <li>Create a technology-enriched environment for learning that is both effective as an aid in supporting the experiences of teaching and learning and is instructive by reflecting the technology environment graduates will work in after leaving
                                    IGDTUW.
                                </li>
                                <li>To advance knowledge through research and scholarly activity.</li>

                            </ul>
                        </div>
                    </div>';
                }
                else if($id==2){
                echo '<div class="box-1">
                <div class="title">
                Head Of Department
                </div>
                <div class="profile">
                <div class="">Dr. Arun Sharma</div>
                <div class="">(Associate Professor & Head</div>
                <img src="" alt="Dr. Arun Sharma">
                </div>
                <div class="headingPara">
                Dr. Arun Sharma, is presently Associate Professor and Head of the IT Department. He completed his PhD Degree from Thapar University, Patiala in 2009. Prior to this, he did M.Sc. (Applied Mathematics) from University of Roorkee (now IIT Roorkee) in 1994
                and M. Tech. (CSE) from Punjabi University, Patiala in 1997. He has a vast teaching experience of approx 20 years in various reputed Govt. and Pvt. Institutions. His areas of interests include Big Data, Data Mining, Software Engineering and
                Soft Computing Approaches. He has published more than 60 papers (SCI/SCIE/SCOPUS and others) in international journals and conferences including IEEE, ACM, Springer, Elsevier, Wiley, IGI Global and several others. Dr. Sharma is a Senior Member
                of IEEE and Life Member of Computer Society of India and is actively involved in various activities of these societies. He has been the Chairman of Computer Society of India (CSI) - Ghaziabad Chapter for 2015-16. He has been awarded by CSI
                in its annual convention for his significant contribution. Dr Sharma was included in World’s Who’s Who by Marquis, USA in 2013. He is also on the panel of Experts and member of Board of Studies for various reputed Universities and institutions.
                </div>
                        ';
                }
                else{
                    echo '<div class="box-1">
                            <div class="title">
                                DEPARTMENT OF IT
                            </div>
                            <div class="headingPara">

                                Department of IT aims to prepare students to undertake careers involving innovation and problem solving using IT, or to undertake advanced studies for research careers in IT. It aims to emerge as a centre of excellence in leveraging information technology
                                to stimulate the exchange and creation of knowledge for intellectual, social, political, moral and material development of the society. The teaching pedagogy in the department aims to bridge the gap between principles and applications
                                with the goal to apply knowledge of computing sciences for solving real world problems.
                            </div>

                        </div>';
                }
                ?>
            </div>
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        QUICK LINKS - IT
                    </div>
                    <ul class="sidenav">
                        <li><a href="">B.Tech (IT) - Syllabus</a></li>
                        <li><a href="">MCA - Syllabus 1st year</a></li>
                        <li><a href="">MCA - Syllabus 2nd year</a></li>
                        <li><a href="">MCA - Syllabus 3rd year</a></li>
                        <li><a href="">M.Tech (ISM) Syllabus</a></li>
                        <li><a href="">Lab Manuals</a></li>
                    </ul>
                    <hr>
                    <div class="sideHeading">
                        Time Table
                    </div>
                    <ul class="sidenav">
                        <li><a href="">B.Tech</a></li>
                        <li><a href="">M.Tech</a></li>
                        <li><a href="">MCA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
   <!-- <div class="box-1">
        <div class="title">
            Head Of Department
        </div>
        <div class="profile">
            <div class="">Dr. Arun Sharma</div>
            <div class="">(Associate Professor & Head</div>
            <img src="" alt="Dr. Arun Sharma">
        </div>
        <div class="headingPara">
            Dr. Arun Sharma, is presently Associate Professor and Head of the IT Department. He completed his PhD Degree from Thapar University, Patiala in 2009. Prior to this, he did M.Sc. (Applied Mathematics) from University of Roorkee (now IIT Roorkee) in 1994
            and M. Tech. (CSE) from Punjabi University, Patiala in 1997. He has a vast teaching experience of approx 20 years in various reputed Govt. and Pvt. Institutions. His areas of interests include Big Data, Data Mining, Software Engineering and
            Soft Computing Approaches. He has published more than 60 papers (SCI/SCIE/SCOPUS and others) in international journals and conferences including IEEE, ACM, Springer, Elsevier, Wiley, IGI Global and several others. Dr. Sharma is a Senior Member
            of IEEE and Life Member of Computer Society of India and is actively involved in various activities of these societies. He has been the Chairman of Computer Society of India (CSI) - Ghaziabad Chapter for 2015-16. He has been awarded by CSI
            in its annual convention for his significant contribution. Dr Sharma was included in World’s Who’s Who by Marquis, USA in 2013. He is also on the panel of Experts and member of Board of Studies for various reputed Universities and institutions.
        </div>

    </div>
    <div class="box-1">
        <div class="title">Faculty Directory Of Information Technology</div>
        <div class=""></div>
    </div> -->





    <!-- footer -->
    <br>
    <br>
    <?php include '../../footer/footer.php';?>

</body>

</html