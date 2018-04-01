<?php

/* ::accueil.html.twig */
class __TwigTemplate_ab425069f564825fbdd4c744ee1dde951c2c40a9837f2154f46fc003fc183ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8776684e2456d904eff5554ad09fda064ecad8809adad450136dcadbca3ef1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8776684e2456d904eff5554ad09fda064ecad8809adad450136dcadbca3ef1f2->enter($__internal_8776684e2456d904eff5554ad09fda064ecad8809adad450136dcadbca3ef1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        $__internal_a8ec3a2380578abf7a277fd5b569961b5dd93cfa895682fdbb365bfad02b9bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ec3a2380578abf7a277fd5b569961b5dd93cfa895682fdbb365bfad02b9bec->enter($__internal_a8ec3a2380578abf7a277fd5b569961b5dd93cfa895682fdbb365bfad02b9bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>JENLab | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

  ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"\"><b>JEN</b>Lab</a>
  </div>
\t\t\t\t";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "\t</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck 1.0.1 -->
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 57
        $this->displayBlock('javascript', $context, $blocks);
        // line 58
        echo "</body>
</html>
";
        
        $__internal_8776684e2456d904eff5554ad09fda064ecad8809adad450136dcadbca3ef1f2->leave($__internal_8776684e2456d904eff5554ad09fda064ecad8809adad450136dcadbca3ef1f2_prof);

        
        $__internal_a8ec3a2380578abf7a277fd5b569961b5dd93cfa895682fdbb365bfad02b9bec->leave($__internal_a8ec3a2380578abf7a277fd5b569961b5dd93cfa895682fdbb365bfad02b9bec_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea0415a77a576b577a7f4c5076694a0ff5510c4f0975a9b4dff884bde4a13743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0415a77a576b577a7f4c5076694a0ff5510c4f0975a9b4dff884bde4a13743->enter($__internal_ea0415a77a576b577a7f4c5076694a0ff5510c4f0975a9b4dff884bde4a13743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_92f69d7d6a38454dd4da4b2d65b3d5f4bf1efcd05c81cacb3b843252361358ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f69d7d6a38454dd4da4b2d65b3d5f4bf1efcd05c81cacb3b843252361358ef->enter($__internal_92f69d7d6a38454dd4da4b2d65b3d5f4bf1efcd05c81cacb3b843252361358ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92f69d7d6a38454dd4da4b2d65b3d5f4bf1efcd05c81cacb3b843252361358ef->leave($__internal_92f69d7d6a38454dd4da4b2d65b3d5f4bf1efcd05c81cacb3b843252361358ef_prof);

        
        $__internal_ea0415a77a576b577a7f4c5076694a0ff5510c4f0975a9b4dff884bde4a13743->leave($__internal_ea0415a77a576b577a7f4c5076694a0ff5510c4f0975a9b4dff884bde4a13743_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_44ea3d19b92b9f3a34e840b488a906c1c01002f4688abdd0e3a3c37daacb2a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ea3d19b92b9f3a34e840b488a906c1c01002f4688abdd0e3a3c37daacb2a0a->enter($__internal_44ea3d19b92b9f3a34e840b488a906c1c01002f4688abdd0e3a3c37daacb2a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d185b209d42c448b9fe0f893c07d143003974285ed1bf05296c902fcfb8558f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d185b209d42c448b9fe0f893c07d143003974285ed1bf05296c902fcfb8558f2->enter($__internal_d185b209d42c448b9fe0f893c07d143003974285ed1bf05296c902fcfb8558f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "\t\t\t\t";
        
        $__internal_d185b209d42c448b9fe0f893c07d143003974285ed1bf05296c902fcfb8558f2->leave($__internal_d185b209d42c448b9fe0f893c07d143003974285ed1bf05296c902fcfb8558f2_prof);

        
        $__internal_44ea3d19b92b9f3a34e840b488a906c1c01002f4688abdd0e3a3c37daacb2a0a->leave($__internal_44ea3d19b92b9f3a34e840b488a906c1c01002f4688abdd0e3a3c37daacb2a0a_prof);

    }

    // line 57
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b3289fe56fb726351d6c3308ea434dff5f080b8044bd0b805415747a7d570d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3289fe56fb726351d6c3308ea434dff5f080b8044bd0b805415747a7d570d8a->enter($__internal_b3289fe56fb726351d6c3308ea434dff5f080b8044bd0b805415747a7d570d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_632714d62f20d25b5f8d86c6305b544d11f5b3b674ef10f72e7923d283450111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632714d62f20d25b5f8d86c6305b544d11f5b3b674ef10f72e7923d283450111->enter($__internal_632714d62f20d25b5f8d86c6305b544d11f5b3b674ef10f72e7923d283450111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_632714d62f20d25b5f8d86c6305b544d11f5b3b674ef10f72e7923d283450111->leave($__internal_632714d62f20d25b5f8d86c6305b544d11f5b3b674ef10f72e7923d283450111_prof);

        
        $__internal_b3289fe56fb726351d6c3308ea434dff5f080b8044bd0b805415747a7d570d8a->leave($__internal_b3289fe56fb726351d6c3308ea434dff5f080b8044bd0b805415747a7d570d8a_prof);

    }

    public function getTemplateName()
    {
        return "::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  164 => 40,  155 => 39,  138 => 31,  126 => 58,  124 => 57,  119 => 55,  114 => 53,  103 => 45,  97 => 41,  95 => 39,  86 => 32,  84 => 31,  79 => 29,  74 => 27,  69 => 25,  64 => 23,  59 => 21,  54 => 19,  48 => 16,  39 => 10,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>JENLab | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/dist/css/AdminLTE.min.css') }}\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/dist/css/skins/_all-skins.min.css') }}\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/iCheck/flat/blue.css') }}\">
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/datepicker/datepicker3.css') }}\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">

  {% block stylesheets %}{% endblock %}

</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"\"><b>JEN</b>Lab</a>
  </div>
\t\t\t\t{% block body %}
\t\t\t\t{% endblock %}
\t</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src=\"{{ asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
<!-- iCheck 1.0.1 -->
<script src=\"{{ asset('assets/plugins/iCheck/icheck.min.js') }}\"></script>

{% block javascript %}{% endblock %}
</body>
</html>
", "::accueil.html.twig", "C:\\wamp64\\www\\Guide_v04\\app/Resources\\views/accueil.html.twig");
    }
}
