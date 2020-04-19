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

/* @Publication/Front/sass/vendor/_popups.scss */
class __TwigTemplate_28c2c4f42ffdcee934d3e25c39809b0d536ec727e0c184dc30550357c7aafb98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_popups.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_popups.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Magnific Popup
------------------------------------- */

.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2000;
  overflow: hidden;
  position: fixed;
  background: #111;
}

.mfp-wrap {
  top: -10px;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2001;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden;
}

.mfp-container {
  height: 100%;
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 18px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  &:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
  }
}

.mfp-align-top .mfp-container:before {
  display: none;
}

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 505;
}

.mfp-inline-holder .mfp-content, .mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto;
}

.mfp-ajax-cur {
  cursor: progress;
}

.mfp-zoom-out-cur {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out;
  .mfp-image-holder .mfp-close {
    cursor: -moz-zoom-out;
    cursor: -webkit-zoom-out;
    cursor: zoom-out;
  }
}

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in;
}

.mfp-auto-cursor .mfp-content {
  cursor: auto;
}

.mfp-close, .mfp-arrow, .mfp-preloader, .mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.mfp-loading.mfp-figure {
  display: none;
}

.mfp-hide {
  display: none !important;
}

.mfp-preloader {
  color: #aaa;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 504;
  a {
    color: #cccccc;
    &:hover {
      color: #fff;
    }
  }
}

.mfp-s-ready .mfp-preloader, .mfp-s-error .mfp-content, .mfp-s-loading .mfp-arrow {
  display: none;
}

button {
  &.mfp-close, &.mfp-arrow {
    overflow: visible;
    cursor: pointer;
    border: 0;
    -webkit-appearance: none;
    display: block;
    padding: 0;
    z-index: 506;
  }
}

.mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close {
  right: 0px;
  top: -40px;
}

/* Close Button */

.og-close, button.mfp-close {
  position: absolute;
  width: 45px;
  height: 45px;
  top: -20px;
  display: block;
  right: -12px;
  cursor: pointer !important;
  z-index: 9999;
  color: #fff;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-radius: 50%;
  margin: 0px;
  background-color: transparent;
  outline: none;
  transform: translate3d(0, 0, 0);
}

.mfp-iframe-holder .mfp-close {
  top: -50px;
  right: -12px;
  transform: translate3d(0, 0, 0);
}

.mfp-gallery {
  .mfp-close {
    top: 20px;
    right: 10px;
  }
  .mfp-content .mfp-close {
    display: none;
  }
}

.mfp-close {
  &::after, &::before {
    top: 0px;
  }
}

.og-close {
  margin: 17px;
  right: 10px;
  background: transparent;
  color: #222;
  &:before {
    font-family: \"Feather-Icons\";
    font-size: 20px;
    top: 2px;
    left: 0;
    position: relative;
    height: 10px;
  }
}

.mfp-close:before {
  font-family: \"Feather-Icons\";
  font-size: 20px;
  top: 2px;
  left: 0;
  position: relative;
  height: 10px;
}

.og-close:before, .mfp-close:before {
  content: \"\\ea02\";
}

#small-dialog .mfp-close, #small-dialog-1 .mfp-close, #small-dialog-2 .mfp-close, #small-dialog-3 .mfp-close, #small-dialog-4 .mfp-close, #sign-in-dialog {
  color: #fff;
}

.mfp-close {
  color: #fff;
  &:hover {
    color: #fff;
  }
}

/* Popup close button*/

#sign-in-dialog .mfp-close, #small-dialog-1 .mfp-close, #small-dialog-2 .mfp-close, #small-dialog-3 .mfp-close, #small-dialog-4 .mfp-close, #small-dialog .mfp-close {
  color: \$body-font-color;
  background-color: #e4e4e4;
  border-radius: \$global-border-radius;
  top: 28px;
  right: 40px;
  width: 40px;
  height: 40px;
}

#sign-in-dialog .mfp-close:hover, #small-dialog-1 .mfp-close:hover, #small-dialog-2 .mfp-close:hover, #small-dialog-3 .mfp-close:hover, #small-dialog-4 .mfp-close:hover, #small-dialog .mfp-close:hover {
  color: #fff;
  background-color: \$primary-color;
}

.small-dialog-content {
  input[type=submit] {
    width: 100%;
    margin-top: 26px;
    margin-bottom: 10px;
  }
  .divider {
    display: inline-block;
    width: 100%;
    margin-top: 15px;
    padding-bottom: 0;
  }
}

.small-dialog-header {
  font-size: 22px;
  width: calc(100% + 80px);
  position: relative;
  left: -40px;
  top: 0;
  border-radius: \$global-border-radius \$global-border-radius 0 0;
  display: inline-block;
  background-color: #f6f6f6;
  padding: 35px 40px;
  margin-bottom: 40px;
  h3 {
    padding: 0;
    margin: 0;
    font-size: 23px;
  }
}

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #aaa;
  font-size: 13px;
  line-height: 18px;
}

