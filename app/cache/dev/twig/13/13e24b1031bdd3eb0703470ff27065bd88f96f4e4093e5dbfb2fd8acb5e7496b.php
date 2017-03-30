<?php

/* ProjetBundle::base.html.twig */
class __TwigTemplate_627d1478fba641ff5d1057e4d317cf11a612ab88d95853e4ae9d233fdd5e516d extends Twig_Template
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
        $__internal_8e05cdd7aab437f456d69499a951287972f303cba243457b37d291e162a89a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e05cdd7aab437f456d69499a951287972f303cba243457b37d291e162a89a8a->enter($__internal_8e05cdd7aab437f456d69499a951287972f303cba243457b37d291e162a89a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::base.html.twig"));

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
        // line 20
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
                        <a href=\"#\" class=\"site_title\"><i class=\"fa fa-dashboard\"></i> <span>MPAE</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                    <!-- menu profile quick info -->
                <div class=\"profile\">
                    <div class=\"profile_pic\">
                        ";
        // line 52
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "imageName", array(), "any", true, true)) {
            // line 53
            echo "                            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imageName", array()) == "")) {
                // line 54
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
                echo "\" class=\"img-circle profile_img\">
                            ";
            } else {
                // line 56
                echo "                                <img src=\"\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
                echo "\" class=\"img-circle profile_img\">
                            ";
            }
            // line 58
            echo "                        ";
        }
        // line 59
        echo "                    </div>
                    <div class=\"profile_info\">
                        <h2>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomUser", array()), "html", null, true);
        echo "</h2>

                    </div>
                </div>
                    <!-- /menu profile quick info -->
                    <h6>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fonctionUser", array()), "html", null, true);
        echo "/ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "serviceUser", array()), "html", null, true);
        echo "/ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "directionUser", array()), "html", null, true);
        echo "</h6>
                    <br />
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
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "
                                    <span class=\" fa fa-angle-down\"></span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                    <li><a href=\"#\"> Profile</a></li><!--{!!path('fos_user_profile_show') !!}-->
                                    <li><a href=\"";
        // line 86
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
        // line 101
        echo twig_include($this->env, $context, "AretusaFlashBundle::flash-messages.html.twig");
        echo "
                    ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 107
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
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "    <footer>
        <div class=\"pull-right\">

        </div>
        <div class=\"clearfix\"></div>
    </footer>
    </body>
</html>
";
        
        $__internal_8e05cdd7aab437f456d69499a951287972f303cba243457b37d291e162a89a8a->leave($__internal_8e05cdd7aab437f456d69499a951287972f303cba243457b37d291e162a89a8a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_72f1e8d57b4f2ed45332a26b1e61da4f6c005b0913217f33cc6b8d13f27a0e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f1e8d57b4f2ed45332a26b1e61da4f6c005b0913217f33cc6b8d13f27a0e8c->enter($__internal_72f1e8d57b4f2ed45332a26b1e61da4f6c005b0913217f33cc6b8d13f27a0e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_72f1e8d57b4f2ed45332a26b1e61da4f6c005b0913217f33cc6b8d13f27a0e8c->leave($__internal_72f1e8d57b4f2ed45332a26b1e61da4f6c005b0913217f33cc6b8d13f27a0e8c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b8e40ad1504b2c160ee74eadc7bc894bab4012066eeeeb6490b8658df246b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8e40ad1504b2c160ee74eadc7bc894bab4012066eeeeb6490b8658df246b1e->enter($__internal_7b8e40ad1504b2c160ee74eadc7bc894bab4012066eeeeb6490b8658df246b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/projet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aretusaflash/css/flash-message.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/animate.css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_7b8e40ad1504b2c160ee74eadc7bc894bab4012066eeeeb6490b8658df246b1e->leave($__internal_7b8e40ad1504b2c160ee74eadc7bc894bab4012066eeeeb6490b8658df246b1e_prof);

    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        $__internal_98efa6a82c3e0c97bd48bb4c65b481bb4aba3d20943463eee7368a0592d1b750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98efa6a82c3e0c97bd48bb4c65b481bb4aba3d20943463eee7368a0592d1b750->enter($__internal_98efa6a82c3e0c97bd48bb4c65b481bb4aba3d20943463eee7368a0592d1b750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 103
        echo "
                        <br />

                    ";
        
        $__internal_98efa6a82c3e0c97bd48bb4c65b481bb4aba3d20943463eee7368a0592d1b750->leave($__internal_98efa6a82c3e0c97bd48bb4c65b481bb4aba3d20943463eee7368a0592d1b750_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e01c12a9cf0d2d2afcc437bb518bc835a5178aa47307a9b4be5fb603dcdd6882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01c12a9cf0d2d2afcc437bb518bc835a5178aa47307a9b4be5fb603dcdd6882->enter($__internal_e01c12a9cf0d2d2afcc437bb518bc835a5178aa47307a9b4be5fb603dcdd6882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjs/js/router.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/aretusaflash/js/flash-message.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$('#flash-messages').flashNotification('init');
        </script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nprogress.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script>\$(document).ajaxStop(\$.unblockUI);</script>
    ";
        
        $__internal_e01c12a9cf0d2d2afcc437bb518bc835a5178aa47307a9b4be5fb603dcdd6882->leave($__internal_e01c12a9cf0d2d2afcc437bb518bc835a5178aa47307a9b4be5fb603dcdd6882_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 141,  321 => 140,  317 => 139,  313 => 138,  309 => 137,  305 => 136,  298 => 132,  294 => 131,  290 => 130,  284 => 128,  278 => 127,  268 => 103,  262 => 102,  253 => 18,  249 => 17,  245 => 16,  241 => 15,  237 => 14,  233 => 13,  228 => 12,  222 => 11,  210 => 9,  195 => 144,  193 => 127,  171 => 107,  169 => 102,  165 => 101,  147 => 86,  137 => 81,  115 => 66,  105 => 61,  101 => 59,  98 => 58,  92 => 56,  84 => 54,  81 => 53,  79 => 52,  43 => 20,  41 => 11,  36 => 9,  26 => 1,);
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
            <link href=\"{{asset('css/projet.css')}}\" rel=\"stylesheet\">
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
                        <a href=\"#\" class=\"site_title\"><i class=\"fa fa-dashboard\"></i> <span>MPAE</span></a>
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
                        <h2>{{ app.user }} {{ app.user.prenomUser }}</h2>

                    </div>
                </div>
                    <!-- /menu profile quick info -->
                    <h6>{{ app.user.fonctionUser }}/ {{ app.user.serviceUser }}/ {{ app.user.directionUser }}</h6>
                    <br />
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
", "ProjetBundle::base.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/base.html.twig");
    }
}
