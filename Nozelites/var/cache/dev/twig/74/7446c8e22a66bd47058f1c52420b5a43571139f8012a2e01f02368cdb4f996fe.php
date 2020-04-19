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

/* @Publication/Front/sass/gui/_star-rating.scss */
class __TwigTemplate_1a763cc517d23780d004f39001e37069abb2bb5d34d2ba5705b31572123f7d65 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_star-rating.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_star-rating.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Star Rating
------------------------------------- */
/* Star Rating */

.star-rating {
  display: inline-block;
  .star {
    display: inline-block;
    margin: 0;
    padding: 0;
    float: left;
    margin-right: 0;
    position: relative;
    &.half:after, &:before {
      font-family: \"Material-Icons\";
      content: \"\\e988\";
      display: block;
      color: #febe42;
      font-size: 22px;
    }
    &.empty:before {
      color: #ddd;
    }
  }
}

.rating:after {
  content: \".\";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

.star-rating {
  .star.half {
    &:before {
      color: #ddd;
    }
    &:after {
      color: #febe42;
      position: absolute;
      top: 0;
      width: 50%;
      display: block;
      height: 100%;
      overflow: hidden;
    }
  }
  &:before {
    content: attr(data-rating);
    float: left;
    border-radius: \$global-border-radius;
    background-color: #febe42;
    color: #fff;
    font-size: 14px;
    line-height: 15px;
    font-weight: 700;
    padding: 5px 7px;
    position: relative;
    top: 1px;
    margin-right: 10px;
  }
  &.no-stars {
    .star {
      display: none;
    }
    &:before {
      margin-right: 0;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_star-rating.scss";
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
/* Star Rating
------------------------------------- */
/* Star Rating */

.star-rating {
  display: inline-block;
  .star {
    display: inline-block;
    margin: 0;
    padding: 0;
    float: left;
    margin-right: 0;
    position: relative;
    &.half:after, &:before {
      font-family: \"Material-Icons\";
      content: \"\\e988\";
      display: block;
      color: #febe42;
      font-size: 22px;
    }
    &.empty:before {
      color: #ddd;
    }
  }
}

.rating:after {
  content: \".\";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

.star-rating {
  .star.half {
    &:before {
      color: #ddd;
    }
    &:after {
      color: #febe42;
      position: absolute;
      top: 0;
      width: 50%;
      display: block;
      height: 100%;
      overflow: hidden;
    }
  }
  &:before {
    content: attr(data-rating);
    float: left;
    border-radius: \$global-border-radius;
    background-color: #febe42;
    color: #fff;
    font-size: 14px;
    line-height: 15px;
    font-weight: 700;
    padding: 5px 7px;
    position: relative;
    top: 1px;
    margin-right: 10px;
  }
  &.no-stars {
    .star {
      display: none;
    }
    &:before {
      margin-right: 0;
    }
  }
}", "@Publication/Front/sass/gui/_star-rating.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_star-rating.scss");
    }
}
