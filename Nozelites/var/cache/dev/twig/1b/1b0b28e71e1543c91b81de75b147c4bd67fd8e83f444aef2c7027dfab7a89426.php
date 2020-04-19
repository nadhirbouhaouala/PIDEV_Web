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

/* @Publication/Front/sass/layout/_user-menu.scss */
class __TwigTemplate_61bbf0baef2e140b769f22520ae4f1e315aa687c729bf6c19c24bc772d82818c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_user-menu.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_user-menu.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* User Menu
------------------------------------- */

.user-menu {
  padding: 0;
}

.header-notifications.user-menu {
  margin: 0 -5px;
}

.user-menu {
  .header-notifications-trigger {
    top: 50%;
    a {
      top: 50%;
    }
  }
  .header-notifications-dropdown {
    top: calc(100% - 8px);
    width: 290px;
    right: -10px;
    &:before {
      right: 23px;
    }
  }
}

/* User Status Dot */
.notification-avatar {
  position: relative;
}

.status-icon, .notification-avatar:after, .user-avatar:after {
  position: absolute;
  content: \"\";
  height: 12px;
  width: 12px;
  background-color: #c0c0c0;
  bottom: 0;
  right: 0;
  display: block;
  border: 2px solid #fff;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
  border-radius: 50%;
}

.notification-avatar:after {
  width: 11px;
  height: 11px;
}

/* Online */
.status-icon.status-online, .status-online:after {
  background-color: #38b653;
}

/* Offline */
.status-icon.status-offline, .status-offline:after {
  background-color: #c0c0c0;
}

/* Avatar */
.user-avatar {
  display: inline-block;
  border-radius: 50%;
  width: 42px;
  height: 42px;
  position: relative;
  img {
    width: 100%;
    display: inline-block;
    border-radius: 50%;
    image-rendering: -webkit-optimize-contrast;
  }
}

/* User Menu Small Nav */
ul.user-menu-small-nav {
  list-style: none;
  padding: 0;
  margin: 0;
  padding: 20px 25px;
  li {
    margin: 0;
    padding: 0;
    a {
      display: block;
      padding: 2px 0;
      font-size: \$body-font-size;
      color: \$body-font-color;
      transition: 0.3s;
      i {
        font-size: \$body-font-size;
        position: relative;
        top: 1px;
        margin-right: 2px;
        color: \$body-font-color;
        -webkit-font-smoothing: antialiased;
        transition: 0.3s;
      }
      &:hover {
        color: \$primary-color;
        i {
          color: \$primary-color;
        }
      }
    }
  }
}

/* User Status Section*/
.user-status {
  padding: 25px;
  border-bottom: 1px solid #e6e6e6;
}

/* User Menu - Details */
.user-details {
  display: flex;
}

.user-name {
  font-weight: 500;
  color: \$body-heading-color;
  line-height: 20px;
  padding: 2px 0 0 15px;
}

.user-details span {
  display: block;
  font-size: 14.7px;
  color: #888;
  font-weight: 500;
}

