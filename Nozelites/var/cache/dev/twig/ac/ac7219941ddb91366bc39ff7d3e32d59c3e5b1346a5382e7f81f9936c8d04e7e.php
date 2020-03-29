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

/* @Nozelites/Front/MembreGroupesAjouter.html.twig */
class __TwigTemplate_39e355b2e5044091d4ef5a6a133cb1e4d456647243a4c8a45df175119e98d0e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/MembreGroupesAjouter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/MembreGroupesAjouter.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Nozelites/Front/MembreGroupesAjouter.html.twig", 1);
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
        echo " - MGroup add ";
        
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

            <div class=\"row\">

                <div class=\"col-xl-6 col-lg-6 content-left-offset\">
                    <h1>Groupe creation</h1>
                    <br>
                    <form method=\"post\" id=\"mainform\">
                        <input type=\"text\" name=\"titre\" class=\"with-border\" value=\"\">
                        <input type=\"text\" name=\"description\" class=\"with-border\" value=\"\">
                        <select name=\"autorisation\" class=\"selectpicker\">
                            <option value=\"1\">Publique</option>
                            <option value=\"2\">Privé</option>
                        </select>
                        <br>
                        <input type=\"hidden\" name=\"invitations\" value=\"0\">
                        <input type=\"submit\" value=\"Create\" />
                    </form>

                    <ul>
                        <li>
                            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesfront");
        echo "\">Back to the list</a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"dashboard-box\" style=\"overflow-x:auto;\">
                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Mes groupes </h3>
                            <input type=\"text\" placeholder=\"Chercher ici ...\" >
                        </div>
                        <input type=\"text\" name=\"bouhaouala\">
                        <div class=\"content\">
                            <ul class=\"dashboard-box-list\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membres"] ?? $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 44
            echo "                                    ";
            if (($context["membre"] != ($context["membrecncte"] ?? $this->getContext($context, "membrecncte")))) {
                // line 45
                echo "                                        <li>
                                            <!-- Overview -->
                                            <div class=\"freelancer-overview\" onclick=\"alert('show');\">
                                                <div class=\"freelancer-overview-inner\">

                                                    <!-- Avatar -->
                                                    <div class=\"freelancer-avatar\">
                                                        <div class=\"verified-badge\"></div>
                                                        <a href=\"#\"><img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user-avatar-big-02.jpg"), "html", null, true);
                echo "\" alt=\"\"></a>
                                                    </div>

                                                    <!-- Name -->
                                                    <div class=\"freelancer-name\">
                                                        <h4><a href=\"#\"> ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "login", []), "html", null, true);
                echo "
                                                                <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                        <span>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "login", []), "html", null, true);
                echo " </span>
                                                        <!-- Rating -->
                                                        <div class=\"freelancer-rating\">
                                                            <div class=\"star-rating\" data-rating=\"4.2\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

<script type=\"text/javascript\">
    function invitermembre(idmembre) {
        var input = document.createElement('input');
        input.setAttribute('type','hidden');
        input.setAttribute('name','membre'+document.getElementsByName('invitations')[0].value);
        input.setAttribute('value',idmembre);
        document.getElementById('mainform').appendChild(input);
        document.getElementsByName('invitations')[0].value=parseFloat(document.getElementsByName('invitations')[0].value)+parseFloat(1);
        document.getElementById(\"btn_\"+idmembre).style=\"display:none\";
        //alert(idmembre+\" \"+document.getElementsByName('invitations')[0].value);
    }
</script>

                                            <!-- Buttons -->
                                            <div class=\"buttons-to-right\">
                                                <button onclick=\"invitermembre(";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "idusr", []), "html", null, true);
                echo ")\" id=\"btn_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "idusr", []), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\" title=\"Inviter\" data-tippy-placement=\"left\"><i class=\"icon-feather-plus\"></i></button>
                                                <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                                <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                                <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->
                                            </div>
                                        </li>

                                    ";
            }
            // line 92
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return "@Nozelites/Front/MembreGroupesAjouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 93,  192 => 92,  179 => 84,  152 => 60,  147 => 58,  139 => 53,  129 => 45,  126 => 44,  122 => 43,  104 => 28,  80 => 6,  71 => 5,  52 => 3,  30 => 1,);
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

