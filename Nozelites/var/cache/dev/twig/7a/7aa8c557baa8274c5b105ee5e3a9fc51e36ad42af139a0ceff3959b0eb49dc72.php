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

/* @Publication/Front/sass/layout/_header-notifications.scss */
class __TwigTemplate_8bc013143d14040e8f8b06783fe016d63560f47f914bbea2adc64f76ed6b9cc5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_header-notifications.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_header-notifications.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Header Notifications
------------------------------------- */

.header-notifications {
  height: 100%;
  display: inline-block;
  padding-right: 15px;
  position: relative;
  &:last-child {
    margin-right: -15px;
  }
}

.header-notifications-trigger {
  font-size: 22px;
  color: \$body-heading-color;
  position: relative;
  top: 55%;
  transform: translate3d(0, -50%, 0);
  a {
    font-size: 22px;
    color: \$body-heading-color;
    position: relative;
    top: 55%;
    transform: translate3d(0, -50%, 0);
  }
  span {
    position: absolute;
    display: inline-block;
    top: -15px;
    margin-left: -10px;
    font-weight: 700;
    height: 19px;
    width: 19px;
    line-height: 19px;
    text-align: center;
    color: #fff;
    font-size: 11px;
    background-color: \$primary-color;
    border-radius: 50%;
    position: relative;
  }
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .header-notifications-trigger {
    height: 40px;
    a {
      height: 40px;
    }
  }
  .header-notifications.user-menu {
    top: -8px;
  }
}

/* IE 11 Fixes - End */

/* Header User Menu Dropdown */

.header-notifications-dropdown {
  width: 360px;
  border-radius: \$global-border-radius;
  /*  box-shadow: 0px 0 8px 0px rgba(0,0,0,0.10);*/
  box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.12);
  background-color: #fff;
  padding: 0;
  position: absolute;
  top: calc(100% - 10px);
  right: -15px;
  text-align: left;
  z-index: 100;
  transform: scale(0.95);
  opacity: 0;
  visibility: hidden;
  transition: 0.3s;
  pointer-events: none;
}

.header-notifications.active .header-notifications-dropdown {
  transform: scale(1);
  opacity: 1;
  visibility: visible;
  pointer-events: all;
}

.header-notifications-dropdown:before {
  content: \"\";
  position: absolute;
  right: 43px;
  top: -6px;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #d7d7d7;
  /* Arrow with shadow */
  /*  top: 0;
    right: 33px;
      border: 5px solid black;
      border-color: transparent transparent #fff #fff;
      transform-origin: 0 0;
      transform: rotate(135deg);
      box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, 0.05);*/
}

/* Headline */

.header-notifications-headline {
  padding: 17px 25px;
  padding-top: 18px;
  line-height: 24px;
  border-bottom: 1px solid #e6e6e6;
  h4, span {
    display: inline-block;
  }
}

button.mark-as-read {
  float: right;
  position: relative;
  border-radius: \$global-border-radius;
  height: 32px;
  width: 32px;
  text-align: center;
  line-height: 36px;
  top: -4px;
  right: -8px;
  color: #888;
  transition: 0.25s;
  &:hover {
    background-color: #f2f2f2;
    color: #888;
  }
}

/* Content */

.header-notifications-content {
  display: block;
  width: 100%;
}

.header-notifications-scroll {
  display: block;
  overflow: hidden;
  height: auto;
}

