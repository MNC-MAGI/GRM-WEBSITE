<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VSBHSS PAGE </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<style>
  .hd{
    position: fixed;
    width: 40px;
    margin-top: 150px;
    box-shadow: 2px 2px 8px 0 rgba(0,0,0.4);
    background-color: aliceblue;
  }
  .hd li{
    height: 60px;
    position: relative;

  }
  .hd li a{
    /*color: #fff;*/
    display: block;
    width: 100%;
    height: 100%;
    line-height: 60px;
    padding-left: 25%;
    border-bottom: 1px solid rgba(0,0,0.4);
    transition: all .3s linear;
  }
  .hd li:nth-child(1) a{
  background-color: blue;
}
.hd li:nth-child(2) a{
  background-color: skyblue;
}
.hd li:nth-child(3) a{
  background-color: red;
}
.hd li:nth-child(4) a{
  background-color: navy;
}
.hd li:nth-child(1) a:hover{
  background-color: blue;
}.hd li:nth-child(2) a:hover{
  background-color: skyblue;
}.hd li:nth-child(3) a:hover{
  background-color: red;
}.hd li:nth-child(4) a:hover{
  background-color: navy;
}
.hd li a i{
  position: absolute;
  top: 17px;
  left: 10px;
  font-size: 20px;
  color: white;
}
.hd li a span{
  font-weight: bold;
  letter-spacing: 1px;
  text-transform: lowercase;
  display: none;
  color: white;
}
.hd li a:hover{
  z-index: 1;
  width: 200px;
  border-bottom: 1px solid rgba(0,0,0,.5);
  box-shadow: 0 0 1px 1px rgba(0,0,0,.3);
}
ul li a:hover span{
  display: block;
  padding-left: 30%;
  transform: translateY(-20px);


}


#a:hover{
  color: blue;
}
#b:hover{
  color: skyblue;
}
#d:hover{
  color: white;
}

.title
{
  background-color:#BFF5C1;

}

.title input
{
  position: center;

}

