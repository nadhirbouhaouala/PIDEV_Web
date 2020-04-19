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

/* @Publication/Front/sass/layout/_checkout-page.scss */
class __TwigTemplate_489e214bd8b8d41b9b80a2a97e65433873885ee8d357d7b23c1591b8b34c2083 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_checkout-page.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_checkout-page.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Checkout Page
------------------------------------- */

/* Checkout Headline */

.headline-border-top {
  border-top: 1px solid #e0e0e0;
}

/* Boxed Widget */

.boxed-widget {
  background-color: #f9f9f9;
  padding: 0;
  transform: translate3d(0, 0, 0);
  z-index: 90;
  position: relative;
  border-radius: \$global-border-radius;
  overflow: hidden;
}

.boxed-widget-headline {
  color: \$body-heading-color;
  font-size: 20px;
  padding: 20px 30px;
  background-color: #f0f0f0;
  color: \$body-heading-color;
  position: relative;
  border-radius: \$global-border-radius \$global-border-radius 0 0;
  h3 {
    font-size: 20px;
    padding: 0;
    margin: 0;
  }
}

.boxed-widget-inner {
  padding: 30px;
}

.boxed-widget {
  ul {
    list-style: none;
    padding: 0;
    margin: 0;
    li {
      span {
        float: right;
        color: \$body-heading-color;
        font-weight: 600;
      }
      color: \$body-font-color;
      padding-bottom: 1px;
    }
  }
  &.summary li.total-costs {
    font-size: 18px;
    border-top: 1px solid #e4e4e4;
    padding-top: 18px;
    margin-top: 18px;
  }
}

.boxed-widget-footer {
  border-top: 1px solid #e4e4e4;
  width: 100%;
  padding: 20px 30px;
  .checkbox label {
    margin-bottom: 0;
  }
}

.boxed-widget.summary li.total-costs span {
  font-weight: 700;
  color: \$primary-color;
}

.listing-item-container.compact.order-summary-widget {
  .listing-item {
    border-radius: \$global-border-radius \$global-border-radius 0 0;
    cursor: default;
    height: 240px;
  }
  margin-bottom: 0;
  &:hover {
    transform: none;
  }
}

/* Billing Cycle
------------------------------------- */

.billing-cycle {
  display: flex;
  .radio {
    flex: 1;
    margin: 5px 20px 5px 0;
    label {
      border-radius: \$global-border-radius;
      border: 2px solid #eee;
      padding: 25px;
      height: 100%;
      align-self: center;
    }
    &:last-of-type {
      margin-right: 0;
    }
    input[type=\"radio\"] + label .radio-label {
      position: relative;
      top: 2px;
      margin-right: 7px;
    }
  }
}

.billing-cycle-details {
  display: block;
  padding-left: 30px;
}

.discounted-price-tag, .regular-price-tag {
  font-size: 14px;
  background: #e0f5d7;
  color: #449626;
  border-radius: \$global-border-radius;
  line-height: 20px;
  padding: 4px 10px;
  flex-grow: 0;
  flex: auto;
  width: auto;
  transition: 0.3s;
  margin-top: 6px;
  margin-right: 5px;
  display: inline-block;
}

.line-through {
  text-decoration: line-through;
  background-color: #fbf6dd;
  color: #a18d29;
}

/* Media Queries for Billing Cycle */
@media (max-width: 768px) {
  .billing-cycle {
    display: flex;
    flex-direction: column;
    .radio {
      margin-right: 0;
    }
  }
}

/* Payment Toggle
------------------------------------- */

.payment-logo {
  height: 24px;
  position: absolute;
  right: 19px;
  top: 18px;
  image-rendering: -webkit-optimize-contrast;
  &.paypal {
    height: 16px;
    top: 22px;
  }
}

.payment-tab-trigger {
  > {
    input {
      position: absolute;
      visibility: hidden;
    }
    label {
      cursor: pointer;
      display: block;
      position: relative;
      top: 0;
      padding: 14px 0;
      top: 3px;
      margin-bottom: 0;
      font-weight: 500;
      &::before {
        transition: 0.2s;
        box-sizing: border-box;
        background-color: #fff;
        border: 2px solid #d0d0d0;
        border-radius: 100%;
        content: \"\";
        display: inline-block;
        margin-right: 10px;
        position: relative;
        top: 3px;
        width: 18px;
        height: 18px;
      }
      &::after {
        background: #fff;
        border-radius: 100%;
        content: \"\";
        display: inline-block;
        position: absolute;
        left: 5px;
        top: 22px;
        width: 8px;
        height: 8px;
        transition: 0.2s;
        transform: scale(0);
      }
    }
    input:checked ~ label {
      &::before {
        border-color: \$primary-color;
      }
      &::after {
        background-color: \$primary-color;
        transform: scale(1);
      }
    }
  }
  padding: 0px 20px;
}

