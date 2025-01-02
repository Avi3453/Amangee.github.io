<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Amangee Luxury Apartments </title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
    </style>
</head>

<body>
  <nav>
    <div class="logo">
      <img class="hsa" src="./image/aman.png" alt="logo">
      <p>Amangee Luxury Aparments</p>
    </div>
    <ul>
      <li><a href="#firstsection">Home</a></li>
      <li><a href="#secondsection">Rooms</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#aboutus">About us</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="./image/livingroomone.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/bedroomone.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/kitchenone.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/livingroomtwo.jpg">
        </div>

        <div class="welcomeline">
          <h1 class="welcometag">Experience the Comfort of Home </h1>
        </div>

      <!-- bookbox -->
      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                     <input type="text" name="FamilyName" placeholder="Enter Family Name" required>
                     <input type="text" name="FirstName" placeholder="Enter First Name" required>
                     <input type="email" name="Email" placeholder="Enter Email">
                     <input type="text" name="ResidentialAddress" placeholder="Enter Residential Address" required>
                     <input type="text" name="State" placeholder="State" required>
                     <input type="text" name="Nationality" placeholder="Nationality" required>
                     


                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput">
						<option value selected >Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
                            //close your tags!!
							endforeach;
						?>
                    </select>
                    <select name="Idtype" class="selectinput">
						<option value selected >ID Type</option>
                        <option value="Voters Card">voters card</option>
                        <option value="Passport">Passport</option>
						<option value="Drivers License">Drivers license</option>
                        <option value="National id">National ID</option>
						<option value="None">None</option>
                    </select>
                    <div class="datesection">
                        <span>
                            <label for="idt"> Issue-Date </label>
                            <input name="idt" type ="date">
                        </span>
                        <span>
                            <label for="doe"> Date of Expiry </label>
                            <input name="doe" type ="date">
                        </span>
                    </div>
 
                    <input type="text" name="Phone" placeholder="Enter Phoneno">
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <select name="RoomType" class="selectinput">
						<option value selected >Apartment Type</option>
                        <option value="Superior Room">MASTER ROOM</option>
                        <option value="Deluxe Room">GUEST ROOM</option>
						<option value="Guest House">SINGLE APARTMENT</option>
                                                <option value="Guest House">ALL APARTMENTS</option>

                    </select>

                     <input type="text" name="Numberofguests" placeholder=" Enter Number of Guests " required>
                     <input type="text" name="GroupName" placeholder="Enter Group Name" required>
                     <input type="text" name="CompanyName" placeholder="Enter Company Name" required>

                    <select name="Bed" class="selectinput">
						<option value selected >Bedding Type</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
						<option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
						<option value="None">None</option>
                    </select>
                    <select name="NoofRoom" class="selectinput">
                       <option value selected>No of Room</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                    </select>
                    <select name="mop" class="selectinput">
						<option value selected >Method of Payment </option>
                        <option value="Cash">Cash</option>
                        <option value="Transfer">Transfer</option>
						<option value="Master Card">Master Card</option>
                        <option value="Visa">Visa</option>
                    </select>
                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type ="date">
                        </span>
                        <span>
                            <label for="cin"> Check-Out</label>
                            <input name="cout" type ="date">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>

        <!-- ==== room book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $FamilyName = $_POST['FamilyName'];
                $FirstName = $_POST['FirstName'];
                $ResidentialAddress = $_POST['ResidentialAddress'];
                $State = $_POST['State'];
                $Nationality = $_POST['Nationality'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $idt = $_POST['idt']; // Issue Date
                $doe = $_POST['doe']; // Date of Expiry
                $Numberofguests = $_POST['Numberofguests']; // New Field
                $GroupName = $_POST['GroupName'];          // New Field
                $CompanyName = $_POST['CompanyName'];      // New Field
                $mop = $_POST['mop'];
                $Idtype = $_POST['Idtype']; // ID Type
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];
                
                if($FamilyName == "" || $Email == "" || $FirstName == ""|| $idt == ""|| $doe == ""|| $CompanyName == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO roombook(FamilyName,FirstName,ResidentialAddress,State,Nationality,Email,Country,Phone,RoomType,Bed,NoofRoom,idt,doe,Numberofguests,GroupName,CompanyName,mop,Idtype,cin,cout,stat,nodays) VALUES ('$FamilyName', '$FirstName', '$ResidentialAddress', '$State', '$Nationality', '$Email', '$Country', '$Phone', '$RoomType', '$Bed', '$NoofRoom', '$idt', '$doe', '$Numberofguests', '$GroupName', '$CompanyName', '$mop','$Idtype','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);
                    

                    
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                }
            }
            ?>
          </div>

    </div>
  </section>
    
  <section id="secondsection"> 
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <h1 class="head">≼ Our room ≽</h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Superior Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
              <i class="fa-solid fa-person-swimming"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Delux Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Single Apartment </h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h4"></div>
          <div class="roomdata">
            <h2>All Apartments</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
      </div>
    </div>
  </section>

 <section id="gallery">
  <h1 class="head">≼ Gallery ≽</h1>
  <div class="gallery">
    <div class="gallery-item">
      <img src="./image/cmpd1.jpg" alt="Gallery Image 1" class="gallery-img">
    </div>
    <div class="gallery-item">
      <img src="./image/mastertwo.jpg" alt="Gallery Image 2" class="gallery-img">
    </div>
    <div class="gallery-item">
      <img src="./image/Masterroom.jpg" alt="Gallery Image 3" class="gallery-img">
    </div>
    <div class="gallery-item">
      <img src="./image/livingroomone.jpg" alt="Gallery Image 4" class="gallery-img">
    </div>
     <div class="gallery-item">
      <img src="./image/livingroomtwo.jpg" alt="Gallery Image 5" class="gallery-img">
    </div>

    <!-- Add more gallery items as needed -->
  </div>
