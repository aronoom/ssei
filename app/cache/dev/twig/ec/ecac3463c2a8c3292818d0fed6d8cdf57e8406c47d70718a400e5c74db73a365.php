<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b1aa9d3af901220e5ded15c496842d7c1727907572a15e49ea20f598e7d21012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d988ab6c9be57ab61f6e5e8639a23bbf03de2c77a0fa8e8feaf8e4fd4e39bd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d988ab6c9be57ab61f6e5e8639a23bbf03de2c77a0fa8e8feaf8e4fd4e39bd7b->enter($__internal_d988ab6c9be57ab61f6e5e8639a23bbf03de2c77a0fa8e8feaf8e4fd4e39bd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d988ab6c9be57ab61f6e5e8639a23bbf03de2c77a0fa8e8feaf8e4fd4e39bd7b->leave($__internal_d988ab6c9be57ab61f6e5e8639a23bbf03de2c77a0fa8e8feaf8e4fd4e39bd7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bad2101cd6382f7f67ee9654a996c7a9e32306fc1e1cfaf3e0bb22afde4753ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad2101cd6382f7f67ee9654a996c7a9e32306fc1e1cfaf3e0bb22afde4753ce->enter($__internal_bad2101cd6382f7f67ee9654a996c7a9e32306fc1e1cfaf3e0bb22afde4753ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bad2101cd6382f7f67ee9654a996c7a9e32306fc1e1cfaf3e0bb22afde4753ce->leave($__internal_bad2101cd6382f7f67ee9654a996c7a9e32306fc1e1cfaf3e0bb22afde4753ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
