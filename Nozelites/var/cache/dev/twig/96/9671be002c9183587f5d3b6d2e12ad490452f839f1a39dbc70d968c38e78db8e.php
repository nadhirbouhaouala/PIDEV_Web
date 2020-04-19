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

/* @Publication/Front/sass/layout/_common-typography.scss */
class __TwigTemplate_a0ee9d26523bcb5bf0679e632e2e32c69de1a3d1f56bcbf0d26c7ee0191aeec1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_common-typography.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_common-typography.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Common Styles
------------------------------------- */

body {
  color: \$body-font-color;
  font-size: \$body-font-size;
  line-height: \$body-line-height;
  background-color: #fff;
  &.gray {
    background-color: #fbfbfb;
  }
  p {
    font-size: \$body-font-size;
    line-height: \$body-line-height;
  }
  font-family: \$primary-font;
  text-transform: none;
}

/* Main Font */

h1, h2, h3, h4, h5, h6 {
  font-family: \$primary-font;
  text-transform: none;
}

input {
  &[type=\"text\"], &[type=\"password\"], &[type=\"email\"] {
    font-family: \$primary-font;
    text-transform: none;
  }
}

textarea, select {
  font-family: \$primary-font;
  text-transform: none;
}

input {
  &[type=\"button\"], &[type=\"submit\"] {
    font-family: \$primary-font;
    text-transform: none;
  }
}

button, body .pac-container {
  font-family: \$primary-font;
  text-transform: none;
}

/* Headlines */

h1, h2, h3, h4, h5, h6 {
  color: \$body-heading-color;
  font-weight: 500;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 32px;
}

h2 {
  font-size: 26px;
}

h3 {
  font-size: 22px;
}

h4 {
  font-size: \$body-font-size;
}

h5 {
  font-size: 14px;
}

h6 {
  font-size: 12px;
}

h3.page-title {
  font-size: \$single-page-heading-font-size;
  line-height: 32px;
}

.section {
  display: block;
  &.white {
    background: #fff;
  }
  &.gray {
    background: #f9f9f9;
  }
  &.border-top {
    border-top: 1px solid #e0e0e0;
  }
  &.border-bottom {
    border-bottom: 1px solid #e0e0e0;
  }
}

/* Section Headline */
.section-headline {
  display: block;
  position: relative;
  padding-right: 20%;
  &.centered {
    text-align: center;
    padding: 0;
  }
  span {
    font-size: 18px;
    line-height: \$body-sub-line-height;
    font-weight: 300;
    color: #888;
    margin-top: 0;
    display: block;
  }
  h1, h2, h3 {
    font-size: \$homepage-heading-font-size;
    line-height: 36px;
    font-weight: 500;
    color: \$body-heading-color;
  }
  h4 {
    font-size: \$homepage-heading-font-size;
    line-height: 36px;
    font-weight: 500;
    color: \$body-heading-color;
    font-size: 22px;
    line-height: 34px;
  }
  &.border-top {
    border-top: 1px solid #e0e0e0;
  }
}

h1.in-a-box, h2.in-a-box, h3.in-a-box, h5.in-a-box {
  display: inline-block;
  font-size: 18px;
  background-color: #333;
  color: #fff;
  border-radius: \$global-border-radius;
  padding: 8px 20px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
}

.section-headline h5 {
  font-size: \$body-font-size;
  font-weight: 600;
  line-height: 30px;
}


/* 
/* Single Task / Job / Profile Headings */

.single-page-section {
  margin-bottom: 55px;
  display: block;
  p:last-of-type {
    padding-bottom: 0;
    margin-bottom: 0;
  }
  h3 {
    margin-bottom: 20px;
    font-size: \$single-page-heading-font-size;
  }
  .job-listing h3.job-listing-title {
    margin-bottom: 0;
  }
}

/* Headline Link */

a.headline-link {
  position: absolute;
  right: 0;
  bottom: 0;
  &.bottom-icon:after {
    content: \"\\e957\";
    top: 3px;
  }
  &:after {
    content: \"\\e995\";
    font-family: \"Material-Icons\";
    font-size: 21px;
    line-height: 0;
    position: relative;
    top: 4px;
    margin-left: 5px;
  }
}

