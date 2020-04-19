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

/* @Publication/Front/Affichecomm.html.twig */
class __TwigTemplate_0c3022bc433a1fdb87e84a29568b8d83aaffb346f4ed5e6fb58c317227e52c4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Affichecomm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Affichecomm.html.twig"));

        $this->parent = $this->loadTemplate("@Publication/Front/Publication.html.twig", "@Publication/Front/Affichecomm.html.twig", 1);
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
        echo "    <!-- Comments -->
    <div class=\"row\">
        <div class=\"col-xl-12\">
            <section class=\"comments\">
                <h3 class=\"margin-top-45 margin-bottom-0\">Comments <span class=\"comments-amount\">(5)</span></h3>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Afficher");
        echo "\"><input type=\"submit\" value=\"Retourner\" class=\"uploadButton-button ripple-effect\" />
                </a>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cc"] ?? $this->getContext($context, "cc")));
        foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
            // line 11
            echo "                    <ul>
                        <li>
                            <div class=\"avatar\"><img src=\"images/user-avatar-placeholder.png\" alt=\"\"></div>
                            <div class=\"comment-content\"><div class=\"arrow-comment\"></div>
                                <div class=\"comment-by\">Kathy Brown <span class=\"date\"> </span>
                                    <p> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "commentaire", []), "html", null, true);
            echo " </p>
                                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Updatecomm", ["idCommentaire" => $this->getAttribute($context["cp"], "idCommentaire", [])]), "html", null, true);
            echo "\" class=\"button red ripple-effect ico\"  title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Deletecomm", ["idCommentaire" => $this->getAttribute($context["cp"], "idCommentaire", [])]), "html", null, true);
            echo "\" class=\"button red ripple-effect ico\"  title=\"supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>




                                </div>
                            </div>



                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </li>
                </ul>

                </li>


                </ul>

            </section>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/Affichecomm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  91 => 18,  87 => 17,  83 => 16,  76 => 11,  72 => 10,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
    <!-- Comments -->
    <div class=\"row\">
        <div class=\"col-xl-12\">
            <section class=\"comments\">
                <h3 class=\"margin-top-45 margin-bottom-0\">Comments <span class=\"comments-amount\">(5)</span></h3>
                <a href=\"{{ path('Afficher')}}\"><input type=\"submit\" value=\"Retourner\" class=\"uploadButton-button ripple-effect\" />
                </a>
                {% for cp in cc %}
                    <ul>
                        <li>
                            <div class=\"avatar\"><img src=\"images/user-avatar-placeholder.png\" alt=\"\"></div>
                            <div class=\"comment-content\"><div class=\"arrow-comment\"></div>
                                <div class=\"comment-by\">Kathy Brown <span class=\"date\"> </span>
                                    <p> {{ cp.commentaire }} </p>
                                    <a href=\"{{  path('Updatecomm',{'idCommentaire':cp.idCommentaire}) }}\" class=\"button red ripple-effect ico\"  title=\"Modifier\" data-tippy-placement=\"left\"><i class=\"icon-feather-edit-2\"></i></a>
                                    <a href=\"{{  path('Deletecomm',{'idCommentaire':cp.idCommentaire}) }}\" class=\"button red ripple-effect ico\"  title=\"supprimer\" data-tippy-placement=\"left\"><i class=\"icon-feather-trash-2\"></i></a>




                                </div>
                            </div>



                    </ul>
                {% endfor %}
                </li>
                </ul>

                </li>


                </ul>

            </section>
        </div>
    </div>
{% endblock %}", "@Publication/Front/Affichecomm.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\Affichecomm.html.twig");
    }
}
