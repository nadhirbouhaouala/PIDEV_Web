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

/* @Publication/Front/sass/gui/_bidding-widget.scss */
class __TwigTemplate_9531a962b46bec681c63dc048a3f2e8446ae7c5f39bb88f8a804e19364a1aeb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_bidding-widget.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_bidding-widget.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Bidding Widget
------------------------------------- */

.bidding-widget {
  border-radius: \$global-border-radius;
  background-color: #f9f9f9;
}

.dashboard-box .bidding-widget, .popup-tab-content .bidding-widget {
  border-radius: 0;
  background-color: transparent;
}

.dashboard-box .slider-handle.custom, .popup-tab-content .slider-handle.custom {
  border: 1px solid #e0e0e0;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
}

.bidding-widget {
  .bidding-headline {
    background-color: #f0f0f0;
    color: \$body-heading-color;
    position: relative;
    border-radius: \$global-border-radius \$global-border-radius 0 0;
  }
  .bidding-inner {
    padding: 30px 35px;
  }
  .bidding-headline {
    color: \$body-heading-color;
    font-size: 20px;
    padding: 20px 35px;
    h3 {
      color: \$body-heading-color;
      font-size: 20px;
      padding: 0;
      margin: 0;
    }
  }
  .bidding-signup {
    color: \$body-font-color;
    font-size: 14.7px;
    padding: 16px 35px;
    text-align: center;
    border-top: 1px solid #e0e0e0;
    a {
      font-weight: 600;
    }
  }
  button.button {
    margin-bottom: 3px;
  }
  .bidding-detail {
    color: #888;
    display: block;
    strong {
      color: \$body-heading-color;
      font-weight: 700;
    }
  }
}

.dashboard-box .bidding-detail strong {
  font-weight: 600;
}

.bidding-widget {
  .bidding-value {
    font-size: 26px;
    font-weight: 500;
    color: \$body-heading-color;
    margin: 5px 0 20px 0;
    font-size: 26px;
    font-weight: 500;
    color: \$body-heading-color;
  }
  .button {
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
    transition: 0.3s;
    height: 46px;
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
      transform: translateY(-2px);
    }
  }
  .bidding-fields {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    margin-top: 12px;
    width: calc(100% + 20px);
    .bidding-field {
      flex: 1;
      margin-right: 20px;
    }
  }
}

/* Quantity Buttons for Booking Widget*/

.qtyButtons {
  display: flex;
  margin: 0;
  background: #fff;
  border-radius: \$global-border-radius;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  height: 48px;
  padding: 6px;
  &.with-border {
    border: 1px solid #e0e0e0;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
  }
  input {
    outline: 0;
    font-size: \$body-font-size;
    font-weight: 600;
    text-align: center;
    width: 50px;
    height: 36px;
    color: #808080;
    line-height: 36px;
    margin: 0 !important;
    padding: 0 5px;
    border: none;
    box-shadow: none;
    display: inline-block;
    flex-grow: 1;
    box-shadow: none !important;
  }
}

.qtyTitle {
  font-size: \$body-font-size;
  font-weight: 600;
  line-height: 36px;
  padding-right: 15px;
  display: block;
  flex: 1;
}

.qtyInc, .qtyDec {
  width: 36px;
  height: 36px;
  line-height: 36px;
  font-size: 18px;
  background-color: #f0f0f0;
  color: #808080;
  display: inline-block;
  text-align: center;
  border-radius: \$global-border-radius;
  cursor: pointer;
  font-family: \"Feather-Icons\";
  flex: 1;
  min-width: 36px;
  max-width: 36px;
  transition: 0.3s;
}

.qtyInc:before {
  content: \"\\e9b1\";
}

.qtyDec:before {
  content: \"\\e996\";
}

.qtyInc:hover, .qtyDec:hover {
  background-color: \$primary-color;
  color: #fff;
}

.qtyTotal {
  background-color: \$primary-color;
  border-radius: 50%;
  color: #fff;
  display: inline-block;
  font-size: 11px;
  font-weight: 600;
  font-family: \"Open Sans\", sans-serif;
  line-height: 18px;
  text-align: center;
  position: relative;
  top: -2px;
  left: 2px;
  height: 18px;
  width: 18px;
}

/* Media Queiers for Bidding Widget */
@media (max-width: 1366px) {
  .qtyInc, .qtyDec {
    min-width: 34px;
    max-width: 34px;
  }
  .bidding-widget {
    .bidding-inner {
      padding: 27px 32px;
    }
    .bidding-headline {
      padding: 20px 32px;
    }
  }
}

