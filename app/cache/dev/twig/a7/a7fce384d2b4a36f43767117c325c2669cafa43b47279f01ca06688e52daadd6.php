<?php

/* ProjetBundle:Descriptif:ajouter.html.twig */
class __TwigTemplate_3ddbad7b32c88867893dce904b50eda576990635fc473755d5985d7da45f7034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:Descriptif:ajouter.html.twig", 1);
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
        $__internal_2a833f5eae2c77a4aa2c5f2c17914d76903642dcf9a3c004251d675be6ca13b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a833f5eae2c77a4aa2c5f2c17914d76903642dcf9a3c004251d675be6ca13b0->enter($__internal_2a833f5eae2c77a4aa2c5f2c17914d76903642dcf9a3c004251d675be6ca13b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Descriptif:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a833f5eae2c77a4aa2c5f2c17914d76903642dcf9a3c004251d675be6ca13b0->leave($__internal_2a833f5eae2c77a4aa2c5f2c17914d76903642dcf9a3c004251d675be6ca13b0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2030b2691bdcc5e2622e37653b3997db68c6ccf14042ab364a3b638b405adae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2030b2691bdcc5e2622e37653b3997db68c6ccf14042ab364a3b638b405adae6->enter($__internal_2030b2691bdcc5e2622e37653b3997db68c6ccf14042ab364a3b638b405adae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Descriptif ";
        
        $__internal_2030b2691bdcc5e2622e37653b3997db68c6ccf14042ab364a3b638b405adae6->leave($__internal_2030b2691bdcc5e2622e37653b3997db68c6ccf14042ab364a3b638b405adae6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73da3ca876c73e3395c9ef579d49a14bbd0a853abc73a7e1beeea45575d87b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73da3ca876c73e3395c9ef579d49a14bbd0a853abc73a7e1beeea45575d87b35->enter($__internal_73da3ca876c73e3395c9ef579d49a14bbd0a853abc73a7e1beeea45575d87b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_73da3ca876c73e3395c9ef579d49a14bbd0a853abc73a7e1beeea45575d87b35->leave($__internal_73da3ca876c73e3395c9ef579d49a14bbd0a853abc73a7e1beeea45575d87b35_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_17733128234ee07afd6f8e9f033a7e795a0791ced7aa007864bab053fd8489ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17733128234ee07afd6f8e9f033a7e795a0791ced7aa007864bab053fd8489ca->enter($__internal_17733128234ee07afd6f8e9f033a7e795a0791ced7aa007864bab053fd8489ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <li class=\"active\"> Ajouter descriptif</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Ajouter un descriptif</h2>
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
                                    <select class=\"form-control col-md-7 col-xs-12\" name=\"indicateur\">
                                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indicateurs"]) ? $context["indicateurs"] : $this->getContext($context, "indicateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["indic"]) {
            // line 52
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indic"], "id", array()), "html", null, true);
            echo "\">";
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
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 80
            echo "
                                            <optgroup label=\"";
            // line 81
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
                                        <input type=\"number\" class=\"required form-control col-md-7 col-xs-12\" name=\"baseline\" value=\"0\" min=\"0\">
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
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" value=\"0\" min=\"0\" name=\"objectif\" >
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
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" name=\"realisation\" value=\"0\" min=\"0\">
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
                                        <input type=\"text\" class=\"form-control col-md-7 col-xs-12\" name=\"explication\" value=\"\">
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
        
        $__internal_17733128234ee07afd6f8e9f033a7e795a0791ced7aa007864bab053fd8489ca->leave($__internal_17733128234ee07afd6f8e9f033a7e795a0791ced7aa007864bab053fd8489ca_prof);

    }

    // line 162
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eed745e3a0d7b8ff7fab79b50eac6c5c809f04b993a37505ee5410c108ed3f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed745e3a0d7b8ff7fab79b50eac6c5c809f04b993a37505ee5410c108ed3f80->enter($__internal_eed745e3a0d7b8ff7fab79b50eac6c5c809f04b993a37505ee5410c108ed3f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 163
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 164
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
        // line 195
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
        
        $__internal_eed745e3a0d7b8ff7fab79b50eac6c5c809f04b993a37505ee5410c108ed3f80->leave($__internal_eed745e3a0d7b8ff7fab79b50eac6c5c809f04b993a37505ee5410c108ed3f80_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Descriptif:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 195,  348 => 164,  343 => 163,  337 => 162,  317 => 148,  256 => 89,  249 => 87,  243 => 86,  232 => 84,  227 => 83,  223 => 82,  219 => 81,  216 => 80,  212 => 79,  197 => 66,  186 => 64,  182 => 63,  171 => 54,  160 => 52,  156 => 51,  148 => 45,  145 => 44,  136 => 41,  132 => 39,  127 => 38,  118 => 35,  114 => 33,  109 => 32,  107 => 31,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
                    <li class=\"active\"> Ajouter descriptif</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Ajouter un descriptif</h2>
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
                                    <select class=\"form-control col-md-7 col-xs-12\" name=\"indicateur\">
                                        {% for indic in indicateurs %}
                                        <option value=\"{{ indic.id }}\">{{ indic.libelleIndicateur }}</option>
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
                                        <input type=\"number\" class=\"required form-control col-md-7 col-xs-12\" name=\"baseline\" value=\"0\" min=\"0\">
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
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" value=\"0\" min=\"0\" name=\"objectif\" >
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
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" name=\"realisation\" value=\"0\" min=\"0\">
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
                                        <input type=\"text\" class=\"form-control col-md-7 col-xs-12\" name=\"explication\" value=\"\">
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
{% endblock %}", "ProjetBundle:Descriptif:ajouter.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Descriptif/ajouter.html.twig");
    }
}
