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

/* @Offre/Default/listeOffresMembre.html.twig */
class __TwigTemplate_c090ea815234bb0d29ee45cb8ea2210e8f27283de5606ffe84f1c102bc50c3d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Nozelites/basefrontmembre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Default/listeOffresMembre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Default/listeOffresMembre.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Offre/Default/listeOffresMembre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Offres ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"content\">
        <ul class=\"dashboard-box-list\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 9
            echo "                ";
            if (($this->getAttribute($this->getAttribute($context["offre"], "idRecepteur", []), "idUsr", []) == 3)) {
                echo " ";
                // line 10
                echo "                    <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", []), "html", null, true);
                echo "\">
                        <!-- Overview -->
                        <div class=\"freelancer-overview\" onclick=\"document.getElementById('";
                // line 12
                echo twig_escape_filter($this->env, ("show_" . $this->getAttribute($context["offre"], "id", [])), "html", null, true);
                echo "').click();\">
                            <div class=\"freelancer-overview-inner\">
                                <!-- Name -->
                                <div class=\"freelancer-name\">
                                    <h4><a href=\"#\"><b>Etat : </b> ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "etat", []), "html", null, true);
                echo "</h4>
                                    <span><b>Chasseur de tête : </b>";
                // line 17
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["offre"], "idEmetteur", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["offre"], "idEmetteur", []), "prenom", [])), "html", null, true);
                echo " </span><br>
                                    <span> <b>Type : </b>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "type", []), "html", null, true);
                echo " </span><br>
                                    <span> <b>Entreprise : </b>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "entreprise", []), "html", null, true);
                echo " </span><br>
                                    <span> <b>Domaine : </b>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "domaine", []), "html", null, true);
                echo " </span><br>
                                    <span> <b>Poste : </b>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "poste", []), "html", null, true);
                echo " </span><br>
                                    <span> <b>Requis : </b>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "requis", []), "html", null, true);
                echo " </span><br>
                                    <span> <b>Description : </b>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "description", []), "html", null, true);
                echo " </span><br>
                                    <span> <b>Date : </b>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "date", []), "html", null, true);
                echo " </span>
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class=\"buttons-to-right\">
                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offre_accepter", ["id" => $this->getAttribute($context["offre"], "id", [])]), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-feather-plus-square\"></i></a>
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offre_refuser", ["id" => $this->getAttribute($context["offre"], "id", [])]), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-minus-square\"></i></a>
                        </div>
                    </li>
                ";
            }
            // line 36
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Offre/Default/listeOffresMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 37,  158 => 36,  151 => 32,  147 => 31,  137 => 24,  133 => 23,  129 => 22,  125 => 21,  121 => 20,  117 => 19,  113 => 18,  109 => 17,  105 => 16,  98 => 12,  92 => 10,  88 => 9,  84 => 8,  80 => 6,  71 => 5,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Nozelites/basefrontmembre.html.twig' %}

{% block title %}{{ parent() }} - Offres {% endblock %}

{% block content %}
    <div class=\"content\">
        <ul class=\"dashboard-box-list\">
            {%  for offre in offres %}
                {% if offre.idRecepteur.idUsr == 3 %} {#Id du membre connecté#}
                    <li id=\"{{ offre.id }}\">
                        <!-- Overview -->
                        <div class=\"freelancer-overview\" onclick=\"document.getElementById('{{ 'show_'~offre.id }}').click();\">
                            <div class=\"freelancer-overview-inner\">
                                <!-- Name -->
                                <div class=\"freelancer-name\">
                                    <h4><a href=\"#\"><b>Etat : </b> {{ offre.etat }}</h4>
                                    <span><b>Chasseur de tête : </b>{{ offre.idEmetteur.nom ~ \" \" ~ offre.idEmetteur.prenom }} </span><br>
                                    <span> <b>Type : </b>{{ offre.type }} </span><br>
                                    <span> <b>Entreprise : </b>{{ offre.entreprise }} </span><br>
                                    <span> <b>Domaine : </b>{{ offre.domaine}} </span><br>
                                    <span> <b>Poste : </b>{{ offre.poste }} </span><br>
                                    <span> <b>Requis : </b>{{ offre.requis }} </span><br>
                                    <span> <b>Description : </b>{{ offre.description }} </span><br>
                                    <span> <b>Date : </b>{{ offre.date }} </span>
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class=\"buttons-to-right\">
                            <a href=\"{{ path('offre_accepter',{'id':offre.id}) }}\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-feather-plus-square\"></i></a>
                            <a href=\"{{ path('offre_refuser',{'id':offre.id}) }}\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-minus-square\"></i></a>
                        </div>
                    </li>
                {% endif %}
            {%  endfor %}
        </ul>
    </div>
{% endblock %}



", "@Offre/Default/listeOffresMembre.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\OffreBundle\\Resources\\views\\Default\\listeOffresMembre.html.twig");
    }
}
