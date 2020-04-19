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

/* @Publication/Front/sass/layout/_header.scss */
class __TwigTemplate_a0f6adaa850cd6418cac6d9d3587f71bb8f466f1f9f21eb319fb4919d1c375b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_header.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_header.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Header
------------------------------------- */

#logo {
  display: inline-block;
  border-right: 1px solid #e0e0e0;
  height: 100%;
  vertical-align: top;
  padding-right: 35px;
  margin-right: 20px;
  img {
    height: \$logo-height;
    width: auto;
    top: 50%;
    position: relative;
    transform: translate3d(0, -50%, 0);
  }
}

#header {
  position: relative;
  z-index: 999;
  padding: 0;
  box-shadow: 0 0 18px 0 rgba(0, 0, 0, 0.12);
  font-size: \$body-font-size;
  height: \$header-height;
  background-color: #fff;
  .container, .right-side, .left-side {
    height: 100%;
  }
}

/* Full Width Header */

header.fullwidth .container {
  max-width: 100%;
  margin: 0;
  padding: 0 35px;
}

/* Boxed Styles*/

#header {
  .container {
    position: relative;
  }
  .left-side {
    float: left;
    width: 100%;
    display: inline-block;
    position: relative;
    flex: 1;
  }
  .right-side {
    float: right;
    text-align: right;
    width: auto;
    display: inline-block;
    position: absolute;
    right: 25px;
    background-color: #fff;
    flex: 1;
  }
}

/* Full Width Styles */

.full-width #header {
  .left-side {
    float: left;
    width: 100%;
    display: inline-block;
    position: relative;
  }
  .right-side {
    float: right;
    text-align: right;
    width: auto;
    display: inline-block;
    position: absolute;
    right: 25px;
    background-color: #fff;
  }
}

/* Header Widget
------------------------------------- */

.header-widget {
  display: inline-block;
  height: 100%;
  border-left: 1px solid #e0e0e0;
  padding: 0 30px;
  text-align: left;
  float: left;
}

.fullwidth .header-widget:last-of-type {
  padding-right: 5px;
  float: right;
  border-right: none;
}

.header-widget:last-of-type {
  padding-right: 0;
  margin-right: -5px;
}

.fullwidth .header-widget:last-of-type {
  padding-right: 5px;
  margin-right: 0;
}

/* Notification Avatar*/

.header-notifications-content .notification-avatar {
  height: 42px;
  width: 42px;
  max-width: 42px;
  display: inline-block;
  border-radius: 50%;
  overflow: hidden;
}

/* Sign In Button */

.header-widget .log-in-button {
  padding: 10px 0;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  transition: 0.3s;
  color: \$body-font-color;
  display: block;
  margin: 0 -3px;
  i {
    font-size: 18px;
    line-height: 0;
    position: relative;
    top: 2px;
    margin-right: 4px;
    margin-left: -1px;
    color: #777;
    transition: 0.3s;
  }
  &:hover {
    color: \$primary-color;
    i {
      color: \$primary-color;
    }
  }
}

.transparent-header .header-widget .log-in-button {
  color: #fff;
  i {
    color: #fff;
  }
}

/* Sign In Button Media Queries */
@media (max-width: 768px) {
  .header-widget .log-in-button {
    span {
      display: none;
    }
    i {
      font-size: 20px;
      top: 3px;
      color: #555;
      &:hover {
        color: #555;
      }
    }
    background-color: #f0f0f0;
    border-radius: \$global-border-radius;
    height: 46px;
    width: 46px;
    text-align: center;
  }
  .transparent-header .header-widget .log-in-button {
    i {
      background-color: #fff;
      color: \$body-heading-color;
    }
    background-color: #fff;
    color: \$body-heading-color;
  }
}


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

.transparent-header-spacer {
  height: 82px;
}

.transparent-header {
  #header {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    .right-side {
      background-color: transparent;
    }
  }
  #logo {
    border-color: rgba(255, 255, 255, 0.2);
  }
  #header .right-side .header-widget {
    border-color: rgba(255, 255, 255, 0.2);
    &:first-of-type {
      border-right-color: transparent;
    }
    &:last-of-type {
      border-color: rgba(255, 255, 255, 0.2);
    }
  }
}

body .transparent-header #navigation > ul li a {
  color: #fff;
}

.transparent-header .header-notifications-trigger {
  color: #fff;
  a {
    color: #fff;
  }
}

body .transparent-header #navigation > ul ul li a {
  color: #aaa;
}

