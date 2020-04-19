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

/* @Publication/Front/sass/vendor/_maps.scss */
class __TwigTemplate_046dc1d1bd17eef49730c3e8b1a7935a8aa6645c80c7d207ad5b9ed7b872193c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_maps.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_maps.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Google Maps
------------------------------------- */

.infoBox {
  border-radius: \$global-border-radius;
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
  line-height: 24px;
  .job-listing {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0;
    box-shadow: none;
    width: 100%;
    .job-listing-description {
      padding-top: 0;
    }
    &:hover {
      transform: none;
    }
  }
  .job-listing-details {
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 20px 25px;
  }
  .job-listing {
    h4.job-listing-company {
      font-size: 14px;
      position: relative;
      top: 0px;
    }
    .verified-badge {
      transform: scale(0.85);
      right: -7px;
      bottom: -7px;
    }
    .not-verified-badge {
      display: none;
    }
  }
  .job-listing-footer {
    flex-grow: 0;
    padding: 15px 25px;
    font-size: \$body-font-size;
    display: none;
  }
  .job-listing {
    h3.job-listing-title {
      font-size: \$body-font-size;
      line-height: 24px;
    }
    .job-listing-company-logo {
      max-width: 46px;
      margin: 5px 18px 5px 0;
      top: 0;
      flex: 0 0 46px;
      img {
        max-width: 46px;
      }
    }
  }
}

.map-box {
  background-color: #fff;
  margin-bottom: 20px;
  border-radius: \$global-border-radius;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.12);
  position: relative;
  width: 100%;
  .listing-img-container img {
    width: 100%;
    border-radius: \$global-border-radius \$global-border-radius 0 0;
  }
  h4 {
    margin: 0;
    padding: 0;
    a {
      padding: 0 0 2px 0;
      font-size: 17px;
      line-height: 25px;
      -webkit-transition: all 0.2s ease-in-out;
      -moz-transition: all 0.2s ease-in-out;
      -ms-transition: all 0.2s ease-in-out;
      -o-transition: all 0.2s ease-in-out;
      transition: all 0.2s ease-in-out;
      display: inline-block;
    }
  }
}

.listing-img-container {
  position: relative;
  height: 100%;
  display: block;
}

.map-box {
  h4 a:hover {
    color: \$primary-color;
  }
  p {
    padding: 0;
    line-height: 25px;
    margin: 2px 0 0 0;
    font-size: 14px;
  }
  ul.listing-details {
    padding: 0;
    font-size: 14px;
    display: none;
  }
  .listing-title {
    padding: 16px 22px;
  }
  .listing-img-content {
    padding: 18px 22px;
    span {
      font-size: 21px;
    }
    .listing-price i {
      font-size: 15px;
      margin: -7px 0 0 0;
    }
  }
}

.infoBox > img {
  position: absolute !important;
  right: 0px;
  top: 0px;
}

.map-box {
  .listing-img-container::before {
    content: \"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    background: linear-gradient(to top, rgba(35, 35, 37, 0.85) 0%, rgba(35, 35, 37, 0.4) 35%, rgba(22, 22, 23, 0) 60%, rgba(0, 0, 0, 0) 100%);
    background-color: rgba(35, 35, 37, 0.2);
  }
  .listing-item-content {
    position: absolute;
    bottom: 20px;
    left: 0;
    padding: 0 24px;
    width: 100%;
    z-index: 50;
    box-sizing: border-box;
    h3 {
      color: #fff;
      font-size: 18px;
      padding: 0 0 2px 0;
      font-weight: 500;
      margin: 0;
      line-height: \$body-line-height;
    }
    span {
      font-size: 15px;
      font-weight: 300;
      display: inline-block;
      color: rgba(255, 255, 255, 0.7);
    }
  }
}

/* Close Button */

.infoBox-close {
  position: absolute;
  top: 12px;
  right: 12px;
  display: inline-block;
  z-index: 999;
  text-align: center;
  cursor: pointer;
  font-size: 15px;
  font-weight: 500;
  height: 27px;
  width: 27px;
  line-height: \$body-line-height;
  background-color: #f0f0f0;
  color: \$body-font-color;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-radius: \$global-border-radius;
  i {
    position: relative;
    top: 2px;
    left: -0.5px;
  }
  &:hover {
    color: #fff;
    background-color: \$primary-color;
  }
}

/* Read More Icon */

.map-box-icon {
  height: 38px;
  width: 38px;
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: #3685cf;
  display: block;
  color: #fff;
  font-size: 12px;
  z-index: 101;
  text-align: center;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  -webkit-transform: translateX(50%);
  -ms-transform: translateX(50%);
  transform: translateX(50%);
  opacity: 0;
  visibility: hidden;
  &:before {
    content: \"\\f064\";
    font-family: \"FontAwesome\";
    position: relative;
    top: 7px;
    display: block;
  }
}

