<?php

/* UserBundle:Jen:edit.html.twig */
class __TwigTemplate_4dfb9404a0de81ae802907c37ff832a048c1fac581221d15bdcaf4bf6d3ce8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Jen:edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'aside' => array($this, 'block_aside'),
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
        $__internal_5106888f27d4a3a605f088868f472d2ef6b9f2442cd55282f5517b293d69093c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5106888f27d4a3a605f088868f472d2ef6b9f2442cd55282f5517b293d69093c->enter($__internal_5106888f27d4a3a605f088868f472d2ef6b9f2442cd55282f5517b293d69093c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Jen:edit.html.twig"));

        $__internal_88fc16bb5cbeeeeadccc4b84c851e93993fed5298a7f913d2c6ae31215beda4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fc16bb5cbeeeeadccc4b84c851e93993fed5298a7f913d2c6ae31215beda4e->enter($__internal_88fc16bb5cbeeeeadccc4b84c851e93993fed5298a7f913d2c6ae31215beda4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Jen:edit.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "UserBundle:Form:fields_mission.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5106888f27d4a3a605f088868f472d2ef6b9f2442cd55282f5517b293d69093c->leave($__internal_5106888f27d4a3a605f088868f472d2ef6b9f2442cd55282f5517b293d69093c_prof);

        
        $__internal_88fc16bb5cbeeeeadccc4b84c851e93993fed5298a7f913d2c6ae31215beda4e->leave($__internal_88fc16bb5cbeeeeadccc4b84c851e93993fed5298a7f913d2c6ae31215beda4e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3d41798b73733684453bf7b38a079f09a9a16e381781e42023e66768bcf1841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d41798b73733684453bf7b38a079f09a9a16e381781e42023e66768bcf1841->enter($__internal_e3d41798b73733684453bf7b38a079f09a9a16e381781e42023e66768bcf1841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_96bbedc77682aa7e8740a7567cef4850c3a6dfd9a5bb08eafbace73feca4eae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bbedc77682aa7e8740a7567cef4850c3a6dfd9a5bb08eafbace73feca4eae8->enter($__internal_96bbedc77682aa7e8740a7567cef4850c3a6dfd9a5bb08eafbace73feca4eae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/css/wizardphases.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/css/wizardmissions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_96bbedc77682aa7e8740a7567cef4850c3a6dfd9a5bb08eafbace73feca4eae8->leave($__internal_96bbedc77682aa7e8740a7567cef4850c3a6dfd9a5bb08eafbace73feca4eae8_prof);

        
        $__internal_e3d41798b73733684453bf7b38a079f09a9a16e381781e42023e66768bcf1841->leave($__internal_e3d41798b73733684453bf7b38a079f09a9a16e381781e42023e66768bcf1841_prof);

    }

    // line 11
    public function block_aside($context, array $blocks = array())
    {
        $__internal_f504e9ef532b4fe39e0333d26e9a9d55033a22072a387f9f109d462470d032a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f504e9ef532b4fe39e0333d26e9a9d55033a22072a387f9f109d462470d032a2->enter($__internal_f504e9ef532b4fe39e0333d26e9a9d55033a22072a387f9f109d462470d032a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_dc5c22a6b214a3db0c3a592191f12dab999634aba1532da8931b6396d9eb6b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5c22a6b214a3db0c3a592191f12dab999634aba1532da8931b6396d9eb6b6a->enter($__internal_dc5c22a6b214a3db0c3a592191f12dab999634aba1532da8931b6396d9eb6b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 12
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
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Nouveau Jen</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 41
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
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discipline_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un discipline</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 58
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
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("communaute_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un communauté</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 75
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
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartejen_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un carte JEN</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 92
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
        
        $__internal_dc5c22a6b214a3db0c3a592191f12dab999634aba1532da8931b6396d9eb6b6a->leave($__internal_dc5c22a6b214a3db0c3a592191f12dab999634aba1532da8931b6396d9eb6b6a_prof);

        
        $__internal_f504e9ef532b4fe39e0333d26e9a9d55033a22072a387f9f109d462470d032a2->leave($__internal_f504e9ef532b4fe39e0333d26e9a9d55033a22072a387f9f109d462470d032a2_prof);

    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d3e925f76268b32d79ace485b4c82f9ae876004a946cfd6c5d0cd9573236789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3e925f76268b32d79ace485b4c82f9ae876004a946cfd6c5d0cd9573236789->enter($__internal_9d3e925f76268b32d79ace485b4c82f9ae876004a946cfd6c5d0cd9573236789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b05ac37816c2e7a32a31cb8e9f076e8ba5affd19b81e7aa7c14fdd1ea0fb6cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05ac37816c2e7a32a31cb8e9f076e8ba5affd19b81e7aa7c14fdd1ea0fb6cb5->enter($__internal_b05ac37816c2e7a32a31cb8e9f076e8ba5affd19b81e7aa7c14fdd1ea0fb6cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "\t<div class=\"box box-primary box-solid\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h3 class=\"box-title\">";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "createurs", array()), 'label');
        echo "</h3>

\t\t\t<div class=\"box-tools pull-right\">
\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
\t\t\t</div>
\t\t\t<!-- /.box-tools -->
\t\t</div>
\t\t<!-- /.box-header -->
\t\t<div class=\"box-body\">
\t\t\t";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "createurs", array()), 'widget', array("attr" => array("class" => "form-control js-example-placeholder-multiple", "placeholder" => "createurs")));
        echo "
\t\t\t";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "createurs", array()), 'errors');
        echo "
\t\t</div>
\t\t<!-- /.box-body -->
\t</div>

\t<div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h3 class=\"box-title\">Création d'un jeu épistémique numerique</h3>
\t\t</div>
\t\t<!-- /.box-header -->
\t\t<div class=\"box-body\">
\t\t\t<div class=\"wizard\">
\t\t\t\t<div class=\"wizard-inner\">
\t\t\t\t\t<div class=\"connecting-line\"></div>
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li role=\"presentation\" class=\"active\" id=\"0\">
\t\t\t\t\t\t\t<a href=\"#step0\" data-toggle=\"tab\" aria-controls=\"step0\" role=\"tab\" title=\"Phase 0\">
\t\t\t\t\t\t\t\t<span id=\"span_step_0\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"1\">
\t\t\t\t\t\t\t<a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Phase 1\">
\t\t\t\t\t\t\t\t<span id=\"span_step_1\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"2\">
\t\t\t\t\t\t\t<a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Phase 2\">
\t\t\t\t\t\t\t\t<span id=\"span_step_2\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-chain\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"3\">
\t\t\t\t\t\t\t<a href=\"#step3\" data-toggle=\"tab\" aria-controls=\"step3\" role=\" tab\" title=\"Phase 3\">
\t\t\t\t\t\t\t\t<span id=\"span_step_3\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-th-list\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"4\">
\t\t\t\t\t\t\t<a href=\"#step4\" data-toggle=\"tab\" aria-controls=\"step4\" role=\"tab\" title=\"Phase 4\">
\t\t\t\t\t\t\t\t<span id=\"span_step_4\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-hourglass-half\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"5\">
\t\t\t\t\t\t\t<a href=\"#complete\" data-toggle=\"tab\" aria-controls=\"complete\" role=\"tab\" title=\"Complete\">
\t\t\t\t\t\t\t\t<span id=\"span_step_5\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
        // line 176
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" role=\"tabpanel\" id=\"step0\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<h3>Phase 0</h3>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tObjectif du guide :
\t\t\t\t\t\t\t\t\t\t\tPermettre aux co-concepteurs d’établir rapidement un cahier des charges suffisamment détaillé pour les développeurs et prenant en compte les contraintes des JENP afin d’assurer les apports pédagogiques.
\t\t\t\t\t\t\t\t\t\t\tCe guide pourrait être s’entrecroiser des guides de serious game. Ainsi il ne propose pas de d’étapes et de méthodes pour établir le style graphique du jeu.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary next-step\">Suivant</button></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"step1\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<h3>Phase 1</h3>
\t\t\t\t\t\t\t\t\t<div id=\"message_step_1\" class=\"box box-warning box-solid hide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Attension</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t<div id=\"erreurs_step_1\" class=\"box-body\">

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 213
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intitule", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intitule", array()), 'widget', array("attr" => array("placeholder" => "intitule")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 215
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intitule", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 218
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbEnseignants", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbEnseignants", array()), 'widget', array("attr" => array("placeholder" => "Nombre d'enseignants")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbEnseignants", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbEtudiants", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbEtudiants", array()), 'widget', array("attr" => array("placeholder" => "Nombre d'etudiants")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbEtudiants", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 228
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbActeurs", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbActeurs", array()), 'widget', array("attr" => array("placeholder" => "Nombre d'acteurs")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbActeurs", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "outils", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "outils", array()), 'widget', array("attr" => array("placeholder" => "Outils")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "outils", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 238
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dispositifs", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 239
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dispositifs", array()), 'widget', array("attr" => array("placeholder" => "dispositifs")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dispositifs", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary next-step\">Suivant</button></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"step2\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<h3>Phase 2</h3>
\t\t\t\t\t\t\t\t\t<div id=\"message_step_2\" class=\"box box-warning box-solid hide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Attension</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t<div id=\"erreurs_step_2\" class=\"box-body\">

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "disciplines", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "disciplines", array()), 'widget', array("attr" => array("class" => "form-control js-example-placeholder-multiple", "placeholder" => "disciplines")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "disciplines", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "communautes", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "communautes", array()), 'widget', array("attr" => array("class" => "form-control js-example-placeholder-multiple", "placeholder" => "communautes")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 277
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "communautes", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 280
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "synopsys", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 281
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "synopsys", array()), 'widget', array("attr" => array("placeholder" => "synopsys")));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 282
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "synopsys", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<button id=\"carte_numerique\" class=\"btn btn-primary\" type=\"button\" >Utiliser les cartes JEN numérique</button>
\t\t\t\t\t\t\t\t\t\t<button id=\"carte_tangible\" class=\"btn btn-primary\" type=\"button\" >Imprimer les cartes JEN</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"container_cartesjen\" class=\"box box-primary hidden\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Carte JEN numérique</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 292
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cartesJen", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 293
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cartesJen", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"step3\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h3>Phase 3</h3>
\t\t\t\t\t\t\t\t<div id=\"message_step_3\" class=\"box box-warning box-solid hide\">
\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Attension</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t<div id=\"erreurs_step_3\" class=\"box-body\">

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"add_missions\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"liste_missions\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"stepwizard\">
\t\t\t\t\t\t\t\t\t<div id =\"stepwizard\" class=\"stepwizard-row setup-panel\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box box-primary\">
\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Mission</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 336
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "missions", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 337
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "missions", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"step4\">
\t\t\t\t\t\t\t<h3>Phase 4</h3>
\t\t\t\t\t\t\t<div id=\"message_step_4\" class=\"box box-warning box-solid hide\">
\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Attention</h3>
\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t<div id=\"erreurs_step_4\" class=\"box-body\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 363
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"complete\">
\t\t\t\t\t\t\t<h3>Complete</h3>
\t\t\t\t\t\t\t<p>Vous avez bien compléter la conception de votre JEN</p>
\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"submit\" class=\"btn btn-primary btn-info-full\">Sauvegarder</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 380
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<!-- /.box-body -->
\t</div>
";
        
        $__internal_b05ac37816c2e7a32a31cb8e9f076e8ba5affd19b81e7aa7c14fdd1ea0fb6cb5->leave($__internal_b05ac37816c2e7a32a31cb8e9f076e8ba5affd19b81e7aa7c14fdd1ea0fb6cb5_prof);

        
        $__internal_9d3e925f76268b32d79ace485b4c82f9ae876004a946cfd6c5d0cd9573236789->leave($__internal_9d3e925f76268b32d79ace485b4c82f9ae876004a946cfd6c5d0cd9573236789_prof);

    }

    // line 387
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a146e8d0b7a6ce81bc227b7e0eca86dc6ae38aa457cb99eda7e82f127969ac57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a146e8d0b7a6ce81bc227b7e0eca86dc6ae38aa457cb99eda7e82f127969ac57->enter($__internal_a146e8d0b7a6ce81bc227b7e0eca86dc6ae38aa457cb99eda7e82f127969ac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_62144c529b4426e7d633aa8bd8941927f336ef83ba0d6ae4bb6de3c66639692d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62144c529b4426e7d633aa8bd8941927f336ef83ba0d6ae4bb6de3c66639692d->enter($__internal_62144c529b4426e7d633aa8bd8941927f336ef83ba0d6ae4bb6de3c66639692d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 388
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/js/wizardphases.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/editJen.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/cartesjen.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(\".js-example-placeholder-multiple\").select2({
\t\t\tplaceholder: \"Select a state\"
\t\t});
\t</script>
";
        
        $__internal_62144c529b4426e7d633aa8bd8941927f336ef83ba0d6ae4bb6de3c66639692d->leave($__internal_62144c529b4426e7d633aa8bd8941927f336ef83ba0d6ae4bb6de3c66639692d_prof);

        
        $__internal_a146e8d0b7a6ce81bc227b7e0eca86dc6ae38aa457cb99eda7e82f127969ac57->leave($__internal_a146e8d0b7a6ce81bc227b7e0eca86dc6ae38aa457cb99eda7e82f127969ac57_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Jen:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 392,  638 => 390,  634 => 389,  629 => 388,  620 => 387,  604 => 380,  584 => 363,  555 => 337,  551 => 336,  505 => 293,  501 => 292,  488 => 282,  484 => 281,  480 => 280,  474 => 277,  470 => 276,  466 => 275,  460 => 272,  456 => 271,  452 => 270,  419 => 240,  415 => 239,  411 => 238,  405 => 235,  401 => 234,  397 => 233,  391 => 230,  387 => 229,  383 => 228,  377 => 225,  373 => 224,  369 => 223,  363 => 220,  359 => 219,  355 => 218,  349 => 215,  345 => 214,  341 => 213,  301 => 176,  239 => 117,  235 => 116,  223 => 107,  219 => 105,  210 => 104,  189 => 92,  183 => 89,  166 => 75,  160 => 72,  143 => 58,  137 => 55,  120 => 41,  114 => 38,  86 => 12,  77 => 11,  65 => 8,  61 => 7,  55 => 5,  46 => 4,  36 => 1,  34 => 2,  11 => 1,);
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
{% form_theme edit_form \"UserBundle:Form:fields_mission.html.twig\" %}

{% block stylesheets %}
\t<link href=\"{{ asset('assets/plugins/select2/select2.css') }}\" rel=\"stylesheet\">
\t
\t<link href=\"{{ asset('assets/public/formWizard/css/wizardphases.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('assets/public/formWizard/css/wizardmissions.css') }}\" rel=\"stylesheet\">
{% endblock %}

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
\t<div class=\"box box-primary box-solid\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h3 class=\"box-title\">{{form_label (edit_form.createurs)}}</h3>

\t\t\t<div class=\"box-tools pull-right\">
\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
\t\t\t</div>
\t\t\t<!-- /.box-tools -->
\t\t</div>
\t\t<!-- /.box-header -->
\t\t<div class=\"box-body\">
\t\t\t{{ form_widget(edit_form.createurs, { 'attr': {'class': \"form-control js-example-placeholder-multiple\", 'placeholder':  \"createurs\" } }) }}
\t\t\t{{ form_errors(edit_form.createurs) }}
\t\t</div>
\t\t<!-- /.box-body -->
\t</div>

\t<div class=\"box box-primary\">
\t\t<div class=\"box-header with-border\">
\t\t\t<h3 class=\"box-title\">Création d'un jeu épistémique numerique</h3>
\t\t</div>
\t\t<!-- /.box-header -->
\t\t<div class=\"box-body\">
\t\t\t<div class=\"wizard\">
\t\t\t\t<div class=\"wizard-inner\">
\t\t\t\t\t<div class=\"connecting-line\"></div>
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li role=\"presentation\" class=\"active\" id=\"0\">
\t\t\t\t\t\t\t<a href=\"#step0\" data-toggle=\"tab\" aria-controls=\"step0\" role=\"tab\" title=\"Phase 0\">
\t\t\t\t\t\t\t\t<span id=\"span_step_0\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"1\">
\t\t\t\t\t\t\t<a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Phase 1\">
\t\t\t\t\t\t\t\t<span id=\"span_step_1\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"2\">
\t\t\t\t\t\t\t<a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Phase 2\">
\t\t\t\t\t\t\t\t<span id=\"span_step_2\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-chain\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"3\">
\t\t\t\t\t\t\t<a href=\"#step3\" data-toggle=\"tab\" aria-controls=\"step3\" role=\" tab\" title=\"Phase 3\">
\t\t\t\t\t\t\t\t<span id=\"span_step_3\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-th-list\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"4\">
\t\t\t\t\t\t\t<a href=\"#step4\" data-toggle=\"tab\" aria-controls=\"step4\" role=\"tab\" title=\"Phase 4\">
\t\t\t\t\t\t\t\t<span id=\"span_step_4\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-hourglass-half\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\" id=\"5\">
\t\t\t\t\t\t\t<a href=\"#complete\" data-toggle=\"tab\" aria-controls=\"complete\" role=\"tab\" title=\"Complete\">
\t\t\t\t\t\t\t\t<span id=\"span_step_5\" class=\"round-tab\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-ok\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t{{ form_start(edit_form) }}
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" role=\"tabpanel\" id=\"step0\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<h3>Phase 0</h3>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tObjectif du guide :
\t\t\t\t\t\t\t\t\t\t\tPermettre aux co-concepteurs d’établir rapidement un cahier des charges suffisamment détaillé pour les développeurs et prenant en compte les contraintes des JENP afin d’assurer les apports pédagogiques.
\t\t\t\t\t\t\t\t\t\t\tCe guide pourrait être s’entrecroiser des guides de serious game. Ainsi il ne propose pas de d’étapes et de méthodes pour établir le style graphique du jeu.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary next-step\">Suivant</button></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"step1\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<h3>Phase 1</h3>
\t\t\t\t\t\t\t\t\t<div id=\"message_step_1\" class=\"box box-warning box-solid hide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Attension</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t<div id=\"erreurs_step_1\" class=\"box-body\">

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.intitule)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.intitule, { 'attr': {'placeholder': 'intitule' } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.intitule) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.nbEnseignants)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.nbEnseignants, { 'attr': {'placeholder': \"Nombre d'enseignants\" } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.nbEnseignants) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.nbEtudiants)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.nbEtudiants, { 'attr': {'placeholder':  \"Nombre d'etudiants\" } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.nbEtudiants) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.nbActeurs)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.nbActeurs, { 'attr': {'placeholder':  \"Nombre d'acteurs\" } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.nbActeurs) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.outils)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.outils, { 'attr': {'placeholder':  \"Outils\" } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.outils) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.dispositifs)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.dispositifs, { 'attr': {'placeholder':  \"dispositifs\" } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.dispositifs) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary next-step\">Suivant</button></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"step2\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<h3>Phase 2</h3>
\t\t\t\t\t\t\t\t\t<div id=\"message_step_2\" class=\"box box-warning box-solid hide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Attension</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t<div id=\"erreurs_step_2\" class=\"box-body\">

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.disciplines)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.disciplines, { 'attr': {'class': \"form-control js-example-placeholder-multiple\",'placeholder':  \"disciplines\" } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.disciplines) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.communautes)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.communautes, { 'attr': {'class': \"form-control js-example-placeholder-multiple\",'placeholder':  \"communautes\" } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.communautes) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{form_label (edit_form.synopsys)}}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.synopsys, { 'attr': {'placeholder':  \"synopsys\" } }) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.synopsys) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<button id=\"carte_numerique\" class=\"btn btn-primary\" type=\"button\" >Utiliser les cartes JEN numérique</button>
\t\t\t\t\t\t\t\t\t\t<button id=\"carte_tangible\" class=\"btn btn-primary\" type=\"button\" >Imprimer les cartes JEN</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"container_cartesjen\" class=\"box box-primary hidden\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Carte JEN numérique</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.cartesJen) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.cartesJen) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"step3\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h3>Phase 3</h3>
\t\t\t\t\t\t\t\t<div id=\"message_step_3\" class=\"box box-warning box-solid hide\">
\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Attension</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t<div id=\"erreurs_step_3\" class=\"box-body\">

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"add_missions\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"liste_missions\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"stepwizard\">
\t\t\t\t\t\t\t\t\t<div id =\"stepwizard\" class=\"stepwizard-row setup-panel\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box box-primary\">
\t\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Mission</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_widget(edit_form.missions) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(edit_form.missions) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"step4\">
\t\t\t\t\t\t\t<h3>Phase 4</h3>
\t\t\t\t\t\t\t<div id=\"message_step_4\" class=\"box box-warning box-solid hide\">
\t\t\t\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Attention</h3>
\t\t\t\t\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t<div id=\"erreurs_step_4\" class=\"box-body\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_rest(edit_form) }}
\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" role=\"tabpanel\" id=\"complete\">
\t\t\t\t\t\t\t<h3>Complete</h3>
\t\t\t\t\t\t\t<p>Vous avez bien compléter la conception de votre JEN</p>
\t\t\t\t\t\t\t<ul class=\"list-inline pull-right\">
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
\t\t\t\t\t\t\t\t<li><button type=\"submit\" class=\"btn btn-primary btn-info-full\">Sauvegarder</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t{{ form_end(edit_form) }}
\t\t\t</div>
\t\t</div>
\t\t<!-- /.box-body -->
\t</div>
{% endblock %}

{% block javascript %}
\t<script src=\"{{ asset('assets/public/formWizard/js/wizardphases.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('assets/public/editJen.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('assets/public/cartesjen.js') }}\" type=\"text/javascript\"></script>

\t<script src=\"{{ asset('assets/plugins/select2/select2.js') }}\"></script>
\t<script type=\"text/javascript\">
\t\t\$(\".js-example-placeholder-multiple\").select2({
\t\t\tplaceholder: \"Select a state\"
\t\t});
\t</script>
{% endblock %}", "UserBundle:Jen:edit.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Jen/edit.html.twig");
    }
}
