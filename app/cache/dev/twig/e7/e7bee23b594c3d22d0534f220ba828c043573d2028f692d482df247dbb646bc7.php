<?php

/* ProjetBundle:SituationAnnuelle:liste.html.twig */
class __TwigTemplate_cc9966c944aa2f54b3c7d23a34b1a18e52452564349bc6561e5570a6e3a42b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:SituationAnnuelle:liste.html.twig", 1);
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
        $__internal_bfdf2f2a955e0410e60458b63e9e75f35c8dc4a1265b57c657a765173ae440c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdf2f2a955e0410e60458b63e9e75f35c8dc4a1265b57c657a765173ae440c5->enter($__internal_bfdf2f2a955e0410e60458b63e9e75f35c8dc4a1265b57c657a765173ae440c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:SituationAnnuelle:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfdf2f2a955e0410e60458b63e9e75f35c8dc4a1265b57c657a765173ae440c5->leave($__internal_bfdf2f2a955e0410e60458b63e9e75f35c8dc4a1265b57c657a765173ae440c5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_106fdaacd186ad34f062a9e3cccfb67840275cdedc39e586b39c52e4898f1d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106fdaacd186ad34f062a9e3cccfb67840275cdedc39e586b39c52e4898f1d56->enter($__internal_106fdaacd186ad34f062a9e3cccfb67840275cdedc39e586b39c52e4898f1d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Situation annuelle ";
        
        $__internal_106fdaacd186ad34f062a9e3cccfb67840275cdedc39e586b39c52e4898f1d56->leave($__internal_106fdaacd186ad34f062a9e3cccfb67840275cdedc39e586b39c52e4898f1d56_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_885479829e7cc2b3384a864f4c9ea5a8d17aeac60b583bde51d555d0d23f3931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885479829e7cc2b3384a864f4c9ea5a8d17aeac60b583bde51d555d0d23f3931->enter($__internal_885479829e7cc2b3384a864f4c9ea5a8d17aeac60b583bde51d555d0d23f3931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_885479829e7cc2b3384a864f4c9ea5a8d17aeac60b583bde51d555d0d23f3931->leave($__internal_885479829e7cc2b3384a864f4c9ea5a8d17aeac60b583bde51d555d0d23f3931_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_32ed647f15b3c6dac3c33648c1cffc49feb16b7ff386e8b5d9512c20334b6991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ed647f15b3c6dac3c33648c1cffc49feb16b7ff386e8b5d9512c20334b6991->enter($__internal_32ed647f15b3c6dac3c33648c1cffc49feb16b7ff386e8b5d9512c20334b6991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\">Descriptif</a></li>
                    <li class=\"active\"><a >Situation annuelle</a></li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_ajouter", array("idDescriptifProjet" => $this->getAttribute((isset($context["descriptifProjet"]) ? $context["descriptifProjet"] : $this->getContext($context, "descriptifProjet")), "id", array()), "idDescriptifParUi" => $this->getAttribute(        // line 24
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["situationAnnuelles"]) ? $context["situationAnnuelles"] : $this->getContext($context, "situationAnnuelles")));
        foreach ($context['_seq'] as $context["_key"] => $context["situation"]) {
            // line 41
            echo "                                    <tr>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "anneeSitAnParUi", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "valeurCible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "realGlobSitAnParUi", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "realisationCumule", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "ecartAnnee", array()), "html", null, true);
            echo "</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_objectif_liste", array("idSituationAnnuelle" => $this->getAttribute($context["situation"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_realisation_liste", array("idDescriptifProjet" => $this->getAttribute((isset($context["descriptifProjet"]) ? $context["descriptifProjet"] : $this->getContext($context, "descriptifProjet")), "id", array()), "idDescriptifParUi" => $this->getAttribute(            // line 56
(isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()), "idSituationAnnuelle" => $this->getAttribute(            // line 57
$context["situation"], "id", array()))), "html", null, true);
            // line 58
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Réalisation\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-unchecked\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_modifier", array("idDescriptifProjet" => $this->getAttribute((isset($context["descriptifProjet"]) ? $context["descriptifProjet"] : $this->getContext($context, "descriptifProjet")), "id", array()), "idDescriptifParUi" => $this->getAttribute(            // line 64
(isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()), "idSituationAnnuelle" => $this->getAttribute(            // line 65
$context["situation"], "id", array()))), "html", null, true);
            // line 66
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 72
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
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_supprimer", array("idDescriptifProjet" => $this->getAttribute(            // line 93
(isset($context["descriptifProjet"]) ? $context["descriptifProjet"] : $this->getContext($context, "descriptifProjet")), "id", array()))), "html", null, true);
            // line 94
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
        // line 107
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
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
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
        
        $__internal_32ed647f15b3c6dac3c33648c1cffc49feb16b7ff386e8b5d9512c20334b6991->leave($__internal_32ed647f15b3c6dac3c33648c1cffc49feb16b7ff386e8b5d9512c20334b6991_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b0e3ad178177d8efbbbd7238e475bbf1c3a052aa789c8cbc718412812b91d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0e3ad178177d8efbbbd7238e475bbf1c3a052aa789c8cbc718412812b91d72->enter($__internal_5b0e3ad178177d8efbbbd7238e475bbf1c3a052aa789c8cbc718412812b91d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 137
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
        
        $__internal_5b0e3ad178177d8efbbbd7238e475bbf1c3a052aa789c8cbc718412812b91d72->leave($__internal_5b0e3ad178177d8efbbbd7238e475bbf1c3a052aa789c8cbc718412812b91d72_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:SituationAnnuelle:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 137,  279 => 136,  275 => 135,  271 => 134,  266 => 133,  260 => 132,  242 => 120,  227 => 107,  209 => 94,  207 => 93,  206 => 92,  183 => 72,  175 => 66,  173 => 65,  172 => 64,  171 => 63,  164 => 58,  162 => 57,  161 => 56,  160 => 55,  152 => 50,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  130 => 43,  126 => 42,  123 => 41,  119 => 40,  100 => 24,  99 => 23,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
                    <li><a href=\"{{ path('projet_index',{'id':projet.id}) }}\">Descriptif</a></li>
                    <li class=\"active\"><a >Situation annuelle</a></li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"{{ path('projet_descriptif_situation_annuelle_ajouter',{'idDescriptifProjet': descriptifProjet.id ,
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
                                            <a href=\"{{ path('projet_descriptif_situation_annuelle_objectif_liste',{'idSituationAnnuelle' : situation.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"{{ path('projet_descriptif_situation_annuelle_realisation_liste',{'idDescriptifProjet' : descriptifProjet.id ,
                                            'idDescriptifParUi' : descriptifParUi.id,
                                            'idSituationAnnuelle': situation.id
                                             }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Réalisation\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-unchecked\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"{{ path('projet_descriptif_situation_annuelle_modifier',{'idDescriptifProjet' : descriptifProjet.id ,
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
                                                        <form action=\"{{ path('projet_descriptif_situation_annuelle_supprimer',{
                                                        'idDescriptifProjet' : descriptifProjet.id
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
                            <a href=\"{{ path('projet_index',{'id': projet.id })}}\">
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
{% endblock %}", "ProjetBundle:SituationAnnuelle:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/SituationAnnuelle/liste.html.twig");
    }
}