.map-box-image {
  &:hover .map-box-icon {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateX(0);
  }
  position: relative;
  overflow: hidden;
  display: block;
}

.infoBox {
  animation: infoBoxAnimation 0.5s;
  .star-rating span {
    margin-right: 3px;
  }
  .rating-counter {
    position: relative;
    top: -1px;
  }
  &:after {
    content: \"\";
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 0;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-top: 16px solid #fff;
  }
}

/* Standard syntax */
@keyframes infoBoxAnimation {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }

  to {
    opacity: 1;
    transform: translateY(0px);
  }
}


#map {
  height: 100%;
  width: 100%;
  margin: 0;
  z-index: 990;
}

#map-container {
  position: relative;
  top: 0;
  left: 0;
  height: 520px;
  width: 100%;
  z-index: 990;
  margin-bottom: 60px;
}

.gmnoprint {
  margin: 10px;
}

.homepage-map {
  height: 560px;
  margin-bottom: 0;
  position: relative;
}

.search-bar-on-map {
  position: absolute;
  bottom: 50px;
  z-index: 1000;
  margin: 0 auto;
  left: 0;
  right: 0;
}

/* Cluster styles */

.cluster img {
  display: none;
}

.cluster-visible {
  text-align: center;
  font-size: 14px !important;
  color: #fff !important;
  font-weight: 700;
  border-radius: 50%;
  width: 33px !important;
  height: 33px !important;
  line-height: 33px !important;
  background-color: \$primary-color;
  animation: clusterAnimation 2.5s infinite;
}

@keyframes clusterAnimation {
  0%,100% {
    box-shadow: 0 0 0 6px rgba(\$primary-color, 0.15);
  }

  50% {
    box-shadow: 0 0 0 10px rgba(\$primary-color, 0.15);
  }
}


/* Marker */

.map-marker-container {
  position: absolute;
}

.marker-container {
  position: relative;
  margin: -9px 0 0 -9px;
  width: 18px;
  height: 18px;
  z-index: 1;
  border-radius: 50%;
  cursor: pointer;
  top: 0;
  background-color: \$primary-color;
  animation: markerAnimation 2.5s infinite;
  transition: 0.4s;
}

@keyframes markerAnimation {
  0%,100% {
    box-shadow: 0 0 0 6px rgba(\$primary-color, 0.15);
  }

  50% {
    box-shadow: 0 0 0 8px rgba(\$primary-color, 0.15);
  }
}


/* Clicked & Hover States */

.map-marker-container.clicked .marker-container {
  transform: scale(1.3);
}

.marker-container:before {
  content: \"\";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  background-color: transparent;
  border-radius: 50%;
  transform: scale(2);
  opacity: 0;
}

/* Custom Zoom Buttons
------------------------------------- */

.custom-zoom-in, .custom-zoom-out {
  background-color: #fff;
  color: \$body-heading-color;
  cursor: pointer;
  border-radius: \$global-border-radius;
  margin: 5px 15px;
  transition: 0.3s;
  box-shadow: 0px 2px 4px 0 rgba(0, 0, 0, 0.1);
  text-align: center;
  font-size: 18px;
  height: 34px;
  width: 34px;
}

.custom-zoom-in:hover, .custom-zoom-out:hover {
  background-color: \$primary-color;
  color: #fff;
}

.custom-zoom-in:before, .custom-zoom-out:before {
  font-family: \"Feather-Icons\";
  width: 100%;
  line-height: 35px;
}

.zoomControlWrapper {
  position: absolute;
  left: initial;
  right: 0;
  width: 70px;
  margin-right: 20px;
}

.custom-zoom-in:before {
  content: \"\\e9b1\";
}

.custom-zoom-out:before {
  content: \"\\e996\";
}


/* Street View Button */
#streetView, #geoLocation, #scrollEnabling {
  background-color: #fff;
  color: \$body-heading-color;
  cursor: pointer;
  border-radius: \$global-border-radius;
  margin: 5px 15px;
  transition: 0.3s;
  box-shadow: 0px 2px 4px 0 rgba(0, 0, 0, 0.1);
  position: absolute;
  top: 10px;
  left: 5px;
  z-index: 99;
  font-size: 14px;
  line-height: 21px;
  padding: 8px 14px;
  font-weight: 500;
}

#geoLocation:hover, #streetView:hover {
  background-color: \$primary-color;
  color: #fff;
}

#scrollEnabling {
  &:hover, &.enabled {
    background-color: \$primary-color;
    color: #fff;
  }
}

#streetView:before {
  content: \"\\e974\";
  font-family: \"Material-Icons\";
  font-size: 18px;
  top: 3px;
  position: relative;
  margin-right: 7px;
  margin-left: -1px;
  line-height: 0;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/vendor/_maps.scss";
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
/* Google Maps
------------------------------------- */

