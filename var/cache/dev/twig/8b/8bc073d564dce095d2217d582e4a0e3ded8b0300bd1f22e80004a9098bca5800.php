<?php

/* UserBundle:Jen:new.html.twig */
class __TwigTemplate_f6be9aceea47a01a05c834579c02348ad6cd9d6f2eeac28f63680895cf5e50a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Jen:new.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a334e2221e53b575d520f03c41b9d51202b73defe4962d94a99ca3b06c8c51af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a334e2221e53b575d520f03c41b9d51202b73defe4962d94a99ca3b06c8c51af->enter($__internal_a334e2221e53b575d520f03c41b9d51202b73defe4962d94a99ca3b06c8c51af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Jen:new.html.twig"));

        $__internal_f7cee21fbb72da93c6fe1fcfc28068a4f7d60ee17b9eb07ec0d66b94091f61ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cee21fbb72da93c6fe1fcfc28068a4f7d60ee17b9eb07ec0d66b94091f61ac->enter($__internal_f7cee21fbb72da93c6fe1fcfc28068a4f7d60ee17b9eb07ec0d66b94091f61ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Jen:new.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "UserBundle:Form:fields_mission.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a334e2221e53b575d520f03c41b9d51202b73defe4962d94a99ca3b06c8c51af->leave($__internal_a334e2221e53b575d520f03c41b9d51202b73defe4962d94a99ca3b06c8c51af_prof);

        
        $__internal_f7cee21fbb72da93c6fe1fcfc28068a4f7d60ee17b9eb07ec0d66b94091f61ac->leave($__internal_f7cee21fbb72da93c6fe1fcfc28068a4f7d60ee17b9eb07ec0d66b94091f61ac_prof);

    }

    // line 4
    public function block_aside($context, array $blocks = array())
    {
        $__internal_25fdd548c458a58838e720db3ef1f6daace1666a8a6203007dabd0948f4fe050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fdd548c458a58838e720db3ef1f6daace1666a8a6203007dabd0948f4fe050->enter($__internal_25fdd548c458a58838e720db3ef1f6daace1666a8a6203007dabd0948f4fe050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_de2cf9373e6bdac6ffe0e4bf4bfb4639a6e0b3387ab76e11a65fc1fa5cbb4619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2cf9373e6bdac6ffe0e4bf4bfb4639a6e0b3387ab76e11a65fc1fa5cbb4619->enter($__internal_de2cf9373e6bdac6ffe0e4bf4bfb4639a6e0b3387ab76e11a65fc1fa5cbb4619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 5
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
            <li class=\"active\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Nouveau Jen</a>
            </li>
            <li>
                <a href=\"";
        // line 34
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
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un discipline</a>
            </li>
            <li>
                <a href=\"";
        // line 51
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
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un communauté</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 68
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
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartejen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un carte JEN</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 85
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
        
        $__internal_de2cf9373e6bdac6ffe0e4bf4bfb4639a6e0b3387ab76e11a65fc1fa5cbb4619->leave($__internal_de2cf9373e6bdac6ffe0e4bf4bfb4639a6e0b3387ab76e11a65fc1fa5cbb4619_prof);

        
        $__internal_25fdd548c458a58838e720db3ef1f6daace1666a8a6203007dabd0948f4fe050->leave($__internal_25fdd548c458a58838e720db3ef1f6daace1666a8a6203007dabd0948f4fe050_prof);

    }

    // line 97
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_126f001a878a084a185dadf86cf8d1db1f7c5680a9fa657b322fbf7633f43f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126f001a878a084a185dadf86cf8d1db1f7c5680a9fa657b322fbf7633f43f2a->enter($__internal_126f001a878a084a185dadf86cf8d1db1f7c5680a9fa657b322fbf7633f43f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78251b541eeb47d78dd78bdccf14e208bf85aac611682e56b45938d430dbf667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78251b541eeb47d78dd78bdccf14e208bf85aac611682e56b45938d430dbf667->enter($__internal_78251b541eeb47d78dd78bdccf14e208bf85aac611682e56b45938d430dbf667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 98
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<link href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/css/wizardphases.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/css/wizardmissions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_78251b541eeb47d78dd78bdccf14e208bf85aac611682e56b45938d430dbf667->leave($__internal_78251b541eeb47d78dd78bdccf14e208bf85aac611682e56b45938d430dbf667_prof);

        
        $__internal_126f001a878a084a185dadf86cf8d1db1f7c5680a9fa657b322fbf7633f43f2a->leave($__internal_126f001a878a084a185dadf86cf8d1db1f7c5680a9fa657b322fbf7633f43f2a_prof);

    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
        $__internal_11e0ab9b5356db454a8ca2a7ad93f983c37ce2d49076470aaabb600883c4dd61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e0ab9b5356db454a8ca2a7ad93f983c37ce2d49076470aaabb600883c4dd61->enter($__internal_11e0ab9b5356db454a8ca2a7ad93f983c37ce2d49076470aaabb600883c4dd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90dc927dec150069df36eff0252ff1511d9c3237f04ad2f2842254b5c85ca2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90dc927dec150069df36eff0252ff1511d9c3237f04ad2f2842254b5c85ca2c7->enter($__internal_90dc927dec150069df36eff0252ff1511d9c3237f04ad2f2842254b5c85ca2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "\t<div class=\"box box-primary\">
\t<div class=\"box-header with-border\">
\t\t<h3 class=\"box-title\">Création d'un jeu épistémique numerique</h3>
\t</div>
\t<!-- /.box-header -->
\t<!-- form start -->
\t";
        // line 111
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"box-body\">
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'label');
        echo "
\t\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("placeholder" => "intitulé")));
        echo "
\t\t\t\t";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createurs", array()), 'label');
        echo "
\t\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createurs", array()), 'widget', array("attr" => array("class" => "form-control js-example-placeholder-multiple")));
        echo "
\t\t\t\t";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createurs", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group hide\">
\t\t\t\t";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<!-- /.box-body -->
\t\t<div class=\"box-footer\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t</div>
\t";
        // line 131
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
";
        
        $__internal_90dc927dec150069df36eff0252ff1511d9c3237f04ad2f2842254b5c85ca2c7->leave($__internal_90dc927dec150069df36eff0252ff1511d9c3237f04ad2f2842254b5c85ca2c7_prof);

        
        $__internal_11e0ab9b5356db454a8ca2a7ad93f983c37ce2d49076470aaabb600883c4dd61->leave($__internal_11e0ab9b5356db454a8ca2a7ad93f983c37ce2d49076470aaabb600883c4dd61_prof);

    }

    // line 135
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ba8d3aea1f7f6f56debdf50ff384488c1733d5b55f4f20658923664e36b3f568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8d3aea1f7f6f56debdf50ff384488c1733d5b55f4f20658923664e36b3f568->enter($__internal_ba8d3aea1f7f6f56debdf50ff384488c1733d5b55f4f20658923664e36b3f568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_84ac181cf046f45ef9629fb618983a01ee27e106c449138dd16c0e6644d0f19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ac181cf046f45ef9629fb618983a01ee27e106c449138dd16c0e6644d0f19b->enter($__internal_84ac181cf046f45ef9629fb618983a01ee27e106c449138dd16c0e6644d0f19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 136
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(\".js-example-placeholder-multiple\").select2({
\t\t\tplaceholder: \"Select a state\"
\t\t});
\t</script>
";
        
        $__internal_84ac181cf046f45ef9629fb618983a01ee27e106c449138dd16c0e6644d0f19b->leave($__internal_84ac181cf046f45ef9629fb618983a01ee27e106c449138dd16c0e6644d0f19b_prof);

        
        $__internal_ba8d3aea1f7f6f56debdf50ff384488c1733d5b55f4f20658923664e36b3f568->leave($__internal_ba8d3aea1f7f6f56debdf50ff384488c1733d5b55f4f20658923664e36b3f568_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Jen:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 136,  284 => 135,  271 => 131,  261 => 124,  255 => 121,  251 => 120,  247 => 119,  241 => 116,  237 => 115,  233 => 114,  227 => 111,  219 => 105,  210 => 104,  198 => 101,  194 => 100,  188 => 98,  179 => 97,  158 => 85,  152 => 82,  135 => 68,  129 => 65,  112 => 51,  106 => 48,  89 => 34,  83 => 31,  55 => 5,  46 => 4,  36 => 1,  34 => 2,  11 => 1,);
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
{% form_theme form \"UserBundle:Form:fields_mission.html.twig\" %}

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
            <li class=\"active\">
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

{% block stylesheets %}
\t<link href=\"{{ asset('assets/plugins/select2/select2.css') }}\" rel=\"stylesheet\">

\t<link href=\"{{ asset('assets/public/formWizard/css/wizardphases.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/public/formWizard/css/wizardmissions.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
\t<div class=\"box box-primary\">
\t<div class=\"box-header with-border\">
\t\t<h3 class=\"box-title\">Création d'un jeu épistémique numerique</h3>
\t</div>
\t<!-- /.box-header -->
\t<!-- form start -->
\t{{ form_start(form) }}
\t\t<div class=\"box-body\">
\t\t\t<div class=\"form-group\">
\t\t\t\t{{form_label (form.intitule)}}
\t\t\t\t{{ form_widget(form.intitule, { 'attr': {'placeholder': 'intitulé' } }) }}
\t\t\t\t{{ form_errors(form.intitule) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{form_label (form.createurs) }}
\t\t\t\t{{ form_widget(form.createurs, { 'attr': {'class': \"form-control js-example-placeholder-multiple\" } }) }}
\t\t\t\t{{ form_errors(form.createurs) }}
\t\t\t</div>
\t\t\t<div class=\"form-group hide\">
\t\t\t\t{{ form_rest(form) }}
\t\t\t</div>
\t\t</div>
\t\t<!-- /.box-body -->
\t\t<div class=\"box-footer\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t</div>
\t{{ form_end(form) }}
\t</div>
{% endblock %}

{% block javascript %}
\t<script src=\"{{ asset('assets/plugins/select2/select2.js') }}\"></script>
\t<script type=\"text/javascript\">
\t\t\$(\".js-example-placeholder-multiple\").select2({
\t\t\tplaceholder: \"Select a state\"
\t\t});
\t</script>
{% endblock %}


", "UserBundle:Jen:new.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Jen/new.html.twig");
    }
}
