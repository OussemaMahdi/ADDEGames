<?php

/* UserBundle:Form:fields_mission.html.twig */
class __TwigTemplate_93bdc21d08654775d03ac28d24d6eb6fd17d59e41831a496b9a5e6423757bf13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_sce_userbundle_jen_missions_entry_widget' => array($this, 'block__sce_userbundle_jen_missions_entry_widget'),
            '_sce_userbundle_jen_missions_entry_images_entry_widget' => array($this, 'block__sce_userbundle_jen_missions_entry_images_entry_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea1c7f26d706b6405c8e824535bfe2bee6f68bff4dcf9ee2d1f9bde2e3f8c58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1c7f26d706b6405c8e824535bfe2bee6f68bff4dcf9ee2d1f9bde2e3f8c58e->enter($__internal_ea1c7f26d706b6405c8e824535bfe2bee6f68bff4dcf9ee2d1f9bde2e3f8c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Form:fields_mission.html.twig"));

        $__internal_379d692ae987fbb60d3a09d04c4d7974d2ab803d62516cc05ec9155138680717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379d692ae987fbb60d3a09d04c4d7974d2ab803d62516cc05ec9155138680717->enter($__internal_379d692ae987fbb60d3a09d04c4d7974d2ab803d62516cc05ec9155138680717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Form:fields_mission.html.twig"));

        // line 1
        $this->displayBlock('_sce_userbundle_jen_missions_entry_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('_sce_userbundle_jen_missions_entry_images_entry_widget', $context, $blocks);
        // line 69
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 74
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_ea1c7f26d706b6405c8e824535bfe2bee6f68bff4dcf9ee2d1f9bde2e3f8c58e->leave($__internal_ea1c7f26d706b6405c8e824535bfe2bee6f68bff4dcf9ee2d1f9bde2e3f8c58e_prof);

        
        $__internal_379d692ae987fbb60d3a09d04c4d7974d2ab803d62516cc05ec9155138680717->leave($__internal_379d692ae987fbb60d3a09d04c4d7974d2ab803d62516cc05ec9155138680717_prof);

    }

    // line 1
    public function block__sce_userbundle_jen_missions_entry_widget($context, array $blocks = array())
    {
        $__internal_94fc5b6c0224264e212c047bb94b2f4041ce94be60f5e88f3db17351668087e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fc5b6c0224264e212c047bb94b2f4041ce94be60f5e88f3db17351668087e3->enter($__internal_94fc5b6c0224264e212c047bb94b2f4041ce94be60f5e88f3db17351668087e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sce_userbundle_jen_missions_entry_widget"));

        $__internal_67f2a84f66e59e51c9d4eca130c31ec87499b321e11777ff0aedb8424d685860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f2a84f66e59e51c9d4eca130c31ec87499b321e11777ff0aedb8424d685860->enter($__internal_67f2a84f66e59e51c9d4eca130c31ec87499b321e11777ff0aedb8424d685860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sce_userbundle_jen_missions_entry_widget"));

        // line 2
        echo "\t<div class=\"col-xs-12\">
\t\t<div class=\"box-body\">
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label');
        echo "
\t\t\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("placeholder" => "Titre", "readonly" => "true")));
        echo "
\t\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contexteScenaristique", array()), 'label');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contexteScenaristique", array()), 'widget', array("attr" => array("placeholder" => "Contexte Scenaristique")));
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contexteScenaristique", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptif", array()), 'label');
        echo "
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptif", array()), 'widget', array("attr" => array("placeholder" => "Descriptif")));
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptif", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ludification", array()), 'label');
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ludification", array()), 'widget', array("attr" => array("placeholder" => "Ludification")));
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ludification", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authenticite", array()), 'label');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authenticite", array()), 'widget', array("attr" => array("placeholder" => "Authenticite")));
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authenticite", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "immersion", array()), 'label');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "immersion", array()), 'widget', array("attr" => array("placeholder" => "Immersion")));
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "immersion", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images", array()), 'widget');
        echo "
