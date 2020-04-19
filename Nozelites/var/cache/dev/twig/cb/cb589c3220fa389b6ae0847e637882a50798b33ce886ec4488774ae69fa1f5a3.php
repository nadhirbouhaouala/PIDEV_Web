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

/* @Publication/Front/images/flags/cg.svg */
class __TwigTemplate_a002a0d392201b7f41567c783d7b04330aad2102b01d51a8a97cfc917ebb96ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/cg.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/cg.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-cg\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M-79.5 32h640v480h-640z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" clip-path=\"url(#a)\" transform=\"translate(79.5 -32)\">
    <path fill=\"#ff0\" d=\"M-119.5 32h720v480h-720z\"/>
    <path fill=\"#00ca00\" d=\"M-119.5 32v480l480-480h-480z\"/>
    <path fill=\"red\" d=\"M120.5 512h480V32l-480 480z\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/cg.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-cg\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M-79.5 32h640v480h-640z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" clip-path=\"url(#a)\" transform=\"translate(79.5 -32)\">
    <path fill=\"#ff0\" d=\"M-119.5 32h720v480h-720z\"/>
    <path fill=\"#00ca00\" d=\"M-119.5 32v480l480-480h-480z\"/>
    <path fill=\"red\" d=\"M120.5 512h480V32l-480 480z\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/cg.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\cg.svg");
    }
}
