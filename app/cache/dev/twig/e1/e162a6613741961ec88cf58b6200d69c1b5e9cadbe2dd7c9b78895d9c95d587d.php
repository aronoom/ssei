<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6000503bf9fa916ffc51316d11a0d48ab217ce7fa5370a33e18017955c6095b0 extends Twig_Template
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
        $__internal_b55dbac6acfc40b6c950a7e07fd92f3978cd3ae9b3987c9e158897d97b1ce706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55dbac6acfc40b6c950a7e07fd92f3978cd3ae9b3987c9e158897d97b1ce706->enter($__internal_b55dbac6acfc40b6c950a7e07fd92f3978cd3ae9b3987c9e158897d97b1ce706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b55dbac6acfc40b6c950a7e07fd92f3978cd3ae9b3987c9e158897d97b1ce706->leave($__internal_b55dbac6acfc40b6c950a7e07fd92f3978cd3ae9b3987c9e158897d97b1ce706_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
