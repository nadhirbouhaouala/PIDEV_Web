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

/* @Publication/Front/images/flags/bb.svg */
class __TwigTemplate_f27ef66b8bbe77092a4852b09d7f4a35bc8a855e6d7e7c80de5dca78ccea5d7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/bb.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/bb.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-bb\" width=\"640\" height=\"480\">
  <path fill=\"#00267f\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#ffc726\" d=\"M213.3 0h213.4v480H213.3z\"/>
  <path id=\"a\" d=\"M319.8 135.5c-7 19-14 38.6-29.2 53.7 4.7-1.6 13-3 18.2-2.8v79.5l-22.4 3.3c-.8 0-1-1.3-1-3-2.2-24.7-8-45.5-14.8-67-.5-2.9-9-14-2.4-12 .8 0 9.5 3.6 8.2 1.9a85 85 0 0 0-46.4-24c-1.5-.3-2.4.5-1 2.2 22.4 34.6 41.3 75.5 41.1 124 8.8 0 30-5.2 38.7-5.2v56.1H320l2.5-156.7z\"/>
  <use width=\"100%\" height=\"100%\" transform=\"matrix(-1 0 0 1 639.5 0)\" xlink:href=\"#a\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/bb.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-bb\" width=\"640\" height=\"480\">
  <path fill=\"#00267f\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#ffc726\" d=\"M213.3 0h213.4v480H213.3z\"/>
  <path id=\"a\" d=\"M319.8 135.5c-7 19-14 38.6-29.2 53.7 4.7-1.6 13-3 18.2-2.8v79.5l-22.4 3.3c-.8 0-1-1.3-1-3-2.2-24.7-8-45.5-14.8-67-.5-2.9-9-14-2.4-12 .8 0 9.5 3.6 8.2 1.9a85 85 0 0 0-46.4-24c-1.5-.3-2.4.5-1 2.2 22.4 34.6 41.3 75.5 41.1 124 8.8 0 30-5.2 38.7-5.2v56.1H320l2.5-156.7z\"/>
  <use width=\"100%\" height=\"100%\" transform=\"matrix(-1 0 0 1 639.5 0)\" xlink:href=\"#a\"/>
</svg>
", "@Publication/Front/images/flags/bb.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\bb.svg");
    }
}
