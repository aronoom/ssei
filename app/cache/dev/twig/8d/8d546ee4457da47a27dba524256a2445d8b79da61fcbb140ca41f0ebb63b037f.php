<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f85fe7dc471f5909c97240efd155f5fafc7510f334830c4cdc6b929ee26bd4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fd98a543b5bbad96157f20ea594807d3024087fb0c95c189130cf3e19cdfd238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd98a543b5bbad96157f20ea594807d3024087fb0c95c189130cf3e19cdfd238->enter($__internal_fd98a543b5bbad96157f20ea594807d3024087fb0c95c189130cf3e19cdfd238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd98a543b5bbad96157f20ea594807d3024087fb0c95c189130cf3e19cdfd238->leave($__internal_fd98a543b5bbad96157f20ea594807d3024087fb0c95c189130cf3e19cdfd238_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1165e3985c2b823169ec97521980abec0a722244e4044b27119f5d021364989b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1165e3985c2b823169ec97521980abec0a722244e4044b27119f5d021364989b->enter($__internal_1165e3985c2b823169ec97521980abec0a722244e4044b27119f5d021364989b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1165e3985c2b823169ec97521980abec0a722244e4044b27119f5d021364989b->leave($__internal_1165e3985c2b823169ec97521980abec0a722244e4044b27119f5d021364989b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
