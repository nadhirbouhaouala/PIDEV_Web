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

/* @Publication/Front/sass/layout/_titlebar.scss */
class __TwigTemplate_fd506f3e3287229f0e4ee8ed065ffa9019cca4824d2e29797dcb95cb8ccb62a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_titlebar.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_titlebar.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Titlebar
------------------------------------- */

#titlebar {
  background-color: #f8f8f8;
  position: relative;
  padding: 70px 0;
  margin-bottom: 65px;
  &.gradient {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.03) 0%, rgba(255, 255, 255, 0));
    padding-bottom: 0;
  }
  &.white {
    background: #fff;
    padding-bottom: 0;
  }
  &.transparent {
    background: transparent;
  }
  span {
    a {
      font-size: 20px;
      color: #888;
      margin-bottom: 3px;
      margin-top: 3px;
      display: block;
    }
    font-size: 20px;
    color: #888;
    margin-bottom: 3px;
    margin-top: 3px;
    display: block;
  }
  #breadcrumbs span {
    font-size: 14px;
  }
  h1, h2 {
    font-size: 30px;
    line-height: 40px;
    margin: 1px 0 3px 0;
  }
}

/* Breadcrumbs */
#breadcrumbs {
  position: absolute;
  right: 15px;
  display: inline-block;
  font-size: 14.7px;
  top: 50%;
  transform: translateY(-51%);
  border-radius: \$global-border-radius;
  font-weight: 600;
  color: \$body-heading-color;
  background-color: #f0f0f0;
  ul {
    margin: 0;
    padding: 12px 22px;
    line-height: 23px;
    li {
      a {
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        color: \$body-font-color;
        font-weight: 500;
        &:hover {
          color: \$primary-color;
        }
      }
      display: inline-block;
      list-style: none;
      margin: 0 0 0 7px;
      &:first-child {
        &:before {
          display: none;
        }
        margin-left: 0;
      }
      &:before {
        content: \"\";
        display: inline-block;
        height: 0;
        width: 0;
        border-top: 4px solid transparent;
        border-bottom: 4px solid transparent;
        border-left: 4px solid #aaa;
        font-size: 14px;
        margin-right: 12px;
      }
      &.home-icon {
        a {
          opacity: 1;
          font-size: 24px;
          top: 4px;
          position: relative;
          line-height: 0;
          padding: 0;
          display: inline-block;
        }
        i {
          line-height: 0;
        }
      }
    }
  }
  &.dark {
    color: rgba(255, 255, 255, 1);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    background-color: #333;
    ul li {
      a {
        color: rgba(255, 255, 255, 1);
        &:hover {
          color: rgba(255, 255, 255, 1);
        }
      }
      &:before {
        border-left: 4px solid rgba(255, 255, 255, 0.3);
      }
    }
  }
  &.white {
    color: \$body-heading-color;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    ul li {
      a {
        color: \$body-font-color;
        &:hover {
          color: \$primary-color;
        }
      }
      &:before {
        border-left: 4px solid rgba(0, 0, 0, 0.3);
      }
    }
  }
}


/* Adjustments for \"Single Page Header\" */
.single-page-header {
  #breadcrumbs {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
    margin-left: auto;
  }
  margin-bottom: 65px;
  padding: 60px 0;
  position: relative;
  .container {
    z-index: 100;
    position: relative;
  }
  &:after, &:before {
    content: \"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    z-index: 15;
    background: linear-gradient(to right, rgba(247, 247, 247, 1) 50%, rgba(247, 247, 247, 0.8) 70%, rgba(247, 247, 247, 0.8) 90%);
  }
  &:after {
    z-index: 5;
    background-color: #f7f7f7;
  }
  .background-image-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 100% 50%;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
    left: 50%;
    z-index: 10;
  }
  .single-page-header-inner {
    display: flex;
  }
  .left-side, .right-side {
    flex: 1;
    display: flex;
    align-items: center;
  }
  .left-side {
    padding-right: 30px;
  }
  .right-side {
    max-width: 35%;
  }
  .header-image {
    a {
      display: flex;
      height: 100%;
    }
    height: 140px;
    flex: 0 0 140px;
    margin-right: 35px;
    background: #fff;
    border-radius: \$global-border-radius;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
    display: flex;
    padding: 0 20px;
  }
  &.freelancer-header .header-image {
    background: #fff;
    border-radius: 50%;
    box-shadow: none;
    display: flex;
    padding: 0;
    overflow: hidden;
    height: 130px;
    flex: 0 0 130px;
    width: 130px;
  }
  .header-image img {
    align-self: center;
    transform: translate3d(0, 0, 0);
  }
  .header-details {
    flex: 1;
    h3 {
      color: \$body-heading-color;
      font-size: 26px;
      margin: 0;
      padding: 0;
      margin-bottom: 12px;
      margin-top: 3px;
      line-height: 36px;
      position: relative;
      padding-right: 0;
      display: inline-block;
      span {
        color: #808080;
        display: block;
        font-size: 20px;
        font-weight: 300;
        margin-top: -3px;
      }
    }
    h5 {
      font-size: \$body-font-size;
      font-weight: 600;
      color: \$body-heading-color;
      font-size: \$body-font-size;
      font-weight: 600;
      color: \$body-heading-color;
    }
    ul {
      padding: 0;
      margin: 0;
      list-style: none;
      line-height: 24px;
      margin-bottom: -7px;
    }
    li {
      display: inline-block;
      margin-right: 20px;
      margin-bottom: 12px;
      &:last-child {
        margin-right: 0;
      }
      a {
        color: \$body-font-color;
        &:hover {
          color: \$primary-color;
        }
      }
      i {
        font-size: 20px;
        position: relative;
        top: 2px;
        margin-right: 2px;
      }
      .verified-badge {
        transform: scale(0.85);
        position: relative;
        top: 2px;
      }
      .verified-txt {
        color: #299840;
      }
      .star-rating {
        position: relative;
        top: 6px;
      }
    }
    ul li img.flag {
      height: 16px;
      border-radius: 3px;
      position: relative;
      top: -1px;
      display: inline-block;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
      margin-right: 5px;
      cursor: default;
    }
  }
  .salary-box {
    border-radius: \$global-border-radius;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
    background-color: #fff;
    display: inline-block;
    padding: 20px 25px;
    margin-left: auto;
  }
}

