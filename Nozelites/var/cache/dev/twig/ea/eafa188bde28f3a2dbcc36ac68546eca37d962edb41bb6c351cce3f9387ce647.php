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

/* @Publication/Front/sass/dashboard/_dashboard-messages.scss */
class __TwigTemplate_5423c7d2df46dfb0e3eb88794f219bfff71060ea46e89b98c76263e354f4d879 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/dashboard/_dashboard-messages.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/dashboard/_dashboard-messages.scss"));

        // line 1
        echo "
/* ---------------------------------- */
/* Dashboard Messages
------------------------------------- */

.messages-container {
  margin: 0;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.06);
  border-radius: \$global-border-radius;
  background-color: #fff;
}

/* Scrollbar Adjustments */
.messages-inbox ul {
  max-height: 875px;
}

.message-content-inner {
  max-height: 750px;
}

.message-content, .messages-container-inner .messages-inbox {
  overflow: hidden;
}

.message-content-inner, .messages-container-inner .messages-inbox ul {
  overflow-y: scroll;
  width: calc(100% + 18px);
}

.message-content-inner::-webkit-scrollbar, .messages-container-inner .messages-inbox ul::-webkit-scrollbar {
  width: 17px;
}

/*  Scrollbar Hide - End */

.messages-headline {
  max-height: 82px;
  font-size: \$body-font-size;
  margin: 0;
  padding: 22px 30px;
  color: \$body-heading-color;
  background-color: #fff;
  display: block;
  border-bottom: 1px solid #eaeaea;
  border-radius: \$global-border-radius \$global-border-radius 0 0;
  position: relative;
  input {
    background-color: #f6f6f6;
    box-shadow: none;
    height: 38px;
    padding: 14px;
    font-size: 14px;
    margin: 0;
    &:focus {
      box-shadow: none;
    }
  }
  .input-with-icon i {
    font-size: 18px;
    right: 14px;
  }
  h4 {
    font-size: \$body-font-size;
    color: \$body-heading-color;
    padding: 6px 0;
    margin: 0;
    font-weight: 600;
    display: inline-block;
  }
}

.message-action {
  border-radius: 50px;
  font-size: 13px;
  color: \$body-font-color;
  font-weight: 500;
  display: inline-block;
  transition: 0.3s;
  color: \$body-font-color;
  padding: 0;
  position: absolute;
  top: 50%;
  right: 30px;
  transform: translateY(-50%);
  i {
    font-size: 14px;
    position: relative;
    top: 1px;
    margin-right: 1px;
  }
  &:hover {
    color: #ee3535;
  }
}

/* List */
.messages-inbox ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.message-avatar img {
  display: inline-block;
  width: 54px;
  height: 54px;
  border-radius: 50%;
}

.messages-inbox {
  ul li {
    a {
      position: relative;
      display: block;
      padding: 30px;
    }
    transition: 0.2s;
    position: relative;
    &:nth-child(2n) {
      background-color: #fafafa;
    }
    &:last-child {
      border-bottom: none;
    }
    &.active-message {
      background-color: #fafafa;
    }
    &:before {
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      background-color: \$primary-color;
      display: block;
      content: \"\";
      opacity: 0;
      transition: 0.3s;
    }
    &:hover:before, &.active-message:before {
      opacity: 1;
    }
  }
  .message-avatar {
    position: absolute;
    left: 30px;
    top: 50%;
    transform: translateY(-50%);
  }
  .message-by {
    margin-left: 85px;
    font-size: 15px;
    color: \$body-font-color;
    p {
      margin: 0;
      padding: 0;
      line-height: 25px;
      font-size: 15px;
    }
  }
}

.message-by-headline {
  h5 {
    display: inline-block;
  }
  span {
    display: inline-block;
    float: right;
    color: #888;
    font-size: 14px;
  }
  h5 {
    font-weight: 600;
    color: \$body-heading-color;
    margin: 0 0 7px 0;
    padding: 0;
  }
  &:after {
    content: \".\";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
  }
}

.message-by h5 i {
  background-color: \$primary-color;
  border-radius: \$global-border-radius;
  line-height: 20px;
  font-size: 12px;
  color: #fff;
  font-style: normal;
  padding: 3px 8px;
  margin-left: 3px;
}

/* Single Message */

