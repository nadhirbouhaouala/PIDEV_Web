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

/* @Publication/Front/sass/gui/_accordion.scss */
class __TwigTemplate_82be34b1cb737af96dc980bf4acda49923912894d6b5bc1a6fb74be07d1bc06e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_accordion.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_accordion.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Accordion
------------------------------------- */

.accordion {
  font-size: \$body-font-size;
  width: 100%;
  margin: 0 auto;
  border-radius: \$global-border-radius;
  overflow: hidden;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
  .accordion {
    border-radius: 0px;
    box-shadow: none;
  }
}

.accordion-header, .accordion-body {
  background: #fff;
}

.accordion-header {
  padding: 15px 25px;
  background: \$primary-color;
  color: #fff;
  cursor: pointer;
  font-size: \$body-font-size;
  transition: all .3s;
  position: relative;
  box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.15);
}

.accordion .accordion .accordion-header {
  box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.07);
}

.accordion-header:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  content: \"\";
  opacity: 0;
  transition: 0.3s;
}

.accordion-body__contents p:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
}

/*.accordion__item.active .accordion-header:before,
.accordion-header:hover:before { opacity: 0.04; }*/

.accordion-body {
  background: #fff;
  color: \$body-font-color;
  display: none;
}

.accordion-body__contents {
  padding: 25px;
  font-size: \$body-font-size;
  line-height: 28px;
}

.accordion__item.active:last-child .accordion-header {
  border-radius: none;
}

.accordion:first-child > .accordion__item > .accordion-header {
  border-bottom: 1px solid transparent;
}

.accordion__item {
  > .accordion-header:after {
    content: \"\\e957\";
    font-family: Material-Icons;
    font-size: 19px;
    float: right;
    position: relative;
    top: -1px;
    transition: .3s all;
    transform: rotate(0deg);
  }
  &.active {
    > .accordion-header:after {
      transform: rotate(-180deg);
    }
    .accordion .accordion-header:before {
      opacity: 0;
    }
  }
  .accordion__item .accordion-header {
    background: #f7f7f7;
    color: \$body-font-color;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_accordion.scss";
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
/* Accordion
------------------------------------- */

.accordion {
  font-size: \$body-font-size;
  width: 100%;
  margin: 0 auto;
  border-radius: \$global-border-radius;
  overflow: hidden;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
  .accordion {
    border-radius: 0px;
    box-shadow: none;
  }
}

.accordion-header, .accordion-body {
  background: #fff;
}

.accordion-header {
  padding: 15px 25px;
  background: \$primary-color;
  color: #fff;
  cursor: pointer;
  font-size: \$body-font-size;
  transition: all .3s;
  position: relative;
  box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.15);
}

.accordion .accordion .accordion-header {
  box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.07);
}

.accordion-header:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  content: \"\";
  opacity: 0;
  transition: 0.3s;
}

.accordion-body__contents p:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
}

/*.accordion__item.active .accordion-header:before,
.accordion-header:hover:before { opacity: 0.04; }*/

.accordion-body {
  background: #fff;
  color: \$body-font-color;
  display: none;
}

.accordion-body__contents {
  padding: 25px;
  font-size: \$body-font-size;
  line-height: 28px;
}

.accordion__item.active:last-child .accordion-header {
  border-radius: none;
}

.accordion:first-child > .accordion__item > .accordion-header {
  border-bottom: 1px solid transparent;
}

.accordion__item {
  > .accordion-header:after {
    content: \"\\e957\";
    font-family: Material-Icons;
    font-size: 19px;
    float: right;
    position: relative;
    top: -1px;
    transition: .3s all;
    transform: rotate(0deg);
  }
  &.active {
    > .accordion-header:after {
      transform: rotate(-180deg);
    }
    .accordion .accordion-header:before {
      opacity: 0;
    }
  }
  .accordion__item .accordion-header {
    background: #f7f7f7;
    color: \$body-font-color;
  }
}", "@Publication/Front/sass/gui/_accordion.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_accordion.scss");
    }
}
