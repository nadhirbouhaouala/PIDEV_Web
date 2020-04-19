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

/* @Publication/Front/images/flags/gm.svg */
class __TwigTemplate_e9ecabfc82b6254dfb572ff5e31c9479094c61bf257714013e3816bd337e85b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/gm.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/gm.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-gm\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M0-48h640v480H0z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" clip-path=\"url(#a)\" transform=\"translate(0 48)\">
    <path fill=\"red\" d=\"M0-128h640V85.3H0z\"/>
    <path fill=\"#fff\" d=\"M0 85.3h640V121H0z\"/>
    <path fill=\"#009\" d=\"M0 120.9h640V263H0z\"/>
    <path fill=\"#fff\" d=\"M0 263.1h640v35.6H0z\"/>
    <path fill=\"#090\" d=\"M0 298.7h640V512H0z\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/gm.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-gm\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M0-48h640v480H0z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" clip-path=\"url(#a)\" transform=\"translate(0 48)\">
    <path fill=\"red\" d=\"M0-128h640V85.3H0z\"/>
    <path fill=\"#fff\" d=\"M0 85.3h640V121H0z\"/>
    <path fill=\"#009\" d=\"M0 120.9h640V263H0z\"/>
    <path fill=\"#fff\" d=\"M0 263.1h640v35.6H0z\"/>
    <path fill=\"#090\" d=\"M0 298.7h640V512H0z\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/gm.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\gm.svg");
    }
}
