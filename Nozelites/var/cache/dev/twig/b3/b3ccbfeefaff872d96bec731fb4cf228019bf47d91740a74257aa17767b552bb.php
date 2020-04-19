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

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_e22546b07f01fd5bafb0f055fa8ebdfc124fb368b5933e4f77a709f5107e6bf4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "


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
                            <li class=\"active\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><i class=\"icon-material-outline-dashboard\"></i> Tableau de bord</a></li>
                            <li><a href=\"dashboard-messages.html\"><i class=\"icon-material-outline-question-answer\"></i> Messages <span class=\"nav-tag\">2</span></a></li>
                            <li><a href=\"dashboard-bookmarks.html\"><i class=\"icon-material-outline-star-border\"></i> Mes Groupes</a></li>
                            <li><a href=\"dashboard-reviews.html\"><i class=\"icon-material-outline-rate-review\"></i> Portfolio</a></li>

                        </ul>



                        <ul data-submenu-title=\"Compte\">
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"icon-material-outline-settings\"></i> Modifier</a></li>
                            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon-material-outline-power-settings-new\"></i> Deconnexion</a></li>
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
                <h3>Settings</h3>

                <!-- Breadcrumbs -->
                <nav id=\"breadcrumbs\" class=\"dark\">
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Dashboard</a></li>
                        <li>Settings</li>
                    </ul>
                </nav>
            </div>

            <!-- Row -->
            <div class=\"row\">

                <!-- Dashboard Box -->
                <div class=\"col-xl-12\">
                    <div class=\"dashboard-box margin-top-0\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-account-circle\"></i> Mon Compte</h3>
                        </div>

                        <div class=\"content with-padding padding-bottom-0\">

                            <div class=\"row\">

                                <div class=\"col-auto\">
                                    ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => ["class" => "fos_user_profile_edit"]]);
        echo "

                                    <div class=\"avatar-wrapper\" data-tippy-placement=\"bottom\" title=\"Change Avatar\">
                                        <img class=\"profile-pic\"src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/profile/" . $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "imageName", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "imageName", []), "html", null, true);
        echo "\" />

                                        <div class=\"upload-button\"></div>

                                        <input type = \"file\" class=\"file-upload\"   name=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imageFile", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id =\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imageFile", []), "vars", []), "id", []), "html", null, true);
        echo "\"/>


                                    </div>
                                </div>

                                <div class=\"col\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">

                                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "


                                                <input type=\"submit\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />


                                        </div>
                                        ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class=\"col-xl-12\">
                    <div class=\"dashboard-box\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Mes compétences</h3>
                        </div>

                        <div class=\"content\">
                            <ul class=\"fields-ul\">
                                <li>
                                    <div class=\"row\">
                                        <div class=\"col-xl-8\">
                                            <div class=\"submit-field\">
                                                <h5>Formation <i class=\"help-icon\" data-tippy-placement=\"right\" title=\"Add up to 10 skills\"></i></h5>

                                                <!-- Skills List -->
                                                <div class=\"keywords-container\">
                                                    <div class=\"keyword-input-container\">

                                                        ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? $this->getContext($context, "formulaire")), 'form_start');
        echo "

                                                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "titre", []), 'widget', ["value" => " "]);
        echo "

                                                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formulaire"] ?? $this->getContext($context, "formulaire")), "titre", []), 'errors');
        echo "
                                                        <input type=\"submit\" class=\"keyword-input-button ripple-effect\" value=\"+\"/>
                                                        ";
        // line 149
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? $this->getContext($context, "formulaire")), 'form_end');
        echo "
                                                    </div>
                                                    <div class=\"keywords-list\">
                                                        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listFormation"] ?? $this->getContext($context, "listFormation")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 153
            echo "                                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_supp", ["id" => $this->getAttribute($context["formation"], "idFormation", [])]), "html", null, true);
            echo "\">
                                                                <span class=\"keyword-remove\"><span class=\"keyword-remove\" ></span><span class=\"keyword-text\" > X ";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "titre", []), "html", null, true);
            echo "</span></span>
                                                            </a>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "

                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class=\"col-xl-12\">
                    <div id=\"test1\" class=\"dashboard-box\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-lock\"></i> Mes Diplomes</h3>
                        </div>

                        <div class=\"content with-padding\">
                            <div class=\"row\">
                                <div class=\"col-xl-4\">
                                    <div class=\"submit-field\">
                                        <h5>Current Password</h5>
                                        <input type=\"password\" class=\"with-border\">
                                    </div>
                                </div>

                                <div class=\"col-xl-4\">
                                    <div class=\"submit-field\">
                                        <h5>New Password</h5>
                                        <input type=\"password\" class=\"with-border\">
                                    </div>
                                </div>

                                <div class=\"col-xl-4\">
                                    <div class=\"submit-field\">
                                        <h5>Repeat New Password</h5>
                                        <input type=\"password\" class=\"with-border\">
                                    </div>
                                </div>

                                <div class=\"col-xl-12\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"two-step\" checked>
                                        <label for=\"two-step\"><span class=\"checkbox-icon\"></span> Enable Two-Step Verification via Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class=\"col-xl-12\">
                    <a href=\"#\" class=\"button ripple-effect big margin-top-30\">Save Changes</a>
                </div>

            </div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 157,  240 => 154,  235 => 153,  231 => 152,  225 => 149,  220 => 147,  215 => 145,  210 => 143,  176 => 112,  169 => 108,  163 => 105,  148 => 95,  139 => 91,  133 => 88,  81 => 39,  77 => 38,  64 => 28,  36 => 2,);
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
                            <li class=\"active\"><a href=\"{{ path(\"fos_user_profile_show\") }}\"><i class=\"icon-material-outline-dashboard\"></i> Tableau de bord</a></li>
                            <li><a href=\"dashboard-messages.html\"><i class=\"icon-material-outline-question-answer\"></i> Messages <span class=\"nav-tag\">2</span></a></li>
                            <li><a href=\"dashboard-bookmarks.html\"><i class=\"icon-material-outline-star-border\"></i> Mes Groupes</a></li>
                            <li><a href=\"dashboard-reviews.html\"><i class=\"icon-material-outline-rate-review\"></i> Portfolio</a></li>

                        </ul>



                        <ul data-submenu-title=\"Compte\">
                            <li><a href=\"{{ path(\"fos_user_profile_edit\") }}\"><i class=\"icon-material-outline-settings\"></i> Modifier</a></li>
                            <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"icon-material-outline-power-settings-new\"></i> Deconnexion</a></li>
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
                <h3>Settings</h3>

                <!-- Breadcrumbs -->
                <nav id=\"breadcrumbs\" class=\"dark\">
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Dashboard</a></li>
                        <li>Settings</li>
                    </ul>
                </nav>
            </div>

            <!-- Row -->
            <div class=\"row\">

                <!-- Dashboard Box -->
                <div class=\"col-xl-12\">
                    <div class=\"dashboard-box margin-top-0\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-account-circle\"></i> Mon Compte</h3>
                        </div>

                        <div class=\"content with-padding padding-bottom-0\">

                            <div class=\"row\">

                                <div class=\"col-auto\">
                                    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

                                    <div class=\"avatar-wrapper\" data-tippy-placement=\"bottom\" title=\"Change Avatar\">
                                        <img class=\"profile-pic\"src=\"{{ asset('images/profile/'~ user.imageName)}}\" alt=\"{{ user.imageName }}\" />

                                        <div class=\"upload-button\"></div>

                                        <input type = \"file\" class=\"file-upload\"   name=\"{{ form.imageFile.vars.full_name }}\" id =\"{{form.imageFile.vars.id }}\"/>


                                    </div>
                                </div>

                                <div class=\"col\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">

                                            {{ form_widget(form) }}


                                                <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />


                                        </div>
                                        {{ form_end(form) }}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class=\"col-xl-12\">
                    <div class=\"dashboard-box\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-face\"></i> Mes compétences</h3>
                        </div>

                        <div class=\"content\">
                            <ul class=\"fields-ul\">
                                <li>
                                    <div class=\"row\">
                                        <div class=\"col-xl-8\">
                                            <div class=\"submit-field\">
                                                <h5>Formation <i class=\"help-icon\" data-tippy-placement=\"right\" title=\"Add up to 10 skills\"></i></h5>

                                                <!-- Skills List -->
                                                <div class=\"keywords-container\">
                                                    <div class=\"keyword-input-container\">

                                                        {{ form_start(formulaire) }}

                                                        {{ form_widget(formulaire.titre, {'value':' '}) }}

                                                        {{ form_errors(formulaire.titre) }}
                                                        <input type=\"submit\" class=\"keyword-input-button ripple-effect\" value=\"+\"/>
                                                        {{ form_end(formulaire) }}
                                                    </div>
                                                    <div class=\"keywords-list\">
                                                        {% for formation in listFormation %}
                                                            <a href=\"{{ path('formation_supp',{id: formation.idFormation }) }}\">
                                                                <span class=\"keyword-remove\"><span class=\"keyword-remove\" ></span><span class=\"keyword-text\" > X {{ formation.titre }}</span></span>
                                                            </a>
                                                        {% endfor %}


                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class=\"col-xl-12\">
                    <div id=\"test1\" class=\"dashboard-box\">

                        <!-- Headline -->
                        <div class=\"headline\">
                            <h3><i class=\"icon-material-outline-lock\"></i> Mes Diplomes</h3>
                        </div>

                        <div class=\"content with-padding\">
                            <div class=\"row\">
                                <div class=\"col-xl-4\">
                                    <div class=\"submit-field\">
                                        <h5>Current Password</h5>
                                        <input type=\"password\" class=\"with-border\">
                                    </div>
                                </div>

                                <div class=\"col-xl-4\">
                                    <div class=\"submit-field\">
                                        <h5>New Password</h5>
                                        <input type=\"password\" class=\"with-border\">
                                    </div>
                                </div>

                                <div class=\"col-xl-4\">
                                    <div class=\"submit-field\">
                                        <h5>Repeat New Password</h5>
                                        <input type=\"password\" class=\"with-border\">
                                    </div>
                                </div>

                                <div class=\"col-xl-12\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"two-step\" checked>
                                        <label for=\"two-step\"><span class=\"checkbox-icon\"></span> Enable Two-Step Verification via Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class=\"col-xl-12\">
                    <a href=\"#\" class=\"button ripple-effect big margin-top-30\">Save Changes</a>
                </div>

            </div>

", "@FOSUser/Profile/edit_content.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
