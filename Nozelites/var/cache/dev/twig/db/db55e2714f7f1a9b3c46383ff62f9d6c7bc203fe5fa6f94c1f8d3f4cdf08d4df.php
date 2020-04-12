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

/* @Offre/Default/listeMessages.html.twig */
class __TwigTemplate_a0f7d8a8a0278599fa2c3ed0659cf9d051f6d785e139eda5589819edbcea0cb8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Default/listeMessages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Default/listeMessages.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/basefrontmembre.html.twig", "@Offre/Default/listeMessages.html.twig", 1);
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
  <!-- icheck bootstrap -->
  <link rel=\"stylesheet\" href=\"../../plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
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
        // line 49
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
              <h3 class=\"card-title\">Inbox</h3>

              <div class=\"card-tools\">
                <div class=\"input-group input-group-sm\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Recherche..\" onKeyPress=\"chercher(this.value);\">
                  <script type=\"text/javascript\">
                    function chercher(search) {
                      if(search==\"\"){
                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["message"], "idDestinataire", []), "idUsr", []) == 2)) {
                echo " ";
                // line 92
                echo "                        document.getElementById('";
                echo twig_escape_filter($this->env, ("show_" . $this->getAttribute($context["message"], "idmessage", [])), "html", null, true);
                echo "').style.display=\"block\";
                        ";
            }
            // line 94
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                      }
                      else{
                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 98
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["message"], "idDestinataire", []), "idUsr", []) == 2)) {
                echo " ";
                // line 99
                echo "                        if('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", []), "html", null, true);
                echo "'.toUpperCase().includes(search.toUpperCase()) || '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "texte", []), "html", null, true);
                echo "'.toUpperCase().includes(search.toUpperCase()) || '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "idEmeteur", []), "nom", []), "html", null, true);
                echo "'.toUpperCase().includes(search.toUpperCase()) || '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "idEmeteur", []), "prenom", []), "html", null, true);
                echo "'.toUpperCase().includes(search.toUpperCase()) || '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "date", []), "html", null, true);
                echo "'.toUpperCase().includes(search.toUpperCase()))
                          document.getElementById('";
                // line 100
                echo twig_escape_filter($this->env, ("show_" . $this->getAttribute($context["message"], "idmessage", [])), "html", null, true);
                echo "').style.display=\"block\";
                        else
                          document.getElementById('";
                // line 102
                echo twig_escape_filter($this->env, ("show_" . $this->getAttribute($context["message"], "idmessage", [])), "html", null, true);
                echo "').style.display=\"none\";
                        ";
            }
            // line 104
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                      }
                    }
                  </script>
                  <div class=\"input-group-append\">
                    <div class=\"btn btn-primary\">
                      <i class=\"fas fa-search\"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class=\"card-body p-0\">
              <div class=\"mailbox-controls\">

              </div>
              <div class=\"float-right\">
                <div class=\"btn-group\">
                  ";
        // line 124
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["messages"] ?? $this->getContext($context, "messages")));
        echo "
                </div>
                <!-- /.btn-group -->
              </div>
              <div class=\"table-responsive mailbox-messages\">
                <table class=\"table table-hover table-striped\">
                  <tbody>
                  ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 132
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["message"], "idDestinataire", []), "idUsr", []) == 2)) {
                echo " ";
                // line 133
                echo "                    <tr id=\"";
                echo twig_escape_filter($this->env, ("show_" . $this->getAttribute($context["message"], "idmessage", [])), "html", null, true);
                echo "\">
                      <td class=\"mailbox-name\"><a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_showone", ["id" => $this->getAttribute($context["message"], "idmessage", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["message"], "idEmeteur", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["message"], "idEmeteur", []), "prenom", [])), "html", null, true);
                echo "</a></td>
                      <td class=\"mailbox-subject\"><b>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", []), "html", null, true);
                echo "</b>";
                echo twig_escape_filter($this->env, (" - " . twig_slice($this->env, $this->getAttribute($context["message"], "texte", []), 0, 45)), "html", null, true);
                if ((twig_length_filter($this->env, $this->getAttribute($context["message"], "texte", [])) > 45)) {
                    echo "...";
                }
                // line 136
                echo "                      </td>
                      <td class=\"mailbox-attachment\"></td>
                      <td class=\"mailbox-date\">";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "date", []), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            // line 141
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                  </tbody>
                </table>
                <!-- /.table -->
            </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- Page Script -->
