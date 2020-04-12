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

/* @Offre/Default/oneMessage.html.twig */
class __TwigTemplate_303eae32eb7097d315af3a44c020f4104b35c46bed1598b57690064205288b9e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Default/oneMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Default/oneMessage.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Offre/Default/oneMessage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Message ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"../../plugins/fontawesome-free/css/all.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"../../dist/css/adminlte.min.css\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">
    <!-- Navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class=\"align-content-center\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1></h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_ajouter");
        echo "\" class=\"btn btn-primary btn-block mb-3\">Envoyer un message</a>

                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Messages</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <ul class=\"nav nav-pills flex-column\">
                                    <li class=\"nav-item active\">
                                        <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_liste");
        echo "\" class=\"nav-link\">
                                            <i class=\"fas fa-inbox\"></i> Messages reçus
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_liste_envoyes");
        echo "\" class=\"nav-link\">
                                            <i class=\"far fa-envelope\"></i> Messages envoyés
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-9\">
                        <div class=\"card card-primary card-outline\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Inbox</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body p-0\">
                                <div class=\"mailbox-read-info\">
                                    <h5>Objet :    ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "objet", []), "html", null, true);
        echo "</h5>
                                    <h6>De :              ";
        // line 87
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "idEmeteur", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "idEmeteur", []), "prenom", [])), "html", null, true);
        echo "
                                        <span class=\"mailbox-read-time float-right\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "date", []), "html", null, true);
        echo "</span>
                                        <br>
                                        À    :              ";
        // line 90
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "idDestinataire", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "idDestinataire", []), "prenom", [])), "html", null, true);
        echo "
                                    </h6>
                                </div>

                                <!-- /.mailbox-controls -->
                                <div class=\"mailbox-read-message\">
                                    <p>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "texte", []), "html", null, true);
        echo "</p>
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer bg-white\">
                                <ul class=\"mailbox-att
                                achments d-flex align-items-stretch clearfix\">

                                </ul>
                            </div>
                            <!-- /.card-footer -->
                            <div class=\"card-footer\">
                                <div class=\"float-right\">
                                    <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_repondre", ["id" => $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "idmessage", [])]), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fas fa-reply\"></i> Répondre</button></a>
                                    <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_transferer", ["id" => $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "idmessage", [])]), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fas fa-share\"></i> Transférer</button></a>
                                </div>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Offre/Default/oneMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 111,  210 => 110,  193 => 96,  184 => 90,  179 => 88,  175 => 87,  171 => 86,  149 => 67,  141 => 62,  124 => 48,  80 => 6,  71 => 5,  52 => 3,  30 => 1,);
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

{% block title %}{{ parent() }} - Message {% endblock %}

{% block content %}

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"../../plugins/fontawesome-free/css/all.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"../../dist/css/adminlte.min.css\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">
    <!-- Navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class=\"align-content-center\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1></h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <a href=\"{{ path('message_ajouter') }}\" class=\"btn btn-primary btn-block mb-3\">Envoyer un message</a>

                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Messages</h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <ul class=\"nav nav-pills flex-column\">
                                    <li class=\"nav-item active\">
                                        <a href=\"{{ path('message_liste') }}\" class=\"nav-link\">
                                            <i class=\"fas fa-inbox\"></i> Messages reçus
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('message_liste_envoyes') }}\" class=\"nav-link\">
                                            <i class=\"far fa-envelope\"></i> Messages envoyés
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-md-9\">
                        <div class=\"card card-primary card-outline\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Inbox</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body p-0\">
                                <div class=\"mailbox-read-info\">
                                    <h5>Objet :    {{message.objet}}</h5>
                                    <h6>De :              {{message.idEmeteur.nom~\" \"~message.idEmeteur.prenom}}
                                        <span class=\"mailbox-read-time float-right\">{{message.date}}</span>
                                        <br>
                                        À    :              {{message.idDestinataire.nom~\" \"~message.idDestinataire.prenom}}
                                    </h6>
                                </div>

                                <!-- /.mailbox-controls -->
                                <div class=\"mailbox-read-message\">
                                    <p>{{ message.texte }}</p>
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer bg-white\">
                                <ul class=\"mailbox-att
                                achments d-flex align-items-stretch clearfix\">

                                </ul>
                            </div>
                            <!-- /.card-footer -->
                            <div class=\"card-footer\">
                                <div class=\"float-right\">
                                    <a href=\"{{ path('message_repondre',{'id':message.idmessage}) }}\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fas fa-reply\"></i> Répondre</button></a>
                                    <a href=\"{{ path('message_transferer',{'id':message.idmessage}) }}\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fas fa-share\"></i> Transférer</button></a>
                                </div>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>
</body>

{% endblock %}
", "@Offre/Default/oneMessage.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\OffreBundle\\Resources\\views\\Default\\oneMessage.html.twig");
    }
}
