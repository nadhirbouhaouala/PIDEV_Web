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

/* @Publication/Front/ImprimerPublication.html.twig */
class __TwigTemplate_b01250cf068a77b4ddaaafb870fe31ed4dd4d56805fa1b23b405ec85c1fdaa08 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/ImprimerPublication.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/ImprimerPublication.html.twig"));

        // line 1
        echo "
    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>

    <body>

    <!-- Print Button -->
    <div class=\"print-button-container\">
        <a href=\"javascript:window.print()\" class=\"print-button\">Print this invoice</a>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Afficher");
        echo "\" class=\"print-button\">Retourner</a>
    </div>

    <!-- Invoice -->
    <div id=\"invoice\">

        <!-- Header -->
        <div class=\"row\">
            <div class=\"col-xl-6\">
                <div id=\"logo\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/nozelites.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            </div>

            <div class=\"col-xl-6\">

                <p id=\"details\">
                    <strong>Date:</strong>  <br>
                    <strong></strong>  <br>

                </p>
            </div>
        </div>


        <!-- Client & Supplier -->
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <h2>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "titre", [])), "html", null, true);
        echo "</h2>
            </div>

            <div class=\"col-xl-6\">
                <strong class=\"margin-bottom-5\"></strong>
                <p>
                       Description :  <br>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "description", [])), "html", null, true);
        echo "<br>
                     <br>
                </p>
            </div>

            <div class=\"col-xl-6\">
                <strong class=\"margin-bottom-5\">Publication</strong>
                <p>
                <div >
                    <img width=\"400\" height=\"400\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("front/images/" . $this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "image", []))), "html", null, true);
        echo "\" alt=\"\">
                </div>
                </p>
            </div>
        </div>





        </div>


        <!-- Footer -->
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <ul id=\"footer\">
                    <li><span>www.example.com</span></li>
                    <li>office@example.com</li>
                    <li>(123) 123-456</li>
                </ul>
            </div>
        </div>

    </div>


    </body>
    </html>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hireo Invoice";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/invoice.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/ImprimerPublication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 9,  176 => 8,  158 => 7,  115 => 60,  103 => 51,  93 => 44,  73 => 27,  61 => 18,  52 => 11,  50 => 8,  46 => 7,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %}Hireo Invoice{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/invoice.css') }}\">
        {% endblock %}
    </head>

    <body>

    <!-- Print Button -->
    <div class=\"print-button-container\">
        <a href=\"javascript:window.print()\" class=\"print-button\">Print this invoice</a>
        <a href=\"{{ path('Afficher')}}\" class=\"print-button\">Retourner</a>
    </div>

    <!-- Invoice -->
    <div id=\"invoice\">

        <!-- Header -->
        <div class=\"row\">
            <div class=\"col-xl-6\">
                <div id=\"logo\"><img src=\"{{ asset('images/nozelites.jpg') }}\" alt=\"\"></div>
            </div>

            <div class=\"col-xl-6\">

                <p id=\"details\">
                    <strong>Date:</strong>  <br>
                    <strong></strong>  <br>

                </p>
            </div>
        </div>


        <!-- Client & Supplier -->
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <h2>{{ asset(c.titre) }}</h2>
            </div>

            <div class=\"col-xl-6\">
                <strong class=\"margin-bottom-5\"></strong>
                <p>
                       Description :  <br>
                    {{ asset(c.description) }}<br>
                     <br>
                </p>
            </div>

            <div class=\"col-xl-6\">
                <strong class=\"margin-bottom-5\">Publication</strong>
                <p>
                <div >
                    <img width=\"400\" height=\"400\" src=\"{{ asset('front/images/'~ c.image) }}\" alt=\"\">
                </div>
                </p>
            </div>
        </div>





        </div>


        <!-- Footer -->
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <ul id=\"footer\">
                    <li><span>www.example.com</span></li>
                    <li>office@example.com</li>
                    <li>(123) 123-456</li>
                </ul>
            </div>
        </div>

    </div>


    </body>
    </html>



", "@Publication/Front/ImprimerPublication.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\ImprimerPublication.html.twig");
    }
}