\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-footer\">
\t\t\t<button class=\"btn btn-primary nextBtn\" type=\"button\" >Suivant</button>
\t\t</div>
\t</div>
";
        
        $__internal_67f2a84f66e59e51c9d4eca130c31ec87499b321e11777ff0aedb8424d685860->leave($__internal_67f2a84f66e59e51c9d4eca130c31ec87499b321e11777ff0aedb8424d685860_prof);

        
        $__internal_94fc5b6c0224264e212c047bb94b2f4041ce94be60f5e88f3db17351668087e3->leave($__internal_94fc5b6c0224264e212c047bb94b2f4041ce94be60f5e88f3db17351668087e3_prof);

    }

    // line 48
    public function block__sce_userbundle_jen_missions_entry_images_entry_widget($context, array $blocks = array())
    {
        $__internal_34733a09aba60e026d78004c4f958686128ac56e4d3871c6c12f4f5e119a45a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34733a09aba60e026d78004c4f958686128ac56e4d3871c6c12f4f5e119a45a1->enter($__internal_34733a09aba60e026d78004c4f958686128ac56e4d3871c6c12f4f5e119a45a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sce_userbundle_jen_missions_entry_images_entry_widget"));

        $__internal_ce1fef484f5df1d60303cf10e230b7e4a67fdd6907c28ecc2af5e672e97b3e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1fef484f5df1d60303cf10e230b7e4a67fdd6907c28ecc2af5e672e97b3e31->enter($__internal_ce1fef484f5df1d60303cf10e230b7e4a67fdd6907c28ecc2af5e672e97b3e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sce_userbundle_jen_missions_entry_images_entry_widget"));

        // line 49
        echo "\t<div class=\"form-group\">
\t\t<div class=\"input-group\">
\t\t\t<label class=\"input-group-btn\">
\t\t\t\t<span class=\"btn btn-primary\">
\t\t\t\t\tParcourir… 
\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
\t\t\t\t</span>
\t\t\t</label>
\t\t\t<input type=\"text\" class=\"form-control\" readonly=\"\">
\t\t\t<label class=\"input-group-btn\">
\t\t\t\t<span id=\"imageDeleteLink\" class=\"btn btn-danger\">
\t\t\t\t\t<div></div>
\t\t\t\t\tSupprimer 
\t\t\t\t</span>
\t\t\t</label>
\t\t</div>
\t</div>
";
        
        $__internal_ce1fef484f5df1d60303cf10e230b7e4a67fdd6907c28ecc2af5e672e97b3e31->leave($__internal_ce1fef484f5df1d60303cf10e230b7e4a67fdd6907c28ecc2af5e672e97b3e31_prof);

        
        $__internal_34733a09aba60e026d78004c4f958686128ac56e4d3871c6c12f4f5e119a45a1->leave($__internal_34733a09aba60e026d78004c4f958686128ac56e4d3871c6c12f4f5e119a45a1_prof);

    }

    // line 69
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_734ad78334796486b38b6133772522a1ca3cc25ffe23984b4f3365b1380147b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734ad78334796486b38b6133772522a1ca3cc25ffe23984b4f3365b1380147b7->enter($__internal_734ad78334796486b38b6133772522a1ca3cc25ffe23984b4f3365b1380147b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_23f82500fb96ab5f8d04b5f5720d321653a5a63d2e59df2bcacee985cf052ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f82500fb96ab5f8d04b5f5720d321653a5a63d2e59df2bcacee985cf052ca4->enter($__internal_23f82500fb96ab5f8d04b5f5720d321653a5a63d2e59df2bcacee985cf052ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 70
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 71
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" class ='form-control' ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_23f82500fb96ab5f8d04b5f5720d321653a5a63d2e59df2bcacee985cf052ca4->leave($__internal_23f82500fb96ab5f8d04b5f5720d321653a5a63d2e59df2bcacee985cf052ca4_prof);

        
        $__internal_734ad78334796486b38b6133772522a1ca3cc25ffe23984b4f3365b1380147b7->leave($__internal_734ad78334796486b38b6133772522a1ca3cc25ffe23984b4f3365b1380147b7_prof);

    }

    // line 74
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_5460e7c8ae1a5f5114af0dc7c31d476088594b074bb24d6e49158f922e610bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5460e7c8ae1a5f5114af0dc7c31d476088594b074bb24d6e49158f922e610bb7->enter($__internal_5460e7c8ae1a5f5114af0dc7c31d476088594b074bb24d6e49158f922e610bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f9274171fbe57943931cf063e2bcb3c67019458c12ee2d4c87f7de4210168aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9274171fbe57943931cf063e2bcb3c67019458c12ee2d4c87f7de4210168aab->enter($__internal_f9274171fbe57943931cf063e2bcb3c67019458c12ee2d4c87f7de4210168aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 75
        echo "<textarea class ='form-control' ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_f9274171fbe57943931cf063e2bcb3c67019458c12ee2d4c87f7de4210168aab->leave($__internal_f9274171fbe57943931cf063e2bcb3c67019458c12ee2d4c87f7de4210168aab_prof);

        
        $__internal_5460e7c8ae1a5f5114af0dc7c31d476088594b074bb24d6e49158f922e610bb7->leave($__internal_5460e7c8ae1a5f5114af0dc7c31d476088594b074bb24d6e49158f922e610bb7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Form:fields_mission.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  257 => 75,  248 => 74,  228 => 71,  226 => 70,  217 => 69,  194 => 55,  190 => 54,  183 => 49,  174 => 48,  156 => 39,  150 => 36,  146 => 35,  140 => 32,  136 => 31,  132 => 30,  126 => 27,  122 => 26,  118 => 25,  112 => 22,  108 => 21,  104 => 20,  98 => 17,  94 => 16,  90 => 15,  84 => 12,  80 => 11,  76 => 10,  70 => 7,  66 => 6,  62 => 5,  57 => 2,  48 => 1,  38 => 74,  36 => 69,  34 => 48,  31 => 47,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _sce_userbundle_jen_missions_entry_widget %}
\t<div class=\"col-xs-12\">
\t\t<div class=\"box-body\">
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.titre) }}
\t\t\t\t{{ form_widget(form.titre, { 'attr': {'placeholder' : 'Titre', 'readonly' : 'true'}} ) }}
\t\t\t\t{{ form_errors(form.titre) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.contexteScenaristique) }}
\t\t\t\t{{ form_widget(form.contexteScenaristique, { 'attr': {'placeholder' : 'Contexte Scenaristique'} }) }}
\t\t\t\t{{ form_errors(form.contexteScenaristique) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.descriptif) }}
\t\t\t\t{{ form_widget(form.descriptif, { 'attr': {'placeholder' : 'Descriptif'} }) }}
\t\t\t\t{{ form_errors(form.descriptif) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.ludification) }}
\t\t\t\t{{ form_widget(form.ludification, { 'attr': {'placeholder' : 'Ludification'} }) }}
\t\t\t\t{{ form_errors(form.ludification) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.authenticite) }}
\t\t\t\t{{ form_widget(form.authenticite, { 'attr': {'placeholder' : 'Authenticite'} }) }}
\t\t\t\t{{ form_errors(form.authenticite) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.immersion) }}
\t\t\t\t{{ form_widget(form.immersion, { 'attr': {'placeholder' : 'Immersion'} }) }}
\t\t\t\t{{ form_errors(form.immersion) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_widget(form.images)}}
\t\t\t\t\t{{ form_errors(form.images) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_rest(form) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-footer\">
\t\t\t<button class=\"btn btn-primary nextBtn\" type=\"button\" >Suivant</button>
\t\t</div>
\t</div>
{% endblock %}

{% block _sce_userbundle_jen_missions_entry_images_entry_widget %}
\t<div class=\"form-group\">
\t\t<div class=\"input-group\">
\t\t\t<label class=\"input-group-btn\">
\t\t\t\t<span class=\"btn btn-primary\">
\t\t\t\t\tParcourir… 
\t\t\t\t\t{{ form_widget(form.file, { 'attr': {'style': 'display: none;'} }) }}
\t\t\t\t\t{{ form_errors(form.file) }}
\t\t\t\t</span>
\t\t\t</label>
\t\t\t<input type=\"text\" class=\"form-control\" readonly=\"\">
\t\t\t<label class=\"input-group-btn\">
\t\t\t\t<span id=\"imageDeleteLink\" class=\"btn btn-danger\">
\t\t\t\t\t<div></div>
\t\t\t\t\tSupprimer 
\t\t\t\t</span>
\t\t\t</label>
\t\t</div>
\t</div>
{% endblock %}

{%- block form_widget_simple -%}
\t\t{%- set type = type|default('text') -%}
\t\t<input type=\"{{ type }}\" class ='form-control' {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block textarea_widget -%}
\t<textarea class ='form-control' {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}


", "UserBundle:Form:fields_mission.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Form/fields_mission.html.twig");
    }
}
