<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_bfdff3be758c01468f5d565d09e7dcb8a04aa95ec75eddb94a12cc43a18e806d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58502cd47ef1241e08ee5e3c1228851e4ca9196283b6661629105912665d9644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58502cd47ef1241e08ee5e3c1228851e4ca9196283b6661629105912665d9644->enter($__internal_58502cd47ef1241e08ee5e3c1228851e4ca9196283b6661629105912665d9644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
    <div class=\"profile_img\">
        <div id=\"crop-avatar\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "\" class=\"profile_img\">
        </div>
            </div>
        <h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomUser", array()), "html", null, true);
        echo "</h3>
        <ul class=\"list-unstyled user_data\">
            <li><i class=\"fa fa-mobile-phone\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "contactAgent", array()), "html", null, true);
        echo "</li>
            <li><i class=\"fa fa-send\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</li>
            <li class=\"m-top-xs\"><a href=\"#\"><i class=\"fa fa-map-marker\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresseAgent", array()), "html", null, true);
        echo "</a></li>
            <li class=\"m-top-xs\"><i class=\"fa fa-briefcase\"></i>  ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "directionUser", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "serviceUser", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fonctionUser", array()), "html", null, true);
        echo "</li>
        </ul>
    <div class=\"ln_solid\"></div>
    <div class=\"form-group\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Modifier mot de passe</a>
            ";
        // line 20
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "statusUser", array()) == false) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "isGranted", array(0 => "ROLE_ADMIN"), "method"))) {
            // line 21
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_checkUser");
            echo "\" class=\"btn btn-primary\">Passer au suivante</a>
            ";
        }
        // line 23
        echo "        </div>
    </div>

        <br>
</div>

";
        
        $__internal_58502cd47ef1241e08ee5e3c1228851e4ca9196283b6661629105912665d9644->leave($__internal_58502cd47ef1241e08ee5e3c1228851e4ca9196283b6661629105912665d9644_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 21,  71 => 20,  67 => 19,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  36 => 9,  28 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
    <div class=\"profile_img\">
        <div id=\"crop-avatar\">
            <img src=\"{{asset('images/user.png')}}\" alt=\"{{app.user}}\" class=\"profile_img\">
        </div>
            </div>
        <h3>{{app.user}} {{ app.user.prenomUser }}</h3>
        <ul class=\"list-unstyled user_data\">
            <li><i class=\"fa fa-mobile-phone\"></i> {{app.user.contactAgent}}</li>
            <li><i class=\"fa fa-send\"></i> {{app.user.email}}</li>
            <li class=\"m-top-xs\"><a href=\"#\"><i class=\"fa fa-map-marker\"></i> {{app.user.adresseAgent}}</a></li>
            <li class=\"m-top-xs\"><i class=\"fa fa-briefcase\"></i>  {{app.user.directionUser}} / {{ app.user.serviceUser }} / {{ app.user.fonctionUser }}</li>
        </ul>
    <div class=\"ln_solid\"></div>
    <div class=\"form-group\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
            <a href=\"{{path('fos_user_change_password')}}\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Modifier mot de passe</a>
            {% if app.user.statusUser == false and app.security.isGranted('ROLE_ADMIN') %}
                <a href=\"{{path('projet_checkUser')}}\" class=\"btn btn-primary\">Passer au suivante</a>
            {% endif %}
        </div>
    </div>

        <br>
</div>

", "FOSUserBundle:Profile:show_content.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
