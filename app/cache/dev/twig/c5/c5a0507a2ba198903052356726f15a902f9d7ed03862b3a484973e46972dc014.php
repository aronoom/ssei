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
        $__internal_95760d5b6b9b788bd1e168f392a84ba43dda7e6b88f77015e479cc3646a1bc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95760d5b6b9b788bd1e168f392a84ba43dda7e6b88f77015e479cc3646a1bc3a->enter($__internal_95760d5b6b9b788bd1e168f392a84ba43dda7e6b88f77015e479cc3646a1bc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_95760d5b6b9b788bd1e168f392a84ba43dda7e6b88f77015e479cc3646a1bc3a->leave($__internal_95760d5b6b9b788bd1e168f392a84ba43dda7e6b88f77015e479cc3646a1bc3a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e82698907953e4b32661e9e6e79c13662f1962ffe7f14fffef45a8f916ce3cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82698907953e4b32661e9e6e79c13662f1962ffe7f14fffef45a8f916ce3cc5->enter($__internal_e82698907953e4b32661e9e6e79c13662f1962ffe7f14fffef45a8f916ce3cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e82698907953e4b32661e9e6e79c13662f1962ffe7f14fffef45a8f916ce3cc5->leave($__internal_e82698907953e4b32661e9e6e79c13662f1962ffe7f14fffef45a8f916ce3cc5_prof);

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
