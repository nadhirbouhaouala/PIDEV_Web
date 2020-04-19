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

/* @Publication/Front/sass/gui/_testimonials.scss */
class __TwigTemplate_1175ecea401cdf4a42e6da285bbc71b0cf8a1e38899955cd231c88f96b227178 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_testimonials.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_testimonials.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Testimonials
------------------------------------- */

.testimonial-box {
  background: transparent;
  border-radius: 6px;
  padding: 45px;
  padding-top: 35px;
  color: #888;
  position: relative;
  margin: 70px 0 0;
  box-shadow: none;
  transition: 0.4s;
  cursor: grab;
  text-align: center;
  transform: scale(0.8);
  &:before {
    content: \"\\e948\";
    font-family: \"Material-Icons\";
    position: absolute;
    top: -35px;
    left: 0;
    font-size: 80px;
    transform: translateY(-100%);
    color: \$primary-color;
    opacity: 0;
    transition: 0.3s;
  }
}

.testimonial-carousel .slick-slide {
  margin: 0 20px 30px 20px;
  opacity: 0;
  transition: 0.4s;
  pointer-events: all;
  &.slick-active {
    opacity: 1;
    filter: none;
    pointer-events: all;
    .testimonial-box {
      transform: scale(1);
      &:before {
        opacity: 1;
      }
      background: #fff;
      color: \$body-font-color;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
    }
  }
}

.testimonial {
  font-size: 18px;
  font-weight: 300;
  line-height: 30px;
  color: #808080;
  line-height: 32px;
  p {
    font-size: 18px;
    font-weight: 300;
    line-height: 30px;
    color: #808080;
    line-height: 32px;
  }
}

.testimonial-author {
  display: block;
  width: 100%;
  padding: 20px 0 15px 0;
  text-align: center;
  margin: 0 auto;
}

.testimonial-avatar {
  position: absolute;
  top: 0;
  transform: translateY(-50%);
  margin: 0 auto;
  left: 0;
  right: 0;
  img {
    width: 70px;
    display: inline-block;
    text-align: center;
    height: auto;
    border-radius: 50%;
    margin: 0 auto;
  }
}

.testimonial-author {
  h4 {
    display: block;
    width: 100%;
    font-size: 18px;
    padding-top: 0;
    color: \$body-heading-color;
    font-weight: 600;
  }
  span {
    display: block;
    padding-top: 0;
    display: inline-block;
    border-radius: \$global-border-radius;
    font-size: \$body-font-size;
    font-weight: 300;
    line-height: 23px;
    padding: 3px 12px;
    margin: 5px 0 10px 0;
    background-color: \$primary-color;
    color: #fff;
    box-shadow: 0 2px 10px rgba(\$primary-color, 0.25);
  }
}

.testimonial-box .star-rating {
  height: 30px;
  display: inline-block;
  margin-bottom: -10px;
  margin-top: 15px;
}

.testimonial-carousel {
  .slick-next {
    right: 25%;
  }
  .slick-prev {
    left: 25%;
  }
  .slick-next, .slick-prev {
    margin-top: 35px;
  }
}

/* Media Queries for Testimonials */
@media (max-width: 1600px) {
  .testimonial-carousel {
    .slick-next {
      right: 15%;
    }
    .slick-prev {
      left: 15%;
    }
  }
}

@media (max-width: 1240px) {
  .testimonial-carousel {
    .slick-next {
      right: 13%;
    }
    .slick-prev {
      left: 13%;
    }
  }
}

@media (max-width: 992px) {
  .testimonial-carousel {
    .slick-next {
      right: 8%;
    }
    .slick-prev {
      left: 8%;
    }
  }
  .testimonial-box {
    padding: 35px;
  }
  .testimonial {
    font-size: \$body-font-size;
    line-height: 28px;
    p {
      font-size: \$body-font-size;
      line-height: 28px;
    }
  }
}

@media (max-width: 768px) {
  .testimonial-carousel {
    .slick-next {
      right: 20px;
    }
    .slick-prev {
      left: 20px;
    }
    .slick-next, .slick-prev {
      transform: scale(0.8) translateY(-50%);
    }
  }
}

/* Logo Carousel */

.logo-carousel {
  .carousel-item {
    display: inline-block;
    height: 120px;
    text-align: center;
    position: relative;
    a {
      display: inline-block;
    }
    img {
      max-height: 60%;
      max-width: 60%;
      margin: 0 auto;
      left: 0;
      right: 0;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
    }
  }
  .slick-prev, .slick-next {
    top: 50%;
  }
}

/* Blog Carousel */

.blog-carousel {
  width: calc(100% + 30px);
  left: -15px;
  .blog-compact-item-container {
    margin: 15px;
    display: inline-block;
    width: 30%;
  }
  &.slick-initialized .blog-compact-item-container {
    width: auto;
  }
}

