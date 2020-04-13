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

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_d35ae00c3020359b61298635591069032c5e0eeedc31f59710ee543116e5b945 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<div id=\"titlebar\" class=\"gradient\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <h2>S'enregister</h2>

                <!-- Breadcrumbs -->


            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-5 offset-xl-3\">

";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "

            <div class=\"account-type\">

                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", []), 'row');
        echo "
            </div>
        <div class=\"input-with-icon-left\">
            <i class=\"icon-material-outline-account-circle\"></i>

            <input type=\"text\" class=\"input-text with-border\" name=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"Nom\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), "vars", []), "value", []), "html", null, true);
        echo "\"/>
        </div>
            ";
        // line 33
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), "setRendered", []);
        // line 34
        echo "            <!--prenom-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-account-circle\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"Prenom\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), "vars", []), "value", []), "html", null, true);
        echo "\"/>
            </div>
            ";
        // line 40
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), "setRendered", []);
        // line 41
        echo "
            <!--UserName-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-account-circle\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"Nom d'utilisateur\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), "vars", []), "value", []), "html", null, true);
        echo "\"/>
            </div>
            ";
        // line 48
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), "setRendered", []);
        // line 49
        echo "
            <!--Telephone-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-line-awesome-phone\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"Telephone\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), "vars", []), "value", []), "html", null, true);
        echo "\"/>
            </div>
            ";
        // line 56
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", []), "setRendered", []);
        // line 57
        echo "
            <!--Age-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-cake\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "age", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "age", []), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"Age\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "age", []), "vars", []), "value", []), "html", null, true);
        echo "\"/>
            </div>
            ";
        // line 64
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "age", []), "setRendered", []);
        // line 65
        echo "            <!--Email-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-baseline-mail-outline\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"Email\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), "vars", []), "value", []), "html", null, true);
        echo "\"/>
            </div>
            ";
        // line 71
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), "setRendered", []);
        // line 72
        echo "            <!--mdp 1 -->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-lock\"></i>

                <input type=\"password\" class=\"input-text with-border\" name=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"Mot de passe\" />
            </div>
            ";
        // line 78
        $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), "setRendered", []);
        // line 79
        echo "            <!--mdp2-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-lock\"></i>

                <input type=\"password\" class=\"input-text with-border\" name=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"Répeter le mot de passe\" />
            </div>
            ";
        // line 85
        $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), "setRendered", []);
        // line 86
        echo "

        <input class=\"button full-width button-sliding-icon ripple-effect margin-top-10\" type=\"submit\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />

";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</div>
<div class=\"margin-top-70\"></div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 90,  206 => 88,  202 => 86,  200 => 85,  193 => 83,  187 => 79,  185 => 78,  178 => 76,  172 => 72,  170 => 71,  161 => 69,  155 => 65,  153 => 64,  144 => 62,  137 => 57,  135 => 56,  126 => 54,  119 => 49,  117 => 48,  108 => 46,  101 => 41,  99 => 40,  90 => 38,  84 => 34,  82 => 33,  73 => 31,  65 => 26,  58 => 22,  36 => 2,);
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

<div id=\"titlebar\" class=\"gradient\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <h2>S'enregister</h2>

                <!-- Breadcrumbs -->


            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-5 offset-xl-3\">

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

            <div class=\"account-type\">

                {{form_row(form.roles)}}
            </div>
        <div class=\"input-with-icon-left\">
            <i class=\"icon-material-outline-account-circle\"></i>

            <input type=\"text\" class=\"input-text with-border\" name=\"{{form.nom.vars.full_name}}\" id=\"{{ form.nom.vars.id }}\" placeholder=\"Nom\" value=\"{{ form.nom.vars.value }}\"/>
        </div>
            {% do form.nom.setRendered %}
            <!--prenom-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-account-circle\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"{{form.prenom.vars.full_name}}\" id=\"{{ form.prenom.vars.id }}\" placeholder=\"Prenom\" value=\"{{ form.prenom.vars.value }}\"/>
            </div>
            {% do form.prenom.setRendered %}

            <!--UserName-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-account-circle\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"{{form.username.vars.full_name}}\" id=\"{{ form.username.vars.id }}\" placeholder=\"Nom d'utilisateur\" value=\"{{ form.username.vars.value }}\"/>
            </div>
            {% do form.username.setRendered %}

            <!--Telephone-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-line-awesome-phone\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"{{form.telephone.vars.full_name}}\" id=\"{{ form.telephone.vars.id }}\" placeholder=\"Telephone\" value=\"{{ form.telephone.vars.value }}\"/>
            </div>
            {% do form.telephone.setRendered %}

            <!--Age-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-cake\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"{{form.age.vars.full_name}}\" id=\"{{ form.age.vars.id }}\" placeholder=\"Age\" value=\"{{ form.age.vars.value }}\"/>
            </div>
            {% do form.age.setRendered %}
            <!--Email-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-baseline-mail-outline\"></i>

                <input type=\"text\" class=\"input-text with-border\" name=\"{{form.email.vars.full_name}}\" id=\"{{ form.email.vars.id }}\" placeholder=\"Email\" value=\"{{ form.email.vars.value }}\"/>
            </div>
            {% do form.email.setRendered %}
            <!--mdp 1 -->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-lock\"></i>

                <input type=\"password\" class=\"input-text with-border\" name=\"{{form.plainPassword.first.vars.full_name}}\" id=\"{{ form.plainPassword.first.vars.id }}\" placeholder=\"Mot de passe\" />
            </div>
            {% do form.plainPassword.first.setRendered %}
            <!--mdp2-->
            <div class=\"input-with-icon-left\">
                <i class=\"icon-material-outline-lock\"></i>

                <input type=\"password\" class=\"input-text with-border\" name=\"{{form.plainPassword.second.vars.full_name}}\" id=\"{{ form.plainPassword.second.vars.id }}\" placeholder=\"Répeter le mot de passe\" />
            </div>
            {% do form.plainPassword.second.setRendered %}


        <input class=\"button full-width button-sliding-icon ripple-effect margin-top-10\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />

{{ form_end(form) }}
        </div>
    </div>
</div>
<div class=\"margin-top-70\"></div>", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\3.2\\PIDEV\\PIDEV_Web\\Nozelites\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