.mfp-arrow {
  opacity: 1;
  margin: 0 20px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 9999;
  color: #fff;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  width: 60px;
  height: 60px;
  position: absolute;
  display: block;
  z-index: 100;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 50%;
  outline: none;
  &:hover {
    background: \$primary-color;
    color: #fff;
  }
  &.mfp-arrow-left {
    font-family: \"simple-line-icons\";
    font-size: 20px;
  }
  &.mfp-arrow-right {
    font-family: \"simple-line-icons\";
    font-size: 20px;
    right: 15px;
  }
  &.mfp-arrow-left:before {
    content: \"\\e605\";
    left: -1px;
    top: 0px;
    position: relative;
  }
  &.mfp-arrow-right:before {
    content: \"\\e606\";
    left: 1px;
    top: 0px;
    position: relative;
  }
}

.mfp-content:hover .mfp-arrow {
  opacity: 1;
}

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px;
  .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 1180px;
  }
}

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 54%;
  iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: black;
  }
}

/* Popup */

#sign-in-dialog, #small-dialog-1, #small-dialog-2, #small-dialog-3, #small-dialog-4, #small-dialog {
  background: #fff;
  padding: 40px;
  padding-top: 0;
  text-align: left;
  max-width: 610px;
  margin: 40px auto;
  position: relative;
  box-sizing: border-box;
  border-radius: \$global-border-radius;
  max-width: 550px;
}

#sign-in-dialog-1 span.line, #sign-in-dialog-2 span.line, #sign-in-dialog-3 span.line, #sign-in-dialog-4 span.line, #sign-in-dialog span.line, #small-dialog span.line {
  padding-top: 0;
}


/* Animating */
.my-mfp-zoom-in {
  .zoom-anim-dialog {
    opacity: 0;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
  }
  /* In */
  &.mfp-ready .zoom-anim-dialog {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }
  /* Out */
  &.mfp-removing .zoom-anim-dialog {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
    opacity: 0;
  }
  &.mfp-bg {
    opacity: 0.001;
    /* Chrome opacity transition bug */
    -webkit-transition: opacity 0.3s ease-out;
    -moz-transition: opacity 0.3s ease-out;
    -o-transition: opacity 0.3s ease-out;
    transition: opacity 0.3s ease-out;
  }
  &.mfp-ready.mfp-bg {
    opacity: 0.85;
  }
  &.mfp-removing.mfp-bg {
    opacity: 0;
  }
}


/* Main image in popup */

img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 40px auto;
  border-radius: \$global-border-radius;
}

/* The shadow behind the image */

.mfp-figure {
  &:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 18px rgba(11, 11, 11, 0.6);
  }
  line-height: 0;
}

.mfp-bottom-bar {
  margin-top: -30px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto;
}

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #f3f3f3;
  word-break: break-word;
  padding-right: 36px;
}

.mfp-figure small {
  color: #bdbdbd;
  display: block;
  font-size: 12px;
  line-height: 14px;
}

.mfp-image-holder .mfp-content {
  max-width: 100%;
}

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer;
}

/* Media Queries for Magnific Popup */
@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  .mfp-img-mobile {
    .mfp-image-holder {
      padding-left: 0;
      padding-right: 0;
    }
    img.mfp-img {
      padding: 0;
    }
    .mfp-figure:after {
      top: 0;
      bottom: 0;
    }
    .mfp-bottom-bar {
      background: rgba(0, 0, 0, 0.6);
      bottom: 0;
      margin: 0;
      top: auto;
      padding: 3px 5px;
      position: fixed;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      &:empty {
        padding: 0;
      }
    }
    .mfp-counter {
      right: 5px;
      top: 3px;
    }
    .mfp-close {
      top: 0;
      right: 0;
      width: 35px;
      height: 35px;
      line-height: 35px;
      background: rgba(0, 0, 0, 0.6);
      position: fixed;
      text-align: center;
      padding: 0;
    }
    .mfp-figure small {
      display: inline;
      margin-left: 5px;
    }
  }
  /* The shadow behind the image */
}

.mfp-ie7 {
  .mfp-img {
    padding: 0;
  }
  .mfp-bottom-bar {
    width: 600px;
    left: 50%;
    margin-left: -300px;
    margin-top: 5px;
    padding-bottom: 5px;
  }
  .mfp-container {
    padding: 0;
  }
  .mfp-content {
    padding-top: 44px;
  }
  .mfp-close {
    top: 0;
    right: 0;
    padding-top: 0;
  }
}

.mfp-fade {
  &.mfp-bg {
    opacity: 0;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
    &.mfp-ready {
      opacity: 0.92;
      background-color: #111;
    }
    &.mfp-removing {
      opacity: 0;
    }
  }
  &.mfp-wrap {
    .mfp-content {
      opacity: 0;
      -webkit-transition: all 0.2s ease-out;
      -moz-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;
    }
    &.mfp-ready .mfp-content {
      opacity: 1;
    }
    &.mfp-removing .mfp-content {
      opacity: 0;
    }
  }
}

/* Feedback Yes No */

