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

/* @Publication/Front/sass/layout/_footer.scss */
class __TwigTemplate_4acfd3508dcf8247f62e1e498fcbed066fcd7feb5c13f36f2e89071ed9c396fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_footer.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_footer.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Footer
------------------------------------- */

#footer {
  background-color: #303030;
  color: #c0c0c0;
  p {
    line-height: \$body-sub-line-height;
  }
}

.footer-top-section {
  border-bottom: 1px solid #484848;
  .footer-logo img {
    max-height: 46px;
  }
}

.footer-rows-container {
  display: block;
  height: 96px;
  position: relative;
  z-index: 100;
}

.footer-row {
  display: inline-block;
  padding: 0 40px;
  border-right: 1px solid #484848;
  border-left: 1px solid #484848;
  float: left;
  height: 100%;
}

.footer-row-inner {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  &.footer-logo {
    position: relative;
    top: auto;
    transform: translateY(0);
    top: 50%;
    position: relative;
    height: 46px;
    img {
      position: relative;
      top: 50%;
    }
  }
}

.footer-row {
  &:first-child {
    padding-left: 0;
    border-left: none;
  }
  &:last-child {
    padding-right: 0;
    border: none;
  }
}

.footer-rows-right {
  .footer-row:first-child {
    padding-left: 40px;
    border-left: 1px solid #484848;
  }
  float: right;
  height: 100%;
}

/* Language Switcher */

.language-switcher.bootstrap-select {
  &.btn-group .dropdown-menu.inner {
    width: 100%;
  }
  &:before {
    display: none;
  }
  .dropdown-menu {
    padding-top: 15px;
    top: calc(100% + 15px);
    width: 160px;
    left: auto;
    right: 0;
    &:before {
      position: absolute;
      top: -5px;
      content: \"\";
      right: 20px;
      width: 0;
      height: 0;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-bottom: 5px solid #fff;
    }
  }
  &.btn-group {
    button {
      height: 44px;
      padding-right: 35px;
      padding-left: 18px;
      color: #fff;
      background-color: #444;
      transition: 0.3s;
      box-shadow: none;
    }
    .dropdown-toggle .filter-option {
      height: 44px;
      line-height: 44px;
    }
    button:hover {
      background-color: #fff;
      color: \$body-heading-color;
    }
    &.open button {
      background-color: \$primary-color;
      color: #fff;
    }
    button {
      &:hover {
        background-color: \$primary-color;
        color: #fff;
      }
      .caret {
        transition: 0.3s;
      }
    }
    &.open button .caret, button:hover .caret {
      border-top-color: #fff;
    }
    .dropdown-toggle .caret {
      right: 18px;
    }
  }
}

/* Social Icons */

.footer-social-links {
  list-style: none;
  margin: 0 -10px;
  margin-top: 3px;
  padding: 0;
  li {
    display: inline-block;
    padding: 0;
    margin: 0;
    float: left;
    a {
      font-size: 20px;
      padding: 0 10px;
      color: #fff;
      display: inline-block;
      transition: 0.3s;
      opacity: 0.5;
      transform: translate3d(0, -0.5px, 0);
      &:hover {
        opacity: 1;
      }
    }
  }
}

/* Middle Section */

.footer-middle-section {
  padding: 60px 0;
  position: relative;
  z-index: 10;
}

#footer {
  h3, h2 {
    font-size: 18px;
    color: #fff;
    margin: 0 0 15px 0;
    padding: 0;
    display: block;
  }
}

.footer-links h3 {
  font-size: 18px;
  color: #fff;
  margin: 0 0 15px 0;
  padding: 0;
  display: block;
}

#footer h3 i {
  position: relative;
  margin-right: 5px;
  top: 2px;
  font-size: 20px;
  font-weight: 400 !important;
}

.footer-links ul {
  list-style: none;
  text-align: left;
  margin: 0;
  padding: 0;
  li {
    margin-bottom: 0;
    display: block;
    &:first-child a {
      padding-top: 0;
    }
    &:last-child a {
      padding-bottom: 0;
    }
    a {
      color: #c0c0c0;
      display: block;
      line-height: 25px;
      position: relative;
      z-index: 100;
      padding: 4px 0;
      span {
        display: inline-block;
        position: relative;
      }
      &:hover {
        color: #fff;
      }
      span:before {
        content: \"\";
        position: absolute;
        left: 0;
        bottom: 0;
        background-color: \$primary-color;
        height: 2px;
        display: block;
        transition: all 0.25s, opacity 0.2s;
        z-index: -1;
        border-radius: 3px;
        opacity: 0.5;
        width: 0;
      }
      &:hover span:before {
        width: 100%;
        opacity: 1;
      }
    }
  }
}

