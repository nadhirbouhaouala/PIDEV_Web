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

/* @Nozelites/Front/EvenementAfficher.html.twig */
class __TwigTemplate_5007a248231262bc186f369f8201b31d00c5a8f02003e2413bd12e1a48a7b640 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/EvenementAfficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Front/EvenementAfficher.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Nozelites/Front/EvenementAfficher.html.twig", 1);
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
        echo "    <div class=\"intro-banner\" data-background-image=\"images/home-background.jpg\">
        <div class=\"container\">
            <!-- Section -->

            <div class=\"section gray\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-8 col-lg-8\">

                            <!-- Section Headline -->
                            <div class=\"section-headline margin-top-60 margin-bottom-35\">
                                <h4>Mes evenements</h4>
                            </div>
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenement"] ?? $this->getContext($context, "evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
            // line 18
            echo "                                ";
            if (($this->getAttribute($context["cc"], "etat", []) == 1)) {
                // line 19
                echo "                                    <li>
                                        <!-- Blog Post -->
                                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_EvenementpageMfront", ["id" => $this->getAttribute($context["cc"], "idE", [])]), "html", null, true);
                echo "\" class=\"blog-post\">
                                            <!-- Blog Post Thumbnail -->
                                            <div class=\"blog-post-thumbnail\">
                                                <div class=\"blog-post-thumbnail-inner\">


                                                    ";
                // line 27
                $context["imageur"] = twig_split_filter($this->env, $this->getAttribute($context["cc"], "image", []), "/");
                // line 28
                echo "                                                    ";
                $context["imageur"] = $this->getAttribute(($context["imageur"] ?? $this->getContext($context, "imageur")), (twig_length_filter($this->env, ($context["imageur"] ?? $this->getContext($context, "imageur"))) - 1), [], "array");
                // line 29
                echo "                                                    ";
                $context["imageurl"] = ("front/images/" . ($context["imageur"] ?? $this->getContext($context, "imageur")));
                // line 30
                echo "
                                                    <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["imageurl"] ?? $this->getContext($context, "imageurl"))), "html", null, true);
                echo "\">
                                                </div>
                                            </div>
                                            <!-- Blog Post Content -->
                                            <div class=\"blog-post-content\">
                                                <!--  <span class=\"blog-post-date\">";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "nom", []), "html", null, true);
                echo "</span>  -->
                                                <h3>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "nom", []), "html", null, true);
                echo "</h3>
                                                <p>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cc"], "date", []), "d/m/Y"), "html", null, true);
                echo "</p>
                                            </div>


                                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_Evenementmodifierfront", ["id" => $this->getAttribute($context["cc"], "idE", [])]), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\"  title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>

                                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_Evenementsupprimerfront", ["id" => $this->getAttribute($context["cc"], "idE", [])]), "html", null, true);
                echo "\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>

                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->

                                            <!-- Icon -->
                                            <div class=\"entry-icon\"></div>
                                        </a>
                                    </li>
                                ";
            }
            // line 54
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "



                            <!-- Pagination -->
                            <div class=\"clearfix\"></div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <!-- Pagination -->
                                    <div class=\"pagination-container margin-top-10 margin-bottom-20\">
                                        <nav class=\"pagination\">
                                            <ul>
                                                <li><a href=\"#\" class=\"current-page ripple-effect\">1</a></li>
                                                <li><a href=\"#\" class=\"ripple-effect\">2</a></li>
                                                <li><a href=\"#\" class=\"ripple-effect\">3</a></li>
                                                <li class=\"pagination-arrow\"><a href=\"#\" class=\"ripple-effect\"><i class=\"icon-material-outline-keyboard-arrow-right\"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination / End -->

                        </div>


                        <div class=\"col-xl-4 col-lg-4 content-left-offset\">
                            <div class=\"sidebar-container margin-top-65\">

                                <!-- Location -->





                                <!-- Widget -->
                                <div class=\"sidebar-widget\">
                                    <h3>Social Profiles</h3>
                                    <div class=\"freelancer-socials margin-top-25\">
                                        <ul>
                                            <li><a href=\"#\" title=\"Dribbble\" data-tippy-placement=\"top\"><i class=\"icon-brand-dribbble\"></i></a></li>
                                            <li><a href=\"#\" title=\"Twitter\" data-tippy-placement=\"top\"><i class=\"icon-brand-twitter\"></i></a></li>
                                            <li><a href=\"#\" title=\"Behance\" data-tippy-placement=\"top\"><i class=\"icon-brand-behance\"></i></a></li>
                                            <li><a href=\"#\" title=\"GitHub\" data-tippy-placement=\"top\"><i class=\"icon-brand-github\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Widget -->
                                <div cl ass=\"sidebar-widget\">
                                    <h3>Tags</h3>
                                    <div class=\"task-tags\">
                                        <a href=\"#\"><span>employer</span></a>
                                        <a href=\"#\"><span>recruiting</span></a>
                                        <a href=\"#\"><span>work</span></a>
                                        <a href=\"#\"><span>salary</span></a>
                                        <a href=\"#\"><span>tips</span></a>
                                        <a href=\"#\"><span>income</span></a>
                                        <a href=\"#\"><span>application</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Spacer -->
                <div class=\"padding-top-40\"></div>
                <!-- Spacer -->

            </div>
            <!-- Section / End -->
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Nozelites/Front/EvenementAfficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 55,  167 => 54,  154 => 44,  149 => 42,  142 => 38,  138 => 37,  134 => 36,  126 => 31,  123 => 30,  120 => 29,  117 => 28,  115 => 27,  106 => 21,  102 => 19,  99 => 18,  95 => 17,  80 => 4,  71 => 3,  52 => 2,  30 => 1,);
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
            <!-- Section -->

            <div class=\"section gray\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-8 col-lg-8\">

                            <!-- Section Headline -->
                            <div class=\"section-headline margin-top-60 margin-bottom-35\">
                                <h4>Mes evenements</h4>
                            </div>
                            {% for cc in evenement %}
                                {% if cc.etat==1 %}
                                    <li>
                                        <!-- Blog Post -->
                                        <a href=\"{{ path('nozelites_EvenementpageMfront',{'id':cc.idE})}}\" class=\"blog-post\">
                                            <!-- Blog Post Thumbnail -->
                                            <div class=\"blog-post-thumbnail\">
                                                <div class=\"blog-post-thumbnail-inner\">


                                                    {% set imageur = cc.image|split('/')  %}
                                                    {%  set imageur = imageur[imageur|length-1] %}
                                                    {% set imageurl = \"front/images/\"~imageur %}

                                                    <img src=\"{{ asset(imageurl) }}\">
                                                </div>
                                            </div>
                                            <!-- Blog Post Content -->
                                            <div class=\"blog-post-content\">
                                                <!--  <span class=\"blog-post-date\">{{ cc.nom }}</span>  -->
                                                <h3>{{ cc.nom }}</h3>
                                                <p>{{ cc.date|date('d/m/Y') }}</p>
                                            </div>


                                            <a href=\"{{ path('nozelites_Evenementmodifierfront',{'id':cc.idE}) }}\" class=\"button red ripple-effect ico\"  title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>

                                            <a href=\"{{ path('nozelites_Evenementsupprimerfront',{'id':cc.idE}) }}\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>

                                            <!--<a href=\"#\" class=\"button red ripple-effect ico\" title=\"Accepter\" data-tippy-placement=\"left\"><i class=\"icon-material-outline-check\"></i></a>
                                            <a href=\"#\" class=\"button red ripple-effect ico\" title=\"Refuser\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>-->

                                            <!-- Icon -->
                                            <div class=\"entry-icon\"></div>
                                        </a>
                                    </li>
                                {% endif %}
                            {% endfor %}




                            <!-- Pagination -->
                            <div class=\"clearfix\"></div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <!-- Pagination -->
                                    <div class=\"pagination-container margin-top-10 margin-bottom-20\">
                                        <nav class=\"pagination\">
                                            <ul>
                                                <li><a href=\"#\" class=\"current-page ripple-effect\">1</a></li>
                                                <li><a href=\"#\" class=\"ripple-effect\">2</a></li>
                                                <li><a href=\"#\" class=\"ripple-effect\">3</a></li>
                                                <li class=\"pagination-arrow\"><a href=\"#\" class=\"ripple-effect\"><i class=\"icon-material-outline-keyboard-arrow-right\"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination / End -->

                        </div>


                        <div class=\"col-xl-4 col-lg-4 content-left-offset\">
                            <div class=\"sidebar-container margin-top-65\">

                                <!-- Location -->





                                <!-- Widget -->
                                <div class=\"sidebar-widget\">
                                    <h3>Social Profiles</h3>
                                    <div class=\"freelancer-socials margin-top-25\">
                                        <ul>
                                            <li><a href=\"#\" title=\"Dribbble\" data-tippy-placement=\"top\"><i class=\"icon-brand-dribbble\"></i></a></li>
                                            <li><a href=\"#\" title=\"Twitter\" data-tippy-placement=\"top\"><i class=\"icon-brand-twitter\"></i></a></li>
                                            <li><a href=\"#\" title=\"Behance\" data-tippy-placement=\"top\"><i class=\"icon-brand-behance\"></i></a></li>
                                            <li><a href=\"#\" title=\"GitHub\" data-tippy-placement=\"top\"><i class=\"icon-brand-github\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Widget -->
                                <div cl ass=\"sidebar-widget\">
                                    <h3>Tags</h3>
                                    <div class=\"task-tags\">
                                        <a href=\"#\"><span>employer</span></a>
                                        <a href=\"#\"><span>recruiting</span></a>
                                        <a href=\"#\"><span>work</span></a>
                                        <a href=\"#\"><span>salary</span></a>
                                        <a href=\"#\"><span>tips</span></a>
                                        <a href=\"#\"><span>income</span></a>
                                        <a href=\"#\"><span>application</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Spacer -->
                <div class=\"padding-top-40\"></div>
                <!-- Spacer -->

            </div>
            <!-- Section / End -->
        </div>
    </div>
{% endblock %}", "@Nozelites/Front/EvenementAfficher.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Front\\EvenementAfficher.html.twig");
    }
}
