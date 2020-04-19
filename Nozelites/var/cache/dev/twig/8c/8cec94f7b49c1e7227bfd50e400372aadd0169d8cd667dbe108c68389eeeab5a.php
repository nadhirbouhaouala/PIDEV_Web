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

/* @Publication/Front/images/flags/st.svg */
class __TwigTemplate_4c6a88f62f4947bc66df34ac4ae8eaf5624db8c84cce0eaf71608ff1306770bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/st.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/st.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-st\" width=\"640\" height=\"480\">
  <path fill=\"#12ad2b\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#ffce00\" d=\"M0 137.1h640V343H0z\"/>
  <path fill=\"#d21034\" d=\"M0 0v480l240-240\"/>
  <g id=\"c\" transform=\"translate(351.6 240) scale(.34286)\">
    <g id=\"b\">
      <path id=\"a\" d=\"M0-200V0h100\" transform=\"rotate(18 0 -200)\"/>
      <use width=\"100%\" height=\"100%\" transform=\"scale(-1 1)\" xlink:href=\"#a\"/>
    </g>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(72)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(144)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-144)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-72)\" xlink:href=\"#b\"/>
  </g>
  <use width=\"100%\" height=\"100%\" x=\"700\" transform=\"translate(-523.2)\" xlink:href=\"#c\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/st.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"flag-icon-css-st\" width=\"640\" height=\"480\">
  <path fill=\"#12ad2b\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#ffce00\" d=\"M0 137.1h640V343H0z\"/>
  <path fill=\"#d21034\" d=\"M0 0v480l240-240\"/>
  <g id=\"c\" transform=\"translate(351.6 240) scale(.34286)\">
    <g id=\"b\">
      <path id=\"a\" d=\"M0-200V0h100\" transform=\"rotate(18 0 -200)\"/>
      <use width=\"100%\" height=\"100%\" transform=\"scale(-1 1)\" xlink:href=\"#a\"/>
    </g>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(72)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(144)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-144)\" xlink:href=\"#b\"/>
    <use width=\"100%\" height=\"100%\" transform=\"rotate(-72)\" xlink:href=\"#b\"/>
  </g>
  <use width=\"100%\" height=\"100%\" x=\"700\" transform=\"translate(-523.2)\" xlink:href=\"#c\"/>
</svg>
", "@Publication/Front/images/flags/st.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\st.svg");
    }
}
