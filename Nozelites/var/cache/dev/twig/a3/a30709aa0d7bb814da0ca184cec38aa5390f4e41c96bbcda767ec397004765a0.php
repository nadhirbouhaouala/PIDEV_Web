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

/* @Publication/Front/sass/layout/_mobile-navigation.scss */
class __TwigTemplate_0a93788ac54f84c0784a910e227d91ff84ee420e10f6aa65567648aad5bfd0ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_mobile-navigation.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_mobile-navigation.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* mmenu.js - mobile menu
------------------------------------- */

.mm-hidden {
  display: none !important;
}

.mm-wrapper {
  overflow-x: hidden;
  position: relative;
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
  z-index: 0;
}

.mm-panels {
  background: inherit;
  border-color: inherit;
  box-sizing: border-box;
  margin: 0;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 0;
  > .mm-panel {
    background: inherit;
    border-color: inherit;
    box-sizing: border-box;
    margin: 0;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 0;
  }
  overflow: hidden;
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
  transform-origin: top left;
  &.mm-opened {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  &.mm-subopened {
    -webkit-transform: translate(-30%, 0);
    -ms-transform: translate(-30%, 0);
    transform: translate(-30%, 0);
    -webkit-transform: translate3d(-30%, 0, 0);
    transform: translate3d(-30%, 0, 0);
  }
  &.mm-highest {
    z-index: 1;
  }
  &.mm-noanimation {
    -webkit-transition: none !important;
    transition: none !important;
    &.mm-subopened {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      transform: translate(0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
  }
}

.mm-panels > .mm-panel {
  -webkit-overflow-scrolling: touch;
  overflow: scroll;
  overflow-x: hidden;
  overflow-y: auto;
  padding: 0 20px;
  &.mm-hasnavbar {
    padding-top: 40px;
  }
  &:not(.mm-hidden) {
    display: block;
  }
  &:after, &:before {
    content: '';
    display: block;
    height: 20px;
  }
}

.mm-vertical .mm-panel {
  -webkit-transform: none !important;
  -ms-transform: none !important;
  transform: none !important;
}

.mm-listview .mm-vertical .mm-panel, .mm-vertical .mm-listview .mm-panel {
  display: none;
  padding: 10px 0 10px 10px;
}

.mm-listview .mm-vertical .mm-panel .mm-listview > li:last-child:after {
  border-color: transparent;
}

.mm-vertical {
  .mm-listview .mm-panel .mm-listview > li:last-child:after {
    border-color: transparent;
  }
  li.mm-opened > .mm-panel {
    display: block;
  }
}

li.mm-vertical.mm-opened > .mm-panel {
  display: block;
}

.mm-listview > li.mm-vertical > .mm-next, .mm-vertical .mm-listview > li > .mm-next {
  box-sizing: border-box;
  height: 40px;
  bottom: auto;
}

.mm-listview > li.mm-vertical.mm-opened > .mm-next:after, .mm-vertical .mm-listview > li.mm-opened > .mm-next:after {
  -webkit-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  transform: rotate(225deg);
  right: 19px;
}

.mm-btn {
  box-sizing: border-box;
  width: 40px;
  height: 50px;
  position: absolute;
  top: 0;
  z-index: 1;
}

.mm-clear {
  &:after, &:before {
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
    transform: rotate(-45deg);
  }
}

.mm-close {
  &:after, &:before {
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
    transform: rotate(-45deg);
  }
}

.mm-clear:before, .mm-close:before {
  border-right: none;
  border-bottom: none;
  right: 18px;
}

.mm-clear:after, .mm-close:after {
  border-left: none;
  border-top: none;
  right: 25px;
}

.mm-next:after {
  content: '';
  border-top: 2px solid transparent;
  border-left: 2px solid transparent;
  display: block;
  width: 8px;
  height: 8px;
  margin: auto;
  position: absolute;
  top: 0;
  bottom: 0;
}

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
  bottom: 0;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  left: 23px;
  right: auto;
}

.mm-next:after {
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg);
  right: 23px;
  left: auto;
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
  right: 0;
  > * {
    display: block;
    padding: 10px 0;
  }
  a {
    text-decoration: none;
    &:hover {
      text-decoration: none;
    }
  }
  .mm-title {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
  }
  .mm-btn {
    &:first-child {
      left: 0;
    }
    &:last-child {
      text-align: right;
      right: 0;
    }
  }
}

.mm-panel {
  .mm-navbar {
    display: none;
  }
  &.mm-hasnavbar .mm-navbar {
    display: block;
    background-color: #262626;
  }
}

.mm-listview {
  list-style: none;
  display: block;
  padding: 0;
  margin: 0;
  > li {
    list-style: none;
    display: block;
    padding: 0;
    margin: 0;
  }
  font: inherit;
  font-size: 14px;
  line-height: 20px;
  a {
    text-decoration: none;
    &:hover {
      text-decoration: none;
    }
  }
  > li {
    position: relative;
    border-color: inherit;
    .mm-next {
      border-color: inherit;
      &:before {
        border-color: inherit;
      }
    }
    &:after {
      border-color: inherit;
    }
    border-bottom: 1px solid #404040;
    > {
      a, span {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        color: inherit;
        display: block;
        padding: 14px 10px 14px 20px;
        margin: 0;
      }
    }
    &:not(.mm-divider):after {
      content: '';
      border-bottom-width: 1px;
      border-bottom-style: solid;
      display: block;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      display: none;
      left: 20px;
    }
  }
  .mm-next {
    background: rgba(3, 2, 1, 0);
    width: 50px;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 2;
    &:before {
      content: '';
      border-left-width: 1px;
      border-left-style: solid;
      display: block;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
    }
    + {
      a, span {
        margin-right: 50px;
      }
    }
    &.mm-fullsubopen {
      width: 100%;
      &:before {
        border-left: none;
      }
      + {
        a, span {
          padding-right: 50px;
          margin-right: 0;
        }
      }
    }
  }
}

.mm-panels > .mm-panel > {
  .mm-listview {
    margin: 20px -20px;
    &:first-child {
      margin-top: -10px;
    }
  }
  .mm-navbar + .mm-listview {
    margin-top: -10px;
  }
}

.mm-menu {
  background: #2a2a2a;
  border-color: rgba(255, 255, 255, 0.1);
  color: #fff;
  .mm-navbar {
    a, > * {
      color: #fff;
      font-weight: 600;
      font-size: \$body-font-size;
    }
  }
  .mm-btn {
    &:after, &:before {
      border-color: rgba(255, 255, 255, 0.8);
    }
  }
  .mm-listview {
    border-color: #2a2a2a;
    > li {
      .mm-next:after {
        border-color: rgba(255, 255, 255, 0.8);
      }
      a:not(.mm-next) {
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0.5);
        tap-highlight-color: rgba(255, 255, 255, 0.5);
      }
      &.mm-selected > {
        a:not(.mm-next), span {
          background: rgba(255, 255, 255, 0.05);
        }
      }
      transition: 0.2s;
      &:hover {
        background: rgba(255, 255, 255, 0.03);
      }
      &.mm-opened.mm-vertical > {
        .mm-panel, a.mm-next {
          background: rgba(0, 0, 0, 0.05);
        }
      }
    }
  }
  &.mm-vertical .mm-listview > li.mm-opened > {
    .mm-panel, a.mm-next {
      background: rgba(0, 0, 0, 0.05);
    }
  }
  .mm-divider {
    background: rgba(0, 0, 0, 0.05);
  }
}

