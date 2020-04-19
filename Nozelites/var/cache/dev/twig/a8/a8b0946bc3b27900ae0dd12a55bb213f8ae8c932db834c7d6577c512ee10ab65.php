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

/* evenement/show.html.twig */
class __TwigTemplate_7415e37debeec9fcc872624c454c4576ff87b209e8dd363e48a913451c400ed2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Evenement</h1>

    <table>
        <tbody>
            <tr>
                <th>Ide</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "ide", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nom", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "lieu", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "date", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "date", []), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "heure", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "heure", []), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "description", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "siteweb", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbparticipant</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nbparticipant", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbplace</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "nbplace", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "image", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "etat", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_edit", ["ide" => $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "ide", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 65,  164 => 63,  158 => 60,  152 => 57,  142 => 50,  135 => 46,  128 => 42,  121 => 38,  114 => 34,  107 => 30,  98 => 26,  89 => 22,  82 => 18,  75 => 14,  68 => 10,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Evenement</h1>

    <table>
        <tbody>
            <tr>
                <th>Ide</th>
                <td>{{ evenement.ide }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ evenement.nom }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ evenement.lieu }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if evenement.date %}{{ evenement.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>{% if evenement.heure %}{{ evenement.heure|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ evenement.description }}</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>{{ evenement.siteweb }}</td>
            </tr>
            <tr>
                <th>Nbparticipant</th>
                <td>{{ evenement.nbparticipant }}</td>
            </tr>
            <tr>
                <th>Nbplace</th>
                <td>{{ evenement.nbplace }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ evenement.image }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ evenement.etat }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('evenement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('evenement_edit', { 'ide': evenement.ide }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "evenement/show.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\app\\Resources\\views\\evenement\\show.html.twig");
    }
}
