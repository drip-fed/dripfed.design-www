<?php
require(__DIR__ . '/../config/vars.global.php');
require(__DIR__ . '/../config/debug.global.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta content="True" name="HandheldFriendly" />

    <title><?= $globalTitleLong; ?></title>
    <meta name="description" content="<?= $globalDescription; ?>" />
    <meta name="googlebot" content="<?= $globalRobots; ?>" />
    <meta name="robots" content="<?= $globalRobots; ?>" />
    <link rel="canonical" href="<?= $globalDomainRoot; ?>" />

    <link rel="apple-touch-icon" href="<?= $globalDomainRoot; ?>dist/images/social/apple-touch-icon.png" />
    <link rel="icon" href="<?= $globalDomainRoot; ?>favicon.ico" />
    <link rel="shortcut icon" href="<?= $globalDomainRoot; ?>favicon.ico" />

    <!-- Sharing details  -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $globalDomainRoot; ?>" />
    <meta property="og:title" content="<?= $globalTitleLong; ?>" />
    <meta property="og:description" content="<?= $globalDescription; ?>" />
    <meta property="og:image" content="<?= $globalDomainRoot; ?>dist/images/social/social-dripfed-design-sharing.jpg" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@ChrisWatterston" />
    <meta name="twitter:creator" content="@ChrisWatterston" />
    <meta name="twitter:title" content="<?= $globalTitleLong; ?>" />
    <meta name="twitter:description" content="<?= $globalDescription; ?>" />
    <meta name="twitter:image" content="<?= $globalDomainRoot; ?>dist/images/social/social-dripfed-design-sharing.jpg" />

    <!-- Schema Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "<?= $globalTitle; ?>",
            "alternateName": "<?= $globalCompanyName; ?>",
            "url": "<?= $globalDomainRoot; ?>",
            "logo": "<?= $globalDomainRoot; ?>dist/images/social/dfd-dripfed-design-schema-logo.png",
            "description": "<?= $globalDescription; ?>",
            "sameAs": [
                "<?= $globalDomainRoot; ?>",
                "https://www.linkedin.com/in/chriswatterston/",
                "https://www.linkedin.com/company/drip-fed-design/",
                "https://www.facebook.com/dripfeddesign",
                "https://dribbble.com/chriswatterston",
                "https://twitter.com/chriswatterston",
                "https://www.instagram.com/chriswatterston",
                "https://www.youtube.com/@dripfeddesign",
                "https://mastodon.social/@chriswatterston"
            ],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Pentire Fordbridge Road",
                "postalCode": "TW16 6AX",
                "addressLocality": "Middlesex",
                "addressRegion": "Middlesex",
                "addressCountry": "United Kingdom"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "email": "hello@dripfed.design",
                "telephone": "+44 7901 660338"
            }
        }
    </script>

    <link rel="stylesheet" type="text/css" href="dist/css/<?= $globalPrefix; ?>.min.css">

    <? if (getenv('ENVIRONMENT_STATE') === 'production') { ?>
        <!-- Hotjar Tracking Code -->
        <script>
            (function(h, o, t, j, a, r) {
                h.hj = h.hj || function() {
                    (h.hj.q = h.hj.q || []).push(arguments)
                };
                h._hjSettings = {
                    hjid: 3881240,
                    hjsv: 6
                };
                a = o.getElementsByTagName('head')[0];
                r = o.createElement('script');
                r.async = 1;
                r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
                a.appendChild(r);
            })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
        </script>
    <? } else {
        echo '<!-- [hotjar-disabled] -->';
    } ?>
</head>

<body id="home">
    <main id="<?= $globalPrefix; ?>-main-container">
        <header class="<?= $globalPrefix; ?>-header-container _max-width__1280">
            <div class="<?= $globalPrefix; ?>-grid-container -column__min-full -column-v__center">
                <div class=" __logo">
                    <a data-cabin-event="Header / Logo" href="<?= $globalDomainRoot; ?>" title="<?= $globalDescription; ?>" hreflang="en">
                        <img src="dist/images/brand/brand-dripfed-design-logo-full.svg" alt="<?= $globalTitle; ?> brand logo" width="240" height="130" />
                    </a>
                </div>
                <nav class="__nav">
                    <div class="<?= $globalPrefix; ?>-nav-container">
                        <div class="<?= $globalPrefix; ?>-grid-container -column__half-min -column-h__right -column-v__center -column-gap__default">
                            <ul class="__links">
                                <li><a data-cabin-event="Header / Learn More" href="<?= $globalDomainRoot; ?>latest/design-subscription-what-it-is-how-it-works-is-it-the-future" title="What is a unlimited design subscriptions or design as a service, and how does it work">Learn about unlimited design subscription<i class="_icon -arrow__r"></i></a></li>
                                <li><a data-cabin-event="Header / Latest" href="<?= $globalDomainRoot; ?>latest/" title="Look at our latest work, articles, and updates">Latest updates<i class="_icon -arrow__r"></i></a></li>
                            </ul>
                            <div class="__cta <?= $globalPrefix; ?>-button-container">
                                <a data-cabin-event="Header / Book Call" href="<?= $globalDomainRoot; ?>book-call" target="_blank" class="__button -orange" title="Book an introduction call, learn out about our design subscription and web development service" hreflang="en">Book a call</a>
                                <a data-cabin-event="Header / Pricing" href="<?= $globalDomainRoot; ?>#anchor-designplans" class="__button -white" title="Costs for digital design and web development service for you startup or business" hreflang="en">Pricing</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>