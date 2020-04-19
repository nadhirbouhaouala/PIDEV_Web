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

/* @Publication/Front/Commentaire.html.twig */
class __TwigTemplate_5885e0220613e25933f7a12ed70eea3c3c6a0cf9c36b90adbfdcdc21b0c996f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Publication/Front/Publication.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Commentaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/Commentaire.html.twig"));

        $this->parent = $this->loadTemplate("@Publication/Front/Publication.html.twig", "@Publication/Front/Commentaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Content
================================================== -->
    <div id=\"titlebar\" class=\"gradient\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Blog</h2>
                    <span>Blog Post Page</span>

                    <!-- Breadcrumbs -->

                </div>
            </div>
        </div>
    </div>

    <!-- Post Content -->
    <div class=\"container\">
        <div class=\"row\">

            <!-- Inner Content -->
            <div class=\"col-xl-8 col-lg-8\">
                <!-- Blog Post -->
                <div class=\"blog-post single-post\">

                    <!-- Blog Post Thumbnail -->

                    <div class=\"blog-post-thumbnail\">
                        <div class=\"blog-post-thumbnail-inner\">
                            <span class=\"blog-item-tag\">Tips</span>
                            <img id=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "image", []), "html", null, true);
        echo "\">

                            <script>
                                var imageurl = \"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "image", []), "html", null, true);
        echo "\";
                                var index = -1;

                                for(var i = 0 ; i< imageurl.length ; i++)
                                {if(imageurl[i]==\"/\"){index = i;}}
                                if(index != -1)imageurl=\"/front/images\"+imageurl.substr(index,imageurl.length);
                                else imageurl = \"/front/images\"+imageurl;

                                document.getElementById(\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "image", []), "html", null, true);
        echo "\").src = imageurl;
                            </script>                        </div>
                    </div>


                    <!-- Blog Post Content -->
                    <div class=\"blog-post-content\">
                        <h3 class=\"margin-bottom-10\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "titre", [])), "html", null, true);
        echo "</h3>

                        <div class=\"blog-post-info-list margin-bottom-20\">
                            <a href=\"#\" class=\"blog-post-info\"></a>
                            <a href=\"#\"  class=\"blog-post-info\">5 Comments </a>

                        </div>

                        <p></p>

                        <blockquote class=\"margin-top-20 margin-bottom-20\">

                        </blockquote>

                        <p>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "description", [])), "html", null, true);
        echo "</p>
                        <p></p>


                        <!-- Share Buttons -->
                        <div class=\"share-buttons margin-top-25\">
                            <div class=\"share-buttons-trigger\"><i class=\"icon-feather-share-2\"></i></div>
                            <div class=\"share-buttons-content\">
                                <span>Interesting? <strong>Share It!</strong></span>
                                <ul class=\"share-buttons-icons\">
                                    <li><a href=\"#\" data-button-color=\"#3b5998\" title=\"Share on Facebook\" data-tippy-placement=\"top\"><i class=\"icon-brand-facebook-f\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#1da1f2\" title=\"Share on Twitter\" data-tippy-placement=\"top\"><i class=\"icon-brand-twitter\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#dd4b39\" title=\"Share on Google Plus\" data-tippy-placement=\"top\"><i class=\"icon-brand-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#0077b5\" title=\"Share on LinkedIn\" data-tippy-placement=\"top\"><i class=\"icon-brand-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Blog Post Content / End -->



                <!-- Related Posts -->
                <div class=\"row\">

                    <!-- Headline -->
                    <div class=\"col-xl-12\">
                        <h3 class=\"margin-top-40 margin-bottom-35\">Mention Honnorable</h3>
                    </div>

                    <!-- Blog Post Item -->
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deuxieme"] ?? $this->getContext($context, "deuxieme")));
        foreach ($context['_seq'] as $context["_key"] => $context["de"]) {
            // line 99
            echo "                    ";
            if (twig_test_empty($context["de"])) {
                // line 100
                echo "                        <li>ahaaaawaaaa</li>
                    ";
            } else {
                // line 102
                echo "                    <div class=\"col-xl-6\">
                        <a href=\"pages-blog-post.html\" class=\"blog-compact-item-container\">
                            <div class=\"blog-compact-item\">
                                <img id=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["de"], "image", []), "html", null, true);
                echo "\">

                                <script>
                                    var imageurl = \"";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["de"], "image", []), "html", null, true);
                echo "\";
                                    var index = -1;

                                    for(var i = 0 ; i< imageurl.length ; i++)
                                    {if(imageurl[i]==\"/\"){index = i;}}
                                    if(index != -1)imageurl=\"/front/images\"+imageurl.substr(index,imageurl.length);
                                    else imageurl = \"/front/images\"+imageurl;

                                    document.getElementById(\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["de"], "image", []), "html", null, true);
                echo "\").src = imageurl;
                                </script>
                                <span class=\"blog-item-tag\">Top 2</span>
                                <div class=\"blog-compact-item-content\">
                                    <ul class=\"blog-post-tags\">
                                        <li>29 June 2018</li>
                                        <li>eazeaeazeaze</li>

                                    </ul>
                                    <h3>";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["de"], "titre", [])), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["de"], "description", [])), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    ";
            }
            // line 132
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['de'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                    <!-- Blog post Item / End -->

                    <!-- Blog Post Item -->
                    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["premiere"] ?? $this->getContext($context, "premiere")));
        foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
            // line 137
            echo "                    ";
            if (twig_test_empty($context["pr"])) {
                // line 138
                echo "                    ";
            } else {
                // line 139
                echo "                    <div class=\"col-xl-6\">
                        <a href=\"pages-blog-post.html\" class=\"blog-compact-item-container\">
                            <div class=\"blog-compact-item\">
                                <img id=\"top_";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "image", []), "html", null, true);
                echo "\">

                                <script>
                                    var imageurl = \"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "image", []), "html", null, true);
                echo "\";
                                    var index = -1;

                                    for(var i = 0 ; i< imageurl.length ; i++)
                                    {if(imageurl[i]==\"/\"){index = i;}}
                                    if(index != -1)imageurl=\"/front/images\"+imageurl.substr(index,imageurl.length);
                                    else imageurl = \"/front/images\"+imageurl;

                                    document.getElementById(\"top_";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "image", []), "html", null, true);
                echo "\").src = imageurl;
                                </script>                                  <span class=\"blog-item-tag\">Top 1</span>
                                <div class=\"blog-compact-item-content\">

                                    <ul class=\"blog-post-tags\">
                                        <li>10 June 2018</li>
                                    </ul>

                                    <h3>";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["pr"], "titre", [])), "html", null, true);
                echo "</h3>


                                    <p>";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["pr"], "description", [])), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    ";
            }
            // line 170
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                    <!-- Blog post Item / End -->
                </div>
                <!-- Related Posts / End -->


                <!-- Comments -->
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <section class=\"comments\">
                            <h3 class=\"margin-top-45 margin-bottom-0\">Comments <span class=\"comments-amount\">(5)</span></h3>
                            <a href=\"";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Affichercommentaire");
        echo "\" ><button class=\"button button-sliding-icon ripple-effect margin-bottom-40\" type=\"submit\" form=\"add-comment\">Modifier ou supprimer mes commentaires <i class=\"icon-material-outline-arrow-right-alt\"></i></button>

                                ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["p"] ?? $this->getContext($context, "p")));
        foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
            // line 184
            echo "                            <ul>
                                <li>
                                    <div class=\"avatar\"><img src=\"images/user-avatar-placeholder.png\" alt=\"\"></div>
                                    <div class=\"comment-content\"><div class=\"arrow-comment\"></div>
                                        <div class=\"comment-by\">Kathy Brown<span class=\"date\">12th, June 2018</span>
                                            <p> ";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["cp"], "commentaire", []), "html", null, true);
            echo " </p>


                                        </div>
                                    </div>



                                            </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                                        </li>
                                    </ul>

                                </li>


                            </ul>

                        </section>
                    </div>
                </div>
                <!-- Comments / End -->


                <!-- Leava a Comment -->
                <div class=\"row\">
                    <div class=\"col-xl-12\">

                        <h3 class=\"margin-top-35 margin-bottom-30\">Ajouter un commentaire</h3>



                        <!-- Button -->
                        <a href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AjouterComm", ["id" => $this->getAttribute(($context["c"] ?? $this->getContext($context, "c")), "id", [])]), "html", null, true);
        echo "\"><button class=\"button button-sliding-icon ripple-effect margin-bottom-40\" type=\"submit\" form=\"add-comment\">Add Comment <i class=\"icon-material-outline-arrow-right-alt\"></i></button>
                        </a>>
                    </div>
                </div>
                <!-- Leava a Comment / End -->

            </div>
            <!-- Inner Content / End -->









                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/Commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 222,  349 => 199,  333 => 189,  326 => 184,  322 => 183,  317 => 181,  305 => 171,  299 => 170,  290 => 164,  284 => 161,  273 => 153,  262 => 145,  256 => 142,  251 => 139,  248 => 138,  245 => 137,  241 => 136,  236 => 133,  230 => 132,  221 => 126,  217 => 125,  205 => 116,  194 => 108,  188 => 105,  183 => 102,  179 => 100,  176 => 99,  172 => 98,  136 => 65,  119 => 51,  109 => 44,  98 => 36,  92 => 33,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Publication/Front/Publication.html.twig' %}
{% block content %}
    <!-- Content
