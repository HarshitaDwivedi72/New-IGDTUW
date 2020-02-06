<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applied Science and Humanities</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" class="stylesheet" href="stylesheet/style1/departments.css">
</head>

<body onload="main()">
    <script>
        function main() {
            var r = <?php echo $_GET['id']; ?>;
            $('#' + r).addClass('high');
        }
    </script>
    <?php if(isset($_GET['id']))
     $id=$_GET['id'];
    else 
    $id='';
    ?>
    <!-- header -->
    <?php include 'header.php';
?>
    <?php include 'backend/getData.php';
?>

    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sideNav">
                    <div class="sideHeading">
                        <a href="tenders.php">RELATED LINKS</a>
                    </div>
                    <ul class="sidenav">
                        <li><a href="tenders.php?id=1" id="1"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Archives</a></li>
                        <li><a href="tenders.php?id=2" id="2"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Facilities</a></li>
                        <li><a href="tenders.php?id=3" id="3"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Careers</a></li>
                        <li><a href="tenders.php?id=4" id="4"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Tenders</a></li>
                        <li><a href="tenders.php?id=6" id="6"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Library</a></li>
                        <li><a href="tenders.php?id=7" id="7"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Hostels</a></li>
                        <li><a href="tenders.php?id=8" id="8"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Bank</a></li>

                        <li><a href="tenders.php?id=9" id="9"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>IT Services</a></li>

                        

                        <!-- <li><a href="tenders.php?id=5" id="5"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>Media</a></li>-->
                    </ul>
                </div>
            </div>
            <style>
                .itservicesUl li {
                    list-style-type: disc;
                }
                
                .my-flex-container,
                .my1-flex-container,.my2-flex-container {
                    display: flex;
                    /* height: 600px; */
                    flex-wrap: wrap;
                    flex-direction: row;
                    justify-content:center;
                    align-content: center;
                    /* background-color: DodgerBlue; */
                }
                
                .my1-flex-container>div {
                    text-align: center;
                    margin: 30px;
                }
                .my2-flex-container>div {
                    text-align: center;
                    margin: 30px;
                }
                
                .my-flex-container>div {
                    /* background-color: #f1f1f1; */
                    width: 200px;
                    margin: 20px;
                    /* height:200px; */
                    text-align: center;
                    /* line-height: 75px;
                    font-size: 30px; */
                }
                .bullets{
                    margin:20px;
                }
                .bullets li{
                    list-style-type:circle;
                    padding:10px;
                }
            </style>

            <div class="col-sm-9">
                <?php if($id==1) {
    echo '<div class="middleBox">
 <div class="title">ARCHIVES <br>old notices are achived here... </div>
 <div class="headingPara"><table><tr><th>Title</th><th>Type of Notice</th><th>Expiry Date</th><th>File</th><th>Upload Date</th></tr>';
 getArchives();
    echo ' </table>
 </div></div>';

}

