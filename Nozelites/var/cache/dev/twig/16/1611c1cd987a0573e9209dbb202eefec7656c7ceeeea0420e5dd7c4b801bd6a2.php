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

/* @Publication/Front/sass/vendor/_tooltips.scss */
class __TwigTemplate_d2268a90dd3d62c4be4641f225cd3b008f4d5ef9175122ee778d3a3421e5cec9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_tooltips.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_tooltips.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Tippy.js Tooltips
------------------------------------- */

/* Dark */

.tippy-tooltip.dark-theme {
  color: #fff;
  font-weight: 500;
  font-size: 14px;
  padding: 6px 12px;
  .tippy-backdrop {
    background-color: #333;
  }
}

.tippy-popper {
  &[x-placement^=top] .tippy-tooltip.dark-theme .tippy-arrow {
    border-top-color: \$body-heading-color;
  }
  &[x-placement^=bottom] .tippy-tooltip.dark-theme .tippy-arrow {
    border-bottom-color: \$body-heading-color;
  }
  &[x-placement^=right] .tippy-tooltip.dark-theme .tippy-arrow {
    border-right-color: \$body-heading-color;
  }
  &[x-placement^=left] .tippy-tooltip.dark-theme .tippy-arrow {
    border-left-color: \$body-heading-color;
  }
}

.tippy-tooltip {
  &.dark-theme .tippy-arrow {
    transform: scale(0.7);
  }
  &.light-theme {
    color: \$body-heading-color;
    font-weight: 500;
    font-size: 14px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    padding: 6px 12px;
    background-color: #fff;
  }
}

/* Light */

.tippy-popper {
  &[x-placement^=top] .tippy-tooltip.light-theme .tippy-arrow {
    border-top-color: #fff;
  }
  &[x-placement^=bottom] .tippy-tooltip.light-theme .tippy-arrow {
    border-bottom-color: #fff;
  }
  &[x-placement^=right] .tippy-tooltip.light-theme .tippy-arrow {
    border-right-color: #fff;
  }
  &[x-placement^=left] .tippy-tooltip.light-theme .tippy-arrow {
    border-left-color: #fff;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/vendor/_tooltips.scss";
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
/* Tippy.js Tooltips
------------------------------------- */

/* Dark */

.tippy-tooltip.dark-theme {
  color: #fff;
  font-weight: 500;
  font-size: 14px;
  padding: 6px 12px;
  .tippy-backdrop {
    background-color: #333;
  }
}

.tippy-popper {
  &[x-placement^=top] .tippy-tooltip.dark-theme .tippy-arrow {
    border-top-color: \$body-heading-color;
  }
  &[x-placement^=bottom] .tippy-tooltip.dark-theme .tippy-arrow {
    border-bottom-color: \$body-heading-color;
  }
  &[x-placement^=right] .tippy-tooltip.dark-theme .tippy-arrow {
    border-right-color: \$body-heading-color;
  }
  &[x-placement^=left] .tippy-tooltip.dark-theme .tippy-arrow {
    border-left-color: \$body-heading-color;
  }
}

.tippy-tooltip {
  &.dark-theme .tippy-arrow {
    transform: scale(0.7);
  }
  &.light-theme {
    color: \$body-heading-color;
    font-weight: 500;
    font-size: 14px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    padding: 6px 12px;
    background-color: #fff;
  }
}

/* Light */

.tippy-popper {
  &[x-placement^=top] .tippy-tooltip.light-theme .tippy-arrow {
    border-top-color: #fff;
  }
  &[x-placement^=bottom] .tippy-tooltip.light-theme .tippy-arrow {
    border-bottom-color: #fff;
  }
  &[x-placement^=right] .tippy-tooltip.light-theme .tippy-arrow {
    border-right-color: #fff;
  }
  &[x-placement^=left] .tippy-tooltip.light-theme .tippy-arrow {
    border-left-color: #fff;
  }
}", "@Publication/Front/sass/vendor/_tooltips.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\vendor\\_tooltips.scss");
    }
}
