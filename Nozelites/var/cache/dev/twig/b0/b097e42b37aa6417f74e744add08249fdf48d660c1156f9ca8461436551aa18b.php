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

/* @Publication/Front/sass/gui/_pagination.scss */
class __TwigTemplate_2f8289de512e5395d348782de220e09422fa7797c60990e72921450d0a46191a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_pagination.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_pagination.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Pagination
------------------------------------- */

.pagination {
  margin: 0;
  text-align: center;
}

.pagination-next-prev {
  position: relative;
  top: -66px;
}

.pagination ul {
  margin: 0;
  padding: 0;
  li {
    display: inline-block;
    margin: 0;
    padding: 0;
    a {
      padding: 10px 0;
      border-bottom: none;
      display: inline-block;
      color: #333;
      background-color: transparent;
      font-weight: 700;
      margin: 0;
      line-height: 22px;
      -webkit-transition: all 200ms ease-in-out;
      -moz-transition: all 200ms ease-in-out;
      -o-transition: all 200ms ease-in-out;
      -ms-transition: all 200ms ease-in-out;
      transition: all 200ms ease-in-out;
      font-size: 14px;
      float: left;
    }
  }
}

.pagination-next-prev ul li a {
  padding: 10px 0;
  border-bottom: none;
  display: inline-block;
  color: #333;
  background-color: transparent;
  font-weight: 700;
  margin: 0;
  line-height: 22px;
  -webkit-transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  -o-transition: all 200ms ease-in-out;
  -ms-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
  font-size: 14px;
  float: left;
}

.pagination ul li {
  a {
    border-radius: \$global-border-radius;
    width: 44px;
    height: 44px;
    padding: 0;
    line-height: 44px;
    i {
      line-height: 44px;
      font-size: 24px;
    }
  }
  &.blank {
    color: #a0a0a0;
    padding: 0 6px;
  }
}

.section.gray .pagination .pagination-arrow a:hover {
  background-color: #333;
  color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.pagination {
  ul li a {
    &.current-page, &:hover {
      background-color: #333;
      color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }
    &.current-page {
      background-color: \$primary-color;
      color: #fff;
      box-shadow: 0 2px 8px rgba(102, 103, 107, 0.25);
    }
  }
  .pagination-arrow a {
    background-color: #f0f0f0;
  }
}

.section.gray .pagination .pagination-arrow a {
  background-color: #eaeaea;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_pagination.scss";
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
        return new Source("/* ---------------------------------- */
/* Pagination
------------------------------------- */

.pagination {
  margin: 0;
  text-align: center;
}

.pagination-next-prev {
  position: relative;
  top: -66px;
}

.pagination ul {
  margin: 0;
  padding: 0;
  li {
    display: inline-block;
    margin: 0;
    padding: 0;
    a {
      padding: 10px 0;
      border-bottom: none;
      display: inline-block;
      color: #333;
      background-color: transparent;
      font-weight: 700;
      margin: 0;
      line-height: 22px;
      -webkit-transition: all 200ms ease-in-out;
      -moz-transition: all 200ms ease-in-out;
      -o-transition: all 200ms ease-in-out;
      -ms-transition: all 200ms ease-in-out;
      transition: all 200ms ease-in-out;
      font-size: 14px;
      float: left;
    }
  }
}

.pagination-next-prev ul li a {
  padding: 10px 0;
  border-bottom: none;
  display: inline-block;
  color: #333;
  background-color: transparent;
  font-weight: 700;
  margin: 0;
  line-height: 22px;
  -webkit-transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  -o-transition: all 200ms ease-in-out;
  -ms-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
  font-size: 14px;
  float: left;
}

.pagination ul li {
  a {
    border-radius: \$global-border-radius;
    width: 44px;
    height: 44px;
    padding: 0;
    line-height: 44px;
    i {
      line-height: 44px;
      font-size: 24px;
    }
  }
  &.blank {
    color: #a0a0a0;
    padding: 0 6px;
  }
}

.section.gray .pagination .pagination-arrow a:hover {
  background-color: #333;
  color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.pagination {
  ul li a {
    &.current-page, &:hover {
      background-color: #333;
      color: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }
    &.current-page {
      background-color: \$primary-color;
      color: #fff;
      box-shadow: 0 2px 8px rgba(102, 103, 107, 0.25);
    }
  }
  .pagination-arrow a {
    background-color: #f0f0f0;
  }
}

.section.gray .pagination .pagination-arrow a {
  background-color: #eaeaea;
}", "@Publication/Front/sass/gui/_pagination.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_pagination.scss");
    }
}
