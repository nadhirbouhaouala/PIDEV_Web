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

/* @Publication/Front/sass/gui/_notify-box.scss */
class __TwigTemplate_a376f3be9174f752ce32f0640a06db9ffdf9405e72e651b10edf6044e4a9d4c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_notify-box.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_notify-box.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Notify Box
------------------------------------- */

.notify-box {
  display: block;
  width: 100%;
  background-color: #f2f2f2;
  border-radius: \$global-border-radius;
  padding: 15px 25px;
  position: relative;
  line-height: 28px;
  min-height: 59px;
  label {
    margin-bottom: 0;
    cursor: pointer;
  }
  .switch-button {
    margin-right: 10px;
  }
}

.sort-by {
  .bootstrap-select {
    position: relative;
    right: 0;
    top: 0;
  }
  .dropdown-menu {
    box-shadow: 0 0 4px 0px rgba(0, 0, 0, 0.14);
  }
  .bootstrap-select {
    &.btn-group button {
      flex: 1;
      position: relative;
      right: 0;
      top: 4px;
      font-weight: 600;
      margin-left: 10px;
      width: auto;
      padding: 0;
      padding-right: 12px;
      background-color: transparent;
      box-shadow: none;
      height: 20px;
      color: \$body-heading-color;
    }
    &:not([class*=\"col-\"]):not([class*=\"form-control\"]):not(.input-group-btn) {
      width: auto;
    }
    &.btn-group .dropdown-toggle .caret {
      right: 0;
    }
    .dropdown-menu {
      padding-top: 15px;
      top: 40px;
      right: 0;
      left: auto;
      position: absolute;
      min-width: 160px !important;
      flex: 1;
    }
    &.open:before {
      display: none;
    }
  }
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  position: relative;
  float: right;
}

/* Notify Box Media Queries*/
@media (max-width: 768px) {
  .notify-box {
    margin-bottom: 90px;
    .sort-by {
      position: absolute;
      margin-top: 35px;
      left: 0;
      .bootstrap-select .dropdown-menu {
        left: 0;
        right: auto;
      }
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_notify-box.scss";
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
/* Notify Box
------------------------------------- */

.notify-box {
  display: block;
  width: 100%;
  background-color: #f2f2f2;
  border-radius: \$global-border-radius;
  padding: 15px 25px;
  position: relative;
  line-height: 28px;
  min-height: 59px;
  label {
    margin-bottom: 0;
    cursor: pointer;
  }
  .switch-button {
    margin-right: 10px;
  }
}

.sort-by {
  .bootstrap-select {
    position: relative;
    right: 0;
    top: 0;
  }
  .dropdown-menu {
    box-shadow: 0 0 4px 0px rgba(0, 0, 0, 0.14);
  }
  .bootstrap-select {
    &.btn-group button {
      flex: 1;
      position: relative;
      right: 0;
      top: 4px;
      font-weight: 600;
      margin-left: 10px;
      width: auto;
      padding: 0;
      padding-right: 12px;
      background-color: transparent;
      box-shadow: none;
      height: 20px;
      color: \$body-heading-color;
    }
    &:not([class*=\"col-\"]):not([class*=\"form-control\"]):not(.input-group-btn) {
      width: auto;
    }
    &.btn-group .dropdown-toggle .caret {
      right: 0;
    }
    .dropdown-menu {
      padding-top: 15px;
      top: 40px;
      right: 0;
      left: auto;
      position: absolute;
      min-width: 160px !important;
      flex: 1;
    }
    &.open:before {
      display: none;
    }
  }
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  position: relative;
  float: right;
}

/* Notify Box Media Queries*/
@media (max-width: 768px) {
  .notify-box {
    margin-bottom: 90px;
    .sort-by {
      position: absolute;
      margin-top: 35px;
      left: 0;
      .bootstrap-select .dropdown-menu {
        left: 0;
        right: auto;
      }
    }
  }
}", "@Publication/Front/sass/gui/_notify-box.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_notify-box.scss");
    }
}