.infoBox {
  border-radius: \$global-border-radius;
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
  line-height: 24px;
  .job-listing {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0;
    box-shadow: none;
    width: 100%;
    .job-listing-description {
      padding-top: 0;
    }
    &:hover {
      transform: none;
    }
  }
  .job-listing-details {
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 20px 25px;
  }
  .job-listing {
    h4.job-listing-company {
      font-size: 14px;
      position: relative;
      top: 0px;
    }
    .verified-badge {
      transform: scale(0.85);
      right: -7px;
      bottom: -7px;
    }
    .not-verified-badge {
      display: none;
    }
  }
  .job-listing-footer {
    flex-grow: 0;
    padding: 15px 25px;
    font-size: \$body-font-size;
    display: none;
  }
  .job-listing {
    h3.job-listing-title {
      font-size: \$body-font-size;
      line-height: 24px;
    }
    .job-listing-company-logo {
      max-width: 46px;
      margin: 5px 18px 5px 0;
      top: 0;
      flex: 0 0 46px;
      img {
        max-width: 46px;
      }
    }
  }
}

.map-box {
  background-color: #fff;
  margin-bottom: 20px;
  border-radius: \$global-border-radius;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.12);
  position: relative;
  width: 100%;
  .listing-img-container img {
    width: 100%;
    border-radius: \$global-border-radius \$global-border-radius 0 0;
  }
  h4 {
    margin: 0;
    padding: 0;
    a {
      padding: 0 0 2px 0;
      font-size: 17px;
      line-height: 25px;
      -webkit-transition: all 0.2s ease-in-out;
      -moz-transition: all 0.2s ease-in-out;
      -ms-transition: all 0.2s ease-in-out;
      -o-transition: all 0.2s ease-in-out;
      transition: all 0.2s ease-in-out;
      display: inline-block;
    }
  }
}

.listing-img-container {
  position: relative;
  height: 100%;
  display: block;
}

.map-box {
  h4 a:hover {
    color: \$primary-color;
  }
  p {
    padding: 0;
    line-height: 25px;
    margin: 2px 0 0 0;
    font-size: 14px;
  }
  ul.listing-details {
    padding: 0;
    font-size: 14px;
    display: none;
  }
  .listing-title {
    padding: 16px 22px;
  }
  .listing-img-content {
    padding: 18px 22px;
    span {
      font-size: 21px;
    }
    .listing-price i {
      font-size: 15px;
      margin: -7px 0 0 0;
    }
  }
}

.infoBox > img {
  position: absolute !important;
  right: 0px;
  top: 0px;
}

.map-box {
  .listing-img-container::before {
    content: \"\";
    position: absolute;
    height: 100%;
    width: 100%;
    display: block;
    background: linear-gradient(to top, rgba(35, 35, 37, 0.85) 0%, rgba(35, 35, 37, 0.4) 35%, rgba(22, 22, 23, 0) 60%, rgba(0, 0, 0, 0) 100%);
    background-color: rgba(35, 35, 37, 0.2);
  }
  .listing-item-content {
    position: absolute;
    bottom: 20px;
    left: 0;
    padding: 0 24px;
    width: 100%;
    z-index: 50;
    box-sizing: border-box;
    h3 {
      color: #fff;
      font-size: 18px;
      padding: 0 0 2px 0;
      font-weight: 500;
      margin: 0;
      line-height: \$body-line-height;
    }
    span {
      font-size: 15px;
      font-weight: 300;
      display: inline-block;
      color: rgba(255, 255, 255, 0.7);
    }
  }
}

/* Close Button */

.infoBox-close {
  position: absolute;
  top: 12px;
  right: 12px;
  display: inline-block;
  z-index: 999;
  text-align: center;
  cursor: pointer;
  font-size: 15px;
  font-weight: 500;
  height: 27px;
  width: 27px;
  line-height: \$body-line-height;
  background-color: #f0f0f0;
  color: \$body-font-color;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-radius: \$global-border-radius;
  i {
    position: relative;
    top: 2px;
    left: -0.5px;
  }
  &:hover {
    color: #fff;
    background-color: \$primary-color;
  }
}

/* Read More Icon */

.map-box-icon {
  height: 38px;
  width: 38px;
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: #3685cf;
  display: block;
  color: #fff;
  font-size: 12px;
  z-index: 101;
  text-align: center;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  -webkit-transform: translateX(50%);
  -ms-transform: translateX(50%);
  transform: translateX(50%);
  opacity: 0;
  visibility: hidden;
  &:before {
    content: \"\\f064\";
    font-family: \"FontAwesome\";
    position: relative;
    top: 7px;
    display: block;
  }
}

