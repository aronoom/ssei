<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1cc362fd4d4bb46fa0fcbe10b69345567236a39172b95441cc03c20c2e1133f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f56750dd379c6a0441d776a1947756a45004c2371b46b9129bdd7c3cfc1cb771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56750dd379c6a0441d776a1947756a45004c2371b46b9129bdd7c3cfc1cb771->enter($__internal_f56750dd379c6a0441d776a1947756a45004c2371b46b9129bdd7c3cfc1cb771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f56750dd379c6a0441d776a1947756a45004c2371b46b9129bdd7c3cfc1cb771->leave($__internal_f56750dd379c6a0441d776a1947756a45004c2371b46b9129bdd7c3cfc1cb771_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfc3ae7387853da11a0cc3d0836bb2042535f66b89302c40f670d6531a8f525f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc3ae7387853da11a0cc3d0836bb2042535f66b89302c40f670d6531a8f525f->enter($__internal_bfc3ae7387853da11a0cc3d0836bb2042535f66b89302c40f670d6531a8f525f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_bfc3ae7387853da11a0cc3d0836bb2042535f66b89302c40f670d6531a8f525f->leave($__internal_bfc3ae7387853da11a0cc3d0836bb2042535f66b89302c40f670d6531a8f525f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