.header-notifications-content {
  ul {
    padding: 0;
    margin: 0;
    list-style: none;
    li {
      border-bottom: 1px solid #e6e6e6;
      transition: 0.25s;
      &:hover {
        background-color: #fafafa;
        .notification-icon {
          background-color: #eee;
        }
      }
      &:last-child {
        border-bottom: none;
      }
      a {
        color: \$body-font-color;
        position: relative;
        padding: 22px 25px;
        display: block;
      }
    }
  }
  p {
    margin: 0;
    padding: 0;
  }
  ul li a {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  .notification-icon, .notification-text {
    flex: 1;
  }
  .notification-icon i {
    position: relative;
  }
}

/* Notification Icon */

.notification-icon, .header-notifications-content .notification-icon {
  font-size: 24px;
  height: 40px;
  width: 40px;
  max-width: 40px;
  display: inline-block;
  background-color: #f2f2f2;
  border-radius: \$global-border-radius;
  line-height: 42px;
  text-align: center;
  color: #a0a0a0;
  transition: 0.25s;
  position: relative;
}

/* Adjustments for some icons :( */

.notification-icon {
  .icon-material-outline-autorenew {
    font-size: 22px;
  }
  .icon-material-outline-gavel {
    font-size: 19px;
    top: -2px;
    left: 1px;
  }
}

/* Notification Avatar*/

.header-notifications-content .notification-avatar {
  height: 42px;
  width: 42px;
  max-width: 42px;
  display: inline-block;
  border-radius: 50%;
  overflow: visible;
  align-self: flex-start;
  img {
    width: 100%;
    image-rendering: -webkit-optimize-contrast;
    border-radius: 50%;
  }
}

/* Notification Texts */

.notification-text {
  padding-left: 20px;
  padding-right: 5px;
  display: inline-block;
  line-height: 23px;
  font-size: 14.7px;
}

.header-notifications-content {
  .notification-text {
    padding-left: 20px;
    padding-right: 5px;
    display: inline-block;
    line-height: 23px;
    font-size: 14.7px;
  }
  .notification-msg-text {
    display: inline-block;
    line-height: 23px;
    font-size: 14.7px;
    margin: 4px 0;
  }
}

.notification-text strong, .header-notifications-content .notification-text strong {
  font-weight: 600;
  color: \$body-heading-color;
}

.notification-text span.color, .header-notifications-content .notification-text span.color {
  color: \$primary-color;
  display: inline-block;
}

.notification-text span.color {
  display: block;
}

/* Button */

a.header-notifications-button {
  border-radius: 0 0 \$global-border-radius \$global-border-radius;
  font-weight: 600;
  color: #fff;
  font-size: 14.7px;
  padding: 12px 16px;
  background-color: \$primary-color;
  width: 100%;
  display: block;
  text-align: center;
  transition: 0.3s;
  i {
    font-size: 22px;
    line-height: 0;
    top: 4px;
    position: relative;
    max-width: 0;
    display: inline-block;
    margin-left: 7px;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_header-notifications.scss";
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
        return new Source("/* ---------------------------------- */
/* Header Notifications
------------------------------------- */

.header-notifications {
  height: 100%;
  display: inline-block;
  padding-right: 15px;
  position: relative;
  &:last-child {
    margin-right: -15px;
  }
}

.header-notifications-trigger {
  font-size: 22px;
  color: \$body-heading-color;
  position: relative;
  top: 55%;
  transform: translate3d(0, -50%, 0);
  a {
    font-size: 22px;
    color: \$body-heading-color;
    position: relative;
    top: 55%;
    transform: translate3d(0, -50%, 0);
  }
  span {
    position: absolute;
    display: inline-block;
    top: -15px;
    margin-left: -10px;
    font-weight: 700;
    height: 19px;
    width: 19px;
    line-height: 19px;
    text-align: center;
    color: #fff;
    font-size: 11px;
    background-color: \$primary-color;
    border-radius: 50%;
    position: relative;
  }
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .header-notifications-trigger {
    height: 40px;
    a {
      height: 40px;
    }
  }
  .header-notifications.user-menu {
    top: -8px;
  }
}

/* IE 11 Fixes - End */

/* Header User Menu Dropdown */

.header-notifications-dropdown {
  width: 360px;
  border-radius: \$global-border-radius;
  /*  box-shadow: 0px 0 8px 0px rgba(0,0,0,0.10);*/
  box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.12);
  background-color: #fff;
  padding: 0;
  position: absolute;
  top: calc(100% - 10px);
  right: -15px;
  text-align: left;
  z-index: 100;
  transform: scale(0.95);
  opacity: 0;
  visibility: hidden;
  transition: 0.3s;
  pointer-events: none;
}

.header-notifications.active .header-notifications-dropdown {
  transform: scale(1);
  opacity: 1;
  visibility: visible;
  pointer-events: all;
}

.header-notifications-dropdown:before {
  content: \"\";
  position: absolute;
  right: 43px;
  top: -6px;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #d7d7d7;
  /* Arrow with shadow */
  /*  top: 0;
    right: 33px;
      border: 5px solid black;
      border-color: transparent transparent #fff #fff;
      transform-origin: 0 0;
      transform: rotate(135deg);
      box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, 0.05);*/
}

/* Headline */

.header-notifications-headline {
  padding: 17px 25px;
  padding-top: 18px;
  line-height: 24px;
  border-bottom: 1px solid #e6e6e6;
  h4, span {
    display: inline-block;
  }
}

button.mark-as-read {
  float: right;
  position: relative;
  border-radius: \$global-border-radius;
  height: 32px;
  width: 32px;
  text-align: center;
  line-height: 36px;
  top: -4px;
  right: -8px;
  color: #888;
  transition: 0.25s;
  &:hover {
    background-color: #f2f2f2;
    color: #888;
  }
}

/* Content */

.header-notifications-content {
  display: block;
  width: 100%;
}

.header-notifications-scroll {
  display: block;
  overflow: hidden;
  height: auto;
}

.header-notifications-content {
  ul {
    padding: 0;
    margin: 0;
    list-style: none;
    li {
      border-bottom: 1px solid #e6e6e6;
      transition: 0.25s;
      &:hover {
        background-color: #fafafa;
        .notification-icon {
          background-color: #eee;
        }
      }
      &:last-child {
        border-bottom: none;
      }
      a {
        color: \$body-font-color;
        position: relative;
        padding: 22px 25px;
        display: block;
      }
    }
  }
  p {
    margin: 0;
    padding: 0;
  }
  ul li a {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  .notification-icon, .notification-text {
    flex: 1;
  }
  .notification-icon i {
    position: relative;
  }
}

/* Notification Icon */

.notification-icon, .header-notifications-content .notification-icon {
  font-size: 24px;
  height: 40px;
  width: 40px;
  max-width: 40px;
  display: inline-block;
  background-color: #f2f2f2;
  border-radius: \$global-border-radius;
  line-height: 42px;
  text-align: center;
  color: #a0a0a0;
  transition: 0.25s;
  position: relative;
}

/* Adjustments for some icons :( */

.notification-icon {
  .icon-material-outline-autorenew {
    font-size: 22px;
  }
  .icon-material-outline-gavel {
    font-size: 19px;
    top: -2px;
    left: 1px;
  }
}

/* Notification Avatar*/

.header-notifications-content .notification-avatar {
  height: 42px;
  width: 42px;
  max-width: 42px;
  display: inline-block;
  border-radius: 50%;
  overflow: visible;
  align-self: flex-start;
  img {
    width: 100%;
    image-rendering: -webkit-optimize-contrast;
    border-radius: 50%;
  }
}

/* Notification Texts */

.notification-text {
  padding-left: 20px;
  padding-right: 5px;
  display: inline-block;
  line-height: 23px;
  font-size: 14.7px;
}

.header-notifications-content {
  .notification-text {
    padding-left: 20px;
    padding-right: 5px;
    display: inline-block;
    line-height: 23px;
    font-size: 14.7px;
  }
  .notification-msg-text {
    display: inline-block;
    line-height: 23px;
    font-size: 14.7px;
    margin: 4px 0;
  }
}

.notification-text strong, .header-notifications-content .notification-text strong {
  font-weight: 600;
  color: \$body-heading-color;
}

.notification-text span.color, .header-notifications-content .notification-text span.color {
  color: \$primary-color;
  display: inline-block;
}

.notification-text span.color {
  display: block;
}

/* Button */

a.header-notifications-button {
  border-radius: 0 0 \$global-border-radius \$global-border-radius;
  font-weight: 600;
  color: #fff;
  font-size: 14.7px;
  padding: 12px 16px;
  background-color: \$primary-color;
  width: 100%;
  display: block;
  text-align: center;
  transition: 0.3s;
  i {
    font-size: 22px;
    line-height: 0;
    top: 4px;
    position: relative;
    max-width: 0;
    display: inline-block;
    margin-left: 7px;
  }
}", "@Publication/Front/sass/layout/_header-notifications.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_header-notifications.scss");
    }
}
