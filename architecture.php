<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Architecture & Planning</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500|Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="index.css"> -->
    
    <link rel="stylesheet" href="stylesheet/style1/departments.css">



</head>

<body  onload="main()">
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
    <!-- main body -->
    <!-- main body -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        ARCHITECTURE AND PLANNING
                    </div>
                    <ul class="sidenav">
                        
                        <li><a ><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>HOD STATEMENT</a></li>

                        <li><a ><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Faculty Directory</a></li>

                        <li><a ><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>FACULTY ACHIEVEMENTS</a></li>

                        <li><a ><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Events/Workshops/Seminars</a></li>

                        <li><a><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Labs</a></li>

                        <li><a><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>STUDENT ACHIEVEMENTS</a></li>

                        <li><a><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>PHOTO GALLERY</a></li>

                    </ul>

                </div>
            </div>
            <div class="col-sm-9">
                <div class="box-1">
                    <div class="title">
                        DEPARTMENT OF ARCHITECTURE AND PLANNING
                    </div>
                    <div class="headingPara">
                            The Department of Architecture and Planning started in 2015 as a step towards social equity and gender parity in technical professions, having a vision that architectural education should empower students to become protagonist of positive change by exploring, learning and practicing a sustainable form of architecture. The architectural education must, besides imparting knowledge, also endeavor to create opportunities for students to engage with real life issues, so that they can reflect on their role in creating a better world. Further, it is also important that students are empowered to make informed choices, which are more life-sustaining. The department aims at development of the individual girl as a responsible member of peaceful, pluralist and inclusive society by learning to explore and practicing quality, sustainable form of architecture. 


                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        QUICK LINKS - Architecture and Planning
                    </div>
                    <ul class="sidenav">
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Timetable</a></li>
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Course Structure</a></li>
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus 1st year (CBCS)</a></li>
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus 3rd Year</a></li>
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus 4th Year</a></li>
                        <li><a href=""><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus 5th Year</a></li>

                        
                    </ul>


                    
                </div>
            </div>
        </div>
    </div>
   
 <br>
   <br>
    <!-- footer -->
    <?php include 'footer.php';?>

</body>

</html