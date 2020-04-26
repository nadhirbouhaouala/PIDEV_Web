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
class __TwigTemplate_fc45da710920c9a1344580d609e186cd3fbf38d733c7167ca119f531e7d3178e extends \Twig\Template
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
                            <h3><i class=\"icon-line-awesome-group\"></i> Mes groupes </h3>
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
                                                    <div class=\"";
                // line 64
                if (($this->getAttribute($context["gm"], "etat", []) == "administrateur")) {
                    echo "verified-badge";
                }
                echo "\"></div>
                                                    <a href=\"#\"><img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/groupes.png"), "html", null, true);
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
                                                        <button class=\"button ripple-effect\" style=\"pointer-events: none;\">
                                                            ";
                // line 76
                if (($this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "autorisation", []) == 0)) {
                    // line 77
                    echo "                                                                Fermé
                                                            ";
                } else {
                    // line 79
                    echo "                                                                Ouvert
                                                            ";
                }
                // line 81
                echo "                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class=\"buttons-to-right\">
                                            <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Ajouter1", ["id" => $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "idGroupe", []), "type" => "groupe"]), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\" title=\"Ajouter\" data-tippy-placement=\"left\"><i class=\" icon-feather-align-left\"></i></a>

                                            ";
                // line 91
                if (($this->getAttribute($context["gm"], "etat", []) == "administrateur")) {
                    // line 92
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesmodifierfront", ["id" => $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "idGroupe", [])]), "html", null, true);
                    echo "\" class=\"button red ripple-effect ico\" title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                                <a href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupessupprimerfront", ["id" => $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "idGroupe", [])]), "html", null, true);
                    echo "\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                            ";
                }
                // line 95
                echo "                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->
                                        </div>
                                    </li>

                                    ";
            }
            // line 101
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
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
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupesmembres"] ?? $this->getContext($context, "groupesmembres")));
        foreach ($context['_seq'] as $context["_key"] => $context["gm"]) {
            // line 121
            echo "                                    ";
            if (($this->getAttribute($context["gm"], "etat", []) == "invitation")) {
                // line 122
                echo "
                                <li>
                                    <!-- Overview -->
                                    <div class=\"freelancer-overview\" onclick=\"alert('show')\">
                                        <div class=\"freelancer-overview-inner\">

                                            <!-- Avatar -->
                                            <div class=\"freelancer-avatar\">
                                                <div class=\"verified-badge\"></div>
                                                <a href=\"#\"><img src=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user-avatar-big-02.jpg"), "html", null, true);
                echo "\" alt=\"\"></a>
                                            </div>

                                            <!-- Name -->
                                            <div class=\"freelancer-name\">
                                                <h4><a href=\"#\">
                                                        ";
                // line 137
                if (($this->getAttribute($context["gm"], "idInvite", []) !=  -1)) {
                    // line 138
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["membres"] ?? $this->getContext($context, "membres")));
                    foreach ($context['_seq'] as $context["_key"] => $context["indexmembre"]) {
                        // line 139
                        echo "                                                                ";
                        if (($this->getAttribute($context["indexmembre"], "idUsr", []) == $this->getAttribute($context["gm"], "idInvite", []))) {
                            // line 140
                            echo "                                                                    ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["indexmembre"], "login", []), "html", null, true);
                            echo "
                                                                ";
                        }
                        // line 142
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indexmembre'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                                                        ";
                }
                // line 144
                echo "                                                        <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                <span>Vous invite à rejoindre le groupe : ";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "titre", []), "html", null, true);
                echo "</span>
                                                <!-- Rating -->
                                                <div class=\"freelancer-rating\">
                                                    <button class=\"button ripple-effect\" style=\"pointer-events: none;\">
                                                        ";
                // line 149
                if (($this->getAttribute($this->getAttribute($context["gm"], "idGroupe", []), "autorisation", []) == 0)) {
                    // line 150
                    echo "                                                            Fermé
                                                        ";
                } else {
                    // line 152
                    echo "                                                            Ouvert
                                                        ";
                }
                // line 154
                echo "                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class=\"buttons-to-right\">
                                        <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                        <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>-->
                                        <a href=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesaccepterinvitationfront", ["id" => $this->getAttribute($context["gm"], "idGm", [])]), "html", null, true);
                echo "\" onclick=\"alert('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gm"], "idGm", []), "html", null, true);
                echo "')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                        <a href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesrefuserinvitationfront", ["id" => $this->getAttribute($context["gm"], "idGm", [])]), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></a>
                                    </div>
                                </li>

                                    ";
            }
            // line 170
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
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
        return array (  402 => 171,  396 => 170,  388 => 165,  382 => 164,  370 => 154,  366 => 152,  362 => 150,  360 => 149,  353 => 145,  350 => 144,  347 => 143,  341 => 142,  335 => 140,  332 => 139,  327 => 138,  325 => 137,  316 => 131,  305 => 122,  302 => 121,  298 => 120,  278 => 102,  272 => 101,  264 => 95,  259 => 93,  254 => 92,  252 => 91,  247 => 89,  237 => 81,  233 => 79,  229 => 77,  227 => 76,  220 => 72,  215 => 70,  207 => 65,  201 => 64,  191 => 59,  187 => 58,  182 => 56,  179 => 55,  176 => 54,  172 => 53,  163 => 46,  157 => 45,  152 => 43,  147 => 41,  140 => 40,  137 => 39,  133 => 38,  129 => 36,  123 => 35,  117 => 33,  114 => 32,  110 => 31,  91 => 15,  80 => 6,  71 => 5,  52 => 3,  30 => 1,);
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
                            <h3><i class=\"icon-line-awesome-group\"></i> Mes groupes </h3>
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
                                                    <div class=\"{% if gm.etat == \"administrateur\" %}verified-badge{% endif %}\"></div>
                                                    <a href=\"#\"><img src=\"{{ asset('images/groupes.png') }}\" alt=\"\"></a>
                                                </div>

                                                <!-- Name -->
                                                <div class=\"freelancer-name\">
                                                    <h4><a href=\"#\"> {{ gm.idGroupe.titre }}
                                                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                    <span>{{ gm.idGroupe.description }} </span>
                                                    <!-- Rating -->
                                                    <div class=\"freelancer-rating\">
                                                        <button class=\"button ripple-effect\" style=\"pointer-events: none;\">
                                                            {% if gm.idGroupe.autorisation == 0 %}
                                                                Fermé
                                                            {% else %}
                                                                Ouvert
                                                            {% endif %}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class=\"buttons-to-right\">
                                            <a href=\"{{ path('Ajouter1',{'id':gm.idGroupe.idGroupe,'type':'groupe'}) }}\" class=\"button red ripple-effect ico\" title=\"Ajouter\" data-tippy-placement=\"left\"><i class=\" icon-feather-align-left\"></i></a>

                                            {% if gm.etat == \"administrateur\" %}
                                                <a href=\"{{ path('nozelites_membregroupesmodifierfront',{'id':gm.idGroupe.idGroupe}) }}\" class=\"button red ripple-effect ico\" title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
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
                                                <h4><a href=\"#\">
                                                        {% if gm.idInvite != -1 %}
                                                            {% for indexmembre in membres %}
                                                                {% if indexmembre.idUsr == gm.idInvite %}
                                                                    {{ indexmembre.login }}
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% endif %}
                                                        <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                <span>Vous invite à rejoindre le groupe : {{ gm.idGroupe.titre }}</span>
                                                <!-- Rating -->
                                                <div class=\"freelancer-rating\">
                                                    <button class=\"button ripple-effect\" style=\"pointer-events: none;\">
                                                        {% if gm.idGroupe.autorisation == 0 %}
                                                            Fermé
                                                        {% else %}
                                                            Ouvert
                                                        {% endif %}
                                                    </button>
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


{% endblock %}", "@Nozelites/Front/MembreGroupes.html.twig", "C:\\wamp64\\www\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Front\\MembreGroupes.html.twig");
    }
}