.feedback-yes-no {
  strong {
    font-size: \$body-font-size;
    font-weight: 600;
    color: \$body-heading-color;
    display: block;
  }
  .radio {
    margin-right: 15px;
  }
  margin-bottom: 15px;
  .leave-rating {
    transform: scale(1.1);
    margin: 3px 0 10px 3px;
  }
}

/* ---------------------------------- */
/* Popup tabs
------------------------------------- */

.popup-tabs-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  width: 100%;
  display: block;
  height: 62px;
  background: #f8f8f8;
  border-radius: \$global-border-radius \$global-border-radius 0 0;
  border-bottom: 1px solid #e0e0e0;
  li {
    float: left;
    line-height: 62px;
    height: 62px;
    padding: 0;
    margin-right: 0;
    position: relative;
    &:first-child a {
      border-radius: 4px 0 0 0;
    }
    a {
      -webkit-transition: all 0.25s ease-in-out;
      transition: all 0.25s ease-in-out;
    }
  }
}

.popup-tab-reviews {
  -webkit-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
}

.popup-tabs-nav li {
  a {
    border: none;
    color: #777;
    display: inline-block;
    outline: none;
    padding: 0;
    text-decoration: none;
    font-size: \$body-font-size;
    z-index: 10;
    position: relative;
    height: 100%;
    padding: 0 30px;
    border-right: 1px solid transparent;
    border-left: 1px solid transparent;
    transition: all 0.3s, font-weight 0s;
    border-right: 1px solid #e0e0e0;
  }
  &.active {
    background-color: #fff;
    position: relative;
  }
  a:hover {
    background-color: #f3f3f3;
    height: calc(100% - 1px);
    color: \$body-heading-color;
  }
  &:last-child a:hover {
    border-right: 1px solid #e0e0e0;
  }
  &.active {
    a {
      &:hover {
        background-color: #fff;
      }
      color: \$primary-color;
      font-weight: 600;
    }
    background-color: #fff;
    &:after {
      content: \"\";
      position: absolute;
      display: block;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 1px;
      background-color: #fff;
      z-index: 111;
    }
  }
  &:first-child.active {
    border-left: none;
    border-radius: 4px 0 0 0;
  }
}

.popup-tab-content {
  padding: 50px 35px;
  position: relative;
  z-index: 10;
  display: inline-block;
  width: 100%;
}

.popup-tabs-container {
  overflow: hidden;
  width: 100%;
}

.popup-tab-content p:last-child {
  margin-bottom: 0;
}

.dialog-with-tabs {
  &#sign-in-dialog, &#small-dialog-1, &#small-dialog-2, &#small-dialog-3, &#small-dialog-4, &#small-dialog {
    padding: 0;
    color: \$body-font-color;
    max-width: 540px;
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.25);
  }
}

/* Close Button Adjustments*/

#sign-in-dialog.dialog-with-tabs .mfp-close, #small-dialog.dialog-with-tabs .mfp-close, #small-dialog-1.dialog-with-tabs .mfp-close, #small-dialog-2.dialog-with-tabs .mfp-close, #small-dialog-3.dialog-with-tabs .mfp-close, #small-dialog-4.dialog-with-tabs .mfp-close {
  color: #888;
  background-color: #f8f8f8;
  border-left: 1px solid #e0e0e0;
  border-radius: 0 4px 0 0;
  top: 0;
  right: 0;
  width: 62px;
  height: 61px;
}

#sign-in-dialog.dialog-with-tabs .mfp-close:hover, #small-dialog-1.dialog-with-tabs .mfp-close:hover, #small-dialog-2.dialog-with-tabs .mfp-close:hover, #small-dialog-3.dialog-with-tabs .mfp-close:hover, #small-dialog-4.dialog-with-tabs .mfp-close:hover, #small-dialog.dialog-with-tabs .mfp-close:hover {
  color: \$body-heading-color;
  background-color: #f2f2f2;
}

.dialog-with-tabs {
  .mfp-close:before {
    font-size: 24px;
  }
  /* Chrome autocomplete highlight reset */
  input {
    &:-webkit-autofill, &:focus:-webkit-autofill {
      border: 1px solid #e0e0e0;
      -webkit-box-shadow: inset 0 0 0px 9999px white, 0 1px 4px rgba(0, 0, 0, 0.07);
    }
    margin-bottom: 22px;
  }
  /* Forgot Password Link */
  .forgot-password {
    font-size: 14px;
    color: #888;
    margin-top: -12px;
    display: block;
    &:hover {
      color: \$primary-color;
    }
  }
  /* Submit Button Adjustments */
  .button {
    height: 48px;
    width: 100% !important;
    margin-top: 25px;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
  }
}


/* Welcome Text */
.welcome-text {
  display: block;
  text-align: center;
  color: #808080;
  margin-bottom: 33px;
  h3 {
    display: block;
    font-weight: 700;
    color: \$body-heading-color;
    font-size: 24px;
  }
  span {
    a {
      font-weight: 500;
    }
    display: block;
    margin-top: 4px;
  }
}

/* Social Login Separator */

