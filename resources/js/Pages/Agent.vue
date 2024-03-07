
<script setup>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";

</script>
<template>
    <Header/>
    <div class="boxed_wrapper">





<!-- switcher menu -->
<div class="switcher">
    <div class="switch_btn">
        <button><i class="fas fa-palette"></i></button>
    </div>
    <div class="switch_menu">
        <!-- color changer -->
        <div class="switcher_container">
            <ul id="styleOptions" title="switch styling">
                <li>
                    <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                </li>
            </ul>
        </div> 
    </div>
</div>
<!-- end switcher menu -->




<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="frontend/assets/images/logo-2.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->


<!--Page Title-->
<section class="page-title centred" style="background-image: url(frontend/assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Agents Grid View</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Agents Grid View</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- agents-page-section -->
<section class="agents-page-section agents-grid">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="default-sidebar agent-sidebar">
                    <div class="agents-search sidebar-widget">
                        <div class="widget-title">
                            <h5>Find Agent</h5>
                        </div>
                        <div class="search-inner">
                            <form action="agents-list.html">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Enter Agent Name" required>
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="All Categories">All Categories</option>
                                           <option value="1">New Arrival</option>
                                           <option value="2">Top Rated</option>
                                           <option value="3">Most Search</option>
                                           <option value="4">Recent Place</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="All Cities">All Cities</option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-one">Search Agent</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="category-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Status Of Property</h5>
                        </div>
                        <ul class="category-list clearfix">
                            <li><a href="agents-details.html">For Rent <span>(200)</span></a></li>
                            <li><a href="agents-details.html">For Sale <span>(700)</span></a></li>
                        </ul>
                    </div>
                    <div class="featured-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Featured Properties</h5>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="frontend/assets/images/feature/feature-1.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="frontend/assets/images/feature/feature-2.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="frontend/assets/images/feature/feature-3.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="agents-content-side">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <h5>Search Reasults: <span>Showing 1-5 of 20 Listings</span></h5>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <div class="short-box clearfix">
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="Sort by: Newest">Sort by: Newest</option>
                                       <option value="1">New Arrival</option>
                                       <option value="2">Top Rated</option>
                                       <option value="3">Offer Place</option>
                                       <option value="4">Most Place</option>
                                    </select>
                                </div>
                            </div>
                            <div class="short-menu clearfix">
                                <button class="list-view"><i class="icon-35"></i></button>
                                <button class="grid-view on"><i class="icon-36"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper grid">
                        <div class="agents-list-content">
                            <div class="agents-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="frontend/assets/images/agents/agents-1.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="upper clearfix">
                                            <div class="title-inner pull-left">
                                                <h4><a href="agents-details.html">Michael Bean</a></h4>
                                                <span class="designation">Modern House Real Estate Agent</span>
                                            </div>
                                            <ul class="social-list pull-right clearfix">
                                                <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                        </div>
                                        <ul class="info clearfix">
                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:bean@realshed.com">bean@realshed.com</a></li>
                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="frontend/assets/images/agents/agents-2.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="upper clearfix">
                                            <div class="title-inner pull-left">
                                                <h4><a href="agents-details.html">Jennifer Lawrence</a></h4>
                                                <span class="designation">Modern House Real Estate Agent</span>
                                            </div>
                                            <ul class="social-list pull-right clearfix">
                                                <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                        </div>
                                        <ul class="info clearfix">
                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="frontend/assets/images/agents/agents-3.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="upper clearfix">
                                            <div class="title-inner pull-left">
                                                <h4><a href="agents-details.html">Benedict Cumbatch</a></h4>
                                                <span class="designation">Modern House Real Estate Agent</span>
                                            </div>
                                            <ul class="social-list pull-right clearfix">
                                                <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                        </div>
                                        <ul class="info clearfix">
                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:benedict@realshed.com">benedict@realshed.com</a></li>
                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="frontend/assets/images/agents/agents-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="upper clearfix">
                                            <div class="title-inner pull-left">
                                                <h4><a href="agents-details.html">Elizabeth Winstead</a></h4>
                                                <span class="designation">Modern House Real Estate Agent</span>
                                            </div>
                                            <ul class="social-list pull-right clearfix">
                                                <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                        </div>
                                        <ul class="info clearfix">
                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:winstead@realshed.com">winstead@realshed.com</a></li>
                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="frontend/assets/images/agents/agents-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="upper clearfix">
                                            <div class="title-inner pull-left">
                                                <h4><a href="agents-details.html">Morgan Bale</a></h4>
                                                <span class="designation">Modern House Real Estate Agent</span>
                                            </div>
                                            <ul class="social-list pull-right clearfix">
                                                <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                        </div>
                                        <ul class="info clearfix">
                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:bale@realshed.com">bale@realshed.com</a></li>
                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="frontend/assets/images/agents/agents-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="upper clearfix">
                                            <div class="title-inner pull-left">
                                                <h4><a href="agents-details.html">Jennifer Gal</a></h4>
                                                <span class="designation">Modern House Real Estate Agent</span>
                                            </div>
                                            <ul class="social-list pull-right clearfix">
                                                <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                        </div>
                                        <ul class="info clearfix">
                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid-content grid-item">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                    <div class="agents-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="frontend/assets/images/agents/agents-1.png" alt=""></figure>
                                            <div class="content-box">
                                                <div class="title-inner">
                                                    <h4><a href="agents-details.html">Michael Bean</a></h4>
                                                    <span class="designation">Modern House Real Estate Agent</span>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing execution.</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:bean@realshed.com">bean@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                    <div class="agents-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="frontend/assets/images/agents/agents-2.png" alt=""></figure>
                                            <div class="content-box">
                                                <div class="title-inner">
                                                    <h4><a href="agents-details.html">Jennifer Lawrence</a></h4>
                                                    <span class="designation">Modern House Real Estate Agent</span>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing execution.</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">ijennifer@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                    <div class="agents-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="frontend/assets/images/agents/agents-3.png" alt=""></figure>
                                            <div class="content-box">
                                                <div class="title-inner">
                                                    <h4><a href="agents-details.html">Elizabeth Winstead</a></h4>
                                                    <span class="designation">Modern House Real Estate Agent</span>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing execution.</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:winstead@realshed.com">winstead@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                    <div class="agents-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="frontend/assets/images/agents/agents-4.png" alt=""></figure>
                                            <div class="content-box">
                                                <div class="title-inner">
                                                    <h4><a href="agents-details.html">Benedict Cumbatch</a></h4>
                                                    <span class="designation">Modern House Real Estate Agent</span>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing execution.</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:beaedict@realshed.com">beaedict@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                    <div class="agents-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="frontend/assets/images/agents/agents-5.png" alt=""></figure>
                                            <div class="content-box">
                                                <div class="title-inner">
                                                    <h4><a href="agents-details.html">Morgan Bale</a></h4>
                                                    <span class="designation">Modern House Real Estate Agent</span>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing execution.</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:bale@realshed.com">bale@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                    <div class="agents-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="frontend/assets/images/agents/agents-6.png" alt=""></figure>
                                            <div class="content-box">
                                                <div class="title-inner">
                                                    <h4><a href="agents-details.html">Jennifer Gal</a></h4>
                                                    <span class="designation">Modern House Real Estate Agent</span>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing execution.</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper">
                        <ul class="pagination clearfix">
                            <li><a href="agents-grid.html" class="current">1</a></li>
                            <li><a href="agents-grid.html">2</a></li>
                            <li><a href="agents-grid.html">3</a></li>
                            <li><a href="agents-grid.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- agents-page-section end -->