.title input{
  position: relative;
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 3px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.title input {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.title label
{
color:blue;
  text-align: center;
  margin: 30px 10px 5px 5px;
  font-size: 30px;
font-family:Elephant;
  padding: 30px;

}
.content1
{
color:blue;
  text-align: left;
  margin: 30px 10px 10px 5px;
  font-size: 30px;
font-family:Elephant;
  padding: 10px;

}
table, td, th {
  border: 1px solid;
 padding-top: 5px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 10px;
}

.corres {
color:purple;

  margin: 30px 20px 10px 350px;
width:60%;
height:20%;
  border-collapse: collapse;
  font-size: 20px;

}
ul.a
{
list-style-type: circle;
}
#obj ul li
{
  margin: 10px 20px 10px 350px;
  font-size: 20px;
color:purple;

}
</style>
<body>
<div class="title">
<center><a href=https://cubonline.biz/StudentLogin?Instname=VSBHSSS><input type="submit"  value="Online Fee Payment" target="_blank"><a href="doc\appeal-vsb.pdf" target="_blank"><input type="submit"  value="APPEAL"><label> V.S.BOYS GOVT.AIDED HIGHER SECONDARY SCHOOL</label><br><label> THIRUVARUR</label>
</center>


</div>

  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon">
        <i class="fas fa-bars"></i>

      </label>
      <div class="content">
      <div class="logo">
        <img src="image/logo.jpg" height="77">
      </div>
        <ul class="links">
          <li><a href="#">HOME</a></li>
          <li>
            <a href="cutsabout.php" class="desktop-link">ABOUT US</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">ABOUT US</label>
            <ul>
              <li><a href="#">Management</a></li>
              <li><a href="#">Staff Members</a></li>
              </li>


              </li>
              



            </ul>
          </li>

          <li><a href="cutspublication.php">Institution</a></li>
          <li>
            <a href="#" class="desktop-link">For Students</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="workcurrent.html">Good Samaritan programmes</a></li>
              <li><a href="workinternship.html">The Facilities</a></li>
              <li><a href="workforeign.html">Rules and Regulations</a></li>
              <li><a href="worklong.html">Character Traits</a></li>
              <li><a href="worklong.html">Students achievement</a></li>

            </ul>
          </li>
          
          <li>
            <a href="#" class="desktop-link">For Parents</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Media corner</label>
            <ul>
              <li><a href="media.html">Appeal to Parents</a></li>
              <li><a href="Articles.html">Do's & Don't of Wards </a></li>
              
            </ul>
          </li>
          <li><a href="cutsevent.php">News & Events </a></li>
          <li>
            <a href="cutscontact.php" class="desktop-link">Gallery</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">CONTACT</label>
            <ul>
              <li><a href="#">Location</a></li>
              <li><a href="#">Centers</a></li>
            </ul>
          </li>
          <li><a href="cutsevent.php">Contact Us</a></li>

          <label for="show-features"><i class="fab fa-facebook" id="a"style="margin-left: 10px; margin-top: 30px;cursor: pointer;"></i></label> <a href="https://www.facebook.com/V.S.BoysHigherSecondarySchool/" ></a>
          <label for="show-features"><i class="fab fa-twitter" id="b" style="margin-top: 30px; margin-left: 4px;cursor: pointer;"></i></label>
          <label for="show-features"><i class="fab fa-youtube" id="d" style="margin-top: 30px; margin-left: 4px; cursor: pointer;"></i></label>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>


    </nav>
  </div>

  
<section class="hd">
  <ul>
    <li><a href="https://www.facebook.com/V.S.BoysHigherSecondarySchool/"><i class="fab fa-facebook"><span>Facebook</span></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"><span>Twitter</span></i></a></li>
    <li><a href="https://youtu.be/nyesOFl2Wgw?si=enRcV2WfCCP5RgP4"><i class="fab fa-youtube"><span>Youtube</span></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin"><span>Linked</span></i></a></li>
  </ul>
  
</section>

<div class="content1">
<center><label> The Objectives of the School</label></center><br>
</div>

<div id="obj">
<ul >
        <li>Praying God to be clean by body, mind and tongue.</li>
        <li>To be patriotic and to devoted to the wellbeing of the Nation.</li>
        <li>Respecting parents, students and being obedient to them.</li>
        <li>Discharging the responsibilities upright with calm and courage.</li>
            <li>Learning the life right and being the role model for the others.</li>
        <li>Committed to achieve 100% results from 10th to 12th std.</li>
        <li>Developing the students to achieve state level ranks.</li>
        <li>Developing the students to achieve district level ranks.</li>
        <li>Coaching the students to achieve state level ranks in subjects.</li>
        <li>Coaching the students to ensure that maximum no. students in 10th std score over 450 marks.</li>
        <li>Coaching the plus two students to ensure that maximum of them score over 1100 marks.</li>

</ul>
</div>



  


<section class="foot">
  <div class="mapp-l">
    <h2 style="color: white; margin-top: -120px; font-weight: 290;">GET INTO TOUCH</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4802167698617!2d79.62850797451718!3d10.77448445923053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a55473c1464e8a3%3A0x2630bf83314006a3!2sV%20S%20Boys%20Higher%20Secondary%20School!5e0!3m2!1sen!2sin!4v1761420161903!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
  <div class="add-l">
    <h3>Kamalalayam South Bank Road,</h3>
    <p> Thiruvarur, Tamil Nadu 610001</p>
    <p>04366 290 200</p>
     </div>
  <div class="link-l">
    <h3>Social</h3>
    <img src="image/f.png" height="40" width="45">
    <img src="image/in.png" height="40" width="45">
    <br>
    <br>
    <h3>OUR SCHOOLS</h3>
<a href="#" target="_blank"><label>V S BOYS HR SEC SCHOOL</label></a>   <br>  
<a href="#">SRI GRM SCHOOL</a>     <br>
<a href="#">THIYAGARAJA SCHOOL</a>     
  </div>  
  <br>


  
</section>
<div class="adifoo">
    <hr>
    <p align="center" style="color: white; font-size: 12px; margin-top: 25px;">Copyright 2025- SRI-GRM AGENCY. All rights reserved | MAGI WEBSITE </p>
  </div>

  <script type="text/javascript" src="slid.js"></script>
</body>
</html>