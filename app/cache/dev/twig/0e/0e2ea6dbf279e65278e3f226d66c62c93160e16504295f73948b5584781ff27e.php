<?php

/* ProjetBundle:Activite:modifier.html.twig */
class __TwigTemplate_0e725d8f2ce69a0e0d3a81ff1414fb5c9d3e38071b1ac40f8cf7b10179b0193f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Activite:modifier.html.twig", 1);
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
        $__internal_2026bab869547fe6d57b300ad8d4808f807e4944c494faf97b7a298a2113667b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2026bab869547fe6d57b300ad8d4808f807e4944c494faf97b7a298a2113667b->enter($__internal_2026bab869547fe6d57b300ad8d4808f807e4944c494faf97b7a298a2113667b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Activite:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2026bab869547fe6d57b300ad8d4808f807e4944c494faf97b7a298a2113667b->leave($__internal_2026bab869547fe6d57b300ad8d4808f807e4944c494faf97b7a298a2113667b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b94ae22f34d8ec7a04206c56008aa6e721db15deeb81bb9f867d053ba868d6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94ae22f34d8ec7a04206c56008aa6e721db15deeb81bb9f867d053ba868d6f8->enter($__internal_b94ae22f34d8ec7a04206c56008aa6e721db15deeb81bb9f867d053ba868d6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Utilisateurs ";
        
        $__internal_b94ae22f34d8ec7a04206c56008aa6e721db15deeb81bb9f867d053ba868d6f8->leave($__internal_b94ae22f34d8ec7a04206c56008aa6e721db15deeb81bb9f867d053ba868d6f8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab4197878a0158aa9cc7ed3a56ce57dfabf9a227b146b1d06468bc3ba68bd83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4197878a0158aa9cc7ed3a56ce57dfabf9a227b146b1d06468bc3ba68bd83c->enter($__internal_ab4197878a0158aa9cc7ed3a56ce57dfabf9a227b146b1d06468bc3ba68bd83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_ab4197878a0158aa9cc7ed3a56ce57dfabf9a227b146b1d06468bc3ba68bd83c->leave($__internal_ab4197878a0158aa9cc7ed3a56ce57dfabf9a227b146b1d06468bc3ba68bd83c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_8661a922e83c28fb02ac4f4baea05e75cc4c05b8499e46fda848f24a34f81328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8661a922e83c28fb02ac4f4baea05e75cc4c05b8499e46fda848f24a34f81328->enter($__internal_8661a922e83c28fb02ac4f4baea05e75cc4c05b8499e46fda848f24a34f81328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_composante", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\"> Composante </a></li>
                    <li ><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")))), "html", null, true);
        echo "\">Activité</a></li>
                    <li class=\"active\">Modification</li>
                </ol>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        <h1>Activité</h1>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modification</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "demo-form2", "data-parsley-validate" => "true", "novalidate" => "novalidate", "class" => "form-horizontal form-label-left")));
        echo "
                        ";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 34
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 35
                echo "                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>";
                // line 37
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 41
                echo "                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>";
                // line 43
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        ";
        }
        // line 47
        echo "                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleActivite", array()), 'label', array("label" => "Libellé"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleActivite", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleActivite", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeActivite", array()), 'label', array("label" => "Code"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeActivite", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeActivite", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                                <button type=\"reset\" class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
                            </div>
                        </div>
                        ";
        // line 80
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_8661a922e83c28fb02ac4f4baea05e75cc4c05b8499e46fda848f24a34f81328->leave($__internal_8661a922e83c28fb02ac4f4baea05e75cc4c05b8499e46fda848f24a34f81328_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee1c9377b46e5fa982cff0acfbfb680729ac89ffccef5748785aaee1785d6b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1c9377b46e5fa982cff0acfbfb680729ac89ffccef5748785aaee1785d6b1c->enter($__internal_ee1c9377b46e5fa982cff0acfbfb680729ac89ffccef5748785aaee1785d6b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 91
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
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
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
        });
    </script>
";
        
        $__internal_ee1c9377b46e5fa982cff0acfbfb680729ac89ffccef5748785aaee1785d6b1c->leave($__internal_ee1c9377b46e5fa982cff0acfbfb680729ac89ffccef5748785aaee1785d6b1c_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Activite:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 117,  267 => 116,  239 => 91,  234 => 90,  228 => 89,  213 => 80,  206 => 76,  196 => 69,  189 => 65,  183 => 62,  174 => 56,  167 => 52,  161 => 49,  157 => 47,  154 => 46,  145 => 43,  141 => 41,  136 => 40,  127 => 37,  123 => 35,  118 => 34,  116 => 33,  112 => 32,  92 => 15,  88 => 14,  84 => 13,  77 => 8,  71 => 7,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
{% block title %} {{parent()}} Utilisateurs {% endblock %}
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
                    <li><a href=\"{{ path('projet_lister_composante', {'projet_id': projet_id}) }}\"> Composante </a></li>
                    <li ><a href=\"{{ path('projet_lister_activite', {'projet_id': projet_id, 'comp_id': comp_id}) }}\">Activité</a></li>
                    <li class=\"active\">Modification</li>
                </ol>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        <h1>Activité</h1>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modification</h2>
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
                                {{ form_label(form.libelleActivite,\"Libellé\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.libelleActivite,{ 'attr' : {'required':'true','class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.libelleActivite)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.codeActivite,\"Code\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.codeActivite,{ 'attr' : {'required':'true', 'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.codeActivite)}}
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
        \$(document).ready(function() {
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
        });
    </script>
{% endblock %}", "ProjetBundle:Activite:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Activite/modifier.html.twig");
    }
}