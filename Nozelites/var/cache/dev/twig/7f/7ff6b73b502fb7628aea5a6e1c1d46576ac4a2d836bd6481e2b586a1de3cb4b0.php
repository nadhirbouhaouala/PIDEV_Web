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

/* @Publication/Front/sass/layout/_blog.scss */
class __TwigTemplate_a0b06e729a1e5cdff678cc9e7aa77a2421dbd22f981fbe33b0435c9d3eba2fee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_blog.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/layout/_blog.scss"));

        // line 1
        echo "/* ---------------------------------- */
/* Blog
------------------------------------- */

.blog-post {
  display: flex;
  background: #fff;
  margin-bottom: 35px;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
  border-radius: \$global-border-radius;
  overflow: hidden;
  transition: 0.3s;
  &:hover {
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
  }
}

.blog-post-thumbnail {
  flex: 0 0 auto;
  max-width: none;
  max-height: 100%;
  overflow: hidden;
  position: relative;
  width: 260px;
}

.blog-post-thumbnail-inner {
  height: 100%;
  width: 100%;
  overflow: hidden;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
  transition: 0.3s;
  img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
  }
  .blog-item-tag {
    bottom: 20px;
    left: 20px;
    top: auto;
    margin: 0;
  }
}

.blog-post-content {
  flex: 1;
  padding: 35px;
  h3 {
    font-size: 22px;
    line-height: 33px;
    color: \$body-heading-color;
    margin-bottom: 15px;
    display: block;
    a {
      font-size: 22px;
      line-height: 33px;
      color: \$body-heading-color;
      margin-bottom: 15px;
      display: block;
      &:hover {
        color: \$primary-color;
      }
    }
  }
}

a.blog-post-info, .blog-post-info, .blog-post-date {
  font-size: 14px;
  color: #888;
  margin-bottom: 10px;
  display: inline-block;
  background-color: #f0f0f0;
  border-radius: \$global-border-radius;
  line-height: 20px;
  padding: 4px 10px;
  margin-right: 3px;
  transition: 0.3s;
}

a.blog-post-info:hover {
  color: #fff;
  background-color: \$primary-color;
}

.blog-post-content {
  p {
    padding: 0;
    margin: 0;
    display: block;
    color: #808080;
  }
  a.button i.icon-feather-arrow-right {
    font-size: 20px;
    top: 4px;
    left: -1px;
    position: relative;
    margin: 0 -5px;
  }
}

.blog-post-info-list {
  display: block;
}

blockquote {
  padding: 10px 20px;
  margin: 0 20px;
  font-size: 17px;
  line-height: 30px;
  color: #888;
  border-left: 5px solid #eee;
}

/* Single Post Styles */

.blog-post.single-post {
  flex-direction: column;
  &:hover {
    transform: none;
  }
  .blog-post-thumbnail {
    width: 100%;
    height: 380px;
  }
  p {
    margin-bottom: 20px;
  }
}

/* Post Navigation */

#posts-nav {
  padding: 0;
  list-style: none;
  width: 100%;
  position: relative;
  margin: 0;
  display: inline-block;
  min-height: 60px;
  li {
    span {
      display: block;
      font-size: 14px;
      color: #888;
      margin-bottom: 10px;
      display: inline-block;
      background-color: #f0f0f0;
      border-radius: \$global-border-radius;
      line-height: 20px;
      padding: 4px 10px;
      margin-right: 3px;
      transition: 0.3s;
    }
    a:hover span {
      background-color: \$primary-color;
      color: #fff;
    }
    position: absolute;
    font-size: 18px;
    font-weight: 500;
    width: 50%;
    strong {
      display: block;
      font-weight: 500;
    }
    a {
      transition: transform 0.3s, color 0.3s 0s;
      color: \$body-heading-color;
      display: inline-block;
      line-height: 28px;
      &:hover {
        color: \$primary-color;
      }
    }
    &.next-post {
      right: 0;
      text-align: right;
    }
    &.prev-post {
      left: 0;
    }
    &.next-post a {
      padding-right: 50px;
    }
    &.prev-post a {
      padding-left: 50px;
      &:before {
        font-family: \"Feather-Icons\";
        font-size: 30px;
        position: absolute;
        color: inherit;
        top: 50%;
        transform: translate3d(0, -50%, 0);
        transition: transform 0.3s;
      }
    }
    &.next-post a:before {
      font-family: \"Feather-Icons\";
      font-size: 30px;
      position: absolute;
      color: inherit;
      top: 50%;
      transform: translate3d(0, -50%, 0);
      transition: transform 0.3s;
      right: 0;
      content: \"\\e930\";
    }
    &.prev-post a:before {
      left: 0;
      content: \"\";
    }
    &.next-post a:hover:before {
      transform: translate3d(5px, -50%, 0);
    }
    &.prev-post a:hover:before {
      transform: translate3d(-5px, -50%, 0);
    }
  }
}