@media (max-width: 992px) {
  .single-page-header #breadcrumbs {
    margin: 30px 0 20px 0;
  }
}

/* ---------------------------------- */
/* Single Page Header
------------------------------------- */

@media (min-width: 1365px) {
  .single-page-header .right-side {
    max-width: 30%;
  }
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .single-page-header .header-image {
    max-width: 140px;
  }
}

/* IE 11 FIX */
@media all and (-ms-high-contrast: none) {
  .single-page-header .header-image img {
    width: 100%;
  }
}


/* Salary Box */

.salary-box {
  .salary-type {
    color: #888;
    line-height: 20px;
    margin: 3px 0 8px 0;
  }
  .salary-amount {
    color: \$body-heading-color;
    font-size: 28px;
    line-height: 36px;
    font-weight: 300;
  }
}

/* Media Queries for Single Page Header */
@media (max-width: 1366px) {
  .single-page-header.freelancer-header .header-image {
    height: 130px;
    flex: 0 0 130px;
    width: 130px;
  }
}

@media (max-width: 1240px) {
  .single-page-header {
    .header-details h3 {
      font-size: 26px;
    }
    padding: 55px 0;
  }
  .salary-box .salary-amount {
    font-size: 26px;
    line-height: 32px;
  }
  .single-page-header {
    .header-image {
      height: 120px;
      flex: 0 0 120px;
    }
    &.freelancer-header .header-image {
      height: 120px;
      flex: 0 0 120px;
      width: 120px;
    }
  }
}

@media (max-width: 992px) {
  .single-page-header {
    .single-page-header-inner {
      display: flex;
      flex-direction: column;
    }
    .left-side {
      padding-right: 0;
    }
    .header-details h3 {
      font-size: 24px;
    }
    padding: 35px 0;
    .salary-amount {
      font-size: 22px;
      line-height: 24px;
    }
    .salary-box {
      padding: 0;
      margin-top: 15px;
      margin-bottom: 20px;
      background-color: transparent;
      box-shadow: none;
    }
  }
  .salary-box .salary-type {
    font-weight: 600;
    color: \$body-heading-color;
  }
  .single-page-header {
    .left-side, .right-side {
      display: block;
      max-width: 100%;
    }
  }
  .single-page-header-inner {
    display: block;
    max-width: 100%;
  }
  .single-page-header {
    .header-image {
      height: 70px;
      width: auto;
      padding: 15px 20px;
      margin: 15px 0;
      display: inline-block;
      img {
        height: 100%;
      }
    }
    .header-details h5 {
      border-top: 1px solid #e0e0e0;
      padding-top: 25px;
    }
    &.freelancer-header {
      .header-image {
        height: 70px;
        flex: 0 0 70px;
        width: 70px;
        margin-bottom: -70px;
      }
      .header-details h3 {
        margin-left: 90px;
      }
    }
  }
}