.social-login-separator {
  width: 100%;
  display: block;
  text-align: center;
  position: relative;
  width: 100%;
  margin: 38px 0 15px 0;
  height: 1px;
  &:before {
    width: 100%;
    content: \"\";
    height: 1px;
    display: block;
    background-color: #e0e0e0;
    position: absolute;
    top: 0;
  }
  span {
    background-color: #fff;
    top: 0;
    position: absolute;
    line-height: 10px;
    top: -5px;
    margin-left: -15px;
    padding: 0px 10px;
    color: #808080;
  }
}

/* Social Login Buttons */

.social-login-buttons {
  display: flex;
  width: calc(100% + 20px);
  button {
    flex: 1;
    text-align: center;
    border: 1px solid #333;
    color: \$body-heading-color;
    border-radius: \$global-border-radius;
    margin-top: 10px;
    margin-right: 20px;
    font-size: 14px;
    padding: 9px 5px;
    max-width: 50%;
    transition: 0.3s;
    &:hover {
      background-color: #333;
      color: #fff;
    }
    i {
      position: relative;
      top: 1px;
      margin-right: 7px;
      font-size: 15px;
    }
  }
  .facebook-login {
    border-color: #3b5998;
    color: #3b5998;
    &:hover {
      background-color: #3b5998;
      color: #fff;
    }
  }
  .google-login {
    border-color: #dd4b39;
    color: #dd4b39;
    &:hover {
      background-color: #dd4b39;
      color: #fff;
    }
  }
}

@media (max-width: 768px) {
  .social-login-separator {
    margin-bottom: 25px;
  }
  .social-login-buttons {
    width: 100%;
    display: block;
    max-width: 100%;
    a {
      width: 100%;
      display: block;
      max-width: 100%;
    }
  }
}

/* Account Type */

.account-type {
  display: flex;
  width: calc(100% + 20px);
  margin: 0 0 20px 0;
  div {
    flex: 1;
    margin-right: 20px;
  }
  label {
    border-radius: 3px;
    border: none;
    background-color: #f2f2f2;
    width: 100%;
  }
  input.account-type-radio:empty {
    display: none;
  }
  label i {
    position: relative;
    font-size: 18px;
    top: 2px;
    margin-right: 2px;
  }
  input.account-type-radio {
    &:empty ~ label {
      position: relative;
      float: left;
      padding: 10px;
      text-align: center;
      padding-bottom: 11px;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      border-radius: \$global-border-radius;
      color: #888;
      transition: 0.4s;
      height: 48px;
      line-height: 28px;
      overflow: hidden;
    }
    ~ label:hover {
      color: #289c41;
      background-color: #e4f6e9;
    }
    &:checked ~ label {
      color: #fff;
      background-color: #47bb67;
    }
    &:empty ~ label {
      &:after, &:before {
        position: absolute;
        display: block;
        top: 0;
        bottom: 0;
        left: 0;
        content: '';
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 48px;
        border-radius: \$global-border-radius;
        font-size: 22px;
        background: transparent;
        z-index: 100;
        opacity: 0;
      }
    }
  }
  .ripple-effect-dark span.ripple-overlay {
    animation: ripple 1.2s;
    opacity: 0.03;
  }
}

/* hide input */

/* style label */

/* Standard syntax */
@keyframes typeCheck {
  0% {
    opacity: 0;
    transform: translateY(10px);
  }

  50% {
    opacity: 1;
    transform: translateY(0px);
  }

  100% {
    opacity: 0;
    transform: translateY(-10px);
  }
}


@keyframes typeBG {
  0% {
    opacity: 0;
  }

  50% {
    opacity: 1;
  }

  100% {
    opacity: 0;
  }
}


/* Popups Media Queries */
@media (max-width: 480px) {
  .popup-tabs-nav {
    padding-top: 50px;
    height: 50px;
  }
  .mfp-container {
    padding: 0 10px;
  }
  .popup-tabs-nav li {
    &:first-child {
      border-top: 1px solid #e0e0e0;
    }
    border-bottom: 1px solid #e0e0e0;
    width: 100%;
    text-align: center;
    height: 50px;
    line-height: 50px;
    a {
      width: 100%;
      text-align: center;
      height: 50px;
      line-height: 50px;
      &:hover {
        background-color: transparent;
      }
    }
  }
  #sign-in-dialog.dialog-with-tabs .mfp-close, #small-dialog.dialog-with-tabs .mfp-close, #small-dialog-1.dialog-with-tabs .mfp-close, #small-dialog-2.dialog-with-tabs .mfp-close, #small-dialog-3.dialog-with-tabs .mfp-close, #small-dialog-4.dialog-with-tabs .mfp-close {
    height: 50px;
    width: 50px;
  }
  .account-type {
    flex-direction: column;
  }
  .social-login-buttons {
    flex-direction: column;
    button {
      max-width: 100%;
      width: 100%;
      flex: auto;
    }
  }
  .uploadButton {
    flex-direction: column;
    .uploadButton-file-name {
      padding: 0;
      margin: 15px 0 0 0;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/vendor/_popups.scss";
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
        return new Source("
/* ---------------------------------- */
/* Magnific Popup
------------------------------------- */

.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2000;
  overflow: hidden;
  position: fixed;
  background: #111;
}

.mfp-wrap {
  top: -10px;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2001;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden;
}

.mfp-container {
  height: 100%;
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 18px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  &:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
  }
}

.mfp-align-top .mfp-container:before {
  display: none;
}

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 505;
}

