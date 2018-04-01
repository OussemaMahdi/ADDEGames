<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_93de7dcf873452bb1d61f52bc6ffbfb19986b729859968fe3fbc2375483e118e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        if (($context["error"] ?? null)) {
            // line 14
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        if (($context["csrf_token"] ?? null)) {
            // line 23
            echo "\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
\t\t";
        }
        // line 25
        echo "\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
    }

    // line 58
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  132 => 59,  129 => 58,  119 => 50,  114 => 48,  106 => 43,  86 => 26,  83 => 25,  77 => 23,  75 => 22,  71 => 21,  64 => 16,  58 => 14,  56 => 13,  53 => 11,  50 => 10,  44 => 7,  40 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
