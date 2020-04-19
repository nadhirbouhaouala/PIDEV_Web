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

/* @Publication/Front/sass/gui/_ripple-effect.scss */
class __TwigTemplate_38fd3af92eeb9de9f04c7f3eecc97718581998d6299ef20be517bd0adf412c85 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_ripple-effect.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_ripple-effect.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Ripple Effect
------------------------------------- */

.ripple-effect-dark {
  overflow: hidden;
  position: relative;
  z-index: 1;
}

.ripple-effect {
  overflow: hidden;
  position: relative;
  z-index: 1;
  span.ripple-overlay {
    animation: ripple 0.9s;
    border-radius: 100%;
    background: #fff;
    height: 12px;
    position: absolute;
    width: 12px;
    line-height: 12px;
    opacity: 0.1;
    pointer-events: none;
  }
}

.ripple-effect-dark span.ripple-overlay {
  animation: ripple 0.9s;
  border-radius: 100%;
  background: #fff;
  height: 12px;
  position: absolute;
  width: 12px;
  line-height: 12px;
  opacity: 0.1;
  pointer-events: none;
  background: #000;
  opacity: 0.07;
}

@keyframes ripple {
  0% {
    -webkit-transform: scale(4);
    transform: scale(4);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(40);
    transform: scale(40);
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_ripple-effect.scss";
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
/* Ripple Effect
------------------------------------- */

.ripple-effect-dark {
  overflow: hidden;
  position: relative;
  z-index: 1;
}

.ripple-effect {
  overflow: hidden;
  position: relative;
  z-index: 1;
  span.ripple-overlay {
    animation: ripple 0.9s;
    border-radius: 100%;
    background: #fff;
    height: 12px;
    position: absolute;
    width: 12px;
    line-height: 12px;
    opacity: 0.1;
    pointer-events: none;
  }
}

.ripple-effect-dark span.ripple-overlay {
  animation: ripple 0.9s;
  border-radius: 100%;
  background: #fff;
  height: 12px;
  position: absolute;
  width: 12px;
  line-height: 12px;
  opacity: 0.1;
  pointer-events: none;
  background: #000;
  opacity: 0.07;
}

@keyframes ripple {
  0% {
    -webkit-transform: scale(4);
    transform: scale(4);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(40);
    transform: scale(40);
  }
}
", "@Publication/Front/sass/gui/_ripple-effect.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_ripple-effect.scss");
    }
}
