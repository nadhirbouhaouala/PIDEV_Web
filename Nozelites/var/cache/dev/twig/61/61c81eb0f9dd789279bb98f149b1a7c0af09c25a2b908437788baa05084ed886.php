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

/* @Publication/Front/sass/gui/_buttons.scss */
class __TwigTemplate_b5f9124056f32ae65efb9d99eaf9c73af76a836a161da69ce72ef0ff4a7ff843 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_buttons.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/gui/_buttons.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Buttons
------------------------------------- */

button {
  vertical-align: middle;
}

span.button, button.button {
  background-color: \$primary-color;
  top: 0;
  padding: 10px 20px;
  line-height: 24px;
  color: #fff;
  position: relative;
  font-size: \$body-font-size;
  font-weight: 500;
  display: inline-block;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  overflow: hidden;
  border: none;
  border-radius: \$global-border-radius;
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
}

input {
  &[type=\"button\"], &[type=\"submit\"] {
    background-color: \$primary-color;
    top: 0;
    padding: 10px 20px;
    line-height: 24px;
    color: #fff;
    position: relative;
    font-size: \$body-font-size;
    font-weight: 500;
    display: inline-block;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    overflow: hidden;
    border: none;
    border-radius: \$global-border-radius;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
  }
}

a.button {
  background-color: \$primary-color;
  top: 0;
  padding: 10px 20px;
  line-height: 24px;
  color: #fff;
  position: relative;
  font-size: \$body-font-size;
  font-weight: 500;
  display: inline-block;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  overflow: hidden;
  border: none;
  border-radius: \$global-border-radius;
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
}

/* Icons Aligment*/

.button i[class^=\"icon-material\"], button.button i[class^=\"icon-material\"] {
  font-size: 18px;
  height: 0;
  width: 18px;
  line-height: 0;
  top: 2px;
  position: relative;
  display: inline-block;
  margin-left: 3px;
}

input {
  &[type=\"button\"] i[class^=\"icon-material\"], &[type=\"submit\"] i[class^=\"icon-material\"] {
    font-size: 18px;
    height: 0;
    width: 18px;
    line-height: 0;
    top: 2px;
    position: relative;
    display: inline-block;
    margin-left: 3px;
  }
}

a.button i[class^=\"icon-material\"] {
  font-size: 18px;
  height: 0;
  width: 18px;
  line-height: 0;
  top: 2px;
  position: relative;
  display: inline-block;
  margin-left: 3px;
}

.button i[class^=\"icon-feather\"], button.button i[class^=\"icon-feather\"] {
  font-size: \$body-font-size;
  height: 0;
  width: 16px;
  line-height: 0;
  top: 2px;
  position: relative;
  display: inline-block;
  margin-left: 3px;
}

input {
  &[type=\"button\"] i[class^=\"icon-feather\"], &[type=\"submit\"] i[class^=\"icon-feather\"] {
    font-size: \$body-font-size;
    height: 0;
    width: 16px;
    line-height: 0;
    top: 2px;
    position: relative;
    display: inline-block;
    margin-left: 3px;
  }
}

a.button i[class^=\"icon-feather\"] {
  font-size: \$body-font-size;
  height: 0;
  width: 16px;
  line-height: 0;
  top: 2px;
  position: relative;
  display: inline-block;
  margin-left: 3px;
}

/* Dark Style */

