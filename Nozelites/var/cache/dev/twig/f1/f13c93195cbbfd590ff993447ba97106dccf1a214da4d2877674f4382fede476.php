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

/* @Publication/Front/sass/gui/_tabs.scss */
class __TwigTemplate_a20200b18dd4dc8dda54c180cc66d1bc7b4dacb2b10be8b050a2127ab3c0d667 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_tabs.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_tabs.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Tabs
------------------------------------- */

.tabs {
  ul {
    padding: 0;
    list-style: none;
    margin: 0;
  }
  z-index: 15px;
  position: relative;
  background: #FFFFFF;
  width: 100%;
  border-radius: \$global-border-radius;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  margin: 0;
  overflow: hidden;
}

.tabs-header {
  position: relative;
  background: \$primary-color;
  overflow: hidden;
  .tab-hover {
    position: absolute;
    bottom: 0;
    left: 0;
    background: #fff;
    width: auto;
    height: 100%;
    transition: 0.3s ease;
    opacity: 0.08;
    z-index: 90;
  }
  ul {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: calc(100% - 100px);
    position: relative;
    z-index: 100;
  }
  li {
    transition: 0.3s ease;
  }
  a {
    z-index: 1;
    display: block;
    box-sizing: border-box;
    padding: 15px 25px;
    color: #fff;
    font-weight: 500;
    text-decoration: none;
  }
}

.tabs-nav {
  position: absolute;
  top: 0;
  right: 0;
  display: flex;
  align-items: center;
  height: 100%;
  padding: 0 15px;
  color: #fff;
  user-select: none;
  font-size: 19px;
  i {
    cursor: pointer;
    display: inline-block;
    padding: 0;
    height: 30px;
    width: 30px;
    line-height: 30px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: \$global-border-radius;
    text-align: center;
    position: relative;
    z-index: 101;
    margin-left: 5px;
    transition: 0.3s;
    &:hover {
      background-color: rgba(255, 255, 255, 0.15);
    }
  }
}

.tabs-content {
  position: relative;
  transition: 0.3s ease;
  overflow: hidden;
  .tab {
    padding: 25px;
    p:last-child {
      margin-bottom: 0;
      padding-bottom: 0;
    }
  }
  &:after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    display: block;
    width: 100%;
    height: 1px;
    box-shadow: 0 0 20px 10px #FFFFFF;
  }
  .tab {
    display: none;
    &.active {
      display: block;
    }
  }
}

@media (max-width: 992px) {
  .tabs-nav {
    display: none;
  }
  .tabs-header ul {
    flex-direction: column;
    width: 100%;
  }
  .tab-hover {
    display: none;
  }
  .tabs-header {
    a {
      box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.15);
    }
    ul li.active a {
      background-color: rgba(255, 255, 255, 0.07);
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_tabs.scss";
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
/* Tabs
------------------------------------- */

.tabs {
  ul {
    padding: 0;
    list-style: none;
    margin: 0;
  }
  z-index: 15px;
  position: relative;
  background: #FFFFFF;
  width: 100%;
  border-radius: \$global-border-radius;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  margin: 0;
  overflow: hidden;
}

.tabs-header {
  position: relative;
  background: \$primary-color;
  overflow: hidden;
  .tab-hover {
    position: absolute;
    bottom: 0;
    left: 0;
    background: #fff;
    width: auto;
    height: 100%;
    transition: 0.3s ease;
    opacity: 0.08;
    z-index: 90;
  }
  ul {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: calc(100% - 100px);
    position: relative;
    z-index: 100;
  }
  li {
    transition: 0.3s ease;
  }
  a {
    z-index: 1;
    display: block;
    box-sizing: border-box;
    padding: 15px 25px;
    color: #fff;
    font-weight: 500;
    text-decoration: none;
  }
}

.tabs-nav {
  position: absolute;
  top: 0;
  right: 0;
  display: flex;
  align-items: center;
  height: 100%;
  padding: 0 15px;
  color: #fff;
  user-select: none;
  font-size: 19px;
  i {
    cursor: pointer;
    display: inline-block;
    padding: 0;
    height: 30px;
    width: 30px;
    line-height: 30px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: \$global-border-radius;
    text-align: center;
    position: relative;
    z-index: 101;
    margin-left: 5px;
    transition: 0.3s;
    &:hover {
      background-color: rgba(255, 255, 255, 0.15);
    }
  }
}

.tabs-content {
  position: relative;
  transition: 0.3s ease;
  overflow: hidden;
  .tab {
    padding: 25px;
    p:last-child {
      margin-bottom: 0;
      padding-bottom: 0;
    }
  }
  &:after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    display: block;
    width: 100%;
    height: 1px;
    box-shadow: 0 0 20px 10px #FFFFFF;
  }
  .tab {
    display: none;
    &.active {
      display: block;
    }
  }
}

@media (max-width: 992px) {
  .tabs-nav {
    display: none;
  }
  .tabs-header ul {
    flex-direction: column;
    width: 100%;
  }
  .tab-hover {
    display: none;
  }
  .tabs-header {
    a {
      box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.15);
    }
    ul li.active a {
      background-color: rgba(255, 255, 255, 0.07);
    }
  }
}", "@Publication/Front/sass/gui/_tabs.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_tabs.scss");
    }
}
