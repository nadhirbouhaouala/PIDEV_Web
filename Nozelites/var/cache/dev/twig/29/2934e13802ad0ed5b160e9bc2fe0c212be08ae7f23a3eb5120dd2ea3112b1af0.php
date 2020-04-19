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

/* @Publication/Front/sass/listings/_companies-list.scss */
class __TwigTemplate_8bc7dd72445f293ced19a481af680ce700203d91f5905ca8679788588cc20182 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_companies-list.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_companies-list.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Companies List
------------------------------------- */

/* Letters List */

.letters-list {
  width: 100%;
  text-align: center;
  background-color: #f4f4f4;
  border-radius: \$global-border-radius;
  padding: 20px;
  a {
    display: inline-block;
    font-size: 18px;
    color: \$body-heading-color;
    height: 40px;
    width: 40px;
    line-height: 40px;
    background-color: transparent;
    border-radius: \$global-border-radius;
    transition: 0.3s;
    margin: 0 -2px;
    &.current {
      margin-right: 0;
      color: #fff;
      font-weight: 600;
      background-color: \$primary-color;
      box-shadow: 0 2px 8px rgba(\$primary-color, 0.25);
    }
    &:hover {
      color: #fff;
      background-color: #333;
      font-weight: 600;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }
  }
}

/* Companies List */

.companies-list {
  display: flex;
  flex-wrap: wrap;
  margin-top: 30px;
  width: calc(100% + 30px);
  .company {
    width: calc(33.3% - 30px);
    margin: 0 30px 30px 0;
    flex-grow: 1;
    text-align: center;
    /*border-right: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;*/
    padding: 50px 0;
    background-color: #fff;
    border-radius: \$global-border-radius;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
    &:hover {
      transform: translateY(-3px);
    }
    img {
      max-width: 120px;
      max-height: 60px;
      display: inline-block;
      margin: 0;
      transform: translate3d(0, 0, 0);
    }
    .company-logo {
      height: 60px;
      display: flex;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 30px;
    }
    h4 {
      color: \$body-heading-color;
      font-size: \$listing-heading-font-size;
      font-weight: 600;
      transition: 0.3s;
      display: block;
    }
    span {
      color: #888;
    }
    .star-rating {
      margin-top: 5px;
    }
  }
}

@media (min-width: 993px) {
  .companies-list .company {
    &:nth-child(3n) {
      border-right: none;
    }
    &:nth-last-child(-n+3) {
      border-bottom: none;
    }
  }
}

.not-rated, .company-not-rated {
  border-radius: \$global-border-radius;
  background-color: #f0f0f0;
  color: #888;
  font-size: 14px;
  line-height: 15px;
  font-weight: 600;
  padding: 7px 9px;
  display: inline-block;
  margin-top: 8px;
  text-align: center;
}

/* Media Queries for Companies List */
@media (max-width: 1366px) {
  .letters-list a {
    font-size: \$body-font-size;
    height: 36px;
    width: 36px;
    line-height: 36px;
    margin: 0 -1px;
  }
}

@media (max-width: 992px) {
  .companies-list .company {
    width: calc(50% - 30px);
  }
}

@media (max-width: 768px) {
  .companies-list .company {
    width: 100%;
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_companies-list.scss";
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
/* Companies List
------------------------------------- */

/* Letters List */

.letters-list {
  width: 100%;
  text-align: center;
  background-color: #f4f4f4;
  border-radius: \$global-border-radius;
  padding: 20px;
  a {
    display: inline-block;
    font-size: 18px;
    color: \$body-heading-color;
    height: 40px;
    width: 40px;
    line-height: 40px;
    background-color: transparent;
    border-radius: \$global-border-radius;
    transition: 0.3s;
    margin: 0 -2px;
    &.current {
      margin-right: 0;
      color: #fff;
      font-weight: 600;
      background-color: \$primary-color;
      box-shadow: 0 2px 8px rgba(\$primary-color, 0.25);
    }
    &:hover {
      color: #fff;
      background-color: #333;
      font-weight: 600;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }
  }
}

/* Companies List */

.companies-list {
  display: flex;
  flex-wrap: wrap;
  margin-top: 30px;
  width: calc(100% + 30px);
  .company {
    width: calc(33.3% - 30px);
    margin: 0 30px 30px 0;
    flex-grow: 1;
    text-align: center;
    /*border-right: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;*/
    padding: 50px 0;
    background-color: #fff;
    border-radius: \$global-border-radius;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
    &:hover {
      transform: translateY(-3px);
    }
    img {
      max-width: 120px;
      max-height: 60px;
      display: inline-block;
      margin: 0;
      transform: translate3d(0, 0, 0);
    }
    .company-logo {
      height: 60px;
      display: flex;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 30px;
    }
    h4 {
      color: \$body-heading-color;
      font-size: \$listing-heading-font-size;
      font-weight: 600;
      transition: 0.3s;
      display: block;
    }
    span {
      color: #888;
    }
    .star-rating {
      margin-top: 5px;
    }
  }
}

@media (min-width: 993px) {
  .companies-list .company {
    &:nth-child(3n) {
      border-right: none;
    }
    &:nth-last-child(-n+3) {
      border-bottom: none;
    }
  }
}

.not-rated, .company-not-rated {
  border-radius: \$global-border-radius;
  background-color: #f0f0f0;
  color: #888;
  font-size: 14px;
  line-height: 15px;
  font-weight: 600;
  padding: 7px 9px;
  display: inline-block;
  margin-top: 8px;
  text-align: center;
}

/* Media Queries for Companies List */
@media (max-width: 1366px) {
  .letters-list a {
    font-size: \$body-font-size;
    height: 36px;
    width: 36px;
    line-height: 36px;
    margin: 0 -1px;
  }
}

@media (max-width: 992px) {
  .companies-list .company {
    width: calc(50% - 30px);
  }
}

@media (max-width: 768px) {
  .companies-list .company {
    width: 100%;
  }
}
", "@Publication/Front/sass/listings/_companies-list.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_companies-list.scss");
    }
}