.transparent-header {
  .header-notifications-dropdown:before {
    border-bottom-color: #fff;
  }
  .mmenu-trigger {
    background-color: #fff;
  }
  #navigation > ul {
    li {
      a:after {
        background-color: rgba(255, 255, 255, 0.15);
        color: rgba(255, 255, 255, 0.8);
        opacity: 1;
        transition: 0.3s;
      }
      &:hover {
        ul li:hover a:after, a:after {
          color: #fff;
          background: \$primary-color;
        }
      }
      a.current:after {
        color: #fff;
        background: \$primary-color;
      }
      &:hover ul a:after {
        background-color: rgba(255, 255, 255, 0.1);
        color: #bbb;
      }
    }
    ul li a:after {
      background-color: rgba(255, 255, 255, 0.1);
      color: #bbb;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_header.scss";
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
/* Header
------------------------------------- */

#logo {
  display: inline-block;
  border-right: 1px solid #e0e0e0;
  height: 100%;
  vertical-align: top;
  padding-right: 35px;
  margin-right: 20px;
  img {
    height: \$logo-height;
    width: auto;
    top: 50%;
    position: relative;
    transform: translate3d(0, -50%, 0);
  }
}

#header {
  position: relative;
  z-index: 999;
  padding: 0;
  box-shadow: 0 0 18px 0 rgba(0, 0, 0, 0.12);
  font-size: \$body-font-size;
  height: \$header-height;
  background-color: #fff;
  .container, .right-side, .left-side {
    height: 100%;
  }
}

/* Full Width Header */

header.fullwidth .container {
  max-width: 100%;
  margin: 0;
  padding: 0 35px;
}

/* Boxed Styles*/

#header {
  .container {
    position: relative;
  }
  .left-side {
    float: left;
    width: 100%;
    display: inline-block;
    position: relative;
    flex: 1;
  }
  .right-side {
    float: right;
    text-align: right;
    width: auto;
    display: inline-block;
    position: absolute;
    right: 25px;
    background-color: #fff;
    flex: 1;
  }
}

/* Full Width Styles */

.full-width #header {
  .left-side {
    float: left;
    width: 100%;
    display: inline-block;
    position: relative;
  }
  .right-side {
    float: right;
    text-align: right;
    width: auto;
    display: inline-block;
    position: absolute;
    right: 25px;
    background-color: #fff;
  }
}

/* Header Widget
------------------------------------- */

.header-widget {
  display: inline-block;
  height: 100%;
  border-left: 1px solid #e0e0e0;
  padding: 0 30px;
  text-align: left;
  float: left;
}

.fullwidth .header-widget:last-of-type {
  padding-right: 5px;
  float: right;
  border-right: none;
}

.header-widget:last-of-type {
  padding-right: 0;
  margin-right: -5px;
}

.fullwidth .header-widget:last-of-type {
  padding-right: 5px;
  margin-right: 0;
}

/* Notification Avatar*/

.header-notifications-content .notification-avatar {
  height: 42px;
  width: 42px;
  max-width: 42px;
  display: inline-block;
  border-radius: 50%;
  overflow: hidden;
}

/* Sign In Button */

.header-widget .log-in-button {
  padding: 10px 0;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  transition: 0.3s;
  color: \$body-font-color;
  display: block;
  margin: 0 -3px;
  i {
    font-size: 18px;
    line-height: 0;
    position: relative;
    top: 2px;
    margin-right: 4px;
    margin-left: -1px;
    color: #777;
    transition: 0.3s;
  }
  &:hover {
    color: \$primary-color;
    i {
      color: \$primary-color;
    }
  }
}

.transparent-header .header-widget .log-in-button {
  color: #fff;
  i {
    color: #fff;
  }
}

/* Sign In Button Media Queries */
@media (max-width: 768px) {
  .header-widget .log-in-button {
    span {
      display: none;
    }
    i {
      font-size: 20px;
      top: 3px;
      color: #555;
      &:hover {
        color: #555;
      }
    }
    background-color: #f0f0f0;
    border-radius: \$global-border-radius;
    height: 46px;
    width: 46px;
    text-align: center;
  }
  .transparent-header .header-widget .log-in-button {
    i {
      background-color: #fff;
      color: \$body-heading-color;
    }
    background-color: #fff;
    color: \$body-heading-color;
  }
}


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

.transparent-header-spacer {
  height: 82px;
}

.transparent-header {
  #header {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    .right-side {
      background-color: transparent;
    }
  }
  #logo {
    border-color: rgba(255, 255, 255, 0.2);
  }
  #header .right-side .header-widget {
    border-color: rgba(255, 255, 255, 0.2);
    &:first-of-type {
      border-right-color: transparent;
    }
    &:last-of-type {
      border-color: rgba(255, 255, 255, 0.2);
    }
  }
}

body .transparent-header #navigation > ul li a {
  color: #fff;
}

.transparent-header .header-notifications-trigger {
  color: #fff;
  a {
    color: #fff;
  }
}

body .transparent-header #navigation > ul ul li a {
  color: #aaa;
}

.transparent-header {
  .header-notifications-dropdown:before {
    border-bottom-color: #fff;
  }
  .mmenu-trigger {
    background-color: #fff;
  }
  #navigation > ul {
    li {
      a:after {
        background-color: rgba(255, 255, 255, 0.15);
        color: rgba(255, 255, 255, 0.8);
        opacity: 1;
        transition: 0.3s;
      }
      &:hover {
        ul li:hover a:after, a:after {
          color: #fff;
          background: \$primary-color;
        }
      }
      a.current:after {
        color: #fff;
        background: \$primary-color;
      }
      &:hover ul a:after {
        background-color: rgba(255, 255, 255, 0.1);
        color: #bbb;
      }
    }
    ul li a:after {
      background-color: rgba(255, 255, 255, 0.1);
      color: #bbb;
    }
  }
}", "@Publication/Front/sass/layout/_header.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_header.scss");
    }
}
