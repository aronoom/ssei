<?php

/* IndicateurBundle:ModeCalcul:liste.html.twig */
class __TwigTemplate_3ea3455a1349bd9dd09cadfe07906bf30bbd3d70520837f2eb70801e7daed4af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "IndicateurBundle:ModeCalcul:liste.html.twig", 1);
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
        $__internal_3d07b70eefe91aa0d3bd69350c973983c51e86e9ab07a1444606539541235007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d07b70eefe91aa0d3bd69350c973983c51e86e9ab07a1444606539541235007->enter($__internal_3d07b70eefe91aa0d3bd69350c973983c51e86e9ab07a1444606539541235007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:ModeCalcul:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d07b70eefe91aa0d3bd69350c973983c51e86e9ab07a1444606539541235007->leave($__internal_3d07b70eefe91aa0d3bd69350c973983c51e86e9ab07a1444606539541235007_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0f6f9eefda9202153af90a9669dc0388b7a5d19040f3e45b5b6433559cdfa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f6f9eefda9202153af90a9669dc0388b7a5d19040f3e45b5b6433559cdfa25->enter($__internal_c0f6f9eefda9202153af90a9669dc0388b7a5d19040f3e45b5b6433559cdfa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Groupes";
        
        $__internal_c0f6f9eefda9202153af90a9669dc0388b7a5d19040f3e45b5b6433559cdfa25->leave($__internal_c0f6f9eefda9202153af90a9669dc0388b7a5d19040f3e45b5b6433559cdfa25_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47fa71e185231bc8999ed722f1e3c81bb3bcb3e8148a7ca3b7a60d18b20f67bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fa71e185231bc8999ed722f1e3c81bb3bcb3e8148a7ca3b7a60d18b20f67bd->enter($__internal_47fa71e185231bc8999ed722f1e3c81bb3bcb3e8148a7ca3b7a60d18b20f67bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_47fa71e185231bc8999ed722f1e3c81bb3bcb3e8148a7ca3b7a60d18b20f67bd->leave($__internal_47fa71e185231bc8999ed722f1e3c81bb3bcb3e8148a7ca3b7a60d18b20f67bd_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f5e028e02af8efd1d3a745c70f3360af2216c11fceb32351111a952263457bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e028e02af8efd1d3a745c70f3360af2216c11fceb32351111a952263457bdc->enter($__internal_f5e028e02af8efd1d3a745c70f3360af2216c11fceb32351111a952263457bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Mode de calculs</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeCalcul_liste");
        echo "\">Mode de calculs</a></li>
                    <li class=\"active\">Liste des modes de calculs</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeCalcul_ajouter");
        echo "\">
                    <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter un mode de calcul</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"mcTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Libelle du mode de calcul</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mcs"]) ? $context["mcs"] : $this->getContext($context, "mcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["mc"]) {
            // line 37
            echo "                                <tr>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["mc"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["mc"], "libelleModeCalcul", array()), "html", null, true);
            echo "</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeCalcul_modifier", array("id" => $this->getAttribute($context["mc"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["mc"], "id", array()), "html", null, true);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeCalcul_supprimer");
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idModeCalcul\" name=\"idModeCalcul\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Libelle du mode de calcul</th>
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
        
        $__internal_f5e028e02af8efd1d3a745c70f3360af2216c11fceb32351111a952263457bdc->leave($__internal_f5e028e02af8efd1d3a745c70f3360af2216c11fceb32351111a952263457bdc_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06353400d6a1dd331ee636015ca3a23d60db3b0f25d18c319598d58ccae5bd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06353400d6a1dd331ee636015ca3a23d60db3b0f25d18c319598d58ccae5bd45->enter($__internal_06353400d6a1dd331ee636015ca3a23d60db3b0f25d18c319598d58ccae5bd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        var table = \$('#mcTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idModeCalcul').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_06353400d6a1dd331ee636015ca3a23d60db3b0f25d18c319598d58ccae5bd45->leave($__internal_06353400d6a1dd331ee636015ca3a23d60db3b0f25d18c319598d58ccae5bd45_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:ModeCalcul:liste.html.twig";
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
                <h3>Mode de calculs</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"{{ path('modeCalcul_liste') }}\">Mode de calculs</a></li>
                    <li class=\"active\">Liste des modes de calculs</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"{{ path('modeCalcul_ajouter') }}\">
                    <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter un mode de calcul</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"mcTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Libelle du mode de calcul</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for mc in mcs %}
                                <tr>
                                    <td>{{ mc.id }}</td>
                                    <td>{{ mc.libelleModeCalcul }}</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('modeCalcul_modifier',{'id' : mc.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ mc.id }}\">
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
                                                        <form action=\"{{ path('modeCalcul_supprimer') }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idModeCalcul\" name=\"idModeCalcul\" value=\"\">
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
                                <th>Libelle du mode de calcul</th>
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
        var table = \$('#mcTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idModeCalcul').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}
", "IndicateurBundle:ModeCalcul:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/ModeCalcul/liste.html.twig");
    }
}