.mm-page {
  box-sizing: border-box;
  position: relative;
}

.mm-slideout {
  -webkit-transition: -webkit-transform .4s ease;
  transition: -webkit-transform .4s ease;
  transition: transform .4s ease;
  transition: transform .4s ease, -webkit-transform .4s ease;
  z-index: 1;
}

html {
  &.mm-opened {
    overflow-x: hidden;
    position: relative;
  }
  &.mm-blocking {
    overflow: hidden;
    body {
      overflow: hidden;
    }
  }
  &.mm-background .mm-page {
    background: inherit;
  }
}

#mm-blocker {
  background: rgba(3, 2, 1, 0);
  display: none;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 2;
}

html.mm-blocking #mm-blocker {
  display: block;
}

.mm-menu.mm-offcanvas {
  z-index: 0;
  display: none;
  position: fixed;
  &.mm-opened {
    display: block;
  }
  &.mm-no-csstransforms.mm-opened {
    z-index: 10;
  }
  width: 80%;
  min-width: 140px;
  max-width: 440px;
}

html.mm-opening .mm-menu.mm-opened ~ .mm-slideout {
  -webkit-transform: translate(80%, 0);
  -ms-transform: translate(80%, 0);
  transform: translate(80%, 0);
  -webkit-transform: translate3d(80%, 0, 0);
  transform: translate3d(80%, 0, 0);
}

