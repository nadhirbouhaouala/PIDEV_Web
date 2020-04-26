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

/* @Reclamation/Back/ListReclamation.html.twig */
class __TwigTemplate_55818283ac1774edd867a3ffca42d720cdb12f1caf717dfc518c1b3ef0b44e7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Reclamation/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Back/ListReclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Back/ListReclamation.html.twig"));

        $this->parent = $this->loadTemplate("@Reclamation/baseback.html.twig", "@Reclamation/Back/ListReclamation.html.twig", 1);
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-12\">

                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Reclamation</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class=\"card-body\">
                            <table id=\"tableau\" class=\"table table-bordered table-striped\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>CIBLE</th>
                                    <th>Description</th>
                                    <th>Etat</th>
                                    <th>Selecteur</th>
                                    <th>Date de la Réclamation</th>

                                    <th>Delete</th>
                                    <th>Update</th>
                                    <th>Affiche</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["R"] ?? $this->getContext($context, "R")));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 45
            echo "                                    <tr>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "idrecl", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rec"], "IdEmeteur", []), "nom", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rec"], "IdEmeteur", []), "prenom", []), "html", null, true);
            echo "</td>

                                        ";
            // line 50
            if (($this->getAttribute($context["rec"], "selecteur", []) == "groupe")) {
                // line 51
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groupes"] ?? $this->getContext($context, "groupes")));
                foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                    if (($this->getAttribute($context["groupe"], "idGroupe", []) == $this->getAttribute($context["rec"], "idCible", []))) {
                        // line 52
                        echo "                                                <td data-label=\"Column 1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "titre", []), "html", null, true);
                        echo "</td>
                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                        ";
            } elseif (($this->getAttribute($context["rec"], "selecteur", []) == "evenement")) {
                // line 55
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? $this->getContext($context, "evenements")));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    if (($this->getAttribute($context["event"], "ide", []) == $this->getAttribute($context["rec"], "idCible", []))) {
                        // line 56
                        echo "                                                <td data-label=\"Column 1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nom", []), "html", null, true);
                        echo "</td>
                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                                        ";
            } else {
                // line 59
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pubs"] ?? $this->getContext($context, "pubs")));
                foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
                    if (($this->getAttribute($context["pub"], "id", []) == $this->getAttribute($context["rec"], "idCible", []))) {
                        // line 60
                        echo "                                                <td data-label=\"Column 1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pub"], "titre", []), "html", null, true);
                        echo "</td>
                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                                        ";
            }
            // line 63
            echo "                                        <td data-label=\"Column 1\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "description", []), "html", null, true);
            echo "</td>
                                        <td data-label=\"Column 2\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "etat", []), "html", null, true);
            echo "</td>
                                        <td data-label=\"Column 3\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "selecteur", []), "html", null, true);
            echo "</td>
                                        <td data-label=\"Column 3\"> ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "date", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>

                                        <td>
                                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Deleteback", ["id" => $this->getAttribute($context["rec"], "idRecl", [])]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\">Supprimer</a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Traiter", ["id" => $this->getAttribute($context["rec"], "idRecl", [])]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\">Traiter</a>
                                        </td>
                                        <td>  <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AfficherNote", ["id" => $this->getAttribute($context["rec"], "idRecl", [])]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\">Note</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DataTables -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$('#tableau').DataTable({
                \"paging\": true,
                \"lengthChange\": true,
                \"searching\": true,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Back/ListReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 96,  299 => 95,  293 => 93,  284 => 92,  261 => 77,  252 => 74,  247 => 72,  241 => 69,  235 => 66,  231 => 65,  227 => 64,  222 => 63,  219 => 62,  209 => 60,  203 => 59,  200 => 58,  190 => 56,  184 => 55,  181 => 54,  171 => 52,  165 => 51,  163 => 50,  158 => 48,  154 => 47,  150 => 46,  147 => 45,  143 => 44,  109 => 12,  100 => 11,  88 => 8,  82 => 6,  73 => 5,  54 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Reclamation/baseback.html.twig' %}

{% block titre %}{{ parent() }} - Acceuil {% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}\">
{% endblock %}

{% block content %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-12\">

                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Reclamation</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class=\"card-body\">
                            <table id=\"tableau\" class=\"table table-bordered table-striped\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>CIBLE</th>
                                    <th>Description</th>
                                    <th>Etat</th>
                                    <th>Selecteur</th>
                                    <th>Date de la Réclamation</th>

                                    <th>Delete</th>
                                    <th>Update</th>
                                    <th>Affiche</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for rec in R %}
                                    <tr>
                                        <td>{{ rec.idrecl }}</td>
                                        <td>{{ rec.IdEmeteur.nom }}</td>
                                        <td>{{ rec.IdEmeteur.prenom}}</td>

                                        {% if rec.selecteur == \"groupe\" %}
                                            {% for groupe in groupes if groupe.idGroupe ==  rec.idCible %}
                                                <td data-label=\"Column 1\">{{ groupe.titre }}</td>
                                            {% endfor %}
                                        {% elseif rec.selecteur == \"evenement\"  %}
                                            {% for event in evenements if event.ide ==  rec.idCible %}
                                                <td data-label=\"Column 1\">{{ event.nom }}</td>
                                            {% endfor %}
                                        {% else %}
                                            {% for pub in pubs if pub.id ==  rec.idCible %}
                                                <td data-label=\"Column 1\">{{ pub.titre }}</td>
                                            {% endfor %}
                                        {% endif %}
                                        <td data-label=\"Column 1\">{{ rec.description }}</td>
                                        <td data-label=\"Column 2\">{{ rec.etat }}</td>
                                        <td data-label=\"Column 3\">{{ rec.selecteur}}</td>
                                        <td data-label=\"Column 3\"> {{  rec.date|date('Y-m-d H:i:s') }}</td>

                                        <td>
                                            <a href=\"{{ path('Deleteback',{'id':rec.idRecl}) }}\" class=\"btn btn-block btn-danger\">Supprimer</a>
                                        </td>
                                        <td>
                                            <a href=\"{{ path('Traiter',{'id':rec.idRecl}) }}\" class=\"btn btn-block btn-warning\">Traiter</a>
                                        </td>
                                        <td>  <a href=\"{{ path('AfficherNote',{'id':rec.idRecl}) }}\" class=\"btn btn-block btn-danger\">Note</a></td>
                                    </tr>
                                {% endfor %}
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>

    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- DataTables -->
    <script src=\"{{ asset('plugins/datatables/jquery.dataTables.js') }}\"></script>
    <script src=\"{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}\"></script>
    <script>
        \$(function () {
            \$('#tableau').DataTable({
                \"paging\": true,
                \"lengthChange\": true,
                \"searching\": true,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
            });
        });
    </script>
{% endblock %}

", "@Reclamation/Back/ListReclamation.html.twig", "C:\\wamp64\\www\\PIDEV_Web\\Nozelites\\src\\ReclamationBundle\\Resources\\views\\Back\\ListReclamation.html.twig");
    }
}
