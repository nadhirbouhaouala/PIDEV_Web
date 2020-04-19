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

/* @Nozelites/Back/AdminEvenementPage.html.twig */
class __TwigTemplate_dc92304df1de2c54fc61681372ac7a1daddf2e62e909844f801849d7a070640d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Nozelites/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Back/AdminEvenementPage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Back/AdminEvenementPage.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/baseback.html.twig", "@Nozelites/Back/AdminEvenementPage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $this->displayParentBlock("titre", $context, $blocks);
        echo " - Acceuil ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- DataTables -->

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/datatables-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"../../plugins/fontawesome-free/css/all.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"../../dist/css/adminlte.min.css\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Les participants</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class=\"content\">

            <!-- Default box -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\"></h3>


                </div>
                <div class=\"card-body p-0\">
                    <table class=\"table table-striped projects\">
                        <thead>
                        <tr>

                            <th style=\"width: 15%\">
                                participant
                            </th>
                            <th style=\"width: 15%\">
                                Name
                            </th>
                            <th style=\"width: 15%\">
                                Age
                            </th>
                            <th>
                               Telephone
                            </th>
                            <th>
                                Mail
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listp"] ?? $this->getContext($context, "listp")));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 66
            echo "                            <tr>

                                <td>
                                    <ul class=\"list-inline\">
                                        <li class=\"list-inline-item\">
                                            ";
            // line 71
            $context["imageur"] = twig_split_filter($this->env, $this->getAttribute($context["o"], "image", []), "/");
            // line 72
            echo "                                            ";
            $context["imageur"] = $this->getAttribute(($context["imageur"] ?? $this->getContext($context, "imageur")), (twig_length_filter($this->env, ($context["imageur"] ?? $this->getContext($context, "imageur"))) - 1), [], "array");
            // line 73
            echo "                                            ";
            $context["imageurl"] = ("front/images/" . ($context["imageur"] ?? $this->getContext($context, "imageur")));
            // line 74
            echo "

                                            <img class=\"table-avatar\" src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["imageurl"] ?? $this->getContext($context, "imageurl"))), "html", null, true);
            echo "\" alt=\"image\" />
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a>
                                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "nom", []), "html", null, true);
            echo "
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "age", []), "html", null, true);
            echo "
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "tel", []), "html", null, true);
            echo "
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "mail", []), "html", null, true);
            echo "
                                    </a>
                                </td>


                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Nozelites/Back/AdminEvenementPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 104,  219 => 97,  211 => 92,  203 => 87,  195 => 82,  186 => 76,  182 => 74,  179 => 73,  176 => 72,  174 => 71,  167 => 66,  163 => 65,  116 => 20,  107 => 19,  88 => 9,  81 => 6,  72 => 5,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Nozelites/baseback.html.twig' %}

{% block titre %}{{ parent() }} - Acceuil {% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- DataTables -->

    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}\">
    <link rel=\"stylesheet\" href=\"../../plugins/fontawesome-free/css/all.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"../../dist/css/adminlte.min.css\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Les participants</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class=\"content\">

            <!-- Default box -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\"></h3>


                </div>
                <div class=\"card-body p-0\">
                    <table class=\"table table-striped projects\">
                        <thead>
                        <tr>

                            <th style=\"width: 15%\">
                                participant
                            </th>
                            <th style=\"width: 15%\">
                                Name
                            </th>
                            <th style=\"width: 15%\">
                                Age
                            </th>
                            <th>
                               Telephone
                            </th>
                            <th>
                                Mail
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for o in listp %}
                            <tr>

                                <td>
                                    <ul class=\"list-inline\">
                                        <li class=\"list-inline-item\">
                                            {% set imageur = o.image|split('/')  %}
                                            {%  set imageur = imageur[imageur|length-1] %}
                                            {% set imageurl = \"front/images/\"~imageur %}


                                            <img class=\"table-avatar\" src=\"{{ asset(imageurl) }}\" alt=\"image\" />
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <a>
                                        {{ o.nom }}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{ o.age }}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{ o.tel }}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{ o.mail }}
                                    </a>
                                </td>


                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
    </div>
    </div>
{% endblock %}", "@Nozelites/Back/AdminEvenementPage.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Back\\AdminEvenementPage.html.twig");
    }
}
