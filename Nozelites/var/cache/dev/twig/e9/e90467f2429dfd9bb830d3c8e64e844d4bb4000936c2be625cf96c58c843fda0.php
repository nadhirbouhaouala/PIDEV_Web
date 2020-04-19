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

/* @Publication/Front/sass/listings/_freelancers-list-layout.scss */
class __TwigTemplate_776fdf0e90b7c63ca96df2f30f938c466e7f0bf4673014199af851121c4d09de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_freelancers-list-layout.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_freelancers-list-layout.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Freelancers - List Layout
------------------------------------- */

.freelancers-container.freelancers-list-layout {
  width: 100%;
}

.freelancers-list-layout {
  .freelancer {
    margin: 0 0 30px 0;
    width: 100%;
    flex-direction: row;
    justify-content: center;
  }
  .freelancer-overview {
    text-align: left;
    padding: 45px 40px;
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  .freelancer-overview-inner {
    flex: 1;
    display: flex;
    align-items: center;
  }
  .freelancer-details {
    padding: 45px 40px 45px 0;
    background-color: transparent;
    flex: 0 0 360px;
  }
  .freelancer-overview {
    .freelancer-avatar {
      width: 100px;
      margin: 0;
    }
    .freelancer-name {
      text-align: left;
      margin: 0 0 0 30px;
    }
  }
  .freelancer-details a.button {
    display: block;
    text-align: center;
    min-width: 50%;
    max-width: 100%;
    width: auto !important;
    transition: 0.3s;
    float: right;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
    }
  }
  .bookmark-icon {
    display: none;
  }
  .freelancer-details-list ul {
    float: right;
    display: block;
    li {
      margin-left: 25px;
      margin-right: 0;
      float: right;
    }
  }
}

/* Freelancers Compact List */

.compact-list.freelancers-list-layout {
  .freelancer {
    border-radius: 0;
    margin-bottom: 0;
    box-shadow: none;
    &:hover {
      transform: translateY(0);
    }
    &:nth-child(2n) {
      background-color: #fafafa;
    }
    &:hover:before {
      opacity: 1;
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
    &:last-of-type {
      border-radius: 0 0 3px 3px;
      overflow: hidden;
    }
    &:first-of-type {
      border-radius: 3px 3px 0 0;
      overflow: hidden;
    }
  }
  background-color: #fff;
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
}

/* Media Queiers for Freelancers List Layout */
@media (max-width: 1366px) {
  .freelancers-list-layout .freelancer-overview .freelancer-avatar {
    width: 100px;
  }
}

@media (max-width: 1240px) {
  .freelancers-list-layout {
    .freelancer {
      flex-direction: column;
    }
    .freelancer-details {
      flex: 1;
      padding: 35px 40px;
      background-color: #fafafa;
    }
    .freelancer-details-list ul {
      float: left;
      li {
        margin-left: 0;
        margin-right: 25px;
        float: left;
      }
    }
    .freelancer-details a.button {
      float: none;
      width: 100% !important;
    }
    .freelancer-overview .freelancer-avatar {
      width: 90px;
    }
  }
  /* Compact Layout */
  .compact-list.freelancers-list-layout .freelancer-details {
    background-color: transparent;
    padding-top: 0;
  }
}

@media (max-width: 768px) {
  .freelancers-list-layout {
    .freelancer-overview, .freelancer-details {
      padding: 30px;
    }
    .freelancer-overview .freelancer-avatar {
      width: 80px;
    }
    .star-rating:before {
      display: block;
      float: none;
      text-align: center;
      max-width: 40px;
      margin-bottom: 4px;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_freelancers-list-layout.scss";
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
/* Freelancers - List Layout
------------------------------------- */

.freelancers-container.freelancers-list-layout {
  width: 100%;
}

.freelancers-list-layout {
  .freelancer {
    margin: 0 0 30px 0;
    width: 100%;
    flex-direction: row;
    justify-content: center;
  }
  .freelancer-overview {
    text-align: left;
    padding: 45px 40px;
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  .freelancer-overview-inner {
    flex: 1;
    display: flex;
    align-items: center;
  }
  .freelancer-details {
    padding: 45px 40px 45px 0;
    background-color: transparent;
    flex: 0 0 360px;
  }
  .freelancer-overview {
    .freelancer-avatar {
      width: 100px;
      margin: 0;
    }
    .freelancer-name {
      text-align: left;
      margin: 0 0 0 30px;
    }
  }
  .freelancer-details a.button {
    display: block;
    text-align: center;
    min-width: 50%;
    max-width: 100%;
    width: auto !important;
    transition: 0.3s;
    float: right;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
    }
  }
  .bookmark-icon {
    display: none;
  }
  .freelancer-details-list ul {
    float: right;
    display: block;
    li {
      margin-left: 25px;
      margin-right: 0;
      float: right;
    }
  }
}

/* Freelancers Compact List */

.compact-list.freelancers-list-layout {
  .freelancer {
    border-radius: 0;
    margin-bottom: 0;
    box-shadow: none;
    &:hover {
      transform: translateY(0);
    }
    &:nth-child(2n) {
      background-color: #fafafa;
    }
    &:hover:before {
      opacity: 1;
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
    &:last-of-type {
      border-radius: 0 0 3px 3px;
      overflow: hidden;
    }
    &:first-of-type {
      border-radius: 3px 3px 0 0;
      overflow: hidden;
    }
  }
  background-color: #fff;
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
}

/* Media Queiers for Freelancers List Layout */
@media (max-width: 1366px) {
  .freelancers-list-layout .freelancer-overview .freelancer-avatar {
    width: 100px;
  }
}

@media (max-width: 1240px) {
  .freelancers-list-layout {
    .freelancer {
      flex-direction: column;
    }
    .freelancer-details {
      flex: 1;
      padding: 35px 40px;
      background-color: #fafafa;
    }
    .freelancer-details-list ul {
      float: left;
      li {
        margin-left: 0;
        margin-right: 25px;
        float: left;
      }
    }
    .freelancer-details a.button {
      float: none;
      width: 100% !important;
    }
    .freelancer-overview .freelancer-avatar {
      width: 90px;
    }
  }
  /* Compact Layout */
  .compact-list.freelancers-list-layout .freelancer-details {
    background-color: transparent;
    padding-top: 0;
  }
}

@media (max-width: 768px) {
  .freelancers-list-layout {
    .freelancer-overview, .freelancer-details {
      padding: 30px;
    }
    .freelancer-overview .freelancer-avatar {
      width: 80px;
    }
    .star-rating:before {
      display: block;
      float: none;
      text-align: center;
      max-width: 40px;
      margin-bottom: 4px;
    }
  }
}", "@Publication/Front/sass/listings/_freelancers-list-layout.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_freelancers-list-layout.scss");
    }
}