/* Comments */

.comments {
  margin: -10px 0 0 0;
  h4 {
    margin-bottom: 25px;
    font-size: 20px;
    font-weight: 500;
    color: \$body-heading-color;
    span {
      display: inline-block;
      font-size: inherit;
    }
  }
}

.comment {
  font-size: 20px;
}

.comments {
  .button {
    margin: 0 0 10px  0;
    padding: 7px 15px;
  }
  &.reviews .button {
    margin: 0;
  }
  ul {
    padding-left: 0;
    li {
      display: block;
      margin: 50px 0 0 0px;
      ul {
        li {
          margin: 50px 0 0 0px;
          ul li {
            margin: 50px 0 0 0px;
          }
        }
        margin: 0 0 0 100px;
      }
    }
  }
}

.comment-content {
  p {
    margin: 3px 0 0 0;
    line-height: \$body-sub-line-height;
  }
  color: \$body-font-color;
  padding: 0 0 0 100px;
}

.comments ul li {
  ul {
    border-left: 1px solid #e0e0e0;
    padding-left: 35px;
    li:before {
      content: \"\";
      width: 15px;
      height: 1px;
      background-color: #e0e0e0;
      display: inline-block;
      position: absolute;
      top: 30px;
      left: -35px;
    }
  }
  position: relative;
}

.comment-content {
  strong {
    padding-right: 5px;
    color: \$body-font-color;
  }
  span {
    color: #888;
  }
}

body .comment-content p {
  padding: 5px 0;
}

.comments-amount {
  color: #888;
  font-weight: 500;
}

.avatar {
  display: inline-block;
  float: left;
  padding: 0 17px 0 0;
  position: absolute;
  left: 0px;
  top: -5px;
  img {
    max-width: 70px;
    border-radius: 50%;
  }
}

.comment-by {
  width: 100%;
  padding-bottom: 8px;
  padding-top: 5px;
  font-weight: 500;
  color: \$body-heading-color;
  h5 {
    margin: 0 0 7px 0;
  }
  a.reply {
    transition: all 0.3s;
    display: inline;
    background-color: #f0f0f0;
    padding: 5px 16px;
    line-height: 22px;
    font-size: 14px;
    color: \$body-font-color;
    font-weight: 500;
    position: absolute;
    right: 0;
    top: 15px;
    border-radius: \$global-border-radius;
    i {
      font-size: 12px;
      margin-right: 1px;
    }
    &:hover {
      background-color: \$primary-color;
      color: #fff;
      box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    }
  }
  span.date {
    color: #888;
    font-weight: 500;
    margin: 0px 0 0 0;
    float: none;
    display: block;
    text-align: left;
  }
}

@media (max-width: 768px) {
  /* Media Queries for Comments */
  .comments ul li ul {
    margin: 0;
  }
  .avatar {
    top: 3px;
  }
  .comment-content {
    color: \$body-font-color;
    padding: 0 0 0 70px;
  }
  .avatar img {
    max-width: 50px;
    border-radius: 50%;
    top: 5px;
  }
  .comment-by a.reply {
    position: relative;
    margin: 10px 0 0 0;
    top: 0;
    display: inline-block;
  }
  /* Media Queries for Blog Post */
  .blog-post {
    flex-direction: column;
  }
  .blog-post-thumbnail {
    width: 100%;
    height: 220px;
  }
  #posts-nav li {
    position: relative;
    width: 100%;
    a {
      padding: 0 !important;
      &::before {
        display: none;
      }
    }
    &.next-post {
      text-align: left;
      margin-bottom: 30px;
    }
  }
}

/* Blog Widget Tabs */

