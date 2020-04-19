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

/* @Publication/Front/sass/listings/_tasks-list-layout.scss */
class __TwigTemplate_b4810a765e49ce9b3ead8ccbfb2699eebed857bfbc3622a9a3e6da0f7ff638a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_tasks-list-layout.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/listings/_tasks-list-layout.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Tasks - List Layout
------------------------------------- */

.task-listing {
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  margin-bottom: 30px;
  background-color: #fff;
  transition: 0.3s;
  position: relative;
  display: flex;
  justify-content: center;
  cursor: pointer;
  &:hover {
    box-shadow: 0 2px 18px rgba(0, 0, 0, 0.14);
    transform: translateY(-4px);
  }
}

.task-listing-details {
  padding: 34px 38px;
  flex: 1;
}

.task-listing {
  .task-listing-description {
    flex: 1;
    align-items: center;
    justify-content: center;
    p {
      margin: 15px 0 0 0;
      padding: 0;
      color: \$body-font-color;
    }
  }
  h3.task-listing-title {
    a {
      font-size: \$listing-heading-font-size;
      color: \$body-heading-color;
      line-height: 28px;
      cursor: pointer;
      font-weight: 600;
      padding-top: 2px;
      transition: 0.3s;
    }
    font-size: \$listing-heading-font-size;
    color: \$body-heading-color;
    line-height: 28px;
    cursor: pointer;
    font-weight: 600;
    padding-top: 2px;
    transition: 0.3s;
  }
  .task-icons {
    list-style: none;
    padding: 0;
    margin: 3px 0 0 -3px;
    li {
      display: inline-block;
      padding: 0;
      margin: 0;
      margin-right: 10px;
      color: #808080;
    }
    i {
      color: #909090;
      font-size: 18px;
      position: relative;
      top: 1px;
      &.icon-material-outline-desktop-windows {
        font-size: 19px;
        top: 2px;
      }
    }
  }
}

.task-listing-bid {
  flex: 0 0 240px;
  background-color: #f8f8f8;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.task-listing-bid-inner {
  width: 100%;
  padding: 35px;
  .button {
    display: block;
    text-align: center;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
    width: 100%;
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
    }
  }
}

.task-listing-bid .task-offers {
  margin-bottom: 15px;
  /*  text-align: center;*/
  strong {
    display: block;
    color: \$body-heading-color;
    font-weight: 600;
    line-height: 24px;
  }
  span {
    display: block;
    color: #888;
    line-height: 24px;
  }
}

/* Task Tags */

.task-tags {
  display: block;
  margin: 23px 0 3px 0;
  span {
    transition: 0.3s;
    font-size: 14.7px;
    border-radius: \$global-border-radius;
    background-color: rgba(\$primary-color, 0.07);
    color: \$primary-color;
    display: inline-block;
    padding: 6px 15px;
    margin: 2px 0;
    line-height: 24px;
  }
}

/* Compact List */

.compact-list .task-listing {
  border-radius: 0;
  margin-bottom: 0;
  box-shadow: none;
  &:hover {
    transform: translateY(0);
  }
}

.tasks-list-container.compact-list {
  background-color: #fff;
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  .task-listing {
    align-items: center;
    justify-content: center;
    &:nth-child(2n) {
      background-color: #fafafa;
    }
  }
  .task-listing-bid {
    background-color: transparent;
  }
  .task-listing {
    &:hover:before {
      opacity: 1;
    }
    &:before {
      content: \"\";
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      display: block;
      background: \$primary-color;
      transition: 0.3s;
      opacity: 0;
    }
    &:last-of-type {
      border-radius: 0 0 3px 3px;
      overflow: hidden;
    }
    &:first-of-type {
      border-radius: 3px 3px 0 0;
      overflow: hidden;
    }
    .task-listing-details {
      padding-right: 0;
    }
  }
}

/* Section Styles */

