<?php
/**
 * References:
 *  - https://www.filamentgroup.com/lab/load-css-simpler/
 *  - https://css-tricks.com/how-to-load-fonts-in-a-way-that-fights-fout-and-makes-lighthouse-happy/
 *  - https://web.dev/fast/#lazy-load-images-and-video
 *  - https://web.dev/lazy-loading-video/
 *
 */
# Generate random number and invalidate some resources from here
$random = rand(1, 10000);
// $version = $random;
$version = 1;

ResourceLoader::add( # Favicon.ico
    "head",
    "/favicon.ico?v=$version",
    active: true,
    priority: 1,
    type: "image/x-icon",
    options: "rel=\"shortcut icon\""
);

ResourceLoader::add( # Normalize.css
    "head",
    "/assets/css/dist/normalize.min.css?v=$version",
    active: true,
    embed: true,
    priority: 5,
    options: "rel=\"stylesheet\""
);

ResourceLoader::add( # Normalize-after.js
    "head",
    "/assets/js/dist/normalize-after.min.js?v=$version",
    active: true,
    embed: true,
    priority: 6,
);

ResourceLoader::add( # Normalize-after.css
    "head",
    "/assets/css/dist/normalize-after.min.css?v=$version",
    active: true,
    embed: true,
    priority: 7,
    options: "rel=\"stylesheet\""
);

ResourceLoader::add( # Google Fonts
    "head",
    "https://fonts.googleapis.com",
    active: true,
    embed: false,
    priority: 10,
    options: "rel=\"preconnect\""
);
ResourceLoader::add( # Google Fonts
    "head",
    "https://fonts.gstatic.com",
    active: true,
    embed: false,
    priority: 11,
    options: "rel=\"preconnect\" crossorigin"
);

// ResourceLoader::add( # Google Fonts
//     "head",
//     "https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap",
//     active: true,
//     embed: false,
//     priority: 12,
//     options: "rel=\"stylesheet\""
// );
ResourceLoader::add( # Google Fonts
    "head",
    "https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap",
    active: true,
    embed: false,
    priority: 12,
    options: "rel=\"preload\" as=\"style\""
);
ResourceLoader::add( # Google Fonts
    "head",
    "https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap",
    active: true,
    embed: false,
    priority: 13,
    options: "rel=\"stylesheet\" media=\"print\" onload=\"this.media='all'\""
);

// ResourceLoader::add( # FontAwesome
//     "head",
//     "/assets/vendor/fontawesome/css/all.min.css?v=$version",
//     active: true,
//     embed: false,
//     priority: 15,
//     options: "rel=\"stylesheet\""
// );
ResourceLoader::add( # FontAwesome
    "head",
    "/assets/vendor/fontawesome/css/hyperzon.selected.min.css?display=swap",
    // "/assets/vendor/fontawesome/css/hyperzon.selected.css?display=swap",
    // "/assets/vendor/fontawesome/css/all.min.css?display=swap",
    active: true,
    embed: false,
    priority: 15,
    options: "rel=\"preload\" as=\"style\""
);
ResourceLoader::add( # FontAwesome
    "head",
    "/assets/vendor/fontawesome/css/hyperzon.selected.min.css?display=swap",
    // "/assets/vendor/fontawesome/css/hyperzon.selected.css?display=swap",
    // "/assets/vendor/fontawesome/css/all.min.css?display=swap",
    active: true,
    embed: false,
    priority: 16,
    options: "rel=\"stylesheet\" media=\"print\" onload=\"this.media='all'\""
);

ResourceLoader::add( # CSS for production
    "head",
    "/assets/css/dist/style.min.css?v=$version",
    active: true,
    embed: true,
    priority: 20,
    options: "rel=\"stylesheet\""
    // type="text/css" is auto detected
);

ResourceLoader::add( # LESS for dev tests
    "head",
    "/assets/css/src/style.less?v=$random#!watch",
    active: false,
    priority: 25,
    embed: false,
    options: "rel=\"stylesheet/less\""
    // type="text/css" is auto detected
);

