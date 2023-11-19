@extends('layouts.front-end.app')
@section('content')




        <title>Shop</title>



        <script type="application/ld+json" class="yoast-schema-graph">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "WebPage",
                        "@id": "https://moonrisecrystals.com/shop/",
                        "url": "https://moonrisecrystals.com/shop/",
                        "name": "Shop",
                        "isPartOf": {
                            "@id": "https://moonrisecrystals.com/#website"
                        },
                        "primaryImageOfPage": {
                            "@id": "https://moonrisecrystals.com/shop/#primaryimage"
                        },
                        "image": {
                            "@id": "https://moonrisecrystals.com/shop/#primaryimage"
                        },
                        "thumbnailUrl": "https://moonrisecrystals.com/wp-content/uploads/Agatized-Coral.jpg",
                        "datePublished": "2021-12-20T19:47:48+00:00",
                        "dateModified": "2023-09-20T02:49:06+00:00",
                        "breadcrumb": {
                            "@id": "https://moonrisecrystals.com/shop/#breadcrumb"
                        },
                        "inLanguage": "en-US",
                        "potentialAction": [
                            {
                                "@type": "ReadAction",
                                "target": ["https://moonrisecrystals.com/shop/"]
                            }
                        ]
                    },
                    {
                        "@type": "ImageObject",
                        "inLanguage": "en-US",
                        "@id": "https://moonrisecrystals.com/shop/#primaryimage",
                        "url": "https://moonrisecrystals.com/wp-content/uploads/Agatized-Coral.jpg",
                        "contentUrl": "https://moonrisecrystals.com/wp-content/uploads/Agatized-Coral.jpg",
                        "width": 1200,
                        "height": 1200,
                        "caption": "Agatized Coral agatized coral"
                    },
                    {
                        "@type": "BreadcrumbList",
                        "@id": "https://moonrisecrystals.com/shop/#breadcrumb",
                        "itemListElement": [
                            {
                                "@type": "ListItem",
                                "position": 1,
                                "name": "Home",
                                "item": "https://moonrisecrystals.com/"
                            },
                            {
                                "@type": "ListItem",
                                "position": 2,
                                "name": "Shop"
                            }
                        ]
                    },
                    {
                        "@type": "WebSite",
                        "@id": "https://moonrisecrystals.com/#website",
                        "url": "https://moonrisecrystals.com/",
                        "name": "Moonrise Crystals",
                        "description": "Ethically Sourced Healing Crystals",
                        "publisher": {
                            "@id": "https://moonrisecrystals.com/#organization"
                        },
                        "potentialAction": [
                            {
                                "@type": "SearchAction",
                                "target": {
                                    "@type": "EntryPoint",
                                    "urlTemplate": "https://moonrisecrystals.com/?s={search_term_string}"
                                },
                                "query-input": "required name=search_term_string"
                            }
                        ],
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "Organization",
                        "@id": "https://moonrisecrystals.com/#organization",
                        "name": "Moonrise Crystals",
                        "url": "https://moonrisecrystals.com/",
                        "logo": {
                            "@type": "ImageObject",
                            "inLanguage": "en-US",
                            "@id": "https://moonrisecrystals.com/#/schema/logo/image/",
                            "url": "https://moonrisecrystals.com/wp-content/uploads/2021/12/Moonrise-Crystals-Ethical-Sourcing-Logo-800.png",
                            "contentUrl": "https://moonrisecrystals.com/wp-content/uploads/2021/12/Moonrise-Crystals-Ethical-Sourcing-Logo-800.png",
                            "width": 800,
                            "height": 120,
                            "caption": "Moonrise Crystals"
                        },
                        "image": {
                            "@id": "https://moonrisecrystals.com/#/schema/logo/image/"
                        },
                        "sameAs": [
                            "https://www.facebook.com/MoonriseCrystals/",
                            "https://www.instagram.com/moonrisecrystals/",
                            "https://www.pinterest.com/moonrisecrystal/_created/"
                        ]
                    }
                ]
            }
        </script>

        
        <link
            rel="stylesheet"
            id="easy-autocomplete-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/easy-autocomplete.min.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="easy-autocomplete-theme-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/easy-autocomplete.themes.min.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woo-gift-cards-lite-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woo-gift-cards-lite/public/css/woocommerce_gift_cards_lite-public.css?ver=2.6.2"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/css/front.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <style id="woof-inline-css" type="text/css">
            .woof_products_top_panel li span,
            .woof_products_top_panel2 li span {
                background: url(https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/img/delete.png);
                background-size: 14px 14px;
                background-repeat: no-repeat;
                background-position: right;
            }
            .woof_edit_view {
                display: none;
            }
            label[for="woof_checkbox_sales"] span {
                margin-left: 5px;
            }

            body .woof_checkbox_count {
                margin-left: 5px;
            }
        </style>
        <link
            rel="stylesheet"
            id="chosen-drop-down-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/chosen/chosen.min.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_by_author_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_author/css/by_author.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_by_backorder_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_backorder/css/by_backorder.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_by_instock_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_instock/css/by_instock.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_by_onsales_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_onsales/css/by_onsales.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_by_sku_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_sku/css/by_sku.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_by_text_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_text/assets/css/front.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_color_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/color/css/html_types/color.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_image_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/image/css/html_types/image.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_label_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/label/css/html_types/label.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_select_hierarchy_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/select_hierarchy/css/html_types/select_hierarchy.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_select_radio_check_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/select_radio_check/css/html_types/select_radio_check.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_slider_html_items-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/slider/css/html_types/slider.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_sd_html_items_checkbox-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/checkbox.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_sd_html_items_radio-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/radio.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_sd_html_items_switcher-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/switcher.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_sd_html_items_color-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/color.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_sd_html_items_tooltip-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/tooltip.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof_sd_html_items_front-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/front.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="woof-switcher23-css"
            href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/css/switcher.css?ver=3.3.4.1"
            type="text/css"
            media="all"
        />
        <style id="woocommerce-inline-inline-css" type="text/css">
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link
            rel="preload"
            as="font"
            type="font/woff2"
            crossorigin="anonymous"
            id="tinvwl-webfont-font-css"
            href="https://moonrisecrystals.com/wp-content/plugins/ti-woocommerce-wishlist/assets/fonts/tinvwl-webfont.woff2?ver=xu2uyi"
            media="all"
        />
        <link
            rel="stylesheet"
            id="tinvwl-webfont-css"
            href="https://moonrisecrystals.com/wp-content/plugins/ti-woocommerce-wishlist/assets/css/webfont.min.css?ver=2.7.4"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="tinvwl-css"
            href="https://moonrisecrystals.com/wp-content/plugins/ti-woocommerce-wishlist/assets/css/public.min.css?ver=2.7.4"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="child-style-css"
            href="https://moonrisecrystals.com/wp-content/themes/Avada-Child-Theme/style.css?ver=6.4"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="cwginstock_frontend_css-css"
            href="https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/css/frontend.min.css?ver=5.0.1"
            type="text/css"
            media=""
        />
        <link
            rel="stylesheet"
            id="cwginstock_bootstrap-css"
            href="https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/css/bootstrap.min.css?ver=5.0.1"
            type="text/css"
            media=""
        />
        <link
            rel="stylesheet"
            id="fusion-dynamic-css-css"
            href="https://moonrisecrystals.com/wp-content/uploads/fusion-styles/ec5ca128ccfc9322b1f727b7fe6d8f32.min.css?ver=3.11.2"
            type="text/css"
            media="all"
        />
        <script
            type="text/javascript"
            src="https://moonrisecrystals.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
            id="jquery-core-js"
        ></script>
        <script
            type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/jquery.easy-autocomplete.min.js?ver=3.3.4.1"
            id="easy-autocomplete-js"
        ></script>
        <script type="text/javascript" id="woof-husky-js-extra">
            /* <![CDATA[ */
            var woof_husky_txt = {
                ajax_url:
                    "https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php",
                plugin_uri:
                    "https:\/\/moonrisecrystals.com\/wp-content\/plugins\/woocommerce-products-filter\/ext\/by_text\/",
                loader: "https:\/\/moonrisecrystals.com\/wp-content\/plugins\/woocommerce-products-filter\/ext\/by_text\/assets\/img\/ajax-loader.gif",
                not_found: "Nothing found!",
                prev: "Prev",
                next: "Next",
                site_link: "https:\/\/moonrisecrystals.com",
                default_data: {
                    placeholder: "",
                    behavior: "title",
                    search_by_full_word: "0",
                    autocomplete: 1,
                    how_to_open_links: "0",
                    taxonomy_compatibility: "0",
                    sku_compatibility: "0",
                    custom_fields: "",
                    search_desc_variant: "0",
                    view_text_length: "10",
                    min_symbols: "3",
                    max_posts: "10",
                    image: "",
                    notes_for_customer: "",
                    template: "",
                    max_open_height: "300",
                    page: 0,
                },
            };
            /* ]]> */
        </script>
        <script
            type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_text/assets/js/husky.js?ver=3.3.4.1"
            id="woof-husky-js"
        ></script>
        <script
            type="text/javascript"
            src="https://moonrisecrystals.com/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-woocommerce-enhanced.js?ver=1.18.1"
            id="gtm4wp-woocommerce-enhanced-js"
        ></script>
        <link
            rel="https://api.w.org/"
            href="https://moonrisecrystals.com/wp-json/"
        />
        <link
            rel="EditURI"
            type="application/rsd+xml"
            title="RSD"
            href="https://moonrisecrystals.com/xmlrpc.php?rsd"
        />

        <!-- Google Tag Manager for WordPress by gtm4wp.com -->
        <!-- GTM Container placement set to footer -->

        <!-- End Google Tag Manager -->
        <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
        <link
            rel="preload"
            href="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/fonts/icomoon/awb-icons.woff"
            as="font"
            type="font/woff"
            crossorigin
        />
        <link
            rel="preload"
            href="//moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-brands-400.woff2"
            as="font"
            type="font/woff2"
            crossorigin
        />
        <link
            rel="preload"
            href="//moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-regular-400.woff2"
            as="font"
            type="font/woff2"
            crossorigin
        />
        <link
            rel="preload"
            href="//moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/webfonts/fa-solid-900.woff2"
            as="font"
            type="font/woff2"
            crossorigin
        />
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
        </style>
        <noscript
            ><style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style></noscript
        >
        <script id="nitro-telemetry-meta" nitro-exclude>
            window.NPTelemetryMetadata = {
                missReason: !window.NITROPACK_STATE ? "items in cart" : "hit",
                pageType: "archive",
            };
        </script>
        <script id="nitro-telemetry">
            (function () {
                var webVitals = (function (e) {
                    "use strict";
                    var t,
                        n,
                        r,
                        i,
                        a,
                        o = function () {
                            return (
                                window.performance &&
                                performance.getEntriesByType &&
                                performance.getEntriesByType("navigation")[0]
                            );
                        },
                        u = function (e) {
                            if ("loading" === document.readyState)
                                return "loading";
                            var t = o();
                            if (t) {
                                if (e < t.domInteractive) return "loading";
                                if (
                                    0 === t.domContentLoadedEventStart ||
                                    e < t.domContentLoadedEventStart
                                )
                                    return "dom-interactive";
                                if (0 === t.domComplete || e < t.domComplete)
                                    return "dom-content-loaded";
                            }
                            return "complete";
                        },
                        c = function (e) {
                            var t = e.nodeName;
                            return 1 === e.nodeType
                                ? t.toLowerCase()
                                : t.toUpperCase().replace(/^#/, "");
                        },
                        s = function (e, t) {
                            var n = "";
                            try {
                                for (; e && 9 !== e.nodeType; ) {
                                    var r = e,
                                        i = r.id
                                            ? "#" + r.id
                                            : c(r) +
                                              (r.classList &&
                                              r.classList.value &&
                                              r.classList.value.trim() &&
                                              r.classList.value.trim().length
                                                  ? "." +
                                                    r.classList.value
                                                        .trim()
                                                        .replace(/\s+/g, ".")
                                                  : "");
                                    if (n.length + i.length > (t || 100) - 1)
                                        return n || i;
                                    if (((n = n ? i + ">" + n : i), r.id))
                                        break;
                                    e = r.parentNode;
                                }
                            } catch (e) {}
                            return n;
                        },
                        f = -1,
                        d = function () {
                            return f;
                        },
                        l = function (e) {
                            addEventListener(
                                "pageshow",
                                function (t) {
                                    t.persisted && ((f = t.timeStamp), e(t));
                                },
                                !0
                            );
                        },
                        m = function () {
                            var e = o();
                            return (e && e.activationStart) || 0;
                        },
                        v = function (e, t) {
                            var n = o(),
                                r = "navigate";
                            d() >= 0
                                ? (r = "back-forward-cache")
                                : n &&
                                  (document.prerendering || m() > 0
                                      ? (r = "prerender")
                                      : document.wasDiscarded
                                      ? (r = "restore")
                                      : n.type &&
                                        (r = n.type.replace(/_/g, "-")));
                            return {
                                name: e,
                                value: void 0 === t ? -1 : t,
                                rating: "good",
                                delta: 0,
                                entries: [],
                                id: "v3-"
                                    .concat(Date.now(), "-")
                                    .concat(
                                        Math.floor(
                                            8999999999999 * Math.random()
                                        ) + 1e12
                                    ),
                                navigationType: r,
                            };
                        },
                        p = function (e, t, n) {
                            try {
                                if (
                                    PerformanceObserver.supportedEntryTypes.includes(
                                        e
                                    )
                                ) {
                                    var r = new PerformanceObserver(function (
                                        e
                                    ) {
                                        Promise.resolve().then(function () {
                                            t(e.getEntries());
                                        });
                                    });
                                    return (
                                        r.observe(
                                            Object.assign(
                                                { type: e, buffered: !0 },
                                                n || {}
                                            )
                                        ),
                                        r
                                    );
                                }
                            } catch (e) {}
                        },
                        h = function (e, t, n, r) {
                            var i, a;
                            return function (o) {
                                t.value >= 0 &&
                                    (o || r) &&
                                    ((a = t.value - (i || 0)) ||
                                        void 0 === i) &&
                                    ((i = t.value),
                                    (t.delta = a),
                                    (t.rating = (function (e, t) {
                                        return e > t[1]
                                            ? "poor"
                                            : e > t[0]
                                            ? "needs-improvement"
                                            : "good";
                                    })(t.value, n)),
                                    e(t));
                            };
                        },
                        g = function (e) {
                            requestAnimationFrame(function () {
                                return requestAnimationFrame(function () {
                                    return e();
                                });
                            });
                        },
                        T = function (e) {
                            var t = function (t) {
                                ("pagehide" !== t.type &&
                                    "hidden" !== document.visibilityState) ||
                                    e(t);
                            };
                            addEventListener("visibilitychange", t, !0),
                                addEventListener("pagehide", t, !0);
                        },
                        y = function (e) {
                            var t = !1;
                            return function (n) {
                                t || (e(n), (t = !0));
                            };
                        },
                        E = -1,
                        S = function () {
                            return "hidden" !== document.visibilityState ||
                                document.prerendering
                                ? 1 / 0
                                : 0;
                        },
                        L = function (e) {
                            "hidden" === document.visibilityState &&
                                E > -1 &&
                                ((E =
                                    "visibilitychange" === e.type
                                        ? e.timeStamp
                                        : 0),
                                b());
                        },
                        C = function () {
                            addEventListener("visibilitychange", L, !0),
                                addEventListener("prerenderingchange", L, !0);
                        },
                        b = function () {
                            removeEventListener("visibilitychange", L, !0),
                                removeEventListener(
                                    "prerenderingchange",
                                    L,
                                    !0
                                );
                        },
                        w = function () {
                            return (
                                E < 0 &&
                                    ((E = S()),
                                    C(),
                                    l(function () {
                                        setTimeout(function () {
                                            (E = S()), C();
                                        }, 0);
                                    })),
                                {
                                    get firstHiddenTime() {
                                        return E;
                                    },
                                }
                            );
                        },
                        F = function (e) {
                            document.prerendering
                                ? addEventListener(
                                      "prerenderingchange",
                                      function () {
                                          return e();
                                      },
                                      !0
                                  )
                                : e();
                        },
                        M = [1800, 3e3],
                        P = function (e, t) {
                            (t = t || {}),
                                F(function () {
                                    var n,
                                        r = w(),
                                        i = v("FCP"),
                                        a = p("paint", function (e) {
                                            e.forEach(function (e) {
                                                "first-contentful-paint" ===
                                                    e.name &&
                                                    (a.disconnect(),
                                                    e.startTime <
                                                        r.firstHiddenTime &&
                                                        ((i.value = Math.max(
                                                            e.startTime - m(),
                                                            0
                                                        )),
                                                        i.entries.push(e),
                                                        n(!0)));
                                            });
                                        });
                                    a &&
                                        ((n = h(e, i, M, t.reportAllChanges)),
                                        l(function (r) {
                                            (i = v("FCP")),
                                                (n = h(
                                                    e,
                                                    i,
                                                    M,
                                                    t.reportAllChanges
                                                )),
                                                g(function () {
                                                    (i.value =
                                                        performance.now() -
                                                        r.timeStamp),
                                                        n(!0);
                                                });
                                        }));
                                });
                        },
                        I = [0.1, 0.25],
                        A = { passive: !0, capture: !0 },
                        x = new Date(),
                        B = function (e, i) {
                            t ||
                                ((t = i),
                                (n = e),
                                (r = new Date()),
                                R(removeEventListener),
                                D());
                        },
                        D = function () {
                            if (n >= 0 && n < r - x) {
                                var e = {
                                    entryType: "first-input",
                                    name: t.type,
                                    target: t.target,
                                    cancelable: t.cancelable,
                                    startTime: t.timeStamp,
                                    processingStart: t.timeStamp + n,
                                };
                                i.forEach(function (t) {
                                    t(e);
                                }),
                                    (i = []);
                            }
                        },
                        k = function (e) {
                            if (e.cancelable) {
                                var t =
                                    (e.timeStamp > 1e12
                                        ? new Date()
                                        : performance.now()) - e.timeStamp;
                                "pointerdown" == e.type
                                    ? (function (e, t) {
                                          var n = function () {
                                                  B(e, t), i();
                                              },
                                              r = function () {
                                                  i();
                                              },
                                              i = function () {
                                                  removeEventListener(
                                                      "pointerup",
                                                      n,
                                                      A
                                                  ),
                                                      removeEventListener(
                                                          "pointercancel",
                                                          r,
                                                          A
                                                      );
                                              };
                                          addEventListener("pointerup", n, A),
                                              addEventListener(
                                                  "pointercancel",
                                                  r,
                                                  A
                                              );
                                      })(t, e)
                                    : B(t, e);
                            }
                        },
                        R = function (e) {
                            [
                                "mousedown",
                                "keydown",
                                "touchstart",
                                "pointerdown",
                            ].forEach(function (t) {
                                return e(t, k, A);
                            });
                        },
                        q = [100, 300],
                        N = function (e, r) {
                            (r = r || {}),
                                F(function () {
                                    var a,
                                        o = w(),
                                        u = v("FID"),
                                        c = function (e) {
                                            e.startTime < o.firstHiddenTime &&
                                                ((u.value =
                                                    e.processingStart -
                                                    e.startTime),
                                                u.entries.push(e),
                                                a(!0));
                                        },
                                        s = function (e) {
                                            e.forEach(c);
                                        },
                                        f = p("first-input", s);
                                    (a = h(e, u, q, r.reportAllChanges)),
                                        f &&
                                            T(
                                                y(function () {
                                                    s(f.takeRecords()),
                                                        f.disconnect();
                                                })
                                            ),
                                        f &&
                                            l(function () {
                                                var o;
                                                (u = v("FID")),
                                                    (a = h(
                                                        e,
                                                        u,
                                                        q,
                                                        r.reportAllChanges
                                                    )),
                                                    (i = []),
                                                    (n = -1),
                                                    (t = null),
                                                    R(addEventListener),
                                                    (o = c),
                                                    i.push(o),
                                                    D();
                                            });
                                });
                        },
                        H = 0,
                        O = 1 / 0,
                        _ = 0,
                        j = function (e) {
                            e.forEach(function (e) {
                                e.interactionId &&
                                    ((O = Math.min(O, e.interactionId)),
                                    (_ = Math.max(_, e.interactionId)),
                                    (H = _ ? (_ - O) / 7 + 1 : 0));
                            });
                        },
                        V = function () {
                            return a ? H : performance.interactionCount || 0;
                        },
                        U = function () {
                            "interactionCount" in performance ||
                                a ||
                                (a = p("event", j, {
                                    type: "event",
                                    buffered: !0,
                                    durationThreshold: 0,
                                }));
                        },
                        z = [200, 500],
                        G = 0,
                        J = function () {
                            return V() - G;
                        },
                        K = [],
                        Q = {},
                        W = function (e) {
                            var t = K[K.length - 1],
                                n = Q[e.interactionId];
                            if (n || K.length < 10 || e.duration > t.latency) {
                                if (n)
                                    n.entries.push(e),
                                        (n.latency = Math.max(
                                            n.latency,
                                            e.duration
                                        ));
                                else {
                                    var r = {
                                        id: e.interactionId,
                                        latency: e.duration,
                                        entries: [e],
                                    };
                                    (Q[r.id] = r), K.push(r);
                                }
                                K.sort(function (e, t) {
                                    return t.latency - e.latency;
                                }),
                                    K.splice(10).forEach(function (e) {
                                        delete Q[e.id];
                                    });
                            }
                        },
                        X = function (e, t) {
                            (t = t || {}),
                                F(function () {
                                    var n;
                                    U();
                                    var r,
                                        i = v("INP"),
                                        a = function (e) {
                                            e.forEach(function (e) {
                                                (e.interactionId && W(e),
                                                "first-input" ===
                                                    e.entryType) &&
                                                    !K.some(function (t) {
                                                        return t.entries.some(
                                                            function (t) {
                                                                return (
                                                                    e.duration ===
                                                                        t.duration &&
                                                                    e.startTime ===
                                                                        t.startTime
                                                                );
                                                            }
                                                        );
                                                    }) &&
                                                    W(e);
                                            });
                                            var t,
                                                n =
                                                    ((t = Math.min(
                                                        K.length - 1,
                                                        Math.floor(J() / 50)
                                                    )),
                                                    K[t]);
                                            n &&
                                                n.latency !== i.value &&
                                                ((i.value = n.latency),
                                                (i.entries = n.entries),
                                                r());
                                        },
                                        o = p("event", a, {
                                            durationThreshold:
                                                null !==
                                                    (n = t.durationThreshold) &&
                                                void 0 !== n
                                                    ? n
                                                    : 40,
                                        });
                                    (r = h(e, i, z, t.reportAllChanges)),
                                        o &&
                                            ("interactionId" in
                                                PerformanceEventTiming.prototype &&
                                                o.observe({
                                                    type: "first-input",
                                                    buffered: !0,
                                                }),
                                            T(function () {
                                                a(o.takeRecords()),
                                                    i.value < 0 &&
                                                        J() > 0 &&
                                                        ((i.value = 0),
                                                        (i.entries = [])),
                                                    r(!0);
                                            }),
                                            l(function () {
                                                (K = []),
                                                    (G = V()),
                                                    (i = v("INP")),
                                                    (r = h(
                                                        e,
                                                        i,
                                                        z,
                                                        t.reportAllChanges
                                                    ));
                                            }));
                                });
                        },
                        Y = [2500, 4e3],
                        Z = {},
                        $ = [800, 1800],
                        ee = function e(t) {
                            document.prerendering
                                ? F(function () {
                                      return e(t);
                                  })
                                : "complete" !== document.readyState
                                ? addEventListener(
                                      "load",
                                      function () {
                                          return e(t);
                                      },
                                      !0
                                  )
                                : setTimeout(t, 0);
                        },
                        te = function (e, t) {
                            t = t || {};
                            var n = v("TTFB"),
                                r = h(e, n, $, t.reportAllChanges);
                            ee(function () {
                                var i = o();
                                if (i) {
                                    var a = i.responseStart;
                                    if (a <= 0 || a > performance.now()) return;
                                    (n.value = Math.max(a - m(), 0)),
                                        (n.entries = [i]),
                                        r(!0),
                                        l(function () {
                                            (n = v("TTFB", 0)),
                                                (r = h(
                                                    e,
                                                    n,
                                                    $,
                                                    t.reportAllChanges
                                                ))(!0);
                                        });
                                }
                            });
                        };
                    return (
                        (e.CLSThresholds = I),
                        (e.FCPThresholds = M),
                        (e.FIDThresholds = q),
                        (e.INPThresholds = z),
                        (e.LCPThresholds = Y),
                        (e.TTFBThresholds = $),
                        (e.onCLS = function (e, t) {
                            !(function (e, t) {
                                (t = t || {}),
                                    P(
                                        y(function () {
                                            var n,
                                                r = v("CLS", 0),
                                                i = 0,
                                                a = [],
                                                o = function (e) {
                                                    e.forEach(function (e) {
                                                        if (!e.hadRecentInput) {
                                                            var t = a[0],
                                                                n =
                                                                    a[
                                                                        a.length -
                                                                            1
                                                                    ];
                                                            i &&
                                                            e.startTime -
                                                                n.startTime <
                                                                1e3 &&
                                                            e.startTime -
                                                                t.startTime <
                                                                5e3
                                                                ? ((i +=
                                                                      e.value),
                                                                  a.push(e))
                                                                : ((i =
                                                                      e.value),
                                                                  (a = [e]));
                                                        }
                                                    }),
                                                        i > r.value &&
                                                            ((r.value = i),
                                                            (r.entries = a),
                                                            n());
                                                },
                                                u = p("layout-shift", o);
                                            u &&
                                                ((n = h(
                                                    e,
                                                    r,
                                                    I,
                                                    t.reportAllChanges
                                                )),
                                                T(function () {
                                                    o(u.takeRecords()), n(!0);
                                                }),
                                                l(function () {
                                                    (i = 0),
                                                        (r = v("CLS", 0)),
                                                        (n = h(
                                                            e,
                                                            r,
                                                            I,
                                                            t.reportAllChanges
                                                        )),
                                                        g(function () {
                                                            return n();
                                                        });
                                                }),
                                                setTimeout(n, 0));
                                        })
                                    );
                            })(function (t) {
                                !(function (e) {
                                    if (e.entries.length) {
                                        var t = e.entries.reduce(function (
                                            e,
                                            t
                                        ) {
                                            return e && e.value > t.value
                                                ? e
                                                : t;
                                        });
                                        if (
                                            t &&
                                            t.sources &&
                                            t.sources.length
                                        ) {
                                            var n =
                                                (r = t.sources).find(function (
                                                    e
                                                ) {
                                                    return (
                                                        e.node &&
                                                        1 === e.node.nodeType
                                                    );
                                                }) || r[0];
                                            if (n)
                                                return void (e.attribution = {
                                                    largestShiftTarget: s(
                                                        n.node
                                                    ),
                                                    largestShiftTime:
                                                        t.startTime,
                                                    largestShiftValue: t.value,
                                                    largestShiftSource: n,
                                                    largestShiftEntry: t,
                                                    loadState: u(t.startTime),
                                                });
                                        }
                                    }
                                    var r;
                                    e.attribution = {};
                                })(t),
                                    e(t);
                            }, t);
                        }),
                        (e.onFCP = function (e, t) {
                            P(function (t) {
                                !(function (e) {
                                    if (e.entries.length) {
                                        var t = o(),
                                            n = e.entries[e.entries.length - 1];
                                        if (t) {
                                            var r = t.activationStart || 0,
                                                i = Math.max(
                                                    0,
                                                    t.responseStart - r
                                                );
                                            return void (e.attribution = {
                                                timeToFirstByte: i,
                                                firstByteToFCP: e.value - i,
                                                loadState: u(
                                                    e.entries[0].startTime
                                                ),
                                                navigationEntry: t,
                                                fcpEntry: n,
                                            });
                                        }
                                    }
                                    e.attribution = {
                                        timeToFirstByte: 0,
                                        firstByteToFCP: e.value,
                                        loadState: u(d()),
                                    };
                                })(t),
                                    e(t);
                            }, t);
                        }),
                        (e.onFID = function (e, t) {
                            N(function (t) {
                                !(function (e) {
                                    var t = e.entries[0];
                                    e.attribution = {
                                        eventTarget: s(t.target),
                                        eventType: t.name,
                                        eventTime: t.startTime,
                                        eventEntry: t,
                                        loadState: u(t.startTime),
                                    };
                                })(t),
                                    e(t);
                            }, t);
                        }),
                        (e.onINP = function (e, t) {
                            X(function (t) {
                                !(function (e) {
                                    if (e.entries.length) {
                                        var t = e.entries.sort(function (e, t) {
                                            return (
                                                t.duration - e.duration ||
                                                t.processingEnd -
                                                    t.processingStart -
                                                    (e.processingEnd -
                                                        e.processingStart)
                                            );
                                        })[0];
                                        e.attribution = {
                                            eventTarget: s(t.target),
                                            eventType: t.name,
                                            eventTime: t.startTime,
                                            eventEntry: t,
                                            loadState: u(t.startTime),
                                        };
                                    } else e.attribution = {};
                                })(t),
                                    e(t);
                            }, t);
                        }),
                        (e.onLCP = function (e, t) {
                            !(function (e, t) {
                                (t = t || {}),
                                    F(function () {
                                        var n,
                                            r = w(),
                                            i = v("LCP"),
                                            a = function (e) {
                                                var t = e[e.length - 1];
                                                t &&
                                                    t.startTime <
                                                        r.firstHiddenTime &&
                                                    ((i.value = Math.max(
                                                        t.startTime - m(),
                                                        0
                                                    )),
                                                    (i.entries = [t]),
                                                    n());
                                            },
                                            o = p(
                                                "largest-contentful-paint",
                                                a
                                            );
                                        if (o) {
                                            n = h(e, i, Y, t.reportAllChanges);
                                            var u = y(function () {
                                                Z[i.id] ||
                                                    (a(o.takeRecords()),
                                                    o.disconnect(),
                                                    (Z[i.id] = !0),
                                                    n(!0));
                                            });
                                            ["keydown", "click"].forEach(
                                                function (e) {
                                                    addEventListener(
                                                        e,
                                                        function () {
                                                            return setTimeout(
                                                                u,
                                                                0
                                                            );
                                                        },
                                                        !0
                                                    );
                                                }
                                            ),
                                                T(u),
                                                l(function (r) {
                                                    (i = v("LCP")),
                                                        (n = h(
                                                            e,
                                                            i,
                                                            Y,
                                                            t.reportAllChanges
                                                        )),
                                                        g(function () {
                                                            (i.value =
                                                                performance.now() -
                                                                r.timeStamp),
                                                                (Z[i.id] = !0),
                                                                n(!0);
                                                        });
                                                });
                                        }
                                    });
                            })(function (t) {
                                !(function (e) {
                                    if (e.entries.length) {
                                        var t = o();
                                        if (t) {
                                            var n = t.activationStart || 0,
                                                r =
                                                    e.entries[
                                                        e.entries.length - 1
                                                    ],
                                                i =
                                                    r.url &&
                                                    performance
                                                        .getEntriesByType(
                                                            "resource"
                                                        )
                                                        .filter(function (e) {
                                                            return (
                                                                e.name === r.url
                                                            );
                                                        })[0],
                                                a = Math.max(
                                                    0,
                                                    t.responseStart - n
                                                ),
                                                u = Math.max(
                                                    a,
                                                    i
                                                        ? (i.requestStart ||
                                                              i.startTime) - n
                                                        : 0
                                                ),
                                                c = Math.max(
                                                    u,
                                                    i ? i.responseEnd - n : 0
                                                ),
                                                f = Math.max(
                                                    c,
                                                    r ? r.startTime - n : 0
                                                ),
                                                d = {
                                                    element: s(r.element),
                                                    timeToFirstByte: a,
                                                    resourceLoadDelay: u - a,
                                                    resourceLoadTime: c - u,
                                                    elementRenderDelay: f - c,
                                                    navigationEntry: t,
                                                    lcpEntry: r,
                                                };
                                            return (
                                                r.url && (d.url = r.url),
                                                i && (d.lcpResourceEntry = i),
                                                void (e.attribution = d)
                                            );
                                        }
                                    }
                                    e.attribution = {
                                        timeToFirstByte: 0,
                                        resourceLoadDelay: 0,
                                        resourceLoadTime: 0,
                                        elementRenderDelay: e.value,
                                    };
                                })(t),
                                    e(t);
                            }, t);
                        }),
                        (e.onTTFB = function (e, t) {
                            te(function (t) {
                                !(function (e) {
                                    if (e.entries.length) {
                                        var t = e.entries[0],
                                            n = t.activationStart || 0,
                                            r = Math.max(
                                                t.domainLookupStart - n,
                                                0
                                            ),
                                            i = Math.max(t.connectStart - n, 0),
                                            a = Math.max(t.requestStart - n, 0);
                                        e.attribution = {
                                            waitingTime: r,
                                            dnsTime: i - r,
                                            connectionTime: a - i,
                                            requestTime: e.value - a,
                                            navigationEntry: t,
                                        };
                                    } else
                                        e.attribution = {
                                            waitingTime: 0,
                                            dnsTime: 0,
                                            connectionTime: 0,
                                            requestTime: 0,
                                        };
                                })(t),
                                    e(t);
                            }, t);
                        }),
                        Object.defineProperty(e, "__esModule", { value: !0 }),
                        e
                    );
                })({});
                var nitroTelemetry = (function () {
                    let A = !!window.IS_NITROPACK;
                    let a = performance.getEntriesByType("navigation")[0];
                    let o = document.prerendering || a?.activationStart > 0;
                    let e = !o && a.responseStart - a.requestStart <= 5;
                    let t = true;
                    let l = false;
                    let n = null;
                    let r = null;
                    let i = null;
                    let c = o ? "_prr" : e ? "_pre" : "_dow";
                    let u = "https://to.getnitropack.com/";
                    let j = "yhFRSzwhyHaKZOIOsRGVmHbaFTltymOf";
                    let F = "na";
                    let s = y();
                    let f = typeof NPRL != "undefined";
                    let d = f ? "loadNitro" : "load";
                    let p;
                    let g;
                    let w;
                    let S;
                    let h;
                    let v;
                    let V = ["missReason", "pageType"];
                    let m = 0;
                    function y() {
                        return (
                            "NPTelemetry:" +
                            btoa(Date.now()) +
                            "_" +
                            F +
                            "_" +
                            q() +
                            (A ? "_o" : "_u")
                        );
                    }
                    function b() {
                        return document.visibilityState === "visible";
                    }
                    function E() {
                        t = true;
                        s = y();
                        p = null;
                        g = { crux: null };
                        N();
                        S = null;
                        h = null;
                        v = {};
                        m = 0;
                    }
                    function N() {
                        w = {
                            sessionEntry: null,
                            unknown: 0,
                            afterStyles: 0,
                            afterPageLoad: 0,
                            afterScroll: 0,
                            total: 0,
                        };
                    }
                    function J() {
                        let n = performance.getEntriesByType("navigation");
                        let r = {};
                        let a = {
                            navigate: 0,
                            reload: 1,
                            back_forward: 2,
                            prerender: 3,
                        };
                        for (let t in n) {
                            let e = n[t];
                            if (!e.activationStart) {
                                e.activationStart = 0;
                            }
                            r = {
                                ttfb: Math.round(
                                    e.responseStart - e.connectEnd
                                ),
                                "ttfb:crux": Math.round(
                                    Math.max(
                                        e.responseStart - e.activationStart,
                                        0
                                    )
                                ),
                                netDns: Math.round(
                                    e.domainLookupEnd - e.domainLookupStart
                                ),
                                netInitialCon: Math.round(
                                    e.connectEnd - e.connectStart
                                ),
                                netSsl: Math.round(
                                    e.requestStart - e.secureConnectionStart
                                ),
                                netContentDown: Math.round(
                                    e.responseEnd - e.responseStart
                                ),
                                netWorkerDuration: e.workerStart
                                    ? Math.round(e.fetchStart - e.workerStart)
                                    : null,
                                netStalled: Math.round(
                                    e.domainLookupStart - e.fetchStart
                                ),
                                netNavType: a.hasOwnProperty(e.type)
                                    ? a[e.type]
                                    : -1,
                                netRedirectTime: Math.round(
                                    e.redirectEnd - e.redirectStart
                                ),
                                netRedirectCount: e.redirectCount,
                                netRedirectReferrer: e.redirectCount
                                    ? document.referrer
                                    : null,
                            };
                        }
                        return r;
                    }
                    function q() {
                        if (navigator.connection) {
                            return navigator.connection.effectiveType;
                        } else {
                            return "u";
                        }
                    }
                    function C() {
                        let e = s + ":pageview";
                        T(e, { pv: 1 });
                    }
                    function B() {
                        let e = {};
                        const t = a.notRestoredReasons;
                        if (t === null) {
                            e.bfCacheEligible = 1;
                        } else if (t === undefined) {
                            e.bfCacheEligible = -1;
                        } else if (t) {
                            e.bfCacheEligible = t.blocked ? 0 : 1;
                            e.bfCacheNotEligibleReason = t.reasons
                                ? JSON.stringify(t.reasons)
                                : "";
                        }
                        T(s + ":backForwardCache", e);
                    }
                    function K() {
                        if (typeof NPTelemetryMetadata === "object") {
                            for (let e in NPTelemetryMetadata) {
                                if (V.indexOf(e) === -1) {
                                    delete NPTelemetryMetadata[e];
                                }
                            }
                            let e = s + ":metadata";
                            T(e, { metaData: NPTelemetryMetadata });
                        }
                    }
                    function W() {
                        if (window.localStorage) {
                            let e = "NPTelemetryMeta:lastpv";
                            let t = parseInt(localStorage.getItem(e));
                            let n = Date.now();
                            localStorage.setItem(e, n);
                            return isNaN(t) || t === 0 ? -1 : (n - t) / 1e3;
                        }
                        return null;
                    }
                    function T(e, t) {
                        t.url = window.location.href.replace(
                            window.location.hash,
                            ""
                        );
                        if (window.localStorage) {
                            localStorage.setItem(e, JSON.stringify(t));
                        } else {
                            L([t]);
                        }
                    }
                    function k(e) {
                        if (!window.localStorage) return;
                        let n = null;
                        let r = {};
                        let t = 0;
                        let a;
                        let o;
                        let i;
                        do {
                            n = localStorage.key(t);
                            if (n && n.indexOf("NPTelemetry:") === 0) {
                                i = n.split(":")[1];
                                a = JSON.parse(localStorage.getItem(n));
                                if (!r[i]) r[i] = {};
                                let t = r[i];
                                for (let e in a) {
                                    o = a[e];
                                    if (o !== null) {
                                        if (
                                            [
                                                "url",
                                                "metaData",
                                                "prefetchInitiator",
                                                "ecStatus",
                                                "ecCountry",
                                                "bfCacheNotEligibleReason",
                                                "inp:details",
                                                "netRedirectReferrer",
                                            ].includes(e)
                                        ) {
                                            t[e] = o;
                                        } else if (G(o)) {
                                            if (!t[e]) t[e] = 0;
                                            t[e] += o;
                                        } else if (H(o)) {
                                            if (!t[e]) t[e] = {};
                                            if (!t[e][o]) t[e][o] = 0;
                                            t[e][o]++;
                                        }
                                    }
                                }
                                localStorage.removeItem(n);
                            } else {
                                t++;
                            }
                        } while (n !== null);
                        if (Object.keys(r).length) {
                            L(r);
                        }
                        l = false;
                    }
                    function G(e) {
                        return !isNaN(parseFloat(e)) && isFinite(e);
                    }
                    function H(e) {
                        return typeof e === "string" || e instanceof String;
                    }
                    function L(n) {
                        let e = new FormData();
                        e.append("key", j);
                        if (Object.keys(n).length) {
                            let t = {};
                            for (let e in n) {
                                t[e + c] = n[e];
                            }
                            e.append("props", JSON.stringify(t));
                            (navigator.sendBeacon &&
                                navigator.sendBeacon(u, e)) ||
                                fetch(u, {
                                    body: e,
                                    method: "POST",
                                    keepalive: true,
                                });
                        }
                    }
                    function M(e) {
                        if (e === k) {
                            if (l) {
                                return;
                            } else {
                                l = true;
                            }
                        }
                        if (window.requestIdleCallback) {
                            requestIdleCallback(e, { timeout: 1e3 });
                        } else {
                            setTimeout(e, 1e3);
                        }
                    }
                    function U() {
                        let e = s + ":cwv";
                        let t = {};
                        if (g.crux) {
                            t["lcp:crux"] = Math.round(g.crux);
                        }
                        if (w.total !== null) {
                            let e = 1e3;
                            t["cls:total"] = Math.round(w.total * e);
                            if (w.afterStyles) {
                                t["cls:afterStylesDelta"] = Math.round(
                                    w.afterStyles * e
                                );
                            }
                            if (w.afterPageLoad) {
                                t["cls:afterPageLoadDelta"] = Math.round(
                                    w.afterPageLoad * e
                                );
                            }
                            if (w.afterScroll) {
                                t["cls:afterScrollDelta"] = Math.round(
                                    w.afterScroll * e
                                );
                            }
                            if (w.unknown) {
                                t["cls:unknownDelta"] = Math.round(
                                    w.unknown * e
                                );
                            }
                        } else {
                            t["cls:total"] = 0;
                        }
                        if (p) {
                            t["fid"] = Math.round(p);
                        }
                        if (h) {
                            t["fcp"] = Math.round(h);
                        }
                        if (S) {
                            t["inp"] = Math.round(S);
                        }
                        if (v) {
                            t["inp:details"] = v;
                        }
                        if (Object.keys(t).length) {
                            T(e, t);
                        }
                    }
                    function Y() {
                        T(s + ":clicks", { clicks: m });
                    }
                    function O() {
                        n = Date.now();
                        window.removeEventListener(
                            "NitroStylesLoaded",
                            O,
                            true
                        );
                    }
                    function D() {
                        r = Date.now();
                        window.removeEventListener(d, D, true);
                    }
                    function z() {
                        i = Date.now();
                    }
                    function P(e) {
                        return n && Date.now() - n < e;
                    }
                    function I(e) {
                        return r && Date.now() - r < e;
                    }
                    function R(e) {
                        return i && Date.now() - i < e;
                    }
                    function Q() {
                        let t = {};
                        let n = "NONE";
                        if (o || e) {
                            n = "UNKNOWN";
                        }
                        let r = JSON.parse(
                            window.sessionStorage.getItem(
                                "nitro_prefetched_urls"
                            )
                        );
                        if (r !== null) {
                            window.sessionStorage.removeItem(
                                "nitro_prefetched_urls"
                            );
                            let e = window.location.href;
                            if (r[e]) {
                                n = r[e].initiator;
                            }
                            t.prefetchCount = Object.entries(r).length;
                        }
                        t.prefetchInitiator = n;
                        T(s + ":pagePrefetches", t);
                    }
                    function X() {
                        if (!a.serverTiming || !a.serverTiming.length) {
                            return;
                        }
                        let e = {};
                        for (const {
                            name: t,
                            description: n,
                            duration: r,
                        } of a.serverTiming) {
                            switch (t) {
                                case "nitro-ec-status":
                                    e.ecStatus = n;
                                    break;
                                case "nitro-ec-read-config":
                                    e.ecReadConfigDuration = r;
                                    break;
                                case "nitro-ec-read-cache":
                                    e.ecReadCacheDuration = r;
                                    break;
                                case "nitro-ec-country":
                                    e.ecCountry = n;
                                    break;
                            }
                        }
                        T(s + ":edgeCache", e);
                    }
                    E();
                    window.addEventListener(d, D, true);
                    document.addEventListener("scroll", z, {
                        capture: true,
                        passive: true,
                    });
                    if (f) {
                        window.addEventListener("NitroStylesLoaded", O, true);
                    }
                    function _() {
                        let e = J();
                        let t = W();
                        K();
                        Q();
                        X();
                        Object.assign(e, { lastNavDiff: t });
                        T(s + ":net", e);
                    }
                    function x() {
                        C();
                        B();
                        M(k);
                        t = false;
                    }
                    window.addEventListener(
                        "load",
                        function (e) {
                            if (o) {
                                return;
                            }
                            _();
                        },
                        true
                    );
                    window.addEventListener(
                        "pageshow",
                        function (e) {
                            c = e.persisted ? "_bfr" : c;
                            if (o) {
                                return;
                            }
                            if (b() && (t || e.persisted)) {
                                x();
                            }
                        },
                        true
                    );
                    window.addEventListener(
                        "pagehide",
                        function (e) {
                            U();
                            E();
                            k();
                        },
                        true
                    );
                    document.addEventListener(
                        "prerenderingchange",
                        function (e) {
                            _();
                            x();
                        },
                        true
                    );
                    let Z = () => (m = m + 1);
                    document.addEventListener("click", Z);
                    document.addEventListener("touchstart", Z);
                    document.addEventListener(
                        "visibilitychange",
                        function (e) {
                            if (b()) {
                                if (t) {
                                    C();
                                    M(k);
                                    t = false;
                                }
                            } else {
                            }
                        },
                        true
                    );
                    webVitals.onLCP(
                        function (e) {
                            g.crux = e.value;
                        },
                        { reportAllChanges: true }
                    );
                    webVitals.onCLS(
                        function (e) {
                            if (e.entries[0] !== w.sessionEntry) {
                                N();
                                w.sessionEntry = e.entries[0];
                            }
                            w.total = e.value;
                            let t = 250;
                            let n = R(t) + I(t) + P(t);
                            if (n == 1) {
                                if (R(t)) {
                                    w.afterScroll += e.delta;
                                }
                                if (I(t)) {
                                    w.afterPageLoad += e.delta;
                                }
                                if (P(t)) {
                                    w.afterStyles += e.delta;
                                }
                            } else {
                                w.unknown += e.delta;
                            }
                        },
                        { reportAllChanges: true }
                    );
                    webVitals.onFID(function (e) {
                        p = e.value;
                    });
                    webVitals.onFCP(
                        function (e) {
                            h = e.value;
                        },
                        { reportAllChanges: true }
                    );
                    webVitals.onINP(
                        function (e) {
                            S = e.value;
                            Y();
                            if (e.attribution) {
                                const {
                                    eventEntry: t,
                                    eventTarget: n,
                                    eventType: r,
                                    loadState: a,
                                } = e.attribution;
                                const {
                                    startTime: o,
                                    processingStart: i,
                                    processingEnd: l,
                                    duration: c,
                                } = t;
                                v = {
                                    value: e.value,
                                    eventTarget: n,
                                    eventType: r,
                                    loadState: a,
                                    startTime: o,
                                    processingStart: i,
                                    processingEnd: l,
                                    duration: c,
                                };
                            }
                        },
                        { reportAllChanges: true }
                    );
                    return {};
                })();
            })();
        </script>
        <script type="text/javascript">
            var doc = document.documentElement;
            doc.setAttribute("data-useragent", navigator.userAgent);
        </script>


    <body
        class="archive post-type-archive post-type-archive-product theme-Avada woocommerce-shop woocommerce woocommerce-page woocommerce-no-js tinvwl-theme-style has-sidebar fusion-image-hovers fusion-pagination-sizing fusion-button_type-flat fusion-button_span-no fusion-button_gradient-linear avada-image-rollover-circle-yes avada-image-rollover-yes avada-image-rollover-direction-left fusion-body ltr fusion-sticky-header no-tablet-sticky-header no-mobile-sticky-header no-mobile-slidingbar no-mobile-totop fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow- layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center fusion-woo-product-design-clean fusion-woo-shop-page-columns-3 fusion-woo-related-columns-3 fusion-woo-archive-page-columns-3 fusion-woocommerce-equal-heights avada-has-woo-gallery-disabled woo-sale-badge-circle woo-outofstock-badge-rectangle mobile-menu-design-modern fusion-show-pagination-text fusion-header-layout-v3 avada-responsive avada-footer-fx-none avada-menu-highlight-style-bottombar fusion-search-form-clean fusion-main-menu-search-overlay fusion-avatar-circle avada-sticky-shrinkage avada-dropdown-styles avada-blog-layout-masonry avada-blog-archive-layout-masonry avada-header-shadow-no avada-menu-icon-position-left avada-has-megamenu-shadow avada-has-pagetitle-bg-full avada-has-mobile-menu-search avada-has-main-nav-search-icon avada-has-breadcrumb-mobile-hidden avada-has-titlebar-bar_and_content avada-header-border-color-full-transparent avada-has-pagination-width_height avada-flyout-menu-direction-fade avada-ec-views-v1"
        data-awb-post-id="879"
    >
        <a class="skip-link screen-reader-text" href="#content"
            >Skip to content</a
        >

        <div id="boxed-wrapper">
            <div id="wrapper" class="fusion-wrapper">
                <div id="home" style="position: relative; top: -1px"></div>



                <div
                    id="sliders-container"
                    class="fusion-slider-visibility"
                ></div>

                <section
                    class="avada-page-titlebar-wrapper"
                    aria-label="Page Title Bar"
                >
                    <div
                        class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-center"
                    >
                        <div class="fusion-page-title-row">
                            <div class="fusion-page-title-wrapper">
                                <div class="fusion-page-title-captions">
                                    <h1 class="entry-title">Shop</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <main id="main" class="clearfix">
                    <div class="fusion-row" style="">
                        <div class="woocommerce-container">
                            <section id="content" class="" style="float: right">
                                <header
                                    class="woocommerce-products-header"
                                ></header>

                                <div
                                    class="woof_products_top_panel_content"
                                ></div>
                                <div class="woof_products_top_panel"></div>
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="catalog-ordering fusion-clearfix">
                                    <div class="orderby-order-container">
                                        <ul class="orderby order-dropdown">
                                            <li>
                                                <span class="current-li">
                                                    <span
                                                        class="current-li-content"
                                                    >
                                                        <a aria-haspopup="true"
                                                            >Sort by
                                                            <strong
                                                                >Default
                                                                Order</strong
                                                            ></a
                                                        >
                                                    </span>
                                                </span>
                                                <ul>
                                                    <li class="current">
                                                        <a
                                                            href="?product_orderby=default"
                                                            >Sort by
                                                            <strong
                                                                >Default
                                                                Order</strong
                                                            ></a
                                                        >
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="?product_orderby=name"
                                                            >Sort by
                                                            <strong
                                                                >Name</strong
                                                            ></a
                                                        >
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="?product_orderby=price"
                                                            >Sort by
                                                            <strong
                                                                >Price</strong
                                                            ></a
                                                        >
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="?product_orderby=date"
                                                            >Sort by
                                                            <strong
                                                                >Date</strong
                                                            ></a
                                                        >
                                                    </li>
                                                    <li class="">
                                                        <a
                                                            href="?product_orderby=popularity"
                                                            >Sort by
                                                            <strong
                                                                >Popularity</strong
                                                            ></a
                                                        >
                                                    </li>

                                                    <li class="">
                                                        <a
                                                            href="?product_orderby=rating"
                                                            >Sort by
                                                            <strong
                                                                >Rating</strong
                                                            ></a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <ul class="order">
                                            <li class="asc">
                                                <a
                                                    aria-label="Descending order"
                                                    aria-haspopup="true"
                                                    href="?product_order=desc"
                                                    ><i
                                                        class="awb-icon-arrow-down2"
                                                        aria-hidden="true"
                                                    ></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="sort-count order-dropdown">
                                        <li>
                                            <span class="current-li">
                                                <a aria-haspopup="true">
                                                    Show
                                                    <strong>18 Products</strong>
                                                </a>
                                            </span>
                                            <ul>
                                                <li class="current">
                                                    <a href="?product_count=18">
                                                        Show
                                                        <strong
                                                            >18 Products</strong
                                                        >
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="?product_count=36">
                                                        Show
                                                        <strong
                                                            >36 Products</strong
                                                        >
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="?product_count=54">
                                                        Show
                                                        <strong
                                                            >54 Products</strong
                                                        >
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <ul class="fusion-grid-list-view">
                                        <li
                                            class="fusion-grid-view-li active-view"
                                        >
                                            <a
                                                class="fusion-grid-view"
                                                aria-label="View as grid"
                                                aria-haspopup="true"
                                                href="?product_view=grid"
                                                ><i
                                                    class="awb-icon-grid icomoon-grid"
                                                    aria-hidden="true"
                                                ></i
                                            ></a>
                                        </li>
                                        <li class="fusion-list-view-li">
                                            <a
                                                class="fusion-list-view"
                                                aria-haspopup="true"
                                                aria-label="View as list"
                                                href="?product_view=list"
                                                ><i
                                                    class="awb-icon-list icomoon-list"
                                                    aria-hidden="true"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="products clearfix products-3">
                                    <li
                                        class="product type-product post-879 status-publish first instock product_cat-agate product_cat-agatized-coral product_cat-coral product_cat-petrified-wood-and-other-fossils product_tag-crystals-for-balance product_tag-crystals-for-patience product_tag-crystals-for-school product_tag-crystals-for-stress has-post-thumbnail taxable shipping-taxable purchasable product-type-variable product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Agatized-Coral-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Agatized Coral agatized coral"
                                                        decoding="async"
                                                        fetchpriority="high"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Agatized-Coral-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Agatized-Coral.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/product/agatized-coral/"
                                                                    data-quantity="1"
                                                                    class="button product_type_variable add_to_cart_button"
                                                                    data-product_id="879"
                                                                    data-product_sku="MC_4A2628"
                                                                    aria-label="Select options for &ldquo;Agatized Coral&rdquo;"
                                                                    rel="nofollow"
                                                                    >Select
                                                                    options</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/agatized-coral/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/agatized-coral/"
                                                                aria-label="Agatized Coral"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/agatized-coral/"
                                                            >
                                                                Agatized Coral
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Inspired
                                                                Connection</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >16.75</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="879"
                                                data-gtm4wp_product_internal_id="879"
                                                data-gtm4wp_product_name="Agatized Coral"
                                                data-gtm4wp_product_price="16.75"
                                                data-gtm4wp_product_cat="Agatized Coral"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/agatized-coral/"
                                                data-gtm4wp_product_listposition="1"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel=""
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-19291 status-publish instock product_cat-almandine-garnet product_cat-garnet product_tag-crystals-for-attracting-love product_tag-crystals-for-fertility product_tag-crystals-for-money product_tag-crystals-for-new-beginnings product_tag-crystals-for-pregnancy product_tag-crystals-for-sex has-post-thumbnail taxable shipping-taxable purchasable product-type-variable product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Almandine-Garnet2-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Almandine Garnet tumbled almandine garnet"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-66x66.jpg     66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-150x150.jpg  150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-200x200.jpg  200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-400x400.jpg  400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-500x500.jpg  500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-600x600.jpg  600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-700x700.jpg  700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-768x768.jpg  768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet2-800x800.jpg  800w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Almandine-Garnet2.jpg          1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/product/almandine-garnet-rough/"
                                                                    data-quantity="1"
                                                                    class="button product_type_variable add_to_cart_button"
                                                                    data-product_id="19291"
                                                                    data-product_sku="MC_8H3H69-1"
                                                                    aria-label="Select options for &ldquo;Almandine Garnet (Rough)&rdquo;"
                                                                    rel="nofollow"
                                                                    >Select
                                                                    options</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/almandine-garnet-rough/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/almandine-garnet-rough/"
                                                                aria-label="Almandine Garnet (Rough)"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/almandine-garnet-rough/"
                                                            >
                                                                Almandine Garnet
                                                                (Rough)
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Passionate
                                                                Peace</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >11.75</bdi
                                                                    ></span
                                                                >
                                                                &ndash;
                                                                <span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >13.75</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="19291"
                                                data-gtm4wp_product_internal_id="19291"
                                                data-gtm4wp_product_name="Almandine Garnet (Rough)"
                                                data-gtm4wp_product_price="11.75"
                                                data-gtm4wp_product_cat="Almandine Garnet"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/almandine-garnet-rough/"
                                                data-gtm4wp_product_listposition="2"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel=""
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1399 status-publish last instock product_cat-almandine-garnet product_cat-garnet product_tag-crystals-for-attracting-love product_tag-crystals-for-fertility product_tag-crystals-for-money product_tag-crystals-for-new-beginnings product_tag-crystals-for-pregnancy product_tag-crystals-for-sex has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Almandine-Garnet-Faceted-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Almandine Garnet Faceted almandine garnet faceted"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Faceted-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Almandine-Garnet-Faceted.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=1399"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="1399"
                                                                    data-product_sku="MC_S9OFN2"
                                                                    aria-label="Add &ldquo;Almandine Garnet (Faceted)&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/almandine-garnet-faceted/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/almandine-garnet-faceted/"
                                                                aria-label="Almandine Garnet (Faceted)"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/almandine-garnet-faceted/"
                                                            >
                                                                Almandine Garnet
                                                                (Faceted)
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Passionate
                                                                Peace</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >38.00</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1399"
                                                data-gtm4wp_product_internal_id="1399"
                                                data-gtm4wp_product_name="Almandine Garnet (Faceted)"
                                                data-gtm4wp_product_price="38"
                                                data-gtm4wp_product_cat="Almandine Garnet"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/almandine-garnet-faceted/"
                                                data-gtm4wp_product_listposition="3"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="7"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-18951 status-publish first instock product_cat-almandine-garnet product_cat-garnet product_tag-crystals-for-attracting-love product_tag-crystals-for-fertility product_tag-crystals-for-money product_tag-crystals-for-new-beginnings product_tag-crystals-for-pregnancy product_tag-crystals-for-sex has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Almandine-Garnet-Wand-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Almandine Garnet Wand almandine garnet faceted"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-66x66.jpg     66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-150x150.jpg  150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-200x200.jpg  200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-400x400.jpg  400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-500x500.jpg  500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-600x600.jpg  600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-700x700.jpg  700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-768x768.jpg  768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Almandine-Garnet-Wand-800x800.jpg  800w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Almandine-Garnet-Wand.jpg          1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=18951"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="18951"
                                                                    data-product_sku="MC_S9OFN2-1"
                                                                    aria-label="Add &ldquo;Almandine Garnet Wand&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/almandine-garnet-wand/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/almandine-garnet-wand/"
                                                                aria-label="Almandine Garnet Wand"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/almandine-garnet-wand/"
                                                            >
                                                                Almandine Garnet
                                                                Wand
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Passionate
                                                                Peace</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >52.00</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="18951"
                                                data-gtm4wp_product_internal_id="18951"
                                                data-gtm4wp_product_name="Almandine Garnet Wand"
                                                data-gtm4wp_product_price="52"
                                                data-gtm4wp_product_cat="Almandine Garnet"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/almandine-garnet-wand/"
                                                data-gtm4wp_product_listposition="4"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="3"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-808 status-publish instock product_cat-amazonite product_tag-crystals-for-balance product_tag-crystals-for-communication product_tag-crystals-for-confidence product_tag-crystals-for-direction product_tag-crystals-for-pregnancy has-post-thumbnail taxable shipping-taxable purchasable product-type-variable product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Amazonite-Disc-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Amazonite Disc amazonite disc"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Disc-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Amazonite-Disc.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amazonite-disc/"
                                                                    data-quantity="1"
                                                                    class="button product_type_variable add_to_cart_button"
                                                                    data-product_id="808"
                                                                    data-product_sku="MC_F3Z5LG"
                                                                    aria-label="Select options for &ldquo;Amazonite (Disc)&rdquo;"
                                                                    rel="nofollow"
                                                                    >Select
                                                                    options</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amazonite-disc/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/amazonite-disc/"
                                                                aria-label="Amazonite (Disc)"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/amazonite-disc/"
                                                            >
                                                                Amazonite (Disc)
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Wise
                                                                Communication</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >21.00</bdi
                                                                    ></span
                                                                >
                                                                &ndash;
                                                                <span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >25.00</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="808"
                                                data-gtm4wp_product_internal_id="808"
                                                data-gtm4wp_product_name="Amazonite (Disc)"
                                                data-gtm4wp_product_price="21"
                                                data-gtm4wp_product_cat="Amazonite"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/amazonite-disc/"
                                                data-gtm4wp_product_listposition="5"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel=""
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1188 status-publish last instock product_cat-amazonite product_tag-crystals-for-balance product_tag-crystals-for-communication product_tag-crystals-for-confidence product_tag-crystals-for-direction product_tag-crystals-for-pregnancy has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Amazonite-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Amazonite amazonite madagascar"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Amazonite.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=1188"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="1188"
                                                                    data-product_sku="MC_94RK79"
                                                                    aria-label="Add &ldquo;Amazonite (Madagascar)&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amazonite/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/amazonite/"
                                                                aria-label="Amazonite (Madagascar)"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/amazonite/"
                                                            >
                                                                Amazonite
                                                                (Madagascar)
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                            >
                                                                Wise
                                                                Communication</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >19.50</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1188"
                                                data-gtm4wp_product_internal_id="1188"
                                                data-gtm4wp_product_name="Amazonite (Madagascar)"
                                                data-gtm4wp_product_price="19.5"
                                                data-gtm4wp_product_cat="Amazonite"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/amazonite/"
                                                data-gtm4wp_product_listposition="6"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="7"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1283 status-publish first instock product_cat-amazonite product_tag-crystals-for-balance product_tag-crystals-for-communication product_tag-crystals-for-confidence product_tag-crystals-for-direction product_tag-crystals-for-pregnancy has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper fusion-item-in-cart"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Amazonite-Heart-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Amazonite Heart amazonite heart"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amazonite-Heart-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Amazonite-Heart.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-check-square-o"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=1283"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="1283"
                                                                    data-product_sku="MC_Q6NO6V"
                                                                    aria-label="Add &ldquo;Amazonite Heart&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amazonite-heart/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/amazonite-heart/"
                                                                aria-label="Amazonite Heart"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/amazonite-heart/"
                                                            >
                                                                Amazonite Heart
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Wise
                                                                Communication</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >40.50</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1283"
                                                data-gtm4wp_product_internal_id="1283"
                                                data-gtm4wp_product_name="Amazonite Heart"
                                                data-gtm4wp_product_price="40.5"
                                                data-gtm4wp_product_cat="Amazonite"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/amazonite-heart/"
                                                data-gtm4wp_product_listposition="7"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="10"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1117 status-publish instock product_cat-amber product_tag-crystals-for-anxiety product_tag-crystals-for-confidence product_tag-crystals-for-depression product_tag-crystals-for-energy product_tag-crystals-for-happiness product_tag-crystals-for-manifesting has-post-thumbnail taxable shipping-taxable purchasable product-type-variable product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Amber-Indonesia-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Amber Indonesia amber indonesia"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amber-Indonesia-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Amber-Indonesia.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amber-indonesia/"
                                                                    data-quantity="1"
                                                                    class="button product_type_variable add_to_cart_button"
                                                                    data-product_id="1117"
                                                                    data-product_sku="MC_2E4JAU"
                                                                    aria-label="Select options for &ldquo;Amber (Indonesia)&rdquo;"
                                                                    rel="nofollow"
                                                                    >Select
                                                                    options</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amber-indonesia/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/amber-indonesia/"
                                                                aria-label="Amber (Indonesia)"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/amber-indonesia/"
                                                            >
                                                                Amber
                                                                (Indonesia)
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Joyful
                                                                Light</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >25.75</bdi
                                                                    ></span
                                                                >
                                                                &ndash;
                                                                <span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >27.75</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1117"
                                                data-gtm4wp_product_internal_id="1117"
                                                data-gtm4wp_product_name="Amber (Indonesia)"
                                                data-gtm4wp_product_price="25.75"
                                                data-gtm4wp_product_cat="Amber"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/amber-indonesia/"
                                                data-gtm4wp_product_listposition="8"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel=""
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1145 status-publish last instock product_cat-amethyst product_tag-crystals-for-addiction product_tag-crystals-for-balance product_tag-crystals-for-depression product_tag-crystals-for-headaches product_tag-crystals-for-meditation product_tag-crystals-for-peace product_tag-crystals-for-sleep has-post-thumbnail taxable shipping-taxable purchasable product-type-variable product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Amethyst-Dark-Purple-Brazil-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Amethyst Dark Purple Brazil amethyst"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Dark-Purple-Brazil-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Amethyst-Dark-Purple-Brazil.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amethyst-dark-purple-brazil/"
                                                                    data-quantity="1"
                                                                    class="button product_type_variable add_to_cart_button"
                                                                    data-product_id="1145"
                                                                    data-product_sku="MC_4PQ7RY"
                                                                    aria-label="Select options for &ldquo;Amethyst&rdquo;"
                                                                    rel="nofollow"
                                                                    >Select
                                                                    options</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amethyst-dark-purple-brazil/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/amethyst-dark-purple-brazil/"
                                                                aria-label="Amethyst"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/amethyst-dark-purple-brazil/"
                                                            >
                                                                Amethyst
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Graceful
                                                                Serenity</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >14.50</bdi
                                                                    ></span
                                                                >
                                                                &ndash;
                                                                <span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >16.50</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1145"
                                                data-gtm4wp_product_internal_id="1145"
                                                data-gtm4wp_product_name="Amethyst"
                                                data-gtm4wp_product_price="14.5"
                                                data-gtm4wp_product_cat="Amethyst"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/amethyst-dark-purple-brazil/"
                                                data-gtm4wp_product_listposition="9"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel=""
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-273 status-publish first instock product_cat-amethyst product_cat-quartz product_tag-crystals-for-addiction product_tag-crystals-for-balance product_tag-crystals-for-depression product_tag-crystals-for-headaches product_tag-crystals-for-meditation product_tag-crystals-for-peace product_tag-crystals-for-sleep has-post-thumbnail taxable shipping-taxable purchasable product-type-variable product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Amethyst-Brazil-Gem-Quality-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Amethyst Brazil Gem Quality amethyst"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Brazil-Gem-Quality-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Amethyst-Brazil-Gem-Quality.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="star-rating"
                                                                role="img"
                                                                aria-label="Rated 5.00 out of 5"
                                                            >
                                                                <span
                                                                    style="
                                                                        width: 100%;
                                                                    "
                                                                    >Rated
                                                                    <strong
                                                                        class="rating"
                                                                        >5.00</strong
                                                                    >
                                                                    out of
                                                                    5</span
                                                                >
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amethyst/"
                                                                    data-quantity="1"
                                                                    class="button product_type_variable add_to_cart_button"
                                                                    data-product_id="273"
                                                                    data-product_sku="MC_23LKNL"
                                                                    aria-label="Select options for &ldquo;Amethyst (Gem)&rdquo;"
                                                                    rel="nofollow"
                                                                    >Select
                                                                    options</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amethyst/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/amethyst/"
                                                                aria-label="Amethyst (Gem)"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/amethyst/"
                                                            >
                                                                Amethyst (Gem)
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Graceful
                                                                Serenity</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >23.50</bdi
                                                                    ></span
                                                                >
                                                                &ndash;
                                                                <span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >25.50</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="273"
                                                data-gtm4wp_product_internal_id="273"
                                                data-gtm4wp_product_name="Amethyst (Gem)"
                                                data-gtm4wp_product_price="23.5"
                                                data-gtm4wp_product_cat="Quartz"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/amethyst/"
                                                data-gtm4wp_product_listposition="10"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel=""
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1307 status-publish instock product_cat-amethyst product_cat-quartz product_tag-crystals-for-addiction product_tag-crystals-for-balance product_tag-crystals-for-depression product_tag-crystals-for-headaches product_tag-crystals-for-meditation product_tag-crystals-for-peace product_tag-crystals-for-sleep has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Amethyst-Rough-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Amethyst Rough amethyst rough"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Amethyst-Rough-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Amethyst-Rough.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=1307"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="1307"
                                                                    data-product_sku="MC_32AU9G"
                                                                    aria-label="Add &ldquo;Amethyst (Rough)&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/amethyst-rough/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/amethyst-rough/"
                                                                aria-label="Amethyst (Rough)"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/amethyst-rough/"
                                                            >
                                                                Amethyst (Rough)
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Graceful
                                                                Serenity</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >15.25</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1307"
                                                data-gtm4wp_product_internal_id="1307"
                                                data-gtm4wp_product_name="Amethyst (Rough)"
                                                data-gtm4wp_product_price="15.25"
                                                data-gtm4wp_product_cat="Quartz"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/amethyst-rough/"
                                                data-gtm4wp_product_listposition="11"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="6"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-303 status-publish last instock product_cat-amethyst product_cat-ametrine product_cat-citrine product_cat-quartz product_tag-crystals-for-balance product_tag-crystals-for-cleansing product_tag-crystals-for-depression product_tag-crystals-for-happiness product_tag-crystals-for-peace has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <span class="onsale">Sale!</span>
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Ametrine-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Ametrine ametrine"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Ametrine-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Ametrine.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="star-rating"
                                                                role="img"
                                                                aria-label="Rated 5.00 out of 5"
                                                            >
                                                                <span
                                                                    style="
                                                                        width: 100%;
                                                                    "
                                                                    >Rated
                                                                    <strong
                                                                        class="rating"
                                                                        >5.00</strong
                                                                    >
                                                                    out of
                                                                    5</span
                                                                >
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=303"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="303"
                                                                    data-product_sku="MC_13Y7HK"
                                                                    aria-label="Add &ldquo;Ametrine&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/ametrine/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/ametrine/"
                                                                aria-label="Ametrine"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/ametrine/"
                                                            >
                                                                Ametrine
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Joyful
                                                                Balance</span
                                                            >
                                                            <span class="price"
                                                                ><del
                                                                    aria-hidden="true"
                                                                    ><span
                                                                        class="woocommerce-Price-amount amount"
                                                                        ><bdi
                                                                            ><span
                                                                                class="woocommerce-Price-currencySymbol"
                                                                                >&#36;</span
                                                                            >23.25</bdi
                                                                        ></span
                                                                    ></del
                                                                >
                                                                <ins
                                                                    ><span
                                                                        class="woocommerce-Price-amount amount"
                                                                        ><bdi
                                                                            ><span
                                                                                class="woocommerce-Price-currencySymbol"
                                                                                >&#36;</span
                                                                            >17.50</bdi
                                                                        ></span
                                                                    ></ins
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="303"
                                                data-gtm4wp_product_internal_id="303"
                                                data-gtm4wp_product_name="Ametrine"
                                                data-gtm4wp_product_price="17.5"
                                                data-gtm4wp_product_cat="Quartz"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/ametrine/"
                                                data-gtm4wp_product_listposition="12"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="4"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-795 status-publish first instock product_cat-angelite product_tag-crystals-for-anxiety product_tag-crystals-for-communication product_tag-crystals-for-compassion product_tag-crystals-for-peace product_tag-crystals-for-reiki product_tag-crystals-for-sleep product_tag-crystals-for-weight-loss has-post-thumbnail taxable shipping-taxable purchasable product-type-variable product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Angelite-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Angelite angelite"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Angelite.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="star-rating"
                                                                role="img"
                                                                aria-label="Rated 5.00 out of 5"
                                                            >
                                                                <span
                                                                    style="
                                                                        width: 100%;
                                                                    "
                                                                    >Rated
                                                                    <strong
                                                                        class="rating"
                                                                        >5.00</strong
                                                                    >
                                                                    out of
                                                                    5</span
                                                                >
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/product/angelite/"
                                                                    data-quantity="1"
                                                                    class="button product_type_variable add_to_cart_button"
                                                                    data-product_id="795"
                                                                    data-product_sku="MC_289BPI"
                                                                    aria-label="Select options for &ldquo;Angelite&rdquo;"
                                                                    rel="nofollow"
                                                                    >Select
                                                                    options</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/angelite/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/angelite/"
                                                                aria-label="Angelite"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/angelite/"
                                                            >
                                                                Angelite
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Compassionate
                                                                Communication</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >12.00</bdi
                                                                    ></span
                                                                >
                                                                &ndash;
                                                                <span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >14.00</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="795"
                                                data-gtm4wp_product_internal_id="795"
                                                data-gtm4wp_product_name="Angelite"
                                                data-gtm4wp_product_price="12"
                                                data-gtm4wp_product_cat="Angelite"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/angelite/"
                                                data-gtm4wp_product_listposition="13"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel=""
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1354 status-publish instock product_cat-angelite product_tag-crystals-for-anxiety product_tag-crystals-for-communication product_tag-crystals-for-compassion product_tag-crystals-for-peace product_tag-crystals-for-reiki product_tag-crystals-for-sleep product_tag-crystals-for-weight-loss has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Angelite-Heart-3-500x500.jpeg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Angelite Heart angelite heart"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-66x66.jpeg     66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-150x150.jpeg  150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-200x200.jpeg  200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-400x400.jpeg  400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-500x500.jpeg  500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-600x600.jpeg  600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-700x700.jpeg  700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-768x768.jpeg  768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Heart-3-800x800.jpeg  800w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Angelite-Heart-3.jpeg          1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=1354"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="1354"
                                                                    data-product_sku="MC_KWL586"
                                                                    aria-label="Add &ldquo;Angelite Heart&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/angelite-heart/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/angelite-heart/"
                                                                aria-label="Angelite Heart"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/angelite-heart/"
                                                            >
                                                                Angelite Heart
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Compassionate
                                                                Communication</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >28.00</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1354"
                                                data-gtm4wp_product_internal_id="1354"
                                                data-gtm4wp_product_name="Angelite Heart"
                                                data-gtm4wp_product_price="28"
                                                data-gtm4wp_product_cat="Angelite"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/angelite-heart/"
                                                data-gtm4wp_product_listposition="14"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="3"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-20334 status-publish last instock product_cat-angelite product_tag-crystals-for-anxiety product_tag-crystals-for-communication product_tag-crystals-for-compassion product_tag-crystals-for-peace product_tag-crystals-for-reiki product_tag-crystals-for-sleep product_tag-crystals-for-weight-loss has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Moon Angelite angelite"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-66x66.jpg     66w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-150x150.jpg  150w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-200x200.jpg  200w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-400x400.jpg  400w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-500x500.jpg  500w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-600x600.jpg  600w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-700x700.jpg  700w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-768x768.jpg  768w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite-800x800.jpg  800w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Moon-Angelite.jpg         1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=20334"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="20334"
                                                                    data-product_sku="MC_289BPI-1"
                                                                    aria-label="Add &ldquo;Angelite Moon&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/angelite-moon/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/angelite-moon/"
                                                                aria-label="Angelite Moon"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/angelite-moon/"
                                                            >
                                                                Angelite Moon
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Compassionate
                                                                Communication</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >23.75</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="20334"
                                                data-gtm4wp_product_internal_id="20334"
                                                data-gtm4wp_product_name="Angelite Moon"
                                                data-gtm4wp_product_price="23.75"
                                                data-gtm4wp_product_cat="Angelite"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/angelite-moon/"
                                                data-gtm4wp_product_listposition="15"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="3"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-18907 status-publish first instock product_cat-angelite product_tag-crystals-for-anxiety product_tag-crystals-for-communication product_tag-crystals-for-compassion product_tag-crystals-for-peace product_tag-crystals-for-reiki product_tag-crystals-for-sleep product_tag-crystals-for-weight-loss has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Angelite-Wand-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Angelite Wand angelite heart"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-66x66.jpg     66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-150x150.jpg  150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-200x200.jpg  200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-400x400.jpg  400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-500x500.jpg  500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-600x600.jpg  600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-700x700.jpg  700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-768x768.jpg  768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Angelite-Wand-800x800.jpg  800w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Angelite-Wand.jpg          1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=18907"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="18907"
                                                                    data-product_sku="MC_KWL586-1"
                                                                    aria-label="Add &ldquo;Angelite Wand&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/angelite-wand/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/angelite-wand/"
                                                                aria-label="Angelite Wand"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/angelite-wand/"
                                                            >
                                                                Angelite Wand
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Compassionate
                                                                Communication</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >50.00</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="18907"
                                                data-gtm4wp_product_internal_id="18907"
                                                data-gtm4wp_product_name="Angelite Wand"
                                                data-gtm4wp_product_price="50"
                                                data-gtm4wp_product_cat="Angelite"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/angelite-wand/"
                                                data-gtm4wp_product_listposition="16"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="3"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1319 status-publish instock product_cat-apache-tear-obsidian product_cat-obsidian product_tag-crystals-for-compassion product_tag-crystals-for-depression product_tag-crystals-for-grief product_tag-crystals-for-grounding has-post-thumbnail taxable shipping-taxable purchasable product-type-variable product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/Apache-Tear-Obsidian-Rough-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="Apache Tear Obsidian Rough apache tear obsidian rough"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//Apache-Tear-Obsidian-Rough-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/Apache-Tear-Obsidian-Rough.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/product/apache-tear-obsidian-rough/"
                                                                    data-quantity="1"
                                                                    class="button product_type_variable add_to_cart_button"
                                                                    data-product_id="1319"
                                                                    data-product_sku="MC_FYY884"
                                                                    aria-label="Select options for &ldquo;Apache Tear Obsidian (Rough)&rdquo;"
                                                                    rel="nofollow"
                                                                    >Select
                                                                    options</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/apache-tear-obsidian-rough/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/apache-tear-obsidian-rough/"
                                                                aria-label="Apache Tear Obsidian (Rough)"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/apache-tear-obsidian-rough/"
                                                            >
                                                                Apache Tear
                                                                Obsidian (Rough)
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >Compassionate
                                                                Strength</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >10.50</bdi
                                                                    ></span
                                                                >
                                                                &ndash;
                                                                <span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >12.00</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1319"
                                                data-gtm4wp_product_internal_id="1319"
                                                data-gtm4wp_product_name="Apache Tear Obsidian (Rough)"
                                                data-gtm4wp_product_price="10.5"
                                                data-gtm4wp_product_cat="Apache Tear Obsidian"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/apache-tear-obsidian-rough/"
                                                data-gtm4wp_product_listposition="17"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel=""
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-1310 status-publish last instock product_cat-apophyllite product_tag-crystals-for-depression product_tag-crystals-for-forgiveness product_tag-crystals-for-meditation product_tag-crystals-for-peace product_tag-crystals-for-reiki has-post-thumbnail taxable shipping-taxable purchasable product-type-simple product-grid-view"
                                    >
                                        <div class="fusion-product-wrapper">
                                            <div
                                                class="fusion-clean-product-image-wrapper"
                                            >
                                                <div
                                                    class="fusion-image-wrapper fusion-image-size-fixed"
                                                    aria-haspopup="true"
                                                >
                                                    <img
                                                        width="500"
                                                        height="500"
                                                        src="https://moonrisecrystals.com/wp-content/uploads/White-Apophyllite-500x500.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="White Apophyllite apophyllite"
                                                        decoding="async"
                                                        srcset="
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-66x66.jpg       66w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-150x150.jpg    150w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-200x200.jpg    200w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-300x300.jpg    300w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-400x400.jpg    400w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-500x500.jpg    500w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-600x600.jpg    600w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-700x700.jpg    700w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-768x768.jpg    768w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-800x800.jpg    800w,
                                                            https://moonrisecrystals.com/wp-content/uploads//White-Apophyllite-1024x1024.jpg 1024w,
                                                            https://moonrisecrystals.com/wp-content/uploads/White-Apophyllite.jpg            1200w
                                                        "
                                                        sizes="(max-width: 500px) 100vw, 500px"
                                                    />
                                                    <div
                                                        class="fusion-rollover"
                                                    >
                                                        <div
                                                            class="fusion-rollover-content"
                                                        >
                                                            <div
                                                                class="cart-loading"
                                                            >
                                                                <a
                                                                    href="https://moonrisecrystals.com/cart/"
                                                                >
                                                                    <i
                                                                        class="awb-icon-spinner"
                                                                        aria-hidden="true"
                                                                    ></i>
                                                                    <div
                                                                        class="view-cart"
                                                                    >
                                                                        View
                                                                        Cart
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div
                                                                class="fusion-product-buttons"
                                                            >
                                                                <a
                                                                    href="?add-to-cart=1310"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="1310"
                                                                    data-product_sku="MC_6YN4C4"
                                                                    aria-label="Add &ldquo;Apophyllite&rdquo; to your cart"
                                                                    rel="nofollow"
                                                                    >Add to
                                                                    cart</a
                                                                ><span
                                                                    class="fusion-rollover-linebreak"
                                                                >
                                                                    /</span
                                                                >

                                                                <a
                                                                    href="https://moonrisecrystals.com/product/apophyllite/"
                                                                    class="show_details_button"
                                                                >
                                                                    Details</a
                                                                >
                                                            </div>
                                                            <a
                                                                class="fusion-link-wrapper"
                                                                href="https://moonrisecrystals.com/product/apophyllite/"
                                                                aria-label="Apophyllite"
                                                            ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fusion-product-content">
                                                <div class="product-details">
                                                    <div
                                                        class="product-details-container"
                                                    >
                                                        <h3
                                                            class="product-title"
                                                        >
                                                            <a
                                                                href="https://moonrisecrystals.com/product/apophyllite/"
                                                            >
                                                                Apophyllite
                                                            </a>
                                                        </h3>
                                                        <div
                                                            class="fusion-price-rating"
                                                        >
                                                            <span
                                                                class="energy-subtitle"
                                                                >High
                                                                Vibration</span
                                                            >
                                                            <span class="price"
                                                                ><span
                                                                    class="woocommerce-Price-amount amount"
                                                                    ><bdi
                                                                        ><span
                                                                            class="woocommerce-Price-currencySymbol"
                                                                            >&#36;</span
                                                                        >17.00</bdi
                                                                    ></span
                                                                ></span
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="gtm4wp_productdata"
                                                style="
                                                    display: none;
                                                    visibility: hidden;
                                                "
                                                data-gtm4wp_product_id="1310"
                                                data-gtm4wp_product_internal_id="1310"
                                                data-gtm4wp_product_name="Apophyllite"
                                                data-gtm4wp_product_price="17"
                                                data-gtm4wp_product_cat="Apophyllite"
                                                data-gtm4wp_product_url="https://moonrisecrystals.com/product/apophyllite/"
                                                data-gtm4wp_product_listposition="18"
                                                data-gtm4wp_productlist_name="General Product List"
                                                data-gtm4wp_product_stocklevel="10"
                                                data-gtm4wp_product_brand=""
                                            ></span>
                                        </div>
                                    </li>
                                </ul>
                                <nav class="woocommerce-pagination">
                                    <span
                                        aria-current="page"
                                        class="page-numbers current"
                                        >1</span
                                    >
                                    <a
                                        class="page-numbers"
                                        href="https://moonrisecrystals.com/shop/page/2/"
                                        >2</a
                                    >
                                    <span class="page-numbers dots"
                                        >&hellip;</span
                                    >
                                    <a
                                        class="page-numbers"
                                        href="https://moonrisecrystals.com/shop/page/20/"
                                        >20</a
                                    >
                                    <a
                                        class="next page-numbers"
                                        href="https://moonrisecrystals.com/shop/page/2/"
                                        ><span class="page-text">Next</span
                                        ><span class="page-next"></span
                                    ></a>
                                </nav>
                            </section>
                        </div>
                        <aside
                            id="sidebar"
                            class="sidebar fusion-widget-area fusion-content-widget-area fusion-sidebar-left fusion-shopfilter"
                            style="float: left"
                            data=""
                        >
                            <div
                                id="custom_html-14"
                                class="widget_text widget widget_custom_html"
                                style="
                                    padding: 0px;
                                    margin: 0px;
                                    border-style: solid;
                                    border-color: transparent;
                                    border-width: 0px;
                                "
                            >
                                <div class="textwidget custom-html-widget">
                                    <a
                                        id="filter-button"
                                        class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-1 fusion-button-default-span fusion-button-default-type"
                                        target="_self"
                                        href="#"
                                        rel="noopener"
                                        ><span class="fusion-button-text"
                                            ><i
                                                class="fas fa-filter button-icon-left"
                                            ></i>
                                            Filter</span
                                        ></a
                                    >
                                    <style>
                                        .WOOF_Widget {
                                            max-width: 400px;
                                            will-change: max-height;
                                            max-height: auto;
                                            transform: max-height 300ms;
                                        }
                                        #filter-button {
                                            display: none;
                                        }
                                        @media only screen and (max-width: 800px) {
                                            .WOOF_Widget {
                                                overflow: hidden;
                                                max-height: 0;
                                            }
                                            #filter-button {
                                                display: block;
                                                margin-bottom: 0.5rem;
                                            }
                                            .has-sidebar #content,
                                            .woocommerce-container {
                                                margin-top: 0;
                                            }
                                            .widget .widget-woof {
                                                margin-bottom: 1rem;
                                            }
                                        }
                                    </style>
                                    <script>
                                        document.addEventListener(
                                            "DOMContentLoaded",
                                            function (event) {
                                                const btn =
                                                    document.querySelector(
                                                        "#filter-button"
                                                    );
                                                const woof =
                                                    document.querySelector(
                                                        ".WOOF_Widget"
                                                    );
                                                let status = false;

                                                btn.addEventListener(
                                                    "click",
                                                    function (event) {
                                                        event.preventDefault();
                                                        woof.style.maxHeight =
                                                            status
                                                                ? "0"
                                                                : "1300px";
                                                        status = status
                                                            ? false
                                                            : true;
                                                    }
                                                );
                                            }
                                        );
                                    </script>
                                </div>
                            </div>
                            <div
                                id="woof_widget-5"
                                class="widget WOOF_Widget"
                                style="
                                    border-style: solid;
                                    border-color: transparent;
                                    border-width: 0px;
                                "
                            >
                                <div class="widget widget-woof">
                                    <div
                                        data-slug=""
                                        class="woof woof_sid woof_sid_widget"
                                        data-sid="widget"
                                        data-shortcode="woof sid=&#039;widget&#039; mobile_mode=&#039;0&#039; autosubmit=&#039;-1&#039; start_filtering_btn=&#039;0&#039; price_filter=&#039;3&#039; redirect=&#039;&#039; ajax_redraw=&#039;0&#039; btn_position=&#039;b&#039; dynamic_recount=&#039;-1&#039; "
                                        data-redirect=""
                                        data-autosubmit="1"
                                        data-ajax-redraw="0"
                                    >
                                        <!--- here is possible to drop html code which is never redraws by AJAX ---->

                                        <div
                                            class="woof_redraw_zone"
                                            data-woof-ver="3.3.4.1"
                                            data-icheck-skin="none"
                                        >
                                            <div
                                                data-css-class="woof_container_product_cat"
                                                class="woof_container woof_container_mselect woof_container_product_cat woof_container_0 woof_container_bystone woof_fs_product_cat"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_bystone"
                                                >
                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <label
                                                            class="woof_wcga_label_hide"
                                                            for="woof_tax_mselect_product_cat"
                                                            >BY STONE ▼</label
                                                        >
                                                        <select
                                                            id="woof_tax_mselect_product_cat"
                                                            class="woof_mselect woof_mselect_product_cat"
                                                            data-placeholder="BY STONE ▼"
                                                            multiple=""
                                                            size="1"
                                                            name="product_cat"
                                                        >
                                                            <option
                                                                value="0"
                                                            ></option>
                                                            <option
                                                                value="agate"
                                                            >
                                                                Agate (22)
                                                            </option>
                                                            <option
                                                                value="apricot-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Apricot Agate
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="blue-lace-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Lace Agate
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="botswana-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Botswana Agate
                                                                (2)
                                                            </option>
                                                            <option
                                                                value="crazy-lace-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Crazy Lace Agate
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="dendritic-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Dendritic Agate
                                                                (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="fire-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Fire Agate (0)
                                                            </option>
                                                            <option
                                                                value="gray-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Gray Agate (1)
                                                            </option>
                                                            <option
                                                                value="moss-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Moss Agate (2)
                                                            </option>
                                                            <option
                                                                value="tree-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Tree Agate (4)
                                                            </option>
                                                            <option
                                                                value="amazonite"
                                                            >
                                                                Amazonite (3)
                                                            </option>
                                                            <option
                                                                value="amber"
                                                            >
                                                                Amber (1)
                                                            </option>
                                                            <option
                                                                value="amethyst"
                                                            >
                                                                Amethyst (7)
                                                            </option>
                                                            <option
                                                                value="banded-amethyst"
                                                                class="woof-padding-1"
                                                            >
                                                                Banded Amethyst
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="brandberg-amethyst"
                                                                class="woof-padding-1"
                                                            >
                                                                Brandberg
                                                                Amethyst (1)
                                                            </option>
                                                            <option
                                                                value="ametrine"
                                                            >
                                                                Ametrine (1)
                                                            </option>
                                                            <option
                                                                value="angelite"
                                                            >
                                                                Angelite (4)
                                                            </option>
                                                            <option
                                                                value="apatite"
                                                            >
                                                                Apatite (3)
                                                            </option>
                                                            <option
                                                                value="blue-apatite"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Apatite (2)
                                                            </option>
                                                            <option
                                                                value="green-apatite"
                                                                class="woof-padding-1"
                                                            >
                                                                Green Apatite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="apophyllite"
                                                            >
                                                                Apophyllite (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="green-apophyllite"
                                                                class="woof-padding-1"
                                                            >
                                                                Green Apopyllite
                                                                (0)
                                                            </option>
                                                            <option
                                                                value="aquamarine"
                                                            >
                                                                Aquamarine (1)
                                                            </option>
                                                            <option
                                                                value="aragonite"
                                                            >
                                                                Aragonite (7)
                                                            </option>
                                                            <option
                                                                value="blue-aragonite"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Aragonite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="brown-aragonite"
                                                                class="woof-padding-1"
                                                            >
                                                                Brown Aragonite
                                                                (2)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="pink-aragonite"
                                                                class="woof-padding-1"
                                                            >
                                                                Pink Aragonite
                                                                (0)
                                                            </option>
                                                            <option
                                                                value="red-aragonite"
                                                                class="woof-padding-1"
                                                            >
                                                                Red Aragonite
                                                                (4)
                                                            </option>
                                                            <option
                                                                value="atlantisite"
                                                            >
                                                                Atlantisite (4)
                                                            </option>
                                                            <option
                                                                value="auralite-23"
                                                            >
                                                                Auralite 23 (1)
                                                            </option>
                                                            <option
                                                                value="aventurine"
                                                            >
                                                                Aventurine (6)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="blue-aventurine"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Aventurine
                                                                (0)
                                                            </option>
                                                            <option
                                                                value="green-aventurine"
                                                                class="woof-padding-1"
                                                            >
                                                                Green Aventurine
                                                                (2)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="orange-aventurine"
                                                                class="woof-padding-1"
                                                            >
                                                                Orange
                                                                Aventurine (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="pink-aventurine"
                                                                class="woof-padding-1"
                                                            >
                                                                Pink Aventurine
                                                                (0)
                                                            </option>
                                                            <option
                                                                value="red-aventurine"
                                                                class="woof-padding-1"
                                                            >
                                                                Red Aventurine
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="white-aventurine"
                                                                class="woof-padding-1"
                                                            >
                                                                White Aventurine
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="yellow-aventurine"
                                                                class="woof-padding-1"
                                                            >
                                                                Yellow
                                                                Aventurine (2)
                                                            </option>
                                                            <option
                                                                value="azurite"
                                                            >
                                                                Azurite (2)
                                                            </option>
                                                            <option
                                                                value="azurite-malachite"
                                                                class="woof-padding-1"
                                                            >
                                                                Azurite
                                                                Malachite (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="k2-azurite"
                                                                class="woof-padding-1"
                                                            >
                                                                K2 Azurite (0)
                                                            </option>
                                                            <option
                                                                value="barite"
                                                            >
                                                                Barite (1)
                                                            </option>
                                                            <option
                                                                value="bismuth"
                                                            >
                                                                Bismuth (1)
                                                            </option>
                                                            <option
                                                                value="bloodstone"
                                                            >
                                                                Bloodstone (2)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="bornite"
                                                            >
                                                                Bornite (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="bronzite"
                                                            >
                                                                Bronzite (0)
                                                            </option>
                                                            <option
                                                                value="buddstone"
                                                            >
                                                                Buddstone (1)
                                                            </option>
                                                            <option
                                                                value="calcite"
                                                            >
                                                                Calcite (9)
                                                            </option>
                                                            <option
                                                                value="blue-calcite"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Calcite (3)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="gold-calcite"
                                                                class="woof-padding-1"
                                                            >
                                                                Gold Calcite (0)
                                                            </option>
                                                            <option
                                                                value="green-calcite"
                                                                class="woof-padding-1"
                                                            >
                                                                Green Calcite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="mangano-calcite"
                                                                class="woof-padding-1"
                                                            >
                                                                Mangano Calcite
                                                                (2)
                                                            </option>
                                                            <option
                                                                value="orange-calcite"
                                                                class="woof-padding-1"
                                                            >
                                                                Orange Calcite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="white-calcite"
                                                                class="woof-padding-1"
                                                            >
                                                                White Calcite
                                                                (2)
                                                            </option>
                                                            <option
                                                                value="carnelian"
                                                            >
                                                                Carnelian (2)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="cats-eye"
                                                            >
                                                                Cat&#039;s Eye
                                                                (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="cavansite"
                                                            >
                                                                Cavansite (0)
                                                            </option>
                                                            <option
                                                                value="celestine"
                                                            >
                                                                Celestine (1)
                                                            </option>
                                                            <option
                                                                value="chalcedony"
                                                            >
                                                                Chalcedony (5)
                                                            </option>
                                                            <option
                                                                value="blue-chalcedony"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Chalcedony
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="chrome-chalcedony"
                                                                class="woof-padding-1"
                                                            >
                                                                Chrome
                                                                Chalcedony (1)
                                                            </option>
                                                            <option
                                                                value="cradle-of-humankind"
                                                                class="woof-padding-1"
                                                            >
                                                                Cradle of
                                                                Humankind (1)
                                                            </option>
                                                            <option
                                                                value="pink-chalcedony"
                                                                class="woof-padding-1"
                                                            >
                                                                Pink Chalcedony
                                                                (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="chalcopyrite"
                                                            >
                                                                Chalcopyrite (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="peacock-ore"
                                                                class="woof-padding-1"
                                                            >
                                                                Peacock Ore (0)
                                                            </option>
                                                            <option
                                                                value="charoite"
                                                            >
                                                                Charoite (1)
                                                            </option>
                                                            <option
                                                                value="chiastolite"
                                                            >
                                                                Chiastolite (2)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="chinese-writing-stone"
                                                            >
                                                                Chinese Writing
                                                                Stone (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="chrysanthemum-stone"
                                                            >
                                                                Chrysanthemum
                                                                Stone (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="chrysoberyl"
                                                            >
                                                                Chrysoberyl (0)
                                                            </option>
                                                            <option
                                                                value="chrysocolla"
                                                            >
                                                                Chrysocolla (4)
                                                            </option>
                                                            <option
                                                                value="chrysoprase"
                                                            >
                                                                Chrysoprase (4)
                                                            </option>
                                                            <option
                                                                value="cinabrite"
                                                            >
                                                                Cinabrite (2)
                                                            </option>
                                                            <option
                                                                value="citrine"
                                                            >
                                                                Citrine (4)
                                                            </option>
                                                            <option
                                                                value="clear-quartz"
                                                            >
                                                                Clear Quartz (7)
                                                            </option>
                                                            <option
                                                                value="copper"
                                                            >
                                                                Copper (2)
                                                            </option>
                                                            <option
                                                                value="coral"
                                                            >
                                                                Coral (1)
                                                            </option>
                                                            <option
                                                                value="agatized-coral"
                                                                class="woof-padding-1"
                                                            >
                                                                Agatized Coral
                                                                (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="blue-coral"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Coral (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="red-coral"
                                                                class="woof-padding-1"
                                                            >
                                                                Red Coral (0)
                                                            </option>
                                                            <option
                                                                value="danburite"
                                                            >
                                                                Danburite (1)
                                                            </option>
                                                            <option
                                                                value="diopside"
                                                            >
                                                                Diopside (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="dioptase"
                                                            >
                                                                Dioptase (0)
                                                            </option>
                                                            <option
                                                                value="dragonstone"
                                                            >
                                                                Dragonstone (1)
                                                            </option>
                                                            <option
                                                                value="dumortierite"
                                                            >
                                                                Dumortierite (2)
                                                            </option>
                                                            <option
                                                                value="emerald"
                                                            >
                                                                Emerald (1)
                                                            </option>
                                                            <option
                                                                value="epidote"
                                                            >
                                                                Epidote (3)
                                                            </option>
                                                            <option
                                                                value="eudialyte"
                                                            >
                                                                Eudialyte (1)
                                                            </option>
                                                            <option
                                                                value="fluorite"
                                                            >
                                                                Fluorite (4)
                                                            </option>
                                                            <option
                                                                value="blue-fluorite"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Fluorite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="green-fluorite"
                                                                class="woof-padding-1"
                                                            >
                                                                Green Fluorite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="rainbow-fluorite"
                                                                class="woof-padding-1"
                                                            >
                                                                Rainbow Fluorite
                                                                (2)
                                                            </option>
                                                            <option
                                                                value="yellow-fluorite"
                                                                class="woof-padding-1"
                                                            >
                                                                Yellow Fluorite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="fuchsite"
                                                            >
                                                                Fuchsite (5)
                                                            </option>
                                                            <option
                                                                value="galena"
                                                            >
                                                                Galena (2)
                                                            </option>
                                                            <option
                                                                value="garnet"
                                                            >
                                                                Garnet (9)
                                                            </option>
                                                            <option
                                                                value="almandine-garnet"
                                                                class="woof-padding-1"
                                                            >
                                                                Almandine Garnet
                                                                (3)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="andradite-garnet"
                                                                class="woof-padding-1"
                                                            >
                                                                Andradite Garnet
                                                                (0)
                                                            </option>
                                                            <option
                                                                value="grossular-garnet"
                                                                class="woof-padding-1"
                                                            >
                                                                Grossular Garnet
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="hessonite-garnet"
                                                                class="woof-padding-1"
                                                            >
                                                                Hessonite Garnet
                                                                (2)
                                                            </option>
                                                            <option
                                                                value="rhodolite-garnet"
                                                                class="woof-padding-1"
                                                            >
                                                                Rhodolite Garnet
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="spessartite-garnet"
                                                                class="woof-padding-1"
                                                            >
                                                                Spessartite
                                                                Garnet (1)
                                                            </option>
                                                            <option
                                                                value="uvarovite-garnet"
                                                                class="woof-padding-1"
                                                            >
                                                                Uvarovite Garnet
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="garnierite"
                                                            >
                                                                Garnierite (1)
                                                            </option>
                                                            <option
                                                                value="hematite"
                                                            >
                                                                Hematite (4)
                                                            </option>
                                                            <option
                                                                value="howlite"
                                                            >
                                                                Howlite (2)
                                                            </option>
                                                            <option
                                                                value="idocrase"
                                                            >
                                                                Idocrase (2)
                                                            </option>
                                                            <option
                                                                value="impactite"
                                                            >
                                                                Impactite (1)
                                                            </option>
                                                            <option
                                                                value="indigo-gabbro"
                                                            >
                                                                Indigo Gabbro
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="iolite"
                                                            >
                                                                Iolite (5)
                                                            </option>
                                                            <option
                                                                value="jade"
                                                            >
                                                                Jade (14)
                                                            </option>
                                                            <option
                                                                value="black-jade"
                                                                class="woof-padding-1"
                                                            >
                                                                Black Jade (5)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="blue-jade"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Jade (0)
                                                            </option>
                                                            <option
                                                                value="green-jade"
                                                                class="woof-padding-1"
                                                            >
                                                                Green Jade (6)
                                                            </option>
                                                            <option
                                                                value="purple-jade"
                                                                class="woof-padding-1"
                                                            >
                                                                Purple Jade (3)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="white-jade"
                                                                class="woof-padding-1"
                                                            >
                                                                White Jade (0)
                                                            </option>
                                                            <option
                                                                value="jasper"
                                                            >
                                                                Jasper (17)
                                                            </option>
                                                            <option
                                                                value="brecciate-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Brecciated
                                                                Jasper (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="bumblebee-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Bumblebee Jasper
                                                                (0)
                                                            </option>
                                                            <option
                                                                value="desert-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Desert Jasper
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="dragons-blood-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Dragon&#039;s
                                                                Blood Jasper (1)
                                                            </option>
                                                            <option
                                                                value="kambaba-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Kambaba Jasper
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="leopardskin-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Leopardskin
                                                                Jasper (2)
                                                            </option>
                                                            <option
                                                                value="mookaite-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Mookaite Jasper
                                                                (2)
                                                            </option>
                                                            <option
                                                                value="ocean-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Ocean Jasper (1)
                                                            </option>
                                                            <option
                                                                value="outback-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Outback Jasper
                                                                (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="picture-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Picture Jasper
                                                                (0)
                                                            </option>
                                                            <option
                                                                value="rainforest-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Rainforest
                                                                Jasper (1)
                                                            </option>
                                                            <option
                                                                value="red-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Red Jasper (5)
                                                            </option>
                                                            <option
                                                                value="yellow-jasper"
                                                                class="woof-padding-1"
                                                            >
                                                                Yellow Jasper
                                                                (1)
                                                            </option>
                                                            <option value="jet">
                                                                Jet (1)
                                                            </option>
                                                            <option
                                                                value="kammererite"
                                                            >
                                                                Kammererite (1)
                                                            </option>
                                                            <option
                                                                value="kunzite"
                                                            >
                                                                Kunzite (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="golden-kunzite"
                                                                class="woof-padding-1"
                                                            >
                                                                Golden Kunzite
                                                                (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="hiddenite"
                                                                class="woof-padding-1"
                                                            >
                                                                Hiddenite (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="pink-kunzite"
                                                                class="woof-padding-1"
                                                            >
                                                                Pink Kunzite (0)
                                                            </option>
                                                            <option
                                                                value="kyanite"
                                                            >
                                                                Kyanite (5)
                                                            </option>
                                                            <option
                                                                value="labradorite"
                                                            >
                                                                Labradorite (3)
                                                            </option>
                                                            <option
                                                                value="golden-labradorite"
                                                                class="woof-padding-1"
                                                            >
                                                                Golden
                                                                Labradorite (1)
                                                            </option>
                                                            <option
                                                                value="larimar"
                                                            >
                                                                Larimar (1)
                                                            </option>
                                                            <option
                                                                value="larvikite"
                                                            >
                                                                Larvikite (1)
                                                            </option>
                                                            <option
                                                                value="lepidolite"
                                                            >
                                                                Lepidolite (5)
                                                            </option>
                                                            <option
                                                                value="lithium-quartz"
                                                            >
                                                                Lithium Quartz
                                                                (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="lodestone"
                                                            >
                                                                Lodestone (0)
                                                            </option>
                                                            <option
                                                                value="magnesite"
                                                            >
                                                                Magnesite (2)
                                                            </option>
                                                            <option
                                                                value="citron-chrysoprase"
                                                                class="woof-padding-1"
                                                            >
                                                                Citron
                                                                Chrysoprase (1)
                                                            </option>
                                                            <option
                                                                value="malachite"
                                                            >
                                                                Malachite (1)
                                                            </option>
                                                            <option
                                                                value="merlinite"
                                                            >
                                                                Merlinite (2)
                                                            </option>
                                                            <option
                                                                value="moldavite"
                                                            >
                                                                Moldavite (1)
                                                            </option>
                                                            <option
                                                                value="moonstone"
                                                            >
                                                                Moonstone (9)
                                                            </option>
                                                            <option
                                                                value="black-moonstone"
                                                                class="woof-padding-1"
                                                            >
                                                                Black Moonstone
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="moonstone-tourmaline"
                                                                class="woof-padding-1"
                                                            >
                                                                Moonstone
                                                                Tourmaline (2)
                                                            </option>
                                                            <option
                                                                value="peach-moonstone"
                                                                class="woof-padding-1"
                                                            >
                                                                Peach Moonstone
                                                                (3)
                                                            </option>
                                                            <option
                                                                value="rainbow-moonstone"
                                                                class="woof-padding-1"
                                                            >
                                                                Rainbow
                                                                Moonstone (1)
                                                            </option>
                                                            <option
                                                                value="morganite"
                                                            >
                                                                Morganite (1)
                                                            </option>
                                                            <option
                                                                value="muscovite"
                                                            >
                                                                Muscovite (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="nuummite"
                                                            >
                                                                Nuummite (0)
                                                            </option>
                                                            <option
                                                                value="obsidian"
                                                            >
                                                                Obsidian (11)
                                                            </option>
                                                            <option
                                                                value="apache-tear-obsidian"
                                                                class="woof-padding-1"
                                                            >
                                                                Apache Tear
                                                                Obsidian (1)
                                                            </option>
                                                            <option
                                                                value="black-obsidian"
                                                                class="woof-padding-1"
                                                            >
                                                                Black Obsidian
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="mahogany-obsidian"
                                                                class="woof-padding-1"
                                                            >
                                                                Mahogany
                                                                Obsidian (1)
                                                            </option>
                                                            <option
                                                                value="platinum-obsidian"
                                                                class="woof-padding-1"
                                                            >
                                                                Platinum
                                                                Obsidian (1)
                                                            </option>
                                                            <option
                                                                value="rainbow-obsidian"
                                                                class="woof-padding-1"
                                                            >
                                                                Rainbow Obsidian
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="sheen-obsidian"
                                                                class="woof-padding-1"
                                                            >
                                                                Sheen Obsidian
                                                                (4)
                                                            </option>
                                                            <option
                                                                value="snowflake-obsidian"
                                                                class="woof-padding-1"
                                                            >
                                                                Snowflake
                                                                Obsidian (1)
                                                            </option>
                                                            <option
                                                                value="spiderweb-obsidian"
                                                                class="woof-padding-1"
                                                            >
                                                                Spiderweb
                                                                Obsidian (1)
                                                            </option>
                                                            <option
                                                                value="onyx"
                                                            >
                                                                Onyx (3)
                                                            </option>
                                                            <option
                                                                value="opal"
                                                            >
                                                                Opal (9)
                                                            </option>
                                                            <option
                                                                value="green-opal"
                                                                class="woof-padding-1"
                                                            >
                                                                Green Opal (5)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="pink-opal"
                                                                class="woof-padding-1"
                                                            >
                                                                Pink Opal (0)
                                                            </option>
                                                            <option
                                                                value="purple-opal"
                                                                class="woof-padding-1"
                                                            >
                                                                Purple Opal (1)
                                                            </option>
                                                            <option
                                                                value="white-opal"
                                                                class="woof-padding-1"
                                                            >
                                                                White Opal (1)
                                                            </option>
                                                            <option
                                                                value="yellow-opal"
                                                                class="woof-padding-1"
                                                            >
                                                                Yellow Opal (1)
                                                            </option>
                                                            <option
                                                                value="peridot"
                                                            >
                                                                Peridot (1)
                                                            </option>
                                                            <option
                                                                value="petalite"
                                                            >
                                                                Petalite (2)
                                                            </option>
                                                            <option
                                                                value="petrified-wood-and-other-fossils"
                                                            >
                                                                Petrified Wood
                                                                &amp; Other
                                                                Fossils (9)
                                                            </option>
                                                            <option
                                                                value="petrified-wood"
                                                                class="woof-padding-1"
                                                            >
                                                                Petrified Wood
                                                                (5)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="sand-dollar-fossil"
                                                                class="woof-padding-1"
                                                            >
                                                                Sand Dollar
                                                                Fossil (0)
                                                            </option>
                                                            <option
                                                                value="shell-fossil"
                                                                class="woof-padding-1"
                                                            >
                                                                Shell Fossil (1)
                                                            </option>
                                                            <option
                                                                value="turritella-agate"
                                                                class="woof-padding-1"
                                                            >
                                                                Turritella Agate
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="vatican-stone"
                                                                class="woof-padding-1"
                                                            >
                                                                Vatican Stone
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="picasso-marble"
                                                            >
                                                                Picasso Marble
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="pietersite"
                                                            >
                                                                Pietersite (2)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="pipestone"
                                                            >
                                                                Pipestone (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="prasiolite"
                                                            >
                                                                Prasiolite (0)
                                                            </option>
                                                            <option
                                                                value="prehnite"
                                                            >
                                                                Prehnite (2)
                                                            </option>
                                                            <option
                                                                value="prehnite-epidote"
                                                                class="woof-padding-1"
                                                            >
                                                                Prehnite Epidote
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="preseli-bluestone"
                                                            >
                                                                Preseli
                                                                Bluestone (2)
                                                            </option>
                                                            <option
                                                                value="pyrite"
                                                            >
                                                                Pyrite (1)
                                                            </option>
                                                            <option
                                                                value="quartz"
                                                            >
                                                                Quartz (25)
                                                            </option>
                                                            <option
                                                                value="blue-quartz"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Quartz (1)
                                                            </option>
                                                            <option
                                                                value="chlorite-quartz"
                                                                class="woof-padding-1"
                                                            >
                                                                Chlorite Quartz
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="girasol-quartz"
                                                                class="woof-padding-1"
                                                            >
                                                                Girasol Quartz
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="snow-quartz"
                                                                class="woof-padding-1"
                                                            >
                                                                Snow Quartz (1)
                                                            </option>
                                                            <option
                                                                value="rhodochrosite"
                                                            >
                                                                Rhodochrosite
                                                                (2)
                                                            </option>
                                                            <option
                                                                value="rhodonite"
                                                            >
                                                                Rhodonite (8)
                                                            </option>
                                                            <option
                                                                value="rose-quartz"
                                                            >
                                                                Rose Quartz (3)
                                                            </option>
                                                            <option
                                                                value="girasol-rose-quartz"
                                                                class="woof-padding-1"
                                                            >
                                                                Girasol Rose
                                                                Quartz (1)
                                                            </option>
                                                            <option
                                                                value="ruby"
                                                            >
                                                                Ruby (11)
                                                            </option>
                                                            <option
                                                                value="ruby-fuchsite"
                                                                class="woof-padding-1"
                                                            >
                                                                Ruby Fuchsite
                                                                (3)
                                                            </option>
                                                            <option
                                                                value="ruby-iolite"
                                                                class="woof-padding-1"
                                                            >
                                                                Ruby Iolite (1)
                                                            </option>
                                                            <option
                                                                value="ruby-kyanite"
                                                                class="woof-padding-1"
                                                            >
                                                                Ruby Kyanite (2)
                                                            </option>
                                                            <option
                                                                value="ruby-zoisite"
                                                                class="woof-padding-1"
                                                            >
                                                                Ruby Zoisite (1)
                                                            </option>
                                                            <option
                                                                value="rutilated-quartz"
                                                            >
                                                                Rutilated Quartz
                                                                (2)
                                                            </option>
                                                            <option
                                                                value="sapphire"
                                                            >
                                                                Sapphire (3)
                                                            </option>
                                                            <option
                                                                value="blue-sapphire"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Sapphire
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="yellow-sapphire"
                                                                class="woof-padding-1"
                                                            >
                                                                Yellow Sapphire
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="sardonyx"
                                                            >
                                                                Sardonyx (4)
                                                            </option>
                                                            <option
                                                                value="scheelite-lace"
                                                            >
                                                                Scheelite Lace
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="scolecite"
                                                            >
                                                                Scolecite (4)
                                                            </option>
                                                            <option
                                                                value="selenite"
                                                            >
                                                                Selenite (8)
                                                            </option>
                                                            <option
                                                                value="orange-selenite"
                                                                class="woof-padding-1"
                                                            >
                                                                Orange Selenite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="septarian-nodule"
                                                            >
                                                                Septarian Nodule
                                                                (3)
                                                            </option>
                                                            <option
                                                                value="seraphinite"
                                                            >
                                                                Seraphinite (1)
                                                            </option>
                                                            <option
                                                                value="serpentine"
                                                            >
                                                                Serpentine (9)
                                                            </option>
                                                            <option
                                                                value="lizardite"
                                                                class="woof-padding-1"
                                                            >
                                                                Lizardite (3)
                                                            </option>
                                                            <option
                                                                value="infinite"
                                                                class="woof-padding-1"
                                                            >
                                                                Infinite (1)
                                                            </option>
                                                            <option
                                                                value="shattuckite"
                                                            >
                                                                Shattuckite (1)
                                                            </option>
                                                            <option
                                                                value="shiva-lingam"
                                                            >
                                                                Shiva Lingam (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="shungite"
                                                            >
                                                                Shungite (0)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="smithsonite"
                                                            >
                                                                Smithsonite (0)
                                                            </option>
                                                            <option
                                                                value="smoky-quartz"
                                                            >
                                                                Smoky Quartz (3)
                                                            </option>
                                                            <option
                                                                value="sodalite"
                                                            >
                                                                Sodalite (4)
                                                            </option>
                                                            <option
                                                                value="sunset-sodalite"
                                                                class="woof-padding-1"
                                                            >
                                                                Sunset Sodalite
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="stichtite"
                                                            >
                                                                Stichtite (2)
                                                            </option>
                                                            <option
                                                                value="stilbite"
                                                            >
                                                                Stilbite (1)
                                                            </option>
                                                            <option
                                                                value="stromatolite"
                                                            >
                                                                Stromatolite (3)
                                                            </option>
                                                            <option
                                                                value="mary-ellen-stromatolite"
                                                                class="woof-padding-1"
                                                            >
                                                                Mary Ellen
                                                                Stromatolite (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="sugilite"
                                                            >
                                                                Sugilite (0)
                                                            </option>
                                                            <option
                                                                value="sunstone"
                                                            >
                                                                Sunstone (6)
                                                            </option>
                                                            <option
                                                                value="sunstone-iolite"
                                                                class="woof-padding-1"
                                                            >
                                                                Sunstone Iolite
                                                                (1)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="super-seven"
                                                            >
                                                                Super Seven (0)
                                                            </option>
                                                            <option
                                                                value="tanzanite"
                                                            >
                                                                Tanzanite (2)
                                                            </option>
                                                            <option
                                                                value="prairie-tanzanite"
                                                                class="woof-padding-1"
                                                            >
                                                                Prairie
                                                                Tanzanite (1)
                                                            </option>
                                                            <option
                                                                value="tektite"
                                                            >
                                                                Tektite (3)
                                                            </option>
                                                            <option
                                                                value="libyan-desert-glass"
                                                                class="woof-padding-1"
                                                            >
                                                                Libyan Desert
                                                                Glass (1)
                                                            </option>
                                                            <option
                                                                value="thulite"
                                                            >
                                                                Thulite (2)
                                                            </option>
                                                            <option
                                                                value="tiffany-stone"
                                                            >
                                                                Tiffany Stone
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="tigers-eye"
                                                            >
                                                                Tiger&#039;s Eye
                                                                (4)
                                                            </option>
                                                            <option
                                                                value="gold-tigers-eye"
                                                                class="woof-padding-1"
                                                            >
                                                                Gold
                                                                Tiger&#039;s Eye
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="hawks-eye"
                                                                class="woof-padding-1"
                                                            >
                                                                Hawk&#039;s Eye
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="red-tigers-eye"
                                                                class="woof-padding-1"
                                                            >
                                                                Red Tiger&#039;s
                                                                Eye (1)
                                                            </option>
                                                            <option
                                                                value="tiger-iron"
                                                                class="woof-padding-1"
                                                            >
                                                                Tiger Iron (1)
                                                            </option>
                                                            <option
                                                                value="topaz"
                                                            >
                                                                Topaz (3)
                                                            </option>
                                                            <option
                                                                value="blue-topaz"
                                                                class="woof-padding-1"
                                                            >
                                                                Blue Topaz (1)
                                                            </option>
                                                            <option
                                                                value="imperial-topaz"
                                                                class="woof-padding-1"
                                                            >
                                                                Imperial Topaz
                                                                (1)
                                                            </option>
                                                            <option
                                                                value="tourmaline"
                                                            >
                                                                Tourmaline (13)
                                                            </option>
                                                            <option
                                                                value="black-tourmaline"
                                                                class="woof-padding-1"
                                                            >
                                                                Black Tourmaline
                                                                (4)
                                                            </option>
                                                            <option
                                                                value="dravite-tourmaline"
                                                                class="woof-padding-1"
                                                            >
                                                                Dravite
                                                                Tourmaline (2)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="green-tourmaline"
                                                                class="woof-padding-1"
                                                            >
                                                                Green Tourmaline
                                                                (0)
                                                            </option>
                                                            <option
                                                                value="pink-red-tourmaline"
                                                                class="woof-padding-1"
                                                            >
                                                                Pink and Red
                                                                Tourmaline (3)
                                                            </option>
                                                            <option
                                                                value="watermelon-tourmaline"
                                                                class="woof-padding-1"
                                                            >
                                                                Watermelon
                                                                Tourmaline (1)
                                                            </option>
                                                            <option
                                                                value="trolleite"
                                                            >
                                                                Trolleite (2)
                                                            </option>
                                                            <option
                                                                value="turquoise"
                                                            >
                                                                Turquoise (1)
                                                            </option>
                                                            <option
                                                                value="unakite"
                                                            >
                                                                Unakite (2)
                                                            </option>
                                                            <option
                                                                disabled=""
                                                                value="vanadinite"
                                                            >
                                                                Vanadinite (0)
                                                            </option>
                                                            <option
                                                                value="variscite"
                                                            >
                                                                Variscite (1)
                                                            </option>
                                                            <option
                                                                value="zoisite"
                                                            >
                                                                Zoisite (6)
                                                            </option>
                                                        </select>

                                                        <input
                                                            type="hidden"
                                                            value="Agate"
                                                            data-anchor="woof_n_product_cat_agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Apricot Agate"
                                                            data-anchor="woof_n_product_cat_apricot-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Lace Agate"
                                                            data-anchor="woof_n_product_cat_blue-lace-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Botswana Agate"
                                                            data-anchor="woof_n_product_cat_botswana-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Crazy Lace Agate"
                                                            data-anchor="woof_n_product_cat_crazy-lace-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Dendritic Agate"
                                                            data-anchor="woof_n_product_cat_dendritic-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Fire Agate"
                                                            data-anchor="woof_n_product_cat_fire-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Gray Agate"
                                                            data-anchor="woof_n_product_cat_gray-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Moss Agate"
                                                            data-anchor="woof_n_product_cat_moss-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Tree Agate"
                                                            data-anchor="woof_n_product_cat_tree-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Amazonite"
                                                            data-anchor="woof_n_product_cat_amazonite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Amber"
                                                            data-anchor="woof_n_product_cat_amber"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Amethyst"
                                                            data-anchor="woof_n_product_cat_amethyst"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Banded Amethyst"
                                                            data-anchor="woof_n_product_cat_banded-amethyst"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Brandberg Amethyst"
                                                            data-anchor="woof_n_product_cat_brandberg-amethyst"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Ametrine"
                                                            data-anchor="woof_n_product_cat_ametrine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Angelite"
                                                            data-anchor="woof_n_product_cat_angelite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Apatite"
                                                            data-anchor="woof_n_product_cat_apatite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Apatite"
                                                            data-anchor="woof_n_product_cat_blue-apatite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Green Apatite"
                                                            data-anchor="woof_n_product_cat_green-apatite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Apophyllite"
                                                            data-anchor="woof_n_product_cat_apophyllite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Green Apopyllite"
                                                            data-anchor="woof_n_product_cat_green-apophyllite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Aquamarine"
                                                            data-anchor="woof_n_product_cat_aquamarine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Aragonite"
                                                            data-anchor="woof_n_product_cat_aragonite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Aragonite"
                                                            data-anchor="woof_n_product_cat_blue-aragonite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Brown Aragonite"
                                                            data-anchor="woof_n_product_cat_brown-aragonite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pink Aragonite"
                                                            data-anchor="woof_n_product_cat_pink-aragonite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Red Aragonite"
                                                            data-anchor="woof_n_product_cat_red-aragonite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Atlantisite"
                                                            data-anchor="woof_n_product_cat_atlantisite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Auralite 23"
                                                            data-anchor="woof_n_product_cat_auralite-23"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Aventurine"
                                                            data-anchor="woof_n_product_cat_aventurine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Aventurine"
                                                            data-anchor="woof_n_product_cat_blue-aventurine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Green Aventurine"
                                                            data-anchor="woof_n_product_cat_green-aventurine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Orange Aventurine"
                                                            data-anchor="woof_n_product_cat_orange-aventurine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pink Aventurine"
                                                            data-anchor="woof_n_product_cat_pink-aventurine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Red Aventurine"
                                                            data-anchor="woof_n_product_cat_red-aventurine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="White Aventurine"
                                                            data-anchor="woof_n_product_cat_white-aventurine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Yellow Aventurine"
                                                            data-anchor="woof_n_product_cat_yellow-aventurine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Azurite"
                                                            data-anchor="woof_n_product_cat_azurite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Azurite Malachite"
                                                            data-anchor="woof_n_product_cat_azurite-malachite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="K2 Azurite"
                                                            data-anchor="woof_n_product_cat_k2-azurite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Barite"
                                                            data-anchor="woof_n_product_cat_barite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Bismuth"
                                                            data-anchor="woof_n_product_cat_bismuth"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Bloodstone"
                                                            data-anchor="woof_n_product_cat_bloodstone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Bornite"
                                                            data-anchor="woof_n_product_cat_bornite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Bronzite"
                                                            data-anchor="woof_n_product_cat_bronzite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Buddstone"
                                                            data-anchor="woof_n_product_cat_buddstone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Calcite"
                                                            data-anchor="woof_n_product_cat_calcite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Calcite"
                                                            data-anchor="woof_n_product_cat_blue-calcite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Gold Calcite"
                                                            data-anchor="woof_n_product_cat_gold-calcite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Green Calcite"
                                                            data-anchor="woof_n_product_cat_green-calcite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Mangano Calcite"
                                                            data-anchor="woof_n_product_cat_mangano-calcite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Orange Calcite"
                                                            data-anchor="woof_n_product_cat_orange-calcite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="White Calcite"
                                                            data-anchor="woof_n_product_cat_white-calcite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Carnelian"
                                                            data-anchor="woof_n_product_cat_carnelian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Cat&#039;s Eye"
                                                            data-anchor="woof_n_product_cat_cats-eye"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Cavansite"
                                                            data-anchor="woof_n_product_cat_cavansite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Celestine"
                                                            data-anchor="woof_n_product_cat_celestine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chalcedony"
                                                            data-anchor="woof_n_product_cat_chalcedony"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Chalcedony"
                                                            data-anchor="woof_n_product_cat_blue-chalcedony"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chrome Chalcedony"
                                                            data-anchor="woof_n_product_cat_chrome-chalcedony"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Cradle of Humankind"
                                                            data-anchor="woof_n_product_cat_cradle-of-humankind"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pink Chalcedony"
                                                            data-anchor="woof_n_product_cat_pink-chalcedony"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chalcopyrite"
                                                            data-anchor="woof_n_product_cat_chalcopyrite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Peacock Ore"
                                                            data-anchor="woof_n_product_cat_peacock-ore"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Charoite"
                                                            data-anchor="woof_n_product_cat_charoite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chiastolite"
                                                            data-anchor="woof_n_product_cat_chiastolite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chinese Writing Stone"
                                                            data-anchor="woof_n_product_cat_chinese-writing-stone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chrysanthemum Stone"
                                                            data-anchor="woof_n_product_cat_chrysanthemum-stone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chrysoberyl"
                                                            data-anchor="woof_n_product_cat_chrysoberyl"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chrysocolla"
                                                            data-anchor="woof_n_product_cat_chrysocolla"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chrysoprase"
                                                            data-anchor="woof_n_product_cat_chrysoprase"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Cinabrite"
                                                            data-anchor="woof_n_product_cat_cinabrite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Citrine"
                                                            data-anchor="woof_n_product_cat_citrine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Clear Quartz"
                                                            data-anchor="woof_n_product_cat_clear-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Copper"
                                                            data-anchor="woof_n_product_cat_copper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Coral"
                                                            data-anchor="woof_n_product_cat_coral"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Agatized Coral"
                                                            data-anchor="woof_n_product_cat_agatized-coral"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Coral"
                                                            data-anchor="woof_n_product_cat_blue-coral"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Red Coral"
                                                            data-anchor="woof_n_product_cat_red-coral"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Danburite"
                                                            data-anchor="woof_n_product_cat_danburite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Diopside"
                                                            data-anchor="woof_n_product_cat_diopside"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Dioptase"
                                                            data-anchor="woof_n_product_cat_dioptase"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Dragonstone"
                                                            data-anchor="woof_n_product_cat_dragonstone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Dumortierite"
                                                            data-anchor="woof_n_product_cat_dumortierite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Emerald"
                                                            data-anchor="woof_n_product_cat_emerald"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Epidote"
                                                            data-anchor="woof_n_product_cat_epidote"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Eudialyte"
                                                            data-anchor="woof_n_product_cat_eudialyte"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Fluorite"
                                                            data-anchor="woof_n_product_cat_fluorite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Fluorite"
                                                            data-anchor="woof_n_product_cat_blue-fluorite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Green Fluorite"
                                                            data-anchor="woof_n_product_cat_green-fluorite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rainbow Fluorite"
                                                            data-anchor="woof_n_product_cat_rainbow-fluorite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Yellow Fluorite"
                                                            data-anchor="woof_n_product_cat_yellow-fluorite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Fuchsite"
                                                            data-anchor="woof_n_product_cat_fuchsite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Galena"
                                                            data-anchor="woof_n_product_cat_galena"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Garnet"
                                                            data-anchor="woof_n_product_cat_garnet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Almandine Garnet"
                                                            data-anchor="woof_n_product_cat_almandine-garnet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Andradite Garnet"
                                                            data-anchor="woof_n_product_cat_andradite-garnet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Grossular Garnet"
                                                            data-anchor="woof_n_product_cat_grossular-garnet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Hessonite Garnet"
                                                            data-anchor="woof_n_product_cat_hessonite-garnet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rhodolite Garnet"
                                                            data-anchor="woof_n_product_cat_rhodolite-garnet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Spessartite Garnet"
                                                            data-anchor="woof_n_product_cat_spessartite-garnet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Uvarovite Garnet"
                                                            data-anchor="woof_n_product_cat_uvarovite-garnet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Garnierite"
                                                            data-anchor="woof_n_product_cat_garnierite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Hematite"
                                                            data-anchor="woof_n_product_cat_hematite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Howlite"
                                                            data-anchor="woof_n_product_cat_howlite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Idocrase"
                                                            data-anchor="woof_n_product_cat_idocrase"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Impactite"
                                                            data-anchor="woof_n_product_cat_impactite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Indigo Gabbro"
                                                            data-anchor="woof_n_product_cat_indigo-gabbro"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Iolite"
                                                            data-anchor="woof_n_product_cat_iolite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Jade"
                                                            data-anchor="woof_n_product_cat_jade"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Black Jade"
                                                            data-anchor="woof_n_product_cat_black-jade"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Jade"
                                                            data-anchor="woof_n_product_cat_blue-jade"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Green Jade"
                                                            data-anchor="woof_n_product_cat_green-jade"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Purple Jade"
                                                            data-anchor="woof_n_product_cat_purple-jade"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="White Jade"
                                                            data-anchor="woof_n_product_cat_white-jade"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Jasper"
                                                            data-anchor="woof_n_product_cat_jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Brecciated Jasper"
                                                            data-anchor="woof_n_product_cat_brecciate-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Bumblebee Jasper"
                                                            data-anchor="woof_n_product_cat_bumblebee-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Desert Jasper"
                                                            data-anchor="woof_n_product_cat_desert-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Dragon&#039;s Blood Jasper"
                                                            data-anchor="woof_n_product_cat_dragons-blood-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Kambaba Jasper"
                                                            data-anchor="woof_n_product_cat_kambaba-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Leopardskin Jasper"
                                                            data-anchor="woof_n_product_cat_leopardskin-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Mookaite Jasper"
                                                            data-anchor="woof_n_product_cat_mookaite-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Ocean Jasper"
                                                            data-anchor="woof_n_product_cat_ocean-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Outback Jasper"
                                                            data-anchor="woof_n_product_cat_outback-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Picture Jasper"
                                                            data-anchor="woof_n_product_cat_picture-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rainforest Jasper"
                                                            data-anchor="woof_n_product_cat_rainforest-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Red Jasper"
                                                            data-anchor="woof_n_product_cat_red-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Yellow Jasper"
                                                            data-anchor="woof_n_product_cat_yellow-jasper"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Jet"
                                                            data-anchor="woof_n_product_cat_jet"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Kammererite"
                                                            data-anchor="woof_n_product_cat_kammererite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Kunzite"
                                                            data-anchor="woof_n_product_cat_kunzite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Golden Kunzite"
                                                            data-anchor="woof_n_product_cat_golden-kunzite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Hiddenite"
                                                            data-anchor="woof_n_product_cat_hiddenite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pink Kunzite"
                                                            data-anchor="woof_n_product_cat_pink-kunzite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Kyanite"
                                                            data-anchor="woof_n_product_cat_kyanite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Labradorite"
                                                            data-anchor="woof_n_product_cat_labradorite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Golden Labradorite"
                                                            data-anchor="woof_n_product_cat_golden-labradorite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Larimar"
                                                            data-anchor="woof_n_product_cat_larimar"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Larvikite"
                                                            data-anchor="woof_n_product_cat_larvikite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Lepidolite"
                                                            data-anchor="woof_n_product_cat_lepidolite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Lithium Quartz"
                                                            data-anchor="woof_n_product_cat_lithium-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Lodestone"
                                                            data-anchor="woof_n_product_cat_lodestone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Magnesite"
                                                            data-anchor="woof_n_product_cat_magnesite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Citron Chrysoprase"
                                                            data-anchor="woof_n_product_cat_citron-chrysoprase"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Malachite"
                                                            data-anchor="woof_n_product_cat_malachite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Merlinite"
                                                            data-anchor="woof_n_product_cat_merlinite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Moldavite"
                                                            data-anchor="woof_n_product_cat_moldavite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Moonstone"
                                                            data-anchor="woof_n_product_cat_moonstone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Black Moonstone"
                                                            data-anchor="woof_n_product_cat_black-moonstone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Moonstone Tourmaline"
                                                            data-anchor="woof_n_product_cat_moonstone-tourmaline"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Peach Moonstone"
                                                            data-anchor="woof_n_product_cat_peach-moonstone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rainbow Moonstone"
                                                            data-anchor="woof_n_product_cat_rainbow-moonstone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Morganite"
                                                            data-anchor="woof_n_product_cat_morganite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Muscovite"
                                                            data-anchor="woof_n_product_cat_muscovite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Nuummite"
                                                            data-anchor="woof_n_product_cat_nuummite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Obsidian"
                                                            data-anchor="woof_n_product_cat_obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Apache Tear Obsidian"
                                                            data-anchor="woof_n_product_cat_apache-tear-obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Black Obsidian"
                                                            data-anchor="woof_n_product_cat_black-obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Mahogany Obsidian"
                                                            data-anchor="woof_n_product_cat_mahogany-obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Platinum Obsidian"
                                                            data-anchor="woof_n_product_cat_platinum-obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rainbow Obsidian"
                                                            data-anchor="woof_n_product_cat_rainbow-obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sheen Obsidian"
                                                            data-anchor="woof_n_product_cat_sheen-obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Snowflake Obsidian"
                                                            data-anchor="woof_n_product_cat_snowflake-obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Spiderweb Obsidian"
                                                            data-anchor="woof_n_product_cat_spiderweb-obsidian"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Onyx"
                                                            data-anchor="woof_n_product_cat_onyx"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Opal"
                                                            data-anchor="woof_n_product_cat_opal"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Green Opal"
                                                            data-anchor="woof_n_product_cat_green-opal"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pink Opal"
                                                            data-anchor="woof_n_product_cat_pink-opal"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Purple Opal"
                                                            data-anchor="woof_n_product_cat_purple-opal"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="White Opal"
                                                            data-anchor="woof_n_product_cat_white-opal"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Yellow Opal"
                                                            data-anchor="woof_n_product_cat_yellow-opal"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Peridot"
                                                            data-anchor="woof_n_product_cat_peridot"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Petalite"
                                                            data-anchor="woof_n_product_cat_petalite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Petrified Wood &amp; Other Fossils"
                                                            data-anchor="woof_n_product_cat_petrified-wood-and-other-fossils"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Petrified Wood"
                                                            data-anchor="woof_n_product_cat_petrified-wood"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sand Dollar Fossil"
                                                            data-anchor="woof_n_product_cat_sand-dollar-fossil"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Shell Fossil"
                                                            data-anchor="woof_n_product_cat_shell-fossil"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Turritella Agate"
                                                            data-anchor="woof_n_product_cat_turritella-agate"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Vatican Stone"
                                                            data-anchor="woof_n_product_cat_vatican-stone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Picasso Marble"
                                                            data-anchor="woof_n_product_cat_picasso-marble"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pietersite"
                                                            data-anchor="woof_n_product_cat_pietersite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pipestone"
                                                            data-anchor="woof_n_product_cat_pipestone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Prasiolite"
                                                            data-anchor="woof_n_product_cat_prasiolite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Prehnite"
                                                            data-anchor="woof_n_product_cat_prehnite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Prehnite Epidote"
                                                            data-anchor="woof_n_product_cat_prehnite-epidote"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Preseli Bluestone"
                                                            data-anchor="woof_n_product_cat_preseli-bluestone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pyrite"
                                                            data-anchor="woof_n_product_cat_pyrite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Quartz"
                                                            data-anchor="woof_n_product_cat_quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Quartz"
                                                            data-anchor="woof_n_product_cat_blue-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Chlorite Quartz"
                                                            data-anchor="woof_n_product_cat_chlorite-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Girasol Quartz"
                                                            data-anchor="woof_n_product_cat_girasol-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Snow Quartz"
                                                            data-anchor="woof_n_product_cat_snow-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rhodochrosite"
                                                            data-anchor="woof_n_product_cat_rhodochrosite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rhodonite"
                                                            data-anchor="woof_n_product_cat_rhodonite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rose Quartz"
                                                            data-anchor="woof_n_product_cat_rose-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Girasol Rose Quartz"
                                                            data-anchor="woof_n_product_cat_girasol-rose-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Ruby"
                                                            data-anchor="woof_n_product_cat_ruby"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Ruby Fuchsite"
                                                            data-anchor="woof_n_product_cat_ruby-fuchsite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Ruby Iolite"
                                                            data-anchor="woof_n_product_cat_ruby-iolite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Ruby Kyanite"
                                                            data-anchor="woof_n_product_cat_ruby-kyanite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Ruby Zoisite"
                                                            data-anchor="woof_n_product_cat_ruby-zoisite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rutilated Quartz"
                                                            data-anchor="woof_n_product_cat_rutilated-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sapphire"
                                                            data-anchor="woof_n_product_cat_sapphire"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Sapphire"
                                                            data-anchor="woof_n_product_cat_blue-sapphire"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Yellow Sapphire"
                                                            data-anchor="woof_n_product_cat_yellow-sapphire"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sardonyx"
                                                            data-anchor="woof_n_product_cat_sardonyx"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Scheelite Lace"
                                                            data-anchor="woof_n_product_cat_scheelite-lace"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Scolecite"
                                                            data-anchor="woof_n_product_cat_scolecite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Selenite"
                                                            data-anchor="woof_n_product_cat_selenite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Orange Selenite"
                                                            data-anchor="woof_n_product_cat_orange-selenite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Septarian Nodule"
                                                            data-anchor="woof_n_product_cat_septarian-nodule"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Seraphinite"
                                                            data-anchor="woof_n_product_cat_seraphinite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Serpentine"
                                                            data-anchor="woof_n_product_cat_serpentine"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Lizardite"
                                                            data-anchor="woof_n_product_cat_lizardite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Infinite"
                                                            data-anchor="woof_n_product_cat_infinite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Shattuckite"
                                                            data-anchor="woof_n_product_cat_shattuckite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Shiva Lingam"
                                                            data-anchor="woof_n_product_cat_shiva-lingam"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Shungite"
                                                            data-anchor="woof_n_product_cat_shungite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Smithsonite"
                                                            data-anchor="woof_n_product_cat_smithsonite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Smoky Quartz"
                                                            data-anchor="woof_n_product_cat_smoky-quartz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sodalite"
                                                            data-anchor="woof_n_product_cat_sodalite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sunset Sodalite"
                                                            data-anchor="woof_n_product_cat_sunset-sodalite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Stichtite"
                                                            data-anchor="woof_n_product_cat_stichtite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Stilbite"
                                                            data-anchor="woof_n_product_cat_stilbite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Stromatolite"
                                                            data-anchor="woof_n_product_cat_stromatolite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Mary Ellen Stromatolite"
                                                            data-anchor="woof_n_product_cat_mary-ellen-stromatolite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sugilite"
                                                            data-anchor="woof_n_product_cat_sugilite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sunstone"
                                                            data-anchor="woof_n_product_cat_sunstone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sunstone Iolite"
                                                            data-anchor="woof_n_product_cat_sunstone-iolite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Super Seven"
                                                            data-anchor="woof_n_product_cat_super-seven"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Tanzanite"
                                                            data-anchor="woof_n_product_cat_tanzanite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Prairie Tanzanite"
                                                            data-anchor="woof_n_product_cat_prairie-tanzanite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Tektite"
                                                            data-anchor="woof_n_product_cat_tektite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Libyan Desert Glass"
                                                            data-anchor="woof_n_product_cat_libyan-desert-glass"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Thulite"
                                                            data-anchor="woof_n_product_cat_thulite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Tiffany Stone"
                                                            data-anchor="woof_n_product_cat_tiffany-stone"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Tiger&#039;s Eye"
                                                            data-anchor="woof_n_product_cat_tigers-eye"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Gold Tiger&#039;s Eye"
                                                            data-anchor="woof_n_product_cat_gold-tigers-eye"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Hawk&#039;s Eye"
                                                            data-anchor="woof_n_product_cat_hawks-eye"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Red Tiger&#039;s Eye"
                                                            data-anchor="woof_n_product_cat_red-tigers-eye"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Tiger Iron"
                                                            data-anchor="woof_n_product_cat_tiger-iron"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Topaz"
                                                            data-anchor="woof_n_product_cat_topaz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Blue Topaz"
                                                            data-anchor="woof_n_product_cat_blue-topaz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Imperial Topaz"
                                                            data-anchor="woof_n_product_cat_imperial-topaz"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Tourmaline"
                                                            data-anchor="woof_n_product_cat_tourmaline"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Black Tourmaline"
                                                            data-anchor="woof_n_product_cat_black-tourmaline"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Dravite Tourmaline"
                                                            data-anchor="woof_n_product_cat_dravite-tourmaline"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Green Tourmaline"
                                                            data-anchor="woof_n_product_cat_green-tourmaline"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pink and Red Tourmaline"
                                                            data-anchor="woof_n_product_cat_pink-red-tourmaline"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Watermelon Tourmaline"
                                                            data-anchor="woof_n_product_cat_watermelon-tourmaline"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Trolleite"
                                                            data-anchor="woof_n_product_cat_trolleite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Turquoise"
                                                            data-anchor="woof_n_product_cat_turquoise"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Unakite"
                                                            data-anchor="woof_n_product_cat_unakite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Vanadinite"
                                                            data-anchor="woof_n_product_cat_vanadinite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Variscite"
                                                            data-anchor="woof_n_product_cat_variscite"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Zoisite"
                                                            data-anchor="woof_n_product_cat_zoisite"
                                                        />
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_product_cat"
                                                        value="Product categories"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_pa_crystal-type"
                                                class="woof_container woof_container_mselect woof_container_pa_crystal-type woof_container_1 woof_container_bytype woof_fs_pa_crystal-type"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_bytype"
                                                >
                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <label
                                                            class="woof_wcga_label_hide"
                                                            for="woof_tax_mselect_pa_crystal-type"
                                                            >BY TYPE ▼</label
                                                        >
                                                        <select
                                                            id="woof_tax_mselect_pa_crystal-type"
                                                            class="woof_mselect woof_mselect_pa_crystal-type"
                                                            data-placeholder="BY TYPE  ▼"
                                                            multiple=""
                                                            size="1"
                                                            name="pa_crystal-type"
                                                        >
                                                            <option
                                                                value="0"
                                                            ></option>
                                                            <option
                                                                value="crystal-bracelets"
                                                            >
                                                                Crystal
                                                                Bracelets (2)
                                                            </option>
                                                            <option
                                                                value="crystal-gemstones"
                                                            >
                                                                Crystal
                                                                Gemstones (15)
                                                            </option>
                                                            <option
                                                                value="crystal-hearts"
                                                            >
                                                                Crystal Hearts
                                                                (49)
                                                            </option>
                                                            <option
                                                                value="crystal-moons"
                                                            >
                                                                Crystal Moons
                                                                (7)
                                                            </option>
                                                            <option
                                                                value="crystal-pocket-stones"
                                                            >
                                                                Crystal Pocket
                                                                Stones (241)
                                                            </option>
                                                            <option
                                                                value="crystal-wands"
                                                            >
                                                                Crystal Wands
                                                                (13)
                                                            </option>
                                                            <option
                                                                value="rough-stones"
                                                            >
                                                                Rough Stones
                                                                (17)
                                                            </option>
                                                            <option
                                                                value="spiritual-accessories"
                                                            >
                                                                Spiritual
                                                                Accessories (2)
                                                            </option>
                                                            <option
                                                                value="charging-plates"
                                                            >
                                                                Charging Plates
                                                                (3)
                                                            </option>
                                                        </select>

                                                        <input
                                                            type="hidden"
                                                            value="Crystal Bracelets"
                                                            data-anchor="woof_n_pa_crystal-type_crystal-bracelets"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Crystal Gemstones"
                                                            data-anchor="woof_n_pa_crystal-type_crystal-gemstones"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Crystal Hearts"
                                                            data-anchor="woof_n_pa_crystal-type_crystal-hearts"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Crystal Moons"
                                                            data-anchor="woof_n_pa_crystal-type_crystal-moons"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Crystal Pocket Stones"
                                                            data-anchor="woof_n_pa_crystal-type_crystal-pocket-stones"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Crystal Wands"
                                                            data-anchor="woof_n_pa_crystal-type_crystal-wands"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Rough Stones"
                                                            data-anchor="woof_n_pa_crystal-type_rough-stones"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Spiritual Accessories"
                                                            data-anchor="woof_n_pa_crystal-type_spiritual-accessories"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Charging Plates"
                                                            data-anchor="woof_n_pa_crystal-type_charging-plates"
                                                        />
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_pa_crystal-type"
                                                        value="Product Type"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_product_tag"
                                                class="woof_container woof_container_mselect woof_container_product_tag woof_container_2 woof_container_byhealingproperties woof_fs_product_tag"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_byhealingproperties"
                                                >
                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <label
                                                            class="woof_wcga_label_hide"
                                                            for="woof_tax_mselect_product_tag"
                                                            >BY HEALING
                                                            PROPERTIES ▼</label
                                                        >
                                                        <select
                                                            id="woof_tax_mselect_product_tag"
                                                            class="woof_mselect woof_mselect_product_tag"
                                                            data-placeholder="BY HEALING PROPERTIES ▼"
                                                            multiple=""
                                                            size="1"
                                                            name="product_tag"
                                                        >
                                                            <option
                                                                value="0"
                                                            ></option>
                                                            <option
                                                                value="crystals-for-addiction"
                                                            >
                                                                Addiction (40)
                                                            </option>
                                                            <option
                                                                value="crystals-for-anxiety"
                                                            >
                                                                Anxiety (44)
                                                            </option>
                                                            <option
                                                                value="crystals-for-attracting-love"
                                                            >
                                                                Attracting Love
                                                                (31)
                                                            </option>
                                                            <option
                                                                value="crystals-for-balance"
                                                            >
                                                                Balance (78)
                                                            </option>
                                                            <option
                                                                value="crystals-for-calming"
                                                            >
                                                                Calming (78)
                                                            </option>
                                                            <option
                                                                value="crystals-for-clarity"
                                                            >
                                                                Clarity (89)
                                                            </option>
                                                            <option
                                                                value="crystals-for-cleansing"
                                                            >
                                                                Cleansing (29)
                                                            </option>
                                                            <option
                                                                value="crystals-for-communication"
                                                            >
                                                                Communication
                                                                (33)
                                                            </option>
                                                            <option
                                                                value="crystals-for-compassion"
                                                            >
                                                                Compassion (56)
                                                            </option>
                                                            <option
                                                                value="crystals-for-confidence"
                                                            >
                                                                Confidence (89)
                                                            </option>
                                                            <option
                                                                value="crystals-for-creativity"
                                                            >
                                                                Creativity (30)
                                                            </option>
                                                            <option
                                                                value="crystals-for-depression"
                                                            >
                                                                Depression (46)
                                                            </option>
                                                            <option
                                                                value="crystals-for-direction"
                                                            >
                                                                Direction (29)
                                                            </option>
                                                            <option
                                                                value="crystals-for-energy"
                                                            >
                                                                Energy (35)
                                                            </option>
                                                            <option
                                                                value="crystals-for-fertility"
                                                            >
                                                                Fertility (26)
                                                            </option>
                                                            <option
                                                                value="crystals-for-forgiveness"
                                                            >
                                                                Forgiveness (41)
                                                            </option>
                                                            <option
                                                                value="crystals-for-friendship"
                                                            >
                                                                Friendship (40)
                                                            </option>
                                                            <option
                                                                value="crystals-for-good-luck"
                                                            >
                                                                Good Luck (19)
                                                            </option>
                                                            <option
                                                                value="crystals-for-grief"
                                                            >
                                                                Grief (22)
                                                            </option>
                                                            <option
                                                                value="crystals-for-grounding"
                                                            >
                                                                Grounding (88)
                                                            </option>
                                                            <option
                                                                value="crystals-for-happiness"
                                                            >
                                                                Happiness (66)
                                                            </option>
                                                            <option
                                                                value="crystals-for-headaches"
                                                            >
                                                                Headaches (17)
                                                            </option>
                                                            <option
                                                                value="crystals-for-love"
                                                            >
                                                                Love (54)
                                                            </option>
                                                            <option
                                                                value="crystals-for-manifesting"
                                                            >
                                                                Manifesting (27)
                                                            </option>
                                                            <option
                                                                value="crystals-for-meditation"
                                                            >
                                                                Meditation (61)
                                                            </option>
                                                            <option
                                                                value="crystals-for-money"
                                                            >
                                                                Money (52)
                                                            </option>
                                                            <option
                                                                value="crystals-for-motivation"
                                                            >
                                                                Motivation (12)
                                                            </option>
                                                            <option
                                                                value="crystals-for-new-beginnings"
                                                            >
                                                                New Beginnings
                                                                (29)
                                                            </option>
                                                            <option
                                                                value="crystals-for-patience"
                                                            >
                                                                Patience (56)
                                                            </option>
                                                            <option
                                                                value="crystals-for-peace"
                                                            >
                                                                Peace (96)
                                                            </option>
                                                            <option
                                                                value="crystals-for-plants"
                                                            >
                                                                Plants (24)
                                                            </option>
                                                            <option
                                                                value="crystals-for-pregnancy"
                                                            >
                                                                Pregnancy (24)
                                                            </option>
                                                            <option
                                                                value="crystals-for-protection"
                                                            >
                                                                Protection (42)
                                                            </option>
                                                            <option
                                                                value="crystals-for-reiki"
                                                            >
                                                                Reiki (12)
                                                            </option>
                                                            <option
                                                                value="crystals-for-relationships"
                                                            >
                                                                Relationships
                                                                (21)
                                                            </option>
                                                            <option
                                                                value="crystals-for-school"
                                                            >
                                                                School (37)
                                                            </option>
                                                            <option
                                                                value="crystals-for-self-love"
                                                            >
                                                                Self Love (42)
                                                            </option>
                                                            <option
                                                                value="crystals-for-sex"
                                                            >
                                                                Sex (43)
                                                            </option>
                                                            <option
                                                                value="crystals-for-sleep"
                                                            >
                                                                Sleep (38)
                                                            </option>
                                                            <option
                                                                value="crystals-for-strength"
                                                            >
                                                                Strength (29)
                                                            </option>
                                                            <option
                                                                value="crystals-for-stress"
                                                            >
                                                                Stress (46)
                                                            </option>
                                                            <option
                                                                value="crystals-for-success"
                                                            >
                                                                Success (26)
                                                            </option>
                                                            <option
                                                                value="crystals-for-transformation"
                                                            >
                                                                Transformation
                                                                (31)
                                                            </option>
                                                            <option
                                                                value="crystals-for-trauma"
                                                            >
                                                                Trauma (62)
                                                            </option>
                                                            <option
                                                                value="crystals-for-travel"
                                                            >
                                                                Travel (7)
                                                            </option>
                                                            <option
                                                                value="crystals-for-weight-loss"
                                                            >
                                                                Weight Loss (15)
                                                            </option>
                                                            <option
                                                                value="crystals-for-work"
                                                            >
                                                                Work (14)
                                                            </option>
                                                            <option
                                                                value="crystals-for-yoga"
                                                            >
                                                                Yoga (16)
                                                            </option>
                                                        </select>

                                                        <input
                                                            type="hidden"
                                                            value="Addiction"
                                                            data-anchor="woof_n_product_tag_crystals-for-addiction"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Anxiety"
                                                            data-anchor="woof_n_product_tag_crystals-for-anxiety"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Attracting Love"
                                                            data-anchor="woof_n_product_tag_crystals-for-attracting-love"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Balance"
                                                            data-anchor="woof_n_product_tag_crystals-for-balance"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Calming"
                                                            data-anchor="woof_n_product_tag_crystals-for-calming"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Clarity"
                                                            data-anchor="woof_n_product_tag_crystals-for-clarity"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Cleansing"
                                                            data-anchor="woof_n_product_tag_crystals-for-cleansing"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Communication"
                                                            data-anchor="woof_n_product_tag_crystals-for-communication"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Compassion"
                                                            data-anchor="woof_n_product_tag_crystals-for-compassion"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Confidence"
                                                            data-anchor="woof_n_product_tag_crystals-for-confidence"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Creativity"
                                                            data-anchor="woof_n_product_tag_crystals-for-creativity"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Depression"
                                                            data-anchor="woof_n_product_tag_crystals-for-depression"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Direction"
                                                            data-anchor="woof_n_product_tag_crystals-for-direction"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Energy"
                                                            data-anchor="woof_n_product_tag_crystals-for-energy"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Fertility"
                                                            data-anchor="woof_n_product_tag_crystals-for-fertility"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Forgiveness"
                                                            data-anchor="woof_n_product_tag_crystals-for-forgiveness"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Friendship"
                                                            data-anchor="woof_n_product_tag_crystals-for-friendship"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Good Luck"
                                                            data-anchor="woof_n_product_tag_crystals-for-good-luck"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Grief"
                                                            data-anchor="woof_n_product_tag_crystals-for-grief"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Grounding"
                                                            data-anchor="woof_n_product_tag_crystals-for-grounding"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Happiness"
                                                            data-anchor="woof_n_product_tag_crystals-for-happiness"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Headaches"
                                                            data-anchor="woof_n_product_tag_crystals-for-headaches"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Love"
                                                            data-anchor="woof_n_product_tag_crystals-for-love"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Manifesting"
                                                            data-anchor="woof_n_product_tag_crystals-for-manifesting"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Meditation"
                                                            data-anchor="woof_n_product_tag_crystals-for-meditation"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Money"
                                                            data-anchor="woof_n_product_tag_crystals-for-money"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Motivation"
                                                            data-anchor="woof_n_product_tag_crystals-for-motivation"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="New Beginnings"
                                                            data-anchor="woof_n_product_tag_crystals-for-new-beginnings"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Patience"
                                                            data-anchor="woof_n_product_tag_crystals-for-patience"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Peace"
                                                            data-anchor="woof_n_product_tag_crystals-for-peace"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Plants"
                                                            data-anchor="woof_n_product_tag_crystals-for-plants"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Pregnancy"
                                                            data-anchor="woof_n_product_tag_crystals-for-pregnancy"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Protection"
                                                            data-anchor="woof_n_product_tag_crystals-for-protection"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Reiki"
                                                            data-anchor="woof_n_product_tag_crystals-for-reiki"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Relationships"
                                                            data-anchor="woof_n_product_tag_crystals-for-relationships"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="School"
                                                            data-anchor="woof_n_product_tag_crystals-for-school"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Self Love"
                                                            data-anchor="woof_n_product_tag_crystals-for-self-love"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sex"
                                                            data-anchor="woof_n_product_tag_crystals-for-sex"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Sleep"
                                                            data-anchor="woof_n_product_tag_crystals-for-sleep"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Strength"
                                                            data-anchor="woof_n_product_tag_crystals-for-strength"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Stress"
                                                            data-anchor="woof_n_product_tag_crystals-for-stress"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Success"
                                                            data-anchor="woof_n_product_tag_crystals-for-success"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Transformation"
                                                            data-anchor="woof_n_product_tag_crystals-for-transformation"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Trauma"
                                                            data-anchor="woof_n_product_tag_crystals-for-trauma"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Travel"
                                                            data-anchor="woof_n_product_tag_crystals-for-travel"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Weight Loss"
                                                            data-anchor="woof_n_product_tag_crystals-for-weight-loss"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Work"
                                                            data-anchor="woof_n_product_tag_crystals-for-work"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            value="Yoga"
                                                            data-anchor="woof_n_product_tag_crystals-for-yoga"
                                                        />
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_product_tag"
                                                        value="Product tags"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_pa_color"
                                                class="woof_container woof_container_color woof_container_pa_color woof_container_5 woof_container_bycolor woof_fs_pa_color"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_bycolor"
                                                >
                                                    <h4>
                                                        By Color
                                                        <a
                                                            href="javascript: void(0);"
                                                            title="toggle"
                                                            class="woof_front_toggle woof_front_toggle_opened"
                                                            data-condition="opened"
                                                            >-</a
                                                        >
                                                    </h4>

                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <ul
                                                            class="woof_list woof_list_color"
                                                            data-type="checkbox"
                                                        >
                                                            <li
                                                                class="woof_color_term_#dd3333 woof_color_term_181"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_red-healing-crystals"
                                                                        >Red
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_red-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_181_654fe1e6537ab"
                                                                        class="woof_color_term woof_color_term_181"
                                                                        data-color="#dd3333"
                                                                        data-img="/wp-content/uploads/Red-Healing-Crystals.jpg"
                                                                        data-tax="pa_color"
                                                                        name="red-healing-crystals"
                                                                        data-term-id="181"
                                                                        value="181"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Red Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_red-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#ea9c00 woof_color_term_184"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_orange-healing-crystals"
                                                                        >Orange
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_orange-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_184_654fe1e65404a"
                                                                        class="woof_color_term woof_color_term_184"
                                                                        data-color="#ea9c00"
                                                                        data-img="/wp-content/uploads/Orange-Healing-Crystals.jpg"
                                                                        data-tax="pa_color"
                                                                        name="orange-healing-crystals"
                                                                        data-term-id="184"
                                                                        value="184"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Orange Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_orange-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#eded00 woof_color_term_179"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_yellow-healing-crystals"
                                                                        >Yellow
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_yellow-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_179_654fe1e6547da"
                                                                        class="woof_color_term woof_color_term_179"
                                                                        data-color="#eded00"
                                                                        data-img="/wp-content/uploads/Yellow-Healing-Crystals3.jpg"
                                                                        data-tax="pa_color"
                                                                        name="yellow-healing-crystals"
                                                                        data-term-id="179"
                                                                        value="179"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Yellow Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_yellow-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#409b30 woof_color_term_186"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_green-healing-crystals"
                                                                        >Green
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_green-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_186_654fe1e654f67"
                                                                        class="woof_color_term woof_color_term_186"
                                                                        data-color="#409b30"
                                                                        data-img="/wp-content/uploads/Green-Healing-Crystals2.jpg"
                                                                        data-tax="pa_color"
                                                                        name="green-healing-crystals"
                                                                        data-term-id="186"
                                                                        value="186"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Green Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_green-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#2751f7 woof_color_term_189"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_blue-healing-crystals"
                                                                        >Blue
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_blue-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_189_654fe1e655997"
                                                                        class="woof_color_term woof_color_term_189"
                                                                        data-color="#2751f7"
                                                                        data-img="/wp-content/uploads/Blue-Healing-Crystals3.jpg"
                                                                        data-tax="pa_color"
                                                                        name="blue-healing-crystals"
                                                                        data-term-id="189"
                                                                        value="189"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Blue Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_blue-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#f279a1 woof_color_term_183"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_pink-healing-crystals"
                                                                        >Pink
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_pink-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_183_654fe1e656341"
                                                                        class="woof_color_term woof_color_term_183"
                                                                        data-color="#f279a1"
                                                                        data-img="/wp-content/uploads/Pink-Healing-Crystals.jpg"
                                                                        data-tax="pa_color"
                                                                        name="pink-healing-crystals"
                                                                        data-term-id="183"
                                                                        value="183"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Pink Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_pink-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#693681 woof_color_term_182"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_purple-healing-crystals"
                                                                        >Purple
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_purple-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_182_654fe1e656e78"
                                                                        class="woof_color_term woof_color_term_182"
                                                                        data-color="#693681"
                                                                        data-img="/wp-content/uploads/Purple-Healing-Crystals2.jpg"
                                                                        data-tax="pa_color"
                                                                        name="purple-healing-crystals"
                                                                        data-term-id="182"
                                                                        value="182"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Purple Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_purple-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#000000 woof_color_term_190"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_black-healing-crystals"
                                                                        >Black
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_black-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_190_654fe1e6578c3"
                                                                        class="woof_color_term woof_color_term_190"
                                                                        data-color="#000000"
                                                                        data-img="/wp-content/uploads/Black-Healing-Crystals3.jpg"
                                                                        data-tax="pa_color"
                                                                        name="black-healing-crystals"
                                                                        data-term-id="190"
                                                                        value="190"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Black Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_black-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#723100 woof_color_term_188"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_brown-healing-crystals"
                                                                        >Brown
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_brown-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_188_654fe1e65830e"
                                                                        class="woof_color_term woof_color_term_188"
                                                                        data-color="#723100"
                                                                        data-img="/wp-content/uploads/Brown-Healing-Crystals.jpg"
                                                                        data-tax="pa_color"
                                                                        name="brown-healing-crystals"
                                                                        data-term-id="188"
                                                                        value="188"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Brown Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_brown-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#969696 woof_color_term_187"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_gray-healing-crystals"
                                                                        >Gray
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_gray-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_187_654fe1e658b3f"
                                                                        class="woof_color_term woof_color_term_187"
                                                                        data-color="#969696"
                                                                        data-img="/wp-content/uploads/Grey-Healing-Crystals3.jpg"
                                                                        data-tax="pa_color"
                                                                        name="gray-healing-crystals"
                                                                        data-term-id="187"
                                                                        value="187"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Gray Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_gray-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#f7f7f7 woof_color_term_180"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_white-healing-crystals"
                                                                        >White
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_white-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_180_654fe1e659361"
                                                                        class="woof_color_term woof_color_term_180"
                                                                        data-color="#f7f7f7"
                                                                        data-img="/wp-content/uploads/White-Healing-Crystals3.jpg"
                                                                        data-tax="pa_color"
                                                                        name="white-healing-crystals"
                                                                        data-term-id="180"
                                                                        value="180"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="White Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_white-healing-crystals"
                                                                />
                                                            </li>
                                                            <li
                                                                class="woof_color_term_#000000 woof_color_term_185"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <label
                                                                        class="woof_wcga_label_hide"
                                                                        for="woof_tax_color_multi-colored-healing-crystals"
                                                                        >Multi-Colored
                                                                        Healing
                                                                        Crystals</label
                                                                    >
                                                                    <input
                                                                        id="woof_tax_color_multi-colored-healing-crystals"
                                                                        type="checkbox"
                                                                        id="woof_185_654fe1e659c64"
                                                                        class="woof_color_term woof_color_term_185"
                                                                        data-color="#000000"
                                                                        data-img="/wp-content/uploads/multi-colored-healing-crystals.jpg"
                                                                        data-tax="pa_color"
                                                                        name="multi-colored-healing-crystals"
                                                                        data-term-id="185"
                                                                        value="185"
                                                                    />
                                                                </p>

                                                                <input
                                                                    type="hidden"
                                                                    value="Multi-Colored Healing Crystals"
                                                                    data-anchor="woof_n_pa_color_multi-colored-healing-crystals"
                                                                />
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="clear clearfix"
                                                        ></div>
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_pa_color"
                                                        value="Product Color"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_pa_size"
                                                class="woof_container woof_container_slider woof_container_pa_size woof_container_6 woof_container_bysizeinches woof_fs_pa_size"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_bysizeinches"
                                                >
                                                    <h4>
                                                        By Size (inches)
                                                        <a
                                                            href="javascript: void(0);"
                                                            title="toggle"
                                                            class="woof_front_toggle woof_front_toggle_opened"
                                                            data-condition="opened"
                                                            >-</a
                                                        >
                                                    </h4>

                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <input
                                                            type="hidden"
                                                            value=""
                                                            data-anchor="woof_n_pa_size_all_range"
                                                        />

                                                        <label
                                                            class="woof_wcga_label_hide"
                                                            for="woof_slider_pa_size"
                                                            >By Size
                                                            (inches)</label
                                                        >
                                                        <input
                                                            class="woof_taxrange_slider"
                                                            value=""
                                                            data-skin="round"
                                                            data-grid_step="0"
                                                            data-current=""
                                                            data-max="12"
                                                            data-slags="25-in,5-in,75-in,1-in,1-25-in,1-5-in,1-75-in,2-in,2-25-in,2-5-in,2-75-in,3-in"
                                                            data-values=".25,.5,.75,1,1.25,1.5,1.75,2,2.25,2.5,2.75,3+"
                                                            data-tax="pa_size"
                                                            id="woof_slider_pa_size"
                                                        />
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_pa_size"
                                                        value="Product Average Size"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_pa_chakra"
                                                class="woof_container woof_container_image woof_container_pa_chakra woof_container_7 woof_container_bychakra woof_fs_pa_chakra"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_bychakra"
                                                >
                                                    <h4>
                                                        By Chakra
                                                        <a
                                                            href="javascript: void(0);"
                                                            title="toggle"
                                                            class="woof_front_toggle woof_front_toggle_opened"
                                                            data-condition="opened"
                                                            >-</a
                                                        >
                                                    </h4>

                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <ul
                                                            class="woof_list woof_list_image"
                                                            data-type="checkbox"
                                                        >
                                                            <li
                                                                class="woof_image_term_li_210"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Crown
                                                                        Chakra
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(120)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_crown-chakra-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 225px;
            height: 35px;
            margin: -5px 0px -12px 0px !important;
            background-size: 100% 100%;
            background-clip: content-box;
            border: 2px solid #ffffff00;
            padding: 0px;
            color: #292f38;
            font-size: 0;
            text-align: center;
            cursor: pointer;
            border-radius: 4px;
            transition: border-color .35s ease;"
                                                                        id="woof_210_654fe1e65ab51"
                                                                        class="woof_image_term woof_image_term_210"
                                                                        data-image="/wp-content/uploads/Crown-Chakra-Healing-Crystals.jpg"
                                                                        data-tax="pa_chakra"
                                                                        name="crown-chakra-healing-crystals"
                                                                        value="210"
                                                                        data-term-id="210"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Crown Chakra Healing Crystals"
                                                                    data-anchor="woof_n_pa_chakra_crown-chakra-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_crown-chakra-healing-crystals"
                                                                    >Crown
                                                                    Chakra
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_205"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Third
                                                                        Eye
                                                                        Chakra
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(152)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_third-eye-chakra-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 225px;
height: 35px;
margin: -1px 0px -12px 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_205_654fe1e65b82d"
                                                                        class="woof_image_term woof_image_term_205"
                                                                        data-image="/wp-content/uploads/Third-Eye-Chakra-Healing-Crystals.jpg"
                                                                        data-tax="pa_chakra"
                                                                        name="third-eye-chakra-healing-crystals"
                                                                        value="205"
                                                                        data-term-id="205"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Third Eye Chakra Healing Crystals"
                                                                    data-anchor="woof_n_pa_chakra_third-eye-chakra-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_third-eye-chakra-healing-crystals"
                                                                    >Third Eye
                                                                    Chakra
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_204"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Throat
                                                                        Chakra
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(90)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_throat-chakra-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 225px;
height: 35px;
margin: -1px 0px -12px 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_204_654fe1e65c7b7"
                                                                        class="woof_image_term woof_image_term_204"
                                                                        data-image="/wp-content/uploads/Throat-Chakra-Healing-Crystals.jpg"
                                                                        data-tax="pa_chakra"
                                                                        name="throat-chakra-healing-crystals"
                                                                        value="204"
                                                                        data-term-id="204"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Throat Chakra Healing Crystals"
                                                                    data-anchor="woof_n_pa_chakra_throat-chakra-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_throat-chakra-healing-crystals"
                                                                    >Throat
                                                                    Chakra
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_209"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Heart
                                                                        Chakra
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(176)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_heart-chakra-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 225px;
height: 35px;
margin: -1px 0px -12px 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_209_654fe1e65d360"
                                                                        class="woof_image_term woof_image_term_209"
                                                                        data-image="/wp-content/uploads/Heart-Chakra-Healing-Crystals.jpg"
                                                                        data-tax="pa_chakra"
                                                                        name="heart-chakra-healing-crystals"
                                                                        value="209"
                                                                        data-term-id="209"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Heart Chakra Healing Crystals"
                                                                    data-anchor="woof_n_pa_chakra_heart-chakra-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_heart-chakra-healing-crystals"
                                                                    >Heart
                                                                    Chakra
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_206"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Solar
                                                                        Plexus
                                                                        Chakra
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(118)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_solar-plexus-chakra-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 225px;
height: 35px;
margin: -1px 0px -12px 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_206_654fe1e65e424"
                                                                        class="woof_image_term woof_image_term_206"
                                                                        data-image="/wp-content/uploads/Solar-Plexus-Chakra-Healing-Crystals2.jpg"
                                                                        data-tax="pa_chakra"
                                                                        name="solar-plexus-chakra-healing-crystals"
                                                                        value="206"
                                                                        data-term-id="206"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Solar Plexus Chakra Healing Crystals"
                                                                    data-anchor="woof_n_pa_chakra_solar-plexus-chakra-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_solar-plexus-chakra-healing-crystals"
                                                                    >Solar
                                                                    Plexus
                                                                    Chakra
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_207"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Sacral
                                                                        Chakra
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(99)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_sacral-chakra-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 225px;
height: 35px;
margin: -1px 0px -12px 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_207_654fe1e65f208"
                                                                        class="woof_image_term woof_image_term_207"
                                                                        data-image="/wp-content/uploads/Sacral-Chakra-Healing-Crystals.jpg"
                                                                        data-tax="pa_chakra"
                                                                        name="sacral-chakra-healing-crystals"
                                                                        value="207"
                                                                        data-term-id="207"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Sacral Chakra Healing Crystals"
                                                                    data-anchor="woof_n_pa_chakra_sacral-chakra-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_sacral-chakra-healing-crystals"
                                                                    >Sacral
                                                                    Chakra
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_208"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Root
                                                                        Chakra
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(176)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_root-chakra-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 225px;
height: 35px;
margin: -1px 0px -11px 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_208_654fe1e65febd"
                                                                        class="woof_image_term woof_image_term_208"
                                                                        data-image="/wp-content/uploads/Root-Chakra-Healing-Crystals.jpg"
                                                                        data-tax="pa_chakra"
                                                                        name="root-chakra-healing-crystals"
                                                                        value="208"
                                                                        data-term-id="208"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Root Chakra Healing Crystals"
                                                                    data-anchor="woof_n_pa_chakra_root-chakra-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_root-chakra-healing-crystals"
                                                                    >Root Chakra
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="clear clearfix"
                                                        ></div>
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_pa_chakra"
                                                        value="Product Chakra"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_pa_zodiac"
                                                class="woof_container woof_container_image woof_container_pa_zodiac woof_container_8 woof_container_byzodiac woof_fs_pa_zodiac"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_byzodiac"
                                                >
                                                    <h4>
                                                        By Zodiac
                                                        <a
                                                            href="javascript: void(0);"
                                                            title="toggle"
                                                            class="woof_front_toggle woof_front_toggle_opened"
                                                            data-condition="opened"
                                                            >-</a
                                                        >
                                                    </h4>

                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <ul
                                                            class="woof_list woof_list_image"
                                                            data-type="checkbox"
                                                        >
                                                            <li
                                                                class="woof_image_term_li_202"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Aquarius
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(39)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_aquarius-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_202_654fe1e661116"
                                                                        class="woof_image_term woof_image_term_202"
                                                                        data-image="/wp-content/uploads/Aquarius-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="aquarius-healing-crystals"
                                                                        value="202"
                                                                        data-term-id="202"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Aquarius Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_aquarius-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_aquarius-healing-crystals"
                                                                    >Aquarius
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_201"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Aries
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(71)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_aries-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_201_654fe1e661937"
                                                                        class="woof_image_term woof_image_term_201"
                                                                        data-image="/wp-content/uploads/Aries-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="aries-healing-crystals"
                                                                        value="201"
                                                                        data-term-id="201"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Aries Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_aries-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_aries-healing-crystals"
                                                                    >Aries
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_200"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Cancer
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(66)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_cancer-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_200_654fe1e662380"
                                                                        class="woof_image_term woof_image_term_200"
                                                                        data-image="/wp-content/uploads/Cancer-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="cancer-healing-crystals"
                                                                        value="200"
                                                                        data-term-id="200"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Cancer Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_cancer-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_cancer-healing-crystals"
                                                                    >Cancer
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_199"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Capricorn
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(59)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_capricorn-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_199_654fe1e662ee3"
                                                                        class="woof_image_term woof_image_term_199"
                                                                        data-image="/wp-content/uploads/Capricorn-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="capricorn-healing-crystals"
                                                                        value="199"
                                                                        data-term-id="199"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Capricorn Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_capricorn-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_capricorn-healing-crystals"
                                                                    >Capricorn
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_198"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Gemini
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(85)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_gemini-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_198_654fe1e663961"
                                                                        class="woof_image_term woof_image_term_198"
                                                                        data-image="/wp-content/uploads/Gemini-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="gemini-healing-crystals"
                                                                        value="198"
                                                                        data-term-id="198"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Gemini Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_gemini-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_gemini-healing-crystals"
                                                                    >Gemini
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_197"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Leo
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(82)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_leo-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_197_654fe1e66709f"
                                                                        class="woof_image_term woof_image_term_197"
                                                                        data-image="/wp-content/uploads/Leo-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="leo-healing-crystals"
                                                                        value="197"
                                                                        data-term-id="197"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Leo Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_leo-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_leo-healing-crystals"
                                                                    >Leo Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_196"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Libra
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(95)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_libra-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_196_654fe1e667bd1"
                                                                        class="woof_image_term woof_image_term_196"
                                                                        data-image="/wp-content/uploads/Libra-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="libra-healing-crystals"
                                                                        value="196"
                                                                        data-term-id="196"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Libra Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_libra-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_libra-healing-crystals"
                                                                    >Libra
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_195"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Pisces
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(34)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_pisces-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_195_654fe1e66885d"
                                                                        class="woof_image_term woof_image_term_195"
                                                                        data-image="/wp-content/uploads/Pisces-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="pisces-healing-crystals"
                                                                        value="195"
                                                                        data-term-id="195"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Pisces Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_pisces-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_pisces-healing-crystals"
                                                                    >Pisces
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_194"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Sagittarius
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(79)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_sagittarius-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_194_654fe1e6691a4"
                                                                        class="woof_image_term woof_image_term_194"
                                                                        data-image="/wp-content/uploads/Sagittarius-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="sagittarius-healing-crystals"
                                                                        value="194"
                                                                        data-term-id="194"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Sagittarius Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_sagittarius-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_sagittarius-healing-crystals"
                                                                    >Sagittarius
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_193"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Scorpio
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(63)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_scorpio-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_193_654fe1e669ccf"
                                                                        class="woof_image_term woof_image_term_193"
                                                                        data-image="/wp-content/uploads/Scorpio-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="scorpio-healing-crystals"
                                                                        value="193"
                                                                        data-term-id="193"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Scorpio Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_scorpio-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_scorpio-healing-crystals"
                                                                    >Scorpio
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_192"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Taurus
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(88)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_taurus-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_192_654fe1e66a789"
                                                                        class="woof_image_term woof_image_term_192"
                                                                        data-image="/wp-content/uploads/Taurus-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="taurus-healing-crystals"
                                                                        value="192"
                                                                        data-term-id="192"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Taurus Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_taurus-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_taurus-healing-crystals"
                                                                    >Taurus
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_191"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Virgo
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(47)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_virgo-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 30px;
height:30px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_191_654fe1e66b285"
                                                                        class="woof_image_term woof_image_term_191"
                                                                        data-image="/wp-content/uploads/Virgo-Astrology-Moonrise-Crystals.png"
                                                                        data-tax="pa_zodiac"
                                                                        name="virgo-healing-crystals"
                                                                        value="191"
                                                                        data-term-id="191"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Virgo Healing Crystals"
                                                                    data-anchor="woof_n_pa_zodiac_virgo-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_virgo-healing-crystals"
                                                                    >Virgo
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="clear clearfix"
                                                        ></div>
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_pa_zodiac"
                                                        value="Product Zodiac"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_pa_element"
                                                class="woof_container woof_container_image woof_container_pa_element woof_container_9 woof_container_byelement woof_fs_pa_element"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_byelement"
                                                >
                                                    <h4>
                                                        By Element
                                                        <a
                                                            href="javascript: void(0);"
                                                            title="toggle"
                                                            class="woof_front_toggle woof_front_toggle_opened"
                                                            data-condition="opened"
                                                            >-</a
                                                        >
                                                    </h4>

                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <ul
                                                            class="woof_list woof_list_image"
                                                            data-type="checkbox"
                                                        >
                                                            <li
                                                                class="woof_image_term_li_215"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Earth
                                                                        Element
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(177)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_earth-element-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 40px;
height: 40px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_215_654fe1e66bc74"
                                                                        class="woof_image_term woof_image_term_215"
                                                                        data-image="/wp-content/uploads/Earth-Element-Healing-Moonrise-Crystals.png"
                                                                        data-tax="pa_element"
                                                                        name="earth-element-healing-crystals"
                                                                        value="215"
                                                                        data-term-id="215"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Earth Element Healing Crystals"
                                                                    data-anchor="woof_n_pa_element_earth-element-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_earth-element-healing-crystals"
                                                                    >Earth
                                                                    Element
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_214"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Fire
                                                                        Element
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(61)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_fire-element-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 40px;
height: 40px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_214_654fe1e66ee69"
                                                                        class="woof_image_term woof_image_term_214"
                                                                        data-image="/wp-content/uploads/Fire-Element-Healing-Moonrise-Crystals.png"
                                                                        data-tax="pa_element"
                                                                        name="fire-element-healing-crystals"
                                                                        value="214"
                                                                        data-term-id="214"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Fire Element Healing Crystals"
                                                                    data-anchor="woof_n_pa_element_fire-element-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_fire-element-healing-crystals"
                                                                    >Fire
                                                                    Element
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_213"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Storm
                                                                        Element
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(45)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_storm-element-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 40px;
height: 40px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_213_654fe1e66fa78"
                                                                        class="woof_image_term woof_image_term_213"
                                                                        data-image="/wp-content/uploads/Storm-Element-Healing-Moonrise-Crystals.png"
                                                                        data-tax="pa_element"
                                                                        name="storm-element-healing-crystals"
                                                                        value="213"
                                                                        data-term-id="213"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Storm Element Healing Crystals"
                                                                    data-anchor="woof_n_pa_element_storm-element-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_storm-element-healing-crystals"
                                                                    >Storm
                                                                    Element
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_212"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Water
                                                                        Element
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(76)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_water-element-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 40px;
height: 40px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_212_654fe1e6703e7"
                                                                        class="woof_image_term woof_image_term_212"
                                                                        data-image="/wp-content/uploads/Water-Element-Healing-Moonrise-Crystals.png"
                                                                        data-tax="pa_element"
                                                                        name="water-element-healing-crystals"
                                                                        value="212"
                                                                        data-term-id="212"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Water Element Healing Crystals"
                                                                    data-anchor="woof_n_pa_element_water-element-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_water-element-healing-crystals"
                                                                    >Water
                                                                    Element
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_211"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Wind
                                                                        Element
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(92)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_wind-element-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 40px;
height: 40px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_211_654fe1e67103b"
                                                                        class="woof_image_term woof_image_term_211"
                                                                        data-image="/wp-content/uploads/Wind-Element-Healing-Moonrise-Crystals.png"
                                                                        data-tax="pa_element"
                                                                        name="wind-element-healing-crystals"
                                                                        value="211"
                                                                        data-term-id="211"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Wind Element Healing Crystals"
                                                                    data-anchor="woof_n_pa_element_wind-element-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_wind-element-healing-crystals"
                                                                    >Wind
                                                                    Element
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="clear clearfix"
                                                        ></div>
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_pa_element"
                                                        value="Product Element"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_pa_numerology"
                                                class="woof_container woof_container_image woof_container_pa_numerology woof_container_10 woof_container_bynumerology woof_fs_pa_numerology"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_bynumerology"
                                                >
                                                    <h4>
                                                        By Numerology
                                                        <a
                                                            href="javascript: void(0);"
                                                            title="toggle"
                                                            class="woof_front_toggle woof_front_toggle_opened"
                                                            data-condition="opened"
                                                            >-</a
                                                        >
                                                    </h4>

                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <ul
                                                            class="woof_list woof_list_image"
                                                            data-type="checkbox"
                                                        >
                                                            <li
                                                                class="woof_image_term_li_225"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Master
                                                                        Number
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(24)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_master-number-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_225_654fe1e671df4"
                                                                        class="woof_image_term woof_image_term_225"
                                                                        data-image="/wp-content/uploads/Numerology-Master-Numbers-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="master-number-healing-crystals"
                                                                        value="225"
                                                                        data-term-id="225"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Master Number Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_master-number-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_master-number-healing-crystals"
                                                                    >Master
                                                                    Number
                                                                    Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_224"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        1
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(46)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-1-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_224_654fe1e6724f1"
                                                                        class="woof_image_term woof_image_term_224"
                                                                        data-image="/wp-content/uploads/Numerology-1-One-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-1-healing-crystals"
                                                                        value="224"
                                                                        data-term-id="224"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 1 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-1-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-1-healing-crystals"
                                                                    >Numerology
                                                                    1 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_223"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        2
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(57)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-2-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_223_654fe1e672e0c"
                                                                        class="woof_image_term woof_image_term_223"
                                                                        data-image="/wp-content/uploads/Numerology-2-Two-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-2-healing-crystals"
                                                                        value="223"
                                                                        data-term-id="223"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 2 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-2-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-2-healing-crystals"
                                                                    >Numerology
                                                                    2 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_222"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        3
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(52)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-3-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_222_654fe1e674042"
                                                                        class="woof_image_term woof_image_term_222"
                                                                        data-image="/wp-content/uploads/Numerology-3-Three-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-3-healing-crystals"
                                                                        value="222"
                                                                        data-term-id="222"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 3 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-3-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-3-healing-crystals"
                                                                    >Numerology
                                                                    3 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_221"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        4
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(56)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-4-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_221_654fe1e674d1c"
                                                                        class="woof_image_term woof_image_term_221"
                                                                        data-image="/wp-content/uploads/Numerology-4-Four-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-4-healing-crystals"
                                                                        value="221"
                                                                        data-term-id="221"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 4 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-4-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-4-healing-crystals"
                                                                    >Numerology
                                                                    4 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_220"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        5
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(46)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-5-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_220_654fe1e675931"
                                                                        class="woof_image_term woof_image_term_220"
                                                                        data-image="/wp-content/uploads/Numerology-5-Five-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-5-healing-crystals"
                                                                        value="220"
                                                                        data-term-id="220"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 5 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-5-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-5-healing-crystals"
                                                                    >Numerology
                                                                    5 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_219"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        6
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(45)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-6-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_219_654fe1e67636b"
                                                                        class="woof_image_term woof_image_term_219"
                                                                        data-image="/wp-content/uploads/Numerology-6-Six-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-6-healing-crystals"
                                                                        value="219"
                                                                        data-term-id="219"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 6 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-6-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-6-healing-crystals"
                                                                    >Numerology
                                                                    6 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_218"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        7
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(42)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-7-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_218_654fe1e676cce"
                                                                        class="woof_image_term woof_image_term_218"
                                                                        data-image="/wp-content/uploads/Numerology-7-Seven-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-7-healing-crystals"
                                                                        value="218"
                                                                        data-term-id="218"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 7 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-7-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-7-healing-crystals"
                                                                    >Numerology
                                                                    7 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_217"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        8
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(66)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-8-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_217_654fe1e677728"
                                                                        class="woof_image_term woof_image_term_217"
                                                                        data-image="/wp-content/uploads/Numerology-8-Eight-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-8-healing-crystals"
                                                                        value="217"
                                                                        data-term-id="217"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 8 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-8-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-8-healing-crystals"
                                                                    >Numerology
                                                                    8 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                            <li
                                                                class="woof_image_term_li_216"
                                                            >
                                                                <p
                                                                    class="woof_tooltip"
                                                                >
                                                                    <span
                                                                        class="woof_tooltip_data"
                                                                        >Numerology
                                                                        9
                                                                        Healing
                                                                        Crystals
                                                                        <span
                                                                            >(72)</span
                                                                        ></span
                                                                    >

                                                                    <input
                                                                        id="woof_tax_image_numerology-9-healing-crystals"
                                                                        type="checkbox"
                                                                        data-styles="width: 37px;
height: 37px;
margin: 0px !important;
background-size: 100% 100%;
background-clip: content-box;
border: 2px solid #ffffff00;
padding: 0px;
color: #292f38;
font-size: 0;
text-align: center;
cursor: pointer;
border-radius: 4px;
transition: border-color .35s ease;"
                                                                        id="woof_216_654fe1e678383"
                                                                        class="woof_image_term woof_image_term_216"
                                                                        data-image="/wp-content/uploads/Numerology-9-Nine-Moonrise-Crystals.png"
                                                                        data-tax="pa_numerology"
                                                                        name="numerology-9-healing-crystals"
                                                                        value="216"
                                                                        data-term-id="216"
                                                                    />
                                                                </p>
                                                                <input
                                                                    type="hidden"
                                                                    value="Numerology 9 Healing Crystals"
                                                                    data-anchor="woof_n_pa_numerology_numerology-9-healing-crystals"
                                                                />
                                                                <label
                                                                    class="woof_wcga_label_hide"
                                                                    for="woof_tax_image_numerology-9-healing-crystals"
                                                                    >Numerology
                                                                    9 Healing
                                                                    Crystals</label
                                                                >
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="clear clearfix"
                                                        ></div>
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_pa_numerology"
                                                        value="Product Numerology"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>

                                            <div
                                                data-css-class="woof_price3_search_container"
                                                class="woof_price3_search_container woof_container woof_price_filter woof_fs_by_price"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner"
                                                >
                                                    <label
                                                        class="woof_wcga_label_hide"
                                                        for="654fe1e67c1d0"
                                                        >Price filter</label
                                                    >
                                                    <input
                                                        class="woof_range_slider"
                                                        id="654fe1e67c1d0"
                                                        data-skin="round"
                                                        data-taxes="1"
                                                        data-min="0"
                                                        data-max="312"
                                                        data-min-now="0"
                                                        data-max-now="312"
                                                        data-step="1"
                                                        data-slider-prefix="&#036;"
                                                        data-slider-postfix=""
                                                        value=""
                                                    />
                                                </div>
                                            </div>

                                            <div
                                                data-css-class="woof_checkbox_sales_container"
                                                class="woof_checkbox_sales_container woof_container woof_container_onsales woof_fs_by_onsales"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        class="woof_checkbox_sales"
                                                        id="woof_checkbox_sales"
                                                        name="sales"
                                                        value="0"
                                                    />&nbsp;&nbsp;<label
                                                        for="woof_checkbox_sales"
                                                        >On sale<span
                                                            >(11)</span
                                                        ></label
                                                    >
                                                </div>
                                            </div>
                                            <div
                                                data-css-class="woof_container_pa_stock"
                                                class="woof_container woof_container_checkbox woof_container_pa_stock woof_container_13 woof_container_productstock woof_fs_pa_stock"
                                            >
                                                <div
                                                    class="woof_container_overlay_item"
                                                ></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_productstock"
                                                >
                                                    <div
                                                        class="woof_block_html_items"
                                                    >
                                                        <ul
                                                            class="woof_list woof_list_checkbox"
                                                        >
                                                            <li
                                                                class="woof_term_813"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    id="woof_813_654fe1e67cb13"
                                                                    class="woof_checkbox_term woof_checkbox_term_813"
                                                                    data-tax="pa_stock"
                                                                    name="new-stock"
                                                                    data-term-id="813"
                                                                    value="813"
                                                                />
                                                                <label
                                                                    class="woof_checkbox_label"
                                                                    for="woof_813_654fe1e67cb13"
                                                                    >New
                                                                    Arrivals<span
                                                                        class="woof_checkbox_count"
                                                                        >(26)</span
                                                                    ></label
                                                                >
                                                                <input
                                                                    type="hidden"
                                                                    value="New Arrivals"
                                                                    data-anchor="woof_n_pa_stock_new-stock"
                                                                />
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <input
                                                        type="hidden"
                                                        name="woof_t_pa_stock"
                                                        value="Product Stock"
                                                    /><!-- for red button search nav panel -->
                                                </div>
                                            </div>

                                            <div
                                                class="woof_submit_search_form_container"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                id="custom_html-6"
                                class="widget_text widget widget_custom_html"
                                style="
                                    margin: 0px;
                                    border-style: solid;
                                    border-color: transparent;
                                    border-width: 0px;
                                "
                            >
                                <div class="textwidget custom-html-widget">
                                    <div
                                        class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last fusion-no-small-visibility"
                                        style="
                                            --awb-padding-top: 8px;
                                            --awb-padding-top-small: 25px;
                                            --awb-bg-image: url(&#039;https://moonrisecrystals.com/wp-content/uploads/Moon-Rise-Cystal-Gift-Certificates-1024x1024.jpg&#039;);
                                            --awb-bg-size: cover;
                                            width: 100%;
                                        "
                                    >
                                        <div
                                            class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-column-wrapper-legacy fusion-column-has-bg-image"
                                            data-bg-url="https://moonrisecrystals.com/wp-content/uploads/Moon-Rise-Cystal-Gift-Certificates-1024x1024.jpg"
                                        >
                                            <div
                                                class="fusion-title title fusion-title-1 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three"
                                                style="
                                                    --awb-text-color: var(
                                                        --awb-color5
                                                    );
                                                    --awb-font-size: 15px;
                                                "
                                            >
                                                <h3
                                                    class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
                                                    style="
                                                        margin: 0;
                                                        font-size: 1em;
                                                        letter-spacing: 0.8px;
                                                        --fontSize: 15;
                                                        --minFontSize: 15;
                                                        line-height: 1.3;
                                                    "
                                                >
                                                    <strong
                                                        >Give the Gift of Beauty
                                                        &amp; Magic!</strong
                                                    >
                                                </h3>
                                            </div>
                                            <div
                                                class="fusion-separator fusion-full-width-sep"
                                                style="
                                                    align-self: center;
                                                    margin-left: auto;
                                                    margin-right: auto;
                                                    margin-top: 120px;
                                                    width: 100%;
                                                "
                                            ></div>
                                            <div class="fusion-aligncenter">
                                                <a
                                                    class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-1 fusion-button-default-span fusion-button-default-type"
                                                    style="
                                                        --button_accent_color: var(
                                                            --awb-color5
                                                        );
                                                        --button_accent_hover_color: var(
                                                            --awb-color1
                                                        );
                                                        --button_border_hover_color: var(
                                                            --awb-color1
                                                        );
                                                        --button-border-radius-top-left: 0;
                                                        --button-border-radius-top-right: 0;
                                                        --button-border-radius-bottom-right: 0;
                                                        --button-border-radius-bottom-left: 0;
                                                        --button_gradient_top_color: rgba(
                                                            255,
                                                            255,
                                                            255,
                                                            0.7
                                                        );
                                                        --button_gradient_bottom_color: rgba(
                                                            255,
                                                            255,
                                                            255,
                                                            0.7
                                                        );
                                                        --button_gradient_top_color_hover: var(
                                                            --awb-color5
                                                        );
                                                        --button_gradient_bottom_color_hover: var(
                                                            --awb-color5
                                                        );
                                                        --button_margin-bottom: 15px;
                                                    "
                                                    target="_self"
                                                    href="/product/gift-certificate/"
                                                    rel="noopener"
                                                    ><span
                                                        class="fusion-button-text"
                                                        >Gift Certificates</span
                                                    ></a
                                                >
                                            </div>
                                            <div class="fusion-clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <script nitro-exclude>
                            document.cookie =
                                "nitroCachedPage=" +
                                (!window.NITROPACK_STATE ? "0" : "1") +
                                "; path=/; SameSite=Lax";
                        </script>
                    </div>
                    <!-- fusion-row -->
                </main>
                <!-- #main -->


                <!-- fusion-footer -->
            </div>
            <!-- wrapper -->
        </div>
        <!-- #boxed-wrapper -->
        <a
            class="fusion-one-page-text-link fusion-page-load-link"
            tabindex="-1"
            href="#"
            aria-hidden="true"
            >Page load link</a
        >

        <div class="avada-footer-scripts">
            <!-- GTM Container placement set to footer -->
            <!-- Google Tag Manager (noscript) -->

            <!-- End Google Tag Manager (noscript) --><input
                id="ws_ma_event_type"
                type="hidden"
                style="display: none"
            /><input
                id="ws_ma_event_data"
                type="hidden"
                style="display: none"
            />
            <script type="text/javascript">
                var fusionNavIsCollapsed = function (e) {
                        var t, n;
                        window.innerWidth <= e.getAttribute("data-breakpoint")
                            ? (e.classList.add("collapse-enabled"),
                              e.classList.remove("awb-menu_desktop"),
                              e.classList.contains("expanded") ||
                                  (e.setAttribute("aria-expanded", "false"),
                                  window.dispatchEvent(
                                      new Event(
                                          "fusion-mobile-menu-collapsed",
                                          { bubbles: !0, cancelable: !0 }
                                      )
                                  )),
                              (n = e.querySelectorAll(
                                  ".menu-item-has-children.expanded"
                              )).length &&
                                  n.forEach(function (e) {
                                      e.querySelector(
                                          ".awb-menu__open-nav-submenu_mobile"
                                      ).setAttribute("aria-expanded", "false");
                                  }))
                            : (null !==
                                  e.querySelector(
                                      ".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click"
                                  ) &&
                                  e
                                      .querySelector(
                                          ".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click"
                                      )
                                      .click(),
                              e.classList.remove("collapse-enabled"),
                              e.classList.add("awb-menu_desktop"),
                              e.setAttribute("aria-expanded", "true"),
                              null !== e.querySelector(".awb-menu__main-ul") &&
                                  e
                                      .querySelector(".awb-menu__main-ul")
                                      .removeAttribute("style")),
                            e.classList.add("no-wrapper-transition"),
                            clearTimeout(t),
                            (t = setTimeout(() => {
                                e.classList.remove("no-wrapper-transition");
                            }, 400)),
                            e.classList.remove("loading");
                    },
                    fusionRunNavIsCollapsed = function () {
                        var e,
                            t = document.querySelectorAll(".awb-menu");
                        for (e = 0; e < t.length; e++)
                            fusionNavIsCollapsed(t[e]);
                    };
                function avadaGetScrollBarWidth() {
                    var e,
                        t,
                        n,
                        l = document.createElement("p");
                    return (
                        (l.style.width = "100%"),
                        (l.style.height = "200px"),
                        ((e = document.createElement("div")).style.position =
                            "absolute"),
                        (e.style.top = "0px"),
                        (e.style.left = "0px"),
                        (e.style.visibility = "hidden"),
                        (e.style.width = "200px"),
                        (e.style.height = "150px"),
                        (e.style.overflow = "hidden"),
                        e.appendChild(l),
                        document.body.appendChild(e),
                        (t = l.offsetWidth),
                        (e.style.overflow = "scroll"),
                        t == (n = l.offsetWidth) && (n = e.clientWidth),
                        document.body.removeChild(e),
                        jQuery("html").hasClass("awb-scroll") && 10 < t - n
                            ? 10
                            : t - n
                    );
                }
                fusionRunNavIsCollapsed(),
                    window.addEventListener(
                        "fusion-resize-horizontal",
                        fusionRunNavIsCollapsed
                    );
            </script>
            <script type="application/ld+json">
                {
                    "@context": "https:\/\/schema.org\/",
                    "@type": "BreadcrumbList",
                    "itemListElement": [
                        {
                            "@type": "ListItem",
                            "position": 1,
                            "item": {
                                "name": "Home",
                                "@id": "https:\/\/moonrisecrystals.com"
                            }
                        },
                        {
                            "@type": "ListItem",
                            "position": 2,
                            "item": {
                                "name": "Shop",
                                "@id": "https:\/\/moonrisecrystals.com\/shop\/"
                            }
                        }
                    ]
                }
            </script>
            <script type="text/javascript">
                (function () {
                    var c = document.body.className;
                    c = c.replace(/woocommerce-no-js/, "woocommerce-js");
                    document.body.className = c;
                })();
            </script>
            <link
                rel="stylesheet"
                id="woof_sections_style-css"
                href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/sections/css/sections.css?ver=3.3.4.1"
                type="text/css"
                media="all"
            />
            <link
                rel="stylesheet"
                id="ion.range-slider-css"
                href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/ion.range-slider/css/ion.rangeSlider.css?ver=3.3.4.1"
                type="text/css"
                media="all"
            />
            <link
                rel="stylesheet"
                id="woof-front-builder-css-css"
                href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/front_builder/css/front-builder.css?ver=3.3.4.1"
                type="text/css"
                media="all"
            />
            <link
                rel="stylesheet"
                id="woof-slideout-tab-css-css"
                href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/slideout/css/jquery.tabSlideOut.css?ver=3.3.4.1"
                type="text/css"
                media="all"
            />
            <link
                rel="stylesheet"
                id="woof-slideout-css-css"
                href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/slideout/css/slideout.css?ver=3.3.4.1"
                type="text/css"
                media="all"
            />
            <link
                rel="stylesheet"
                id="woof_tooltip-css-css"
                href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/tooltip/css/tooltipster.bundle.min.css?ver=3.3.4.1"
                type="text/css"
                media="all"
            />
            <link
                rel="stylesheet"
                id="woof_tooltip-css-noir-css"
                href="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/tooltip/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-noir.min.css?ver=3.3.4.1"
                type="text/css"
                media="all"
            />
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.2.1"
                id="jquery-blockui-js"
            ></script>
            <script type="text/javascript" id="wc-add-to-cart-js-extra">
                /* <![CDATA[ */
                var wc_add_to_cart_params = {
                    ajax_url: "\/wp-admin\/admin-ajax.php",
                    wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
                    i18n_view_cart: "View cart",
                    cart_url: "https:\/\/moonrisecrystals.com\/cart\/",
                    is_cart: "",
                    cart_redirect_after_add: "no",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.2.1"
                id="wc-add-to-cart-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.2.1"
                id="js-cookie-js"
            ></script>
            <script type="text/javascript" id="woocommerce-js-extra">
                /* <![CDATA[ */
                var woocommerce_params = {
                    ajax_url: "\/wp-admin\/admin-ajax.php",
                    wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.2.1"
                id="woocommerce-js"
            ></script>
            <script type="text/javascript" id="wc-cart-fragments-js-extra">
                /* <![CDATA[ */
                var wc_cart_fragments_params = {
                    ajax_url: "\/wp-admin\/admin-ajax.php",
                    wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
                    cart_hash_key:
                        "wc_cart_hash_d2aee9daaa360f751efca3a9a39093ed",
                    fragment_name:
                        "wc_fragments_d2aee9daaa360f751efca3a9a39093ed",
                    request_timeout: "5000",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=8.2.1"
                id="wc-cart-fragments-js"
            ></script>
            <script type="text/javascript" id="tinvwl-js-extra">
                /* <![CDATA[ */
                var tinvwl_add_to_wishlist = {
                    text_create: "Create New",
                    text_already_in: "{product_name} already in Wishlist",
                    simple_flow: "",
                    hide_zero_counter: "",
                    i18n_make_a_selection_text:
                        "Please select some product options before adding this product to your wishlist.",
                    tinvwl_break_submit: "No items or actions are selected.",
                    tinvwl_clipboard: "Copied!",
                    allow_parent_variable: "",
                    block_ajax_wishlists_data: "",
                    update_wishlists_data: "",
                    hash_key:
                        "ti_wishlist_data_d2aee9daaa360f751efca3a9a39093ed",
                    nonce: "6514627d02",
                    rest_root: "https:\/\/moonrisecrystals.com\/wp-json\/",
                    plugin_url:
                        "https:\/\/moonrisecrystals.com\/wp-content\/plugins\/ti-woocommerce-wishlist\/",
                    wc_ajax_url: "\/?wc-ajax=tinvwl",
                    stats: "",
                    popup_timer: "6000",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/ti-woocommerce-wishlist/assets/js/public.min.js?ver=2.7.4"
                id="tinvwl-js"
            ></script>
            <script type="text/javascript" id="cwginstock_js-js-extra">
                /* <![CDATA[ */
                var cwginstock = {
                    ajax_url:
                        "https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php",
                    default_ajax_url:
                        "https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php",
                    security: "5218626a06",
                    user_id: "0",
                    security_error:
                        "Something went wrong, please try after sometime",
                    empty_name: "Name cannot be empty",
                    empty_quantity: "Quantity cannot be empty",
                    empty_email: "Email Address cannot be empty",
                    invalid_email: "Please enter valid Email Address",
                    is_popup: "no",
                    phone_field: "2",
                    phone_field_error: [
                        "Please enter valid Phone Number",
                        "Please enter valid Phone Number",
                        "Phone number is too short",
                        "Phone number is too long",
                        "Please enter valid Phone Number",
                    ],
                    phone_utils_js: "",
                    is_phone_field_optional: "2",
                    is_quantity_field_optional: "2",
                    hide_country_placeholder: "2",
                    default_country_code: "",
                    custom_country_placeholder: "",
                    enable_recaptcha: "2",
                    recaptcha_site_key: "",
                    enable_recaptcha_verify: "2",
                    recaptcha_secret_present: "no",
                    is_v3_recaptcha: "no",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/js/frontend-dev.js?ver=5.0.1"
                id="cwginstock_js-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/js/sweetalert2.min.js?ver=5.0.1"
                id="sweetalert2-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/back-in-stock-notifier-for-woocommerce/assets/js/cwg-popup.js?ver=5.0.1"
                id="cwginstock_popup-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/ion.range-slider/js/ion.rangeSlider.min.js?ver=3.3.4.1"
                id="ion.range-slider-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/woof_sid.js?ver=3.3.4.1"
                id="woof_sid-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/slideout/js/jquery.tabSlideOut.js?ver=3.3.4.1"
                id="woof-slideout-js-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/slideout/js/slideout.js?ver=3.3.4.1"
                id="woof-slideout-init-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/cssua.js?ver=2.1.28"
                id="cssua-js"
            ></script>
            <script type="text/javascript" id="fusion-animations-js-extra">
                /* <![CDATA[ */
                var fusionAnimationsVars = { status_css_animations: "desktop" };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-animations.js?ver=3.11.2"
                id="fusion-animations-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/awb-tabs-widget.js?ver=3.11.2"
                id="awb-tabs-widget-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/awb-vertical-menu-widget.js?ver=3.11.2"
                id="awb-vertical-menu-widget-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/modernizr.js?ver=3.3.1"
                id="modernizr-js"
            ></script>
            <script type="text/javascript" id="fusion-js-extra">
                /* <![CDATA[ */
                var fusionJSVars = {
                    visibility_small: "640",
                    visibility_medium: "1130",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion.js?ver=3.11.2"
                id="fusion-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/isotope.js?ver=3.0.4"
                id="isotope-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/packery.js?ver=2.0.0"
                id="packery-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/bootstrap.transition.js?ver=3.3.6"
                id="bootstrap-transition-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/bootstrap.tooltip.js?ver=3.3.5"
                id="bootstrap-tooltip-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.easing.js?ver=1.3"
                id="jquery-easing-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.fitvids.js?ver=1.1"
                id="jquery-fitvids-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.flexslider.js?ver=2.7.2"
                id="jquery-flexslider-js"
            ></script>
            <script type="text/javascript" id="jquery-lightbox-js-extra">
                /* <![CDATA[ */
                var fusionLightboxVideoVars = {
                    lightbox_video_width: "1280",
                    lightbox_video_height: "720",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.ilightbox.js?ver=2.2.3"
                id="jquery-lightbox-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.infinitescroll.js?ver=2.1"
                id="jquery-infinite-scroll-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.mousewheel.js?ver=3.0.6"
                id="jquery-mousewheel-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.placeholder.js?ver=2.0.7"
                id="jquery-placeholder-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/imagesLoaded.js?ver=3.1.8"
                id="images-loaded-js"
            ></script>
            <script type="text/javascript" id="fusion-equal-heights-js-extra">
                /* <![CDATA[ */
                var fusionEqualHeightVars = { content_break_point: "800" };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-equal-heights.js?ver=1"
                id="fusion-equal-heights-js"
            ></script>
            <script type="text/javascript" id="fusion-video-general-js-extra">
                /* <![CDATA[ */
                var fusionVideoGeneralVars = {
                    status_vimeo: "0",
                    status_yt: "1",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-video-general.js?ver=1"
                id="fusion-video-general-js"
            ></script>
            <script type="text/javascript" id="fusion-video-bg-js-extra">
                /* <![CDATA[ */
                var fusionVideoBgVars = { status_vimeo: "0", status_yt: "1" };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-video-bg.js?ver=1"
                id="fusion-video-bg-js"
            ></script>
            <script type="text/javascript" id="fusion-lightbox-js-extra">
                /* <![CDATA[ */
                var fusionLightboxVars = {
                    status_lightbox: "1",
                    lightbox_gallery: "1",
                    lightbox_skin: "metro-white",
                    lightbox_title: "1",
                    lightbox_arrows: "1",
                    lightbox_slideshow_speed: "5000",
                    lightbox_autoplay: "",
                    lightbox_opacity: "0.9",
                    lightbox_desc: "1",
                    lightbox_social: "1",
                    lightbox_social_links: {
                        facebook: {
                            source: "https:\/\/www.facebook.com\/sharer.php?u={URL}",
                            text: "Share on Facebook",
                        },
                        twitter: {
                            source: "https:\/\/twitter.com\/share?url={URL}",
                            text: "Share on Twitter",
                        },
                        reddit: {
                            source: "https:\/\/reddit.com\/submit?url={URL}",
                            text: "Share on Reddit",
                        },
                        linkedin: {
                            source: "https:\/\/www.linkedin.com\/shareArticle?mini=true&url={URL}",
                            text: "Share on LinkedIn",
                        },
                        whatsapp: {
                            source: "https:\/\/api.whatsapp.com\/send?text={URL}",
                            text: "Share on WhatsApp",
                        },
                        tumblr: {
                            source: "https:\/\/www.tumblr.com\/share\/link?url={URL}",
                            text: "Share on Tumblr",
                        },
                        pinterest: {
                            source: "https:\/\/pinterest.com\/pin\/create\/button\/?url={URL}",
                            text: "Share on Pinterest",
                        },
                        vk: {
                            source: "https:\/\/vk.com\/share.php?url={URL}",
                            text: "Share on Vk",
                        },
                        xing: {
                            source: "https:\/\/www.xing.com\/social_plugins\/share\/new?sc_p=xing-share&amp;h=1&amp;url={URL}",
                            text: "Share on Xing",
                        },
                        mail: {
                            source: "mailto:?body={URL}",
                            text: "Share by Email",
                        },
                    },
                    lightbox_deeplinking: "1",
                    lightbox_path: "vertical",
                    lightbox_post_images: "1",
                    lightbox_animation_speed: "normal",
                    l10n: {
                        close: "Press Esc to close",
                        enterFullscreen: "Enter Fullscreen (Shift+Enter)",
                        exitFullscreen: "Exit Fullscreen (Shift+Enter)",
                        slideShow: "Slideshow",
                        next: "Next",
                        previous: "Previous",
                    },
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-lightbox.js?ver=1"
                id="fusion-lightbox-js"
            ></script>
            <script type="text/javascript" id="fusion-flexslider-js-extra">
                /* <![CDATA[ */
                var fusionFlexSliderVars = {
                    status_vimeo: "",
                    slideshow_autoplay: "1",
                    slideshow_speed: "7000",
                    pagination_video_slide: "",
                    status_yt: "1",
                    flex_smoothHeight: "false",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-flexslider.js?ver=1"
                id="fusion-flexslider-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-tooltip.js?ver=1"
                id="fusion-tooltip-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-sharing-box.js?ver=1"
                id="fusion-sharing-box-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.sticky-kit.js?ver=1.1.2"
                id="jquery-sticky-kit-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-youtube.js?ver=2.2.1"
                id="fusion-youtube-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/lazysizes.js?ver=6.4"
                id="lazysizes-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-woo-variations.js?ver=7.11.2"
                id="avada-woo-product-variations-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-woo-products.js?ver=7.11.2"
                id="avada-woo-products-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-general-footer.js?ver=7.11.2"
                id="avada-general-footer-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-quantity.js?ver=7.11.2"
                id="avada-quantity-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-crossfade-images.js?ver=7.11.2"
                id="avada-crossfade-images-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-select.js?ver=7.11.2"
                id="avada-select-js"
            ></script>
            <script type="text/javascript" id="avada-live-search-js-extra">
                /* <![CDATA[ */
                var avadaLiveSearchVars = {
                    live_search: "1",
                    ajaxurl:
                        "https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php",
                    no_search_results:
                        "No search results match your query. Please try again",
                    min_char_count: "3",
                    per_page: "30",
                    show_feat_img: "1",
                    display_post_type: "0",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-live-search.js?ver=7.11.2"
                id="avada-live-search-js"
            ></script>
            <script type="text/javascript" id="fusion-blog-js-extra">
                /* <![CDATA[ */
                var fusionBlogVars = {
                    infinite_blog_text:
                        "<em>Loading the next set of posts...<\/em>",
                    infinite_finished_msg: "<em>All items displayed.<\/em>",
                    slideshow_autoplay: "1",
                    lightbox_behavior: "all",
                    blog_pagination_type: "load_more_button",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-blog.js?ver=6.4"
                id="fusion-blog-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-alert.js?ver=6.4"
                id="fusion-alert-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/awb-off-canvas.js?ver=3.11.2"
                id="awb-off-canvas-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-column-legacy.js?ver=6.4"
                id="fusion-column-legacy-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/library/jquery.textillate.js?ver=3.11.2"
                id="jquery-title-textillate-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-title.js?ver=6.4"
                id="fusion-title-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-button.js?ver=6.4"
                id="fusion-button-js"
            ></script>
            <script type="text/javascript" id="awb-widget-areas-js-extra">
                /* <![CDATA[ */
                var avadaSidebarsVars = {
                    header_position: "top",
                    header_layout: "v3",
                    header_sticky: "1",
                    header_sticky_type2_layout: "menu_only",
                    side_header_break_point: "1130",
                    header_sticky_tablet: "",
                    sticky_header_shrinkage: "1",
                    nav_height: "90",
                    sidebar_break_point: "800",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/awb-widget-areas.js?ver=3.11.2"
                id="awb-widget-areas-js"
            ></script>
            <script type="text/javascript" id="avada-drop-down-js-extra">
                /* <![CDATA[ */
                var avadaSelectVars = { avada_drop_down: "1" };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-drop-down.js?ver=7.11.2"
                id="avada-drop-down-js"
            ></script>
            <script type="text/javascript" id="avada-to-top-js-extra">
                /* <![CDATA[ */
                var avadaToTopVars = {
                    status_totop: "desktop",
                    totop_position: "right",
                    totop_scroll_down_only: "1",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-to-top.js?ver=7.11.2"
                id="avada-to-top-js"
            ></script>
            <script type="text/javascript" id="avada-header-js-extra">
                /* <![CDATA[ */
                var avadaHeaderVars = {
                    header_position: "top",
                    header_sticky: "1",
                    header_sticky_type2_layout: "menu_only",
                    header_sticky_shadow: "1",
                    side_header_break_point: "1130",
                    header_sticky_mobile: "",
                    header_sticky_tablet: "",
                    mobile_menu_design: "modern",
                    sticky_header_shrinkage: "1",
                    nav_height: "90",
                    nav_highlight_border: "0",
                    nav_highlight_style: "bottombar",
                    logo_margin_top: "28px",
                    logo_margin_bottom: "22px",
                    layout_mode: "wide",
                    header_padding_top: "0px",
                    header_padding_bottom: "0px",
                    scroll_offset: "full",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-header.js?ver=7.11.2"
                id="avada-header-js"
            ></script>
            <script type="text/javascript" id="avada-menu-js-extra">
                /* <![CDATA[ */
                var avadaMenuVars = {
                    site_layout: "wide",
                    header_position: "top",
                    logo_alignment: "left",
                    header_sticky: "1",
                    header_sticky_mobile: "",
                    header_sticky_tablet: "",
                    side_header_break_point: "1130",
                    megamenu_base_width: "custom_width",
                    mobile_menu_design: "modern",
                    dropdown_goto: "Go to...",
                    mobile_nav_cart: "Shopping Cart",
                    mobile_submenu_open: "Open submenu of %s",
                    mobile_submenu_close: "Close submenu of %s",
                    submenu_slideout: "1",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-menu.js?ver=7.11.2"
                id="avada-menu-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/library/bootstrap.scrollspy.js?ver=7.11.2"
                id="bootstrap-scrollspy-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-scrollspy.js?ver=7.11.2"
                id="avada-scrollspy-js"
            ></script>
            <script type="text/javascript" id="avada-woocommerce-js-extra">
                /* <![CDATA[ */
                var avadaWooCommerceVars = {
                    order_actions: "Details",
                    title_style_type: "none",
                    woocommerce_shop_page_columns: "3",
                    woocommerce_checkout_error:
                        "Not all fields have been filled in correctly.",
                    related_products_heading_size: "3",
                    ajaxurl:
                        "https:\/\/moonrisecrystals.com\/wp-admin\/admin-ajax.php",
                    shop_page_bg_color: "#ffffff",
                    shop_page_bg_color_lightness: "100",
                    post_title_font_size: "25",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-woocommerce.js?ver=7.11.2"
                id="avada-woocommerce-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/assets/min/js/general/avada-woo-product-images.js?ver=7.11.2"
                id="avada-woo-product-images-js"
            ></script>
            <script
                type="text/javascript"
                id="fusion-responsive-typography-js-extra"
            >
                /* <![CDATA[ */
                var fusionTypographyVars = {
                    site_width: "1225px",
                    typography_sensitivity: "0.60",
                    typography_factor: "1.50",
                    elements: "h1, h2, h3, h4, h5, h6",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-responsive-typography.js?ver=3.11.2"
                id="fusion-responsive-typography-js"
            ></script>
            <script
                type="text/javascript"
                id="fusion-scroll-to-anchor-js-extra"
            >
                /* <![CDATA[ */
                var fusionScrollToAnchorVars = {
                    content_break_point: "800",
                    container_hundred_percent_height_mobile: "0",
                    hundred_percent_scroll_sensitivity: "450",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-scroll-to-anchor.js?ver=3.11.2"
                id="fusion-scroll-to-anchor-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-general-global.js?ver=3.11.2"
                id="fusion-general-global-js"
            ></script>
            <script type="text/javascript" id="fusion-video-js-extra">
                /* <![CDATA[ */
                var fusionVideoVars = { status_vimeo: "0" };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-video.js?ver=3.11.2"
                id="fusion-video-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-column.js?ver=3.11.2"
                id="fusion-column-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/tooltip/js/tooltipster.bundle.min.js?ver=3.3.4.1"
                id="woof_tooltip-js-js"
            ></script>
            <script type="text/javascript" id="woof_front-js-extra">
                /* <![CDATA[ */
                var woof_filter_titles = {
                    product_cat: "BY STONE \u25bc",
                    "pa_crystal-type": "BY TYPE  \u25bc",
                    product_tag: "BY HEALING PROPERTIES \u25bc",
                    pa_color: "By Color",
                    pa_size: "By Size (inches)",
                    pa_chakra: "By Chakra",
                    pa_zodiac: "By Zodiac",
                    pa_element: "By Element",
                    pa_numerology: "By Numerology",
                    by_price: "by_price",
                    by_onsales: "by_onsales",
                    pa_stock: "Product Stock",
                };
                var woof_ext_filter_titles = {
                    woof_author: "By author",
                    backorder: "Exclude On backorder",
                    stock: "In stock",
                    onsales: "On sale",
                    byrating: "By rating",
                    woof_sku: "by SKU",
                    woof_text: "By text",
                };
                /* ]]> */
            </script>
            <script type="text/javascript" id="woof_front-js-before">
                /* <![CDATA[ */
                var woof_is_permalink = 1;
                var woof_shop_page = "";
                var woof_m_b_container = ".woocommerce-products-header";
                var woof_really_curr_tax = {};
                var woof_current_page_link =
                    location.protocol +
                    "//" +
                    location.host +
                    location.pathname;
                /*lets remove pagination from woof_current_page_link*/
                woof_current_page_link = woof_current_page_link.replace(
                    /\page\/[0-9]+/,
                    ""
                );
                woof_current_page_link = "https://moonrisecrystals.com/shop/";
                var woof_link =
                    "https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/";

                var woof_ajaxurl =
                    "https://moonrisecrystals.com/wp-admin/admin-ajax.php";

                var woof_lang = {
                    orderby: "orderby",
                    date: "date",
                    perpage: "per page",
                    pricerange: "price range",
                    menu_order: "menu order",
                    popularity: "popularity",
                    rating: "rating",
                    price: "price low to high",
                    "price-desc": "price high to low",
                    clear_all: "Clear All",
                    list_opener: "Сhild list opener",
                };

                if (typeof woof_lang_custom == "undefined") {
                    var woof_lang_custom = {}; /*!!important*/
                }

                var woof_is_mobile = 0;

                var woof_show_price_search_button = 0;
                var woof_show_price_search_type = 0;
                woof_show_price_search_button = 1;

                var woof_show_price_search_type = 3;
                var swoof_search_slug = "swoof";

                var icheck_skin = {};
                icheck_skin = "none";

                var woof_select_type = "chosen";

                var woof_current_values = "[]";
                var woof_lang_loading = "Loading ...";

                var woof_lang_show_products_filter = "show products filter";
                var woof_lang_hide_products_filter = "hide products filter";
                var woof_lang_pricerange = "price range";

                var woof_use_beauty_scroll = 0;

                var woof_autosubmit = 1;
                var woof_ajaxurl =
                    "https://moonrisecrystals.com/wp-admin/admin-ajax.php";
                /*var woof_submit_link = "";*/
                var woof_is_ajax = 0;
                var woof_ajax_redraw = 0;
                var woof_ajax_page_num = 1;
                var woof_ajax_first_done = false;
                var woof_checkboxes_slide_flag = 1;

                /*toggles*/
                var woof_toggle_type = "text";

                var woof_toggle_closed_text = "+";
                var woof_toggle_opened_text = "-";

                var woof_toggle_closed_image =
                    "https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/img/plus.svg";
                var woof_toggle_opened_image =
                    "https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/img/minus.svg";

                /*indexes which can be displayed in red buttons panel*/
                var woof_accept_array = [
                    "min_price",
                    "orderby",
                    "perpage",
                    "woof_author",
                    "backorder",
                    "stock",
                    "onsales",
                    "byrating",
                    "woof_sku",
                    "woof_text",
                    "min_rating",
                    "polishing_method",
                    "product_visibility",
                    "product_cat",
                    "product_tag",
                    "pa_bead-size",
                    "pa_chakra",
                    "pa_circumference",
                    "pa_color",
                    "pa_crystal-type",
                    "pa_element",
                    "pa_ethics",
                    "pa_large-product-sizes",
                    "pa_numerology",
                    "pa_origin",
                    "pa_polish",
                    "pa_quality",
                    "pa_safe-handling",
                    "pa_select-size",
                    "pa_shape",
                    "pa_size",
                    "pa_stock",
                    "pa_tea-types",
                    "pa_transparency",
                    "pa_weight",
                    "pa_zodiac",
                ];

                /*for extensions*/

                var woof_ext_init_functions = null;
                woof_ext_init_functions =
                    '{"by_author":"woof_init_author","by_backorder":"woof_init_onbackorder","by_instock":"woof_init_instock","by_onsales":"woof_init_onsales","by_sku":"woof_init_sku","by_text":"woof_init_text","color":"woof_init_colors","image":"woof_init_image","label":"woof_init_labels","select_hierarchy":"woof_init_select_hierarchy","select_radio_check":"woof_init_select_radio_check","slider":"woof_init_sliders"}';

                var woof_overlay_skin = "default";

                var woof_front_sd_is_a = 1;
                var woof_front_show_notes = 0;
                var woof_lang_front_builder_del =
                    "Are you sure you want to delete this filter-section?";
                var woof_lang_front_builder_options = "Options";
                var woof_lang_front_builder_option = "Option";
                var woof_lang_front_builder_section_options = "Section Options";
                var woof_lang_front_builder_description = "Description";
                var woof_lang_front_builder_close = "Close";
                var woof_lang_front_builder_suggest = "Suggest the feature";
                var woof_lang_front_builder_good_to_use =
                    "good to use in content areas";
                var woof_lang_front_builder_confirm_sd =
                    "Smart Designer item will be created and attached to this filter section and will cancel current type, proceed?";
                var woof_lang_front_builder_creating = "Creating";
                var woof_lang_front_builder_shortcode = "Shortcode";
                var woof_lang_front_builder_layout = "Layout";
                var woof_lang_front_builder_filter_section = "Section options";
                var woof_lang_front_builder_filter_redrawing =
                    "filter redrawing";
                var woof_lang_front_builder_filter_redrawn = "redrawn";
                var woof_lang_front_builder_filter_redrawn = "redrawn";
                var woof_lang_front_builder_title_top_info =
                    "this functionality is only visible for the site administrator";
                var woof_lang_front_builder_title_top_info_demo =
                    "demo mode is activated, and results are visible only to you";
                var woof_lang_front_builder_select = "+ Add filter section";
                function woof_js_after_ajax_done() {
                    jQuery(document).trigger("woof_ajax_done");
                }
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/front_comprssd.js?ver=3.3.4.1"
                id="woof_front-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_author/js/by_author.js?ver=3.3.4.1"
                id="woof_by_author_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_backorder/js/by_backorder.js?ver=3.3.4.1"
                id="woof_by_backorder_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_instock/js/by_instock.js?ver=3.3.4.1"
                id="woof_by_instock_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_onsales/js/by_onsales.js?ver=3.3.4.1"
                id="woof_by_onsales_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_sku/js/by_sku.js?ver=3.3.4.1"
                id="woof_by_sku_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/by_text/assets/js/front.js?ver=3.3.4.1"
                id="woof_by_text_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/color/js/html_types/color.js?ver=3.3.4.1"
                id="woof_color_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/image/js/html_types/image.js?ver=3.3.4.1"
                id="woof_image_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/label/js/html_types/label.js?ver=3.3.4.1"
                id="woof_label_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/sections/js/sections.js?ver=3.3.4.1"
                id="woof_sections_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/select_hierarchy/js/html_types/select_hierarchy.js?ver=3.3.4.1"
                id="woof_select_hierarchy_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/select_radio_check/js/html_types/select_radio_check.js?ver=3.3.4.1"
                id="woof_select_radio_check_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/slider/js/html_types/slider.js?ver=3.3.4.1"
                id="woof_slider_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/js/front.js?ver=3.3.4.1"
                id="woof_sd_html_items-js"
            ></script>
            <script
                type="text/javascript"
                src="https://moonrisecrystals.com/wp-content/plugins/woocommerce-products-filter/js/chosen/chosen.jquery.js?ver=3.3.4.1"
                id="chosen-drop-down-js"
            ></script>
        </div>

        <section
            class="to-top-container to-top-right"
            aria-labelledby="awb-to-top-label"
            >
            <a href="#" id="toTop" class="fusion-top-top-link">
                <span id="awb-to-top-label" class="screen-reader-text"
                    >Go to Top</span
                >
            </a>
        </section>
    </body>



@endsection
