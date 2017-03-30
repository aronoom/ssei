<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d3a081a0b355597835b5013b511e3056a733c86fe77d640a193133c3f95d2b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c908aafdd29aa4393d7bb84a8549b103de13a74458dd2dc8d09c3686dd58f655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c908aafdd29aa4393d7bb84a8549b103de13a74458dd2dc8d09c3686dd58f655->enter($__internal_c908aafdd29aa4393d7bb84a8549b103de13a74458dd2dc8d09c3686dd58f655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c908aafdd29aa4393d7bb84a8549b103de13a74458dd2dc8d09c3686dd58f655->leave($__internal_c908aafdd29aa4393d7bb84a8549b103de13a74458dd2dc8d09c3686dd58f655_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e90df621ec228a0ecc9fc55db571745abe922c39d9c7b84f319350d40a0849a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e90df621ec228a0ecc9fc55db571745abe922c39d9c7b84f319350d40a0849a->enter($__internal_9e90df621ec228a0ecc9fc55db571745abe922c39d9c7b84f319350d40a0849a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_9e90df621ec228a0ecc9fc55db571745abe922c39d9c7b84f319350d40a0849a->leave($__internal_9e90df621ec228a0ecc9fc55db571745abe922c39d9c7b84f319350d40a0849a_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_8451ac65927f21b430a90656e4d60229ca60fb4ad88a015e9227d6220c298cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8451ac65927f21b430a90656e4d60229ca60fb4ad88a015e9227d6220c298cc1->enter($__internal_8451ac65927f21b430a90656e4d60229ca60fb4ad88a015e9227d6220c298cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Bienvenue dans l'espace profile</h3>
            </div>
        </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Profil d'utilisateur</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    ";
        // line 19
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 19)->display($context);
        // line 20
        echo "                </div>
            </div>
        </div>
    </div>
          
";
        
        $__internal_8451ac65927f21b430a90656e4d60229ca60fb4ad88a015e9227d6220c298cc1->leave($__internal_8451ac65927f21b430a90656e4d60229ca60fb4ad88a015e9227d6220c298cc1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  70 => 19,  54 => 5,  48 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block title %}{{parent()}} Profile {% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Bienvenue dans l'espace profile</h3>
            </div>
        </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Profil d'utilisateur</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
                </div>
            </div>
        </div>
    </div>
          
{% endblock %}

", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
