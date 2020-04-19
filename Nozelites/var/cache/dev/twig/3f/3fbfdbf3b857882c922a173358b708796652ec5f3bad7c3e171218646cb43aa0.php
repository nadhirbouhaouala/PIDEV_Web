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

/* @Publication/Front/sass/listings/_full-page-layout.scss */
class __TwigTemplate_503cc4bcfb241c627a7f922d796a99d84ca5394c8d49aa0ab3032a7c27869dc1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_full-page-layout.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_full-page-layout.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Full Page Layout
------------------------------------- */

.full-page-container {
  display: flex;
  width: 100%;
  flex-wrap: wrap;
  height: calc(100vh - 82px);
}

.full-page-sidebar {
  flex: 0 0 360px;
  background-color: #fafafa;
  position: relative;
  .full-page-sidebar-inner {
    overflow: auto;
    height: 100%;
  }
  .sidebar-container {
    padding: 40px;
  }
  .simplebar-scrollbar {
    width: 5px;
  }
  .sidebar-widget:last-of-type {
    margin-bottom: 80px;
  }
}

.full-page-content-container {
  flex: 1;
  background-color: #fff;
  padding: 0;
  overflow: auto;
}

.full-page-content-inner {
  padding: 40px;
  padding-bottom: 0;
  .grid-layout {
    width: calc(100% + 30px);
    .job-listing {
      margin: 0 30px 30px 0;
      width: calc(100% * (1/3) - 30px);
    }
  }
}

/* Search Button */

.sidebar-search-button-container {
  position: absolute;
  width: calc(100% - 15px);
  bottom: 0;
  padding: 40px;
  padding-top: 10px;
  z-index: 100;
  background-color: #fafafa;
  button {
    width: calc(100% + 15px);
    line-height: 46px;
    height: 46px;
    transition: 0.3s;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.1);
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
      transform: translateY(-2px);
    }
  }
}

/* Small Footer */

.small-footer {
  border-top: 1px solid #e0e0e0;
  padding-top: 0px;
  width: calc(100% + 80px);
  left: -40px;
  position: relative;
  padding: 25px 40px;
  display: flex;
  strong {
    color: \$body-heading-color;
  }
}

.small-footer-copyrights {
  flex: 2;
}

.small-footer .footer-social-links {
  transform: none;
  flex: 1;
  text-align: right;
  float: right;
  display: inline-block;
  margin: 0 -5px 0 0;
  position: relative;
  top: 2px;
  li {
    color: \$body-heading-color;
    transform: none;
    float: none;
    margin: 0 -3px;
    a {
      color: \$body-heading-color;
      transform: none;
    }
  }
}

/* Full Page With Map
------------------------------------- */

.full-page-map-container {
  flex: auto;
  position: relative;
  background-color: #e5e3df;
  #map {
    position: relative;
    z-index: 30;
  }
}

.full-page-container.with-map .full-page-content-container {
  flex: 0 0 50vw;
}

/* Sliding Sidebar */

.full-page-sidebar.hidden-sidebar {
  visibility: hidden;
  transition: 0.4s;
  position: relative;
  opacity: 0;
  max-width: 0;
}

/*.full-page-container.with-map .full-page-sidebar .sidebar-search-button-container,*/

.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner {
  width: 360px;
}

.full-page-sidebar.hidden-sidebar.enabled-sidebar {
  visibility: visible;
  opacity: 1;
  max-width: 360px;
}

/* Enable Filter Button */

.enable-filters-button {
  position: relative;
  left: 48px;
  top: 0px;
  z-index: 100;
  background-color: #fff;
  color: \$body-heading-color;
  border-radius: 0 \$global-border-radius \$global-border-radius 0;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  height: 48px;
  line-height: 48px;
  padding: 0;
  transition: 0.3s;
  min-width: 126px;
  text-align: center;
  span {
    position: relative;
    padding: 0 15px;
    background-color: \$primary-color;
    color: #fff;
    width: 100%;
    z-index: 100;
    border-radius: 0 \$global-border-radius \$global-border-radius 0;
    transition: 0.3s;
  }
}

/* Filter Button Container */

.filter-button-container {
  position: absolute;
  left: 40px;
  top: 20px;
  width: calc(100% - 40px);
  overflow-x: hidden;
  padding: 20px 0;
}

