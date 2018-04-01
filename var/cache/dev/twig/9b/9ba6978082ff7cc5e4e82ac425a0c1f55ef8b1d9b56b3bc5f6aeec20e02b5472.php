<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_5e84fa6c4b67cfb2729d2af6ed2631bb4f1751003e7ffbb88d8914ddfe6473d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dabcd19194bba77d853eba8f5cdf30791bc549dd38599ccec3750863ff578938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabcd19194bba77d853eba8f5cdf30791bc549dd38599ccec3750863ff578938->enter($__internal_dabcd19194bba77d853eba8f5cdf30791bc549dd38599ccec3750863ff578938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_78b2eef091448629edaaeddc73df174bd89d8056cffdea8497924f34ac637864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b2eef091448629edaaeddc73df174bd89d8056cffdea8497924f34ac637864->enter($__internal_78b2eef091448629edaaeddc73df174bd89d8056cffdea8497924f34ac637864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dabcd19194bba77d853eba8f5cdf30791bc549dd38599ccec3750863ff578938->leave($__internal_dabcd19194bba77d853eba8f5cdf30791bc549dd38599ccec3750863ff578938_prof);

        
        $__internal_78b2eef091448629edaaeddc73df174bd89d8056cffdea8497924f34ac637864->leave($__internal_78b2eef091448629edaaeddc73df174bd89d8056cffdea8497924f34ac637864_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_755f5220a3cd1e996a35f4005020f041ea8f5d55a73c1d9267f295a7e5dc1a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755f5220a3cd1e996a35f4005020f041ea8f5d55a73c1d9267f295a7e5dc1a4c->enter($__internal_755f5220a3cd1e996a35f4005020f041ea8f5d55a73c1d9267f295a7e5dc1a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4ee9902b13a069e2c8b02a7b1ac2ae4b78e61c99f68bb27457912b469e498e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee9902b13a069e2c8b02a7b1ac2ae4b78e61c99f68bb27457912b469e498e58->enter($__internal_4ee9902b13a069e2c8b02a7b1ac2ae4b78e61c99f68bb27457912b469e498e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4ee9902b13a069e2c8b02a7b1ac2ae4b78e61c99f68bb27457912b469e498e58->leave($__internal_4ee9902b13a069e2c8b02a7b1ac2ae4b78e61c99f68bb27457912b469e498e58_prof);

        
        $__internal_755f5220a3cd1e996a35f4005020f041ea8f5d55a73c1d9267f295a7e5dc1a4c->leave($__internal_755f5220a3cd1e996a35f4005020f041ea8f5d55a73c1d9267f295a7e5dc1a4c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
