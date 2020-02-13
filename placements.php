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

    <link rel="stylesheet" href="stylesheet/style1/placements.css">

    <!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> -->
</head>

<body onload="main()">

    <script>
        function myFunctiong() {
            var x = document.getElementById("2015-2016");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction1() {
            var x = document.getElementById("2017-2018");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction2() {
            var x = document.getElementById("2016-2017");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction3() {
            var x = document.getElementById("2014-2015");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction4() {
            var x = document.getElementById("2013-2014");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction5() {
            var x = document.getElementById("2012-2013");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction6() {
            var x = document.getElementById("2011-2012");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction7() {
            var x = document.getElementById("2010-2011");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

    <script>
        function main() {

            var r = <?php echo $_GET['id'];?>;
            $('#' + r).addClass('high');
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
                                    <div class="title">Visiting Companies</div>
                                     <p>
								       <span style="font-size:15px"><strong>Following are the companies visiting the IGDTUW Campus</strong></span>
									</p>

           <table>

				<tr>
				  <td>
				   <img src="logo/1200px-ABB_logo.svg.png" alt="Images" class="responsive" width="500" height="300"></td>
                  <td>
				    <img src="logo/accneture.PNG" alt="Images" class="responsive" width="500" height="300"></td>
                  <td>
				     <img src="logo/adobe.jpeg" alt="Images" class="responsive" width="500" height="300"></td>
				  <td>
					<img src="logo/amazon-logo.jpg" alt="Images" class="responsive" width="500" height="300"></td>
                </tr>
                <tr>
                  <td>
				    <img src="logo/aricent.png" alt="Images" class="responsive" width="500" height="300"></td>
                  <td>
				    <img src="logo/azcom.jpg" alt="Images" class="responsive" width="500" height="300"></td>
                 <td>
				    <img logo/barclays.png" alt="Images" class="responsive" width="500" height="300"></td>
                 <td>
                   <span style="color:#A52A2A"><strong><span style="font-size:14px">BCS</span></strong></span></td>
                </tr>
				<tr>
				   <td><span style="color:#A52A2A"><strong><span style="font-size:14px">Blackrock</span></strong></span></td>
                   <td><img src="logo/blackstone.png" alt="Images" class="responsive" width="500" height="300"></td>
                   <td><img src="logo/Bosch.png" alt="Images" class="responsive" width="500" height="300"></td>
                   <td><img src="logo/buuzworks.jpg" alt="Images" class="responsive" width="500" height="300"></td>
                </tr>
				<tr>
				   <td><span style="color:#A52A2A"><strong><span style="font-size:14px">Capital IQ</span></strong></span></td>
                   <td><img src="logo/cdot.png" alt="Images" class="responsive" width="500" height="300"></td>
                   <td><img src="logo/cisco.png" alt="Images" class="responsive" width="500" height="300"></td>
                   <td><img src="logo/cognizant.png" alt="Images" class="responsive" width="500" height="300"></td>
                </tr><tr>
				   <td><img src="logo/CSC.png" alt="Images" class="responsive" width="500" height="300"></td>
				   <td><img src="logo/crimson-logic.jpg" alt="Images" class="responsive" width="500" height="300"></td>
                   <td><img src="logo/cummins.png" alt="Images" class="responsive" width="500" height="300"></td>
                   <td><img src="logo/E&Y.png" alt="Images" class="responsive" width="500" height="300"></td>
                </tr><tr>
				   <td><img src="logo/eaton.png" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/ericsson.jpg" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/Expedia.jpg" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/flipkart.jpg" alt="Images" class="responsive" width="500" height="300"></td>
</tr><tr><td><img src="logo/fluor_daniel.png" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/G4S.svg.png" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/GE.jpg" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/GM.svg.png" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><img src="logo/hero.jpg" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/Hike.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/Hindustan_unilever.svg.png" alt="images" class="responsive" width="500" height="300"></span></td>
<td><img src="logo/honeywell.png" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><span style="color:#A52A2A"><strong><span style="font-size:14px">HT</span></strong></span></td>
<td><img src="logo/honda.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/ibm.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/icat.png" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><span style="color:#A52A2A"><strong><span style="font-size:14px">Impetus</span></strong></span></td>
<td><img src="logo/infoedge.jpg" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/Intel.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/Intelligrape.jpg" alt="images" class="responsive" width="500" height="300"></span></td>
</tr><tr><td><img src="logo/Intuit.svg.png" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/jetsynthesys.png" alt="Images" class="responsive" width="500" height="300"></td>
<td><span style="color:#A52A2A"><strong><span style="font-size:14px">Joshz Technologies</span></strong></span></td>
<td><img src="logo/libsys.png" alt="Images" class="responsive" width="500" height="300"></td>
</tr><tr><td><span style="color:#A52A2A"><strong><span style="font-size:14px">Lurgi AG India Ltd.</span></strong></span></td>
<td><img src="logo/microsoft.png" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/mahindra.png" alt="Images" class="responsive" width="500" height="300"></td>
<td><img src="logo/Maruti-Suzuki.jpg" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><img src="logo/images_and_Company.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/newgen.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/niit.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/oxigen.jpg" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><img src="logo/oracle.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/operasolutions.jpg" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/pentair.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/qualcomm.png" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><img src="logo/sap.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/sabrepng.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/sk_e&c.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/samsung.png" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><img src="logo/snapdeal.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/Standard-Chartered.jpg" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/suncore_microsystem.jpeg" alt="images" class="responsive" width="500" height="300"></td>
<td><span style="color:#A52A2A"><strong><span style="font-size:14px">Tavant</span></strong></span></td>
</tr><tr><td><img src="logo/tcs.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/tech-mahindra.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/thoughtfocus.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/thoughtworks.jpg" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><img src="logo/tssc.jpg" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/tvs.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/vinsol.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/visa.png" alt="images" class="responsive" width="500" height="300"></td>
</tr><tr><td><span style="color:#A52A2A"><strong><span style="font-size:14px">WeekendR</span></strong></span></td>
<td><img src="logo/yamaha.png" alt="images" class="responsive" width="500" height="300"></td>
<td><img src="logo/ZS_Associates.jpg" alt="images" class="responsive" width="500" height="300"></td>
<td> </td>
</tr></table>

                            </div>';
                }

              else if($id==2){ echo '
<div class="middleBox">
    <div class="title">
        PLACEMENT DETAILS
    </div>
    &nbsp&nbsp<button onclick="myFunction1()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Batch 2017-18</button>
    <p></p>
    <div class="over" id="2017-2018" style="display: none;">
        <p style="text-align:center;"> Placement Details 2017-2018
        </p>
        <table align="center" cellspacing="0">
            <tbody>
                <tr>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>Name of the Company</strong>
                    </td>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>No. of offer(s)</strong>
                    </td>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>Name of the Company</strong>
                    </td>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>No. of offer(s)</strong>
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Accenture
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        51
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ARM*
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        13
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Adobe
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Nestle
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Amazon
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        9
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Netapp*
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Azcom Technology
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        7
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Oracle
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        14
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Blackstone
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Orange Business Services
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Cisco
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        9
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        SAP Labs
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Coding Blocks
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TCS
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        52
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Deutsche Bank
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ThoughtWorks
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Dell
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        11
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Zillious
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Expedia
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        9
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TATA Power
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        FICO*
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Siemens
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        GE Digital
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        9
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        General Motors
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        GE Edison
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Mahindra and Mahindra
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Hero MotoCorp
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TATA Motors
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        15
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Honda
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        EATON
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        16
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Hughes Communications
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Suez Water Technology & Solutions
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        HUL
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Anand Automotive
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        InfoEdge
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Saint Gobain
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Intuit
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        7
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TATA Communication
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ION Trading
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        7
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Zopper
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        LIBSYS
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ExxonMobil
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Macquarie
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        FluorDaniel
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        11
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Maruti Suzuki
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        NIIT Technologies
                        <p>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Microsoft IDC
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        8
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        HSBC
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Mobiquel*
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                </tr>
            </tbody>
        </table>
        </p>
        </td>
    </div>
    &nbsp&nbsp<button onclick="myFunction2()"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Batch 2016-17 </button>
    <p></p>
    <div id="2016-2017" style="display: none;">
        <p style="text-align:center;"> Placement Details 2016-2017
        </p>
        <table align="center" cellspacing="0">
            <tbody>
                <tr>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>Name of the Company</strong>
                    </td>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>No. of offer(s)</strong>
                    </td>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>Name of the Company</strong>
                    </td>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>No. of offer(s)</strong>
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Accenture
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        67
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Microsoft GD
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        17
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Adobe
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Mobiquel
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Amazon
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        8
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Nestle
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Amazon Non Tech
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        NetApp
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Anand Group
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        NIIT Technologies
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        9
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ARM
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Opera Solutions
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Axtria
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Oracle
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Azcom
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Qualcomm
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Blackstone
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Sabre
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        9
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        BlueJay Finlease Ltd.
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        SAP Labs
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Cisco
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        14
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ShopClues
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Coviam
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TAL Manufacturing
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Denso
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Tata Motors
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Dr Reddy
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TCS
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        68
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Eaton
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        7
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Thought Works
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Ernst and Young
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TrueChip
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Expedia
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        VISA
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        FICO
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Yamaha
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        HoneyWell
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        GE Aviation
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Intel
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        General Motors
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        HUL
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        GreyOrange
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Intuit
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        8
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        LeadSquared
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        7
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Keysight Technologies
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Libsys
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Mahindra &amp; Mahindra
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        10
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    &nbsp&nbsp<button onclick="myFunctiong()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Batch 2015-16</button>
    <p></p>
    <div id="2015-2016" style="display: none;">
        <p style="text-align:center;"> Placement Details 2015-2016
        </p>
        <table align="center" style=" border: 1px solid #03224435 " cellspacing="0">
            <tbody style=" border: 1px solid #03224435">
                <tr>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>Name of the Company</strong>
                    </td>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>Number of offer(s)</strong>
                    </td>
                    <td style=" padding:10px; border: 1px solid #03224435">
                        <strong>Name of the Company</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>Number of offer(s)</strong>
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ABB
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Incture
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Accenture
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        30
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Infoedge
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Adobe
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Intel
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Amazon
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        7
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Intelligrape (To The New Digital)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Azcom
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Intuit
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Barclays
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Libsys
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        BCS
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Maruti Suzuki
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Blackstone
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Microsoft GD
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Bosch
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Microsoft IT
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        8
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Cisco
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        14
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        NIIT
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        E&amp;Y
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Opera Solutions
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Eaton
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Oracle
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        10
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Ericsson
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        40
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Oracle ( Cloud &amp; Infrastructure)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Expedia
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Oxigen
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Fluor Daniel
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        25
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Sabre
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        G4S
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        SAP Labs
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        GE
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Snapdeal
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        GE Aviation
                    </td>
                    <td>
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Suncore Microsystem
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        13
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        General Motors
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TCS
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        97
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Hero Motor corps
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Tech Mahindra
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Honda (R&amp;D)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Thoughtworks
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Honda Motors
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Visa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                </tr>
                <tr>
                    <td>
                        IBM
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        36
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ZS Associates
                    </td>
                    <td>
                        <p>4</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
    </div>

    &nbsp&nbsp<button onclick="myFunction3()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Batch 2014-15</button>
    &nbsp;
    <p></p>
    <div id="2014-2015" style="display: none;">
        <p style="text-align:center;"> Placement Details 2014-2015
        </p>
        <table border="2">
            <tbody>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>Title</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>Download</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>Date of upload</strong></td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <p><strong><span style="font-family:times new roman,serif; font-size:12pt">Placement status of 2015 Batch </span></strong></p>
                    </td style=" padding:3px; border: 1px solid #03224435">
                    <td style=" padding:3px; border: 1px solid #03224435 padding-left: 5px;"><a href="sites/default/files/placed&#32;student&#32;2015&#32;data.pdf"><strong>PDF</strong></a></td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <p><strong><span style="font-family:times new roman,serif; font-size:12pt">17-07-2015</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <p><strong><span style="font-family:times new roman,serif; font-size:12pt">Placement status of M.Tech (ISM)</span></strong></p>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435 padding-left: 5px;"><a href="sites/default/files/ISM&#32;PLACEMENT&#32;STATUS&#32;2013-15&#32;batch.pdf"><strong>PDF</strong></a></td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <p><strong><span style="font-family:times new roman,serif; font-size:12pt">09-07-2015</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <p><strong><span style="font-family:times new roman,serif; font-size:12pt">Placement status 2014-15</span></strong></p>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435"><a href="sites/default/files/Placement&#32;Status&#32;11&#32;Dec&#32;14.pdf"><strong>PDF</strong></a></td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <p><strong><span style="font-family:times new roman,serif; font-size:12pt">24-12-2014</span></strong></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    &nbsp&nbsp<button onclick="myFunction4()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Batch 2013-14</button>
    <p></p>
    <div id="2013-2014" style="display: none;">
        <p style="text-align:center;"> Placement Details 2013-2014
        </p>
        <table border="1" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Company Name
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Package
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        No. of Selections
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Branch
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        General Motors India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Mahindra Ltd.
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5.3 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        General Electric (GE)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6.3 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3 +1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE,ECE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Fluor Denial Ltd.
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4.9 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        20
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ABB India Ltd.
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4.5 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3+6+6
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE,ECE,CS
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Maruti Suzuki India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5.4 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        SKE&amp;C (Korea)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5.8 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Tech Mahindra Ltd.
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2.78 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1+1+2+2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE,ECE,CS,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Hindustan Unilever Limited (HUL)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TCS Ltd.
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.18 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        80
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        All branches
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Aricent India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.5 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        87
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        All branches
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Ericsson Ltd.
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.4 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6+2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ECE,IT,CSE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        IBM India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.5 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT,MCA,ECE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Standard Charted (Scope Int.)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.5 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1+2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ECE,IT,CS
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        SAP Labs India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        7 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT,ECE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CISCO India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        10.28 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5+4+7
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ECE ,IT,CSE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Joshz Technologies
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        IT,CSE,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        BlackRock (Internship and PPO)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        2
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ThoughtFocus
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4.8Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1+1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        IT,MCA,CS,ECE
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CrimsonLogic (Internship and PPO)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Hike India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        IT,CSE,CSE,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        WeekendR (Internship and PPO)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        TSSC (Internship and PPO)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Cognizant India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.01 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT,ECE,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ThoughtWorks
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Yamaha Motors India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT,ECE,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Newgen India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.75 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Cs,IT,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        OSS cube
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.5 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Nagarro India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3.5 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">

                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Microsoft GD
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        10.9 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Microsoft IT
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        10.2 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        5
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Impetus India
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Infoedge Ltd.
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4.5 Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Libsys
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        4Lpa
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        3
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS,IT,MCA
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        GE(Oil &amp; Gas)
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        6.3 LPA
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        1
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CS
                        <div> </div>
                    </td>
                </tr>
            </tbody>
        </table>
     </div>
    &nbsp&nbsp<button onclick="myFunction5()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Batch 2012-13</button>
    <p></p>
    <div class="over" id="2012-2013" style="display: none;">
        <p style="text-align:center;"> Placement Details 2012-2013
        </p>
        <table>
            <tbody>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        Company Name
                    </td>
                    <td rowspan="2" style=" padding:3px; border: 1px solid #03224435">
                        Package (LPA)
                    </td>
                    <td colspan="3" style=" padding:3px; border: 1px solid #03224435">
                        No of Selects from 2013 batch
                    </td>
                    <td colspan="5" style=" padding:3px; border: 1px solid #03224435">
                        No of Selects from 2014 batch (Internship)
                    </td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        MAE
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        CSE
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        ECE
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        IT
                    </td>
                    <td colspan="2" style=" padding:3px; border: 1px solid #03224435">
                        <p> </p>
                        CSE
                        <p> </p>
                    </td>
                    <td colspan="2" style=" padding:3px; border: 1px solid #03224435">
                        <p> </p>
                        <strong><span style="font-family:arial,sans-serif">ECE
<p> </p>
</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Adobe
</td>
<td style=" padding:3px; border: 1px solid #03224435">
8.45+ joining bonus
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
02
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
CDOT
</td>
<td style=" padding:3px; border: 1px solid #03224435">
7.5
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
02
</td>
<td style=" padding:3px; border: 1px solid #03224435">
01
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
CISCO
</td>
<td style=" padding:3px; border: 1px solid #03224435">
8.50
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
06
</td>
<td style=" padding:3px; border: 1px solid #03224435">
00
</td>
<td style=" padding:3px; border: 1px solid #03224435">
02
</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">
02
</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
TCS
</td>
<td style=" padding:3px; border: 1px solid #03224435">
3.16
</td>
<td style=" padding:3px; border: 1px solid #03224435">
03
</td>
<td style=" padding:3px; border: 1px solid #03224435">
19
</td>
<td style=" padding:3px; border: 1px solid #03224435">
26
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
SAP Lab 
</td>
<td style=" padding:3px; border: 1px solid #03224435">
7.5
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
06
</td>
<td style=" padding:3px; border: 1px solid #03224435">
00
</td>
<td colspan="5" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
ThoughtWorks
</td>
<td style=" padding:3px; border: 1px solid #03224435">
6
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="7" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Impetus
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4.5
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
04
</td>
<td style=" padding:3px; border: 1px solid #03224435">
00
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Oracle
</td>
<td style=" padding:3px; border: 1px solid #03224435">
6
</td>
<td style=" padding:3px; border: 1px solid #03224435">
1
</td>
<td style=" padding:3px; border: 1px solid #03224435">
06
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Newgen
</td>
<td style=" padding:3px; border: 1px solid #03224435">
3.75
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
02
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
ABB
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4.5
</td>
<td style=" padding:3px; border: 1px solid #03224435">
02
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
03
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
HT
</td>
<td style=" padding:3px; border: 1px solid #03224435">
3.5
</td>
<td style=" padding:3px; border: 1px solid #03224435">
1
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
03
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
CSC
</td>
<td style=" padding:3px; border: 1px solid #03224435">
3.75
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
03
</td>
<td style=" padding:3px; border: 1px solid #03224435">
01
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Libsys
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
01
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Microsoft (Global)  
</td>
<td style=" padding:3px; border: 1px solid #03224435"></td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="2" style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
01
</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">
05
</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Microsoft (India)
</td>
<td style=" padding:3px; border: 1px solid #03224435">
16.1
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="7" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Qualcom  
</td>
<td style=" padding:3px; border: 1px solid #03224435">
12+joining Bonus
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
03
</td>
<td style=" padding:3px; border: 1px solid #03224435">
03
</td>
<td style=" padding:3px; border: 1px solid #03224435">
02
</td>
<td style=" padding:3px; border: 1px solid #03224435">
01                           
</td>
<td colspan="3" style=" padding:3px; border: 1px solid #03224435">
0
</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Vinsol
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="7" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Buzzworks
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
02
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Samsung
</td>
<td style=" padding:3px; border: 1px solid #03224435">
5.5
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">
 07
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
GE ( Research)
</td>
<td style=" padding:3px; border: 1px solid #03224435">
6
</td>
<td style=" padding:3px; border: 1px solid #03224435">
01
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Maruti Suzuki India 
</td>
<td style=" padding:3px; border: 1px solid #03224435">
5.3
</td>
<td style=" padding:3px; border: 1px solid #03224435">
03
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Mahindra &amp; Mahindra 
</td>
<td style=" padding:3px; border: 1px solid #03224435">
5.2
</td>
<td style=" padding:3px; border: 1px solid #03224435">
04
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Fluor Danial
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4.6
</td>
<td style=" padding:3px; border: 1px solid #03224435">
10
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Honda Cars India
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4
</td>
<td style=" padding:3px; border: 1px solid #03224435">
03
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Lurgi AG India Ltd
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4
</td>
<td style=" padding:3px; border: 1px solid #03224435">
2
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
Cummins India Ltd.
</td>
<td style=" padding:3px; border: 1px solid #03224435">
4.5
</td>
<td style=" padding:3px; border: 1px solid #03224435">
2
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435"> </td>
</tr><tr><td style=" padding:3px; border: 1px solid #03224435">
GE ( Edison Engineering )
</td>
<td style=" padding:3px; border: 1px solid #03224435">
6.5
</td>
<td style=" padding:3px; border: 1px solid #03224435">
01
</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td style=" padding:3px; border: 1px solid #03224435">

</td>
<td colspan="4" style=" padding:3px; border: 1px solid #03224435">

</td>
</tr></tbody></table><br>
</div>

&nbsp&nbsp<button onclick="myFunction6()" > <i class="fa fa-hand-o-right" aria-hidden="true"></i> Batch 2011-12</button>
<p></p>
<div id="2011-2012" style="display: none;">
 <p style="text-align:center;"> Placement Details 2011-2012
</p> 
<table style=" border: 1px solid #03224435 margin-left: 40px;" cellspacing="0">
<tbody style=" border: 1px solid #03224435" ><tr ><td style=" border: 1px solid #03224435" >
<strong>S.No
</strong>
                    </td>
                    <td style=" border: 1px solid #03224435">
                        <strong>Name of Company
</strong>
                    </td>
                    <td style=" border: 1px solid #03224435">
                        <strong>CSE
</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>ECE</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>Total</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>
CTC(in LPA)
</strong>
                    </td>

                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 1</td>
                    <td style=" padding:3px; border: 1px solid #03224435">TCS</td>
                    <td style=" padding:3px; border: 1px solid #03224435">34</td>
                    <td style=" padding:3px; border: 1px solid #03224435">27</td>
                    <td style=" padding:3px; border: 1px solid #03224435">61</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3.16</td>
                </tr>

                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 2</td>
                    <td style=" padding:3px; border: 1px solid #03224435">GE</td>
                    <td style=" padding:3px; border: 1px solid #03224435">1</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">1</td>
                    <td style=" padding:3px; border: 1px solid #03224435">5.15</td>
                </tr>

                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">Winshuttle</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">0</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">4.5</td>
                </tr>

                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 4</td>
                    <td style=" padding:3px; border: 1px solid #03224435">C-DOT</td>
                    <td style=" padding:3px; border: 1px solid #03224435">6</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">9</td>
                    <td style=" padding:3px; border: 1px solid #03224435">7.8</td>
                </tr>

                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 5</td>
                    <td style=" padding:3px; border: 1px solid #03224435">Adobe India</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">0</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">8.8+ 3 Lacs Joining Bonus</td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 6</td>
                    <td style=" padding:3px; border: 1px solid #03224435">ThoughtWorks</td>
                    <td style=" padding:3px; border: 1px solid #03224435">-</td>
                    <td style=" padding:3px; border: 1px solid #03224435">-</td>
                    <td style=" padding:3px; border: 1px solid #03224435">-</td>
                    <td style=" padding:3px; border: 1px solid #03224435">-</td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 7</td>
                    <td style=" padding:3px; border: 1px solid #03224435">Impetus Software</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">0</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">4</td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 8</td>
                    <td style=" padding:3px; border: 1px solid #03224435">S&P Capital IQ</td>
                    <td style=" padding:3px; border: 1px solid #03224435">1</td>
                    <td style=" padding:3px; border: 1px solid #03224435">0</td>
                    <td style=" padding:3px; border: 1px solid #03224435">1</td>
                    <td style=" padding:3px; border: 1px solid #03224435">4.19</td>
                </tr>
                <tr>
                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 9</td>
                        <td style=" padding:3px; border: 1px solid #03224435">SAP Labs</td>
                        <td style=" padding:3px; border: 1px solid #03224435">5</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">5</td>
                        <td style=" padding:3px; border: 1px solid #03224435">6.5</td>

                    </tr>
                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 10</td>
                        <td style=" padding:3px; border: 1px solid #03224435">Global Fiserv</td>
                        <td style=" padding:3px; border: 1px solid #03224435">1</td>
                        <td style=" padding:3px; border: 1px solid #03224435">0</td>
                        <td style=" padding:3px; border: 1px solid #03224435">1</td>
                        <td style=" padding:3px; border: 1px solid #03224435">2.85</td>
                    </tr>

                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 11</td>
                        <td style=" padding:3px; border: 1px solid #03224435">Nucleus Software</td>
                        <td style=" padding:3px; border: 1px solid #03224435">--</td>
                        <td style=" padding:3px; border: 1px solid #03224435">-</td>
                        <td style=" padding:3px; border: 1px solid #03224435">-</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    </tr>

                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 12</td>
                        <td style=" padding:3px; border: 1px solid #03224435">Newgen</td>
                        <td style=" padding:3px; border: 1px solid #03224435">1</td>
                        <td style=" padding:3px; border: 1px solid #03224435">--</td>
                        <td style=" padding:3px; border: 1px solid #03224435">1</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3.95</td>
                    </tr>

                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 13</td>
                        <td style=" padding:3px; border: 1px solid #03224435">Mtree</td>
                        <td style=" padding:3px; border: 1px solid #03224435">1</td>
                        <td style=" padding:3px; border: 1px solid #03224435">0</td>
                        <td style=" padding:3px; border: 1px solid #03224435">1</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3.6</td>
                    </tr>

                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 14</td>
                        <td style=" padding:3px; border: 1px solid #03224435">AGC Essar</td>
                        <td style=" padding:3px; border: 1px solid #03224435">0</td>
                        <td style=" padding:3px; border: 1px solid #03224435">6</td>
                        <td style=" padding:3px; border: 1px solid #03224435">6</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    </tr>

                    <tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 15</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Samsung( Dev)</td>
                            <td style=" padding:3px; border: 1px solid #03224435">5</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">5</td>
                            <td style=" padding:3px; border: 1px solid #03224435">6.25</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 16</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Samsung( Test)</td>
                            <td style=" padding:3px; border: 1px solid #03224435">5</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">5</td>
                            <td style=" padding:3px; border: 1px solid #03224435">5.3</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 17</td>

                            <td style=" padding:3px; border: 1px solid #03224435">Yamaha Motor Solutions</td>
                            <td style=" padding:3px; border: 1px solid #03224435">2</td>
                            <td style=" padding:3px; border: 1px solid #03224435">2</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 18</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Atlogys</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 19</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Microsoft</td>
                            <td style=" padding:3px; border: 1px solid #03224435">0,3</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3</td>
                            <td style=" padding:3px; border: 1px solid #03224435">16,10</td>
                        </tr>
                        <tr>

                            <td style=" padding:3px; border: 1px solid #03224435"> 20</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Adstuck</td>
                            <td style=" padding:3px; border: 1px solid #03224435">2</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">5</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3</td>
                        </tr>

                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 21</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Motherson Sumo INfotech & Design Ltd.</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">--</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3</td>
                        </tr>

                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 22</td>
                            <td style=" padding:3px; border: 1px solid #03224435">CISCO</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4</td>
                            <td style=" padding:3px; border: 1px solid #03224435">7.04</td>
                        </tr>

                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 23</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Cypress Semiconductor</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">6.97</td>
                        </tr>

                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 24</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Agilent Technologies</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4.4</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 25</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Amdocs</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                            <td style=" padding:3px; border: 1px solid #03224435">-</td>
                        </tr>

                        <p style="text-align:center;">The following companies have recruited the students from MAE stream of IGIT GE Global Research , Mahindra & Mahindra, Maruti Suzuki, Flour Denial, Cummins India, SK E & C,Korea , Lurgi India , Siemens Power Hindustan Unilever Limited
                        </p>
            </tbody>
        </table>
    </div>

    &nbsp&nbsp<button onclick="myFunction7()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Batch 2010-11</button>
    &nbsp;
    <p></p>
    <div id="2010-2011" style="display: none;">

        <table style=" border: 1px solid #03224435 margin-left: 40px;" cellspacing="0">
            <tbody style=" border: 1px solid #03224435">
                <tr>
                    <td style=" border: 1px solid #03224435">
                        <strong>S.No
</strong>
                    </td>
                    <td style=" border: 1px solid #03224435">
                        <strong>Name of Company
</strong>
                    </td>
                    <td style=" border: 1px solid #03224435">
                        <strong>CSE
</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>ECE</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>MAE</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>Total</strong>
                    </td>
                    <td style=" padding:3px; border: 1px solid #03224435">
                        <strong>
CTC(in LPA)
</strong>
                    </td>

                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 1</td>
                    <td style=" padding:3px; border: 1px solid #03224435">C-DOT</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">2</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">5</td>
                    <td style=" padding:3px; border: 1px solid #03224435">6.7</td>
                </tr>

                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435">2</td>
                    <td style=" padding:3px; border: 1px solid #03224435">Adobe</td>
                    <td style=" padding:3px; border: 1px solid #03224435">4</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">4</td>
                    <td style=" padding:3px; border: 1px solid #03224435">7.84</td>
                </tr>

                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">MTree</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3.6</td>
                </tr>

                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 4</td>
                    <td style=" padding:3px; border: 1px solid #03224435">Libsys</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3</td>
                    <td style=" padding:3px; border: 1px solid #03224435">4.0</td>
                </tr>

                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 5</td>
                    <td style=" padding:3px; border: 1px solid #03224435">Newgen</td>
                    <td style=" padding:3px; border: 1px solid #03224435">6</td>
                    <td style=" padding:3px; border: 1px solid #03224435">2</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">8</td>
                    <td style=" padding:3px; border: 1px solid #03224435"> 3.75</td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 6</td>
                    <td style=" padding:3px; border: 1px solid #03224435">TCS</td>
                    <td style=" padding:3px; border: 1px solid #03224435">25</td>
                    <td style=" padding:3px; border: 1px solid #03224435">34</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">59</td>
                    <td style=" padding:3px; border: 1px solid #03224435">3.15</td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 7</td>
                    <td style=" padding:3px; border: 1px solid #03224435">Microsoft</td>
                    <td style=" padding:3px; border: 1px solid #03224435">1</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">1</td>
                    <td style=" padding:3px; border: 1px solid #03224435">12.71</td>
                </tr>
                <tr>
                    <td style=" padding:3px; border: 1px solid #03224435"> 8</td>
                    <td style=" padding:3px; border: 1px solid #03224435">SAP Labs</td>
                    <td style=" padding:3px; border: 1px solid #03224435">5</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">---</td>
                    <td style=" padding:3px; border: 1px solid #03224435">5</td>
                    <td style=" padding:3px; border: 1px solid #03224435">6.5</td>
                </tr>
                <tr>
                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435">9</td>
                        <td style=" padding:3px; border: 1px solid #03224435">Samsung</td>
                        <td style=" padding:3px; border: 1px solid #03224435">1</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">1</td>
                        <td style=" padding:3px; border: 1px solid #03224435">4.4</td>

                    </tr>
                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435">10</td>
                        <td style=" padding:3px; border: 1px solid #03224435">Tech Mahindra & Mahindra Satyam</td>
                        <td style=" padding:3px; border: 1px solid #03224435">7</td>
                        <td style=" padding:3px; border: 1px solid #03224435">7</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">14</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3.0</td>
                    </tr>

                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 11</td>
                        <td style=" padding:3px; border: 1px solid #03224435">CSC</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3.25</td>
                    </tr>

                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 12</td>
                        <td style=" padding:3px; border: 1px solid #03224435">Oracle</td>
                        <td style=" padding:3px; border: 1px solid #03224435">5</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">5</td>
                        <td style=" padding:3px; border: 1px solid #03224435">7.0</td>
                    </tr>

                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 13</td>
                        <td style=" padding:3px; border: 1px solid #03224435">GE Global Research</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3</td>
                        <td style=" padding:3px; border: 1px solid #03224435">4.2</td>
                    </tr>

                    <tr>
                        <td style=" padding:3px; border: 1px solid #03224435"> 14</td>
                        <td style=" padding:3px; border: 1px solid #03224435">Mahindra & Mahindra</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">---</td>
                        <td style=" padding:3px; border: 1px solid #03224435">9</td>
                        <td style=" padding:3px; border: 1px solid #03224435">9</td>
                        <td style=" padding:3px; border: 1px solid #03224435">3.8</td>
                    </tr>

                    <tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 15</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Maruti Suzuki</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">11</td>
                            <td style=" padding:3px; border: 1px solid #03224435">11</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4.8</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 16</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Flour Daniel</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4.6</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 17</td>

                            <td style=" padding:3px; border: 1px solid #03224435">Cummins India</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3.2</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 18</td>
                            <td style=" padding:3px; border: 1px solid #03224435">SK E & C,Korea</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4.5</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 19</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Lurgi India</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3.8</td>
                        </tr>
                        <tr>

                            <td style=" padding:3px; border: 1px solid #03224435"> 20</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Siemens Power</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">16</td>
                            <td style=" padding:3px; border: 1px solid #03224435">16</td>
                            <td style=" padding:3px; border: 1px solid #03224435">5.2</td>
                        </tr>

                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 21</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Hindustan Unilever Limited</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">7</td>
                            <td style=" padding:3px; border: 1px solid #03224435">7</td>
                            <td style=" padding:3px; border: 1px solid #03224435">4.6</td>
                        </tr>

                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 22</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Ericsson</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">21</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">21</td>
                            <td style=" padding:3px; border: 1px solid #03224435">3.2</td>
                        </tr>

                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 23</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Cypress</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">1</td>
                            <td style=" padding:3px; border: 1px solid #03224435"> </td>
                        </tr>

                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> 24</td>
                            <td style=" padding:3px; border: 1px solid #03224435">Freescale</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">---</td>
                            <td style=" padding:3px; border: 1px solid #03224435">7.5</td>
                        </tr>
                        <tr>
                            <td style=" padding:3px; border: 1px solid #03224435"> </td>
                            <td style=" padding:3px; border: 1px solid #03224435">Total</td>
                            <td style=" padding:3px; border: 1px solid #03224435">63</td>
                            <td style=" padding:3px; border: 1px solid #03224435">69</td>
                            <td style=" padding:3px; border: 1px solid #03224435">58</td>
                            <td style=" padding:3px; border: 1px solid #03224435">190</td>
                            <td style=" padding:3px; border: 1px solid #03224435"> </td>
                        </tr>
            </tbody>
        </table>
    </div>

</div>'; }		

   else if($id==3){
                    echo ' <div class="middleBox">
                                   <div class="title">
                                        Training &amp; Placement Contacts
                                    </div>
									
	<table>
									
         <tr>
		  <th > Name </th>
          <th> Contact</th>
          <th> Email ID</th>
		 </tr>
         <tr>
		  <td ><strong>Dr. Nathi Ram Chauhan, TPO (MAE)</strong></td>
          <td >011-23900216</td>
          <td > <a href="mailto:tnp@igdtuw.ac.in">tnp@igdtuw.ac.in</a> &nbsp; <a href="mailto:placements@igit.ac.in">placements@igit.ac.in</a></td>
         </tr>
         <tr>
		  <td ><strong>Dr. Jasdeep Kaur Dhanoa, TPO (CSE/ECE/IT)</strong></td>
          <td >011-23900216</td>
          <td ><a href="mailto:tpo@igdtuw.ac.in">tpo@igdtuw.ac.in</a> &nbsp; <a href="mailto:jasdeep@igdtuw.ac.inm">jasdeep@igdtuw.ac.in</a></td>
		 </tr>
      </table>
	  
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
								 The University T&P Cell facilitates multiple job offers to the eligible students of IGDTUW year after year. During the recruitment drive around 52 companies visited the campus. To name a few prestigious companies like Microsoft, Adobe, Cisco, SAP Labs, Oracle, Qualcomm, Mahindra & Mahindra, images, Cognizant, Aricent, Tata Consultancy Services, Yamaha Motors, Hindustan Unilever, IBM India visit IGDTUW campus for placements and internships</div>
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

</html>			  
