<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Device initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IGDTUW</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500|Roboto&display=swap" rel="stylesheet">
    <!-- main stylesheet -->
    <link rel="stylesheet" id="stylesheet" href="stylesheet/style1.css">

</head>

<body>
   

    <?php include 'header/header.php';?>
    
    <div class="mainBox">
        <div class="container">
            <div class="flex-container">

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
                        Latest News
                    </div>
                    <marquee behavior="scroll" direction="up" onmouseover="this.stop();" scrollamount="3" onmouseout="this.start();">

                        <ul>
                            <li> <a href="https://www.igdtuw.ac.in/images/stories/admission%20downloads/Message%20of%20Honble%20VC%20IGDTUW.pdf" class="">Message of Hon'ble Vice Chancellor for Newly Admitted Students</a></li>
                            <li> <a href="http://aist2019.com/" id="active">International Conference on Artificial Intelligence and Speech Technologies(AIST, 2019) from 14-15 November, 2019 </a></li>
                            <li> <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=254" class="">Advertisement, Guidelines and Application Form for various posts in Incubation Centre, IGDTUW </a></li>
                            <li><a href="https://www.aicte-india.org/sites/default/files/Guidelines_CVA_2019.pdf" class="">AICTE Vishwakarma Awards 2019, For Information Click here</a></li>
                            <li>
                                <a href="#"> <a href="https://swayam.gov.in/"> MHRD has launched Annual Refresher Program for Faculty of Computer Engg, an Online Course on SWAYAM starting 1st Oct 2019</a></a>
                            </li>
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
                <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=601&Itemid=833" class="readmore"><i class="fa fa-hand-o-right"></i>&nbspRead More</a>
            </div>
            <div class="box-1">
                <div class="title">
                    Recent Event @ IGDTUW
                </div>
                <ul>
                    <!-- <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=116&Itemid=288">Mini-Colloquium on "Trends and Challenges in Microelectronics and VLSI Design"  </a></li> -->
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326">Launch of Unnat Bharat Abhiyan and 1st LAC meeting of UBS Cell IGDTUW  </a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326">One week Faculty Development Program (FDP) on Artificial Intelligence from 22- 26 July, 2019   </a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326">Four Weeks Summer Internship on Cyber Security: Attack and Defence from 03rd June 2019 to 28th June 2019</a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326">IGDTUW-Hacks First Hackathan of IGDTUW 1st-2nd June, 2019</a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326">Summer worshop on Data Science and Machine Learning 27th -31st May, 2019</a></li>
                </ul>
                <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=326" class="readmore"><i class="fa fa-hand-o-right"></i>&nbspRead More</a>


            </div>
            <div class="box-1">
                <div class="title">
                    Links for E-Learning
                </div>
                <div class="links" id="smallFont">
                    <ul>
                        <li><a href="https://www.igdtuw.ac.in/images/stories/Latest%20News/IGDTUW%20UBA%20Banner.pdf"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Invitation to participate in Unnat Bharat Abhiyan</a></li>
                        <li><a href="https://www.igdtuw.ac.in/images/stories/Latest%20News/Ceritificate%20from%20SWE.jpeg"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Certificate of Accreditation from The Society of Women Engineers </a></li>
                        <li><a href="https://www.igdtuw.ac.in/images/stories/Latest%20News/U-0685-.pdf"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Certificate for AISHE 2018-19</a></li>
                        <li><a href="https://www.igdtuw.ac.in/images/stories/NIRF/NIRF%20DATA%20%202019.pdf"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Certificate for AISHE 2018-19</a></li>
                        <li><a href="https://www.igdtuw.ac.in/images/stories/Latest%20News/DSW%20office%20activities%20on%20women%20safety.pdf"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Activities of DSW Office on Women Safety</a></li>
                        <li><a href="http://www.anveshanfoundation.org/"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Anvenshan Foundation (Business Incubator)</a></li>
                        <li><a href="http://nptel.ac.in/"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>NPTEL</a></li>
                        <li><a href="https://spoken-tutorial.org/"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Spoken Tutorial</a></li>
                        <li><a href="http://dpl.gov.in/"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Delhi Public Library</a></li>
                        <li><a href="http://wcd.nic.in/act/handbook-sexual-harassment-women-workplace"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Handbook on Sexual Harassment of Women at Workplace </a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="box-2">
            <div class="title">
                Useful Links
            </div>
            <div class="flex-container">
                <ul>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=227&Itemid=427"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>NOTICES/CIRCULARS</a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=254"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>RECRUITMENT</a></li>
                    <!-- <li><a href="#">AWARDS AND ACCOLADES</a></li> -->
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=132&Itemid=34"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>IT SERVICES</a></li>
                    <li><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=176&Itemid=651"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>ADMINISTRATION</a></li>
                    <li><a href="https://www.igdtuw.ac.in/images/stories/IGDTUW%20-%20Privacy%20Policy.pdf"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>IGDTUW PRIVACY POLICY</a></li>
                    <li class="hideOnSmall"><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=90:abouttnp&catid=2:1&Itemid=428"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Placements</a></li>
                    <li class="hideOnSmall"><a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=161&Itemid=38"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>LIBRARY</a></li>

                </ul>
                <ul>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=24&Itemid=22"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Technical Societies</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=140&Itemid=23"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Societies Founded/Promoted</a>
                    </li>

                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=131&Itemid=24"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Clubs</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=171&Itemid=26"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Festivals</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=67&Itemid=27"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Hostel Services</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=77&Itemid=29"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Sports</a>
                    </li>

                </ul>
                <ul>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=624&Itemid=198"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=165&Itemid=35"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Dispensary</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=278&Itemid=456"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Computer Center</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=279&Itemid=457"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Bank</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=281&Itemid=458"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Guest House</a>
                    </li>
                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=282&Itemid=459"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Common Room</a>
                    </li>

                    <li>
                        <a href="https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=67&Itemid=461"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Hostel</a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
<!-- footer -->

<?php include 'footer/footer.php';?>

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