.payment {
  border: 2px solid #f2f2f2;
  border-radius: \$global-border-radius;
  overflow: hidden;
}

.payment-tab {
  background: #f2f2f2;
  box-sizing: border-box;
  max-height: 60px;
  overflow: hidden;
  position: relative;
  transition: all 0.3s 0s ease-in-out;
  width: 100%;
  &:first-of-type {
    border-radius: \$global-border-radius \$global-border-radius 0 0;
  }
  &:last-of-type {
    border-radius: 0 0 \$global-border-radius \$global-border-radius;
  }
  &.payment-tab-active {
    max-height: 400px;
    background: #fff;
  }
}

@media (max-width: 991px) {
  .payment-tab.payment-tab-active {
    max-height: 800px;
  }
}

.payment-tab-content {
  padding: 0 20px 20px 20px;
  background-color: #fff;
  visibility: hidden;
  opacity: 0;
  transition: 0.2s ease-in-out;
}

.payment-form-row {
  margin-top: -10px;
  margin-bottom: 5px;
}

.payment-tab.payment-tab-active .payment-tab-content {
  visibility: visible;
  opacity: 1;
}

.card-label > {
  input {
    box-sizing: border-box;
    display: block;
    height: 51px;
    margin: 14px auto 5px;
    padding: 5px 15px 0 15px;
    transition: border-color 0.3s;
    width: 100%;
    border: 1px solid #dbdbdb;
    background-color: #fff;
    text-decoration: none;
    border-radius: \$global-border-radius;
    box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.06);
    box-shadow: none;
    padding: 15px 0;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    border-radius: 0;
    &:focus {
      box-shadow: none;
      border-bottom: 1px solid #e0e0e0;
      padding: 15px 0;
    }
    &::placeholder {
      transition: 0.2s ease-in-out;
      -webkit-transform-origin: left;
    }
    &:focus::placeholder {
      transform: translateY(-18px);
    }
  }
  label {
    background-color: #fff;
    display: inline-block;
    margin: 6px auto auto 8px;
    font-size: 13px;
    padding: 0px 7px;
    font-weight: 500;
    color: #909090;
    display: none;
  }
}

.payment-tab p {
  margin: 10px 0;
}

/* Booking Confirmation Page
------------------------------------- */

.order-confirmation-page {
  text-align: center;
  padding-bottom: 120px;
  padding-top: 0px;
  h2 {
    font-size: 48px;
    font-weight: 700;
    letter-spacing: -0.5px;
    margin-bottom: 25px;
    display: block;
  }
  p {
    font-size: 20px;
    color: #808080;
    font-weight: 300;
    display: block;
    line-height: 32px;
  }
  a.button {
    &:before {
      display: none;
    }
    background-color: #eee;
    color: #606060;
    font-weight: 600;
    font-size: 18px;
    box-shadow: none;
    padding-top: 14px;
    padding-bottom: 14px;
    i {
      font-size: 24px;
    }
  }
}

.book-now.button {
  padding: 9px;
  margin-bottom: -4px;
}

.breathing-icon {
  background-color: \$primary-color;
  width: 120px;
  height: 120px;
  line-height: 0;
  font-size: 18px;
  border-radius: 50%;
  margin: 0 auto;
  margin-top: 30px;
  position: relative;
  z-index: 100;
  transition: 0.4s;
  color: #fff;
  font-weight: 500;
  animation: bicokAnim 3s infinite;
  box-shadow: 0 0 0 15px rgba(\$primary-color, 0.07);
  margin-bottom: 70px;
  font-size: 90px;
  i {
    color: #fff;
    position: absolute;
    top: 53%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
  }
}

@keyframes bicokAnim {
  0%,100% {
    box-shadow: 0 0 0 15px rgba(\$primary-color, 0.07);
  }

  50% {
    box-shadow: 0 0 0 28px rgba(\$primary-color, 0.12);
  }
}


