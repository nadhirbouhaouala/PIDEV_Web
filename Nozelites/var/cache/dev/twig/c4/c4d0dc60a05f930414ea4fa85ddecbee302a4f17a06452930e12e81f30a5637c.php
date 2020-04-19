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

/* @Publication/Front/sass/gui/_counters.scss */
class __TwigTemplate_3eab70c2b8bdd2692270f0cd80212b50c282320249963000322e6e254cd1edeb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_counters.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_counters.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Counters
------------------------------------- */

.counters-container {
  display: flex;
  flex-wrap: wrap;
}

.single-counter {
  flex: 1;
  text-align: center;
  position: relative;
  border-right: 1px solid #e0e0e0;
  margin-top: 80px;
  &:last-child {
    border-right: 0;
  }
  i {
    font-size: 64px;
    color: #ccc;
    position: absolute;
    top: -20px;
    transform: translateY(-100%);
    left: 0;
    right: 0;
  }
  h3 {
    font-size: 36px;
    font-weight: 600;
    color: \$primary-color;
    margin-bottom: 7px;
  }
  .counter-title {
    color: #888;
    padding-top: 0;
    display: inline-block;
    border-radius: \$global-border-radius;
    font-size: 18px;
  }
}

/* Media Queries for Counters */
@media (max-width: 992px) {
  .single-counter {
    flex: 1 1 50%;
    margin-bottom: 30px;
    &:nth-child(2) {
      border: none;
    }
  }
  .counters-container {
    margin-bottom: -30px;
  }
}

/* Media Queries for Counters */
@media (max-width: 768px) {
  .single-counter {
    flex: 1 1 100%;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 30px;
    &:nth-child(2) {
      border-bottom: 1px solid #e0e0e0;
    }
    &:last-child {
      margin-bottom: -15px;
      border-bottom: none;
    }
  }
  .counters-container {
    margin-bottom: -30px;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_counters.scss";
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
/* Counters
------------------------------------- */

.counters-container {
  display: flex;
  flex-wrap: wrap;
}

.single-counter {
  flex: 1;
  text-align: center;
  position: relative;
  border-right: 1px solid #e0e0e0;
  margin-top: 80px;
  &:last-child {
    border-right: 0;
  }
  i {
    font-size: 64px;
    color: #ccc;
    position: absolute;
    top: -20px;
    transform: translateY(-100%);
    left: 0;
    right: 0;
  }
  h3 {
    font-size: 36px;
    font-weight: 600;
    color: \$primary-color;
    margin-bottom: 7px;
  }
  .counter-title {
    color: #888;
    padding-top: 0;
    display: inline-block;
    border-radius: \$global-border-radius;
    font-size: 18px;
  }
}

/* Media Queries for Counters */
@media (max-width: 992px) {
  .single-counter {
    flex: 1 1 50%;
    margin-bottom: 30px;
    &:nth-child(2) {
      border: none;
    }
  }
  .counters-container {
    margin-bottom: -30px;
  }
}

/* Media Queries for Counters */
@media (max-width: 768px) {
  .single-counter {
    flex: 1 1 100%;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 30px;
    &:nth-child(2) {
      border-bottom: 1px solid #e0e0e0;
    }
    &:last-child {
      margin-bottom: -15px;
      border-bottom: none;
    }
  }
  .counters-container {
    margin-bottom: -30px;
  }
}", "@Publication/Front/sass/gui/_counters.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_counters.scss");
    }
}