================================================== -->
    <div id=\"titlebar\" class=\"gradient\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Blog</h2>
                    <span>Blog Post Page</span>

                    <!-- Breadcrumbs -->

                </div>
            </div>
        </div>
    </div>

    <!-- Post Content -->
    <div class=\"container\">
        <div class=\"row\">

            <!-- Inner Content -->
            <div class=\"col-xl-8 col-lg-8\">
                <!-- Blog Post -->
                <div class=\"blog-post single-post\">

                    <!-- Blog Post Thumbnail -->

                    <div class=\"blog-post-thumbnail\">
                        <div class=\"blog-post-thumbnail-inner\">
                            <span class=\"blog-item-tag\">Tips</span>
                            <img id=\"{{ c.image }}\">

                            <script>
                                var imageurl = \"{{ c.image }}\";
                                var index = -1;

                                for(var i = 0 ; i< imageurl.length ; i++)
                                {if(imageurl[i]==\"/\"){index = i;}}
                                if(index != -1)imageurl=\"/front/images\"+imageurl.substr(index,imageurl.length);
                                else imageurl = \"/front/images\"+imageurl;

                                document.getElementById(\"{{ c.image }}\").src = imageurl;
                            </script>                        </div>
                    </div>


                    <!-- Blog Post Content -->
                    <div class=\"blog-post-content\">
                        <h3 class=\"margin-bottom-10\">{{ asset(c.titre) }}</h3>

                        <div class=\"blog-post-info-list margin-bottom-20\">
                            <a href=\"#\" class=\"blog-post-info\"></a>
                            <a href=\"#\"  class=\"blog-post-info\">5 Comments </a>

                        </div>

                        <p></p>

                        <blockquote class=\"margin-top-20 margin-bottom-20\">

                        </blockquote>

                        <p>{{ asset(c.description) }}</p>
                        <p></p>


                        <!-- Share Buttons -->
                        <div class=\"share-buttons margin-top-25\">
                            <div class=\"share-buttons-trigger\"><i class=\"icon-feather-share-2\"></i></div>
                            <div class=\"share-buttons-content\">
                                <span>Interesting? <strong>Share It!</strong></span>
                                <ul class=\"share-buttons-icons\">
                                    <li><a href=\"#\" data-button-color=\"#3b5998\" title=\"Share on Facebook\" data-tippy-placement=\"top\"><i class=\"icon-brand-facebook-f\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#1da1f2\" title=\"Share on Twitter\" data-tippy-placement=\"top\"><i class=\"icon-brand-twitter\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#dd4b39\" title=\"Share on Google Plus\" data-tippy-placement=\"top\"><i class=\"icon-brand-google-plus-g\"></i></a></li>
                                    <li><a href=\"#\" data-button-color=\"#0077b5\" title=\"Share on LinkedIn\" data-tippy-placement=\"top\"><i class=\"icon-brand-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Blog Post Content / End -->



                <!-- Related Posts -->
                <div class=\"row\">

                    <!-- Headline -->
                    <div class=\"col-xl-12\">
                        <h3 class=\"margin-top-40 margin-bottom-35\">Mention Honnorable</h3>
                    </div>

                    <!-- Blog Post Item -->
                    {% for de in deuxieme %}
                    {% if de is empty %}
                        <li>ahaaaawaaaa</li>
                    {% else %}
                    <div class=\"col-xl-6\">
                        <a href=\"pages-blog-post.html\" class=\"blog-compact-item-container\">
                            <div class=\"blog-compact-item\">
                                <img id=\"{{ de.image }}\">

                                <script>
                                    var imageurl = \"{{ de.image }}\";
                                    var index = -1;

                                    for(var i = 0 ; i< imageurl.length ; i++)
                                    {if(imageurl[i]==\"/\"){index = i;}}
                                    if(index != -1)imageurl=\"/front/images\"+imageurl.substr(index,imageurl.length);
                                    else imageurl = \"/front/images\"+imageurl;

                                    document.getElementById(\"{{ de.image }}\").src = imageurl;
                                </script>
                                <span class=\"blog-item-tag\">Top 2</span>
                                <div class=\"blog-compact-item-content\">
                                    <ul class=\"blog-post-tags\">
                                        <li>29 June 2018</li>
                                        <li>eazeaeazeaze</li>

                                    </ul>
                                    <h3>{{ asset(de.titre) }}</h3>
                                    <p>{{ asset(de.description) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    {% endif %}
                    {% endfor %}
                    <!-- Blog post Item / End -->

                    <!-- Blog Post Item -->
                    {% for pr in premiere %}
                    {% if pr is empty %}
                    {% else %}
                    <div class=\"col-xl-6\">
                        <a href=\"pages-blog-post.html\" class=\"blog-compact-item-container\">
                            <div class=\"blog-compact-item\">
                                <img id=\"top_{{ pr.image }}\">

                                <script>
                                    var imageurl = \"{{ pr.image }}\";
                                    var index = -1;

                                    for(var i = 0 ; i< imageurl.length ; i++)
                                    {if(imageurl[i]==\"/\"){index = i;}}
                                    if(index != -1)imageurl=\"/front/images\"+imageurl.substr(index,imageurl.length);
                                    else imageurl = \"/front/images\"+imageurl;

                                    document.getElementById(\"top_{{ pr.image }}\").src = imageurl;
                                </script>                                  <span class=\"blog-item-tag\">Top 1</span>
                                <div class=\"blog-compact-item-content\">

                                    <ul class=\"blog-post-tags\">
                                        <li>10 June 2018</li>
                                    </ul>

                                    <h3>{{ asset(pr.titre) }}</h3>


                                    <p>{{ asset(pr.description) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    {% endif %}
                    {% endfor %}
                    <!-- Blog post Item / End -->
                </div>
                <!-- Related Posts / End -->


                <!-- Comments -->
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <section class=\"comments\">
                            <h3 class=\"margin-top-45 margin-bottom-0\">Comments <span class=\"comments-amount\">(5)</span></h3>
                            <a href=\"{{ path('Affichercommentaire') }}\" ><button class=\"button button-sliding-icon ripple-effect margin-bottom-40\" type=\"submit\" form=\"add-comment\">Modifier ou supprimer mes commentaires <i class=\"icon-material-outline-arrow-right-alt\"></i></button>

                                {% for cp in p %}
                            <ul>
                                <li>
                                    <div class=\"avatar\"><img src=\"images/user-avatar-placeholder.png\" alt=\"\"></div>
                                    <div class=\"comment-content\"><div class=\"arrow-comment\"></div>
                                        <div class=\"comment-by\">Kathy Brown<span class=\"date\">12th, June 2018</span>
                                            <p> {{ cp.commentaire }} </p>


                                        </div>
                                    </div>



                                            </ul>
                            {% endfor %}
                                        </li>
                                    </ul>

                                </li>


                            </ul>

                        </section>
                    </div>
                </div>
                <!-- Comments / End -->


                <!-- Leava a Comment -->
                <div class=\"row\">
                    <div class=\"col-xl-12\">

                        <h3 class=\"margin-top-35 margin-bottom-30\">Ajouter un commentaire</h3>



                        <!-- Button -->
                        <a href=\"{{ path('AjouterComm',{'id':c.id}) }}\"><button class=\"button button-sliding-icon ripple-effect margin-bottom-40\" type=\"submit\" form=\"add-comment\">Add Comment <i class=\"icon-material-outline-arrow-right-alt\"></i></button>
                        </a>>
                    </div>
                </div>
                <!-- Leava a Comment / End -->

            </div>
            <!-- Inner Content / End -->









                </div>
            </div>

        </div>
    </div>
{% endblock %}", "@Publication/Front/Commentaire.html.twig", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\Commentaire.html.twig");
    }
}