.filter-button-tooltip {
  position: absolute;
  width: auto;
  left: 15px;
  top: 24px;
  z-index: 100;
  border-radius: \$global-border-radius;
  width: auto;
  animation: tooltip-bounce 2s infinite;
  margin-left: 15px;
  white-space: nowrap;
  opacity: 0;
  overflow: visible;
  transition: opacity 0.3s;
  pointer-events: none;
  padding: 0 20px;
  background-color: #fff;
  color: #555;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  font-size: 15.7px;
  line-height: 48px;
  top: 20px;
  &.tooltip-visible {
    opacity: 1;
  }
  &:before {
    content: \"\";
    position: absolute;
    width: 0;
    height: 0;
    top: calc(50% - 3px);
    content: \"\";
    left: -3px;
    box-sizing: border-box;
    border: 5px solid black;
    border-color: transparent transparent #fff #fff;
    transform-origin: 0 0;
    transform: rotate(45deg) translateY(-50%);
    box-shadow: -2px 2px 2px 0 rgba(0, 0, 0, 0.04);
  }
}

@keyframes tooltip-bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateX(0);
  }

  40% {
    transform: translateX(14px);
  }

  60% {
    transform: translateX(7px);
  }
}


/* Hover & Active States */

.enable-filters-button {
  &:hover i, &.active i, &:hover span, &.active span {
    background-color: #333;
  }
  &:hover i {
    &:after, &:before {
      background-color: rgba(0, 0, 0, 0.25);
    }
  }
  &.active i {
    &:after, &:before {
      background-color: rgba(0, 0, 0, 0.25);
    }
  }
  i {
    position: absolute;
    z-index: 90;
    left: -48px;
    height: 100%;
    font-size: 20px;
    background-color: \$primary-color;
    color: #fff;
    line-height: 48px;
    text-align: center;
    width: 48px;
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
    font-style: normal;
    font-family: \"Feather-Icons\";
    transition: 0.3s;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    &:after, &:before {
      position: absolute;
      left: 0;
      right: 0;
      transition: 0.3s;
      border-radius: \$global-border-radius 0 0 \$global-border-radius;;
      background-color: rgba(0, 0, 0, 0.1);
    }
    &:after {
      content: \"\\e9d1\";
      opacity: 1;
    }
  }
  &.active i:after {
    opacity: 0;
  }
  i:before {
    content: \"\\ea02\";
    opacity: 0;
  }
  &.active i:before {
    opacity: 1;
  }
  span.show-text {
    display: inline-block;
  }
  &.active span {
    &.hide-text {
      display: inline-block;
    }
    &.show-text {
      display: none;
    }
  }
  span.hide-text {
    display: none;
  }
}

/* Location Field on Map */

.location-field-on-map {
  position: absolute;
  top: 40px;
  right: 40px;
  width: 280px;
  max-width: 40%;
  z-index: 100;
  input {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
  }
}

/* Full Page Media Queries
------------------------------------- */
@media (max-width: 3860px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/4) - 30px);
  }
  /* Full Page With Map */
  .full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/3) - 30px);
  }
}

@media (max-width: 2560px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/4) - 30px);
  }
  /* Full Page With Map */
  .full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/2) - 30px);
  }
}

@media (max-width: 1920px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/3) - 30px);
  }
  /* Full Page With Map */
  .full-page-container.with-map {
    .full-page-sidebar {
      flex: 0 0 340px;
      .full-page-sidebar-inner {
        width: 340px;
      }
    }
    .full-page-content-inner .grid-layout .job-listing {
      width: calc(100% * (1/2) - 30px);
    }
  }
}

@media (max-width: 1600px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/2) - 30px);
  }
  .full-page-sidebar {
    flex: 0 0 340px;
  }
  /* Full Page With Map */
  .full-page-container.with-map {
    .full-page-sidebar {
      flex: 0 0 320px;
      .full-page-sidebar-inner {
        width: 320px;
      }
    }
    .full-page-content-inner .grid-layout .job-listing {
      width: calc(100% - 30px);
    }
    .full-page-content-container {
      flex: 0 0 55vw;
    }
  }
}

@media (max-width: 1365px) {
  .location-field-on-map {
    left: 0px;
    right: auto;
    width: calc(100% - 80px);
    max-width: calc(100% - 80px);
    margin: 0 40px;
  }
  /* Notify Box Responsive Styles*/
  .full-page-container .notify-box {
    margin-bottom: 80px;
    .sort-by {
      position: absolute;
      margin-top: 40px;
      left: 0;
      .bootstrap-select .dropdown-menu {
        left: 0;
        right: auto;
      }
    }
  }
}

