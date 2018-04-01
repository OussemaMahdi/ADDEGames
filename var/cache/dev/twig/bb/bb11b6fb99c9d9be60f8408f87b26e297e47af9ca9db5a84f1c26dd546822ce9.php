<?php

/* UserBundle:Discipline:new.html.twig */
class __TwigTemplate_1cdff9439b1ac59587c01554e7e3ed670fbf4e22a89daf5689b66702cbd388bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Discipline:new.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa6c8d456472a5ae72a787405f2b79a7e8bbec61380322445be0da3a68f5f44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6c8d456472a5ae72a787405f2b79a7e8bbec61380322445be0da3a68f5f44e->enter($__internal_fa6c8d456472a5ae72a787405f2b79a7e8bbec61380322445be0da3a68f5f44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Discipline:new.html.twig"));

        $__internal_2812846778b8de2e63874ab584066d5aa6b13bdb9e563db7af21a0feaf5fa343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2812846778b8de2e63874ab584066d5aa6b13bdb9e563db7af21a0feaf5fa343->enter($__internal_2812846778b8de2e63874ab584066d5aa6b13bdb9e563db7af21a0feaf5fa343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Discipline:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6c8d456472a5ae72a787405f2b79a7e8bbec61380322445be0da3a68f5f44e->leave($__internal_fa6c8d456472a5ae72a787405f2b79a7e8bbec61380322445be0da3a68f5f44e_prof);

        
        $__internal_2812846778b8de2e63874ab584066d5aa6b13bdb9e563db7af21a0feaf5fa343->leave($__internal_2812846778b8de2e63874ab584066d5aa6b13bdb9e563db7af21a0feaf5fa343_prof);

    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        $__internal_cc98a8f02918cafd142d977a349df387f83004fd667df45b59b29a5348ee5f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc98a8f02918cafd142d977a349df387f83004fd667df45b59b29a5348ee5f78->enter($__internal_cc98a8f02918cafd142d977a349df387f83004fd667df45b59b29a5348ee5f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_64ba5059f91f49272ac222d2b767afaafb7caa6652d1538b169fff067417ca83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ba5059f91f49272ac222d2b767afaafb7caa6652d1538b169fff067417ca83->enter($__internal_64ba5059f91f49272ac222d2b767afaafb7caa6652d1538b169fff067417ca83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 4
        echo "    <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- search form -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                    <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                    </button>
                    </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
        <li class=\"header\">MAIN NAVIGATION</li>
        <li class=\"treeview\">
            <a href=\"#\">
            <i class=\"fa fa-dashboard\"></i> <span>JEN</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            </a>
            <ul class=\"treeview-menu\">
            <li>
                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Nouveau Jen</a>
            </li>
            <li>
                <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste Jen</a>
            </li>
            </ul>
        </li>

        <li class=\"active treeview\">
            <a href=\"#\">
            <i class=\"fa fa-pie-chart\"></i> <span>Discipline</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            </a>
            <ul class=\"treeview-menu\">
            <li class=\"active\">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un discipline</a>
            </li>
            <li>
                <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste des disciplines</a>
            </li>
            </ul>
        </li>

        <li class=\"treeview\">
            <a href=\"#\">
            <i class=\"fa fa-users\"></i> <span>Communauté</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            </a>
            <ul class=\"treeview-menu\">
            <li>
                <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un communauté</a>
            </li>
            <li>
                <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste des communautés</a>
            </li>
            </ul>
        </li>

        <li class=\"treeview\">
            <a href=\"#\">
            <i class=\"fa fa-money\"></i> <span>Carte JEN</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            </a>
            <ul class=\"treeview-menu\">
            <li>
                <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartejen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un carte JEN</a>
            </li>
            <li>
                <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartejen_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste des cartes Jen</a>
            </li>
            </ul>
        </li>


        </ul>
    </section>
    <!-- /.sidebar -->
    </aside>
";
        
        $__internal_64ba5059f91f49272ac222d2b767afaafb7caa6652d1538b169fff067417ca83->leave($__internal_64ba5059f91f49272ac222d2b767afaafb7caa6652d1538b169fff067417ca83_prof);

        
        $__internal_cc98a8f02918cafd142d977a349df387f83004fd667df45b59b29a5348ee5f78->leave($__internal_cc98a8f02918cafd142d977a349df387f83004fd667df45b59b29a5348ee5f78_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_adbdb15bdcaafb24e16eeb217b068106ccc074b159b009571fcaa5fbc3d722ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbdb15bdcaafb24e16eeb217b068106ccc074b159b009571fcaa5fbc3d722ef->enter($__internal_adbdb15bdcaafb24e16eeb217b068106ccc074b159b009571fcaa5fbc3d722ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc43dcaae394a82c1bcad6f816930665db9d80699a137bf194198be8b9682fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc43dcaae394a82c1bcad6f816930665db9d80699a137bf194198be8b9682fcc->enter($__internal_bc43dcaae394a82c1bcad6f816930665db9d80699a137bf194198be8b9682fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 97
        echo "    <h1>Discipline creation</h1>

    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bc43dcaae394a82c1bcad6f816930665db9d80699a137bf194198be8b9682fcc->leave($__internal_bc43dcaae394a82c1bcad6f816930665db9d80699a137bf194198be8b9682fcc_prof);

        
        $__internal_adbdb15bdcaafb24e16eeb217b068106ccc074b159b009571fcaa5fbc3d722ef->leave($__internal_adbdb15bdcaafb24e16eeb217b068106ccc074b159b009571fcaa5fbc3d722ef_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Discipline:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 106,  196 => 102,  191 => 100,  187 => 99,  183 => 97,  174 => 96,  153 => 84,  147 => 81,  130 => 67,  124 => 64,  107 => 50,  101 => 47,  84 => 33,  78 => 30,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block aside %}
    <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- search form -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                    <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                    </button>
                    </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
        <li class=\"header\">MAIN NAVIGATION</li>
        <li class=\"treeview\">
            <a href=\"#\">
            <i class=\"fa fa-dashboard\"></i> <span>JEN</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            </a>
            <ul class=\"treeview-menu\">
            <li>
                <a href=\"{{ path('jen_new') }}\"><i class=\"fa fa-circle-o\"></i> Nouveau Jen</a>
            </li>
            <li>
                <a href=\"{{ path('jen_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste Jen</a>
            </li>
            </ul>
        </li>

        <li class=\"active treeview\">
            <a href=\"#\">
            <i class=\"fa fa-pie-chart\"></i> <span>Discipline</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            </a>
            <ul class=\"treeview-menu\">
            <li class=\"active\">
                <a href=\"{{ path('discipline_new') }}\"><i class=\"fa fa-circle-o\"></i> Ajouter un discipline</a>
            </li>
            <li>
                <a href=\"{{ path('discipline_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste des disciplines</a>
            </li>
            </ul>
        </li>

        <li class=\"treeview\">
            <a href=\"#\">
            <i class=\"fa fa-users\"></i> <span>Communauté</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            </a>
            <ul class=\"treeview-menu\">
            <li>
                <a href=\"{{ path('communaute_new') }}\"><i class=\"fa fa-circle-o\"></i> Ajouter un communauté</a>
            </li>
            <li>
                <a href=\"{{ path('communaute_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste des communautés</a>
            </li>
            </ul>
        </li>

        <li class=\"treeview\">
            <a href=\"#\">
            <i class=\"fa fa-money\"></i> <span>Carte JEN</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
            </a>
            <ul class=\"treeview-menu\">
            <li>
                <a href=\"{{ path('cartejen_new') }}\"><i class=\"fa fa-circle-o\"></i> Ajouter un carte JEN</a>
            </li>
            <li>
                <a href=\"{{ path('cartejen_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste des cartes Jen</a>
            </li>
            </ul>
        </li>


        </ul>
    </section>
    <!-- /.sidebar -->
    </aside>
{% endblock %}

{% block body %}
    <h1>Discipline creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('discipline_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "UserBundle:Discipline:new.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Discipline/new.html.twig");
    }
}
