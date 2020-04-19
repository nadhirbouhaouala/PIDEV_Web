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

/* @Publication/Front/sass/invoice.scss */
class __TwigTemplate_37a7b9bd6c035edbbb18f09a74b9c5c7442ebccf525547469fe86f77627884fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/invoice.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/invoice.scss"));

        // line 1
        echo "@charset \"UTF-8\";

/*
* Author: Vasterad
* URL: https://themeforest.net/user/vasterad/portfolio/
*/

/* ------------------------------------------------------------------- */
/* Bootstrap Grid Import
---------------------------------------------------------------------- */
@import 'layout/bootstrap-grid';

/* ------------------------------------------------------------------- */
/* Invoice Styles
---------------------------------------------------------------------- */
@import url('https://fonts.googleapis.com/css?family=Nunito:400,600&subset=latin-ext');

html {
  font-family: \"Nunito\", \"HelveticaNeue\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  text-transform: none;
  font-size: 100%;
}

strong {
  font-weight: 600;
  color: #333;
  display: inline-block;
}

body {
  background: #f4f4f4;
  color: #666;
  font-weight: 300;
  line-height: 28px;
}

#invoice {
  background: white;
  width: auto;
  max-width: 900px;
  padding: 60px;
  margin: 0px auto 60px auto;
  border-radius: 4px;
}

h1, h2, h3 {
  font-weight: 300;
  color: #333;
  clear: both;
  margin: 0;
}

h2 {
  font-size: 36px;
  line-height: 1;
  margin: 15px 0 45px 0;
}

p {
  margin: 0;
  padding-bottom: 40px;
  clear: both;
}

#logo img {
  max-height: 44px;
  transform: translate3d(0, 0, 0);
}

#details {
  text-align: right;
}

table {
  width: 100%;
  margin: 0 0 30px;
  padding: 1px 0;
  border-spacing: 0;
  border-bottom: 1px solid #ddd;
}

th, td {
  padding: 15px 0;
  text-align: left;
}

th {
  font-weight: 700;
  border-bottom: 1px solid #ddd;
  font-size: 16px;
  color: #333;
  &:last-child {
    text-align: right;
  }
}

td:last-child {
  text-align: right;
}

th span {
  position: relative;
  display: inline-block;
  height: 100%;
  &::after {
    content: '';
    width: 100%;
    bottom: -16px;
    position: absolute;
    right: 0;
    border-bottom: 1px solid #2a41e8;
  }
}

#footer {
  width: 100%;
  border-top: 1px solid #ddd;
  margin: 60px 0 0 0;
  padding: 20px 0 0 0;
  list-style: none;
  font-size: 15px;
  li {
    display: inline-block;
    padding: 0 20px;
    border-right: 1px solid #ddd;
    line-height: 11px;
    &:first-child {
      padding-left: 0;
    }
    &:last-child {
      border: none;
    }
    span {
      color: #2a41e8;
    }
  }
}

.margin-top-20 {
  margin-top: 20px;
}

.margin-bottom-5 {
  margin-bottom: 5px;
}

.print-button-container {
  width: 100%;
  text-align: center;
}

.print-button {
  line-height: 24px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  background-color: #333;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  padding: 10px 20px;
  display: inline-block;
  text-align: center;
  margin: 40px auto 40px auto;
  transition: 0.3s;
  text-decoration: none !important;
  outline: none !important;
  width: auto;
  &:hover {
    line-height: 24px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    background-color: #333;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    padding: 10px 20px;
    display: inline-block;
    text-align: center;
    margin: 40px auto 40px auto;
    transition: 0.3s;
    text-decoration: none !important;
    outline: none !important;
    width: auto;
    background-color: #444;
  }
}

