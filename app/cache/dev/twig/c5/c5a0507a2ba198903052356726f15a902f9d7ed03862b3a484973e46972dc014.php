<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4fccd35a1625b2a1afb1c370a00155311017f34d52cf668c2c57d07fd28ac8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3895c5b92d693f19dc4f040898e1d6a2c5e9f709bcd98295f185ac6ce6c643c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3895c5b92d693f19dc4f040898e1d6a2c5e9f709bcd98295f185ac6ce6c643c->enter($__internal_e3895c5b92d693f19dc4f040898e1d6a2c5e9f709bcd98295f185ac6ce6c643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e3895c5b92d693f19dc4f040898e1d6a2c5e9f709bcd98295f185ac6ce6c643c->leave($__internal_e3895c5b92d693f19dc4f040898e1d6a2c5e9f709bcd98295f185ac6ce6c643c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b2b94b932b507b8f9ab7ab75c66e01b8d440e1aa27b3ae7c2cb9e4640635e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2b94b932b507b8f9ab7ab75c66e01b8d440e1aa27b3ae7c2cb9e4640635e35->enter($__internal_1b2b94b932b507b8f9ab7ab75c66e01b8d440e1aa27b3ae7c2cb9e4640635e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1b2b94b932b507b8f9ab7ab75c66e01b8d440e1aa27b3ae7c2cb9e4640635e35->leave($__internal_1b2b94b932b507b8f9ab7ab75c66e01b8d440e1aa27b3ae7c2cb9e4640635e35_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
