<?php

/* ProjetBundle:Descriptif:modifier.html.twig */
class __TwigTemplate_9b91d1a43367a321de98c3853eb3d52798f358a99b78607166db74feba11f730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:Descriptif:modifier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3cc1b84cc3411e3ec5b5bff69d41d8def3ac093e3330e639427038c76d0fe29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cc1b84cc3411e3ec5b5bff69d41d8def3ac093e3330e639427038c76d0fe29->enter($__internal_c3cc1b84cc3411e3ec5b5bff69d41d8def3ac093e3330e639427038c76d0fe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Descriptif:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3cc1b84cc3411e3ec5b5bff69d41d8def3ac093e3330e639427038c76d0fe29->leave($__internal_c3cc1b84cc3411e3ec5b5bff69d41d8def3ac093e3330e639427038c76d0fe29_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f8c1812ca36caa24cdb8f7e86979783ac50cb65b13e7dee5422e2d8eb71e55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8c1812ca36caa24cdb8f7e86979783ac50cb65b13e7dee5422e2d8eb71e55d->enter($__internal_7f8c1812ca36caa24cdb8f7e86979783ac50cb65b13e7dee5422e2d8eb71e55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Descriptif ";
        
        $__internal_7f8c1812ca36caa24cdb8f7e86979783ac50cb65b13e7dee5422e2d8eb71e55d->leave($__internal_7f8c1812ca36caa24cdb8f7e86979783ac50cb65b13e7dee5422e2d8eb71e55d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a4bec1b1e30d7e802015c9fb2337c53235a20b38977e257c086204446509660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4bec1b1e30d7e802015c9fb2337c53235a20b38977e257c086204446509660->enter($__internal_6a4bec1b1e30d7e802015c9fb2337c53235a20b38977e257c086204446509660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6a4bec1b1e30d7e802015c9fb2337c53235a20b38977e257c086204446509660->leave($__internal_6a4bec1b1e30d7e802015c9fb2337c53235a20b38977e257c086204446509660_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_92b087a6e58c397aff70131cd4f22dc33629a32d259c83f97970ae52d15713d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b087a6e58c397aff70131cd4f22dc33629a32d259c83f97970ae52d15713d3->enter($__internal_92b087a6e58c397aff70131cd4f22dc33629a32d259c83f97970ae52d15713d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                    <li><a ></a>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
        echo " </li>
                    <li class=\"active\"> Modifier descriptif</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modifier un descriptif</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        <form action=\"\" method=\"POST\" id=\"demo-form2\" class=\"form-horizontal form-label-left\" data-parsley-validate=\"true\" novalidate>
                            ";
        // line 31
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 32
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 33
                echo "                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <strong>Erreur! </strong>";
                // line 35
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 39
                echo "                                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <strong>Success! </strong>";
                // line 41
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                            ";
        }
        // line 45
        echo "                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    Indicateurs
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12\" name=\"indicateur\" value=\"\">     
                                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indicateurs"]) ? $context["indicateurs"] : $this->getContext($context, "indicateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["indic"]) {
            // line 52
            echo "                                        \t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indic"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["indic"], "libelleIndicateur", array()) == $this->getAttribute($this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "indicateur", array()), "libelleIndicateur", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indic"], "libelleIndicateur", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    Unité
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12 select2_multiple\" name=\"unite[]\" multiple=\"multiple\">
                                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unites"]) ? $context["unites"] : $this->getContext($context, "unites")));
        foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
            // line 64
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unite"], "libelleUnite", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                                    </select>                                    
                                   
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required\">
                                    </li>
                                </ul>
                            </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Commune de la région
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <select class=\"form-control col-md-7 col-xs-12 select2_multiple\" name=\"commune[]\"  multiple=\"multiple\">
                                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 81
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
            echo "\">
                                                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["region"], "districts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["district"]) {
                // line 83
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["district"], "getCommunes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                    // line 84
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['district'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                        </select>
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Baseline
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"required form-control col-md-7 col-xs-12\" name=\"baseline\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "baselineDescParUi", array()), "html", null, true);
        echo "\" min=\"0\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Objectif
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "objectifDescParUi", array()), "html", null, true);
        echo "\" min=\"0\" name=\"objectif\" >
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Réalisation cumulée
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" name=\"realisation\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "realCumulParUi", array()), "html", null, true);
        echo "\" min=\"0\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Explication
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"text\" class=\"form-control col-md-7 col-xs-12\" name=\"explication\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "explicationDescParUi", array()), "html", null, true);
        echo "\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                            <div class=\"ln_solid\"></div>
                            <div class=\"form-group\">
                                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Soumettre\">
                                    <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\">
                                        <button type=\"button\" class=\"btn btn-success\" >Retour</button>
                                    </a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_92b087a6e58c397aff70131cd4f22dc33629a32d259c83f97970ae52d15713d3->leave($__internal_92b087a6e58c397aff70131cd4f22dc33629a32d259c83f97970ae52d15713d3_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f49a30a4a121ec5e3d5842b7f09f12d3d926b07213dbd0c6bd5c4043818002d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49a30a4a121ec5e3d5842b7f09f12d3d926b07213dbd0c6bd5c4043818002d7->enter($__internal_f49a30a4a121ec5e3d5842b7f09f12d3d926b07213dbd0c6bd5c4043818002d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
    <!-- validator -->
    <script>
        // initialize the validator function
        validator.message.date = 'not a real date';

        // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
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
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {

            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder : \"Veuillez ajouter\",
                allowClear: true,
            });
            \$('select').toggleClass('required');
        });
    </script>
";
        
        $__internal_f49a30a4a121ec5e3d5842b7f09f12d3d926b07213dbd0c6bd5c4043818002d7->leave($__internal_f49a30a4a121ec5e3d5842b7f09f12d3d926b07213dbd0c6bd5c4043818002d7_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Descriptif:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 196,  364 => 165,  359 => 164,  353 => 163,  332 => 148,  318 => 137,  303 => 125,  288 => 113,  273 => 101,  259 => 89,  252 => 87,  246 => 86,  235 => 84,  230 => 83,  226 => 82,  221 => 81,  217 => 80,  201 => 66,  190 => 64,  186 => 63,  175 => 54,  160 => 52,  156 => 51,  148 => 45,  145 => 44,  136 => 41,  132 => 39,  127 => 38,  118 => 35,  114 => 33,  109 => 32,  107 => 31,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\"%}
{% block title %} {{parent()}} Descriptif {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link href=\"{{asset('vendors/select2/dist/css/select2.min.css')}}\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                    <li><a ></a>{{ projet.nomProjet }} </li>
                    <li class=\"active\"> Modifier descriptif</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modifier un descriptif</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        <form action=\"\" method=\"POST\" id=\"demo-form2\" class=\"form-horizontal form-label-left\" data-parsley-validate=\"true\" novalidate>
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
                                    Indicateurs
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12\" name=\"indicateur\" value=\"\">     
                                        {% for indic in indicateurs %}
                                        \t<option value=\"{{ indic.id }}\" {% if indic.libelleIndicateur == descriptifParUi.indicateur.libelleIndicateur %}selected=\"selected\"{% endif %}>{{ indic.libelleIndicateur }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    Unité
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12 select2_multiple\" name=\"unite[]\" multiple=\"multiple\">
                                        {% for unite in unites %}
                                        <option value=\"{{ unite.id }}\">{{ unite.libelleUnite }}</option>
                                        {% endfor %}
                                    </select>                                    
                                   
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required\">
                                    </li>
                                </ul>
                            </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Commune de la région
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <select class=\"form-control col-md-7 col-xs-12 select2_multiple\" name=\"commune[]\"  multiple=\"multiple\">
                                            {% for region in regions %}
                                            <optgroup label=\"{{ region.regionLibelle }}\">
                                                {% for district in region.districts %}
                                                    {% for commune in district.getCommunes %}
                                                    <option value=\"{{ commune.id }}\">{{ commune.communeLibelle }}</option>
                                                    {% endfor %}
                                                {% endfor %}
                                            </optgroup>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Baseline
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"required form-control col-md-7 col-xs-12\" name=\"baseline\" value=\"{{descriptifParUi.baselineDescParUi}}\" min=\"0\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Objectif
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" value=\"{{descriptifParUi.objectifDescParUi}}\" min=\"0\" name=\"objectif\" >
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Réalisation cumulée
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" name=\"realisation\" value=\"{{descriptifParUi.realCumulParUi}}\" min=\"0\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Explication
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"text\" class=\"form-control col-md-7 col-xs-12\" name=\"explication\" value=\"{{descriptifParUi.explicationDescParUi}}\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                            <div class=\"ln_solid\"></div>
                            <div class=\"form-group\">
                                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Soumettre\">
                                    <a href=\"{{ path('projet_index',{'id': projet.id }) }}\">
                                        <button type=\"button\" class=\"btn btn-success\" >Retour</button>
                                    </a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('vendors/validator/validator.js')}}\"></script>
    <!-- validator -->
    <script>
        // initialize the validator function
        validator.message.date = 'not a real date';

        // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
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
    <script src=\"{{asset('vendors/select2/dist/js/select2.full.min.js')}}\"></script>
    <script>
        \$(document).ready(function() {

            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder : \"Veuillez ajouter\",
                allowClear: true,
            });
            \$('select').toggleClass('required');
        });
    </script>
{% endblock %}", "ProjetBundle:Descriptif:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Descriptif/modifier.html.twig");
    }
}
