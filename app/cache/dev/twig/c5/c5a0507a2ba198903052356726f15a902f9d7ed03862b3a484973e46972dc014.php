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
        $__internal_9272bb73a938cb22ab20fa721d2ed6fc4f8341673312fd02b854f2179c131589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9272bb73a938cb22ab20fa721d2ed6fc4f8341673312fd02b854f2179c131589->enter($__internal_9272bb73a938cb22ab20fa721d2ed6fc4f8341673312fd02b854f2179c131589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9272bb73a938cb22ab20fa721d2ed6fc4f8341673312fd02b854f2179c131589->leave($__internal_9272bb73a938cb22ab20fa721d2ed6fc4f8341673312fd02b854f2179c131589_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_de44003a98d4048d240050b4be4d5d85eae74f37acd233e48a73635db0836f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de44003a98d4048d240050b4be4d5d85eae74f37acd233e48a73635db0836f20->enter($__internal_de44003a98d4048d240050b4be4d5d85eae74f37acd233e48a73635db0836f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_de44003a98d4048d240050b4be4d5d85eae74f37acd233e48a73635db0836f20->leave($__internal_de44003a98d4048d240050b4be4d5d85eae74f37acd233e48a73635db0836f20_prof);

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