@media (max-width: 1099px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% - 30px);
  }
  .full-page-sidebar {
    flex: 0 0 340px;
  }
  /* Important Responsive Styles */
  .full-page-map-container {
    order: -1;
    width: 100%;
    height: 400px;
    position: absolute;
    top: 0;
  }
  .full-page-container.with-map {
    padding-top: 400px;
    height: auto !important;
    width: 100%;
    position: relative;
    .full-page-sidebar {
      max-width: 100%;
      visibility: visible;
      opacity: 1;
    }
  }
  .filter-button-container {
    display: none;
  }
  .full-page-container {
    &.with-map {
      .full-page-sidebar .full-page-sidebar-inner {
        position: relative;
        width: 100%;
      }
      .full-page-content-container {
        flex: 1;
      }
    }
    height: auto !important;
  }
  .full-page-sidebar-inner, .full-page-content-container {
    height: auto !important;
  }
  .full-page-container {
    .full-page-sidebar {
      height: auto !important;
    }
    .simplebar-track {
      display: none;
    }
  }
}

@media (max-width: 992px) {
  .location-field-on-map {
    width: calc(100% - 50px);
    max-width: calc(100% - 50px);
    margin: 0 25px;
    top: 25px;
  }
  .sidebar-search-button-container, .full-page-sidebar .sidebar-container {
    padding: 35px;
  }
  .full-page-content-inner {
    padding: 35px;
    padding-bottom: 0;
    .grid-layout .job-listing {
      width: calc(100% - 30px);
    }
  }
  .full-page-sidebar {
    flex: 0 0 320px;
  }
  .full-page-sidebar-inner, .full-page-content-container, .full-page-container .full-page-sidebar {
    height: auto !important;
  }
}

@media (max-width: 768px) {
  .location-field-on-map {
    width: calc(100% - 30px);
    max-width: calc(100% - 30px);
    margin: 0 15px;
  }
  .sidebar-search-button-container, .full-page-sidebar .sidebar-container {
    padding: 40px 15px;
  }
  .full-page-content-inner {
    padding: 40px 15px;
    padding-bottom: 0;
    .grid-layout .job-listing {
      width: calc(100% - 30px);
    }
  }
  .full-page-sidebar {
    flex: 1;
    width: 100%;
  }
  .full-page-container {
    display: block;
    width: 100%;
    flex-wrap: wrap;
    height: auto;
  }
  .small-footer {
    display: block;
    text-align: center;
    .footer-social-links {
      float: none;
      left: -10px;
      margin-top: 10px;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_full-page-layout.scss";
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
/* Full Page Layout
------------------------------------- */

.full-page-container {
  display: flex;
  width: 100%;
  flex-wrap: wrap;
  height: calc(100vh - 82px);
}

.full-page-sidebar {
  flex: 0 0 360px;
  background-color: #fafafa;
  position: relative;
  .full-page-sidebar-inner {
    overflow: auto;
    height: 100%;
  }
  .sidebar-container {
    padding: 40px;
  }
  .simplebar-scrollbar {
    width: 5px;
  }
  .sidebar-widget:last-of-type {
    margin-bottom: 80px;
  }
}

.full-page-content-container {
  flex: 1;
  background-color: #fff;
  padding: 0;
  overflow: auto;
}

.full-page-content-inner {
  padding: 40px;
  padding-bottom: 0;
  .grid-layout {
    width: calc(100% + 30px);
    .job-listing {
      margin: 0 30px 30px 0;
      width: calc(100% * (1/3) - 30px);
    }
  }
}

/* Search Button */

.sidebar-search-button-container {
  position: absolute;
  width: calc(100% - 15px);
  bottom: 0;
  padding: 40px;
  padding-top: 10px;
  z-index: 100;
  background-color: #fafafa;
  button {
    width: calc(100% + 15px);
    line-height: 46px;
    height: 46px;
    transition: 0.3s;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.1);
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
      transform: translateY(-2px);
    }
  }
}

/* Small Footer */

.small-footer {
  border-top: 1px solid #e0e0e0;
  padding-top: 0px;
  width: calc(100% + 80px);
  left: -40px;
  position: relative;
  padding: 25px 40px;
  display: flex;
  strong {
    color: \$body-heading-color;
  }
}

.small-footer-copyrights {
  flex: 2;
}

.small-footer .footer-social-links {
  transform: none;
  flex: 1;
  text-align: right;
  float: right;
  display: inline-block;
  margin: 0 -5px 0 0;
  position: relative;
  top: 2px;
  li {
    color: \$body-heading-color;
    transform: none;
    float: none;
    margin: 0 -3px;
    a {
      color: \$body-heading-color;
      transform: none;
    }
  }
}

/* Full Page With Map
------------------------------------- */

.full-page-map-container {
  flex: auto;
  position: relative;
  background-color: #e5e3df;
  #map {
    position: relative;
    z-index: 30;
  }
}

