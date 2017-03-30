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
        $__internal_378a70d97e8de06883343bc0af8bf17ad398564f24c26b1e9949c5c059d2696a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378a70d97e8de06883343bc0af8bf17ad398564f24c26b1e9949c5c059d2696a->enter($__internal_378a70d97e8de06883343bc0af8bf17ad398564f24c26b1e9949c5c059d2696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_378a70d97e8de06883343bc0af8bf17ad398564f24c26b1e9949c5c059d2696a->leave($__internal_378a70d97e8de06883343bc0af8bf17ad398564f24c26b1e9949c5c059d2696a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01c1698339b5e93bc326619a743e11081032e0eb376a372a63b64cb3b13cfa48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c1698339b5e93bc326619a743e11081032e0eb376a372a63b64cb3b13cfa48->enter($__internal_01c1698339b5e93bc326619a743e11081032e0eb376a372a63b64cb3b13cfa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_01c1698339b5e93bc326619a743e11081032e0eb376a372a63b64cb3b13cfa48->leave($__internal_01c1698339b5e93bc326619a743e11081032e0eb376a372a63b64cb3b13cfa48_prof);

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
