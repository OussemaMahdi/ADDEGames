<?php

/* userAside.html.twig */
class __TwigTemplate_541570b65ed8241e459857d059412cf03fbd97cdf60049e28efce88dc632e3fb extends Twig_Template
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
        $__internal_c06b654d6e15f98c1d5a6a751cecac333d07808f0af81be533905746f0070e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06b654d6e15f98c1d5a6a751cecac333d07808f0af81be533905746f0070e37->enter($__internal_c06b654d6e15f98c1d5a6a751cecac333d07808f0af81be533905746f0070e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userAside.html.twig"));

        $__internal_29dfb3013b4dd337d4b8ebb99f01c58e574055d86d5362f7b62d2b709691c394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dfb3013b4dd337d4b8ebb99f01c58e574055d86d5362f7b62d2b709691c394->enter($__internal_29dfb3013b4dd337d4b8ebb99f01c58e574055d86d5362f7b62d2b709691c394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userAside.html.twig"));

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
\t\t<li class=\"treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-dashboard\"></i> <span>JEN</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Nouveau Jen</a>
\t\t\t</li>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste Jen</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>

\t\t<li class=\"treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-pie-chart\"></i> <span>Discipline</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un discipline</a>
\t\t\t</li>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste des disciplines</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>

\t\t<li class=\"treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-users\"></i> <span>Communauté</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un communauté</a>
\t\t\t</li>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste des communautés</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>

\t\t<li class=\"treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-money\"></i> <span>Carte JEN</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartejen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un carte JEN</a>
\t\t\t</li>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartejen_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste des cartes Jen</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>


\t\t</ul>
\t</section>
\t<!-- /.sidebar -->
\t</aside>";
        
        $__internal_c06b654d6e15f98c1d5a6a751cecac333d07808f0af81be533905746f0070e37->leave($__internal_c06b654d6e15f98c1d5a6a751cecac333d07808f0af81be533905746f0070e37_prof);

        
        $__internal_29dfb3013b4dd337d4b8ebb99f01c58e574055d86d5362f7b62d2b709691c394->leave($__internal_29dfb3013b4dd337d4b8ebb99f01c58e574055d86d5362f7b62d2b709691c394_prof);

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
        return array (  128 => 81,  122 => 78,  105 => 64,  99 => 61,  82 => 47,  76 => 44,  59 => 30,  53 => 27,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar\">
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
\t\t<li class=\"treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-dashboard\"></i> <span>JEN</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('jen_new') }}\"><i class=\"fa fa-circle-o\"></i> Nouveau Jen</a>
\t\t\t</li>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"{{ path('jen_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste Jen</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>

\t\t<li class=\"treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-pie-chart\"></i> <span>Discipline</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('discipline_new') }}\"><i class=\"fa fa-circle-o\"></i> Ajouter un discipline</a>
\t\t\t</li>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"{{ path('discipline_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste des disciplines</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>

\t\t<li class=\"treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-users\"></i> <span>Communauté</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('communaute_new') }}\"><i class=\"fa fa-circle-o\"></i> Ajouter un communauté</a>
\t\t\t</li>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"{{ path('communaute_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste des communautés</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>

\t\t<li class=\"treeview\">
\t\t\t<a href=\"#\">
\t\t\t<i class=\"fa fa-money\"></i> <span>Carte JEN</span>
\t\t\t<span class=\"pull-right-container\">
\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t</span>
\t\t\t</a>
\t\t\t<ul class=\"treeview-menu\">
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('cartejen_new') }}\"><i class=\"fa fa-circle-o\"></i> Ajouter un carte JEN</a>
\t\t\t</li>
\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"{{ path('cartejen_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste des cartes Jen</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</li>


\t\t</ul>
\t</section>
\t<!-- /.sidebar -->
\t</aside>", "userAside.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\views\\userAside.html.twig");
    }
}
