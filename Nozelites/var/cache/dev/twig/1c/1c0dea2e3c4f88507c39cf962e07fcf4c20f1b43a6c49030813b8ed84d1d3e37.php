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

/* @Nozelites/Front/MembreGroup.html.twig */
class __TwigTemplate_fa812735971178c156b566c1d926e290c7e0fb62bc9a28a11be3c4f9f59bac52 extends \Twig\Template
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
        return "@Nozelites/basefrontmembre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/MembreGroup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/MembreGroup.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Nozelites/Front/MembreGroup.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- Toastr style -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/toastr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "<!-- Intro Banner
================================================== -->
<!-- add class \"disable-gradient\" to enable consistent background overlay -->
<div class=\"intro-banner\" data-background-image=\"images/home-background.jpg\">
    <div class=\"container\">

        <!-- Overview -->
        <div class=\"freelancer-overview\" onclick=\"document.getElementById('show').click();\">
            <div class=\"freelancer-overview-inner\">

                <!-- Avatar -->
                <div class=\"freelancer-avatar\">
                    <div class=\"";
        // line 25
        if ((($context["isadmin"] ?? $this->getContext($context, "isadmin")) == 1)) {
            echo "verified-badge";
        }
        echo "\"></div>
                    <a href=\"#\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/groupes.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>

                <!-- Name -->
                <div class=\"freelancer-name\">
                    <h4><a href=\"#\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["groupe"] ?? $this->getContext($context, "groupe")), "titre", []), "html", null, true);
        echo "
                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                    <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["groupe"] ?? $this->getContext($context, "groupe")), "description", []), "html", null, true);
        echo " </span>
                    <!-- Rating -->
                    <div class=\"freelancer-rating\">
                        <div class=\"star-rating\" data-rating=\"";
        // line 36
        if (($this->getAttribute(($context["groupe"] ?? $this->getContext($context, "groupe")), "autorisation", []) == 0)) {
            echo "fermé";
        } else {
            echo "ouvert";
        }
        echo "\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class=\"buttons-to-right\">
            <a href=\"\" class=\"button red ripple-effect ico\" title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->
        </div>

        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-6 content-left-offset\">
                <div class=\"dashboard-box\">

                    <!-- Headline -->
                    <div class=\"headline\">
                        <h3><i class=\"icon-material-outline-face\"></i> Membres du groupe </h3>
                    </div>

                    <div class=\"content\">
                        <ul class=\"dashboard-box-list\">
                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 61
            echo "
                                    <li>
                                        <!-- Overview -->
                                        <div class=\"freelancer-overview\" onclick=\"alert('show')\">
                                            <div class=\"freelancer-overview-inner\">

                                                <!-- Avatar -->
                                                <div class=\"freelancer-avatar\">
                                                    <div class=\"verified-badge\"></div>
                                                    <a href=\"#\"><img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user-avatar-big-02.jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                                                </div>

                                                <!-- Name -->
                                                <div class=\"freelancer-name\">
                                                    <h4><a href=\"#\"> ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "login", []), "html", null, true);
            echo " -
                                                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                    <span>admin.mail - admin.tel</span>
                                                    <!-- Rating -->
                                                    <div class=\"freelancer-rating\">
                                                        <div class=\"star-rating\" data-rating=\"admin\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class=\"buttons-to-right\">
                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                            <a href=\"\" onclick=\"alert('')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                            <a href=\"\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></a>-->
                                        </div>
                                    </li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membres"] ?? $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 98
            echo "
                                <li id=\"";
            // line 99
            echo twig_escape_filter($this->env, ("membre_" . $this->getAttribute($context["membre"], "idusr", [])), "html", null, true);
            echo "\">
                                    <!-- Overview -->
                                    <div class=\"freelancer-overview\" onclick=\"alert('show')\">
                                        <div class=\"freelancer-overview-inner\">

                                            <!-- Avatar -->
                                            <div class=\"freelancer-avatar\">
                                                <a href=\"#\"><img src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user-avatar-big-02.jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                                            </div>

                                            <!-- Name -->
                                            <div class=\"freelancer-name\">
                                                <h4><a href=\"#\"> ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "login", []), "html", null, true);
            echo " -
                                                        <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                <span>membre.mail - membre.tel</span>
                                                <!-- Rating -->
                                                <div class=\"freelancer-rating\">
                                                    <div class=\"star-rating\" data-rating=\"simple\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class=\"buttons-to-right\">
                                        <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                        <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                        <a href=\"\" onclick=\"alert('')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                        <a href=\"\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></a>-->
                                        ";
            // line 128
            if ((($context["isadmin"] ?? $this->getContext($context, "isadmin")) == 1)) {
                // line 129
                echo "                                        <button onclick=\"
                                                \$.ajax(
                                                    {url: '";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membreretirerfront", ["id" => $this->getAttribute(($context["groupe"] ?? $this->getContext($context, "groupe")), "idGroupe", []), "idmembre" => $this->getAttribute($context["membre"], "idusr", [])]), "html", null, true);
                echo "', //This is the current doc
                                                    //type: 'POST',
                                                    //dataType:'json', // add json datatype to get json
                                                    //data: ({retirer: idmembre }),
                                                    success: function(data){
                                                        console.log(data);
                                                    }
                                                });
                                                document.getElementById('";
                // line 139
                echo twig_escape_filter($this->env, ("membre_" . $this->getAttribute($context["membre"], "idusr", [])), "html", null, true);
                echo "').style.display = 'none';
                                                \" class=\"button red ripple-effect ico\" title=\"Bloquer\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></button>
                                        ";
            }
            // line 142
            echo "                                    </div>
                                </li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "
                        </ul>
                    </div>
                </div>
            </div>


            ";
        // line 153
        if ((($this->getAttribute(($context["groupe"] ?? $this->getContext($context, "groupe")), "autorisation", []) == 1) || (($context["isadmin"] ?? $this->getContext($context, "isadmin")) == 1))) {
            // line 154
            echo "                
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"dashboard-box\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Inviter des membres </h3>
                        </div>

                        <div class=\"content\">
                            <ul class=\"dashboard-box-list\">
                                ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["autres"] ?? $this->getContext($context, "autres")));
            foreach ($context['_seq'] as $context["_key"] => $context["autre"]) {
                // line 166
                echo "
                                    <li id=\"";
                // line 167
                echo twig_escape_filter($this->env, ("autre_" . $this->getAttribute($context["autre"], "idusr", [])), "html", null, true);
                echo "\">
                                        <!-- Overview -->
                                        <div class=\"freelancer-overview\" onclick=\"alert('show')\">
                                            <div class=\"freelancer-overview-inner\">

                                                <!-- Avatar -->
                                                <div class=\"freelancer-avatar\">
                                                    <div class=\"verified-badge\"></div>
                                                    <a href=\"#\"><img src=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user-avatar-big-02.jpg"), "html", null, true);
                echo "\" alt=\"\"></a>
                                                </div>

                                                <!-- Name -->
                                                <div class=\"freelancer-name\">
                                                    <h4><a href=\"#\"> ";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["autre"], "login", []), "html", null, true);
                echo " -
                                                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                    <span>autre.mail - autre.tel</span>
                                                    <!-- Rating -->
                                                    <div class=\"freelancer-rating\">
                                                        <div class=\"star-rating\" data-rating=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($context["autre"], "experience", []), "html", null, true);
                echo "\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class=\"buttons-to-right\">
                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                            <a href=\"\" onclick=\"alert('')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>-->
                                            <button onclick=\"
                                                    \$.ajax(
                                                    {url: '";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membreinviterfront", ["id" => $this->getAttribute(($context["groupe"] ?? $this->getContext($context, "groupe")), "idGroupe", []), "idmembre" => $this->getAttribute($context["autre"], "idusr", [])]), "html", null, true);
                echo "', //This is the current doc
                                                    //type: 'POST',
                                                    //dataType:'json', // add json datatype to get json
                                                    //data: ({retirer: idmembre }),
                                                    success: function(data){
                                                    console.log(data);
                                                    }
                                                    });
                                                    document.getElementById('";
                // line 206
                echo twig_escape_filter($this->env, ("autre_" . $this->getAttribute($context["autre"], "idusr", [])), "html", null, true);
                echo "').style.display = 'none';
                                                    \" class=\"button red ripple-effect ico\" title=\"Inviter\" data-tippy-placement=\"left\"><i class=\"icon-feather-plus\"></i></button>
                                        </div>
                                    </li>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                            </ul>
                        </div>
                    </div>
                </div>

            ";
        }
        // line 218
        echo "
        </div>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 226
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 227
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Toastr script -->
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/toastr.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            toastr.success('Bienvenue au groupe', '";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute(($context["groupe"] ?? $this->getContext($context, "groupe")), "titre", []), "html", null, true);
        echo "')
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Nozelites/Front/MembreGroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 232,  444 => 229,  438 => 227,  429 => 226,  413 => 218,  405 => 212,  393 => 206,  382 => 198,  366 => 185,  358 => 180,  350 => 175,  339 => 167,  336 => 166,  332 => 165,  319 => 154,  317 => 153,  308 => 146,  299 => 142,  293 => 139,  282 => 131,  278 => 129,  276 => 128,  256 => 111,  248 => 106,  238 => 99,  235 => 98,  231 => 97,  228 => 96,  201 => 75,  193 => 70,  182 => 61,  178 => 60,  147 => 36,  141 => 33,  136 => 31,  128 => 26,  122 => 25,  108 => 13,  99 => 12,  87 => 9,  82 => 7,  73 => 6,  54 => 4,  32 => 1,);
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
{# extends '@Nozelites/basefront.html.twig' #}

{% block titre %}{{ parent() }} - Acceuil {% endblock %}

{% block stylesheets %}
{{ parent() }}
    <!-- Toastr style -->
    <link href=\"{{ asset('css/toastr.min.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
<!-- Intro Banner
================================================== -->
<!-- add class \"disable-gradient\" to enable consistent background overlay -->
<div class=\"intro-banner\" data-background-image=\"images/home-background.jpg\">
    <div class=\"container\">

        <!-- Overview -->
        <div class=\"freelancer-overview\" onclick=\"document.getElementById('show').click();\">
            <div class=\"freelancer-overview-inner\">

                <!-- Avatar -->
                <div class=\"freelancer-avatar\">
                    <div class=\"{% if isadmin == 1 %}verified-badge{% endif %}\"></div>
                    <a href=\"#\"><img src=\"{{ asset('images/groupes.png') }}\" alt=\"\"></a>
                </div>

                <!-- Name -->
                <div class=\"freelancer-name\">
                    <h4><a href=\"#\"> {{ groupe.titre }}
                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                    <span>{{ groupe.description }} </span>
                    <!-- Rating -->
                    <div class=\"freelancer-rating\">
                        <div class=\"star-rating\" data-rating=\"{% if groupe.autorisation == 0 %}fermé{%  else %}ouvert{%  endif %}\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class=\"buttons-to-right\">
            <a href=\"\" class=\"button red ripple-effect ico\" title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->
        </div>

        <div class=\"row\">
            <div class=\"col-xl-6 col-lg-6 content-left-offset\">
                <div class=\"dashboard-box\">

                    <!-- Headline -->
                    <div class=\"headline\">
                        <h3><i class=\"icon-material-outline-face\"></i> Membres du groupe </h3>
                    </div>

                    <div class=\"content\">
                        <ul class=\"dashboard-box-list\">
                            {%  for admin in admins %}

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
                                                    <h4><a href=\"#\"> {{ admin.login }} -
                                                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                    <span>admin.mail - admin.tel</span>
                                                    <!-- Rating -->
                                                    <div class=\"freelancer-rating\">
                                                        <div class=\"star-rating\" data-rating=\"admin\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class=\"buttons-to-right\">
                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                            <a href=\"\" onclick=\"alert('')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                            <a href=\"\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></a>-->
                                        </div>
                                    </li>

                            {%  endfor %}

                            {%  for membre in membres %}

                                <li id=\"{{ \"membre_\"~membre.idusr }}\">
                                    <!-- Overview -->
                                    <div class=\"freelancer-overview\" onclick=\"alert('show')\">
                                        <div class=\"freelancer-overview-inner\">

                                            <!-- Avatar -->
                                            <div class=\"freelancer-avatar\">
                                                <a href=\"#\"><img src=\"{{ asset('images/user-avatar-big-02.jpg') }}\" alt=\"\"></a>
                                            </div>

                                            <!-- Name -->
                                            <div class=\"freelancer-name\">
                                                <h4><a href=\"#\"> {{ membre.login }} -
                                                        <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                <span>membre.mail - membre.tel</span>
                                                <!-- Rating -->
                                                <div class=\"freelancer-rating\">
                                                    <div class=\"star-rating\" data-rating=\"simple\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class=\"buttons-to-right\">
                                        <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                        <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                        <a href=\"\" onclick=\"alert('')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                        <a href=\"\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></a>-->
                                        {% if isadmin == 1 %}
                                        <button onclick=\"
                                                \$.ajax(
                                                    {url: '{{ path('nozelites_membreretirerfront',{'id':groupe.idGroupe,'idmembre':membre.idusr}) }}', //This is the current doc
                                                    //type: 'POST',
                                                    //dataType:'json', // add json datatype to get json
                                                    //data: ({retirer: idmembre }),
                                                    success: function(data){
                                                        console.log(data);
                                                    }
                                                });
                                                document.getElementById('{{ \"membre_\"~membre.idusr }}').style.display = 'none';
                                                \" class=\"button red ripple-effect ico\" title=\"Bloquer\" data-tippy-placement=\"left\"><i class=\"icon-feather-x\"></i></button>
                                        {% endif %}
                                    </div>
                                </li>

                            {%  endfor %}

                        </ul>
                    </div>
                </div>
            </div>


            {% if groupe.autorisation == 1 or isadmin == 1  %}
                
                <div class=\"col-xl-6 col-lg-6\">
                    <div class=\"dashboard-box\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Inviter des membres </h3>
                        </div>

                        <div class=\"content\">
                            <ul class=\"dashboard-box-list\">
                                {%  for autre in autres %}

                                    <li id=\"{{ \"autre_\"~autre.idusr }}\">
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
                                                    <h4><a href=\"#\"> {{ autre.login }} -
                                                            <img class=\"flag\" src=\"images/flags/de.svg\" alt=\"\" title=\"Germany\" data-tippy-placement=\"top\"></a></h4>
                                                    <span>autre.mail - autre.tel</span>
                                                    <!-- Rating -->
                                                    <div class=\"freelancer-rating\">
                                                        <div class=\"star-rating\" data-rating=\"{{ autre.experience }}\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class=\"buttons-to-right\">
                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Remove\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"edit\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                            <a href=\"\" onclick=\"alert('')\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>-->
                                            <button onclick=\"
                                                    \$.ajax(
                                                    {url: '{{ path('nozelites_membreinviterfront',{'id':groupe.idGroupe,'idmembre':autre.idusr}) }}', //This is the current doc
                                                    //type: 'POST',
                                                    //dataType:'json', // add json datatype to get json
                                                    //data: ({retirer: idmembre }),
                                                    success: function(data){
                                                    console.log(data);
                                                    }
                                                    });
                                                    document.getElementById('{{ \"autre_\"~autre.idusr }}').style.display = 'none';
                                                    \" class=\"button red ripple-effect ico\" title=\"Inviter\" data-tippy-placement=\"left\"><i class=\"icon-feather-plus\"></i></button>
                                        </div>
                                    </li>

                                {%  endfor %}
                            </ul>
                        </div>
                    </div>
                </div>

            {% endif %}

        </div>

    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Toastr script -->
    <script src=\"{{ asset('js/toastr.min.js') }}\"></script>
    <script>
        \$(function () {
            toastr.success('Bienvenue au groupe', '{{ groupe.titre }}')
        });
    </script>
{% endblock %}", "@Nozelites/Front/MembreGroup.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Front\\MembreGroup.html.twig");
    }
}
