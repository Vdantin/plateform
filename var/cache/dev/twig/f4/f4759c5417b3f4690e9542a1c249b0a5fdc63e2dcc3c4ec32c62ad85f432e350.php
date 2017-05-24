<?php

/* base.admin.html.twig */
class __TwigTemplate_71321d851717e5d2d149078ac96a6b4fff716994fc55582c6bd6d78d9cb69740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a409652a4d04d811d2c2888f7e5fde75b124b82b2f75ed31c0dd39fde70170d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a409652a4d04d811d2c2888f7e5fde75b124b82b2f75ed31c0dd39fde70170d6->enter($__internal_a409652a4d04d811d2c2888f7e5fde75b124b82b2f75ed31c0dd39fde70170d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.admin.html.twig"));

        $__internal_b20030e1bfff2ec3e245d8ad2e2fc2aae45d17618ccc6d5de48d3524acfd5936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20030e1bfff2ec3e245d8ad2e2fc2aae45d17618ccc6d5de48d3524acfd5936->enter($__internal_b20030e1bfff2ec3e245d8ad2e2fc2aae45d17618ccc6d5de48d3524acfd5936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script> <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script> <![endif]-->

  </head>


  <body>

    <div id=\"wrapper\">

      <!-- Navigation -->
      <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\">SB Admin v2.0</a>
        </div>
        <!-- /.navbar-header -->

        <ul class=\"nav navbar-top-links navbar-right\">
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"fa fa-envelope fa-fw\"></i>
              <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-messages\">
              <li>
                <a href=\"#\">
                  <div>
                    <strong>John Smith</strong>
                    <span class=\"pull-right text-muted\">
                      <em>Yesterday</em>
                    </span>
                  </div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <strong>John Smith</strong>
                    <span class=\"pull-right text-muted\">
                      <em>Yesterday</em>
                    </span>
                  </div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <strong>John Smith</strong>
                    <span class=\"pull-right text-muted\">
                      <em>Yesterday</em>
                    </span>
                  </div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a class=\"text-center\" href=\"#\">
                  <strong>Read All Messages</strong>
                  <i class=\"fa fa-angle-right\"></i>
                </a>
              </li>
            </ul>
            <!-- /.dropdown-messages -->
          </li>
          <!-- /.dropdown -->
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"fa fa-tasks fa-fw\"></i>
              <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-tasks\">
              <li>
                <a href=\"#\">
                  <div>
                    <p>
                      <strong>Task 1</strong>
                      <span class=\"pull-right text-muted\">40% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                      <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                        <span class=\"sr-only\">40% Complete (success)</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <p>
                      <strong>Task 2</strong>
                      <span class=\"pull-right text-muted\">20% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                      <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\">20% Complete</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <p>
                      <strong>Task 3</strong>
                      <span class=\"pull-right text-muted\">60% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                      <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\">60% Complete (warning)</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <p>
                      <strong>Task 4</strong>
                      <span class=\"pull-right text-muted\">80% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                      <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\">80% Complete (danger)</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a class=\"text-center\" href=\"#\">
                  <strong>See All Tasks</strong>
                  <i class=\"fa fa-angle-right\"></i>
                </a>
              </li>
            </ul>
            <!-- /.dropdown-tasks -->
          </li>
          <!-- /.dropdown -->
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"fa fa-bell fa-fw\"></i>
              <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-alerts\">
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-comment fa-fw\"></i>
                    New Comment
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-twitter fa-fw\"></i>
                    3 New Followers
                    <span class=\"pull-right text-muted small\">12 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-envelope fa-fw\"></i>
                    Message Sent
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-tasks fa-fw\"></i>
                    New Task
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-upload fa-fw\"></i>
                    Server Rebooted
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a class=\"text-center\" href=\"#\">
                  <strong>See All Alerts</strong>
                  <i class=\"fa fa-angle-right\"></i>
                </a>
              </li>
            </ul>
            <!-- /.dropdown-alerts -->
          </li>
          <!-- /.dropdown -->
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"fa fa-user fa-fw\"></i>
              <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-user fa-fw\"></i>
                  User Profile</a>
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-gear fa-fw\"></i>
                  Settings</a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"login.html\">
                  <i class=\"fa fa-sign-out fa-fw\"></i>
                  Logout</a>
              </li>
            </ul>
            <!-- /.dropdown-user -->
          </li>
          <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class=\"navbar-default sidebar\" role=\"navigation\">
          <div class=\"sidebar-nav navbar-collapse\">
            <ul class=\"nav\" id=\"side-menu\">
              <li class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\">
                      <i class=\"fa fa-search\"></i>
                    </button>
                  </span>
                </div>
                <!-- /input-group -->
              </li>
              <li>
                <a href=\"index.html\">
                  <i class=\"fa fa-dashboard fa-fw\"></i>
                  Dashboard</a>
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-bar-chart-o fa-fw\"></i>
                  Charts<span class=\"fa arrow\"></span>
                </a>
                <ul class=\"nav nav-second-level\">
                  <li>
                    <a href=\"flot.html\">Flot Charts</a>
                  </li>
                  <li>
                    <a href=\"morris.html\">Morris.js Charts</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href=\"tables.html\">
                  <i class=\"fa fa-table fa-fw\"></i>
                  Tables</a>
              </li>
              <li>
                <a href=\"forms.html\">
                  <i class=\"fa fa-edit fa-fw\"></i>
                  Forms</a>
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-wrench fa-fw\"></i>
                  UI Elements<span class=\"fa arrow\"></span>
                </a>
                <ul class=\"nav nav-second-level\">
                  <li>
                    <a href=\"panels-wells.html\">Panels and Wells</a>
                  </li>
                  <li>
                    <a href=\"buttons.html\">Buttons</a>
                  </li>
                  <li>
                    <a href=\"notifications.html\">Notifications</a>
                  </li>
                  <li>
                    <a href=\"typography.html\">Typography</a>
                  </li>
                  <li>
                    <a href=\"icons.html\">
                      Icons</a>
                  </li>
                  <li>
                    <a href=\"grid.html\">Grid</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-sitemap fa-fw\"></i>
                  Multi-Level Dropdown<span class=\"fa arrow\"></span>
                </a>
                <ul class=\"nav nav-second-level\">
                  <li>
                    <a href=\"#\">Second Level Item</a>
                  </li>
                  <li>
                    <a href=\"#\">Second Level Item</a>
                  </li>
                  <li>
                    <a href=\"#\">Third Level
                      <span class=\"fa arrow\"></span>
                    </a>
                    <ul class=\"nav nav-third-level\">
                      <li>
                        <a href=\"#\">Third Level Item</a>
                      </li>
                      <li>
                        <a href=\"#\">Third Level Item</a>
                      </li>
                      <li>
                        <a href=\"#\">Third Level Item</a>
                      </li>
                      <li>
                        <a href=\"#\">Third Level Item</a>
                      </li>
                    </ul>
                    <!-- /.nav-third-level -->
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-files-o fa-fw\"></i>
                  Sample Pages<span class=\"fa arrow\"></span>
                </a>
                <ul class=\"nav nav-second-level\">
                  <li>
                    <a href=\"blank.html\">Blank Page</a>
                  </li>
                  <li>
                    <a href=\"login.html\">Login Page</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>
      
        ";
        // line 412
        $this->displayBlock('body', $context, $blocks);
        // line 413
        echo "

      <!-- /.panel-body -->
      <div class=\"panel-footer\">
        <div class=\"input-group\">
          <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\"/>
          <span class=\"input-group-btn\">
            <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
              Send
            </button>
          </span>
        </div>
      </div>
      <!-- /.panel-footer -->
    </div>
    <!-- /.panel .chat-panel -->
  </div>
  <!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
";
        // line 438
        $this->displayBlock('javascripts', $context, $blocks);
        // line 457
        echo "
</body>

</html>
";
        
        $__internal_a409652a4d04d811d2c2888f7e5fde75b124b82b2f75ed31c0dd39fde70170d6->leave($__internal_a409652a4d04d811d2c2888f7e5fde75b124b82b2f75ed31c0dd39fde70170d6_prof);

        
        $__internal_b20030e1bfff2ec3e245d8ad2e2fc2aae45d17618ccc6d5de48d3524acfd5936->leave($__internal_b20030e1bfff2ec3e245d8ad2e2fc2aae45d17618ccc6d5de48d3524acfd5936_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e82c97befb79371b2ee14d7cc4830130281990cd0aa713550f24875455b1d4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82c97befb79371b2ee14d7cc4830130281990cd0aa713550f24875455b1d4b1->enter($__internal_e82c97befb79371b2ee14d7cc4830130281990cd0aa713550f24875455b1d4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ca42dc37db861f77681ca6868abdf5ee291945d51048c2adcef8525a0fda3179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca42dc37db861f77681ca6868abdf5ee291945d51048c2adcef8525a0fda3179->enter($__internal_ca42dc37db861f77681ca6868abdf5ee291945d51048c2adcef8525a0fda3179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
      <!-- Bootstrap Core CSS -->
      <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

      <!-- MetisMenu CSS -->
      <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

      <!-- Custom CSS -->
      <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

      <!-- Morris Charts CSS -->
      <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

      <!-- Custom Fonts -->
      <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        
        $__internal_ca42dc37db861f77681ca6868abdf5ee291945d51048c2adcef8525a0fda3179->leave($__internal_ca42dc37db861f77681ca6868abdf5ee291945d51048c2adcef8525a0fda3179_prof);

        
        $__internal_e82c97befb79371b2ee14d7cc4830130281990cd0aa713550f24875455b1d4b1->leave($__internal_e82c97befb79371b2ee14d7cc4830130281990cd0aa713550f24875455b1d4b1_prof);

    }

    // line 412
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdb24281fe554e12c95fa041c57cbcdb6a6f614c3cca6c2c141c979e3a3246cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb24281fe554e12c95fa041c57cbcdb6a6f614c3cca6c2c141c979e3a3246cf->enter($__internal_fdb24281fe554e12c95fa041c57cbcdb6a6f614c3cca6c2c141c979e3a3246cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91315a56e71aa61be5c7ec698c2958fbd2a942607e3a81066b142d8af11aed0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91315a56e71aa61be5c7ec698c2958fbd2a942607e3a81066b142d8af11aed0e->enter($__internal_91315a56e71aa61be5c7ec698c2958fbd2a942607e3a81066b142d8af11aed0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91315a56e71aa61be5c7ec698c2958fbd2a942607e3a81066b142d8af11aed0e->leave($__internal_91315a56e71aa61be5c7ec698c2958fbd2a942607e3a81066b142d8af11aed0e_prof);

        
        $__internal_fdb24281fe554e12c95fa041c57cbcdb6a6f614c3cca6c2c141c979e3a3246cf->leave($__internal_fdb24281fe554e12c95fa041c57cbcdb6a6f614c3cca6c2c141c979e3a3246cf_prof);

    }

    // line 438
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ed8f06b78543a202a0175ba67c4d7dd8d645365ca27e2a7c88d55a60234933d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed8f06b78543a202a0175ba67c4d7dd8d645365ca27e2a7c88d55a60234933d->enter($__internal_9ed8f06b78543a202a0175ba67c4d7dd8d645365ca27e2a7c88d55a60234933d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_28c558b1252c1fda25324c8c214519b621959829b67ba3676c2f001a16cc0ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c558b1252c1fda25324c8c214519b621959829b67ba3676c2f001a16cc0ddc->enter($__internal_28c558b1252c1fda25324c8c214519b621959829b67ba3676c2f001a16cc0ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 439
        echo "
<!-- jQuery -->
<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/data/morris-data.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_28c558b1252c1fda25324c8c214519b621959829b67ba3676c2f001a16cc0ddc->leave($__internal_28c558b1252c1fda25324c8c214519b621959829b67ba3676c2f001a16cc0ddc_prof);

        
        $__internal_9ed8f06b78543a202a0175ba67c4d7dd8d645365ca27e2a7c88d55a60234933d->leave($__internal_9ed8f06b78543a202a0175ba67c4d7dd8d645365ca27e2a7c88d55a60234933d_prof);

    }

    public function getTemplateName()
    {
        return "base.admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  584 => 455,  578 => 452,  574 => 451,  570 => 450,  564 => 447,  558 => 444,  552 => 441,  548 => 439,  539 => 438,  522 => 412,  510 => 28,  504 => 25,  498 => 22,  492 => 19,  486 => 16,  482 => 14,  473 => 13,  459 => 457,  457 => 438,  430 => 413,  428 => 412,  44 => 30,  42 => 13,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    {% block stylesheets %}

      <!-- Bootstrap Core CSS -->
      <link href=\"{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

      <!-- MetisMenu CSS -->
      <link href=\"{{asset('admin/vendor/metisMenu/metisMenu.min.css')}}\" rel=\"stylesheet\">

      <!-- Custom CSS -->
      <link href=\"{{asset('admin/dist/css/sb-admin-2.css')}}\" rel=\"stylesheet\">

      <!-- Morris Charts CSS -->
      <link href=\"{{asset('admin/vendor/morrisjs/morris.css')}}\" rel=\"stylesheet\">

      <!-- Custom Fonts -->
      <link href=\"{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    {% endblock %}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script> <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script> <![endif]-->

  </head>


  <body>

    <div id=\"wrapper\">

      <!-- Navigation -->
      <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\">SB Admin v2.0</a>
        </div>
        <!-- /.navbar-header -->

        <ul class=\"nav navbar-top-links navbar-right\">
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"fa fa-envelope fa-fw\"></i>
              <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-messages\">
              <li>
                <a href=\"#\">
                  <div>
                    <strong>John Smith</strong>
                    <span class=\"pull-right text-muted\">
                      <em>Yesterday</em>
                    </span>
                  </div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <strong>John Smith</strong>
                    <span class=\"pull-right text-muted\">
                      <em>Yesterday</em>
                    </span>
                  </div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <strong>John Smith</strong>
                    <span class=\"pull-right text-muted\">
                      <em>Yesterday</em>
                    </span>
                  </div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a class=\"text-center\" href=\"#\">
                  <strong>Read All Messages</strong>
                  <i class=\"fa fa-angle-right\"></i>
                </a>
              </li>
            </ul>
            <!-- /.dropdown-messages -->
          </li>
          <!-- /.dropdown -->
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"fa fa-tasks fa-fw\"></i>
              <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-tasks\">
              <li>
                <a href=\"#\">
                  <div>
                    <p>
                      <strong>Task 1</strong>
                      <span class=\"pull-right text-muted\">40% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                      <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                        <span class=\"sr-only\">40% Complete (success)</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <p>
                      <strong>Task 2</strong>
                      <span class=\"pull-right text-muted\">20% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                      <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\">20% Complete</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <p>
                      <strong>Task 3</strong>
                      <span class=\"pull-right text-muted\">60% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                      <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\">60% Complete (warning)</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <p>
                      <strong>Task 4</strong>
                      <span class=\"pull-right text-muted\">80% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                      <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\">80% Complete (danger)</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a class=\"text-center\" href=\"#\">
                  <strong>See All Tasks</strong>
                  <i class=\"fa fa-angle-right\"></i>
                </a>
              </li>
            </ul>
            <!-- /.dropdown-tasks -->
          </li>
          <!-- /.dropdown -->
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"fa fa-bell fa-fw\"></i>
              <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-alerts\">
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-comment fa-fw\"></i>
                    New Comment
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-twitter fa-fw\"></i>
                    3 New Followers
                    <span class=\"pull-right text-muted small\">12 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-envelope fa-fw\"></i>
                    Message Sent
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-tasks fa-fw\"></i>
                    New Task
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"#\">
                  <div>
                    <i class=\"fa fa-upload fa-fw\"></i>
                    Server Rebooted
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                  </div>
                </a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a class=\"text-center\" href=\"#\">
                  <strong>See All Alerts</strong>
                  <i class=\"fa fa-angle-right\"></i>
                </a>
              </li>
            </ul>
            <!-- /.dropdown-alerts -->
          </li>
          <!-- /.dropdown -->
          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"fa fa-user fa-fw\"></i>
              <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-user fa-fw\"></i>
                  User Profile</a>
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-gear fa-fw\"></i>
                  Settings</a>
              </li>
              <li class=\"divider\"></li>
              <li>
                <a href=\"login.html\">
                  <i class=\"fa fa-sign-out fa-fw\"></i>
                  Logout</a>
              </li>
            </ul>
            <!-- /.dropdown-user -->
          </li>
          <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class=\"navbar-default sidebar\" role=\"navigation\">
          <div class=\"sidebar-nav navbar-collapse\">
            <ul class=\"nav\" id=\"side-menu\">
              <li class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\">
                      <i class=\"fa fa-search\"></i>
                    </button>
                  </span>
                </div>
                <!-- /input-group -->
              </li>
              <li>
                <a href=\"index.html\">
                  <i class=\"fa fa-dashboard fa-fw\"></i>
                  Dashboard</a>
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-bar-chart-o fa-fw\"></i>
                  Charts<span class=\"fa arrow\"></span>
                </a>
                <ul class=\"nav nav-second-level\">
                  <li>
                    <a href=\"flot.html\">Flot Charts</a>
                  </li>
                  <li>
                    <a href=\"morris.html\">Morris.js Charts</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href=\"tables.html\">
                  <i class=\"fa fa-table fa-fw\"></i>
                  Tables</a>
              </li>
              <li>
                <a href=\"forms.html\">
                  <i class=\"fa fa-edit fa-fw\"></i>
                  Forms</a>
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-wrench fa-fw\"></i>
                  UI Elements<span class=\"fa arrow\"></span>
                </a>
                <ul class=\"nav nav-second-level\">
                  <li>
                    <a href=\"panels-wells.html\">Panels and Wells</a>
                  </li>
                  <li>
                    <a href=\"buttons.html\">Buttons</a>
                  </li>
                  <li>
                    <a href=\"notifications.html\">Notifications</a>
                  </li>
                  <li>
                    <a href=\"typography.html\">Typography</a>
                  </li>
                  <li>
                    <a href=\"icons.html\">
                      Icons</a>
                  </li>
                  <li>
                    <a href=\"grid.html\">Grid</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-sitemap fa-fw\"></i>
                  Multi-Level Dropdown<span class=\"fa arrow\"></span>
                </a>
                <ul class=\"nav nav-second-level\">
                  <li>
                    <a href=\"#\">Second Level Item</a>
                  </li>
                  <li>
                    <a href=\"#\">Second Level Item</a>
                  </li>
                  <li>
                    <a href=\"#\">Third Level
                      <span class=\"fa arrow\"></span>
                    </a>
                    <ul class=\"nav nav-third-level\">
                      <li>
                        <a href=\"#\">Third Level Item</a>
                      </li>
                      <li>
                        <a href=\"#\">Third Level Item</a>
                      </li>
                      <li>
                        <a href=\"#\">Third Level Item</a>
                      </li>
                      <li>
                        <a href=\"#\">Third Level Item</a>
                      </li>
                    </ul>
                    <!-- /.nav-third-level -->
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
              <li>
                <a href=\"#\">
                  <i class=\"fa fa-files-o fa-fw\"></i>
                  Sample Pages<span class=\"fa arrow\"></span>
                </a>
                <ul class=\"nav nav-second-level\">
                  <li>
                    <a href=\"blank.html\">Blank Page</a>
                  </li>
                  <li>
                    <a href=\"login.html\">Login Page</a>
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>
            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>
      
        {% block body %}{% endblock %}


      <!-- /.panel-body -->
      <div class=\"panel-footer\">
        <div class=\"input-group\">
          <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\"/>
          <span class=\"input-group-btn\">
            <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
              Send
            </button>
          </span>
        </div>
      </div>
      <!-- /.panel-footer -->
    </div>
    <!-- /.panel .chat-panel -->
  </div>
  <!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
{% block javascripts %}

<!-- jQuery -->
<script src=\"{{asset('admin/vendor/jquery/jquery.min.js')}}\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"{{asset('admin/vendor/metisMenu/metisMenu.min.js')}}\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"{{asset('admin/vendor/raphael/raphael.min.js')}}\"></script>
<script src=\"{{asset('admin/vendor/morrisjs/morris.min.js')}}\"></script>
<script src=\"{{asset('admin/data/morris-data.js')}}\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"{{asset('admin/dist/js/sb-admin-2.js')}}\"></script>
{% endblock %}

</body>

</html>
", "base.admin.html.twig", "/home/vincent/plateform/app/Resources/views/base.admin.html.twig");
    }
}