.widget-tabs {
  padding: 0;
  list-style: none;
  margin-top: 25px;
  display: block;
}

.widget-content {
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.07);
  border-radius: \$global-border-radius;
  background-color: #fff;
  position: relative;
  width: 100%;
  overflow: hidden;
  &:before {
    content: \"\";
    width: 100%;
    height: 100%;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 10;
    background: #fff;
    opacity: 1;
    transition: 0.35s ease-in-out;
  }
  img {
    display: block;
    object-fit: cover;
    width: 100%;
    height: 100%;
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 9;
    opacity: 1;
    transition: 0.35s;
    border-radius: 5.5px;
  }
}

.widget-text {
  h5 {
    font-size: \$body-font-size;
    font-weight: 600;
    line-height: 24px;
    margin: 0 0 3px 0;
    color: \$body-heading-color;
    transition: 0.35s;
  }
  span {
    font-size: 14px;
    color: #888;
    display: inline-block;
    background-color: #f0f0f0;
    border-radius: \$global-border-radius;
    line-height: 20px;
    padding: 4px 10px;
    margin-top: 3px;
    transition: 0.35s;
  }
  display: block;
  padding: 0;
  position: relative;
  z-index: 20;
  padding: 30px;
}

.widget-tabs {
  .widget-content {
    display: table;
    .widget-text {
      display: table-cell;
      vertical-align: middle;
    }
  }
  li {
    margin-top: 20px;
  }
}

.widget-content {
  &:hover:before, &.active:before {
    opacity: 0.6;
    background: #333;
  }
  &:hover img, &.active img {
    opacity: 1;
  }
  &:hover h5, &.active h5 {
    color: #fff;
  }
  &:hover span, &.active span {
    background: rgba(255, 255, 255, 0.25);
    color: #fff;
  }
}

/* Blog Compact Item
------------------------------------- */

.blog-compact-item-container {
  display: block;
  height: 100%;
  width: 100%;
  border-radius: \$global-border-radius;
  background: transparent;
  transform: translate3d(0, 0, 0);
  transition: transform 0.4s;
  margin-bottom: 30px;
  &:hover {
    transform: translateY(-10px);
  }
}

.blog-compact-item {
  background: #ccc;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
  border-radius: \$global-border-radius;
  height: 100%;
  display: block;
  position: relative;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: 50%;
  height: 460px;
  z-index: 100;
  cursor: pointer;
  transition: 0.4s;
  img {
    object-fit: cover;
    height: 100%;
    width: 100%;
    border-radius: \$global-border-radius;
  }
  &:before {
    content: \"\";
    top: 0;
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 9;
    border-radius: \$global-border-radius;
    background: linear-gradient(to top, rgba(51, 51, 51, 0.8) 0%, rgba(51, 51, 51, 0.7) 35%, rgba(51, 51, 51, 0.3) 60%, rgba(51, 51, 51, 0.3) 100%);
    transition: 0.4s;
  }
}

@media (max-width: 1366px) {
  .blog-compact-item {
    height: 420px;
  }
}

.blog-compact-item-content {
  position: absolute;
  bottom: 32px;
  left: 0;
  padding: 0 34px;
  width: 100%;
  z-index: 50;
  box-sizing: border-box;
  h3 {
    color: #fff;
    font-size: 20px;
    padding: 5px 0;
    font-weight: 500;
    margin: 2px 0 0 0;
    line-height: 30px;
  }
  span {
    font-size: \$body-font-size;
    font-weight: 300;
    display: inline-block;
    color: rgba(255, 255, 255, 0.7);
  }
  p {
    font-size: \$body-font-size;
    font-weight: 300;
    display: inline-block;
    color: rgba(255, 255, 255, 0.8);
    margin: 7px 0 0 0;
  }
}

span.blog-item-tag {
  font-size: 14px;
  font-weight: 600;
  color: \$body-heading-color;
  background-color: #fff;
  border-radius: \$global-border-radius;
  padding: 5px 12px;
  line-height: 20px;
  font-weight: 400;
  margin-bottom: 9px;
  position: absolute;
  top: 30px;
  left: 32px;
  z-index: 110;
  transition: 0.4s;
}

