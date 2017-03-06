<?php

/* ::base.html.twig */
class __TwigTemplate_9959661da2c02d63468cf324a751963d2c4466e96da1bf0bc01c0f457a0f2b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3940a9359fba10df4dd88ffd883a3f9541b4bd66b03eb199baed136d99cf6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3940a9359fba10df4dd88ffd883a3f9541b4bd66b03eb199baed136d99cf6c0->enter($__internal_a3940a9359fba10df4dd88ffd883a3f9541b4bd66b03eb199baed136d99cf6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
        <style>
            .dataTables_wrapper .dataTables_processing {
                position: absolute;
                top: 30%;
                left: 50%;
                width: 30%;
                height: 40px;
                margin-left: -20%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                background:black;
            }
        </style>
    </head>
    <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
        <div class=\"main_container\">
            <div class=\"col-md-3 left_col menu_fixed\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
                        <a href=\"#\" class=\"site_title\"><i class=\"fa fa-dashboard\"></i> <span>Projet MPAE</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                    <!-- menu profile quick info -->
                <div class=\"profile\">
                    <div class=\"profile_pic\">
                        ";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "imageName", array(), "any", true, true)) {
            // line 49
            echo "                            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imageName", array()) == "")) {
                // line 50
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
                echo "\" class=\"img-circle profile_img\">
                            ";
            } else {
                // line 52
                echo "                                <img src=\"\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
                echo "\" class=\"img-circle profile_img\">
                            ";
            }
            // line 54
            echo "                        ";
        }
        // line 55
        echo "                    </div>
                    <div class=\"profile_info\">
                        <span>Bienvenu </span>
                        <h2>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</h2>
                    </div>
                </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                            <div class=\"menu_section\">
                                <h3>Administration</h3>
                                <ul class=\"nav side-menu\">
                                    <li><a ><i class=\"fa fa-user\"></i>Utilisateurs<span class=\"fa fa-chevron-down\"></span> </a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_homepage");
        echo "\"> Utilisateurs</a></li>
                                            <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_user_liste");
        echo "\"> Groupes</a></li>
                                            <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entite_liste");
        echo "\"> Entités</a></li>
                                        </ul>
                                    </li>
                                    <li><a ><i class=\"fa fa-bolt\"></i> Indicateurs <span class=\"fa fa-chevron-down\"></span> </a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indicateur_liste");
        echo "\"> Liste des indicateurs</a></li>
                                            <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_indicateur_liste");
        echo "\"> Types</a></li>
                                            <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_liste");
        echo "\"> Activités</a></li>
                                            <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeCalcul_liste");
        echo "\"> Modes de calcul </a></li>
                                            <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nature_liste");
        echo "\"> Natures </a></li>
                                            <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("periodicite_liste");
        echo "\"> Périodicités </a></li>
                                            <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_secteur_liste");
        echo "\"> Sous secteurs </a></li>
                                            <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdivision_liste");
        echo "\"> Subdivisions </a></li>
                                            <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unite_indicateur_liste");
        echo "\"> Unités </a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_region");
        echo "\"><i class=\"fa fa-location-arrow\"></i> Zone d'interventions</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class=\"top_nav\">
                <div class=\"nav_menu\">
                    <nav>
                        <div class=\"nav toggle\">
                            <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                        </div>
                        <ul class=\"nav navbar-nav navbar-right\" >
                            <li class=\"\">
                                <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "
                                    <span class=\" fa fa-angle-down\"></span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                    <li><a href=\"#\"> Profile</a></li><!--{!!path('fos_user_profile_show') !!}-->
                                    <li><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Déconnexion</a></li>
                                </ul>
                            </li>
                            <li role=\"presentation\" class=\"dropdown\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fa fa-envelope-o\"></i>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class=\"right_col\" role=\"main\">
                <div class=\"\" id=\"content\">
                    ";
        // line 127
        echo twig_include($this->env, $context, "AretusaFlashBundle::flash-messages.html.twig");
        echo "
                    ";
        // line 128
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "

                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div style=\"z-index:2016;\" class=\"modal fade \" id=\"globModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Modification</h4>
                </div>
                <div class=\"modal-body\">
                </div>
            </div>
        </div>
    </div>

    ";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "    <footer>
        <div class=\"pull-right\">

        </div>
        <div class=\"clearfix\"></div>
    </footer>
    </body>
