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
        $__internal_f51d207fbb5235cc048487c2c4728e8b76a8280c1c7e91f6bb6a267f88853604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51d207fbb5235cc048487c2c4728e8b76a8280c1c7e91f6bb6a267f88853604->enter($__internal_f51d207fbb5235cc048487c2c4728e8b76a8280c1c7e91f6bb6a267f88853604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f51d207fbb5235cc048487c2c4728e8b76a8280c1c7e91f6bb6a267f88853604->leave($__internal_f51d207fbb5235cc048487c2c4728e8b76a8280c1c7e91f6bb6a267f88853604_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_26807294afa6aa338abb37ed14b351e871af6568e35b12026860f6246c8dfdf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26807294afa6aa338abb37ed14b351e871af6568e35b12026860f6246c8dfdf2->enter($__internal_26807294afa6aa338abb37ed14b351e871af6568e35b12026860f6246c8dfdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_26807294afa6aa338abb37ed14b351e871af6568e35b12026860f6246c8dfdf2->leave($__internal_26807294afa6aa338abb37ed14b351e871af6568e35b12026860f6246c8dfdf2_prof);

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
