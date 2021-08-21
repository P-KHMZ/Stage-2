<?php include '_header.php'; ?>

<header id="header"  id="home">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
                    <ul>
                        <li>
                            <a href="<?= $numero; ?>">Phone-line: <?= $numero; ?></a>
                        </li>
                        <li><a href="#">|</a></li>
                        <li><a href="<?=$email; ?>">Email: <?= $email;?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="#"><img src="img/hng.png" alt="" title="" style="width: 80px" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#home">HOME</a></li>
                    <li><a href="#about">IDENTITY</a></li>
                    <li><a href="#coffee">ADRESS</a></li>
                    <li><a href="#gallery">EDUCATION</a></li>
                    <li><a href="#review">PROFESSIONAL</a></li>
                    <li><a href="#blog">OTHER</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="banner-area" id="home">
    <div class="container m-20">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-7">
                <h6 class="text-uppercase" style="color:#2f90cf ">Now you can feel the Energy</h6>
                <h2 style="color:#b68834">
                   Enjoy the coding with Zuri training <br><br><br><br>
                </h2>
            </div>
        </div>
    </div>
</section>

<?php 
    $q = "SELECT * FROM zuri_table";
    mysqli_set_charset($con, 'utf8');
    $result = mysqli_query($con, $q);
    if($result){
        while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo'<section class="video-sec-area pb-100 pt-40" id="about">
                <div class="container">
                    <div class="row justify-content-start align-items-center">
                        <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                            <div class="overlay overlay-bg"></div>
                        </div>
                        <div class="col-lg-6 video-left">
                            <h6>IDENTITY</h6>
                            <h1>IRAGI KAHUMUZA Pierre</h1>
                            <h1>Display Name: Peter</h1>
                            <p><span>Short Description</span></p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut
                                labore et
                                dolore magna aliqua. Ut enim ad minim.
                            </p>
                            <img class="img-fluid" src="img/signature.png" alt="signature"> <br>
                            <a href="shortContact.php" class="primary-btn text-uppercase">Contact Me</a>
                        </div>
                    </div>
                </div>
            </section>';
        }
        mysqli_free_result($result);
    }else{
        echo'<p> The current user can not be retrieved</p>';
        echo'<p>'.mysqli_error($con).'</p>';
    }
?>

<section class="menu-area section-gap" id="coffee">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Address and Contacts</h1>
                    <p>Here is my address as well as my contacts</p>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4">
            <div class="single-menu">
                <div class="title-div justify-content-between d-flex">
                        <h4>Contry of Birth</h4>
                        <p class="price float-right">
                            The DR of Congo
                        </p>
                    </div>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>Contry of Residence</h4>
                        <p class="price float-right">
                            The Republic of Rwanda
                        </p>
                    </div>
                    <p>
                        Usage of the Internet is becoming more 
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>Place of Birth</h4>
                        <p class="price float-right">
                            Goma
                        </p>
                    </div>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>Date of Birth</h4>
                        <p class="price float-right">
                            June 16, 1996
                        </p>
                    </div>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>Email</h4>
                        <p class="price float-right">
                            Gmail & Outlook
                        </p>
                    </div>
                    <p>
                        pierrekahumuza@gmail.com <br>
                        pierrekahumuza@outlook.com
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>Telephone</h4>
                        <p class="price float-right">
                            
                        </p>
                    </div>
                    <p>
                        + (243) 991 - 163 - 777 <br>
                        + (250) 789 - 158 - 308
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="gallery-area section-gap" id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">EDUCATION & LANGUAGES</h1>
                    <p>Here is my education journey a well as languages I know</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
               <table class="table table-borderless">
                  <thead>
                     <tr>
                        <th>No.</th>
                        <th>Degree's Obtient</th>
                        <th>Schools and Year</th>
                        <th>Languages</th>
                     </tr>
                  </thead>
                  <tbody>
                        <tr>
                            <td>I.</td>
                            <td>Bachelor's Degree</td>
                            <td>May 2021 at Kigali Independent University</td>
                            <th>English</th>
                        </tr>
                        <tr>
                            <td>II.</td>
                            <td>State Diploma</td>
                            <td>2014 at Himbi High School</td>
                            <th>French</th>
                        </tr>
                        <tr>
                            <td>III.</td>
                            <td>Primary Certificate</td>
                            <td>2008 at Katindo Primary School</td>
                            <th>Swahili</th>
                        </tr>
                  </tbody>
               </table>
            </div>
        </div>
    </div>
