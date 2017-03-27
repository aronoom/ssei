<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f192af14f2651735786844ccaa743ca3749696e87fccd8f56f4ddeb4e66e70be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5d27a0523aec6d7adc1791c0c013f683727d76f05c90b3b23e2afe2e4c447e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d27a0523aec6d7adc1791c0c013f683727d76f05c90b3b23e2afe2e4c447e78->enter($__internal_5d27a0523aec6d7adc1791c0c013f683727d76f05c90b3b23e2afe2e4c447e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d27a0523aec6d7adc1791c0c013f683727d76f05c90b3b23e2afe2e4c447e78->leave($__internal_5d27a0523aec6d7adc1791c0c013f683727d76f05c90b3b23e2afe2e4c447e78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa39075796049d7d49c305993f6d17ac5a0a6f12a02ef9bf21bfbfac3235db17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa39075796049d7d49c305993f6d17ac5a0a6f12a02ef9bf21bfbfac3235db17->enter($__internal_fa39075796049d7d49c305993f6d17ac5a0a6f12a02ef9bf21bfbfac3235db17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_fa39075796049d7d49c305993f6d17ac5a0a6f12a02ef9bf21bfbfac3235db17->leave($__internal_fa39075796049d7d49c305993f6d17ac5a0a6f12a02ef9bf21bfbfac3235db17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
