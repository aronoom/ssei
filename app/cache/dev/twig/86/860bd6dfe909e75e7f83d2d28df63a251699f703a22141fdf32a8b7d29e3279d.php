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
        $__internal_c54fb58c8222c8bd19579bd106c5f942803f2185a6edff16fa1f7f7de04c9977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54fb58c8222c8bd19579bd106c5f942803f2185a6edff16fa1f7f7de04c9977->enter($__internal_c54fb58c8222c8bd19579bd106c5f942803f2185a6edff16fa1f7f7de04c9977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c54fb58c8222c8bd19579bd106c5f942803f2185a6edff16fa1f7f7de04c9977->leave($__internal_c54fb58c8222c8bd19579bd106c5f942803f2185a6edff16fa1f7f7de04c9977_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9deecce8df2a0970a67449526c41f6dbf795ed1b7721de669d359ecca7fec91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9deecce8df2a0970a67449526c41f6dbf795ed1b7721de669d359ecca7fec91d->enter($__internal_9deecce8df2a0970a67449526c41f6dbf795ed1b7721de669d359ecca7fec91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_9deecce8df2a0970a67449526c41f6dbf795ed1b7721de669d359ecca7fec91d->leave($__internal_9deecce8df2a0970a67449526c41f6dbf795ed1b7721de669d359ecca7fec91d_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd5a3ce67a051556e6acf6132c5165adc1c96f69dcfbc3e6f9e7327c087cc6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5a3ce67a051556e6acf6132c5165adc1c96f69dcfbc3e6f9e7327c087cc6cd->enter($__internal_fd5a3ce67a051556e6acf6132c5165adc1c96f69dcfbc3e6f9e7327c087cc6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fd5a3ce67a051556e6acf6132c5165adc1c96f69dcfbc3e6f9e7327c087cc6cd->leave($__internal_fd5a3ce67a051556e6acf6132c5165adc1c96f69dcfbc3e6f9e7327c087cc6cd_prof);

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
