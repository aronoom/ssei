<?php

/* IndicateurBundle:Activite:liste.html.twig */
class __TwigTemplate_c885507bda6438b03a35ad7489a0d35ba163abf7c2b1ef3d1bb21f9a6ca8e4b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "IndicateurBundle:Activite:liste.html.twig", 1);
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
        $__internal_4989fb4403b0f509ed7b2941786cbe3fe607dea562da008dc4f7b4b14aa8a4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4989fb4403b0f509ed7b2941786cbe3fe607dea562da008dc4f7b4b14aa8a4a9->enter($__internal_4989fb4403b0f509ed7b2941786cbe3fe607dea562da008dc4f7b4b14aa8a4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Activite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4989fb4403b0f509ed7b2941786cbe3fe607dea562da008dc4f7b4b14aa8a4a9->leave($__internal_4989fb4403b0f509ed7b2941786cbe3fe607dea562da008dc4f7b4b14aa8a4a9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4bba47b97b44562aa4cfd4ab4dbf6c0a2777e49c746ca6f6d4a2de2092a87d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bba47b97b44562aa4cfd4ab4dbf6c0a2777e49c746ca6f6d4a2de2092a87d3->enter($__internal_b4bba47b97b44562aa4cfd4ab4dbf6c0a2777e49c746ca6f6d4a2de2092a87d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Groupes";
        
        $__internal_b4bba47b97b44562aa4cfd4ab4dbf6c0a2777e49c746ca6f6d4a2de2092a87d3->leave($__internal_b4bba47b97b44562aa4cfd4ab4dbf6c0a2777e49c746ca6f6d4a2de2092a87d3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae389df7ce4284fe1df37471dbcc62daec30ab7aa28dfef477d54d13f4980b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae389df7ce4284fe1df37471dbcc62daec30ab7aa28dfef477d54d13f4980b60->enter($__internal_ae389df7ce4284fe1df37471dbcc62daec30ab7aa28dfef477d54d13f4980b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_ae389df7ce4284fe1df37471dbcc62daec30ab7aa28dfef477d54d13f4980b60->leave($__internal_ae389df7ce4284fe1df37471dbcc62daec30ab7aa28dfef477d54d13f4980b60_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0deb64b6104f3ac8adfd19d67d7b93966f2f0504450f2aefee0a6bdfa2c2cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0deb64b6104f3ac8adfd19d67d7b93966f2f0504450f2aefee0a6bdfa2c2cef->enter($__internal_d0deb64b6104f3ac8adfd19d67d7b93966f2f0504450f2aefee0a6bdfa2c2cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Activites</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_liste");
        echo "\">Activités</a></li>
                    <li class=\"active\">Liste des activités</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_ajouter");
        echo "\">
                    <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une activité</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"activiteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Libelle de l'activité</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 37
            echo "                                <tr>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "libelleActivite", array()), "html", null, true);
            echo "</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_modifier", array("id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_supprimer");
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idActivite\" name=\"idActivite\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Libelle de l'activité</th>
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
        
        $__internal_d0deb64b6104f3ac8adfd19d67d7b93966f2f0504450f2aefee0a6bdfa2c2cef->leave($__internal_d0deb64b6104f3ac8adfd19d67d7b93966f2f0504450f2aefee0a6bdfa2c2cef_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbd0074473040dc4df505553d896edb6d7a4b6138763aae99440efab3413f27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd0074473040dc4df505553d896edb6d7a4b6138763aae99440efab3413f27d->enter($__internal_dbd0074473040dc4df505553d896edb6d7a4b6138763aae99440efab3413f27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        var table = \$('#activiteTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idActivite').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_dbd0074473040dc4df505553d896edb6d7a4b6138763aae99440efab3413f27d->leave($__internal_dbd0074473040dc4df505553d896edb6d7a4b6138763aae99440efab3413f27d_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:Activite:liste.html.twig";
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
{% block title %}{{ parent() }} Groupes{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
{% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Activites</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"{{ path('activite_liste') }}\">Activités</a></li>
                    <li class=\"active\">Liste des activités</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"{{ path('activite_ajouter') }}\">
                    <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une activité</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"activiteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Libelle de l'activité</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for activite in activites %}
                                <tr>
                                    <td>{{ activite.id }}</td>
                                    <td>{{ activite.libelleActivite }}</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('activite_modifier',{'id' : activite.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ activite.id }}\">
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
                                                        <form action=\"{{ path('activite_supprimer') }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idActivite\" name=\"idActivite\" value=\"\">
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
                                <th>Libelle de l'activité</th>
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
        var table = \$('#activiteTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idActivite').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}
", "IndicateurBundle:Activite:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/Activite/liste.html.twig");
    }
}
