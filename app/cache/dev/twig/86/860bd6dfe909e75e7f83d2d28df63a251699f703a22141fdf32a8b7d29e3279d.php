<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_8c0edb7f982f4424f7b5fcba18ef2b19e4109abb73cdc405cf2758269fb7c2f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CemScoBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CemScoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91495e762d27b8d3f76a3f094b1dfae8027a7b26f1225818b963c8e44bb51372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91495e762d27b8d3f76a3f094b1dfae8027a7b26f1225818b963c8e44bb51372->enter($__internal_91495e762d27b8d3f76a3f094b1dfae8027a7b26f1225818b963c8e44bb51372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91495e762d27b8d3f76a3f094b1dfae8027a7b26f1225818b963c8e44bb51372->leave($__internal_91495e762d27b8d3f76a3f094b1dfae8027a7b26f1225818b963c8e44bb51372_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d7195df86f71ec06642553b14e18dc1e0e0e477267555871a94c83a58e014c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7195df86f71ec06642553b14e18dc1e0e0e477267555871a94c83a58e014c7->enter($__internal_1d7195df86f71ec06642553b14e18dc1e0e0e477267555871a94c83a58e014c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_1d7195df86f71ec06642553b14e18dc1e0e0e477267555871a94c83a58e014c7->leave($__internal_1d7195df86f71ec06642553b14e18dc1e0e0e477267555871a94c83a58e014c7_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_fdffc0608a0c7da2a420250c72ffeff98befdf0d2e95414efc6c3204061a69f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdffc0608a0c7da2a420250c72ffeff98befdf0d2e95414efc6c3204061a69f9->enter($__internal_fdffc0608a0c7da2a420250c72ffeff98befdf0d2e95414efc6c3204061a69f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sco_homepage");
        echo "\">Acceuil</a></li>
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                    <li class=\"active\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cem_anomalie_homepage");
        echo "\">Modifier mot de passe</a></li>
                </ol>
            </div>
        </div>   
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_content\">
                    ";
        // line 20
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 20)->display($context);
        // line 21
        echo "                </div>
            </div>
        </div>
    </div>
          
";
        
        $__internal_fdffc0608a0c7da2a420250c72ffeff98befdf0d2e95414efc6c3204061a69f9->leave($__internal_fdffc0608a0c7da2a420250c72ffeff98befdf0d2e95414efc6c3204061a69f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  83 => 20,  71 => 11,  67 => 10,  63 => 9,  58 => 7,  54 => 5,  48 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CemScoBundle::layout.html.twig\" %}

{% block title %}{{parent()}} Profile {% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>{{app.user}}</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{path('sco_homepage')}}\">Acceuil</a></li>
                    <li><a href=\"{{path('fos_user_profile_show')}}\">Profile</a></li>
                    <li class=\"active\"><a href=\"{{ path('cem_anomalie_homepage') }}\">Modifier mot de passe</a></li>
                </ol>
            </div>
        </div>   
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_content\">
                    {% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
                </div>
            </div>
        </div>
    </div>
          
{% endblock %}", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
