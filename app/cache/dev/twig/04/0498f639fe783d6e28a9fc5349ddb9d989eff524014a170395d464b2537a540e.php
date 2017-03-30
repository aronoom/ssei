<?php

/* ProjetBundle:SituationDescriptifActivite:liste.html.twig */
class __TwigTemplate_2710cd12c7dc2f79c4515e7b7d2ca39f86ff2c7e4d2533ba42985eb8394ea7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:SituationDescriptifActivite:liste.html.twig", 1);
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
        $__internal_668e0053cf346c67b0ebe3999f4b6e44ef7b1a1d132a450365a028cfcea3ddb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668e0053cf346c67b0ebe3999f4b6e44ef7b1a1d132a450365a028cfcea3ddb9->enter($__internal_668e0053cf346c67b0ebe3999f4b6e44ef7b1a1d132a450365a028cfcea3ddb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:SituationDescriptifActivite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668e0053cf346c67b0ebe3999f4b6e44ef7b1a1d132a450365a028cfcea3ddb9->leave($__internal_668e0053cf346c67b0ebe3999f4b6e44ef7b1a1d132a450365a028cfcea3ddb9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_da6b0b480218fb8f94eb716ceb0a169ce10ddcfa99bc7e7d9eeffd2710e5bd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6b0b480218fb8f94eb716ceb0a169ce10ddcfa99bc7e7d9eeffd2710e5bd73->enter($__internal_da6b0b480218fb8f94eb716ceb0a169ce10ddcfa99bc7e7d9eeffd2710e5bd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Situation annuelle ";
        
        $__internal_da6b0b480218fb8f94eb716ceb0a169ce10ddcfa99bc7e7d9eeffd2710e5bd73->leave($__internal_da6b0b480218fb8f94eb716ceb0a169ce10ddcfa99bc7e7d9eeffd2710e5bd73_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34c870e4e1f5dd5436ea706fd79b6ebd0c7fc05fd825d09b04cb778543a28a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c870e4e1f5dd5436ea706fd79b6ebd0c7fc05fd825d09b04cb778543a28a83->enter($__internal_34c870e4e1f5dd5436ea706fd79b6ebd0c7fc05fd825d09b04cb778543a28a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_34c870e4e1f5dd5436ea706fd79b6ebd0c7fc05fd825d09b04cb778543a28a83->leave($__internal_34c870e4e1f5dd5436ea706fd79b6ebd0c7fc05fd825d09b04cb778543a28a83_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_06c91d963dde07d4cc49153699270d3a21dd30f43aa61259a59a34a64aa9c269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c91d963dde07d4cc49153699270d3a21dd30f43aa61259a59a34a64aa9c269->enter($__internal_06c91d963dde07d4cc49153699270d3a21dd30f43aa61259a59a34a64aa9c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <li><a ></a> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
        echo "</li>
                    <li><a ></a> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "composante", array()), "codeComposante", array()), "html", null, true);
        echo "</li>
                    <li><a ></a> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "libelleActivite", array()), "html", null, true);
        echo "</li>
                    <li class=\"active\">Situation annuelles pour descriptif</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_ajouter", array("idActivite" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute(        // line 26
(isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()))), "html", null, true);
        echo "\">
                        <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une situation annuelle</button>
                    </a>
                    <div class=\"x_panel\">
                        <div class=\"col-sm-12\">
                            <table id=\"situationAnnuelleTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Année</th>
                                    <th>Valeur cible</th>
                                    <th>Réalisation globale</th>
                                    <th>Réalisation cumulée</th>
                                    <th>Ecart année</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["situationAnnuelles"]) ? $context["situationAnnuelles"] : $this->getContext($context, "situationAnnuelles")));
        foreach ($context['_seq'] as $context["_key"] => $context["situation"]) {
            // line 43
            echo "                                    <tr>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "anneeSitAnParUi", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "valeurCible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "realGlobSitAnParUi", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "realisationCumule", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "ecartAnnee", array()), "html", null, true);
            echo "</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_objectif_liste", array("idSituationAnnuelle" => $this->getAttribute($context["situation"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_realisation_liste", array("idSituationAnnuelle" => $this->getAttribute(            // line 58
$context["situation"], "id", array()))), "html", null, true);
            // line 59
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Réalisation\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-unchecked\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_modifier", array("idActivite" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute(            // line 65
(isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()), "idSituationAnnuelle" => $this->getAttribute(            // line 66
$context["situation"], "id", array()))), "html", null, true);
            // line 67
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "id", array()), "html", null, true);
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
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_supprimer", array("idActivite" => $this->getAttribute(            // line 94
(isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
            // line 95
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idSituation\" name=\"idSituation\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['situation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                </tbody>
                                <tfoot>
                                    <th>#</th>
                                    <th>Année</th>
                                    <th>Valeur cible</th>
                                    <th>Réalisation globale</th>
                                    <th>Réalisation cumulée</th>
                                    <th>Ecart année</th>
                                    <th>Actions</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"clearfix\">
                            <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "comp_id" => $this->getAttribute($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "composante", array()), "id", array()), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
        echo "\">
                                <button class=\"btn btn-success\">Retour</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

