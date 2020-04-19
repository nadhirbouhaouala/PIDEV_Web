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

/* @Publication/Front/map.html.twig */
class __TwigTemplate_77f96593e556fbff8d654cb9227522b2be46f91ef56a03a189e3276d039d8859 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/map.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/map.html.twig"));

        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\">


<head>

    <title>Tutoriel Google Maps</title>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />

    <!-- Elément Google Maps indiquant que la carte doit être affiché en plein écran et

    qu'elle ne peut pas être redimensionnée par l'utilisateur -->

    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\" />

    <!-- Inclusion de l'API Google MAPS -->

    <!-- Le paramètre \"sensor\" indique si cette application utilise détecteur pour déterminer la position de l'utilisateur -->

    <script src=\"http://maps.google.com/maps/api/js?key=value_of_my_key&language=fr\" type=\"text/javascript\"></script>


    <script type=\"text/javascript\">

        function initialiser() {

            var latlng = new google.maps.LatLng(46.779231, 6.659431);

            //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant

            //de définir des options d'affichage de notre carte

            var options = {

                center: latlng,

                zoom: 19,

                mapTypeId: google.maps.MapTypeId.ROADMAP

            };



            //constructeur de la carte qui prend en paramêtre le conteneur HTML

            //dans lequel la carte doit s'afficher et les options

            var carte = new google.maps.Map(document.getElementById(\"carte\"), options);

        }

    </script>

</head>


<body onload=\"initialiser()\">

<div id=\"carte\" style=\"width:100%; height:100%\"></div>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\">


<head>

    <title>Tutoriel Google Maps</title>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />

    <!-- Elément Google Maps indiquant que la carte doit être affiché en plein écran et

    qu'elle ne peut pas être redimensionnée par l'utilisateur -->

    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\" />

    <!-- Inclusion de l'API Google MAPS -->

    <!-- Le paramètre \"sensor\" indique si cette application utilise détecteur pour déterminer la position de l'utilisateur -->

    <script src=\"http://maps.google.com/maps/api/js?key=value_of_my_key&language=fr\" type=\"text/javascript\"></script>


    <script type=\"text/javascript\">

        function initialiser() {

            var latlng = new google.maps.LatLng(46.779231, 6.659431);

            //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant

            //de définir des options d'affichage de notre carte

            var options = {

                center: latlng,

                zoom: 19,

                mapTypeId: google.maps.MapTypeId.ROADMAP

            };



            //constructeur de la carte qui prend en paramêtre le conteneur HTML

            //dans lequel la carte doit s'afficher et les options

            var carte = new google.maps.Map(document.getElementById(\"carte\"), options);

        }

    </script>

</head>


<body onload=\"initialiser()\">

<div id=\"carte\" style=\"width:100%; height:100%\"></div>

</body>

</html>", "@Publication/Front/map.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\map.html.twig");
    }
}
