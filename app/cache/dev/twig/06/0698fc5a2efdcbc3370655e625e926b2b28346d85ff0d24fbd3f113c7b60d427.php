<?php

/* IndicateurBundle:Indicateur:liste.html.twig */
class __TwigTemplate_1a5178a9903fac2a8936061ebacd7c576bc82fb6e868722c8a099b122cca9602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndicateurBundle::layout.html.twig", "IndicateurBundle:Indicateur:liste.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndicateurBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5923fe88be1dfd66ebb8dc8bdbf14924534fd9c61f6dbc04812483bbcecb65b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5923fe88be1dfd66ebb8dc8bdbf14924534fd9c61f6dbc04812483bbcecb65b1->enter($__internal_5923fe88be1dfd66ebb8dc8bdbf14924534fd9c61f6dbc04812483bbcecb65b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Indicateur:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5923fe88be1dfd66ebb8dc8bdbf14924534fd9c61f6dbc04812483bbcecb65b1->leave($__internal_5923fe88be1dfd66ebb8dc8bdbf14924534fd9c61f6dbc04812483bbcecb65b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_122590555090ff2fc7ace20fd000872827759459d9551ab76a5aa755f86d9091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122590555090ff2fc7ace20fd000872827759459d9551ab76a5aa755f86d9091->enter($__internal_122590555090ff2fc7ace20fd000872827759459d9551ab76a5aa755f86d9091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " liste";
        
        $__internal_122590555090ff2fc7ace20fd000872827759459d9551ab76a5aa755f86d9091->leave($__internal_122590555090ff2fc7ace20fd000872827759459d9551ab76a5aa755f86d9091_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31dbb2d42dda15916cadd780ceb8f1f94e84d02160789e05c0d89544be0d01e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dbb2d42dda15916cadd780ceb8f1f94e84d02160789e05c0d89544be0d01e3->enter($__internal_31dbb2d42dda15916cadd780ceb8f1f94e84d02160789e05c0d89544be0d01e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_31dbb2d42dda15916cadd780ceb8f1f94e84d02160789e05c0d89544be0d01e3->leave($__internal_31dbb2d42dda15916cadd780ceb8f1f94e84d02160789e05c0d89544be0d01e3_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_d50679f988392a243e9e6fd9f5638da29f0a7b400e0edf749f64419a633b55c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50679f988392a243e9e6fd9f5638da29f0a7b400e0edf749f64419a633b55c3->enter($__internal_d50679f988392a243e9e6fd9f5638da29f0a7b400e0edf749f64419a633b55c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <!-- modals modifier et supprimer -->
    <div class=\"modal fade bs-example-modal-lg\" id=\"modalSupprimer\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <h4>
                        <p>Voulez-vous vraiment supprimer <strong>code : </strong></p>
                    </h4>
                </div>
                <form action=\"\" method=\"post\">
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                        <input type=\"hidden\" name=\"codeAgence\" value=\"\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- endmodal -->
<div class=\"page-title\">
    <div class=\"title_left\">
        <h3>Indicateurs</h3>
        <ol class=\"breadcrumb\">
            <li><a href=\"\">Acceuil</a></li>
            <li><a href=\"\">Admnistration</a></li>
            <li><a href=\"\">Indicateurs</a></li>
            <li class=\"active\"> </li>
        </ol>
    </div>
</div>
<div class=\"clearfix\"></div>
<div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indicateur_ajouter");
        echo "\">
                <button class=\"btn btn-primary pull-left\" id=\"ajouterIndicateur\">Ajouter un indicateur</button>
            </a>
            <div class=\"x_title\">
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li class=\"pull-right\"><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <div class=\"table-responsive\">
                    <table id=\"indicateurTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" >
                        <thead>
                        <tr role=\"row\">
                            <th>#</th>
                            <th>Libelle</th>
                            <th>Nature</th>
                            <th>Unité</th>
                            <th>Activité</th>
                            <th>Périodicité</th>
                            <th>Mode de calcul</th>
                            <th>Sous secteur</th>
                            <th>Subdivision</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indicateurs"]) ? $context["indicateurs"] : $this->getContext($context, "indicateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["indicateur"]) {
            // line 78
            echo "                            <tr>
                                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicateur"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicateur"], "libelleIndicateur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["indicateur"], "nature", array()), "libelleNature", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["indicateur"], "unite", array()), "libelleUnite", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["indicateur"], "activite", array()), "libelleActivite", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["indicateur"], "periodicite", array()), "libellePeriodicite", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["indicateur"], "modeCalcul", array()), "libelleModeCalcul", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["indicateur"], "sousSecteur", array()), "libelleSousSecteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["indicateur"], "subdivision", array()), "libelleSubdivision", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indicateur_modifier", array("id" => $this->getAttribute($context["indicateur"], "id", array()))), "html", null, true);
            echo "\">
                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                            </button>
                                        </a>
                                        <a >
                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicateur"], "id", array()), "html", null, true);
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
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indicateur_supprimer");
            echo "\" method=\"post\">
                                                        <input type=\"hidden\" id=\"idIndicateur\" name=\"idIndicateur\" value=\"\">
                                                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Libelle</th>
                            <th>Nature</th>
                            <th>Unité</th>
                            <th>Activité</th>
                            <th>Périodicité</th>
                            <th>Mode de calcul</th>
                            <th>Sous secteur</th>
                            <th>Subdivision</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_d50679f988392a243e9e6fd9f5638da29f0a7b400e0edf749f64419a633b55c3->leave($__internal_d50679f988392a243e9e6fd9f5638da29f0a7b400e0edf749f64419a633b55c3_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cba366d3be69cab6af261e3f2bbfded3f32f7a55717a12a2b0d7788da993ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cba366d3be69cab6af261e3f2bbfded3f32f7a55717a12a2b0d7788da993ed0->enter($__internal_9cba366d3be69cab6af261e3f2bbfded3f32f7a55717a12a2b0d7788da993ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        var table = \$('#indicateurTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idIndicateur').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_9cba366d3be69cab6af261e3f2bbfded3f32f7a55717a12a2b0d7788da993ed0->leave($__internal_9cba366d3be69cab6af261e3f2bbfded3f32f7a55717a12a2b0d7788da993ed0_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:Indicateur:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 155,  287 => 154,  283 => 153,  278 => 152,  272 => 151,  244 => 128,  226 => 116,  203 => 96,  194 => 90,  188 => 87,  184 => 86,  180 => 85,  176 => 84,  172 => 83,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  153 => 78,  149 => 77,  118 => 49,  76 => 9,  70 => 8,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"IndicateurBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} liste{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
{% endblock %}
{% block content %}
    <!-- modals modifier et supprimer -->
    <div class=\"modal fade bs-example-modal-lg\" id=\"modalSupprimer\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <h4>
                        <p>Voulez-vous vraiment supprimer <strong>code : </strong></p>
                    </h4>
                </div>
                <form action=\"\" method=\"post\">
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                        <input type=\"hidden\" name=\"codeAgence\" value=\"\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- endmodal -->
<div class=\"page-title\">
    <div class=\"title_left\">
        <h3>Indicateurs</h3>
        <ol class=\"breadcrumb\">
            <li><a href=\"\">Acceuil</a></li>
            <li><a href=\"\">Admnistration</a></li>
            <li><a href=\"\">Indicateurs</a></li>
            <li class=\"active\"> </li>
        </ol>
    </div>
</div>
<div class=\"clearfix\"></div>
<div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <a href=\"{{ path('indicateur_ajouter') }}\">
                <button class=\"btn btn-primary pull-left\" id=\"ajouterIndicateur\">Ajouter un indicateur</button>
            </a>
            <div class=\"x_title\">
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li class=\"pull-right\"><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <div class=\"table-responsive\">
                    <table id=\"indicateurTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" >
                        <thead>
                        <tr role=\"row\">
                            <th>#</th>
                            <th>Libelle</th>
                            <th>Nature</th>
                            <th>Unité</th>
                            <th>Activité</th>
                            <th>Périodicité</th>
                            <th>Mode de calcul</th>
                            <th>Sous secteur</th>
                            <th>Subdivision</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for indicateur in indicateurs %}
                            <tr>
                                <td>{{ indicateur.id }}</td>
                                <td>{{ indicateur.libelleIndicateur }}</td>
                                <td>{{ indicateur.nature.libelleNature }}</td>
                                <td>{{ indicateur.unite.libelleUnite }}</td>
                                <td>{{ indicateur.activite.libelleActivite }}</td>
                                <td>{{ indicateur.periodicite.libellePeriodicite }}</td>
                                <td>{{ indicateur.modeCalcul.libelleModeCalcul }}</td>
                                <td>{{ indicateur.sousSecteur.libelleSousSecteur }}</td>
                                <td>{{ indicateur.subdivision.libelleSubdivision }}</td>
                                <td>
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('indicateur_modifier',{'id' : indicateur.id }) }}\">
                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                            </button>
                                        </a>
                                        <a >
                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ indicateur.id }}\">
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
                                                    <form action=\"{{ path('indicateur_supprimer') }}\" method=\"post\">
                                                        <input type=\"hidden\" id=\"idIndicateur\" name=\"idIndicateur\" value=\"\">
                                                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Libelle</th>
                            <th>Nature</th>
                            <th>Unité</th>
                            <th>Activité</th>
                            <th>Périodicité</th>
                            <th>Mode de calcul</th>
                            <th>Sous secteur</th>
                            <th>Subdivision</th>
                            <th>Actions</th>
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
        var table = \$('#indicateurTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idIndicateur').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}", "IndicateurBundle:Indicateur:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/Indicateur/liste.html.twig");
    }
}
