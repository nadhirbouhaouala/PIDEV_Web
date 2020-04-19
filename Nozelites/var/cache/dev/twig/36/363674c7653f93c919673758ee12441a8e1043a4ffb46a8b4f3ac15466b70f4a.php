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

/* @Publication/Front/sass/gui/_photo-box.scss */
class __TwigTemplate_2b8c3b8ac59596c97dc906f861ab11f695b2e1efd5e944ae191f80cd5a146aa9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_photo-box.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_photo-box.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Photo Box
------------------------------------- */

.photo-box {
  border-radius: \$global-border-radius;
  height: 360px;
  display: block;
  position: relative;
  background-size: cover;
  background-position: 100%;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
  transition: 0.4s;
  margin: 0 0 25px 0;
  &:before {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: #333;
    opacity: 0.5;
    border-radius: \$global-border-radius;
    transition: 0.4s;
  }
}

.photo-box-content {
  position: absolute;
  bottom: 30px;
  left: 30px;
  h3 {
    color: #fff;
    font-size: 20px;
    line-height: 28px;
  }
  span {
    color: \$body-heading-color;
    background: #fff;
    border-radius: \$global-border-radius;
    font-size: 15px;
    font-weight: 500;
    padding: 4px 10px;
    line-height: 20px;
    margin-top: 8px;
    display: inline-block;
  }
}

/* Hover State */

.photo-box {
  &:hover {
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
    transform: translateY(-10px);
    &:before {
      background: \$primary-color;
      opacity: 0.95;
    }
  }
  &.small {
    height: 160px;
    margin-bottom: 30px;
    &:hover {
      transform: translateY(-5px);
    }
    .photo-box-content {
      left: 0;
      right: 0;
      margin: 0 auto;
      text-align: center;
      bottom: auto;
      top: 50%;
      transform: translateY(-49%);
      h3 {
        font-size: \$body-font-size;
        font-weight: 600;
      }
      span {
        color: #fff;
        background: \$primary-color;
        font-size: 14px;
        line-height: 18px;
        margin-top: 5px;
        transition: 0.3s;
      }
    }
    &:hover .photo-box-content span {
      color: #fff;
      background: rgba(0, 0, 0, 0.2);
    }
  }
}

/* Small Photobox Styles */";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_photo-box.scss";
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
/* Photo Box
------------------------------------- */

.photo-box {
  border-radius: \$global-border-radius;
  height: 360px;
  display: block;
  position: relative;
  background-size: cover;
  background-position: 100%;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
  transition: 0.4s;
  margin: 0 0 25px 0;
  &:before {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: #333;
    opacity: 0.5;
    border-radius: \$global-border-radius;
    transition: 0.4s;
  }
}

.photo-box-content {
  position: absolute;
  bottom: 30px;
  left: 30px;
  h3 {
    color: #fff;
    font-size: 20px;
    line-height: 28px;
  }
  span {
    color: \$body-heading-color;
    background: #fff;
    border-radius: \$global-border-radius;
    font-size: 15px;
    font-weight: 500;
    padding: 4px 10px;
    line-height: 20px;
    margin-top: 8px;
    display: inline-block;
  }
}

/* Hover State */

.photo-box {
  &:hover {
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
    transform: translateY(-10px);
    &:before {
      background: \$primary-color;
      opacity: 0.95;
    }
  }
  &.small {
    height: 160px;
    margin-bottom: 30px;
    &:hover {
      transform: translateY(-5px);
    }
    .photo-box-content {
      left: 0;
      right: 0;
      margin: 0 auto;
      text-align: center;
      bottom: auto;
      top: 50%;
      transform: translateY(-49%);
      h3 {
        font-size: \$body-font-size;
        font-weight: 600;
      }
      span {
        color: #fff;
        background: \$primary-color;
        font-size: 14px;
        line-height: 18px;
        margin-top: 5px;
        transition: 0.3s;
      }
    }
    &:hover .photo-box-content span {
      color: #fff;
      background: rgba(0, 0, 0, 0.2);
    }
  }
}

/* Small Photobox Styles */", "@Publication/Front/sass/gui/_photo-box.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_photo-box.scss");
    }
}
