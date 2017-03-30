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
        $__internal_62d260a89e6c6ef1c9b61f3b6e14afa2e118ac6916c6741a00abd5f70e96d6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d260a89e6c6ef1c9b61f3b6e14afa2e118ac6916c6741a00abd5f70e96d6b2->enter($__internal_62d260a89e6c6ef1c9b61f3b6e14afa2e118ac6916c6741a00abd5f70e96d6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d260a89e6c6ef1c9b61f3b6e14afa2e118ac6916c6741a00abd5f70e96d6b2->leave($__internal_62d260a89e6c6ef1c9b61f3b6e14afa2e118ac6916c6741a00abd5f70e96d6b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c374bc89d34eb788622ecf301c007aa121703f69bf48fad6af8dab8e75b9671f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c374bc89d34eb788622ecf301c007aa121703f69bf48fad6af8dab8e75b9671f->enter($__internal_c374bc89d34eb788622ecf301c007aa121703f69bf48fad6af8dab8e75b9671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_c374bc89d34eb788622ecf301c007aa121703f69bf48fad6af8dab8e75b9671f->leave($__internal_c374bc89d34eb788622ecf301c007aa121703f69bf48fad6af8dab8e75b9671f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_67d1eac4d34ac752839f8d5e64b1aa20dcce99e845fd3d104055924241f1145d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d1eac4d34ac752839f8d5e64b1aa20dcce99e845fd3d104055924241f1145d->enter($__internal_67d1eac4d34ac752839f8d5e64b1aa20dcce99e845fd3d104055924241f1145d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_67d1eac4d34ac752839f8d5e64b1aa20dcce99e845fd3d104055924241f1145d->leave($__internal_67d1eac4d34ac752839f8d5e64b1aa20dcce99e845fd3d104055924241f1145d_prof);

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
