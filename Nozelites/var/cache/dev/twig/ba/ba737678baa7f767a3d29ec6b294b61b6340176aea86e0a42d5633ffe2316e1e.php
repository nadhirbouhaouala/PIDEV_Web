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

/* @Nozelites/Back/AdminEvenementAll.html.twig */
class __TwigTemplate_66724d59cc54621f97d5b280e148d3d6d18984e6774cf0652e30e28019062407 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Back/AdminEvenementAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Back/AdminEvenementAll.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/baseback.html.twig", "@Nozelites/Back/AdminEvenementAll.html.twig", 1);
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
        // line 8
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

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <div class=\"wrapper\">
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>Evenements</h1>
                        </div>
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\">Evenements</li>
                            </ol>
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
                                    Evenement
                                </th>
                                <th style=\"width: 15%\">
                                    Name
                                </th>
                                <th>
                                    participants
                                </th>
                                <th style=\"width: 8%\" >
                                    Date
                                </th>
                                <th style=\"width: 8%\" >
                                    Heure
                                </th>
                                <th style=\"width: 20%\">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenement"] ?? $this->getContext($context, "evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 71
            echo "                                <tr>

                                    <td>
                                        <ul class=\"list-inline\">
                                            <li class=\"list-inline-item\">
                                                ";
            // line 76
            $context["imageur"] = twig_split_filter($this->env, $this->getAttribute($context["o"], "image", []), "/");
            // line 77
            echo "                                                ";
            $context["imageur"] = $this->getAttribute(($context["imageur"] ?? $this->getContext($context, "imageur")), (twig_length_filter($this->env, ($context["imageur"] ?? $this->getContext($context, "imageur"))) - 1), [], "array");
            // line 78
            echo "                                                ";
            $context["imageurl"] = ("front/images/" . ($context["imageur"] ?? $this->getContext($context, "imageur")));
            // line 79
            echo "


                                                <img class=\"table-avatar\" src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["imageurl"] ?? $this->getContext($context, "imageurl"))), "html", null, true);
            echo "\" alt=\"image\" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a>
                                            ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "nom", []), "html", null, true);
            echo "
                                        </a>
                                    </td>
                                    <td class=\"project_progress\">
                                        <div class=\"progress progress-sm\">
                                            ";
            // line 93
            $context["pourcent"] = (($this->getAttribute($context["o"], "nbparticipant", []) * 100) / $this->getAttribute($context["o"], "nbplace", []));
            // line 94
            echo "                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-volumenow=\"10\" aria-volumemin=\"0\" aria-volumemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, ($context["pourcent"] ?? $this->getContext($context, "pourcent")), "html", null, true);
            echo "%\">
                                            </div>
                                        </div>
                                        <small>
                                            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "nbparticipant", []), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "nbplace", []), "html", null, true);
            echo " participants
                                        </small>
                                    </td>
                                    <td class=\"project-state\">
                                        <a>
                                            ";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["o"], "date", []), "d/m/Y"), "html", null, true);
            echo "
                                        </a>
                                    </td>
                                    <td class=\"project-state\">
                                        <a>
                                            ";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["o"], "date", []), "H:II"), "html", null, true);
            echo "
                                        </a>
                                    </td>
                                    <td class=\"project-actions text-right\">
                                        <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_adminEvenementPageback", ["id" => $this->getAttribute($context["o"], "ide", [])]), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-folder\">
                                            </i>
                                            View
                                        </a>


                                        <a class=\"btn btn-danger btn-sm\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_adminEvenementAllsupprimerback", ["id" => $this->getAttribute($context["o"], "ide", [])]), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-trash\">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                            </tbody>
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
        return "@Nozelites/Back/AdminEvenementAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 127,  255 => 119,  245 => 112,  238 => 108,  230 => 103,  220 => 98,  212 => 94,  210 => 93,  202 => 88,  193 => 82,  188 => 79,  185 => 78,  182 => 77,  180 => 76,  173 => 71,  169 => 70,  115 => 18,  106 => 17,  87 => 8,  81 => 6,  72 => 5,  53 => 3,  31 => 1,);
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
    <div class=\"wrapper\">
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>Evenements</h1>
                        </div>
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\">Evenements</li>
                            </ol>
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
                                    Evenement
                                </th>
                                <th style=\"width: 15%\">
                                    Name
                                </th>
                                <th>
                                    participants
                                </th>
                                <th style=\"width: 8%\" >
                                    Date
                                </th>
                                <th style=\"width: 8%\" >
                                    Heure
                                </th>
                                <th style=\"width: 20%\">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for o in evenement %}
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
                                    <td class=\"project_progress\">
                                        <div class=\"progress progress-sm\">
                                            {% set pourcent = (o.nbparticipant * 100)/o.nbplace %}
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-volumenow=\"10\" aria-volumemin=\"0\" aria-volumemax=\"100\" style=\"width: {{ pourcent }}%\">
                                            </div>
                                        </div>
                                        <small>
                                            {{ o.nbparticipant }} / {{ o.nbplace }} participants
                                        </small>
                                    </td>
                                    <td class=\"project-state\">
                                        <a>
                                            {{ o.date|date('d/m/Y') }}
                                        </a>
                                    </td>
                                    <td class=\"project-state\">
                                        <a>
                                            {{ o.date|date('H:II') }}
                                        </a>
                                    </td>
                                    <td class=\"project-actions text-right\">
                                        <a class=\"btn btn-primary btn-sm\" href=\"{{ path('nozelites_adminEvenementPageback',{'id':o.ide}) }}\">
                                            <i class=\"fas fa-folder\">
                                            </i>
                                            View
                                        </a>


                                        <a class=\"btn btn-danger btn-sm\" href=\"{{ path('nozelites_adminEvenementAllsupprimerback',{'id':o.ide}) }}\">
                                            <i class=\"fas fa-trash\">
                                            </i>
                                            Delete
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
{% endblock %}", "@Nozelites/Back/AdminEvenementAll.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Back\\AdminEvenementAll.html.twig");
    }
}
