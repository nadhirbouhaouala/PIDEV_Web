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

/* @Publication/Front/sass/gui/_radio-button.scss */
class __TwigTemplate_fb39bc1ec7129f1d7cd076b4169a259700d29453af1b341a38796285df5faa58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_radio-button.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_radio-button.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Radio Button
------------------------------------- */

.radio {
  display: inline-block;
  vertical-align: top;
  label {
    margin: 3px 0;
    cursor: pointer;
    position: relative;
    padding-left: 29px;
    line-height: 25px;
  }
  input[type=\"radio\"] {
    position: absolute;
    opacity: 0;
    + label .radio-label {
      content: '';
      background: #fff;
      border-radius: 100%;
      border: 2px solid #b4b4b4;
      display: inline-block;
      width: 18px;
      height: 18px;
      position: relative;
      margin-right: 5px;
      vertical-align: top;
      cursor: pointer;
      text-align: center;
      transition: all 250ms ease;
      background-color: #fff;
      box-shadow: inset 0 0 0 8px #fff;
      z-index: 100;
      position: absolute;
      top: 2px;
      left: 0;
      &:after {
        background-color: \$primary-color;
        content: \"\";
        top: 3px;
        left: 0;
        right: 0;
        margin: 0 auto;
        position: absolute;
        opacity: 1;
        transition: 0.3s;
        border-radius: 50%;
        transform: scale(0);
        position: absolute;
        top: 0;
        left: 0;
        box-sizing: border-box;
        width: 100%;
        height: 100%;
        z-index: 99;
      }
    }
    &:checked + label .radio-label {
      background-color: \$primary-color;
      border-color: \$primary-color;
      box-shadow: inset 0 0 0 3px #fff;
    }
  }
}

.radio-label:before {
  content: \"\";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  background-color: transparent;
  display: block;
}

.interactive-effect label .radio-label:before {
  animation: radius-shadow 0.4s;
}

@keyframes radius-shadow {
  0% {
    box-shadow: 0 0 0 0 rgba(\$primary-color, 0.4);
  }

  100% {
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  }
}


.small-label {
  border-radius: \$global-border-radius;
  display: inline-block;
  background: #e0f5d7;
  color: #449626;
  padding: 0 8px;
  line-height: \$body-line-height;
  height: 26px;
  margin-left: 5px;
  position: relative;
  top: -1px;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_radio-button.scss";
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
/* Radio Button
------------------------------------- */

.radio {
  display: inline-block;
  vertical-align: top;
  label {
    margin: 3px 0;
    cursor: pointer;
    position: relative;
    padding-left: 29px;
    line-height: 25px;
  }
  input[type=\"radio\"] {
    position: absolute;
    opacity: 0;
    + label .radio-label {
      content: '';
      background: #fff;
      border-radius: 100%;
      border: 2px solid #b4b4b4;
      display: inline-block;
      width: 18px;
      height: 18px;
      position: relative;
      margin-right: 5px;
      vertical-align: top;
      cursor: pointer;
      text-align: center;
      transition: all 250ms ease;
      background-color: #fff;
      box-shadow: inset 0 0 0 8px #fff;
      z-index: 100;
      position: absolute;
      top: 2px;
      left: 0;
      &:after {
        background-color: \$primary-color;
        content: \"\";
        top: 3px;
        left: 0;
        right: 0;
        margin: 0 auto;
        position: absolute;
        opacity: 1;
        transition: 0.3s;
        border-radius: 50%;
        transform: scale(0);
        position: absolute;
        top: 0;
        left: 0;
        box-sizing: border-box;
        width: 100%;
        height: 100%;
        z-index: 99;
      }
    }
    &:checked + label .radio-label {
      background-color: \$primary-color;
      border-color: \$primary-color;
      box-shadow: inset 0 0 0 3px #fff;
    }
  }
}

.radio-label:before {
  content: \"\";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  background-color: transparent;
  display: block;
}

.interactive-effect label .radio-label:before {
  animation: radius-shadow 0.4s;
}

@keyframes radius-shadow {
  0% {
    box-shadow: 0 0 0 0 rgba(\$primary-color, 0.4);
  }

  100% {
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  }
}


.small-label {
  border-radius: \$global-border-radius;
  display: inline-block;
  background: #e0f5d7;
  color: #449626;
  padding: 0 8px;
  line-height: \$body-line-height;
  height: 26px;
  margin-left: 5px;
  position: relative;
  top: -1px;
}", "@Publication/Front/sass/gui/_radio-button.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_radio-button.scss");
    }
}
