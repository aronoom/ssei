<?php

/* ProjetBundle:Default:index.html.twig */
class __TwigTemplate_456d7df099f355184c170cc463396f1ba1103264497e566ae50204287c661785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20f16d0970aa1c97d89a6731672fb0212206b6629f698ef0d0293fbb1d0e64f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f16d0970aa1c97d89a6731672fb0212206b6629f698ef0d0293fbb1d0e64f2->enter($__internal_20f16d0970aa1c97d89a6731672fb0212206b6629f698ef0d0293fbb1d0e64f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Default:index.html.twig"));

        // line 1
        echo "Here is the default project template";
        
        $__internal_20f16d0970aa1c97d89a6731672fb0212206b6629f698ef0d0293fbb1d0e64f2->leave($__internal_20f16d0970aa1c97d89a6731672fb0212206b6629f698ef0d0293fbb1d0e64f2_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Here is the default project template", "ProjetBundle:Default:index.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Default/index.html.twig");
    }
}
