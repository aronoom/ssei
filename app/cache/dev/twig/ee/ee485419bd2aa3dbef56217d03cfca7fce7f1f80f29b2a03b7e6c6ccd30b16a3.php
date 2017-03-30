<?php

/* ProjetBundle:Projet:index.html.twig */
class __TwigTemplate_a935c6a57597d93b65e6ce6310d7300746fb7048770c36e68a61f9024d9d55a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Projet:index.html.twig", 1);
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
        $__internal_b4f022e98580e6ff317fdbaafcbb752c9a55fd260b6700326971997282905b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f022e98580e6ff317fdbaafcbb752c9a55fd260b6700326971997282905b36->enter($__internal_b4f022e98580e6ff317fdbaafcbb752c9a55fd260b6700326971997282905b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Projet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f022e98580e6ff317fdbaafcbb752c9a55fd260b6700326971997282905b36->leave($__internal_b4f022e98580e6ff317fdbaafcbb752c9a55fd260b6700326971997282905b36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b34ea854752c683360f0582a63176d853681b151f813076bbca026d5415a23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b34ea854752c683360f0582a63176d853681b151f813076bbca026d5415a23d->enter($__internal_0b34ea854752c683360f0582a63176d853681b151f813076bbca026d5415a23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Détails ";
        
        $__internal_0b34ea854752c683360f0582a63176d853681b151f813076bbca026d5415a23d->leave($__internal_0b34ea854752c683360f0582a63176d853681b151f813076bbca026d5415a23d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9fe593e21254d3954b8a1ce5709a870ffa41d722d55b63ee6ca9c4d71ae17ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fe593e21254d3954b8a1ce5709a870ffa41d722d55b63ee6ca9c4d71ae17ba->enter($__internal_a9fe593e21254d3954b8a1ce5709a870ffa41d722d55b63ee6ca9c4d71ae17ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a9fe593e21254d3954b8a1ce5709a870ffa41d722d55b63ee6ca9c4d71ae17ba->leave($__internal_a9fe593e21254d3954b8a1ce5709a870ffa41d722d55b63ee6ca9c4d71ae17ba_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_be3fd748cf7fbc91f26f1390d092bf25e986fa4766c2e9de789f92f14e2d9412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3fd748cf7fbc91f26f1390d092bf25e986fa4766c2e9de789f92f14e2d9412->enter($__internal_be3fd748cf7fbc91f26f1390d092bf25e986fa4766c2e9de789f92f14e2d9412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                    <li class=\"active\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
        echo " </li>
                </ol>
            </div>
        </div>
    </div>
<div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
        echo " </h2>
                        <span class=\"nav navbar-right pull-right\">";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateProjet", array()), "d/m/Y"), "html", null, true);
        echo "</span>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <h2>Objectif </h2>
                            <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "objectifProjet", array()), "html", null, true);
        echo "</p>
                        <hr>
                    <div>
                        <h2>Entités </h2>
                        ";
        // line 36
        if (twig_test_empty($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "entites", array()))) {
            // line 37
            echo "                            <span style=\"color: darkgrey\">Aucune entité</span>
                        ";
        } else {
            // line 39
            echo "                            <ul>
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "entites", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entite"]) {
                // line 41
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "libelleEntite", array()), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            </ul>
                        ";
        }
        // line 45
        echo "                        <hr>
                    </div>
                    <!-- composante -->
                    <div>
                        <h2>Descriptifs </h2>
                        <p>
                            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_ajouter", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"\">
                                <span data-toggle=\"tooltip\" title data-original-title=\"Ajouter un descriptif pour le projet\" class=\"glyphicon glyphicon-plus-sign btn btn-primary pull-right\"></span>
                            </a>
                        </p>
                        ";
        // line 55
        if (twig_test_empty((isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs")))) {
            // line 56
            echo "                                <span style=\"color: darkgrey\">Aucune descriptif</span>
                         ";
        } else {
            // line 58
            echo "                         <ul>
                         <table id=\"descriptifTable\" class=\"table table-responsive table-striped table-bordered\">
                            <thead>
                                <th style=\"display:none;\">#</th>
                                <th>Indicateur</th>
                                <th>Unité</th>
                                <th>Baseline</th>
                                <th>Objectif projet</th>
                                <th>Réalisation</th>
                                <th>Explication</th>
                                <th>Commune</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                            ";
            // line 72
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "descriptifProjets", array())) == 0)) {
                // line 73
                echo "                            Aucun descriptif
                            ";
            } else {
                // line 75
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs")));
                foreach ($context['_seq'] as $context["_key"] => $context["descriptif"]) {
                    // line 76
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptif"], "descriptifParUis", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["descriptifui"]) {
                        // line 77
                        echo "                                    <tr>  
                                        <td  style=\"display:none;\">";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "id", array()), "html", null, true);
                        echo "</td>                                  
                                        <td>";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["descriptifui"], "indicateur", array()), "libelleIndicateur", array()), "html", null, true);
                        echo "</td>
                                        <td>
                                           ";
                        // line 81
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptifui"], "unites", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
                            // line 82
                            echo "                                            -";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["unite"], "libelleUnite", array()), "html", null, true);
                            echo "</br>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 84
                        echo "                                        </td>
                                        <td>";
                        // line 85
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "baselineDescParUi", array()), "html", null, true);
                        echo "</td>
                                        <td>";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "objectifDescParUi", array()), "html", null, true);
                        echo "</td>
                                        <td>";
                        // line 87
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "realCumulParUi", array()), "html", null, true);
                        echo "</td>
                                        <td class=\"\">
                                        ";
                        // line 89
                        if (($this->getAttribute($context["descriptifui"], "explicationDescParUi", array()) != "")) {
                            // line 90
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "explicationDescParUi", array()), "html", null, true);
                            echo "
                                        ";
                        } else {
                            // line 92
                            echo "                                            -Aucun-
                                        ";
                        }
                        // line 94
                        echo "                                        </td>
                                        <td>
                                        ";
                        // line 96
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptifui"], "communes", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                            // line 97
                            echo "                                            -";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                            echo "</br>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 99
                        echo "                                         </td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a href=\"";
                        // line 102
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_modifier", array("idDescriptifProjet" => $this->getAttribute($context["descriptif"], "id", array()), "idDescriptifParUi" => $this->getAttribute($context["descriptifui"], "id", array()))), "html", null, true);
                        echo "\">
                                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                    </button>
                                                </a>
                                                <a href=\"";
                        // line 107
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_liste", array("idDescriptifParUi" => $this->getAttribute($context["descriptifui"], "id", array()), "idDescriptifProjet" => $this->getAttribute($context["descriptif"], "id", array()))), "html", null, true);
                        echo "\">
                                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Ajouter une situation annuelle\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                                    </button>
                                                </a>
                                                <a >
                                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                        // line 113
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "id", array()), "html", null, true);
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
                        // line 133
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_supprimer");
                        echo "\" method=\"post\">
                                                                <input type=\"hidden\" id=\"idDescriptif\" name=\"idDescriptif\" value=\"\">
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['descriptifui'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['descriptif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "                            ";
            }
            // line 148
            echo "                            </tbody>
                            <tfooter>
                                <th style=\"display:none;\">#</th>
                                <th>Indicateur</th>
                                <th>Unité</th>
                                <th>Baseline</th>
                                <th>Objectif projet</th>
                                <th>Réalisation</th>
                                <th>Explication</th>
                                <th>Commune</th>
                                <th>Actions</th>
                            </tfooter>
                        </table>
                        </ul>
                        ";
        }
        // line 163
        echo "                        <hr>
                    </div>
                    <!-- composante end -->

                    <div>
                        <h2>Composantes </h2>
                        <p>
                            <a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_ajouter_composante", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" class=\"\">
                                <span data-toggle=\"tooltip\" title data-original-title=\"Ajouter une composante pour le projet\" class=\"glyphicon glyphicon-plus-sign btn btn-primary pull-right\"></span>
                            </a>
                        </p>
                        ";
        // line 174
        if (twig_test_empty($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "composantes", array()))) {
            // line 175
            echo "                            <span style=\"color: darkgrey\">Aucune composante</span>
                        ";
        } else {
            // line 177
            echo "                        <ul>

                                                <table id=\"composanteTable\" class=\"table table-responsive table-striped table-bordered\" cellspacing=\"0\" width=\"100%\" >
                                                    <thead>
                                                        <tr role=\"row\">
                                                            <th>#</th>
                                                            <th>Libelle</th>
                                                            <th>Code</th>
                                                            <th>/</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "composantes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["composante"]) {
                // line 190
                echo "                                                            <tr>
                                                                <td>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "id", array()), "html", null, true);
                echo "</td>
                                                                <td><a href=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "comp_id" => $this->getAttribute($context["composante"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "libelleComposante", array()), "html", null, true);
                echo "</a></td>
                                                                <td>";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "codeComposante", array()), "html", null, true);
                echo "</td>
                                                                <td width=\"100px\">
                                                                    <div class=\"btn-group\">
                                                                        <a href=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_modifier_composante", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "id" => $this->getAttribute($context["composante"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" ></span> </a>
                                                                        <button class=\"btn btn-danger btn-sm btn-remove\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\">
                                                                            <input value=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "id", array()), "html", null, true);
                echo "\" hidden/>
                                                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composante'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                                                    </tbody>
                                                    <tfoot>
                                                        <tr role=\"row\">
                                                            <th>#</th>
                                                            <th>Libelle</th>
                                                            <th>Code</th>
                                                            <th>/</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                        ";
        }
        // line 217
        echo "                        <hr>
                    </div>

                    <div>
                        <h2>Régions </h2>
                        ";
        // line 222
        if (twig_test_empty($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "regions", array()))) {
            // line 223
            echo "                            <span style=\"color: darkgrey\">Aucune région</span>
                        ";
        } else {
            // line 225
            echo "                            <ul>
                                ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "regions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 227
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "                            </ul>
                        ";
        }
        // line 231
        echo "                        <hr>
                        <div class=\"form-group\">
                            <div class=\"clearfix\">
                            <a href=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">
                                <button type=\"reset\" class=\"btn btn-success\">Retour</button>
                             </a>
                            </div>
                        </div>
                    </div>

                    <!-- Supprimer -->
                    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprProjetModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                        <div class=\"modal-dialog modal-md\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                    </button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"well\">
                                        <p>Voulez-vous vraiment supprimer ce projet</p>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <form action=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- supprimer composante -->
                       <!-- Supprimer -->
                           <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprCompModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                               <div class=\"modal-dialog modal-md\">
                                   <div class=\"modal-content\">
                                       <div class=\"modal-header\">
                                           <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                           </button>
                                           <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                       </div>
                                       <div class=\"modal-body\">
                                           <div class=\"well\">
                                               <p>Voulez-vous vraiment supprimer cette composante</p>
                                           </div>
                                       </div>
                                       <div class=\"modal-footer\">
                                           <form action=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer_composante", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                                               <input id=\"compId\" name=\"compId\" hidden>
                                               <input name=\"projetId\" value=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
        echo "\" hidden>
                                               <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                               <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                    <!-- end supprimer -->
                    <!-- Modification -->
                    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modProjetModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                        <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                    </button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier ce projet</h4>
                                </div>
                                <div id=\"formModifProjet\">
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>



