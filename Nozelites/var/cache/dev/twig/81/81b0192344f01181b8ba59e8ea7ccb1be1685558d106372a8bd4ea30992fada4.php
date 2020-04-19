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

/* @Publication/Front/sass/vendor/_snackbar.scss */
class __TwigTemplate_7aec9e78980eb8fe1587291e5d580e5aabc7808cf2be01d5a27d5a992f5600e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_snackbar.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_snackbar.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Snackbar
------------------------------------- */

.snackbar-container {
  transition: all 500ms ease;
  transition-property: top, right, bottom, left, opacity;
  font-size: \$body-font-size;
  min-height: 14px;
  background-color: #404040;
  position: fixed;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  line-height: 22px;
  padding: 18px 24px;
  bottom: -100px;
  top: -100px;
  opacity: 0;
  z-index: 9999;
  cursor: default;
  border-radius: \$global-border-radius;
  font-weight: 500;
  .action {
    background: inherit;
    display: inline-block;
    border: none;
    font-size: inherit;
    text-transform: uppercase;
    color: #aaa;
    margin: 0 0 0 24px;
    padding: 0;
    min-width: min-content;
    cursor: pointer;
    font-weight: 500;
    font-size: 14px;
  }
}

@media (min-width: 640px) {
  .snackbar-container {
    display: inline-flex;
    margin: 24px;
  }
}

.snackbar-pos {
  &.bottom-center {
    top: auto !important;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 0);
  }
  &.bottom-left {
    top: auto !important;
    bottom: 0;
    left: 0;
  }
  &.bottom-right {
    top: auto !important;
    bottom: 0;
    right: 0;
  }
  &.top-left {
    bottom: auto !important;
    top: 0;
    left: 0;
  }
  &.top-center {
    bottom: auto !important;
    top: 0;
    left: 50%;
    transform: translate(-50%, 0);
  }
  &.top-right {
    bottom: auto !important;
    top: 0;
    right: 0;
  }
}

@media (max-width: 640px) {
  .snackbar-container {
    left: 0;
    right: 0;
    width: 100%;
    border-radius: 0;
  }
  .snackbar-pos {
    &.bottom-center, &.top-center {
      left: 0;
      transform: none;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/vendor/_snackbar.scss";
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
/* Snackbar
------------------------------------- */

.snackbar-container {
  transition: all 500ms ease;
  transition-property: top, right, bottom, left, opacity;
  font-size: \$body-font-size;
  min-height: 14px;
  background-color: #404040;
  position: fixed;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  line-height: 22px;
  padding: 18px 24px;
  bottom: -100px;
  top: -100px;
  opacity: 0;
  z-index: 9999;
  cursor: default;
  border-radius: \$global-border-radius;
  font-weight: 500;
  .action {
    background: inherit;
    display: inline-block;
    border: none;
    font-size: inherit;
    text-transform: uppercase;
    color: #aaa;
    margin: 0 0 0 24px;
    padding: 0;
    min-width: min-content;
    cursor: pointer;
    font-weight: 500;
    font-size: 14px;
  }
}

@media (min-width: 640px) {
  .snackbar-container {
    display: inline-flex;
    margin: 24px;
  }
}

.snackbar-pos {
  &.bottom-center {
    top: auto !important;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 0);
  }
  &.bottom-left {
    top: auto !important;
    bottom: 0;
    left: 0;
  }
  &.bottom-right {
    top: auto !important;
    bottom: 0;
    right: 0;
  }
  &.top-left {
    bottom: auto !important;
    top: 0;
    left: 0;
  }
  &.top-center {
    bottom: auto !important;
    top: 0;
    left: 50%;
    transform: translate(-50%, 0);
  }
  &.top-right {
    bottom: auto !important;
    top: 0;
    right: 0;
  }
}

@media (max-width: 640px) {
  .snackbar-container {
    left: 0;
    right: 0;
    width: 100%;
    border-radius: 0;
  }
  .snackbar-pos {
    &.bottom-center, &.top-center {
      left: 0;
      transform: none;
    }
  }
}", "@Publication/Front/sass/vendor/_snackbar.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\vendor\\_snackbar.scss");
    }
}
