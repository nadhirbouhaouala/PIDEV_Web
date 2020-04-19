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

/* @Publication/Front/sass/vendor/_slick-carousel.scss */
class __TwigTemplate_27892334f75aacfb2dfbb2741f6a26b0edef8352a12f72800108d36f4f41bc56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_slick-carousel.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/vendor/_slick-carousel.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Slick Slider
------------------------------------- */

/* Slider */
.slick-slider {
  position: relative;
  display: block;
  box-sizing: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-touch-callout: none;
  -khtml-user-select: none;
  -ms-touch-action: pan-y;
  touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}

.slick-list {
  position: relative;
  display: block;
  overflow: hidden;
  margin: 0;
  padding: 0;
  &:focus {
    outline: none;
  }
  &.dragging {
    cursor: pointer;
    cursor: hand;
  }
}

.slick-slider {
  .slick-track, .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slick-track {
  position: relative;
  top: 0;
  left: 0;
  display: block;
  margin-left: auto;
  margin-right: auto;
  &:before {
    display: table;
    content: '';
  }
  &:after {
    display: table;
    content: '';
    clear: both;
  }
}

.slick-loading .slick-track {
  visibility: hidden;
}

.slick-slide {
  display: none;
  float: left;
  height: 100%;
  min-height: 1px;
}

[dir='rtl'] .slick-slide {
  float: right;
}

.slick-slide {
  img {
    display: block;
  }
  &.slick-loading img {
    display: none;
  }
  &.dragging img {
    pointer-events: none;
  }
}

.slick-initialized .slick-slide {
  display: block;
}

.slick-loading .slick-slide {
  visibility: hidden;
}

.slick-vertical .slick-slide {
  display: block;
  height: auto;
  border: 1px solid transparent;
}

.slick-arrow.slick-hidden {
  display: none;
}

/* Slider */
/*.slick-loading .slick-list {
    background: #fff url('./ajax-loader.gif') center center no-repeat;
}
*/

/* Arrows */

.slick-prev, .slick-next {
  font-size: 0;
  line-height: 0;
  position: absolute;
  top: 50%;
  display: block;
  padding: 0;
  -webkit-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
  cursor: pointer;
  border: none;
  outline: none;
  background-color: #333;
  border-radius: \$global-border-radius;
  width: 48px;
  height: 48px;
  display: block;
  top: calc(50% - 15px);
  transform: translateY(-50%);
  transition: 0.3s;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
  z-index: 10;
}

.slick-prev:hover, .slick-next:hover {
  color: transparent;
  outline: none;
  background: \$primary-color;
}

.slick-prev:hover:before, .slick-next:hover:before {
  opacity: 1;
}

.slick-prev.slick-disabled, .slick-next.slick-disabled {
  pointer-events: none;
  cursor: default;
  background-color: #e8e8e8;
  box-shadow: none;
}

.slick-prev.slick-disabled:before, .slick-next.slick-disabled:before {
  color: #808080;
}

.slick-prev:before, .slick-next:before {
  font-family: \"Feather-Icons\";
  font-size: 26px;
  line-height: 1;
  opacity: 1;
  transition: 0.3s;
  position: relative;
  color: #fff;
}

.slick-prev {
  left: -85px;
  &:before {
    content: '\\e92f';
    left: -1px;
  }
}

.slick-next {
  right: -85px;
  &:before {
    content: '\\e930';
    right: -1px;
  }
}

/* Dots */

.slick-dots {
  margin: 0 auto;
  padding: 0;
  text-align: center;
  li {
    position: relative;
    display: inline-block;
    padding: 0;
    margin: 0 3px;
    cursor: pointer;
    font-size: 0;
    line-height: 0;
    cursor: pointer;
    color: transparent;
    border: 0;
    position: relative;
    outline: none;
    display: inline-block;
    width: 15px;
    height: 15px;
    margin: 0 3px;
    opacity: 1;
    border-radius: 50%;
    line-height: 0;
    box-shadow: inset 0 0 0 2px #c0c0c0;
    transition: all 0.3s;
    &.slick-active {
      box-shadow: inset 0 0 0 6px #c0c0c0;
      transition: all 0.3s;
    }
    &:after {
      display: block;
      height: 13px;
      width: 13px;
      content: \"\";
      position: absolute;
      top: 1px;
      left: 1px;
      background-color: transparent;
      border-radius: 50%;
      transition: all 0.3s;
      opacity: 0;
      background-color: #c0c0c0;
    }
    &.slick-active:after {
      opacity: 1;
    }
  }
}

/* Reset */

.slick-slide {
  display: none;
  outline: none;
}

.slick-initialized .slick-slide {
  display: block;
}

.default-slick-carousel {
  .slick-carousel-item {
    margin: 15px;
  }
  height: auto;
  width: calc(100% + 30px);
  left: -15px;
  display: none;
}

.testimonial-carousel, .logo-carousel, .blog-carousel {
  display: none;
}

.default-slick-carousel.slick-initialized, .testimonial-carousel.slick-initialized, .logo-carousel.slick-initialized, .blog-carousel.slick-initialized {
  display: block;
}

/* Custom */

.default-slick-carousel {
  .freelancer {
    margin: 15px;
    width: 30%;
  }
  &.slick-initialized .freelancer {
    width: auto;
  }
  .freelancer-details-list ul li {
    margin-right: 22px;
    &:last-child {
      margin-right: 0px;
    }
  }
  .freelancer:hover {
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
    transform: translateY(0px);
  }
}

@media (min-width: 1367px) and (max-width: 1440px) {
  .slick-prev {
    left: -65px;
  }
  .slick-next {
    right: -65px;
  }
}

@media (max-width: 1290px) {
  .slick-prev {
    left: -10px;
  }
  .slick-next {
    right: -10px;
  }
}

@media (max-width: 1090px) {
  .slick-prev {
    left: 40px;
  }
  .slick-next {
    right: 40px;
  }
}

.full-width-carousel-fix {
  overflow: hidden;
  .slick-list {
    overflow: visible;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/vendor/_slick-carousel.scss";
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
/* Slick Slider
------------------------------------- */

/* Slider */
.slick-slider {
  position: relative;
  display: block;
  box-sizing: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-touch-callout: none;
  -khtml-user-select: none;
  -ms-touch-action: pan-y;
  touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}

.slick-list {
  position: relative;
  display: block;
  overflow: hidden;
  margin: 0;
  padding: 0;
  &:focus {
    outline: none;
  }
  &.dragging {
    cursor: pointer;
    cursor: hand;
  }
}

.slick-slider {
  .slick-track, .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slick-track {
  position: relative;
  top: 0;
  left: 0;
  display: block;
  margin-left: auto;
  margin-right: auto;
  &:before {
    display: table;
    content: '';
  }
  &:after {
    display: table;
    content: '';
    clear: both;
  }
}

.slick-loading .slick-track {
  visibility: hidden;
}

.slick-slide {
  display: none;
  float: left;
  height: 100%;
  min-height: 1px;
}

[dir='rtl'] .slick-slide {
  float: right;
}

.slick-slide {
  img {
    display: block;
  }
  &.slick-loading img {
    display: none;
  }
  &.dragging img {
    pointer-events: none;
  }
}

.slick-initialized .slick-slide {
  display: block;
}

.slick-loading .slick-slide {
  visibility: hidden;
}

.slick-vertical .slick-slide {
  display: block;
  height: auto;
  border: 1px solid transparent;
}

.slick-arrow.slick-hidden {
  display: none;
}

/* Slider */
/*.slick-loading .slick-list {
    background: #fff url('./ajax-loader.gif') center center no-repeat;
}
*/

/* Arrows */

.slick-prev, .slick-next {
  font-size: 0;
  line-height: 0;
  position: absolute;
  top: 50%;
  display: block;
  padding: 0;
  -webkit-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
  cursor: pointer;
  border: none;
  outline: none;
  background-color: #333;
  border-radius: \$global-border-radius;
  width: 48px;
  height: 48px;
  display: block;
  top: calc(50% - 15px);
  transform: translateY(-50%);
  transition: 0.3s;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
  z-index: 10;
}

.slick-prev:hover, .slick-next:hover {
  color: transparent;
  outline: none;
  background: \$primary-color;
}

.slick-prev:hover:before, .slick-next:hover:before {
  opacity: 1;
}

.slick-prev.slick-disabled, .slick-next.slick-disabled {
  pointer-events: none;
  cursor: default;
  background-color: #e8e8e8;
  box-shadow: none;
}

.slick-prev.slick-disabled:before, .slick-next.slick-disabled:before {
  color: #808080;
}

.slick-prev:before, .slick-next:before {
  font-family: \"Feather-Icons\";
  font-size: 26px;
  line-height: 1;
  opacity: 1;
  transition: 0.3s;
  position: relative;
  color: #fff;
}

.slick-prev {
  left: -85px;
  &:before {
    content: '\\e92f';
    left: -1px;
  }
}

.slick-next {
  right: -85px;
  &:before {
    content: '\\e930';
    right: -1px;
  }
}

/* Dots */

.slick-dots {
  margin: 0 auto;
  padding: 0;
  text-align: center;
  li {
    position: relative;
    display: inline-block;
    padding: 0;
    margin: 0 3px;
    cursor: pointer;
    font-size: 0;
    line-height: 0;
    cursor: pointer;
    color: transparent;
    border: 0;
    position: relative;
    outline: none;
    display: inline-block;
    width: 15px;
    height: 15px;
    margin: 0 3px;
    opacity: 1;
    border-radius: 50%;
    line-height: 0;
    box-shadow: inset 0 0 0 2px #c0c0c0;
    transition: all 0.3s;
    &.slick-active {
      box-shadow: inset 0 0 0 6px #c0c0c0;
      transition: all 0.3s;
    }
    &:after {
      display: block;
      height: 13px;
      width: 13px;
      content: \"\";
      position: absolute;
      top: 1px;
      left: 1px;
      background-color: transparent;
      border-radius: 50%;
      transition: all 0.3s;
      opacity: 0;
      background-color: #c0c0c0;
    }
    &.slick-active:after {
      opacity: 1;
    }
  }
}

/* Reset */

.slick-slide {
  display: none;
  outline: none;
}

.slick-initialized .slick-slide {
  display: block;
}

.default-slick-carousel {
  .slick-carousel-item {
    margin: 15px;
  }
  height: auto;
  width: calc(100% + 30px);
  left: -15px;
  display: none;
}

.testimonial-carousel, .logo-carousel, .blog-carousel {
  display: none;
}

.default-slick-carousel.slick-initialized, .testimonial-carousel.slick-initialized, .logo-carousel.slick-initialized, .blog-carousel.slick-initialized {
  display: block;
}

/* Custom */

.default-slick-carousel {
  .freelancer {
    margin: 15px;
    width: 30%;
  }
  &.slick-initialized .freelancer {
    width: auto;
  }
  .freelancer-details-list ul li {
    margin-right: 22px;
    &:last-child {
      margin-right: 0px;
    }
  }
  .freelancer:hover {
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
    transform: translateY(0px);
  }
}

@media (min-width: 1367px) and (max-width: 1440px) {
  .slick-prev {
    left: -65px;
  }
  .slick-next {
    right: -65px;
  }
}

@media (max-width: 1290px) {
  .slick-prev {
    left: -10px;
  }
  .slick-next {
    right: -10px;
  }
}

@media (max-width: 1090px) {
  .slick-prev {
    left: 40px;
  }
  .slick-next {
    right: 40px;
  }
}

.full-width-carousel-fix {
  overflow: hidden;
  .slick-list {
    overflow: visible;
  }
}", "@Publication/Front/sass/vendor/_slick-carousel.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\vendor\\_slick-carousel.scss");
    }
}
