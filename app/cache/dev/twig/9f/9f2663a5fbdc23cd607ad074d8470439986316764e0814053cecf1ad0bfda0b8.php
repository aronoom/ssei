<?php

/* ProjetBundle:Projet:liste.html.twig */
class __TwigTemplate_74dd734e4a20981ad937b396db3c84a32a9a72548bf620e4183207680e8abb5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Projet:liste.html.twig", 1);
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
        $__internal_ba691b767582db59036235ca380683d626474a2d923c41a42aef70ada834a307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba691b767582db59036235ca380683d626474a2d923c41a42aef70ada834a307->enter($__internal_ba691b767582db59036235ca380683d626474a2d923c41a42aef70ada834a307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Projet:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba691b767582db59036235ca380683d626474a2d923c41a42aef70ada834a307->leave($__internal_ba691b767582db59036235ca380683d626474a2d923c41a42aef70ada834a307_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7667236c444667113ad381bfae236e30b8083b3bee1edf3579089e5404efd18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7667236c444667113ad381bfae236e30b8083b3bee1edf3579089e5404efd18b->enter($__internal_7667236c444667113ad381bfae236e30b8083b3bee1edf3579089e5404efd18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste ";
        
        $__internal_7667236c444667113ad381bfae236e30b8083b3bee1edf3579089e5404efd18b->leave($__internal_7667236c444667113ad381bfae236e30b8083b3bee1edf3579089e5404efd18b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e086dbbec56c308804c00f943a2b8832da055c1e240ea187367948f4495f2569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e086dbbec56c308804c00f943a2b8832da055c1e240ea187367948f4495f2569->enter($__internal_e086dbbec56c308804c00f943a2b8832da055c1e240ea187367948f4495f2569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e086dbbec56c308804c00f943a2b8832da055c1e240ea187367948f4495f2569->leave($__internal_e086dbbec56c308804c00f943a2b8832da055c1e240ea187367948f4495f2569_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d2964b4499f1dafd07aa965e525e06a8e3fafaa0ed4a0680f86423de4a77870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2964b4499f1dafd07aa965e525e06a8e3fafaa0ed4a0680f86423de4a77870->enter($__internal_5d2964b4499f1dafd07aa965e525e06a8e3fafaa0ed4a0680f86423de4a77870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"page-title\">
        <div class=\"title_left\">
            <h1>Projets</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li class=\"active\"> Projet </li>
            </ol>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"row\">
                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_ajouter");
        echo "\"> <button id=\"btnAjouter\" class=\"btn btn-primary btn-lg pull-left\">Nouveau projet</button> </a>
            </div>
            <!-- start accordion -->
            <div class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 29
            echo "
                    <div class=\"panel\">
                        <a class=\"panel-heading\" role=\"tab\" id=\"heading";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\">
                            <h4 class=\"panel-title\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo " <span class=\"pull-right\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateProjet", array()), "d/m/Y"), "html", null, true);
            echo "</span></h4>
                        </a>
                        <div id=\"collapse";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"true\" style=\"\">
                            <div class=\"panel-body\">
                                <p> Objectif : ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "objectifProjet", array()), "html", null, true);
            echo "</p>
                                <p> Régions :
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "regions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 39
                echo "                                        <code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
                echo "</code>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                </p>
                                <p> Entités :
                                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "entites", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entite"]) {
                // line 44
                echo "                                        <code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "codeEntite", array()), "html", null, true);
                echo "</code>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                </p>
                                <div class=\"pull-right\">
                                    <div class=\"btn-group\">
                                        <a class=\"btn btn-libelle btn-default btn-sm btn-edit\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">
                                            <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span> Détail
                                        </a>
                                        <a class=\"btn btn-libelle btn-default btn-sm btn-edit\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_modifier", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Modifier
                                        </a>
                                        <button type=\"button\" class=\"btn btn-libelle btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" >
                                            <input hidden=\"hidden\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\"/>
                                            <input hidden=\"hidden\" id=\"libelle\"/>
                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Supprimer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </div>
            <!-- end of accordion -->
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
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer");
        echo "\" method=\"post\">
                            <input name=\"projetIdSupr\" id=\"projetIdSupr\" hidden/>
                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5d2964b4499f1dafd07aa965e525e06a8e3fafaa0ed4a0680f86423de4a77870->leave($__internal_5d2964b4499f1dafd07aa965e525e06a8e3fafaa0ed4a0680f86423de4a77870_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eacfcdf6d21dacf55c38346f7b7c22458800025b65698fac79e9f7668e985e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacfcdf6d21dacf55c38346f7b7c22458800025b65698fac79e9f7668e985e4d->enter($__internal_eacfcdf6d21dacf55c38346f7b7c22458800025b65698fac79e9f7668e985e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 99
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



        \$('.btn-delete').on('click',function(){
            \$(\"#projetIdSupr\").val(\$(this).children()[0].value);
            console.log(\$(\"#projetIdSupr\").val());
            \$('#suprProjetModal').modal('toggle');
        });
    </script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

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

";
        
        $__internal_eacfcdf6d21dacf55c38346f7b7c22458800025b65698fac79e9f7668e985e4d->leave($__internal_eacfcdf6d21dacf55c38346f7b7c22458800025b65698fac79e9f7668e985e4d_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Projet:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 136,  297 => 135,  293 => 134,  288 => 132,  252 => 99,  247 => 98,  241 => 97,  223 => 85,  202 => 66,  186 => 56,  179 => 52,  173 => 49,  168 => 46,  159 => 44,  155 => 43,  151 => 41,  142 => 39,  138 => 38,  133 => 36,  126 => 34,  119 => 32,  111 => 31,  107 => 29,  103 => 28,  96 => 24,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Liste {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/zone.css')}}\">
{% endblock %}
{% block content %}
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h1>Projets</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li class=\"active\"> Projet </li>
            </ol>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"row\">
                <a href=\"{{ path('projet_ajouter') }}\"> <button id=\"btnAjouter\" class=\"btn btn-primary btn-lg pull-left\">Nouveau projet</button> </a>
            </div>
            <!-- start accordion -->
            <div class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                {% for projet in projets %}

                    <div class=\"panel\">
                        <a class=\"panel-heading\" role=\"tab\" id=\"heading{{ projet.id }}\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ projet.id }}\" aria-expanded=\"true\" aria-controls=\"collapse{{ projet.id }}\">
                            <h4 class=\"panel-title\">{{ projet.nomProjet }} <span class=\"pull-right\">{{ projet.dateProjet|date(\"d/m/Y\") }}</span></h4>
                        </a>
                        <div id=\"collapse{{ projet.id }}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading{{ projet.id }}\" aria-expanded=\"true\" style=\"\">
                            <div class=\"panel-body\">
                                <p> Objectif : {{ projet.objectifProjet }}</p>
                                <p> Régions :
                                    {% for region in projet.regions %}
                                        <code>{{ region.regionLibelle }}</code>
                                    {% endfor %}
                                </p>
                                <p> Entités :
                                    {% for entite in projet.entites %}
                                        <code>{{ entite.codeEntite }}</code>
                                    {% endfor %}
                                </p>
                                <div class=\"pull-right\">
                                    <div class=\"btn-group\">
                                        <a class=\"btn btn-libelle btn-default btn-sm btn-edit\" href=\"{{ path('projet_index', {'id': projet.id}) }}\">
                                            <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span> Détail
                                        </a>
                                        <a class=\"btn btn-libelle btn-default btn-sm btn-edit\" href=\"{{ path('projet_modifier', {'id': projet.id}) }}\">
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Modifier
                                        </a>
                                        <button type=\"button\" class=\"btn btn-libelle btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" >
                                            <input hidden=\"hidden\" value=\"{{ projet.id }}\"/>
                                            <input hidden=\"hidden\" id=\"libelle\"/>
                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Supprimer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <!-- end of accordion -->
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
                        <form action=\"{{ path('projet_supprimer') }}\" method=\"post\">
                            <input name=\"projetIdSupr\" id=\"projetIdSupr\" hidden/>
                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                        </form>
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



        \$('.btn-delete').on('click',function(){
            \$(\"#projetIdSupr\").val(\$(this).children()[0].value);
            console.log(\$(\"#projetIdSupr\").val());
            \$('#suprProjetModal').modal('toggle');
        });
    </script>
    <script src=\"{{ asset('js/jquery.validate.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>

{% endblock %}", "ProjetBundle:Projet:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Projet/liste.html.twig");
    }
}
