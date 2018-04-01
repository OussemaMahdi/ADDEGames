<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8609834dda2935b99a2c9429413b566e1a309f5c308a17555acb78e69f1e82ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_19aca4a88e7b620c6f1662e7fea6705396133a7baee490fac0074da3af476dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19aca4a88e7b620c6f1662e7fea6705396133a7baee490fac0074da3af476dfd->enter($__internal_19aca4a88e7b620c6f1662e7fea6705396133a7baee490fac0074da3af476dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6ea1176e67d0eb351ff854545efaf81e17eb22192ad2ecdbbf8a52c12a4a6251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea1176e67d0eb351ff854545efaf81e17eb22192ad2ecdbbf8a52c12a4a6251->enter($__internal_6ea1176e67d0eb351ff854545efaf81e17eb22192ad2ecdbbf8a52c12a4a6251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19aca4a88e7b620c6f1662e7fea6705396133a7baee490fac0074da3af476dfd->leave($__internal_19aca4a88e7b620c6f1662e7fea6705396133a7baee490fac0074da3af476dfd_prof);

        
        $__internal_6ea1176e67d0eb351ff854545efaf81e17eb22192ad2ecdbbf8a52c12a4a6251->leave($__internal_6ea1176e67d0eb351ff854545efaf81e17eb22192ad2ecdbbf8a52c12a4a6251_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_042e06b5beb683f038c64120a920ff97de207836f5d3955bbfc8e8eddd804821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042e06b5beb683f038c64120a920ff97de207836f5d3955bbfc8e8eddd804821->enter($__internal_042e06b5beb683f038c64120a920ff97de207836f5d3955bbfc8e8eddd804821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d99d9b3098dffa8730dc7c4efcac67ba73243fa397b16ec9d5e0a8421958dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d99d9b3098dffa8730dc7c4efcac67ba73243fa397b16ec9d5e0a8421958dfb->enter($__internal_1d99d9b3098dffa8730dc7c4efcac67ba73243fa397b16ec9d5e0a8421958dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1d99d9b3098dffa8730dc7c4efcac67ba73243fa397b16ec9d5e0a8421958dfb->leave($__internal_1d99d9b3098dffa8730dc7c4efcac67ba73243fa397b16ec9d5e0a8421958dfb_prof);

        
        $__internal_042e06b5beb683f038c64120a920ff97de207836f5d3955bbfc8e8eddd804821->leave($__internal_042e06b5beb683f038c64120a920ff97de207836f5d3955bbfc8e8eddd804821_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_889b9599969b2dc3ea235a0457a3b59ce2e89be583f269dd82d2d9a691f915a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889b9599969b2dc3ea235a0457a3b59ce2e89be583f269dd82d2d9a691f915a8->enter($__internal_889b9599969b2dc3ea235a0457a3b59ce2e89be583f269dd82d2d9a691f915a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ee206bcefa6e826da4707e90cba6dcc97d71242a63f4a05ef38f12636ff281d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee206bcefa6e826da4707e90cba6dcc97d71242a63f4a05ef38f12636ff281d->enter($__internal_9ee206bcefa6e826da4707e90cba6dcc97d71242a63f4a05ef38f12636ff281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9ee206bcefa6e826da4707e90cba6dcc97d71242a63f4a05ef38f12636ff281d->leave($__internal_9ee206bcefa6e826da4707e90cba6dcc97d71242a63f4a05ef38f12636ff281d_prof);

        
        $__internal_889b9599969b2dc3ea235a0457a3b59ce2e89be583f269dd82d2d9a691f915a8->leave($__internal_889b9599969b2dc3ea235a0457a3b59ce2e89be583f269dd82d2d9a691f915a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbdf612f3e0476f83f318a0874a5562601e43b3838a6f3c23f55269cbe52d074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdf612f3e0476f83f318a0874a5562601e43b3838a6f3c23f55269cbe52d074->enter($__internal_cbdf612f3e0476f83f318a0874a5562601e43b3838a6f3c23f55269cbe52d074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb8e68dd23d156683bf48087bda3e12f6478d4611fe2c2e7e777471bb65828bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8e68dd23d156683bf48087bda3e12f6478d4611fe2c2e7e777471bb65828bd->enter($__internal_bb8e68dd23d156683bf48087bda3e12f6478d4611fe2c2e7e777471bb65828bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bb8e68dd23d156683bf48087bda3e12f6478d4611fe2c2e7e777471bb65828bd->leave($__internal_bb8e68dd23d156683bf48087bda3e12f6478d4611fe2c2e7e777471bb65828bd_prof);

        
        $__internal_cbdf612f3e0476f83f318a0874a5562601e43b3838a6f3c23f55269cbe52d074->leave($__internal_cbdf612f3e0476f83f318a0874a5562601e43b3838a6f3c23f55269cbe52d074_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Guide_v04\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
