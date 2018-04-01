<?php

/* @User/jen/index.html.twig */
class __TwigTemplate_3ccfba6af549b8ec2c4654f1f844ced087fddfdad1f7cd91a24c169b887f97e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/jen/index.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "    ";
        $this->loadTemplate("userAside.html.twig", "@User/jen/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Jeux Epistemiques Numeriques</h3>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
            <!--<table id=\"example2\" class=\"table table-bordered table-hover\">-->
            <thead>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Nbenseignants</th>
                <th>Nbetudiants</th>
                <th>Nbacteurs</th>
                <th>Outils</th>
                <th>Dispositifs</th>
                <th>Synopsys</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jens"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jen"]) {
            // line 32
            echo "                <tr>
                    <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_show", array("id" => $this->getAttribute($context["jen"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "intitule", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "nbEnseignants", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "nbEtudiants", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "nbActeurs", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "outils", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "dispositifs", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["jen"], "synopsys", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_show", array("id" => $this->getAttribute($context["jen"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_edit", array("id" => $this->getAttribute($context["jen"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Nbenseignants</th>
                <th>Nbetudiants</th>
                <th>Nbacteurs</th>
                <th>Outils</th>
                <th>Dispositifs</th>
                <th>Synopsys</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <ul>
        <li>
            <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_new");
        echo "\">Create a new jen</a>
        </li>
    </ul>
";
    }

    // line 80
    public function block_javascript($context, array $blocks = array())
    {
        // line 81
        echo "    <!-- DataTables -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/tables.js"), "html", null, true);
        echo "\"></script>   
";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 88
        echo "    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@User/jen/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 89,  184 => 88,  181 => 87,  175 => 84,  171 => 83,  167 => 82,  164 => 81,  161 => 80,  153 => 75,  129 => 53,  117 => 47,  111 => 44,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  74 => 33,  71 => 32,  67 => 31,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/jen/index.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle\\Resources\\views\\jen\\index.html.twig");
    }
}
