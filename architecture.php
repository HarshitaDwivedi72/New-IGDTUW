<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Architecture & Planning</title>

    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    

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
        <?php include 'backend/getData.php';?>
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
                        
                        <li><a href="architecture.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Head Of Department</a></li>

                        <li><a href="architecture.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Faculty Directory</a></li>

                        <li><a href="architecture.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>ACHIEVEMENTS</a></li>

                        <li><a href="architecture.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Events/Workshops/Seminars</a></li>

                        <li><a href="architecture.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Labs</a></li>

                        <li><a href="architecture.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Syllabus</a></li>

                        <li><a href="architecture.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Time Table</a></li>

                        <!-- <li><a href="architecture.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Lab Manuals</a></li> -->

                    </ul>

                </div>
            </div>
            <div class="col-sm-9">
                <?php 
               
                if ($id==1) {
                    echo '<div class="middleBox">
                            <div class="title">
                            Head Of Department
                            </div>
                            <div class="profile">
                            
                                <div class="pHeading">Ar. Preeti Chauhan
                                </div>
                                
                            </div>
                            <div class="headingPara">
                            <img src="images/preetichauhan.png" class="hodImage" alt="Ar. Preeti Chauhan" height="200px" width="auto">
                                At the drop of an autumn leaf,
                                <br>
                               <b> ‘ she thought it was over and was about to cry, when a small light within her shone bright and clear. she saw and understood, that the autumn leaf has left footprints for the new fresh green leaf, opening its eyes to a new sun from the womb of a nurturing stem.’</b>
                                <br>
                                <br>
                                Ar. Preeti Chauhan is Head of Department of Architecture & Planning. She is an Architect planner with a Bachelors degree in Architecture from Government college of Architecture (GCA) Lucknow, a masters degree in Town Planning from Institute of Town planners India, (ITPI), Delhi and an executive masters degree in Healthcare planning from Medical Architecture Research unit (MARU), London South Bank university (LSBU) London, UK.

                                <br>
                                <br>
                                She has a substantial industrial experience of 18 years in the field of healthcare planning and has designed more than 65 buildings as Associate Director (Healthcare) in DDF Consultants Pvt. Ltd., a leading architectural and planning consultancy firm in Delhi. She has many ESIC medical colleges, Government hospitals, Tata Memorial Cancer Hospital Mohali, on her credit. She has a teaching experience of 7 years in prestegious institutes like Delhi College of Engineering, International Academy of Design and now IGDTUW since May 2016.
                                <br>
                                <br>

                                    She is member Advisor in Delhi Urban Art Commission, Associate of india Institute of Architects, Council of Architecture and many such professional bodies in the field of architecture and planning. She has been an invited speaker in many prestegious conferences and Exhibitions and has written many research papers in National and International journals and Healthcare Magazines. She also featured interview on Zee News program ‘Women’s Hour’ to inspire Women in the field of Architecture and Interior  design. She is presently also holding the administrative post of Deputy Registrar (GA) and Deputy Purchase officer in IGDTUW.

                                        <br>
                                        <br>
                                        <b>Her Motto :</b>’ Persist, Don’t just exist’.


                            </div>
                        </div>';
                }
                elseif ($id==2) {
                   echo '<div class="middleBox">
                                <div class="fTitle">
                                    FACULTY DIRECTORY of Architecture and Planning
                                </div>
                                <div class="headingPara">';
                        getFaculty("ARCH");


                    echo '</div>           
                        </div>';
                }
                elseif ($id==3) {
                    echo '<div class="middleBox">
                                    <div class="title">
                                        Achievements
                                    </div>
                                    <div class="headingPara">';
                         getAchievements("ARCH");
                                      echo '</div>
                                          </div>';
                }
                elseif ($id==4) {
                    echo '<div class="middleBox">
                                        <div class="title">
                                            Latest Events/ Workshops/ Seminars / Expert Lectures
                                        </div>
                                        <div class="headingPara">';
                                        getEvents("ARCH");
                                        echo '  </div>
                                        </div>';
                }
                elseif ($id==5) {
                  echo '<div class="middleBox">
                                <div class="title">
                                   B.ARCH LABS
                                </div>
                                <div class="headingPara">
                                    Department of Architecture and Planning is the most nascent Department of University and commenced B.Arch program in 2015. However, owing to the University commitment for the quality education in all disciplines, the various labs and workshops in the Department have been set up in a short span of time.
                                    <br>
                                    <br>
                                    Following Labs and Workshops have already been set up.
                                    </div>

                                <div class="title">
                                   CAD Lab
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                Computer aided design lab is an essential component of Architectural Education. It is equipped with twenty latest computers (20 HP 406G1, CORE 17,500GB HARD DISC, 4GB RAM, HP 18.5 LED Monitor), eight computers for staff, an A1 printer with scanner and LAN Connectivity on each workstation. All computers are equipped with Windows 8 pro operating system, Autodesk 2017 user licence, Revit 2017 user licence and Microsoft office. These tool help the students in two and three dimensional visualisation of Buildings, documentation work, presentation techniques and Graphic skills. Autocad is a drafting tool that helps in producing drawings as per project proposals. It is a faster and easy to use replacement for drafting boards in studios. Revit is an advanced drafting tool. The knowledge of software tools enhance the students creativity and makes them industry ready as most architectural consultancy firms work on Computer Aided Design Softwares. 
                                    <br>
                                    <br>
                                    <b>Lab Incharge : </b>Ar. Jahnabi Kalita.
                                </div>
                                <div class="title">
                                    SURVEY LAB
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    Understanding the site is the integral part of Architectural Design process. Only through understanding the site and the context properly can the students develop a design which uses the site features and site topography in a way that the resources available are used in the most optimal and sustainable manner.  Hence the Department is endeavouring to provide a good skill set to the students in conducting the survey, analysing the data and assimilating the information gathered in the design problem in the design studios.
                                    <br>
                                    <br>
                                     At present, the survey lab has chain tape survey set, total station, prismatic compass, theodolite, plane table, GPS, Measuring tapes etc. The advanced sophisticated equipment like Total Station is under process of procurement. The Survey Lab provides the students insight to work hands on with equipment, their use and application in site analysis.
                                     <br>
                                     <br>

                                     <b>Lab Incharge : </b>Ar. Amit Agrawal

                                </div>
                                
                                <div class="title">
                                   CARPENTRY AND METAL CUTTING WORKSHOP
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    Department of Architecture and Planning has a state of art carpentry and metal cutting workshop. The premise is shared with Department Of Mechanical And Automation Engineering. The basic carpentry tools like hand Saw, working tables, Hexa blades, Pincers, chisels, engineering trisquare, steel scales, marketing guage, dividers, bevel edge, energy stone, cross pin hammer, drill bit set, fret saw blades and frames, hack saw blades and frames, hand drill machine, spirit level, and safety equipment is presently available. Advanced machinery for the same is under the process of procurement. 
                                    <br>
                                    <br>
                                    This workshop entitles the students to a hands-on learning resource of construction techniques using wood, metal, lamination, joinery and fixing techniques. This knowledge in integral in design of various architectural elements like roofing, doors and window designs, staircase, flooring etc. An in depth understanding of the same can make the students appreciate the intricacies of details and also help in developing working details which are geared towards responsible consumption of material.
                                    <br>
                                    <br>
                                     <b>Lab Incharge : </b>Ar. Amit Agrawal


                                </div>
                                <div class="title">
                                    FOUNDRY AND CLAY MODELLING WORKSHOP
                                </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                     Department of Architecture and Planning has a Foundry and Clay Modelling workshop. The premise is shared with Department Of Mechanical And Automation Engineering. This is a start up workshop and has basic modelling tools like moulding box, rammer steel, shovel, moulding sand, drawing board with sunmica top, karni, pipe, plastic stool, bucket, sand rammer and assorted patterns. The students learn model making techniques for visual presentation of their design studio projects.
                                     <br>
                                     <br>
                                     This workshop entitles the students to a hands-on learning resource of flexible materials like clay, plaster of Paris, syrofoam and hard modelling materials like balsa wood, photographic mount boards and plastic modelling sheets.
                                     <br>
                                     <br>
                                      <b>Lab Incharge : </b>Ar. Sneha Maji.


                                </div>
                                <div class="title">
                                    MATERIAL MUSEUM
                                   </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                    Department of Architecture and Planning has a state of art Material Museum of around 40 square meter of space. The museum has display of building construction materials used for both interior and exterior use in the building. The display includes materials available in the construction market for flooring, roofing, false ceiling, panelling, furniture, sanitary ware, electrical fixtures, doors, windows, cladding and façade materials etc.
                                    <br>
                                    <br>
                                    The knowledge of Building materials is an important aspect of Architectural learning. The information of latest building materials and construction techniques help the students to understand the aspects of ambience, façade development, space utility and material planning.
                                    <br>
                                    <br>


                                      <b>Lab Incharge : </b>Ar. Sneha Maji.
                                     
                                </div>


                                <div class="title">
                                    CLIMATOLOGY LAB
                                   </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                In keeping with the vision of the Department, climatic studies are an integral part of the design studios. Climatic information of the place is an important parameter applied in the design of buildings. Hence climatology forms an important part of the curriculum of the B.Arch. programme.  To meet the quality of standard and conduct experiments as per curriculum of B.Arch., Climatology Lab with modern instruments is being setup in the Department of Architecture and Planning. Basic tools and equipments have been obtained in order to facilitate understanding and importance of climatology in the Architectural Design Process and the lab shall be upgraded soon.
                                <br><br>

                                      <b>Lab Incharge : </b>Ar. Venus kashyap.
                                     
                                </div>
                                <div class="title">
                                   RESOURCE ROOM
                                   </div>
                                <div class="headingPara">
                                <img src="" alt="Image does not exists." class="labImages" height="200px" width="auto">
                                Department of Architecture and Planning has a start up resource room with basic tools like brick kits for beginners. The resource room teaches students about all building systems like structural skeleton of the building, plumbing layouts, electrical layouts, water supply and drainage systems etc. The knowledge of integrated and coordinated know-how of all the systems working under the envelope of building infrastructure is part of the resource room learning. Documentation like CBRI papers, journals, other architectural reference resources, documentaries and toolkits shall also be part of resource room.
                                <br>
                                <br>

                                      <b>Lab Incharge : </b>Ar. Kshitij Sinha.
                                     
                                </div>
</div>';
                }
                elseif ($id==6) {
                   echo '<div class="middleBox">
                                <div class="title">SYLLABUS</div>
                                <div class="headingPara">
                                        <ul class="sidenav">
                                            <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Arch 1st year</a></li>

                                            <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Arch 2nd year</a></li>

                                            <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Arch 3rd year</a></li>
                                            <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Arch 4th year</a></li>
                                            <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Plan 1st year</a></li>
                                            <li><a href="syllabus/" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Plan 2nd year</a></li>
                                            
                                        </ul>
                                </div>
                          </div>';
                }
                elseif ($id==7) {
                    echo '<div class="middleBox">

                                <div class="title">TIME TABLE </div>
                                <div class="headingPara">
                                     <ul class="sidenav">
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Arch 1st year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Arch 2nd year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Arch 3rd year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>B.Arch 4th year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Plan 1st year</a></li>
                                            <li><a href="" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>M.Plan 2nd year</a></li>
                                            
                                    </ul>
                                </div>
                          </div>';
                }
                // elseif ($id==8) {
                //     echo '<div class="middleBox">
                //                         <div class="title">
                //                             LAB MANUALS
                //                         </div>
                //                         <div class="headingPara">
                //                             <ul>
                                                
                //                                 <li><a href="labManuals/crypto_mtechIsm.pdf" target="_blank"><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Cryptographic Protocols and Algorithms (MIS 526)</a></li>

                //                             </ul>
                //                         </div>
                //                 </div>';
                // }
                else{
                    echo '<div class="box-1">
                    <div class="title">
                        DEPARTMENT OF ARCHITECTURE AND PLANNING
                    </div>
                    <div class="headingPara">
                            The Department of Architecture and Planning started in 2015 as a step towards social equity and gender parity in technical professions, having a vision that architectural education should empower students to become protagonist of positive change by exploring, learning and practicing a sustainable form of architecture. The architectural education must, besides imparting knowledge, also endeavor to create opportunities for students to engage with real life issues, so that they can reflect on their role in creating a better world. Further, it is also important that students are empowered to make informed choices, which are more life-sustaining. The department aims at development of the individual girl as a responsible member of peaceful, pluralist and inclusive society by learning to explore and practicing quality, sustainable form of architecture. 
                    </div>

                </div>';
                }
                ?>
            </div>
           
        </div>
    </div>
   
 <br>
   <br>
    <!-- footer -->
    <?php include 'footer.php';?>

</body>

</html