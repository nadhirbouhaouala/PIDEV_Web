<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Publication/Front/css/style.css */
class __TwigTemplate_6a7383b4865aae2fc4d7cf04605583157597e56933c3f68c5d162d263cd8d731 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/css/style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/css/style.css"));

        // line 1
        echo "@charset \"UTF-8\";

/*
* Author: Vasterad
* URL: http://purethemes.net
*/

/* -------------------------------------------------------------- */
/* Table of Contents
-----------------------------------------------------------------

01. Import Section ----------------------------------------------

02. Layout Components -------------------------------------------
  # Forms Reset & Styles
  # Header
  # Header Notifications
  # User Menu
  # Navigation
  # Mega Menu
  # Sticky Header
  # Transparent Header
  # mmenu.js - mobile menu
  # Footer
  # Pagination
  # Sidebar Styles
  # Notify Box
  # Titlebar
  # Single Page Header
  # Blog Post
  # Contact Page

03. Listings Styles ---------------------------------------------
  # Full Width Page Layout
  # Job Listing - List Layout
  # Job Listing - Compact List Layout
  # Job Listing - Grid Layout
  # Tasks - List Layout
  # Tasks - Grid Layout
  # Freelancers - Grid Layout
  # Freelancers - List Layout
  # Browse Companies

04. User Interface Elements -------------------------------------
  # Buttons
  # Button with Sliding Icon
  # List Styles
  # Marks
  # Notification Boxes
  # Tables
  # Accordion
  # Tabs
  # Copy to clipboard
  # Share Buttons
  # Verified Badge
  # Star Rating
  # Leave Rating Stars
  # Ripple Effect
  # Input With Icon
  # Keywords Input
  # Clickable Tags
  # On/Off Switch
  # Radio Button
  # Checkbox
  # Custom Upload Button
  # Intro Banner
  # Category Boxes
  # Photo Box
  # Pricing Plans
  # Checkout Page
  # Icon Boxes
  # Testimonials
  # Text Banner
  # Counters
  # Countdown
  # Bidding Widget

05. Scripts Styles ----------------------------------------------
  # Slick Slider
  # Simlpebar.js (custom scrollbar)
  # Tippy.js Tooltips
  # Magnific Popup
  # Popup tabs
  # Boostrap Slider
  # Bootstrap-select
  # Snackbar
  # Google Autocomplete
  # Google Maps

06. Single Pages ------------------------------------------------
  # Single Job Page
  # Single Freelancer Profile

07. Dashboard ---------------------------------------------------
  # Dashboard Navigation
  # Dashboard Elements
  # Dashboard Messages

08. Others ------------------------------------------------------
  # Common Styles
  # Icons Cheatsheet Styles
  # Offsets

*/ 

/* -------------------------------------------------------------- */
/* 01. Import Section
----------------------------------------------------------------- */
@import url('bootstrap-grid.css');                     /* Default Reset, Responsive Grid*/
@import url('icons.css');                              /* Default Reset, Responsive Grid*/
@import url('https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&subset=latin-ext');


/* -------------------------------------------------------------- */
/*  02. Layout Components
----------------------------------------------------------------- */

/* ---------------------------------- */
/* Forms Reset & Styles
------------------------------------- */
input,
input[type=\"text\"],
input[type=\"password\"],
input[type=\"email\"],
input[type=\"number\"],
textarea,
select {
\theight: 48px;
\tline-height: 48px;
\tpadding: 0 20px;
\toutline: none;
\tfont-size: 16px;
\tcolor: #808080;
\tmargin: 0 0 16px 0;
\tmax-width: 100%;
\twidth: 100%;
\tbox-sizing: border-box;
\tdisplay: block;
\tbackground-color: #fff;
\tfont-weight: 500;
\topacity: 1;
\tborder-radius: 4px;
\tborder: none;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

select {
\tpadding: 15px 18px;
\tcursor: pointer;
}

input {
\t-webkit-transition: all 0.1s ease-in-out;
\t-moz-transition: all 0.1s ease-in-out;
\t-o-transition: all 0.1s ease-in-out;
\t-ms-transition: all 0.1s ease-in-out;
\ttransition: all 0.1s ease-in-out;
}

input:focus,
input[type=\"text\"]:focus,
input[type=\"password\"]:focus,
input[type=\"email\"]:focus,
input[type=\"number\"]:focus,
textarea:focus {
\tcolor: #808080;
\ttransition: box-shadow 0.2s !important;
\topacity: 1;
\tborder: none;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

input:-webkit-autofill:focus,
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px #fff inset !important;
    -webkit-text-fill-color: #808080 !important;
}

/* With Border */
input.with-border,
input[type=\"text\"].with-border,
input[type=\"password\"].with-border,
input[type=\"email\"].with-border,
input[type=\"number\"].with-border,
textarea.with-border,
select.with-border {
\tborder: 1px solid #e0e0e0;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
}
input.with-border:focus,
input[type=\"text\"].with-border:focus,
input[type=\"password\"].with-border:focus,
input[type=\"email\"].with-border:focus,
input[type=\"number\"].with-border:focus,
textarea.with-border:focus {
\tborder: 1px solid #e0e0e0;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.08);
}

input[type=\"submit\"] {
\tborder: none;
\tpadding: 11px 18px;
\twidth: auto;
}

input[type=\"checkbox\"] { display: inline; }

input[type=\"radio\"] {
\twidth: 15px;
\theight: 15px;
\tcursor: pointer;
\tbox-shadow: none;
}


/* Input Placeholder Color */
::placeholder {
\tcolor: #808080;
\topacity: 1;
}

textarea {
\theight: auto;
\tline-height: 27px;
\tpadding: 20px;
\tmin-height: 130px;
\ttransition: none !important;
\tmin-width: 100%;
}

label,
legend {
\tdisplay: block;
\tfont-weight: bold;
\tfont-size: 16px;
\tfont-weight: normal;
\tmargin-bottom: 8px;
}


label span,
legend span {
\tfont-weight: normal;
\tfont-size: 14px;
\tcolor: #444;
}

fieldset {
\tpadding: 0;
\tborder: none;
}

button {
\tborder: none;
\tmargin: 0;
\tpadding: 0;
\twidth: auto;
\toverflow: visible;
\tbackground: transparent;
\tcolor: inherit;
\tfont: inherit;
\tline-height: normal;
\tcursor: pointer;
}

a { color: #66676b; transition: 0.3s; }
a, button { outline: none !important; }
a:focus,
a:hover { text-decoration: none; color: #333;}
img { max-width: 100%; }


/* ---------------------------------- */
/* Header
------------------------------------- */
#logo { 
\tdisplay: inline-block;
\tborder-right: 1px solid #e0e0e0;
\theight: 100%;
\tvertical-align: top;
\tpadding-right: 35px;
\tmargin-right: 20px;
}

#logo img {
\theight: 42px;
\twidth: auto;
\ttop: 50%;
\tposition: relative;
\ttransform: translate3d(0,-50%,0);
}

#header {
\tposition: relative;
\tz-index: 999;
\tpadding: 0;
\tbox-shadow: 0 0 18px 0 rgba(0, 0, 0, 0.12);
\tfont-size: 16px;
\theight: 82px;
\tbackground-color: #fff;
}

#header .container,
#header .right-side,
#header .left-side { height: 100%; }

/* Full Width Header */
header.fullwidth .container {
  max-width: 100%;
  margin: 0;
  padding: 0 35px;
}

/* Boxed Styles*/
#header .container { position: relative; }

#header .left-side {
\tfloat: left;
\twidth: 100%;
\tdisplay: inline-block;
\tposition: relative;
\tflex: 1;
}

#header .right-side {
\tfloat: right;
\ttext-align: right;
\twidth: auto;
\tdisplay: inline-block;
\tposition: absolute;
\tright: 25px;
\tbackground-color: #fff;
\tflex: 1;
}

/* Full Width Styles */
.full-width #header .left-side {
\tfloat: left;
\twidth: 100%;
\tdisplay: inline-block;
\tposition: relative;
}

.full-width #header .right-side {
\tfloat: right;
\ttext-align: right;
\twidth: auto;
\tdisplay: inline-block;
\tposition: absolute;
\tright: 25px;
\tbackground-color: #fff;
}



/* Header Widget
------------------------------------- */
.header-widget {
\tdisplay: inline-block;
\theight: 100%;
\tborder-left: 1px solid #e0e0e0;
\tpadding: 0 30px;
\ttext-align: left;
\tfloat: left;
}

.fullwidth .header-widget:last-of-type {
\tpadding-right: 5px;
\tfloat: right;
\tborder-right: none;
}

.header-widget:last-of-type { padding-right: 0; margin-right: -5px; }
.fullwidth .header-widget:last-of-type { padding-right: 5px; margin-right: 0; }

/* Notification Avatar*/
.header-notifications-content .notification-avatar {
\theight: 42px;
\twidth: 42px;
\tmax-width: 42px;
\tdisplay: inline-block;
\tborder-radius: 50%;
\toverflow: hidden;
}

/* Sign In Button */
.header-widget .log-in-button {
\tpadding: 10px 0;
\tposition: relative;
\ttop: 50%;
\ttransform: translateY(-50%);
\ttransition: 0.3s;
\tcolor: #666;
\tdisplay: block;
\tmargin: 0 -3px;
}

.header-widget .log-in-button i {
\tfont-size: 18px;
\tline-height: 0;
\tposition: relative;
\ttop: 2px;
\tmargin-right: 4px;
\tmargin-left: -1px;
\tcolor: #777;
\ttransition: 0.3s;
}

.header-widget .log-in-button:hover,
.header-widget .log-in-button:hover i { color: #66676b; }

.transparent-header .header-widget .log-in-button,
.transparent-header .header-widget .log-in-button i { color: #fff; }

/* Sign In Button Media Queries */
@media (max-width: 768px) {
\t.header-widget .log-in-button span { display: none; }

\t.header-widget .log-in-button i {
\t\tfont-size: 20px;
\t\ttop: 3px;
\t}

\t.header-widget .log-in-button i,
\t.header-widget .log-in-button i:hover { color: #555; }

\t.header-widget .log-in-button {
\t\tbackground-color: #f0f0f0;
\t\tborder-radius: 4px;
\t    height: 46px;
\t    width: 46px;
\t    text-align: center;
\t}

\t.transparent-header .header-widget .log-in-button i,
\t.transparent-header .header-widget .log-in-button {
\t\tbackground-color: #fff;
\t\tcolor: #333;
\t}

}


/* ---------------------------------- */
/* Header Notifications
------------------------------------- */
.header-notifications {
\theight: 100%;
\tdisplay: inline-block;
\tpadding-right: 15px;
\tposition: relative;
}

.header-notifications:last-child { margin-right: -15px; }

.header-notifications-trigger,
.header-notifications-trigger a {
\tfont-size: 22px;
\tcolor: #333;
\tposition: relative;
\ttop: 55%;
\ttransform: translate3d(0,-50%,0);
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.header-notifications-trigger, 
\t.header-notifications-trigger a {
\t\theight: 40px;
\t}
\t.header-notifications.user-menu { top: -8px; } 
}
/* IE 11 Fixes - End */

.header-notifications-trigger span {
\tposition: absolute;
\tdisplay: inline-block;
\ttop: -15px;
\tmargin-left: -10px;
\tfont-weight: 700;
\theight: 19px;
\twidth: 19px;
\tline-height: 19px;
\ttext-align: center;
\tcolor: #fff;
\tfont-size: 11px;
\tbackground-color: #66676b;
\tborder-radius: 50%;
\tposition: relative;
}


/* Header User Menu Dropdown */
.header-notifications-dropdown {
\twidth: 360px;
\tborder-radius: 4px;
/*\tbox-shadow: 0px 0 8px 0px rgba(0,0,0,0.10);*/
\tbox-shadow: 0px 2px 12px 0px rgba(0,0,0,0.12);
\tbackground-color: #fff;
\tpadding: 0;
\tposition: absolute;
\ttop: calc(100% - 10px);
\tright: -15px;
\ttext-align: left;
\tz-index: 100;
\ttransform: scale(0.95);
\topacity: 0;
\tvisibility: hidden;
\ttransition: 0.3s;
\tpointer-events: none;
}

.header-notifications.active .header-notifications-dropdown {
\ttransform: scale(1);
\topacity: 1;
\tvisibility: visible;
\tpointer-events: all;
}

.header-notifications-dropdown:before {
\tcontent: \"\";
\tposition: absolute;
\tright: 43px;
\ttop: -6px;
\twidth: 0; 
\theight: 0; 
\tborder-left: 6px solid transparent;
\tborder-right: 6px solid transparent;
\tborder-bottom: 6px solid #d7d7d7;
\t
\t/* Arrow with shadow */
/*\ttop: 0;
\tright: 33px;
    border: 5px solid black;
    border-color: transparent transparent #fff #fff;
    transform-origin: 0 0;
    transform: rotate(135deg);
    box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, 0.05);*/
}

/* Headline */
.header-notifications-headline {
\tpadding: 17px 25px;
\tpadding-top: 18px;
\tline-height: 24px;
\tborder-bottom: 1px solid #e6e6e6;
}

.header-notifications-headline h4,
.header-notifications-headline span {
\tdisplay: inline-block;
}

button.mark-as-read {
\tfloat: right;
\tposition: relative;
\tborder-radius: 4px;
\theight: 32px;
\twidth: 32px;
\ttext-align: center;
\tline-height: 36px;
\ttop: -4px;
\tright: -8px;
\tcolor: #888;
\ttransition: 0.25s;
}

button.mark-as-read:hover {
\tbackground-color: #f2f2f2;
\tcolor: #888;
}

/* Content */
.header-notifications-content {
\tdisplay: block;
\twidth: 100%;
}

.header-notifications-scroll {
\tdisplay: block;
\toverflow: hidden;
\theight: auto;
}

.header-notifications-content ul {
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
}

.header-notifications-content ul li {
\tborder-bottom: 1px solid #e6e6e6;
\ttransition: 0.25s;
}

.header-notifications-content ul li:hover { background-color: #fafafa; }
.header-notifications-content ul li:hover .notification-icon { background-color: #eee; }
.header-notifications-content ul li:last-child { border-bottom: none; }

.header-notifications-content ul li a {
\tcolor: #666;
\tposition: relative;
\tpadding: 22px 25px;
\tdisplay: block;
}

.header-notifications-content p { margin: 0; padding: 0; }

.header-notifications-content ul li a {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: center;
}

.header-notifications-content .notification-icon,
.header-notifications-content .notification-text {
\tflex: 1; 
}

/* Notification Icon */
.header-notifications-content .notification-icon i { position: relative; }

.notification-icon,
.header-notifications-content .notification-icon {
\tfont-size: 24px;
\theight: 40px;
\twidth: 40px;
\tmax-width: 40px;
\tdisplay: inline-block;
\tbackground-color: #f2f2f2;
\tborder-radius: 4px;
\tline-height: 42px;
\ttext-align: center;
\tcolor: #a0a0a0;
\ttransition: 0.25s;
\tposition: relative;
}

/* Adjustments for some icons :( */
.notification-icon .icon-material-outline-autorenew { font-size: 22px; }
.notification-icon .icon-material-outline-gavel { font-size: 19px; top: -2px; left: 1px; }


/* Notification Avatar*/
.header-notifications-content .notification-avatar {
\theight: 42px;
\twidth: 42px;
\tmax-width: 42px;
\tdisplay: inline-block;
\tborder-radius: 50%;
\toverflow: visible;
\talign-self: flex-start;
}

.header-notifications-content .notification-avatar img{
    width: 100%;
    image-rendering: -webkit-optimize-contrast;
    border-radius: 50%;
}


/* Notification Texts */
.notification-text,
.header-notifications-content .notification-text {
\tpadding-left: 20px;
\tpadding-right: 5px; 
\tdisplay: inline-block;
\tline-height: 23px;
\tfont-size: 14.7px
}

.header-notifications-content .notification-msg-text {
\tdisplay: inline-block;
\tline-height: 23px;
\tfont-size: 14.7px;
\tmargin: 4px 0;
}

.notification-text strong,
.header-notifications-content .notification-text strong {
\tfont-weight: 600;
\tcolor: #333;
}

.notification-text span.color,
.header-notifications-content .notification-text span.color {
\tcolor: #66676b;
\tdisplay: inline-block;
}

.notification-text span.color {
\tdisplay: block;
}


/* Button */
a.header-notifications-button {
\tborder-radius: 0 0 4px 4px;
\tfont-weight: 600;
\tcolor: #fff;
\tfont-size: 14.7px;
\tpadding: 12px 16px;
\tbackground-color: #66676b;
\twidth: 100%;
\tdisplay: block;
\ttext-align: center;
\ttransition: 0.3s;
}

a.header-notifications-button i {
\tfont-size: 22px;
\tline-height: 0;
\ttop: 4px;
\tposition: relative;
\tmax-width: 0;
\tdisplay: inline-block;
\tmargin-left: 7px
}


/* ---------------------------------- */
/* User Menu
------------------------------------- */
.user-menu {
\tpadding: 0;
}

.header-notifications.user-menu {
\tmargin: 0 -5px;
}

.user-menu .header-notifications-trigger,
.user-menu .header-notifications-trigger a { top: 50%; }

.user-menu .header-notifications-dropdown {
\ttop: calc(100% - 8px);
\twidth: 290px;
\tright: -10px;
}

.user-menu .header-notifications-dropdown:before { right: 23px; }

/* User Status Dot */
.notification-avatar { position: relative; }

.status-icon,
.notification-avatar:after,
.user-avatar:after {
\tposition: absolute;
\tcontent: \"\";
\theight: 12px;
\twidth: 12px;
\tbackground-color: #c0c0c0;
\tbottom: 0;
\tright: 0;
\tdisplay: block;
\tborder: 2px solid #fff;
\tbox-shadow: 0 2px 3px rgba(0,0,0,0.3);
\tborder-radius: 50%;
}

.notification-avatar:after { width: 11px; height: 11px; }

/* Online */
.status-icon.status-online,
.status-online:after { background-color: #38b653; }

/* Offline */
.status-icon.status-offline,
.status-offline:after { background-color: #c0c0c0; }

/* Avatar */
.user-avatar {
\tdisplay: inline-block;
\tborder-radius: 50%;
\twidth: 42px;
\theight: 42px;
\tposition: relative;
}

.user-avatar img {
\twidth: 100%;
\tdisplay: inline-block;
\tborder-radius: 50%;
\timage-rendering: -webkit-optimize-contrast;
}


/* User Menu Small Nav */
ul.user-menu-small-nav {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
\tpadding: 20px 25px;
}

ul.user-menu-small-nav li {
\tmargin: 0;
\tpadding: 0;
}

ul.user-menu-small-nav li a {
\tdisplay: block;
\tpadding: 2px 0;
\tfont-size: 16px;
\tcolor: #666;
\ttransition: 0.3s;
}

ul.user-menu-small-nav li a i {
\tfont-size: 16px;
\tposition: relative;
\ttop: 1px;
\tmargin-right: 2px;
\tcolor: #666;
\t-webkit-font-smoothing: antialiased;
\ttransition: 0.3s;
}


ul.user-menu-small-nav li a:hover,
ul.user-menu-small-nav li a:hover i { color: #66676b; }


/* User Status Section*/
.user-status {
\tpadding: 25px;
\tborder-bottom: 1px solid #e6e6e6;
}

/* User Menu - Details */
.user-details {
\tdisplay: flex;
}

.user-name {
\tfont-weight: 500;
\tcolor: #333;
\tline-height: 20px;
\tpadding: 2px 0 0 15px;
}

.user-details span {
\tdisplay: block;
\tfont-size: 14.7px;
\tcolor: #888;
\tfont-weight: 500;
}


/* User Status Switch */
.status-switch {
\tbackground-color: #eee;
\twidth: 100%;
\tdisplay: block;
\tborder-radius: 4px;
\theight: 36px;
\tpadding: 0;
\tposition: relative;
\tzoom: 1;
\tmargin-top: 20px;
}

.status-switch:before, 
.status-switch:after {
\tcontent: \" \";
\tdisplay: table;
}

.status-switch label {
\tfloat: left;
\twidth: 50%;
\tposition: relative;
\tz-index: 2;
\tline-height: 36px;
\tcursor: pointer;
\tcolor: #888;
\tfont-size: 14.7px;
\ttext-align: center;
\ttransition: 0.3s;
\tmargin: 0;
}

.status-switch span.status-indicator {
\tposition: relative;
\tz-index: 1;
\ttop: 0;
\tleft: 0;
\twidth: 50%;
\theight: 100%;
\tdisplay: block;
\tborder-radius: 4px 0 0 4px;
\tbackground-color: #38b653;
\tbox-shadow: 0 0 5px 1px rgba(56,182,83,0.3);
\ttransition: all 0.4s cubic-bezier(0.3,-.41,.19,1.3), background-color 0.2s linear;
}

.status-switch span.right {
\tleft: 50%;
\tborder-radius: 0 4px 4px 0;
\tbackground-color: #333;
\tbox-shadow: none;
\tcolor: #fff;
}

.status-switch label.current-status {
\tcolor: #fff;
}


/* ---------------------------------- */
/* Navigation
------------------------------------- */
#navigation {
\tposition: relative;
\tdisplay: inline-block;
\tmargin-top: 22px;
}

#navigation ul {
\tlist-style: none;
\tposition: relative;
\tfloat: left;
\tmargin: 0;
\tpadding: 0;
}

#navigation ul a {
\tdisplay: block;
\ttext-decoration: none;
\tpadding: 5px 0;
}

#navigation ul li {
\tposition: relative;
\tfloat: left;
\tmargin: 0;
\tpadding: 0
}

#navigation ul li ul {
\topacity: 0;
\tvisibility: hidden;
\tposition: absolute;
\ttop: 100%;
\tleft: 9px;
\tpadding: 0;
\tz-index: 99999;
}

#navigation ul ul li { float: none; }

#navigation ul ul ul {
\ttop: 0;
\tleft: 100%;
\tmargin: 0 0 0 15px;
}

#navigation ul ul {
\tmargin: 0;
}

#navigation ul ul ul { pointer-events: none; }
#navigation ul ul li:hover > ul { pointer-events: all; }


#navigation ul ul:before {
\tcontent: \"\";
\tposition: absolute;
\tleft: 0;
\ttop: -10px;
\tbackground: rgba(255,255,255,0);
\twidth: 100%;
\theight: 10px;
}

#navigation ul ul ul:after {
\tcontent: \"\";
\tposition: absolute;
\twidth: 15px;
\theight: 100%;
\tleft: -15px;
\ttop: 0;
\topacity: 0;
}

#navigation ul li:hover > ul {
\topacity: 1;
\tvisibility: visible;
\tpointer-events: all;
}

/* Indicator Arrow */
#navigation ul li a:after,
#navigation ul ul li a:after {
\tfont-family: \"Material-Icons\";
\tcontent: '\\e914';
\topacity: 1;
\tfont-size: 16px;
\ttransition: 0.2s;
\topacity: 1;
\tline-height: 17px;
\twidth: 17px;
\theight: 17px;
\tbackground-color: #f0f0f0;
\tcolor: #a8a8a8;
\tdisplay: inline-block;
\tborder-radius: 3px;
\tmargin-left: 7px;
\ttext-indent: 0;
\ttop: 1px;
\tposition: relative;
}


#navigation ul ul.dropdown-nav ul.dropdown-nav li:hover a:after,
#navigation ul ul.dropdown-nav li:hover a:after,
#navigation ul li:hover a:after {
\tcolor: #66676b;
\tbackground: rgba(102,103,107,0.13);
\topacity: 0.8;
}

#navigation ul ul.dropdown-nav ul.dropdown-nav li a:after {
\tbackground-color: #f0f0f0;
\tcolor: #a8a8a8;
\topacity: 1;
}


/* Dropdown Indicator */
#navigation ul ul.dropdown-nav ul.dropdown-nav li:hover a:after,
#navigation ul ul.dropdown-nav li:hover a:after {
\tcolor: #fff !important;
\tbackground-color: #66676b;
\topacity: 1;
}

#navigation ul ul.dropdown-nav ul.dropdown-nav li a:after,
#navigation ul ul.dropdown-nav li a:after {
\tcontent: '\\e917';
\tposition: absolute;
\tleft: auto;
\tright: 20px;
\ttop: 6px;
\tbackground-color: rgba(255,255,255,0.1);
\tcolor: #bbb;
\topacity: 1;
}

/* Current Indicator */
#navigation ul li a.current { color: #66676b; }
#navigation ul li a.current:after {
\tcolor: #66676b;
\tbackground: rgba(102,103,107,0.13);
\topacity: 0.8;
}

#navigation ul li a:only-child:after,
#navigation ul ul li a:only-child:after { content: ''; display: none; }

#navigation ul ul li:hover a:after {
\topacity: 1;
\ttransform: translateX(0);
}

#navigation ul li {
\ttransition: all 0.25s;
\tmargin: 0 5px;
\tborder-radius: 4px;
}

#navigation ul li a,
#navigation ul ul li a {
\tcolor: #666;
\tcursor: pointer; 
}

#navigation ul a {
\tline-height: 23px;
\tpadding: 7px 9px;
\tborder-right: 4px;
}

#navigation ul li:hover a { color: #66676b; }


/* Dropdown Styles
------------------------------------- */
#navigation ul ul {
\tbackground-color: #303030;
\tbox-shadow: 0px 2px 12px 0px rgba(0,0,0,0.12);
\tborder-radius: 4px;
}

#navigation ul ul li { border-radius: 4px; }
#navigation ul ul li:last-child { border-bottom: none; }

#navigation ul li:hover ul a,
#navigation ul ul a {
\tpadding: 4px 40px 4px 15px !important;
\tline-height: 22px !important;
}

#navigation ul li:hover ul a:only-child ,
#navigation ul a:only-child { 
\tpadding: 4px 15px 4px 15px !important;
}

#navigation ul ul:after {
\tcontent: \"\";
\tposition: absolute;
\tleft: 25px;
\ttop: -5px;
\twidth: 0; 
\theight: 0; 
\tborder-left: 5px solid transparent;
\tborder-right: 5px solid transparent;
\tborder-bottom: 5px solid #303030;
}

body #navigation ul ul {
\tpadding: 14px 0;
\tbox-sizing: border-box;
\tmargin-top: 12px;
}

body #navigation ul ul ul { margin-top: 0; }

#navigation ul ul:before {
\t content: \".\";
\t position: absolute;
\t width: 100%;
\t height: 12px;
\t top: -12px;
\t opacity: 0;
\t opacity: 0;
}

#navigation ul ul ul:before {
    width: calc(100% + 15px);
    left: -15px;
}

#navigation ul ul li { width: 208px; }

#navigation ul ul li:hover {
\tborder-radius: 0;
}

#navigation ul ul li:first-child { border-radius: 4px 4px 0 0; }
#navigation ul ul li:last-child { border-radius: 0 0 4px 4px; }

#navigation ul ul {
\topacity: 0;
\tvisibility: hidden;
\ttransition: all 0.25s;
\ttransform: translate3d(0,15px,0);
}

#navigation ul ul ul { transform: translate3d(15px,0,0); }

#navigation ul li ul { z-index: 10; }
#navigation ul li:hover ul { z-index: 20; }

#navigation ul li:hover > ul {
\topacity: 1;
\tvisibility: visible;
\ttransform: translate3d(0,0,0);
}

#navigation ul ul li {
\tmargin: 0;
\tpadding: 0 6px;
\tborder-radius: 0;
\tfont-size: 15.7px;
}

#navigation ul ul.dropdown-nav ul.dropdown-nav ul.dropdown-nav li a,
#navigation ul ul.dropdown-nav ul.dropdown-nav li a,
#navigation ul ul.dropdown-nav li a {
\ttransition: 0.3s;
\tcolor: #aaa;
}

#navigation ul ul.dropdown-nav ul.dropdown-nav ul.dropdown-nav li:hover a,
#navigation ul ul.dropdown-nav ul.dropdown-nav li:hover a,
#navigation ul ul.dropdown-nav li:hover a {
\tcolor: #fff;
}


/* ---------------------------------- */
/* Mega Menu
------------------------------------- */
.mega-menu {
  opacity: 0;
  visibility: hidden;
  transition: all 0.25s;
  position: absolute;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.12);
  border-radius: 4px;
  font-size: 15px;
  display: flex;
  top: 100%;
  left: 0;
  padding: 20px 0;
  box-sizing: border-box;
  font-size: 14px;
  margin-top: -10px;
  background-color: #fff;
  width: 200px;
  z-index: 99;
  transform: translate3d(-42%,24px,0);
}

.mega-menu:before {
  content: \"\";
  position: absolute;
  top: -12px;
  left: 0;
  display: block;
  width: 100%;
  height: 12px;
  opacity: 0;
}

#navigation ul li .mega-menu ul { 
  opacity: 0;
  visibility: hidden;
  transform: translate3d(0,0,0);
  position: relative;
  display: inline-block;
  flex: 1;
  padding: 0;
  margin: 0;
  box-shadow: none;
  border-radius: 0;
  top: auto;
  left: auto;
  background-color: transparent;
}

#navigation ul li:hover .mega-menu {
  opacity: 1;
  visibility: visible;
  transform: translate3d(-42%,12px,0);
}

#navigation ul li:hover .mega-menu ul {
  opacity: 1;
  visibility: visible;
}


#navigation .mega-menu ul,
#navigation .mega-menu ul li {
  width: 100%;
}

.mega-menu.two-columns    { width: 429px;}
.mega-menu.three-columns  { width: 643px;}
.mega-menu.four-columns   { width: 857px;}

#navigation ul .mega-menu ul a {
  color: #bbb;
  padding: 0 !important;
  display: block;
  margin-left: 0;
  -wekkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

#navigation ul li:hover .mega-menu ul a, 
#navigation ul .mega-menu ul a {
\t padding: 6px 0 !important;
\t line-height: 22px !important;
\t transform: translate3d(0,0,0) !important;
}

#navigation .mega-menu ul li {
  padding: 0 30px;
}

#navigation ul li a i {
  font-size: 14px;
  position: relative;
  top: 0;
  padding-right: 5px;
}

.mega-menu-section {
  display: inline-block;
  float: left;
  width: 214px;
  padding: 0;
  border-right: 1px solid #e9e9e9;
}

.mega-menu .mega-menu-section:last-child { border: none; }

.mega-menu-headline {
  color: #222;
  opacity: 1 !important;
  font-weight: 600;
  display: block;
  padding: 8px 30px !important;
  letter-spacing: 0;
  font-size: 14px;
  line-height: 21px;
}

/* Some mega menu styles for mobile nav */
.mobile-styles .mm-listview { margin: 0px -20px !important; }
.mobile-styles .mm-listview .mega-menu-headline { color: #fff; padding: 15px 20px !important; background: #222 !important; }
.mobile-styles .mm-listview li a i { padding-right: 5px; }
.mobile-styles.mm-panel:before { height: 10px !important; }



/* ---------------------------------- */
/* Sticky Header
------------------------------------- */
#header-container {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1000;
}

#wrapper.wrapper-with-transparent-header #header .right-side { background-color: transparent; }
#header { transition: background 0.3s; }
#wrapper { padding-top: 82px; }
#wrapper.wrapper-with-transparent-header { padding-top: 0 !important;}

@media (max-width: 1099px) {
  #wrapper { padding-top: 0 !important; }
  #header-container { position: relative; }
  #header-container.transparent-header { position: absolute; }
}


/* ---------------------------------- */
/* Transparent Header
------------------------------------- */
#header-container.transparent-header {
\tposition: absolute;
\twidth: 100%;
}

.transparent-header-spacer { height: 82px; }

.transparent-header #header {
\tbackground-color: transparent;
\tbox-shadow: none;
\tborder-bottom: 1px solid rgba(255,255,255,0.2);
}

.transparent-header #header .right-side { background-color: transparent; }

.transparent-header #logo,
.transparent-header #header .right-side .header-widget { border-color: rgba(255,255,255,0.2); }
.transparent-header #header .right-side .header-widget:first-of-type { border-right-color: transparent; }
.transparent-header #header .right-side .header-widget:last-of-type { border-color: rgba(255,255,255,0.2); }

body .transparent-header #navigation > ul li a,
.transparent-header .header-notifications-trigger,
.transparent-header .header-notifications-trigger a { color: #fff; }

body .transparent-header #navigation > ul ul li a { color: #aaa; }

.transparent-header .header-notifications-dropdown:before { border-bottom-color: #fff; }

.transparent-header .mmenu-trigger { background-color: #fff; }

.transparent-header #navigation > ul li a:after {
\tbackground-color: rgba(255,255,255,0.15);
\tcolor: rgba(255,255,255,0.8);
\topacity: 1;
\ttransition: 0.3s;
}

.transparent-header #navigation > ul li:hover ul li:hover a:after,
.transparent-header #navigation > ul li:hover a:after,
.transparent-header #navigation > ul li a.current:after {
    color: #fff;
    background: #66676b;
}

.transparent-header #navigation > ul li:hover ul a:after,
.transparent-header #navigation > ul ul li a:after {
    background-color: rgba(255,255,255,0.1);
    color: #bbb;
}

/* ---------------------------------- */
/* mmenu.js - mobile menu
------------------------------------- */
.mm-hidden { display: none!important }

.mm-wrapper {
    overflow-x: hidden;
    position: relative
}

.mm-menu {
    box-sizing: border-box;
    background: inherit;
    display: block;
    padding: 0;
    margin: 0;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 0
}

.mm-panels,
.mm-panels>.mm-panel {
    background: inherit;
    border-color: inherit;
    box-sizing: border-box;
    margin: 0;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 0
}

.mm-panels {
    overflow: hidden
}

.mm-panel {
    -webkit-transform: translate(100%, 0);
    -ms-transform: translate(100%, 0);
    transform: translate(100%, 0);
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    -webkit-transition: -webkit-transform .4s ease;
    transition: -webkit-transform .4s ease;
    transition: transform .4s ease;
    transition: transform .4s ease, -webkit-transform .4s ease;
    -webkit-transform-origin: top left;
    -ms-transform-origin: top left;
    transform-origin: top left
}

.mm-panel.mm-opened {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.mm-panel.mm-subopened {
    -webkit-transform: translate(-30%, 0);
    -ms-transform: translate(-30%, 0);
    transform: translate(-30%, 0);
    -webkit-transform: translate3d(-30%, 0, 0);
    transform: translate3d(-30%, 0, 0)
}

.mm-panel.mm-highest {
    z-index: 1
}

.mm-panel.mm-noanimation {
    -webkit-transition: none!important;
    transition: none!important
}

.mm-panel.mm-noanimation.mm-subopened {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.mm-panels>.mm-panel {
    -webkit-overflow-scrolling: touch;
    overflow: scroll;
    overflow-x: hidden;
    overflow-y: auto;
    padding: 0 20px
}

.mm-panels>.mm-panel.mm-hasnavbar {
    padding-top: 40px
}

.mm-panels>.mm-panel:not(.mm-hidden) {
    display: block
}

.mm-panels>.mm-panel:after,
.mm-panels>.mm-panel:before {
    content: '';
    display: block;
    height: 20px
}

.mm-vertical .mm-panel {
    -webkit-transform: none!important;
    -ms-transform: none!important;
    transform: none!important
}

.mm-listview .mm-vertical .mm-panel,
.mm-vertical .mm-listview .mm-panel {
    display: none;
    padding: 10px 0 10px 10px
}

.mm-listview .mm-vertical .mm-panel .mm-listview>li:last-child:after,
.mm-vertical .mm-listview .mm-panel .mm-listview>li:last-child:after {
    border-color: transparent
}

.mm-vertical li.mm-opened>.mm-panel,
li.mm-vertical.mm-opened>.mm-panel {
    display: block
}

.mm-listview>li.mm-vertical>.mm-next,
.mm-vertical .mm-listview>li>.mm-next {
    box-sizing: border-box;
    height: 40px;
    bottom: auto
}

.mm-listview>li.mm-vertical.mm-opened>.mm-next:after,
.mm-vertical .mm-listview>li.mm-opened>.mm-next:after {
    -webkit-transform: rotate(225deg);
    -ms-transform: rotate(225deg);
    transform: rotate(225deg);
    right: 19px
}

.mm-btn {
    box-sizing: border-box;
    width: 40px;
    height: 50px;
    position: absolute;
    top: 0;
    z-index: 1
}

.mm-clear:after,
.mm-clear:before,
.mm-close:after,
.mm-close:before {
    content: '';
    border: 2px solid transparent;
    display: block;
    width: 5px;
    height: 5px;
    margin: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg)
}

.mm-clear:before,
.mm-close:before {
    border-right: none;
    border-bottom: none;
    right: 18px
}

.mm-clear:after,
.mm-close:after {
    border-left: none;
    border-top: none;
    right: 25px
}

.mm-next:after,
.mm-prev:before {
    content: '';
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    display: block;
    width: 8px;
    height: 8px;
    margin: auto;
    position: absolute;
    top: 0;
    bottom: 0
}

.mm-prev:before {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    left: 23px;
    right: auto
}

.mm-next:after {
    -webkit-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    transform: rotate(135deg);
    right: 23px;
    left: auto
}

.mm-navbar {
    border-bottom: 1px solid;
    border-color: inherit;
    text-align: center;
    line-height: 30px;
    height: 50px;
    padding: 0 40px;
    margin: 0;
    position: absolute;
    top: 0;
    left: 0;
    right: 0
}

.mm-navbar>* {
    display: block;
    padding: 10px 0
}

.mm-navbar a,
.mm-navbar a:hover {
    text-decoration: none
}

.mm-navbar .mm-title {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

.mm-navbar .mm-btn:first-child {
    left: 0
}

.mm-navbar .mm-btn:last-child {
    text-align: right;
    right: 0
}

.mm-panel .mm-navbar {
    display: none
}

.mm-panel.mm-hasnavbar .mm-navbar {
    display: block;
    background-color: #262626;
}

.mm-listview,
.mm-listview>li {
    list-style: none;
    display: block;
    padding: 0;
    margin: 0
}

.mm-listview {
    font: inherit;
    font-size: 14px;
    line-height: 20px
}

.mm-listview a,
.mm-listview a:hover {
    text-decoration: none
}

.mm-listview>li {
    position: relative
}

.mm-listview>li,
.mm-listview>li .mm-next,
.mm-listview>li .mm-next:before,
.mm-listview>li:after {
    border-color: inherit
}

.mm-listview>li {
    border-bottom: 1px solid #404040;
}

.mm-listview>li>a,
.mm-listview>li>span {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    color: inherit;
    display: block;
    padding: 14px 10px 14px 20px;
    margin: 0;
}

.mm-listview>li:not(.mm-divider):after {
    content: '';
    border-bottom-width: 1px;
    border-bottom-style: solid;
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    display: none;
}

.mm-listview>li:not(.mm-divider):after {
    left: 20px
}

.mm-listview .mm-next {
    background: rgba(3, 2, 1, 0);
    width: 50px;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 2
}

.mm-listview .mm-next:before {
    content: '';
    border-left-width: 1px;
    border-left-style: solid;
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0
}

.mm-listview .mm-next+a,
.mm-listview .mm-next+span {
    margin-right: 50px
}

.mm-listview .mm-next.mm-fullsubopen {
    width: 100%
}

.mm-listview .mm-next.mm-fullsubopen:before {
    border-left: none
}

.mm-listview .mm-next.mm-fullsubopen+a,
.mm-listview .mm-next.mm-fullsubopen+span {
    padding-right: 50px;
    margin-right: 0
}

.mm-panels>.mm-panel>.mm-listview {
    margin: 20px -20px
}

.mm-panels>.mm-panel>.mm-listview:first-child,
.mm-panels>.mm-panel>.mm-navbar+.mm-listview {
    margin-top: -10px;
}

.mm-menu {
    background: #2a2a2a;
    border-color: rgba(255,255,255,0.1);
    color: #fff;
}

.mm-menu .mm-navbar a,
.mm-menu .mm-navbar>* {
    color: #fff;
    font-weight: 600;
    font-size: 16px;
}

.mm-menu .mm-btn:after,
.mm-menu .mm-btn:before {
    border-color: rgba(255,255,255,0.8);
}

.mm-menu .mm-listview {
    border-color: #2a2a2a
}

.mm-menu .mm-listview>li .mm-next:after {
    border-color: rgba(255,255,255,0.8);
}

.mm-menu .mm-listview>li a:not(.mm-next) {
    -webkit-tap-highlight-color: rgba(255, 255, 255, .5);
    tap-highlight-color: rgba(255, 255, 255, .5)
}

.mm-menu .mm-listview>li.mm-selected>a:not(.mm-next),
.mm-menu .mm-listview>li.mm-selected>span {
    background: rgba(255, 255, 255, .05)
}

.mm-menu .mm-listview>li { transition: 0.2s; }
.mm-menu .mm-listview>li:hover {
    background: rgba(255, 255, 255, .03)
}

.mm-menu .mm-listview>li.mm-opened.mm-vertical>.mm-panel,
.mm-menu .mm-listview>li.mm-opened.mm-vertical>a.mm-next,
.mm-menu.mm-vertical .mm-listview>li.mm-opened>.mm-panel,
.mm-menu.mm-vertical .mm-listview>li.mm-opened>a.mm-next {
    background: rgba(0, 0, 0, .05)
}

.mm-menu .mm-divider {
    background: rgba(0, 0, 0, .05)
}

.mm-page {
    box-sizing: border-box;
    position: relative
}

.mm-slideout {
    -webkit-transition: -webkit-transform .4s ease;
    transition: -webkit-transform .4s ease;
    transition: transform .4s ease;
    transition: transform .4s ease, -webkit-transform .4s ease;
    z-index: 1
}

html.mm-opened {
    overflow-x: hidden;
    position: relative
}

html.mm-blocking {
    overflow: hidden
}

html.mm-blocking body {
    overflow: hidden
}

html.mm-background .mm-page {
    background: inherit
}

#mm-blocker {
    background: rgba(3, 2, 1, 0);
    display: none;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2
}

html.mm-blocking #mm-blocker {
    display: block
}

.mm-menu.mm-offcanvas {
    z-index: 0;
    display: none;
    position: fixed
}

.mm-menu.mm-offcanvas.mm-opened {
    display: block
}

.mm-menu.mm-offcanvas.mm-no-csstransforms.mm-opened {
    z-index: 10
}

.mm-menu.mm-offcanvas {
    width: 80%;
    min-width: 140px;
    max-width: 440px
}

html.mm-opening .mm-menu.mm-opened~.mm-slideout {
    -webkit-transform: translate(80%, 0);
    -ms-transform: translate(80%, 0);
    transform: translate(80%, 0);
    -webkit-transform: translate3d(80%, 0, 0);
    transform: translate3d(80%, 0, 0)
}

@media all and (max-width:175px) {
    html.mm-opening .mm-menu.mm-opened~.mm-slideout {
        -webkit-transform: translate(140px, 0);
        -ms-transform: translate(140px, 0);
        transform: translate(140px, 0);
        -webkit-transform: translate3d(140px, 0, 0);
        transform: translate3d(140px, 0, 0)
    }
}

@media all and (min-width:550px) {
    html.mm-opening .mm-menu.mm-opened~.mm-slideout {
        -webkit-transform: translate(440px, 0);
        -ms-transform: translate(440px, 0);
        transform: translate(440px, 0);
        -webkit-transform: translate3d(440px, 0, 0);
        transform: translate3d(440px, 0, 0)
    }
}

.mm-sronly {
    border: 0!important;
    clip: rect(1px, 1px, 1px, 1px)!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    white-space: nowrap!important;
    width: 1px!important;
    height: 1px!important;
    padding: 0!important;
    overflow: hidden!important;
    position: absolute!important
}

em.mm-counter {
    font: inherit;
    font-size: 14px;
    font-style: normal;
    text-indent: 0;
    line-height: 20px;
    display: block;
    margin-top: -10px;
    position: absolute;
    right: 45px;
    top: 50%
}

em.mm-counter+a.mm-next {
    width: 90px
}

em.mm-counter+a.mm-next+a,
em.mm-counter+a.mm-next+span {
    margin-right: 90px
}

em.mm-counter+a.mm-fullsubopen {
    padding-left: 0
}

em.mm-counter+a.mm-fullsubopen+a,
em.mm-counter+a.mm-fullsubopen+span {
    padding-right: 90px
}

.mm-listview em.mm-counter+.mm-next.mm-fullsubopen+a,
.mm-listview em.mm-counter+.mm-next.mm-fullsubopen+span {
    padding-right: 90px;
}

.mm-vertical>.mm-counter {
    top: 12px;
    margin-top: 0
}

.mm-vertical.mm-spacer>.mm-counter {
    margin-top: 40px
}

.mm-nosubresults>.mm-counter {
    display: none
}

.mm-menu em.mm-counter {
    background-color: rgba(0,0,0,0.3);
    height: 20px;
    width: 20px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
\tline-height: 21px;
    font-size: 10px;
    font-weight: 600;
}

.mm-menu em.mm-counter {
\tbackground-color: #66676b;
}

/* Trigger Styles */
.mmenu-trigger {
    height: 46px;
    width: 46px;
    display: none;
    position: relative;
    margin: 0;
    background-color: #eee;
    border-radius: 4px;
    cursor: pointer;
}

/* Hamburger Icon */
.hamburger {
    padding: 0;
    top: 16px;
    left: 12px;
    transform: scale(0.67);
    -moz-transform: scale(0.70) translateY(4px);
    position: relative;
    display: inline-block;
    cursor: pointer;
    transition-property: opacity, filter;
    transition-duration: 0.15s;
    transition-timing-function: linear;
    font: inherit;
    color: inherit;
    text-transform: none;
    background-color: transparent;
    border: 0;
    margin: 0;
    overflow: visible;
}

.hamburger-box {
    position: relative;
}

.hamburger-inner {
    display: block;
    top: 50%;
    margin-top: -2px; }

.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
    width: 33px;
    height: 4px;
    background-color: #555;
    border-radius: 4px;
    position: absolute;
    transition-property: transform;
    transition-duration: 0.15s;
    transition-timing-function: ease; }

.hamburger-inner::before, .hamburger-inner::after {
    content: \"\";
    display: block;
}

.hamburger-inner::before { top: -10px; }
.hamburger-inner::after { bottom: -10px; }

/* Animation */
.hamburger--collapse .hamburger-inner {
    top: auto;
    bottom: 0;
    transition-duration: 0.13s;
    transition-delay: 0.13s;
    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }

.hamburger--collapse .hamburger-inner::after {
    top: -20px;
    transition: top 0.2s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), opacity 0.1s linear; }

.hamburger--collapse .hamburger-inner::before {
    transition: top 0.12s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19); }

.hamburger--collapse.is-active .hamburger-inner {
    transform: translate3d(0, -10px, 0) rotate(-45deg);
    transition-delay: 0.22s;
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }

.hamburger--collapse.is-active .hamburger-inner::after {
    top: 0;
    opacity: 0;
    transition: top 0.2s cubic-bezier(0.33333, 0, 0.66667, 0.33333), opacity 0.1s 0.22s linear; }

.hamburger--collapse.is-active .hamburger-inner::before {
    top: 0;
    transform: rotate(-90deg);
    transition: top 0.1s 0.16s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.25s cubic-bezier(0.215, 0.61, 0.355, 1); }

.mmenu-trigger { display: none; }


/* Media Queries Menu */
@media (max-width: 1099px) {

\t/* Header Responsive Styles */
\t#responsive { display: none; }
\t.mmenu-trigger { display: inline-block !important; }

\t#header { height: 76px; }

\t#logo { border: none; }
\t#logo img { border: none; max-width: 100px; height: auto; }
\t
\theader.fullwidth .container {
\t\tpadding: 0 20px;
\t}

\t.header-widget { float: left; }

\t.fullwidth .header-widget:last-of-type,
\t.header-widget:last-of-type {
\t\tpadding-right: 25px;
\t\tfloat: left;
\t}

\t#header .right-side {
\t\tposition: absolute;
\t\twidth: auto;
\t\tbackground-color: #fff;
\t\ttext-align: left;
\t}

\t.mmenu-trigger {
\t\tmargin: 0 -5px 0 23px;
\t\ttop: 15px;
\t\tfloat: right;
\t}

\t#header .right-side .header-widget {
\t\tborder-right: 1px solid #e0e0e0;
\t\tmargin-right: -1px;
\t}

\t.header-widget { padding: 0 25px; }
\t.header-notifications:first-child { margin-right: -5px; }
\t
\t#header-container.cloned { display: none; }
}

@media (max-width: 768px) {
\t.header-notifications {
\t\tposition: initial;
\t}

\t.header-notifications-dropdown:before { display: none; }
\t.user-menu .header-notifications-dropdown,
\t.header-notifications-dropdown {
\t\twidth: calc(100vw - 45px);
\t\tright: -10px;
\t\ttop: calc(100% + 15px)
\t}

}

@media (max-width: 480px) {
\t.hide-on-mobile { display: none; }
}


/* ---------------------------------- */
/* Footer
------------------------------------- */
#footer {
\tbackground-color: #303030;
\tcolor: #c0c0c0;
}

#footer p { line-height: 26px; }

.footer-top-section {
\tborder-bottom: 1px solid #484848;
}

.footer-top-section .footer-logo img { max-height: 46px; }

.footer-rows-container { 
\tdisplay: block;
\theight: 96px;
\tposition: relative;
\tz-index: 100;
}

.footer-row {
\tdisplay: inline-block;
\tpadding: 0 40px;
\tborder-right: 1px solid #484848;
\tborder-left: 1px solid #484848;
\tfloat: left;
\theight: 100%;
}

.footer-row-inner {
\tposition: relative;
\ttop: 50%;
\ttransform: translateY(-50%);
}

.footer-row-inner.footer-logo {
\tposition: relative;
\ttop: auto;
\ttransform: translateY(0);
\ttop: 50%;
\tposition: relative;
\theight: 46px;
 }

.footer-row-inner.footer-logo img {
\tposition: relative;
\ttop: 50%;
 }

.footer-row:first-child { padding-left: 0; border-left: none; }
.footer-row:last-child { padding-right: 0; border: none; }

.footer-rows-right .footer-row:first-child {
\tpadding-left: 40px;
\tborder-left:  1px solid #484848;
}

.footer-rows-right {
\tfloat: right;
\theight: 100%;
}

/* Language Switcher */
.language-switcher.bootstrap-select.btn-group .dropdown-menu.inner {
\twidth: 100%;
}

.language-switcher.bootstrap-select:before { display: none; }

.language-switcher.bootstrap-select .dropdown-menu {
    padding-top: 15px;
    top: calc(100% + 15px);
    width: 160px;
    left: auto;
    right: 0;
}

.language-switcher.bootstrap-select .dropdown-menu:before {
\tposition: absolute;
\ttop: -5px;
\tcontent: \"\";
\tright: 20px;
\twidth: 0; 
\theight: 0; 
\tborder-left: 5px solid transparent;
\tborder-right: 5px solid transparent;
\tborder-bottom: 5px solid #fff;
}

.language-switcher.bootstrap-select.btn-group button {
\theight: 44px;
\tpadding-right: 35px;
\tpadding-left: 18px;
\tcolor: #fff;
\tbackground-color: #444;
\ttransition: 0.3s;
\tbox-shadow: none;
}

.language-switcher.bootstrap-select.btn-group .dropdown-toggle .filter-option {
\theight: 44px;
\tline-height: 44px;
}

.language-switcher.bootstrap-select.btn-group button:hover {
\tbackground-color: #fff;
\tcolor: #333;
}

.language-switcher.bootstrap-select.btn-group.open button,
.language-switcher.bootstrap-select.btn-group button:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
}

.language-switcher.bootstrap-select.btn-group button .caret { transition: 0.3s; }

.language-switcher.bootstrap-select.btn-group.open button .caret,
.language-switcher.bootstrap-select.btn-group button:hover .caret {
\tborder-top-color: #fff;
}

.language-switcher.bootstrap-select.btn-group .dropdown-toggle .caret {
\tright: 18px;
}

/* Social Icons */
.footer-social-links {
\tlist-style: none;
\tmargin: 0 -10px;
\tmargin-top: 3px;
\tpadding: 0;
}

.footer-social-links li {
\tdisplay: inline-block;
\tpadding: 0;
\tmargin: 0;
\tfloat: left;
}

.footer-social-links li a {
\tfont-size: 20px;
\tpadding: 0 10px;
\tcolor: #fff;
\tdisplay: inline-block;
\ttransition: 0.3s;
\topacity: 0.5;
\ttransform: translate3d(0,-0.5px,0);
}

.footer-social-links li a:hover {
\topacity: 1;
}

/* Middle Section */
.footer-middle-section {
\tpadding: 60px 0;
\tposition: relative;
\tz-index: 10;
}

#footer h3,
#footer h2,
.footer-links h3 {
\tfont-size: 18px;
\tcolor: #fff;
\tmargin: 0 0 15px 0;
\tpadding: 0;
\tdisplay: block
}

#footer h3 i {
\tposition: relative;
\tmargin-right: 5px;
\ttop: 2px;
\tfont-size: 20px;
\tfont-weight: 400 !important;
}
.footer-links ul {
\tlist-style: none;
\ttext-align: left;
\tmargin: 0;
\tpadding: 0;
}

.footer-links ul li {
\tmargin-bottom: 0;
\tdisplay: block;
}

.footer-links ul li:first-child a { padding-top: 0; }
.footer-links ul li:last-child a { padding-bottom: 0; }

.footer-links ul li a {
\tcolor: #c0c0c0;
\tdisplay: block;
\tline-height: 25px;
\tposition: relative;
\tz-index: 100;
\tpadding: 4px 0;
}

.footer-links ul li a span {
\tdisplay: inline-block;
\tposition: relative;
}

.footer-links ul li a:hover {
\tcolor: #fff;
}

.footer-links ul li a span:before {
\tcontent: \"\";
\tposition: absolute;
\tleft: 0;
\tbottom: 0;
\tbackground-color: #66676b;
\theight: 2px;
\tdisplay: block;
\ttransition: all 0.25s, opacity 0.2s;
\tz-index: -1;
\tborder-radius: 3px;
\topacity: 0.5;
\twidth: 0;
}

.footer-links ul li a:hover span:before {
\twidth: 100%;
\topacity: 1;
}

/* Newsletter */
.newsletter {
\tdisplay: flex;
\tmargin-top: 20px;
}

.newsletter input,
.newsletter button {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: flex-start;
}
.newsletter input {
\tbackground: #262626;
\tbox-shadow: none;
\tmargin-bottom: 0;
}

.newsletter input:focus {
\tbox-shadow: none;
}

.newsletter button {
\tbackground-color: #66676b;
\tborder-radius: 4px;
\theight: 48px;
\tmin-width: 48px;
\tmax-width: 48px;
\ttext-align: center;
\tline-height: 48px;
\tfont-size: 18px;
\tcolor: #fff;
\tmargin-left: 10px;
\ttransition: 0.3s;
}

.newsletter button:hover {
\tbackground-color: #fff;
\tcolor: #333;
}

.newsletter button i {
\twidth: 100%;
\tline-height: 48px;
}


/* Copyrights */
.footer-bottom-section {
\tpadding: 25px 0;
\tborder-top: 1px solid #484848;
\ttext-align: center;
}

.footer-bottom-section strong {
\tcolor: #fff;
\tfont-weight: 500;
}


/* Footer Media Queries*/
@media (max-width: 992px) {
\t#footer h3 { margin-top: 45px; }
\t.footer-middle-section { padding-top: 0; padding-bottom: 45px }
}

@media (max-width: 768px) {
\t.content-left-offset { padding-left: 15px; }
\t.content-right-offset { padding-left: 15px; }

\t.footer-rows-container {
\t\theight: auto;
\t\tpadding: 20px 0 40px 0;
\t}

\t.footer-rows-left,
\t.footer-rows-right {
\t    float: none;
\t    height: auto;
\t}

\t.footer-row-inner.footer-logo img { top: 0; }

\t.footer-row-inner {
\t    position: relative;
\t    top: 0;
\t    transform: translateY(0);
\t}

\t.footer-row-inner.footer-logo {
\t    top: 0;
\t    position: relative;
\t    height: 46px;
\t}

\t#footer .footer-row {
\t\tpadding: 0;
\t\tfloat: none;
\t\tpadding: 20px 0 0 0;
\t\tdisplay: block;
\t\twidth: 100%;
\t\tborder: none;
\t}

\t.footer-rows-container .footer-rows-left,
\t.footer-rows-container .footer-rows-right{ display: block }

}


/* ---------------------------------- */
/* Pagination
------------------------------------- */
.pagination {
\tmargin: 0;
\ttext-align: center;
}

.pagination-next-prev {
\tposition: relative;
\ttop: -66px;
}

.pagination ul {
\tmargin: 0;
\tpadding: 0;
}

.pagination ul li {
\tdisplay: inline-block;
\tmargin: 0;
\tpadding: 0;
}


.pagination ul li a,
.pagination-next-prev ul li a {
\tpadding: 10px 0;
\tborder-bottom: none;
\tdisplay: inline-block;
\tcolor: #333;
\tbackground-color: transparent;
\tfont-weight: 700;
\tmargin:0;
\tline-height: 22px;
\t-webkit-transition: all 200ms ease-in-out;
\t-moz-transition: all 200ms ease-in-out;
\t-o-transition: all 200ms ease-in-out;
\t-ms-transition: all 200ms ease-in-out;
\ttransition: all 200ms ease-in-out;
\tfont-size: 14px;
\tfloat: left;
}

.pagination ul li a {
\tborder-radius: 4px;
\twidth: 44px;
\theight: 44px;
\tpadding: 0;
\tline-height: 44px;
}

.pagination ul li a i {
\tline-height: 44px;
\tfont-size: 24px;
}

.pagination ul li.blank {
\tcolor: #a0a0a0;
\tpadding: 0 6px;
}

.section.gray .pagination .pagination-arrow a:hover,
.pagination ul li a.current-page,
.pagination ul li a:hover {
\tbackground-color: #333;
\tcolor: #fff;
\tbox-shadow: 0 2px 8px rgba(0,0,0,0.2)
}

.pagination ul li a.current-page {
\tbackground-color: #66676b;
\tcolor: #fff;
\tbox-shadow: 0 2px 8px rgba(102,103,107,0.25)
}

.pagination .pagination-arrow a { background-color: #f0f0f0; }
.section.gray .pagination .pagination-arrow a { background-color: #eaeaea; }


/* ---------------------------------- */
/* Back to top
------------------------------------- */
#backtotop {
  position: fixed;
  right: 0;
  opacity: 0;
  visibility: hidden;
  bottom: 25px;
  margin: 0 25px 0 0;
  z-index: 999;
  transition: 0.35s;
  transform: translateY(10px);
}
#backtotop.visible {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}
#backtotop a {
  text-decoration: none;
  border: 0 none;
  display: block;
  width: 46px;
  height: 46px;
  background-color: #66676b;
  opacity: 1;
  transition: all 0.3s;
  border-radius: 4px;
  text-align: center;
  font-size: 26px;
}

body #backtotop a {
  color: #fff;
}

#backtotop a:after {
  content: \"\";
  font-family: \"Feather-Icons\";
  position: relative;
  display: block;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

@media (max-width: 768px) {
  #backtotop {
    display: none;
  }
}


/* ---------------------------------- */
/* Sidebar Styles
------------------------------------- */
.sidebar-container { margin-bottom: 40px; }
.full-page-container .sidebar-container { margin-bottom: 0px; }

.sidebar-widget input { margin-bottom: 0; }

.sidebar-widget {
\tmargin-bottom: 50px;
\tdisplay: block;
}

.sidebar-widget h3 {
\tfont-size: 20px;
\tmargin-bottom: 20px;
}


/* ---------------------------------- */
/* Notify Box
------------------------------------- */
.notify-box {
\tdisplay: block;
\twidth: 100%;
\tbackground-color: #f2f2f2;
\tborder-radius: 4px;
\tpadding: 15px 25px;
\tposition: relative;
\tline-height: 28px;
\tmin-height: 59px;
}

.notify-box label {
\tmargin-bottom: 0;
\tcursor: pointer;
}

.notify-box .switch-button {
\tmargin-right: 10px;
}

.sort-by .bootstrap-select {
\tposition: relative;
\tright: 0;
\ttop: 0;
}

.sort-by .dropdown-menu {
\tbox-shadow: 0 0 4px 0px rgba(0, 0, 0, 0.14);
}

.sort-by .bootstrap-select.btn-group button {
\tflex: 1;
\tposition: relative;
\tright: 0;
\ttop: 4px;
\tfont-weight: 600;
\tmargin-left: 10px;
\twidth: auto;
\tpadding: 0;
\tpadding-right: 12px;
\tbackground-color: transparent;
\tbox-shadow: none;
\theight: 20px;
\tcolor: #333;
}

.sort-by .bootstrap-select:not([class*=\"col-\"]):not([class*=\"form-control\"]):not(.input-group-btn) {
\twidth: auto;
}

.sort-by .bootstrap-select.btn-group .dropdown-toggle .caret {
\tright: 0;
}

.sort-by .bootstrap-select .dropdown-menu {
\tpadding-top: 15px;
\ttop: 40px;
\tright: 0;
\tleft: auto;
\tposition: absolute;
\tmin-width: 160px !important;
\tflex: 1;
}

.sort-by .bootstrap-select.open:before { display: none; }

.sort-by {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: flex-start;
    position: relative;
    float: right;
}

/* Notify Box Media Queries*/
@media (max-width: 768px) {
\t.notify-box { margin-bottom: 90px; }
\t.notify-box .sort-by {
\t\tposition: absolute;
\t\tmargin-top: 35px;
\t\tleft: 0;
\t}
\t.notify-box .sort-by .bootstrap-select .dropdown-menu { left: 0; right: auto; }
}

/* ---------------------------------- */
/* Titlebar
------------------------------------- */
#titlebar {
\tbackground-color: #f8f8f8;
\tposition: relative;
\tpadding: 70px 0;
\tmargin-bottom: 65px;
}

#titlebar.gradient {
\tbackground: linear-gradient(to bottom, rgba(0,0,0,0.03) 0%, rgba(255,255,255,0));
\tpadding-bottom: 0;
}

#titlebar.white {
\tbackground: #fff;
\tpadding-bottom: 0;
}

#titlebar.transparent {
\tbackground: transparent;
}

#titlebar span a,
#titlebar span {
\tfont-size: 20px;
\tcolor: #888;
\tmargin-bottom: 3px;
\tmargin-top: 3px;
\tdisplay: block;
}

#titlebar #breadcrumbs span {
\tfont-size: 14px
}

#titlebar h1,
#titlebar h2 {
\tfont-size: 30px;
\tline-height: 40px;
\tmargin: 1px 0 3px 0;
}

/* Breadcrumbs */
#breadcrumbs {
\tposition: absolute;
\tright: 15px;
\tdisplay: inline-block;
\tfont-size: 14.7px;
\ttop: 50%;
\ttransform: translateY(-51%);
\tborder-radius: 4px;
\tfont-weight: 600;
\tcolor: #333;
\tbackground-color: #f0f0f0;
}

#breadcrumbs ul {
\tmargin: 0;
\tpadding: 12px 22px;
\tline-height: 23px;
}

#breadcrumbs ul li a {
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tcolor: #666;
\tfont-weight: 500;
}

#breadcrumbs ul li a:hover { color: #66676b; }

#breadcrumbs ul li {
\tdisplay: inline-block;
\tlist-style: none;
\tmargin: 0 0 0 7px;
}

#breadcrumbs ul li:first-child:before { display: none; }
#breadcrumbs ul li:first-child { margin-left: 0; }

#breadcrumbs ul li:before {
\tcontent: \"\";
\tdisplay: inline-block;
\theight: 0;
\twidth: 0;
    border-top: 4px solid transparent;
    border-bottom: 4px solid transparent;
    border-left: 4px solid #aaa;
\tfont-size: 14px;
\tmargin-right: 12px;
}

#breadcrumbs ul li.home-icon a {
\topacity: 1;
\tfont-size: 24px;
\ttop: 4px;
\tposition: relative;
\tline-height: 0;
\tpadding: 0;
\tdisplay: inline-block;
}

#breadcrumbs ul li.home-icon i {
\tline-height: 0;
}

/* Dark Style */
#breadcrumbs.dark {
\tcolor: rgba(255,255,255,1);
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.15);
\tbackground-color: #333;
}

#breadcrumbs.dark ul li a,
#breadcrumbs.dark ul li a:hover {
\tcolor: rgba(255,255,255,1);
}

#breadcrumbs.dark ul li:before {
    border-left: 4px solid rgba(255,255,255,0.3);
}


/* White Style */
#breadcrumbs.white {
\tcolor: #333;
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.1);
\tbackground-color: #fff;
}

#breadcrumbs.white ul li a { color: #666; }
#breadcrumbs.white ul li a:hover { color: #66676b; }

#breadcrumbs.white ul li:before {
    border-left: 4px solid rgba(0,0,0,0.3);
}


/* Adjustments for \"Single Page Header\" */
.single-page-header #breadcrumbs {
\tposition: relative;
\ttop: 0;
\tleft: 0;
\ttransform: none;
\tmargin-left: auto;
}

@media (max-width: 992px) {
\t.single-page-header #breadcrumbs {
\t\tmargin: 30px 0 20px 0;
\t}
}



/* ---------------------------------- */
/* Single Page Header
------------------------------------- */
.single-page-header {
\tmargin-bottom: 65px;
\tpadding: 60px 0;
\tposition: relative;
}

.single-page-header .container {
\tz-index: 100;
\tposition: relative;
}

.single-page-header:after,
.single-page-header:before {
    content: \"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    z-index: 15;
    background: linear-gradient(to right,rgba(247,247,247,1) 50%,rgba(247,247,247,0.8) 70%,rgba(247,247,247,0.8) 90%);
}

.single-page-header:after {
    z-index: 5;
    background-color: #f7f7f7;
}

.single-page-header .background-image-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 100% 50%;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
    left: 50%;
    z-index: 10;
}

.single-page-header .single-page-header-inner { display: flex; }

.single-page-header .left-side,
.single-page-header .right-side {
\tflex: 1;
\tdisplay: flex;
\talign-items: center;
}

.single-page-header .left-side { padding-right: 30px; }

.single-page-header .right-side {
\tmax-width: 35%;
}

@media (min-width: 1365px) {
\t.single-page-header .right-side { max-width: 30%; }
}

/* Image */
.single-page-header .header-image a {
\tdisplay: flex; 
\theight: 100%;
}

.single-page-header .header-image {
    height: 140px;
    flex: 0 0 140px;
    margin-right: 35px;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.1);
    display: flex;
    padding: 0 20px;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.single-page-header .header-image { max-width: 140px; }
}

.single-page-header.freelancer-header .header-image {
    background: #fff;
    border-radius: 50%;
    box-shadow: none;
    display: flex;
    padding: 0;
    overflow: hidden;
    height: 130px;
    flex: 0 0 130px;
    width: 130px;
}

.single-page-header .header-image img {
\talign-self: center;
\ttransform: translate3d(0,0,0);
}


/* IE 11 FIX */
@media all and (-ms-high-contrast:none) {
\t.single-page-header .header-image img {
\t\twidth: 100%;
\t}
}

/* Details */
.single-page-header .header-details {
\tflex: 1;
}

.single-page-header .header-details h3 {
\tcolor: #333;
\tfont-size: 26px;
\tmargin: 0;
\tpadding: 0;
\tmargin-bottom: 12px;
\tmargin-top: 3px;
\tline-height: 36px;
\tposition: relative;
\tpadding-right: 0;
\tdisplay: inline-block;
}

.single-page-header .header-details h3 span {
\tcolor: #808080;
\tdisplay: block;
\tfont-size: 20px;
\tfont-weight: 300;
\tmargin-top: -3px;
}

.single-page-header .header-details h5 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
}

/* Details */
.single-page-header .header-details h5 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
}

.single-page-header .header-details ul {
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
\tline-height: 24px;
\tmargin-bottom: -7px;
}

.single-page-header .header-details li {
\tdisplay: inline-block;
\tmargin-right: 20px;
\tmargin-bottom: 12px;
}

.single-page-header .header-details li:last-child { margin-right: 0; }

.single-page-header .header-details li a { color: #666; }
.single-page-header .header-details li a:hover { color: #66676b; }

.single-page-header .header-details li i {
\tfont-size: 20px;
\tposition: relative;
\ttop: 2px;
\tmargin-right: 2px;
}

.single-page-header .header-details li .verified-badge {
\ttransform: scale(0.85);
\tposition: relative;
\ttop: 2px;
}

.single-page-header .header-details li .verified-txt {
\tcolor: #299840;
}

.single-page-header .header-details li .star-rating  {
\tposition: relative;
\ttop: 6px;
}

.single-page-header .header-details ul li img.flag {
\theight: 16px;
\tborder-radius: 3px;
\tposition: relative;
\ttop: -1px;
\tdisplay: inline-block;
\tbox-shadow: 0 0 3px rgba(0,0,0,0.2);
\tmargin-right: 5px;
\tcursor: default
}

/* Salary Box */
.single-page-header .salary-box {
\tborder-radius: 4px;
\tbox-shadow: 0 3px 8px rgba(0,0,0,0.08);
\tbackground-color: #fff;
\tdisplay: inline-block;
\tpadding: 20px 25px;
\tmargin-left: auto;
}

.salary-box .salary-type {
\tcolor: #888;
\tline-height: 20px;
\tmargin: 3px 0 8px 0;
}

.salary-box .salary-amount {
\tcolor: #333;
\tfont-size: 28px;
\tline-height: 36px;
\tfont-weight: 300;
}

/* Media Queries for Single Page Header */
@media (max-width: 1366px) {
\t.single-page-header.freelancer-header .header-image {
\t    height: 130px;
\t    flex: 0 0 130px;
\t    width: 130px;
\t}
}

@media (max-width: 1240px) {
    .single-page-header .header-details h3 {
        font-size: 26px;
    }
    .single-page-header {
        padding: 55px 0;
    }
    .salary-box .salary-amount {
        font-size: 26px;
        line-height: 32px;
    }
    .single-page-header .header-image {
        height: 120px;
        flex: 0 0 120px;
    }

\t.single-page-header.freelancer-header .header-image {
\t    height: 120px;
\t    flex: 0 0 120px;
\t    width: 120px;
\t}
}

@media (max-width: 992px) {
\t.single-page-header .single-page-header-inner {
\t    display: flex;
\t    flex-direction: column;
\t}
\t.single-page-header .left-side { padding-right: 0; }
    .single-page-header .header-details h3 {
        font-size: 24px;
    }
    .single-page-header {
        padding: 35px 0;
    }
    .single-page-header .salary-amount {
        font-size: 22px;
        line-height: 24px;
    }
    .single-page-header .salary-box {
        padding: 0;
        margin-top: 15px;
        margin-bottom: 20px;
        background-color: transparent;
        box-shadow: none;
    }
    .salary-box .salary-type {
        font-weight: 600;
        color: #333;
    }
    .single-page-header .left-side,
    .single-page-header .right-side,
    .single-page-header-inner {
        display: block;
        max-width: 100%;
    }
    .single-page-header .header-image {
        height: 70px;
        width: auto;
        padding: 15px 20px;
        margin: 15px 0;
        display: inline-block;
    }
    .single-page-header .header-image img {
        height: 100%;
    }

    .single-page-header .header-details h5 {
        border-top: 1px solid #e0e0e0;
        padding-top: 25px;
    }

\t.single-page-header.freelancer-header .header-image {
\t    height: 70px;
\t    flex: 0 0 70px;
\t    width: 70px;
\t    margin-bottom: -70px;
\t}
\t.single-page-header.freelancer-header .header-details h3 {
\t\tmargin-left: 90px;
\t}
}

@media (max-width: 768px) {
\t.single-page-header:after, .single-page-header:before { background: #f7f7f7; }

\t.single-page-header.freelancer-header .header-image {
\t    height: 70px;
\t    flex: 0 0 70px;
\t    width: 70px;
\t    margin-bottom: -70px;
\t}
\t.single-page-header.freelancer-header .header-details h3 {
\t\tmargin-left: 90px;
\t}
}


/* ---------------------------------- */
/* Blog Post
------------------------------------- */
.blog-post {
    display: flex;
    background: #fff;
    margin-bottom: 35px;
\tbox-shadow: 0 3px 12px rgba(0,0,0,0.1);
\tborder-radius: 4px;
\toverflow: hidden;
\ttransition: 0.3s;
}

.blog-post:hover {
\tbox-shadow: 0 4px 18px rgba(0,0,0,0.1);
\ttransform: translateY(-5px);
}

.blog-post-thumbnail {
\tflex: 0 0 auto;
    max-width: none;
    max-height: 100%;
\toverflow: hidden;
\tposition: relative;
\twidth: 260px;
}

.blog-post-thumbnail-inner {
\theight: 100%;
\twidth: 100%;
\toverflow: hidden;
\tbox-shadow: 0 3px 12px rgba(0,0,0,0.15);
\ttransition: 0.3s;
}

.blog-post-thumbnail-inner img {
\theight: 100%;
\twidth: 100%;
\tobject-fit: cover;
\tposition: absolute;
\ttop: 0;
\tleft: 0;
}

.blog-post-thumbnail-inner .blog-item-tag {
\tbottom: 20px;
\tleft: 20px;
\ttop: auto;
\tmargin: 0;
}

.blog-post-content {
\tflex: 1;
\tpadding: 35px;
}

.blog-post-content h3,
.blog-post-content h3 a {
\tfont-size: 22px;
\tline-height: 33px;
\tcolor: #333;
\tmargin-bottom: 15px;
\tdisplay: block;
}

.blog-post-content h3 a:hover {
\tcolor: #66676b;
}

a.blog-post-info,
.blog-post-info,
.blog-post-date {
\tfont-size: 14px;
\tcolor: #888;
\tmargin-bottom: 10px;
\tdisplay: inline-block;
\tbackground-color: #f0f0f0;
\tborder-radius: 4px;
\tline-height: 20px;
\tpadding: 4px 10px;
\tmargin-right: 3px;
\ttransition: 0.3s;
}

a.blog-post-info:hover {
\tcolor: #fff;
\tbackground-color: #66676b;
}

.blog-post-content p {
\tpadding: 0;
\tmargin: 0;
\tdisplay: block;
\tcolor: #808080;
}

.blog-post-content a.button i.icon-feather-arrow-right {
\tfont-size: 20px;
\ttop: 4px;
\tleft: -1px;
\tposition: relative;
\tmargin: 0 -5px;
}

.blog-post-info-list {
\tdisplay: block
}

blockquote {
    padding: 10px 20px;
    margin: 0 20px;
    font-size: 17px;
    line-height: 30px;
    color: #888;
    border-left: 5px solid #eee;
}

/* Single Post Styles */
.blog-post.single-post { flex-direction: column; }
.blog-post.single-post:hover { transform: none; }
.blog-post.single-post .blog-post-thumbnail { width: 100%; height: 380px; }
.blog-post.single-post p { margin-bottom: 20px; }

/* Post Navigation */
#posts-nav {
\tpadding: 0;
\tlist-style: none;
\twidth: 100%;
\tposition: relative;
\tmargin: 0;
\tdisplay: inline-block;
\tmin-height: 60px;
}

#posts-nav li span {
\tdisplay: block;
    font-size: 14px;
    color: #888;
    margin-bottom: 10px;
    display: inline-block;
    background-color: #f0f0f0;
    border-radius: 4px;
    line-height: 20px;
    padding: 4px 10px;
    margin-right: 3px;
    transition: 0.3s;
}

#posts-nav li a:hover span {
    background-color: #66676b;
    color: #fff;
}

#posts-nav li {
\tposition: absolute;
\tfont-size: 18px;
\tfont-weight: 500;
\twidth: 50%;
}

#posts-nav li strong {
\tdisplay: block;
\tfont-weight: 500;
}

#posts-nav li a {
\ttransition: transform 0.3s, color 0.3s 0s;
\tcolor: #333;
\tdisplay: inline-block;
\tline-height: 28px;
}

#posts-nav li a:hover { color: #66676b; }

#posts-nav li.next-post {
\tright: 0;
\ttext-align: right;
}

#posts-nav li.prev-post {
\tleft: 0;
}

#posts-nav li.next-post a { padding-right: 50px; }
#posts-nav li.prev-post a { padding-left: 50px; }

#posts-nav li.prev-post a:before,
#posts-nav li.next-post a:before {
\tfont-family: \"Feather-Icons\";
\tfont-size: 30px;
\tposition: absolute;
\tcolor: inherit;
\ttop: 50%;
\ttransform: translate3d(0,-50%,0);
\ttransition: transform 0.3s;
}

#posts-nav li.next-post a:before {
\tright: 0;
\tcontent: \"\\e930\";
}

#posts-nav li.prev-post a:before {
\tleft: 0;
\tcontent: \"\\e92f\"
}

#posts-nav li.next-post a:hover:before { transform: translate3d(5px,-50%,0); }
#posts-nav li.prev-post a:hover:before { transform: translate3d(-5px,-50%,0); }


/* Comments */
.comments { margin: -10px 0 0 0; }

.comments h4 {
\tmargin-bottom: 25px;
\tfont-size: 20px;
\tfont-weight: 500;
\tcolor: #333;
}

.comments h4 span { display: inline-block; font-size: inherit; }

.comment { font-size: 20px; }

.comments .button {
\tmargin: 0 0 10px  0;
\tpadding: 7px 15px;
}

.comments.reviews .button { margin: 0; }

.comments ul {padding-left: 0;}
.comments ul li { display: block; }

.comments ul li,
.comments ul li ul li,
.comments ul li ul li ul li,
.comments ul li ul li ul li {
\tmargin: 50px 0 0 0px;
}

.comments ul li ul { margin: 0 0 0 100px; }

.comment-content p {
\tmargin: 3px 0 0 0;
\tline-height: 26px;
}

.comment-content {
\tcolor: #666;
\tpadding: 0 0 0 100px;
}

.comments ul li ul {
\tborder-left: 1px solid #e0e0e0;
\tpadding-left: 35px;
}

.comments ul li ul li:before {
\tcontent: \"\";
\twidth: 15px;
\theight: 1px;
\tbackground-color: #e0e0e0;
\tdisplay: inline-block;
\tposition: absolute;
\ttop: 30px;
\tleft: -35px;
}

.comments ul li { position: relative; }

.comment-content strong {
\tpadding-right: 5px;
\tcolor: #666;
}

.comment-content span { color: #888; }
body .comment-content p { padding: 5px 0; }

.comments-amount { color: #888; font-weight: 500; }

.avatar {
\tdisplay: inline-block;
\tfloat: left;
\tpadding: 0 17px 0 0;
\tposition: absolute;
\tleft: 0px;
\ttop: -5px;
}

.avatar img {
\tmax-width: 70px;
\tborder-radius: 50%;
}

.comment-by {
\twidth: 100%;
\tpadding-bottom: 8px;
\tpadding-top: 5px;
\tfont-weight: 500;
\tcolor: #333;
}

.comment-by h5 { margin: 0 0 7px 0; }

.comment-by a.reply {
\ttransition: all 0.3s;
}

.comment-by a.reply {
\tdisplay: inline;
\tbackground-color: #f0f0f0;
\tpadding: 5px 16px;
\tline-height: 22px;
\tfont-size: 14px;
\tcolor: #666;
\tfont-weight: 500;
\tposition: absolute;
\tright: 0;
\ttop: 15px;
\tborder-radius: 4px;
}

.comment-by a.reply i {
\tfont-size: 12px;
\tmargin-right: 1px;
}

.comment-by a.reply:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
\tbox-shadow: 0 3px 9px rgba(0,0,0,0.1);
}


.comment-by span.date {
\tcolor: #888;
\tfont-weight: 500;
\tmargin: 0px 0 0 0;
\tfloat: none;
\tdisplay: block;
\ttext-align: left;

}

@media (max-width: 768px) {

\t/* Media Queries for Comments */
\t.comments ul li ul { margin: 0; }
\t.avatar { top: 3px; }

\t.comment-content {
\t    color: #666;
\t    padding: 0 0 0 70px;
\t}

\t.avatar img {
\t\tmax-width: 50px;
\t\tborder-radius: 50%;
\t\ttop: 5px;
\t}

\t.comment-by a.reply {
\t\tposition: relative;
\t\tmargin: 10px 0 0 0;
\t\ttop: 0;
\t\tdisplay: inline-block
\t}

\t/* Media Queries for Blog Post */
\t.blog-post { flex-direction: column; }
\t.blog-post-thumbnail { width: 100%; height: 220px; }
\t#posts-nav li {
\t    position: relative;
\t    width: 100%;
\t}

\t#posts-nav li a { padding: 0 !important; }
\t#posts-nav li a::before { display: none;}
\t#posts-nav li.next-post { text-align: left; margin-bottom: 30px; }
}

/* Blog Widget Tabs */
.widget-tabs {
\tpadding: 0;
\tlist-style: none;
\tmargin-top: 25px;
\tdisplay: block;
}

.widget-content {
\tbox-shadow: 0 3px 9px rgba(0,0,0,0.07);
\tborder-radius: 4px;
\tbackground-color: #fff;
\tposition: relative;
\twidth: 100%;
\toverflow: hidden;
}

.widget-content:before {
\tcontent: \"\";
\twidth: 100%;
\theight: 100%;
\tdisplay: block;
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tz-index: 10;
\tbackground: #fff;
\topacity: 1;
\ttransition: 0.35s ease-in-out;
}

.widget-content img {
\tdisplay: block;
\tobject-fit: cover;
\twidth: 100%;
\theight: 100%;
\tposition: absolute;
\twidth: 100%;
\theight: 100%;
\tz-index: 9;
\topacity: 1;
\ttransition: 0.35s;
\tborder-radius: 5.5px;
}

.widget-text h5 {
\tfont-size: 16px;
\tfont-weight: 600;
\tline-height: 24px;
\tmargin: 0 0 3px 0;
\tcolor: #333;
\ttransition: 0.35s;
}

.widget-text span {
    font-size: 14px;
    color: #888;
    display: inline-block;
    background-color: #f0f0f0;
    border-radius: 4px;
    line-height: 20px;
    padding: 4px 10px;
    margin-top: 3px;
\ttransition: 0.35s;
}

.widget-text {
\tdisplay: block;
\tpadding: 0;
\tposition: relative;
\tz-index: 20;
\tpadding: 30px;
}

.widget-tabs .widget-content {
\tdisplay: table;
}

.widget-tabs .widget-content .widget-text {
\tdisplay: table-cell;
\tvertical-align: middle;
}

.widget-tabs li {
\tmargin-top: 20px;
}

.widget-content:hover:before,
.widget-content.active:before { opacity: 0.6; background: #333; }

.widget-content:hover img,
.widget-content.active img { opacity: 1 }

.widget-content:hover h5,
.widget-content.active h5 { color: #fff; }

.widget-content:hover span,
.widget-content.active span { 
\tbackground: rgba(255,255,255,0.25);
\tcolor: #fff
}


/* Blog Compact Item
------------------------------------- */
.blog-compact-item-container {
\tdisplay: block;
\theight: 100%;
\twidth: 100%;
\tborder-radius: 4px;
\tbackground: transparent;
\ttransform: translate3d(0,0,0);
\ttransition: transform 0.4s;
\tmargin-bottom: 30px;
}

.blog-compact-item-container:hover { transform: translateY(-10px); }

.blog-compact-item {
\tbackground: #ccc;
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.2);
\tborder-radius: 4px;
\theight: 100%;
\tdisplay: block;
\tposition: relative;
\tbackground-size: cover;
\tbackground-repeat: no-repeat;
\tbackground-position: 50%;
\theight: 460px;
\tz-index: 100;
\tcursor: pointer;
\ttransition: 0.4s;
}

@media (max-width: 1366px) { .blog-compact-item { height: 420px; } }

.blog-compact-item img {
\tobject-fit: cover;
\theight: 100%;
\twidth: 100%;
\tborder-radius: 4px;
}

.blog-compact-item:before {
    content: \"\";
    top: 0;
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 9;
    border-radius: 4px;
    background: linear-gradient(to top, rgba(51,51,51,0.8) 0%, rgba(51,51,51,0.7) 35%, rgba(51,51,51,0.3) 60%, rgba(51,51,51,0.3) 100%);
\ttransition: 0.4s;
}

.blog-compact-item-content {
\tposition: absolute;
\tbottom: 32px;
\tleft: 0;
\tpadding: 0 34px;
\twidth: 100%;
\tz-index: 50;
\tbox-sizing: border-box;
}

.blog-compact-item-content h3 {
\tcolor: #fff;
\tfont-size: 20px;
\tpadding: 5px 0;
\tfont-weight: 500;
\tmargin: 2px 0 0 0;
\tline-height: 30px;
}

.blog-compact-item-content span {
\tfont-size: 16px;
\tfont-weight: 300;
\tdisplay: inline-block;
\tcolor: rgba(255,255,255,0.7);
}

.blog-compact-item-content p {
\tfont-size: 16px;
\tfont-weight: 300;
\tdisplay: inline-block;
\tcolor: rgba(255,255,255,0.8);
\tmargin: 7px 0 0 0;
}

span.blog-item-tag {
\tfont-size: 14px;
\tfont-weight: 600;
\tcolor: #333;
\tbackground-color: #fff;
\tborder-radius: 4px;
\tpadding: 5px 12px;
\tline-height: 20px;
\tfont-weight: 400;
\tmargin-bottom: 9px;
\tposition: absolute;
\ttop: 30px;
\tleft: 32px;
\tz-index: 110;
\ttransition: 0.4s;
}

.blog-post-tags {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
\tmargin-bottom: 0;
\tcolor: #fff;
\tfont-size: 14px;
\tfont-weight: 400;
\topacity: 0.9;
}

.blog-post-tags li {
\tdisplay: inline-block;
\tmargin-right: 5px;
}

.blog-post-tags li i {
\tmargin-right: 3px;
\tfont-weight: normal;
\tdisplay: inline-block;
}


/* ---------------------------------- */
/* Contact Page
------------------------------------- */
.contact-location-info {
\tdisplay: flex;
\talign-content: center;
\tjustify-content: center;
\tbackground-color: #fff;
\tbox-shadow: 0 4px 14px rgba(0,0,0,0.03);
}

.contact-location-info .contact-address,
.contact-location-info #single-job-map-container {
\tflex: 1;
}

.contact-location-info #single-job-map-container #singleListingMap {
\tborder-radius: 0 4px 4px 0;
}

.contact-location-info .contact-address {
\tborder: 1px solid #e0e0e0;
\tborder-right: 0;
\tborder-radius: 4px 0 0 4px;
}

.contact-location-info .contact-address {
\tdisplay: flex;
}

.contact-location-info .contact-address > ul {
\talign-self: center;
\tpadding: 40px;
\tmargin: 0;
\tlist-style: none;
\tfont-size: 18px;
\tcolor: #808080;
}

.contact-location-info .contact-address ul li {
\tpadding: 2px 0;
}

.contact-location-info .freelancer-socials {
\tmargin-top: 10px;
\tmargin-left: -8px;
\ttransform: scale(0.9);
}

.contact-address-headline {
\tcolor: #333;
\tfont-weight: 600;
}

.contact-address-headline:after {
\tcontent: \"\";
\theight: 2px;
\twidth: 25px;
\tbackground-color: #66676b;
\tposition: relative;
\tdisplay: block;
\tmargin: 15px 0;
\tborder-radius: 3px;
}

@media (max-width: 768px) {
\t.contact-location-info {
\t\tflex-direction: column;
\t}
\t.contact-location-info .contact-address {
\t\tborder: 1px solid #e0e0e0;
\t\tborder-bottom: none;
\t\tborder-radius: 4px 4px 0 0;
\t}
\t.contact-location-info #single-job-map-container #singleListingMap {
\t\tborder-radius: 0 0 4px 4px;
\t}
}

#contact div input {
\tmargin-bottom: 22px;
}


/* ---------------------------------- */
/* Single Task / Job / Profile
------------------------------------- */
.single-page-section {
\tmargin-bottom: 55px;
\tdisplay: block;
}

.single-page-section p:last-of-type { padding-bottom: 0; margin-bottom: 0; }

.single-page-section h3 {
\tmargin-bottom: 20px;
\tfont-size: 20px;
}
.single-page-section .job-listing h3.job-listing-title { margin-bottom: 0; }

/* -------------------------------------------------------------- */
/*  03. Listings Styles
----------------------------------------------------------------- */

/* ---------------------------------- */
/* Full Width Page Layout
------------------------------------- */
.full-page-container {
\tdisplay: flex;
\twidth: 100%;
\tflex-wrap: wrap;
}

.full-page-sidebar {
\tflex: 0 0 360px;
\tbackground-color: #fafafa;
\tposition: relative;
}

.full-page-sidebar .full-page-sidebar-inner {
\toverflow: auto;
\theight: 100%;
}

.full-page-sidebar .sidebar-container {
\tpadding: 40px;
}

.full-page-sidebar .simplebar-scrollbar {
\twidth: 5px;
}

.full-page-sidebar .sidebar-widget:last-of-type {
\tmargin-bottom: 80px;
}

.full-page-content-container {
\tflex: 1;
\tbackground-color: #fff;
\tpadding: 0;
    overflow: auto;
}

.full-page-content-inner {
\tpadding: 40px;
\tpadding-bottom: 0;
}

.full-page-content-inner .grid-layout {
\twidth: calc(100% + 30px)
}

.full-page-content-inner .grid-layout .job-listing {
    margin: 0 30px 30px 0;
    width: calc(100% * (1/3) - 30px);
}

/* Search Button */
.sidebar-search-button-container {
\tposition: absolute;
\twidth: calc(100% - 15px);
\tbottom: 0;
\tpadding: 40px;
\tpadding-top: 10px;
\tz-index: 100;
\tbackground-color: #fafafa;

}

.sidebar-search-button-container button {
\twidth: calc(100% + 15px);
\tline-height: 46px;
\theight: 46px;
\ttransition: 0.3s;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.1);
}

.sidebar-search-button-container button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
\ttransform: translateY(-2px)
}


/* Small Footer */
.small-footer {
\tborder-top: 1px solid #e0e0e0;
\tpadding-top: 0px;
\twidth: calc(100% + 80px);
\tleft: -40px;
\tposition: relative;
\tpadding: 25px 40px;
\tdisplay: flex;
}

.small-footer strong { color: #333; }

.small-footer-copyrights { flex: 2; }

.small-footer .footer-social-links {
\ttransform: none;
\tflex: 1;
\ttext-align: right;
\tfloat: right;
\tdisplay: inline-block;
\tmargin: 0 -5px 0 0;
\tposition: relative;
\ttop: 2px;
}

.small-footer .footer-social-links li {
\tcolor: #333;
\ttransform: none;
\tfloat: none;
\tmargin: 0 -3px;
}

.small-footer .footer-social-links li a {
\tcolor: #333;
\ttransform: none;
}



/* Full Page With Map
------------------------------------- */
.full-page-map-container {
\tflex: auto;
\tposition: relative;
\tbackground-color: #e5e3df;
}

.full-page-map-container #map {
\tposition: relative;
\tz-index: 30;
}

.full-page-container.with-map .full-page-content-container {
\tflex: 0 0 50vw;
}

/* Sliding Sidebar */
.full-page-sidebar.hidden-sidebar {
\tvisibility: hidden;
\ttransition: 0.4s;
\tposition: relative;
\topacity: 0;
\tmax-width: 0;
}


/*.full-page-container.with-map .full-page-sidebar .sidebar-search-button-container,*/
.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner { width: 360px; }


.full-page-sidebar.hidden-sidebar.enabled-sidebar {
\tvisibility: visible;
\topacity: 1;
\tmax-width: 360px;
}

/* Enable Filter Button */
.enable-filters-button {
\tposition: relative;
\tleft: 48px;
\ttop: 0px;
\tz-index: 100;
\tbackground-color: #fff;
\tcolor: #333;
\tborder-radius: 0 4px 4px 0;
\tbox-shadow: 0 4px 12px rgba(0,0,0,0.1);
\theight: 48px;
\tline-height: 48px;
\tpadding: 0;
\ttransition: 0.3s;
\tmin-width: 126px;
\ttext-align: center;
}

.enable-filters-button span {
\tposition: relative;
\tpadding: 0 15px;
\tbackground-color: #66676b;
\tcolor: #fff;
\twidth: 100%;
\tz-index: 100;
\tborder-radius: 0 4px 4px 0;
\ttransition: 0.3s;
}

/* Filter Button Container */
.filter-button-container {
\tposition: absolute;
\tleft: 40px;
\ttop: 20px;
\twidth: calc(100% - 40px);
\toverflow-x: hidden;
\tpadding: 20px 0;
}

.filter-button-tooltip {
\tposition: absolute;
\twidth: auto;
\tleft: 15px;
\ttop: 24px;
\tz-index: 100;
\tborder-radius: 4px;
\twidth: auto;
\tanimation: tooltip-bounce 2s infinite;
\tmargin-left: 15px;
\twhite-space: nowrap;
\topacity: 0;
\toverflow: visible;
\ttransition: opacity 0.3s;
\tpointer-events: none;
\tpadding: 0 20px;
\tbackground-color: #fff;
\tcolor: #555;
\tbox-shadow: 0 2px 8px rgba(0,0,0,0.1);
\tfont-size: 15.7px;
\tline-height: 48px;
\ttop: 20px;
}

.filter-button-tooltip.tooltip-visible { opacity: 1; }

.filter-button-tooltip:before {
\tcontent: \"\";
\tposition: absolute;
\twidth: 0;
\theight: 0;
\ttop: calc(50% - 3px);
\tcontent: \"\";
\tleft: -3px;
\tbox-sizing: border-box;
\tborder: 5px solid black;
\tborder-color: transparent transparent #fff #fff;
\ttransform-origin: 0 0;
\ttransform: rotate(45deg) translateY(-50%);
\tbox-shadow: -2px 2px 2px 0 rgba(0, 0, 0, 0.04);
}

@keyframes tooltip-bounce {
\t0%, 20%, 50%, 80%, 100% { transform: translateX(0); }
\t40% { transform: translateX(14px); } 
\t60% { transform: translateX(7px); }
}


/* Hover & Active States */
.enable-filters-button:hover i,
.enable-filters-button.active i,
.enable-filters-button:hover span,
.enable-filters-button.active span {
\tbackground-color: #333;
}

.enable-filters-button:hover i:after,
.enable-filters-button:hover i:before,
.enable-filters-button.active i:after,
.enable-filters-button.active i:before {
\tbackground-color: rgba(0,0,0,0.25);
}

.enable-filters-button i {
\tposition: absolute;
\tz-index: 90;
\tleft: -48px;
\theight: 100%;
\tfont-size: 20px;
\tbackground-color: #66676b;
\tcolor: #fff;
\tline-height: 48px;
\ttext-align: center;
\twidth: 48px;
\tborder-radius: 4px 0 0 4px;
\tfont-style: normal;
\tfont-family: \"Feather-Icons\";
\ttransition: 0.3s;
\tbox-shadow: 0 4px 12px rgba(0,0,0,0.1);
}


.enable-filters-button i:after,
.enable-filters-button i:before {
\tposition: absolute;
\tleft: 0;
\tright: 0;
\ttransition: 0.3s;
\tborder-radius: 4px 0 0 4px;
\tbackground-color: rgba(0,0,0,0.1);
}

.enable-filters-button i:after {
\tcontent: \"\\e9d1\";
\topacity: 1;
}

.enable-filters-button.active i:after {
\topacity: 0;
}

.enable-filters-button i:before {
\tcontent: \"\\ea02\";
\topacity: 0;
}
.enable-filters-button.active i:before {
\topacity: 1;
}

.enable-filters-button span.show-text,
.enable-filters-button.active span.hide-text {
\tdisplay: inline-block;
}

.enable-filters-button.active span.show-text,
.enable-filters-button span.hide-text {
\tdisplay: none;
}


/* Location Field on Map */
.location-field-on-map {
\tposition: absolute;
\ttop: 40px;
\tright: 40px;
\twidth: 280px;
\tmax-width: 40%;
\tz-index: 100;
}

.location-field-on-map input {
\tbox-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}



/* Full Page Media Queries
------------------------------------- */
@media (max-width: 3860px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/4) - 30px);
\t}

\t/* Full Page With Map */
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/3) - 30px);
\t}
}

@media (max-width: 2560px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/4) - 30px);
\t}

\t/* Full Page With Map */
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/2) - 30px);
\t}
}

@media (max-width: 1920px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/3) - 30px);
\t}

\t/* Full Page With Map */
\t.full-page-container.with-map .full-page-sidebar { flex: 0 0 340px }
\t.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner { width: 340px; }
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/2) - 30px);
\t}
}

@media (max-width: 1600px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/2) - 30px);
\t}

\t.full-page-sidebar {
\t\tflex: 0 0 340px;
\t}
\t
\t/* Full Page With Map */
\t.full-page-container.with-map .full-page-sidebar { flex: 0 0 320px }
\t.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner { width: 320px; }
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% - 30px);
\t}

\t.full-page-container.with-map .full-page-content-container { flex: 0 0 55vw }
}

@media (max-width: 1365px) {
\t.location-field-on-map {
\t\tleft: 0px;
\t\tright: auto;
\t\twidth: calc(100% - 80px);
\t\tmax-width: calc(100% - 80px);
\t\tmargin: 0 40px;
\t}

\t/* Notify Box Responsive Styles*/
\t.full-page-container .notify-box { margin-bottom: 80px; }
\t.full-page-container .notify-box .sort-by {
\t\tposition: absolute;
\t\tmargin-top: 40px;
\t\tleft: 0;
\t}
\t.full-page-container .notify-box .sort-by .bootstrap-select .dropdown-menu { left: 0; right: auto; }
}


@media (max-width: 1099px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% - 30px);
\t}
\t.full-page-sidebar {
\t\tflex: 0 0 340px;
\t}

\t/* Important Responsive Styles */
\t.full-page-map-container {
\t\torder: -1;
\t\twidth: 100%;
\t\theight: 400px;
\t\tposition: absolute;
\t\ttop: 0;
\t}

\t.full-page-container.with-map {
\t\tpadding-top: 400px;

\t    height: auto !important;
\t    width: 100%;
\t    position: relative;
\t    
\t}

\t.full-page-container.with-map .full-page-sidebar {
\t\tmax-width: 100%;
\t\tvisibility: visible;
\t\topacity: 1
\t}

\t.filter-button-container { display: none; }

\t.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner {
\t\tposition: relative;
\t\twidth: 100%;
\t}

\t.full-page-container.with-map .full-page-content-container {  flex: 1; }

\t.full-page-container,
\t.full-page-sidebar-inner,
\t.full-page-content-container,
\t.full-page-container .full-page-sidebar {
\t\theight: auto !important;
\t}

\t.full-page-container .simplebar-track { display: none; }
}

@media (max-width: 992px) {
\t.location-field-on-map {
    \twidth: calc(100% - 50px);
    \tmax-width: calc(100% - 50px);
    \tmargin: 0 25px;
    \ttop: 25px;
\t}

\t.sidebar-search-button-container,
\t.full-page-sidebar .sidebar-container,
\t.full-page-content-inner { padding: 35px; }
\t.full-page-content-inner { padding-bottom: 0; }

\t.full-page-content-inner .grid-layout .job-listing { width: calc(100% - 30px); }
\t.full-page-sidebar { flex: 0 0 320px; }

\t.full-page-sidebar-inner,
\t.full-page-content-container,
\t.full-page-container .full-page-sidebar {
\t\theight: auto !important;
\t}
}

@media (max-width: 768px) {
\t.location-field-on-map {
    \twidth: calc(100% - 30px);
    \tmax-width: calc(100% - 30px);
    \tmargin: 0 15px;
\t}

\t.sidebar-search-button-container,
\t.full-page-sidebar .sidebar-container,
\t.full-page-content-inner { padding: 40px 15px; }
\t.full-page-content-inner { padding-bottom: 0; }

\t.full-page-content-inner .grid-layout .job-listing { width: calc(100% - 30px); }

\t.full-page-sidebar {
\t\tflex: 1;
\t\twidth: 100%;
\t}

\t.full-page-container {
\t\tdisplay: block;
\t    width: 100%;
\t    flex-wrap: wrap;
\t    height: auto;
\t}

\t.small-footer { display: block; text-align: center; }
\t.small-footer .footer-social-links {
\t\tfloat: none;
\t\tleft: -10px;
\t\tmargin-top: 10px;
\t}

}


/* ---------------------------------- */
/* Job Listing - List Layout
------------------------------------- */
.job-listing {
\tdisplay: block;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 12px rgba(0,0,0,0.12);
\tmargin-bottom: 35px;
\tbackground-color: #fff;
\ttransition: 0.3s;
\tposition: relative;
}

.job-listing:hover {
\tbox-shadow: 0 2px 18px rgba(0,0,0,0.14);
\ttransform: translateY(-4px);
}

.job-listing-details {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: flex-start;
\tpadding: 35px;
\tpadding-bottom: 32px;
}

.job-listing .job-listing-company-logo {
\tflex: 1;
\tmax-width: 55px;
\tmargin-right: 25px;
\tposition: relative;
\ttop: 3px;
}

.job-listing .job-listing-company-logo img {
\tborder-radius: 4px;
\ttransform: translate3d(0,0,0);
}

.job-listing .job-listing-description {
\tflex: 1;
\tpadding-top: 3px;
}

.job-listing .job-listing-description p {
\tmargin: 15px 0 0 0;
\tpadding: 0;
\tcolor: #666;
}

.job-listing h4.job-listing-company {
\tfont-size: 16px;
\tcolor: #808080;
}

.job-listing h3.job-listing-title {
\tfont-size: 20px;
\tcolor: #333;
\tline-height: 30px;
}

.job-listing .job-listing-footer {
\tbackground-color: #f9f9f9;
\tpadding: 20px 35px;
\tborder-radius: 0 0 4px 4px;
\tposition: relative;
}

.job-listing .job-listing-footer ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

.job-listing .job-listing-footer ul li {
\tdisplay: inline-block;
\tmargin-right: 14px;
\tcolor: #777;
}

.job-listing .job-listing-footer ul li:last-child {
\tmargin-right: 0;
}

.job-listing .job-listing-footer ul li i.icon-material-outline-location-on {
\tmargin-right: 0;
}

.job-listing .job-listing-footer ul li i {
\tposition: relative;
\ttop: 1px;
\tmargin-right: 3px;
\tcolor: #777;
}

/* Media Queries for Default List Layout*/
@media (max-width: 768px) {
\t.job-listing .job-listing-company-logo { display: none; }
\t.job-listing .job-listing-title { padding-right: 10%; }
}

/* ---------------------------------- */
/* Job Listing - Compact List Layout
------------------------------------- */
.compact-list-layout {
\tbackground-color: #fff;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 12px rgba(0,0,0,0.12);
}

.compact-list-layout .job-listing {
\tbox-shadow: none;
\tmargin-bottom: 0;
\tpadding: 30px 35px;
\tpadding-right: 80px;
\tborder-radius: 0;
}

.compact-list-layout .job-listing:last-of-type {
\tborder-radius: 0 0 3px 3px;
\toverflow: hidden;
}

.compact-list-layout .job-listing:first-of-type {
\tborder-radius: 3px 3px 0 0;
\toverflow: hidden;
}

.compact-list-layout .job-listing h3 {
\tfont-size: 18px;
\tline-height: 28px;
}

.compact-list-layout .job-listing:nth-child(2n) {
\tbackground-color: #fafafa;
}

.compact-list-layout .job-listing:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 3px;
\theight: 100%;
\tdisplay: block;
\tbackground: #66676b;
\ttransition: 0.3s;
\topacity: 0;
}

.compact-list-layout .job-listing:hover:before {
\topacity: 1;
}

.compact-list-layout .job-listing:hover {
\ttransform: none;
}

.compact-list-layout .job-listing .job-listing-footer {
\tbackground-color: transparent;
\tpadding: 0;
\tmargin-top: 3px;
}

.compact-list-layout .job-listing-details {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 0;
    top: 0;
}

.compact-list-layout .job-listing .job-listing-company-logo {
\tmax-width: 50px;
\tmargin-right: 30px;
\ttop: 0;
}

.compact-list-layout .job-listing .verified-badge {
\ttransform: scale(0.85) translate(8px,8px);
}

.compact-list-layout .job-listing h3 .verified-badge {
\ttransform: scale(0.85) translate(0,0);
\tfont-weight: 500;
\ttop: 1px;
}

.compact-list-layout .job-listing h3 .verified-badge:before {
\ttop: -1px;
}

.compact-list-layout .job-listing span.bookmark-icon {
\ttop: 50%;
\ttransform: translateY(-51%);
}

/* List Layuot Apply Button */
.compact-list-layout .job-listing.with-apply-button {
\tposition: relative;
\tpadding-right: 35px;
}

.list-apply-button {
\tposition: absolute;
    right: 0;
    padding: 10px 20px;
    line-height: 24px;
    position: relative;
    font-size: 16px;
    font-weight: 500;
    display: inline-block;
    transition: all 0.3s;
    border-radius: 4px;
    background: #f0f0f0;
    color: #666;
    text-align: center;
}

.job-listing.with-apply-button:hover .list-apply-button {
    background-color: #66676b;
    color: #fff;
    box-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

/* Alt Styles for Single Company Profile */
.boxed-list .compact-list-layout {
\tbox-shadow: none;
\tmargin-top: 0;
}

.boxed-list .compact-list-layout .job-listing:hover {
\tborder-left: none;
}

.boxed-list .compact-list-layout .job-listing:first-of-type { border-radius: 0; }

/* Media Queries for Grid Layout */
@media (max-width: 768px) {
\t.list-apply-button {
\t    flex: auto;
\t    width: 100%;
\t    margin-top: 15px;
\t}
}


/* ---------------------------------- */
/* Job Listing - Grid Layout
------------------------------------- */
.grid-layout {
\tdisplay: flex;
\tflex-wrap: wrap;
\twidth: calc(100% + 30px);
}

.grid-layout .job-listing {
\tdisplay: flex;
\tflex-direction: column;
\tjustify-content: center;
\tmargin: 0 30px 30px 0;
\twidth: calc(100% * (1/2) - 30px);
\tflex-direction: column;
}

.grid-layout .job-listing-details {
\tflex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 30px;
    padding-right: 40px;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.tasks-list-container.tasks-grid-layout .task-listing .task-listing-details,
\t.grid-layout .job-listing-details { flex-basis: 100px; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid { flex-basis: 100px; }
}
/* IE 11 Fixes - End */

.grid-layout .job-listing-footer {
\tflex-grow: 0;
\tpadding: 20px 30px;
}

.grid-layout .job-listing h3.job-listing-title {
\tfont-size: 18px;
\tline-height: 28px;
}

.grid-layout .job-listing-footer .bookmark-icon {
\ttop: 0;
\tright: 25px;
\ttransform: translateY(-50%) scale(0.96);
}

.grid-layout .job-listing .job-listing-company-logo {
\tmax-width: 56px;
\tmargin-right: 24px;
\ttop: 1px;
\tflex: 0 0 56px;
}

/* Media Queries for Grid Layout */
@media (max-width: 768px) {
\t.full-page-content-inner .grid-layout .job-listing,
\t.grid-layout .job-listing {
\t\tmargin: 0 0 30px 0;
\t\twidth: 100%;
\t}
\t.grid-layout,
\t.full-page-content-inner .grid-layout { width:100%; }

\t.full-page-content-container .simplebar-content {overflow-x: hidden !important;}
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing { width: 100%; }
}

/* ---------------------------------- */
/* Tasks - List Layout
------------------------------------- */
.task-listing {
\tborder-radius: 4px;
\tbox-shadow: 0 2px 12px rgba(0,0,0,0.12);
\tmargin-bottom: 30px;
\tbackground-color: #fff;
\ttransition: 0.3s;
\tposition: relative;
    display: flex;
    justify-content: center;
    cursor: pointer;
}

.task-listing:hover {
\tbox-shadow: 0 2px 18px rgba(0,0,0,0.14);
\ttransform: translateY(-4px);
}

.task-listing-details {
\tpadding: 34px 38px;
\tflex: 1;
}

.task-listing .task-listing-description {
\tflex: 1;
    align-items: center;
    justify-content: center;
}

.task-listing .task-listing-description p {
\tmargin: 15px 0 0 0;
\tpadding: 0;
\tcolor: #666;
}

.task-listing h3.task-listing-title a,
.task-listing h3.task-listing-title {
\tfont-size: 18px;
\tcolor: #333;
\tline-height: 28px;
\tcursor: pointer;
\tfont-weight: 600;
\tpadding-top: 2px;
\ttransition: 0.3s;
}

.task-listing .task-icons {
\tlist-style: none;
\tpadding: 0;
\tmargin: 3px 0 0 -3px;
}

.task-listing .task-icons li {
\tdisplay: inline-block;
\tpadding: 0;
\tmargin: 0;
\tmargin-right: 10px;
\tcolor: #808080;
}

.task-listing .task-icons i {
\tcolor: #909090;
\tfont-size: 18px;
\tposition: relative;
\ttop: 1px;
}

.task-listing .task-icons i.icon-material-outline-desktop-windows {
\tfont-size: 19px;
\ttop: 2px;
}

.task-listing-bid {
\tflex: 0 0 240px;
\tbackground-color: #f8f8f8;
\tposition: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}


.task-listing-bid-inner {
\twidth: 100%;
\tpadding: 35px;
}

.task-listing-bid-inner .button {
\tdisplay: block;
\ttext-align: center;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
\twidth: 100%;
}

.task-listing-bid-inner .button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
}

.task-listing-bid .task-offers {
\tmargin-bottom: 15px;
/*\ttext-align: center;*/
}

.task-listing-bid .task-offers strong {
\tdisplay: block;
\tcolor: #333;
\tfont-weight: 600;
\tline-height: 24px;
}

.task-listing-bid .task-offers span {
\tdisplay: block;
\tcolor: #888;
\tline-height: 24px;
}

/* Task Tags */
.task-tags {
\tdisplay: block;
\tmargin: 23px 0 3px 0;
}

.task-tags span {
\ttransition: 0.3s;
    font-size: 14.7px;
    border-radius: 4px;
    background-color: rgba(102,103,107,.07);
    color: #66676b;
    display: inline-block;
    padding: 6px 15px;
    margin: 2px 0;
    line-height: 24px;
}

/* Compact List */
.compact-list .task-listing {
    border-radius: 0;
    margin-bottom: 0;
    box-shadow: none;
}

.compact-list .task-listing:hover {
    transform: translateY(0);
}

.tasks-list-container.compact-list {
\tbackground-color: #fff;
    border-radius: 4px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
}

.tasks-list-container.compact-list .task-listing {
\talign-items: center;
\tjustify-content: center;
}

.tasks-list-container.compact-list .task-listing:nth-child(2n) {
\tbackground-color: #fafafa;
}

.tasks-list-container.compact-list .task-listing-bid {
\tbackground-color: transparent;
}

.tasks-list-container.compact-list .task-listing:hover:before {
    opacity: 1;
}

.tasks-list-container.compact-list .task-listing:before {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    width: 3px;
    height: 100%;
    display: block;
    background: #66676b;
    transition: 0.3s;
    opacity: 0;
}

.tasks-list-container.compact-list .task-listing:last-of-type {
\tborder-radius: 0 0 3px 3px;
\toverflow: hidden;
}

.tasks-list-container.compact-list .task-listing:first-of-type {
\tborder-radius: 3px 3px 0 0;
\toverflow: hidden;
}

.tasks-list-container.compact-list .task-listing .task-listing-details {
    padding-right: 0;
}

/* Section Styles */
.section .task-listing-details,
.section .task-listing-bid-inner { padding: 27px 35px; }


/* Media Queries for Tasks List */
@media (max-width: 1200px) {
\t.task-listing-bid { flex: 0 0 220px;}
}

@media (min-width: 481px) and (max-width: 768px) {
\t.task-listing-bid {
\t\tflex: 1;
\t\tpadding: 10px 0;
\t}

\t.task-listing { flex-direction: column; }
\t.task-listing-bid-inner { display: flex; margin: 20px 0 0 0; }
\t.tasks-grid-layout .task-listing-bid-inner {margin: 0; }
\t.task-listing-bid-inner .task-offers { flex: 1; }
\t.task-listing-bid-inner .button { height: 100%; width: 30%; }

\t.tasks-list-container.compact-list .task-listing .task-listing-details {
\t\tpadding-right: 35px;
\t\tpadding-bottom: 0;
\t}

\t.tasks-list-container.compact-list .task-listing .task-listing-bid {
\t\tpadding-bottom: 25px;
\t}
\t.task-listing-bid-inner {
\t    width: 100%;
\t    padding: 0 35px;
\t}
}

/* Small Mobile Sizes */
@media (max-width: 768px) {
\t.section .task-listing-details { padding: 25px 30px; }
\t.section .task-listing-bid-inner { padding: 0 30px; }
}

/* Small Mobile Sizes */
@media (max-width: 480px) {

\t.task-listing-bid {
\t\tflex: 1;
\t\tpadding: 30px 0;
\t}

\t.task-listing { flex-direction: column; }

\t.task-listing-bid-inner .task-offers { flex: 1; }
\t.task-listing-bid-inner .button { height: 100%; width: 100%; }

\t.tasks-list-container.compact-list .task-listing .task-listing-details {
\t\tpadding-right: 35px;
\t\tpadding-bottom: 0;
\t}

\t.tasks-list-container.compact-list .task-listing .task-listing-bid {
\t\tpadding-bottom: 35px;
\t}
\t.task-listing-bid-inner {
\t    width: 100%;
\t    padding: 0 35px;
\t}
}


/* ---------------------------------- */
/* Tasks - Grid Layout
------------------------------------- */
.tasks-list-container.tasks-grid-layout {
    display: flex;
    flex-wrap: wrap;
    width: calc(100% + 30px);
}

.tasks-list-container.tasks-grid-layout .task-listing {
    display: flex;
    justify-content: center;
    margin: 0 30px 30px 0;
    width: calc(100% * (1/2) - 30px);
    flex-direction: column;
}


.tasks-list-container.tasks-grid-layout .task-listing-bid {
\tflex: 1;
\tpadding: 0px 0;
\tdisplay: block
}

.tasks-list-container.tasks-grid-layout .task-listing { flex-direction: column; }
.tasks-list-container.tasks-grid-layout .task-listing-bid-inner {
\tdisplay: flex;
\talign-items: center;
\tpadding: 18px 32px;
}

.tasks-list-container.tasks-grid-layout .task-listing-bid-inner .task-offers {
\tflex: 1;
\tposition: relative;
\ttop: 5px;
}

.tasks-list-container.tasks-grid-layout .task-listing-bid-inner .button { height: 100%; width: 45%; }

.tasks-list-container.tasks-grid-layout  .task-listing .task-listing-details {
\tdisplay: flex;
    align-items: center;
\tpadding: 28px 32px;
}

/* Media Queries for Tasks List */
@media (max-width: 1240px) {
\t.tasks-list-container.tasks-grid-layout .task-listing-bid-inner { display: block; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid { padding: 20px 35px; padding-bottom: 30px; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid-inner { padding: 0; }
\t.tasks-list-container.tasks-grid-layout .task-listing { flex-direction: column; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid-inner .task-offers { flex: 1; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid-inner .button { height: 100%; width: 100%; }
}

@media (max-width: 768px) {
\t.tasks-list-container.tasks-grid-layout { width: 100%; }
\t.tasks-list-container.tasks-grid-layout .task-listing { margin: 0 0 30px 0; width: 100%; }
\t.tasks-list-container.compact-list .task-listing-bid,
\t.tasks-list-container.compact-list .task-listing-details { width: 100%; }

}

/* Full Page Media Queries */
@media (max-width: 3860px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100% * (1/4) - 30px); } 
}

@media (max-width: 2560px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100% * (1/3) - 30px); }
}

@media (max-width: 1600px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100% * (1/2) - 30px); }
}

@media (max-width: 1099px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100% - 30px); }
}

@media (max-width: 992px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100%); }
}


/* ---------------------------------- */
/* Freelancers - Grid Layout
------------------------------------- */
.freelancers-container {
\tdisplay: flex;
\tflex-wrap: wrap;
\twidth: calc(100% + 30px);
}

.freelancer {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 30px 30px 0;
    width: calc(100% * (1/2) - 30px);
    border-radius: 4px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
    background-color: #fff;
    transition: 0.3s;
    position: relative;
    cursor: default;
}

.freelancer:hover {
    box-shadow: 0 2px 18px rgba(0,0,0,0.14);
    transform: translateY(-4px);
}

.freelancer .bookmark-icon {
\tcursor: pointer;
}

.freelancer-overview {
\ttext-align: center;
\tpadding: 38px 20px;
\tflex-grow: 1;
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: center;
}

.freelancer-overview-inner {
\tflex: 1;
}

.freelancer-overview .freelancer-avatar {
\twidth: 110px;
\tmargin: 0 auto;
\tposition: relative;
}

.freelancer-overview .freelancer-avatar img {
\twidth: 100%;
\tborder-radius: 50%;
\tcursor: pointer;
}

.freelancer-overview .freelancer-avatar .verified-badge {
\tposition: absolute;
\tbottom: 0;
\tright: 0;
}

.freelancer-name {
\tmargin-top: 19px;
}

.freelancer-rating {
\tmargin-top: 5px;
\tmargin-bottom: -10px;
}

.freelancer-name h4,
.freelancer-name h4 a {
\tfont-size: 18px;
\tfont-weight: 600;
\tcolor: #333;
\tcursor: pointer;
}

.freelancer-name img.flag {
\theight: 15px;
\tborder-radius: 3px;
\tposition: relative;
\ttop: -1px;
\tdisplay: inline-block;
\tbox-shadow: 0 0 3px rgba(0,0,0,0.2);
\tmargin-left: 4px;
\tcursor: default
}

.freelancer-name span {
\tcolor: #888;
}

.freelancer-details {
\tpadding: 35px;
\tbackground-color: #fafafa;
\tflex-grow: 0;
}

.freelancers-grid-layout .freelancer-details { border-radius: 0 0 4px 4px; }

.freelancers-grid-layout .freelancer-details a.button {
\tdisplay: block;
\ttext-align: center;
\twidth: 100% !important;
\ttransition: 0.3s;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.1);
}

.freelancer-details a.button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.2);
}

.freelancer-details-list ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0 0 5px 0;
\tfont-size: 14.7px;
}

.freelancer-details-list ul li {
\tdisplay: inline-block;
\tmargin-right: 25px;
\tline-height: 23px;
\tcolor: #808080;
\tmargin-bottom: 15px;
}

.freelancer-details-list ul li:last-child {
\tmargin-right: 0;
}

.freelancer-details-list ul li strong {
\tdisplay: block;
\tcolor: #333;
}

.freelancer-details-list ul li strong i {
\tposition: relative;
\ttop: 1px;
\tmargin-right: -1px;
\tmargin-left: -2px;
}


/* Detail Item */
.freelancer-detail-item {
\tdisplay: inline-block;
\tmargin: 2px 10px 5px 0;
}

.freelancer-detail-item a,
.freelancer-detail-item {
\tcolor: #888;
}

.freelancer-detail-item a:hover {
\tcolor: #66676b;
}

.freelancer-detail-item i {
\tposition: relative;
\ttop: 2px;
\tmargin-right: 3px;
}


/* Media Queiers for Freelancers List */
@media (max-width: 1366px) {
\t.freelances-grid-layout .freelancer-overview .freelancer-avatar { width: 100px; }
}

@media (max-width: 768px) {
\t.freelances-grid-layout.freelancers-container { width: 100%; }
\t.freelances-grid-layout .freelancer { margin: 0 0 30px 0; width: 100%; }
\t.freelancers-container.freelancers-grid-layout { width: 100%; }
\t.freelancers-container.freelancers-grid-layout .freelancer { width: 100%; margin-right: 0; }
}

/* Full Page Media Queiers for Freelancers List */
@media (max-width: 2560px) {
\t.full-page-container .freelancer { width: calc(100% * (1/4) - 30px); }
}

@media (max-width: 1920px) {
\t.full-page-container .freelancer { width: calc(100% * (1/3) - 30px); }
}

@media (max-width: 1366px) {
\t.full-page-container .freelancer { width: calc(100% * (1/2) - 30px); }
}

@media (max-width: 1099px) {
\t.full-page-container .freelancers-container { width: 100%; }
\t.full-page-container .freelancer { width: 100%; margin-right: 0; }
}

/* ---------------------------------- */
/* Freelancers - List Layout
------------------------------------- */
.freelancers-container.freelancers-list-layout { width: 100%; }

.freelancers-list-layout .freelancer { 
\tmargin: 0 0 30px 0;
\twidth: 100%;
    flex-direction: row;
    justify-content: center;
}


.freelancers-list-layout .freelancer-overview {
\ttext-align: left;
\tpadding: 45px 40px;
\tflex-grow: 1;
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: center;
}

.freelancers-list-layout .freelancer-overview-inner {
\tflex: 1;
\tdisplay: flex;
\talign-items: center;
}

.freelancers-list-layout .freelancer-details {
\tpadding: 45px 40px 45px 0;
\tbackground-color: transparent;
\tflex: 0 0 360px;
}

.freelancers-list-layout .freelancer-overview .freelancer-avatar {
    width: 100px;
    margin: 0;
} 

.freelancers-list-layout .freelancer-overview .freelancer-name {
    text-align: left;
    margin: 0 0 0 30px;
} 

.freelancers-list-layout .freelancer-details a.button {
    display: block;
    text-align: center;
    min-width: 50%;
    max-width: 100%;
    width: auto !important;
    transition: 0.3s;
    float: right;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
} 

.freelancers-list-layout .freelancer-details a.button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
} 

.freelancers-list-layout .bookmark-icon {
\tdisplay: none;
} 

.freelancers-list-layout .freelancer-details-list ul {
\tfloat: right;
\tdisplay: block
} 

.freelancers-list-layout .freelancer-details-list ul li {
\tmargin-left: 25px;
\tmargin-right: 0;
\tfloat: right;
} 

/* Freelancers Compact List */
.compact-list.freelancers-list-layout .freelancer {
    border-radius: 0;
    margin-bottom: 0;
    box-shadow: none;
}

.compact-list.freelancers-list-layout .freelancer:hover {
    transform: translateY(0);
}

.compact-list.freelancers-list-layout {
\tbackground-color: #fff;
    border-radius: 4px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
}

.compact-list.freelancers-list-layout .freelancer:nth-child(2n) { background-color: #fafafa; }

.compact-list.freelancers-list-layout .freelancer:hover:before  { opacity: 1; }

.compact-list.freelancers-list-layout .freelancer:before {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    width: 3px;
    height: 100%;
    display: block;
    background: #66676b;
    transition: 0.3s;
    opacity: 0;
}

.compact-list.freelancers-list-layout .freelancer:last-of-type {
\tborder-radius: 0 0 3px 3px;
\toverflow: hidden;
}

.compact-list.freelancers-list-layout .freelancer:first-of-type {
\tborder-radius: 3px 3px 0 0;
\toverflow: hidden;
}


/* Media Queiers for Freelancers List Layout */
@media (max-width: 1366px) {
\t.freelancers-list-layout .freelancer-overview .freelancer-avatar { width: 100px; }
}

@media (max-width: 1240px) {

\t.freelancers-list-layout .freelancer { flex-direction: column; }
\t.freelancers-list-layout .freelancer-details {
\t\tflex: 1;
\t\tpadding: 35px 40px;
\t\tbackground-color: #fafafa;
\t}

\t.freelancers-list-layout .freelancer-details-list ul { float: left; }

\t.freelancers-list-layout .freelancer-details-list ul li {
\t    margin-left: 0;
\t    margin-right: 25px;
\t    float: left;
\t}

\t.freelancers-list-layout .freelancer-details a.button {
\t    float: none;
\t    width: 100% !important;
\t}

\t.freelancers-list-layout .freelancer-overview .freelancer-avatar { width: 90px; }

\t/* Compact Layout */
\t.compact-list.freelancers-list-layout .freelancer-details {
\t    background-color: transparent;
\t    padding-top: 0;
\t}
}

@media (max-width: 768px) {
\t.freelancers-list-layout .freelancer-overview,
\t.freelancers-list-layout .freelancer-details {
\t\tpadding: 30px;
\t}

\t.freelancers-list-layout .freelancer-overview .freelancer-avatar { width: 80px; }

\t.freelancers-list-layout .star-rating:before {
\t    display: block;
\t    float: none;
\t    text-align: center;
\t    max-width: 40px;
\t    margin-bottom: 4px;
\t}
}

/* ---------------------------------- */
/* Browse Companies
------------------------------------- */

/* Letters List */
.letters-list {
\twidth: 100%;
\ttext-align: center;
\tbackground-color: #f4f4f4;
\tborder-radius: 4px;
\tpadding: 20px;
}

.letters-list a {
\tdisplay: inline-block;
\tfont-size: 18px;
\tcolor: #333;
\theight: 40px;
\twidth: 40px;
\tline-height: 40px;
\tbackground-color: transparent;
\tborder-radius: 4px;
\ttransition: 0.3s;
\tmargin: 0 -2px;
}

.letters-list a.current {
\tmargin-right: 0;
\tcolor: #fff;
\tfont-weight: 600;
\tbackground-color: #66676b;
\tbox-shadow: 0 2px 8px rgba(102,103,107,0.25);
}

.letters-list a:hover {
\tcolor: #fff;
\tbackground-color: #333;
\tfont-weight: 600;
\tbox-shadow: 0 2px 8px rgba(0,0,0,0.2);
}

/* Companies List */
.companies-list {
\tdisplay: flex;
    flex-wrap: wrap;
\tmargin-top: 30px;
\twidth: calc(100% + 30px);
}

.companies-list .company {
\twidth: calc(33.3% - 30px);
\tmargin: 0 30px 30px 0;
\tflex-grow: 1;
\ttext-align: center;
\t/*border-right: 1px solid #e0e0e0;
\tborder-bottom: 1px solid #e0e0e0;*/
\tpadding: 50px 0;
\tbackground-color: #fff;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 10px rgba(0,0,0,0.1);
\ttransition: 0.3s;
}

.companies-list .company:hover {
\ttransform: translateY(-3px);

}

@media (min-width: 993px) {
\t.companies-list .company:nth-child(3n) { border-right: none; }
\t.companies-list .company:nth-last-child(-n+3) { border-bottom: none; }
}

.companies-list .company img {
\tmax-width: 120px;
\tmax-height: 60px;
\tdisplay: inline-block;
\tmargin: 0;
\ttransform: translate3d(0,0,0);
}

.companies-list .company .company-logo {
\theight: 60px;
\tdisplay: flex;
\tdisplay: flex;
\talign-items: center;
\tjustify-content: center;
\tmargin-bottom: 30px;
}

.companies-list .company h4 {
\tcolor: #333;
\tfont-size: 18px;
\tfont-weight: 600;
\ttransition: 0.3s;
\tdisplay: block;
}

.companies-list .company span {
\tcolor: #888;
}

.companies-list .company .star-rating {
\tmargin-top: 5px;
}

.not-rated,
.company-not-rated {
    border-radius: 4px;
    background-color: #f0f0f0;
    color: #888;
    font-size: 14px;
    line-height: 15px;
    font-weight: 600;
    padding: 7px 9px;
    display: inline-block;
    margin-top: 8px;
    text-align: center;
}

/* Media Queries for Companies List */
@media (max-width: 1366px) {
\t.letters-list a {
\t\tfont-size: 16px;
\t\theight: 36px;
\t\twidth: 36px;
\t\tline-height: 36px;
\t\tmargin: 0 -1px;
\t}
}

@media (max-width: 992px) {
\t.companies-list .company { \twidth: calc(50% - 30px); }
}

@media (max-width: 768px) {
\t.companies-list .company { width: 100%; }
}

/* -------------------------------------------------------------- */
/*  04. User Interface Elements
----------------------------------------------------------------- */

/* ---------------------------------- */
/* Buttons
------------------------------------- */

button { vertical-align: middle; }

span.button,
button.button,
input[type=\"button\"],
input[type=\"submit\"],
a.button {
\tbackground-color: #66676b;
\ttop: 0;
\tpadding: 10px 20px;
\tline-height: 24px;
\tcolor: #fff;
\tposition: relative;
\tfont-size: 16px;
\tfont-weight: 500;
\tdisplay: inline-block;
\ttransition: all 0.2s ease-in-out;
\tcursor: pointer;
\toverflow: hidden;
\tborder: none;
\tborder-radius: 4px;
    box-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

/* Icons Aligment*/
.button i[class^=\"icon-material\"],
button.button i[class^=\"icon-material\"],
input[type=\"button\"] i[class^=\"icon-material\"],
input[type=\"submit\"] i[class^=\"icon-material\"],
a.button i[class^=\"icon-material\"] {
\tfont-size: 18px;
\theight: 0;
\twidth: 18px;
\tline-height: 0;
\ttop: 2px;
\tposition: relative;
\tdisplay: inline-block;
\tmargin-left: 3px;
}

.button i[class^=\"icon-feather\"],
button.button i[class^=\"icon-feather\"],
input[type=\"button\"] i[class^=\"icon-feather\"],
input[type=\"submit\"] i[class^=\"icon-feather\"],
a.button i[class^=\"icon-feather\"] {
\tfont-size: 16px;
\theight: 0;
\twidth: 16px;
\tline-height: 0;
\ttop: 2px;
\tposition: relative;
\tdisplay: inline-block;
\tmargin-left: 3px;
}

/* Dark Style */
button.button.dark,
input[type=\"button\"].dark,
input[type=\"submit\"].dark,
a.button.dark {
\tbackground-color: #333;
\tcolor: #fff;
\tbox-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Dark Style */
button.button.gray,
input[type=\"button\"].gray,
input[type=\"submit\"].gray,
a.button.gray {
\tbackground-color: #eaeaea;
\tcolor: #666;
\tbox-shadow: none;
}

button.button.gray:hover,
input[type=\"button\"].gray:hover,
input[type=\"submit\"].gray:hover,
a.button.gray:hover {
\tbackground-color: #e0e0e0;
}


body .button i.icon-material-outline-arrow-right-alt {
\tfont-size: 22px;
\ttop: 4px;
}

.button.full-width {
\tmax-width: 100%;
\twidth: 100%;
\ttext-align: center;
\tdisplay: block;
}

.button.big {
\tfont-size: 18px;
\tpadding: 13px 22px;
}

body .button.big i {
\tfont-size: 22px;
\ttop: 3px;
\tposition: relative;
\t
}

/* Slide Out Button */
.button.button-slide-out span {
\ttransform: translateY(0px);
\topacity: 1;
\ttransition: 0.3s;
}

.button.button-slide-out:hover span {
\ttransform: translateY(-10px);
\topacity: 0;
\tdisplay: inline-block;
\ttransition: 0.3s;
}

.button.button-slide-out i {
\ttransform: translateY(calc(-50% + 10px));
\topacity: 0;
\tdisplay: inline-block;
\ttransition: 0.3s;
\tposition: absolute;
\tleft: 0;
\tright: 0;
\tfont-size: 18px;
\ttop: 50%;
\theight: 20px;
}

.button.button-slide-out:hover i {
\ttransform: translateY(calc(-50% + 0px));
\topacity: 1;
}


/* Move on Hover */
.move-on-hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.1);
\ttransform: translateY(0);
\ttransition: 0.3s;
}

.move-on-hover:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.2);
\ttransform: translateY(-2px)
}

/* Centered Button */
.centered-button {
\ttext-align: center;
\tdisplay: block
}

.centered-button .button {
\tmargin: 0 auto;
}


/* Bookmark Button */
span.bookmark-icon {
\tfont-size: 20px;
\tposition: absolute;
\tz-index: 101;
\tright: 35px;
\ttop: 35px;
\tcursor: pointer;
\tbackground-color: #eee;
\tcolor: #c0c0c0;
\tdisplay: block;
\theight: 39px;
\twidth: 39px;
\tborder-radius: 50%;
\ttransition: all 0.4s;
\tline-height: 27px;
}

.bookmark-icon.bookmarked { animation: bookmarked-shadow 0.3s; }

@keyframes bookmarked-shadow {
  0% { box-shadow: 0 0 0 0 rgba(254,179,66,0.8); }
  100% { box-shadow: 0 0 0 10px rgba(0,0,0,0); }
}


.bookmark-icon:before {
\ttransition: transform 0.4s cubic-bezier(.8,-.41,.19,2.5);
\tfont-family: \"Material-Icons\";
\tposition: absolute;
\tright: 0;
\tleft: 0;
\ttext-align: center;
\ttop: 6px;
\tcontent: \"\\e988\";
}

.bookmark-icon:hover {
\tbackground-color: #333;
\tcolor: #fff;
}

.bookmark-icon.bookmarked {
\tbackground-color: #feb342;
\tcolor: #fff;
}

.bookmark-icon.bookmarked:before {
\tanimation: bookmark-icon 0.5s;
}

@keyframes bookmark-icon {
  0% {
\t -webkit-transform: scale(0.8);
\t\t\t\ttransform: scale(0.8);
  }
  50% {
\t -webkit-transform: scale(1.2);
\t\t\t\ttransform: scale(1.2);
  }
  100% {
\t -webkit-transform: scale(1);
\t\t\t\ttransform: scale(1);
  }
}

/* Bookmark Button */
.bookmark-button {
\tbackground-color: #404040;
\tdisplay: inline-block;
\tpadding: 0;
\tposition: relative;
\theight: 44px;
\tline-height: 44px;
\tcolor: #fff;
\tpadding: 0 15px;
\tpadding-left: 59px;
\tborder-radius: 4px;
\ttransition: 0.4s;
\tcursor: pointer;
\tbox-shadow: 0 3px 12px rgba(0,0,0,0.1);
}

.bookmark-button .bookmark-icon,
.bookmark-button:hover .bookmark-icon { background-color: rgba(255,255,255,0.05) }

.bookmark-button .bookmark-icon {
\tborder-radius: 4px;
\tposition: absolute;
\tleft: 0;
\tright: auto;
\ttop: auto;
\theight: 44px;
\twidth: 44px;
\tborder-radius: 4px 0 0 4px;
\tpointer-events: none;
\ttransition: 0.4s;
\tanimation: none;
}

.bookmark-button .bookmark-icon:before {
\ttop: 8px;
\tcolor: #fff;
\ttransition: 0.4s;
\tfont-size: 18px;
}

.bookmark-button.bookmarked {
\tbackground-color: #feb342;
    color: #fff;
\tbox-shadow: 0 3px 12px rgba(254,179,66,0.2);
}

.bookmark-button.bookmarked .bookmark-icon:before,
.bookmark-button:hover .bookmark-icon:before {
    color: #fff;
}

.bookmark-button.bookmarked .bookmark-icon,
.bookmark-button.bookmarked:hover .bookmark-icon {
\tbackground-color: rgba(255,255,255,0.16)
}
.bookmark-button.bookmarked .bookmarked-text,
.bookmark-button .bookmark-text { display: block }

.bookmark-button.bookmarked .bookmark-text,
.bookmark-button .bookmarked-text { display: none; }


/* ---------------------------------- */
/* Button with sliding icon
------------------------------------- */
.button-sliding-icon { text-align: center; }
.button-sliding-icon i {
\topacity: 0;
\tmax-width: 0;
\ttransition: 0.25s;
\tdisplay: inline-block;
\ttransform: translateX(-20px);
}

.button-sliding-icon:hover i {
\tmax-width: 20px;
\topacity: 1;
\ttransform: translateX(0);
}


/* For buttons */
.button.button-sliding-icon {
\tpadding-left: 20px;
\tpadding-right: 10px;
}

.button.button-sliding-icon:hover {
\tpadding-right: 20px;
}

.button.button-sliding-icon i {
\tpadding-right: 5px;
}

.button.button-sliding-icon:hover i {
\tmax-width: 20px;
\topacity: 1;
\ttransform: translateX(0);
}



/* ---------------------------------- */
/* List Styles
------------------------------------- */
.list-3,
.list-2,
.list-1 {
\tpadding: 3px 0 0 0;
\tfont-size: 16px;
}

.list-3 li,
.list-2 li,
.list-1 li {
\tlist-style: none;
\tmargin: 10px 0;
\tline-height: 27px;
\tmargin-left: 20px;
\tposition: relative;
}

.list-3 li:first-child,
.list-2 li:first-child,
.list-1 li:first-child {
\tmargin-top: 0;
}

.list-4 li:before,
.list-3 li:before,
.list-2 li:before,
.list-1 li:before {
\tmargin: 0;
\tposition: relative;
\tcolor: #66676b;
\tfloat: left;
\tmargin-left: -20px;
\tdisplay: block;
}

.list-1.gray li:before {
\tcolor: #777;
}

.list-2 li,
.list-2 li { margin-left: 28px; }

.list-3 li:before,
.list-2 li:before {
\tfont-family: \"Material-Icons\"; 
\tcontent: \"\\e928\";
\tfont-size: 18px;
\tfont-weight: 600;
\tposition: relative;
\ttop: -2px;
\tmargin-left: -28px;
}

.list-3 li:before {
\tcontent: \"\\e912\";
\tfont-family: \"Feather-Icons\";
\tfont-weight: 500;
\tfont-size: 18px;
}

.list-1 li:before {
\tcontent: \"\";
\theight: 6px;
\twidth: 6px;
\tbackground-color: #66676b;
\tborder-radius: 2px;
\tposition: relative;
\ttop: 9px;
}

/* Numbered Style */
.numbered ol {
\tcounter-reset: li;
\tlist-style: none;
\tpadding: 0;
\tmargin-left: 18px;
\tdisplay: inline-block;
\tfont-size: 16px;
}

.numbered ol li {
\tdisplay: inline-block;
\tpadding: 6px 0;
\twidth: 100%;
}

.numbered ol > li::before {
\tcontent: counter(li);
\tcounter-increment: li;
\tfont-size: 16px;
\tline-height: 35px;
\twidth: 36px;
\theight: 36px;
\tdisplay: inline-block;
\tborder: 1px solid #333;
\tborder-radius: 50%;
\ttext-align: center;
\tmargin: 0;
\tmargin-left: 0;
\tfont-weight: 500;
\tcolor: #333;
\tposition: relative;
\tfloat: left;
\tleft: -18px;
\tfont-size: 15px;
\ttransform: translateY(-10%);
}

.numbered.color ol > li::before {
\tborder: 1px solid #66676b;
\tcolor: #66676b;
}

.numbered.color.filled ol > li::before {
\tborder: 1px solid #66676b;
\tcolor: #fff;
\tbackground-color: #66676b;
}


/* ---------------------------------- */
/* Marks
------------------------------------- */
mark {
\tbackground-color: #fcf8e3;
\tcolor: #8a803e;
\tpadding: 1px 5px;
}

mark.color {
    background-color: #66676b;
    border-radius: 4px;
    color: #fff;
}

/* ---------------------------------- */
/* Notification Boxes
------------------------------------- */
#result .success,
.notification {
\tline-height: 24px;
\tmargin-bottom: 15px;
\tposition: relative;
\tpadding: 20px 26px;
\tpadding-right: 50px;
\tborder-radius: 3px;
}

.notification p { margin: 0; font-size: 15px; }

#result .success,
.notification.success {
\tbackground-color: #EBF6E0;
}

#result .success,
.notification.success,
.notification.success a,
.notification.success strong {
\tcolor: #5f9025;
}

.notification.error {
\tbackground-color: #ffe9e9;
}
.notification.error,
.notification.error a,
.notification.error strong {
\tcolor: #de5959;
}

.notification.warning {
\tbackground-color: #FBFADD;
}
.notification.warning,
.notification.warning a,
.notification.warning strong {
\tcolor: #8f872e;
}

.notification.notice h4 { font-size: 19px; margin: 3px 0 15px 0; }
.notification.notice h4,
.notification.notice,
.notification.notice a,
.notification.notice strong {
\tcolor: #3184ae
}

.notification.notice {
\tbackground-color: #E9F7FE;
}

.notification.notice.large{
\tpadding: 32px 36px;
}

.notification strong { font-weight: 700; }
.notification a { text-decoration: underline; }


body .notification strong { border: none; }

.notification.success .close,
.notification.error .close,
.notification.warning .close,
.notification.notice .close {
\tpadding: 0px 9px;
\tposition: absolute;
\tright: 0;
\ttop: 22px;
\tdisplay: block;
\theight: 8px;
\twidth: 8px;
\tcursor: pointer;
}

.notification.notice p span i { font-weight: 500; }
.notification a.button {
\tfloat: right;
\tcolor: #fff;
\tmargin-top: 3px;
}

.notification.notice a.button { background-color: #388fc5; }
.notification.warning a.button { background-color: #dfbe51; }
.notification.error a.button { background-color: #d34c4c; }
.notification.success a.button { background-color: #79ba38; }

.notification.closeable a.close:before {
\tcontent: \"\\ea02\";
\tfont-family: \"Feather-Icons\";
\tposition: absolute;
\tright: 25px;
\ttop: 0;
\tcursor: pointer;
\tfont-weight: 600;
}


/* ---------------------------------- */
/* Tables
------------------------------------- */
table.basic-table {
\twidth: 100%;
\tborder-collapse: separate;
\tborder-spacing: 0;
\tborder:none;
\tmargin-bottom: 15px;
}

table.basic-table th {
\tbackground-color: #66676b;
\ttext-align: left;
\tcolor: #fff;
\tvertical-align: top;
\tfont-weight: 500;
}

table.basic-table th:first-child { border-radius: 4px 0 0 4px; }
table.basic-table th:last-child { border-radius: 0 4px 4px 0; }


table.basic-table th,
table.basic-table td {
\tpadding: 15px 28px;
}

table.basic-table tr:nth-child(odd) {
\tbackground-color: #f4f4f4;
}

table.basic-table { margin-bottom: 0; }


@media screen and (max-width: 600px) {

\ttable { border: 0; }
\ttable th { display: none; }

\ttable tr {
\t\tdisplay: block;
\t\tmargin-bottom: 0;
\t}
\ttable td {
\t\tborder-bottom: 1px solid #ddd;
\t\tdisplay: block;
\t\tfont-size: 14px;
\t\ttext-align: right;
\t}

\ttable td:before {
\t\tcontent: attr(data-label);
\t\tfloat: left;
\t\tfont-weight: 600;
\t}

\ttable td:last-child { border-bottom: 0; }
}

/* ---------------------------------- */
/* Accordion
------------------------------------- */
.accordion {
\tfont-size: 16px;
    width: 100%;
    margin: 0 auto;
    border-radius: 4px;
    overflow: hidden;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
}

.accordion .accordion {
\tborder-radius: 0px;
\tbox-shadow: none;
}

.accordion-header,
.accordion-body {
\tbackground: #fff;
}

.accordion-header {
\tpadding: 15px 25px;
\tbackground: #66676b;
\tcolor: #fff;
\tcursor: pointer;
\tfont-size: 16px;
\ttransition: all .3s;
\tposition: relative;
\tbox-shadow: 0 -1px 0 rgba(255,255,255,0.15);
}

.accordion .accordion .accordion-header {
\tbox-shadow: 0 -1px 0 rgba(0,0,0,0.07);
}

.accordion-header:before {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tbackground-color: #fff;
\tcontent: \"\";
\topacity: 0;
\ttransition: 0.3s;
}

.accordion-body__contents p:last-child {
\tmargin-bottom: 0;
\tpadding-bottom: 0;
}

/*.accordion__item.active .accordion-header:before,
.accordion-header:hover:before { opacity: 0.04; }*/

.accordion-body {
\tbackground: #fff;
\tcolor: #666;
\tdisplay: none;
}

.accordion-body__contents {
\tpadding: 25px;
\tfont-size: 16px;
\tline-height: 28px;
}

.accordion__item.active:last-child .accordion-header { border-radius: none; }
.accordion:first-child > .accordion__item > .accordion-header { border-bottom: 1px solid transparent; }

.accordion__item > .accordion-header:after {
\tcontent: \"\\e957\";
\tfont-family: Material-Icons;
\tfont-size: 19px;
\tfloat: right;
\tposition: relative;
\ttop: -1px;
\ttransition: .3s all;
\ttransform: rotate(0deg);
}

.accordion__item.active > .accordion-header:after { transform: rotate(-180deg); }
.accordion__item.active .accordion .accordion-header:before { opacity: 0 }

.accordion__item .accordion__item .accordion-header {
\tbackground: #f7f7f7;
\tcolor: #666;
}


/* ---------------------------------- */
/* Tabs
------------------------------------- */
.tabs ul {
\tpadding: 0;
\tlist-style: none;
\tmargin: 0;
}

.tabs {
\tz-index: 15px;
\tposition: relative;
\tbackground: #FFFFFF;
\twidth: 100%;
\tborder-radius: 4px;
\tbox-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
\tbox-sizing: border-box;
\tmargin: 0;
\toverflow: hidden;
}

.tabs-header {
\tposition: relative;
\tbackground: #66676b;
\toverflow: hidden;
}

.tabs-header .tab-hover {
\tposition: absolute;
\tbottom: 0;
\tleft: 0;
\tbackground: #fff;
\twidth: auto;
\theight: 100%;
\ttransition: 0.3s ease;
\topacity: 0.08;
\tz-index: 90;
}

.tabs-header ul {
\tdisplay: flex;
\tflex-direction: row;
\tflex-wrap: wrap;
\twidth: calc(100% - 100px);
\tposition: relative;
\tz-index: 100;
}

.tabs-header li { transition: 0.3s ease; }

.tabs-header a {
\tz-index: 1;
\tdisplay: block;
\tbox-sizing: border-box;
\tpadding: 15px 25px;
\tcolor: #fff;
\tfont-weight: 500;
\ttext-decoration: none;
}

.tabs-nav {
\tposition: absolute;
\ttop: 0;
\tright: 0;
\tdisplay: flex;
\talign-items: center;
\theight: 100%;
\tpadding: 0 15px;
\tcolor: #fff;
\tuser-select: none;
\tfont-size: 19px;
}

.tabs-nav i {
\tcursor: pointer;
\tdisplay: inline-block;
\tpadding: 0;
\theight: 30px;
\twidth: 30px;
\tline-height: 30px;
\tbackground-color: rgba(255,255,255,0.1);
\tborder-radius: 4px;
\ttext-align: center;
\tposition: relative;
\tz-index: 101;
\tmargin-left: 5px;
\ttransition: 0.3s;
}

.tabs-nav i:hover {
\tbackground-color: rgba(255,255,255,0.15);
}

.tabs-content {
\tposition: relative;
\ttransition: 0.3s ease;
\toverflow: hidden;
}

.tabs-content .tab {
\tpadding: 25px;
}

.tabs-content .tab p:last-child {
\tmargin-bottom: 0;
\tpadding-bottom: 0;
}

.tabs-content:after {
\tcontent: '';
\tposition: absolute;
\tbottom: -1px;
\tleft: 0;
\tdisplay: block;
\twidth: 100%;
\theight: 1px;
\tbox-shadow: 0 0 20px 10px #FFFFFF;
}

.tabs-content .tab { display: none; }
.tabs-content .tab.active {  display: block; }

@media (max-width: 992px) {
\t.tabs-nav { display: none; }
\t.tabs-header ul { flex-direction: column; width: 100%; }
\t.tab-hover { display: none; }
\t.tabs-header a { box-shadow: 0 -1px 0 rgba(255,255,255,0.15); }
\t.tabs-header ul li.active a {
\t\tbackground-color: rgba(255,255,255,0.07);
\t}
}


/* ---------------------------------- */
/* Copy to clipboard
------------------------------------- */
.copy-url {
\tdisplay: flex;
}

.copy-url input {
\tborder-radius: 4px 0 0 4px;
\tborder-right: 0;
}

.copy-url .copy-url-button {
\tmin-width: 48px;
\tbackground-color: #66676b;
\tcolor: #fff;
\tborder-radius: 0 4px 4px 0;
}


/* ---------------------------------- */
/* Share Buttons
------------------------------------- */
.share-buttons { display: block; }

.share-buttons-trigger {
\tdisplay: inline-block;
\theight: 44px;
\twidth: 44px;
\tline-height: 44px;
\ttext-align: center;
\tcolor: #a0a0a0;
\tfont-size: 18px;
\tbackground-color: #f0f0f0;
\tborder-radius: 4px;
\ttransition: 0.4s;
\tcursor: default;
}

.share-buttons-trigger i {
\tposition: relative;
\ttop: 1px;
}

.share-buttons-content {
\tdisplay: inline-block;
\tposition: relative;
\twidth: calc(100% - 60px)
}

.share-buttons-content span {
\tmargin-left: 10px;
\tcolor: #888;
\tcursor: default;
\tpadding: 10px 0;
\tdisplay: inline-block;
\ttransition: 0.4s;
}

.share-buttons-content span strong {
\tcolor: #66676b;
\tfont-weight: 600;
}

.share-buttons:hover .share-buttons-content span {
\topacity: 0;
\ttransition: 0.2s;
}

/* Icons */
.share-buttons-icons {
\tposition: absolute;
\tleft: 5px;
\ttop: 0;
\tpadding: 0;
\tmargin: 0;
\topacity: 0;
\ttransform: translateX(-10px);
\ttransition: all 0.4s cubic-bezier(0.5,-.41,.19,2);
}

.share-buttons:hover .share-buttons-icons{
\topacity: 1;
\ttransform: translate(0);
}

.share-buttons-icons li {
\tdisplay: inline-block;
\tfloat: left;
}

.share-buttons-icons li:first-child a { border-radius: 4px 0 0 4px; }
.share-buttons-icons li:last-child a { border-radius: 0 4px 4px 0; }

.share-buttons-icons li a {
\theight: 44px;
\twidth: 44px;
\tdisplay: inline-block;
\tline-height: 44px;
\ttext-align: center;
\tbackground-color: #333;
\tcolor: #fff;
\tfont-size: 14px;
}

.share-buttons-icons li a i {
\tposition: relative;
\ttop: 1px;
}



/* ---------------------------------- */
/* Verified Badge
------------------------------------- */
.job-listing-company .verified-badge,
.job-listing .job-listing-footer ul li .verified-badge {
\tposition: relative;
\tdisplay: inline-block;
\ttransform: scale(0.7);
\ttop: 2px;
\tmargin-left: -2px;
}

/* Verified Badge */
.verified-badge {
\tposition: relative;
\theight: 25px;
\twidth: 25px;
\tdisplay: inline-block;
\tbackground-color: #38b653;
\tborder-radius: 50%;
\ttext-align: center;
\tz-index: 10;
\tfont-weight: 500;
}

.verified-badge:before {
\tcontent: \"\\e92b\";
\tfont-family: \"Feather-Icons\";
\tfont-size: 16px;
\tcolor: #fff;
\tposition: relative;
\ttop: 0px;
\tline-height: 27px;
}

.job-listing .job-listing-company-logo .verified-badge {
\tposition: absolute;
\tbottom: 0;
\tright: 0;
\ttransform: translate(7px, 7px);
}

/* Long Verified Badge */
.verified-badge-with-title {
\tposition: relative;
\theight: 26px;
\tdisplay: flex;
\ttop: -1px;
\tcolor: #fff;
\tfont-weight: 500;
\tfont-size: 14px;
\tbackground-color: #30ab4a;
\ttext-align: center;
\tz-index: 10;
\tfont-weight: 500;
\tborder-radius: 4px;
\tpadding: 0 8px 0 0;
\tmargin: 0;
\toverflow: hidden;
\tpadding-left: 34px;
\tline-height: 27px;
}
.verified-badge-with-title:before {
\tcontent: \"\\e92b\";
\tfont-family: \"Feather-Icons\";
\tfont-size: 16px;
\tcolor: #fff;
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tline-height: 26px;
\theight: 26px;
\twidth: 26px;
\tdisplay: inline-block;
\tbackground-color: #38b653;
}


/* ---------------------------------- */
/* Star Rating
------------------------------------- */
/* Star Rating */
.star-rating { display: inline-block; }

.star-rating .star {
\tdisplay: inline-block;
\tmargin: 0;
\tpadding: 0;
\tfloat: left;
\tmargin-right: 0;
\tposition: relative;
}

.star-rating .star.half:after,
.star-rating .star:before {
\tfont-family: \"Material-Icons\";
\tcontent: \"\\e988\";
\tdisplay: block;
\tcolor: #febe42;
\tfont-size: 22px;
}

.star-rating .star.empty:before { color: #ddd; }

.rating:after {
\tcontent: \".\";
\tdisplay: block;
\tclear: both;
\tvisibility: hidden;
\tline-height: 0;
\theight: 0;
}

.star-rating .star.half:before { color: #ddd; }
.star-rating .star.half:after {
\tcolor: #febe42;
\tposition: absolute;
\ttop:0;
\twidth: 50%;
\tdisplay: block;
\theight: 100%;
\toverflow: hidden;
}

/* average rating before stars */
.star-rating:before { 
\tcontent: attr(data-rating);
\tfloat: left;
\tborder-radius: 4px;
\tbackground-color: #febe42;
\tcolor: #fff;
\tfont-size: 14px;
\tline-height: 15px;
\tfont-weight: 700;
\tpadding: 5px 7px;
\tposition: relative;
\ttop: 1px;
\tmargin-right: 10px;
}

/* No stars */
.star-rating.no-stars .star { display: none; }
.star-rating.no-stars:before { margin-right: 0; }

/* ---------------------------------- */
/* Leave Rating Stars
------------------------------------- */
.leave-rating {
\theight: 24px;
\tfloat: left;
\tposition: relative;
}

.leave-rating:hover input[type=\"radio\"]:checked ~ label { color: #dadada; }

.leave-rating input[type=\"radio\"] { 
    display: inline-block;
    width: 1px;
    position: absolute;
    opacity: 0;
    pointer-events: none;
    height: 100%;
    margin-left: 50%;
    left: 0;
    top: 0;
    transform: translateX(-50%);
}

.leave-rating input[type=\"radio\"]:checked ~ label { color: #ffc600; }

.leave-rating label {
\tfont-size: 24px;
\tfloat: right;
\tletter-spacing: 0px;
\tcolor: #dadada;
\tcursor: pointer;
\ttransition: 0.3s;
}

.leave-rating label:hover,
.leave-rating label:hover ~ label {
\tcolor: #ffc600 !important;
}

.leave-rating-title {
\tdisplay: block;
    margin: 0 0 4px 0;
}


.welcome-text .leave-rating-container {
\ttext-align: center;
\tmargin: 0 auto;
\tmargin-top: 15px;
\tleft: 50%;
\twidth: 100%;
\tdisplay: block;
}

.welcome-text .leave-rating {
    position: relative;
    left: 50%;
    transform: translateX(-50%) scale(1.2);
}


/* ---------------------------------- */
/* Ripple Effect
------------------------------------- */
.ripple-effect-dark,
.ripple-effect {
\toverflow: hidden;
\tposition: relative;
\tz-index: 1;
}

.ripple-effect span.ripple-overlay,
.ripple-effect-dark span.ripple-overlay {
\tanimation: ripple 0.9s;
\tborder-radius: 100%;
\tbackground: #fff;
\theight: 12px;
\tposition: absolute;
\twidth: 12px;
\tline-height: 12px;
\topacity: 0.1;
\tpointer-events: none;
}

.ripple-effect-dark span.ripple-overlay { background: #000; opacity: 0.07; }

@keyframes ripple {
  0% {
\t -webkit-transform: scale(4);
\t\t\t\ttransform: scale(4);
  }
  100% {
\t opacity: 0;
\t -webkit-transform: scale(40);
\t\t\t\ttransform: scale(40);
  }
}

/* ---------------------------------- */
/* Input With Icon
------------------------------------- */
.input-with-icon {
\tdisplay: block;
\tposition: relative;
}

.input-with-icon input {
\tpadding-right: 45px;
}

.input-with-icon i {
\tposition: absolute;
\ttop: 50%;
\ttransform: translateY(-50%);
\tright: 15px;
\tfont-size: 20px;
\tcolor: #a0a0a0;
\tfont-style: normal;
\tcursor: normal;
\tpointer-events: none;
}

.input-with-icon i.currency {
\tfont-size: 14px;
}

/* Input with boxed icon */
.input-with-icon-left {
\tposition: relative;
}

.input-with-icon-left input {
\tpadding-left: 65px;
}

.input-with-icon-left i {
\tposition: absolute;
\ttop: 0;
\tcolor: #a0a0a0;
\ttext-align: center;
\tline-height: 48px;
\twidth: 48px;
\theight: 48px;
\tfont-size: 19px;
\tbackground-color: #f8f8f8;
\tborder: 1px solid #e0e0e0;
\tbox-sizing: border-box;
\tdisplay: block;
\tborder-radius: 4px 0 0 4px;
}

.input-with-icon-left.no-border i {
\tborder: none;
}


/* ---------------------------------- */
/* Keywords Input
------------------------------------- */
.keywords-container { margin-bottom: -15px; }

.keywords-list {
\tdisplay: block;
\tfloat: left;
\theight: 0;
}

.keyword {
\tbackground-color: rgba(102,103,107,0.07);
\tcolor: #66676b;
\tdisplay: inline-block;
\tfloat: left;
\tpadding: 0;
\tborder-radius: 4px;
\tcursor: default;
\tmargin: 0 7px 7px 0;
\theight: 35px;
\tline-height: 35px;
\tbox-sizing: border-box; 
\tanimation: KeywordIn 0.3s ease-in-out;
\tanimation-fill-mode: both;
\ttransition: 0.4s;
\toverflow: hidden;
\tmax-width: 100%;
\tfont-size: 14.7px;
}

@keyframes KeywordIn {
\t0% {
\t\topacity: 0;
\t\ttransform: scale(0.9);
\t}
\t100% {
\t\topacity: 1;
\t\ttransform: scale(1);
\t}
}

.keyword.keyword-removed {
    max-width: 0;
    margin: 0;
    overflow: hidden;
    opacity: 0;
\tanimation: KeywordOut 0.4s ease-in-out;
\tanimation-fill-mode: both;
\tpointer-events: none;
}

@keyframes KeywordOut {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 0;
\tmargin-top: -35px;
  }
}

.keyword-text { padding-right: 12px;  }

.keyword .keyword-remove:before {
\tdisplay: inline-block;
\tcursor: pointer;
\tfont-family: \"Feather-Icons\";
\tcontent: \"\\ea02\";
\tline-height: 20px;
\tposition: relative;
\ttop: 2px;
\tmargin-right: 4px;
\tmargin-left: 10px;
\tfont-size: 15px;
}

.keyword-input-container {
\tposition: relative;
}

.keyword-input-container .keyword-input-button {
\tposition: absolute;
\ttop: 0;
\tright: 0;
\theight: 36px;
\twidth: 36px;
\tpadding: 0;
\tcolor: #fff;
\tbackground-color: #66676b; 
\tborder-radius: 4px;
\tmargin: 6px;
\tfont-size: 19px;
\ttext-align: center;
\tline-height: 36px;
}

.keyword-input-container .keyword-input-button i {
\tcolor: #fff;
\tposition: relative;
\ttop: 2px;
}

input.keyword-input { margin: 0 0 15px 0; }


/* ---------------------------------- */
/* Clickable Tags
------------------------------------- */
.tags-container { display: block; }

.tags-container input[type=\"checkbox\"] {
  display: none;
}

.tags-container input[type=\"checkbox\"] + label {
\ttransition: 0.3s;
\tfont-size: 14.7px;
\tcursor: pointer;
\tborder-radius: 4px;
\tbackground-color: #eee;
\tcolor: #777;
\tdisplay: inline-block;
\tpadding: 6px 15px;
\tmargin: 0;
\tline-height: 24px;
}

.tags-container input[type=\"checkbox\"] + label:hover {
\tbackground-color: #e8e8e8;
}

.tags-container input[type=\"checkbox\"]:checked + label {
\tbackground-color: #66676b;
\tcolor: #fff;
\ttransition: 0.3s;
}

.tags-container input[type=\"checkbox\"] + label:before {
\tfont-family: \"Feather-Icons\";
\tcontent: \"\\e92b\";
\tfont-size: 18px;
\ttransition: all 0.35s cubic-bezier(0.5,-.41,.19,2), max-width 0.3s, margin 0.3s;
\tmax-width: 0;
\tdisplay: inline-block;
\tposition: relative;
\ttop: 3px;
\tmargin: 0;
\topacity: 0;
\tcolor: #fff;
\tline-height: 0;
\ttransform: scale(0.5);
}

.tags-container input[type=\"checkbox\"]:checked + label:before {
\tmax-width: 30px;
\topacity: 1;
\ttransform: scale(1);
\tmargin: 0 5px 0 -2px;
}

.tags-container .tag {
\tdisplay: inline-block;
\tfloat: left;
\tmargin: 0 7px 7px 0;
\toverflow: hidden;
}


/* ---------------------------------- */
/* On/Off Switch
------------------------------------- */
.switches-list .switch-container {
\twidth: 100%
}

.switches-list .switch-container:last-child label {
\tmargin-bottom: 0;
}

.switch-container {
\tdisplay: inline-block;
\tcursor: pointer;
}

label.switch { position: relative; }

.switches-list .switch-container label {
\tcursor: pointer;
\tposition: relative;
\tpadding-left: 45px;
\tline-height: 26px;
}

.switch-button {
\tposition: relative;
\tdisplay: inline-block;
\twidth: 34px;
\theight: 20px;
\tcursor: pointer;
\tbackground-color: #ccc;
\tborder-radius: 50px;
\ttransition: 0.4s;
\tmargin: 0 7px 0 0;
\ttop: 4px;
\tposition: absolute;
\ttop: 2px;
\tleft: 0;
}

.notify-box .switch-button {
    top: 0;
}

.notify-box .switch-container {
    top: 1px;
    position: relative;
    
}

.switch span.switch-text {
\tdisplay: block;
\tpadding-left: 48px;
\tfont-size: 16px;
\tline-height: 22px;
\tcolor: #666;
}

.switch input {display:none;}

.switch.interactive-effect input:checked + .switch-button:before {
\tanimation: switch-shadow-color 0.4s;
}

.switch.interactive-effect .switch-button:before {
\tanimation: switch-shadow 0.4s;
}

@keyframes switch-shadow {
  0% { box-shadow: 0 0 0 0 rgba(0,0,0,0.3); }
  100% { box-shadow: 0 0 0px 10px rgba(0,0,0,0); }
}

@keyframes switch-shadow-color {
  0% { box-shadow: 0 0 0 0 rgba(102,103,107,0.6); }
  100% { box-shadow: 0 0 0px 10px rgba(0,0,0,0); }
}

.switch-button:before {
\tposition: absolute;
\tcontent: \"\";
\theight: 16px;
\twidth: 16px;
\tbottom: 2px;
\tleft: 2px;
\tbackground-color: white;
\ttransition: 0.4s, box-shadow 0.3s;
\tborder-radius: 50px;
}

input:checked + .switch-button {
\tbackground-color: #66676b;
}

input:checked + .switch-button:before {
\ttransform: translateX(14px);
}


/* ---------------------------------- */
/* Radio Button
------------------------------------- */

.radio {
\tdisplay: inline-block;
\tvertical-align: top;
}

.radio label {
\tmargin: 3px 0;
\tcursor: pointer;
\tposition: relative;
\tpadding-left: 29px;
\tline-height: 25px;
}

.radio input[type=\"radio\"] {
\tposition: absolute;
\topacity: 0;
}

.radio input[type=\"radio\"] + label .radio-label {
\tcontent: '';
\tbackground: #fff;
\tborder-radius: 100%;
\tborder: 2px solid #b4b4b4;
\tdisplay: inline-block;
\twidth: 18px;
\theight: 18px;
\tposition: relative;
\tmargin-right: 5px;
\tvertical-align: top;
\tcursor: pointer;
\ttext-align: center;
\ttransition: all 250ms ease;
\tbackground-color: #fff;
\tbox-shadow: inset 0 0 0 8px #fff;
\tz-index: 100;
\tposition: absolute;
\ttop: 2px;
\tleft: 0;
}

.radio input[type=\"radio\"] + label .radio-label:after {
\tbackground-color: #66676b;
\tcontent: \"\";
\ttop: 3px;
\tleft: 0;
\tright: 0;
\tmargin: 0 auto;
\tposition: absolute;
\topacity: 1;
\ttransition: 0.3s;
\tborder-radius: 50%;
\ttransform: scale(0);
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    z-index: 99;
}

.radio input[type=\"radio\"]:checked + label .radio-label {
\tbackground-color: #66676b;
\tborder-color: #66676b;
\tbox-shadow: inset 0 0 0 3px #fff;
}

.radio-label:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\theight: 100%;
\twidth: 100%;
\tborder-radius: 50%;
\tbackground-color: transparent;
\tdisplay: block
}

.interactive-effect label .radio-label:before {
\tanimation: radius-shadow 0.4s;
}

@keyframes radius-shadow {
  0% { box-shadow: 0 0 0 0 rgba(102,103,107,0.4); }
  100% { box-shadow: 0 0 0 10px rgba(0,0,0,0); }
}

.small-label {
\tborder-radius: 4px;
\tdisplay: inline-block;
\tbackground: #e0f5d7;
\tcolor: #449626;
\tpadding: 0 8px;
\tline-height: 27px;
\theight: 26px;
\tmargin-left: 5px;
\tposition: relative;
\ttop: -1px;
}


/* ---------------------------------- */
/* Checkbox
------------------------------------- */
.checkbox {
\tdisplay: inline-block;
\tmargin-bottom: 0;
}

.checkbox input {
\tpadding: 0;
\theight: initial;
\twidth: initial;
\tmargin-bottom: 0;
\tdisplay: none;
\tcursor: pointer;
}

.checkbox label {
\tposition: relative;
\tcursor: pointer;
\tpadding-left: 30px;
\tline-height: 25px;
}

.checkbox label span.checkbox-icon {
\tcontent:'';
\t-webkit-appearance: none;
\tbackground-color: transparent;
\tborder: 2px solid #b4b4b4;
\theight: 20px;
\twidth: 20px;
\tdisplay: inline-block;
\tposition: relative;
\tvertical-align: middle;
\tcursor: pointer;
\tmargin-right: 5px;
\tborder-radius: 4px;
\ttransition: 0.3s;
\tposition: absolute;
\tleft: 0;
\ttop: 1px;
}

.checkbox input + label span.checkbox-icon:after {
\tposition: absolute;
\ttop: 2px;
\tleft: 0;
\tright: 0;
\tmargin: 0 auto;
\topacity: 0;
\tcontent: '';
\tdisplay: block;
\twidth: 6px;
\theight: 10px;
\tborder: solid #fff;
\tborder-width: 0 2px 2px 0;
\ttransform: scale(0.5) rotate(45deg);
\ttransition: all 0.35s cubic-bezier(0.3,-.41,.19,2), opacity 0.3s;
}

.checkbox input:checked + label span.checkbox-icon {
\tborder-color: #66676b;
\tbackground-color: #66676b;
}

.checkbox input:checked + label span.checkbox-icon:after {
\ttransform: scale(1) rotate(45deg);
\topacity: 1;
}


/* ---------------------------------- */
/* Custom Upload Button
------------------------------------- */
.uploadButton {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-bottom: 10px;
  width: 100%;
  font-style: normal;
  font-size: 14px;
}

.uploadButton .uploadButton-input {
  opacity: 0;
  position: absolute;
  overflow: hidden;
  z-index: -1;
  pointer-events: none;
}

.uploadButton .uploadButton-button {
\tdisplay: flex;
\talign-items: center;
\tjustify-content: center;
\tbox-sizing: border-box;
\theight: 44px;
\tpadding: 10px 18px;
\tcursor: pointer;
\tborder-radius: 4px;
\tcolor: #66676b;
\tbackground-color: transparent;
\tborder: 1px solid #66676b;
\tflex-direction: row;
\ttransition: 0.3s;
\tmargin: 0;
\toutline: none;
\tbox-shadow: 0 3px 10px rgba(102,103,107,0.1);
}

.uploadButton .uploadButton-button:hover {
\tbackground-color: #66676b;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
\tcolor: #fff;
}

.uploadButton .uploadButton-file-name {
\tflex-grow: 1;
\tdisplay: flex;
\talign-items: center;
\tflex: 1;
\tbox-sizing: border-box;
\tpadding: 0 10px;
\tpadding-left: 18px;
\tmin-height: 42px;
\ttop: 1px;
\tposition: relative;
\tcolor: #888;
\tbackground-color: transparent;
\toverflow: hidden;
\tline-height: 22px;
}


/* ---------------------------------- */
/* Intro Banner
------------------------------------- */
.intro-banner {
\tpadding: 105px 0;
\tposition: relative;
}

.intro-banner.big-padding {
\tpadding: 130px 0;
}

.intro-banner .container {
\tz-index: 100;
\tposition: relative;
}

.intro-banner:after,
.intro-banner:before {
    content: \"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    z-index: 15;
    background: linear-gradient(to right,rgba(250,250,250,1) 20%, rgba(250,250,250,.95) 50% ,rgba(250,250,250,0.1) 80%,rgba(250,250,250,0) 100%);
}

.intro-banner:after {
    z-index: 5;
    background-color: #fafafa;
}

.intro-banner .background-image-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 100% 60%;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 90%;
    left: 10%;
    z-index: 10;
    overflow: hidden;
}

/* Disabled Gradient */
.intro-banner.disable-gradient:before {
\tbackground: #f2f2f2;
\topacity: 0.85;
}

.intro-banner.disable-gradient .background-image-container {
\tleft: 0;
\twidth: 100%;
}

/* Banner Headline */
.banner-headline {
\tdisplay: block;
\tmax-width: 55%;
}

.banner-headline h1,
.banner-headline h2,
.banner-headline h3,
.banner-headline h4 {
\tfont-size: 28px;
\tfont-weight: 300;
\tcolor: #777;
\tline-height: 42px;
}

.banner-headline strong {
\tfont-weight: 600;
\tcolor: #333;
} 

.banner-headline strong.color {
\tcolor: #66676b;
}


/* Alternative Headline */
.banner-headline-alt {
\tmargin: -10px 0 0 0;
\tdisplay: block;
}

.banner-headline-alt h3 {
\tfont-size: 40px;
\tfont-weight: 600;
\tcolor: #333;
\tline-height: 50px;
}

.banner-headline-alt span {
\tfont-size: 24px;
\tcolor: #888;
\tfont-weight: 300;
\tline-height: 34px;
\tmargin-top: 5px;
\tdisplay: inline-block;
}
.dark-overlay .banner-headline-alt h3 { color: #fff; }
.dark-overlay .banner-headline-alt span { color: rgba(255,255,255,0.7); }

/* Banner Search Form */
.intro-banner-search-form {
\tdisplay: flex;
\twidth: 100%;
\tbackground-color: #fff;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 12px rgba(0,0,0,0.09);
}

/* Video */
.video-container {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tz-index: 10;
\toverflow: hidden;
\tbackground-size: cover;
\tbackground-position: 50%;
}

.video-container video {
\ttop: 50%;
\ttransform: translateY(-50%);
\tleft: 0;
\tmin-width: 100%;
\tmin-height: 100%;
\twidth: auto;
\theight: auto;
\tz-index: -10;
\tbackground-size: cover;
\ttransition: 1s opacity;
\tposition: absolute;
\tz-index: 9;
}

/* Field Row Styles */
.intro-search-field {
\tpadding: 10px 12px;
\tborder-right: 1px solid #e4e4e4;
\tflex: 1;
    align-items: center;
    display: flex;
    position: relative;
}

.intro-search-field .field-title {
\tcontent: attr(data-field-tiele);
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tbackground: #66676b;
\tcolor: #fff;
\tborder-radius: 4px;
\tpadding: 5px 10px;
\tline-height: 22px;
\ttransform: translateY(calc(-100% - 15px));
\tcursor: default;
}

.intro-banner-search-form .intro-search-field:nth-last-child(2) {
\tborder-right: none;
}

.intro-search-button {
\tmargin: 8px;
\tmargin-left: 0;
\tflex: auto;
\tflex-grow: 0;
\tdisplay: flex;
    align-items: center;
}

.intro-search-button .button {
\theight: 52px;
\tline-height: 52px;
\tpadding: 0 30px;
\tfont-size: 18px;
}

/* Field Styles */
.intro-banner-search-form input:focus { box-shadow: none;}
.intro-banner-search-form input {
\tbox-shadow: none;
\tfont-size: 18px;
\tmargin: 0;
}

.intro-banner-search-form input::placeholder {
\tcolor: #888;
}

.intro-banner-search-form .input-with-icon  {
\talign-self: center;
\tflex: 1;
}

.intro-banner-search-form  input {
\tpadding: 10px 15px;
}
.intro-banner-search-form .input-with-icon input {
\tpadding: 10px 15px;
\tpadding-left: 43px;
}

.intro-banner-search-form .input-with-icon i {
    position: absolute;
    right: auto;
    left: 10px;
    top: calc(50% - 1px);
    font-size: 24px;
    color: #b0b0b0;
}

/* Autocomplete Adjustment */
.intro-search-field.with-autocomplete .pac-container {
\tborder: none;
    padding-top: 0;
    z-index: 9;
    left: 0 !important;
    top: 100% !important;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    width: 100% !important;
    margin-top: 0;
    overflow: visible;
}

.intro-search-field.with-autocomplete .pac-container:before {
\tcontent: \"\";
\tposition: absolute;
\tbackground-color: #fff;
\twidth: 100%;
\theight: 5px;
\tdisplay: block;
\ttop: -5px;
\tleft: 0;
}

/* Dropdown Adjustment */
.intro-search-field .bootstrap-select.btn-group button {
\tpadding: 0 15px;
\tbox-shadow: none;
\tfont-size: 18px;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.intro-search-field .field-title {
\t\ttransform: translateY(-100%);
\t\tmargin-top: -15px;
\t}
\t.intro-banner-search-form input { line-height: 20px; } 
\t.intro-search-field .bootstrap-select.open .dropdown-menu { top: 55px; }
}
/* IE 11 Fixes - End */

/* Intro Stats */
.intro-stats {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
\tdisplay: flex;
}

.intro-stats li {
\tflex: auto;
\tflex-grow: 0;
\tmargin-right: 35px;
\tpadding-right: 35px;
\tborder-right: 1px solid #e0e0e0;
}

.intro-stats li:last-child {
\tmargin-right: 0;
\tpadding-right: 0;
\tborder-right: none;
}

.intro-stats li span,
.intro-stats li strong {
\tdisplay: block;
\tmargin: 0;
\tpadding: 0;
}

.intro-stats li strong {
\tfont-weight: 600;
\tcolor: #333;
\tfont-size: 28px;
\tmargin-bottom: 2px;
}

.intro-stats li span {
\tfont-weight: 300;
\tcolor: #888;
\tfont-size: 18px;
}


/* Dark Style */
.intro-banner.dark-overlay:before {
\tbackground: #333;
\topacity: 0.75;
}

.intro-banner.dark-overlay .background-image-container {
\tleft: 0;
\twidth: 100%;
    background-position: 100%;
}

.intro-banner.dark-overlay .intro-stats li span,
.intro-banner.dark-overlay .banner-headline strong,
.intro-banner.dark-overlay .banner-headline h1,
.intro-banner.dark-overlay .banner-headline h2,
.intro-banner.dark-overlay .banner-headline h3,
.intro-banner.dark-overlay .banner-headline h4 {
\tcolor: rgba(255,255,255,0.7);
}

.intro-banner.dark-overlay .intro-stats li strong,
.intro-banner.dark-overlay .banner-headline strong { color: #fff; }
.intro-banner.dark-overlay .intro-banner-search-form { box-shadow: 0 3px 12px rgba(0,0,0,0.2); }
.intro-banner.dark-overlay .intro-stats li { border-right: 1px solid rgba(255,255,255,0.25); }
.intro-banner.dark-overlay .intro-stats li:last-child { border-right: none; }


/* Intro Banner Media Queries
------------------------------------- */
@media (max-width: 1366px) {
\t.banner-headline h1,
\t.banner-headline h2,
\t.banner-headline h3,
\t.banner-headline h4 {
\t    font-size: 26px;
\t    line-height: 42px;
\t}
}

@media (max-width: 1240px) {
\t.banner-headline { max-width: 65% }
}

@media (max-width: 992px) {

\t.intro-search-field .bootstrap-select.btn-group .dropdown-toggle .filter-option { height: auto; line-height: 20px; }

\t.intro-banner { padding: 70px 0; }

\t.banner-headline { max-width: 100% }
\t.banner-headline h1,
\t.banner-headline h2,
\t.banner-headline h3,
\t.banner-headline h4 {
\t    font-size: 24px;
\t    line-height: 38px;
\t}
\t
\t/* Alternative Banner Style */
\t.intro-banner.dark-overlay .intro-banner-search-form { box-shadow: none }
\t.intro-banner.big-padding {  padding: 70px 0; }

\t.banner-headline-alt { margin-bottom: 0; }
\t.banner-headline-alt h3 { font-size: 36px; line-height: 42px; }
\t.banner-headline-alt span { font-size: 22px; line-height: 32px; }

\t/* Photo Position */
\t.intro-banner:after,
\t.intro-banner:before {
\t    background: rgba(250,250,250,0.9);
\t}

\t.intro-banner .background-image-container {
\t\tbackground-size: cover;
\t\theight: 100%;
\t\twidth: 100%;
\t\tleft: 0;
\t}
\t/* Photo Position - End*/

\t.intro-banner-search-form .intro-search-field .bootstrap-select.btn-group button,
\t.intro-banner-search-form input {
\t    height: 56px;
\t    padding: 15px 22px;
\t}

\t.intro-banner-search-form .input-with-icon i { left: 17px; }
\t.intro-banner-search-form .input-with-icon input { padding-left: 50px; }

\t.intro-banner-search-form.margin-top-100,
\t.intro-banner-search-form.margin-top-95,
\t.intro-banner-search-form.margin-top-90,
\t.intro-banner-search-form.margin-top-85 {
\t\tmargin-top: 20px !important;
\t}

\t.intro-banner-search-form {
\t\tflex-direction: column;
\t\tbackground: transparent;
\t\tbox-shadow: none;
\t\tmargin-top: 20px;
\t}

\t.intro-banner-search-form .intro-search-field {
\t\tpadding: 0;
\t\tborder-radius: 4px;
\t\tbox-shadow: 0 2px 12px rgba(0,0,0,0.07);
\t\tmargin-top: 20px;
\t}

\t.intro-banner-search-form .intro-search-field.with-label {
\t\tmargin-top: 80px;
\t}

\t.intro-banner-search-form .intro-search-button {
\t\tmargin-top: 30px;
\t}

\t/* Intro Stats */
\t.intro-stats {
\t\tflex-direction: column;
\t\tbackground: #fff;
\t\tpadding: 20px;
\t\tborder-radius: 4px;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,0.1);
\t\tjustify-content: center;
\t}

\t.intro-stats li {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\tmargin: 0 0 10px 0;
\t\tpadding: 0 0 10px 0;
\t\tborder: none;
\t\tborder-bottom: 1px solid #eee;
\t\twidth: 100%;
\t\talign-self: center;
\t\ttext-align: center;
\t}

\t.intro-stats li:last-child {
\t\tmargin-bottom: 0;
\t\tpadding-bottom: 0;
\t\tborder: none;
\t}

}


/* ---------------------------------- */
/* Category Boxes
------------------------------------- */
.categories-container {
\tdisplay: flex;
\tflex-wrap: wrap;
}

.category-box {
\tflex: 0 0 25%;
\talign-content: center;
\tjustify-content: center;
\tdisplay: flex;
\tflex-direction: column;
\tmargin: 0;
\ttext-align: center;
\tpadding: 25px;
\tborder-radius: 4px;
\ttransition: 0.35s;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.category-box { max-width: 25%; text-align: center; }
\t.category-box-counter { width: 50px !important; }
}
/* IE 11 Fixes - End */

/* Box Icon */
.category-box-icon {
\tfont-size: 42px;
\tline-height: 32px;
\tcolor: #66676b;
\tposition: relative;
}

.category-box-icon i {
\theight: 42px;
\tdisplay: block;
\ttransition: 0.35s;
\tmargin-bottom: 12px;
}

/* Box Counter */
.category-box-counter {
\twidth: auto;
\theight: 24px;
\tfont-size: 14px;
\tline-height: 25px;
\tborder-radius: 4px;
\tpadding: 0 8px;
\tcolor: #909090;
\tbackground: rgba(0,0,0,0.06);
\tfont-weight: 600;
\tdisplay: inline-block;
\tmargin: 0 auto;
\ttransition: 0.35s;
\tmargin-bottom: 18px;
}

/* Box Content */
.category-box-content h3 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tmargin: 0;
\tpadding: 0;
\ttransition: 0.35s;
}

.category-box-content p {
\tcolor: #888;
\tmargin: 0;
\tpadding: 0;
\tline-height: 24px;
\tmargin-top: 5px;
\ttransition: 0.35s;
}

/* Hover State */
.category-box:hover {
\tbackground: #66676b;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.2);
\tcolor: #fff;
}

.category-box:hover .category-box-content h3,
.category-box:hover .category-box-icon { color: #fff; }
.category-box:hover .category-box-content p { color: rgba(255,255,255,0.7); }

.category-box:hover .category-box-counter {
\tbackground: rgba(0,0,0,0.2);
\tcolor: #fff;
}

/* Media Queries for Category Boxes */
@media (max-width: 1240px) {
\t.category-box {
\t    flex: 0 0 33.3%;
\t}
}

@media (max-width: 768px) {
\t.category-box {
\t    flex: 0 0 50%;
\t}
}

@media (max-width: 480px) {
\t.category-box {
\t    flex: 0 0 100%;
\t    margin-right: 0;
\t}
}

/* ---------------------------------- */
/* Photo Box
------------------------------------- */
.photo-box {
\tborder-radius: 4px;
\theight: 360px;
\tdisplay: block;
\tposition: relative;
\tbackground-size: cover;
\tbackground-position: 100%;
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.2);
\ttransition: 0.4s;
\tmargin: 0 0 25px 0;
}

.photo-box:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\theight: 100%;
\twidth: 100%;
\tbackground: #333;
\topacity: 0.5;
\tborder-radius: 4px;
\ttransition: 0.4s;
}

.photo-box-content {
\tposition: absolute;
\tbottom: 30px;
\tleft: 30px;
}

.photo-box-content h3 {
\tcolor: #fff;
\tfont-size: 20px;
\tline-height: 28px;
}

.photo-box-content span {
\tcolor: #333;
\tbackground: #fff;
\tborder-radius: 4px;
\tfont-size: 15px;
\tfont-weight: 500;
\tpadding:  4px 10px;
\tline-height: 20px;
\tmargin-top: 8px;
\tdisplay: inline-block;
}

/* Hover State */
.photo-box:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
\ttransform: translateY(-10px);
}

.photo-box:hover:before {
\tbackground: #66676b;
\topacity: 0.95;
}

/* Small Photobox Styles */
.photo-box.small { height: 160px; margin-bottom: 30px }
.photo-box.small:hover { transform: translateY(-5px);}

.photo-box.small .photo-box-content {
\tleft: 0;
\tright: 0;
\tmargin: 0 auto;
\ttext-align: center;
\tbottom: auto;
\ttop: 50%;
\ttransform: translateY(-49%);
}

.photo-box.small .photo-box-content h3 {
\tfont-size: 16px;
\tfont-weight: 600;
}

.photo-box.small .photo-box-content span {
\tcolor: #fff;
\tbackground: #66676b;
\tfont-size: 14px;
\tline-height: 18px;
\tmargin-top: 5px;
\ttransition: 0.3s;
}

.photo-box.small:hover .photo-box-content span {
\tcolor: #fff;
\tbackground: rgba(0,0,0,0.2);
}


/* ---------------------------------- */
/* Pricing Plans
------------------------------------- */
.billing-cycle-radios {
\tdisplay: block;
\tmargin: 0 auto;
\ttext-align: center;
}

.billing-cycle-radios.text-align-left {
\ttext-align: left;
}

.billing-cycle-radios .radio { margin-right: 20px; }
.billing-cycle-radios .radio:last-child { margin-right: 0; }


/* Pricing Plans Container */
.pricing-plans-container {
\tborder-radius: 4px;
\tbox-shadow: 0 0 25px rgba(0,0,0,0.1);
\tdisplay: flex;
}

.pricing-plan {
\tflex: 1;
\tpadding: 35px 17px;
\tposition: relative;
}

.pricing-plan:first-of-type {
\tpadding-left: 35px;
}

.pricing-plan:last-of-type {
\tpadding-right: 35px;
}

.pricing-plan h3 {
\tfont-size: 20px;
\tfont-weight: 600;
}

.pricing-plan p {
\tmargin: 0;
}

/* Label Switcher */
.billed-yearly-label { display: none; }
.billed-yearly .billed-yearly-label { display: block; }
.billed-yearly .billed-monthly-label { display: none; }

/* Pricing Plan Label */
.pricing-plan-label {
\tbackground: #f6f6f6;
\tborder-radius: 4px;
\tfont-size: 18px;
\tcolor: #888;
\ttext-align: center;
\tline-height: 24px;
\tpadding: 15px;
\tmargin: 22px 0;
}

.pricing-plan-label strong {
\tfont-size: 32px;
\tfont-weight: 700;
\tcolor: #333;
\tmargin-right: 5px;
\tline-height: 30px;
}

.recommended .pricing-plan-label {
\tbackground-color: rgba(102,103,107,0.06);
\tcolor: #66676b;
}
.recommended .pricing-plan-label strong {
\tcolor: #66676b;
}

/* Pricing Plan Features */
.pricing-plan-features strong {
\tcolor: #333;
\tfont-weight: 600;
\tmargin-bottom: 5px;
\tline-height: 24px;
\tdisplay: inline-block;
}

.pricing-plan-features ul {
\tpadding: 0;
\tmargin: 0;
}

.pricing-plan-features ul li {
\tdisplay: block;
\tmargin: 0;
\tpadding: 3px 0;
\tline-height: 24px;
}

/* Pricing Plan Button */
.pricing-plan .button:hover,
.pricing-plan.recommended .button {
\tcolor: #fff;
\tbackground-color: #66676b;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

.pricing-plan .button {
\tcolor: #66676b;
\tbackground-color: #fff;
\tborder: 1px solid #66676b;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.1);
}

.pricing-plan .button:hover { box-shadow: 0 4px 12px rgba(102,103,107,0.15); }

/* Recommended Plan */
.pricing-plan.recommended {
\tbox-shadow: 0 0px 45px rgba(0,0,0,0.09);
\tpadding: 35px;
\tmargin: 0 15px;
}

.pricing-plan .recommended-badge {
\tbackground-color: #66676b;
\tcolor: #fff;
\tposition: absolute;
\twidth: 100%;
\theight: 45px;
\ttop: -45px;
\tleft: 0;
\ttext-align: center;
\tborder-radius: 4px 4px 0 0;
\tfont-weight: 600;
\tline-height: 45px;
}

/* Media Queries for Pricing Plans */
@media (max-width: 992px) {
\t.pricing-plans-container {
\t\tbox-shadow: none;
\t\tdisplay: block;
\t\tmargin-top: -40px;
\t}

\t.pricing-plan {
\t\tbox-shadow: 0 0 25px rgba(0,0,0,0.1);
\t\tmargin-bottom: 40px;
\t\tflex: auto;
\t\twidth: 100%;
\t\tborder-radius: 4px;
\t\tpadding: 35px;
\t}

\t.pricing-plan.recommended {
\t\tpadding: 35px;
\t\tmargin: 0 0 40px 0;
\t}

\t.recommended.pricing-plan {
\t\tbox-shadow: 0 0 25px rgba(0,0,0,0.1);
\t\tmargin-top: 80px;
\t}
}


/* ---------------------------------- */
/* Checkout Page
------------------------------------- */

/* Checkout Headline */
.headline-border-top {
\tborder-top: 1px solid #e0e0e0;
}

/* Boxed Widget */
.boxed-widget {
\tbackground-color: #f9f9f9;
\tpadding: 0;
\ttransform: translate3d(0,0,0);
\tz-index: 90;
\tposition: relative;
\tborder-radius: 4px;
\toverflow: hidden;
}

.boxed-widget-headline {
    color: #333;
    font-size: 20px;
    padding: 20px 30px;
    background-color: #f0f0f0;
    color: #333;
    position: relative;
    border-radius: 4px 4px 0 0;
}

.boxed-widget-headline h3 {
\tfont-size: 20px;
\tpadding: 0;
\tmargin: 0;
}

.boxed-widget-inner {
\tpadding: 30px;
}

.boxed-widget ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

.boxed-widget ul li span {
    float: right;
    color: #333;
    font-weight: 600;
}

.boxed-widget ul li {
    color: #666;
    padding-bottom: 1px;
}

.boxed-widget.summary li.total-costs {
    font-size: 18px;
\tborder-top: 1px solid #e4e4e4;
    padding-top: 18px;
    margin-top: 18px;
}

.boxed-widget-footer {
\tborder-top: 1px solid #e4e4e4;
\twidth: 100%;
\tpadding: 20px 30px;
}

.boxed-widget-footer .checkbox label {
\tmargin-bottom: 0;
}

.boxed-widget.summary li.total-costs span {
    font-weight: 700;
    color: #66676b;
}

.listing-item-container.compact.order-summary-widget .listing-item {
\tborder-radius: 4px 4px 0 0;
\tcursor: default;
\theight: 240px;
}

.listing-item-container.compact.order-summary-widget { margin-bottom: 0; }
.listing-item-container.compact.order-summary-widget:hover { transform: none; }


/* Billing Cycle
------------------------------------- */
.billing-cycle  {
\tdisplay: flex;
}

.billing-cycle .radio {
\tflex: 1;
\tmargin: 5px 20px 5px 0;
}

.billing-cycle .radio label {
\tborder-radius: 4px;
\tborder: 2px solid #eee;
\tpadding: 25px;
\theight: 100%;
\talign-self: center;
}

.billing-cycle .radio:last-of-type { margin-right: 0; }
.billing-cycle .radio input[type=\"radio\"] + label .radio-label {
\tposition: relative;
\ttop: 2px;
\tmargin-right: 7px;
}

.billing-cycle-details {
\tdisplay: block;
\tpadding-left: 30px;
}

.discounted-price-tag,
.regular-price-tag {
    font-size: 14px;
    background: #e0f5d7;
    color: #449626;
    border-radius: 4px;
    line-height: 20px;
    padding: 4px 10px;
    flex-grow: 0;
    flex: auto;
    width: auto;
    transition: 0.3s;
    margin-top: 6px;
    margin-right: 5px;
    display: inline-block;
}

.line-through {
\ttext-decoration: line-through;
\tbackground-color: #fbf6dd;
    color: #a18d29;
}

/* Media Queries for Billing Cycle */
@media (max-width: 768px) {
\t.billing-cycle  {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t}
\t.billing-cycle .radio {
\t\tmargin-right: 0;
\t}
}


/* Payment Toggle
------------------------------------- */
.payment-logo {
\theight: 24px;
\tposition: absolute;
\tright: 19px;
\ttop: 18px;
\timage-rendering: -webkit-optimize-contrast;
}

.payment-logo.paypal {
\theight: 16px;
\ttop: 22px;
}

.payment-tab-trigger > input {
\tposition: absolute;
\tvisibility: hidden;
}

.payment-tab-trigger {
\tpadding: 0px 20px;
}

.payment-tab-trigger > label {
\tcursor: pointer;
\tdisplay: block;
\tposition: relative;
\ttop: 0;
\tpadding: 14px 0;
\ttop: 3px;
\tmargin-bottom: 0;
\tfont-weight: 500;
}

.payment-tab-trigger > label::before {
\ttransition: 0.2s;
\tbox-sizing: border-box;
\tbackground-color: #fff;
\tborder: 2px solid #d0d0d0;
\tborder-radius: 100%;
\tcontent: \"\";
\tdisplay: inline-block;
\tmargin-right: 10px;
\tposition: relative;
\ttop: 3px;
\twidth: 18px;
\theight: 18px;
}

.payment-tab-trigger > label::after {
\tbackground: #fff;
\tborder-radius: 100%;
\tcontent: \"\";
\tdisplay: inline-block;
\tposition: absolute;
\tleft: 5px;
\ttop: 22px;
\twidth: 8px;
\theight: 8px;
\ttransition: 0.2s;
\ttransform: scale(0);
}

.payment-tab-trigger > input:checked ~ label::before { border-color: #66676b; }

.payment-tab-trigger > input:checked ~ label::after {
\tbackground-color: #66676b;
\ttransform: scale(1);
}

.payment {
\tborder: 2px solid #f2f2f2;
\tborder-radius: 4px;
\toverflow: hidden;
}

.payment-tab {
\tbackground: #f2f2f2;
\tbox-sizing: border-box;
\tmax-height: 60px;
\toverflow: hidden;
\tposition: relative;
\ttransition: all 0.3s 0s ease-in-out;
\twidth: 100%;
}

.payment-tab:first-of-type { border-radius: 4px 4px 0 0; }
.payment-tab:last-of-type { border-radius: 0 0 4px 4px; }

.payment-tab.payment-tab-active {
\tmax-height: 400px;
\tbackground: #fff;
}

@media (max-width: 991px) {
\t.payment-tab.payment-tab-active { max-height: 800px; }
}

.payment-tab-content {
\tpadding: 0 20px 20px 20px;
\tbackground-color: #fff;
\tvisibility: hidden;
\topacity: 0;
\ttransition: 0.2s ease-in-out;
}

.payment-form-row {
\tmargin-top: -10px;
\tmargin-bottom: 5px;
}

.payment-tab.payment-tab-active .payment-tab-content {
\tvisibility: visible;
\topacity: 1;
}

.card-label > input {
\tbox-sizing: border-box;
\tdisplay: block;
\theight: 51px;
\tmargin: 14px auto 5px;
\tpadding: 5px 15px 0 15px;
\ttransition: border-color 0.3s;
\twidth: 100%;
\tborder: 1px solid #dbdbdb;
\tbackground-color: #fff;
\ttext-decoration: none;
\tborder-radius: 4px;
\tbox-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.06);

\tbox-shadow: none;
\tpadding: 15px 0;
\tborder: none;
\tborder-bottom: 1px solid #e0e0e0;
\tborder-radius: 0;
}

.card-label > input:focus {
\tbox-shadow: none;
\tborder-bottom: 1px solid #e0e0e0;\tpadding: 15px 0;
}


.card-label > input::placeholder {
\ttransition: 0.2s ease-in-out;
\t-webkit-transform-origin: left;
}

.card-label > input:focus::placeholder {
transform: translateY(-18px);
}


.card-label > label {
    background-color: #fff;
    display: inline-block;
    margin: 6px auto auto 8px;
    font-size: 13px;
    padding: 0px 7px;
    font-weight: 500;
    color: #909090;
    display: none;
}

.payment-tab p { margin: 10px 0; }



/* Booking Confirmation Page
------------------------------------- */
.order-confirmation-page {
\ttext-align: center;
\tpadding-bottom: 120px;
\tpadding-top: 0px;
}

.order-confirmation-page h2 {
\tfont-size: 48px;
\tfont-weight: 700;
\tletter-spacing: -0.5px;
\tmargin-bottom: 25px;
\tdisplay: block;
}

.order-confirmation-page p {
\tfont-size: 20px;
\tcolor: #808080;
\tfont-weight: 300;
\tdisplay: block;
\tline-height: 32px;
}

.order-confirmation-page a.button:before { display: none; }
.order-confirmation-page a.button {
\tbackground-color: #eee;
\tcolor: #606060;
\tfont-weight: 600;
\tfont-size: 18px;
\tbox-shadow: none;
\tpadding-top: 14px;
\tpadding-bottom: 14px;
}

.order-confirmation-page a.button i { font-size: 24px; }

.book-now.button { padding: 9px; margin-bottom: -4px; }

.breathing-icon {
\tbackground-color: #66676b;
\twidth: 120px;
\theight: 120px;
\tline-height: 0;
\tfont-size: 18px;
\tborder-radius: 50%;
\tmargin: 0 auto;
\tmargin-top: 30px;
\tposition: relative;
\tz-index: 100;
\ttransition: 0.4s;
\tcolor: #fff;
\tfont-weight: 500;
\tanimation: bicokAnim 3s infinite;
\tbox-shadow: 0 0 0 15px rgba(102,103,107,0.07);
\tmargin-bottom: 70px;
\tfont-size: 90px;
}

.breathing-icon i {
\tcolor: #fff;
\tposition: absolute;
\ttop: 53%;
\tleft: 0;
\tright: 0;
\ttransform: translateY(-50%);
}

@keyframes bicokAnim {
\t0%,100% {
\t\tbox-shadow: 0 0 0 15px rgba(102,103,107,0.07);
\t}
\t50% {
\t\tbox-shadow: 0 0 0 28px rgba(102,103,107,0.12);
\t}
}

@media (max-width: 991px) {
\t.order-confirmation-page i { font-size: 100px; }
\t.order-confirmation-page p { font-size: 18px; }
\t.order-confirmation-page h2 { font-size: 30px; }
}


/* ---------------------------------- */
/* Icon Boxes
------------------------------------- */
.icon-box {
\ttext-align: center;
\tmargin-top: 45px;
\tposition: relative;
}

.icon-box-circle {
\tbackground-color: #fff;
\twidth: 50%;
\theight: 60px;
\tz-index: 100;
\tmargin: 0 auto;
\tdisplay: inline-block;
\tposition: relative;
\tmargin-bottom: 35px;
}

.icon-box-circle-inner {
\tfont-size: 72px;
\tcolor: #ccc;
\tposition: relative;
\twidth: 60px;
\tmargin: 0 auto;
\tdisplay: inline-block;
}

.icon-box-check {
\tbackground-color: #66676b;
\twidth: 30px;
\theight: 30px;
\tline-height: 32px;
\tfont-size: 18px;
\tborder-radius: 50%;
\tmargin: 0 auto;
\tposition: relative;
\tz-index: 100;
\tanimation: circle-box-anim 2s infinite;
\ttransition: 0.4s;
\tcolor: #fff;
\tfont-weight: 500;
\tposition: absolute;
\tbottom: -3px;
\tright: -10px;
\tanimation: checkAnim 2s infinite;
\tbox-shadow: 0 0 0 5px rgba(102,103,107,0.1);
}

@keyframes checkAnim {
\t0%,100% {
\t\tbox-shadow: 0 0 0 5px rgba(102,103,107,0.15);
\t}
\t50% {
\t\tbox-shadow: 0 0 0 8px rgba(102,103,107,0.15);
\t}
}

.icon-box span {
\tcolor: #666;
\ttext-transform: uppercase;
\tfont-size: 14px;
\tfont-weight: 500;
}

.icon-box h4 {
\tmargin: 4px 0;
\tline-height: 26px;
}

.icon-box h3 {
\tmargin: 4px 0;
\tline-height: 26px;
\tfont-size: 22px;
\tfont-weight: 500;
}

.icon-box p {
\tmargin: 0;
\tmargin-top: 25px;
\tfont-style: 16px;
\tpadding: 0 10px;
\tcolor: #808080;
}

.icon-box.with-line:before {
\tcontent: \"\";
\theight: 1px;
\twidth: 100%;
\tposition: absolute;
\tleft: 50%;
\ttop: 40px;
\tbackground: #e9e9e9;
\tdisplay: block;
\tz-index: 9;
}

@media (max-width: 992px) {
\t.icon-box.with-line:before { display: none; }
}


/* ---------------------------------- */
/* Testimonials
------------------------------------- */
.testimonial-box {
\tbackground: transparent;
\tborder-radius: 6px;
\tpadding: 45px;
\tpadding-top: 35px;
\tcolor: #888;
\tposition: relative;
\tmargin: 70px 0 0;
\tbox-shadow: none;
\ttransition: 0.4s;
\tcursor: grab;
\ttext-align: center;
\ttransform: scale(0.8);
}

.testimonial-box:before {
\tcontent: \"\\e948\";
\tfont-family: \"Material-Icons\";
\tposition: absolute;
\ttop: -35px;
\tleft: 0;
\tfont-size: 80px;
\ttransform: translateY(-100%);
\tcolor: #66676b;
\topacity: 0;
\ttransition: 0.3s;
}

.testimonial-carousel .slick-slide {
\tmargin: 0 20px 30px 20px;
\topacity: 0;
\ttransition: 0.4s;
\tpointer-events: all;
}

.testimonial-carousel .slick-slide.slick-active {
    opacity: 1;
    filter: none;
    pointer-events: all;
}

.testimonial-carousel .slick-slide.slick-active .testimonial-box {
    transform: scale(1);
}

.testimonial-carousel .slick-slide.slick-active .testimonial-box:before {
    opacity: 1;
}

.testimonial-carousel .slick-slide.slick-active .testimonial-box {
\tbackground: #fff;
\tcolor: #666;
\tbox-shadow: 0 0 30px rgba(0,0,0,0.08);
}

.testimonial,
.testimonial p {
\tfont-size: 18px;
\tfont-weight: 300;
\tline-height: 30px;
\tcolor: #808080;
\tline-height: 32px;
}

.testimonial-author {
\tdisplay: block;
\twidth: 100%;
\tpadding: 20px 0 15px 0;
\ttext-align: center;
\tmargin: 0 auto;
}

.testimonial-avatar {
\tposition: absolute;
\ttop: 0;
\ttransform: translateY(-50%);
\tmargin: 0 auto;
\tleft: 0;
\tright: 0;
}

.testimonial-avatar img {
\twidth: 70px;
\tdisplay:inline-block;
\ttext-align: center;
\theight: auto;
\tborder-radius: 50%;
\tmargin: 0 auto;
}

.testimonial-author h4 {
\tdisplay: block;
\twidth: 100%;
\tfont-size: 18px;
\tpadding-top: 0;
\tcolor: #333;
\tfont-weight: 600;
}

.testimonial-author span {
\tdisplay: block;
    padding-top: 0;
    display: inline-block;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 300;
    line-height: 23px;
    padding: 3px 12px;
    margin: 5px 0 10px 0;
    background-color: #66676b;
    color: #fff;
\tbox-shadow: 0 2px 10px rgba(102,103,107,0.25);
}

.testimonial-box .star-rating {
\theight: 30px;
\tdisplay: inline-block;
\tmargin-bottom: -10px;
\tmargin-top: 15px;
}


.testimonial-carousel .slick-next { right: 25%; }
.testimonial-carousel .slick-prev { left: 25%; }

.testimonial-carousel .slick-next,
.testimonial-carousel .slick-prev { margin-top: 35px; }


/* Media Queries for Testimonials */
@media (max-width: 1600px) {
\t.testimonial-carousel .slick-next { right: 15%; }
\t.testimonial-carousel .slick-prev { left: 15%; }
}

@media (max-width: 1240px) {
\t.testimonial-carousel .slick-next { right: 13%; }
\t.testimonial-carousel .slick-prev { left: 13%; }
}

@media (max-width: 992px) {
\t.testimonial-carousel .slick-next { right: 8%; }
\t.testimonial-carousel .slick-prev { left: 8%; }
\t.testimonial-box { padding: 35px; }
\t.testimonial,
\t.testimonial p { font-size: 16px; line-height: 28px; }
}

@media (max-width: 768px) {
\t.testimonial-carousel .slick-next { right: 20px; }
\t.testimonial-carousel .slick-prev { left: 20px; }

\t.testimonial-carousel .slick-next,
\t.testimonial-carousel .slick-prev { transform: scale(0.8) translateY(-50%) }

}

/* Logo Carousel */
.logo-carousel .carousel-item {
\tdisplay: inline-block;
\theight: 120px;
\ttext-align: center;
\tposition: relative;
}

.logo-carousel .carousel-item a {
\tdisplay: inline-block;
}

.logo-carousel .carousel-item img {
\tmax-height: 60%;
\tmax-width: 60%;
\tmargin: 0 auto;
\tleft: 0;
\tright: 0;
\tposition: absolute;
\ttop: 50%;
\ttransform: translateY(-50%);
}

.logo-carousel .slick-prev, .logo-carousel .slick-next { top: 50%; }


/* Blog Carousel */
.blog-carousel {
    width: calc(100% + 30px);
    left: -15px;
}

.blog-carousel .blog-compact-item-container {
\tmargin: 15px;
    display: inline-block;
    width: 30%;
}

.blog-carousel.slick-initialized .blog-compact-item-container { width: auto; }

.full-width-carousel-fix .default-slick-carousel.slick-initialized .freelancer,
.full-width-carousel-fix .blog-carousel.slick-initialized .blog-compact-item-container {
\tmargin: 15px;
\ttransform: scale(0.85);
\topacity: 0;
\tpointer-events: none;
\ttransition: 0.4s;
}

.full-width-carousel-fix .default-slick-carousel.slick-initialized .slick-slide.slick-active.freelancer,
.full-width-carousel-fix .blog-carousel.slick-initialized .slick-slide.slick-active.blog-compact-item-container {
\ttransform: scale(1);
\topacity: 1;
\tpointer-events: all;
}

.full-width-carousel-fix .blog-carousel.slick-initialized .slick-slide.slick-active.blog-compact-item-container:hover {
\ttransform: scale(1) translateY(-10px);
}



/* ---------------------------------- */
/* Text Banner
------------------------------------- */
.photo-section {
\tbackground-size: cover;
\tbackground-position: 50%;
\tdisplay: block;
\tposition: relative;
}

.photo-section:before {
\tcontent: \"\";
\twidth: 100%;
\theight: 100%;
\tbackground-color: #333;
\topacity: 0.65;
\tdisplay: block;
\tposition: absolute;
\ttop: 0;
}

/* Styles for info banner with parallax */
.text-content {
\tbackground: transparent;
\tpadding: 110px 0px;
\tfont-weight: 500;
\tz-index: 99;
\tposition: relative;
}

.text-content.white-font,
.text-content h1,
.text-content h2,
.text-content h3,
.text-content h4,
.text-content h5,
.text-content.white-font h1,
.text-content.white-font h2,
.text-content.white-font h3,
.text-content.white-font h4,
.text-content.white-font h5 {
\tcolor: #fff;
}

.text-content a.button {
\tfont-size: 16px;
\tbox-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

.text-content p {
\tfont-size: 18px;
\tfont-weight: 300;
\tline-height: 31px;
\topacity: 0.85;
}

.text-content h2 {
\tmargin-bottom: 23px;
\tline-height: 46px;
\tfont-size: 34px;
\tfont-weight: 500;
}

.top-1 { position: relative; top: -1px; }
.top-0 { position: relative; }


@media (max-width: 992px) {
\t.text-content {
\t\tpadding: 80px 0;
\t}

\t.text-content h2 {
\t\tmargin-bottom: 20px;
\t\tline-height: 40px;
\t\tfont-size: 30px;
\t\tfont-weight: 500;
\t}
}


/* ---------------------------------- */
/* Counters
------------------------------------- */
.counters-container\t{
\tdisplay: flex;
\tflex-wrap: wrap;
}

.single-counter {
\tflex: 1;
\ttext-align: center;
\tposition: relative;
\tborder-right: 1px solid #e0e0e0;
\tmargin-top: 80px;
}

.single-counter:last-child {
\tborder-right: 0;
}

.single-counter i {
\tfont-size: 64px;
\tcolor: #ccc;
\tposition: absolute;
\ttop: -20px;
\ttransform: translateY(-100%);
\tleft: 0;
\tright: 0;
}

.single-counter h3 {
\tfont-size: 36px;
\tfont-weight: 600;
\tcolor: #66676b;
\tmargin-bottom: 7px;
}

.single-counter .counter-title {
    color: #888;
    padding-top: 0;
    display: inline-block;
    border-radius: 4px;
    font-size: 18px;
}

/* Media Queries for Counters */
@media (max-width: 992px) {
\t.single-counter {
\t\tflex: 1 1 50%;
\t\tmargin-bottom: 30px;
\t}
\t.single-counter:nth-child(2) {
\t\tborder: none;
\t}
\t.counters-container { margin-bottom: -30px; }
}

/* Media Queries for Counters */
@media (max-width: 768px) {
\t.single-counter {
\t\tflex: 1 1 100%;
\t\tborder: none;
\t\tborder-bottom: 1px solid #e0e0e0;
\t\tpadding-bottom: 30px;
\t}
\t.single-counter:nth-child(2) {
\t\tborder-bottom: 1px solid #e0e0e0;
\t}
\t.single-counter:last-child { margin-bottom: -15px; border-bottom: none; }
\t.counters-container { margin-bottom: -30px; }
}


/* ---------------------------------- */
/* Countdown
------------------------------------- */
.countdown {
\tborder-radius: 4px;
\twidth: 100%;
\tdisplay: block;
\ttext-align: center;
\tfont-size: 18px;
\tline-height: 28px;
\tpadding: 14px;
}

.countdown.green {
\tbackground-color: #e7f8ec;
\tcolor: #289c41;
}

.countdown.yellow {
\tbackground-color: #fbf6dd;
\tcolor: #a18d29;
}


/* ---------------------------------- */
/* Bidding Widget
------------------------------------- */
.bidding-widget {
\tborder-radius: 4px;
\tbackground-color: #f9f9f9;
}

.dashboard-box .bidding-widget,
.popup-tab-content .bidding-widget {
\tborder-radius: 0;
\tbackground-color: transparent;
}

.dashboard-box .slider-handle.custom,
.popup-tab-content .slider-handle.custom {
\tborder: 1px solid #e0e0e0;
\tbox-shadow: 0 1px 4px rgba(0,0,0,0.07);
}

.bidding-widget .bidding-headline {
\tbackground-color: #f0f0f0;
\tcolor: #333;
\tposition: relative;
\tborder-radius: 4px 4px 0 0;
}

.bidding-widget .bidding-inner {
\tpadding: 30px 35px;
}

.bidding-widget .bidding-headline {
\tcolor: #333;
\tfont-size: 20px;
\tpadding: 20px 35px;

}

.bidding-widget .bidding-headline h3 {
\tcolor: #333;
\tfont-size: 20px;
\tpadding: 0;
\tmargin: 0;
}

.bidding-widget .bidding-signup {
\tcolor: #666;
\tfont-size: 14.7px;
\tpadding: 16px 35px;
\ttext-align: center;
\tborder-top: 1px solid #e0e0e0;
}

.bidding-widget .bidding-signup a {
\tfont-weight: 600;
}

.bidding-widget button.button {
\tmargin-bottom: 3px;
}

.bidding-widget .bidding-detail {
\tcolor: #888;
\tdisplay: block;
}

.bidding-widget .bidding-detail strong {
\tcolor: #333;
\tfont-weight: 700;
}

.dashboard-box .bidding-detail strong { font-weight: 600; }

.bidding-widget .bidding-value {
\tfont-size: 26px;
\tfont-weight: 500;
\tcolor: #333;
\tmargin: 5px 0 20px 0;
}

.bidding-widget .bidding-value {
\tfont-size: 26px;
\tfont-weight: 500;
\tcolor: #333;
}

.bidding-widget .button  {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
\ttransition: 0.3s;
\theight: 46px;
}

.bidding-widget .button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
\ttransform: translateY(-2px)
}

.bidding-widget .bidding-fields {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: flex-start;
\tmargin-top: 12px;
\twidth: calc(100% + 20px);
}

.bidding-widget .bidding-fields .bidding-field {
\tflex: 1;
\tmargin-right: 20px;
}

/* Quantity Buttons for Booking Widget*/
.qtyButtons {
    display: flex;
    margin: 0;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
    height: 48px;
    padding: 6px;
}

.qtyButtons.with-border {
\tborder: 1px solid #e0e0e0;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05)
}

.qtyButtons input {
\toutline: 0;
\tfont-size: 16px;
\tfont-weight: 600;
\ttext-align: center;
\twidth: 50px;
\theight: 36px;
\tcolor: #808080;
\tline-height: 36px;
\tmargin: 0 !important;
\tpadding: 0 5px;
\tborder: none;
\tbox-shadow: none;
\tdisplay: inline-block;
\tflex-grow: 1;
\tbox-shadow: none !important;
}

.qtyTitle {
\tfont-size: 16px;
\tfont-weight: 600;
\tline-height: 36px;
\tpadding-right: 15px;
\tdisplay: block;
\tflex: 1;
}

.qtyInc,
.qtyDec {
    width: 36px;
    height: 36px;
    line-height: 36px;
    font-size: 18px;
    background-color: #f0f0f0;
    color: #808080;
    display: inline-block;
    text-align: center;
    border-radius: 4px;
    cursor: pointer;
\tfont-family: \"Feather-Icons\";
    flex: 1;
\tmin-width: 36px;
\tmax-width: 36px;
\ttransition: 0.3s;
}

.qtyInc:before { content: \"\\e9b1\"; }
.qtyDec:before { content: \"\\e996\"; }

.qtyInc:hover,
.qtyDec:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
}

.qtyTotal {
\tbackground-color: #66676b;
\tborder-radius: 50%;
\tcolor: #fff;
\tdisplay: inline-block;
\tfont-size: 11px;
\tfont-weight: 600;
\tfont-family: \"Open Sans\", sans-serif;
\tline-height: 18px;
\ttext-align: center;
\tposition: relative;
\ttop: -2px;
\tleft: 2px;
\theight: 18px;
\twidth: 18px;
}


/* Media Queiers for Bidding Widget */
@media (max-width: 1366px) {
\t.qtyInc, .qtyDec { min-width: 34px; max-width: 34px; }
\t.bidding-widget .bidding-inner { padding: 27px 32px; }
\t.bidding-widget .bidding-headline { padding: 20px 32px; }
}

@media (max-width: 1240px) {
\t.qtyInc, .qtyDec { min-width: 36px; max-width: 36px; }

\t.bidding-widget .bidding-fields .bidding-field {
\t    flex: auto;
\t    margin-right: 0;
\t    width: 100%;
\t}

\t.bidding-widget .bidding-fields .bidding-field:first-child { margin-bottom: 20px }
\t.bidding-widget .bidding-fields { width: 100%; }

}

/* -------------------------------- */
/* 404 Error Page
----------------------------------- */
#not-found { margin: 40px 0 80px 0; }

#not-found.center { text-align: center; }

#not-found h2 {
\ttext-align: center;
\tfont-size: 210px;
\tline-height: 210px;
\tfont-weight: 500;
\tletter-spacing: -8px;
}

#not-found p {
\ttext-align: center;
\tfont-size: 28px;
\tline-height: 42px;
\tdisplay: inline-block;
\tmargin-top: 0px;
\tcolor: #999;
}

#not-found i {
\tcolor: #e0e0e0;
\tfont-size: 210px;
\ttop: 0;
\tmargin-left: -40px;
\tposition: relative;
}


.not-found-search.intro-banner-search-form .intro-search-field,
.not-found-search.intro-banner-search-form input,
.not-found-search.intro-banner-search-form {
\tbackground: #f7f7f7;
\tbox-shadow: none;
}

@media (max-width: 992px) {
\t.not-found-search.intro-banner-search-form {
\t\tbackground: #fff;
\t}
}

@media (max-width: 767px) {
\t#not-found h2 {
\t\tfont-size: 110px;
\t\tline-height: 110px;
\t}

\t#not-found p {
\t\tfont-size: 20px;
\t\tline-height: 32px;
\t}

\t#not-found i {
\t\tfont-size: 120px;
\t\ttop: 5px;
\t\tmargin-left: 0;
\t}
\t
\t.not-found-search.intro-banner-search-form {
\t\tmargin-top: -30px;
\t}

\t.login-register-page .account-type { width: 100%; }
\t.login-register-page .account-type div { margin-right: 0; }
\t.login-register-page .social-login-buttons button { 
\t\tmargin-right: 0;
\t    width: 100%;
\t    display: block;
\t    max-width: 100%;
\t}
}

.login-register-page .welcome-text h3 { font-size: 26px; }


/* -------------------------------------------------------------- */
/* 05. Scripts Styles
----------------------------------------------------------------- */

/* ---------------------------------- */
/* Slick Slider
------------------------------------- */
/* Slider */
.slick-slider {
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list {
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus {
    outline: none;
}
.slick-list.dragging {
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track {
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}
.slick-track:before,
.slick-track:after {
    display: table;

    content: '';
}
.slick-track:after {
    clear: both;
}
.slick-loading .slick-track {
    visibility: hidden;
}

.slick-slide {
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide {
    float: right;
}
.slick-slide img {
    display: block;
}
.slick-slide.slick-loading img {
    display: none;
}
.slick-slide.dragging img {
    pointer-events: none;
}
.slick-initialized .slick-slide {
    display: block;
}
.slick-loading .slick-slide {
    visibility: hidden;
}
.slick-vertical .slick-slide {
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

/* Slider */
/*.slick-loading .slick-list {
    background: #fff url('./ajax-loader.gif') center center no-repeat;
}
*/

/* Arrows */
.slick-prev,
.slick-next {
    font-size: 0;
    line-height: 0;
    position: absolute;
    top: 50%;
    display: block;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    cursor: pointer;
    border: none;
    outline: none;
    background-color: #333;
    border-radius: 4px;
    width: 48px;
    height: 48px;
    display: block;
    top: calc(50% - 15px);
    transform: translateY(-50%);
    transition: 0.3s;
    box-shadow: 0 3px 12px rgba(0,0,0,0.15);
    z-index: 10;
}

.slick-prev:hover,
.slick-next:hover {
    color: transparent;
    outline: none;
    background: #66676b;
}
.slick-prev:hover:before,
.slick-next:hover:before {
    opacity: 1;
}

.slick-prev.slick-disabled,
.slick-next.slick-disabled {
    pointer-events: none;
\tcursor: default;
\tbackground-color: #e8e8e8;
\tbox-shadow: none;
}

.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before {
    color: #808080;
}

.slick-prev:before,
.slick-next:before {
    font-family: \"Feather-Icons\";
    font-size: 26px;
    line-height: 1;
    opacity: 1;
    transition: 0.3s;
    position: relative;
    color: #fff;
}

.slick-prev { left: -85px; }
.slick-prev:before {  content: '\\e92f'; left: -1px; }

.slick-next {  right: -85px; }
.slick-next:before { content: '\\e930'; right: -1px; }

/* Dots */
.slick-dots {
\tmargin: 0 auto;
\tpadding: 0;
\ttext-align: center;
}

.slick-dots li {
    position: relative;
    display: inline-block;
    padding: 0;
    margin: 0 3px;
    cursor: pointer;
}

.slick-dots li {
    font-size: 0;
    line-height: 0;
    cursor: pointer;
    color: transparent;
    border: 0;
    position: relative;
    outline: none;
\tdisplay: inline-block;
\twidth: 15px;
\theight: 15px;
\tmargin: 0 3px;
\topacity: 1;
\tborder-radius: 50%;
\tline-height: 0;
\tbox-shadow: inset 0 0 0 2px #c0c0c0;
\ttransition: all 0.3s;
}

.slick-dots li.slick-active {
\tbox-shadow: inset 0 0 0 6px #c0c0c0;
\ttransition: all 0.3s;
}

.slick-dots li:after {
    display: block;
    height: 13px;
    width: 13px;
\tcontent: \"\";
\tposition: absolute;
\ttop: 1px;
\tleft: 1px;
\tbackground-color: transparent;
\tborder-radius: 50%;
\ttransition: all 0.3s;
\topacity: 0;
\tbackground-color: #c0c0c0;
}

.slick-dots li.slick-active:after {
\topacity: 1;
}


/* Reset */
.slick-slide { display: none; outline: none; }
.slick-initialized .slick-slide { display: block; }

.default-slick-carousel .slick-carousel-item { margin: 15px; }

.default-slick-carousel {
    height: auto;
    width: calc(100% + 30px);
    left: -15px;
}

.default-slick-carousel,
.testimonial-carousel,
.logo-carousel,
.blog-carousel { display: none; }

.default-slick-carousel.slick-initialized,
.testimonial-carousel.slick-initialized,
.logo-carousel.slick-initialized,
.blog-carousel.slick-initialized { display: block; }

/* Custom */
.default-slick-carousel .freelancer { margin: 15px; width: 30%; }
.default-slick-carousel.slick-initialized .freelancer { width: auto; }
.default-slick-carousel .freelancer-details-list ul li { margin-right: 22px; }
.default-slick-carousel .freelancer-details-list ul li:last-child { margin-right: 0px; }

.default-slick-carousel .freelancer:hover {
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
    transform: translateY(0px);
}

@media (min-width: 1367px) and (max-width: 1440px) {
\t.slick-prev { left: -65px; }
\t.slick-next {  right: -65px; }
}

@media (max-width: 1290px) {
\t.slick-prev { left: -10px; }
\t.slick-next {  right: -10px; }
}

@media (max-width: 1090px) {
\t.slick-prev { left: 40px; }
\t.slick-next {  right: 40px; }
}

.full-width-carousel-fix { overflow: hidden; }
.full-width-carousel-fix .slick-list { overflow: visible; }

/* ---------------------------------- */
/* Simlpebar.js (custom scrollbar)
------------------------------------- */
[data-simplebar] {
    position: relative;
    z-index: 0;
    overflow: hidden!important;
    max-height: inherit;
    -webkit-overflow-scrolling: touch; /* Trigger native scrolling for mobile, if not supported, plugin is used. */
}

[data-simplebar=\"init\"] {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.simplebar-scroll-content {
    overflow-x: hidden!important;
    overflow-y: scroll;
    min-width: 100%!important;
    max-height: inherit!important;
    -webkit-box-sizing: content-box!important;
            box-sizing: content-box!important;
}

.simplebar-content {
    overflow-y: hidden!important;
    overflow-x: scroll;
    -webkit-box-sizing: border-box!important;
            box-sizing: border-box!important;
    min-height: 100%!important;
}

.simplebar-track {
    z-index: 1;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 11px;
    height: calc(100% - 6px);
    margin-top: 6px;
}

.simplebar-scrollbar {
    position: absolute;
    right: 6px;
    width: 5px;
    min-height: 10px;
}

.simplebar-scrollbar:before {
    position: absolute;
    content: \"\";
    background: black;
    border-radius: 7px;
    left: 0;
    right: 0;
    opacity: 0;
    transition: opacity 0.2s, background-color 0.3s;
    background-color: #d8d8d8;
}

.simplebar-scrollbar:hover:before {
    background-color: #c8c8c8;
}

.simplebar-track:hover .simplebar-scrollbar:before,
.simplebar-track .simplebar-scrollbar.visible:before {
    /* When hovered, remove all transitions from drag handle */
    opacity:1;
    -webkit-transition: opacity 0 linear;
    transition: opacity 0 linear;
}

.simplebar-track.vertical {
    top: 0;
}

.simplebar-track.vertical .simplebar-scrollbar:before {
    top: 2px;
    bottom: 2px;
}

.simplebar-track.horizontal {
    left: 0;
    width: auto;
    height: 11px;
    display: none;
}

.simplebar-track.horizontal .simplebar-scrollbar:before {
    height: 100%;
    left: 2px;
    right: 2px;
}

.horizontal.simplebar-track .simplebar-scrollbar {
    right: auto;
    top: 2px;
    height: 7px;
    min-height: 0;
    min-width: 10px;
    width: auto;
}

body.gray .dashboard-content-container .simplebar-scrollbar:before { background-color: #c9c9c9; }
body.gray .dashboard-content-container .simplebar-scrollbar:hover:before { background-color: #b9b9b9; }
.dashboard-box .simplebar-scrollbar:before { background-color: #d8d8d8; }
.dashboard-box .simplebar-scrollbarLhover:before { background-color: #c8c8c8; }


/* ---------------------------------- */
/* Tippy.js Tooltips
------------------------------------- */

/* Dark */
.tippy-tooltip.dark-theme {
\tcolor: #fff;
\tfont-weight: 500;
\tfont-size: 14px;
\tpadding: 6px 12px;
}

.tippy-tooltip.dark-theme .tippy-backdrop { background-color: #333; }

.tippy-popper[x-placement^=top] .tippy-tooltip.dark-theme .tippy-arrow { border-top-color: #333; }
.tippy-popper[x-placement^=bottom] .tippy-tooltip.dark-theme .tippy-arrow { border-bottom-color: #333; }
.tippy-popper[x-placement^=right] .tippy-tooltip.dark-theme .tippy-arrow { border-right-color: #333; }
.tippy-popper[x-placement^=left] .tippy-tooltip.dark-theme .tippy-arrow { border-left-color: #333; }

.tippy-tooltip.dark-theme .tippy-arrow { transform: scale(0.7); }

/* Light */
.tippy-tooltip.light-theme {
\tcolor: #333;
\tfont-weight: 500;
\tfont-size: 14px;
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.1);
\tpadding: 6px 12px;
\tbackground-color: #fff;
}

.tippy-popper[x-placement^=top] .tippy-tooltip.light-theme .tippy-arrow { border-top-color: #fff; }
.tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme .tippy-arrow { border-bottom-color: #fff; }
.tippy-popper[x-placement^=right] .tippy-tooltip.light-theme .tippy-arrow { border-right-color: #fff; }
.tippy-popper[x-placement^=left] .tippy-tooltip.light-theme .tippy-arrow { border-left-color: #fff; }

/* ---------------------------------- */
/* Magnific Popup
------------------------------------- */
.mfp-bg {
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tz-index: 2000;
\toverflow: hidden;
\tposition: fixed;
\tbackground: #111;
}

.mfp-wrap {
\ttop: -10px;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tz-index: 2001;
\tposition: fixed;
\toutline: none !important;
\t-webkit-backface-visibility: hidden;
}

.mfp-container {
\theight: 100%;
\ttext-align: center;
\tposition: absolute;
\twidth: 100%;
\theight: 100%;
\tleft: 0;
\ttop: 0;
\tpadding: 0 18px;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
}

.mfp-container:before {
\tcontent: '';
\tdisplay: inline-block;
\theight: 100%;
\tvertical-align: middle;
}

.mfp-align-top .mfp-container:before {
\tdisplay: none;
}

.mfp-content {
\tposition: relative;
\tdisplay: inline-block;
\tvertical-align: middle;
\tmargin: 0 auto;
\ttext-align: left;
\tz-index: 505;
}

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
\twidth: 100%;
\tcursor: auto;
}

.mfp-ajax-cur {
\tcursor: progress;
}

.mfp-zoom-out-cur,
.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
\tcursor: -moz-zoom-out;
\tcursor: -webkit-zoom-out;
\tcursor: zoom-out;
}

.mfp-zoom {
\tcursor: pointer;
\tcursor: -webkit-zoom-in;
\tcursor: -moz-zoom-in;
\tcursor: zoom-in;
}

.mfp-auto-cursor .mfp-content {
\tcursor: auto;
}

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
\t-webkit-user-select: none;
\t-moz-user-select: none;
\tuser-select: none;
 }

.mfp-loading.mfp-figure {
\tdisplay: none;
}

.mfp-hide {
\tdisplay: none !important;
}

.mfp-preloader {
\tcolor: #aaa;
\tposition: absolute;
\ttop: 50%;
\twidth: auto;
\ttext-align: center;
\tmargin-top: -0.8em;
\tleft: 8px;
\tright: 8px;
\tz-index: 504;
}

.mfp-preloader a {
\tcolor: #cccccc;
}

.mfp-preloader a:hover {
\tcolor: #fff;
}

.mfp-s-ready .mfp-preloader {
\tdisplay: none;
}

.mfp-s-error .mfp-content {
\tdisplay: none;
}

.mfp-s-loading .mfp-arrow {
\tdisplay: none;
}

button.mfp-close,
button.mfp-arrow {
\toverflow: visible;
\tcursor: pointer;
\tborder: 0;
\t-webkit-appearance: none;
\tdisplay: block;
\tpadding: 0;
\tz-index: 506;
}

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
\tright: 0px;
\ttop: -40px;
}

/* Close Button */
.og-close,
button.mfp-close {
\tposition: absolute;
\twidth: 45px;
\theight: 45px;
\ttop: -20px;
\tdisplay: block;
\tright: -12px;
\tcursor: pointer !important;
\tz-index: 9999;
\tcolor: #fff;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tborder-radius: 50%;
\tmargin: 0px;
\tbackground-color: transparent;
\toutline: none;\ttransform: translate3d(0,0,0);
}

.mfp-iframe-holder .mfp-close {
\ttop: -50px;
\tright: -12px;
\ttransform: translate3d(0,0,0);
}

.mfp-gallery .mfp-close {
\ttop: 20px;
\tright: 10px;
}

.mfp-gallery  .mfp-content .mfp-close {
\tdisplay: none;
}

.mfp-close::after,
.mfp-close::before {
    top: 0px;
}

.og-close {
\tmargin: 17px;
\tright: 10px;
\tbackground: transparent;
\tcolor: #222;
}

.og-close:before,
.mfp-close:before {
\tfont-family: \"Feather-Icons\";
\tfont-size: 20px;
\ttop: 2px;
\tleft: 0;
\tposition: relative;
\theight: 10px;
}

.og-close:before,
.mfp-close:before {
\tcontent:\"\\ea02\";
}

#small-dialog .mfp-close,
#small-dialog-1 .mfp-close,
#small-dialog-2 .mfp-close,
#small-dialog-3 .mfp-close,
#small-dialog-4 .mfp-close,
#sign-in-dialog, .mfp-close,
.mfp-close:hover {
\tcolor: #fff;
}


/* Popup close button*/
#sign-in-dialog .mfp-close,
#small-dialog-1 .mfp-close,
#small-dialog-2 .mfp-close,
#small-dialog-3 .mfp-close,
#small-dialog-4 .mfp-close,
#small-dialog .mfp-close {
\tcolor: #666;
\tbackground-color: #e4e4e4;
\tborder-radius: 4px;
\ttop: 28px;
\tright: 40px;
    width: 40px;
    height: 40px;
}

#sign-in-dialog .mfp-close:hover,
#small-dialog-1 .mfp-close:hover,
#small-dialog-2 .mfp-close:hover,
#small-dialog-3 .mfp-close:hover,
#small-dialog-4 .mfp-close:hover,
#small-dialog .mfp-close:hover {
\tcolor: #fff;
\tbackground-color: #66676b;
}

.small-dialog-content input[type=submit] {
\twidth: 100%;
\tmargin-top: 26px;
\tmargin-bottom: 10px;
}

.small-dialog-content .divider {
\tdisplay: inline-block;
\twidth: 100%;
\tmargin-top: 15px;
\tpadding-bottom: 0;
}

.small-dialog-header {
\tfont-size: 22px;
\twidth: calc(100% + 80px);
\tposition: relative;
\tleft: -40px;
\ttop: 0;
\tborder-radius: 4px 4px 0 0;
\tdisplay: inline-block;
\tbackground-color: #f6f6f6;
\tpadding: 35px 40px;
\tmargin-bottom: 40px;
}

.small-dialog-header h3 {
\tpadding: 0;
\tmargin: 0;
\tfont-size: 23px;
}


.mfp-counter {
\tposition: absolute;
\ttop: 0;
\tright: 0;
\tcolor: #aaa;
\tfont-size: 13px;
\tline-height: 18px;
}

.mfp-arrow {
\topacity: 1;
\tmargin: 0 20px;
\ttop: 50%;
\ttransform: translateY(-50%);
\tz-index: 9999;
\tcolor: #fff;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tcursor: pointer;
\twidth: 60px;
\theight: 60px;
\tposition: absolute;
\tdisplay: block;
\tz-index: 100;
\toverflow: hidden;
\tbackground: rgba(255,255,255,0.15);
\tborder-radius: 50%;
\toutline: none;
}

.mfp-arrow:hover {
\tbackground: #66676b;
\tcolor: #fff;
}

.mfp-arrow.mfp-arrow-left,
.mfp-arrow.mfp-arrow-right {
\tfont-family: \"simple-line-icons\";
\tfont-size: 20px;
}

.mfp-arrow.mfp-arrow-right { right: 15px; }

.mfp-arrow.mfp-arrow-left:before { content: \"\\e605\"; left: -1px; top: 0px; position: relative; }
.mfp-arrow.mfp-arrow-right:before { content: \"\\e606\"; left: 1px; top: 0px; position: relative; }

.mfp-content:hover .mfp-arrow {
\topacity: 1;
}

.mfp-iframe-holder {
\tpadding-top: 40px;
\tpadding-bottom: 40px;
}

.mfp-iframe-holder .mfp-content {
\tline-height: 0;
\twidth: 100%;
\tmax-width: 1180px;
}

.mfp-iframe-scaler {
\twidth: 100%;
\theight: 0;
\toverflow: hidden;
\tpadding-top: 54%;
}

.mfp-iframe-scaler iframe {
\tposition: absolute;
\tdisplay: block;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tbox-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
\tbackground: black;
}

/* Popup */
#sign-in-dialog,
#small-dialog-1,
#small-dialog-2,
#small-dialog-3,
#small-dialog-4,
#small-dialog {
\tbackground: #fff;
\tpadding: 40px;
\tpadding-top: 0;
\ttext-align: left;
\tmax-width: 610px;
\tmargin: 40px auto;
\tposition: relative;
\tbox-sizing:border-box;
\tborder-radius: 4px;
\tmax-width: 550px;
}


#sign-in-dialog-1 span.line,
#sign-in-dialog-2 span.line,
#sign-in-dialog-3 span.line,
#sign-in-dialog-4 span.line,
#sign-in-dialog span.line,
#small-dialog span.line {padding-top: 0;}

.my-mfp-zoom-in .zoom-anim-dialog {
\topacity: 0;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\t-webkit-transform: scale(0.8);
\t-moz-transform: scale(0.8);
\t-ms-transform: scale(0.8);
\t-o-transform: scale(0.8);
\ttransform: scale(0.8);
}

/* animate in */
.my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
\topacity: 1;
\t-webkit-transform: scale(1);
\t-moz-transform: scale(1);
\t-ms-transform: scale(1);
\t-o-transform: scale(1);
\ttransform: scale(1);
}

/* animate out */
.my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
\t-webkit-transform: scale(0.8);
\t-moz-transform: scale(0.8);
\t-ms-transform: scale(0.8);
\t-o-transform: scale(0.8);
\ttransform: scale(0.8);
\topacity: 0;
}

/* Dark overlay, start state */
.my-mfp-zoom-in.mfp-bg {
\topacity: 0.001; /* Chrome opacity transition bug */
\t-webkit-transition: opacity 0.3s ease-out;
\t-moz-transition: opacity 0.3s ease-out;
\t-o-transition: opacity 0.3s ease-out;
\ttransition: opacity 0.3s ease-out;
}
/* animate in */
.my-mfp-zoom-in.mfp-ready.mfp-bg {
\topacity: 0.85;
}
/* animate out */
.my-mfp-zoom-in.mfp-removing.mfp-bg {
\topacity: 0;
}
.dupa {
\tdisplay: block;
\theight: 30px;
}


/* Main image in popup */
img.mfp-img {
\twidth: auto;
\tmax-width: 100%;
\theight: auto;
\tdisplay: block;
\tline-height: 0;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\tmargin: 40px auto;
\tborder-radius: 4px;
}

/* The shadow behind the image */
.mfp-figure:after {
\tcontent: '';
\tposition: absolute;
\tleft: 0;
\ttop: 40px;
\tbottom: 40px;
\tdisplay: block;
\tright: 0;
\twidth: auto;
\theight: auto;
\tz-index: -1;
\tbox-shadow: 0 0 18px rgba(11,11,11, 0.6);
}

.mfp-figure {
\tline-height: 0;
}

.mfp-bottom-bar {
\tmargin-top: -30px;
\tposition: absolute;
\ttop: 100%;
\tleft: 0;
\twidth: 100%;
\tcursor: auto;
}

.mfp-title {
\ttext-align: left;
\tline-height: 18px;
\tcolor: #f3f3f3;
\tword-break: break-word;
\tpadding-right: 36px;
}

.mfp-figure small {
\tcolor: #bdbdbd;
\tdisplay: block;
\tfont-size: 12px;
\tline-height: 14px;
}

.mfp-image-holder .mfp-content {
\tmax-width: 100%;
}

.mfp-gallery .mfp-image-holder .mfp-figure {
\tcursor: pointer;
}


/* Media Queries for Magnific Popup */
@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {

  .mfp-img-mobile .mfp-image-holder {
\tpadding-left: 0;
\tpadding-right: 0;
   }

  .mfp-img-mobile img.mfp-img {
\tpadding: 0
   }

  /* The shadow behind the image */
  .mfp-img-mobile .mfp-figure:after {
\ttop: 0;
\tbottom: 0;
   }

  .mfp-img-mobile .mfp-bottom-bar {
\tbackground: rgba(0, 0, 0, 0.6);
\tbottom: 0;
\tmargin: 0;
\ttop: auto;
\tpadding: 3px 5px;
\tposition: fixed;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
   }

  .mfp-img-mobile .mfp-bottom-bar:empty {
\tpadding: 0;
   }

  .mfp-img-mobile .mfp-counter {
\tright: 5px;
\ttop: 3px;
   }

  .mfp-img-mobile .mfp-close {
\ttop: 0;
\tright: 0;
\twidth: 35px;
\theight: 35px;
\tline-height: 35px;
\tbackground: rgba(0, 0, 0, 0.6);
\tposition: fixed;
\ttext-align: center;
\tpadding: 0;
   }

  .mfp-img-mobile .mfp-figure small {
\tdisplay: inline;
\tmargin-left: 5px;
   }
}


.mfp-ie7 .mfp-img {
\tpadding: 0;
}

.mfp-ie7 .mfp-bottom-bar {
\twidth: 600px;
\tleft: 50%;
\tmargin-left: -300px;
\tmargin-top: 5px;
\tpadding-bottom: 5px;
}

.mfp-ie7 .mfp-container {
\tpadding: 0;
}

.mfp-ie7 .mfp-content {
\tpadding-top: 44px;
}

.mfp-ie7 .mfp-close {
\ttop: 0;
\tright: 0;
\tpadding-top: 0;
}

.mfp-fade.mfp-bg {
\topacity: 0;
\t-webkit-transition: all 0.2s ease-out;
\t-moz-transition: all 0.2s ease-out;
\ttransition: all 0.2s ease-out;
}

.mfp-fade.mfp-bg.mfp-ready {
\topacity: 0.92;
\tbackground-color: #111;
}

.mfp-fade.mfp-bg.mfp-removing {
\topacity: 0;
}

.mfp-fade.mfp-wrap .mfp-content {
\topacity: 0;
\t-webkit-transition: all 0.2s ease-out;
\t-moz-transition: all 0.2s ease-out;
\ttransition: all 0.2s ease-out;
}

.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
\topacity: 1;
}

.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
\topacity: 0;
}

/* Feedback Yes No */
.feedback-yes-no strong{
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tdisplay: block;
}

.feedback-yes-no .radio {
\tmargin-right: 15px;
}

.feedback-yes-no { margin-bottom: 15px; }

.feedback-yes-no .leave-rating {
\ttransform: scale(1.1);
\tmargin: 3px 0 10px 3px;
}


/* ---------------------------------- */
/* Popup tabs
------------------------------------- */
.popup-tabs-nav {
\tlist-style: none;
    margin: 0;
    padding: 0;
    width: 100%;
    display: block;
    height: 62px;
    background: #f8f8f8;
    border-radius: 4px 4px 0 0;
    border-bottom: 1px solid #e0e0e0;
}

.popup-tabs-nav li {
\tfloat: left;
\tline-height: 62px;
\theight: 62px;
\tpadding: 0;
\tmargin-right: 0;
\tposition: relative;
}

.popup-tabs-nav li:first-child a {
\tborder-radius: 4px 0 0 0;
}

.popup-tabs-nav li a,
.popup-tab-reviews {
\t-webkit-transition: all 0.25s ease-in-out;
\ttransition: all 0.25s ease-in-out;
}

.popup-tabs-nav li a {
\tborder: none;
\tcolor: #777;
\tdisplay: inline-block;
\toutline: none;
\tpadding: 0;
\ttext-decoration: none;
\tfont-size: 16px;
\tz-index: 10;
\tposition: relative;
\theight: 100%;
\tpadding: 0 30px;
\tborder-right: 1px solid transparent;
\tborder-left: 1px solid transparent;
\ttransition: all 0.3s, font-weight 0s;
\tborder-right: 1px solid #e0e0e0;
}

.popup-tabs-nav li.active {
\tbackground-color: #fff;
\tposition: relative;
}

.popup-tabs-nav li a:hover {
\tbackground-color: #f3f3f3;
\theight: calc(100% - 1px);
\tcolor: #333;
}

.popup-tabs-nav li:last-child a:hover {
\tborder-right: 1px solid #e0e0e0;
}

.popup-tabs-nav li.active a:hover,
.popup-tabs-nav li.active {
\tbackground-color: #fff;
}

.popup-tabs-nav li.active a {
\tcolor: #66676b;
\tfont-weight: 600;
}

.popup-tabs-nav li.active:after {
\tcontent: \"\";
\tposition: absolute;
\tdisplay: block;
\tbottom: 0;
\tleft: 0;
\twidth: 100%;
\theight: 1px;
\tbackground-color: #fff;
\tz-index: 111;
}

.popup-tabs-nav li:first-child.active {
\tborder-left: none;
\tborder-radius: 4px 0 0 0;
}

.popup-tab-content {
\tpadding: 50px 35px;
\tposition: relative;
\tz-index: 10;
\tdisplay: inline-block;
\twidth: 100%;
}

.popup-tabs-container {
\toverflow: hidden;
\twidth: 100%;
}

.popup-tab-content p:last-child { margin-bottom: 0; }

.dialog-with-tabs#sign-in-dialog,
.dialog-with-tabs#small-dialog-1,
.dialog-with-tabs#small-dialog-2,
.dialog-with-tabs#small-dialog-3,
.dialog-with-tabs#small-dialog-4,
.dialog-with-tabs#small-dialog { 
\tpadding: 0;
\tcolor: #666;
\tmax-width: 540px;
\tbox-shadow: 0 0 25px rgba(0,0,0,0.25);
}

/* Close Button Adjustments*/
#sign-in-dialog.dialog-with-tabs .mfp-close,
#small-dialog.dialog-with-tabs .mfp-close,
#small-dialog-1.dialog-with-tabs .mfp-close,
#small-dialog-2.dialog-with-tabs .mfp-close,
#small-dialog-3.dialog-with-tabs .mfp-close,
#small-dialog-4.dialog-with-tabs .mfp-close {
    color: #888;
    background-color: #f8f8f8;
    border-left: 1px solid #e0e0e0;
    border-radius: 0 4px 0 0;
    top: 0;
    right: 0;
    width: 62px;
    height: 61px;
}

#sign-in-dialog.dialog-with-tabs .mfp-close:hover,
#small-dialog-1.dialog-with-tabs .mfp-close:hover,
#small-dialog-2.dialog-with-tabs .mfp-close:hover,
#small-dialog-3.dialog-with-tabs .mfp-close:hover,
#small-dialog-4.dialog-with-tabs .mfp-close:hover,
#small-dialog.dialog-with-tabs .mfp-close:hover {
    color: #333;
    background-color: #f2f2f2;
}

.dialog-with-tabs .mfp-close:before,
.dialog-with-tabs .mfp-close:before {
    font-size: 24px;
}


/* Chrome autocomplete highlight reset */
.dialog-with-tabs input:-webkit-autofill,
.dialog-with-tabs input:focus:-webkit-autofill {
    border: 1px solid #e0e0e0;
    -webkit-box-shadow: inset 0 0 0px 9999px white, 0 1px 4px rgba(0,0,0,0.07);
}

.dialog-with-tabs input {
    margin-bottom: 22px;
}

/* Forgot Password Link */
.dialog-with-tabs .forgot-password {
\tfont-size: 14px;
\tcolor: #888;
\tmargin-top: -12px;
\tdisplay: block;
}

.dialog-with-tabs .forgot-password:hover {
\tcolor: #66676b;
}


/* Submit Button Adjustments */
.dialog-with-tabs .button {
\theight: 48px;
\twidth: 100% !important;
\tmargin-top: 25px;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

/* Welcome Text */
.welcome-text {
\tdisplay: block;
\ttext-align: center;
\tcolor: #808080;
\tmargin-bottom: 33px;
}

.welcome-text h3 {
\tdisplay: block;
\tfont-weight: 700;
\tcolor: #333;
\tfont-size: 24px;
}

.welcome-text span a { font-weight: 500; }

.welcome-text span {
\tdisplay: block;
\tmargin-top: 4px;
}

/* Social Login Separator */
.social-login-separator {
\twidth: 100%;
\tdisplay: block;
\ttext-align: center;
\tposition: relative;
\twidth: 100%;
\tmargin: 38px 0 15px 0;
\theight: 1px;
}

.social-login-separator:before {
\twidth: 100%;
\tcontent: \"\";
\theight: 1px;
\tdisplay: block;
\tbackground-color: #e0e0e0;
\tposition: absolute;
\ttop: 0;
}

.social-login-separator span {
\tbackground-color: #fff;
\ttop: 0;
\tposition: absolute;
\tline-height: 10px;
\ttop: -5px;
\tmargin-left: -15px;
\tpadding: 0px 10px;
\tcolor: #808080;
}

/* Social Login Buttons */
.social-login-buttons {
\tdisplay: flex;
\twidth: calc(100% + 20px)
}

.social-login-buttons button {
\tflex: 1;
\ttext-align: center;
\tborder: 1px solid #333;
\tcolor: #333;
\tborder-radius: 4px;
\tmargin-top: 10px;
\tmargin-right: 20px;
\tfont-size: 14px;
\tpadding: 9px 5px;
\tmax-width: 50%;
\ttransition: 0.3s;
}

.social-login-buttons button:hover {
\tbackground-color: #333;
\tcolor: #fff;
}

.social-login-buttons button i {
\tposition: relative;
\ttop: 1px;
\tmargin-right: 7px;
\tfont-size: 15px;
}

.social-login-buttons .facebook-login {
\tborder-color: #3b5998;
\tcolor: #3b5998;
}

.social-login-buttons .facebook-login:hover {
\tbackground-color: #3b5998;
\tcolor: #fff;
}

.social-login-buttons .google-login {
\tborder-color: #dd4b39;
\tcolor: #dd4b39;
}

.social-login-buttons .google-login:hover {
\tbackground-color: #dd4b39;
\tcolor: #fff;
}

@media (max-width: 768px) {
\t.social-login-separator { margin-bottom: 25px; }
\t.social-login-buttons,
\t.social-login-buttons a { width: 100%; display: block; max-width: 100%; }
}

/* Account Type */
.account-type {
\tdisplay: flex;
\twidth: calc(100% + 20px);
\tmargin: 0 0 20px 0;
}

.account-type div {
\tflex: 1;
\tmargin-right: 20px;
}

.account-type label {
  border-radius: 3px;
  border: none;
  background-color: #f2f2f2;
  width: 100%;
}

/* hide input */
.account-type input.account-type-radio:empty {
\tdisplay: none;
}

/* style label */
.account-type label i {
\tposition: relative;
\tfont-size: 18px;
\ttop: 2px;
\tmargin-right: 2px;
}

.account-type input.account-type-radio:empty ~ label {
\tposition: relative;
\tfloat: left;
\tpadding: 10px;
\ttext-align: center;
\tpadding-bottom: 11px;
\tcursor: pointer;
\t-webkit-user-select: none;
\t-moz-user-select: none;
\t-ms-user-select: none;
\tuser-select: none;
\tborder-radius: 4px;
\tcolor: #888;
\ttransition: 0.4s;
\theight: 48px;
\tline-height: 28px;
\toverflow: hidden;
}

.account-type input.account-type-radio ~ label:hover {
\tcolor: #289c41;
\tbackground-color: #e4f6e9;
}

.account-type input.account-type-radio:checked ~ label {
\tcolor: #fff;
\tbackground-color: #47bb67;
}

.account-type input.account-type-radio:empty ~ label:after,
.account-type input.account-type-radio:empty ~ label:before {
\tposition: absolute;
\tdisplay: block;
\ttop: 0;
\tbottom: 0;
\tleft: 0;
\tcontent: '';
\twidth: 100%;
\theight: 100%;
\ttext-align: center;
\tline-height: 48px;
\tborder-radius: 4px;
\tfont-size: 22px;
\tbackground: transparent;
\tz-index: 100;
\topacity: 0;
}

.account-type .ripple-effect-dark span.ripple-overlay {
\tanimation: ripple 1.2s;
\topacity: 0.03; 
}

/* Standard syntax */
@keyframes typeCheck {
    0% {opacity: 0; transform: translateY(10px); }
    50% {opacity: 1; transform: translateY(0px); }
    100% {opacity: 0; transform: translateY(-10px); }
}

@keyframes typeBG {
    0% {opacity: 0;  }
    50% {opacity: 1;  }
    100% {opacity: 0; }
}


/* Popups Media Queries */
@media (max-width: 480px) {
\t.popup-tabs-nav {
\t\tpadding-top: 50px;
\t\theight: 50px;
\t}
\t.mfp-container { padding: 0 10px; }
\t.popup-tabs-nav li:first-child { border-top: 1px solid #e0e0e0; }
\t.popup-tabs-nav li { border-bottom: 1px solid #e0e0e0; }
\t.popup-tabs-nav li,
\t.popup-tabs-nav li a {
\t\twidth: 100%;
\t\ttext-align: center;
\t\theight: 50px;
\t\tline-height: 50px;
\t}

\t.popup-tabs-nav li a:hover {
\t\tbackground-color: transparent;
\t}

\t#sign-in-dialog.dialog-with-tabs .mfp-close,
\t#small-dialog.dialog-with-tabs .mfp-close,
\t#small-dialog-1.dialog-with-tabs .mfp-close,
\t#small-dialog-2.dialog-with-tabs .mfp-close,
\t#small-dialog-3.dialog-with-tabs .mfp-close,
\t#small-dialog-4.dialog-with-tabs .mfp-close {
\t\theight: 50px;
\t\twidth: 50px;
\t}

\t.account-type,
\t.social-login-buttons { flex-direction: column; }
\t.social-login-buttons button {
\t\tmax-width: 100%;
\t\twidth: 100%;
\t\tflex: auto;
\t}

\t.uploadButton { flex-direction: column; }
\t.uploadButton .uploadButton-file-name { padding: 0; margin: 15px 0 0 0; }
}

/* ---------------------------------- */
/* Boostrap Slider
------------------------------------- */
input.range-slider,
input.default-slider { display: none; }

.slider {
\tdisplay: inline-block;
\tvertical-align: middle;
\tposition: relative;
}

.slider.slider-horizontal {
\twidth: calc(100% - 20px);
\tmargin-left: 11px;
\theight: 20px;
}

.slider.slider-horizontal .slider-track {
    height: 3px;
    width: calc(100% + 18px);
    margin-top: -2px;
    top: 50%;
    left: -9px;
}

.slider.slider-horizontal .slider-selection,
.slider.slider-horizontal .slider-track-low,
.slider.slider-horizontal .slider-track-high {
\theight: 100%;
\ttop: 0;
\tbottom: 0;
}

.slider.slider-horizontal .slider-handle {
\tmargin-left: -11px;
}

.slider.slider-horizontal .slider-tick-label-container {
\twhite-space: nowrap;
\tmargin-top: 20px;
}

.slider.slider-horizontal .tooltip {
\t-ms-transform: translateX(-50%);
\ttransform: translateX(-50%);
\tposition: absolute;
}

.slider input { display: none; }

.slider .tooltip.top { margin-top: -40px; }

.slider .tooltip-inner {
\twhite-space: nowrap;
\tmax-width: none;
\tbackground-color: #333;
\tpadding: 4px 12px;
\tline-height: 21px;
\tcolor: #fff;
\tfont-size: 14px;
\tborder-radius: 4px;
}

.slider .tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #333;
}

.tooltip.tooltip-min,
.tooltip.tooltip-max { display: none; }

.slider .hide { display: none; }

.slider-track {
\tposition: absolute;
\tcursor: pointer;
\tborder-radius: 4px;
\tbackground-color: #e0e0e0;
}

.slider-selection {
\tposition: absolute;
\tbackground-color: #66676b;
\tbox-sizing: border-box;
\tborder-radius: 4px;
}

.slider-track-low,
.slider-track-high {
\tposition: absolute;
\tbackground: transparent;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\tborder-radius: 4px;
}

.slider-handle {
\tposition: absolute;
\ttop: 0;
\twidth: 20px;
\theight: 20px;
\tborder: 2px solid #66676b;
\tcursor: pointer;
\tz-index: 20;
\tborder-radius: 50%;
}

.slider-handle:after {
\tposition: absolute;
\tcontent: \"\";
\theight: 100%;
\twidth: 100%;
\ttop: 0;
\tleft: 0;
\tbackground-color: #fff;
\tborder-radius: 50%;
\tz-index: 30;
\tdisplay: block;
\tbox-shadow: 0 0 0px 6px rgba(102,103,107,.12);
\ttransition: 0.2s;
}

.slider-handle:hover:after {
\tbox-shadow: 0 0 0px 8px rgba(102,103,107,.12);
}

.slider-handle.custom {
\tposition: absolute;
\ttop: -5px;
\twidth: 40px;
\theight: 29px;
\tborder: none;
\tcursor: pointer;
\tz-index: 20;
\tborder-radius: 4px;
\tbackground-color: #fff;
\tbox-shadow: 0 1px 4px rgba(0,0,0,0.15);
\ttext-align: center;
}

.slider-handle.custom:after { display: none; }

.slider-handle.custom:before {
\tcontent: \"\\e958 \\e959\";
\tfont-family: \"Material-Icons\";
\tletter-spacing: -10px;
\tfont-size: 21px;
\tcolor: #a0a0a0;
\tmargin-left: -10px;
\ttransition: 0.3s;
}

.slider-handle.custom:hover:before { color: #333; }
.slider.slider-horizontal .slider-handle.custom { margin-left: -20px; }


/* ---------------------------------- */
/* Bootstrap-select
------------------------------------- */
select.bs-select-hidden,
select.selectpicker {
\tdisplay: none !important;
}

.bootstrap-select .btn {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.bootstrap-select > .dropdown-toggle {
\twidth: 100%;
\tpadding-right: 25px;
\tz-index: 1;
}

.bootstrap-select > .dropdown-toggle.bs-placeholder,
.bootstrap-select > .dropdown-toggle.bs-placeholder:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder:active {
\tcolor: #808080;
}

.bootstrap-select > select {
\tposition: absolute !important;
\tbottom: 0;
\tleft: 50%;
\tdisplay: block !important;
\twidth: 0.5px !important;
\theight: 100% !important;
\tpadding: 0 !important;
\topacity: 0 !important;
\tborder: none;
}
.bootstrap-select > select.mobile-device {
\ttop: 0;
\tleft: 0;
\tdisplay: block !important;
\twidth: 100% !important;
\tz-index: 2;
}

.has-error .bootstrap-select .dropdown-toggle,
.error .bootstrap-select .dropdown-toggle {
\tborder-color: #b94a48;
}

.bootstrap-select.fit-width {
\twidth: auto !important;
}

.bootstrap-select:not([class*=\"col-\"]):not([class*=\"form-control\"]):not(.input-group-btn) {
\twidth: 100%;
}

.bootstrap-select.form-control {
\tmargin-bottom: 0;
\tpadding: 0;
\tborder: none;
}
.bootstrap-select.form-control:not([class*=\"col-\"]) {
\twidth: 100%;
}
.bootstrap-select.form-control.input-group-btn {
\tz-index: auto;
}
.bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child) > .btn {
\tborder-radius: 0;
}
.bootstrap-select.btn-group:not(.input-group-btn),
.bootstrap-select.btn-group[class*=\"col-\"] {
\tfloat: none;
\tdisplay: flex;
\tmargin-left: 0;
}
.bootstrap-select.btn-group.dropdown-menu-right,
.bootstrap-select.btn-group[class*=\"col-\"].dropdown-menu-right,
.row .bootstrap-select.btn-group[class*=\"col-\"].dropdown-menu-right {
\tfloat: right;
}
.form-inline .bootstrap-select.btn-group,
.form-horizontal .bootstrap-select.btn-group,
.checkbox .bootstrap-select.btn-group {
\tmargin-bottom: 0;
}
.checkbox-lg .bootstrap-select.btn-group.form-control,
.checkbox-sm .bootstrap-select.btn-group.form-control {
\tpadding: 0;
}
.checkbox-lg .bootstrap-select.btn-group.form-control .dropdown-toggle,
.checkbox-sm .bootstrap-select.btn-group.form-control .dropdown-toggle {
\theight: 100%;
\tfont-size: inherit;
\tline-height: inherit;
\tborder-radius: inherit;
}
.form-inline .bootstrap-select.btn-group .form-control {
\twidth: 100%;
}
.bootstrap-select.btn-group.disabled,
.bootstrap-select.btn-group > .disabled {
\tcursor: not-allowed;
}
.bootstrap-select.btn-group.disabled:focus,
.bootstrap-select.btn-group > .disabled:focus {
\toutline: none !important;
}
.bootstrap-select.btn-group.bs-container {
\tposition: absolute;
\theight: 0 !important;
\tpadding: 0 !important;
}
.bootstrap-select.btn-group.bs-container .dropdown-menu {
\tz-index: 1060;
}

.bootstrap-select.btn-group .dropdown-toggle .filter-option {
    overflow: hidden;
    width: 100%;
    line-height: 48px;
    text-align: left;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 90%;
    float: left;
    height: 48px;
    display: block;
}

.bootstrap-select.btn-group .dropdown-menu li.hidden {
    display: none;
}

.language-switcher.bootstrap-select.btn-group .dropdown-toggle .filter-option,
.sort-by .bootstrap-select.btn-group .dropdown-toggle .filter-option {
    max-width: 100%;
    float: left;
}

.sort-by .bootstrap-select.btn-group .dropdown-toggle .filter-option {
    line-height: 20px;
    height: auto;
}

.bootstrap-select.btn-group .dropdown-toggle .caret {
\tposition: absolute;
\ttop: 50%;
\tright: 20px;
\tmargin-top: -2px;
\tvertical-align: middle;
\ttransition: 0.35s;
}

.bootstrap-select.open .dropdown-toggle .caret {
\ttransform: rotate(180deg)
}

.bootstrap-select.btn-group[class*=\"col-\"] .dropdown-toggle {
\twidth: 100%;
}

.bootstrap-select.btn-group .dropdown-menu {
\tmin-width: 100%;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\tfont-size: 16px;
}

.bootstrap-select.btn-group .dropdown-menu.inner {
\tposition: static;
\tfloat: none;
\tborder: 0;
\tpadding: 0 5px;
\tborder-radius: 0;
\tbox-shadow: none;
}

.bootstrap-select.btn-group .dropdown-menu li {
    position: relative;
    margin-bottom: 1px;
}

.bootstrap-select.btn-group .dropdown-menu li.disabled {
\topacity: 0.75;
}

.bootstrap-select.btn-group .dropdown-menu li.active small {
\tcolor: #fff;
}

.bootstrap-select.btn-group .dropdown-menu li.disabled a {
\tcursor: not-allowed;
}
.bootstrap-select.btn-group .dropdown-menu li a {
\tcursor: pointer;
\t-webkit-user-select: none;
\t  -moz-user-select: none;
\t   -ms-user-select: none;
\t       user-select: none;
}

.bootstrap-select.btn-group .dropdown-menu li a span.text {
\tdisplay: inline-block;
}
.bootstrap-select.btn-group .dropdown-menu li small {
\tpadding-left: 7px;
\topacity: 0.8;
}

.bootstrap-select.btn-group .dropdown-menu .notify {
\tposition: absolute;
\tbottom: 5px;
\twidth: calc(100% - 20px);
\tmargin: 0;
\tmin-height: 26px;
\tpadding: 3px 5px;
\tpointer-events: none;
\tpadding: 5px 10px;
\tbackground: #333;
\tcolor: #fff;
\tmargin: 5px;
\tmargin-bottom: 5px;
\tborder-radius: 4px;
\twhite-space: nowrap;
\tfont-size: 14px;
\tborder: none;
}

.bootstrap-select.btn-group .no-results {
\tpadding: 5px 10px;
\tbackground: #f6f6f6;
\tmargin: 5px 0;
\tmargin-bottom: 0;
\tborder-radius: 4px;
\twhite-space: nowrap;
\tfont-size: 14px;
}

.bootstrap-select.btn-group.fit-width .dropdown-toggle .filter-option {
\tposition: static;
}

.bootstrap-select.btn-group.fit-width .dropdown-toggle .caret {
\tposition: static;
\ttop: auto;
\tmargin-top: -1px;
}

.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {
\twhite-space: normal;
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle {
\tz-index: 1061;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:before {
\tcontent: '';
\tborder-left: 7px solid transparent;
\tborder-right: 7px solid transparent;
\tborder-bottom: 7px solid rgba(204, 204, 204, 0.2);
\tposition: absolute;
\tbottom: -4px;
\tleft: 9px;
\tdisplay: none;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:after {
\tcontent: '';
\tborder-left: 6px solid transparent;
\tborder-right: 6px solid transparent;
\tborder-bottom: 6px solid white;
\tposition: absolute;
\tbottom: -4px;
\tleft: 10px;
\tdisplay: none;
}
.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
\tbottom: auto;
\ttop: -3px;
\tborder-top: 7px solid rgba(204, 204, 204, 0.2);
\tborder-bottom: 0;
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
\tbottom: auto;
\ttop: -3px;
\tborder-top: 6px solid white;
\tborder-bottom: 0;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
\tright: 12px;
\tleft: auto;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
\tright: 13px;
\tleft: auto;
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before,
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after {
\tdisplay: block;
}

.bs-searchbox,
.bs-actionsbox,
.bs-donebutton {
\tpadding: 0 5px;
}

.bs-actionsbox {
\twidth: 100%;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\tpadding: 0 5px;
\tmargin-bottom: 10px;
\tmargin-top: -5px;
}

.bs-actionsbox div { display: flex; }

.bootstrap-select.btn-group .bs-actionsbox div button {
\tflex: 1;
    background: #f6f6f6;
    box-shadow: none;
    padding: 5px;
    height: 36px;
    font-size: 14px;
    color: #777;
    transition: 0.3s;
}

.bootstrap-select.btn-group .bs-actionsbox div button:first-child {
\tborder-radius: 4px 0 0 4px;
\tbackground-color: #f0f0f0;
}

.bootstrap-select.btn-group .bs-actionsbox div button:last-child {
\tborder-radius: 0 4px 4px 0;
}

.bootstrap-select.btn-group .bs-actionsbox div button:hover {
    background: #66676b;
    color: #fff;
}

.bs-actionsbox .btn-group button {
\twidth: 50%;
}

.bs-donebutton {
\tfloat: left;
\twidth: 100%;
\t-webkit-box-sizing: border-box;
\t  -moz-box-sizing: border-box;
\t       box-sizing: border-box;
}

.bs-donebutton .btn-group button {
\twidth: 100%;
}

.bs-searchbox + .bs-actionsbox {
\tpadding: 0;
}

.bs-searchbox .form-control:focus,
.bs-searchbox .form-control {
    margin-bottom: 0;
    width: 100%;
    float: none;
    box-shadow: none;
    background: #f4f4f4;
    margin: -5px 0 10px 0;
    height: 38px;
    line-height: 38px;
    padding: 10px;
}

.bs-searchbox {
\tposition: relative;
}

.bs-searchbox:after {
\tfont-family: \"Material-Icons\";
\tcontent: \"\\e982\";
\tfont-size: 20px;
\twidth: 20px;
\theight: 20px;
\tline-height: 0;
\tdisplay: inline-block;
\tposition: absolute;
\tmargin: 0;
\tcolor: #a0a0a0;
\tright: 15px;
\ttop: 18px;
}

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid #aaa;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

.dropup,
.dropdown {
  position: relative;
}

.dropdown-toggle:focus {
  outline: 0;
}

.dropdown-menu {
\tposition: absolute;
\ttop: 100%;
\tleft: 0;
\tz-index: 1000;
\tdisplay: none;
\tfloat: left;
\tpadding: 10px 5px;
\tmargin: -4px 0 0 0;
\tfont-size: 15px;
\ttext-align: left;
\tlist-style: none;
\tbackground-color: #fff;
\tborder: none;
\tborder-radius: 4px;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

.dropdown-menu.pull-right {
\tright: 0;
\tleft: auto;
}
.dropdown-menu .divider {
\tdisplay: none;
}
.dropdown-menu > li > a {
\tdisplay: block;
\tpadding: 7px 10px;
\tpadding-right: 35px;
\tclear: both;
\tfont-weight: normal;
\tline-height: 21px;
\tcolor: #808080;
\tborder-radius: 4px;
}


.bootstrap-select:before {
\tcontent: \"\";
\tposition: absolute;
\tz-index: 2100;
\tbottom: 0px;
\tleft: 0;
\theight: 8px;
\twidth: 100%;
\tbackground-color: #fff;
\tdisplay: block;
\topacity: 0;
\tpointer-events: none;
\ttransition: 0.4s;
}

.bootstrap-select.open:before {
\topacity: 1;
}


.dropdown-menu > li > a:hover,
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover {
\tcolor: #66676b;
\ttext-decoration: none;
\tbackground-color: rgba(102,103,107,0.07);
}

.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover{
  color: #777;
}

.dropdown-menu > .disabled > a:hover {
\ttext-decoration: none;
\tcursor: not-allowed;
\tbackground-color: transparent;
\tbackground-image: none;
}

/* Custom Scrollbar for -wekbit */
.dropdown-menu.inner::-webkit-scrollbar { width: 5px; }

.dropdown-menu.inner::-webkit-scrollbar-track {
    background-color: rgba(0,0,0,0.0);
    border-radius: 12px;
}

.dropdown-menu.inner::-webkit-scrollbar-thumb {
    border-radius: 12px;
    background-color: #d8d8d8;
}

.dropdown-menu.inner::-webkit-scrollbar-thumb:hover {
    border-radius: 12px;
    background-color: #c8c8c8;
}


.bootstrap-select .dropdown-menu {
\topacity: 0;
\ttransition: 0.4s;
\tdisplay: block;
\tpointer-events: none;
\tvisibility: hidden;
\tcursor: default;
}

.bootstrap-select.open .dropdown-menu {
\topacity: 1;
\tpointer-events: all;
\tvisibility: visible;
}

.open > a {
\toutline: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

.dropdown-menu-left {
\tright: auto;
\tleft: 0;
}

.dropdown-header {
\tdisplay: block;
\tpadding: 7px 10px;
\tline-height: 20px;
\twhite-space: nowrap;
\tbackground: #f6f6f6;
\tcolor: #777;
\tborder-radius: 4px;
\tmargin-bottom: 1px;
}

.dropdown-backdrop {
\tposition: fixed;
\ttop: 0;
\tright: 0;
\tbottom: 0;
\tleft: 0;
\tz-index: 990;
}

.pull-right > .dropdown-menu {
\tright: 0;
\tleft: auto;
}

.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
\tcontent: \"\";
\tborder-top: 0;
\tborder-bottom: 4px dashed;
\tborder-bottom: 4px solid \\9;
}

.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: 100%;
  bottom: auto;
  margin-bottom: 2px;
}

@media (min-width: 767px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0;
  }
}

.bootstrap-select.btn-group {
\tposition: relative;
}

.bootstrap-select.btn-group button {
\tposition: relative;
\tdisplay: inline-block;
    height: 48px;
    line-height: 0;
    padding: 0 20px;
    margin: 0;
    outline: none;
    font-size: 16px;
    color: #808080;
    max-width: 100%;
    width: 100%;
    box-sizing: border-box;
    display: block;
    background-color: #fff;
    font-weight: 500;
    opacity: 1;
    border-radius: 4px;
    border: none;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}


/* Select Check Icon */
.hide-tick .check-mark { display: none !important; }
.bootstrap-select.btn-group .dropdown-menu li a span.check-mark {
\tposition: absolute;
\tdisplay: inline-block;
\tright: 8px;
\ttop: 50%;
\ttransform: translateY(-50%);
\tmargin: 0;
\tline-height: 0;
\twidth: 20px;
\theight: 20px;
\ttext-align: center;
}

.bootstrap-select.btn-group .dropdown-menu li span.check-mark:before {
\tfont-family: \"Feather-Icons\";
\tcontent: \"\\e92b\";
\tfont-size: 18px;
\ttransition: all 0.3s;
\tdisplay: inline-block;
\ttop: 50%;
\tright: 0;
\tposition: absolute;
\tmargin: 0;
\topacity: 0;
\ttransform: scale(0.5);
}

.bootstrap-select.btn-group .dropdown-menu li.selected span.check-mark:before {
\topacity: 1;
\ttransform: scale(1);
\ttransition: all 0.35s cubic-bezier(0.3,-.41,.19,2), opacity 0.3s;
}

.bootstrap-select .dropdown-menu li.selected a span.check-mark:before,
.bootstrap-select .dropdown-menu li.selected:hover a span.check-mark:before {
\tcolor: #66676b;
}

/* Icons*/
.bootstrap-select .glyphicon:not(.check-mark) {
\tfont-size: 17px;
\tline-height: 0;
\tposition: relative;
\ttop: 1px;
\tmargin-right: 3px;
}

.bootstrap-select .filter-option .glyphicon {
\tposition: relative;
\ttop: 1px;
}

/* Styles with border */
.with-border .dropdown-menu,
.with-border.bootstrap-select.btn-group button {
\tborder: 1px solid #e0e0e0;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
}

.with-border.bootstrap-select:before {
\twidth: calc(100% - 2px);
\tleft: 1px;
}

/* ---------------------------------- */
/* Snackbar
------------------------------------- */
.snackbar-container {
\ttransition: all 500ms ease;
\ttransition-property: top, right, bottom, left, opacity;
\tfont-size: 16px;
\tmin-height: 14px;
\tbackground-color: #404040;
\tposition: fixed;
\tdisplay: flex;
\tjustify-content: space-between;
\talign-items: center;
\tcolor: #fff;
\tline-height: 22px;
\tpadding: 18px 24px;
\tbottom: -100px;
\ttop: -100px;
\topacity: 0;
\tz-index: 9999;
\tcursor: default;
\tborder-radius: 4px;
\tfont-weight: 500;
}

.snackbar-container .action {
    background: inherit;
    display: inline-block;
    border: none;
    font-size: inherit;
    text-transform: uppercase;
    color: #aaa;
    margin: 0 0 0 24px;
    padding: 0;
    min-width: min-content;
    cursor: pointer;
    font-weight: 500;
    font-size: 14px;
}

@media (min-width: 640px) {
\t.snackbar-container {
\t\tdisplay: inline-flex;
\t\tmargin: 24px;
\t}
}


.snackbar-pos.bottom-center {
\ttop: auto !important;
\tbottom: 0;
\tleft: 50%;
\ttransform: translate(-50%, 0);
}

.snackbar-pos.bottom-left {
\ttop: auto !important;
\tbottom: 0;
\tleft: 0;
}

.snackbar-pos.bottom-right {
\ttop: auto !important;
\tbottom: 0;
\tright: 0;
}

.snackbar-pos.top-left {
\tbottom: auto !important;
\ttop: 0;
\tleft: 0;
}

.snackbar-pos.top-center {
\tbottom: auto !important;
\ttop: 0;
\tleft: 50%;
\ttransform: translate(-50%, 0);
}

.snackbar-pos.top-right {
\tbottom: auto !important;
\ttop: 0;
\tright: 0
}

@media (max-width: 640px) {
\t.snackbar-container {
\t\tleft: 0;
\t\tright: 0;
\t\twidth: 100%;
\t\tborder-radius: 0;
\t}
\t.snackbar-pos.bottom-center, .snackbar-pos.top-center {
\t\tleft: 0;
\t\ttransform: none;
\t}
}

/* ---------------------------------- */
/* Google Autocomplete
------------------------------------- */
body .pac-item {
    font-size: 12px;
    color: #999;
    cursor: pointer;
    transition: 0.2s;
    padding: 5px 15px;
}

body .pac-container {
    border-radius: 0 0 4px 4px;
    border: none;
    box-sizing: content-box;
    margin-top: -2px;
    background-color: #fff;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 2px 4px 0px rgba(0, 0, 0, 0.08);
    z-index: 100;
}

/* ---------------------------------- */
/* Google Maps
------------------------------------- */
.infoBox { 
\tborder-radius: 4px;
\tdisplay: flex;
\tflex-wrap: wrap;
\twidth: calc(100% + 30px);
\tline-height: 24px;
}

.infoBox .job-listing {
\tdisplay: flex;
\tflex-direction: column;
\tjustify-content: center;
\tmargin: 0;
\tbox-shadow: none;
\twidth: 100%;
}

.infoBox .job-listing .job-listing-description {
\tpadding-top: 0;
}

.infoBox .job-listing:hover {
\ttransform: none;
}

.infoBox .job-listing-details {
\tflex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 20px 25px;
}

.infoBox .job-listing h4.job-listing-company {
\tfont-size: 14px;
\tposition: relative;
\ttop: 0px;
}

.infoBox .job-listing .verified-badge {
\ttransform: scale(0.85);
\tright: -7px;
\tbottom: -7px;
}

.infoBox .job-listing .not-verified-badge {
\tdisplay: none;
}

.infoBox .job-listing-footer {
\tflex-grow: 0;
\tpadding: 15px 25px;
\tfont-size: 16px;
\tdisplay: none;
}

.infoBox .job-listing h3.job-listing-title {
\tfont-size: 16px;
\tline-height: 24px;
}

.infoBox .job-listing .job-listing-company-logo {
\tmax-width: 46px;
\tmargin: 5px 18px 5px 0;
\ttop: 0;
\tflex: 0 0 46px;
}

.infoBox .job-listing .job-listing-company-logo img { max-width: 46px; }


.map-box {
\tbackground-color: #fff;
\tmargin-bottom: 20px;
\tborder-radius: 4px;
\tbox-shadow: 0px 0px 10px 0px rgba(0,0,0,0.12);
\tposition: relative;
\twidth: 100%;
}

.map-box .listing-img-container img {
    width: 100%;
    border-radius: 4px 4px 0 0;
}

.map-box h4 {
\tmargin: 0;
\tpadding: 0;
}

.map-box h4 a {
\tpadding: 0 0 2px 0;
\tfont-size: 17px;
\tline-height: 25px;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tdisplay: inline-block;
}

.listing-img-container {
\tposition: relative;
\theight: 100%;
\tdisplay: block;
}

.map-box h4 a:hover { color: #66676b; }

.map-box p {
\tpadding: 0;
\tline-height: 25px;
\tmargin: 2px 0 0 0;
\tfont-size: 14px;
}

.map-box ul.listing-details {
\tpadding: 0;
\tfont-size: 14px;
\tdisplay: none;
}

.map-box .listing-title {
\tpadding: 16px 22px;
}


.map-box .listing-img-content {
\tpadding: 18px 22px;
}


.map-box .listing-img-content span {
\tfont-size: 21px;
}

.map-box .listing-img-content .listing-price i {
    font-size: 15px;
    margin: -7px 0 0 0;
}


.infoBox > img {
\tposition: absolute !important;
\tright: 0px;
\ttop: 0px;
}

.map-box .listing-img-container::before {
    content:\"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
\tbackground: linear-gradient(to top, rgba(35,35,37,0.85) 0%, rgba(35,35,37,0.40) 35%, rgba(22,22,23,0) 60%, rgba(0,0,0,0) 100%);
\tbackground-color: rgba(35,35,37,0.2);
}

.map-box .listing-item-content {
    position: absolute;
    bottom: 20px;
    left: 0;
    padding: 0 24px;
    width: 100%;
    z-index: 50;
    box-sizing: border-box;
}

.map-box .listing-item-content h3 {
    color: #fff;
    font-size: 18px;
    padding: 0 0 2px 0;
    font-weight: 500;
    margin: 0;
    line-height: 27px;
}

.map-box .listing-item-content span {
    font-size: 15px;
    font-weight: 300;
    display: inline-block;
    color: rgba(255,255,255,0.7);
}


/* Close Button */
.infoBox-close {
\tposition: absolute;
\ttop: 12px;
\tright: 12px;
\tdisplay: inline-block;
\tz-index: 999;
\ttext-align: center;
\tcursor: pointer;
\tfont-size: 15px;
\tfont-weight: 500;
\theight: 27px;
\twidth: 27px;
\tline-height: 27px;
\tbackground-color: #f0f0f0;
\tcolor: #666;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tborder-radius: 4px;
}

.infoBox-close i {
\tposition: relative;
\ttop: 2px;
\tleft: -0.5px;
}

.infoBox-close:hover {
\tcolor: #fff;
\tbackground-color: #66676b;
}


/* Read More Icon */
.map-box-icon {
\theight: 38px;
\twidth: 38px;
\tposition: absolute;
\tbottom:0;
\tright:0;
\tbackground-color: #3685cf;
\tdisplay: block;
\tcolor: #fff;
\tfont-size: 12px;
\tz-index: 101;
\ttext-align: center;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\t-webkit-transform: translateX(50%);
\t-ms-transform: translateX(50%);
\ttransform: translateX(50%);
\topacity:0;
\tvisibility: hidden;
}

.map-box-icon:before {
\tcontent: \"\\f064\";
\tfont-family: \"FontAwesome\";
\tposition: relative;
\ttop: 7px;
\tdisplay: block;
}

.map-box-image:hover .map-box-icon {
\topacity: 1;
\tvisibility: visible;
\t-webkit-transform: translateY(0);
\t-ms-transform: translateY(0);
\ttransform: translateX(0);
}

.map-box-image {
\tposition: relative;
\toverflow: hidden;
\tdisplay: block;
}

.infoBox {
\tanimation: infoBoxAnimation 0.5s;
}

/* Standard syntax */
@keyframes infoBoxAnimation {
    from {opacity: 0; transform: translateY(-10px); }
    to {opacity: 1; transform: translateY(0px); }
}

.infoBox .star-rating span { margin-right: 3px; }

.infoBox .rating-counter {
\tposition: relative;
\ttop: -1px;
}

.infoBox:after {
\tcontent: \"\";
\tposition: absolute;
\tbottom: 5px;
\tleft: 50%;
\ttransform: translateX(-50%);
\twidth: 0;
\theight: 0;
\tborder-left: 16px solid transparent;
\tborder-right: 16px solid transparent;
\tborder-top: 16px solid #fff;
}

#map {
\theight: 100%;
\twidth: 100%;
\tmargin: 0;
\tz-index: 990;
}

#map-container {
\tposition: relative;
\ttop: 0;
\tleft: 0;
\theight: 520px;
\twidth: 100%;
\tz-index: 990;
\tmargin-bottom: 60px;
}

.gmnoprint { margin: 10px; }

.homepage-map {
    height: 560px;
    margin-bottom: 0;
    position: relative;
  
}

.search-bar-on-map {
\tposition: absolute;
\tbottom: 50px;
\tz-index: 1000;
\tmargin: 0 auto;
\tleft: 0;
\tright: 0;
}

/* Cluster styles */
.cluster img { display:none }

.cluster-visible {
\ttext-align: center;
\tfont-size: 14px !important;
\tcolor: #fff !important;
\tfont-weight: 700;
\tborder-radius: 50%;
\twidth: 33px !important;
\theight: 33px !important;
\tline-height: 33px !important;
\tbackground-color: #66676b;
\tanimation: clusterAnimation 2.5s infinite;
}

@keyframes clusterAnimation {
\t0%,100% {
\t\tbox-shadow: 0 0 0 6px rgba(102,103,107,0.15);
\t}
\t50% {
\t\tbox-shadow: 0 0 0 10px rgba(102,103,107,0.15);
\t}
}


/* Marker */
.map-marker-container { position: absolute; }

.marker-container {
\tposition: relative;
\tmargin: -9px 0 0 -9px;
\twidth: 18px;
\theight: 18px;
\tz-index: 1;
\tborder-radius: 50%;
\tcursor: pointer;
\ttop: 0;
\tbackground-color: #66676b;
\tanimation: markerAnimation 2.5s infinite;
\ttransition: 0.4s;
}

@keyframes markerAnimation {
\t0%,100% {
\t\tbox-shadow: 0 0 0 6px rgba(102,103,107,0.15);
\t}
\t50% {
\t\tbox-shadow: 0 0 0 8px rgba(102,103,107,0.15);
\t}
}

/* Clicked & Hover States */
.map-marker-container.clicked .marker-container {
\ttransform: scale(1.3);
}

.marker-container:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tdisplay: block;
\tbackground-color: transparent;
\tborder-radius: 50%;
\ttransform: scale(2);
\topacity: 0;
}


/* Custom Zoom Buttons
------------------------------------- */
.custom-zoom-in,
.custom-zoom-out {
\tbackground-color: #fff;
\tcolor: #333;
\tcursor: pointer;
\tborder-radius: 4px;
\tmargin: 5px 15px;
\ttransition: 0.3s;
\tbox-shadow: 0px 2px 4px 0 rgba(0, 0, 0, 0.1);
\ttext-align: center;
\tfont-size: 18px;
\theight: 34px;
\twidth: 34px;
}

.custom-zoom-in:hover,
.custom-zoom-out:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
}

.custom-zoom-in:before,
.custom-zoom-out:before  {
\tfont-family: \"Feather-Icons\";
\twidth: 100%;
\tline-height: 35px;
}

.zoomControlWrapper {
\tposition: absolute;
\tleft: initial;
\tright: 0;
\twidth: 70px;
\tmargin-right: 20px;
}

.custom-zoom-in:before { content: \"\\e9b1\"; }
.custom-zoom-out:before  { content: \"\\e996\"; }


/* Street View Button
------------------------------------- */
#streetView,
#geoLocation,
#scrollEnabling {
\tbackground-color: #fff;
\tcolor: #333;
\tcursor: pointer;
\tborder-radius: 4px;
\tmargin: 5px 15px;
\ttransition: 0.3s;
\tbox-shadow: 0px 2px 4px 0 rgba(0, 0, 0, 0.1);
\tposition: absolute;
\ttop: 10px;
\tleft: 5px;
\tz-index: 99;
\tfont-size: 14px;
\tline-height: 21px;
\tpadding: 8px 14px;
\tfont-weight: 500;
}

#geoLocation:hover,
#streetView:hover,
#scrollEnabling:hover,
#scrollEnabling.enabled {
\tbackground-color: #66676b;
\tcolor: #fff;
}

#streetView:before {
\tcontent: \"\\e974\";
\tfont-family: \"Material-Icons\";
\tfont-size: 18px;
\ttop: 3px;
\tposition: relative;
\tmargin-right: 7px;
\tmargin-left: -1px;
\tline-height: 0;
}


/* -------------------------------------------------------------- */
/*  06. Single Pages
----------------------------------------------------------------- */

/* Boxed List for Single Page 
------------------------------------- */
.boxed-list {
\tmargin-top: 10px;
\tdisplay: block;
}

.boxed-list-headline {
\tbackground-color: #f2f2f2;
\tborder-radius: 4px;
\tpadding: 20px 35px;
}

.boxed-list-headline h3 { font-size: 18px; }
.boxed-list-headline h3 span { color: #888; }

.boxed-list-headline h3 i {
\tfont-size: 18px;
\tcolor: #66676b;
\tfont-size: 24px;
\tposition: relative;
\ttop: 3px;
\tline-height: 0;
\tdisplay: inline-block;
\tmargin-right: 5px;
}

.boxed-list ul.boxed-list-ul {
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
}

.boxed-list ul.boxed-list-ul > li {
\tdisplay: block;
\tbackground-color: transparent;
\tpadding: 35px;
\tborder-radius: 4px;
}

.boxed-list ul.boxed-list-ul > li:nth-child(2n) {
\tbackground-color: #fafafa;
}

/* Fields UL */
.fields-ul {
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
}

.fields-ul > li {
\tdisplay: block;
\tbackground-color: transparent;
\tpadding: 30px;
\tpadding-bottom: 10px;
\tborder-bottom: 1px solid #e4e4e4
}


/* Boxed List Item
------------------------------------- */
.boxed-list-item {
\tdisplay: flex;
}

.boxed-list-item .item-image {
\tflex: 0 0 60px;
\theight: 60px;
\tborder-radius: 4px;
\tbox-shadow: 0 0 10px rgba(0,0,0,0.1);
\tpadding: 10px;
\tmargin-right: 25px;
\tposition: relative;
\ttop: -2px;
\tdisplay: flex;
\tbackground-color: #fff;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.boxed-list-item .item-image { max-width: 60px; }
\t.boxed-list-item .item-image img { width: 100%; }
}
/* IE 11 Fixes - End */

.boxed-list-item .item-image img {
\theight: auto;   
\talign-self: center;
}

.boxed-list-item .item-content h4 a,
.boxed-list-item .item-content h4 {
\tfont-size: 18px;
\tfont-weight: 600;
\tcolor: #333;
}

.boxed-list-item .item-content h4 span {
\tfont-size: 16px;
\tcolor: #808080;
\tdisplay: block;
\tfont-weight: 500;
}

.boxed-list-item .item-details {
\tdisplay: flex;
\tmargin-top: 5px;
}

.boxed-list-item .item-details .star-rating {
\ttop: -2px;
\tposition: relative;
\tmargin-right: 15px;
}

.boxed-list-item .item-details .detail-item {
\tmargin-right: 15px;
\tcolor: #808080;
}

.boxed-list-item .item-details .detail-item a { color: #808080; }
.boxed-list-item .item-details .detail-item a:hover { color: #66676b; }

.boxed-list-item .item-details .detail-item i {
\tmargin-right: 3px;
\tposition: relative;
\ttop: 0;
}

.boxed-list-item .item-description p { margin-bottom: 0; padding-bottom: 0; }

.boxed-list-item .item-description {
\tmargin-top: 15px;
}


/* Bid 
------------------------------------- */
.bid {
\tdisplay: flex;
\twidth: 100%;
}

.bid .bids-content {
\tflex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.bid .bids-bid {
\talign-items: center;
\tdisplay: flex;
}

.bid .bids-avatar { align-self: center; }

.bid .freelancer-name { margin-top: 0; }

.bid .freelancer-avatar {
\twidth: 80px;
\tmargin: 0 auto;
\tposition: relative;
\tmargin-right: 30px;
}

.bid .star-rating { margin-top: 3px; display: block }

.bid .freelancer-avatar img {
\twidth: 100%;
\tborder-radius: 50%;
\tcursor: pointer;
}

.bid .freelancer-avatar .verified-badge {
\tposition: absolute;
\tbottom: 0;
\tright: 0;
}

/* Bid Rate */
.bid-rate {
\ttext-align: center;
\tfont-size: 14px;
\tbackground: #f4f4f4;
\tcolor: #888;
\tborder-radius: 4px;
\tpadding: 8px 12px;
}

.boxed-list ul.boxed-list-ul > li:nth-child(2n) .bid-rate {
\tbackground: #f2f2f2;
}

.bid-rate .rate {
\tcolor: #333;
\tfont-weight: 600;
\ttext-align: center;
\tline-height: 20px;
\tborder-radius: 4px;
\tpadding: 5px 10px;
\tpadding-bottom: 0;
\tfont-size: 16px;
}

.bid-rate span {
\tdisplay: block;
\tmargin-top: -2px;
}

@media (max-width: 768px) {
\t.bid .freelancer-avatar {
\t\twidth: 70px;
\t\tmargin: 0 0 15px 0;
\t}
\t.bid {
\t\tdisplay: block;
\t}
\t.bids-bid { margin-top: 15px; }
\t.bid-rate { width: 100%; }
}


/* Single Job
------------------------------------- */
.job-overview {
    border-radius: 4px;
    background-color: #f9f9f9;
}

.job-overview .job-overview-headline {
    color: #333;
    font-size: 20px;
    padding: 20px 35px;
    background-color: #f0f0f0;
    color: #333;
    position: relative;
    border-radius: 4px 4px 0 0;
}

.job-overview .job-overview-inner {
    padding: 35px;
}

.job-overview .job-overview-inner ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

/* List Item */
.job-overview .job-overview-inner ul li {
\tposition: relative;
\tdisplay: block;
\tfont-size: 16px;
\tpadding-left: 38px;
\tmargin-bottom: 25px;
}

.job-overview .job-overview-inner ul li:last-child {
\tmargin-bottom: 0;
}

.job-overview .job-overview-inner ul li span {
\tfont-weight: 600;
\tcolor: #333;
\tmargin: 0;
\tpadding: 0;
\tdisplay: block;
}

.job-overview .job-overview-inner ul li h5 {
\tfont-weight: 500;
\tcolor: #666;
\tfont-size: 16px;
\tmargin: 0;
\tpadding: 0;
\tline-height: 20px;
}

.job-overview .job-overview-inner ul li i {
\tposition: absolute;
\tleft: 0;
\ttop: 0;
\tfont-size: 24px;
\tcolor: #66676b;
}

/* Apply Now Button */
a.apply-now-button {
\tbackground-color: #66676b;
\tcolor: #fff;
\ttext-align: center;
\tfont-size: 18px;
\tborder-radius: 4px;
\tpadding: 14px 20px;
\tmargin-bottom: 35px;
\tbox-shadow: 0 2px 8px rgba(102,103,107,0.15);
\ttransition: 0.3s;
\tdisplay: block;
}

a.apply-now-button:hover {
\ttransform: translateY(-3px);
\tbox-shadow: 0 2px 8px rgba(102,103,107,0.35);
}

a.apply-now-button i {
\tfont-size: 22px;
\tposition: relative;
\tline-height: 0;
\ttop: 3px;
\tmargin-left: 5px;
}

/* Single Job Map */
#single-job-map-container {
\tposition: relative;
}

#single-job-map-container #singleListingMap {
\tposition: relative;
\theight: 340px;
\tborder-radius: 4px;
}


/* Single Freelancer Profile
------------------------------------- */

/* Freelancer Socials*/
.freelancer-socials ul {
\tmargin: 0;
\tpadding: 0;
\tlist-style: none;
\tcursor: default;
\tmargin: 0 0 -5px -8px;
}

.freelancer-socials ul li {
\tdisplay: inline-block;
\tfont-size: 24px;
}

.freelancer-socials ul li a {
\tcolor: #b9b9b9;
\tpadding: 0 8px;
}

.freelancer-socials ul li a:hover {
\tcolor: #333;
}

/* Attachments */
.attachments-container {
\tdisplay: flex;
\tflex-wrap: wrap;
\tflex-direction: row;
\twidth: calc(100% + 20px);
\tmargin-bottom: -30px;
}

.attachment-box {
\tdisplay: flex;
\tmargin: 0 20px 20px 0;
\tbackground-color: #f4f4f4;
\tborder-radius: 4px 0px 4px 4px;
\tfont-weight: 600;
\tpadding: 15px 20px;
\tpadding-bottom: 45px;
\tpadding-right: 25px;
\tline-height: 24px;
\tflex-direction: column;
\tcolor: #666;
\tposition: relative;
\ttransition: 0.3s;
\tflex: 0 1 calc(50% - 21px);
\tcursor: default;
\tposition: relative;
}

.single-page-section .attachment-box { flex: 0 1 calc(33% - 20px); }
.single-page-section .attachments-container { margin-bottom: -20px; }

a.attachment-box { cursor: pointer; }

.attachment-box:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tright: 0;
\tborder-width: 0 20px 20px 0;
\tborder-style: solid;
\tborder-color: rgba(0,0,0,0.15) #fff;
\ttransition: 0.3s;
\tborder-radius: 0 0 0 4px;
}

a.attachment-box:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
}

a.attachment-box:hover:before { border-color: rgba(0,0,0,0.25) #fff; }

.attachment-box span {
\tfont-size: 14px;
\tline-height: 20px;
\tdisplay: inline-block;
\tflex: auto;
}

.attachment-box i {
\tdisplay: block;
\tfont-style: normal;
\tfont-size: 14px;
\tcolor: #999;
\tfont-weight: 500;
\tmargin-top: 10px;
\tposition: absolute;
\tbottom: 10px;
\ttransition: 0.3s;
}

a.attachment-box:hover i {
\tcolor: rgba(255,255,255,0.7);
}

/* Remove Attachment Button */
.attachment-box .remove-attachment {
\tposition: absolute;
\tbottom: 10px;
\tright: 10px;
\tcolor: #fff;
\tbackground-color: #dc3139;
\tbox-shadow: 0 3px 8px rgba(234,65,81,0.15);
\theight: 28px;
\twidth: 28px;
\tline-height: 28px;
\tborder-radius: 3px;
\tfont-weight: 500;
\tfont-size: 14px;
\ttransition: 0.3s;
\topacity: 0;
\ttransform: translateY(3px);
}

.attachment-box .remove-attachment:before {
\tcontent: \"\\e9e4\";
\tfont-family: \"Feather-Icons\";
}

.attachment-box:hover .remove-attachment {
\topacity: 1;
\ttransform: translateY(0);
}

/* Profile Overview */
.profile-overview {
\tdisplay: flex;
\tline-height: 22px;
\talign-items: center;
\tmargin-bottom: 25px;
\twidth: calc(100% + 25px);
}

.profile-overview .overview-item {
\tflex: 1;
\tborder-right: 1px solid #e0e0e0;
\tmargin-right: 20px;
\tpadding-right: 20px;
\tflex-grow: 1;
}

.profile-overview .overview-item:last-child {
\tborder-right: 0;
\tpadding-right: 0;
}

.profile-overview .overview-item strong {
\tdisplay: block;
\tfont-weight: 600;
\tcolor: #333;
\tfont-size: 18px;
\tmargin-bottom: 5px;
}

.profile-overview .overview-item span {
\tcolor: #808080;
}


/* Freelancer Indicators */
.freelancer-indicators {
\tdisplay: flex;
\tflex-wrap: wrap;
\twidth: calc(100% + 30px);
\tline-height: 24px;
\tmargin-bottom: -20px;
}

.freelancer-indicators .indicator {
\twidth: calc(50% - 31px);
\tmargin-right: 30px;
\tmargin-bottom: 20px;
\tdisplay: flex;
\tflex-direction: column;
}

.freelancer-indicators .indicator strong {
\tcolor: #333;
\tfont-weight: 600;
}

.freelancer-indicators .indicator-bar span,
.freelancer-indicators .indicator-bar {
\twidth: 100%;
\theight: 4px;
\tbackground-color: #e0e0e0;
\tborder-radius: 10px;
\tposition: relative;
\tmargin: 10px 0;
\ttransition: 1s;
}

.freelancer-indicators .indicator-bar span {
\twidth: 0;
\tbackground-color: #66676b;
\tposition: absolute;
\ttop: 0;
\tmargin: 0;
}


/* Media Queriers */
@media (max-width: 1240px) {
\t.profile-overview,
\t.profile-overview .overview-item {
\t\tdisplay: block;
\t\twidth: 100%;
\t}
\t.profile-overview .overview-item {
\t\tborder-right: 0;
\t\tborder-bottom: 1px solid #e0e0e0;
\t\tpadding: 15px 0;
\t\tmargin: 0;
\t}
\t.profile-overview .overview-item:last-child {
\t\tborder-right: none;
\t\tborder-bottom: none
\t}
}

@media (max-width: 768px) {
\t.boxed-list-item .item-details,
\t.attachments-container,
\t.attachments-container .attachment-box,
\t.freelancer-indicators,
\t.freelancer-indicators .indicator {
\t\tdisplay: block;
\t\twidth: 100%;
\t}

\t.boxed-list-item .item-image {
\t   display: none;
\t}
}


/* -------------------------------------------------------------- */
/*  07. Dashboard
----------------------------------------------------------------- */
/* Full Page Adjustments */
.full-page-container,
.dashboard-container {
    height: calc(100vh - 82px);
}

@media (max-width: 1099px) {
\t.full-page-container,
\t.dashboard-container {
\t    height: calc(100vh - 76px);
\t}
}

/* Dashboard Basis */
.dashboard-container {
    display: flex;
    width: 100%;
    flex-wrap: wrap;
}

.dashboard-sidebar {
    flex: 0 0 280px;
    background-color: #fff;
    position: relative;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
    z-index: 100;
}

.dashboard-sidebar .dashboard-sidebar-inner {
    overflow: auto;
    height: 100%;
}

.dashboard-content-container {
    flex: 1;
    background-color: #fafafa;
    padding: 0;
    overflow: auto;
    position: relative;
    z-index: 99;
}

.dashboard-content-inner {
    padding: 50px;
    padding-bottom: 0;
    position: relative;
}


/* Dashboard Header Logo Adjustent */
@media (min-width: 1099px) {
\t#header-container.dashboard-header .container {
\t\tpadding-right: 35px;
\t\tpadding-left: 0;
\t}

\t#header-container.dashboard-header #logo {
\t\twidth: 281px;
\t\tpadding-left: 35px;
\t}
}

@media (max-width: 1240px) {
\t#header-container.dashboard-header #logo {
\t    width: auto;
\t}
}


/* ---------------------------------- */
/* Dashboard Navigation
------------------------------------- */
.dashboard-nav {
\tdisplay: block;
\tz-index: 11;
\tpadding-bottom: 30px;
}

a.dashboard-responsive-nav-trigger { display: none; }

.dashboard-nav ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 25px 0 0 0;
}

.dashboard-nav ul:first-child {
\tmargin: 30px 0 0 0;
}

.dashboard-nav ul:before {
\tcontent: attr(data-submenu-title);
\tpadding: 0 35px;
\tmargin-bottom: 5px;
\tdisplay: block;
\tcolor: #66676b;
\tfont-weight: 600;
\tfont-size: 14px;
}

/* 1st Level */
.dashboard-nav ul li {
\tdisplay: block;
\tborder-left: 3px solid transparent;
\ttransition: 0.3s;
\tline-height: 25px;
\tfont-size: 15px;
}

.dashboard-nav ul li a {
\tcolor: #707070;
\tdisplay: block;
\tpadding: 11px 32px;
\ttransition: 0.3s;
\tcursor: pointer;
\tposition: relative;
}

.dashboard-nav ul li a i {
\tpadding-right: 8px;
\twidth: 20px;
\tfont-size: 20px;
\tcolor: #909090;
\ttransition: 0.3s;
\tposition: relative;
\ttop: 2px;
}


/* Hover State */
.dashboard-nav ul li ul li:hover a { padding-left: 4px; }


.dashboard-nav ul li.active-submenu a i,
.dashboard-nav ul li.active a i,
.dashboard-nav ul li:hover a i {
\tcolor: #66676b;
}

.dashboard-nav ul li.active-submenu,
.dashboard-nav ul li.active,
.dashboard-nav ul li:hover {
\tborder-color: #66676b;
\tbackground-color: rgba(102,103,107,0.04);
}

/*.dashboard-nav ul li:hover {
\tbackground-color: #f8f8f8;
}*/

.dashboard-nav ul li.active-submenu a,
.dashboard-nav ul li:hover a,
.dashboard-nav ul li.active a { color: #66676b; }


/* Nav Tag */
.dashboard-nav ul li span.nav-tag {
\tdisplay: inline-block;
    font-weight: 700;
    height: 19px;
    width: 19px;
    line-height: 19px;
    text-align: center;
    color: #fff;
    font-size: 11px;
    background-color: #66676b;
    border-radius: 50%;
    position: relative;
    margin: 0 0 0 4px;
    top: -2px;
}

/* Dropdown Styles */
.dashboard-nav ul li ul {
\tpadding: 0;
\tmargin: 0;
\tvisibility: hidden;
\tmax-height: 0;
\topacity: 0;
\tline-height: 0;
\ttransition: 0.3s;
\tpointer-events: none;
}

.dashboard-nav ul li.active-submenu ul {
\tvisibility: visible;
\tpadding: 0 0 18px 0;
\tline-height: 24px;
\topacity: 1;
\tmax-height: 200px;
\tpointer-events: all;
}

.dashboard-nav ul li ul li {
\tbackground-color: transparent;
\tborder: none;
\tpadding-left: 63px;
\tposition: relative;
\tmargin: 0;
}

.dashboard-nav ul li ul li a {
\tpadding: 5px 0;
}

.dashboard-nav ul li ul li:hover {
\tborder: none;
\tbackground-color: transparent;
}

/* Indicator Arrow */
.dashboard-nav ul li a:after {
    font-family: \"Material-Icons\";
    content: '\\e914';
    opacity: 1;
    font-size: 16px;
    transition: 0.3s;
    opacity: 1;
    line-height: 17px;
    width: 17px;
    height: 17px;
    background-color: #f0f0f0;
    color: #a8a8a8;
    display: inline-block;
    border-radius: 3px;
    margin-left: 7px;
    text-indent: 0;
    top: 1px;
    position: absolute;
   \tright: 35px;
    top: 15px;
}

.dashboard-nav ul li.active-submenu a:after,
.dashboard-nav ul li.active a:after,
.dashboard-nav ul li:hover a:after {
    color: #66676b;
    background: rgba(102,103,107,0.13);
    opacity: 0.8;
}

.dashboard-nav ul li ul:before,
.dashboard-nav ul li a:only-child:after { content: ''; display: none; }


/* ---------------------------------- */
/* Dashboard Elements
------------------------------------- */

/* Dashboard Headline
------------------------------------- */
.dashboard-headline {
\tdisplay: block;
\tposition: relative;
\tmargin-bottom: 50px;
}

.dashboard-headline h3 {
\tdisplay: block;
\tfont-size: 26px;
\tcolor: #333;
}

.dashboard-headline span {
\tdisplay: block;
\tfont-size: 18px;
\tcolor: #888;
\tline-height: 30px;
\tmargin-top: 5px;
}

.dashboard-headline #breadcrumbs { right: 0; }


/* Fun Facts
------------------------------------- */
.fun-facts-container {
\tdisplay: flex;
    flex-wrap: wrap;
\twidth: calc(100% + 30px);
\tmargin-bottom: -30px;
}

.fun-fact {
\tbackground-color: #fff;
\tbox-shadow: 0 2px 6px rgba(0,0,0,0.08);
\tborder-radius: 4px;
\tpadding: 25px;
\tmargin-right: 30px;
\tmargin-bottom: 30px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
\tflex: 1 1 calc(25% - 30px);
    height: auto;
    cursor: default;
    transition: 0.3s;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.fun-fact { flex: 1; }
}
/* IE 11 Fixes - End */

.fun-fact-icon {
\tborder-radius: 4px;
\tbackground-color: rgba(0,0,0,0.04);
\tflex: 0 0 100px;
\theight: 100px;
\tdisplay: flex;
\ttext-align: center;
}

.fun-fact-icon i {
\tfont-size: 48px;
    align-self: center;
    margin: 0 auto;
    color: #666;
}

.fun-fact-icon i.icon-material-outline-gavel {
\ttransform: scale(0.91);
}

.fun-fact-text {
\tflex: 1;
\tmargin-right: 20px;
}

.fun-fact span {
\tfont-size: 18px;
\tcolor: #888;
\tline-height: 22px;
}

.fun-fact h4 {
\tfont-size: 38px;
\tcolor: #333;
\tline-height: 38px;
\tmargin-top: 5px;
}



/* Dashboard Box
------------------------------------- */
.dashboard-box {
\tdisplay: block;
\tborder-radius: 4px;
\tbackground-color: #fff;
\tbox-shadow: 0 2px 8px rgba(0,0,0,0.08);
\tmargin-top: 30px;
\tposition: relative;
}

.dashboard-box .headline {
\tdisplay: block;
\tpadding: 20px 30px;
\tborder-bottom: 1px solid #e4e4e4;
\tposition: relative;
}

.dashboard-box .headline h3 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tline-height: 26px;
}

.dashboard-box .headline h3 i {
\tcolor: #66676b;
\tfont-size: 21px;
\tline-height: 0;
\tposition: relative;
\ttop: 2px;
\tmargin-right: 4px;
}

/* Pixel Perfect Adjustment */
.dashboard-box .headline h3 i.icon-material-outline-gavel { font-size: 20px; }
.dashboard-box .headline h3 i.icon-material-outline-supervisor-account { font-size: 24px; top: 3px;}
.dashboard-box .headline h3 i.icon-feather-folder-plus { font-size: 20px; top: 2px; margin-right: 5px; }
.button.big i.icon-feather-plus { font-size: 20px; top: 2px; margin-left: -4px; margin-right: 5px;}
/* Pixel Perfect Adjustment - End */

.dashboard-box .content.with-padding { padding: 30px; }

.dashboard-box .chart { padding: 30px 20px 17px 18px; }

.dashboard-box .headline .sort-by {
\tfloat: none;
\tdisplay: inline-block;
\tposition: absolute;
\ttop: calc(50% + 3px);
\ttransform: translateY(-50%);
\tright: 30px;
\tz-index: 100;
\theight: 33px;
}

.dashboard-box .headline .bootstrap-select.btn-group .dropdown-toggle .filter-option {
    font-weight: 500;
    color: #666;
}


/* Note
------------------------------------- */
.dashboard-note {
\tborder-radius: 4px;
\tbackground-color: #f8f8f8;
\tpadding: 25px;
\tpadding-top: 20px;
\tmargin-bottom: 20px;
\tposition: relative;
}

.dashboard-note:last-child { margin-bottom: 65px; }

.dashboard-note:before {
\tcontent: \"\";
    position: absolute;
    top: 0;
    right: 0;
    border-width: 0 20px 20px 0;
    border-style: solid;
    border-color: rgba(0,0,0,0.15) #fff;
    transition: 0.3s;
    border-radius: 0 0 0 4px;
}

.dashboard-note p {
\tline-height: 24px;
\tmargin-bottom: 20px;
\tcolor: #777;
\tfont-size: 14.7px;
}

.note-priority {
\tbackground-color: #333;
\tborder-radius: 4px;
\tcolor: #fff;
\tfont-size: 14px;
\tpadding: 5px 9px;
\tdisplay: inline-block;
\tline-height: 20px;
}

.note-priority.high { background-color: #dc3139; }
.note-priority.medium { background-color: #f59110; }
.note-priority.low { background-color: #3fb660; }

.note-footer {
\tdisplay: flex;
}

.note-buttons {
\talign-self: center;
    margin-left: auto;
}

.note-buttons a {
\tfont-size: 16px;
\tpadding-left: 3px;
\tmargin-top: 2px;
\tdisplay: inline-block;
\tcolor: #888;
}

.note-buttons a:hover { color: #444; }

.add-note-button {
\tposition: absolute;
\tbottom: 0;
\twidth: 100%;
\tleft: 0;
\tright: 0;
\tpadding: 30px;
\tpadding-top: 10px;
\tbackground: #fff;
\tborder-radius: 4px;
\twidth: calc(100% - 15px);
}

.add-note-button a.button {
\twidth: calc(100% + 15px) !important;
\tmax-width: calc(100% + 15px) !important;
}



/* Dashboard Box List
------------------------------------- */
ul.dashboard-box-list {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

ul.dashboard-box-list > li {
\tborder-bottom: 1px solid #e4e4e4;
\tpadding: 0;
\tline-height: 26px;
\tpadding: 22px 30px;
\tdisplay: flex;
    align-items: center;
    position: relative;
\twidth: 100%;
\tflex-flow: row wrap;
\ttransition: 0.3s;
}

ul.dashboard-box-list > li:last-child {
\tborder-bottom: none;
}

ul.dashboard-box-list > li:hover {
\tbackground-color: #fcfcfc;
}

.dashboard-box-list .notification-text { font-size: 14.7px; flex: 1; }
.dashboard-box-list .notification-icon { flex: 0 0 40px; }
.dashboard-box-list .notification-text .star-rating {
\tposition: relative;
\ttop: -18px;
\tline-height: 0;
\theight: 0;
\tdisplay: inline-block;
\tmargin: 0 3px;
\ttransform: scale(0.93);
}


/* Dashboard Box List Buttons
------------------------------------- */
.buttons-to-right,
.dashboard-box-list .button.to-right {
\tposition: absolute;
\tright: 30px;
\ttop: 50%;
\ttransform: translateY(-50%);
\topacity: 0;
\ttransition: 0.3s;
\tbox-shadow: 0px 0px 10px 15px #fff;
\tbackground-color: #fff;
}

.dashboard-box-list .buttons-to-right.always-visible,
.dashboard-box-list li:hover .buttons-to-right { opacity: 1; }

.dashboard-box-list .buttons-to-right.always-visible:not(.single-right-button) {
    position: relative;
    transform: none;
    top: 0;
    margin: 5px 0 10px -2px;
    opacity: 1;
    right: auto;
    display: inline-block;
    box-shadow: none;
    width: 100%;
    background-color: transparent;
    box-shadow: none;
}

.dashboard-box-list .button {
    padding: 6px 15px;
    line-height: 20px;
    font-size: 13px;
    font-weight: 600;
    margin: 0;
    display: inline-block;
\tbox-shadow: 0 3px 8px rgba(102,103,107,0.15);
}

.dashboard-box-list .button i[class*=\"icon-material\"] {
    font-size: 18px;
    top: 3px;
    margin-right: 2px;
    margin-left: -2px
}

.dashboard-box-list .buttons-to-right .button {
    margin: 0 0 -6px 2px;
}

.dashboard-box-list .buttons-to-right.always-visible .button {
    margin: 0 3px 0 0;
}

.dashboard-box .button.red    { background-color: #dc3139; box-shadow: 0 3px 8px rgba(234,65,81,0.15); }
.dashboard-box .button.green  { background-color: #40b660; box-shadow: 0 3px 8px rgba(64,182,96,0.15); }
.dashboard-box .button.dark   { background-color: #333333; box-shadow: 0 3px 8px rgba(0,0,0,0.1); }
.dashboard-box .button.gray   { background-color: #eee; color: #666; box-shadow: none; }

/* Hovers */
.dashboard-box .dashboard-box-list .button:not(.ico):hover,
.dashboard-box .button.red:not(.ico):hover,
.dashboard-box .button.green:not(.ico):hover,
.dashboard-box .button.gray:not(.ico):hover   {
\tcolor: #fff;
\tbackground-color: #333333;
\tbox-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

.dashboard-box .button.dark:not(.ico):hover {
\tbackground-color: #66676b;
\tbox-shadow: 0 3px 8px rgba(102,103,107,0.15);
}

.dashboard-box .button.ico {
\twidth: 32px;
\ttext-align: center;
}

.dashboard-box .button.ico i {
\tfont-size: 15px;
\tmargin-left: -7px;
\ttop: 2px;
\tposition: relative;
}

.dashboard-box .button i.icon-material-outline-check {
\tmargin-left: -5px;
}

.dashboard-box .button.ico i[class*=\"icon-material\"] { 
\tfont-size: 18px;
\tmargin-left: -8px;
\ttop: 3px;
\tposition: relative;
}

.dashboard-box-list { box-shadow: none; }

.dashboard-box-list a.button i {
\tmargin: 0;
\tpadding: 0;
\tposition: relative;
\ttop: 1px;
\tfont-size: 14px;
\tline-height: 0;
\tmargin-left: -2px;
}

.dashboard-box .mark-as-read {
\tfloat: none;
\tbackground-color: #f4f4f4;
\tposition: absolute;
\tright: 30px;
\ttop: 18px;
}

.button-info {
\tbackground: rgba(255,255,255,0.25);
    color: #fff;
    width: 19px;
    height: 19px;
    display: inline-block;
    text-align: center;
    line-height: 19px;
    border-radius: 50%;
    font-size: 11px;
    font-weight: 700;
    margin-left: 3px;
    margin-right: -2px;
}

/* Listing Status*/
.dashboard-status-button {
\tcolor: #fff;
\tborder-radius: 4px;
\tfont-size: 14px;
\tline-height: 21px;
\tpadding: 2px 8px;
\tdisplay: inline-block;
\tposition: relative;
\ttop: -2px;
\tmargin: 0 0 4px 4px;
}

.dashboard-status-button.green {
    background: #e0f5d7;
    color: #449626;
}

.dashboard-status-button.yellow {
\tbackground-color: #fbf6dd;
\tcolor: #a18d29;
}

.dashboard-status-button.red {
\tbackground-color: #ffe6e6;
\tcolor: #ea5252
}


/* Dashboard Invoices List
------------------------------------- */
.invoice-list-item ul {
\tline-height: 22px;
\tpadding-bottom: 2px;
\tcolor: #909090;
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

.invoice-list-item ul li {
\tpadding: 0;
\tdisplay: inline-block;
\tfont-size: 14.7px;
\tmargin-bottom: 5px;
}

.invoice-list-item ul li:after {
\tcontent: \"\";
\tdisplay: inline-block;
\twidth: 1px;
\theight: 11px;
\tbackground-color: #e0e0e0;
\tposition: relative;
\tmargin: 0 10px;
}

.invoice-list-item ul li:last-child:after { display: none; }

.invoice-list-item strong { 
\tfont-weight: 600;
\tcolor: #333;
\tmargin-bottom: 5px;
\tmargin-top: -2px;
\tdisplay: block;
}

.paid,
.unpaid {
\tbackground-color: #333;
\tcolor: #fff;
\tborder-radius: 4px;
\tline-height: 20px;
\tpadding: 4px 8px;
\tfont-size: 13px;
\tposition: relative;
\ttop: -1px;
}

.paid \t{ background-color: #40b660; }
.unpaid { background-color: #dc3139; }


/* Listings in Dashboard
------------------------------------- */
/* Freelancers */
.dashboard-box .job-listing-details {
\tbox-shadow: none;
\tpadding: 10px 0;
\talign-items: center;
\tflex: auto;
}

.dashboard-box .job-listing {
\tbox-shadow: none;
\tpadding: 0;
\tmargin: 0;
\tbackground-color: transparent;
    display: flex;
    flex-direction: row;
    width: 100%;
}

.dashboard-box .job-listing.width-adjustment {
\tmax-width: 60%
}

.dashboard-box .job-listing h3 a {
\tcolor: #333;
\tfont-size: 18px;
}

.dashboard-box .job-listing .job-listing-company-logo {
\tmax-width: 50px;
}

.dashboard-box .job-listing .job-listing-description {
\tpadding-top: 0;
}

.dashboard-box .job-listing:hover {
\ttransform: none;
}

.dashboard-box .job-listing .job-listing-footer {
    background-color:transparent;
    padding: 0;
    border-radius: none;
}

/* Jobs */
.dashboard-box .freelancer-overview {
\tpadding: 15px 0;
}
.dashboard-box .freelancer-overview-inner {
    flex:  auto;
    display: flex;
    align-items: center;
}

.dashboard-box .freelancer-overview .freelancer-name {
    text-align: left;
    margin: 0 0 0 30px;
    width: 100%;
}

.dashboard-box .freelancer-overview .freelancer-avatar {
\tmargin: 0;
\twidth: 90px;
}

.dashboard-box .freelancer-overview.manage-candidates .freelancer-avatar {
\talign-self: flex-start;
}

/* Dashboard Task Info */
.dashboard-task-info {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
    background-color: #f4f4f4;
\ttext-align: center;
\tborder-radius: 4px;
\tpadding: 14px 25px;
    display: flex;
    flex-direction: row;
    align-items: stretch;
    align-self: flex-end;
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
    transition: 0.3s;
    justify-content: center;
}

.dashboard-box li:hover .dashboard-task-info {
\tbackground-color: #f0f0f0;
}

.dashboard-task-info li {
\tdisplay: inline-block;
\tborder-right: 1px solid #d0d0d0;
\tpadding-right: 22px;
\tmargin-right: 22px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
}

.dashboard-task-info li:last-child {
\tmargin-right: 0;
\tpadding-right: 0;
\tborder: none;
}

.dashboard-task-info li strong {
\tdisplay: block;
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tline-height: 22px;
}

.dashboard-task-info li span {
\tdisplay: block;
\tfont-size: 14px;
\tcolor: #888;
\tline-height: 20px;
}

/* Bid Acceptance */
.bid-acceptance {
\tdisplay: flex;
    color: #289c41;
    background-color: #e4f6e9;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    border-radius: 4px;
    padding: 12px 18px;
    display: inline-block;
    margin: 0 auto;
    line-height: 20px;
}

.bid-acceptance span {
\tfont-size: 14px;
\topacity: 0.86;
\tline-height: 20px;
}


/* Media Queries */
@media (max-width: 1366px) {
\t.dashboard-box .job-listing.width-adjustment {max-width: 100% }
\t.dashboard-task-info {
\t    position: relative;
\t    right: 0;
\t    top: 0;
\t    transform: none;
\t    margin: 10px 0 20px 0;
\t}
\t.dashboard-task-info.bid-info {
\t\tmargin-bottom: 0;
\t\tmargin-top: 20px;
\t}
}

@media (max-width: 768px) {
\t.dashboard-box .freelancer-overview .freelancer-avatar {
\t\twidth: 60px;
\t}
\t.dashboard-box .freelancer-overview .freelancer-avatar .verified-badge {
\t\ttransform: scale(0.8);
\t\tbottom: -5px;
\t\tright: -5px;
\t}
\t.dashboard-box .freelancer-overview .freelancer-name {
\t    margin: 0 0 0 25px;
\t}
\t.dashboard-box .job-listing .job-listing-company-logo {
\t\tdisplay: none;
\t}

\t.dashboard-task-info.bid-info,
\t.dashboard-task-info:not(.bid-info) {
\t\tflex-direction: column;
\t\twidth: 100%;
\t}

\t.dashboard-task-info li {
\t\tborder-right: none;
\t\tborder-bottom: 1px solid #d0d0d0;
\t\tpadding: 0 0 10px 0;
\t\tmargin: 0 0 10px 0;
\t\twidth: 100%;
\t}
\t.dashboard-task-info li:last-child{
\t\tborder-right: none;
\t\tborder-bottom: none;
\t\tpadding: 0;
\t\tmargin: 0;
\t}
}


/* Reviews
------------------------------------- */
.dashboard-box .boxed-list-item {
\tpadding: 10px 0;
\twidth: 100%;
}


/* Submit Forms
------------------------------------- */
.submit-field {
\tmargin-bottom: 28px;
\tdisplay: block;
}

.submit-field .pac-container {
    box-shadow: none;
    border: 1px solid #e0e0e0;
    border-top: 1px solid #fff;
    padding-top: 0;
    z-index: 9;
    left: 0 !important;
    top: 47px !important;
    border-radius: 0 0 4px 4px;
}

.submit-field h5 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tmargin-bottom: 12px;
}

.submit-field h5 span {
\tcolor: #888;
\tfont-weight: 500;
}

.help-icon {
\tcolor: #66676b;
\tdisplay: inline-block;
\tfont-size: 19px;
\tfont-weight: 400;
\tline-height: 18px;
\theight: 16px;
\tposition: relative;
\ttop: 3px;
\tmargin: 0 3px;
\tfont-style: normal;
\tcursor: help;
}

.help-icon:before {
\tcontent: \"\\e97c\";
\tfont-family: \"Feather-Icons\"
}


/* Avatar Switcher */
.avatar-wrapper {
\tposition: relative;
\twidth: 150px;
\theight: 150px;
\tborder-radius: 4px;
\toverflow: hidden;
\tbox-shadow: none;
\tmargin: 0 10px 30px 0;
\ttransition: all .3s ease;
}
.avatar-wrapper:hover {
\ttransform: scale(1.05);
\tcursor: pointer;
}

.avatar-wrapper .profile-pic {
\theight: 100%;
\twidth: 100%;
\ttransition: all .3s ease;
\tobject-fit: cover;
}

.avatar-wrapper .profile-pic:after {
\tfont-family: Feather-Icons;
\tcontent: \"\\e9f1\";
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tline-height: 120px;
\tposition: absolute;
\tfont-size: 60px;
\tbackground: #f0f0f0;
\tcolor: #aaa;
\ttext-align: center;
}

.avatar-wrapper .upload-button {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\theight: 100%;
\twidth: 100%;
}

.avatar-wrapper .file-upload {
\topacity: 0;
\tpointer-events: none;
\tposition: absolute;
}

/* Small Footer Styles
------------------------------------- */
.dashboard-content-inner .small-footer {
    width: 100%;
    left: 0px;
    padding: 25px 50px;
    position: absolute;
    bottom: 0;
}

.dashboard-footer-spacer {
\tpadding-top: 125px;
}


/* Dashbaord Media Queries 
------------------------------------- */
@media (min-width: 1365px) and (max-width: 1600px) {
\t.fun-fact:last-child { display: none; }
}

@media (max-width: 1365px) {
\t.fun-fact {
\t\tflex: 1 1 calc(50% - 30px);
\t\tmax-width: calc(50% - 30px);
\t}
}

@media (max-width: 992px) {
\t.dashboard-content-inner { min-height: auto !important; }
\t/* Dashboard Mobile Basis */
\t.dashboard-sidebar .dashboard-nav-container,
\t.dashboard-content-inner { padding: 15px; }
\t.dashboard-sidebar-inner { padding-bottom: 30px; }
\t.dashboard-sidebar .simplebar-content { overflow-x: hidden; }

\t.dashboard-nav-inner {
\t\tpadding: 30px 0;
\t\tmargin-bottom: 0;
\t}

\t.dashboard-sidebar {
\t\tflex: 1;
\t\twidth: 100%;
\t    background-color: transparent;
\t    box-shadow: none;
\t    height: auto !important;
\t}

\t.full-page-sidebar .simplebar-track,
\t.dashboard-sidebar .simplebar-track { display: none; }

\t.full-page-sidebar-inner, 
\t.dashboard-sidebar-inner { height: auto !important; }

\t.dashboard-container {
\t\tdisplay: block;
\t    width: 100%;
\t    flex-wrap: wrap;
\t    height: auto !important;
\t}

\t.dashboard-content-container { height: auto !important; }
\t.dashboard-content-container .simplebar-scrollbar { display: none; }

\t/* Dashboard Mobile Basis - End */

\t/* Dashboard Nav */
\t.dashboard-nav {
\t\twidth: 100%;
\t\tmargin: 0;
\t\tborder-radius: 0 0 4px 4px;
\t\tposition: relative;
\t\tmin-height: auto;
\t\topacity: 1;
\t\tvisibility: hidden;
\t\tmax-height: 0;
\t\tpadding: 0;
\t\ttransition: all 0.3s;
\t    box-shadow: 0 0 10px rgba(0,0,0,0.1);
\t    background: #fff;
\t}

\t.dashboard-nav ul:first-child { margin: 0; }
\t.dashboard-nav ul { margin-top: 15px; }

\t.dashboard-nav.active ul,
\t.dashboard-nav.active {
\t\topacity: 1;
\t\tvisibility: visible;
\t\tmax-height: 900px;
\t}

\t.dashboard-nav ul:before { padding: 0 29px; }
\t.dashboard-nav ul li a { padding: 10px 25px; }

\t.dashboard-nav ul,
\t.dashboard-nav.active ul li ul,
\t.dashboard-nav ul li ul {
\t    visibility: hidden;
\t    opacity: 0;
\t    max-height: 0;
\t    transition: all 0.3s;
\t}

\t.dashboard-nav.active ul li.active-submenu ul {
\t    visibility: visible;
\t    opacity: 1;
\t    max-height: 300px;
\t}

\t/* Trigger */
\ta.dashboard-responsive-nav-trigger {
\t\twidth: 100%;
\t\tmargin: 0;
\t\tmargin-top: 15px;
\t\tbackground-color: #333;
\t\tborder-radius: 5px;
\t\tcolor: #fff;
\t\tpadding: 16px 30px;
\t\tfont-weight: 600;
\t\ttransition: 0.2s;
\t\tdisplay: block;
\t\tline-height: 26px;
\t}

\ta.dashboard-responsive-nav-trigger span.trigger-title {
\t\tpadding-left: 33px;
\t}

\ta.dashboard-responsive-nav-trigger .hamburger-inner, 
\ta.dashboard-responsive-nav-trigger .hamburger-inner::before, 
\ta.dashboard-responsive-nav-trigger .hamburger-inner::after {
\t\tbackground-color: #fff;
\t}

\ta.dashboard-responsive-nav-trigger .hamburger {
\t\ttop: 2px;
\t\tleft: 0;
\t\ttransform: scale(0.66);
\t}

\ta.dashboard-responsive-nav-trigger i {
\t\tmargin-right: 8px;
\t\tmargin-left: -2px;
\t\tfont-size: 28px;
\t\tline-height: 0;
\t\tposition: relative;
\t\ttop: 6px;
\t}

\ta.dashboard-responsive-nav-trigger.active {
\t\tborder-radius: 4px 4px 0 0;
\t}
\t/* Dashboard Nav - End */

\t.buttons-to-right:not(.single-right-button)  {  opacity: 1; }
\t.fun-facts-container {
\t\twidth: calc(100% + 15px);
\t\tmargin-bottom: -15px;
\t}
\t.fun-fact {
\t\tflex: 1 1 calc(50% - 15px);
\t\tmax-width: calc(50% - 15px);
\t\tmargin: 0 15px 15px 0;
\t}
}

@media (max-width: 768px) {
\t.fun-fact {
\t\tflex: 1 1 100%;
\t\tmax-width: 100%;
\t}
\t#titlebar #breadcrumbs,
\t.dashboard-headline #breadcrumbs {
\t    right: 0;
\t    position: relative;
\t    top: 0;
\t    transform: none;
\t    margin-top: 30px;
\t    max-width: 100%;
\t}
\t.buttons-to-right:not(.single-right-button) {
\t    position: relative;
\t    transform: none;
\t    top: 0;
\t    margin: 10px 0 0 0;
\t    opacity: 1;
\t    right: auto;
\t    display: inline-block;
\t    box-shadow: none;
\t    width: 100%;
\t}
\t.dashboard-box .headline .sort-by {
\t    float: none;
\t    display: inline-block;
\t    position: relative;
\t    top: 0;
\t    transform: none;
\t    right: 0px;
\t    top: 5px;
\t    left: -8px;
\t}
\t.dashboard-box .headline .sort-by .bootstrap-select .dropdown-menu {
\t    left: 0;
\t    right: auto;
\t}
}


/* ---------------------------------- */
/* Dashboard Messages
------------------------------------- */
.messages-container {
\tmargin: 0;
\tbox-shadow: 0 0 12px 0 rgba(0,0,0,0.06);
\tborder-radius: 4px;
\tbackground-color: #fff;
}


/* Scrollbar Adjustments */
.messages-inbox ul { max-height: 875px; }
.message-content-inner { max-height: 750px; }

.message-content,
.messages-container-inner .messages-inbox { overflow: hidden; }

.message-content-inner,
.messages-container-inner .messages-inbox ul {
\toverflow-y: scroll;
\twidth: calc(100% + 18px)
}
.message-content-inner::-webkit-scrollbar,
.messages-container-inner .messages-inbox ul::-webkit-scrollbar { width: 17px; }
/*  Scrollbar Hide - End */

.messages-headline {
\tmax-height: 82px;
\tfont-size: 16px;
\tmargin: 0;
\tpadding: 22px 30px;
\tcolor: #333;
\tbackground-color: #fff;
\tdisplay: block;
\tborder-bottom: 1px solid #eaeaea;
\tborder-radius: 4px 4px 0 0;
\tposition: relative;
}

.messages-headline input {
\tbackground-color: #f6f6f6;
\tbox-shadow: none;
\theight: 38px;
\tpadding: 14px;
\tfont-size: 14px;
\tmargin: 0;
}

.messages-headline input:focus { box-shadow: none; }

.messages-headline .input-with-icon i {
\tfont-size: 18px;
\tright: 14px;
}

.messages-headline h4 {
\tfont-size: 16px;
\tcolor: #333;
\tpadding: 6px 0;
\tmargin: 0;
\tfont-weight: 600;
\tdisplay: inline-block;
}

.message-action {
\tborder-radius: 50px;
\tfont-size: 13px;
\tcolor: #666;
\tfont-weight: 500;
\tdisplay: inline-block;
\ttransition: 0.3s;
\tcolor: #666;
\tpadding: 0;
\tposition: absolute;
\ttop: 50%;
\tright: 30px;
\ttransform: translateY(-50%);
}

.message-action i {
\tfont-size: 14px;
\tposition: relative;
\ttop: 1px;
\tmargin-right: 1px;
}

.message-action:hover { color: #ee3535; }

/* List */
.messages-inbox ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

.message-avatar img {
\tdisplay: inline-block;
\twidth: 54px;
\theight: 54px;
\tborder-radius: 50%;
}

.messages-inbox ul li a {
\tposition: relative;
\tdisplay: block;
\tpadding: 30px;
}

.messages-inbox ul li {
\ttransition: 0.2s;
\tposition: relative;
}

.messages-inbox ul li:nth-child(2n) {
\tbackground-color: #fafafa;
}

.messages-inbox ul li:last-child { border-bottom: none; }

.messages-inbox ul li.active-message { background-color: #fafafa; }

.messages-inbox ul li:before {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 3px;
\theight: 100%;
\tbackground-color: #66676b;
\tdisplay: block;
\tcontent: \"\";
\topacity: 0;
\ttransition: 0.3s;
}

.messages-inbox ul li:hover:before,
.messages-inbox ul li.active-message:before {
\topacity: 1;
}

.messages-inbox .message-avatar {
\tposition: absolute;
\tleft: 30px;
\ttop: 50%;
\ttransform: translateY(-50%);
}

.messages-inbox .message-by {
\tmargin-left: 85px;
\tfont-size: 15px;
\tcolor: #666;
}

.messages-inbox .message-by p {
\tmargin: 0;
\tpadding: 0;
\tline-height: 25px;
\tfont-size: 15px;
}

.message-by-headline h5,
.message-by-headline span {
\tdisplay: inline-block;
}

.message-by-headline span {
\tfloat: right;
\tcolor: #888;
\tfont-size: 14px;
}

.message-by-headline h5 {
\tfont-weight: 600;
\tcolor: #333;
\tmargin: 0 0 7px 0;
\tpadding: 0;
}

.message-by-headline:after {
\tcontent: \".\";
\tdisplay: block;
\tclear: both;
\tvisibility: hidden;
\tline-height: 0;
\theight: 0;
}

.message-by h5 i {
\tbackground-color: #66676b;
\tborder-radius: 4px;
\tline-height: 20px;
\tfont-size: 12px;
\tcolor: #fff;
\tfont-style: normal;
\tpadding: 3px 8px;
\tmargin-left: 3px;
}


/* Single Message */
.messages-container-inner {
\tdisplay: flex;
}

.messages-container-inner .messages-inbox,
.messages-container-inner .message-content {
\tflex: 1;
}

.messages-container-inner .message-content-inner {
\tpadding: 30px;
\tpadding-bottom: 0;
\tflex-grow: 1;
}

.messages-container-inner .message-content {
\tdisplay: flex;
\tflex-direction: column;
}

.messages-container-inner .messages-inbox {
\tmax-width: 340px;
\tborder-right: 1px solid #eaeaea;
}

.messages-container-inner .messages-inbox ul li a { padding: 25px; }

.messages-container-inner .messages-inbox .message-by p {
\theight: 26px;
\tmax-width: 205px;
\ttext-overflow: ellipsis;
\twhite-space: nowrap;
\toverflow: hidden;
\tfont-size: 14px;
\tcolor: #888;
}

.messages-container-inner .message-avatar img {
\twidth: 40px;
\theight: 40px;
}

.messages-container-inner .messages-inbox .message-avatar { left: 25px; }
.messages-container-inner .messages-inbox .message-by { margin-left: 60px }

.messages-container-inner .message-by-headline h5 {
\tfont-size: 14px;
\tmargin-bottom: 3px;
\tmax-width: 160px;
\tline-height: 23px;
}

.messages-container-inner .message-by-headline span {
\tfont-size: 13px;
\tposition: absolute;
\ttop: 25px;
\tright: 25px
}

/* Message Bubbles */
.message-bubble {
\tdisplay: block;
\tposition: relative;
\tmargin-bottom: 25px;
}

.message-bubble .message-avatar {
\tposition: absolute;
\tleft: 0;
\ttop: 0;
}

.message-bubble .message-avatar img {
\twidth: 50px;
\theight: 50px;
}

.message-bubble .message-text {
\tmargin-left: 70px;
\tbackground-color: #f4f4f4;
\tborder-radius: 4px;
\tpadding: 12px 18px;
\tposition: relative;
\tdisplay: inline-block;
\tfloat: left;
\tline-height: 25px;
}

.message-bubble.me .message-text {
\tfloat: right;
}

.message-bubble .message-text p {
\tfont-size: 15px;
\tpadding: 0;
\tmargin: 0;
\tline-height: 25px;
}


/* Message Bubble \"me\" */
.message-bubble.me .message-avatar {
\tleft: auto;
\tright: 0;
}

.message-bubble.me .message-text {
\tmargin-left: 0;
\tmargin-right: 70px;
\tbackground-color: #66676b;
\tcolor: #fff;
\tposition: relative;
}

/* Arrow */
.message-bubble .message-text:before {
\tcontent: \"\";
\twidth: 0; 
\theight: 0; 
\tborder-top: 6px solid transparent;
\tborder-bottom: 6px solid transparent; 
\tborder-right: 6px solid #f4f4f4;
\tleft: -6px;
\tright: auto;
\ttop: 19px;
\tposition: absolute;
}

.message-bubble.me .message-text:before {
\tborder-top: 6px solid transparent;
\tborder-bottom: 6px solid transparent;
\tborder-left: 6px solid #66676b;
\tborder-right: none;
\tright: -6px;
\tleft: auto;
}

/* Message Time Sign */
.message-time-sign {
\ttext-align: center;
\tdisplay: block;
\tposition: relative;
\tmargin-bottom: 25px;
}

.message-time-sign:before {
\tcontent: \"\";
\theight: 1px;
\tbackground-color: #eaeaea;
\tdisplay: block;
\tmax-width: 30%;
\tmargin: 0 auto;
\tposition: relative;
\ttop: 14px;
\tz-index: 10;
}

.message-time-sign span {
\tbackground-color: #fff;
\tfont-size: 14px;
\tcolor: #888;
\tz-index: 11;
\tposition: relative;
\tpadding: 0 10px;
}

/* Reply */
.message-reply {
\tborder-top: 1px solid #eaeaea;
\tpadding: 30px;
\tdisplay: flex;
\talign-items: flex-start;
\tmargin-top: 15px;
}

.message-reply textarea {
\tmin-width: auto;
\theight: 48px;
\tmin-height: 48px;
\tpadding: 10px 0;
\tmargin: 0 15px 0 0;
\tflex: 1;
\tfont-size: 15px;
\tfont-weight: 400;
\tline-height: 26px;
\tbox-shadow: none;
\tborder: none;
    box-sizing: border-box;
    resize: none;
}

.message-reply button {
\tborder-radius: 4px;
\tflex: auto;
\tflex-grow: 0;
\theight: 44px;
\ttext-align: center;
\talign-self: center;
\tpadding: 0 25px;
}

.message-reply i{
\tpadding: 0;
\tmargin: 0;
}


/* Typing Indicastor */
.typing-indicator {
\twidth: auto;
\theight: 24px;
\tpadding-top: 8px;
}

.typing-indicator span {
\theight: 8px;
\twidth: 8px;
\tfloat: left;
\tmargin: 0 1px;
\tbackground-color: #a0a0a0;
\tdisplay: block;
\tborder-radius: 50%;
\topacity: 0.4;
}

.typing-indicator span:nth-of-type(1) { animation: 1s blink infinite 0.33333s; }
.typing-indicator span:nth-of-type(2) { animation: 1s blink infinite 0.66666s; }
.typing-indicator span:nth-of-type(3) { animation: 1s blink infinite 0.99999s; }

@keyframes blink {
  50% {
    opacity: 1;
  }
}

/* Messages Media Queries */
@media (max-width: 992px) {
\t.messages-container-inner .messages-inbox { max-width: 300px; }
}
@media (max-width: 768px) {
\t.messages-container-inner { display: block; }

\t.messages-container-inner .messages-inbox {
\t\tmax-width: 100%;
\t\tborder-bottom: 1px solid #e4e4e4;
\t\tborder-right: none;

\t}
\t.messages-inbox ul { max-height: 500px; }

\t.messages-container-inner .message-by-headline span {
\t\tposition: relative;
\t\ttop: 0;
\t\tright: 0;
\t\tdisplay: block;
\t\tfloat: none;
\t\tpadding: 0;
\t\tmargin: -4px 0 0 0;
\t}

\t.message-action {
\t\tdisplay: block;
\t\tposition: relative;
\t\tright: 0;
\t\ttop: 0;
\t\ttransform: none;
\t\tmargin-top: -5px;
\t}

\t.messages-headline { max-height: 120px; }
}


/* -------------------------------------------------------------- */
/*  08. Others
----------------------------------------------------------------- */

\t/* ---------------------------------- */
\t/* Common Styles
\t------------------------------------- */

\tbody {
\t\tcolor: #666;
\t\tfont-size: 16px;
\t\tline-height: 27px;
\t\tbackground-color: #fff;
\t}

\tbody.gray { background-color: #fbfbfb; }
\tbody p { font-size: 16px; line-height: 27px; }

\t/* Main Font */
\tbody, h1, h2, h3, h4, h5, h6,  input[type=\"text\"], input[type=\"password\"], input[type=\"email\"],
\ttextarea, select, input[type=\"button\"], input[type=\"submit\"], button, body .pac-container
\t{ font-family: \"Nunito\", \"HelveticaNeue\", \"Helvetica Neue\", Helvetica, Arial, sans-serif; text-transform: none; }

\t/* Headlines */
\th1, h2, h3, h4, h5, h6 {
\t\tcolor: #333;
\t\tfont-weight: 500;
\t\tmargin: 0;
\t\tpadding: 0;
\t}

\th1 { font-size: 32px; }
\th2 { font-size: 26px; }
\th3 { font-size: 22px; }
\th4 { font-size: 16px; }
\th5 { font-size: 14px; }
\th6 { font-size: 12px; }

\th3.page-title { font-size: 20px; line-height: 32px; }

\t.section { display: block; }
\t.section.white { background: #fff; }
\t.section.gray { background: #f9f9f9; }
\t.section.border-top { border-top: 1px solid #e0e0e0; }
\t.section.border-bottom { border-bottom: 1px solid #e0e0e0; }

\t/* Section Headline */
\t.section-headline {
\t\tdisplay: block;
\t\tposition: relative;
\t\tpadding-right: 20%;
\t}

\t.section-headline.centered {
\t\ttext-align: center;
\t\tpadding: 0;
\t}

\t.section-headline span {
\t\tfont-size: 18px;
\t\tline-height: 26px;
\t\tfont-weight: 300;
\t\tcolor: #888;
\t\tmargin-top: 0;
\t\tdisplay: block;
\t}

\t.section-headline h1,
\t.section-headline h2,
\t.section-headline h3,
\t.section-headline h4 {
\t\tfont-size: 26px;
\t\tline-height: 36px;
\t\tfont-weight: 500;
\t\tcolor: #333;
\t}

\t.section-headline h4 {
\t\tfont-size: 22px;
\t\tline-height: 34px;
\t}

\t.section-headline.border-top { border-top: 1px solid #e0e0e0; }

\th1.in-a-box,
\th2.in-a-box,
\th2.in-a-box,
\th3.in-a-box,
\th5.in-a-box {
\t\tdisplay: inline-block;
\t    font-size: 18px;
\t    background-color: #333;
\t    color: #fff;
\t    border-radius: 4px;
\t    padding: 8px 20px;
\t    box-shadow: 0 3px 10px rgba(0,0,0,0.15);
\t}

\t.section-headline h5 {
\t\tfont-size: 16px;
\t\tfont-weight: 600;
\t\tline-height: 30px;
\t}
\t
\t/* Headline Link */
\ta.headline-link {
\t\tposition: absolute;
\t\tright: 0;
\t\tbottom: 0;
\t}

\ta.headline-link.bottom-icon:after {
\t\tcontent: \"\\e957\";
\t\ttop: 3px;
\t}

\ta.headline-link:after {
\t\tcontent: \"\\e995\";
\t\tfont-family: \"Material-Icons\";
\t\tfont-size: 21px;
\t\tline-height: 0;
\t\tposition: relative;
\t\ttop: 4px;
\t\tmargin-left: 5px;
\t}

\t@media (max-width: 768px) { 
\t\ta.headline-link {
\t\t\tposition: relative;
\t\t\tmargin-top: 10px;
\t\t\tdisplay: inline-block;
\t\t}
\t}

\t/* Classes for disabling things on mobile devices */
\t@media (max-width: 992px) { .hide-under-992px { display: none; } }
\t@media (max-width: 768px) { .hide-under-768px { display: none; } }
\t@media (max-width: 480px) { .hide-under-480px { display: none; } }


\t/* ---------------------------------- */
\t/* Icons Cheatsheet Styles
\t------------------------------------- */
\t.icon-set-container {
\t\tdisplay: block;
\t\twidth: calc(100% + 30px);
\t\tleft: -15px;
\t\tposition: relative;
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\talign-content: center;
\t\tjustify-content: center;
\t}

\t.glyph.fs1 {
\t\tposition: relative;
\t\tfont-size: 20px;
\t\tmargin: 10px 15px;
\t\tbackground-color: #fff;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,0.08);
\t\tborder-radius: 4px;
\t\tflex: 1 1 calc(25% - 30px);
\t    align-content: center;
\t    justify-content: center;
\t    display: flex;
\t    flex-direction: column;
\t    padding: 15px 15px;
\t    transition: 0.3s;
\t    color: #666;
\t}

\t.glyph.fs1:hover {
\t\ttransform: translateY(-5px);
\t\tbackground-color: #333;
\t\tcolor: #fff;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,0.15);
\t}

\t.glyph.fs1:hover span:not([class*=\"mls\"]) {
\t\tbackground-color: #fff;
\t\tcolor: #333;
\t}

\t.glyph.fs1 .fs0,
\t.glyph.fs1 fieldset { display: none; }

\t.glyph.fs1 span:not([class*=\"mls\"]) {
\t\tvertical-align: middle;
\t\ttop: -4px;
\t\theight: 40px;
\t\twidth: 40px;
\t\tbackground: rgba(0,0,0,0.04);
\t\tdisplay: inline-block;
\t\tline-height: 40px;
\t\ttext-align: center;
\t\tborder-radius: 4px;
\t\tfont-size: 24px;
\t\ttransition: 0.3s;
\t\tposition: relative;
\t\tposition: absolute;
\t\ttop: 50%;
\t\ttransform: translateY(-50%);
\t}

\t.glyph.fs1 .mls:not([class*=\"icon-\"]) {
\t\tmax-width: 80%;
\t\tdisplay: inline-block;
\t\toverflow: hidden;
\t\tfont-size: 14px;
\t\tline-height: 20px;
\t\ttop: 0;\t
\t\tvertical-align: middle;
\t\tpadding-left: 55px;
\t}


\t/* ---------------------------------- */
\t/* Offsets
\t------------------------------------- */

\t/* Content & Sidebar Offsets */
\t.content-left-offset { padding-left: 30px; }
\t.content-right-offset { padding-right: 30px; }

\t@media (max-width: 992px) {
\t\t.content-left-offset { padding-left: 15px; }
\t\t.content-right-offset { padding-right: 15px; }
\t}

\t/* Margin Top */
\t.margin-top-0   { margin-top: 0px  !important; }
\t.margin-top-1   { margin-top: 1px  !important; }
\t.margin-top-2   { margin-top: 2px  !important; }
\t.margin-top-3   { margin-top: 3px  !important; }
\t.margin-top-4   { margin-top: 4px  !important; }
\t.margin-top-5   { margin-top: 5px  !important; }
\t.margin-top-6   { margin-top: 6px  !important; }
\t.margin-top-7   { margin-top: 7px  !important; }
\t.margin-top-8   { margin-top: 8px  !important; }
\t.margin-top-9   { margin-top: 9px  !important; }
\t.margin-top-10  { margin-top: 10px !important; }
\t.margin-top-11  { margin-top: 11px !important; }
\t.margin-top-12  { margin-top: 12px !important; }
\t.margin-top-13  { margin-top: 13px !important; }
\t.margin-top-14  { margin-top: 14px !important; }
\t.margin-top-15  { margin-top: 15px !important; }
\t.margin-top-16  { margin-top: 16px !important; }
\t.margin-top-17  { margin-top: 17px !important; }
\t.margin-top-18  { margin-top: 18px !important; }
\t.margin-top-19  { margin-top: 19px !important; }
\t.margin-top-20  { margin-top: 20px !important; }
\t.margin-top-21  { margin-top: 21px !important; }
\t.margin-top-22  { margin-top: 22px !important; }
\t.margin-top-23  { margin-top: 23px !important; }
\t.margin-top-24  { margin-top: 24px !important; }
\t.margin-top-25  { margin-top: 25px !important; }
\t.margin-top-26  { margin-top: 26px !important; }
\t.margin-top-27  { margin-top: 27px !important; }
\t.margin-top-28  { margin-top: 28px !important; }
\t.margin-top-29  { margin-top: 29px !important; }
\t.margin-top-30  { margin-top: 30px !important; }
\t.margin-top-31  { margin-top: 31px !important; }
\t.margin-top-32  { margin-top: 32px !important; }
\t.margin-top-33  { margin-top: 33px !important; }
\t.margin-top-34  { margin-top: 34px !important; }
\t.margin-top-35  { margin-top: 35px !important; }
\t.margin-top-36  { margin-top: 36px !important; }
\t.margin-top-37  { margin-top: 37px !important; }
\t.margin-top-38  { margin-top: 38px !important; }
\t.margin-top-39  { margin-top: 39px !important; }
\t.margin-top-40  { margin-top: 40px !important; }
\t.margin-top-41  { margin-top: 41px !important; }
\t.margin-top-42  { margin-top: 42px !important; }
\t.margin-top-43  { margin-top: 43px !important; }
\t.margin-top-44  { margin-top: 44px !important; }
\t.margin-top-45  { margin-top: 45px !important; }
\t.margin-top-46  { margin-top: 46px !important; }
\t.margin-top-47  { margin-top: 47px !important; }
\t.margin-top-48  { margin-top: 48px !important; }
\t.margin-top-49  { margin-top: 49px !important; }
\t.margin-top-50  { margin-top: 50px !important; }
\t.margin-top-51  { margin-top: 51px !important; }
\t.margin-top-52  { margin-top: 52px !important; }
\t.margin-top-53  { margin-top: 53px !important; }
\t.margin-top-54  { margin-top: 54px !important; }
\t.margin-top-55  { margin-top: 55px !important; }
\t.margin-top-56  { margin-top: 56px !important; }
\t.margin-top-57  { margin-top: 57px !important; }
\t.margin-top-58  { margin-top: 58px !important; }
\t.margin-top-59  { margin-top: 59px !important; }
\t.margin-top-60  { margin-top: 60px !important; }
\t.margin-top-61  { margin-top: 61px !important; }
\t.margin-top-62  { margin-top: 62px !important; }
\t.margin-top-63  { margin-top: 63px !important; }
\t.margin-top-64  { margin-top: 64px !important; }
\t.margin-top-65  { margin-top: 65px !important; }
\t.margin-top-66  { margin-top: 66px !important; }
\t.margin-top-67  { margin-top: 67px !important; }
\t.margin-top-68  { margin-top: 68px !important; }
\t.margin-top-69  { margin-top: 69px !important; }
\t.margin-top-70  { margin-top: 70px !important; }
\t.margin-top-71  { margin-top: 71px !important; }
\t.margin-top-72  { margin-top: 72px !important; }
\t.margin-top-73  { margin-top: 73px !important; }
\t.margin-top-74  { margin-top: 74px !important; }
\t.margin-top-75  { margin-top: 75px !important; }
\t.margin-top-76  { margin-top: 76px !important; }
\t.margin-top-77  { margin-top: 77px !important; }
\t.margin-top-78  { margin-top: 78px !important; }
\t.margin-top-79  { margin-top: 79px !important; }
\t.margin-top-80  { margin-top: 80px !important; }
\t.margin-top-81  { margin-top: 81px !important; }
\t.margin-top-82  { margin-top: 82px !important; }
\t.margin-top-83  { margin-top: 83px !important; }
\t.margin-top-84  { margin-top: 84px !important; }
\t.margin-top-85  { margin-top: 85px !important; }
\t.margin-top-86  { margin-top: 86px !important; }
\t.margin-top-87  { margin-top: 87px !important; }
\t.margin-top-88  { margin-top: 88px !important; }
\t.margin-top-89  { margin-top: 89px !important; }
\t.margin-top-90  { margin-top: 90px !important; }
\t.margin-top-91  { margin-top: 91px !important; }
\t.margin-top-92  { margin-top: 92px !important; }
\t.margin-top-93  { margin-top: 93px !important; }
\t.margin-top-94  { margin-top: 94px !important; }
\t.margin-top-95  { margin-top: 95px !important; }
\t.margin-top-96  { margin-top: 96px !important; }
\t.margin-top-97  { margin-top: 97px !important; }
\t.margin-top-98  { margin-top: 98px !important; }
\t.margin-top-99  { margin-top: 99px !important; }
\t.margin-top-100 { margin-top: 100px !important; }

\t/* Margin Bottom */
\t.margin-bottom-0   { margin-bottom: 0px  !important; }
\t.margin-bottom-1   { margin-bottom: 1px  !important; }
\t.margin-bottom-2   { margin-bottom: 2px  !important; }
\t.margin-bottom-3   { margin-bottom: 3px  !important; }
\t.margin-bottom-4   { margin-bottom: 4px  !important; }
\t.margin-bottom-5   { margin-bottom: 5px  !important; }
\t.margin-bottom-6   { margin-bottom: 6px  !important; }
\t.margin-bottom-7   { margin-bottom: 7px  !important; }
\t.margin-bottom-8   { margin-bottom: 8px  !important; }
\t.margin-bottom-9   { margin-bottom: 9px  !important; }
\t.margin-bottom-10  { margin-bottom: 10px !important; }
\t.margin-bottom-11  { margin-bottom: 11px !important; }
\t.margin-bottom-12  { margin-bottom: 12px !important; }
\t.margin-bottom-13  { margin-bottom: 13px !important; }
\t.margin-bottom-14  { margin-bottom: 14px !important; }
\t.margin-bottom-15  { margin-bottom: 15px !important; }
\t.margin-bottom-16  { margin-bottom: 16px !important; }
\t.margin-bottom-17  { margin-bottom: 17px !important; }
\t.margin-bottom-18  { margin-bottom: 18px !important; }
\t.margin-bottom-19  { margin-bottom: 19px !important; }
\t.margin-bottom-20  { margin-bottom: 20px !important; }
\t.margin-bottom-21  { margin-bottom: 21px !important; }
\t.margin-bottom-22  { margin-bottom: 22px !important; }
\t.margin-bottom-23  { margin-bottom: 23px !important; }
\t.margin-bottom-24  { margin-bottom: 24px !important; }
\t.margin-bottom-25  { margin-bottom: 25px !important; }
\t.margin-bottom-26  { margin-bottom: 26px !important; }
\t.margin-bottom-27  { margin-bottom: 27px !important; }
\t.margin-bottom-28  { margin-bottom: 28px !important; }
\t.margin-bottom-29  { margin-bottom: 29px !important; }
\t.margin-bottom-30  { margin-bottom: 30px !important; }
\t.margin-bottom-31  { margin-bottom: 31px !important; }
\t.margin-bottom-32  { margin-bottom: 32px !important; }
\t.margin-bottom-33  { margin-bottom: 33px !important; }
\t.margin-bottom-34  { margin-bottom: 34px !important; }
\t.margin-bottom-35  { margin-bottom: 35px !important; }
\t.margin-bottom-36  { margin-bottom: 36px !important; }
\t.margin-bottom-37  { margin-bottom: 37px !important; }
\t.margin-bottom-38  { margin-bottom: 38px !important; }
\t.margin-bottom-39  { margin-bottom: 39px !important; }
\t.margin-bottom-40  { margin-bottom: 40px !important; }
\t.margin-bottom-41  { margin-bottom: 41px !important; }
\t.margin-bottom-42  { margin-bottom: 42px !important; }
\t.margin-bottom-43  { margin-bottom: 43px !important; }
\t.margin-bottom-44  { margin-bottom: 44px !important; }
\t.margin-bottom-45  { margin-bottom: 45px !important; }
\t.margin-bottom-46  { margin-bottom: 46px !important; }
\t.margin-bottom-47  { margin-bottom: 47px !important; }
\t.margin-bottom-48  { margin-bottom: 48px !important; }
\t.margin-bottom-49  { margin-bottom: 49px !important; }
\t.margin-bottom-50  { margin-bottom: 50px !important; }
\t.margin-bottom-51  { margin-bottom: 51px !important; }
\t.margin-bottom-52  { margin-bottom: 52px !important; }
\t.margin-bottom-53  { margin-bottom: 53px !important; }
\t.margin-bottom-54  { margin-bottom: 54px !important; }
\t.margin-bottom-55  { margin-bottom: 55px !important; }
\t.margin-bottom-56  { margin-bottom: 56px !important; }
\t.margin-bottom-57  { margin-bottom: 57px !important; }
\t.margin-bottom-58  { margin-bottom: 58px !important; }
\t.margin-bottom-59  { margin-bottom: 59px !important; }
\t.margin-bottom-60  { margin-bottom: 60px !important; }
\t.margin-bottom-61  { margin-bottom: 61px !important; }
\t.margin-bottom-62  { margin-bottom: 62px !important; }
\t.margin-bottom-63  { margin-bottom: 63px !important; }
\t.margin-bottom-64  { margin-bottom: 64px !important; }
\t.margin-bottom-65  { margin-bottom: 65px !important; }
\t.margin-bottom-66  { margin-bottom: 66px !important; }
\t.margin-bottom-67  { margin-bottom: 67px !important; }
\t.margin-bottom-68  { margin-bottom: 68px !important; }
\t.margin-bottom-69  { margin-bottom: 69px !important; }
\t.margin-bottom-70  { margin-bottom: 70px !important; }
\t.margin-bottom-71  { margin-bottom: 71px !important; }
\t.margin-bottom-72  { margin-bottom: 72px !important; }
\t.margin-bottom-73  { margin-bottom: 73px !important; }
\t.margin-bottom-74  { margin-bottom: 74px !important; }
\t.margin-bottom-75  { margin-bottom: 75px !important; }
\t.margin-bottom-76  { margin-bottom: 76px !important; }
\t.margin-bottom-77  { margin-bottom: 77px !important; }
\t.margin-bottom-78  { margin-bottom: 78px !important; }
\t.margin-bottom-79  { margin-bottom: 79px !important; }
\t.margin-bottom-80  { margin-bottom: 80px !important; }
\t.margin-bottom-81  { margin-bottom: 81px !important; }
\t.margin-bottom-82  { margin-bottom: 82px !important; }
\t.margin-bottom-83  { margin-bottom: 83px !important; }
\t.margin-bottom-84  { margin-bottom: 84px !important; }
\t.margin-bottom-85  { margin-bottom: 85px !important; }
\t.margin-bottom-86  { margin-bottom: 86px !important; }
\t.margin-bottom-87  { margin-bottom: 87px !important; }
\t.margin-bottom-88  { margin-bottom: 88px !important; }
\t.margin-bottom-89  { margin-bottom: 89px !important; }
\t.margin-bottom-90  { margin-bottom: 90px !important; }
\t.margin-bottom-91  { margin-bottom: 91px !important; }
\t.margin-bottom-92  { margin-bottom: 92px !important; }
\t.margin-bottom-93  { margin-bottom: 93px !important; }
\t.margin-bottom-94  { margin-bottom: 94px !important; }
\t.margin-bottom-95  { margin-bottom: 95px !important; }
\t.margin-bottom-96  { margin-bottom: 96px !important; }
\t.margin-bottom-97  { margin-bottom: 97px !important; }
\t.margin-bottom-98  { margin-bottom: 98px !important; }
\t.margin-bottom-99  { margin-bottom: 99px !important; }
\t.margin-bottom-100 { margin-bottom: 100px !important; }

\t/* Margin Left */
\t.margin-left-0  { margin-left: 0 !important; }
\t.margin-left-1  { margin-left: 1px !important; }
\t.margin-left-2  { margin-left: 2px !important; }
\t.margin-left-3  { margin-left: 3px !important; }
\t.margin-left-4  { margin-left: 4px !important; }
\t.margin-left-5  { margin-left: 5px !important; }
\t.margin-left-6  { margin-left: 6px !important; }
\t.margin-left-7  { margin-left: 7px !important; }
\t.margin-left-8  { margin-left: 8px !important; }
\t.margin-left-9  { margin-left: 9px !important; }
\t.margin-left-10 { margin-left: 10px !important; }
\t.margin-left-15 { margin-left: 15px !important; }
\t.margin-left-20 { margin-left: 20px !important; }
\t.margin-left-25 { margin-left: 25px !important; }
\t.margin-left-30 { margin-left: 30px !important; }
\t.margin-left-35 { margin-left: 35px !important; }
\t.margin-left-40 { margin-left: 40px !important; }
\t.margin-left-45 { margin-left: 45px !important; }
\t.margin-left-50 { margin-left: 50px !important; }
\t.margin-left-55 { margin-left: 55px !important; }
\t.margin-left-60 { margin-left: 60px !important; }
\t.margin-left-65 { margin-left: 65px !important; }
\t.margin-left-70 { margin-left: 70px !important; }
\t.margin-left-75 { margin-left: 75px !important; }
\t.margin-left-80 { margin-left: 80px !important; }
\t.margin-left-85 { margin-left: 85px !important; }
\t.margin-left-90 { margin-left: 90px !important; }
\t.margin-left-95 { margin-left: 95px !important; }
\t.margin-left-100 { margin-left: 100px !important; }

\t/* Margin Right */
\t.margin-right-0  { margin-right: 0 !important; }
\t.margin-right-1  { margin-right: 1px !important; }
\t.margin-right-2  { margin-right: 2px !important; }
\t.margin-right-3  { margin-right: 3px !important; }
\t.margin-right-4  { margin-right: 4px !important; }
\t.margin-right-5  { margin-right: 5px !important; }
\t.margin-right-6  { margin-right: 6px !important; }
\t.margin-right-7  { margin-right: 7px !important; }
\t.margin-right-8  { margin-right: 8px !important; }
\t.margin-right-9  { margin-right: 9px !important; }
\t.margin-right-10 { margin-right: 10px !important; }
\t.margin-right-15 { margin-right: 15px !important; }
\t.margin-right-20 { margin-right: 20px !important; }
\t.margin-right-25 { margin-right: 25px !important; }
\t.margin-right-30 { margin-right: 30px !important; }
\t.margin-right-35 { margin-right: 35px !important; }
\t.margin-right-40 { margin-right: 40px !important; }
\t.margin-right-45 { margin-right: 45px !important; }
\t.margin-right-50 { margin-right: 50px !important; }
\t.margin-right-55 { margin-right: 55px !important; }
\t.margin-right-60 { margin-right: 60px !important; }
\t.margin-right-65 { margin-right: 65px !important; }
\t.margin-right-70 { margin-right: 70px !important; }
\t.margin-right-75 { margin-right: 75px !important; }
\t.margin-right-80 { margin-right: 80px !important; }
\t.margin-right-85 { margin-right: 85px !important; }
\t.margin-right-90 { margin-right: 90px !important; }
\t.margin-right-95 { margin-right: 95px !important; }
\t.margin-right-100 { margin-right: 100px !important; }


\t/* Padding Top */
\t.padding-top-0   { padding-top: 0px  !important; }
\t.padding-top-1   { padding-top: 1px  !important; }
\t.padding-top-2   { padding-top: 2px  !important; }
\t.padding-top-3   { padding-top: 3px  !important; }
\t.padding-top-4   { padding-top: 4px  !important; }
\t.padding-top-5   { padding-top: 5px  !important; }
\t.padding-top-6   { padding-top: 6px  !important; }
\t.padding-top-7   { padding-top: 7px  !important; }
\t.padding-top-8   { padding-top: 8px  !important; }
\t.padding-top-9   { padding-top: 9px  !important; }
\t.padding-top-10  { padding-top: 10px !important; }
\t.padding-top-11  { padding-top: 11px !important; }
\t.padding-top-12  { padding-top: 12px !important; }
\t.padding-top-13  { padding-top: 13px !important; }
\t.padding-top-14  { padding-top: 14px !important; }
\t.padding-top-15  { padding-top: 15px !important; }
\t.padding-top-16  { padding-top: 16px !important; }
\t.padding-top-17  { padding-top: 17px !important; }
\t.padding-top-18  { padding-top: 18px !important; }
\t.padding-top-19  { padding-top: 19px !important; }
\t.padding-top-20  { padding-top: 20px !important; }
\t.padding-top-21  { padding-top: 21px !important; }
\t.padding-top-22  { padding-top: 22px !important; }
\t.padding-top-23  { padding-top: 23px !important; }
\t.padding-top-24  { padding-top: 24px !important; }
\t.padding-top-25  { padding-top: 25px !important; }
\t.padding-top-26  { padding-top: 26px !important; }
\t.padding-top-27  { padding-top: 27px !important; }
\t.padding-top-28  { padding-top: 28px !important; }
\t.padding-top-29  { padding-top: 29px !important; }
\t.padding-top-30  { padding-top: 30px !important; }
\t.padding-top-31  { padding-top: 31px !important; }
\t.padding-top-32  { padding-top: 32px !important; }
\t.padding-top-33  { padding-top: 33px !important; }
\t.padding-top-34  { padding-top: 34px !important; }
\t.padding-top-35  { padding-top: 35px !important; }
\t.padding-top-36  { padding-top: 36px !important; }
\t.padding-top-37  { padding-top: 37px !important; }
\t.padding-top-38  { padding-top: 38px !important; }
\t.padding-top-39  { padding-top: 39px !important; }
\t.padding-top-40  { padding-top: 40px !important; }
\t.padding-top-41  { padding-top: 41px !important; }
\t.padding-top-42  { padding-top: 42px !important; }
\t.padding-top-43  { padding-top: 43px !important; }
\t.padding-top-44  { padding-top: 44px !important; }
\t.padding-top-45  { padding-top: 45px !important; }
\t.padding-top-46  { padding-top: 46px !important; }
\t.padding-top-47  { padding-top: 47px !important; }
\t.padding-top-48  { padding-top: 48px !important; }
\t.padding-top-49  { padding-top: 49px !important; }
\t.padding-top-50  { padding-top: 50px !important; }
\t.padding-top-51  { padding-top: 51px !important; }
\t.padding-top-52  { padding-top: 52px !important; }
\t.padding-top-53  { padding-top: 53px !important; }
\t.padding-top-54  { padding-top: 54px !important; }
\t.padding-top-55  { padding-top: 55px !important; }
\t.padding-top-56  { padding-top: 56px !important; }
\t.padding-top-57  { padding-top: 57px !important; }
\t.padding-top-58  { padding-top: 58px !important; }
\t.padding-top-59  { padding-top: 59px !important; }
\t.padding-top-60  { padding-top: 60px !important; }
\t.padding-top-61  { padding-top: 61px !important; }
\t.padding-top-62  { padding-top: 62px !important; }
\t.padding-top-63  { padding-top: 63px !important; }
\t.padding-top-64  { padding-top: 64px !important; }
\t.padding-top-65  { padding-top: 65px !important; }
\t.padding-top-66  { padding-top: 66px !important; }
\t.padding-top-67  { padding-top: 67px !important; }
\t.padding-top-68  { padding-top: 68px !important; }
\t.padding-top-69  { padding-top: 69px !important; }
\t.padding-top-70  { padding-top: 70px !important; }
\t.padding-top-71  { padding-top: 71px !important; }
\t.padding-top-72  { padding-top: 72px !important; }
\t.padding-top-73  { padding-top: 73px !important; }
\t.padding-top-74  { padding-top: 74px !important; }
\t.padding-top-75  { padding-top: 75px !important; }
\t.padding-top-76  { padding-top: 76px !important; }
\t.padding-top-77  { padding-top: 77px !important; }
\t.padding-top-78  { padding-top: 78px !important; }
\t.padding-top-79  { padding-top: 79px !important; }
\t.padding-top-80  { padding-top: 80px !important; }
\t.padding-top-81  { padding-top: 81px !important; }
\t.padding-top-82  { padding-top: 82px !important; }
\t.padding-top-83  { padding-top: 83px !important; }
\t.padding-top-84  { padding-top: 84px !important; }
\t.padding-top-85  { padding-top: 85px !important; }
\t.padding-top-86  { padding-top: 86px !important; }
\t.padding-top-87  { padding-top: 87px !important; }
\t.padding-top-88  { padding-top: 88px !important; }
\t.padding-top-89  { padding-top: 89px !important; }
\t.padding-top-90  { padding-top: 90px !important; }
\t.padding-top-91  { padding-top: 91px !important; }
\t.padding-top-92  { padding-top: 92px !important; }
\t.padding-top-93  { padding-top: 93px !important; }
\t.padding-top-94  { padding-top: 94px !important; }
\t.padding-top-95  { padding-top: 95px !important; }
\t.padding-top-96  { padding-top: 96px !important; }
\t.padding-top-97  { padding-top: 97px !important; }
\t.padding-top-98  { padding-top: 98px !important; }
\t.padding-top-99  { padding-top: 99px !important; }
\t.padding-top-100 { padding-top: 100px !important; }

\t/* Padding Bottom */
\t.padding-bottom-0   { padding-bottom: 0px  !important; }
\t.padding-bottom-1   { padding-bottom: 1px  !important; }
\t.padding-bottom-2   { padding-bottom: 2px  !important; }
\t.padding-bottom-3   { padding-bottom: 3px  !important; }
\t.padding-bottom-4   { padding-bottom: 4px  !important; }
\t.padding-bottom-5   { padding-bottom: 5px  !important; }
\t.padding-bottom-6   { padding-bottom: 6px  !important; }
\t.padding-bottom-7   { padding-bottom: 7px  !important; }
\t.padding-bottom-8   { padding-bottom: 8px  !important; }
\t.padding-bottom-9   { padding-bottom: 9px  !important; }
\t.padding-bottom-10  { padding-bottom: 10px !important; }
\t.padding-bottom-11  { padding-bottom: 11px !important; }
\t.padding-bottom-12  { padding-bottom: 12px !important; }
\t.padding-bottom-13  { padding-bottom: 13px !important; }
\t.padding-bottom-14  { padding-bottom: 14px !important; }
\t.padding-bottom-15  { padding-bottom: 15px !important; }
\t.padding-bottom-16  { padding-bottom: 16px !important; }
\t.padding-bottom-17  { padding-bottom: 17px !important; }
\t.padding-bottom-18  { padding-bottom: 18px !important; }
\t.padding-bottom-19  { padding-bottom: 19px !important; }
\t.padding-bottom-20  { padding-bottom: 20px !important; }
\t.padding-bottom-21  { padding-bottom: 21px !important; }
\t.padding-bottom-22  { padding-bottom: 22px !important; }
\t.padding-bottom-23  { padding-bottom: 23px !important; }
\t.padding-bottom-24  { padding-bottom: 24px !important; }
\t.padding-bottom-25  { padding-bottom: 25px !important; }
\t.padding-bottom-26  { padding-bottom: 26px !important; }
\t.padding-bottom-27  { padding-bottom: 27px !important; }
\t.padding-bottom-28  { padding-bottom: 28px !important; }
\t.padding-bottom-29  { padding-bottom: 29px !important; }
\t.padding-bottom-30  { padding-bottom: 30px !important; }
\t.padding-bottom-31  { padding-bottom: 31px !important; }
\t.padding-bottom-32  { padding-bottom: 32px !important; }
\t.padding-bottom-33  { padding-bottom: 33px !important; }
\t.padding-bottom-34  { padding-bottom: 34px !important; }
\t.padding-bottom-35  { padding-bottom: 35px !important; }
\t.padding-bottom-36  { padding-bottom: 36px !important; }
\t.padding-bottom-37  { padding-bottom: 37px !important; }
\t.padding-bottom-38  { padding-bottom: 38px !important; }
\t.padding-bottom-39  { padding-bottom: 39px !important; }
\t.padding-bottom-40  { padding-bottom: 40px !important; }
\t.padding-bottom-41  { padding-bottom: 41px !important; }
\t.padding-bottom-42  { padding-bottom: 42px !important; }
\t.padding-bottom-43  { padding-bottom: 43px !important; }
\t.padding-bottom-44  { padding-bottom: 44px !important; }
\t.padding-bottom-45  { padding-bottom: 45px !important; }
\t.padding-bottom-46  { padding-bottom: 46px !important; }
\t.padding-bottom-47  { padding-bottom: 47px !important; }
\t.padding-bottom-48  { padding-bottom: 48px !important; }
\t.padding-bottom-49  { padding-bottom: 49px !important; }
\t.padding-bottom-50  { padding-bottom: 50px !important; }
\t.padding-bottom-51  { padding-bottom: 51px !important; }
\t.padding-bottom-52  { padding-bottom: 52px !important; }
\t.padding-bottom-53  { padding-bottom: 53px !important; }
\t.padding-bottom-54  { padding-bottom: 54px !important; }
\t.padding-bottom-55  { padding-bottom: 55px !important; }
\t.padding-bottom-56  { padding-bottom: 56px !important; }
\t.padding-bottom-57  { padding-bottom: 57px !important; }
\t.padding-bottom-58  { padding-bottom: 58px !important; }
\t.padding-bottom-59  { padding-bottom: 59px !important; }
\t.padding-bottom-60  { padding-bottom: 60px !important; }
\t.padding-bottom-61  { padding-bottom: 61px !important; }
\t.padding-bottom-62  { padding-bottom: 62px !important; }
\t.padding-bottom-63  { padding-bottom: 63px !important; }
\t.padding-bottom-64  { padding-bottom: 64px !important; }
\t.padding-bottom-65  { padding-bottom: 65px !important; }
\t.padding-bottom-66  { padding-bottom: 66px !important; }
\t.padding-bottom-67  { padding-bottom: 67px !important; }
\t.padding-bottom-68  { padding-bottom: 68px !important; }
\t.padding-bottom-69  { padding-bottom: 69px !important; }
\t.padding-bottom-70  { padding-bottom: 70px !important; }
\t.padding-bottom-71  { padding-bottom: 71px !important; }
\t.padding-bottom-72  { padding-bottom: 72px !important; }
\t.padding-bottom-73  { padding-bottom: 73px !important; }
\t.padding-bottom-74  { padding-bottom: 74px !important; }
\t.padding-bottom-75  { padding-bottom: 75px !important; }
\t.padding-bottom-76  { padding-bottom: 76px !important; }
\t.padding-bottom-77  { padding-bottom: 77px !important; }
\t.padding-bottom-78  { padding-bottom: 78px !important; }
\t.padding-bottom-79  { padding-bottom: 79px !important; }
\t.padding-bottom-80  { padding-bottom: 80px !important; }
\t.padding-bottom-81  { padding-bottom: 81px !important; }
\t.padding-bottom-82  { padding-bottom: 82px !important; }
\t.padding-bottom-83  { padding-bottom: 83px !important; }
\t.padding-bottom-84  { padding-bottom: 84px !important; }
\t.padding-bottom-85  { padding-bottom: 85px !important; }
\t.padding-bottom-86  { padding-bottom: 86px !important; }
\t.padding-bottom-87  { padding-bottom: 87px !important; }
\t.padding-bottom-88  { padding-bottom: 88px !important; }
\t.padding-bottom-89  { padding-bottom: 89px !important; }
\t.padding-bottom-90  { padding-bottom: 90px !important; }
\t.padding-bottom-91  { padding-bottom: 91px !important; }
\t.padding-bottom-92  { padding-bottom: 92px !important; }
\t.padding-bottom-93  { padding-bottom: 93px !important; }
\t.padding-bottom-94  { padding-bottom: 94px !important; }
\t.padding-bottom-95  { padding-bottom: 95px !important; }
\t.padding-bottom-96  { padding-bottom: 96px !important; }
\t.padding-bottom-97  { padding-bottom: 97px !important; }
\t.padding-bottom-98  { padding-bottom: 98px !important; }
\t.padding-bottom-99  { padding-bottom: 99px !important; }
\t.padding-bottom-100 { padding-bottom: 100px !important; }

\t/* Padding Right */
\t.padding-right-0  { padding-right: 0 !important; }
\t.padding-right-5  { padding-right: 5px !important; }
\t.padding-right-10 { padding-right: 10px !important; }
\t.padding-right-15 { padding-right: 15px !important; }
\t.padding-right-20 { padding-right: 20px !important; }
\t.padding-right-25 { padding-right: 25px !important; }
\t.padding-right-30 { padding-right: 30px !important; }
\t.padding-right-35 { padding-right: 35px !important; }
\t.padding-right-40 { padding-right: 40px !important; }
\t.padding-right-45 { padding-right: 45px !important; }
\t.padding-right-50 { padding-right: 50px !important; }
\t.padding-right-55 { padding-right: 55px !important; }
\t.padding-right-55 { padding-right: 55px !important; }
\t.padding-right-55 { padding-right: 55px !important; }
\t.padding-right-55 { padding-right: 55px !important; }
\t.padding-right-60 { padding-right: 60px !important; }
\t.padding-right-65 { padding-right: 65px !important; }
\t.padding-right-70 { padding-right: 70px !important; }
\t.padding-right-75 { padding-right: 75px !important; }
\t.padding-right-80 { padding-right: 80px !important; }
\t.padding-right-85 { padding-right: 85px !important; }
\t.padding-right-90 { padding-right: 90px !important; }
\t.padding-right-95 { padding-right: 95px !important; }
\t.padding-right-100 { padding-right: 100px !important; }

\t/* Padding Left */
\t.padding-left-0  { padding-left: 0 !important; }
\t.padding-left-5  { padding-left: 5px !important; }
\t.padding-left-10 { padding-left: 10px !important; }
\t.padding-left-15 { padding-left: 15px !important; }
\t.padding-left-20 { padding-left: 20px !important; }
\t.padding-left-25 { padding-left: 25px !important; }
\t.padding-left-30 { padding-left: 30px !important; }
\t.padding-left-35 { padding-left: 35px !important; }
\t.padding-left-40 { padding-left: 40px !important; }
\t.padding-left-45 { padding-left: 45px !important; }
\t.padding-left-50 { padding-left: 50px !important; }
\t.padding-left-55 { padding-left: 55px !important; }
\t.padding-left-55 { padding-left: 55px !important; }
\t.padding-left-55 { padding-left: 55px !important; }
\t.padding-left-55 { padding-left: 55px !important; }
\t.padding-left-60 { padding-left: 60px !important; }
\t.padding-left-65 { padding-left: 65px !important; }
\t.padding-left-70 { padding-left: 70px !important; }
\t.padding-left-75 { padding-left: 75px !important; }
\t.padding-left-80 { padding-left: 80px !important; }
\t.padding-left-85 { padding-left: 85px !important; }
\t.padding-left-90 { padding-left: 90px !important; }
\t.padding-left-95 { padding-left: 95px !important; }
\t.padding-left-100 { padding-left: 100px !important; }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("@charset \"UTF-8\";

/*
* Author: Vasterad
* URL: http://purethemes.net
*/

/* -------------------------------------------------------------- */
/* Table of Contents
-----------------------------------------------------------------

01. Import Section ----------------------------------------------

02. Layout Components -------------------------------------------
  # Forms Reset & Styles
  # Header
  # Header Notifications
  # User Menu
  # Navigation
  # Mega Menu
  # Sticky Header
  # Transparent Header
  # mmenu.js - mobile menu
  # Footer
  # Pagination
  # Sidebar Styles
  # Notify Box
  # Titlebar
  # Single Page Header
  # Blog Post
  # Contact Page

03. Listings Styles ---------------------------------------------
  # Full Width Page Layout
  # Job Listing - List Layout
  # Job Listing - Compact List Layout
  # Job Listing - Grid Layout
  # Tasks - List Layout
  # Tasks - Grid Layout
  # Freelancers - Grid Layout
  # Freelancers - List Layout
  # Browse Companies

04. User Interface Elements -------------------------------------
  # Buttons
  # Button with Sliding Icon
  # List Styles
  # Marks
  # Notification Boxes
  # Tables
  # Accordion
  # Tabs
  # Copy to clipboard
  # Share Buttons
  # Verified Badge
  # Star Rating
  # Leave Rating Stars
  # Ripple Effect
  # Input With Icon
  # Keywords Input
  # Clickable Tags
  # On/Off Switch
  # Radio Button
  # Checkbox
  # Custom Upload Button
  # Intro Banner
  # Category Boxes
  # Photo Box
  # Pricing Plans
  # Checkout Page
  # Icon Boxes
  # Testimonials
  # Text Banner
  # Counters
  # Countdown
  # Bidding Widget

05. Scripts Styles ----------------------------------------------
  # Slick Slider
  # Simlpebar.js (custom scrollbar)
  # Tippy.js Tooltips
  # Magnific Popup
  # Popup tabs
  # Boostrap Slider
  # Bootstrap-select
  # Snackbar
  # Google Autocomplete
  # Google Maps

06. Single Pages ------------------------------------------------
  # Single Job Page
  # Single Freelancer Profile

07. Dashboard ---------------------------------------------------
  # Dashboard Navigation
  # Dashboard Elements
  # Dashboard Messages

08. Others ------------------------------------------------------
  # Common Styles
  # Icons Cheatsheet Styles
  # Offsets

*/ 

/* -------------------------------------------------------------- */
/* 01. Import Section
----------------------------------------------------------------- */
@import url('bootstrap-grid.css');                     /* Default Reset, Responsive Grid*/
@import url('icons.css');                              /* Default Reset, Responsive Grid*/
@import url('https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&subset=latin-ext');


/* -------------------------------------------------------------- */
/*  02. Layout Components
----------------------------------------------------------------- */

/* ---------------------------------- */
/* Forms Reset & Styles
------------------------------------- */
input,
input[type=\"text\"],
input[type=\"password\"],
input[type=\"email\"],
input[type=\"number\"],
textarea,
select {
\theight: 48px;
\tline-height: 48px;
\tpadding: 0 20px;
\toutline: none;
\tfont-size: 16px;
\tcolor: #808080;
\tmargin: 0 0 16px 0;
\tmax-width: 100%;
\twidth: 100%;
\tbox-sizing: border-box;
\tdisplay: block;
\tbackground-color: #fff;
\tfont-weight: 500;
\topacity: 1;
\tborder-radius: 4px;
\tborder: none;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

select {
\tpadding: 15px 18px;
\tcursor: pointer;
}

input {
\t-webkit-transition: all 0.1s ease-in-out;
\t-moz-transition: all 0.1s ease-in-out;
\t-o-transition: all 0.1s ease-in-out;
\t-ms-transition: all 0.1s ease-in-out;
\ttransition: all 0.1s ease-in-out;
}

input:focus,
input[type=\"text\"]:focus,
input[type=\"password\"]:focus,
input[type=\"email\"]:focus,
input[type=\"number\"]:focus,
textarea:focus {
\tcolor: #808080;
\ttransition: box-shadow 0.2s !important;
\topacity: 1;
\tborder: none;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

input:-webkit-autofill:focus,
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px #fff inset !important;
    -webkit-text-fill-color: #808080 !important;
}

/* With Border */
input.with-border,
input[type=\"text\"].with-border,
input[type=\"password\"].with-border,
input[type=\"email\"].with-border,
input[type=\"number\"].with-border,
textarea.with-border,
select.with-border {
\tborder: 1px solid #e0e0e0;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
}
input.with-border:focus,
input[type=\"text\"].with-border:focus,
input[type=\"password\"].with-border:focus,
input[type=\"email\"].with-border:focus,
input[type=\"number\"].with-border:focus,
textarea.with-border:focus {
\tborder: 1px solid #e0e0e0;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.08);
}

input[type=\"submit\"] {
\tborder: none;
\tpadding: 11px 18px;
\twidth: auto;
}

input[type=\"checkbox\"] { display: inline; }

input[type=\"radio\"] {
\twidth: 15px;
\theight: 15px;
\tcursor: pointer;
\tbox-shadow: none;
}


/* Input Placeholder Color */
::placeholder {
\tcolor: #808080;
\topacity: 1;
}

textarea {
\theight: auto;
\tline-height: 27px;
\tpadding: 20px;
\tmin-height: 130px;
\ttransition: none !important;
\tmin-width: 100%;
}

label,
legend {
\tdisplay: block;
\tfont-weight: bold;
\tfont-size: 16px;
\tfont-weight: normal;
\tmargin-bottom: 8px;
}


label span,
legend span {
\tfont-weight: normal;
\tfont-size: 14px;
\tcolor: #444;
}

fieldset {
\tpadding: 0;
\tborder: none;
}

button {
\tborder: none;
\tmargin: 0;
\tpadding: 0;
\twidth: auto;
\toverflow: visible;
\tbackground: transparent;
\tcolor: inherit;
\tfont: inherit;
\tline-height: normal;
\tcursor: pointer;
}

a { color: #66676b; transition: 0.3s; }
a, button { outline: none !important; }
a:focus,
a:hover { text-decoration: none; color: #333;}
img { max-width: 100%; }


/* ---------------------------------- */
/* Header
------------------------------------- */
#logo { 
\tdisplay: inline-block;
\tborder-right: 1px solid #e0e0e0;
\theight: 100%;
\tvertical-align: top;
\tpadding-right: 35px;
\tmargin-right: 20px;
}

#logo img {
\theight: 42px;
\twidth: auto;
\ttop: 50%;
\tposition: relative;
\ttransform: translate3d(0,-50%,0);
}

#header {
\tposition: relative;
\tz-index: 999;
\tpadding: 0;
\tbox-shadow: 0 0 18px 0 rgba(0, 0, 0, 0.12);
\tfont-size: 16px;
\theight: 82px;
\tbackground-color: #fff;
}

#header .container,
#header .right-side,
#header .left-side { height: 100%; }

/* Full Width Header */
header.fullwidth .container {
  max-width: 100%;
  margin: 0;
  padding: 0 35px;
}

/* Boxed Styles*/
#header .container { position: relative; }

#header .left-side {
\tfloat: left;
\twidth: 100%;
\tdisplay: inline-block;
\tposition: relative;
\tflex: 1;
}

#header .right-side {
\tfloat: right;
\ttext-align: right;
\twidth: auto;
\tdisplay: inline-block;
\tposition: absolute;
\tright: 25px;
\tbackground-color: #fff;
\tflex: 1;
}

/* Full Width Styles */
.full-width #header .left-side {
\tfloat: left;
\twidth: 100%;
\tdisplay: inline-block;
\tposition: relative;
}

.full-width #header .right-side {
\tfloat: right;
\ttext-align: right;
\twidth: auto;
\tdisplay: inline-block;
\tposition: absolute;
\tright: 25px;
\tbackground-color: #fff;
}



/* Header Widget
------------------------------------- */
.header-widget {
\tdisplay: inline-block;
\theight: 100%;
\tborder-left: 1px solid #e0e0e0;
\tpadding: 0 30px;
\ttext-align: left;
\tfloat: left;
}

.fullwidth .header-widget:last-of-type {
\tpadding-right: 5px;
\tfloat: right;
\tborder-right: none;
}

.header-widget:last-of-type { padding-right: 0; margin-right: -5px; }
.fullwidth .header-widget:last-of-type { padding-right: 5px; margin-right: 0; }

/* Notification Avatar*/
.header-notifications-content .notification-avatar {
\theight: 42px;
\twidth: 42px;
\tmax-width: 42px;
\tdisplay: inline-block;
\tborder-radius: 50%;
\toverflow: hidden;
}

/* Sign In Button */
.header-widget .log-in-button {
\tpadding: 10px 0;
\tposition: relative;
\ttop: 50%;
\ttransform: translateY(-50%);
\ttransition: 0.3s;
\tcolor: #666;
\tdisplay: block;
\tmargin: 0 -3px;
}

.header-widget .log-in-button i {
\tfont-size: 18px;
\tline-height: 0;
\tposition: relative;
\ttop: 2px;
\tmargin-right: 4px;
\tmargin-left: -1px;
\tcolor: #777;
\ttransition: 0.3s;
}

.header-widget .log-in-button:hover,
.header-widget .log-in-button:hover i { color: #66676b; }

.transparent-header .header-widget .log-in-button,
.transparent-header .header-widget .log-in-button i { color: #fff; }

/* Sign In Button Media Queries */
@media (max-width: 768px) {
\t.header-widget .log-in-button span { display: none; }

\t.header-widget .log-in-button i {
\t\tfont-size: 20px;
\t\ttop: 3px;
\t}

\t.header-widget .log-in-button i,
\t.header-widget .log-in-button i:hover { color: #555; }

\t.header-widget .log-in-button {
\t\tbackground-color: #f0f0f0;
\t\tborder-radius: 4px;
\t    height: 46px;
\t    width: 46px;
\t    text-align: center;
\t}

\t.transparent-header .header-widget .log-in-button i,
\t.transparent-header .header-widget .log-in-button {
\t\tbackground-color: #fff;
\t\tcolor: #333;
\t}

}


/* ---------------------------------- */
/* Header Notifications
------------------------------------- */
.header-notifications {
\theight: 100%;
\tdisplay: inline-block;
\tpadding-right: 15px;
\tposition: relative;
}

.header-notifications:last-child { margin-right: -15px; }

.header-notifications-trigger,
.header-notifications-trigger a {
\tfont-size: 22px;
\tcolor: #333;
\tposition: relative;
\ttop: 55%;
\ttransform: translate3d(0,-50%,0);
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.header-notifications-trigger, 
\t.header-notifications-trigger a {
\t\theight: 40px;
\t}
\t.header-notifications.user-menu { top: -8px; } 
}
/* IE 11 Fixes - End */

.header-notifications-trigger span {
\tposition: absolute;
\tdisplay: inline-block;
\ttop: -15px;
\tmargin-left: -10px;
\tfont-weight: 700;
\theight: 19px;
\twidth: 19px;
\tline-height: 19px;
\ttext-align: center;
\tcolor: #fff;
\tfont-size: 11px;
\tbackground-color: #66676b;
\tborder-radius: 50%;
\tposition: relative;
}


/* Header User Menu Dropdown */
.header-notifications-dropdown {
\twidth: 360px;
\tborder-radius: 4px;
/*\tbox-shadow: 0px 0 8px 0px rgba(0,0,0,0.10);*/
\tbox-shadow: 0px 2px 12px 0px rgba(0,0,0,0.12);
\tbackground-color: #fff;
\tpadding: 0;
\tposition: absolute;
\ttop: calc(100% - 10px);
\tright: -15px;
\ttext-align: left;
\tz-index: 100;
\ttransform: scale(0.95);
\topacity: 0;
\tvisibility: hidden;
\ttransition: 0.3s;
\tpointer-events: none;
}

.header-notifications.active .header-notifications-dropdown {
\ttransform: scale(1);
\topacity: 1;
\tvisibility: visible;
\tpointer-events: all;
}

.header-notifications-dropdown:before {
\tcontent: \"\";
\tposition: absolute;
\tright: 43px;
\ttop: -6px;
\twidth: 0; 
\theight: 0; 
\tborder-left: 6px solid transparent;
\tborder-right: 6px solid transparent;
\tborder-bottom: 6px solid #d7d7d7;
\t
\t/* Arrow with shadow */
/*\ttop: 0;
\tright: 33px;
    border: 5px solid black;
    border-color: transparent transparent #fff #fff;
    transform-origin: 0 0;
    transform: rotate(135deg);
    box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, 0.05);*/
}

/* Headline */
.header-notifications-headline {
\tpadding: 17px 25px;
\tpadding-top: 18px;
\tline-height: 24px;
\tborder-bottom: 1px solid #e6e6e6;
}

.header-notifications-headline h4,
.header-notifications-headline span {
\tdisplay: inline-block;
}

button.mark-as-read {
\tfloat: right;
\tposition: relative;
\tborder-radius: 4px;
\theight: 32px;
\twidth: 32px;
\ttext-align: center;
\tline-height: 36px;
\ttop: -4px;
\tright: -8px;
\tcolor: #888;
\ttransition: 0.25s;
}

button.mark-as-read:hover {
\tbackground-color: #f2f2f2;
\tcolor: #888;
}

/* Content */
.header-notifications-content {
\tdisplay: block;
\twidth: 100%;
}

.header-notifications-scroll {
\tdisplay: block;
\toverflow: hidden;
\theight: auto;
}

.header-notifications-content ul {
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
}

.header-notifications-content ul li {
\tborder-bottom: 1px solid #e6e6e6;
\ttransition: 0.25s;
}

.header-notifications-content ul li:hover { background-color: #fafafa; }
.header-notifications-content ul li:hover .notification-icon { background-color: #eee; }
.header-notifications-content ul li:last-child { border-bottom: none; }

.header-notifications-content ul li a {
\tcolor: #666;
\tposition: relative;
\tpadding: 22px 25px;
\tdisplay: block;
}

.header-notifications-content p { margin: 0; padding: 0; }

.header-notifications-content ul li a {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: center;
}

.header-notifications-content .notification-icon,
.header-notifications-content .notification-text {
\tflex: 1; 
}

/* Notification Icon */
.header-notifications-content .notification-icon i { position: relative; }

.notification-icon,
.header-notifications-content .notification-icon {
\tfont-size: 24px;
\theight: 40px;
\twidth: 40px;
\tmax-width: 40px;
\tdisplay: inline-block;
\tbackground-color: #f2f2f2;
\tborder-radius: 4px;
\tline-height: 42px;
\ttext-align: center;
\tcolor: #a0a0a0;
\ttransition: 0.25s;
\tposition: relative;
}

/* Adjustments for some icons :( */
.notification-icon .icon-material-outline-autorenew { font-size: 22px; }
.notification-icon .icon-material-outline-gavel { font-size: 19px; top: -2px; left: 1px; }


/* Notification Avatar*/
.header-notifications-content .notification-avatar {
\theight: 42px;
\twidth: 42px;
\tmax-width: 42px;
\tdisplay: inline-block;
\tborder-radius: 50%;
\toverflow: visible;
\talign-self: flex-start;
}

.header-notifications-content .notification-avatar img{
    width: 100%;
    image-rendering: -webkit-optimize-contrast;
    border-radius: 50%;
}


/* Notification Texts */
.notification-text,
.header-notifications-content .notification-text {
\tpadding-left: 20px;
\tpadding-right: 5px; 
\tdisplay: inline-block;
\tline-height: 23px;
\tfont-size: 14.7px
}

.header-notifications-content .notification-msg-text {
\tdisplay: inline-block;
\tline-height: 23px;
\tfont-size: 14.7px;
\tmargin: 4px 0;
}

.notification-text strong,
.header-notifications-content .notification-text strong {
\tfont-weight: 600;
\tcolor: #333;
}

.notification-text span.color,
.header-notifications-content .notification-text span.color {
\tcolor: #66676b;
\tdisplay: inline-block;
}

.notification-text span.color {
\tdisplay: block;
}


/* Button */
a.header-notifications-button {
\tborder-radius: 0 0 4px 4px;
\tfont-weight: 600;
\tcolor: #fff;
\tfont-size: 14.7px;
\tpadding: 12px 16px;
\tbackground-color: #66676b;
\twidth: 100%;
\tdisplay: block;
\ttext-align: center;
\ttransition: 0.3s;
}

a.header-notifications-button i {
\tfont-size: 22px;
\tline-height: 0;
\ttop: 4px;
\tposition: relative;
\tmax-width: 0;
\tdisplay: inline-block;
\tmargin-left: 7px
}


/* ---------------------------------- */
/* User Menu
------------------------------------- */
.user-menu {
\tpadding: 0;
}

.header-notifications.user-menu {
\tmargin: 0 -5px;
}

.user-menu .header-notifications-trigger,
.user-menu .header-notifications-trigger a { top: 50%; }

.user-menu .header-notifications-dropdown {
\ttop: calc(100% - 8px);
\twidth: 290px;
\tright: -10px;
}

.user-menu .header-notifications-dropdown:before { right: 23px; }

/* User Status Dot */
.notification-avatar { position: relative; }

.status-icon,
.notification-avatar:after,
.user-avatar:after {
\tposition: absolute;
\tcontent: \"\";
\theight: 12px;
\twidth: 12px;
\tbackground-color: #c0c0c0;
\tbottom: 0;
\tright: 0;
\tdisplay: block;
\tborder: 2px solid #fff;
\tbox-shadow: 0 2px 3px rgba(0,0,0,0.3);
\tborder-radius: 50%;
}

.notification-avatar:after { width: 11px; height: 11px; }

/* Online */
.status-icon.status-online,
.status-online:after { background-color: #38b653; }

/* Offline */
.status-icon.status-offline,
.status-offline:after { background-color: #c0c0c0; }

/* Avatar */
.user-avatar {
\tdisplay: inline-block;
\tborder-radius: 50%;
\twidth: 42px;
\theight: 42px;
\tposition: relative;
}

.user-avatar img {
\twidth: 100%;
\tdisplay: inline-block;
\tborder-radius: 50%;
\timage-rendering: -webkit-optimize-contrast;
}


/* User Menu Small Nav */
ul.user-menu-small-nav {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
\tpadding: 20px 25px;
}

ul.user-menu-small-nav li {
\tmargin: 0;
\tpadding: 0;
}

ul.user-menu-small-nav li a {
\tdisplay: block;
\tpadding: 2px 0;
\tfont-size: 16px;
\tcolor: #666;
\ttransition: 0.3s;
}

ul.user-menu-small-nav li a i {
\tfont-size: 16px;
\tposition: relative;
\ttop: 1px;
\tmargin-right: 2px;
\tcolor: #666;
\t-webkit-font-smoothing: antialiased;
\ttransition: 0.3s;
}


ul.user-menu-small-nav li a:hover,
ul.user-menu-small-nav li a:hover i { color: #66676b; }


/* User Status Section*/
.user-status {
\tpadding: 25px;
\tborder-bottom: 1px solid #e6e6e6;
}

/* User Menu - Details */
.user-details {
\tdisplay: flex;
}

.user-name {
\tfont-weight: 500;
\tcolor: #333;
\tline-height: 20px;
\tpadding: 2px 0 0 15px;
}

.user-details span {
\tdisplay: block;
\tfont-size: 14.7px;
\tcolor: #888;
\tfont-weight: 500;
}


/* User Status Switch */
.status-switch {
\tbackground-color: #eee;
\twidth: 100%;
\tdisplay: block;
\tborder-radius: 4px;
\theight: 36px;
\tpadding: 0;
\tposition: relative;
\tzoom: 1;
\tmargin-top: 20px;
}

.status-switch:before, 
.status-switch:after {
\tcontent: \" \";
\tdisplay: table;
}

.status-switch label {
\tfloat: left;
\twidth: 50%;
\tposition: relative;
\tz-index: 2;
\tline-height: 36px;
\tcursor: pointer;
\tcolor: #888;
\tfont-size: 14.7px;
\ttext-align: center;
\ttransition: 0.3s;
\tmargin: 0;
}

.status-switch span.status-indicator {
\tposition: relative;
\tz-index: 1;
\ttop: 0;
\tleft: 0;
\twidth: 50%;
\theight: 100%;
\tdisplay: block;
\tborder-radius: 4px 0 0 4px;
\tbackground-color: #38b653;
\tbox-shadow: 0 0 5px 1px rgba(56,182,83,0.3);
\ttransition: all 0.4s cubic-bezier(0.3,-.41,.19,1.3), background-color 0.2s linear;
}

.status-switch span.right {
\tleft: 50%;
\tborder-radius: 0 4px 4px 0;
\tbackground-color: #333;
\tbox-shadow: none;
\tcolor: #fff;
}

.status-switch label.current-status {
\tcolor: #fff;
}


/* ---------------------------------- */
/* Navigation
------------------------------------- */
#navigation {
\tposition: relative;
\tdisplay: inline-block;
\tmargin-top: 22px;
}

#navigation ul {
\tlist-style: none;
\tposition: relative;
\tfloat: left;
\tmargin: 0;
\tpadding: 0;
}

#navigation ul a {
\tdisplay: block;
\ttext-decoration: none;
\tpadding: 5px 0;
}

#navigation ul li {
\tposition: relative;
\tfloat: left;
\tmargin: 0;
\tpadding: 0
}

#navigation ul li ul {
\topacity: 0;
\tvisibility: hidden;
\tposition: absolute;
\ttop: 100%;
\tleft: 9px;
\tpadding: 0;
\tz-index: 99999;
}

#navigation ul ul li { float: none; }

#navigation ul ul ul {
\ttop: 0;
\tleft: 100%;
\tmargin: 0 0 0 15px;
}

#navigation ul ul {
\tmargin: 0;
}

#navigation ul ul ul { pointer-events: none; }
#navigation ul ul li:hover > ul { pointer-events: all; }


#navigation ul ul:before {
\tcontent: \"\";
\tposition: absolute;
\tleft: 0;
\ttop: -10px;
\tbackground: rgba(255,255,255,0);
\twidth: 100%;
\theight: 10px;
}

#navigation ul ul ul:after {
\tcontent: \"\";
\tposition: absolute;
\twidth: 15px;
\theight: 100%;
\tleft: -15px;
\ttop: 0;
\topacity: 0;
}

#navigation ul li:hover > ul {
\topacity: 1;
\tvisibility: visible;
\tpointer-events: all;
}

/* Indicator Arrow */
#navigation ul li a:after,
#navigation ul ul li a:after {
\tfont-family: \"Material-Icons\";
\tcontent: '\\e914';
\topacity: 1;
\tfont-size: 16px;
\ttransition: 0.2s;
\topacity: 1;
\tline-height: 17px;
\twidth: 17px;
\theight: 17px;
\tbackground-color: #f0f0f0;
\tcolor: #a8a8a8;
\tdisplay: inline-block;
\tborder-radius: 3px;
\tmargin-left: 7px;
\ttext-indent: 0;
\ttop: 1px;
\tposition: relative;
}


#navigation ul ul.dropdown-nav ul.dropdown-nav li:hover a:after,
#navigation ul ul.dropdown-nav li:hover a:after,
#navigation ul li:hover a:after {
\tcolor: #66676b;
\tbackground: rgba(102,103,107,0.13);
\topacity: 0.8;
}

#navigation ul ul.dropdown-nav ul.dropdown-nav li a:after {
\tbackground-color: #f0f0f0;
\tcolor: #a8a8a8;
\topacity: 1;
}


/* Dropdown Indicator */
#navigation ul ul.dropdown-nav ul.dropdown-nav li:hover a:after,
#navigation ul ul.dropdown-nav li:hover a:after {
\tcolor: #fff !important;
\tbackground-color: #66676b;
\topacity: 1;
}

#navigation ul ul.dropdown-nav ul.dropdown-nav li a:after,
#navigation ul ul.dropdown-nav li a:after {
\tcontent: '\\e917';
\tposition: absolute;
\tleft: auto;
\tright: 20px;
\ttop: 6px;
\tbackground-color: rgba(255,255,255,0.1);
\tcolor: #bbb;
\topacity: 1;
}

/* Current Indicator */
#navigation ul li a.current { color: #66676b; }
#navigation ul li a.current:after {
\tcolor: #66676b;
\tbackground: rgba(102,103,107,0.13);
\topacity: 0.8;
}

#navigation ul li a:only-child:after,
#navigation ul ul li a:only-child:after { content: ''; display: none; }

#navigation ul ul li:hover a:after {
\topacity: 1;
\ttransform: translateX(0);
}

#navigation ul li {
\ttransition: all 0.25s;
\tmargin: 0 5px;
\tborder-radius: 4px;
}

#navigation ul li a,
#navigation ul ul li a {
\tcolor: #666;
\tcursor: pointer; 
}

#navigation ul a {
\tline-height: 23px;
\tpadding: 7px 9px;
\tborder-right: 4px;
}

#navigation ul li:hover a { color: #66676b; }


/* Dropdown Styles
------------------------------------- */
#navigation ul ul {
\tbackground-color: #303030;
\tbox-shadow: 0px 2px 12px 0px rgba(0,0,0,0.12);
\tborder-radius: 4px;
}

#navigation ul ul li { border-radius: 4px; }
#navigation ul ul li:last-child { border-bottom: none; }

#navigation ul li:hover ul a,
#navigation ul ul a {
\tpadding: 4px 40px 4px 15px !important;
\tline-height: 22px !important;
}

#navigation ul li:hover ul a:only-child ,
#navigation ul a:only-child { 
\tpadding: 4px 15px 4px 15px !important;
}

#navigation ul ul:after {
\tcontent: \"\";
\tposition: absolute;
\tleft: 25px;
\ttop: -5px;
\twidth: 0; 
\theight: 0; 
\tborder-left: 5px solid transparent;
\tborder-right: 5px solid transparent;
\tborder-bottom: 5px solid #303030;
}

body #navigation ul ul {
\tpadding: 14px 0;
\tbox-sizing: border-box;
\tmargin-top: 12px;
}

body #navigation ul ul ul { margin-top: 0; }

#navigation ul ul:before {
\t content: \".\";
\t position: absolute;
\t width: 100%;
\t height: 12px;
\t top: -12px;
\t opacity: 0;
\t opacity: 0;
}

#navigation ul ul ul:before {
    width: calc(100% + 15px);
    left: -15px;
}

#navigation ul ul li { width: 208px; }

#navigation ul ul li:hover {
\tborder-radius: 0;
}

#navigation ul ul li:first-child { border-radius: 4px 4px 0 0; }
#navigation ul ul li:last-child { border-radius: 0 0 4px 4px; }

#navigation ul ul {
\topacity: 0;
\tvisibility: hidden;
\ttransition: all 0.25s;
\ttransform: translate3d(0,15px,0);
}

#navigation ul ul ul { transform: translate3d(15px,0,0); }

#navigation ul li ul { z-index: 10; }
#navigation ul li:hover ul { z-index: 20; }

#navigation ul li:hover > ul {
\topacity: 1;
\tvisibility: visible;
\ttransform: translate3d(0,0,0);
}

#navigation ul ul li {
\tmargin: 0;
\tpadding: 0 6px;
\tborder-radius: 0;
\tfont-size: 15.7px;
}

#navigation ul ul.dropdown-nav ul.dropdown-nav ul.dropdown-nav li a,
#navigation ul ul.dropdown-nav ul.dropdown-nav li a,
#navigation ul ul.dropdown-nav li a {
\ttransition: 0.3s;
\tcolor: #aaa;
}

#navigation ul ul.dropdown-nav ul.dropdown-nav ul.dropdown-nav li:hover a,
#navigation ul ul.dropdown-nav ul.dropdown-nav li:hover a,
#navigation ul ul.dropdown-nav li:hover a {
\tcolor: #fff;
}


/* ---------------------------------- */
/* Mega Menu
------------------------------------- */
.mega-menu {
  opacity: 0;
  visibility: hidden;
  transition: all 0.25s;
  position: absolute;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.12);
  border-radius: 4px;
  font-size: 15px;
  display: flex;
  top: 100%;
  left: 0;
  padding: 20px 0;
  box-sizing: border-box;
  font-size: 14px;
  margin-top: -10px;
  background-color: #fff;
  width: 200px;
  z-index: 99;
  transform: translate3d(-42%,24px,0);
}

.mega-menu:before {
  content: \"\";
  position: absolute;
  top: -12px;
  left: 0;
  display: block;
  width: 100%;
  height: 12px;
  opacity: 0;
}

#navigation ul li .mega-menu ul { 
  opacity: 0;
  visibility: hidden;
  transform: translate3d(0,0,0);
  position: relative;
  display: inline-block;
  flex: 1;
  padding: 0;
  margin: 0;
  box-shadow: none;
  border-radius: 0;
  top: auto;
  left: auto;
  background-color: transparent;
}

#navigation ul li:hover .mega-menu {
  opacity: 1;
  visibility: visible;
  transform: translate3d(-42%,12px,0);
}

#navigation ul li:hover .mega-menu ul {
  opacity: 1;
  visibility: visible;
}


#navigation .mega-menu ul,
#navigation .mega-menu ul li {
  width: 100%;
}

.mega-menu.two-columns    { width: 429px;}
.mega-menu.three-columns  { width: 643px;}
.mega-menu.four-columns   { width: 857px;}

#navigation ul .mega-menu ul a {
  color: #bbb;
  padding: 0 !important;
  display: block;
  margin-left: 0;
  -wekkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

#navigation ul li:hover .mega-menu ul a, 
#navigation ul .mega-menu ul a {
\t padding: 6px 0 !important;
\t line-height: 22px !important;
\t transform: translate3d(0,0,0) !important;
}

#navigation .mega-menu ul li {
  padding: 0 30px;
}

#navigation ul li a i {
  font-size: 14px;
  position: relative;
  top: 0;
  padding-right: 5px;
}

.mega-menu-section {
  display: inline-block;
  float: left;
  width: 214px;
  padding: 0;
  border-right: 1px solid #e9e9e9;
}

.mega-menu .mega-menu-section:last-child { border: none; }

.mega-menu-headline {
  color: #222;
  opacity: 1 !important;
  font-weight: 600;
  display: block;
  padding: 8px 30px !important;
  letter-spacing: 0;
  font-size: 14px;
  line-height: 21px;
}

/* Some mega menu styles for mobile nav */
.mobile-styles .mm-listview { margin: 0px -20px !important; }
.mobile-styles .mm-listview .mega-menu-headline { color: #fff; padding: 15px 20px !important; background: #222 !important; }
.mobile-styles .mm-listview li a i { padding-right: 5px; }
.mobile-styles.mm-panel:before { height: 10px !important; }



/* ---------------------------------- */
/* Sticky Header
------------------------------------- */
#header-container {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1000;
}

#wrapper.wrapper-with-transparent-header #header .right-side { background-color: transparent; }
#header { transition: background 0.3s; }
#wrapper { padding-top: 82px; }
#wrapper.wrapper-with-transparent-header { padding-top: 0 !important;}

@media (max-width: 1099px) {
  #wrapper { padding-top: 0 !important; }
  #header-container { position: relative; }
  #header-container.transparent-header { position: absolute; }
}


/* ---------------------------------- */
/* Transparent Header
------------------------------------- */
#header-container.transparent-header {
\tposition: absolute;
\twidth: 100%;
}

.transparent-header-spacer { height: 82px; }

.transparent-header #header {
\tbackground-color: transparent;
\tbox-shadow: none;
\tborder-bottom: 1px solid rgba(255,255,255,0.2);
}

.transparent-header #header .right-side { background-color: transparent; }

.transparent-header #logo,
.transparent-header #header .right-side .header-widget { border-color: rgba(255,255,255,0.2); }
.transparent-header #header .right-side .header-widget:first-of-type { border-right-color: transparent; }
.transparent-header #header .right-side .header-widget:last-of-type { border-color: rgba(255,255,255,0.2); }

body .transparent-header #navigation > ul li a,
.transparent-header .header-notifications-trigger,
.transparent-header .header-notifications-trigger a { color: #fff; }

body .transparent-header #navigation > ul ul li a { color: #aaa; }

.transparent-header .header-notifications-dropdown:before { border-bottom-color: #fff; }

.transparent-header .mmenu-trigger { background-color: #fff; }

.transparent-header #navigation > ul li a:after {
\tbackground-color: rgba(255,255,255,0.15);
\tcolor: rgba(255,255,255,0.8);
\topacity: 1;
\ttransition: 0.3s;
}

.transparent-header #navigation > ul li:hover ul li:hover a:after,
.transparent-header #navigation > ul li:hover a:after,
.transparent-header #navigation > ul li a.current:after {
    color: #fff;
    background: #66676b;
}

.transparent-header #navigation > ul li:hover ul a:after,
.transparent-header #navigation > ul ul li a:after {
    background-color: rgba(255,255,255,0.1);
    color: #bbb;
}

/* ---------------------------------- */
/* mmenu.js - mobile menu
------------------------------------- */
.mm-hidden { display: none!important }

.mm-wrapper {
    overflow-x: hidden;
    position: relative
}

.mm-menu {
    box-sizing: border-box;
    background: inherit;
    display: block;
    padding: 0;
    margin: 0;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 0
}

.mm-panels,
.mm-panels>.mm-panel {
    background: inherit;
    border-color: inherit;
    box-sizing: border-box;
    margin: 0;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 0
}

.mm-panels {
    overflow: hidden
}

.mm-panel {
    -webkit-transform: translate(100%, 0);
    -ms-transform: translate(100%, 0);
    transform: translate(100%, 0);
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    -webkit-transition: -webkit-transform .4s ease;
    transition: -webkit-transform .4s ease;
    transition: transform .4s ease;
    transition: transform .4s ease, -webkit-transform .4s ease;
    -webkit-transform-origin: top left;
    -ms-transform-origin: top left;
    transform-origin: top left
}

.mm-panel.mm-opened {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.mm-panel.mm-subopened {
    -webkit-transform: translate(-30%, 0);
    -ms-transform: translate(-30%, 0);
    transform: translate(-30%, 0);
    -webkit-transform: translate3d(-30%, 0, 0);
    transform: translate3d(-30%, 0, 0)
}

.mm-panel.mm-highest {
    z-index: 1
}

.mm-panel.mm-noanimation {
    -webkit-transition: none!important;
    transition: none!important
}

.mm-panel.mm-noanimation.mm-subopened {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.mm-panels>.mm-panel {
    -webkit-overflow-scrolling: touch;
    overflow: scroll;
    overflow-x: hidden;
    overflow-y: auto;
    padding: 0 20px
}

.mm-panels>.mm-panel.mm-hasnavbar {
    padding-top: 40px
}

.mm-panels>.mm-panel:not(.mm-hidden) {
    display: block
}

.mm-panels>.mm-panel:after,
.mm-panels>.mm-panel:before {
    content: '';
    display: block;
    height: 20px
}

.mm-vertical .mm-panel {
    -webkit-transform: none!important;
    -ms-transform: none!important;
    transform: none!important
}

.mm-listview .mm-vertical .mm-panel,
.mm-vertical .mm-listview .mm-panel {
    display: none;
    padding: 10px 0 10px 10px
}

.mm-listview .mm-vertical .mm-panel .mm-listview>li:last-child:after,
.mm-vertical .mm-listview .mm-panel .mm-listview>li:last-child:after {
    border-color: transparent
}

.mm-vertical li.mm-opened>.mm-panel,
li.mm-vertical.mm-opened>.mm-panel {
    display: block
}

.mm-listview>li.mm-vertical>.mm-next,
.mm-vertical .mm-listview>li>.mm-next {
    box-sizing: border-box;
    height: 40px;
    bottom: auto
}

.mm-listview>li.mm-vertical.mm-opened>.mm-next:after,
.mm-vertical .mm-listview>li.mm-opened>.mm-next:after {
    -webkit-transform: rotate(225deg);
    -ms-transform: rotate(225deg);
    transform: rotate(225deg);
    right: 19px
}

.mm-btn {
    box-sizing: border-box;
    width: 40px;
    height: 50px;
    position: absolute;
    top: 0;
    z-index: 1
}

.mm-clear:after,
.mm-clear:before,
.mm-close:after,
.mm-close:before {
    content: '';
    border: 2px solid transparent;
    display: block;
    width: 5px;
    height: 5px;
    margin: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg)
}

.mm-clear:before,
.mm-close:before {
    border-right: none;
    border-bottom: none;
    right: 18px
}

.mm-clear:after,
.mm-close:after {
    border-left: none;
    border-top: none;
    right: 25px
}

.mm-next:after,
.mm-prev:before {
    content: '';
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    display: block;
    width: 8px;
    height: 8px;
    margin: auto;
    position: absolute;
    top: 0;
    bottom: 0
}

.mm-prev:before {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    left: 23px;
    right: auto
}

.mm-next:after {
    -webkit-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    transform: rotate(135deg);
    right: 23px;
    left: auto
}

.mm-navbar {
    border-bottom: 1px solid;
    border-color: inherit;
    text-align: center;
    line-height: 30px;
    height: 50px;
    padding: 0 40px;
    margin: 0;
    position: absolute;
    top: 0;
    left: 0;
    right: 0
}

.mm-navbar>* {
    display: block;
    padding: 10px 0
}

.mm-navbar a,
.mm-navbar a:hover {
    text-decoration: none
}

.mm-navbar .mm-title {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

.mm-navbar .mm-btn:first-child {
    left: 0
}

.mm-navbar .mm-btn:last-child {
    text-align: right;
    right: 0
}

.mm-panel .mm-navbar {
    display: none
}

.mm-panel.mm-hasnavbar .mm-navbar {
    display: block;
    background-color: #262626;
}

.mm-listview,
.mm-listview>li {
    list-style: none;
    display: block;
    padding: 0;
    margin: 0
}

.mm-listview {
    font: inherit;
    font-size: 14px;
    line-height: 20px
}

.mm-listview a,
.mm-listview a:hover {
    text-decoration: none
}

.mm-listview>li {
    position: relative
}

.mm-listview>li,
.mm-listview>li .mm-next,
.mm-listview>li .mm-next:before,
.mm-listview>li:after {
    border-color: inherit
}

.mm-listview>li {
    border-bottom: 1px solid #404040;
}

.mm-listview>li>a,
.mm-listview>li>span {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    color: inherit;
    display: block;
    padding: 14px 10px 14px 20px;
    margin: 0;
}

.mm-listview>li:not(.mm-divider):after {
    content: '';
    border-bottom-width: 1px;
    border-bottom-style: solid;
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    display: none;
}

.mm-listview>li:not(.mm-divider):after {
    left: 20px
}

.mm-listview .mm-next {
    background: rgba(3, 2, 1, 0);
    width: 50px;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 2
}

.mm-listview .mm-next:before {
    content: '';
    border-left-width: 1px;
    border-left-style: solid;
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0
}

.mm-listview .mm-next+a,
.mm-listview .mm-next+span {
    margin-right: 50px
}

.mm-listview .mm-next.mm-fullsubopen {
    width: 100%
}

.mm-listview .mm-next.mm-fullsubopen:before {
    border-left: none
}

.mm-listview .mm-next.mm-fullsubopen+a,
.mm-listview .mm-next.mm-fullsubopen+span {
    padding-right: 50px;
    margin-right: 0
}

.mm-panels>.mm-panel>.mm-listview {
    margin: 20px -20px
}

.mm-panels>.mm-panel>.mm-listview:first-child,
.mm-panels>.mm-panel>.mm-navbar+.mm-listview {
    margin-top: -10px;
}

.mm-menu {
    background: #2a2a2a;
    border-color: rgba(255,255,255,0.1);
    color: #fff;
}

.mm-menu .mm-navbar a,
.mm-menu .mm-navbar>* {
    color: #fff;
    font-weight: 600;
    font-size: 16px;
}

.mm-menu .mm-btn:after,
.mm-menu .mm-btn:before {
    border-color: rgba(255,255,255,0.8);
}

.mm-menu .mm-listview {
    border-color: #2a2a2a
}

.mm-menu .mm-listview>li .mm-next:after {
    border-color: rgba(255,255,255,0.8);
}

.mm-menu .mm-listview>li a:not(.mm-next) {
    -webkit-tap-highlight-color: rgba(255, 255, 255, .5);
    tap-highlight-color: rgba(255, 255, 255, .5)
}

.mm-menu .mm-listview>li.mm-selected>a:not(.mm-next),
.mm-menu .mm-listview>li.mm-selected>span {
    background: rgba(255, 255, 255, .05)
}

.mm-menu .mm-listview>li { transition: 0.2s; }
.mm-menu .mm-listview>li:hover {
    background: rgba(255, 255, 255, .03)
}

.mm-menu .mm-listview>li.mm-opened.mm-vertical>.mm-panel,
.mm-menu .mm-listview>li.mm-opened.mm-vertical>a.mm-next,
.mm-menu.mm-vertical .mm-listview>li.mm-opened>.mm-panel,
.mm-menu.mm-vertical .mm-listview>li.mm-opened>a.mm-next {
    background: rgba(0, 0, 0, .05)
}

.mm-menu .mm-divider {
    background: rgba(0, 0, 0, .05)
}

.mm-page {
    box-sizing: border-box;
    position: relative
}

.mm-slideout {
    -webkit-transition: -webkit-transform .4s ease;
    transition: -webkit-transform .4s ease;
    transition: transform .4s ease;
    transition: transform .4s ease, -webkit-transform .4s ease;
    z-index: 1
}

html.mm-opened {
    overflow-x: hidden;
    position: relative
}

html.mm-blocking {
    overflow: hidden
}

html.mm-blocking body {
    overflow: hidden
}

html.mm-background .mm-page {
    background: inherit
}

#mm-blocker {
    background: rgba(3, 2, 1, 0);
    display: none;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2
}

html.mm-blocking #mm-blocker {
    display: block
}

.mm-menu.mm-offcanvas {
    z-index: 0;
    display: none;
    position: fixed
}

.mm-menu.mm-offcanvas.mm-opened {
    display: block
}

.mm-menu.mm-offcanvas.mm-no-csstransforms.mm-opened {
    z-index: 10
}

.mm-menu.mm-offcanvas {
    width: 80%;
    min-width: 140px;
    max-width: 440px
}

html.mm-opening .mm-menu.mm-opened~.mm-slideout {
    -webkit-transform: translate(80%, 0);
    -ms-transform: translate(80%, 0);
    transform: translate(80%, 0);
    -webkit-transform: translate3d(80%, 0, 0);
    transform: translate3d(80%, 0, 0)
}

@media all and (max-width:175px) {
    html.mm-opening .mm-menu.mm-opened~.mm-slideout {
        -webkit-transform: translate(140px, 0);
        -ms-transform: translate(140px, 0);
        transform: translate(140px, 0);
        -webkit-transform: translate3d(140px, 0, 0);
        transform: translate3d(140px, 0, 0)
    }
}

@media all and (min-width:550px) {
    html.mm-opening .mm-menu.mm-opened~.mm-slideout {
        -webkit-transform: translate(440px, 0);
        -ms-transform: translate(440px, 0);
        transform: translate(440px, 0);
        -webkit-transform: translate3d(440px, 0, 0);
        transform: translate3d(440px, 0, 0)
    }
}

.mm-sronly {
    border: 0!important;
    clip: rect(1px, 1px, 1px, 1px)!important;
    -webkit-clip-path: inset(50%)!important;
    clip-path: inset(50%)!important;
    white-space: nowrap!important;
    width: 1px!important;
    height: 1px!important;
    padding: 0!important;
    overflow: hidden!important;
    position: absolute!important
}

em.mm-counter {
    font: inherit;
    font-size: 14px;
    font-style: normal;
    text-indent: 0;
    line-height: 20px;
    display: block;
    margin-top: -10px;
    position: absolute;
    right: 45px;
    top: 50%
}

em.mm-counter+a.mm-next {
    width: 90px
}

em.mm-counter+a.mm-next+a,
em.mm-counter+a.mm-next+span {
    margin-right: 90px
}

em.mm-counter+a.mm-fullsubopen {
    padding-left: 0
}

em.mm-counter+a.mm-fullsubopen+a,
em.mm-counter+a.mm-fullsubopen+span {
    padding-right: 90px
}

.mm-listview em.mm-counter+.mm-next.mm-fullsubopen+a,
.mm-listview em.mm-counter+.mm-next.mm-fullsubopen+span {
    padding-right: 90px;
}

.mm-vertical>.mm-counter {
    top: 12px;
    margin-top: 0
}

.mm-vertical.mm-spacer>.mm-counter {
    margin-top: 40px
}

.mm-nosubresults>.mm-counter {
    display: none
}

.mm-menu em.mm-counter {
    background-color: rgba(0,0,0,0.3);
    height: 20px;
    width: 20px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
\tline-height: 21px;
    font-size: 10px;
    font-weight: 600;
}

.mm-menu em.mm-counter {
\tbackground-color: #66676b;
}

/* Trigger Styles */
.mmenu-trigger {
    height: 46px;
    width: 46px;
    display: none;
    position: relative;
    margin: 0;
    background-color: #eee;
    border-radius: 4px;
    cursor: pointer;
}

/* Hamburger Icon */
.hamburger {
    padding: 0;
    top: 16px;
    left: 12px;
    transform: scale(0.67);
    -moz-transform: scale(0.70) translateY(4px);
    position: relative;
    display: inline-block;
    cursor: pointer;
    transition-property: opacity, filter;
    transition-duration: 0.15s;
    transition-timing-function: linear;
    font: inherit;
    color: inherit;
    text-transform: none;
    background-color: transparent;
    border: 0;
    margin: 0;
    overflow: visible;
}

.hamburger-box {
    position: relative;
}

.hamburger-inner {
    display: block;
    top: 50%;
    margin-top: -2px; }

.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
    width: 33px;
    height: 4px;
    background-color: #555;
    border-radius: 4px;
    position: absolute;
    transition-property: transform;
    transition-duration: 0.15s;
    transition-timing-function: ease; }

.hamburger-inner::before, .hamburger-inner::after {
    content: \"\";
    display: block;
}

.hamburger-inner::before { top: -10px; }
.hamburger-inner::after { bottom: -10px; }

/* Animation */
.hamburger--collapse .hamburger-inner {
    top: auto;
    bottom: 0;
    transition-duration: 0.13s;
    transition-delay: 0.13s;
    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19); }

.hamburger--collapse .hamburger-inner::after {
    top: -20px;
    transition: top 0.2s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), opacity 0.1s linear; }

.hamburger--collapse .hamburger-inner::before {
    transition: top 0.12s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19); }

.hamburger--collapse.is-active .hamburger-inner {
    transform: translate3d(0, -10px, 0) rotate(-45deg);
    transition-delay: 0.22s;
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1); }

.hamburger--collapse.is-active .hamburger-inner::after {
    top: 0;
    opacity: 0;
    transition: top 0.2s cubic-bezier(0.33333, 0, 0.66667, 0.33333), opacity 0.1s 0.22s linear; }

.hamburger--collapse.is-active .hamburger-inner::before {
    top: 0;
    transform: rotate(-90deg);
    transition: top 0.1s 0.16s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.25s cubic-bezier(0.215, 0.61, 0.355, 1); }

.mmenu-trigger { display: none; }


/* Media Queries Menu */
@media (max-width: 1099px) {

\t/* Header Responsive Styles */
\t#responsive { display: none; }
\t.mmenu-trigger { display: inline-block !important; }

\t#header { height: 76px; }

\t#logo { border: none; }
\t#logo img { border: none; max-width: 100px; height: auto; }
\t
\theader.fullwidth .container {
\t\tpadding: 0 20px;
\t}

\t.header-widget { float: left; }

\t.fullwidth .header-widget:last-of-type,
\t.header-widget:last-of-type {
\t\tpadding-right: 25px;
\t\tfloat: left;
\t}

\t#header .right-side {
\t\tposition: absolute;
\t\twidth: auto;
\t\tbackground-color: #fff;
\t\ttext-align: left;
\t}

\t.mmenu-trigger {
\t\tmargin: 0 -5px 0 23px;
\t\ttop: 15px;
\t\tfloat: right;
\t}

\t#header .right-side .header-widget {
\t\tborder-right: 1px solid #e0e0e0;
\t\tmargin-right: -1px;
\t}

\t.header-widget { padding: 0 25px; }
\t.header-notifications:first-child { margin-right: -5px; }
\t
\t#header-container.cloned { display: none; }
}

@media (max-width: 768px) {
\t.header-notifications {
\t\tposition: initial;
\t}

\t.header-notifications-dropdown:before { display: none; }
\t.user-menu .header-notifications-dropdown,
\t.header-notifications-dropdown {
\t\twidth: calc(100vw - 45px);
\t\tright: -10px;
\t\ttop: calc(100% + 15px)
\t}

}

@media (max-width: 480px) {
\t.hide-on-mobile { display: none; }
}


/* ---------------------------------- */
/* Footer
------------------------------------- */
#footer {
\tbackground-color: #303030;
\tcolor: #c0c0c0;
}

#footer p { line-height: 26px; }

.footer-top-section {
\tborder-bottom: 1px solid #484848;
}

.footer-top-section .footer-logo img { max-height: 46px; }

.footer-rows-container { 
\tdisplay: block;
\theight: 96px;
\tposition: relative;
\tz-index: 100;
}

.footer-row {
\tdisplay: inline-block;
\tpadding: 0 40px;
\tborder-right: 1px solid #484848;
\tborder-left: 1px solid #484848;
\tfloat: left;
\theight: 100%;
}

.footer-row-inner {
\tposition: relative;
\ttop: 50%;
\ttransform: translateY(-50%);
}

.footer-row-inner.footer-logo {
\tposition: relative;
\ttop: auto;
\ttransform: translateY(0);
\ttop: 50%;
\tposition: relative;
\theight: 46px;
 }

.footer-row-inner.footer-logo img {
\tposition: relative;
\ttop: 50%;
 }

.footer-row:first-child { padding-left: 0; border-left: none; }
.footer-row:last-child { padding-right: 0; border: none; }

.footer-rows-right .footer-row:first-child {
\tpadding-left: 40px;
\tborder-left:  1px solid #484848;
}

.footer-rows-right {
\tfloat: right;
\theight: 100%;
}

/* Language Switcher */
.language-switcher.bootstrap-select.btn-group .dropdown-menu.inner {
\twidth: 100%;
}

.language-switcher.bootstrap-select:before { display: none; }

.language-switcher.bootstrap-select .dropdown-menu {
    padding-top: 15px;
    top: calc(100% + 15px);
    width: 160px;
    left: auto;
    right: 0;
}

.language-switcher.bootstrap-select .dropdown-menu:before {
\tposition: absolute;
\ttop: -5px;
\tcontent: \"\";
\tright: 20px;
\twidth: 0; 
\theight: 0; 
\tborder-left: 5px solid transparent;
\tborder-right: 5px solid transparent;
\tborder-bottom: 5px solid #fff;
}

.language-switcher.bootstrap-select.btn-group button {
\theight: 44px;
\tpadding-right: 35px;
\tpadding-left: 18px;
\tcolor: #fff;
\tbackground-color: #444;
\ttransition: 0.3s;
\tbox-shadow: none;
}

.language-switcher.bootstrap-select.btn-group .dropdown-toggle .filter-option {
\theight: 44px;
\tline-height: 44px;
}

.language-switcher.bootstrap-select.btn-group button:hover {
\tbackground-color: #fff;
\tcolor: #333;
}

.language-switcher.bootstrap-select.btn-group.open button,
.language-switcher.bootstrap-select.btn-group button:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
}

.language-switcher.bootstrap-select.btn-group button .caret { transition: 0.3s; }

.language-switcher.bootstrap-select.btn-group.open button .caret,
.language-switcher.bootstrap-select.btn-group button:hover .caret {
\tborder-top-color: #fff;
}

.language-switcher.bootstrap-select.btn-group .dropdown-toggle .caret {
\tright: 18px;
}

/* Social Icons */
.footer-social-links {
\tlist-style: none;
\tmargin: 0 -10px;
\tmargin-top: 3px;
\tpadding: 0;
}

.footer-social-links li {
\tdisplay: inline-block;
\tpadding: 0;
\tmargin: 0;
\tfloat: left;
}

.footer-social-links li a {
\tfont-size: 20px;
\tpadding: 0 10px;
\tcolor: #fff;
\tdisplay: inline-block;
\ttransition: 0.3s;
\topacity: 0.5;
\ttransform: translate3d(0,-0.5px,0);
}

.footer-social-links li a:hover {
\topacity: 1;
}

/* Middle Section */
.footer-middle-section {
\tpadding: 60px 0;
\tposition: relative;
\tz-index: 10;
}

#footer h3,
#footer h2,
.footer-links h3 {
\tfont-size: 18px;
\tcolor: #fff;
\tmargin: 0 0 15px 0;
\tpadding: 0;
\tdisplay: block
}

#footer h3 i {
\tposition: relative;
\tmargin-right: 5px;
\ttop: 2px;
\tfont-size: 20px;
\tfont-weight: 400 !important;
}
.footer-links ul {
\tlist-style: none;
\ttext-align: left;
\tmargin: 0;
\tpadding: 0;
}

.footer-links ul li {
\tmargin-bottom: 0;
\tdisplay: block;
}

.footer-links ul li:first-child a { padding-top: 0; }
.footer-links ul li:last-child a { padding-bottom: 0; }

.footer-links ul li a {
\tcolor: #c0c0c0;
\tdisplay: block;
\tline-height: 25px;
\tposition: relative;
\tz-index: 100;
\tpadding: 4px 0;
}

.footer-links ul li a span {
\tdisplay: inline-block;
\tposition: relative;
}

.footer-links ul li a:hover {
\tcolor: #fff;
}

.footer-links ul li a span:before {
\tcontent: \"\";
\tposition: absolute;
\tleft: 0;
\tbottom: 0;
\tbackground-color: #66676b;
\theight: 2px;
\tdisplay: block;
\ttransition: all 0.25s, opacity 0.2s;
\tz-index: -1;
\tborder-radius: 3px;
\topacity: 0.5;
\twidth: 0;
}

.footer-links ul li a:hover span:before {
\twidth: 100%;
\topacity: 1;
}

/* Newsletter */
.newsletter {
\tdisplay: flex;
\tmargin-top: 20px;
}

.newsletter input,
.newsletter button {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: flex-start;
}
.newsletter input {
\tbackground: #262626;
\tbox-shadow: none;
\tmargin-bottom: 0;
}

.newsletter input:focus {
\tbox-shadow: none;
}

.newsletter button {
\tbackground-color: #66676b;
\tborder-radius: 4px;
\theight: 48px;
\tmin-width: 48px;
\tmax-width: 48px;
\ttext-align: center;
\tline-height: 48px;
\tfont-size: 18px;
\tcolor: #fff;
\tmargin-left: 10px;
\ttransition: 0.3s;
}

.newsletter button:hover {
\tbackground-color: #fff;
\tcolor: #333;
}

.newsletter button i {
\twidth: 100%;
\tline-height: 48px;
}


/* Copyrights */
.footer-bottom-section {
\tpadding: 25px 0;
\tborder-top: 1px solid #484848;
\ttext-align: center;
}

.footer-bottom-section strong {
\tcolor: #fff;
\tfont-weight: 500;
}


/* Footer Media Queries*/
@media (max-width: 992px) {
\t#footer h3 { margin-top: 45px; }
\t.footer-middle-section { padding-top: 0; padding-bottom: 45px }
}

@media (max-width: 768px) {
\t.content-left-offset { padding-left: 15px; }
\t.content-right-offset { padding-left: 15px; }

\t.footer-rows-container {
\t\theight: auto;
\t\tpadding: 20px 0 40px 0;
\t}

\t.footer-rows-left,
\t.footer-rows-right {
\t    float: none;
\t    height: auto;
\t}

\t.footer-row-inner.footer-logo img { top: 0; }

\t.footer-row-inner {
\t    position: relative;
\t    top: 0;
\t    transform: translateY(0);
\t}

\t.footer-row-inner.footer-logo {
\t    top: 0;
\t    position: relative;
\t    height: 46px;
\t}

\t#footer .footer-row {
\t\tpadding: 0;
\t\tfloat: none;
\t\tpadding: 20px 0 0 0;
\t\tdisplay: block;
\t\twidth: 100%;
\t\tborder: none;
\t}

\t.footer-rows-container .footer-rows-left,
\t.footer-rows-container .footer-rows-right{ display: block }

}


/* ---------------------------------- */
/* Pagination
------------------------------------- */
.pagination {
\tmargin: 0;
\ttext-align: center;
}

.pagination-next-prev {
\tposition: relative;
\ttop: -66px;
}

.pagination ul {
\tmargin: 0;
\tpadding: 0;
}

.pagination ul li {
\tdisplay: inline-block;
\tmargin: 0;
\tpadding: 0;
}


.pagination ul li a,
.pagination-next-prev ul li a {
\tpadding: 10px 0;
\tborder-bottom: none;
\tdisplay: inline-block;
\tcolor: #333;
\tbackground-color: transparent;
\tfont-weight: 700;
\tmargin:0;
\tline-height: 22px;
\t-webkit-transition: all 200ms ease-in-out;
\t-moz-transition: all 200ms ease-in-out;
\t-o-transition: all 200ms ease-in-out;
\t-ms-transition: all 200ms ease-in-out;
\ttransition: all 200ms ease-in-out;
\tfont-size: 14px;
\tfloat: left;
}

.pagination ul li a {
\tborder-radius: 4px;
\twidth: 44px;
\theight: 44px;
\tpadding: 0;
\tline-height: 44px;
}

.pagination ul li a i {
\tline-height: 44px;
\tfont-size: 24px;
}

.pagination ul li.blank {
\tcolor: #a0a0a0;
\tpadding: 0 6px;
}

.section.gray .pagination .pagination-arrow a:hover,
.pagination ul li a.current-page,
.pagination ul li a:hover {
\tbackground-color: #333;
\tcolor: #fff;
\tbox-shadow: 0 2px 8px rgba(0,0,0,0.2)
}

.pagination ul li a.current-page {
\tbackground-color: #66676b;
\tcolor: #fff;
\tbox-shadow: 0 2px 8px rgba(102,103,107,0.25)
}

.pagination .pagination-arrow a { background-color: #f0f0f0; }
.section.gray .pagination .pagination-arrow a { background-color: #eaeaea; }


/* ---------------------------------- */
/* Back to top
------------------------------------- */
#backtotop {
  position: fixed;
  right: 0;
  opacity: 0;
  visibility: hidden;
  bottom: 25px;
  margin: 0 25px 0 0;
  z-index: 999;
  transition: 0.35s;
  transform: translateY(10px);
}
#backtotop.visible {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}
#backtotop a {
  text-decoration: none;
  border: 0 none;
  display: block;
  width: 46px;
  height: 46px;
  background-color: #66676b;
  opacity: 1;
  transition: all 0.3s;
  border-radius: 4px;
  text-align: center;
  font-size: 26px;
}

body #backtotop a {
  color: #fff;
}

#backtotop a:after {
  content: \"\";
  font-family: \"Feather-Icons\";
  position: relative;
  display: block;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

@media (max-width: 768px) {
  #backtotop {
    display: none;
  }
}


/* ---------------------------------- */
/* Sidebar Styles
------------------------------------- */
.sidebar-container { margin-bottom: 40px; }
.full-page-container .sidebar-container { margin-bottom: 0px; }

.sidebar-widget input { margin-bottom: 0; }

.sidebar-widget {
\tmargin-bottom: 50px;
\tdisplay: block;
}

.sidebar-widget h3 {
\tfont-size: 20px;
\tmargin-bottom: 20px;
}


/* ---------------------------------- */
/* Notify Box
------------------------------------- */
.notify-box {
\tdisplay: block;
\twidth: 100%;
\tbackground-color: #f2f2f2;
\tborder-radius: 4px;
\tpadding: 15px 25px;
\tposition: relative;
\tline-height: 28px;
\tmin-height: 59px;
}

.notify-box label {
\tmargin-bottom: 0;
\tcursor: pointer;
}

.notify-box .switch-button {
\tmargin-right: 10px;
}

.sort-by .bootstrap-select {
\tposition: relative;
\tright: 0;
\ttop: 0;
}

.sort-by .dropdown-menu {
\tbox-shadow: 0 0 4px 0px rgba(0, 0, 0, 0.14);
}

.sort-by .bootstrap-select.btn-group button {
\tflex: 1;
\tposition: relative;
\tright: 0;
\ttop: 4px;
\tfont-weight: 600;
\tmargin-left: 10px;
\twidth: auto;
\tpadding: 0;
\tpadding-right: 12px;
\tbackground-color: transparent;
\tbox-shadow: none;
\theight: 20px;
\tcolor: #333;
}

.sort-by .bootstrap-select:not([class*=\"col-\"]):not([class*=\"form-control\"]):not(.input-group-btn) {
\twidth: auto;
}

.sort-by .bootstrap-select.btn-group .dropdown-toggle .caret {
\tright: 0;
}

.sort-by .bootstrap-select .dropdown-menu {
\tpadding-top: 15px;
\ttop: 40px;
\tright: 0;
\tleft: auto;
\tposition: absolute;
\tmin-width: 160px !important;
\tflex: 1;
}

.sort-by .bootstrap-select.open:before { display: none; }

.sort-by {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: flex-start;
    position: relative;
    float: right;
}

/* Notify Box Media Queries*/
@media (max-width: 768px) {
\t.notify-box { margin-bottom: 90px; }
\t.notify-box .sort-by {
\t\tposition: absolute;
\t\tmargin-top: 35px;
\t\tleft: 0;
\t}
\t.notify-box .sort-by .bootstrap-select .dropdown-menu { left: 0; right: auto; }
}

/* ---------------------------------- */
/* Titlebar
------------------------------------- */
#titlebar {
\tbackground-color: #f8f8f8;
\tposition: relative;
\tpadding: 70px 0;
\tmargin-bottom: 65px;
}

#titlebar.gradient {
\tbackground: linear-gradient(to bottom, rgba(0,0,0,0.03) 0%, rgba(255,255,255,0));
\tpadding-bottom: 0;
}

#titlebar.white {
\tbackground: #fff;
\tpadding-bottom: 0;
}

#titlebar.transparent {
\tbackground: transparent;
}

#titlebar span a,
#titlebar span {
\tfont-size: 20px;
\tcolor: #888;
\tmargin-bottom: 3px;
\tmargin-top: 3px;
\tdisplay: block;
}

#titlebar #breadcrumbs span {
\tfont-size: 14px
}

#titlebar h1,
#titlebar h2 {
\tfont-size: 30px;
\tline-height: 40px;
\tmargin: 1px 0 3px 0;
}

/* Breadcrumbs */
#breadcrumbs {
\tposition: absolute;
\tright: 15px;
\tdisplay: inline-block;
\tfont-size: 14.7px;
\ttop: 50%;
\ttransform: translateY(-51%);
\tborder-radius: 4px;
\tfont-weight: 600;
\tcolor: #333;
\tbackground-color: #f0f0f0;
}

#breadcrumbs ul {
\tmargin: 0;
\tpadding: 12px 22px;
\tline-height: 23px;
}

#breadcrumbs ul li a {
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tcolor: #666;
\tfont-weight: 500;
}

#breadcrumbs ul li a:hover { color: #66676b; }

#breadcrumbs ul li {
\tdisplay: inline-block;
\tlist-style: none;
\tmargin: 0 0 0 7px;
}

#breadcrumbs ul li:first-child:before { display: none; }
#breadcrumbs ul li:first-child { margin-left: 0; }

#breadcrumbs ul li:before {
\tcontent: \"\";
\tdisplay: inline-block;
\theight: 0;
\twidth: 0;
    border-top: 4px solid transparent;
    border-bottom: 4px solid transparent;
    border-left: 4px solid #aaa;
\tfont-size: 14px;
\tmargin-right: 12px;
}

#breadcrumbs ul li.home-icon a {
\topacity: 1;
\tfont-size: 24px;
\ttop: 4px;
\tposition: relative;
\tline-height: 0;
\tpadding: 0;
\tdisplay: inline-block;
}

#breadcrumbs ul li.home-icon i {
\tline-height: 0;
}

/* Dark Style */
#breadcrumbs.dark {
\tcolor: rgba(255,255,255,1);
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.15);
\tbackground-color: #333;
}

#breadcrumbs.dark ul li a,
#breadcrumbs.dark ul li a:hover {
\tcolor: rgba(255,255,255,1);
}

#breadcrumbs.dark ul li:before {
    border-left: 4px solid rgba(255,255,255,0.3);
}


/* White Style */
#breadcrumbs.white {
\tcolor: #333;
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.1);
\tbackground-color: #fff;
}

#breadcrumbs.white ul li a { color: #666; }
#breadcrumbs.white ul li a:hover { color: #66676b; }

#breadcrumbs.white ul li:before {
    border-left: 4px solid rgba(0,0,0,0.3);
}


/* Adjustments for \"Single Page Header\" */
.single-page-header #breadcrumbs {
\tposition: relative;
\ttop: 0;
\tleft: 0;
\ttransform: none;
\tmargin-left: auto;
}

@media (max-width: 992px) {
\t.single-page-header #breadcrumbs {
\t\tmargin: 30px 0 20px 0;
\t}
}



/* ---------------------------------- */
/* Single Page Header
------------------------------------- */
.single-page-header {
\tmargin-bottom: 65px;
\tpadding: 60px 0;
\tposition: relative;
}

.single-page-header .container {
\tz-index: 100;
\tposition: relative;
}

.single-page-header:after,
.single-page-header:before {
    content: \"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    z-index: 15;
    background: linear-gradient(to right,rgba(247,247,247,1) 50%,rgba(247,247,247,0.8) 70%,rgba(247,247,247,0.8) 90%);
}

.single-page-header:after {
    z-index: 5;
    background-color: #f7f7f7;
}

.single-page-header .background-image-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 100% 50%;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
    left: 50%;
    z-index: 10;
}

.single-page-header .single-page-header-inner { display: flex; }

.single-page-header .left-side,
.single-page-header .right-side {
\tflex: 1;
\tdisplay: flex;
\talign-items: center;
}

.single-page-header .left-side { padding-right: 30px; }

.single-page-header .right-side {
\tmax-width: 35%;
}

@media (min-width: 1365px) {
\t.single-page-header .right-side { max-width: 30%; }
}

/* Image */
.single-page-header .header-image a {
\tdisplay: flex; 
\theight: 100%;
}

.single-page-header .header-image {
    height: 140px;
    flex: 0 0 140px;
    margin-right: 35px;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.1);
    display: flex;
    padding: 0 20px;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.single-page-header .header-image { max-width: 140px; }
}

.single-page-header.freelancer-header .header-image {
    background: #fff;
    border-radius: 50%;
    box-shadow: none;
    display: flex;
    padding: 0;
    overflow: hidden;
    height: 130px;
    flex: 0 0 130px;
    width: 130px;
}

.single-page-header .header-image img {
\talign-self: center;
\ttransform: translate3d(0,0,0);
}


/* IE 11 FIX */
@media all and (-ms-high-contrast:none) {
\t.single-page-header .header-image img {
\t\twidth: 100%;
\t}
}

/* Details */
.single-page-header .header-details {
\tflex: 1;
}

.single-page-header .header-details h3 {
\tcolor: #333;
\tfont-size: 26px;
\tmargin: 0;
\tpadding: 0;
\tmargin-bottom: 12px;
\tmargin-top: 3px;
\tline-height: 36px;
\tposition: relative;
\tpadding-right: 0;
\tdisplay: inline-block;
}

.single-page-header .header-details h3 span {
\tcolor: #808080;
\tdisplay: block;
\tfont-size: 20px;
\tfont-weight: 300;
\tmargin-top: -3px;
}

.single-page-header .header-details h5 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
}

/* Details */
.single-page-header .header-details h5 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
}

.single-page-header .header-details ul {
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
\tline-height: 24px;
\tmargin-bottom: -7px;
}

.single-page-header .header-details li {
\tdisplay: inline-block;
\tmargin-right: 20px;
\tmargin-bottom: 12px;
}

.single-page-header .header-details li:last-child { margin-right: 0; }

.single-page-header .header-details li a { color: #666; }
.single-page-header .header-details li a:hover { color: #66676b; }

.single-page-header .header-details li i {
\tfont-size: 20px;
\tposition: relative;
\ttop: 2px;
\tmargin-right: 2px;
}

.single-page-header .header-details li .verified-badge {
\ttransform: scale(0.85);
\tposition: relative;
\ttop: 2px;
}

.single-page-header .header-details li .verified-txt {
\tcolor: #299840;
}

.single-page-header .header-details li .star-rating  {
\tposition: relative;
\ttop: 6px;
}

.single-page-header .header-details ul li img.flag {
\theight: 16px;
\tborder-radius: 3px;
\tposition: relative;
\ttop: -1px;
\tdisplay: inline-block;
\tbox-shadow: 0 0 3px rgba(0,0,0,0.2);
\tmargin-right: 5px;
\tcursor: default
}

/* Salary Box */
.single-page-header .salary-box {
\tborder-radius: 4px;
\tbox-shadow: 0 3px 8px rgba(0,0,0,0.08);
\tbackground-color: #fff;
\tdisplay: inline-block;
\tpadding: 20px 25px;
\tmargin-left: auto;
}

.salary-box .salary-type {
\tcolor: #888;
\tline-height: 20px;
\tmargin: 3px 0 8px 0;
}

.salary-box .salary-amount {
\tcolor: #333;
\tfont-size: 28px;
\tline-height: 36px;
\tfont-weight: 300;
}

/* Media Queries for Single Page Header */
@media (max-width: 1366px) {
\t.single-page-header.freelancer-header .header-image {
\t    height: 130px;
\t    flex: 0 0 130px;
\t    width: 130px;
\t}
}

@media (max-width: 1240px) {
    .single-page-header .header-details h3 {
        font-size: 26px;
    }
    .single-page-header {
        padding: 55px 0;
    }
    .salary-box .salary-amount {
        font-size: 26px;
        line-height: 32px;
    }
    .single-page-header .header-image {
        height: 120px;
        flex: 0 0 120px;
    }

\t.single-page-header.freelancer-header .header-image {
\t    height: 120px;
\t    flex: 0 0 120px;
\t    width: 120px;
\t}
}

@media (max-width: 992px) {
\t.single-page-header .single-page-header-inner {
\t    display: flex;
\t    flex-direction: column;
\t}
\t.single-page-header .left-side { padding-right: 0; }
    .single-page-header .header-details h3 {
        font-size: 24px;
    }
    .single-page-header {
        padding: 35px 0;
    }
    .single-page-header .salary-amount {
        font-size: 22px;
        line-height: 24px;
    }
    .single-page-header .salary-box {
        padding: 0;
        margin-top: 15px;
        margin-bottom: 20px;
        background-color: transparent;
        box-shadow: none;
    }
    .salary-box .salary-type {
        font-weight: 600;
        color: #333;
    }
    .single-page-header .left-side,
    .single-page-header .right-side,
    .single-page-header-inner {
        display: block;
        max-width: 100%;
    }
    .single-page-header .header-image {
        height: 70px;
        width: auto;
        padding: 15px 20px;
        margin: 15px 0;
        display: inline-block;
    }
    .single-page-header .header-image img {
        height: 100%;
    }

    .single-page-header .header-details h5 {
        border-top: 1px solid #e0e0e0;
        padding-top: 25px;
    }

\t.single-page-header.freelancer-header .header-image {
\t    height: 70px;
\t    flex: 0 0 70px;
\t    width: 70px;
\t    margin-bottom: -70px;
\t}
\t.single-page-header.freelancer-header .header-details h3 {
\t\tmargin-left: 90px;
\t}
}

@media (max-width: 768px) {
\t.single-page-header:after, .single-page-header:before { background: #f7f7f7; }

\t.single-page-header.freelancer-header .header-image {
\t    height: 70px;
\t    flex: 0 0 70px;
\t    width: 70px;
\t    margin-bottom: -70px;
\t}
\t.single-page-header.freelancer-header .header-details h3 {
\t\tmargin-left: 90px;
\t}
}


/* ---------------------------------- */
/* Blog Post
------------------------------------- */
.blog-post {
    display: flex;
    background: #fff;
    margin-bottom: 35px;
\tbox-shadow: 0 3px 12px rgba(0,0,0,0.1);
\tborder-radius: 4px;
\toverflow: hidden;
\ttransition: 0.3s;
}

.blog-post:hover {
\tbox-shadow: 0 4px 18px rgba(0,0,0,0.1);
\ttransform: translateY(-5px);
}

.blog-post-thumbnail {
\tflex: 0 0 auto;
    max-width: none;
    max-height: 100%;
\toverflow: hidden;
\tposition: relative;
\twidth: 260px;
}

.blog-post-thumbnail-inner {
\theight: 100%;
\twidth: 100%;
\toverflow: hidden;
\tbox-shadow: 0 3px 12px rgba(0,0,0,0.15);
\ttransition: 0.3s;
}

.blog-post-thumbnail-inner img {
\theight: 100%;
\twidth: 100%;
\tobject-fit: cover;
\tposition: absolute;
\ttop: 0;
\tleft: 0;
}

.blog-post-thumbnail-inner .blog-item-tag {
\tbottom: 20px;
\tleft: 20px;
\ttop: auto;
\tmargin: 0;
}

.blog-post-content {
\tflex: 1;
\tpadding: 35px;
}

.blog-post-content h3,
.blog-post-content h3 a {
\tfont-size: 22px;
\tline-height: 33px;
\tcolor: #333;
\tmargin-bottom: 15px;
\tdisplay: block;
}

.blog-post-content h3 a:hover {
\tcolor: #66676b;
}

a.blog-post-info,
.blog-post-info,
.blog-post-date {
\tfont-size: 14px;
\tcolor: #888;
\tmargin-bottom: 10px;
\tdisplay: inline-block;
\tbackground-color: #f0f0f0;
\tborder-radius: 4px;
\tline-height: 20px;
\tpadding: 4px 10px;
\tmargin-right: 3px;
\ttransition: 0.3s;
}

a.blog-post-info:hover {
\tcolor: #fff;
\tbackground-color: #66676b;
}

.blog-post-content p {
\tpadding: 0;
\tmargin: 0;
\tdisplay: block;
\tcolor: #808080;
}

.blog-post-content a.button i.icon-feather-arrow-right {
\tfont-size: 20px;
\ttop: 4px;
\tleft: -1px;
\tposition: relative;
\tmargin: 0 -5px;
}

.blog-post-info-list {
\tdisplay: block
}

blockquote {
    padding: 10px 20px;
    margin: 0 20px;
    font-size: 17px;
    line-height: 30px;
    color: #888;
    border-left: 5px solid #eee;
}

/* Single Post Styles */
.blog-post.single-post { flex-direction: column; }
.blog-post.single-post:hover { transform: none; }
.blog-post.single-post .blog-post-thumbnail { width: 100%; height: 380px; }
.blog-post.single-post p { margin-bottom: 20px; }

/* Post Navigation */
#posts-nav {
\tpadding: 0;
\tlist-style: none;
\twidth: 100%;
\tposition: relative;
\tmargin: 0;
\tdisplay: inline-block;
\tmin-height: 60px;
}

#posts-nav li span {
\tdisplay: block;
    font-size: 14px;
    color: #888;
    margin-bottom: 10px;
    display: inline-block;
    background-color: #f0f0f0;
    border-radius: 4px;
    line-height: 20px;
    padding: 4px 10px;
    margin-right: 3px;
    transition: 0.3s;
}

#posts-nav li a:hover span {
    background-color: #66676b;
    color: #fff;
}

#posts-nav li {
\tposition: absolute;
\tfont-size: 18px;
\tfont-weight: 500;
\twidth: 50%;
}

#posts-nav li strong {
\tdisplay: block;
\tfont-weight: 500;
}

#posts-nav li a {
\ttransition: transform 0.3s, color 0.3s 0s;
\tcolor: #333;
\tdisplay: inline-block;
\tline-height: 28px;
}

#posts-nav li a:hover { color: #66676b; }

#posts-nav li.next-post {
\tright: 0;
\ttext-align: right;
}

#posts-nav li.prev-post {
\tleft: 0;
}

#posts-nav li.next-post a { padding-right: 50px; }
#posts-nav li.prev-post a { padding-left: 50px; }

#posts-nav li.prev-post a:before,
#posts-nav li.next-post a:before {
\tfont-family: \"Feather-Icons\";
\tfont-size: 30px;
\tposition: absolute;
\tcolor: inherit;
\ttop: 50%;
\ttransform: translate3d(0,-50%,0);
\ttransition: transform 0.3s;
}

#posts-nav li.next-post a:before {
\tright: 0;
\tcontent: \"\\e930\";
}

#posts-nav li.prev-post a:before {
\tleft: 0;
\tcontent: \"\\e92f\"
}

#posts-nav li.next-post a:hover:before { transform: translate3d(5px,-50%,0); }
#posts-nav li.prev-post a:hover:before { transform: translate3d(-5px,-50%,0); }


/* Comments */
.comments { margin: -10px 0 0 0; }

.comments h4 {
\tmargin-bottom: 25px;
\tfont-size: 20px;
\tfont-weight: 500;
\tcolor: #333;
}

.comments h4 span { display: inline-block; font-size: inherit; }

.comment { font-size: 20px; }

.comments .button {
\tmargin: 0 0 10px  0;
\tpadding: 7px 15px;
}

.comments.reviews .button { margin: 0; }

.comments ul {padding-left: 0;}
.comments ul li { display: block; }

.comments ul li,
.comments ul li ul li,
.comments ul li ul li ul li,
.comments ul li ul li ul li {
\tmargin: 50px 0 0 0px;
}

.comments ul li ul { margin: 0 0 0 100px; }

.comment-content p {
\tmargin: 3px 0 0 0;
\tline-height: 26px;
}

.comment-content {
\tcolor: #666;
\tpadding: 0 0 0 100px;
}

.comments ul li ul {
\tborder-left: 1px solid #e0e0e0;
\tpadding-left: 35px;
}

.comments ul li ul li:before {
\tcontent: \"\";
\twidth: 15px;
\theight: 1px;
\tbackground-color: #e0e0e0;
\tdisplay: inline-block;
\tposition: absolute;
\ttop: 30px;
\tleft: -35px;
}

.comments ul li { position: relative; }

.comment-content strong {
\tpadding-right: 5px;
\tcolor: #666;
}

.comment-content span { color: #888; }
body .comment-content p { padding: 5px 0; }

.comments-amount { color: #888; font-weight: 500; }

.avatar {
\tdisplay: inline-block;
\tfloat: left;
\tpadding: 0 17px 0 0;
\tposition: absolute;
\tleft: 0px;
\ttop: -5px;
}

.avatar img {
\tmax-width: 70px;
\tborder-radius: 50%;
}

.comment-by {
\twidth: 100%;
\tpadding-bottom: 8px;
\tpadding-top: 5px;
\tfont-weight: 500;
\tcolor: #333;
}

.comment-by h5 { margin: 0 0 7px 0; }

.comment-by a.reply {
\ttransition: all 0.3s;
}

.comment-by a.reply {
\tdisplay: inline;
\tbackground-color: #f0f0f0;
\tpadding: 5px 16px;
\tline-height: 22px;
\tfont-size: 14px;
\tcolor: #666;
\tfont-weight: 500;
\tposition: absolute;
\tright: 0;
\ttop: 15px;
\tborder-radius: 4px;
}

.comment-by a.reply i {
\tfont-size: 12px;
\tmargin-right: 1px;
}

.comment-by a.reply:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
\tbox-shadow: 0 3px 9px rgba(0,0,0,0.1);
}


.comment-by span.date {
\tcolor: #888;
\tfont-weight: 500;
\tmargin: 0px 0 0 0;
\tfloat: none;
\tdisplay: block;
\ttext-align: left;

}

@media (max-width: 768px) {

\t/* Media Queries for Comments */
\t.comments ul li ul { margin: 0; }
\t.avatar { top: 3px; }

\t.comment-content {
\t    color: #666;
\t    padding: 0 0 0 70px;
\t}

\t.avatar img {
\t\tmax-width: 50px;
\t\tborder-radius: 50%;
\t\ttop: 5px;
\t}

\t.comment-by a.reply {
\t\tposition: relative;
\t\tmargin: 10px 0 0 0;
\t\ttop: 0;
\t\tdisplay: inline-block
\t}

\t/* Media Queries for Blog Post */
\t.blog-post { flex-direction: column; }
\t.blog-post-thumbnail { width: 100%; height: 220px; }
\t#posts-nav li {
\t    position: relative;
\t    width: 100%;
\t}

\t#posts-nav li a { padding: 0 !important; }
\t#posts-nav li a::before { display: none;}
\t#posts-nav li.next-post { text-align: left; margin-bottom: 30px; }
}

/* Blog Widget Tabs */
.widget-tabs {
\tpadding: 0;
\tlist-style: none;
\tmargin-top: 25px;
\tdisplay: block;
}

.widget-content {
\tbox-shadow: 0 3px 9px rgba(0,0,0,0.07);
\tborder-radius: 4px;
\tbackground-color: #fff;
\tposition: relative;
\twidth: 100%;
\toverflow: hidden;
}

.widget-content:before {
\tcontent: \"\";
\twidth: 100%;
\theight: 100%;
\tdisplay: block;
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tz-index: 10;
\tbackground: #fff;
\topacity: 1;
\ttransition: 0.35s ease-in-out;
}

.widget-content img {
\tdisplay: block;
\tobject-fit: cover;
\twidth: 100%;
\theight: 100%;
\tposition: absolute;
\twidth: 100%;
\theight: 100%;
\tz-index: 9;
\topacity: 1;
\ttransition: 0.35s;
\tborder-radius: 5.5px;
}

.widget-text h5 {
\tfont-size: 16px;
\tfont-weight: 600;
\tline-height: 24px;
\tmargin: 0 0 3px 0;
\tcolor: #333;
\ttransition: 0.35s;
}

.widget-text span {
    font-size: 14px;
    color: #888;
    display: inline-block;
    background-color: #f0f0f0;
    border-radius: 4px;
    line-height: 20px;
    padding: 4px 10px;
    margin-top: 3px;
\ttransition: 0.35s;
}

.widget-text {
\tdisplay: block;
\tpadding: 0;
\tposition: relative;
\tz-index: 20;
\tpadding: 30px;
}

.widget-tabs .widget-content {
\tdisplay: table;
}

.widget-tabs .widget-content .widget-text {
\tdisplay: table-cell;
\tvertical-align: middle;
}

.widget-tabs li {
\tmargin-top: 20px;
}

.widget-content:hover:before,
.widget-content.active:before { opacity: 0.6; background: #333; }

.widget-content:hover img,
.widget-content.active img { opacity: 1 }

.widget-content:hover h5,
.widget-content.active h5 { color: #fff; }

.widget-content:hover span,
.widget-content.active span { 
\tbackground: rgba(255,255,255,0.25);
\tcolor: #fff
}


/* Blog Compact Item
------------------------------------- */
.blog-compact-item-container {
\tdisplay: block;
\theight: 100%;
\twidth: 100%;
\tborder-radius: 4px;
\tbackground: transparent;
\ttransform: translate3d(0,0,0);
\ttransition: transform 0.4s;
\tmargin-bottom: 30px;
}

.blog-compact-item-container:hover { transform: translateY(-10px); }

.blog-compact-item {
\tbackground: #ccc;
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.2);
\tborder-radius: 4px;
\theight: 100%;
\tdisplay: block;
\tposition: relative;
\tbackground-size: cover;
\tbackground-repeat: no-repeat;
\tbackground-position: 50%;
\theight: 460px;
\tz-index: 100;
\tcursor: pointer;
\ttransition: 0.4s;
}

@media (max-width: 1366px) { .blog-compact-item { height: 420px; } }

.blog-compact-item img {
\tobject-fit: cover;
\theight: 100%;
\twidth: 100%;
\tborder-radius: 4px;
}

.blog-compact-item:before {
    content: \"\";
    top: 0;
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 9;
    border-radius: 4px;
    background: linear-gradient(to top, rgba(51,51,51,0.8) 0%, rgba(51,51,51,0.7) 35%, rgba(51,51,51,0.3) 60%, rgba(51,51,51,0.3) 100%);
\ttransition: 0.4s;
}

.blog-compact-item-content {
\tposition: absolute;
\tbottom: 32px;
\tleft: 0;
\tpadding: 0 34px;
\twidth: 100%;
\tz-index: 50;
\tbox-sizing: border-box;
}

.blog-compact-item-content h3 {
\tcolor: #fff;
\tfont-size: 20px;
\tpadding: 5px 0;
\tfont-weight: 500;
\tmargin: 2px 0 0 0;
\tline-height: 30px;
}

.blog-compact-item-content span {
\tfont-size: 16px;
\tfont-weight: 300;
\tdisplay: inline-block;
\tcolor: rgba(255,255,255,0.7);
}

.blog-compact-item-content p {
\tfont-size: 16px;
\tfont-weight: 300;
\tdisplay: inline-block;
\tcolor: rgba(255,255,255,0.8);
\tmargin: 7px 0 0 0;
}

span.blog-item-tag {
\tfont-size: 14px;
\tfont-weight: 600;
\tcolor: #333;
\tbackground-color: #fff;
\tborder-radius: 4px;
\tpadding: 5px 12px;
\tline-height: 20px;
\tfont-weight: 400;
\tmargin-bottom: 9px;
\tposition: absolute;
\ttop: 30px;
\tleft: 32px;
\tz-index: 110;
\ttransition: 0.4s;
}

.blog-post-tags {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
\tmargin-bottom: 0;
\tcolor: #fff;
\tfont-size: 14px;
\tfont-weight: 400;
\topacity: 0.9;
}

.blog-post-tags li {
\tdisplay: inline-block;
\tmargin-right: 5px;
}

.blog-post-tags li i {
\tmargin-right: 3px;
\tfont-weight: normal;
\tdisplay: inline-block;
}


/* ---------------------------------- */
/* Contact Page
------------------------------------- */
.contact-location-info {
\tdisplay: flex;
\talign-content: center;
\tjustify-content: center;
\tbackground-color: #fff;
\tbox-shadow: 0 4px 14px rgba(0,0,0,0.03);
}

.contact-location-info .contact-address,
.contact-location-info #single-job-map-container {
\tflex: 1;
}

.contact-location-info #single-job-map-container #singleListingMap {
\tborder-radius: 0 4px 4px 0;
}

.contact-location-info .contact-address {
\tborder: 1px solid #e0e0e0;
\tborder-right: 0;
\tborder-radius: 4px 0 0 4px;
}

.contact-location-info .contact-address {
\tdisplay: flex;
}

.contact-location-info .contact-address > ul {
\talign-self: center;
\tpadding: 40px;
\tmargin: 0;
\tlist-style: none;
\tfont-size: 18px;
\tcolor: #808080;
}

.contact-location-info .contact-address ul li {
\tpadding: 2px 0;
}

.contact-location-info .freelancer-socials {
\tmargin-top: 10px;
\tmargin-left: -8px;
\ttransform: scale(0.9);
}

.contact-address-headline {
\tcolor: #333;
\tfont-weight: 600;
}

.contact-address-headline:after {
\tcontent: \"\";
\theight: 2px;
\twidth: 25px;
\tbackground-color: #66676b;
\tposition: relative;
\tdisplay: block;
\tmargin: 15px 0;
\tborder-radius: 3px;
}

@media (max-width: 768px) {
\t.contact-location-info {
\t\tflex-direction: column;
\t}
\t.contact-location-info .contact-address {
\t\tborder: 1px solid #e0e0e0;
\t\tborder-bottom: none;
\t\tborder-radius: 4px 4px 0 0;
\t}
\t.contact-location-info #single-job-map-container #singleListingMap {
\t\tborder-radius: 0 0 4px 4px;
\t}
}

#contact div input {
\tmargin-bottom: 22px;
}


/* ---------------------------------- */
/* Single Task / Job / Profile
------------------------------------- */
.single-page-section {
\tmargin-bottom: 55px;
\tdisplay: block;
}

.single-page-section p:last-of-type { padding-bottom: 0; margin-bottom: 0; }

.single-page-section h3 {
\tmargin-bottom: 20px;
\tfont-size: 20px;
}
.single-page-section .job-listing h3.job-listing-title { margin-bottom: 0; }

/* -------------------------------------------------------------- */
/*  03. Listings Styles
----------------------------------------------------------------- */

/* ---------------------------------- */
/* Full Width Page Layout
------------------------------------- */
.full-page-container {
\tdisplay: flex;
\twidth: 100%;
\tflex-wrap: wrap;
}

.full-page-sidebar {
\tflex: 0 0 360px;
\tbackground-color: #fafafa;
\tposition: relative;
}

.full-page-sidebar .full-page-sidebar-inner {
\toverflow: auto;
\theight: 100%;
}

.full-page-sidebar .sidebar-container {
\tpadding: 40px;
}

.full-page-sidebar .simplebar-scrollbar {
\twidth: 5px;
}

.full-page-sidebar .sidebar-widget:last-of-type {
\tmargin-bottom: 80px;
}

.full-page-content-container {
\tflex: 1;
\tbackground-color: #fff;
\tpadding: 0;
    overflow: auto;
}

.full-page-content-inner {
\tpadding: 40px;
\tpadding-bottom: 0;
}

.full-page-content-inner .grid-layout {
\twidth: calc(100% + 30px)
}

.full-page-content-inner .grid-layout .job-listing {
    margin: 0 30px 30px 0;
    width: calc(100% * (1/3) - 30px);
}

/* Search Button */
.sidebar-search-button-container {
\tposition: absolute;
\twidth: calc(100% - 15px);
\tbottom: 0;
\tpadding: 40px;
\tpadding-top: 10px;
\tz-index: 100;
\tbackground-color: #fafafa;

}

.sidebar-search-button-container button {
\twidth: calc(100% + 15px);
\tline-height: 46px;
\theight: 46px;
\ttransition: 0.3s;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.1);
}

.sidebar-search-button-container button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
\ttransform: translateY(-2px)
}


/* Small Footer */
.small-footer {
\tborder-top: 1px solid #e0e0e0;
\tpadding-top: 0px;
\twidth: calc(100% + 80px);
\tleft: -40px;
\tposition: relative;
\tpadding: 25px 40px;
\tdisplay: flex;
}

.small-footer strong { color: #333; }

.small-footer-copyrights { flex: 2; }

.small-footer .footer-social-links {
\ttransform: none;
\tflex: 1;
\ttext-align: right;
\tfloat: right;
\tdisplay: inline-block;
\tmargin: 0 -5px 0 0;
\tposition: relative;
\ttop: 2px;
}

.small-footer .footer-social-links li {
\tcolor: #333;
\ttransform: none;
\tfloat: none;
\tmargin: 0 -3px;
}

.small-footer .footer-social-links li a {
\tcolor: #333;
\ttransform: none;
}



/* Full Page With Map
------------------------------------- */
.full-page-map-container {
\tflex: auto;
\tposition: relative;
\tbackground-color: #e5e3df;
}

.full-page-map-container #map {
\tposition: relative;
\tz-index: 30;
}

.full-page-container.with-map .full-page-content-container {
\tflex: 0 0 50vw;
}

/* Sliding Sidebar */
.full-page-sidebar.hidden-sidebar {
\tvisibility: hidden;
\ttransition: 0.4s;
\tposition: relative;
\topacity: 0;
\tmax-width: 0;
}


/*.full-page-container.with-map .full-page-sidebar .sidebar-search-button-container,*/
.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner { width: 360px; }


.full-page-sidebar.hidden-sidebar.enabled-sidebar {
\tvisibility: visible;
\topacity: 1;
\tmax-width: 360px;
}

/* Enable Filter Button */
.enable-filters-button {
\tposition: relative;
\tleft: 48px;
\ttop: 0px;
\tz-index: 100;
\tbackground-color: #fff;
\tcolor: #333;
\tborder-radius: 0 4px 4px 0;
\tbox-shadow: 0 4px 12px rgba(0,0,0,0.1);
\theight: 48px;
\tline-height: 48px;
\tpadding: 0;
\ttransition: 0.3s;
\tmin-width: 126px;
\ttext-align: center;
}

.enable-filters-button span {
\tposition: relative;
\tpadding: 0 15px;
\tbackground-color: #66676b;
\tcolor: #fff;
\twidth: 100%;
\tz-index: 100;
\tborder-radius: 0 4px 4px 0;
\ttransition: 0.3s;
}

/* Filter Button Container */
.filter-button-container {
\tposition: absolute;
\tleft: 40px;
\ttop: 20px;
\twidth: calc(100% - 40px);
\toverflow-x: hidden;
\tpadding: 20px 0;
}

.filter-button-tooltip {
\tposition: absolute;
\twidth: auto;
\tleft: 15px;
\ttop: 24px;
\tz-index: 100;
\tborder-radius: 4px;
\twidth: auto;
\tanimation: tooltip-bounce 2s infinite;
\tmargin-left: 15px;
\twhite-space: nowrap;
\topacity: 0;
\toverflow: visible;
\ttransition: opacity 0.3s;
\tpointer-events: none;
\tpadding: 0 20px;
\tbackground-color: #fff;
\tcolor: #555;
\tbox-shadow: 0 2px 8px rgba(0,0,0,0.1);
\tfont-size: 15.7px;
\tline-height: 48px;
\ttop: 20px;
}

.filter-button-tooltip.tooltip-visible { opacity: 1; }

.filter-button-tooltip:before {
\tcontent: \"\";
\tposition: absolute;
\twidth: 0;
\theight: 0;
\ttop: calc(50% - 3px);
\tcontent: \"\";
\tleft: -3px;
\tbox-sizing: border-box;
\tborder: 5px solid black;
\tborder-color: transparent transparent #fff #fff;
\ttransform-origin: 0 0;
\ttransform: rotate(45deg) translateY(-50%);
\tbox-shadow: -2px 2px 2px 0 rgba(0, 0, 0, 0.04);
}

@keyframes tooltip-bounce {
\t0%, 20%, 50%, 80%, 100% { transform: translateX(0); }
\t40% { transform: translateX(14px); } 
\t60% { transform: translateX(7px); }
}


/* Hover & Active States */
.enable-filters-button:hover i,
.enable-filters-button.active i,
.enable-filters-button:hover span,
.enable-filters-button.active span {
\tbackground-color: #333;
}

.enable-filters-button:hover i:after,
.enable-filters-button:hover i:before,
.enable-filters-button.active i:after,
.enable-filters-button.active i:before {
\tbackground-color: rgba(0,0,0,0.25);
}

.enable-filters-button i {
\tposition: absolute;
\tz-index: 90;
\tleft: -48px;
\theight: 100%;
\tfont-size: 20px;
\tbackground-color: #66676b;
\tcolor: #fff;
\tline-height: 48px;
\ttext-align: center;
\twidth: 48px;
\tborder-radius: 4px 0 0 4px;
\tfont-style: normal;
\tfont-family: \"Feather-Icons\";
\ttransition: 0.3s;
\tbox-shadow: 0 4px 12px rgba(0,0,0,0.1);
}


.enable-filters-button i:after,
.enable-filters-button i:before {
\tposition: absolute;
\tleft: 0;
\tright: 0;
\ttransition: 0.3s;
\tborder-radius: 4px 0 0 4px;
\tbackground-color: rgba(0,0,0,0.1);
}

.enable-filters-button i:after {
\tcontent: \"\\e9d1\";
\topacity: 1;
}

.enable-filters-button.active i:after {
\topacity: 0;
}

.enable-filters-button i:before {
\tcontent: \"\\ea02\";
\topacity: 0;
}
.enable-filters-button.active i:before {
\topacity: 1;
}

.enable-filters-button span.show-text,
.enable-filters-button.active span.hide-text {
\tdisplay: inline-block;
}

.enable-filters-button.active span.show-text,
.enable-filters-button span.hide-text {
\tdisplay: none;
}


/* Location Field on Map */
.location-field-on-map {
\tposition: absolute;
\ttop: 40px;
\tright: 40px;
\twidth: 280px;
\tmax-width: 40%;
\tz-index: 100;
}

.location-field-on-map input {
\tbox-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}



/* Full Page Media Queries
------------------------------------- */
@media (max-width: 3860px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/4) - 30px);
\t}

\t/* Full Page With Map */
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/3) - 30px);
\t}
}

@media (max-width: 2560px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/4) - 30px);
\t}

\t/* Full Page With Map */
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/2) - 30px);
\t}
}

@media (max-width: 1920px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/3) - 30px);
\t}

\t/* Full Page With Map */
\t.full-page-container.with-map .full-page-sidebar { flex: 0 0 340px }
\t.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner { width: 340px; }
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/2) - 30px);
\t}
}

@media (max-width: 1600px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% * (1/2) - 30px);
\t}

\t.full-page-sidebar {
\t\tflex: 0 0 340px;
\t}
\t
\t/* Full Page With Map */
\t.full-page-container.with-map .full-page-sidebar { flex: 0 0 320px }
\t.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner { width: 320px; }
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% - 30px);
\t}

\t.full-page-container.with-map .full-page-content-container { flex: 0 0 55vw }
}

@media (max-width: 1365px) {
\t.location-field-on-map {
\t\tleft: 0px;
\t\tright: auto;
\t\twidth: calc(100% - 80px);
\t\tmax-width: calc(100% - 80px);
\t\tmargin: 0 40px;
\t}

\t/* Notify Box Responsive Styles*/
\t.full-page-container .notify-box { margin-bottom: 80px; }
\t.full-page-container .notify-box .sort-by {
\t\tposition: absolute;
\t\tmargin-top: 40px;
\t\tleft: 0;
\t}
\t.full-page-container .notify-box .sort-by .bootstrap-select .dropdown-menu { left: 0; right: auto; }
}


@media (max-width: 1099px) {
\t.full-page-content-inner .grid-layout .job-listing {
\t    width: calc(100% - 30px);
\t}
\t.full-page-sidebar {
\t\tflex: 0 0 340px;
\t}

\t/* Important Responsive Styles */
\t.full-page-map-container {
\t\torder: -1;
\t\twidth: 100%;
\t\theight: 400px;
\t\tposition: absolute;
\t\ttop: 0;
\t}

\t.full-page-container.with-map {
\t\tpadding-top: 400px;

\t    height: auto !important;
\t    width: 100%;
\t    position: relative;
\t    
\t}

\t.full-page-container.with-map .full-page-sidebar {
\t\tmax-width: 100%;
\t\tvisibility: visible;
\t\topacity: 1
\t}

\t.filter-button-container { display: none; }

\t.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner {
\t\tposition: relative;
\t\twidth: 100%;
\t}

\t.full-page-container.with-map .full-page-content-container {  flex: 1; }

\t.full-page-container,
\t.full-page-sidebar-inner,
\t.full-page-content-container,
\t.full-page-container .full-page-sidebar {
\t\theight: auto !important;
\t}

\t.full-page-container .simplebar-track { display: none; }
}

@media (max-width: 992px) {
\t.location-field-on-map {
    \twidth: calc(100% - 50px);
    \tmax-width: calc(100% - 50px);
    \tmargin: 0 25px;
    \ttop: 25px;
\t}

\t.sidebar-search-button-container,
\t.full-page-sidebar .sidebar-container,
\t.full-page-content-inner { padding: 35px; }
\t.full-page-content-inner { padding-bottom: 0; }

\t.full-page-content-inner .grid-layout .job-listing { width: calc(100% - 30px); }
\t.full-page-sidebar { flex: 0 0 320px; }

\t.full-page-sidebar-inner,
\t.full-page-content-container,
\t.full-page-container .full-page-sidebar {
\t\theight: auto !important;
\t}
}

@media (max-width: 768px) {
\t.location-field-on-map {
    \twidth: calc(100% - 30px);
    \tmax-width: calc(100% - 30px);
    \tmargin: 0 15px;
\t}

\t.sidebar-search-button-container,
\t.full-page-sidebar .sidebar-container,
\t.full-page-content-inner { padding: 40px 15px; }
\t.full-page-content-inner { padding-bottom: 0; }

\t.full-page-content-inner .grid-layout .job-listing { width: calc(100% - 30px); }

\t.full-page-sidebar {
\t\tflex: 1;
\t\twidth: 100%;
\t}

\t.full-page-container {
\t\tdisplay: block;
\t    width: 100%;
\t    flex-wrap: wrap;
\t    height: auto;
\t}

\t.small-footer { display: block; text-align: center; }
\t.small-footer .footer-social-links {
\t\tfloat: none;
\t\tleft: -10px;
\t\tmargin-top: 10px;
\t}

}


/* ---------------------------------- */
/* Job Listing - List Layout
------------------------------------- */
.job-listing {
\tdisplay: block;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 12px rgba(0,0,0,0.12);
\tmargin-bottom: 35px;
\tbackground-color: #fff;
\ttransition: 0.3s;
\tposition: relative;
}

.job-listing:hover {
\tbox-shadow: 0 2px 18px rgba(0,0,0,0.14);
\ttransform: translateY(-4px);
}

.job-listing-details {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: flex-start;
\tpadding: 35px;
\tpadding-bottom: 32px;
}

.job-listing .job-listing-company-logo {
\tflex: 1;
\tmax-width: 55px;
\tmargin-right: 25px;
\tposition: relative;
\ttop: 3px;
}

.job-listing .job-listing-company-logo img {
\tborder-radius: 4px;
\ttransform: translate3d(0,0,0);
}

.job-listing .job-listing-description {
\tflex: 1;
\tpadding-top: 3px;
}

.job-listing .job-listing-description p {
\tmargin: 15px 0 0 0;
\tpadding: 0;
\tcolor: #666;
}

.job-listing h4.job-listing-company {
\tfont-size: 16px;
\tcolor: #808080;
}

.job-listing h3.job-listing-title {
\tfont-size: 20px;
\tcolor: #333;
\tline-height: 30px;
}

.job-listing .job-listing-footer {
\tbackground-color: #f9f9f9;
\tpadding: 20px 35px;
\tborder-radius: 0 0 4px 4px;
\tposition: relative;
}

.job-listing .job-listing-footer ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

.job-listing .job-listing-footer ul li {
\tdisplay: inline-block;
\tmargin-right: 14px;
\tcolor: #777;
}

.job-listing .job-listing-footer ul li:last-child {
\tmargin-right: 0;
}

.job-listing .job-listing-footer ul li i.icon-material-outline-location-on {
\tmargin-right: 0;
}

.job-listing .job-listing-footer ul li i {
\tposition: relative;
\ttop: 1px;
\tmargin-right: 3px;
\tcolor: #777;
}

/* Media Queries for Default List Layout*/
@media (max-width: 768px) {
\t.job-listing .job-listing-company-logo { display: none; }
\t.job-listing .job-listing-title { padding-right: 10%; }
}

/* ---------------------------------- */
/* Job Listing - Compact List Layout
------------------------------------- */
.compact-list-layout {
\tbackground-color: #fff;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 12px rgba(0,0,0,0.12);
}

.compact-list-layout .job-listing {
\tbox-shadow: none;
\tmargin-bottom: 0;
\tpadding: 30px 35px;
\tpadding-right: 80px;
\tborder-radius: 0;
}

.compact-list-layout .job-listing:last-of-type {
\tborder-radius: 0 0 3px 3px;
\toverflow: hidden;
}

.compact-list-layout .job-listing:first-of-type {
\tborder-radius: 3px 3px 0 0;
\toverflow: hidden;
}

.compact-list-layout .job-listing h3 {
\tfont-size: 18px;
\tline-height: 28px;
}

.compact-list-layout .job-listing:nth-child(2n) {
\tbackground-color: #fafafa;
}

.compact-list-layout .job-listing:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 3px;
\theight: 100%;
\tdisplay: block;
\tbackground: #66676b;
\ttransition: 0.3s;
\topacity: 0;
}

.compact-list-layout .job-listing:hover:before {
\topacity: 1;
}

.compact-list-layout .job-listing:hover {
\ttransform: none;
}

.compact-list-layout .job-listing .job-listing-footer {
\tbackground-color: transparent;
\tpadding: 0;
\tmargin-top: 3px;
}

.compact-list-layout .job-listing-details {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 0;
    top: 0;
}

.compact-list-layout .job-listing .job-listing-company-logo {
\tmax-width: 50px;
\tmargin-right: 30px;
\ttop: 0;
}

.compact-list-layout .job-listing .verified-badge {
\ttransform: scale(0.85) translate(8px,8px);
}

.compact-list-layout .job-listing h3 .verified-badge {
\ttransform: scale(0.85) translate(0,0);
\tfont-weight: 500;
\ttop: 1px;
}

.compact-list-layout .job-listing h3 .verified-badge:before {
\ttop: -1px;
}

.compact-list-layout .job-listing span.bookmark-icon {
\ttop: 50%;
\ttransform: translateY(-51%);
}

/* List Layuot Apply Button */
.compact-list-layout .job-listing.with-apply-button {
\tposition: relative;
\tpadding-right: 35px;
}

.list-apply-button {
\tposition: absolute;
    right: 0;
    padding: 10px 20px;
    line-height: 24px;
    position: relative;
    font-size: 16px;
    font-weight: 500;
    display: inline-block;
    transition: all 0.3s;
    border-radius: 4px;
    background: #f0f0f0;
    color: #666;
    text-align: center;
}

.job-listing.with-apply-button:hover .list-apply-button {
    background-color: #66676b;
    color: #fff;
    box-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

/* Alt Styles for Single Company Profile */
.boxed-list .compact-list-layout {
\tbox-shadow: none;
\tmargin-top: 0;
}

.boxed-list .compact-list-layout .job-listing:hover {
\tborder-left: none;
}

.boxed-list .compact-list-layout .job-listing:first-of-type { border-radius: 0; }

/* Media Queries for Grid Layout */
@media (max-width: 768px) {
\t.list-apply-button {
\t    flex: auto;
\t    width: 100%;
\t    margin-top: 15px;
\t}
}


/* ---------------------------------- */
/* Job Listing - Grid Layout
------------------------------------- */
.grid-layout {
\tdisplay: flex;
\tflex-wrap: wrap;
\twidth: calc(100% + 30px);
}

.grid-layout .job-listing {
\tdisplay: flex;
\tflex-direction: column;
\tjustify-content: center;
\tmargin: 0 30px 30px 0;
\twidth: calc(100% * (1/2) - 30px);
\tflex-direction: column;
}

.grid-layout .job-listing-details {
\tflex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 30px;
    padding-right: 40px;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.tasks-list-container.tasks-grid-layout .task-listing .task-listing-details,
\t.grid-layout .job-listing-details { flex-basis: 100px; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid { flex-basis: 100px; }
}
/* IE 11 Fixes - End */

.grid-layout .job-listing-footer {
\tflex-grow: 0;
\tpadding: 20px 30px;
}

.grid-layout .job-listing h3.job-listing-title {
\tfont-size: 18px;
\tline-height: 28px;
}

.grid-layout .job-listing-footer .bookmark-icon {
\ttop: 0;
\tright: 25px;
\ttransform: translateY(-50%) scale(0.96);
}

.grid-layout .job-listing .job-listing-company-logo {
\tmax-width: 56px;
\tmargin-right: 24px;
\ttop: 1px;
\tflex: 0 0 56px;
}

/* Media Queries for Grid Layout */
@media (max-width: 768px) {
\t.full-page-content-inner .grid-layout .job-listing,
\t.grid-layout .job-listing {
\t\tmargin: 0 0 30px 0;
\t\twidth: 100%;
\t}
\t.grid-layout,
\t.full-page-content-inner .grid-layout { width:100%; }

\t.full-page-content-container .simplebar-content {overflow-x: hidden !important;}
\t.full-page-container.with-map .full-page-content-inner .grid-layout .job-listing { width: 100%; }
}

/* ---------------------------------- */
/* Tasks - List Layout
------------------------------------- */
.task-listing {
\tborder-radius: 4px;
\tbox-shadow: 0 2px 12px rgba(0,0,0,0.12);
\tmargin-bottom: 30px;
\tbackground-color: #fff;
\ttransition: 0.3s;
\tposition: relative;
    display: flex;
    justify-content: center;
    cursor: pointer;
}

.task-listing:hover {
\tbox-shadow: 0 2px 18px rgba(0,0,0,0.14);
\ttransform: translateY(-4px);
}

.task-listing-details {
\tpadding: 34px 38px;
\tflex: 1;
}

.task-listing .task-listing-description {
\tflex: 1;
    align-items: center;
    justify-content: center;
}

.task-listing .task-listing-description p {
\tmargin: 15px 0 0 0;
\tpadding: 0;
\tcolor: #666;
}

.task-listing h3.task-listing-title a,
.task-listing h3.task-listing-title {
\tfont-size: 18px;
\tcolor: #333;
\tline-height: 28px;
\tcursor: pointer;
\tfont-weight: 600;
\tpadding-top: 2px;
\ttransition: 0.3s;
}

.task-listing .task-icons {
\tlist-style: none;
\tpadding: 0;
\tmargin: 3px 0 0 -3px;
}

.task-listing .task-icons li {
\tdisplay: inline-block;
\tpadding: 0;
\tmargin: 0;
\tmargin-right: 10px;
\tcolor: #808080;
}

.task-listing .task-icons i {
\tcolor: #909090;
\tfont-size: 18px;
\tposition: relative;
\ttop: 1px;
}

.task-listing .task-icons i.icon-material-outline-desktop-windows {
\tfont-size: 19px;
\ttop: 2px;
}

.task-listing-bid {
\tflex: 0 0 240px;
\tbackground-color: #f8f8f8;
\tposition: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}


.task-listing-bid-inner {
\twidth: 100%;
\tpadding: 35px;
}

.task-listing-bid-inner .button {
\tdisplay: block;
\ttext-align: center;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
\twidth: 100%;
}

.task-listing-bid-inner .button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
}

.task-listing-bid .task-offers {
\tmargin-bottom: 15px;
/*\ttext-align: center;*/
}

.task-listing-bid .task-offers strong {
\tdisplay: block;
\tcolor: #333;
\tfont-weight: 600;
\tline-height: 24px;
}

.task-listing-bid .task-offers span {
\tdisplay: block;
\tcolor: #888;
\tline-height: 24px;
}

/* Task Tags */
.task-tags {
\tdisplay: block;
\tmargin: 23px 0 3px 0;
}

.task-tags span {
\ttransition: 0.3s;
    font-size: 14.7px;
    border-radius: 4px;
    background-color: rgba(102,103,107,.07);
    color: #66676b;
    display: inline-block;
    padding: 6px 15px;
    margin: 2px 0;
    line-height: 24px;
}

/* Compact List */
.compact-list .task-listing {
    border-radius: 0;
    margin-bottom: 0;
    box-shadow: none;
}

.compact-list .task-listing:hover {
    transform: translateY(0);
}

.tasks-list-container.compact-list {
\tbackground-color: #fff;
    border-radius: 4px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
}

.tasks-list-container.compact-list .task-listing {
\talign-items: center;
\tjustify-content: center;
}

.tasks-list-container.compact-list .task-listing:nth-child(2n) {
\tbackground-color: #fafafa;
}

.tasks-list-container.compact-list .task-listing-bid {
\tbackground-color: transparent;
}

.tasks-list-container.compact-list .task-listing:hover:before {
    opacity: 1;
}

.tasks-list-container.compact-list .task-listing:before {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    width: 3px;
    height: 100%;
    display: block;
    background: #66676b;
    transition: 0.3s;
    opacity: 0;
}

.tasks-list-container.compact-list .task-listing:last-of-type {
\tborder-radius: 0 0 3px 3px;
\toverflow: hidden;
}

.tasks-list-container.compact-list .task-listing:first-of-type {
\tborder-radius: 3px 3px 0 0;
\toverflow: hidden;
}

.tasks-list-container.compact-list .task-listing .task-listing-details {
    padding-right: 0;
}

/* Section Styles */
.section .task-listing-details,
.section .task-listing-bid-inner { padding: 27px 35px; }


/* Media Queries for Tasks List */
@media (max-width: 1200px) {
\t.task-listing-bid { flex: 0 0 220px;}
}

@media (min-width: 481px) and (max-width: 768px) {
\t.task-listing-bid {
\t\tflex: 1;
\t\tpadding: 10px 0;
\t}

\t.task-listing { flex-direction: column; }
\t.task-listing-bid-inner { display: flex; margin: 20px 0 0 0; }
\t.tasks-grid-layout .task-listing-bid-inner {margin: 0; }
\t.task-listing-bid-inner .task-offers { flex: 1; }
\t.task-listing-bid-inner .button { height: 100%; width: 30%; }

\t.tasks-list-container.compact-list .task-listing .task-listing-details {
\t\tpadding-right: 35px;
\t\tpadding-bottom: 0;
\t}

\t.tasks-list-container.compact-list .task-listing .task-listing-bid {
\t\tpadding-bottom: 25px;
\t}
\t.task-listing-bid-inner {
\t    width: 100%;
\t    padding: 0 35px;
\t}
}

/* Small Mobile Sizes */
@media (max-width: 768px) {
\t.section .task-listing-details { padding: 25px 30px; }
\t.section .task-listing-bid-inner { padding: 0 30px; }
}

/* Small Mobile Sizes */
@media (max-width: 480px) {

\t.task-listing-bid {
\t\tflex: 1;
\t\tpadding: 30px 0;
\t}

\t.task-listing { flex-direction: column; }

\t.task-listing-bid-inner .task-offers { flex: 1; }
\t.task-listing-bid-inner .button { height: 100%; width: 100%; }

\t.tasks-list-container.compact-list .task-listing .task-listing-details {
\t\tpadding-right: 35px;
\t\tpadding-bottom: 0;
\t}

\t.tasks-list-container.compact-list .task-listing .task-listing-bid {
\t\tpadding-bottom: 35px;
\t}
\t.task-listing-bid-inner {
\t    width: 100%;
\t    padding: 0 35px;
\t}
}


/* ---------------------------------- */
/* Tasks - Grid Layout
------------------------------------- */
.tasks-list-container.tasks-grid-layout {
    display: flex;
    flex-wrap: wrap;
    width: calc(100% + 30px);
}

.tasks-list-container.tasks-grid-layout .task-listing {
    display: flex;
    justify-content: center;
    margin: 0 30px 30px 0;
    width: calc(100% * (1/2) - 30px);
    flex-direction: column;
}


.tasks-list-container.tasks-grid-layout .task-listing-bid {
\tflex: 1;
\tpadding: 0px 0;
\tdisplay: block
}

.tasks-list-container.tasks-grid-layout .task-listing { flex-direction: column; }
.tasks-list-container.tasks-grid-layout .task-listing-bid-inner {
\tdisplay: flex;
\talign-items: center;
\tpadding: 18px 32px;
}

.tasks-list-container.tasks-grid-layout .task-listing-bid-inner .task-offers {
\tflex: 1;
\tposition: relative;
\ttop: 5px;
}

.tasks-list-container.tasks-grid-layout .task-listing-bid-inner .button { height: 100%; width: 45%; }

.tasks-list-container.tasks-grid-layout  .task-listing .task-listing-details {
\tdisplay: flex;
    align-items: center;
\tpadding: 28px 32px;
}

/* Media Queries for Tasks List */
@media (max-width: 1240px) {
\t.tasks-list-container.tasks-grid-layout .task-listing-bid-inner { display: block; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid { padding: 20px 35px; padding-bottom: 30px; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid-inner { padding: 0; }
\t.tasks-list-container.tasks-grid-layout .task-listing { flex-direction: column; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid-inner .task-offers { flex: 1; }
\t.tasks-list-container.tasks-grid-layout .task-listing-bid-inner .button { height: 100%; width: 100%; }
}

@media (max-width: 768px) {
\t.tasks-list-container.tasks-grid-layout { width: 100%; }
\t.tasks-list-container.tasks-grid-layout .task-listing { margin: 0 0 30px 0; width: 100%; }
\t.tasks-list-container.compact-list .task-listing-bid,
\t.tasks-list-container.compact-list .task-listing-details { width: 100%; }

}

/* Full Page Media Queries */
@media (max-width: 3860px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100% * (1/4) - 30px); } 
}

@media (max-width: 2560px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100% * (1/3) - 30px); }
}

@media (max-width: 1600px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100% * (1/2) - 30px); }
}

@media (max-width: 1099px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100% - 30px); }
}

@media (max-width: 992px) {
\t.full-page-content-inner .tasks-grid-layout .task-listing {  width: calc(100%); }
}


/* ---------------------------------- */
/* Freelancers - Grid Layout
------------------------------------- */
.freelancers-container {
\tdisplay: flex;
\tflex-wrap: wrap;
\twidth: calc(100% + 30px);
}

.freelancer {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 30px 30px 0;
    width: calc(100% * (1/2) - 30px);
    border-radius: 4px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
    background-color: #fff;
    transition: 0.3s;
    position: relative;
    cursor: default;
}

.freelancer:hover {
    box-shadow: 0 2px 18px rgba(0,0,0,0.14);
    transform: translateY(-4px);
}

.freelancer .bookmark-icon {
\tcursor: pointer;
}

.freelancer-overview {
\ttext-align: center;
\tpadding: 38px 20px;
\tflex-grow: 1;
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: center;
}

.freelancer-overview-inner {
\tflex: 1;
}

.freelancer-overview .freelancer-avatar {
\twidth: 110px;
\tmargin: 0 auto;
\tposition: relative;
}

.freelancer-overview .freelancer-avatar img {
\twidth: 100%;
\tborder-radius: 50%;
\tcursor: pointer;
}

.freelancer-overview .freelancer-avatar .verified-badge {
\tposition: absolute;
\tbottom: 0;
\tright: 0;
}

.freelancer-name {
\tmargin-top: 19px;
}

.freelancer-rating {
\tmargin-top: 5px;
\tmargin-bottom: -10px;
}

.freelancer-name h4,
.freelancer-name h4 a {
\tfont-size: 18px;
\tfont-weight: 600;
\tcolor: #333;
\tcursor: pointer;
}

.freelancer-name img.flag {
\theight: 15px;
\tborder-radius: 3px;
\tposition: relative;
\ttop: -1px;
\tdisplay: inline-block;
\tbox-shadow: 0 0 3px rgba(0,0,0,0.2);
\tmargin-left: 4px;
\tcursor: default
}

.freelancer-name span {
\tcolor: #888;
}

.freelancer-details {
\tpadding: 35px;
\tbackground-color: #fafafa;
\tflex-grow: 0;
}

.freelancers-grid-layout .freelancer-details { border-radius: 0 0 4px 4px; }

.freelancers-grid-layout .freelancer-details a.button {
\tdisplay: block;
\ttext-align: center;
\twidth: 100% !important;
\ttransition: 0.3s;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.1);
}

.freelancer-details a.button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.2);
}

.freelancer-details-list ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0 0 5px 0;
\tfont-size: 14.7px;
}

.freelancer-details-list ul li {
\tdisplay: inline-block;
\tmargin-right: 25px;
\tline-height: 23px;
\tcolor: #808080;
\tmargin-bottom: 15px;
}

.freelancer-details-list ul li:last-child {
\tmargin-right: 0;
}

.freelancer-details-list ul li strong {
\tdisplay: block;
\tcolor: #333;
}

.freelancer-details-list ul li strong i {
\tposition: relative;
\ttop: 1px;
\tmargin-right: -1px;
\tmargin-left: -2px;
}


/* Detail Item */
.freelancer-detail-item {
\tdisplay: inline-block;
\tmargin: 2px 10px 5px 0;
}

.freelancer-detail-item a,
.freelancer-detail-item {
\tcolor: #888;
}

.freelancer-detail-item a:hover {
\tcolor: #66676b;
}

.freelancer-detail-item i {
\tposition: relative;
\ttop: 2px;
\tmargin-right: 3px;
}


/* Media Queiers for Freelancers List */
@media (max-width: 1366px) {
\t.freelances-grid-layout .freelancer-overview .freelancer-avatar { width: 100px; }
}

@media (max-width: 768px) {
\t.freelances-grid-layout.freelancers-container { width: 100%; }
\t.freelances-grid-layout .freelancer { margin: 0 0 30px 0; width: 100%; }
\t.freelancers-container.freelancers-grid-layout { width: 100%; }
\t.freelancers-container.freelancers-grid-layout .freelancer { width: 100%; margin-right: 0; }
}

/* Full Page Media Queiers for Freelancers List */
@media (max-width: 2560px) {
\t.full-page-container .freelancer { width: calc(100% * (1/4) - 30px); }
}

@media (max-width: 1920px) {
\t.full-page-container .freelancer { width: calc(100% * (1/3) - 30px); }
}

@media (max-width: 1366px) {
\t.full-page-container .freelancer { width: calc(100% * (1/2) - 30px); }
}

@media (max-width: 1099px) {
\t.full-page-container .freelancers-container { width: 100%; }
\t.full-page-container .freelancer { width: 100%; margin-right: 0; }
}

/* ---------------------------------- */
/* Freelancers - List Layout
------------------------------------- */
.freelancers-container.freelancers-list-layout { width: 100%; }

.freelancers-list-layout .freelancer { 
\tmargin: 0 0 30px 0;
\twidth: 100%;
    flex-direction: row;
    justify-content: center;
}


.freelancers-list-layout .freelancer-overview {
\ttext-align: left;
\tpadding: 45px 40px;
\tflex-grow: 1;
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: center;
}

.freelancers-list-layout .freelancer-overview-inner {
\tflex: 1;
\tdisplay: flex;
\talign-items: center;
}

.freelancers-list-layout .freelancer-details {
\tpadding: 45px 40px 45px 0;
\tbackground-color: transparent;
\tflex: 0 0 360px;
}

.freelancers-list-layout .freelancer-overview .freelancer-avatar {
    width: 100px;
    margin: 0;
} 

.freelancers-list-layout .freelancer-overview .freelancer-name {
    text-align: left;
    margin: 0 0 0 30px;
} 

.freelancers-list-layout .freelancer-details a.button {
    display: block;
    text-align: center;
    min-width: 50%;
    max-width: 100%;
    width: auto !important;
    transition: 0.3s;
    float: right;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
} 

.freelancers-list-layout .freelancer-details a.button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
} 

.freelancers-list-layout .bookmark-icon {
\tdisplay: none;
} 

.freelancers-list-layout .freelancer-details-list ul {
\tfloat: right;
\tdisplay: block
} 

.freelancers-list-layout .freelancer-details-list ul li {
\tmargin-left: 25px;
\tmargin-right: 0;
\tfloat: right;
} 

/* Freelancers Compact List */
.compact-list.freelancers-list-layout .freelancer {
    border-radius: 0;
    margin-bottom: 0;
    box-shadow: none;
}

.compact-list.freelancers-list-layout .freelancer:hover {
    transform: translateY(0);
}

.compact-list.freelancers-list-layout {
\tbackground-color: #fff;
    border-radius: 4px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
}

.compact-list.freelancers-list-layout .freelancer:nth-child(2n) { background-color: #fafafa; }

.compact-list.freelancers-list-layout .freelancer:hover:before  { opacity: 1; }

.compact-list.freelancers-list-layout .freelancer:before {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    width: 3px;
    height: 100%;
    display: block;
    background: #66676b;
    transition: 0.3s;
    opacity: 0;
}

.compact-list.freelancers-list-layout .freelancer:last-of-type {
\tborder-radius: 0 0 3px 3px;
\toverflow: hidden;
}

.compact-list.freelancers-list-layout .freelancer:first-of-type {
\tborder-radius: 3px 3px 0 0;
\toverflow: hidden;
}


/* Media Queiers for Freelancers List Layout */
@media (max-width: 1366px) {
\t.freelancers-list-layout .freelancer-overview .freelancer-avatar { width: 100px; }
}

@media (max-width: 1240px) {

\t.freelancers-list-layout .freelancer { flex-direction: column; }
\t.freelancers-list-layout .freelancer-details {
\t\tflex: 1;
\t\tpadding: 35px 40px;
\t\tbackground-color: #fafafa;
\t}

\t.freelancers-list-layout .freelancer-details-list ul { float: left; }

\t.freelancers-list-layout .freelancer-details-list ul li {
\t    margin-left: 0;
\t    margin-right: 25px;
\t    float: left;
\t}

\t.freelancers-list-layout .freelancer-details a.button {
\t    float: none;
\t    width: 100% !important;
\t}

\t.freelancers-list-layout .freelancer-overview .freelancer-avatar { width: 90px; }

\t/* Compact Layout */
\t.compact-list.freelancers-list-layout .freelancer-details {
\t    background-color: transparent;
\t    padding-top: 0;
\t}
}

@media (max-width: 768px) {
\t.freelancers-list-layout .freelancer-overview,
\t.freelancers-list-layout .freelancer-details {
\t\tpadding: 30px;
\t}

\t.freelancers-list-layout .freelancer-overview .freelancer-avatar { width: 80px; }

\t.freelancers-list-layout .star-rating:before {
\t    display: block;
\t    float: none;
\t    text-align: center;
\t    max-width: 40px;
\t    margin-bottom: 4px;
\t}
}

/* ---------------------------------- */
/* Browse Companies
------------------------------------- */

/* Letters List */
.letters-list {
\twidth: 100%;
\ttext-align: center;
\tbackground-color: #f4f4f4;
\tborder-radius: 4px;
\tpadding: 20px;
}

.letters-list a {
\tdisplay: inline-block;
\tfont-size: 18px;
\tcolor: #333;
\theight: 40px;
\twidth: 40px;
\tline-height: 40px;
\tbackground-color: transparent;
\tborder-radius: 4px;
\ttransition: 0.3s;
\tmargin: 0 -2px;
}

.letters-list a.current {
\tmargin-right: 0;
\tcolor: #fff;
\tfont-weight: 600;
\tbackground-color: #66676b;
\tbox-shadow: 0 2px 8px rgba(102,103,107,0.25);
}

.letters-list a:hover {
\tcolor: #fff;
\tbackground-color: #333;
\tfont-weight: 600;
\tbox-shadow: 0 2px 8px rgba(0,0,0,0.2);
}

/* Companies List */
.companies-list {
\tdisplay: flex;
    flex-wrap: wrap;
\tmargin-top: 30px;
\twidth: calc(100% + 30px);
}

.companies-list .company {
\twidth: calc(33.3% - 30px);
\tmargin: 0 30px 30px 0;
\tflex-grow: 1;
\ttext-align: center;
\t/*border-right: 1px solid #e0e0e0;
\tborder-bottom: 1px solid #e0e0e0;*/
\tpadding: 50px 0;
\tbackground-color: #fff;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 10px rgba(0,0,0,0.1);
\ttransition: 0.3s;
}

.companies-list .company:hover {
\ttransform: translateY(-3px);

}

@media (min-width: 993px) {
\t.companies-list .company:nth-child(3n) { border-right: none; }
\t.companies-list .company:nth-last-child(-n+3) { border-bottom: none; }
}

.companies-list .company img {
\tmax-width: 120px;
\tmax-height: 60px;
\tdisplay: inline-block;
\tmargin: 0;
\ttransform: translate3d(0,0,0);
}

.companies-list .company .company-logo {
\theight: 60px;
\tdisplay: flex;
\tdisplay: flex;
\talign-items: center;
\tjustify-content: center;
\tmargin-bottom: 30px;
}

.companies-list .company h4 {
\tcolor: #333;
\tfont-size: 18px;
\tfont-weight: 600;
\ttransition: 0.3s;
\tdisplay: block;
}

.companies-list .company span {
\tcolor: #888;
}

.companies-list .company .star-rating {
\tmargin-top: 5px;
}

.not-rated,
.company-not-rated {
    border-radius: 4px;
    background-color: #f0f0f0;
    color: #888;
    font-size: 14px;
    line-height: 15px;
    font-weight: 600;
    padding: 7px 9px;
    display: inline-block;
    margin-top: 8px;
    text-align: center;
}

/* Media Queries for Companies List */
@media (max-width: 1366px) {
\t.letters-list a {
\t\tfont-size: 16px;
\t\theight: 36px;
\t\twidth: 36px;
\t\tline-height: 36px;
\t\tmargin: 0 -1px;
\t}
}

@media (max-width: 992px) {
\t.companies-list .company { \twidth: calc(50% - 30px); }
}

@media (max-width: 768px) {
\t.companies-list .company { width: 100%; }
}

/* -------------------------------------------------------------- */
/*  04. User Interface Elements
----------------------------------------------------------------- */

/* ---------------------------------- */
/* Buttons
------------------------------------- */

button { vertical-align: middle; }

span.button,
button.button,
input[type=\"button\"],
input[type=\"submit\"],
a.button {
\tbackground-color: #66676b;
\ttop: 0;
\tpadding: 10px 20px;
\tline-height: 24px;
\tcolor: #fff;
\tposition: relative;
\tfont-size: 16px;
\tfont-weight: 500;
\tdisplay: inline-block;
\ttransition: all 0.2s ease-in-out;
\tcursor: pointer;
\toverflow: hidden;
\tborder: none;
\tborder-radius: 4px;
    box-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

/* Icons Aligment*/
.button i[class^=\"icon-material\"],
button.button i[class^=\"icon-material\"],
input[type=\"button\"] i[class^=\"icon-material\"],
input[type=\"submit\"] i[class^=\"icon-material\"],
a.button i[class^=\"icon-material\"] {
\tfont-size: 18px;
\theight: 0;
\twidth: 18px;
\tline-height: 0;
\ttop: 2px;
\tposition: relative;
\tdisplay: inline-block;
\tmargin-left: 3px;
}

.button i[class^=\"icon-feather\"],
button.button i[class^=\"icon-feather\"],
input[type=\"button\"] i[class^=\"icon-feather\"],
input[type=\"submit\"] i[class^=\"icon-feather\"],
a.button i[class^=\"icon-feather\"] {
\tfont-size: 16px;
\theight: 0;
\twidth: 16px;
\tline-height: 0;
\ttop: 2px;
\tposition: relative;
\tdisplay: inline-block;
\tmargin-left: 3px;
}

/* Dark Style */
button.button.dark,
input[type=\"button\"].dark,
input[type=\"submit\"].dark,
a.button.dark {
\tbackground-color: #333;
\tcolor: #fff;
\tbox-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Dark Style */
button.button.gray,
input[type=\"button\"].gray,
input[type=\"submit\"].gray,
a.button.gray {
\tbackground-color: #eaeaea;
\tcolor: #666;
\tbox-shadow: none;
}

button.button.gray:hover,
input[type=\"button\"].gray:hover,
input[type=\"submit\"].gray:hover,
a.button.gray:hover {
\tbackground-color: #e0e0e0;
}


body .button i.icon-material-outline-arrow-right-alt {
\tfont-size: 22px;
\ttop: 4px;
}

.button.full-width {
\tmax-width: 100%;
\twidth: 100%;
\ttext-align: center;
\tdisplay: block;
}

.button.big {
\tfont-size: 18px;
\tpadding: 13px 22px;
}

body .button.big i {
\tfont-size: 22px;
\ttop: 3px;
\tposition: relative;
\t
}

/* Slide Out Button */
.button.button-slide-out span {
\ttransform: translateY(0px);
\topacity: 1;
\ttransition: 0.3s;
}

.button.button-slide-out:hover span {
\ttransform: translateY(-10px);
\topacity: 0;
\tdisplay: inline-block;
\ttransition: 0.3s;
}

.button.button-slide-out i {
\ttransform: translateY(calc(-50% + 10px));
\topacity: 0;
\tdisplay: inline-block;
\ttransition: 0.3s;
\tposition: absolute;
\tleft: 0;
\tright: 0;
\tfont-size: 18px;
\ttop: 50%;
\theight: 20px;
}

.button.button-slide-out:hover i {
\ttransform: translateY(calc(-50% + 0px));
\topacity: 1;
}


/* Move on Hover */
.move-on-hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.1);
\ttransform: translateY(0);
\ttransition: 0.3s;
}

.move-on-hover:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.2);
\ttransform: translateY(-2px)
}

/* Centered Button */
.centered-button {
\ttext-align: center;
\tdisplay: block
}

.centered-button .button {
\tmargin: 0 auto;
}


/* Bookmark Button */
span.bookmark-icon {
\tfont-size: 20px;
\tposition: absolute;
\tz-index: 101;
\tright: 35px;
\ttop: 35px;
\tcursor: pointer;
\tbackground-color: #eee;
\tcolor: #c0c0c0;
\tdisplay: block;
\theight: 39px;
\twidth: 39px;
\tborder-radius: 50%;
\ttransition: all 0.4s;
\tline-height: 27px;
}

.bookmark-icon.bookmarked { animation: bookmarked-shadow 0.3s; }

@keyframes bookmarked-shadow {
  0% { box-shadow: 0 0 0 0 rgba(254,179,66,0.8); }
  100% { box-shadow: 0 0 0 10px rgba(0,0,0,0); }
}


.bookmark-icon:before {
\ttransition: transform 0.4s cubic-bezier(.8,-.41,.19,2.5);
\tfont-family: \"Material-Icons\";
\tposition: absolute;
\tright: 0;
\tleft: 0;
\ttext-align: center;
\ttop: 6px;
\tcontent: \"\\e988\";
}

.bookmark-icon:hover {
\tbackground-color: #333;
\tcolor: #fff;
}

.bookmark-icon.bookmarked {
\tbackground-color: #feb342;
\tcolor: #fff;
}

.bookmark-icon.bookmarked:before {
\tanimation: bookmark-icon 0.5s;
}

@keyframes bookmark-icon {
  0% {
\t -webkit-transform: scale(0.8);
\t\t\t\ttransform: scale(0.8);
  }
  50% {
\t -webkit-transform: scale(1.2);
\t\t\t\ttransform: scale(1.2);
  }
  100% {
\t -webkit-transform: scale(1);
\t\t\t\ttransform: scale(1);
  }
}

/* Bookmark Button */
.bookmark-button {
\tbackground-color: #404040;
\tdisplay: inline-block;
\tpadding: 0;
\tposition: relative;
\theight: 44px;
\tline-height: 44px;
\tcolor: #fff;
\tpadding: 0 15px;
\tpadding-left: 59px;
\tborder-radius: 4px;
\ttransition: 0.4s;
\tcursor: pointer;
\tbox-shadow: 0 3px 12px rgba(0,0,0,0.1);
}

.bookmark-button .bookmark-icon,
.bookmark-button:hover .bookmark-icon { background-color: rgba(255,255,255,0.05) }

.bookmark-button .bookmark-icon {
\tborder-radius: 4px;
\tposition: absolute;
\tleft: 0;
\tright: auto;
\ttop: auto;
\theight: 44px;
\twidth: 44px;
\tborder-radius: 4px 0 0 4px;
\tpointer-events: none;
\ttransition: 0.4s;
\tanimation: none;
}

.bookmark-button .bookmark-icon:before {
\ttop: 8px;
\tcolor: #fff;
\ttransition: 0.4s;
\tfont-size: 18px;
}

.bookmark-button.bookmarked {
\tbackground-color: #feb342;
    color: #fff;
\tbox-shadow: 0 3px 12px rgba(254,179,66,0.2);
}

.bookmark-button.bookmarked .bookmark-icon:before,
.bookmark-button:hover .bookmark-icon:before {
    color: #fff;
}

.bookmark-button.bookmarked .bookmark-icon,
.bookmark-button.bookmarked:hover .bookmark-icon {
\tbackground-color: rgba(255,255,255,0.16)
}
.bookmark-button.bookmarked .bookmarked-text,
.bookmark-button .bookmark-text { display: block }

.bookmark-button.bookmarked .bookmark-text,
.bookmark-button .bookmarked-text { display: none; }


/* ---------------------------------- */
/* Button with sliding icon
------------------------------------- */
.button-sliding-icon { text-align: center; }
.button-sliding-icon i {
\topacity: 0;
\tmax-width: 0;
\ttransition: 0.25s;
\tdisplay: inline-block;
\ttransform: translateX(-20px);
}

.button-sliding-icon:hover i {
\tmax-width: 20px;
\topacity: 1;
\ttransform: translateX(0);
}


/* For buttons */
.button.button-sliding-icon {
\tpadding-left: 20px;
\tpadding-right: 10px;
}

.button.button-sliding-icon:hover {
\tpadding-right: 20px;
}

.button.button-sliding-icon i {
\tpadding-right: 5px;
}

.button.button-sliding-icon:hover i {
\tmax-width: 20px;
\topacity: 1;
\ttransform: translateX(0);
}



/* ---------------------------------- */
/* List Styles
------------------------------------- */
.list-3,
.list-2,
.list-1 {
\tpadding: 3px 0 0 0;
\tfont-size: 16px;
}

.list-3 li,
.list-2 li,
.list-1 li {
\tlist-style: none;
\tmargin: 10px 0;
\tline-height: 27px;
\tmargin-left: 20px;
\tposition: relative;
}

.list-3 li:first-child,
.list-2 li:first-child,
.list-1 li:first-child {
\tmargin-top: 0;
}

.list-4 li:before,
.list-3 li:before,
.list-2 li:before,
.list-1 li:before {
\tmargin: 0;
\tposition: relative;
\tcolor: #66676b;
\tfloat: left;
\tmargin-left: -20px;
\tdisplay: block;
}

.list-1.gray li:before {
\tcolor: #777;
}

.list-2 li,
.list-2 li { margin-left: 28px; }

.list-3 li:before,
.list-2 li:before {
\tfont-family: \"Material-Icons\"; 
\tcontent: \"\\e928\";
\tfont-size: 18px;
\tfont-weight: 600;
\tposition: relative;
\ttop: -2px;
\tmargin-left: -28px;
}

.list-3 li:before {
\tcontent: \"\\e912\";
\tfont-family: \"Feather-Icons\";
\tfont-weight: 500;
\tfont-size: 18px;
}

.list-1 li:before {
\tcontent: \"\";
\theight: 6px;
\twidth: 6px;
\tbackground-color: #66676b;
\tborder-radius: 2px;
\tposition: relative;
\ttop: 9px;
}

/* Numbered Style */
.numbered ol {
\tcounter-reset: li;
\tlist-style: none;
\tpadding: 0;
\tmargin-left: 18px;
\tdisplay: inline-block;
\tfont-size: 16px;
}

.numbered ol li {
\tdisplay: inline-block;
\tpadding: 6px 0;
\twidth: 100%;
}

.numbered ol > li::before {
\tcontent: counter(li);
\tcounter-increment: li;
\tfont-size: 16px;
\tline-height: 35px;
\twidth: 36px;
\theight: 36px;
\tdisplay: inline-block;
\tborder: 1px solid #333;
\tborder-radius: 50%;
\ttext-align: center;
\tmargin: 0;
\tmargin-left: 0;
\tfont-weight: 500;
\tcolor: #333;
\tposition: relative;
\tfloat: left;
\tleft: -18px;
\tfont-size: 15px;
\ttransform: translateY(-10%);
}

.numbered.color ol > li::before {
\tborder: 1px solid #66676b;
\tcolor: #66676b;
}

.numbered.color.filled ol > li::before {
\tborder: 1px solid #66676b;
\tcolor: #fff;
\tbackground-color: #66676b;
}


/* ---------------------------------- */
/* Marks
------------------------------------- */
mark {
\tbackground-color: #fcf8e3;
\tcolor: #8a803e;
\tpadding: 1px 5px;
}

mark.color {
    background-color: #66676b;
    border-radius: 4px;
    color: #fff;
}

/* ---------------------------------- */
/* Notification Boxes
------------------------------------- */
#result .success,
.notification {
\tline-height: 24px;
\tmargin-bottom: 15px;
\tposition: relative;
\tpadding: 20px 26px;
\tpadding-right: 50px;
\tborder-radius: 3px;
}

.notification p { margin: 0; font-size: 15px; }

#result .success,
.notification.success {
\tbackground-color: #EBF6E0;
}

#result .success,
.notification.success,
.notification.success a,
.notification.success strong {
\tcolor: #5f9025;
}

.notification.error {
\tbackground-color: #ffe9e9;
}
.notification.error,
.notification.error a,
.notification.error strong {
\tcolor: #de5959;
}

.notification.warning {
\tbackground-color: #FBFADD;
}
.notification.warning,
.notification.warning a,
.notification.warning strong {
\tcolor: #8f872e;
}

.notification.notice h4 { font-size: 19px; margin: 3px 0 15px 0; }
.notification.notice h4,
.notification.notice,
.notification.notice a,
.notification.notice strong {
\tcolor: #3184ae
}

.notification.notice {
\tbackground-color: #E9F7FE;
}

.notification.notice.large{
\tpadding: 32px 36px;
}

.notification strong { font-weight: 700; }
.notification a { text-decoration: underline; }


body .notification strong { border: none; }

.notification.success .close,
.notification.error .close,
.notification.warning .close,
.notification.notice .close {
\tpadding: 0px 9px;
\tposition: absolute;
\tright: 0;
\ttop: 22px;
\tdisplay: block;
\theight: 8px;
\twidth: 8px;
\tcursor: pointer;
}

.notification.notice p span i { font-weight: 500; }
.notification a.button {
\tfloat: right;
\tcolor: #fff;
\tmargin-top: 3px;
}

.notification.notice a.button { background-color: #388fc5; }
.notification.warning a.button { background-color: #dfbe51; }
.notification.error a.button { background-color: #d34c4c; }
.notification.success a.button { background-color: #79ba38; }

.notification.closeable a.close:before {
\tcontent: \"\\ea02\";
\tfont-family: \"Feather-Icons\";
\tposition: absolute;
\tright: 25px;
\ttop: 0;
\tcursor: pointer;
\tfont-weight: 600;
}


/* ---------------------------------- */
/* Tables
------------------------------------- */
table.basic-table {
\twidth: 100%;
\tborder-collapse: separate;
\tborder-spacing: 0;
\tborder:none;
\tmargin-bottom: 15px;
}

table.basic-table th {
\tbackground-color: #66676b;
\ttext-align: left;
\tcolor: #fff;
\tvertical-align: top;
\tfont-weight: 500;
}

table.basic-table th:first-child { border-radius: 4px 0 0 4px; }
table.basic-table th:last-child { border-radius: 0 4px 4px 0; }


table.basic-table th,
table.basic-table td {
\tpadding: 15px 28px;
}

table.basic-table tr:nth-child(odd) {
\tbackground-color: #f4f4f4;
}

table.basic-table { margin-bottom: 0; }


@media screen and (max-width: 600px) {

\ttable { border: 0; }
\ttable th { display: none; }

\ttable tr {
\t\tdisplay: block;
\t\tmargin-bottom: 0;
\t}
\ttable td {
\t\tborder-bottom: 1px solid #ddd;
\t\tdisplay: block;
\t\tfont-size: 14px;
\t\ttext-align: right;
\t}

\ttable td:before {
\t\tcontent: attr(data-label);
\t\tfloat: left;
\t\tfont-weight: 600;
\t}

\ttable td:last-child { border-bottom: 0; }
}

/* ---------------------------------- */
/* Accordion
------------------------------------- */
.accordion {
\tfont-size: 16px;
    width: 100%;
    margin: 0 auto;
    border-radius: 4px;
    overflow: hidden;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
}

.accordion .accordion {
\tborder-radius: 0px;
\tbox-shadow: none;
}

.accordion-header,
.accordion-body {
\tbackground: #fff;
}

.accordion-header {
\tpadding: 15px 25px;
\tbackground: #66676b;
\tcolor: #fff;
\tcursor: pointer;
\tfont-size: 16px;
\ttransition: all .3s;
\tposition: relative;
\tbox-shadow: 0 -1px 0 rgba(255,255,255,0.15);
}

.accordion .accordion .accordion-header {
\tbox-shadow: 0 -1px 0 rgba(0,0,0,0.07);
}

.accordion-header:before {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tbackground-color: #fff;
\tcontent: \"\";
\topacity: 0;
\ttransition: 0.3s;
}

.accordion-body__contents p:last-child {
\tmargin-bottom: 0;
\tpadding-bottom: 0;
}

/*.accordion__item.active .accordion-header:before,
.accordion-header:hover:before { opacity: 0.04; }*/

.accordion-body {
\tbackground: #fff;
\tcolor: #666;
\tdisplay: none;
}

.accordion-body__contents {
\tpadding: 25px;
\tfont-size: 16px;
\tline-height: 28px;
}

.accordion__item.active:last-child .accordion-header { border-radius: none; }
.accordion:first-child > .accordion__item > .accordion-header { border-bottom: 1px solid transparent; }

.accordion__item > .accordion-header:after {
\tcontent: \"\\e957\";
\tfont-family: Material-Icons;
\tfont-size: 19px;
\tfloat: right;
\tposition: relative;
\ttop: -1px;
\ttransition: .3s all;
\ttransform: rotate(0deg);
}

.accordion__item.active > .accordion-header:after { transform: rotate(-180deg); }
.accordion__item.active .accordion .accordion-header:before { opacity: 0 }

.accordion__item .accordion__item .accordion-header {
\tbackground: #f7f7f7;
\tcolor: #666;
}


/* ---------------------------------- */
/* Tabs
------------------------------------- */
.tabs ul {
\tpadding: 0;
\tlist-style: none;
\tmargin: 0;
}

.tabs {
\tz-index: 15px;
\tposition: relative;
\tbackground: #FFFFFF;
\twidth: 100%;
\tborder-radius: 4px;
\tbox-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
\tbox-sizing: border-box;
\tmargin: 0;
\toverflow: hidden;
}

.tabs-header {
\tposition: relative;
\tbackground: #66676b;
\toverflow: hidden;
}

.tabs-header .tab-hover {
\tposition: absolute;
\tbottom: 0;
\tleft: 0;
\tbackground: #fff;
\twidth: auto;
\theight: 100%;
\ttransition: 0.3s ease;
\topacity: 0.08;
\tz-index: 90;
}

.tabs-header ul {
\tdisplay: flex;
\tflex-direction: row;
\tflex-wrap: wrap;
\twidth: calc(100% - 100px);
\tposition: relative;
\tz-index: 100;
}

.tabs-header li { transition: 0.3s ease; }

.tabs-header a {
\tz-index: 1;
\tdisplay: block;
\tbox-sizing: border-box;
\tpadding: 15px 25px;
\tcolor: #fff;
\tfont-weight: 500;
\ttext-decoration: none;
}

.tabs-nav {
\tposition: absolute;
\ttop: 0;
\tright: 0;
\tdisplay: flex;
\talign-items: center;
\theight: 100%;
\tpadding: 0 15px;
\tcolor: #fff;
\tuser-select: none;
\tfont-size: 19px;
}

.tabs-nav i {
\tcursor: pointer;
\tdisplay: inline-block;
\tpadding: 0;
\theight: 30px;
\twidth: 30px;
\tline-height: 30px;
\tbackground-color: rgba(255,255,255,0.1);
\tborder-radius: 4px;
\ttext-align: center;
\tposition: relative;
\tz-index: 101;
\tmargin-left: 5px;
\ttransition: 0.3s;
}

.tabs-nav i:hover {
\tbackground-color: rgba(255,255,255,0.15);
}

.tabs-content {
\tposition: relative;
\ttransition: 0.3s ease;
\toverflow: hidden;
}

.tabs-content .tab {
\tpadding: 25px;
}

.tabs-content .tab p:last-child {
\tmargin-bottom: 0;
\tpadding-bottom: 0;
}

.tabs-content:after {
\tcontent: '';
\tposition: absolute;
\tbottom: -1px;
\tleft: 0;
\tdisplay: block;
\twidth: 100%;
\theight: 1px;
\tbox-shadow: 0 0 20px 10px #FFFFFF;
}

.tabs-content .tab { display: none; }
.tabs-content .tab.active {  display: block; }

@media (max-width: 992px) {
\t.tabs-nav { display: none; }
\t.tabs-header ul { flex-direction: column; width: 100%; }
\t.tab-hover { display: none; }
\t.tabs-header a { box-shadow: 0 -1px 0 rgba(255,255,255,0.15); }
\t.tabs-header ul li.active a {
\t\tbackground-color: rgba(255,255,255,0.07);
\t}
}


/* ---------------------------------- */
/* Copy to clipboard
------------------------------------- */
.copy-url {
\tdisplay: flex;
}

.copy-url input {
\tborder-radius: 4px 0 0 4px;
\tborder-right: 0;
}

.copy-url .copy-url-button {
\tmin-width: 48px;
\tbackground-color: #66676b;
\tcolor: #fff;
\tborder-radius: 0 4px 4px 0;
}


/* ---------------------------------- */
/* Share Buttons
------------------------------------- */
.share-buttons { display: block; }

.share-buttons-trigger {
\tdisplay: inline-block;
\theight: 44px;
\twidth: 44px;
\tline-height: 44px;
\ttext-align: center;
\tcolor: #a0a0a0;
\tfont-size: 18px;
\tbackground-color: #f0f0f0;
\tborder-radius: 4px;
\ttransition: 0.4s;
\tcursor: default;
}

.share-buttons-trigger i {
\tposition: relative;
\ttop: 1px;
}

.share-buttons-content {
\tdisplay: inline-block;
\tposition: relative;
\twidth: calc(100% - 60px)
}

.share-buttons-content span {
\tmargin-left: 10px;
\tcolor: #888;
\tcursor: default;
\tpadding: 10px 0;
\tdisplay: inline-block;
\ttransition: 0.4s;
}

.share-buttons-content span strong {
\tcolor: #66676b;
\tfont-weight: 600;
}

.share-buttons:hover .share-buttons-content span {
\topacity: 0;
\ttransition: 0.2s;
}

/* Icons */
.share-buttons-icons {
\tposition: absolute;
\tleft: 5px;
\ttop: 0;
\tpadding: 0;
\tmargin: 0;
\topacity: 0;
\ttransform: translateX(-10px);
\ttransition: all 0.4s cubic-bezier(0.5,-.41,.19,2);
}

.share-buttons:hover .share-buttons-icons{
\topacity: 1;
\ttransform: translate(0);
}

.share-buttons-icons li {
\tdisplay: inline-block;
\tfloat: left;
}

.share-buttons-icons li:first-child a { border-radius: 4px 0 0 4px; }
.share-buttons-icons li:last-child a { border-radius: 0 4px 4px 0; }

.share-buttons-icons li a {
\theight: 44px;
\twidth: 44px;
\tdisplay: inline-block;
\tline-height: 44px;
\ttext-align: center;
\tbackground-color: #333;
\tcolor: #fff;
\tfont-size: 14px;
}

.share-buttons-icons li a i {
\tposition: relative;
\ttop: 1px;
}



/* ---------------------------------- */
/* Verified Badge
------------------------------------- */
.job-listing-company .verified-badge,
.job-listing .job-listing-footer ul li .verified-badge {
\tposition: relative;
\tdisplay: inline-block;
\ttransform: scale(0.7);
\ttop: 2px;
\tmargin-left: -2px;
}

/* Verified Badge */
.verified-badge {
\tposition: relative;
\theight: 25px;
\twidth: 25px;
\tdisplay: inline-block;
\tbackground-color: #38b653;
\tborder-radius: 50%;
\ttext-align: center;
\tz-index: 10;
\tfont-weight: 500;
}

.verified-badge:before {
\tcontent: \"\\e92b\";
\tfont-family: \"Feather-Icons\";
\tfont-size: 16px;
\tcolor: #fff;
\tposition: relative;
\ttop: 0px;
\tline-height: 27px;
}

.job-listing .job-listing-company-logo .verified-badge {
\tposition: absolute;
\tbottom: 0;
\tright: 0;
\ttransform: translate(7px, 7px);
}

/* Long Verified Badge */
.verified-badge-with-title {
\tposition: relative;
\theight: 26px;
\tdisplay: flex;
\ttop: -1px;
\tcolor: #fff;
\tfont-weight: 500;
\tfont-size: 14px;
\tbackground-color: #30ab4a;
\ttext-align: center;
\tz-index: 10;
\tfont-weight: 500;
\tborder-radius: 4px;
\tpadding: 0 8px 0 0;
\tmargin: 0;
\toverflow: hidden;
\tpadding-left: 34px;
\tline-height: 27px;
}
.verified-badge-with-title:before {
\tcontent: \"\\e92b\";
\tfont-family: \"Feather-Icons\";
\tfont-size: 16px;
\tcolor: #fff;
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tline-height: 26px;
\theight: 26px;
\twidth: 26px;
\tdisplay: inline-block;
\tbackground-color: #38b653;
}


/* ---------------------------------- */
/* Star Rating
------------------------------------- */
/* Star Rating */
.star-rating { display: inline-block; }

.star-rating .star {
\tdisplay: inline-block;
\tmargin: 0;
\tpadding: 0;
\tfloat: left;
\tmargin-right: 0;
\tposition: relative;
}

.star-rating .star.half:after,
.star-rating .star:before {
\tfont-family: \"Material-Icons\";
\tcontent: \"\\e988\";
\tdisplay: block;
\tcolor: #febe42;
\tfont-size: 22px;
}

.star-rating .star.empty:before { color: #ddd; }

.rating:after {
\tcontent: \".\";
\tdisplay: block;
\tclear: both;
\tvisibility: hidden;
\tline-height: 0;
\theight: 0;
}

.star-rating .star.half:before { color: #ddd; }
.star-rating .star.half:after {
\tcolor: #febe42;
\tposition: absolute;
\ttop:0;
\twidth: 50%;
\tdisplay: block;
\theight: 100%;
\toverflow: hidden;
}

/* average rating before stars */
.star-rating:before { 
\tcontent: attr(data-rating);
\tfloat: left;
\tborder-radius: 4px;
\tbackground-color: #febe42;
\tcolor: #fff;
\tfont-size: 14px;
\tline-height: 15px;
\tfont-weight: 700;
\tpadding: 5px 7px;
\tposition: relative;
\ttop: 1px;
\tmargin-right: 10px;
}

/* No stars */
.star-rating.no-stars .star { display: none; }
.star-rating.no-stars:before { margin-right: 0; }

/* ---------------------------------- */
/* Leave Rating Stars
------------------------------------- */
.leave-rating {
\theight: 24px;
\tfloat: left;
\tposition: relative;
}

.leave-rating:hover input[type=\"radio\"]:checked ~ label { color: #dadada; }

.leave-rating input[type=\"radio\"] { 
    display: inline-block;
    width: 1px;
    position: absolute;
    opacity: 0;
    pointer-events: none;
    height: 100%;
    margin-left: 50%;
    left: 0;
    top: 0;
    transform: translateX(-50%);
}

.leave-rating input[type=\"radio\"]:checked ~ label { color: #ffc600; }

.leave-rating label {
\tfont-size: 24px;
\tfloat: right;
\tletter-spacing: 0px;
\tcolor: #dadada;
\tcursor: pointer;
\ttransition: 0.3s;
}

.leave-rating label:hover,
.leave-rating label:hover ~ label {
\tcolor: #ffc600 !important;
}

.leave-rating-title {
\tdisplay: block;
    margin: 0 0 4px 0;
}


.welcome-text .leave-rating-container {
\ttext-align: center;
\tmargin: 0 auto;
\tmargin-top: 15px;
\tleft: 50%;
\twidth: 100%;
\tdisplay: block;
}

.welcome-text .leave-rating {
    position: relative;
    left: 50%;
    transform: translateX(-50%) scale(1.2);
}


/* ---------------------------------- */
/* Ripple Effect
------------------------------------- */
.ripple-effect-dark,
.ripple-effect {
\toverflow: hidden;
\tposition: relative;
\tz-index: 1;
}

.ripple-effect span.ripple-overlay,
.ripple-effect-dark span.ripple-overlay {
\tanimation: ripple 0.9s;
\tborder-radius: 100%;
\tbackground: #fff;
\theight: 12px;
\tposition: absolute;
\twidth: 12px;
\tline-height: 12px;
\topacity: 0.1;
\tpointer-events: none;
}

.ripple-effect-dark span.ripple-overlay { background: #000; opacity: 0.07; }

@keyframes ripple {
  0% {
\t -webkit-transform: scale(4);
\t\t\t\ttransform: scale(4);
  }
  100% {
\t opacity: 0;
\t -webkit-transform: scale(40);
\t\t\t\ttransform: scale(40);
  }
}

/* ---------------------------------- */
/* Input With Icon
------------------------------------- */
.input-with-icon {
\tdisplay: block;
\tposition: relative;
}

.input-with-icon input {
\tpadding-right: 45px;
}

.input-with-icon i {
\tposition: absolute;
\ttop: 50%;
\ttransform: translateY(-50%);
\tright: 15px;
\tfont-size: 20px;
\tcolor: #a0a0a0;
\tfont-style: normal;
\tcursor: normal;
\tpointer-events: none;
}

.input-with-icon i.currency {
\tfont-size: 14px;
}

/* Input with boxed icon */
.input-with-icon-left {
\tposition: relative;
}

.input-with-icon-left input {
\tpadding-left: 65px;
}

.input-with-icon-left i {
\tposition: absolute;
\ttop: 0;
\tcolor: #a0a0a0;
\ttext-align: center;
\tline-height: 48px;
\twidth: 48px;
\theight: 48px;
\tfont-size: 19px;
\tbackground-color: #f8f8f8;
\tborder: 1px solid #e0e0e0;
\tbox-sizing: border-box;
\tdisplay: block;
\tborder-radius: 4px 0 0 4px;
}

.input-with-icon-left.no-border i {
\tborder: none;
}


/* ---------------------------------- */
/* Keywords Input
------------------------------------- */
.keywords-container { margin-bottom: -15px; }

.keywords-list {
\tdisplay: block;
\tfloat: left;
\theight: 0;
}

.keyword {
\tbackground-color: rgba(102,103,107,0.07);
\tcolor: #66676b;
\tdisplay: inline-block;
\tfloat: left;
\tpadding: 0;
\tborder-radius: 4px;
\tcursor: default;
\tmargin: 0 7px 7px 0;
\theight: 35px;
\tline-height: 35px;
\tbox-sizing: border-box; 
\tanimation: KeywordIn 0.3s ease-in-out;
\tanimation-fill-mode: both;
\ttransition: 0.4s;
\toverflow: hidden;
\tmax-width: 100%;
\tfont-size: 14.7px;
}

@keyframes KeywordIn {
\t0% {
\t\topacity: 0;
\t\ttransform: scale(0.9);
\t}
\t100% {
\t\topacity: 1;
\t\ttransform: scale(1);
\t}
}

.keyword.keyword-removed {
    max-width: 0;
    margin: 0;
    overflow: hidden;
    opacity: 0;
\tanimation: KeywordOut 0.4s ease-in-out;
\tanimation-fill-mode: both;
\tpointer-events: none;
}

@keyframes KeywordOut {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 0;
\tmargin-top: -35px;
  }
}

.keyword-text { padding-right: 12px;  }

.keyword .keyword-remove:before {
\tdisplay: inline-block;
\tcursor: pointer;
\tfont-family: \"Feather-Icons\";
\tcontent: \"\\ea02\";
\tline-height: 20px;
\tposition: relative;
\ttop: 2px;
\tmargin-right: 4px;
\tmargin-left: 10px;
\tfont-size: 15px;
}

.keyword-input-container {
\tposition: relative;
}

.keyword-input-container .keyword-input-button {
\tposition: absolute;
\ttop: 0;
\tright: 0;
\theight: 36px;
\twidth: 36px;
\tpadding: 0;
\tcolor: #fff;
\tbackground-color: #66676b; 
\tborder-radius: 4px;
\tmargin: 6px;
\tfont-size: 19px;
\ttext-align: center;
\tline-height: 36px;
}

.keyword-input-container .keyword-input-button i {
\tcolor: #fff;
\tposition: relative;
\ttop: 2px;
}

input.keyword-input { margin: 0 0 15px 0; }


/* ---------------------------------- */
/* Clickable Tags
------------------------------------- */
.tags-container { display: block; }

.tags-container input[type=\"checkbox\"] {
  display: none;
}

.tags-container input[type=\"checkbox\"] + label {
\ttransition: 0.3s;
\tfont-size: 14.7px;
\tcursor: pointer;
\tborder-radius: 4px;
\tbackground-color: #eee;
\tcolor: #777;
\tdisplay: inline-block;
\tpadding: 6px 15px;
\tmargin: 0;
\tline-height: 24px;
}

.tags-container input[type=\"checkbox\"] + label:hover {
\tbackground-color: #e8e8e8;
}

.tags-container input[type=\"checkbox\"]:checked + label {
\tbackground-color: #66676b;
\tcolor: #fff;
\ttransition: 0.3s;
}

.tags-container input[type=\"checkbox\"] + label:before {
\tfont-family: \"Feather-Icons\";
\tcontent: \"\\e92b\";
\tfont-size: 18px;
\ttransition: all 0.35s cubic-bezier(0.5,-.41,.19,2), max-width 0.3s, margin 0.3s;
\tmax-width: 0;
\tdisplay: inline-block;
\tposition: relative;
\ttop: 3px;
\tmargin: 0;
\topacity: 0;
\tcolor: #fff;
\tline-height: 0;
\ttransform: scale(0.5);
}

.tags-container input[type=\"checkbox\"]:checked + label:before {
\tmax-width: 30px;
\topacity: 1;
\ttransform: scale(1);
\tmargin: 0 5px 0 -2px;
}

.tags-container .tag {
\tdisplay: inline-block;
\tfloat: left;
\tmargin: 0 7px 7px 0;
\toverflow: hidden;
}


/* ---------------------------------- */
/* On/Off Switch
------------------------------------- */
.switches-list .switch-container {
\twidth: 100%
}

.switches-list .switch-container:last-child label {
\tmargin-bottom: 0;
}

.switch-container {
\tdisplay: inline-block;
\tcursor: pointer;
}

label.switch { position: relative; }

.switches-list .switch-container label {
\tcursor: pointer;
\tposition: relative;
\tpadding-left: 45px;
\tline-height: 26px;
}

.switch-button {
\tposition: relative;
\tdisplay: inline-block;
\twidth: 34px;
\theight: 20px;
\tcursor: pointer;
\tbackground-color: #ccc;
\tborder-radius: 50px;
\ttransition: 0.4s;
\tmargin: 0 7px 0 0;
\ttop: 4px;
\tposition: absolute;
\ttop: 2px;
\tleft: 0;
}

.notify-box .switch-button {
    top: 0;
}

.notify-box .switch-container {
    top: 1px;
    position: relative;
    
}

.switch span.switch-text {
\tdisplay: block;
\tpadding-left: 48px;
\tfont-size: 16px;
\tline-height: 22px;
\tcolor: #666;
}

.switch input {display:none;}

.switch.interactive-effect input:checked + .switch-button:before {
\tanimation: switch-shadow-color 0.4s;
}

.switch.interactive-effect .switch-button:before {
\tanimation: switch-shadow 0.4s;
}

@keyframes switch-shadow {
  0% { box-shadow: 0 0 0 0 rgba(0,0,0,0.3); }
  100% { box-shadow: 0 0 0px 10px rgba(0,0,0,0); }
}

@keyframes switch-shadow-color {
  0% { box-shadow: 0 0 0 0 rgba(102,103,107,0.6); }
  100% { box-shadow: 0 0 0px 10px rgba(0,0,0,0); }
}

.switch-button:before {
\tposition: absolute;
\tcontent: \"\";
\theight: 16px;
\twidth: 16px;
\tbottom: 2px;
\tleft: 2px;
\tbackground-color: white;
\ttransition: 0.4s, box-shadow 0.3s;
\tborder-radius: 50px;
}

input:checked + .switch-button {
\tbackground-color: #66676b;
}

input:checked + .switch-button:before {
\ttransform: translateX(14px);
}


/* ---------------------------------- */
/* Radio Button
------------------------------------- */

.radio {
\tdisplay: inline-block;
\tvertical-align: top;
}

.radio label {
\tmargin: 3px 0;
\tcursor: pointer;
\tposition: relative;
\tpadding-left: 29px;
\tline-height: 25px;
}

.radio input[type=\"radio\"] {
\tposition: absolute;
\topacity: 0;
}

.radio input[type=\"radio\"] + label .radio-label {
\tcontent: '';
\tbackground: #fff;
\tborder-radius: 100%;
\tborder: 2px solid #b4b4b4;
\tdisplay: inline-block;
\twidth: 18px;
\theight: 18px;
\tposition: relative;
\tmargin-right: 5px;
\tvertical-align: top;
\tcursor: pointer;
\ttext-align: center;
\ttransition: all 250ms ease;
\tbackground-color: #fff;
\tbox-shadow: inset 0 0 0 8px #fff;
\tz-index: 100;
\tposition: absolute;
\ttop: 2px;
\tleft: 0;
}

.radio input[type=\"radio\"] + label .radio-label:after {
\tbackground-color: #66676b;
\tcontent: \"\";
\ttop: 3px;
\tleft: 0;
\tright: 0;
\tmargin: 0 auto;
\tposition: absolute;
\topacity: 1;
\ttransition: 0.3s;
\tborder-radius: 50%;
\ttransform: scale(0);
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    z-index: 99;
}

.radio input[type=\"radio\"]:checked + label .radio-label {
\tbackground-color: #66676b;
\tborder-color: #66676b;
\tbox-shadow: inset 0 0 0 3px #fff;
}

.radio-label:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\theight: 100%;
\twidth: 100%;
\tborder-radius: 50%;
\tbackground-color: transparent;
\tdisplay: block
}

.interactive-effect label .radio-label:before {
\tanimation: radius-shadow 0.4s;
}

@keyframes radius-shadow {
  0% { box-shadow: 0 0 0 0 rgba(102,103,107,0.4); }
  100% { box-shadow: 0 0 0 10px rgba(0,0,0,0); }
}

.small-label {
\tborder-radius: 4px;
\tdisplay: inline-block;
\tbackground: #e0f5d7;
\tcolor: #449626;
\tpadding: 0 8px;
\tline-height: 27px;
\theight: 26px;
\tmargin-left: 5px;
\tposition: relative;
\ttop: -1px;
}


/* ---------------------------------- */
/* Checkbox
------------------------------------- */
.checkbox {
\tdisplay: inline-block;
\tmargin-bottom: 0;
}

.checkbox input {
\tpadding: 0;
\theight: initial;
\twidth: initial;
\tmargin-bottom: 0;
\tdisplay: none;
\tcursor: pointer;
}

.checkbox label {
\tposition: relative;
\tcursor: pointer;
\tpadding-left: 30px;
\tline-height: 25px;
}

.checkbox label span.checkbox-icon {
\tcontent:'';
\t-webkit-appearance: none;
\tbackground-color: transparent;
\tborder: 2px solid #b4b4b4;
\theight: 20px;
\twidth: 20px;
\tdisplay: inline-block;
\tposition: relative;
\tvertical-align: middle;
\tcursor: pointer;
\tmargin-right: 5px;
\tborder-radius: 4px;
\ttransition: 0.3s;
\tposition: absolute;
\tleft: 0;
\ttop: 1px;
}

.checkbox input + label span.checkbox-icon:after {
\tposition: absolute;
\ttop: 2px;
\tleft: 0;
\tright: 0;
\tmargin: 0 auto;
\topacity: 0;
\tcontent: '';
\tdisplay: block;
\twidth: 6px;
\theight: 10px;
\tborder: solid #fff;
\tborder-width: 0 2px 2px 0;
\ttransform: scale(0.5) rotate(45deg);
\ttransition: all 0.35s cubic-bezier(0.3,-.41,.19,2), opacity 0.3s;
}

.checkbox input:checked + label span.checkbox-icon {
\tborder-color: #66676b;
\tbackground-color: #66676b;
}

.checkbox input:checked + label span.checkbox-icon:after {
\ttransform: scale(1) rotate(45deg);
\topacity: 1;
}


/* ---------------------------------- */
/* Custom Upload Button
------------------------------------- */
.uploadButton {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-bottom: 10px;
  width: 100%;
  font-style: normal;
  font-size: 14px;
}

.uploadButton .uploadButton-input {
  opacity: 0;
  position: absolute;
  overflow: hidden;
  z-index: -1;
  pointer-events: none;
}

.uploadButton .uploadButton-button {
\tdisplay: flex;
\talign-items: center;
\tjustify-content: center;
\tbox-sizing: border-box;
\theight: 44px;
\tpadding: 10px 18px;
\tcursor: pointer;
\tborder-radius: 4px;
\tcolor: #66676b;
\tbackground-color: transparent;
\tborder: 1px solid #66676b;
\tflex-direction: row;
\ttransition: 0.3s;
\tmargin: 0;
\toutline: none;
\tbox-shadow: 0 3px 10px rgba(102,103,107,0.1);
}

.uploadButton .uploadButton-button:hover {
\tbackground-color: #66676b;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
\tcolor: #fff;
}

.uploadButton .uploadButton-file-name {
\tflex-grow: 1;
\tdisplay: flex;
\talign-items: center;
\tflex: 1;
\tbox-sizing: border-box;
\tpadding: 0 10px;
\tpadding-left: 18px;
\tmin-height: 42px;
\ttop: 1px;
\tposition: relative;
\tcolor: #888;
\tbackground-color: transparent;
\toverflow: hidden;
\tline-height: 22px;
}


/* ---------------------------------- */
/* Intro Banner
------------------------------------- */
.intro-banner {
\tpadding: 105px 0;
\tposition: relative;
}

.intro-banner.big-padding {
\tpadding: 130px 0;
}

.intro-banner .container {
\tz-index: 100;
\tposition: relative;
}

.intro-banner:after,
.intro-banner:before {
    content: \"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    z-index: 15;
    background: linear-gradient(to right,rgba(250,250,250,1) 20%, rgba(250,250,250,.95) 50% ,rgba(250,250,250,0.1) 80%,rgba(250,250,250,0) 100%);
}

.intro-banner:after {
    z-index: 5;
    background-color: #fafafa;
}

.intro-banner .background-image-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 100% 60%;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 90%;
    left: 10%;
    z-index: 10;
    overflow: hidden;
}

/* Disabled Gradient */
.intro-banner.disable-gradient:before {
\tbackground: #f2f2f2;
\topacity: 0.85;
}

.intro-banner.disable-gradient .background-image-container {
\tleft: 0;
\twidth: 100%;
}

/* Banner Headline */
.banner-headline {
\tdisplay: block;
\tmax-width: 55%;
}

.banner-headline h1,
.banner-headline h2,
.banner-headline h3,
.banner-headline h4 {
\tfont-size: 28px;
\tfont-weight: 300;
\tcolor: #777;
\tline-height: 42px;
}

.banner-headline strong {
\tfont-weight: 600;
\tcolor: #333;
} 

.banner-headline strong.color {
\tcolor: #66676b;
}


/* Alternative Headline */
.banner-headline-alt {
\tmargin: -10px 0 0 0;
\tdisplay: block;
}

.banner-headline-alt h3 {
\tfont-size: 40px;
\tfont-weight: 600;
\tcolor: #333;
\tline-height: 50px;
}

.banner-headline-alt span {
\tfont-size: 24px;
\tcolor: #888;
\tfont-weight: 300;
\tline-height: 34px;
\tmargin-top: 5px;
\tdisplay: inline-block;
}
.dark-overlay .banner-headline-alt h3 { color: #fff; }
.dark-overlay .banner-headline-alt span { color: rgba(255,255,255,0.7); }

/* Banner Search Form */
.intro-banner-search-form {
\tdisplay: flex;
\twidth: 100%;
\tbackground-color: #fff;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 12px rgba(0,0,0,0.09);
}

/* Video */
.video-container {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tz-index: 10;
\toverflow: hidden;
\tbackground-size: cover;
\tbackground-position: 50%;
}

.video-container video {
\ttop: 50%;
\ttransform: translateY(-50%);
\tleft: 0;
\tmin-width: 100%;
\tmin-height: 100%;
\twidth: auto;
\theight: auto;
\tz-index: -10;
\tbackground-size: cover;
\ttransition: 1s opacity;
\tposition: absolute;
\tz-index: 9;
}

/* Field Row Styles */
.intro-search-field {
\tpadding: 10px 12px;
\tborder-right: 1px solid #e4e4e4;
\tflex: 1;
    align-items: center;
    display: flex;
    position: relative;
}

.intro-search-field .field-title {
\tcontent: attr(data-field-tiele);
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tbackground: #66676b;
\tcolor: #fff;
\tborder-radius: 4px;
\tpadding: 5px 10px;
\tline-height: 22px;
\ttransform: translateY(calc(-100% - 15px));
\tcursor: default;
}

.intro-banner-search-form .intro-search-field:nth-last-child(2) {
\tborder-right: none;
}

.intro-search-button {
\tmargin: 8px;
\tmargin-left: 0;
\tflex: auto;
\tflex-grow: 0;
\tdisplay: flex;
    align-items: center;
}

.intro-search-button .button {
\theight: 52px;
\tline-height: 52px;
\tpadding: 0 30px;
\tfont-size: 18px;
}

/* Field Styles */
.intro-banner-search-form input:focus { box-shadow: none;}
.intro-banner-search-form input {
\tbox-shadow: none;
\tfont-size: 18px;
\tmargin: 0;
}

.intro-banner-search-form input::placeholder {
\tcolor: #888;
}

.intro-banner-search-form .input-with-icon  {
\talign-self: center;
\tflex: 1;
}

.intro-banner-search-form  input {
\tpadding: 10px 15px;
}
.intro-banner-search-form .input-with-icon input {
\tpadding: 10px 15px;
\tpadding-left: 43px;
}

.intro-banner-search-form .input-with-icon i {
    position: absolute;
    right: auto;
    left: 10px;
    top: calc(50% - 1px);
    font-size: 24px;
    color: #b0b0b0;
}

/* Autocomplete Adjustment */
.intro-search-field.with-autocomplete .pac-container {
\tborder: none;
    padding-top: 0;
    z-index: 9;
    left: 0 !important;
    top: 100% !important;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    width: 100% !important;
    margin-top: 0;
    overflow: visible;
}

.intro-search-field.with-autocomplete .pac-container:before {
\tcontent: \"\";
\tposition: absolute;
\tbackground-color: #fff;
\twidth: 100%;
\theight: 5px;
\tdisplay: block;
\ttop: -5px;
\tleft: 0;
}

/* Dropdown Adjustment */
.intro-search-field .bootstrap-select.btn-group button {
\tpadding: 0 15px;
\tbox-shadow: none;
\tfont-size: 18px;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.intro-search-field .field-title {
\t\ttransform: translateY(-100%);
\t\tmargin-top: -15px;
\t}
\t.intro-banner-search-form input { line-height: 20px; } 
\t.intro-search-field .bootstrap-select.open .dropdown-menu { top: 55px; }
}
/* IE 11 Fixes - End */

/* Intro Stats */
.intro-stats {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
\tdisplay: flex;
}

.intro-stats li {
\tflex: auto;
\tflex-grow: 0;
\tmargin-right: 35px;
\tpadding-right: 35px;
\tborder-right: 1px solid #e0e0e0;
}

.intro-stats li:last-child {
\tmargin-right: 0;
\tpadding-right: 0;
\tborder-right: none;
}

.intro-stats li span,
.intro-stats li strong {
\tdisplay: block;
\tmargin: 0;
\tpadding: 0;
}

.intro-stats li strong {
\tfont-weight: 600;
\tcolor: #333;
\tfont-size: 28px;
\tmargin-bottom: 2px;
}

.intro-stats li span {
\tfont-weight: 300;
\tcolor: #888;
\tfont-size: 18px;
}


/* Dark Style */
.intro-banner.dark-overlay:before {
\tbackground: #333;
\topacity: 0.75;
}

.intro-banner.dark-overlay .background-image-container {
\tleft: 0;
\twidth: 100%;
    background-position: 100%;
}

.intro-banner.dark-overlay .intro-stats li span,
.intro-banner.dark-overlay .banner-headline strong,
.intro-banner.dark-overlay .banner-headline h1,
.intro-banner.dark-overlay .banner-headline h2,
.intro-banner.dark-overlay .banner-headline h3,
.intro-banner.dark-overlay .banner-headline h4 {
\tcolor: rgba(255,255,255,0.7);
}

.intro-banner.dark-overlay .intro-stats li strong,
.intro-banner.dark-overlay .banner-headline strong { color: #fff; }
.intro-banner.dark-overlay .intro-banner-search-form { box-shadow: 0 3px 12px rgba(0,0,0,0.2); }
.intro-banner.dark-overlay .intro-stats li { border-right: 1px solid rgba(255,255,255,0.25); }
.intro-banner.dark-overlay .intro-stats li:last-child { border-right: none; }


/* Intro Banner Media Queries
------------------------------------- */
@media (max-width: 1366px) {
\t.banner-headline h1,
\t.banner-headline h2,
\t.banner-headline h3,
\t.banner-headline h4 {
\t    font-size: 26px;
\t    line-height: 42px;
\t}
}

@media (max-width: 1240px) {
\t.banner-headline { max-width: 65% }
}

@media (max-width: 992px) {

\t.intro-search-field .bootstrap-select.btn-group .dropdown-toggle .filter-option { height: auto; line-height: 20px; }

\t.intro-banner { padding: 70px 0; }

\t.banner-headline { max-width: 100% }
\t.banner-headline h1,
\t.banner-headline h2,
\t.banner-headline h3,
\t.banner-headline h4 {
\t    font-size: 24px;
\t    line-height: 38px;
\t}
\t
\t/* Alternative Banner Style */
\t.intro-banner.dark-overlay .intro-banner-search-form { box-shadow: none }
\t.intro-banner.big-padding {  padding: 70px 0; }

\t.banner-headline-alt { margin-bottom: 0; }
\t.banner-headline-alt h3 { font-size: 36px; line-height: 42px; }
\t.banner-headline-alt span { font-size: 22px; line-height: 32px; }

\t/* Photo Position */
\t.intro-banner:after,
\t.intro-banner:before {
\t    background: rgba(250,250,250,0.9);
\t}

\t.intro-banner .background-image-container {
\t\tbackground-size: cover;
\t\theight: 100%;
\t\twidth: 100%;
\t\tleft: 0;
\t}
\t/* Photo Position - End*/

\t.intro-banner-search-form .intro-search-field .bootstrap-select.btn-group button,
\t.intro-banner-search-form input {
\t    height: 56px;
\t    padding: 15px 22px;
\t}

\t.intro-banner-search-form .input-with-icon i { left: 17px; }
\t.intro-banner-search-form .input-with-icon input { padding-left: 50px; }

\t.intro-banner-search-form.margin-top-100,
\t.intro-banner-search-form.margin-top-95,
\t.intro-banner-search-form.margin-top-90,
\t.intro-banner-search-form.margin-top-85 {
\t\tmargin-top: 20px !important;
\t}

\t.intro-banner-search-form {
\t\tflex-direction: column;
\t\tbackground: transparent;
\t\tbox-shadow: none;
\t\tmargin-top: 20px;
\t}

\t.intro-banner-search-form .intro-search-field {
\t\tpadding: 0;
\t\tborder-radius: 4px;
\t\tbox-shadow: 0 2px 12px rgba(0,0,0,0.07);
\t\tmargin-top: 20px;
\t}

\t.intro-banner-search-form .intro-search-field.with-label {
\t\tmargin-top: 80px;
\t}

\t.intro-banner-search-form .intro-search-button {
\t\tmargin-top: 30px;
\t}

\t/* Intro Stats */
\t.intro-stats {
\t\tflex-direction: column;
\t\tbackground: #fff;
\t\tpadding: 20px;
\t\tborder-radius: 4px;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,0.1);
\t\tjustify-content: center;
\t}

\t.intro-stats li {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\tmargin: 0 0 10px 0;
\t\tpadding: 0 0 10px 0;
\t\tborder: none;
\t\tborder-bottom: 1px solid #eee;
\t\twidth: 100%;
\t\talign-self: center;
\t\ttext-align: center;
\t}

\t.intro-stats li:last-child {
\t\tmargin-bottom: 0;
\t\tpadding-bottom: 0;
\t\tborder: none;
\t}

}


/* ---------------------------------- */
/* Category Boxes
------------------------------------- */
.categories-container {
\tdisplay: flex;
\tflex-wrap: wrap;
}

.category-box {
\tflex: 0 0 25%;
\talign-content: center;
\tjustify-content: center;
\tdisplay: flex;
\tflex-direction: column;
\tmargin: 0;
\ttext-align: center;
\tpadding: 25px;
\tborder-radius: 4px;
\ttransition: 0.35s;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.category-box { max-width: 25%; text-align: center; }
\t.category-box-counter { width: 50px !important; }
}
/* IE 11 Fixes - End */

/* Box Icon */
.category-box-icon {
\tfont-size: 42px;
\tline-height: 32px;
\tcolor: #66676b;
\tposition: relative;
}

.category-box-icon i {
\theight: 42px;
\tdisplay: block;
\ttransition: 0.35s;
\tmargin-bottom: 12px;
}

/* Box Counter */
.category-box-counter {
\twidth: auto;
\theight: 24px;
\tfont-size: 14px;
\tline-height: 25px;
\tborder-radius: 4px;
\tpadding: 0 8px;
\tcolor: #909090;
\tbackground: rgba(0,0,0,0.06);
\tfont-weight: 600;
\tdisplay: inline-block;
\tmargin: 0 auto;
\ttransition: 0.35s;
\tmargin-bottom: 18px;
}

/* Box Content */
.category-box-content h3 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tmargin: 0;
\tpadding: 0;
\ttransition: 0.35s;
}

.category-box-content p {
\tcolor: #888;
\tmargin: 0;
\tpadding: 0;
\tline-height: 24px;
\tmargin-top: 5px;
\ttransition: 0.35s;
}

/* Hover State */
.category-box:hover {
\tbackground: #66676b;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.2);
\tcolor: #fff;
}

.category-box:hover .category-box-content h3,
.category-box:hover .category-box-icon { color: #fff; }
.category-box:hover .category-box-content p { color: rgba(255,255,255,0.7); }

.category-box:hover .category-box-counter {
\tbackground: rgba(0,0,0,0.2);
\tcolor: #fff;
}

/* Media Queries for Category Boxes */
@media (max-width: 1240px) {
\t.category-box {
\t    flex: 0 0 33.3%;
\t}
}

@media (max-width: 768px) {
\t.category-box {
\t    flex: 0 0 50%;
\t}
}

@media (max-width: 480px) {
\t.category-box {
\t    flex: 0 0 100%;
\t    margin-right: 0;
\t}
}

/* ---------------------------------- */
/* Photo Box
------------------------------------- */
.photo-box {
\tborder-radius: 4px;
\theight: 360px;
\tdisplay: block;
\tposition: relative;
\tbackground-size: cover;
\tbackground-position: 100%;
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.2);
\ttransition: 0.4s;
\tmargin: 0 0 25px 0;
}

.photo-box:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\theight: 100%;
\twidth: 100%;
\tbackground: #333;
\topacity: 0.5;
\tborder-radius: 4px;
\ttransition: 0.4s;
}

.photo-box-content {
\tposition: absolute;
\tbottom: 30px;
\tleft: 30px;
}

.photo-box-content h3 {
\tcolor: #fff;
\tfont-size: 20px;
\tline-height: 28px;
}

.photo-box-content span {
\tcolor: #333;
\tbackground: #fff;
\tborder-radius: 4px;
\tfont-size: 15px;
\tfont-weight: 500;
\tpadding:  4px 10px;
\tline-height: 20px;
\tmargin-top: 8px;
\tdisplay: inline-block;
}

/* Hover State */
.photo-box:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
\ttransform: translateY(-10px);
}

.photo-box:hover:before {
\tbackground: #66676b;
\topacity: 0.95;
}

/* Small Photobox Styles */
.photo-box.small { height: 160px; margin-bottom: 30px }
.photo-box.small:hover { transform: translateY(-5px);}

.photo-box.small .photo-box-content {
\tleft: 0;
\tright: 0;
\tmargin: 0 auto;
\ttext-align: center;
\tbottom: auto;
\ttop: 50%;
\ttransform: translateY(-49%);
}

.photo-box.small .photo-box-content h3 {
\tfont-size: 16px;
\tfont-weight: 600;
}

.photo-box.small .photo-box-content span {
\tcolor: #fff;
\tbackground: #66676b;
\tfont-size: 14px;
\tline-height: 18px;
\tmargin-top: 5px;
\ttransition: 0.3s;
}

.photo-box.small:hover .photo-box-content span {
\tcolor: #fff;
\tbackground: rgba(0,0,0,0.2);
}


/* ---------------------------------- */
/* Pricing Plans
------------------------------------- */
.billing-cycle-radios {
\tdisplay: block;
\tmargin: 0 auto;
\ttext-align: center;
}

.billing-cycle-radios.text-align-left {
\ttext-align: left;
}

.billing-cycle-radios .radio { margin-right: 20px; }
.billing-cycle-radios .radio:last-child { margin-right: 0; }


/* Pricing Plans Container */
.pricing-plans-container {
\tborder-radius: 4px;
\tbox-shadow: 0 0 25px rgba(0,0,0,0.1);
\tdisplay: flex;
}

.pricing-plan {
\tflex: 1;
\tpadding: 35px 17px;
\tposition: relative;
}

.pricing-plan:first-of-type {
\tpadding-left: 35px;
}

.pricing-plan:last-of-type {
\tpadding-right: 35px;
}

.pricing-plan h3 {
\tfont-size: 20px;
\tfont-weight: 600;
}

.pricing-plan p {
\tmargin: 0;
}

/* Label Switcher */
.billed-yearly-label { display: none; }
.billed-yearly .billed-yearly-label { display: block; }
.billed-yearly .billed-monthly-label { display: none; }

/* Pricing Plan Label */
.pricing-plan-label {
\tbackground: #f6f6f6;
\tborder-radius: 4px;
\tfont-size: 18px;
\tcolor: #888;
\ttext-align: center;
\tline-height: 24px;
\tpadding: 15px;
\tmargin: 22px 0;
}

.pricing-plan-label strong {
\tfont-size: 32px;
\tfont-weight: 700;
\tcolor: #333;
\tmargin-right: 5px;
\tline-height: 30px;
}

.recommended .pricing-plan-label {
\tbackground-color: rgba(102,103,107,0.06);
\tcolor: #66676b;
}
.recommended .pricing-plan-label strong {
\tcolor: #66676b;
}

/* Pricing Plan Features */
.pricing-plan-features strong {
\tcolor: #333;
\tfont-weight: 600;
\tmargin-bottom: 5px;
\tline-height: 24px;
\tdisplay: inline-block;
}

.pricing-plan-features ul {
\tpadding: 0;
\tmargin: 0;
}

.pricing-plan-features ul li {
\tdisplay: block;
\tmargin: 0;
\tpadding: 3px 0;
\tline-height: 24px;
}

/* Pricing Plan Button */
.pricing-plan .button:hover,
.pricing-plan.recommended .button {
\tcolor: #fff;
\tbackground-color: #66676b;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

.pricing-plan .button {
\tcolor: #66676b;
\tbackground-color: #fff;
\tborder: 1px solid #66676b;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.1);
}

.pricing-plan .button:hover { box-shadow: 0 4px 12px rgba(102,103,107,0.15); }

/* Recommended Plan */
.pricing-plan.recommended {
\tbox-shadow: 0 0px 45px rgba(0,0,0,0.09);
\tpadding: 35px;
\tmargin: 0 15px;
}

.pricing-plan .recommended-badge {
\tbackground-color: #66676b;
\tcolor: #fff;
\tposition: absolute;
\twidth: 100%;
\theight: 45px;
\ttop: -45px;
\tleft: 0;
\ttext-align: center;
\tborder-radius: 4px 4px 0 0;
\tfont-weight: 600;
\tline-height: 45px;
}

/* Media Queries for Pricing Plans */
@media (max-width: 992px) {
\t.pricing-plans-container {
\t\tbox-shadow: none;
\t\tdisplay: block;
\t\tmargin-top: -40px;
\t}

\t.pricing-plan {
\t\tbox-shadow: 0 0 25px rgba(0,0,0,0.1);
\t\tmargin-bottom: 40px;
\t\tflex: auto;
\t\twidth: 100%;
\t\tborder-radius: 4px;
\t\tpadding: 35px;
\t}

\t.pricing-plan.recommended {
\t\tpadding: 35px;
\t\tmargin: 0 0 40px 0;
\t}

\t.recommended.pricing-plan {
\t\tbox-shadow: 0 0 25px rgba(0,0,0,0.1);
\t\tmargin-top: 80px;
\t}
}


/* ---------------------------------- */
/* Checkout Page
------------------------------------- */

/* Checkout Headline */
.headline-border-top {
\tborder-top: 1px solid #e0e0e0;
}

/* Boxed Widget */
.boxed-widget {
\tbackground-color: #f9f9f9;
\tpadding: 0;
\ttransform: translate3d(0,0,0);
\tz-index: 90;
\tposition: relative;
\tborder-radius: 4px;
\toverflow: hidden;
}

.boxed-widget-headline {
    color: #333;
    font-size: 20px;
    padding: 20px 30px;
    background-color: #f0f0f0;
    color: #333;
    position: relative;
    border-radius: 4px 4px 0 0;
}

.boxed-widget-headline h3 {
\tfont-size: 20px;
\tpadding: 0;
\tmargin: 0;
}

.boxed-widget-inner {
\tpadding: 30px;
}

.boxed-widget ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

.boxed-widget ul li span {
    float: right;
    color: #333;
    font-weight: 600;
}

.boxed-widget ul li {
    color: #666;
    padding-bottom: 1px;
}

.boxed-widget.summary li.total-costs {
    font-size: 18px;
\tborder-top: 1px solid #e4e4e4;
    padding-top: 18px;
    margin-top: 18px;
}

.boxed-widget-footer {
\tborder-top: 1px solid #e4e4e4;
\twidth: 100%;
\tpadding: 20px 30px;
}

.boxed-widget-footer .checkbox label {
\tmargin-bottom: 0;
}

.boxed-widget.summary li.total-costs span {
    font-weight: 700;
    color: #66676b;
}

.listing-item-container.compact.order-summary-widget .listing-item {
\tborder-radius: 4px 4px 0 0;
\tcursor: default;
\theight: 240px;
}

.listing-item-container.compact.order-summary-widget { margin-bottom: 0; }
.listing-item-container.compact.order-summary-widget:hover { transform: none; }


/* Billing Cycle
------------------------------------- */
.billing-cycle  {
\tdisplay: flex;
}

.billing-cycle .radio {
\tflex: 1;
\tmargin: 5px 20px 5px 0;
}

.billing-cycle .radio label {
\tborder-radius: 4px;
\tborder: 2px solid #eee;
\tpadding: 25px;
\theight: 100%;
\talign-self: center;
}

.billing-cycle .radio:last-of-type { margin-right: 0; }
.billing-cycle .radio input[type=\"radio\"] + label .radio-label {
\tposition: relative;
\ttop: 2px;
\tmargin-right: 7px;
}

.billing-cycle-details {
\tdisplay: block;
\tpadding-left: 30px;
}

.discounted-price-tag,
.regular-price-tag {
    font-size: 14px;
    background: #e0f5d7;
    color: #449626;
    border-radius: 4px;
    line-height: 20px;
    padding: 4px 10px;
    flex-grow: 0;
    flex: auto;
    width: auto;
    transition: 0.3s;
    margin-top: 6px;
    margin-right: 5px;
    display: inline-block;
}

.line-through {
\ttext-decoration: line-through;
\tbackground-color: #fbf6dd;
    color: #a18d29;
}

/* Media Queries for Billing Cycle */
@media (max-width: 768px) {
\t.billing-cycle  {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t}
\t.billing-cycle .radio {
\t\tmargin-right: 0;
\t}
}


/* Payment Toggle
------------------------------------- */
.payment-logo {
\theight: 24px;
\tposition: absolute;
\tright: 19px;
\ttop: 18px;
\timage-rendering: -webkit-optimize-contrast;
}

.payment-logo.paypal {
\theight: 16px;
\ttop: 22px;
}

.payment-tab-trigger > input {
\tposition: absolute;
\tvisibility: hidden;
}

.payment-tab-trigger {
\tpadding: 0px 20px;
}

.payment-tab-trigger > label {
\tcursor: pointer;
\tdisplay: block;
\tposition: relative;
\ttop: 0;
\tpadding: 14px 0;
\ttop: 3px;
\tmargin-bottom: 0;
\tfont-weight: 500;
}

.payment-tab-trigger > label::before {
\ttransition: 0.2s;
\tbox-sizing: border-box;
\tbackground-color: #fff;
\tborder: 2px solid #d0d0d0;
\tborder-radius: 100%;
\tcontent: \"\";
\tdisplay: inline-block;
\tmargin-right: 10px;
\tposition: relative;
\ttop: 3px;
\twidth: 18px;
\theight: 18px;
}

.payment-tab-trigger > label::after {
\tbackground: #fff;
\tborder-radius: 100%;
\tcontent: \"\";
\tdisplay: inline-block;
\tposition: absolute;
\tleft: 5px;
\ttop: 22px;
\twidth: 8px;
\theight: 8px;
\ttransition: 0.2s;
\ttransform: scale(0);
}

.payment-tab-trigger > input:checked ~ label::before { border-color: #66676b; }

.payment-tab-trigger > input:checked ~ label::after {
\tbackground-color: #66676b;
\ttransform: scale(1);
}

.payment {
\tborder: 2px solid #f2f2f2;
\tborder-radius: 4px;
\toverflow: hidden;
}

.payment-tab {
\tbackground: #f2f2f2;
\tbox-sizing: border-box;
\tmax-height: 60px;
\toverflow: hidden;
\tposition: relative;
\ttransition: all 0.3s 0s ease-in-out;
\twidth: 100%;
}

.payment-tab:first-of-type { border-radius: 4px 4px 0 0; }
.payment-tab:last-of-type { border-radius: 0 0 4px 4px; }

.payment-tab.payment-tab-active {
\tmax-height: 400px;
\tbackground: #fff;
}

@media (max-width: 991px) {
\t.payment-tab.payment-tab-active { max-height: 800px; }
}

.payment-tab-content {
\tpadding: 0 20px 20px 20px;
\tbackground-color: #fff;
\tvisibility: hidden;
\topacity: 0;
\ttransition: 0.2s ease-in-out;
}

.payment-form-row {
\tmargin-top: -10px;
\tmargin-bottom: 5px;
}

.payment-tab.payment-tab-active .payment-tab-content {
\tvisibility: visible;
\topacity: 1;
}

.card-label > input {
\tbox-sizing: border-box;
\tdisplay: block;
\theight: 51px;
\tmargin: 14px auto 5px;
\tpadding: 5px 15px 0 15px;
\ttransition: border-color 0.3s;
\twidth: 100%;
\tborder: 1px solid #dbdbdb;
\tbackground-color: #fff;
\ttext-decoration: none;
\tborder-radius: 4px;
\tbox-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.06);

\tbox-shadow: none;
\tpadding: 15px 0;
\tborder: none;
\tborder-bottom: 1px solid #e0e0e0;
\tborder-radius: 0;
}

.card-label > input:focus {
\tbox-shadow: none;
\tborder-bottom: 1px solid #e0e0e0;\tpadding: 15px 0;
}


.card-label > input::placeholder {
\ttransition: 0.2s ease-in-out;
\t-webkit-transform-origin: left;
}

.card-label > input:focus::placeholder {
transform: translateY(-18px);
}


.card-label > label {
    background-color: #fff;
    display: inline-block;
    margin: 6px auto auto 8px;
    font-size: 13px;
    padding: 0px 7px;
    font-weight: 500;
    color: #909090;
    display: none;
}

.payment-tab p { margin: 10px 0; }



/* Booking Confirmation Page
------------------------------------- */
.order-confirmation-page {
\ttext-align: center;
\tpadding-bottom: 120px;
\tpadding-top: 0px;
}

.order-confirmation-page h2 {
\tfont-size: 48px;
\tfont-weight: 700;
\tletter-spacing: -0.5px;
\tmargin-bottom: 25px;
\tdisplay: block;
}

.order-confirmation-page p {
\tfont-size: 20px;
\tcolor: #808080;
\tfont-weight: 300;
\tdisplay: block;
\tline-height: 32px;
}

.order-confirmation-page a.button:before { display: none; }
.order-confirmation-page a.button {
\tbackground-color: #eee;
\tcolor: #606060;
\tfont-weight: 600;
\tfont-size: 18px;
\tbox-shadow: none;
\tpadding-top: 14px;
\tpadding-bottom: 14px;
}

.order-confirmation-page a.button i { font-size: 24px; }

.book-now.button { padding: 9px; margin-bottom: -4px; }

.breathing-icon {
\tbackground-color: #66676b;
\twidth: 120px;
\theight: 120px;
\tline-height: 0;
\tfont-size: 18px;
\tborder-radius: 50%;
\tmargin: 0 auto;
\tmargin-top: 30px;
\tposition: relative;
\tz-index: 100;
\ttransition: 0.4s;
\tcolor: #fff;
\tfont-weight: 500;
\tanimation: bicokAnim 3s infinite;
\tbox-shadow: 0 0 0 15px rgba(102,103,107,0.07);
\tmargin-bottom: 70px;
\tfont-size: 90px;
}

.breathing-icon i {
\tcolor: #fff;
\tposition: absolute;
\ttop: 53%;
\tleft: 0;
\tright: 0;
\ttransform: translateY(-50%);
}

@keyframes bicokAnim {
\t0%,100% {
\t\tbox-shadow: 0 0 0 15px rgba(102,103,107,0.07);
\t}
\t50% {
\t\tbox-shadow: 0 0 0 28px rgba(102,103,107,0.12);
\t}
}

@media (max-width: 991px) {
\t.order-confirmation-page i { font-size: 100px; }
\t.order-confirmation-page p { font-size: 18px; }
\t.order-confirmation-page h2 { font-size: 30px; }
}


/* ---------------------------------- */
/* Icon Boxes
------------------------------------- */
.icon-box {
\ttext-align: center;
\tmargin-top: 45px;
\tposition: relative;
}

.icon-box-circle {
\tbackground-color: #fff;
\twidth: 50%;
\theight: 60px;
\tz-index: 100;
\tmargin: 0 auto;
\tdisplay: inline-block;
\tposition: relative;
\tmargin-bottom: 35px;
}

.icon-box-circle-inner {
\tfont-size: 72px;
\tcolor: #ccc;
\tposition: relative;
\twidth: 60px;
\tmargin: 0 auto;
\tdisplay: inline-block;
}

.icon-box-check {
\tbackground-color: #66676b;
\twidth: 30px;
\theight: 30px;
\tline-height: 32px;
\tfont-size: 18px;
\tborder-radius: 50%;
\tmargin: 0 auto;
\tposition: relative;
\tz-index: 100;
\tanimation: circle-box-anim 2s infinite;
\ttransition: 0.4s;
\tcolor: #fff;
\tfont-weight: 500;
\tposition: absolute;
\tbottom: -3px;
\tright: -10px;
\tanimation: checkAnim 2s infinite;
\tbox-shadow: 0 0 0 5px rgba(102,103,107,0.1);
}

@keyframes checkAnim {
\t0%,100% {
\t\tbox-shadow: 0 0 0 5px rgba(102,103,107,0.15);
\t}
\t50% {
\t\tbox-shadow: 0 0 0 8px rgba(102,103,107,0.15);
\t}
}

.icon-box span {
\tcolor: #666;
\ttext-transform: uppercase;
\tfont-size: 14px;
\tfont-weight: 500;
}

.icon-box h4 {
\tmargin: 4px 0;
\tline-height: 26px;
}

.icon-box h3 {
\tmargin: 4px 0;
\tline-height: 26px;
\tfont-size: 22px;
\tfont-weight: 500;
}

.icon-box p {
\tmargin: 0;
\tmargin-top: 25px;
\tfont-style: 16px;
\tpadding: 0 10px;
\tcolor: #808080;
}

.icon-box.with-line:before {
\tcontent: \"\";
\theight: 1px;
\twidth: 100%;
\tposition: absolute;
\tleft: 50%;
\ttop: 40px;
\tbackground: #e9e9e9;
\tdisplay: block;
\tz-index: 9;
}

@media (max-width: 992px) {
\t.icon-box.with-line:before { display: none; }
}


/* ---------------------------------- */
/* Testimonials
------------------------------------- */
.testimonial-box {
\tbackground: transparent;
\tborder-radius: 6px;
\tpadding: 45px;
\tpadding-top: 35px;
\tcolor: #888;
\tposition: relative;
\tmargin: 70px 0 0;
\tbox-shadow: none;
\ttransition: 0.4s;
\tcursor: grab;
\ttext-align: center;
\ttransform: scale(0.8);
}

.testimonial-box:before {
\tcontent: \"\\e948\";
\tfont-family: \"Material-Icons\";
\tposition: absolute;
\ttop: -35px;
\tleft: 0;
\tfont-size: 80px;
\ttransform: translateY(-100%);
\tcolor: #66676b;
\topacity: 0;
\ttransition: 0.3s;
}

.testimonial-carousel .slick-slide {
\tmargin: 0 20px 30px 20px;
\topacity: 0;
\ttransition: 0.4s;
\tpointer-events: all;
}

.testimonial-carousel .slick-slide.slick-active {
    opacity: 1;
    filter: none;
    pointer-events: all;
}

.testimonial-carousel .slick-slide.slick-active .testimonial-box {
    transform: scale(1);
}

.testimonial-carousel .slick-slide.slick-active .testimonial-box:before {
    opacity: 1;
}

.testimonial-carousel .slick-slide.slick-active .testimonial-box {
\tbackground: #fff;
\tcolor: #666;
\tbox-shadow: 0 0 30px rgba(0,0,0,0.08);
}

.testimonial,
.testimonial p {
\tfont-size: 18px;
\tfont-weight: 300;
\tline-height: 30px;
\tcolor: #808080;
\tline-height: 32px;
}

.testimonial-author {
\tdisplay: block;
\twidth: 100%;
\tpadding: 20px 0 15px 0;
\ttext-align: center;
\tmargin: 0 auto;
}

.testimonial-avatar {
\tposition: absolute;
\ttop: 0;
\ttransform: translateY(-50%);
\tmargin: 0 auto;
\tleft: 0;
\tright: 0;
}

.testimonial-avatar img {
\twidth: 70px;
\tdisplay:inline-block;
\ttext-align: center;
\theight: auto;
\tborder-radius: 50%;
\tmargin: 0 auto;
}

.testimonial-author h4 {
\tdisplay: block;
\twidth: 100%;
\tfont-size: 18px;
\tpadding-top: 0;
\tcolor: #333;
\tfont-weight: 600;
}

.testimonial-author span {
\tdisplay: block;
    padding-top: 0;
    display: inline-block;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 300;
    line-height: 23px;
    padding: 3px 12px;
    margin: 5px 0 10px 0;
    background-color: #66676b;
    color: #fff;
\tbox-shadow: 0 2px 10px rgba(102,103,107,0.25);
}

.testimonial-box .star-rating {
\theight: 30px;
\tdisplay: inline-block;
\tmargin-bottom: -10px;
\tmargin-top: 15px;
}


.testimonial-carousel .slick-next { right: 25%; }
.testimonial-carousel .slick-prev { left: 25%; }

.testimonial-carousel .slick-next,
.testimonial-carousel .slick-prev { margin-top: 35px; }


/* Media Queries for Testimonials */
@media (max-width: 1600px) {
\t.testimonial-carousel .slick-next { right: 15%; }
\t.testimonial-carousel .slick-prev { left: 15%; }
}

@media (max-width: 1240px) {
\t.testimonial-carousel .slick-next { right: 13%; }
\t.testimonial-carousel .slick-prev { left: 13%; }
}

@media (max-width: 992px) {
\t.testimonial-carousel .slick-next { right: 8%; }
\t.testimonial-carousel .slick-prev { left: 8%; }
\t.testimonial-box { padding: 35px; }
\t.testimonial,
\t.testimonial p { font-size: 16px; line-height: 28px; }
}

@media (max-width: 768px) {
\t.testimonial-carousel .slick-next { right: 20px; }
\t.testimonial-carousel .slick-prev { left: 20px; }

\t.testimonial-carousel .slick-next,
\t.testimonial-carousel .slick-prev { transform: scale(0.8) translateY(-50%) }

}

/* Logo Carousel */
.logo-carousel .carousel-item {
\tdisplay: inline-block;
\theight: 120px;
\ttext-align: center;
\tposition: relative;
}

.logo-carousel .carousel-item a {
\tdisplay: inline-block;
}

.logo-carousel .carousel-item img {
\tmax-height: 60%;
\tmax-width: 60%;
\tmargin: 0 auto;
\tleft: 0;
\tright: 0;
\tposition: absolute;
\ttop: 50%;
\ttransform: translateY(-50%);
}

.logo-carousel .slick-prev, .logo-carousel .slick-next { top: 50%; }


/* Blog Carousel */
.blog-carousel {
    width: calc(100% + 30px);
    left: -15px;
}

.blog-carousel .blog-compact-item-container {
\tmargin: 15px;
    display: inline-block;
    width: 30%;
}

.blog-carousel.slick-initialized .blog-compact-item-container { width: auto; }

.full-width-carousel-fix .default-slick-carousel.slick-initialized .freelancer,
.full-width-carousel-fix .blog-carousel.slick-initialized .blog-compact-item-container {
\tmargin: 15px;
\ttransform: scale(0.85);
\topacity: 0;
\tpointer-events: none;
\ttransition: 0.4s;
}

.full-width-carousel-fix .default-slick-carousel.slick-initialized .slick-slide.slick-active.freelancer,
.full-width-carousel-fix .blog-carousel.slick-initialized .slick-slide.slick-active.blog-compact-item-container {
\ttransform: scale(1);
\topacity: 1;
\tpointer-events: all;
}

.full-width-carousel-fix .blog-carousel.slick-initialized .slick-slide.slick-active.blog-compact-item-container:hover {
\ttransform: scale(1) translateY(-10px);
}



/* ---------------------------------- */
/* Text Banner
------------------------------------- */
.photo-section {
\tbackground-size: cover;
\tbackground-position: 50%;
\tdisplay: block;
\tposition: relative;
}

.photo-section:before {
\tcontent: \"\";
\twidth: 100%;
\theight: 100%;
\tbackground-color: #333;
\topacity: 0.65;
\tdisplay: block;
\tposition: absolute;
\ttop: 0;
}

/* Styles for info banner with parallax */
.text-content {
\tbackground: transparent;
\tpadding: 110px 0px;
\tfont-weight: 500;
\tz-index: 99;
\tposition: relative;
}

.text-content.white-font,
.text-content h1,
.text-content h2,
.text-content h3,
.text-content h4,
.text-content h5,
.text-content.white-font h1,
.text-content.white-font h2,
.text-content.white-font h3,
.text-content.white-font h4,
.text-content.white-font h5 {
\tcolor: #fff;
}

.text-content a.button {
\tfont-size: 16px;
\tbox-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

.text-content p {
\tfont-size: 18px;
\tfont-weight: 300;
\tline-height: 31px;
\topacity: 0.85;
}

.text-content h2 {
\tmargin-bottom: 23px;
\tline-height: 46px;
\tfont-size: 34px;
\tfont-weight: 500;
}

.top-1 { position: relative; top: -1px; }
.top-0 { position: relative; }


@media (max-width: 992px) {
\t.text-content {
\t\tpadding: 80px 0;
\t}

\t.text-content h2 {
\t\tmargin-bottom: 20px;
\t\tline-height: 40px;
\t\tfont-size: 30px;
\t\tfont-weight: 500;
\t}
}


/* ---------------------------------- */
/* Counters
------------------------------------- */
.counters-container\t{
\tdisplay: flex;
\tflex-wrap: wrap;
}

.single-counter {
\tflex: 1;
\ttext-align: center;
\tposition: relative;
\tborder-right: 1px solid #e0e0e0;
\tmargin-top: 80px;
}

.single-counter:last-child {
\tborder-right: 0;
}

.single-counter i {
\tfont-size: 64px;
\tcolor: #ccc;
\tposition: absolute;
\ttop: -20px;
\ttransform: translateY(-100%);
\tleft: 0;
\tright: 0;
}

.single-counter h3 {
\tfont-size: 36px;
\tfont-weight: 600;
\tcolor: #66676b;
\tmargin-bottom: 7px;
}

.single-counter .counter-title {
    color: #888;
    padding-top: 0;
    display: inline-block;
    border-radius: 4px;
    font-size: 18px;
}

/* Media Queries for Counters */
@media (max-width: 992px) {
\t.single-counter {
\t\tflex: 1 1 50%;
\t\tmargin-bottom: 30px;
\t}
\t.single-counter:nth-child(2) {
\t\tborder: none;
\t}
\t.counters-container { margin-bottom: -30px; }
}

/* Media Queries for Counters */
@media (max-width: 768px) {
\t.single-counter {
\t\tflex: 1 1 100%;
\t\tborder: none;
\t\tborder-bottom: 1px solid #e0e0e0;
\t\tpadding-bottom: 30px;
\t}
\t.single-counter:nth-child(2) {
\t\tborder-bottom: 1px solid #e0e0e0;
\t}
\t.single-counter:last-child { margin-bottom: -15px; border-bottom: none; }
\t.counters-container { margin-bottom: -30px; }
}


/* ---------------------------------- */
/* Countdown
------------------------------------- */
.countdown {
\tborder-radius: 4px;
\twidth: 100%;
\tdisplay: block;
\ttext-align: center;
\tfont-size: 18px;
\tline-height: 28px;
\tpadding: 14px;
}

.countdown.green {
\tbackground-color: #e7f8ec;
\tcolor: #289c41;
}

.countdown.yellow {
\tbackground-color: #fbf6dd;
\tcolor: #a18d29;
}


/* ---------------------------------- */
/* Bidding Widget
------------------------------------- */
.bidding-widget {
\tborder-radius: 4px;
\tbackground-color: #f9f9f9;
}

.dashboard-box .bidding-widget,
.popup-tab-content .bidding-widget {
\tborder-radius: 0;
\tbackground-color: transparent;
}

.dashboard-box .slider-handle.custom,
.popup-tab-content .slider-handle.custom {
\tborder: 1px solid #e0e0e0;
\tbox-shadow: 0 1px 4px rgba(0,0,0,0.07);
}

.bidding-widget .bidding-headline {
\tbackground-color: #f0f0f0;
\tcolor: #333;
\tposition: relative;
\tborder-radius: 4px 4px 0 0;
}

.bidding-widget .bidding-inner {
\tpadding: 30px 35px;
}

.bidding-widget .bidding-headline {
\tcolor: #333;
\tfont-size: 20px;
\tpadding: 20px 35px;

}

.bidding-widget .bidding-headline h3 {
\tcolor: #333;
\tfont-size: 20px;
\tpadding: 0;
\tmargin: 0;
}

.bidding-widget .bidding-signup {
\tcolor: #666;
\tfont-size: 14.7px;
\tpadding: 16px 35px;
\ttext-align: center;
\tborder-top: 1px solid #e0e0e0;
}

.bidding-widget .bidding-signup a {
\tfont-weight: 600;
}

.bidding-widget button.button {
\tmargin-bottom: 3px;
}

.bidding-widget .bidding-detail {
\tcolor: #888;
\tdisplay: block;
}

.bidding-widget .bidding-detail strong {
\tcolor: #333;
\tfont-weight: 700;
}

.dashboard-box .bidding-detail strong { font-weight: 600; }

.bidding-widget .bidding-value {
\tfont-size: 26px;
\tfont-weight: 500;
\tcolor: #333;
\tmargin: 5px 0 20px 0;
}

.bidding-widget .bidding-value {
\tfont-size: 26px;
\tfont-weight: 500;
\tcolor: #333;
}

.bidding-widget .button  {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
\ttransition: 0.3s;
\theight: 46px;
}

.bidding-widget .button:hover {
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.25);
\ttransform: translateY(-2px)
}

.bidding-widget .bidding-fields {
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: flex-start;
\tmargin-top: 12px;
\twidth: calc(100% + 20px);
}

.bidding-widget .bidding-fields .bidding-field {
\tflex: 1;
\tmargin-right: 20px;
}

/* Quantity Buttons for Booking Widget*/
.qtyButtons {
    display: flex;
    margin: 0;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
    height: 48px;
    padding: 6px;
}

.qtyButtons.with-border {
\tborder: 1px solid #e0e0e0;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05)
}

.qtyButtons input {
\toutline: 0;
\tfont-size: 16px;
\tfont-weight: 600;
\ttext-align: center;
\twidth: 50px;
\theight: 36px;
\tcolor: #808080;
\tline-height: 36px;
\tmargin: 0 !important;
\tpadding: 0 5px;
\tborder: none;
\tbox-shadow: none;
\tdisplay: inline-block;
\tflex-grow: 1;
\tbox-shadow: none !important;
}

.qtyTitle {
\tfont-size: 16px;
\tfont-weight: 600;
\tline-height: 36px;
\tpadding-right: 15px;
\tdisplay: block;
\tflex: 1;
}

.qtyInc,
.qtyDec {
    width: 36px;
    height: 36px;
    line-height: 36px;
    font-size: 18px;
    background-color: #f0f0f0;
    color: #808080;
    display: inline-block;
    text-align: center;
    border-radius: 4px;
    cursor: pointer;
\tfont-family: \"Feather-Icons\";
    flex: 1;
\tmin-width: 36px;
\tmax-width: 36px;
\ttransition: 0.3s;
}

.qtyInc:before { content: \"\\e9b1\"; }
.qtyDec:before { content: \"\\e996\"; }

.qtyInc:hover,
.qtyDec:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
}

.qtyTotal {
\tbackground-color: #66676b;
\tborder-radius: 50%;
\tcolor: #fff;
\tdisplay: inline-block;
\tfont-size: 11px;
\tfont-weight: 600;
\tfont-family: \"Open Sans\", sans-serif;
\tline-height: 18px;
\ttext-align: center;
\tposition: relative;
\ttop: -2px;
\tleft: 2px;
\theight: 18px;
\twidth: 18px;
}


/* Media Queiers for Bidding Widget */
@media (max-width: 1366px) {
\t.qtyInc, .qtyDec { min-width: 34px; max-width: 34px; }
\t.bidding-widget .bidding-inner { padding: 27px 32px; }
\t.bidding-widget .bidding-headline { padding: 20px 32px; }
}

@media (max-width: 1240px) {
\t.qtyInc, .qtyDec { min-width: 36px; max-width: 36px; }

\t.bidding-widget .bidding-fields .bidding-field {
\t    flex: auto;
\t    margin-right: 0;
\t    width: 100%;
\t}

\t.bidding-widget .bidding-fields .bidding-field:first-child { margin-bottom: 20px }
\t.bidding-widget .bidding-fields { width: 100%; }

}

/* -------------------------------- */
/* 404 Error Page
----------------------------------- */
#not-found { margin: 40px 0 80px 0; }

#not-found.center { text-align: center; }

#not-found h2 {
\ttext-align: center;
\tfont-size: 210px;
\tline-height: 210px;
\tfont-weight: 500;
\tletter-spacing: -8px;
}

#not-found p {
\ttext-align: center;
\tfont-size: 28px;
\tline-height: 42px;
\tdisplay: inline-block;
\tmargin-top: 0px;
\tcolor: #999;
}

#not-found i {
\tcolor: #e0e0e0;
\tfont-size: 210px;
\ttop: 0;
\tmargin-left: -40px;
\tposition: relative;
}


.not-found-search.intro-banner-search-form .intro-search-field,
.not-found-search.intro-banner-search-form input,
.not-found-search.intro-banner-search-form {
\tbackground: #f7f7f7;
\tbox-shadow: none;
}

@media (max-width: 992px) {
\t.not-found-search.intro-banner-search-form {
\t\tbackground: #fff;
\t}
}

@media (max-width: 767px) {
\t#not-found h2 {
\t\tfont-size: 110px;
\t\tline-height: 110px;
\t}

\t#not-found p {
\t\tfont-size: 20px;
\t\tline-height: 32px;
\t}

\t#not-found i {
\t\tfont-size: 120px;
\t\ttop: 5px;
\t\tmargin-left: 0;
\t}
\t
\t.not-found-search.intro-banner-search-form {
\t\tmargin-top: -30px;
\t}

\t.login-register-page .account-type { width: 100%; }
\t.login-register-page .account-type div { margin-right: 0; }
\t.login-register-page .social-login-buttons button { 
\t\tmargin-right: 0;
\t    width: 100%;
\t    display: block;
\t    max-width: 100%;
\t}
}

.login-register-page .welcome-text h3 { font-size: 26px; }


/* -------------------------------------------------------------- */
/* 05. Scripts Styles
----------------------------------------------------------------- */

/* ---------------------------------- */
/* Slick Slider
------------------------------------- */
/* Slider */
.slick-slider {
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list {
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus {
    outline: none;
}
.slick-list.dragging {
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track {
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}
.slick-track:before,
.slick-track:after {
    display: table;

    content: '';
}
.slick-track:after {
    clear: both;
}
.slick-loading .slick-track {
    visibility: hidden;
}

.slick-slide {
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide {
    float: right;
}
.slick-slide img {
    display: block;
}
.slick-slide.slick-loading img {
    display: none;
}
.slick-slide.dragging img {
    pointer-events: none;
}
.slick-initialized .slick-slide {
    display: block;
}
.slick-loading .slick-slide {
    visibility: hidden;
}
.slick-vertical .slick-slide {
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

/* Slider */
/*.slick-loading .slick-list {
    background: #fff url('./ajax-loader.gif') center center no-repeat;
}
*/

/* Arrows */
.slick-prev,
.slick-next {
    font-size: 0;
    line-height: 0;
    position: absolute;
    top: 50%;
    display: block;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    cursor: pointer;
    border: none;
    outline: none;
    background-color: #333;
    border-radius: 4px;
    width: 48px;
    height: 48px;
    display: block;
    top: calc(50% - 15px);
    transform: translateY(-50%);
    transition: 0.3s;
    box-shadow: 0 3px 12px rgba(0,0,0,0.15);
    z-index: 10;
}

.slick-prev:hover,
.slick-next:hover {
    color: transparent;
    outline: none;
    background: #66676b;
}
.slick-prev:hover:before,
.slick-next:hover:before {
    opacity: 1;
}

.slick-prev.slick-disabled,
.slick-next.slick-disabled {
    pointer-events: none;
\tcursor: default;
\tbackground-color: #e8e8e8;
\tbox-shadow: none;
}

.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before {
    color: #808080;
}

.slick-prev:before,
.slick-next:before {
    font-family: \"Feather-Icons\";
    font-size: 26px;
    line-height: 1;
    opacity: 1;
    transition: 0.3s;
    position: relative;
    color: #fff;
}

.slick-prev { left: -85px; }
.slick-prev:before {  content: '\\e92f'; left: -1px; }

.slick-next {  right: -85px; }
.slick-next:before { content: '\\e930'; right: -1px; }

/* Dots */
.slick-dots {
\tmargin: 0 auto;
\tpadding: 0;
\ttext-align: center;
}

.slick-dots li {
    position: relative;
    display: inline-block;
    padding: 0;
    margin: 0 3px;
    cursor: pointer;
}

.slick-dots li {
    font-size: 0;
    line-height: 0;
    cursor: pointer;
    color: transparent;
    border: 0;
    position: relative;
    outline: none;
\tdisplay: inline-block;
\twidth: 15px;
\theight: 15px;
\tmargin: 0 3px;
\topacity: 1;
\tborder-radius: 50%;
\tline-height: 0;
\tbox-shadow: inset 0 0 0 2px #c0c0c0;
\ttransition: all 0.3s;
}

.slick-dots li.slick-active {
\tbox-shadow: inset 0 0 0 6px #c0c0c0;
\ttransition: all 0.3s;
}

.slick-dots li:after {
    display: block;
    height: 13px;
    width: 13px;
\tcontent: \"\";
\tposition: absolute;
\ttop: 1px;
\tleft: 1px;
\tbackground-color: transparent;
\tborder-radius: 50%;
\ttransition: all 0.3s;
\topacity: 0;
\tbackground-color: #c0c0c0;
}

.slick-dots li.slick-active:after {
\topacity: 1;
}


/* Reset */
.slick-slide { display: none; outline: none; }
.slick-initialized .slick-slide { display: block; }

.default-slick-carousel .slick-carousel-item { margin: 15px; }

.default-slick-carousel {
    height: auto;
    width: calc(100% + 30px);
    left: -15px;
}

.default-slick-carousel,
.testimonial-carousel,
.logo-carousel,
.blog-carousel { display: none; }

.default-slick-carousel.slick-initialized,
.testimonial-carousel.slick-initialized,
.logo-carousel.slick-initialized,
.blog-carousel.slick-initialized { display: block; }

/* Custom */
.default-slick-carousel .freelancer { margin: 15px; width: 30%; }
.default-slick-carousel.slick-initialized .freelancer { width: auto; }
.default-slick-carousel .freelancer-details-list ul li { margin-right: 22px; }
.default-slick-carousel .freelancer-details-list ul li:last-child { margin-right: 0px; }

.default-slick-carousel .freelancer:hover {
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
    transform: translateY(0px);
}

@media (min-width: 1367px) and (max-width: 1440px) {
\t.slick-prev { left: -65px; }
\t.slick-next {  right: -65px; }
}

@media (max-width: 1290px) {
\t.slick-prev { left: -10px; }
\t.slick-next {  right: -10px; }
}

@media (max-width: 1090px) {
\t.slick-prev { left: 40px; }
\t.slick-next {  right: 40px; }
}

.full-width-carousel-fix { overflow: hidden; }
.full-width-carousel-fix .slick-list { overflow: visible; }

/* ---------------------------------- */
/* Simlpebar.js (custom scrollbar)
------------------------------------- */
[data-simplebar] {
    position: relative;
    z-index: 0;
    overflow: hidden!important;
    max-height: inherit;
    -webkit-overflow-scrolling: touch; /* Trigger native scrolling for mobile, if not supported, plugin is used. */
}

[data-simplebar=\"init\"] {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.simplebar-scroll-content {
    overflow-x: hidden!important;
    overflow-y: scroll;
    min-width: 100%!important;
    max-height: inherit!important;
    -webkit-box-sizing: content-box!important;
            box-sizing: content-box!important;
}

.simplebar-content {
    overflow-y: hidden!important;
    overflow-x: scroll;
    -webkit-box-sizing: border-box!important;
            box-sizing: border-box!important;
    min-height: 100%!important;
}

.simplebar-track {
    z-index: 1;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 11px;
    height: calc(100% - 6px);
    margin-top: 6px;
}

.simplebar-scrollbar {
    position: absolute;
    right: 6px;
    width: 5px;
    min-height: 10px;
}

.simplebar-scrollbar:before {
    position: absolute;
    content: \"\";
    background: black;
    border-radius: 7px;
    left: 0;
    right: 0;
    opacity: 0;
    transition: opacity 0.2s, background-color 0.3s;
    background-color: #d8d8d8;
}

.simplebar-scrollbar:hover:before {
    background-color: #c8c8c8;
}

.simplebar-track:hover .simplebar-scrollbar:before,
.simplebar-track .simplebar-scrollbar.visible:before {
    /* When hovered, remove all transitions from drag handle */
    opacity:1;
    -webkit-transition: opacity 0 linear;
    transition: opacity 0 linear;
}

.simplebar-track.vertical {
    top: 0;
}

.simplebar-track.vertical .simplebar-scrollbar:before {
    top: 2px;
    bottom: 2px;
}

.simplebar-track.horizontal {
    left: 0;
    width: auto;
    height: 11px;
    display: none;
}

.simplebar-track.horizontal .simplebar-scrollbar:before {
    height: 100%;
    left: 2px;
    right: 2px;
}

.horizontal.simplebar-track .simplebar-scrollbar {
    right: auto;
    top: 2px;
    height: 7px;
    min-height: 0;
    min-width: 10px;
    width: auto;
}

body.gray .dashboard-content-container .simplebar-scrollbar:before { background-color: #c9c9c9; }
body.gray .dashboard-content-container .simplebar-scrollbar:hover:before { background-color: #b9b9b9; }
.dashboard-box .simplebar-scrollbar:before { background-color: #d8d8d8; }
.dashboard-box .simplebar-scrollbarLhover:before { background-color: #c8c8c8; }


/* ---------------------------------- */
/* Tippy.js Tooltips
------------------------------------- */

/* Dark */
.tippy-tooltip.dark-theme {
\tcolor: #fff;
\tfont-weight: 500;
\tfont-size: 14px;
\tpadding: 6px 12px;
}

.tippy-tooltip.dark-theme .tippy-backdrop { background-color: #333; }

.tippy-popper[x-placement^=top] .tippy-tooltip.dark-theme .tippy-arrow { border-top-color: #333; }
.tippy-popper[x-placement^=bottom] .tippy-tooltip.dark-theme .tippy-arrow { border-bottom-color: #333; }
.tippy-popper[x-placement^=right] .tippy-tooltip.dark-theme .tippy-arrow { border-right-color: #333; }
.tippy-popper[x-placement^=left] .tippy-tooltip.dark-theme .tippy-arrow { border-left-color: #333; }

.tippy-tooltip.dark-theme .tippy-arrow { transform: scale(0.7); }

/* Light */
.tippy-tooltip.light-theme {
\tcolor: #333;
\tfont-weight: 500;
\tfont-size: 14px;
\tbox-shadow: 0 3px 10px rgba(0,0,0,0.1);
\tpadding: 6px 12px;
\tbackground-color: #fff;
}

.tippy-popper[x-placement^=top] .tippy-tooltip.light-theme .tippy-arrow { border-top-color: #fff; }
.tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme .tippy-arrow { border-bottom-color: #fff; }
.tippy-popper[x-placement^=right] .tippy-tooltip.light-theme .tippy-arrow { border-right-color: #fff; }
.tippy-popper[x-placement^=left] .tippy-tooltip.light-theme .tippy-arrow { border-left-color: #fff; }

/* ---------------------------------- */
/* Magnific Popup
------------------------------------- */
.mfp-bg {
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tz-index: 2000;
\toverflow: hidden;
\tposition: fixed;
\tbackground: #111;
}

.mfp-wrap {
\ttop: -10px;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tz-index: 2001;
\tposition: fixed;
\toutline: none !important;
\t-webkit-backface-visibility: hidden;
}

.mfp-container {
\theight: 100%;
\ttext-align: center;
\tposition: absolute;
\twidth: 100%;
\theight: 100%;
\tleft: 0;
\ttop: 0;
\tpadding: 0 18px;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
}

.mfp-container:before {
\tcontent: '';
\tdisplay: inline-block;
\theight: 100%;
\tvertical-align: middle;
}

.mfp-align-top .mfp-container:before {
\tdisplay: none;
}

.mfp-content {
\tposition: relative;
\tdisplay: inline-block;
\tvertical-align: middle;
\tmargin: 0 auto;
\ttext-align: left;
\tz-index: 505;
}

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
\twidth: 100%;
\tcursor: auto;
}

.mfp-ajax-cur {
\tcursor: progress;
}

.mfp-zoom-out-cur,
.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
\tcursor: -moz-zoom-out;
\tcursor: -webkit-zoom-out;
\tcursor: zoom-out;
}

.mfp-zoom {
\tcursor: pointer;
\tcursor: -webkit-zoom-in;
\tcursor: -moz-zoom-in;
\tcursor: zoom-in;
}

.mfp-auto-cursor .mfp-content {
\tcursor: auto;
}

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
\t-webkit-user-select: none;
\t-moz-user-select: none;
\tuser-select: none;
 }

.mfp-loading.mfp-figure {
\tdisplay: none;
}

.mfp-hide {
\tdisplay: none !important;
}

.mfp-preloader {
\tcolor: #aaa;
\tposition: absolute;
\ttop: 50%;
\twidth: auto;
\ttext-align: center;
\tmargin-top: -0.8em;
\tleft: 8px;
\tright: 8px;
\tz-index: 504;
}

.mfp-preloader a {
\tcolor: #cccccc;
}

.mfp-preloader a:hover {
\tcolor: #fff;
}

.mfp-s-ready .mfp-preloader {
\tdisplay: none;
}

.mfp-s-error .mfp-content {
\tdisplay: none;
}

.mfp-s-loading .mfp-arrow {
\tdisplay: none;
}

button.mfp-close,
button.mfp-arrow {
\toverflow: visible;
\tcursor: pointer;
\tborder: 0;
\t-webkit-appearance: none;
\tdisplay: block;
\tpadding: 0;
\tz-index: 506;
}

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
\tright: 0px;
\ttop: -40px;
}

/* Close Button */
.og-close,
button.mfp-close {
\tposition: absolute;
\twidth: 45px;
\theight: 45px;
\ttop: -20px;
\tdisplay: block;
\tright: -12px;
\tcursor: pointer !important;
\tz-index: 9999;
\tcolor: #fff;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tborder-radius: 50%;
\tmargin: 0px;
\tbackground-color: transparent;
\toutline: none;\ttransform: translate3d(0,0,0);
}

.mfp-iframe-holder .mfp-close {
\ttop: -50px;
\tright: -12px;
\ttransform: translate3d(0,0,0);
}

.mfp-gallery .mfp-close {
\ttop: 20px;
\tright: 10px;
}

.mfp-gallery  .mfp-content .mfp-close {
\tdisplay: none;
}

.mfp-close::after,
.mfp-close::before {
    top: 0px;
}

.og-close {
\tmargin: 17px;
\tright: 10px;
\tbackground: transparent;
\tcolor: #222;
}

.og-close:before,
.mfp-close:before {
\tfont-family: \"Feather-Icons\";
\tfont-size: 20px;
\ttop: 2px;
\tleft: 0;
\tposition: relative;
\theight: 10px;
}

.og-close:before,
.mfp-close:before {
\tcontent:\"\\ea02\";
}

#small-dialog .mfp-close,
#small-dialog-1 .mfp-close,
#small-dialog-2 .mfp-close,
#small-dialog-3 .mfp-close,
#small-dialog-4 .mfp-close,
#sign-in-dialog, .mfp-close,
.mfp-close:hover {
\tcolor: #fff;
}


/* Popup close button*/
#sign-in-dialog .mfp-close,
#small-dialog-1 .mfp-close,
#small-dialog-2 .mfp-close,
#small-dialog-3 .mfp-close,
#small-dialog-4 .mfp-close,
#small-dialog .mfp-close {
\tcolor: #666;
\tbackground-color: #e4e4e4;
\tborder-radius: 4px;
\ttop: 28px;
\tright: 40px;
    width: 40px;
    height: 40px;
}

#sign-in-dialog .mfp-close:hover,
#small-dialog-1 .mfp-close:hover,
#small-dialog-2 .mfp-close:hover,
#small-dialog-3 .mfp-close:hover,
#small-dialog-4 .mfp-close:hover,
#small-dialog .mfp-close:hover {
\tcolor: #fff;
\tbackground-color: #66676b;
}

.small-dialog-content input[type=submit] {
\twidth: 100%;
\tmargin-top: 26px;
\tmargin-bottom: 10px;
}

.small-dialog-content .divider {
\tdisplay: inline-block;
\twidth: 100%;
\tmargin-top: 15px;
\tpadding-bottom: 0;
}

.small-dialog-header {
\tfont-size: 22px;
\twidth: calc(100% + 80px);
\tposition: relative;
\tleft: -40px;
\ttop: 0;
\tborder-radius: 4px 4px 0 0;
\tdisplay: inline-block;
\tbackground-color: #f6f6f6;
\tpadding: 35px 40px;
\tmargin-bottom: 40px;
}

.small-dialog-header h3 {
\tpadding: 0;
\tmargin: 0;
\tfont-size: 23px;
}


.mfp-counter {
\tposition: absolute;
\ttop: 0;
\tright: 0;
\tcolor: #aaa;
\tfont-size: 13px;
\tline-height: 18px;
}

.mfp-arrow {
\topacity: 1;
\tmargin: 0 20px;
\ttop: 50%;
\ttransform: translateY(-50%);
\tz-index: 9999;
\tcolor: #fff;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tcursor: pointer;
\twidth: 60px;
\theight: 60px;
\tposition: absolute;
\tdisplay: block;
\tz-index: 100;
\toverflow: hidden;
\tbackground: rgba(255,255,255,0.15);
\tborder-radius: 50%;
\toutline: none;
}

.mfp-arrow:hover {
\tbackground: #66676b;
\tcolor: #fff;
}

.mfp-arrow.mfp-arrow-left,
.mfp-arrow.mfp-arrow-right {
\tfont-family: \"simple-line-icons\";
\tfont-size: 20px;
}

.mfp-arrow.mfp-arrow-right { right: 15px; }

.mfp-arrow.mfp-arrow-left:before { content: \"\\e605\"; left: -1px; top: 0px; position: relative; }
.mfp-arrow.mfp-arrow-right:before { content: \"\\e606\"; left: 1px; top: 0px; position: relative; }

.mfp-content:hover .mfp-arrow {
\topacity: 1;
}

.mfp-iframe-holder {
\tpadding-top: 40px;
\tpadding-bottom: 40px;
}

.mfp-iframe-holder .mfp-content {
\tline-height: 0;
\twidth: 100%;
\tmax-width: 1180px;
}

.mfp-iframe-scaler {
\twidth: 100%;
\theight: 0;
\toverflow: hidden;
\tpadding-top: 54%;
}

.mfp-iframe-scaler iframe {
\tposition: absolute;
\tdisplay: block;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tbox-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
\tbackground: black;
}

/* Popup */
#sign-in-dialog,
#small-dialog-1,
#small-dialog-2,
#small-dialog-3,
#small-dialog-4,
#small-dialog {
\tbackground: #fff;
\tpadding: 40px;
\tpadding-top: 0;
\ttext-align: left;
\tmax-width: 610px;
\tmargin: 40px auto;
\tposition: relative;
\tbox-sizing:border-box;
\tborder-radius: 4px;
\tmax-width: 550px;
}


#sign-in-dialog-1 span.line,
#sign-in-dialog-2 span.line,
#sign-in-dialog-3 span.line,
#sign-in-dialog-4 span.line,
#sign-in-dialog span.line,
#small-dialog span.line {padding-top: 0;}

.my-mfp-zoom-in .zoom-anim-dialog {
\topacity: 0;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\t-webkit-transform: scale(0.8);
\t-moz-transform: scale(0.8);
\t-ms-transform: scale(0.8);
\t-o-transform: scale(0.8);
\ttransform: scale(0.8);
}

/* animate in */
.my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
\topacity: 1;
\t-webkit-transform: scale(1);
\t-moz-transform: scale(1);
\t-ms-transform: scale(1);
\t-o-transform: scale(1);
\ttransform: scale(1);
}

/* animate out */
.my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
\t-webkit-transform: scale(0.8);
\t-moz-transform: scale(0.8);
\t-ms-transform: scale(0.8);
\t-o-transform: scale(0.8);
\ttransform: scale(0.8);
\topacity: 0;
}

/* Dark overlay, start state */
.my-mfp-zoom-in.mfp-bg {
\topacity: 0.001; /* Chrome opacity transition bug */
\t-webkit-transition: opacity 0.3s ease-out;
\t-moz-transition: opacity 0.3s ease-out;
\t-o-transition: opacity 0.3s ease-out;
\ttransition: opacity 0.3s ease-out;
}
/* animate in */
.my-mfp-zoom-in.mfp-ready.mfp-bg {
\topacity: 0.85;
}
/* animate out */
.my-mfp-zoom-in.mfp-removing.mfp-bg {
\topacity: 0;
}
.dupa {
\tdisplay: block;
\theight: 30px;
}


/* Main image in popup */
img.mfp-img {
\twidth: auto;
\tmax-width: 100%;
\theight: auto;
\tdisplay: block;
\tline-height: 0;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\tmargin: 40px auto;
\tborder-radius: 4px;
}

/* The shadow behind the image */
.mfp-figure:after {
\tcontent: '';
\tposition: absolute;
\tleft: 0;
\ttop: 40px;
\tbottom: 40px;
\tdisplay: block;
\tright: 0;
\twidth: auto;
\theight: auto;
\tz-index: -1;
\tbox-shadow: 0 0 18px rgba(11,11,11, 0.6);
}

.mfp-figure {
\tline-height: 0;
}

.mfp-bottom-bar {
\tmargin-top: -30px;
\tposition: absolute;
\ttop: 100%;
\tleft: 0;
\twidth: 100%;
\tcursor: auto;
}

.mfp-title {
\ttext-align: left;
\tline-height: 18px;
\tcolor: #f3f3f3;
\tword-break: break-word;
\tpadding-right: 36px;
}

.mfp-figure small {
\tcolor: #bdbdbd;
\tdisplay: block;
\tfont-size: 12px;
\tline-height: 14px;
}

.mfp-image-holder .mfp-content {
\tmax-width: 100%;
}

.mfp-gallery .mfp-image-holder .mfp-figure {
\tcursor: pointer;
}


/* Media Queries for Magnific Popup */
@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {

  .mfp-img-mobile .mfp-image-holder {
\tpadding-left: 0;
\tpadding-right: 0;
   }

  .mfp-img-mobile img.mfp-img {
\tpadding: 0
   }

  /* The shadow behind the image */
  .mfp-img-mobile .mfp-figure:after {
\ttop: 0;
\tbottom: 0;
   }

  .mfp-img-mobile .mfp-bottom-bar {
\tbackground: rgba(0, 0, 0, 0.6);
\tbottom: 0;
\tmargin: 0;
\ttop: auto;
\tpadding: 3px 5px;
\tposition: fixed;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
   }

  .mfp-img-mobile .mfp-bottom-bar:empty {
\tpadding: 0;
   }

  .mfp-img-mobile .mfp-counter {
\tright: 5px;
\ttop: 3px;
   }

  .mfp-img-mobile .mfp-close {
\ttop: 0;
\tright: 0;
\twidth: 35px;
\theight: 35px;
\tline-height: 35px;
\tbackground: rgba(0, 0, 0, 0.6);
\tposition: fixed;
\ttext-align: center;
\tpadding: 0;
   }

  .mfp-img-mobile .mfp-figure small {
\tdisplay: inline;
\tmargin-left: 5px;
   }
}


.mfp-ie7 .mfp-img {
\tpadding: 0;
}

.mfp-ie7 .mfp-bottom-bar {
\twidth: 600px;
\tleft: 50%;
\tmargin-left: -300px;
\tmargin-top: 5px;
\tpadding-bottom: 5px;
}

.mfp-ie7 .mfp-container {
\tpadding: 0;
}

.mfp-ie7 .mfp-content {
\tpadding-top: 44px;
}

.mfp-ie7 .mfp-close {
\ttop: 0;
\tright: 0;
\tpadding-top: 0;
}

.mfp-fade.mfp-bg {
\topacity: 0;
\t-webkit-transition: all 0.2s ease-out;
\t-moz-transition: all 0.2s ease-out;
\ttransition: all 0.2s ease-out;
}

.mfp-fade.mfp-bg.mfp-ready {
\topacity: 0.92;
\tbackground-color: #111;
}

.mfp-fade.mfp-bg.mfp-removing {
\topacity: 0;
}

.mfp-fade.mfp-wrap .mfp-content {
\topacity: 0;
\t-webkit-transition: all 0.2s ease-out;
\t-moz-transition: all 0.2s ease-out;
\ttransition: all 0.2s ease-out;
}

.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
\topacity: 1;
}

.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
\topacity: 0;
}

/* Feedback Yes No */
.feedback-yes-no strong{
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tdisplay: block;
}

.feedback-yes-no .radio {
\tmargin-right: 15px;
}

.feedback-yes-no { margin-bottom: 15px; }

.feedback-yes-no .leave-rating {
\ttransform: scale(1.1);
\tmargin: 3px 0 10px 3px;
}


/* ---------------------------------- */
/* Popup tabs
------------------------------------- */
.popup-tabs-nav {
\tlist-style: none;
    margin: 0;
    padding: 0;
    width: 100%;
    display: block;
    height: 62px;
    background: #f8f8f8;
    border-radius: 4px 4px 0 0;
    border-bottom: 1px solid #e0e0e0;
}

.popup-tabs-nav li {
\tfloat: left;
\tline-height: 62px;
\theight: 62px;
\tpadding: 0;
\tmargin-right: 0;
\tposition: relative;
}

.popup-tabs-nav li:first-child a {
\tborder-radius: 4px 0 0 0;
}

.popup-tabs-nav li a,
.popup-tab-reviews {
\t-webkit-transition: all 0.25s ease-in-out;
\ttransition: all 0.25s ease-in-out;
}

.popup-tabs-nav li a {
\tborder: none;
\tcolor: #777;
\tdisplay: inline-block;
\toutline: none;
\tpadding: 0;
\ttext-decoration: none;
\tfont-size: 16px;
\tz-index: 10;
\tposition: relative;
\theight: 100%;
\tpadding: 0 30px;
\tborder-right: 1px solid transparent;
\tborder-left: 1px solid transparent;
\ttransition: all 0.3s, font-weight 0s;
\tborder-right: 1px solid #e0e0e0;
}

.popup-tabs-nav li.active {
\tbackground-color: #fff;
\tposition: relative;
}

.popup-tabs-nav li a:hover {
\tbackground-color: #f3f3f3;
\theight: calc(100% - 1px);
\tcolor: #333;
}

.popup-tabs-nav li:last-child a:hover {
\tborder-right: 1px solid #e0e0e0;
}

.popup-tabs-nav li.active a:hover,
.popup-tabs-nav li.active {
\tbackground-color: #fff;
}

.popup-tabs-nav li.active a {
\tcolor: #66676b;
\tfont-weight: 600;
}

.popup-tabs-nav li.active:after {
\tcontent: \"\";
\tposition: absolute;
\tdisplay: block;
\tbottom: 0;
\tleft: 0;
\twidth: 100%;
\theight: 1px;
\tbackground-color: #fff;
\tz-index: 111;
}

.popup-tabs-nav li:first-child.active {
\tborder-left: none;
\tborder-radius: 4px 0 0 0;
}

.popup-tab-content {
\tpadding: 50px 35px;
\tposition: relative;
\tz-index: 10;
\tdisplay: inline-block;
\twidth: 100%;
}

.popup-tabs-container {
\toverflow: hidden;
\twidth: 100%;
}

.popup-tab-content p:last-child { margin-bottom: 0; }

.dialog-with-tabs#sign-in-dialog,
.dialog-with-tabs#small-dialog-1,
.dialog-with-tabs#small-dialog-2,
.dialog-with-tabs#small-dialog-3,
.dialog-with-tabs#small-dialog-4,
.dialog-with-tabs#small-dialog { 
\tpadding: 0;
\tcolor: #666;
\tmax-width: 540px;
\tbox-shadow: 0 0 25px rgba(0,0,0,0.25);
}

/* Close Button Adjustments*/
#sign-in-dialog.dialog-with-tabs .mfp-close,
#small-dialog.dialog-with-tabs .mfp-close,
#small-dialog-1.dialog-with-tabs .mfp-close,
#small-dialog-2.dialog-with-tabs .mfp-close,
#small-dialog-3.dialog-with-tabs .mfp-close,
#small-dialog-4.dialog-with-tabs .mfp-close {
    color: #888;
    background-color: #f8f8f8;
    border-left: 1px solid #e0e0e0;
    border-radius: 0 4px 0 0;
    top: 0;
    right: 0;
    width: 62px;
    height: 61px;
}

#sign-in-dialog.dialog-with-tabs .mfp-close:hover,
#small-dialog-1.dialog-with-tabs .mfp-close:hover,
#small-dialog-2.dialog-with-tabs .mfp-close:hover,
#small-dialog-3.dialog-with-tabs .mfp-close:hover,
#small-dialog-4.dialog-with-tabs .mfp-close:hover,
#small-dialog.dialog-with-tabs .mfp-close:hover {
    color: #333;
    background-color: #f2f2f2;
}

.dialog-with-tabs .mfp-close:before,
.dialog-with-tabs .mfp-close:before {
    font-size: 24px;
}


/* Chrome autocomplete highlight reset */
.dialog-with-tabs input:-webkit-autofill,
.dialog-with-tabs input:focus:-webkit-autofill {
    border: 1px solid #e0e0e0;
    -webkit-box-shadow: inset 0 0 0px 9999px white, 0 1px 4px rgba(0,0,0,0.07);
}

.dialog-with-tabs input {
    margin-bottom: 22px;
}

/* Forgot Password Link */
.dialog-with-tabs .forgot-password {
\tfont-size: 14px;
\tcolor: #888;
\tmargin-top: -12px;
\tdisplay: block;
}

.dialog-with-tabs .forgot-password:hover {
\tcolor: #66676b;
}


/* Submit Button Adjustments */
.dialog-with-tabs .button {
\theight: 48px;
\twidth: 100% !important;
\tmargin-top: 25px;
\tbox-shadow: 0 4px 12px rgba(102,103,107,0.15);
}

/* Welcome Text */
.welcome-text {
\tdisplay: block;
\ttext-align: center;
\tcolor: #808080;
\tmargin-bottom: 33px;
}

.welcome-text h3 {
\tdisplay: block;
\tfont-weight: 700;
\tcolor: #333;
\tfont-size: 24px;
}

.welcome-text span a { font-weight: 500; }

.welcome-text span {
\tdisplay: block;
\tmargin-top: 4px;
}

/* Social Login Separator */
.social-login-separator {
\twidth: 100%;
\tdisplay: block;
\ttext-align: center;
\tposition: relative;
\twidth: 100%;
\tmargin: 38px 0 15px 0;
\theight: 1px;
}

.social-login-separator:before {
\twidth: 100%;
\tcontent: \"\";
\theight: 1px;
\tdisplay: block;
\tbackground-color: #e0e0e0;
\tposition: absolute;
\ttop: 0;
}

.social-login-separator span {
\tbackground-color: #fff;
\ttop: 0;
\tposition: absolute;
\tline-height: 10px;
\ttop: -5px;
\tmargin-left: -15px;
\tpadding: 0px 10px;
\tcolor: #808080;
}

/* Social Login Buttons */
.social-login-buttons {
\tdisplay: flex;
\twidth: calc(100% + 20px)
}

.social-login-buttons button {
\tflex: 1;
\ttext-align: center;
\tborder: 1px solid #333;
\tcolor: #333;
\tborder-radius: 4px;
\tmargin-top: 10px;
\tmargin-right: 20px;
\tfont-size: 14px;
\tpadding: 9px 5px;
\tmax-width: 50%;
\ttransition: 0.3s;
}

.social-login-buttons button:hover {
\tbackground-color: #333;
\tcolor: #fff;
}

.social-login-buttons button i {
\tposition: relative;
\ttop: 1px;
\tmargin-right: 7px;
\tfont-size: 15px;
}

.social-login-buttons .facebook-login {
\tborder-color: #3b5998;
\tcolor: #3b5998;
}

.social-login-buttons .facebook-login:hover {
\tbackground-color: #3b5998;
\tcolor: #fff;
}

.social-login-buttons .google-login {
\tborder-color: #dd4b39;
\tcolor: #dd4b39;
}

.social-login-buttons .google-login:hover {
\tbackground-color: #dd4b39;
\tcolor: #fff;
}

@media (max-width: 768px) {
\t.social-login-separator { margin-bottom: 25px; }
\t.social-login-buttons,
\t.social-login-buttons a { width: 100%; display: block; max-width: 100%; }
}

/* Account Type */
.account-type {
\tdisplay: flex;
\twidth: calc(100% + 20px);
\tmargin: 0 0 20px 0;
}

.account-type div {
\tflex: 1;
\tmargin-right: 20px;
}

.account-type label {
  border-radius: 3px;
  border: none;
  background-color: #f2f2f2;
  width: 100%;
}

/* hide input */
.account-type input.account-type-radio:empty {
\tdisplay: none;
}

/* style label */
.account-type label i {
\tposition: relative;
\tfont-size: 18px;
\ttop: 2px;
\tmargin-right: 2px;
}

.account-type input.account-type-radio:empty ~ label {
\tposition: relative;
\tfloat: left;
\tpadding: 10px;
\ttext-align: center;
\tpadding-bottom: 11px;
\tcursor: pointer;
\t-webkit-user-select: none;
\t-moz-user-select: none;
\t-ms-user-select: none;
\tuser-select: none;
\tborder-radius: 4px;
\tcolor: #888;
\ttransition: 0.4s;
\theight: 48px;
\tline-height: 28px;
\toverflow: hidden;
}

.account-type input.account-type-radio ~ label:hover {
\tcolor: #289c41;
\tbackground-color: #e4f6e9;
}

.account-type input.account-type-radio:checked ~ label {
\tcolor: #fff;
\tbackground-color: #47bb67;
}

.account-type input.account-type-radio:empty ~ label:after,
.account-type input.account-type-radio:empty ~ label:before {
\tposition: absolute;
\tdisplay: block;
\ttop: 0;
\tbottom: 0;
\tleft: 0;
\tcontent: '';
\twidth: 100%;
\theight: 100%;
\ttext-align: center;
\tline-height: 48px;
\tborder-radius: 4px;
\tfont-size: 22px;
\tbackground: transparent;
\tz-index: 100;
\topacity: 0;
}

.account-type .ripple-effect-dark span.ripple-overlay {
\tanimation: ripple 1.2s;
\topacity: 0.03; 
}

/* Standard syntax */
@keyframes typeCheck {
    0% {opacity: 0; transform: translateY(10px); }
    50% {opacity: 1; transform: translateY(0px); }
    100% {opacity: 0; transform: translateY(-10px); }
}

@keyframes typeBG {
    0% {opacity: 0;  }
    50% {opacity: 1;  }
    100% {opacity: 0; }
}


/* Popups Media Queries */
@media (max-width: 480px) {
\t.popup-tabs-nav {
\t\tpadding-top: 50px;
\t\theight: 50px;
\t}
\t.mfp-container { padding: 0 10px; }
\t.popup-tabs-nav li:first-child { border-top: 1px solid #e0e0e0; }
\t.popup-tabs-nav li { border-bottom: 1px solid #e0e0e0; }
\t.popup-tabs-nav li,
\t.popup-tabs-nav li a {
\t\twidth: 100%;
\t\ttext-align: center;
\t\theight: 50px;
\t\tline-height: 50px;
\t}

\t.popup-tabs-nav li a:hover {
\t\tbackground-color: transparent;
\t}

\t#sign-in-dialog.dialog-with-tabs .mfp-close,
\t#small-dialog.dialog-with-tabs .mfp-close,
\t#small-dialog-1.dialog-with-tabs .mfp-close,
\t#small-dialog-2.dialog-with-tabs .mfp-close,
\t#small-dialog-3.dialog-with-tabs .mfp-close,
\t#small-dialog-4.dialog-with-tabs .mfp-close {
\t\theight: 50px;
\t\twidth: 50px;
\t}

\t.account-type,
\t.social-login-buttons { flex-direction: column; }
\t.social-login-buttons button {
\t\tmax-width: 100%;
\t\twidth: 100%;
\t\tflex: auto;
\t}

\t.uploadButton { flex-direction: column; }
\t.uploadButton .uploadButton-file-name { padding: 0; margin: 15px 0 0 0; }
}

/* ---------------------------------- */
/* Boostrap Slider
------------------------------------- */
input.range-slider,
input.default-slider { display: none; }

.slider {
\tdisplay: inline-block;
\tvertical-align: middle;
\tposition: relative;
}

.slider.slider-horizontal {
\twidth: calc(100% - 20px);
\tmargin-left: 11px;
\theight: 20px;
}

.slider.slider-horizontal .slider-track {
    height: 3px;
    width: calc(100% + 18px);
    margin-top: -2px;
    top: 50%;
    left: -9px;
}

.slider.slider-horizontal .slider-selection,
.slider.slider-horizontal .slider-track-low,
.slider.slider-horizontal .slider-track-high {
\theight: 100%;
\ttop: 0;
\tbottom: 0;
}

.slider.slider-horizontal .slider-handle {
\tmargin-left: -11px;
}

.slider.slider-horizontal .slider-tick-label-container {
\twhite-space: nowrap;
\tmargin-top: 20px;
}

.slider.slider-horizontal .tooltip {
\t-ms-transform: translateX(-50%);
\ttransform: translateX(-50%);
\tposition: absolute;
}

.slider input { display: none; }

.slider .tooltip.top { margin-top: -40px; }

.slider .tooltip-inner {
\twhite-space: nowrap;
\tmax-width: none;
\tbackground-color: #333;
\tpadding: 4px 12px;
\tline-height: 21px;
\tcolor: #fff;
\tfont-size: 14px;
\tborder-radius: 4px;
}

.slider .tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #333;
}

.tooltip.tooltip-min,
.tooltip.tooltip-max { display: none; }

.slider .hide { display: none; }

.slider-track {
\tposition: absolute;
\tcursor: pointer;
\tborder-radius: 4px;
\tbackground-color: #e0e0e0;
}

.slider-selection {
\tposition: absolute;
\tbackground-color: #66676b;
\tbox-sizing: border-box;
\tborder-radius: 4px;
}

.slider-track-low,
.slider-track-high {
\tposition: absolute;
\tbackground: transparent;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\tborder-radius: 4px;
}

.slider-handle {
\tposition: absolute;
\ttop: 0;
\twidth: 20px;
\theight: 20px;
\tborder: 2px solid #66676b;
\tcursor: pointer;
\tz-index: 20;
\tborder-radius: 50%;
}

.slider-handle:after {
\tposition: absolute;
\tcontent: \"\";
\theight: 100%;
\twidth: 100%;
\ttop: 0;
\tleft: 0;
\tbackground-color: #fff;
\tborder-radius: 50%;
\tz-index: 30;
\tdisplay: block;
\tbox-shadow: 0 0 0px 6px rgba(102,103,107,.12);
\ttransition: 0.2s;
}

.slider-handle:hover:after {
\tbox-shadow: 0 0 0px 8px rgba(102,103,107,.12);
}

.slider-handle.custom {
\tposition: absolute;
\ttop: -5px;
\twidth: 40px;
\theight: 29px;
\tborder: none;
\tcursor: pointer;
\tz-index: 20;
\tborder-radius: 4px;
\tbackground-color: #fff;
\tbox-shadow: 0 1px 4px rgba(0,0,0,0.15);
\ttext-align: center;
}

.slider-handle.custom:after { display: none; }

.slider-handle.custom:before {
\tcontent: \"\\e958 \\e959\";
\tfont-family: \"Material-Icons\";
\tletter-spacing: -10px;
\tfont-size: 21px;
\tcolor: #a0a0a0;
\tmargin-left: -10px;
\ttransition: 0.3s;
}

.slider-handle.custom:hover:before { color: #333; }
.slider.slider-horizontal .slider-handle.custom { margin-left: -20px; }


/* ---------------------------------- */
/* Bootstrap-select
------------------------------------- */
select.bs-select-hidden,
select.selectpicker {
\tdisplay: none !important;
}

.bootstrap-select .btn {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.bootstrap-select > .dropdown-toggle {
\twidth: 100%;
\tpadding-right: 25px;
\tz-index: 1;
}

.bootstrap-select > .dropdown-toggle.bs-placeholder,
.bootstrap-select > .dropdown-toggle.bs-placeholder:hover,
.bootstrap-select > .dropdown-toggle.bs-placeholder:focus,
.bootstrap-select > .dropdown-toggle.bs-placeholder:active {
\tcolor: #808080;
}

.bootstrap-select > select {
\tposition: absolute !important;
\tbottom: 0;
\tleft: 50%;
\tdisplay: block !important;
\twidth: 0.5px !important;
\theight: 100% !important;
\tpadding: 0 !important;
\topacity: 0 !important;
\tborder: none;
}
.bootstrap-select > select.mobile-device {
\ttop: 0;
\tleft: 0;
\tdisplay: block !important;
\twidth: 100% !important;
\tz-index: 2;
}

.has-error .bootstrap-select .dropdown-toggle,
.error .bootstrap-select .dropdown-toggle {
\tborder-color: #b94a48;
}

.bootstrap-select.fit-width {
\twidth: auto !important;
}

.bootstrap-select:not([class*=\"col-\"]):not([class*=\"form-control\"]):not(.input-group-btn) {
\twidth: 100%;
}

.bootstrap-select.form-control {
\tmargin-bottom: 0;
\tpadding: 0;
\tborder: none;
}
.bootstrap-select.form-control:not([class*=\"col-\"]) {
\twidth: 100%;
}
.bootstrap-select.form-control.input-group-btn {
\tz-index: auto;
}
.bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child) > .btn {
\tborder-radius: 0;
}
.bootstrap-select.btn-group:not(.input-group-btn),
.bootstrap-select.btn-group[class*=\"col-\"] {
\tfloat: none;
\tdisplay: flex;
\tmargin-left: 0;
}
.bootstrap-select.btn-group.dropdown-menu-right,
.bootstrap-select.btn-group[class*=\"col-\"].dropdown-menu-right,
.row .bootstrap-select.btn-group[class*=\"col-\"].dropdown-menu-right {
\tfloat: right;
}
.form-inline .bootstrap-select.btn-group,
.form-horizontal .bootstrap-select.btn-group,
.checkbox .bootstrap-select.btn-group {
\tmargin-bottom: 0;
}
.checkbox-lg .bootstrap-select.btn-group.form-control,
.checkbox-sm .bootstrap-select.btn-group.form-control {
\tpadding: 0;
}
.checkbox-lg .bootstrap-select.btn-group.form-control .dropdown-toggle,
.checkbox-sm .bootstrap-select.btn-group.form-control .dropdown-toggle {
\theight: 100%;
\tfont-size: inherit;
\tline-height: inherit;
\tborder-radius: inherit;
}
.form-inline .bootstrap-select.btn-group .form-control {
\twidth: 100%;
}
.bootstrap-select.btn-group.disabled,
.bootstrap-select.btn-group > .disabled {
\tcursor: not-allowed;
}
.bootstrap-select.btn-group.disabled:focus,
.bootstrap-select.btn-group > .disabled:focus {
\toutline: none !important;
}
.bootstrap-select.btn-group.bs-container {
\tposition: absolute;
\theight: 0 !important;
\tpadding: 0 !important;
}
.bootstrap-select.btn-group.bs-container .dropdown-menu {
\tz-index: 1060;
}

.bootstrap-select.btn-group .dropdown-toggle .filter-option {
    overflow: hidden;
    width: 100%;
    line-height: 48px;
    text-align: left;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 90%;
    float: left;
    height: 48px;
    display: block;
}

.bootstrap-select.btn-group .dropdown-menu li.hidden {
    display: none;
}

.language-switcher.bootstrap-select.btn-group .dropdown-toggle .filter-option,
.sort-by .bootstrap-select.btn-group .dropdown-toggle .filter-option {
    max-width: 100%;
    float: left;
}

.sort-by .bootstrap-select.btn-group .dropdown-toggle .filter-option {
    line-height: 20px;
    height: auto;
}

.bootstrap-select.btn-group .dropdown-toggle .caret {
\tposition: absolute;
\ttop: 50%;
\tright: 20px;
\tmargin-top: -2px;
\tvertical-align: middle;
\ttransition: 0.35s;
}

.bootstrap-select.open .dropdown-toggle .caret {
\ttransform: rotate(180deg)
}

.bootstrap-select.btn-group[class*=\"col-\"] .dropdown-toggle {
\twidth: 100%;
}

.bootstrap-select.btn-group .dropdown-menu {
\tmin-width: 100%;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\tfont-size: 16px;
}

.bootstrap-select.btn-group .dropdown-menu.inner {
\tposition: static;
\tfloat: none;
\tborder: 0;
\tpadding: 0 5px;
\tborder-radius: 0;
\tbox-shadow: none;
}

.bootstrap-select.btn-group .dropdown-menu li {
    position: relative;
    margin-bottom: 1px;
}

.bootstrap-select.btn-group .dropdown-menu li.disabled {
\topacity: 0.75;
}

.bootstrap-select.btn-group .dropdown-menu li.active small {
\tcolor: #fff;
}

.bootstrap-select.btn-group .dropdown-menu li.disabled a {
\tcursor: not-allowed;
}
.bootstrap-select.btn-group .dropdown-menu li a {
\tcursor: pointer;
\t-webkit-user-select: none;
\t  -moz-user-select: none;
\t   -ms-user-select: none;
\t       user-select: none;
}

.bootstrap-select.btn-group .dropdown-menu li a span.text {
\tdisplay: inline-block;
}
.bootstrap-select.btn-group .dropdown-menu li small {
\tpadding-left: 7px;
\topacity: 0.8;
}

.bootstrap-select.btn-group .dropdown-menu .notify {
\tposition: absolute;
\tbottom: 5px;
\twidth: calc(100% - 20px);
\tmargin: 0;
\tmin-height: 26px;
\tpadding: 3px 5px;
\tpointer-events: none;
\tpadding: 5px 10px;
\tbackground: #333;
\tcolor: #fff;
\tmargin: 5px;
\tmargin-bottom: 5px;
\tborder-radius: 4px;
\twhite-space: nowrap;
\tfont-size: 14px;
\tborder: none;
}

.bootstrap-select.btn-group .no-results {
\tpadding: 5px 10px;
\tbackground: #f6f6f6;
\tmargin: 5px 0;
\tmargin-bottom: 0;
\tborder-radius: 4px;
\twhite-space: nowrap;
\tfont-size: 14px;
}

.bootstrap-select.btn-group.fit-width .dropdown-toggle .filter-option {
\tposition: static;
}

.bootstrap-select.btn-group.fit-width .dropdown-toggle .caret {
\tposition: static;
\ttop: auto;
\tmargin-top: -1px;
}

.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {
\twhite-space: normal;
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle {
\tz-index: 1061;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:before {
\tcontent: '';
\tborder-left: 7px solid transparent;
\tborder-right: 7px solid transparent;
\tborder-bottom: 7px solid rgba(204, 204, 204, 0.2);
\tposition: absolute;
\tbottom: -4px;
\tleft: 9px;
\tdisplay: none;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:after {
\tcontent: '';
\tborder-left: 6px solid transparent;
\tborder-right: 6px solid transparent;
\tborder-bottom: 6px solid white;
\tposition: absolute;
\tbottom: -4px;
\tleft: 10px;
\tdisplay: none;
}
.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
\tbottom: auto;
\ttop: -3px;
\tborder-top: 7px solid rgba(204, 204, 204, 0.2);
\tborder-bottom: 0;
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
\tbottom: auto;
\ttop: -3px;
\tborder-top: 6px solid white;
\tborder-bottom: 0;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
\tright: 12px;
\tleft: auto;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
\tright: 13px;
\tleft: auto;
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before,
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after {
\tdisplay: block;
}

.bs-searchbox,
.bs-actionsbox,
.bs-donebutton {
\tpadding: 0 5px;
}

.bs-actionsbox {
\twidth: 100%;
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\tpadding: 0 5px;
\tmargin-bottom: 10px;
\tmargin-top: -5px;
}

.bs-actionsbox div { display: flex; }

.bootstrap-select.btn-group .bs-actionsbox div button {
\tflex: 1;
    background: #f6f6f6;
    box-shadow: none;
    padding: 5px;
    height: 36px;
    font-size: 14px;
    color: #777;
    transition: 0.3s;
}

.bootstrap-select.btn-group .bs-actionsbox div button:first-child {
\tborder-radius: 4px 0 0 4px;
\tbackground-color: #f0f0f0;
}

.bootstrap-select.btn-group .bs-actionsbox div button:last-child {
\tborder-radius: 0 4px 4px 0;
}

.bootstrap-select.btn-group .bs-actionsbox div button:hover {
    background: #66676b;
    color: #fff;
}

.bs-actionsbox .btn-group button {
\twidth: 50%;
}

.bs-donebutton {
\tfloat: left;
\twidth: 100%;
\t-webkit-box-sizing: border-box;
\t  -moz-box-sizing: border-box;
\t       box-sizing: border-box;
}

.bs-donebutton .btn-group button {
\twidth: 100%;
}

.bs-searchbox + .bs-actionsbox {
\tpadding: 0;
}

.bs-searchbox .form-control:focus,
.bs-searchbox .form-control {
    margin-bottom: 0;
    width: 100%;
    float: none;
    box-shadow: none;
    background: #f4f4f4;
    margin: -5px 0 10px 0;
    height: 38px;
    line-height: 38px;
    padding: 10px;
}

.bs-searchbox {
\tposition: relative;
}

.bs-searchbox:after {
\tfont-family: \"Material-Icons\";
\tcontent: \"\\e982\";
\tfont-size: 20px;
\twidth: 20px;
\theight: 20px;
\tline-height: 0;
\tdisplay: inline-block;
\tposition: absolute;
\tmargin: 0;
\tcolor: #a0a0a0;
\tright: 15px;
\ttop: 18px;
}

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid #aaa;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

.dropup,
.dropdown {
  position: relative;
}

.dropdown-toggle:focus {
  outline: 0;
}

.dropdown-menu {
\tposition: absolute;
\ttop: 100%;
\tleft: 0;
\tz-index: 1000;
\tdisplay: none;
\tfloat: left;
\tpadding: 10px 5px;
\tmargin: -4px 0 0 0;
\tfont-size: 15px;
\ttext-align: left;
\tlist-style: none;
\tbackground-color: #fff;
\tborder: none;
\tborder-radius: 4px;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

.dropdown-menu.pull-right {
\tright: 0;
\tleft: auto;
}
.dropdown-menu .divider {
\tdisplay: none;
}
.dropdown-menu > li > a {
\tdisplay: block;
\tpadding: 7px 10px;
\tpadding-right: 35px;
\tclear: both;
\tfont-weight: normal;
\tline-height: 21px;
\tcolor: #808080;
\tborder-radius: 4px;
}


.bootstrap-select:before {
\tcontent: \"\";
\tposition: absolute;
\tz-index: 2100;
\tbottom: 0px;
\tleft: 0;
\theight: 8px;
\twidth: 100%;
\tbackground-color: #fff;
\tdisplay: block;
\topacity: 0;
\tpointer-events: none;
\ttransition: 0.4s;
}

.bootstrap-select.open:before {
\topacity: 1;
}


.dropdown-menu > li > a:hover,
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover {
\tcolor: #66676b;
\ttext-decoration: none;
\tbackground-color: rgba(102,103,107,0.07);
}

.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover{
  color: #777;
}

.dropdown-menu > .disabled > a:hover {
\ttext-decoration: none;
\tcursor: not-allowed;
\tbackground-color: transparent;
\tbackground-image: none;
}

/* Custom Scrollbar for -wekbit */
.dropdown-menu.inner::-webkit-scrollbar { width: 5px; }

.dropdown-menu.inner::-webkit-scrollbar-track {
    background-color: rgba(0,0,0,0.0);
    border-radius: 12px;
}

.dropdown-menu.inner::-webkit-scrollbar-thumb {
    border-radius: 12px;
    background-color: #d8d8d8;
}

.dropdown-menu.inner::-webkit-scrollbar-thumb:hover {
    border-radius: 12px;
    background-color: #c8c8c8;
}


.bootstrap-select .dropdown-menu {
\topacity: 0;
\ttransition: 0.4s;
\tdisplay: block;
\tpointer-events: none;
\tvisibility: hidden;
\tcursor: default;
}

.bootstrap-select.open .dropdown-menu {
\topacity: 1;
\tpointer-events: all;
\tvisibility: visible;
}

.open > a {
\toutline: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

.dropdown-menu-left {
\tright: auto;
\tleft: 0;
}

.dropdown-header {
\tdisplay: block;
\tpadding: 7px 10px;
\tline-height: 20px;
\twhite-space: nowrap;
\tbackground: #f6f6f6;
\tcolor: #777;
\tborder-radius: 4px;
\tmargin-bottom: 1px;
}

.dropdown-backdrop {
\tposition: fixed;
\ttop: 0;
\tright: 0;
\tbottom: 0;
\tleft: 0;
\tz-index: 990;
}

.pull-right > .dropdown-menu {
\tright: 0;
\tleft: auto;
}

.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
\tcontent: \"\";
\tborder-top: 0;
\tborder-bottom: 4px dashed;
\tborder-bottom: 4px solid \\9;
}

.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: 100%;
  bottom: auto;
  margin-bottom: 2px;
}

@media (min-width: 767px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0;
  }
}

.bootstrap-select.btn-group {
\tposition: relative;
}

.bootstrap-select.btn-group button {
\tposition: relative;
\tdisplay: inline-block;
    height: 48px;
    line-height: 0;
    padding: 0 20px;
    margin: 0;
    outline: none;
    font-size: 16px;
    color: #808080;
    max-width: 100%;
    width: 100%;
    box-sizing: border-box;
    display: block;
    background-color: #fff;
    font-weight: 500;
    opacity: 1;
    border-radius: 4px;
    border: none;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}


/* Select Check Icon */
.hide-tick .check-mark { display: none !important; }
.bootstrap-select.btn-group .dropdown-menu li a span.check-mark {
\tposition: absolute;
\tdisplay: inline-block;
\tright: 8px;
\ttop: 50%;
\ttransform: translateY(-50%);
\tmargin: 0;
\tline-height: 0;
\twidth: 20px;
\theight: 20px;
\ttext-align: center;
}

.bootstrap-select.btn-group .dropdown-menu li span.check-mark:before {
\tfont-family: \"Feather-Icons\";
\tcontent: \"\\e92b\";
\tfont-size: 18px;
\ttransition: all 0.3s;
\tdisplay: inline-block;
\ttop: 50%;
\tright: 0;
\tposition: absolute;
\tmargin: 0;
\topacity: 0;
\ttransform: scale(0.5);
}

.bootstrap-select.btn-group .dropdown-menu li.selected span.check-mark:before {
\topacity: 1;
\ttransform: scale(1);
\ttransition: all 0.35s cubic-bezier(0.3,-.41,.19,2), opacity 0.3s;
}

.bootstrap-select .dropdown-menu li.selected a span.check-mark:before,
.bootstrap-select .dropdown-menu li.selected:hover a span.check-mark:before {
\tcolor: #66676b;
}

/* Icons*/
.bootstrap-select .glyphicon:not(.check-mark) {
\tfont-size: 17px;
\tline-height: 0;
\tposition: relative;
\ttop: 1px;
\tmargin-right: 3px;
}

.bootstrap-select .filter-option .glyphicon {
\tposition: relative;
\ttop: 1px;
}

/* Styles with border */
.with-border .dropdown-menu,
.with-border.bootstrap-select.btn-group button {
\tborder: 1px solid #e0e0e0;
\tbox-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
}

.with-border.bootstrap-select:before {
\twidth: calc(100% - 2px);
\tleft: 1px;
}

/* ---------------------------------- */
/* Snackbar
------------------------------------- */
.snackbar-container {
\ttransition: all 500ms ease;
\ttransition-property: top, right, bottom, left, opacity;
\tfont-size: 16px;
\tmin-height: 14px;
\tbackground-color: #404040;
\tposition: fixed;
\tdisplay: flex;
\tjustify-content: space-between;
\talign-items: center;
\tcolor: #fff;
\tline-height: 22px;
\tpadding: 18px 24px;
\tbottom: -100px;
\ttop: -100px;
\topacity: 0;
\tz-index: 9999;
\tcursor: default;
\tborder-radius: 4px;
\tfont-weight: 500;
}

.snackbar-container .action {
    background: inherit;
    display: inline-block;
    border: none;
    font-size: inherit;
    text-transform: uppercase;
    color: #aaa;
    margin: 0 0 0 24px;
    padding: 0;
    min-width: min-content;
    cursor: pointer;
    font-weight: 500;
    font-size: 14px;
}

@media (min-width: 640px) {
\t.snackbar-container {
\t\tdisplay: inline-flex;
\t\tmargin: 24px;
\t}
}


.snackbar-pos.bottom-center {
\ttop: auto !important;
\tbottom: 0;
\tleft: 50%;
\ttransform: translate(-50%, 0);
}

.snackbar-pos.bottom-left {
\ttop: auto !important;
\tbottom: 0;
\tleft: 0;
}

.snackbar-pos.bottom-right {
\ttop: auto !important;
\tbottom: 0;
\tright: 0;
}

.snackbar-pos.top-left {
\tbottom: auto !important;
\ttop: 0;
\tleft: 0;
}

.snackbar-pos.top-center {
\tbottom: auto !important;
\ttop: 0;
\tleft: 50%;
\ttransform: translate(-50%, 0);
}

.snackbar-pos.top-right {
\tbottom: auto !important;
\ttop: 0;
\tright: 0
}

@media (max-width: 640px) {
\t.snackbar-container {
\t\tleft: 0;
\t\tright: 0;
\t\twidth: 100%;
\t\tborder-radius: 0;
\t}
\t.snackbar-pos.bottom-center, .snackbar-pos.top-center {
\t\tleft: 0;
\t\ttransform: none;
\t}
}

/* ---------------------------------- */
/* Google Autocomplete
------------------------------------- */
body .pac-item {
    font-size: 12px;
    color: #999;
    cursor: pointer;
    transition: 0.2s;
    padding: 5px 15px;
}

body .pac-container {
    border-radius: 0 0 4px 4px;
    border: none;
    box-sizing: content-box;
    margin-top: -2px;
    background-color: #fff;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 2px 4px 0px rgba(0, 0, 0, 0.08);
    z-index: 100;
}

/* ---------------------------------- */
/* Google Maps
------------------------------------- */
.infoBox { 
\tborder-radius: 4px;
\tdisplay: flex;
\tflex-wrap: wrap;
\twidth: calc(100% + 30px);
\tline-height: 24px;
}

.infoBox .job-listing {
\tdisplay: flex;
\tflex-direction: column;
\tjustify-content: center;
\tmargin: 0;
\tbox-shadow: none;
\twidth: 100%;
}

.infoBox .job-listing .job-listing-description {
\tpadding-top: 0;
}

.infoBox .job-listing:hover {
\ttransform: none;
}

.infoBox .job-listing-details {
\tflex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 20px 25px;
}

.infoBox .job-listing h4.job-listing-company {
\tfont-size: 14px;
\tposition: relative;
\ttop: 0px;
}

.infoBox .job-listing .verified-badge {
\ttransform: scale(0.85);
\tright: -7px;
\tbottom: -7px;
}

.infoBox .job-listing .not-verified-badge {
\tdisplay: none;
}

.infoBox .job-listing-footer {
\tflex-grow: 0;
\tpadding: 15px 25px;
\tfont-size: 16px;
\tdisplay: none;
}

.infoBox .job-listing h3.job-listing-title {
\tfont-size: 16px;
\tline-height: 24px;
}

.infoBox .job-listing .job-listing-company-logo {
\tmax-width: 46px;
\tmargin: 5px 18px 5px 0;
\ttop: 0;
\tflex: 0 0 46px;
}

.infoBox .job-listing .job-listing-company-logo img { max-width: 46px; }


.map-box {
\tbackground-color: #fff;
\tmargin-bottom: 20px;
\tborder-radius: 4px;
\tbox-shadow: 0px 0px 10px 0px rgba(0,0,0,0.12);
\tposition: relative;
\twidth: 100%;
}

.map-box .listing-img-container img {
    width: 100%;
    border-radius: 4px 4px 0 0;
}

.map-box h4 {
\tmargin: 0;
\tpadding: 0;
}

.map-box h4 a {
\tpadding: 0 0 2px 0;
\tfont-size: 17px;
\tline-height: 25px;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tdisplay: inline-block;
}

.listing-img-container {
\tposition: relative;
\theight: 100%;
\tdisplay: block;
}

.map-box h4 a:hover { color: #66676b; }

.map-box p {
\tpadding: 0;
\tline-height: 25px;
\tmargin: 2px 0 0 0;
\tfont-size: 14px;
}

.map-box ul.listing-details {
\tpadding: 0;
\tfont-size: 14px;
\tdisplay: none;
}

.map-box .listing-title {
\tpadding: 16px 22px;
}


.map-box .listing-img-content {
\tpadding: 18px 22px;
}


.map-box .listing-img-content span {
\tfont-size: 21px;
}

.map-box .listing-img-content .listing-price i {
    font-size: 15px;
    margin: -7px 0 0 0;
}


.infoBox > img {
\tposition: absolute !important;
\tright: 0px;
\ttop: 0px;
}

.map-box .listing-img-container::before {
    content:\"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
\tbackground: linear-gradient(to top, rgba(35,35,37,0.85) 0%, rgba(35,35,37,0.40) 35%, rgba(22,22,23,0) 60%, rgba(0,0,0,0) 100%);
\tbackground-color: rgba(35,35,37,0.2);
}

.map-box .listing-item-content {
    position: absolute;
    bottom: 20px;
    left: 0;
    padding: 0 24px;
    width: 100%;
    z-index: 50;
    box-sizing: border-box;
}

.map-box .listing-item-content h3 {
    color: #fff;
    font-size: 18px;
    padding: 0 0 2px 0;
    font-weight: 500;
    margin: 0;
    line-height: 27px;
}

.map-box .listing-item-content span {
    font-size: 15px;
    font-weight: 300;
    display: inline-block;
    color: rgba(255,255,255,0.7);
}


/* Close Button */
.infoBox-close {
\tposition: absolute;
\ttop: 12px;
\tright: 12px;
\tdisplay: inline-block;
\tz-index: 999;
\ttext-align: center;
\tcursor: pointer;
\tfont-size: 15px;
\tfont-weight: 500;
\theight: 27px;
\twidth: 27px;
\tline-height: 27px;
\tbackground-color: #f0f0f0;
\tcolor: #666;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\tborder-radius: 4px;
}

.infoBox-close i {
\tposition: relative;
\ttop: 2px;
\tleft: -0.5px;
}

.infoBox-close:hover {
\tcolor: #fff;
\tbackground-color: #66676b;
}


/* Read More Icon */
.map-box-icon {
\theight: 38px;
\twidth: 38px;
\tposition: absolute;
\tbottom:0;
\tright:0;
\tbackground-color: #3685cf;
\tdisplay: block;
\tcolor: #fff;
\tfont-size: 12px;
\tz-index: 101;
\ttext-align: center;
\t-webkit-transition: all 0.2s ease-in-out;
\t-moz-transition: all 0.2s ease-in-out;
\t-o-transition: all 0.2s ease-in-out;
\t-ms-transition: all 0.2s ease-in-out;
\ttransition: all 0.2s ease-in-out;
\t-webkit-transform: translateX(50%);
\t-ms-transform: translateX(50%);
\ttransform: translateX(50%);
\topacity:0;
\tvisibility: hidden;
}

.map-box-icon:before {
\tcontent: \"\\f064\";
\tfont-family: \"FontAwesome\";
\tposition: relative;
\ttop: 7px;
\tdisplay: block;
}

.map-box-image:hover .map-box-icon {
\topacity: 1;
\tvisibility: visible;
\t-webkit-transform: translateY(0);
\t-ms-transform: translateY(0);
\ttransform: translateX(0);
}

.map-box-image {
\tposition: relative;
\toverflow: hidden;
\tdisplay: block;
}

.infoBox {
\tanimation: infoBoxAnimation 0.5s;
}

/* Standard syntax */
@keyframes infoBoxAnimation {
    from {opacity: 0; transform: translateY(-10px); }
    to {opacity: 1; transform: translateY(0px); }
}

.infoBox .star-rating span { margin-right: 3px; }

.infoBox .rating-counter {
\tposition: relative;
\ttop: -1px;
}

.infoBox:after {
\tcontent: \"\";
\tposition: absolute;
\tbottom: 5px;
\tleft: 50%;
\ttransform: translateX(-50%);
\twidth: 0;
\theight: 0;
\tborder-left: 16px solid transparent;
\tborder-right: 16px solid transparent;
\tborder-top: 16px solid #fff;
}

#map {
\theight: 100%;
\twidth: 100%;
\tmargin: 0;
\tz-index: 990;
}

#map-container {
\tposition: relative;
\ttop: 0;
\tleft: 0;
\theight: 520px;
\twidth: 100%;
\tz-index: 990;
\tmargin-bottom: 60px;
}

.gmnoprint { margin: 10px; }

.homepage-map {
    height: 560px;
    margin-bottom: 0;
    position: relative;
  
}

.search-bar-on-map {
\tposition: absolute;
\tbottom: 50px;
\tz-index: 1000;
\tmargin: 0 auto;
\tleft: 0;
\tright: 0;
}

/* Cluster styles */
.cluster img { display:none }

.cluster-visible {
\ttext-align: center;
\tfont-size: 14px !important;
\tcolor: #fff !important;
\tfont-weight: 700;
\tborder-radius: 50%;
\twidth: 33px !important;
\theight: 33px !important;
\tline-height: 33px !important;
\tbackground-color: #66676b;
\tanimation: clusterAnimation 2.5s infinite;
}

@keyframes clusterAnimation {
\t0%,100% {
\t\tbox-shadow: 0 0 0 6px rgba(102,103,107,0.15);
\t}
\t50% {
\t\tbox-shadow: 0 0 0 10px rgba(102,103,107,0.15);
\t}
}


/* Marker */
.map-marker-container { position: absolute; }

.marker-container {
\tposition: relative;
\tmargin: -9px 0 0 -9px;
\twidth: 18px;
\theight: 18px;
\tz-index: 1;
\tborder-radius: 50%;
\tcursor: pointer;
\ttop: 0;
\tbackground-color: #66676b;
\tanimation: markerAnimation 2.5s infinite;
\ttransition: 0.4s;
}

@keyframes markerAnimation {
\t0%,100% {
\t\tbox-shadow: 0 0 0 6px rgba(102,103,107,0.15);
\t}
\t50% {
\t\tbox-shadow: 0 0 0 8px rgba(102,103,107,0.15);
\t}
}

/* Clicked & Hover States */
.map-marker-container.clicked .marker-container {
\ttransform: scale(1.3);
}

.marker-container:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tdisplay: block;
\tbackground-color: transparent;
\tborder-radius: 50%;
\ttransform: scale(2);
\topacity: 0;
}


/* Custom Zoom Buttons
------------------------------------- */
.custom-zoom-in,
.custom-zoom-out {
\tbackground-color: #fff;
\tcolor: #333;
\tcursor: pointer;
\tborder-radius: 4px;
\tmargin: 5px 15px;
\ttransition: 0.3s;
\tbox-shadow: 0px 2px 4px 0 rgba(0, 0, 0, 0.1);
\ttext-align: center;
\tfont-size: 18px;
\theight: 34px;
\twidth: 34px;
}

.custom-zoom-in:hover,
.custom-zoom-out:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
}

.custom-zoom-in:before,
.custom-zoom-out:before  {
\tfont-family: \"Feather-Icons\";
\twidth: 100%;
\tline-height: 35px;
}

.zoomControlWrapper {
\tposition: absolute;
\tleft: initial;
\tright: 0;
\twidth: 70px;
\tmargin-right: 20px;
}

.custom-zoom-in:before { content: \"\\e9b1\"; }
.custom-zoom-out:before  { content: \"\\e996\"; }


/* Street View Button
------------------------------------- */
#streetView,
#geoLocation,
#scrollEnabling {
\tbackground-color: #fff;
\tcolor: #333;
\tcursor: pointer;
\tborder-radius: 4px;
\tmargin: 5px 15px;
\ttransition: 0.3s;
\tbox-shadow: 0px 2px 4px 0 rgba(0, 0, 0, 0.1);
\tposition: absolute;
\ttop: 10px;
\tleft: 5px;
\tz-index: 99;
\tfont-size: 14px;
\tline-height: 21px;
\tpadding: 8px 14px;
\tfont-weight: 500;
}

#geoLocation:hover,
#streetView:hover,
#scrollEnabling:hover,
#scrollEnabling.enabled {
\tbackground-color: #66676b;
\tcolor: #fff;
}

#streetView:before {
\tcontent: \"\\e974\";
\tfont-family: \"Material-Icons\";
\tfont-size: 18px;
\ttop: 3px;
\tposition: relative;
\tmargin-right: 7px;
\tmargin-left: -1px;
\tline-height: 0;
}


/* -------------------------------------------------------------- */
/*  06. Single Pages
----------------------------------------------------------------- */

/* Boxed List for Single Page 
------------------------------------- */
.boxed-list {
\tmargin-top: 10px;
\tdisplay: block;
}

.boxed-list-headline {
\tbackground-color: #f2f2f2;
\tborder-radius: 4px;
\tpadding: 20px 35px;
}

.boxed-list-headline h3 { font-size: 18px; }
.boxed-list-headline h3 span { color: #888; }

.boxed-list-headline h3 i {
\tfont-size: 18px;
\tcolor: #66676b;
\tfont-size: 24px;
\tposition: relative;
\ttop: 3px;
\tline-height: 0;
\tdisplay: inline-block;
\tmargin-right: 5px;
}

.boxed-list ul.boxed-list-ul {
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
}

.boxed-list ul.boxed-list-ul > li {
\tdisplay: block;
\tbackground-color: transparent;
\tpadding: 35px;
\tborder-radius: 4px;
}

.boxed-list ul.boxed-list-ul > li:nth-child(2n) {
\tbackground-color: #fafafa;
}

/* Fields UL */
.fields-ul {
\tpadding: 0;
\tmargin: 0;
\tlist-style: none;
}

.fields-ul > li {
\tdisplay: block;
\tbackground-color: transparent;
\tpadding: 30px;
\tpadding-bottom: 10px;
\tborder-bottom: 1px solid #e4e4e4
}


/* Boxed List Item
------------------------------------- */
.boxed-list-item {
\tdisplay: flex;
}

.boxed-list-item .item-image {
\tflex: 0 0 60px;
\theight: 60px;
\tborder-radius: 4px;
\tbox-shadow: 0 0 10px rgba(0,0,0,0.1);
\tpadding: 10px;
\tmargin-right: 25px;
\tposition: relative;
\ttop: -2px;
\tdisplay: flex;
\tbackground-color: #fff;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.boxed-list-item .item-image { max-width: 60px; }
\t.boxed-list-item .item-image img { width: 100%; }
}
/* IE 11 Fixes - End */

.boxed-list-item .item-image img {
\theight: auto;   
\talign-self: center;
}

.boxed-list-item .item-content h4 a,
.boxed-list-item .item-content h4 {
\tfont-size: 18px;
\tfont-weight: 600;
\tcolor: #333;
}

.boxed-list-item .item-content h4 span {
\tfont-size: 16px;
\tcolor: #808080;
\tdisplay: block;
\tfont-weight: 500;
}

.boxed-list-item .item-details {
\tdisplay: flex;
\tmargin-top: 5px;
}

.boxed-list-item .item-details .star-rating {
\ttop: -2px;
\tposition: relative;
\tmargin-right: 15px;
}

.boxed-list-item .item-details .detail-item {
\tmargin-right: 15px;
\tcolor: #808080;
}

.boxed-list-item .item-details .detail-item a { color: #808080; }
.boxed-list-item .item-details .detail-item a:hover { color: #66676b; }

.boxed-list-item .item-details .detail-item i {
\tmargin-right: 3px;
\tposition: relative;
\ttop: 0;
}

.boxed-list-item .item-description p { margin-bottom: 0; padding-bottom: 0; }

.boxed-list-item .item-description {
\tmargin-top: 15px;
}


/* Bid 
------------------------------------- */
.bid {
\tdisplay: flex;
\twidth: 100%;
}

.bid .bids-content {
\tflex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.bid .bids-bid {
\talign-items: center;
\tdisplay: flex;
}

.bid .bids-avatar { align-self: center; }

.bid .freelancer-name { margin-top: 0; }

.bid .freelancer-avatar {
\twidth: 80px;
\tmargin: 0 auto;
\tposition: relative;
\tmargin-right: 30px;
}

.bid .star-rating { margin-top: 3px; display: block }

.bid .freelancer-avatar img {
\twidth: 100%;
\tborder-radius: 50%;
\tcursor: pointer;
}

.bid .freelancer-avatar .verified-badge {
\tposition: absolute;
\tbottom: 0;
\tright: 0;
}

/* Bid Rate */
.bid-rate {
\ttext-align: center;
\tfont-size: 14px;
\tbackground: #f4f4f4;
\tcolor: #888;
\tborder-radius: 4px;
\tpadding: 8px 12px;
}

.boxed-list ul.boxed-list-ul > li:nth-child(2n) .bid-rate {
\tbackground: #f2f2f2;
}

.bid-rate .rate {
\tcolor: #333;
\tfont-weight: 600;
\ttext-align: center;
\tline-height: 20px;
\tborder-radius: 4px;
\tpadding: 5px 10px;
\tpadding-bottom: 0;
\tfont-size: 16px;
}

.bid-rate span {
\tdisplay: block;
\tmargin-top: -2px;
}

@media (max-width: 768px) {
\t.bid .freelancer-avatar {
\t\twidth: 70px;
\t\tmargin: 0 0 15px 0;
\t}
\t.bid {
\t\tdisplay: block;
\t}
\t.bids-bid { margin-top: 15px; }
\t.bid-rate { width: 100%; }
}


/* Single Job
------------------------------------- */
.job-overview {
    border-radius: 4px;
    background-color: #f9f9f9;
}

.job-overview .job-overview-headline {
    color: #333;
    font-size: 20px;
    padding: 20px 35px;
    background-color: #f0f0f0;
    color: #333;
    position: relative;
    border-radius: 4px 4px 0 0;
}

.job-overview .job-overview-inner {
    padding: 35px;
}

.job-overview .job-overview-inner ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

/* List Item */
.job-overview .job-overview-inner ul li {
\tposition: relative;
\tdisplay: block;
\tfont-size: 16px;
\tpadding-left: 38px;
\tmargin-bottom: 25px;
}

.job-overview .job-overview-inner ul li:last-child {
\tmargin-bottom: 0;
}

.job-overview .job-overview-inner ul li span {
\tfont-weight: 600;
\tcolor: #333;
\tmargin: 0;
\tpadding: 0;
\tdisplay: block;
}

.job-overview .job-overview-inner ul li h5 {
\tfont-weight: 500;
\tcolor: #666;
\tfont-size: 16px;
\tmargin: 0;
\tpadding: 0;
\tline-height: 20px;
}

.job-overview .job-overview-inner ul li i {
\tposition: absolute;
\tleft: 0;
\ttop: 0;
\tfont-size: 24px;
\tcolor: #66676b;
}

/* Apply Now Button */
a.apply-now-button {
\tbackground-color: #66676b;
\tcolor: #fff;
\ttext-align: center;
\tfont-size: 18px;
\tborder-radius: 4px;
\tpadding: 14px 20px;
\tmargin-bottom: 35px;
\tbox-shadow: 0 2px 8px rgba(102,103,107,0.15);
\ttransition: 0.3s;
\tdisplay: block;
}

a.apply-now-button:hover {
\ttransform: translateY(-3px);
\tbox-shadow: 0 2px 8px rgba(102,103,107,0.35);
}

a.apply-now-button i {
\tfont-size: 22px;
\tposition: relative;
\tline-height: 0;
\ttop: 3px;
\tmargin-left: 5px;
}

/* Single Job Map */
#single-job-map-container {
\tposition: relative;
}

#single-job-map-container #singleListingMap {
\tposition: relative;
\theight: 340px;
\tborder-radius: 4px;
}


/* Single Freelancer Profile
------------------------------------- */

/* Freelancer Socials*/
.freelancer-socials ul {
\tmargin: 0;
\tpadding: 0;
\tlist-style: none;
\tcursor: default;
\tmargin: 0 0 -5px -8px;
}

.freelancer-socials ul li {
\tdisplay: inline-block;
\tfont-size: 24px;
}

.freelancer-socials ul li a {
\tcolor: #b9b9b9;
\tpadding: 0 8px;
}

.freelancer-socials ul li a:hover {
\tcolor: #333;
}

/* Attachments */
.attachments-container {
\tdisplay: flex;
\tflex-wrap: wrap;
\tflex-direction: row;
\twidth: calc(100% + 20px);
\tmargin-bottom: -30px;
}

.attachment-box {
\tdisplay: flex;
\tmargin: 0 20px 20px 0;
\tbackground-color: #f4f4f4;
\tborder-radius: 4px 0px 4px 4px;
\tfont-weight: 600;
\tpadding: 15px 20px;
\tpadding-bottom: 45px;
\tpadding-right: 25px;
\tline-height: 24px;
\tflex-direction: column;
\tcolor: #666;
\tposition: relative;
\ttransition: 0.3s;
\tflex: 0 1 calc(50% - 21px);
\tcursor: default;
\tposition: relative;
}

.single-page-section .attachment-box { flex: 0 1 calc(33% - 20px); }
.single-page-section .attachments-container { margin-bottom: -20px; }

a.attachment-box { cursor: pointer; }

.attachment-box:before {
\tcontent: \"\";
\tposition: absolute;
\ttop: 0;
\tright: 0;
\tborder-width: 0 20px 20px 0;
\tborder-style: solid;
\tborder-color: rgba(0,0,0,0.15) #fff;
\ttransition: 0.3s;
\tborder-radius: 0 0 0 4px;
}

a.attachment-box:hover {
\tbackground-color: #66676b;
\tcolor: #fff;
}

a.attachment-box:hover:before { border-color: rgba(0,0,0,0.25) #fff; }

.attachment-box span {
\tfont-size: 14px;
\tline-height: 20px;
\tdisplay: inline-block;
\tflex: auto;
}

.attachment-box i {
\tdisplay: block;
\tfont-style: normal;
\tfont-size: 14px;
\tcolor: #999;
\tfont-weight: 500;
\tmargin-top: 10px;
\tposition: absolute;
\tbottom: 10px;
\ttransition: 0.3s;
}

a.attachment-box:hover i {
\tcolor: rgba(255,255,255,0.7);
}

/* Remove Attachment Button */
.attachment-box .remove-attachment {
\tposition: absolute;
\tbottom: 10px;
\tright: 10px;
\tcolor: #fff;
\tbackground-color: #dc3139;
\tbox-shadow: 0 3px 8px rgba(234,65,81,0.15);
\theight: 28px;
\twidth: 28px;
\tline-height: 28px;
\tborder-radius: 3px;
\tfont-weight: 500;
\tfont-size: 14px;
\ttransition: 0.3s;
\topacity: 0;
\ttransform: translateY(3px);
}

.attachment-box .remove-attachment:before {
\tcontent: \"\\e9e4\";
\tfont-family: \"Feather-Icons\";
}

.attachment-box:hover .remove-attachment {
\topacity: 1;
\ttransform: translateY(0);
}

/* Profile Overview */
.profile-overview {
\tdisplay: flex;
\tline-height: 22px;
\talign-items: center;
\tmargin-bottom: 25px;
\twidth: calc(100% + 25px);
}

.profile-overview .overview-item {
\tflex: 1;
\tborder-right: 1px solid #e0e0e0;
\tmargin-right: 20px;
\tpadding-right: 20px;
\tflex-grow: 1;
}

.profile-overview .overview-item:last-child {
\tborder-right: 0;
\tpadding-right: 0;
}

.profile-overview .overview-item strong {
\tdisplay: block;
\tfont-weight: 600;
\tcolor: #333;
\tfont-size: 18px;
\tmargin-bottom: 5px;
}

.profile-overview .overview-item span {
\tcolor: #808080;
}


/* Freelancer Indicators */
.freelancer-indicators {
\tdisplay: flex;
\tflex-wrap: wrap;
\twidth: calc(100% + 30px);
\tline-height: 24px;
\tmargin-bottom: -20px;
}

.freelancer-indicators .indicator {
\twidth: calc(50% - 31px);
\tmargin-right: 30px;
\tmargin-bottom: 20px;
\tdisplay: flex;
\tflex-direction: column;
}

.freelancer-indicators .indicator strong {
\tcolor: #333;
\tfont-weight: 600;
}

.freelancer-indicators .indicator-bar span,
.freelancer-indicators .indicator-bar {
\twidth: 100%;
\theight: 4px;
\tbackground-color: #e0e0e0;
\tborder-radius: 10px;
\tposition: relative;
\tmargin: 10px 0;
\ttransition: 1s;
}

.freelancer-indicators .indicator-bar span {
\twidth: 0;
\tbackground-color: #66676b;
\tposition: absolute;
\ttop: 0;
\tmargin: 0;
}


/* Media Queriers */
@media (max-width: 1240px) {
\t.profile-overview,
\t.profile-overview .overview-item {
\t\tdisplay: block;
\t\twidth: 100%;
\t}
\t.profile-overview .overview-item {
\t\tborder-right: 0;
\t\tborder-bottom: 1px solid #e0e0e0;
\t\tpadding: 15px 0;
\t\tmargin: 0;
\t}
\t.profile-overview .overview-item:last-child {
\t\tborder-right: none;
\t\tborder-bottom: none
\t}
}

@media (max-width: 768px) {
\t.boxed-list-item .item-details,
\t.attachments-container,
\t.attachments-container .attachment-box,
\t.freelancer-indicators,
\t.freelancer-indicators .indicator {
\t\tdisplay: block;
\t\twidth: 100%;
\t}

\t.boxed-list-item .item-image {
\t   display: none;
\t}
}


/* -------------------------------------------------------------- */
/*  07. Dashboard
----------------------------------------------------------------- */
/* Full Page Adjustments */
.full-page-container,
.dashboard-container {
    height: calc(100vh - 82px);
}

@media (max-width: 1099px) {
\t.full-page-container,
\t.dashboard-container {
\t    height: calc(100vh - 76px);
\t}
}

/* Dashboard Basis */
.dashboard-container {
    display: flex;
    width: 100%;
    flex-wrap: wrap;
}

.dashboard-sidebar {
    flex: 0 0 280px;
    background-color: #fff;
    position: relative;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
    z-index: 100;
}

.dashboard-sidebar .dashboard-sidebar-inner {
    overflow: auto;
    height: 100%;
}

.dashboard-content-container {
    flex: 1;
    background-color: #fafafa;
    padding: 0;
    overflow: auto;
    position: relative;
    z-index: 99;
}

.dashboard-content-inner {
    padding: 50px;
    padding-bottom: 0;
    position: relative;
}


/* Dashboard Header Logo Adjustent */
@media (min-width: 1099px) {
\t#header-container.dashboard-header .container {
\t\tpadding-right: 35px;
\t\tpadding-left: 0;
\t}

\t#header-container.dashboard-header #logo {
\t\twidth: 281px;
\t\tpadding-left: 35px;
\t}
}

@media (max-width: 1240px) {
\t#header-container.dashboard-header #logo {
\t    width: auto;
\t}
}


/* ---------------------------------- */
/* Dashboard Navigation
------------------------------------- */
.dashboard-nav {
\tdisplay: block;
\tz-index: 11;
\tpadding-bottom: 30px;
}

a.dashboard-responsive-nav-trigger { display: none; }

.dashboard-nav ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 25px 0 0 0;
}

.dashboard-nav ul:first-child {
\tmargin: 30px 0 0 0;
}

.dashboard-nav ul:before {
\tcontent: attr(data-submenu-title);
\tpadding: 0 35px;
\tmargin-bottom: 5px;
\tdisplay: block;
\tcolor: #66676b;
\tfont-weight: 600;
\tfont-size: 14px;
}

/* 1st Level */
.dashboard-nav ul li {
\tdisplay: block;
\tborder-left: 3px solid transparent;
\ttransition: 0.3s;
\tline-height: 25px;
\tfont-size: 15px;
}

.dashboard-nav ul li a {
\tcolor: #707070;
\tdisplay: block;
\tpadding: 11px 32px;
\ttransition: 0.3s;
\tcursor: pointer;
\tposition: relative;
}

.dashboard-nav ul li a i {
\tpadding-right: 8px;
\twidth: 20px;
\tfont-size: 20px;
\tcolor: #909090;
\ttransition: 0.3s;
\tposition: relative;
\ttop: 2px;
}


/* Hover State */
.dashboard-nav ul li ul li:hover a { padding-left: 4px; }


.dashboard-nav ul li.active-submenu a i,
.dashboard-nav ul li.active a i,
.dashboard-nav ul li:hover a i {
\tcolor: #66676b;
}

.dashboard-nav ul li.active-submenu,
.dashboard-nav ul li.active,
.dashboard-nav ul li:hover {
\tborder-color: #66676b;
\tbackground-color: rgba(102,103,107,0.04);
}

/*.dashboard-nav ul li:hover {
\tbackground-color: #f8f8f8;
}*/

.dashboard-nav ul li.active-submenu a,
.dashboard-nav ul li:hover a,
.dashboard-nav ul li.active a { color: #66676b; }


/* Nav Tag */
.dashboard-nav ul li span.nav-tag {
\tdisplay: inline-block;
    font-weight: 700;
    height: 19px;
    width: 19px;
    line-height: 19px;
    text-align: center;
    color: #fff;
    font-size: 11px;
    background-color: #66676b;
    border-radius: 50%;
    position: relative;
    margin: 0 0 0 4px;
    top: -2px;
}

/* Dropdown Styles */
.dashboard-nav ul li ul {
\tpadding: 0;
\tmargin: 0;
\tvisibility: hidden;
\tmax-height: 0;
\topacity: 0;
\tline-height: 0;
\ttransition: 0.3s;
\tpointer-events: none;
}

.dashboard-nav ul li.active-submenu ul {
\tvisibility: visible;
\tpadding: 0 0 18px 0;
\tline-height: 24px;
\topacity: 1;
\tmax-height: 200px;
\tpointer-events: all;
}

.dashboard-nav ul li ul li {
\tbackground-color: transparent;
\tborder: none;
\tpadding-left: 63px;
\tposition: relative;
\tmargin: 0;
}

.dashboard-nav ul li ul li a {
\tpadding: 5px 0;
}

.dashboard-nav ul li ul li:hover {
\tborder: none;
\tbackground-color: transparent;
}

/* Indicator Arrow */
.dashboard-nav ul li a:after {
    font-family: \"Material-Icons\";
    content: '\\e914';
    opacity: 1;
    font-size: 16px;
    transition: 0.3s;
    opacity: 1;
    line-height: 17px;
    width: 17px;
    height: 17px;
    background-color: #f0f0f0;
    color: #a8a8a8;
    display: inline-block;
    border-radius: 3px;
    margin-left: 7px;
    text-indent: 0;
    top: 1px;
    position: absolute;
   \tright: 35px;
    top: 15px;
}

.dashboard-nav ul li.active-submenu a:after,
.dashboard-nav ul li.active a:after,
.dashboard-nav ul li:hover a:after {
    color: #66676b;
    background: rgba(102,103,107,0.13);
    opacity: 0.8;
}

.dashboard-nav ul li ul:before,
.dashboard-nav ul li a:only-child:after { content: ''; display: none; }


/* ---------------------------------- */
/* Dashboard Elements
------------------------------------- */

/* Dashboard Headline
------------------------------------- */
.dashboard-headline {
\tdisplay: block;
\tposition: relative;
\tmargin-bottom: 50px;
}

.dashboard-headline h3 {
\tdisplay: block;
\tfont-size: 26px;
\tcolor: #333;
}

.dashboard-headline span {
\tdisplay: block;
\tfont-size: 18px;
\tcolor: #888;
\tline-height: 30px;
\tmargin-top: 5px;
}

.dashboard-headline #breadcrumbs { right: 0; }


/* Fun Facts
------------------------------------- */
.fun-facts-container {
\tdisplay: flex;
    flex-wrap: wrap;
\twidth: calc(100% + 30px);
\tmargin-bottom: -30px;
}

.fun-fact {
\tbackground-color: #fff;
\tbox-shadow: 0 2px 6px rgba(0,0,0,0.08);
\tborder-radius: 4px;
\tpadding: 25px;
\tmargin-right: 30px;
\tmargin-bottom: 30px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
\tflex: 1 1 calc(25% - 30px);
    height: auto;
    cursor: default;
    transition: 0.3s;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
\t.fun-fact { flex: 1; }
}
/* IE 11 Fixes - End */

.fun-fact-icon {
\tborder-radius: 4px;
\tbackground-color: rgba(0,0,0,0.04);
\tflex: 0 0 100px;
\theight: 100px;
\tdisplay: flex;
\ttext-align: center;
}

.fun-fact-icon i {
\tfont-size: 48px;
    align-self: center;
    margin: 0 auto;
    color: #666;
}

.fun-fact-icon i.icon-material-outline-gavel {
\ttransform: scale(0.91);
}

.fun-fact-text {
\tflex: 1;
\tmargin-right: 20px;
}

.fun-fact span {
\tfont-size: 18px;
\tcolor: #888;
\tline-height: 22px;
}

.fun-fact h4 {
\tfont-size: 38px;
\tcolor: #333;
\tline-height: 38px;
\tmargin-top: 5px;
}



/* Dashboard Box
------------------------------------- */
.dashboard-box {
\tdisplay: block;
\tborder-radius: 4px;
\tbackground-color: #fff;
\tbox-shadow: 0 2px 8px rgba(0,0,0,0.08);
\tmargin-top: 30px;
\tposition: relative;
}

.dashboard-box .headline {
\tdisplay: block;
\tpadding: 20px 30px;
\tborder-bottom: 1px solid #e4e4e4;
\tposition: relative;
}

.dashboard-box .headline h3 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tline-height: 26px;
}

.dashboard-box .headline h3 i {
\tcolor: #66676b;
\tfont-size: 21px;
\tline-height: 0;
\tposition: relative;
\ttop: 2px;
\tmargin-right: 4px;
}

/* Pixel Perfect Adjustment */
.dashboard-box .headline h3 i.icon-material-outline-gavel { font-size: 20px; }
.dashboard-box .headline h3 i.icon-material-outline-supervisor-account { font-size: 24px; top: 3px;}
.dashboard-box .headline h3 i.icon-feather-folder-plus { font-size: 20px; top: 2px; margin-right: 5px; }
.button.big i.icon-feather-plus { font-size: 20px; top: 2px; margin-left: -4px; margin-right: 5px;}
/* Pixel Perfect Adjustment - End */

.dashboard-box .content.with-padding { padding: 30px; }

.dashboard-box .chart { padding: 30px 20px 17px 18px; }

.dashboard-box .headline .sort-by {
\tfloat: none;
\tdisplay: inline-block;
\tposition: absolute;
\ttop: calc(50% + 3px);
\ttransform: translateY(-50%);
\tright: 30px;
\tz-index: 100;
\theight: 33px;
}

.dashboard-box .headline .bootstrap-select.btn-group .dropdown-toggle .filter-option {
    font-weight: 500;
    color: #666;
}


/* Note
------------------------------------- */
.dashboard-note {
\tborder-radius: 4px;
\tbackground-color: #f8f8f8;
\tpadding: 25px;
\tpadding-top: 20px;
\tmargin-bottom: 20px;
\tposition: relative;
}

.dashboard-note:last-child { margin-bottom: 65px; }

.dashboard-note:before {
\tcontent: \"\";
    position: absolute;
    top: 0;
    right: 0;
    border-width: 0 20px 20px 0;
    border-style: solid;
    border-color: rgba(0,0,0,0.15) #fff;
    transition: 0.3s;
    border-radius: 0 0 0 4px;
}

.dashboard-note p {
\tline-height: 24px;
\tmargin-bottom: 20px;
\tcolor: #777;
\tfont-size: 14.7px;
}

.note-priority {
\tbackground-color: #333;
\tborder-radius: 4px;
\tcolor: #fff;
\tfont-size: 14px;
\tpadding: 5px 9px;
\tdisplay: inline-block;
\tline-height: 20px;
}

.note-priority.high { background-color: #dc3139; }
.note-priority.medium { background-color: #f59110; }
.note-priority.low { background-color: #3fb660; }

.note-footer {
\tdisplay: flex;
}

.note-buttons {
\talign-self: center;
    margin-left: auto;
}

.note-buttons a {
\tfont-size: 16px;
\tpadding-left: 3px;
\tmargin-top: 2px;
\tdisplay: inline-block;
\tcolor: #888;
}

.note-buttons a:hover { color: #444; }

.add-note-button {
\tposition: absolute;
\tbottom: 0;
\twidth: 100%;
\tleft: 0;
\tright: 0;
\tpadding: 30px;
\tpadding-top: 10px;
\tbackground: #fff;
\tborder-radius: 4px;
\twidth: calc(100% - 15px);
}

.add-note-button a.button {
\twidth: calc(100% + 15px) !important;
\tmax-width: calc(100% + 15px) !important;
}



/* Dashboard Box List
------------------------------------- */
ul.dashboard-box-list {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

ul.dashboard-box-list > li {
\tborder-bottom: 1px solid #e4e4e4;
\tpadding: 0;
\tline-height: 26px;
\tpadding: 22px 30px;
\tdisplay: flex;
    align-items: center;
    position: relative;
\twidth: 100%;
\tflex-flow: row wrap;
\ttransition: 0.3s;
}

ul.dashboard-box-list > li:last-child {
\tborder-bottom: none;
}

ul.dashboard-box-list > li:hover {
\tbackground-color: #fcfcfc;
}

.dashboard-box-list .notification-text { font-size: 14.7px; flex: 1; }
.dashboard-box-list .notification-icon { flex: 0 0 40px; }
.dashboard-box-list .notification-text .star-rating {
\tposition: relative;
\ttop: -18px;
\tline-height: 0;
\theight: 0;
\tdisplay: inline-block;
\tmargin: 0 3px;
\ttransform: scale(0.93);
}


/* Dashboard Box List Buttons
------------------------------------- */
.buttons-to-right,
.dashboard-box-list .button.to-right {
\tposition: absolute;
\tright: 30px;
\ttop: 50%;
\ttransform: translateY(-50%);
\topacity: 0;
\ttransition: 0.3s;
\tbox-shadow: 0px 0px 10px 15px #fff;
\tbackground-color: #fff;
}

.dashboard-box-list .buttons-to-right.always-visible,
.dashboard-box-list li:hover .buttons-to-right { opacity: 1; }

.dashboard-box-list .buttons-to-right.always-visible:not(.single-right-button) {
    position: relative;
    transform: none;
    top: 0;
    margin: 5px 0 10px -2px;
    opacity: 1;
    right: auto;
    display: inline-block;
    box-shadow: none;
    width: 100%;
    background-color: transparent;
    box-shadow: none;
}

.dashboard-box-list .button {
    padding: 6px 15px;
    line-height: 20px;
    font-size: 13px;
    font-weight: 600;
    margin: 0;
    display: inline-block;
\tbox-shadow: 0 3px 8px rgba(102,103,107,0.15);
}

.dashboard-box-list .button i[class*=\"icon-material\"] {
    font-size: 18px;
    top: 3px;
    margin-right: 2px;
    margin-left: -2px
}

.dashboard-box-list .buttons-to-right .button {
    margin: 0 0 -6px 2px;
}

.dashboard-box-list .buttons-to-right.always-visible .button {
    margin: 0 3px 0 0;
}

.dashboard-box .button.red    { background-color: #dc3139; box-shadow: 0 3px 8px rgba(234,65,81,0.15); }
.dashboard-box .button.green  { background-color: #40b660; box-shadow: 0 3px 8px rgba(64,182,96,0.15); }
.dashboard-box .button.dark   { background-color: #333333; box-shadow: 0 3px 8px rgba(0,0,0,0.1); }
.dashboard-box .button.gray   { background-color: #eee; color: #666; box-shadow: none; }

/* Hovers */
.dashboard-box .dashboard-box-list .button:not(.ico):hover,
.dashboard-box .button.red:not(.ico):hover,
.dashboard-box .button.green:not(.ico):hover,
.dashboard-box .button.gray:not(.ico):hover   {
\tcolor: #fff;
\tbackground-color: #333333;
\tbox-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

.dashboard-box .button.dark:not(.ico):hover {
\tbackground-color: #66676b;
\tbox-shadow: 0 3px 8px rgba(102,103,107,0.15);
}

.dashboard-box .button.ico {
\twidth: 32px;
\ttext-align: center;
}

.dashboard-box .button.ico i {
\tfont-size: 15px;
\tmargin-left: -7px;
\ttop: 2px;
\tposition: relative;
}

.dashboard-box .button i.icon-material-outline-check {
\tmargin-left: -5px;
}

.dashboard-box .button.ico i[class*=\"icon-material\"] { 
\tfont-size: 18px;
\tmargin-left: -8px;
\ttop: 3px;
\tposition: relative;
}

.dashboard-box-list { box-shadow: none; }

.dashboard-box-list a.button i {
\tmargin: 0;
\tpadding: 0;
\tposition: relative;
\ttop: 1px;
\tfont-size: 14px;
\tline-height: 0;
\tmargin-left: -2px;
}

.dashboard-box .mark-as-read {
\tfloat: none;
\tbackground-color: #f4f4f4;
\tposition: absolute;
\tright: 30px;
\ttop: 18px;
}

.button-info {
\tbackground: rgba(255,255,255,0.25);
    color: #fff;
    width: 19px;
    height: 19px;
    display: inline-block;
    text-align: center;
    line-height: 19px;
    border-radius: 50%;
    font-size: 11px;
    font-weight: 700;
    margin-left: 3px;
    margin-right: -2px;
}

/* Listing Status*/
.dashboard-status-button {
\tcolor: #fff;
\tborder-radius: 4px;
\tfont-size: 14px;
\tline-height: 21px;
\tpadding: 2px 8px;
\tdisplay: inline-block;
\tposition: relative;
\ttop: -2px;
\tmargin: 0 0 4px 4px;
}

.dashboard-status-button.green {
    background: #e0f5d7;
    color: #449626;
}

.dashboard-status-button.yellow {
\tbackground-color: #fbf6dd;
\tcolor: #a18d29;
}

.dashboard-status-button.red {
\tbackground-color: #ffe6e6;
\tcolor: #ea5252
}


/* Dashboard Invoices List
------------------------------------- */
.invoice-list-item ul {
\tline-height: 22px;
\tpadding-bottom: 2px;
\tcolor: #909090;
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

.invoice-list-item ul li {
\tpadding: 0;
\tdisplay: inline-block;
\tfont-size: 14.7px;
\tmargin-bottom: 5px;
}

.invoice-list-item ul li:after {
\tcontent: \"\";
\tdisplay: inline-block;
\twidth: 1px;
\theight: 11px;
\tbackground-color: #e0e0e0;
\tposition: relative;
\tmargin: 0 10px;
}

.invoice-list-item ul li:last-child:after { display: none; }

.invoice-list-item strong { 
\tfont-weight: 600;
\tcolor: #333;
\tmargin-bottom: 5px;
\tmargin-top: -2px;
\tdisplay: block;
}

.paid,
.unpaid {
\tbackground-color: #333;
\tcolor: #fff;
\tborder-radius: 4px;
\tline-height: 20px;
\tpadding: 4px 8px;
\tfont-size: 13px;
\tposition: relative;
\ttop: -1px;
}

.paid \t{ background-color: #40b660; }
.unpaid { background-color: #dc3139; }


/* Listings in Dashboard
------------------------------------- */
/* Freelancers */
.dashboard-box .job-listing-details {
\tbox-shadow: none;
\tpadding: 10px 0;
\talign-items: center;
\tflex: auto;
}

.dashboard-box .job-listing {
\tbox-shadow: none;
\tpadding: 0;
\tmargin: 0;
\tbackground-color: transparent;
    display: flex;
    flex-direction: row;
    width: 100%;
}

.dashboard-box .job-listing.width-adjustment {
\tmax-width: 60%
}

.dashboard-box .job-listing h3 a {
\tcolor: #333;
\tfont-size: 18px;
}

.dashboard-box .job-listing .job-listing-company-logo {
\tmax-width: 50px;
}

.dashboard-box .job-listing .job-listing-description {
\tpadding-top: 0;
}

.dashboard-box .job-listing:hover {
\ttransform: none;
}

.dashboard-box .job-listing .job-listing-footer {
    background-color:transparent;
    padding: 0;
    border-radius: none;
}

/* Jobs */
.dashboard-box .freelancer-overview {
\tpadding: 15px 0;
}
.dashboard-box .freelancer-overview-inner {
    flex:  auto;
    display: flex;
    align-items: center;
}

.dashboard-box .freelancer-overview .freelancer-name {
    text-align: left;
    margin: 0 0 0 30px;
    width: 100%;
}

.dashboard-box .freelancer-overview .freelancer-avatar {
\tmargin: 0;
\twidth: 90px;
}

.dashboard-box .freelancer-overview.manage-candidates .freelancer-avatar {
\talign-self: flex-start;
}

/* Dashboard Task Info */
.dashboard-task-info {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
    background-color: #f4f4f4;
\ttext-align: center;
\tborder-radius: 4px;
\tpadding: 14px 25px;
    display: flex;
    flex-direction: row;
    align-items: stretch;
    align-self: flex-end;
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
    transition: 0.3s;
    justify-content: center;
}

.dashboard-box li:hover .dashboard-task-info {
\tbackground-color: #f0f0f0;
}

.dashboard-task-info li {
\tdisplay: inline-block;
\tborder-right: 1px solid #d0d0d0;
\tpadding-right: 22px;
\tmargin-right: 22px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
}

.dashboard-task-info li:last-child {
\tmargin-right: 0;
\tpadding-right: 0;
\tborder: none;
}

.dashboard-task-info li strong {
\tdisplay: block;
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tline-height: 22px;
}

.dashboard-task-info li span {
\tdisplay: block;
\tfont-size: 14px;
\tcolor: #888;
\tline-height: 20px;
}

/* Bid Acceptance */
.bid-acceptance {
\tdisplay: flex;
    color: #289c41;
    background-color: #e4f6e9;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    border-radius: 4px;
    padding: 12px 18px;
    display: inline-block;
    margin: 0 auto;
    line-height: 20px;
}

.bid-acceptance span {
\tfont-size: 14px;
\topacity: 0.86;
\tline-height: 20px;
}


/* Media Queries */
@media (max-width: 1366px) {
\t.dashboard-box .job-listing.width-adjustment {max-width: 100% }
\t.dashboard-task-info {
\t    position: relative;
\t    right: 0;
\t    top: 0;
\t    transform: none;
\t    margin: 10px 0 20px 0;
\t}
\t.dashboard-task-info.bid-info {
\t\tmargin-bottom: 0;
\t\tmargin-top: 20px;
\t}
}

@media (max-width: 768px) {
\t.dashboard-box .freelancer-overview .freelancer-avatar {
\t\twidth: 60px;
\t}
\t.dashboard-box .freelancer-overview .freelancer-avatar .verified-badge {
\t\ttransform: scale(0.8);
\t\tbottom: -5px;
\t\tright: -5px;
\t}
\t.dashboard-box .freelancer-overview .freelancer-name {
\t    margin: 0 0 0 25px;
\t}
\t.dashboard-box .job-listing .job-listing-company-logo {
\t\tdisplay: none;
\t}

\t.dashboard-task-info.bid-info,
\t.dashboard-task-info:not(.bid-info) {
\t\tflex-direction: column;
\t\twidth: 100%;
\t}

\t.dashboard-task-info li {
\t\tborder-right: none;
\t\tborder-bottom: 1px solid #d0d0d0;
\t\tpadding: 0 0 10px 0;
\t\tmargin: 0 0 10px 0;
\t\twidth: 100%;
\t}
\t.dashboard-task-info li:last-child{
\t\tborder-right: none;
\t\tborder-bottom: none;
\t\tpadding: 0;
\t\tmargin: 0;
\t}
}


/* Reviews
------------------------------------- */
.dashboard-box .boxed-list-item {
\tpadding: 10px 0;
\twidth: 100%;
}


/* Submit Forms
------------------------------------- */
.submit-field {
\tmargin-bottom: 28px;
\tdisplay: block;
}

.submit-field .pac-container {
    box-shadow: none;
    border: 1px solid #e0e0e0;
    border-top: 1px solid #fff;
    padding-top: 0;
    z-index: 9;
    left: 0 !important;
    top: 47px !important;
    border-radius: 0 0 4px 4px;
}

.submit-field h5 {
\tfont-size: 16px;
\tfont-weight: 600;
\tcolor: #333;
\tmargin-bottom: 12px;
}

.submit-field h5 span {
\tcolor: #888;
\tfont-weight: 500;
}

.help-icon {
\tcolor: #66676b;
\tdisplay: inline-block;
\tfont-size: 19px;
\tfont-weight: 400;
\tline-height: 18px;
\theight: 16px;
\tposition: relative;
\ttop: 3px;
\tmargin: 0 3px;
\tfont-style: normal;
\tcursor: help;
}

.help-icon:before {
\tcontent: \"\\e97c\";
\tfont-family: \"Feather-Icons\"
}


/* Avatar Switcher */
.avatar-wrapper {
\tposition: relative;
\twidth: 150px;
\theight: 150px;
\tborder-radius: 4px;
\toverflow: hidden;
\tbox-shadow: none;
\tmargin: 0 10px 30px 0;
\ttransition: all .3s ease;
}
.avatar-wrapper:hover {
\ttransform: scale(1.05);
\tcursor: pointer;
}

.avatar-wrapper .profile-pic {
\theight: 100%;
\twidth: 100%;
\ttransition: all .3s ease;
\tobject-fit: cover;
}

.avatar-wrapper .profile-pic:after {
\tfont-family: Feather-Icons;
\tcontent: \"\\e9f1\";
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tline-height: 120px;
\tposition: absolute;
\tfont-size: 60px;
\tbackground: #f0f0f0;
\tcolor: #aaa;
\ttext-align: center;
}

.avatar-wrapper .upload-button {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\theight: 100%;
\twidth: 100%;
}

.avatar-wrapper .file-upload {
\topacity: 0;
\tpointer-events: none;
\tposition: absolute;
}

/* Small Footer Styles
------------------------------------- */
.dashboard-content-inner .small-footer {
    width: 100%;
    left: 0px;
    padding: 25px 50px;
    position: absolute;
    bottom: 0;
}

.dashboard-footer-spacer {
\tpadding-top: 125px;
}


/* Dashbaord Media Queries 
------------------------------------- */
@media (min-width: 1365px) and (max-width: 1600px) {
\t.fun-fact:last-child { display: none; }
}

@media (max-width: 1365px) {
\t.fun-fact {
\t\tflex: 1 1 calc(50% - 30px);
\t\tmax-width: calc(50% - 30px);
\t}
}

@media (max-width: 992px) {
\t.dashboard-content-inner { min-height: auto !important; }
\t/* Dashboard Mobile Basis */
\t.dashboard-sidebar .dashboard-nav-container,
\t.dashboard-content-inner { padding: 15px; }
\t.dashboard-sidebar-inner { padding-bottom: 30px; }
\t.dashboard-sidebar .simplebar-content { overflow-x: hidden; }

\t.dashboard-nav-inner {
\t\tpadding: 30px 0;
\t\tmargin-bottom: 0;
\t}

\t.dashboard-sidebar {
\t\tflex: 1;
\t\twidth: 100%;
\t    background-color: transparent;
\t    box-shadow: none;
\t    height: auto !important;
\t}

\t.full-page-sidebar .simplebar-track,
\t.dashboard-sidebar .simplebar-track { display: none; }

\t.full-page-sidebar-inner, 
\t.dashboard-sidebar-inner { height: auto !important; }

\t.dashboard-container {
\t\tdisplay: block;
\t    width: 100%;
\t    flex-wrap: wrap;
\t    height: auto !important;
\t}

\t.dashboard-content-container { height: auto !important; }
\t.dashboard-content-container .simplebar-scrollbar { display: none; }

\t/* Dashboard Mobile Basis - End */

\t/* Dashboard Nav */
\t.dashboard-nav {
\t\twidth: 100%;
\t\tmargin: 0;
\t\tborder-radius: 0 0 4px 4px;
\t\tposition: relative;
\t\tmin-height: auto;
\t\topacity: 1;
\t\tvisibility: hidden;
\t\tmax-height: 0;
\t\tpadding: 0;
\t\ttransition: all 0.3s;
\t    box-shadow: 0 0 10px rgba(0,0,0,0.1);
\t    background: #fff;
\t}

\t.dashboard-nav ul:first-child { margin: 0; }
\t.dashboard-nav ul { margin-top: 15px; }

\t.dashboard-nav.active ul,
\t.dashboard-nav.active {
\t\topacity: 1;
\t\tvisibility: visible;
\t\tmax-height: 900px;
\t}

\t.dashboard-nav ul:before { padding: 0 29px; }
\t.dashboard-nav ul li a { padding: 10px 25px; }

\t.dashboard-nav ul,
\t.dashboard-nav.active ul li ul,
\t.dashboard-nav ul li ul {
\t    visibility: hidden;
\t    opacity: 0;
\t    max-height: 0;
\t    transition: all 0.3s;
\t}

\t.dashboard-nav.active ul li.active-submenu ul {
\t    visibility: visible;
\t    opacity: 1;
\t    max-height: 300px;
\t}

\t/* Trigger */
\ta.dashboard-responsive-nav-trigger {
\t\twidth: 100%;
\t\tmargin: 0;
\t\tmargin-top: 15px;
\t\tbackground-color: #333;
\t\tborder-radius: 5px;
\t\tcolor: #fff;
\t\tpadding: 16px 30px;
\t\tfont-weight: 600;
\t\ttransition: 0.2s;
\t\tdisplay: block;
\t\tline-height: 26px;
\t}

\ta.dashboard-responsive-nav-trigger span.trigger-title {
\t\tpadding-left: 33px;
\t}

\ta.dashboard-responsive-nav-trigger .hamburger-inner, 
\ta.dashboard-responsive-nav-trigger .hamburger-inner::before, 
\ta.dashboard-responsive-nav-trigger .hamburger-inner::after {
\t\tbackground-color: #fff;
\t}

\ta.dashboard-responsive-nav-trigger .hamburger {
\t\ttop: 2px;
\t\tleft: 0;
\t\ttransform: scale(0.66);
\t}

\ta.dashboard-responsive-nav-trigger i {
\t\tmargin-right: 8px;
\t\tmargin-left: -2px;
\t\tfont-size: 28px;
\t\tline-height: 0;
\t\tposition: relative;
\t\ttop: 6px;
\t}

\ta.dashboard-responsive-nav-trigger.active {
\t\tborder-radius: 4px 4px 0 0;
\t}
\t/* Dashboard Nav - End */

\t.buttons-to-right:not(.single-right-button)  {  opacity: 1; }
\t.fun-facts-container {
\t\twidth: calc(100% + 15px);
\t\tmargin-bottom: -15px;
\t}
\t.fun-fact {
\t\tflex: 1 1 calc(50% - 15px);
\t\tmax-width: calc(50% - 15px);
\t\tmargin: 0 15px 15px 0;
\t}
}

@media (max-width: 768px) {
\t.fun-fact {
\t\tflex: 1 1 100%;
\t\tmax-width: 100%;
\t}
\t#titlebar #breadcrumbs,
\t.dashboard-headline #breadcrumbs {
\t    right: 0;
\t    position: relative;
\t    top: 0;
\t    transform: none;
\t    margin-top: 30px;
\t    max-width: 100%;
\t}
\t.buttons-to-right:not(.single-right-button) {
\t    position: relative;
\t    transform: none;
\t    top: 0;
\t    margin: 10px 0 0 0;
\t    opacity: 1;
\t    right: auto;
\t    display: inline-block;
\t    box-shadow: none;
\t    width: 100%;
\t}
\t.dashboard-box .headline .sort-by {
\t    float: none;
\t    display: inline-block;
\t    position: relative;
\t    top: 0;
\t    transform: none;
\t    right: 0px;
\t    top: 5px;
\t    left: -8px;
\t}
\t.dashboard-box .headline .sort-by .bootstrap-select .dropdown-menu {
\t    left: 0;
\t    right: auto;
\t}
}


/* ---------------------------------- */
/* Dashboard Messages
------------------------------------- */
.messages-container {
\tmargin: 0;
\tbox-shadow: 0 0 12px 0 rgba(0,0,0,0.06);
\tborder-radius: 4px;
\tbackground-color: #fff;
}


/* Scrollbar Adjustments */
.messages-inbox ul { max-height: 875px; }
.message-content-inner { max-height: 750px; }

.message-content,
.messages-container-inner .messages-inbox { overflow: hidden; }

.message-content-inner,
.messages-container-inner .messages-inbox ul {
\toverflow-y: scroll;
\twidth: calc(100% + 18px)
}
.message-content-inner::-webkit-scrollbar,
.messages-container-inner .messages-inbox ul::-webkit-scrollbar { width: 17px; }
/*  Scrollbar Hide - End */

.messages-headline {
\tmax-height: 82px;
\tfont-size: 16px;
\tmargin: 0;
\tpadding: 22px 30px;
\tcolor: #333;
\tbackground-color: #fff;
\tdisplay: block;
\tborder-bottom: 1px solid #eaeaea;
\tborder-radius: 4px 4px 0 0;
\tposition: relative;
}

.messages-headline input {
\tbackground-color: #f6f6f6;
\tbox-shadow: none;
\theight: 38px;
\tpadding: 14px;
\tfont-size: 14px;
\tmargin: 0;
}

.messages-headline input:focus { box-shadow: none; }

.messages-headline .input-with-icon i {
\tfont-size: 18px;
\tright: 14px;
}

.messages-headline h4 {
\tfont-size: 16px;
\tcolor: #333;
\tpadding: 6px 0;
\tmargin: 0;
\tfont-weight: 600;
\tdisplay: inline-block;
}

.message-action {
\tborder-radius: 50px;
\tfont-size: 13px;
\tcolor: #666;
\tfont-weight: 500;
\tdisplay: inline-block;
\ttransition: 0.3s;
\tcolor: #666;
\tpadding: 0;
\tposition: absolute;
\ttop: 50%;
\tright: 30px;
\ttransform: translateY(-50%);
}

.message-action i {
\tfont-size: 14px;
\tposition: relative;
\ttop: 1px;
\tmargin-right: 1px;
}

.message-action:hover { color: #ee3535; }

/* List */
.messages-inbox ul {
\tlist-style: none;
\tpadding: 0;
\tmargin: 0;
}

.message-avatar img {
\tdisplay: inline-block;
\twidth: 54px;
\theight: 54px;
\tborder-radius: 50%;
}

.messages-inbox ul li a {
\tposition: relative;
\tdisplay: block;
\tpadding: 30px;
}

.messages-inbox ul li {
\ttransition: 0.2s;
\tposition: relative;
}

.messages-inbox ul li:nth-child(2n) {
\tbackground-color: #fafafa;
}

.messages-inbox ul li:last-child { border-bottom: none; }

.messages-inbox ul li.active-message { background-color: #fafafa; }

.messages-inbox ul li:before {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 3px;
\theight: 100%;
\tbackground-color: #66676b;
\tdisplay: block;
\tcontent: \"\";
\topacity: 0;
\ttransition: 0.3s;
}

.messages-inbox ul li:hover:before,
.messages-inbox ul li.active-message:before {
\topacity: 1;
}

.messages-inbox .message-avatar {
\tposition: absolute;
\tleft: 30px;
\ttop: 50%;
\ttransform: translateY(-50%);
}

.messages-inbox .message-by {
\tmargin-left: 85px;
\tfont-size: 15px;
\tcolor: #666;
}

.messages-inbox .message-by p {
\tmargin: 0;
\tpadding: 0;
\tline-height: 25px;
\tfont-size: 15px;
}

.message-by-headline h5,
.message-by-headline span {
\tdisplay: inline-block;
}

.message-by-headline span {
\tfloat: right;
\tcolor: #888;
\tfont-size: 14px;
}

.message-by-headline h5 {
\tfont-weight: 600;
\tcolor: #333;
\tmargin: 0 0 7px 0;
\tpadding: 0;
}

.message-by-headline:after {
\tcontent: \".\";
\tdisplay: block;
\tclear: both;
\tvisibility: hidden;
\tline-height: 0;
\theight: 0;
}

.message-by h5 i {
\tbackground-color: #66676b;
\tborder-radius: 4px;
\tline-height: 20px;
\tfont-size: 12px;
\tcolor: #fff;
\tfont-style: normal;
\tpadding: 3px 8px;
\tmargin-left: 3px;
}


/* Single Message */
.messages-container-inner {
\tdisplay: flex;
}

.messages-container-inner .messages-inbox,
.messages-container-inner .message-content {
\tflex: 1;
}

.messages-container-inner .message-content-inner {
\tpadding: 30px;
\tpadding-bottom: 0;
\tflex-grow: 1;
}

.messages-container-inner .message-content {
\tdisplay: flex;
\tflex-direction: column;
}

.messages-container-inner .messages-inbox {
\tmax-width: 340px;
\tborder-right: 1px solid #eaeaea;
}

.messages-container-inner .messages-inbox ul li a { padding: 25px; }

.messages-container-inner .messages-inbox .message-by p {
\theight: 26px;
\tmax-width: 205px;
\ttext-overflow: ellipsis;
\twhite-space: nowrap;
\toverflow: hidden;
\tfont-size: 14px;
\tcolor: #888;
}

.messages-container-inner .message-avatar img {
\twidth: 40px;
\theight: 40px;
}

.messages-container-inner .messages-inbox .message-avatar { left: 25px; }
.messages-container-inner .messages-inbox .message-by { margin-left: 60px }

.messages-container-inner .message-by-headline h5 {
\tfont-size: 14px;
\tmargin-bottom: 3px;
\tmax-width: 160px;
\tline-height: 23px;
}

.messages-container-inner .message-by-headline span {
\tfont-size: 13px;
\tposition: absolute;
\ttop: 25px;
\tright: 25px
}

/* Message Bubbles */
.message-bubble {
\tdisplay: block;
\tposition: relative;
\tmargin-bottom: 25px;
}

.message-bubble .message-avatar {
\tposition: absolute;
\tleft: 0;
\ttop: 0;
}

.message-bubble .message-avatar img {
\twidth: 50px;
\theight: 50px;
}

.message-bubble .message-text {
\tmargin-left: 70px;
\tbackground-color: #f4f4f4;
\tborder-radius: 4px;
\tpadding: 12px 18px;
\tposition: relative;
\tdisplay: inline-block;
\tfloat: left;
\tline-height: 25px;
}

.message-bubble.me .message-text {
\tfloat: right;
}

.message-bubble .message-text p {
\tfont-size: 15px;
\tpadding: 0;
\tmargin: 0;
\tline-height: 25px;
}


/* Message Bubble \"me\" */
.message-bubble.me .message-avatar {
\tleft: auto;
\tright: 0;
}

.message-bubble.me .message-text {
\tmargin-left: 0;
\tmargin-right: 70px;
\tbackground-color: #66676b;
\tcolor: #fff;
\tposition: relative;
}

/* Arrow */
.message-bubble .message-text:before {
\tcontent: \"\";
\twidth: 0; 
\theight: 0; 
\tborder-top: 6px solid transparent;
\tborder-bottom: 6px solid transparent; 
\tborder-right: 6px solid #f4f4f4;
\tleft: -6px;
\tright: auto;
\ttop: 19px;
\tposition: absolute;
}

.message-bubble.me .message-text:before {
\tborder-top: 6px solid transparent;
\tborder-bottom: 6px solid transparent;
\tborder-left: 6px solid #66676b;
\tborder-right: none;
\tright: -6px;
\tleft: auto;
}

/* Message Time Sign */
.message-time-sign {
\ttext-align: center;
\tdisplay: block;
\tposition: relative;
\tmargin-bottom: 25px;
}

.message-time-sign:before {
\tcontent: \"\";
\theight: 1px;
\tbackground-color: #eaeaea;
\tdisplay: block;
\tmax-width: 30%;
\tmargin: 0 auto;
\tposition: relative;
\ttop: 14px;
\tz-index: 10;
}

.message-time-sign span {
\tbackground-color: #fff;
\tfont-size: 14px;
\tcolor: #888;
\tz-index: 11;
\tposition: relative;
\tpadding: 0 10px;
}

/* Reply */
.message-reply {
\tborder-top: 1px solid #eaeaea;
\tpadding: 30px;
\tdisplay: flex;
\talign-items: flex-start;
\tmargin-top: 15px;
}

.message-reply textarea {
\tmin-width: auto;
\theight: 48px;
\tmin-height: 48px;
\tpadding: 10px 0;
\tmargin: 0 15px 0 0;
\tflex: 1;
\tfont-size: 15px;
\tfont-weight: 400;
\tline-height: 26px;
\tbox-shadow: none;
\tborder: none;
    box-sizing: border-box;
    resize: none;
}

.message-reply button {
\tborder-radius: 4px;
\tflex: auto;
\tflex-grow: 0;
\theight: 44px;
\ttext-align: center;
\talign-self: center;
\tpadding: 0 25px;
}

.message-reply i{
\tpadding: 0;
\tmargin: 0;
}


/* Typing Indicastor */
.typing-indicator {
\twidth: auto;
\theight: 24px;
\tpadding-top: 8px;
}

.typing-indicator span {
\theight: 8px;
\twidth: 8px;
\tfloat: left;
\tmargin: 0 1px;
\tbackground-color: #a0a0a0;
\tdisplay: block;
\tborder-radius: 50%;
\topacity: 0.4;
}

.typing-indicator span:nth-of-type(1) { animation: 1s blink infinite 0.33333s; }
.typing-indicator span:nth-of-type(2) { animation: 1s blink infinite 0.66666s; }
.typing-indicator span:nth-of-type(3) { animation: 1s blink infinite 0.99999s; }

@keyframes blink {
  50% {
    opacity: 1;
  }
}

/* Messages Media Queries */
@media (max-width: 992px) {
\t.messages-container-inner .messages-inbox { max-width: 300px; }
}
@media (max-width: 768px) {
\t.messages-container-inner { display: block; }

\t.messages-container-inner .messages-inbox {
\t\tmax-width: 100%;
\t\tborder-bottom: 1px solid #e4e4e4;
\t\tborder-right: none;

\t}
\t.messages-inbox ul { max-height: 500px; }

\t.messages-container-inner .message-by-headline span {
\t\tposition: relative;
\t\ttop: 0;
\t\tright: 0;
\t\tdisplay: block;
\t\tfloat: none;
\t\tpadding: 0;
\t\tmargin: -4px 0 0 0;
\t}

\t.message-action {
\t\tdisplay: block;
\t\tposition: relative;
\t\tright: 0;
\t\ttop: 0;
\t\ttransform: none;
\t\tmargin-top: -5px;
\t}

\t.messages-headline { max-height: 120px; }
}


/* -------------------------------------------------------------- */
/*  08. Others
----------------------------------------------------------------- */

\t/* ---------------------------------- */
\t/* Common Styles
\t------------------------------------- */

\tbody {
\t\tcolor: #666;
\t\tfont-size: 16px;
\t\tline-height: 27px;
\t\tbackground-color: #fff;
\t}

\tbody.gray { background-color: #fbfbfb; }
\tbody p { font-size: 16px; line-height: 27px; }

\t/* Main Font */
\tbody, h1, h2, h3, h4, h5, h6,  input[type=\"text\"], input[type=\"password\"], input[type=\"email\"],
\ttextarea, select, input[type=\"button\"], input[type=\"submit\"], button, body .pac-container
\t{ font-family: \"Nunito\", \"HelveticaNeue\", \"Helvetica Neue\", Helvetica, Arial, sans-serif; text-transform: none; }

\t/* Headlines */
\th1, h2, h3, h4, h5, h6 {
\t\tcolor: #333;
\t\tfont-weight: 500;
\t\tmargin: 0;
\t\tpadding: 0;
\t}

\th1 { font-size: 32px; }
\th2 { font-size: 26px; }
\th3 { font-size: 22px; }
\th4 { font-size: 16px; }
\th5 { font-size: 14px; }
\th6 { font-size: 12px; }

\th3.page-title { font-size: 20px; line-height: 32px; }

\t.section { display: block; }
\t.section.white { background: #fff; }
\t.section.gray { background: #f9f9f9; }
\t.section.border-top { border-top: 1px solid #e0e0e0; }
\t.section.border-bottom { border-bottom: 1px solid #e0e0e0; }

\t/* Section Headline */
\t.section-headline {
\t\tdisplay: block;
\t\tposition: relative;
\t\tpadding-right: 20%;
\t}

\t.section-headline.centered {
\t\ttext-align: center;
\t\tpadding: 0;
\t}

\t.section-headline span {
\t\tfont-size: 18px;
\t\tline-height: 26px;
\t\tfont-weight: 300;
\t\tcolor: #888;
\t\tmargin-top: 0;
\t\tdisplay: block;
\t}

\t.section-headline h1,
\t.section-headline h2,
\t.section-headline h3,
\t.section-headline h4 {
\t\tfont-size: 26px;
\t\tline-height: 36px;
\t\tfont-weight: 500;
\t\tcolor: #333;
\t}

\t.section-headline h4 {
\t\tfont-size: 22px;
\t\tline-height: 34px;
\t}

\t.section-headline.border-top { border-top: 1px solid #e0e0e0; }

\th1.in-a-box,
\th2.in-a-box,
\th2.in-a-box,
\th3.in-a-box,
\th5.in-a-box {
\t\tdisplay: inline-block;
\t    font-size: 18px;
\t    background-color: #333;
\t    color: #fff;
\t    border-radius: 4px;
\t    padding: 8px 20px;
\t    box-shadow: 0 3px 10px rgba(0,0,0,0.15);
\t}

\t.section-headline h5 {
\t\tfont-size: 16px;
\t\tfont-weight: 600;
\t\tline-height: 30px;
\t}
\t
\t/* Headline Link */
\ta.headline-link {
\t\tposition: absolute;
\t\tright: 0;
\t\tbottom: 0;
\t}

\ta.headline-link.bottom-icon:after {
\t\tcontent: \"\\e957\";
\t\ttop: 3px;
\t}

\ta.headline-link:after {
\t\tcontent: \"\\e995\";
\t\tfont-family: \"Material-Icons\";
\t\tfont-size: 21px;
\t\tline-height: 0;
\t\tposition: relative;
\t\ttop: 4px;
\t\tmargin-left: 5px;
\t}

\t@media (max-width: 768px) { 
\t\ta.headline-link {
\t\t\tposition: relative;
\t\t\tmargin-top: 10px;
\t\t\tdisplay: inline-block;
\t\t}
\t}

\t/* Classes for disabling things on mobile devices */
\t@media (max-width: 992px) { .hide-under-992px { display: none; } }
\t@media (max-width: 768px) { .hide-under-768px { display: none; } }
\t@media (max-width: 480px) { .hide-under-480px { display: none; } }


\t/* ---------------------------------- */
\t/* Icons Cheatsheet Styles
\t------------------------------------- */
\t.icon-set-container {
\t\tdisplay: block;
\t\twidth: calc(100% + 30px);
\t\tleft: -15px;
\t\tposition: relative;
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\talign-content: center;
\t\tjustify-content: center;
\t}

\t.glyph.fs1 {
\t\tposition: relative;
\t\tfont-size: 20px;
\t\tmargin: 10px 15px;
\t\tbackground-color: #fff;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,0.08);
\t\tborder-radius: 4px;
\t\tflex: 1 1 calc(25% - 30px);
\t    align-content: center;
\t    justify-content: center;
\t    display: flex;
\t    flex-direction: column;
\t    padding: 15px 15px;
\t    transition: 0.3s;
\t    color: #666;
\t}

\t.glyph.fs1:hover {
\t\ttransform: translateY(-5px);
\t\tbackground-color: #333;
\t\tcolor: #fff;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,0.15);
\t}

\t.glyph.fs1:hover span:not([class*=\"mls\"]) {
\t\tbackground-color: #fff;
\t\tcolor: #333;
\t}

\t.glyph.fs1 .fs0,
\t.glyph.fs1 fieldset { display: none; }

\t.glyph.fs1 span:not([class*=\"mls\"]) {
\t\tvertical-align: middle;
\t\ttop: -4px;
\t\theight: 40px;
\t\twidth: 40px;
\t\tbackground: rgba(0,0,0,0.04);
\t\tdisplay: inline-block;
\t\tline-height: 40px;
\t\ttext-align: center;
\t\tborder-radius: 4px;
\t\tfont-size: 24px;
\t\ttransition: 0.3s;
\t\tposition: relative;
\t\tposition: absolute;
\t\ttop: 50%;
\t\ttransform: translateY(-50%);
\t}

\t.glyph.fs1 .mls:not([class*=\"icon-\"]) {
\t\tmax-width: 80%;
\t\tdisplay: inline-block;
\t\toverflow: hidden;
\t\tfont-size: 14px;
\t\tline-height: 20px;
\t\ttop: 0;\t
\t\tvertical-align: middle;
\t\tpadding-left: 55px;
\t}


\t/* ---------------------------------- */
\t/* Offsets
\t------------------------------------- */

\t/* Content & Sidebar Offsets */
\t.content-left-offset { padding-left: 30px; }
\t.content-right-offset { padding-right: 30px; }

\t@media (max-width: 992px) {
\t\t.content-left-offset { padding-left: 15px; }
\t\t.content-right-offset { padding-right: 15px; }
\t}

\t/* Margin Top */
\t.margin-top-0   { margin-top: 0px  !important; }
\t.margin-top-1   { margin-top: 1px  !important; }
\t.margin-top-2   { margin-top: 2px  !important; }
\t.margin-top-3   { margin-top: 3px  !important; }
\t.margin-top-4   { margin-top: 4px  !important; }
\t.margin-top-5   { margin-top: 5px  !important; }
\t.margin-top-6   { margin-top: 6px  !important; }
\t.margin-top-7   { margin-top: 7px  !important; }
\t.margin-top-8   { margin-top: 8px  !important; }
\t.margin-top-9   { margin-top: 9px  !important; }
\t.margin-top-10  { margin-top: 10px !important; }
\t.margin-top-11  { margin-top: 11px !important; }
\t.margin-top-12  { margin-top: 12px !important; }
\t.margin-top-13  { margin-top: 13px !important; }
\t.margin-top-14  { margin-top: 14px !important; }
\t.margin-top-15  { margin-top: 15px !important; }
\t.margin-top-16  { margin-top: 16px !important; }
\t.margin-top-17  { margin-top: 17px !important; }
\t.margin-top-18  { margin-top: 18px !important; }
\t.margin-top-19  { margin-top: 19px !important; }
\t.margin-top-20  { margin-top: 20px !important; }
\t.margin-top-21  { margin-top: 21px !important; }
\t.margin-top-22  { margin-top: 22px !important; }
\t.margin-top-23  { margin-top: 23px !important; }
\t.margin-top-24  { margin-top: 24px !important; }
\t.margin-top-25  { margin-top: 25px !important; }
\t.margin-top-26  { margin-top: 26px !important; }
\t.margin-top-27  { margin-top: 27px !important; }
\t.margin-top-28  { margin-top: 28px !important; }
\t.margin-top-29  { margin-top: 29px !important; }
\t.margin-top-30  { margin-top: 30px !important; }
\t.margin-top-31  { margin-top: 31px !important; }
\t.margin-top-32  { margin-top: 32px !important; }
\t.margin-top-33  { margin-top: 33px !important; }
\t.margin-top-34  { margin-top: 34px !important; }
\t.margin-top-35  { margin-top: 35px !important; }
\t.margin-top-36  { margin-top: 36px !important; }
\t.margin-top-37  { margin-top: 37px !important; }
\t.margin-top-38  { margin-top: 38px !important; }
\t.margin-top-39  { margin-top: 39px !important; }
\t.margin-top-40  { margin-top: 40px !important; }
\t.margin-top-41  { margin-top: 41px !important; }
\t.margin-top-42  { margin-top: 42px !important; }
\t.margin-top-43  { margin-top: 43px !important; }
\t.margin-top-44  { margin-top: 44px !important; }
\t.margin-top-45  { margin-top: 45px !important; }
\t.margin-top-46  { margin-top: 46px !important; }
\t.margin-top-47  { margin-top: 47px !important; }
\t.margin-top-48  { margin-top: 48px !important; }
\t.margin-top-49  { margin-top: 49px !important; }
\t.margin-top-50  { margin-top: 50px !important; }
\t.margin-top-51  { margin-top: 51px !important; }
\t.margin-top-52  { margin-top: 52px !important; }
\t.margin-top-53  { margin-top: 53px !important; }
\t.margin-top-54  { margin-top: 54px !important; }
\t.margin-top-55  { margin-top: 55px !important; }
\t.margin-top-56  { margin-top: 56px !important; }
\t.margin-top-57  { margin-top: 57px !important; }
\t.margin-top-58  { margin-top: 58px !important; }
\t.margin-top-59  { margin-top: 59px !important; }
\t.margin-top-60  { margin-top: 60px !important; }
\t.margin-top-61  { margin-top: 61px !important; }
\t.margin-top-62  { margin-top: 62px !important; }
\t.margin-top-63  { margin-top: 63px !important; }
\t.margin-top-64  { margin-top: 64px !important; }
\t.margin-top-65  { margin-top: 65px !important; }
\t.margin-top-66  { margin-top: 66px !important; }
\t.margin-top-67  { margin-top: 67px !important; }
\t.margin-top-68  { margin-top: 68px !important; }
\t.margin-top-69  { margin-top: 69px !important; }
\t.margin-top-70  { margin-top: 70px !important; }
\t.margin-top-71  { margin-top: 71px !important; }
\t.margin-top-72  { margin-top: 72px !important; }
\t.margin-top-73  { margin-top: 73px !important; }
\t.margin-top-74  { margin-top: 74px !important; }
\t.margin-top-75  { margin-top: 75px !important; }
\t.margin-top-76  { margin-top: 76px !important; }
\t.margin-top-77  { margin-top: 77px !important; }
\t.margin-top-78  { margin-top: 78px !important; }
\t.margin-top-79  { margin-top: 79px !important; }
\t.margin-top-80  { margin-top: 80px !important; }
\t.margin-top-81  { margin-top: 81px !important; }
\t.margin-top-82  { margin-top: 82px !important; }
\t.margin-top-83  { margin-top: 83px !important; }
\t.margin-top-84  { margin-top: 84px !important; }
\t.margin-top-85  { margin-top: 85px !important; }
\t.margin-top-86  { margin-top: 86px !important; }
\t.margin-top-87  { margin-top: 87px !important; }
\t.margin-top-88  { margin-top: 88px !important; }
\t.margin-top-89  { margin-top: 89px !important; }
\t.margin-top-90  { margin-top: 90px !important; }
\t.margin-top-91  { margin-top: 91px !important; }
\t.margin-top-92  { margin-top: 92px !important; }
\t.margin-top-93  { margin-top: 93px !important; }
\t.margin-top-94  { margin-top: 94px !important; }
\t.margin-top-95  { margin-top: 95px !important; }
\t.margin-top-96  { margin-top: 96px !important; }
\t.margin-top-97  { margin-top: 97px !important; }
\t.margin-top-98  { margin-top: 98px !important; }
\t.margin-top-99  { margin-top: 99px !important; }
\t.margin-top-100 { margin-top: 100px !important; }

\t/* Margin Bottom */
\t.margin-bottom-0   { margin-bottom: 0px  !important; }
\t.margin-bottom-1   { margin-bottom: 1px  !important; }
\t.margin-bottom-2   { margin-bottom: 2px  !important; }
\t.margin-bottom-3   { margin-bottom: 3px  !important; }
\t.margin-bottom-4   { margin-bottom: 4px  !important; }
\t.margin-bottom-5   { margin-bottom: 5px  !important; }
\t.margin-bottom-6   { margin-bottom: 6px  !important; }
\t.margin-bottom-7   { margin-bottom: 7px  !important; }
\t.margin-bottom-8   { margin-bottom: 8px  !important; }
\t.margin-bottom-9   { margin-bottom: 9px  !important; }
\t.margin-bottom-10  { margin-bottom: 10px !important; }
\t.margin-bottom-11  { margin-bottom: 11px !important; }
\t.margin-bottom-12  { margin-bottom: 12px !important; }
\t.margin-bottom-13  { margin-bottom: 13px !important; }
\t.margin-bottom-14  { margin-bottom: 14px !important; }
\t.margin-bottom-15  { margin-bottom: 15px !important; }
\t.margin-bottom-16  { margin-bottom: 16px !important; }
\t.margin-bottom-17  { margin-bottom: 17px !important; }
\t.margin-bottom-18  { margin-bottom: 18px !important; }
\t.margin-bottom-19  { margin-bottom: 19px !important; }
\t.margin-bottom-20  { margin-bottom: 20px !important; }
\t.margin-bottom-21  { margin-bottom: 21px !important; }
\t.margin-bottom-22  { margin-bottom: 22px !important; }
\t.margin-bottom-23  { margin-bottom: 23px !important; }
\t.margin-bottom-24  { margin-bottom: 24px !important; }
\t.margin-bottom-25  { margin-bottom: 25px !important; }
\t.margin-bottom-26  { margin-bottom: 26px !important; }
\t.margin-bottom-27  { margin-bottom: 27px !important; }
\t.margin-bottom-28  { margin-bottom: 28px !important; }
\t.margin-bottom-29  { margin-bottom: 29px !important; }
\t.margin-bottom-30  { margin-bottom: 30px !important; }
\t.margin-bottom-31  { margin-bottom: 31px !important; }
\t.margin-bottom-32  { margin-bottom: 32px !important; }
\t.margin-bottom-33  { margin-bottom: 33px !important; }
\t.margin-bottom-34  { margin-bottom: 34px !important; }
\t.margin-bottom-35  { margin-bottom: 35px !important; }
\t.margin-bottom-36  { margin-bottom: 36px !important; }
\t.margin-bottom-37  { margin-bottom: 37px !important; }
\t.margin-bottom-38  { margin-bottom: 38px !important; }
\t.margin-bottom-39  { margin-bottom: 39px !important; }
\t.margin-bottom-40  { margin-bottom: 40px !important; }
\t.margin-bottom-41  { margin-bottom: 41px !important; }
\t.margin-bottom-42  { margin-bottom: 42px !important; }
\t.margin-bottom-43  { margin-bottom: 43px !important; }
\t.margin-bottom-44  { margin-bottom: 44px !important; }
\t.margin-bottom-45  { margin-bottom: 45px !important; }
\t.margin-bottom-46  { margin-bottom: 46px !important; }
\t.margin-bottom-47  { margin-bottom: 47px !important; }
\t.margin-bottom-48  { margin-bottom: 48px !important; }
\t.margin-bottom-49  { margin-bottom: 49px !important; }
\t.margin-bottom-50  { margin-bottom: 50px !important; }
\t.margin-bottom-51  { margin-bottom: 51px !important; }
\t.margin-bottom-52  { margin-bottom: 52px !important; }
\t.margin-bottom-53  { margin-bottom: 53px !important; }
\t.margin-bottom-54  { margin-bottom: 54px !important; }
\t.margin-bottom-55  { margin-bottom: 55px !important; }
\t.margin-bottom-56  { margin-bottom: 56px !important; }
\t.margin-bottom-57  { margin-bottom: 57px !important; }
\t.margin-bottom-58  { margin-bottom: 58px !important; }
\t.margin-bottom-59  { margin-bottom: 59px !important; }
\t.margin-bottom-60  { margin-bottom: 60px !important; }
\t.margin-bottom-61  { margin-bottom: 61px !important; }
\t.margin-bottom-62  { margin-bottom: 62px !important; }
\t.margin-bottom-63  { margin-bottom: 63px !important; }
\t.margin-bottom-64  { margin-bottom: 64px !important; }
\t.margin-bottom-65  { margin-bottom: 65px !important; }
\t.margin-bottom-66  { margin-bottom: 66px !important; }
\t.margin-bottom-67  { margin-bottom: 67px !important; }
\t.margin-bottom-68  { margin-bottom: 68px !important; }
\t.margin-bottom-69  { margin-bottom: 69px !important; }
\t.margin-bottom-70  { margin-bottom: 70px !important; }
\t.margin-bottom-71  { margin-bottom: 71px !important; }
\t.margin-bottom-72  { margin-bottom: 72px !important; }
\t.margin-bottom-73  { margin-bottom: 73px !important; }
\t.margin-bottom-74  { margin-bottom: 74px !important; }
\t.margin-bottom-75  { margin-bottom: 75px !important; }
\t.margin-bottom-76  { margin-bottom: 76px !important; }
\t.margin-bottom-77  { margin-bottom: 77px !important; }
\t.margin-bottom-78  { margin-bottom: 78px !important; }
\t.margin-bottom-79  { margin-bottom: 79px !important; }
\t.margin-bottom-80  { margin-bottom: 80px !important; }
\t.margin-bottom-81  { margin-bottom: 81px !important; }
\t.margin-bottom-82  { margin-bottom: 82px !important; }
\t.margin-bottom-83  { margin-bottom: 83px !important; }
\t.margin-bottom-84  { margin-bottom: 84px !important; }
\t.margin-bottom-85  { margin-bottom: 85px !important; }
\t.margin-bottom-86  { margin-bottom: 86px !important; }
\t.margin-bottom-87  { margin-bottom: 87px !important; }
\t.margin-bottom-88  { margin-bottom: 88px !important; }
\t.margin-bottom-89  { margin-bottom: 89px !important; }
\t.margin-bottom-90  { margin-bottom: 90px !important; }
\t.margin-bottom-91  { margin-bottom: 91px !important; }
\t.margin-bottom-92  { margin-bottom: 92px !important; }
\t.margin-bottom-93  { margin-bottom: 93px !important; }
\t.margin-bottom-94  { margin-bottom: 94px !important; }
\t.margin-bottom-95  { margin-bottom: 95px !important; }
\t.margin-bottom-96  { margin-bottom: 96px !important; }
\t.margin-bottom-97  { margin-bottom: 97px !important; }
\t.margin-bottom-98  { margin-bottom: 98px !important; }
\t.margin-bottom-99  { margin-bottom: 99px !important; }
\t.margin-bottom-100 { margin-bottom: 100px !important; }

\t/* Margin Left */
\t.margin-left-0  { margin-left: 0 !important; }
\t.margin-left-1  { margin-left: 1px !important; }
\t.margin-left-2  { margin-left: 2px !important; }
\t.margin-left-3  { margin-left: 3px !important; }
\t.margin-left-4  { margin-left: 4px !important; }
\t.margin-left-5  { margin-left: 5px !important; }
\t.margin-left-6  { margin-left: 6px !important; }
\t.margin-left-7  { margin-left: 7px !important; }
\t.margin-left-8  { margin-left: 8px !important; }
\t.margin-left-9  { margin-left: 9px !important; }
\t.margin-left-10 { margin-left: 10px !important; }
\t.margin-left-15 { margin-left: 15px !important; }
\t.margin-left-20 { margin-left: 20px !important; }
\t.margin-left-25 { margin-left: 25px !important; }
\t.margin-left-30 { margin-left: 30px !important; }
\t.margin-left-35 { margin-left: 35px !important; }
\t.margin-left-40 { margin-left: 40px !important; }
\t.margin-left-45 { margin-left: 45px !important; }
\t.margin-left-50 { margin-left: 50px !important; }
\t.margin-left-55 { margin-left: 55px !important; }
\t.margin-left-60 { margin-left: 60px !important; }
\t.margin-left-65 { margin-left: 65px !important; }
\t.margin-left-70 { margin-left: 70px !important; }
\t.margin-left-75 { margin-left: 75px !important; }
\t.margin-left-80 { margin-left: 80px !important; }
\t.margin-left-85 { margin-left: 85px !important; }
\t.margin-left-90 { margin-left: 90px !important; }
\t.margin-left-95 { margin-left: 95px !important; }
\t.margin-left-100 { margin-left: 100px !important; }

\t/* Margin Right */
\t.margin-right-0  { margin-right: 0 !important; }
\t.margin-right-1  { margin-right: 1px !important; }
\t.margin-right-2  { margin-right: 2px !important; }
\t.margin-right-3  { margin-right: 3px !important; }
\t.margin-right-4  { margin-right: 4px !important; }
\t.margin-right-5  { margin-right: 5px !important; }
\t.margin-right-6  { margin-right: 6px !important; }
\t.margin-right-7  { margin-right: 7px !important; }
\t.margin-right-8  { margin-right: 8px !important; }
\t.margin-right-9  { margin-right: 9px !important; }
\t.margin-right-10 { margin-right: 10px !important; }
\t.margin-right-15 { margin-right: 15px !important; }
\t.margin-right-20 { margin-right: 20px !important; }
\t.margin-right-25 { margin-right: 25px !important; }
\t.margin-right-30 { margin-right: 30px !important; }
\t.margin-right-35 { margin-right: 35px !important; }
\t.margin-right-40 { margin-right: 40px !important; }
\t.margin-right-45 { margin-right: 45px !important; }
\t.margin-right-50 { margin-right: 50px !important; }
\t.margin-right-55 { margin-right: 55px !important; }
\t.margin-right-60 { margin-right: 60px !important; }
\t.margin-right-65 { margin-right: 65px !important; }
\t.margin-right-70 { margin-right: 70px !important; }
\t.margin-right-75 { margin-right: 75px !important; }
\t.margin-right-80 { margin-right: 80px !important; }
\t.margin-right-85 { margin-right: 85px !important; }
\t.margin-right-90 { margin-right: 90px !important; }
\t.margin-right-95 { margin-right: 95px !important; }
\t.margin-right-100 { margin-right: 100px !important; }


\t/* Padding Top */
\t.padding-top-0   { padding-top: 0px  !important; }
\t.padding-top-1   { padding-top: 1px  !important; }
\t.padding-top-2   { padding-top: 2px  !important; }
\t.padding-top-3   { padding-top: 3px  !important; }
\t.padding-top-4   { padding-top: 4px  !important; }
\t.padding-top-5   { padding-top: 5px  !important; }
\t.padding-top-6   { padding-top: 6px  !important; }
\t.padding-top-7   { padding-top: 7px  !important; }
\t.padding-top-8   { padding-top: 8px  !important; }
\t.padding-top-9   { padding-top: 9px  !important; }
\t.padding-top-10  { padding-top: 10px !important; }
\t.padding-top-11  { padding-top: 11px !important; }
\t.padding-top-12  { padding-top: 12px !important; }
\t.padding-top-13  { padding-top: 13px !important; }
\t.padding-top-14  { padding-top: 14px !important; }
\t.padding-top-15  { padding-top: 15px !important; }
\t.padding-top-16  { padding-top: 16px !important; }
\t.padding-top-17  { padding-top: 17px !important; }
\t.padding-top-18  { padding-top: 18px !important; }
\t.padding-top-19  { padding-top: 19px !important; }
\t.padding-top-20  { padding-top: 20px !important; }
\t.padding-top-21  { padding-top: 21px !important; }
\t.padding-top-22  { padding-top: 22px !important; }
\t.padding-top-23  { padding-top: 23px !important; }
\t.padding-top-24  { padding-top: 24px !important; }
\t.padding-top-25  { padding-top: 25px !important; }
\t.padding-top-26  { padding-top: 26px !important; }
\t.padding-top-27  { padding-top: 27px !important; }
\t.padding-top-28  { padding-top: 28px !important; }
\t.padding-top-29  { padding-top: 29px !important; }
\t.padding-top-30  { padding-top: 30px !important; }
\t.padding-top-31  { padding-top: 31px !important; }
\t.padding-top-32  { padding-top: 32px !important; }
\t.padding-top-33  { padding-top: 33px !important; }
\t.padding-top-34  { padding-top: 34px !important; }
\t.padding-top-35  { padding-top: 35px !important; }
\t.padding-top-36  { padding-top: 36px !important; }
\t.padding-top-37  { padding-top: 37px !important; }
\t.padding-top-38  { padding-top: 38px !important; }
\t.padding-top-39  { padding-top: 39px !important; }
\t.padding-top-40  { padding-top: 40px !important; }
\t.padding-top-41  { padding-top: 41px !important; }
\t.padding-top-42  { padding-top: 42px !important; }
\t.padding-top-43  { padding-top: 43px !important; }
\t.padding-top-44  { padding-top: 44px !important; }
\t.padding-top-45  { padding-top: 45px !important; }
\t.padding-top-46  { padding-top: 46px !important; }
\t.padding-top-47  { padding-top: 47px !important; }
\t.padding-top-48  { padding-top: 48px !important; }
\t.padding-top-49  { padding-top: 49px !important; }
\t.padding-top-50  { padding-top: 50px !important; }
\t.padding-top-51  { padding-top: 51px !important; }
\t.padding-top-52  { padding-top: 52px !important; }
\t.padding-top-53  { padding-top: 53px !important; }
\t.padding-top-54  { padding-top: 54px !important; }
\t.padding-top-55  { padding-top: 55px !important; }
\t.padding-top-56  { padding-top: 56px !important; }
\t.padding-top-57  { padding-top: 57px !important; }
\t.padding-top-58  { padding-top: 58px !important; }
\t.padding-top-59  { padding-top: 59px !important; }
\t.padding-top-60  { padding-top: 60px !important; }
\t.padding-top-61  { padding-top: 61px !important; }
\t.padding-top-62  { padding-top: 62px !important; }
\t.padding-top-63  { padding-top: 63px !important; }
\t.padding-top-64  { padding-top: 64px !important; }
\t.padding-top-65  { padding-top: 65px !important; }
\t.padding-top-66  { padding-top: 66px !important; }
\t.padding-top-67  { padding-top: 67px !important; }
\t.padding-top-68  { padding-top: 68px !important; }
\t.padding-top-69  { padding-top: 69px !important; }
\t.padding-top-70  { padding-top: 70px !important; }
\t.padding-top-71  { padding-top: 71px !important; }
\t.padding-top-72  { padding-top: 72px !important; }
\t.padding-top-73  { padding-top: 73px !important; }
\t.padding-top-74  { padding-top: 74px !important; }
\t.padding-top-75  { padding-top: 75px !important; }
\t.padding-top-76  { padding-top: 76px !important; }
\t.padding-top-77  { padding-top: 77px !important; }
\t.padding-top-78  { padding-top: 78px !important; }
\t.padding-top-79  { padding-top: 79px !important; }
\t.padding-top-80  { padding-top: 80px !important; }
\t.padding-top-81  { padding-top: 81px !important; }
\t.padding-top-82  { padding-top: 82px !important; }
\t.padding-top-83  { padding-top: 83px !important; }
\t.padding-top-84  { padding-top: 84px !important; }
\t.padding-top-85  { padding-top: 85px !important; }
\t.padding-top-86  { padding-top: 86px !important; }
\t.padding-top-87  { padding-top: 87px !important; }
\t.padding-top-88  { padding-top: 88px !important; }
\t.padding-top-89  { padding-top: 89px !important; }
\t.padding-top-90  { padding-top: 90px !important; }
\t.padding-top-91  { padding-top: 91px !important; }
\t.padding-top-92  { padding-top: 92px !important; }
\t.padding-top-93  { padding-top: 93px !important; }
\t.padding-top-94  { padding-top: 94px !important; }
\t.padding-top-95  { padding-top: 95px !important; }
\t.padding-top-96  { padding-top: 96px !important; }
\t.padding-top-97  { padding-top: 97px !important; }
\t.padding-top-98  { padding-top: 98px !important; }
\t.padding-top-99  { padding-top: 99px !important; }
\t.padding-top-100 { padding-top: 100px !important; }

\t/* Padding Bottom */
\t.padding-bottom-0   { padding-bottom: 0px  !important; }
\t.padding-bottom-1   { padding-bottom: 1px  !important; }
\t.padding-bottom-2   { padding-bottom: 2px  !important; }
\t.padding-bottom-3   { padding-bottom: 3px  !important; }
\t.padding-bottom-4   { padding-bottom: 4px  !important; }
\t.padding-bottom-5   { padding-bottom: 5px  !important; }
\t.padding-bottom-6   { padding-bottom: 6px  !important; }
\t.padding-bottom-7   { padding-bottom: 7px  !important; }
\t.padding-bottom-8   { padding-bottom: 8px  !important; }
\t.padding-bottom-9   { padding-bottom: 9px  !important; }
\t.padding-bottom-10  { padding-bottom: 10px !important; }
\t.padding-bottom-11  { padding-bottom: 11px !important; }
\t.padding-bottom-12  { padding-bottom: 12px !important; }
\t.padding-bottom-13  { padding-bottom: 13px !important; }
\t.padding-bottom-14  { padding-bottom: 14px !important; }
\t.padding-bottom-15  { padding-bottom: 15px !important; }
\t.padding-bottom-16  { padding-bottom: 16px !important; }
\t.padding-bottom-17  { padding-bottom: 17px !important; }
\t.padding-bottom-18  { padding-bottom: 18px !important; }
\t.padding-bottom-19  { padding-bottom: 19px !important; }
\t.padding-bottom-20  { padding-bottom: 20px !important; }
\t.padding-bottom-21  { padding-bottom: 21px !important; }
\t.padding-bottom-22  { padding-bottom: 22px !important; }
\t.padding-bottom-23  { padding-bottom: 23px !important; }
\t.padding-bottom-24  { padding-bottom: 24px !important; }
\t.padding-bottom-25  { padding-bottom: 25px !important; }
\t.padding-bottom-26  { padding-bottom: 26px !important; }
\t.padding-bottom-27  { padding-bottom: 27px !important; }
\t.padding-bottom-28  { padding-bottom: 28px !important; }
\t.padding-bottom-29  { padding-bottom: 29px !important; }
\t.padding-bottom-30  { padding-bottom: 30px !important; }
\t.padding-bottom-31  { padding-bottom: 31px !important; }
\t.padding-bottom-32  { padding-bottom: 32px !important; }
\t.padding-bottom-33  { padding-bottom: 33px !important; }
\t.padding-bottom-34  { padding-bottom: 34px !important; }
\t.padding-bottom-35  { padding-bottom: 35px !important; }
\t.padding-bottom-36  { padding-bottom: 36px !important; }
\t.padding-bottom-37  { padding-bottom: 37px !important; }
\t.padding-bottom-38  { padding-bottom: 38px !important; }
\t.padding-bottom-39  { padding-bottom: 39px !important; }
\t.padding-bottom-40  { padding-bottom: 40px !important; }
\t.padding-bottom-41  { padding-bottom: 41px !important; }
\t.padding-bottom-42  { padding-bottom: 42px !important; }
\t.padding-bottom-43  { padding-bottom: 43px !important; }
\t.padding-bottom-44  { padding-bottom: 44px !important; }
\t.padding-bottom-45  { padding-bottom: 45px !important; }
\t.padding-bottom-46  { padding-bottom: 46px !important; }
\t.padding-bottom-47  { padding-bottom: 47px !important; }
\t.padding-bottom-48  { padding-bottom: 48px !important; }
\t.padding-bottom-49  { padding-bottom: 49px !important; }
\t.padding-bottom-50  { padding-bottom: 50px !important; }
\t.padding-bottom-51  { padding-bottom: 51px !important; }
\t.padding-bottom-52  { padding-bottom: 52px !important; }
\t.padding-bottom-53  { padding-bottom: 53px !important; }
\t.padding-bottom-54  { padding-bottom: 54px !important; }
\t.padding-bottom-55  { padding-bottom: 55px !important; }
\t.padding-bottom-56  { padding-bottom: 56px !important; }
\t.padding-bottom-57  { padding-bottom: 57px !important; }
\t.padding-bottom-58  { padding-bottom: 58px !important; }
\t.padding-bottom-59  { padding-bottom: 59px !important; }
\t.padding-bottom-60  { padding-bottom: 60px !important; }
\t.padding-bottom-61  { padding-bottom: 61px !important; }
\t.padding-bottom-62  { padding-bottom: 62px !important; }
\t.padding-bottom-63  { padding-bottom: 63px !important; }
\t.padding-bottom-64  { padding-bottom: 64px !important; }
\t.padding-bottom-65  { padding-bottom: 65px !important; }
\t.padding-bottom-66  { padding-bottom: 66px !important; }
\t.padding-bottom-67  { padding-bottom: 67px !important; }
\t.padding-bottom-68  { padding-bottom: 68px !important; }
\t.padding-bottom-69  { padding-bottom: 69px !important; }
\t.padding-bottom-70  { padding-bottom: 70px !important; }
\t.padding-bottom-71  { padding-bottom: 71px !important; }
\t.padding-bottom-72  { padding-bottom: 72px !important; }
\t.padding-bottom-73  { padding-bottom: 73px !important; }
\t.padding-bottom-74  { padding-bottom: 74px !important; }
\t.padding-bottom-75  { padding-bottom: 75px !important; }
\t.padding-bottom-76  { padding-bottom: 76px !important; }
\t.padding-bottom-77  { padding-bottom: 77px !important; }
\t.padding-bottom-78  { padding-bottom: 78px !important; }
\t.padding-bottom-79  { padding-bottom: 79px !important; }
\t.padding-bottom-80  { padding-bottom: 80px !important; }
\t.padding-bottom-81  { padding-bottom: 81px !important; }
\t.padding-bottom-82  { padding-bottom: 82px !important; }
\t.padding-bottom-83  { padding-bottom: 83px !important; }
\t.padding-bottom-84  { padding-bottom: 84px !important; }
\t.padding-bottom-85  { padding-bottom: 85px !important; }
\t.padding-bottom-86  { padding-bottom: 86px !important; }
\t.padding-bottom-87  { padding-bottom: 87px !important; }
\t.padding-bottom-88  { padding-bottom: 88px !important; }
\t.padding-bottom-89  { padding-bottom: 89px !important; }
\t.padding-bottom-90  { padding-bottom: 90px !important; }
\t.padding-bottom-91  { padding-bottom: 91px !important; }
\t.padding-bottom-92  { padding-bottom: 92px !important; }
\t.padding-bottom-93  { padding-bottom: 93px !important; }
\t.padding-bottom-94  { padding-bottom: 94px !important; }
\t.padding-bottom-95  { padding-bottom: 95px !important; }
\t.padding-bottom-96  { padding-bottom: 96px !important; }
\t.padding-bottom-97  { padding-bottom: 97px !important; }
\t.padding-bottom-98  { padding-bottom: 98px !important; }
\t.padding-bottom-99  { padding-bottom: 99px !important; }
\t.padding-bottom-100 { padding-bottom: 100px !important; }

\t/* Padding Right */
\t.padding-right-0  { padding-right: 0 !important; }
\t.padding-right-5  { padding-right: 5px !important; }
\t.padding-right-10 { padding-right: 10px !important; }
\t.padding-right-15 { padding-right: 15px !important; }
\t.padding-right-20 { padding-right: 20px !important; }
\t.padding-right-25 { padding-right: 25px !important; }
\t.padding-right-30 { padding-right: 30px !important; }
\t.padding-right-35 { padding-right: 35px !important; }
\t.padding-right-40 { padding-right: 40px !important; }
\t.padding-right-45 { padding-right: 45px !important; }
\t.padding-right-50 { padding-right: 50px !important; }
\t.padding-right-55 { padding-right: 55px !important; }
\t.padding-right-55 { padding-right: 55px !important; }
\t.padding-right-55 { padding-right: 55px !important; }
\t.padding-right-55 { padding-right: 55px !important; }
\t.padding-right-60 { padding-right: 60px !important; }
\t.padding-right-65 { padding-right: 65px !important; }
\t.padding-right-70 { padding-right: 70px !important; }
\t.padding-right-75 { padding-right: 75px !important; }
\t.padding-right-80 { padding-right: 80px !important; }
\t.padding-right-85 { padding-right: 85px !important; }
\t.padding-right-90 { padding-right: 90px !important; }
\t.padding-right-95 { padding-right: 95px !important; }
\t.padding-right-100 { padding-right: 100px !important; }

\t/* Padding Left */
\t.padding-left-0  { padding-left: 0 !important; }
\t.padding-left-5  { padding-left: 5px !important; }
\t.padding-left-10 { padding-left: 10px !important; }
\t.padding-left-15 { padding-left: 15px !important; }
\t.padding-left-20 { padding-left: 20px !important; }
\t.padding-left-25 { padding-left: 25px !important; }
\t.padding-left-30 { padding-left: 30px !important; }
\t.padding-left-35 { padding-left: 35px !important; }
\t.padding-left-40 { padding-left: 40px !important; }
\t.padding-left-45 { padding-left: 45px !important; }
\t.padding-left-50 { padding-left: 50px !important; }
\t.padding-left-55 { padding-left: 55px !important; }
\t.padding-left-55 { padding-left: 55px !important; }
\t.padding-left-55 { padding-left: 55px !important; }
\t.padding-left-55 { padding-left: 55px !important; }
\t.padding-left-60 { padding-left: 60px !important; }
\t.padding-left-65 { padding-left: 65px !important; }
\t.padding-left-70 { padding-left: 70px !important; }
\t.padding-left-75 { padding-left: 75px !important; }
\t.padding-left-80 { padding-left: 80px !important; }
\t.padding-left-85 { padding-left: 85px !important; }
\t.padding-left-90 { padding-left: 90px !important; }
\t.padding-left-95 { padding-left: 95px !important; }
\t.padding-left-100 { padding-left: 100px !important; }
", "@Publication/Front/css/style.css", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\css\\style.css");
    }
}
