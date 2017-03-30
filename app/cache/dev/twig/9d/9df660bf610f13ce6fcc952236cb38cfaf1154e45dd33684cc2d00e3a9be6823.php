<?php

/* ProjetBundle:Activite:liste.html.twig */
class __TwigTemplate_5bedd096b2b727dd4bbe099ddbd453ef1a91cc17faa0b439140e0bf5b4541459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Activite:liste.html.twig", 1);
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
        $__internal_e14e3beba70217f18e8153f51f866f48813454694c7d76dd395935ed621f8898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14e3beba70217f18e8153f51f866f48813454694c7d76dd395935ed621f8898->enter($__internal_e14e3beba70217f18e8153f51f866f48813454694c7d76dd395935ed621f8898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Activite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14e3beba70217f18e8153f51f866f48813454694c7d76dd395935ed621f8898->leave($__internal_e14e3beba70217f18e8153f51f866f48813454694c7d76dd395935ed621f8898_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6168a85b105b8642ae249029de15dcf6ed29ef759c559eb1b24e84de92a2d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6168a85b105b8642ae249029de15dcf6ed29ef759c559eb1b24e84de92a2d1b->enter($__internal_c6168a85b105b8642ae249029de15dcf6ed29ef759c559eb1b24e84de92a2d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Activite ";
        
        $__internal_c6168a85b105b8642ae249029de15dcf6ed29ef759c559eb1b24e84de92a2d1b->leave($__internal_c6168a85b105b8642ae249029de15dcf6ed29ef759c559eb1b24e84de92a2d1b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c3c80b354bb4c74f3a25f29c68e355cfa9f19330e182f1fd47904f31d5eb392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3c80b354bb4c74f3a25f29c68e355cfa9f19330e182f1fd47904f31d5eb392->enter($__internal_4c3c80b354bb4c74f3a25f29c68e355cfa9f19330e182f1fd47904f31d5eb392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/zone.css"), "html", null, true);
        echo "\">
";
        
        $__internal_4c3c80b354bb4c74f3a25f29c68e355cfa9f19330e182f1fd47904f31d5eb392->leave($__internal_4c3c80b354bb4c74f3a25f29c68e355cfa9f19330e182f1fd47904f31d5eb392_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1121d3b060aa4cd8e3d3ee9ad67b8263bbea758108a1268af40b840b744c449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1121d3b060aa4cd8e3d3ee9ad67b8263bbea758108a1268af40b840b744c449->enter($__internal_e1121d3b060aa4cd8e3d3ee9ad67b8263bbea758108a1268af40b840b744c449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"> Acceuil </a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\"> Projet </a></li>
                    <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_composante", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\"> Composante </a></li>
                    <li class=\"active\">Activité</li>
                </ol>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Activités</h1>

    <div class=\"x_panel\">
        <div class=\"x_title\">
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_ajouter_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter une activité</a>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
            ";
        // line 32
        if (twig_test_empty((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")))) {
            // line 33
            echo "                <div style=\"text-align: center\"> Aucune activité </div>
            ";
        } else {
            // line 35
            echo "                <div class=\"table-responsive\">
                    <table id=\"activiteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" >
                        <thead>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Code</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")));
            foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                // line 47
                echo "                                <tr>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
                echo "</td>
                                    <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "libelleActivite", array()), "html", null, true);
                echo "</a></td>
                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "codeActivite", array()), "html", null, true);
                echo "</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_modifier_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                // line 59
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
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "idActivite" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idActivite\" name=\"idActivite\" value=\"\">
                                                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                        <!-- -->
                                        <!-- Supprimer -->
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </tbody>
                        <tfoot>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Code</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <hr>
                <div class=\"clearfix\">
                    <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-success\" >Retour</button>
                    </a>
                </div>
            ";
        }
        // line 112
        echo "        </div>
    </div>
";
        
        $__internal_e1121d3b060aa4cd8e3d3ee9ad67b8263bbea758108a1268af40b840b744c449->leave($__internal_e1121d3b060aa4cd8e3d3ee9ad67b8263bbea758108a1268af40b840b744c449_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a20163aec9227290b6d81778eead79a1c8f602b56a83578ef49948ae599155d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a20163aec9227290b6d81778eead79a1c8f602b56a83578ef49948ae599155d->enter($__internal_7a20163aec9227290b6d81778eead79a1c8f602b56a83578ef49948ae599155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('.btn-danger').on('click',function(e){
            var _this = \$(this);
            var _parent = \$(_this).parents()[3];
            var node = \$(\$(_parent).children()[0]);
            \$('#idActivite').val(\$(node).text());
            \$('#modalDelete').modal('toggle');

        });
    </script>

    <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_7a20163aec9227290b6d81778eead79a1c8f602b56a83578ef49948ae599155d->leave($__internal_7a20163aec9227290b6d81778eead79a1c8f602b56a83578ef49948ae599155d_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Activite:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 131,  266 => 130,  262 => 129,  246 => 117,  240 => 116,  231 => 112,  223 => 107,  207 => 93,  187 => 79,  164 => 59,  155 => 53,  149 => 50,  143 => 49,  139 => 48,  136 => 47,  132 => 46,  119 => 35,  115 => 33,  113 => 32,  106 => 28,  91 => 16,  87 => 15,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ProjetBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} Activite {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/zone.css')}}\">
{% endblock %}
{% block content %}
    <div class=\"row\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"> Acceuil </a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\"> Projet </a></li>
                    <li><a href=\"{{ path('projet_lister_composante', {'projet_id': projet_id}) }}\"> Composante </a></li>
                    <li class=\"active\">Activité</li>
                </ol>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Activités</h1>

    <div class=\"x_panel\">
        <div class=\"x_title\">
            <a href=\"{{ path('projet_ajouter_activite', {'projet_id': projet_id, 'comp_id': comp_id}) }}\" class=\"btn btn-primary\">Ajouter une activité</a>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
            {% if activites is empty %}
                <div style=\"text-align: center\"> Aucune activité </div>
            {% else %}
                <div class=\"table-responsive\">
                    <table id=\"activiteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" >
                        <thead>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Code</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for activite in activites %}
                                <tr>
                                    <td>{{ activite.id }}</td>
                                    <td><a href=\"{{ path('projet_descriptif_activite_lister', {'projet_id': projet_id,'comp_id': comp_id, 'act_id': activite.id}) }}\">{{ activite.libelleActivite }}</a></td>
                                    <td>{{ activite.codeActivite }}</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('projet_modifier_activite',{'projet_id' : projet_id, 'comp_id': comp_id ,'id': activite.id }) }}\">
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
                                                        <form action=\"{{ path('projet_supprimer_activite', { 'projet_id' : projet_id , 'comp_id': comp_id ,'idActivite' : activite.id }) }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idActivite\" name=\"idActivite\" value=\"\">
                                                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                        <!-- -->
                                        <!-- Supprimer -->
                                </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Code</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <hr>
                <div class=\"clearfix\">
                    <a href=\"{{ path('projet_index',{'id': projet_id }) }}\">
                        <button class=\"btn btn-success\" >Retour</button>
                    </a>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script>
        \$('.btn-danger').on('click',function(e){
            var _this = \$(this);
            var _parent = \$(_this).parents()[3];
            var node = \$(\$(_parent).children()[0]);
            \$('#idActivite').val(\$(node).text());
            \$('#modalDelete').modal('toggle');

        });
    </script>

    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>


{% endblock %}", "ProjetBundle:Activite:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Activite/liste.html.twig");
    }
}
