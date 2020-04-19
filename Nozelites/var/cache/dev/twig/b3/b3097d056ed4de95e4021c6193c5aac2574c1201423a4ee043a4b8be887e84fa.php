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

/* @Publication/Front/sass/style.scss */
class __TwigTemplate_b6cae8f3ec31eff0a1e9e348c24c571ba8ce8ff8176eb68849f7f04ee5f488a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/style.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/style.scss"));

        // line 1
        echo "@charset \"UTF-8\";

/*
* Author: Vasterad
* URL: https://themeforest.net/user/vasterad/portfolio/
*/

@import 'variables';

/* -------------------------------------------------------------- */
/* 01. Layout Components
----------------------------------------------------------------- */
@import 'layout/bootstrap-grid';
@import 'layout/form-styles';
@import 'layout/header';
@import 'layout/header-notifications';
@import 'layout/user-menu';
@import 'layout/navigation';
@import 'layout/mobile-navigation';
@import 'layout/titlebar';
@import 'layout/blog';
@import 'layout/contact-page';
@import 'layout/footer';
@import 'layout/sidebar-styles';
@import 'layout/single-freelancer-page';
@import 'layout/single-job-page';
@import 'layout/checkout-page';
@import 'layout/404-page';


/* -------------------------------------------------------------- */
/* 02. Listings Styles
----------------------------------------------------------------- */
@import 'listings/full-page-layout';
@import 'listings/jobs-list-layout';
@import 'listings/jobs-compact-list-layout';
@import 'listings/jobs-grid-layout';
@import 'listings/tasks-list-layout';
@import 'listings/tasks-grid-layout';
@import 'listings/freelancers-grid-layout';
@import 'listings/freelancers-list-layout';
@import 'listings/companies-list';


/* -------------------------------------------------------------- */
/* 03. Graphic User Interface Elements
----------------------------------------------------------------- */
@import 'gui/buttons';
@import 'gui/lists';
@import 'gui/marks';
@import 'gui/notification-boxes';
@import 'gui/tables';
@import 'gui/accordion';
@import 'gui/tabs';
@import 'gui/copy-to-clipboard';
@import 'gui/share-buttons';
@import 'gui/verified-badge';
@import 'gui/star-rating';
@import 'gui/leave-rating-stars';
@import 'gui/ripple-effect';
@import 'gui/on-off-switch';
@import 'gui/radio-button';
@import 'gui/checkbox';
@import 'gui/custom-upload-button';
@import 'gui/intro-banner';
@import 'gui/category-boxes';
@import 'gui/photo-box';
@import 'gui/pricing-plans';
@import 'gui/icon-boxes';
@import 'gui/testimonials';
@import 'gui/photo-section';
@import 'gui/counters';
@import 'gui/countdown';
@import 'gui/bidding-widget';
@import 'gui/boxed-list';
@import 'gui/category-boxes';
@import 'gui/clickable-tags';
@import 'gui/icon-boxes';
@import 'gui/notify-box';
@import 'gui/pagination';
@import 'gui/back-to-top';


/* -------------------------------------------------------------- */
/* 04. Vendor (third party assets styles)
----------------------------------------------------------------- */
@import 'vendor/slick-carousel';
@import 'vendor/custom-scrollbar';
@import 'vendor/tooltips';
@import 'vendor/popups';
@import 'vendor/bootstrap-range-slider';
@import 'vendor/bootstrap-select';
@import 'vendor/snackbar';
@import 'vendor/google-autocomplete';
@import 'vendor/maps';


/* -------------------------------------------------------------- */
/* 05. Dashboard
----------------------------------------------------------------- */
@import 'dashboard/dashboard-basics';
@import 'dashboard/dashboard-navigation';
@import 'dashboard/dashboard-gui-elements';
@import 'dashboard/dashboard-messages';


/* -------------------------------------------------------------- */
/* 06. Layout Basics
----------------------------------------------------------------- */
@import 'layout/common-typography';
@import 'layout/offsets';


/* -------------------------------------------------------------- */
/* 07. Icon Sets
----------------------------------------------------------------- */
@import 'icons/material-icons';
@import 'icons/feather-icons';
@import 'icons/line-awesome-icons';
@import 'icons/brand-icons';


