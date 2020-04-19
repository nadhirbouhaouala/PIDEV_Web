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

/* @Publication/Front/sass/gui/_pricing-plans.scss */
class __TwigTemplate_32ed14842a2a194f8c80da4979beb888308183a1c6b366203beb8e5c476d3baa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_pricing-plans.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_pricing-plans.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Pricing Plans
------------------------------------- */

.billing-cycle-radios {
  display: block;
  margin: 0 auto;
  text-align: center;
  &.text-align-left {
    text-align: left;
  }
  .radio {
    margin-right: 20px;
    &:last-child {
      margin-right: 0;
    }
  }
}

/* Pricing Plans Container */

.pricing-plans-container {
  border-radius: \$global-border-radius;
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
  display: flex;
}

.pricing-plan {
  flex: 1;
  padding: 35px 17px;
  position: relative;
  &:first-of-type {
    padding-left: 35px;
  }
  &:last-of-type {
    padding-right: 35px;
  }
  h3 {
    font-size: 20px;
    font-weight: 600;
  }
  p {
    margin: 0;
  }
}

/* Label Switcher */

.billed-yearly-label {
  display: none;
}

.billed-yearly {
  .billed-yearly-label {
    display: block;
  }
  .billed-monthly-label {
    display: none;
  }
}

/* Pricing Plan Label */

.pricing-plan-label {
  background: #f6f6f6;
  border-radius: \$global-border-radius;
  font-size: 18px;
  color: #888;
  text-align: center;
  line-height: 24px;
  padding: 15px;
  margin: 22px 0;
  strong {
    font-size: 32px;
    font-weight: 700;
    color: \$body-heading-color;
    margin-right: 5px;
    line-height: 30px;
  }
}

.recommended .pricing-plan-label {
  background-color: rgba(\$primary-color, 0.06);
  color: \$primary-color;
  strong {
    color: \$primary-color;
  }
}

/* Pricing Plan Features */

.pricing-plan-features {
  strong {
    color: \$body-heading-color;
    font-weight: 600;
    margin-bottom: 5px;
    line-height: 24px;
    display: inline-block;
  }
  ul {
    padding: 0;
    margin: 0;
    li {
      display: block;
      margin: 0;
      padding: 3px 0;
      line-height: 24px;
    }
  }
}

/* Pricing Plan Button */

.pricing-plan {
  .button:hover, &.recommended .button {
    color: #fff;
    background-color: \$primary-color;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
  }
  .button {
    color: \$primary-color;
    background-color: #fff;
    border: 1px solid \$primary-color;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.1);
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
    }
  }
  &.recommended {
    box-shadow: 0 0px 45px rgba(0, 0, 0, 0.09);
    padding: 35px;
    margin: 0 15px;
  }
  .recommended-badge {
    background-color: \$primary-color;
    color: #fff;
    position: absolute;
    width: 100%;
    height: 45px;
    top: -45px;
    left: 0;
    text-align: center;
    border-radius: \$global-border-radius \$global-border-radius 0 0;
    font-weight: 600;
    line-height: 45px;
  }
}

/* Recommended Plan */

/* Media Queries for Pricing Plans */
@media (max-width: 992px) {
  .pricing-plans-container {
    box-shadow: none;
    display: block;
    margin-top: -40px;
  }
  .pricing-plan {
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
    flex: auto;
    width: 100%;
    border-radius: \$global-border-radius;
    padding: 35px;
    &.recommended {
      padding: 35px;
      margin: 0 0 40px 0;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
      margin-top: 80px;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_pricing-plans.scss";
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
/* Pricing Plans
------------------------------------- */

.billing-cycle-radios {
  display: block;
  margin: 0 auto;
  text-align: center;
  &.text-align-left {
    text-align: left;
  }
  .radio {
    margin-right: 20px;
    &:last-child {
      margin-right: 0;
    }
  }
}

/* Pricing Plans Container */

.pricing-plans-container {
  border-radius: \$global-border-radius;
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
  display: flex;
}

.pricing-plan {
  flex: 1;
  padding: 35px 17px;
  position: relative;
  &:first-of-type {
    padding-left: 35px;
  }
  &:last-of-type {
    padding-right: 35px;
  }
  h3 {
    font-size: 20px;
    font-weight: 600;
  }
  p {
    margin: 0;
  }
}

/* Label Switcher */

.billed-yearly-label {
  display: none;
}

.billed-yearly {
  .billed-yearly-label {
    display: block;
  }
  .billed-monthly-label {
    display: none;
  }
}

/* Pricing Plan Label */

.pricing-plan-label {
  background: #f6f6f6;
  border-radius: \$global-border-radius;
  font-size: 18px;
  color: #888;
  text-align: center;
  line-height: 24px;
  padding: 15px;
  margin: 22px 0;
  strong {
    font-size: 32px;
    font-weight: 700;
    color: \$body-heading-color;
    margin-right: 5px;
    line-height: 30px;
  }
}

.recommended .pricing-plan-label {
  background-color: rgba(\$primary-color, 0.06);
  color: \$primary-color;
  strong {
    color: \$primary-color;
  }
}

/* Pricing Plan Features */

.pricing-plan-features {
  strong {
    color: \$body-heading-color;
    font-weight: 600;
    margin-bottom: 5px;
    line-height: 24px;
    display: inline-block;
  }
  ul {
    padding: 0;
    margin: 0;
    li {
      display: block;
      margin: 0;
      padding: 3px 0;
      line-height: 24px;
    }
  }
}

/* Pricing Plan Button */

.pricing-plan {
  .button:hover, &.recommended .button {
    color: #fff;
    background-color: \$primary-color;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
  }
  .button {
    color: \$primary-color;
    background-color: #fff;
    border: 1px solid \$primary-color;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.1);
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
    }
  }
  &.recommended {
    box-shadow: 0 0px 45px rgba(0, 0, 0, 0.09);
    padding: 35px;
    margin: 0 15px;
  }
  .recommended-badge {
    background-color: \$primary-color;
    color: #fff;
    position: absolute;
    width: 100%;
    height: 45px;
    top: -45px;
    left: 0;
    text-align: center;
    border-radius: \$global-border-radius \$global-border-radius 0 0;
    font-weight: 600;
    line-height: 45px;
  }
}

/* Recommended Plan */

/* Media Queries for Pricing Plans */
@media (max-width: 992px) {
  .pricing-plans-container {
    box-shadow: none;
    display: block;
    margin-top: -40px;
  }
  .pricing-plan {
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
    flex: auto;
    width: 100%;
    border-radius: \$global-border-radius;
    padding: 35px;
    &.recommended {
      padding: 35px;
      margin: 0 0 40px 0;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
      margin-top: 80px;
    }
  }
}", "@Publication/Front/sass/gui/_pricing-plans.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_pricing-plans.scss");
    }
}
