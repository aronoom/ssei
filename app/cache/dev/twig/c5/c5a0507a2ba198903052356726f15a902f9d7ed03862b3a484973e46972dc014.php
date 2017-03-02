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
        $__internal_ad877998d95abb061e6d8cf409f1e7dfb9c23a9d44e7ce28cb0068c9b9a5b859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad877998d95abb061e6d8cf409f1e7dfb9c23a9d44e7ce28cb0068c9b9a5b859->enter($__internal_ad877998d95abb061e6d8cf409f1e7dfb9c23a9d44e7ce28cb0068c9b9a5b859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad877998d95abb061e6d8cf409f1e7dfb9c23a9d44e7ce28cb0068c9b9a5b859->leave($__internal_ad877998d95abb061e6d8cf409f1e7dfb9c23a9d44e7ce28cb0068c9b9a5b859_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc43cfb1578027a4dd4e3fa7a70ccbc886ea9c0fbca9fb0c199418ab774e7863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc43cfb1578027a4dd4e3fa7a70ccbc886ea9c0fbca9fb0c199418ab774e7863->enter($__internal_bc43cfb1578027a4dd4e3fa7a70ccbc886ea9c0fbca9fb0c199418ab774e7863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bc43cfb1578027a4dd4e3fa7a70ccbc886ea9c0fbca9fb0c199418ab774e7863->leave($__internal_bc43cfb1578027a4dd4e3fa7a70ccbc886ea9c0fbca9fb0c199418ab774e7863_prof);

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
