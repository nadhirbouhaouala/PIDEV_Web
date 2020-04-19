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

/* @Publication/Front/images/flags/bv.svg */
class __TwigTemplate_21ed03a841e264c4a43873b7d521bbcaf9600f50ef6646565dc770aeaad56aec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/bv.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/bv.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-bv\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M0 0h640v480H0z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" clip-path=\"url(#a)\">
    <path fill=\"#fff\" d=\"M-28 0h699.7v512H-28z\"/>
    <path fill=\"#d72828\" d=\"M-53-77.8h218.7v276.2H-53zM289.4-.6h381v199h-381zM-27.6 320h190.4v190.3H-27.6zm319.6 2.1h378.3v188.2H292z\"/>
    <path fill=\"#003897\" d=\"M196.7-25.4H261v535.7h-64.5z\"/>
    <path fill=\"#003897\" d=\"M-27.6 224.8h698v63.5h-698z\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/bv.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-bv\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M0 0h640v480H0z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" clip-path=\"url(#a)\">
    <path fill=\"#fff\" d=\"M-28 0h699.7v512H-28z\"/>
    <path fill=\"#d72828\" d=\"M-53-77.8h218.7v276.2H-53zM289.4-.6h381v199h-381zM-27.6 320h190.4v190.3H-27.6zm319.6 2.1h378.3v188.2H292z\"/>
    <path fill=\"#003897\" d=\"M196.7-25.4H261v535.7h-64.5z\"/>
    <path fill=\"#003897\" d=\"M-27.6 224.8h698v63.5h-698z\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/bv.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\bv.svg");
    }
}
