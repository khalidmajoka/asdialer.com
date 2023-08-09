<?php

    require_once "db.php";

        if (isset($_GET['id'])) {
        $postid = $_GET['id'];

        $sql = "SELECT * FROM posts WHERE id='$postid'";
        $query = mysqli_query($conn, $sql);

        $sql2 = "SELECT * FROM comments WHERE blogid='$postid' AND status=1";
        $query2 = mysqli_query($conn, $sql2);
       
        
      }
      

      else {
        header('Location:blog.php');
      }

    ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Xk37b12SZscoQQkSJ4GAvfL89O2d9wO40xw6VpOEcNI" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/style3.css">
    <link rel="stylesheet" href="assets/css/style4.css">
    <link rel="stylesheet" href="assets/css/style5.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/default.js"></script>
    <title>Powerful Cloud Call-Center Solution</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PYNPSJS7BJ"></script>

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-PYNPSJS7BJ');
    </script>
</head>

<body>
    <nav style="position: sticky;" id="navbar-desktop"
        class="navbar navbar-expand-lg navbar-light bg-light inheritedProps">
        <div class="container"><a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt="logo"
                                                                              id="logo"></a> <button type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.html" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item"
                                href="#">Mobile Friendly Dialer</a> <a class="dropdown-item" href="#">Interactive Voice
                                Response</a> <a class="dropdown-item" href="#">Call Center Solutions</a> <a
                                class="dropdown-item" href="#">CRM And Dialer Integration</a> <a class="dropdown-item"
                                href="#">Dialer Reporting & Analysis</a> <a class="dropdown-item" href="#">Disaster
                                Recovery Solutions</a> <a class="dropdown-item" href="#">Security</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Support</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> VOIP </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item"
                                href="#">VOIP Server</a> <a class="dropdown-item" href="#">VOIP App</a> </div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> About </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item"
                                href="#">About</a> <a class="dropdown-item" href="#">Domain</a> <a class="dropdown-item"
                                href="#">Data Centers</a> <a class="dropdown-item" href="#">Services</a> <a
                                class="dropdown-item" href="#">Projects</a> <a class="dropdown-item" href="#">FAQ</a> <a
                                class="dropdown-item" href="#">Coming Soon</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">404 Page</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Packages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item"
                                href="#">Monthly</a> <a class="dropdown-item" href="#">Yearly</a>
                    </li>
                    <li class="nav-item"><a href="blog.php" target="_blank" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="#" target="_blank" class="nav-link">Contact</a></li>

                </ul>
                <!-- <li class="nav-item no-bullets" style="margin-left: 50px;">
                
                <div class="h-item-meta">
                  <span><img style="width:8%;" src="img/phone-call.png" alt=""></span>
                    <label><b>Call Us:</b> &nbsp;  &nbsp; +923274561885 <br><b>Whatsapp:</b>&nbsp;+447362019985</label><br>
                    <span style="padding-left: 120px;">(Mon-Fri) 24/7</span>
                </div>
              
            </li>
            <li class="nav-item no-bullets">
              
              <div class="h-item-meta">
                <span><img style="width:8%;" src="img/gmail.png" alt=""></span>
                  <label><b>&nbsp;Create a ticket:</b><br>&nbsp;info@asdialer.com</label><br>
                  <span style="padding-left: 35px;">(Sat-Sun) Email Support</span>
              </div>
            
            </li>
            <li class="nav-item no-bullets">
              
                <div class="h-item-meta">
                  <span><img style="width:10%;" src="img/map.png" alt=""></span>
                    <label><b>&nbsp;2029-Muliner Ave Bronx</b><br>&nbsp;Bronx 10462, USA</label><br>
                    <span style="padding-left: 45px;">USA</span>

                </div>
              
              </li> -->


                <!-- <div class="mobile-view-button"> <a href="https://client.asdialer.com/signup" target="_blank" class="default-btn " id="mobile-view-1">Creat an Account!</a> <a href="https://client.asdialer.com/login" target="_blank" class="default-btn login" id="mobile-view-2">Login</a> </div> -->
            </div>
        </div>
        </div>
    </nav>

    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <h2 class="heading-2 text-center">Blog Post</h2>
            <div class="wthree_gallery_grids">

                <div class="row">

                    <?php 

                          while ($row = mysqli_fetch_assoc($query)) {
                          	
					echo
					'<div class="col-md-12">
						<a href="blog.php"><i class="fa fa-arrow-left"> Back</i></a>
						<br>
						<h4>'.$row["title"].'</h4>
						<br>
						<h6 style="color: #cc2222;">'.$row["author"].' <b style="color: #000;">|</b> ('.mysqli_num_rows($query2).') Comments <b style="color: #000;">|</b> '.$row["date"].'</h6>
						<br>

						<p class=" justify-content-center">
							'.$row["content"].'
						</p>'
							;
						}

					?>

                    <hr>
                    <!-- new -->
                    <div class="container bootstrap snippets bootdey">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-comment">
                                    <h5 style="color: #cc2222;">Comments (<?php echo mysqli_num_rows($query2); ?>)</h5>
                                    <hr />
                                    <ul class="comments">
                                        <li class="clearfix">
                                            <!-- <img src="https://bootdey.com/img/Content/user_1.jpg" class="avatar" alt=""> -->
                                            <div class="post-comments">
                                                <?php 
						                     while ($row2 = mysqli_fetch_assoc($query2)) {
                                              echo  '<p class="card-text">'.$row2["date"].'<a class="p-5" style="color:#cc2222" href="#">'.$row2["name"].' :<i
                                                        class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                                                <p class="card-text">
                                                '.$row2["comment"].'
                                                </p>';
                                            }
                                            ?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- new -->

                    <hr>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Leave a comment</h4>
                                <p class="card-description text-center">ASDIALER BLOG</p>
                                <form class="forms-sample" action="functions/comment.php" method="post">
                                    <input type="hidden" name="blogid" value="<?php echo $postid;?>" />
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Username</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                                            placeholder="Username" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Your Comment</label>
                                        <textarea type="text" name="comment" class="form-control"
                                            id="exampleInputEmail1" placeholder="Enter Your Comment"
                                            required></textarea>
                                    </div>

                                    <center><button type="submit" name="submit" class="btn btn-primary mr-2 my-5">
                                            Submit
                                        </button></center>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>


            </div>

            <div class="row">
                <!-- <h5>Comments</h5> -->

            </div>

        </div>
        <script src="js/jzBox.js"></script>
    </div>
    </div>
    <!-- //gallery -->






    <!--footer section start-->
    <footer class="site-footer inherited.Props"> <svg class="icon-logo-star" width="35px" height="35px"
            viewBox="0 0 362.62 388.52" data-spin-me="false">
            <path
                d="M156.58,239l-88.3,64.75c-10.59,7.06-18.84,11.77-29.43,11.77-21.19,0-38.85-18.84-38.85-40C0,257.83,14.13,244.88,27.08,239l103.6-44.74L27.08,148.34C13,142.46,0,129.51,0,111.85,0,90.66,18.84,73,40,73c10.6,0,17.66,3.53,28.25,11.77l88.3,64.75L144.81,44.74C141.28,20,157.76,0,181.31,0s40,18.84,36.5,43.56L206,149.52l88.3-64.75C304.93,76.53,313.17,73,323.77,73a39.2,39.2,0,0,1,38.85,38.85c0,18.84-12.95,30.61-27.08,36.5L231.93,194.26,335.54,239c14.13,5.88,27.08,18.83,27.08,37.67,0,21.19-18.84,38.85-40,38.85-9.42,0-17.66-4.71-28.26-11.77L206,239l11.77,104.78c3.53,24.72-12.95,44.74-36.5,44.74s-40-18.84-36.5-43.56Z">
            </path>
        </svg>
        <div class="footer-inside">
            <div class="footer-message-and-form">
                <p class="colophon"> Powored by <a href="https://aresync.com">Aresync, Inc</a>. </p>
                <div id="mobile-none" class="footer-form-wrap">
                    <h4>Keep up to date on AS DIALER</h4>
                    <p>with our hand-crafted newsletter</p>
                    <form action="mailto:rafaqat.dsg@gmail.com" id="mktoForm_1402" novalidate="novalidate"
                        class="mktoForm mktoHasWidth mktoLayoutLeft"
                        style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: rgb(51, 51, 51); width: 151px;">
                        <style type="text/css">
                        .mktoForm .mktoButtonWrap.mktoFirefox .mktoButton {
                            background-color: #82C43A;
                            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
                            background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
                            background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
                            background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
                            background-image: linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
                            border: none;
                            display: inline-block;
                            vertical-align: middle;
                            margin: 2px;
                            font: italic 14px/32px Georgia, Serif;
                            text-align: center;
                            color: white;
                            text-decoration: none;
                            text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
                            -webkit-box-shadow: inset 0px -3px 0px rgba(0, 0, 0, 0.1), 0px 3px 0px rgba(0, 0, 0, 0.1);
                            -moz-box-shadow: inset 0px -3px 0px rgba(0, 0, 0, 0.1), 0px 3px 0px rgba(0, 0, 0, 0.1);
                            box-shadow: inset 0px -3px 0px rgba(0, 0, 0, 0.1), 0px 3px 0px rgba(0, 0, 0, 0.1);
                            padding: 0px 15px 3px;
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            border-radius: 5px;
                        }

                        .mktoForm .mktoButtonWrap.mktoFirefox .mktoButton:hover {
                            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.2));
                            background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.2));
                            background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.2));
                            background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.2));
                            background-image: linear-gradient(top, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.2));
                        }

                        .mktoForm .mktoButtonWrap.mktoFirefox .mktoButton:active {
                            position: relative;
                            top: 2px;
                            -webkit-box-shadow: inset 0px -1px 0px rgba(0, 0, 0, 0.1), 0px 2px 0px rgba(0, 0, 0, 0.1);
                            -moz-box-shadow: inset 0px -1px 0px rgba(0, 0, 0, 0.1), 0px 2px 0px rgba(0, 0, 0, 0.1);
                            box-shadow: inset 0px -1px 0px rgba(0, 0, 0, 0.1), 0px 2px 0px rgba(0, 0, 0, 0.1);
                        }
                        </style>
                        <div class="mktoFormRow">
                            <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 10px;">
                                <div class="mktoOffset" style="width: 10px;"></div>
                                <div class="mktoFieldWrap mktoRequiredField"><label for="Email" id="LblEmail"
                                        class="mktoLabel mktoHasWidth" style="width: 100px;">
                                        <div class="mktoAsterix">*</div>Email Address:
                                    </label>
                                    <div class="mktoGutter mktoHasWidth" style="width: 10px;"></div><input id="Email"
                                        name="Email" maxlength="255" aria-labelledby="LblEmail InstructEmail"
                                        type="email" class="mktoField mktoEmailField mktoHasWidth mktoRequired"
                                        aria-required="true" style="width: 150px;"><span id="InstructEmail"
                                        tabindex="-1" class="mktoInstruction"></span>
                                    <div class="mktoClear"></div>
                                </div>
                                <div class="mktoClear"></div>
                            </div>
                            <div class="mktoClear"></div>
                        </div>
                        <div class="mktoFormRow"><input type="hidden" name="utm_source__c"
                                class="mktoField mktoFieldDescriptor mktoFormCol" value="css-tricks"
                                style="margin-bottom: 10px;">
                            <div class="mktoClear"></div>
                        </div>
                        <div class="mktoButtonRow"><span class="mktoButtonWrap mktoFirefox"
                                style="margin-left: 120px;"><button type="submit"
                                    class="mktoButton">Subscribe</button></span></div><input type="hidden" name="formid"
                            class="mktoField mktoFieldDescriptor" value="1402"><input type="hidden" name="munchkinId"
                            class="mktoField mktoFieldDescriptor" value="113-DTN-266">
                    </form>
                </div>
            </div>
            <div class="link-grid">
                <div>
                    <div>
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">VOIP</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h5>Features</h5>
                        <ul>
                            <li><a href="#">Mobile Friendly Dialer</a></li>
                            <li><a href="#">Interactive Voice Response</a></li>
                            <li><a href="#">Call Center Solutions</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h5>Contact</h5>
                        <ul>
                            <li><span style="color:rgb(255, 122, 24)">Call Us:</span> <a
                                    href="tel:+447362019985">+447362019985</a>,<a href="#"></a></li>
                            <li><span style="color:rgb(255, 122, 24)">Email:</span> <span class="px-3"><a
                                        href="mailto:info@asdialer.com">info@asdialer.com</a></span> </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h5>Free Trial</h5>
                        <a href="https://client.asdialer.com/signup"><button class="button-1"><span>FREE
                                    TRIAL</span></button></a>
                    </div>
                </div>


            </div>
        </div> <a href="https://asdialer.com/#top-of-site" class="top-of-site-link" data-visible="true"> <span
                class="screen-reader-text">Back to Top</span> <svg width="32" height="32" viewBox="0 0 100 100">
                <path fill="white"
                    d="m50 0c-13.262 0-25.98 5.2695-35.355 14.645s-14.645 22.094-14.645 35.355 5.2695 25.98 14.645 35.355 22.094 14.645 35.355 14.645 25.98-5.2695 35.355-14.645 14.645-22.094 14.645-35.355-5.2695-25.98-14.645-35.355-22.094-14.645-35.355-14.645zm20.832 62.5-20.832-22.457-20.625 22.457c-1.207 0.74219-2.7656 0.57812-3.7891-0.39844-1.0273-0.98047-1.2695-2.5273-0.58594-3.7695l22.918-25c0.60156-0.61328 1.4297-0.96094 2.2891-0.96094 0.86328 0 1.6914 0.34766 2.293 0.96094l22.918 25c0.88672 1.2891 0.6875 3.0352-0.47266 4.0898-1.1562 1.0508-2.9141 1.0859-4.1133 0.078125z">
                </path>
            </svg> </a>
        <div id="consent-banner"></div>
        <div id="teconsent" consent="0|1|2|3"> <a id="icon-id05260943505895821" tabindex="0" role="contentinfo"
                aria-label="Secondary" lang="en" style="cursor: pointer;"><img class="cookies"
                    src="assets/img/cookies.png"></a> </div>
        <!-- Whatsapp -->
        <div class="wrapper">
            <a class="social" href="https://wa.me/+19174733638/?text=Hi!%20ASDIALER."><i
                    class="fa-brands fa-whatsapp"></i></a>
            <a class="social" href="tel:+923274561885"> <i class="fa-solid fa-phone"></i></a>
        </div>

    </footer>

    <!--footer section end-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- counter -->
    <script>
    $(document).ready(function() {
        $('.counter-value').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 3500,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
    </script>

    <!-- testimonial -->
    <script>
    $(document).ready(function() {
        $(".testimonial .indicators li").click(function() {
            var i = $(this).index();
            var targetElement = $(".testimonial .tabs li");
            targetElement.eq(i).addClass('active');
            targetElement.not(targetElement[i]).removeClass('active');
        });
        $(".testimonial .tabs li").click(function() {
            var targetElement = $(".testimonial .tabs li");
            targetElement.addClass('active');
            targetElement.not($(this)).removeClass('active');
        });
    });
    $(document).ready(function() {
        $(".slider .swiper-pagination span").each(function(i) {
            $(this).text(i + 1).prepend("0");
        });
    });
    </script>

    <!-- Whatsapp -->
    <script>
    var close_button = document.querySelector(".close-button");
    var social_buttons = document.querySelectorAll(".social");

    close_button.addEventListener('click', () => {
        social_buttons.forEach(function(buttons) {
            buttons.classList.toggle('hide');
        });
    });
    </script>



    <!-- navbar logo on scroll -->


    <!-- <script>
    window.onscroll = function(){

    };

    function scroll () {
        if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("logo").style.top = "0";
        }
        else{
            document.getElementById("logo").style.top = "-60px";
        }
    }
</script> -->


    <!-- navbar logo on scroll -->
    <script>
    $(window).scroll(function() {
        if ($(this).scrollTop() < 1000) {
            $('#logo').hide(1000);
        } else {
            $('#logo').show(1000);
        }
    });
    </script>


</body>

</html>