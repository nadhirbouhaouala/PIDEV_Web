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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_1267e761ca6908fb14f61ef068a349957a6c3aae007f76c5a5b53e940cb07361 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div id=\"titlebar\" class=\"gradient\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <h2>Log In</h2>

                <!-- Breadcrumbs -->


            </div>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-5 offset-xl-3\">
            <div class=\"login-register-page\">
                <div class=\"welcome-text\">
                    <h3>Content de vous revoir!</h3>
                    <span>Vous n'avez pas de compte? <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Creer un compte!</a></span>
                </div>

                <form action=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >
                    ";
        // line 30
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 31
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 33
        echo "                    <div class=\"input-with-icon-left\">
                        <i class=\"icon-material-outline-account-circle\"></i>

                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\"class=\"input-text with-border\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "\"/>
                    </div>
                        <div class=\"input-with-icon-left\">

                         <i class=\"icon-material-outline-lock\"></i>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\" class=\"input-text with-border\"/>
                        </div>


                    <input class=\"button full-width button-sliding-icon ripple-effect margin-top-10\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
            </div>
        </div>
    </div>
    <div class=\"margin-top-70\"></div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 45,  102 => 41,  92 => 36,  87 => 33,  81 => 31,  79 => 30,  75 => 29,  69 => 26,  47 => 6,  41 => 4,  39 => 3,  36 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div id=\"titlebar\" class=\"gradient\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <h2>Log In</h2>

                <!-- Breadcrumbs -->


            </div>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-5 offset-xl-3\">
            <div class=\"login-register-page\">
                <div class=\"welcome-text\">
                    <h3>Content de vous revoir!</h3>
                    <span>Vous n'avez pas de compte? <a href=\"{{ path('fos_user_registration_register') }}\">Creer un compte!</a></span>
                </div>

                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" >
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
                    <div class=\"input-with-icon-left\">
                        <i class=\"icon-material-outline-account-circle\"></i>

                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\"class=\"input-text with-border\" placeholder=\"{{ 'security.login.username'|trans }}\"/>
                    </div>
                        <div class=\"input-with-icon-left\">

                         <i class=\"icon-material-outline-lock\"></i>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" placeholder=\"{{ 'security.login.password'|trans }}\" class=\"input-text with-border\"/>
                        </div>


                    <input class=\"button full-width button-sliding-icon ripple-effect margin-top-10\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                </form>
            </div>
        </div>
    </div>
    <div class=\"margin-top-70\"></div>
</div>

", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\3.2\\PIDEV\\PIDEV_Web\\Nozelites\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