.mfp-inline-holder .mfp-content, .mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto;
}

.mfp-ajax-cur {
  cursor: progress;
}

.mfp-zoom-out-cur {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out;
  .mfp-image-holder .mfp-close {
    cursor: -moz-zoom-out;
    cursor: -webkit-zoom-out;
    cursor: zoom-out;
  }
}

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in;
}

.mfp-auto-cursor .mfp-content {
  cursor: auto;
}

.mfp-close, .mfp-arrow, .mfp-preloader, .mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.mfp-loading.mfp-figure {
  display: none;
}

.mfp-hide {
  display: none !important;
}

.mfp-preloader {
  color: #aaa;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 504;
  a {
    color: #cccccc;
    &:hover {
      color: #fff;
    }
  }
}

.mfp-s-ready .mfp-preloader, .mfp-s-error .mfp-content, .mfp-s-loading .mfp-arrow {
  display: none;
}

button {
  &.mfp-close, &.mfp-arrow {
    overflow: visible;
    cursor: pointer;
    border: 0;
    -webkit-appearance: none;
    display: block;
    padding: 0;
    z-index: 506;
  }
}

.mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close {
  right: 0px;
  top: -40px;
}

/* Close Button */

.og-close, button.mfp-close {
  position: absolute;
  width: 45px;
  height: 45px;
  top: -20px;
  display: block;
  right: -12px;
  cursor: pointer !important;
  z-index: 9999;
  color: #fff;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-radius: 50%;
  margin: 0px;
  background-color: transparent;
  outline: none;
  transform: translate3d(0, 0, 0);
}

.mfp-iframe-holder .mfp-close {
  top: -50px;
  right: -12px;
  transform: translate3d(0, 0, 0);
}

.mfp-gallery {
  .mfp-close {
    top: 20px;
    right: 10px;
  }
  .mfp-content .mfp-close {
    display: none;
  }
}

.mfp-close {
  &::after, &::before {
    top: 0px;
  }
}

.og-close {
  margin: 17px;
  right: 10px;
  background: transparent;
  color: #222;
  &:before {
    font-family: \"Feather-Icons\";
    font-size: 20px;
    top: 2px;
    left: 0;
    position: relative;
    height: 10px;
  }
}

.mfp-close:before {
  font-family: \"Feather-Icons\";
  font-size: 20px;
  top: 2px;
  left: 0;
  position: relative;
  height: 10px;
}

.og-close:before, .mfp-close:before {
  content: \"\\ea02\";
}

#small-dialog .mfp-close, #small-dialog-1 .mfp-close, #small-dialog-2 .mfp-close, #small-dialog-3 .mfp-close, #small-dialog-4 .mfp-close, #sign-in-dialog {
  color: #fff;
}

.mfp-close {
  color: #fff;
  &:hover {
    color: #fff;
  }
}

/* Popup close button*/

#sign-in-dialog .mfp-close, #small-dialog-1 .mfp-close, #small-dialog-2 .mfp-close, #small-dialog-3 .mfp-close, #small-dialog-4 .mfp-close, #small-dialog .mfp-close {
  color: \$body-font-color;
  background-color: #e4e4e4;
  border-radius: \$global-border-radius;
  top: 28px;
  right: 40px;
  width: 40px;
  height: 40px;
}

#sign-in-dialog .mfp-close:hover, #small-dialog-1 .mfp-close:hover, #small-dialog-2 .mfp-close:hover, #small-dialog-3 .mfp-close:hover, #small-dialog-4 .mfp-close:hover, #small-dialog .mfp-close:hover {
  color: #fff;
  background-color: \$primary-color;
}

.small-dialog-content {
  input[type=submit] {
    width: 100%;
    margin-top: 26px;
    margin-bottom: 10px;
  }
  .divider {
    display: inline-block;
    width: 100%;
    margin-top: 15px;
    padding-bottom: 0;
  }
}

.small-dialog-header {
  font-size: 22px;
  width: calc(100% + 80px);
  position: relative;
  left: -40px;
  top: 0;
  border-radius: \$global-border-radius \$global-border-radius 0 0;
  display: inline-block;
  background-color: #f6f6f6;
  padding: 35px 40px;
  margin-bottom: 40px;
  h3 {
    padding: 0;
    margin: 0;
    font-size: 23px;
  }
}

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #aaa;
  font-size: 13px;
  line-height: 18px;
}

