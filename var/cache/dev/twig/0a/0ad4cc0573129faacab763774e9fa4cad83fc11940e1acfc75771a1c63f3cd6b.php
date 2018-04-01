<?php

/* UserBundle:Cartejen:index.html.twig */
class __TwigTemplate_760e96cc34afe4bfe7d2e141d095af8b8864da2880ccc6df54d58e645b03a9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Cartejen:index.html.twig", 1);
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
        $__internal_03e47dc1a8142e291ed1503153b616b7b7be5e83e4b7312619725b9b677f44c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e47dc1a8142e291ed1503153b616b7b7be5e83e4b7312619725b9b677f44c8->enter($__internal_03e47dc1a8142e291ed1503153b616b7b7be5e83e4b7312619725b9b677f44c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Cartejen:index.html.twig"));

        $__internal_69d2118c66e698e004e7e1a06e1b077d7d6f9210e45b73975b07fa04af701b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d2118c66e698e004e7e1a06e1b077d7d6f9210e45b73975b07fa04af701b94->enter($__internal_69d2118c66e698e004e7e1a06e1b077d7d6f9210e45b73975b07fa04af701b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Cartejen:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e47dc1a8142e291ed1503153b616b7b7be5e83e4b7312619725b9b677f44c8->leave($__internal_03e47dc1a8142e291ed1503153b616b7b7be5e83e4b7312619725b9b677f44c8_prof);

        
        $__internal_69d2118c66e698e004e7e1a06e1b077d7d6f9210e45b73975b07fa04af701b94->leave($__internal_69d2118c66e698e004e7e1a06e1b077d7d6f9210e45b73975b07fa04af701b94_prof);

    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        $__internal_780785933b24a71835cd1ddc0a4045a6145ed880bc205513782ac9c21e05ab45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780785933b24a71835cd1ddc0a4045a6145ed880bc205513782ac9c21e05ab45->enter($__internal_780785933b24a71835cd1ddc0a4045a6145ed880bc205513782ac9c21e05ab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_0c0b0916ca9f027d7e863fe8918222661da66c5255ccf78620a4d5f708f904fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0b0916ca9f027d7e863fe8918222661da66c5255ccf78620a4d5f708f904fb->enter($__internal_0c0b0916ca9f027d7e863fe8918222661da66c5255ccf78620a4d5f708f904fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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

        <li class=\"treeview\">
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

        <li class=\"active treeview\">
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
            <li class=\"active\">
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
        
        $__internal_0c0b0916ca9f027d7e863fe8918222661da66c5255ccf78620a4d5f708f904fb->leave($__internal_0c0b0916ca9f027d7e863fe8918222661da66c5255ccf78620a4d5f708f904fb_prof);

        
        $__internal_780785933b24a71835cd1ddc0a4045a6145ed880bc205513782ac9c21e05ab45->leave($__internal_780785933b24a71835cd1ddc0a4045a6145ed880bc205513782ac9c21e05ab45_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_c34510cefe669d0469637716c2733d2ed43f8b7773a44b4585f24e9fd1befae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34510cefe669d0469637716c2733d2ed43f8b7773a44b4585f24e9fd1befae2->enter($__internal_c34510cefe669d0469637716c2733d2ed43f8b7773a44b4585f24e9fd1befae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed2af03c57a832cf1f33999a1b82f6fa7bda25ddc8a0a3ce474d218bbada67c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2af03c57a832cf1f33999a1b82f6fa7bda25ddc8a0a3ce474d218bbada67c8->enter($__internal_ed2af03c57a832cf1f33999a1b82f6fa7bda25ddc8a0a3ce474d218bbada67c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["carteJens"]) ? $context["carteJens"] : $this->getContext($context, "carteJens")));
        foreach ($context['_seq'] as $context["_key"] => $context["carteJen"]) {
            // line 115
            echo "                <tr>
                    <td><a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartejen_show", array("id" => $this->getAttribute($context["carteJen"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carteJen"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["carteJen"], "intitule", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_show", array("id" => $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_edit", array("id" => $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carteJen'], $context['_parent'], $context['loop']);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartejen_new");
        echo "\">Créer un nouveau carte JEN</a>
        </li>
    </ul>
";
        
        $__internal_ed2af03c57a832cf1f33999a1b82f6fa7bda25ddc8a0a3ce474d218bbada67c8->leave($__internal_ed2af03c57a832cf1f33999a1b82f6fa7bda25ddc8a0a3ce474d218bbada67c8_prof);

        
        $__internal_c34510cefe669d0469637716c2733d2ed43f8b7773a44b4585f24e9fd1befae2->leave($__internal_c34510cefe669d0469637716c2733d2ed43f8b7773a44b4585f24e9fd1befae2_prof);

    }

    // line 151
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a5834b1964cbbf3c7fc23df71dcefe0da033c589f1e81f4c6c5d10edc3e885d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5834b1964cbbf3c7fc23df71dcefe0da033c589f1e81f4c6c5d10edc3e885d2->enter($__internal_a5834b1964cbbf3c7fc23df71dcefe0da033c589f1e81f4c6c5d10edc3e885d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3ac0570fb3faea15c4c70de166fd1fb4451e68478195978962b71a438323f41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac0570fb3faea15c4c70de166fd1fb4451e68478195978962b71a438323f41d->enter($__internal_3ac0570fb3faea15c4c70de166fd1fb4451e68478195978962b71a438323f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_3ac0570fb3faea15c4c70de166fd1fb4451e68478195978962b71a438323f41d->leave($__internal_3ac0570fb3faea15c4c70de166fd1fb4451e68478195978962b71a438323f41d_prof);

        
        $__internal_a5834b1964cbbf3c7fc23df71dcefe0da033c589f1e81f4c6c5d10edc3e885d2->leave($__internal_a5834b1964cbbf3c7fc23df71dcefe0da033c589f1e81f4c6c5d10edc3e885d2_prof);

    }

    // line 158
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_951a59cf386cb68f43685b668e414836e790174688a6db3f9405e1f2f1e6e0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951a59cf386cb68f43685b668e414836e790174688a6db3f9405e1f2f1e6e0fc->enter($__internal_951a59cf386cb68f43685b668e414836e790174688a6db3f9405e1f2f1e6e0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a4a82b3ffc4eabc7403e3fda444ff375de089d5fba9187ffc5cd7bf1bf73bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4a82b3ffc4eabc7403e3fda444ff375de089d5fba9187ffc5cd7bf1bf73bc2->enter($__internal_9a4a82b3ffc4eabc7403e3fda444ff375de089d5fba9187ffc5cd7bf1bf73bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 159
        echo "    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
        
        $__internal_9a4a82b3ffc4eabc7403e3fda444ff375de089d5fba9187ffc5cd7bf1bf73bc2->leave($__internal_9a4a82b3ffc4eabc7403e3fda444ff375de089d5fba9187ffc5cd7bf1bf73bc2_prof);

        
        $__internal_951a59cf386cb68f43685b668e414836e790174688a6db3f9405e1f2f1e6e0fc->leave($__internal_951a59cf386cb68f43685b668e414836e790174688a6db3f9405e1f2f1e6e0fc_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Cartejen:index.html.twig";
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

        <li class=\"treeview\">
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

        <li class=\"active treeview\">
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
            <li class=\"active\">
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

            {% for carteJen in carteJens %}
                <tr>
                    <td><a href=\"{{ path('cartejen_show', { 'id': carteJen.id }) }}\">{{ carteJen.id }}</a></td>
                    <td>{{ carteJen.intitule }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('jen_show', { 'id': jen.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('jen_edit', { 'id': jen.id }) }}\">edit</a>
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
            <a href=\"{{ path('cartejen_new') }}\">Créer un nouveau carte JEN</a>
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
", "UserBundle:Cartejen:index.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Cartejen/index.html.twig");
    }
}
