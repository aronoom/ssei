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
        $__internal_08a0238f090dbf9c734a8d91eb9c3149b434ae62341fbd8c16df397b297eefff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a0238f090dbf9c734a8d91eb9c3149b434ae62341fbd8c16df397b297eefff->enter($__internal_08a0238f090dbf9c734a8d91eb9c3149b434ae62341fbd8c16df397b297eefff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
            .lien:hover{
                text-decoration: underline;
            }
        </style>
    </head>
    <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
        <div class=\"main_container\">
            <div class=\"col-md-3 left_col menu_fixed\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
                        <a class=\"site_title\"><i class=\"fa fa-suitcase\"></i> <span>Projet MPAE</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                    <!-- menu profile quick info -->
                <div class=\"profile\">
                    <div class=\"profile_pic\">
                        ";
        // line 51
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "imageName", array(), "any", true, true)) {
            // line 52
            echo "                            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imageName", array()) == "")) {
                // line 53
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
                echo "\" class=\"img-circle profile_img\">
                            ";
            } else {
                // line 55
                echo "                                <img src=\"\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
                echo "\" class=\"img-circle profile_img\">
                            ";
            }
            // line 57
            echo "                        ";
        }
        // line 58
        echo "                    </div>
                    <div class=\"profile_info\">
                        <span>Bienvenu </span>
                        <h2>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo " </h2>
                        <br>

                    </div>
                </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                            <div class=\"menu_section\">
                                <ul class=\"nav side-menu\">
                                    ";
        // line 74
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "isGranted", array(0 => "ROLE_ADMIN"), "method")) {
            // line 75
            echo "                                        <h3>Administration</h3>
                                        <br>
                                        <li><a ><i class=\"fa fa-user\"></i>Utilisateurs<span class=\"fa fa-chevron-down\"></span> </a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_homepage");
            echo "\"> Utilisateurs</a></li>
                                            <li><a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_user_liste");
            echo "\"> Groupes</a></li>
                                            <li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entite_liste");
            echo "\"> Entités</a></li>
                                        </ul>
                                    </li>
                                    <li><a ><i class=\"fa fa-bolt\"></i> Indicateurs <span class=\"fa fa-chevron-down\"></span> </a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indicateur_liste");
            echo "\"> Liste des indicateurs</a></li>
                                            <li><a href=\"";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_indicateur_liste");
            echo "\"> Types</a></li>
                                            <li><a href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_liste");
            echo "\"> Activités</a></li>
                                            <li><a href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modeCalcul_liste");
            echo "\"> Modes de calcul </a></li>
                                            <li><a href=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nature_liste");
            echo "\"> Natures </a></li>
                                            <li><a href=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("periodicite_liste");
            echo "\"> Périodicités </a></li>
                                            <li><a href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sous_secteur_liste");
            echo "\"> Sous secteurs </a></li>
                                            <li><a href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdivision_liste");
            echo "\"> Subdivisions </a></li>
                                            <li><a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unite_indicateur_liste");
            echo "\"> Unités </a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_region");
            echo "\"><i class=\"fa fa-location-arrow\"></i> Zone d'interventions</a>
                                    </li>

                                    ";
        }
        // line 101
        echo "                                </ul>
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
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "
                                    <span class=\" fa fa-angle-down\"></span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                    <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"> Profile</a></li>
                                    <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Déconnexion</a></li>
                                </ul>
                            </li>
                            <li role=\"presentation\" class=\"dropdown\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    </a>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class=\"right_col\" role=\"main\">
                <div class=\"\" id=\"content\">
                    ";
        // line 138
        echo twig_include($this->env, $context, "AretusaFlashBundle::flash-messages.html.twig");
        echo "
                    ";
        // line 139
        $this->displayBlock('content', $context, $blocks);
        // line 144
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
        // line 164
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "    <footer>
        <div class=\"pull-right\">

        </div>
        <div class=\"clearfix\"></div>
    </footer>
    </body>
