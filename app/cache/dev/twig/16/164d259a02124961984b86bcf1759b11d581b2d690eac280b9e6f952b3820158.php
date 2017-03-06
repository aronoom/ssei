<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9b25b2b2064b5d3accd80b9af9fea221c310410aa8fc61d2b79db2c43bfb7a26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ca9bc647dca05589399d17e26551634e0f0228ceae55e67f912cc2b3dc718b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9bc647dca05589399d17e26551634e0f0228ceae55e67f912cc2b3dc718b19->enter($__internal_ca9bc647dca05589399d17e26551634e0f0228ceae55e67f912cc2b3dc718b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca9bc647dca05589399d17e26551634e0f0228ceae55e67f912cc2b3dc718b19->leave($__internal_ca9bc647dca05589399d17e26551634e0f0228ceae55e67f912cc2b3dc718b19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d325d502978985ca812f2ca629bca8807f5445d91f1cf92e6d4f1c8cb20ab7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d325d502978985ca812f2ca629bca8807f5445d91f1cf92e6d4f1c8cb20ab7e3->enter($__internal_d325d502978985ca812f2ca629bca8807f5445d91f1cf92e6d4f1c8cb20ab7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d325d502978985ca812f2ca629bca8807f5445d91f1cf92e6d4f1c8cb20ab7e3->leave($__internal_d325d502978985ca812f2ca629bca8807f5445d91f1cf92e6d4f1c8cb20ab7e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
