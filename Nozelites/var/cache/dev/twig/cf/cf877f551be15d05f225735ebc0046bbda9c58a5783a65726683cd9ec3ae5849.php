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

/* @Publication/Front/sass/layout/_404-page.scss */
class __TwigTemplate_24de10b76a416a8a762d86909fda3cbd53d4db234c9ba76c4e412c3939c6e5a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_404-page.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_404-page.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* 404 Page
------------------------------------- */
#not-found {
  margin: 40px 0 80px 0;
  &.center {
    text-align: center;
  }
  h2 {
    text-align: center;
    font-size: 210px;
    line-height: 210px;
    font-weight: 500;
    letter-spacing: -8px;
  }
  p {
    text-align: center;
    font-size: 28px;
    line-height: 42px;
    display: inline-block;
    margin-top: 0px;
    color: #999;
  }
  i {
    color: #e0e0e0;
    font-size: 210px;
    top: 0;
    margin-left: -40px;
    position: relative;
  }
}

.not-found-search.intro-banner-search-form .intro-search-field {
  background: #f7f7f7;
  box-shadow: none;
}

.not-found-search.intro-banner-search-form {
  input {
    background: #f7f7f7;
    box-shadow: none;
  }
  background: #f7f7f7;
  box-shadow: none;
}

@media (max-width: 992px) {
  .not-found-search.intro-banner-search-form {
    background: #fff;
  }
}

@media (max-width: 767px) {
  #not-found {
    h2 {
      font-size: 110px;
      line-height: 110px;
    }
    p {
      font-size: 20px;
      line-height: 32px;
    }
    i {
      font-size: 120px;
      top: 5px;
      margin-left: 0;
    }
  }
  .not-found-search.intro-banner-search-form {
    margin-top: -30px;
  }
  .login-register-page .social-login-buttons button {
    margin-right: 0;
    width: 100%;
    display: block;
    max-width: 100%;
  }
}

.login-register-page .welcome-text h3 {
  font-size: 26px;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_404-page.scss";
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
/* 404 Page
------------------------------------- */
#not-found {
  margin: 40px 0 80px 0;
  &.center {
    text-align: center;
  }
  h2 {
    text-align: center;
    font-size: 210px;
    line-height: 210px;
    font-weight: 500;
    letter-spacing: -8px;
  }
  p {
    text-align: center;
    font-size: 28px;
    line-height: 42px;
    display: inline-block;
    margin-top: 0px;
    color: #999;
  }
  i {
    color: #e0e0e0;
    font-size: 210px;
    top: 0;
    margin-left: -40px;
    position: relative;
  }
}

.not-found-search.intro-banner-search-form .intro-search-field {
  background: #f7f7f7;
  box-shadow: none;
}

.not-found-search.intro-banner-search-form {
  input {
    background: #f7f7f7;
    box-shadow: none;
  }
  background: #f7f7f7;
  box-shadow: none;
}

@media (max-width: 992px) {
  .not-found-search.intro-banner-search-form {
    background: #fff;
  }
}

@media (max-width: 767px) {
  #not-found {
    h2 {
      font-size: 110px;
      line-height: 110px;
    }
    p {
      font-size: 20px;
      line-height: 32px;
    }
    i {
      font-size: 120px;
      top: 5px;
      margin-left: 0;
    }
  }
  .not-found-search.intro-banner-search-form {
    margin-top: -30px;
  }
  .login-register-page .social-login-buttons button {
    margin-right: 0;
    width: 100%;
    display: block;
    max-width: 100%;
  }
}

.login-register-page .welcome-text h3 {
  font-size: 26px;
}", "@Publication/Front/sass/layout/_404-page.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_404-page.scss");
    }
}
