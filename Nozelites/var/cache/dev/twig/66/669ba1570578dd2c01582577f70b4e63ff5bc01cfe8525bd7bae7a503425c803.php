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

/* @Nozelites/Front/EvenementPageM.html.twig */
class __TwigTemplate_01af84110a4df6aacfa38a8507041348cc4bb80e29ca6d7eacc177ae585ae6da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/EvenementPageM.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/EvenementPageM.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Nozelites/Front/EvenementPageM.html.twig", 1);
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
        // line 33
        $context["imageur"] = twig_split_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "image", []), "/");
        // line 34
        echo "                            ";
        $context["imageur"] = $this->getAttribute(($context["imageur"] ?? $this->getContext($context, "imageur")), (twig_length_filter($this->env, ($context["imageur"] ?? $this->getContext($context, "imageur"))) - 1), [], "array");
        // line 35
        echo "                            ";
        $context["imageurl"] = ("front/images/" . ($context["imageur"] ?? $this->getContext($context, "imageur")));
        // line 36
        echo "
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["imageurl"] ?? $this->getContext($context, "imageurl"))), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <!-- Blog Post Content -->
                    <div class=\"blog-post-content\">
                        <h3 class=\"margin-bottom-10\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nom", []), "html", null, true);
        echo "</h3>

                        <div class=\"blog-post-info-list margin-bottom-20\">
                            <a href=\"#\" class=\"blog-post-info\">";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "date", []), "d/m/Y"), "html", null, true);
        echo "</a>
                            <a href=\"#\"  class=\"blog-post-info\">";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "heure", []), "H:II"), "html", null, true);
        echo "</a>
                            <h3><i class=\"icon-material-outline-supervisor-account\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nbparticipant", []), "html", null, true);
        echo " participants</h3>
                        </div>



                        <blockquote class=\"margin-top-20 margin-bottom-20\">
                            ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "description", []), "html", null, true);
        echo "
                        </blockquote>

                        <!-- Share Buttons -->


                    </div>  <!-- Dashboard Box -->
                    <div class=\"col-xl-12\">
                        <div class=\"dashboard-box margin-top-0\">

                            <!-- Headline -->
                            <div class=\"headline\">
                                <h3><i class=\"icon-material-outline-supervisor-account\"></i> ";
        // line 66
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["liste"] ?? $this->getContext($context, "liste"))), "html", null, true);
        echo " Demandes</h3>
                            </div>

                            <div class=\"content\">
                                <ul class=\"dashboard-box-list\">
                                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["pe"]) {
            // line 72
            echo "                                        <li>
                                            <!-- Overview -->
                                            <div class=\"freelancer-overview manage-candidates\">
                                                <div class=\"freelancer-overview-inner\">

                                                    <!-- Avatar -->
                                                    <div class=\"freelancer-avatar\">
                                                        <div class=\"verified-badge\"></div>

                                                        ";
            // line 81
            $context["imageur"] = twig_split_filter($this->env, $this->getAttribute($context["pe"], "image", []), "/");
            // line 82
            echo "                                                        ";
            $context["imageur"] = $this->getAttribute(($context["imageur"] ?? $this->getContext($context, "imageur")), (twig_length_filter($this->env, ($context["imageur"] ?? $this->getContext($context, "imageur"))) - 1), [], "array");
            // line 83
            echo "                                                        ";
            $context["imageurl"] = ("front/images/" . ($context["imageur"] ?? $this->getContext($context, "imageur")));
            // line 84
            echo "
                                                        <img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["imageurl"] ?? $this->getContext($context, "imageurl"))), "html", null, true);
            echo "\">


                                                    </div>

                                                    <!-- Name -->
                                                    <div class=\"freelancer-name\">
                                                        <h4><a href=\"#\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["pe"], "login", []), "html", null, true);
            echo " <img class=\"flag\" src=\"images/flags/au.svg\" alt=\"\" title=\"Australia\" data-tippy-placement=\"top\"></a></h4>

                                                        <!-- Details -->
                                                        <span class=\"freelancer-detail-item\"><i class=\"icon-feather-mail\"></i> ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["pe"], "mail", []), "html", null, true);
            echo "</span>
                                                        <span class=\"freelancer-detail-item\"><i class=\"icon-feather-phone\"></i> (+216) ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["pe"], "tel", []), "html", null, true);
            echo "</span>

                                                        <!-- Rating --
                                                        <div class=\"freelancer-rating\">
                                                            <div class=\"star-rating\" data-rating=\"5.0\"></div>
                                                        </div>

                                                     Buttons -->
                                                        <div class=\"buttons-to-right always-visible margin-top-25 margin-bottom-5\">
                                                            <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_EvenementAccepterfront", ["id" => $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "ide", []), "idm" => $this->getAttribute($context["pe"], "idusr", [])]), "html", null, true);
            echo "\" class=\"button ripple-effect\"><i class=\"icon-feather-check-square\"></i> Accepter</a>

                                                            <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_EvenementRefuserfront", ["id" => $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "ide", []), "idm" => $this->getAttribute($context["pe"], "idusr", [])]), "html", null, true);
            echo "\"  class=\"button ripple-effect\"><i class=\"icon-feather-trash-2\"></i> Refuser</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                </ul>

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
        // line 134
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\MapExtension')->render(($context["map"] ?? $this->getContext($context, "map")));
        echo "
                    ";
        // line 135
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render([0 => ($context["map"] ?? $this->getContext($context, "map"))]);
        echo "


                </div>
                <h3>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nbparticipant", []), "html", null, true);
        echo " participants</h3>
                <div class=\"listings-container compact-list-layout margin-top-35\">

                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listp"] ?? $this->getContext($context, "listp")));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 143
            echo "                        <!-- Job Listing -->
                        <a  class=\"job-listing\">

                            <!-- Job Listing Details -->
                            <div class=\"job-listing-details\">

                                <!-- Logo -->
                                <div class=\"job-listing-company-logo\">

                                    <img src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("front/images/" . $this->getAttribute($context["pt"], "image", []))), "html", null, true);
            echo "\" alt=\"image\" />
                                </div>

                                <!-- Details -->
                                <div class=\"job-listing-description\">
                                    <h3 class=\"job-listing-title\">";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["pt"], "login", []), "html", null, true);
            echo " </h3>

                                    <!-- Job Listing Footer -->
                                    <div class=\"job-listing-footer\">
                                        <ul>
                                            <li>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["pt"], "mail", []), "html", null, true);
            echo " </li>
                                            <li><i class=\"icon-feather-phone\"></i> ";
            // line 163
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
        // line 173
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
        return "@Nozelites/Front/EvenementPageM.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 173,  330 => 163,  326 => 162,  318 => 157,  310 => 152,  299 => 143,  295 => 142,  289 => 139,  282 => 135,  278 => 134,  258 => 116,  243 => 107,  238 => 105,  226 => 96,  222 => 95,  216 => 92,  206 => 85,  203 => 84,  200 => 83,  197 => 82,  195 => 81,  184 => 72,  180 => 71,  172 => 66,  157 => 54,  148 => 48,  144 => 47,  140 => 46,  134 => 43,  125 => 37,  122 => 36,  119 => 35,  116 => 34,  114 => 33,  87 => 9,  80 => 4,  71 => 3,  52 => 2,  30 => 1,);
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
                            <h3><i class=\"icon-material-outline-supervisor-account\"></i> {{ evenement.nbparticipant }} participants</h3>
                        </div>



                        <blockquote class=\"margin-top-20 margin-bottom-20\">
                            {{ evenement.description }}
                        </blockquote>

                        <!-- Share Buttons -->


                    </div>  <!-- Dashboard Box -->
                    <div class=\"col-xl-12\">
                        <div class=\"dashboard-box margin-top-0\">

                            <!-- Headline -->
                            <div class=\"headline\">
                                <h3><i class=\"icon-material-outline-supervisor-account\"></i> {{ liste|length }} Demandes</h3>
                            </div>

                            <div class=\"content\">
                                <ul class=\"dashboard-box-list\">
                                    {% for pe in liste %}
                                        <li>
                                            <!-- Overview -->
                                            <div class=\"freelancer-overview manage-candidates\">
                                                <div class=\"freelancer-overview-inner\">

                                                    <!-- Avatar -->
                                                    <div class=\"freelancer-avatar\">
                                                        <div class=\"verified-badge\"></div>

                                                        {% set imageur = pe.image|split('/')  %}
                                                        {%  set imageur = imageur[imageur|length-1] %}
                                                        {% set imageurl = \"front/images/\"~imageur %}

                                                        <img src=\"{{ asset(imageurl) }}\">


                                                    </div>

                                                    <!-- Name -->
                                                    <div class=\"freelancer-name\">
                                                        <h4><a href=\"#\">{{ pe.login }} <img class=\"flag\" src=\"images/flags/au.svg\" alt=\"\" title=\"Australia\" data-tippy-placement=\"top\"></a></h4>

                                                        <!-- Details -->
                                                        <span class=\"freelancer-detail-item\"><i class=\"icon-feather-mail\"></i> {{ pe.mail }}</span>
                                                        <span class=\"freelancer-detail-item\"><i class=\"icon-feather-phone\"></i> (+216) {{ pe.tel }}</span>

                                                        <!-- Rating --
                                                        <div class=\"freelancer-rating\">
                                                            <div class=\"star-rating\" data-rating=\"5.0\"></div>
                                                        </div>

                                                     Buttons -->
                                                        <div class=\"buttons-to-right always-visible margin-top-25 margin-bottom-5\">
                                                            <a href=\"{{ path('nozelites_EvenementAccepterfront',{'id':evenement.ide,'idm':pe.idusr}) }}\" class=\"button ripple-effect\"><i class=\"icon-feather-check-square\"></i> Accepter</a>

                                                            <a href=\"{{ path('nozelites_EvenementRefuserfront',{'id':evenement.ide,'idm':pe.idusr}) }}\"  class=\"button ripple-effect\"><i class=\"icon-feather-trash-2\"></i> Refuser</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    {% endfor %}
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

                                    <img src=\"{{ asset('front/images/'~ pt.image) }}\" alt=\"image\" />
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




{% endblock %}", "@Nozelites/Front/EvenementPageM.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Front\\EvenementPageM.html.twig");
    }
}
