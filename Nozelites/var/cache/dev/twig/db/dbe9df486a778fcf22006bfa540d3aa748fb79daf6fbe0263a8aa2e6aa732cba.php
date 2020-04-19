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

/* @Publication/Front/images/flags/tk.svg */
class __TwigTemplate_27505a434735888c59c34ba7c3f6a08b9af533d428bdc13e2d6b92ffd634c042 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/tk.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/images/flags/tk.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-tk\" width=\"640\" height=\"480\">
  <path fill=\"#00247d\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#fed100\" d=\"M108.1 354.6c-6.7-.1 62.8-37 120.9-84.4 76.2-62.1 240.3-161.4 288.6-177.6 5-1.7-10.3 8.6-12.3 11.9-51.5 61-10.4 176 54 233.9 19.4 14.8 18.4 15.6 54.3 17v3.4l-505.5-4.2zm-4.2 6.7s-4.9 3.5-4.9 6.1c0 2.9 5.5 6.7 5.5 6.7l498.5 5.5 9.2-6.1-12.8-7.9-495.5-4.3z\"/>
  <path fill=\"#fff\" d=\"M106.8 109.1l-4 12.2 10.4-7.5 10.3 7.5-3.9-12.2 10.3-7.5h-12.8l-3.9-12.2-4 12.2H96.4zm78.1 57.4l8.6-6.3h-10.7l-3.3-10.1-3.3 10.1h-10.6l8.6 6.3-3.3 10.1 8.6-6.3 8.7 6.3zm-145.2 13l-4-12.2-3.9 12.2H19l10.3 7.5-3.9 12.2 10.3-7.5 10.4 7.5-4-12.2 10.4-7.5zm78.1 122.3l-4.6-14.2-4.6 14.2h-15l12.1 8.7-4.6 14.3 12.1-8.8 12.1 8.8-4.7-14.3 12.1-8.7z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/images/flags/tk.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"flag-icon-css-tk\" width=\"640\" height=\"480\">
  <path fill=\"#00247d\" d=\"M0 0h640v480H0z\"/>
  <path fill=\"#fed100\" d=\"M108.1 354.6c-6.7-.1 62.8-37 120.9-84.4 76.2-62.1 240.3-161.4 288.6-177.6 5-1.7-10.3 8.6-12.3 11.9-51.5 61-10.4 176 54 233.9 19.4 14.8 18.4 15.6 54.3 17v3.4l-505.5-4.2zm-4.2 6.7s-4.9 3.5-4.9 6.1c0 2.9 5.5 6.7 5.5 6.7l498.5 5.5 9.2-6.1-12.8-7.9-495.5-4.3z\"/>
  <path fill=\"#fff\" d=\"M106.8 109.1l-4 12.2 10.4-7.5 10.3 7.5-3.9-12.2 10.3-7.5h-12.8l-3.9-12.2-4 12.2H96.4zm78.1 57.4l8.6-6.3h-10.7l-3.3-10.1-3.3 10.1h-10.6l8.6 6.3-3.3 10.1 8.6-6.3 8.7 6.3zm-145.2 13l-4-12.2-3.9 12.2H19l10.3 7.5-3.9 12.2 10.3-7.5 10.4 7.5-4-12.2 10.4-7.5zm78.1 122.3l-4.6-14.2-4.6 14.2h-15l12.1 8.7-4.6 14.3 12.1-8.8 12.1 8.8-4.7-14.3 12.1-8.7z\"/>
</svg>
", "@Publication/Front/images/flags/tk.svg", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\images\\flags\\tk.svg");
    }
}