.full-page-container.with-map .full-page-content-container {
  flex: 0 0 50vw;
}

/* Sliding Sidebar */

.full-page-sidebar.hidden-sidebar {
  visibility: hidden;
  transition: 0.4s;
  position: relative;
  opacity: 0;
  max-width: 0;
}

/*.full-page-container.with-map .full-page-sidebar .sidebar-search-button-container,*/

.full-page-container.with-map .full-page-sidebar .full-page-sidebar-inner {
  width: 360px;
}

.full-page-sidebar.hidden-sidebar.enabled-sidebar {
  visibility: visible;
  opacity: 1;
  max-width: 360px;
}

/* Enable Filter Button */

.enable-filters-button {
  position: relative;
  left: 48px;
  top: 0px;
  z-index: 100;
  background-color: #fff;
  color: \$body-heading-color;
  border-radius: 0 \$global-border-radius \$global-border-radius 0;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  height: 48px;
  line-height: 48px;
  padding: 0;
  transition: 0.3s;
  min-width: 126px;
  text-align: center;
  span {
    position: relative;
    padding: 0 15px;
    background-color: \$primary-color;
    color: #fff;
    width: 100%;
    z-index: 100;
    border-radius: 0 \$global-border-radius \$global-border-radius 0;
    transition: 0.3s;
  }
}

/* Filter Button Container */

.filter-button-container {
  position: absolute;
  left: 40px;
  top: 20px;
  width: calc(100% - 40px);
  overflow-x: hidden;
  padding: 20px 0;
}

.filter-button-tooltip {
  position: absolute;
  width: auto;
  left: 15px;
  top: 24px;
  z-index: 100;
  border-radius: \$global-border-radius;
  width: auto;
  animation: tooltip-bounce 2s infinite;
  margin-left: 15px;
  white-space: nowrap;
  opacity: 0;
  overflow: visible;
  transition: opacity 0.3s;
  pointer-events: none;
  padding: 0 20px;
  background-color: #fff;
  color: #555;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  font-size: 15.7px;
  line-height: 48px;
  top: 20px;
  &.tooltip-visible {
    opacity: 1;
  }
  &:before {
    content: \"\";
    position: absolute;
    width: 0;
    height: 0;
    top: calc(50% - 3px);
    content: \"\";
    left: -3px;
    box-sizing: border-box;
    border: 5px solid black;
    border-color: transparent transparent #fff #fff;
    transform-origin: 0 0;
    transform: rotate(45deg) translateY(-50%);
    box-shadow: -2px 2px 2px 0 rgba(0, 0, 0, 0.04);
  }
}

@keyframes tooltip-bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateX(0);
  }

  40% {
    transform: translateX(14px);
  }

  60% {
    transform: translateX(7px);
  }
}


/* Hover & Active States */

.enable-filters-button {
  &:hover i, &.active i, &:hover span, &.active span {
    background-color: #333;
  }
  &:hover i {
    &:after, &:before {
      background-color: rgba(0, 0, 0, 0.25);
    }
  }
  &.active i {
    &:after, &:before {
      background-color: rgba(0, 0, 0, 0.25);
    }
  }
  i {
    position: absolute;
    z-index: 90;
    left: -48px;
    height: 100%;
    font-size: 20px;
    background-color: \$primary-color;
    color: #fff;
    line-height: 48px;
    text-align: center;
    width: 48px;
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
    font-style: normal;
    font-family: \"Feather-Icons\";
    transition: 0.3s;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    &:after, &:before {
      position: absolute;
      left: 0;
      right: 0;
      transition: 0.3s;
      border-radius: \$global-border-radius 0 0 \$global-border-radius;;
      background-color: rgba(0, 0, 0, 0.1);
    }
    &:after {
      content: \"\\e9d1\";
      opacity: 1;
    }
  }
  &.active i:after {
    opacity: 0;
  }
  i:before {
    content: \"\\ea02\";
    opacity: 0;
  }
  &.active i:before {
    opacity: 1;
  }
  span.show-text {
    display: inline-block;
  }
  &.active span {
    &.hide-text {
      display: inline-block;
    }
    &.show-text {
      display: none;
    }
  }
  span.hide-text {
    display: none;
  }
}

/* Location Field on Map */

.location-field-on-map {
  position: absolute;
  top: 40px;
  right: 40px;
  width: 280px;
  max-width: 40%;
  z-index: 100;
  input {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
  }
}