.map-box-image {
  &:hover .map-box-icon {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateX(0);
  }
  position: relative;
  overflow: hidden;
  display: block;
}

.infoBox {
  animation: infoBoxAnimation 0.5s;
  .star-rating span {
    margin-right: 3px;
  }
  .rating-counter {
    position: relative;
    top: -1px;
  }
  &:after {
    content: \"\";
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 0;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-top: 16px solid #fff;
  }
}

/* Standard syntax */
@keyframes infoBoxAnimation {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }

  to {
    opacity: 1;
    transform: translateY(0px);
  }
}


#map {
  height: 100%;
  width: 100%;
  margin: 0;
  z-index: 990;
}

#map-container {
  position: relative;
  top: 0;
  left: 0;
  height: 520px;
  width: 100%;
  z-index: 990;
  margin-bottom: 60px;
}

.gmnoprint {
  margin: 10px;
}

.homepage-map {
  height: 560px;
  margin-bottom: 0;
  position: relative;
}

.search-bar-on-map {
  position: absolute;
  bottom: 50px;
  z-index: 1000;
  margin: 0 auto;
  left: 0;
  right: 0;
}

/* Cluster styles */

.cluster img {
  display: none;
}

.cluster-visible {
  text-align: center;
  font-size: 14px !important;
  color: #fff !important;
  font-weight: 700;
  border-radius: 50%;
  width: 33px !important;
  height: 33px !important;
  line-height: 33px !important;
  background-color: \$primary-color;
  animation: clusterAnimation 2.5s infinite;
}

@keyframes clusterAnimation {
  0%,100% {
    box-shadow: 0 0 0 6px rgba(\$primary-color, 0.15);
  }

  50% {
    box-shadow: 0 0 0 10px rgba(\$primary-color, 0.15);
  }
}


/* Marker */

.map-marker-container {
  position: absolute;
}

.marker-container {
  position: relative;
  margin: -9px 0 0 -9px;
  width: 18px;
  height: 18px;
  z-index: 1;
  border-radius: 50%;
  cursor: pointer;
  top: 0;
  background-color: \$primary-color;
  animation: markerAnimation 2.5s infinite;
  transition: 0.4s;
}

@keyframes markerAnimation {
  0%,100% {
    box-shadow: 0 0 0 6px rgba(\$primary-color, 0.15);
  }

  50% {
    box-shadow: 0 0 0 8px rgba(\$primary-color, 0.15);
  }
}


/* Clicked & Hover States */

.map-marker-container.clicked .marker-container {
  transform: scale(1.3);
}

.marker-container:before {
  content: \"\";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  background-color: transparent;
  border-radius: 50%;
  transform: scale(2);
  opacity: 0;
}

/* Custom Zoom Buttons
------------------------------------- */

.custom-zoom-in, .custom-zoom-out {
  background-color: #fff;
  color: \$body-heading-color;
  cursor: pointer;
  border-radius: \$global-border-radius;
  margin: 5px 15px;
  transition: 0.3s;
  box-shadow: 0px 2px 4px 0 rgba(0, 0, 0, 0.1);
  text-align: center;
  font-size: 18px;
  height: 34px;
  width: 34px;
}

.custom-zoom-in:hover, .custom-zoom-out:hover {
  background-color: \$primary-color;
  color: #fff;
}

.custom-zoom-in:before, .custom-zoom-out:before {
  font-family: \"Feather-Icons\";
  width: 100%;
  line-height: 35px;
}

.zoomControlWrapper {
  position: absolute;
  left: initial;
  right: 0;
  width: 70px;
  margin-right: 20px;
}

.custom-zoom-in:before {
  content: \"\\e9b1\";
}

.custom-zoom-out:before {
  content: \"\\e996\";
}


/* Street View Button */
#streetView, #geoLocation, #scrollEnabling {
  background-color: #fff;
  color: \$body-heading-color;
  cursor: pointer;
  border-radius: \$global-border-radius;
  margin: 5px 15px;
  transition: 0.3s;
  box-shadow: 0px 2px 4px 0 rgba(0, 0, 0, 0.1);
  position: absolute;
  top: 10px;
  left: 5px;
  z-index: 99;
  font-size: 14px;
  line-height: 21px;
  padding: 8px 14px;
  font-weight: 500;
}

#geoLocation:hover, #streetView:hover {
  background-color: \$primary-color;
  color: #fff;
}

#scrollEnabling {
  &:hover, &.enabled {
    background-color: \$primary-color;
    color: #fff;
  }
}

#streetView:before {
  content: \"\\e974\";
  font-family: \"Material-Icons\";
  font-size: 18px;
  top: 3px;
  position: relative;
  margin-right: 7px;
  margin-left: -1px;
  line-height: 0;
}", "@Publication/Front/sass/vendor/_maps.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\vendor\\_maps.scss");
    }
}
