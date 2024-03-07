<script setup>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import { usePage } from "@inertiajs/vue3";

const { properties } = usePage().props;
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
<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(frontend/assets/images/shape/shape-9.png);"></div>
        <div class="pattern-2" style="background-image: url(frontend/assets/images/shape/shape-10.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Property List</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Property List</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- property-page-section -->
<section class="property-page-section property-list">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="default-sidebar property-sidebar">
                    <div class="filter-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Property</h5>
                        </div>
                        <div class="widget-content">
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="All Type">All Type</option>
                                   <option value="1">Villa</option>
                                   <option value="2">Commercial</option>
                                   <option value="3">Residential</option>
                                </select>
                            </div>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="Select Location">Select Location</option>
                                   <option value="1">New York</option>
                                   <option value="2">California</option>
                                   <option value="3">London</option>
                                   <option value="4">Maxico</option>
                                </select>
                            </div>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="This Area Only">This Area Only</option>
                                   <option value="1">New York</option>
                                   <option value="2">California</option>
                                   <option value="3">London</option>
                                   <option value="4">Maxico</option>
                                </select>
                            </div>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="All Type">Max Rooms</option>
                                   <option value="1">2+ Rooms</option>
                                   <option value="2">3+ Rooms</option>
                                   <option value="3">4+ Rooms</option>
                                   <option value="4">5+ Rooms</option>
                                </select>
                            </div>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="Most Popular">Most Popular</option>
                                   <option value="1">Villa</option>
                                   <option value="2">Commercial</option>
                                   <option value="3">Residential</option>
                                </select>
                            </div>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="All Type">Select Floor</option>
                                   <option value="1">2x Floor</option>
                                   <option value="2">3x Floor</option>
                                   <option value="3">4x Floor</option>
                                </select>
                            </div>
                            <div class="filter-btn">
                                <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="price-filter sidebar-widget">
                        <div class="widget-title">
                            <h5>Select Price Range</h5>
                        </div>
                        <div class="range-slider clearfix">
                            <div class="clearfix">
                                <div class="input">
                                    <input type="text" class="property-amount" name="field-name" readonly="">
                                </div>
                            </div>
                            <div class="price-range-slider"></div>
                        </div>
                    </div>
                    <div class="category-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Status Of Property</h5>
                        </div>
                        <ul class="category-list clearfix">
                            <li><a href="property-details.html">For Rent <span>(200)</span></a></li>
                            <li><a href="property-details.html">For Sale <span>(700)</span></a></li>
                        </ul>
                    </div>
                    <div class="category-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Amenities</h5>
                        </div>
                        <ul class="category-list clearfix">
                            <li><a href="property-details.html">Air Conditioning <span>(17)</span></a></li>
                            <li><a href="property-details.html">Central Heating <span>(4)</span></a></li>
                            <li><a href="property-details.html">Cleaning Service <span>(12)</span></a></li>
                            <li><a href="property-details.html">Dining Room <span>(8)</span></a></li>
                            <li><a href="property-details.html">Dishwasher <span>(5)</span></a></li>
                            <li><a href="property-details.html">Dishwasher <span>(2)</span></a></li>
                            <li><a href="property-details.html">Family Room <span>(19)</span></a></li>
                            <li><a href="property-details.html">Onsite Parking <span>(11)</span></a></li>
                            <li><a href="property-details.html">Fireplace <span>(7)</span></a></li>
                            <li><a href="property-details.html">Hardwood Flows <span>(9)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="property-content-side">
                    <!-- <div class="item-shorting clearfix">
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
                                <button class="list-view on"><i class="icon-35"></i></button>
                                <button class="grid-view"><i class="icon-36"></i></button>
                            </div>
                        </div>
                    </div> -->
                    <div class="wrapper list">
                        <div class="deals-list-content list-item" v-for="property in properties">
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img :src="`${property.property_thambnail}`" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                        <div class="buy-btn"><a href="property-details.html">{{property.property_status}}</a></div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="property-details.html">{{property.property_name}}</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>${{property.lowest_price}}</h4>
                                            </div>
                                            <div class="author-box pull-right">
                                                <figure class="author-thumb"> 
                                                    <img src="frontend/assets/images/feature/author-1.jpg" alt="">
                                                    <span>Admin</span>
                                                </figure>
                                            </div>
                                        </div>
                                        <p>{{property.short_descp}}</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>{{ property.bedrooms }} Beds</li>
                                            <li><i class="icon-15"></i>{{property.bathrooms}} Baths</li>
                                            <li><i class="icon-16"></i>{{ property.property_size }} Sq Ft</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="deals-grid-content grid-item">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="frontend/assets/images/feature/feature-1.jpg" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="author-info clearfix">
                                                    <div class="author pull-left">
                                                        <figure class="author-thumb"><img src="frontend/assets/images/feature/author-1.jpg" alt=""></figure>
                                                        <h6>Michael Bean</h6>
                                                    </div>
                                                    <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                                </div>
                                                <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div> -->
                    </div>
                    <div class="pagination-wrapper">
                        <ul class="pagination clearfix">
                            <li><a href="property-list.html" class="current">1</a></li>
                            <li><a href="property-list.html">2</a></li>
                            <li><a href="property-list.html">3</a></li>
                            <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- property-page-section end -->


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
                            <input type="email" name="email" placeholder="Enter your email" required="">
                            <button type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-section end -->






<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fal fa-angle-up"></span>
</button>
</div>
    <Footer/>
</template>