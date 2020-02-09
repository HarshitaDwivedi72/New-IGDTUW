<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Device initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IGDTUW</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    

 <!-- <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500|Roboto&display=swap" rel="stylesheet"> -->
    <!-- main stylesheet -->
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/index1.css">

</head>

<body>
   

    <?php include 'header1.php';?>
    
    <?php include 'backend/indexdynamic.php';?>
    
    <div class="mainBox">
        <div class="container-fluid">
            <div class="flex-container-main">
            <div class="div1">
                    <div class="title">
                        QUICK LINKS
                    </div>
                    <!-- <marquee behavior="scroll" direction="up" onmouseover="this.stop();" scrollamount="3" onmouseout="this.start();"> -->

                        <ul>
                            <li> <a href="https://www.igdtuw.ac.in/images/stories/Latest%20News/IGDTUW%20UBA%20Banner.pdf" class="">Unnat Bharat Abhiyan</a> </li>
                            <li> <a href="https://www.igdtuw.ac.in/images/stories/Latest%20News/U-0685-.pdf" class="">AISHE 2018-19 </a></li>
                            <li> <a href="http://www.anveshanfoundation.org/" class="">Anvenshan Foundation (Business Incubator)</a></li>
                            <li> <a href="placements.php" class="">Placements</a></li>
                            
                        </ul>
                    <!-- </marquee> -->
                </div>
                <div class="slider">
                    <div class="w3-content w3-display-container">

                        <div class="w3-display-container mySlides">
                            <img src="images/first.jpg" style="width:100%">
                            <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                                Hon' ble Chancellor of IGDTUW, Lt. Governor Sh. Anil Baijal ji declares the first convocation ceremony of IGDTUW open on December 18, 2018.
                            </div>
                        </div>

                        <div class="w3-display-container mySlides">
                            <img src="images/second.jpg" style="width:100%">
                            <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                                Launch of UNNAT BHARAT ABHIYAN at IGDTUW,a flagship program of MHRD Govt. of India and release of its first newsletter
                            </div>
                        </div>

                        <div class="w3-display-container mySlides">
                            <img src="images/third.jpg" style="width:100%">
                            <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                                73rd Independence Day Celebration in IGDTUW
                            </div>
                        </div>



                        <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

                    </div>

                    <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);
                        var myIndex = 0;
                        carousel();

                        function plusDivs(n) {
                            showDivs(slideIndex += n);
                        }


                        function showDivs(n) {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            if (n > x.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = x.length
                            }
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            x[slideIndex - 1].style.display = "block";
                        }


                        function carousel() {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            myIndex++;
                            if (myIndex > x.length) {
                                myIndex = 1
                            }
                            x[myIndex - 1].style.display = "block";
                            setTimeout(carousel, 3000); // Change image every 3 seconds
                        }
                    </script>

                </div>
                <div class="latest-news">
                    <div class="title">
                        Important Updates
                    </div>
                    <marquee behavior="scroll" direction="up" onmouseover="this.stop();" scrollamount="3" onmouseout="this.start();">
                       
                        <ul>
                        <?php
                             getImportantupdates();
                           ?>
                            
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="flex-container">
            <div class="box-1">
                <div class="title">Vice Chancellor's Message
                </div>
                <div class="vcPhoto">
                    <img src="images/Pro_vc.png" alt="Dr(Mrs).Amita Dev">
                </div>
                <div class="vcMessage">
                    It feels great to be the wind beneath the wings of one of the top ranking Emerging Engineering Institutes of Technology in India. The devouring stride of IGDTUW, since its inception in 1998 as IGIT, has been exemplary, culminating in transforming itself
                    into an icon for women empowerment. To be a vibrant part of this illustrious edifice of teaching and learning is certainly a matter of stupendous pride and a new-found privilege for me.
                </div>
                <div class="vcQuote">
                    “YOU EDUCATE A MAN, YOU EDUCATE A MAN.<br>YOU EDUCATE A WOMAN, YOU EDUCATE A GENERATION.”
                </div>
                <a href="AboutUs.php?id=3" class="readmore"><i class="fa fa-hand-o-right"></i>&nbspRead More</a>
            </div>
            <script>
                function myBigBoxDiv(a){
                    console.log('started');
                    var box=document.getElementsByClassName('ENABox');
                    var boxT=document.getElementsByClassName('ENABoxTitle');
                    // boxT[a].classList.add('myturn');
                    console.log(a);
                    for (i = 0; i < 3; i++) {
                        boxT[i].classList.remove("myturn");
                        box[i].classList.remove("active");

                    }
                    boxT[a].classList.add("myturn");
                    box[a].classList.add("active");
                }
                </script>
            <div class="bigBox">
                <div class="title">
                    <ul class="bigBoxUl">
                        <li class="ENABoxTitle myturn" onclick="myBigBoxDiv(0)">Recent Events</li>
                        <li class="ENABoxTitle" onclick="myBigBoxDiv(1)">Notices/Circulars</li>
                        <li class="ENABoxTitle" onclick="myBigBoxDiv(2)">Achievements</li>
                    </ul>
                </div>
                <ul class="ENABox Events active">
                    <!-- <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=116&Itemid=288">Mini-Colloquium on "Trends and Challenges in Microelectronics and VLSI Design"  </a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Launch </a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>One week Faculty Development Program (FDP) on Artificial Intelligence from 22- 26 July, 2019   </a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Four Weeks Summer Internship on Cyber Security: Attack and Defence from 03rd June 2019 to 28th June 2019</a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>IGDTUW-Hacks First Hackathan of IGDTUW 1st-2nd June, 2019</a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Summer worshop on Data Science and Machine Learning 27th -31st May, 2019</a></li>
                    <li><a href="https://www.igdtuw.ac.in/images/stories/NIRF/NIRF%20DATA%20%202019.pdf"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Certificate for AISHE 2018-19</a></li>
                    <li><a href="https://www.igdtuw.ac.in/images/stories/Latest%20News/DSW%20office%20activities%20on%20women%20safety.pdf"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Activities of DSW Office on Women Safety</a></li> -->
                    <?php
                             getRecentEvents();
                    ?>
                    <a href="" class="readmore"><i class="fa fa-hand-o-right"></i>&nbspRead More</a>
                </ul>
                <ul class="ENABox Notices">
                    <?php 
                        getDynamicNotices();
                    ?>

                        <a href="" class="readmore"><i class="fa fa-hand-o-right"></i>&nbspRead More</a>
                </ul>
                
                <ul class="ENABox Achievements">
                        <?php getDynamicAchievements();?>
                        <a href="" class="readmore"><i class="fa fa-hand-o-right"></i>&nbspRead More</a>
                </ul>

            </div>
           
        </div>
    </div>
    
<!-- footer -->

<?php include 'footer1.php';?>

    <!-- 
                 <div class="col-sm-3 ">
 <div class="awardscontainer ">
                    <div>AWARDS AND ACCOLADES</div>

                    <marquee behavior="scroll " direction="up " onmouseover="this.stop(); " scrollamount="3 " onmouseout="this.start(); ">
                        <ul>
                            <li>
                                <a href=" "> IGDTUW received Mrs. Rahatun Nesa Ali Memorial ISTE National Award for Best Women Engineering College of India, 2018 in the field of Technical Education.</a>
                            </li>
                            <li>
                                <a href=" ">IGDTUW received Award from Indian Society for Technical Education for the Best Women Engineering College of India, 2018 to motivate the Women Engineers for the development of the nation through Women Empowerment.</a>
                            </li>
                            <li>
                                <a href=" "> Previous years Awards.</a>
                            </li>
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </div> -->


</body>

</html>