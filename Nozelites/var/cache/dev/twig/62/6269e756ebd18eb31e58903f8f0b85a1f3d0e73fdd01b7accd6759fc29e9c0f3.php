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

/* @Publication/Front/sass/gui/_leave-rating-stars.scss */
class __TwigTemplate_598145adaaf8c0ceeb5c2e7234506a9fdccc6102836be8ab11e640ab3947027d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_leave-rating-stars.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_leave-rating-stars.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Leave Rating Stars
------------------------------------- */

.leave-rating {
  height: 24px;
  float: left;
  position: relative;
  &:hover input[type=\"radio\"]:checked ~ label {
    color: #dadada;
  }
  input[type=\"radio\"] {
    display: inline-block;
    width: 1px;
    position: absolute;
    opacity: 0;
    pointer-events: none;
    height: 100%;
    margin-left: 50%;
    left: 0;
    top: 0;
    transform: translateX(-50%);
    &:checked ~ label {
      color: #ffc600;
    }
  }
  label {
    font-size: 24px;
    float: right;
    letter-spacing: 0px;
    color: #dadada;
    cursor: pointer;
    transition: 0.3s;
    &:hover {
      color: #ffc600 !important;
      ~ label {
        color: #ffc600 !important;
      }
    }
  }
}

.leave-rating-title {
  display: block;
  margin: 0 0 4px 0;
}

.welcome-text {
  .leave-rating-container {
    text-align: center;
    margin: 0 auto;
    margin-top: 15px;
    left: 50%;
    width: 100%;
    display: block;
  }
  .leave-rating {
    position: relative;
    left: 50%;
    transform: translateX(-50%) scale(1.2);
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_leave-rating-stars.scss";
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
/* Leave Rating Stars
------------------------------------- */

.leave-rating {
  height: 24px;
  float: left;
  position: relative;
  &:hover input[type=\"radio\"]:checked ~ label {
    color: #dadada;
  }
  input[type=\"radio\"] {
    display: inline-block;
    width: 1px;
    position: absolute;
    opacity: 0;
    pointer-events: none;
    height: 100%;
    margin-left: 50%;
    left: 0;
    top: 0;
    transform: translateX(-50%);
    &:checked ~ label {
      color: #ffc600;
    }
  }
  label {
    font-size: 24px;
    float: right;
    letter-spacing: 0px;
    color: #dadada;
    cursor: pointer;
    transition: 0.3s;
    &:hover {
      color: #ffc600 !important;
      ~ label {
        color: #ffc600 !important;
      }
    }
  }
}

.leave-rating-title {
  display: block;
  margin: 0 0 4px 0;
}

.welcome-text {
  .leave-rating-container {
    text-align: center;
    margin: 0 auto;
    margin-top: 15px;
    left: 50%;
    width: 100%;
    display: block;
  }
  .leave-rating {
    position: relative;
    left: 50%;
    transform: translateX(-50%) scale(1.2);
  }
}", "@Publication/Front/sass/gui/_leave-rating-stars.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_leave-rating-stars.scss");
    }
}