else if($id==2) {
    echo '<div class="middleBox">
 <div class="title">FACILITIES AT UNIVERSITY </div>
 <div class="headingPara">
 <div class="title">University Dispensary
  </div>
  <div class="headingPara"><img src="images/dispensary.jfif" class="labImages" width="auto" height="200px">
  <ul><li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The main objective of the opening of the university
   dispensary was to provide primary health care mainly in the form of first aid to the university students. 
   </li><li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The dispensary is equipped with over the counter medications,
    bed to rest in,
    medical equipments,
    physical screening tools and first aid supplies. A team of one registered medical practitioner along with one registered nurse is available from 09: 00 am to 05: 00 pm.</li> <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>The dispensary is having all emergency facilities like oxygen, Nebuliser along with arrangement for minor surgical equipment.</li> <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>As far as the employees of the university are concerned since they get a fixed lumpsum medical allowance for their OPD care and they are having reimbursement facility for IPD treatment, they are only provided OTC’s i.e one medicine at a time in emergency cases. </li> </ul> </div> <div class="title"> Library Services </div> <div class="headingPara"> <img src="images/library.jpg" class="labImages" width="auto" height="200px"> Learning Resource Centre (LRC) serves as the premier source of academic information for the IGDTU community through its collections, educational and consulting services. The LRC has a highly selective collection of print, electronic, and audiovisual materials in the areas of science, engineering, technology and management to support the learning and research activities of students and faculty. A number of e- journals are being subscribed through consortia mode subscription. All these journals are available online to the member of the LRC in campus LAN. The Digital Library section has e-materials like CDs, DVDs and digital thesis of final year students and are available through an Open Source Institution Repository Software within the campus premises. </div> <div class="title"> Hostels </div> <div class="headingPara"> <img src="images/hostel.png" class="labImages" width="auto" height="200px"> The University has two women hostels -<b> Krishna Hostel </b>and <b>Kaveri Hostel </b>, to accommodate approximately 300 students.These two hostels are located in the University campus. These hostels provide a safe, secure and clean environment for the students to grow, learn and mature in the society away from their own homes. The hostel authorities always facilitate to create an environment for the students to study, do well in their academics and focus on their career and future. All rooms are on twin/triple sharing basis and are equipped with individual beds, chairs, built-in cupboards and study tables. </div> <div class="title"> Bank </div> <div class="headingPara"> <img src="images/bank.jfif" class="labImages" width="auto" height="200px"> The Punjab and Sind bank is available in the university premises. <br> Opening Hours (Lunch Break: 2pm to 2: 30pm): - <br> Monday to Friday: 10 am to 4pm. <br> Saturday: 10 am to 1pm. </div> <div class="title"> Guests House </div> <div class="headingPara"> The guest house within the campus has limited accomdation for the staying purpose of individuals visiting the campus. The rooms are comfortable with all modern facilities available within. </div> <div class="title"> IT Services </div> <div class="headingPara"> IT Services Division is managing the IT infrastructure of IGDTUW. It involves the maintenance of Computers, Peripherals, Printers and UPS. IGDTUW Campus is recently upgraded its IT Infrastructure through high-end intelligent CISCO switches, and possesses round the clock 1 Gbps NKN leased line and a 50 Mbps MTNL leased line in a different OFC for the LAN wired & Wi-Fi connectivity for the academic, administrative and hostel blocks of the campus, with internet facilities on all the nodes through 10 Gbps LAN optical fiber connectivity. Around 550 Computers, 85 Printers etc are connected with Local area network which is being managed and maintained by Planning and Development Division. <br> <br> IGDTUW campus is a fully Wi-Fi campus, all areas of campus are covered with Outdoor and Indoor wireless access points which are working 24x7 for providing seamless wireless internet connectivity to users through Security Firewall with authentication of every user in campus. <br> <br> <b>Roles and Responsibilities: </b> <br> <ul class="itservicesUl"> <li>Maintenance of Computers, Printers, LCD Projectors and UPS</li> <li>Maintenance of Web Server, DNS Server, DHCP Server, Biometric Server etc.</li> <li>Development & Maintenance of Website</li> <li>Email Services</li> <li>Antivirus Services</li> <li>Management & Maintenance of LAN, Wireless & Internet services</li> </ul> </div> <div class="title"> Common Room </div> <div class="headingPara"> The university has a common room for girls, equipped with fitness equipments, yoga facility and indoor games. </div> <div class="title"> Computer Room </div> <div class="headingPara"> <img class="labImages" width="auto" height="200px" src="images/cc1.jfif"> 
    The university has on campus computing facility (computer lab) housed in centralized air conditioned premises, named as "Computer Center". 
    <br>
    <br>
    Computer Center at the university is equipped with the newly procured Computer Systems with a high end configuration. Each computer (HP 8000 SFF series) runs Intel Core i5-650 3.2 GHz processor aptly supported with a 4GB RAM and hard disk space of 320 GB. The hardware is configured to operate in a dual boot mode providing support for the two broad classes of operating systems namely Windows 7 Professional Edition and Linux based Ubuntu-10.04, which is open source operating system with a Long Term Support. 
    <br>
    <br>
    Computer Center has been a hub of computing at the university. Major events hosted at Computer Center are:-
    <ul>
        <li style="list-style-type:disc;">A 3-week 2nd Summer Workshop on “Programming Tools and Techniques for Project Development in Linux Environment” was conducted for the IGDTUW students during their summer break in June-July 2012 by faculty members of Department of Information Technology under the aegis of IGDTUW ACM Student Chapter. </li>
        <li style="list-style-type:disc;">A three week (20th June - 7th July, 2011)summer training cum workshop titled “Project Development using Advanced C Programming” on Linux environment was organized in which around 40 first year students of B.Tech.(IT) and B.Tech.(CSE) from IGDTUW participated.</li>
    </ul>
    Practical Course Work: Provides services for the conduct of practical course work for various subjects offered to B.Tech. (IT/CSE) and MCA Programmes.
    <br>
    <br>
    <b>Servers Configured</b>
    <br>
    <br>
    Computer Center runs a web-server based application that automates the programming problem submission process. Salient features of the application are:-
    <ul>
        <li style="list-style-type:disc;">Application provides facility for creation of programming assignment by teachers and upload of programming assignments by students through individual login IDs for each student. </li>
        <li style="list-style-type:disc;"> Programs are compiled at server backend, supports C and C++.</li>
        <li style="list-style-type:disc;"> Application is deployed and operational, and can be accessed at http://172.16.220.100/submission/ from anywhere in the campus LAN during day time.</li>
        <li style="list-style-type:disc;"> Application is currently in use by B.Tech. (IT) and MCA students to submit programs as part of their practical coursework assignments.</li>
        
    </ul>
    </div> </div> </div>';

}

else if($id==3) {
    echo '<div class="middleBox">
 <div class="title">CAREERS / RECRUITMENT AT UNIVERSITY </div><div class="headingPara"><table><tr><th>Title</th><th>File</th><th>Date of Upload</th></tr>';
 getCareers();
    echo ' </table>
 </div></div>';

}

else if($id==4) {
    echo '<div class="middleBox">
 <div class="title">TENDERS </div><div class="headingPara"><table><tr><th>Title</th><th>File</th><th>Date of Upload</th></tr>';
 getTenders();
    echo '</table>
 </div></div>';

}