.blog-post-tags {
  list-style: none;
  padding: 0;
  margin: 0;
  margin-bottom: 0;
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  opacity: 0.9;
  li {
    display: inline-block;
    margin-right: 5px;
    i {
      margin-right: 3px;
      font-weight: normal;
      display: inline-block;
    }
  }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/layout/_blog.scss";
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
/* Blog
------------------------------------- */

.blog-post {
  display: flex;
  background: #fff;
  margin-bottom: 35px;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
  border-radius: \$global-border-radius;
  overflow: hidden;
  transition: 0.3s;
  &:hover {
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
  }
}

.blog-post-thumbnail {
  flex: 0 0 auto;
  max-width: none;
  max-height: 100%;
  overflow: hidden;
  position: relative;
  width: 260px;
}

.blog-post-thumbnail-inner {
  height: 100%;
  width: 100%;
  overflow: hidden;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
  transition: 0.3s;
  img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
  }
  .blog-item-tag {
    bottom: 20px;
    left: 20px;
    top: auto;
    margin: 0;
  }
}

.blog-post-content {
  flex: 1;
  padding: 35px;
  h3 {
    font-size: 22px;
    line-height: 33px;
    color: \$body-heading-color;
    margin-bottom: 15px;
    display: block;
    a {
      font-size: 22px;
      line-height: 33px;
      color: \$body-heading-color;
      margin-bottom: 15px;
      display: block;
      &:hover {
        color: \$primary-color;
      }
    }
  }
}

a.blog-post-info, .blog-post-info, .blog-post-date {
  font-size: 14px;
  color: #888;
  margin-bottom: 10px;
  display: inline-block;
  background-color: #f0f0f0;
  border-radius: \$global-border-radius;
  line-height: 20px;
  padding: 4px 10px;
  margin-right: 3px;
  transition: 0.3s;
}

a.blog-post-info:hover {
  color: #fff;
  background-color: \$primary-color;
}

.blog-post-content {
  p {
    padding: 0;
    margin: 0;
    display: block;
    color: #808080;
  }
  a.button i.icon-feather-arrow-right {
    font-size: 20px;
    top: 4px;
    left: -1px;
    position: relative;
    margin: 0 -5px;
  }
}

.blog-post-info-list {
  display: block;
}

blockquote {
  padding: 10px 20px;
  margin: 0 20px;
  font-size: 17px;
  line-height: 30px;
  color: #888;
  border-left: 5px solid #eee;
}

/* Single Post Styles */

.blog-post.single-post {
  flex-direction: column;
  &:hover {
    transform: none;
  }
  .blog-post-thumbnail {
    width: 100%;
    height: 380px;
  }
  p {
    margin-bottom: 20px;
  }
}

/* Post Navigation */

#posts-nav {
  padding: 0;
  list-style: none;
  width: 100%;
  position: relative;
  margin: 0;
  display: inline-block;
  min-height: 60px;
  li {
    span {
      display: block;
      font-size: 14px;
      color: #888;
      margin-bottom: 10px;
      display: inline-block;
      background-color: #f0f0f0;
      border-radius: \$global-border-radius;
      line-height: 20px;
      padding: 4px 10px;
      margin-right: 3px;
      transition: 0.3s;
    }
    a:hover span {
      background-color: \$primary-color;
      color: #fff;
    }
    position: absolute;
    font-size: 18px;
    font-weight: 500;
    width: 50%;
    strong {
      display: block;
      font-weight: 500;
    }
    a {
      transition: transform 0.3s, color 0.3s 0s;
      color: \$body-heading-color;
      display: inline-block;
      line-height: 28px;
      &:hover {
        color: \$primary-color;
      }
    }
    &.next-post {
      right: 0;
      text-align: right;
    }
    &.prev-post {
      left: 0;
    }
    &.next-post a {
      padding-right: 50px;
    }
    &.prev-post a {
      padding-left: 50px;
      &:before {
        font-family: \"Feather-Icons\";
        font-size: 30px;
        position: absolute;
        color: inherit;
        top: 50%;
        transform: translate3d(0, -50%, 0);
        transition: transform 0.3s;
      }
    }
    &.next-post a:before {
      font-family: \"Feather-Icons\";
      font-size: 30px;
      position: absolute;
      color: inherit;
      top: 50%;
      transform: translate3d(0, -50%, 0);
      transition: transform 0.3s;
      right: 0;
      content: \"\\e930\";
    }
    &.prev-post a:before {
      left: 0;
      content: \"\";
    }
    &.next-post a:hover:before {
      transform: translate3d(5px, -50%, 0);
    }
    &.prev-post a:hover:before {
      transform: translate3d(-5px, -50%, 0);
    }
  }
}

