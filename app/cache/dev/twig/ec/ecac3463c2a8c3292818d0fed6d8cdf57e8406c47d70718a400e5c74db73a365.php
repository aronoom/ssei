<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b1aa9d3af901220e5ded15c496842d7c1727907572a15e49ea20f598e7d21012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0bf1cba5f9efa9622b56b4b5693b3490debeff714fc71b3f90764a6664416bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf1cba5f9efa9622b56b4b5693b3490debeff714fc71b3f90764a6664416bac->enter($__internal_0bf1cba5f9efa9622b56b4b5693b3490debeff714fc71b3f90764a6664416bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf1cba5f9efa9622b56b4b5693b3490debeff714fc71b3f90764a6664416bac->leave($__internal_0bf1cba5f9efa9622b56b4b5693b3490debeff714fc71b3f90764a6664416bac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbb5e0c6860d0a7fd82151f9e0fb6ca0f98be8bacbed83dedafcfea00867d08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb5e0c6860d0a7fd82151f9e0fb6ca0f98be8bacbed83dedafcfea00867d08f->enter($__internal_fbb5e0c6860d0a7fd82151f9e0fb6ca0f98be8bacbed83dedafcfea00867d08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_fbb5e0c6860d0a7fd82151f9e0fb6ca0f98be8bacbed83dedafcfea00867d08f->leave($__internal_fbb5e0c6860d0a7fd82151f9e0fb6ca0f98be8bacbed83dedafcfea00867d08f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
