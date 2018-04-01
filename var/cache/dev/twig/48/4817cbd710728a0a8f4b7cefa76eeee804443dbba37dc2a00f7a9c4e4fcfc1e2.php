<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e3be51d9cb14e807a67e8229d2b5fdb25f5996d8841f8f34c92b3b24cc26fcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3294c440db117c22dd1f6c13bb10f396e5ba0afa7a7d14a946d9aa524e50c3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3294c440db117c22dd1f6c13bb10f396e5ba0afa7a7d14a946d9aa524e50c3e9->enter($__internal_3294c440db117c22dd1f6c13bb10f396e5ba0afa7a7d14a946d9aa524e50c3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_76176921a7092476d75e1b217efd3fddbe879a6d2d37f14f54a950627803843b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76176921a7092476d75e1b217efd3fddbe879a6d2d37f14f54a950627803843b->enter($__internal_76176921a7092476d75e1b217efd3fddbe879a6d2d37f14f54a950627803843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_3294c440db117c22dd1f6c13bb10f396e5ba0afa7a7d14a946d9aa524e50c3e9->leave($__internal_3294c440db117c22dd1f6c13bb10f396e5ba0afa7a7d14a946d9aa524e50c3e9_prof);

        
        $__internal_76176921a7092476d75e1b217efd3fddbe879a6d2d37f14f54a950627803843b->leave($__internal_76176921a7092476d75e1b217efd3fddbe879a6d2d37f14f54a950627803843b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Guide_v04\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
