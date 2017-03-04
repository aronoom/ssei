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
        $__internal_72ec6efed48fc1d35cd5010c7127fba6b9ab94b8c015b48b9f1e213fce5f1012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ec6efed48fc1d35cd5010c7127fba6b9ab94b8c015b48b9f1e213fce5f1012->enter($__internal_72ec6efed48fc1d35cd5010c7127fba6b9ab94b8c015b48b9f1e213fce5f1012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_72ec6efed48fc1d35cd5010c7127fba6b9ab94b8c015b48b9f1e213fce5f1012->leave($__internal_72ec6efed48fc1d35cd5010c7127fba6b9ab94b8c015b48b9f1e213fce5f1012_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_31883fcfe9e5a134f4f5898e35fa096d735322a51155df5a61e5ddec79c1685a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31883fcfe9e5a134f4f5898e35fa096d735322a51155df5a61e5ddec79c1685a->enter($__internal_31883fcfe9e5a134f4f5898e35fa096d735322a51155df5a61e5ddec79c1685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_31883fcfe9e5a134f4f5898e35fa096d735322a51155df5a61e5ddec79c1685a->leave($__internal_31883fcfe9e5a134f4f5898e35fa096d735322a51155df5a61e5ddec79c1685a_prof);

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
