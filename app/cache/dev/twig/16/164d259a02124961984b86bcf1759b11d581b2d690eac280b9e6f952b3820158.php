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
        $__internal_0e7ec73718fe8c95f9b3a761ef7d7a4102b2aa4e46b2327b2d45787aa1585d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7ec73718fe8c95f9b3a761ef7d7a4102b2aa4e46b2327b2d45787aa1585d0b->enter($__internal_0e7ec73718fe8c95f9b3a761ef7d7a4102b2aa4e46b2327b2d45787aa1585d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e7ec73718fe8c95f9b3a761ef7d7a4102b2aa4e46b2327b2d45787aa1585d0b->leave($__internal_0e7ec73718fe8c95f9b3a761ef7d7a4102b2aa4e46b2327b2d45787aa1585d0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0bd1fbf2d5acb37999df86feb01df27ea0f83a268be195755fb9becafad50ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bd1fbf2d5acb37999df86feb01df27ea0f83a268be195755fb9becafad50ad->enter($__internal_f0bd1fbf2d5acb37999df86feb01df27ea0f83a268be195755fb9becafad50ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f0bd1fbf2d5acb37999df86feb01df27ea0f83a268be195755fb9becafad50ad->leave($__internal_f0bd1fbf2d5acb37999df86feb01df27ea0f83a268be195755fb9becafad50ad_prof);

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