";
        
        $__internal_06c91d963dde07d4cc49153699270d3a21dd30f43aa61259a59a34a64aa9c269->leave($__internal_06c91d963dde07d4cc49153699270d3a21dd30f43aa61259a59a34a64aa9c269_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7af8b53885556a7f204aa505d30c4e080dffa0baad540f92f8555a33d7773a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7af8b53885556a7f204aa505d30c4e080dffa0baad540f92f8555a33d7773a5->enter($__internal_e7af8b53885556a7f204aa505d30c4e080dffa0baad540f92f8555a33d7773a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#situationAnnuelleTable').dataTable();

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
                \$('#idSituation').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_e7af8b53885556a7f204aa505d30c4e080dffa0baad540f92f8555a33d7773a5->leave($__internal_e7af8b53885556a7f204aa505d30c4e080dffa0baad540f92f8555a33d7773a5_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:SituationDescriptifActivite:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 138,  286 => 137,  282 => 136,  278 => 135,  273 => 134,  267 => 133,  249 => 121,  234 => 108,  216 => 95,  214 => 94,  213 => 93,  190 => 73,  182 => 67,  180 => 66,  179 => 65,  178 => 64,  171 => 59,  169 => 58,  168 => 57,  160 => 52,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  131 => 43,  127 => 42,  108 => 26,  107 => 25,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
{% block title %} {{parent()}} Situation annuelle {% endblock %}
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
                    <li><a ></a> {{projet.nomProjet}}</li>
                    <li><a ></a> {{activite.composante.codeComposante}}</li>
                    <li><a ></a> {{activite.libelleActivite}}</li>
                    <li class=\"active\">Situation annuelles pour descriptif</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_ajouter',{'idActivite': activite.id ,
                    'idDescriptifParUi': descriptifParUi.id }) }}\">
                        <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une situation annuelle</button>
                    </a>
                    <div class=\"x_panel\">
                        <div class=\"col-sm-12\">
                            <table id=\"situationAnnuelleTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Année</th>
                                    <th>Valeur cible</th>
                                    <th>Réalisation globale</th>
                                    <th>Réalisation cumulée</th>
                                    <th>Ecart année</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    {% for situation in situationAnnuelles %}
                                    <tr>
                                        <td>{{situation.id}}</td>
                                        <td>{{situation.anneeSitAnParUi}}</td>
                                        <td>{{situation.valeurCible}}</td>
                                        <td>{{situation.realGlobSitAnParUi}}</td>
                                        <td>{{situation.realisationCumule}}</td>
                                        <td>{{situation.ecartAnnee}}</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_objectif_liste',{'idSituationAnnuelle' : situation.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_realisation_liste',{
                                            'idSituationAnnuelle': situation.id
                                             }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Réalisation\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-unchecked\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_modifier',{'idActivite' : activite.id ,
                                            'idDescriptifParUi' : descriptifParUi.id,
                                            'idSituationAnnuelle': situation.id
                                             }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ situation.id }}\">
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
                                                        <form action=\"{{ path('projet_descriptif_activite_situation_annuelle_supprimer',{
                                                        'idActivite' : activite.id
                                                        }) }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idSituation\" name=\"idSituation\" value=\"\">
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
                                    <th>Année</th>
                                    <th>Valeur cible</th>
                                    <th>Réalisation globale</th>
                                    <th>Réalisation cumulée</th>
                                    <th>Ecart année</th>
                                    <th>Actions</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"clearfix\">
                            <a href=\"{{ path('projet_descriptif_activite_lister',{ 'projet_id': projet.id, 'comp_id': activite.composante.id,'act_id': activite.id }) }}\">
                                <button class=\"btn btn-success\">Retour</button>
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
            \$('#situationAnnuelleTable').dataTable();

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
                \$('#idSituation').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}", "ProjetBundle:SituationDescriptifActivite:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/SituationDescriptifActivite/liste.html.twig");
    }
}
