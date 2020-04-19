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

/* @Publication/Front/images/flags/lt.svg */
class __TwigTemplate_ae5a904fea12e8acc9ab8cff0bb2b3f5766507abb28de53fd5c99f21c3e442da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/lt.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/lt.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-lt\" width=\"640\" height=\"480\">
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" transform=\"scale(.64143 .96773)\">
    <rect width=\"1063\" height=\"708.7\" fill=\"#007308\" rx=\"0\" ry=\"0\" transform=\"scale(.93865 .69686)\"/>
    <rect width=\"1063\" height=\"236.2\" y=\"475.6\" fill=\"#bf0000\" rx=\"0\" ry=\"0\" transform=\"scale(.93865 .69686)\"/>
    <path fill=\"#ffb300\" d=\"M0 0h997.8v164.6H0z\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/lt.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-lt\" width=\"640\" height=\"480\">
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" transform=\"scale(.64143 .96773)\">
    <rect width=\"1063\" height=\"708.7\" fill=\"#007308\" rx=\"0\" ry=\"0\" transform=\"scale(.93865 .69686)\"/>
    <rect width=\"1063\" height=\"236.2\" y=\"475.6\" fill=\"#bf0000\" rx=\"0\" ry=\"0\" transform=\"scale(.93865 .69686)\"/>
    <path fill=\"#ffb300\" d=\"M0 0h997.8v164.6H0z\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/lt.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\lt.svg");
    }
}
