<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie"lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9"  class="ie"lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie"lang="en-US">
<![endif]-->
<!--[if !IE]>
<html lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title>Celestino | only for creative minds.</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />

    <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tipsy-css'  href='css/tipsy.css' type='text/css' media='all' />

    <link rel='stylesheet' id='fonts-css'  href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />

    <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexi-slider-css'  href='css/contact_form.css' type='text/css' media='all' />


    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />

    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
</head>
<!-- END HEAD -->

<!-- START BODY -->
<body class="home page no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

<!-- START WRAPPER -->
<div id="wrapper" class="container group">
<!-- START TOP BAR -->

<!-- START TOP BAR -->
<div id="topbar">
    <div class="container">
        <div class="row">
            <div id="last-tweets-3" class="widget-first span6 widget last-tweets">
                <h3>Last Tweets</h3>
                <div class="list-tweets-3"></div>

                <script type="text/javascript">
                    jQuery(function($){
                        $('#last-tweets-3 .list-tweets-3').tweetable({
                            listClass: 'tweets-widget-3',
                            username: 'YIW',
                            time: false,
                            limit: 3,
                            replies: false
                        });
                    });
                </script>

            </div>

            <div id="text-8" class=" widget-last span6 widget widget_text">
                <div class="textwidget">
                    <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

                    <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                    <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                    <a href="#" class="socials-small google-small" title="Google"  >google</a>

                    <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                    <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a></div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function($){
        var twitterSlider = function(){
            $('#topbar .last-tweets ul').addClass('slides');
            $('#topbar .last-tweets').flexslider({
                animation: "fade",
                slideshowSpeed: 5 * 1000,
                animationDuration: 700,
                directionNav: false,
                controlNav: false,
                keyboardNav: false
            });
        };
        $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
            twitterSlider();
        });
    });
</script>

<!-- END TOP BAR -->

<!-- START HEADER -->
<div id="header" class="group">
    <div class="group container">
        <div class="row">
            <div class="span12">

                <div class="row">
                    <!-- START LOGO -->
                    <div id="logo" class="span4 group">
                        <a id="logo-img" href="index.html" title="celestino">
                            <img src="images/celestino1.png" title="celestino" alt="celestino" />
                        </a>

                        <p id="tagline">only for creative minds.</p>
                    </div>
                    <!-- END LOGO -->
                    <div id="menu" class="span8 group">
                        <!-- START MAIN NAVIGATION -->
                        <div class="menu">
                            <ul id="nav" class="sf-menu">
                                <li class="nav-icon-hi">
                                    <a href="index.html">
                                        Home
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-icon-open-small">
                                            <a href="home-ii.html">
                                                Home Version II
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-folder-small">
                                            <a href="home-iii.html">
                                                Home Version III
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-target-small">
                                            <a href="home-iv.html">
                                                Home Version IV
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-design-small">
                                            <a href="home-v.html">
                                                Home Version V
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-cert-small">
                                            <a href="home-vi.html">
                                                Home Version VI (Grid slider)
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-book-small">
                                            <a href="home-vii.html">
                                                Home Version VII
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-cake-small">
                                            <a href="home-viii.html">
                                                Home Version VIII
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-bulb-small ">
                                            <a href="home-ix.html">
                                                Home version IX (Blog)
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-monitor">
                                    <a href="#">
                                        Sliders
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="revolution-slider.html">
                                                Revolution Slider
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="images-grid.html">Images Grid
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sliders-thumbnails.html">Thumbnails
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elastic.html">
                                                Elastic
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="slider-flexslider-classic.html">
                                                Flexslider Classic
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="flexslider-elegant.html">
                                                Flexslider Elegant
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cycle.html">
                                                Cycle
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="slider-flash.html">
                                                Slider Flash
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-doc">
                                    <a href="#">
                                        Pages
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-icon-team-small ">
                                            <a href="pages-about.html">
                                                About
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-bubble-small ">
                                            <a href="pages-testimonials.html">
                                                Testimonials
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-contact-small ">
                                            <a href="pages-contact.html">
                                                Contact
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-bomb-small">
                                            <a href="error-404.html">
                                                Error 404
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-works">
                                    <a href="#">
                                        Portfolio
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="portfolio-pinterest-style.html">
                                                Portfolio Pinterest Style
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-detail.html">
                                                Portfolio Slide Detail
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-filterable.html">
                                                Portfolio Filterable
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-2-columns.html">
                                                Portfolio 2 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-3-columns.html">
                                                Portfolio 3 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-4-columns.html">
                                                Portfolio 4 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-big-image.html">
                                                Portfolio Big Image
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-slider.html">
                                                Portfolio Slider
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-full-description.html">
                                                Portfolio Full Description
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-newspaper">
                                    <a href="#">
                                        Blog
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-big-image.html">
                                                Big image
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-small-image.html">
                                                Small image
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-elegant.html">
                                                Elegant
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-blog-pinterest-style.html">
                                                Pinterest Style
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-icon-lab">
                                    <a href="#">
                                        Shortcodes
                                        <div style="position:absolute; left: 50%;">
                                            <span class="triangle">&nbsp;</span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="sc-typography.html">
                                                Typography
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-icon-section.html">
                                                Icon section
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-alert-box-buttons.html">
                                                Alert box &#038; Buttons
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-table-box-prices.html">
                                                Table &#038; Box prices
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-media-widgets.html">
                                                Media &#038; Widgets
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-mix-various.html">
                                                Mix &#038; Various
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="border-header"></div>
</div>
<!-- END HEADER -->