@media all and (max-width: 175px) {
  html.mm-opening .mm-menu.mm-opened ~ .mm-slideout {
    -webkit-transform: translate(140px, 0);
    -ms-transform: translate(140px, 0);
    transform: translate(140px, 0);
    -webkit-transform: translate3d(140px, 0, 0);
    transform: translate3d(140px, 0, 0);
  }
}

@media all and (min-width: 550px) {
  html.mm-opening .mm-menu.mm-opened ~ .mm-slideout {
    -webkit-transform: translate(440px, 0);
    -ms-transform: translate(440px, 0);
    transform: translate(440px, 0);
    -webkit-transform: translate3d(440px, 0, 0);
    transform: translate3d(440px, 0, 0);
  }
}

.mm-sronly {
  border: 0 !important;
  clip: rect(1px, 1px, 1px, 1px) !important;
  -webkit-clip-path: inset(50%) !important;
  clip-path: inset(50%) !important;
  white-space: nowrap !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  overflow: hidden !important;
  position: absolute !important;
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
  top: 50%;
  + a {
    &.mm-next {
      width: 90px;
      + {
        a, span {
          margin-right: 90px;
        }
      }
    }
    &.mm-fullsubopen {
      padding-left: 0;
      + {
        a, span {
          padding-right: 90px;
        }
      }
    }
  }
}

.mm-listview em.mm-counter + .mm-next.mm-fullsubopen + {
  a, span {
    padding-right: 90px;
  }
}

.mm-vertical {
  > .mm-counter {
    top: 12px;
    margin-top: 0;
  }
  &.mm-spacer > .mm-counter {
    margin-top: 40px;
  }
}

.mm-nosubresults > .mm-counter {
  display: none;
}

.mm-menu em.mm-counter {
  background-color: rgba(0, 0, 0, 0.3);
  height: 20px;
  width: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  line-height: 21px;
  font-size: 10px;
  font-weight: 600;
  background-color: \$primary-color;
}

/* Trigger Styles */

.mmenu-trigger {
  height: 46px;
  width: 46px;
  display: none;
  position: relative;
  margin: 0;
  background-color: #eee;
  border-radius: \$global-border-radius;
  cursor: pointer;
}

/* Hamburger Icon */

.hamburger {
  padding: 0;
  top: 16px;
  left: 12px;
  transform: scale(0.67);
  -moz-transform: scale(0.7) translateY(4px);
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
  margin-top: -2px;
  width: 33px;
  height: 4px;
  background-color: #555;
  border-radius: \$global-border-radius;
  position: absolute;
  transition-property: transform;
  transition-duration: 0.15s;
  transition-timing-function: ease;
  &::before, &::after {
    width: 33px;
    height: 4px;
    background-color: #555;
    border-radius: \$global-border-radius;
    position: absolute;
    transition-property: transform;
    transition-duration: 0.15s;
    transition-timing-function: ease;
  }
  &::before, &::after {
    content: \"\";
    display: block;
  }
  &::before {
    top: -10px;
  }
  &::after {
    bottom: -10px;
  }
}

/* Animation */