{% block titre %}{{ parent() }} - MGroup add {% endblock %}

{% block content %}
    <div class=\"intro-banner\" data-background-image=\"images/home-background.jpg\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-xl-6 col-lg-6 content-left-offset\">
                    <h1>Groupe creation</h1>
                    <br>
                    <form method=\"post\" id=\"mainform\">
                        <input type=\"text\" name=\"titre\" class=\"with-border\" value=\"\">
                        <input type=\"text\" name=\"description\" class=\"with-border\" value=\"\">
                        <select name=\"autorisation\" class=\"selectpicker\">
                            <option value=\"1\">Publique</option>
                            <option value=\"2\">Privé</option>
                        </select>
                        <br>
                        <input type=\"hidden\" name=\"invitations\" value=\"0\">
                        <input type=\"submit\" value=\"Create\" />
                    </form>

                    <ul>
                        <li>
                            <a href=\"{{ path('nozelites_membregroupesfront') }}\">Back to the list</a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"dashboard-box\" style=\"overflow-x:auto;\">
                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Mes groupes </h3>
                            <input type=\"text\" placeholder=\"Chercher ici ...\" >
                        </div>
                        <input type=\"text\" name=\"bouhaouala\">
                        <div class=\"content\">
                            <ul class=\"dashboard-box-list\">
                                {%  for membre in membres %}
                                    {% if membre != membrecncte %}
                                        <li>
                                            <!-- Overview -->
                                            <div class=\"freelancer-overview\" onclick=\"alert('show');\">
                                                <div class=\"freelancer-overview-inner\">

                                                    <!-- Avatar -->
                                                    <div class=\"freelancer-avatar\">
                                                        <div class=\"verified-badge\"></div>
                                                        <a href=\"#\"><img src=\"{{ asset('images/user-avatar-big-02.jpg') }}\" alt=\"\"></a>
                                                    </div>

                                                    <!-- Name -->
                                                    <div class=\"freelancer-name\">
                                                        <h4><a href=\"#\"> {{ membre.login }}
                                                                <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                        <span>{{ membre.login }} </span>
                                                        <!-- Rating -->
                                                        <div class=\"freelancer-rating\">
                                                            <div class=\"star-rating\" data-rating=\"4.2\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

<script type=\"text/javascript\">
    function invitermembre(idmembre) {
        var input = document.createElement('input');
        input.setAttribute('type','hidden');
        input.setAttribute('name','membre'+document.getElementsByName('invitations')[0].value);
        input.setAttribute('value',idmembre);
        document.getElementById('mainform').appendChild(input);
        document.getElementsByName('invitations')[0].value=parseFloat(document.getElementsByName('invitations')[0].value)+parseFloat(1);
        document.getElementById(\"btn_\"+idmembre).style=\"display:none\";
        //alert(idmembre+\" \"+document.getElementsByName('invitations')[0].value);
    }
</script>

                                            <!-- Buttons -->
                                            <div class=\"buttons-to-right\">
                                                <button onclick=\"invitermembre({{ membre.idusr }})\" id=\"btn_{{ membre.idusr }}\" class=\"button red ripple-effect ico\" title=\"Inviter\" data-tippy-placement=\"left\"><i class=\"icon-feather-plus\"></i></button>
                                                <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                                <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                                <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->
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


{% endblock %}
", "@Nozelites/Front/MembreGroupesAjouter.html.twig", "C:\\wamp64\\www\\3.2\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Front\\MembreGroupesAjouter.html.twig");
    }
}
