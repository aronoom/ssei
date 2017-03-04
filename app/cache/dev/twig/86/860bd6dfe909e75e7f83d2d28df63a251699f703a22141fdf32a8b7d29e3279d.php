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
        $__internal_5c04dad922849115ed7040ed4bad0a23136bbbddcfff999d89abf61ed68c8332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c04dad922849115ed7040ed4bad0a23136bbbddcfff999d89abf61ed68c8332->enter($__internal_5c04dad922849115ed7040ed4bad0a23136bbbddcfff999d89abf61ed68c8332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c04dad922849115ed7040ed4bad0a23136bbbddcfff999d89abf61ed68c8332->leave($__internal_5c04dad922849115ed7040ed4bad0a23136bbbddcfff999d89abf61ed68c8332_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afa26ce08e9e8f81179e7f729a11baa52354f6d364b0047ab47395bf3b99b7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa26ce08e9e8f81179e7f729a11baa52354f6d364b0047ab47395bf3b99b7cd->enter($__internal_afa26ce08e9e8f81179e7f729a11baa52354f6d364b0047ab47395bf3b99b7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_afa26ce08e9e8f81179e7f729a11baa52354f6d364b0047ab47395bf3b99b7cd->leave($__internal_afa26ce08e9e8f81179e7f729a11baa52354f6d364b0047ab47395bf3b99b7cd_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_0da82e36a8229d341a16dc5fe1f73944c9f8df81ae8999ab238cbd3ae5739551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da82e36a8229d341a16dc5fe1f73944c9f8df81ae8999ab238cbd3ae5739551->enter($__internal_0da82e36a8229d341a16dc5fe1f73944c9f8df81ae8999ab238cbd3ae5739551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0da82e36a8229d341a16dc5fe1f73944c9f8df81ae8999ab238cbd3ae5739551->leave($__internal_0da82e36a8229d341a16dc5fe1f73944c9f8df81ae8999ab238cbd3ae5739551_prof);

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