.mfp-arrow {
  opacity: 1;
  margin: 0 20px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 9999;
  color: #fff;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  width: 60px;
  height: 60px;
  position: absolute;
  display: block;
  z-index: 100;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 50%;
  outline: none;
  &:hover {
    background: \$primary-color;
    color: #fff;
  }
  &.mfp-arrow-left {
    font-family: \"simple-line-icons\";
    font-size: 20px;
  }
  &.mfp-arrow-right {
    font-family: \"simple-line-icons\";
    font-size: 20px;
    right: 15px;
  }
  &.mfp-arrow-left:before {
    content: \"\\e605\";
    left: -1px;
    top: 0px;
    position: relative;
  }
  &.mfp-arrow-right:before {
    content: \"\\e606\";
    left: 1px;
    top: 0px;
    position: relative;
  }
}

.mfp-content:hover .mfp-arrow {
  opacity: 1;
}

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px;
  .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 1180px;
  }
}

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 54%;
  iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: black;
  }
}

/* Popup */

#sign-in-dialog, #small-dialog-1, #small-dialog-2, #small-dialog-3, #small-dialog-4, #small-dialog {
  background: #fff;
  padding: 40px;
  padding-top: 0;
  text-align: left;
  max-width: 610px;
  margin: 40px auto;
  position: relative;
  box-sizing: border-box;
  border-radius: \$global-border-radius;
  max-width: 550px;
}

#sign-in-dialog-1 span.line, #sign-in-dialog-2 span.line, #sign-in-dialog-3 span.line, #sign-in-dialog-4 span.line, #sign-in-dialog span.line, #small-dialog span.line {
  padding-top: 0;
}


/* Animating */
.my-mfp-zoom-in {
  .zoom-anim-dialog {
    opacity: 0;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
  }
  /* In */
  &.mfp-ready .zoom-anim-dialog {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }
  /* Out */
  &.mfp-removing .zoom-anim-dialog {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
    opacity: 0;
  }
  &.mfp-bg {
    opacity: 0.001;
    /* Chrome opacity transition bug */
    -webkit-transition: opacity 0.3s ease-out;
    -moz-transition: opacity 0.3s ease-out;
    -o-transition: opacity 0.3s ease-out;
    transition: opacity 0.3s ease-out;
  }
  &.mfp-ready.mfp-bg {
    opacity: 0.85;
  }
  &.mfp-removing.mfp-bg {
    opacity: 0;
  }
}


/* Main image in popup */

img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 40px auto;
  border-radius: \$global-border-radius;
}

/* The shadow behind the image */

.mfp-figure {
  &:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 18px rgba(11, 11, 11, 0.6);
  }
  line-height: 0;
}

.mfp-bottom-bar {
  margin-top: -30px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto;
}

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #f3f3f3;
  word-break: break-word;
  padding-right: 36px;
}

.mfp-figure small {
  color: #bdbdbd;
  display: block;
  font-size: 12px;
  line-height: 14px;
}

.mfp-image-holder .mfp-content {
  max-width: 100%;
}

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer;
}

/* Media Queries for Magnific Popup */
@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  .mfp-img-mobile {
    .mfp-image-holder {
      padding-left: 0;
      padding-right: 0;
    }
    img.mfp-img {
      padding: 0;
    }
    .mfp-figure:after {
      top: 0;
      bottom: 0;
    }
    .mfp-bottom-bar {
      background: rgba(0, 0, 0, 0.6);
      bottom: 0;
      margin: 0;
      top: auto;
      padding: 3px 5px;
      position: fixed;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      &:empty {
        padding: 0;
      }
    }
    .mfp-counter {
      right: 5px;
      top: 3px;
    }
    .mfp-close {
      top: 0;
      right: 0;
      width: 35px;
      height: 35px;
      line-height: 35px;
      background: rgba(0, 0, 0, 0.6);
      position: fixed;
      text-align: center;
      padding: 0;
    }
    .mfp-figure small {
      display: inline;
      margin-left: 5px;
    }
  }
  /* The shadow behind the image */
}

.mfp-ie7 {
  .mfp-img {
    padding: 0;
  }
  .mfp-bottom-bar {
    width: 600px;
    left: 50%;
    margin-left: -300px;
    margin-top: 5px;
    padding-bottom: 5px;
  }
  .mfp-container {
    padding: 0;
  }
  .mfp-content {
    padding-top: 44px;
  }
  .mfp-close {
    top: 0;
    right: 0;
    padding-top: 0;
  }
}

.mfp-fade {
  &.mfp-bg {
    opacity: 0;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
    &.mfp-ready {
      opacity: 0.92;
      background-color: #111;
    }
    &.mfp-removing {
      opacity: 0;
    }
  }
  &.mfp-wrap {
    .mfp-content {
      opacity: 0;
      -webkit-transition: all 0.2s ease-out;
      -moz-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;
    }
    &.mfp-ready .mfp-content {
      opacity: 1;
    }
    &.mfp-removing .mfp-content {
      opacity: 0;
    }
  }
}

/* Feedback Yes No */

.feedback-yes-no {
  strong {
    font-size: \$body-font-size;
    font-weight: 600;
    color: \$body-heading-color;
    display: block;
  }
  .radio {
    margin-right: 15px;
  }
  margin-bottom: 15px;
  .leave-rating {
    transform: scale(1.1);
    margin: 3px 0 10px 3px;
  }
}

