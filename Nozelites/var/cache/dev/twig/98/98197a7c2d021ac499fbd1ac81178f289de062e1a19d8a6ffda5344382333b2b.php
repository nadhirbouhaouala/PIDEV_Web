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

/* @Publication/Front/sass/layout/_single-job-page.scss */
class __TwigTemplate_1c35dbe6a2e24974fd9228dd73055f36996f8ab0e577bd48002f1ee650252a7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_single-job-page.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_single-job-page.scss"));

        // line 1
        echo "
/* Single Job
------------------------------------- */

.job-overview {
  border-radius: \$global-border-radius;
  background-color: #f9f9f9;
  .job-overview-headline {
    color: \$body-heading-color;
    font-size: 20px;
    padding: 20px 35px;
    background-color: #f0f0f0;
    color: \$body-heading-color;
    position: relative;
    border-radius: \$global-border-radius \$global-border-radius 0 0;
  }
  .job-overview-inner {
    padding: 35px;
    ul {
      padding: 0;
      margin: 0;
      list-style: none;
      li {
        position: relative;
        display: block;
        font-size: \$body-font-size;
        padding-left: 38px;
        margin-bottom: 25px;
        &:last-child {
          margin-bottom: 0;
        }
        span {
          font-weight: 600;
          color: \$body-heading-color;
          margin: 0;
          padding: 0;
          display: block;
        }
        h5 {
          font-weight: 500;
          color: \$body-font-color;
          font-size: \$body-font-size;
          margin: 0;
          padding: 0;
          line-height: 20px;
        }
        i {
          position: absolute;
          left: 0;
          top: 0;
          font-size: 24px;
          color: \$primary-color;
        }
      }
    }
  }
}


/* Apply Now Button */
a.apply-now-button {
  background-color: \$primary-color;
  color: #fff;
  text-align: center;
  font-size: 18px;
  border-radius: \$global-border-radius;
  padding: 14px 20px;
  margin-bottom: 35px;
  box-shadow: 0 2px 8px rgba(\$primary-color, 0.15);
  transition: 0.3s;
  display: block;
  &:hover {
    transform: translateY(-3px);
    box-shadow: 0 2px 8px rgba(\$primary-color, 0.35);
  }
  i {
    font-size: 22px;
    position: relative;
    line-height: 0;
    top: 3px;
    margin-left: 5px;
  }
}

/* Single Job Map */

#single-job-map-container {
  position: relative;
  #singleListingMap {
    position: relative;
    height: 340px;
    border-radius: \$global-border-radius;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_single-job-page.scss";
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
/* Single Job
------------------------------------- */

.job-overview {
  border-radius: \$global-border-radius;
  background-color: #f9f9f9;
  .job-overview-headline {
    color: \$body-heading-color;
    font-size: 20px;
    padding: 20px 35px;
    background-color: #f0f0f0;
    color: \$body-heading-color;
    position: relative;
    border-radius: \$global-border-radius \$global-border-radius 0 0;
  }
  .job-overview-inner {
    padding: 35px;
    ul {
      padding: 0;
      margin: 0;
      list-style: none;
      li {
        position: relative;
        display: block;
        font-size: \$body-font-size;
        padding-left: 38px;
        margin-bottom: 25px;
        &:last-child {
          margin-bottom: 0;
        }
        span {
          font-weight: 600;
          color: \$body-heading-color;
          margin: 0;
          padding: 0;
          display: block;
        }
        h5 {
          font-weight: 500;
          color: \$body-font-color;
          font-size: \$body-font-size;
          margin: 0;
          padding: 0;
          line-height: 20px;
        }
        i {
          position: absolute;
          left: 0;
          top: 0;
          font-size: 24px;
          color: \$primary-color;
        }
      }
    }
  }
}


/* Apply Now Button */
a.apply-now-button {
  background-color: \$primary-color;
  color: #fff;
  text-align: center;
  font-size: 18px;
  border-radius: \$global-border-radius;
  padding: 14px 20px;
  margin-bottom: 35px;
  box-shadow: 0 2px 8px rgba(\$primary-color, 0.15);
  transition: 0.3s;
  display: block;
  &:hover {
    transform: translateY(-3px);
    box-shadow: 0 2px 8px rgba(\$primary-color, 0.35);
  }
  i {
    font-size: 22px;
    position: relative;
    line-height: 0;
    top: 3px;
    margin-left: 5px;
  }
}

/* Single Job Map */

#single-job-map-container {
  position: relative;
  #singleListingMap {
    position: relative;
    height: 340px;
    border-radius: \$global-border-radius;
  }
}", "@Publication/Front/sass/layout/_single-job-page.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_single-job-page.scss");
    }
}