<!-- START MAP -->
<div id="map">
    <iframe
        style="width:100%;height:335px;"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
        src="https://maps.google.it/maps?ll=41.506705,15.326647&spn=0.00687,0.016512&sll=41.506700,15.326680&amp;output=embed">
    </iframe>

    <div id="map-handler" class="container"><a href="#">[x] Close</a></div>
</div>
<!-- END MAP -->

<!-- START PAGE META -->
<div id="page-meta" class="container">

    <!-- TITLE -->
    <div class="title">
        <h1>Contact</h1>
    </div>

    <!-- BREDCRUMB -->
    <div class="breadcrumbs">
        <p id="yit-breadcrumb" itemprop="breadcrumb">
            <a class="home" href="index.html">Home Page</a> &gt;
            <a class="no-link current" href="#">Contact</a>
        </p>
    </div>
</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-page" class="span9 content group">
                <div class="page type-page status-publish hentry group">
                    <h3>Contact me</h3>
                    <p>&nbsp;</p>
                    <form id="contact-form-contact-form" class="contact-form row" method="post" action="sendmail.php" enctype="multipart/form-data">

                        <div class="usermessagea"><p class="success">Email sent correctly!</p></div>
                        <fieldset>
                            <ul>
                                <li class="text-field span3">
                                    <label for="name-contact-form">
                                        <span class="mainlabel">Name</span>
                                    </label>
                                    <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-user"></i>
                                        </span>
                                        <input type="text" name="yit_contact[name]" id="name-contact-form" class="required" value="" />

                                    </div>
                                    <div class="msg-error"></div>
                                    <div class="clear"></div>
                                </li>

                                <li class="text-field span3">
                                    <label for="email-contact-form">
                                        <span class="mainlabel">Email</span>
                                    </label>
                                    <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-envelope"></i>
                                        </span>
                                        <input type="text" name="yit_contact[email]" id="email-contact-form" class="required email-validate" value="" />
                                    </div>

                                    <div class="msg-error"></div>
                                    <div class="clear"></div>
                                </li>

                                <li class="text-field span3">
                                    <label for="phone-contact-form">
                                        <span class="mainlabel">Phone</span>
                                    </label>
                                    <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-phone"></i>
                                        </span>
                                        <input type="text" name="yit_contact[phone]" id="phone-contact-form" class="" value="" />
                                    </div>

                                    <div class="msg-error"></div>
                                    <div class="clear"></div>
                                </li>

                                <li class="textarea-field span9">
                                    <label for="message-contact-form">
                                        <span class="mainlabel">Message</span>
                                    </label>
                                    <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-pencil"></i>
                                        </span>
                                        <textarea name="yit_contact[message]" id="message-contact-form" rows="8" cols="30" class="required"></textarea>
                                    </div>
                                    <div class="msg-error"></div>
                                    <div class="clear"></div>
                                </li>

                                <li class="submit-button span9">
                                    <input type="text" name="yit_bot" id="yit_bot" />
                                    <input type="hidden" name="yit_action" value="sendmail" id="yit_action" />
                                    <input type="hidden" name="yit_referer" value="pages-contact.html" />
                                    <input type="hidden" name="id_form" value="3" />
                                    <input type="submit" name="yit_sendemail" value="Send Message" class="sendmail alignright" />
                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </fieldset>
                    </form>

                    <script type="text/javascript">
                        var messages_form_3 = {
                            name: "Insert the name",
                            email: "Insert a valid email",
                            phone: "",
                            message: "Insert a message"
                        };
                    </script>

                </div>

                <!-- START COMMENTS -->
                <div id="comments"></div>
                <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->

            <!-- START SIDEBAR -->
            <div id="sidebar-contact" class="span3 sidebar group">
                <div id="contact-info-2" class="widget-first widget contact-info">
                    <h3>Contact info</h3>
                    <div class="sidebar-nav">
                        <ul>
                            <li>
                                <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Address:</span> Celestino, 115 Avenue - Italy
                            </li>

                            <li>
                                <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Phone:</span> +00 39 71717174
                            </li>

                            <li>
                                <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Fax:</span> +39 0035 356 765
                            </li>

                            <li>
                                <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Email:</span> pinkrio@yit.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="text-2" class="widget-2 widget-last widget widget_text">
                    <h3>I&#8217;m social</h3>
                    <div class="textwidget">Praesent ultricies iaculis erat iaculis feugiat. Sed suscipit tempor felis, sit amet aliquam nunc sollicitudin sed.
                        <br /><br />

                        <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

                        <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                        <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                        <a href="#" class="socials-small google-small" title="Google"  >google</a>

                        <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                        <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a></div>
                </div>
            </div>
            <!-- END SIDEBAR -->

            <!-- START EXTRA CONTENT -->
            <!-- END EXTRA CONTENT -->

        </div>
    </div>
