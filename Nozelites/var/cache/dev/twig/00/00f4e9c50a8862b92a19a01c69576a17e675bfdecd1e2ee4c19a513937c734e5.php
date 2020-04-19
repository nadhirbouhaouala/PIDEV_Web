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

/* @Publication/Front/sass/dashboard/_dashboard-navigation.scss */
class __TwigTemplate_01866379598c26aa6968011e7bae932f048f7ad12f00772c65560f7eb4621e57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/dashboard/_dashboard-navigation.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/dashboard/_dashboard-navigation.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Dashboard Navigation
------------------------------------- */

.dashboard-nav {
  display: block;
  z-index: 11;
  padding-bottom: 30px;
}

a.dashboard-responsive-nav-trigger {
  display: none;
}

.dashboard-nav ul {
  list-style: none;
  padding: 0;
  margin: 25px 0 0 0;
  &:first-child {
    margin: 30px 0 0 0;
  }
  &:before {
    content: attr(data-submenu-title);
    padding: 0 35px;
    margin-bottom: 5px;
    display: block;
    color: \$primary-color;
    font-weight: 600;
    font-size: 14px;
  }
  li {
    display: block;
    border-left: 3px solid transparent;
    transition: 0.3s;
    line-height: 25px;
    font-size: 15px;
    a {
      color: #707070;
      display: block;
      padding: 11px 32px;
      transition: 0.3s;
      cursor: pointer;
      position: relative;
      i {
        padding-right: 8px;
        width: 20px;
        font-size: 20px;
        color: #909090;
        transition: 0.3s;
        position: relative;
        top: 2px;
      }
    }
    ul li:hover a {
      padding-left: 4px;
    }
    &.active-submenu a i, &.active a i, &:hover a i {
      color: \$primary-color;
    }
    &.active-submenu, &.active, &:hover {
      border-color: \$primary-color;
      background-color: rgba(\$primary-color, 0.04);
    }
    &.active-submenu a, &:hover a, &.active a {
      color: \$primary-color;
    }
    span.nav-tag {
      display: inline-block;
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
      margin: 0 0 0 4px;
      top: -2px;
    }
    ul {
      padding: 0;
      margin: 0;
      visibility: hidden;
      max-height: 0;
      opacity: 0;
      line-height: 0;
      transition: 0.3s;
      pointer-events: none;
    }
    &.active-submenu ul {
      visibility: visible;
      padding: 0 0 18px 0;
      line-height: 24px;
      opacity: 1;
      max-height: 200px;
      pointer-events: all;
    }
    ul li {
      background-color: transparent;
      border: none;
      padding-left: 63px;
      position: relative;
      margin: 0;
      a {
        padding: 5px 0;
      }
      &:hover {
        border: none;
        background-color: transparent;
      }
    }
    a:after {
      font-family: \"Material-Icons\";
      content: '\\e914';
      opacity: 1;
      font-size: \$body-font-size;
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
      right: 35px;
      top: 15px;
    }
    &.active-submenu a:after, &.active a:after, &:hover a:after {
      color: \$primary-color;
      background: rgba(\$primary-color, 0.13);
      opacity: 0.8;
    }
    ul:before, a:only-child:after {
      content: '';
      display: none;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/dashboard/_dashboard-navigation.scss";
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
/* Dashboard Navigation
------------------------------------- */

.dashboard-nav {
  display: block;
  z-index: 11;
  padding-bottom: 30px;
}

a.dashboard-responsive-nav-trigger {
  display: none;
}

.dashboard-nav ul {
  list-style: none;
  padding: 0;
  margin: 25px 0 0 0;
  &:first-child {
    margin: 30px 0 0 0;
  }
  &:before {
    content: attr(data-submenu-title);
    padding: 0 35px;
    margin-bottom: 5px;
    display: block;
    color: \$primary-color;
    font-weight: 600;
    font-size: 14px;
  }
  li {
    display: block;
    border-left: 3px solid transparent;
    transition: 0.3s;
    line-height: 25px;
    font-size: 15px;
    a {
      color: #707070;
      display: block;
      padding: 11px 32px;
      transition: 0.3s;
      cursor: pointer;
      position: relative;
      i {
        padding-right: 8px;
        width: 20px;
        font-size: 20px;
        color: #909090;
        transition: 0.3s;
        position: relative;
        top: 2px;
      }
    }
    ul li:hover a {
      padding-left: 4px;
    }
    &.active-submenu a i, &.active a i, &:hover a i {
      color: \$primary-color;
    }
    &.active-submenu, &.active, &:hover {
      border-color: \$primary-color;
      background-color: rgba(\$primary-color, 0.04);
    }
    &.active-submenu a, &:hover a, &.active a {
      color: \$primary-color;
    }
    span.nav-tag {
      display: inline-block;
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
      margin: 0 0 0 4px;
      top: -2px;
    }
    ul {
      padding: 0;
      margin: 0;
      visibility: hidden;
      max-height: 0;
      opacity: 0;
      line-height: 0;
      transition: 0.3s;
      pointer-events: none;
    }
    &.active-submenu ul {
      visibility: visible;
      padding: 0 0 18px 0;
      line-height: 24px;
      opacity: 1;
      max-height: 200px;
      pointer-events: all;
    }
    ul li {
      background-color: transparent;
      border: none;
      padding-left: 63px;
      position: relative;
      margin: 0;
      a {
        padding: 5px 0;
      }
      &:hover {
        border: none;
        background-color: transparent;
      }
    }
    a:after {
      font-family: \"Material-Icons\";
      content: '\\e914';
      opacity: 1;
      font-size: \$body-font-size;
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
      right: 35px;
      top: 15px;
    }
    &.active-submenu a:after, &.active a:after, &:hover a:after {
      color: \$primary-color;
      background: rgba(\$primary-color, 0.13);
      opacity: 0.8;
    }
    ul:before, a:only-child:after {
      content: '';
      display: none;
    }
  }
}", "@Publication/Front/sass/dashboard/_dashboard-navigation.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\dashboard\\_dashboard-navigation.scss");
    }
}