/* User Status Switch */
.status-switch {
  background-color: #eee;
  width: 100%;
  display: block;
  border-radius: \$global-border-radius;
  height: 36px;
  padding: 0;
  position: relative;
  zoom: 1;
  margin-top: 20px;
  &:before, &:after {
    content: \" \";
    display: table;
  }
  label {
    float: left;
    width: 50%;
    position: relative;
    z-index: 2;
    line-height: 36px;
    cursor: pointer;
    color: #888;
    font-size: 14.7px;
    text-align: center;
    transition: 0.3s;
    margin: 0;
  }
  span {
    &.status-indicator {
      position: relative;
      z-index: 1;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      display: block;
      border-radius: \$global-border-radius 0 0 \$global-border-radius;;
      background-color: #38b653;
      box-shadow: 0 0 5px 1px rgba(56, 182, 83, 0.3);
      transition: all 0.4s cubic-bezier(0.3, -0.41, 0.19, 1.3), background-color 0.2s linear;
    }
    &.right {
      left: 50%;
      border-radius: 0 \$global-border-radius \$global-border-radius 0;
      background-color: #333;
      box-shadow: none;
      color: #fff;
    }
  }
  label.current-status {
    color: #fff;
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_user-menu.scss";
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
/* User Menu
------------------------------------- */

.user-menu {
  padding: 0;
}

.header-notifications.user-menu {
  margin: 0 -5px;
}

.user-menu {
  .header-notifications-trigger {
    top: 50%;
    a {
      top: 50%;
    }
  }
  .header-notifications-dropdown {
    top: calc(100% - 8px);
    width: 290px;
    right: -10px;
    &:before {
      right: 23px;
    }
  }
}

/* User Status Dot */
.notification-avatar {
  position: relative;
}

.status-icon, .notification-avatar:after, .user-avatar:after {
  position: absolute;
  content: \"\";
  height: 12px;
  width: 12px;
  background-color: #c0c0c0;
  bottom: 0;
  right: 0;
  display: block;
  border: 2px solid #fff;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
  border-radius: 50%;
}

.notification-avatar:after {
  width: 11px;
  height: 11px;
}

/* Online */
.status-icon.status-online, .status-online:after {
  background-color: #38b653;
}

/* Offline */
.status-icon.status-offline, .status-offline:after {
  background-color: #c0c0c0;
}

/* Avatar */
.user-avatar {
  display: inline-block;
  border-radius: 50%;
  width: 42px;
  height: 42px;
  position: relative;
  img {
    width: 100%;
    display: inline-block;
    border-radius: 50%;
    image-rendering: -webkit-optimize-contrast;
  }
}

/* User Menu Small Nav */
ul.user-menu-small-nav {
  list-style: none;
  padding: 0;
  margin: 0;
  padding: 20px 25px;
  li {
    margin: 0;
    padding: 0;
    a {
      display: block;
      padding: 2px 0;
      font-size: \$body-font-size;
      color: \$body-font-color;
      transition: 0.3s;
      i {
        font-size: \$body-font-size;
        position: relative;
        top: 1px;
        margin-right: 2px;
        color: \$body-font-color;
        -webkit-font-smoothing: antialiased;
        transition: 0.3s;
      }
      &:hover {
        color: \$primary-color;
        i {
          color: \$primary-color;
        }
      }
    }
  }
}

/* User Status Section*/
.user-status {
  padding: 25px;
  border-bottom: 1px solid #e6e6e6;
}

/* User Menu - Details */
.user-details {
  display: flex;
}

.user-name {
  font-weight: 500;
  color: \$body-heading-color;
  line-height: 20px;
  padding: 2px 0 0 15px;
}

.user-details span {
  display: block;
  font-size: 14.7px;
  color: #888;
  font-weight: 500;
}

/* User Status Switch */
.status-switch {
  background-color: #eee;
  width: 100%;
  display: block;
  border-radius: \$global-border-radius;
  height: 36px;
  padding: 0;
  position: relative;
  zoom: 1;
  margin-top: 20px;
  &:before, &:after {
    content: \" \";
    display: table;
  }
  label {
    float: left;
    width: 50%;
    position: relative;
    z-index: 2;
    line-height: 36px;
    cursor: pointer;
    color: #888;
    font-size: 14.7px;
    text-align: center;
    transition: 0.3s;
    margin: 0;
  }
  span {
    &.status-indicator {
      position: relative;
      z-index: 1;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      display: block;
      border-radius: \$global-border-radius 0 0 \$global-border-radius;;
      background-color: #38b653;
      box-shadow: 0 0 5px 1px rgba(56, 182, 83, 0.3);
      transition: all 0.4s cubic-bezier(0.3, -0.41, 0.19, 1.3), background-color 0.2s linear;
    }
    &.right {
      left: 50%;
      border-radius: 0 \$global-border-radius \$global-border-radius 0;
      background-color: #333;
      box-shadow: none;
      color: #fff;
    }
  }
  label.current-status {
    color: #fff;
  }
}
", "@Publication/Front/sass/layout/_user-menu.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_user-menu.scss");
    }
}