/* Newsletter */

.newsletter {
  display: flex;
  margin-top: 20px;
  input, button {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
  }
  input {
    background: #262626;
    box-shadow: none;
    margin-bottom: 0;
    &:focus {
      box-shadow: none;
    }
  }
  button {
    background-color: \$primary-color;
    border-radius: \$global-border-radius;
    height: 48px;
    min-width: 48px;
    max-width: 48px;
    text-align: center;
    line-height: 48px;
    font-size: 18px;
    color: #fff;
    margin-left: 10px;
    transition: 0.3s;
    &:hover {
      background-color: #fff;
      color: \$body-heading-color;
    }
    i {
      width: 100%;
      line-height: 48px;
    }
  }
}

/* Copyrights */

.footer-bottom-section {
  padding: 25px 0;
  border-top: 1px solid #484848;
  text-align: center;
  strong {
    color: #fff;
    font-weight: 500;
  }
}

/* Footer Media Queries*/
@media (max-width: 992px) {
  #footer h3 {
    margin-top: 45px;
  }
  .footer-middle-section {
    padding-top: 0;
    padding-bottom: 45px;
  }
}

@media (max-width: 768px) {
  .content-left-offset, .content-right-offset {
    padding-left: 15px;
  }
  .footer-rows-container {
    height: auto;
    padding: 20px 0 40px 0;
  }
  .footer-rows-left, .footer-rows-right {
    float: none;
    height: auto;
  }
  .footer-row-inner {
    &.footer-logo {
      img {
        top: 0;
      }
      top: 0;
      position: relative;
      height: 46px;
    }
    position: relative;
    top: 0;
    transform: translateY(0);
  }
  #footer .footer-row {
    padding: 0;
    float: none;
    padding: 20px 0 0 0;
    display: block;
    width: 100%;
    border: none;
  }
  .footer-rows-container {
    .footer-rows-left, .footer-rows-right {
      display: block;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_footer.scss";
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
/* Footer
------------------------------------- */

#footer {
  background-color: #303030;
  color: #c0c0c0;
  p {
    line-height: \$body-sub-line-height;
  }
}

.footer-top-section {
  border-bottom: 1px solid #484848;
  .footer-logo img {
    max-height: 46px;
  }
}

.footer-rows-container {
  display: block;
  height: 96px;
  position: relative;
  z-index: 100;
}

.footer-row {
  display: inline-block;
  padding: 0 40px;
  border-right: 1px solid #484848;
  border-left: 1px solid #484848;
  float: left;
  height: 100%;
}

.footer-row-inner {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  &.footer-logo {
    position: relative;
    top: auto;
    transform: translateY(0);
    top: 50%;
    position: relative;
    height: 46px;
    img {
      position: relative;
      top: 50%;
    }
  }
}

.footer-row {
  &:first-child {
    padding-left: 0;
    border-left: none;
  }
  &:last-child {
    padding-right: 0;
    border: none;
  }
}

.footer-rows-right {
  .footer-row:first-child {
    padding-left: 40px;
    border-left: 1px solid #484848;
  }
  float: right;
  height: 100%;
}

/* Language Switcher */

.language-switcher.bootstrap-select {
  &.btn-group .dropdown-menu.inner {
    width: 100%;
  }
  &:before {
    display: none;
  }
  .dropdown-menu {
    padding-top: 15px;
    top: calc(100% + 15px);
    width: 160px;
    left: auto;
    right: 0;
    &:before {
      position: absolute;
      top: -5px;
      content: \"\";
      right: 20px;
      width: 0;
      height: 0;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-bottom: 5px solid #fff;
    }
  }
  &.btn-group {
    button {
      height: 44px;
      padding-right: 35px;
      padding-left: 18px;
      color: #fff;
      background-color: #444;
      transition: 0.3s;
      box-shadow: none;
    }
    .dropdown-toggle .filter-option {
      height: 44px;
      line-height: 44px;
    }
    button:hover {
      background-color: #fff;
      color: \$body-heading-color;
    }
    &.open button {
      background-color: \$primary-color;
      color: #fff;
    }
    button {
      &:hover {
        background-color: \$primary-color;
        color: #fff;
      }
      .caret {
        transition: 0.3s;
      }
    }
    &.open button .caret, button:hover .caret {
      border-top-color: #fff;
    }
    .dropdown-toggle .caret {
      right: 18px;
    }
  }
}

/* Social Icons */

.footer-social-links {
  list-style: none;
  margin: 0 -10px;
  margin-top: 3px;
  padding: 0;
  li {
    display: inline-block;
    padding: 0;
    margin: 0;
    float: left;
    a {
      font-size: 20px;
      padding: 0 10px;
      color: #fff;
      display: inline-block;
      transition: 0.3s;
      opacity: 0.5;
      transform: translate3d(0, -0.5px, 0);
      &:hover {
        opacity: 1;
      }
    }
  }
}

/* Middle Section */

.footer-middle-section {
  padding: 60px 0;
  position: relative;
  z-index: 10;
}

#footer {
  h3, h2 {
    font-size: 18px;
    color: #fff;
    margin: 0 0 15px 0;
    padding: 0;
    display: block;
  }
}

