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

/* @Publication/Front/images/flags/to.svg */
class __TwigTemplate_9b09c7c51e6e1e38e71a5e630b7902e0b8b41d6768d859e6f017d4db75762e4e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/to.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/to.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-to\" width=\"640\" height=\"480\">
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\">
    <path fill=\"#c10000\" d=\"M0 0h640v480H0z\"/>
    <path fill=\"#fff\" d=\"M0 0h250v200.3H0z\"/>
    <g fill=\"#c10000\">
      <path d=\"M102.8 31.2h39.9v139.6h-39.8z\"/>
      <path d=\"M192.6 81v40H53V81z\"/>
    </g>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/to.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-to\" width=\"640\" height=\"480\">
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\">
    <path fill=\"#c10000\" d=\"M0 0h640v480H0z\"/>
    <path fill=\"#fff\" d=\"M0 0h250v200.3H0z\"/>
    <g fill=\"#c10000\">
      <path d=\"M102.8 31.2h39.9v139.6h-39.8z\"/>
      <path d=\"M192.6 81v40H53V81z\"/>
    </g>
  </g>
</svg>
", "@Publication/Front/images/flags/to.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\to.svg");
    }
}