ResourceLoader::add( # jQuery
    "head",
    "/assets/vendor/jquery.min.js",
    active: true,
    priority: 4,
    embed: false,
    options: "rel=\"preconnect\""
);

ResourceLoader::add( # jQuery.Easing
    "head",
    "/assets/vendor/jquery.easing.min.js",
    active: true,
    embed: false,
    priority: 36,
    options: "async"
);

// ResourceLoader::add( # External Libraries @slick-carousel.css
//     "body-bottom",
//     "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css",
//     active: true,
//     embed: false,
//     priority: 40,
//     options: "rel=\"stylesheet\""
// );
ResourceLoader::add( # External Libraries @slick-carousel.css
    "head",
    "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css",
    active: true,
    embed: false,
    priority: 40,
    options: "rel=\"preload\" as=\"style\""
);
ResourceLoader::add( # External Libraries @slick-carousel.css
    "head",
    "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css",
    active: true,
    embed: false,
    priority: 41,
    options: "rel=\"stylesheet\" media=\"print\" onload=\"this.media='all'\""
);

// ResourceLoader::add( # External Libraries @slick.css
//     "head",
//     "//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css",
//     active: true,
//     embed: false,
//     priority: 43,
//     options: "rel=\"stylesheet\""
// );
ResourceLoader::add( # External Libraries @slick.css
    "head",
    "//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css?display=swap",
    active: true,
    embed: false,
    priority: 43,
    options: "rel=\"preload\" as=\"style\""
);
ResourceLoader::add( # External Libraries @slick.css
    "head",
    "//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css?display=swap",
    active: true,
    embed: false,
    priority: 44,
    options: "rel=\"stylesheet\" media=\"print\" onload=\"this.media='all'\""
);

ResourceLoader::add( # External Libraries @slick-carousel.js
    "head",
    "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js",
    active: true,
    embed: false,
    priority: 45,
    options: "defer"
);

ResourceLoader::add( # External Libraries @jQuery.matchHeight.js
    "head",
    "https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js",
    active: true,
    embed: false,
    priority: 46,
    options: "crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" integrity=\"sha512-/bOVV1DV1AQXcypckRwsR9ThoCj7FqTV2/0Bm79bL3YSyLkVideFLE3MIZkq1u5t28ke1c0n31WYCOrO01dsUg==\" defer"
);

ResourceLoader::add( # External Libraries @anime.js (moved from Footer.php)
    "head",
    "https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js",
    active: true,
    embed: false,
    priority: 47,
    options: "crossorigin=\"anonymous\" defer"
);

ResourceLoader::add( # JavaScript: main.js
    "head",
    "/assets/js/dist/main.min.js?v=$version",
    // "/assets/js/dist/main.js?v=$version",
    // "/assets/js/src/main.js?v=$version",
    active: true,
    embed: false,
    priority: 70,
    options: "defer"
);

ResourceLoader::add( # JavaScript: hero-counter.js
    "hero-after",
    "/assets/js/dist/hero-counter.min.js?v=$version",
    active: true,
    embed: false,
    priority: 72,
    options: "defer"
    // type="text/css" is auto detected
);

// <!-- Calendly link widget begin -->
// <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
// <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
// <!-- Calendly link widget end -->
ResourceLoader::add( # External Libraries @Calendly.css wigged (Book a Call)
    "body-bottom",
    "https://assets.calendly.com/assets/external/widget.css",
    active: true,
    embed: false,
    priority: 107,
    options: "rel=\"preload\" as=\"style\""
);
ResourceLoader::add( # External Libraries @Calendly.css wigged (Book a Call)
    "body-bottom",
    "https://assets.calendly.com/assets/external/widget.css",
    active: true,
    embed: false,
    priority: 108,
    options: "rel=\"stylesheet\" media=\"print\" onload=\"this.media='all'\""
);
ResourceLoader::add( # External Libraries @Calendly.js wigged (Book a Call)
    "body-bottom",
    "https://assets.calendly.com/assets/external/widget.js",
    active: true,
    embed: false,
    priority: 109,
    options: "async"
);
