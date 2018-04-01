<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_18a6f4a36a9d623d29aa7bdeccde83cb5f110363be3377bc372126d20b986019 extends Twig_Template
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
        $__internal_a0d9eb408dba1fbf41ed71e75ab1e4a07eb13451a12b3d96330e7a2de51e94a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d9eb408dba1fbf41ed71e75ab1e4a07eb13451a12b3d96330e7a2de51e94a8->enter($__internal_a0d9eb408dba1fbf41ed71e75ab1e4a07eb13451a12b3d96330e7a2de51e94a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_ab0616855c44410bdbd4164e96c75de79ab31b3a6c704eb1daef0f7f4f68f63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0616855c44410bdbd4164e96c75de79ab31b3a6c704eb1daef0f7f4f68f63d->enter($__internal_ab0616855c44410bdbd4164e96c75de79ab31b3a6c704eb1daef0f7f4f68f63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<div class=\"register-box-body\">
\t<p class=\"login-box-msg\">Register a new membership</p>
\t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
\t<div class=\"form-group has-feedback\">
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", array(), "FOSUserBundle"))));
        echo "
\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prenom", array(), "FOSUserBundle"))));
        echo "
\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.email", array(), "FOSUserBundle"))));
        echo "
\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t<span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password", array(), "FOSUserBundle"))));
        echo "
\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
\t\t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "
\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
\t\t<span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</div>
\t<!-- /.col -->
\t<div class=\"form-group has-feedback\">
\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
\t</div>
\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<!-- /.col -->
\t<!-- fos_user_security_login -->
</div>

\t\t";
        
        $__internal_a0d9eb408dba1fbf41ed71e75ab1e4a07eb13451a12b3d96330e7a2de51e94a8->leave($__internal_a0d9eb408dba1fbf41ed71e75ab1e4a07eb13451a12b3d96330e7a2de51e94a8_prof);

        
        $__internal_ab0616855c44410bdbd4164e96c75de79ab31b3a6c704eb1daef0f7f4f68f63d->leave($__internal_ab0616855c44410bdbd4164e96c75de79ab31b3a6c704eb1daef0f7f4f68f63d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  108 => 41,  101 => 37,  94 => 33,  90 => 32,  83 => 28,  79 => 27,  72 => 23,  68 => 22,  61 => 18,  57 => 17,  50 => 13,  46 => 12,  39 => 8,  35 => 7,  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"register-box-body\">
\t<p class=\"login-box-msg\">Register a new membership</p>
\t{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
\t<div class=\"form-group has-feedback\">
\t\t{{ form_widget(form.username, { 'attr': {'class': 'form-control', 'placeholder': 'form.username'|trans } }) }}
\t\t{{ form_errors(form.username) }}
\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t{{ form_widget(form.nom, { 'attr': {'class': 'form-control', 'placeholder': 'Nom'|trans } }) }}
\t\t{{ form_errors(form.nom) }}
\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t{{ form_widget(form.prenom, { 'attr': {'class': 'form-control', 'placeholder': 'Prenom'|trans } }) }}
\t\t{{ form_errors(form.prenom) }}
\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t{{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'form.email'|trans } }) }}
\t\t{{ form_errors(form.email) }}
\t\t<span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t{{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'form.password'|trans } }) }}
\t\t{{ form_errors(form.plainPassword.first) }}
\t\t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t{{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}
\t\t{{ form_errors(form.plainPassword.second) }}
\t\t<span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
\t</div>
\t<div class=\"form-group has-feedback\">
\t\t{{ form_rest(form) }}
\t</div>
\t<!-- /.col -->
\t<div class=\"form-group has-feedback\">
\t\t<button type=\"submit\" class=\"btn btn-primary\">{{ 'registration.submit'|trans }}</button>
\t</div>
\t{{ form_end(form) }}
\t<!-- /.col -->
\t<!-- fos_user_security_login -->
</div>

\t\t", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
