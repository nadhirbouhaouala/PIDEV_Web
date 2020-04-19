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

/* @Publication/Front/sass/listings/_freelancers-grid-layout.scss */
class __TwigTemplate_291c041e45b0a7a7ee982e5f6309e47674c5c932d971518df476193e9f652764 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_freelancers-grid-layout.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_freelancers-grid-layout.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Freelancers - Grid Layout
------------------------------------- */

.freelancers-container {
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
}

.freelancer {
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 0 30px 30px 0;
  width: calc(100% * (1/2) - 30px);
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  background-color: #fff;
  transition: 0.3s;
  position: relative;
  cursor: default;
  &:hover {
    box-shadow: 0 2px 18px rgba(0, 0, 0, 0.14);
    transform: translateY(-4px);
  }
  .bookmark-icon {
    cursor: pointer;
  }
}

.freelancer-overview {
  text-align: center;
  padding: 38px 20px;
  flex-grow: 1;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}

.freelancer-overview-inner {
  flex: 1;
}

.freelancer-overview .freelancer-avatar {
  width: 110px;
  margin: 0 auto;
  position: relative;
  img {
    width: 100%;
    border-radius: 50%;
    cursor: pointer;
  }
  .verified-badge {
    position: absolute;
    bottom: 0;
    right: 0;
  }
}

.freelancer-name {
  margin-top: 19px;
}

.freelancer-rating {
  margin-top: 5px;
  margin-bottom: -10px;
}

.freelancer-name {
  h4 {
    font-size: \$listing-heading-font-size;
    font-weight: 600;
    color: \$body-heading-color;
    cursor: pointer;
    a {
      font-size: \$listing-heading-font-size;
      font-weight: 600;
      color: \$body-heading-color;
      cursor: pointer;
    }
  }
  img.flag {
    height: 15px;
    border-radius: 3px;
    position: relative;
    top: -1px;
    display: inline-block;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    margin-left: 4px;
    cursor: default;
  }
  span {
    color: #888;
  }
}

.freelancer-details {
  padding: 35px;
  background-color: #fafafa;
  flex-grow: 0;
}

.freelancers-grid-layout .freelancer-details {
  border-radius: 0 0 \$global-border-radius \$global-border-radius;
  a.button {
    display: block;
    text-align: center;
    width: 100% !important;
    transition: 0.3s;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.1);
  }
}

.freelancer-details a.button:hover {
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.2);
}

.freelancer-details-list ul {
  list-style: none;
  padding: 0;
  margin: 0 0 5px 0;
  font-size: 14.7px;
  li {
    display: inline-block;
    margin-right: 25px;
    line-height: 23px;
    color: #808080;
    margin-bottom: 15px;
    &:last-child {
      margin-right: 0;
    }
    strong {
      display: block;
      color: \$body-heading-color;
      i {
        position: relative;
        top: 1px;
        margin-right: -1px;
        margin-left: -2px;
      }
    }
  }
}

/* Detail Item */

.freelancer-detail-item {
  display: inline-block;
  margin: 2px 10px 5px 0;
  a {
    color: #888;
    &:hover {
      color: \$primary-color;
    }
  }
  color: #888;
  i {
    position: relative;
    top: 2px;
    margin-right: 3px;
  }
}

/* Media Queiers for Freelancers List */
@media (max-width: 1366px) {
  .freelances-grid-layout .freelancer-overview .freelancer-avatar {
    width: 100px;
  }
}

@media (max-width: 768px) {
  .freelances-grid-layout {
    &.freelancers-container {
      width: 100%;
    }
    .freelancer {
      margin: 0 0 30px 0;
      width: 100%;
    }
  }
  .freelancers-container.freelancers-grid-layout {
    width: 100%;
    .freelancer {
      width: 100%;
      margin-right: 0;
    }
  }
}

/* Full Page Media Queiers for Freelancers List */
@media (max-width: 2560px) {
  .full-page-container .freelancer {
    width: calc(100% * (1/4) - 30px);
  }
}

@media (max-width: 1920px) {
  .full-page-container .freelancer {
    width: calc(100% * (1/3) - 30px);
  }
}

@media (max-width: 1366px) {
  .full-page-container .freelancer {
    width: calc(100% * (1/2) - 30px);
  }
}