/* Full Page Media Queries
------------------------------------- */
@media (max-width: 3860px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/4) - 30px);
  }
  /* Full Page With Map */
  .full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/3) - 30px);
  }
}

@media (max-width: 2560px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/4) - 30px);
  }
  /* Full Page With Map */
  .full-page-container.with-map .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/2) - 30px);
  }
}

@media (max-width: 1920px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/3) - 30px);
  }
  /* Full Page With Map */
  .full-page-container.with-map {
    .full-page-sidebar {
      flex: 0 0 340px;
      .full-page-sidebar-inner {
        width: 340px;
      }
    }
    .full-page-content-inner .grid-layout .job-listing {
      width: calc(100% * (1/2) - 30px);
    }
  }
}

@media (max-width: 1600px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% * (1/2) - 30px);
  }
  .full-page-sidebar {
    flex: 0 0 340px;
  }
  /* Full Page With Map */
  .full-page-container.with-map {
    .full-page-sidebar {
      flex: 0 0 320px;
      .full-page-sidebar-inner {
        width: 320px;
      }
    }
    .full-page-content-inner .grid-layout .job-listing {
      width: calc(100% - 30px);
    }
    .full-page-content-container {
      flex: 0 0 55vw;
    }
  }
}

@media (max-width: 1365px) {
  .location-field-on-map {
    left: 0px;
    right: auto;
    width: calc(100% - 80px);
    max-width: calc(100% - 80px);
    margin: 0 40px;
  }
  /* Notify Box Responsive Styles*/
  .full-page-container .notify-box {
    margin-bottom: 80px;
    .sort-by {
      position: absolute;
      margin-top: 40px;
      left: 0;
      .bootstrap-select .dropdown-menu {
        left: 0;
        right: auto;
      }
    }
  }
}

@media (max-width: 1099px) {
  .full-page-content-inner .grid-layout .job-listing {
    width: calc(100% - 30px);
  }
  .full-page-sidebar {
    flex: 0 0 340px;
  }
  /* Important Responsive Styles */
  .full-page-map-container {
    order: -1;
    width: 100%;
    height: 400px;
    position: absolute;
    top: 0;
  }
  .full-page-container.with-map {
    padding-top: 400px;
    height: auto !important;
    width: 100%;
    position: relative;
    .full-page-sidebar {
      max-width: 100%;
      visibility: visible;
      opacity: 1;
    }
  }
  .filter-button-container {
    display: none;
  }
  .full-page-container {
    &.with-map {
      .full-page-sidebar .full-page-sidebar-inner {
        position: relative;
        width: 100%;
      }
      .full-page-content-container {
        flex: 1;
      }
    }
    height: auto !important;
  }
  .full-page-sidebar-inner, .full-page-content-container {
    height: auto !important;
  }
  .full-page-container {
    .full-page-sidebar {
      height: auto !important;
    }
    .simplebar-track {
      display: none;
    }
  }
}

@media (max-width: 992px) {
  .location-field-on-map {
    width: calc(100% - 50px);
    max-width: calc(100% - 50px);
    margin: 0 25px;
    top: 25px;
  }
  .sidebar-search-button-container, .full-page-sidebar .sidebar-container {
    padding: 35px;
  }
  .full-page-content-inner {
    padding: 35px;
    padding-bottom: 0;
    .grid-layout .job-listing {
      width: calc(100% - 30px);
    }
  }
  .full-page-sidebar {
    flex: 0 0 320px;
  }
  .full-page-sidebar-inner, .full-page-content-container, .full-page-container .full-page-sidebar {
    height: auto !important;
  }
}

@media (max-width: 768px) {
  .location-field-on-map {
    width: calc(100% - 30px);
    max-width: calc(100% - 30px);
    margin: 0 15px;
  }
  .sidebar-search-button-container, .full-page-sidebar .sidebar-container {
    padding: 40px 15px;
  }
  .full-page-content-inner {
    padding: 40px 15px;
    padding-bottom: 0;
    .grid-layout .job-listing {
      width: calc(100% - 30px);
    }
  }
  .full-page-sidebar {
    flex: 1;
    width: 100%;
  }
  .full-page-container {
    display: block;
    width: 100%;
    flex-wrap: wrap;
    height: auto;
  }
  .small-footer {
    display: block;
    text-align: center;
    .footer-social-links {
      float: none;
      left: -10px;
      margin-top: 10px;
    }
  }
}", "@Publication/Front/sass/listings/_full-page-layout.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_full-page-layout.scss");
    }
}
