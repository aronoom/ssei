<?php

/* IndicateurBundle:Activite:liste.html.twig */
class __TwigTemplate_e5df7e95a7bfe9d78121165416ecf08020e4550d10f6a19598e0a85023c03867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndicateurBundle::layout.html.twig", "IndicateurBundle:Activite:liste.html.twig", 1);
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
        $__internal_b788bf28eb2c2add50aecc37d252a33b94b844444e42bc0fd85a80f8e8fe9033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b788bf28eb2c2add50aecc37d252a33b94b844444e42bc0fd85a80f8e8fe9033->enter($__internal_b788bf28eb2c2add50aecc37d252a33b94b844444e42bc0fd85a80f8e8fe9033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Activite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b788bf28eb2c2add50aecc37d252a33b94b844444e42bc0fd85a80f8e8fe9033->leave($__internal_b788bf28eb2c2add50aecc37d252a33b94b844444e42bc0fd85a80f8e8fe9033_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc48e1b4dc62f16054e51588f1f1fcef7bb61e1d6000d7ad7852f501234da659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc48e1b4dc62f16054e51588f1f1fcef7bb61e1d6000d7ad7852f501234da659->enter($__internal_dc48e1b4dc62f16054e51588f1f1fcef7bb61e1d6000d7ad7852f501234da659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_dc48e1b4dc62f16054e51588f1f1fcef7bb61e1d6000d7ad7852f501234da659->leave($__internal_dc48e1b4dc62f16054e51588f1f1fcef7bb61e1d6000d7ad7852f501234da659_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d8df6f67157739ea5fa6e05262e32b30aeeab35f36a9e18c7be7ba4cf17a7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8df6f67157739ea5fa6e05262e32b30aeeab35f36a9e18c7be7ba4cf17a7a1->enter($__internal_5d8df6f67157739ea5fa6e05262e32b30aeeab35f36a9e18c7be7ba4cf17a7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_5d8df6f67157739ea5fa6e05262e32b30aeeab35f36a9e18c7be7ba4cf17a7a1->leave($__internal_5d8df6f67157739ea5fa6e05262e32b30aeeab35f36a9e18c7be7ba4cf17a7a1_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_482c3a198142c437d74c75b5997c5ac0e7597de3a16e9f7f6bb7f9297ea4daa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482c3a198142c437d74c75b5997c5ac0e7597de3a16e9f7f6bb7f9297ea4daa8->enter($__internal_482c3a198142c437d74c75b5997c5ac0e7597de3a16e9f7f6bb7f9297ea4daa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <li class=\"active\">Activités </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <button class=\"btn btn-primary pull-left\" id=\"ajouterIndicateur\">Ajouter une activité</button>
                <div class=\"x_title\">
                    <ul class=\"nav navbar-right panel_toolbox\">
                        <li class=\"pull-right\"><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"table-responsive\">
                        <table id=\"indicateurTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th style=\"width:11%;\">Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Libelle</th>
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
        
        $__internal_482c3a198142c437d74c75b5997c5ac0e7597de3a16e9f7f6bb7f9297ea4daa8->leave($__internal_482c3a198142c437d74c75b5997c5ac0e7597de3a16e9f7f6bb7f9297ea4daa8_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_feb2fa0586fecc02a04beffea299d4183edb191d478d15509d41747cf1ae3bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb2fa0586fecc02a04beffea299d4183edb191d478d15509d41747cf1ae3bd2->enter($__internal_feb2fa0586fecc02a04beffea299d4183edb191d478d15509d41747cf1ae3bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fnReloadAjax.js"), "html", null, true);
        echo "\"></script>
    <script>
        var scope = undefined;
    </script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/activite.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_feb2fa0586fecc02a04beffea299d4183edb191d478d15509d41747cf1ae3bd2->leave($__internal_feb2fa0586fecc02a04beffea299d4183edb191d478d15509d41747cf1ae3bd2_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:Activite:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 92,  184 => 91,  177 => 87,  173 => 86,  169 => 85,  165 => 84,  160 => 83,  154 => 82,  76 => 9,  70 => 8,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} {% endblock %}
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
                <li class=\"active\">Activités </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <button class=\"btn btn-primary pull-left\" id=\"ajouterIndicateur\">Ajouter une activité</button>
                <div class=\"x_title\">
                    <ul class=\"nav navbar-right panel_toolbox\">
                        <li class=\"pull-right\"><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div class=\"table-responsive\">
                        <table id=\"indicateurTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th style=\"width:11%;\">Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Libelle</th>
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
    <script src=\"{{asset('js/fnReloadAjax.js')}}\"></script>
    <script>
        var scope = undefined;
    </script>
    <script src=\"{{ asset('js/activite.js') }}\"></script>
    <script src=\"{{ asset(\"vendors/validator/validator.js\") }}\"></script>
{% endblock %}", "IndicateurBundle:Activite:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/Activite/liste.html.twig");
    }
}
