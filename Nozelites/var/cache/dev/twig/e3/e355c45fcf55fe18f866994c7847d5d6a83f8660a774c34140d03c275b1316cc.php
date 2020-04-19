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

/* @Publication/Front/sass/gui/_verified-badge.scss */
class __TwigTemplate_b6004639fcac4f600f10f454325db7ff96f51e3887a2b18a685c8ac7616a0b77 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_verified-badge.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_verified-badge.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Verified Badge
------------------------------------- */

.job-listing-company .verified-badge, .job-listing .job-listing-footer ul li .verified-badge {
  position: relative;
  display: inline-block;
  transform: scale(0.7);
  top: 2px;
  margin-left: -2px;
}

/* Verified Badge */

.verified-badge {
  position: relative;
  height: 25px;
  width: 25px;
  display: inline-block;
  background-color: #38b653;
  border-radius: 50%;
  text-align: center;
  z-index: 10;
  font-weight: 500;
  &:before {
    content: \"\\e92b\";
    font-family: \"Feather-Icons\";
    font-size: \$body-font-size;
    color: #fff;
    position: relative;
    top: 0px;
    line-height: \$body-line-height;
  }
}

.job-listing .job-listing-company-logo .verified-badge {
  position: absolute;
  bottom: 0;
  right: 0;
  transform: translate(7px, 7px);
}

/* Long Verified Badge */

.verified-badge-with-title {
  position: relative;
  height: 26px;
  display: flex;
  top: -1px;
  color: #fff;
  font-weight: 500;
  font-size: 14px;
  background-color: #30ab4a;
  text-align: center;
  z-index: 10;
  font-weight: 500;
  border-radius: \$global-border-radius;
  padding: 0 8px 0 0;
  margin: 0;
  overflow: hidden;
  padding-left: 34px;
  line-height: \$body-line-height;
  &:before {
    content: \"\\e92b\";
    font-family: \"Feather-Icons\";
    font-size: \$body-font-size;
    color: #fff;
    position: absolute;
    top: 0;
    left: 0;
    line-height: \$body-sub-line-height;
    height: 26px;
    width: 26px;
    display: inline-block;
    background-color: #38b653;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_verified-badge.scss";
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
/* Verified Badge
------------------------------------- */

.job-listing-company .verified-badge, .job-listing .job-listing-footer ul li .verified-badge {
  position: relative;
  display: inline-block;
  transform: scale(0.7);
  top: 2px;
  margin-left: -2px;
}

/* Verified Badge */

.verified-badge {
  position: relative;
  height: 25px;
  width: 25px;
  display: inline-block;
  background-color: #38b653;
  border-radius: 50%;
  text-align: center;
  z-index: 10;
  font-weight: 500;
  &:before {
    content: \"\\e92b\";
    font-family: \"Feather-Icons\";
    font-size: \$body-font-size;
    color: #fff;
    position: relative;
    top: 0px;
    line-height: \$body-line-height;
  }
}

.job-listing .job-listing-company-logo .verified-badge {
  position: absolute;
  bottom: 0;
  right: 0;
  transform: translate(7px, 7px);
}

/* Long Verified Badge */

.verified-badge-with-title {
  position: relative;
  height: 26px;
  display: flex;
  top: -1px;
  color: #fff;
  font-weight: 500;
  font-size: 14px;
  background-color: #30ab4a;
  text-align: center;
  z-index: 10;
  font-weight: 500;
  border-radius: \$global-border-radius;
  padding: 0 8px 0 0;
  margin: 0;
  overflow: hidden;
  padding-left: 34px;
  line-height: \$body-line-height;
  &:before {
    content: \"\\e92b\";
    font-family: \"Feather-Icons\";
    font-size: \$body-font-size;
    color: #fff;
    position: absolute;
    top: 0;
    left: 0;
    line-height: \$body-sub-line-height;
    height: 26px;
    width: 26px;
    display: inline-block;
    background-color: #38b653;
  }
}", "@Publication/Front/sass/gui/_verified-badge.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_verified-badge.scss");
    }
}