<script>
  \$(function () {
    //Enable check and uncheck all functionality
    \$('.checkbox-toggle').click(function () {
      var clicks = \$(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        \$('.mailbox-messages input[type=\\'checkbox\\']').prop('checked', false)
        \$('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        \$('.mailbox-messages input[type=\\'checkbox\\']').prop('checked', true)
        \$('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      \$(this).data('clicks', !clicks)
    })

    //Handle starring for glyphicon and font awesome
    \$('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var \$this = \$(this).find('a > i')
      var glyph = \$this.hasClass('glyphicon')
      var fa    = \$this.hasClass('fa')

      //Switch states
      if (glyph) {
        \$this.toggleClass('glyphicon-star')
        \$this.toggleClass('glyphicon-star-empty')
      }

      if (fa) {
        \$this.toggleClass('fa-star')
        \$this.toggleClass('fa-star-o')
      }
    })
  })
</script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Offre/Default/listeMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 142,  303 => 141,  297 => 138,  293 => 136,  286 => 135,  280 => 134,  275 => 133,  271 => 132,  267 => 131,  257 => 124,  236 => 105,  230 => 104,  225 => 102,  220 => 100,  207 => 99,  203 => 98,  199 => 97,  195 => 95,  189 => 94,  183 => 92,  179 => 91,  175 => 90,  150 => 68,  142 => 63,  125 => 49,  80 => 6,  71 => 5,  52 => 3,  30 => 1,);
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
  <!-- icheck bootstrap -->
  <link rel=\"stylesheet\" href=\"../../plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
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

              <div class=\"card-tools\">
                <div class=\"input-group input-group-sm\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Recherche..\" onKeyPress=\"chercher(this.value);\">
                  <script type=\"text/javascript\">
                    function chercher(search) {
                      if(search==\"\"){
                        {% for message in messages %}
                        {% if message.idDestinataire.idUsr == 2 %} {#Id du membre connecté#}
                        document.getElementById('{{ 'show_'~message.idmessage }}').style.display=\"block\";
                        {% endif %}
                        {% endfor %}
                      }
                      else{
                        {% for message in messages %}
                        {% if message.idDestinataire.idUsr == 2 %} {#Id du membre connecté#}
                        if('{{ message.objet }}'.toUpperCase().includes(search.toUpperCase()) || '{{ message.texte }}'.toUpperCase().includes(search.toUpperCase()) || '{{ message.idEmeteur.nom }}'.toUpperCase().includes(search.toUpperCase()) || '{{ message.idEmeteur.prenom }}'.toUpperCase().includes(search.toUpperCase()) || '{{ message.date }}'.toUpperCase().includes(search.toUpperCase()))
                          document.getElementById('{{ 'show_'~message.idmessage }}').style.display=\"block\";
                        else
                          document.getElementById('{{ 'show_'~message.idmessage }}').style.display=\"none\";
                        {% endif %}
                        {% endfor %}
                      }
                    }
                  </script>
                  <div class=\"input-group-append\">
                    <div class=\"btn btn-primary\">
                      <i class=\"fas fa-search\"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class=\"card-body p-0\">
              <div class=\"mailbox-controls\">

              </div>
              <div class=\"float-right\">
                <div class=\"btn-group\">
                  {{ knp_pagination_render(messages) }}
                </div>
                <!-- /.btn-group -->
              </div>
              <div class=\"table-responsive mailbox-messages\">
                <table class=\"table table-hover table-striped\">
                  <tbody>
                  {% for message in messages %}
                    {% if message.idDestinataire.idUsr == 2 %} {#Id du membre connecté#}
                    <tr id=\"{{ 'show_'~message.idmessage }}\">
                      <td class=\"mailbox-name\"><a href=\"{{ path('message_showone',{'id':message.idmessage}) }}\">{{ message.idEmeteur.nom~\" \"~message.idEmeteur.prenom }}</a></td>
                      <td class=\"mailbox-subject\"><b>{{ message.objet }}</b>{{ \" - \"~message.texte|slice(0, 45) }}{% if message.texte|length > 45 %}...{% endif %}
                      </td>
                      <td class=\"mailbox-attachment\"></td>
                      <td class=\"mailbox-date\">{{ message.date }}</td>
                    </tr>
                    {% endif %}
                  {% endfor %}
                  </tbody>
                </table>
                <!-- /.table -->
            </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"../../plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- Page Script -->
<script>
  \$(function () {
    //Enable check and uncheck all functionality
    \$('.checkbox-toggle').click(function () {
      var clicks = \$(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        \$('.mailbox-messages input[type=\\'checkbox\\']').prop('checked', false)
        \$('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        \$('.mailbox-messages input[type=\\'checkbox\\']').prop('checked', true)
        \$('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      \$(this).data('clicks', !clicks)
    })

    //Handle starring for glyphicon and font awesome
    \$('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var \$this = \$(this).find('a > i')
      var glyph = \$this.hasClass('glyphicon')
      var fa    = \$this.hasClass('fa')

      //Switch states
      if (glyph) {
        \$this.toggleClass('glyphicon-star')
        \$this.toggleClass('glyphicon-star-empty')
      }

      if (fa) {
        \$this.toggleClass('fa-star')
        \$this.toggleClass('fa-star-o')
      }
    })
  })
</script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>
</body>

{% endblock %}



", "@Offre/Default/listeMessages.html.twig", "C:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\OffreBundle\\Resources\\views\\Default\\listeMessages.html.twig");
    }
}
