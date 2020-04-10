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

/* @Nozelites/baseback.html.twig */
class __TwigTemplate_6839bfac3468e9f06d58d8b71ab5f4885b124537418b54bf1ffdee1eb48bc69e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'navbar' => [$this, 'block_navbar'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/baseback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/baseback.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"hold-transition sidebar-mini layout-fixed\">
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 290
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 326
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nozelites Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
            <!-- Ionicons -->
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
            <!-- Tempusdominus Bbootstrap 4 -->
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
            <!-- iCheck -->
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
            <!-- JQVMap -->
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
            <!-- Theme style -->
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
            <!-- overlayScrollbars -->
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
            <!-- Daterange picker -->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
            <!-- summernote -->
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
            <!-- Google Font: Source Sans Pro -->
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "        <div class=\"wrapper\">

            ";
        // line 37
        $this->displayBlock('navbar', $context, $blocks);
        // line 161
        echo "
            ";
        // line 162
        $this->displayBlock('sidebar', $context, $blocks);
        // line 287
        echo "        </div>
            <!-- ./wrapper -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_navbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 38
        echo "            <!-- Navbar -->
            <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
                <!-- Left navbar links -->
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"index3.html\" class=\"nav-link\">Home</a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"#\" class=\"nav-link\">Contact</a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class=\"form-inline ml-3\">
                    <div class=\"input-group input-group-sm\">
                        <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-navbar\" type=\"submit\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class=\"navbar-nav ml-auto\">
                    <!-- Messages Dropdown Menu -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"far fa-comments\"></i>
                            <span class=\"badge badge-danger navbar-badge\">3</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <!-- Message Start -->
                                <div class=\"media\">
                                    <img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                                    <div class=\"media-body\">
                                        <h3 class=\"dropdown-item-title\">
                                            Brad Diesel
                                            <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                        </h3>
                                        <p class=\"text-sm\">Call me whenever you can...</p>
                                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <!-- Message Start -->
                                <div class=\"media\">
                                    <img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                                    <div class=\"media-body\">
                                        <h3 class=\"dropdown-item-title\">
                                            John Pierce
                                            <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                        </h3>
                                        <p class=\"text-sm\">I got your message bro</p>
                                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <!-- Message Start -->
                                <div class=\"media\">
                                    <img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                                    <div class=\"media-body\">
                                        <h3 class=\"dropdown-item-title\">
                                            Nora Silvester
                                            <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                        </h3>
                                        <p class=\"text-sm\">The subject goes here</p>
                                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"far fa-bell\"></i>
                            <span class=\"badge badge-warning navbar-badge\">15</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                            <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                                <span class=\"float-right text-muted text-sm\">3 mins</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                                <span class=\"float-right text-muted text-sm\">12 hours</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <i class=\"fas fa-file mr-2\"></i> 3 new reports
                                <span class=\"float-right text-muted text-sm\">2 days</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
                            <i class=\"fas fa-th-large\"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 163
        echo "            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                <a href=\"index3.html\" class=\"brand-link\">
                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logoNozelites.jpg"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image elevation-3\"
                         style=\"opacity: .8\">
                    <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
                <div class=\"sidebar\">
                    <!-- Sidebar user panel (optional) ->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                            <img src=\"\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                        <div class=\"info\">
                            <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
                        </div>
                    </div>-->

                    <!-- Sidebar Menu -->
                    <nav class=\"mt-2\">
                        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->

                            <li class=\"nav-item\">
                                <a href=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_homepageback");
        echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Acceuil
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/widgets.html\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Reclamations
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_admingroupesback");
        echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-users\"></i>
                                    <p>
                                        Groupes
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/widgets.html\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Membres
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/widgets.html\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Chasseurs de têtes
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_adminEvenementback");
        echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon far fa-calendar-alt\"></i>
                                    <p>
                                        Evénements
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_adminEvenementback");
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Les demandes</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nozelites_adminEvenementAllback");
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>tous les evenements</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/widgets.html\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Offres
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

                ";
        // line 267
        $this->displayBlock('content', $context, $blocks);
        // line 270
        echo "
                ";
        // line 271
        $this->displayBlock('footer', $context, $blocks);
        // line 280
        echo "
            <!-- Control Sidebar -->
            <aside class=\"control-sidebar control-sidebar-dark\">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 267
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 268
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 271
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 272
        echo "                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
                        All rights reserved.
                        <div class=\"float-right d-none d-sm-inline-block\">
                            <b>Version</b> 3.0.3-pre
                        </div>
                    </footer>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 290
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 291
        echo "            <!-- jQuery -->
            <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                \$.widget.bridge('uibutton', \$.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <!-- ChartJS -->
            <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Sparkline -->
            <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
            <!-- JQVMap -->
            <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
            <!-- jQuery Knob Chart -->
            <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
            <!-- daterangepicker -->
            <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Summernote -->
            <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- overlayScrollbars -->
            <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE App -->
            <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE for demo purposes -->
            <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Nozelites/baseback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 324,  626 => 322,  621 => 320,  616 => 318,  611 => 316,  606 => 314,  601 => 312,  597 => 311,  592 => 309,  587 => 307,  583 => 306,  578 => 304,  573 => 302,  568 => 300,  559 => 294,  554 => 292,  551 => 291,  542 => 290,  525 => 272,  516 => 271,  505 => 268,  496 => 267,  480 => 280,  478 => 271,  475 => 270,  473 => 267,  448 => 245,  439 => 239,  428 => 231,  401 => 207,  382 => 191,  355 => 167,  349 => 163,  340 => 162,  208 => 38,  199 => 37,  187 => 287,  185 => 162,  182 => 161,  180 => 37,  176 => 35,  167 => 34,  153 => 27,  148 => 25,  143 => 23,  138 => 21,  133 => 19,  128 => 17,  123 => 15,  118 => 13,  113 => 11,  110 => 10,  101 => 9,  83 => 8,  71 => 326,  68 => 290,  66 => 34,  59 => 31,  57 => 9,  53 => 8,  44 => 1,);
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
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Nozelites Dashboard{% endblock %}</title>
        {% block stylesheets %}
            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
            <!-- Ionicons -->
            <link rel=\"stylesheet\" href=\"{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
            <!-- Tempusdominus Bbootstrap 4 -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
            <!-- iCheck -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
            <!-- JQVMap -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/jqvmap/jqvmap.min.css') }}\">
            <!-- Theme style -->
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">
            <!-- overlayScrollbars -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
            <!-- Daterange picker -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/daterangepicker/daterangepicker.css') }}\">
            <!-- summernote -->
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/summernote/summernote-bs4.css') }}\">
            <!-- Google Font: Source Sans Pro -->
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"hold-transition sidebar-mini layout-fixed\">
        {% block body %}
        <div class=\"wrapper\">

            {% block navbar %}
            <!-- Navbar -->
            <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
                <!-- Left navbar links -->
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"index3.html\" class=\"nav-link\">Home</a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block\">
                        <a href=\"#\" class=\"nav-link\">Contact</a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class=\"form-inline ml-3\">
                    <div class=\"input-group input-group-sm\">
                        <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-navbar\" type=\"submit\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class=\"navbar-nav ml-auto\">
                    <!-- Messages Dropdown Menu -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"far fa-comments\"></i>
                            <span class=\"badge badge-danger navbar-badge\">3</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <!-- Message Start -->
                                <div class=\"media\">
                                    <img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                                    <div class=\"media-body\">
                                        <h3 class=\"dropdown-item-title\">
                                            Brad Diesel
                                            <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                        </h3>
                                        <p class=\"text-sm\">Call me whenever you can...</p>
                                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <!-- Message Start -->
                                <div class=\"media\">
                                    <img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                                    <div class=\"media-body\">
                                        <h3 class=\"dropdown-item-title\">
                                            John Pierce
                                            <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                        </h3>
                                        <p class=\"text-sm\">I got your message bro</p>
                                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <!-- Message Start -->
                                <div class=\"media\">
                                    <img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                                    <div class=\"media-body\">
                                        <h3 class=\"dropdown-item-title\">
                                            Nora Silvester
                                            <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                        </h3>
                                        <p class=\"text-sm\">The subject goes here</p>
                                        <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"far fa-bell\"></i>
                            <span class=\"badge badge-warning navbar-badge\">15</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                            <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                                <span class=\"float-right text-muted text-sm\">3 mins</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                                <span class=\"float-right text-muted text-sm\">12 hours</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item\">
                                <i class=\"fas fa-file mr-2\"></i> 3 new reports
                                <span class=\"float-right text-muted text-sm\">2 days</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
                            <i class=\"fas fa-th-large\"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            {% endblock %}

            {% block sidebar %}
            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                <a href=\"index3.html\" class=\"brand-link\">
                    <img src=\"{{ asset('images/logoNozelites.jpg') }}\" alt=\"AdminLTE Logo\" class=\"brand-image elevation-3\"
                         style=\"opacity: .8\">
                    <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
                <div class=\"sidebar\">
                    <!-- Sidebar user panel (optional) ->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                            <img src=\"\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                        <div class=\"info\">
                            <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
                        </div>
                    </div>-->

                    <!-- Sidebar Menu -->
                    <nav class=\"mt-2\">
                        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->

                            <li class=\"nav-item\">
                                <a href=\"{{ path('nozelites_homepageback') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Acceuil
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/widgets.html\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Reclamations
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path(\"nozelites_admingroupesback\") }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-users\"></i>
                                    <p>
                                        Groupes
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/widgets.html\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Membres
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/widgets.html\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Chasseurs de têtes
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path(\"nozelites_adminEvenementback\") }}\" class=\"nav-link\">
                                    <i class=\"nav-icon far fa-calendar-alt\"></i>
                                    <p>
                                        Evénements
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path(\"nozelites_adminEvenementback\") }}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Les demandes</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path(\"nozelites_adminEvenementAllback\") }}\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>tous les evenements</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/widgets.html\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-th\"></i>
                                    <p>
                                        Offres
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

                {% block content %}

                {% endblock %}

                {% block footer %}
                    <footer class=\"main-footer\">
                        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
                        All rights reserved.
                        <div class=\"float-right d-none d-sm-inline-block\">
                            <b>Version</b> 3.0.3-pre
                        </div>
                    </footer>
                {% endblock %}

            <!-- Control Sidebar -->
            <aside class=\"control-sidebar control-sidebar-dark\">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
            {% endblock %}
        </div>
            <!-- ./wrapper -->
        {% endblock %}
        {% block javascripts %}
            <!-- jQuery -->
            <script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src=\"{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                \$.widget.bridge('uibutton', \$.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
            <!-- ChartJS -->
            <script src=\"{{ asset('plugins/chart.js/Chart.min.js') }}\"></script>
            <!-- Sparkline -->
            <script src=\"{{ asset('plugins/sparklines/sparkline.js') }}\"></script>
            <!-- JQVMap -->
            <script src=\"{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}\"></script>
            <!-- jQuery Knob Chart -->
            <script src=\"{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
            <!-- daterangepicker -->
            <script src=\"{{ asset('plugins/moment/moment.min.js') }}\"></script>
            <script src=\"{{ asset('plugins/daterangepicker/daterangepicker.js') }}\"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src=\"{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
            <!-- Summernote -->
            <script src=\"{{ asset('plugins/summernote/summernote-bs4.min.js') }}\"></script>
            <!-- overlayScrollbars -->
            <script src=\"{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
            <!-- AdminLTE App -->
            <script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src=\"{{ asset('dist/js/pages/dashboard.js') }}\"></script>
            <!-- AdminLTE for demo purposes -->
            <script src=\"{{ asset('dist/js/demo.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "@Nozelites/baseback.html.twig", "C:\\wamp64\\www\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\baseback.html.twig");
    }
}
