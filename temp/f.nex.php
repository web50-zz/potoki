<?php
/**
 * The main template file
 */

get_header(); ?>


<div id="wrapper">
    <div id="top-drawer-area" class="hidden-sm hidden-xs">
        <div id="top-drawer-bar" class="top-drawer-hide">
            <div class="container">
                <div class="sidebar sidebar-top-drawer row">
                    <aside id="darna-footer-logo-3" class="g5plus-col-3 widget widget-footer-logo">
                        <div class="footer-logo ">
                            <a href="https://themes.g5plus.net/darna"><img src="https://themes.g5plus.net/darna/wp-content/themes/darna//assets/images/theme-options/logo-light.png" alt /></a>
                            <div class="sub-description">
                                This Top Drawer Bar can be switched on or off in theme options, and can take any widget you throw at it or even fill it with your custom HTML Code </div>
                        </div>
                    </aside>
                    <aside id="text-6" class="g5plus-col-3 widget widget_text">
                        <h4 class="widget-title"><span>Business Hours</span></h4>
                        <div class="textwidget">
                            <ul class="widget-contact-info">
                                <li>Sunday to Tuesday: 8am to 6pm</li>
                                <li>Saturday: 9am to 4pm</li>
                                <li>Friday: Closed</li>
                                <li>Support Hours is 24/7 every day</li>
                            </ul>
                        </div>
                    </aside>
                    <aside id="mc4wp_form_widget-3" class="g5plus-col-3 widget widget_mc4wp_form_widget">
                        <h4 class="widget-title"><span>Newsletter</span></h4>
                        <script>
                            (function() {
                                if (!window.mc4wp) {
                                    window.mc4wp = {
                                        listeners: [],
                                        forms: {
                                            on: function(event, callback) {
                                                window.mc4wp.listeners.push({
                                                    event: event,
                                                    callback: callback
                                                });
                                            }
                                        }
                                    }
                                }
                            })();
                        </script>
                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-862 mc4wp-form-basic" method="post" data-id="862" data-name="Default sign-up form">
                            <div class="mc4wp-form-fields">
                                <div class="mail-chimp-wrapper">
                                    <p>Enter your email address for our mailing list to keep your self our lastest updated.</p>
                                    <div class="mail-chimp-button">
                                        <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Email Address" required />
                                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1712919627" /><input type="hidden" name="_mc4wp_form_id" value="862" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                            <div class="mc4wp-response"></div>
                        </form>
                    </aside>
                    <aside id="text-7" class="g5plus-col-3 widget widget_text">
                        <div class="textwidget">
                            <div class="widget-text-intro">
                                Drop anything here
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <a href="#" class="top-drawer-toggle"></a>
    </div>
    <div class="top-bar mobile-top-bar-hide">
        <div class="container">
            <div class="row">
                <div class="sidebar top-bar-right col-md-12">
                    <aside id="text-8" class="widget widget_text">
                        <div class="textwidget">
                            <ul class="top-bar-info">
                                <li><i class="fa fa-clock-o"></i> 325 flat 25 Naboli, rome, italy </li>
                                <li><i class="fa fa-phone"></i> Mon - Sat 8.00 - 18.00 </li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:darna@company.com"> DARNA@COMPANY.COM</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile-before">
        <a href="https://themes.g5plus.net/darna/" title="Darna - Construction &amp; Building WordPress Theme" rel="home">
            <img src="https://themes.g5plus.net/darna/wp-content/themes/darna//assets/images/theme-options/logo.png" alt="Darna - Construction &amp; Building WordPress Theme" />
        </a>
    </div>
    <header id="header" class="main-header header-5 header-sticky header-mobile-sticky header-mobile-2 menu-drop-fly">
        <div class="container header-mobile-wrapper">
            <div class="header-mobile-inner header-mobile-2">
                <div class="toggle-icon-wrapper" data-ref="main-menu" data-drop-type="fly">
                    <div class="toggle-icon"> <span></span></div>
                </div>
                <div class="header-customize">
                    <div class="search-button-wrapper header-customize-item">
                        <a class="icon-search-menu" href="#" data-search-type="standard"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="shopping-cart-wrapper header-customize-item">
                        <div class="widget_shopping_cart_content">
                            <div class="widget_shopping_cart_icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span>0</span>
                            </div>
                            <div class="cart_list_wrapper ">
                                <ul class="cart_list product_list_widget ">
                                    <li class="empty">
                                        <h4>An empty cart</h4>
                                        <p>You have no item in your shopping cart</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container header-desktop-wrapper">
            <div class="header-left">
                <div class="header-logo">
                    <a href="https://themes.g5plus.net/darna/" title="Darna - Construction &amp; Building WordPress Theme" rel="home">
                        <img src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/logo-white.png" alt="Darna - Construction &amp; Building WordPress Theme" />
                    </a>
                </div>
            </div>
            <div class="header-right">
                <div class="header-right-top"></div>
                <div id="primary-menu" class="menu-wrapper">
                    <ul id="main-menu" class="main-menu menu-drop-fly x-nav-menu x-nav-menu_main-menu x-animate-sign-flip" data-breakpoint="991">
                        <li class="menu-fly-search">
                            <form method="get" action="https://themes.g5plus.net/darna">
                                <input type="text" name="s" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                        <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/" class="x-menu-a-text"><span class="x-menu-text">Home</span><b class="x-caret"></b></a>
                            <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                <li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/" class="x-menu-a-text"><span class="x-menu-text">Home 1</span></a></li>
                                <li id="menu-item-113" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/home-2/" class="x-menu-a-text"><span class="x-menu-text">Home 2</span></a></li>
                                <li id="menu-item-112" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/home-3/" class="x-menu-a-text"><span class="x-menu-text">Home 3</span></a></li>
                                <li id="menu-item-724" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/home-4/" class="x-menu-a-text"><span class="x-menu-text">Home 4</span></a></li>
                                <li id="menu-item-808" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-745 current_page_item x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/home-5/" class="x-menu-a-text"><span class="x-menu-text">Home 5</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-sub-menu-standard"><a href="#" class="x-menu-a-text"><span class="x-menu-text">Pages</span><b class="x-caret"></b></a>
                            <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/our-services/" class="x-menu-a-text"><span class="x-menu-text">Services</span></a></li>
                                <li id="menu-item-128" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/about-us/" class="x-menu-a-text"><span class="x-menu-text">About Us</span></a></li>
                                <li id="menu-item-127" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/contact-us/" class="x-menu-a-text"><span class="x-menu-text">Contact Us</span></a></li>
                                <li id="menu-item-321" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/coming-soon/" class="x-menu-a-text"><span class="x-menu-text">Coming Soon</span></a></li>
                                <li id="menu-item-130" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/404page" class="x-menu-a-text"><span class="x-menu-text">404 Error Page</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/projects/" class="x-menu-a-text"><span class="x-menu-text">Projects</span><b class="x-caret"></b></a>
                            <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                <li id="menu-item-363" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/projects/" class="x-menu-a-text"><span class="x-menu-text">Projects 4 columns fullwidth</span></a></li>
                                <li id="menu-item-362" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/projects-4-column-padding/" class="x-menu-a-text"><span class="x-menu-text">Projects 4 column padding</span></a></li>
                                <li id="menu-item-377" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/project-3-columns-fullwidth/" class="x-menu-a-text"><span class="x-menu-text">Project 3 columns fullwidth</span></a></li>
                                <li id="menu-item-361" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/projects-3-column-padding/" class="x-menu-a-text"><span class="x-menu-text">Projects 3 column padding</span></a></li>
                                <li id="menu-item-364" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/portfolio/miami-house/" class="x-menu-a-text"><span class="x-menu-text">Single project</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children x-menu-item x-sub-menu-multi-column"><a href="https://themes.g5plus.net/darna/shop/" class="x-menu-a-text"><span class="x-menu-text">Shop</span><b class="x-caret"></b></a>
                            <ul class="x-sub-menu x-sub-menu-multi-column x-list-style-none">
                                <li id="menu-item-292" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-sub-menu-standard x-col x-col-3-12"><a href="#" class="x-menu-a-text"><span class="x-menu-text">Shop Styles</span><b class="x-caret"></b></a>
                                    <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                        <li id="menu-item-297" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/shop/?layout=container&amp;sidebar=none&amp;columns=4" class="x-menu-a-text"><span class="x-menu-text">Full Width</span></a></li>
                                        <li id="menu-item-299" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/shop/?layout=container&amp;sidebar=left&amp;columns=3" class="x-menu-a-text"><span class="x-menu-text">Left Sidebar</span></a></li>
                                        <li id="menu-item-300" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/shop/?layout=container&amp;sidebar=right&amp;columns=3" class="x-menu-a-text"><span class="x-menu-text">Right Sidebar</span></a></li>
                                        <li id="menu-item-303" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/product-category/hand-tools/" class="x-menu-a-text"><span class="x-menu-text">Category Page</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-sub-menu-standard x-col x-col-3-12"><a href="#" class="x-menu-a-text"><span class="x-menu-text">Styles Columns</span><b class="x-caret"></b></a>
                                    <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                        <li id="menu-item-305" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/shop/?layout=container&amp;sidebar=none&amp;columns=3" class="x-menu-a-text"><span class="x-menu-text">3 Columns</span></a></li>
                                        <li id="menu-item-307" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/shop/?layout=container&amp;sidebar=none&amp;columns=4" class="x-menu-a-text"><span class="x-menu-text">4 Columns</span></a></li>
                                        <li id="menu-item-308" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/shop/?layout=container&amp;sidebar=none&amp;columns=5" class="x-menu-a-text"><span class="x-menu-text">5 Columns</span></a></li>
                                        <li id="menu-item-309" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/shop/?layout=container&amp;sidebar=none&amp;columns=6" class="x-menu-a-text"><span class="x-menu-text">6 Columns</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-294" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-sub-menu-standard x-col x-col-3-12"><a href="#" class="x-menu-a-text"><span class="x-menu-text">Product Pages</span><b class="x-caret"></b></a>
                                    <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                        <li id="menu-item-312" class="menu-item menu-item-type-post_type menu-item-object-product x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/product/dust-extractor/" class="x-menu-a-text"><span class="x-menu-text">Standard Product</span></a></li>
                                        <li id="menu-item-314" class="menu-item menu-item-type-post_type menu-item-object-product x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/product/generator-wheel-kit/" class="x-menu-a-text"><span class="x-menu-text">Extended Product</span></a></li>
                                        <li id="menu-item-323" class="menu-item menu-item-type-post_type menu-item-object-product x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/product/palm-sander/" class="x-menu-a-text"><span class="x-menu-text">Variable Product</span></a></li>
                                        <li id="menu-item-351" class="menu-item menu-item-type-post_type menu-item-object-product x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/product/pointed-trowel/" class="x-menu-a-text"><span class="x-menu-text">Grouped Product</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-295" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-sub-menu-standard x-col x-col-3-12"><a href="#" class="x-menu-a-text"><span class="x-menu-text">Misc Pages</span><b class="x-caret"></b></a>
                                    <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                        <li id="menu-item-355" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/cart/" class="x-menu-a-text"><span class="x-menu-text">Shopping Cart</span></a></li>
                                        <li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/checkout/" class="x-menu-a-text"><span class="x-menu-text">Checkout</span></a></li>
                                        <li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/my-account/" class="x-menu-a-text"><span class="x-menu-text">My Account</span></a></li>
                                        <li id="menu-item-365" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/order-tracking/" class="x-menu-a-text"><span class="x-menu-text">Order Tracking</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/blog/" class="x-menu-a-text"><span class="x-menu-text">Blog</span><b class="x-caret"></b></a>
                            <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                <li id="menu-item-148" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/blog/?sidebar=left" class="x-menu-a-text"><span class="x-menu-text">Left Sidebar</span></a></li>
                                <li id="menu-item-149" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/blog/?sidebar=right" class="x-menu-a-text"><span class="x-menu-text">Right Sidebar</span></a></li>
                                <li id="menu-item-150" class="menu-item menu-item-type-custom menu-item-object-custom x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/blog/?sidebar=none" class="x-menu-a-text"><span class="x-menu-text">Full Width</span></a></li>
                                <li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-pos-left-menu-parent x-sub-menu-standard"><a href="#" class="x-menu-a-text"><span class="x-menu-text">Single Post</span><b class="x-caret"></b></a>
                                    <ul class="x-sub-menu x-sub-menu-standard x-pos-left-menu-parent x-list-style-none">
                                        <li id="menu-item-162" class="menu-item menu-item-type-post_type menu-item-object-post x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/construction-you-can-count-on/" class="x-menu-a-text"><span class="x-menu-text">Standard Post</span></a></li>
                                        <li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-post x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/here-are-many-variations-of-passages/" class="x-menu-a-text"><span class="x-menu-text">Image Post</span></a></li>
                                        <li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-post x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/recent-trends-in-story-telling/" class="x-menu-a-text"><span class="x-menu-text">Gallery Post</span></a></li>
                                        <li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-post x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/josh-woodward-already-there/" class="x-menu-a-text"><span class="x-menu-text">Video Post</span></a></li>
                                        <li id="menu-item-154" class="menu-item menu-item-type-post_type menu-item-object-post x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/inteligent-transitions-in-ux-design/" class="x-menu-a-text"><span class="x-menu-text">Audio Post</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-133" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children x-menu-item x-sub-menu-standard"><a href="#" class="x-menu-a-text"><span class="x-menu-text">ShortCodes</span><b class="x-caret"></b></a>
                            <ul class="x-sub-menu x-sub-menu-standard x-list-style-none x-animate-sign-flip">
                                <li id="menu-item-498" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/post-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Post</span></a></li>
                                <li id="menu-item-513" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/our-team-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Our Team</span></a></li>
                                <li id="menu-item-518" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/testimonials-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Testimonials</span></a></li>
                                <li id="menu-item-731" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/process-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Process</span></a></li>
                                <li id="menu-item-526" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/feature-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Feature</span></a></li>
                                <li id="menu-item-540" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/icon-box-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Icon box</span></a></li>
                                <li id="menu-item-474" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/buttons-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Buttons</span></a></li>
                                <li id="menu-item-368" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/product-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Product</span></a></li>
                                <li id="menu-item-805" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/portfolio-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Portfolio</span></a></li>
                                <li id="menu-item-806" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/counter-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Counter</span></a></li>
                                <li id="menu-item-807" class="menu-item menu-item-type-post_type menu-item-object-page x-menu-item x-sub-menu-standard"><a href="https://themes.g5plus.net/darna/services-shortcode/" class="x-menu-a-text"><span class="x-menu-text">Services</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="header-customize">
                        <div class="get-a-quote-wrapper header-customize-item">
                            <a class="get-a-quote-button" href="#"><i class="fa fa-envelope"></i><span>Get a quote</span></a>
                        </div>
                        <div class="shopping-cart-wrapper header-customize-item">
                            <div class="widget_shopping_cart_content">
                                <div class="widget_shopping_cart_icon">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>0</span>
                                </div>
                                <div class="cart_list_wrapper ">
                                    <ul class="cart_list product_list_widget ">
                                        <li class="empty">
                                            <h4>An empty cart</h4>
                                            <p>You have no item in your shopping cart</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="search-button-wrapper header-customize-item">
                            <a class="icon-search-menu" href="#" data-search-type="standard"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="main-menu-overlay"></div>
                </div>
            </div>
        </div>
    </header>
    <div id="search_popup_wrapper" class="dialog">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
            <div class="morph-shape">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 280" preserveAspectRatio="none">
                    <rect x="3" y="3" fill="none" width="516" height="276" />
                </svg>
            </div>
            <div class="dialog-inner">
                <h2>Enter your keyword</h2>
                <form method="get" action="https://themes.g5plus.net/darna" class="search-popup-inner">
                    <input type="text" name="s" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
                <div><button class="action" data-dialog-close="close" type="button"><i class="fa fa-close"></i></button></div>
            </div>
        </div>
    </div>
    <div id="get_quote_popup" class="dialog">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
            <div class="morph-shape">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 280" preserveAspectRatio="none">
                    <rect x="3" y="3" fill="none" width="516" height="276" />
                </svg>
            </div>
            <div class="dialog-inner">
                <h2>Get a quote</h2>
                <div class="mail-chimp-popup">
                    <script>
                        (function() {
                            if (!window.mc4wp) {
                                window.mc4wp = {
                                    listeners: [],
                                    forms: {
                                        on: function(event, callback) {
                                            window.mc4wp.listeners.push({
                                                event: event,
                                                callback: callback
                                            });
                                        }
                                    }
                                }
                            }
                        })();
                    </script>
                    <form id="mc4wp-form-2" class="mc4wp-form mc4wp-form-862 mc4wp-form-basic" method="post" data-id="862" data-name="Default sign-up form">
                        <div class="mc4wp-form-fields">
                            <div class="mail-chimp-wrapper">
                                <p>Enter your email address for our mailing list to keep your self our lastest updated.</p>
                                <div class="mail-chimp-button">
                                    <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Email Address" required />
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1712919627" /><input type="hidden" name="_mc4wp_form_id" value="862" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-2" />
                        <div class="mc4wp-response"></div>
                    </form>
                </div>
                <div><button type="button" class="action" data-dialog-close="close"><i class="fa fa-close"></i></button></div>
            </div>
        </div>
    </div>

    <div id="wrapper-content" class="clearfix">
        <main role="main" class="site-content-page">
            <div class="site-content-page-inner ">
                <div class="page-content">
                    <div id="post-745" class="post-745 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="fullwidth">
                                <div class="vc_row wpb_row vc_row-fluid margin-bottom-100">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_revslider_element wpb_content_element">
                                                    <p class="rs-p-wp-fix"></p>
                                                    <rs-module-wrap id="rev_slider_5_1_wrapper" data-source="gallery" style="background:transparent;padding:0;">
                                                        <rs-module id="rev_slider_5_1" style="display:none;" data-version="6.1.3">
                                                            <rs-slides>
                                                                <rs-slide data-key="rs-13" data-title="Slide 1" data-thumb="//themes.g5plus.net/darna/wp-content/uploads/2015/10/bg-slider-video-100x50.jpg" data-anim="ei:d;eo:d;s:650;r:0;t:random;sl:7;">
                                                                    <img src="//themes.g5plus.net/darna/wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Home 5" data-lazyload="//themes.g5plus.net/darna/wp-content/uploads/2015/10/bg-slider-video.jpg" data-bg="p:center top;" data-parallax="off" class="rev-slidebg" data-no-retina>
                                                                    <rs-layer id="slider-5-slide-13-layer-4" class="rs-fsv rs-layer-video" data-type="video" data-rsp_ch="on" data-xy="x:0;y:0;" data-text="l:22;" data-dim="w:100%;h:100%;" data-basealign="slide" data-video="ap:false;v:100;vd:100;sta:0:14;end:2:00;scop:t;rwd:f;fc:true;l:loop;ptimer:true;nse:f;sav:f;" data-poster="//themes.g5plus.net/darna/wp-content/uploads/2015/10/bg-slider-video.jpg" data-ytid="xhjXXwBMVuk" data-vatr="version=3&amp;enablejsapi=1&amp;html5=1&amp;volume=100&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0&amp;start=14&amp;end=120&amp;origin=https://themes.g5plus.net;" data-frame_0="tp:600;" data-frame_1="tp:600;e:Power2.easeInOut;st:2000;" data-frame_999="o:0;tp:600;e:nothing;st:w;" style="z-index:5;">
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-13-layer-11" class="tp-shape tp-shapewrapper" data-type="shape" data-dim="w:100%;h:100%;" data-basealign="slide" data-rsp_bd="off" data-frame_0="tp:600;" data-frame_1="tp:600;e:Power2.easeInOut;st:2000;" data-frame_999="o:0;tp:600;e:nothing;st:w;" style="z-index:6;background-color:rgba(0,0,0,0.50);cursor:pointer;">
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-13-layer-1" class="darnalargetext" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;yo:291px;" data-text="s:48,48,48,38;l:48;" data-frame_0="sX:0.75;sY:0.75;tp:600;" data-frame_1="tp:600;e:easeOutBounce;st:50;sp:1000;" data-frame_999="x:left;skX:45px;tp:600;e:nothing;st:w;" style="z-index:7;font-family:Oswald;margin:0px;white-space:nowrap;text-transform:uppercase;letter-spacing:0.02em;"><span class="darna-slider-border-bottom">DARNA CONSTRUCTION</span>
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-13-layer-2" class="darnasmalltext" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;yo:375px;" data-text="s:16;l:30;" data-frame_0="x:50;y:150;sX:0.5;sY:0.5;tp:600;" data-frame_1="tp:600;e:easeInOutBack;st:1000;sp:100;" data-frame_999="x:0;y:0;z:0;sX:0.75;sY:0.75;o:0;rX:0;rY:0;rZ:0;skX:0;skY:0;tp:600;e:nothing;st:w;sp:500;" style="z-index:8;font-family:Lato;margin:0px;max-width:600px;text-align:center;">THE VIDEO BACKGROUND IS AVAILABLE NOW !
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-13-layer-3" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;xo:94px;y:m;yo:142px;" data-text="w:normal;l:22;" data-dim="w:456px;" data-vbility="t,t,f,f" data-frame_0="sX:0;sY:0;tp:600;" data-frame_1="rZ:inherit;tp:600;e:easeOutBounce;st:2000;sp:1000;" data-frame_999="x:200px;o:0;skX:-85px;tp:600;e:nothing;st:w;" style="z-index:9;"><a href="#" class="darna-button style1 size-md" style="margin-right:10px;">Our History</a>
                                                                        <a href="#" class="darna-button style2 size-md">GET A QUOTE</a>
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-13-layer-10" class="darna-play-video darna-play-video darna-play" data-type="button" data-color="rgba(255,255,255,1)" data-xy="x:c;xo:-1px;yo:153px;" data-text="s:32;l:100;a:center;" data-dim="w:100px;h:100px;" data-actions="o:click;a:playvideo;layer:slider-5-slide-13-layer-4;d:0;" data-rsp_bd="off" data-border="bor:50px,50px,50px,50px;" data-frame_0="tp:600;" data-frame_1="tp:600;e:Power2.easeInOut;st:2000;" data-frame_999="o:0;tp:600;e:nothing;st:w;" style="z-index:10;background-color:rgba(0,0,0,0.50);font-family:Raleway;cursor:pointer;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                                        <i class="fa-play"></i>
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-13-layer-12" class="darna-play-video darna-stop" data-type="button" data-color="rgba(255,255,255,1)" data-xy="x:c;xo:-1px;yo:153px;" data-text="s:32;l:100;a:center;" data-dim="w:100px;h:100px;" data-actions="o:click;a:stopvideo;layer:slider-5-slide-13-layer-4;d:0;" data-rsp_bd="off" data-border="bor:50px,50px,50px,50px;" data-frame_0="tp:600;" data-frame_1="tp:600;e:Power2.easeInOut;st:2000;" data-frame_999="o:0;tp:600;e:nothing;st:w;" style="z-index:11;background-color:rgba(0,0,0,0.50);font-family:Raleway;cursor:pointer;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                                        <i class="fa-pause"></i>
                                                                    </rs-layer>
                                                                </rs-slide>
                                                                <rs-slide data-key="rs-15" data-title="Slide 2" data-thumb="//themes.g5plus.net/darna/wp-content/uploads/revslider/home-2/slider-03-100x50.jpg" data-anim="ei:d;eo:d;s:300;r:0;t:random;sl:7;">
                                                                    <img src="//themes.g5plus.net/darna/wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Home 5" data-lazyload="//themes.g5plus.net/darna/wp-content/uploads/revslider/home-2/slider-03.jpg" data-bg="p:center top;" data-parallax="off" class="rev-slidebg" data-no-retina>
                                                                    <rs-layer id="slider-5-slide-15-layer-1" class="darnalargetext" data-type="text" data-color="rgba(255,255,255,1)" data-xy="x:c;y:t,t,m,m;yo:260px,260px,0,0;" data-text="s:48,48,48,30;l:48;" data-basealign="slide" data-frame_0="y:top;o:1;tp:600;" data-frame_1="tp:600;e:easeOutElastic;st:500;sp:1000;" data-frame_999="x:50;y:150;z:0;sX:0.5;sY:0.5;o:0;rX:0;rY:0;rZ:0;skX:0;skY:0;tp:600;e:nothing;st:w;" style="z-index:5;font-family:Oswald;margin:0px;white-space:nowrap;text-transform:uppercase;letter-spacing:0.02em;">welcome to darna construction
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-15-layer-2" class="darnalargeprimarybg" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;xo:0,0,6px,0;y:t,t,m,m;yo:325px,325px,82px,63px;" data-text="w:nowrap,nowrap,nowrap,normal;s:50,50,50,25;l:50,50,50,30;" data-dim="w:auto,auto,auto,408px;" data-basealign="slide" data-padding="t:15;r:20;b:15;l:20;" data-frame_0="o:1;tp:600;" data-frame_0_chars="sX:0;sY:0;o:0;" data-frame_1="tp:600;e:easeInOutBack;st:500;sp:1000;" data-frame_1_chars="d:10;" data-frame_999="x:0;y:0;z:0;sX:0.75;sY:0.75;o:0;rX:0;rY:0;rZ:0;skX:0;skY:0;tp:600;e:nothing;st:w;" style="z-index:6;background-color:rgba(255,182,0,1);font-family:Oswald;text-transform:uppercase;">ALWAYS DEDICATED & DEVOTED
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-15-layer-3" class="darnasmalltext2" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;xo:0,0,1px,1px;yo:418px,418px,393px,393px;" data-text="s:15;l:24;" data-vbility="t,t,f,f" data-basealign="slide" data-frame_0="x:50;y:150;sX:0.5;sY:0.5;tp:600;" data-frame_1="tp:600;e:Elastic.easeOut;st:1000;sp:1000;" data-frame_999="x:ran(-250|250);y:ran(-150|150);sX:ran(0|1);sY:ran(0|1);o:0;rX:ran(-90|90);rY:ran(-90|90);rZ:ran(-360|360);tp:600;e:nothing;st:w;" style="z-index:7;font-family:Lato;margin:0px;max-width:600px;text-align:center;">We aim to eliminate the task of dividing your project between different architecture and <br />
                                                                        construction company. We are a company that offers design and build services for<br />
                                                                        you from initial sketches to the final construction.
                                                                    </rs-layer>
                                                                    <rs-layer id="slider-5-slide-15-layer-4" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:c;yo:505px;" data-text="l:22;" data-basealign="slide" data-frame_0="tp:600;" data-frame_1="rZ:inherit;tp:600;st:2000;" data-frame_999="st:w;auto:true;" style="z-index:8;"><a href="#" class="darna-button style1 size-md" style="margin-right:10px;">Our History</a>
                                                                        <a href="#" class="darna-button style2 size-md">View Projects</a>
                                                                    </rs-layer>
                                                                </rs-slide>
                                                            </rs-slides>
                                                            <rs-progress style="height: 5px; background: rgba(0,0,0,0.15);"></rs-progress>
                                                        </rs-module>
                                                        <script type="text/javascript">
                                                            setREVStartSize({
                                                                c: 'rev_slider_5_1',
                                                                rl: [1240, 1024, 778, 480],
                                                                el: [],
                                                                gw: [1240, 1024, 778, 480],
                                                                gh: [600, 600, 500, 400],
                                                                layout: 'fullscreen',
                                                                offsetContainer: '',
                                                                offset: '',
                                                                mh: "0"
                                                            });
                                                            var revapi5,
                                                                tpj;
                                                            jQuery(function() {
                                                                tpj = jQuery;
                                                                if (tpj("#rev_slider_5_1").revolution == undefined) {
                                                                    revslider_showDoubleJqueryError("#rev_slider_5_1");
                                                                } else {
                                                                    revapi5 = tpj("#rev_slider_5_1").show().revolution({
                                                                        jsFileLocation: "//themes.g5plus.net/darna/wp-content/plugins/revslider/public/assets/js/",
                                                                        sliderLayout: "fullscreen",
                                                                        visibilityLevels: "1240,1024,778,480",
                                                                        gridwidth: "1240,1024,778,480",
                                                                        gridheight: "600,600,500,400",
                                                                        minHeight: "",
                                                                        hideLayerAtLimit: 768,
                                                                        lazyType: "smart",
                                                                        responsiveLevels: "1240,1024,778,480",
                                                                        navigation: {
                                                                            mouseScrollNavigation: false,
                                                                            touch: {
                                                                                touchenabled: true,
                                                                                swipe_min_touches: 50
                                                                            },
                                                                            arrows: {
                                                                                enable: true,
                                                                                style: "custom",
                                                                                hide_onmobile: true,
                                                                                hide_under: 600,
                                                                                hide_onleave: true,
                                                                                left: {
                                                                                    h_offset: 0
                                                                                },
                                                                                right: {
                                                                                    h_offset: 0
                                                                                }
                                                                            }
                                                                        },
                                                                        parallax: {
                                                                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 30],
                                                                            type: "mouse",
                                                                            origo: "slidercenter",
                                                                            speed: 2000
                                                                        },
                                                                        fallbacks: {
                                                                            ignoreHeightChanges: "",
                                                                            allowHTML5AutoPlayOnAndroid: true
                                                                        },
                                                                    });
                                                                    jQuery(document).ready(function() {
                                                                        jQuery('.rev_slider').each(function() {
                                                                            var parent = jQuery(this);
                                                                            jQuery('.darna-stop', parent).hide();
                                                                            jQuery('.darna-play', parent).click(function() {
                                                                                jQuery(this).hide();
                                                                                jQuery('.darna-stop', parent).show();
                                                                            });
                                                                            jQuery('.darna-stop', parent).click(function() {
                                                                                jQuery(this).hide();
                                                                                jQuery('.darna-play', parent).show();
                                                                            });
                                                                        });
                                                                    });
                                                                }

                                                            });
                                                        </script>
                                                        <script>
                                                            var htmlDivCss = unescape(".tparrows%0A%7B%0A%20%20%20%20width%3A%2053px%3B%0A%20%20%20%20height%3A%2070px%3B%0A%7D%0A.tparrows%3Abefore%20%7B%20%20%0A%20%20%20%20font-size%3A%2020px%3B%20%0A%20%20%20%20line-height%3A%2070px%3B%20%20%20%20%0A%7D%0A.tp-leftarrow%3Aafter%20%7B%0A%20%20%20%20content%3A%20%22%22%3B%0A%20%20%20%20display%3A%20block%3B%0A%20%20%20%20height%3A%20100%25%3B%0A%20%20%20%20border-top%3A%20solid%2070px%20transparent%3B%0A%20%20%20%20border-left%3A%20solid%2026px%20rgba%280%2C0%2C0%2C0.5%29%3B%20%20%20%20%0A%20%20%20%20position%3A%20absolute%3B%0A%20%20%20%20left%3A%20100%25%3B%0A%20%20%20%20top%3A%200%3B%0A%7D%0A.tp-leftarrow%3Ahover.tp-leftarrow%3Aafter%7B%0A%20%20%20%20border-left-color%3A%20%23000000%3B%0A%7D%0A.tp-rightarrow%3Aafter%20%7B%0A%20%20%20%20content%3A%20%22%22%3B%0A%20%20%20%20display%3A%20block%3B%0A%20%20%20%20height%3A%20100%25%3B%0A%20%20%20%20border-top%3A%20solid%2070px%20transparent%3B%0A%20%20%20%20border-right%3A%20solid%2026px%20rgba%280%2C0%2C0%2C0.5%29%3B%20%20%20%20%0A%20%20%20%20position%3A%20absolute%3B%0A%20%20%20%20right%3A%20100%25%3B%0A%20%20%20%20top%3A%200%3B%0A%7D%0A.tp-rightarrow%3Ahover.tp-rightarrow%3Aafter%7B%0A%20%20%20%20border-right-color%3A%20%23000000%3B%0A%7D%0A.tparrows.tp-leftarrow%3Abefore%20%7B%20%20%20%20%0A%20%20%20%20padding-left%3A%2015px%3B%0A%7D%0A.tparrows.tp-rightarrow%3Abefore%20%7B%20%20%20%20%0A%20%20%20%20padding-right%3A%2015px%3B%0A%7D%0A.darna-play-video%0A%7B%0A%20%20border%3A%202px%20solid%20%23FFFFFF%3B%0A%20%20background%3Atransparent%3B%0A%7D");
                                                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                            if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            } else {
                                                                var htmlDiv = document.createElement('div');
                                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                        <script>
                                                            var htmlDivCss = unescape("%23rev_slider_5_1_wrapper%20.custom.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3A%23000%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%7D%0A%23rev_slider_5_1_wrapper%20.custom.tparrows%3Ahover%20%7B%0A%09background%3A%23000%3B%0A%7D%0A%23rev_slider_5_1_wrapper%20.custom.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A15px%3B%0A%09color%3A%23fff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_5_1_wrapper%20.custom.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_5_1_wrapper%20.custom.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce825%27%3B%0A%7D%0A%0A%0A");
                                                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                            if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            } else {
                                                                var htmlDiv = document.createElement('div');
                                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                        <script>
                                                            var htmlDivCss = unescape("%0A%0A");
                                                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                            if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            } else {
                                                                var htmlDiv = document.createElement('div');
                                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                    </rs-module-wrap>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="darna-heading style1 margin-bottom-40">
                                                    <h2>Welcome to darna</h2>
                                                    <p>The biggest construction in the world</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid margin-bottom-100">
                                    <div class="col-md-6 col-sm-12 sm-margin-bottom-30 wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="569" height="451" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/single-img-5.jpg" class="vc_single_image-img attachment-full" alt srcset="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/single-img-5.jpg 569w, https://themes.g5plus.net/darna/wp-content/uploads/2015/10/single-img-5-300x238.jpg 300w" sizes="(max-width: 569px) 100vw, 569px" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>We aim to eliminate the task of dividing your project between different architec construction company. We are a company that offers design and build services for you from initial sketches to the final construction. Vivamus elementum laoreet lorem. Maecenas er felis sed mollis semper lobortis vitae phasellus commodo .</p>
                                                    </div>
                                                </div>
                                                <div class="fullwidth">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid column-equal-height">
                                                        <div class="col-md-6 col-sm-12 wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner vc_custom_1444874017851">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-icon-box style6 ">
                                                                        <a class="ibox-icon" title target="_self" href="#">
                                                                            <i class="fa fa-legal"></i>
                                                                        </a>
                                                                        <h3><a title target="_self" href="#">GENERAL BUILDER</a></h3>
                                                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut necessitatibus saepe eveniet ut et seo lage voluptates sint et molestiae non mes </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner vc_custom_1444874034547">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-icon-box style6 ">
                                                                        <a class="ibox-icon" title target="_self" href="#">
                                                                            <i class="flaticon-tank"></i>
                                                                        </a>
                                                                        <h3><a title target="_self" href="#">ELECTRICITY</a></h3>
                                                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut necessitatibus saepe eveniet ut et seo lage voluptates sint et molestiae non mes </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner vc_custom_1444874043505">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-icon-box style6 ">
                                                                        <a class="ibox-icon" title target="_self" href="#">
                                                                            <i class="flaticon-hammer38"></i>
                                                                        </a>
                                                                        <h3><a title target="_self" href="#">HOUSE EXTENSIONS</a></h3>
                                                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut necessitatibus saepe eveniet ut et seo lage voluptates sint et molestiae non mes </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner vc_custom_1444874052441">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-icon-box style6 ">
                                                                        <a class="ibox-icon" title target="_self" href="#">
                                                                            <i class="flaticon-bucket8"></i>
                                                                        </a>
                                                                        <h3><a title target="_self" href="#">REFURBISHMENT</a></h3>
                                                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut necessitatibus saepe eveniet ut et seo lage voluptates sint et molestiae non mes </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fullwidth">
                                <div data-vc-parallax="1.5" data-overlay-color="rgba(5,4,4,0.7)" class="vc_row wpb_row vc_row-fluid text-center margin-bottom-100 vc_custom_1444979251256 vc_general vc_parallax vc_parallax-content-moving overlay-bg-vc-wapper">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1444880478255">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1444961455312">
                                                    <div class="wpb_wrapper">
                                                        <p><span style="color: #ffffff; max-width: 670px; margin: auto; display: block; font-family: 'Roboto'; font-size: 21px; font-style: italic; font-weight: 200; line-height: 1.71;"> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus Nam libero tempore.</span></p>
                                                    </div>
                                                </div>
                                                <a class="darna-button size-sm style1 icon-left  margin-4" href="#" title="DOWNLOAD COMPANY PROFILE" target="_self">
                                                    DOWNLOAD COMPANY PROFILE </a>
                                                <a class="darna-button size-sm style2 icon-left  margin-4" href="#" title="ABOUT US" target="_self">
                                                    ABOUT US </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid margin-bottom-100">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="darna-heading style1 margin-bottom-30 sm-margin-bottom-15">
                                                    <h2>OUR SERVICES</h2>
                                                    <p>EXPERIENCE &amp; CREATIVITY HOUSE</p>
                                                </div>
                                                <div data-plugin-options="{&quot;navigation&quot;:true,&quot;pagination&quot;:false,&quot;singleItem&quot;:false,&quot;stopOnHover&quot;:false,&quot;autoHeight&quot;:false,&quot;autoPlay&quot;:5000,&quot;items&quot;:4,&quot;itemsDesktop&quot;:[1199,4],&quot;itemsDesktopSmall&quot;:[979,4],&quot;itemsTablet&quot;:[768,2],&quot;itemsTabletSmall&quot;:false,&quot;itemsMobile&quot;:[479,1],&quot;itemsScaleUp&quot;:false}" class="darna-services owl-carousel  ">
                                                    <div class="darna-services-item" style="background-image: url(https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_1.jpg)">
                                                        <div class="content-middle">
                                                            <div class="content-middle-inner">
                                                                <i class="flaticon-hammer38"></i>
                                                                <h3><a title target="_self" href="#">GENERAL BUILDER</a></h3>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="darna-services-item" style="background-image: url(https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_7.jpg)">
                                                        <div class="content-middle">
                                                            <div class="content-middle-inner">
                                                                <i class="fa fa-flash"></i>
                                                                <h3><a title target="_self" href="#">ELECTRICITY</a></h3>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="darna-services-item" style="background-image: url(https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_61.jpg)">
                                                        <div class="content-middle">
                                                            <div class="content-middle-inner">
                                                                <i class="flaticon-remote6"></i>
                                                                <h3><a title target="_self" href="#">HOUSE EXTENSIONS</a></h3>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="darna-services-item" style="background-image: url(https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_51.jpg)">
                                                        <div class="content-middle">
                                                            <div class="content-middle-inner">
                                                                <i class="flaticon-power30"></i>
                                                                <h3><a title target="_self" href="#">REFURBISHMENT</a></h3>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="darna-services-item" style="background-image: url(https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_3.jpg)">
                                                        <div class="content-middle">
                                                            <div class="content-middle-inner">
                                                                <i class="flaticon-paint49"></i>
                                                                <h3><a title target="_self" href="#">PAINTING</a></h3>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fullwidth">
                                <div class="vc_row wpb_row vc_row-fluid margin-bottom-100 vc_custom_1444979632286">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="container">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="col-md-3 col-sm-6 col-xs-12 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-counter ">
                                                                        <span class="display-percentage" style="color: #ffffff" data-percentage="56">56</span>
                                                                        <p class="counter-title" style="color: #ffffff">PROJECTS COMPLETED</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-counter ">
                                                                        <span class="display-percentage" style="color: #ffffff" data-percentage="360">360</span>
                                                                        <p class="counter-title" style="color: #ffffff">WORKERS EMPLOYED</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-counter ">
                                                                        <span class="display-percentage" style="color: #ffffff" data-percentage="89">89</span>
                                                                        <p class="counter-title" style="color: #ffffff">HONOR CLIENTS</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-counter ">
                                                                        <span class="display-percentage" style="color: #ffffff" data-percentage="42">42</span>
                                                                        <p class="counter-title" style="color: #ffffff">AWARDS WON</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1444878127345">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="darna-heading style1 margin-bottom-40">
                                                    <h2>RECENT PROJECTS</h2>
                                                    <p>From concept to creation</p>
                                                </div>
                                                <div class="portfolio     paging" id="portfolio-6619144bd8605">
                                                    <div class="portfolio-tabs">
                                                        <div class="tab-wrapper container bg-category-wrap  center">
                                                            <ul class="background-cat primary-color">
                                                                <li class="active">
                                                                    <a class="isotope-portfolio ladda-button active" data-section-id="6619144bd8605" data-group="all" data-filter="*" data-layout-type="grid" data-order="DESC" data-column="4" data-overlay-style="title-float-style-2" data-style="zoom-out" data-spinner-color="#ffb600" href="javascript:;">
                                                                        All </a>
                                                                </li>
                                                                <li class>
                                                                    <a class="isotope-portfolio isotope-portfolio-cat ladda-button " href="javascript:;" data-section-id="6619144bd8605" data-layout-type="grid" data-column="4" data-order="DESC" data-group="architecture" data-filter=".Architecture" data-overlay-style="title-float-style-2" data-style="zoom-out" data-spinner-color="#ffb600">
                                                                        Architecture </a>
                                                                </li>
                                                                <li class>
                                                                    <a class="isotope-portfolio isotope-portfolio-cat ladda-button " href="javascript:;" data-section-id="6619144bd8605" data-layout-type="grid" data-column="4" data-order="DESC" data-group="construction" data-filter=".Construction" data-overlay-style="title-float-style-2" data-style="zoom-out" data-spinner-color="#ffb600">
                                                                        Construction </a>
                                                                </li>
                                                                <li class="last">
                                                                    <a class="isotope-portfolio isotope-portfolio-cat ladda-button " href="javascript:;" data-section-id="6619144bd8605" data-layout-type="grid" data-column="4" data-order="DESC" data-group="interior-design" data-filter=".InteriorDesign" data-overlay-style="title-float-style-2" data-style="zoom-out" data-spinner-color="#ffb600">
                                                                        Interior Design </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="portfolio-wrapper darna-col-md-4  grid " data-section-id="6619144bd8605" id="portfolio-container-6619144bd8605" data-columns="4">
                                                        <div class="portfolio-item Architecture Construction ">
                                                            <figure>
                                                                <img width="480" height="480" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_6-480x480.jpg" alt="Miami house" />
                                                                <figcaption class>
                                                                    <div class="fig-title">
                                                                        <a href="https://themes.g5plus.net/darna/portfolio/miami-house/">
                                                                            <div class="title secondary-font bold-color primary-color-hover">Miami house</div>
                                                                        </a>
                                                                        <span class="category menu-font bold-color">Architecture, Construction</span>
                                                                    </div>
                                                                </figcaption>
                                                                <div class="button-toolbox-wrap">
                                                                    <div class="button-toolbox">
                                                                        <div class="inner">
                                                                            <a href="https://themes.g5plus.net/darna/portfolio/miami-house/" class="ico-view-detail"><i class="fa fa-eye"></i></a>
                                                                            <a class="ico-view-gallery prettyPhoto" href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_6.jpg" data-rel="prettyPhoto[pp_gal_189]" title="Miami house">
                                                                                <i class="fa fa-arrows-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div style="display: none">
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/bigstock-Construction.jpg" data-rel="prettyPhoto[pp_gal_189]" title="<a href='https://themes.g5plus.net/darna/portfolio/miami-house/'>Miami house</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_2.jpg" data-rel="prettyPhoto[pp_gal_189]" title="<a href='https://themes.g5plus.net/darna/portfolio/miami-house/'>Miami house</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_3.jpg" data-rel="prettyPhoto[pp_gal_189]" title="<a href='https://themes.g5plus.net/darna/portfolio/miami-house/'>Miami house</a>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-item Architecture Construction ">
                                                            <figure>
                                                                <img width="480" height="480" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/modern-interior-design-los-angeles-480x480.jpg" alt="Morden house" />
                                                                <figcaption class>
                                                                    <div class="fig-title">
                                                                        <a href="https://themes.g5plus.net/darna/portfolio/morden-house/">
                                                                            <div class="title secondary-font bold-color primary-color-hover">Morden house</div>
                                                                        </a>
                                                                        <span class="category menu-font bold-color">Architecture, Construction</span>
                                                                    </div>
                                                                </figcaption>
                                                                <div class="button-toolbox-wrap">
                                                                    <div class="button-toolbox">
                                                                        <div class="inner">
                                                                            <a href="https://themes.g5plus.net/darna/portfolio/morden-house/" class="ico-view-detail"><i class="fa fa-eye"></i></a>
                                                                            <a class="ico-view-gallery prettyPhoto" href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/modern-interior-design-los-angeles.jpg" data-rel="prettyPhoto[pp_gal_188]" title="Morden house">
                                                                                <i class="fa fa-arrows-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div style="display: none">
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/bigstock-Construction.jpg" data-rel="prettyPhoto[pp_gal_188]" title="<a href='https://themes.g5plus.net/darna/portfolio/morden-house/'>Morden house</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_3.jpg" data-rel="prettyPhoto[pp_gal_188]" title="<a href='https://themes.g5plus.net/darna/portfolio/morden-house/'>Morden house</a>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-item Construction ">
                                                            <figure>
                                                                <img width="480" height="480" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_8-480x480.jpg" alt="Lexham Gardens" />
                                                                <figcaption class>
                                                                    <div class="fig-title">
                                                                        <a href="https://themes.g5plus.net/darna/portfolio/lexham-gardens/">
                                                                            <div class="title secondary-font bold-color primary-color-hover">Lexham Gardens</div>
                                                                        </a>
                                                                        <span class="category menu-font bold-color">Construction</span>
                                                                    </div>
                                                                </figcaption>
                                                                <div class="button-toolbox-wrap">
                                                                    <div class="button-toolbox">
                                                                        <div class="inner">
                                                                            <a href="https://themes.g5plus.net/darna/portfolio/lexham-gardens/" class="ico-view-detail"><i class="fa fa-eye"></i></a>
                                                                            <a class="ico-view-gallery prettyPhoto" href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_8.jpg" data-rel="prettyPhoto[pp_gal_187]" title="Lexham Gardens">
                                                                                <i class="fa fa-arrows-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div style="display: none">
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_3.jpg" data-rel="prettyPhoto[pp_gal_187]" title="<a href='https://themes.g5plus.net/darna/portfolio/lexham-gardens/'>Lexham Gardens</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/bigstock-Construction.jpg" data-rel="prettyPhoto[pp_gal_187]" title="<a href='https://themes.g5plus.net/darna/portfolio/lexham-gardens/'>Lexham Gardens</a>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-item Architecture Construction ">
                                                            <figure>
                                                                <img width="480" height="480" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_5-480x480.jpg" alt="Lonsdale Road" />
                                                                <figcaption class>
                                                                    <div class="fig-title">
                                                                        <a href="https://themes.g5plus.net/darna/portfolio/lonsdale-road/">
                                                                            <div class="title secondary-font bold-color primary-color-hover">Lonsdale Road</div>
                                                                        </a>
                                                                        <span class="category menu-font bold-color">Architecture, Construction</span>
                                                                    </div>
                                                                </figcaption>
                                                                <div class="button-toolbox-wrap">
                                                                    <div class="button-toolbox">
                                                                        <div class="inner">
                                                                            <a href="https://themes.g5plus.net/darna/portfolio/lonsdale-road/" class="ico-view-detail"><i class="fa fa-eye"></i></a>
                                                                            <a class="ico-view-gallery prettyPhoto" href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_5.jpg" data-rel="prettyPhoto[pp_gal_186]" title="Lonsdale Road">
                                                                                <i class="fa fa-arrows-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div style="display: none">
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/bigstock-Construction.jpg" data-rel="prettyPhoto[pp_gal_186]" title="<a href='https://themes.g5plus.net/darna/portfolio/lonsdale-road/'>Lonsdale Road</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_3.jpg" data-rel="prettyPhoto[pp_gal_186]" title="<a href='https://themes.g5plus.net/darna/portfolio/lonsdale-road/'>Lonsdale Road</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_2.jpg" data-rel="prettyPhoto[pp_gal_186]" title="<a href='https://themes.g5plus.net/darna/portfolio/lonsdale-road/'>Lonsdale Road</a>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-item Architecture InteriorDesign ">
                                                            <figure>
                                                                <img width="480" height="480" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_7-480x480.jpg" alt="Dublin House" />
                                                                <figcaption class>
                                                                    <div class="fig-title">
                                                                        <a href="https://themes.g5plus.net/darna/portfolio/dublin-house/">
                                                                            <div class="title secondary-font bold-color primary-color-hover">Dublin House</div>
                                                                        </a>
                                                                        <span class="category menu-font bold-color">Architecture, Interior Design</span>
                                                                    </div>
                                                                </figcaption>
                                                                <div class="button-toolbox-wrap">
                                                                    <div class="button-toolbox">
                                                                        <div class="inner">
                                                                            <a href="https://themes.g5plus.net/darna/portfolio/dublin-house/" class="ico-view-detail"><i class="fa fa-eye"></i></a>
                                                                            <a class="ico-view-gallery prettyPhoto" href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_7.jpg" data-rel="prettyPhoto[pp_gal_185]" title="Dublin House">
                                                                                <i class="fa fa-arrows-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div style="display: none">
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/bigstock-Construction.jpg" data-rel="prettyPhoto[pp_gal_185]" title="<a href='https://themes.g5plus.net/darna/portfolio/dublin-house/'>Dublin House</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_3.jpg" data-rel="prettyPhoto[pp_gal_185]" title="<a href='https://themes.g5plus.net/darna/portfolio/dublin-house/'>Dublin House</a>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-item Architecture ">
                                                            <figure>
                                                                <img width="480" height="480" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_4-480x480.jpg" alt="Penhouse" />
                                                                <figcaption class>
                                                                    <div class="fig-title">
                                                                        <a href="https://themes.g5plus.net/darna/portfolio/penhouse/">
                                                                            <div class="title secondary-font bold-color primary-color-hover">Penhouse</div>
                                                                        </a>
                                                                        <span class="category menu-font bold-color">Architecture</span>
                                                                    </div>
                                                                </figcaption>
                                                                <div class="button-toolbox-wrap">
                                                                    <div class="button-toolbox">
                                                                        <div class="inner">
                                                                            <a href="https://themes.g5plus.net/darna/portfolio/penhouse/" class="ico-view-detail"><i class="fa fa-eye"></i></a>
                                                                            <a class="ico-view-gallery prettyPhoto" href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_4.jpg" data-rel="prettyPhoto[pp_gal_184]" title="Penhouse">
                                                                                <i class="fa fa-arrows-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div style="display: none">
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/bigstock-Construction.jpg" data-rel="prettyPhoto[pp_gal_184]" title="<a href='https://themes.g5plus.net/darna/portfolio/penhouse/'>Penhouse</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_3.jpg" data-rel="prettyPhoto[pp_gal_184]" title="<a href='https://themes.g5plus.net/darna/portfolio/penhouse/'>Penhouse</a>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-item InteriorDesign ">
                                                            <figure>
                                                                <img width="480" height="480" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_3-480x480.jpg" alt="Emirate Tower" />
                                                                <figcaption class>
                                                                    <div class="fig-title">
                                                                        <a href="https://themes.g5plus.net/darna/portfolio/emirate-tower/">
                                                                            <div class="title secondary-font bold-color primary-color-hover">Emirate Tower</div>
                                                                        </a>
                                                                        <span class="category menu-font bold-color">Interior Design</span>
                                                                    </div>
                                                                </figcaption>
                                                                <div class="button-toolbox-wrap">
                                                                    <div class="button-toolbox">
                                                                        <div class="inner">
                                                                            <a href="https://themes.g5plus.net/darna/portfolio/emirate-tower/" class="ico-view-detail"><i class="fa fa-eye"></i></a>
                                                                            <a class="ico-view-gallery prettyPhoto" href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_3.jpg" data-rel="prettyPhoto[pp_gal_183]" title="Emirate Tower">
                                                                                <i class="fa fa-arrows-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div style="display: none">
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/bigstock-Construction.jpg" data-rel="prettyPhoto[pp_gal_183]" title="<a href='https://themes.g5plus.net/darna/portfolio/emirate-tower/'>Emirate Tower</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_3.jpg" data-rel="prettyPhoto[pp_gal_183]" title="<a href='https://themes.g5plus.net/darna/portfolio/emirate-tower/'>Emirate Tower</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/math.jpg" data-rel="prettyPhoto[pp_gal_183]" title="<a href='https://themes.g5plus.net/darna/portfolio/emirate-tower/'>Emirate Tower</a>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portfolio-item Construction ">
                                                            <figure>
                                                                <img width="480" height="480" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_1-480x480.jpg" alt="Dubai Tower" />
                                                                <figcaption class>
                                                                    <div class="fig-title">
                                                                        <a href="https://themes.g5plus.net/darna/portfolio/dubai-tower/">
                                                                            <div class="title secondary-font bold-color primary-color-hover">Dubai Tower</div>
                                                                        </a>
                                                                        <span class="category menu-font bold-color">Construction</span>
                                                                    </div>
                                                                </figcaption>
                                                                <div class="button-toolbox-wrap">
                                                                    <div class="button-toolbox">
                                                                        <div class="inner">
                                                                            <a href="https://themes.g5plus.net/darna/portfolio/dubai-tower/" class="ico-view-detail"><i class="fa fa-eye"></i></a>
                                                                            <a class="ico-view-gallery prettyPhoto" href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/port_thum_1.jpg" data-rel="prettyPhoto[pp_gal_182]" title="Dubai Tower">
                                                                                <i class="fa fa-arrows-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div style="display: none">
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/math.jpg" data-rel="prettyPhoto[pp_gal_182]" title="<a href='https://themes.g5plus.net/darna/portfolio/dubai-tower/'>Dubai Tower</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/construction_3.jpg" data-rel="prettyPhoto[pp_gal_182]" title="<a href='https://themes.g5plus.net/darna/portfolio/dubai-tower/'>Dubai Tower</a>"></a>
                                                                </div>
                                                                <div>
                                                                    <a href="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/bigstock-Construction.jpg" data-rel="prettyPhoto[pp_gal_182]" title="<a href='https://themes.g5plus.net/darna/portfolio/dubai-tower/'>Dubai Tower</a>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    (function($) {
                                                        "use strict";

                                                        var $container = jQuery('div[data-section-id="6619144bd8605"]');
                                                        $($container).css('opacity', 0);
                                                        $(window).load(function() {
                                                            $('.isotope-portfolio', '.portfolio-tabs').off();
                                                            $('.isotope-portfolio', '.portfolio-tabs').click(function() {
                                                                $('.isotope-portfolio', '.portfolio-tabs').removeClass('active');
                                                                $('li', '.portfolio-tabs').removeClass('active');
                                                                $(this).addClass('active');
                                                                $(this).parent().addClass('active');
                                                                var dataSectionId = $(this).attr('data-section-id');
                                                                var filter = $(this).attr('data-filter');
                                                                var $container = jQuery('div[data-section-id="' + dataSectionId + '"]').isotope({
                                                                    filter: filter
                                                                });
                                                                $container.imagesLoaded(function() {
                                                                    $container.isotope('layout');
                                                                });
                                                            });
                                                            var $container = jQuery('div[data-section-id="6619144bd8605"]');
                                                            $container.imagesLoaded(function() {
                                                                $container.isotope({
                                                                    itemSelector: '.portfolio-item'
                                                                }).isotope('layout');
                                                            });
                                                            $($container).css('opacity', 1);

                                                            $container.closest('.portfolio').find('.isotope-portfolio-cat.active').trigger('click');

                                                        });


                                                        $(document).ready(function() {

                                                            $('.portfolio-item > div.entry-thumbnail').hoverdir();

                                                            PortfolioAjaxAction.init('https://themes.g5plus.net/darna/wp-admin/admin-ajax.php');
                                                            var $container = $('div[data-section-id="6619144bd8605"]');
                                                            console.log($container);
                                                            $($container).bind('afterOwlInit', function() {
                                                                $('.owl-controls', '.portfolio-wrapper').addClass('container');
                                                            });
                                                        })
                                                    })(jQuery);
                                                </script>
                                                <div class="fullwidth">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid text-center vc_custom_1437645376086">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper"> <a class="darna-button size-md style4 icon-left  " href="http://demo.g5plus.net/themes/darna/portfolio/miami-house/" title="View All Projects" target="_self">
                                                                        View All Projects </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fullwidth">
                                <div class="vc_row wpb_row vc_row-fluid margin-bottom-100 vc_custom_1444979476045">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="container">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-5">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="419" height="616" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/testimonial-author.png" class="vc_single_image-img attachment-full" alt srcset="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/testimonial-author.png 419w, https://themes.g5plus.net/darna/wp-content/uploads/2015/10/testimonial-author-204x300.png 204w" sizes="(max-width: 419px) 100vw, 419px" /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-7">
                                                            <div class="vc_column-inner vc_custom_1444877649718">
                                                                <div class="wpb_wrapper">
                                                                    <div data-plugin-options="{&quot;navigation&quot;:false,&quot;pagination&quot;:true,&quot;singleItem&quot;:true,&quot;transitionStyle&quot;:&quot;fade&quot;,&quot;stopOnHover&quot;:false,&quot;autoHeight&quot;:false,&quot;autoPlay&quot;:true}" class="darna-testimonial style3 owl-carousel  ">
                                                                        <div class="darna-testimonial-item">
                                                                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus Nam libero tempore, cum soluta nobis est eligendi optio.</p>
                                                                            <h6>Rosa Lecher</h6>
                                                                            <span>JVC - ROME - ITALIA</span>
                                                                        </div>
                                                                        <div class="darna-testimonial-item">
                                                                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus Nam libero tempore, cum soluta nobis est eligendi optio.</p>
                                                                            <h6>Alan Smith</h6>
                                                                            <span>HC - ROME - ITALIA</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="vc_row wpb_row vc_row-fluid margin-bottom-100">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="darna-heading style1 margin-bottom-40">
                                                    <h2>HAPPY CLIENTS</h2>
                                                    <p>Always dedicated and devoted</p>
                                                </div>
                                                <div class="fullwidth">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="col-md-3 col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1444819520130">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="275" height="151" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/partner-list-1.png" class="vc_single_image-img attachment-full" alt /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1444819526457">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="275" height="151" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/partner-list-2.png" class="vc_single_image-img attachment-full" alt /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1444819533691">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="275" height="151" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/partner-list-3.png" class="vc_single_image-img attachment-full" alt /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1444819542137">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="275" height="151" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/partner-list-4.png" class="vc_single_image-img attachment-full" alt /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1444819548828">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="275" height="151" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/partner-list-5.png" class="vc_single_image-img attachment-full" alt /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1444819555881">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="275" height="151" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/partner-list-6.png" class="vc_single_image-img attachment-full" alt /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1444819562049">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="275" height="151" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/partner-list-7.png" class="vc_single_image-img attachment-full" alt /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner vc_custom_1444819568443">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="275" height="151" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/10/partner-list-8.png" class="vc_single_image-img attachment-full" alt /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fullwidth">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1441335631466">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="container">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid margin-top-100 margin-bottom-90">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="darna-heading style1 margin-bottom-40">
                                                                        <h2>LASTEST NEWS</h2>
                                                                        <p>CONNECT WITH US ALL ABOUT DARNA</p>
                                                                    </div>
                                                                    <div class="darna-post  ">
                                                                        <div class="darna-post-slider">
                                                                            <div data-plugin-options="{&quot;items&quot; : 3,&quot;itemsDesktop&quot;:[1199, 3],&quot;itemsDesktopSmall&quot;:[980, 2],&quot;itemsTablet&quot;:[768, 1],&quot;pagination&quot;:true,&quot;navigation&quot;:false, &quot;autoPlay&quot;: true }" class="owl-carousel">
                                                                                <div class="darna-post-item">
                                                                                    <div class="darna-post-image">
                                                                                        <div class="entry-thumbnail">
                                                                                            <a href="https://themes.g5plus.net/darna/madrids-photographer-marathon/" title="Madrid’s Photographer Marathon" class="entry-thumbnail_overlay">
                                                                                                <img width="370" height="220" class="img-responsive" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/blog-08-370x220.jpg" alt="Madrid’s Photographer Marathon" />
                                                                                            </a>
                                                                                            <a data-rel="prettyPhoto" href class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="darna-post-content">
                                                                                        <a class="darna-post-title" href="https://themes.g5plus.net/darna/madrids-photographer-marathon/" rel="bookmark" title="Madrid’s Photographer Marathon">Madrid’s Photographer Marathon</a>
                                                                                        <i class="fa fa-calendar"><span>July 24, 2015</span></i>
                                                                                        <i class="fa fa-user"><span><a href="https://themes.g5plus.net/darna/author/g5plusacc/">g5plusacc</a></span></i>
                                                                                        <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content [...]</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="darna-post-item">
                                                                                    <div class="darna-post-image">
                                                                                        <div class="entry-thumbnail">
                                                                                            <a href="https://themes.g5plus.net/darna/icelands-volcano-timelapse/" title="Iceland’s volcano timelapse" class="entry-thumbnail_overlay">
                                                                                                <img width="370" height="220" class="img-responsive" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/blog-07-370x220.jpg" alt="Iceland’s volcano timelapse" />
                                                                                            </a>
                                                                                            <a data-rel="prettyPhoto" href class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="darna-post-content">
                                                                                        <a class="darna-post-title" href="https://themes.g5plus.net/darna/icelands-volcano-timelapse/" rel="bookmark" title="Iceland’s volcano timelapse">Iceland’s volcano timelapse</a>
                                                                                        <i class="fa fa-calendar"><span>July 24, 2015</span></i>
                                                                                        <i class="fa fa-user"><span><a href="https://themes.g5plus.net/darna/author/g5plusacc/">g5plusacc</a></span></i>
                                                                                        <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content [...]</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="darna-post-item">
                                                                                    <div class="darna-post-image">
                                                                                        <div class="entry-thumbnail">
                                                                                            <a href="https://themes.g5plus.net/darna/construction-you-can-count-on/" title="Construction You Can Count On" class="entry-thumbnail_overlay">
                                                                                                <img width="370" height="220" class="img-responsive" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/blog-05-370x220.jpg" alt="Construction You Can Count On" />
                                                                                            </a>
                                                                                            <a data-rel="prettyPhoto" href class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="darna-post-content">
                                                                                        <a class="darna-post-title" href="https://themes.g5plus.net/darna/construction-you-can-count-on/" rel="bookmark" title="Construction You Can Count On">Construction You Can Count On</a>
                                                                                        <i class="fa fa-calendar"><span>July 19, 2015</span></i>
                                                                                        <i class="fa fa-user"><span><a href="https://themes.g5plus.net/darna/author/g5plusacc/">g5plusacc</a></span></i>
                                                                                        <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content [...]</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="darna-post-item">
                                                                                    <div class="darna-post-image">
                                                                                        <div class="owl-carousel" data-plugin-options="{&quot;singleItem&quot; : true, &quot;pagination&quot; : true, &quot;navigation&quot; : false, &quot;autoHeight&quot; : true, &quot;autoPlay&quot; : true}">
                                                                                            <div class="entry-thumbnail">
                                                                                                <a href="https://themes.g5plus.net/darna/here-are-many-variations-of-passages/" title="Here Are Many Variations Of Passages" class="entry-thumbnail_overlay">
                                                                                                    <img width="370" height="220" class="img-responsive" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/blog-04-370x220.jpg" alt="Here Are Many Variations Of Passages" />
                                                                                                </a>
                                                                                                <a data-rel="prettyPhoto[blog_155]" href class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="darna-post-content">
                                                                                        <a class="darna-post-title" href="https://themes.g5plus.net/darna/here-are-many-variations-of-passages/" rel="bookmark" title="Here Are Many Variations Of Passages">Here Are Many Variations Of Passages</a>
                                                                                        <i class="fa fa-calendar"><span>July 19, 2015</span></i>
                                                                                        <i class="fa fa-user"><span><a href="https://themes.g5plus.net/darna/author/g5plusacc/">g5plusacc</a></span></i>
                                                                                        <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content [...]</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="darna-post-item">
                                                                                    <div class="darna-post-image">
                                                                                        <div class="owl-carousel" data-plugin-options="{&quot;singleItem&quot; : true, &quot;pagination&quot; : true, &quot;navigation&quot; : false, &quot;autoHeight&quot; : true, &quot;autoPlay&quot; : true}">
                                                                                            <div class="entry-thumbnail">
                                                                                                <a href="https://themes.g5plus.net/darna/recent-trends-in-story-telling/" title="Recent Trends In Story Telling" class="entry-thumbnail_overlay">
                                                                                                    <img width="370" height="220" class="img-responsive" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/blog-03-370x220.jpg" alt="Recent Trends In Story Telling" />
                                                                                                </a>
                                                                                                <a data-rel="prettyPhoto[blog_143]" href class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                                            </div>
                                                                                            <div class="entry-thumbnail">
                                                                                                <a href="https://themes.g5plus.net/darna/recent-trends-in-story-telling/" title="Recent Trends In Story Telling" class="entry-thumbnail_overlay">
                                                                                                    <img width="370" height="220" class="img-responsive" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/blog-02-370x220.jpg" alt="Recent Trends In Story Telling" />
                                                                                                </a>
                                                                                                <a data-rel="prettyPhoto[blog_143]" href class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                                            </div>
                                                                                            <div class="entry-thumbnail">
                                                                                                <a href="https://themes.g5plus.net/darna/recent-trends-in-story-telling/" title="Recent Trends In Story Telling" class="entry-thumbnail_overlay">
                                                                                                    <img width="370" height="220" class="img-responsive" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/blog-01-370x220.jpg" alt="Recent Trends In Story Telling" />
                                                                                                </a>
                                                                                                <a data-rel="prettyPhoto[blog_143]" href class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="darna-post-content">
                                                                                        <a class="darna-post-title" href="https://themes.g5plus.net/darna/recent-trends-in-story-telling/" rel="bookmark" title="Recent Trends In Story Telling">Recent Trends In Story Telling</a>
                                                                                        <i class="fa fa-calendar"><span>July 18, 2015</span></i>
                                                                                        <i class="fa fa-user"><span><a href="https://themes.g5plus.net/darna/author/g5plusacc/">g5plusacc</a></span></i>
                                                                                        <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content [...]</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="darna-post-item">
                                                                                    <div class="darna-post-image">
                                                                                        <div class="entry-thumbnail">
                                                                                            <a href="https://themes.g5plus.net/darna/supernatural-fx-showreel/" title="SuperNatural Fx Showreel" class="entry-thumbnail_overlay">
                                                                                                <img width="370" height="220" class="img-responsive" src="https://themes.g5plus.net/darna/wp-content/uploads/2015/07/blog-06-370x220.jpg" alt="SuperNatural Fx Showreel" />
                                                                                            </a>
                                                                                            <a data-rel="prettyPhoto" href class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="darna-post-content">
                                                                                        <a class="darna-post-title" href="https://themes.g5plus.net/darna/supernatural-fx-showreel/" rel="bookmark" title="SuperNatural Fx Showreel">SuperNatural Fx Showreel</a>
                                                                                        <i class="fa fa-calendar"><span>July 18, 2015</span></i>
                                                                                        <i class="fa fa-user"><span><a href="https://themes.g5plus.net/darna/author/g5plusacc/">g5plusacc</a></span></i>
                                                                                        <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content [...]</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="darna-post-item">
                                                                                    <div class="darna-post-image">
                                                                                        <div class="embed-responsive embed-responsive-16by9 embed-responsive-blog-thumbnail"><iframe src="//player.vimeo.com/video/25475500?badge=0" width="500" height="281" frameborder="0"></iframe></div>
                                                                                    </div>
                                                                                    <div class="darna-post-content">
                                                                                        <a class="darna-post-title" href="https://themes.g5plus.net/darna/josh-woodward-already-there/" rel="bookmark" title="Josh WoodWard &#8211; Already There">Josh WoodWard &#8211; Already There</a>
                                                                                        <i class="fa fa-calendar"><span>July 16, 2015</span></i>
                                                                                        <i class="fa fa-user"><span><a href="https://themes.g5plus.net/darna/author/g5plusacc/">g5plusacc</a></span></i>
                                                                                        <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content [...]</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>



    <?php
get_footer();
?>