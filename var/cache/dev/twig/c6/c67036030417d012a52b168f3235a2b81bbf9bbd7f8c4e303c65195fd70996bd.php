<?php

/* UserBundle:Jen:index.html.twig */
class __TwigTemplate_f6829fbb47ea695ed60002bd94e8b7f950cb4de3b073c9ce16e859adcce571e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Jen:index.html.twig", 1);
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
        $__internal_6125138a0bf14fb3a5beceec3833a50733a2be070a0ecbf59b1e58522c8860a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6125138a0bf14fb3a5beceec3833a50733a2be070a0ecbf59b1e58522c8860a4->enter($__internal_6125138a0bf14fb3a5beceec3833a50733a2be070a0ecbf59b1e58522c8860a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Jen:index.html.twig"));

        $__internal_d1101957447e4ba3f0e63c9ff12da28d9f11f2be6a8673d71bd1fd9ff8a74b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1101957447e4ba3f0e63c9ff12da28d9f11f2be6a8673d71bd1fd9ff8a74b6c->enter($__internal_d1101957447e4ba3f0e63c9ff12da28d9f11f2be6a8673d71bd1fd9ff8a74b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Jen:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6125138a0bf14fb3a5beceec3833a50733a2be070a0ecbf59b1e58522c8860a4->leave($__internal_6125138a0bf14fb3a5beceec3833a50733a2be070a0ecbf59b1e58522c8860a4_prof);

        
        $__internal_d1101957447e4ba3f0e63c9ff12da28d9f11f2be6a8673d71bd1fd9ff8a74b6c->leave($__internal_d1101957447e4ba3f0e63c9ff12da28d9f11f2be6a8673d71bd1fd9ff8a74b6c_prof);

    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        $__internal_c2467338545d78796cc819aa956941d736a27b8b779086b6af4ee3f4c9d86894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2467338545d78796cc819aa956941d736a27b8b779086b6af4ee3f4c9d86894->enter($__internal_c2467338545d78796cc819aa956941d736a27b8b779086b6af4ee3f4c9d86894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_dae5bd416f2f69555dd9da456e123eb0ab105e0117a94171a7fbbf2b51f0a612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae5bd416f2f69555dd9da456e123eb0ab105e0117a94171a7fbbf2b51f0a612->enter($__internal_dae5bd416f2f69555dd9da456e123eb0ab105e0117a94171a7fbbf2b51f0a612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        <li class=\"active treeview\">
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
            <li class=\"active\">
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
        
        $__internal_dae5bd416f2f69555dd9da456e123eb0ab105e0117a94171a7fbbf2b51f0a612->leave($__internal_dae5bd416f2f69555dd9da456e123eb0ab105e0117a94171a7fbbf2b51f0a612_prof);

        
        $__internal_c2467338545d78796cc819aa956941d736a27b8b779086b6af4ee3f4c9d86894->leave($__internal_c2467338545d78796cc819aa956941d736a27b8b779086b6af4ee3f4c9d86894_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_8059e05fd834ad9d6e74f1a2c943c102d1ac6836a17f56dbfeed4de0fc9603b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8059e05fd834ad9d6e74f1a2c943c102d1ac6836a17f56dbfeed4de0fc9603b6->enter($__internal_8059e05fd834ad9d6e74f1a2c943c102d1ac6836a17f56dbfeed4de0fc9603b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94e928e7ca2ce06102fe77630f05e94a068720e578bfb68ded518c95227284c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e928e7ca2ce06102fe77630f05e94a068720e578bfb68ded518c95227284c8->enter($__internal_94e928e7ca2ce06102fe77630f05e94a068720e578bfb68ded518c95227284c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 97
        echo "    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Jeux Epistemiques Numeriques</h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
            <!--<table id=\"example2\" class=\"table table-bordered table-hover\">-->
            <thead>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Nbenseignants</th>
                <th>Nbetudiants</th>
                <th>Nbacteurs</th>
                <th>Outils</th>
                <th>Dispositifs</th>
                <th>Synopsys</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jens"]) ? $context["jens"] : $this->getContext($context, "jens")));
        foreach ($context['_seq'] as $context["_key"] => $context["jen"]) {
            // line 121
            echo "                <tr>
                    <td><a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_show", array("id" => $this->getAttribute($context["jen"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "intitule", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "nbEnseignants", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "nbEtudiants", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "nbActeurs", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "outils", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "dispositifs", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "synopsys", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_show", array("id" => $this->getAttribute($context["jen"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_edit", array("id" => $this->getAttribute($context["jen"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Nbenseignants</th>
                <th>Nbetudiants</th>
                <th>Nbacteurs</th>
                <th>Outils</th>
                <th>Dispositifs</th>
                <th>Synopsys</th>
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
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_new");
        echo "\">Create a new jen</a>
        </li>
    </ul>
";
        
        $__internal_94e928e7ca2ce06102fe77630f05e94a068720e578bfb68ded518c95227284c8->leave($__internal_94e928e7ca2ce06102fe77630f05e94a068720e578bfb68ded518c95227284c8_prof);

        
        $__internal_8059e05fd834ad9d6e74f1a2c943c102d1ac6836a17f56dbfeed4de0fc9603b6->leave($__internal_8059e05fd834ad9d6e74f1a2c943c102d1ac6836a17f56dbfeed4de0fc9603b6_prof);

    }

    // line 169
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8b424f2618ac008f949b732d70199ea8d11ba708fcdfb133b7c5bd09e6231755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b424f2618ac008f949b732d70199ea8d11ba708fcdfb133b7c5bd09e6231755->enter($__internal_8b424f2618ac008f949b732d70199ea8d11ba708fcdfb133b7c5bd09e6231755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_27441917addfe229c26297ecb2d80e45d46bf0f7273ee8f26e2d4b6afe7448e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27441917addfe229c26297ecb2d80e45d46bf0f7273ee8f26e2d4b6afe7448e5->enter($__internal_27441917addfe229c26297ecb2d80e45d46bf0f7273ee8f26e2d4b6afe7448e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 170
        echo "    <!-- DataTables -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/tables.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_27441917addfe229c26297ecb2d80e45d46bf0f7273ee8f26e2d4b6afe7448e5->leave($__internal_27441917addfe229c26297ecb2d80e45d46bf0f7273ee8f26e2d4b6afe7448e5_prof);

        
        $__internal_8b424f2618ac008f949b732d70199ea8d11ba708fcdfb133b7c5bd09e6231755->leave($__internal_8b424f2618ac008f949b732d70199ea8d11ba708fcdfb133b7c5bd09e6231755_prof);

    }

    // line 176
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06376ed4a90dbb8dea3f8b2afdab7aa716799fd9ebf3985f03be8176ef2081cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06376ed4a90dbb8dea3f8b2afdab7aa716799fd9ebf3985f03be8176ef2081cb->enter($__internal_06376ed4a90dbb8dea3f8b2afdab7aa716799fd9ebf3985f03be8176ef2081cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7f1af49e8a018e63e33f7a5ffc3765f44dc69f28fcd4d1066c98854490191fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1af49e8a018e63e33f7a5ffc3765f44dc69f28fcd4d1066c98854490191fb8->enter($__internal_7f1af49e8a018e63e33f7a5ffc3765f44dc69f28fcd4d1066c98854490191fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 177
        echo "    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
        
        $__internal_7f1af49e8a018e63e33f7a5ffc3765f44dc69f28fcd4d1066c98854490191fb8->leave($__internal_7f1af49e8a018e63e33f7a5ffc3765f44dc69f28fcd4d1066c98854490191fb8_prof);

        
        $__internal_06376ed4a90dbb8dea3f8b2afdab7aa716799fd9ebf3985f03be8176ef2081cb->leave($__internal_06376ed4a90dbb8dea3f8b2afdab7aa716799fd9ebf3985f03be8176ef2081cb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Jen:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 178,  351 => 177,  342 => 176,  330 => 173,  326 => 172,  322 => 171,  319 => 170,  310 => 169,  296 => 164,  272 => 142,  260 => 136,  254 => 133,  247 => 129,  243 => 128,  239 => 127,  235 => 126,  231 => 125,  227 => 124,  223 => 123,  217 => 122,  214 => 121,  210 => 120,  185 => 97,  176 => 96,  155 => 84,  149 => 81,  132 => 67,  126 => 64,  109 => 50,  103 => 47,  86 => 33,  80 => 30,  52 => 4,  43 => 3,  11 => 1,);
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
        <li class=\"active treeview\">
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
            <li class=\"active\">
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
            <h3 class=\"box-title\">Jeux Epistemiques Numeriques</h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
            <!--<table id=\"example2\" class=\"table table-bordered table-hover\">-->
            <thead>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Nbenseignants</th>
                <th>Nbetudiants</th>
                <th>Nbacteurs</th>
                <th>Outils</th>
                <th>Dispositifs</th>
                <th>Synopsys</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            {% for jen in jens %}
                <tr>
                    <td><a href=\"{{ path('jen_show', { 'id': jen.id }) }}\">{{ jen.id }}</a></td>
                    <td>{{ jen.intitule }}</td>
                    <td>{{ jen.nbEnseignants }}</td>
                    <td>{{ jen.nbEtudiants }}</td>
                    <td>{{ jen.nbActeurs }}</td>
                    <td>{{ jen.outils }}</td>
                    <td>{{ jen.dispositifs }}</td>
                    <td>{{ jen.synopsys }}</td>
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
                <th>Nbenseignants</th>
                <th>Nbetudiants</th>
                <th>Nbacteurs</th>
                <th>Outils</th>
                <th>Dispositifs</th>
                <th>Synopsys</th>
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
            <a href=\"{{ path('jen_new') }}\">Create a new jen</a>
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
", "UserBundle:Jen:index.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Jen/index.html.twig");
    }
}
