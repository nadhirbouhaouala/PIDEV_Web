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

/* @Publication/Front/images/flags/in.svg */
class __TwigTemplate_b27cffd33fe74bdea1438d5ba72097137b218b84f20ef8b3fb8421949d7fbae5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/in.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/in.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-in\" width=\"640\" height=\"480\">
  <path fill=\"#f93\" d=\"M0 0h640v160H0z\"/>
  <path fill=\"#fff\" d=\"M0 160h640v160H0z\"/>
  <path fill=\"#128807\" d=\"M0 320h640v160H0z\"/>
  <g transform=\"matrix(3.2 0 0 3.2 320 240)\">
    <circle r=\"20\" fill=\"#008\"/>
    <circle r=\"17.5\" fill=\"#fff\"/>
    <circle r=\"3.5\" fill=\"#008\"/>
    <g id=\"d\">
      <g id=\"c\">
        <g id=\"b\">
          <g id=\"a\" fill=\"#008\">
            <circle r=\".9\" transform=\"rotate(7.5 -8.8 133.5)\"/>
            <path d=\"M0 17.5L.6 7 0 2l-.6 5L0 17.5z\"/>
          </g>
          <use width=\"100%\" height=\"100%\" transform=\"rotate(15)\" xlink:href=\"#a\"/>
        </g>
        <use width=\"100%\" height=\"100%\" transform=\"rotate(30)\" xlink:href=\"#b\"/>
      </g>
      <use width=\"100%\" height=\"100%\" transform=\"rotate(60)\" xlink:href=\"#c\"/>
    </g>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(120)\" xlink:href=\"#d\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-120)\" xlink:href=\"#d\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/in.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-in\" width=\"640\" height=\"480\">
  <path fill=\"#f93\" d=\"M0 0h640v160H0z\"/>
  <path fill=\"#fff\" d=\"M0 160h640v160H0z\"/>
  <path fill=\"#128807\" d=\"M0 320h640v160H0z\"/>
  <g transform=\"matrix(3.2 0 0 3.2 320 240)\">
    <circle r=\"20\" fill=\"#008\"/>
    <circle r=\"17.5\" fill=\"#fff\"/>
    <circle r=\"3.5\" fill=\"#008\"/>
    <g id=\"d\">
      <g id=\"c\">
        <g id=\"b\">
          <g id=\"a\" fill=\"#008\">
            <circle r=\".9\" transform=\"rotate(7.5 -8.8 133.5)\"/>
            <path d=\"M0 17.5L.6 7 0 2l-.6 5L0 17.5z\"/>
          </g>
          <use width=\"100%\" height=\"100%\" transform=\"rotate(15)\" xlink:href=\"#a\"/>
        </g>
        <use width=\"100%\" height=\"100%\" transform=\"rotate(30)\" xlink:href=\"#b\"/>
      </g>
      <use width=\"100%\" height=\"100%\" transform=\"rotate(60)\" xlink:href=\"#c\"/>
    </g>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(120)\" xlink:href=\"#d\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-120)\" xlink:href=\"#d\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/in.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\in.svg");
    }
}