/* Comments */

.comments {
  margin: -10px 0 0 0;
  h4 {
    margin-bottom: 25px;
    font-size: 20px;
    font-weight: 500;
    color: \$body-heading-color;
    span {
      display: inline-block;
      font-size: inherit;
    }
  }
}

.comment {
  font-size: 20px;
}

.comments {
  .button {
    margin: 0 0 10px  0;
    padding: 7px 15px;
  }
  &.reviews .button {
    margin: 0;
  }
  ul {
    padding-left: 0;
    li {
      display: block;
      margin: 50px 0 0 0px;
      ul {
        li {
          margin: 50px 0 0 0px;
          ul li {
            margin: 50px 0 0 0px;
          }
        }
        margin: 0 0 0 100px;
      }
    }
  }
}

.comment-content {
  p {
    margin: 3px 0 0 0;
    line-height: \$body-sub-line-height;
  }
  color: \$body-font-color;
  padding: 0 0 0 100px;
}

.comments ul li {
  ul {
    border-left: 1px solid #e0e0e0;
    padding-left: 35px;
    li:before {
      content: \"\";
      width: 15px;
      height: 1px;
      background-color: #e0e0e0;
      display: inline-block;
      position: absolute;
      top: 30px;
      left: -35px;
    }
  }
  position: relative;
}

.comment-content {
  strong {
    padding-right: 5px;
    color: \$body-font-color;
  }
  span {
    color: #888;
  }
}

body .comment-content p {
  padding: 5px 0;
}

.comments-amount {
  color: #888;
  font-weight: 500;
}

.avatar {
  display: inline-block;
  float: left;
  padding: 0 17px 0 0;
  position: absolute;
  left: 0px;
  top: -5px;
  img {
    max-width: 70px;
    border-radius: 50%;
  }
}

.comment-by {
  width: 100%;
  padding-bottom: 8px;
  padding-top: 5px;
  font-weight: 500;
  color: \$body-heading-color;
  h5 {
    margin: 0 0 7px 0;
  }
  a.reply {
    transition: all 0.3s;
    display: inline;
    background-color: #f0f0f0;
    padding: 5px 16px;
    line-height: 22px;
    font-size: 14px;
    color: \$body-font-color;
    font-weight: 500;
    position: absolute;
    right: 0;
    top: 15px;
    border-radius: \$global-border-radius;
    i {
      font-size: 12px;
      margin-right: 1px;
    }
    &:hover {
      background-color: \$primary-color;
      color: #fff;
      box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    }
  }
  span.date {
    color: #888;
    font-weight: 500;
    margin: 0px 0 0 0;
    float: none;
    display: block;
    text-align: left;
  }
}

@media (max-width: 768px) {
  /* Media Queries for Comments */
  .comments ul li ul {
    margin: 0;
  }
  .avatar {
    top: 3px;
  }
  .comment-content {
    color: \$body-font-color;
    padding: 0 0 0 70px;
  }
  .avatar img {
    max-width: 50px;
    border-radius: 50%;
    top: 5px;
  }
  .comment-by a.reply {
    position: relative;
    margin: 10px 0 0 0;
    top: 0;
    display: inline-block;
  }
  /* Media Queries for Blog Post */
  .blog-post {
    flex-direction: column;
  }
  .blog-post-thumbnail {
    width: 100%;
    height: 220px;
  }
  #posts-nav li {
    position: relative;
    width: 100%;
    a {
      padding: 0 !important;
      &::before {
        display: none;
      }
    }
    &.next-post {
      text-align: left;
      margin-bottom: 30px;
    }
  }
}

/* Blog Widget Tabs */

.widget-tabs {
  padding: 0;
  list-style: none;
  margin-top: 25px;
  display: block;
}