@media (max-width: 1240px) {
  .qtyInc, .qtyDec {
    min-width: 36px;
    max-width: 36px;
  }
  .bidding-widget .bidding-fields {
    .bidding-field {
      flex: auto;
      margin-right: 0;
      width: 100%;
      &:first-child {
        margin-bottom: 20px;
      }
    }
    width: 100%;
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_bidding-widget.scss";
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
/* Bidding Widget
------------------------------------- */

.bidding-widget {
  border-radius: \$global-border-radius;
  background-color: #f9f9f9;
}

.dashboard-box .bidding-widget, .popup-tab-content .bidding-widget {
  border-radius: 0;
  background-color: transparent;
}

.dashboard-box .slider-handle.custom, .popup-tab-content .slider-handle.custom {
  border: 1px solid #e0e0e0;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
}

.bidding-widget {
  .bidding-headline {
    background-color: #f0f0f0;
    color: \$body-heading-color;
    position: relative;
    border-radius: \$global-border-radius \$global-border-radius 0 0;
  }
  .bidding-inner {
    padding: 30px 35px;
  }
  .bidding-headline {
    color: \$body-heading-color;
    font-size: 20px;
    padding: 20px 35px;
    h3 {
      color: \$body-heading-color;
      font-size: 20px;
      padding: 0;
      margin: 0;
    }
  }
  .bidding-signup {
    color: \$body-font-color;
    font-size: 14.7px;
    padding: 16px 35px;
    text-align: center;
    border-top: 1px solid #e0e0e0;
    a {
      font-weight: 600;
    }
  }
  button.button {
    margin-bottom: 3px;
  }
  .bidding-detail {
    color: #888;
    display: block;
    strong {
      color: \$body-heading-color;
      font-weight: 700;
    }
  }
}

.dashboard-box .bidding-detail strong {
  font-weight: 600;
}

.bidding-widget {
  .bidding-value {
    font-size: 26px;
    font-weight: 500;
    color: \$body-heading-color;
    margin: 5px 0 20px 0;
    font-size: 26px;
    font-weight: 500;
    color: \$body-heading-color;
  }
  .button {
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
    transition: 0.3s;
    height: 46px;
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
      transform: translateY(-2px);
    }
  }
  .bidding-fields {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    margin-top: 12px;
    width: calc(100% + 20px);
    .bidding-field {
      flex: 1;
      margin-right: 20px;
    }
  }
}

/* Quantity Buttons for Booking Widget*/

.qtyButtons {
  display: flex;
  margin: 0;
  background: #fff;
  border-radius: \$global-border-radius;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  height: 48px;
  padding: 6px;
  &.with-border {
    border: 1px solid #e0e0e0;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
  }
  input {
    outline: 0;
    font-size: \$body-font-size;
    font-weight: 600;
    text-align: center;
    width: 50px;
    height: 36px;
    color: #808080;
    line-height: 36px;
    margin: 0 !important;
    padding: 0 5px;
    border: none;
    box-shadow: none;
    display: inline-block;
    flex-grow: 1;
    box-shadow: none !important;
  }
}

.qtyTitle {
  font-size: \$body-font-size;
  font-weight: 600;
  line-height: 36px;
  padding-right: 15px;
  display: block;
  flex: 1;
}

.qtyInc, .qtyDec {
  width: 36px;
  height: 36px;
  line-height: 36px;
  font-size: 18px;
  background-color: #f0f0f0;
  color: #808080;
  display: inline-block;
  text-align: center;
  border-radius: \$global-border-radius;
  cursor: pointer;
  font-family: \"Feather-Icons\";
  flex: 1;
  min-width: 36px;
  max-width: 36px;
  transition: 0.3s;
}

.qtyInc:before {
  content: \"\\e9b1\";
}

.qtyDec:before {
  content: \"\\e996\";
}

.qtyInc:hover, .qtyDec:hover {
  background-color: \$primary-color;
  color: #fff;
}

.qtyTotal {
  background-color: \$primary-color;
  border-radius: 50%;
  color: #fff;
  display: inline-block;
  font-size: 11px;
  font-weight: 600;
  font-family: \"Open Sans\", sans-serif;
  line-height: 18px;
  text-align: center;
  position: relative;
  top: -2px;
  left: 2px;
  height: 18px;
  width: 18px;
}

/* Media Queiers for Bidding Widget */
@media (max-width: 1366px) {
  .qtyInc, .qtyDec {
    min-width: 34px;
    max-width: 34px;
  }
  .bidding-widget {
    .bidding-inner {
      padding: 27px 32px;
    }
    .bidding-headline {
      padding: 20px 32px;
    }
  }
}

@media (max-width: 1240px) {
  .qtyInc, .qtyDec {
    min-width: 36px;
    max-width: 36px;
  }
  .bidding-widget .bidding-fields {
    .bidding-field {
      flex: auto;
      margin-right: 0;
      width: 100%;
      &:first-child {
        margin-bottom: 20px;
      }
    }
    width: 100%;
  }
}
", "@Publication/Front/sass/gui/_bidding-widget.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_bidding-widget.scss");
    }
}
