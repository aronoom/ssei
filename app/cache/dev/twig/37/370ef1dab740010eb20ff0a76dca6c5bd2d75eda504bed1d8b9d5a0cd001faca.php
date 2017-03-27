<?php

/* ZoneBundle:Commune:index.html.twig */
class __TwigTemplate_8367adf80e64629619d6153fed022768760f78ef073d4a163465b0b93c730458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZoneBundle::layout.html.twig", "ZoneBundle:Commune:index.html.twig", 1);
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
        $__internal_c5fd10bdfc43718b3247d21c75ade324bf5c852e2af1c1ac3d03451b05109a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fd10bdfc43718b3247d21c75ade324bf5c852e2af1c1ac3d03451b05109a35->enter($__internal_c5fd10bdfc43718b3247d21c75ade324bf5c852e2af1c1ac3d03451b05109a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Commune:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5fd10bdfc43718b3247d21c75ade324bf5c852e2af1c1ac3d03451b05109a35->leave($__internal_c5fd10bdfc43718b3247d21c75ade324bf5c852e2af1c1ac3d03451b05109a35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e4f6891aa461472ec4bb65db2ee39c9cb7982fdc2bfec90ac67cf794160cef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4f6891aa461472ec4bb65db2ee39c9cb7982fdc2bfec90ac67cf794160cef0->enter($__internal_4e4f6891aa461472ec4bb65db2ee39c9cb7982fdc2bfec90ac67cf794160cef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Commune ";
        
        $__internal_4e4f6891aa461472ec4bb65db2ee39c9cb7982fdc2bfec90ac67cf794160cef0->leave($__internal_4e4f6891aa461472ec4bb65db2ee39c9cb7982fdc2bfec90ac67cf794160cef0_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7f4f441e897d6f771825fbb970f74fb4df17414bee65901563beceee336476d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f4f441e897d6f771825fbb970f74fb4df17414bee65901563beceee336476d->enter($__internal_d7f4f441e897d6f771825fbb970f74fb4df17414bee65901563beceee336476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d7f4f441e897d6f771825fbb970f74fb4df17414bee65901563beceee336476d->leave($__internal_d7f4f441e897d6f771825fbb970f74fb4df17414bee65901563beceee336476d_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_980d82c5756947f8414f90bb1bce198cb221a9b5d6045b9e7161973fc3a1c085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980d82c5756947f8414f90bb1bce198cb221a9b5d6045b9e7161973fc3a1c085->enter($__internal_980d82c5756947f8414f90bb1bce198cb221a9b5d6045b9e7161973fc3a1c085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h1>Zone d'intervention</h1>

    <div class=\"page-title\">
        <div class=\"title_left\">
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li><a href=\"\">Admnistration</a></li>
                <li><a href=\"\">Location</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_region");
        echo "\">Régions </a> </li>
                <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_district", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")))), "html", null, true);
        echo "\">Districts </a> </li>
                <li class=\"active\"> Commune </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <input hidden=\"hidden\" id=\"districtId\" name=\"districtId\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["district_id"]) ? $context["district_id"] : $this->getContext($context, "district_id")), "html", null, true);
        echo "\">
    <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Listes des communes - ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
        echo "</h3>
                    <button id=\"btnAjouterCommune\" class=\"btn btn-primary btn-md pull-right\" data-toggle=\"modal\" data-target=\"ajoutCommuneModal\">
                        Ajouter une commune
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    ";
        // line 38
        if (((isset($context["communes"]) ? $context["communes"] : $this->getContext($context, "communes")) == null)) {
            // line 39
            echo "                        Aucune commune
                    ";
        } else {
            // line 41
            echo "                        <table id=\"communeTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
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
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["communes"]) ? $context["communes"] : $this->getContext($context, "communes")));
            foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                // line 52
                echo "                                <tr>
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                echo "</td>
                                    <td><a class=\"lien\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_commune", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "district_id" => (isset($context["district_id"]) ? $context["district_id"] : $this->getContext($context, "district_id")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                echo "</a></td>
                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeCode", array()), "html", null, true);
                echo "</td>
                                    <td width=\"100px\">
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                echo "\" />
                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                echo "\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                echo "\" />
                                                <input hidden=\"hidden\" id=\"libelle\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Libellé</th>
                                <th>Code</th>
                                <th>/</th>
                            </tr>
                            </tfoot>
                        </table>
                    ";
        }
        // line 84
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- Ajouter Commune -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter une région</h4>
                </div>
                <form class=\"formulaire\" action=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_ajouter_commune", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "district_id" => (isset($context["district_id"]) ? $context["district_id"] : $this->getContext($context, "district_id")))), "html", null, true);
        echo "\" novalidate method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"modal-body\">
                        <div class=\"well\">
                        <div class=\"item form-group\">
                               <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'label', array("label" => "Nom de la commune"));
        echo "
                               </div>
                               <div class=\"col-sm-6\">
                                ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                              </div>
                               <ul class=\"parsley-errors-list filled\">
                               <li class=\"parsley-required red\">
                                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'errors');
        echo "
                                </li>
                               </ul>
                           </div>
                           <br><br>
                           <div class=\"item form-group\">
                               <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeCode", array()), 'label', array("label" => "Code de la commune"));
        echo "
                               </div>
                               <div class=\"col-sm-6\">
                                ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeCode", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                              </div>
                               <ul class=\"parsley-errors-list filled\">
                               <li class=\"parsley-required red\">
                                ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeCode", array()), 'errors');
        echo "
                                </li>
                               </ul>
                           </div>
                            <br><br>
                            ";
        // line 127
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

    <!-- Supprimer commune -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer la commune <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_supprimer_commune", array("district_id" => (isset($context["district_id"]) ? $context["district_id"] : $this->getContext($context, "district_id")), "region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")))), "html", null, true);
        echo "\" method=\"post\">
                        <input hidden=\"hidden\" id=\"communeId\" name=\"communeId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modification commune -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une commune</h4>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une région</h4>
                </div>
                <div id=\"formModifCommune\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_980d82c5756947f8414f90bb1bce198cb221a9b5d6045b9e7161973fc3a1c085->leave($__internal_980d82c5756947f8414f90bb1bce198cb221a9b5d6045b9e7161973fc3a1c085_prof);

    }

    // line 185
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fd4671f047431e3993702336f26ab205a6a75f87966cc2a13d3e29752244156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd4671f047431e3993702336f26ab205a6a75f87966cc2a13d3e29752244156->enter($__internal_5fd4671f047431e3993702336f26ab205a6a75f87966cc2a13d3e29752244156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 186
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 187
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
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            \$('#btnAjouterCommune').on('click',function(){
                \$('#ajoutCommuneModal').modal('toggle');
            });

            \$('.btn-delete').on('click',function(){
                \$(\"#communeId\").val(\$(this).children()[0].value);
                \$(\"#label\").text(\$(this).children()[1].value);
                \$('#suprCommuneModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                var district_id = \$('#districtId').val();
                var region_id = \$('#regionId').val();
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_commune', {'district_id': district_id, 'region_id': region_id, 'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifCommune').children().remove();
                        \$('#formModifCommune').append(data);
                        \$('#modifCommuneModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

";
        
        $__internal_5fd4671f047431e3993702336f26ab205a6a75f87966cc2a13d3e29752244156->leave($__internal_5fd4671f047431e3993702336f26ab205a6a75f87966cc2a13d3e29752244156_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Commune:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 216,  392 => 215,  388 => 214,  383 => 212,  355 => 187,  350 => 186,  344 => 185,  311 => 158,  277 => 127,  269 => 122,  262 => 118,  256 => 115,  246 => 108,  239 => 104,  233 => 101,  223 => 96,  209 => 84,  196 => 73,  181 => 64,  177 => 63,  173 => 62,  167 => 59,  160 => 55,  154 => 54,  150 => 53,  147 => 52,  143 => 51,  131 => 41,  127 => 39,  125 => 38,  115 => 31,  107 => 26,  103 => 25,  94 => 19,  90 => 18,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Commune {% endblock %}
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
                <li><a href=\"{{ path('zone_region') }}\">Régions </a> </li>
                <li><a href=\"{{ path('zone_district', {'region_id': region_id}) }}\">Districts </a> </li>
                <li class=\"active\"> Commune </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <input hidden=\"hidden\" id=\"districtId\" name=\"districtId\" value=\"{{ district_id }}\">
    <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\" value=\"{{ region_id }}\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Listes des communes - {{ libelle }}</h3>
                    <button id=\"btnAjouterCommune\" class=\"btn btn-primary btn-md pull-right\" data-toggle=\"modal\" data-target=\"ajoutCommuneModal\">
                        Ajouter une commune
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    {% if communes  == null %}
                        Aucune commune
                    {% else %}
                        <table id=\"communeTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Libellé</th>
                                <th>Code</th>
                                <th>/</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for commune in communes %}
                                <tr>
                                    <td>{{ commune.id }}</td>
                                    <td><a class=\"lien\" href=\"{{ path('zone_commune', {'region_id': region_id, 'district_id': district_id}) }}\">{{ commune.communeLibelle }}</a></td>
                                    <td>{{ commune.communeCode }}</td>
                                    <td width=\"100px\">
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"{{ commune.id }}\" />
                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ commune.id }}\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"{{ commune.id }}\" />
                                                <input hidden=\"hidden\" id=\"libelle\" value=\"{{ commune.communeLibelle }}\" />
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
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <!-- Ajouter Commune -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter une région</h4>
                </div>
                <form class=\"formulaire\" action=\"{{ path('zone_ajouter_commune', {'region_id': region_id, 'district_id': district_id}) }}\" novalidate method=\"post\" {{ form_enctype(form) }}>
                    <div class=\"modal-body\">
                        <div class=\"well\">
                        <div class=\"item form-group\">
                               <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.communeLibelle,\"Nom de la commune\") }}
                               </div>
                               <div class=\"col-sm-6\">
                                {{ form_widget(form.communeLibelle,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                              </div>
                               <ul class=\"parsley-errors-list filled\">
                               <li class=\"parsley-required red\">
                                {{ form_errors(form.communeLibelle)}}
                                </li>
                               </ul>
                           </div>
                           <br><br>
                           <div class=\"item form-group\">
                               <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.communeCode,\"Code de la commune\") }}
                               </div>
                               <div class=\"col-sm-6\">
                                {{ form_widget(form.communeCode,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                              </div>
                               <ul class=\"parsley-errors-list filled\">
                               <li class=\"parsley-required red\">
                                {{ form_errors(form.communeCode)}}
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

    <!-- Supprimer commune -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer la commune <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"{{ path('zone_supprimer_commune', {'district_id': district_id, 'region_id': region_id})}}\" method=\"post\">
                        <input hidden=\"hidden\" id=\"communeId\" name=\"communeId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modification commune -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une commune</h4>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une région</h4>
                </div>
                <div id=\"formModifCommune\">
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
            \$('#btnAjouterCommune').on('click',function(){
                \$('#ajoutCommuneModal').modal('toggle');
            });

            \$('.btn-delete').on('click',function(){
                \$(\"#communeId\").val(\$(this).children()[0].value);
                \$(\"#label\").text(\$(this).children()[1].value);
                \$('#suprCommuneModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                var district_id = \$('#districtId').val();
                var region_id = \$('#regionId').val();
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_commune', {'district_id': district_id, 'region_id': region_id, 'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifCommune').children().remove();
                        \$('#formModifCommune').append(data);
                        \$('#modifCommuneModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

{% endblock %}", "ZoneBundle:Commune:index.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Commune/index.html.twig");
    }
}
