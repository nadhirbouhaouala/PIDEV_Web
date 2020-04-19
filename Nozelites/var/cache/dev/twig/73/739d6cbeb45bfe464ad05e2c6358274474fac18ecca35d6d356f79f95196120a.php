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

/* @Publication/Front/sass/gui/_boxed-list.scss */
class __TwigTemplate_2fac1ac7c5bf54e914aff0843fd7311f4abfb42992e6587ec1062ba6e42d469e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_boxed-list.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_boxed-list.scss"));

        // line 1
        echo "
/* Boxed List 
------------------------------------- */

.boxed-list {
  margin-top: 10px;
  display: block;
}

.boxed-list-headline {
  background-color: #f2f2f2;
  border-radius: \$global-border-radius;
  padding: 20px 35px;
  h3 {
    font-size: 18px;
    span {
      color: #888;
    }
    i {
      font-size: 18px;
      color: \$primary-color;
      font-size: 24px;
      position: relative;
      top: 3px;
      line-height: 0;
      display: inline-block;
      margin-right: 5px;
    }
  }
}

.boxed-list ul.boxed-list-ul {
  padding: 0;
  margin: 0;
  list-style: none;
  > li {
    display: block;
    background-color: transparent;
    padding: 35px;
    border-radius: \$global-border-radius;
    &:nth-child(2n) {
      background-color: #fafafa;
    }
  }
}

/* Fields UL */

.fields-ul {
  padding: 0;
  margin: 0;
  list-style: none;
  > li {
    display: block;
    background-color: transparent;
    padding: 30px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e4e4e4;
  }
}

/* Boxed List Item
------------------------------------- */

.boxed-list-item {
  display: flex;
  .item-image {
    flex: 0 0 60px;
    height: 60px;
    border-radius: \$global-border-radius;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 10px;
    margin-right: 25px;
    position: relative;
    top: -2px;
    display: flex;
    background-color: #fff;
    img {
      height: auto;
      align-self: center;
    }
  }
  .item-content h4 {
    a {
      font-size: 18px;
      font-weight: 600;
      color: \$body-heading-color;
    }
    font-size: 18px;
    font-weight: 600;
    color: \$body-heading-color;
    span {
      font-size: \$body-font-size;
      color: #808080;
      display: block;
      font-weight: 500;
    }
  }
  .item-details {
    display: flex;
    margin-top: 5px;
    .star-rating {
      top: -2px;
      position: relative;
      margin-right: 15px;
    }
    .detail-item {
      margin-right: 15px;
      color: #808080;
      a {
        color: #808080;
        &:hover {
          color: \$primary-color;
        }
      }
      i {
        margin-right: 3px;
        position: relative;
        top: 0;
      }
    }
  }
  .item-description {
    p {
      margin-bottom: 0;
      padding-bottom: 0;
    }
    margin-top: 15px;
  }
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .boxed-list-item .item-image {
    max-width: 60px;
    img {
      width: 100%;
    }
  }
}

/* IE 11 Fixes - End */

/* Bid 
------------------------------------- */

