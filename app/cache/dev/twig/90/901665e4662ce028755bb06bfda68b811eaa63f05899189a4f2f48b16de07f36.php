<?php

/* ProjetBundle:DescriptifActivite:lister.html.twig */
class __TwigTemplate_0ae32399bb2bbc326c4ed4730c1560cc7195b16db9481b3e3b4b4c6cc1d89cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:DescriptifActivite:lister.html.twig", 1);
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
        $__internal_c479aec980a2a87e843c6d6fcee81a44159fc4bd7fbc259d06bde28537609492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c479aec980a2a87e843c6d6fcee81a44159fc4bd7fbc259d06bde28537609492->enter($__internal_c479aec980a2a87e843c6d6fcee81a44159fc4bd7fbc259d06bde28537609492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:DescriptifActivite:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c479aec980a2a87e843c6d6fcee81a44159fc4bd7fbc259d06bde28537609492->leave($__internal_c479aec980a2a87e843c6d6fcee81a44159fc4bd7fbc259d06bde28537609492_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9335f0dce09b3b3d0466832cb6e2033813a252fb471e20d67a74110c9178c6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9335f0dce09b3b3d0466832cb6e2033813a252fb471e20d67a74110c9178c6fa->enter($__internal_9335f0dce09b3b3d0466832cb6e2033813a252fb471e20d67a74110c9178c6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Descriptifs pour activité ";
        
        $__internal_9335f0dce09b3b3d0466832cb6e2033813a252fb471e20d67a74110c9178c6fa->leave($__internal_9335f0dce09b3b3d0466832cb6e2033813a252fb471e20d67a74110c9178c6fa_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74ea5f3b689abeff306a5cf8971bc77e14f4b97c999c17be8cc3831134fee455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ea5f3b689abeff306a5cf8971bc77e14f4b97c999c17be8cc3831134fee455->enter($__internal_74ea5f3b689abeff306a5cf8971bc77e14f4b97c999c17be8cc3831134fee455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_74ea5f3b689abeff306a5cf8971bc77e14f4b97c999c17be8cc3831134fee455->leave($__internal_74ea5f3b689abeff306a5cf8971bc77e14f4b97c999c17be8cc3831134fee455_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b26e5c5d26763673f2749bd13ae36bea5a2a50bc56df0deb066c6e26c1f57c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26e5c5d26763673f2749bd13ae36bea5a2a50bc56df0deb066c6e26c1f57c2e->enter($__internal_b26e5c5d26763673f2749bd13ae36bea5a2a50bc56df0deb066c6e26c1f57c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")))), "html", null, true);
        echo "\"> Activité </a></li>
                    <li class=\"active\"> Déscriptif </li>
                </ol>
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <h1>Descriptif</h1>
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_ajouter", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        Ajouter un descriptif
                    </a>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div>
                        ";
        // line 36
        if (twig_test_empty((isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs")))) {
            // line 37
            echo "                            <span style=\"color: darkgrey\">Aucune descriptif</span>
                        ";
        } else {
            // line 39
            echo "                            <ul>
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
            // line 53
            if ((twig_length_filter($this->env, (isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs"))) == 0)) {
                // line 54
                echo "                                        Aucun descriptif
                                    ";
            } else {
                // line 56
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs")));
                foreach ($context['_seq'] as $context["_key"] => $context["descriptif"]) {
                    // line 57
                    echo "                                            <tr>
                                                <td  style=\"display:none;\">";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "id", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["descriptif"], "indicateur", array()), "libelleIndicateur", array()), "html", null, true);
                    echo "</td>
                                                <td>
                                                    ";
                    // line 61
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptif"], "unites", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
                        // line 62
                        echo "                                                        -";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["unite"], "libelleUnite", array()), "html", null, true);
                        echo "</br>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                                                </td>
                                                <td>";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "baselineDescParUi", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "objectifDescParUi", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "realCumulParUi", array()), "html", null, true);
                    echo "</td>
                                                <td class=\"\">
                                                    ";
                    // line 69
                    if (($this->getAttribute($context["descriptif"], "explicationDescParUi", array()) != "")) {
                        // line 70
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "explicationDescParUi", array()), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 72
                        echo "                                                        -Aucun-
                                                    ";
                    }
                    // line 74
                    echo "                                                </td>
                                                <td>
                                                    ";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptif"], "communes", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                        // line 77
                        echo "                                                        -";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                        echo "</br>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_modifier", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")), "idDescriptifParUi" => $this->getAttribute($context["descriptif"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_liste", array("idActivite" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute($context["descriptif"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Ajouter une situation annuelle\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a >
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "id", array()), "html", null, true);
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
                    // line 113
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_supprimer", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")))), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['descriptif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                                    ";
            }
            // line 127
            echo "                                    </tbody>
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
        // line 142
        echo "                        <hr>
                        <div class=\"clearfix\">
                            <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")))), "html", null, true);
        echo "\">
                                <button class=\"btn btn-success\" >Retour</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



";
        
        $__internal_b26e5c5d26763673f2749bd13ae36bea5a2a50bc56df0deb066c6e26c1f57c2e->leave($__internal_b26e5c5d26763673f2749bd13ae36bea5a2a50bc56df0deb066c6e26c1f57c2e_prof);

    }

    // line 158
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f371832113189ca6ceeddca7ad051b211795059d092cb023b0755ef18549047a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f371832113189ca6ceeddca7ad051b211795059d092cb023b0755ef18549047a->enter($__internal_f371832113189ca6ceeddca7ad051b211795059d092cb023b0755ef18549047a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 159
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 160
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
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
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
    </script>
    <script>
        var table = \$('#descriptifTable').DataTable();

        \$('.delete-btn').on('click',function(){
            var _this = \$(this);
            var _parent = \$(_this).parents()[3];
            var node = \$(\$(_parent).children()[0]);
            console.log(\$(node).text());
            \$('#idDescriptif').val(\$(node).text());
            \$('#modalDelete').modal('toggle');
        });
    </script>
";
        
        $__internal_f371832113189ca6ceeddca7ad051b211795059d092cb023b0755ef18549047a->leave($__internal_f371832113189ca6ceeddca7ad051b211795059d092cb023b0755ef18549047a_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:DescriptifActivite:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 189,  379 => 188,  375 => 187,  370 => 185,  342 => 160,  337 => 159,  331 => 158,  311 => 144,  307 => 142,  290 => 127,  287 => 126,  268 => 113,  245 => 93,  236 => 87,  228 => 82,  223 => 79,  214 => 77,  210 => 76,  206 => 74,  202 => 72,  196 => 70,  194 => 69,  189 => 67,  185 => 66,  181 => 65,  178 => 64,  169 => 62,  165 => 61,  160 => 59,  156 => 58,  153 => 57,  148 => 56,  144 => 54,  142 => 53,  126 => 39,  122 => 37,  120 => 36,  110 => 29,  95 => 17,  91 => 16,  87 => 15,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Descriptifs pour activité {% endblock %}
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
                    <li><a href=\"{{ path('projet_lister_activite', {'projet_id': projet_id, 'comp_id': comp_id}) }}\"> Activité </a></li>
                    <li class=\"active\"> Déscriptif </li>
                </ol>
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <h1>Descriptif</h1>
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <a href=\"{{ path('projet_descriptif_activite_ajouter',{'projet_id' : projet_id, 'comp_id': comp_id, 'act_id': act_id }) }}\" class=\"btn btn-primary\">
                        Ajouter un descriptif
                    </a>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div>
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
                                    {% if descriptifs|length ==0 %}
                                        Aucun descriptif
                                    {% else%}
                                        {% for descriptif in descriptifs %}
                                            <tr>
                                                <td  style=\"display:none;\">{{descriptif.id}}</td>
                                                <td>{{descriptif.indicateur.libelleIndicateur}}</td>
                                                <td>
                                                    {% for unite in descriptif.unites %}
                                                        -{{unite.libelleUnite}}</br>
                                                    {% endfor %}
                                                </td>
                                                <td>{{ descriptif.baselineDescParUi }}</td>
                                                <td>{{descriptif.objectifDescParUi}}</td>
                                                <td>{{descriptif.realCumulParUi}}</td>
                                                <td class=\"\">
                                                    {% if descriptif.explicationDescParUi != \"\" %}
                                                        {{descriptif.explicationDescParUi}}
                                                    {% else %}
                                                        -Aucun-
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% for commune in descriptif.communes %}
                                                        -{{commune.communeLibelle}}</br>
                                                    {% endfor %}
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        <a href=\"{{ path('projet_descriptif_activite_modifier',{'projet_id': projet_id, 'comp_id': comp_id, 'act_id': act_id,'idDescriptifParUi' : descriptif.id }) }}\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_liste',{'idActivite': activite.id, 'idDescriptifParUi' : descriptif.id }) }}\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Ajouter une situation annuelle\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a >
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ descriptif.id }}\">
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
                                                                    <form action=\"{{ path('projet_descriptif_activite_supprimer', {'projet_id': projet_id, 'comp_id': comp_id, 'act_id': act_id}) }}\" method=\"post\">
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
                        <div class=\"clearfix\">
                            <a href=\"{{ path('projet_lister_activite',{'projet_id': projet_id,'comp_id': comp_id}) }}\">
                                <button class=\"btn btn-success\" >Retour</button>
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
    </script>
    <script>
        var table = \$('#descriptifTable').DataTable();

        \$('.delete-btn').on('click',function(){
            var _this = \$(this);
            var _parent = \$(_this).parents()[3];
            var node = \$(\$(_parent).children()[0]);
            console.log(\$(node).text());
            \$('#idDescriptif').val(\$(node).text());
            \$('#modalDelete').modal('toggle');
        });
    </script>
{% endblock %}", "ProjetBundle:DescriptifActivite:lister.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/DescriptifActivite/lister.html.twig");
    }
}
