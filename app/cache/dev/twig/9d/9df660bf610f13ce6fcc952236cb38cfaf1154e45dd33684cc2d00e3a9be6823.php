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
        $__internal_4222b4725c52cd20e0cb0a67b0415e1e729f4475795602abf92e6e3a3018cc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4222b4725c52cd20e0cb0a67b0415e1e729f4475795602abf92e6e3a3018cc79->enter($__internal_4222b4725c52cd20e0cb0a67b0415e1e729f4475795602abf92e6e3a3018cc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Activite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4222b4725c52cd20e0cb0a67b0415e1e729f4475795602abf92e6e3a3018cc79->leave($__internal_4222b4725c52cd20e0cb0a67b0415e1e729f4475795602abf92e6e3a3018cc79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba61655213edfa896f74ec1d0ad69e42dd64ef08e87ec1d4b0d947c3ae052120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba61655213edfa896f74ec1d0ad69e42dd64ef08e87ec1d4b0d947c3ae052120->enter($__internal_ba61655213edfa896f74ec1d0ad69e42dd64ef08e87ec1d4b0d947c3ae052120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Activite ";
        
        $__internal_ba61655213edfa896f74ec1d0ad69e42dd64ef08e87ec1d4b0d947c3ae052120->leave($__internal_ba61655213edfa896f74ec1d0ad69e42dd64ef08e87ec1d4b0d947c3ae052120_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a6b711cf5f17425a07c9f3877302fbc3ed36c95d9f5fa9e8a77d92741b6178f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6b711cf5f17425a07c9f3877302fbc3ed36c95d9f5fa9e8a77d92741b6178f->enter($__internal_7a6b711cf5f17425a07c9f3877302fbc3ed36c95d9f5fa9e8a77d92741b6178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7a6b711cf5f17425a07c9f3877302fbc3ed36c95d9f5fa9e8a77d92741b6178f->leave($__internal_7a6b711cf5f17425a07c9f3877302fbc3ed36c95d9f5fa9e8a77d92741b6178f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_77bee7daaf9409455fbdf157c549b11a6a8e1676771629531ad35384a1461602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bee7daaf9409455fbdf157c549b11a6a8e1676771629531ad35384a1461602->enter($__internal_77bee7daaf9409455fbdf157c549b11a6a8e1676771629531ad35384a1461602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()))), "html", null, true);
        echo "\"> Composante </a></li>
                    <li class=\"active\">Activité</li>
                </ol>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Activités</h1>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_ajouter_activite", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter une activité</a>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Activités de la composante ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "html", null, true);
        echo "</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        ";
        // line 35
        if (twig_test_empty((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")))) {
            // line 36
            echo "                            <div style=\"text-align: center\"> Aucune activité </div>
                        ";
        } else {
            // line 38
            echo "                            <div class=\"table-responsive\">
                                <table id=\"activiteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" >
                                    <thead>
                                        <tr role=\"row\">
                                            <th>Code de l'activité</th>
                                            <th>Désignation de l'activité</th>
                                            <th style=\"width:10%;\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")));
            foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                // line 49
                echo "                                            <tr>
                                                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "codeActivite", array()), "html", null, true);
                echo "</td>
                                                <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "act_id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "libelleActivite", array()), "html", null, true);
                echo "</a></td>
                                                <td >
                                                    <div class=\"btn-group\">
                                                        <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_modifier_activite", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a >
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                // line 60
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
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer_activite", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "idActivite" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
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
            // line 94
            echo "                                    </tbody>
                                    <tfoot>
                                        <tr role=\"row\">
                                            <th>Code de l'activité</th>
                                            <th>Désignation de l'activité</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <hr>
                        ";
        }
        // line 107
        echo "                    </div>
                    <div class=\"clearfix\">
                        <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()))), "html", null, true);
        echo "\">
                            <button class=\"btn btn-success\" >Retour</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
";
        
        $__internal_77bee7daaf9409455fbdf157c549b11a6a8e1676771629531ad35384a1461602->leave($__internal_77bee7daaf9409455fbdf157c549b11a6a8e1676771629531ad35384a1461602_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f67b088b60febbe0a61cbf906923003edbaede33fead16d93be3dc401a64e089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67b088b60febbe0a61cbf906923003edbaede33fead16d93be3dc401a64e089->enter($__internal_f67b088b60febbe0a61cbf906923003edbaede33fead16d93be3dc401a64e089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
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
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            \$('#activiteTable').dataTable();
        });
    </script>

";
        
        $__internal_f67b088b60febbe0a61cbf906923003edbaede33fead16d93be3dc401a64e089->leave($__internal_f67b088b60febbe0a61cbf906923003edbaede33fead16d93be3dc401a64e089_prof);

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
        return array (  273 => 134,  269 => 133,  265 => 132,  248 => 119,  242 => 118,  227 => 109,  223 => 107,  208 => 94,  188 => 80,  165 => 60,  156 => 54,  148 => 51,  144 => 50,  141 => 49,  137 => 48,  125 => 38,  121 => 36,  119 => 35,  112 => 31,  103 => 25,  91 => 16,  87 => 15,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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
                    <li><a href=\"{{ path('projet_index', {'id': composante.projet.id}) }}\"> Composante </a></li>
                    <li class=\"active\">Activité</li>
                </ol>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Activités</h1>
    <a href=\"{{ path('projet_ajouter_activite', {'projet_id': composante.projet.id, 'comp_id': composante.id }) }}\" class=\"btn btn-primary\">Ajouter une activité</a>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Activités de la composante {{ composante.id }}</h2>
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
                                            <th>Code de l'activité</th>
                                            <th>Désignation de l'activité</th>
                                            <th style=\"width:10%;\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for activite in activites %}
                                            <tr>
                                                <td>{{ activite.codeActivite }}</td>
                                                <td><a href=\"{{ path('projet_descriptif_activite_lister', {'projet_id': composante.projet.id,'comp_id': composante.id, 'act_id': activite.id}) }}\">{{ activite.libelleActivite }}</a></td>
                                                <td >
                                                    <div class=\"btn-group\">
                                                        <a href=\"{{ path('projet_modifier_activite',{'projet_id' : composante.projet.id, 'comp_id': composante.id ,'id': activite.id }) }}\">
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
                                                                    <form action=\"{{ path('projet_supprimer_activite', { 'projet_id' : composante.projet.id , 'comp_id': composante.id ,'idActivite' : activite.id }) }}\" method=\"post\">
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
                                            <th>Code de l'activité</th>
                                            <th>Désignation de l'activité</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <hr>
                        {% endif %}
                    </div>
                    <div class=\"clearfix\">
                        <a href=\"{{ path('projet_index',{'id': composante.projet.id }) }}\">
                            <button class=\"btn btn-success\" >Retour</button>
                        </a>
                    </div>
                </div>
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
    <script>
        \$(function(){
            \$('#activiteTable').dataTable();
        });
    </script>

{% endblock %}", "ProjetBundle:Activite:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Activite/liste.html.twig");
    }
}
