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

/* @Publication/Front/sass/gui/_notification-boxes.scss */
class __TwigTemplate_08c7314fceb7814c49737f492b7f09c938373122545477f9e4982912c62df4a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_notification-boxes.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_notification-boxes.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Notification Boxes
------------------------------------- */

#result .success {
  line-height: 24px;
  margin-bottom: 15px;
  position: relative;
  padding: 20px 26px;
  padding-right: 50px;
  border-radius: 3px;
}

.notification {
  line-height: 24px;
  margin-bottom: 15px;
  position: relative;
  padding: 20px 26px;
  padding-right: 50px;
  border-radius: 3px;
  p {
    margin: 0;
    font-size: 15px;
  }
}

#result .success, .notification.success {
  background-color: #EBF6E0;
}

#result .success {
  color: #5f9025;
}

.notification {
  &.success {
    color: #5f9025;
    a, strong {
      color: #5f9025;
    }
  }
  &.error {
    background-color: #ffe9e9;
    color: #de5959;
    a, strong {
      color: #de5959;
    }
  }
  &.warning {
    background-color: #FBFADD;
    color: #8f872e;
    a, strong {
      color: #8f872e;
    }
  }
  &.notice {
    h4 {
      font-size: 19px;
      margin: 3px 0 15px 0;
      color: #3184ae;
    }
    color: #3184ae;
    a, strong {
      color: #3184ae;
    }
    background-color: #E9F7FE;
    &.large {
      padding: 32px 36px;
    }
  }
  strong {
    font-weight: 700;
  }
  a {
    text-decoration: underline;
  }
}

body .notification strong {
  border: none;
}

.notification {
  &.success .close, &.error .close, &.warning .close {
    padding: 0px 9px;
    position: absolute;
    right: 0;
    top: 22px;
    display: block;
    height: 8px;
    width: 8px;
    cursor: pointer;
  }
  &.notice {
    .close {
      padding: 0px 9px;
      position: absolute;
      right: 0;
      top: 22px;
      display: block;
      height: 8px;
      width: 8px;
      cursor: pointer;
    }
    p span i {
      font-weight: 500;
    }
  }
  a.button {
    float: right;
    color: #fff;
    margin-top: 3px;
  }
  &.notice a.button {
    background-color: #388fc5;
  }
  &.warning a.button {
    background-color: #dfbe51;
  }
  &.error a.button {
    background-color: #d34c4c;
  }
  &.success a.button {
    background-color: #79ba38;
  }
  &.closeable a.close:before {
    content: \"\\ea02\";
    font-family: \"Feather-Icons\";
    position: absolute;
    right: 25px;
    top: 0;
    cursor: pointer;
    font-weight: 600;
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_notification-boxes.scss";
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
/* Notification Boxes
------------------------------------- */

#result .success {
  line-height: 24px;
  margin-bottom: 15px;
  position: relative;
  padding: 20px 26px;
  padding-right: 50px;
  border-radius: 3px;
}

.notification {
  line-height: 24px;
  margin-bottom: 15px;
  position: relative;
  padding: 20px 26px;
  padding-right: 50px;
  border-radius: 3px;
  p {
    margin: 0;
    font-size: 15px;
  }
}

#result .success, .notification.success {
  background-color: #EBF6E0;
}

#result .success {
  color: #5f9025;
}

.notification {
  &.success {
    color: #5f9025;
    a, strong {
      color: #5f9025;
    }
  }
  &.error {
    background-color: #ffe9e9;
    color: #de5959;
    a, strong {
      color: #de5959;
    }
  }
  &.warning {
    background-color: #FBFADD;
    color: #8f872e;
    a, strong {
      color: #8f872e;
    }
  }
  &.notice {
    h4 {
      font-size: 19px;
      margin: 3px 0 15px 0;
      color: #3184ae;
    }
    color: #3184ae;
    a, strong {
      color: #3184ae;
    }
    background-color: #E9F7FE;
    &.large {
      padding: 32px 36px;
    }
  }
  strong {
    font-weight: 700;
  }
  a {
    text-decoration: underline;
  }
}

body .notification strong {
  border: none;
}

.notification {
  &.success .close, &.error .close, &.warning .close {
    padding: 0px 9px;
    position: absolute;
    right: 0;
    top: 22px;
    display: block;
    height: 8px;
    width: 8px;
    cursor: pointer;
  }
  &.notice {
    .close {
      padding: 0px 9px;
      position: absolute;
      right: 0;
      top: 22px;
      display: block;
      height: 8px;
      width: 8px;
      cursor: pointer;
    }
    p span i {
      font-weight: 500;
    }
  }
  a.button {
    float: right;
    color: #fff;
    margin-top: 3px;
  }
  &.notice a.button {
    background-color: #388fc5;
  }
  &.warning a.button {
    background-color: #dfbe51;
  }
  &.error a.button {
    background-color: #d34c4c;
  }
  &.success a.button {
    background-color: #79ba38;
  }
  &.closeable a.close:before {
    content: \"\\ea02\";
    font-family: \"Feather-Icons\";
    position: absolute;
    right: 25px;
    top: 0;
    cursor: pointer;
    font-weight: 600;
  }
}
", "@Publication/Front/sass/gui/_notification-boxes.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_notification-boxes.scss");
    }
}
