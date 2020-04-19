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

/* @Publication/Front/sass/gui/_category-boxes.scss */
class __TwigTemplate_d5cb6cd8f58d4f0aa69ffe8c109d40cf76f7c5143b11a0eda00a94bded5fa721 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_category-boxes.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_category-boxes.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Category Boxes
------------------------------------- */

.categories-container {
  display: flex;
  flex-wrap: wrap;
}

.category-box {
  flex: 0 0 25%;
  align-content: center;
  justify-content: center;
  display: flex;
  flex-direction: column;
  margin: 0;
  text-align: center;
  padding: 25px;
  border-radius: \$global-border-radius;
  transition: 0.35s;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .category-box {
    max-width: 25%;
    text-align: center;
  }
  .category-box-counter {
    width: 50px !important;
  }
}

/* IE 11 Fixes - End */

/* Box Icon */

.category-box-icon {
  font-size: 42px;
  line-height: 32px;
  color: \$primary-color;
  position: relative;
  i {
    height: 42px;
    display: block;
    transition: 0.35s;
    margin-bottom: 12px;
  }
}

/* Box Counter */

.category-box-counter {
  width: auto;
  height: 24px;
  font-size: 14px;
  line-height: 25px;
  border-radius: \$global-border-radius;
  padding: 0 8px;
  color: #909090;
  background: rgba(0, 0, 0, 0.06);
  font-weight: 600;
  display: inline-block;
  margin: 0 auto;
  transition: 0.35s;
  margin-bottom: 18px;
}

/* Box Content */

.category-box-content {
  h3 {
    font-size: \$body-font-size;
    font-weight: 600;
    color: \$body-heading-color;
    margin: 0;
    padding: 0;
    transition: 0.35s;
  }
  p {
    color: #888;
    margin: 0;
    padding: 0;
    line-height: 24px;
    margin-top: 5px;
    transition: 0.35s;
  }
}

/* Hover State */

.category-box:hover {
  background: \$primary-color;
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.2);
  color: #fff;
  .category-box-content h3, .category-box-icon {
    color: #fff;
  }
  .category-box-content p {
    color: rgba(255, 255, 255, 0.7);
  }
  .category-box-counter {
    background: rgba(0, 0, 0, 0.2);
    color: #fff;
  }
}

/* Media Queries for Category Boxes */
@media (max-width: 1240px) {
  .category-box {
    flex: 0 0 33.3%;
  }
}

@media (max-width: 768px) {
  .category-box {
    flex: 0 0 50%;
  }
}

@media (max-width: 480px) {
  .category-box {
    flex: 0 0 100%;
    margin-right: 0;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_category-boxes.scss";
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
/* Category Boxes
------------------------------------- */

.categories-container {
  display: flex;
  flex-wrap: wrap;
}

.category-box {
  flex: 0 0 25%;
  align-content: center;
  justify-content: center;
  display: flex;
  flex-direction: column;
  margin: 0;
  text-align: center;
  padding: 25px;
  border-radius: \$global-border-radius;
  transition: 0.35s;
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .category-box {
    max-width: 25%;
    text-align: center;
  }
  .category-box-counter {
    width: 50px !important;
  }
}

/* IE 11 Fixes - End */

/* Box Icon */

.category-box-icon {
  font-size: 42px;
  line-height: 32px;
  color: \$primary-color;
  position: relative;
  i {
    height: 42px;
    display: block;
    transition: 0.35s;
    margin-bottom: 12px;
  }
}

/* Box Counter */

.category-box-counter {
  width: auto;
  height: 24px;
  font-size: 14px;
  line-height: 25px;
  border-radius: \$global-border-radius;
  padding: 0 8px;
  color: #909090;
  background: rgba(0, 0, 0, 0.06);
  font-weight: 600;
  display: inline-block;
  margin: 0 auto;
  transition: 0.35s;
  margin-bottom: 18px;
}

/* Box Content */

.category-box-content {
  h3 {
    font-size: \$body-font-size;
    font-weight: 600;
    color: \$body-heading-color;
    margin: 0;
    padding: 0;
    transition: 0.35s;
  }
  p {
    color: #888;
    margin: 0;
    padding: 0;
    line-height: 24px;
    margin-top: 5px;
    transition: 0.35s;
  }
}

/* Hover State */

.category-box:hover {
  background: \$primary-color;
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.2);
  color: #fff;
  .category-box-content h3, .category-box-icon {
    color: #fff;
  }
  .category-box-content p {
    color: rgba(255, 255, 255, 0.7);
  }
  .category-box-counter {
    background: rgba(0, 0, 0, 0.2);
    color: #fff;
  }
}

/* Media Queries for Category Boxes */
@media (max-width: 1240px) {
  .category-box {
    flex: 0 0 33.3%;
  }
}

@media (max-width: 768px) {
  .category-box {
    flex: 0 0 50%;
  }
}

@media (max-width: 480px) {
  .category-box {
    flex: 0 0 100%;
    margin-right: 0;
  }
}", "@Publication/Front/sass/gui/_category-boxes.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_category-boxes.scss");
    }
}
