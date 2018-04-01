<?php

/* @User/jen/edit.html.twig */
class __TwigTemplate_af768d479aa9ff309dc418bd592ee8a3058cc266308a360fbd6b1cf7ff1b9ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/jen/edit.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? null), array(0 => "UserBundle:Form:fields_mission.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_aside($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->loadTemplate("userAside.html.twig", "@User/jen/edit.html.twig", 5)->display($context);
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/css/wizardphases.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/css/wizardmissions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"wizard\">
        <div class=\"wizard-inner\">
            <div class=\"connecting-line\"></div>
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\" class=\"active\" id=\"0\">
                    <a href=\"#step0\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Phase 0\">
                        <span id=\"span_step_0\" class=\"round-tab\">
                            <i class=\"glyphicon glyphicon-folder-open\"></i>
                        </span>
                    </a>
                </li>
                <li role=\"presentation\" class=\"disabled\" id=\"1\">
                    <a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Phase 1\">
                        <span id=\"span_step_1\" class=\"round-tab\">
                            <i class=\"glyphicon glyphicon-pencil\"></i>
                        </span>
                    </a>
                </li>
                <li role=\"presentation\" class=\"disabled\" id=\"2\">
                    <a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step3\" role=\"tab\" title=\"Phase 2\">
                        <span id=\"span_step_2\" class=\"round-tab\">
                            <i class=\"glyphicon glyphicon-pencil\"></i>
                        </span>
                    </a>
                </li>
                <li role=\"presentation\" class=\"disabled\" id=\"3\">
                    <a href=\"#step3\" data-toggle=\"tab\" aria-controls=\"step3\" role=\" tab\" title=\"Phase 3\">
                        <span id=\"span_step_3\" class=\"round-tab\">
                            <i class=\"glyphicon glyphicon-pencil\"></i>
                        </span>
                    </a>
                </li>
                <li role=\"presentation\" class=\"disabled\" id=\"4\">
                    <a href=\"#step4\" data-toggle=\"tab\" aria-controls=\"step3\" role=\"tab\" title=\"Phase 4\">
                        <span id=\"span_step_4\" class=\"round-tab\">
                            <i class=\"glyphicon glyphicon-pencil\"></i>
                        </span>
                    </a>
                </li>
                <li role=\"presentation\" class=\"disabled\" id=\"5\">
                    <a href=\"#complete\" data-toggle=\"tab\" aria-controls=\"complete\" role=\"tab\" title=\"Complete\">
                        <span id=\"span_step_5\" class=\"round-tab\">
                            <i class=\"glyphicon glyphicon-ok\"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" role=\"tabpanel\" id=\"step0\">
                    <div class=\"col-xs-12\">
                        <div class=\"col-md-12\">
                            <h3>Phase 0</h3>
                                <p>
                                    Objectif du guide :
                                    Permettre aux co-concepteurs d’établir rapidement un cahier des charges suffisamment détaillé pour les développeurs et prenant en compte les contraintes des JENP afin d’assurer les apports pédagogiques.
                                    Ce guide pourrait être s’entrecroiser des guides de serious game. Ainsi il ne propose pas de d’étapes et de méthodes pour établir le style graphique du jeu.
                                </p>
                            <ul class=\"list-inline pull-right\">
                                <li><button type=\"button\" class=\"btn btn-primary next-step\">Suivant</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" role=\"tabpanel\" id=\"step1\">
                    <div class=\"col-xs-12\">
                        <div class=\"col-md-12\">
                            <h3>Phase 1</h3>
                            <div id=\"message_step_1\" class=\"box box-warning box-solid hide\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">Attension</h3>
                                    <div class=\"box-tools pull-right\">
                                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
                                            <i class=\"fa fa-minus\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div id=\"erreurs_step_1\" class=\"box-body\">

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "intitule", array()), 'label');
        echo "
                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "intitule", array()), 'widget', array("attr" => array("placeholder" => "intitule")));
        echo "
                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "intitule", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbEnseignants", array()), 'label');
        echo "
                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbEnseignants", array()), 'widget', array("attr" => array("placeholder" => "Nombre d'enseignants")));
        echo "
                                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbEnseignants", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbEtudiants", array()), 'label');
        echo "
                                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbEtudiants", array()), 'widget', array("attr" => array("placeholder" => "Nombre d'etudiants")));
        echo "
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbEtudiants", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbActeurs", array()), 'label');
        echo "
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbActeurs", array()), 'widget', array("attr" => array("placeholder" => "Nombre d'acteurs")));
        echo "
                                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "nbActeurs", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "outils", array()), 'label');
        echo "
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "outils", array()), 'widget', array("attr" => array("placeholder" => "Outils")));
        echo "
                                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "outils", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "dispositifs", array()), 'label');
        echo "
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "dispositifs", array()), 'widget', array("attr" => array("placeholder" => "dispositifs")));
        echo "
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "dispositifs", array()), 'errors');
        echo "
                            </div>
                            <ul class=\"list-inline pull-right\">
                                <li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
                                <li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
                                <li><button type=\"button\" class=\"btn btn-primary next-step\">Suivant</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" role=\"tabpanel\" id=\"step2\">
                    <div class=\"col-xs-12\">
                        <div class=\"col-md-12\">
                            <h3>Phase 2</h3>
                            <div id=\"message_step_2\" class=\"box box-warning box-solid hide\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">Attension</h3>
                                    <div class=\"box-tools pull-right\">
                                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
                                            <i class=\"fa fa-minus\"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div id=\"erreurs_step_2\" class=\"box-body\">

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "disciplines", array()), 'label');
        echo "
                                ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "disciplines", array()), 'widget', array("attr" => array("placeholder" => "disciplines")));
        echo "
                                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "disciplines", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "communautes", array()), 'label');
        echo "
                                ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "communautes", array()), 'widget', array("attr" => array("placeholder" => "communautes")));
        echo "
                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "communautes", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 169
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "synopsys", array()), 'label');
        echo "
                                ";
        // line 170
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "synopsys", array()), 'widget', array("attr" => array("placeholder" => "synopsys")));
        echo "
                                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "synopsys", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <button class=\"btn btn-primary\" type=\"button\" >Imprimer</button>
                                <button class=\"btn btn-primary\" type=\"button\" >Continuer en numerique</button>
                            </div>
                        </div>
                    </div>
                    <ul class=\"list-inline pull-right\">
                        <li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
                        <li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
                        <li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
                    </ul>
                </div>
                <div class=\"tab-pane\" role=\"tabpanel\" id=\"step3\">
                    <div class=\"col-md-12\">
                        <h3>Phase 3</h3>
                        <div id=\"message_step_3\" class=\"box box-warning box-solid hide\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Attension</h3>
                                <div class=\"box-tools pull-right\">
                                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
                                        <i class=\"fa fa-minus\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div id=\"erreurs_step_3\" class=\"box-body\">

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div id=\"add_missions\">
                            
                        </div>
                        <div id=\"liste_missions\">
                            
                        </div>
                        <div class=\"stepwizard\">
                            <div id =\"stepwizard\" class=\"stepwizard-row setup-panel\">
                                
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"box box-primary\">
                                <div class=\"box-header with-border\"
                                    <h3 class=\"box-title\">Mission</h3>
                                </div>
                                ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "missions", array()), 'widget');
        echo "
                                ";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "missions", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <ul class=\"list-inline pull-right\">
                        <li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
                        <li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
                        <li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
                    </ul>
                </div>
                <div class=\"tab-pane\" role=\"tabpanel\" id=\"step4\">
                    <h3>Phase 4</h3>
                    <div id=\"message_step_4\" class=\"box box-warning box-solid hide\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Attention</h3>
                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\">
                                    <i class=\"fa fa-minus\"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div id=\"erreurs_step_4\" class=\"box-body\">

                        </div>
                        <!-- /.box-body -->
                    </div>
                    ";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'rest');
        echo "
                    <ul class=\"list-inline pull-right\">
                        <li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
                        <li><button type=\"button\" class=\"btn btn-default next-step\">Ignorer</button></li>
                        <li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Suivant</button></li>
                    </ul>
                </div>
                <div class=\"tab-pane\" role=\"tabpanel\" id=\"complete\">
                    <h3>Complete</h3>
                    <p>You have successfully completed all steps.</p>
                    <ul class=\"list-inline pull-right\">
                        <li><button type=\"button\" class=\"btn btn-default prev-step\">Précédent</button></li>
                        <li><button type=\"submit\" class=\"btn btn-primary btn-info-full\">Save</button></li>
                    </ul>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        ";
        // line 264
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    // line 268
    public function block_javascript($context, array $blocks = array())
    {
        // line 269
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/js/wizardphases.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/editJen.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\".js-example-placeholder-multiple\").select2({
            placeholder: \"Select a state\"
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@User/jen/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 272,  422 => 270,  417 => 269,  414 => 268,  407 => 264,  387 => 247,  357 => 220,  353 => 219,  302 => 171,  298 => 170,  294 => 169,  288 => 166,  284 => 165,  280 => 164,  274 => 161,  270 => 160,  266 => 159,  233 => 129,  229 => 128,  225 => 127,  219 => 124,  215 => 123,  211 => 122,  205 => 119,  201 => 118,  197 => 117,  191 => 114,  187 => 113,  183 => 112,  177 => 109,  173 => 108,  169 => 107,  163 => 104,  159 => 103,  155 => 102,  115 => 65,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  45 => 9,  42 => 8,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/jen/edit.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle\\Resources\\views\\jen\\edit.html.twig");
    }
}