.messages-container-inner {
  display: flex;
  .messages-inbox, .message-content {
    flex: 1;
  }
  .message-content-inner {
    padding: 30px;
    padding-bottom: 0;
    flex-grow: 1;
  }
  .message-content {
    display: flex;
    flex-direction: column;
  }
  .messages-inbox {
    max-width: 340px;
    border-right: 1px solid #eaeaea;
    ul li a {
      padding: 25px;
    }
    .message-by p {
      height: 26px;
      max-width: 205px;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
      font-size: 14px;
      color: #888;
    }
  }
  .message-avatar img {
    width: 40px;
    height: 40px;
  }
  .messages-inbox {
    .message-avatar {
      left: 25px;
    }
    .message-by {
      margin-left: 60px;
    }
  }
  .message-by-headline {
    h5 {
      font-size: 14px;
      margin-bottom: 3px;
      max-width: 160px;
      line-height: 23px;
    }
    span {
      font-size: 13px;
      position: absolute;
      top: 25px;
      right: 25px;
    }
  }
}

/* Message Bubbles */

.message-bubble {
  display: block;
  position: relative;
  margin-bottom: 25px;
  .message-avatar {
    position: absolute;
    left: 0;
    top: 0;
    img {
      width: 50px;
      height: 50px;
    }
  }
  .message-text {
    margin-left: 70px;
    background-color: #f4f4f4;
    border-radius: \$global-border-radius;
    padding: 12px 18px;
    position: relative;
    display: inline-block;
    float: left;
    line-height: 25px;
  }
  &.me .message-text {
    float: right;
  }
  .message-text p {
    font-size: 15px;
    padding: 0;
    margin: 0;
    line-height: 25px;
  }
  &.me {
    .message-avatar {
      left: auto;
      right: 0;
    }
    .message-text {
      margin-left: 0;
      margin-right: 70px;
      background-color: \$primary-color;
      color: #fff;
      position: relative;
    }
  }
  .message-text:before {
    content: \"\";
    width: 0;
    height: 0;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-right: 6px solid #f4f4f4;
    left: -6px;
    right: auto;
    top: 19px;
    position: absolute;
  }
  /* Message Bubble \"me\" */
  &.me .message-text:before {
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-left: 6px solid \$primary-color;
    border-right: none;
    right: -6px;
    left: auto;
  }
}


/* Message Time Sign */

.message-time-sign {
  text-align: center;
  display: block;
  position: relative;
  margin-bottom: 25px;
  &:before {
    content: \"\";
    height: 1px;
    background-color: #eaeaea;
    display: block;
    max-width: 30%;
    margin: 0 auto;
    position: relative;
    top: 14px;
    z-index: 10;
  }
  span {
    background-color: #fff;
    font-size: 14px;
    color: #888;
    z-index: 11;
    position: relative;
    padding: 0 10px;
  }
}

/* Reply */

.message-reply {
  border-top: 1px solid #eaeaea;
  padding: 30px;
  display: flex;
  align-items: flex-start;
  margin-top: 15px;
  textarea {
    min-width: auto;
    height: 48px;
    min-height: 48px;
    padding: 10px 0;
    margin: 0 15px 0 0;
    flex: 1;
    font-size: 15px;
    font-weight: 400;
    line-height: \$body-sub-line-height;
    box-shadow: none;
    border: none;
    box-sizing: border-box;
    resize: none;
  }
  button {
    border-radius: \$global-border-radius;
    flex: auto;
    flex-grow: 0;
    height: 44px;
    text-align: center;
    align-self: center;
    padding: 0 25px;
  }
  i {
    padding: 0;
    margin: 0;
  }
}

/* Typing Indicastor */

.typing-indicator {
  width: auto;
  height: 24px;
  padding-top: 8px;
  span {
    height: 8px;
    width: 8px;
    float: left;
    margin: 0 1px;
    background-color: #a0a0a0;
    display: block;
    border-radius: 50%;
    opacity: 0.4;
    &:nth-of-type(1) {
      animation: 1s blink infinite 0.33333s;
    }
    &:nth-of-type(2) {
      animation: 1s blink infinite 0.66666s;
    }
    &:nth-of-type(3) {
      animation: 1s blink infinite 0.99999s;
    }
  }
}

@keyframes blink {
  50% {
    opacity: 1;
  }
}


/* Messages Media Queries */
@media (max-width: 992px) {
  .messages-container-inner .messages-inbox {
    max-width: 300px;
  }
}