</section>


<section class="review-area section-gap" id="review">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Professional Experience</h1>
                    <p> Here is my professional experience.</p>

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6 col-md-6 single-review">
                <img src="img/r1.png" alt="">
                <div class="title d-flex flex-row">

                    <h5>Gold Creation</h5>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <p>
                    Gold creation is a Humanitarian Organization created by altruist and philantropist 
                    young student. Its main mission is to collect clothes, money, 
                    shoes in order to assist destute children and street's children as well. <br> <br>
                    I worked in Gold Creation from 2017 to 2018 and our job was 
                    to raise awareness and collect the staff from our camarade students before going 
                    to the beneficiary

                </p>
            </div>
            <div class="col-lg-6 col-md-6 single-review">
                <img src="img/r2.png" alt="">
                <div class="title d-flex flex-row">
                    <h5>Centre Culturel des Pays des Grands Lacs | CCPGL</h5>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <p>
                    Centre Culturel des Pays des Grands Lacs CCPGL or Greate Lake's Countries 
                    Cultural Centre is a regional organisation located in the Great Lake region 
                    formed by three(3) countries The Democratic Republic of Congo DRC, The Republic 
                    of Rwanda and The Republic of Burundi, its main purpose is the cultural exchanges 
                    and peaceful cohabitation. <br> I worked there from August 2020 to May 2021, where 
                    I worked in different departments to different posts
                </p>
            </div>
        </div>
        </div>
    </div>
</section>


<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Other Skills</h1>
                    <p>Apart from the above citied skills I have also some other skils.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 single-blog">
            <table class="table table-borderless">
                  <thead>
                     <tr>
                        <th>No.</th>
                        <th>Programming</th>
                        <th>Networking</th>
                        <th>Technical Software</th>
                     </tr>
                  </thead>
                  <tbody>
                        <tr>
                            <td>I.</td>
                            <td>Hardware</td>
                            <td>System Admistration</td>
                            <th>Cisco Packet Tracer</th>
                        </tr>
                        <tr>
                            <td>II.</td>
                            <td>Software</td>
                            <td></td>
                            <th>MikroC</th>
                        </tr>
                        <tr>
                            <td>III.</td>
                            <td></td>
                            <td></td>
                            <th>Arduino</th>
                        </tr>
                        <tr>
                            <td>IV.</td>
                            <td></td>
                            <td></td>
                            <th>Proteus</th>
                        </tr>
                        <tr>
                            <td>V.</td>
                            <td></td>
                            <td></td>
                            <th>Survey Monkey</th>
                        </tr>
                        <tr>
                            <td>VI.</td>
                            <td></td>
                            <td></td>
                            <th>CSpro</th>
                        </tr>
                  </tbody>
               </table>
            </div>
        </div>
    </div>
</section>


<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Me</h6>
                    <p>
                        Peter KHMZ
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                    </p>
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="https://web.facebook.com/ingressiveforgood/?_rdc=1&_rdr"><i style="color:#3EDAD8;" class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/ingressive4good?lang=en" ><i style="color:#3EDAD8;" class="fa fa-twitter" ></i></a>
                        <a href="https://www.instagram.com/ingressive4good/?hl=en"><i style="color:#3EDAD8;" class="fa fa-instagram"></i></a>
                        <a href="#"><i style="color:#3EDAD8;" class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/coffee/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 May 2021 08:37:18 GMT -->

</html>