</html>
";
        
        $__internal_08a0238f090dbf9c734a8d91eb9c3149b434ae62341fbd8c16df397b297eefff->leave($__internal_08a0238f090dbf9c734a8d91eb9c3149b434ae62341fbd8c16df397b297eefff_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_17b7269b2e6f28bb1ade3b1ae837192c88c6ee90734d11defbc322d76238505b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b7269b2e6f28bb1ade3b1ae837192c88c6ee90734d11defbc322d76238505b->enter($__internal_17b7269b2e6f28bb1ade3b1ae837192c88c6ee90734d11defbc322d76238505b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_17b7269b2e6f28bb1ade3b1ae837192c88c6ee90734d11defbc322d76238505b->leave($__internal_17b7269b2e6f28bb1ade3b1ae837192c88c6ee90734d11defbc322d76238505b_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_361461e20395a59ea29faab097ad94b51cb9a50fb7a889a45679899edb6d86f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361461e20395a59ea29faab097ad94b51cb9a50fb7a889a45679899edb6d86f7->enter($__internal_361461e20395a59ea29faab097ad94b51cb9a50fb7a889a45679899edb6d86f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_361461e20395a59ea29faab097ad94b51cb9a50fb7a889a45679899edb6d86f7->leave($__internal_361461e20395a59ea29faab097ad94b51cb9a50fb7a889a45679899edb6d86f7_prof);

    }

    // line 139
    public function block_content($context, array $blocks = array())
    {
        $__internal_471dc719987af2b330739fc775c8a089c94a794b5c73d5c1a807d02eb2bd4007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471dc719987af2b330739fc775c8a089c94a794b5c73d5c1a807d02eb2bd4007->enter($__internal_471dc719987af2b330739fc775c8a089c94a794b5c73d5c1a807d02eb2bd4007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 140
        echo "
                        <br />

                    ";
        
        $__internal_471dc719987af2b330739fc775c8a089c94a794b5c73d5c1a807d02eb2bd4007->leave($__internal_471dc719987af2b330739fc775c8a089c94a794b5c73d5c1a807d02eb2bd4007_prof);

    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df31e61b3cf2b5dfe44878c12791e51b86d5dff177324a53f191bcb3a6121698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df31e61b3cf2b5dfe44878c12791e51b86d5dff177324a53f191bcb3a6121698->enter($__internal_df31e61b3cf2b5dfe44878c12791e51b86d5dff177324a53f191bcb3a6121698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 165
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjs/js/router.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aretusaflash/js/flash-message.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$('#flash-messages').flashNotification('init');
        </script>
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nprogress.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script>\$(document).ajaxStop(\$.unblockUI);</script>
    ";
        
        $__internal_df31e61b3cf2b5dfe44878c12791e51b86d5dff177324a53f191bcb3a6121698->leave($__internal_df31e61b3cf2b5dfe44878c12791e51b86d5dff177324a53f191bcb3a6121698_prof);

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
        return array (  397 => 178,  393 => 177,  389 => 176,  385 => 175,  381 => 174,  377 => 173,  370 => 169,  366 => 168,  362 => 167,  356 => 165,  350 => 164,  340 => 140,  334 => 139,  325 => 17,  321 => 16,  317 => 15,  313 => 14,  309 => 13,  304 => 12,  298 => 11,  286 => 9,  271 => 181,  269 => 164,  247 => 144,  245 => 139,  241 => 138,  223 => 123,  219 => 122,  210 => 118,  191 => 101,  184 => 97,  178 => 94,  174 => 93,  170 => 92,  166 => 91,  162 => 90,  158 => 89,  154 => 88,  150 => 87,  146 => 86,  138 => 81,  134 => 80,  130 => 79,  124 => 75,  122 => 74,  106 => 61,  101 => 58,  98 => 57,  92 => 55,  84 => 53,  81 => 52,  79 => 51,  43 => 19,  41 => 11,  36 => 9,  26 => 1,);
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
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
            .lien:hover{
                text-decoration: underline;
            }
        </style>
    </head>
    <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
        <div class=\"main_container\">
            <div class=\"col-md-3 left_col menu_fixed\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
                        <a class=\"site_title\"><i class=\"fa fa-suitcase\"></i> <span>Projet MPAE</span></a>
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
                        <h2>{{ app.user }} </h2>
                        <br>

                    </div>
                </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                            <div class=\"menu_section\">
                                <ul class=\"nav side-menu\">
                                    {% if app.security.isGranted('ROLE_ADMIN') %}
                                        <h3>Administration</h3>
                                        <br>
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
                                    </li>

                                    {% endif %}
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
                                    <li><a href=\"{{  path('fos_user_profile_show') }}\"> Profile</a></li>
                                    <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Déconnexion</a></li>
                                </ul>
                            </li>
                            <li role=\"presentation\" class=\"dropdown\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    </a>

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
\t\t<script src=\"{{asset('js/jquery.min.js')}}\"></script>

        <script src=\"{{ asset('bundles/fosjs/js/router.js') }}\"></script>
\t\t<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
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