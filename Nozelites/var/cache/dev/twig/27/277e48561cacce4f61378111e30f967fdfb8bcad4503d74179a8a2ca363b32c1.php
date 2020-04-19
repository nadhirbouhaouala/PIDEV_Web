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

/* @Publication/Front/sass/gui/_lists.scss */
class __TwigTemplate_57c0e489e3902b0fac14091ee30d6f0153031c3a306119d4f957297f20458c19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_lists.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_lists.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* List Styles
------------------------------------- */

.list-3, .list-2, .list-1 {
  padding: 3px 0 0 0;
  font-size: \$body-font-size;
}

.list-3 li, .list-2 li, .list-1 li {
  list-style: none;
  margin: 10px 0;
  line-height: \$body-line-height;
  margin-left: 20px;
  position: relative;
}

.list-3 li:first-child, .list-2 li:first-child, .list-1 li:first-child {
  margin-top: 0;
}

.list-4 li:before, .list-3 li:before, .list-2 li:before {
  margin: 0;
  position: relative;
  color: \$primary-color;
  float: left;
  margin-left: -20px;
  display: block;
}

.list-1 {
  li:before {
    margin: 0;
    position: relative;
    color: \$primary-color;
    float: left;
    margin-left: -20px;
    display: block;
  }
  &.gray li:before {
    color: #777;
  }
}

.list-2 li {
  margin-left: 28px;
}

.list-3 li:before, .list-2 li:before {
  font-family: \"Material-Icons\";
  content: \"\\e928\";
  font-size: 18px;
  font-weight: 600;
  position: relative;
  top: -2px;
  margin-left: -28px;
}

.list-3 li:before {
  content: \"\\e912\";
  font-family: \"Feather-Icons\";
  font-weight: 500;
  font-size: 18px;
}

.list-1 li:before {
  content: \"\";
  height: 6px;
  width: 6px;
  background-color: \$primary-color;
  border-radius: 2px;
  position: relative;
  top: 9px;
}

/* Numbered Style */

.numbered {
  ol {
    counter-reset: li;
    list-style: none;
    padding: 0;
    margin-left: 18px;
    display: inline-block;
    font-size: \$body-font-size;
    li {
      display: inline-block;
      padding: 6px 0;
      width: 100%;
    }
    > li::before {
      content: counter(li);
      counter-increment: li;
      font-size: \$body-font-size;
      line-height: 35px;
      width: 36px;
      height: 36px;
      display: inline-block;
      border: 1px solid #333;
      border-radius: 50%;
      text-align: center;
      margin: 0;
      margin-left: 0;
      font-weight: 500;
      color: \$body-heading-color;
      position: relative;
      float: left;
      left: -18px;
      font-size: 15px;
      transform: translateY(-10%);
    }
  }
  &.color {
    ol > li::before {
      border: 1px solid \$primary-color;
      color: \$primary-color;
    }
    &.filled ol > li::before {
      border: 1px solid \$primary-color;
      color: #fff;
      background-color: \$primary-color;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_lists.scss";
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
/* List Styles
------------------------------------- */

.list-3, .list-2, .list-1 {
  padding: 3px 0 0 0;
  font-size: \$body-font-size;
}

.list-3 li, .list-2 li, .list-1 li {
  list-style: none;
  margin: 10px 0;
  line-height: \$body-line-height;
  margin-left: 20px;
  position: relative;
}

.list-3 li:first-child, .list-2 li:first-child, .list-1 li:first-child {
  margin-top: 0;
}

.list-4 li:before, .list-3 li:before, .list-2 li:before {
  margin: 0;
  position: relative;
  color: \$primary-color;
  float: left;
  margin-left: -20px;
  display: block;
}

.list-1 {
  li:before {
    margin: 0;
    position: relative;
    color: \$primary-color;
    float: left;
    margin-left: -20px;
    display: block;
  }
  &.gray li:before {
    color: #777;
  }
}

.list-2 li {
  margin-left: 28px;
}

.list-3 li:before, .list-2 li:before {
  font-family: \"Material-Icons\";
  content: \"\\e928\";
  font-size: 18px;
  font-weight: 600;
  position: relative;
  top: -2px;
  margin-left: -28px;
}

.list-3 li:before {
  content: \"\\e912\";
  font-family: \"Feather-Icons\";
  font-weight: 500;
  font-size: 18px;
}

.list-1 li:before {
  content: \"\";
  height: 6px;
  width: 6px;
  background-color: \$primary-color;
  border-radius: 2px;
  position: relative;
  top: 9px;
}

/* Numbered Style */

.numbered {
  ol {
    counter-reset: li;
    list-style: none;
    padding: 0;
    margin-left: 18px;
    display: inline-block;
    font-size: \$body-font-size;
    li {
      display: inline-block;
      padding: 6px 0;
      width: 100%;
    }
    > li::before {
      content: counter(li);
      counter-increment: li;
      font-size: \$body-font-size;
      line-height: 35px;
      width: 36px;
      height: 36px;
      display: inline-block;
      border: 1px solid #333;
      border-radius: 50%;
      text-align: center;
      margin: 0;
      margin-left: 0;
      font-weight: 500;
      color: \$body-heading-color;
      position: relative;
      float: left;
      left: -18px;
      font-size: 15px;
      transform: translateY(-10%);
    }
  }
  &.color {
    ol > li::before {
      border: 1px solid \$primary-color;
      color: \$primary-color;
    }
    &.filled ol > li::before {
      border: 1px solid \$primary-color;
      color: #fff;
      background-color: \$primary-color;
    }
  }
}", "@Publication/Front/sass/gui/_lists.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_lists.scss");
    }
}
