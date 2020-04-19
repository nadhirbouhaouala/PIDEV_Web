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

/* @Publication/Front/sass/layout/_form-styles.scss */
class __TwigTemplate_c63e87dc7d873fa1f0a5dfc72543fbe86a097a4443c372c8bb404ca371e3ad7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_form-styles.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_form-styles.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Forms Reset & Styles
------------------------------------- */

\$body-input-font-color:           #808080;

input {
  height: 48px;
  line-height: 48px;
  padding: 0 20px;
  outline: none;
  font-size: \$body-font-size;
  color: \$body-input-font-color;
  margin: 0 0 16px 0;
  max-width: 100%;
  width: 100%;
  box-sizing: border-box;
  display: block;
  background-color: #fff;
  font-weight: 500;
  opacity: 1;
  border-radius: \$global-border-radius;
  border: none;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  &[type=\"text\"], &[type=\"password\"], &[type=\"email\"], &[type=\"number\"] {
    height: 48px;
    line-height: 48px;
    padding: 0 20px;
    outline: none;
    font-size: \$body-font-size;
    color: \$body-input-font-color;
    margin: 0 0 16px 0;
    max-width: 100%;
    width: 100%;
    box-sizing: border-box;
    display: block;
    background-color: #fff;
    font-weight: 500;
    opacity: 1;
    border-radius: \$global-border-radius;
    border: none;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  }
}

