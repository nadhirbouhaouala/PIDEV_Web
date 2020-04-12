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

/* @Reclamation/Front/AfficheReclamation.html.twig */
class __TwigTemplate_82126cf6b6119ee441ab9458331f6fedac75b59e84dc49f14ae8b548f795635a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Reclamation/Front/table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Front/AfficheReclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Front/AfficheReclamation.html.twig"));

        $this->parent = $this->loadTemplate("@Reclamation/Front/table.html.twig", "@Reclamation/Front/AfficheReclamation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xl-6 col-md-6\">

                <div class=\"section-headline margin-bottom-30\">
                    <h4>Table</h4>
                </div>
                <table class=\"basic-table\">

                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Etat</th>
                        <th>Selecteur</th>
                        <th>Date de la Réclamation</th>
                        <th>Delete</th>
                        <th>Update</th>
                        <th>Note</th>

                    </tr>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["R"] ?? $this->getContext($context, "R")));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rec"], "IdEmeteur", []), "nom", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rec"], "IdEmeteur", []), "prenom", []), "html", null, true);
            echo "</td>

                        ";
            // line 31
            if (($this->getAttribute($context["rec"], "selecteur", []) == "groupe")) {
                // line 32
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groupes"] ?? $this->getContext($context, "groupes")));
                foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
                    if (($this->getAttribute($context["groupe"], "idGroupe", []) == $this->getAttribute($context["rec"], "idCible", []))) {
                        // line 33
                        echo "                                <td data-label=\"Column 1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "titre", []), "html", null, true);
                        echo "</td>
                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                        ";
            } else {
                // line 36
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? $this->getContext($context, "evenements")));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    if (($this->getAttribute($context["event"], "ide", []) == $this->getAttribute($context["rec"], "idCible", []))) {
                        // line 37
                        echo "                                <td data-label=\"Column 1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nom", []), "html", null, true);
                        echo "</td>
                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                        ";
            }
            // line 40
            echo "                        <td data-label=\"Column 1\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "description", []), "html", null, true);
            echo "</td>
                        <td data-label=\"Column 2\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "etat", []), "html", null, true);
            echo "</td>
                        <td data-label=\"Column 3\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "selecteur", []), "html", null, true);
            echo "</td>
                        <td data-label=\"Column 3\"> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "date", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                       <td> <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Delete", ["id" => $this->getAttribute($context["rec"], "idRecl", [])]), "html", null, true);
            echo "\" class=\"button ripple-effect\">Delete</a></td>
                       <td> <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Update", ["id" => $this->getAttribute($context["rec"], "idRecl", [])]), "html", null, true);
            echo "\" class=\"button dark ripple-effect\">Update</a></td>
                        ";
            // line 46
            if (($this->getAttribute($context["rec"], "etat", []) == 1)) {
                // line 47
                echo "                        <td>  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AjouterNoteTest", ["id" => $this->getAttribute($context["rec"], "idRecl", [])]), "html", null, true);
                echo "\" class=\"button dark ripple-effect\">Note</a></td>
                        ";
            }
            // line 49
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </table>
            </div>

        </div>

    </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Front/AfficheReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 51,  174 => 49,  168 => 47,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  141 => 40,  138 => 39,  128 => 37,  122 => 36,  119 => 35,  109 => 33,  103 => 32,  101 => 31,  96 => 29,  92 => 28,  89 => 27,  85 => 26,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Reclamation/Front/table.html.twig' %}
{% block content %}
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xl-6 col-md-6\">

                <div class=\"section-headline margin-bottom-30\">
                    <h4>Table</h4>
                </div>
                <table class=\"basic-table\">

                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Etat</th>
                        <th>Selecteur</th>
                        <th>Date de la Réclamation</th>
                        <th>Delete</th>
                        <th>Update</th>
                        <th>Note</th>

                    </tr>
                    {% for rec in R %}
                    <tr>
                        <td>{{ rec.IdEmeteur.nom }}</td>
                        <td>{{ rec.IdEmeteur.prenom}}</td>

                        {% if rec.selecteur == \"groupe\" %}
                            {% for groupe in groupes if groupe.idGroupe ==  rec.idCible %}
                                <td data-label=\"Column 1\">{{ groupe.titre }}</td>
                            {% endfor %}
                        {% else  %}
                            {% for event in evenements if event.ide ==  rec.idCible %}
                                <td data-label=\"Column 1\">{{ event.nom }}</td>
                            {% endfor %}
                        {% endif %}
                        <td data-label=\"Column 1\">{{ rec.description }}</td>
                        <td data-label=\"Column 2\">{{ rec.etat }}</td>
                        <td data-label=\"Column 3\">{{ rec.selecteur}}</td>
                        <td data-label=\"Column 3\"> {{  rec.date|date('Y-m-d H:i:s') }}</td>
                       <td> <a href=\"{{ path('Delete',{'id':rec.idRecl}) }}\" class=\"button ripple-effect\">Delete</a></td>
                       <td> <a href=\"{{ path('Update',{'id':rec.idRecl}) }}\" class=\"button dark ripple-effect\">Update</a></td>
                        {% if rec.etat == 1 %}
                        <td>  <a href=\"{{ path('AjouterNoteTest',{'id':rec.idRecl}) }}\" class=\"button dark ripple-effect\">Note</a></td>
                        {% endif %}
                    </tr>
                    {% endfor %}
                </table>
            </div>

        </div>

    </div>


    {#


<table border=\"1\">
    <tr>

        <td>Description</td>
        <td>Etat</td>
        <td>Selecteur</td>
        <td>Date</td>
        <td>Delete</td>
        <td>Update</td>

    </tr>
    {% for rec in R %}
        <tr>

            <td>{{ rec.description }}</td>
            <td>{{ rec.etat }}</td>
            <td>{{ rec.selecteur}}</td>
            <td>{{  rec.date|date('Y-m-d H:i:s')  }}</td>
            <td><a href=\"{{ path('Delete',{'id':rec.idRecl}) }}\">Delete</a></td>
            <td><a href=\"{{ path('Update',{'id':rec.idRecl}) }}\">Update</a></td>


        </tr>
    {% endfor %}
</table>
#}
{% endblock %}", "@Reclamation/Front/AfficheReclamation.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\ReclamationBundle\\Resources\\views\\Front\\AfficheReclamation.html.twig");
    }
}
