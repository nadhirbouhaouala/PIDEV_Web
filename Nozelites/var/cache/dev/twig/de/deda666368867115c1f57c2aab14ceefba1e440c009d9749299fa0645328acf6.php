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

/* @Publication/Front/css/bootstrap-grid.css */
class __TwigTemplate_50105a42fa6e4577ea90d204a7a2360684ef2f6b7e1ccb9d6d312fea88628217 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/css/bootstrap-grid.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/css/bootstrap-grid.css"));

        // line 1
        echo "/*!
 * Bootstrap Grid v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
@-ms-viewport {
  width: device-width;
}

html {
  box-sizing: border-box;
  -ms-overflow-style: scrollbar;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1240px) {
  .container {
    max-width: 1090px;
  }
}

@media (min-width: 1367px) {
  .container {
    max-width: 1210px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*=\"col-\"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.333333%;
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.666667%;
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.333333%;
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.666667%;
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.666667%;
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1;
}

.order-last {
  -webkit-box-ordinal-group: 14;
  -ms-flex-order: 13;
  order: 13;
}

.order-0 {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0;
}

.order-1 {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1;
}

.order-2 {
  -webkit-box-ordinal-group: 3;
  -ms-flex-order: 2;
  order: 2;
}

.order-3 {
  -webkit-box-ordinal-group: 4;
  -ms-flex-order: 3;
  order: 3;
}

.order-4 {
  -webkit-box-ordinal-group: 5;
  -ms-flex-order: 4;
  order: 4;
}

.order-5 {
  -webkit-box-ordinal-group: 6;
  -ms-flex-order: 5;
  order: 5;
}

.order-6 {
  -webkit-box-ordinal-group: 7;
  -ms-flex-order: 6;
  order: 6;
}

.order-7 {
  -webkit-box-ordinal-group: 8;
  -ms-flex-order: 7;
  order: 7;
}

.order-8 {
  -webkit-box-ordinal-group: 9;
  -ms-flex-order: 8;
  order: 8;
}

.order-9 {
  -webkit-box-ordinal-group: 10;
  -ms-flex-order: 9;
  order: 9;
}

.order-10 {
  -webkit-box-ordinal-group: 11;
  -ms-flex-order: 10;
  order: 10;
}

.order-11 {
  -webkit-box-ordinal-group: 12;
  -ms-flex-order: 11;
  order: 11;
}

.order-12 {
  -webkit-box-ordinal-group: 13;
  -ms-flex-order: 12;
  order: 12;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.333333%;
  }
  .offset-sm-2 {
    margin-left: 16.666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.333333%;
  }
  .offset-sm-5 {
    margin-left: 41.666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.333333%;
  }
  .offset-sm-8 {
    margin-left: 66.666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.333333%;
  }
  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.333333%;
  }
  .offset-md-2 {
    margin-left: 16.666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.333333%;
  }
  .offset-md-5 {
    margin-left: 41.666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.333333%;
  }
  .offset-md-8 {
    margin-left: 66.666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.333333%;
  }
  .offset-md-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.333333%;
  }
  .offset-lg-2 {
    margin-left: 16.666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.333333%;
  }
  .offset-lg-5 {
    margin-left: 41.666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.333333%;
  }
  .offset-lg-8 {
    margin-left: 66.666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.333333%;
  }
  .offset-lg-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.333333%;
  }
  .offset-xl-2 {
    margin-left: 16.666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.333333%;
  }
  .offset-xl-5 {
    margin-left: 41.666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.333333%;
  }
  .offset-xl-8 {
    margin-left: 66.666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.333333%;
  }
  .offset-xl-11 {
    margin-left: 91.666667%;
  }
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important;
}

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}
/*# sourceMappingURL=bootstrap-grid.css.map */


/*!
 * Bootstrap Reboot v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Forked from Normalize.css, licensed MIT (https://github.com/necolas/normalize.css/blob/master/LICENSE.md)
 */
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  text-align: left;
  background-color: #fff;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent;
}

@-ms-viewport {
  width: device-width;
}

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}


