@extends('layouts.front-end.app')
@section('content')

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name='robots' content='noindex, follow' />

    <!-- Google Tag Manager for WordPress by gtm4wp.com -->
    <script data-cfasync="false" data-pagespeed-no-defer>
        var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
	const gtm4wp_use_sku_instead = false;
	const gtm4wp_id_prefix = '';
	const gtm4wp_remarketing = false;
	const gtm4wp_eec = true;
	const gtm4wp_classicec = false;
	const gtm4wp_currency = 'USD';
	const gtm4wp_product_per_impression = 10;
	const gtm4wp_needs_shipping_address = true;
	const gtm4wp_business_vertical = 'retail';
	const gtm4wp_business_vertical_id = 'id';
    </script>
    <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
    <!-- This site is optimized with the Yoast SEO Premium plugin v21.5 (Yoast SEO v21.5) - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Cart</title>
    <link rel="canonical" href="https://moonrisecrystals.com/cart/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Cart" />
    <meta property="og:url" content="https://moonrisecrystals.com/cart/" />
    <meta property="og:site_name" content="Moonrise Crystals" />
    <meta property="article:publisher" content="https://www.facebook.com/MoonriseCrystals/" />
    <meta property="article:modified_time" content="2023-05-08T04:40:41+00:00" />
    <meta property="og:image"
        content="https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Ethically-Sourced.jpg" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="800" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />
    <script type="application/ld+json" class="yoast-schema-graph">
        {"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://moonrisecrystals.com/cart/","url":"https://moonrisecrystals.com/cart/","name":"Cart","isPartOf":{"@id":"https://moonrisecrystals.com/#website"},"primaryImageOfPage":{"@id":"https://moonrisecrystals.com/cart/#primaryimage"},"image":{"@id":"https://moonrisecrystals.com/cart/#primaryimage"},"thumbnailUrl":"https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Ethically-Sourced.jpg","datePublished":"2021-12-20T19:47:48+00:00","dateModified":"2023-05-08T04:40:41+00:00","breadcrumb":{"@id":"https://moonrisecrystals.com/cart/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://moonrisecrystals.com/cart/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://moonrisecrystals.com/cart/#primaryimage","url":"https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Ethically-Sourced.jpg","contentUrl":"https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Ethically-Sourced.jpg","width":800,"height":800,"caption":"Moonrise Crystals Ethically Sourced ethical crystal standards"},{"@type":"BreadcrumbList","@id":"https://moonrisecrystals.com/cart/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://moonrisecrystals.com/"},{"@type":"ListItem","position":2,"name":"Cart"}]},{"@type":"WebSite","@id":"https://moonrisecrystals.com/#website","url":"https://moonrisecrystals.com/","name":"Moonrise Crystals","description":"Ethically Sourced Healing Crystals","publisher":{"@id":"https://moonrisecrystals.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://moonrisecrystals.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"Organization","@id":"https://moonrisecrystals.com/#organization","name":"Moonrise Crystals","url":"https://moonrisecrystals.com/","logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://moonrisecrystals.com/#/schema/logo/image/","url":"https://moonrisecrystals.com/wp-content/uploads/2021/12/Moonrise-Crystals-Ethical-Sourcing-Logo-800.png","contentUrl":"https://moonrisecrystals.com/wp-content/uploads/2021/12/Moonrise-Crystals-Ethical-Sourcing-Logo-800.png","width":800,"height":120,"caption":"Moonrise Crystals"},"image":{"@id":"https://moonrisecrystals.com/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/MoonriseCrystals/","https://www.instagram.com/moonrisecrystals/","https://www.pinterest.com/moonrisecrystal/_created/"]}]}
    </script>
    <!-- / Yoast SEO Premium plugin. -->


    <link rel="alternate" type="application/rss+xml" title="Moonrise Crystals &raquo; Feed"
        href="https://moonrisecrystals.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Moonrise Crystals &raquo; Comments Feed"
        href="https://moonrisecrystals.com/comments/feed/" />
    <link rel="shortcut icon" href="https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Fav64.png"
        type="image/x-icon" />

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Fav180.png">

    <!-- Android Icon -->
    <link rel="icon" sizes="192x192"
        href="https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Fav120.png">

    <!-- MS Edge Icon -->
    <meta name="msapplication-TileImage"
        content="https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Fav180.png">

    <meta property="og:title" content="Cart" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://moonrisecrystals.com/cart/" />
    <meta property="og:site_name" content="Moonrise Crystals" />
    <meta property="og:description" content="" />

    <meta property="og:image"
        content="https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Ethically-Sourced.jpg" />
    <link rel='stylesheet' id='woo-gift-cards-lite-css'
        href='https://moonrisecrystals.com/wp-content/plugins/woo-gift-cards-lite/public/css/woocommerce_gift_cards_lite-public.css?ver=2.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='select2-css'
        href='https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/css/select2.css?ver=8.2.1'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='preload' as='font' type='font/woff2' crossorigin='anonymous' id='tinvwl-webfont-font-css'
        href='https://moonrisecrystals.com/wp-content/plugins/ti-woocommerce-wishlist/assets/fonts/tinvwl-webfont.woff2?ver=xu2uyi'
        media='all' />
    <link rel='stylesheet' id='tinvwl-webfont-css'
        href='https://moonrisecrystals.com/wp-content/plugins/ti-woocommerce-wishlist/assets/css/webfont.min.css?ver=2.7.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='tinvwl-css'
        href='https://moonrisecrystals.com/wp-content/plugins/ti-woocommerce-wishlist/assets/css/public.min.css?ver=2.7.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='stripe_styles-css'
        href='https://moonrisecrystals.com/wp-content/plugins/woocommerce-gateway-stripe/assets/css/stripe-styles.css?ver=7.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='child-style-css'
        href='https://moonrisecrystals.com/wp-content/themes/Avada-Child-Theme/style.css?ver=6.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='cwginstock_frontend_css-css'
        href='https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/css/frontend.min.css?ver=5.0.1'
        type='text/css' media='' />
    <link rel='stylesheet' id='cwginstock_bootstrap-css'
        href='https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/css/bootstrap.min.css?ver=5.0.1'
        type='text/css' media='' />
    <link rel='stylesheet' id='fusion-dynamic-css-css'
        href='https://moonrisecrystals.com/wp-content/uploads/fusion-styles/753d83b6e475cd1c7ee2a6c2968855f8.min.css?ver=3.11.2'
        type='text/css' media='all' />
    <script type="text/javascript" src="https://moonrisecrystals.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://moonrisecrystals.com/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-woocommerce-enhanced.js?ver=1.18.1"
        id="gtm4wp-woocommerce-enhanced-js"></script>
    <script type="text/javascript" id="woocommerce-tokenization-form-js-extra">
        /* <![CDATA[ */
var wc_tokenization_form_params = {"is_registration_required":"","is_logged_in":""};
/* ]]> */
    </script>
    <script type="text/javascript"
        src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/tokenization-form.min.js?ver=8.2.1"
        id="woocommerce-tokenization-form-js"></script>
    <script type="text/javascript"
        src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-gateway-stripe/assets/js/jquery.mask.min.js?ver=7.6.2"
        id="jquery-mask-js"></script>
    <link rel="https://api.w.org/" href="https://moonrisecrystals.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://moonrisecrystals.com/wp-json/wp/v2/pages/26" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://moonrisecrystals.com/xmlrpc.php?rsd" />
    <link rel='shortlink' href='https://moonrisecrystals.com/?p=26' />
    <link rel="alternate" type="application/json+oembed"
        href="https://moonrisecrystals.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmoonrisecrystals.com%2Fcart%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://moonrisecrystals.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmoonrisecrystals.com%2Fcart%2F&#038;format=xml" />

    <!-- Google Tag Manager for WordPress by gtm4wp.com -->
    <!-- GTM Container placement set to footer -->
    <script data-cfasync="false" data-pagespeed-no-defer>
        var dataLayer_content = {"pagePostType":"page","pagePostType2":"single-page","pagePostAuthor":"Meira Leonard","ecommerce":{"cart":[{"id":1675,"internal_id":1675,"name":"Agatized Coral","sku":"MC_4A2628-01","category":"Agatized Coral","price":16.75,"stocklevel":6,"variant":"small-1-25-in","quantity":1}]}};
	dataLayer.push( dataLayer_content );
    </script>
    <script data-cfasync="false">
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NQKGX36');
    </script>
    <!-- End Google Tag Manager -->
    <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
    <link rel="preload" as="image"
        href="https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Ethically-Sourced.jpg"
        imagesrcset="https://moonrisecrystals.com/wp-content/uploads//Moonrise-Crystals-Ethically-Sourced-66x66.jpg 66w, https://moonrisecrystals.com/wp-content/uploads//Moonrise-Crystals-Ethically-Sourced-150x150.jpg 150w, https://moonrisecrystals.com/wp-content/uploads//Moonrise-Crystals-Ethically-Sourced-200x200.jpg 200w, https://moonrisecrystals.com/wp-content/uploads//Moonrise-Crystals-Ethically-Sourced-400x400.jpg 400w, https://moonrisecrystals.com/wp-content/uploads//Moonrise-Crystals-Ethically-Sourced-500x500.jpg 500w, https://moonrisecrystals.com/wp-content/uploads//Moonrise-Crystals-Ethically-Sourced-600x600.jpg 600w, https://moonrisecrystals.com/wp-content/uploads//Moonrise-Crystals-Ethically-Sourced-700x700.jpg 700w, https://moonrisecrystals.com/wp-content/uploads//Moonrise-Crystals-Ethically-Sourced-768x768.jpg 768w, https://moonrisecrystals.com/wp-content/uploads/Moonrise-Crystals-Ethically-Sourced.jpg 800w"
        imagesizes="(max-width: 800px) 100vw, 800px" />
    <link rel="preload"
        href="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/fonts/icomoon/awb-icons.woff"
        as="font" type="font/woff" crossorigin>
    <link rel="preload"
        href="//moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-brands-400.woff2"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload"
        href="//moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-regular-400.woff2"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload"
        href="//moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-solid-900.woff2"
        as="font" type="font/woff2" crossorigin>
    <style type="text/css" id="css-fb-visibility">
        @media screen and (max-width: 640px) {
            .fusion-no-small-visibility {
                display: none !important;
            }

            body .sm-text-align-center {
                text-align: center !important;
            }

            body .sm-text-align-left {
                text-align: left !important;
            }

            body .sm-text-align-right {
                text-align: right !important;
            }

            body .sm-flex-align-center {
                justify-content: center !important;
            }

            body .sm-flex-align-flex-start {
                justify-content: flex-start !important;
            }

            body .sm-flex-align-flex-end {
                justify-content: flex-end !important;
            }

            body .sm-mx-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .sm-ml-auto {
                margin-left: auto !important;
            }

            body .sm-mr-auto {
                margin-right: auto !important;
            }

            body .fusion-absolute-position-small {
                position: absolute;
                top: auto;
                width: 100%;
            }

            .awb-sticky.awb-sticky-small {
                position: sticky;
                top: var(--awb-sticky-offset, 0);
            }
        }

        @media screen and (min-width: 641px) and (max-width: 1130px) {
            .fusion-no-medium-visibility {
                display: none !important;
            }

            body .md-text-align-center {
                text-align: center !important;
            }

            body .md-text-align-left {
                text-align: left !important;
            }

            body .md-text-align-right {
                text-align: right !important;
            }

            body .md-flex-align-center {
                justify-content: center !important;
            }

            body .md-flex-align-flex-start {
                justify-content: flex-start !important;
            }

            body .md-flex-align-flex-end {
                justify-content: flex-end !important;
            }

            body .md-mx-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .md-ml-auto {
                margin-left: auto !important;
            }

            body .md-mr-auto {
                margin-right: auto !important;
            }

            body .fusion-absolute-position-medium {
                position: absolute;
                top: auto;
                width: 100%;
            }

            .awb-sticky.awb-sticky-medium {
                position: sticky;
                top: var(--awb-sticky-offset, 0);
            }
        }

        @media screen and (min-width: 1131px) {
            .fusion-no-large-visibility {
                display: none !important;
            }

            body .lg-text-align-center {
                text-align: center !important;
            }

            body .lg-text-align-left {
                text-align: left !important;
            }

            body .lg-text-align-right {
                text-align: right !important;
            }

            body .lg-flex-align-center {
                justify-content: center !important;
            }

            body .lg-flex-align-flex-start {
                justify-content: flex-start !important;
            }

            body .lg-flex-align-flex-end {
                justify-content: flex-end !important;
            }

            body .lg-mx-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .lg-ml-auto {
                margin-left: auto !important;
            }

            body .lg-mr-auto {
                margin-right: auto !important;
            }

            body .fusion-absolute-position-large {
                position: absolute;
                top: auto;
                width: 100%;
            }

            .awb-sticky.awb-sticky-large {
                position: sticky;
                top: var(--awb-sticky-offset, 0);
            }
        }
    </style> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <script type="text/javascript">
        var doc = document.documentElement;
			doc.setAttribute( 'data-useragent', navigator.userAgent );
    </script>

</head>

<body
    class="page-template-default page page-id-26 theme-Avada woocommerce-cart woocommerce-page woocommerce-no-js tinvwl-theme-style fusion-image-hovers fusion-pagination-sizing fusion-button_type-flat fusion-button_span-no fusion-button_gradient-linear avada-image-rollover-circle-yes avada-image-rollover-yes avada-image-rollover-direction-left fusion-body ltr fusion-sticky-header no-tablet-sticky-header no-mobile-sticky-header no-mobile-slidingbar no-mobile-totop fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow- layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center fusion-woo-product-design-clean fusion-woo-shop-page-columns-3 fusion-woo-related-columns-3 fusion-woo-archive-page-columns-3 fusion-woocommerce-equal-heights avada-has-woo-gallery-disabled woo-sale-badge-circle woo-outofstock-badge-rectangle mobile-menu-design-modern fusion-show-pagination-text fusion-header-layout-v3 avada-responsive avada-footer-fx-none avada-menu-highlight-style-bottombar fusion-search-form-clean fusion-main-menu-search-overlay fusion-avatar-circle avada-sticky-shrinkage avada-dropdown-styles avada-blog-layout-masonry avada-blog-archive-layout-masonry avada-header-shadow-no avada-menu-icon-position-left avada-has-megamenu-shadow avada-has-pagetitle-bg-full avada-has-mobile-menu-search avada-has-main-nav-search-icon avada-has-breadcrumb-mobile-hidden avada-has-titlebar-bar_and_content avada-header-border-color-full-transparent avada-has-pagination-width_height avada-flyout-menu-direction-fade avada-has-blocks avada-ec-views-v1"
    data-awb-post-id="26">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <div id="boxed-wrapper">

        <div id="wrapper" class="fusion-wrapper">
            <div id="home" style="position:relative;top:-1px;"></div>




            <div id="sliders-container" class="fusion-slider-visibility">
            </div>



            <section class="avada-page-titlebar-wrapper" aria-label="Page Title Bar">
                <div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-center">
                    <div class="fusion-page-title-row">
                        <div class="fusion-page-title-wrapper">
                            <div class="fusion-page-title-captions">

                                <h1 class="entry-title">Cart</h1>



                            </div>


                        </div>
                    </div>
                </div>
            </section>

            <main id="main" class="clearfix ">
                <div class="fusion-row" style="">
                    <section id="content" style="width: 100%;">
                        <div id="post-26" class="post-26 page type-page status-publish has-post-thumbnail hentry">
                            <span class="entry-title rich-snippet-hidden">Cart</span><span
                                class="updated rich-snippet-hidden">2023-05-07T18:40:41-10:00</span>

                            <div class="post-content">
                                <div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
                                    style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;">
                                    <div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
                                        style="max-width:1274px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
                                        <div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_1 1_1 fusion-flex-column"
                                            style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
                                            <div
                                                class="fusion-column-wrapper fusion-flex-justify-content-flex-start fusion-content-layout-column">
                                                <div class="fusion-text fusion-text-1">
                                                    <div class="woocommerce">
                                                        <div class="woocommerce-notices-wrapper"></div>
                                                        <form class="woocommerce-cart-form"
                                                            action="https://moonrisecrystals.com/cart/" method="post">
                                                            <div class="woocommerce-content-box full-width clearfix">
                                                                <h2>You Have 1 Item In Your Cart</h2>

                                                                <table
                                                                    class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                                                    cellspacing="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="product-name">Product</th>
                                                                            <th class="product-price">Price</th>
                                                                            <th class="product-quantity">Quantity</th>
                                                                            <th class="product-subtotal">Subtotal</th>
                                                                            <th class="product-remove">Remove</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr
                                                                            class="woocommerce-cart-form__cart-item cart_item">

                                                                            <td class="product-name"
                                                                                data-title="Product">
                                                                                <div
                                                                                    class="fusion-product-name-wrapper">
                                                                                    <span class="product-thumbnail">
                                                                                        <a
                                                                                            href="https://moonrisecrystals.com/product/agatized-coral/?attribute_pa_select-size=small-1-25-in"><img
                                                                                                fetchpriority="high"
                                                                                                decoding="async"
                                                                                                width="500" height="500"
                                                                                                src="https://moonrisecrystals.com/wp-content/uploads/Agatized-Coral-500x500.jpg"
                                                                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                                alt="Agatized Coral agatized coral"
                                                                                                srcset="https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-66x66.jpg 66w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-150x150.jpg 150w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-200x200.jpg 200w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-300x300.jpg 300w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-400x400.jpg 400w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-500x500.jpg 500w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-600x600.jpg 600w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-700x700.jpg 700w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-768x768.jpg 768w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-800x800.jpg 800w, https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-1024x1024.jpg 1024w, https://moonrisecrystals.com/wp-content/uploads/Agatized-Coral.jpg 1200w"
                                                                                                sizes="(max-width: 500px) 100vw, 500px" /></a>
                                                                                    </span>

                                                                                    <div class="product-info">
                                                                                        <a class="product-title"
                                                                                            href="https://moonrisecrystals.com/product/agatized-coral/?attribute_pa_select-size=small-1-25-in">Agatized
                                                                                            Coral - Small (1.25 in)</a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                            <td class="product-price"
                                                                                data-title="Price">
                                                                                <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>16.75</bdi></span>
                                                                            </td>

                                                                            <td class="product-quantity"
                                                                                data-title="Quantity">
                                                                                <div class="quantity">
                                                                                    <label class="screen-reader-text"
                                                                                        for="quantity_65536a9184659">Agatized
                                                                                        Coral - Small (1.25 in)
                                                                                        quantity</label>
                                                                                    <input type="number"
                                                                                        id="quantity_65536a9184659"
                                                                                        class="input-text qty text"
                                                                                        name="cart[c6c706e027879a1da9f10a70055ce411][qty]"
                                                                                        value="1"
                                                                                        aria-label="Product quantity"
                                                                                        size="4" min="0" max="6"
                                                                                        step="1" placeholder=""
                                                                                        inputmode="numeric"
                                                                                        autocomplete="off" />
                                                                                </div>
                                                                            </td>

                                                                            <td class="product-subtotal"
                                                                                data-title="Total">
                                                                                <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>16.75</bdi></span>
                                                                            </td>

                                                                            <td class="product-remove">
                                                                                <a data-gtm4wp_product_id="1675"
                                                                                    data-gtm4wp_product_name="Agatized Coral"
                                                                                    data-gtm4wp_product_price="16.75"
                                                                                    data-gtm4wp_product_cat="Agatized Coral"
                                                                                    data-gtm4wp_product_url="https://moonrisecrystals.com/cart/"
                                                                                    data-gtm4wp_product_variant="small-1-25-in"
                                                                                    data-gtm4wp_product_stocklevel="6"
                                                                                    data-gtm4wp_product_brand=""
                                                                                    href="https://moonrisecrystals.com/cart/?remove_item=c6c706e027879a1da9f10a70055ce411&#038;_wpnonce=2714e6f788"
                                                                                    class="remove"
                                                                                    aria-label="Remove Agatized Coral - Small (1.25 in) from cart"
                                                                                    data-product_id="879"
                                                                                    data-product_sku="MC_4A2628-01">&times;</a>
                                                                            </td>

                                                                        </tr>


                                                                        <tr class="avada-cart-actions">
                                                                            <td colspan="6" class="actions">

                                                                                <div class="coupon">
                                                                                    <label for="coupon_code"
                                                                                        class="screen-reader-text">Coupon:</label>
                                                                                    <input type="text"
                                                                                        name="coupon_code"
                                                                                        class="input-text"
                                                                                        id="coupon_code" value=""
                                                                                        placeholder="Gift Certificate Code" />
                                                                                    <button type="submit" class="button"
                                                                                        name="apply_coupon"
                                                                                        value="Apply">Apply</button>
                                                                                </div>

                                                                                <button type="submit" class="button"
                                                                                    name="update_cart"
                                                                                    value="Update cart">Update
                                                                                    cart</button>


                                                                                <input type="hidden"
                                                                                    id="woocommerce-cart-nonce"
                                                                                    name="woocommerce-cart-nonce"
                                                                                    value="2714e6f788" /><input
                                                                                    type="hidden"
                                                                                    name="_wp_http_referer"
                                                                                    value="/cart/" />
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </form>


                                                        <div class="cart-collaterals">

                                                            <div class="shipping-coupon">


                                                                <form class="woocommerce-shipping-calculator"
                                                                    action="https://moonrisecrystals.com/cart/"
                                                                    method="post">

                                                                    <h2><span href="#"
                                                                            class="shipping-calculator-button">Calculate
                                                                            shipping</span></h2>

                                                                    <div class="avada-shipping-calculator-form">

                                                                        <p class="form-row form-row-wide"
                                                                            id="calc_shipping_country_field">
                                                                            <select name="calc_shipping_country"
                                                                                id="calc_shipping_country"
                                                                                class="country_to_state"
                                                                                rel="calc_shipping_state">
                                                                                <option value="">Select a
                                                                                    country&hellip;</option>
                                                                                <option value="AF">Afghanistan</option>
                                                                                <option value="AX">Åland Islands
                                                                                </option>
                                                                                <option value="AL">Albania</option>
                                                                                <option value="DZ">Algeria</option>
                                                                                <option value="AS">American Samoa
                                                                                </option>
                                                                                <option value="AD">Andorra</option>
                                                                                <option value="AO">Angola</option>
                                                                                <option value="AI">Anguilla</option>
                                                                                <option value="AQ">Antarctica</option>
                                                                                <option value="AG">Antigua and Barbuda
                                                                                </option>
                                                                                <option value="AR">Argentina</option>
                                                                                <option value="AM">Armenia</option>
                                                                                <option value="AW">Aruba</option>
                                                                                <option value="AU">Australia</option>
                                                                                <option value="AT">Austria</option>
                                                                                <option value="AZ">Azerbaijan</option>
                                                                                <option value="BS">Bahamas</option>
                                                                                <option value="BH">Bahrain</option>
                                                                                <option value="BD">Bangladesh</option>
                                                                                <option value="BB">Barbados</option>
                                                                                <option value="BY">Belarus</option>
                                                                                <option value="PW">Belau</option>
                                                                                <option value="BE">Belgium</option>
                                                                                <option value="BZ">Belize</option>
                                                                                <option value="BJ">Benin</option>
                                                                                <option value="BM">Bermuda</option>
                                                                                <option value="BT">Bhutan</option>
                                                                                <option value="BO">Bolivia</option>
                                                                                <option value="BQ">Bonaire, Saint
                                                                                    Eustatius and Saba</option>
                                                                                <option value="BA">Bosnia and
                                                                                    Herzegovina</option>
                                                                                <option value="BW">Botswana</option>
                                                                                <option value="BV">Bouvet Island
                                                                                </option>
                                                                                <option value="BR">Brazil</option>
                                                                                <option value="IO">British Indian Ocean
                                                                                    Territory</option>
                                                                                <option value="BN">Brunei</option>
                                                                                <option value="BG">Bulgaria</option>
                                                                                <option value="BF">Burkina Faso</option>
                                                                                <option value="BI">Burundi</option>
                                                                                <option value="KH">Cambodia</option>
                                                                                <option value="CM">Cameroon</option>
                                                                                <option value="CA">Canada</option>
                                                                                <option value="CV">Cape Verde</option>
                                                                                <option value="KY">Cayman Islands
                                                                                </option>
                                                                                <option value="CF">Central African
                                                                                    Republic</option>
                                                                                <option value="TD">Chad</option>
                                                                                <option value="CL">Chile</option>
                                                                                <option value="CN">China</option>
                                                                                <option value="CX">Christmas Island
                                                                                </option>
                                                                                <option value="CC">Cocos (Keeling)
                                                                                    Islands</option>
                                                                                <option value="CO">Colombia</option>
                                                                                <option value="KM">Comoros</option>
                                                                                <option value="CG">Congo (Brazzaville)
                                                                                </option>
                                                                                <option value="CD">Congo (Kinshasa)
                                                                                </option>
                                                                                <option value="CK">Cook Islands</option>
                                                                                <option value="CR">Costa Rica</option>
                                                                                <option value="HR">Croatia</option>
                                                                                <option value="CU">Cuba</option>
                                                                                <option value="CW">Cura&ccedil;ao
                                                                                </option>
                                                                                <option value="CY">Cyprus</option>
                                                                                <option value="CZ">Czech Republic
                                                                                </option>
                                                                                <option value="DK">Denmark</option>
                                                                                <option value="DJ">Djibouti</option>
                                                                                <option value="DM">Dominica</option>
                                                                                <option value="DO">Dominican Republic
                                                                                </option>
                                                                                <option value="EC">Ecuador</option>
                                                                                <option value="EG">Egypt</option>
                                                                                <option value="SV">El Salvador</option>
                                                                                <option value="GQ">Equatorial Guinea
                                                                                </option>
                                                                                <option value="ER">Eritrea</option>
                                                                                <option value="EE">Estonia</option>
                                                                                <option value="SZ">Eswatini</option>
                                                                                <option value="ET">Ethiopia</option>
                                                                                <option value="FK">Falkland Islands
                                                                                </option>
                                                                                <option value="FO">Faroe Islands
                                                                                </option>
                                                                                <option value="FJ">Fiji</option>
                                                                                <option value="FI">Finland</option>
                                                                                <option value="FR">France</option>
                                                                                <option value="GF">French Guiana
                                                                                </option>
                                                                                <option value="PF">French Polynesia
                                                                                </option>
                                                                                <option value="TF">French Southern
                                                                                    Territories</option>
                                                                                <option value="GA">Gabon</option>
                                                                                <option value="GM">Gambia</option>
                                                                                <option value="GE">Georgia</option>
                                                                                <option value="DE">Germany</option>
                                                                                <option value="GH">Ghana</option>
                                                                                <option value="GI">Gibraltar</option>
                                                                                <option value="GR">Greece</option>
                                                                                <option value="GL">Greenland</option>
                                                                                <option value="GD">Grenada</option>
                                                                                <option value="GP">Guadeloupe</option>
                                                                                <option value="GU">Guam</option>
                                                                                <option value="GT">Guatemala</option>
                                                                                <option value="GG">Guernsey</option>
                                                                                <option value="GN">Guinea</option>
                                                                                <option value="GW">Guinea-Bissau
                                                                                </option>
                                                                                <option value="GY">Guyana</option>
                                                                                <option value="HT">Haiti</option>
                                                                                <option value="HM">Heard Island and
                                                                                    McDonald Islands</option>
                                                                                <option value="HN">Honduras</option>
                                                                                <option value="HK">Hong Kong</option>
                                                                                <option value="HU">Hungary</option>
                                                                                <option value="IS">Iceland</option>
                                                                                <option value="IN">India</option>
                                                                                <option value="ID">Indonesia</option>
                                                                                <option value="IR">Iran</option>
                                                                                <option value="IQ">Iraq</option>
                                                                                <option value="IE">Ireland</option>
                                                                                <option value="IM">Isle of Man</option>
                                                                                <option value="IL">Israel</option>
                                                                                <option value="IT">Italy</option>
                                                                                <option value="CI">Ivory Coast</option>
                                                                                <option value="JM">Jamaica</option>
                                                                                <option value="JP">Japan</option>
                                                                                <option value="JE">Jersey</option>
                                                                                <option value="JO">Jordan</option>
                                                                                <option value="KZ">Kazakhstan</option>
                                                                                <option value="KE">Kenya</option>
                                                                                <option value="KI">Kiribati</option>
                                                                                <option value="KW">Kuwait</option>
                                                                                <option value="KG">Kyrgyzstan</option>
                                                                                <option value="LA">Laos</option>
                                                                                <option value="LV">Latvia</option>
                                                                                <option value="LB">Lebanon</option>
                                                                                <option value="LS">Lesotho</option>
                                                                                <option value="LR">Liberia</option>
                                                                                <option value="LY">Libya</option>
                                                                                <option value="LI">Liechtenstein
                                                                                </option>
                                                                                <option value="LT">Lithuania</option>
                                                                                <option value="LU">Luxembourg</option>
                                                                                <option value="MO">Macao</option>
                                                                                <option value="MG">Madagascar</option>
                                                                                <option value="MW">Malawi</option>
                                                                                <option value="MY">Malaysia</option>
                                                                                <option value="MV">Maldives</option>
                                                                                <option value="ML">Mali</option>
                                                                                <option value="MT">Malta</option>
                                                                                <option value="MH">Marshall Islands
                                                                                </option>
                                                                                <option value="MQ">Martinique</option>
                                                                                <option value="MR">Mauritania</option>
                                                                                <option value="MU">Mauritius</option>
                                                                                <option value="YT">Mayotte</option>
                                                                                <option value="MX">Mexico</option>
                                                                                <option value="FM">Micronesia</option>
                                                                                <option value="MD">Moldova</option>
                                                                                <option value="MC">Monaco</option>
                                                                                <option value="MN">Mongolia</option>
                                                                                <option value="ME">Montenegro</option>
                                                                                <option value="MS">Montserrat</option>
                                                                                <option value="MA">Morocco</option>
                                                                                <option value="MZ">Mozambique</option>
                                                                                <option value="MM">Myanmar</option>
                                                                                <option value="NA">Namibia</option>
                                                                                <option value="NR">Nauru</option>
                                                                                <option value="NP">Nepal</option>
                                                                                <option value="NL">Netherlands</option>
                                                                                <option value="NC">New Caledonia
                                                                                </option>
                                                                                <option value="NZ">New Zealand</option>
                                                                                <option value="NI">Nicaragua</option>
                                                                                <option value="NE">Niger</option>
                                                                                <option value="NG">Nigeria</option>
                                                                                <option value="NU">Niue</option>
                                                                                <option value="NF">Norfolk Island
                                                                                </option>
                                                                                <option value="KP">North Korea</option>
                                                                                <option value="MK">North Macedonia
                                                                                </option>
                                                                                <option value="MP">Northern Mariana
                                                                                    Islands</option>
                                                                                <option value="NO">Norway</option>
                                                                                <option value="OM">Oman</option>
                                                                                <option value="PK">Pakistan</option>
                                                                                <option value="PS">Palestinian Territory
                                                                                </option>
                                                                                <option value="PA">Panama</option>
                                                                                <option value="PG">Papua New Guinea
                                                                                </option>
                                                                                <option value="PY">Paraguay</option>
                                                                                <option value="PE">Peru</option>
                                                                                <option value="PH">Philippines</option>
                                                                                <option value="PN">Pitcairn</option>
                                                                                <option value="PL">Poland</option>
                                                                                <option value="PT">Portugal</option>
                                                                                <option value="PR">Puerto Rico</option>
                                                                                <option value="QA">Qatar</option>
                                                                                <option value="RE">Reunion</option>
                                                                                <option value="RO">Romania</option>
                                                                                <option value="RU">Russia</option>
                                                                                <option value="RW">Rwanda</option>
                                                                                <option value="ST">S&atilde;o
                                                                                    Tom&eacute; and Pr&iacute;ncipe
                                                                                </option>
                                                                                <option value="BL">Saint
                                                                                    Barth&eacute;lemy</option>
                                                                                <option value="SH">Saint Helena</option>
                                                                                <option value="KN">Saint Kitts and Nevis
                                                                                </option>
                                                                                <option value="LC">Saint Lucia</option>
                                                                                <option value="SX">Saint Martin (Dutch
                                                                                    part)</option>
                                                                                <option value="MF">Saint Martin (French
                                                                                    part)</option>
                                                                                <option value="PM">Saint Pierre and
                                                                                    Miquelon</option>
                                                                                <option value="VC">Saint Vincent and the
                                                                                    Grenadines</option>
                                                                                <option value="WS">Samoa</option>
                                                                                <option value="SM">San Marino</option>
                                                                                <option value="SA">Saudi Arabia</option>
                                                                                <option value="SN">Senegal</option>
                                                                                <option value="RS">Serbia</option>
                                                                                <option value="SC">Seychelles</option>
                                                                                <option value="SL">Sierra Leone</option>
                                                                                <option value="SG">Singapore</option>
                                                                                <option value="SK">Slovakia</option>
                                                                                <option value="SI">Slovenia</option>
                                                                                <option value="SB">Solomon Islands
                                                                                </option>
                                                                                <option value="SO">Somalia</option>
                                                                                <option value="ZA">South Africa</option>
                                                                                <option value="GS">South
                                                                                    Georgia/Sandwich Islands</option>
                                                                                <option value="KR">South Korea</option>
                                                                                <option value="SS">South Sudan</option>
                                                                                <option value="ES">Spain</option>
                                                                                <option value="LK">Sri Lanka</option>
                                                                                <option value="SD">Sudan</option>
                                                                                <option value="SR">Suriname</option>
                                                                                <option value="SJ">Svalbard and Jan
                                                                                    Mayen</option>
                                                                                <option value="SE">Sweden</option>
                                                                                <option value="CH">Switzerland</option>
                                                                                <option value="SY">Syria</option>
                                                                                <option value="TW">Taiwan</option>
                                                                                <option value="TJ">Tajikistan</option>
                                                                                <option value="TZ">Tanzania</option>
                                                                                <option value="TH">Thailand</option>
                                                                                <option value="TL">Timor-Leste</option>
                                                                                <option value="TG">Togo</option>
                                                                                <option value="TK">Tokelau</option>
                                                                                <option value="TO">Tonga</option>
                                                                                <option value="TT">Trinidad and Tobago
                                                                                </option>
                                                                                <option value="TN">Tunisia</option>
                                                                                <option value="TR">Turkey</option>
                                                                                <option value="TM">Turkmenistan</option>
                                                                                <option value="TC">Turks and Caicos
                                                                                    Islands</option>
                                                                                <option value="TV">Tuvalu</option>
                                                                                <option value="UG">Uganda</option>
                                                                                <option value="UA">Ukraine</option>
                                                                                <option value="AE">United Arab Emirates
                                                                                </option>
                                                                                <option value="GB">United Kingdom (UK)
                                                                                </option>
                                                                                <option value="US" selected='selected'>
                                                                                    United States (US)</option>
                                                                                <option value="UM">United States (US)
                                                                                    Minor Outlying Islands</option>
                                                                                <option value="UY">Uruguay</option>
                                                                                <option value="UZ">Uzbekistan</option>
                                                                                <option value="VU">Vanuatu</option>
                                                                                <option value="VA">Vatican</option>
                                                                                <option value="VE">Venezuela</option>
                                                                                <option value="VN">Vietnam</option>
                                                                                <option value="VG">Virgin Islands
                                                                                    (British)</option>
                                                                                <option value="VI">Virgin Islands (US)
                                                                                </option>
                                                                                <option value="WF">Wallis and Futuna
                                                                                </option>
                                                                                <option value="EH">Western Sahara
                                                                                </option>
                                                                                <option value="YE">Yemen</option>
                                                                                <option value="ZM">Zambia</option>
                                                                                <option value="ZW">Zimbabwe</option>
                                                                            </select>
                                                                        </p>

                                                                        <p id="calc_shipping_state_field"
                                                                            class="form-row form-row-wide avada-select-parent fusion-layout-column fusion-one-half fusion-spacing-yes">


                                                                            <span>
                                                                                <select name="calc_shipping_state"
                                                                                    id="calc_shipping_state"
                                                                                    placeholder="State / County">
                                                                                    <option value="">Select a
                                                                                        state&hellip;</option>
                                                                                    <option value="AL">Alabama</option>
                                                                                    <option value="AK">Alaska</option>
                                                                                    <option value="AZ">Arizona</option>
                                                                                    <option value="AR">Arkansas</option>
                                                                                    <option value="CA">California
                                                                                    </option>
                                                                                    <option value="CO">Colorado</option>
                                                                                    <option value="CT">Connecticut
                                                                                    </option>
                                                                                    <option value="DE">Delaware</option>
                                                                                    <option value="DC">District Of
                                                                                        Columbia</option>
                                                                                    <option value="FL">Florida</option>
                                                                                    <option value="GA">Georgia</option>
                                                                                    <option value="HI"
                                                                                        selected='selected'>Hawaii
                                                                                    </option>
                                                                                    <option value="ID">Idaho</option>
                                                                                    <option value="IL">Illinois</option>
                                                                                    <option value="IN">Indiana</option>
                                                                                    <option value="IA">Iowa</option>
                                                                                    <option value="KS">Kansas</option>
                                                                                    <option value="KY">Kentucky</option>
                                                                                    <option value="LA">Louisiana
                                                                                    </option>
                                                                                    <option value="ME">Maine</option>
                                                                                    <option value="MD">Maryland</option>
                                                                                    <option value="MA">Massachusetts
                                                                                    </option>
                                                                                    <option value="MI">Michigan</option>
                                                                                    <option value="MN">Minnesota
                                                                                    </option>
                                                                                    <option value="MS">Mississippi
                                                                                    </option>
                                                                                    <option value="MO">Missouri</option>
                                                                                    <option value="MT">Montana</option>
                                                                                    <option value="NE">Nebraska</option>
                                                                                    <option value="NV">Nevada</option>
                                                                                    <option value="NH">New Hampshire
                                                                                    </option>
                                                                                    <option value="NJ">New Jersey
                                                                                    </option>
                                                                                    <option value="NM">New Mexico
                                                                                    </option>
                                                                                    <option value="NY">New York</option>
                                                                                    <option value="NC">North Carolina
                                                                                    </option>
                                                                                    <option value="ND">North Dakota
                                                                                    </option>
                                                                                    <option value="OH">Ohio</option>
                                                                                    <option value="OK">Oklahoma</option>
                                                                                    <option value="OR">Oregon</option>
                                                                                    <option value="PA">Pennsylvania
                                                                                    </option>
                                                                                    <option value="RI">Rhode Island
                                                                                    </option>
                                                                                    <option value="SC">South Carolina
                                                                                    </option>
                                                                                    <option value="SD">South Dakota
                                                                                    </option>
                                                                                    <option value="TN">Tennessee
                                                                                    </option>
                                                                                    <option value="TX">Texas</option>
                                                                                    <option value="UT">Utah</option>
                                                                                    <option value="VT">Vermont</option>
                                                                                    <option value="VA">Virginia</option>
                                                                                    <option value="WA">Washington
                                                                                    </option>
                                                                                    <option value="WV">West Virginia
                                                                                    </option>
                                                                                    <option value="WI">Wisconsin
                                                                                    </option>
                                                                                    <option value="WY">Wyoming</option>
                                                                                    <option value="AA">Armed Forces (AA)
                                                                                    </option>
                                                                                    <option value="AE">Armed Forces (AE)
                                                                                    </option>
                                                                                    <option value="AP">Armed Forces (AP)
                                                                                    </option>
                                                                                </select>
                                                                            </span>

                                                                        </p>


                                                                        <p id="calc_shipping_city_field"
                                                                            class="form-row form-row-wide fusion-layout-column fusion-one-half fusion-spacing-yes fusion-column-last">
                                                                            <input type="text" class="input-text"
                                                                                value="" placeholder="City"
                                                                                name="calc_shipping_city"
                                                                                id="calc_shipping_city" />
                                                                        </p>



                                                                        <div id="calc_shipping_postcode_field"
                                                                            class="form-row form-row-wide fusion-layout-column fusion-one-half fusion-spacing-yes fusion-column-last">
                                                                            <input type="text" class="input-text"
                                                                                value="" placeholder="Postcode / ZIP"
                                                                                name="calc_shipping_postcode"
                                                                                id="calc_shipping_postcode" />
                                                                        </div>


                                                                        <p>
                                                                            <button type="submit" name="calc_shipping"
                                                                                value="1"
                                                                                class="fusion-button button-default fusion-button-default-size button">Update
                                                                                totals</button>
                                                                        </p>

                                                                        <input type="hidden"
                                                                            id="woocommerce-shipping-calculator-nonce"
                                                                            name="woocommerce-shipping-calculator-nonce"
                                                                            value="0b23c4c812" /><input type="hidden"
                                                                            name="_wp_http_referer" value="/cart/" />
                                                                    </div>
                                                                </form>

                                                                <div class="coupon">
                                                                    <h2>Have A Gift Certificate?</h2>

                                                                    <div class="avada-coupon-fields">
                                                                        <label for="avada_coupon_code">Gift Certificate
                                                                            Code</label>
                                                                        <input type="text" name="coupon_code"
                                                                            class="input-text" id="avada_coupon_code"
                                                                            value=""
                                                                            placeholder="Gift Certificate Code" />
                                                                        <button type="submit"
                                                                            class="fusion-apply-coupon fusion-button button-default fusion-button-default-size button"
                                                                            name="apply_coupon"
                                                                            value="Apply">Apply</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cart_totals ">


                                                                <h2>Cart totals</h2>

                                                                <table cellspacing="0"
                                                                    class="shop_table shop_table_responsive">

                                                                    <tr class="cart-subtotal">
                                                                        <th>Subtotal</th>
                                                                        <td data-title="Subtotal"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>16.75</bdi></span>
                                                                        </td>
                                                                    </tr>




                                                                    <tr class="woocommerce-shipping-totals shipping">
                                                                        <th>Shipping</th>
                                                                        <td data-title="Shipping">
                                                                            <ul id="shipping_method"
                                                                                class="woocommerce-shipping-methods">
                                                                                <li>
                                                                                    <input type="radio"
                                                                                        name="shipping_method[0]"
                                                                                        data-index="0"
                                                                                        id="shipping_method_0_free_shipping1"
                                                                                        value="free_shipping:1"
                                                                                        class="shipping_method"
                                                                                        checked='checked' /><label
                                                                                        for="shipping_method_0_free_shipping1">Free
                                                                                        shipping (Averages 3 -7 business
                                                                                        days)</label>
                                                                                </li>
                                                                                <li>
                                                                                    <input type="radio"
                                                                                        name="shipping_method[0]"
                                                                                        data-index="0"
                                                                                        id="shipping_method_0_flat_rate2"
                                                                                        value="flat_rate:2"
                                                                                        class="shipping_method" /><label
                                                                                        for="shipping_method_0_flat_rate2">Priority
                                                                                        Mail® (Averages 1 - 4 business
                                                                                        days): <span
                                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>10.20</bdi></span></label>
                                                                                </li>
                                                                            </ul>
                                                                            <p class="woocommerce-shipping-destination">
                                                                                Shipping to <strong>HI</strong>. </p>


                                                                        </td>
                                                                    </tr>




                                                                    <tr class="tax-total">
                                                                        <th>Tax</th>
                                                                        <td data-title="Tax"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi></span>
                                                                        </td>
                                                                    </tr>


                                                                    <tr class="order-total">
                                                                        <th>Total</th>
                                                                        <td data-title="Total"><strong><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>16.75</bdi></span></strong>
                                                                        </td>
                                                                    </tr>


                                                                </table>

                                                                <div class="wc-proceed-to-checkout">
                                                                    <a href=""
                                                                        class="fusion-button button-default fusion-button-default-size button fusion-update-cart">
                                                                        Update cart</a>
                                                                    <a href="{{route('p_checkout')}}"
                                                                        class="fusion-button button-default fusion-button-default-size button checkout-button button alt wc-forward">
                                                                        Proceed to checkout</a>
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
                    </section>

                    <script nitro-exclude>
                        document.cookie = 'nitroCachedPage=' + (!window.NITROPACK_STATE ? '0' : '1') + '; path=/; SameSite=Lax';
                    </script>
                </div> <!-- fusion-row -->
            </main> <!-- #main -->




           <!-- fusion-footer -->



        </div> <!-- wrapper -->
    </div> <!-- #boxed-wrapper -->
    <a class="fusion-one-page-text-link fusion-page-load-link" tabindex="-1" href="#" aria-hidden="true">Page load
        link</a>

    <div class="avada-footer-scripts">

        <!-- GTM Container placement set to footer -->
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQKGX36" height="0" width="0"
                style="display:none;visibility:hidden" aria-hidden="true"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) --><input id='ws_ma_event_type' type='hidden'
            style='display: none' /><input id='ws_ma_event_data' type='hidden' style='display: none' />
        <script type="text/javascript">
            var fusionNavIsCollapsed=function(e){var t,n;window.innerWidth<=e.getAttribute("data-breakpoint")?(e.classList.add("collapse-enabled"),e.classList.remove("awb-menu_desktop"),e.classList.contains("expanded")||(e.setAttribute("aria-expanded","false"),window.dispatchEvent(new Event("fusion-mobile-menu-collapsed",{bubbles:!0,cancelable:!0}))),(n=e.querySelectorAll(".menu-item-has-children.expanded")).length&&n.forEach(function(e){e.querySelector(".awb-menu__open-nav-submenu_mobile").setAttribute("aria-expanded","false")})):(null!==e.querySelector(".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click")&&e.querySelector(".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click").click(),e.classList.remove("collapse-enabled"),e.classList.add("awb-menu_desktop"),e.setAttribute("aria-expanded","true"),null!==e.querySelector(".awb-menu__main-ul")&&e.querySelector(".awb-menu__main-ul").removeAttribute("style")),e.classList.add("no-wrapper-transition"),clearTimeout(t),t=setTimeout(()=>{e.classList.remove("no-wrapper-transition")},400),e.classList.remove("loading")},fusionRunNavIsCollapsed=function(){var e,t=document.querySelectorAll(".awb-menu");for(e=0;e<t.length;e++)fusionNavIsCollapsed(t[e])};function avadaGetScrollBarWidth(){var e,t,n,l=document.createElement("p");return l.style.width="100%",l.style.height="200px",(e=document.createElement("div")).style.position="absolute",e.style.top="0px",e.style.left="0px",e.style.visibility="hidden",e.style.width="200px",e.style.height="150px",e.style.overflow="hidden",e.appendChild(l),document.body.appendChild(e),t=l.offsetWidth,e.style.overflow="scroll",t==(n=l.offsetWidth)&&(n=e.clientWidth),document.body.removeChild(e),jQuery("html").hasClass("awb-scroll")&&10<t-n?10:t-n}fusionRunNavIsCollapsed(),window.addEventListener("fusion-resize-horizontal",fusionRunNavIsCollapsed);
        </script>
        <script type="text/javascript">
            (function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.2.1"
            id="jquery-blockui-js"></script>
        <script type="text/javascript" id="wc-add-to-cart-js-extra">
            /* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/moonrisecrystals.com\/cart\/","is_cart":"1","cart_redirect_after_add":"no"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.2.1"
            id="wc-add-to-cart-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.2.1"
            id="js-cookie-js"></script>
        <script type="text/javascript" id="woocommerce-js-extra">
            /* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.2.1"
            id="woocommerce-js"></script>
        <script type="text/javascript" id="wc-country-select-js-extra">
            /* <![CDATA[ */
var wc_country_select_params = {"countries":"{\"AF\":[],\"AL\":{\"AL-01\":\"Berat\",\"AL-09\":\"Dib\\u00ebr\",\"AL-02\":\"Durr\\u00ebs\",\"AL-03\":\"Elbasan\",\"AL-04\":\"Fier\",\"AL-05\":\"Gjirokast\\u00ebr\",\"AL-06\":\"Kor\\u00e7\\u00eb\",\"AL-07\":\"Kuk\\u00ebs\",\"AL-08\":\"Lezh\\u00eb\",\"AL-10\":\"Shkod\\u00ebr\",\"AL-11\":\"Tirana\",\"AL-12\":\"Vlor\\u00eb\"},\"AO\":{\"BGO\":\"Bengo\",\"BLU\":\"Benguela\",\"BIE\":\"Bi\\u00e9\",\"CAB\":\"Cabinda\",\"CNN\":\"Cunene\",\"HUA\":\"Huambo\",\"HUI\":\"Hu\\u00edla\",\"CCU\":\"Kuando Kubango\",\"CNO\":\"Kwanza-Norte\",\"CUS\":\"Kwanza-Sul\",\"LUA\":\"Luanda\",\"LNO\":\"Lunda-Norte\",\"LSU\":\"Lunda-Sul\",\"MAL\":\"Malanje\",\"MOX\":\"Moxico\",\"NAM\":\"Namibe\",\"UIG\":\"U\\u00edge\",\"ZAI\":\"Zaire\"},\"AR\":{\"C\":\"Ciudad Aut\\u00f3noma de Buenos Aires\",\"B\":\"Buenos Aires\",\"K\":\"Catamarca\",\"H\":\"Chaco\",\"U\":\"Chubut\",\"X\":\"C\\u00f3rdoba\",\"W\":\"Corrientes\",\"E\":\"Entre R\\u00edos\",\"P\":\"Formosa\",\"Y\":\"Jujuy\",\"L\":\"La Pampa\",\"F\":\"La Rioja\",\"M\":\"Mendoza\",\"N\":\"Misiones\",\"Q\":\"Neuqu\\u00e9n\",\"R\":\"R\\u00edo Negro\",\"A\":\"Salta\",\"J\":\"San Juan\",\"D\":\"San Luis\",\"Z\":\"Santa Cruz\",\"S\":\"Santa Fe\",\"G\":\"Santiago del Estero\",\"V\":\"Tierra del Fuego\",\"T\":\"Tucum\\u00e1n\"},\"AT\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"AX\":[],\"BD\":{\"BD-05\":\"Bagerhat\",\"BD-01\":\"Bandarban\",\"BD-02\":\"Barguna\",\"BD-06\":\"Barishal\",\"BD-07\":\"Bhola\",\"BD-03\":\"Bogura\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"Chattogram\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"Cumilla\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"Jashore\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"Thakurgaon\"},\"BE\":[],\"BG\":{\"BG-01\":\"Blagoevgrad\",\"BG-02\":\"Burgas\",\"BG-08\":\"Dobrich\",\"BG-07\":\"Gabrovo\",\"BG-26\":\"Haskovo\",\"BG-09\":\"Kardzhali\",\"BG-10\":\"Kyustendil\",\"BG-11\":\"Lovech\",\"BG-12\":\"Montana\",\"BG-13\":\"Pazardzhik\",\"BG-14\":\"Pernik\",\"BG-15\":\"Pleven\",\"BG-16\":\"Plovdiv\",\"BG-17\":\"Razgrad\",\"BG-18\":\"Ruse\",\"BG-27\":\"Shumen\",\"BG-19\":\"Silistra\",\"BG-20\":\"Sliven\",\"BG-21\":\"Smolyan\",\"BG-23\":\"Sofia District\",\"BG-22\":\"Sofia\",\"BG-24\":\"Stara Zagora\",\"BG-25\":\"Targovishte\",\"BG-03\":\"Varna\",\"BG-04\":\"Veliko Tarnovo\",\"BG-05\":\"Vidin\",\"BG-06\":\"Vratsa\",\"BG-28\":\"Yambol\"},\"BH\":[],\"BI\":[],\"BJ\":{\"AL\":\"Alibori\",\"AK\":\"Atakora\",\"AQ\":\"Atlantique\",\"BO\":\"Borgou\",\"CO\":\"Collines\",\"KO\":\"Kouffo\",\"DO\":\"Donga\",\"LI\":\"Littoral\",\"MO\":\"Mono\",\"OU\":\"Ou\\u00e9m\\u00e9\",\"PL\":\"Plateau\",\"ZO\":\"Zou\"},\"BO\":{\"BO-B\":\"Beni\",\"BO-H\":\"Chuquisaca\",\"BO-C\":\"Cochabamba\",\"BO-L\":\"La Paz\",\"BO-O\":\"Oruro\",\"BO-N\":\"Pando\",\"BO-P\":\"Potos\\u00ed\",\"BO-S\":\"Santa Cruz\",\"BO-T\":\"Tarija\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\\u00e1\",\"AM\":\"Amazonas\",\"BA\":\"Bahia\",\"CE\":\"Cear\\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\\u00edrito Santo\",\"GO\":\"Goi\\u00e1s\",\"MA\":\"Maranh\\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\\u00e1\",\"PB\":\"Para\\u00edba\",\"PR\":\"Paran\\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NL\":\"Newfoundland and Labrador\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CH\":{\"AG\":\"Aargau\",\"AR\":\"Appenzell Ausserrhoden\",\"AI\":\"Appenzell Innerrhoden\",\"BL\":\"Basel-Landschaft\",\"BS\":\"Basel-Stadt\",\"BE\":\"Bern\",\"FR\":\"Fribourg\",\"GE\":\"Geneva\",\"GL\":\"Glarus\",\"GR\":\"Graub\\u00fcnden\",\"JU\":\"Jura\",\"LU\":\"Luzern\",\"NE\":\"Neuch\\u00e2tel\",\"NW\":\"Nidwalden\",\"OW\":\"Obwalden\",\"SH\":\"Schaffhausen\",\"SZ\":\"Schwyz\",\"SO\":\"Solothurn\",\"SG\":\"St. Gallen\",\"TG\":\"Thurgau\",\"TI\":\"Ticino\",\"UR\":\"Uri\",\"VS\":\"Valais\",\"VD\":\"Vaud\",\"ZG\":\"Zug\",\"ZH\":\"Z\\u00fcrich\"},\"CL\":{\"CL-AI\":\"Ais\\u00e9n del General Carlos Iba\\u00f1ez del Campo\",\"CL-AN\":\"Antofagasta\",\"CL-AP\":\"Arica y Parinacota\",\"CL-AR\":\"La Araucan\\u00eda\",\"CL-AT\":\"Atacama\",\"CL-BI\":\"Biob\\u00edo\",\"CL-CO\":\"Coquimbo\",\"CL-LI\":\"Libertador General Bernardo O'Higgins\",\"CL-LL\":\"Los Lagos\",\"CL-LR\":\"Los R\\u00edos\",\"CL-MA\":\"Magallanes\",\"CL-ML\":\"Maule\",\"CL-NB\":\"\\u00d1uble\",\"CL-RM\":\"Regi\\u00f3n Metropolitana de Santiago\",\"CL-TA\":\"Tarapac\\u00e1\",\"CL-VS\":\"Valpara\\u00edso\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \\u4e91\\u5357\",\"CN2\":\"Beijing \\\/ \\u5317\\u4eac\",\"CN3\":\"Tianjin \\\/ \\u5929\\u6d25\",\"CN4\":\"Hebei \\\/ \\u6cb3\\u5317\",\"CN5\":\"Shanxi \\\/ \\u5c71\\u897f\",\"CN6\":\"Inner Mongolia \\\/ \\u5167\\u8499\\u53e4\",\"CN7\":\"Liaoning \\\/ \\u8fbd\\u5b81\",\"CN8\":\"Jilin \\\/ \\u5409\\u6797\",\"CN9\":\"Heilongjiang \\\/ \\u9ed1\\u9f99\\u6c5f\",\"CN10\":\"Shanghai \\\/ \\u4e0a\\u6d77\",\"CN11\":\"Jiangsu \\\/ \\u6c5f\\u82cf\",\"CN12\":\"Zhejiang \\\/ \\u6d59\\u6c5f\",\"CN13\":\"Anhui \\\/ \\u5b89\\u5fbd\",\"CN14\":\"Fujian \\\/ \\u798f\\u5efa\",\"CN15\":\"Jiangxi \\\/ \\u6c5f\\u897f\",\"CN16\":\"Shandong \\\/ \\u5c71\\u4e1c\",\"CN17\":\"Henan \\\/ \\u6cb3\\u5357\",\"CN18\":\"Hubei \\\/ \\u6e56\\u5317\",\"CN19\":\"Hunan \\\/ \\u6e56\\u5357\",\"CN20\":\"Guangdong \\\/ \\u5e7f\\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \\u5e7f\\u897f\\u58ee\\u65cf\",\"CN22\":\"Hainan \\\/ \\u6d77\\u5357\",\"CN23\":\"Chongqing \\\/ \\u91cd\\u5e86\",\"CN24\":\"Sichuan \\\/ \\u56db\\u5ddd\",\"CN25\":\"Guizhou \\\/ \\u8d35\\u5dde\",\"CN26\":\"Shaanxi \\\/ \\u9655\\u897f\",\"CN27\":\"Gansu \\\/ \\u7518\\u8083\",\"CN28\":\"Qinghai \\\/ \\u9752\\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \\u5b81\\u590f\",\"CN30\":\"Macao \\\/ \\u6fb3\\u95e8\",\"CN31\":\"Tibet \\\/ \\u897f\\u85cf\",\"CN32\":\"Xinjiang \\\/ \\u65b0\\u7586\"},\"CO\":{\"CO-AMA\":\"Amazonas\",\"CO-ANT\":\"Antioquia\",\"CO-ARA\":\"Arauca\",\"CO-ATL\":\"Atl\\u00e1ntico\",\"CO-BOL\":\"Bol\\u00edvar\",\"CO-BOY\":\"Boyac\\u00e1\",\"CO-CAL\":\"Caldas\",\"CO-CAQ\":\"Caquet\\u00e1\",\"CO-CAS\":\"Casanare\",\"CO-CAU\":\"Cauca\",\"CO-CES\":\"Cesar\",\"CO-CHO\":\"Choc\\u00f3\",\"CO-COR\":\"C\\u00f3rdoba\",\"CO-CUN\":\"Cundinamarca\",\"CO-DC\":\"Capital District\",\"CO-GUA\":\"Guain\\u00eda\",\"CO-GUV\":\"Guaviare\",\"CO-HUI\":\"Huila\",\"CO-LAG\":\"La Guajira\",\"CO-MAG\":\"Magdalena\",\"CO-MET\":\"Meta\",\"CO-NAR\":\"Nari\\u00f1o\",\"CO-NSA\":\"Norte de Santander\",\"CO-PUT\":\"Putumayo\",\"CO-QUI\":\"Quind\\u00edo\",\"CO-RIS\":\"Risaralda\",\"CO-SAN\":\"Santander\",\"CO-SAP\":\"San Andr\\u00e9s & Providencia\",\"CO-SUC\":\"Sucre\",\"CO-TOL\":\"Tolima\",\"CO-VAC\":\"Valle del Cauca\",\"CO-VAU\":\"Vaup\\u00e9s\",\"CO-VID\":\"Vichada\"},\"CR\":{\"CR-A\":\"Alajuela\",\"CR-C\":\"Cartago\",\"CR-G\":\"Guanacaste\",\"CR-H\":\"Heredia\",\"CR-L\":\"Lim\\u00f3n\",\"CR-P\":\"Puntarenas\",\"CR-SJ\":\"San Jos\\u00e9\"},\"CZ\":[],\"DE\":{\"DE-BW\":\"Baden-W\\u00fcrttemberg\",\"DE-BY\":\"Bavaria\",\"DE-BE\":\"Berlin\",\"DE-BB\":\"Brandenburg\",\"DE-HB\":\"Bremen\",\"DE-HH\":\"Hamburg\",\"DE-HE\":\"Hesse\",\"DE-MV\":\"Mecklenburg-Vorpommern\",\"DE-NI\":\"Lower Saxony\",\"DE-NW\":\"North Rhine-Westphalia\",\"DE-RP\":\"Rhineland-Palatinate\",\"DE-SL\":\"Saarland\",\"DE-SN\":\"Saxony\",\"DE-ST\":\"Saxony-Anhalt\",\"DE-SH\":\"Schleswig-Holstein\",\"DE-TH\":\"Thuringia\"},\"DK\":[],\"DO\":{\"DO-01\":\"Distrito Nacional\",\"DO-02\":\"Azua\",\"DO-03\":\"Baoruco\",\"DO-04\":\"Barahona\",\"DO-33\":\"Cibao Nordeste\",\"DO-34\":\"Cibao Noroeste\",\"DO-35\":\"Cibao Norte\",\"DO-36\":\"Cibao Sur\",\"DO-05\":\"Dajab\\u00f3n\",\"DO-06\":\"Duarte\",\"DO-08\":\"El Seibo\",\"DO-37\":\"El Valle\",\"DO-07\":\"El\\u00edas Pi\\u00f1a\",\"DO-38\":\"Enriquillo\",\"DO-09\":\"Espaillat\",\"DO-30\":\"Hato Mayor\",\"DO-19\":\"Hermanas Mirabal\",\"DO-39\":\"Hig\\u00fcamo\",\"DO-10\":\"Independencia\",\"DO-11\":\"La Altagracia\",\"DO-12\":\"La Romana\",\"DO-13\":\"La Vega\",\"DO-14\":\"Mar\\u00eda Trinidad S\\u00e1nchez\",\"DO-28\":\"Monse\\u00f1or Nouel\",\"DO-15\":\"Monte Cristi\",\"DO-29\":\"Monte Plata\",\"DO-40\":\"Ozama\",\"DO-16\":\"Pedernales\",\"DO-17\":\"Peravia\",\"DO-18\":\"Puerto Plata\",\"DO-20\":\"Saman\\u00e1\",\"DO-21\":\"San Crist\\u00f3bal\",\"DO-31\":\"San Jos\\u00e9 de Ocoa\",\"DO-22\":\"San Juan\",\"DO-23\":\"San Pedro de Macor\\u00eds\",\"DO-24\":\"S\\u00e1nchez Ram\\u00edrez\",\"DO-25\":\"Santiago\",\"DO-26\":\"Santiago Rodr\\u00edguez\",\"DO-32\":\"Santo Domingo\",\"DO-41\":\"Valdesia\",\"DO-27\":\"Valverde\",\"DO-42\":\"Yuma\"},\"DZ\":{\"DZ-01\":\"Adrar\",\"DZ-02\":\"Chlef\",\"DZ-03\":\"Laghouat\",\"DZ-04\":\"Oum El Bouaghi\",\"DZ-05\":\"Batna\",\"DZ-06\":\"B\\u00e9ja\\u00efa\",\"DZ-07\":\"Biskra\",\"DZ-08\":\"B\\u00e9char\",\"DZ-09\":\"Blida\",\"DZ-10\":\"Bouira\",\"DZ-11\":\"Tamanghasset\",\"DZ-12\":\"T\\u00e9bessa\",\"DZ-13\":\"Tlemcen\",\"DZ-14\":\"Tiaret\",\"DZ-15\":\"Tizi Ouzou\",\"DZ-16\":\"Algiers\",\"DZ-17\":\"Djelfa\",\"DZ-18\":\"Jijel\",\"DZ-19\":\"S\\u00e9tif\",\"DZ-20\":\"Sa\\u00efda\",\"DZ-21\":\"Skikda\",\"DZ-22\":\"Sidi Bel Abb\\u00e8s\",\"DZ-23\":\"Annaba\",\"DZ-24\":\"Guelma\",\"DZ-25\":\"Constantine\",\"DZ-26\":\"M\\u00e9d\\u00e9a\",\"DZ-27\":\"Mostaganem\",\"DZ-28\":\"M\\u2019Sila\",\"DZ-29\":\"Mascara\",\"DZ-30\":\"Ouargla\",\"DZ-31\":\"Oran\",\"DZ-32\":\"El Bayadh\",\"DZ-33\":\"Illizi\",\"DZ-34\":\"Bordj Bou Arr\\u00e9ridj\",\"DZ-35\":\"Boumerd\\u00e8s\",\"DZ-36\":\"El Tarf\",\"DZ-37\":\"Tindouf\",\"DZ-38\":\"Tissemsilt\",\"DZ-39\":\"El Oued\",\"DZ-40\":\"Khenchela\",\"DZ-41\":\"Souk Ahras\",\"DZ-42\":\"Tipasa\",\"DZ-43\":\"Mila\",\"DZ-44\":\"A\\u00efn Defla\",\"DZ-45\":\"Naama\",\"DZ-46\":\"A\\u00efn T\\u00e9mouchent\",\"DZ-47\":\"Gharda\\u00efa\",\"DZ-48\":\"Relizane\"},\"EE\":[],\"EC\":{\"EC-A\":\"Azuay\",\"EC-B\":\"Bol\\u00edvar\",\"EC-F\":\"Ca\\u00f1ar\",\"EC-C\":\"Carchi\",\"EC-H\":\"Chimborazo\",\"EC-X\":\"Cotopaxi\",\"EC-O\":\"El Oro\",\"EC-E\":\"Esmeraldas\",\"EC-W\":\"Gal\\u00e1pagos\",\"EC-G\":\"Guayas\",\"EC-I\":\"Imbabura\",\"EC-L\":\"Loja\",\"EC-R\":\"Los R\\u00edos\",\"EC-M\":\"Manab\\u00ed\",\"EC-S\":\"Morona-Santiago\",\"EC-N\":\"Napo\",\"EC-D\":\"Orellana\",\"EC-Y\":\"Pastaza\",\"EC-P\":\"Pichincha\",\"EC-SE\":\"Santa Elena\",\"EC-SD\":\"Santo Domingo de los Ts\\u00e1chilas\",\"EC-U\":\"Sucumb\\u00edos\",\"EC-T\":\"Tungurahua\",\"EC-Z\":\"Zamora-Chinchipe\"},\"EG\":{\"EGALX\":\"Alexandria\",\"EGASN\":\"Aswan\",\"EGAST\":\"Asyut\",\"EGBA\":\"Red Sea\",\"EGBH\":\"Beheira\",\"EGBNS\":\"Beni Suef\",\"EGC\":\"Cairo\",\"EGDK\":\"Dakahlia\",\"EGDT\":\"Damietta\",\"EGFYM\":\"Faiyum\",\"EGGH\":\"Gharbia\",\"EGGZ\":\"Giza\",\"EGIS\":\"Ismailia\",\"EGJS\":\"South Sinai\",\"EGKB\":\"Qalyubia\",\"EGKFS\":\"Kafr el-Sheikh\",\"EGKN\":\"Qena\",\"EGLX\":\"Luxor\",\"EGMN\":\"Minya\",\"EGMNF\":\"Monufia\",\"EGMT\":\"Matrouh\",\"EGPTS\":\"Port Said\",\"EGSHG\":\"Sohag\",\"EGSHR\":\"Al Sharqia\",\"EGSIN\":\"North Sinai\",\"EGSUZ\":\"Suez\",\"EGWAD\":\"New Valley\"},\"ES\":{\"C\":\"A Coru\\u00f1a\",\"VI\":\"Araba\\\/\\u00c1lava\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"Almer\\u00eda\",\"O\":\"Asturias\",\"AV\":\"\\u00c1vila\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\\u00e1ceres\",\"CA\":\"C\\u00e1diz\",\"S\":\"Cantabria\",\"CS\":\"Castell\\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\\u00f3rdoba\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"Granada\",\"GU\":\"Guadalajara\",\"SS\":\"Gipuzkoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"Ja\\u00e9n\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"Le\\u00f3n\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"M\\u00e1laga\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"Toledo\",\"V\":\"Valencia\",\"VA\":\"Valladolid\",\"BI\":\"Biscay\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"ET\":[],\"FI\":[],\"FR\":[],\"GF\":[],\"GH\":{\"AF\":\"Ahafo\",\"AH\":\"Ashanti\",\"BA\":\"Brong-Ahafo\",\"BO\":\"Bono\",\"BE\":\"Bono East\",\"CP\":\"Central\",\"EP\":\"Eastern\",\"AA\":\"Greater Accra\",\"NE\":\"North East\",\"NP\":\"Northern\",\"OT\":\"Oti\",\"SV\":\"Savannah\",\"UE\":\"Upper East\",\"UW\":\"Upper West\",\"TV\":\"Volta\",\"WP\":\"Western\",\"WN\":\"Western North\"},\"GP\":[],\"GR\":{\"I\":\"Attica\",\"A\":\"East Macedonia and Thrace\",\"B\":\"Central Macedonia\",\"C\":\"West Macedonia\",\"D\":\"Epirus\",\"E\":\"Thessaly\",\"F\":\"Ionian Islands\",\"G\":\"West Greece\",\"H\":\"Central Greece\",\"J\":\"Peloponnese\",\"K\":\"North Aegean\",\"L\":\"South Aegean\",\"M\":\"Crete\"},\"GT\":{\"GT-AV\":\"Alta Verapaz\",\"GT-BV\":\"Baja Verapaz\",\"GT-CM\":\"Chimaltenango\",\"GT-CQ\":\"Chiquimula\",\"GT-PR\":\"El Progreso\",\"GT-ES\":\"Escuintla\",\"GT-GU\":\"Guatemala\",\"GT-HU\":\"Huehuetenango\",\"GT-IZ\":\"Izabal\",\"GT-JA\":\"Jalapa\",\"GT-JU\":\"Jutiapa\",\"GT-PE\":\"Pet\\u00e9n\",\"GT-QZ\":\"Quetzaltenango\",\"GT-QC\":\"Quich\\u00e9\",\"GT-RE\":\"Retalhuleu\",\"GT-SA\":\"Sacatep\\u00e9quez\",\"GT-SM\":\"San Marcos\",\"GT-SR\":\"Santa Rosa\",\"GT-SO\":\"Solol\\u00e1\",\"GT-SU\":\"Suchitep\\u00e9quez\",\"GT-TO\":\"Totonicap\\u00e1n\",\"GT-ZA\":\"Zacapa\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HN\":{\"HN-AT\":\"Atl\\u00e1ntida\",\"HN-IB\":\"Bay Islands\",\"HN-CH\":\"Choluteca\",\"HN-CL\":\"Col\\u00f3n\",\"HN-CM\":\"Comayagua\",\"HN-CP\":\"Cop\\u00e1n\",\"HN-CR\":\"Cort\\u00e9s\",\"HN-EP\":\"El Para\\u00edso\",\"HN-FM\":\"Francisco Moraz\\u00e1n\",\"HN-GD\":\"Gracias a Dios\",\"HN-IN\":\"Intibuc\\u00e1\",\"HN-LE\":\"Lempira\",\"HN-LP\":\"La Paz\",\"HN-OC\":\"Ocotepeque\",\"HN-OL\":\"Olancho\",\"HN-SB\":\"Santa B\\u00e1rbara\",\"HN-VA\":\"Valle\",\"HN-YO\":\"Yoro\"},\"HU\":{\"BK\":\"B\\u00e1cs-Kiskun\",\"BE\":\"B\\u00e9k\\u00e9s\",\"BA\":\"Baranya\",\"BZ\":\"Borsod-Aba\\u00faj-Zempl\\u00e9n\",\"BU\":\"Budapest\",\"CS\":\"Csongr\\u00e1d-Csan\\u00e1d\",\"FE\":\"Fej\\u00e9r\",\"GS\":\"Gy\\u0151r-Moson-Sopron\",\"HB\":\"Hajd\\u00fa-Bihar\",\"HE\":\"Heves\",\"JN\":\"J\\u00e1sz-Nagykun-Szolnok\",\"KE\":\"Kom\\u00e1rom-Esztergom\",\"NO\":\"N\\u00f3gr\\u00e1d\",\"PE\":\"Pest\",\"SO\":\"Somogy\",\"SZ\":\"Szabolcs-Szatm\\u00e1r-Bereg\",\"TO\":\"Tolna\",\"VA\":\"Vas\",\"VE\":\"Veszpr\\u00e9m\",\"ZA\":\"Zala\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"IE\":{\"CW\":\"Carlow\",\"CN\":\"Cavan\",\"CE\":\"Clare\",\"CO\":\"Cork\",\"DL\":\"Donegal\",\"D\":\"Dublin\",\"G\":\"Galway\",\"KY\":\"Kerry\",\"KE\":\"Kildare\",\"KK\":\"Kilkenny\",\"LS\":\"Laois\",\"LM\":\"Leitrim\",\"LK\":\"Limerick\",\"LD\":\"Longford\",\"LH\":\"Louth\",\"MO\":\"Mayo\",\"MH\":\"Meath\",\"MN\":\"Monaghan\",\"OY\":\"Offaly\",\"RN\":\"Roscommon\",\"SO\":\"Sligo\",\"TA\":\"Tipperary\",\"WD\":\"Waterford\",\"WH\":\"Westmeath\",\"WX\":\"Wexford\",\"WW\":\"Wicklow\"},\"IN\":{\"AP\":\"Andhra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"LA\":\"Ladakh\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Odisha\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TS\":\"Telangana\",\"TR\":\"Tripura\",\"UK\":\"Uttarakhand\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadra and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"IR\":{\"KHZ\":\"Khuzestan (\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646)\",\"THR\":\"Tehran (\\u062a\\u0647\\u0631\\u0627\\u0646)\",\"ILM\":\"Ilaam (\\u0627\\u06cc\\u0644\\u0627\\u0645)\",\"BHR\":\"Bushehr (\\u0628\\u0648\\u0634\\u0647\\u0631)\",\"ADL\":\"Ardabil (\\u0627\\u0631\\u062f\\u0628\\u06cc\\u0644)\",\"ESF\":\"Isfahan (\\u0627\\u0635\\u0641\\u0647\\u0627\\u0646)\",\"YZD\":\"Yazd (\\u06cc\\u0632\\u062f)\",\"KRH\":\"Kermanshah (\\u06a9\\u0631\\u0645\\u0627\\u0646\\u0634\\u0627\\u0647)\",\"KRN\":\"Kerman (\\u06a9\\u0631\\u0645\\u0627\\u0646)\",\"HDN\":\"Hamadan (\\u0647\\u0645\\u062f\\u0627\\u0646)\",\"GZN\":\"Ghazvin (\\u0642\\u0632\\u0648\\u06cc\\u0646)\",\"ZJN\":\"Zanjan (\\u0632\\u0646\\u062c\\u0627\\u0646)\",\"LRS\":\"Luristan (\\u0644\\u0631\\u0633\\u062a\\u0627\\u0646)\",\"ABZ\":\"Alborz (\\u0627\\u0644\\u0628\\u0631\\u0632)\",\"EAZ\":\"East Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u0634\\u0631\\u0642\\u06cc)\",\"WAZ\":\"West Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u063a\\u0631\\u0628\\u06cc)\",\"CHB\":\"Chaharmahal and Bakhtiari (\\u0686\\u0647\\u0627\\u0631\\u0645\\u062d\\u0627\\u0644 \\u0648 \\u0628\\u062e\\u062a\\u06cc\\u0627\\u0631\\u06cc)\",\"SKH\":\"South Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u062c\\u0646\\u0648\\u0628\\u06cc)\",\"RKH\":\"Razavi Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0631\\u0636\\u0648\\u06cc)\",\"NKH\":\"North Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0634\\u0645\\u0627\\u0644\\u06cc)\",\"SMN\":\"Semnan (\\u0633\\u0645\\u0646\\u0627\\u0646)\",\"FRS\":\"Fars (\\u0641\\u0627\\u0631\\u0633)\",\"QHM\":\"Qom (\\u0642\\u0645)\",\"KRD\":\"Kurdistan \\\/ \\u06a9\\u0631\\u062f\\u0633\\u062a\\u0627\\u0646)\",\"KBD\":\"Kohgiluyeh and BoyerAhmad (\\u06a9\\u0647\\u06af\\u06cc\\u0644\\u0648\\u06cc\\u06cc\\u0647 \\u0648 \\u0628\\u0648\\u06cc\\u0631\\u0627\\u062d\\u0645\\u062f)\",\"GLS\":\"Golestan (\\u06af\\u0644\\u0633\\u062a\\u0627\\u0646)\",\"GIL\":\"Gilan (\\u06af\\u06cc\\u0644\\u0627\\u0646)\",\"MZN\":\"Mazandaran (\\u0645\\u0627\\u0632\\u0646\\u062f\\u0631\\u0627\\u0646)\",\"MKZ\":\"Markazi (\\u0645\\u0631\\u06a9\\u0632\\u06cc)\",\"HRZ\":\"Hormozgan (\\u0647\\u0631\\u0645\\u0632\\u06af\\u0627\\u0646)\",\"SBN\":\"Sistan and Baluchestan (\\u0633\\u06cc\\u0633\\u062a\\u0627\\u0646 \\u0648 \\u0628\\u0644\\u0648\\u0686\\u0633\\u062a\\u0627\\u0646)\"},\"IS\":[],\"IT\":{\"AG\":\"Agrigento\",\"AL\":\"Alessandria\",\"AN\":\"Ancona\",\"AO\":\"Aosta\",\"AR\":\"Arezzo\",\"AP\":\"Ascoli Piceno\",\"AT\":\"Asti\",\"AV\":\"Avellino\",\"BA\":\"Bari\",\"BT\":\"Barletta-Andria-Trani\",\"BL\":\"Belluno\",\"BN\":\"Benevento\",\"BG\":\"Bergamo\",\"BI\":\"Biella\",\"BO\":\"Bologna\",\"BZ\":\"Bolzano\",\"BS\":\"Brescia\",\"BR\":\"Brindisi\",\"CA\":\"Cagliari\",\"CL\":\"Caltanissetta\",\"CB\":\"Campobasso\",\"CE\":\"Caserta\",\"CT\":\"Catania\",\"CZ\":\"Catanzaro\",\"CH\":\"Chieti\",\"CO\":\"Como\",\"CS\":\"Cosenza\",\"CR\":\"Cremona\",\"KR\":\"Crotone\",\"CN\":\"Cuneo\",\"EN\":\"Enna\",\"FM\":\"Fermo\",\"FE\":\"Ferrara\",\"FI\":\"Firenze\",\"FG\":\"Foggia\",\"FC\":\"Forl\\u00ec-Cesena\",\"FR\":\"Frosinone\",\"GE\":\"Genova\",\"GO\":\"Gorizia\",\"GR\":\"Grosseto\",\"IM\":\"Imperia\",\"IS\":\"Isernia\",\"SP\":\"La Spezia\",\"AQ\":\"L'Aquila\",\"LT\":\"Latina\",\"LE\":\"Lecce\",\"LC\":\"Lecco\",\"LI\":\"Livorno\",\"LO\":\"Lodi\",\"LU\":\"Lucca\",\"MC\":\"Macerata\",\"MN\":\"Mantova\",\"MS\":\"Massa-Carrara\",\"MT\":\"Matera\",\"ME\":\"Messina\",\"MI\":\"Milano\",\"MO\":\"Modena\",\"MB\":\"Monza e della Brianza\",\"NA\":\"Napoli\",\"NO\":\"Novara\",\"NU\":\"Nuoro\",\"OR\":\"Oristano\",\"PD\":\"Padova\",\"PA\":\"Palermo\",\"PR\":\"Parma\",\"PV\":\"Pavia\",\"PG\":\"Perugia\",\"PU\":\"Pesaro e Urbino\",\"PE\":\"Pescara\",\"PC\":\"Piacenza\",\"PI\":\"Pisa\",\"PT\":\"Pistoia\",\"PN\":\"Pordenone\",\"PZ\":\"Potenza\",\"PO\":\"Prato\",\"RG\":\"Ragusa\",\"RA\":\"Ravenna\",\"RC\":\"Reggio Calabria\",\"RE\":\"Reggio Emilia\",\"RI\":\"Rieti\",\"RN\":\"Rimini\",\"RM\":\"Roma\",\"RO\":\"Rovigo\",\"SA\":\"Salerno\",\"SS\":\"Sassari\",\"SV\":\"Savona\",\"SI\":\"Siena\",\"SR\":\"Siracusa\",\"SO\":\"Sondrio\",\"SU\":\"Sud Sardegna\",\"TA\":\"Taranto\",\"TE\":\"Teramo\",\"TR\":\"Terni\",\"TO\":\"Torino\",\"TP\":\"Trapani\",\"TN\":\"Trento\",\"TV\":\"Treviso\",\"TS\":\"Trieste\",\"UD\":\"Udine\",\"VA\":\"Varese\",\"VE\":\"Venezia\",\"VB\":\"Verbano-Cusio-Ossola\",\"VC\":\"Vercelli\",\"VR\":\"Verona\",\"VV\":\"Vibo Valentia\",\"VI\":\"Vicenza\",\"VT\":\"Viterbo\"},\"IL\":[],\"IM\":[],\"JM\":{\"JM-01\":\"Kingston\",\"JM-02\":\"Saint Andrew\",\"JM-03\":\"Saint Thomas\",\"JM-04\":\"Portland\",\"JM-05\":\"Saint Mary\",\"JM-06\":\"Saint Ann\",\"JM-07\":\"Trelawny\",\"JM-08\":\"Saint James\",\"JM-09\":\"Hanover\",\"JM-10\":\"Westmoreland\",\"JM-11\":\"Saint Elizabeth\",\"JM-12\":\"Manchester\",\"JM-13\":\"Clarendon\",\"JM-14\":\"Saint Catherine\"},\"JP\":{\"JP01\":\"Hokkaido\",\"JP02\":\"Aomori\",\"JP03\":\"Iwate\",\"JP04\":\"Miyagi\",\"JP05\":\"Akita\",\"JP06\":\"Yamagata\",\"JP07\":\"Fukushima\",\"JP08\":\"Ibaraki\",\"JP09\":\"Tochigi\",\"JP10\":\"Gunma\",\"JP11\":\"Saitama\",\"JP12\":\"Chiba\",\"JP13\":\"Tokyo\",\"JP14\":\"Kanagawa\",\"JP15\":\"Niigata\",\"JP16\":\"Toyama\",\"JP17\":\"Ishikawa\",\"JP18\":\"Fukui\",\"JP19\":\"Yamanashi\",\"JP20\":\"Nagano\",\"JP21\":\"Gifu\",\"JP22\":\"Shizuoka\",\"JP23\":\"Aichi\",\"JP24\":\"Mie\",\"JP25\":\"Shiga\",\"JP26\":\"Kyoto\",\"JP27\":\"Osaka\",\"JP28\":\"Hyogo\",\"JP29\":\"Nara\",\"JP30\":\"Wakayama\",\"JP31\":\"Tottori\",\"JP32\":\"Shimane\",\"JP33\":\"Okayama\",\"JP34\":\"Hiroshima\",\"JP35\":\"Yamaguchi\",\"JP36\":\"Tokushima\",\"JP37\":\"Kagawa\",\"JP38\":\"Ehime\",\"JP39\":\"Kochi\",\"JP40\":\"Fukuoka\",\"JP41\":\"Saga\",\"JP42\":\"Nagasaki\",\"JP43\":\"Kumamoto\",\"JP44\":\"Oita\",\"JP45\":\"Miyazaki\",\"JP46\":\"Kagoshima\",\"JP47\":\"Okinawa\"},\"KE\":{\"KE01\":\"Baringo\",\"KE02\":\"Bomet\",\"KE03\":\"Bungoma\",\"KE04\":\"Busia\",\"KE05\":\"Elgeyo-Marakwet\",\"KE06\":\"Embu\",\"KE07\":\"Garissa\",\"KE08\":\"Homa Bay\",\"KE09\":\"Isiolo\",\"KE10\":\"Kajiado\",\"KE11\":\"Kakamega\",\"KE12\":\"Kericho\",\"KE13\":\"Kiambu\",\"KE14\":\"Kilifi\",\"KE15\":\"Kirinyaga\",\"KE16\":\"Kisii\",\"KE17\":\"Kisumu\",\"KE18\":\"Kitui\",\"KE19\":\"Kwale\",\"KE20\":\"Laikipia\",\"KE21\":\"Lamu\",\"KE22\":\"Machakos\",\"KE23\":\"Makueni\",\"KE24\":\"Mandera\",\"KE25\":\"Marsabit\",\"KE26\":\"Meru\",\"KE27\":\"Migori\",\"KE28\":\"Mombasa\",\"KE29\":\"Murang\\u2019a\",\"KE30\":\"Nairobi County\",\"KE31\":\"Nakuru\",\"KE32\":\"Nandi\",\"KE33\":\"Narok\",\"KE34\":\"Nyamira\",\"KE35\":\"Nyandarua\",\"KE36\":\"Nyeri\",\"KE37\":\"Samburu\",\"KE38\":\"Siaya\",\"KE39\":\"Taita-Taveta\",\"KE40\":\"Tana River\",\"KE41\":\"Tharaka-Nithi\",\"KE42\":\"Trans Nzoia\",\"KE43\":\"Turkana\",\"KE44\":\"Uasin Gishu\",\"KE45\":\"Vihiga\",\"KE46\":\"Wajir\",\"KE47\":\"West Pokot\"},\"KN\":{\"KNK\":\"Saint Kitts\",\"KNN\":\"Nevis\",\"KN01\":\"Christ Church Nichola Town\",\"KN02\":\"Saint Anne Sandy Point\",\"KN03\":\"Saint George Basseterre\",\"KN04\":\"Saint George Gingerland\",\"KN05\":\"Saint James Windward\",\"KN06\":\"Saint John Capisterre\",\"KN07\":\"Saint John Figtree\",\"KN08\":\"Saint Mary Cayon\",\"KN09\":\"Saint Paul Capisterre\",\"KN10\":\"Saint Paul Charlestown\",\"KN11\":\"Saint Peter Basseterre\",\"KN12\":\"Saint Thomas Lowland\",\"KN13\":\"Saint Thomas Middle Island\",\"KN15\":\"Trinity Palmetto Point\"},\"KR\":[],\"KW\":[],\"LA\":{\"AT\":\"Attapeu\",\"BK\":\"Bokeo\",\"BL\":\"Bolikhamsai\",\"CH\":\"Champasak\",\"HO\":\"Houaphanh\",\"KH\":\"Khammouane\",\"LM\":\"Luang Namtha\",\"LP\":\"Luang Prabang\",\"OU\":\"Oudomxay\",\"PH\":\"Phongsaly\",\"SL\":\"Salavan\",\"SV\":\"Savannakhet\",\"VI\":\"Vientiane Province\",\"VT\":\"Vientiane\",\"XA\":\"Sainyabuli\",\"XE\":\"Sekong\",\"XI\":\"Xiangkhouang\",\"XS\":\"Xaisomboun\"},\"LB\":[],\"LI\":[],\"LR\":{\"BM\":\"Bomi\",\"BN\":\"Bong\",\"GA\":\"Gbarpolu\",\"GB\":\"Grand Bassa\",\"GC\":\"Grand Cape Mount\",\"GG\":\"Grand Gedeh\",\"GK\":\"Grand Kru\",\"LO\":\"Lofa\",\"MA\":\"Margibi\",\"MY\":\"Maryland\",\"MO\":\"Montserrado\",\"NM\":\"Nimba\",\"RV\":\"Rivercess\",\"RG\":\"River Gee\",\"SN\":\"Sinoe\"},\"LU\":[],\"MD\":{\"C\":\"Chi\\u0219in\\u0103u\",\"BL\":\"B\\u0103l\\u021bi\",\"AN\":\"Anenii Noi\",\"BS\":\"Basarabeasca\",\"BR\":\"Briceni\",\"CH\":\"Cahul\",\"CT\":\"Cantemir\",\"CL\":\"C\\u0103l\\u0103ra\\u0219i\",\"CS\":\"C\\u0103u\\u0219eni\",\"CM\":\"Cimi\\u0219lia\",\"CR\":\"Criuleni\",\"DN\":\"Dondu\\u0219eni\",\"DR\":\"Drochia\",\"DB\":\"Dub\\u0103sari\",\"ED\":\"Edine\\u021b\",\"FL\":\"F\\u0103le\\u0219ti\",\"FR\":\"Flore\\u0219ti\",\"GE\":\"UTA G\\u0103g\\u0103uzia\",\"GL\":\"Glodeni\",\"HN\":\"H\\u00eence\\u0219ti\",\"IL\":\"Ialoveni\",\"LV\":\"Leova\",\"NS\":\"Nisporeni\",\"OC\":\"Ocni\\u021ba\",\"OR\":\"Orhei\",\"RZ\":\"Rezina\",\"RS\":\"R\\u00ee\\u0219cani\",\"SG\":\"S\\u00eengerei\",\"SR\":\"Soroca\",\"ST\":\"Str\\u0103\\u0219eni\",\"SD\":\"\\u0218old\\u0103ne\\u0219ti\",\"SV\":\"\\u0218tefan Vod\\u0103\",\"TR\":\"Taraclia\",\"TL\":\"Telene\\u0219ti\",\"UN\":\"Ungheni\"},\"MF\":[],\"MQ\":[],\"MT\":[],\"MX\":{\"DF\":\"Ciudad de M\\u00e9xico\",\"JA\":\"Jalisco\",\"NL\":\"Nuevo Le\\u00f3n\",\"AG\":\"Aguascalientes\",\"BC\":\"Baja California\",\"BS\":\"Baja California Sur\",\"CM\":\"Campeche\",\"CS\":\"Chiapas\",\"CH\":\"Chihuahua\",\"CO\":\"Coahuila\",\"CL\":\"Colima\",\"DG\":\"Durango\",\"GT\":\"Guanajuato\",\"GR\":\"Guerrero\",\"HG\":\"Hidalgo\",\"MX\":\"Estado de M\\u00e9xico\",\"MI\":\"Michoac\\u00e1n\",\"MO\":\"Morelos\",\"NA\":\"Nayarit\",\"OA\":\"Oaxaca\",\"PU\":\"Puebla\",\"QT\":\"Quer\\u00e9taro\",\"QR\":\"Quintana Roo\",\"SL\":\"San Luis Potos\\u00ed\",\"SI\":\"Sinaloa\",\"SO\":\"Sonora\",\"TB\":\"Tabasco\",\"TM\":\"Tamaulipas\",\"TL\":\"Tlaxcala\",\"VE\":\"Veracruz\",\"YU\":\"Yucat\\u00e1n\",\"ZA\":\"Zacatecas\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"LBN\":\"Labuan\",\"MLK\":\"Malacca (Melaka)\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PNG\":\"Penang (Pulau Pinang)\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"PJY\":\"Putrajaya\",\"KUL\":\"Kuala Lumpur\"},\"MZ\":{\"MZP\":\"Cabo Delgado\",\"MZG\":\"Gaza\",\"MZI\":\"Inhambane\",\"MZB\":\"Manica\",\"MZL\":\"Maputo Province\",\"MZMPM\":\"Maputo\",\"MZN\":\"Nampula\",\"MZA\":\"Niassa\",\"MZS\":\"Sofala\",\"MZT\":\"Tete\",\"MZQ\":\"Zamb\\u00e9zia\"},\"NA\":{\"ER\":\"Erongo\",\"HA\":\"Hardap\",\"KA\":\"Karas\",\"KE\":\"Kavango East\",\"KW\":\"Kavango West\",\"KH\":\"Khomas\",\"KU\":\"Kunene\",\"OW\":\"Ohangwena\",\"OH\":\"Omaheke\",\"OS\":\"Omusati\",\"ON\":\"Oshana\",\"OT\":\"Oshikoto\",\"OD\":\"Otjozondjupa\",\"CA\":\"Zambezi\"},\"NG\":{\"AB\":\"Abia\",\"FC\":\"Abuja\",\"AD\":\"Adamawa\",\"AK\":\"Akwa Ibom\",\"AN\":\"Anambra\",\"BA\":\"Bauchi\",\"BY\":\"Bayelsa\",\"BE\":\"Benue\",\"BO\":\"Borno\",\"CR\":\"Cross River\",\"DE\":\"Delta\",\"EB\":\"Ebonyi\",\"ED\":\"Edo\",\"EK\":\"Ekiti\",\"EN\":\"Enugu\",\"GO\":\"Gombe\",\"IM\":\"Imo\",\"JI\":\"Jigawa\",\"KD\":\"Kaduna\",\"KN\":\"Kano\",\"KT\":\"Katsina\",\"KE\":\"Kebbi\",\"KO\":\"Kogi\",\"KW\":\"Kwara\",\"LA\":\"Lagos\",\"NA\":\"Nasarawa\",\"NI\":\"Niger\",\"OG\":\"Ogun\",\"ON\":\"Ondo\",\"OS\":\"Osun\",\"OY\":\"Oyo\",\"PL\":\"Plateau\",\"RI\":\"Rivers\",\"SO\":\"Sokoto\",\"TA\":\"Taraba\",\"YO\":\"Yobe\",\"ZA\":\"Zamfara\"},\"NL\":[],\"NO\":[],\"NP\":{\"BAG\":\"Bagmati\",\"BHE\":\"Bheri\",\"DHA\":\"Dhaulagiri\",\"GAN\":\"Gandaki\",\"JAN\":\"Janakpur\",\"KAR\":\"Karnali\",\"KOS\":\"Koshi\",\"LUM\":\"Lumbini\",\"MAH\":\"Mahakali\",\"MEC\":\"Mechi\",\"NAR\":\"Narayani\",\"RAP\":\"Rapti\",\"SAG\":\"Sagarmatha\",\"SET\":\"Seti\"},\"NI\":{\"NI-AN\":\"Atl\\u00e1ntico Norte\",\"NI-AS\":\"Atl\\u00e1ntico Sur\",\"NI-BO\":\"Boaco\",\"NI-CA\":\"Carazo\",\"NI-CI\":\"Chinandega\",\"NI-CO\":\"Chontales\",\"NI-ES\":\"Estel\\u00ed\",\"NI-GR\":\"Granada\",\"NI-JI\":\"Jinotega\",\"NI-LE\":\"Le\\u00f3n\",\"NI-MD\":\"Madriz\",\"NI-MN\":\"Managua\",\"NI-MS\":\"Masaya\",\"NI-MT\":\"Matagalpa\",\"NI-NS\":\"Nueva Segovia\",\"NI-RI\":\"Rivas\",\"NI-SJ\":\"R\\u00edo San Juan\"},\"NZ\":{\"NTL\":\"Northland\",\"AUK\":\"Auckland\",\"WKO\":\"Waikato\",\"BOP\":\"Bay of Plenty\",\"TKI\":\"Taranaki\",\"GIS\":\"Gisborne\",\"HKB\":\"Hawke\\u2019s Bay\",\"MWT\":\"Manawatu-Wanganui\",\"WGN\":\"Wellington\",\"NSN\":\"Nelson\",\"MBH\":\"Marlborough\",\"TAS\":\"Tasman\",\"WTC\":\"West Coast\",\"CAN\":\"Canterbury\",\"OTA\":\"Otago\",\"STL\":\"Southland\"},\"PA\":{\"PA-1\":\"Bocas del Toro\",\"PA-2\":\"Cocl\\u00e9\",\"PA-3\":\"Col\\u00f3n\",\"PA-4\":\"Chiriqu\\u00ed\",\"PA-5\":\"Dari\\u00e9n\",\"PA-6\":\"Herrera\",\"PA-7\":\"Los Santos\",\"PA-8\":\"Panam\\u00e1\",\"PA-9\":\"Veraguas\",\"PA-10\":\"West Panam\\u00e1\",\"PA-EM\":\"Ember\\u00e1\",\"PA-KY\":\"Guna Yala\",\"PA-NB\":\"Ng\\u00f6be-Bugl\\u00e9\"},\"PE\":{\"CAL\":\"El Callao\",\"LMA\":\"Municipalidad Metropolitana de Lima\",\"AMA\":\"Amazonas\",\"ANC\":\"Ancash\",\"APU\":\"Apur\\u00edmac\",\"ARE\":\"Arequipa\",\"AYA\":\"Ayacucho\",\"CAJ\":\"Cajamarca\",\"CUS\":\"Cusco\",\"HUV\":\"Huancavelica\",\"HUC\":\"Hu\\u00e1nuco\",\"ICA\":\"Ica\",\"JUN\":\"Jun\\u00edn\",\"LAL\":\"La Libertad\",\"LAM\":\"Lambayeque\",\"LIM\":\"Lima\",\"LOR\":\"Loreto\",\"MDD\":\"Madre de Dios\",\"MOQ\":\"Moquegua\",\"PAS\":\"Pasco\",\"PIU\":\"Piura\",\"PUN\":\"Puno\",\"SAM\":\"San Mart\\u00edn\",\"TAC\":\"Tacna\",\"TUM\":\"Tumbes\",\"UCA\":\"Ucayali\"},\"PH\":{\"ABR\":\"Abra\",\"AGN\":\"Agusan del Norte\",\"AGS\":\"Agusan del Sur\",\"AKL\":\"Aklan\",\"ALB\":\"Albay\",\"ANT\":\"Antique\",\"APA\":\"Apayao\",\"AUR\":\"Aurora\",\"BAS\":\"Basilan\",\"BAN\":\"Bataan\",\"BTN\":\"Batanes\",\"BTG\":\"Batangas\",\"BEN\":\"Benguet\",\"BIL\":\"Biliran\",\"BOH\":\"Bohol\",\"BUK\":\"Bukidnon\",\"BUL\":\"Bulacan\",\"CAG\":\"Cagayan\",\"CAN\":\"Camarines Norte\",\"CAS\":\"Camarines Sur\",\"CAM\":\"Camiguin\",\"CAP\":\"Capiz\",\"CAT\":\"Catanduanes\",\"CAV\":\"Cavite\",\"CEB\":\"Cebu\",\"COM\":\"Compostela Valley\",\"NCO\":\"Cotabato\",\"DAV\":\"Davao del Norte\",\"DAS\":\"Davao del Sur\",\"DAC\":\"Davao Occidental\",\"DAO\":\"Davao Oriental\",\"DIN\":\"Dinagat Islands\",\"EAS\":\"Eastern Samar\",\"GUI\":\"Guimaras\",\"IFU\":\"Ifugao\",\"ILN\":\"Ilocos Norte\",\"ILS\":\"Ilocos Sur\",\"ILI\":\"Iloilo\",\"ISA\":\"Isabela\",\"KAL\":\"Kalinga\",\"LUN\":\"La Union\",\"LAG\":\"Laguna\",\"LAN\":\"Lanao del Norte\",\"LAS\":\"Lanao del Sur\",\"LEY\":\"Leyte\",\"MAG\":\"Maguindanao\",\"MAD\":\"Marinduque\",\"MAS\":\"Masbate\",\"MSC\":\"Misamis Occidental\",\"MSR\":\"Misamis Oriental\",\"MOU\":\"Mountain Province\",\"NEC\":\"Negros Occidental\",\"NER\":\"Negros Oriental\",\"NSA\":\"Northern Samar\",\"NUE\":\"Nueva Ecija\",\"NUV\":\"Nueva Vizcaya\",\"MDC\":\"Occidental Mindoro\",\"MDR\":\"Oriental Mindoro\",\"PLW\":\"Palawan\",\"PAM\":\"Pampanga\",\"PAN\":\"Pangasinan\",\"QUE\":\"Quezon\",\"QUI\":\"Quirino\",\"RIZ\":\"Rizal\",\"ROM\":\"Romblon\",\"WSA\":\"Samar\",\"SAR\":\"Sarangani\",\"SIQ\":\"Siquijor\",\"SOR\":\"Sorsogon\",\"SCO\":\"South Cotabato\",\"SLE\":\"Southern Leyte\",\"SUK\":\"Sultan Kudarat\",\"SLU\":\"Sulu\",\"SUN\":\"Surigao del Norte\",\"SUR\":\"Surigao del Sur\",\"TAR\":\"Tarlac\",\"TAW\":\"Tawi-Tawi\",\"ZMB\":\"Zambales\",\"ZAN\":\"Zamboanga del Norte\",\"ZAS\":\"Zamboanga del Sur\",\"ZSI\":\"Zamboanga Sibugay\",\"00\":\"Metro Manila\"},\"PK\":{\"JK\":\"Azad Kashmir\",\"BA\":\"Balochistan\",\"TA\":\"FATA\",\"GB\":\"Gilgit Baltistan\",\"IS\":\"Islamabad Capital Territory\",\"KP\":\"Khyber Pakhtunkhwa\",\"PB\":\"Punjab\",\"SD\":\"Sindh\"},\"PL\":[],\"PR\":[],\"PT\":[],\"PY\":{\"PY-ASU\":\"Asunci\\u00f3n\",\"PY-1\":\"Concepci\\u00f3n\",\"PY-2\":\"San Pedro\",\"PY-3\":\"Cordillera\",\"PY-4\":\"Guair\\u00e1\",\"PY-5\":\"Caaguaz\\u00fa\",\"PY-6\":\"Caazap\\u00e1\",\"PY-7\":\"Itap\\u00faa\",\"PY-8\":\"Misiones\",\"PY-9\":\"Paraguar\\u00ed\",\"PY-10\":\"Alto Paran\\u00e1\",\"PY-11\":\"Central\",\"PY-12\":\"\\u00d1eembuc\\u00fa\",\"PY-13\":\"Amambay\",\"PY-14\":\"Canindey\\u00fa\",\"PY-15\":\"Presidente Hayes\",\"PY-16\":\"Alto Paraguay\",\"PY-17\":\"Boquer\\u00f3n\"},\"RE\":[],\"RO\":{\"AB\":\"Alba\",\"AR\":\"Arad\",\"AG\":\"Arge\\u0219\",\"BC\":\"Bac\\u0103u\",\"BH\":\"Bihor\",\"BN\":\"Bistri\\u021ba-N\\u0103s\\u0103ud\",\"BT\":\"Boto\\u0219ani\",\"BR\":\"Br\\u0103ila\",\"BV\":\"Bra\\u0219ov\",\"B\":\"Bucure\\u0219ti\",\"BZ\":\"Buz\\u0103u\",\"CL\":\"C\\u0103l\\u0103ra\\u0219i\",\"CS\":\"Cara\\u0219-Severin\",\"CJ\":\"Cluj\",\"CT\":\"Constan\\u021ba\",\"CV\":\"Covasna\",\"DB\":\"D\\u00e2mbovi\\u021ba\",\"DJ\":\"Dolj\",\"GL\":\"Gala\\u021bi\",\"GR\":\"Giurgiu\",\"GJ\":\"Gorj\",\"HR\":\"Harghita\",\"HD\":\"Hunedoara\",\"IL\":\"Ialomi\\u021ba\",\"IS\":\"Ia\\u0219i\",\"IF\":\"Ilfov\",\"MM\":\"Maramure\\u0219\",\"MH\":\"Mehedin\\u021bi\",\"MS\":\"Mure\\u0219\",\"NT\":\"Neam\\u021b\",\"OT\":\"Olt\",\"PH\":\"Prahova\",\"SJ\":\"S\\u0103laj\",\"SM\":\"Satu Mare\",\"SB\":\"Sibiu\",\"SV\":\"Suceava\",\"TR\":\"Teleorman\",\"TM\":\"Timi\\u0219\",\"TL\":\"Tulcea\",\"VL\":\"V\\u00e2lcea\",\"VS\":\"Vaslui\",\"VN\":\"Vrancea\"},\"SN\":{\"SNDB\":\"Diourbel\",\"SNDK\":\"Dakar\",\"SNFK\":\"Fatick\",\"SNKA\":\"Kaffrine\",\"SNKD\":\"Kolda\",\"SNKE\":\"K\\u00e9dougou\",\"SNKL\":\"Kaolack\",\"SNLG\":\"Louga\",\"SNMT\":\"Matam\",\"SNSE\":\"S\\u00e9dhiou\",\"SNSL\":\"Saint-Louis\",\"SNTC\":\"Tambacounda\",\"SNTH\":\"Thi\\u00e8s\",\"SNZG\":\"Ziguinchor\"},\"SG\":[],\"SK\":[],\"SI\":[],\"SV\":{\"SV-AH\":\"Ahuachap\\u00e1n\",\"SV-CA\":\"Caba\\u00f1as\",\"SV-CH\":\"Chalatenango\",\"SV-CU\":\"Cuscatl\\u00e1n\",\"SV-LI\":\"La Libertad\",\"SV-MO\":\"Moraz\\u00e1n\",\"SV-PA\":\"La Paz\",\"SV-SA\":\"Santa Ana\",\"SV-SM\":\"San Miguel\",\"SV-SO\":\"Sonsonate\",\"SV-SS\":\"San Salvador\",\"SV-SV\":\"San Vicente\",\"SV-UN\":\"La Uni\\u00f3n\",\"SV-US\":\"Usulut\\u00e1n\"},\"TH\":{\"TH-37\":\"Amnat Charoen\",\"TH-15\":\"Ang Thong\",\"TH-14\":\"Ayutthaya\",\"TH-10\":\"Bangkok\",\"TH-38\":\"Bueng Kan\",\"TH-31\":\"Buri Ram\",\"TH-24\":\"Chachoengsao\",\"TH-18\":\"Chai Nat\",\"TH-36\":\"Chaiyaphum\",\"TH-22\":\"Chanthaburi\",\"TH-50\":\"Chiang Mai\",\"TH-57\":\"Chiang Rai\",\"TH-20\":\"Chonburi\",\"TH-86\":\"Chumphon\",\"TH-46\":\"Kalasin\",\"TH-62\":\"Kamphaeng Phet\",\"TH-71\":\"Kanchanaburi\",\"TH-40\":\"Khon Kaen\",\"TH-81\":\"Krabi\",\"TH-52\":\"Lampang\",\"TH-51\":\"Lamphun\",\"TH-42\":\"Loei\",\"TH-16\":\"Lopburi\",\"TH-58\":\"Mae Hong Son\",\"TH-44\":\"Maha Sarakham\",\"TH-49\":\"Mukdahan\",\"TH-26\":\"Nakhon Nayok\",\"TH-73\":\"Nakhon Pathom\",\"TH-48\":\"Nakhon Phanom\",\"TH-30\":\"Nakhon Ratchasima\",\"TH-60\":\"Nakhon Sawan\",\"TH-80\":\"Nakhon Si Thammarat\",\"TH-55\":\"Nan\",\"TH-96\":\"Narathiwat\",\"TH-39\":\"Nong Bua Lam Phu\",\"TH-43\":\"Nong Khai\",\"TH-12\":\"Nonthaburi\",\"TH-13\":\"Pathum Thani\",\"TH-94\":\"Pattani\",\"TH-82\":\"Phang Nga\",\"TH-93\":\"Phatthalung\",\"TH-56\":\"Phayao\",\"TH-67\":\"Phetchabun\",\"TH-76\":\"Phetchaburi\",\"TH-66\":\"Phichit\",\"TH-65\":\"Phitsanulok\",\"TH-54\":\"Phrae\",\"TH-83\":\"Phuket\",\"TH-25\":\"Prachin Buri\",\"TH-77\":\"Prachuap Khiri Khan\",\"TH-85\":\"Ranong\",\"TH-70\":\"Ratchaburi\",\"TH-21\":\"Rayong\",\"TH-45\":\"Roi Et\",\"TH-27\":\"Sa Kaeo\",\"TH-47\":\"Sakon Nakhon\",\"TH-11\":\"Samut Prakan\",\"TH-74\":\"Samut Sakhon\",\"TH-75\":\"Samut Songkhram\",\"TH-19\":\"Saraburi\",\"TH-91\":\"Satun\",\"TH-17\":\"Sing Buri\",\"TH-33\":\"Sisaket\",\"TH-90\":\"Songkhla\",\"TH-64\":\"Sukhothai\",\"TH-72\":\"Suphan Buri\",\"TH-84\":\"Surat Thani\",\"TH-32\":\"Surin\",\"TH-63\":\"Tak\",\"TH-92\":\"Trang\",\"TH-23\":\"Trat\",\"TH-34\":\"Ubon Ratchathani\",\"TH-41\":\"Udon Thani\",\"TH-61\":\"Uthai Thani\",\"TH-53\":\"Uttaradit\",\"TH-95\":\"Yala\",\"TH-35\":\"Yasothon\"},\"TR\":{\"TR01\":\"Adana\",\"TR02\":\"Ad\\u0131yaman\",\"TR03\":\"Afyon\",\"TR04\":\"A\\u011fr\\u0131\",\"TR05\":\"Amasya\",\"TR06\":\"Ankara\",\"TR07\":\"Antalya\",\"TR08\":\"Artvin\",\"TR09\":\"Ayd\\u0131n\",\"TR10\":\"Bal\\u0131kesir\",\"TR11\":\"Bilecik\",\"TR12\":\"Bing\\u00f6l\",\"TR13\":\"Bitlis\",\"TR14\":\"Bolu\",\"TR15\":\"Burdur\",\"TR16\":\"Bursa\",\"TR17\":\"\\u00c7anakkale\",\"TR18\":\"\\u00c7ank\\u0131r\\u0131\",\"TR19\":\"\\u00c7orum\",\"TR20\":\"Denizli\",\"TR21\":\"Diyarbak\\u0131r\",\"TR22\":\"Edirne\",\"TR23\":\"Elaz\\u0131\\u011f\",\"TR24\":\"Erzincan\",\"TR25\":\"Erzurum\",\"TR26\":\"Eski\\u015fehir\",\"TR27\":\"Gaziantep\",\"TR28\":\"Giresun\",\"TR29\":\"G\\u00fcm\\u00fc\\u015fhane\",\"TR30\":\"Hakkari\",\"TR31\":\"Hatay\",\"TR32\":\"Isparta\",\"TR33\":\"\\u0130\\u00e7el\",\"TR34\":\"\\u0130stanbul\",\"TR35\":\"\\u0130zmir\",\"TR36\":\"Kars\",\"TR37\":\"Kastamonu\",\"TR38\":\"Kayseri\",\"TR39\":\"K\\u0131rklareli\",\"TR40\":\"K\\u0131r\\u015fehir\",\"TR41\":\"Kocaeli\",\"TR42\":\"Konya\",\"TR43\":\"K\\u00fctahya\",\"TR44\":\"Malatya\",\"TR45\":\"Manisa\",\"TR46\":\"Kahramanmara\\u015f\",\"TR47\":\"Mardin\",\"TR48\":\"Mu\\u011fla\",\"TR49\":\"Mu\\u015f\",\"TR50\":\"Nev\\u015fehir\",\"TR51\":\"Ni\\u011fde\",\"TR52\":\"Ordu\",\"TR53\":\"Rize\",\"TR54\":\"Sakarya\",\"TR55\":\"Samsun\",\"TR56\":\"Siirt\",\"TR57\":\"Sinop\",\"TR58\":\"Sivas\",\"TR59\":\"Tekirda\\u011f\",\"TR60\":\"Tokat\",\"TR61\":\"Trabzon\",\"TR62\":\"Tunceli\",\"TR63\":\"\\u015eanl\\u0131urfa\",\"TR64\":\"U\\u015fak\",\"TR65\":\"Van\",\"TR66\":\"Yozgat\",\"TR67\":\"Zonguldak\",\"TR68\":\"Aksaray\",\"TR69\":\"Bayburt\",\"TR70\":\"Karaman\",\"TR71\":\"K\\u0131r\\u0131kkale\",\"TR72\":\"Batman\",\"TR73\":\"\\u015e\\u0131rnak\",\"TR74\":\"Bart\\u0131n\",\"TR75\":\"Ardahan\",\"TR76\":\"I\\u011fd\\u0131r\",\"TR77\":\"Yalova\",\"TR78\":\"Karab\\u00fck\",\"TR79\":\"Kilis\",\"TR80\":\"Osmaniye\",\"TR81\":\"D\\u00fczce\"},\"TZ\":{\"TZ01\":\"Arusha\",\"TZ02\":\"Dar es Salaam\",\"TZ03\":\"Dodoma\",\"TZ04\":\"Iringa\",\"TZ05\":\"Kagera\",\"TZ06\":\"Pemba North\",\"TZ07\":\"Zanzibar North\",\"TZ08\":\"Kigoma\",\"TZ09\":\"Kilimanjaro\",\"TZ10\":\"Pemba South\",\"TZ11\":\"Zanzibar South\",\"TZ12\":\"Lindi\",\"TZ13\":\"Mara\",\"TZ14\":\"Mbeya\",\"TZ15\":\"Zanzibar West\",\"TZ16\":\"Morogoro\",\"TZ17\":\"Mtwara\",\"TZ18\":\"Mwanza\",\"TZ19\":\"Coast\",\"TZ20\":\"Rukwa\",\"TZ21\":\"Ruvuma\",\"TZ22\":\"Shinyanga\",\"TZ23\":\"Singida\",\"TZ24\":\"Tabora\",\"TZ25\":\"Tanga\",\"TZ26\":\"Manyara\",\"TZ27\":\"Geita\",\"TZ28\":\"Katavi\",\"TZ29\":\"Njombe\",\"TZ30\":\"Simiyu\"},\"LK\":[],\"RS\":{\"RS00\":\"Belgrade\",\"RS14\":\"Bor\",\"RS11\":\"Brani\\u010devo\",\"RS02\":\"Central Banat\",\"RS10\":\"Danube\",\"RS23\":\"Jablanica\",\"RS09\":\"Kolubara\",\"RS08\":\"Ma\\u010dva\",\"RS17\":\"Morava\",\"RS20\":\"Ni\\u0161ava\",\"RS01\":\"North Ba\\u010dka\",\"RS03\":\"North Banat\",\"RS24\":\"P\\u010dinja\",\"RS22\":\"Pirot\",\"RS13\":\"Pomoravlje\",\"RS19\":\"Rasina\",\"RS18\":\"Ra\\u0161ka\",\"RS06\":\"South Ba\\u010dka\",\"RS04\":\"South Banat\",\"RS07\":\"Srem\",\"RS12\":\"\\u0160umadija\",\"RS21\":\"Toplica\",\"RS05\":\"West Ba\\u010dka\",\"RS15\":\"Zaje\\u010dar\",\"RS16\":\"Zlatibor\",\"RS25\":\"Kosovo\",\"RS26\":\"Pe\\u0107\",\"RS27\":\"Prizren\",\"RS28\":\"Kosovska Mitrovica\",\"RS29\":\"Kosovo-Pomoravlje\",\"RSKM\":\"Kosovo-Metohija\",\"RSVO\":\"Vojvodina\"},\"RW\":[],\"SE\":[],\"UA\":{\"UA05\":\"Vinnychchyna\",\"UA07\":\"Volyn\",\"UA09\":\"Luhanshchyna\",\"UA12\":\"Dnipropetrovshchyna\",\"UA14\":\"Donechchyna\",\"UA18\":\"Zhytomyrshchyna\",\"UA21\":\"Zakarpattia\",\"UA23\":\"Zaporizhzhya\",\"UA26\":\"Prykarpattia\",\"UA30\":\"Kyiv\",\"UA32\":\"Kyivshchyna\",\"UA35\":\"Kirovohradschyna\",\"UA40\":\"Sevastopol\",\"UA43\":\"Crimea\",\"UA46\":\"Lvivshchyna\",\"UA48\":\"Mykolayivschyna\",\"UA51\":\"Odeshchyna\",\"UA53\":\"Poltavshchyna\",\"UA56\":\"Rivnenshchyna\",\"UA59\":\"Sumshchyna\",\"UA61\":\"Ternopilshchyna\",\"UA63\":\"Kharkivshchyna\",\"UA65\":\"Khersonshchyna\",\"UA68\":\"Khmelnychchyna\",\"UA71\":\"Cherkashchyna\",\"UA74\":\"Chernihivshchyna\",\"UA77\":\"Chernivtsi Oblast\"},\"UG\":{\"UG314\":\"Abim\",\"UG301\":\"Adjumani\",\"UG322\":\"Agago\",\"UG323\":\"Alebtong\",\"UG315\":\"Amolatar\",\"UG324\":\"Amudat\",\"UG216\":\"Amuria\",\"UG316\":\"Amuru\",\"UG302\":\"Apac\",\"UG303\":\"Arua\",\"UG217\":\"Budaka\",\"UG218\":\"Bududa\",\"UG201\":\"Bugiri\",\"UG235\":\"Bugweri\",\"UG420\":\"Buhweju\",\"UG117\":\"Buikwe\",\"UG219\":\"Bukedea\",\"UG118\":\"Bukomansimbi\",\"UG220\":\"Bukwa\",\"UG225\":\"Bulambuli\",\"UG416\":\"Buliisa\",\"UG401\":\"Bundibugyo\",\"UG430\":\"Bunyangabu\",\"UG402\":\"Bushenyi\",\"UG202\":\"Busia\",\"UG221\":\"Butaleja\",\"UG119\":\"Butambala\",\"UG233\":\"Butebo\",\"UG120\":\"Buvuma\",\"UG226\":\"Buyende\",\"UG317\":\"Dokolo\",\"UG121\":\"Gomba\",\"UG304\":\"Gulu\",\"UG403\":\"Hoima\",\"UG417\":\"Ibanda\",\"UG203\":\"Iganga\",\"UG418\":\"Isingiro\",\"UG204\":\"Jinja\",\"UG318\":\"Kaabong\",\"UG404\":\"Kabale\",\"UG405\":\"Kabarole\",\"UG213\":\"Kaberamaido\",\"UG427\":\"Kagadi\",\"UG428\":\"Kakumiro\",\"UG101\":\"Kalangala\",\"UG222\":\"Kaliro\",\"UG122\":\"Kalungu\",\"UG102\":\"Kampala\",\"UG205\":\"Kamuli\",\"UG413\":\"Kamwenge\",\"UG414\":\"Kanungu\",\"UG206\":\"Kapchorwa\",\"UG236\":\"Kapelebyong\",\"UG126\":\"Kasanda\",\"UG406\":\"Kasese\",\"UG207\":\"Katakwi\",\"UG112\":\"Kayunga\",\"UG407\":\"Kibaale\",\"UG103\":\"Kiboga\",\"UG227\":\"Kibuku\",\"UG432\":\"Kikuube\",\"UG419\":\"Kiruhura\",\"UG421\":\"Kiryandongo\",\"UG408\":\"Kisoro\",\"UG305\":\"Kitgum\",\"UG319\":\"Koboko\",\"UG325\":\"Kole\",\"UG306\":\"Kotido\",\"UG208\":\"Kumi\",\"UG333\":\"Kwania\",\"UG228\":\"Kween\",\"UG123\":\"Kyankwanzi\",\"UG422\":\"Kyegegwa\",\"UG415\":\"Kyenjojo\",\"UG125\":\"Kyotera\",\"UG326\":\"Lamwo\",\"UG307\":\"Lira\",\"UG229\":\"Luuka\",\"UG104\":\"Luwero\",\"UG124\":\"Lwengo\",\"UG114\":\"Lyantonde\",\"UG223\":\"Manafwa\",\"UG320\":\"Maracha\",\"UG105\":\"Masaka\",\"UG409\":\"Masindi\",\"UG214\":\"Mayuge\",\"UG209\":\"Mbale\",\"UG410\":\"Mbarara\",\"UG423\":\"Mitooma\",\"UG115\":\"Mityana\",\"UG308\":\"Moroto\",\"UG309\":\"Moyo\",\"UG106\":\"Mpigi\",\"UG107\":\"Mubende\",\"UG108\":\"Mukono\",\"UG334\":\"Nabilatuk\",\"UG311\":\"Nakapiripirit\",\"UG116\":\"Nakaseke\",\"UG109\":\"Nakasongola\",\"UG230\":\"Namayingo\",\"UG234\":\"Namisindwa\",\"UG224\":\"Namutumba\",\"UG327\":\"Napak\",\"UG310\":\"Nebbi\",\"UG231\":\"Ngora\",\"UG424\":\"Ntoroko\",\"UG411\":\"Ntungamo\",\"UG328\":\"Nwoya\",\"UG331\":\"Omoro\",\"UG329\":\"Otuke\",\"UG321\":\"Oyam\",\"UG312\":\"Pader\",\"UG332\":\"Pakwach\",\"UG210\":\"Pallisa\",\"UG110\":\"Rakai\",\"UG429\":\"Rubanda\",\"UG425\":\"Rubirizi\",\"UG431\":\"Rukiga\",\"UG412\":\"Rukungiri\",\"UG111\":\"Sembabule\",\"UG232\":\"Serere\",\"UG426\":\"Sheema\",\"UG215\":\"Sironko\",\"UG211\":\"Soroti\",\"UG212\":\"Tororo\",\"UG113\":\"Wakiso\",\"UG313\":\"Yumbe\",\"UG330\":\"Zombo\"},\"UM\":{\"81\":\"Baker Island\",\"84\":\"Howland Island\",\"86\":\"Jarvis Island\",\"67\":\"Johnston Atoll\",\"89\":\"Kingman Reef\",\"71\":\"Midway Atoll\",\"76\":\"Navassa Island\",\"95\":\"Palmyra Atoll\",\"79\":\"Wake Island\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"},\"UY\":{\"UY-AR\":\"Artigas\",\"UY-CA\":\"Canelones\",\"UY-CL\":\"Cerro Largo\",\"UY-CO\":\"Colonia\",\"UY-DU\":\"Durazno\",\"UY-FS\":\"Flores\",\"UY-FD\":\"Florida\",\"UY-LA\":\"Lavalleja\",\"UY-MA\":\"Maldonado\",\"UY-MO\":\"Montevideo\",\"UY-PA\":\"Paysand\\u00fa\",\"UY-RN\":\"R\\u00edo Negro\",\"UY-RV\":\"Rivera\",\"UY-RO\":\"Rocha\",\"UY-SA\":\"Salto\",\"UY-SJ\":\"San Jos\\u00e9\",\"UY-SO\":\"Soriano\",\"UY-TA\":\"Tacuaremb\\u00f3\",\"UY-TT\":\"Treinta y Tres\"},\"VE\":{\"VE-A\":\"Capital\",\"VE-B\":\"Anzo\\u00e1tegui\",\"VE-C\":\"Apure\",\"VE-D\":\"Aragua\",\"VE-E\":\"Barinas\",\"VE-F\":\"Bol\\u00edvar\",\"VE-G\":\"Carabobo\",\"VE-H\":\"Cojedes\",\"VE-I\":\"Falc\\u00f3n\",\"VE-J\":\"Gu\\u00e1rico\",\"VE-K\":\"Lara\",\"VE-L\":\"M\\u00e9rida\",\"VE-M\":\"Miranda\",\"VE-N\":\"Monagas\",\"VE-O\":\"Nueva Esparta\",\"VE-P\":\"Portuguesa\",\"VE-R\":\"Sucre\",\"VE-S\":\"T\\u00e1chira\",\"VE-T\":\"Trujillo\",\"VE-U\":\"Yaracuy\",\"VE-V\":\"Zulia\",\"VE-W\":\"Federal Dependencies\",\"VE-X\":\"La Guaira (Vargas)\",\"VE-Y\":\"Delta Amacuro\",\"VE-Z\":\"Amazonas\"},\"VN\":[],\"YT\":[],\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"ZM\":{\"ZM-01\":\"Western\",\"ZM-02\":\"Central\",\"ZM-03\":\"Eastern\",\"ZM-04\":\"Luapula\",\"ZM-05\":\"Northern\",\"ZM-06\":\"North-Western\",\"ZM-07\":\"Southern\",\"ZM-08\":\"Copperbelt\",\"ZM-09\":\"Lusaka\",\"ZM-10\":\"Muchinga\"}}","i18n_select_state_text":"Select an option\u2026","i18n_no_matches":"No matches found","i18n_ajax_error":"Loading failed","i18n_input_too_short_1":"Please enter 1 or more characters","i18n_input_too_short_n":"Please enter %qty% or more characters","i18n_input_too_long_1":"Please delete 1 character","i18n_input_too_long_n":"Please delete %qty% characters","i18n_selection_too_long_1":"You can only select 1 item","i18n_selection_too_long_n":"You can only select %qty% items","i18n_load_more":"Loading more results\u2026","i18n_searching":"Searching\u2026"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=8.2.1"
            id="wc-country-select-js"></script>
        <script type="text/javascript" id="wc-address-i18n-js-extra">
            /* <![CDATA[ */
var wc_address_i18n_params = {"locale":"{\"AE\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"AF\":{\"state\":{\"required\":false,\"hidden\":true}},\"AL\":{\"state\":[]},\"AO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":[]},\"AT\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"AU\":{\"city\":[],\"postcode\":[],\"state\":[]},\"AX\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"BA\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"BD\":{\"postcode\":{\"required\":false},\"state\":[]},\"BE\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"BG\":{\"state\":{\"required\":false}},\"BH\":{\"postcode\":{\"required\":false},\"state\":{\"required\":false,\"hidden\":true}},\"BI\":{\"state\":{\"required\":false,\"hidden\":true}},\"BO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":[]},\"BS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"BZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"CA\":{\"postcode\":[],\"state\":[]},\"CH\":{\"postcode\":[],\"state\":{\"required\":false}},\"CL\":{\"city\":{\"required\":true},\"postcode\":{\"required\":false},\"state\":[]},\"CN\":{\"state\":[]},\"CO\":{\"postcode\":{\"required\":false},\"state\":[]},\"CR\":{\"state\":[]},\"CW\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"CZ\":{\"state\":{\"required\":false,\"hidden\":true}},\"DE\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"DK\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"DO\":{\"state\":[]},\"EC\":{\"state\":[]},\"EE\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"ET\":{\"state\":{\"required\":false,\"hidden\":true}},\"FI\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"FR\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"GG\":{\"state\":{\"required\":false}},\"GH\":{\"postcode\":{\"required\":false},\"state\":[]},\"GP\":{\"state\":{\"required\":false,\"hidden\":true}},\"GF\":{\"state\":{\"required\":false,\"hidden\":true}},\"GR\":{\"state\":{\"required\":false}},\"GT\":{\"postcode\":{\"required\":false},\"state\":[]},\"HK\":{\"postcode\":{\"required\":false},\"city\":[],\"state\":[]},\"HN\":{\"state\":[]},\"HU\":{\"last_name\":{\"class\":[\"form-row-first\"]},\"first_name\":{\"class\":[\"form-row-last\"]},\"postcode\":{\"class\":[\"form-row-first\",\"address-field\"]},\"city\":{\"class\":[\"form-row-last\",\"address-field\"]},\"address_1\":[],\"address_2\":[],\"state\":{\"required\":false}},\"ID\":{\"state\":[]},\"IE\":{\"postcode\":{\"required\":false},\"state\":[]},\"IS\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"IL\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"IM\":{\"state\":{\"required\":false,\"hidden\":true}},\"IN\":{\"postcode\":[],\"state\":[]},\"IR\":{\"state\":[],\"city\":[],\"address_1\":[],\"address_2\":[]},\"IT\":{\"postcode\":[],\"state\":{\"required\":true}},\"JM\":{\"city\":[],\"postcode\":{\"required\":false},\"state\":{\"required\":true}},\"JP\":{\"last_name\":{\"class\":[\"form-row-first\"]},\"first_name\":{\"class\":[\"form-row-last\"]},\"postcode\":{\"class\":[\"form-row-first\",\"address-field\"]},\"state\":{\"class\":[\"form-row-last\",\"address-field\"]},\"city\":[],\"address_1\":[],\"address_2\":[]},\"KN\":{\"postcode\":{\"required\":false},\"state\":{\"required\":true}},\"KR\":{\"state\":{\"required\":false,\"hidden\":true}},\"KW\":{\"state\":{\"required\":false,\"hidden\":true}},\"LV\":{\"state\":{\"required\":false}},\"LB\":{\"state\":{\"required\":false,\"hidden\":true}},\"MF\":{\"state\":{\"required\":false,\"hidden\":true}},\"MQ\":{\"state\":{\"required\":false,\"hidden\":true}},\"MT\":{\"state\":{\"required\":false,\"hidden\":true}},\"MZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":[]},\"NI\":{\"state\":[]},\"NL\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"NG\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":[]},\"NZ\":{\"postcode\":[],\"state\":{\"required\":false}},\"NO\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"NP\":{\"state\":[],\"postcode\":{\"required\":false}},\"PA\":{\"state\":[]},\"PL\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"PR\":{\"city\":[],\"state\":{\"required\":false,\"hidden\":true}},\"PT\":{\"state\":{\"required\":false,\"hidden\":true}},\"PY\":{\"state\":[]},\"RE\":{\"state\":{\"required\":false,\"hidden\":true}},\"RO\":{\"state\":{\"required\":true}},\"RS\":{\"city\":{\"required\":true},\"postcode\":{\"required\":true},\"state\":{\"required\":false}},\"RW\":{\"state\":{\"required\":false,\"hidden\":true}},\"SG\":{\"state\":{\"required\":false,\"hidden\":true},\"city\":{\"required\":false}},\"SK\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"SI\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"SR\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"SV\":{\"state\":[]},\"ES\":{\"postcode\":[],\"state\":[]},\"LI\":{\"postcode\":[],\"state\":{\"required\":false}},\"LK\":{\"state\":{\"required\":false,\"hidden\":true}},\"LU\":{\"state\":{\"required\":false,\"hidden\":true}},\"MD\":{\"state\":[]},\"SE\":{\"postcode\":[],\"state\":{\"required\":false,\"hidden\":true}},\"TR\":{\"postcode\":[],\"state\":[]},\"UG\":{\"postcode\":{\"required\":false,\"hidden\":true},\"city\":{\"required\":true},\"state\":{\"required\":true}},\"US\":{\"postcode\":[],\"state\":[]},\"UY\":{\"state\":[]},\"GB\":{\"postcode\":[],\"state\":{\"required\":false}},\"ST\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":[]},\"VN\":{\"state\":{\"required\":false,\"hidden\":true},\"postcode\":{\"required\":false,\"hidden\":false},\"address_2\":{\"required\":false,\"hidden\":false}},\"WS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"YT\":{\"state\":{\"required\":false,\"hidden\":true}},\"ZA\":{\"state\":[]},\"ZW\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"default\":{\"first_name\":{\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\"},\"last_name\":{\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\"},\"company\":{\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"required\":false},\"country\":{\"type\":\"country\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\"},\"address_1\":{\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\"},\"address_2\":{\"label_class\":[\"screen-reader-text\"],\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"required\":false},\"city\":{\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\"},\"state\":{\"type\":\"state\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\"},\"postcode\":{\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\"}}}","locale_fields":"{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}","i18n_required_text":"required","i18n_optional_text":"optional"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min.js?ver=8.2.1"
            id="wc-address-i18n-js"></script>
        <script type="text/javascript" id="wc-cart-js-extra">
            /* <![CDATA[ */
