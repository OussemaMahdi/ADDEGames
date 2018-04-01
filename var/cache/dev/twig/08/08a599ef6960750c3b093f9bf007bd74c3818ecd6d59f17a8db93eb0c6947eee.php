<?php

/* UserBundle:Discipline:index.html.twig */
class __TwigTemplate_b478ac49e3c5fbb5bc793603c6b724145a999898b3609798db44fa2efadddfbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Discipline:index.html.twig", 1);
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
        $__internal_d140764008801213e21f3c0add14e8645c8aa304e2b16fcdc6b15e612a2bef82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d140764008801213e21f3c0add14e8645c8aa304e2b16fcdc6b15e612a2bef82->enter($__internal_d140764008801213e21f3c0add14e8645c8aa304e2b16fcdc6b15e612a2bef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Discipline:index.html.twig"));

        $__internal_82a9acc19c243314a660446d0d7a308b5a3c8edf454e6840070b80aa8a77f7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a9acc19c243314a660446d0d7a308b5a3c8edf454e6840070b80aa8a77f7aa->enter($__internal_82a9acc19c243314a660446d0d7a308b5a3c8edf454e6840070b80aa8a77f7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Discipline:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d140764008801213e21f3c0add14e8645c8aa304e2b16fcdc6b15e612a2bef82->leave($__internal_d140764008801213e21f3c0add14e8645c8aa304e2b16fcdc6b15e612a2bef82_prof);

        
        $__internal_82a9acc19c243314a660446d0d7a308b5a3c8edf454e6840070b80aa8a77f7aa->leave($__internal_82a9acc19c243314a660446d0d7a308b5a3c8edf454e6840070b80aa8a77f7aa_prof);

    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        $__internal_cc452c184a02a1906559f256ca5cd8bf498bfccf36f3b3213ee2fce1fe8e6ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc452c184a02a1906559f256ca5cd8bf498bfccf36f3b3213ee2fce1fe8e6ad8->enter($__internal_cc452c184a02a1906559f256ca5cd8bf498bfccf36f3b3213ee2fce1fe8e6ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_cd70dc0b032428167a491e36bced5a9ba06efb2289d4ff7d7e478ce24d6ea988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd70dc0b032428167a491e36bced5a9ba06efb2289d4ff7d7e478ce24d6ea988->enter($__internal_cd70dc0b032428167a491e36bced5a9ba06efb2289d4ff7d7e478ce24d6ea988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
            <li>
                <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un discipline</a>
            </li>
            <li class=\"active\">
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
        
        $__internal_cd70dc0b032428167a491e36bced5a9ba06efb2289d4ff7d7e478ce24d6ea988->leave($__internal_cd70dc0b032428167a491e36bced5a9ba06efb2289d4ff7d7e478ce24d6ea988_prof);

        
        $__internal_cc452c184a02a1906559f256ca5cd8bf498bfccf36f3b3213ee2fce1fe8e6ad8->leave($__internal_cc452c184a02a1906559f256ca5cd8bf498bfccf36f3b3213ee2fce1fe8e6ad8_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_02dbf544e6fc849da2421fbd2703ead6f475f1c9ba036f672d2bb20d493b32f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02dbf544e6fc849da2421fbd2703ead6f475f1c9ba036f672d2bb20d493b32f9->enter($__internal_02dbf544e6fc849da2421fbd2703ead6f475f1c9ba036f672d2bb20d493b32f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f0057a645195ea7f81abff9bc49d4afa38c33259a0f3ea42e6db5139b60ec5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0057a645195ea7f81abff9bc49d4afa38c33259a0f3ea42e6db5139b60ec5c->enter($__internal_5f0057a645195ea7f81abff9bc49d4afa38c33259a0f3ea42e6db5139b60ec5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 97
        echo "    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Les cartes JEN</h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
            <!--<table id=\"example2\" class=\"table table-bordered table-hover\">-->
            <thead>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disciplines"]) ? $context["disciplines"] : $this->getContext($context, "disciplines")));
        foreach ($context['_seq'] as $context["_key"] => $context["discipline"]) {
            // line 115
            echo "                <tr>
                    <td><a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_show", array("id" => $this->getAttribute($context["discipline"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discipline"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["discipline"], "intitule", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_show", array("id" => $this->getAttribute($context["discipline"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_edit", array("id" => $this->getAttribute($context["discipline"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discipline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <ul>
        <li>
            <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_new");
        echo "\">Ajouter un nouveau discipline</a>
        </li>
    </ul>
";
        
        $__internal_5f0057a645195ea7f81abff9bc49d4afa38c33259a0f3ea42e6db5139b60ec5c->leave($__internal_5f0057a645195ea7f81abff9bc49d4afa38c33259a0f3ea42e6db5139b60ec5c_prof);

        
        $__internal_02dbf544e6fc849da2421fbd2703ead6f475f1c9ba036f672d2bb20d493b32f9->leave($__internal_02dbf544e6fc849da2421fbd2703ead6f475f1c9ba036f672d2bb20d493b32f9_prof);

    }

    // line 151
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9c900871c648f9411e87a54a897bb312c0db12839e4921035da656a4141a5f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c900871c648f9411e87a54a897bb312c0db12839e4921035da656a4141a5f3d->enter($__internal_9c900871c648f9411e87a54a897bb312c0db12839e4921035da656a4141a5f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_07ae3eb493c9ed76b7c4ffe1af94ed7717aadb2881443eeb52a8f2e070168112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ae3eb493c9ed76b7c4ffe1af94ed7717aadb2881443eeb52a8f2e070168112->enter($__internal_07ae3eb493c9ed76b7c4ffe1af94ed7717aadb2881443eeb52a8f2e070168112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 152
        echo "    <!-- DataTables -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/tables.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_07ae3eb493c9ed76b7c4ffe1af94ed7717aadb2881443eeb52a8f2e070168112->leave($__internal_07ae3eb493c9ed76b7c4ffe1af94ed7717aadb2881443eeb52a8f2e070168112_prof);

        
        $__internal_9c900871c648f9411e87a54a897bb312c0db12839e4921035da656a4141a5f3d->leave($__internal_9c900871c648f9411e87a54a897bb312c0db12839e4921035da656a4141a5f3d_prof);

    }

    // line 158
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d03994fda7df8fb552b593c6d9fc5d39588b1d1caa9a164cfa1912276689f2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03994fda7df8fb552b593c6d9fc5d39588b1d1caa9a164cfa1912276689f2fe->enter($__internal_d03994fda7df8fb552b593c6d9fc5d39588b1d1caa9a164cfa1912276689f2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_af701ad13d962fa3191abd37e2998b58f9a0c7907721051c5083ec30f851faf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af701ad13d962fa3191abd37e2998b58f9a0c7907721051c5083ec30f851faf5->enter($__internal_af701ad13d962fa3191abd37e2998b58f9a0c7907721051c5083ec30f851faf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 159
        echo "    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
        
        $__internal_af701ad13d962fa3191abd37e2998b58f9a0c7907721051c5083ec30f851faf5->leave($__internal_af701ad13d962fa3191abd37e2998b58f9a0c7907721051c5083ec30f851faf5_prof);

        
        $__internal_d03994fda7df8fb552b593c6d9fc5d39588b1d1caa9a164cfa1912276689f2fe->leave($__internal_d03994fda7df8fb552b593c6d9fc5d39588b1d1caa9a164cfa1912276689f2fe_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Discipline:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 160,  315 => 159,  306 => 158,  294 => 155,  290 => 154,  286 => 153,  283 => 152,  274 => 151,  260 => 146,  242 => 130,  230 => 124,  224 => 121,  217 => 117,  211 => 116,  208 => 115,  204 => 114,  185 => 97,  176 => 96,  155 => 84,  149 => 81,  132 => 67,  126 => 64,  109 => 50,  103 => 47,  86 => 33,  80 => 30,  52 => 4,  43 => 3,  11 => 1,);
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
            <li>
                <a href=\"{{ path('discipline_new') }}\"><i class=\"fa fa-circle-o\"></i> Ajouter un discipline</a>
            </li>
            <li class=\"active\">
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
    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Les cartes JEN</h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
            <!--<table id=\"example2\" class=\"table table-bordered table-hover\">-->
            <thead>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            {% for discipline in disciplines %}
                <tr>
                    <td><a href=\"{{ path('discipline_show', { 'id': discipline.id }) }}\">{{ discipline.id }}</a></td>
                    <td>{{ discipline.intitule }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('discipline_show', { 'id': discipline.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('discipline_edit', { 'id': discipline.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <ul>
        <li>
            <a href=\"{{ path('discipline_new') }}\">Ajouter un nouveau discipline</a>
        </li>
    </ul>
{% endblock %}

{% block javascript %}
    <!-- DataTables -->
    <script src=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/public/tables.js') }}\"></script>   
{% endblock %}

{% block stylesheets %}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}\">
{% endblock %}

", "UserBundle:Discipline:index.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Discipline/index.html.twig");
    }
}