textarea {
  height: 48px;
  line-height: 48px;
  padding: 0 20px;
  outline: none;
  font-size: \$body-font-size;
  color: \$body-input-font-color;
  margin: 0 0 16px 0;
  max-width: 100%;
  width: 100%;
  box-sizing: border-box;
  display: block;
  background-color: #fff;
  font-weight: 500;
  opacity: 1;
  border-radius: \$global-border-radius;
  border: none;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

select {
  height: 48px;
  line-height: 48px;
  padding: 0 20px;
  outline: none;
  font-size: \$body-font-size;
  color: \$body-input-font-color;
  margin: 0 0 16px 0;
  max-width: 100%;
  width: 100%;
  box-sizing: border-box;
  display: block;
  background-color: #fff;
  font-weight: 500;
  opacity: 1;
  border-radius: \$global-border-radius;
  border: none;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  padding: 15px 18px;
  cursor: pointer;
}

input {
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
  -ms-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
  &:focus, &[type=\"text\"]:focus, &[type=\"password\"]:focus, &[type=\"email\"]:focus, &[type=\"number\"]:focus {
    color: \$body-input-font-color;
    transition: box-shadow 0.2s !important;
    opacity: 1;
    border: none;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  }
}

textarea:focus {
  color: \$body-input-font-color;
  transition: box-shadow 0.2s !important;
  opacity: 1;
  border: none;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

input {
  &:-webkit-autofill {
    &:focus {
      -webkit-box-shadow: 0 0 0 30px #fff inset !important;
      -webkit-text-fill-color: \$body-input-font-color !important;
    }
    -webkit-box-shadow: 0 0 0 30px #fff inset !important;
    -webkit-text-fill-color: \$body-input-font-color !important;
  }
  &.with-border, &[type=\"text\"].with-border, &[type=\"password\"].with-border, &[type=\"email\"].with-border, &[type=\"number\"].with-border {
    border: 1px solid #e0e0e0;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
  }
}

/* With Border */

textarea.with-border, select.with-border {
  border: 1px solid #e0e0e0;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
}

input {
  &.with-border:focus, &[type=\"text\"].with-border:focus, &[type=\"password\"].with-border:focus, &[type=\"email\"].with-border:focus, &[type=\"number\"].with-border:focus {
    border: 1px solid #e0e0e0;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.08);
  }
}

textarea.with-border:focus {
  border: 1px solid #e0e0e0;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.08);
}

input {
  &[type=\"submit\"] {
    border: none;
    padding: 11px 18px;
    width: auto;
  }
  &[type=\"checkbox\"] {
    display: inline;
  }
  &[type=\"radio\"] {
    width: 15px;
    height: 15px;
    cursor: pointer;
    box-shadow: none;
  }
}

/* Input Placeholder Color */

::placeholder {
  color: \$body-input-font-color;
  opacity: 1;
}

textarea {
  height: auto;
  line-height: \$body-line-height;
  padding: 20px;
  min-height: 130px;
  transition: none !important;
  min-width: 100%;
}

label, legend {
  display: block;
  font-weight: bold;
  font-size: \$body-font-size;
  font-weight: normal;
  margin-bottom: 8px;
}

label span, legend span {
  font-weight: normal;
  font-size: 14px;
  color: #444;
}

fieldset {
  padding: 0;
  border: none;
}

button {
  border: none;
  margin: 0;
  padding: 0;
  width: auto;
  overflow: visible;
  background: transparent;
  color: inherit;
  font: inherit;
  line-height: normal;
  cursor: pointer;
}

a {
  color: \$primary-color;
  transition: 0.3s;
  outline: none !important;
}

button {
  outline: none !important;
}

a {
  &:focus, &:hover {
    text-decoration: none;
    color: \$body-heading-color;
  }
}

img {
  max-width: 100%;
}


/* ---------------------------------- */
/* Input With Icon
------------------------------------- */

.input-with-icon {
  display: block;
  position: relative;
  input {
    padding-right: 45px;
  }
  i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 15px;
    font-size: 20px;
    color: #a0a0a0;
    font-style: normal;
    cursor: normal;
    pointer-events: none;
    &.currency {
      font-size: 14px;
    }
  }
}

/* Input with boxed icon */

.input-with-icon-left {
  position: relative;
  input {
    padding-left: 65px;
  }
  i {
    position: absolute;
    top: 0;
    color: #a0a0a0;
    text-align: center;
    line-height: 48px;
    width: 48px;
    height: 48px;
    font-size: 19px;
    background-color: #f8f8f8;
    border: 1px solid #e0e0e0;
    box-sizing: border-box;
    display: block;
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
  }
  &.no-border i {
    border: none;
  }
}

/* ---------------------------------- */
/* Keywords Input
------------------------------------- */

.keywords-container {
  margin-bottom: -15px;
}

.keywords-list {
  display: block;
  float: left;
  height: 0;
}

.keyword {
  background-color: rgba(\$primary-color, 0.07);
  color: \$primary-color;
  display: inline-block;
  float: left;
  padding: 0;
  border-radius: \$global-border-radius;
  cursor: default;
  margin: 0 7px 7px 0;
  height: 35px;
  line-height: 35px;
  box-sizing: border-box;
  animation: KeywordIn 0.3s ease-in-out;
  animation-fill-mode: both;
  transition: 0.4s;
  overflow: hidden;
  max-width: 100%;
  font-size: 14.7px;
  &.keyword-removed {
    max-width: 0;
    margin: 0;
    overflow: hidden;
    opacity: 0;
    animation: KeywordOut 0.4s ease-in-out;
    animation-fill-mode: both;
    pointer-events: none;
  }
}

@keyframes KeywordIn {
  0% {
    opacity: 0;
    transform: scale(0.9);
  }

  100% {
    opacity: 1;
    transform: scale(1);
  }
}


@keyframes KeywordOut {
  0% {
    opacity: 1;
  }

  50% {
    opacity: 0;
  }

  100% {
    opacity: 0;
    margin-top: -35px;
  }
}


.keyword-text {
  padding-right: 12px;
}

.keyword .keyword-remove:before {
  display: inline-block;
  cursor: pointer;
  font-family: \"Feather-Icons\";
  content: \"\\ea02\";
  line-height: 20px;
  position: relative;
  top: 2px;
  margin-right: 4px;
  margin-left: 10px;
  font-size: 15px;
}

.keyword-input-container {
  position: relative;
  .keyword-input-button {
    position: absolute;
    top: 0;
    right: 0;
    height: 36px;
    width: 36px;
    padding: 0;
    color: #fff;
    background-color: \$primary-color;
    border-radius: \$global-border-radius;
    margin: 6px;
    font-size: 19px;
    text-align: center;
    line-height: 36px;
    i {
      color: #fff;
      position: relative;
      top: 2px;
    }
  }
}

input.keyword-input {
  margin: 0 0 15px 0;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_form-styles.scss";
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
/* Forms Reset & Styles
------------------------------------- */

\$body-input-font-color:           #808080;

input {
  height: 48px;
  line-height: 48px;
  padding: 0 20px;
  outline: none;
  font-size: \$body-font-size;
  color: \$body-input-font-color;
  margin: 0 0 16px 0;
  max-width: 100%;
  width: 100%;
  box-sizing: border-box;
  display: block;
  background-color: #fff;
  font-weight: 500;
  opacity: 1;
  border-radius: \$global-border-radius;
  border: none;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  &[type=\"text\"], &[type=\"password\"], &[type=\"email\"], &[type=\"number\"] {
    height: 48px;
    line-height: 48px;
    padding: 0 20px;
    outline: none;
    font-size: \$body-font-size;
    color: \$body-input-font-color;
    margin: 0 0 16px 0;
    max-width: 100%;
    width: 100%;
    box-sizing: border-box;
    display: block;
    background-color: #fff;
    font-weight: 500;
    opacity: 1;
    border-radius: \$global-border-radius;
    border: none;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  }
}

textarea {
  height: 48px;
  line-height: 48px;
  padding: 0 20px;
  outline: none;
  font-size: \$body-font-size;
  color: \$body-input-font-color;
  margin: 0 0 16px 0;
  max-width: 100%;
  width: 100%;
  box-sizing: border-box;
  display: block;
  background-color: #fff;
  font-weight: 500;
  opacity: 1;
  border-radius: \$global-border-radius;
  border: none;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

select {
  height: 48px;
  line-height: 48px;
  padding: 0 20px;
  outline: none;
  font-size: \$body-font-size;
  color: \$body-input-font-color;
  margin: 0 0 16px 0;
  max-width: 100%;
  width: 100%;
  box-sizing: border-box;
  display: block;
  background-color: #fff;
  font-weight: 500;
  opacity: 1;
  border-radius: \$global-border-radius;
  border: none;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  padding: 15px 18px;
  cursor: pointer;
}

input {
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
  -ms-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
  &:focus, &[type=\"text\"]:focus, &[type=\"password\"]:focus, &[type=\"email\"]:focus, &[type=\"number\"]:focus {
    color: \$body-input-font-color;
    transition: box-shadow 0.2s !important;
    opacity: 1;
    border: none;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
  }
}

textarea:focus {
  color: \$body-input-font-color;
  transition: box-shadow 0.2s !important;
  opacity: 1;
  border: none;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.12);
}

input {
  &:-webkit-autofill {
    &:focus {
      -webkit-box-shadow: 0 0 0 30px #fff inset !important;
      -webkit-text-fill-color: \$body-input-font-color !important;
    }
    -webkit-box-shadow: 0 0 0 30px #fff inset !important;
    -webkit-text-fill-color: \$body-input-font-color !important;
  }
  &.with-border, &[type=\"text\"].with-border, &[type=\"password\"].with-border, &[type=\"email\"].with-border, &[type=\"number\"].with-border {
    border: 1px solid #e0e0e0;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
  }
}

/* With Border */

textarea.with-border, select.with-border {
  border: 1px solid #e0e0e0;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.05);
}

input {
  &.with-border:focus, &[type=\"text\"].with-border:focus, &[type=\"password\"].with-border:focus, &[type=\"email\"].with-border:focus, &[type=\"number\"].with-border:focus {
    border: 1px solid #e0e0e0;
    box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.08);
  }
}

textarea.with-border:focus {
  border: 1px solid #e0e0e0;
  box-shadow: 0 1px 4px 0px rgba(0, 0, 0, 0.08);
}

input {
  &[type=\"submit\"] {
    border: none;
    padding: 11px 18px;
    width: auto;
  }
  &[type=\"checkbox\"] {
    display: inline;
  }
  &[type=\"radio\"] {
    width: 15px;
    height: 15px;
    cursor: pointer;
    box-shadow: none;
  }
}

/* Input Placeholder Color */

::placeholder {
  color: \$body-input-font-color;
  opacity: 1;
}

textarea {
  height: auto;
  line-height: \$body-line-height;
  padding: 20px;
  min-height: 130px;
  transition: none !important;
  min-width: 100%;
}

label, legend {
  display: block;
  font-weight: bold;
  font-size: \$body-font-size;
  font-weight: normal;
  margin-bottom: 8px;
}

label span, legend span {
  font-weight: normal;
  font-size: 14px;
  color: #444;
}

fieldset {
  padding: 0;
  border: none;
}

button {
  border: none;
  margin: 0;
  padding: 0;
  width: auto;
  overflow: visible;
  background: transparent;
  color: inherit;
  font: inherit;
  line-height: normal;
  cursor: pointer;
}

a {
  color: \$primary-color;
  transition: 0.3s;
  outline: none !important;
}

button {
  outline: none !important;
}

a {
  &:focus, &:hover {
    text-decoration: none;
    color: \$body-heading-color;
  }
}

img {
  max-width: 100%;
}


/* ---------------------------------- */
/* Input With Icon
------------------------------------- */

.input-with-icon {
  display: block;
  position: relative;
  input {
    padding-right: 45px;
  }
  i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 15px;
    font-size: 20px;
    color: #a0a0a0;
    font-style: normal;
    cursor: normal;
    pointer-events: none;
    &.currency {
      font-size: 14px;
    }
  }
}

