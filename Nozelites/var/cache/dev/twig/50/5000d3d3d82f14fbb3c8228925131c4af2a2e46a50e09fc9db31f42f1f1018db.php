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

/* @Nozelites/basefrontmembre.html.twig */
class __TwigTemplate_6c54327a09cc8e6066611108380322ea6edfc13e09c57bc144d97ab9b6f482d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/basefrontmembre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/basefrontmembre.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 405
        echo "<!-- Scripts
================================================== -->
";
        // line 407
        $this->displayBlock('javascripts', $context, $blocks);
        // line 463
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nozelites - ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/colors/red.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <!-- Wrapper -->
    <div id=\"wrapper\">

        <!-- Header Container
        ================================================== -->
        ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 271
        echo "        <!-- Header Container / End -->

        ";
        // line 273
        $this->displayBlock('content', $context, $blocks);
        // line 274
        echo "
        <!-- Footer
        ================================================== -->
        ";
        // line 277
        $this->displayBlock('footer', $context, $blocks);
        // line 400
        echo "        <!-- Footer / End -->

    </div>
    <!-- Wrapper / End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "            <header id=\"header-container\" class=\"fullwidth\">

                <!-- Header -->
                <div id=\"header\">
                    <div class=\"container\">

                        <!-- Left Side Content -->
                        <div class=\"left-side\">

                            <!-- Logo -->
                            <div id=\"logo\">
                                <!--<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\"></a>-->
                                <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_homepagefront");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>

                            <!-- Main Navigation -->
                            <nav id=\"navigation\">
                                <ul id=\"responsive\">

                                    <li><a href=\"#\" class=\"current\">Acceuil</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"index.html\">Categorie</a></li>
                                            <li><a href=\"index-2.html\">Elites</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"#\">Profil</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"#\">Browse Jobs</a>
                                                <ul class=\"dropdown-nav\">
                                                    <li><a href=\"jobs-list-layout-full-page-map.html\">Full Page List + Map</a></li>
                                                    <li><a href=\"jobs-grid-layout-full-page-map.html\">Full Page Grid + Map</a></li>
                                                    <li><a href=\"jobs-grid-layout-full-page.html\">Full Page Grid</a></li>
                                                    <li><a href=\"jobs-list-layout-1.html\">List Layout 1</a></li>
                                                    <li><a href=\"jobs-list-layout-2.html\">List Layout 2</a></li>
                                                    <li><a href=\"jobs-grid-layout.html\">Grid Layout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">Browse Tasks</a>
                                                <ul class=\"dropdown-nav\">
                                                    <li><a href=\"tasks-list-layout-1.html\">List Layout 1</a></li>
                                                    <li><a href=\"tasks-list-layout-2.html\">List Layout 2</a></li>
                                                    <li><a href=\"tasks-grid-layout.html\">Grid Layout</a></li>
                                                    <li><a href=\"tasks-grid-layout-full-page.html\">Full Page Grid</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"browse-companies.html\">Browse Companies</a></li>
                                            <li><a href=\"single-job-page.html\">Job Page</a></li>
                                            <li><a href=\"single-task-page.html\">Task Page</a></li>
                                            <li><a href=\"single-company-profile.html\">Company Profile</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"#\">Portfolio</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"#\">Find a Freelancer</a>
                                                <ul class=\"dropdown-nav\">
                                                    <li><a href=\"freelancers-grid-layout-full-page.html\">Full Page Grid</a></li>
                                                    <li><a href=\"freelancers-grid-layout.html\">Grid Layout</a></li>
                                                    <li><a href=\"freelancers-list-layout-1.html\">List Layout 1</a></li>
                                                    <li><a href=\"freelancers-list-layout-2.html\">List Layout 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"single-freelancer-profile.html\">Freelancer Profile</a></li>
                                            <li><a href=\"dashboard-post-a-job.html\">Post a Job</a></li>
                                            <li><a href=\"dashboard-post-a-task.html\">Post a Task</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesfront");
        echo "\">Groupes</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_membregroupesajouterfront");
        echo "\">creer</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"#\">Offre</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offre_liste_membre");
        echo "\">Consulter mes offres</a></li>
                                        </ul>
                                    </li>


                                    <li><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_AllEvenementfront");
        echo "\">Evenements</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_Evenementajouterfront");
        echo "\">creer</a></li>
                                            <li><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_Evenementafficherfront");
        echo "\">Mes Evenements</a></li>
                                            <li><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_AllEvenementfront");
        echo "\">All</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                            <div class=\"clearfix\"></div>
                            <!-- Main Navigation / End -->

                        </div>
                        <!-- Left Side Content / End -->


                        <!-- Right Side Content / End -->

                        <div class=\"right-side\">
                            ";
        // line 123
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 124
            echo "                            <!--  User Notifications -->
                            <div class=\"header-widget hide-on-mobile\">
                                <!-- Notifications -->
                                <div class=\"header-notifications\">

                                    <!-- Trigger -->
                                    <div class=\"header-notifications-trigger\">
                                        <a href=\"#\"><i class=\"icon-feather-bell\"></i><span>4</span></a>
                                    </div>
                                    <!-- Dropdown -->
                                    <div class=\"header-notifications-dropdown\">
                                        <div class=\"header-notifications-headline\">
                                            <h4>Notifications</h4>
                                            <button class=\"mark-as-read ripple-effect-dark\" title=\"Mark all as read\" data-tippy-placement=\"left\">
                                                <i class=\"icon-feather-check-square\"></i>
                                            </button>
                                        </div>

                                        <div class=\"header-notifications-content\">
                                            <div class=\"header-notifications-scroll\" data-simplebar>
                                                <ul>
                                                    <!-- Notification -->
                                                    <li class=\"notifications-not-read\">
                                                        <a href=\"dashboard-manage-candidates.html\">
                                                            <span class=\"notification-icon\"><i class=\"icon-material-outline-group\"></i></span>
                                                            <span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Michael Shannah</strong> applied for a job <span class=\"color\">Full Stack Software Engineer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </a>
                                                    </li>

                                                    <!-- Notification -->
                                                    <li>
                                                        <a href=\"dashboard-manage-bidders.html\">
                                                            <span class=\"notification-icon\"><i class=\" icon-material-outline-gavel\"></i></span>
                                                            <span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Gilbert Allanis</strong> placed a bid on your <span class=\"color\">iOS App Development</span> project
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </a>
                                                    </li>

                                                    <!-- Notification -->
                                                    <li>
                                                        <a href=\"dashboard-manage-jobs.html\">
                                                            <span class=\"notification-icon\"><i class=\"icon-material-outline-autorenew\"></i></span>
                                                            <span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tYour job listing <span class=\"color\">Full Stack PHP Developer</span> is expiring.
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </a>
                                                    </li>

                                                    <!-- Notification -->
                                                    <li>
                                                        <a href=\"dashboard-manage-candidates.html\">
                                                            <span class=\"notification-icon\"><i class=\"icon-material-outline-group\"></i></span>
                                                            <span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sindy Forrest</strong> applied for a job <span class=\"color\">Full Stack Software Engineer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Messages -->
                                <div class=\"header-notifications\">
                                    <div class=\"header-notifications-trigger\">
                                        <a href=\"";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_liste");
            echo "\"><i class=\"icon-feather-mail\"></i></a>
                                    </div>
                                    <!-- Dropdown -->
                                    <div class=\"header-notifications-dropdown\">
                                    <a href=\"";
            // line 197
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_liste");
            echo "\" class=\"header-notifications-button ripple-effect button-sliding-icon\">Voir tous les messages<i class=\"icon-material-outline-arrow-right-alt\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--  User Notifications / End -->

                            <!-- User Menu -->
                            <div class=\"header-widget\">

                                <!-- Messages -->
                                <div class=\"header-notifications user-menu\">
                                    <div class=\"header-notifications-trigger\">
                                        <a href=\"\"><div class=\"user-avatar status-online\"><img src=\"images/user-avatar-small-01.jpg\" alt=\"\"></div></a>
                                    </div>

                                    <!-- Dropdown -->
                                    <div class=\"header-notifications-dropdown\">

                                        <!-- User Status -->
                                        <div class=\"user-status\">

                                            <!-- User Name / Avatar -->
                                            <div class=\"user-details\">
                                                <div class=\"user-avatar status-online\"><img src=\"\" alt=\"\"></div>
                                                <div class=\"user-name\">

                                                </div>
                                            </div>

                                            <!-- User Status Switcher -->
                                            <div class=\"status-switch\" id=\"snackbar-user-status\">
                                                <label class=\"user-online current-status\">Online</label>
                                                <label class=\"user-invisible\">Invisible</label>
                                                <!-- Status Indicator -->
                                                <span class=\"status-indicator\" aria-hidden=\"true\"></span>
                                            </div>
                                        </div>

                                        <ul class=\"user-menu-small-nav\">
                                            <li><a href=\"";
            // line 237
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"icon-material-outline-dashboard\"></i> Profil</a></li>
                                            <li><a href=\"dashboard-settings.html\"><i class=\"icon-material-outline-settings\"></i> Settings</a></li>
                                            <li><a href=\"";
            // line 239
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"icon-material-outline-power-settings-new\"></i> Logout</a></li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                            <!-- User Menu / End -->
                            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 248
            echo "                            <div class=\"header-widget\">
                                <a href=\"";
            // line 249
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"log-in-button\"><i class=\"icon-feather-log-in\"></i> <span>Se Connecter/S'enregistrer</span></a>
                            </div>
                            ";
        }
        // line 252
        echo "                            <!-- Mobile Navigation Button -->
                            <span class=\"mmenu-trigger\">
