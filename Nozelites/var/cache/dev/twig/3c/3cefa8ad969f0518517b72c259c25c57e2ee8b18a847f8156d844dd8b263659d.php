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

/* @Publication/Front/Affichepub.html.twig */
class __TwigTemplate_7bac78e57ad756b09b2c6cf57e688081928c586a58bdd5290138c6ed591aec32 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Publication/Front/Publication.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Affichepub.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Affichepub.html.twig"));

        $this->parent = $this->loadTemplate("@Publication/Front/Publication.html.twig", "@Publication/Front/Affichepub.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <!-- Section -->


    <div class=\"section gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-8\">

                    <!-- Section Headline -->
                    <div class=\"section-headline margin-top-60 margin-bottom-35\">
                        <h4>Publication recente</h4>


                    </div>

                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["c"] ?? $this->getContext($context, "c")));
        foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
            // line 20
            echo "                    <!-- Blog Post -->
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Commentaire", ["id" => $this->getAttribute($context["cc"], "id", [])]), "html", null, true);
            echo "\" class=\"blog-post\">
                        <!-- Blog Post Thumbnail -->
                        <div class=\"blog-post-thumbnail\">
                            <div  class=\"blog-post-thumbnail-inner\">



                                <img id=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "image", []), "html", null, true);
            echo "\">

                                <script>
                                    var imageurl = \"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "image", []), "html", null, true);
            echo "\";
                                    var index = -1;

                                    for(var i = 0 ; i< imageurl.length ; i++)
                                    {if(imageurl[i]==\"/\"){index = i;}}
                                    if(index != -1)imageurl=\"/front/images\"+imageurl.substr(index,imageurl.length);
                                    else imageurl = \"/front/images\"+imageurl;

                                    document.getElementById(\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "image", []), "html", null, true);
            echo "\").src = imageurl;
                                </script>


                            </div>
                        </div>
                        <!-- Blog Post Content -->
                        <div class=\"blog-post-content\">
                            <!--  <span class=\"blog-post-date\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "titre", []), "html", null, true);
            echo "</span>  -->
                            <h3>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "titre", []), "html", null, true);
            echo "</h3>
                            <p>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["cc"], "description", []), "html", null, true);
            echo "</p>


                        </div>





                        <!-- Icon -->
                        <div class=\"entry-icon\"></div>


                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Delete", ["id" => $this->getAttribute($context["cc"], "id", [])]), "html", null, true);
            echo "\" class=\"button red ripple-effect ico\"  title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>

                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Update", ["id" => $this->getAttribute($context["cc"], "id", [])]), "html", null, true);
            echo "\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>

                        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jaime", ["id" => $this->getAttribute($context["cc"], "id", [])]), "html", null, true);
            echo "\" class=\"button white ripple-effect ico\" title=\"J aime\" data-tippy-placement=\"left\"><i class=\"icon-feather-heart\"></i></a>

                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Imprimer", ["id" => $this->getAttribute($context["cc"], "id", [])]), "html", null, true);
            echo "\" class=\"button white ripple-effect ico\" title=\"Imprimer   \" data-tippy-placement=\"left\"><i class=\"icon-material-outline-print\"></i></a>

                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "



                    <!-- Pagination -->
                    <div class=\"clearfix\"></div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Pagination -->

                        </div>
                    </div>
                    <!-- Pagination / End -->

                </div>


                <div class=\"col-xl-4 col-lg-4 content-left-offset\">
                    <div class=\"sidebar-container margin-top-65\">

                        <!-- Location -->








                    </div>
                </div>

            </div>
        </div>

        <!-- Spacer -->
        <div class=\"padding-top-40\"></div>
        <!-- Spacer -->

    </div>
    <!-- Section / End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/Affichepub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 72,  162 => 68,  157 => 66,  152 => 64,  147 => 62,  131 => 49,  127 => 48,  123 => 47,  112 => 39,  101 => 31,  95 => 28,  85 => 21,  82 => 20,  78 => 19,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Publication/Front/Publication.html.twig' %}
{% block content %}

    <!-- Section -->


    <div class=\"section gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-8\">

                    <!-- Section Headline -->
                    <div class=\"section-headline margin-top-60 margin-bottom-35\">
                        <h4>Publication recente</h4>


                    </div>

                    {% for cc in c %}
                    <!-- Blog Post -->
                    <a href=\"{{ path('Commentaire',{'id':cc.id})}}\" class=\"blog-post\">
                        <!-- Blog Post Thumbnail -->
                        <div class=\"blog-post-thumbnail\">
                            <div  class=\"blog-post-thumbnail-inner\">



                                <img id=\"{{ cc.image }}\">

                                <script>
                                    var imageurl = \"{{ cc.image }}\";
                                    var index = -1;

                                    for(var i = 0 ; i< imageurl.length ; i++)
                                    {if(imageurl[i]==\"/\"){index = i;}}
                                    if(index != -1)imageurl=\"/front/images\"+imageurl.substr(index,imageurl.length);
                                    else imageurl = \"/front/images\"+imageurl;

                                    document.getElementById(\"{{ cc.image }}\").src = imageurl;
                                </script>


                            </div>
                        </div>
                        <!-- Blog Post Content -->
                        <div class=\"blog-post-content\">
                            <!--  <span class=\"blog-post-date\">{{ cc.titre }}</span>  -->
                            <h3>{{ cc.titre }}</h3>
                            <p>{{ cc.description }}</p>


                        </div>





                        <!-- Icon -->
                        <div class=\"entry-icon\"></div>


                            <a href=\"{{  path('Delete',{'id':cc.id}) }}\" class=\"button red ripple-effect ico\"  title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>

                            <a href=\"{{  path('Update',{'id':cc.id}) }}\" class=\"button red ripple-effect ico\" title=\"Supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>

                        <a href=\"{{  path('jaime',{'id':cc.id}) }}\" class=\"button white ripple-effect ico\" title=\"J aime\" data-tippy-placement=\"left\"><i class=\"icon-feather-heart\"></i></a>

                        <a href=\"{{  path('Imprimer',{'id':cc.id}) }}\" class=\"button white ripple-effect ico\" title=\"Imprimer   \" data-tippy-placement=\"left\"><i class=\"icon-material-outline-print\"></i></a>

                    </a>
                    {% endfor %}




                    <!-- Pagination -->
                    <div class=\"clearfix\"></div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Pagination -->

                        </div>
                    </div>
                    <!-- Pagination / End -->

                </div>


                <div class=\"col-xl-4 col-lg-4 content-left-offset\">
                    <div class=\"sidebar-container margin-top-65\">

                        <!-- Location -->








                    </div>
                </div>

            </div>
        </div>

        <!-- Spacer -->
        <div class=\"padding-top-40\"></div>
        <!-- Spacer -->

    </div>
    <!-- Section / End -->
{% endblock %}", "@Publication/Front/Affichepub.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\Affichepub.html.twig");
    }
}
