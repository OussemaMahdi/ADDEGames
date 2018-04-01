<?php

/* UserBundle:User:accueilUser.html.twig */
class __TwigTemplate_005e8f49b1e9edab310a062565bd55b1eea9f639aaba4fecf4deca472b8219b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:accueilUser.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34bc2cc11ff597a3b1ee14d6e68ff37f5924ef1c1a2b0015d918f32b3a210930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bc2cc11ff597a3b1ee14d6e68ff37f5924ef1c1a2b0015d918f32b3a210930->enter($__internal_34bc2cc11ff597a3b1ee14d6e68ff37f5924ef1c1a2b0015d918f32b3a210930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:accueilUser.html.twig"));

        $__internal_e6b36190d0448f69257ee509099b00dc596dbb240c35971f2ce463642eb501ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b36190d0448f69257ee509099b00dc596dbb240c35971f2ce463642eb501ac->enter($__internal_e6b36190d0448f69257ee509099b00dc596dbb240c35971f2ce463642eb501ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:accueilUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34bc2cc11ff597a3b1ee14d6e68ff37f5924ef1c1a2b0015d918f32b3a210930->leave($__internal_34bc2cc11ff597a3b1ee14d6e68ff37f5924ef1c1a2b0015d918f32b3a210930_prof);

        
        $__internal_e6b36190d0448f69257ee509099b00dc596dbb240c35971f2ce463642eb501ac->leave($__internal_e6b36190d0448f69257ee509099b00dc596dbb240c35971f2ce463642eb501ac_prof);

    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        $__internal_8a1c0f792557256368f9497cf5216955c4ce5aaf9afc27d428a60c2ca72039ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1c0f792557256368f9497cf5216955c4ce5aaf9afc27d428a60c2ca72039ea->enter($__internal_8a1c0f792557256368f9497cf5216955c4ce5aaf9afc27d428a60c2ca72039ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_a4fdb1a40a0fd9e8ea24054bdd36a28ca7c1e96b0fce8c6e51da404f7c5ba4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fdb1a40a0fd9e8ea24054bdd36a28ca7c1e96b0fce8c6e51da404f7c5ba4eb->enter($__internal_a4fdb1a40a0fd9e8ea24054bdd36a28ca7c1e96b0fce8c6e51da404f7c5ba4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 4
        echo "    ";
        $this->loadTemplate("userAside.html.twig", "UserBundle:User:accueilUser.html.twig", 4)->display($context);
        
        $__internal_a4fdb1a40a0fd9e8ea24054bdd36a28ca7c1e96b0fce8c6e51da404f7c5ba4eb->leave($__internal_a4fdb1a40a0fd9e8ea24054bdd36a28ca7c1e96b0fce8c6e51da404f7c5ba4eb_prof);

        
        $__internal_8a1c0f792557256368f9497cf5216955c4ce5aaf9afc27d428a60c2ca72039ea->leave($__internal_8a1c0f792557256368f9497cf5216955c4ce5aaf9afc27d428a60c2ca72039ea_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:accueilUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    {% include 'userAside.html.twig' %}
{% endblock %}", "UserBundle:User:accueilUser.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/User/accueilUser.html.twig");
    }
}