@media (max-width: 1099px) {
  .full-page-container {
    .freelancers-container {
      width: 100%;
    }
    .freelancer {
      width: 100%;
      margin-right: 0;
    }
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_freelancers-grid-layout.scss";
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
/* Freelancers - Grid Layout
------------------------------------- */

.freelancers-container {
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
}

.freelancer {
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 0 30px 30px 0;
  width: calc(100% * (1/2) - 30px);
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  background-color: #fff;
  transition: 0.3s;
  position: relative;
  cursor: default;
  &:hover {
    box-shadow: 0 2px 18px rgba(0, 0, 0, 0.14);
    transform: translateY(-4px);
  }
  .bookmark-icon {
    cursor: pointer;
  }
}

.freelancer-overview {
  text-align: center;
  padding: 38px 20px;
  flex-grow: 1;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}

.freelancer-overview-inner {
  flex: 1;
}

.freelancer-overview .freelancer-avatar {
  width: 110px;
  margin: 0 auto;
  position: relative;
  img {
    width: 100%;
    border-radius: 50%;
    cursor: pointer;
  }
  .verified-badge {
    position: absolute;
    bottom: 0;
    right: 0;
  }
}

.freelancer-name {
  margin-top: 19px;
}

.freelancer-rating {
  margin-top: 5px;
  margin-bottom: -10px;
}

.freelancer-name {
  h4 {
    font-size: \$listing-heading-font-size;
    font-weight: 600;
    color: \$body-heading-color;
    cursor: pointer;
    a {
      font-size: \$listing-heading-font-size;
      font-weight: 600;
      color: \$body-heading-color;
      cursor: pointer;
    }
  }
  img.flag {
    height: 15px;
    border-radius: 3px;
    position: relative;
    top: -1px;
    display: inline-block;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    margin-left: 4px;
    cursor: default;
  }
  span {
    color: #888;
  }
}

.freelancer-details {
  padding: 35px;
  background-color: #fafafa;
  flex-grow: 0;
}

.freelancers-grid-layout .freelancer-details {
  border-radius: 0 0 \$global-border-radius \$global-border-radius;
  a.button {
    display: block;
    text-align: center;
    width: 100% !important;
    transition: 0.3s;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.1);
  }
}

.freelancer-details a.button:hover {
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.2);
}

.freelancer-details-list ul {
  list-style: none;
  padding: 0;
  margin: 0 0 5px 0;
  font-size: 14.7px;
  li {
    display: inline-block;
    margin-right: 25px;
    line-height: 23px;
    color: #808080;
    margin-bottom: 15px;
    &:last-child {
      margin-right: 0;
    }
    strong {
      display: block;
      color: \$body-heading-color;
      i {
        position: relative;
        top: 1px;
        margin-right: -1px;
        margin-left: -2px;
      }
    }
  }
}

/* Detail Item */

.freelancer-detail-item {
  display: inline-block;
  margin: 2px 10px 5px 0;
  a {
    color: #888;
    &:hover {
      color: \$primary-color;
    }
  }
  color: #888;
  i {
    position: relative;
    top: 2px;
    margin-right: 3px;
  }
}

/* Media Queiers for Freelancers List */
@media (max-width: 1366px) {
  .freelances-grid-layout .freelancer-overview .freelancer-avatar {
    width: 100px;
  }
}

@media (max-width: 768px) {
  .freelances-grid-layout {
    &.freelancers-container {
      width: 100%;
    }
    .freelancer {
      margin: 0 0 30px 0;
      width: 100%;
    }
  }
  .freelancers-container.freelancers-grid-layout {
    width: 100%;
    .freelancer {
      width: 100%;
      margin-right: 0;
    }
  }
}

/* Full Page Media Queiers for Freelancers List */
@media (max-width: 2560px) {
  .full-page-container .freelancer {
    width: calc(100% * (1/4) - 30px);
  }
}

@media (max-width: 1920px) {
  .full-page-container .freelancer {
    width: calc(100% * (1/3) - 30px);
  }
}

@media (max-width: 1366px) {
  .full-page-container .freelancer {
    width: calc(100% * (1/2) - 30px);
  }
}

@media (max-width: 1099px) {
  .full-page-container {
    .freelancers-container {
      width: 100%;
    }
    .freelancer {
      width: 100%;
      margin-right: 0;
    }
  }
}
", "@Publication/Front/sass/listings/_freelancers-grid-layout.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_freelancers-grid-layout.scss");
    }
}
