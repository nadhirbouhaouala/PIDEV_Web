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

/* @Publication/Front/Updatecomm.html.twig */
class __TwigTemplate_841e3c5d0ea7711974e42819524795a1339feede860e5ff586fcdd56b30ed7fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Updatecomm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Updatecomm.html.twig"));

        $this->parent = $this->loadTemplate("@Publication/Front/Publication.html.twig", "@Publication/Front/Updatecomm.html.twig", 1);
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


    <!-- Post Content -->
    <div class=\"container\">
        <div class=\"row\">

            <!-- Inner Content -->
            <div class=\"col-xl-8 col-lg-8\">







                <div class=\"row\">
                    <div class=\"col-xl-12\">

                        <h3 class=\"margin-top-35 margin-bottom-30\">Ajouter un commentaire</h3>
                        </a>


                        <!-- Form -->


                        <div class=\"row\">

                            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fc"] ?? $this->getContext($context, "fc")), 'form_start');
        echo "

                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["fc"] ?? $this->getContext($context, "fc")), 'widget');
        echo "
                            <input type=\"submit\" value=\"Modifier\" class=\"uploadButton-button ripple-effect\" />

                            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fc"] ?? $this->getContext($context, "fc")), 'form_end');
        echo "
                            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Afficher");
        echo "\"><input type=\"submit\" value=\"Retourner\" class=\"uploadButton-button ripple-effect\" />
                            </a>


                        </div>





                    </div>
                </div>
                <!-- Leava a Comment / End -->

            </div>




        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/Updatecomm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  101 => 36,  95 => 33,  90 => 31,  60 => 3,  51 => 2,  29 => 1,);
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



    <!-- Post Content -->
    <div class=\"container\">
        <div class=\"row\">

            <!-- Inner Content -->
            <div class=\"col-xl-8 col-lg-8\">







                <div class=\"row\">
                    <div class=\"col-xl-12\">

                        <h3 class=\"margin-top-35 margin-bottom-30\">Ajouter un commentaire</h3>
                        </a>


                        <!-- Form -->


                        <div class=\"row\">

                            {{ form_start(fc) }}

                            {{ form_widget(fc) }}
                            <input type=\"submit\" value=\"Modifier\" class=\"uploadButton-button ripple-effect\" />

                            {{ form_end(fc) }}
                            <a href=\"{{ path('Afficher')}}\"><input type=\"submit\" value=\"Retourner\" class=\"uploadButton-button ripple-effect\" />
                            </a>


                        </div>





                    </div>
                </div>
                <!-- Leava a Comment / End -->

            </div>




        </div>
    </div>
{% endblock %}", "@Publication/Front/Updatecomm.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\Updatecomm.html.twig");
    }
}