@media (max-width: 768px) {
  .single-page-header {
    &:after, &:before {
      background: #f7f7f7;
    }
    &.freelancer-header {
      .header-image {
        height: 70px;
        flex: 0 0 70px;
        width: 70px;
        margin-bottom: -70px;
      }
      .header-details h3 {
        margin-left: 90px;
      }
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_titlebar.scss";
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
/* Titlebar
------------------------------------- */

#titlebar {
  background-color: #f8f8f8;
  position: relative;
  padding: 70px 0;
  margin-bottom: 65px;
  &.gradient {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.03) 0%, rgba(255, 255, 255, 0));
    padding-bottom: 0;
  }
  &.white {
    background: #fff;
    padding-bottom: 0;
  }
  &.transparent {
    background: transparent;
  }
  span {
    a {
      font-size: 20px;
      color: #888;
      margin-bottom: 3px;
      margin-top: 3px;
      display: block;
    }
    font-size: 20px;
    color: #888;
    margin-bottom: 3px;
    margin-top: 3px;
    display: block;
  }
  #breadcrumbs span {
    font-size: 14px;
  }
  h1, h2 {
    font-size: 30px;
    line-height: 40px;
    margin: 1px 0 3px 0;
  }
}

/* Breadcrumbs */
#breadcrumbs {
  position: absolute;
  right: 15px;
  display: inline-block;
  font-size: 14.7px;
  top: 50%;
  transform: translateY(-51%);
  border-radius: \$global-border-radius;
  font-weight: 600;
  color: \$body-heading-color;
  background-color: #f0f0f0;
  ul {
    margin: 0;
    padding: 12px 22px;
    line-height: 23px;
    li {
      a {
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        color: \$body-font-color;
        font-weight: 500;
        &:hover {
          color: \$primary-color;
        }
      }
      display: inline-block;
      list-style: none;
      margin: 0 0 0 7px;
      &:first-child {
        &:before {
          display: none;
        }
        margin-left: 0;
      }
      &:before {
        content: \"\";
        display: inline-block;
        height: 0;
        width: 0;
        border-top: 4px solid transparent;
        border-bottom: 4px solid transparent;
        border-left: 4px solid #aaa;
        font-size: 14px;
        margin-right: 12px;
      }
      &.home-icon {
        a {
          opacity: 1;
          font-size: 24px;
          top: 4px;
          position: relative;
          line-height: 0;
          padding: 0;
          display: inline-block;
        }
        i {
          line-height: 0;
        }
      }
    }
  }
  &.dark {
    color: rgba(255, 255, 255, 1);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    background-color: #333;
    ul li {
      a {
        color: rgba(255, 255, 255, 1);
        &:hover {
          color: rgba(255, 255, 255, 1);
        }
      }
      &:before {
        border-left: 4px solid rgba(255, 255, 255, 0.3);
      }
    }
  }
  &.white {
    color: \$body-heading-color;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    ul li {
      a {
        color: \$body-font-color;
        &:hover {
          color: \$primary-color;
        }
      }
      &:before {
        border-left: 4px solid rgba(0, 0, 0, 0.3);
      }
    }
  }
}


/* Adjustments for \"Single Page Header\" */
.single-page-header {
  #breadcrumbs {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
    margin-left: auto;
  }
  margin-bottom: 65px;
  padding: 60px 0;
  position: relative;
  .container {
    z-index: 100;
    position: relative;
  }
  &:after, &:before {
    content: \"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    z-index: 15;
    background: linear-gradient(to right, rgba(247, 247, 247, 1) 50%, rgba(247, 247, 247, 0.8) 70%, rgba(247, 247, 247, 0.8) 90%);
  }
  &:after {
    z-index: 5;
    background-color: #f7f7f7;
  }
  .background-image-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 100% 50%;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
    left: 50%;
    z-index: 10;
  }
  .single-page-header-inner {
    display: flex;
  }
  .left-side, .right-side {
    flex: 1;
    display: flex;
    align-items: center;
  }
  .left-side {
    padding-right: 30px;
  }
  .right-side {
    max-width: 35%;
  }
  .header-image {
    a {
      display: flex;
      height: 100%;
    }
    height: 140px;
    flex: 0 0 140px;
    margin-right: 35px;
    background: #fff;
    border-radius: \$global-border-radius;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
    display: flex;
    padding: 0 20px;
  }
  &.freelancer-header .header-image {
    background: #fff;
    border-radius: 50%;
    box-shadow: none;
    display: flex;
    padding: 0;
    overflow: hidden;
    height: 130px;
    flex: 0 0 130px;
    width: 130px;
  }
  .header-image img {
    align-self: center;
    transform: translate3d(0, 0, 0);
  }
  .header-details {
    flex: 1;
    h3 {
      color: \$body-heading-color;
      font-size: 26px;
      margin: 0;
      padding: 0;
      margin-bottom: 12px;
      margin-top: 3px;
      line-height: 36px;
      position: relative;
      padding-right: 0;
      display: inline-block;
      span {
        color: #808080;
        display: block;
        font-size: 20px;
        font-weight: 300;
        margin-top: -3px;
      }
    }
    h5 {
      font-size: \$body-font-size;
      font-weight: 600;
      color: \$body-heading-color;
      font-size: \$body-font-size;
      font-weight: 600;
      color: \$body-heading-color;
    }
    ul {
      padding: 0;
      margin: 0;
      list-style: none;
      line-height: 24px;
      margin-bottom: -7px;
    }
    li {
      display: inline-block;
      margin-right: 20px;
      margin-bottom: 12px;
      &:last-child {
        margin-right: 0;
      }
      a {
        color: \$body-font-color;
        &:hover {
          color: \$primary-color;
        }
      }
      i {
        font-size: 20px;
        position: relative;
        top: 2px;
        margin-right: 2px;
      }
      .verified-badge {
        transform: scale(0.85);
        position: relative;
        top: 2px;
      }
      .verified-txt {
        color: #299840;
      }
      .star-rating {
        position: relative;
        top: 6px;
      }
    }
    ul li img.flag {
      height: 16px;
      border-radius: 3px;
      position: relative;
      top: -1px;
      display: inline-block;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
      margin-right: 5px;
      cursor: default;
    }
  }
  .salary-box {
    border-radius: \$global-border-radius;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
    background-color: #fff;
    display: inline-block;
    padding: 20px 25px;
    margin-left: auto;
  }
}

