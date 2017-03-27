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
        $__internal_3d554e71338c5cc052a7b14f7691b193b934fcfe9762a1d28bcdc01942cece3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d554e71338c5cc052a7b14f7691b193b934fcfe9762a1d28bcdc01942cece3a->enter($__internal_3d554e71338c5cc052a7b14f7691b193b934fcfe9762a1d28bcdc01942cece3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Default:index.html.twig"));

        // line 1
        echo "Here is the default project template";
        
        $__internal_3d554e71338c5cc052a7b14f7691b193b934fcfe9762a1d28bcdc01942cece3a->leave($__internal_3d554e71338c5cc052a7b14f7691b193b934fcfe9762a1d28bcdc01942cece3a_prof);

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
