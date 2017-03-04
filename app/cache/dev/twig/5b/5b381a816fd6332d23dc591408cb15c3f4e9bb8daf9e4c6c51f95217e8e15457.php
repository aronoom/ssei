<?php

/* ZoneBundle:Default:index.html.twig */
class __TwigTemplate_3d46867bf6b41560760addee2d43ebc471f958c680a80f26f87610374c8b3dfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZoneBundle::layout.html.twig", "ZoneBundle:Default:index.html.twig", 1);
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
        $__internal_46e9731310f197e3431164fb2e2914b6d9b05d976dc64f58389049362eb1bd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e9731310f197e3431164fb2e2914b6d9b05d976dc64f58389049362eb1bd42->enter($__internal_46e9731310f197e3431164fb2e2914b6d9b05d976dc64f58389049362eb1bd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46e9731310f197e3431164fb2e2914b6d9b05d976dc64f58389049362eb1bd42->leave($__internal_46e9731310f197e3431164fb2e2914b6d9b05d976dc64f58389049362eb1bd42_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a78cb85cf27280d7f4701cbbb7fc6bf2d1866a58f4b967795e8ec578cefba7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78cb85cf27280d7f4701cbbb7fc6bf2d1866a58f4b967795e8ec578cefba7ee->enter($__internal_a78cb85cf27280d7f4701cbbb7fc6bf2d1866a58f4b967795e8ec578cefba7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_a78cb85cf27280d7f4701cbbb7fc6bf2d1866a58f4b967795e8ec578cefba7ee->leave($__internal_a78cb85cf27280d7f4701cbbb7fc6bf2d1866a58f4b967795e8ec578cefba7ee_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4554ccb06bf24fdd8b998a501977bb2badafd6c1b7aaa1ef067965436f56e81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4554ccb06bf24fdd8b998a501977bb2badafd6c1b7aaa1ef067965436f56e81c->enter($__internal_4554ccb06bf24fdd8b998a501977bb2badafd6c1b7aaa1ef067965436f56e81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4554ccb06bf24fdd8b998a501977bb2badafd6c1b7aaa1ef067965436f56e81c->leave($__internal_4554ccb06bf24fdd8b998a501977bb2badafd6c1b7aaa1ef067965436f56e81c_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_13656d87d12be249eb20581f9013b16ca277695e147ead3d2f083f5738d68857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13656d87d12be249eb20581f9013b16ca277695e147ead3d2f083f5738d68857->enter($__internal_13656d87d12be249eb20581f9013b16ca277695e147ead3d2f083f5738d68857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Regions</h3>
                    ";
        // line 32
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <ul id=\"liste_region\" class=\"liste\"></ul>

                    <div class=\"pull-right\">
                        <button id=\"ajouterRegion\" class=\"btn btn-primary btn-sm\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"false\"></span>
                        </button>
                        <div id=\"selectionRegionObligatoire\" class=\"selection-obligatoire\">
                            <button id=\"modifierRegion\" type=\"button\" class=\"btn btn-warning btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"false\"></span>
                            </button>
                            <button id=\"supprimerRegion\" type=\"button\" class=\"btn btn-danger btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"false\"></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Districts</h3>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <ul id=\"liste_district\" class=\"liste\"></ul>

                    <div class=\"pull-right\">
                        <button id=\"ajouterDistrict\" class=\"btn btn-primary btn-sm\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"false\"></span>
                        </button>
                        <div id=\"selectionDistrictObligatoire\" class=\"selection-obligatoire\">
                            <button id=\"modifierDistrict\" type=\"button\" class=\"btn btn-warning btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"false\"></span>
                            </button>
                            <button id=\"supprimerDistrict\" type=\"button\" class=\"btn btn-danger btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"false\"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Communes</h3>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <ul id=\"liste_commune\" class=\"liste\"></ul>

                    <div class=\"pull-right\">
                        <button id=\"ajouterCommune\" class=\"btn btn-primary btn-sm\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"false\"></span>
                        </button>
                        <div id=\"selectionCommuneObligatoire\" class=\"selection-obligatoire\">
                            <button id=\"modifierCommune\" type=\"button\" class=\"btn btn-warning btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"false\"></span>
                            </button>
                            <button id=\"supprimerCommune\" type=\"button\" class=\"btn btn-danger btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"false\"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_13656d87d12be249eb20581f9013b16ca277695e147ead3d2f083f5738d68857->leave($__internal_13656d87d12be249eb20581f9013b16ca277695e147ead3d2f083f5738d68857_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0faf0dee426be24afae41787982c0e519b9d0505400ab65d4754186bf9af1a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0faf0dee426be24afae41787982c0e519b9d0505400ab65d4754186bf9af1a80->enter($__internal_0faf0dee426be24afae41787982c0e519b9d0505400ab65d4754186bf9af1a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 111
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fnReloadAjax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/region.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/zone.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_0faf0dee426be24afae41787982c0e519b9d0505400ab65d4754186bf9af1a80->leave($__internal_0faf0dee426be24afae41787982c0e519b9d0505400ab65d4754186bf9af1a80_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 117,  209 => 115,  205 => 114,  201 => 113,  197 => 112,  192 => 111,  187 => 109,  181 => 108,  100 => 32,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} {% endblock %}
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
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Regions</h3>
                    {#<ul class=\"nav navbar-right panel_toolbox\">
                        <li class=\"pull-right\"><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                    </ul>#}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <ul id=\"liste_region\" class=\"liste\"></ul>

                    <div class=\"pull-right\">
                        <button id=\"ajouterRegion\" class=\"btn btn-primary btn-sm\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"false\"></span>
                        </button>
                        <div id=\"selectionRegionObligatoire\" class=\"selection-obligatoire\">
                            <button id=\"modifierRegion\" type=\"button\" class=\"btn btn-warning btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"false\"></span>
                            </button>
                            <button id=\"supprimerRegion\" type=\"button\" class=\"btn btn-danger btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"false\"></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Districts</h3>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <ul id=\"liste_district\" class=\"liste\"></ul>

                    <div class=\"pull-right\">
                        <button id=\"ajouterDistrict\" class=\"btn btn-primary btn-sm\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"false\"></span>
                        </button>
                        <div id=\"selectionDistrictObligatoire\" class=\"selection-obligatoire\">
                            <button id=\"modifierDistrict\" type=\"button\" class=\"btn btn-warning btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"false\"></span>
                            </button>
                            <button id=\"supprimerDistrict\" type=\"button\" class=\"btn btn-danger btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"false\"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Communes</h3>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <ul id=\"liste_commune\" class=\"liste\"></ul>

                    <div class=\"pull-right\">
                        <button id=\"ajouterCommune\" class=\"btn btn-primary btn-sm\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"false\"></span>
                        </button>
                        <div id=\"selectionCommuneObligatoire\" class=\"selection-obligatoire\">
                            <button id=\"modifierCommune\" type=\"button\" class=\"btn btn-warning btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"false\"></span>
                            </button>
                            <button id=\"supprimerCommune\" type=\"button\" class=\"btn btn-danger btn-sm\" aria-label=\"Left Align\">
                                <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"false\"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{parent()}}
    {#<script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>#}
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>
    <script src=\"{{asset('js/fnReloadAjax.js')}}\"></script>
    <script src=\"{{asset('js/region.js')}}\"></script>
    <script src=\"{{ asset(\"vendors/validator/validator.js\") }}\"></script>

    <script src=\"{{ asset(\"js/zone.js\") }}\"></script>

{% endblock %}", "ZoneBundle:Default:index.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Default/index.html.twig");
    }
}