@media (max-width: 992px) {
  .single-page-header #breadcrumbs {
    margin: 30px 0 20px 0;
  }
}

/* ---------------------------------- */
/* Single Page Header
------------------------------------- */

@media (min-width: 1365px) {
  .single-page-header .right-side {
    max-width: 30%;
  }
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .single-page-header .header-image {
    max-width: 140px;
  }
}

/* IE 11 FIX */
@media all and (-ms-high-contrast: none) {
  .single-page-header .header-image img {
    width: 100%;
  }
}


/* Salary Box */

.salary-box {
  .salary-type {
    color: #888;
    line-height: 20px;
    margin: 3px 0 8px 0;
  }
  .salary-amount {
    color: \$body-heading-color;
    font-size: 28px;
    line-height: 36px;
    font-weight: 300;
  }
}

/* Media Queries for Single Page Header */
@media (max-width: 1366px) {
  .single-page-header.freelancer-header .header-image {
    height: 130px;
    flex: 0 0 130px;
    width: 130px;
  }
}

@media (max-width: 1240px) {
  .single-page-header {
    .header-details h3 {
      font-size: 26px;
    }
    padding: 55px 0;
  }
  .salary-box .salary-amount {
    font-size: 26px;
    line-height: 32px;
  }
  .single-page-header {
    .header-image {
      height: 120px;
      flex: 0 0 120px;
    }
    &.freelancer-header .header-image {
      height: 120px;
      flex: 0 0 120px;
      width: 120px;
    }
  }
}

@media (max-width: 992px) {
  .single-page-header {
    .single-page-header-inner {
      display: flex;
      flex-direction: column;
    }
    .left-side {
      padding-right: 0;
    }
    .header-details h3 {
      font-size: 24px;
    }
    padding: 35px 0;
    .salary-amount {
      font-size: 22px;
      line-height: 24px;
    }
    .salary-box {
      padding: 0;
      margin-top: 15px;
      margin-bottom: 20px;
      background-color: transparent;
      box-shadow: none;
    }
  }
  .salary-box .salary-type {
    font-weight: 600;
    color: \$body-heading-color;
  }
  .single-page-header {
    .left-side, .right-side {
      display: block;
      max-width: 100%;
    }
  }
  .single-page-header-inner {
    display: block;
    max-width: 100%;
  }
  .single-page-header {
    .header-image {
      height: 70px;
      width: auto;
      padding: 15px 20px;
      margin: 15px 0;
      display: inline-block;
      img {
        height: 100%;
      }
    }
    .header-details h5 {
      border-top: 1px solid #e0e0e0;
      padding-top: 25px;
    }
    &.freelancer-header {
      .header-image {
        height: 70px;
        flex: 0 0 70px;
        width: 70px;
        margin-bottom: -70px;
      }
      .header-details h3 {
        margin-left: 90px;
      }
    }
  }
}

@media (max-width: 768px) {
  .single-page-header {
    &:after, &:before {
      background: #f7f7f7;
    }
    &.freelancer-header {
      .header-image {
        height: 70px;
        flex: 0 0 70px;
        width: 70px;
        margin-bottom: -70px;
      }
      .header-details h3 {
        margin-left: 90px;
      }
    }
  }
}", "@Publication/Front/sass/layout/_titlebar.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_titlebar.scss");
    }
}
