   <?php 
error_reporting(0);
   ?>
    <main>
     <!--    <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <header class="stick">
            <div class="topbar">
                <div class="container">
               
                    <div class="topbar-register">
                         <?php if (strlen($_SESSION['fosuid']==0)) {?> 
                    <a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                <?php }?>
                     <?php if (strlen($_SESSION['fosuid']>0)) {?>
   <a  href="my-account.php" title="My Account" itemprop="url">My Account</a>
                     <?php } ?>
                    </div>
                    <div class="social1">
                        <!--a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a-->
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><img src="assets/images/logo3.png" ></div>
                    <nav>
                    
                        <div class="menu-sec">
                            <ul>
<li><a href="index.php" title="Home" itemprop="url">Home</li>

<li class="menu-item-has-children"><a href="our-menu.php" title="RESTAURANTS" itemprop="url">Food Menu</a>
                                    <ul class="sub-dropdown">
                                        <?php
     $query=mysqli_query($con,"select * from  tblcategory");
              while($row=mysqli_fetch_array($query))
              {
              ?> 
                                        <li><a href="categorywise-menu.php?catid=<?php echo $row['CategoryName'];?>" title="<?php echo $row['CategoryName'];?>" itemprop="url"><?php echo $row['CategoryName'];?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>

<li><a href="track-order.php" title="Track Order" itemprop="url">Track Order</a></li>
<li><a href="https://aniketdoke35.github.io/contact_us-page/contact.html" title="Contact us" itemprop="url">Contact us </a></li>
<!-- <li><a href="reservation.php"  title="BOOK A TABLE" itemprop="url">BOOK A TABLE </a></li> -->

                          
                            </ul>
         <?php if (strlen($_SESSION['fosuid']==0)) {?> 
                    <a class="log-popup-btn red-bg brd-rd4" href="#" title="Login" itemprop="url">My Cart</a> 
                <?php }?>

                                   <?php if (strlen($_SESSION['fosuid']>0)) {?>
                            <a class="red-bg brd-rd4" href="cart.php" title="Register" itemprop="url">My Cart</a>
                        <?php } ?>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <div class="responsive-header">
    
            <div class="responsive-logomenu">
                <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url">Food Ordering System</h1></div>
                <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="responsive-menu">
                <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
                <div class="menu-lst">
                    <ul>
 <li><a href="index.php" title="Home" itemprop="url">Home</li>
<li class="menu-item-has-children"><a href="our-menu.php" title="RESTAURANTS" itemprop="url">Food Menu</a>
                                    <ul class="sub-dropdown">
                                        <?php
     $query=mysqli_query($con,"select * from  tblcategory");
              while($row=mysqli_fetch_array($query))
              {
              ?> 
                                        <li><a href="categorywise-menu.php?catid=<?php echo $row['CategoryName'];?>" title="<?php echo $row['CategoryName'];?>" itemprop="url"><?php echo $row['CategoryName'];?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
<li><a href="track-order.php" title="Track Order" itemprop="url">Track Order</a></li>
<li><a href="contact-us.php" title="Contact us" itemprop="url">Contact us </a></li>
                    </ul>
                </div>
              
                <div class="topbar-register">
                        <?php if (strlen($_SESSION['fosuid']==0)) {?> 
                    <a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                <?php }?>
                     <?php if (strlen($_SESSION['fosuid']>0)) {?>
   <a  href="my-account.php" title="My Account" itemprop="url">My Account</a>
                     <?php } ?>
                </div>
                <
                <div class="social1">
                    <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="register-btn">

                            <?php if (strlen($_SESSION['fosuid']==0)) {?> 
                    <a class="log-popup-btn red-bg brd-rd4" href="#" title="Login" itemprop="url">My Cart</a> 
                <?php }?>
                     <?php if (strlen($_SESSION['fosuid']>0)) {?>
                    <a class="yellow-bg brd-rd4" href="cart.php" title="Register" itemprop="url">My Cart</a>
                <?php } ?>
                </div>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->


        <style>
            body {   
                
            }
            .red-bg, .red-bg-layer:before, .menu-sec > a:hover, .menu-sec > a:focus, .restaurant-search-form button:hover, .restaurant-search-form button:focus, .top-restaurants-carousel .owl-dots > div.active:before, .sudo-bg-red:before, .popular-dish-info > a:hover, .popular-dish-info > a:focus, .featured-restaurant-carousel .owl-nav > div:hover, .featured-restaurant-info > a:hover, .featured-restaurant-info > a:focus, .popular-dish-info > a.red-bg, .page-item.active .page-link, .page-item.active .page-link:hover, .page-item .page-link:hover, .page-item .page-link:focus, .price-header:before, .price-box > a:hover, .price-box > a:focus, .price-box.active > a, .radio-box [type="radio"]:checked + label:after, .radio-box [type="radio"]:not(:checked) + label:after, .check-box [type="checkbox"]:checked + label:after, .check-box [type="checkbox"]:not(:checked) + label:after, .contact-form-inner > form button:hover, .contact-form-inner > form button:focus, .restaurant-detail-thumb ul.restaurant-detail-thumb-carousel li::before, .restaurant-detail-tabs > ul > li a::before, .ord-btn > a, .select-wrp2 .chosen-container-single .chosen-drop > ul li.result-selected, .select-wrp2 .chosen-container-single .chosen-drop > ul li.highlighted, .select-wrp2 .chosen-container-single .chosen-drop > ul li:hover, .post-share > a:hover, .post-share > a:focus, .blog-detail-gallery-carousel .owl-nav > div:hover, .featured-restaurant-food-thumb-carousel li::before, .toggle-item > h4.active i, input:checked + .switch-slider, .reservation-tabs-list .nav-tabs > li a span::before, .packege-box > a:hover, .packege-box > a:focus, .step-buttons button.red-bg, .step-buttons a.red-bg, .step-buttons button:hover, .step-buttons a:hover, a.close-btn:hover, a.close-btn:focus, .log-close-btn:hover, .log-close-btn:focus, .sign-close-btn:hover, .sign-close-btn:focus, .payment-close-btn:hover, .payment-close-btn:focus, .payment-close-btn2:hover, .payment-close-btn2:focus, .view-menu-liks > a:hover, .view-menu-liks > a:focus, .order-info > a:hover, .order-info > a:focus, .style2 .pagination > li.prev a:hover, .style2 .pagination > li.next a:hover, .style2 .pagination > li.prev a:focus, .style2 .pagination > li.next a:focus, .profile-info > a.change-password.red-clr::before, .profile-img-upload-btn > label.yellow-bg:hover, .restaurant-detail-title > a:hover, .restaurant-detail-title > a:focus, .responsive-logomenu > span.yellow-bg:hover, .responsive-menu > span.yellow-bg:hover, .register-btn > a.yellow-bg:hover, .track-popup-innr > form button.yellow-bg:hover, .track-popup-innr > form a.yellow-bg:hover, a.track-close:hover, a.track-close:focus, .order-time > a.yellow-bg:hover, .order-time > a.yellow-bg:focus, .social2 > a:hover, .rite-meta .view-more:hover, .welcome-secinfo > span, .arrow-left, .form-meta button, .view-more:hover {
                    background-color: #ca1717;
                    color: white;
                }
                .popular-dish-thumb img {
    object-fit: cover;
    height: 283px;
}
              .popular-dish-info  .input-group {
                    position: relative;
                    display: table;
                    border-collapse: separate;
                    width: 100px;
                
                }
                .logo{
                    
    float: left;
    position: relative;
    width: 100%;
    max-width: 20%;
    margin: 25px 0;
    left: -10%;
}
                }
        </style>
