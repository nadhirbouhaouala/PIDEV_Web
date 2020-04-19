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

/* @Publication/Front/sass/gui/_checkbox.scss */
class __TwigTemplate_14c55f8c723a2b9e579538e21e1f1795ec4d250abb90ac797da0a785ee0f86b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_checkbox.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_checkbox.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Checkbox
------------------------------------- */

.checkbox {
  display: inline-block;
  margin-bottom: 0;
  input {
    padding: 0;
    height: initial;
    width: initial;
    margin-bottom: 0;
    display: none;
    cursor: pointer;
  }
  label {
    position: relative;
    cursor: pointer;
    padding-left: 30px;
    line-height: 25px;
    span.checkbox-icon {
      content: '';
      -webkit-appearance: none;
      background-color: transparent;
      border: 2px solid #b4b4b4;
      height: 20px;
      width: 20px;
      display: inline-block;
      position: relative;
      vertical-align: middle;
      cursor: pointer;
      margin-right: 5px;
      border-radius: \$global-border-radius;
      transition: 0.3s;
      position: absolute;
      left: 0;
      top: 1px;
    }
  }
  input {
    + label span.checkbox-icon:after {
      position: absolute;
      top: 2px;
      left: 0;
      right: 0;
      margin: 0 auto;
      opacity: 0;
      content: '';
      display: block;
      width: 6px;
      height: 10px;
      border: solid #fff;
      border-width: 0 2px 2px 0;
      transform: scale(0.5) rotate(45deg);
      transition: all 0.35s cubic-bezier(0.3, -0.41, 0.19, 2), opacity 0.3s;
    }
    &:checked + label span.checkbox-icon {
      border-color: \$primary-color;
      background-color: \$primary-color;
      &:after {
        transform: scale(1) rotate(45deg);
        opacity: 1;
      }
    }
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_checkbox.scss";
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
/* Checkbox
------------------------------------- */

.checkbox {
  display: inline-block;
  margin-bottom: 0;
  input {
    padding: 0;
    height: initial;
    width: initial;
    margin-bottom: 0;
    display: none;
    cursor: pointer;
  }
  label {
    position: relative;
    cursor: pointer;
    padding-left: 30px;
    line-height: 25px;
    span.checkbox-icon {
      content: '';
      -webkit-appearance: none;
      background-color: transparent;
      border: 2px solid #b4b4b4;
      height: 20px;
      width: 20px;
      display: inline-block;
      position: relative;
      vertical-align: middle;
      cursor: pointer;
      margin-right: 5px;
      border-radius: \$global-border-radius;
      transition: 0.3s;
      position: absolute;
      left: 0;
      top: 1px;
    }
  }
  input {
    + label span.checkbox-icon:after {
      position: absolute;
      top: 2px;
      left: 0;
      right: 0;
      margin: 0 auto;
      opacity: 0;
      content: '';
      display: block;
      width: 6px;
      height: 10px;
      border: solid #fff;
      border-width: 0 2px 2px 0;
      transform: scale(0.5) rotate(45deg);
      transition: all 0.35s cubic-bezier(0.3, -0.41, 0.19, 2), opacity 0.3s;
    }
    &:checked + label span.checkbox-icon {
      border-color: \$primary-color;
      background-color: \$primary-color;
      &:after {
        transform: scale(1) rotate(45deg);
        opacity: 1;
      }
    }
  }
}
", "@Publication/Front/sass/gui/_checkbox.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_checkbox.scss");
    }
}
