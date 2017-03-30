<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b2dd49113d50852f842fa5cd2344af9fbd66bf8627c5b7e86848d1010801b202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d177c41db6f7e4a9eedaedfa1f901a02b723b08388289996876d95249d936d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d177c41db6f7e4a9eedaedfa1f901a02b723b08388289996876d95249d936d23->enter($__internal_d177c41db6f7e4a9eedaedfa1f901a02b723b08388289996876d95249d936d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d177c41db6f7e4a9eedaedfa1f901a02b723b08388289996876d95249d936d23->leave($__internal_d177c41db6f7e4a9eedaedfa1f901a02b723b08388289996876d95249d936d23_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d508921fb90fed22571977c0bd507c3eda8ab030736d443fa1f9a4e26b0a3caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d508921fb90fed22571977c0bd507c3eda8ab030736d443fa1f9a4e26b0a3caa->enter($__internal_d508921fb90fed22571977c0bd507c3eda8ab030736d443fa1f9a4e26b0a3caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_d508921fb90fed22571977c0bd507c3eda8ab030736d443fa1f9a4e26b0a3caa->leave($__internal_d508921fb90fed22571977c0bd507c3eda8ab030736d443fa1f9a4e26b0a3caa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_67b31335bfdc69bf4775a4167322788562fb3310050f4e91e2873a78a6bc77ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b31335bfdc69bf4775a4167322788562fb3310050f4e91e2873a78a6bc77ec->enter($__internal_67b31335bfdc69bf4775a4167322788562fb3310050f4e91e2873a78a6bc77ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"dashboard_graph\">
            <div class=\"row x_title\">    
                 <h3> Profile - Edit</h3>
            </div>       
";
        // line 9
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>  
";
        
        $__internal_67b31335bfdc69bf4775a4167322788562fb3310050f4e91e2873a78a6bc77ec->leave($__internal_67b31335bfdc69bf4775a4167322788562fb3310050f4e91e2873a78a6bc77ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  61 => 9,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"dashboard_graph\">
            <div class=\"row x_title\">    
                 <h3> Profile - Edit</h3>
            </div>       
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
        </div>
    </div>  
{% endblock %}
", "FOSUserBundle:Profile:edit.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
