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

/* @Publication/Front/sass/_variables.scss */
class __TwigTemplate_b7cbd4d3f048f582d7a38fdfaae050c69bb3d9234793bea7d909bb9f1b9b117a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/_variables.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/_variables.scss"));

        // line 1
        echo "/* -------------------------------------------------------------- */
/* Default Colors
----------------------------------------------------------------- */
\$primary-color: \t\t\t\t\t\t\t#2a41e8;
\$body-font-color:\t\t\t\t\t\t\t#666;
\$body-heading-color:\t\t\t\t\t\t#333;


/* -------------------------------------------------------------- */
/* Typography
----------------------------------------------------------------- */
@import url('https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&subset=latin-ext');

\$primary-font: \t\t\t\t\t\t\t\t\"Nunito\", sans-serif;
\$body-font-size: \t\t\t\t\t\t\t16px;
\$body-line-height: \t\t\t\t\t\t\t27px;
\$body-sub-line-height: \t\t\t\t\t\t26px;

\$homepage-heading-font-size: \t\t\t\t26px;
\$single-page-heading-font-size: \t\t\t20px;
\$listing-heading-font-size: \t\t\t\t18px;

\$global-border-radius:\t\t\t\t\t\t4px;


/* -------------------------------------------------------------- */
/* Header Settings for Desktop Devices
----------------------------------------------------------------- */
\$header-height: \t\t\t\t\t\t\t82px;
\$navigation-top-offset: \t\t\t\t\t22px;
\$logo-height: \t\t\t\t\t\t\t\t42px;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/_variables.scss";
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
        return new Source("/* -------------------------------------------------------------- */
/* Default Colors
----------------------------------------------------------------- */
\$primary-color: \t\t\t\t\t\t\t#2a41e8;
\$body-font-color:\t\t\t\t\t\t\t#666;
\$body-heading-color:\t\t\t\t\t\t#333;


/* -------------------------------------------------------------- */
/* Typography
----------------------------------------------------------------- */
@import url('https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&subset=latin-ext');

\$primary-font: \t\t\t\t\t\t\t\t\"Nunito\", sans-serif;
\$body-font-size: \t\t\t\t\t\t\t16px;
\$body-line-height: \t\t\t\t\t\t\t27px;
\$body-sub-line-height: \t\t\t\t\t\t26px;

\$homepage-heading-font-size: \t\t\t\t26px;
\$single-page-heading-font-size: \t\t\t20px;
\$listing-heading-font-size: \t\t\t\t18px;

\$global-border-radius:\t\t\t\t\t\t4px;


/* -------------------------------------------------------------- */
/* Header Settings for Desktop Devices
----------------------------------------------------------------- */
\$header-height: \t\t\t\t\t\t\t82px;
\$navigation-top-offset: \t\t\t\t\t22px;
\$logo-height: \t\t\t\t\t\t\t\t42px;
", "@Publication/Front/sass/_variables.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\_variables.scss");
    }
}
