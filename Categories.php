<?php
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Buyer Homepage</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <a href="https://icons8.com/icon/83325/roman-soldier"></a>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <script>
          function state() {
               var a = document.getElementById('states').value;
               if (a === 'ANDAMAN & NICOBAR ISLANDS') {
                    var array = ['Select District', 'Andamans', 'Nicobars'];
               } else if (a === 'ANDHRA PRADESH') {
                    var array = ['Select District', 'Adilabad', 'Nizamabad', 'Karimnagar', 'Medak', 'Hyderabad', 'Rangareddi', 'Mahbubnagar', 'Nalgonda', 'Warangal', 'Khammam', 'Srikakulam', 'Vizianagaram', 'Visakhapatnam', 'East Godavari', 'West Godavari', 'Krishna', 'Guntur', 'Prakasam', 'Nellore', 'Cuddapah', 'Kurnool', 'Anantapur', 'Chittoor'];
               } else if (a === 'ASSAM') {
                    var array = ['Select District', 'Kokrajhar', 'Dhubri', 'Goalpara', 'Bongaigaon', 'Barpeta', 'Kamrup', 'Nalbari', 'Darrang', 'Marigaon', 'Nagaon', 'Sonitpur', 'Lakhimpur', 'Dhemaji', 'Tinsukia', 'Dibrugarh', 'Sibsagar', 'Jorhat', 'Golaghat', 'Karbi Anglong', 'North Cachar Hills', 'Cachar', 'Karimganj', 'Hailakandi'];
               } else if (a === 'BIHAR') {
                    var array = ['Select District', 'Pashchim Champaran', 'Purba Champaran', 'Sheohar *', 'Sitamarhi', 'Madhubani', 'Supaul *', 'Araria', 'Kishanganj', 'Purnia', 'Katihar', 'Madhepura', 'Saharsa', 'Darbhanga', 'Muzaffarpur', 'Gopalganj', 'Siwan', 'Saran', 'Vaishali', 'Samastipur', 'Begusarai', 'Khagaria', 'Bhagalpur', 'Banka *', 'Munger', 'Lakhisarai *', 'Sheikhpura *', 'Nalanda', 'Patna', 'Bhojpur', 'Buxar *', 'Kaimur (Bhabua) *', 'Rohtas', 'Jehanabad ', 'Aurangabad', 'Gaya', 'Nawada', 'Jamui *'];
               } else if (a === 'GUJARAT') {
                    var array = ['Select District', 'Kachchh', 'Banas Kantha', 'Patan  *', 'Mahesana', 'Sabar Kantha', 'Gandhinagar', 'Ahmadabad', 'Surendranagar', 'Rajkot', 'Jamnagar', 'Porbandar  *', 'Junagadh', 'Amreli', 'Bhavnagar', 'Anand  *', 'Kheda', 'Panch Mahals', 'Dohad  *', 'Vadodara', 'Narmada  *', 'Bharuch', 'Surat', 'The Dangs', 'Navsari  *', 'Valsad'];
               } else if (a === 'HARYANA') {
                    var array = ['Select District', 'Panchkula *', 'Ambala', 'Yamunanagar', 'Kurukshetra', 'Kaithal', 'Karnal', 'Panipat', 'Sonipat', 'Jind', 'Fatehabad *', 'Sirsa', 'Hisar', 'Bhiwani', 'Rohtak', 'Jhajjar *', 'Mahendragarh', 'Rewari', 'Gurgaon', 'Faridabad'];
               } else if (a === 'HIMACHAL PRADESH') {
                    var array = ['Select District', 'Chamba', 'Kangra', 'Lahul & Spiti', 'Kullu', 'Mandi', 'Hamirpur', 'Una', 'Bilaspur', 'Solan', 'Sirmaur', 'Shimla', 'Kinnaur'];
               } else if (a === 'JAMMU AND KASHMIR') {
                    var array = ['Select District', 'Kupwara', 'Baramula', 'Srinagar', 'Badgam', 'Pulwama', 'Anantnag', 'Leh (Ladakh)', 'Kargil', 'Doda', 'Udhampur', 'Punch', 'Rajauri', 'Jammu', 'Kathua'];
               } else if (a === 'KARNATAKA') {
                    var array = ['Select District', 'Belgaum', 'Bagalkot *', 'Bijapur', 'Gulbarga', 'Bidar', 'Raichur', 'Koppal *', 'Gadag *', 'Dharwad', 'Uttara Kannada', 'Haveri *', 'Bellary', 'Chitradurga', 'Davangere*', 'Shimoga', 'Udupi *', 'Chikmagalur', 'Tumkur', 'Kolar', 'Bangalore', 'Bangalore Rural', 'Mandya', 'Hassan', 'Dakshina Kannada', 'Kodagu', 'Mysore', 'Chamrajnagar*'];
               } else if (a === 'KERALA') {
                    var array = ['Select District', 'Kasaragod', 'Kannur', 'Wayanad', 'Kozhikode', 'Malappuram', 'Palakkad', 'Thrissur', 'Ernakulam', 'Idukki', 'Kottayam', 'Alappuzha', 'Pathanamthitta', 'Kollam', 'Thiruvananthapuram'];
               } else if (a === 'MADHYA PRADESH') {
                    var array = ['Select District', 'Sheopur *', 'Morena', 'Bhind', 'Gwalior', 'Datia', 'Shivpuri', 'Guna', 'Tikamgarh', 'Chhatarpur', 'Panna', 'Sagar', 'Damoh', 'Satna', 'Rewa', 'Umaria *', 'Shahdol', 'Sidhi', 'Neemuch *', 'Mandsaur', 'Ratlam', 'Ujjain', 'Shajapur', 'Dewas', 'Jhabua', 'Dhar', 'Indore', 'West Nimar', 'Barwani *', 'East Nimar', 'Rajgarh', 'Vidisha', 'Bhopal', 'Sehore', 'Raisen', 'Betul', 'Harda *', 'Hoshangabad', 'Katni *', 'Jabalpur', 'Narsimhapur', 'Dindori *', 'Mandla', 'Chhindwara', 'Seoni', 'Balaghat'];
               } else if (a === 'MAHARASHTRA') {
                    var array = ['Select District', 'Nandurbar *', 'Dhule', 'Jalgaon', 'Buldana', 'Akola', 'Washim *', 'Amravati', 'Wardha', 'Nagpur', 'Bhandara', 'Gondiya *', 'Gadchiroli', 'Chandrapur', 'Yavatmal', 'Nanded', 'Hingoli *', 'Parbhani', 'Jalna', 'Aurangabad', 'Nashik', 'Thane', 'Mumbai (Suburban) *', 'Mumbai', 'Raigarh', 'Pune', 'Ahmadnagar', 'Bid', 'Latur', 'Osmanabad', 'Solapur', 'Satara', 'Ratnagiri', 'Sindhudurg', 'Kolhapur', 'Sangli'];
               } else if (a === 'TAMIL NADU') {
                    var array = ['Select District', 'Thiruvallur', 'Chennai', 'Kancheepuram', 'Vellore', 'Dharmapuri', 'Tiruvannamalai', 'Viluppuram', 'Salem', 'Namakkal   *', 'Erode', 'The Nilgiris', 'Coimbatore', 'Dindigul', 'Karur  *', 'Tiruchirappalli', 'Perambalur  *', 'Ariyalur  *', 'Cuddalore', 'Nagapattinam  *', 'Thiruvarur', 'Thanjavur', 'Pudukkottai', 'Sivaganga', 'Madurai', 'Theni  *', 'Virudhunagar', 'Ramanathapuram', 'Thoothukkudi', 'Tirunelveli ', 'Kanniyakumari'];
               } else if (a === 'PUDUCHERRY') {
                    var array = ['Select District', 'Yanam', 'Pondicherry', 'Mahe', 'Karaikal'];
               } else if (a === 'LAKSHADWEEP') {
                    var array = ['Select District', 'Lakshadweep'];
               } else if (a === 'GOA') {
                    var array = ['Select District', 'North Goa ', 'South Goa'];
               } else if (a === 'DADRA AND NAGAR HAVELI') {
                    var array = ['Select District', 'Dadra & Nagar Haveli'];
               } else if (a === 'DAMAN AND DIU') {
                    var array = ['Select District', 'Diu', 'Daman'];
               } else if (a === 'CHHATTISGARH') {
                    var array = ['Select District', 'Koriya *', 'Surguja', 'Jashpur *', 'Raigarh', 'Korba *', 'Janjgir - Champa*', 'Bilaspur', 'Kawardha *', 'Rajnandgaon', 'Durg', 'Raipur', 'Mahasamund *', 'Dhamtari *', 'Kanker *', 'Baster', 'Dantewada*'];
               } else if (a === 'JHARKAND') {
                    var array = ['Garhwa *', 'Palamu', 'Chatra *', 'Hazaribag', 'Kodarma *', 'Giridih', 'Deoghar', 'Godda', 'Sahibganj', 'Pakaur *', 'Dumka', 'Dhanbad', 'Bokaro *', 'Ranchi', 'Lohardaga', 'Gumla', 'Pashchimi Singhbhum', 'Purbi Singhbhum', 'ORISSA', 'Bargarh  *', 'Jharsuguda  *', 'Sambalpur', 'Debagarh  *', 'Sundargarh', 'Kendujhar', 'Mayurbhanj', 'Baleshwar', 'Bhadrak  *', 'Kendrapara *', 'Jagatsinghapur  *', 'Cuttack', 'Jajapur  *', 'Dhenkanal', 'Anugul  *', 'Nayagarh  *', 'Khordha  *', 'Puri', 'Ganjam', 'Gajapati  *', 'Kandhamal', 'Baudh  *', 'Sonapur  *', 'Balangir', 'Nuapada  *', 'Kalahandi', 'Rayagada  *', 'Nabarangapur  *', 'Koraput', 'Malkangiri  *'];
               } else if (a === 'WEST BENGAL') {
                    var array = ['Select District', 'Darjiling ', 'Jalpaiguri ', 'Koch Bihar ', 'Uttar Dinajpur', 'Dakshin Dinajpur *', 'Maldah ', 'Murshidabad ', 'Birbhum', 'Barddhaman ', 'Nadia ', 'North Twenty Four Parganas', 'Hugli ', 'Bankura ', 'Puruliya', 'Medinipur ', 'Haora ', 'Kolkata', 'South  Twenty Four Parganas'];
               } else if (a === 'MEGHALAYA') {
                    var array = ['Select District', 'West Garo Hills', 'East Garo Hills', 'South Garo Hills *', 'West Khasi Hills', 'Ri Bhoi  *', 'East Khasi Hills', 'Jaintia Hills'];
               } else if (a === 'SIKKIM') {
                    var array = ['Select District', 'North ', 'West', 'South', 'East'];
               } else if (a === 'UTTAR PRADESH') {
                    var array = ['Select District', 'Saharanpur', 'Muzaffarnagar', 'Bijnor', 'Moradabad', 'Rampur', 'Jyotiba Phule Nagar *', 'Meerut', 'Baghpat *', 'Ghaziabad', 'Gautam Buddha Nagar *', 'Bulandshahr', 'Aligarh', 'Hathras *', 'Mathura', 'Agra', 'Firozabad', 'Etah', 'Mainpuri', 'Budaun', 'Bareilly', 'Pilibhit', 'Shahjahanpur', 'Kheri', 'Sitapur', 'Hardoi', 'Unnao', 'Lucknow', 'Rae Bareli', 'Farrukhabad', 'Kannauj *', 'Etawah', 'Auraiya *', 'Kanpur Dehat', 'Kanpur Nagar', 'Jalaun ', 'Jhansi', 'Lalitpur', 'Hamirpur', 'Mahoba *', 'Banda', 'Chitrakoot *', 'Fatehpur', 'Pratapgarh', 'Kaushambi *', 'Allahabad ', 'Barabanki', 'Faizabad', 'Ambedkar Nagar *', 'Sultanpur', 'Bahraich', 'Shrawasti *', 'Balrampur *', 'Gonda', 'Siddharthnagar', 'Basti', 'Sant Kabir Nagar *', 'Maharajganj', 'Gorakhpur', 'Kushinagar *', 'Deoria', 'Azamgarh', 'Mau', 'Ballia', 'Jaunpur', 'Ghazipur', 'Chandauli *', 'Varanasi', 'Sant Ravidas Nagar *', 'Mirzapur', 'Sonbhadra'];
               } else if (a === 'RAJASTHAN') {
                    var array = ['Select District', 'Ganganagar', 'Hanumangarh *', 'Bikaner', 'Churu', 'Jhunjhunun', 'Alwar', 'Bharatpur', 'Dhaulpur', 'Karauli *', 'Sawai Madhopur', 'Dausa *', 'Jaipur', 'Sikar', 'Nagaur', 'Jodhpur', 'Jaisalmer', 'Barmer', 'Jalor', 'Sirohi', 'Pali', 'Ajmer', 'Tonk', 'Bundi', 'Bhilwara', 'Rajsamand *', 'Udaipur', 'Dungarpur', 'Banswara', 'Chittaurgarh', 'Kota', 'Baran *', 'Jhalawar'];
                    //check
               } else if (a === 'PUNJAB') {
                    var array = ['Select District', 'Gurdaspur', 'Amritsar', 'Kapurthala', 'Jalandhar', 'Hoshiarpur', 'Nawanshahr *', 'Rupnagar', 'Fatehgarh Sahib *', 'Ludhiana', 'Moga *', 'Firozpur', 'Muktsar *', 'Faridkot', 'Bathinda', 'Mansa *', 'Sangrur', 'Patiala'];
               } else if (a === 'NAGALAND') {
                    var array = ['Select District', 'Mon', 'Tuensang', 'Mokokchung', 'Zunheboto', 'Wokha', 'Dimapur *', 'Kohima', 'Phek', 'MANIPUR', 'Senapati', 'Tamenglong', 'Churachandpur', 'Bishnupur', 'Thoubal', 'Imphal West', 'Imphal East *', 'Ukhrul', 'Chandel'];
               } else if (a === 'TRIPURA') {
                    var array = ['Select District', 'West Tripura ', 'South Tripura ', 'Dhalai  *', 'North Tripura '];
               } else if (a === 'MIZORAM') {
                    var array = ['Select District', 'Mamit *', 'Kolasib *', 'Aizawl', 'Champhai *', 'Serchhip *', 'Lunglei', 'Lawngtlai', 'Saiha *'];
               } else if (a === 'ARUNACHAL PRADESH') {
                    var array = ['Select District', 'Tawang', 'West Kameng', 'East Kameng', 'Papum Pare *', 'Lower Subansiri', 'Upper Subansiri', 'West Siang', 'East Siang', 'Upper Siang *', 'Dibang Valley', 'Lohit', 'Changlang', 'Tirap'];
               } else if (a === 'CHANDIGARH') {
                    var array = ['Select District', 'Chandigarh'];
               } else if (a === 'DELHI') {
                    var array = ['Select District', 'North West   *', 'North   *', 'North East   *', 'East   *', 'New Delhi', 'Central  *', 'West   *', 'South West   *', 'South  *'];
               } else if (a === 'DELHI') {
                    var array = ['Select District', 'Uttarkashi', 'Chamoli', 'Rudraprayag *', 'Tehri Garhwal', 'Dehradun', 'Garhwal', 'Pithoragarh', 'Bageshwar', 'Almora', 'Champawat', 'Nainital', 'Udham Singh Nagar *', 'Hardwar'];
               }



               var string = "";
               for (let i = 0; i < array.length; i++) {
                    string = string + "<option>" + array[i] + "</option>";
               }
               string = "<select nmae = 'lol'>" + string + "</select>"
               document.getElementById('district').innerHTML = string;

          }
     </script>
     <script>
          var a;

          function display() {
               if (a == 0) {
                    document.getElementById("majic").style.visibility = "hidden";
                    document.getElementById("show").style.visibility = "visible";
                    return a = 1;
               } else {
                    document.getElementById("majic").style.visibility = "visible";
                    document.getElementById("show").style.visibility = "hidden";
                    // document.getElementById("show").style. visibility= "hidden";
                    return a = 0;
               }

          }
     </script>
     <style>
          .myfooter {
               background-color: #292b2c;

               color: goldenrod;
               margin-top: 15px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          nav {
               background-color: #292b2c;
          }

          .navbar-custom {
               background-color: #292b2c;
          }

          /* change the brand and text color */
          .navbar-custom .navbar-brand,
          .navbar-custom .navbar-text {
               background-color: #292b2c;
          }

          .navbar-custom .navbar-nav .nav-link {
               background-color: #292b2c;
          }

          .navbar-custom .nav-item.active .nav-link,
          .navbar-custom .nav-item:hover .nav-link {
               background-color: #292b2c;
          }

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          /* .images {
            transition: 0.5s;
        } */

          .images:hover {

               height: 220px;
               box-shadow: 5px 5px 10px grey;
               transition: 0.3s;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               /* font-family: serif; */
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          .mobtext {
               display: block;
          }

          .destext {
               display: none;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               font-family: serif;
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          /* .settings{
    margin-left:10px;
} */
          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .guard {
                    width: 100%;
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    line-height: 0.1em;
                    margin: 10px 0 20px;
                    font-family: serif;
               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }

               .mobtext {
                    display: none;
               }

               .destext {
                    display: inline-block;
                    width: 90%;
                    margin-left: 5%;
                    margin-right: 5%;
               }

               .mycarousel {
                    display: none;
               }

               .firstimage {
                    height: auto;
                    width: 90%;
               }

               .card {
                    width: 80%;
                    margin-left: 10%;
                    margin-right: 10%;

               }

               .col {
                    margin-top: 20px;
               }

               .right {
                    display: none;
                    background-color: #ff5500;
               }

               /* 
            .settings{
            margin-left:79%;
        } */
               .left {
                    display: flex;
               }

               .moblogo {
                    display: none;
               }

               .logins {
                    text-align: center;
                    margin-right: 35%;
                    padding: 15px;
               }

               .searchbox {
                    width: 95%;
                    margin-right: 5%;
                    margin-left: 0%;
               }

               .moblists {
                    display: inline-block;
                    text-align: center;
                    width: 100%;
               }

               .guard {
                    /* width: 100%; */
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    /* line-height: 0.1em; */
                    /* margin: 10px 0 20px; */
                    /* font-family: serif; */

               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }
          }




          /* Image Grig */


          * {
               box-sizing: border-box;
          }

          body {
               margin: 0;
               font-family: Arial;
          }

          .header {
               text-align: center;
               padding: 32px;
          }

          .row {
               display: -ms-flexbox;
               /* IE10 */
               display: flex;
               -ms-flex-wrap: wrap;
               /* IE10 */
               flex-wrap: wrap;
               padding: 0 4px;
          }

          /* Create four equal columns that sits next to each other */
          .column {
               -ms-flex: 25%;
               /* IE10 */
               flex: 25%;
               max-width: 25%;
               padding: 0 4px;
          }

          .column img {
               margin-top: 8px;
               vertical-align: middle;
               width: 100%;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }






          #headings {
               /* text-shadow: 2px 1px #666666; */
               font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          }

          @media screen and (max-width: 800px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          @media screen and (max-width: 600px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          /* Responsive layout - makes a two column-layout instead of four columns */
          /* @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        } */

          /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
          /* @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        } */
     </style>
     <!-- <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.display = "none";
                document.getElementById("show").style.display = "inline-block";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script> -->

</head>

<body>

<nav class="navbar navbar-expand-xl ">

<div class=" flex-row-reverse left ">

    <div class="p-2">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
    <a class="float-left" href="bhome.php">
        <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
    </a>
</div>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
</button>
<a class="float-left" href="bhome.php">
    <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
</a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <div class="input-group mb-1 ml-2 searchbox">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
        </div>
        <form action="SearchResult.php" method="get" enctype="multipart/form-data">
            <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
        </form>
    </div>
    <?php
    getUsername();
    ?>
    <div class="list-group moblists">

        <?php
        if (isset($_SESSION['phonenumber'])) {
            echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
            echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
            echo "<a href='saveforlater.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Save For Later</a>";
            echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Subscriptions</a>";
            echo "<a href='farmer.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Farmers</a>";
            echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
        } else {
            echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
        }
        ?>

    </div>
</div>




<div class=" flex-row-reverse right ">
    <div class="p-2 cart">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="dropdown p-2 settings ">
        <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Settings
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php
            if (isset($_SESSION['phonenumber'])) {
                echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                echo "<a href='#' class='dropdown-item'  style='padding-right:-20px;'>Subscriptions</a>";
                echo "<a href='saveforlater.php' class='dropdown-item' style='padding-right:-20px;'>Save For Later</a>";
                echo "<a href='farmers.php' class='dropdown-item' style='padding-right:-20px;' >Farmers</a>";
                echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
            } else {
                echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
            }
            ?>
        </div>
    </div>


    <div class="text-success  login">Login</div>
</div>

</nav>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farm</span>Fresh</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link mybtn dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">Fruits</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenuButton">
                        <?php
                        getFruits();
                        ?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link mybtn dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">Vegetables</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        getVegetables();
                        ?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link mybtn dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">Crops</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        getCrops();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
     <div class="container">
          <div class="d-flex justify-content-around bg-white mb-3">

               <div class="p-2 ">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Fruits
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getFruits();
                              ?>
                         </div>
                    </div>
               </div>
               <div class="p-2">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Vegetables
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getVegetables();
                              ?>
                         </div>
                    </div>
               </div>
               <div class="p-2 ">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Crops
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getCrops();
                              ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>






     <form action="" method="post">
          <div class="container">
               <div class="row   p-2">
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                         <div class="text-center">
                              <h4 class="font-weight-bold
                              " style="color: #FFD700 ">Select your region</h4>
                         </div>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 States">

                         <select class="p-2 shadow-lg" id="states" name="stateInput" onchange="state()" tabindex="1" style="border-radius: 6px; margin-right:  200px; border-color:#FFD700 ">
                              <option value="0">Select State</option>
                              <option value="ANDAMAN & NICOBAR ISLANDS">ANDAMAN & NICOBAR ISLANDS</option>
                              <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                              <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                              <option value="ASSAM">ASSAM</option>
                              <option value="BIHAR">BIHAR</option>
                              <option value="CHANDIGARH">CHANDIGARH</option>
                              <option value="CHHATTISGARH">CHHATTISGARH</option>
                              <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                              <option value="DAMAN AND DIU">DAMAN AND DIU</option>
                              <option value="DELHI">DELHI</option>
                              <option value="GOA">GOA</option>
                              <option value="GUJARAT">GUJARAT</option>
                              <option value="HARYANA">HARYANA</option>
                              <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                              <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                              <option value="JHARKAND">JHARKAND</option>
                              <option value="KARNATAKA">KARNATAKA</option>
                              <option value="KERALA">KERALA</option>
                              <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                              <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                              <option value="MAHARASHTRA">MAHARASHTRA</option>
                              <option value="MANIPUR">MANIPUR</option>
                              <option value="MEGHALAYA">MEGHALAYA</option>
                              <option value="MIZORAM">MIZORAM</option>
                              <option value="NAGALAND">NAGALAND</option>
                              <option value="ODISHA">ODISHA</option>
                              <option value="PUDUCHERRY">PUDUCHERRY</option>
                              <option value="PUNJAB">PUNJAB</option>
                              <option value="RAJASTHAN">RAJASTHAN</option>
                              <option value="SIKKIM">SIKKIM</option>
                              <option value="TAMIL NADU">TAMIL NADU</option>
                              <option value="TELANGANA">TELANGANA</option>
                              <option value="TRIPURA">TRIPURA</option>
                              <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                              <option value="UTTARAKHAND">UTTARAKHAND</option>
                              <option value="UTTARANCHAL">UTTARANCHAL</option>
                              <option value="WEST BENGAL">WEST BENGAL</option>

                         </select>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 districts">
                         <!-- <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <b>Districts</b>
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Patato</a>
                              <a class="dropdown-item" href="#">Carrot</a>
                              <a class="dropdown-item" href="#">Onion</a>
                         </div>
                    </div> -->
                         <select class="p-2 ml-5 shadow-lg" name="districtInput" id="district" style="border-radius: 6px; border-color: #FFD700 ">
                              <option>Select District</option>
                         </select>

                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 go">
                         <button class='btn btn-border-secondary mx-5 ' name='go' type='submit' style='color:black ;float:right;font-weight:50px; background-color: black;color:#FFD700'>Filter</button>
                    </div>
               </div>

          </div>
          </div>
     </form>
     <?php
     if (isset($_POST['go'])) {
          $districtInput = $_POST['districtInput'];
          $stateInput = $_POST['stateInput'];
          echo $stateInput;
          echo "<br>";
          echo $districtInput;

          if ($stateInput != '0' && $districtInput == 'Select District') {
               echo "<script>window.open('StateSearch.php?state=$stateInput','_self')</script>";
          } else {
               echo "<script>window.open('DistrictSearch.php?district=$districtInput','_self')</script>";
          }
     }

     ?>





     <div class="container">
          <br>
          <div class="row">


               <?php
               cart();
               ?>
               <?php
               if (isset($_GET['type'])) {

                    $search_query = $_GET['type'];
                    $get_pro = "select * from products where product_type = '$search_query'";
                    $run_pro = mysqli_query($con, $get_pro);
                    // $count = mysqli_num_rows($run_pro);
                    if ($run_pro) {
                         echo "<br>";
                         while ($rows = mysqli_fetch_array($run_pro)) {
                              $product_id = $rows['product_id'];
                              $product_title = $rows['product_title'];
                              $product_image = $rows['product_image'];
                              $product_price = $rows['product_price'];
                              $product_delivery = $rows['product_delivery'];
                              $farmer_fk = $rows['farmer_fk'];
                              $farmer_name_query = "select farmer_name from farmerregistration where farmer_id = $farmer_fk";
                              $running_query_name = mysqli_query($con, $farmer_name_query);
                              while ($names = mysqli_fetch_array($running_query_name)) {
                                   $name = $names['farmer_name'];
                              }

                              if ($product_delivery == "yes") {
                                   $product_delivery = "Delivery by Farmer";
                              } else {
                                   $product_delivery = "Delivery by Farmer Not Available";
                              }
                              echo "
                    <div class='col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4'>
                <div class='card pb-1 pl-1 pr-1 pt-0' style='height:542px'>
                    <br>
                    <div class='mt-0'><b>
                            <h4><img src='iconsmall.png' style='width: 28px; margin-bottom:  10px;'> $name
                        </b></h4>
                    </div>
                    <a href='../BuyerPortal2/ProductDetails.php?id=$product_id'>
                        <img class='card-img-top' src='../Admin/product_images/$product_image' alt='Card image cap' height='300px'>
                    </a>
                    <form action = '' method = 'post'>
                    <div class='card-body pb-0'>
                        <div class='row'>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                <div class='input-group mb'>
                                    <div class='input-group-prepend'>
                                        <h5 class='card-title font-weight-bold'>$product_title</h5>
                                    </div>

                                </div>
                            </div>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                <div class='input-group mb-1'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text bg-warning border-secondary p-1' style='color:black;' id='inputGroup-sizing-default' placeholder='1'><b>Quantity</b></span>
                                    </div>
                                    <input type='number' class='form-control' aria-label='Default' style='margin-top:0%;width:20%;padding:0%;' aria-describedby='inputGroup-sizing-default'>
                                </div>
                            </div>
                        </div>
                        <p class='card-text mb-2 font-weight-bold'>PRICE:- $product_price Rs/kg</p>
                        <div class='row'>
                            <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                              <button class='btn btn-warning border-secondary mr-1 ' name='cart' type = 'submit' style='color:black ;font-weight:50px;'>Add to cart<img src='carticons.png' height='20px'></button>
                            </div>
                        </div>
                    </div>
                       </form>
                </div>
            </div>
           ";
                              if (isset($_POST['cart'])) {

                                   if (isset($_POST['quantity'])) {
                                        $qty = $_POST['quantity'];
                                   } else {
                                        $qty = 1;
                                   }
                                   global $con;
                                   if (isset($_SESSION['phonenumber'])) {
                                        $sess_phone_number = $_SESSION['phonenumber'];

                                        $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                                        $run_check = mysqli_query($con, $check_pro);

                                        if (mysqli_num_rows($run_check) > 0) {
                                             echo "";
                                        } else {
                                             $subtotal = $product_price * $qty;
                                             $insert_pro = "insert into cart (product_id,phonenumber,qty,subtotal) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
                                             $run_insert_pro = mysqli_query($con, $insert_pro);
                                             echo "<script>window.location.reload(true)</script>";
                                        }
                                   } else {
                                        echo "<script>window.alert('Please Login First!');</script>";
                                   }
                              }
                         }
                    } else {
                         echo "<br><br><hr><h1 align = center>Product's Not Available !</h1><br><br><hr>";
                    }
               }
               ?>
          </div>
          <br><br>


     </div>
     </div>



     <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">Location, City, Country</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://facebook.com/freewebsitecode/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="https://youtube.com/freewebsitecode/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                        <h4 class="text-white">Newsletter</h4>
                        <h6 class="text-white">Subscribe Our Newsletter</h6>
                        <p>Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="https://freewebsitecode.com/">Your Site Name</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold" href="https://freewebsitecode.com">Free Website Code</a></p>
        </div>
    </div>
    <!-- Footer End -->
</body>

</html>