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

/* @Publication/Front/sass/listings/_jobs-list-layout.scss */
class __TwigTemplate_78e7056837f1460e347caf8f4066826a94d1b0dd84e3854d577aeb4ffc6c400b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_jobs-list-layout.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_jobs-list-layout.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Job Listing - List Layout
------------------------------------- */

.job-listing {
  display: block;
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  margin-bottom: 35px;
  background-color: #fff;
  transition: 0.3s;
  position: relative;
  &:hover {
    box-shadow: 0 2px 18px rgba(0, 0, 0, 0.14);
    transform: translateY(-4px);
  }
}

.job-listing-details {
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  padding: 35px;
  padding-bottom: 32px;
}

.job-listing {
  .job-listing-company-logo {
    flex: 1;
    max-width: 55px;
    margin-right: 25px;
    position: relative;
    top: 3px;
    img {
      border-radius: \$global-border-radius;
      transform: translate3d(0, 0, 0);
    }
  }
  .job-listing-description {
    flex: 1;
    padding-top: 3px;
    p {
      margin: 15px 0 0 0;
      padding: 0;
      color: \$body-font-color;
    }
  }
  h4.job-listing-company {
    font-size: \$body-font-size;
    color: #808080;
  }
  h3.job-listing-title {
    font-size: 20px;
    color: \$body-heading-color;
    line-height: 30px;
  }
  .job-listing-footer {
    background-color: #f9f9f9;
    padding: 20px 35px;
    border-radius: 0 0 \$global-border-radius \$global-border-radius;
    position: relative;
    ul {
      list-style: none;
      padding: 0;
      margin: 0;
      li {
        display: inline-block;
        margin-right: 14px;
        color: #777;
        &:last-child {
          margin-right: 0;
        }
        i {
          &.icon-material-outline-location-on {
            margin-right: 0;
          }
          position: relative;
          top: 1px;
          margin-right: 3px;
          color: #777;
        }
      }
    }
  }
}

/* Media Queries for Default List Layout*/
@media (max-width: 768px) {
  .job-listing {
    .job-listing-company-logo {
      display: none;
    }
    .job-listing-title {
      padding-right: 10%;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_jobs-list-layout.scss";
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
/* Job Listing - List Layout
------------------------------------- */

.job-listing {
  display: block;
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  margin-bottom: 35px;
  background-color: #fff;
  transition: 0.3s;
  position: relative;
  &:hover {
    box-shadow: 0 2px 18px rgba(0, 0, 0, 0.14);
    transform: translateY(-4px);
  }
}

.job-listing-details {
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  padding: 35px;
  padding-bottom: 32px;
}

.job-listing {
  .job-listing-company-logo {
    flex: 1;
    max-width: 55px;
    margin-right: 25px;
    position: relative;
    top: 3px;
    img {
      border-radius: \$global-border-radius;
      transform: translate3d(0, 0, 0);
    }
  }
  .job-listing-description {
    flex: 1;
    padding-top: 3px;
    p {
      margin: 15px 0 0 0;
      padding: 0;
      color: \$body-font-color;
    }
  }
  h4.job-listing-company {
    font-size: \$body-font-size;
    color: #808080;
  }
  h3.job-listing-title {
    font-size: 20px;
    color: \$body-heading-color;
    line-height: 30px;
  }
  .job-listing-footer {
    background-color: #f9f9f9;
    padding: 20px 35px;
    border-radius: 0 0 \$global-border-radius \$global-border-radius;
    position: relative;
    ul {
      list-style: none;
      padding: 0;
      margin: 0;
      li {
        display: inline-block;
        margin-right: 14px;
        color: #777;
        &:last-child {
          margin-right: 0;
        }
        i {
          &.icon-material-outline-location-on {
            margin-right: 0;
          }
          position: relative;
          top: 1px;
          margin-right: 3px;
          color: #777;
        }
      }
    }
  }
}

/* Media Queries for Default List Layout*/
@media (max-width: 768px) {
  .job-listing {
    .job-listing-company-logo {
      display: none;
    }
    .job-listing-title {
      padding-right: 10%;
    }
  }
}", "@Publication/Front/sass/listings/_jobs-list-layout.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_jobs-list-layout.scss");
    }
}
