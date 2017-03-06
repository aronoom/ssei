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
        $__internal_42b328f6b05edccfcf4563396d62ddc233cf76aac89693cab9e2f1b64f9871a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b328f6b05edccfcf4563396d62ddc233cf76aac89693cab9e2f1b64f9871a3->enter($__internal_42b328f6b05edccfcf4563396d62ddc233cf76aac89693cab9e2f1b64f9871a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_42b328f6b05edccfcf4563396d62ddc233cf76aac89693cab9e2f1b64f9871a3->leave($__internal_42b328f6b05edccfcf4563396d62ddc233cf76aac89693cab9e2f1b64f9871a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c398b291e4af4eea708d3e9ce16e31846030dde46b78cb0b1ada29d857f172f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c398b291e4af4eea708d3e9ce16e31846030dde46b78cb0b1ada29d857f172f4->enter($__internal_c398b291e4af4eea708d3e9ce16e31846030dde46b78cb0b1ada29d857f172f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c398b291e4af4eea708d3e9ce16e31846030dde46b78cb0b1ada29d857f172f4->leave($__internal_c398b291e4af4eea708d3e9ce16e31846030dde46b78cb0b1ada29d857f172f4_prof);

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