.section {
  .task-listing-details, .task-listing-bid-inner {
    padding: 27px 35px;
  }
}

/* Media Queries for Tasks List */
@media (max-width: 1200px) {
  .task-listing-bid {
    flex: 0 0 220px;
  }
}

@media (min-width: 481px) and (max-width: 768px) {
  .task-listing-bid {
    flex: 1;
    padding: 10px 0;
  }
  .task-listing {
    flex-direction: column;
  }
  .task-listing-bid-inner {
    display: flex;
    margin: 20px 0 0 0;
  }
  .tasks-grid-layout .task-listing-bid-inner {
    margin: 0;
  }
  .task-listing-bid-inner {
    .task-offers {
      flex: 1;
    }
    .button {
      height: 100%;
      width: 30%;
    }
  }
  .tasks-list-container.compact-list .task-listing {
    .task-listing-details {
      padding-right: 35px;
      padding-bottom: 0;
    }
    .task-listing-bid {
      padding-bottom: 25px;
    }
  }
  .task-listing-bid-inner {
    width: 100%;
    padding: 0 35px;
  }
}

/* Small Mobile Sizes */
@media (max-width: 768px) {
  .section {
    .task-listing-details {
      padding: 25px 30px;
    }
    .task-listing-bid-inner {
      padding: 0 30px;
    }
  }
}

