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

/* @Publication/Front/sass/gui/_clickable-tags.scss */
class __TwigTemplate_5102d4ded4a570d6ab151052efd0d45433d200c1c9956c2d9a5a953193bc5b9f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_clickable-tags.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_clickable-tags.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Clickable Tags
------------------------------------- */

.tags-container {
  display: block;
  input[type=\"checkbox\"] {
    display: none;
    + label {
      transition: 0.3s;
      font-size: 14.7px;
      cursor: pointer;
      border-radius: \$global-border-radius;
      background-color: #eee;
      color: #777;
      display: inline-block;
      padding: 6px 15px;
      margin: 0;
      line-height: 24px;
      &:hover {
        background-color: #e8e8e8;
      }
    }
    &:checked {
      + label {
        background-color: \$primary-color;
        color: #fff;
        transition: 0.3s;
      }
      + label:before {
        max-width: 30px;
        opacity: 1;
        transform: scale(1);
        margin: 0 5px 0 -2px;
      }
    }
    + label:before {
      font-family: \"Feather-Icons\";
      content: \"\\e92b\";
      font-size: 18px;
      transition: all 0.35s cubic-bezier(0.5, -0.41, 0.19, 2), max-width 0.3s, margin 0.3s;
      max-width: 0;
      display: inline-block;
      position: relative;
      top: 3px;
      margin: 0;
      opacity: 0;
      color: #fff;
      line-height: 0;
      transform: scale(0.5);
    }
  }
  .tag {
    display: inline-block;
    float: left;
    margin: 0 7px 7px 0;
    overflow: hidden;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_clickable-tags.scss";
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
/* Clickable Tags
------------------------------------- */

.tags-container {
  display: block;
  input[type=\"checkbox\"] {
    display: none;
    + label {
      transition: 0.3s;
      font-size: 14.7px;
      cursor: pointer;
      border-radius: \$global-border-radius;
      background-color: #eee;
      color: #777;
      display: inline-block;
      padding: 6px 15px;
      margin: 0;
      line-height: 24px;
      &:hover {
        background-color: #e8e8e8;
      }
    }
    &:checked {
      + label {
        background-color: \$primary-color;
        color: #fff;
        transition: 0.3s;
      }
      + label:before {
        max-width: 30px;
        opacity: 1;
        transform: scale(1);
        margin: 0 5px 0 -2px;
      }
    }
    + label:before {
      font-family: \"Feather-Icons\";
      content: \"\\e92b\";
      font-size: 18px;
      transition: all 0.35s cubic-bezier(0.5, -0.41, 0.19, 2), max-width 0.3s, margin 0.3s;
      max-width: 0;
      display: inline-block;
      position: relative;
      top: 3px;
      margin: 0;
      opacity: 0;
      color: #fff;
      line-height: 0;
      transform: scale(0.5);
    }
  }
  .tag {
    display: inline-block;
    float: left;
    margin: 0 7px 7px 0;
    overflow: hidden;
  }
}", "@Publication/Front/sass/gui/_clickable-tags.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_clickable-tags.scss");
    }
}
