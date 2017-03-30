<?php

/* ProjetBundle:Realisation:liste.html.twig */
class __TwigTemplate_0aea333b61ca77a33774d3c20f0605c137b36d38c18815edd3813ce018878509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:Realisation:liste.html.twig", 1);
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
        $__internal_168e2f9407e254f92cce7c13fb9d4ff098f64b2a12a0f23932d2aff06f002f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168e2f9407e254f92cce7c13fb9d4ff098f64b2a12a0f23932d2aff06f002f19->enter($__internal_168e2f9407e254f92cce7c13fb9d4ff098f64b2a12a0f23932d2aff06f002f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Realisation:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_168e2f9407e254f92cce7c13fb9d4ff098f64b2a12a0f23932d2aff06f002f19->leave($__internal_168e2f9407e254f92cce7c13fb9d4ff098f64b2a12a0f23932d2aff06f002f19_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_083d73f0f16329e930dd54ec1450568c573af2f77b4d0adbc4208637dd8b4281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083d73f0f16329e930dd54ec1450568c573af2f77b4d0adbc4208637dd8b4281->enter($__internal_083d73f0f16329e930dd54ec1450568c573af2f77b4d0adbc4208637dd8b4281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Réalisations ";
        
        $__internal_083d73f0f16329e930dd54ec1450568c573af2f77b4d0adbc4208637dd8b4281->leave($__internal_083d73f0f16329e930dd54ec1450568c573af2f77b4d0adbc4208637dd8b4281_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_066c61e563f212674259c453a996df4f4e97a571207a665187cf72c24a961d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066c61e563f212674259c453a996df4f4e97a571207a665187cf72c24a961d88->enter($__internal_066c61e563f212674259c453a996df4f4e97a571207a665187cf72c24a961d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_066c61e563f212674259c453a996df4f4e97a571207a665187cf72c24a961d88->leave($__internal_066c61e563f212674259c453a996df4f4e97a571207a665187cf72c24a961d88_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_b538b991e7724e5bd4ca905246bde900b0e62dacba2b97158adbaa05f293582d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b538b991e7724e5bd4ca905246bde900b0e62dacba2b97158adbaa05f293582d->enter($__internal_b538b991e7724e5bd4ca905246bde900b0e62dacba2b97158adbaa05f293582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <li>Situation annuelles pour descriptif</li>
                    <li class=\"active\">Réalisations</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_realisation_ajouter", array("idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()))), "html", null, true);
        echo "\">
                        <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une réalisations trimestrielle</button>
                    </a>
                    <div class=\"x_panel\">
                        <div class=\"col-sm-12\">
                            <table id=\"realisationTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Valeur</th>    
                                    <th>Date</th>
                                    <th style=\"width:10%;\">Actions</th>
                                </thead>
                                <tbody>
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisations"]) ? $context["realisations"] : $this->getContext($context, "realisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["realisation"]) {
            // line 37
            echo "                                    <tr>
                                         <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "id", array()), "html", null, true);
            echo "</td>
                                         <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "valeur", array()), "html", null, true);
            echo "</td>
                                         <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["realisation"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_realisation_modifier", array("idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()), "idRealisation" => $this->getAttribute($context["realisation"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>                                                                                        
                                            <a>
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "id", array()), "html", null, true);
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
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_realisation_supprimer", array("idSituationAnnuelle" => $this->getAttribute(            // line 70
(isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()))), "html", null, true);
            // line 71
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idRealisation\" name=\"idRealisation\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                </tbody>
                                <tfoot>
                                    <th>#</th>
                                    <th>Valeur</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"clearfix\">
                            <a >
                                <button class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

";
        
        $__internal_b538b991e7724e5bd4ca905246bde900b0e62dacba2b97158adbaa05f293582d->leave($__internal_b538b991e7724e5bd4ca905246bde900b0e62dacba2b97158adbaa05f293582d_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3bbf7f35fa27117efd2d0e7b6a4c3c289160455a47b15202fe3d035cdc9b8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bbf7f35fa27117efd2d0e7b6a4c3c289160455a47b15202fe3d035cdc9b8bb->enter($__internal_d3bbf7f35fa27117efd2d0e7b6a4c3c289160455a47b15202fe3d035cdc9b8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#realisationTable').dataTable();

            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder : \"Veuillez ajouter\",
                allowClear: true,
            });
            \$('select').toggleClass('required');

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idRealisation').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_d3bbf7f35fa27117efd2d0e7b6a4c3c289160455a47b15202fe3d035cdc9b8bb->leave($__internal_d3bbf7f35fa27117efd2d0e7b6a4c3c289160455a47b15202fe3d035cdc9b8bb_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Realisation:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 111,  232 => 110,  228 => 109,  224 => 108,  219 => 107,  213 => 106,  186 => 84,  168 => 71,  166 => 70,  165 => 69,  142 => 49,  133 => 43,  127 => 40,  123 => 39,  119 => 38,  116 => 37,  112 => 36,  96 => 23,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
{% block title %} {{parent()}} Réalisations {% endblock %}
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
                    <li>Situation annuelles pour descriptif</li>
                    <li class=\"active\">Réalisations</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"{{ path('projet_descriptif_situation_annuelle_realisation_ajouter',{'idSituationAnnuelle': situationAnnuelle.id }) }}\">
                        <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une réalisations trimestrielle</button>
                    </a>
                    <div class=\"x_panel\">
                        <div class=\"col-sm-12\">
                            <table id=\"realisationTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Valeur</th>    
                                    <th>Date</th>
                                    <th style=\"width:10%;\">Actions</th>
                                </thead>
                                <tbody>
                                    {% for realisation in realisations %}
                                    <tr>
                                         <td>{{realisation.id}}</td>
                                         <td>{{realisation.valeur}}</td>
                                         <td>{{realisation.date|date('d/m/Y')}}</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('projet_descriptif_situation_annuelle_realisation_modifier',{'idSituationAnnuelle' : situationAnnuelle.id , 'idRealisation':realisation.id}) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>                                                                                        
                                            <a>
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ realisation.id }}\">
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
                                                        <form action=\"{{ path('projet_descriptif_situation_annuelle_realisation_supprimer',{
                                                        'idSituationAnnuelle' : situationAnnuelle.id
                                                        }) }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idRealisation\" name=\"idRealisation\" value=\"\">
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
                                    <th>#</th>
                                    <th>Valeur</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"clearfix\">
                            <a >
                                <button class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
                            </a>
                        </div>
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
    <script src=\"{{asset('vendors/select2/dist/js/select2.full.min.js')}}\"></script>
    <script>
        \$(document).ready(function() {
            \$('#realisationTable').dataTable();

            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder : \"Veuillez ajouter\",
                allowClear: true,
            });
            \$('select').toggleClass('required');

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idRealisation').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}", "ProjetBundle:Realisation:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Realisation/liste.html.twig");
    }
}