.hamburger--collapse {
  .hamburger-inner {
    top: auto;
    bottom: 0;
    transition-duration: 0.13s;
    transition-delay: 0.13s;
    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    &::after {
      top: -20px;
      transition: top 0.2s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), opacity 0.1s linear;
    }
    &::before {
      transition: top 0.12s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
  }
  &.is-active .hamburger-inner {
    transform: translate3d(0, -10px, 0) rotate(-45deg);
    transition-delay: 0.22s;
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    &::after {
      top: 0;
      opacity: 0;
      transition: top 0.2s cubic-bezier(0.33333, 0, 0.66667, 0.33333), opacity 0.1s 0.22s linear;
    }
    &::before {
      top: 0;
      transform: rotate(-90deg);
      transition: top 0.1s 0.16s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.25s cubic-bezier(0.215, 0.61, 0.355, 1);
    }
  }
}

.mmenu-trigger {
  display: none;
}

/* Media Queries Menu */
@media (max-width: 1099px) {
  /* Header Responsive Styles */
  #responsive {
    display: none;
  }
  .mmenu-trigger {
    display: inline-block !important;
  }
  #header {
    height: 76px;
  }
  #logo {
    border: none;
    img {
      border: none;
      max-width: 100px;
      height: auto;
    }
  }
  header.fullwidth .container {
    padding: 0 20px;
  }
  .header-widget {
    float: left;
  }
  .fullwidth .header-widget:last-of-type, .header-widget:last-of-type {
    padding-right: 25px;
    float: left;
  }
  #header .right-side {
    position: absolute;
    width: auto;
    background-color: #fff;
    text-align: left;
  }
  .mmenu-trigger {
    margin: 0 -5px 0 23px;
    top: 15px;
    float: right;
  }
  #header .right-side .header-widget {
    border-right: 1px solid #e0e0e0;
    margin-right: -1px;
  }
  .header-widget {
    padding: 0 25px;
  }
  .header-notifications:first-child {
    margin-right: -5px;
  }
  #header-container.cloned {
    display: none;
  }
}

@media (max-width: 768px) {
  .header-notifications {
    position: initial;
  }
  .header-notifications-dropdown:before {
    display: none;
  }
  .user-menu .header-notifications-dropdown, .header-notifications-dropdown {
    width: calc(100vw - 45px);
    right: -10px;
    top: calc(100% + 15px);
  }
}

