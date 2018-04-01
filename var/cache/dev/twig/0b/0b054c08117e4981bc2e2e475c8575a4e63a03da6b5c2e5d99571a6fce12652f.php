<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbbc37b4f4d92b7414dfe39ffe6c4c4259bfbcd0410acb57a8ec06cdee1e2b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbc37b4f4d92b7414dfe39ffe6c4c4259bfbcd0410acb57a8ec06cdee1e2b93->enter($__internal_bbbc37b4f4d92b7414dfe39ffe6c4c4259bfbcd0410acb57a8ec06cdee1e2b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fb744d3b606002a9e2b39f71c98aedb67d12412b8e203d602fbe9b627f9f4786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb744d3b606002a9e2b39f71c98aedb67d12412b8e203d602fbe9b627f9f4786->enter($__internal_fb744d3b606002a9e2b39f71c98aedb67d12412b8e203d602fbe9b627f9f4786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbbc37b4f4d92b7414dfe39ffe6c4c4259bfbcd0410acb57a8ec06cdee1e2b93->leave($__internal_bbbc37b4f4d92b7414dfe39ffe6c4c4259bfbcd0410acb57a8ec06cdee1e2b93_prof);

        
        $__internal_fb744d3b606002a9e2b39f71c98aedb67d12412b8e203d602fbe9b627f9f4786->leave($__internal_fb744d3b606002a9e2b39f71c98aedb67d12412b8e203d602fbe9b627f9f4786_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e52637ab50f55933239409f910dd99939693bc15435c75f71e81de8ca69425c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e52637ab50f55933239409f910dd99939693bc15435c75f71e81de8ca69425c->enter($__internal_4e52637ab50f55933239409f910dd99939693bc15435c75f71e81de8ca69425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_352a1522ab636b29ea311b390b3993f154d2617450e3a379315c34f17aca3866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352a1522ab636b29ea311b390b3993f154d2617450e3a379315c34f17aca3866->enter($__internal_352a1522ab636b29ea311b390b3993f154d2617450e3a379315c34f17aca3866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_352a1522ab636b29ea311b390b3993f154d2617450e3a379315c34f17aca3866->leave($__internal_352a1522ab636b29ea311b390b3993f154d2617450e3a379315c34f17aca3866_prof);

        
        $__internal_4e52637ab50f55933239409f910dd99939693bc15435c75f71e81de8ca69425c->leave($__internal_4e52637ab50f55933239409f910dd99939693bc15435c75f71e81de8ca69425c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6fe4821293bf4c941baa19505ec479afd6551c2e4ac47d95ae42883ffaffa1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6fe4821293bf4c941baa19505ec479afd6551c2e4ac47d95ae42883ffaffa1c->enter($__internal_e6fe4821293bf4c941baa19505ec479afd6551c2e4ac47d95ae42883ffaffa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9f4b26b40bc8a9d778a5dcb521b528642246b409a967c2b1ab1a70a673c27c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4b26b40bc8a9d778a5dcb521b528642246b409a967c2b1ab1a70a673c27c39->enter($__internal_9f4b26b40bc8a9d778a5dcb521b528642246b409a967c2b1ab1a70a673c27c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f4b26b40bc8a9d778a5dcb521b528642246b409a967c2b1ab1a70a673c27c39->leave($__internal_9f4b26b40bc8a9d778a5dcb521b528642246b409a967c2b1ab1a70a673c27c39_prof);

        
        $__internal_e6fe4821293bf4c941baa19505ec479afd6551c2e4ac47d95ae42883ffaffa1c->leave($__internal_e6fe4821293bf4c941baa19505ec479afd6551c2e4ac47d95ae42883ffaffa1c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ccc711f4fb64ae49bb0fa33726bf6a1de44fa322580b87f84fa5765e14aad01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccc711f4fb64ae49bb0fa33726bf6a1de44fa322580b87f84fa5765e14aad01->enter($__internal_4ccc711f4fb64ae49bb0fa33726bf6a1de44fa322580b87f84fa5765e14aad01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_58d4560bd1712f1991de0d1dd98bceecab081af64d465272c4f61451c0e883cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d4560bd1712f1991de0d1dd98bceecab081af64d465272c4f61451c0e883cf->enter($__internal_58d4560bd1712f1991de0d1dd98bceecab081af64d465272c4f61451c0e883cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58d4560bd1712f1991de0d1dd98bceecab081af64d465272c4f61451c0e883cf->leave($__internal_58d4560bd1712f1991de0d1dd98bceecab081af64d465272c4f61451c0e883cf_prof);

        
        $__internal_4ccc711f4fb64ae49bb0fa33726bf6a1de44fa322580b87f84fa5765e14aad01->leave($__internal_4ccc711f4fb64ae49bb0fa33726bf6a1de44fa322580b87f84fa5765e14aad01_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Guide_v04\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
