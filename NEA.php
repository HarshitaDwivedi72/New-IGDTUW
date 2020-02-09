<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NEA</title>
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
    <?php include 'backend/indexdynamic.php'?>
    
    <!-- Main body -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        RELATED LINKS
                    </div>
                    <ul class="sidenav">
                      <li><a href="NEA.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Recent Events</a></li>
                      <li><a href="NEA.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Notices/Circulars</a></li>
                      <li><a href="NEA.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Achievements</a></li>
                    </ul>
                </div>
            </div>
           <div class="col-sm-9">
              <?php
                    if($id==1)
                        {
                        echo '
                                <div class="middleBox">
                                    <div class="title">
                                        RECENT EVENTS
                                    </div>
                                    
                                    <div class="headingPara">
                                            <ul>';
                                            getRecentEvents();
                                     echo '</ul>
                                    </div>
                                </div>
                                ';
                        }
                    if($id==2)
                        {
                        echo '
                        <div class="middleBox">
                        <div class="title">
                            NOTICES/CIRCULARS
                        </div>
                        <div class="headingPara">
                            <ul>';
                            getDynamicNotices();
                            echo '
                                </ul>
                            </div>
                        </div>';
                    }
                    if($id==3)
                    {
                    echo '
                    <div class="middleBox">
                    <div class="title">
                    ACHIEVEMENTS
                    </div>
                    <div class="headingPara">
                            <ul>
                            
                            ';
                            getDynamicAchievements();
                            echo '
                                </ul>
                        </div>
                    </div>';
                    }

                ?>
            </div>
        </div>
    </div>

      <br><br>
    <!-- footer -->
    <?php include 'footer.php'?>
  </body>
</html>
