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

/* @Publication/Front/images/flags/rw.svg */
class __TwigTemplate_ab6842daf1b14f76f5e2dd99024c30574a1fd7568213a08f7f71b1655823b904 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/rw.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/rw.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-rw\" width=\"640\" height=\"480\">
  <path fill=\"#20603d\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#fad201\" d=\"M0 0h640v360H0z\"/>
  <path fill=\"#00a1de\" d=\"M0 0h640v240H0z\"/>
  <g transform=\"translate(511 125.4) scale(.66667)\">
    <g id=\"b\">
      <path id=\"a\" fill=\"#e5be01\" d=\"M116.1 0L35.7 4.7l76.4 25.4-78.8-16.3L100.6 58l-72-36.2L82 82.1 21.9 28.6l36.2 72-44.3-67.3L30 112 4.7 35.7 0 116.1-1-1z\"/>
      <use width=\"100%\" height=\"100%\" transform=\"scale(1 -1)\" xlink:href=\"#a\"/>
    </g>
    <use width=\"100%\" height=\"100%\" transform=\"scale(-1 1)\" xlink:href=\"#b\"/>
    <circle r=\"34.3\" fill=\"#e5be01\" stroke=\"#00a1de\" stroke-width=\"3.4\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/rw.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-rw\" width=\"640\" height=\"480\">
  <path fill=\"#20603d\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#fad201\" d=\"M0 0h640v360H0z\"/>
  <path fill=\"#00a1de\" d=\"M0 0h640v240H0z\"/>
  <g transform=\"translate(511 125.4) scale(.66667)\">
    <g id=\"b\">
      <path id=\"a\" fill=\"#e5be01\" d=\"M116.1 0L35.7 4.7l76.4 25.4-78.8-16.3L100.6 58l-72-36.2L82 82.1 21.9 28.6l36.2 72-44.3-67.3L30 112 4.7 35.7 0 116.1-1-1z\"/>
      <use width=\"100%\" height=\"100%\" transform=\"scale(1 -1)\" xlink:href=\"#a\"/>
    </g>
    <use width=\"100%\" height=\"100%\" transform=\"scale(-1 1)\" xlink:href=\"#b\"/>
    <circle r=\"34.3\" fill=\"#e5be01\" stroke=\"#00a1de\" stroke-width=\"3.4\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/rw.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\rw.svg");
    }
}
