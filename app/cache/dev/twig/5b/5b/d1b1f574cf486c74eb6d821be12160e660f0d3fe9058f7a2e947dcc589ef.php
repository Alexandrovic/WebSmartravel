<?php

/* TravelAgenceBundle::backoffice.html.twig */
class __TwigTemplate_5b5bd1b1f574cf486c74eb6d821be12160e660f0d3fe9058f7a2e947dcc589ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Tables - SmarTravel</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Add custom CSS here -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  </head>

  <body>

    <div id=\"wrapper\">

      <!-- Sidebar -->
      <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\">SB Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
          <ul class=\"nav navbar-nav side-nav\">
            <li><a href=\"index.html\"><i class=\"fa fa-dashboard\"></i> gestion des comptes</a></li>
            <li><a href=\"charts.html\"><i class=\"fa fa-bar-chart-o\"></i> confirmation des résevations</a></li>
            <li class=\"active\"><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tables.html"), "html", null, true);
        echo "\"><i class=\"fa fa-table\"></i> statistiques</a></li>
            
           
          </ul>

          <ul class=\"nav navbar-nav navbar-right navbar-user\">
            <li class=\"dropdown messages-dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> Messages <span class=\"badge\">7</span> <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li class=\"dropdown-header\">7 New Messages</li>
                <li class=\"message-preview\">
                  <a href=\"#\">
                    <span class=\"avatar\"><img src=\"http://placehold.it/50x50\"></span>
                    <span class=\"name\">John Smith:</span>
                    <span class=\"message\">Hey there, I wanted to ask you something...</span>
                    <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class=\"divider\"></li>
                <li class=\"message-preview\">
                  <a href=\"#\">
                    <span class=\"avatar\"><img src=\"http://placehold.it/50x50\"></span>
                    <span class=\"name\">John Smith:</span>
                    <span class=\"message\">Hey there, I wanted to ask you something...</span>
                    <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class=\"divider\"></li>
                <li class=\"message-preview\">
                  <a href=\"#\">
                    <span class=\"avatar\"><img src=\"http://placehold.it/50x50\"></span>
                    <span class=\"name\">John Smith:</span>
                    <span class=\"message\">Hey there, I wanted to ask you something...</span>
                    <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">View Inbox <span class=\"badge\">7</span></a></li>
              </ul>
            </li>
            <li class=\"dropdown alerts-dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> Alerts <span class=\"badge\">3</span> <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Default <span class=\"label label-default\">Default</span></a></li>
                <li><a href=\"#\">Primary <span class=\"label label-primary\">Primary</span></a></li>
                <li><a href=\"#\">Success <span class=\"label label-success\">Success</span></a></li>
                <li><a href=\"#\">Info <span class=\"label label-info\">Info</span></a></li>
                <li><a href=\"#\">Warning <span class=\"label label-warning\">Warning</span></a></li>
                <li><a href=\"#\">Danger <span class=\"label label-danger\">Danger</span></a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">View All</a></li>
              </ul>
            </li>
            <li class=\"dropdown user-dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Smith <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a></li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> Inbox <span class=\"badge\">7</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\"><i class=\"fa fa-power-off\"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id=\"page-wrapper\">

        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h1>Tables <small>Sort Your Data</small></h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"index.html\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
              <li class=\"active\"><i class=\"fa fa-table\"></i> Tables</li>
            </ol>
            <div class=\"alert alert-info alert-dismissable\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
              We're using <a class=\"alert-link\" href=\"http://tablesorter.com/docs/\">Tablesorter 2.0</a> for the sort function on the tables. Read the documentation for more customization options or feel free to use something else!
            </div>
          </div>
        </div><!-- /.row -->

        <div class=\"row\">
          <div class=\"col-lg-6\">
            <h2>Bordered Table</h2>
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover tablesorter\">
                <thead>
                  <tr>
                    <th>Page <i class=\"fa fa-sort\"></i></th>
                    <th>Visits <i class=\"fa fa-sort\"></i></th>
                    <th>% New Visits <i class=\"fa fa-sort\"></i></th>
                    <th>Revenue <i class=\"fa fa-sort\"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>/index.html</td>
                    <td>1265</td>
                    <td>32.3%</td>
                    <td>\$321.33</td>
                  </tr>
                  <tr>
                    <td>/about.html</td>
                    <td>261</td>
                    <td>33.3%</td>
                    <td>\$234.12</td>
                  </tr>
                  <tr>
                    <td>/sales.html</td>
                    <td>665</td>
                    <td>21.3%</td>
                    <td>\$16.34</td>
                  </tr>
                  <tr>
                    <td>/blog.html</td>
                    <td>9516</td>
                    <td>89.3%</td>
                    <td>\$1644.43</td>
                  </tr>
                  <tr>
                    <td>/404.html</td>
                    <td>23</td>
                    <td>34.3%</td>
                    <td>\$23.52</td>
                  </tr>
                  <tr>
                    <td>/services.html</td>
                    <td>421</td>
                    <td>60.3%</td>
                    <td>\$724.32</td>
                  </tr>
                  <tr>
                    <td>/blog/post.html</td>
                    <td>1233</td>
                    <td>93.2%</td>
                    <td>\$126.34</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
         

       
         
          

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Page Specific Plugins -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tablesorter/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tablesorter/tables.js"), "html", null, true);
        echo "\"></script>

  </body>
  ";
        // line 203
        $this->displayBlock('body', $context, $blocks);
        // line 205
        echo "</html>";
    }

    // line 203
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TravelAgenceBundle::backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 203,  250 => 205,  248 => 203,  242 => 200,  238 => 199,  232 => 196,  228 => 195,  71 => 41,  43 => 16,  39 => 15,  33 => 12,  20 => 1,);
    }
}
