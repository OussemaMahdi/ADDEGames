<?php

/* UserBundle:jen:show.html.twig */
class __TwigTemplate_f1ba17034de94d51ce2fb3c58a83c69419907b1811a64621a0e64971c2057407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:jen:show.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Jen</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["jen"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intitule</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["jen"] ?? null), "intitule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbenseignants</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["jen"] ?? null), "nbEnseignants", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbetudiants</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["jen"] ?? null), "nbEtudiants", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbacteurs</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["jen"] ?? null), "nbActeurs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Outils</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["jen"] ?? null), "outils", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dispositifs</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["jen"] ?? null), "dispositifs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Synopsys</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["jen"] ?? null), "synopsys", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_edit", array("id" => $this->getAttribute(($context["jen"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:jen:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  110 => 51,  104 => 48,  98 => 45,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:jen:show.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/jen/show.html.twig");
    }
}
