<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d72951ea399232ef976f6f4cbfbd9df29579ad29d9305d801f37202b1cbe1a41 extends Twig_Template
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
        $__internal_fe1b22561fdf12d28e7fb9fd9e01fd42f2a3627866c563a8ccb6cc11f02a3d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1b22561fdf12d28e7fb9fd9e01fd42f2a3627866c563a8ccb6cc11f02a3d44->enter($__internal_fe1b22561fdf12d28e7fb9fd9e01fd42f2a3627866c563a8ccb6cc11f02a3d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fe1b22561fdf12d28e7fb9fd9e01fd42f2a3627866c563a8ccb6cc11f02a3d44->leave($__internal_fe1b22561fdf12d28e7fb9fd9e01fd42f2a3627866c563a8ccb6cc11f02a3d44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
