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

/* @Publication/Front/sass/gui/_tables.scss */
class __TwigTemplate_ce943dca49071a6ea362f09881e63c0b09845b00750055a8c669a9e7e11f0424 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_tables.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_tables.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Tables
------------------------------------- */

table.basic-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border: none;
  margin-bottom: 15px;
  th {
    background-color: \$primary-color;
    text-align: left;
    color: #fff;
    vertical-align: top;
    font-weight: 500;
    &:first-child {
      border-radius: \$global-border-radius 0 0 \$global-border-radius;;
    }
    &:last-child {
      border-radius: 0 \$global-border-radius \$global-border-radius 0;
    }
    padding: 15px 28px;
  }
  td {
    padding: 15px 28px;
  }
  tr:nth-child(odd) {
    background-color: #f4f4f4;
  }
  margin-bottom: 0;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
    th {
      display: none;
    }
    tr {
      display: block;
      margin-bottom: 0;
    }
    td {
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: 14px;
      text-align: right;
      &:before {
        content: attr(data-label);
        float: left;
        font-weight: 600;
      }
      &:last-child {
        border-bottom: 0;
      }
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_tables.scss";
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
/* Tables
------------------------------------- */

table.basic-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border: none;
  margin-bottom: 15px;
  th {
    background-color: \$primary-color;
    text-align: left;
    color: #fff;
    vertical-align: top;
    font-weight: 500;
    &:first-child {
      border-radius: \$global-border-radius 0 0 \$global-border-radius;;
    }
    &:last-child {
      border-radius: 0 \$global-border-radius \$global-border-radius 0;
    }
    padding: 15px 28px;
  }
  td {
    padding: 15px 28px;
  }
  tr:nth-child(odd) {
    background-color: #f4f4f4;
  }
  margin-bottom: 0;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
    th {
      display: none;
    }
    tr {
      display: block;
      margin-bottom: 0;
    }
    td {
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: 14px;
      text-align: right;
      &:before {
        content: attr(data-label);
        float: left;
        font-weight: 600;
      }
      &:last-child {
        border-bottom: 0;
      }
    }
  }
}", "@Publication/Front/sass/gui/_tables.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_tables.scss");
    }
}
