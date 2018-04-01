<?php

/* @User/Form/fields_mission.html.twig */
class __TwigTemplate_06bd7d404195dae8d2cd9ca05e810bfb64c4e2b74345b54f3e01eca71184d0b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_sce_userbundle_jen_missions_entry_widget' => array($this, 'block__sce_userbundle_jen_missions_entry_widget'),
            '_sce_userbundle_jen_missions_entry_images_entry_widget' => array($this, 'block__sce_userbundle_jen_missions_entry_images_entry_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            '_sce_userbundle_jen_disciplines_entry_widget' => array($this, 'block__sce_userbundle_jen_disciplines_entry_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_sce_userbundle_jen_missions_entry_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('_sce_userbundle_jen_missions_entry_images_entry_widget', $context, $blocks);
        // line 69
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 74
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 80
        $this->displayBlock('_sce_userbundle_jen_disciplines_entry_widget', $context, $blocks);
        // line 88
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 97
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 119
        $this->displayBlock('choice_widget_options', $context, $blocks);
    }

    // line 1
    public function block__sce_userbundle_jen_missions_entry_widget($context, array $blocks = array())
    {
        // line 2
        echo "\t<div class=\"col-xs-12\">
\t\t<div class=\"box-body\">
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'label');
        echo "
\t\t\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'widget', array("attr" => array("placeholder" => "Titre", "readonly" => "true")));
        echo "
\t\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contexteScenaristique", array()), 'label');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contexteScenaristique", array()), 'widget', array("attr" => array("placeholder" => "Contexte Scenaristique")));
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contexteScenaristique", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptif", array()), 'label');
        echo "
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptif", array()), 'widget', array("attr" => array("placeholder" => "Descriptif")));
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptif", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ludification", array()), 'label');
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ludification", array()), 'widget', array("attr" => array("placeholder" => "Ludification")));
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ludification", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "authenticite", array()), 'label');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "authenticite", array()), 'widget', array("attr" => array("placeholder" => "Authenticite")));
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "authenticite", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "immersion", array()), 'label');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "immersion", array()), 'widget', array("attr" => array("placeholder" => "Immersion")));
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "immersion", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "images", array()), 'widget');
        echo "
\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "images", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-footer\">
\t\t\t<button class=\"btn btn-primary nextBtn\" type=\"button\" >Suivant</button>
\t\t</div>
\t</div>
";
    }

    // line 48
    public function block__sce_userbundle_jen_missions_entry_images_entry_widget($context, array $blocks = array())
    {
        // line 49
        echo "\t<div class=\"form-group\">
\t\t<div class=\"input-group\">
\t\t\t<label class=\"input-group-btn\">
\t\t\t\t<span class=\"btn btn-primary\">
\t\t\t\t\tParcourir… 
\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'errors');
        echo "
\t\t\t\t</span>
\t\t\t</label>
\t\t\t<input type=\"text\" class=\"form-control\" readonly=\"\">
\t\t\t<label class=\"input-group-btn\">
\t\t\t\t<span id=\"imageDeleteLink\" class=\"btn btn-danger\">
\t\t\t\t\t<div></div>
\t\t\t\t\tSupprimer 
\t\t\t\t</span>
\t\t\t</label>
\t\t</div>
\t</div>
";
    }

    // line 69
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 70
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 71
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" class ='form-control' ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 74
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 75
        echo "<textarea class ='form-control' ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 80
    public function block__sce_userbundle_jen_disciplines_entry_widget($context, array $blocks = array())
    {
        // line 81
        if (($context["expanded"] ?? null)) {
            // line 82
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 84
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 88
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 89
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 91
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 92
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "</div>";
    }

    // line 97
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 98
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? null), "size", array()) <= 1)))) {
            // line 99
            $context["required"] = false;
        }
        // line 101
        echo "<div class=\"form-group\">
\t\t<select class=\"form-control js-example-placeholder-multiple\" ";
        // line 102
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 103
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 104
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 106
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 107
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 108
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 109
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 110
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 113
        $context["options"] = ($context["choices"] ?? null);
        // line 114
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 115
        echo "</select>
\t</div>";
    }

    // line 119
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 121
            if (twig_test_iterable($context["choice"])) {
                // line 122
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 123
                $context["options"] = $context["choice"];
                // line 124
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 125
                echo "</optgroup>";
            } else {
                // line 127
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">
\t\t\t\t";
                // line 128
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@User/Form/fields_mission.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  358 => 128,  344 => 127,  341 => 125,  339 => 124,  337 => 123,  332 => 122,  330 => 121,  313 => 120,  310 => 119,  305 => 115,  303 => 114,  301 => 113,  295 => 110,  293 => 109,  291 => 108,  289 => 107,  287 => 106,  278 => 104,  276 => 103,  270 => 102,  267 => 101,  264 => 99,  262 => 98,  259 => 97,  255 => 94,  249 => 92,  247 => 91,  243 => 90,  239 => 89,  236 => 88,  231 => 84,  228 => 82,  226 => 81,  223 => 80,  215 => 75,  212 => 74,  198 => 71,  196 => 70,  193 => 69,  176 => 55,  172 => 54,  165 => 49,  162 => 48,  150 => 39,  144 => 36,  140 => 35,  134 => 32,  130 => 31,  126 => 30,  120 => 27,  116 => 26,  112 => 25,  106 => 22,  102 => 21,  98 => 20,  92 => 17,  88 => 16,  84 => 15,  78 => 12,  74 => 11,  70 => 10,  64 => 7,  60 => 6,  56 => 5,  51 => 2,  48 => 1,  44 => 119,  42 => 97,  40 => 88,  38 => 80,  36 => 74,  34 => 69,  32 => 48,  29 => 47,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/Form/fields_mission.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle\\Resources\\views\\Form\\fields_mission.html.twig");
    }
}
