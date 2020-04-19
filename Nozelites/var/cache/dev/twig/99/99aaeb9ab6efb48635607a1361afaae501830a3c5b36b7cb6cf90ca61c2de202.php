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

/* @Publication/Front/images/flags/is.svg */
class __TwigTemplate_e5fadc648633174008197d5cf8b40eef328ae294e4fb90bce080136b710eee46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/is.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/is.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-is\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M0 0h640v480H0z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"0\" clip-path=\"url(#a)\">
    <path fill=\"#003897\" d=\"M0 0h666.7v480H0z\"/>
    <path fill=\"#fff\" d=\"M0 186.7h186.7V0h106.6v186.7h373.4v106.6H293.3V480H186.7V293.3H0V186.7z\"/>
    <path fill=\"#d72828\" d=\"M0 213.3h213.3V0h53.4v213.3h400v53.4h-400V480h-53.4V266.7H0v-53.4z\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/is.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-is\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M0 0h640v480H0z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"0\" clip-path=\"url(#a)\">
    <path fill=\"#003897\" d=\"M0 0h666.7v480H0z\"/>
    <path fill=\"#fff\" d=\"M0 186.7h186.7V0h106.6v186.7h373.4v106.6H293.3V480H186.7V293.3H0V186.7z\"/>
    <path fill=\"#d72828\" d=\"M0 213.3h213.3V0h53.4v213.3h400v53.4h-400V480h-53.4V266.7H0v-53.4z\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/is.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\is.svg");
    }
}
