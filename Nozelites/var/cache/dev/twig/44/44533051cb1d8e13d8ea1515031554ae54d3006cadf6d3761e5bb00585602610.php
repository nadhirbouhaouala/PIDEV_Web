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
class __TwigTemplate_7b4946bba2a94412264f9b4a94e69de5d54002e7e863e095db45c6c8f297536a extends \Twig\Template
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

                            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("front/images/" . $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "image", []))), "html", null, true);
        echo "\" alt=\"image\" />
                        </div>
                    </div>

                    <!-- Blog Post Content -->
                    <div class=\"blog-post-content\">
                        <h3 class=\"margin-bottom-10\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nom", []), "html", null, true);
        echo "</h3>

                        <div class=\"blog-post-info-list margin-bottom-20\">
                            <a href=\"#\" class=\"blog-post-info\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "date", []), "d/m/Y"), "html", null, true);
        echo "</a>
                            <a href=\"#\"  class=\"blog-post-info\">";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "heure", []), "H:II"), "html", null, true);
        echo "</a>
                            <h3><i class=\"icon-material-outline-supervisor-account\"></i> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nbparticipant", []), "html", null, true);
        echo " participants</h3>
                        </div>



                        <blockquote class=\"margin-top-20 margin-bottom-20\">
                            ";
        // line 50
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
        // line 62
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["liste"] ?? $this->getContext($context, "liste"))), "html", null, true);
        echo " Demandes</h3>
                            </div>

                            <div class=\"content\">
                                <ul class=\"dashboard-box-list\">
                                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["liste"] ?? $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["pe"]) {
            // line 68
            echo "                                    <li>
                                        <!-- Overview -->
                                        <div class=\"freelancer-overview manage-candidates\">
                                            <div class=\"freelancer-overview-inner\">

                                                <!-- Avatar -->
                                                <div class=\"freelancer-avatar\">
                                                    <div class=\"verified-badge\"></div>

                                                    <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("front/images/" . $this->getAttribute($context["pe"], "image", []))), "html", null, true);
            echo "\" alt=\"image\" />
                                                </div>

                                                <!-- Name -->
                                                <div class=\"freelancer-name\">
                                                    <h4><a href=\"#\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["pe"], "login", []), "html", null, true);
            echo " <img class=\"flag\" src=\"images/flags/au.svg\" alt=\"\" title=\"Australia\" data-tippy-placement=\"top\"></a></h4>

                                                    <!-- Details -->
                                                    <span class=\"freelancer-detail-item\"><i class=\"icon-feather-mail\"></i> ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["pe"], "mail", []), "html", null, true);
            echo "</span>
                                                    <span class=\"freelancer-detail-item\"><i class=\"icon-feather-phone\"></i> (+216) ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["pe"], "tel", []), "html", null, true);
            echo "</span>

                                                    <!-- Rating --
                                                    <div class=\"freelancer-rating\">
                                                        <div class=\"star-rating\" data-rating=\"5.0\"></div>
                                                    </div>

                                                 Buttons -->
                                                    <div class=\"buttons-to-right always-visible margin-top-25 margin-bottom-5\">
                                                        <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_EvenementAccepterfront", ["id" => $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "ide", []), "idm" => $this->getAttribute($context["pe"], "idusr", [])]), "html", null, true);
            echo "\" class=\"button ripple-effect\"><i class=\"icon-feather-check-square\"></i> Accepter</a>

                                                        <a href=\"";
            // line 97
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
        // line 106
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
            <h3>";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nbparticipant", []), "html", null, true);
        echo " participants</h3>

            <div class=\"listings-container compact-list-layout margin-top-35\">
                ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listp"] ?? $this->getContext($context, "listp")));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 128
            echo "                <!-- Job Listing -->
                <a  class=\"job-listing\">

                    <!-- Job Listing Details -->
                    <div class=\"job-listing-details\">

                        <!-- Logo -->
                        <div class=\"job-listing-company-logo\">

                            <img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("front/images/" . $this->getAttribute($context["pt"], "image", []))), "html", null, true);
            echo "\" alt=\"image\" />
                        </div>

                        <!-- Details -->
                        <div class=\"job-listing-description\">
                            <h3 class=\"job-listing-title\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["pt"], "login", []), "html", null, true);
            echo " </h3>

                            <!-- Job Listing Footer -->
                            <div class=\"job-listing-footer\">
                                <ul>
                                    <li>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["pt"], "mail", []), "html", null, true);
            echo " </li>
                                    <li><i class=\"icon-feather-phone\"></i> ";
            // line 148
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
        // line 158
        echo "            </div>
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
        return array (  311 => 158,  295 => 148,  291 => 147,  283 => 142,  275 => 137,  264 => 128,  260 => 127,  254 => 124,  234 => 106,  219 => 97,  214 => 95,  202 => 86,  198 => 85,  192 => 82,  184 => 77,  173 => 68,  169 => 67,  161 => 62,  146 => 50,  137 => 44,  133 => 43,  129 => 42,  123 => 39,  114 => 33,  87 => 9,  80 => 4,  71 => 3,  52 => 2,  30 => 1,);
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

                            <img src=\"{{ asset('front/images/'~ evenement.image) }}\" alt=\"image\" />
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

                                                    <img src=\"{{ asset('front/images/'~ pe.image) }}\" alt=\"image\" />
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
