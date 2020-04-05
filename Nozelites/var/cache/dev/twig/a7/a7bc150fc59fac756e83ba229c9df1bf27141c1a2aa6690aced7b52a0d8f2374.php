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

/* @Nozelites/Back/index.html.twig */
class __TwigTemplate_84373153f817376abbbc0ee8d50326eb804103622ea032e94654faf328679fd9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Nozelites/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Back/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Nozelites/Back/index.html.twig"));

        $this->parent = $this->loadTemplate("@Nozelites/baseback.html.twig", "@Nozelites/Back/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $this->displayParentBlock("titre", $context, $blocks);
        echo " - Acceuil ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">

                <!-- PIE CHART -->
                <div class=\"card card-danger\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Groupes</h3>
                        <script></script>
                        <div class=\"card-tools\">
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i></button>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"pieChart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Small boxes (Stat box) -->
                <div class=\"row\">
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-info\">
                            <div class=\"inner\">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-success\">
                            <div class=\"inner\">
                                <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-warning\">
                            <div class=\"inner\">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-danger\">
                            <div class=\"inner\">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class=\"row\">
                    <!-- Left col -->
                    <section class=\"col-lg-7 connectedSortable\">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-chart-pie mr-1\"></i>
                                    Sales
                                </h3>
                                <div class=\"card-tools\">
                                    <ul class=\"nav nav-pills ml-auto\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class=\"card-body\">
                                <div class=\"tab-content p-0\">
                                    <!-- Morris chart - Sales -->
                                    <div class=\"chart tab-pane active\" id=\"revenue-chart\"
                                         style=\"position: relative; height: 300px;\">
                                        <canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                                    </div>
                                    <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
                                        <canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- DIRECT CHAT -->
                        <div class=\"card direct-chat direct-chat-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Direct Chat</h3>

                                <div class=\"card-tools\">
                                    <span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\" title=\"Contacts\"
                                            data-widget=\"chat-pane-toggle\">
                                        <i class=\"fas fa-comments\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <!-- Conversations are loaded here -->
                                <div class=\"direct-chat-messages\">
                                    <!-- Message. Default to the left -->
                                    <div class=\"direct-chat-msg\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            Is this template really for free? That's unbelievable!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class=\"direct-chat-msg right\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            You better believe it!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message. Default to the left -->
                                    <div class=\"direct-chat-msg\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            Working with AdminLTE on a great new app! Wanna join?
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class=\"direct-chat-msg right\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            I would love to.
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class=\"direct-chat-contacts\">
                                    <ul class=\"contacts-list\">
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Count Dracula
                            <small class=\"contacts-list-date float-right\">2/28/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Sarah Doe
                            <small class=\"contacts-list-date float-right\">2/23/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nadia Jolie
                            <small class=\"contacts-list-date float-right\">2/20/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nora S. Vans
                            <small class=\"contacts-list-date float-right\">2/10/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Where is your new...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            John K.
                            <small class=\"contacts-list-date float-right\">1/27/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Kenneth M.
                            <small class=\"contacts-list-date float-right\">1/4/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Never mind I found...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contacts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                <form action=\"#\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                                        <span class=\"input-group-append\">
                      <button type=\"button\" class=\"btn btn-primary\">Send</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->

                        <!-- TO DO List -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"ion ion-clipboard mr-1\"></i>
                                    To Do List
                                </h3>

                                <div class=\"card-tools\">
                                    <ul class=\"pagination pagination-sm\">
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&laquo;</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <ul class=\"todo-list\" data-widget=\"todo-list\">
                                    <li>
                                        <!-- drag handle -->
                                        <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <!-- checkbox -->
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
                                            <label for=\"todoCheck1\"></label>
                                        </div>
                                        <!-- todo text -->
                                        <span class=\"text\">Design a nice theme</span>
                                        <!-- Emphasis label -->
                                        <small class=\"badge badge-danger\"><i class=\"far fa-clock\"></i> 2 mins</small>
                                        <!-- General tools such as edit or delete-->
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
                                            <label for=\"todoCheck2\"></label>
                                        </div>
                                        <span class=\"text\">Make the theme responsive</span>
                                        <small class=\"badge badge-info\"><i class=\"far fa-clock\"></i> 4 hours</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
                                            <label for=\"todoCheck3\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-warning\"><i class=\"far fa-clock\"></i> 1 day</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
                                            <label for=\"todoCheck4\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-success\"><i class=\"far fa-clock\"></i> 3 days</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
                                            <label for=\"todoCheck5\"></label>
                                        </div>
                                        <span class=\"text\">Check your messages and notifications</span>
                                        <small class=\"badge badge-primary\"><i class=\"far fa-clock\"></i> 1 week</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
                                            <label for=\"todoCheck6\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-secondary\"><i class=\"far fa-clock\"></i> 1 month</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer clearfix\">
                                <button type=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-plus\"></i> Add item</button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class=\"col-lg-5 connectedSortable\">

                        <!-- Map card -->
                        <div class=\"card bg-gradient-primary\">
                            <div class=\"card-header border-0\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-map-marker-alt mr-1\"></i>
                                    Visitors
                                </h3>
                                <!-- card tools -->
                                <div class=\"card-tools\">
                                    <button type=\"button\"
                                            class=\"btn btn-primary btn-sm daterange\"
                                            data-toggle=\"tooltip\"
                                            title=\"Date range\">
                                        <i class=\"far fa-calendar-alt\"></i>
                                    </button>
                                    <button type=\"button\"
                                            class=\"btn btn-primary btn-sm\"
                                            data-card-widget=\"collapse\"
                                            data-toggle=\"tooltip\"
                                            title=\"Collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <div class=\"card-body\">
                                <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
                            </div>
                            <!-- /.card-body-->
                            <div class=\"card-footer bg-transparent\">
                                <div class=\"row\">
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-1\"></div>
                                        <div class=\"text-white\">Visitors</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-2\"></div>
                                        <div class=\"text-white\">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-3\"></div>
                                        <div class=\"text-white\">Sales</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- solid sales graph -->
                        <div class=\"card bg-gradient-info\">
                            <div class=\"card-header border-0\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-th mr-1\"></i>
                                    Sales Graph
                                </h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer bg-transparent\">
                                <div class=\"row\">
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">Mail-Orders</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">In-Store</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->

                        <!-- Calendar -->
                        <div class=\"card bg-gradient-success\">
                            <div class=\"card-header border-0\">

                                <h3 class=\"card-title\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    Calendar
                                </h3>
                                <!-- tools card -->
                                <div class=\"card-tools\">
                                    <!-- button with a dropdown -->
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"fas fa-bars\"></i></button>
                                        <div class=\"dropdown-menu float-right\" role=\"menu\">
                                            <a href=\"#\" class=\"dropdown-item\">Add new event</a>
                                            <a href=\"#\" class=\"dropdown-item\">Clear events</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a href=\"#\" class=\"dropdown-item\">View calendar</a>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body pt-0\">
                                <!--The calendar -->
                                <div id=\"calendar\" style=\"width: 100%\"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 637
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 638
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- ChartJS -->
    <script src=\"../../plugins/chart.js/Chart.min.js\"></script>
    <script>
        var pieData = {
            labels: [
                'Ouvert',
                'fermé',
            ],
            datasets: [
                {
                    data: [";
        // line 649
        echo twig_escape_filter($this->env, ($context["groupes_o"] ?? $this->getContext($context, "groupes_o")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, ($context["groupes_f"] ?? $this->getContext($context, "groupes_f")), "html", null, true);
        echo ",],
                    backgroundColor : ['#f56954', '#00a65a', /*'#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'*/],
                }
            ]
        };

        var pieOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        };

        function definir_stat()
        {
            \$(function () {
                var pieChartCanvas = \$('#pieChart').get(0).getContext('2d');
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
                var pieChart = new Chart(pieChartCanvas, {
                    type: 'pie',
                    data: pieData,
                    options: pieOptions
                })
            });
        }
        definir_stat();

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Nozelites/Back/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  744 => 649,  729 => 638,  720 => 637,  81 => 6,  72 => 5,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Nozelites/baseback.html.twig' %}

{% block titre %}{{ parent() }} - Acceuil {% endblock %}

{% block content %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">

                <!-- PIE CHART -->
                <div class=\"card card-danger\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Groupes</h3>
                        <script></script>
                        <div class=\"card-tools\">
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i></button>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"pieChart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Small boxes (Stat box) -->
                <div class=\"row\">
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-info\">
                            <div class=\"inner\">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-success\">
                            <div class=\"inner\">
                                <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-warning\">
                            <div class=\"inner\">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-danger\">
                            <div class=\"inner\">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class=\"row\">
                    <!-- Left col -->
                    <section class=\"col-lg-7 connectedSortable\">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-chart-pie mr-1\"></i>
                                    Sales
                                </h3>
                                <div class=\"card-tools\">
                                    <ul class=\"nav nav-pills ml-auto\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class=\"card-body\">
                                <div class=\"tab-content p-0\">
                                    <!-- Morris chart - Sales -->
                                    <div class=\"chart tab-pane active\" id=\"revenue-chart\"
                                         style=\"position: relative; height: 300px;\">
                                        <canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                                    </div>
                                    <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
                                        <canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- DIRECT CHAT -->
                        <div class=\"card direct-chat direct-chat-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Direct Chat</h3>

                                <div class=\"card-tools\">
                                    <span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\" title=\"Contacts\"
                                            data-widget=\"chat-pane-toggle\">
                                        <i class=\"fas fa-comments\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <!-- Conversations are loaded here -->
                                <div class=\"direct-chat-messages\">
                                    <!-- Message. Default to the left -->
                                    <div class=\"direct-chat-msg\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            Is this template really for free? That's unbelievable!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class=\"direct-chat-msg right\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            You better believe it!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message. Default to the left -->
                                    <div class=\"direct-chat-msg\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            Working with AdminLTE on a great new app! Wanna join?
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class=\"direct-chat-msg right\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            I would love to.
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class=\"direct-chat-contacts\">
                                    <ul class=\"contacts-list\">
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Count Dracula
                            <small class=\"contacts-list-date float-right\">2/28/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Sarah Doe
                            <small class=\"contacts-list-date float-right\">2/23/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nadia Jolie
                            <small class=\"contacts-list-date float-right\">2/20/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nora S. Vans
                            <small class=\"contacts-list-date float-right\">2/10/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Where is your new...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            John K.
                            <small class=\"contacts-list-date float-right\">1/27/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Kenneth M.
                            <small class=\"contacts-list-date float-right\">1/4/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Never mind I found...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contacts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                <form action=\"#\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                                        <span class=\"input-group-append\">
                      <button type=\"button\" class=\"btn btn-primary\">Send</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->

                        <!-- TO DO List -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"ion ion-clipboard mr-1\"></i>
                                    To Do List
                                </h3>

                                <div class=\"card-tools\">
                                    <ul class=\"pagination pagination-sm\">
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&laquo;</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <ul class=\"todo-list\" data-widget=\"todo-list\">
                                    <li>
                                        <!-- drag handle -->
                                        <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <!-- checkbox -->
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
                                            <label for=\"todoCheck1\"></label>
                                        </div>
                                        <!-- todo text -->
                                        <span class=\"text\">Design a nice theme</span>
                                        <!-- Emphasis label -->
                                        <small class=\"badge badge-danger\"><i class=\"far fa-clock\"></i> 2 mins</small>
                                        <!-- General tools such as edit or delete-->
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
                                            <label for=\"todoCheck2\"></label>
                                        </div>
                                        <span class=\"text\">Make the theme responsive</span>
                                        <small class=\"badge badge-info\"><i class=\"far fa-clock\"></i> 4 hours</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
                                            <label for=\"todoCheck3\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-warning\"><i class=\"far fa-clock\"></i> 1 day</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
                                            <label for=\"todoCheck4\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-success\"><i class=\"far fa-clock\"></i> 3 days</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
                                            <label for=\"todoCheck5\"></label>
                                        </div>
                                        <span class=\"text\">Check your messages and notifications</span>
                                        <small class=\"badge badge-primary\"><i class=\"far fa-clock\"></i> 1 week</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
                                            <label for=\"todoCheck6\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-secondary\"><i class=\"far fa-clock\"></i> 1 month</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer clearfix\">
                                <button type=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-plus\"></i> Add item</button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class=\"col-lg-5 connectedSortable\">

                        <!-- Map card -->
                        <div class=\"card bg-gradient-primary\">
                            <div class=\"card-header border-0\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-map-marker-alt mr-1\"></i>
                                    Visitors
                                </h3>
                                <!-- card tools -->
                                <div class=\"card-tools\">
                                    <button type=\"button\"
                                            class=\"btn btn-primary btn-sm daterange\"
                                            data-toggle=\"tooltip\"
                                            title=\"Date range\">
                                        <i class=\"far fa-calendar-alt\"></i>
                                    </button>
                                    <button type=\"button\"
                                            class=\"btn btn-primary btn-sm\"
                                            data-card-widget=\"collapse\"
                                            data-toggle=\"tooltip\"
                                            title=\"Collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <div class=\"card-body\">
                                <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
                            </div>
                            <!-- /.card-body-->
                            <div class=\"card-footer bg-transparent\">
                                <div class=\"row\">
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-1\"></div>
                                        <div class=\"text-white\">Visitors</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-2\"></div>
                                        <div class=\"text-white\">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-3\"></div>
                                        <div class=\"text-white\">Sales</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- solid sales graph -->
                        <div class=\"card bg-gradient-info\">
                            <div class=\"card-header border-0\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-th mr-1\"></i>
                                    Sales Graph
                                </h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer bg-transparent\">
                                <div class=\"row\">
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">Mail-Orders</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">In-Store</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->

                        <!-- Calendar -->
                        <div class=\"card bg-gradient-success\">
                            <div class=\"card-header border-0\">

                                <h3 class=\"card-title\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    Calendar
                                </h3>
                                <!-- tools card -->
                                <div class=\"card-tools\">
                                    <!-- button with a dropdown -->
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"fas fa-bars\"></i></button>
                                        <div class=\"dropdown-menu float-right\" role=\"menu\">
                                            <a href=\"#\" class=\"dropdown-item\">Add new event</a>
                                            <a href=\"#\" class=\"dropdown-item\">Clear events</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a href=\"#\" class=\"dropdown-item\">View calendar</a>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body pt-0\">
                                <!--The calendar -->
                                <div id=\"calendar\" style=\"width: 100%\"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- ChartJS -->
    <script src=\"../../plugins/chart.js/Chart.min.js\"></script>
    <script>
        var pieData = {
            labels: [
                'Ouvert',
                'fermé',
            ],
            datasets: [
                {
                    data: [{{ groupes_o }},{{ groupes_f }},],
                    backgroundColor : ['#f56954', '#00a65a', /*'#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'*/],
                }
            ]
        };

        var pieOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        };

        function definir_stat()
        {
            \$(function () {
                var pieChartCanvas = \$('#pieChart').get(0).getContext('2d');
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
                var pieChart = new Chart(pieChartCanvas, {
                    type: 'pie',
                    data: pieData,
                    options: pieOptions
                })
            });
        }
        definir_stat();

    </script>
{% endblock %}


", "@Nozelites/Back/index.html.twig", "C:\\wamp64\\www\\3.2\\PIDEV_Web\\Nozelites\\src\\NozelitesBundle\\Resources\\views\\Back\\index.html.twig");
    }
}