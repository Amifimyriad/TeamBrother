<?php 
include 'connection.php';


$sql = "select * from other ORDER BY id DESC limit 7";
$query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Other job list</title>
    <meta name="keywords" content="Flow,Flowweb,Flowweb design,Flowweb Development, It, IT company,Best Web development,Website Designing in Ranchi, Dhanbad, Hazaribag, Jharkhand India, Web Development Ranchi, Jamshedpur, Dhanbad, Hazaribag, Dumka, Godda, Koderma, Chaibasa, Palamu, Chatra, Bokaro, Patna, Jharkhand India, Billing Software Development in Ranchi, Jamshedpur,  Jharkhand India, SEO, Search Engine Optimization, Digital Marketing, MLM Software in Ranchi, Software in Ranchi, ERP Software Development in Ranchi."/>
    <meta name="description" content="  We are Flow, best web development company in Ranchi. We love building great Websites.Have an idea or an epic project in mind? Talk to us. Let us know, We will help you to achieve you idea into website.">
    <meta name="author" content="Flowweb--Web Development Company, https://www.flowweb.rf.gd/">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>
<style>
   ::-webkit-scrollbar
  {
  width: 10px;
  background-color: #14171b;
  height: 20px;
  }
  ::-webkit-scrollbar-thumb
  {
  background: linear-gradient(#14171b,#d9083c);
  border-radius: 10px;
  }
</style>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- header
    ================================================== -->
    <header class="s-header" style="padding: -10px;">

        <div class="s-header__logo">
            <a href="index.php">
               <div style="margin-top: -50px;"><h3 style="color:  #d9083c;">Flow</h3></div>
            </a>
        </div>

        <div class="s-header__content">
    
            <nav class="s-header__nav-wrap">
                <ul class="s-header__nav">
                    <li><a  href="index.php" title="Intro">Home</a></li>
                    <li><a  href="about.html" title="About">About</a></li>
                    <li><a  href="index.php" title="Services">Services</a></li>
                    <li><a  href="index.php" title="Works">Works</a></li>
                </ul>
            </nav> <!-- end s-header__nav-wrap -->

            <a href="#about" class="btn btn--primary btn--small">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
                Our price List
            </a>

        </div> <!-- end header-content -->

        <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero target-section">

        <div class="s-hero__bg" style="background-image: url('handshake.png'); background-color:  #1e272b;">
            <div class="gradient-overlay"></div>
        </div>

        <div class="row s-hero__content">
            <div class="column">

                <h1 style="font-size: 60px;color: white;">Jobs<span style="color: #fff;">.</span></h1>

                <div class="s-hero__content-about">
                  <h3>Flow Web Disgning</h3>
                    <p>
                    Here are the list of latest <br> <span style="color: #d9083c">Job's</span> click to apply.
                    </p>
<!--                 <a class="btn btn--primary h-small-width" href="#" style="margin-top: -20px;">Our Price List</a> -->
                    <footer>
                        <div class="s-hero__content-social">
                            <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                        </div>
                    </footer>
                </div>

            </div>
        </div>

        <div class="s-hero__scroll">
            <a href="#about" class="s-hero__scroll-link smoothscroll">
                Scroll Down
            </a>
        </div>

    </section> <!-- end s-hero -->

<!--job  list--->


<section id="about" class="s-about " style="padding: 40px;">
    <h1 style="text-align: center;font-size: 40px;margin-top: -10px;"><span style="color: #d9083c; ">Other MNC Companies </span>Jobs</h1>
    <div class="container ">
     <?php
    while($result = mysqli_fetch_assoc($query)){
    ?>
        
    <div class="row " style="padding:20px; box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.8),
            -3px -3px 15px rgba(255, 255, 255, 0.5); border-radius: 20px;cursor: pointer;margin-top: 50px;">

    
     
<div class="col-sm-12 ">
<div class="card">
  <h5 class="card-header" style="color:#d9083c; font-size: 40px;line-height: 1.2;"><?php echo $result['title']; ?></h5>
  <div class="card-body">
    <p class="card-text" style="color: #fff;"><?php echo $result['content']; ?></p>
    <a href="<?php echo $result['link']; ?>" class="btn btn-primary">Apply Now</a>
  </div>
</div>
</div>
</div>
<?php
    }
    ?>

</div>
</section> 


<!--list ends--->
    

    <!-- contact
    ================================================== -->
    <section class="s-contact">

        <div class="row narrower s-contact__top h-text-center">
            <div class="column" >
                <h3 class="h6" style="margin-top:-90px;">Get In Touch</h3>
                <h1 class="display-1">
                Have an idea or an epic project in mind? Talk to
                us. Let us know, We will help you to achieve you idea into website.
                </h1>
            </div>
        </div> <!-- s-footer__top -->

        <div class="row h-text-center">
            <div class="column" >
                <p class="s-contact__email" style="margin:-10px 0 -25px 0;" >
                    <a href="mailto:flowwebat@gmail.com" style="font-size: 25px;color:black;">flowwebat@gmail.com</a>
                </p>
            </div>
        </div>

    </section>  <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer" style="text-align: center;">
        <div class="row row-y-top" style="">

            <div class="column large-8 medium-12">
                <div class="row">
                    <div class="column large-7 tab-12 s-footer__block">
                        <h4 class="h6">Where to Find Us</h4>
        
                        <p>
                        834005 Ranchi <br>
                        Ratu Road, Jharkhand <br>
                         IN <br>
                        <a href="tel:6201760843">+91-6201760843</a><br>
                        <a href="tel:9304984077">+91-9304984077</a><br>
                        <a href="tel:7493820347">+91-7493820347</a><br>
                        </p>
                    </div>
        
                    <div class="column large-5 tab-12 s-footer__block">
                        <h4 class="h6">Follow Us</h4 class="h6">
        
                        <ul class="s-footer__list">
                            <li><a target="new" href="https://www.facebook.com/FlowWeb-108132431554206">Facebook</a></li>
                            <li><a target="new" href="#0">Whatsapp</a></li>
                            <li><a target="new" href=" https://www.instagram.com/invites/contact/?i=103puopx2pz0e&utm_content=m07kf58">Instagram</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column large-4 medium-12 s-footer__block--end">
                <a href="mailto:flowwebat@gmail.com" class="btn h-full-width">Let's Talk</a>

                <div class="ss-copyright" style="margin-bottom:-60px;" >
                    <span>Copyright Flow 2021</span> 
                    <span>Design by <a href="">FlowWeb</a></span>
                </div>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    top
                </a>
            </div> <!-- end ss-go-top -->

        </div>
    </footer>
    

    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>