\t\t\t\t\t<button class=\"hamburger hamburger--collapse\" type=\"button\">
\t\t\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t</span>

                        </div>
                        <!-- Right Side Content / End -->

                    </div>

                <!-- Header / End -->
                </div>
            </header>
            <div class=\"clearfix\"></div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 273
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 277
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 278
        echo "            <div id=\"footer\">

                <!-- Footer Top Section -->
                <div class=\"footer-top-section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-12\">

                                <!-- Footer Rows Container -->
                                <div class=\"footer-rows-container\">

                                    <!-- Left Side -->
                                    <div class=\"footer-rows-left\">
                                        <div class=\"footer-row\">
                                            <div class=\"footer-row-inner footer-logo\">
                                                <img src=\"images/logo2.png\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Side -->
                                    <div class=\"footer-rows-right\">

                                        <!-- Social Icons -->
                                        <div class=\"footer-row\">

                                        </div>

                                        <!-- Language Switcher -->

                                    </div>

                                </div>
                                <!-- Footer Rows Container / End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Top Section / End -->

                <!-- Footer Middle Section -->
                <div class=\"footer-middle-section\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <!-- Links -->
                            <div class=\"col-xl-2 col-lg-2 col-md-3\">
                                <div class=\"footer-links\">
                                    <h3>For Candidates</h3>
                                    <ul>
                                        <li><a href=\"#\"><span>Browse Jobs</span></a></li>
                                        <li><a href=\"#\"><span>Add Resume</span></a></li>
                                        <li><a href=\"#\"><span>Job Alerts</span></a></li>
                                        <li><a href=\"#\"><span>My Bookmarks</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Links -->
                            <div class=\"col-xl-2 col-lg-2 col-md-3\">
                                <div class=\"footer-links\">
                                    <h3>For Employers</h3>
                                    <ul>
                                        <li><a href=\"#\"><span>Browse Candidates</span></a></li>
                                        <li><a href=\"#\"><span>Post a Job</span></a></li>
                                        <li><a href=\"#\"><span>Post a Task</span></a></li>
                                        <li><a href=\"#\"><span>Plans & Pricing</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Links -->
                            <div class=\"col-xl-2 col-lg-2 col-md-3\">
                                <div class=\"footer-links\">
                                    <h3>Helpful Links</h3>
                                    <ul>
                                        <li><a href=\"#\"><span>Contact</span></a></li>
                                        <li><a href=\"#\"><span>Privacy Policy</span></a></li>
                                        <li><a href=\"#\"><span>Terms of Use</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Links -->
                            <div class=\"col-xl-2 col-lg-2 col-md-3\">
                                <div class=\"footer-links\">
                                    <h3>Account</h3>
                                    <ul>
                                        <li><a href=\"#\"><span>Log In</span></a></li>
                                        <li><a href=\"#\"><span>My Account</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Newsletter -->
                            <div class=\"col-xl-4 col-lg-4 col-md-12\">
                                <h3><i class=\"icon-feather-mail\"></i> Sign Up For a Newsletter</h3>
                                <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
                                <form action=\"#\" method=\"get\" class=\"newsletter\">
                                    <input type=\"text\" name=\"fname\" placeholder=\"Enter your email address\">
                                    <button type=\"submit\"><i class=\"icon-feather-arrow-right\"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Middle Section / End -->

                <!-- Footer Copyrights -->
                <div class=\"footer-bottom-section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-12\">
                                © 2018 <strong>Hireo</strong>. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Copyrights / End -->

            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 407
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 408
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mmenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tippy.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/simplebar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/snackbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/clipboard.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        \$('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: \"Dismiss\",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
    </script>


    <!-- Google Autocomplete -->
    <script>
        function initAutocomplete() {
            var options = {
                types: ['(cities)'],
                // componentRestrictions: {country: \"us\"}
            };

            var input = document.getElementById('autocomplete-input');
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        }

        // Autocomplete adjustment for homepage
        if (\$('.intro-banner-search-form')[0]) {
            setTimeout(function(){
                \$(\".pac-container\").prependTo(\".intro-search-field.with-autocomplete\");
            }, 300);
        }

    </script>

    <!-- Google API -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places&callback=initAutocomplete\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Nozelites/basefrontmembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 420,  699 => 419,  695 => 418,  691 => 417,  687 => 416,  683 => 415,  679 => 414,  675 => 413,  671 => 412,  667 => 411,  663 => 410,  659 => 409,  654 => 408,  645 => 407,  514 => 278,  505 => 277,  488 => 273,  460 => 252,  454 => 249,  451 => 248,  439 => 239,  434 => 237,  391 => 197,  384 => 193,  313 => 124,  311 => 123,  292 => 107,  288 => 106,  284 => 105,  279 => 103,  271 => 98,  262 => 92,  257 => 90,  195 => 33,  181 => 21,  172 => 20,  158 => 400,  156 => 277,  151 => 274,  149 => 273,  145 => 271,  143 => 20,  136 => 15,  127 => 14,  115 => 9,  110 => 8,  101 => 7,  83 => 6,  71 => 463,  69 => 407,  65 => 405,  63 => 14,  56 => 11,  54 => 7,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>{% block title %}Nozelites - {% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/colors/red.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}
    <!-- Wrapper -->
    <div id=\"wrapper\">

        <!-- Header Container
        ================================================== -->
        {% block header %}
            <header id=\"header-container\" class=\"fullwidth\">

                <!-- Header -->
                <div id=\"header\">
                    <div class=\"container\">

                        <!-- Left Side Content -->
                        <div class=\"left-side\">

                            <!-- Logo -->
                            <div id=\"logo\">
                                <!--<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\"></a>-->
                                <a href=\"{{ path('nozelites_homepagefront') }}\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"\"></a>
                            </div>

                            <!-- Main Navigation -->
                            <nav id=\"navigation\">
                                <ul id=\"responsive\">

                                    <li><a href=\"#\" class=\"current\">Acceuil</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"index.html\">Categorie</a></li>
                                            <li><a href=\"index-2.html\">Elites</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"#\">Profil</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"#\">Browse Jobs</a>
                                                <ul class=\"dropdown-nav\">
                                                    <li><a href=\"jobs-list-layout-full-page-map.html\">Full Page List + Map</a></li>
                                                    <li><a href=\"jobs-grid-layout-full-page-map.html\">Full Page Grid + Map</a></li>
                                                    <li><a href=\"jobs-grid-layout-full-page.html\">Full Page Grid</a></li>
                                                    <li><a href=\"jobs-list-layout-1.html\">List Layout 1</a></li>
                                                    <li><a href=\"jobs-list-layout-2.html\">List Layout 2</a></li>
                                                    <li><a href=\"jobs-grid-layout.html\">Grid Layout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">Browse Tasks</a>
                                                <ul class=\"dropdown-nav\">
                                                    <li><a href=\"tasks-list-layout-1.html\">List Layout 1</a></li>
                                                    <li><a href=\"tasks-list-layout-2.html\">List Layout 2</a></li>
                                                    <li><a href=\"tasks-grid-layout.html\">Grid Layout</a></li>
                                                    <li><a href=\"tasks-grid-layout-full-page.html\">Full Page Grid</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"browse-companies.html\">Browse Companies</a></li>
                                            <li><a href=\"single-job-page.html\">Job Page</a></li>
                                            <li><a href=\"single-task-page.html\">Task Page</a></li>
                                            <li><a href=\"single-company-profile.html\">Company Profile</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"#\">Portfolio</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"#\">Find a Freelancer</a>
                                                <ul class=\"dropdown-nav\">
                                                    <li><a href=\"freelancers-grid-layout-full-page.html\">Full Page Grid</a></li>
                                                    <li><a href=\"freelancers-grid-layout.html\">Grid Layout</a></li>
                                                    <li><a href=\"freelancers-list-layout-1.html\">List Layout 1</a></li>
                                                    <li><a href=\"freelancers-list-layout-2.html\">List Layout 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"single-freelancer-profile.html\">Freelancer Profile</a></li>
                                            <li><a href=\"dashboard-post-a-job.html\">Post a Job</a></li>
                                            <li><a href=\"dashboard-post-a-task.html\">Post a Task</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"{{ path('nozelites_membregroupesfront') }}\">Groupes</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"{{ path('nozelites_membregroupesajouterfront')}}\">creer</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"#\">Offre</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"{{ path('offre_liste_membre')}}\">Consulter mes offres</a></li>
                                        </ul>
                                    </li>


                                    <li><a href=\"{{ path('nozelites_AllEvenementfront')}}\">Evenements</a>
                                        <ul class=\"dropdown-nav\">
                                            <li><a href=\"{{ path('nozelites_Evenementajouterfront')}}\">creer</a></li>
                                            <li><a href=\"{{ path('nozelites_Evenementafficherfront')}}\">Mes Evenements</a></li>
                                            <li><a href=\"{{ path('nozelites_AllEvenementfront')}}\">All</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                            <div class=\"clearfix\"></div>
                            <!-- Main Navigation / End -->

                        </div>
                        <!-- Left Side Content / End -->


                        <!-- Right Side Content / End -->

                        <div class=\"right-side\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <!--  User Notifications -->
                            <div class=\"header-widget hide-on-mobile\">
                                <!-- Notifications -->
                                <div class=\"header-notifications\">

                                    <!-- Trigger -->
                                    <div class=\"header-notifications-trigger\">
                                        <a href=\"#\"><i class=\"icon-feather-bell\"></i><span>4</span></a>
                                    </div>
                                    <!-- Dropdown -->
                                    <div class=\"header-notifications-dropdown\">
                                        <div class=\"header-notifications-headline\">
                                            <h4>Notifications</h4>
                                            <button class=\"mark-as-read ripple-effect-dark\" title=\"Mark all as read\" data-tippy-placement=\"left\">
                                                <i class=\"icon-feather-check-square\"></i>
                                            </button>
                                        </div>

                                        <div class=\"header-notifications-content\">
                                            <div class=\"header-notifications-scroll\" data-simplebar>
                                                <ul>
                                                    <!-- Notification -->
                                                    <li class=\"notifications-not-read\">
                                                        <a href=\"dashboard-manage-candidates.html\">
                                                            <span class=\"notification-icon\"><i class=\"icon-material-outline-group\"></i></span>
                                                            <span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Michael Shannah</strong> applied for a job <span class=\"color\">Full Stack Software Engineer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </a>
                                                    </li>

                                                    <!-- Notification -->
                                                    <li>
                                                        <a href=\"dashboard-manage-bidders.html\">
                                                            <span class=\"notification-icon\"><i class=\" icon-material-outline-gavel\"></i></span>
                                                            <span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Gilbert Allanis</strong> placed a bid on your <span class=\"color\">iOS App Development</span> project
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </a>
                                                    </li>

                                                    <!-- Notification -->
                                                    <li>
                                                        <a href=\"dashboard-manage-jobs.html\">
                                                            <span class=\"notification-icon\"><i class=\"icon-material-outline-autorenew\"></i></span>
                                                            <span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tYour job listing <span class=\"color\">Full Stack PHP Developer</span> is expiring.
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </a>
                                                    </li>

                                                    <!-- Notification -->
                                                    <li>
                                                        <a href=\"dashboard-manage-candidates.html\">
                                                            <span class=\"notification-icon\"><i class=\"icon-material-outline-group\"></i></span>
                                                            <span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sindy Forrest</strong> applied for a job <span class=\"color\">Full Stack Software Engineer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Messages -->
                                <div class=\"header-notifications\">
                                    <div class=\"header-notifications-trigger\">
                                        <a href=\"{{ path('message_liste')}}\"><i class=\"icon-feather-mail\"></i></a>
                                    </div>
                                    <!-- Dropdown -->
                                    <div class=\"header-notifications-dropdown\">
                                    <a href=\"{{ path('message_liste')}}\" class=\"header-notifications-button ripple-effect button-sliding-icon\">Voir tous les messages<i class=\"icon-material-outline-arrow-right-alt\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!--  User Notifications / End -->

                            <!-- User Menu -->
                            <div class=\"header-widget\">

                                <!-- Messages -->
                                <div class=\"header-notifications user-menu\">
                                    <div class=\"header-notifications-trigger\">
                                        <a href=\"\"><div class=\"user-avatar status-online\"><img src=\"images/user-avatar-small-01.jpg\" alt=\"\"></div></a>
                                    </div>

                                    <!-- Dropdown -->
                                    <div class=\"header-notifications-dropdown\">

                                        <!-- User Status -->
                                        <div class=\"user-status\">

                                            <!-- User Name / Avatar -->
                                            <div class=\"user-details\">
                                                <div class=\"user-avatar status-online\"><img src=\"\" alt=\"\"></div>
                                                <div class=\"user-name\">

                                                </div>
                                            </div>

                                            <!-- User Status Switcher -->
                                            <div class=\"status-switch\" id=\"snackbar-user-status\">
                                                <label class=\"user-online current-status\">Online</label>
                                                <label class=\"user-invisible\">Invisible</label>
                                                <!-- Status Indicator -->
                                                <span class=\"status-indicator\" aria-hidden=\"true\"></span>
                                            </div>
                                        </div>

                                        <ul class=\"user-menu-small-nav\">
                                            <li><a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"icon-material-outline-dashboard\"></i> Profil</a></li>
                                            <li><a href=\"dashboard-settings.html\"><i class=\"icon-material-outline-settings\"></i> Settings</a></li>
                                            <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"icon-material-outline-power-settings-new\"></i> Logout</a></li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                            <!-- User Menu / End -->
                            {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                            <div class=\"header-widget\">
                                <a href=\"{{ path('fos_user_security_login') }}\" class=\"log-in-button\"><i class=\"icon-feather-log-in\"></i> <span>Se Connecter/S'enregistrer</span></a>
                            </div>
                            {% endif %}
                            <!-- Mobile Navigation Button -->
                            <span class=\"mmenu-trigger\">
\t\t\t\t\t<button class=\"hamburger hamburger--collapse\" type=\"button\">
\t\t\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t</span>

                        </div>
                        <!-- Right Side Content / End -->

                    </div>

                <!-- Header / End -->
                </div>
            </header>
            <div class=\"clearfix\"></div>
        {% endblock %}
        <!-- Header Container / End -->

        {% block content %}{% endblock %}

        <!-- Footer
        ================================================== -->
        {% block footer %}
            <div id=\"footer\">

                <!-- Footer Top Section -->
                <div class=\"footer-top-section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-12\">

                                <!-- Footer Rows Container -->
                                <div class=\"footer-rows-container\">

                                    <!-- Left Side -->
                                    <div class=\"footer-rows-left\">
                                        <div class=\"footer-row\">
                                            <div class=\"footer-row-inner footer-logo\">
                                                <img src=\"images/logo2.png\" alt=\"\">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Side -->
                                    <div class=\"footer-rows-right\">

                                        <!-- Social Icons -->
                                        <div class=\"footer-row\">

                                        </div>

                                        <!-- Language Switcher -->

                                    </div>

                                </div>
                                <!-- Footer Rows Container / End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Top Section / End -->

                <!-- Footer Middle Section -->
                <div class=\"footer-middle-section\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <!-- Links -->
                            <div class=\"col-xl-2 col-lg-2 col-md-3\">
                                <div class=\"footer-links\">
                                    <h3>For Candidates</h3>
                                    <ul>
                                        <li><a href=\"#\"><span>Browse Jobs</span></a></li>
                                        <li><a href=\"#\"><span>Add Resume</span></a></li>
                                        <li><a href=\"#\"><span>Job Alerts</span></a></li>
                                        <li><a href=\"#\"><span>My Bookmarks</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Links -->
                            <div class=\"col-xl-2 col-lg-2 col-md-3\">
                                <div class=\"footer-links\">
                                    <h3>For Employers</h3>
                                    <ul>
                                        <li><a href=\"#\"><span>Browse Candidates</span></a></li>
                                        <li><a href=\"#\"><span>Post a Job</span></a></li>
                                        <li><a href=\"#\"><span>Post a Task</span></a></li>
                                        <li><a href=\"#\"><span>Plans & Pricing</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Links -->
                            <div class=\"col-xl-2 col-lg-2 col-md-3\">
                                <div class=\"footer-links\">
                                    <h3>Helpful Links</h3>
                                    <ul>
                                        <li><a href=\"#\"><span>Contact</span></a></li>
                                        <li><a href=\"#\"><span>Privacy Policy</span></a></li>
                                        <li><a href=\"#\"><span>Terms of Use</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Links -->
                            <div class=\"col-xl-2 col-lg-2 col-md-3\">
                                <div class=\"footer-links\">
                                    <h3>Account</h3>
                                    <ul>
                                        <li><a href=\"#\"><span>Log In</span></a></li>
                                        <li><a href=\"#\"><span>My Account</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Newsletter -->
                            <div class=\"col-xl-4 col-lg-4 col-md-12\">
                                <h3><i class=\"icon-feather-mail\"></i> Sign Up For a Newsletter</h3>
                                <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
                                <form action=\"#\" method=\"get\" class=\"newsletter\">
                                    <input type=\"text\" name=\"fname\" placeholder=\"Enter your email address\">
                                    <button type=\"submit\"><i class=\"icon-feather-arrow-right\"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Middle Section / End -->

                <!-- Footer Copyrights -->
                <div class=\"footer-bottom-section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-12\">
                                © 2018 <strong>Hireo</strong>. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Copyrights / End -->

            </div>
        {% endblock %}
        <!-- Footer / End -->

    </div>
    <!-- Wrapper / End -->
{% endblock %}
<!-- Scripts
================================================== -->
{% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-migrate-3.0.0.min.js') }}\"></script>
    <script src=\"{{ asset('js/mmenu.min.js') }}\"></script>
    <script src=\"{{ asset('js/tippy.all.min.js') }}\"></script>
    <script src=\"{{ asset('js/simplebar.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-slider.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-select.min.js') }}\"></script>
    <script src=\"{{ asset('js/snackbar.js') }}\"></script>
    <script src=\"{{ asset('js/clipboard.min.js') }}\"></script>
    <script src=\"{{ asset('js/counterup.min.js') }}\"></script>
    <script src=\"{{ asset('js/magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('js/custom.js') }}\"></script>

    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        \$('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: \"Dismiss\",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
    </script>


    <!-- Google Autocomplete -->
    <script>
        function initAutocomplete() {
            var options = {
                types: ['(cities)'],
                // componentRestrictions: {country: \"us\"}
            };

            var input = document.getElementById('autocomplete-input');
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        }

        // Autocomplete adjustment for homepage
        if (\$('.intro-banner-search-form')[0]) {
            setTimeout(function(){
                \$(\".pac-container\").prependTo(\".intro-search-field.with-autocomplete\");
            }, 300);
        }

    </script>

    <!-- Google API -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places&callback=initAutocomplete\"></script>
{% endblock %}
</body>
</html>
", "@Nozelites/basefrontmembre.html.twig", "C:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\basefrontmembre.html.twig");
    }
}
