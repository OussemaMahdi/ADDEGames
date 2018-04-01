<?php

/* UserBundle:User:edit.html.twig */
class __TwigTemplate_34a25f7e742198705db07ed67c10f79f62c6aa2386dc8a6588beef26f5e9c93c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:edit.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        // line 4
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <!--<img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" /> -->
            </div>
            <div class=\"pull-left info\">
                <p>Oussema Mahdi</p>

                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                <span class=\"input-group-btn\">
                    <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">NAVIGATION PRINCIPALE</li>


            <li class=\"active\">
                <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">
                    <i class=\"fa fa-th\"></i> <span>Gerer les utilisateurs</span>
                    <span class=\"pull-right-container\">
                        <small class=\"label pull-right bg-green\">new</small>
                    </span>
                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "
";
        // line 52
        echo "
<div class=\"col-md-6\">
<!-- general form elements -->
<div class=\"box box-primary\">
    <div class=\"box-header with-border\">
      <h3 class=\"box-title\">User edit</h3>
    </div>
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new"), "attr" => array("class" => "user_new")));
        echo "
    <div class=\"form-group has-feedback\">
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "username", array()), 'errors');
        echo "
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
    </div>
    <div class=\"form-group has-feedback\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", array(), "FOSUserBundle"))));
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nom", array()), 'errors');
        echo "
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
    </div>
    <div class=\"form-group has-feedback\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prenom", array(), "FOSUserBundle"))));
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "prenom", array()), 'errors');
        echo "
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
    </div>
    <div style=\"visibility: hidden\">
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'rest', array("display" => "hidden"));
        echo "
    </div>
    <!-- /.col -->
    <div class=\"box-footer\">
        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
    </div>
    <!-- /.col -->
    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
</div>
    <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_homepage");
        echo "\">Revenir à la liste</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 85,  145 => 83,  135 => 76,  128 => 72,  124 => 71,  117 => 67,  113 => 66,  106 => 62,  102 => 61,  97 => 59,  88 => 52,  85 => 50,  82 => 49,  64 => 34,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:User:edit.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/User/edit.html.twig");
    }
}
