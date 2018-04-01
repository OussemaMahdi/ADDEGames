<?php

/* base.html.twig */
class __TwigTemplate_54760178e2afd20d65f9beb08cc368901cb954cbe7d422100dbffaa4bf820fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f064b00b9e72325d3d2ca900139ddae0f990c99a21985d4cac315304412012f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f064b00b9e72325d3d2ca900139ddae0f990c99a21985d4cac315304412012f4->enter($__internal_f064b00b9e72325d3d2ca900139ddae0f990c99a21985d4cac315304412012f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_26dcf39a196702e5888cfd34ed98f875677e01123d10caf4c65327f8fa0b7684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26dcf39a196702e5888cfd34ed98f875677e01123d10caf4c65327f8fa0b7684->enter($__internal_26dcf39a196702e5888cfd34ed98f875677e01123d10caf4c65327f8fa0b7684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t\t<head>
\t\t\t\t<meta charset=\"UTF-8\">
\t\t\t\t<title></title>
\t\t\t\t<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
\t\t\t\t

\t\t\t\t<!-- Bootstrap 3.3.6 -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t\t<!-- Font Awesome -->
\t\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
\t\t\t\t<!-- Ionicons -->
\t\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
\t\t\t\t<!-- Theme style -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
\t\t\t\t<!-- AdminLTE Skins. Choose a skin from the css/skins
\t\t\t\t\t folder instead of downloading all of them to reduce the load. -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
\t\t\t\t<!-- iCheck -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
\t\t\t\t<!-- jvectormap -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
\t\t\t\t<!-- Date Picker -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
\t\t\t\t<!-- Daterange picker -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
\t\t\t\t<!-- bootstrap wysihtml5 - text editor -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

\t\t\t\t<!-- Morris chart -->
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/morris/morris.css"), "html", null, true);
        echo "\">
\t\t

\t\t\t\t";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
\t\t\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t\t\t<!--[if lt IE 9]>
\t\t\t\t\t\t\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t\t\t\t\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
\t\t\t\t<![endif]-->
\t\t</head>

\t\t<body class=\"hold-transition skin-blue sidebar-mini\">
\t\t<div class=\"wrapper\">

\t\t\t<header class=\"main-header\">
\t\t\t\t<!-- Logo -->
\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t<!-- mini logo for sidebar mini 50x50 pixels -->
\t\t\t\t\t<span class=\"logo-mini\"><b>J</b>L</span>
\t\t\t\t\t<!-- logo for regular state and mobile devices -->
\t\t\t\t\t<span class=\"logo-lg\"><b>JEN</b>Lab</span>
\t\t\t\t</a>
\t\t\t\t<!-- Header Navbar: style can be found in header.less -->
\t\t\t\t<nav class=\"navbar navbar-static-top\">
\t\t\t\t\t<!-- Sidebar toggle button-->
\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"navbar-custom-menu\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<!-- Messages: style can be found in dropdown.less-->
\t\t\t\t\t\t\t<li class=\"dropdown messages-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">1</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 1 message</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><!-- start message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/img/avatar2.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tUser test
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Texte du message de test</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end message -->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\"><a href=\"#\">See All Messages</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- Notifications: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown notifications-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">1</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 1 notification</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users text-aqua\"></i> Notification statique de test
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\"><a href=\"#\">View all</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- User Account: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown user user-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/img/avatar5.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<!-- User image -->
\t\t\t\t\t\t\t\t\t<li class=\"user-header\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/img/avatar5.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- Menu Footer-->
\t\t\t\t\t\t\t\t\t<li class=\"user-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- Control Sidebar Toggle Button -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t\t<!-- Left side column. contains the logo and sidebar -->

\t\t\t";
        // line 147
        $this->displayBlock('aside', $context, $blocks);
        // line 149
        echo "
\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t<section class=\"content-header\">
\t\t\t\t\t<h1 class=\"text-light-blue\">
\t\t\t\t\t\tBienvenue
\t\t\t\t\t</h1>
\t\t\t\t</section>

\t\t\t\t<!-- Main content -->
\t\t\t\t<section class=\"content\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 162
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "
\t\t\t\t</section>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->
\t\t\t<footer class=\"main-footer\">
\t\t\t\t<div class=\"pull-right hidden-xs\">
\t\t\t\t\t<b>Version</b> 1.0
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside class=\"control-sidebar control-sidebar-dark\">
\t\t\t\t<!-- Create the tabs -->
\t\t\t\t<ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
\t\t\t\t\t<li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t<li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
\t\t\t\t</ul>
\t\t\t\t<!-- Tab panes -->
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<!-- Home tab content -->
\t\t\t\t\t<div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
\t\t\t\t\t\t<h3 class=\"control-sidebar-heading\">Recent Activity</h3>
\t\t\t\t\t\t<ul class=\"control-sidebar-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

\t\t\t\t\t\t\t\t\t\t<p>Will be 23 on April 24th</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-user bg-yellow\"></i>

\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

\t\t\t\t\t\t\t\t\t\t<p>New phone +1(800)555-1234</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

\t\t\t\t\t\t\t\t\t\t<p>nora@example.com</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

\t\t\t\t\t\t\t\t\t\t<p>Execution time 5 seconds</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- /.control-sidebar-menu -->

\t\t\t\t\t\t<h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
\t\t\t\t\t\t<ul class=\"control-sidebar-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\t\tCustom Template Design
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger pull-right\">70%</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xxs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\t\tUpdate Resume
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success pull-right\">95%</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xxs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\t\tLaravel Integration
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning pull-right\">50%</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xxs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\t\tBack End Framework
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary pull-right\">68%</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xxs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- /.control-sidebar-menu -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.tab-pane -->
\t\t\t\t\t<!-- Stats tab content -->
\t\t\t\t\t<div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
\t\t\t\t\t<!-- /.tab-pane -->
\t\t\t\t\t<!-- Settings tab content -->
\t\t\t\t\t<div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<h3 class=\"control-sidebar-heading\">General Settings</h3>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tReport panel usage
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\" checked>
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSome information about this general settings option
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tAllow mail redirect
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\" checked>
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tOther sets of options are available
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tExpose author name in posts
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\" checked>
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tAllow the user to show his name in blog posts
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<h3 class=\"control-sidebar-heading\">Chat Settings</h3>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tShow me as online
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\" checked>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tTurn off notifications
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\">
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tDelete chat history
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.tab-pane -->
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->
\t\t\t<!-- Add the sidebar's background. This div must be placed
\t\t\t\t\t immediately after the control sidebar -->
\t\t\t<div class=\"control-sidebar-bg\"></div>
\t\t</div>
\t\t<!-- ./wrapper -->


\t\t<!-- jQuery 2.2.3 -->
\t\t<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- jQuery UI 1.11.4 -->
\t\t<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t<script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button);
\t\t</script>
\t\t<!-- Bootstrap 3.3.6 -->
\t\t<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Sparkline -->
\t\t<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- jvectormap -->
\t\t<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- jQuery Knob Chart -->
\t\t<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- daterangepicker -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
\t\t<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- datepicker -->
\t\t<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Bootstrap WYSIHTML5 -->
\t\t<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Slimscroll -->
\t\t<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- FastClick -->
\t\t<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/js/demo.js"), "html", null, true);
        echo "\"></script>

\t\t";
        // line 406
        $this->displayBlock('javascript', $context, $blocks);
        // line 407
        echo "\t</body>
</html>";
        
        $__internal_f064b00b9e72325d3d2ca900139ddae0f990c99a21985d4cac315304412012f4->leave($__internal_f064b00b9e72325d3d2ca900139ddae0f990c99a21985d4cac315304412012f4_prof);

        
        $__internal_26dcf39a196702e5888cfd34ed98f875677e01123d10caf4c65327f8fa0b7684->leave($__internal_26dcf39a196702e5888cfd34ed98f875677e01123d10caf4c65327f8fa0b7684_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18397c58d316e7e439312ff3102085adf8a8c6b0f6260e5c1d0359dbf10912a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18397c58d316e7e439312ff3102085adf8a8c6b0f6260e5c1d0359dbf10912a3->enter($__internal_18397c58d316e7e439312ff3102085adf8a8c6b0f6260e5c1d0359dbf10912a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2e5325f114e11bc08f29aaf98a344a2ae3c7e66d6dab21b3e437cef5e8873ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e5325f114e11bc08f29aaf98a344a2ae3c7e66d6dab21b3e437cef5e8873ea->enter($__internal_f2e5325f114e11bc08f29aaf98a344a2ae3c7e66d6dab21b3e437cef5e8873ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2e5325f114e11bc08f29aaf98a344a2ae3c7e66d6dab21b3e437cef5e8873ea->leave($__internal_f2e5325f114e11bc08f29aaf98a344a2ae3c7e66d6dab21b3e437cef5e8873ea_prof);

        
        $__internal_18397c58d316e7e439312ff3102085adf8a8c6b0f6260e5c1d0359dbf10912a3->leave($__internal_18397c58d316e7e439312ff3102085adf8a8c6b0f6260e5c1d0359dbf10912a3_prof);

    }

    // line 147
    public function block_aside($context, array $blocks = array())
    {
        $__internal_63da6ccf458352b17f4876395f246667d50e6a801e2a486425ddf1aef0309573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63da6ccf458352b17f4876395f246667d50e6a801e2a486425ddf1aef0309573->enter($__internal_63da6ccf458352b17f4876395f246667d50e6a801e2a486425ddf1aef0309573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_e0e603e6f38bb6b0b2304e5fa4a60c6426368d679fd41b56b320fc633b6e1c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e603e6f38bb6b0b2304e5fa4a60c6426368d679fd41b56b320fc633b6e1c43->enter($__internal_e0e603e6f38bb6b0b2304e5fa4a60c6426368d679fd41b56b320fc633b6e1c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 148
        echo "\t\t\t";
        
        $__internal_e0e603e6f38bb6b0b2304e5fa4a60c6426368d679fd41b56b320fc633b6e1c43->leave($__internal_e0e603e6f38bb6b0b2304e5fa4a60c6426368d679fd41b56b320fc633b6e1c43_prof);

        
        $__internal_63da6ccf458352b17f4876395f246667d50e6a801e2a486425ddf1aef0309573->leave($__internal_63da6ccf458352b17f4876395f246667d50e6a801e2a486425ddf1aef0309573_prof);

    }

    // line 162
    public function block_body($context, array $blocks = array())
    {
        $__internal_b51a9a380c6521fa15b0614b0aa339d031d466c7e23888b9830371d3bc90b6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51a9a380c6521fa15b0614b0aa339d031d466c7e23888b9830371d3bc90b6cc->enter($__internal_b51a9a380c6521fa15b0614b0aa339d031d466c7e23888b9830371d3bc90b6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4433b97f54686b8c03c94e666579dcd29db2cb5d86c42fabab1b86376d7262c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4433b97f54686b8c03c94e666579dcd29db2cb5d86c42fabab1b86376d7262c->enter($__internal_f4433b97f54686b8c03c94e666579dcd29db2cb5d86c42fabab1b86376d7262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 163
        echo "\t\t\t\t\t";
        
        $__internal_f4433b97f54686b8c03c94e666579dcd29db2cb5d86c42fabab1b86376d7262c->leave($__internal_f4433b97f54686b8c03c94e666579dcd29db2cb5d86c42fabab1b86376d7262c_prof);

        
        $__internal_b51a9a380c6521fa15b0614b0aa339d031d466c7e23888b9830371d3bc90b6cc->leave($__internal_b51a9a380c6521fa15b0614b0aa339d031d466c7e23888b9830371d3bc90b6cc_prof);

    }

    // line 406
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8623a7843f26884ae5e53e93238fd7cf0c3c6e96acbb8d08cd98467395f89a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8623a7843f26884ae5e53e93238fd7cf0c3c6e96acbb8d08cd98467395f89a26->enter($__internal_8623a7843f26884ae5e53e93238fd7cf0c3c6e96acbb8d08cd98467395f89a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_9bac57d75bb32e4b7ba0223cb9a5d6c4fed51cacac4159aeb1589b36cbb7d43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bac57d75bb32e4b7ba0223cb9a5d6c4fed51cacac4159aeb1589b36cbb7d43e->enter($__internal_9bac57d75bb32e4b7ba0223cb9a5d6c4fed51cacac4159aeb1589b36cbb7d43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_9bac57d75bb32e4b7ba0223cb9a5d6c4fed51cacac4159aeb1589b36cbb7d43e->leave($__internal_9bac57d75bb32e4b7ba0223cb9a5d6c4fed51cacac4159aeb1589b36cbb7d43e_prof);

        
        $__internal_8623a7843f26884ae5e53e93238fd7cf0c3c6e96acbb8d08cd98467395f89a26->leave($__internal_8623a7843f26884ae5e53e93238fd7cf0c3c6e96acbb8d08cd98467395f89a26_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 406,  585 => 163,  576 => 162,  566 => 148,  557 => 147,  540 => 35,  529 => 407,  527 => 406,  522 => 404,  517 => 402,  512 => 400,  507 => 398,  502 => 396,  497 => 394,  492 => 392,  486 => 389,  481 => 387,  477 => 386,  472 => 384,  466 => 381,  455 => 373,  244 => 164,  242 => 162,  227 => 149,  225 => 147,  207 => 132,  201 => 129,  193 => 124,  185 => 119,  181 => 118,  139 => 79,  94 => 36,  92 => 35,  86 => 32,  80 => 29,  75 => 27,  70 => 25,  65 => 23,  60 => 21,  55 => 19,  49 => 16,  40 => 10,  29 => 1,);
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
<html>
\t\t<head>
\t\t\t\t<meta charset=\"UTF-8\">
\t\t\t\t<title></title>
\t\t\t\t<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
\t\t\t\t

\t\t\t\t<!-- Bootstrap 3.3.6 -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\">
\t\t\t\t<!-- Font Awesome -->
\t\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
\t\t\t\t<!-- Ionicons -->
\t\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
\t\t\t\t<!-- Theme style -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/dist/css/AdminLTE.min.css') }}\">
\t\t\t\t<!-- AdminLTE Skins. Choose a skin from the css/skins
\t\t\t\t\t folder instead of downloading all of them to reduce the load. -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/dist/css/skins/_all-skins.min.css') }}\">
\t\t\t\t<!-- iCheck -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/iCheck/flat/blue.css') }}\">
\t\t\t\t<!-- jvectormap -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}\">
\t\t\t\t<!-- Date Picker -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/datepicker/datepicker3.css') }}\">
\t\t\t\t<!-- Daterange picker -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}\">
\t\t\t\t<!-- bootstrap wysihtml5 - text editor -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">

\t\t\t\t<!-- Morris chart -->
\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/morris/morris.css') }}\">
\t\t

\t\t\t\t{% block stylesheets %}{% endblock %}

\t\t\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t\t\t<!--[if lt IE 9]>
\t\t\t\t\t\t\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t\t\t\t\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
\t\t\t\t<![endif]-->
\t\t</head>

\t\t<body class=\"hold-transition skin-blue sidebar-mini\">
\t\t<div class=\"wrapper\">

\t\t\t<header class=\"main-header\">
\t\t\t\t<!-- Logo -->
\t\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t\t<!-- mini logo for sidebar mini 50x50 pixels -->
\t\t\t\t\t<span class=\"logo-mini\"><b>J</b>L</span>
\t\t\t\t\t<!-- logo for regular state and mobile devices -->
\t\t\t\t\t<span class=\"logo-lg\"><b>JEN</b>Lab</span>
\t\t\t\t</a>
\t\t\t\t<!-- Header Navbar: style can be found in header.less -->
\t\t\t\t<nav class=\"navbar navbar-static-top\">
\t\t\t\t\t<!-- Sidebar toggle button-->
\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"navbar-custom-menu\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<!-- Messages: style can be found in dropdown.less-->
\t\t\t\t\t\t\t<li class=\"dropdown messages-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">1</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 1 message</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><!-- start message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/dist/img/avatar2.png') }}\" class=\"img-circle\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tUser test
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Texte du message de test</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end message -->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\"><a href=\"#\">See All Messages</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- Notifications: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown notifications-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">1</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 1 notification</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users text-aqua\"></i> Notification statique de test
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\"><a href=\"#\">View all</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- User Account: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown user user-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/dist/img/avatar5.png') }}\" class=\"user-image\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">{{ app.user.username }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<!-- User image -->
\t\t\t\t\t\t\t\t\t<li class=\"user-header\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/dist/img/avatar5.png') }}\" class=\"img-circle\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- Menu Footer-->
\t\t\t\t\t\t\t\t\t<li class=\"user-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('fos_user_profile_show') }}\" class=\"btn btn-default btn-flat\">Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default btn-flat\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- Control Sidebar Toggle Button -->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t\t<!-- Left side column. contains the logo and sidebar -->

\t\t\t{% block aside %}
\t\t\t{% endblock %}

\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div class=\"content-wrapper\">
\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t<section class=\"content-header\">
\t\t\t\t\t<h1 class=\"text-light-blue\">
\t\t\t\t\t\tBienvenue
\t\t\t\t\t</h1>
\t\t\t\t</section>

\t\t\t\t<!-- Main content -->
\t\t\t\t<section class=\"content\">
\t\t\t\t\t
\t\t\t\t\t{% block body %}
\t\t\t\t\t{% endblock %}

\t\t\t\t</section>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->
\t\t\t<footer class=\"main-footer\">
\t\t\t\t<div class=\"pull-right hidden-xs\">
\t\t\t\t\t<b>Version</b> 1.0
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside class=\"control-sidebar control-sidebar-dark\">
\t\t\t\t<!-- Create the tabs -->
\t\t\t\t<ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
\t\t\t\t\t<li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t<li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
\t\t\t\t</ul>
\t\t\t\t<!-- Tab panes -->
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<!-- Home tab content -->
\t\t\t\t\t<div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
\t\t\t\t\t\t<h3 class=\"control-sidebar-heading\">Recent Activity</h3>
\t\t\t\t\t\t<ul class=\"control-sidebar-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

\t\t\t\t\t\t\t\t\t\t<p>Will be 23 on April 24th</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-user bg-yellow\"></i>

\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

\t\t\t\t\t\t\t\t\t\t<p>New phone +1(800)555-1234</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

\t\t\t\t\t\t\t\t\t\t<p>nora@example.com</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

\t\t\t\t\t\t\t\t\t<div class=\"menu-info\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

\t\t\t\t\t\t\t\t\t\t<p>Execution time 5 seconds</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- /.control-sidebar-menu -->

\t\t\t\t\t\t<h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
\t\t\t\t\t\t<ul class=\"control-sidebar-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\t\tCustom Template Design
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger pull-right\">70%</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xxs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\t\tUpdate Resume
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success pull-right\">95%</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xxs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\t\tLaravel Integration
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning pull-right\">50%</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xxs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<h4 class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\t\tBack End Framework
\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary pull-right\">68%</span>
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xxs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- /.control-sidebar-menu -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.tab-pane -->
\t\t\t\t\t<!-- Stats tab content -->
\t\t\t\t\t<div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
\t\t\t\t\t<!-- /.tab-pane -->
\t\t\t\t\t<!-- Settings tab content -->
\t\t\t\t\t<div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<h3 class=\"control-sidebar-heading\">General Settings</h3>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tReport panel usage
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\" checked>
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSome information about this general settings option
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tAllow mail redirect
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\" checked>
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tOther sets of options are available
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tExpose author name in posts
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\" checked>
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tAllow the user to show his name in blog posts
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<h3 class=\"control-sidebar-heading\">Chat Settings</h3>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tShow me as online
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\" checked>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tTurn off notifications
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"pull-right\">
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-sidebar-subheading\">
\t\t\t\t\t\t\t\t\tDelete chat history
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.form-group -->
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.tab-pane -->
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->
\t\t\t<!-- Add the sidebar's background. This div must be placed
\t\t\t\t\t immediately after the control sidebar -->
\t\t\t<div class=\"control-sidebar-bg\"></div>
\t\t</div>
\t\t<!-- ./wrapper -->


\t\t<!-- jQuery 2.2.3 -->
\t\t<script src=\"{{ asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}\"></script>
\t\t<!-- jQuery UI 1.11.4 -->
\t\t<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t<script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button);
\t\t</script>
\t\t<!-- Bootstrap 3.3.6 -->
\t\t<script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
\t\t
\t\t<!-- Sparkline -->
\t\t<script src=\"{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}\"></script>
\t\t<!-- jvectormap -->
\t\t<script src=\"{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>
\t\t<!-- jQuery Knob Chart -->
\t\t<script src=\"{{ asset('assets/plugins/knob/jquery.knob.js') }}\"></script>
\t\t<!-- daterangepicker -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
\t\t<script src=\"{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}\"></script>
\t\t<!-- datepicker -->
\t\t<script src=\"{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}\"></script>
\t\t<!-- Bootstrap WYSIHTML5 -->
\t\t<script src=\"{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}\"></script>
\t\t<!-- Slimscroll -->
\t\t<script src=\"{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}\"></script>
\t\t<!-- FastClick -->
\t\t<script src=\"{{ asset('assets/plugins/fastclick/fastclick.js') }}\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"{{ asset('assets/dist/js/app.min.js') }}\"></script>
\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"{{ asset('assets/dist/js/demo.js') }}\"></script>

\t\t{% block javascript %}{% endblock %}
\t</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\views\\base.html.twig");
    }
}