.bid {
  display: flex;
  width: 100%;
  .bids-content {
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  .bids-bid {
    align-items: center;
    display: flex;
  }
  .bids-avatar {
    align-self: center;
  }
  .freelancer-name {
    margin-top: 0;
  }
  .freelancer-avatar {
    width: 80px;
    margin: 0 auto;
    position: relative;
    margin-right: 30px;
  }
  .star-rating {
    margin-top: 3px;
    display: block;
  }
  .freelancer-avatar {
    img {
      width: 100%;
      border-radius: 50%;
      cursor: pointer;
    }
    .verified-badge {
      position: absolute;
      bottom: 0;
      right: 0;
    }
  }
}

/* Bid Rate */

.bid-rate {
  text-align: center;
  font-size: 14px;
  background: #f4f4f4;
  color: #888;
  border-radius: \$global-border-radius;
  padding: 8px 12px;
}

.boxed-list ul.boxed-list-ul > li:nth-child(2n) .bid-rate {
  background: #f2f2f2;
}

.bid-rate {
  .rate {
    color: \$body-heading-color;
    font-weight: 600;
    text-align: center;
    line-height: 20px;
    border-radius: \$global-border-radius;
    padding: 5px 10px;
    padding-bottom: 0;
    font-size: \$body-font-size;
  }
  span {
    display: block;
    margin-top: -2px;
  }
}

@media (max-width: 768px) {
  .bid {
    .freelancer-avatar {
      width: 70px;
      margin: 0 0 15px 0;
    }
    display: block;
  }
  .bids-bid {
    margin-top: 15px;
  }
  .bid-rate {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .boxed-list-item .item-details {
    display: block;
    width: 100%;
  }
  .boxed-list-item .item-image {
    display: none;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_boxed-list.scss";
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
/* Boxed List 
------------------------------------- */

.boxed-list {
  margin-top: 10px;
  display: block;
}

.boxed-list-headline {
  background-color: #f2f2f2;
  border-radius: \$global-border-radius;
  padding: 20px 35px;
  h3 {
    font-size: 18px;
    span {
      color: #888;
    }
    i {
      font-size: 18px;
      color: \$primary-color;
      font-size: 24px;
      position: relative;
      top: 3px;
      line-height: 0;
      display: inline-block;
      margin-right: 5px;
    }
  }
}

.boxed-list ul.boxed-list-ul {
  padding: 0;
  margin: 0;
  list-style: none;
  > li {
    display: block;
    background-color: transparent;
    padding: 35px;
    border-radius: \$global-border-radius;
    &:nth-child(2n) {
      background-color: #fafafa;
    }
  }
}

/* Fields UL */

.fields-ul {
  padding: 0;
  margin: 0;
  list-style: none;
  > li {
    display: block;
    background-color: transparent;
    padding: 30px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e4e4e4;
  }
}

/* Boxed List Item
------------------------------------- */

.boxed-list-item {
  display: flex;
  .item-image {
    flex: 0 0 60px;
    height: 60px;
    border-radius: \$global-border-radius;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 10px;
    margin-right: 25px;
    position: relative;
    top: -2px;
    display: flex;
    background-color: #fff;
    img {
      height: auto;
      align-self: center;
    }
  }
  .item-content h4 {
    a {
      font-size: 18px;
      font-weight: 600;
      color: \$body-heading-color;
    }
    font-size: 18px;
    font-weight: 600;
    color: \$body-heading-color;
    span {
      font-size: \$body-font-size;
      color: #808080;
      display: block;
      font-weight: 500;
    }
  }
  .item-details {
    display: flex;
    margin-top: 5px;
    .star-rating {
      top: -2px;
      position: relative;
      margin-right: 15px;
    }
    .detail-item {
      margin-right: 15px;
      color: #808080;
      a {
        color: #808080;
        &:hover {
          color: \$primary-color;
        }
      }
      i {
        margin-right: 3px;
        position: relative;
        top: 0;
      }
    }
  }
  .item-description {
    p {
      margin-bottom: 0;
      padding-bottom: 0;
    }
    margin-top: 15px;
  }
}

/* IE 11 Fixes */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
  .boxed-list-item .item-image {
    max-width: 60px;
    img {
      width: 100%;
    }
  }
}

/* IE 11 Fixes - End */

/* Bid 
------------------------------------- */

.bid {
  display: flex;
  width: 100%;
  .bids-content {
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  .bids-bid {
    align-items: center;
    display: flex;
  }
  .bids-avatar {
    align-self: center;
  }
  .freelancer-name {
    margin-top: 0;
  }
  .freelancer-avatar {
    width: 80px;
    margin: 0 auto;
    position: relative;
    margin-right: 30px;
  }
  .star-rating {
    margin-top: 3px;
    display: block;
  }
  .freelancer-avatar {
    img {
      width: 100%;
      border-radius: 50%;
      cursor: pointer;
    }
    .verified-badge {
      position: absolute;
      bottom: 0;
      right: 0;
    }
  }
}

/* Bid Rate */

.bid-rate {
  text-align: center;
  font-size: 14px;
  background: #f4f4f4;
  color: #888;
  border-radius: \$global-border-radius;
  padding: 8px 12px;
}

.boxed-list ul.boxed-list-ul > li:nth-child(2n) .bid-rate {
  background: #f2f2f2;
}

.bid-rate {
  .rate {
    color: \$body-heading-color;
    font-weight: 600;
    text-align: center;
    line-height: 20px;
    border-radius: \$global-border-radius;
    padding: 5px 10px;
    padding-bottom: 0;
    font-size: \$body-font-size;
  }
  span {
    display: block;
    margin-top: -2px;
  }
}

@media (max-width: 768px) {
  .bid {
    .freelancer-avatar {
      width: 70px;
      margin: 0 0 15px 0;
    }
    display: block;
  }
  .bids-bid {
    margin-top: 15px;
  }
  .bid-rate {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .boxed-list-item .item-details {
    display: block;
    width: 100%;
  }
  .boxed-list-item .item-image {
    display: none;
  }
}", "@Publication/Front/sass/gui/_boxed-list.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_boxed-list.scss");
    }
}