[tabindex=\"-1\"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg:not(:root) {
  overflow: hidden;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: .5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html [type=\"button\"],
[type=\"reset\"],
[type=\"submit\"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type=\"button\"]::-moz-focus-inner,
[type=\"reset\"]::-moz-focus-inner,
[type=\"submit\"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type=\"radio\"],
input[type=\"checkbox\"] {
  box-sizing: border-box;
  padding: 0;
}

input[type=\"date\"],
input[type=\"time\"],
input[type=\"datetime-local\"],
input[type=\"month\"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type=\"number\"]::-webkit-inner-spin-button,
[type=\"number\"]::-webkit-outer-spin-button {
  height: auto;
}

[type=\"search\"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type=\"search\"]::-webkit-search-cancel-button,
[type=\"search\"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}
/*# sourceMappingURL=bootstrap-reboot.css.map */

.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after {
  content: \" \";
  display: flex;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after {
  clear: both;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/css/bootstrap-grid.css";
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
        return new Source("/*!
 * Bootstrap Grid v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
@-ms-viewport {
  width: device-width;
}

html {
  box-sizing: border-box;
  -ms-overflow-style: scrollbar;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1240px) {
  .container {
    max-width: 1090px;
  }
}

@media (min-width: 1367px) {
  .container {
    max-width: 1210px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*=\"col-\"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.333333%;
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.666667%;
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.333333%;
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.666667%;
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.666667%;
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1;
}

.order-last {
  -webkit-box-ordinal-group: 14;
  -ms-flex-order: 13;
  order: 13;
}

.order-0 {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0;
}

.order-1 {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1;
}

.order-2 {
  -webkit-box-ordinal-group: 3;
  -ms-flex-order: 2;
  order: 2;
}

.order-3 {
  -webkit-box-ordinal-group: 4;
  -ms-flex-order: 3;
  order: 3;
}

.order-4 {
  -webkit-box-ordinal-group: 5;
  -ms-flex-order: 4;
  order: 4;
}

.order-5 {
  -webkit-box-ordinal-group: 6;
  -ms-flex-order: 5;
  order: 5;
}

.order-6 {
  -webkit-box-ordinal-group: 7;
  -ms-flex-order: 6;
  order: 6;
}

.order-7 {
  -webkit-box-ordinal-group: 8;
  -ms-flex-order: 7;
  order: 7;
}

.order-8 {
  -webkit-box-ordinal-group: 9;
  -ms-flex-order: 8;
  order: 8;
}

.order-9 {
  -webkit-box-ordinal-group: 10;
  -ms-flex-order: 9;
  order: 9;
}

.order-10 {
  -webkit-box-ordinal-group: 11;
  -ms-flex-order: 10;
  order: 10;
}

.order-11 {
  -webkit-box-ordinal-group: 12;
  -ms-flex-order: 11;
  order: 11;
}

.order-12 {
  -webkit-box-ordinal-group: 13;
  -ms-flex-order: 12;
  order: 12;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.333333%;
  }
  .offset-sm-2 {
    margin-left: 16.666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.333333%;
  }
  .offset-sm-5 {
    margin-left: 41.666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.333333%;
  }
  .offset-sm-8 {
    margin-left: 66.666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.333333%;
  }
  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.333333%;
  }
  .offset-md-2 {
    margin-left: 16.666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.333333%;
  }
  .offset-md-5 {
    margin-left: 41.666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.333333%;
  }
  .offset-md-8 {
    margin-left: 66.666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.333333%;
  }
  .offset-md-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.333333%;
  }
  .offset-lg-2 {
    margin-left: 16.666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.333333%;
  }
  .offset-lg-5 {
    margin-left: 41.666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.333333%;
  }
  .offset-lg-8 {
    margin-left: 66.666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.333333%;
  }
  .offset-lg-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1;
  }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
  }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
  }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
  }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
  }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3;
  }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4;
  }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5;
  }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6;
  }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7;
  }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8;
  }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9;
  }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10;
  }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11;
  }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.333333%;
  }
  .offset-xl-2 {
    margin-left: 16.666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.333333%;
  }
  .offset-xl-5 {
    margin-left: 41.666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.333333%;
  }
  .offset-xl-8 {
    margin-left: 66.666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.333333%;
  }
  .offset-xl-11 {
    margin-left: 91.666667%;
  }
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important;
}

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}
/*# sourceMappingURL=bootstrap-grid.css.map */


/*!
 * Bootstrap Reboot v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Forked from Normalize.css, licensed MIT (https://github.com/necolas/normalize.css/blob/master/LICENSE.md)
 */
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  text-align: left;
  background-color: #fff;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent;
}

@-ms-viewport {
  width: device-width;
}

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}


[tabindex=\"-1\"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg:not(:root) {
  overflow: hidden;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: .5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html [type=\"button\"],
[type=\"reset\"],
[type=\"submit\"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type=\"button\"]::-moz-focus-inner,
[type=\"reset\"]::-moz-focus-inner,
[type=\"submit\"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type=\"radio\"],
input[type=\"checkbox\"] {
  box-sizing: border-box;
  padding: 0;
}

input[type=\"date\"],
input[type=\"time\"],
input[type=\"datetime-local\"],
input[type=\"month\"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type=\"number\"]::-webkit-inner-spin-button,
[type=\"number\"]::-webkit-outer-spin-button {
  height: auto;
}

[type=\"search\"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type=\"search\"]::-webkit-search-cancel-button,
[type=\"search\"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}
/*# sourceMappingURL=bootstrap-reboot.css.map */

.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after {
  content: \" \";
  display: flex;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after {
  clear: both;
}", "@Publication/Front/css/bootstrap-grid.css", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\css\\bootstrap-grid.css");
    }
}
