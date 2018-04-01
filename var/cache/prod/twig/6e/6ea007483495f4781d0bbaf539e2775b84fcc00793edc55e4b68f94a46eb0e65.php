<?php

/* @User/User/index.html.twig */
class __TwigTemplate_4b3cbf185d64492f2098be21f1adfeac8706610011ea338751b44829194ef2a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/User/index.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        // line 4
        echo "\t<aside class=\"main-sidebar\">
\t\t<!-- sidebar: style can be found in sidebar.less -->
\t\t<section class=\"sidebar\">
\t\t\t<!-- Sidebar user panel -->
\t\t\t<div class=\"user-panel\">
\t\t\t\t<div class=\"pull-left image\">
\t\t\t\t\t<!--<img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" /> -->
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-left info\">
\t\t\t\t\t<p>Oussema Mahdi</p>

\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- search form -->
\t\t\t<form action=\"#\" method=\"get\" class=\"sidebar-form\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t<button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<!-- /.search form -->
\t\t\t<!-- sidebar menu: : style can be found in sidebar.less -->
\t\t\t<ul class=\"sidebar-menu\">
\t\t\t\t<li class=\"header\">NAVIGATION PRINCIPALE</li>


\t\t\t\t<li class=\"active\">
\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-th\"></i> <span>Gerer les utilisateurs</span>
\t\t\t\t\t\t<span class=\"pull-right-container\">
\t\t\t\t\t\t\t<small class=\"label pull-right bg-green\">new</small>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</li>


\t\t\t</ul>
\t\t</section>
\t\t<!-- /.sidebar -->
\t</aside>
";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "\t<div class=\"box\">
\t\t<div class=\"box-header\">
\t\t\t<h3 class=\"box-title\">Utilisateurs</h3>
\t\t</div>
\t\t<!-- /.box-header -->
\t\t<div class=\"box-body\">
\t\t\t<table id=\"example1\" class=\"table table-bordered table-striped\">
\t\t\t<!--<table id=\"example2\" class=\"table table-bordered table-hover\">-->
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nom d'utilisateur</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>Date inscription</th>
\t\t\t\t<th>Action</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>

\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 72
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "dateInscription", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
\t\t\t</tbody>
\t\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nom d'utilisateur</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>Date inscription</th>
\t\t\t\t<th>Action</th>
\t\t\t</tr>
\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t<!-- /.box-body -->
\t</div>
\t<!-- /.box -->
\t<ul>
\t\t<li>
\t\t\t<a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
\t\t</li>
\t</ul>
";
    }

    // line 116
    public function block_javascript($context, array $blocks = array())
    {
        // line 117
        echo "\t<!-- DataTables -->
\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/tables.js"), "html", null, true);
        echo "\"></script>
\t
";
    }

    // line 124
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 125
        echo "\t<!-- DataTables -->
\t<link rel=\"stylesheet\" href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@User/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 126,  218 => 125,  215 => 124,  208 => 120,  204 => 119,  200 => 118,  197 => 117,  194 => 116,  186 => 111,  164 => 91,  152 => 85,  146 => 82,  139 => 78,  135 => 77,  131 => 76,  127 => 75,  123 => 74,  117 => 73,  114 => 72,  110 => 71,  87 => 50,  84 => 49,  66 => 34,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/User/index.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle\\Resources\\views\\User\\index.html.twig");
    }
}
