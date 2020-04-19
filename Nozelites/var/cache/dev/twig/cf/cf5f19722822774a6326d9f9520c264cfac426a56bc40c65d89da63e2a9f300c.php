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

/* @Publication/Front/js/custom.js */
class __TwigTemplate_07c1084b3b61185ed543e5c53e06d516a91770778ace606e0349109ce0be1204 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/js/custom.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/js/custom.js"));

        // line 1
        echo "/* ----------------- Start Document ----------------- */
(function(\$){
\"use strict\";

\$(document).ready(function(){
\t
\t/*--------------------------------------------------*/
\t/*  Mobile Menu - mmenu.js
\t/*--------------------------------------------------*/
\t\$(function() {
\t\tfunction mmenuInit() {
\t\t\tvar wi = \$(window).width();
\t\t\tif(wi <= '1099') {

\t\t\t\t\$(\".mmenu-init\" ).remove();
\t\t\t\t\$(\"#navigation\").clone().addClass(\"mmenu-init\").insertBefore(\"#navigation\").removeAttr('id').removeClass('style-1 style-2')
\t\t\t\t\t\t\t\t.find('ul, div').removeClass('style-1 style-2 mega-menu mega-menu-content mega-menu-section').removeAttr('id');
\t\t\t\t\$(\".mmenu-init\").find(\"ul\").addClass(\"mm-listview\");
\t\t\t\t\$(\".mmenu-init\").find(\".mobile-styles .mm-listview\").unwrap();


\t\t\t\t\$(\".mmenu-init\").mmenu({
\t\t\t\t \t\"counters\": true
\t\t\t\t}, {
\t\t\t\t // configuration
\t\t\t\t offCanvas: {
\t\t\t\t    pageNodetype: \"#wrapper\"
\t\t\t\t }
\t\t\t\t});

\t\t\t\tvar mmenuAPI = \$(\".mmenu-init\").data( \"mmenu\" );
\t\t\t\tvar \$icon = \$(\".mmenu-trigger .hamburger\");

\t\t\t\t\$(\".mmenu-trigger\").on('click', function() {
\t\t\t\t\tmmenuAPI.open();
\t\t\t\t});

\t\t\t}
\t\t\t\$(\".mm-next\").addClass(\"mm-fullsubopen\");
\t\t}
\t\tmmenuInit();
\t\t\$(window).resize(function() { mmenuInit(); });
\t});


\t/*--------------------------------------------------*/
\t/*  Sticky Header
\t/*--------------------------------------------------*/
\tfunction stickyHeader() {

\t\t\$(window).on('scroll load', function() {

\t\t\tif(\$(window).width() < '1099') { 
\t\t\t\t\$(\"#header-container\").removeClass(\"cloned\");
\t\t\t}
\t\t\t
\t\t\tif(\$(window).width() > '1099') {

\t\t\t\t// CSS adjustment
\t\t\t\t\$(\"#header-container\").css({
\t\t\t\t\tposition: 'fixed',
\t\t\t\t});
\t\t
\t\t\t\tvar headerOffset = \$(\"#header-container\").height();

\t\t\t\tif(\$(window).scrollTop() >= headerOffset){
\t\t\t\t\t\$(\"#header-container\").addClass('cloned');
\t\t\t\t\t\$(\".wrapper-with-transparent-header #header-container\").addClass('cloned').removeClass(\"transparent-header unsticky\");
\t\t\t\t} else {
\t\t\t\t\t\$(\"#header-container\").removeClass(\"cloned\");
\t\t\t\t\t\$(\".wrapper-with-transparent-header #header-container\").addClass('transparent-header unsticky').removeClass(\"cloned\");
\t\t\t\t}

\t\t\t\t// Sticky Logo
\t\t\t\tvar transparentLogo = \$('#header-container #logo img').attr('data-transparent-logo');
\t\t\t\tvar stickyLogo = \$('#header-container #logo img').attr('data-sticky-logo');

\t\t\t\tif( \$('.wrapper-with-transparent-header #header-container').hasClass('cloned')) {
\t\t\t\t\t\$(\"#header-container.cloned #logo img\").attr(\"src\", stickyLogo);
\t\t\t\t} 

\t\t\t\tif( \$('.wrapper-with-transparent-header #header-container').hasClass('transparent-header')) {
\t\t\t\t\t\$(\"#header-container #logo img\").attr(\"src\", transparentLogo);
\t\t\t\t} 

\t\t\t\t\$(window).on('load resize', function() {
\t\t\t\t    var headerOffset = \$(\"#header-container\").height();
\t\t\t\t    \$(\"#wrapper\").css({'padding-top': headerOffset});
\t\t\t\t});
\t\t\t}
\t\t});
\t}

\t// Sticky Header Init
\tstickyHeader();


\t/*--------------------------------------------------*/
\t/*  Transparent Header Spacer Adjustment
\t/*--------------------------------------------------*/
\t\$(window).on('load resize', function() {
\t\tvar transparentHeaderHeight = \$('.transparent-header').outerHeight();
\t\t\$('.transparent-header-spacer').css({
\t\t\theight: transparentHeaderHeight,
\t\t});
\t});


\t/*----------------------------------------------------*/
\t/*  Back to Top
\t/*----------------------------------------------------*/

\t// Button
\tfunction backToTop() {
\t\t\$('body').append('<div id=\"backtotop\"><a href=\"#\"></a></div>');
\t}
\tbackToTop();

\t// Showing Button
\tvar pxShow = 600; // height on which the button will show
\tvar scrollSpeed = 500; // how slow / fast you want the button to scroll to top.

\t\$(window).scroll(function(){
\t if(\$(window).scrollTop() >= pxShow){
\t\t\$(\"#backtotop\").addClass('visible');
\t } else {
\t\t\$(\"#backtotop\").removeClass('visible');
\t }
\t});

\t\$('#backtotop a').on('click', function(){
\t \$('html, body').animate({scrollTop:0}, scrollSpeed);
\t return false;
\t});
\t

\t/*--------------------------------------------------*/
\t/*  Ripple Effect
\t/*--------------------------------------------------*/
\t\$('.ripple-effect, .ripple-effect-dark').on('click', function(e) {
\t\tvar rippleDiv = \$('<span class=\"ripple-overlay\">'),
\t\t\trippleOffset = \$(this).offset(),
\t\t\trippleY = e.pageY - rippleOffset.top,
\t\t\trippleX = e.pageX - rippleOffset.left;

\t\trippleDiv.css({
\t\t\ttop: rippleY - (rippleDiv.height() / 2),
\t\t\tleft: rippleX - (rippleDiv.width() / 2),
\t\t\t// background: \$(this).data(\"ripple-color\");
\t\t}).appendTo(\$(this));

\t\twindow.setTimeout(function() {
\t\t\trippleDiv.remove();
\t\t}, 800);
\t});


\t/*--------------------------------------------------*/
\t/*  Interactive Effects
\t/*--------------------------------------------------*/
\t\$(\".switch, .radio\").each(function() {
\t\tvar intElem = \$(this);
\t\tintElem.on('click', function() {
\t\t\tintElem.addClass('interactive-effect');
\t\t   setTimeout(function() {
\t\t\t\t\tintElem.removeClass('interactive-effect');
\t\t   }, 400);
\t\t});
\t});


\t/*--------------------------------------------------*/
\t/*  Sliding Button Icon
\t/*--------------------------------------------------*/
\t\$(window).on('load', function() {
\t\t\$(\".button.button-sliding-icon\").not(\".task-listing .button.button-sliding-icon\").each(function() {
\t\t\tvar buttonWidth = \$(this).outerWidth()+30;
\t\t\t\$(this).css('width',buttonWidth);
\t\t});
\t});


\t/*--------------------------------------------------*/
\t/*  Sliding Button Icon
\t/*--------------------------------------------------*/
    \$('.bookmark-icon').on('click', function(e){
    \te.preventDefault();
\t\t\$(this).toggleClass('bookmarked');
\t});

    \$('.bookmark-button').on('click', function(e){
    \te.preventDefault();
\t\t\$(this).toggleClass('bookmarked');
\t});


\t/*----------------------------------------------------*/
\t/*  Notifications Boxes
\t/*----------------------------------------------------*/
\t\$(\"a.close\").removeAttr(\"href\").on('click', function(){
\t\tfunction slideFade(elem) {
\t\t\tvar fadeOut = { opacity: 0, transition: 'opacity 0.5s' };
\t\t\telem.css(fadeOut).slideUp();
\t\t}
\t\tslideFade(\$(this).parent());
\t});

\t/*--------------------------------------------------*/
\t/*  Notification Dropdowns
\t/*--------------------------------------------------*/
\t\$(\".header-notifications\").each(function() {
\t\tvar userMenu = \$(this);
\t\tvar userMenuTrigger = \$(this).find('.header-notifications-trigger a');

\t\t\$(userMenuTrigger).on('click', function(event) {
\t\t\tevent.preventDefault();

\t\t\tif ( \$(this).closest(\".header-notifications\").is(\".active\") ) {
\t            close_user_dropdown();
\t        } else {
\t            close_user_dropdown();
\t            userMenu.addClass('active');
\t        }
\t\t});
\t});

\t// Closing function
    function close_user_dropdown() {
\t\t\$('.header-notifications').removeClass(\"active\");
    }

    // Closes notification dropdown on click outside the conatainer
\tvar mouse_is_inside = false;

\t\$( \".header-notifications\" ).on( \"mouseenter\", function() {
\t  mouse_is_inside=true;
\t});
\t\$( \".header-notifications\" ).on( \"mouseleave\", function() {
\t  mouse_is_inside=false;
\t});

\t\$(\"body\").mouseup(function(){
\t    if(! mouse_is_inside) close_user_dropdown();
\t});

\t// Close with ESC
\t\$(document).keyup(function(e) { 
\t\tif (e.keyCode == 27) {
\t\t\tclose_user_dropdown();
\t\t}
\t});


\t/*--------------------------------------------------*/
\t/*  User Status Switch
\t/*--------------------------------------------------*/
\tif (\$('.status-switch label.user-invisible').hasClass('current-status')) {
\t\t\$('.status-indicator').addClass('right');
\t}

\t\$('.status-switch label.user-invisible').on('click', function(){
\t\t\$('.status-indicator').addClass('right');
\t\t\$('.status-switch label').removeClass('current-status');
\t\t\$('.user-invisible').addClass('current-status');
\t});

\t\$('.status-switch label.user-online').on('click', function(){
\t\t\$('.status-indicator').removeClass('right');
\t\t\$('.status-switch label').removeClass('current-status');
\t\t\$('.user-online').addClass('current-status');
\t});


\t/*--------------------------------------------------*/
\t/*  Full Screen Page Scripts
\t/*--------------------------------------------------*/

\t// Wrapper Height (window height - header height)
\tfunction wrapperHeight() {
\t\tvar headerHeight = \$(\"#header-container\").outerHeight();
\t\tvar windowHeight = \$(window).outerHeight() - headerHeight;
\t\t\$('.full-page-content-container, .dashboard-content-container, .dashboard-sidebar-inner, .dashboard-container, .full-page-container').css({ height: windowHeight });
\t\t\$('.dashboard-content-inner').css({ 'min-height': windowHeight });
\t}

\t// Enabling Scrollbar
\tfunction fullPageScrollbar() {
\t\t\$(\".full-page-sidebar-inner, .dashboard-sidebar-inner\").each(function() {

\t\t\tvar headerHeight = \$(\"#header-container\").outerHeight();
\t\t\tvar windowHeight = \$(window).outerHeight() - headerHeight;
\t\t\tvar sidebarContainerHeight = \$(this).find(\".sidebar-container, .dashboard-nav-container\").outerHeight();

\t\t\t// Enables scrollbar if sidebar is higher than wrapper
\t\t\tif (sidebarContainerHeight > windowHeight) {
\t\t\t\t\$(this).css({ height: windowHeight });
\t\t
\t\t\t} else {
\t\t\t\t\$(this).find('.simplebar-track').hide();
\t\t\t}
\t\t});
\t}

\t// Init
\t\$(window).on('load resize', function() {
\t\twrapperHeight();
\t\tfullPageScrollbar();
\t});

\t// Sliding Sidebar 
\t\$('.enable-filters-button').on('click', function(){
\t\t\$('.full-page-sidebar').toggleClass(\"enabled-sidebar\");
\t\t\$(this).toggleClass(\"active\");
\t\t\$('.filter-button-tooltip').removeClass('tooltip-visible');
\t});

\t/*  Enable Filters Button Tooltip */
\t\$(window).on('load', function() {
\t\t\$('.filter-button-tooltip').css({
\t\t\tleft: \$('.enable-filters-button').outerWidth() + 48
\t\t})
\t\t.addClass('tooltip-visible');
\t});

\t// Avatar Switcher
\tfunction avatarSwitcher() {
\t    var readURL = function(input) {
\t        if (input.files && input.files[0]) {
\t            var reader = new FileReader();

\t            reader.onload = function (e) {
\t                \$('.profile-pic').attr('src', e.target.result);
\t            };
\t    
\t            reader.readAsDataURL(input.files[0]);
\t        }
\t    };
\t   
\t    \$(\".file-upload\").on('change', function(){
\t        readURL(this);
\t    });
\t    
\t    \$(\".upload-button\").on('click', function() {
\t       \$(\".file-upload\").click();
\t    });
\t} avatarSwitcher();


\t/*----------------------------------------------------*/
\t/* Dashboard Scripts
\t/*----------------------------------------------------*/

\t// Dashboard Nav Submenus
    \$('.dashboard-nav ul li a').on('click', function(e){
\t\tif(\$(this).closest(\"li\").children(\"ul\").length) {
\t\t\tif ( \$(this).closest(\"li\").is(\".active-submenu\") ) {
\t           \$('.dashboard-nav ul li').removeClass('active-submenu');
\t        } else {
\t            \$('.dashboard-nav ul li').removeClass('active-submenu');
\t            \$(this).parent('li').addClass('active-submenu');
\t        }
\t        e.preventDefault();
\t\t}
\t});


\t// Responsive Dashbaord Nav Trigger
    \$('.dashboard-responsive-nav-trigger').on('click', function(e){
    \te.preventDefault();
\t\t\$(this).toggleClass('active');

\t\tvar dashboardNavContainer = \$('body').find(\".dashboard-nav\");

\t\tif( \$(this).hasClass('active') ){
\t\t\t\$(dashboardNavContainer).addClass('active');
\t\t} else {
\t\t\t\$(dashboardNavContainer).removeClass('active');
\t\t}

\t\t\$('.dashboard-responsive-nav-trigger .hamburger').toggleClass('is-active');

\t});

\t// Fun Facts
\tfunction funFacts() {
\t\t/*jslint bitwise: true */
\t\tfunction hexToRgbA(hex){
\t\t    var c;
\t\t    if(/^#([A-Fa-f0-9]{3}){1,2}\$/.test(hex)){
\t\t        c= hex.substring(1).split('');
\t\t        if(c.length== 3){
\t\t            c= [c[0], c[0], c[1], c[1], c[2], c[2]];
\t\t        }
\t\t        c= '0x'+c.join('');
\t\t        return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',0.07)';
\t\t    }
\t\t}

\t\t\$(\".fun-fact\").each(function() {
\t\t\tvar factColor = \$(this).attr('data-fun-fact-color');

\t        if(factColor !== undefined) {
\t        \t\$(this).find(\".fun-fact-icon\").css('background-color', hexToRgbA(factColor));
\t            \$(this).find(\"i\").css('color', factColor);
\t        }
\t\t});

\t} funFacts();


\t// Notes & Messages Scrollbar
\t\$(window).on('load resize', function() {
\t\tvar winwidth = \$(window).width();
\t\tif ( winwidth > 1199) {

\t\t\t// Notes
\t\t\t\$('.row').each(function() {
\t\t\t\tvar mbh = \$(this).find('.main-box-in-row').outerHeight();
\t\t\t\tvar cbh = \$(this).find('.child-box-in-row').outerHeight();
\t\t\t\tif ( mbh < cbh ) {
\t\t\t\t\tvar headerBoxHeight = \$(this).find('.child-box-in-row .headline').outerHeight();
\t\t\t\t\tvar mainBoxHeight = \$(this).find('.main-box-in-row').outerHeight() - headerBoxHeight + 39;

\t\t\t\t\t\$(this).find('.child-box-in-row .content')
\t\t\t\t\t\t\t.wrap('<div class=\"dashboard-box-scrollbar\" style=\"max-height: '+mainBoxHeight+'px\" data-simplebar></div>');
\t\t\t\t}
\t\t\t});

\t\t\t// Messages Sidebar
\t\t\t// var messagesList = \$(\".messages-inbox\").outerHeight();
\t\t\t// var messageWrap = \$(\".message-content\").outerHeight();
\t\t\t// if ( messagesList > messagesWrap) {
\t\t\t// \t\$(messagesList).css({
\t\t\t// \t\t'max-height': messageWrap,
\t\t\t// \t});
\t\t\t// }
\t\t}
\t});

\t// Mobile Adjustment for Single Button Icon in Dashboard Box
\t\$('.buttons-to-right').each(function() {
\t\tvar btr = \$(this).width();
\t\tif (btr < 36) {
\t\t\t\$(this).addClass('single-right-button');
\t\t}
\t});

\t// Small Footer Adjustment
\t\$(window).on('load resize', function() {
\t\tvar smallFooterHeight = \$('.small-footer').outerHeight();
\t\t\$('.dashboard-footer-spacer').css({
\t\t\t'padding-top': smallFooterHeight + 45
\t\t});
\t});


\t// Auto Resizing Message Input Field
    /* global jQuery */
\tjQuery.each(jQuery('textarea[data-autoresize]'), function() {
\t\tvar offset = this.offsetHeight - this.clientHeight;

\t\tvar resizeTextarea = function(el) {
\t\t    jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
\t\t};
\t\tjQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
\t});


\t/*--------------------------------------------------*/
\t/*  Star Rating
\t/*--------------------------------------------------*/
\tfunction starRating(ratingElem) {

\t\t\$(ratingElem).each(function() {

\t\t\tvar dataRating = \$(this).attr('data-rating');

\t\t\t// Rating Stars Output
\t\t\tfunction starsOutput(firstStar, secondStar, thirdStar, fourthStar, fifthStar) {
\t\t\t\treturn(''+
\t\t\t\t\t'<span class=\"'+firstStar+'\"></span>'+
\t\t\t\t\t'<span class=\"'+secondStar+'\"></span>'+
\t\t\t\t\t'<span class=\"'+thirdStar+'\"></span>'+
\t\t\t\t\t'<span class=\"'+fourthStar+'\"></span>'+
\t\t\t\t\t'<span class=\"'+fifthStar+'\"></span>');
\t\t\t}

\t\t\tvar fiveStars = starsOutput('star','star','star','star','star');

\t\t\tvar fourHalfStars = starsOutput('star','star','star','star','star half');
\t\t\tvar fourStars = starsOutput('star','star','star','star','star empty');

\t\t\tvar threeHalfStars = starsOutput('star','star','star','star half','star empty');
\t\t\tvar threeStars = starsOutput('star','star','star','star empty','star empty');

\t\t\tvar twoHalfStars = starsOutput('star','star','star half','star empty','star empty');
\t\t\tvar twoStars = starsOutput('star','star','star empty','star empty','star empty');

\t\t\tvar oneHalfStar = starsOutput('star','star half','star empty','star empty','star empty');
\t\t\tvar oneStar = starsOutput('star','star empty','star empty','star empty','star empty');

\t\t\t// Rules
\t        if (dataRating >= 4.75) {
\t            \$(this).append(fiveStars);
\t        } else if (dataRating >= 4.25) {
\t            \$(this).append(fourHalfStars);
\t        } else if (dataRating >= 3.75) {
\t            \$(this).append(fourStars);
\t        } else if (dataRating >= 3.25) {
\t            \$(this).append(threeHalfStars);
\t        } else if (dataRating >= 2.75) {
\t            \$(this).append(threeStars);
\t        } else if (dataRating >= 2.25) {
\t            \$(this).append(twoHalfStars);
\t        } else if (dataRating >= 1.75) {
\t            \$(this).append(twoStars);
\t        } else if (dataRating >= 1.25) {
\t            \$(this).append(oneHalfStar);
\t        } else if (dataRating < 1.25) {
\t            \$(this).append(oneStar);
\t        }

\t\t});

\t} starRating('.star-rating');


\t/*--------------------------------------------------*/
\t/*  Enabling Scrollbar in User Menu
\t/*--------------------------------------------------*/
\tfunction userMenuScrollbar() {
\t\t\$(\".header-notifications-scroll\").each(function() {
\t\t\tvar scrollContainerList = \$(this).find('ul');
\t\t\tvar itemsCount = scrollContainerList.children(\"li\").length;
      var notificationItems;
      
\t\t\t// Determines how many items are displayed based on items height
      /* jshint shadow:true */
\t\t\tif (scrollContainerList.children(\"li\").outerHeight() > 140) {
\t\t\t\tvar notificationItems = 2;
\t\t\t} else {
\t\t\t\tvar notificationItems = 3;
\t\t\t}
    
      
\t\t\t// Enables scrollbar if more than 2 items
\t\t\tif (itemsCount > notificationItems) {

\t\t\t    var listHeight = 0;

\t\t\t    \$(scrollContainerList).find('li:lt('+notificationItems+')').each(function() {
\t\t\t       listHeight += \$(this).height();
\t\t\t    });

\t\t\t\t\$(this).css({ height: listHeight });
\t\t
\t\t\t} else {
\t\t\t\t\$(this).css({ height: 'auto' });
\t\t\t\t\$(this).find('.simplebar-track').hide();
\t\t\t}
\t\t});
\t}

\t// Init
\tuserMenuScrollbar();


\t/*--------------------------------------------------*/
\t/*  Tippy JS 
\t/*--------------------------------------------------*/
    /* global tippy */
\ttippy('[data-tippy-placement]', {
\t\tdelay: 100,
\t\tarrow: true,
\t\tarrowType: 'sharp',
\t\tsize: 'regular',
\t\tduration: 200,

\t\t// 'shift-toward', 'fade', 'scale', 'perspective'
\t\tanimation: 'shift-away',

\t\tanimateFill: true,
\t\ttheme: 'dark',

\t\t// How far the tooltip is from its reference element in pixels 
\t\tdistance: 10,

\t});


\t/*----------------------------------------------------*/
\t/*\tAccordion @Lewis Briffa
\t/*----------------------------------------------------*/
\tvar accordion = (function(){
\t  
\t  var \$accordion = \$('.js-accordion');
\t  var \$accordion_header = \$accordion.find('.js-accordion-header');
\t 
\t  // default settings 
\t  var settings = {
\t    // animation speed
\t    speed: 400,
\t    
\t    // close all other accordion items if true
\t    oneOpen: false
\t  };
\t    
\t  return {
\t    // pass configurable object literal
\t    init: function(\$settings) {
\t      \$accordion_header.on('click', function() {
\t        accordion.toggle(\$(this));
\t      });
\t      
\t      \$.extend(settings, \$settings); 
\t      
\t      // ensure only one accordion is active if oneOpen is true
\t      if(settings.oneOpen && \$('.js-accordion-item.active').length > 1) {
\t        \$('.js-accordion-item.active:not(:first)').removeClass('active');
\t      }
\t      
\t      // reveal the active accordion bodies
\t      \$('.js-accordion-item.active').find('> .js-accordion-body').show();
\t    },
\t    toggle: function(\$this) {
\t            
\t      if(settings.oneOpen && \$this[0] != \$this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
\t        \$this.closest('.js-accordion')
\t               .find('> .js-accordion-item') 
\t               .removeClass('active')
\t               .find('.js-accordion-body')
\t               .slideUp();
\t      }
\t      
\t      // show/hide the clicked accordion item
\t      \$this.closest('.js-accordion-item').toggleClass('active');
\t      \$this.next().stop().slideToggle(settings.speed);
\t    }
\t  };
\t})();

\t\$(document).ready(function(){
\t  accordion.init({ speed: 300, oneOpen: true });
\t});


\t/*--------------------------------------------------*/
\t/*  Tabs
\t/*--------------------------------------------------*/
\t\$(window).on('load resize', function() {
\tif (\$(\".tabs\")[0]){
\t\t\$('.tabs').each(function() {
\t\t\t
\t\t\t  var thisTab = \$(this);

\t\t\t  // Intial Border Position
\t\t\t  var activePos = thisTab.find('.tabs-header .active').position();

\t\t\t  function changePos() {

\t\t\t    // Update Position
\t\t\t    activePos = thisTab.find('.tabs-header .active').position();

\t\t\t    // Change Position & Width
\t\t\t    thisTab.find('.tab-hover').stop().css({
\t\t\t      left: activePos.left,
\t\t\t      width: thisTab.find('.tabs-header .active').width()
\t\t\t    });
\t\t\t  }

\t\t\t  changePos();

\t\t\t  // Intial Tab Height
\t\t\t  var tabHeight = thisTab.find('.tab.active').outerHeight();

\t\t\t  // Animate Tab Height
\t\t\t  function animateTabHeight() {

\t\t\t    // Update Tab Height
\t\t\t    tabHeight = thisTab.find('.tab.active').outerHeight();

\t\t\t    // Animate Height
\t\t\t    thisTab.find('.tabs-content').stop().css({
\t\t\t      height: tabHeight + 'px'
\t\t\t    });
\t\t\t  }

\t\t\t  animateTabHeight();

\t\t\t  // Change Tab
\t\t\t  function changeTab() {
\t\t\t    var getTabId = thisTab.find('.tabs-header .active a').attr('data-tab-id');

\t\t\t    // Remove Active State
\t\t\t    thisTab.find('.tab').stop().fadeOut(300, function () {
\t\t\t      // Remove Class
\t\t\t      \$(this).removeClass('active');
\t\t\t    }).hide();

\t\t\t    thisTab.find('.tab[data-tab-id=' + getTabId + ']').stop().fadeIn(300, function () {
\t\t\t      // Add Class
\t\t\t      \$(this).addClass('active');

\t\t\t      // Animate Height
\t\t\t      animateTabHeight();
\t\t\t    });
\t\t\t  }

\t\t\t  // Tabs
\t\t\t  thisTab.find('.tabs-header a').on('click', function (e) {
\t\t\t    e.preventDefault();

\t\t\t    // Tab Id
\t\t\t    var tabId = \$(this).attr('data-tab-id');

\t\t\t    // Remove Active State
\t\t\t    thisTab.find('.tabs-header a').stop().parent().removeClass('active');

\t\t\t    // Add Active State
\t\t\t    \$(this).stop().parent().addClass('active');

\t\t\t    changePos();

\t\t\t    // Update Current Itm
\t\t\t    tabCurrentItem = tabItems.filter('.active');

\t\t\t    // Remove Active State
\t\t\t    thisTab.find('.tab').stop().fadeOut(300, function () {
\t\t\t      // Remove Class
\t\t\t      \$(this).removeClass('active');
\t\t\t    }).hide();

\t\t\t    // Add Active State
\t\t\t    thisTab.find('.tab[data-tab-id=\"' + tabId + '\"]').stop().fadeIn(300, function () {
\t\t\t      // Add Class
\t\t\t      \$(this).addClass('active');

\t\t\t      // Animate Height
\t\t\t      animateTabHeight();
\t\t\t    });
\t\t\t  });

\t\t\t  // Tab Items
\t\t\t  var tabItems = thisTab.find('.tabs-header ul li');

\t\t\t  // Tab Current Item
\t\t\t  var tabCurrentItem = tabItems.filter('.active');

\t\t\t  // Next Button
\t\t\t  thisTab.find('.tab-next').on('click', function (e) {
\t\t\t    e.preventDefault();

\t\t\t    var nextItem = tabCurrentItem.next();

\t\t\t    tabCurrentItem.removeClass('active');

\t\t\t    if (nextItem.length) {
\t\t\t      tabCurrentItem = nextItem.addClass('active');
\t\t\t    } else {
\t\t\t      tabCurrentItem = tabItems.first().addClass('active');
\t\t\t    }

\t\t\t    changePos();
\t\t\t    changeTab();
\t\t\t  });

\t\t\t  // Prev Button
\t\t\t  thisTab.find('.tab-prev').on('click', function (e) {
\t\t\t    e.preventDefault();

\t\t\t    var prevItem = tabCurrentItem.prev();

\t\t\t    tabCurrentItem.removeClass('active');

\t\t\t    if (prevItem.length) {
\t\t\t      tabCurrentItem = prevItem.addClass('active');
\t\t\t    } else {
\t\t\t      tabCurrentItem = tabItems.last().addClass('active');
\t\t\t    }

\t\t\t    changePos();
\t\t\t    changeTab();
\t\t\t  });
\t  \t});
\t}
\t});


\t/*--------------------------------------------------*/
\t/*  Keywords
\t/*--------------------------------------------------*/
\t\$(\".keywords-container\").each(function() {

\t\tvar keywordInput = \$(this).find(\".keyword-input\");
\t\tvar keywordsList = \$(this).find(\".keywords-list\");

\t\t// adding keyword
\t\tfunction addKeyword() {
\t\t\tvar \$newKeyword = \$(\"<span class='keyword'><span class='keyword-remove'></span><span class='keyword-text'>\"+ keywordInput.val() +\"</span></span>\");
\t\t\tkeywordsList.append(\$newKeyword).trigger('resizeContainer');
\t\t\tkeywordInput.val(\"\");
\t\t}

\t\t// add via enter key
\t\tkeywordInput.on('keyup', function(e){
\t\t\tif((e.keyCode == 13) && (keywordInput.val()!==\"\")){
\t\t\t\taddKeyword();
\t\t\t}
\t\t});

\t\t// add via button
\t\t\$('.keyword-input-button').on('click', function(){ 
\t\t\tif((keywordInput.val()!==\"\")){
\t\t\t\taddKeyword();
\t\t\t}
\t\t});

\t\t// removing keyword
\t\t\$(document).on(\"click\",\".keyword-remove\", function(){
\t\t\t\$(this).parent().addClass('keyword-removed');

\t\t\tfunction removeFromMarkup(){
\t\t\t  \$(\".keyword-removed\").remove();
\t\t\t}
\t\t\tsetTimeout(removeFromMarkup, 500);
\t\t\tkeywordsList.css({'height':'auto'}).height();
\t\t});


\t\t// animating container height
\t\tkeywordsList.on('resizeContainer', function(){
\t\t    var heightnow = \$(this).height();
\t\t    var heightfull = \$(this).css({'max-height':'auto', 'height':'auto'}).height();

\t\t\t\$(this).css({ 'height' : heightnow }).animate({ 'height': heightfull }, 200);
\t\t});

\t\t\$(window).on('resize', function() {
\t\t\tkeywordsList.css({'height':'auto'}).height();
\t\t});

\t\t// Auto Height for keywords that are pre-added
\t\t\$(window).on('load', function() {
\t\t\tvar keywordCount = \$('.keywords-list').children(\"span\").length;

\t\t\t// Enables scrollbar if more than 3 items
\t\t\tif (keywordCount > 0) {
\t\t\t\tkeywordsList.css({'height':'auto'}).height();
\t\t
\t\t\t} 
\t\t});

\t});


\t/*--------------------------------------------------*/
\t/*  Bootstrap Range Slider
\t/*--------------------------------------------------*/

\t// Thousand Separator
\tfunction ThousandSeparator(nStr) {
\t    nStr += '';
\t    var x = nStr.split('.');
\t    var x1 = x[0];
\t    var x2 = x.length > 1 ? '.' + x[1] : '';
\t    var rgx = /(\\d+)(\\d{3})/;
\t    while (rgx.test(x1)) {
\t        x1 = x1.replace(rgx, '\$1' + ',' + '\$2');
\t    }
\t    return x1 + x2;
\t}

\t// Bidding Slider Average Value
\tvar avgValue = (parseInt(\$('.bidding-slider').attr(\"data-slider-min\")) + parseInt(\$('.bidding-slider').attr(\"data-slider-max\")))/2;
\tif (\$('.bidding-slider').data(\"slider-value\") === 'auto') {
\t\t\$('.bidding-slider').attr({'data-slider-value': avgValue});
\t}

\t// Bidding Slider Init
\t\$('.bidding-slider').slider();

\t\$(\".bidding-slider\").on(\"slide\", function(slideEvt) {
\t\t\$(\"#biddingVal\").text(ThousandSeparator(parseInt(slideEvt.value)));
\t});
\t\$(\"#biddingVal\").text(ThousandSeparator(parseInt(\$('.bidding-slider').val())));


\t// Default Bootstrap Range Slider
\tvar currencyAttr = \$(\".range-slider\").attr('data-slider-currency');
\t
\t\$(\".range-slider\").slider({
\t\tformatter: function(value) {
\t\t\treturn currencyAttr + ThousandSeparator(parseInt(value[0])) + \" - \" + currencyAttr + ThousandSeparator(parseInt(value[1]));
\t\t}
\t});
\t
\t\$(\".range-slider-single\").slider();


\t/*----------------------------------------------------*/
\t/*  Payment Accordion
\t/*----------------------------------------------------*/
    var radios = document.querySelectorAll('.payment-tab-trigger > input');
 
    for (var i = 0; i < radios.length; i++) {
        radios[i].addEventListener('change', expandAccordion);
    }
 
    function expandAccordion (event) {
      /* jshint validthis: true */
      var tabber = this.closest('.payment');
      var allTabs = tabber.querySelectorAll('.payment-tab');
      for (var i = 0; i < allTabs.length; i++) {
        allTabs[i].classList.remove('payment-tab-active');
      }
      event.target.parentNode.parentNode.classList.add('payment-tab-active');
    }

\t\$('.billing-cycle-radios').on(\"click\", function() {
\t\tif(\$('.billed-yearly-radio input').is(':checked')) { \$('.pricing-plans-container').addClass('billed-yearly'); }
\t\tif(\$('.billed-monthly-radio input').is(':checked')) { \$('.pricing-plans-container').removeClass('billed-yearly'); }
\t});


\t/*--------------------------------------------------*/
\t/*  Quantity Buttons
\t/*--------------------------------------------------*/
\tfunction qtySum(){
\t    var arr = document.getElementsByName('qtyInput');
\t    var tot=0;
\t    for(var i=0;i<arr.length;i++){
\t        if(parseInt(arr[i].value))
\t            tot += parseInt(arr[i].value);
\t    }
\t} 
\tqtySum();

   \$(\".qtyDec, .qtyInc\").on(\"click\", function() {

      var \$button = \$(this);
      var oldValue = \$button.parent().find(\"input\").val();

      if (\$button.hasClass('qtyInc')) {
          \$button.parent().find(\"input\").val(parseFloat(oldValue) + 1);
      } else {
         if (oldValue > 1) {
            \$button.parent().find(\"input\").val(parseFloat(oldValue) - 1);
         } else {
            \$button.parent().find(\"input\").val(1);
         }
      }

      qtySum();
      \$(\".qtyTotal\").addClass(\"rotate-x\");

   });


\t/*----------------------------------------------------*/
\t/*  Inline CSS replacement for backgrounds
\t/*----------------------------------------------------*/
\tfunction inlineBG() {

\t\t// Common Inline CSS
\t\t\$(\".single-page-header, .intro-banner\").each(function() {
\t\t\tvar attrImageBG = \$(this).attr('data-background-image');

\t        if(attrImageBG !== undefined) {
\t        \t\$(this).append('<div class=\"background-image-container\"></div>');
\t            \$('.background-image-container').css('background-image', 'url('+attrImageBG+')');
\t        }
\t\t});

\t} inlineBG();

\t// Fix for intro banner with label
\t\$(\".intro-search-field\").each(function() {
\t\tvar bannerLabel = \$(this).children(\"label\").length;
\t\tif ( bannerLabel > 0 ){
\t\t    \$(this).addClass(\"with-label\");
\t\t}
\t});

\t// Photo Boxes
\t\$(\".photo-box, .photo-section, .video-container\").each(function() {
\t\tvar photoBox = \$(this);
\t\tvar photoBoxBG = \$(this).attr('data-background-image');

        if(photoBox !== undefined) {
            \$(this).css('background-image', 'url('+photoBoxBG+')');
        }
\t});


\t/*----------------------------------------------------*/
\t/*  Share URL and Buttons
\t/*----------------------------------------------------*/
  /* global ClipboardJS */
\t\$('.copy-url input').val(window.location.href);
\tnew ClipboardJS('.copy-url-button');

\t\$(\".share-buttons-icons a\").each(function() {
\t\tvar buttonBG = \$(this).attr(\"data-button-color\");
        if(buttonBG !== undefined) {
        \t\$(this).css('background-color',buttonBG);
        }
\t});


\t/*----------------------------------------------------*/
\t/*  Tabs
\t/*----------------------------------------------------*/
\tvar \$tabsNav    = \$('.popup-tabs-nav'),
\t\$tabsNavLis = \$tabsNav.children('li');

\t\$tabsNav.each(function() {
\t\t var \$this = \$(this);

\t\t \$this.next().children('.popup-tab-content').stop(true,true).hide().first().show();
\t\t \$this.children('li').first().addClass('active').stop(true,true).show();
\t});

\t\$tabsNavLis.on('click', function(e) {
\t\t var \$this = \$(this);

\t\t \$this.siblings().removeClass('active').end().addClass('active');

\t\t \$this.parent().next().children('.popup-tab-content').stop(true,true).hide()
\t\t .siblings( \$this.find('a').attr('href') ).fadeIn();

\t\t e.preventDefault();
\t});

\tvar hash = window.location.hash;
\tvar anchor = \$('.tabs-nav a[href=\"' + hash + '\"]');
\tif (anchor.length === 0) {
\t\t \$(\".popup-tabs-nav li:first\").addClass(\"active\").show(); //Activate first tab
\t\t \$(\".popup-tab-content:first\").show(); //Show first tab content
\t} else {
\t\t anchor.parent('li').click();
\t}

\t// Link to Register Tab
\t\$('.register-tab').on('click', function(event) {
\t\tevent.preventDefault();
\t\t\$(\".popup-tab-content\").hide();
\t\t\$(\"#register.popup-tab-content\").show();
\t\t\$(\"body\").find('.popup-tabs-nav a[href=\"#register\"]').parent(\"li\").click();
\t});

\t// Disable tabs if there's only one tab
\t\$('.popup-tabs-nav').each(function() {
\t\tvar listCount = \$(this).find(\"li\").length;
\t\tif ( listCount < 2 ) {
\t\t\t\$(this).css({
\t\t\t\t'pointer-events': 'none'
\t\t\t});
\t\t}
\t});


  \t/*----------------------------------------------------*/
    /*  Indicator Bar
    /*----------------------------------------------------*/
\t\$('.indicator-bar').each(function() {
\t\tvar indicatorLenght = \$(this).attr('data-indicator-percentage');
\t\t\$(this).find(\"span\").css({
\t\t\twidth: indicatorLenght + \"%\"
\t\t});
\t});


    /*----------------------------------------------------*/
    /*  Custom Upload Button
    /*----------------------------------------------------*/

\tvar uploadButton = {
\t\t\$button    : \$('.uploadButton-input'),
\t\t\$nameField : \$('.uploadButton-file-name')
\t};

\tuploadButton.\$button.on('change',function() {
\t\t_populateFileField(\$(this));
\t});

\tfunction _populateFileField(\$button) {
\t\tvar selectedFile = [];
\t    for (var i = 0; i < \$button.get(0).files.length; ++i) {
\t        selectedFile.push(\$button.get(0).files[i].name +'<br>');
\t    }
\t    uploadButton.\$nameField.html(selectedFile);
\t}


  \t/*----------------------------------------------------*/
    /*  Slick Carousel
    /*----------------------------------------------------*/
\t\$('.default-slick-carousel').slick({
\t\tinfinite: false,
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tdots: false,
\t\tarrows: true,
\t\tadaptiveHeight: true,
\t\tresponsive: [
\t\t    {
\t\t      breakpoint: 1292,
\t\t      settings: {
\t\t        dots: true,
\t\t    \tarrows: false
\t\t      }
\t\t    },
\t\t    {
\t\t      breakpoint: 993,
\t\t      settings: {
\t\t        slidesToShow: 2,
\t\t        slidesToScroll: 2,
\t\t        dots: true,
\t\t    \tarrows: false
\t\t      }
\t\t    },
\t\t    {
\t\t      breakpoint: 769,
\t\t      settings: {
\t\t        slidesToShow: 1,
\t\t        slidesToScroll: 1,
\t\t        dots: true,
\t\t   \t\tarrows: false
\t\t      }
\t\t    }
\t  ]
\t});


\t\$('.testimonial-carousel').slick({
\t  centerMode: true,
\t  centerPadding: '30%',
\t  slidesToShow: 1,
\t  dots: false,
\t  arrows: true,
\t  adaptiveHeight: true,
\t  responsive: [
\t\t{
\t\t  breakpoint: 1600,
\t\t  settings: {
\t\t\t  centerPadding: '21%',
\t\t\t  slidesToShow: 1,
\t\t  }
\t\t},
\t\t{
\t\t  breakpoint: 993,
\t\t  settings: {
\t\t    centerPadding: '15%',
\t\t    slidesToShow: 1,
\t\t  }
\t\t},
\t\t{
\t\t  breakpoint: 769,
\t\t  settings: {
\t\t    centerPadding: '5%',
\t\t    dots: true,
\t\t    arrows: false
\t\t  }
\t\t}
\t  ]
\t});


\t\$('.logo-carousel').slick({
\t\tinfinite: true,
\t\tslidesToShow: 5,
\t\tslidesToScroll: 1,
\t\tdots: false,
\t\tarrows: true,
\t\tresponsive: [
\t\t\t{
\t\t\t  breakpoint: 1365,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 5,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t  breakpoint: 992,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 3,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t  breakpoint: 768,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 1,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t}
\t\t]
\t});

\t\$('.blog-carousel').slick({
\t\tinfinite: false,
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tdots: false,
\t\tarrows: true,
\t\tresponsive: [
\t\t\t{
\t\t\t  breakpoint: 1365,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 3,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t  breakpoint: 992,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 2,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t  breakpoint: 768,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 1,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t}
\t\t]
\t});

  \t/*----------------------------------------------------*/
    /*  Magnific Popup
    /*----------------------------------------------------*/
\t\$('.mfp-gallery-container').each(function() { // the containers for all your galleries

\t\t\$(this).magnificPopup({
\t\t\t type: 'image',
\t\t\t delegate: 'a.mfp-gallery',

\t\t\t fixedContentPos: true,
\t\t\t fixedBgPos: true,

\t\t\t overflowY: 'auto',

\t\t\t closeBtnInside: false,
\t\t\t preloader: true,

\t\t\t removalDelay: 0,
\t\t\t mainClass: 'mfp-fade',

\t\t\t gallery:{enabled:true, tCounter: ''}
\t\t});
\t});

\t\$('.popup-with-zoom-anim').magnificPopup({
\t\t type: 'inline',

\t\t fixedContentPos: false,
\t\t fixedBgPos: true,

\t\t overflowY: 'auto',

\t\t closeBtnInside: true,
\t\t preloader: false,

\t\t midClick: true,
\t\t removalDelay: 300,
\t\t mainClass: 'my-mfp-zoom-in'
\t});

\t\$('.mfp-image').magnificPopup({
\t\t type: 'image',
\t\t closeOnContentClick: true,
\t\t mainClass: 'mfp-fade',
\t\t image: {
\t\t\t  verticalFit: true
\t\t }
\t});

\t\$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
\t\t disableOn: 700,
\t\t type: 'iframe',
\t\t mainClass: 'mfp-fade',
\t\t removalDelay: 160,
\t\t preloader: false,

\t\t fixedContentPos: false
\t});



// ------------------ End Document ------------------ //
});

})(this.jQuery);

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/js/custom.js";
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
        return new Source("/* ----------------- Start Document ----------------- */
(function(\$){
\"use strict\";

\$(document).ready(function(){
\t
\t/*--------------------------------------------------*/
\t/*  Mobile Menu - mmenu.js
\t/*--------------------------------------------------*/
\t\$(function() {
\t\tfunction mmenuInit() {
\t\t\tvar wi = \$(window).width();
\t\t\tif(wi <= '1099') {

\t\t\t\t\$(\".mmenu-init\" ).remove();
\t\t\t\t\$(\"#navigation\").clone().addClass(\"mmenu-init\").insertBefore(\"#navigation\").removeAttr('id').removeClass('style-1 style-2')
\t\t\t\t\t\t\t\t.find('ul, div').removeClass('style-1 style-2 mega-menu mega-menu-content mega-menu-section').removeAttr('id');
\t\t\t\t\$(\".mmenu-init\").find(\"ul\").addClass(\"mm-listview\");
\t\t\t\t\$(\".mmenu-init\").find(\".mobile-styles .mm-listview\").unwrap();


\t\t\t\t\$(\".mmenu-init\").mmenu({
\t\t\t\t \t\"counters\": true
\t\t\t\t}, {
\t\t\t\t // configuration
\t\t\t\t offCanvas: {
\t\t\t\t    pageNodetype: \"#wrapper\"
\t\t\t\t }
\t\t\t\t});

\t\t\t\tvar mmenuAPI = \$(\".mmenu-init\").data( \"mmenu\" );
\t\t\t\tvar \$icon = \$(\".mmenu-trigger .hamburger\");

\t\t\t\t\$(\".mmenu-trigger\").on('click', function() {
\t\t\t\t\tmmenuAPI.open();
\t\t\t\t});

\t\t\t}
\t\t\t\$(\".mm-next\").addClass(\"mm-fullsubopen\");
\t\t}
\t\tmmenuInit();
\t\t\$(window).resize(function() { mmenuInit(); });
\t});


\t/*--------------------------------------------------*/
\t/*  Sticky Header
\t/*--------------------------------------------------*/
\tfunction stickyHeader() {

\t\t\$(window).on('scroll load', function() {

\t\t\tif(\$(window).width() < '1099') { 
\t\t\t\t\$(\"#header-container\").removeClass(\"cloned\");
\t\t\t}
\t\t\t
\t\t\tif(\$(window).width() > '1099') {

\t\t\t\t// CSS adjustment
\t\t\t\t\$(\"#header-container\").css({
\t\t\t\t\tposition: 'fixed',
\t\t\t\t});
\t\t
\t\t\t\tvar headerOffset = \$(\"#header-container\").height();

\t\t\t\tif(\$(window).scrollTop() >= headerOffset){
\t\t\t\t\t\$(\"#header-container\").addClass('cloned');
\t\t\t\t\t\$(\".wrapper-with-transparent-header #header-container\").addClass('cloned').removeClass(\"transparent-header unsticky\");
\t\t\t\t} else {
\t\t\t\t\t\$(\"#header-container\").removeClass(\"cloned\");
\t\t\t\t\t\$(\".wrapper-with-transparent-header #header-container\").addClass('transparent-header unsticky').removeClass(\"cloned\");
\t\t\t\t}

\t\t\t\t// Sticky Logo
\t\t\t\tvar transparentLogo = \$('#header-container #logo img').attr('data-transparent-logo');
\t\t\t\tvar stickyLogo = \$('#header-container #logo img').attr('data-sticky-logo');

\t\t\t\tif( \$('.wrapper-with-transparent-header #header-container').hasClass('cloned')) {
\t\t\t\t\t\$(\"#header-container.cloned #logo img\").attr(\"src\", stickyLogo);
\t\t\t\t} 

\t\t\t\tif( \$('.wrapper-with-transparent-header #header-container').hasClass('transparent-header')) {
\t\t\t\t\t\$(\"#header-container #logo img\").attr(\"src\", transparentLogo);
\t\t\t\t} 

\t\t\t\t\$(window).on('load resize', function() {
\t\t\t\t    var headerOffset = \$(\"#header-container\").height();
\t\t\t\t    \$(\"#wrapper\").css({'padding-top': headerOffset});
\t\t\t\t});
\t\t\t}
\t\t});
\t}

\t// Sticky Header Init
\tstickyHeader();


\t/*--------------------------------------------------*/
\t/*  Transparent Header Spacer Adjustment
\t/*--------------------------------------------------*/
\t\$(window).on('load resize', function() {
\t\tvar transparentHeaderHeight = \$('.transparent-header').outerHeight();
\t\t\$('.transparent-header-spacer').css({
\t\t\theight: transparentHeaderHeight,
\t\t});
\t});


\t/*----------------------------------------------------*/
\t/*  Back to Top
\t/*----------------------------------------------------*/

\t// Button
\tfunction backToTop() {
\t\t\$('body').append('<div id=\"backtotop\"><a href=\"#\"></a></div>');
\t}
\tbackToTop();

\t// Showing Button
\tvar pxShow = 600; // height on which the button will show
\tvar scrollSpeed = 500; // how slow / fast you want the button to scroll to top.

\t\$(window).scroll(function(){
\t if(\$(window).scrollTop() >= pxShow){
\t\t\$(\"#backtotop\").addClass('visible');
\t } else {
\t\t\$(\"#backtotop\").removeClass('visible');
\t }
\t});

\t\$('#backtotop a').on('click', function(){
\t \$('html, body').animate({scrollTop:0}, scrollSpeed);
\t return false;
\t});
\t

\t/*--------------------------------------------------*/
\t/*  Ripple Effect
\t/*--------------------------------------------------*/
\t\$('.ripple-effect, .ripple-effect-dark').on('click', function(e) {
\t\tvar rippleDiv = \$('<span class=\"ripple-overlay\">'),
\t\t\trippleOffset = \$(this).offset(),
\t\t\trippleY = e.pageY - rippleOffset.top,
\t\t\trippleX = e.pageX - rippleOffset.left;

\t\trippleDiv.css({
\t\t\ttop: rippleY - (rippleDiv.height() / 2),
\t\t\tleft: rippleX - (rippleDiv.width() / 2),
\t\t\t// background: \$(this).data(\"ripple-color\");
\t\t}).appendTo(\$(this));

\t\twindow.setTimeout(function() {
\t\t\trippleDiv.remove();
\t\t}, 800);
\t});


\t/*--------------------------------------------------*/
\t/*  Interactive Effects
\t/*--------------------------------------------------*/
\t\$(\".switch, .radio\").each(function() {
\t\tvar intElem = \$(this);
\t\tintElem.on('click', function() {
\t\t\tintElem.addClass('interactive-effect');
\t\t   setTimeout(function() {
\t\t\t\t\tintElem.removeClass('interactive-effect');
\t\t   }, 400);
\t\t});
\t});


\t/*--------------------------------------------------*/
\t/*  Sliding Button Icon
\t/*--------------------------------------------------*/
\t\$(window).on('load', function() {
\t\t\$(\".button.button-sliding-icon\").not(\".task-listing .button.button-sliding-icon\").each(function() {
\t\t\tvar buttonWidth = \$(this).outerWidth()+30;
\t\t\t\$(this).css('width',buttonWidth);
\t\t});
\t});


\t/*--------------------------------------------------*/
\t/*  Sliding Button Icon
\t/*--------------------------------------------------*/
    \$('.bookmark-icon').on('click', function(e){
    \te.preventDefault();
\t\t\$(this).toggleClass('bookmarked');
\t});

    \$('.bookmark-button').on('click', function(e){
    \te.preventDefault();
\t\t\$(this).toggleClass('bookmarked');
\t});


\t/*----------------------------------------------------*/
\t/*  Notifications Boxes
\t/*----------------------------------------------------*/
\t\$(\"a.close\").removeAttr(\"href\").on('click', function(){
\t\tfunction slideFade(elem) {
\t\t\tvar fadeOut = { opacity: 0, transition: 'opacity 0.5s' };
\t\t\telem.css(fadeOut).slideUp();
\t\t}
\t\tslideFade(\$(this).parent());
\t});

\t/*--------------------------------------------------*/
\t/*  Notification Dropdowns
\t/*--------------------------------------------------*/
\t\$(\".header-notifications\").each(function() {
\t\tvar userMenu = \$(this);
\t\tvar userMenuTrigger = \$(this).find('.header-notifications-trigger a');

\t\t\$(userMenuTrigger).on('click', function(event) {
\t\t\tevent.preventDefault();

\t\t\tif ( \$(this).closest(\".header-notifications\").is(\".active\") ) {
\t            close_user_dropdown();
\t        } else {
\t            close_user_dropdown();
\t            userMenu.addClass('active');
\t        }
\t\t});
\t});

\t// Closing function
    function close_user_dropdown() {
\t\t\$('.header-notifications').removeClass(\"active\");
    }

    // Closes notification dropdown on click outside the conatainer
\tvar mouse_is_inside = false;

\t\$( \".header-notifications\" ).on( \"mouseenter\", function() {
\t  mouse_is_inside=true;
\t});
\t\$( \".header-notifications\" ).on( \"mouseleave\", function() {
\t  mouse_is_inside=false;
\t});

\t\$(\"body\").mouseup(function(){
\t    if(! mouse_is_inside) close_user_dropdown();
\t});

\t// Close with ESC
\t\$(document).keyup(function(e) { 
\t\tif (e.keyCode == 27) {
\t\t\tclose_user_dropdown();
\t\t}
\t});


\t/*--------------------------------------------------*/
\t/*  User Status Switch
\t/*--------------------------------------------------*/
\tif (\$('.status-switch label.user-invisible').hasClass('current-status')) {
\t\t\$('.status-indicator').addClass('right');
\t}

\t\$('.status-switch label.user-invisible').on('click', function(){
\t\t\$('.status-indicator').addClass('right');
\t\t\$('.status-switch label').removeClass('current-status');
\t\t\$('.user-invisible').addClass('current-status');
\t});

\t\$('.status-switch label.user-online').on('click', function(){
\t\t\$('.status-indicator').removeClass('right');
\t\t\$('.status-switch label').removeClass('current-status');
\t\t\$('.user-online').addClass('current-status');
\t});


\t/*--------------------------------------------------*/
\t/*  Full Screen Page Scripts
\t/*--------------------------------------------------*/

\t// Wrapper Height (window height - header height)
\tfunction wrapperHeight() {
\t\tvar headerHeight = \$(\"#header-container\").outerHeight();
\t\tvar windowHeight = \$(window).outerHeight() - headerHeight;
\t\t\$('.full-page-content-container, .dashboard-content-container, .dashboard-sidebar-inner, .dashboard-container, .full-page-container').css({ height: windowHeight });
\t\t\$('.dashboard-content-inner').css({ 'min-height': windowHeight });
\t}

\t// Enabling Scrollbar
\tfunction fullPageScrollbar() {
\t\t\$(\".full-page-sidebar-inner, .dashboard-sidebar-inner\").each(function() {

\t\t\tvar headerHeight = \$(\"#header-container\").outerHeight();
\t\t\tvar windowHeight = \$(window).outerHeight() - headerHeight;
\t\t\tvar sidebarContainerHeight = \$(this).find(\".sidebar-container, .dashboard-nav-container\").outerHeight();

\t\t\t// Enables scrollbar if sidebar is higher than wrapper
\t\t\tif (sidebarContainerHeight > windowHeight) {
\t\t\t\t\$(this).css({ height: windowHeight });
\t\t
\t\t\t} else {
\t\t\t\t\$(this).find('.simplebar-track').hide();
\t\t\t}
\t\t});
\t}

\t// Init
\t\$(window).on('load resize', function() {
\t\twrapperHeight();
\t\tfullPageScrollbar();
\t});

\t// Sliding Sidebar 
\t\$('.enable-filters-button').on('click', function(){
\t\t\$('.full-page-sidebar').toggleClass(\"enabled-sidebar\");
\t\t\$(this).toggleClass(\"active\");
\t\t\$('.filter-button-tooltip').removeClass('tooltip-visible');
\t});

\t/*  Enable Filters Button Tooltip */
\t\$(window).on('load', function() {
\t\t\$('.filter-button-tooltip').css({
\t\t\tleft: \$('.enable-filters-button').outerWidth() + 48
\t\t})
\t\t.addClass('tooltip-visible');
\t});

\t// Avatar Switcher
\tfunction avatarSwitcher() {
\t    var readURL = function(input) {
\t        if (input.files && input.files[0]) {
\t            var reader = new FileReader();

\t            reader.onload = function (e) {
\t                \$('.profile-pic').attr('src', e.target.result);
\t            };
\t    
\t            reader.readAsDataURL(input.files[0]);
\t        }
\t    };
\t   
\t    \$(\".file-upload\").on('change', function(){
\t        readURL(this);
\t    });
\t    
\t    \$(\".upload-button\").on('click', function() {
\t       \$(\".file-upload\").click();
\t    });
\t} avatarSwitcher();


\t/*----------------------------------------------------*/
\t/* Dashboard Scripts
\t/*----------------------------------------------------*/

\t// Dashboard Nav Submenus
    \$('.dashboard-nav ul li a').on('click', function(e){
\t\tif(\$(this).closest(\"li\").children(\"ul\").length) {
\t\t\tif ( \$(this).closest(\"li\").is(\".active-submenu\") ) {
\t           \$('.dashboard-nav ul li').removeClass('active-submenu');
\t        } else {
\t            \$('.dashboard-nav ul li').removeClass('active-submenu');
\t            \$(this).parent('li').addClass('active-submenu');
\t        }
\t        e.preventDefault();
\t\t}
\t});


\t// Responsive Dashbaord Nav Trigger
    \$('.dashboard-responsive-nav-trigger').on('click', function(e){
    \te.preventDefault();
\t\t\$(this).toggleClass('active');

\t\tvar dashboardNavContainer = \$('body').find(\".dashboard-nav\");

\t\tif( \$(this).hasClass('active') ){
\t\t\t\$(dashboardNavContainer).addClass('active');
\t\t} else {
\t\t\t\$(dashboardNavContainer).removeClass('active');
\t\t}

\t\t\$('.dashboard-responsive-nav-trigger .hamburger').toggleClass('is-active');

\t});

\t// Fun Facts
\tfunction funFacts() {
\t\t/*jslint bitwise: true */
\t\tfunction hexToRgbA(hex){
\t\t    var c;
\t\t    if(/^#([A-Fa-f0-9]{3}){1,2}\$/.test(hex)){
\t\t        c= hex.substring(1).split('');
\t\t        if(c.length== 3){
\t\t            c= [c[0], c[0], c[1], c[1], c[2], c[2]];
\t\t        }
\t\t        c= '0x'+c.join('');
\t\t        return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',0.07)';
\t\t    }
\t\t}

\t\t\$(\".fun-fact\").each(function() {
\t\t\tvar factColor = \$(this).attr('data-fun-fact-color');

\t        if(factColor !== undefined) {
\t        \t\$(this).find(\".fun-fact-icon\").css('background-color', hexToRgbA(factColor));
\t            \$(this).find(\"i\").css('color', factColor);
\t        }
\t\t});

\t} funFacts();


\t// Notes & Messages Scrollbar
\t\$(window).on('load resize', function() {
\t\tvar winwidth = \$(window).width();
\t\tif ( winwidth > 1199) {

\t\t\t// Notes
\t\t\t\$('.row').each(function() {
\t\t\t\tvar mbh = \$(this).find('.main-box-in-row').outerHeight();
\t\t\t\tvar cbh = \$(this).find('.child-box-in-row').outerHeight();
\t\t\t\tif ( mbh < cbh ) {
\t\t\t\t\tvar headerBoxHeight = \$(this).find('.child-box-in-row .headline').outerHeight();
\t\t\t\t\tvar mainBoxHeight = \$(this).find('.main-box-in-row').outerHeight() - headerBoxHeight + 39;

\t\t\t\t\t\$(this).find('.child-box-in-row .content')
\t\t\t\t\t\t\t.wrap('<div class=\"dashboard-box-scrollbar\" style=\"max-height: '+mainBoxHeight+'px\" data-simplebar></div>');
\t\t\t\t}
\t\t\t});

\t\t\t// Messages Sidebar
\t\t\t// var messagesList = \$(\".messages-inbox\").outerHeight();
\t\t\t// var messageWrap = \$(\".message-content\").outerHeight();
\t\t\t// if ( messagesList > messagesWrap) {
\t\t\t// \t\$(messagesList).css({
\t\t\t// \t\t'max-height': messageWrap,
\t\t\t// \t});
\t\t\t// }
\t\t}
\t});

\t// Mobile Adjustment for Single Button Icon in Dashboard Box
\t\$('.buttons-to-right').each(function() {
\t\tvar btr = \$(this).width();
\t\tif (btr < 36) {
\t\t\t\$(this).addClass('single-right-button');
\t\t}
\t});

\t// Small Footer Adjustment
\t\$(window).on('load resize', function() {
\t\tvar smallFooterHeight = \$('.small-footer').outerHeight();
\t\t\$('.dashboard-footer-spacer').css({
\t\t\t'padding-top': smallFooterHeight + 45
\t\t});
\t});


\t// Auto Resizing Message Input Field
    /* global jQuery */
\tjQuery.each(jQuery('textarea[data-autoresize]'), function() {
\t\tvar offset = this.offsetHeight - this.clientHeight;

\t\tvar resizeTextarea = function(el) {
\t\t    jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
\t\t};
\t\tjQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
\t});


\t/*--------------------------------------------------*/
\t/*  Star Rating
\t/*--------------------------------------------------*/
\tfunction starRating(ratingElem) {

\t\t\$(ratingElem).each(function() {

\t\t\tvar dataRating = \$(this).attr('data-rating');

\t\t\t// Rating Stars Output
\t\t\tfunction starsOutput(firstStar, secondStar, thirdStar, fourthStar, fifthStar) {
\t\t\t\treturn(''+
\t\t\t\t\t'<span class=\"'+firstStar+'\"></span>'+
\t\t\t\t\t'<span class=\"'+secondStar+'\"></span>'+
\t\t\t\t\t'<span class=\"'+thirdStar+'\"></span>'+
\t\t\t\t\t'<span class=\"'+fourthStar+'\"></span>'+
\t\t\t\t\t'<span class=\"'+fifthStar+'\"></span>');
\t\t\t}

\t\t\tvar fiveStars = starsOutput('star','star','star','star','star');

\t\t\tvar fourHalfStars = starsOutput('star','star','star','star','star half');
\t\t\tvar fourStars = starsOutput('star','star','star','star','star empty');

\t\t\tvar threeHalfStars = starsOutput('star','star','star','star half','star empty');
\t\t\tvar threeStars = starsOutput('star','star','star','star empty','star empty');

\t\t\tvar twoHalfStars = starsOutput('star','star','star half','star empty','star empty');
\t\t\tvar twoStars = starsOutput('star','star','star empty','star empty','star empty');

\t\t\tvar oneHalfStar = starsOutput('star','star half','star empty','star empty','star empty');
\t\t\tvar oneStar = starsOutput('star','star empty','star empty','star empty','star empty');

\t\t\t// Rules
\t        if (dataRating >= 4.75) {
\t            \$(this).append(fiveStars);
\t        } else if (dataRating >= 4.25) {
\t            \$(this).append(fourHalfStars);
\t        } else if (dataRating >= 3.75) {
\t            \$(this).append(fourStars);
\t        } else if (dataRating >= 3.25) {
\t            \$(this).append(threeHalfStars);
\t        } else if (dataRating >= 2.75) {
\t            \$(this).append(threeStars);
\t        } else if (dataRating >= 2.25) {
\t            \$(this).append(twoHalfStars);
\t        } else if (dataRating >= 1.75) {
\t            \$(this).append(twoStars);
\t        } else if (dataRating >= 1.25) {
\t            \$(this).append(oneHalfStar);
\t        } else if (dataRating < 1.25) {
\t            \$(this).append(oneStar);
\t        }

\t\t});

\t} starRating('.star-rating');


\t/*--------------------------------------------------*/
\t/*  Enabling Scrollbar in User Menu
\t/*--------------------------------------------------*/
\tfunction userMenuScrollbar() {
\t\t\$(\".header-notifications-scroll\").each(function() {
\t\t\tvar scrollContainerList = \$(this).find('ul');
\t\t\tvar itemsCount = scrollContainerList.children(\"li\").length;
      var notificationItems;
      
\t\t\t// Determines how many items are displayed based on items height
      /* jshint shadow:true */
\t\t\tif (scrollContainerList.children(\"li\").outerHeight() > 140) {
\t\t\t\tvar notificationItems = 2;
\t\t\t} else {
\t\t\t\tvar notificationItems = 3;
\t\t\t}
    
      
\t\t\t// Enables scrollbar if more than 2 items
\t\t\tif (itemsCount > notificationItems) {

\t\t\t    var listHeight = 0;

\t\t\t    \$(scrollContainerList).find('li:lt('+notificationItems+')').each(function() {
\t\t\t       listHeight += \$(this).height();
\t\t\t    });

\t\t\t\t\$(this).css({ height: listHeight });
\t\t
\t\t\t} else {
\t\t\t\t\$(this).css({ height: 'auto' });
\t\t\t\t\$(this).find('.simplebar-track').hide();
\t\t\t}
\t\t});
\t}

\t// Init
\tuserMenuScrollbar();


\t/*--------------------------------------------------*/
\t/*  Tippy JS 
\t/*--------------------------------------------------*/
    /* global tippy */
\ttippy('[data-tippy-placement]', {
\t\tdelay: 100,
\t\tarrow: true,
\t\tarrowType: 'sharp',
\t\tsize: 'regular',
\t\tduration: 200,

\t\t// 'shift-toward', 'fade', 'scale', 'perspective'
\t\tanimation: 'shift-away',

\t\tanimateFill: true,
\t\ttheme: 'dark',

\t\t// How far the tooltip is from its reference element in pixels 
\t\tdistance: 10,

\t});


\t/*----------------------------------------------------*/
\t/*\tAccordion @Lewis Briffa
\t/*----------------------------------------------------*/
\tvar accordion = (function(){
\t  
\t  var \$accordion = \$('.js-accordion');
\t  var \$accordion_header = \$accordion.find('.js-accordion-header');
\t 
\t  // default settings 
\t  var settings = {
\t    // animation speed
\t    speed: 400,
\t    
\t    // close all other accordion items if true
\t    oneOpen: false
\t  };
\t    
\t  return {
\t    // pass configurable object literal
\t    init: function(\$settings) {
\t      \$accordion_header.on('click', function() {
\t        accordion.toggle(\$(this));
\t      });
\t      
\t      \$.extend(settings, \$settings); 
\t      
\t      // ensure only one accordion is active if oneOpen is true
\t      if(settings.oneOpen && \$('.js-accordion-item.active').length > 1) {
\t        \$('.js-accordion-item.active:not(:first)').removeClass('active');
\t      }
\t      
\t      // reveal the active accordion bodies
\t      \$('.js-accordion-item.active').find('> .js-accordion-body').show();
\t    },
\t    toggle: function(\$this) {
\t            
\t      if(settings.oneOpen && \$this[0] != \$this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
\t        \$this.closest('.js-accordion')
\t               .find('> .js-accordion-item') 
\t               .removeClass('active')
\t               .find('.js-accordion-body')
\t               .slideUp();
\t      }
\t      
\t      // show/hide the clicked accordion item
\t      \$this.closest('.js-accordion-item').toggleClass('active');
\t      \$this.next().stop().slideToggle(settings.speed);
\t    }
\t  };
\t})();

\t\$(document).ready(function(){
\t  accordion.init({ speed: 300, oneOpen: true });
\t});


\t/*--------------------------------------------------*/
\t/*  Tabs
\t/*--------------------------------------------------*/
\t\$(window).on('load resize', function() {
\tif (\$(\".tabs\")[0]){
\t\t\$('.tabs').each(function() {
\t\t\t
\t\t\t  var thisTab = \$(this);

\t\t\t  // Intial Border Position
\t\t\t  var activePos = thisTab.find('.tabs-header .active').position();

\t\t\t  function changePos() {

\t\t\t    // Update Position
\t\t\t    activePos = thisTab.find('.tabs-header .active').position();

\t\t\t    // Change Position & Width
\t\t\t    thisTab.find('.tab-hover').stop().css({
\t\t\t      left: activePos.left,
\t\t\t      width: thisTab.find('.tabs-header .active').width()
\t\t\t    });
\t\t\t  }

\t\t\t  changePos();

\t\t\t  // Intial Tab Height
\t\t\t  var tabHeight = thisTab.find('.tab.active').outerHeight();

\t\t\t  // Animate Tab Height
\t\t\t  function animateTabHeight() {

\t\t\t    // Update Tab Height
\t\t\t    tabHeight = thisTab.find('.tab.active').outerHeight();

\t\t\t    // Animate Height
\t\t\t    thisTab.find('.tabs-content').stop().css({
\t\t\t      height: tabHeight + 'px'
\t\t\t    });
\t\t\t  }

\t\t\t  animateTabHeight();

\t\t\t  // Change Tab
\t\t\t  function changeTab() {
\t\t\t    var getTabId = thisTab.find('.tabs-header .active a').attr('data-tab-id');

\t\t\t    // Remove Active State
\t\t\t    thisTab.find('.tab').stop().fadeOut(300, function () {
\t\t\t      // Remove Class
\t\t\t      \$(this).removeClass('active');
\t\t\t    }).hide();

\t\t\t    thisTab.find('.tab[data-tab-id=' + getTabId + ']').stop().fadeIn(300, function () {
\t\t\t      // Add Class
\t\t\t      \$(this).addClass('active');

\t\t\t      // Animate Height
\t\t\t      animateTabHeight();
\t\t\t    });
\t\t\t  }

\t\t\t  // Tabs
\t\t\t  thisTab.find('.tabs-header a').on('click', function (e) {
\t\t\t    e.preventDefault();

\t\t\t    // Tab Id
\t\t\t    var tabId = \$(this).attr('data-tab-id');

\t\t\t    // Remove Active State
\t\t\t    thisTab.find('.tabs-header a').stop().parent().removeClass('active');

\t\t\t    // Add Active State
\t\t\t    \$(this).stop().parent().addClass('active');

\t\t\t    changePos();

\t\t\t    // Update Current Itm
\t\t\t    tabCurrentItem = tabItems.filter('.active');

\t\t\t    // Remove Active State
\t\t\t    thisTab.find('.tab').stop().fadeOut(300, function () {
\t\t\t      // Remove Class
\t\t\t      \$(this).removeClass('active');
\t\t\t    }).hide();

\t\t\t    // Add Active State
\t\t\t    thisTab.find('.tab[data-tab-id=\"' + tabId + '\"]').stop().fadeIn(300, function () {
\t\t\t      // Add Class
\t\t\t      \$(this).addClass('active');

\t\t\t      // Animate Height
\t\t\t      animateTabHeight();
\t\t\t    });
\t\t\t  });

\t\t\t  // Tab Items
\t\t\t  var tabItems = thisTab.find('.tabs-header ul li');

\t\t\t  // Tab Current Item
\t\t\t  var tabCurrentItem = tabItems.filter('.active');

\t\t\t  // Next Button
\t\t\t  thisTab.find('.tab-next').on('click', function (e) {
\t\t\t    e.preventDefault();

\t\t\t    var nextItem = tabCurrentItem.next();

\t\t\t    tabCurrentItem.removeClass('active');

\t\t\t    if (nextItem.length) {
\t\t\t      tabCurrentItem = nextItem.addClass('active');
\t\t\t    } else {
\t\t\t      tabCurrentItem = tabItems.first().addClass('active');
\t\t\t    }

\t\t\t    changePos();
\t\t\t    changeTab();
\t\t\t  });

\t\t\t  // Prev Button
\t\t\t  thisTab.find('.tab-prev').on('click', function (e) {
\t\t\t    e.preventDefault();

\t\t\t    var prevItem = tabCurrentItem.prev();

\t\t\t    tabCurrentItem.removeClass('active');

\t\t\t    if (prevItem.length) {
\t\t\t      tabCurrentItem = prevItem.addClass('active');
\t\t\t    } else {
\t\t\t      tabCurrentItem = tabItems.last().addClass('active');
\t\t\t    }

\t\t\t    changePos();
\t\t\t    changeTab();
\t\t\t  });
\t  \t});
\t}
\t});


\t/*--------------------------------------------------*/
\t/*  Keywords
\t/*--------------------------------------------------*/
\t\$(\".keywords-container\").each(function() {

\t\tvar keywordInput = \$(this).find(\".keyword-input\");
\t\tvar keywordsList = \$(this).find(\".keywords-list\");

\t\t// adding keyword
\t\tfunction addKeyword() {
\t\t\tvar \$newKeyword = \$(\"<span class='keyword'><span class='keyword-remove'></span><span class='keyword-text'>\"+ keywordInput.val() +\"</span></span>\");
\t\t\tkeywordsList.append(\$newKeyword).trigger('resizeContainer');
\t\t\tkeywordInput.val(\"\");
\t\t}

\t\t// add via enter key
\t\tkeywordInput.on('keyup', function(e){
\t\t\tif((e.keyCode == 13) && (keywordInput.val()!==\"\")){
\t\t\t\taddKeyword();
\t\t\t}
\t\t});

\t\t// add via button
\t\t\$('.keyword-input-button').on('click', function(){ 
\t\t\tif((keywordInput.val()!==\"\")){
\t\t\t\taddKeyword();
\t\t\t}
\t\t});

\t\t// removing keyword
\t\t\$(document).on(\"click\",\".keyword-remove\", function(){
\t\t\t\$(this).parent().addClass('keyword-removed');

\t\t\tfunction removeFromMarkup(){
\t\t\t  \$(\".keyword-removed\").remove();
\t\t\t}
\t\t\tsetTimeout(removeFromMarkup, 500);
\t\t\tkeywordsList.css({'height':'auto'}).height();
\t\t});


\t\t// animating container height
\t\tkeywordsList.on('resizeContainer', function(){
\t\t    var heightnow = \$(this).height();
\t\t    var heightfull = \$(this).css({'max-height':'auto', 'height':'auto'}).height();

\t\t\t\$(this).css({ 'height' : heightnow }).animate({ 'height': heightfull }, 200);
\t\t});

\t\t\$(window).on('resize', function() {
\t\t\tkeywordsList.css({'height':'auto'}).height();
\t\t});

\t\t// Auto Height for keywords that are pre-added
\t\t\$(window).on('load', function() {
\t\t\tvar keywordCount = \$('.keywords-list').children(\"span\").length;

\t\t\t// Enables scrollbar if more than 3 items
\t\t\tif (keywordCount > 0) {
\t\t\t\tkeywordsList.css({'height':'auto'}).height();
\t\t
\t\t\t} 
\t\t});

\t});


\t/*--------------------------------------------------*/
\t/*  Bootstrap Range Slider
\t/*--------------------------------------------------*/

\t// Thousand Separator
\tfunction ThousandSeparator(nStr) {
\t    nStr += '';
\t    var x = nStr.split('.');
\t    var x1 = x[0];
\t    var x2 = x.length > 1 ? '.' + x[1] : '';
\t    var rgx = /(\\d+)(\\d{3})/;
\t    while (rgx.test(x1)) {
\t        x1 = x1.replace(rgx, '\$1' + ',' + '\$2');
\t    }
\t    return x1 + x2;
\t}

\t// Bidding Slider Average Value
\tvar avgValue = (parseInt(\$('.bidding-slider').attr(\"data-slider-min\")) + parseInt(\$('.bidding-slider').attr(\"data-slider-max\")))/2;
\tif (\$('.bidding-slider').data(\"slider-value\") === 'auto') {
\t\t\$('.bidding-slider').attr({'data-slider-value': avgValue});
\t}

\t// Bidding Slider Init
\t\$('.bidding-slider').slider();

\t\$(\".bidding-slider\").on(\"slide\", function(slideEvt) {
\t\t\$(\"#biddingVal\").text(ThousandSeparator(parseInt(slideEvt.value)));
\t});
\t\$(\"#biddingVal\").text(ThousandSeparator(parseInt(\$('.bidding-slider').val())));


\t// Default Bootstrap Range Slider
\tvar currencyAttr = \$(\".range-slider\").attr('data-slider-currency');
\t
\t\$(\".range-slider\").slider({
\t\tformatter: function(value) {
\t\t\treturn currencyAttr + ThousandSeparator(parseInt(value[0])) + \" - \" + currencyAttr + ThousandSeparator(parseInt(value[1]));
\t\t}
\t});
\t
\t\$(\".range-slider-single\").slider();


\t/*----------------------------------------------------*/
\t/*  Payment Accordion
\t/*----------------------------------------------------*/
    var radios = document.querySelectorAll('.payment-tab-trigger > input');
 
    for (var i = 0; i < radios.length; i++) {
        radios[i].addEventListener('change', expandAccordion);
    }
 
    function expandAccordion (event) {
      /* jshint validthis: true */
      var tabber = this.closest('.payment');
      var allTabs = tabber.querySelectorAll('.payment-tab');
      for (var i = 0; i < allTabs.length; i++) {
        allTabs[i].classList.remove('payment-tab-active');
      }
      event.target.parentNode.parentNode.classList.add('payment-tab-active');
    }

\t\$('.billing-cycle-radios').on(\"click\", function() {
\t\tif(\$('.billed-yearly-radio input').is(':checked')) { \$('.pricing-plans-container').addClass('billed-yearly'); }
\t\tif(\$('.billed-monthly-radio input').is(':checked')) { \$('.pricing-plans-container').removeClass('billed-yearly'); }
\t});


\t/*--------------------------------------------------*/
\t/*  Quantity Buttons
\t/*--------------------------------------------------*/
\tfunction qtySum(){
\t    var arr = document.getElementsByName('qtyInput');
\t    var tot=0;
\t    for(var i=0;i<arr.length;i++){
\t        if(parseInt(arr[i].value))
\t            tot += parseInt(arr[i].value);
\t    }
\t} 
\tqtySum();

   \$(\".qtyDec, .qtyInc\").on(\"click\", function() {

      var \$button = \$(this);
      var oldValue = \$button.parent().find(\"input\").val();

      if (\$button.hasClass('qtyInc')) {
          \$button.parent().find(\"input\").val(parseFloat(oldValue) + 1);
      } else {
         if (oldValue > 1) {
            \$button.parent().find(\"input\").val(parseFloat(oldValue) - 1);
         } else {
            \$button.parent().find(\"input\").val(1);
         }
      }

      qtySum();
      \$(\".qtyTotal\").addClass(\"rotate-x\");

   });


\t/*----------------------------------------------------*/
\t/*  Inline CSS replacement for backgrounds
\t/*----------------------------------------------------*/
\tfunction inlineBG() {

\t\t// Common Inline CSS
\t\t\$(\".single-page-header, .intro-banner\").each(function() {
\t\t\tvar attrImageBG = \$(this).attr('data-background-image');

\t        if(attrImageBG !== undefined) {
\t        \t\$(this).append('<div class=\"background-image-container\"></div>');
\t            \$('.background-image-container').css('background-image', 'url('+attrImageBG+')');
\t        }
\t\t});

\t} inlineBG();

\t// Fix for intro banner with label
\t\$(\".intro-search-field\").each(function() {
\t\tvar bannerLabel = \$(this).children(\"label\").length;
\t\tif ( bannerLabel > 0 ){
\t\t    \$(this).addClass(\"with-label\");
\t\t}
\t});

\t// Photo Boxes
\t\$(\".photo-box, .photo-section, .video-container\").each(function() {
\t\tvar photoBox = \$(this);
\t\tvar photoBoxBG = \$(this).attr('data-background-image');

        if(photoBox !== undefined) {
            \$(this).css('background-image', 'url('+photoBoxBG+')');
        }
\t});


\t/*----------------------------------------------------*/
\t/*  Share URL and Buttons
\t/*----------------------------------------------------*/
  /* global ClipboardJS */
\t\$('.copy-url input').val(window.location.href);
\tnew ClipboardJS('.copy-url-button');

\t\$(\".share-buttons-icons a\").each(function() {
\t\tvar buttonBG = \$(this).attr(\"data-button-color\");
        if(buttonBG !== undefined) {
        \t\$(this).css('background-color',buttonBG);
        }
\t});


\t/*----------------------------------------------------*/
\t/*  Tabs
\t/*----------------------------------------------------*/
\tvar \$tabsNav    = \$('.popup-tabs-nav'),
\t\$tabsNavLis = \$tabsNav.children('li');

\t\$tabsNav.each(function() {
\t\t var \$this = \$(this);

\t\t \$this.next().children('.popup-tab-content').stop(true,true).hide().first().show();
\t\t \$this.children('li').first().addClass('active').stop(true,true).show();
\t});

\t\$tabsNavLis.on('click', function(e) {
\t\t var \$this = \$(this);

\t\t \$this.siblings().removeClass('active').end().addClass('active');

\t\t \$this.parent().next().children('.popup-tab-content').stop(true,true).hide()
\t\t .siblings( \$this.find('a').attr('href') ).fadeIn();

\t\t e.preventDefault();
\t});

\tvar hash = window.location.hash;
\tvar anchor = \$('.tabs-nav a[href=\"' + hash + '\"]');
\tif (anchor.length === 0) {
\t\t \$(\".popup-tabs-nav li:first\").addClass(\"active\").show(); //Activate first tab
\t\t \$(\".popup-tab-content:first\").show(); //Show first tab content
\t} else {
\t\t anchor.parent('li').click();
\t}

\t// Link to Register Tab
\t\$('.register-tab').on('click', function(event) {
\t\tevent.preventDefault();
\t\t\$(\".popup-tab-content\").hide();
\t\t\$(\"#register.popup-tab-content\").show();
\t\t\$(\"body\").find('.popup-tabs-nav a[href=\"#register\"]').parent(\"li\").click();
\t});

\t// Disable tabs if there's only one tab
\t\$('.popup-tabs-nav').each(function() {
\t\tvar listCount = \$(this).find(\"li\").length;
\t\tif ( listCount < 2 ) {
\t\t\t\$(this).css({
\t\t\t\t'pointer-events': 'none'
\t\t\t});
\t\t}
\t});


  \t/*----------------------------------------------------*/
    /*  Indicator Bar
    /*----------------------------------------------------*/
\t\$('.indicator-bar').each(function() {
\t\tvar indicatorLenght = \$(this).attr('data-indicator-percentage');
\t\t\$(this).find(\"span\").css({
\t\t\twidth: indicatorLenght + \"%\"
\t\t});
\t});


    /*----------------------------------------------------*/
    /*  Custom Upload Button
    /*----------------------------------------------------*/

\tvar uploadButton = {
\t\t\$button    : \$('.uploadButton-input'),
\t\t\$nameField : \$('.uploadButton-file-name')
\t};

\tuploadButton.\$button.on('change',function() {
\t\t_populateFileField(\$(this));
\t});

\tfunction _populateFileField(\$button) {
\t\tvar selectedFile = [];
\t    for (var i = 0; i < \$button.get(0).files.length; ++i) {
\t        selectedFile.push(\$button.get(0).files[i].name +'<br>');
\t    }
\t    uploadButton.\$nameField.html(selectedFile);
\t}


  \t/*----------------------------------------------------*/
    /*  Slick Carousel
    /*----------------------------------------------------*/
\t\$('.default-slick-carousel').slick({
\t\tinfinite: false,
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tdots: false,
\t\tarrows: true,
\t\tadaptiveHeight: true,
\t\tresponsive: [
\t\t    {
\t\t      breakpoint: 1292,
\t\t      settings: {
\t\t        dots: true,
\t\t    \tarrows: false
\t\t      }
\t\t    },
\t\t    {
\t\t      breakpoint: 993,
\t\t      settings: {
\t\t        slidesToShow: 2,
\t\t        slidesToScroll: 2,
\t\t        dots: true,
\t\t    \tarrows: false
\t\t      }
\t\t    },
\t\t    {
\t\t      breakpoint: 769,
\t\t      settings: {
\t\t        slidesToShow: 1,
\t\t        slidesToScroll: 1,
\t\t        dots: true,
\t\t   \t\tarrows: false
\t\t      }
\t\t    }
\t  ]
\t});


\t\$('.testimonial-carousel').slick({
\t  centerMode: true,
\t  centerPadding: '30%',
\t  slidesToShow: 1,
\t  dots: false,
\t  arrows: true,
\t  adaptiveHeight: true,
\t  responsive: [
\t\t{
\t\t  breakpoint: 1600,
\t\t  settings: {
\t\t\t  centerPadding: '21%',
\t\t\t  slidesToShow: 1,
\t\t  }
\t\t},
\t\t{
\t\t  breakpoint: 993,
\t\t  settings: {
\t\t    centerPadding: '15%',
\t\t    slidesToShow: 1,
\t\t  }
\t\t},
\t\t{
\t\t  breakpoint: 769,
\t\t  settings: {
\t\t    centerPadding: '5%',
\t\t    dots: true,
\t\t    arrows: false
\t\t  }
\t\t}
\t  ]
\t});


\t\$('.logo-carousel').slick({
\t\tinfinite: true,
\t\tslidesToShow: 5,
\t\tslidesToScroll: 1,
\t\tdots: false,
\t\tarrows: true,
\t\tresponsive: [
\t\t\t{
\t\t\t  breakpoint: 1365,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 5,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t  breakpoint: 992,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 3,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t  breakpoint: 768,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 1,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t}
\t\t]
\t});

\t\$('.blog-carousel').slick({
\t\tinfinite: false,
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tdots: false,
\t\tarrows: true,
\t\tresponsive: [
\t\t\t{
\t\t\t  breakpoint: 1365,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 3,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t  breakpoint: 992,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 2,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t  breakpoint: 768,
\t\t\t  settings: {
\t\t\t\tslidesToShow: 1,
\t\t\t\tdots: true,
\t\t\t\tarrows: false
\t\t\t  }
\t\t\t}
\t\t]
\t});

  \t/*----------------------------------------------------*/
    /*  Magnific Popup
    /*----------------------------------------------------*/
\t\$('.mfp-gallery-container').each(function() { // the containers for all your galleries

\t\t\$(this).magnificPopup({
\t\t\t type: 'image',
\t\t\t delegate: 'a.mfp-gallery',

\t\t\t fixedContentPos: true,
\t\t\t fixedBgPos: true,

\t\t\t overflowY: 'auto',

\t\t\t closeBtnInside: false,
\t\t\t preloader: true,

\t\t\t removalDelay: 0,
\t\t\t mainClass: 'mfp-fade',

\t\t\t gallery:{enabled:true, tCounter: ''}
\t\t});
\t});

\t\$('.popup-with-zoom-anim').magnificPopup({
\t\t type: 'inline',

\t\t fixedContentPos: false,
\t\t fixedBgPos: true,

\t\t overflowY: 'auto',

\t\t closeBtnInside: true,
\t\t preloader: false,

\t\t midClick: true,
\t\t removalDelay: 300,
\t\t mainClass: 'my-mfp-zoom-in'
\t});

\t\$('.mfp-image').magnificPopup({
\t\t type: 'image',
\t\t closeOnContentClick: true,
\t\t mainClass: 'mfp-fade',
\t\t image: {
\t\t\t  verticalFit: true
\t\t }
\t});

\t\$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
\t\t disableOn: 700,
\t\t type: 'iframe',
\t\t mainClass: 'mfp-fade',
\t\t removalDelay: 160,
\t\t preloader: false,

\t\t fixedContentPos: false
\t});



// ------------------ End Document ------------------ //
});

})(this.jQuery);

", "@Publication/Front/js/custom.js", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\js\\custom.js");
    }
}
