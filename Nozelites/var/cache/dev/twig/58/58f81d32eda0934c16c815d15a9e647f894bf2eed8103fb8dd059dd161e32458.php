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

/* @Publication/Front/sass/listings/_jobs-grid-layout.scss */
class __TwigTemplate_4ce3e3a1c1c1e88e456a19b496ac6ea8bf983ad1f028887582efc8cdbb4c01c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_jobs-grid-layout.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_jobs-grid-layout.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Job Listing - Grid Layout
------------------------------------- */

.grid-layout {
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
  .job-listing {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 30px 30px 0;
    width: calc(100% * (1/2) - 30px);
    flex-direction: column;
  }
  .job-listing-details {
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 30px;
    padding-right: 40px;
  }
  .job-listing-footer {
    flex-grow: 0;
    padding: 20px 30px;
  }
  .job-listing h3.job-listing-title {
    font-size: \$listing-heading-font-size;
    line-height: 28px;
  }
  .job-listing-footer .bookmark-icon {
    top: 0;
    right: 25px;
    transform: translateY(-50%) scale(0.96);
  }
  .job-listing .job-listing-company-logo {
    max-width: 56px;
    margin-right: 24px;
    top: 1px;
    flex: 0 0 56px;
  }
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .tasks-list-container.tasks-grid-layout .task-listing .task-listing-details, .grid-layout .job-listing-details, .tasks-list-container.tasks-grid-layout .task-listing-bid {
    flex-basis: 100px;
  }
}
/* IE 11 Fixes - End */

/* Media Queries for Grid Layout */
@media (max-width: 768px) {
  .full-page-content-inner .grid-layout .job-listing {
    margin: 0 0 30px 0;
    width: 100%;
  }
  .grid-layout {
    .job-listing {
      margin: 0 0 30px 0;
      width: 100%;
    }
    width: 100%;
  }
  .full-page-content-inner .grid-layout {
    width: 100%;
  }
  .full-page-content-container .simplebar-content {
    overflow-x: hidden !important;
  }
  .full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
    width: 100%;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_jobs-grid-layout.scss";
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
        return new Source("
/* ---------------------------------- */
/* Job Listing - Grid Layout
------------------------------------- */

.grid-layout {
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
  .job-listing {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 30px 30px 0;
    width: calc(100% * (1/2) - 30px);
    flex-direction: column;
  }
  .job-listing-details {
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 30px;
    padding-right: 40px;
  }
  .job-listing-footer {
    flex-grow: 0;
    padding: 20px 30px;
  }
  .job-listing h3.job-listing-title {
    font-size: \$listing-heading-font-size;
    line-height: 28px;
  }
  .job-listing-footer .bookmark-icon {
    top: 0;
    right: 25px;
    transform: translateY(-50%) scale(0.96);
  }
  .job-listing .job-listing-company-logo {
    max-width: 56px;
    margin-right: 24px;
    top: 1px;
    flex: 0 0 56px;
  }
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .tasks-list-container.tasks-grid-layout .task-listing .task-listing-details, .grid-layout .job-listing-details, .tasks-list-container.tasks-grid-layout .task-listing-bid {
    flex-basis: 100px;
  }
}
/* IE 11 Fixes - End */

/* Media Queries for Grid Layout */
@media (max-width: 768px) {
  .full-page-content-inner .grid-layout .job-listing {
    margin: 0 0 30px 0;
    width: 100%;
  }
  .grid-layout {
    .job-listing {
      margin: 0 0 30px 0;
      width: 100%;
    }
    width: 100%;
  }
  .full-page-content-inner .grid-layout {
    width: 100%;
  }
  .full-page-content-container .simplebar-content {
    overflow-x: hidden !important;
  }
  .full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
    width: 100%;
  }
}", "@Publication/Front/sass/listings/_jobs-grid-layout.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_jobs-grid-layout.scss");
    }
}
