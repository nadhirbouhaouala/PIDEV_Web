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

/* @Publication/Front/sass/listings/_jobs-compact-list-layout.scss */
class __TwigTemplate_9b2481aec1b928ff3a90f4bc48a8e51b582aa165ea7856a064c7186730d6397c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_jobs-compact-list-layout.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_jobs-compact-list-layout.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Job Listing - Compact List Layout
------------------------------------- */

.compact-list-layout {
  background-color: #fff;
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  .job-listing {
    box-shadow: none;
    margin-bottom: 0;
    padding: 30px 35px;
    padding-right: 80px;
    border-radius: 0;
    &:last-of-type {
      border-radius: 0 0 3px 3px;
      overflow: hidden;
    }
    &:first-of-type {
      border-radius: 3px 3px 0 0;
      overflow: hidden;
    }
    h3 {
      font-size: \$listing-heading-font-size;
      line-height: 28px;
    }
    &:nth-child(2n) {
      background-color: #fafafa;
    }
    &:before {
      content: \"\";
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      display: block;
      background: \$primary-color;
      transition: 0.3s;
      opacity: 0;
    }
    &:hover {
      &:before {
        opacity: 1;
      }
      transform: none;
    }
    .job-listing-footer {
      background-color: transparent;
      padding: 0;
      margin-top: 3px;
    }
  }
  .job-listing-details {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 0;
    top: 0;
  }
  .job-listing {
    .job-listing-company-logo {
      max-width: 50px;
      margin-right: 30px;
      top: 0;
    }
    .verified-badge {
      transform: scale(0.85) translate(8px, 8px);
    }
    h3 .verified-badge {
      transform: scale(0.85) translate(0, 0);
      font-weight: 500;
      top: 1px;
      &:before {
        top: -1px;
      }
    }
    span.bookmark-icon {
      top: 50%;
      transform: translateY(-51%);
    }
    &.with-apply-button {
      position: relative;
      padding-right: 35px;
    }
  }
}

/* List Layout Apply Button */
.list-apply-button {
  position: absolute;
  right: 0;
  padding: 10px 20px;
  line-height: 24px;
  position: relative;
  font-size: \$body-font-size;
  font-weight: 500;
  display: inline-block;
  transition: all 0.3s;
  border-radius: \$global-border-radius;
  background: #f0f0f0;
  color: \$body-font-color;
  text-align: center;
}

.job-listing.with-apply-button:hover .list-apply-button {
  background-color: \$primary-color;
  color: #fff;
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
}

/* Alt Styles for Single Company Profile */
.boxed-list .compact-list-layout {
  box-shadow: none;
  margin-top: 0;
  .job-listing {
    &:hover {
      border-left: none;
    }
    &:first-of-type {
      border-radius: 0;
    }
  }
}

/* Media Queries for Grid Layout */
@media (max-width: 768px) {
  .list-apply-button {
    flex: auto;
    width: 100%;
    margin-top: 15px;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_jobs-compact-list-layout.scss";
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
/* Job Listing - Compact List Layout
------------------------------------- */

.compact-list-layout {
  background-color: #fff;
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  .job-listing {
    box-shadow: none;
    margin-bottom: 0;
    padding: 30px 35px;
    padding-right: 80px;
    border-radius: 0;
    &:last-of-type {
      border-radius: 0 0 3px 3px;
      overflow: hidden;
    }
    &:first-of-type {
      border-radius: 3px 3px 0 0;
      overflow: hidden;
    }
    h3 {
      font-size: \$listing-heading-font-size;
      line-height: 28px;
    }
    &:nth-child(2n) {
      background-color: #fafafa;
    }
    &:before {
      content: \"\";
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      display: block;
      background: \$primary-color;
      transition: 0.3s;
      opacity: 0;
    }
    &:hover {
      &:before {
        opacity: 1;
      }
      transform: none;
    }
    .job-listing-footer {
      background-color: transparent;
      padding: 0;
      margin-top: 3px;
    }
  }
  .job-listing-details {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 0;
    top: 0;
  }
  .job-listing {
    .job-listing-company-logo {
      max-width: 50px;
      margin-right: 30px;
      top: 0;
    }
    .verified-badge {
      transform: scale(0.85) translate(8px, 8px);
    }
    h3 .verified-badge {
      transform: scale(0.85) translate(0, 0);
      font-weight: 500;
      top: 1px;
      &:before {
        top: -1px;
      }
    }
    span.bookmark-icon {
      top: 50%;
      transform: translateY(-51%);
    }
    &.with-apply-button {
      position: relative;
      padding-right: 35px;
    }
  }
}

/* List Layout Apply Button */
.list-apply-button {
  position: absolute;
  right: 0;
  padding: 10px 20px;
  line-height: 24px;
  position: relative;
  font-size: \$body-font-size;
  font-weight: 500;
  display: inline-block;
  transition: all 0.3s;
  border-radius: \$global-border-radius;
  background: #f0f0f0;
  color: \$body-font-color;
  text-align: center;
}

.job-listing.with-apply-button:hover .list-apply-button {
  background-color: \$primary-color;
  color: #fff;
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
}

/* Alt Styles for Single Company Profile */
.boxed-list .compact-list-layout {
  box-shadow: none;
  margin-top: 0;
  .job-listing {
    &:hover {
      border-left: none;
    }
    &:first-of-type {
      border-radius: 0;
    }
  }
}

/* Media Queries for Grid Layout */
@media (max-width: 768px) {
  .list-apply-button {
    flex: auto;
    width: 100%;
    margin-top: 15px;
  }
}", "@Publication/Front/sass/listings/_jobs-compact-list-layout.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_jobs-compact-list-layout.scss");
    }
}
