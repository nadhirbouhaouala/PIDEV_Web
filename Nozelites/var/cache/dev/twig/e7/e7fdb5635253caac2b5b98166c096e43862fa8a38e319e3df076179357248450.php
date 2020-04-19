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

/* @Publication/Front/images/flags/tw.svg */
class __TwigTemplate_d10440197220d8b65d6e69fc656476d8c982a8955103bccd7e18e2fe2b53942f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/tw.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/tw.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-tw\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M0 0h682.7v512H0z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" clip-path=\"url(#a)\" transform=\"scale(.9375)\">
    <path fill=\"#fe0000\" d=\"M0 0h768v512H0z\"/>
    <path fill=\"#000095\" d=\"M0 0h385.7v256H0z\"/>
    <path fill=\"#fff\" d=\"M282.1 178.6l-47.3-9.8 10 47.3-36-32.1-15 46-15.2-45.9-36 32.4 9.8-47.4-47.2 10.1 32-36.1-46-15 46-15.2-32.4-35.8 47.3 9.7-10-47.3 36 32.1 15-46 15.2 45.9 35.9-32.4-9.7 47.4 47.2-10.1-32 36.1 45.9 15-45.9 15.2z\"/>
    <path fill=\"#000095\" d=\"M238.5 175l-15 7.9-14.5 8.6-17-.6-16.9.2-14.3-9L146 174l-8-15-8.6-14.5.6-16.8-.2-17 9-14.2 8.3-14.8 14.9-7.9 14.6-8.6 16.9.6 17-.2 14.3 9 14.7 8.2 8 14.9 8.6 14.5-.6 16.9.2 16.9-9 14.3z\"/>
    <path fill=\"#fff\" d=\"M244.6 128.3a51.9 51.9 0 1 1-103.7 0 51.9 51.9 0 0 1 103.7 0z\"/>
  </g>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/tw.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-tw\" width=\"640\" height=\"480\">
  <defs>
    <clipPath id=\"a\">
      <path fill-opacity=\".7\" d=\"M0 0h682.7v512H0z\"/>
    </clipPath>
  </defs>
  <g fill-rule=\"evenodd\" stroke-width=\"1pt\" clip-path=\"url(#a)\" transform=\"scale(.9375)\">
    <path fill=\"#fe0000\" d=\"M0 0h768v512H0z\"/>
    <path fill=\"#000095\" d=\"M0 0h385.7v256H0z\"/>
    <path fill=\"#fff\" d=\"M282.1 178.6l-47.3-9.8 10 47.3-36-32.1-15 46-15.2-45.9-36 32.4 9.8-47.4-47.2 10.1 32-36.1-46-15 46-15.2-32.4-35.8 47.3 9.7-10-47.3 36 32.1 15-46 15.2 45.9 35.9-32.4-9.7 47.4 47.2-10.1-32 36.1 45.9 15-45.9 15.2z\"/>
    <path fill=\"#000095\" d=\"M238.5 175l-15 7.9-14.5 8.6-17-.6-16.9.2-14.3-9L146 174l-8-15-8.6-14.5.6-16.8-.2-17 9-14.2 8.3-14.8 14.9-7.9 14.6-8.6 16.9.6 17-.2 14.3 9 14.7 8.2 8 14.9 8.6 14.5-.6 16.9.2 16.9-9 14.3z\"/>
    <path fill=\"#fff\" d=\"M244.6 128.3a51.9 51.9 0 1 1-103.7 0 51.9 51.9 0 0 1 103.7 0z\"/>
  </g>
</svg>
", "@Publication/Front/images/flags/tw.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\tw.svg");
    }
}