/* Input with boxed icon */

.input-with-icon-left {
  position: relative;
  input {
    padding-left: 65px;
  }
  i {
    position: absolute;
    top: 0;
    color: #a0a0a0;
    text-align: center;
    line-height: 48px;
    width: 48px;
    height: 48px;
    font-size: 19px;
    background-color: #f8f8f8;
    border: 1px solid #e0e0e0;
    box-sizing: border-box;
    display: block;
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
  }
  &.no-border i {
    border: none;
  }
}

/* ---------------------------------- */
/* Keywords Input
------------------------------------- */

.keywords-container {
  margin-bottom: -15px;
}

.keywords-list {
  display: block;
  float: left;
  height: 0;
}

.keyword {
  background-color: rgba(\$primary-color, 0.07);
  color: \$primary-color;
  display: inline-block;
  float: left;
  padding: 0;
  border-radius: \$global-border-radius;
  cursor: default;
  margin: 0 7px 7px 0;
  height: 35px;
  line-height: 35px;
  box-sizing: border-box;
  animation: KeywordIn 0.3s ease-in-out;
  animation-fill-mode: both;
  transition: 0.4s;
  overflow: hidden;
  max-width: 100%;
  font-size: 14.7px;
  &.keyword-removed {
    max-width: 0;
    margin: 0;
    overflow: hidden;
    opacity: 0;
    animation: KeywordOut 0.4s ease-in-out;
    animation-fill-mode: both;
    pointer-events: none;
  }
}

