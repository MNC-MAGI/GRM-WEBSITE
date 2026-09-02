<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VSBHSS PAGE </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <link rel="stylesheet" href="https://cdn.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
          <li><a href="vsbhome.php">HOME</a></li>
          <li>
            <a href="cutsabout.php" class="desktop-link">ABOUT US</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">ABOUT US</label>
            <ul>
              <li><a href="vsbmgnt.php">Management</a></li>
              <li><a href="vsbteacher.php">Staff Members</a></li>
              </li>
              </li>
              </ul>
          </li>
          <li><a href="vsbinst.php">Institution</a></li>
          <li>
            <a href="#" class="desktop-link">For Students</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="vsb_sama_prog.php">Good Samaritan programmes</a></li>
              <li><a href="vsb_facilities.php">The Facilities</a></li>
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

<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="img_slider">
<figure>
<div class="mySlides_fade">
  <div class="numbertext">1 / 3</div>
  <img src="image\h1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides_fade">
  <div class="numbertext">2 / 3</div>
  <img src="image\h2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides_fade">
  <div class="numbertext">3 / 3</div>
  <img src="image\h3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
</figure>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>



<section class="hd">
  <ul>
    <li><a href="https://www.facebook.com/V.S.BoysHigherSecondarySchool/"><i class="fab fa-facebook"><span>Facebook</span></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"><span>Twitter</span></i></a></li>
    <li><a href="https://youtu.be/nyesOFl2Wgw?si=enRcV2WfCCP5RgP4"><i class="fab fa-youtube"><span>Youtube</span></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin"><span>Linked</span></i></a></li>
  </ul>
  
</section>


<section class="herothird">
  <div class="padl">
    <h3>ABOUT VST</h3>
    <p>This school is a century old institution and it came in to being as a Govt. school. The school had been shifted to private management in 1961 – 62, late Thiru V.S Thyagaraja Mudaliar M.A., took over the management of the school in the name of his adopted father Vadathimangalam Thiru V.T Somasundaram B.A., and running successfully since then.

The school has been upgraded as a higher secondary school in 1978-79 and running successfully. The school honour the retired teachers with good mementoes.The teachers are honoured with mementos on Teachers’ Day.

The students who score first rank in Std 10 -12 are encouraged and honoured with prizes, given on behalf of the trust founded by former Correspondent of the school Selvi N.Janaki B.A., L.T.,


Veppammal Trust founded by Prof. T.Rajagopalan too offer cash prizes to meritorious students.

</p>
    <pre><a href="ne.html" download=""><input type="button" id="submit" value="Read More" style="cursor: pointer;"></a>                                                                      <input type="button" id="su" value="> Donate now"></pre>
  </div>
  <div class="padr">
    <h3>NOTIFICATION</h3>
    <marquee direction="up" scrolldelay="25"><a href=""></a>
    <hr>
    <a href=""></a>
    <hr>
    <a href=""></a>
    <hr>
    <a href=""></a>
    <hr>
    <a href=""></a>
    <hr>
    <a href=""></a>
  </marquee>
  </div>
</section>



<section class="herofour">
  <div class="padone">
    <h3>SRI RENGANATHA MUTHALIYAR</h3>
    <img src="image/ha.jpg">
    <p>Vadapathimangalam Somasundaram (T.V.T. Somasundaram) was a prominent figure in Tiruvarur, Tamil Nadu, whose name is honored by the Vadapathimangalam Somasundaram Boys Higher Secondary School. He was the adopted father of V.S. Thyagaraja Mudaliar, who took over the management of the school in 1961–62 and has run it successfully ever since. The school itself is a century-old institution that was originally a government school before transitioning to private management. </p>
   
  </div>
  <div class="padtwo">
    <h3>WHAT IS VSBHSS</h3>
    <img src="image/1.png" >
    <a href=""></a>
    <hr>
    <img src="image/2.png">
    <a href=""></a>
    <hr>
    <img src="image/3.png">
    <a href=""></a>
    <hr>
    <img src="image/4.png">
    <a href=""></a>
    <hr>
    <img src="image/5.png">
    <a href=""></a>
    <hr>
       
  
  </div>
  </section>
<!---
<section class="slide-container">
  <div class="slide-content">
    <div class="card-wrapper">
      <div class="card">
        <div class="image-content">
          <span class="overlay"></span>

          <div class="card-image">
            <img src="image/card1.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
  <h2>programe center</h2>
  
</section>
-->
<!-- slider--->
<div class="wrappers">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <li class="card">
          <h2>Tamil Talent Search Exam</h2>
          <div class="img"><img src="image/card0.jpg" alt="img" draggable="false"></div>
          
          <span>11ஆம் வகுப்பு பயிலும் மாணவர்களுக்கு தமிழ்மொழி இலக்கியத் திறனறித்தேர்வு நடைபெற்றது . அதில் திருவாரூர் வ. சோ.ஆண்கள் அரசு உதவிபெறும் மேல்நிலைப்பள்ளி சார்ந்த S.முகமது யூசப் (X1 - A1) என்ற மாணவர் 82 மதிப்பெண்கள் எடுத்து திருவாரூர் மாவட்டம் அளவில் முதலிடம் பெற்றுள்ளார். </span>
          <a href="" id="su">know more</a>
        </li>
        <li class="card">
          <h2>Electoral Literacy Club competition</h2>
          <div class="img"><img src="image/card4.jpg" alt="img" draggable="false"></div>
          <span>மாவட்ட அளவில் நடத்தப்பட்ட பட்டுப்போட்டியில் நம்பள்ளி 12A1 பிரிவை சேர்ந்த மாணவர் B.ஸ்ரீனிவாஸ் முதலிடம் பிடித்து பரிசுத்தொகை ரூ.2000/- பெற்றார் . இப்பரிசுத்தொகையை மாவட்ட ஆட்சியர் அவர்களால் நேற்று U.P.மஹாலில் நடைபெற்ற விழாவில் பெற்று வந்தார் என்பதை மகிழ்வுடன் தெரிவித்துக் கொள்கிறோம் .</span>
          <a href="" id="su">know more</a>

        </li>
        <li class="card">
          <h2>Cultural Dance competition</h2>
          <div class="img"><img src="image/card5.jpg" alt="img" draggable="false"></div>
          <span>நாட்டுப்புற நடன போட்டியில் திருவாருர் வ.சோ.ஆண்கள் மேல்நிலைப்பள்ளி 9B வகுப்பில் படிக்கும் B.ஹரிஷ்ராஜ் என்ற மாணவர் மாநில அளவில் முதலிடம் பெற்று இவர் தேசிய அளவில் புதுடெல்லியில் நடக்கும் போட்டிகளில் கலந்து கொள்ள உள்ளார். </span>
          <a href="" id="su">know more</a>

        </li>
        <li class="card">
          <h2>CARD6</h2>
          <div class="img"><img src="image/card6.jpg" alt="img" draggable="false"></div>
          <span>VSBHSS SPACE</span>
          <a href="" id="su">know more</a>

        </li>
        <li class="card">
          <h2>CARD4</h2>
          <div class="img"><img src="image/card4.jpg" alt="img" draggable="false"></div>
          <span>VSBHSS SPACE</span>
          <a href="" id="su">know more</a>

        </li>
        <li class="card">
          <h2>CARD 4</h2>
          <div class="img"><img src="image/card4.jpg" alt="img" draggable="false"></div>
          <span>VSBHSS SPACE</span>
          <a href="" id="su">know more</a>

        </li>

      </ul>


      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <br>
    <br>
  </div>
  <img src="image/map.jpg">
</section>
<section class="nav">
  

</section>

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