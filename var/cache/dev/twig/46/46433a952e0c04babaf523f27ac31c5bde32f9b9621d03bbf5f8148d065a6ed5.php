<?php

/* UserBundle:Communaute:index.html.twig */
class __TwigTemplate_c1997f3efcaf5b9baac3c69519c00d5d9ea6658be8098c7c602d73877b974d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Communaute:index.html.twig", 1);
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
        $__internal_e67605a4cdc3e6e685dfef16e790c4aaf524acd7b2c6e515d0eabef247626468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67605a4cdc3e6e685dfef16e790c4aaf524acd7b2c6e515d0eabef247626468->enter($__internal_e67605a4cdc3e6e685dfef16e790c4aaf524acd7b2c6e515d0eabef247626468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Communaute:index.html.twig"));

        $__internal_964d9d5aa62482540cd2f8e2d5642f1dae3eb193d3f92fc98b8698974fa3a9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964d9d5aa62482540cd2f8e2d5642f1dae3eb193d3f92fc98b8698974fa3a9f8->enter($__internal_964d9d5aa62482540cd2f8e2d5642f1dae3eb193d3f92fc98b8698974fa3a9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Communaute:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67605a4cdc3e6e685dfef16e790c4aaf524acd7b2c6e515d0eabef247626468->leave($__internal_e67605a4cdc3e6e685dfef16e790c4aaf524acd7b2c6e515d0eabef247626468_prof);

        
        $__internal_964d9d5aa62482540cd2f8e2d5642f1dae3eb193d3f92fc98b8698974fa3a9f8->leave($__internal_964d9d5aa62482540cd2f8e2d5642f1dae3eb193d3f92fc98b8698974fa3a9f8_prof);

    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        $__internal_425ee55b9f2c6c45a501cfed8916d5bb7e061313a2e7a1de6a82b015a80ac91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425ee55b9f2c6c45a501cfed8916d5bb7e061313a2e7a1de6a82b015a80ac91f->enter($__internal_425ee55b9f2c6c45a501cfed8916d5bb7e061313a2e7a1de6a82b015a80ac91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_252711f4f50781be7ed5d6ac4b0e3b0bf0597bbfb35780172f7778e894ca9b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252711f4f50781be7ed5d6ac4b0e3b0bf0597bbfb35780172f7778e894ca9b8b->enter($__internal_252711f4f50781be7ed5d6ac4b0e3b0bf0597bbfb35780172f7778e894ca9b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
            <li>
                <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste des disciplines</a>
            </li>
            </ul>
        </li>

        <li class=\"active treeview\">
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
            <li class=\"active\">
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
        
        $__internal_252711f4f50781be7ed5d6ac4b0e3b0bf0597bbfb35780172f7778e894ca9b8b->leave($__internal_252711f4f50781be7ed5d6ac4b0e3b0bf0597bbfb35780172f7778e894ca9b8b_prof);

        
        $__internal_425ee55b9f2c6c45a501cfed8916d5bb7e061313a2e7a1de6a82b015a80ac91f->leave($__internal_425ee55b9f2c6c45a501cfed8916d5bb7e061313a2e7a1de6a82b015a80ac91f_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_60bccff84ab42b0d3c145a0c1d5f159ec4ccb0a45b3f55626f07f7bb5086c55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bccff84ab42b0d3c145a0c1d5f159ec4ccb0a45b3f55626f07f7bb5086c55a->enter($__internal_60bccff84ab42b0d3c145a0c1d5f159ec4ccb0a45b3f55626f07f7bb5086c55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2e301e42bd8ffd3598277d7a9c6792a09dd9ce96e1034e71d714130950b4ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e301e42bd8ffd3598277d7a9c6792a09dd9ce96e1034e71d714130950b4ace->enter($__internal_a2e301e42bd8ffd3598277d7a9c6792a09dd9ce96e1034e71d714130950b4ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["communautes"]) ? $context["communautes"] : $this->getContext($context, "communautes")));
        foreach ($context['_seq'] as $context["_key"] => $context["communaute"]) {
            // line 115
            echo "                <tr>
                    <td><a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_show", array("id" => $this->getAttribute($context["communaute"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["communaute"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["communaute"], "intitule", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_show", array("id" => $this->getAttribute($context["communaute"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_edit", array("id" => $this->getAttribute($context["communaute"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['communaute'], $context['_parent'], $context['loop']);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_new");
        echo "\">Ajouter un nouveau communaute</a>
        </li>
    </ul>
";
        
        $__internal_a2e301e42bd8ffd3598277d7a9c6792a09dd9ce96e1034e71d714130950b4ace->leave($__internal_a2e301e42bd8ffd3598277d7a9c6792a09dd9ce96e1034e71d714130950b4ace_prof);

        
        $__internal_60bccff84ab42b0d3c145a0c1d5f159ec4ccb0a45b3f55626f07f7bb5086c55a->leave($__internal_60bccff84ab42b0d3c145a0c1d5f159ec4ccb0a45b3f55626f07f7bb5086c55a_prof);

    }

    // line 151
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_78ed6ac3fd0076fed9722cc25a556afecdee9864a956db0369658355b89f7df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ed6ac3fd0076fed9722cc25a556afecdee9864a956db0369658355b89f7df1->enter($__internal_78ed6ac3fd0076fed9722cc25a556afecdee9864a956db0369658355b89f7df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_bb0416c6279fad51b14f6d58fe273b93c2e7674d155547dbd77870a2c5113faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0416c6279fad51b14f6d58fe273b93c2e7674d155547dbd77870a2c5113faf->enter($__internal_bb0416c6279fad51b14f6d58fe273b93c2e7674d155547dbd77870a2c5113faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_bb0416c6279fad51b14f6d58fe273b93c2e7674d155547dbd77870a2c5113faf->leave($__internal_bb0416c6279fad51b14f6d58fe273b93c2e7674d155547dbd77870a2c5113faf_prof);

        
        $__internal_78ed6ac3fd0076fed9722cc25a556afecdee9864a956db0369658355b89f7df1->leave($__internal_78ed6ac3fd0076fed9722cc25a556afecdee9864a956db0369658355b89f7df1_prof);

    }

    // line 158
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c93329ffc07144d23cb108fec91bc2163fb59177dd121440b580de3c04f157d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c93329ffc07144d23cb108fec91bc2163fb59177dd121440b580de3c04f157d->enter($__internal_6c93329ffc07144d23cb108fec91bc2163fb59177dd121440b580de3c04f157d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c5625851671d53df4c40ebd7a4a213658883dc784941c42d8c97d6cc57c59461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5625851671d53df4c40ebd7a4a213658883dc784941c42d8c97d6cc57c59461->enter($__internal_c5625851671d53df4c40ebd7a4a213658883dc784941c42d8c97d6cc57c59461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 159
        echo "    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
        
        $__internal_c5625851671d53df4c40ebd7a4a213658883dc784941c42d8c97d6cc57c59461->leave($__internal_c5625851671d53df4c40ebd7a4a213658883dc784941c42d8c97d6cc57c59461_prof);

        
        $__internal_6c93329ffc07144d23cb108fec91bc2163fb59177dd121440b580de3c04f157d->leave($__internal_6c93329ffc07144d23cb108fec91bc2163fb59177dd121440b580de3c04f157d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Communaute:index.html.twig";
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
            <li>
                <a href=\"{{ path('discipline_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste des disciplines</a>
            </li>
            </ul>
        </li>

        <li class=\"active treeview\">
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
            <li class=\"active\">
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

            {% for communaute in communautes %}
                <tr>
                    <td><a href=\"{{ path('communaute_show', { 'id': communaute.id }) }}\">{{ communaute.id }}</a></td>
                    <td>{{ communaute.intitule }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('communaute_show', { 'id': communaute.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('communaute_edit', { 'id': communaute.id }) }}\">edit</a>
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
            <a href=\"{{ path('communaute_new') }}\">Ajouter un nouveau communaute</a>
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
", "UserBundle:Communaute:index.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Communaute/index.html.twig");
    }
}
