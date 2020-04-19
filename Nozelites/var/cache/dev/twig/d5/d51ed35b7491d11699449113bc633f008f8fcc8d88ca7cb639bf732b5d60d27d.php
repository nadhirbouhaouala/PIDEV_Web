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

/* @Publication/Front/images/flags/sr.svg */
class __TwigTemplate_ff95442cff63928e8a72d1c8878195ea5d17423cd0b20b333a71e6978ac093cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/sr.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/sr.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-sr\" width=\"640\" height=\"480\">
  <path fill=\"#377e3f\" d=\"M.1 0h640v480H.1z\"/>
  <path fill=\"#fff\" d=\"M.1 96h640v288H.1z\"/>
  <path fill=\"#b40a2d\" d=\"M.1 144h640v192H.1z\"/>
  <path fill=\"#ecc81d\" d=\"M320 153.2l56.4 173.6-147.7-107.3h182.6L263.6 326.8z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/sr.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-sr\" width=\"640\" height=\"480\">
  <path fill=\"#377e3f\" d=\"M.1 0h640v480H.1z\"/>
  <path fill=\"#fff\" d=\"M.1 96h640v288H.1z\"/>
  <path fill=\"#b40a2d\" d=\"M.1 144h640v192H.1z\"/>
  <path fill=\"#ecc81d\" d=\"M320 153.2l56.4 173.6-147.7-107.3h182.6L263.6 326.8z\"/>
</svg>
", "@Publication/Front/images/flags/sr.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\sr.svg");
    }
}
