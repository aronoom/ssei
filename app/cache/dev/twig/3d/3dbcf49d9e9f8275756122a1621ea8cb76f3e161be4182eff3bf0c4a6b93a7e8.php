<?php

/* ZoneBundle:Region:index.html.twig */
class __TwigTemplate_a794b451d4ea483e06fd8acb056347a0bee16c77d71597583e223c549d693bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZoneBundle::layout.html.twig", "ZoneBundle:Region:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZoneBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d2f324f0472d3b7f908bb2c4b0b20c1645465916a1245f685f9081dbbc5052d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2f324f0472d3b7f908bb2c4b0b20c1645465916a1245f685f9081dbbc5052d->enter($__internal_9d2f324f0472d3b7f908bb2c4b0b20c1645465916a1245f685f9081dbbc5052d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Region:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2f324f0472d3b7f908bb2c4b0b20c1645465916a1245f685f9081dbbc5052d->leave($__internal_9d2f324f0472d3b7f908bb2c4b0b20c1645465916a1245f685f9081dbbc5052d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b997cb413b175012d51c6e8de0520ac3c59894f0b8635d7ab7c4f4087c198f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b997cb413b175012d51c6e8de0520ac3c59894f0b8635d7ab7c4f4087c198f31->enter($__internal_b997cb413b175012d51c6e8de0520ac3c59894f0b8635d7ab7c4f4087c198f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Région ";
        
        $__internal_b997cb413b175012d51c6e8de0520ac3c59894f0b8635d7ab7c4f4087c198f31->leave($__internal_b997cb413b175012d51c6e8de0520ac3c59894f0b8635d7ab7c4f4087c198f31_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_466eade28f11e27b7632944137aef8480bf99bf687abc50e44437f56e2cfa4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466eade28f11e27b7632944137aef8480bf99bf687abc50e44437f56e2cfa4d0->enter($__internal_466eade28f11e27b7632944137aef8480bf99bf687abc50e44437f56e2cfa4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_466eade28f11e27b7632944137aef8480bf99bf687abc50e44437f56e2cfa4d0->leave($__internal_466eade28f11e27b7632944137aef8480bf99bf687abc50e44437f56e2cfa4d0_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e5ae7255d49bede6f36f8319298bab248779628dc393596944f9e344d64b099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5ae7255d49bede6f36f8319298bab248779628dc393596944f9e344d64b099->enter($__internal_4e5ae7255d49bede6f36f8319298bab248779628dc393596944f9e344d64b099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h1>Zone d'intervention</h1>

    <div class=\"page-title\">
        <div class=\"title_left\">
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li><a href=\"\">Admnistration</a></li>
                <li><a href=\"\">Location</a></li>
                <li class=\"active\"> Régions </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Liste des regions</h3>
                    <button id=\"btnAjouterRegion\" class=\"btn btn-primary btn-md pull-right\" data-toggle=\"modal\" data-target=\"ajoutRegionModal\">
                        Ajouter une région
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <table id=\"regionTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Code</th>
                            <th>/</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 44
        if (((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")) == null)) {
            // line 45
            echo "                            Aucune region
                        ";
        }
        // line 47
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 48
            echo "                            <tr>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_district", array("region_id" => $this->getAttribute($context["region"], "id", array()))), "html", null, true);
            echo "\" class=\"lien\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionCode", array()), "html", null, true);
            echo "</td>
                                <td width=\"100px\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                            <input hidden=\"hidden\" id=\"id\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\" />
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\">
                                            <input hidden=\"hidden\" id=\"id\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\" />
                                            <input hidden=\"hidden\" id=\"libelle\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
            echo "\" />
                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                        </button>
                                    </div>

                                    <!-- -->
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Code</th>
                            <th>/</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Ajouter Region -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter une région</h4>
                </div>
                <form class=\"formulaire\" action=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_ajouter_region");
        echo "\" novalidate method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"modal-body\">
                        <div class=\"well\">
                            <div class=\"item form-group\">
                             <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'label', array("label" => "Libellé de la région"));
        echo "
                             </div>
                             <div class=\"col-sm-6\">
                                   ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                            </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'errors');
        echo "
                            </div>
                            <br><br>
                            <div class=\"item form-group\">
                             <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'label', array("label" => "Code de la région"));
        echo "
                             </div>
                             <div class=\"col-sm-6\">
                                   ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                            </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'errors');
        echo "
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </div>
                    </div>
                    <div class=\"item form-group modal-footer\">
                        <div class=\"col-md-9 col-sm-6 col-xs-12\">
                            <div class=\"pull-right\">
                                <button class=\"btn btn-primary\" id=\"sub\" type=\"submit\">Ajouter</button>
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Supprimer region -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer la region <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_supprimer_region");
        echo "\" method=\"post\">
                        <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modification region -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une région</h4>
                </div>
                <div id=\"formModifRegion\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_4e5ae7255d49bede6f36f8319298bab248779628dc393596944f9e344d64b099->leave($__internal_4e5ae7255d49bede6f36f8319298bab248779628dc393596944f9e344d64b099_prof);

    }

    // line 178
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7bb37cf838fc34e7ba1440ad7141814c0f83672304fb7388d046f93e779ba53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bb37cf838fc34e7ba1440ad7141814c0f83672304fb7388d046f93e779ba53->enter($__internal_a7bb37cf838fc34e7ba1440ad7141814c0f83672304fb7388d046f93e779ba53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
    <script>
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
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
        var table = \$('#regionTable').dataTable();

            \$('#btnAjouterRegion').on('click',function(){
                \$('#ajoutRegionModal').modal('toggle');
            });
        });

        \$(function(){

            \$('.btn-delete').on('click',function(){
                \$(\"#label\").text(\$(this).children()[1].value);
                \$(\"#regionId\").val(\$(this).children()[0].value);
                \$('#suprRegionModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_region', {'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifRegion').children().remove();
                        \$('#formModifRegion').append(data);
                        \$('#modifRegionModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

";
        
        $__internal_a7bb37cf838fc34e7ba1440ad7141814c0f83672304fb7388d046f93e779ba53->leave($__internal_a7bb37cf838fc34e7ba1440ad7141814c0f83672304fb7388d046f93e779ba53_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Region:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 209,  367 => 208,  363 => 207,  358 => 205,  330 => 180,  325 => 179,  319 => 178,  286 => 151,  253 => 121,  245 => 116,  238 => 112,  232 => 109,  224 => 104,  217 => 100,  211 => 97,  201 => 92,  176 => 69,  161 => 60,  157 => 59,  153 => 58,  147 => 55,  140 => 51,  134 => 50,  130 => 49,  127 => 48,  122 => 47,  118 => 45,  116 => 44,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ZoneBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} Région {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/zone.css')}}\">
{% endblock %}
{% block content %}
    <h1>Zone d'intervention</h1>

    <div class=\"page-title\">
        <div class=\"title_left\">
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li><a href=\"\">Admnistration</a></li>
                <li><a href=\"\">Location</a></li>
                <li class=\"active\"> Régions </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Liste des regions</h3>
                    <button id=\"btnAjouterRegion\" class=\"btn btn-primary btn-md pull-right\" data-toggle=\"modal\" data-target=\"ajoutRegionModal\">
                        Ajouter une région
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <table id=\"regionTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Code</th>
                            <th>/</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% if regions  == null %}
                            Aucune region
                        {% endif %}
                        {% for region in regions %}
                            <tr>
                                <td>{{ region.id }}</td>
                                <td><a href=\"{{ path('zone_district', {'region_id': region.id }) }}\" class=\"lien\" >{{ region.regionLibelle }}</a></td>
                                <td>{{ region.regionCode }}</td>
                                <td width=\"100px\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                            <input hidden=\"hidden\" id=\"id\" value=\"{{ region.id }}\" />
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ region.id }}\">
                                            <input hidden=\"hidden\" id=\"id\" value=\"{{ region.id }}\" />
                                            <input hidden=\"hidden\" id=\"libelle\" value=\"{{ region.regionLibelle }}\" />
                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                        </button>
                                    </div>

                                    <!-- -->
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Code</th>
                            <th>/</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Ajouter Region -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter une région</h4>
                </div>
                <form class=\"formulaire\" action=\"{{ path('zone_ajouter_region') }}\" novalidate method=\"post\" {{ form_enctype(form) }}>
                    <div class=\"modal-body\">
                        <div class=\"well\">
                            <div class=\"item form-group\">
                             <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.regionLibelle,\"Libellé de la région\") }}
                             </div>
                             <div class=\"col-sm-6\">
                                   {{ form_widget(form.regionLibelle,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                            </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                    {{ form_errors(form.regionLibelle)}}
                            </div>
                            <br><br>
                            <div class=\"item form-group\">
                             <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.regionCode,\"Code de la région\") }}
                             </div>
                             <div class=\"col-sm-6\">
                                   {{ form_widget(form.regionCode,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                            </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        {{ form_errors(form.regionCode)}}
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            {{form_rest(form)}}
                        </div>
                    </div>
                    <div class=\"item form-group modal-footer\">
                        <div class=\"col-md-9 col-sm-6 col-xs-12\">
                            <div class=\"pull-right\">
                                <button class=\"btn btn-primary\" id=\"sub\" type=\"submit\">Ajouter</button>
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Supprimer region -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer la region <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"{{ path('zone_supprimer_region')}}\" method=\"post\">
                        <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modification region -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une région</h4>
                </div>
                <div id=\"formModifRegion\">
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('vendors/validator/validator.js')}}\"></script>
    <script>
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
    <script src=\"{{ asset('js/jquery.validate.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>
    <script>
        \$(function(){
        var table = \$('#regionTable').dataTable();

            \$('#btnAjouterRegion').on('click',function(){
                \$('#ajoutRegionModal').modal('toggle');
            });
        });

        \$(function(){

            \$('.btn-delete').on('click',function(){
                \$(\"#label\").text(\$(this).children()[1].value);
                \$(\"#regionId\").val(\$(this).children()[0].value);
                \$('#suprRegionModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_region', {'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifRegion').children().remove();
                        \$('#formModifRegion').append(data);
                        \$('#modifRegionModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

{% endblock %}", "ZoneBundle:Region:index.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Region/index.html.twig");
    }
}
