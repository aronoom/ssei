<?php

/* IndicateurBundle:Activite:liste.html.twig */
class __TwigTemplate_c885507bda6438b03a35ad7489a0d35ba163abf7c2b1ef3d1bb21f9a6ca8e4b4 extends Twig_Template
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
        $__internal_979c55241c388bff5741babf3ffc06b4fb771a277d36a65bb885846fb3e98e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979c55241c388bff5741babf3ffc06b4fb771a277d36a65bb885846fb3e98e92->enter($__internal_979c55241c388bff5741babf3ffc06b4fb771a277d36a65bb885846fb3e98e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Activite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_979c55241c388bff5741babf3ffc06b4fb771a277d36a65bb885846fb3e98e92->leave($__internal_979c55241c388bff5741babf3ffc06b4fb771a277d36a65bb885846fb3e98e92_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87242834bc967e3d57b81f747f662d8c77cd0d46e609fd33567690ec162ba9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87242834bc967e3d57b81f747f662d8c77cd0d46e609fd33567690ec162ba9b5->enter($__internal_87242834bc967e3d57b81f747f662d8c77cd0d46e609fd33567690ec162ba9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_87242834bc967e3d57b81f747f662d8c77cd0d46e609fd33567690ec162ba9b5->leave($__internal_87242834bc967e3d57b81f747f662d8c77cd0d46e609fd33567690ec162ba9b5_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de63fa075e532fc90dc431b56837e2ad30b7f7ac545022f89834117edf1abae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de63fa075e532fc90dc431b56837e2ad30b7f7ac545022f89834117edf1abae1->enter($__internal_de63fa075e532fc90dc431b56837e2ad30b7f7ac545022f89834117edf1abae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_de63fa075e532fc90dc431b56837e2ad30b7f7ac545022f89834117edf1abae1->leave($__internal_de63fa075e532fc90dc431b56837e2ad30b7f7ac545022f89834117edf1abae1_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_c1de9e5a02d294642f8e0524012602f20c883a1523498e2e7994b142939aae09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1de9e5a02d294642f8e0524012602f20c883a1523498e2e7994b142939aae09->enter($__internal_c1de9e5a02d294642f8e0524012602f20c883a1523498e2e7994b142939aae09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c1de9e5a02d294642f8e0524012602f20c883a1523498e2e7994b142939aae09->leave($__internal_c1de9e5a02d294642f8e0524012602f20c883a1523498e2e7994b142939aae09_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_150a3a53a8437efe1fdfd31da650b04683d72fe658fa48c3e078a8f3f93e6726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150a3a53a8437efe1fdfd31da650b04683d72fe658fa48c3e078a8f3f93e6726->enter($__internal_150a3a53a8437efe1fdfd31da650b04683d72fe658fa48c3e078a8f3f93e6726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_150a3a53a8437efe1fdfd31da650b04683d72fe658fa48c3e078a8f3f93e6726->leave($__internal_150a3a53a8437efe1fdfd31da650b04683d72fe658fa48c3e078a8f3f93e6726_prof);

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
