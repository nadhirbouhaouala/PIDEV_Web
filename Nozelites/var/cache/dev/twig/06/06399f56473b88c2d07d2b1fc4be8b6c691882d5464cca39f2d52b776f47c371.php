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

/* @Reclamation/Front/UpdateReclamation.html.twig */
class __TwigTemplate_b273602ae427c6a1035198c4d6b894ded9a2cf2e3d04ec8141c62581a653d009 extends \Twig\Template
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
        // line 5
        return "@Reclamation/Front/contact.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Front/UpdateReclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Front/UpdateReclamation.html.twig"));

        $this->parent = $this->loadTemplate("@Reclamation/Front/contact.html.twig", "@Reclamation/Front/UpdateReclamation.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div id=\"titlebar\" class=\"gradient\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    <h2>Contact</h2>

                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\" class=\"dark\">
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Pages</a></li>
                            <li>Contact</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xl-12\">
                <div class=\"contact-location-info margin-bottom-50\">
                    <div class=\"contact-address\">
                        <ul>
                            <li class=\"contact-address-headline\">Notre Emplacement</li>
                            <li>Cité el Ghazela</li>
                            <li>Phone 71717171</li>
                            <li><a href=\"#\">nozelites@gmail.com</a></li>
                            <li>
                                <div class=\"freelancer-socials\">
                                    <ul>
                                        <li><a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Dribbble\"><i class=\"icon-brand-dribbble\"></i></a></li>
                                        <li><a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Twitter\"><i class=\"icon-brand-twitter\"></i></a></li>
                                        <li><a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Behance\"><i class=\"icon-brand-behance\"></i></a></li>
                                        <li><a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"GitHub\"><i class=\"icon-brand-github\"></i></a></li>

                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div id=\"single-job-map-container\">
                        <div id=\"singleListingMap\" data-latitude=\"37.777842\" data-longitude=\"-122.391805\" data-map-icon=\"im im-icon-Hamburger\" style=\"position: relative; overflow: hidden;\"><div style=\"height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);\"><div class=\"gm-style\" style=\"position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;\"><div tabindex=\"0\" style=\"position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;\"><div style=\"z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);\"><div style=\"position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;\"><div style=\"position: absolute; left: 0px; top: 0px; z-index: 0;\"><div style=\"position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -160, -46);\"><div style=\"position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div></div></div></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 0;\"><div style=\"position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -160, -46);\"><div style=\"position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5242!3i12664!4i256!2m3!1e0!2sm!3i503220268!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=58887\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5243!3i12664!4i256!2m3!1e0!2sm!3i503220268!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=55954\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5243!3i12665!4i256!2m3!1e0!2sm!3i503220244!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=110727\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5242!3i12665!4i256!2m3!1e0!2sm!3i503220244!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=113660\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5244!3i12664!4i256!2m3!1e0!2sm!3i503219980!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=40982\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5244!3i12665!4i256!2m3!1e0!2sm!3i503220232!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=51798\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div></div></div></div><div class=\"gm-style-pbc\" style=\"z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;\"><p class=\"gm-style-pbt\"></p></div><div style=\"z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;\"><div style=\"z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);\"><div style=\"position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;\"><div class=\"map-marker-container\" data-marker_id=\"1\" style=\"left: 0.23734px; top: -0.109956px;\"><div class=\"marker-container\"><div class=\"marker-card\"></div></div></div></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;\"></div></div></div></div><iframe aria-hidden=\"true\" frameborder=\"0\" tabindex=\"-1\" style=\"z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;\"></iframe><div style=\"margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;\"><a target=\"_blank\" rel=\"noopener\" href=\"https://maps.google.com/maps?ll=37.777842,-122.391805&amp;z=15&amp;t=m&amp;hl=fr-FR&amp;gl=US&amp;mapclient=apiv3\" title=\"Ouvrir cette zone dans Google&nbsp;Maps (dans une nouvelle fenêtre)\" style=\"position: static; overflow: visible; float: none; display: inline;\"><div style=\"width: 66px; height: 26px; cursor: pointer;\"><img alt=\"\" src=\"https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png\" draggable=\"false\" style=\"position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;\"></div></a></div><div style=\"background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 105px; top: 80px;\"><div style=\"padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;\">Données cartographiques</div><div style=\"font-size: 13px;\">Données cartographiques ©2020 Google</div><button draggable=\"false\" title=\"Fermer\" aria-label=\"Fermer\" type=\"button\" class=\"gm-ui-hover-effect\" style=\"background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;\"></button></div><div class=\"gmnoprint\" style=\"z-index: 1000001; position: absolute; right: 298px; bottom: 0px; width: 193px;\"><div draggable=\"false\" class=\"gm-style-cc\" style=\"user-select: none; height: 14px; line-height: 14px;\"><div style=\"opacity: 0.7; width: 100%; height: 100%; position: absolute;\"><div style=\"width: 1px;\"></div><div style=\"background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;\"></div></div><div style=\"position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;\"><a style=\"text-decoration: none; cursor: pointer; display: none;\">Données cartographiques</a><span>Données cartographiques ©2020 Google</span></div></div></div><div class=\"gmnoscreen\" style=\"position: absolute; right: 0px; bottom: 0px;\"><div style=\"font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);\">Données cartographiques ©2020 Google</div></div><div class=\"gmnoprint gm-style-cc\" draggable=\"false\" style=\"z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 165px; bottom: 0px;\"><div style=\"opacity: 0.7; width: 100%; height: 100%; position: absolute;\"><div style=\"width: 1px;\"></div><div style=\"background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;\"></div></div><div style=\"position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;\"><a href=\"https://www.google.com/intl/fr-FR_US/help/terms_maps.html\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);\">Conditions d'utilisation</a></div></div><button draggable=\"false\" title=\"Passer en plein écran\" aria-label=\"Passer en plein écran\" type=\"button\" class=\"gm-control-active gm-fullscreen-control\" style=\"background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"></button><div style=\"padding: 5px; z-index: 0; position: absolute; right: 0px; top: 124px;\"><div><div class=\"custom-zoom-in\"></div><div class=\"custom-zoom-out\"></div></div></div><div draggable=\"false\" class=\"gm-style-cc\" style=\"user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;\"><div style=\"opacity: 0.7; width: 100%; height: 100%; position: absolute;\"><div style=\"width: 1px;\"></div><div style=\"background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;\"></div></div><div style=\"position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;\"><a target=\"_blank\" rel=\"noopener\" title=\"Signaler à Google une erreur dans la carte routière ou les images\" href=\"https://www.google.com/maps/@37.777842,-122.391805,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3\" style=\"font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;\">Signaler une erreur cartographique</a></div></div><div class=\"gmnoprint gm-bundled-control gm-bundled-control-on-bottom\" draggable=\"false\" controlwidth=\"0\" controlheight=\"0\" style=\"margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;\"><div class=\"gmnoprint\" controlwidth=\"40\" controlheight=\"40\" style=\"display: none; position: absolute;\"><div style=\"width: 40px; height: 40px;\"><button draggable=\"false\" title=\"Faire pivoter la carte à 90°\" aria-label=\"Faire pivoter la carte à 90°\" type=\"button\" class=\"gm-control-active\" style=\"background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"></button><button draggable=\"false\" title=\"Incliner la carte\" aria-label=\"Incliner la carte\" type=\"button\" class=\"gm-tilt gm-control-active\" style=\"background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"width: 18px;\"></button></div></div></div></div></div><div style=\"background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;\"><div><img alt=\"\" src=\"https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg\" draggable=\"false\" style=\"padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;\"></div><div style=\"line-height: 20px; margin: 15px 0px;\"><span style=\"color: rgba(0, 0, 0, 0.87); font-size: 14px;\">Impossible de charger Google&nbsp;Maps correctement sur cette page.</span></div><table style=\"width: 100%;\"><tr><td style=\"line-height: 16px; vertical-align: middle;\"><a href=\"https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors\" target=\"_blank\" rel=\"noopener\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 12px;\">Ce site Web vous appartient&nbsp;?</a></td><td style=\"text-align: right;\"><button class=\"dismissButton\">OK</button></td></tr></table></div></div>
                        <a href=\"#\" id=\"streetView\">Street View</a>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-8 col-lg-8 offset-xl-2 offset-lg-2\">

                <section id=\"contact\" class=\"margin-bottom-60\">
                    <h3 class=\"headline margin-top-15 margin-bottom-35\">Expliquez nous?</h3>

                    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start');
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["f"] ?? $this->getContext($context, "f")), 'widget');
        echo "
                    <input type=\"submit\" value=\"Create\" />
                    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "


                </section>

            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Front/UpdateReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 67,  123 => 65,  119 => 64,  60 => 7,  51 => 6,  29 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{#{{ form_start(f) }}
{{ form_widget(f.Ajout,{'label':'Modifier'}) }}
{{ form_end(f) }}#}
{% extends '@Reclamation/Front/contact.html.twig' %}
{% block content %}
    <div id=\"titlebar\" class=\"gradient\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    <h2>Contact</h2>

                    <!-- Breadcrumbs -->
                    <nav id=\"breadcrumbs\" class=\"dark\">
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Pages</a></li>
                            <li>Contact</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xl-12\">
                <div class=\"contact-location-info margin-bottom-50\">
                    <div class=\"contact-address\">
                        <ul>
                            <li class=\"contact-address-headline\">Notre Emplacement</li>
                            <li>Cité el Ghazela</li>
                            <li>Phone 71717171</li>
                            <li><a href=\"#\">nozelites@gmail.com</a></li>
                            <li>
                                <div class=\"freelancer-socials\">
                                    <ul>
                                        <li><a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Dribbble\"><i class=\"icon-brand-dribbble\"></i></a></li>
                                        <li><a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Twitter\"><i class=\"icon-brand-twitter\"></i></a></li>
                                        <li><a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"Behance\"><i class=\"icon-brand-behance\"></i></a></li>
                                        <li><a href=\"#\" data-tippy-placement=\"top\" data-tippy=\"\" data-original-title=\"GitHub\"><i class=\"icon-brand-github\"></i></a></li>

                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div id=\"single-job-map-container\">
                        <div id=\"singleListingMap\" data-latitude=\"37.777842\" data-longitude=\"-122.391805\" data-map-icon=\"im im-icon-Hamburger\" style=\"position: relative; overflow: hidden;\"><div style=\"height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);\"><div class=\"gm-style\" style=\"position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;\"><div tabindex=\"0\" style=\"position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;\"><div style=\"z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);\"><div style=\"position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;\"><div style=\"position: absolute; left: 0px; top: 0px; z-index: 0;\"><div style=\"position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -160, -46);\"><div style=\"position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div><div style=\"position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;\"><div style=\"width: 256px; height: 256px;\"></div></div></div></div></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 0;\"><div style=\"position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -160, -46);\"><div style=\"position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5242!3i12664!4i256!2m3!1e0!2sm!3i503220268!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=58887\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5243!3i12664!4i256!2m3!1e0!2sm!3i503220268!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=55954\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5243!3i12665!4i256!2m3!1e0!2sm!3i503220244!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=110727\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5242!3i12665!4i256!2m3!1e0!2sm!3i503220244!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=113660\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5244!3i12664!4i256!2m3!1e0!2sm!3i503219980!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=40982\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div><div style=\"position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;\"><img draggable=\"false\" alt=\"\" role=\"presentation\" src=\"https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i5244!3i12665!4i256!2m3!1e0!2sm!3i503220232!2m3!1e2!6m1!3e5!3m17!2sfr-FR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=51798\" style=\"width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;\"></div></div></div></div><div class=\"gm-style-pbc\" style=\"z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;\"><p class=\"gm-style-pbt\"></p></div><div style=\"z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;\"><div style=\"z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);\"><div style=\"position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;\"><div class=\"map-marker-container\" data-marker_id=\"1\" style=\"left: 0.23734px; top: -0.109956px;\"><div class=\"marker-container\"><div class=\"marker-card\"></div></div></div></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;\"></div><div style=\"position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;\"></div></div></div></div><iframe aria-hidden=\"true\" frameborder=\"0\" tabindex=\"-1\" style=\"z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;\"></iframe><div style=\"margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;\"><a target=\"_blank\" rel=\"noopener\" href=\"https://maps.google.com/maps?ll=37.777842,-122.391805&amp;z=15&amp;t=m&amp;hl=fr-FR&amp;gl=US&amp;mapclient=apiv3\" title=\"Ouvrir cette zone dans Google&nbsp;Maps (dans une nouvelle fenêtre)\" style=\"position: static; overflow: visible; float: none; display: inline;\"><div style=\"width: 66px; height: 26px; cursor: pointer;\"><img alt=\"\" src=\"https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png\" draggable=\"false\" style=\"position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;\"></div></a></div><div style=\"background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 105px; top: 80px;\"><div style=\"padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;\">Données cartographiques</div><div style=\"font-size: 13px;\">Données cartographiques ©2020 Google</div><button draggable=\"false\" title=\"Fermer\" aria-label=\"Fermer\" type=\"button\" class=\"gm-ui-hover-effect\" style=\"background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;\"></button></div><div class=\"gmnoprint\" style=\"z-index: 1000001; position: absolute; right: 298px; bottom: 0px; width: 193px;\"><div draggable=\"false\" class=\"gm-style-cc\" style=\"user-select: none; height: 14px; line-height: 14px;\"><div style=\"opacity: 0.7; width: 100%; height: 100%; position: absolute;\"><div style=\"width: 1px;\"></div><div style=\"background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;\"></div></div><div style=\"position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;\"><a style=\"text-decoration: none; cursor: pointer; display: none;\">Données cartographiques</a><span>Données cartographiques ©2020 Google</span></div></div></div><div class=\"gmnoscreen\" style=\"position: absolute; right: 0px; bottom: 0px;\"><div style=\"font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);\">Données cartographiques ©2020 Google</div></div><div class=\"gmnoprint gm-style-cc\" draggable=\"false\" style=\"z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 165px; bottom: 0px;\"><div style=\"opacity: 0.7; width: 100%; height: 100%; position: absolute;\"><div style=\"width: 1px;\"></div><div style=\"background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;\"></div></div><div style=\"position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;\"><a href=\"https://www.google.com/intl/fr-FR_US/help/terms_maps.html\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);\">Conditions d'utilisation</a></div></div><button draggable=\"false\" title=\"Passer en plein écran\" aria-label=\"Passer en plein écran\" type=\"button\" class=\"gm-control-active gm-fullscreen-control\" style=\"background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"></button><div style=\"padding: 5px; z-index: 0; position: absolute; right: 0px; top: 124px;\"><div><div class=\"custom-zoom-in\"></div><div class=\"custom-zoom-out\"></div></div></div><div draggable=\"false\" class=\"gm-style-cc\" style=\"user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;\"><div style=\"opacity: 0.7; width: 100%; height: 100%; position: absolute;\"><div style=\"width: 1px;\"></div><div style=\"background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;\"></div></div><div style=\"position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;\"><a target=\"_blank\" rel=\"noopener\" title=\"Signaler à Google une erreur dans la carte routière ou les images\" href=\"https://www.google.com/maps/@37.777842,-122.391805,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3\" style=\"font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;\">Signaler une erreur cartographique</a></div></div><div class=\"gmnoprint gm-bundled-control gm-bundled-control-on-bottom\" draggable=\"false\" controlwidth=\"0\" controlheight=\"0\" style=\"margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;\"><div class=\"gmnoprint\" controlwidth=\"40\" controlheight=\"40\" style=\"display: none; position: absolute;\"><div style=\"width: 40px; height: 40px;\"><button draggable=\"false\" title=\"Faire pivoter la carte à 90°\" aria-label=\"Faire pivoter la carte à 90°\" type=\"button\" class=\"gm-control-active\" style=\"background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"height: 18px; width: 18px;\"></button><button draggable=\"false\" title=\"Incliner la carte\" aria-label=\"Incliner la carte\" type=\"button\" class=\"gm-tilt gm-control-active\" style=\"background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"width: 18px;\"><img src=\"data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A\" style=\"width: 18px;\"></button></div></div></div></div></div><div style=\"background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;\"><div><img alt=\"\" src=\"https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg\" draggable=\"false\" style=\"padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;\"></div><div style=\"line-height: 20px; margin: 15px 0px;\"><span style=\"color: rgba(0, 0, 0, 0.87); font-size: 14px;\">Impossible de charger Google&nbsp;Maps correctement sur cette page.</span></div><table style=\"width: 100%;\"><tr><td style=\"line-height: 16px; vertical-align: middle;\"><a href=\"https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors\" target=\"_blank\" rel=\"noopener\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 12px;\">Ce site Web vous appartient&nbsp;?</a></td><td style=\"text-align: right;\"><button class=\"dismissButton\">OK</button></td></tr></table></div></div>
                        <a href=\"#\" id=\"streetView\">Street View</a>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-8 col-lg-8 offset-xl-2 offset-lg-2\">

                <section id=\"contact\" class=\"margin-bottom-60\">
                    <h3 class=\"headline margin-top-15 margin-bottom-35\">Expliquez nous?</h3>

                    {{ form_start(f) }}
                    {{ form_widget(f) }}
                    <input type=\"submit\" value=\"Create\" />
                    {{ form_end(f) }}


                </section>

            </div>

        </div>
    </div>
{% endblock %}", "@Reclamation/Front/UpdateReclamation.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\ReclamationBundle\\Resources\\views\\Front\\UpdateReclamation.html.twig");
    }
}
