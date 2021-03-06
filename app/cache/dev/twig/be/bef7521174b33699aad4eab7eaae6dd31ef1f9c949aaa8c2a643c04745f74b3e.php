<?php

/* ProjetBundle:Projet:ajout.html.twig */
class __TwigTemplate_c82b62db506f4ddaadfa7c809851dce8671d80947baac10ea0d7e282aaae9215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Projet:ajout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a02b34012c02c37bc53053cfff0ef42422d6a8874ec08670191786f8e1eb5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a02b34012c02c37bc53053cfff0ef42422d6a8874ec08670191786f8e1eb5f9->enter($__internal_5a02b34012c02c37bc53053cfff0ef42422d6a8874ec08670191786f8e1eb5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Projet:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a02b34012c02c37bc53053cfff0ef42422d6a8874ec08670191786f8e1eb5f9->leave($__internal_5a02b34012c02c37bc53053cfff0ef42422d6a8874ec08670191786f8e1eb5f9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_04dd26fc69691fe977e401392fafb759b28543762098ae8db489e1b826cd56ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dd26fc69691fe977e401392fafb759b28543762098ae8db489e1b826cd56ef->enter($__internal_04dd26fc69691fe977e401392fafb759b28543762098ae8db489e1b826cd56ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajouter projet ";
        
        $__internal_04dd26fc69691fe977e401392fafb759b28543762098ae8db489e1b826cd56ef->leave($__internal_04dd26fc69691fe977e401392fafb759b28543762098ae8db489e1b826cd56ef_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c93abf907c874291bbd6bb07375f8dfcfe5ecf61e8a62cb245db7f5b156d1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c93abf907c874291bbd6bb07375f8dfcfe5ecf61e8a62cb245db7f5b156d1c3->enter($__internal_2c93abf907c874291bbd6bb07375f8dfcfe5ecf61e8a62cb245db7f5b156d1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_2c93abf907c874291bbd6bb07375f8dfcfe5ecf61e8a62cb245db7f5b156d1c3->leave($__internal_2c93abf907c874291bbd6bb07375f8dfcfe5ecf61e8a62cb245db7f5b156d1c3_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b061f8560fe868ba128b31473cca23527c61fc536225348b53ca135117b309b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b061f8560fe868ba128b31473cca23527c61fc536225348b53ca135117b309b0->enter($__internal_b061f8560fe868ba128b31473cca23527c61fc536225348b53ca135117b309b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                    <li class=\"active\">Nouveau projet</li>
                </ol>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        <h1>Projet</h1>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Nouveau projet</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "demo-form2", "data-parsley-validate" => "true", "novalidate" => "novalidate", "class" => "form-horizontal form-label-left")));
        echo "
                        ";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 33
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 34
                echo "                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>";
                // line 36
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 40
                echo "                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>";
                // line 42
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        ";
        }
        // line 46
        echo "                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'label', array("label" => "Nom du projet"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objectifProjet", array()), 'label', array("label" => "Objectif"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objectifProjet", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objectifProjet", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entites", array()), 'label', array("label" => "Entités"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entites", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control col-md-7 col-xs-12 select2_group")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entites", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regions", array()), 'label', array("label" => "Régions"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regions", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control col-md-7 col-xs-12 select2_group")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regions", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                                <button type=\"reset\" class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
                            </div>
                        </div>
                        ";
        // line 105
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_b061f8560fe868ba128b31473cca23527c61fc536225348b53ca135117b309b0->leave($__internal_b061f8560fe868ba128b31473cca23527c61fc536225348b53ca135117b309b0_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6ba1c4024e95b1d839c7d68ed0a8ae74b68f4f451631ec1247fc1aa57efa3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ba1c4024e95b1d839c7d68ed0a8ae74b68f4f451631ec1247fc1aa57efa3fe->enter($__internal_d6ba1c4024e95b1d839c7d68ed0a8ae74b68f4f451631ec1247fc1aa57efa3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('form')
                .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                .on('change', 'select.required', validator.checkField)
                .on('keypress', 'input[required][pattern]', validator.keypress);

        \$('.multi.required').on('keyup blur', 'input', function() {
            validator.checkField.apply(\$(this).siblings().last()[0]);
        });
        \$('form').submit(function(e) {
            e.preventDefault();
            var submit = true;

            // evaluate the form using generic validaing
            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
                this.submit();

            return false;
        });
    </script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\".select2_single\").select2({
            placeholder: \"Select a state\",
            allowClear: true
        });
        \$(\".select2_group\").select2({});
        \$(\".select2_multiple\").select2({
            maximumSelectionLength: 10,
            placeholder: \"Enités\",
            allowClear: true
        });
    </script>
";
        
        $__internal_d6ba1c4024e95b1d839c7d68ed0a8ae74b68f4f451631ec1247fc1aa57efa3fe->leave($__internal_d6ba1c4024e95b1d839c7d68ed0a8ae74b68f4f451631ec1247fc1aa57efa3fe_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Projet:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 142,  304 => 141,  276 => 116,  271 => 115,  265 => 114,  250 => 105,  243 => 101,  233 => 94,  226 => 90,  220 => 87,  211 => 81,  204 => 77,  198 => 74,  189 => 68,  182 => 64,  176 => 61,  167 => 55,  160 => 51,  154 => 48,  150 => 46,  147 => 45,  138 => 42,  134 => 40,  129 => 39,  120 => 36,  116 => 34,  111 => 33,  109 => 32,  105 => 31,  84 => 13,  77 => 8,  71 => 7,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ProjetBundle::layout.html.twig\"%}
{% block title %} {{parent()}} Ajouter projet {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link href=\"{{asset('vendors/select2/dist/css/select2.min.css')}}\" rel=\"stylesheet\">
{% endblock %}
{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                    <li class=\"active\">Nouveau projet</li>
                </ol>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        <h1>Projet</h1>

        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Nouveau projet</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        {{ form_start(form, {'attr': { 'id':'demo-form2' ,'data-parsley-validate':'true','novalidate': 'novalidate' , 'class': 'form-horizontal form-label-left'}})}}
                        {% if app.request.hasPreviousSession %}
                            {% for flashMessage in app.session.flashBag.get('notice_error') %}
                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>{{ flashMessage }}
                                </div>
                            {% endfor %}
                            {% for flashMessage in app.session.flashBag.get('notice_success') %}
                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>{{ flashMessage }}
                                </div>
                            {% endfor %}
                        {% endif %}
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.nomProjet,\"Nom du projet\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.nomProjet,{ 'attr' : {'required':'true','class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.nomProjet)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.objectifProjet,\"Objectif\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.objectifProjet,{ 'attr' : {'required':'true', 'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.objectifProjet)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.entites,\"Entités\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.entites,{ 'attr' : {'required':'true', 'class':'form-control col-md-7 col-xs-12 select2_group'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.entites)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.regions,\"Régions\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.regions,{ 'attr' : {'required':'true', 'class':'form-control col-md-7 col-xs-12 select2_group'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.regions)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                {{ form_widget(form.save) }}
                                <button type=\"reset\" class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('vendors/validator/validator.js')}}\"></script>
    <script>
        \$('form')
                .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                .on('change', 'select.required', validator.checkField)
                .on('keypress', 'input[required][pattern]', validator.keypress);

        \$('.multi.required').on('keyup blur', 'input', function() {
            validator.checkField.apply(\$(this).siblings().last()[0]);
        });
        \$('form').submit(function(e) {
            e.preventDefault();
            var submit = true;

            // evaluate the form using generic validaing
            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
                this.submit();

            return false;
        });
    </script>
    <script src=\"{{ asset('js/jquery.validate.js') }}\"></script>
    <script src=\"{{asset('vendors/select2/dist/js/select2.full.min.js')}}\"></script>
    <script>
        \$(\".select2_single\").select2({
            placeholder: \"Select a state\",
            allowClear: true
        });
        \$(\".select2_group\").select2({});
        \$(\".select2_multiple\").select2({
            maximumSelectionLength: 10,
            placeholder: \"Enités\",
            allowClear: true
        });
    </script>
{% endblock %}", "ProjetBundle:Projet:ajout.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Projet/ajout.html.twig");
    }
}
