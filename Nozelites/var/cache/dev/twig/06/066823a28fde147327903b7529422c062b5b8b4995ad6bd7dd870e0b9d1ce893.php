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

/* @Publication/Front/sass/gui/_photo-section.scss */
class __TwigTemplate_436ba6a883dddc6a88f0451d17493ba44f7b9e369d509ad15287c021bdfd04c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_photo-section.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_photo-section.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Photo Section
------------------------------------- */

.photo-section {
  background-size: cover;
  background-position: 50%;
  display: block;
  position: relative;
  &:before {
    content: \"\";
    width: 100%;
    height: 100%;
    background-color: #333;
    opacity: 0.65;
    display: block;
    position: absolute;
    top: 0;
  }
}

/* Styles for info banner with parallax */

.text-content {
  background: transparent;
  padding: 110px 0px;
  font-weight: 500;
  z-index: 99;
  position: relative;
  &.white-font, h1, h2, h3, h4, h5 {
    color: #fff;
  }
  &.white-font {
    h1, h2, h3, h4, h5 {
      color: #fff;
    }
  }
  a.button {
    font-size: \$body-font-size;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
  }
  p {
    font-size: 18px;
    font-weight: 300;
    line-height: 31px;
    opacity: 0.85;
  }
  h2 {
    margin-bottom: 23px;
    line-height: 46px;
    font-size: 34px;
    font-weight: 500;
  }
}

.top-1 {
  position: relative;
  top: -1px;
}

.top-0 {
  position: relative;
}

@media (max-width: 992px) {
  .text-content {
    padding: 80px 0;
    h2 {
      margin-bottom: 20px;
      line-height: 40px;
      font-size: 30px;
      font-weight: 500;
    }
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_photo-section.scss";
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
/* Photo Section
------------------------------------- */

.photo-section {
  background-size: cover;
  background-position: 50%;
  display: block;
  position: relative;
  &:before {
    content: \"\";
    width: 100%;
    height: 100%;
    background-color: #333;
    opacity: 0.65;
    display: block;
    position: absolute;
    top: 0;
  }
}

/* Styles for info banner with parallax */

.text-content {
  background: transparent;
  padding: 110px 0px;
  font-weight: 500;
  z-index: 99;
  position: relative;
  &.white-font, h1, h2, h3, h4, h5 {
    color: #fff;
  }
  &.white-font {
    h1, h2, h3, h4, h5 {
      color: #fff;
    }
  }
  a.button {
    font-size: \$body-font-size;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
  }
  p {
    font-size: 18px;
    font-weight: 300;
    line-height: 31px;
    opacity: 0.85;
  }
  h2 {
    margin-bottom: 23px;
    line-height: 46px;
    font-size: 34px;
    font-weight: 500;
  }
}

.top-1 {
  position: relative;
  top: -1px;
}

.top-0 {
  position: relative;
}

@media (max-width: 992px) {
  .text-content {
    padding: 80px 0;
    h2 {
      margin-bottom: 20px;
      line-height: 40px;
      font-size: 30px;
      font-weight: 500;
    }
  }
}
", "@Publication/Front/sass/gui/_photo-section.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_photo-section.scss");
    }
}
