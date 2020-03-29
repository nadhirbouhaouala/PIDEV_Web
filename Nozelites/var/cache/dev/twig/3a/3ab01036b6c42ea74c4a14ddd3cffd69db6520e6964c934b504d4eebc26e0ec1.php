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

/* @Nozelites/Front/MembreGroupes.html.twig */
class __TwigTemplate_0347df445890704016c621eac2376435a272f6f80ba2e65a1b9d2a1bb120cbc0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/MembreGroupes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/MembreGroupes.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Nozelites/Front/MembreGroupes.html.twig", 1);
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
        echo " - MGroupes ";
        
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
        echo "    <div class=\"intro-banner\" data-background-image=\"images/home-background.jpg\">
        <div class=\"container\">
            <!-- Dashboard Headline -->
            <div class=\"dashboard-headline\">
                <!--<h3>Bookmarks</h3>-->

                <!-- Breadcrumbs -->
                <nav id=\"breadcrumbs\" class=\"dark\">
                    <ul>
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesajouterfront");
        echo "\">ajouter</a></li>
                    </ul>
                </nav>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-6 content-left-offset\">

                    <div class=\"dashboard-box\" style=\"overflow-x:auto;\">
                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Mes groupes </h3>
                            <input type=\"text\" placeholder=\"Chercher ici ...\" onKeyPress=\"chercher(this.value);\" >
                            <script type=\"text/javascript\">
                                function chercher(search) {
                                    if(search==\"\"){
                                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupesmembres"] ?? $this->getContext($context, "groupesmembres")));
        foreach ($context['_seq'] as $context["_key"] => $context["gm"]) {
            // line 32
            echo "                                            ";
            if (((($this->getAttribute($context["gm"], "etat", []) == "administrateur") || ($this->getAttribute($context["gm"], "etat", []) == "standard")) || ($this->getAttribute($context["gm"], "etat", []) == "membre"))) {
                // line 33
                echo "                                                document.getElementById('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gm"], "idGm", []), "html", null, true);
                echo "').style.display=\"block\";
                                            ";
            }
            // line 35
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                    }
                                    else{
                                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupesmembres"] ?? $this->getContext($context, "groupesmembres")));
        foreach ($context['_seq'] as $context["_key"] => $context["gm"]) {
            // line 39
            echo "                                            ";
            if (((($this->getAttribute($context["gm"], "etat", []) == "administrateur") || ($this->getAttribute($context["gm"], "etat", []) == "standard")) || ($this->getAttribute($context["gm"], "etat", []) == "membre"))) {
                // line 40
                echo "                                                if('";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "titre", []), "html", null, true);
                echo "'.toUpperCase().includes(search.toUpperCase())||'";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "description", []), "html", null, true);
                echo "'.toUpperCase().includes(search.toUpperCase()))
                                                    document.getElementById('";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["gm"], "idGm", []), "html", null, true);
                echo "').style.display=\"block\";
                                                else
                                                    document.getElementById('";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["gm"], "idGm", []), "html", null, true);
                echo "').style.display=\"none\";
                                            ";
            }
            // line 45
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                    }
                                }
                            </script>
                        </div>

                        <div class=\"content\">
                            <ul class=\"dashboard-box-list\">
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupesmembres"] ?? $this->getContext($context, "groupesmembres")));
        foreach ($context['_seq'] as $context["_key"] => $context["gm"]) {
            // line 54
            echo "                                    ";
            if (((($this->getAttribute($context["gm"], "etat", []) == "administrateur") || ($this->getAttribute($context["gm"], "etat", []) == "standard")) || ($this->getAttribute($context["gm"], "etat", []) == "membre"))) {
                // line 55
                echo "
                                    <li id=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["gm"], "idGm", []), "html", null, true);
                echo "\">
                                        <!-- Overview -->
                                        <div class=\"freelancer-overview\" onclick=\"document.getElementById('";
                // line 58
                echo twig_escape_filter($this->env, ("show_" . $this->getAttribute($context["gm"], "idGm", [])), "html", null, true);
                echo "').click();\">
                                            <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupeafficherfront", ["id" => $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "idGroupe", [])]), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ("show_" . $this->getAttribute($context["gm"], "idGm", [])), "html", null, true);
                echo "\"></a>
                                            <div class=\"freelancer-overview-inner\">

                                                <!-- Avatar -->
                                                <div class=\"freelancer-avatar\">
                                                    <div class=\"verified-badge\"></div>
                                                    <a href=\"#\"><img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user-avatar-big-02.jpg"), "html", null, true);
                echo "\" alt=\"\"></a>
                                                </div>

                                                <!-- Name -->
                                                <div class=\"freelancer-name\">
                                                    <h4><a href=\"#\"> ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "titre", []), "html", null, true);
                echo "
                                                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                    <span>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "description", []), "html", null, true);
                echo " </span>
                                                    <!-- Rating -->
                                                    <div class=\"freelancer-rating\">
                                                        <div class=\"star-rating\" data-rating=\"4.2\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class=\"buttons-to-right\">
                                            <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesmodifierfront", ["id" => $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "idGroupe", [])]), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\" title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                            ";
                // line 84
                if (($this->getAttribute($context["gm"], "etat", []) == "administrateur")) {
                    // line 85
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupessupprimerfront", ["id" => $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "idGroupe", [])]), "html", null, true);
                    echo "\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                            ";
                }
                // line 87
                echo "                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->
                                        </div>
                                    </li>

                                    ";
            }
            // line 93
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                            </ul>
                        </div>

                    </div>

            </div>

                <!-- Dashboard Box -->
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"dashboard-box\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Mes Invitations </h3>
                        </div>

                        <div class=\"content\">
                            <ul class=\"dashboard-box-list\">
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupesmembres"] ?? $this->getContext($context, "groupesmembres")));
        foreach ($context['_seq'] as $context["_key"] => $context["gm"]) {
            // line 113
            echo "                                    ";
            if (($this->getAttribute($context["gm"], "etat", []) == "invitation")) {
                // line 114
                echo "
                                <li>
                                    <!-- Overview -->
                                    <div class=\"freelancer-overview\" onclick=\"alert('show')\">
                                        <div class=\"freelancer-overview-inner\">

                                            <!-- Avatar -->
                                            <div class=\"freelancer-avatar\">
                                                <div class=\"verified-badge\"></div>
                                                <a href=\"#\"><img src=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user-avatar-big-02.jpg"), "html", null, true);
                echo "\" alt=\"\"></a>
                                            </div>

                                            <!-- Name -->
                                            <div class=\"freelancer-name\">
                                                <h4><a href=\"#\"> ";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "titre", []), "html", null, true);
                echo " -
                                                        ";
                // line 129
                if (($this->getAttribute($context["gm"], "idInvite", []) !=  -1)) {
                    // line 130
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["membres"] ?? $this->getContext($context, "membres")));
                    foreach ($context['_seq'] as $context["_key"] => $context["indexmembre"]) {
                        // line 131
                        echo "                                                                ";
                        if (($this->getAttribute($context["indexmembre"], "idUsr", []) == $this->getAttribute($context["gm"], "idInvite", []))) {
                            // line 132
                            echo "                                                                    ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["indexmembre"], "login", []), "html", null, true);
                            echo "
                                                                ";
                        }
                        // line 134
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indexmembre'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "                                                        ";
                }
                // line 136
                echo "                                                        <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                <span>iOS Expert + Node Dev</span>
                                                <!-- Rating -->
                                                <div class=\"freelancer-rating\">
                                                    <div class=\"star-rating\" data-rating=\"4.2\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class=\"buttons-to-right\">
                                        <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                        <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>-->
                                        <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesaccepterinvitationfront", ["id" => $this->getAttribute($context["gm"], "idGm", [])]), "html", null, true);
                echo "\" onclick=\"alert('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gm"], "idGm", []), "html", null, true);
                echo "')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                        <a href=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesrefuserinvitationfront", ["id" => $this->getAttribute($context["gm"], "idGm", [])]), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></a>
                                    </div>
                                </li>

                                    ";
            }
            // line 156
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Nozelites/Front/MembreGroupes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 157,  360 => 156,  352 => 151,  346 => 150,  330 => 136,  327 => 135,  321 => 134,  315 => 132,  312 => 131,  307 => 130,  305 => 129,  301 => 128,  293 => 123,  282 => 114,  279 => 113,  275 => 112,  255 => 94,  249 => 93,  241 => 87,  235 => 85,  233 => 84,  229 => 83,  215 => 72,  210 => 70,  202 => 65,  191 => 59,  187 => 58,  182 => 56,  179 => 55,  176 => 54,  172 => 53,  163 => 46,  157 => 45,  152 => 43,  147 => 41,  140 => 40,  137 => 39,  133 => 38,  129 => 36,  123 => 35,  117 => 33,  114 => 32,  110 => 31,  91 => 15,  80 => 6,  71 => 5,  52 => 3,  30 => 1,);
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

