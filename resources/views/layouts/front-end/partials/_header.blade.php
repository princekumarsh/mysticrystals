<style>
    .for-count-value {
        color: {{$web_config['primary_color']}};
    }

    .count-value {
        color: {{$web_config['primary_color']}};
    }

    @media (min-width: 768px) {
        .navbar-stuck-menu {
            background-color: {{$web_config['primary_color']}};
        }

    }

    @media (max-width: 767px) {
        .search_button .input-group-text i {
            color: {{$web_config['primary_color']}}                              !important;
        }
        .navbar-expand-md .dropdown-menu > .dropdown > .dropdown-toggle {
            padding- {{Session::get('direction') === "rtl" ? 'left' : 'right'}}: 1.95rem;
        }

        .mega-nav1 {
            color: {{$web_config['primary_color']}}                              !important;
        }

        .mega-nav1 .nav-link {
            color: {{$web_config['primary_color']}}                              !important;
        }
    }

    @media (max-width: 471px) {
        .mega-nav1 {
            color: {{$web_config['primary_color']}}                              !important;
        }
        .mega-nav1 .nav-link {
            color: {{$web_config['primary_color']}} !important;
        }
    }
</style>
@php($announcement=\App\CPU\Helpers::get_business_settings('announcement'))
@if (isset($announcement) && $announcement['status']==1)
    <div class="text-center position-relative px-4 py-1" id="anouncement" style="background-color: {{ $announcement['color'] }};color:{{$announcement['text_color']}}">
        <span>{{ $announcement['announcement'] }} </span>
        <span class="__close-anouncement" onclick="myFunction()">X</span>
    </div>
@endif