.widget-content {
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.07);
  border-radius: \$global-border-radius;
  background-color: #fff;
  position: relative;
  width: 100%;
  overflow: hidden;
  &:before {
    content: \"\";
    width: 100%;
    height: 100%;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 10;
    background: #fff;
    opacity: 1;
    transition: 0.35s ease-in-out;
  }
  img {
    display: block;
    object-fit: cover;
    width: 100%;
    height: 100%;
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 9;
    opacity: 1;
    transition: 0.35s;
    border-radius: 5.5px;
  }
}

.widget-text {
  h5 {
    font-size: \$body-font-size;
    font-weight: 600;
    line-height: 24px;
    margin: 0 0 3px 0;
    color: \$body-heading-color;
    transition: 0.35s;
  }
  span {
    font-size: 14px;
    color: #888;
    display: inline-block;
    background-color: #f0f0f0;
    border-radius: \$global-border-radius;
    line-height: 20px;
    padding: 4px 10px;
    margin-top: 3px;
    transition: 0.35s;
  }
  display: block;
  padding: 0;
  position: relative;
  z-index: 20;
  padding: 30px;
}

.widget-tabs {
  .widget-content {
    display: table;
    .widget-text {
      display: table-cell;
      vertical-align: middle;
    }
  }
  li {
    margin-top: 20px;
  }
}

.widget-content {
  &:hover:before, &.active:before {
    opacity: 0.6;
    background: #333;
  }
  &:hover img, &.active img {
    opacity: 1;
  }
  &:hover h5, &.active h5 {
    color: #fff;
  }
  &:hover span, &.active span {
    background: rgba(255, 255, 255, 0.25);
    color: #fff;
  }
}

/* Blog Compact Item
------------------------------------- */

.blog-compact-item-container {
  display: block;
  height: 100%;
  width: 100%;
  border-radius: \$global-border-radius;
  background: transparent;
  transform: translate3d(0, 0, 0);
  transition: transform 0.4s;
  margin-bottom: 30px;
  &:hover {
    transform: translateY(-10px);
  }
}

.blog-compact-item {
  background: #ccc;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
  border-radius: \$global-border-radius;
  height: 100%;
  display: block;
  position: relative;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: 50%;
  height: 460px;
  z-index: 100;
  cursor: pointer;
  transition: 0.4s;
  img {
    object-fit: cover;
    height: 100%;
    width: 100%;
    border-radius: \$global-border-radius;
  }
  &:before {
    content: \"\";
    top: 0;
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 9;
    border-radius: \$global-border-radius;
    background: linear-gradient(to top, rgba(51, 51, 51, 0.8) 0%, rgba(51, 51, 51, 0.7) 35%, rgba(51, 51, 51, 0.3) 60%, rgba(51, 51, 51, 0.3) 100%);
    transition: 0.4s;
  }
}

@media (max-width: 1366px) {
  .blog-compact-item {
    height: 420px;
  }
}

.blog-compact-item-content {
  position: absolute;
  bottom: 32px;
  left: 0;
  padding: 0 34px;
  width: 100%;
  z-index: 50;
  box-sizing: border-box;
  h3 {
    color: #fff;
    font-size: 20px;
    padding: 5px 0;
    font-weight: 500;
    margin: 2px 0 0 0;
    line-height: 30px;
  }
  span {
    font-size: \$body-font-size;
    font-weight: 300;
    display: inline-block;
    color: rgba(255, 255, 255, 0.7);
  }
  p {
    font-size: \$body-font-size;
    font-weight: 300;
    display: inline-block;
    color: rgba(255, 255, 255, 0.8);
    margin: 7px 0 0 0;
  }
}

span.blog-item-tag {
  font-size: 14px;
  font-weight: 600;
  color: \$body-heading-color;
  background-color: #fff;
  border-radius: \$global-border-radius;
  padding: 5px 12px;
  line-height: 20px;
  font-weight: 400;
  margin-bottom: 9px;
  position: absolute;
  top: 30px;
  left: 32px;
  z-index: 110;
  transition: 0.4s;
}

.blog-post-tags {
  list-style: none;
  padding: 0;
  margin: 0;
  margin-bottom: 0;
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  opacity: 0.9;
  li {
    display: inline-block;
    margin-right: 5px;
    i {
      margin-right: 3px;
      font-weight: normal;
      display: inline-block;
    }
  }
}", "@Publication/Front/sass/layout/_blog.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\layout\\_blog.scss");
    }
}
