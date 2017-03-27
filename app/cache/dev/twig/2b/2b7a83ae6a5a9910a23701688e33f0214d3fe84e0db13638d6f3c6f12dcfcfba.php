<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1cc362fd4d4bb46fa0fcbe10b69345567236a39172b95441cc03c20c2e1133f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f81bc5816a3b8be9bfac887597c305b452eaf746222ceea97f399cc7e552c1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81bc5816a3b8be9bfac887597c305b452eaf746222ceea97f399cc7e552c1e8->enter($__internal_f81bc5816a3b8be9bfac887597c305b452eaf746222ceea97f399cc7e552c1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f81bc5816a3b8be9bfac887597c305b452eaf746222ceea97f399cc7e552c1e8->leave($__internal_f81bc5816a3b8be9bfac887597c305b452eaf746222ceea97f399cc7e552c1e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df861a5c7d29e5c4bf2923e727e91be539c47bb66179a42ff2baa8c1ff83ec57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df861a5c7d29e5c4bf2923e727e91be539c47bb66179a42ff2baa8c1ff83ec57->enter($__internal_df861a5c7d29e5c4bf2923e727e91be539c47bb66179a42ff2baa8c1ff83ec57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_df861a5c7d29e5c4bf2923e727e91be539c47bb66179a42ff2baa8c1ff83ec57->leave($__internal_df861a5c7d29e5c4bf2923e727e91be539c47bb66179a42ff2baa8c1ff83ec57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
