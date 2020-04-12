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

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_b5358ec02a556fd12252724f137c2474e916bbf5e421a867fbb12ccd79ffa158 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
    <div class=\"clearfix\"></div>

    <!-- Dashboard Container -->
<div class=\"dashboard-container\">

        <!-- Dashboard Sidebar
        ================================================== -->
        <div class=\"dashboard-sidebar\">
            <div class=\"dashboard-sidebar-inner\" data-simplebar>
                <div class=\"dashboard-nav-container\">

                    <!-- Responsive Navigation Trigger -->
                    <a href=\"#\" class=\"dashboard-responsive-nav-trigger\">
\t\t\t\t\t<span class=\"hamburger hamburger--collapse\" >
\t\t\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
                        <span class=\"trigger-title\">Dashboard Navigation</span>
                    </a>

                    <!-- Navigation -->
                    <div class=\"dashboard-nav\">
                        <div class=\"dashboard-nav-inner\">

                            <ul data-submenu-title=\"Start\">
                                <li class=\"active\"><a href=\"dashboard.html\"><i class=\"icon-material-outline-dashboard\"></i> Tableau de bord</a></li>
                                <li><a href=\"dashboard-messages.html\"><i class=\"icon-material-outline-question-answer\"></i> Messages <span class=\"nav-tag\">2</span></a></li>
                                <li><a href=\"dashboard-bookmarks.html\"><i class=\"icon-material-outline-star-border\"></i> Mes Groupes</a></li>
                                <li><a href=\"dashboard-reviews.html\"><i class=\"icon-material-outline-rate-review\"></i> Portfolio</a></li>

                            </ul>



                            <ul data-submenu-title=\"Compte\">
                                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"icon-material-outline-settings\"></i> Modifier</a></li>
                                <li><a href=\"index-logged-out.html\"><i class=\"icon-material-outline-power-settings-new\"></i> Deconnexion</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- Navigation / End -->

                </div>
            </div>
        </div>
        <!-- Dashboard Sidebar / End -->


        <!-- Dashboard Content
        ================================================== -->
        <div class=\"dashboard-content-container\" data-simplebar>
            <div class=\"dashboard-content-inner\" >

                <!-- Dashboard Headline -->
                <div class=\"dashboard-headline\">
                    <h3>Bienvenue, ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", []), "html", null, true);
        echo " !</h3>
                    <span>Content de vous revoir !</span>


                </div>

                <!-- Fun Facts Container -->
                <div class=\"fun-facts-container\">
                    <div class=\"fun-fact\" data-fun-fact-color=\"#36bd78\">
                        <div class=\"fun-fact-text\">
                            <span>Offres Reçus</span>
                            <h4>22</h4>
                        </div>
                        <div class=\"fun-fact-icon\"><i class=\"icon-material-outline-gavel\"></i></div>
                    </div>
                    <div class=\"fun-fact\" data-fun-fact-color=\"#b81b7f\">
                        <div class=\"fun-fact-text\">
                            <span>Offres Acceptés</span>
                            <h4>4</h4>
                        </div>
                        <div class=\"fun-fact-icon\"><i class=\"icon-material-outline-business-center\"></i></div>
                    </div>


                    <!-- Last one has to be hidden below 1600px, sorry :( -->

                </div>

                <!-- Row -->
                <div class=\"row\">

                    <div class=\"col-xl-8\">
                        <!-- Dashboard Box -->
                        <div class=\"dashboard-box main-box-in-row\">
                            <div class=\"headline\">
                                <h3><i class=\"icon-feather-bar-chart-2\"></i> Nombre d'offres reçus</h3>
                                <div class=\"sort-by\">
                                    <select class=\"selectpicker hide-tick\">
                                        <option>Last 6 Months</option>
                                        <option>This Year</option>
                                        <option>This Month</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"content\">
                                <!-- Chart -->
                                <div class=\"chart\">
                                    <canvas id=\"chart\" width=\"100\" height=\"45\"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Box / End -->
                    </div>
                    <div class=\"col-xl-4\">

                        <!-- Dashboard Box -->
                        <!-- If you want adjust height of two boxes
                             add to the lower box 'main-box-in-row'
                             and 'child-box-in-row' to the higher box -->
                        <div class=\"dashboard-box child-box-in-row\">
                            <div class=\"headline\">
                                <h3><i class=\"icon-material-outline-note-add\"></i> Formations</h3>
                            </div>

                            <div class=\"content with-padding\">
                                <!-- Note -->
                                    <div class=\"task-tags\">

                                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listFormation"] ?? $this->getContext($context, "listFormation")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 129
            echo "                                        <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "titre", []), "html", null, true);
            echo "</span>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
                                    </div>

                            </div>
                                <!-- Note -->

                        </div>
                        <!-- Dashboard Box / End -->
                    </div>
                </div>
                <!-- Row / End -->
                <!-- Row -->
                <div class=\"row\">

                    <!-- Dashboard Box -->
                    <div class=\"col-xl\">
                        <div class=\"dashboard-box\">
                            <div class=\"headline\">
                                <h3><i class=\"icon-material-baseline-notifications-none\"></i> Diplomes</h3>

                            </div>
                            <div class=\"content\">
                                <ul class=\"dashboard-box-list\">
                                    <li>
                                        <span class=\"notification-icon\"><i class=\"icon-material-outline-group\"></i></span>
                                        <span class=\"notification-text\">
                                            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeDiplome"] ?? $this->getContext($context, "listeDiplome")));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 158
            echo "                                                <strong>Domaine : </strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "domaine", []), "html", null, true);
            echo " <strong> <br>Institut : </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "organisation", []), "html", null, true);
            echo "<br>
                                                <strong> Date : </strong>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "date", []), "html", null, true);
            echo "
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
\t\t\t\t\t\t\t\t\t</span>
                                        <!-- Buttons -->

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard Box -->


                </div>
                <!-- Row / End -->

                <!-- Footer -->



                <!-- Footer / End -->

            </div>
        </div>
        <!-- Dashboard Content / End -->

    </div>
    <!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->

