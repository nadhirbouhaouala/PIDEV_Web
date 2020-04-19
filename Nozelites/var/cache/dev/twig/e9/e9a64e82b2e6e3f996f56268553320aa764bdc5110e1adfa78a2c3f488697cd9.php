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

/* @Publication/Front/sass/gui/_icon-boxes.scss */
class __TwigTemplate_bb80b5fc786a2bbbbffedda267b583af0fcf6c6efcc6ca61d30f3b6011d6b012 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_icon-boxes.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_icon-boxes.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Icon Boxes
------------------------------------- */

.icon-box {
  text-align: center;
  margin-top: 45px;
  position: relative;
}

.icon-box-circle {
  background-color: #fff;
  width: 50%;
  height: 60px;
  z-index: 100;
  margin: 0 auto;
  display: inline-block;
  position: relative;
  margin-bottom: 35px;
}

.icon-box-circle-inner {
  font-size: 72px;
  color: #ccc;
  position: relative;
  width: 60px;
  margin: 0 auto;
  display: inline-block;
}

.icon-box-check {
  background-color: \$primary-color;
  width: 30px;
  height: 30px;
  line-height: 32px;
  font-size: 18px;
  border-radius: 50%;
  margin: 0 auto;
  position: relative;
  z-index: 100;
  animation: circle-box-anim 2s infinite;
  transition: 0.4s;
  color: #fff;
  font-weight: 500;
  position: absolute;
  bottom: -3px;
  right: -10px;
  animation: checkAnim 2s infinite;
  box-shadow: 0 0 0 5px rgba(\$primary-color, 0.1);
}

@keyframes checkAnim {
  0%,100% {
    box-shadow: 0 0 0 5px rgba(\$primary-color, 0.15);
  }

  50% {
    box-shadow: 0 0 0 8px rgba(\$primary-color, 0.15);
  }
}


.icon-box {
  span {
    color: \$body-font-color;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 500;
  }
  h4 {
    margin: 4px 0;
    line-height: \$body-sub-line-height;
  }
  h3 {
    margin: 4px 0;
    line-height: \$body-sub-line-height;
    font-size: 22px;
    font-weight: 500;
  }
  p {
    margin: 0;
    margin-top: 25px;
    font-style: 16px;
    padding: 0 10px;
    color: #808080;
  }
  &.with-line:before {
    content: \"\";
    height: 1px;
    width: 100%;
    position: absolute;
    left: 50%;
    top: 40px;
    background: #e9e9e9;
    display: block;
    z-index: 9;
  }
}

@media (max-width: 992px) {
  .icon-box.with-line:before {
    display: none;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_icon-boxes.scss";
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
/* Icon Boxes
------------------------------------- */

.icon-box {
  text-align: center;
  margin-top: 45px;
  position: relative;
}

.icon-box-circle {
  background-color: #fff;
  width: 50%;
  height: 60px;
  z-index: 100;
  margin: 0 auto;
  display: inline-block;
  position: relative;
  margin-bottom: 35px;
}

.icon-box-circle-inner {
  font-size: 72px;
  color: #ccc;
  position: relative;
  width: 60px;
  margin: 0 auto;
  display: inline-block;
}

.icon-box-check {
  background-color: \$primary-color;
  width: 30px;
  height: 30px;
  line-height: 32px;
  font-size: 18px;
  border-radius: 50%;
  margin: 0 auto;
  position: relative;
  z-index: 100;
  animation: circle-box-anim 2s infinite;
  transition: 0.4s;
  color: #fff;
  font-weight: 500;
  position: absolute;
  bottom: -3px;
  right: -10px;
  animation: checkAnim 2s infinite;
  box-shadow: 0 0 0 5px rgba(\$primary-color, 0.1);
}

@keyframes checkAnim {
  0%,100% {
    box-shadow: 0 0 0 5px rgba(\$primary-color, 0.15);
  }

  50% {
    box-shadow: 0 0 0 8px rgba(\$primary-color, 0.15);
  }
}


.icon-box {
  span {
    color: \$body-font-color;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 500;
  }
  h4 {
    margin: 4px 0;
    line-height: \$body-sub-line-height;
  }
  h3 {
    margin: 4px 0;
    line-height: \$body-sub-line-height;
    font-size: 22px;
    font-weight: 500;
  }
  p {
    margin: 0;
    margin-top: 25px;
    font-style: 16px;
    padding: 0 10px;
    color: #808080;
  }
  &.with-line:before {
    content: \"\";
    height: 1px;
    width: 100%;
    position: absolute;
    left: 50%;
    top: 40px;
    background: #e9e9e9;
    display: block;
    z-index: 9;
  }
}

@media (max-width: 992px) {
  .icon-box.with-line:before {
    display: none;
  }
}", "@Publication/Front/sass/gui/_icon-boxes.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_icon-boxes.scss");
    }
}
