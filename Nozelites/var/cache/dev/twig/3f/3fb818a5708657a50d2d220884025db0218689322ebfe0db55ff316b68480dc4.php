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

/* @Publication/Front/sass/gui/_on-off-switch.scss */
class __TwigTemplate_aa2060b5eea05cbfd469ae980f57c2419f2dd37a0ebde3bb78c61ea7fca7c090 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_on-off-switch.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_on-off-switch.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* On/Off Switch
------------------------------------- */

.switches-list .switch-container {
  width: 100%;
  &:last-child label {
    margin-bottom: 0;
  }
}

.switch-container {
  display: inline-block;
  cursor: pointer;
}

label.switch {
  position: relative;
}

.switches-list .switch-container label {
  cursor: pointer;
  position: relative;
  padding-left: 45px;
  line-height: \$body-sub-line-height;
}

.switch-button {
  position: relative;
  display: inline-block;
  width: 34px;
  height: 20px;
  cursor: pointer;
  background-color: #ccc;
  border-radius: 50px;
  transition: 0.4s;
  margin: 0 7px 0 0;
  top: 4px;
  position: absolute;
  top: 2px;
  left: 0;
}

.notify-box {
  .switch-button {
    top: 0;
  }
  .switch-container {
    top: 1px;
    position: relative;
  }
}

.switch {
  span.switch-text {
    display: block;
    padding-left: 48px;
    font-size: \$body-font-size;
    line-height: 22px;
    color: \$body-font-color;
  }
  input {
    display: none;
  }
  &.interactive-effect {
    input:checked + .switch-button:before {
      animation: switch-shadow-color 0.4s;
    }
    .switch-button:before {
      animation: switch-shadow 0.4s;
    }
  }
}

@keyframes switch-shadow {
  0% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.3);
  }

  100% {
    box-shadow: 0 0 0px 10px rgba(0, 0, 0, 0);
  }
}


@keyframes switch-shadow-color {
  0% {
    box-shadow: 0 0 0 0 rgba(\$primary-color, 0.6);
  }

  100% {
    box-shadow: 0 0 0px 10px rgba(0, 0, 0, 0);
  }
}


.switch-button:before {
  position: absolute;
  content: \"\";
  height: 16px;
  width: 16px;
  bottom: 2px;
  left: 2px;
  background-color: white;
  transition: 0.4s, box-shadow 0.3s;
  border-radius: 50px;
}

input:checked + .switch-button {
  background-color: \$primary-color;
  &:before {
    transform: translateX(14px);
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_on-off-switch.scss";
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
/* On/Off Switch
------------------------------------- */

.switches-list .switch-container {
  width: 100%;
  &:last-child label {
    margin-bottom: 0;
  }
}

.switch-container {
  display: inline-block;
  cursor: pointer;
}

label.switch {
  position: relative;
}

.switches-list .switch-container label {
  cursor: pointer;
  position: relative;
  padding-left: 45px;
  line-height: \$body-sub-line-height;
}

.switch-button {
  position: relative;
  display: inline-block;
  width: 34px;
  height: 20px;
  cursor: pointer;
  background-color: #ccc;
  border-radius: 50px;
  transition: 0.4s;
  margin: 0 7px 0 0;
  top: 4px;
  position: absolute;
  top: 2px;
  left: 0;
}

.notify-box {
  .switch-button {
    top: 0;
  }
  .switch-container {
    top: 1px;
    position: relative;
  }
}

.switch {
  span.switch-text {
    display: block;
    padding-left: 48px;
    font-size: \$body-font-size;
    line-height: 22px;
    color: \$body-font-color;
  }
  input {
    display: none;
  }
  &.interactive-effect {
    input:checked + .switch-button:before {
      animation: switch-shadow-color 0.4s;
    }
    .switch-button:before {
      animation: switch-shadow 0.4s;
    }
  }
}

@keyframes switch-shadow {
  0% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.3);
  }

  100% {
    box-shadow: 0 0 0px 10px rgba(0, 0, 0, 0);
  }
}


@keyframes switch-shadow-color {
  0% {
    box-shadow: 0 0 0 0 rgba(\$primary-color, 0.6);
  }

  100% {
    box-shadow: 0 0 0px 10px rgba(0, 0, 0, 0);
  }
}


.switch-button:before {
  position: absolute;
  content: \"\";
  height: 16px;
  width: 16px;
  bottom: 2px;
  left: 2px;
  background-color: white;
  transition: 0.4s, box-shadow 0.3s;
  border-radius: 50px;
}

input:checked + .switch-button {
  background-color: \$primary-color;
  &:before {
    transform: translateX(14px);
  }
}", "@Publication/Front/sass/gui/_on-off-switch.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_on-off-switch.scss");
    }
}