/* Print Styles*/
@media print {
  .print-button-container, .print-button {
    display: none;
    opacity: 0;
    visibility: hidden;
    height: 0;
  }
  body {
    background: #fff;
    height: 100%;
    color: #666;
  }
  strong, th, h1, h2, h3 {
    color: #111;
  }
  table, th {
    border-color: #bbb;
  }
  #footer {
    border-color: #bbb;
    li {
      border-color: #bbb;
    }
  }
  @page {
    size: A4;
    margin: 0 17mm;
  }

  #invoice {
    max-width: 100%;
    padding: 17mm 0;
    margin: 0;
    position: relative;
  }
  #details {
    position: relative;
    top: -30px;
  }
  #footer {
    position: fixed;
    bottom: 17mm;
  }
  .content-block, p {
    page-break-inside: avoid;
  }
  html, body {
    width: 210mm;
    height: 297mm;
  }
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11 {
    float: left;
  }
  .col-md-12 {
    float: left;
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/invoice.scss";
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
        return new Source("@charset \"UTF-8\";

/*
* Author: Vasterad
* URL: https://themeforest.net/user/vasterad/portfolio/
*/

/* ------------------------------------------------------------------- */
/* Bootstrap Grid Import
---------------------------------------------------------------------- */
@import 'layout/bootstrap-grid';

/* ------------------------------------------------------------------- */
/* Invoice Styles
---------------------------------------------------------------------- */
@import url('https://fonts.googleapis.com/css?family=Nunito:400,600&subset=latin-ext');

html {
  font-family: \"Nunito\", \"HelveticaNeue\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  text-transform: none;
  font-size: 100%;
}

strong {
  font-weight: 600;
  color: #333;
  display: inline-block;
}

body {
  background: #f4f4f4;
  color: #666;
  font-weight: 300;
  line-height: 28px;
}

#invoice {
  background: white;
  width: auto;
  max-width: 900px;
  padding: 60px;
  margin: 0px auto 60px auto;
  border-radius: 4px;
}

h1, h2, h3 {
  font-weight: 300;
  color: #333;
  clear: both;
  margin: 0;
}

h2 {
  font-size: 36px;
  line-height: 1;
  margin: 15px 0 45px 0;
}

p {
  margin: 0;
  padding-bottom: 40px;
  clear: both;
}

#logo img {
  max-height: 44px;
  transform: translate3d(0, 0, 0);
}

#details {
  text-align: right;
}

table {
  width: 100%;
  margin: 0 0 30px;
  padding: 1px 0;
  border-spacing: 0;
  border-bottom: 1px solid #ddd;
}

th, td {
  padding: 15px 0;
  text-align: left;
}

th {
  font-weight: 700;
  border-bottom: 1px solid #ddd;
  font-size: 16px;
  color: #333;
  &:last-child {
    text-align: right;
  }
}

td:last-child {
  text-align: right;
}

th span {
  position: relative;
  display: inline-block;
  height: 100%;
  &::after {
    content: '';
    width: 100%;
    bottom: -16px;
    position: absolute;
    right: 0;
    border-bottom: 1px solid #2a41e8;
  }
}

#footer {
  width: 100%;
  border-top: 1px solid #ddd;
  margin: 60px 0 0 0;
  padding: 20px 0 0 0;
  list-style: none;
  font-size: 15px;
  li {
    display: inline-block;
    padding: 0 20px;
    border-right: 1px solid #ddd;
    line-height: 11px;
    &:first-child {
      padding-left: 0;
    }
    &:last-child {
      border: none;
    }
    span {
      color: #2a41e8;
    }
  }
}

.margin-top-20 {
  margin-top: 20px;
}

.margin-bottom-5 {
  margin-bottom: 5px;
}

.print-button-container {
  width: 100%;
  text-align: center;
}

.print-button {
  line-height: 24px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  background-color: #333;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  padding: 10px 20px;
  display: inline-block;
  text-align: center;
  margin: 40px auto 40px auto;
  transition: 0.3s;
  text-decoration: none !important;
  outline: none !important;
  width: auto;
  &:hover {
    line-height: 24px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    background-color: #333;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    padding: 10px 20px;
    display: inline-block;
    text-align: center;
    margin: 40px auto 40px auto;
    transition: 0.3s;
    text-decoration: none !important;
    outline: none !important;
    width: auto;
    background-color: #444;
  }
}

/* Print Styles*/
@media print {
  .print-button-container, .print-button {
    display: none;
    opacity: 0;
    visibility: hidden;
    height: 0;
  }
  body {
    background: #fff;
    height: 100%;
    color: #666;
  }
  strong, th, h1, h2, h3 {
    color: #111;
  }
  table, th {
    border-color: #bbb;
  }
  #footer {
    border-color: #bbb;
    li {
      border-color: #bbb;
    }
  }
  @page {
    size: A4;
    margin: 0 17mm;
  }

  #invoice {
    max-width: 100%;
    padding: 17mm 0;
    margin: 0;
    position: relative;
  }
  #details {
    position: relative;
    top: -30px;
  }
  #footer {
    position: fixed;
    bottom: 17mm;
  }
  .content-block, p {
    page-break-inside: avoid;
  }
  html, body {
    width: 210mm;
    height: 297mm;
  }
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11 {
    float: left;
  }
  .col-md-12 {
    float: left;
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}", "@Publication/Front/sass/invoice.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\invoice.scss");
    }
}
