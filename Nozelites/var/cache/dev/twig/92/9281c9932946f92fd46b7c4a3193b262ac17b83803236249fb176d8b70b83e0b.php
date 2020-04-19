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

/* @Publication/Front/images/flags/bs.svg */
class __TwigTemplate_ac460343cb2caf29ef8b753e3d579577b4a80b07c123cab1d9df98aa3a14bacf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/bs.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/bs.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-bs\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M-12 0h640v480H-12z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" clip-path=\"url(#a)\" transform=\"translate(12)\">
    <path fill=\"#fff\" d=\"M968.5 480h-979V1.8h979z\"/>
    <path fill=\"#ffe900\" d=\"M968.5 344.5h-979V143.3h979z\"/>
    <path fill=\"#08ced6\" d=\"M968.5 480h-979V320.6h979zm0-318.7h-979V2h979z\"/>
    <path d=\"M-11 0c2.3 0 391.8 236.8 391.8 236.8L-12 479.2-10.9 0z\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/bs.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-bs\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M-12 0h640v480H-12z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" clip-path=\"url(#a)\" transform=\"translate(12)\">
    <path fill=\"#fff\" d=\"M968.5 480h-979V1.8h979z\"/>
    <path fill=\"#ffe900\" d=\"M968.5 344.5h-979V143.3h979z\"/>
    <path fill=\"#08ced6\" d=\"M968.5 480h-979V320.6h979zm0-318.7h-979V2h979z\"/>
    <path d=\"M-11 0c2.3 0 391.8 236.8 391.8 236.8L-12 479.2-10.9 0z\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/bs.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\bs.svg");
    }
}
