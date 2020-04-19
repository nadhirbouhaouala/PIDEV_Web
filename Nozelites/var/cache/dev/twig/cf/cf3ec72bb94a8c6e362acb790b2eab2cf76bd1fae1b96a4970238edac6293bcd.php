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

/* @Publication/Front/Update.html.twig */
class __TwigTemplate_ee070f5811e02ed54d5660af3192e7c85a709c44b64bdb8cbcdf40e95b614447 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Update.html.twig"));

        $this->parent = $this->loadTemplate("@Publication/Front/Publication.html.twig", "@Publication/Front/Update.html.twig", 1);
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
    <div class=\"dashboard-content-inner\" style=\"min-height: 613px;\">

        <!-- Dashboard Headline -->
        <div class=\"dashboard-headline\">
            <h3>Publication</h3>

            <!-- Breadcrumbs -->
            <nav id=\"breadcrumbs\" class=\"dark\">
                <ul>
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Dashboard</a></li>
                    <li>Publication</li>
                </ul>
            </nav>
        </div>

        <!-- Row -->
        <div class=\"row\">

            <!-- Dashboard Box -->
            <div class=\"col-xl-12\">
                <div class=\"dashboard-box margin-top-0\">

                    <!-- Headline
                    <div class=\"headline\">
                        <h3><i class=\"icon-feather-folder-plus\"></i> Job Submission Form</h3>
                    </div>

                    <div class=\"content with-padding padding-bottom-10\">
                        <div class=\"row\">

                            <div class=\"col-xl-4\">
                                <div class=\"submit-field\">
                                    <h5>Job Title</h5>
                                    <input type=\"text\" class=\"with-border\">
                                </div>
                            </div>

                            <div class=\"col-xl-12\">
                                <div class=\"submit-field\">
                                    <h5>Job Description</h5>
                                    <textarea cols=\"30\" rows=\"5\" class=\"with-border\"></textarea>
                                    <div class=\"uploadButton margin-top-30\">
                                        <input class=\"uploadButton-input\" type=\"file\" accept=\"image/*, application/pdf\" id=\"upload\" multiple=\"\">
                                        <label class=\"uploadButton-button ripple-effect\" for=\"upload\">Upload Files</label>
                                        <span class=\"uploadButton-file-name\">Images or documents that might be helpful in describing your job</span>
                                    </div>
                                </div>
                            </div>-->
                    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start');
        echo "

                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["f"] ?? $this->getContext($context, "f")), 'widget');
        echo "
                    <input type=\"submit\" value=\"Edit\" class=\"uploadButton-button ripple-effect\" />
                    <div class=\"uploadButton margin-top-30\">



                        <label class=\"uploadButton-button ripple-effect\" for=\"upload\">Upload Files</label>
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["f"] ?? $this->getContext($context, "f")), 'widget');
        echo "
                        <input type=\"submit\" value=\"Create\" />
                    </div>
                    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>



    </div>


    <!-- Footer -->
    <div class=\"dashboard-footer-spacer\" style=\"padding-top: 125px;\"></div>
    <div class=\"small-footer margin-top-15\">
        <div class=\"small-footer-copyrights\">
            © 2018 <strong>Hireo</strong>. All Rights Reserved.
        </div>
        <ul class=\"footer-social-links\">
            <li>
                <a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Facebook\">
                    <i class=\"icon-brand-facebook-f\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Twitter\">
                    <i class=\"icon-brand-twitter\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Google Plus\">
                    <i class=\"icon-brand-google-plus-g\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"LinkedIn\">
                    <i class=\"icon-brand-linkedin-in\"></i>
                </a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <!-- Footer / End -->

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/Update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 65,  127 => 62,  117 => 55,  112 => 53,  60 => 3,  51 => 2,  29 => 1,);
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

    <div class=\"dashboard-content-inner\" style=\"min-height: 613px;\">

        <!-- Dashboard Headline -->
        <div class=\"dashboard-headline\">
            <h3>Publication</h3>

            <!-- Breadcrumbs -->
            <nav id=\"breadcrumbs\" class=\"dark\">
                <ul>
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Dashboard</a></li>
                    <li>Publication</li>
                </ul>
            </nav>
        </div>

        <!-- Row -->
        <div class=\"row\">

            <!-- Dashboard Box -->
            <div class=\"col-xl-12\">
                <div class=\"dashboard-box margin-top-0\">

                    <!-- Headline
                    <div class=\"headline\">
                        <h3><i class=\"icon-feather-folder-plus\"></i> Job Submission Form</h3>
                    </div>

                    <div class=\"content with-padding padding-bottom-10\">
                        <div class=\"row\">

                            <div class=\"col-xl-4\">
                                <div class=\"submit-field\">
                                    <h5>Job Title</h5>
                                    <input type=\"text\" class=\"with-border\">
                                </div>
                            </div>

                            <div class=\"col-xl-12\">
                                <div class=\"submit-field\">
                                    <h5>Job Description</h5>
                                    <textarea cols=\"30\" rows=\"5\" class=\"with-border\"></textarea>
                                    <div class=\"uploadButton margin-top-30\">
                                        <input class=\"uploadButton-input\" type=\"file\" accept=\"image/*, application/pdf\" id=\"upload\" multiple=\"\">
                                        <label class=\"uploadButton-button ripple-effect\" for=\"upload\">Upload Files</label>
                                        <span class=\"uploadButton-file-name\">Images or documents that might be helpful in describing your job</span>
                                    </div>
                                </div>
                            </div>-->
                    {{ form_start(f) }}

                    {{ form_widget(f) }}
                    <input type=\"submit\" value=\"Edit\" class=\"uploadButton-button ripple-effect\" />
                    <div class=\"uploadButton margin-top-30\">



                        <label class=\"uploadButton-button ripple-effect\" for=\"upload\">Upload Files</label>
                        {{ form_widget(f) }}
                        <input type=\"submit\" value=\"Create\" />
                    </div>
                    {{ form_end(f) }}
                </div>
            </div>
        </div>
    </div>



    </div>


    <!-- Footer -->
    <div class=\"dashboard-footer-spacer\" style=\"padding-top: 125px;\"></div>
    <div class=\"small-footer margin-top-15\">
        <div class=\"small-footer-copyrights\">
            © 2018 <strong>Hireo</strong>. All Rights Reserved.
        </div>
        <ul class=\"footer-social-links\">
            <li>
                <a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Facebook\">
                    <i class=\"icon-brand-facebook-f\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Twitter\">
                    <i class=\"icon-brand-twitter\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Google Plus\">
                    <i class=\"icon-brand-google-plus-g\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"LinkedIn\">
                    <i class=\"icon-brand-linkedin-in\"></i>
                </a>
            </li>
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <!-- Footer / End -->

    </div>
{% endblock %}", "@Publication/Front/Update.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\Update.html.twig");
    }
}