else if($id==6){
    echo '<div class="middleBox">
        <div class="title">
            OPAC(Online Public Access Catalogue
        </div>
        <div class="headingPara">
        OPAC (Online Public Access Catalogue) is available at <a href="http://172.16.16.2:8080/newgenlibctxt/">http://172.16.16.2:8080/newgenlibctxt/</a>
        <br>
        <br>
        User may use OPAC to ascertain availability of material needed by them. Users may log on to OPAC to verify their circulation data, to reserve documents, to suggest a new document to be procured for the library.
        <br><br>
        <b>Note : </b> OPAC is only accessible via intranet users.
      </div>
      <div class="title">
                E-RESOURCES
        </div>
        <div class="headingPara">
           <ul>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=11">Campus Access</a></li>
                    
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=12">Open Access</a></li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=13">Architectural Journal Access</a></li>
           </ul>
      </div>
      <div class="title">
            DIGITAL LIBRARY
        </div>
        <div class="headingPara">
        Full text Project Reports of B.Tech Final Year Students and Publication of IGDTUW Faculty available at <a href="http://172.16.60.1:1026/gsdl" target="_blank">http://172.16.60.1:1026/gsdl</a>
        <br>
        <br>
      </div>
      <div class="title">
            OFFICER/STAFF
        </div>
        <div class="headingPara">
           <b>Chairman, Library Advisory Committee : </b>
           <br>
           Prof. Ashwani Kumar, (Dean, Student Welfare)
           <br>
           <br>
           <b>Librarian :</b>
           <br>
           <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><b> Mr. Dharmendra Singh Sengar</b>
           <br>
            Office location: Learning resource Centre
           <br>
           Telephone no.: 011-23869731
           <br>
            E-mail id: <a href="">sengaripu@gmail.com,</a><br><a href=""> dssengar@yahoo.com</a>
           <br>
          Reponsilbilties: Planning, adminsitration, Co-ordination, supervision of various library related works.
            <br>
            <br>
            <b>PLA :</b>
            <br>
            Mr. Rabishakar Giri
            <br>
            (Presently he is on lien)
            <br>
            <br>
            <b>Library Attendant</b>
            <br>
            <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><b>Mrs. Hemlata Sharma </b>
            <br>
            Reponsilbilties:Shelving of books, shelf reading and proper arrangement of documents, Circulation of books etc.
            <br>
            <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><b>Mr. Basant </b>
            <br>
            Reponsilbilties:Shelving of books, shelf reading and proper arrangement of documents, Circulation of books etc.
            <br>
            <br>
            
        </div>
      <div class="title">
            MEMBERSHIP
        </div>
        <div class="headingPara">
           <ul>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Membership is automatically conferred to all the faculty members, research scholars or a student on his / her joining and remains valid for his full tenure. Members should present duly filled–in registration from upon joining the institute which can be obtained from the Circulation Counter or download from here.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>"No Dues Certificate / Clearance Certificate” should be obtained from the LRC while leaving the Institute. Result or degree or dues cannot be released to members, unless all borrowings are returned.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>For loss/damage of LRC Membership card, Duplicate card will be issued @ Rs.100/- plus on production of FIR copy from the Police Station.</li>
           </ul>
           <b>Download The Forms</b>
           <br>
           <a href="pdfs/membershipform.pdf" target="_blank">Membership Form</a>
           <br>
           <a href="pdfs/BookRecommendationForm.pdf" target="_blank">Recommendation Form</a>
           <br>
           <br>
      </div>
      <div class="title">
            SERVICES
        </div>
        <div class="headingPara">
        The LRC staffs assist students/faculty with critical and evaluative use of information both through personal consultation and through formal curriculum-related instructions. The LRC engages in continuous assessment of the quality and value of its services to its constituents. The LRC embraces technological innovation to make the best available resources accessible to students and faculty at the point of need.
        <br>
        <b>Open Access</b>
        <br>
        Open Access system is followed in the LRC. Books are classified and arranged according to DDC 21. For the user convenience printed spine labels pasted on each and every book.
        <br>
        <br>
      </div>
      <div class="title">
            RULES AND REGULATIONS
        </div>
        <div class="headingPara">
           <b>General</b>
           <ul>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>LRC is open to bonafide members only</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>All users observe perfect discipline and silence in order to maintain peaceful environment of study within and around LRC. Talking, eating, smoking, or sleeping is strictly prohibited.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Mobiles, Laptops, Bags, boxes, briefcases, etc are not allowed in the LRC.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Any violation of Rules shall lead to forfeiture of the membership of concerned member. Appropriate disciplinary action may also be imposed.</li>
           </ul>
           <b>Membership :</b>
           <ul>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Membership is automatically conferred to all the faculty members, research scholars or a student on his / her joining and remains valid for his full tenure. Members should present duly filled–in registration from upon joining the institute which can be obtained from the Circulation Counter or download from here</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>“No Dues Certificate / Clearance Certificate” should be obtained from the LRC while leaving the Institute. Result or degree or dues cannot be released to members, unless all borrowings are returned.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>For loss/damage of LRC Membership card, Duplicate card will be issued @ Rs.100/- plus on production of FIR copy from the Police Station.</li>
           </ul>
           <b>Use of LRC materials :</b>
           <ul>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>A member is entitled to make free use of reading, reference, and referral facilities of the library.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Members are requested to visit our OPAC (link here) for availability /new arrival of materials.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Entry in library premises is allowed only after verifying Identity Cards and should produce it on demand by any authorized staff.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Member should produce their ID card for borrowing library documents. Borrowing rights of members are not transferable.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Forloss of a book by a member, he/she must replace new book with recent by procuring it from the market.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Borrowers are requested for safe & careful use of LRC documents and must ensure that the documents borrowed by them retained in sound condition.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>In case of loss / damage of some issue of reference material, it has to be replaced or cost of the entire volume must be paid. In case of loss of a single part of a multi-volume publication entire set will be recovered /replaced from the borrower.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>User shall not write, or make any mark upon, fold, damage, any document of the LRC.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Theborrowed documents must be returned by the member on or before the due date or earlier, if demanded by the Library. These will not be re-issued.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Members can reserve the loaned documents online by logging on to the OPAC.</li>
           <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Members also can recommend book to be procured for LRC online by logging on to the OPAC.</li>
           </ul>
      </div>
      <div class="title">
            ASK THE LIBRARIAN ?
        </div>
        <div class="headingPara">
           <b>Call us on :</b>  011-23869731</b>
           <br>
           <b>Drop a mail at :</b>igitlrc@gmail.com
            <br>
            <br>
      </div>
    </div>
    ';

}

else if($id==7){
    echo '<div class="middleBox">
    <div class="title"> 
    Hostels 
    </div> 
    <div class="headingPara"> 
    <img src="images/hostel.png" class="labImages" width="auto" height="200px"> 
    The University has two women hostels -<b> Krishna Hostel </b>and <b>Kaveri Hostel </b>, to accommodate approximately 300 students.These two hostels are located in the University campus. These hostels provide a safe, secure and clean environment for the students to grow, learn and mature in the society away from their own homes. The hostel authorities always facilitate to create an environment for the students to study, do well in their academics and focus on their career and future. All rooms are on twin/triple sharing basis and are equipped with individual beds, chairs, built-in cupboards and study tables.

    <br>
    <br>
    <ul>
        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=14">Hostel Notifications</a></li>
        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=15">Facilities</a></li>
        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=16">Rules</a></li>
        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=17">Events</a></li>
        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=18">Staff</a></li>
        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=19">Hostel Admission Procedure</a></li>
        <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=20">Glimpse of IGDTUW Hostel Life</a></li>
    </ul>
    </div>
    ';

}



else if($id==9){
    echo '<div class="middleBox">
        <div class="title">
            IT SERVICES
        </div>
        <div class="headingPara">
        IT Services Division is managing the IT infrastructure of IGDTUW. It involves the maintenance of Computers, Peripherals, Printers and UPS. IGDTUW Campus is recently upgraded its IT Infrastructure through high-end intelligent CISCO switches, and possesses round the clock 1 Gbps NKN leased line and a 50 Mbps MTNL leased line in a different OFC for the LAN wired & Wi-Fi connectivity for the academic, administrative and hostel blocks of the campus, with internet facilities on all the nodes through 10 Gbps LAN optical fiber connectivity. Around 550 Computers, 85 Printers etc are connected with Local area network which is being managed and maintained by Planning and Development Division.
        <br>
        <br>
        IGDTUW campus is a fully Wi-Fi campus, all areas of campus are covered with Outdoor and Indoor wireless access points which are working 24x7 for providing seamless wireless internet connectivity to users through Security Firewall with authentication of every user in campus.
        <br>
        <br>
        <b>Roles & Responsibilities</b>
        <br>

        <ul style="margin-left:20px;">
            <li style="list-style-type:disc;">Maintenance of Computers, Printers, LCD Projectors and UPS<li>
            <li style="list-style-type:disc;">Maintenance of Web Server, DNS Server, DHCP Server, Biometric Server etc.<li>
            <li style="list-style-type:disc;">Development & Maintenance of Website<li>
            <li style="list-style-type:disc;">Email Services<li>
            <li style="list-style-type:disc;">Antivirus Services<li>
            <li style="list-style-type:disc;">Management & Maintenance of LAN, Wireless & Internet services<li>
        </ul>
        <ul>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=5">Complaints</a></li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=10">Officers/Staff</a></li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="tenders.php?id=21">Circulars/Orders/Notices</a></li>
        </ul>

      </div>
    </div>
    ';

}
else if($id==5){
    echo '<div class="middleBox">
        <div class="title">
        Complaint Resolution Process
        </div>
        <div class="headingPara">
           Click Here for ----> <b><a href="http://172.16.1.10:8080/">COMPLAINT  LODGING AND MONITORING SYSTEM   </a></b>
            <br>
            <br>
            Please note that the complaint related to existing computers/ printers/ UPS shall only be addressed. Requirement for the new computers/ peripherals shall be submitted to the purchase department.
            <br>
            <br>
            <b>Complaint Resolution process</b>
            <br>
            <ol>
                <li>Complaint for Hardware related Problems and Networking related problems should be submitted separately.</li>
                <li> While describing the problem kindly put the machine ID and Room No.</li>
                <li>On submitting the form, the IT Services will allocate the Complaint Number.</li>
                <li>If the Machine/Equipment or part is taken for repairs by the service engineer, then Annexure -1 needs to be filled and the form must be signed by the HOD.</li>
                <li>At the time of receiving the machine/Equipment or part for Repairs by Service Engineer, the service engineer must sign the form.</li>
                <li>The Closure report must be submitted by the service engineer to the P&D Department.</li>

            </ol>
            <br>
            <b>Complaint Performa </b>
            <br>
            <br>
            A Complaint may be submitted in a given Performa to the office of IT Services.
            <br>
            Download the Complaint Form : <a href="pdfs/Complaint Form ITS 1.0.pdf" target="_blank">PDF</a>.
      </div>
    </div>
    ';
}

else if($id==10){
    echo '<div class="middleBox">
        <div class="title">
            Officers/Staff
        </div>
        <div class="headingPara">
           <a href=""><b>Prof. R. K. Singh </b></a> (Professor) - Head ( IT Services)
           <br>
           <a href=""><b>Er. Sagar Goel </b></a> System Analyst
           <br>
      </div>
    </div>
    ';
}

else if($id==21){
    echo '<div class="middleBox">
        <div class="title">
            Circulars/Orders/NOtices
        </div>
        <div class="headingPara">
           <table>
           <tr>
            <th colspan="3">Title</th>
            <th>Download</th>
            <th>Uploading/Updating Date</th>
           </tr>
           <tr>
           <td colspan="3"></td>
           <td></td>
           <td></td>
           </tr>
           </table>
      </div>
    </div>
    ';
}

else if($id==11){
    echo '<div class="middleBox">
        <div class="title">
            Campus Access
        </div>
        <div class="headingPara">
        <div class="my-flex-container">
        <div ><a href="http://dl.acm.org/"><img src="images/ACMDL_Logo.jpg" width="200px" height="100px"></a></div>
        <div><a href="http://ieeexplore.ieee.org/Xplore/home.jsp"><img src="images/IEEE DL Logo.jpg" width="200px"  height="100px"></a></div>
        <div ><a href="http://asmedigitalcollection.asme.org/index.aspx"><img src="images/ASME DC logo.jpg" width="200px"  height="100px"></a></div>
        <div><a href="https://www.ams.org/home/page"><img src="images/AMS.png" width="200px"  height="100px"></a></div>
        <div><a href="https://www.jstor.org/"><img src="images/JSTOR.png" width="150px"  height="100px"></a></div>
    
      </div>
    </div>
    ';

}
else if($id==12){
    echo '<div class="middleBox">
        <div class="title">
            Open Access
        </div>
        <div class="headingPara">
            <b>Gateway/Directory</b>
            <ul>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.scirus.com/">Scirus :</a>for scientific information only</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://oajse.com/">Open Access Journals Search Engine (OAJSE)</a></li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://oaister.worldcat.org/">OAIster : </a> Union catalog of millions of records representing open access resources</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://scholar.google.com/">Google Scholar</a></li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://worldwidescience.org/">WorldWideScience.org </a>is a global science gateway</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.opendoar.org/">DOAR : </a> Directory of Open Access repository</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.doaj.org/">DOAJ : </a>Directory of Open access journal</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.doabooks.org/">DOAB : </a>Directory of Open Access Books</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.openj-gate.com/">Open JGate : </a>Open Acees journal gateway</li>
            </ul>
            <b>ETD (Electronic theses and dissertations)</b>
            <ul>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.ndltd.org/serviceproviders/scirus-etd-search">Networked Digital Library of Theses and Dissertations (NDLTD),</a>a single point access to ETDs of major participating institutions worldwide.</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.alldissertations.com/.index.php">Alldissertations.com:</a>Collection of dissertations and theses from the universities all over the world.</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://ethos.bl.uk/">EThOS :</a>"single point of access" to ALL theses produced by UK Higher Education.</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.dart-europe.eu/basic-search.php">DART-Europe E-theses Portal:</a>open access research theses from 407 Universities sourced from 20 European countries.</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://dspace.vidyanidhi.org.in:8080/dspace/">Vidyanidhi – Digital Library and E-Scholarship Portal </a>Indian ETD Collection</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="mailto: Shodhganga@INFLIBNET%20Centre">Shodhganga@INFLIBNET Centre : </a>Ph.D. theses of Indian Universities</li>
                <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.diva-portal.org/smash/search.jsf">DiVA Academic Archive On-line :</a>30 Universities and colleges of Higher education</li>
                
            </ul>

            <b>Digital Books/ Libraries</b>
            <ul>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://arxiv.org/">arXiv :</a>Physics, Mathematics, Computer Science, Quantitative Biology, Quantitative Finance and Statistics</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://citeseer.ist.psu.edu/index;jsessionid=D6012479F0D926C6C241315BC66C9C9C">CiteSeerX  : </a>Computer Science</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.intechopen.com/">InTechOpen :</a>free E-books and Journals in science and technology</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.dli.cdacnoida.in/">Digital library of India</a></li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="http://www.digitalbookindex.org/about.htm">Digital Book Index :</a>Millions of e-books across the world</li>
            
            
        </ul>
            <b>Major Open Access Journals</b>
            <ul>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Indian Academy of Science (11 journals)</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>CSIR (India) Journals (17 Journals)</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>PLOS Journals (7 Journals)</li>
            
            
        </ul>
        </div>
    </div>'
;}
else if($id==13){
    echo '<div class="middleBox">
    <div class="title">
    Architecture Journals
    </div>
    <div class="headingPara">
    <div class="my1-flex-container">
    <div ><a href="http://abe.tudelft.nl/"><img src="images/AB Architecture and the Built Environment.png" width="250px" height="100px"></a></div>
    <div><a href="http://www.cityterritoryarchitecture.com/"><img src="images/city territoty and architecture Springer.gif" width="250px"  height="100px"></a></div>
    <div ><a href="http://ijpp.uniroma1.it/index.php/it"><img src="images/Italian Journal of Planning and practice.jpg" width="300px"  height="100px"></a></div>
    <div><a href="http://conservation-science.unibo.it/"><img src="images/conservation Science in cultural heritage.jpg" width="300px"  height="100px"></a></div>
    <div><a href="http://jfa.arch.metu.edu.tr/"><img src="images/Journal of faculty of architecture Middle East.png" width="250px"  height="100px"></a></div>
    <div><a href="http://doiserbia.nb.rs/journal.aspx?issn=1450-569X"><img src="images/Spatium Architecture Journal.jpg" width="100px"  height="100px"></a></div>
    <div><a href="http://www.urbanform.org/online_public/"><img src="images/journal of urban morphology.gif" width="300px"  height="100px"></a></div>
    <div><a href="http://benthamopen.com/tousj/home"><img src="images/The open Urban Studies journal.png" width="250px"  height="100px"></a></div>

  </div>
</div>
';
}
else if($id==14){
    echo '<div class="middleBox">
    <div class="title">
        Hostel Admission
    </div>
    <div class="headingPara">
       <table>
       <tr>
       <th colspan="3">Title</th>
       <th>Download</th>
       <th>Date of Uploading</th>
       </tr>
       <tr>
       <td colspan="3">Eww</td>
       <td></td>
       <td></td>
       </tr>
       </table>
  </div>
</div>
';
}
else if($id==15){
    echo '<div class="middleBox">
    <div class="title">
    Facilities in IGDTUW Hostels
    </div>
    <div class="headingPara">
    Hostel has a co-operative mess system which is run on a “No Profit No Loss” basis supervised by the members of the Mess Committee of the Student Council. The Hostel mess provides a balanced diet at reasonable rates. Purified drinking water (RO systems), housekeeping services, Wi-Fi facility, news paper/Magazines, Refrigerators’, induction heaters, Microwave ovens, Washing machines, facilities of hot water for residents, paid laundry services and Gym and indoor sports facilities are also available for hostel residents. The Common Room is fairly well equipped with LCD TV and fully AC, Guest rooms, Reading room etc.
    <div class="my2-flex-container">
    <div><img src="images/facpic1.png" width="250px" height="200px"></div>
    <div><img src="images/facpic2.png" width="250px" height="200px"></div>
    <div><img src="images/facpic3.png" width="250px" height="200px"></div>
    <div><img src="images/facpic4.png" width="250px" height="200px"></div>
    <div><img src="images/facpic5.png" width="250px" height="200px"></div>
    <div><img src="images/facpic6.png" width="250px" height="200px"></div>
    </div>
  </div>
</div>
';
}

else if($id==16){
    echo '<div class="middleBox">
    <div class="title">
    Rules and Regulations
    </div>
    <div class="headingPara">
    Students are required to strictly follow the Rules and Regulation of the hostel. Non adherence to these rules would be treated as misconduct which may result in expulsion from the hostel and decision of the concerned hostel authorities will be final and binding for the student.
    <br>
    <br>
    <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>STAY RULES</b>
    <ol>
    <li>The presence of all students is compulsory for the Roll Call taken at dinner time 8:00 PM- 8:10 PM. Research scholars and senior students doing project work should seek prior permission for late entry. These students need to furnish a letter from their Supervisors/Guides/HOD’s, to be allowed for late entries.</li>
    <li> Every student is responsible for the maintenance of the room and the furniture   allotted to her. No furniture should be removed from the room. No additional furniture is allowed in the room without prior permission of the Warden. Charges will be recovered for all damages and losses caused by the resident students.</li>
    <li>Students will not break any lock/Latches (personal/official) in the hostel without    permission of Warden. The recovery of damaged articles will be made from the student and strict action will be taken against her.</li>
    <li>Common room facility is available in both the hostel for entertainment purpose.  This will be open in the evening 5:00PM to 10:00PM.</li>
    <li>Residents are required to maintain cleanliness of their rooms, bathrooms and corridors. Dustbins should be kept in the corridors for disposal of waste during 09:00 AM -1:00 PM.</li>
    <li> Cooking and ironing are strictly prohibited in the rooms. Induction cooker, Power points and iron tables are provided in the hostel corridors for the facility of the students.</li>
    <li> Residents are not allowed to engage any person for service of any kind.</li>
    <li>Residents are advised to behave properly with mess workers, hostel staffs and security guards.</li>
    <li> Residents are not allowed to keep cars/motor/cycles/scooters on the campus without a valid vehicle pass.</li>
    <li>  Residents using air coolers are required to keep them clean and disinfect them    regularly to prevent spreading of Dengue and Malaria.  If any penalty is imposed by the Municipal Corporation of Delhi in this regard, the resident concerned will have to pay the same.</li>
    <li> Un-cleaned utensils of residents found in the washrooms of any floor will be disposed off and a fine will be imposed on the residents of that particular floor collectively.</li>
    <li> The residents should keep their rooms locked as and when they go out of their rooms.  The hostel is not responsible for loss of valuables due to theft or fire.  Residents are requested not to leave their belongings in the corridors, washroom etc. </li>
    <li> Resident students are not allowed to go out of the hostel after 8:00 pm.</li>
    <li> Students are expected to maintain a proper decorum and an atmosphere of cordiality in the hostel.</li>
    <li>In case a student falls ill with any contagious disease she may not be allowed to stay in the hostel such time till she produces a certificate of Medical Fitness issued by a doctor working in a Govt. hospital. </li>
    <li> A resident taking part in any cultural event outside the campus must take prior permissions from parents/Local Guardian, department HOD and the Warden.</li>
    <li>  All academic programmes, i.e. lectures, tutorials, seminars, minor examinations etc. must be attended by the residents. No oncession whatsoever in this regard will be given. If a student is not permitted to appear in the ‘End Term Exams” due to the shortage of attendance, her candidature in the hostel will automatically be terminated in the next semester.</li>
    <li>The hostel seat will be re-allotted to another student if a resident fails to return to the hostel by the stipulated date at the end of vacation and no information/valid reason is intimated to the office within one week.</li>
    <li>Every student must bring her own blanket, bed linen, curtains, water bucket and jug.</li>
    <li>The rooms will be re-allotted at the beginning of each Academic Session at the discretion of the hostel warden. Rooms will be allotted by lottery only.  No special requests will be entertained for the preference of rooms/floors, except for PH category students.</li>
    <li> Residents are required to see the Notice Boards for necessary announcements made from time to time.  Any suggestion to improve the social, cultural, academic and intellectual environment of the hostel is always welcome.</li>
    <li> Minimum duration of stay at the hostels will not be less than 85% in any case.  Attendance will be reviewed on monthly/semester/yearly basis by the concerned warden and hostel office.  Any student found short of attendance in the hostel will be considered as unwilling to stay in the hostel and her allotment will be cancelled and could further be allotted to needy student.</li>
    <li>No delivery boys will be allowed to enter the hostel after 8:00 PM.           </li>

    </ol>
    <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>LEAVE RULES : </b>
    <ol>
    <li>Night leaves can be availed only from Friday to Sunday or on Holidays, the 

    Maximum permissible night leaves being nine per month (inclusive of holidays). Student on night leave should report by 8:00 am the next day.</li>
    <li>Late night leave up to 10:00 pm is permitted (twice a month) at student’s own risk and responsibility with prior approval of the hostel warden. Beyond 10:00 pm the   Intimation needs to be given by parents to the hostel warden for grant of late night permission.  However if the student reports later than 10:00 pm to the hostel the permission for subsequent late night would not be given.</li>
    <li> Residents are not permitted to take leave for more than a total period of 5   weeks per semester (inclusive of 9 night leaves per month).</li>
    <li>Residents are allowed to go home during Preparatory Leaves for End-term examination as per University Calendar.</li>
    <li>Application for leave for a period exceeding 4 working days must be sanctioned by the Dean/HOD/Coordinators.</li>
    <li>Permission for all leave, especially night leave, must be taken at least one day in advance. However, no leave can be availed during the college hours.</li>
    <li>Students will not be permitted to stay overnight at any other place except at their local guardians. If found doing otherwise, the authorities will take appropriate action including cancellation of the hostel seat.</li>
    <li>Resident students are not permitted to leave the hostel without written permission of the Warden. Leave will not be sanctioned on phones from the Local Guardian.</li>
    <li>Each student is issued a Night Leave Book in which the student should get the signature of the local guardian for every night leave availed. Loss of the book should be reported to the nearest Police Station.</li>
    <li> Students will not be permitted to leave the hostel earlier than the sanctioned dates of leave.</li>
    <li>Students are not allowed to extend the leave beyond the sanctioned date except in case of medical emergency for which a medical certificate needs to be submitted.</li>
    <li>In case a student falls ill with any contagious disease she may not be allowed to stay in the hostel such time till she produces a certificate of Medical Fitness issued by a doctor working in a Govt. hospital. </li>
    <li>Students who want to go home during the preparation leave may do so with special permission from the warden.  There will be no rebate in Mess Charges during this period.</li>
    <li>Advance intimation needs to be given to the warden by the parents/local guardian about the place of visit of the resident during winter break.</li>

    </ol>
    <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>PENALTY CLAUSE</b>
    <ol>
    <li> Any forbidden articles such as heaters, immersion rods, iron stoves etc, if found in the room, will be confiscated for the duration of the resident’s stay in the hostel and a fine of Rs. 1000/- will be imposed per article.</li>
    <li> Breakage charges for hostel furniture item will be charged from the students as per the actual. </li>
    <li> Inter changing of allotted rooms without the approval of competent authority is not permitted. If found, the fine will be imposed Rs. 1000/-.</li>
    <li>The dustbins are to be kept the corridors for disposal of waste during 09:00 AM-1:00 PM every day.  A fine of Rs.50/-will be imposed, if the dustbins are found outside the room after the time slot as mentioned above.</li>
    <li>  A fine of @ Rs. 500/- will be imposed in case of loud music disturbing other residents and the music system would be confiscated.</li>
    <li> Every student should switch off the light, fan and other electrical gadgets before leaving the room.  If found, fine of Rs. 100/- will be imposed.</li>
    <li> Any student having female guest without prior permission will be punished with a fine of Rs.500/ in addition to the guest charges.</li>
    <li>Shouting and sitting on the mess table and attendance table is strictly prohibited. Anyone found doing so will be fined Rs. 100/-. </li>
    <li> Hostel property (Mess Utensils) will not be removed from the Dining Room under any circumstances.  Anyone found guilty of breaking this rule will be fined Rs.200/-.</li>
    </ol>
    <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>PUNITIVE ACTION</b>
    <ol>
        <li> All hostellers must be back in the hostel by 8:00 PM. Non adherence to the time norms will be treated as grave misconduct, which may result in expulsion from the hostel for one week and decision of the concerned hostel authorities will be final and binding for the student.</li> 
        <li>  Cooking of food of any sort and keeping any inflammable items inside the hostel room is strictly prohibited.  Strict disciplinary action will be taken against the defaulters.</li> 
        <li>Any food items/parcels/couriers will be received by the residents at the hostel gate only. No delivery boys will be allowed to enter the hostel before 8:00pm. Violation of this rule could lead to disciplinary action.</li> 
        <li> Residents may seek prior written permission from the hostel warden to stay at their local guardian place. Strict displinary action will be taken against the defaulters.</li> 
    </ol>
  </div>
</div>
';
}

else if($id==17){
    echo '<div class="middleBox">
    <div class="title">
        EVENTS
    </div>
    <div class="headingPara">
    <b>Hostel Events in 2017</b>
    <br>
    <br>
    Various events are obtained in the Hostel on different occasion. Few of the events are as below:
        <ul>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Invocation Ceremony for Goddess Saraswati</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Swachhata Pakhwada</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Freshers Party</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Christmas and New Year Celebration</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Dandia Night</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Farewell Party</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Lohri Celebrations</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Diwali Puja</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Holi Celebration</li>
            <li><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Hostel Week</li>
        </ul>
        <div class="my2-flex-container">
    <div><img src="images/facpic1.png" width="250px" height="200px"></div>
    <div><img src="images/facpic2.png" width="250px" height="200px"></div>
    <div><img src="images/facpic3.png" width="250px" height="200px"></div>
    <div><img src="images/facpic4.png" width="250px" height="200px"></div>
    <div><img src="images/facpic5.png" width="250px" height="200px"></div>
    <div><img src="images/facpic6.png" width="250px" height="200px"></div>
    </div>
  </div>
</div>
';
}

else if($id==18){
    echo '<div class="middleBox">
    <div class="title">
    Official/Staff details
    </div>
    <div class="headingPara">
       <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Dr. Ranu Gadi, Chief Warden</b>
       <br>
       Dep. Dean (Ind. Research & Development)
       <br>
       Associate Professor 
       <br>
       Dept. of App. Sciences and Humanities
       <br>
       Telephone number - 23900234
       <br>
       E-mail: <a href="mailto : ranugadi@igdtuw.ac.in "> ranugadi@igdtuw.ac.in</a>

       <br>
       <br>
       <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Ms. S.Sarika- Assistant Warden</b>
        <br>
        Office Location- Assistant Warden Office (Krishna Hostel)
        <br>
        Telephone numbers - 23869398, 23900241
        <br>
        Email : <a href="mailto : ssarika@igdtuw.ac.in">ssarika@igdtuw.ac.in</a>

        <br>
        <br>
        <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i> Ms. Bishnupriya Mohapatra- Assistant Warden</b>
        <br>
        Office Location- Assistant Warden Office (Kaveri Hostel)
        <br>
        Telephone numbers- 23900245
        <br>
        Email : <a href="mailto : bishnupriya@igdtuw.ac.in" >bishnupriya@igdtuw.ac.in</a>
        <br>

  </div>
</div>
';
}
else if($id==19){
    echo '<div class="middleBox">
    <div class="title">
    Hostel Admission Procedure
    </div>
    <div class="headingPara">
    Hostel Admission Reservation Policy will be followed for fair and proper distribution of hostel seats amongst students of various programmes at IGDTUW.
    <br>
    <ol>
        <li>The seats will be reserved for various programmes in proportion to the intake/ strength of the programme in the University.</li>
        <li>Preference will be given to students admitted in various UG programs in the university.</li>
        <li>The hostel admission will be done in concurrence with the counseling schedule for admission to various programmes of IGDTUW.</li>
        <li>Admission to any programme of IGDTUW will not grant a right for admission to the hostel. The allocation of hostel seats will be done subject to availability of seats.</li>
        <li>If the number of applicants is more than the number of available seats then seat allocation will be done in the order of merit.</li>
        <li>The seats reserved for M.Tech programmes will be equally divided amongst all department running M.Tech programmes in the University.</li>
    </ol>
    <b>Hostel Allotment</b>
    <br>
    <br>
        <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Admission for New Students (B. Tech Programmes)</b>
        <br>
        Hostel accommodation is limited and will be allotted to full-time bonafide students of IGDTUW satisfying the eligibility criteria for      hostel admission. The students who have taken admission in Delhi quota cannot claim admission in hostel even if they are from outside Delhi. 
        <br>
        The allocation of hostel seats will be done in the Priority as mentioned below:
        <ul>
        <li><b>Priority I:</b> Students from Outside Delhi (JEE Category) and residing Outside Delhi (excluding Delhi NCR)</li>
        <li><b>Priority II:</b>Senior Students whose parents have been transferred to location outside Delhi. (Seat allocation)</li>
        <li><b>Priority III:</b>Students residing in Delhi NCR/Delhi at distance greater than 35 km from IGDTUW.    </li>
        <li><b>Priority IV:</b>Students from Delhi (JEE Category) and residing Outside Delhi.</li>
        <li><b>Priority V:</b>Students residing in Delhi NCR/ Delhi at distance less than 35km from IGDTUW.</li>
        </ul>
        <br>

        <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>Admission for New Students (for M.Tech./MCA/Ph.D Programmes)</b>
        <br>
        The allocation of hostel seats will be done in the order of merit as per the University Admission Policy and Priority as mentioned below.
        <br>
        <ul>
            <li><b>Priority I:</b> Students residing Outside Delhi (excluding Delhi NCR/Delhi).</li>
            <li><b>Priority II:</b>Senior Students whose parents have been transferred to location outside Delhi. (Seat allocation subject to availability of seats and submission of required documentary evidence)</li>
            <li><b>Priority III:</b>Students residing in Delhi NCR/Delhi at a distance greater than35km from IGDTUW.</li>
            <li><b>Priority IV :</b> Students residing in Delhi NCR/ Delhi at a distance less than35 km from IGDTUW.</li>
        </ul>
        (<b>NOTE :</b> In case of the same priority, the admission will be based on the ranks obtained in the University admission list)
        <br>
        <br>
        <b><i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i>For Re-Admission Students</b>
        <br>
        <ol>
        <li>The student will be allocated the hostel seat for a period of one year that may be extended to a maximum duration of the course in which the student is enrolled.</li>
        <li>Students once granted admission to the IGDTUW hostels will follow proper Re-Admission procedure in subsequent years.</li>
        <li>Re-Admission to the hostel will not be claimed as a matter of right by any student. The re-Admission to students will be based on the student’s academic performance and conduct/behavior and minimum attendance requirement (65%) during her hostel stay in the past.</li>
        <li>All the B.Tech. M.Tech. and MCA hostel residents are required to vacate their allotted rooms within 3 days of the last date of their examination each year and handover the charge of the room including all items on the inventory to the hostel attendant. The Rooms will be reallocated at the beginning of each Academic Session to students granted Re-Admission.</li>
        <li>Students residing in Delhi/NCR would be considered for re-admission only after the outside Delhi admissions (New + Re-admission cases) are complete.</li>
        </ol>
  </div>
</div>
';
}
else if($id==20){
    echo '<div class="middleBox">
    <div class="title">
    Hostel Glimpses
    </div>
    <div class="headingPara">
    <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/glimpses of hostel life 2018-19.pdf" target="_blank">Hostel Glimpses 2018-2019</a>
    <br>
    <br>
    <i class="fa fa-hand-o-right">&nbsp&nbsp&nbsp</i><a href="pdfs/hostel glimpses 2017-18.pdf" target="_blank">Hostel Glimpses 2017-2018</a>
  </div>
</div>
';
}


// else if($id==5){
//     echo '<div class="middleBox">
//     <div class="title">
//         MEDIA BYTES
//     </div>
//     <div class="headingPara">
//        Page Under Construction.
//   </div>
// </div>';
// }
?></div>
        </div>
    </div>
    <!-- footer --><br><br>
    <?php include 'footer.php';
?>
</body>

</html>