@media (max-width: 768px) {
  .messages-container-inner {
    display: block;
    .messages-inbox {
      max-width: 100%;
      border-bottom: 1px solid #e4e4e4;
      border-right: none;
    }
  }
  .messages-inbox ul {
    max-height: 500px;
  }
  .messages-container-inner .message-by-headline span {
    position: relative;
    top: 0;
    right: 0;
    display: block;
    float: none;
    padding: 0;
    margin: -4px 0 0 0;
  }
  .message-action {
    display: block;
    position: relative;
    right: 0;
    top: 0;
    transform: none;
    margin-top: -5px;
  }
  .messages-headline {
    max-height: 120px;
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/dashboard/_dashboard-messages.scss";
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
/* Dashboard Messages
------------------------------------- */

.messages-container {
  margin: 0;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.06);
  border-radius: \$global-border-radius;
  background-color: #fff;
}

/* Scrollbar Adjustments */
.messages-inbox ul {
  max-height: 875px;
}

.message-content-inner {
  max-height: 750px;
}

.message-content, .messages-container-inner .messages-inbox {
  overflow: hidden;
}

.message-content-inner, .messages-container-inner .messages-inbox ul {
  overflow-y: scroll;
  width: calc(100% + 18px);
}

.message-content-inner::-webkit-scrollbar, .messages-container-inner .messages-inbox ul::-webkit-scrollbar {
  width: 17px;
}

/*  Scrollbar Hide - End */

.messages-headline {
  max-height: 82px;
  font-size: \$body-font-size;
  margin: 0;
  padding: 22px 30px;
  color: \$body-heading-color;
  background-color: #fff;
  display: block;
  border-bottom: 1px solid #eaeaea;
  border-radius: \$global-border-radius \$global-border-radius 0 0;
  position: relative;
  input {
    background-color: #f6f6f6;
    box-shadow: none;
    height: 38px;
    padding: 14px;
    font-size: 14px;
    margin: 0;
    &:focus {
      box-shadow: none;
    }
  }
  .input-with-icon i {
    font-size: 18px;
    right: 14px;
  }
  h4 {
    font-size: \$body-font-size;
    color: \$body-heading-color;
    padding: 6px 0;
    margin: 0;
    font-weight: 600;
    display: inline-block;
  }
}

.message-action {
  border-radius: 50px;
  font-size: 13px;
  color: \$body-font-color;
  font-weight: 500;
  display: inline-block;
  transition: 0.3s;
  color: \$body-font-color;
  padding: 0;
  position: absolute;
  top: 50%;
  right: 30px;
  transform: translateY(-50%);
  i {
    font-size: 14px;
    position: relative;
    top: 1px;
    margin-right: 1px;
  }
  &:hover {
    color: #ee3535;
  }
}

/* List */
.messages-inbox ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.message-avatar img {
  display: inline-block;
  width: 54px;
  height: 54px;
  border-radius: 50%;
}

.messages-inbox {
  ul li {
    a {
      position: relative;
      display: block;
      padding: 30px;
    }
    transition: 0.2s;
    position: relative;
    &:nth-child(2n) {
      background-color: #fafafa;
    }
    &:last-child {
      border-bottom: none;
    }
    &.active-message {
      background-color: #fafafa;
    }
    &:before {
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      background-color: \$primary-color;
      display: block;
      content: \"\";
      opacity: 0;
      transition: 0.3s;
    }
    &:hover:before, &.active-message:before {
      opacity: 1;
    }
  }
  .message-avatar {
    position: absolute;
    left: 30px;
    top: 50%;
    transform: translateY(-50%);
  }
  .message-by {
    margin-left: 85px;
    font-size: 15px;
    color: \$body-font-color;
    p {
      margin: 0;
      padding: 0;
      line-height: 25px;
      font-size: 15px;
    }
  }
}

.message-by-headline {
  h5 {
    display: inline-block;
  }
  span {
    display: inline-block;
    float: right;
    color: #888;
    font-size: 14px;
  }
  h5 {
    font-weight: 600;
    color: \$body-heading-color;
    margin: 0 0 7px 0;
    padding: 0;
  }
  &:after {
    content: \".\";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
  }
}

.message-by h5 i {
  background-color: \$primary-color;
  border-radius: \$global-border-radius;
  line-height: 20px;
  font-size: 12px;
  color: #fff;
  font-style: normal;
  padding: 3px 8px;
  margin-left: 3px;
}

/* Single Message */

.messages-container-inner {
  display: flex;
  .messages-inbox, .message-content {
    flex: 1;
  }
  .message-content-inner {
    padding: 30px;
    padding-bottom: 0;
    flex-grow: 1;
  }
  .message-content {
    display: flex;
    flex-direction: column;
  }
  .messages-inbox {
    max-width: 340px;
    border-right: 1px solid #eaeaea;
    ul li a {
      padding: 25px;
    }
    .message-by p {
      height: 26px;
      max-width: 205px;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
      font-size: 14px;
      color: #888;
    }
  }
  .message-avatar img {
    width: 40px;
    height: 40px;
  }
  .messages-inbox {
    .message-avatar {
      left: 25px;
    }
    .message-by {
      margin-left: 60px;
    }
  }
  .message-by-headline {
    h5 {
      font-size: 14px;
      margin-bottom: 3px;
      max-width: 160px;
      line-height: 23px;
    }
    span {
      font-size: 13px;
      position: absolute;
      top: 25px;
      right: 25px;
    }
  }
}

/* Message Bubbles */

.message-bubble {
  display: block;
  position: relative;
  margin-bottom: 25px;
  .message-avatar {
    position: absolute;
    left: 0;
    top: 0;
    img {
      width: 50px;
      height: 50px;
    }
  }
  .message-text {
    margin-left: 70px;
    background-color: #f4f4f4;
    border-radius: \$global-border-radius;
    padding: 12px 18px;
    position: relative;
    display: inline-block;
    float: left;
    line-height: 25px;
  }
  &.me .message-text {
    float: right;
  }
  .message-text p {
    font-size: 15px;
    padding: 0;
    margin: 0;
    line-height: 25px;
  }
  &.me {
    .message-avatar {
      left: auto;
      right: 0;
    }
    .message-text {
      margin-left: 0;
      margin-right: 70px;
      background-color: \$primary-color;
      color: #fff;
      position: relative;
    }
  }
  .message-text:before {
    content: \"\";
    width: 0;
    height: 0;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-right: 6px solid #f4f4f4;
    left: -6px;
    right: auto;
    top: 19px;
    position: absolute;
  }
  /* Message Bubble \"me\" */
  &.me .message-text:before {
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-left: 6px solid \$primary-color;
    border-right: none;
    right: -6px;
    left: auto;
  }
}


/* Message Time Sign */

.message-time-sign {
  text-align: center;
  display: block;
  position: relative;
  margin-bottom: 25px;
  &:before {
    content: \"\";
    height: 1px;
    background-color: #eaeaea;
    display: block;
    max-width: 30%;
    margin: 0 auto;
    position: relative;
    top: 14px;
    z-index: 10;
  }
  span {
    background-color: #fff;
    font-size: 14px;
    color: #888;
    z-index: 11;
    position: relative;
    padding: 0 10px;
  }
}

/* Reply */

.message-reply {
  border-top: 1px solid #eaeaea;
  padding: 30px;
  display: flex;
  align-items: flex-start;
  margin-top: 15px;
  textarea {
    min-width: auto;
    height: 48px;
    min-height: 48px;
    padding: 10px 0;
    margin: 0 15px 0 0;
    flex: 1;
    font-size: 15px;
    font-weight: 400;
    line-height: \$body-sub-line-height;
    box-shadow: none;
    border: none;
    box-sizing: border-box;
    resize: none;
  }
  button {
    border-radius: \$global-border-radius;
    flex: auto;
    flex-grow: 0;
    height: 44px;
    text-align: center;
    align-self: center;
    padding: 0 25px;
  }
  i {
    padding: 0;
    margin: 0;
  }
}

/* Typing Indicastor */

.typing-indicator {
  width: auto;
  height: 24px;
  padding-top: 8px;
  span {
    height: 8px;
    width: 8px;
    float: left;
    margin: 0 1px;
    background-color: #a0a0a0;
    display: block;
    border-radius: 50%;
    opacity: 0.4;
    &:nth-of-type(1) {
      animation: 1s blink infinite 0.33333s;
    }
    &:nth-of-type(2) {
      animation: 1s blink infinite 0.66666s;
    }
    &:nth-of-type(3) {
      animation: 1s blink infinite 0.99999s;
    }
  }
}

@keyframes blink {
  50% {
    opacity: 1;
  }
}


/* Messages Media Queries */
@media (max-width: 992px) {
  .messages-container-inner .messages-inbox {
    max-width: 300px;
  }
}

@media (max-width: 768px) {
  .messages-container-inner {
    display: block;
    .messages-inbox {
      max-width: 100%;
      border-bottom: 1px solid #e4e4e4;
      border-right: none;
    }
  }
  .messages-inbox ul {
    max-height: 500px;
  }
  .messages-container-inner .message-by-headline span {
    position: relative;
    top: 0;
    right: 0;
    display: block;
    float: none;
    padding: 0;
    margin: -4px 0 0 0;
  }
  .message-action {
    display: block;
    position: relative;
    right: 0;
    top: 0;
    transform: none;
    margin-top: -5px;
  }
  .messages-headline {
    max-height: 120px;
  }
}", "@Publication/Front/sass/dashboard/_dashboard-messages.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\dashboard\\_dashboard-messages.scss");
    }
}
