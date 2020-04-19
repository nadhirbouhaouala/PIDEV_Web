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

/* @Publication/Front/sass/gui/_share-buttons.scss */
class __TwigTemplate_e65e6a50315b770ceabc7b1a37e34bbbd7e8b7bf8dee240c56bba6bd22acb9dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_share-buttons.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_share-buttons.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Share Buttons
------------------------------------- */

.share-buttons {
  display: block;
}

.share-buttons-trigger {
  display: inline-block;
  height: 44px;
  width: 44px;
  line-height: 44px;
  text-align: center;
  color: #a0a0a0;
  font-size: 18px;
  background-color: #f0f0f0;
  border-radius: \$global-border-radius;
  transition: 0.4s;
  cursor: default;
  i {
    position: relative;
    top: 1px;
  }
}

.share-buttons-content {
  display: inline-block;
  position: relative;
  width: calc(100% - 60px);
  span {
    margin-left: 10px;
    color: #888;
    cursor: default;
    padding: 10px 0;
    display: inline-block;
    transition: 0.4s;
    strong {
      color: \$primary-color;
      font-weight: 600;
    }
  }
}

.share-buttons:hover .share-buttons-content span {
  opacity: 0;
  transition: 0.2s;
}

/* Icons */

.share-buttons-icons {
  position: absolute;
  left: 5px;
  top: 0;
  padding: 0;
  margin: 0;
  opacity: 0;
  transform: translateX(-10px);
  transition: all 0.4s cubic-bezier(0.5, -0.41, 0.19, 2);
}

.share-buttons:hover .share-buttons-icons {
  opacity: 1;
  transform: translate(0);
}

.share-buttons-icons li {
  display: inline-block;
  float: left;
  &:first-child a {
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
  }
  &:last-child a {
    border-radius: 0 \$global-border-radius \$global-border-radius 0;
  }
  a {
    height: 44px;
    width: 44px;
    display: inline-block;
    line-height: 44px;
    text-align: center;
    background-color: #333;
    color: #fff;
    font-size: 14px;
    i {
      position: relative;
      top: 1px;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_share-buttons.scss";
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
/* Share Buttons
------------------------------------- */

.share-buttons {
  display: block;
}

.share-buttons-trigger {
  display: inline-block;
  height: 44px;
  width: 44px;
  line-height: 44px;
  text-align: center;
  color: #a0a0a0;
  font-size: 18px;
  background-color: #f0f0f0;
  border-radius: \$global-border-radius;
  transition: 0.4s;
  cursor: default;
  i {
    position: relative;
    top: 1px;
  }
}

.share-buttons-content {
  display: inline-block;
  position: relative;
  width: calc(100% - 60px);
  span {
    margin-left: 10px;
    color: #888;
    cursor: default;
    padding: 10px 0;
    display: inline-block;
    transition: 0.4s;
    strong {
      color: \$primary-color;
      font-weight: 600;
    }
  }
}

.share-buttons:hover .share-buttons-content span {
  opacity: 0;
  transition: 0.2s;
}

/* Icons */

.share-buttons-icons {
  position: absolute;
  left: 5px;
  top: 0;
  padding: 0;
  margin: 0;
  opacity: 0;
  transform: translateX(-10px);
  transition: all 0.4s cubic-bezier(0.5, -0.41, 0.19, 2);
}

.share-buttons:hover .share-buttons-icons {
  opacity: 1;
  transform: translate(0);
}

.share-buttons-icons li {
  display: inline-block;
  float: left;
  &:first-child a {
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
  }
  &:last-child a {
    border-radius: 0 \$global-border-radius \$global-border-radius 0;
  }
  a {
    height: 44px;
    width: 44px;
    display: inline-block;
    line-height: 44px;
    text-align: center;
    background-color: #333;
    color: #fff;
    font-size: 14px;
    i {
      position: relative;
      top: 1px;
    }
  }
}", "@Publication/Front/sass/gui/_share-buttons.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_share-buttons.scss");
    }
}
