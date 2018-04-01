<?php

/* userAside.html.twig */
class __TwigTemplate_8becc82407cdf7d4a765765c625de1d13046b245d8f65d7a02e15be2eec89dba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside class=\"main-sidebar\">
\t<!-- sidebar: style can be found in sidebar.less -->
\t<section class=\"sidebar\">
\t\t<!-- search form -->
\t\t<form action=\"#\" method=\"get\" class=\"sidebar-form\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t</span>
\t\t\t</div>
\t\t</form>
\t\t<!-- /.search form -->
\t\t<!-- sidebar menu: : style can be found in sidebar.less -->
\t\t<ul class=\"sidebar-menu\">
\t\t<li class=\"header\">MAIN NAVIGATION</li>
\t\t<li class=\"active treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-dashboard\"></i> <span>JEN</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste Jen</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Cree Jen</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t</ul>
\t</section>
\t<!-- /.sidebar -->
\t</aside>";
    }

    public function getTemplateName()
    {
        return "userAside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 30,  47 => 27,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "userAside.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\views\\userAside.html.twig");
    }
}