@media (max-width: 991px) {
  .order-confirmation-page {
    i {
      font-size: 100px;
    }
    p {
      font-size: 18px;
    }
    h2 {
      font-size: 30px;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_checkout-page.scss";
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
/* Checkout Page
------------------------------------- */

/* Checkout Headline */

.headline-border-top {
  border-top: 1px solid #e0e0e0;
}

/* Boxed Widget */

.boxed-widget {
  background-color: #f9f9f9;
  padding: 0;
  transform: translate3d(0, 0, 0);
  z-index: 90;
  position: relative;
  border-radius: \$global-border-radius;
  overflow: hidden;
}

.boxed-widget-headline {
  color: \$body-heading-color;
  font-size: 20px;
  padding: 20px 30px;
  background-color: #f0f0f0;
  color: \$body-heading-color;
  position: relative;
  border-radius: \$global-border-radius \$global-border-radius 0 0;
  h3 {
    font-size: 20px;
    padding: 0;
    margin: 0;
  }
}

.boxed-widget-inner {
  padding: 30px;
}

.boxed-widget {
  ul {
    list-style: none;
    padding: 0;
    margin: 0;
    li {
      span {
        float: right;
        color: \$body-heading-color;
        font-weight: 600;
      }
      color: \$body-font-color;
      padding-bottom: 1px;
    }
  }
  &.summary li.total-costs {
    font-size: 18px;
    border-top: 1px solid #e4e4e4;
    padding-top: 18px;
    margin-top: 18px;
  }
}

.boxed-widget-footer {
  border-top: 1px solid #e4e4e4;
  width: 100%;
  padding: 20px 30px;
  .checkbox label {
    margin-bottom: 0;
  }
}

.boxed-widget.summary li.total-costs span {
  font-weight: 700;
  color: \$primary-color;
}

.listing-item-container.compact.order-summary-widget {
  .listing-item {
    border-radius: \$global-border-radius \$global-border-radius 0 0;
    cursor: default;
    height: 240px;
  }
  margin-bottom: 0;
  &:hover {
    transform: none;
  }
}

/* Billing Cycle
------------------------------------- */

.billing-cycle {
  display: flex;
  .radio {
    flex: 1;
    margin: 5px 20px 5px 0;
    label {
      border-radius: \$global-border-radius;
      border: 2px solid #eee;
      padding: 25px;
      height: 100%;
      align-self: center;
    }
    &:last-of-type {
      margin-right: 0;
    }
    input[type=\"radio\"] + label .radio-label {
      position: relative;
      top: 2px;
      margin-right: 7px;
    }
  }
}

.billing-cycle-details {
  display: block;
  padding-left: 30px;
}

.discounted-price-tag, .regular-price-tag {
  font-size: 14px;
  background: #e0f5d7;
  color: #449626;
  border-radius: \$global-border-radius;
  line-height: 20px;
  padding: 4px 10px;
  flex-grow: 0;
  flex: auto;
  width: auto;
  transition: 0.3s;
  margin-top: 6px;
  margin-right: 5px;
  display: inline-block;
}

.line-through {
  text-decoration: line-through;
  background-color: #fbf6dd;
  color: #a18d29;
}

/* Media Queries for Billing Cycle */
@media (max-width: 768px) {
  .billing-cycle {
    display: flex;
    flex-direction: column;
    .radio {
      margin-right: 0;
    }
  }
}

/* Payment Toggle
------------------------------------- */

.payment-logo {
  height: 24px;
  position: absolute;
  right: 19px;
  top: 18px;
  image-rendering: -webkit-optimize-contrast;
  &.paypal {
    height: 16px;
    top: 22px;
  }
}

.payment-tab-trigger {
  > {
    input {
      position: absolute;
      visibility: hidden;
    }
    label {
      cursor: pointer;
      display: block;
      position: relative;
      top: 0;
      padding: 14px 0;
      top: 3px;
      margin-bottom: 0;
      font-weight: 500;
      &::before {
        transition: 0.2s;
        box-sizing: border-box;
        background-color: #fff;
        border: 2px solid #d0d0d0;
        border-radius: 100%;
        content: \"\";
        display: inline-block;
        margin-right: 10px;
        position: relative;
        top: 3px;
        width: 18px;
        height: 18px;
      }
      &::after {
        background: #fff;
        border-radius: 100%;
        content: \"\";
        display: inline-block;
        position: absolute;
        left: 5px;
        top: 22px;
        width: 8px;
        height: 8px;
        transition: 0.2s;
        transform: scale(0);
      }
    }
    input:checked ~ label {
      &::before {
        border-color: \$primary-color;
      }
      &::after {
        background-color: \$primary-color;
        transform: scale(1);
      }
    }
  }
  padding: 0px 20px;
}

.payment {
  border: 2px solid #f2f2f2;
  border-radius: \$global-border-radius;
  overflow: hidden;
}

.payment-tab {
  background: #f2f2f2;
  box-sizing: border-box;
  max-height: 60px;
  overflow: hidden;
  position: relative;
  transition: all 0.3s 0s ease-in-out;
  width: 100%;
  &:first-of-type {
    border-radius: \$global-border-radius \$global-border-radius 0 0;
  }
  &:last-of-type {
    border-radius: 0 0 \$global-border-radius \$global-border-radius;
  }
  &.payment-tab-active {
    max-height: 400px;
    background: #fff;
  }
}

@media (max-width: 991px) {
  .payment-tab.payment-tab-active {
    max-height: 800px;
  }
}

.payment-tab-content {
  padding: 0 20px 20px 20px;
  background-color: #fff;
  visibility: hidden;
  opacity: 0;
  transition: 0.2s ease-in-out;
}

.payment-form-row {
  margin-top: -10px;
  margin-bottom: 5px;
}

.payment-tab.payment-tab-active .payment-tab-content {
  visibility: visible;
  opacity: 1;
}

.card-label > {
  input {
    box-sizing: border-box;
    display: block;
    height: 51px;
    margin: 14px auto 5px;
    padding: 5px 15px 0 15px;
    transition: border-color 0.3s;
    width: 100%;
    border: 1px solid #dbdbdb;
    background-color: #fff;
    text-decoration: none;
    border-radius: \$global-border-radius;
    box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.06);
    box-shadow: none;
    padding: 15px 0;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    border-radius: 0;
    &:focus {
      box-shadow: none;
      border-bottom: 1px solid #e0e0e0;
      padding: 15px 0;
    }
    &::placeholder {
      transition: 0.2s ease-in-out;
      -webkit-transform-origin: left;
    }
    &:focus::placeholder {
      transform: translateY(-18px);
    }
  }
  label {
    background-color: #fff;
    display: inline-block;
    margin: 6px auto auto 8px;
    font-size: 13px;
    padding: 0px 7px;
    font-weight: 500;
    color: #909090;
    display: none;
  }
}

.payment-tab p {
  margin: 10px 0;
}

/* Booking Confirmation Page
------------------------------------- */

.order-confirmation-page {
  text-align: center;
  padding-bottom: 120px;
  padding-top: 0px;
  h2 {
    font-size: 48px;
    font-weight: 700;
    letter-spacing: -0.5px;
    margin-bottom: 25px;
    display: block;
  }
  p {
    font-size: 20px;
    color: #808080;
    font-weight: 300;
    display: block;
    line-height: 32px;
  }
  a.button {
    &:before {
      display: none;
    }
    background-color: #eee;
    color: #606060;
    font-weight: 600;
    font-size: 18px;
    box-shadow: none;
    padding-top: 14px;
    padding-bottom: 14px;
    i {
      font-size: 24px;
    }
  }
}

.book-now.button {
  padding: 9px;
  margin-bottom: -4px;
}

.breathing-icon {
  background-color: \$primary-color;
  width: 120px;
  height: 120px;
  line-height: 0;
  font-size: 18px;
  border-radius: 50%;
  margin: 0 auto;
  margin-top: 30px;
  position: relative;
  z-index: 100;
  transition: 0.4s;
  color: #fff;
  font-weight: 500;
  animation: bicokAnim 3s infinite;
  box-shadow: 0 0 0 15px rgba(\$primary-color, 0.07);
  margin-bottom: 70px;
  font-size: 90px;
  i {
    color: #fff;
    position: absolute;
    top: 53%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
  }
}

@keyframes bicokAnim {
  0%,100% {
    box-shadow: 0 0 0 15px rgba(\$primary-color, 0.07);
  }

  50% {
    box-shadow: 0 0 0 28px rgba(\$primary-color, 0.12);
  }
}


@media (max-width: 991px) {
  .order-confirmation-page {
    i {
      font-size: 100px;
    }
    p {
      font-size: 18px;
    }
    h2 {
      font-size: 30px;
    }
  }
}", "@Publication/Front/sass/layout/_checkout-page.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_checkout-page.scss");
    }
}