/* ---------------------------------- */
/* Popup tabs
------------------------------------- */

.popup-tabs-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  width: 100%;
  display: block;
  height: 62px;
  background: #f8f8f8;
  border-radius: \$global-border-radius \$global-border-radius 0 0;
  border-bottom: 1px solid #e0e0e0;
  li {
    float: left;
    line-height: 62px;
    height: 62px;
    padding: 0;
    margin-right: 0;
    position: relative;
    &:first-child a {
      border-radius: 4px 0 0 0;
    }
    a {
      -webkit-transition: all 0.25s ease-in-out;
      transition: all 0.25s ease-in-out;
    }
  }
}

.popup-tab-reviews {
  -webkit-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
}

.popup-tabs-nav li {
  a {
    border: none;
    color: #777;
    display: inline-block;
    outline: none;
    padding: 0;
    text-decoration: none;
    font-size: \$body-font-size;
    z-index: 10;
    position: relative;
    height: 100%;
    padding: 0 30px;
    border-right: 1px solid transparent;
    border-left: 1px solid transparent;
    transition: all 0.3s, font-weight 0s;
    border-right: 1px solid #e0e0e0;
  }
  &.active {
    background-color: #fff;
    position: relative;
  }
  a:hover {
    background-color: #f3f3f3;
    height: calc(100% - 1px);
    color: \$body-heading-color;
  }
  &:last-child a:hover {
    border-right: 1px solid #e0e0e0;
  }
  &.active {
    a {
      &:hover {
        background-color: #fff;
      }
      color: \$primary-color;
      font-weight: 600;
    }
    background-color: #fff;
    &:after {
      content: \"\";
      position: absolute;
      display: block;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 1px;
      background-color: #fff;
      z-index: 111;
    }
  }
  &:first-child.active {
    border-left: none;
    border-radius: 4px 0 0 0;
  }
}

.popup-tab-content {
  padding: 50px 35px;
  position: relative;
  z-index: 10;
  display: inline-block;
  width: 100%;
}

.popup-tabs-container {
  overflow: hidden;
  width: 100%;
}

.popup-tab-content p:last-child {
  margin-bottom: 0;
}

.dialog-with-tabs {
  &#sign-in-dialog, &#small-dialog-1, &#small-dialog-2, &#small-dialog-3, &#small-dialog-4, &#small-dialog {
    padding: 0;
    color: \$body-font-color;
    max-width: 540px;
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.25);
  }
}

/* Close Button Adjustments*/

#sign-in-dialog.dialog-with-tabs .mfp-close, #small-dialog.dialog-with-tabs .mfp-close, #small-dialog-1.dialog-with-tabs .mfp-close, #small-dialog-2.dialog-with-tabs .mfp-close, #small-dialog-3.dialog-with-tabs .mfp-close, #small-dialog-4.dialog-with-tabs .mfp-close {
  color: #888;
  background-color: #f8f8f8;
  border-left: 1px solid #e0e0e0;
  border-radius: 0 4px 0 0;
  top: 0;
  right: 0;
  width: 62px;
  height: 61px;
}

#sign-in-dialog.dialog-with-tabs .mfp-close:hover, #small-dialog-1.dialog-with-tabs .mfp-close:hover, #small-dialog-2.dialog-with-tabs .mfp-close:hover, #small-dialog-3.dialog-with-tabs .mfp-close:hover, #small-dialog-4.dialog-with-tabs .mfp-close:hover, #small-dialog.dialog-with-tabs .mfp-close:hover {
  color: \$body-heading-color;
  background-color: #f2f2f2;
}

.dialog-with-tabs {
  .mfp-close:before {
    font-size: 24px;
  }
  /* Chrome autocomplete highlight reset */
  input {
    &:-webkit-autofill, &:focus:-webkit-autofill {
      border: 1px solid #e0e0e0;
      -webkit-box-shadow: inset 0 0 0px 9999px white, 0 1px 4px rgba(0, 0, 0, 0.07);
    }
    margin-bottom: 22px;
  }
  /* Forgot Password Link */
  .forgot-password {
    font-size: 14px;
    color: #888;
    margin-top: -12px;
    display: block;
    &:hover {
      color: \$primary-color;
    }
  }
  /* Submit Button Adjustments */
  .button {
    height: 48px;
    width: 100% !important;
    margin-top: 25px;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
  }
}


/* Welcome Text */
.welcome-text {
  display: block;
  text-align: center;
  color: #808080;
  margin-bottom: 33px;
  h3 {
    display: block;
    font-weight: 700;
    color: \$body-heading-color;
    font-size: 24px;
  }
  span {
    a {
      font-weight: 500;
    }
    display: block;
    margin-top: 4px;
  }
}

/* Social Login Separator */