<!-- subscribe-section -->
<section class="subscribe-section bg-color-3">
    <div class="pattern-layer" style="background-image: url(frontend/assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                <div class="text">
                    <span>Subscribe</span>
                    <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                <div class="form-inner">
                    <form action="contact.html" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter your email" required>
                            <button type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-section end -->


<!-- main-footer -->
<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>About</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor amet consetetur adi pisicing elit sed eiusm tempor in cididunt ut labore dolore magna aliqua enim ad minim venitam</p>
                            <p>Quis nostrud exercita laboris nisi ut aliquip commodo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="index.html">About Us</a></li>
                                <li><a href="index.html">Listing</a></li>
                                <li><a href="index.html">How It Works</a></li>
                                <li><a href="index.html">Our Services</a></li>
                                <li><a href="index.html">Our Blog</a></li>
                                <li><a href="index.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Top News</h3>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="frontend/assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                <p>Mar 25, 2020</p>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="frontend/assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                <p>Mar 24, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <figure class="footer-logo"><a href="index.html"><img src="frontend/assets/images/footer-logo.png" alt=""></a></figure>
                <div class="copyright pull-left">
                    <p><a href="index.html">Realshed</a> &copy; 2021 All Right Reserved</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="index.html">Terms of Service</a></li>
                    <li><a href="index.html">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fal fa-angle-up"></span>
</button>
</div>
    <Footer/>
</template>