var wc_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","update_shipping_method_nonce":"e3328a5e95","apply_coupon_nonce":"1cfeec5a96","remove_coupon_nonce":"a3881051aa"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/cart.min.js?ver=8.2.1"
            id="wc-cart-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.8.2.1"
            id="selectWoo-js"></script>
        <script type="text/javascript" id="wc-cart-fragments-js-extra">
            /* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d2aee9daaa360f751efca3a9a39093ed","fragment_name":"wc_fragments_d2aee9daaa360f751efca3a9a39093ed","request_timeout":"5000"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=8.2.1"
            id="wc-cart-fragments-js"></script>
        <script type="text/javascript" id="tinvwl-js-extra">
            /* <![CDATA[ */
var tinvwl_add_to_wishlist = {"text_create":"Create New","text_already_in":"{product_name} already in Wishlist","simple_flow":"","hide_zero_counter":"","i18n_make_a_selection_text":"Please select some product options before adding this product to your wishlist.","tinvwl_break_submit":"No items or actions are selected.","tinvwl_clipboard":"Copied!","allow_parent_variable":"","block_ajax_wishlists_data":"","update_wishlists_data":"","hash_key":"ti_wishlist_data_d2aee9daaa360f751efca3a9a39093ed","nonce":"696332a50b","rest_root":"https:\/\/moonrisecrystals.com\/wp-json\/","plugin_url":"https:\/\/moonrisecrystals.com\/wp-content\/plugins\/ti-woocommerce-wishlist\/","wc_ajax_url":"\/?wc-ajax=tinvwl","stats":"","popup_timer":"6000"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/ti-woocommerce-wishlist/assets/js/public.min.js?ver=2.7.4"
            id="tinvwl-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/jquery-payment/jquery.payment.min.js?ver=3.0.0-wc.8.2.1"
            id="jquery-payment-js"></script>
        <script type="text/javascript" src="https://js.stripe.com/v3/?ver=3.0" id="stripe-js"></script>
        <script type="text/javascript" id="woocommerce_stripe-js-extra">
            /* <![CDATA[ */
var wc_stripe_params = {"title":"Credit Card (Stripe)","key":"pk_live_IG0AutEG8X7oLV2J6sjhKFL1008I67a9Uf","i18n_terms":"Please accept the terms and conditions first","i18n_required_fields":"Please fill in required checkout fields first","updateFailedOrderNonce":"11af6838d8","updatePaymentIntentNonce":"e59530ae79","orderId":"0","checkout_url":"\/?wc-ajax=checkout","stripe_locale":"en","no_prepaid_card_msg":"Sorry, we're not accepting prepaid cards at this time. Your credit card has not been charged. Please try with alternative payment method.","no_sepa_owner_msg":"Please enter your IBAN account name.","no_sepa_iban_msg":"Please enter your IBAN account number.","payment_intent_error":"We couldn't initiate the payment. Please try again.","sepa_mandate_notification":"email","allow_prepaid_card":"yes","inline_cc_form":"no","is_checkout":"no","return_url":"https:\/\/moonrisecrystals.com\/checkout\/order-received\/?utm_nooverride=1","ajaxurl":"\/?wc-ajax=%%endpoint%%","stripe_nonce":"669b9fdac2","statement_descriptor":"","elements_options":[],"sepa_elements_options":{"supportedCountries":["SEPA"],"placeholderCountry":"US","style":{"base":{"fontSize":"15px"}}},"invalid_owner_name":"Billing First Name and Last Name are required.","is_change_payment_page":"no","is_add_payment_page":"no","is_pay_for_order_page":"no","elements_styling":"","elements_classes":"","add_card_nonce":"a4adca8f08","create_payment_intent_nonce":"6be1f7e984","cpf_cnpj_required_msg":"CPF\/CNPJ is a required field","invalid_number":"The card number is not a valid credit card number.","invalid_expiry_month":"The card's expiration month is invalid.","invalid_expiry_year":"The card's expiration year is invalid.","invalid_cvc":"The card's security code is invalid.","incorrect_number":"The card number is incorrect.","incomplete_number":"The card number is incomplete.","incomplete_cvc":"The card's security code is incomplete.","incomplete_expiry":"The card's expiration date is incomplete.","expired_card":"The card has expired.","incorrect_cvc":"The card's security code is incorrect.","incorrect_zip":"The card's zip code failed validation.","postal_code_invalid":"Invalid zip code, please correct and try again","invalid_expiry_year_past":"The card's expiration year is in the past","card_declined":"The card was declined.","missing":"There is no card on a customer that is being charged.","processing_error":"An error occurred while processing the card.","invalid_sofort_country":"The billing country is not accepted by Sofort. Please try another country.","email_invalid":"Invalid email address, please correct and try again.","invalid_request_error":"Unable to process this payment, please try again or use alternative method.","amount_too_large":"The order total is too high for this payment method","amount_too_small":"The order total is too low for this payment method","country_code_invalid":"Invalid country code, please try again with a valid country code","tax_id_invalid":"Invalid Tax Id, please try again with a valid tax id"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-gateway-stripe/assets/js/stripe.min.js?ver=7.6.2"
            id="woocommerce_stripe-js"></script>
        <script type="text/javascript" id="cwginstock_js-js-extra">
            /* <![CDATA[ */
var cwginstock = {"ajax_url":"https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php","default_ajax_url":"https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php","security":"902ad9c9f3","user_id":"0","security_error":"Something went wrong, please try after sometime","empty_name":"Name cannot be empty","empty_quantity":"Quantity cannot be empty","empty_email":"Email Address cannot be empty","invalid_email":"Please enter valid Email Address","is_popup":"no","phone_field":"2","phone_field_error":["Please enter valid Phone Number","Please enter valid Phone Number","Phone number is too short","Phone number is too long","Please enter valid Phone Number"],"phone_utils_js":"","is_phone_field_optional":"2","is_quantity_field_optional":"2","hide_country_placeholder":"2","default_country_code":"","custom_country_placeholder":"","enable_recaptcha":"2","recaptcha_site_key":"","enable_recaptcha_verify":"2","recaptcha_secret_present":"no","is_v3_recaptcha":"no"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/js/frontend-dev.js?ver=5.0.1"
            id="cwginstock_js-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/js/sweetalert2.min.js?ver=5.0.1"
            id="sweetalert2-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/js/cwg-popup.js?ver=5.0.1"
            id="cwginstock_popup-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/cssua.js?ver=2.1.28"
            id="cssua-js"></script>
        <script type="text/javascript" id="fusion-animations-js-extra">
            /* <![CDATA[ */
var fusionAnimationsVars = {"status_css_animations":"desktop"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-animations.js?ver=3.11.2"
            id="fusion-animations-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/awb-tabs-widget.js?ver=3.11.2"
            id="awb-tabs-widget-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/awb-vertical-menu-widget.js?ver=3.11.2"
            id="awb-vertical-menu-widget-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/modernizr.js?ver=3.3.1"
            id="modernizr-js"></script>
        <script type="text/javascript" id="fusion-js-extra">
            /* <![CDATA[ */
var fusionJSVars = {"visibility_small":"640","visibility_medium":"1130"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion.js?ver=3.11.2"
            id="fusion-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/bootstrap.transition.js?ver=3.3.6"
            id="bootstrap-transition-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/bootstrap.tooltip.js?ver=3.3.5"
            id="bootstrap-tooltip-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.requestAnimationFrame.js?ver=1"
            id="jquery-request-animation-frame-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.easing.js?ver=1.3"
            id="jquery-easing-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.fitvids.js?ver=1.1"
            id="jquery-fitvids-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.flexslider.js?ver=2.7.2"
            id="jquery-flexslider-js"></script>
        <script type="text/javascript" id="jquery-lightbox-js-extra">
            /* <![CDATA[ */
var fusionLightboxVideoVars = {"lightbox_video_width":"1280","lightbox_video_height":"720"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.ilightbox.js?ver=2.2.3"
            id="jquery-lightbox-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.mousewheel.js?ver=3.0.6"
            id="jquery-mousewheel-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.placeholder.js?ver=2.0.7"
            id="jquery-placeholder-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.fade.js?ver=1"
            id="jquery-fade-js"></script>
        <script type="text/javascript" id="fusion-equal-heights-js-extra">
            /* <![CDATA[ */
var fusionEqualHeightVars = {"content_break_point":"800"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-equal-heights.js?ver=1"
            id="fusion-equal-heights-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-parallax.js?ver=1"
            id="fusion-parallax-js"></script>
        <script type="text/javascript" id="fusion-video-general-js-extra">
            /* <![CDATA[ */
var fusionVideoGeneralVars = {"status_vimeo":"0","status_yt":"1"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-video-general.js?ver=1"
            id="fusion-video-general-js"></script>
        <script type="text/javascript" id="fusion-video-bg-js-extra">
            /* <![CDATA[ */
var fusionVideoBgVars = {"status_vimeo":"0","status_yt":"1"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-video-bg.js?ver=1"
            id="fusion-video-bg-js"></script>
        <script type="text/javascript" id="fusion-lightbox-js-extra">
            /* <![CDATA[ */
var fusionLightboxVars = {"status_lightbox":"1","lightbox_gallery":"1","lightbox_skin":"metro-white","lightbox_title":"1","lightbox_arrows":"1","lightbox_slideshow_speed":"5000","lightbox_autoplay":"","lightbox_opacity":"0.9","lightbox_desc":"1","lightbox_social":"1","lightbox_social_links":{"facebook":{"source":"https:\/\/www.facebook.com\/sharer.php?u={URL}","text":"Share on Facebook"},"twitter":{"source":"https:\/\/twitter.com\/share?url={URL}","text":"Share on Twitter"},"reddit":{"source":"https:\/\/reddit.com\/submit?url={URL}","text":"Share on Reddit"},"linkedin":{"source":"https:\/\/www.linkedin.com\/shareArticle?mini=true&url={URL}","text":"Share on LinkedIn"},"whatsapp":{"source":"https:\/\/api.whatsapp.com\/send?text={URL}","text":"Share on WhatsApp"},"tumblr":{"source":"https:\/\/www.tumblr.com\/share\/link?url={URL}","text":"Share on Tumblr"},"pinterest":{"source":"https:\/\/pinterest.com\/pin\/create\/button\/?url={URL}","text":"Share on Pinterest"},"vk":{"source":"https:\/\/vk.com\/share.php?url={URL}","text":"Share on Vk"},"xing":{"source":"https:\/\/www.xing.com\/social_plugins\/share\/new?sc_p=xing-share&amp;h=1&amp;url={URL}","text":"Share on Xing"},"mail":{"source":"mailto:?body={URL}","text":"Share by Email"}},"lightbox_deeplinking":"1","lightbox_path":"vertical","lightbox_post_images":"1","lightbox_animation_speed":"normal","l10n":{"close":"Press Esc to close","enterFullscreen":"Enter Fullscreen (Shift+Enter)","exitFullscreen":"Exit Fullscreen (Shift+Enter)","slideShow":"Slideshow","next":"Next","previous":"Previous"}};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-lightbox.js?ver=1"
            id="fusion-lightbox-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-tooltip.js?ver=1"
            id="fusion-tooltip-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-sharing-box.js?ver=1"
            id="fusion-sharing-box-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.sticky-kit.js?ver=1.1.2"
            id="jquery-sticky-kit-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-youtube.js?ver=2.2.1"
            id="fusion-youtube-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/lazysizes.js?ver=6.4"
            id="lazysizes-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-woo-variations.js?ver=7.11.2"
            id="avada-woo-product-variations-js"></script>
        <script type="text/javascript" id="fusion-flexslider-js-extra">
            /* <![CDATA[ */
var fusionFlexSliderVars = {"status_vimeo":"","slideshow_autoplay":"1","slideshow_speed":"7000","pagination_video_slide":"","status_yt":"1","flex_smoothHeight":"false"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-flexslider.js?ver=6.4"
            id="fusion-flexslider-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-woo-products.js?ver=7.11.2"
            id="avada-woo-products-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-general-footer.js?ver=7.11.2"
            id="avada-general-footer-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-quantity.js?ver=7.11.2"
            id="avada-quantity-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-crossfade-images.js?ver=7.11.2"
            id="avada-crossfade-images-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-select.js?ver=7.11.2"
            id="avada-select-js"></script>
        <script type="text/javascript" id="avada-live-search-js-extra">
            /* <![CDATA[ */
var avadaLiveSearchVars = {"live_search":"1","ajaxurl":"https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php","no_search_results":"No search results match your query. Please try again","min_char_count":"3","per_page":"30","show_feat_img":"1","display_post_type":"0"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-live-search.js?ver=7.11.2"
            id="avada-live-search-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-alert.js?ver=6.4"
            id="fusion-alert-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/awb-off-canvas.js?ver=3.11.2"
            id="awb-off-canvas-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-button.js?ver=6.4"
            id="fusion-button-js"></script>
        <script type="text/javascript" id="fusion-container-js-extra">
            /* <![CDATA[ */
var fusionContainerVars = {"content_break_point":"800","container_hundred_percent_height_mobile":"0","is_sticky_header_transparent":"0","hundred_percent_scroll_sensitivity":"450"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-container.js?ver=3.11.2"
            id="fusion-container-js"></script>
        <script type="text/javascript" id="avada-drop-down-js-extra">
            /* <![CDATA[ */
var avadaSelectVars = {"avada_drop_down":"1"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-drop-down.js?ver=7.11.2"
            id="avada-drop-down-js"></script>
        <script type="text/javascript" id="avada-to-top-js-extra">
            /* <![CDATA[ */
var avadaToTopVars = {"status_totop":"desktop","totop_position":"right","totop_scroll_down_only":"1"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-to-top.js?ver=7.11.2"
            id="avada-to-top-js"></script>
        <script type="text/javascript" id="avada-header-js-extra">
            /* <![CDATA[ */
var avadaHeaderVars = {"header_position":"top","header_sticky":"1","header_sticky_type2_layout":"menu_only","header_sticky_shadow":"1","side_header_break_point":"1130","header_sticky_mobile":"","header_sticky_tablet":"","mobile_menu_design":"modern","sticky_header_shrinkage":"1","nav_height":"90","nav_highlight_border":"0","nav_highlight_style":"bottombar","logo_margin_top":"28px","logo_margin_bottom":"22px","layout_mode":"wide","header_padding_top":"0px","header_padding_bottom":"0px","scroll_offset":"full"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-header.js?ver=7.11.2"
            id="avada-header-js"></script>
        <script type="text/javascript" id="avada-menu-js-extra">
            /* <![CDATA[ */
var avadaMenuVars = {"site_layout":"wide","header_position":"top","logo_alignment":"left","header_sticky":"1","header_sticky_mobile":"","header_sticky_tablet":"","side_header_break_point":"1130","megamenu_base_width":"custom_width","mobile_menu_design":"modern","dropdown_goto":"Go to...","mobile_nav_cart":"Shopping Cart","mobile_submenu_open":"Open submenu of %s","mobile_submenu_close":"Close submenu of %s","submenu_slideout":"1"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-menu.js?ver=7.11.2"
            id="avada-menu-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/library/bootstrap.scrollspy.js?ver=7.11.2"
            id="bootstrap-scrollspy-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-scrollspy.js?ver=7.11.2"
            id="avada-scrollspy-js"></script>
        <script type="text/javascript" id="avada-woocommerce-js-extra">
            /* <![CDATA[ */
var avadaWooCommerceVars = {"order_actions":"Details","title_style_type":"none","woocommerce_shop_page_columns":"3","woocommerce_checkout_error":"Not all fields have been filled in correctly.","related_products_heading_size":"3","ajaxurl":"https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php","shop_page_bg_color":"#ffffff","shop_page_bg_color_lightness":"100","post_title_font_size":"25"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-woocommerce.js?ver=7.11.2"
            id="avada-woocommerce-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-woo-product-images.js?ver=7.11.2"
            id="avada-woo-product-images-js"></script>
        <script type="text/javascript" id="fusion-responsive-typography-js-extra">
            /* <![CDATA[ */
var fusionTypographyVars = {"site_width":"1225px","typography_sensitivity":"0.60","typography_factor":"1.50","elements":"h1, h2, h3, h4, h5, h6"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-responsive-typography.js?ver=3.11.2"
            id="fusion-responsive-typography-js"></script>
        <script type="text/javascript" id="fusion-scroll-to-anchor-js-extra">
            /* <![CDATA[ */
var fusionScrollToAnchorVars = {"content_break_point":"800","container_hundred_percent_height_mobile":"0","hundred_percent_scroll_sensitivity":"450"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-scroll-to-anchor.js?ver=3.11.2"
            id="fusion-scroll-to-anchor-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-general-global.js?ver=3.11.2"
            id="fusion-general-global-js"></script>
        <script type="text/javascript" id="fusion-video-js-extra">
            /* <![CDATA[ */
var fusionVideoVars = {"status_vimeo":"0"};
/* ]]> */
        </script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-video.js?ver=3.11.2"
            id="fusion-video-js"></script>
        <script type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-column.js?ver=3.11.2"
            id="fusion-column-js"></script>
    </div>

    <section class="to-top-container to-top-right" aria-labelledby="awb-to-top-label">
        <a href="#" id="toTop" class="fusion-top-top-link">
            <span id="awb-to-top-label" class="screen-reader-text">Go to Top</span>
        </a>
    </section>
</body>

@endsection