.social-login-separator {
  width: 100%;
  display: block;
  text-align: center;
  position: relative;
  width: 100%;
  margin: 38px 0 15px 0;
  height: 1px;
  &:before {
    width: 100%;
    content: \"\";
    height: 1px;
    display: block;
    background-color: #e0e0e0;
    position: absolute;
    top: 0;
  }
  span {
    background-color: #fff;
    top: 0;
    position: absolute;
    line-height: 10px;
    top: -5px;
    margin-left: -15px;
    padding: 0px 10px;
    color: #808080;
  }
}

/* Social Login Buttons */

.social-login-buttons {
  display: flex;
  width: calc(100% + 20px);
  button {
    flex: 1;
    text-align: center;
    border: 1px solid #333;
    color: \$body-heading-color;
    border-radius: \$global-border-radius;
    margin-top: 10px;
    margin-right: 20px;
    font-size: 14px;
    padding: 9px 5px;
    max-width: 50%;
    transition: 0.3s;
    &:hover {
      background-color: #333;
      color: #fff;
    }
    i {
      position: relative;
      top: 1px;
      margin-right: 7px;
      font-size: 15px;
    }
  }
  .facebook-login {
    border-color: #3b5998;
    color: #3b5998;
    &:hover {
      background-color: #3b5998;
      color: #fff;
    }
  }
  .google-login {
    border-color: #dd4b39;
    color: #dd4b39;
    &:hover {
      background-color: #dd4b39;
      color: #fff;
    }
  }
}

@media (max-width: 768px) {
  .social-login-separator {
    margin-bottom: 25px;
  }
  .social-login-buttons {
    width: 100%;
    display: block;
    max-width: 100%;
    a {
      width: 100%;
      display: block;
      max-width: 100%;
    }
  }
}

/* Account Type */

.account-type {
  display: flex;
  width: calc(100% + 20px);
  margin: 0 0 20px 0;
  div {
    flex: 1;
    margin-right: 20px;
  }
  label {
    border-radius: 3px;
    border: none;
    background-color: #f2f2f2;
    width: 100%;
  }
  input.account-type-radio:empty {
    display: none;
  }
  label i {
    position: relative;
    font-size: 18px;
    top: 2px;
    margin-right: 2px;
  }
  input.account-type-radio {
    &:empty ~ label {
      position: relative;
      float: left;
      padding: 10px;
      text-align: center;
      padding-bottom: 11px;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      border-radius: \$global-border-radius;
      color: #888;
      transition: 0.4s;
      height: 48px;
      line-height: 28px;
      overflow: hidden;
    }
    ~ label:hover {
      color: #289c41;
      background-color: #e4f6e9;
    }
    &:checked ~ label {
      color: #fff;
      background-color: #47bb67;
    }
    &:empty ~ label {
      &:after, &:before {
        position: absolute;
        display: block;
        top: 0;
        bottom: 0;
        left: 0;
        content: '';
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 48px;
        border-radius: \$global-border-radius;
        font-size: 22px;
        background: transparent;
        z-index: 100;
        opacity: 0;
      }
    }
  }
  .ripple-effect-dark span.ripple-overlay {
    animation: ripple 1.2s;
    opacity: 0.03;
  }
}

/* hide input */

/* style label */

/* Standard syntax */
@keyframes typeCheck {
  0% {
    opacity: 0;
    transform: translateY(10px);
  }

  50% {
    opacity: 1;
    transform: translateY(0px);
  }

  100% {
    opacity: 0;
    transform: translateY(-10px);
  }
}


@keyframes typeBG {
  0% {
    opacity: 0;
  }

  50% {
    opacity: 1;
  }

  100% {
    opacity: 0;
  }
}


/* Popups Media Queries */
@media (max-width: 480px) {
  .popup-tabs-nav {
    padding-top: 50px;
    height: 50px;
  }
  .mfp-container {
    padding: 0 10px;
  }
  .popup-tabs-nav li {
    &:first-child {
      border-top: 1px solid #e0e0e0;
    }
    border-bottom: 1px solid #e0e0e0;
    width: 100%;
    text-align: center;
    height: 50px;
    line-height: 50px;
    a {
      width: 100%;
      text-align: center;
      height: 50px;
      line-height: 50px;
      &:hover {
        background-color: transparent;
      }
    }
  }
  #sign-in-dialog.dialog-with-tabs .mfp-close, #small-dialog.dialog-with-tabs .mfp-close, #small-dialog-1.dialog-with-tabs .mfp-close, #small-dialog-2.dialog-with-tabs .mfp-close, #small-dialog-3.dialog-with-tabs .mfp-close, #small-dialog-4.dialog-with-tabs .mfp-close {
    height: 50px;
    width: 50px;
  }
  .account-type {
    flex-direction: column;
  }
  .social-login-buttons {
    flex-direction: column;
    button {
      max-width: 100%;
      width: 100%;
      flex: auto;
    }
  }
  .uploadButton {
    flex-direction: column;
    .uploadButton-file-name {
      padding: 0;
      margin: 15px 0 0 0;
    }
  }
}", "@Publication/Front/sass/vendor/_popups.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\vendor\\_popups.scss");
    }
}
