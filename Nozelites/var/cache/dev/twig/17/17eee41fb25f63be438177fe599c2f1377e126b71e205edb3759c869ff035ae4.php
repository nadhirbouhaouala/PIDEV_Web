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

/* @Offre/Default/ajouterMessage.html.twig */
class __TwigTemplate_4fdee897d906f3506b86c7281bb5bb38d18db8ebda5c66d3a22255e01f38aef4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Default/ajouterMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Default/ajouterMessage.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Offre/Default/ajouterMessage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $this->displayParentBlock("titre", $context, $blocks);
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
        <!-- summernote -->
        <link rel=\"stylesheet\" href=\"../../plugins/summernote/summernote-bs4.css\">
        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
    </head>
    <body class=\"hold-transition sidebar-mini\">
    <div class=\"wrapper\">

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
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_liste");
        echo "\" class=\"btn btn-primary btn-block mb-3\">Inbox</a>

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
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_liste");
        echo "\" class=\"nav-link\">
                                                <i class=\"fas fa-inbox\"></i> Messages reçus
                                            </a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a href=\"";
        // line 68
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
                                    <h3 class=\"card-title\">Envoyer un message</h3>
                                </div>
                                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idDestinataire", []), 'label');
        echo "
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idDestinataire", []), 'widget');
        echo "
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "objet", []), 'label');
        echo "
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "objet", []), 'widget');
        echo "
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "texte", []), 'label');
        echo "
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "texte", []), 'widget');
        echo "
                                <div class=\"card-footer\">
                                    <div class=\"float-right\">
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Envoyer", []), 'label');
        echo "
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Envoyer", []), 'widget');
        echo "
                                        ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

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
    <script src=\"..
    mmernote -->
    <script src=\"../../plugins/summernote/summernote-bs4.min.js\"></script>
    <!-- Page Script -->
    <script>
        \$(function () {
            //Add text editor
            \$('#compose-textarea').summernote()
        })
    </script>
    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Offre/Default/ajouterMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 95,  203 => 94,  199 => 93,  193 => 90,  189 => 89,  185 => 88,  181 => 87,  177 => 86,  173 => 85,  169 => 84,  150 => 68,  142 => 63,  125 => 49,  80 => 6,  71 => 5,  52 => 3,  30 => 1,);
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

{% block titre %}{{ parent() }} - Message {% endblock %}

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
        <!-- summernote -->
        <link rel=\"stylesheet\" href=\"../../plugins/summernote/summernote-bs4.css\">
        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
    </head>
    <body class=\"hold-transition sidebar-mini\">
    <div class=\"wrapper\">

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
                            <a href=\"{{ path('message_liste') }}\" class=\"btn btn-primary btn-block mb-3\">Inbox</a>

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
                                    <h3 class=\"card-title\">Envoyer un message</h3>
                                </div>
                                {{ form_start(form) }}
                                {{ form_label(form.idDestinataire) }}
                                {{ form_widget(form.idDestinataire) }}
                                {{ form_label(form.objet) }}
                                {{ form_widget(form.objet) }}
                                {{ form_label(form.texte) }}
                                {{ form_widget(form.texte) }}
                                <div class=\"card-footer\">
                                    <div class=\"float-right\">
                                        {{ form_label(form.Envoyer) }}
                                        {{ form_widget(form.Envoyer) }}
                                        {{ form_end(form) }}
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

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
    <script src=\"..
    mmernote -->
    <script src=\"../../plugins/summernote/summernote-bs4.min.js\"></script>
    <!-- Page Script -->
    <script>
        \$(function () {
            //Add text editor
            \$('#compose-textarea').summernote()
        })
    </script>
    </body>

{% endblock %}
", "@Offre/Default/ajouterMessage.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\OffreBundle\\Resources\\views\\Default\\ajouterMessage.html.twig");
    }
}
