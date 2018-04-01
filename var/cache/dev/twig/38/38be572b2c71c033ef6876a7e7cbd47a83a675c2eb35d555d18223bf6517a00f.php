<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d9d84413689cb834f1d48567c5d232a891008eb5817084617f5e750f63fb5e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1135c24e38598a0e37b0c08529cb5b9c9ac83c593ebb494e9f5a2077b631cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1135c24e38598a0e37b0c08529cb5b9c9ac83c593ebb494e9f5a2077b631cb8->enter($__internal_f1135c24e38598a0e37b0c08529cb5b9c9ac83c593ebb494e9f5a2077b631cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_fc74c07d5abd9723c2628e3cc1177ffe9e276a5da87f02d6d2aea59cf5adda41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc74c07d5abd9723c2628e3cc1177ffe9e276a5da87f02d6d2aea59cf5adda41->enter($__internal_fc74c07d5abd9723c2628e3cc1177ffe9e276a5da87f02d6d2aea59cf5adda41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1135c24e38598a0e37b0c08529cb5b9c9ac83c593ebb494e9f5a2077b631cb8->leave($__internal_f1135c24e38598a0e37b0c08529cb5b9c9ac83c593ebb494e9f5a2077b631cb8_prof);

        
        $__internal_fc74c07d5abd9723c2628e3cc1177ffe9e276a5da87f02d6d2aea59cf5adda41->leave($__internal_fc74c07d5abd9723c2628e3cc1177ffe9e276a5da87f02d6d2aea59cf5adda41_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_442ae9380e304bdd671565d008551231277f2712d6a2fa485ce25176806cc9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442ae9380e304bdd671565d008551231277f2712d6a2fa485ce25176806cc9ec->enter($__internal_442ae9380e304bdd671565d008551231277f2712d6a2fa485ce25176806cc9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3127123484274ad0d80e12c29ff06835914e689b5f6c2241fb82256f81d079ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3127123484274ad0d80e12c29ff06835914e689b5f6c2241fb82256f81d079ed->enter($__internal_3127123484274ad0d80e12c29ff06835914e689b5f6c2241fb82256f81d079ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<!-- Select2 -->
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/all.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_3127123484274ad0d80e12c29ff06835914e689b5f6c2241fb82256f81d079ed->leave($__internal_3127123484274ad0d80e12c29ff06835914e689b5f6c2241fb82256f81d079ed_prof);

        
        $__internal_442ae9380e304bdd671565d008551231277f2712d6a2fa485ce25176806cc9ec->leave($__internal_442ae9380e304bdd671565d008551231277f2712d6a2fa485ce25176806cc9ec_prof);

    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06ae3f6456225bb8cfe8178ae3769fa010b4441ed5d31884b2cf634392b835d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ae3f6456225bb8cfe8178ae3769fa010b4441ed5d31884b2cf634392b835d8->enter($__internal_06ae3f6456225bb8cfe8178ae3769fa010b4441ed5d31884b2cf634392b835d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79d340c07c7a500ccde9661334a0b2d6172195998516d9520b12a305977efe1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d340c07c7a500ccde9661334a0b2d6172195998516d9520b12a305977efe1a->enter($__internal_79d340c07c7a500ccde9661334a0b2d6172195998516d9520b12a305977efe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 11
        echo "
";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 16
        echo "

<!-- /.login-logo -->
<div class=\"login-box-body\">
\t<p class=\"login-box-msg\">Sign in to start your session</p>
\t<form action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t";
        // line 22
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 23
            echo "\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
\t\t";
        }
        // line 25
        echo "\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t<span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
\t\t</div>
\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<div class=\"checkbox icheck\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" class=\"minimal\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\tSe souvenir de moi
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>
\t</form>
\t<div class=\"form-group has-feedback\">
\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
\t\t<br/>
\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
\t</div>
</div>
<!-- /.login-box-body -->

";
        
        $__internal_79d340c07c7a500ccde9661334a0b2d6172195998516d9520b12a305977efe1a->leave($__internal_79d340c07c7a500ccde9661334a0b2d6172195998516d9520b12a305977efe1a_prof);

        
        $__internal_06ae3f6456225bb8cfe8178ae3769fa010b4441ed5d31884b2cf634392b835d8->leave($__internal_06ae3f6456225bb8cfe8178ae3769fa010b4441ed5d31884b2cf634392b835d8_prof);

    }

    // line 58
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a71cfbfb68bba0c0751bc3f49d11b43bce58509f76b463eaaeeb7ad1ecf8f893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71cfbfb68bba0c0751bc3f49d11b43bce58509f76b463eaaeeb7ad1ecf8f893->enter($__internal_a71cfbfb68bba0c0751bc3f49d11b43bce58509f76b463eaaeeb7ad1ecf8f893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c93456f391b2ad95f37b7ff98f1f2c36898f831d2d7a3b5c26a898c31059f8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93456f391b2ad95f37b7ff98f1f2c36898f831d2d7a3b5c26a898c31059f8cd->enter($__internal_c93456f391b2ad95f37b7ff98f1f2c36898f831d2d7a3b5c26a898c31059f8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 59
        echo "\t<script>
\t\t\$(function () {
\t\t\t//iCheck for checkbox and radio inputs
\t\t\t\$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
\t\t\t\tcheckboxClass: 'icheckbox_minimal-blue',
\t\t\t\tradioClass: 'iradio_minimal-blue'
\t\t\t});
\t\t\t//Red color scheme for iCheck
\t\t\t\$('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
\t\t\t\tcheckboxClass: 'icheckbox_minimal-red',
\t\t\t\tradioClass: 'iradio_minimal-red'
\t\t\t});
\t\t\t//Flat red color scheme for iCheck
\t\t\t\$('input[type=\"checkbox\"].flat-red, input[type=\"radio\"].flat-red').iCheck({
\t\t\t\tcheckboxClass: 'icheckbox_flat-green',
\t\t\t\tradioClass: 'iradio_flat-green'
\t\t\t});
\t\t});
\t</script>
";
        
        $__internal_c93456f391b2ad95f37b7ff98f1f2c36898f831d2d7a3b5c26a898c31059f8cd->leave($__internal_c93456f391b2ad95f37b7ff98f1f2c36898f831d2d7a3b5c26a898c31059f8cd_prof);

        
        $__internal_a71cfbfb68bba0c0751bc3f49d11b43bce58509f76b463eaaeeb7ad1ecf8f893->leave($__internal_a71cfbfb68bba0c0751bc3f49d11b43bce58509f76b463eaaeeb7ad1ecf8f893_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  165 => 58,  149 => 50,  144 => 48,  136 => 43,  116 => 26,  113 => 25,  107 => 23,  105 => 22,  101 => 21,  94 => 16,  88 => 14,  86 => 13,  83 => 11,  74 => 10,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block stylesheets %}
\t<!-- Select2 -->
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/select2/select2.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/iCheck/all.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/dist/css/skins/_all-skins.min.css') }}\">
{% endblock %}

{% block fos_user_content %}

{% trans_default_domain 'FOSUserBundle' %}
{% if error %}
\t<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


<!-- /.login-logo -->
<div class=\"login-box-body\">
\t<p class=\"login-box-msg\">Sign in to start your session</p>
\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t{% if csrf_token %}
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
\t\t{% endif %}
\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
\t\t\t<span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
\t\t</div>
\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<div class=\"checkbox icheck\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" class=\"minimal\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\tSe souvenir de moi
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'security.login.submit'|trans }}\" />
\t\t\t</div>
\t\t</div>
\t</form>
\t<div class=\"form-group has-feedback\">
\t\t<a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>
\t\t<br/>
\t\t<a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
\t</div>
</div>
<!-- /.login-box-body -->

{% endblock fos_user_content %}


{% block javascript %}
\t<script>
\t\t\$(function () {
\t\t\t//iCheck for checkbox and radio inputs
\t\t\t\$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
\t\t\t\tcheckboxClass: 'icheckbox_minimal-blue',
\t\t\t\tradioClass: 'iradio_minimal-blue'
\t\t\t});
\t\t\t//Red color scheme for iCheck
\t\t\t\$('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
\t\t\t\tcheckboxClass: 'icheckbox_minimal-red',
\t\t\t\tradioClass: 'iradio_minimal-red'
\t\t\t});
\t\t\t//Flat red color scheme for iCheck
\t\t\t\$('input[type=\"checkbox\"].flat-red, input[type=\"radio\"].flat-red').iCheck({
\t\t\t\tcheckboxClass: 'icheckbox_flat-green',
\t\t\t\tradioClass: 'iradio_flat-green'
\t\t\t});
\t\t});
\t</script>
{% endblock javascript %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
