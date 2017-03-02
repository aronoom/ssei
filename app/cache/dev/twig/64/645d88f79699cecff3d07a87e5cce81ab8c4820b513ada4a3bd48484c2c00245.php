<?php

/* IndicateurBundle:Subdivision:liste.html.twig */
class __TwigTemplate_375e472f8dd37b7a6ca22bd2bf05a4d99220230b018f5f03bd92e575df8107e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndicateurBundle::layout.html.twig", "IndicateurBundle:Subdivision:liste.html.twig", 1);
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
        $__internal_c733d2508adba90c651dc124ff812480f2da4b4e09801873c8b5f29dac01f3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c733d2508adba90c651dc124ff812480f2da4b4e09801873c8b5f29dac01f3f2->enter($__internal_c733d2508adba90c651dc124ff812480f2da4b4e09801873c8b5f29dac01f3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Subdivision:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c733d2508adba90c651dc124ff812480f2da4b4e09801873c8b5f29dac01f3f2->leave($__internal_c733d2508adba90c651dc124ff812480f2da4b4e09801873c8b5f29dac01f3f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_daa1cd5d2a06a2d059db8bd87c3aa127cd688ec4e8f2032980a343b91f7cf46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa1cd5d2a06a2d059db8bd87c3aa127cd688ec4e8f2032980a343b91f7cf46f->enter($__internal_daa1cd5d2a06a2d059db8bd87c3aa127cd688ec4e8f2032980a343b91f7cf46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_daa1cd5d2a06a2d059db8bd87c3aa127cd688ec4e8f2032980a343b91f7cf46f->leave($__internal_daa1cd5d2a06a2d059db8bd87c3aa127cd688ec4e8f2032980a343b91f7cf46f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6591f030ccb1cda68f0531a03cb49d176e916787d8200b982398be82b6e2f51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6591f030ccb1cda68f0531a03cb49d176e916787d8200b982398be82b6e2f51c->enter($__internal_6591f030ccb1cda68f0531a03cb49d176e916787d8200b982398be82b6e2f51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6591f030ccb1cda68f0531a03cb49d176e916787d8200b982398be82b6e2f51c->leave($__internal_6591f030ccb1cda68f0531a03cb49d176e916787d8200b982398be82b6e2f51c_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_06bee1879b585386f54db105074925206aa901f67444517717e7e1ea346fa9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bee1879b585386f54db105074925206aa901f67444517717e7e1ea346fa9cc->enter($__internal_06bee1879b585386f54db105074925206aa901f67444517717e7e1ea346fa9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <li class=\"active\">Subdivisions</li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <button class=\"btn btn-primary pull-left\" id=\"ajouterIndicateur\">Ajouter une subdivision</button>
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
        
        $__internal_06bee1879b585386f54db105074925206aa901f67444517717e7e1ea346fa9cc->leave($__internal_06bee1879b585386f54db105074925206aa901f67444517717e7e1ea346fa9cc_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b7ffc893d80b1eb64b8868e52c7d9585e20760a439dab25785c328708b6ac1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7ffc893d80b1eb64b8868e52c7d9585e20760a439dab25785c328708b6ac1c->enter($__internal_1b7ffc893d80b1eb64b8868e52c7d9585e20760a439dab25785c328708b6ac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/subdivision.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1b7ffc893d80b1eb64b8868e52c7d9585e20760a439dab25785c328708b6ac1c->leave($__internal_1b7ffc893d80b1eb64b8868e52c7d9585e20760a439dab25785c328708b6ac1c_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:Subdivision:liste.html.twig";
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
                <li class=\"active\">Subdivisions</li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <button class=\"btn btn-primary pull-left\" id=\"ajouterIndicateur\">Ajouter une subdivision</button>
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
    <script src=\"{{ asset('js/subdivision.js') }}\"></script>
    <script src=\"{{ asset(\"vendors/validator/validator.js\") }}\"></script>
{% endblock %}", "IndicateurBundle:Subdivision:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/Subdivision/liste.html.twig");
    }
}