";
        
        $__internal_be3fd748cf7fbc91f26f1390d092bf25e986fa4766c2e9de789f92f14e2d9412->leave($__internal_be3fd748cf7fbc91f26f1390d092bf25e986fa4766c2e9de789f92f14e2d9412_prof);

    }

    // line 316
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17ac5b85b1294c5d4ee399df072068ce02d09ded502d6b3d1c0385924fe48c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ac5b85b1294c5d4ee399df072068ce02d09ded502d6b3d1c0385924fe48c3b->enter($__internal_17ac5b85b1294c5d4ee399df072068ce02d09ded502d6b3d1c0385924fe48c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 317
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 318
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
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>

        \$(function(){

            \$('#btnSupProjet').on('click',function(){
                \$('#suprProjetModal').modal('toggle');
            });

            \$('#btnModProjet').on('click', function(){
                var id = \$('#idProjet').val();
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('projet_modifier', {'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifProjet').children().remove();
                        \$('#formModifProjet').append(data);
                        \$('#modProjetModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });
    </script>
    <script>
        var table = \$('#descriptifTable').DataTable();
        var table2 = \$('#composanteTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idDescriptif').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });

        });
    </script>
    <script>
            \$('.btn-remove').on('click',function(){
                \$('#compId').val(\$(this).children()[0].value);
                \$('#suprCompModal').modal('toggle');
            });
        </script>
";
        
        $__internal_17ac5b85b1294c5d4ee399df072068ce02d09ded502d6b3d1c0385924fe48c3b->leave($__internal_17ac5b85b1294c5d4ee399df072068ce02d09ded502d6b3d1c0385924fe48c3b_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 347,  636 => 346,  632 => 345,  627 => 343,  599 => 318,  594 => 317,  588 => 316,  549 => 283,  544 => 281,  516 => 256,  491 => 234,  486 => 231,  482 => 229,  473 => 227,  469 => 226,  466 => 225,  462 => 223,  460 => 222,  453 => 217,  439 => 205,  426 => 198,  421 => 196,  415 => 193,  409 => 192,  405 => 191,  402 => 190,  398 => 189,  384 => 177,  380 => 175,  378 => 174,  371 => 170,  362 => 163,  345 => 148,  342 => 147,  336 => 146,  317 => 133,  294 => 113,  285 => 107,  277 => 102,  272 => 99,  263 => 97,  259 => 96,  255 => 94,  251 => 92,  245 => 90,  243 => 89,  238 => 87,  234 => 86,  230 => 85,  227 => 84,  218 => 82,  214 => 81,  209 => 79,  205 => 78,  202 => 77,  197 => 76,  192 => 75,  188 => 73,  186 => 72,  170 => 58,  166 => 56,  164 => 55,  157 => 51,  149 => 45,  145 => 43,  136 => 41,  132 => 40,  129 => 39,  125 => 37,  123 => 36,  116 => 32,  108 => 27,  104 => 26,  91 => 16,  87 => 15,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Détails {% endblock %}
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
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                    <li class=\"active\"> {{ projet.nomProjet }} </li>
                </ol>
            </div>
        </div>
    </div>
<div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>{{ projet.nomProjet }} </h2>
                        <span class=\"nav navbar-right pull-right\">{{ projet.dateProjet|date(\"d/m/Y\") }}</span>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <h2>Objectif </h2>
                            <p>{{ projet.objectifProjet }}</p>
                        <hr>
                    <div>
                        <h2>Entités </h2>
                        {% if projet.entites is empty %}
                            <span style=\"color: darkgrey\">Aucune entité</span>
                        {% else %}
                            <ul>
                                {% for entite in projet.entites %}
                                    <li>{{ entite.libelleEntite }}</li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                        <hr>
                    </div>
                    <!-- composante -->
                    <div>
                        <h2>Descriptifs </h2>
                        <p>
                            <a href=\"{{ path('projet_descriptif_ajouter',{'id' : id }) }}\" class=\"\">
                                <span data-toggle=\"tooltip\" title data-original-title=\"Ajouter un descriptif pour le projet\" class=\"glyphicon glyphicon-plus-sign btn btn-primary pull-right\"></span>
                            </a>
                        </p>
                        {% if descriptifs is empty %}
                                <span style=\"color: darkgrey\">Aucune descriptif</span>
                         {% else %}
                         <ul>
                         <table id=\"descriptifTable\" class=\"table table-responsive table-striped table-bordered\">
                            <thead>
                                <th style=\"display:none;\">#</th>
                                <th>Indicateur</th>
                                <th>Unité</th>
                                <th>Baseline</th>
                                <th>Objectif projet</th>
                                <th>Réalisation</th>
                                <th>Explication</th>
                                <th>Commune</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                            {% if projet.descriptifProjets|length ==0 %}
                            Aucun descriptif
                            {% else%}
                                {% for descriptif in descriptifs %}
                                {% for descriptifui in descriptif.descriptifParUis %}
                                    <tr>  
                                        <td  style=\"display:none;\">{{descriptif.id}}</td>                                  
                                        <td>{{descriptifui.indicateur.libelleIndicateur}}</td>
                                        <td>
                                           {% for unite in descriptifui.unites %}
                                            -{{unite.libelleUnite}}</br>
                                            {% endfor %}
                                        </td>
                                        <td>{{descriptifui.baselineDescParUi }}</td>
                                        <td>{{descriptifui.objectifDescParUi}}</td>
                                        <td>{{descriptifui.realCumulParUi}}</td>
                                        <td class=\"\">
                                        {% if descriptifui.explicationDescParUi != \"\" %}
                                            {{descriptifui.explicationDescParUi}}
                                        {% else %}
                                            -Aucun-
                                        {% endif %}
                                        </td>
                                        <td>
                                        {% for commune in descriptifui.communes %}
                                            -{{commune.communeLibelle}}</br>
                                        {% endfor %}
                                         </td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a href=\"{{ path('projet_descriptif_modifier',{'idDescriptifProjet' : descriptif.id,'idDescriptifParUi':descriptifui.id }) }}\">
                                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                    </button>
                                                </a>
                                                <a href=\"{{ path('projet_descriptif_situation_annuelle_liste',{'idDescriptifParUi' : descriptifui.id , 'idDescriptifProjet' : descriptif.id }) }}\">
                                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Ajouter une situation annuelle\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                                    </button>
                                                </a>
                                                <a >
                                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ descriptifui.id }}\">
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
                                                            <form action=\"{{ path('projet_descriptif_supprimer') }}\" method=\"post\">
                                                                <input type=\"hidden\" id=\"idDescriptif\" name=\"idDescriptif\" value=\"\">
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
                                {% endfor %}
                            {% endif %}
                            </tbody>
                            <tfooter>
                                <th style=\"display:none;\">#</th>
                                <th>Indicateur</th>
                                <th>Unité</th>
                                <th>Baseline</th>
                                <th>Objectif projet</th>
                                <th>Réalisation</th>
                                <th>Explication</th>
                                <th>Commune</th>
                                <th>Actions</th>
                            </tfooter>
                        </table>
                        </ul>
                        {% endif %}
                        <hr>
                    </div>
                    <!-- composante end -->

                    <div>
                        <h2>Composantes </h2>
                        <p>
                            <a href=\"{{ path('projet_ajouter_composante',{'projet_id' : projet.id }) }}\" class=\"\">
                                <span data-toggle=\"tooltip\" title data-original-title=\"Ajouter une composante pour le projet\" class=\"glyphicon glyphicon-plus-sign btn btn-primary pull-right\"></span>
                            </a>
                        </p>
                        {% if projet.composantes is empty %}
                            <span style=\"color: darkgrey\">Aucune composante</span>
                        {% else %}
                        <ul>

                                                <table id=\"composanteTable\" class=\"table table-responsive table-striped table-bordered\" cellspacing=\"0\" width=\"100%\" >
                                                    <thead>
                                                        <tr role=\"row\">
                                                            <th>#</th>
                                                            <th>Libelle</th>
                                                            <th>Code</th>
                                                            <th>/</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {% for composante in projet.composantes %}
                                                            <tr>
                                                                <td>{{ composante.id }}</td>
                                                                <td><a href=\"{{ path('projet_lister_activite', {'projet_id': projet.id, 'comp_id': composante.id}) }}\">{{ composante.libelleComposante }}</a></td>
                                                                <td>{{ composante.codeComposante }}</td>
                                                                <td width=\"100px\">
                                                                    <div class=\"btn-group\">
                                                                        <a href=\"{{ path('projet_modifier_composante', {'projet_id': projet.id, 'id': composante.id}) }}\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" ></span> </a>
                                                                        <button class=\"btn btn-danger btn-sm btn-remove\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\">
                                                                            <input value=\"{{ composante.id }}\" hidden/>
                                                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                    </tbody>
                                                    <tfoot>
                                                        <tr role=\"row\">
                                                            <th>#</th>
                                                            <th>Libelle</th>
                                                            <th>Code</th>
                                                            <th>/</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                        {% endif %}
                        <hr>
                    </div>

                    <div>
                        <h2>Régions </h2>
                        {% if projet.regions is empty %}
                            <span style=\"color: darkgrey\">Aucune région</span>
                        {% else %}
                            <ul>
                                {% for region in projet.regions %}
                                    <li>{{ region.regionLibelle }}</li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                        <hr>
                        <div class=\"form-group\">
                            <div class=\"clearfix\">
                            <a href=\"{{ path('projet_homepage') }}\">
                                <button type=\"reset\" class=\"btn btn-success\">Retour</button>
                             </a>
                            </div>
                        </div>
                    </div>

                    <!-- Supprimer -->
                    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprProjetModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                        <div class=\"modal-dialog modal-md\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                    </button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"well\">
                                        <p>Voulez-vous vraiment supprimer ce projet</p>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <form action=\"{{ path('projet_supprimer', {'id': projet.id})}}\" method=\"post\">
                                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- supprimer composante -->
                       <!-- Supprimer -->
                           <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprCompModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                               <div class=\"modal-dialog modal-md\">
                                   <div class=\"modal-content\">
                                       <div class=\"modal-header\">
                                           <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                           </button>
                                           <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                       </div>
                                       <div class=\"modal-body\">
                                           <div class=\"well\">
                                               <p>Voulez-vous vraiment supprimer cette composante</p>
                                           </div>
                                       </div>
                                       <div class=\"modal-footer\">
                                           <form action=\"{{ path('projet_supprimer_composante',{'projet_id': projet.id})}}\" method=\"post\">
                                               <input id=\"compId\" name=\"compId\" hidden>
                                               <input name=\"projetId\" value=\"{{ projet.id }}\" hidden>
                                               <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                               <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                    <!-- end supprimer -->
                    <!-- Modification -->
                    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modProjetModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                        <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                    </button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier ce projet</h4>
                                </div>
                                <div id=\"formModifProjet\">
                                </div>
                            </div>
                        </div>
                    </div>

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

            \$('#btnSupProjet').on('click',function(){
                \$('#suprProjetModal').modal('toggle');
            });

            \$('#btnModProjet').on('click', function(){
                var id = \$('#idProjet').val();
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('projet_modifier', {'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifProjet').children().remove();
                        \$('#formModifProjet').append(data);
                        \$('#modProjetModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });
    </script>
    <script>
        var table = \$('#descriptifTable').DataTable();
        var table2 = \$('#composanteTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idDescriptif').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });

        });
    </script>
    <script>
            \$('.btn-remove').on('click',function(){
                \$('#compId').val(\$(this).children()[0].value);
                \$('#suprCompModal').modal('toggle');
            });
        </script>
{% endblock %}", "ProjetBundle:Projet:index.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Projet/index.html.twig");
    }
}
