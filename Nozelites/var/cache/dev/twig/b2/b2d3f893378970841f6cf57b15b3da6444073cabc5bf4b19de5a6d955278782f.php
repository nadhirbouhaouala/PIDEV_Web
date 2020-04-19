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

/* @Publication/Front/images/flags/bj.svg */
class __TwigTemplate_3b13483870532179ba4290e28ce0b8e351b608110a52f9d08d3447234b39259a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/bj.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/bj.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-bj\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill=\"gray\" d=\"M67.6-154h666v666h-666z\"/>
    </clipPath>
  </defs>
  <g clip-path=\"url(#a)\" transform=\"matrix(.961 0 0 .7207 -65 111)\">
    <g fill-rule=\"evenodd\" stroke-width=\"1pt\">
      <path fill=\"#319400\" d=\"M0-154h333v666H0z\"/>
      <path fill=\"#ffd600\" d=\"M333-154h666v333H333z\"/>
      <path fill=\"#de2110\" d=\"M333 179h666v333H333z\"/>
    </g>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/bj.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-bj\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill=\"gray\" d=\"M67.6-154h666v666h-666z\"/>
    </clipPath>
  </defs>
  <g clip-path=\"url(#a)\" transform=\"matrix(.961 0 0 .7207 -65 111)\">
    <g fill-rule=\"evenodd\" stroke-width=\"1pt\">
      <path fill=\"#319400\" d=\"M0-154h333v666H0z\"/>
      <path fill=\"#ffd600\" d=\"M333-154h666v333H333z\"/>
      <path fill=\"#de2110\" d=\"M333 179h666v333H333z\"/>
    </g>
  </g>
</svg>
", "@Publication/Front/images/flags/bj.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\bj.svg");
    }
}