<header class="fusion-header-wrapper">
    <div
        class="fusion-header-v3 fusion-logo-alignment fusion-logo-left fusion-sticky-menu- fusion-sticky-logo-1 fusion-mobile-logo-1  fusion-mobile-menu-design-modern">

        <div class="fusion-secondary-header">
            <div class="fusion-row">
                <div class="fusion-alignleft">
                    <div class="fusion-social-links-header">
                        <div class="fusion-social-networks">
                            <div class="fusion-social-networks-wrapper"><a
                                    class="fusion-social-network-icon fusion-tooltip fusion-facebook awb-icon-facebook"
                                    style data-placement="bottom" data-title="Facebook"
                                    data-toggle="tooltip" title="Facebook"
                                    href="https://www.facebook.com/MoonriseCrystals/" target="_blank"
                                    rel="noreferrer"><span class="screen-reader-text">Facebook</span></a><a
                                    class="fusion-social-network-icon fusion-tooltip fusion-instagram awb-icon-instagram"
                                    style data-placement="bottom" data-title="Instagram"
                                    data-toggle="tooltip" title="Instagram"
                                    href="https://www.instagram.com/moonrisecrystals/" target="_blank"
                                    rel="noopener noreferrer"><span
                                        class="screen-reader-text">Instagram</span></a><a
                                    class="fusion-social-network-icon fusion-tooltip fusion-pinterest awb-icon-pinterest"
                                    style data-placement="bottom" data-title="Pinterest"
                                    data-toggle="tooltip" title="Pinterest"
                                    href="https://www.pinterest.com/moonrisecrystal/_created/"
                                    target="_blank" rel="noopener noreferrer"><span
                                        class="screen-reader-text">Pinterest</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="fusion-alignright">
                    <nav class="fusion-secondary-menu" role="navigation" aria-label="Secondary Menu">
                        <ul id="menu-top-menu" class="menu">
                            <li
                                class="menu-item fusion-dropdown-menu menu-item-has-children fusion-custom-menu-item fusion-menu-login-box">
                                <a href="{{route('login1')}}" aria-haspopup="true"
                                    class="fusion-bottombar-highlight"><span class="menu-text">My
                                        Account</span></a>
                                <div class="fusion-custom-menu-item-contents">
                                    <form action="{{route('login1')}}"
                                        name="loginform" method="post">
                                        <p><input type="text" class="input-text" name="log"
                                                id="username-top-menu-654e138252413" value=""
                                                placeholder="Username" /></p>
                                        <p><input type="password" class="input-text" name="pwd"
                                                id="password-top-menu-654e138252413" value=""
                                                placeholder="Password" /></p>
                                        <p class="fusion-remember-checkbox"><label
                                                for="fusion-menu-login-box-rememberme-top-menu-654e138252413"><input
                                                    name="rememberme" type="checkbox"
                                                    id="fusion-menu-login-box-rememberme" value="forever">
                                                Remember Me</label></p><input type="hidden"
                                            name="fusion_woo_login_box" value="true" />
                                        <p class="fusion-login-box-submit"><input type="submit"
                                                name="wp-submit" id="wp-submit-top-menu-654e138252413"
                                                class="button button-small default comment-submit"
                                                value="Log In"><input type="hidden" name="redirect"
                                                value="">
                                        </p>
                                    </form><a class="fusion-menu-login-box-register"
                                        href="https://moonrisecrystals.com/my-account/"
                                        title="Register">Register</a>
                                </div>
                            </li>
                            <li class="fusion-custom-menu-item fusion-menu-cart fusion-secondary-menu-cart">
                                <a class="fusion-secondary-menu-icon"
                                    href="{{route('p_cart')}}"><span class="menu-text"
                                        aria-label="View Cart">1 Item(s) <span
                                            class="fusion-woo-cart-separator">-</span> <span
                                            class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>40.50</bdi></span></span></a>
                                <div class="fusion-custom-menu-item-contents fusion-menu-cart-items">
                                    <div class="fusion-menu-cart-item"><a
                                            href="{{route('details')}}"><img
                                                width="66" height="66"
                                                src="https://moonrisecrystals.com/wp-content/uploads/Amazonite-Heart-66x66.jpg"
                                                class="attachment-recent-works-thumbnail size-recent-works-thumbnail wp-post-image"
                                                alt="Amazonite Heart amazonite heart" decoding="async"
                                                srcset="https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-66x66.jpg 66w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-150x150.jpg 150w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-200x200.jpg 200w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-300x300.jpg 300w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-400x400.jpg 400w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-500x500.jpg 500w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-600x600.jpg 600w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-700x700.jpg 700w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-768x768.jpg 768w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-800x800.jpg 800w, https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-1024x1024.jpg 1024w, https://moonrisecrystals.com/wp-content/uploads/Amazonite-Heart.jpg 1200w"
                                                sizes="(max-width: 66px) 100vw, 66px" />
                                            <div class="fusion-menu-cart-item-details"><span
                                                    class="fusion-menu-cart-item-title">Amazonite
                                                    Heart</span><span
                                                    class="fusion-menu-cart-item-quantity">1 x <span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span>40.50</bdi></span></span>
                                            </div>
                                        </a></div>
                                    <div class="fusion-menu-cart-checkout">
                                        <div class="fusion-menu-cart-link"><a
                                                href="{{route('p_cart')}}"><span class>View
                                                    Cart</span></a></div>
                                        <div class="fusion-menu-cart-checkout-link"><a
                                                href="{{route('p_checkout')}}"><span>Checkout</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <nav class="fusion-mobile-nav-holder fusion-mobile-menu-text-align-left"
                        aria-label="Secondary Mobile Menu"></nav>
                </div>
            </div>
        </div>
        <div class="fusion-header-sticky-height"></div>
        <div class="fusion-header">
            <div class="fusion-row">
                <div class="fusion-logo" data-margin-top="28px" data-margin-bottom="22px"
                    data-margin-left="0px" data-margin-right="0px">
                    <a class="fusion-logo-link" href="{{route('home')}}">

                        <!-- standard logo -->
                        <img src="{{asset('public/assets/front-end/img/mystic_logo.png')}}"
                            srcset=""
                            width="400" height="60" style="max-height:60px;height:auto;"
                            alt=" Logo"
                            data-retina_logo_url="https://moonrisecrystals.com/wp-content/uploads/2021/12/Moonrise-Crystals-Ethical-Sourcing-Logo-800.png"
                            class="fusion-standard-logo" />

                        <!-- mobile logo -->
                        <img src="{{asset('public/assets/front-end/img/mystic_logo.png')}}"

                            width="250" height="27" style="max-height:27px;height:auto;"
                            alt="Moonrise Crystals Logo"
                            data-retina_logo_url="https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Logo-500.png"
                            class="fusion-mobile-logo" />

                        <!-- sticky header logo -->
                        <img src="{{asset('public/assets/front-end/img/mystic_logo.png')}}"

                            width="200" height="22" style="max-height:22px;height:auto;"
                            alt="Moonrise Crystals Logo"
                            data-retina_logo_url="https://moonrisecrystals.com/wp-content/uploads/2021/12/Moonrise-Crystals-Logo-400.png"
                            class="fusion-sticky-logo" />
                    </a>
                </div>
                <nav class="fusion-main-menu" aria-label="Main Menu">
                    <div class="fusion-overlay-search">
                        <form role="search"
                            class="searchform fusion-search-form  fusion-live-search fusion-search-form-clean"
                            method="get" action="https://moonrisecrystals.com/">
                            <div class="fusion-search-form-content">


                                <div class="fusion-search-field search-field">
                                    <label><span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="s fusion-live-search-input" name="s"
                                            id="fusion-live-search-input-0" autocomplete="off"
                                            placeholder="Search..." required aria-required="true"
                                            aria-label="Search..." />
                                    </label>
                                </div>
                                <div class="fusion-search-button search-button">
                                    <input type="submit" class="fusion-search-submit searchsubmit"
                                        aria-label="Search" value="&#xf002;" />
                                    <div class="fusion-slider-loading"></div>
                                </div>


                            </div>


                            <div class="fusion-search-results-wrapper">
                                <div class="fusion-search-results"></div>
                            </div>

                        </form>
                        <div class="fusion-search-spacer"></div><a href="#" role="button"
                            aria-label="Close Search" class="fusion-close-search"></a>
                    </div>
                    <ul id="menu-main-menu" class="fusion-menu">
                        <li id="menu-item-34"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"
                            data-item-id="34"><a href="{{route('p_shop')}}"
                                class="fusion-bottombar-highlight"><span class="menu-text">Shop</span></a>
                        </li>
                        <li id="menu-item-18772"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18772"
                            data-item-id="18772"><a href="{{route('ethical_standards')}}"
                                class="fusion-bottombar-highlight"><span class="menu-text">Ethical
                                    Standards</span></a></li>
                        <li id="menu-item-18510"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-18510 fusion-megamenu-menu "
                            data-item-id="18510"><a
                                href="{{route('learn_about_crystals')}}"
                                class="fusion-bottombar-highlight"><span class="menu-text">Learn About
                                    Crystals</span></a>
                            <div
                                class="fusion-megamenu-wrapper fusion-columns-1 columns-per-row-1 columns-4 col-span-12 fusion-megamenu-fullwidth">
                                <div class="row">
                                    <div class="fusion-megamenu-holder" style="width:425px;"
                                        data-width="425px">
                                        <ul class="fusion-megamenu fusion-megamenu-border">
                                            <li id="menu-item-18061"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18061 fusion-megamenu-submenu menu-item-has-link fusion-megamenu-columns-1 col-lg-12 col-md-12 col-sm-12">
                                                <div class='fusion-megamenu-title'><a
                                                        class="awb-justify-title"
                                                        href="{{route('complete_guide_to_crystals')}}">Stone
                                                        Guides</a></div>
                                                <div
                                                    class="fusion-megamenu-widgets-container second-level-widget">
                                                    <div id="custom_html-10"
                                                        class="widget_text widget widget_custom_html"
                                                        style="border-style: solid;border-color:transparent;border-width:0px;">
                                                        <div class="textwidget custom-html-widget">238
                                                            Complete Crystal Guides to explore</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul
                                            class="fusion-megamenu fusion-megamenu-row-2 fusion-megamenu-row-columns-1 fusion-megamenu-border">
                                            <li id="menu-item-18508"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18508 fusion-megamenu-submenu menu-item-has-link fusion-megamenu-columns-1 col-lg-12 col-md-12 col-sm-12">
                                                <div class='fusion-megamenu-title'><a
                                                        class="awb-justify-title"
                                                        href="{{route('crystal_energy_indexes')}}">Healing
                                                        Indexes</a></div>
                                                <div
                                                    class="fusion-megamenu-widgets-container second-level-widget">
                                                    <div id="custom_html-11"
                                                        class="widget_text widget widget_custom_html"
                                                        style="border-style: solid;border-color:transparent;border-width:0px;">
                                                        <div class="textwidget custom-html-widget">4 indexes
                                                            for energy healing references</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul
                                            class="fusion-megamenu fusion-megamenu-row-3 fusion-megamenu-row-columns-1 fusion-megamenu-border">
                                            <li id="menu-item-18509"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18509 fusion-megamenu-submenu menu-item-has-link fusion-megamenu-columns-1 col-lg-12 col-md-12 col-sm-12">
                                                <div class='fusion-megamenu-title'><a
                                                        class="awb-justify-title"
                                                        href="{{route('crystal_articles')}}">Other
                                                        Articles</a></div>
                                                <div
                                                    class="fusion-megamenu-widgets-container second-level-widget">
                                                    <div id="custom_html-12"
                                                        class="widget_text widget widget_custom_html"
                                                        style="border-style: solid;border-color:transparent;border-width:0px;">
                                                        <div class="textwidget custom-html-widget">How-to
                                                            articles & information for the curious-minded
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul
                                            class="fusion-megamenu fusion-megamenu-row-4 fusion-megamenu-row-columns-1">
                                            <li id="menu-item-2022"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2022 fusion-megamenu-submenu menu-item-has-link fusion-megamenu-columns-1 col-lg-12 col-md-12 col-sm-12">
                                                <div class='fusion-megamenu-title'><a
                                                        class="awb-justify-title"
                                                        href="{{route('feel_loved_crystal_stories')}}">Crystal
                                                        Stories</a></div>
                                                <div
                                                    class="fusion-megamenu-widgets-container second-level-widget">
                                                    <div id="custom_html-13"
                                                        class="widget_text widget widget_custom_html"
                                                        style="border-style: solid;border-color:transparent;border-width:0px;">
                                                        <div class="textwidget custom-html-widget">Case
                                                            studies in choosing the right crystal</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </li>
                        <li id="menu-item-19103"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19103"
                            data-item-id="19103"><a href="{{route('about')}}"
                                class="fusion-bottombar-highlight"><span class="menu-text">About</span></a>
                        </li>
                        <li id="menu-item-35"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"
                            data-item-id="35"><a href="{{route('contact')}}"
                                class="fusion-icon-only-link fusion-flex-link fusion-bottombar-highlight"><span
                                    class="fusion-megamenu-icon"><i class="glyphicon fa-envelope fas"
                                        aria-hidden="true"></i></span><span class="menu-text"><span
                                        class="menu-title">Contact</span></span></a></li>
                        <li class="fusion-custom-menu-item fusion-main-menu-search fusion-search-overlay"><a
                                class="fusion-main-menu-icon" href="#" aria-label="Search"
                                data-title="Search" title="Search" role="button" aria-expanded="false"></a>
                        </li>
                    </ul>
                </nav>
                <div class="fusion-mobile-menu-icons">
                    <a href="#" class="fusion-icon awb-icon-bars" aria-label="Toggle mobile menu"
                        aria-expanded="false"></a>

                    <a href="#" class="fusion-icon awb-icon-search" aria-label="Toggle mobile search"></a>


                </div>

                <nav class="fusion-mobile-nav-holder fusion-mobile-menu-text-align-left"
                    aria-label="Main Menu Mobile"></nav>


                <div class="fusion-clearfix"></div>
                <div class="fusion-mobile-menu-search">
                    <form role="search"
                        class="searchform fusion-search-form  fusion-live-search fusion-search-form-clean"
                        method="get" action="https://moonrisecrystals.com/">
                        <div class="fusion-search-form-content">


                            <div class="fusion-search-field search-field">
                                <label><span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="s fusion-live-search-input" name="s"
                                        id="fusion-live-search-input-1" autocomplete="off"
                                        placeholder="Search..." required aria-required="true"
                                        aria-label="Search..." />
                                </label>
                            </div>
                            <div class="fusion-search-button search-button">
                                <input type="submit" class="fusion-search-submit searchsubmit"
                                    aria-label="Search" value="&#xf002;" />
                                <div class="fusion-slider-loading"></div>
                            </div>


                        </div>


                        <div class="fusion-search-results-wrapper">
                            <div class="fusion-search-results"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fusion-clearfix"></div>
</header>


@push('script')
<script>
    function myFunction() {
    $('#anouncement').slideUp(300)
    }
    </script>
@endpush