@media (max-width: 480px) {
  .hide-on-mobile {
    display: none;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_mobile-navigation.scss";
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
/* mmenu.js - mobile menu
------------------------------------- */

.mm-hidden {
  display: none !important;
}

.mm-wrapper {
  overflow-x: hidden;
  position: relative;
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
  z-index: 0;
}

.mm-panels {
  background: inherit;
  border-color: inherit;
  box-sizing: border-box;
  margin: 0;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 0;
  > .mm-panel {
    background: inherit;
    border-color: inherit;
    box-sizing: border-box;
    margin: 0;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 0;
  }
  overflow: hidden;
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
  transform-origin: top left;
  &.mm-opened {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  &.mm-subopened {
    -webkit-transform: translate(-30%, 0);
    -ms-transform: translate(-30%, 0);
    transform: translate(-30%, 0);
    -webkit-transform: translate3d(-30%, 0, 0);
    transform: translate3d(-30%, 0, 0);
  }
  &.mm-highest {
    z-index: 1;
  }
  &.mm-noanimation {
    -webkit-transition: none !important;
    transition: none !important;
    &.mm-subopened {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      transform: translate(0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
  }
}

.mm-panels > .mm-panel {
  -webkit-overflow-scrolling: touch;
  overflow: scroll;
  overflow-x: hidden;
  overflow-y: auto;
  padding: 0 20px;
  &.mm-hasnavbar {
    padding-top: 40px;
  }
  &:not(.mm-hidden) {
    display: block;
  }
  &:after, &:before {
    content: '';
    display: block;
    height: 20px;
  }
}

.mm-vertical .mm-panel {
  -webkit-transform: none !important;
  -ms-transform: none !important;
  transform: none !important;
}

.mm-listview .mm-vertical .mm-panel, .mm-vertical .mm-listview .mm-panel {
  display: none;
  padding: 10px 0 10px 10px;
}

.mm-listview .mm-vertical .mm-panel .mm-listview > li:last-child:after {
  border-color: transparent;
}

.mm-vertical {
  .mm-listview .mm-panel .mm-listview > li:last-child:after {
    border-color: transparent;
  }
  li.mm-opened > .mm-panel {
    display: block;
  }
}

li.mm-vertical.mm-opened > .mm-panel {
  display: block;
}

.mm-listview > li.mm-vertical > .mm-next, .mm-vertical .mm-listview > li > .mm-next {
  box-sizing: border-box;
  height: 40px;
  bottom: auto;
}

.mm-listview > li.mm-vertical.mm-opened > .mm-next:after, .mm-vertical .mm-listview > li.mm-opened > .mm-next:after {
  -webkit-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  transform: rotate(225deg);
  right: 19px;
}

.mm-btn {
  box-sizing: border-box;
  width: 40px;
  height: 50px;
  position: absolute;
  top: 0;
  z-index: 1;
}

.mm-clear {
  &:after, &:before {
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
    transform: rotate(-45deg);
  }
}

.mm-close {
  &:after, &:before {
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
    transform: rotate(-45deg);
  }
}

.mm-clear:before, .mm-close:before {
  border-right: none;
  border-bottom: none;
  right: 18px;
}

.mm-clear:after, .mm-close:after {
  border-left: none;
  border-top: none;
  right: 25px;
}

.mm-next:after {
  content: '';
  border-top: 2px solid transparent;
  border-left: 2px solid transparent;
  display: block;
  width: 8px;
  height: 8px;
  margin: auto;
  position: absolute;
  top: 0;
  bottom: 0;
}

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
  bottom: 0;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  left: 23px;
  right: auto;
}

.mm-next:after {
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg);
  right: 23px;
  left: auto;
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
  right: 0;
  > * {
    display: block;
    padding: 10px 0;
  }
  a {
    text-decoration: none;
    &:hover {
      text-decoration: none;
    }
  }
  .mm-title {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
  }
  .mm-btn {
    &:first-child {
      left: 0;
    }
    &:last-child {
      text-align: right;
      right: 0;
    }
  }
}

.mm-panel {
  .mm-navbar {
    display: none;
  }
  &.mm-hasnavbar .mm-navbar {
    display: block;
    background-color: #262626;
  }
}

.mm-listview {
  list-style: none;
  display: block;
  padding: 0;
  margin: 0;
  > li {
    list-style: none;
    display: block;
    padding: 0;
    margin: 0;
  }
  font: inherit;
  font-size: 14px;
  line-height: 20px;
  a {
    text-decoration: none;
    &:hover {
      text-decoration: none;
    }
  }
  > li {
    position: relative;
    border-color: inherit;
    .mm-next {
      border-color: inherit;
      &:before {
        border-color: inherit;
      }
    }
    &:after {
      border-color: inherit;
    }
    border-bottom: 1px solid #404040;
    > {
      a, span {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        color: inherit;
        display: block;
        padding: 14px 10px 14px 20px;
        margin: 0;
      }
    }
    &:not(.mm-divider):after {
      content: '';
      border-bottom-width: 1px;
      border-bottom-style: solid;
      display: block;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      display: none;
      left: 20px;
    }
  }
  .mm-next {
    background: rgba(3, 2, 1, 0);
    width: 50px;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 2;
    &:before {
      content: '';
      border-left-width: 1px;
      border-left-style: solid;
      display: block;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
    }
    + {
      a, span {
        margin-right: 50px;
      }
    }
    &.mm-fullsubopen {
      width: 100%;
      &:before {
        border-left: none;
      }
      + {
        a, span {
          padding-right: 50px;
          margin-right: 0;
        }
      }
    }
  }
}

.mm-panels > .mm-panel > {
  .mm-listview {
    margin: 20px -20px;
    &:first-child {
      margin-top: -10px;
    }
  }
  .mm-navbar + .mm-listview {
    margin-top: -10px;
  }
}

.mm-menu {
  background: #2a2a2a;
  border-color: rgba(255, 255, 255, 0.1);
  color: #fff;
  .mm-navbar {
    a, > * {
      color: #fff;
      font-weight: 600;
      font-size: \$body-font-size;
    }
  }
  .mm-btn {
    &:after, &:before {
      border-color: rgba(255, 255, 255, 0.8);
    }
  }
  .mm-listview {
    border-color: #2a2a2a;
    > li {
      .mm-next:after {
        border-color: rgba(255, 255, 255, 0.8);
      }
      a:not(.mm-next) {
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0.5);
        tap-highlight-color: rgba(255, 255, 255, 0.5);
      }
      &.mm-selected > {
        a:not(.mm-next), span {
          background: rgba(255, 255, 255, 0.05);
        }
      }
      transition: 0.2s;
      &:hover {
        background: rgba(255, 255, 255, 0.03);
      }
      &.mm-opened.mm-vertical > {
        .mm-panel, a.mm-next {
          background: rgba(0, 0, 0, 0.05);
        }
      }
    }
  }
  &.mm-vertical .mm-listview > li.mm-opened > {
    .mm-panel, a.mm-next {
      background: rgba(0, 0, 0, 0.05);
    }
  }
  .mm-divider {
    background: rgba(0, 0, 0, 0.05);
  }
}

.mm-page {
  box-sizing: border-box;
  position: relative;
}

.mm-slideout {
  -webkit-transition: -webkit-transform .4s ease;
  transition: -webkit-transform .4s ease;
  transition: transform .4s ease;
  transition: transform .4s ease, -webkit-transform .4s ease;
  z-index: 1;
}

html {
  &.mm-opened {
    overflow-x: hidden;
    position: relative;
  }
  &.mm-blocking {
    overflow: hidden;
    body {
      overflow: hidden;
    }
  }
  &.mm-background .mm-page {
    background: inherit;
  }
}

#mm-blocker {
  background: rgba(3, 2, 1, 0);
  display: none;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 2;
}

html.mm-blocking #mm-blocker {
  display: block;
}

