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

/* @Publication/Front/sass/gui/_custom-upload-button.scss */
class __TwigTemplate_a8bee1a8f9e86222effc1eda7b12bbbfa3aabf7a596e9c6fd4ca5532e3a3fb22 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_custom-upload-button.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_custom-upload-button.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Custom Upload Button
------------------------------------- */

.uploadButton {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-bottom: 10px;
  width: 100%;
  font-style: normal;
  font-size: 14px;
  .uploadButton-input {
    opacity: 0;
    position: absolute;
    overflow: hidden;
    z-index: -1;
    pointer-events: none;
  }
  .uploadButton-button {
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    height: 44px;
    padding: 10px 18px;
    cursor: pointer;
    border-radius: \$global-border-radius;
    color: \$primary-color;
    background-color: transparent;
    border: 1px solid \$primary-color;
    flex-direction: row;
    transition: 0.3s;
    margin: 0;
    outline: none;
    box-shadow: 0 3px 10px rgba(\$primary-color, 0.1);
    &:hover {
      background-color: \$primary-color;
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
      color: #fff;
    }
  }
  .uploadButton-file-name {
    flex-grow: 1;
    display: flex;
    align-items: center;
    flex: 1;
    box-sizing: border-box;
    padding: 0 10px;
    padding-left: 18px;
    min-height: 42px;
    top: 1px;
    position: relative;
    color: #888;
    background-color: transparent;
    overflow: hidden;
    line-height: 22px;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_custom-upload-button.scss";
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
/* Custom Upload Button
------------------------------------- */

.uploadButton {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-bottom: 10px;
  width: 100%;
  font-style: normal;
  font-size: 14px;
  .uploadButton-input {
    opacity: 0;
    position: absolute;
    overflow: hidden;
    z-index: -1;
    pointer-events: none;
  }
  .uploadButton-button {
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    height: 44px;
    padding: 10px 18px;
    cursor: pointer;
    border-radius: \$global-border-radius;
    color: \$primary-color;
    background-color: transparent;
    border: 1px solid \$primary-color;
    flex-direction: row;
    transition: 0.3s;
    margin: 0;
    outline: none;
    box-shadow: 0 3px 10px rgba(\$primary-color, 0.1);
    &:hover {
      background-color: \$primary-color;
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
      color: #fff;
    }
  }
  .uploadButton-file-name {
    flex-grow: 1;
    display: flex;
    align-items: center;
    flex: 1;
    box-sizing: border-box;
    padding: 0 10px;
    padding-left: 18px;
    min-height: 42px;
    top: 1px;
    position: relative;
    color: #888;
    background-color: transparent;
    overflow: hidden;
    line-height: 22px;
  }
}", "@Publication/Front/sass/gui/_custom-upload-button.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_custom-upload-button.scss");
    }
}
