<?php
require_once('./db_config/config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `tbl_contact`(`name`, `email`, `phone`, `message`) VALUES('$name', '$email', '$phone', '$message')";
    $result = $conn->query($sql);

    if ($result) {
        header("Location: contact-us.php");
    } else {
        echo "<script>alert('Error');</script>";
    }
}

?>

<!DOCTYPE html>
<html class="html" lang="en-US">

<head>
    <meta charset="UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>Contact Us &#8211; Writing</title>
    <meta name='robots' content='max-image-preview:large' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='dns-prefetch' href='https://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="Writing &raquo; Feed"
        href="https://writing.sushmagoswami.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Writing &raquo; Comments Feed"
        href="https://writing.sushmagoswami.com/comments/feed/" />
    <script src="https://kit.fontawesome.com/a3b82e11b2.js" crossorigin="anonymous"></script>
    <script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/writing.sushmagoswami.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.5"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                    .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                        n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                        );
                case "emoji":
                    return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                        "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                    300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                        e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                            .toString()
                        ].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                    .everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                .DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <style id='classic-theme-styles-inline-css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
    </style>
    <style id='global-styles-inline-css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <style id='woocommerce-inline-inline-css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
    </style>
    <link rel='stylesheet' id='wpforms-modern-full-css'
        href='https://writing.sushmagoswami.com/wp-content/plugins/wpforms-lite/assets/css/frontend/modern/wpforms-full.min.css?ver=1.8.6.3'
        media='all' />
    <link rel='stylesheet' id='oceanwp-woo-mini-cart-css'
        href='https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/css/woo/woo-mini-cart.min.css?ver=6.4.5'
        media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href='https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/fonts/fontawesome/css/all.min.css?ver=6.4.2'
        media='all' />
    <link rel='stylesheet' id='simple-line-icons-css'
        href='https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/css/third/simple-line-icons.min.css?ver=2.4.0'
        media='all' />
    <link rel='stylesheet' id='oceanwp-style-css'
        href='https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/css/style.min.css?ver=3.5.3'
        media='all' />
    <link rel='stylesheet' id='oceanwp-google-font-poppins-css'
        href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i&amp;subset=latin&amp;display=swap&amp;ver=6.4.5'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://writing.sushmagoswami.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.19.0'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://writing.sushmagoswami.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='elementor-post-5-css'
        href='https://writing.sushmagoswami.com/wp-content/uploads/elementor/css/post-5.css?ver=1706608582'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://writing.sushmagoswami.com/wp-content/uploads/elementor/css/global.css?ver=1706608582'
        media='all' />
    <link rel='stylesheet' id='elementor-post-14-css'
        href='https://writing.sushmagoswami.com/wp-content/uploads/elementor/css/post-14.css?ver=1706608850'
        media='all' />
    <link rel='stylesheet' id='oceanwp-woocommerce-css'
        href='https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/css/woo/woocommerce.min.css?ver=6.4.5'
        media='all' />
    <link rel='stylesheet' id='oceanwp-woo-star-font-css'
        href='https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/css/woo/woo-star-font.min.css?ver=6.4.5'
        media='all' />
    <link rel='stylesheet' id='oceanwp-woo-quick-view-css'
        href='https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/css/woo/woo-quick-view.min.css?ver=6.4.5'
        media='all' />
    <link rel='stylesheet' id='eael-general-css'
        href='https://writing.sushmagoswami.com/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css?ver=5.9.7'
        media='all' />
    <link rel='stylesheet' id='oe-widgets-style-css'
        href='https://writing.sushmagoswami.com/wp-content/plugins/ocean-extra/assets/css/widgets.css?ver=6.4.5'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.5'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js">
    </script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.5.2"
        id="jquery-blockui-js" defer data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/writing.sushmagoswami.com\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.5.2"
        id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.5.2"
        id="js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.5.2"
        id="woocommerce-js" defer data-wp-strategy="defer"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js">
    </script>
    <script id="wp-util-js-extra">
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    </script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/wp-util.min.js?ver=6.4.5" id="wp-util-js"></script>
    <script id="wc-add-to-cart-variation-js-extra">
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=8.5.2"
        id="wc-add-to-cart-variation-js" defer data-wp-strategy="defer"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2-wc.8.5.2"
        id="flexslider-js" defer data-wp-strategy="defer"></script>
    <script id="wc-cart-fragments-js-extra">
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_4964f16ec9b0c05bfc7c3c5aecde0485",
        "fragment_name": "wc_fragments_4964f16ec9b0c05bfc7c3c5aecde0485",
        "request_timeout": "5000"
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=8.5.2"
        id="wc-cart-fragments-js" defer data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="https://writing.sushmagoswami.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://writing.sushmagoswami.com/wp-json/wp/v2/pages/14" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://writing.sushmagoswami.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.5" />
    <meta name="generator" content="WooCommerce 8.5.2" />
    <link rel="canonical" href="contact-us.php" />
    <link rel='shortlink' href='https://writing.sushmagoswami.com/?p=14' />
    <link rel="alternate" type="application/json+oembed"
        href="https://writing.sushmagoswami.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwriting.sushmagoswami.com%2Fcontact-us%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://writing.sushmagoswami.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwriting.sushmagoswami.com%2Fcontact-us%2F&#038;format=xml" />
    <noscript>
        <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.19.0; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <!-- OceanWP CSS -->
    <style type="text/css">
    /* General CSS */
    .woocommerce-MyAccount-navigation ul li a:before,
    .woocommerce-checkout .woocommerce-info a,
    .woocommerce-checkout #payment ul.payment_methods .wc_payment_method>input[type=radio]:first-child:checked+label:before,
    .woocommerce-checkout #payment .payment_method_paypal .about_paypal,
    .woocommerce ul.products li.product li.category a:hover,
    .woocommerce ul.products li.product .button:hover,
    .woocommerce ul.products li.product .product-inner .added_to_cart:hover,
    .product_meta .posted_in a:hover,
    .product_meta .tagged_as a:hover,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
    .woocommerce .oceanwp-grid-list a.active,
    .woocommerce .oceanwp-grid-list a:hover,
    .woocommerce .oceanwp-off-canvas-filter:hover,
    .widget_shopping_cart ul.cart_list li .owp-grid-wrap .owp-grid a.remove:hover,
    .widget_product_categories li a:hover~.count,
    .widget_layered_nav li a:hover~.count,
    .woocommerce ul.products li.product:not(.product-category) .woo-entry-buttons li a:hover,
    a:hover,
    a.light:hover,
    .theme-heading .text::before,
    .theme-heading .text::after,
    #top-bar-content>a:hover,
    #top-bar-social li.oceanwp-email a:hover,
    #site-navigation-wrap .dropdown-menu>li>a:hover,
    #site-header.medium-header #medium-searchform button:hover,
    .oceanwp-mobile-menu-icon a:hover,
    .blog-entry.post .blog-entry-header .entry-title a:hover,
    .blog-entry.post .blog-entry-readmore a:hover,
    .blog-entry.thumbnail-entry .blog-entry-category a,
    ul.meta li a:hover,
    .dropcap,
    .single nav.post-navigation .nav-links .title,
    body .related-post-title a:hover,
    body #wp-calendar caption,
    body .contact-info-widget.default i,
    body .contact-info-widget.big-icons i,
    body .custom-links-widget .oceanwp-custom-links li a:hover,
    body .custom-links-widget .oceanwp-custom-links li a:hover:before,
    body .posts-thumbnails-widget li a:hover,
    body .social-widget li.oceanwp-email a:hover,
    .comment-author .comment-meta .comment-reply-link,
    #respond #cancel-comment-reply-link:hover,
    #footer-widgets .footer-box a:hover,
    #footer-bottom a:hover,
    #footer-bottom #footer-bottom-menu a:hover,
    .sidr a:hover,
    .sidr-class-dropdown-toggle:hover,
    .sidr-class-menu-item-has-children.active>a,
    .sidr-class-menu-item-has-children.active>a>.sidr-class-dropdown-toggle,
    input[type=checkbox]:checked:before {
        color: #f7be01
    }

    .woocommerce .oceanwp-grid-list a.active .owp-icon use,
    .woocommerce .oceanwp-grid-list a:hover .owp-icon use,
    .single nav.post-navigation .nav-links .title .owp-icon use,
    .blog-entry.post .blog-entry-readmore a:hover .owp-icon use,
    body .contact-info-widget.default .owp-icon use,
    body .contact-info-widget.big-icons .owp-icon use {
        stroke: #f7be01
    }

    .woocommerce div.product div.images .open-image,
    .wcmenucart-details.count,
    .woocommerce-message a,
    .woocommerce-error a,
    .woocommerce-info a,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
    .owp-product-nav li a.owp-nav-link:hover,
    .woocommerce div.product.owp-tabs-layout-vertical .woocommerce-tabs ul.tabs li a:after,
    .woocommerce .widget_product_categories li.current-cat>a~.count,
    .woocommerce .widget_product_categories li.current-cat>a:before,
    .woocommerce .widget_layered_nav li.chosen a~.count,
    .woocommerce .widget_layered_nav li.chosen a:before,
    #owp-checkout-timeline .active .timeline-wrapper,
    .bag-style:hover .wcmenucart-cart-icon .wcmenucart-count,
    .show-cart .wcmenucart-cart-icon .wcmenucart-count,
    .woocommerce ul.products li.product:not(.product-category) .image-wrap .button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"],
    button[type="submit"],
    .button,
    #site-navigation-wrap .dropdown-menu>li.btn>a>span,
    .thumbnail:hover i,
    .post-quote-content,
    .omw-modal .omw-close-modal,
    body .contact-info-widget.big-icons li:hover i,
    body div.wpforms-container-full .wpforms-form input[type=submit],
    body div.wpforms-container-full .wpforms-form button[type=submit],
    body div.wpforms-container-full .wpforms-form .wpforms-page-button {
        background-color: #f7be01
    }

    .thumbnail:hover .link-post-svg-icon {
        background-color: #f7be01
    }

    body .contact-info-widget.big-icons li:hover .owp-icon {
        background-color: #f7be01
    }

    .current-shop-items-dropdown {
        border-top-color: #f7be01
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
        border-bottom-color: #f7be01
    }

    .wcmenucart-details.count:before {
        border-color: #f7be01
    }

    .woocommerce ul.products li.product .button:hover {
        border-color: #f7be01
    }

    .woocommerce ul.products li.product .product-inner .added_to_cart:hover {
        border-color: #f7be01
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
        border-color: #f7be01
    }

    .woocommerce .oceanwp-grid-list a.active {
        border-color: #f7be01
    }

    .woocommerce .oceanwp-grid-list a:hover {
        border-color: #f7be01
    }

    .woocommerce .oceanwp-off-canvas-filter:hover {
        border-color: #f7be01
    }

    .owp-product-nav li a.owp-nav-link:hover {
        border-color: #f7be01
    }

    .widget_shopping_cart_content .buttons .button:first-child:hover {
        border-color: #f7be01
    }

    .widget_shopping_cart ul.cart_list li .owp-grid-wrap .owp-grid a.remove:hover {
        border-color: #f7be01
    }

    .widget_product_categories li a:hover~.count {
        border-color: #f7be01
    }

    .woocommerce .widget_product_categories li.current-cat>a~.count {
        border-color: #f7be01
    }

    .woocommerce .widget_product_categories li.current-cat>a:before {
        border-color: #f7be01
    }

    .widget_layered_nav li a:hover~.count {
        border-color: #f7be01
    }

    .woocommerce .widget_layered_nav li.chosen a~.count {
        border-color: #f7be01
    }

    .woocommerce .widget_layered_nav li.chosen a:before {
        border-color: #f7be01
    }

    #owp-checkout-timeline.arrow .active .timeline-wrapper:before {
        border-top-color: #f7be01;
        border-bottom-color: #f7be01
    }

    #owp-checkout-timeline.arrow .active .timeline-wrapper:after {
        border-left-color: #f7be01;
        border-right-color: #f7be01
    }

    .bag-style:hover .wcmenucart-cart-icon .wcmenucart-count {
        border-color: #f7be01
    }

    .bag-style:hover .wcmenucart-cart-icon .wcmenucart-count:after {
        border-color: #f7be01
    }

    .show-cart .wcmenucart-cart-icon .wcmenucart-count {
        border-color: #f7be01
    }

    .show-cart .wcmenucart-cart-icon .wcmenucart-count:after {
        border-color: #f7be01
    }

    .woocommerce ul.products li.product:not(.product-category) .woo-product-gallery .active a {
        border-color: #f7be01
    }

    .woocommerce ul.products li.product:not(.product-category) .woo-product-gallery a:hover {
        border-color: #f7be01
    }

    .widget-title {
        border-color: #f7be01
    }

    blockquote {
        border-color: #f7be01
    }

    #searchform-dropdown {
        border-color: #f7be01
    }

    .dropdown-menu .sub-menu {
        border-color: #f7be01
    }

    .blog-entry.large-entry .blog-entry-readmore a:hover {
        border-color: #f7be01
    }

    .oceanwp-newsletter-form-wrap input[type="email"]:focus {
        border-color: #f7be01
    }

    .social-widget li.oceanwp-email a:hover {
        border-color: #f7be01
    }

    #respond #cancel-comment-reply-link:hover {
        border-color: #f7be01
    }

    body .contact-info-widget.big-icons li:hover i {
        border-color: #f7be01
    }

    #footer-widgets .oceanwp-newsletter-form-wrap input[type="email"]:focus {
        border-color: #f7be01
    }

    blockquote,
    .wp-block-quote {
        border-left-color: #f7be01
    }

    body .contact-info-widget.big-icons li:hover .owp-icon {
        border-color: #f7be01
    }

    .woocommerce table.shop_table,
    .woocommerce table.shop_table td,
    .woocommerce-cart .cart-collaterals .cart_totals tr td,
    .woocommerce-cart .cart-collaterals .cart_totals tr th,
    .woocommerce table.shop_table tth,
    .woocommerce table.shop_table tfoot td,
    .woocommerce table.shop_table tfoot th,
    .woocommerce .order_details,
    .woocommerce .shop_table.order_details tfoot th,
    .woocommerce .shop_table.customer_details th,
    .woocommerce .cart-collaterals .cross-sells,
    .woocommerce-page .cart-collaterals .cross-sells,
    .woocommerce .cart-collaterals .cart_totals,
    .woocommerce-page .cart-collaterals .cart_totals,
    .woocommerce .cart-collaterals h2,
    .woocommerce .cart-collaterals h2,
    .woocommerce .cart-collaterals h2,
    .woocommerce-cart .cart-collaterals .cart_totals .order-total th,
    .woocommerce-cart .cart-collaterals .cart_totals .order-total td,
    .woocommerce ul.order_details,
    .woocommerce .shop_table.order_details tfoot th,
    .woocommerce .shop_table.customer_details th,
    .woocommerce .woocommerce-checkout #customer_details h3,
    .woocommerce .woocommerce-checkout h3#order_review_heading,
    .woocommerce-checkout #payment ul.payment_methods,
    .woocommerce-checkout form.login,
    .woocommerce-checkout form.checkout_coupon,
    .woocommerce-checkout-review-order-table tfoot th,
    .woocommerce-checkout #payment,
    .woocommerce ul.order_details,
    .woocommerce #customer_login>div,
    .woocommerce .col-1.address,
    .woocommerce .col-2.address,
    .woocommerce-checkout .woocommerce-info,
    .woocommerce div.product form.cart,
    .product_meta,
    .woocommerce div.product .woocommerce-tabs ul.tabs,
    .woocommerce #reviews #comments ol.commentlist li .comment_container,
    p.stars span a,
    .woocommerce ul.product_list_widget li,
    .woocommerce .widget_shopping_cart .cart_list li,
    .woocommerce.widget_shopping_cart .cart_list li,
    .woocommerce ul.product_list_widget li:first-child,
    .woocommerce .widget_shopping_cart .cart_list li:first-child,
    .woocommerce.widget_shopping_cart .cart_list li:first-child,
    .widget_product_categories li a,
    .woocommerce .oceanwp-toolbar,
    .woocommerce .products.list .product,
    table th,
    table td,
    hr,
    .content-area,
    body.content-left-sidebar #content-wrap .content-area,
    .content-left-sidebar .content-area,
    #top-bar-wrap,
    #site-header,
    #site-header.top-header #search-toggle,
    .dropdown-menu ul li,
    .centered-minimal-page-header,
    .blog-entry.post,
    .blog-entry.grid-entry .blog-entry-inner,
    .blog-entry.thumbnail-entry .blog-entry-bottom,
    .single-post .entry-title,
    .single .entry-share-wrap .entry-share,
    .single .entry-share,
    .single .entry-share ul li a,
    .single nav.post-navigation,
    .single nav.post-navigation .nav-links .nav-previous,
    #author-bio,
    #author-bio .author-bio-avatar,
    #author-bio .author-bio-social li a,
    #related-posts,
    #comments,
    .comment-body,
    #respond #cancel-comment-reply-link,
    #blog-entries .type-page,
    .page-numbers a,
    .page-numbers span:not(.elementor-screen-only),
    .page-links span,
    body #wp-calendar caption,
    body #wp-calendar th,
    body #wp-calendar tbody,
    body .contact-info-widget.default i,
    body .contact-info-widget.big-icons i,
    body .posts-thumbnails-widget li,
    body .tagcloud a {
        border-color: #f7be01
    }

    body .contact-info-widget.big-icons .owp-icon,
    body .contact-info-widget.default .owp-icon {
        border-color: #f7be01
    }

    /* Header CSS */
    #site-header.has-header-media .overlay-header-media {
        background-color: rgba(0, 0, 0, 0.5)
    }

    #site-logo #site-logo-inner a img,
    #site-header.center-header #site-navigation-wrap .middle-site-logo a img {
        max-width: 112px
    }

    .effect-two #site-navigation-wrap .dropdown-menu>li>a.menu-link>span:after,
    .effect-eight #site-navigation-wrap .dropdown-menu>li>a.menu-link>span:before,
    .effect-eight #site-navigation-wrap .dropdown-menu>li>a.menu-link>span:after {
        background-color: #f6bc04
    }

    .effect-six #site-navigation-wrap .dropdown-menu>li>a.menu-link>span:before,
    .effect-six #site-navigation-wrap .dropdown-menu>li>a.menu-link>span:after {
        border-color: #f6bc04
    }

    .effect-ten #site-navigation-wrap .dropdown-menu>li>a.menu-link:hover>span,
    .effect-ten #site-navigation-wrap .dropdown-menu>li.sfHover>a.menu-link>span {
        -webkit-box-shadow: 0 0 10px 4px #f6bc04;
        -moz-box-shadow: 0 0 10px 4px #f6bc04;
        box-shadow: 0 0 10px 4px #f6bc04
    }

    #site-navigation-wrap .dropdown-menu>li>a,
    .oceanwp-mobile-menu-icon a,
    #searchform-header-replace-close {
        color: #000000
    }

    #site-navigation-wrap .dropdown-menu>li>a .owp-icon use,
    .oceanwp-mobile-menu-icon a .owp-icon use,
    #searchform-header-replace-close .owp-icon use {
        stroke: #000000
    }

    #site-navigation-wrap .dropdown-menu>li>a:hover,
    .oceanwp-mobile-menu-icon a:hover,
    #searchform-header-replace-close:hover {
        color: #000000
    }

    #site-navigation-wrap .dropdown-menu>li>a:hover .owp-icon use,
    .oceanwp-mobile-menu-icon a:hover .owp-icon use,
    #searchform-header-replace-close:hover .owp-icon use {
        stroke: #000000
    }

    body .sidr a:hover,
    body .sidr-class-dropdown-toggle:hover,
    body .sidr-class-dropdown-toggle .fa,
    body .sidr-class-menu-item-has-children.active>a,
    body .sidr-class-menu-item-has-children.active>a>.sidr-class-dropdown-toggle,
    #mobile-dropdown ul li a:hover,
    #mobile-dropdown ul li a .dropdown-toggle:hover,
    #mobile-dropdown .menu-item-has-children.active>a,
    #mobile-dropdown .menu-item-has-children.active>a>.dropdown-toggle,
    #mobile-fullscreen ul li a:hover,
    #mobile-fullscreen .oceanwp-social-menu.simple-social ul li a:hover {
        color: #f6bc04
    }

    #mobile-fullscreen a.close:hover .close-icon-inner,
    #mobile-fullscreen a.close:hover .close-icon-inner::after {
        background-color: #f6bc04
    }

    /* Footer Widgets CSS */
    #footer-widgets {
        background-color: #000000
    }

    #footer-widgets,
    #footer-widgets p,
    #footer-widgets li a:before,
    #footer-widgets .contact-info-widget span.oceanwp-contact-title,
    #footer-widgets .recent-posts-date,
    #footer-widgets .recent-posts-comments,
    #footer-widgets .widget-recent-posts-icons li .fa {
        color: #f7be01
    }

    #footer-widgets li,
    #footer-widgets #wp-calendar caption,
    #footer-widgets #wp-calendar th,
    #footer-widgets #wp-calendar tbody,
    #footer-widgets .contact-info-widget i,
    #footer-widgets .oceanwp-newsletter-form-wrap input[type="email"],
    #footer-widgets .posts-thumbnails-widget li,
    #footer-widgets .social-widget li a {
        border-color: #000000
    }

    #footer-widgets .contact-info-widget .owp-icon {
        border-color: #000000
    }

    #footer-widgets .footer-box a,
    #footer-widgets a {
        color: #f7be01
    }

    #footer-widgets .footer-box a:hover,
    #footer-widgets a:hover {
        color: #ffffff
    }

    /* WooCommerce CSS */
    #owp-checkout-timeline .timeline-step {
        color: #cccccc
    }

    #owp-checkout-timeline .timeline-step {
        border-color: #cccccc
    }

    /* Typography CSS */
    #site-navigation-wrap .dropdown-menu>li>a,
    #site-header.full_screen-header .fs-dropdown-menu>li>a,
    #site-header.top-header #site-navigation-wrap .dropdown-menu>li>a,
    #site-header.center-header #site-navigation-wrap .dropdown-menu>li>a,
    #site-header.medium-header #site-navigation-wrap .dropdown-menu>li>a,
    .oceanwp-mobile-menu-icon a {
        font-family: Poppins;
        font-weight: 600;
        font-style: normal;
        font-size: 15px;
        text-transform: capitalize
    }

    .sidr-class-dropdown-menu li a,
    a.sidr-class-toggle-sidr-close,
    #mobile-dropdown ul li a,
    body #mobile-fullscreen ul li a {
        font-family: Poppins;
        font-weight: 600;
        font-style: normal;
        text-transform: capitalize
    }
    </style>
    <style id="wpforms-css-vars-root">
    :root {
        --wpforms-field-border-radius: 3px;
        --wpforms-field-background-color: #ffffff;
        --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
        --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
        --wpforms-label-color: rgba(0, 0, 0, 0.85);
        --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
        --wpforms-label-error-color: #d63637;
        --wpforms-button-border-radius: 3px;
        --wpforms-button-background-color: #066aab;
        --wpforms-button-text-color: #ffffff;
        --wpforms-field-size-input-height: 43px;
        --wpforms-field-size-input-spacing: 15px;
        --wpforms-field-size-font-size: 16px;
        --wpforms-field-size-line-height: 19px;
        --wpforms-field-size-padding-h: 14px;
        --wpforms-field-size-checkbox-size: 16px;
        --wpforms-field-size-sublabel-spacing: 5px;
        --wpforms-field-size-icon-size: 1;
        --wpforms-label-size-font-size: 16px;
        --wpforms-label-size-line-height: 19px;
        --wpforms-label-size-sublabel-font-size: 14px;
        --wpforms-label-size-sublabel-line-height: 17px;
        --wpforms-button-size-font-size: 17px;
        --wpforms-button-size-height: 41px;
        --wpforms-button-size-padding-h: 15px;
        --wpforms-button-size-margin-top: 10px;

    }
    </style>
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-14 wp-custom-logo wp-embed-responsive theme-oceanwp woocommerce-no-js oceanwp-theme dropdown-mobile no-header-border default-breakpoint content-full-width content-max-width page-header-disabled has-breadcrumbs has-grid-list account-original-style elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-14"
    itemscope="itemscope" itemtype="https://schema.org/WebPage">



    <div id="outer-wrap" class="site clr">

        <a class="skip-link screen-reader-text" href="contact-us.php#main">Skip to content</a>


        <div id="wrap" class="clr">



            <?php include "./partials/header.php"; ?>
            <!-- #site-header -->



            <main id="main" class="site-main clr" role="main">

                <div data-elementor-type="wp-page" data-elementor-id="14" class="elementor elementor-14">
                    <div class="elementor-element elementor-element-5468f44 e-con-full e-flex e-con e-parent"
                        data-id="5468f44" data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}" data-core-v316-plus="true">
                        <div class="elementor-element elementor-element-96b2b31 elementor-widget elementor-widget-image"
                            data-id="96b2b31" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor - v3.19.0 - 29-01-2024 */
                                .elementor-widget-image {
                                    text-align: center
                                }

                                .elementor-widget-image a {
                                    display: inline-block
                                }

                                .elementor-widget-image a img[src$=".svg"] {
                                    width: 48px
                                }

                                .elementor-widget-image img {
                                    vertical-align: middle;
                                    display: inline-block
                                }
                                </style> <img decoding="async" width="1310" height="132"
                                    src="https://writing.sushmagoswami.com/wp-content/uploads/2024/01/Capture-1.png"
                                    class="attachment-2048x2048 size-2048x2048 wp-image-448" alt=""
                                    srcset="https://writing.sushmagoswami.com/wp-content/uploads/2024/01/Capture-1.png 1310w, https://writing.sushmagoswami.com/wp-content/uploads/2024/01/Capture-1-300x30.png 300w, https://writing.sushmagoswami.com/wp-content/uploads/2024/01/Capture-1-1024x103.png 1024w, https://writing.sushmagoswami.com/wp-content/uploads/2024/01/Capture-1-768x77.png 768w"
                                    sizes="(max-width: 1310px) 100vw, 1310px" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-838e479 e-flex e-con-boxed e-con e-parent"
                        data-id="838e479" data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-b79f874 elementor-widget elementor-widget-heading"
                                data-id="b79f874" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <style>
                                    /*! elementor - v3.19.0 - 29-01-2024 */
                                    .elementor-heading-title {
                                        padding: 0;
                                        margin: 0;
                                        line-height: 1
                                    }

                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                        color: inherit;
                                        font-size: inherit;
                                        line-height: inherit
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                        font-size: 15px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                        font-size: 19px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                        font-size: 29px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                        font-size: 39px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                        font-size: 59px
                                    }
                                    </style>
                                    <h3 class="elementor-heading-title elementor-size-xl">Get In Touch
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-8cb7038 e-flex e-con-boxed e-con e-parent"
                        data-id="8cb7038" data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-a4feb85 e-con-full e-flex e-con e-child"
                                data-id="a4feb85" data-element_type="container"
                                data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                <div class="elementor-element elementor-element-c77bf3b elementor-invisible elementor-widget elementor-widget-image"
                                    data-id="c77bf3b" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                    data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="360" height="311"
                                            src="https://writing.sushmagoswami.com/wp-content/uploads/2024/01/9c248ddfc4eec873e59b5fbebcf7ed82-removebg-preview.png"
                                            class="attachment-2048x2048 size-2048x2048 wp-image-676" alt=""
                                            srcset="https://writing.sushmagoswami.com/wp-content/uploads/2024/01/9c248ddfc4eec873e59b5fbebcf7ed82-removebg-preview.png 360w, https://writing.sushmagoswami.com/wp-content/uploads/2024/01/9c248ddfc4eec873e59b5fbebcf7ed82-removebg-preview-300x259.png 300w"
                                            sizes="(max-width: 360px) 100vw, 360px" />
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-0040565 e-con-full e-flex e-con e-child"
                                data-id="0040565" data-element_type="container"
                                data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                <div class="elementor-element elementor-element-56b01ce elementor-widget elementor-widget-shortcode"
                                    data-id="56b01ce" data-element_type="widget" data-widget_type="shortcode.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-shortcode">
                                            <div class="wpforms-container wpforms-container-full wpforms-render-modern"
                                                id="wpforms-416">
                                                <form method="post">

                                                    <div class="wpforms-field-container">
                                                        <div id="wpforms-416-field_0-container"
                                                            class="wpforms-field wpforms-field-name" data-field-id="0">
                                                            <input type="text" id="wpforms-416-field_0"
                                                                class="wpforms-field-medium wpforms-field-required"
                                                                name="name" placeholder="Name" required>
                                                        </div>
                                                        <div id="wpforms-416-field_1-container"
                                                            class="wpforms-field wpforms-field-email" data-field-id="1">
                                                            <input type="email" id="wpforms-416-field_1"
                                                                class="wpforms-field-medium wpforms-field-required"
                                                                name="email" placeholder="Email" required>
                                                        </div>
                                                        <div id="wpforms-416-field_4-container"
                                                            class="wpforms-field wpforms-field-text" data-field-id="4">
                                                            <input type="text" id="wpforms-416-field_4"
                                                                class="wpforms-field-medium wpforms-field-required"
                                                                name="phone" placeholder="Phone" required>
                                                        </div>
                                                        <div id="wpforms-416-field_5-container"
                                                            class="wpforms-field wpforms-field-textarea"
                                                            data-field-id="5"><textarea id="wpforms-416-field_5"
                                                                class="wpforms-field-medium" name="message"
                                                                placeholder="Message"></textarea>
                                                        </div>
                                                    </div><!-- .wpforms-field-container -->
                                                    <div class="wpforms-submit-container"><button type="submit"
                                                            name="submit" id="wpforms-submit-416"
                                                            class="wpforms-submit">Submit</button></div>
                                                </form>
                                            </div> <!-- .wpforms-container -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-c81745d e-flex e-con-boxed e-con e-parent"
                        data-id="c81745d" data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-596d3b4 elementor-widget elementor-widget-google_maps"
                                data-id="596d3b4" data-element_type="widget" data-widget_type="google_maps.default">
                                <div class="elementor-widget-container">
                                    <style>
                                    /*! elementor - v3.19.0 - 29-01-2024 */
                                    .elementor-widget-google_maps .elementor-widget-container {
                                        overflow: hidden
                                    }

                                    .elementor-widget-google_maps .elementor-custom-embed {
                                        line-height: 0
                                    }

                                    .elementor-widget-google_maps iframe {
                                        height: 300px
                                    }
                                    </style>
                                    <div class="elementor-custom-embed">
                                        <iframe loading="lazy"
                                            src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&#038;t=m&#038;z=14&#038;output=embed&#038;iwloc=near"
                                            title="London Eye, London, United Kingdom"
                                            aria-label="London Eye, London, United Kingdom"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fbea703 e-flex e-con-boxed e-con e-parent"
                        data-id="fbea703" data-element_type="container"
                        data-settings="{&quot;shape_divider_bottom&quot;:&quot;waves&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                        data-core-v316-plus="true">
                        <div class="e-con-inner">
                            <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
                                    preserveAspectRatio="none">
                                    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
	c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
	c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </main><!-- #main -->


            <?php include "./partials/footer.php"; ?>
            <!-- #footer -->



        </div><!-- #wrap -->


    </div><!-- #outer-wrap -->



    <a aria-label="Scroll to the top of the page" href="contact-us.php#" id="scroll-top" class="scroll-top-right"><i
            class=" fa fa-angle-up" aria-hidden="true" role="img"></i></a>





    <div id="owp-qv-wrap">
        <div class="owp-qv-container">
            <div class="owp-qv-content-wrap">
                <div class="owp-qv-content-inner">
                    <a href="contact-us.php#" class="owp-qv-close" aria-label="Close quick preview">×</a>
                    <div id="owp-qv-content" class="woocommerce single-product"></div>
                </div>
            </div>
        </div>
        <div class="owp-qv-overlay"></div>
    </div>
    <div id="oceanwp-cart-sidebar-wrap">
        <div class="oceanwp-cart-sidebar"><a href="contact-us.php#" class="oceanwp-cart-close">×</a>
            <p class="owp-cart-title">Cart</p>
            <div class="divider"></div>
            <div class="owp-mini-cart">
                <div class="widget woocommerce widget_shopping_cart">
                    <div class="widget_shopping_cart_content"></div>
                </div>
            </div>
        </div>
        <div class="oceanwp-cart-sidebar-overlay"></div>
    </div>
    <script>
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=11.8.0-dev'
        media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='https://writing.sushmagoswami.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.19.0'
        media='all' />
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=8.5.2"
        id="sourcebuster-js-js"></script>
    <script id="wc-order-attribution-js-extra">
    var wc_order_attribution = {
        "params": {
            "lifetime": 1.0e-5,
            "session": 30,
            "ajaxurl": "https:\/\/writing.sushmagoswami.com\/wp-admin\/admin-ajax.php",
            "prefix": "wc_order_attribution_",
            "allowTracking": "yes"
        }
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=8.5.2"
        id="wc-order-attribution-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
        id="wp-polyfill-inert-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0"
        id="regenerator-runtime-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
        id="wp-polyfill-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/vendor/react.min.js?ver=18.2.0" id="react-js">
    </script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1"
        id="wp-hooks-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/deprecated.min.js?ver=73ad3591e7bc95f4777a"
        id="wp-deprecated-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/dom.min.js?ver=49ff2869626fbeaacc23"
        id="wp-dom-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.2.0"
        id="react-dom-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/escape-html.min.js?ver=03e27a7b6ae14f7afaa6"
        id="wp-escape-html-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/element.min.js?ver=ed1c7604880e8b574b40"
        id="wp-element-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/is-shallow-equal.min.js?ver=20c2b06ecf04afb14fee"
        id="wp-is-shallow-equal-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef"
        id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    </script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/keycodes.min.js?ver=3460bd0fac9859d6886c"
        id="wp-keycodes-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/priority-queue.min.js?ver=422e19e9d48b269c5219"
        id="wp-priority-queue-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/compose.min.js?ver=3189b344ff39fef940b7"
        id="wp-compose-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/private-apis.min.js?ver=11cb2ebaa70a9f1f0ab5"
        id="wp-private-apis-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/redux-routine.min.js?ver=0be1b2a6a79703e28531"
        id="wp-redux-routine-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/data.min.js?ver=dc5f255634f3da29c8d5"
        id="wp-data-js"></script>
    <script id="wp-data-js-after">
    (function() {
        var userId = 0;
        var storageKey = "WP_DATA_USER_" + userId;
        wp.data
            .use(wp.data.plugins.persistence, {
                storageKey: storageKey
            });
    })();
    </script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/vendor/lodash.min.js?ver=4.17.19" id="lodash-js">
    </script>
    <script id="lodash-js-after">
    window.lodash = _.noConflict();
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-registry.js?ver=1c879273bd5c193cad0a"
        id="wc-blocks-registry-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/url.min.js?ver=b4979979018b684be209"
        id="wp-url-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/api-fetch.min.js?ver=0fa4dabf8bf2c7adf21a"
        id="wp-api-fetch-js"></script>
    <script id="wp-api-fetch-js-after">
    wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("https://writing.sushmagoswami.com/wp-json/"));
    wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("cdd5c805a0");
    wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
    wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
    wp.apiFetch.nonceEndpoint = "https://writing.sushmagoswami.com/wp-admin/admin-ajax.php?action=rest-nonce";
    </script>
    <script id="wc-settings-js-before">
    var wcSettings = wcSettings || JSON.parse(decodeURIComponent(
        '%7B%22shippingCostRequiresAddress%22%3Afalse%2C%22adminUrl%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fwp-admin%5C%2F%22%2C%22countries%22%3A%7B%22AF%22%3A%22Afghanistan%22%2C%22AX%22%3A%22%5Cu00c5land%20Islands%22%2C%22AL%22%3A%22Albania%22%2C%22DZ%22%3A%22Algeria%22%2C%22AS%22%3A%22American%20Samoa%22%2C%22AD%22%3A%22Andorra%22%2C%22AO%22%3A%22Angola%22%2C%22AI%22%3A%22Anguilla%22%2C%22AQ%22%3A%22Antarctica%22%2C%22AG%22%3A%22Antigua%20and%20Barbuda%22%2C%22AR%22%3A%22Argentina%22%2C%22AM%22%3A%22Armenia%22%2C%22AW%22%3A%22Aruba%22%2C%22AU%22%3A%22Australia%22%2C%22AT%22%3A%22Austria%22%2C%22AZ%22%3A%22Azerbaijan%22%2C%22BS%22%3A%22Bahamas%22%2C%22BH%22%3A%22Bahrain%22%2C%22BD%22%3A%22Bangladesh%22%2C%22BB%22%3A%22Barbados%22%2C%22BY%22%3A%22Belarus%22%2C%22PW%22%3A%22Belau%22%2C%22BE%22%3A%22Belgium%22%2C%22BZ%22%3A%22Belize%22%2C%22BJ%22%3A%22Benin%22%2C%22BM%22%3A%22Bermuda%22%2C%22BT%22%3A%22Bhutan%22%2C%22BO%22%3A%22Bolivia%22%2C%22BQ%22%3A%22Bonaire%2C%20Saint%20Eustatius%20and%20Saba%22%2C%22BA%22%3A%22Bosnia%20and%20Herzegovina%22%2C%22BW%22%3A%22Botswana%22%2C%22BV%22%3A%22Bouvet%20Island%22%2C%22BR%22%3A%22Brazil%22%2C%22IO%22%3A%22British%20Indian%20Ocean%20Territory%22%2C%22BN%22%3A%22Brunei%22%2C%22BG%22%3A%22Bulgaria%22%2C%22BF%22%3A%22Burkina%20Faso%22%2C%22BI%22%3A%22Burundi%22%2C%22KH%22%3A%22Cambodia%22%2C%22CM%22%3A%22Cameroon%22%2C%22CA%22%3A%22Canada%22%2C%22CV%22%3A%22Cape%20Verde%22%2C%22KY%22%3A%22Cayman%20Islands%22%2C%22CF%22%3A%22Central%20African%20Republic%22%2C%22TD%22%3A%22Chad%22%2C%22CL%22%3A%22Chile%22%2C%22CN%22%3A%22China%22%2C%22CX%22%3A%22Christmas%20Island%22%2C%22CC%22%3A%22Cocos%20%28Keeling%29%20Islands%22%2C%22CO%22%3A%22Colombia%22%2C%22KM%22%3A%22Comoros%22%2C%22CG%22%3A%22Congo%20%28Brazzaville%29%22%2C%22CD%22%3A%22Congo%20%28Kinshasa%29%22%2C%22CK%22%3A%22Cook%20Islands%22%2C%22CR%22%3A%22Costa%20Rica%22%2C%22HR%22%3A%22Croatia%22%2C%22CU%22%3A%22Cuba%22%2C%22CW%22%3A%22Cura%26ccedil%3Bao%22%2C%22CY%22%3A%22Cyprus%22%2C%22CZ%22%3A%22Czech%20Republic%22%2C%22DK%22%3A%22Denmark%22%2C%22DJ%22%3A%22Djibouti%22%2C%22DM%22%3A%22Dominica%22%2C%22DO%22%3A%22Dominican%20Republic%22%2C%22EC%22%3A%22Ecuador%22%2C%22EG%22%3A%22Egypt%22%2C%22SV%22%3A%22El%20Salvador%22%2C%22GQ%22%3A%22Equatorial%20Guinea%22%2C%22ER%22%3A%22Eritrea%22%2C%22EE%22%3A%22Estonia%22%2C%22SZ%22%3A%22Eswatini%22%2C%22ET%22%3A%22Ethiopia%22%2C%22FK%22%3A%22Falkland%20Islands%22%2C%22FO%22%3A%22Faroe%20Islands%22%2C%22FJ%22%3A%22Fiji%22%2C%22FI%22%3A%22Finland%22%2C%22FR%22%3A%22France%22%2C%22GF%22%3A%22French%20Guiana%22%2C%22PF%22%3A%22French%20Polynesia%22%2C%22TF%22%3A%22French%20Southern%20Territories%22%2C%22GA%22%3A%22Gabon%22%2C%22GM%22%3A%22Gambia%22%2C%22GE%22%3A%22Georgia%22%2C%22DE%22%3A%22Germany%22%2C%22GH%22%3A%22Ghana%22%2C%22GI%22%3A%22Gibraltar%22%2C%22GR%22%3A%22Greece%22%2C%22GL%22%3A%22Greenland%22%2C%22GD%22%3A%22Grenada%22%2C%22GP%22%3A%22Guadeloupe%22%2C%22GU%22%3A%22Guam%22%2C%22GT%22%3A%22Guatemala%22%2C%22GG%22%3A%22Guernsey%22%2C%22GN%22%3A%22Guinea%22%2C%22GW%22%3A%22Guinea-Bissau%22%2C%22GY%22%3A%22Guyana%22%2C%22HT%22%3A%22Haiti%22%2C%22HM%22%3A%22Heard%20Island%20and%20McDonald%20Islands%22%2C%22HN%22%3A%22Honduras%22%2C%22HK%22%3A%22Hong%20Kong%22%2C%22HU%22%3A%22Hungary%22%2C%22IS%22%3A%22Iceland%22%2C%22IN%22%3A%22India%22%2C%22ID%22%3A%22Indonesia%22%2C%22IR%22%3A%22Iran%22%2C%22IQ%22%3A%22Iraq%22%2C%22IE%22%3A%22Ireland%22%2C%22IM%22%3A%22Isle%20of%20Man%22%2C%22IL%22%3A%22Israel%22%2C%22IT%22%3A%22Italy%22%2C%22CI%22%3A%22Ivory%20Coast%22%2C%22JM%22%3A%22Jamaica%22%2C%22JP%22%3A%22Japan%22%2C%22JE%22%3A%22Jersey%22%2C%22JO%22%3A%22Jordan%22%2C%22KZ%22%3A%22Kazakhstan%22%2C%22KE%22%3A%22Kenya%22%2C%22KI%22%3A%22Kiribati%22%2C%22KW%22%3A%22Kuwait%22%2C%22KG%22%3A%22Kyrgyzstan%22%2C%22LA%22%3A%22Laos%22%2C%22LV%22%3A%22Latvia%22%2C%22LB%22%3A%22Lebanon%22%2C%22LS%22%3A%22Lesotho%22%2C%22LR%22%3A%22Liberia%22%2C%22LY%22%3A%22Libya%22%2C%22LI%22%3A%22Liechtenstein%22%2C%22LT%22%3A%22Lithuania%22%2C%22LU%22%3A%22Luxembourg%22%2C%22MO%22%3A%22Macao%22%2C%22MG%22%3A%22Madagascar%22%2C%22MW%22%3A%22Malawi%22%2C%22MY%22%3A%22Malaysia%22%2C%22MV%22%3A%22Maldives%22%2C%22ML%22%3A%22Mali%22%2C%22MT%22%3A%22Malta%22%2C%22MH%22%3A%22Marshall%20Islands%22%2C%22MQ%22%3A%22Martinique%22%2C%22MR%22%3A%22Mauritania%22%2C%22MU%22%3A%22Mauritius%22%2C%22YT%22%3A%22Mayotte%22%2C%22MX%22%3A%22Mexico%22%2C%22FM%22%3A%22Micronesia%22%2C%22MD%22%3A%22Moldova%22%2C%22MC%22%3A%22Monaco%22%2C%22MN%22%3A%22Mongolia%22%2C%22ME%22%3A%22Montenegro%22%2C%22MS%22%3A%22Montserrat%22%2C%22MA%22%3A%22Morocco%22%2C%22MZ%22%3A%22Mozambique%22%2C%22MM%22%3A%22Myanmar%22%2C%22NA%22%3A%22Namibia%22%2C%22NR%22%3A%22Nauru%22%2C%22NP%22%3A%22Nepal%22%2C%22NL%22%3A%22Netherlands%22%2C%22NC%22%3A%22New%20Caledonia%22%2C%22NZ%22%3A%22New%20Zealand%22%2C%22NI%22%3A%22Nicaragua%22%2C%22NE%22%3A%22Niger%22%2C%22NG%22%3A%22Nigeria%22%2C%22NU%22%3A%22Niue%22%2C%22NF%22%3A%22Norfolk%20Island%22%2C%22KP%22%3A%22North%20Korea%22%2C%22MK%22%3A%22North%20Macedonia%22%2C%22MP%22%3A%22Northern%20Mariana%20Islands%22%2C%22NO%22%3A%22Norway%22%2C%22OM%22%3A%22Oman%22%2C%22PK%22%3A%22Pakistan%22%2C%22PS%22%3A%22Palestinian%20Territory%22%2C%22PA%22%3A%22Panama%22%2C%22PG%22%3A%22Papua%20New%20Guinea%22%2C%22PY%22%3A%22Paraguay%22%2C%22PE%22%3A%22Peru%22%2C%22PH%22%3A%22Philippines%22%2C%22PN%22%3A%22Pitcairn%22%2C%22PL%22%3A%22Poland%22%2C%22PT%22%3A%22Portugal%22%2C%22PR%22%3A%22Puerto%20Rico%22%2C%22QA%22%3A%22Qatar%22%2C%22RE%22%3A%22Reunion%22%2C%22RO%22%3A%22Romania%22%2C%22RU%22%3A%22Russia%22%2C%22RW%22%3A%22Rwanda%22%2C%22ST%22%3A%22S%26atilde%3Bo%20Tom%26eacute%3B%20and%20Pr%26iacute%3Bncipe%22%2C%22BL%22%3A%22Saint%20Barth%26eacute%3Blemy%22%2C%22SH%22%3A%22Saint%20Helena%22%2C%22KN%22%3A%22Saint%20Kitts%20and%20Nevis%22%2C%22LC%22%3A%22Saint%20Lucia%22%2C%22SX%22%3A%22Saint%20Martin%20%28Dutch%20part%29%22%2C%22MF%22%3A%22Saint%20Martin%20%28French%20part%29%22%2C%22PM%22%3A%22Saint%20Pierre%20and%20Miquelon%22%2C%22VC%22%3A%22Saint%20Vincent%20and%20the%20Grenadines%22%2C%22WS%22%3A%22Samoa%22%2C%22SM%22%3A%22San%20Marino%22%2C%22SA%22%3A%22Saudi%20Arabia%22%2C%22SN%22%3A%22Senegal%22%2C%22RS%22%3A%22Serbia%22%2C%22SC%22%3A%22Seychelles%22%2C%22SL%22%3A%22Sierra%20Leone%22%2C%22SG%22%3A%22Singapore%22%2C%22SK%22%3A%22Slovakia%22%2C%22SI%22%3A%22Slovenia%22%2C%22SB%22%3A%22Solomon%20Islands%22%2C%22SO%22%3A%22Somalia%22%2C%22ZA%22%3A%22South%20Africa%22%2C%22GS%22%3A%22South%20Georgia%5C%2FSandwich%20Islands%22%2C%22KR%22%3A%22South%20Korea%22%2C%22SS%22%3A%22South%20Sudan%22%2C%22ES%22%3A%22Spain%22%2C%22LK%22%3A%22Sri%20Lanka%22%2C%22SD%22%3A%22Sudan%22%2C%22SR%22%3A%22Suriname%22%2C%22SJ%22%3A%22Svalbard%20and%20Jan%20Mayen%22%2C%22SE%22%3A%22Sweden%22%2C%22CH%22%3A%22Switzerland%22%2C%22SY%22%3A%22Syria%22%2C%22TW%22%3A%22Taiwan%22%2C%22TJ%22%3A%22Tajikistan%22%2C%22TZ%22%3A%22Tanzania%22%2C%22TH%22%3A%22Thailand%22%2C%22TL%22%3A%22Timor-Leste%22%2C%22TG%22%3A%22Togo%22%2C%22TK%22%3A%22Tokelau%22%2C%22TO%22%3A%22Tonga%22%2C%22TT%22%3A%22Trinidad%20and%20Tobago%22%2C%22TN%22%3A%22Tunisia%22%2C%22TR%22%3A%22Turkey%22%2C%22TM%22%3A%22Turkmenistan%22%2C%22TC%22%3A%22Turks%20and%20Caicos%20Islands%22%2C%22TV%22%3A%22Tuvalu%22%2C%22UG%22%3A%22Uganda%22%2C%22UA%22%3A%22Ukraine%22%2C%22AE%22%3A%22United%20Arab%20Emirates%22%2C%22GB%22%3A%22United%20Kingdom%20%28UK%29%22%2C%22US%22%3A%22United%20States%20%28US%29%22%2C%22UM%22%3A%22United%20States%20%28US%29%20Minor%20Outlying%20Islands%22%2C%22UY%22%3A%22Uruguay%22%2C%22UZ%22%3A%22Uzbekistan%22%2C%22VU%22%3A%22Vanuatu%22%2C%22VA%22%3A%22Vatican%22%2C%22VE%22%3A%22Venezuela%22%2C%22VN%22%3A%22Vietnam%22%2C%22VG%22%3A%22Virgin%20Islands%20%28British%29%22%2C%22VI%22%3A%22Virgin%20Islands%20%28US%29%22%2C%22WF%22%3A%22Wallis%20and%20Futuna%22%2C%22EH%22%3A%22Western%20Sahara%22%2C%22YE%22%3A%22Yemen%22%2C%22ZM%22%3A%22Zambia%22%2C%22ZW%22%3A%22Zimbabwe%22%7D%2C%22currency%22%3A%7B%22code%22%3A%22GBP%22%2C%22precision%22%3A2%2C%22symbol%22%3A%22%5Cu00a3%22%2C%22symbolPosition%22%3A%22left%22%2C%22decimalSeparator%22%3A%22.%22%2C%22thousandSeparator%22%3A%22%2C%22%2C%22priceFormat%22%3A%22%251%24s%252%24s%22%7D%2C%22currentUserId%22%3A0%2C%22currentUserIsAdmin%22%3Afalse%2C%22dateFormat%22%3A%22F%20j%2C%20Y%22%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2F%22%2C%22locale%22%3A%7B%22siteLocale%22%3A%22en_US%22%2C%22userLocale%22%3A%22en_US%22%2C%22weekdaysShort%22%3A%5B%22Sun%22%2C%22Mon%22%2C%22Tue%22%2C%22Wed%22%2C%22Thu%22%2C%22Fri%22%2C%22Sat%22%5D%7D%2C%22dashboardUrl%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fmy-account%5C%2F%22%2C%22orderStatuses%22%3A%7B%22pending%22%3A%22Pending%20payment%22%2C%22processing%22%3A%22Processing%22%2C%22on-hold%22%3A%22On%20hold%22%2C%22completed%22%3A%22Completed%22%2C%22cancelled%22%3A%22Cancelled%22%2C%22refunded%22%3A%22Refunded%22%2C%22failed%22%3A%22Failed%22%2C%22checkout-draft%22%3A%22Draft%22%7D%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder.png%22%2C%22productsSettings%22%3A%7B%22cartRedirectAfterAdd%22%3Afalse%7D%2C%22siteTitle%22%3A%22Writing%22%2C%22storePages%22%3A%7B%22myaccount%22%3A%7B%22id%22%3A792%2C%22title%22%3A%22My%20account%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fmy-account%5C%2F%22%7D%2C%22shop%22%3A%7B%22id%22%3A789%2C%22title%22%3A%22Shop%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fshop%5C%2F%22%7D%2C%22cart%22%3A%7B%22id%22%3A790%2C%22title%22%3A%22Cart%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fcart%5C%2F%22%7D%2C%22checkout%22%3A%7B%22id%22%3A791%2C%22title%22%3A%22Checkout%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fcheckout%5C%2F%22%7D%2C%22privacy%22%3A%7B%22id%22%3A0%2C%22title%22%3A%22%22%2C%22permalink%22%3Afalse%7D%2C%22terms%22%3A%7B%22id%22%3A0%2C%22title%22%3A%22%22%2C%22permalink%22%3Afalse%7D%7D%2C%22wcAssetUrl%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fwp-content%5C%2Fplugins%5C%2Fwoocommerce%5C%2Fassets%5C%2F%22%2C%22wcVersion%22%3A%228.5.2%22%2C%22wpLoginUrl%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fwp-login.php%22%2C%22wpVersion%22%3A%226.4.5%22%2C%22collectableMethodIds%22%3A%5B%22pickup_location%22%5D%2C%22admin%22%3A%7B%22wccomHelper%22%3A%7B%22isConnected%22%3Afalse%2C%22connectURL%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%5C%2Fwp-admin%5C%2Fadmin.php%3Fpage%3Dwc-addons%26section%3Dhelper%26wc-helper-connect%3D1%26wc-helper-nonce%3D74ba2ec414%22%2C%22userEmail%22%3A%22%22%2C%22userAvatar%22%3A%22https%3A%5C%2F%5C%2Fsecure.gravatar.com%5C%2Favatar%5C%2F%3Fs%3D48%26d%3Dmm%26r%3Dg%22%2C%22storeCountry%22%3A%22US%22%2C%22inAppPurchaseURLParams%22%3A%7B%22wccom-site%22%3A%22https%3A%5C%2F%5C%2Fwriting.sushmagoswami.com%22%2C%22wccom-back%22%3A%22%252Fcontact-us%252F%22%2C%22wccom-woo-version%22%3A%228.5.2%22%2C%22wccom-connect-nonce%22%3A%2274ba2ec414%22%7D%7D%2C%22_feature_nonce%22%3A%221a7284f198%22%2C%22alertCount%22%3A%220%22%2C%22visibleTaskListIds%22%3A%5B%22extended%22%5D%7D%7D'
    ));
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-settings.js?ver=07c2f0675ddd247d2325"
        id="wc-settings-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/data-controls.min.js?ver=fe4ccc8a1782ea8e2cb1"
        id="wp-data-controls-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/html-entities.min.js?ver=36a4a255da7dd2e1bf8e"
        id="wp-html-entities-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/notices.min.js?ver=38e88f4b627cf873edd0"
        id="wp-notices-js"></script>
    <script id="wc-blocks-middleware-js-before">
    var wcBlocksMiddlewareConfig = {
        storeApiNonce: '75bdd49868',
        wcStoreApiNonceTimestamp: '1731833447'
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-middleware.js?ver=ca04183222edaf8a26be"
        id="wc-blocks-middleware-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-data.js?ver=c96aba0171b12e03b8a6"
        id="wc-blocks-data-store-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca"
        id="wp-dom-ready-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/a11y.min.js?ver=7032343a947cfccf5608"
        id="wp-a11y-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/primitives.min.js?ver=6984e6eb5d6157c4fe44"
        id="wp-primitives-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/dist/warning.min.js?ver=122829a085511691f14d"
        id="wp-warning-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/client/blocks/blocks-components.js?ver=b165bb2bd213326d7f31"
        id="wc-blocks-components-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/client/blocks/blocks-checkout.js?ver=9f469ef17beaf7c51576"
        id="wc-blocks-checkout-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution-blocks.min.js?ver=8.5.2"
        id="wc-order-attribution-blocks-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js">
    </script>
    <script id="oceanwp-main-js-extra">
    var oceanwpLocalize = {
        "nonce": "329ae01e61",
        "isRTL": "",
        "menuSearchStyle": "disabled",
        "mobileMenuSearchStyle": "disabled",
        "sidrSource": null,
        "sidrDisplace": "1",
        "sidrSide": "left",
        "sidrDropdownTarget": "link",
        "verticalHeaderTarget": "link",
        "customScrollOffset": "0",
        "customSelects": ".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select",
        "wooCartStyle": "drop_down",
        "ajax_url": "https:\/\/writing.sushmagoswami.com\/wp-admin\/admin-ajax.php",
        "cart_url": "https:\/\/writing.sushmagoswami.com\/cart\/",
        "cart_redirect_after_add": "no",
        "view_cart": "View cart",
        "floating_bar": "on",
        "grouped_text": "View products",
        "multistep_checkout_error": "Some required fields are empty. Please fill the required fields to go to the next step.",
        "oe_mc_wpnonce": "9a261c28f1"
    };
    </script>
    <script src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/theme.min.js?ver=3.5.3"
        id="oceanwp-main-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/drop-down-mobile-menu.min.js?ver=3.5.3"
        id="oceanwp-drop-down-mobile-menu-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/vendors/magnific-popup.min.js?ver=3.5.3"
        id="ow-magnific-popup-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/ow-lightbox.min.js?ver=3.5.3"
        id="oceanwp-lightbox-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/vendors/flickity.pkgd.min.js?ver=3.5.3"
        id="ow-flickity-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/ow-slider.min.js?ver=3.5.3"
        id="oceanwp-slider-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/scroll-effect.min.js?ver=3.5.3"
        id="oceanwp-scroll-effect-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/scroll-top.min.js?ver=3.5.3"
        id="oceanwp-scroll-top-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/select.min.js?ver=3.5.3"
        id="oceanwp-select-js"></script>
    <script id="oceanwp-woocommerce-custom-features-js-extra">
    var oceanwpLocalize = {
        "nonce": "329ae01e61",
        "isRTL": "",
        "menuSearchStyle": "disabled",
        "mobileMenuSearchStyle": "disabled",
        "sidrSource": null,
        "sidrDisplace": "1",
        "sidrSide": "left",
        "sidrDropdownTarget": "link",
        "verticalHeaderTarget": "link",
        "customScrollOffset": "0",
        "customSelects": ".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select",
        "wooCartStyle": "drop_down",
        "ajax_url": "https:\/\/writing.sushmagoswami.com\/wp-admin\/admin-ajax.php",
        "cart_url": "https:\/\/writing.sushmagoswami.com\/cart\/",
        "cart_redirect_after_add": "no",
        "view_cart": "View cart",
        "floating_bar": "on",
        "grouped_text": "View products",
        "multistep_checkout_error": "Some required fields are empty. Please fill the required fields to go to the next step.",
        "oe_mc_wpnonce": "9a261c28f1"
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/wp-plugins/woocommerce/woo-custom-features.min.js?ver=3.5.3"
        id="oceanwp-woocommerce-custom-features-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/wp-plugins/woocommerce/woo-quick-view.min.js?ver=3.5.3"
        id="oceanwp-woo-quick-view-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/themes/oceanwp/assets/js/wp-plugins/woocommerce/woo-mini-cart.min.js?ver=3.5.3"
        id="oceanwp-woo-mini-cart-js"></script>
    <script id="eael-general-js-extra">
    var localize = {
        "ajaxurl": "https:\/\/writing.sushmagoswami.com\/wp-admin\/admin-ajax.php",
        "nonce": "85276bd871",
        "i18n": {
            "added": "Added ",
            "compare": "Compare",
            "loading": "Loading..."
        },
        "eael_translate_text": {
            "required_text": "is a required field",
            "invalid_text": "Invalid",
            "billing_text": "Billing",
            "shipping_text": "Shipping",
            "fg_mfp_counter_text": "of"
        },
        "page_permalink": "https:\/\/writing.sushmagoswami.com\/contact-us\/",
        "cart_redirectition": "no",
        "cart_page_url": "https:\/\/writing.sushmagoswami.com\/cart\/",
        "el_breakpoints": {
            "mobile": {
                "label": "Mobile Portrait",
                "value": 767,
                "default_value": 767,
                "direction": "max",
                "is_enabled": true
            },
            "mobile_extra": {
                "label": "Mobile Landscape",
                "value": 880,
                "default_value": 880,
                "direction": "max",
                "is_enabled": false
            },
            "tablet": {
                "label": "Tablet Portrait",
                "value": 1024,
                "default_value": 1024,
                "direction": "max",
                "is_enabled": true
            },
            "tablet_extra": {
                "label": "Tablet Landscape",
                "value": 1200,
                "default_value": 1200,
                "direction": "max",
                "is_enabled": false
            },
            "laptop": {
                "label": "Laptop",
                "value": 1366,
                "default_value": 1366,
                "direction": "max",
                "is_enabled": false
            },
            "widescreen": {
                "label": "Widescreen",
                "value": 2400,
                "default_value": 2400,
                "direction": "min",
                "is_enabled": false
            }
        }
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js?ver=5.9.7"
        id="eael-general-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.19.0"
        id="elementor-webpack-runtime-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.19.0"
        id="elementor-frontend-modules-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
        id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.19.0",
        "is_static": false,
        "experimentalFeatures": {
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "e_font_icon_svg": true,
            "additional_custom_breakpoints": true,
            "container": true,
            "e_swiper_latest": true,
            "block_editor_assets_optimize": true,
            "ai-layout": true,
            "landing-pages": true,
            "e_image_loading_optimization": true,
            "e_global_styleguide": true
        },
        "urls": {
            "assets": "https:\/\/writing.sushmagoswami.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 14,
            "title": "Contact%20Us%20%E2%80%93%20Writing",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script src="https://writing.sushmagoswami.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.19.0"
        id="elementor-frontend-js"></script>
    <script id="wpforms-elementor-js-extra">
    var wpformsElementorVars = {
        "captcha_provider": "recaptcha",
        "recaptcha_type": "v2"
    };
    </script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.6.3"
        id="wpforms-elementor-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/wpforms-lite/assets/lib/jquery.validate.min.js?ver=1.19.5"
        id="wpforms-validation-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/wpforms-lite/assets/lib/mailcheck.min.js?ver=1.1.2"
        id="wpforms-mailcheck-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-content/plugins/wpforms-lite/assets/lib/punycode.min.js?ver=1.0.0"
        id="wpforms-punycode-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-content/plugins/wpforms-lite/assets/js/utils.min.js?ver=1.8.6.3"
        id="wpforms-generic-utils-js"></script>
    <script src="https://writing.sushmagoswami.com/wp-content/plugins/wpforms-lite/assets/js/wpforms.min.js?ver=1.8.6.3"
        id="wpforms-js"></script>
    <script
        src="https://writing.sushmagoswami.com/wp-content/plugins/wpforms-lite/assets/js/wpforms-modern.min.js?ver=1.8.6.3"
        id="wpforms-modern-js"></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var wpforms_settings = {
        "val_required": "This field is required.",
        "val_email": "Please enter a valid email address.",
        "val_email_suggestion": "Did you mean {suggestion}?",
        "val_email_suggestion_title": "Click to accept this suggestion.",
        "val_email_restricted": "This email address is not allowed.",
        "val_number": "Please enter a valid number.",
        "val_number_positive": "Please enter a valid positive number.",
        "val_minimum_price": "Amount entered is less than the required minimum.",
        "val_confirm": "Field values do not match.",
        "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
        "val_limit_characters": "{count} of {limit} max characters.",
        "val_limit_words": "{count} of {limit} max words.",
        "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
        "val_turnstile_fail_msg": "Cloudflare Turnstile verification failed, please try again later.",
        "val_inputmask_incomplete": "Please fill out the field in required format.",
        "uuid_cookie": "",
        "locale": "en",
        "wpforms_plugin_url": "https:\/\/writing.sushmagoswami.com\/wp-content\/plugins\/wpforms-lite\/",
        "gdpr": "",
        "ajaxurl": "https:\/\/writing.sushmagoswami.com\/wp-admin\/admin-ajax.php",
        "mailcheck_enabled": "1",
        "mailcheck_domains": [],
        "mailcheck_toplevel_domains": ["dev"],
        "is_ssl": "1",
        "page_title": "Contact Us",
        "page_id": "14",
        "currency_code": "USD",
        "currency_thousands": ",",
        "currency_decimals": "2",
        "currency_decimal": ".",
        "currency_symbol": "$",
        "currency_symbol_pos": "left",
        "val_requiredpayment": "Payment is required.",
        "val_creditcard": "Please enter a valid credit card number.",
        "css_vars": ["field-border-radius", "field-background-color", "field-border-color", "field-text-color",
            "label-color", "label-sublabel-color", "label-error-color", "button-border-radius",
            "button-background-color", "button-text-color", "field-size-input-height",
            "field-size-input-spacing", "field-size-font-size", "field-size-line-height",
            "field-size-padding-h", "field-size-checkbox-size", "field-size-sublabel-spacing",
            "field-size-icon-size", "label-size-font-size", "label-size-line-height",
            "label-size-sublabel-font-size", "label-size-sublabel-line-height", "button-size-font-size",
            "button-size-height", "button-size-padding-h", "button-size-margin-top"
        ],
        "isModernMarkupEnabled": "1",
        "formErrorMessagePrefix": "Form error message",
        "errorMessagePrefix": "Error message",
        "submitBtnDisabled": "Submit button is disabled during form submission."
    }
    /* ]]> */
    </script>
</body>

</html>