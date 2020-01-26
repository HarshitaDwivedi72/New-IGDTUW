<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Life</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="stylesheet/style1/studentlife.css">
    
   

<!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> -->
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
    <!-- main body -->

    <div class="container">
        <div class="row">




            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        <a href="placements.php">Training and Placement Cell</a>
                    </div>
                    <ul class="sidenav">
                        <li><a href="placements.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Visiting Companies</a></li>
                        <li><a href="placements.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Yearwise Placements</a></li>
                        <li><a href="placements.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Training and Placements Contacts</a></li>


                    </ul>

                </div>
            </div>

           
            <div class="col-sm-9">
                <?php 
                
                if($id==1)
                {
                    echo '  <div class="middleBox">
                                    <div class="title">Visiting Companies
                                    </div>
							
                                    
                            </div>';
                }
             
               
                else{
                    echo '<div class="middleBox">
                                <div class="title">
                                 Training and Placement Cell
                                </div>
                                <div class="headingPara">
                                 The Training and Placement Cell facilitates the campus placement program at IGDTUW. The cell comprises of highly energetic and dynamic team of students and faculty members with Dr. Jasdeep Kaur Dhanoa and Dr. N. R. Chauhan as Training & Placement Officers.
                                 <br><br>
								 The team is consistently striving to enhance the quality and quantity of the placements in the university. Various seminars are being organized on regular basis for the development of the students to improve their communication skills and their personality.
                                 <br><br>
								 The University T&P Cell facilitates multiple job offers to the eligible students of IGDTUW year after year. During the recruitment drive around 52 companies visited the campus. To name a few prestigious companies like Microsoft, Adobe, Cisco, SAP Labs, Oracle, Qualcomm, Mahindra & Mahindra, General Motors, Cognizant, Aricent, Tata Consultancy Services, Yamaha Motors, Hindustan Unilever, IBM India visit IGDTUW campus for placements and internships</div>
                         </div>';
                }
			   
                ?>
            </div>
        
        </div>
    </div>
    
    <!-- footer -->
    <br>
    <br>
    
    <?php include 'footer.php';?>

</body>

</html