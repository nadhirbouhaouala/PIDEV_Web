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

/* @Publication/Front/sass/dashboard/_dashboard-basics.scss */
class __TwigTemplate_979daf368bc8ef1251746f6c1b8da8db67951bfd62449c753a303c9002dc39a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/dashboard/_dashboard-basics.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/dashboard/_dashboard-basics.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Dashboard
------------------------------------- */

/* Full Page Adjustments */
.full-page-container {
  height: calc(100vh - 82px);
}

.dashboard-container {
  height: calc(100vh - 82px);
  display: flex;
  width: 100%;
  flex-wrap: wrap;
}

@media (max-width: 1099px) {
  .full-page-container, .dashboard-container {
    height: calc(100vh - 76px);
  }
}

/* Dashboard Basis */

.dashboard-sidebar {
  flex: 0 0 280px;
  background-color: #fff;
  position: relative;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
  z-index: 100;
  .dashboard-sidebar-inner {
    overflow: auto;
    height: 100%;
  }
}

.dashboard-content-container {
  flex: 1;
  background-color: #fafafa;
  padding: 0;
  overflow: auto;
  position: relative;
  z-index: 99;
}

.dashboard-content-inner {
  padding: 50px;
  padding-bottom: 0;
  position: relative;
}

/* Dashboard Header Logo Adjustent */
@media (min-width: 1099px) {
  #header-container.dashboard-header {
    .container {
      padding-right: 35px;
      padding-left: 0;
    }
    #logo {
      width: 281px;
      padding-left: 35px;
    }
  }
}

@media (max-width: 1240px) {
  #header-container.dashboard-header #logo {
    width: auto;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/dashboard/_dashboard-basics.scss";
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
/* Dashboard
------------------------------------- */

/* Full Page Adjustments */
.full-page-container {
  height: calc(100vh - 82px);
}

.dashboard-container {
  height: calc(100vh - 82px);
  display: flex;
  width: 100%;
  flex-wrap: wrap;
}

@media (max-width: 1099px) {
  .full-page-container, .dashboard-container {
    height: calc(100vh - 76px);
  }
}

/* Dashboard Basis */

.dashboard-sidebar {
  flex: 0 0 280px;
  background-color: #fff;
  position: relative;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
  z-index: 100;
  .dashboard-sidebar-inner {
    overflow: auto;
    height: 100%;
  }
}

.dashboard-content-container {
  flex: 1;
  background-color: #fafafa;
  padding: 0;
  overflow: auto;
  position: relative;
  z-index: 99;
}

.dashboard-content-inner {
  padding: 50px;
  padding-bottom: 0;
  position: relative;
}

/* Dashboard Header Logo Adjustent */
@media (min-width: 1099px) {
  #header-container.dashboard-header {
    .container {
      padding-right: 35px;
      padding-left: 0;
    }
    #logo {
      width: 281px;
      padding-left: 35px;
    }
  }
}

@media (max-width: 1240px) {
  #header-container.dashboard-header #logo {
    width: auto;
  }
}", "@Publication/Front/sass/dashboard/_dashboard-basics.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\dashboard\\_dashboard-basics.scss");
    }
}