@keyframes KeywordIn {
  0% {
    opacity: 0;
    transform: scale(0.9);
  }

  100% {
    opacity: 1;
    transform: scale(1);
  }
}


@keyframes KeywordOut {
  0% {
    opacity: 1;
  }

  50% {
    opacity: 0;
  }

  100% {
    opacity: 0;
    margin-top: -35px;
  }
}


.keyword-text {
  padding-right: 12px;
}

.keyword .keyword-remove:before {
  display: inline-block;
  cursor: pointer;
  font-family: \"Feather-Icons\";
  content: \"\\ea02\";
  line-height: 20px;
  position: relative;
  top: 2px;
  margin-right: 4px;
  margin-left: 10px;
  font-size: 15px;
}

.keyword-input-container {
  position: relative;
  .keyword-input-button {
    position: absolute;
    top: 0;
    right: 0;
    height: 36px;
    width: 36px;
    padding: 0;
    color: #fff;
    background-color: \$primary-color;
    border-radius: \$global-border-radius;
    margin: 6px;
    font-size: 19px;
    text-align: center;
    line-height: 36px;
    i {
      color: #fff;
      position: relative;
      top: 2px;
    }
  }
}

input.keyword-input {
  margin: 0 0 15px 0;
}", "@Publication/Front/sass/layout/_form-styles.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_form-styles.scss");
    }
}
