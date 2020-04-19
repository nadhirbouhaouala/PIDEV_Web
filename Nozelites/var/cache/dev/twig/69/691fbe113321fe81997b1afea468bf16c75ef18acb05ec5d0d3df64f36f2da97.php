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

/* @Nozelites/Front/EvenementPage.html.twig */
class __TwigTemplate_362061ba3102abf5ffea7b4179c2cc40a291eaaebac4e11266322d7c129e49a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/EvenementPage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/EvenementPage.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Nozelites/Front/EvenementPage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"titlebar\" class=\"gradient\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Evenement</h2>
                    <span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nom", []), "html", null, true);
        echo "</span>

                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\" class=\"dark\">
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li>Blog Post</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-8 col-lg-8\">
                <!-- Blog Post -->
                <div class=\"blog-post single-post\">

                    <!-- Blog Post Thumbnail -->
                    <div class=\"blog-post-thumbnail\">
                        <div class=\"blog-post-thumbnail-inner\">


                            ";
        // line 34
        $context["imageur"] = twig_split_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "image", []), "/");
        // line 35
        echo "                            ";
        $context["imageur"] = $this->getAttribute(($context["imageur"] ?? $this->getContext($context, "imageur")), (twig_length_filter($this->env, ($context["imageur"] ?? $this->getContext($context, "imageur"))) - 1), [], "array");
        // line 36
        echo "                            ";
        $context["imageurl"] = ("front/images/" . ($context["imageur"] ?? $this->getContext($context, "imageur")));
        // line 37
        echo "
                            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["imageurl"] ?? $this->getContext($context, "imageurl"))), "html", null, true);
        echo "\">

                        </div>
                    </div>

                    <!-- Blog Post Content -->
                    <div class=\"blog-post-content\">
                        <h3 class=\"margin-bottom-10\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nom", []), "html", null, true);
        echo "</h3>

                        <div class=\"blog-post-info-list margin-bottom-20\">
                            <a href=\"#\" class=\"blog-post-info\">";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "date", []), "d/m/Y"), "html", null, true);
        echo "</a>
                            <a href=\"#\"  class=\"blog-post-info\">";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "heure", []), "H:II"), "html", null, true);
        echo "</a>
                        </div>
                        <div>
                            ";
        // line 52
        if (twig_test_empty(($context["participant"] ?? $this->getContext($context, "participant")))) {
            // line 53
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_EvenementRejoindrefront", ["id" => $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "ide", [])]), "html", null, true);
            echo "\"  class=\"button red ripple-effect ico\">Rejoindre</a>
                            ";
        }
        // line 55
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participant"] ?? $this->getContext($context, "participant")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 56
            echo "
                                ";
            // line 57
            if (($this->getAttribute($context["p"], "etatp", []) == 0)) {
                // line 58
                echo "                                    <a class=\"button red ripple-effect ico\">Envoyée</a>
                                ";
            } elseif (($this->getAttribute(            // line 59
$context["p"], "etatp", []) == 1)) {
                // line 60
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_Evenementdisjoindrefront", ["id" => $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "ide", [])]), "html", null, true);
                echo "\"  class=\"button red ripple-effect ico\">Disjoindre</a>
                                ";
            }
            // line 62
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </div>


                        <blockquote class=\"margin-top-20 margin-bottom-20\">
                            ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "description", []), "html", null, true);
        echo "
                        </blockquote>

                        <!-- Share Buttons -->
                        <div class=\"share-buttons margin-top-25\">
                            <div class=\"share-buttons-trigger\"><i class=\"icon-feather-share-2\"></i></div>
                            <div class=\"share-buttons-content\">
                                <span>Interesting? <strong>Share It!</strong></span>
                                <ul class=\"share-buttons-icons\">
                                    <li><a href=\"#\" data-button-color=\"#3b5998\" title=\"Share on Facebook\" data-tippy-placement=\"top\"><i class=\"icon-brand-facebook-f\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#1da1f2\" title=\"Share on Twitter\" data-tippy-placement=\"top\"><i class=\"icon-brand-twitter\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#dd4b39\" title=\"Share on Google Plus\" data-tippy-placement=\"top\"><i class=\"icon-brand-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#0077b5\" title=\"Share on LinkedIn\" data-tippy-placement=\"top\"><i class=\"icon-brand-linkedin-in\"></i></a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class=\"col-xl-4 col-lg-4 content-left-offset\">
                <div class=\"sidebar-container\">
                    <div class=\"sidebar-widget margin-bottom-40\">
                        <div class=\"input-with-icon\">
                            <input id=\"autocomplete-input\" type=\"text\" placeholder=\"Search\">
                            <i class=\"icon-material-outline-search\"></i>
                        </div>
                    </div>
                    ";
        // line 98
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\MapExtension')->render(($context["map"] ?? $this->getContext($context, "map")));
        echo "
                    ";
        // line 99
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render([0 => ($context["map"] ?? $this->getContext($context, "map"))]);
        echo "


                </div>
                <h3>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nbparticipant", []), "html", null, true);
        echo " participants</h3>
                <div class=\"listings-container compact-list-layout margin-top-35\">

                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listp"] ?? $this->getContext($context, "listp")));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 107
            echo "                        <!-- Job Listing -->
                        <a  class=\"job-listing\">

                            <!-- Job Listing Details -->
                            <div class=\"job-listing-details\">

                                <!-- Logo -->
                                <div class=\"job-listing-company-logo\">

                                    ";
            // line 116
            $context["imageur"] = twig_split_filter($this->env, $this->getAttribute($context["pt"], "image", []), "/");
            // line 117
            echo "                                    ";
            $context["imageur"] = $this->getAttribute(($context["imageur"] ?? $this->getContext($context, "imageur")), (twig_length_filter($this->env, ($context["imageur"] ?? $this->getContext($context, "imageur"))) - 1), [], "array");
            // line 118
            echo "                                    ";
            $context["imageurl"] = ("front/images/" . ($context["imageur"] ?? $this->getContext($context, "imageur")));
            // line 119
            echo "
                                    <img src=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["imageurl"] ?? $this->getContext($context, "imageurl"))), "html", null, true);
            echo "\">
                                </div>

                                <!-- Details -->
                                <div class=\"job-listing-description\">
                                    <h3 class=\"job-listing-title\">";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["pt"], "login", []), "html", null, true);
            echo " </h3>

                                    <!-- Job Listing Footer -->
                                    <div class=\"job-listing-footer\">
                                        <ul>
                                            <li>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["pt"], "mail", []), "html", null, true);
            echo " </li>
                                            <li><i class=\"icon-feather-phone\"></i> ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["pt"], "tel", []), "html", null, true);
            echo "</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Bookmark -->

                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                </div>
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
        return "@Nozelites/Front/EvenementPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 141,  290 => 131,  286 => 130,  278 => 125,  270 => 120,  267 => 119,  264 => 118,  261 => 117,  259 => 116,  248 => 107,  244 => 106,  238 => 103,  231 => 99,  227 => 98,  193 => 67,  187 => 63,  181 => 62,  175 => 60,  173 => 59,  170 => 58,  168 => 57,  165 => 56,  160 => 55,  154 => 53,  152 => 52,  146 => 49,  142 => 48,  136 => 45,  126 => 38,  123 => 37,  120 => 36,  117 => 35,  115 => 34,  87 => 9,  80 => 4,  71 => 3,  52 => 2,  30 => 1,);
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
    <div id=\"titlebar\" class=\"gradient\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Evenement</h2>
                    <span>{{ evenement.nom }}</span>

                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\" class=\"dark\">
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li>Blog Post</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-8 col-lg-8\">
                <!-- Blog Post -->
                <div class=\"blog-post single-post\">

                    <!-- Blog Post Thumbnail -->
                    <div class=\"blog-post-thumbnail\">
                        <div class=\"blog-post-thumbnail-inner\">


                            {% set imageur = evenement.image|split('/')  %}
                            {%  set imageur = imageur[imageur|length-1] %}
                            {% set imageurl = \"front/images/\"~imageur %}

                            <img src=\"{{ asset(imageurl) }}\">

                        </div>
                    </div>

                    <!-- Blog Post Content -->
                    <div class=\"blog-post-content\">
                        <h3 class=\"margin-bottom-10\">{{ evenement.nom }}</h3>

                        <div class=\"blog-post-info-list margin-bottom-20\">
                            <a href=\"#\" class=\"blog-post-info\">{{ evenement.date|date('d/m/Y') }}</a>
                            <a href=\"#\"  class=\"blog-post-info\">{{ evenement.heure|date('H:II') }}</a>
                        </div>
                        <div>
                            {% if (participant is empty) %}
                                <a href=\"{{ path('nozelites_EvenementRejoindrefront',{'id':evenement.ide}) }}\"  class=\"button red ripple-effect ico\">Rejoindre</a>
                            {%endif  %}
                            {% for p in participant%}

                                {% if p.etatp==0 %}
                                    <a class=\"button red ripple-effect ico\">Envoyée</a>
                                {% elseif p.etatp==1 %}
                                    <a href=\"{{ path('nozelites_Evenementdisjoindrefront',{'id':evenement.ide}) }}\"  class=\"button red ripple-effect ico\">Disjoindre</a>
                                {% endif %}
                            {% endfor %}
                        </div>


                        <blockquote class=\"margin-top-20 margin-bottom-20\">
                            {{ evenement.description }}
                        </blockquote>

                        <!-- Share Buttons -->
                        <div class=\"share-buttons margin-top-25\">
                            <div class=\"share-buttons-trigger\"><i class=\"icon-feather-share-2\"></i></div>
                            <div class=\"share-buttons-content\">
                                <span>Interesting? <strong>Share It!</strong></span>
                                <ul class=\"share-buttons-icons\">
                                    <li><a href=\"#\" data-button-color=\"#3b5998\" title=\"Share on Facebook\" data-tippy-placement=\"top\"><i class=\"icon-brand-facebook-f\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#1da1f2\" title=\"Share on Twitter\" data-tippy-placement=\"top\"><i class=\"icon-brand-twitter\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#dd4b39\" title=\"Share on Google Plus\" data-tippy-placement=\"top\"><i class=\"icon-brand-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#0077b5\" title=\"Share on LinkedIn\" data-tippy-placement=\"top\"><i class=\"icon-brand-linkedin-in\"></i></a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class=\"col-xl-4 col-lg-4 content-left-offset\">
                <div class=\"sidebar-container\">
                    <div class=\"sidebar-widget margin-bottom-40\">
                        <div class=\"input-with-icon\">
                            <input id=\"autocomplete-input\" type=\"text\" placeholder=\"Search\">
                            <i class=\"icon-material-outline-search\"></i>
                        </div>
                    </div>
                    {{ ivory_google_map(map) }}
                    {{ ivory_google_api([map]) }}


                </div>
                <h3>{{ evenement.nbparticipant }} participants</h3>
                <div class=\"listings-container compact-list-layout margin-top-35\">

                    {% for pt in listp %}
                        <!-- Job Listing -->
                        <a  class=\"job-listing\">

                            <!-- Job Listing Details -->
                            <div class=\"job-listing-details\">

                                <!-- Logo -->
                                <div class=\"job-listing-company-logo\">

                                    {% set imageur = pt.image|split('/')  %}
                                    {%  set imageur = imageur[imageur|length-1] %}
                                    {% set imageurl = \"front/images/\"~imageur %}

                                    <img src=\"{{ asset(imageurl) }}\">
                                </div>

                                <!-- Details -->
                                <div class=\"job-listing-description\">
                                    <h3 class=\"job-listing-title\">{{ pt.login }} </h3>

                                    <!-- Job Listing Footer -->
                                    <div class=\"job-listing-footer\">
                                        <ul>
                                            <li>{{ pt.mail }} </li>
                                            <li><i class=\"icon-feather-phone\"></i> {{ pt.tel }}</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Bookmark -->

                            </div>
                        </a>
                    {% endfor %}
                </div>
            </div>
        </div>

    </div>
    </div>


{% endblock %}", "@Nozelites/Front/EvenementPage.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Front\\EvenementPage.html.twig");
    }
}