/* -------------------------------------------------------------- */
/* 08. Custom CSS
----------------------------------------------------------------- */
@import 'custom';

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/style.scss";
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
        return new Source("@charset \"UTF-8\";

/*
* Author: Vasterad
* URL: https://themeforest.net/user/vasterad/portfolio/
*/

@import 'variables';

/* -------------------------------------------------------------- */
/* 01. Layout Components
----------------------------------------------------------------- */
@import 'layout/bootstrap-grid';
@import 'layout/form-styles';
@import 'layout/header';
@import 'layout/header-notifications';
@import 'layout/user-menu';
@import 'layout/navigation';
@import 'layout/mobile-navigation';
@import 'layout/titlebar';
@import 'layout/blog';
@import 'layout/contact-page';
@import 'layout/footer';
@import 'layout/sidebar-styles';
@import 'layout/single-freelancer-page';
@import 'layout/single-job-page';
@import 'layout/checkout-page';
@import 'layout/404-page';


/* -------------------------------------------------------------- */
/* 02. Listings Styles
----------------------------------------------------------------- */
@import 'listings/full-page-layout';
@import 'listings/jobs-list-layout';
@import 'listings/jobs-compact-list-layout';
@import 'listings/jobs-grid-layout';
@import 'listings/tasks-list-layout';
@import 'listings/tasks-grid-layout';
@import 'listings/freelancers-grid-layout';
@import 'listings/freelancers-list-layout';
@import 'listings/companies-list';


/* -------------------------------------------------------------- */
/* 03. Graphic User Interface Elements
----------------------------------------------------------------- */
@import 'gui/buttons';
@import 'gui/lists';
@import 'gui/marks';
@import 'gui/notification-boxes';
@import 'gui/tables';
@import 'gui/accordion';
@import 'gui/tabs';
@import 'gui/copy-to-clipboard';
@import 'gui/share-buttons';
@import 'gui/verified-badge';
@import 'gui/star-rating';
@import 'gui/leave-rating-stars';
@import 'gui/ripple-effect';
@import 'gui/on-off-switch';
@import 'gui/radio-button';
@import 'gui/checkbox';
@import 'gui/custom-upload-button';
@import 'gui/intro-banner';
@import 'gui/category-boxes';
@import 'gui/photo-box';
@import 'gui/pricing-plans';
@import 'gui/icon-boxes';
@import 'gui/testimonials';
@import 'gui/photo-section';
@import 'gui/counters';
@import 'gui/countdown';
@import 'gui/bidding-widget';
@import 'gui/boxed-list';
@import 'gui/category-boxes';
@import 'gui/clickable-tags';
@import 'gui/icon-boxes';
@import 'gui/notify-box';
@import 'gui/pagination';
@import 'gui/back-to-top';


/* -------------------------------------------------------------- */
/* 04. Vendor (third party assets styles)
----------------------------------------------------------------- */
@import 'vendor/slick-carousel';
@import 'vendor/custom-scrollbar';
@import 'vendor/tooltips';
@import 'vendor/popups';
@import 'vendor/bootstrap-range-slider';
@import 'vendor/bootstrap-select';
@import 'vendor/snackbar';
@import 'vendor/google-autocomplete';
@import 'vendor/maps';


/* -------------------------------------------------------------- */
/* 05. Dashboard
----------------------------------------------------------------- */
@import 'dashboard/dashboard-basics';
@import 'dashboard/dashboard-navigation';
@import 'dashboard/dashboard-gui-elements';
@import 'dashboard/dashboard-messages';


/* -------------------------------------------------------------- */
/* 06. Layout Basics
----------------------------------------------------------------- */
@import 'layout/common-typography';
@import 'layout/offsets';


/* -------------------------------------------------------------- */
/* 07. Icon Sets
----------------------------------------------------------------- */
@import 'icons/material-icons';
@import 'icons/feather-icons';
@import 'icons/line-awesome-icons';
@import 'icons/brand-icons';


/* -------------------------------------------------------------- */
/* 08. Custom CSS
----------------------------------------------------------------- */
@import 'custom';

", "@Publication/Front/sass/style.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\style.scss");
    }
}