.mm-menu.mm-offcanvas {
  z-index: 0;
  display: none;
  position: fixed;
  &.mm-opened {
    display: block;
  }
  &.mm-no-csstransforms.mm-opened {
    z-index: 10;
  }
  width: 80%;
  min-width: 140px;
  max-width: 440px;
}

html.mm-opening .mm-menu.mm-opened ~ .mm-slideout {
  -webkit-transform: translate(80%, 0);
  -ms-transform: translate(80%, 0);
  transform: translate(80%, 0);
  -webkit-transform: translate3d(80%, 0, 0);
  transform: translate3d(80%, 0, 0);
}

@media all and (max-width: 175px) {
  html.mm-opening .mm-menu.mm-opened ~ .mm-slideout {
    -webkit-transform: translate(140px, 0);
    -ms-transform: translate(140px, 0);
    transform: translate(140px, 0);
    -webkit-transform: translate3d(140px, 0, 0);
    transform: translate3d(140px, 0, 0);
  }
}

@media all and (min-width: 550px) {
  html.mm-opening .mm-menu.mm-opened ~ .mm-slideout {
    -webkit-transform: translate(440px, 0);
    -ms-transform: translate(440px, 0);
    transform: translate(440px, 0);
    -webkit-transform: translate3d(440px, 0, 0);
    transform: translate3d(440px, 0, 0);
  }
}

.mm-sronly {
  border: 0 !important;
  clip: rect(1px, 1px, 1px, 1px) !important;
  -webkit-clip-path: inset(50%) !important;
  clip-path: inset(50%) !important;
  white-space: nowrap !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  overflow: hidden !important;
  position: absolute !important;
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
  top: 50%;
  + a {
    &.mm-next {
      width: 90px;
      + {
        a, span {
          margin-right: 90px;
        }
      }
    }
    &.mm-fullsubopen {
      padding-left: 0;
      + {
        a, span {
          padding-right: 90px;
        }
      }
    }
  }
}

.mm-listview em.mm-counter + .mm-next.mm-fullsubopen + {
  a, span {
    padding-right: 90px;
  }
}

.mm-vertical {
  > .mm-counter {
    top: 12px;
    margin-top: 0;
  }
  &.mm-spacer > .mm-counter {
    margin-top: 40px;
  }
}

.mm-nosubresults > .mm-counter {
  display: none;
}