button.button.dark {
  background-color: #333;
  color: #fff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

input {
  &[type=\"button\"].dark, &[type=\"submit\"].dark {
    background-color: #333;
    color: #fff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }
}

a.button.dark {
  background-color: #333;
  color: #fff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Dark Style */

button.button.gray {
  background-color: #eaeaea;
  color: \$body-font-color;
  box-shadow: none;
}

input {
  &[type=\"button\"].gray, &[type=\"submit\"].gray {
    background-color: #eaeaea;
    color: \$body-font-color;
    box-shadow: none;
  }
}

a.button.gray {
  background-color: #eaeaea;
  color: \$body-font-color;
  box-shadow: none;
}

button.button.gray:hover {
  background-color: #e0e0e0;
}

input {
  &[type=\"button\"].gray:hover, &[type=\"submit\"].gray:hover {
    background-color: #e0e0e0;
  }
}

a.button.gray:hover {
  background-color: #e0e0e0;
}

body .button i.icon-material-outline-arrow-right-alt {
  font-size: 22px;
  top: 4px;
}

.button {
  &.full-width {
    max-width: 100%;
    width: 100%;
    text-align: center;
    display: block;
  }
  &.big {
    font-size: 18px;
    padding: 13px 22px;
  }
}

body .button.big i {
  font-size: 22px;
  top: 3px;
  position: relative;
}

/* Slide Out Button */

.button.button-slide-out {
  span {
    transform: translateY(0px);
    opacity: 1;
    transition: 0.3s;
  }
  &:hover span {
    transform: translateY(-10px);
    opacity: 0;
    display: inline-block;
    transition: 0.3s;
  }
  i {
    transform: translateY(calc(-50% + 10px));
    opacity: 0;
    display: inline-block;
    transition: 0.3s;
    position: absolute;
    left: 0;
    right: 0;
    font-size: 18px;
    top: 50%;
    height: 20px;
  }
  &:hover i {
    transform: translateY(calc(-50% + 0px));
    opacity: 1;
  }
}

/* Move on Hover */

.move-on-hover {
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.1);
  transform: translateY(0);
  transition: 0.3s;
  &:hover {
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.2);
    transform: translateY(-2px);
  }
}

/* Centered Button */

.centered-button {
  text-align: center;
  display: block;
  .button {
    margin: 0 auto;
  }
}

/* Bookmark Button */

span.bookmark-icon {
  font-size: 20px;
  position: absolute;
  z-index: 101;
  right: 35px;
  top: 35px;
  cursor: pointer;
  background-color: #eee;
  color: #c0c0c0;
  display: block;
  height: 39px;
  width: 39px;
  border-radius: 50%;
  transition: all 0.4s;
  line-height: \$body-line-height;
}

.bookmark-icon {
  &.bookmarked {
    animation: bookmarked-shadow 0.3s;
  }
  &:before {
    transition: transform 0.4s cubic-bezier(0.8, -0.41, 0.19, 2.5);
    font-family: \"Material-Icons\";
    position: absolute;
    right: 0;
    left: 0;
    text-align: center;
    top: 6px;
    content: \"\\e988\";
  }
  &:hover {
    background-color: #333;
    color: #fff;
  }
  &.bookmarked {
    background-color: #feb342;
    color: #fff;
    &:before {
      animation: bookmark-icon 0.5s;
    }
  }
}

@keyframes bookmarked-shadow {
  0% {
    box-shadow: 0 0 0 0 rgba(254, 179, 66, 0.8);
  }

  100% {
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  }
}


@keyframes bookmark-icon {
  0% {
    -webkit-transform: scale(0.8);
    transform: scale(0.8);
  }

  50% {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }

  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}


/* Bookmark Button */

.bookmark-button {
  background-color: #404040;
  display: inline-block;
  padding: 0;
  position: relative;
  height: 44px;
  line-height: 44px;
  color: #fff;
  padding: 0 15px;
  padding-left: 59px;
  border-radius: \$global-border-radius;
  transition: 0.4s;
  cursor: pointer;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
  .bookmark-icon, &:hover .bookmark-icon {
    background-color: rgba(255, 255, 255, 0.05);
  }
  .bookmark-icon {
    border-radius: \$global-border-radius;
    position: absolute;
    left: 0;
    right: auto;
    top: auto;
    height: 44px;
    width: 44px;
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
    pointer-events: none;
    transition: 0.4s;
    animation: none;
    &:before {
      top: 8px;
      color: #fff;
      transition: 0.4s;
      font-size: 18px;
    }
  }
  &.bookmarked {
    background-color: #feb342;
    color: #fff;
    box-shadow: 0 3px 12px rgba(254, 179, 66, 0.2);
    .bookmark-icon:before {
      color: #fff;
    }
  }
  &:hover .bookmark-icon:before {
    color: #fff;
  }
  &.bookmarked {
    .bookmark-icon, &:hover .bookmark-icon {
      background-color: rgba(255, 255, 255, 0.16);
    }
    .bookmarked-text {
      display: block;
    }
  }
  .bookmark-text {
    display: block;
  }
  &.bookmarked .bookmark-text, .bookmarked-text {
    display: none;
  }
}

/* ---------------------------------- */
/* Button with sliding icon
------------------------------------- */

.button-sliding-icon {
  text-align: center;
  i {
    opacity: 0;
    max-width: 0;
    transition: 0.25s;
    display: inline-block;
    transform: translateX(-20px);
  }
  &:hover i {
    max-width: 20px;
    opacity: 1;
    transform: translateX(0);
  }
}

/* For buttons */

.button.button-sliding-icon {
  padding-left: 20px;
  padding-right: 10px;
  &:hover {
    padding-right: 20px;
  }
  i {
    padding-right: 5px;
  }
  &:hover i {
    max-width: 20px;
    opacity: 1;
    transform: translateX(0);
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/gui/_buttons.scss";
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
/* Buttons
------------------------------------- */

button {
  vertical-align: middle;
}

span.button, button.button {
  background-color: \$primary-color;
  top: 0;
  padding: 10px 20px;
  line-height: 24px;
  color: #fff;
  position: relative;
  font-size: \$body-font-size;
  font-weight: 500;
  display: inline-block;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  overflow: hidden;
  border: none;
  border-radius: \$global-border-radius;
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
}

input {
  &[type=\"button\"], &[type=\"submit\"] {
    background-color: \$primary-color;
    top: 0;
    padding: 10px 20px;
    line-height: 24px;
    color: #fff;
    position: relative;
    font-size: \$body-font-size;
    font-weight: 500;
    display: inline-block;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    overflow: hidden;
    border: none;
    border-radius: \$global-border-radius;
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
  }
}

a.button {
  background-color: \$primary-color;
  top: 0;
  padding: 10px 20px;
  line-height: 24px;
  color: #fff;
  position: relative;
  font-size: \$body-font-size;
  font-weight: 500;
  display: inline-block;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  overflow: hidden;
  border: none;
  border-radius: \$global-border-radius;
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.15);
}

/* Icons Aligment*/

.button i[class^=\"icon-material\"], button.button i[class^=\"icon-material\"] {
  font-size: 18px;
  height: 0;
  width: 18px;
  line-height: 0;
  top: 2px;
  position: relative;
  display: inline-block;
  margin-left: 3px;
}

input {
  &[type=\"button\"] i[class^=\"icon-material\"], &[type=\"submit\"] i[class^=\"icon-material\"] {
    font-size: 18px;
    height: 0;
    width: 18px;
    line-height: 0;
    top: 2px;
    position: relative;
    display: inline-block;
    margin-left: 3px;
  }
}

a.button i[class^=\"icon-material\"] {
  font-size: 18px;
  height: 0;
  width: 18px;
  line-height: 0;
  top: 2px;
  position: relative;
  display: inline-block;
  margin-left: 3px;
}

.button i[class^=\"icon-feather\"], button.button i[class^=\"icon-feather\"] {
  font-size: \$body-font-size;
  height: 0;
  width: 16px;
  line-height: 0;
  top: 2px;
  position: relative;
  display: inline-block;
  margin-left: 3px;
}

input {
  &[type=\"button\"] i[class^=\"icon-feather\"], &[type=\"submit\"] i[class^=\"icon-feather\"] {
    font-size: \$body-font-size;
    height: 0;
    width: 16px;
    line-height: 0;
    top: 2px;
    position: relative;
    display: inline-block;
    margin-left: 3px;
  }
}

a.button i[class^=\"icon-feather\"] {
  font-size: \$body-font-size;
  height: 0;
  width: 16px;
  line-height: 0;
  top: 2px;
  position: relative;
  display: inline-block;
  margin-left: 3px;
}

/* Dark Style */

button.button.dark {
  background-color: #333;
  color: #fff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

input {
  &[type=\"button\"].dark, &[type=\"submit\"].dark {
    background-color: #333;
    color: #fff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }
}

a.button.dark {
  background-color: #333;
  color: #fff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Dark Style */

button.button.gray {
  background-color: #eaeaea;
  color: \$body-font-color;
  box-shadow: none;
}

input {
  &[type=\"button\"].gray, &[type=\"submit\"].gray {
    background-color: #eaeaea;
    color: \$body-font-color;
    box-shadow: none;
  }
}

a.button.gray {
  background-color: #eaeaea;
  color: \$body-font-color;
  box-shadow: none;
}

button.button.gray:hover {
  background-color: #e0e0e0;
}

input {
  &[type=\"button\"].gray:hover, &[type=\"submit\"].gray:hover {
    background-color: #e0e0e0;
  }
}

a.button.gray:hover {
  background-color: #e0e0e0;
}

body .button i.icon-material-outline-arrow-right-alt {
  font-size: 22px;
  top: 4px;
}

.button {
  &.full-width {
    max-width: 100%;
    width: 100%;
    text-align: center;
    display: block;
  }
  &.big {
    font-size: 18px;
    padding: 13px 22px;
  }
}

body .button.big i {
  font-size: 22px;
  top: 3px;
  position: relative;
}

/* Slide Out Button */

.button.button-slide-out {
  span {
    transform: translateY(0px);
    opacity: 1;
    transition: 0.3s;
  }
  &:hover span {
    transform: translateY(-10px);
    opacity: 0;
    display: inline-block;
    transition: 0.3s;
  }
  i {
    transform: translateY(calc(-50% + 10px));
    opacity: 0;
    display: inline-block;
    transition: 0.3s;
    position: absolute;
    left: 0;
    right: 0;
    font-size: 18px;
    top: 50%;
    height: 20px;
  }
  &:hover i {
    transform: translateY(calc(-50% + 0px));
    opacity: 1;
  }
}

/* Move on Hover */

.move-on-hover {
  box-shadow: 0 4px 12px rgba(\$primary-color, 0.1);
  transform: translateY(0);
  transition: 0.3s;
  &:hover {
    box-shadow: 0 4px 12px rgba(\$primary-color, 0.2);
    transform: translateY(-2px);
  }
}

/* Centered Button */

.centered-button {
  text-align: center;
  display: block;
  .button {
    margin: 0 auto;
  }
}

/* Bookmark Button */

span.bookmark-icon {
  font-size: 20px;
  position: absolute;
  z-index: 101;
  right: 35px;
  top: 35px;
  cursor: pointer;
  background-color: #eee;
  color: #c0c0c0;
  display: block;
  height: 39px;
  width: 39px;
  border-radius: 50%;
  transition: all 0.4s;
  line-height: \$body-line-height;
}

.bookmark-icon {
  &.bookmarked {
    animation: bookmarked-shadow 0.3s;
  }
  &:before {
    transition: transform 0.4s cubic-bezier(0.8, -0.41, 0.19, 2.5);
    font-family: \"Material-Icons\";
    position: absolute;
    right: 0;
    left: 0;
    text-align: center;
    top: 6px;
    content: \"\\e988\";
  }
  &:hover {
    background-color: #333;
    color: #fff;
  }
  &.bookmarked {
    background-color: #feb342;
    color: #fff;
    &:before {
      animation: bookmark-icon 0.5s;
    }
  }
}

@keyframes bookmarked-shadow {
  0% {
    box-shadow: 0 0 0 0 rgba(254, 179, 66, 0.8);
  }

  100% {
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  }
}


@keyframes bookmark-icon {
  0% {
    -webkit-transform: scale(0.8);
    transform: scale(0.8);
  }

  50% {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }

  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}


/* Bookmark Button */

.bookmark-button {
  background-color: #404040;
  display: inline-block;
  padding: 0;
  position: relative;
  height: 44px;
  line-height: 44px;
  color: #fff;
  padding: 0 15px;
  padding-left: 59px;
  border-radius: \$global-border-radius;
  transition: 0.4s;
  cursor: pointer;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
  .bookmark-icon, &:hover .bookmark-icon {
    background-color: rgba(255, 255, 255, 0.05);
  }
  .bookmark-icon {
    border-radius: \$global-border-radius;
    position: absolute;
    left: 0;
    right: auto;
    top: auto;
    height: 44px;
    width: 44px;
    border-radius: \$global-border-radius 0 0 \$global-border-radius;;
    pointer-events: none;
    transition: 0.4s;
    animation: none;
    &:before {
      top: 8px;
      color: #fff;
      transition: 0.4s;
      font-size: 18px;
    }
  }
  &.bookmarked {
    background-color: #feb342;
    color: #fff;
    box-shadow: 0 3px 12px rgba(254, 179, 66, 0.2);
    .bookmark-icon:before {
      color: #fff;
    }
  }
  &:hover .bookmark-icon:before {
    color: #fff;
  }
  &.bookmarked {
    .bookmark-icon, &:hover .bookmark-icon {
      background-color: rgba(255, 255, 255, 0.16);
    }
    .bookmarked-text {
      display: block;
    }
  }
  .bookmark-text {
    display: block;
  }
  &.bookmarked .bookmark-text, .bookmarked-text {
    display: none;
  }
}

/* ---------------------------------- */
/* Button with sliding icon
------------------------------------- */

.button-sliding-icon {
  text-align: center;
  i {
    opacity: 0;
    max-width: 0;
    transition: 0.25s;
    display: inline-block;
    transform: translateX(-20px);
  }
  &:hover i {
    max-width: 20px;
    opacity: 1;
    transform: translateX(0);
  }
}

/* For buttons */

.button.button-sliding-icon {
  padding-left: 20px;
  padding-right: 10px;
  &:hover {
    padding-right: 20px;
  }
  i {
    padding-right: 5px;
  }
  &:hover i {
    max-width: 20px;
    opacity: 1;
    transform: translateX(0);
  }
}", "@Publication/Front/sass/gui/_buttons.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\gui\\_buttons.scss");
    }
}