.footer-links h3 {
  font-size: 18px;
  color: #fff;
  margin: 0 0 15px 0;
  padding: 0;
  display: block;
}

#footer h3 i {
  position: relative;
  margin-right: 5px;
  top: 2px;
  font-size: 20px;
  font-weight: 400 !important;
}

.footer-links ul {
  list-style: none;
  text-align: left;
  margin: 0;
  padding: 0;
  li {
    margin-bottom: 0;
    display: block;
    &:first-child a {
      padding-top: 0;
    }
    &:last-child a {
      padding-bottom: 0;
    }
    a {
      color: #c0c0c0;
      display: block;
      line-height: 25px;
      position: relative;
      z-index: 100;
      padding: 4px 0;
      span {
        display: inline-block;
        position: relative;
      }
      &:hover {
        color: #fff;
      }
      span:before {
        content: \"\";
        position: absolute;
        left: 0;
        bottom: 0;
        background-color: \$primary-color;
        height: 2px;
        display: block;
        transition: all 0.25s, opacity 0.2s;
        z-index: -1;
        border-radius: 3px;
        opacity: 0.5;
        width: 0;
      }
      &:hover span:before {
        width: 100%;
        opacity: 1;
      }
    }
  }
}

/* Newsletter */

.newsletter {
  display: flex;
  margin-top: 20px;
  input, button {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
  }
  input {
    background: #262626;
    box-shadow: none;
    margin-bottom: 0;
    &:focus {
      box-shadow: none;
    }
  }
  button {
    background-color: \$primary-color;
    border-radius: \$global-border-radius;
    height: 48px;
    min-width: 48px;
    max-width: 48px;
    text-align: center;
    line-height: 48px;
    font-size: 18px;
    color: #fff;
    margin-left: 10px;
    transition: 0.3s;
    &:hover {
      background-color: #fff;
      color: \$body-heading-color;
    }
    i {
      width: 100%;
      line-height: 48px;
    }
  }
}

/* Copyrights */

.footer-bottom-section {
  padding: 25px 0;
  border-top: 1px solid #484848;
  text-align: center;
  strong {
    color: #fff;
    font-weight: 500;
  }
}

/* Footer Media Queries*/
@media (max-width: 992px) {
  #footer h3 {
    margin-top: 45px;
  }
  .footer-middle-section {
    padding-top: 0;
    padding-bottom: 45px;
  }
}

@media (max-width: 768px) {
  .content-left-offset, .content-right-offset {
    padding-left: 15px;
  }
  .footer-rows-container {
    height: auto;
    padding: 20px 0 40px 0;
  }
  .footer-rows-left, .footer-rows-right {
    float: none;
    height: auto;
  }
  .footer-row-inner {
    &.footer-logo {
      img {
        top: 0;
      }
      top: 0;
      position: relative;
      height: 46px;
    }
    position: relative;
    top: 0;
    transform: translateY(0);
  }
  #footer .footer-row {
    padding: 0;
    float: none;
    padding: 20px 0 0 0;
    display: block;
    width: 100%;
    border: none;
  }
  .footer-rows-container {
    .footer-rows-left, .footer-rows-right {
      display: block;
    }
  }
}", "@Publication/Front/sass/layout/_footer.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_footer.scss");
    }
}