</div>
<!-- END PRIMARY -->

<!-- START FOOTER -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div>
                <div class="widget-first widget span3 recent-posts">
                    <h3>From my blog</h3>
                    <div class="recent-post">
                        <div class="post type-post status-publish format-gallery hentry category-web-design group">

                            <div class="date">
                                <span class="month">Oct</span>
                                <span class="day">8</span>
                            </div>

                            <div class="text">
                                <h3>
                                    <a href="blog-detail.html" title="This is the title of the first article. Enjoy it.">
                                        This is the title of the first article. Enjoy it.
                                    </a>
                                </h3>
                                <p>by
                                    <a href="author-celestino.html" title="Posts by celestino" rel="author">
                                        celestino
                                    </a> -

                                    <a href="blog-detail.html#respond" title="Comment on This is the title of the first article. Enjoy it.">
                                        0 comments
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="post type-post status-publish format-standard hentry category-elegant-vintage group">

                            <div class="date">
                                <span class="month">Sep</span>
                                <span class="day">12</span>
                            </div>

                            <div class="text">
                                <h3>
                                    <a href="#" title="Nice &amp; Clean. The best for your blog!">
                                        Nice &amp; Clean. The best for your blog!
                                    </a>
                                </h3>

                                <p>by
                                    <a href="#" title="Posts by celestino" rel="author">
                                        celestino
                                    </a> -
                                    <a href="#" title="Comment on Nice &amp; Clean. The best for your blog!">
                                        0 comments
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget span3 widget_flickrRSS">
                    <h3>My Flickr</h3>

                    <a title="1P4B6832" href="http://www.flickr.com/photos/gordonkw41/8756237357/"><img alt="1P4B6832" src="http://farm9.staticflickr.com/8553/8756237357_32d559d451_s.jpg"></a>
                    <a title="DSC03253" href="http://www.flickr.com/photos/dovz/8756237387/"><img alt="DSC03253" src="http://farm8.staticflickr.com/7422/8756237387_1c3013358d_s.jpg"></a>
                    <a title="Tappas in Hondarribia" href="http://www.flickr.com/photos/francolupo/8756237389/"><img alt="Tappas in Hondarribia" src="http://farm3.staticflickr.com/2867/8756237389_faae5159f8_s.jpg"></a>
                    <a title="P1000624" href="http://www.flickr.com/photos/24690780@N02/8756237421/"><img alt="P1000624" src="http://farm9.staticflickr.com/8393/8756237421_43de542797_s.jpg"></a>
                    <a title="" href="http://www.flickr.com/photos/chioushibo/8756237483/"><img alt="" src="http://farm6.staticflickr.com/5454/8756237483_9a8805a3d4_s.jpg"></a>
                    <a title="P1010059" href="http://www.flickr.com/photos/uzagaku/8756237507/"><img alt="P1010059" src="http://farm4.staticflickr.com/3777/8756237507_e6e45db22a_s.jpg"></a>
                    <a title="Berlijn 2013" href="http://www.flickr.com/photos/carlawiddershoven/8756237559/"><img alt="Berlijn 2013" src="http://farm3.staticflickr.com/2809/8756237559_16964e44ea_s.jpg"></a>
                    <a title="20130518-_DSC9574" href="http://www.flickr.com/photos/fomalhaut/8757363666/"><img alt="20130518-_DSC9574" src="http://farm3.staticflickr.com/2857/8757363666_cce1ef7ea5_s.jpg"></a>
                    <a title="20130519_144623.jpg" href="http://www.flickr.com/photos/lewisdgriffin/8757363718/"><img alt="20130519_144623.jpg" src="http://farm4.staticflickr.com/3817/8757363718_64d870995a_s.jpg"></a>
                    <a title="baden-württenmberg und bayern 2013 1 284" href="http://www.flickr.com/photos/russianchild007/8757363726/"><img alt="baden-württenmberg und bayern 2013 1 284" src="http://farm4.staticflickr.com/3773/8757363726_e7c9ed61a7_s.jpg"></a>
                </div>
                <div  class="widget span3 contact-info">
                    <h3>Get in touch</h3>
                    <div class="sidebar-nav">
                        <ul>
                            <li>
                                <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Address:</span> Celestino, 115 Avenue - Italy
                            </li>
                            <li>
                                <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Mobile:</span> +39 3471717174
                            </li>
                            <li>
                                <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Fax:</span> +39 0035 356 765
                            </li>
                            <li>
                                <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Email:</span> celestino@yit.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="last-tweets-2" class=" widget span3 last-tweets">
                    <h3>Last Tweets</h3>
                    <div class="list-tweets-2">

                    </div>

                    <script type="text/javascript">
                        jQuery(function($){
                            $('#last-tweets-2 .list-tweets-2').tweetable({
                                listClass: 'tweets-widget-2',
                                username: 'envato',
                                time: true,
                                limit: 2,
                                replies: true
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- START COPYRIGHT -->
<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="left span6">
                <a href="http://yithemes.com/?ddownload=60426&amp;ap_id=celestino-html"><strong>Download the free version for Wordpress</strong></a>
            </div>
            <div class="right span6">
                <p>Powered by
                    <a href="http://yithemes.com/" title="free themes wordpress">
                        <strong>Your Inspiration Themes</strong>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END COPYRIGHT -->

</div>
<!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->


<!-- START CUSTOM SCRIPT -->
<script type='text/javascript'>
var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};
</script>
<!-- END CUSTOM SCRIPT -->

<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.tweetable.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='portfolios/filterable/js/jquery.filterable.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>