<?php

/* IndicateurBundle:Nature:liste.html.twig */
class __TwigTemplate_44ee4e1a6145190dfbe60ba895789806375b7e81200aff842c32acd1fab2142a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "IndicateurBundle:Nature:liste.html.twig", 1);
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
        $__internal_81190544c7cfc4dfbdb041893103e628df4b040a01e761b4803717831bf57922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81190544c7cfc4dfbdb041893103e628df4b040a01e761b4803717831bf57922->enter($__internal_81190544c7cfc4dfbdb041893103e628df4b040a01e761b4803717831bf57922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Nature:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81190544c7cfc4dfbdb041893103e628df4b040a01e761b4803717831bf57922->leave($__internal_81190544c7cfc4dfbdb041893103e628df4b040a01e761b4803717831bf57922_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3138cc91e1a16e0f27207801613c7f88adaffce3dd6377210423b6390ae180c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3138cc91e1a16e0f27207801613c7f88adaffce3dd6377210423b6390ae180c7->enter($__internal_3138cc91e1a16e0f27207801613c7f88adaffce3dd6377210423b6390ae180c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Natures";
        
        $__internal_3138cc91e1a16e0f27207801613c7f88adaffce3dd6377210423b6390ae180c7->leave($__internal_3138cc91e1a16e0f27207801613c7f88adaffce3dd6377210423b6390ae180c7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5748e9377f2f081071182fb0b6d89c6154c9a6640eadf12708245db36613e953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5748e9377f2f081071182fb0b6d89c6154c9a6640eadf12708245db36613e953->enter($__internal_5748e9377f2f081071182fb0b6d89c6154c9a6640eadf12708245db36613e953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_5748e9377f2f081071182fb0b6d89c6154c9a6640eadf12708245db36613e953->leave($__internal_5748e9377f2f081071182fb0b6d89c6154c9a6640eadf12708245db36613e953_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ba1f717f066c31dc0e917b2651f8e04f04b995fbd3cdd2f7c837e76bb5b9c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba1f717f066c31dc0e917b2651f8e04f04b995fbd3cdd2f7c837e76bb5b9c24->enter($__internal_5ba1f717f066c31dc0e917b2651f8e04f04b995fbd3cdd2f7c837e76bb5b9c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Natures</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nature_liste");
        echo "\">Natures</a></li>
                    <li class=\"active\">Liste des natures</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nature_ajouter");
        echo "\">
                    <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une nature</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"natureTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Libelle de la nature</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["natures"]) ? $context["natures"] : $this->getContext($context, "natures")));
        foreach ($context['_seq'] as $context["_key"] => $context["nature"]) {
            // line 37
            echo "                                <tr>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["nature"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["nature"], "libelleNature", array()), "html", null, true);
            echo "</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nature_modifier", array("id" => $this->getAttribute($context["nature"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["nature"], "id", array()), "html", null, true);
            echo "\">
                                                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                        </div>
                                        <!-- -->
                                        <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                            <div class=\"modal-dialog modal-sm\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                        </button>
                                                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <h4>
                                                            <p>Voulez-vous vraiment supprimer?</p>
                                                        </h4>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <form action=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nature_supprimer");
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idNature\" name=\"idNature\" value=\"\">
                                                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -->
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Libelle de la nature</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5ba1f717f066c31dc0e917b2651f8e04f04b995fbd3cdd2f7c837e76bb5b9c24->leave($__internal_5ba1f717f066c31dc0e917b2651f8e04f04b995fbd3cdd2f7c837e76bb5b9c24_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be49926d9b2d351cd210fef2224b89b0cb0dfa5ea0edce4072214a2b4749b988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be49926d9b2d351cd210fef2224b89b0cb0dfa5ea0edce4072214a2b4749b988->enter($__internal_be49926d9b2d351cd210fef2224b89b0cb0dfa5ea0edce4072214a2b4749b988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        var table = \$('#natureTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idNature').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_be49926d9b2d351cd210fef2224b89b0cb0dfa5ea0edce4072214a2b4749b988->leave($__internal_be49926d9b2d351cd210fef2224b89b0cb0dfa5ea0edce4072214a2b4749b988_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:Nature:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 100,  216 => 99,  212 => 98,  207 => 97,  201 => 96,  180 => 81,  161 => 68,  138 => 48,  129 => 42,  123 => 39,  119 => 38,  116 => 37,  112 => 36,  95 => 22,  84 => 14,  76 => 8,  70 => 7,  61 => 5,  56 => 4,  50 => 3,  37 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} Natures{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
{% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Natures</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"{{ path('nature_liste') }}\">Natures</a></li>
                    <li class=\"active\">Liste des natures</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"{{ path('nature_ajouter') }}\">
                    <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une nature</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"natureTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Libelle de la nature</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for nature in natures %}
                                <tr>
                                    <td>{{ nature.id }}</td>
                                    <td>{{ nature.libelleNature }}</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('nature_modifier',{'id' : nature.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ nature.id }}\">
                                                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                        </div>
                                        <!-- -->
                                        <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                            <div class=\"modal-dialog modal-sm\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                        </button>
                                                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <h4>
                                                            <p>Voulez-vous vraiment supprimer?</p>
                                                        </h4>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <form action=\"{{ path('nature_supprimer') }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idNature\" name=\"idNature\" value=\"\">
                                                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -->
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Libelle de la nature</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{parent()}}
    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>  
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>
    <script>
        var table = \$('#natureTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idNature').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}
", "IndicateurBundle:Nature:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/Nature/liste.html.twig");
    }
}