.mm-menu em.mm-counter {
  background-color: rgba(0, 0, 0, 0.3);
  height: 20px;
  width: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  line-height: 21px;
  font-size: 10px;
  font-weight: 600;
  background-color: \$primary-color;
}

/* Trigger Styles */

.mmenu-trigger {
  height: 46px;
  width: 46px;
  display: none;
  position: relative;
  margin: 0;
  background-color: #eee;
  border-radius: \$global-border-radius;
  cursor: pointer;
}

/* Hamburger Icon */

.hamburger {
  padding: 0;
  top: 16px;
  left: 12px;
  transform: scale(0.67);
  -moz-transform: scale(0.7) translateY(4px);
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
  margin-top: -2px;
  width: 33px;
  height: 4px;
  background-color: #555;
  border-radius: \$global-border-radius;
  position: absolute;
  transition-property: transform;
  transition-duration: 0.15s;
  transition-timing-function: ease;
  &::before, &::after {
    width: 33px;
    height: 4px;
    background-color: #555;
    border-radius: \$global-border-radius;
    position: absolute;
    transition-property: transform;
    transition-duration: 0.15s;
    transition-timing-function: ease;
  }
  &::before, &::after {
    content: \"\";
    display: block;
  }
  &::before {
    top: -10px;
  }
  &::after {
    bottom: -10px;
  }
}

/* Animation */

.hamburger--collapse {
  .hamburger-inner {
    top: auto;
    bottom: 0;
    transition-duration: 0.13s;
    transition-delay: 0.13s;
    transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    &::after {
      top: -20px;
      transition: top 0.2s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), opacity 0.1s linear;
    }
    &::before {
      transition: top 0.12s 0.2s cubic-bezier(0.33333, 0.66667, 0.66667, 1), transform 0.13s cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
  }
  &.is-active .hamburger-inner {
    transform: translate3d(0, -10px, 0) rotate(-45deg);
    transition-delay: 0.22s;
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    &::after {
      top: 0;
      opacity: 0;
      transition: top 0.2s cubic-bezier(0.33333, 0, 0.66667, 0.33333), opacity 0.1s 0.22s linear;
    }
    &::before {
      top: 0;
      transform: rotate(-90deg);
      transition: top 0.1s 0.16s cubic-bezier(0.33333, 0, 0.66667, 0.33333), transform 0.13s 0.25s cubic-bezier(0.215, 0.61, 0.355, 1);
    }
  }
}

.mmenu-trigger {
  display: none;
}

/* Media Queries Menu */
@media (max-width: 1099px) {
  /* Header Responsive Styles */
  #responsive {
    display: none;
  }
  .mmenu-trigger {
    display: inline-block !important;
  }
  #header {
    height: 76px;
  }
  #logo {
    border: none;
    img {
      border: none;
      max-width: 100px;
      height: auto;
    }
  }
  header.fullwidth .container {
    padding: 0 20px;
  }
  .header-widget {
    float: left;
  }
  .fullwidth .header-widget:last-of-type, .header-widget:last-of-type {
    padding-right: 25px;
    float: left;
  }
  #header .right-side {
    position: absolute;
    width: auto;
    background-color: #fff;
    text-align: left;
  }
  .mmenu-trigger {
    margin: 0 -5px 0 23px;
    top: 15px;
    float: right;
  }
  #header .right-side .header-widget {
    border-right: 1px solid #e0e0e0;
    margin-right: -1px;
  }
  .header-widget {
    padding: 0 25px;
  }
  .header-notifications:first-child {
    margin-right: -5px;
  }
  #header-container.cloned {
    display: none;
  }
}

@media (max-width: 768px) {
  .header-notifications {
    position: initial;
  }
  .header-notifications-dropdown:before {
    display: none;
  }
  .user-menu .header-notifications-dropdown, .header-notifications-dropdown {
    width: calc(100vw - 45px);
    right: -10px;
    top: calc(100% + 15px);
  }
}

@media (max-width: 480px) {
  .hide-on-mobile {
    display: none;
  }
}", "@Publication/Front/sass/layout/_mobile-navigation.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_mobile-navigation.scss");
    }
}
