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

/* @Publication/Front/images/flags/tj.svg */
class __TwigTemplate_4e09e6ef663976b6ffbdbe11834cc3fa70ab6540f70e33c08a86153981b62d81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/tj.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/tj.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-tj\" width=\"640\" height=\"480\">
  <path fill=\"#060\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#fff\" d=\"M0 0h640v342.9H0z\"/>
  <path fill=\"#c00\" d=\"M0 0h640v137.1H0z\"/>
  <path fill=\"#f8c300\" d=\"M300.8 233.6a8.6 8.6 0 0 1 16 4V272h6.4v-34.3a8.6 8.6 0 0 1 16-4 20.2 20.2 0 1 0-38.4 0\"/>
  <path fill=\"#fff\" d=\"M305.4 224.7a13.7 13.7 0 0 1 14.6 6.5 13.7 13.7 0 0 1 14.6-6.5 14.7 14.7 0 0 0-29.2 0\"/>
  <path id=\"a\" fill=\"#f8c300\" d=\"M316.8 258.3a26 26 0 0 1-43.8 16.6 27 27 0 0 1-41 12c2.5 25 40 19.9 42.8-4.4 11.7 20.7 37.6 14.7 45.2-10.6z\"/>
  <use width=\"100%\" height=\"100%\" fill=\"#f8c300\" transform=\"matrix(-1 0 0 1 640 0)\" xlink:href=\"#a\"/>
  <path id=\"b\" fill=\"#f8c300\" d=\"M291.8 302.6c-5.3 11.3-15.7 13.2-24.8 4.1 0 0 3.6-2.6 7.6-3.3-.8-3.1.7-7.5 2.9-9.8a15 15 0 0 1 6.1 8.1c5.5-.7 8.2 1 8.2 1z\"/>
  <use width=\"100%\" height=\"100%\" fill=\"#f8c300\" transform=\"rotate(9.4 320 551.3)\" xlink:href=\"#b\"/>
  <use width=\"100%\" height=\"100%\" fill=\"#f8c300\" transform=\"rotate(18.7 320 551.3)\" xlink:href=\"#b\"/>
  <path fill=\"none\" stroke=\"#f8c300\" stroke-width=\"11\" d=\"M253.5 327.8a233.1 233.1 0 0 1 133 0\"/>
  <g fill=\"#f8c300\" transform=\"translate(320 164.6) scale(.68571)\">
    <path id=\"c\" d=\"M301930 415571l-790463-574305h977066l-790463 574305L0-513674z\" transform=\"scale(.00005)\"/>
  </g>
  <g id=\"d\" fill=\"#f8c300\" transform=\"translate(320 260.6) scale(.68571)\">
    <use width=\"100%\" height=\"100%\" transform=\"translate(-70 -121.2)\" xlink:href=\"#c\"/>
    <use width=\"100%\" height=\"100%\" transform=\"translate(-121.2 -70)\" xlink:href=\"#c\"/>
    <use width=\"100%\" height=\"100%\" transform=\"translate(-140)\" xlink:href=\"#c\"/>
  </g>
  <use width=\"100%\" height=\"100%\" fill=\"#f8c300\" transform=\"matrix(-1 0 0 1 640 0)\" xlink:href=\"#d\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/tj.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-tj\" width=\"640\" height=\"480\">
  <path fill=\"#060\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#fff\" d=\"M0 0h640v342.9H0z\"/>
  <path fill=\"#c00\" d=\"M0 0h640v137.1H0z\"/>
  <path fill=\"#f8c300\" d=\"M300.8 233.6a8.6 8.6 0 0 1 16 4V272h6.4v-34.3a8.6 8.6 0 0 1 16-4 20.2 20.2 0 1 0-38.4 0\"/>
  <path fill=\"#fff\" d=\"M305.4 224.7a13.7 13.7 0 0 1 14.6 6.5 13.7 13.7 0 0 1 14.6-6.5 14.7 14.7 0 0 0-29.2 0\"/>
  <path id=\"a\" fill=\"#f8c300\" d=\"M316.8 258.3a26 26 0 0 1-43.8 16.6 27 27 0 0 1-41 12c2.5 25 40 19.9 42.8-4.4 11.7 20.7 37.6 14.7 45.2-10.6z\"/>
  <use width=\"100%\" height=\"100%\" fill=\"#f8c300\" transform=\"matrix(-1 0 0 1 640 0)\" xlink:href=\"#a\"/>
  <path id=\"b\" fill=\"#f8c300\" d=\"M291.8 302.6c-5.3 11.3-15.7 13.2-24.8 4.1 0 0 3.6-2.6 7.6-3.3-.8-3.1.7-7.5 2.9-9.8a15 15 0 0 1 6.1 8.1c5.5-.7 8.2 1 8.2 1z\"/>
  <use width=\"100%\" height=\"100%\" fill=\"#f8c300\" transform=\"rotate(9.4 320 551.3)\" xlink:href=\"#b\"/>
  <use width=\"100%\" height=\"100%\" fill=\"#f8c300\" transform=\"rotate(18.7 320 551.3)\" xlink:href=\"#b\"/>
  <path fill=\"none\" stroke=\"#f8c300\" stroke-width=\"11\" d=\"M253.5 327.8a233.1 233.1 0 0 1 133 0\"/>
  <g fill=\"#f8c300\" transform=\"translate(320 164.6) scale(.68571)\">
    <path id=\"c\" d=\"M301930 415571l-790463-574305h977066l-790463 574305L0-513674z\" transform=\"scale(.00005)\"/>
  </g>
  <g id=\"d\" fill=\"#f8c300\" transform=\"translate(320 260.6) scale(.68571)\">
    <use width=\"100%\" height=\"100%\" transform=\"translate(-70 -121.2)\" xlink:href=\"#c\"/>
    <use width=\"100%\" height=\"100%\" transform=\"translate(-121.2 -70)\" xlink:href=\"#c\"/>
    <use width=\"100%\" height=\"100%\" transform=\"translate(-140)\" xlink:href=\"#c\"/>
  </g>
  <use width=\"100%\" height=\"100%\" fill=\"#f8c300\" transform=\"matrix(-1 0 0 1 640 0)\" xlink:href=\"#d\"/>
</svg>
", "@Publication/Front/images/flags/tj.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\tj.svg");
    }
}
