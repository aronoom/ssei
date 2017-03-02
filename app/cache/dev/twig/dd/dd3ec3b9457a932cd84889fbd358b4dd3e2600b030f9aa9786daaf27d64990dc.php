<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6c6c6accf51b5e1438d3be68cb121902ffa7271db9a90d16d3c77d8c126f0a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5f282d13e2ae7567cb8da0363821512988458bd8bb0b81c304cf3b30e11906f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f282d13e2ae7567cb8da0363821512988458bd8bb0b81c304cf3b30e11906f3->enter($__internal_5f282d13e2ae7567cb8da0363821512988458bd8bb0b81c304cf3b30e11906f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f282d13e2ae7567cb8da0363821512988458bd8bb0b81c304cf3b30e11906f3->leave($__internal_5f282d13e2ae7567cb8da0363821512988458bd8bb0b81c304cf3b30e11906f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1786756d12b9916d9af1d63d313e855937883052084f98963598e385e9aa10cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1786756d12b9916d9af1d63d313e855937883052084f98963598e385e9aa10cd->enter($__internal_1786756d12b9916d9af1d63d313e855937883052084f98963598e385e9aa10cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1786756d12b9916d9af1d63d313e855937883052084f98963598e385e9aa10cd->leave($__internal_1786756d12b9916d9af1d63d313e855937883052084f98963598e385e9aa10cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