/* Small Mobile Sizes */
@media (max-width: 480px) {
  .task-listing-bid {
    flex: 1;
    padding: 30px 0;
  }
  .task-listing {
    flex-direction: column;
  }
  .task-listing-bid-inner {
    .task-offers {
      flex: 1;
    }
    .button {
      height: 100%;
      width: 100%;
    }
  }
  .tasks-list-container.compact-list .task-listing {
    .task-listing-details {
      padding-right: 35px;
      padding-bottom: 0;
    }
    .task-listing-bid {
      padding-bottom: 35px;
    }
  }
  .task-listing-bid-inner {
    width: 100%;
    padding: 0 35px;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/listings/_tasks-list-layout.scss";
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
/* Tasks - List Layout
------------------------------------- */

.task-listing {
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  margin-bottom: 30px;
  background-color: #fff;
  transition: 0.3s;
  position: relative;
  display: flex;
  justify-content: center;
  cursor: pointer;
  &:hover {
    box-shadow: 0 2px 18px rgba(0, 0, 0, 0.14);
    transform: translateY(-4px);
  }
}

.task-listing-details {
  padding: 34px 38px;
  flex: 1;
}

.task-listing {
  .task-listing-description {
    flex: 1;
    align-items: center;
    justify-content: center;
    p {
      margin: 15px 0 0 0;
      padding: 0;
      color: \$body-font-color;
    }
  }
  h3.task-listing-title {
    a {
      font-size: \$listing-heading-font-size;
      color: \$body-heading-color;
      line-height: 28px;
      cursor: pointer;
      font-weight: 600;
      padding-top: 2px;
      transition: 0.3s;
    }
    font-size: \$listing-heading-font-size;
    color: \$body-heading-color;
    line-height: 28px;
    cursor: pointer;
    font-weight: 600;
    padding-top: 2px;
    transition: 0.3s;
  }
  .task-icons {
    list-style: none;
    padding: 0;
    margin: 3px 0 0 -3px;
    li {
      display: inline-block;
      padding: 0;
      margin: 0;
      margin-right: 10px;
      color: #808080;
    }
    i {
      color: #909090;
      font-size: 18px;
      position: relative;
      top: 1px;
      &.icon-material-outline-desktop-windows {
        font-size: 19px;
        top: 2px;
      }
    }
  }
}

.task-listing-bid {
  flex: 0 0 240px;
  background-color: #f8f8f8;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.task-listing-bid-inner {
  width: 100%;
  padding: 35px;
  .button {
    display: block;
    text-align: center;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
    width: 100%;
    &:hover {
      box-shadow: 0 4px 12px rgba(\$primary-color, 0.25);
    }
  }
}

.task-listing-bid .task-offers {
  margin-bottom: 15px;
  /*  text-align: center;*/
  strong {
    display: block;
    color: \$body-heading-color;
    font-weight: 600;
    line-height: 24px;
  }
  span {
    display: block;
    color: #888;
    line-height: 24px;
  }
}

/* Task Tags */

.task-tags {
  display: block;
  margin: 23px 0 3px 0;
  span {
    transition: 0.3s;
    font-size: 14.7px;
    border-radius: \$global-border-radius;
    background-color: rgba(\$primary-color, 0.07);
    color: \$primary-color;
    display: inline-block;
    padding: 6px 15px;
    margin: 2px 0;
    line-height: 24px;
  }
}

/* Compact List */

.compact-list .task-listing {
  border-radius: 0;
  margin-bottom: 0;
  box-shadow: none;
  &:hover {
    transform: translateY(0);
  }
}

.tasks-list-container.compact-list {
  background-color: #fff;
  border-radius: \$global-border-radius;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
  .task-listing {
    align-items: center;
    justify-content: center;
    &:nth-child(2n) {
      background-color: #fafafa;
    }
  }
  .task-listing-bid {
    background-color: transparent;
  }
  .task-listing {
    &:hover:before {
      opacity: 1;
    }
    &:before {
      content: \"\";
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      display: block;
      background: \$primary-color;
      transition: 0.3s;
      opacity: 0;
    }
    &:last-of-type {
      border-radius: 0 0 3px 3px;
      overflow: hidden;
    }
    &:first-of-type {
      border-radius: 3px 3px 0 0;
      overflow: hidden;
    }
    .task-listing-details {
      padding-right: 0;
    }
  }
}

/* Section Styles */

.section {
  .task-listing-details, .task-listing-bid-inner {
    padding: 27px 35px;
  }
}

/* Media Queries for Tasks List */
@media (max-width: 1200px) {
  .task-listing-bid {
    flex: 0 0 220px;
  }
}

@media (min-width: 481px) and (max-width: 768px) {
  .task-listing-bid {
    flex: 1;
    padding: 10px 0;
  }
  .task-listing {
    flex-direction: column;
  }
  .task-listing-bid-inner {
    display: flex;
    margin: 20px 0 0 0;
  }
  .tasks-grid-layout .task-listing-bid-inner {
    margin: 0;
  }
  .task-listing-bid-inner {
    .task-offers {
      flex: 1;
    }
    .button {
      height: 100%;
      width: 30%;
    }
  }
  .tasks-list-container.compact-list .task-listing {
    .task-listing-details {
      padding-right: 35px;
      padding-bottom: 0;
    }
    .task-listing-bid {
      padding-bottom: 25px;
    }
  }
  .task-listing-bid-inner {
    width: 100%;
    padding: 0 35px;
  }
}

/* Small Mobile Sizes */
@media (max-width: 768px) {
  .section {
    .task-listing-details {
      padding: 25px 30px;
    }
    .task-listing-bid-inner {
      padding: 0 30px;
    }
  }
}

/* Small Mobile Sizes */
@media (max-width: 480px) {
  .task-listing-bid {
    flex: 1;
    padding: 30px 0;
  }
  .task-listing {
    flex-direction: column;
  }
  .task-listing-bid-inner {
    .task-offers {
      flex: 1;
    }
    .button {
      height: 100%;
      width: 100%;
    }
  }
  .tasks-list-container.compact-list .task-listing {
    .task-listing-details {
      padding-right: 35px;
      padding-bottom: 0;
    }
    .task-listing-bid {
      padding-bottom: 35px;
    }
  }
  .task-listing-bid-inner {
    width: 100%;
    padding: 0 35px;
  }
}", "@Publication/Front/sass/listings/_tasks-list-layout.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\listings\\_tasks-list-layout.scss");
    }
}
