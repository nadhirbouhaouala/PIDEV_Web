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

/* @Publication/Front/sass/vendor/_bootstrap-range-slider.scss */
class __TwigTemplate_ef1db7f18a1b333377c4902c4995776ab0a5ad501fe1853500ef09e90cc15558 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_bootstrap-range-slider.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_bootstrap-range-slider.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Boostrap Slider
------------------------------------- */

input {
  &.range-slider, &.default-slider {
    display: none;
  }
}

.slider {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  &.slider-horizontal {
    width: calc(100% - 20px);
    margin-left: 11px;
    height: 20px;
    .slider-track {
      height: 3px;
      width: calc(100% + 18px);
      margin-top: -2px;
      top: 50%;
      left: -9px;
    }
    .slider-selection, .slider-track-low, .slider-track-high {
      height: 100%;
      top: 0;
      bottom: 0;
    }
    .slider-handle {
      margin-left: -11px;
    }
    .slider-tick-label-container {
      white-space: nowrap;
      margin-top: 20px;
    }
    .tooltip {
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
      position: absolute;
    }
  }
  input {
    display: none;
  }
  .tooltip.top {
    margin-top: -40px;
  }
  .tooltip-inner {
    white-space: nowrap;
    max-width: none;
    background-color: #333;
    padding: 4px 12px;
    line-height: 21px;
    color: #fff;
    font-size: 14px;
    border-radius: \$global-border-radius;
  }
  .tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #333;
  }
}

.tooltip {
  &.tooltip-min, &.tooltip-max {
    display: none;
  }
}

.slider .hide {
  display: none;
}

.slider-track {
  position: absolute;
  cursor: pointer;
  border-radius: \$global-border-radius;
  background-color: #e0e0e0;
}

.slider-selection {
  position: absolute;
  background-color: \$primary-color;
  box-sizing: border-box;
  border-radius: \$global-border-radius;
}

.slider-track-low, .slider-track-high {
  position: absolute;
  background: transparent;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: \$global-border-radius;
}

.slider-handle {
  position: absolute;
  top: 0;
  width: 20px;
  height: 20px;
  border: 2px solid \$primary-color;
  cursor: pointer;
  z-index: 20;
  border-radius: 50%;
  &:after {
    position: absolute;
    content: \"\";
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background-color: #fff;
    border-radius: 50%;
    z-index: 30;
    display: block;
    box-shadow: 0 0 0px 6px rgba(\$primary-color, 0.12);
    transition: 0.2s;
  }
  &:hover:after {
    box-shadow: 0 0 0px 8px rgba(\$primary-color, 0.12);
  }
  &.custom {
    position: absolute;
    top: -5px;
    width: 40px;
    height: 29px;
    border: none;
    cursor: pointer;
    z-index: 20;
    border-radius: \$global-border-radius;
    background-color: #fff;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.15);
    text-align: center;
    &:after {
      display: none;
    }
    &:before {
      content: \"\\e958 \\e959\";
      font-family: \"Material-Icons\";
      letter-spacing: -10px;
      font-size: 21px;
      color: #a0a0a0;
      margin-left: -10px;
      transition: 0.3s;
    }
    &:hover:before {
      color: \$body-heading-color;
    }
  }
}

.slider.slider-horizontal .slider-handle.custom {
  margin-left: -20px;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/vendor/_bootstrap-range-slider.scss";
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
/* Boostrap Slider
------------------------------------- */

input {
  &.range-slider, &.default-slider {
    display: none;
  }
}

.slider {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  &.slider-horizontal {
    width: calc(100% - 20px);
    margin-left: 11px;
    height: 20px;
    .slider-track {
      height: 3px;
      width: calc(100% + 18px);
      margin-top: -2px;
      top: 50%;
      left: -9px;
    }
    .slider-selection, .slider-track-low, .slider-track-high {
      height: 100%;
      top: 0;
      bottom: 0;
    }
    .slider-handle {
      margin-left: -11px;
    }
    .slider-tick-label-container {
      white-space: nowrap;
      margin-top: 20px;
    }
    .tooltip {
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
      position: absolute;
    }
  }
  input {
    display: none;
  }
  .tooltip.top {
    margin-top: -40px;
  }
  .tooltip-inner {
    white-space: nowrap;
    max-width: none;
    background-color: #333;
    padding: 4px 12px;
    line-height: 21px;
    color: #fff;
    font-size: 14px;
    border-radius: \$global-border-radius;
  }
  .tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #333;
  }
}

.tooltip {
  &.tooltip-min, &.tooltip-max {
    display: none;
  }
}

.slider .hide {
  display: none;
}

.slider-track {
  position: absolute;
  cursor: pointer;
  border-radius: \$global-border-radius;
  background-color: #e0e0e0;
}

.slider-selection {
  position: absolute;
  background-color: \$primary-color;
  box-sizing: border-box;
  border-radius: \$global-border-radius;
}

.slider-track-low, .slider-track-high {
  position: absolute;
  background: transparent;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: \$global-border-radius;
}

.slider-handle {
  position: absolute;
  top: 0;
  width: 20px;
  height: 20px;
  border: 2px solid \$primary-color;
  cursor: pointer;
  z-index: 20;
  border-radius: 50%;
  &:after {
    position: absolute;
    content: \"\";
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background-color: #fff;
    border-radius: 50%;
    z-index: 30;
    display: block;
    box-shadow: 0 0 0px 6px rgba(\$primary-color, 0.12);
    transition: 0.2s;
  }
  &:hover:after {
    box-shadow: 0 0 0px 8px rgba(\$primary-color, 0.12);
  }
  &.custom {
    position: absolute;
    top: -5px;
    width: 40px;
    height: 29px;
    border: none;
    cursor: pointer;
    z-index: 20;
    border-radius: \$global-border-radius;
    background-color: #fff;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.15);
    text-align: center;
    &:after {
      display: none;
    }
    &:before {
      content: \"\\e958 \\e959\";
      font-family: \"Material-Icons\";
      letter-spacing: -10px;
      font-size: 21px;
      color: #a0a0a0;
      margin-left: -10px;
      transition: 0.3s;
    }
    &:hover:before {
      color: \$body-heading-color;
    }
  }
}

.slider.slider-horizontal .slider-handle.custom {
  margin-left: -20px;
}", "@Publication/Front/sass/vendor/_bootstrap-range-slider.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\vendor\\_bootstrap-range-slider.scss");
    }
}
