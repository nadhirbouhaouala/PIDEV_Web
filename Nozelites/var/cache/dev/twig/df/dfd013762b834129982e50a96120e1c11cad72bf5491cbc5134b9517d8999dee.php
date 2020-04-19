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

/* @Publication/Front/images/flags/hn.svg */
class __TwigTemplate_0fe8b8ddd97ff4b5bbdcb9536d43e47136b9fdbc436ea874a38ab94df39ee93a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/hn.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/hn.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-hn\" width=\"640\" height=\"480\">
  <path fill=\"#0073cf\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#fff\" d=\"M0 160h640v160H0z\"/>
  <g id=\"c\" fill=\"#0073cf\" transform=\"translate(320 240) scale(26.66665)\">
    <g id=\"b\">
      <path id=\"a\" d=\"M-.3 0l.5.1L0-1z\"/>
      <use width=\"100%\" height=\"100%\" transform=\"scale(-1 1)\" xlink:href=\"#a\"/>
    </g>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(72)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-72)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(144)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-144)\" xlink:href=\"#b\"/>
  </g>
  <use width=\"100%\" height=\"100%\" transform=\"translate(133.3 -42.7)\" xlink:href=\"#c\"/>
  <use width=\"100%\" height=\"100%\" transform=\"translate(133.3 37.3)\" xlink:href=\"#c\"/>
  <use width=\"100%\" height=\"100%\" transform=\"translate(-133.3 -42.7)\" xlink:href=\"#c\"/>
  <use width=\"100%\" height=\"100%\" transform=\"translate(-133.3 37.3)\" xlink:href=\"#c\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/hn.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-hn\" width=\"640\" height=\"480\">
  <path fill=\"#0073cf\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#fff\" d=\"M0 160h640v160H0z\"/>
  <g id=\"c\" fill=\"#0073cf\" transform=\"translate(320 240) scale(26.66665)\">
    <g id=\"b\">
      <path id=\"a\" d=\"M-.3 0l.5.1L0-1z\"/>
      <use width=\"100%\" height=\"100%\" transform=\"scale(-1 1)\" xlink:href=\"#a\"/>
    </g>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(72)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-72)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(144)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-144)\" xlink:href=\"#b\"/>
  </g>
  <use width=\"100%\" height=\"100%\" transform=\"translate(133.3 -42.7)\" xlink:href=\"#c\"/>
  <use width=\"100%\" height=\"100%\" transform=\"translate(133.3 37.3)\" xlink:href=\"#c\"/>
  <use width=\"100%\" height=\"100%\" transform=\"translate(-133.3 -42.7)\" xlink:href=\"#c\"/>
  <use width=\"100%\" height=\"100%\" transform=\"translate(-133.3 37.3)\" xlink:href=\"#c\"/>
</svg>
", "@Publication/Front/images/flags/hn.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\hn.svg");
    }
}