<!-- Apply for a job popup / End -->


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 161,  222 => 159,  215 => 158,  211 => 157,  183 => 131,  174 => 129,  170 => 128,  99 => 60,  75 => 39,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

    <div class=\"clearfix\"></div>

    <!-- Dashboard Container -->
<div class=\"dashboard-container\">

        <!-- Dashboard Sidebar
        ================================================== -->
        <div class=\"dashboard-sidebar\">
            <div class=\"dashboard-sidebar-inner\" data-simplebar>
                <div class=\"dashboard-nav-container\">

                    <!-- Responsive Navigation Trigger -->
                    <a href=\"#\" class=\"dashboard-responsive-nav-trigger\">
\t\t\t\t\t<span class=\"hamburger hamburger--collapse\" >
\t\t\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
                        <span class=\"trigger-title\">Dashboard Navigation</span>
                    </a>

                    <!-- Navigation -->
                    <div class=\"dashboard-nav\">
                        <div class=\"dashboard-nav-inner\">

                            <ul data-submenu-title=\"Start\">
                                <li class=\"active\"><a href=\"dashboard.html\"><i class=\"icon-material-outline-dashboard\"></i> Tableau de bord</a></li>
                                <li><a href=\"dashboard-messages.html\"><i class=\"icon-material-outline-question-answer\"></i> Messages <span class=\"nav-tag\">2</span></a></li>
                                <li><a href=\"dashboard-bookmarks.html\"><i class=\"icon-material-outline-star-border\"></i> Mes Groupes</a></li>
                                <li><a href=\"dashboard-reviews.html\"><i class=\"icon-material-outline-rate-review\"></i> Portfolio</a></li>

                            </ul>



                            <ul data-submenu-title=\"Compte\">
                                <li><a href=\"{{ path(\"fos_user_profile_edit\") }}\"><i class=\"icon-material-outline-settings\"></i> Modifier</a></li>
                                <li><a href=\"index-logged-out.html\"><i class=\"icon-material-outline-power-settings-new\"></i> Deconnexion</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- Navigation / End -->

                </div>
            </div>
        </div>
        <!-- Dashboard Sidebar / End -->


        <!-- Dashboard Content
        ================================================== -->
        <div class=\"dashboard-content-container\" data-simplebar>
            <div class=\"dashboard-content-inner\" >

                <!-- Dashboard Headline -->
                <div class=\"dashboard-headline\">
                    <h3>Bienvenue, {{user.prenom}} !</h3>
                    <span>Content de vous revoir !</span>


                </div>

                <!-- Fun Facts Container -->
                <div class=\"fun-facts-container\">
                    <div class=\"fun-fact\" data-fun-fact-color=\"#36bd78\">
                        <div class=\"fun-fact-text\">
                            <span>Offres Reçus</span>
                            <h4>22</h4>
                        </div>
                        <div class=\"fun-fact-icon\"><i class=\"icon-material-outline-gavel\"></i></div>
                    </div>
                    <div class=\"fun-fact\" data-fun-fact-color=\"#b81b7f\">
                        <div class=\"fun-fact-text\">
                            <span>Offres Acceptés</span>
                            <h4>4</h4>
                        </div>
                        <div class=\"fun-fact-icon\"><i class=\"icon-material-outline-business-center\"></i></div>
                    </div>


                    <!-- Last one has to be hidden below 1600px, sorry :( -->

                </div>

                <!-- Row -->
                <div class=\"row\">

                    <div class=\"col-xl-8\">
                        <!-- Dashboard Box -->
                        <div class=\"dashboard-box main-box-in-row\">
                            <div class=\"headline\">
                                <h3><i class=\"icon-feather-bar-chart-2\"></i> Nombre d'offres reçus</h3>
                                <div class=\"sort-by\">
                                    <select class=\"selectpicker hide-tick\">
                                        <option>Last 6 Months</option>
                                        <option>This Year</option>
                                        <option>This Month</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"content\">
                                <!-- Chart -->
                                <div class=\"chart\">
                                    <canvas id=\"chart\" width=\"100\" height=\"45\"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Box / End -->
                    </div>
                    <div class=\"col-xl-4\">

                        <!-- Dashboard Box -->
                        <!-- If you want adjust height of two boxes
                             add to the lower box 'main-box-in-row'
                             and 'child-box-in-row' to the higher box -->
                        <div class=\"dashboard-box child-box-in-row\">
                            <div class=\"headline\">
                                <h3><i class=\"icon-material-outline-note-add\"></i> Formations</h3>
                            </div>

                            <div class=\"content with-padding\">
                                <!-- Note -->
                                    <div class=\"task-tags\">

                                        {% for formation in listFormation %}
                                        <span>{{ formation.titre }}</span>
                                        {% endfor %}

                                    </div>

                            </div>
                                <!-- Note -->

                        </div>
                        <!-- Dashboard Box / End -->
                    </div>
                </div>
                <!-- Row / End -->
                <!-- Row -->
                <div class=\"row\">

                    <!-- Dashboard Box -->
                    <div class=\"col-xl\">
                        <div class=\"dashboard-box\">
                            <div class=\"headline\">
                                <h3><i class=\"icon-material-baseline-notifications-none\"></i> Diplomes</h3>

                            </div>
                            <div class=\"content\">
                                <ul class=\"dashboard-box-list\">
                                    <li>
                                        <span class=\"notification-icon\"><i class=\"icon-material-outline-group\"></i></span>
                                        <span class=\"notification-text\">
                                            {% for diplome in listeDiplome %}
                                                <strong>Domaine : </strong> {{ diplome.domaine }} <strong> <br>Institut : </strong>{{ diplome.organisation }}<br>
                                                <strong> Date : </strong>{{ diplome.date }}
                                            {% endfor %}

\t\t\t\t\t\t\t\t\t</span>
                                        <!-- Buttons -->

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard Box -->


                </div>
                <!-- Row / End -->

                <!-- Footer -->



                <!-- Footer / End -->

            </div>
        </div>
        <!-- Dashboard Content / End -->

    </div>
    <!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->

<!-- Apply for a job popup / End -->


", "@FOSUser/Profile/show_content.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
