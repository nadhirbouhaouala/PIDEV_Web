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

/* @Publication/Front/sass/gui/_back-to-top.scss */
class __TwigTemplate_d28f1849812c2459f14d93f2752089a4a520012344ce45448cdcd8d733cbde61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_back-to-top.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_back-to-top.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Back to top
------------------------------------- */
#backtotop {
  position: fixed;
  right: 0;
  opacity: 0;
  visibility: hidden;
  bottom: 25px;
  margin: 0 25px 0 0;
  z-index: 999;
  transition: 0.35s;
  transform: translateY(10px);
  &.visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
  a {
    text-decoration: none;
    border: 0 none;
    display: block;
    width: 46px;
    height: 46px;
    background-color: \$primary-color;
    opacity: 1;
    transition: all 0.3s;
    border-radius: 4px;
    text-align: center;
    font-size: 26px;
  }
}

body #backtotop a {
  color: #fff;
}

#backtotop a:after {
  content: \"\\e931\";
  font-family: \"Feather-Icons\";
  position: relative;
  display: block;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

  @media (max-width: 768px) { #backtotop { display: none; } }";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_back-to-top.scss";
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
/* Back to top
------------------------------------- */
#backtotop {
  position: fixed;
  right: 0;
  opacity: 0;
  visibility: hidden;
  bottom: 25px;
  margin: 0 25px 0 0;
  z-index: 999;
  transition: 0.35s;
  transform: translateY(10px);
  &.visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
  a {
    text-decoration: none;
    border: 0 none;
    display: block;
    width: 46px;
    height: 46px;
    background-color: \$primary-color;
    opacity: 1;
    transition: all 0.3s;
    border-radius: 4px;
    text-align: center;
    font-size: 26px;
  }
}

body #backtotop a {
  color: #fff;
}

#backtotop a:after {
  content: \"\\e931\";
  font-family: \"Feather-Icons\";
  position: relative;
  display: block;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

  @media (max-width: 768px) { #backtotop { display: none; } }", "@Publication/Front/sass/gui/_back-to-top.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_back-to-top.scss");
    }
}
