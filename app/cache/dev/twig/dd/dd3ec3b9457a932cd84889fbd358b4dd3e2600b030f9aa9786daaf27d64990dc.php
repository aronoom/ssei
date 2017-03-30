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
        $__internal_82c7dbf4d2b4b742c1b7ecbbb38394230ae104f913c39abbb43dd04213de2f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c7dbf4d2b4b742c1b7ecbbb38394230ae104f913c39abbb43dd04213de2f34->enter($__internal_82c7dbf4d2b4b742c1b7ecbbb38394230ae104f913c39abbb43dd04213de2f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c7dbf4d2b4b742c1b7ecbbb38394230ae104f913c39abbb43dd04213de2f34->leave($__internal_82c7dbf4d2b4b742c1b7ecbbb38394230ae104f913c39abbb43dd04213de2f34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f06bc2ed5ee38bb7832344d37f1225c0e981b699e5933daabce5772b3eaa1e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06bc2ed5ee38bb7832344d37f1225c0e981b699e5933daabce5772b3eaa1e60->enter($__internal_f06bc2ed5ee38bb7832344d37f1225c0e981b699e5933daabce5772b3eaa1e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f06bc2ed5ee38bb7832344d37f1225c0e981b699e5933daabce5772b3eaa1e60->leave($__internal_f06bc2ed5ee38bb7832344d37f1225c0e981b699e5933daabce5772b3eaa1e60_prof);

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