</section>

  <section id="aboutus">
    <div class="flyer-summary">
        <div class="brand-info">
            <h1 class="brand-title">Amangee Luxury Apartments</h1>
            <p class="tagline">Experience the Comfort of Home</p>
        </div>

        <div class="about-details">
            <p>We offer fully-serviced shortlets with spacious living areas, fully-equipped kitchens, and luxurious rooms. Enjoy features like free internet, air-conditioning, 24/7 security, daily housekeeping, and 24/7 power supply.</p>
            <p class="highlight">Book now and enjoy discounts of up to 60%!</p>
        </div>

        <div class="features">
            <h2>Features/Facilities</h2>
            <ul>
                <li>Two bedrooms</li>
                <li>Free Internet</li>
                <li>Air-conditioned</li>
                <li>24/7 Security</li>
                <li>Fully-equipped kitchen</li>
                <li>Daily housekeeping</li>
                <li>24/7 power supply</li>
                <li>Laundry services</li>
            </ul>
        </div>

        <div class="promotion">
            <p class="promo-text">Promotion: Up to 60% discount</p>
            <p class="promo-details">Valid until June 2025</p>
        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Email: <a href="mailto:amangeeluxuryapartments@gmail.com">amangeeluxuryapartments@gmail.com</a></p>
            <p>Address: No. 13 Senegal Street, Bekaji-Jimeta-Yola</p>
            <p>Instagram: <a href="https://instagram.com/amangeeluxuryapartments" target="_blank">@amangeeluxuryapartments</a></p>
            <p>Phone Numbers:</p>
            <ul>
                <li>+234 701 179 2712</li>
                <li>+234 811 325 0704</li>
            </ul>
        </div>

        <div class="cta">
            <p>Book with us today and experience luxury like never before!</p>
            <button class="cta-button" onclick="openbookbox()">Book Now</button>
        </div>
    </div>
</section>

  <section id="contactus">
    <div class="social">
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-solid fa-envelope"></i>
    </div>
    <div class="createdby">
      <h5>Created by @Avi34</h5>
    </div>
  </section>
</body>

<script>

    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>