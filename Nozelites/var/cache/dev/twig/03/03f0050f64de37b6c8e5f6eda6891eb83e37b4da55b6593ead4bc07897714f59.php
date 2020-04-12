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
class __TwigTemplate_340096596e61ce96afe4dc3304b6ae55777f938f5427a9136c38ea3aed0ae2af extends \Twig\Template
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
                            <li class=\"active\"><a href=\"dashboard.html\"><i class=\"icon-material-outline-dashboard\"></i> Tableau de bord</a></li>
                            <li><a href=\"dashboard-messages.html\"><i class=\"icon-material-outline-question-answer\"></i> Messages <span class=\"nav-tag\">2</span></a></li>
                            <li><a href=\"dashboard-bookmarks.html\"><i class=\"icon-material-outline-star-border\"></i> Mes Groupes</a></li>
                            <li><a href=\"dashboard-reviews.html\"><i class=\"icon-material-outline-rate-review\"></i> Portfolio</a></li>

                        </ul>



                        <ul data-submenu-title=\"Compte\">
                            <li><a href=\"";
        // line 38
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
                                    <div class=\"avatar-wrapper\" data-tippy-placement=\"bottom\" title=\"Change Avatar\">
                                        <img class=\"profile-pic\" src=\"images/user-avatar-placeholder.png\" alt=\"\" />
                                        <div class=\"upload-button\"></div>
                                        <input class=\"file-upload\" type=\"file\" accept=\"image/*\"/>
                                    </div>
                                </div>

                                <div class=\"col\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">
                                            ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => ["class" => "fos_user_profile_edit"]]);
        echo "
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "


                                                <input type=\"submit\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />

                                            ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                                        </div>



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
                            <h3><i class=\"icon-material-outline-face\"></i> My Profile</h3>
                        </div>

                        <div class=\"content\">
                            <ul class=\"fields-ul\">
                                <li>
                                    <div class=\"row\">
                                        <div class=\"col-xl-4\">
                                            <div class=\"submit-field\">
                                                <div class=\"bidding-widget\">
                                                    <!-- Headline -->
                                                    <span class=\"bidding-detail\">Set your <strong>minimal hourly rate</strong></span>

                                                    <!-- Slider -->
                                                    <div class=\"bidding-value margin-bottom-10\">\$<span id=\"biddingVal\"></span></div>
                                                    <input class=\"bidding-slider\" type=\"text\" value=\"\" data-slider-handle=\"custom\" data-slider-currency=\"\$\" data-slider-min=\"5\" data-slider-max=\"150\" data-slider-value=\"35\" data-slider-step=\"1\" data-slider-tooltip=\"hide\" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-4\">
                                            <div class=\"submit-field\">
                                                <h5>Skills <i class=\"help-icon\" data-tippy-placement=\"right\" title=\"Add up to 10 skills\"></i></h5>

                                                <!-- Skills List -->
                                                <div class=\"keywords-container\">
                                                    <div class=\"keyword-input-container\">
                                                        <input type=\"text\" class=\"keyword-input with-border\" placeholder=\"e.g. Angular, Laravel\"/>
                                                        <button class=\"keyword-input-button ripple-effect\"><i class=\"icon-material-outline-add\"></i></button>
                                                    </div>
                                                    <div class=\"keywords-list\">
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">Angular</span></span>
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">Vue JS</span></span>
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">iOS</span></span>
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">Android</span></span>
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">Laravel</span></span>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-4\">
                                            <div class=\"submit-field\">
                                                <h5>Attachments</h5>

                                                <!-- Attachments -->
                                                <div class=\"attachments-container margin-top-0 margin-bottom-0\">
                                                    <div class=\"attachment-box ripple-effect\">
                                                        <span>Cover Letter</span>
                                                        <i>PDF</i>
                                                        <button class=\"remove-attachment\" data-tippy-placement=\"top\" title=\"Remove\"></button>
                                                    </div>
                                                    <div class=\"attachment-box ripple-effect\">
                                                        <span>Contract</span>
                                                        <i>DOCX</i>
                                                        <button class=\"remove-attachment\" data-tippy-placement=\"top\" title=\"Remove\"></button>
                                                    </div>
                                                </div>
                                                <div class=\"clearfix\"></div>

                                                <!-- Upload Button -->
                                                <div class=\"uploadButton margin-top-0\">
                                                    <input class=\"uploadButton-input\" type=\"file\" accept=\"image/*, application/pdf\" id=\"upload\" multiple/>
                                                    <label class=\"uploadButton-button ripple-effect\" for=\"upload\">Upload Files</label>
                                                    <span class=\"uploadButton-file-name\">Maximum file size: 10 MB</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"submit-field\">
                                                <h5>Tagline</h5>
                                                <input type=\"text\" class=\"with-border\" value=\"iOS Expert + Node Dev\">
                                            </div>
                                        </div>

                                        <div class=\"col-xl-6\">
                                            <div class=\"submit-field\">
                                                <h5>Nationality</h5>
                                                <select class=\"selectpicker with-border\" data-size=\"7\" title=\"Select Job Type\" data-live-search=\"true\">
                                                    <option value=\"AR\">Argentina</option>
                                                    <option value=\"AM\">Armenia</option>
                                                    <option value=\"AW\">Aruba</option>
                                                    <option value=\"AU\">Australia</option>
                                                    <option value=\"AT\">Austria</option>
                                                    <option value=\"AZ\">Azerbaijan</option>
                                                    <option value=\"BS\">Bahamas</option>
                                                    <option value=\"BH\">Bahrain</option>
                                                    <option value=\"BD\">Bangladesh</option>
                                                    <option value=\"BB\">Barbados</option>
                                                    <option value=\"BY\">Belarus</option>
                                                    <option value=\"BE\">Belgium</option>
                                                    <option value=\"BZ\">Belize</option>
                                                    <option value=\"BJ\">Benin</option>
                                                    <option value=\"BM\">Bermuda</option>
                                                    <option value=\"BT\">Bhutan</option>
                                                    <option value=\"BG\">Bulgaria</option>
                                                    <option value=\"BF\">Burkina Faso</option>
                                                    <option value=\"BI\">Burundi</option>
                                                    <option value=\"KH\">Cambodia</option>
                                                    <option value=\"CM\">Cameroon</option>
                                                    <option value=\"CA\">Canada</option>
                                                    <option value=\"CV\">Cape Verde</option>
                                                    <option value=\"KY\">Cayman Islands</option>
                                                    <option value=\"CO\">Colombia</option>
                                                    <option value=\"KM\">Comoros</option>
                                                    <option value=\"CG\">Congo</option>
                                                    <option value=\"CK\">Cook Islands</option>
                                                    <option value=\"CR\">Costa Rica</option>
                                                    <option value=\"CI\">Côte d'Ivoire</option>
                                                    <option value=\"HR\">Croatia</option>
                                                    <option value=\"CU\">Cuba</option>
                                                    <option value=\"CW\">Curaçao</option>
                                                    <option value=\"CY\">Cyprus</option>
                                                    <option value=\"CZ\">Czech Republic</option>
                                                    <option value=\"DK\">Denmark</option>
                                                    <option value=\"DJ\">Djibouti</option>
                                                    <option value=\"DM\">Dominica</option>
                                                    <option value=\"DO\">Dominican Republic</option>
                                                    <option value=\"EC\">Ecuador</option>
                                                    <option value=\"EG\">Egypt</option>
                                                    <option value=\"GP\">Guadeloupe</option>
                                                    <option value=\"GU\">Guam</option>
                                                    <option value=\"GT\">Guatemala</option>
                                                    <option value=\"GG\">Guernsey</option>
                                                    <option value=\"GN\">Guinea</option>
                                                    <option value=\"GW\">Guinea-Bissau</option>
                                                    <option value=\"GY\">Guyana</option>
                                                    <option value=\"HT\">Haiti</option>
                                                    <option value=\"HN\">Honduras</option>
                                                    <option value=\"HK\">Hong Kong</option>
                                                    <option value=\"HU\">Hungary</option>
                                                    <option value=\"IS\">Iceland</option>
                                                    <option value=\"IN\">India</option>
                                                    <option value=\"ID\">Indonesia</option>
                                                    <option value=\"NO\">Norway</option>
                                                    <option value=\"OM\">Oman</option>
                                                    <option value=\"PK\">Pakistan</option>
                                                    <option value=\"PW\">Palau</option>
                                                    <option value=\"PA\">Panama</option>
                                                    <option value=\"PG\">Papua New Guinea</option>
                                                    <option value=\"PY\">Paraguay</option>
                                                    <option value=\"PE\">Peru</option>
                                                    <option value=\"PH\">Philippines</option>
                                                    <option value=\"PN\">Pitcairn</option>
                                                    <option value=\"PL\">Poland</option>
                                                    <option value=\"PT\">Portugal</option>
                                                    <option value=\"PR\">Puerto Rico</option>
                                                    <option value=\"QA\">Qatar</option>
                                                    <option value=\"RE\">Réunion</option>
                                                    <option value=\"RO\">Romania</option>
                                                    <option value=\"RU\">Russian Federation</option>
                                                    <option value=\"RW\">Rwanda</option>
                                                    <option value=\"SZ\">Swaziland</option>
                                                    <option value=\"SE\">Sweden</option>
                                                    <option value=\"CH\">Switzerland</option>
                                                    <option value=\"TR\">Turkey</option>
                                                    <option value=\"TM\">Turkmenistan</option>
                                                    <option value=\"TV\">Tuvalu</option>
                                                    <option value=\"UG\">Uganda</option>
                                                    <option value=\"UA\">Ukraine</option>
                                                    <option value=\"GB\">United Kingdom</option>
                                                    <option value=\"US\" selected>United States</option>
                                                    <option value=\"UY\">Uruguay</option>
                                                    <option value=\"UZ\">Uzbekistan</option>
                                                    <option value=\"YE\">Yemen</option>
                                                    <option value=\"ZM\">Zambia</option>
                                                    <option value=\"ZW\">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-12\">
                                            <div class=\"submit-field\">
                                                <h5>Introduce Yourself</h5>
                                                <textarea cols=\"30\" rows=\"5\" class=\"with-border\">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
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
                            <h3><i class=\"icon-material-outline-lock\"></i> Password & Security</h3>
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
            <!-- Row / End -->
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
        return array (  152 => 104,  147 => 102,  141 => 99,  137 => 98,  74 => 38,  36 => 2,);
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
                                    <div class=\"avatar-wrapper\" data-tippy-placement=\"bottom\" title=\"Change Avatar\">
                                        <img class=\"profile-pic\" src=\"images/user-avatar-placeholder.png\" alt=\"\" />
                                        <div class=\"upload-button\"></div>
                                        <input class=\"file-upload\" type=\"file\" accept=\"image/*\"/>
                                    </div>
                                </div>

                                <div class=\"col\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">
                                            {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
                                            {{ form_widget(form) }}


                                                <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />

                                            {{ form_end(form) }}
                                        </div>



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
                            <h3><i class=\"icon-material-outline-face\"></i> My Profile</h3>
                        </div>

                        <div class=\"content\">
                            <ul class=\"fields-ul\">
                                <li>
                                    <div class=\"row\">
                                        <div class=\"col-xl-4\">
                                            <div class=\"submit-field\">
                                                <div class=\"bidding-widget\">
                                                    <!-- Headline -->
                                                    <span class=\"bidding-detail\">Set your <strong>minimal hourly rate</strong></span>

                                                    <!-- Slider -->
                                                    <div class=\"bidding-value margin-bottom-10\">\$<span id=\"biddingVal\"></span></div>
                                                    <input class=\"bidding-slider\" type=\"text\" value=\"\" data-slider-handle=\"custom\" data-slider-currency=\"\$\" data-slider-min=\"5\" data-slider-max=\"150\" data-slider-value=\"35\" data-slider-step=\"1\" data-slider-tooltip=\"hide\" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-4\">
                                            <div class=\"submit-field\">
                                                <h5>Skills <i class=\"help-icon\" data-tippy-placement=\"right\" title=\"Add up to 10 skills\"></i></h5>

                                                <!-- Skills List -->
                                                <div class=\"keywords-container\">
                                                    <div class=\"keyword-input-container\">
                                                        <input type=\"text\" class=\"keyword-input with-border\" placeholder=\"e.g. Angular, Laravel\"/>
                                                        <button class=\"keyword-input-button ripple-effect\"><i class=\"icon-material-outline-add\"></i></button>
                                                    </div>
                                                    <div class=\"keywords-list\">
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">Angular</span></span>
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">Vue JS</span></span>
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">iOS</span></span>
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">Android</span></span>
                                                        <span class=\"keyword\"><span class=\"keyword-remove\"></span><span class=\"keyword-text\">Laravel</span></span>
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-4\">
                                            <div class=\"submit-field\">
                                                <h5>Attachments</h5>

                                                <!-- Attachments -->
                                                <div class=\"attachments-container margin-top-0 margin-bottom-0\">
                                                    <div class=\"attachment-box ripple-effect\">
                                                        <span>Cover Letter</span>
                                                        <i>PDF</i>
                                                        <button class=\"remove-attachment\" data-tippy-placement=\"top\" title=\"Remove\"></button>
                                                    </div>
                                                    <div class=\"attachment-box ripple-effect\">
                                                        <span>Contract</span>
                                                        <i>DOCX</i>
                                                        <button class=\"remove-attachment\" data-tippy-placement=\"top\" title=\"Remove\"></button>
                                                    </div>
                                                </div>
                                                <div class=\"clearfix\"></div>

                                                <!-- Upload Button -->
                                                <div class=\"uploadButton margin-top-0\">
                                                    <input class=\"uploadButton-input\" type=\"file\" accept=\"image/*, application/pdf\" id=\"upload\" multiple/>
                                                    <label class=\"uploadButton-button ripple-effect\" for=\"upload\">Upload Files</label>
                                                    <span class=\"uploadButton-file-name\">Maximum file size: 10 MB</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"row\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"submit-field\">
                                                <h5>Tagline</h5>
                                                <input type=\"text\" class=\"with-border\" value=\"iOS Expert + Node Dev\">
                                            </div>
                                        </div>

                                        <div class=\"col-xl-6\">
                                            <div class=\"submit-field\">
                                                <h5>Nationality</h5>
                                                <select class=\"selectpicker with-border\" data-size=\"7\" title=\"Select Job Type\" data-live-search=\"true\">
                                                    <option value=\"AR\">Argentina</option>
                                                    <option value=\"AM\">Armenia</option>
                                                    <option value=\"AW\">Aruba</option>
                                                    <option value=\"AU\">Australia</option>
                                                    <option value=\"AT\">Austria</option>
                                                    <option value=\"AZ\">Azerbaijan</option>
                                                    <option value=\"BS\">Bahamas</option>
                                                    <option value=\"BH\">Bahrain</option>
                                                    <option value=\"BD\">Bangladesh</option>
                                                    <option value=\"BB\">Barbados</option>
                                                    <option value=\"BY\">Belarus</option>
                                                    <option value=\"BE\">Belgium</option>
                                                    <option value=\"BZ\">Belize</option>
                                                    <option value=\"BJ\">Benin</option>
                                                    <option value=\"BM\">Bermuda</option>
                                                    <option value=\"BT\">Bhutan</option>
                                                    <option value=\"BG\">Bulgaria</option>
                                                    <option value=\"BF\">Burkina Faso</option>
                                                    <option value=\"BI\">Burundi</option>
                                                    <option value=\"KH\">Cambodia</option>
                                                    <option value=\"CM\">Cameroon</option>
                                                    <option value=\"CA\">Canada</option>
                                                    <option value=\"CV\">Cape Verde</option>
                                                    <option value=\"KY\">Cayman Islands</option>
                                                    <option value=\"CO\">Colombia</option>
                                                    <option value=\"KM\">Comoros</option>
                                                    <option value=\"CG\">Congo</option>
                                                    <option value=\"CK\">Cook Islands</option>
                                                    <option value=\"CR\">Costa Rica</option>
                                                    <option value=\"CI\">Côte d'Ivoire</option>
                                                    <option value=\"HR\">Croatia</option>
                                                    <option value=\"CU\">Cuba</option>
                                                    <option value=\"CW\">Curaçao</option>
                                                    <option value=\"CY\">Cyprus</option>
                                                    <option value=\"CZ\">Czech Republic</option>
                                                    <option value=\"DK\">Denmark</option>
                                                    <option value=\"DJ\">Djibouti</option>
                                                    <option value=\"DM\">Dominica</option>
                                                    <option value=\"DO\">Dominican Republic</option>
                                                    <option value=\"EC\">Ecuador</option>
                                                    <option value=\"EG\">Egypt</option>
                                                    <option value=\"GP\">Guadeloupe</option>
                                                    <option value=\"GU\">Guam</option>
                                                    <option value=\"GT\">Guatemala</option>
                                                    <option value=\"GG\">Guernsey</option>
                                                    <option value=\"GN\">Guinea</option>
                                                    <option value=\"GW\">Guinea-Bissau</option>
                                                    <option value=\"GY\">Guyana</option>
                                                    <option value=\"HT\">Haiti</option>
                                                    <option value=\"HN\">Honduras</option>
                                                    <option value=\"HK\">Hong Kong</option>
                                                    <option value=\"HU\">Hungary</option>
                                                    <option value=\"IS\">Iceland</option>
                                                    <option value=\"IN\">India</option>
                                                    <option value=\"ID\">Indonesia</option>
                                                    <option value=\"NO\">Norway</option>
                                                    <option value=\"OM\">Oman</option>
                                                    <option value=\"PK\">Pakistan</option>
                                                    <option value=\"PW\">Palau</option>
                                                    <option value=\"PA\">Panama</option>
                                                    <option value=\"PG\">Papua New Guinea</option>
                                                    <option value=\"PY\">Paraguay</option>
                                                    <option value=\"PE\">Peru</option>
                                                    <option value=\"PH\">Philippines</option>
                                                    <option value=\"PN\">Pitcairn</option>
                                                    <option value=\"PL\">Poland</option>
                                                    <option value=\"PT\">Portugal</option>
                                                    <option value=\"PR\">Puerto Rico</option>
                                                    <option value=\"QA\">Qatar</option>
                                                    <option value=\"RE\">Réunion</option>
                                                    <option value=\"RO\">Romania</option>
                                                    <option value=\"RU\">Russian Federation</option>
                                                    <option value=\"RW\">Rwanda</option>
                                                    <option value=\"SZ\">Swaziland</option>
                                                    <option value=\"SE\">Sweden</option>
                                                    <option value=\"CH\">Switzerland</option>
                                                    <option value=\"TR\">Turkey</option>
                                                    <option value=\"TM\">Turkmenistan</option>
                                                    <option value=\"TV\">Tuvalu</option>
                                                    <option value=\"UG\">Uganda</option>
                                                    <option value=\"UA\">Ukraine</option>
                                                    <option value=\"GB\">United Kingdom</option>
                                                    <option value=\"US\" selected>United States</option>
                                                    <option value=\"UY\">Uruguay</option>
                                                    <option value=\"UZ\">Uzbekistan</option>
                                                    <option value=\"YE\">Yemen</option>
                                                    <option value=\"ZM\">Zambia</option>
                                                    <option value=\"ZW\">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"col-xl-12\">
                                            <div class=\"submit-field\">
                                                <h5>Introduce Yourself</h5>
                                                <textarea cols=\"30\" rows=\"5\" class=\"with-border\">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
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
                            <h3><i class=\"icon-material-outline-lock\"></i> Password & Security</h3>
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
            <!-- Row / End -->
", "@FOSUser/Profile/edit_content.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