.full-width-carousel-fix {
  .default-slick-carousel.slick-initialized .freelancer, .blog-carousel.slick-initialized .blog-compact-item-container {
    margin: 15px;
    transform: scale(0.85);
    opacity: 0;
    pointer-events: none;
    transition: 0.4s;
  }
  .default-slick-carousel.slick-initialized .slick-slide.slick-active.freelancer {
    transform: scale(1);
    opacity: 1;
    pointer-events: all;
  }
  .blog-carousel.slick-initialized .slick-slide.slick-active.blog-compact-item-container {
    transform: scale(1);
    opacity: 1;
    pointer-events: all;
    &:hover {
      transform: scale(1) translateY(-10px);
    }
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_testimonials.scss";
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
/* Testimonials
------------------------------------- */

.testimonial-box {
  background: transparent;
  border-radius: 6px;
  padding: 45px;
  padding-top: 35px;
  color: #888;
  position: relative;
  margin: 70px 0 0;
  box-shadow: none;
  transition: 0.4s;
  cursor: grab;
  text-align: center;
  transform: scale(0.8);
  &:before {
    content: \"\\e948\";
    font-family: \"Material-Icons\";
    position: absolute;
    top: -35px;
    left: 0;
    font-size: 80px;
    transform: translateY(-100%);
    color: \$primary-color;
    opacity: 0;
    transition: 0.3s;
  }
}

.testimonial-carousel .slick-slide {
  margin: 0 20px 30px 20px;
  opacity: 0;
  transition: 0.4s;
  pointer-events: all;
  &.slick-active {
    opacity: 1;
    filter: none;
    pointer-events: all;
    .testimonial-box {
      transform: scale(1);
      &:before {
        opacity: 1;
      }
      background: #fff;
      color: \$body-font-color;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
    }
  }
}

.testimonial {
  font-size: 18px;
  font-weight: 300;
  line-height: 30px;
  color: #808080;
  line-height: 32px;
  p {
    font-size: 18px;
    font-weight: 300;
    line-height: 30px;
    color: #808080;
    line-height: 32px;
  }
}

.testimonial-author {
  display: block;
  width: 100%;
  padding: 20px 0 15px 0;
  text-align: center;
  margin: 0 auto;
}

.testimonial-avatar {
  position: absolute;
  top: 0;
  transform: translateY(-50%);
  margin: 0 auto;
  left: 0;
  right: 0;
  img {
    width: 70px;
    display: inline-block;
    text-align: center;
    height: auto;
    border-radius: 50%;
    margin: 0 auto;
  }
}

.testimonial-author {
  h4 {
    display: block;
    width: 100%;
    font-size: 18px;
    padding-top: 0;
    color: \$body-heading-color;
    font-weight: 600;
  }
  span {
    display: block;
    padding-top: 0;
    display: inline-block;
    border-radius: \$global-border-radius;
    font-size: \$body-font-size;
    font-weight: 300;
    line-height: 23px;
    padding: 3px 12px;
    margin: 5px 0 10px 0;
    background-color: \$primary-color;
    color: #fff;
    box-shadow: 0 2px 10px rgba(\$primary-color, 0.25);
  }
}

.testimonial-box .star-rating {
  height: 30px;
  display: inline-block;
  margin-bottom: -10px;
  margin-top: 15px;
}

.testimonial-carousel {
  .slick-next {
    right: 25%;
  }
  .slick-prev {
    left: 25%;
  }
  .slick-next, .slick-prev {
    margin-top: 35px;
  }
}

/* Media Queries for Testimonials */
@media (max-width: 1600px) {
  .testimonial-carousel {
    .slick-next {
      right: 15%;
    }
    .slick-prev {
      left: 15%;
    }
  }
}

@media (max-width: 1240px) {
  .testimonial-carousel {
    .slick-next {
      right: 13%;
    }
    .slick-prev {
      left: 13%;
    }
  }
}

@media (max-width: 992px) {
  .testimonial-carousel {
    .slick-next {
      right: 8%;
    }
    .slick-prev {
      left: 8%;
    }
  }
  .testimonial-box {
    padding: 35px;
  }
  .testimonial {
    font-size: \$body-font-size;
    line-height: 28px;
    p {
      font-size: \$body-font-size;
      line-height: 28px;
    }
  }
}

@media (max-width: 768px) {
  .testimonial-carousel {
    .slick-next {
      right: 20px;
    }
    .slick-prev {
      left: 20px;
    }
    .slick-next, .slick-prev {
      transform: scale(0.8) translateY(-50%);
    }
  }
}

/* Logo Carousel */

.logo-carousel {
  .carousel-item {
    display: inline-block;
    height: 120px;
    text-align: center;
    position: relative;
    a {
      display: inline-block;
    }
    img {
      max-height: 60%;
      max-width: 60%;
      margin: 0 auto;
      left: 0;
      right: 0;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
    }
  }
  .slick-prev, .slick-next {
    top: 50%;
  }
}

/* Blog Carousel */

.blog-carousel {
  width: calc(100% + 30px);
  left: -15px;
  .blog-compact-item-container {
    margin: 15px;
    display: inline-block;
    width: 30%;
  }
  &.slick-initialized .blog-compact-item-container {
    width: auto;
  }
}

.full-width-carousel-fix {
  .default-slick-carousel.slick-initialized .freelancer, .blog-carousel.slick-initialized .blog-compact-item-container {
    margin: 15px;
    transform: scale(0.85);
    opacity: 0;
    pointer-events: none;
    transition: 0.4s;
  }
  .default-slick-carousel.slick-initialized .slick-slide.slick-active.freelancer {
    transform: scale(1);
    opacity: 1;
    pointer-events: all;
  }
  .blog-carousel.slick-initialized .slick-slide.slick-active.blog-compact-item-container {
    transform: scale(1);
    opacity: 1;
    pointer-events: all;
    &:hover {
      transform: scale(1) translateY(-10px);
    }
  }
}
", "@Publication/Front/sass/gui/_testimonials.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_testimonials.scss");
    }
}
