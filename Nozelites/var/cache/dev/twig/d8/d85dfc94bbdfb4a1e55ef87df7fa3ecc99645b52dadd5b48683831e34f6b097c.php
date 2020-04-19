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

/* @Publication/Front/sass/layout/_single-freelancer-page.scss */
class __TwigTemplate_5545cd938d540f3ce4c09e25be9cda05ea993677dfa85f9390660ca3c8b8e97b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_single-freelancer-page.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_single-freelancer-page.scss"));

        // line 1
        echo "
/* Single Freelancer Profile
------------------------------------- */

/* Freelancer Socials*/

.freelancer-socials ul {
  margin: 0;
  padding: 0;
  list-style: none;
  cursor: default;
  margin: 0 0 -5px -8px;
  li {
    display: inline-block;
    font-size: 24px;
    a {
      color: #b9b9b9;
      padding: 0 8px;
      &:hover {
        color: \$body-heading-color;
      }
    }
  }
}

/* Attachments */

.attachments-container {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  width: calc(100% + 20px);
  margin-bottom: -30px;
}

.attachment-box {
  display: flex;
  margin: 0 20px 20px 0;
  background-color: #f4f4f4;
  border-radius: 4px 0px 4px 4px;
  font-weight: 600;
  padding: 15px 20px;
  padding-bottom: 45px;
  padding-right: 25px;
  line-height: 24px;
  flex-direction: column;
  color: \$body-font-color;
  position: relative;
  transition: 0.3s;
  flex: 0 1 calc(50% - 21px);
  cursor: default;
  position: relative;
}

.single-page-section {
  .attachment-box {
    flex: 0 1 calc(33% - 20px);
  }
  .attachments-container {
    margin-bottom: -20px;
  }
}

a.attachment-box {
  cursor: pointer;
}

.attachment-box:before {
  content: \"\";
  position: absolute;
  top: 0;
  right: 0;
  border-width: 0 20px 20px 0;
  border-style: solid;
  border-color: rgba(0, 0, 0, 0.15) #fff;
  transition: 0.3s;
  border-radius: 0 0 0 4px;
}

a.attachment-box:hover {
  background-color: \$primary-color;
  color: #fff;
  &:before {
    border-color: rgba(0, 0, 0, 0.25) #fff;
  }
}

.attachment-box {
  span {
    font-size: 14px;
    line-height: 20px;
    display: inline-block;
    flex: auto;
  }
  i {
    display: block;
    font-style: normal;
    font-size: 14px;
    color: #999;
    font-weight: 500;
    margin-top: 10px;
    position: absolute;
    bottom: 10px;
    transition: 0.3s;
  }
}

a.attachment-box:hover i {
  color: rgba(255, 255, 255, 0.7);
}

/* Remove Attachment Button */