</html>
";
        
        $__internal_a3940a9359fba10df4dd88ffd883a3f9541b4bd66b03eb199baed136d99cf6c0->leave($__internal_a3940a9359fba10df4dd88ffd883a3f9541b4bd66b03eb199baed136d99cf6c0_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_73786e02faf67b69f7e7a4292d2db3f2600fb2bd9e76d3ec2620ec2ea47e5080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73786e02faf67b69f7e7a4292d2db3f2600fb2bd9e76d3ec2620ec2ea47e5080->enter($__internal_73786e02faf67b69f7e7a4292d2db3f2600fb2bd9e76d3ec2620ec2ea47e5080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_73786e02faf67b69f7e7a4292d2db3f2600fb2bd9e76d3ec2620ec2ea47e5080->leave($__internal_73786e02faf67b69f7e7a4292d2db3f2600fb2bd9e76d3ec2620ec2ea47e5080_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37213924f5e7936ab0da81f858be395108746b4b7177991e7d28c715c8d5c80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37213924f5e7936ab0da81f858be395108746b4b7177991e7d28c715c8d5c80f->enter($__internal_37213924f5e7936ab0da81f858be395108746b4b7177991e7d28c715c8d5c80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aretusaflash/css/flash-message.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
                <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/animate.css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_37213924f5e7936ab0da81f858be395108746b4b7177991e7d28c715c8d5c80f->leave($__internal_37213924f5e7936ab0da81f858be395108746b4b7177991e7d28c715c8d5c80f_prof);

    }

    // line 128
    public function block_content($context, array $blocks = array())
    {
        $__internal_8394a5b57835d71511c35224755d4eba4846b0e7279b1e76ee8c41939b939732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8394a5b57835d71511c35224755d4eba4846b0e7279b1e76ee8c41939b939732->enter($__internal_8394a5b57835d71511c35224755d4eba4846b0e7279b1e76ee8c41939b939732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 129
        echo "
                        <br />

                    ";
        
        $__internal_8394a5b57835d71511c35224755d4eba4846b0e7279b1e76ee8c41939b939732->leave($__internal_8394a5b57835d71511c35224755d4eba4846b0e7279b1e76ee8c41939b939732_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85e5af4d75953c2a6d9b83121791423300208836154324554a770a81d5281452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e5af4d75953c2a6d9b83121791423300208836154324554a770a81d5281452->enter($__internal_85e5af4d75953c2a6d9b83121791423300208836154324554a770a81d5281452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aretusaflash/js/flash-message.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$('#flash-messages').flashNotification('init');
        </script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nprogress.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script>\$(document).ajaxStop(\$.unblockUI);</script>
    ";
        
        $__internal_85e5af4d75953c2a6d9b83121791423300208836154324554a770a81d5281452->leave($__internal_85e5af4d75953c2a6d9b83121791423300208836154324554a770a81d5281452_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 166,  373 => 165,  369 => 164,  365 => 163,  361 => 162,  357 => 161,  350 => 157,  346 => 156,  342 => 155,  337 => 154,  331 => 153,  321 => 129,  315 => 128,  306 => 17,  302 => 16,  298 => 15,  294 => 14,  290 => 13,  285 => 12,  279 => 11,  267 => 9,  252 => 169,  250 => 153,  228 => 133,  226 => 128,  222 => 127,  205 => 113,  195 => 108,  174 => 90,  168 => 87,  164 => 86,  160 => 85,  156 => 84,  152 => 83,  148 => 82,  144 => 81,  140 => 80,  136 => 79,  128 => 74,  124 => 73,  120 => 72,  103 => 58,  98 => 55,  95 => 54,  89 => 52,  81 => 50,  78 => 49,  76 => 48,  43 => 19,  41 => 11,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %}Welcome!{% endblock %}</title>

        {% block stylesheets %}
                <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
                <link href=\"{{asset('fonts/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
                <link href=\"{{asset('css/nprogress.css')}}\" rel=\"stylesheet\">
                <link href=\"{{asset('css/custom.min.css')}}\" rel=\"stylesheet\">
                <link href=\"{{ asset('bundles/aretusaflash/css/flash-message.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
                <link href=\"{{ asset('vendors/animate.css/animate.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.ico') }}\" />
        <style>
            .dataTables_wrapper .dataTables_processing {
                position: absolute;
                top: 30%;
                left: 50%;
                width: 30%;
                height: 40px;
                margin-left: -20%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                background:black;
            }
        </style>
    </head>
    <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
        <div class=\"main_container\">
            <div class=\"col-md-3 left_col menu_fixed\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
                        <a href=\"#\" class=\"site_title\"><i class=\"fa fa-dashboard\"></i> <span>Projet MPAE</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                    <!-- menu profile quick info -->
                <div class=\"profile\">
                    <div class=\"profile_pic\">
                        {% if app.user.imageName is defined %}
                            {% if app.user.imageName == \"\" %}
                                <img src=\"{{asset('images/user.png')}}\" alt=\"{{app.user}}\" class=\"img-circle profile_img\">
                            {% else %}
                                <img src=\"\" alt=\"{{app.user}}\" class=\"img-circle profile_img\">
                            {% endif %}
                        {% endif %}
                    </div>
                    <div class=\"profile_info\">
                        <span>Bienvenu </span>
                        <h2>{{ app.user }}</h2>
                    </div>
                </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                            <div class=\"menu_section\">
                                <h3>Administration</h3>
                                <ul class=\"nav side-menu\">
                                    <li><a ><i class=\"fa fa-user\"></i>Utilisateurs<span class=\"fa fa-chevron-down\"></span> </a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"{{ path('user_admin_homepage') }}\"> Utilisateurs</a></li>
                                            <li><a href=\"{{ path('groupe_user_liste') }}\"> Groupes</a></li>
                                            <li><a href=\"{{ path('entite_liste') }}\"> Entités</a></li>
                                        </ul>
                                    </li>
                                    <li><a ><i class=\"fa fa-bolt\"></i> Indicateurs <span class=\"fa fa-chevron-down\"></span> </a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"{{ path('indicateur_liste') }}\"> Liste des indicateurs</a></li>
                                            <li><a href=\"{{ path('type_indicateur_liste') }}\"> Types</a></li>
                                            <li><a href=\"{{ path('activite_liste') }}\"> Activités</a></li>
                                            <li><a href=\"{{ path('modeCalcul_liste') }}\"> Modes de calcul </a></li>
                                            <li><a href=\"{{ path('nature_liste') }}\"> Natures </a></li>
                                            <li><a href=\"{{ path('periodicite_liste') }}\"> Périodicités </a></li>
                                            <li><a href=\"{{ path('sous_secteur_liste') }}\"> Sous secteurs </a></li>
                                            <li><a href=\"{{ path('subdivision_liste') }}\"> Subdivisions </a></li>
                                            <li><a href=\"{{ path('unite_indicateur_liste') }}\"> Unités </a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{ path('zone_region') }}\"><i class=\"fa fa-location-arrow\"></i> Zone d'interventions</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class=\"top_nav\">
                <div class=\"nav_menu\">
                    <nav>
                        <div class=\"nav toggle\">
                            <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                        </div>
                        <ul class=\"nav navbar-nav navbar-right\" >
                            <li class=\"\">
                                <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <img src=\"{{ asset('images/user.png') }}\" alt=\"\">{{ app.user }}
                                    <span class=\" fa fa-angle-down\"></span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                    <li><a href=\"#\"> Profile</a></li><!--{!!path('fos_user_profile_show') !!}-->
                                    <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Déconnexion</a></li>
                                </ul>
                            </li>
                            <li role=\"presentation\" class=\"dropdown\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fa fa-envelope-o\"></i>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class=\"right_col\" role=\"main\">
                <div class=\"\" id=\"content\">
                    {{ include('AretusaFlashBundle::flash-messages.html.twig') }}
                    {% block content %}

                        <br />

                    {% endblock %}


                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div style=\"z-index:2016;\" class=\"modal fade \" id=\"globModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Modification</h4>
                </div>
                <div class=\"modal-body\">
                </div>
            </div>
        </div>
    </div>

    {% block javascripts %}
        <script src=\"{{asset('js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
        <script src=\"{{ asset('bundles/aretusaflash/js/flash-message.js') }}\" type=\"text/javascript\"></script>
        <script>
            \$('#flash-messages').flashNotification('init');
        </script>
        <script src=\"{{asset('js/nprogress.js')}}\"></script>
        <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <script src=\"{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.js')}}\"></script>
        <script src=\"{{asset('js/custom.min.js')}}\"></script>
        <script src=\"{{asset('js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('vendors/iCheck/icheck.min.js')}}\"></script>
        <script>\$(document).ajaxStop(\$.unblockUI);</script>
    {% endblock %}
    <footer>
        <div class=\"pull-right\">

        </div>
        <div class=\"clearfix\"></div>
    </footer>
    </body>
</html>
", "::base.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/views/base.html.twig");
    }
}
