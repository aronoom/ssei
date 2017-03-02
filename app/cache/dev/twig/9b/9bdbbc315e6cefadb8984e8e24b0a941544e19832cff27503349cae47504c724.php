<?php

/* ::base.html.twig */
class __TwigTemplate_08739bb40ecc11e84d4c2bc0aa9d005b0f8b5c2ad05bd3b5a688a62eb5a8130e extends Twig_Template
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
        $__internal_3e47cef6be83cd40c3eafe18859fc7abe176392b7ef7406798d21d2091c9881e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e47cef6be83cd40c3eafe18859fc7abe176392b7ef7406798d21d2091c9881e->enter($__internal_3e47cef6be83cd40c3eafe18859fc7abe176392b7ef7406798d21d2091c9881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_liste");
        echo "\"> Activités</a></li>
                                            <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mc_liste");
        echo "\"> Modes de calcul </a></li>
                                            <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nature_liste");
        echo "\"> Natures </a></li>
                                            <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("periodicite_liste");
        echo "\"> Périodicités </a></li>
                                            <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_secteur_liste");
        echo "\"> Sous secteurs </a></li>
                                            <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdivision_liste");
        echo "\"> Subdivisions </a></li>
                                            <li><a href=\"#\"> Unités </a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_homepage");
        echo "\"><i class=\"fa fa-location-arrow\"></i> Locations</a>
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
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "
                                    <span class=\" fa fa-angle-down\"></span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                    <li><a href=\"#\"> Profile</a></li><!--{!!path('fos_user_profile_show') !!}-->
                                    <li><a href=\"";
        // line 112
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
        // line 126
        echo twig_include($this->env, $context, "AretusaFlashBundle::flash-messages.html.twig");
        echo "
                    ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 132
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
        // line 152
        $this->displayBlock('javascripts', $context, $blocks);
        // line 168
        echo "    <footer>
        <div class=\"pull-right\">

        </div>
        <div class=\"clearfix\"></div>
    </footer>
    </body>
</html>
";
        
        $__internal_3e47cef6be83cd40c3eafe18859fc7abe176392b7ef7406798d21d2091c9881e->leave($__internal_3e47cef6be83cd40c3eafe18859fc7abe176392b7ef7406798d21d2091c9881e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb6d88b264d317fd914f61628693e4913113ba553ae8af64af3a8f6460ec3bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6d88b264d317fd914f61628693e4913113ba553ae8af64af3a8f6460ec3bce->enter($__internal_cb6d88b264d317fd914f61628693e4913113ba553ae8af64af3a8f6460ec3bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cb6d88b264d317fd914f61628693e4913113ba553ae8af64af3a8f6460ec3bce->leave($__internal_cb6d88b264d317fd914f61628693e4913113ba553ae8af64af3a8f6460ec3bce_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d989521929b43e3a0cf48b9e3c4866c3cefb9a334764d1825855238493f3310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d989521929b43e3a0cf48b9e3c4866c3cefb9a334764d1825855238493f3310->enter($__internal_5d989521929b43e3a0cf48b9e3c4866c3cefb9a334764d1825855238493f3310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5d989521929b43e3a0cf48b9e3c4866c3cefb9a334764d1825855238493f3310->leave($__internal_5d989521929b43e3a0cf48b9e3c4866c3cefb9a334764d1825855238493f3310_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_56921f11445d93e83389c8f40a490af328fc29860cc10f69624101d0dd174c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56921f11445d93e83389c8f40a490af328fc29860cc10f69624101d0dd174c61->enter($__internal_56921f11445d93e83389c8f40a490af328fc29860cc10f69624101d0dd174c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "
                        <br />

                    ";
        
        $__internal_56921f11445d93e83389c8f40a490af328fc29860cc10f69624101d0dd174c61->leave($__internal_56921f11445d93e83389c8f40a490af328fc29860cc10f69624101d0dd174c61_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fbc3259b5f511562c8223043bb5d393d655c98a9150809f73295cb674f042da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbc3259b5f511562c8223043bb5d393d655c98a9150809f73295cb674f042da->enter($__internal_9fbc3259b5f511562c8223043bb5d393d655c98a9150809f73295cb674f042da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aretusaflash/js/flash-message.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$('#flash-messages').flashNotification('init');
        </script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nprogress.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script>\$(document).ajaxStop(\$.unblockUI);</script>
    ";
        
        $__internal_9fbc3259b5f511562c8223043bb5d393d655c98a9150809f73295cb674f042da->leave($__internal_9fbc3259b5f511562c8223043bb5d393d655c98a9150809f73295cb674f042da_prof);

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
        return array (  370 => 165,  366 => 164,  362 => 163,  358 => 162,  354 => 161,  350 => 160,  343 => 156,  339 => 155,  335 => 154,  330 => 153,  324 => 152,  314 => 128,  308 => 127,  299 => 17,  295 => 16,  291 => 15,  287 => 14,  283 => 13,  278 => 12,  272 => 11,  260 => 9,  245 => 168,  243 => 152,  221 => 132,  219 => 127,  215 => 126,  198 => 112,  188 => 107,  167 => 89,  160 => 85,  156 => 84,  152 => 83,  148 => 82,  144 => 81,  140 => 80,  136 => 79,  128 => 74,  124 => 73,  120 => 72,  103 => 58,  98 => 55,  95 => 54,  89 => 52,  81 => 50,  78 => 49,  76 => 48,  43 => 19,  41 => 11,  36 => 9,  26 => 1,);
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
                                            <li><a href=\"{{ path('activite_liste') }}\"> Activités</a></li>
                                            <li><a href=\"{{ path('mc_liste') }}\"> Modes de calcul </a></li>
                                            <li><a href=\"{{ path('nature_liste') }}\"> Natures </a></li>
                                            <li><a href=\"{{ path('periodicite_liste') }}\"> Périodicités </a></li>
                                            <li><a href=\"{{ path('sous_secteur_liste') }}\"> Sous secteurs </a></li>
                                            <li><a href=\"{{ path('subdivision_liste') }}\"> Subdivisions </a></li>
                                            <li><a href=\"#\"> Unités </a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{ path('zone_homepage') }}\"><i class=\"fa fa-location-arrow\"></i> Locations</a>
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
