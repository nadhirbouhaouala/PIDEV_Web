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

/* @Publication/Front/sass/listings/_tasks-grid-layout.scss */
class __TwigTemplate_1a6dcb933ddf1e31391a0b0f5a7d8552cf25a6640b056989980785f05c0dd7eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_tasks-grid-layout.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_tasks-grid-layout.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Tasks - Grid Layout
------------------------------------- */

.tasks-list-container.tasks-grid-layout {
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
  .task-listing {
    display: flex;
    justify-content: center;
    margin: 0 30px 30px 0;
    width: calc(100% * (1/2) - 30px);
    flex-direction: column;
  }
  .task-listing-bid {
    flex: 1;
    padding: 0px 0;
    display: block;
  }
  .task-listing {
    flex-direction: column;
  }
  .task-listing-bid-inner {
    display: flex;
    align-items: center;
    padding: 18px 32px;
    .task-offers {
      flex: 1;
      position: relative;
      top: 5px;
    }
    .button {
      height: 100%;
      width: 45%;
    }
  }
  .task-listing .task-listing-details {
    display: flex;
    align-items: center;
    padding: 28px 32px;
  }
}

/* Media Queries for Tasks List */
@media (max-width: 1240px) {
  .tasks-list-container.tasks-grid-layout {
    .task-listing-bid-inner {
      display: block;
    }
    .task-listing-bid {
      padding: 20px 35px;
      padding-bottom: 30px;
    }
    .task-listing-bid-inner {
      padding: 0;
    }
    .task-listing {
      flex-direction: column;
    }
    .task-listing-bid-inner {
      .task-offers {
        flex: 1;
      }
      .button {
        height: 100%;
        width: 100%;
      }
    }
  }
}

@media (max-width: 768px) {
  .tasks-list-container {
    &.tasks-grid-layout {
      width: 100%;
      .task-listing {
        margin: 0 0 30px 0;
        width: 100%;
      }
    }
    &.compact-list {
      .task-listing-bid, .task-listing-details {
        width: 100%;
      }
    }
  }
}

/* Full Page Media Queries */
@media (max-width: 3860px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100% * (1/4) - 30px);
  }
}

@media (max-width: 2560px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100% * (1/3) - 30px);
  }
}

@media (max-width: 1600px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100% * (1/2) - 30px);
  }
}

@media (max-width: 1099px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100% - 30px);
  }
}

@media (max-width: 992px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100%);
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_tasks-grid-layout.scss";
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
/* Tasks - Grid Layout
------------------------------------- */

.tasks-list-container.tasks-grid-layout {
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
  .task-listing {
    display: flex;
    justify-content: center;
    margin: 0 30px 30px 0;
    width: calc(100% * (1/2) - 30px);
    flex-direction: column;
  }
  .task-listing-bid {
    flex: 1;
    padding: 0px 0;
    display: block;
  }
  .task-listing {
    flex-direction: column;
  }
  .task-listing-bid-inner {
    display: flex;
    align-items: center;
    padding: 18px 32px;
    .task-offers {
      flex: 1;
      position: relative;
      top: 5px;
    }
    .button {
      height: 100%;
      width: 45%;
    }
  }
  .task-listing .task-listing-details {
    display: flex;
    align-items: center;
    padding: 28px 32px;
  }
}

/* Media Queries for Tasks List */
@media (max-width: 1240px) {
  .tasks-list-container.tasks-grid-layout {
    .task-listing-bid-inner {
      display: block;
    }
    .task-listing-bid {
      padding: 20px 35px;
      padding-bottom: 30px;
    }
    .task-listing-bid-inner {
      padding: 0;
    }
    .task-listing {
      flex-direction: column;
    }
    .task-listing-bid-inner {
      .task-offers {
        flex: 1;
      }
      .button {
        height: 100%;
        width: 100%;
      }
    }
  }
}

@media (max-width: 768px) {
  .tasks-list-container {
    &.tasks-grid-layout {
      width: 100%;
      .task-listing {
        margin: 0 0 30px 0;
        width: 100%;
      }
    }
    &.compact-list {
      .task-listing-bid, .task-listing-details {
        width: 100%;
      }
    }
  }
}

/* Full Page Media Queries */
@media (max-width: 3860px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100% * (1/4) - 30px);
  }
}

@media (max-width: 2560px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100% * (1/3) - 30px);
  }
}

@media (max-width: 1600px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100% * (1/2) - 30px);
  }
}

@media (max-width: 1099px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100% - 30px);
  }
}

@media (max-width: 992px) {
  .full-page-content-inner .tasks-grid-layout .task-listing {
    width: calc(100%);
  }
}", "@Publication/Front/sass/listings/_tasks-grid-layout.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_tasks-grid-layout.scss");
    }
}
