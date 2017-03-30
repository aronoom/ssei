<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6c6c6accf51b5e1438d3be68cb121902ffa7271db9a90d16d3c77d8c126f0a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc1d0d22522f5c438b063fbb4f6e1c27d41c6bf4fa460e41f9e682fbe848fbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1d0d22522f5c438b063fbb4f6e1c27d41c6bf4fa460e41f9e682fbe848fbdc->enter($__internal_bc1d0d22522f5c438b063fbb4f6e1c27d41c6bf4fa460e41f9e682fbe848fbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1d0d22522f5c438b063fbb4f6e1c27d41c6bf4fa460e41f9e682fbe848fbdc->leave($__internal_bc1d0d22522f5c438b063fbb4f6e1c27d41c6bf4fa460e41f9e682fbe848fbdc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5feffcab374e13d775a93705d531fe5070e549baf1fbc5283bc3f90ca5bc41d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5feffcab374e13d775a93705d531fe5070e549baf1fbc5283bc3f90ca5bc41d2->enter($__internal_5feffcab374e13d775a93705d531fe5070e549baf1fbc5283bc3f90ca5bc41d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5feffcab374e13d775a93705d531fe5070e549baf1fbc5283bc3f90ca5bc41d2->leave($__internal_5feffcab374e13d775a93705d531fe5070e549baf1fbc5283bc3f90ca5bc41d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