@media (max-width: 768px) {
  a.headline-link {
    position: relative;
    margin-top: 10px;
    display: inline-block;
  }
}

/* Classes for disabling things on mobile devices */
@media (max-width: 992px) {
  .hide-under-992px {
    display: none;
  }
}

@media (max-width: 768px) {
  .hide-under-768px {
    display: none;
  }
}

@media (max-width: 480px) {
  .hide-under-480px {
    display: none;
  }
}


/* Content & Sidebar Offsets */
.content-left-offset {
  padding-left: 30px;
}

.content-right-offset {
  padding-right: 30px;
}

@media (max-width: 992px) {
  .content-left-offset {
    padding-left: 15px;
  }
  .content-right-offset {
    padding-right: 15px;
  }
}


/* ---------------------------------- */
/* Icons Cheatsheet Styles
------------------------------------- */

.icon-set-container {
  display: block;
  width: calc(100% + 30px);
  left: -15px;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  justify-content: center;
}

.glyph.fs1 {
  position: relative;
  font-size: 20px;
  margin: 10px 15px;
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  border-radius: \$global-border-radius;
  flex: 1 1 calc(25% - 30px);
  align-content: center;
  justify-content: center;
  display: flex;
  flex-direction: column;
  padding: 15px 15px;
  transition: 0.3s;
  color: \$body-font-color;
  &:hover {
    transform: translateY(-5px);
    background-color: #333;
    color: #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    span:not([class*=\"mls\"]) {
      background-color: #fff;
      color: \$body-heading-color;
    }
  }
  .fs0, fieldset {
    display: none;
  }
  span:not([class*=\"mls\"]) {
    vertical-align: middle;
    top: -4px;
    height: 40px;
    width: 40px;
    background: rgba(0, 0, 0, 0.04);
    display: inline-block;
    line-height: 40px;
    text-align: center;
    border-radius: \$global-border-radius;
    font-size: 24px;
    transition: 0.3s;
    position: relative;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }
  .mls:not([class*=\"icon-\"]) {
    max-width: 80%;
    display: inline-block;
    overflow: hidden;
    font-size: 14px;
    line-height: 20px;
    top: 0;
    vertical-align: middle;
    padding-left: 55px;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_common-typography.scss";
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
/* Common Styles
------------------------------------- */

body {
  color: \$body-font-color;
  font-size: \$body-font-size;
  line-height: \$body-line-height;
  background-color: #fff;
  &.gray {
    background-color: #fbfbfb;
  }
  p {
    font-size: \$body-font-size;
    line-height: \$body-line-height;
  }
  font-family: \$primary-font;
  text-transform: none;
}

/* Main Font */

h1, h2, h3, h4, h5, h6 {
  font-family: \$primary-font;
  text-transform: none;
}

input {
  &[type=\"text\"], &[type=\"password\"], &[type=\"email\"] {
    font-family: \$primary-font;
    text-transform: none;
  }
}

textarea, select {
  font-family: \$primary-font;
  text-transform: none;
}

input {
  &[type=\"button\"], &[type=\"submit\"] {
    font-family: \$primary-font;
    text-transform: none;
  }
}

button, body .pac-container {
  font-family: \$primary-font;
  text-transform: none;
}

/* Headlines */

h1, h2, h3, h4, h5, h6 {
  color: \$body-heading-color;
  font-weight: 500;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 32px;
}

h2 {
  font-size: 26px;
}

h3 {
  font-size: 22px;
}

h4 {
  font-size: \$body-font-size;
}

h5 {
  font-size: 14px;
}

h6 {
  font-size: 12px;
}

h3.page-title {
  font-size: \$single-page-heading-font-size;
  line-height: 32px;
}

.section {
  display: block;
  &.white {
    background: #fff;
  }
  &.gray {
    background: #f9f9f9;
  }
  &.border-top {
    border-top: 1px solid #e0e0e0;
  }
  &.border-bottom {
    border-bottom: 1px solid #e0e0e0;
  }
}

/* Section Headline */
.section-headline {
  display: block;
  position: relative;
  padding-right: 20%;
  &.centered {
    text-align: center;
    padding: 0;
  }
  span {
    font-size: 18px;
    line-height: \$body-sub-line-height;
    font-weight: 300;
    color: #888;
    margin-top: 0;
    display: block;
  }
  h1, h2, h3 {
    font-size: \$homepage-heading-font-size;
    line-height: 36px;
    font-weight: 500;
    color: \$body-heading-color;
  }
  h4 {
    font-size: \$homepage-heading-font-size;
    line-height: 36px;
    font-weight: 500;
    color: \$body-heading-color;
    font-size: 22px;
    line-height: 34px;
  }
  &.border-top {
    border-top: 1px solid #e0e0e0;
  }
}

h1.in-a-box, h2.in-a-box, h3.in-a-box, h5.in-a-box {
  display: inline-block;
  font-size: 18px;
  background-color: #333;
  color: #fff;
  border-radius: \$global-border-radius;
  padding: 8px 20px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
}

.section-headline h5 {
  font-size: \$body-font-size;
  font-weight: 600;
  line-height: 30px;
}


/* 
/* Single Task / Job / Profile Headings */

.single-page-section {
  margin-bottom: 55px;
  display: block;
  p:last-of-type {
    padding-bottom: 0;
    margin-bottom: 0;
  }
  h3 {
    margin-bottom: 20px;
    font-size: \$single-page-heading-font-size;
  }
  .job-listing h3.job-listing-title {
    margin-bottom: 0;
  }
}

/* Headline Link */

a.headline-link {
  position: absolute;
  right: 0;
  bottom: 0;
  &.bottom-icon:after {
    content: \"\\e957\";
    top: 3px;
  }
  &:after {
    content: \"\\e995\";
    font-family: \"Material-Icons\";
    font-size: 21px;
    line-height: 0;
    position: relative;
    top: 4px;
    margin-left: 5px;
  }
}

@media (max-width: 768px) {
  a.headline-link {
    position: relative;
    margin-top: 10px;
    display: inline-block;
  }
}

/* Classes for disabling things on mobile devices */
@media (max-width: 992px) {
  .hide-under-992px {
    display: none;
  }
}

@media (max-width: 768px) {
  .hide-under-768px {
    display: none;
  }
}

@media (max-width: 480px) {
  .hide-under-480px {
    display: none;
  }
}


/* Content & Sidebar Offsets */
.content-left-offset {
  padding-left: 30px;
}

.content-right-offset {
  padding-right: 30px;
}

@media (max-width: 992px) {
  .content-left-offset {
    padding-left: 15px;
  }
  .content-right-offset {
    padding-right: 15px;
  }
}


/* ---------------------------------- */
/* Icons Cheatsheet Styles
------------------------------------- */

.icon-set-container {
  display: block;
  width: calc(100% + 30px);
  left: -15px;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  justify-content: center;
}

.glyph.fs1 {
  position: relative;
  font-size: 20px;
  margin: 10px 15px;
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  border-radius: \$global-border-radius;
  flex: 1 1 calc(25% - 30px);
  align-content: center;
  justify-content: center;
  display: flex;
  flex-direction: column;
  padding: 15px 15px;
  transition: 0.3s;
  color: \$body-font-color;
  &:hover {
    transform: translateY(-5px);
    background-color: #333;
    color: #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    span:not([class*=\"mls\"]) {
      background-color: #fff;
      color: \$body-heading-color;
    }
  }
  .fs0, fieldset {
    display: none;
  }
  span:not([class*=\"mls\"]) {
    vertical-align: middle;
    top: -4px;
    height: 40px;
    width: 40px;
    background: rgba(0, 0, 0, 0.04);
    display: inline-block;
    line-height: 40px;
    text-align: center;
    border-radius: \$global-border-radius;
    font-size: 24px;
    transition: 0.3s;
    position: relative;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }
  .mls:not([class*=\"icon-\"]) {
    max-width: 80%;
    display: inline-block;
    overflow: hidden;
    font-size: 14px;
    line-height: 20px;
    top: 0;
    vertical-align: middle;
    padding-left: 55px;
  }
}", "@Publication/Front/sass/layout/_common-typography.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_common-typography.scss");
    }
}