.attachment-box {
  .remove-attachment {
    position: absolute;
    bottom: 10px;
    right: 10px;
    color: #fff;
    background-color: #dc3139;
    box-shadow: 0 3px 8px rgba(234, 65, 81, 0.15);
    height: 28px;
    width: 28px;
    line-height: 28px;
    border-radius: 3px;
    font-weight: 500;
    font-size: 14px;
    transition: 0.3s;
    opacity: 0;
    transform: translateY(3px);
    &:before {
      content: \"\\e9e4\";
      font-family: \"Feather-Icons\";
    }
  }
  &:hover .remove-attachment {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Profile Overview */

.profile-overview {
  display: flex;
  line-height: 22px;
  align-items: center;
  margin-bottom: 25px;
  width: calc(100% + 25px);
  .overview-item {
    flex: 1;
    border-right: 1px solid #e0e0e0;
    margin-right: 20px;
    padding-right: 20px;
    flex-grow: 1;
    &:last-child {
      border-right: 0;
      padding-right: 0;
    }
    strong {
      display: block;
      font-weight: 600;
      color: \$body-heading-color;
      font-size: 18px;
      margin-bottom: 5px;
    }
    span {
      color: #808080;
    }
  }
}

/* Freelancer Indicators */

.freelancer-indicators {
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
  line-height: 24px;
  margin-bottom: -20px;
  .indicator {
    width: calc(50% - 31px);
    margin-right: 30px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    strong {
      color: \$body-heading-color;
      font-weight: 600;
    }
  }
  .indicator-bar {
    span {
      width: 100%;
      height: 4px;
      background-color: #e0e0e0;
      border-radius: 10px;
      position: relative;
      margin: 10px 0;
      transition: 1s;
      width: 0;
      background-color: \$primary-color;
      position: absolute;
      top: 0;
      margin: 0;
    }
    width: 100%;
    height: 4px;
    background-color: #e0e0e0;
    border-radius: 10px;
    position: relative;
    margin: 10px 0;
    transition: 1s;
  }
}

/* Media Queriers */
@media (max-width: 1240px) {
  .profile-overview {
    display: block;
    width: 100%;
    .overview-item {
      display: block;
      width: 100%;
      border-right: 0;
      border-bottom: 1px solid #e0e0e0;
      padding: 15px 0;
      margin: 0;
      &:last-child {
        border-right: none;
        border-bottom: none;
      }
    }
  }
}

@media (max-width: 768px) {
  .boxed-list-item .item-details {
    display: block;
    width: 100%;
  }
  .attachments-container {
    display: block;
    width: 100%;
    .attachment-box {
      display: block;
      width: 100%;
    }
  }
  .freelancer-indicators {
    display: block;
    width: 100%;
    .indicator {
      display: block;
      width: 100%;
    }
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
        return "@Publication/Front/sass/layout/_single-freelancer-page.scss";
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
/* Single Freelancer Profile
------------------------------------- */

/* Freelancer Socials*/

.freelancer-socials ul {
  margin: 0;
  padding: 0;
  list-style: none;
  cursor: default;
  margin: 0 0 -5px -8px;
  li {
    display: inline-block;
    font-size: 24px;
    a {
      color: #b9b9b9;
      padding: 0 8px;
      &:hover {
        color: \$body-heading-color;
      }
    }
  }
}

/* Attachments */

.attachments-container {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  width: calc(100% + 20px);
  margin-bottom: -30px;
}

.attachment-box {
  display: flex;
  margin: 0 20px 20px 0;
  background-color: #f4f4f4;
  border-radius: 4px 0px 4px 4px;
  font-weight: 600;
  padding: 15px 20px;
  padding-bottom: 45px;
  padding-right: 25px;
  line-height: 24px;
  flex-direction: column;
  color: \$body-font-color;
  position: relative;
  transition: 0.3s;
  flex: 0 1 calc(50% - 21px);
  cursor: default;
  position: relative;
}

.single-page-section {
  .attachment-box {
    flex: 0 1 calc(33% - 20px);
  }
  .attachments-container {
    margin-bottom: -20px;
  }
}

a.attachment-box {
  cursor: pointer;
}

.attachment-box:before {
  content: \"\";
  position: absolute;
  top: 0;
  right: 0;
  border-width: 0 20px 20px 0;
  border-style: solid;
  border-color: rgba(0, 0, 0, 0.15) #fff;
  transition: 0.3s;
  border-radius: 0 0 0 4px;
}

a.attachment-box:hover {
  background-color: \$primary-color;
  color: #fff;
  &:before {
    border-color: rgba(0, 0, 0, 0.25) #fff;
  }
}

.attachment-box {
  span {
    font-size: 14px;
    line-height: 20px;
    display: inline-block;
    flex: auto;
  }
  i {
    display: block;
    font-style: normal;
    font-size: 14px;
    color: #999;
    font-weight: 500;
    margin-top: 10px;
    position: absolute;
    bottom: 10px;
    transition: 0.3s;
  }
}

a.attachment-box:hover i {
  color: rgba(255, 255, 255, 0.7);
}

/* Remove Attachment Button */

.attachment-box {
  .remove-attachment {
    position: absolute;
    bottom: 10px;
    right: 10px;
    color: #fff;
    background-color: #dc3139;
    box-shadow: 0 3px 8px rgba(234, 65, 81, 0.15);
    height: 28px;
    width: 28px;
    line-height: 28px;
    border-radius: 3px;
    font-weight: 500;
    font-size: 14px;
    transition: 0.3s;
    opacity: 0;
    transform: translateY(3px);
    &:before {
      content: \"\\e9e4\";
      font-family: \"Feather-Icons\";
    }
  }
  &:hover .remove-attachment {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Profile Overview */

.profile-overview {
  display: flex;
  line-height: 22px;
  align-items: center;
  margin-bottom: 25px;
  width: calc(100% + 25px);
  .overview-item {
    flex: 1;
    border-right: 1px solid #e0e0e0;
    margin-right: 20px;
    padding-right: 20px;
    flex-grow: 1;
    &:last-child {
      border-right: 0;
      padding-right: 0;
    }
    strong {
      display: block;
      font-weight: 600;
      color: \$body-heading-color;
      font-size: 18px;
      margin-bottom: 5px;
    }
    span {
      color: #808080;
    }
  }
}

/* Freelancer Indicators */

.freelancer-indicators {
  display: flex;
  flex-wrap: wrap;
  width: calc(100% + 30px);
  line-height: 24px;
  margin-bottom: -20px;
  .indicator {
    width: calc(50% - 31px);
    margin-right: 30px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    strong {
      color: \$body-heading-color;
      font-weight: 600;
    }
  }
  .indicator-bar {
    span {
      width: 100%;
      height: 4px;
      background-color: #e0e0e0;
      border-radius: 10px;
      position: relative;
      margin: 10px 0;
      transition: 1s;
      width: 0;
      background-color: \$primary-color;
      position: absolute;
      top: 0;
      margin: 0;
    }
    width: 100%;
    height: 4px;
    background-color: #e0e0e0;
    border-radius: 10px;
    position: relative;
    margin: 10px 0;
    transition: 1s;
  }
}

/* Media Queriers */
@media (max-width: 1240px) {
  .profile-overview {
    display: block;
    width: 100%;
    .overview-item {
      display: block;
      width: 100%;
      border-right: 0;
      border-bottom: 1px solid #e0e0e0;
      padding: 15px 0;
      margin: 0;
      &:last-child {
        border-right: none;
        border-bottom: none;
      }
    }
  }
}

@media (max-width: 768px) {
  .boxed-list-item .item-details {
    display: block;
    width: 100%;
  }
  .attachments-container {
    display: block;
    width: 100%;
    .attachment-box {
      display: block;
      width: 100%;
    }
  }
  .freelancer-indicators {
    display: block;
    width: 100%;
    .indicator {
      display: block;
      width: 100%;
    }
  }
  .boxed-list-item .item-image {
    display: none;
  }
}", "@Publication/Front/sass/layout/_single-freelancer-page.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_single-freelancer-page.scss");
    }
}
