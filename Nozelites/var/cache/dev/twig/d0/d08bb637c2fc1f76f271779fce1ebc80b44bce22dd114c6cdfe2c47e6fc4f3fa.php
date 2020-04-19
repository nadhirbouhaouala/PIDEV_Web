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

/* @Publication/Front/sass/layout/_contact-page.scss */
class __TwigTemplate_f93e2374213aef7bec1e78add820674381aa026d4ec3d1225aadc9d4a96b8247 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_contact-page.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_contact-page.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Contact Page
------------------------------------- */

.contact-location-info {
  display: flex;
  align-content: center;
  justify-content: center;
  background-color: #fff;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);

  .contact-address {
    flex: 1;
  }

  #single-job-map-container {
    flex: 1;
    #singleListingMap {
      border-radius: 0 \$global-border-radius \$global-border-radius 0;
    }

  }

  .contact-address {
    border: 1px solid #e0e0e0;
    border-right: 0;
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
    display: flex;

    > ul {
      align-self: center;
      padding: 40px;
      margin: 0;
      list-style: none;
      font-size: 18px;
      color: #808080;
    }

    ul li {
      padding: 2px 0;
    }

  }
  
  .freelancer-socials {
    margin-top: 10px;
    margin-left: -8px;
    transform: scale(0.9);
  }
}

.contact-address-headline {
  color: \$body-heading-color;
  font-weight: 600;
  &:after {
    content: \"\";
    height: 2px;
    width: 25px;
    background-color: \$primary-color;
    position: relative;
    display: block;
    margin: 15px 0;
    border-radius: 3px;
  }
}

@media (max-width: 768px) {
  .contact-location-info {
    flex-direction: column;
    .contact-address {
      border: 1px solid #e0e0e0;
      border-bottom: none;
      border-radius: \$global-border-radius \$global-border-radius 0 0;
    }
    #single-job-map-container #singleListingMap {
      border-radius: 0 0 \$global-border-radius \$global-border-radius;
    }
  }
}

#contact div input {
  margin-bottom: 22px;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_contact-page.scss";
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
/* Contact Page
------------------------------------- */

.contact-location-info {
  display: flex;
  align-content: center;
  justify-content: center;
  background-color: #fff;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);

  .contact-address {
    flex: 1;
  }

  #single-job-map-container {
    flex: 1;
    #singleListingMap {
      border-radius: 0 \$global-border-radius \$global-border-radius 0;
    }

  }

  .contact-address {
    border: 1px solid #e0e0e0;
    border-right: 0;
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
    display: flex;

    > ul {
      align-self: center;
      padding: 40px;
      margin: 0;
      list-style: none;
      font-size: 18px;
      color: #808080;
    }

    ul li {
      padding: 2px 0;
    }

  }
  
  .freelancer-socials {
    margin-top: 10px;
    margin-left: -8px;
    transform: scale(0.9);
  }
}

.contact-address-headline {
  color: \$body-heading-color;
  font-weight: 600;
  &:after {
    content: \"\";
    height: 2px;
    width: 25px;
    background-color: \$primary-color;
    position: relative;
    display: block;
    margin: 15px 0;
    border-radius: 3px;
  }
}

@media (max-width: 768px) {
  .contact-location-info {
    flex-direction: column;
    .contact-address {
      border: 1px solid #e0e0e0;
      border-bottom: none;
      border-radius: \$global-border-radius \$global-border-radius 0 0;
    }
    #single-job-map-container #singleListingMap {
      border-radius: 0 0 \$global-border-radius \$global-border-radius;
    }
  }
}

#contact div input {
  margin-bottom: 22px;
}", "@Publication/Front/sass/layout/_contact-page.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_contact-page.scss");
    }
}
