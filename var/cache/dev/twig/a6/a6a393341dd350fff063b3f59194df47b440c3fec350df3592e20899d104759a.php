<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5622d2347b61e2f4de3d1060d7ac06cbc58d9c1dbb230356be7345eebcc37aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_dc20d0a39a0cf8687ae3750d1667177e4fcbc43db85c1e10439faceda70795d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc20d0a39a0cf8687ae3750d1667177e4fcbc43db85c1e10439faceda70795d4->enter($__internal_dc20d0a39a0cf8687ae3750d1667177e4fcbc43db85c1e10439faceda70795d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_8c01c6ca841ebc40e24fb3a62411a6d387a0411672d30cea88f41d9502d6e724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c01c6ca841ebc40e24fb3a62411a6d387a0411672d30cea88f41d9502d6e724->enter($__internal_8c01c6ca841ebc40e24fb3a62411a6d387a0411672d30cea88f41d9502d6e724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc20d0a39a0cf8687ae3750d1667177e4fcbc43db85c1e10439faceda70795d4->leave($__internal_dc20d0a39a0cf8687ae3750d1667177e4fcbc43db85c1e10439faceda70795d4_prof);

        
        $__internal_8c01c6ca841ebc40e24fb3a62411a6d387a0411672d30cea88f41d9502d6e724->leave($__internal_8c01c6ca841ebc40e24fb3a62411a6d387a0411672d30cea88f41d9502d6e724_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc1e35a0ffdf7fdd193617e71300bf4e965ce92d925ed9d1e95bfb3757ceaa08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1e35a0ffdf7fdd193617e71300bf4e965ce92d925ed9d1e95bfb3757ceaa08->enter($__internal_bc1e35a0ffdf7fdd193617e71300bf4e965ce92d925ed9d1e95bfb3757ceaa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_423f5659d462205ec90690d609f239b991dde17236014722600d49de83ddb57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423f5659d462205ec90690d609f239b991dde17236014722600d49de83ddb57a->enter($__internal_423f5659d462205ec90690d609f239b991dde17236014722600d49de83ddb57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_423f5659d462205ec90690d609f239b991dde17236014722600d49de83ddb57a->leave($__internal_423f5659d462205ec90690d609f239b991dde17236014722600d49de83ddb57a_prof);

        
        $__internal_bc1e35a0ffdf7fdd193617e71300bf4e965ce92d925ed9d1e95bfb3757ceaa08->leave($__internal_bc1e35a0ffdf7fdd193617e71300bf4e965ce92d925ed9d1e95bfb3757ceaa08_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
