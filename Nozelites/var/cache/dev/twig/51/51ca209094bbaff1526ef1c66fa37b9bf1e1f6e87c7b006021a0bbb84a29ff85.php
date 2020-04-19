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

/* @Publication/Front/sass/vendor/_custom-scrollbar.scss */
class __TwigTemplate_33453a5fb5849b2c3b6d3e4be06bfe30d8f3384d6651bd334e0e4c6ccb4f9924 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_custom-scrollbar.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_custom-scrollbar.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Simlpebar.js (custom scrollbar)
------------------------------------- */

[data-simplebar] {
  position: relative;
  z-index: 0;
  overflow: hidden !important;
  max-height: inherit;
  -webkit-overflow-scrolling: touch;
  /* Trigger native scrolling for mobile, if not supported, plugin is used. */
}

[data-simplebar=\"init\"] {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.simplebar-scroll-content {
  overflow-x: hidden !important;
  overflow-y: scroll;
  min-width: 100% !important;
  max-height: inherit !important;
  -webkit-box-sizing: content-box !important;
  box-sizing: content-box !important;
}

.simplebar-content {
  overflow-y: hidden !important;
  overflow-x: scroll;
  -webkit-box-sizing: border-box !important;
  box-sizing: border-box !important;
  min-height: 100% !important;
}

.simplebar-track {
  z-index: 1;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 11px;
  height: calc(100% - 6px);
  margin-top: 6px;
}

.simplebar-scrollbar {
  position: absolute;
  right: 6px;
  width: 5px;
  min-height: 10px;
  &:before {
    position: absolute;
    content: \"\";
    background: black;
    border-radius: 7px;
    left: 0;
    right: 0;
    opacity: 0;
    transition: opacity 0.2s, background-color 0.3s;
    background-color: #d8d8d8;
  }
  &:hover:before {
    background-color: #c8c8c8;
  }
}

.simplebar-track {
  &:hover .simplebar-scrollbar:before, .simplebar-scrollbar.visible:before {
    /* When hovered, remove all transitions from drag handle */
    opacity: 1;
    -webkit-transition: opacity 0 linear;
    transition: opacity 0 linear;
  }
  &.vertical {
    top: 0;
    .simplebar-scrollbar:before {
      top: 2px;
      bottom: 2px;
    }
  }
  &.horizontal {
    left: 0;
    width: auto;
    height: 11px;
    display: none;
    .simplebar-scrollbar {
      &:before {
        height: 100%;
        left: 2px;
        right: 2px;
      }
      right: auto;
      top: 2px;
      height: 7px;
      min-height: 0;
      min-width: 10px;
      width: auto;
    }
  }
}

body.gray .dashboard-content-container .simplebar-scrollbar {
  &:before {
    background-color: #c9c9c9;
  }
  &:hover:before {
    background-color: #b9b9b9;
  }
}

.dashboard-box {
  .simplebar-scrollbar:before {
    background-color: #d8d8d8;
  }
  .simplebar-scrollbarLhover:before {
    background-color: #c8c8c8;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/vendor/_custom-scrollbar.scss";
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
/* Simlpebar.js (custom scrollbar)
------------------------------------- */

[data-simplebar] {
  position: relative;
  z-index: 0;
  overflow: hidden !important;
  max-height: inherit;
  -webkit-overflow-scrolling: touch;
  /* Trigger native scrolling for mobile, if not supported, plugin is used. */
}

[data-simplebar=\"init\"] {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.simplebar-scroll-content {
  overflow-x: hidden !important;
  overflow-y: scroll;
  min-width: 100% !important;
  max-height: inherit !important;
  -webkit-box-sizing: content-box !important;
  box-sizing: content-box !important;
}

.simplebar-content {
  overflow-y: hidden !important;
  overflow-x: scroll;
  -webkit-box-sizing: border-box !important;
  box-sizing: border-box !important;
  min-height: 100% !important;
}

.simplebar-track {
  z-index: 1;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 11px;
  height: calc(100% - 6px);
  margin-top: 6px;
}

.simplebar-scrollbar {
  position: absolute;
  right: 6px;
  width: 5px;
  min-height: 10px;
  &:before {
    position: absolute;
    content: \"\";
    background: black;
    border-radius: 7px;
    left: 0;
    right: 0;
    opacity: 0;
    transition: opacity 0.2s, background-color 0.3s;
    background-color: #d8d8d8;
  }
  &:hover:before {
    background-color: #c8c8c8;
  }
}

.simplebar-track {
  &:hover .simplebar-scrollbar:before, .simplebar-scrollbar.visible:before {
    /* When hovered, remove all transitions from drag handle */
    opacity: 1;
    -webkit-transition: opacity 0 linear;
    transition: opacity 0 linear;
  }
  &.vertical {
    top: 0;
    .simplebar-scrollbar:before {
      top: 2px;
      bottom: 2px;
    }
  }
  &.horizontal {
    left: 0;
    width: auto;
    height: 11px;
    display: none;
    .simplebar-scrollbar {
      &:before {
        height: 100%;
        left: 2px;
        right: 2px;
      }
      right: auto;
      top: 2px;
      height: 7px;
      min-height: 0;
      min-width: 10px;
      width: auto;
    }
  }
}

body.gray .dashboard-content-container .simplebar-scrollbar {
  &:before {
    background-color: #c9c9c9;
  }
  &:hover:before {
    background-color: #b9b9b9;
  }
}

.dashboard-box {
  .simplebar-scrollbar:before {
    background-color: #d8d8d8;
  }
  .simplebar-scrollbarLhover:before {
    background-color: #c8c8c8;
  }
}", "@Publication/Front/sass/vendor/_custom-scrollbar.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\vendor\\_custom-scrollbar.scss");
    }
}