{% block titre %}{{ parent() }} - MGroupes {% endblock %}

{% block content %}
    <div class=\"intro-banner\" data-background-image=\"images/home-background.jpg\">
        <div class=\"container\">
            <!-- Dashboard Headline -->
            <div class=\"dashboard-headline\">
                <!--<h3>Bookmarks</h3>-->

                <!-- Breadcrumbs -->
                <nav id=\"breadcrumbs\" class=\"dark\">
                    <ul>
                        <li><a href=\"{{ path('nozelites_membregroupesajouterfront') }}\">ajouter</a></li>
                    </ul>
                </nav>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-6 content-left-offset\">

                    <div class=\"dashboard-box\" style=\"overflow-x:auto;\">
                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Mes groupes </h3>
                            <input type=\"text\" placeholder=\"Chercher ici ...\" onKeyPress=\"chercher(this.value);\" >
                            <script type=\"text/javascript\">
                                function chercher(search) {
                                    if(search==\"\"){
                                        {%  for gm in groupesmembres %}
                                            {% if gm.etat == 'administrateur' or gm.etat == 'standard' or gm.etat == 'membre' %}
                                                document.getElementById('{{ gm.idGm }}').style.display=\"block\";
                                            {% endif %}
                                        {% endfor %}
                                    }
                                    else{
                                        {%  for gm in groupesmembres %}
                                            {% if gm.etat == 'administrateur' or gm.etat == 'standard' or gm.etat == 'membre' %}
                                                if('{{ gm.idGroupe.titre }}'.toUpperCase().includes(search.toUpperCase())||'{{ gm.idGroupe.description }}'.toUpperCase().includes(search.toUpperCase()))
                                                    document.getElementById('{{ gm.idGm }}').style.display=\"block\";
                                                else
                                                    document.getElementById('{{ gm.idGm }}').style.display=\"none\";
                                            {% endif %}
                                        {% endfor %}
                                    }
                                }
                            </script>
                        </div>

                        <div class=\"content\">
                            <ul class=\"dashboard-box-list\">
                                {%  for gm in groupesmembres %}
                                    {% if gm.etat == 'administrateur' or gm.etat == 'standard' or gm.etat == 'membre' %}

                                    <li id=\"{{ gm.idGm }}\">
                                        <!-- Overview -->
                                        <div class=\"freelancer-overview\" onclick=\"document.getElementById('{{ 'show_'~gm.idGm }}').click();\">
                                            <a href=\"{{ path('nozelites_membregroupeafficherfront',{'id':gm.idGroupe.idGroupe}) }}\" id=\"{{ 'show_'~gm.idGm }}\"></a>
                                            <div class=\"freelancer-overview-inner\">

                                                <!-- Avatar -->
                                                <div class=\"freelancer-avatar\">
                                                    <div class=\"verified-badge\"></div>
                                                    <a href=\"#\"><img src=\"{{ asset('images/user-avatar-big-02.jpg') }}\" alt=\"\"></a>
                                                </div>

                                                <!-- Name -->
                                                <div class=\"freelancer-name\">
                                                    <h4><a href=\"#\"> {{ gm.idGroupe.titre }}
                                                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                    <span>{{ gm.idGroupe.description }} </span>
                                                    <!-- Rating -->
                                                    <div class=\"freelancer-rating\">
                                                        <div class=\"star-rating\" data-rating=\"4.2\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class=\"buttons-to-right\">
                                            <a href=\"{{ path('nozelites_membregroupesmodifierfront',{'id':gm.idGroupe.idGroupe}) }}\" class=\"button red ripple-effect ico\" title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                            {% if gm.etat == \"administrateur\" %}
                                                <a href=\"{{ path('nozelites_membregroupessupprimerfront',{'id':gm.idGroupe.idGroupe}) }}\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                            {% endif %}
                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->
                                        </div>
                                    </li>

                                    {% endif %}
                                {%  endfor %}
                            </ul>
                        </div>

                    </div>

            </div>

                <!-- Dashboard Box -->
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"dashboard-box\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Mes Invitations </h3>
                        </div>

                        <div class=\"content\">
                            <ul class=\"dashboard-box-list\">
                                {%  for gm in groupesmembres %}
                                    {% if gm.etat == \"invitation\" %}

                                <li>
                                    <!-- Overview -->
                                    <div class=\"freelancer-overview\" onclick=\"alert('show')\">
                                        <div class=\"freelancer-overview-inner\">

                                            <!-- Avatar -->
                                            <div class=\"freelancer-avatar\">
                                                <div class=\"verified-badge\"></div>
                                                <a href=\"#\"><img src=\"{{ asset('images/user-avatar-big-02.jpg') }}\" alt=\"\"></a>
                                            </div>

                                            <!-- Name -->
                                            <div class=\"freelancer-name\">
                                                <h4><a href=\"#\"> {{ gm.idGroupe.titre }} -
                                                        {% if gm.idInvite != -1 %}
                                                            {% for indexmembre in membres %}
                                                                {% if indexmembre.idUsr == gm.idInvite %}
                                                                    {{ indexmembre.login }}
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% endif %}
                                                        <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                <span>iOS Expert + Node Dev</span>
                                                <!-- Rating -->
                                                <div class=\"freelancer-rating\">
                                                    <div class=\"star-rating\" data-rating=\"4.2\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class=\"buttons-to-right\">
                                        <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                        <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>-->
                                        <a href=\"{{ path('nozelites_membregroupesaccepterinvitationfront',{'id':gm.idGm}) }}\" onclick=\"alert('{{ gm.idGm }}')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                        <a href=\"{{ path('nozelites_membregroupesrefuserinvitationfront',{'id':gm.idGm}) }}\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></a>
                                    </div>
                                </li>

                                    {% endif %}
                                {%  endfor %}
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


{% endblock %}", "@Nozelites/Front/MembreGroupes.html.twig", "C:\\wamp64\\www\\3.2\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Front\\MembreGroupes.html.twig");
    }
}
