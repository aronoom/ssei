<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_74222ea571c4558f147d225ea03741783e3ae4f526708271a98bdd5a6d0f9e3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c3b2792556beecc65065611eaa124213e3c618e0bb1b71907550c60db0b51da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b2792556beecc65065611eaa124213e3c618e0bb1b71907550c60db0b51da4->enter($__internal_c3b2792556beecc65065611eaa124213e3c618e0bb1b71907550c60db0b51da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3b2792556beecc65065611eaa124213e3c618e0bb1b71907550c60db0b51da4->leave($__internal_c3b2792556beecc65065611eaa124213e3c618e0bb1b71907550c60db0b51da4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a66220b607fcfbec89e35b69b3cbfd016fe820fc4884dd1370ac9a96ca67fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a66220b607fcfbec89e35b69b3cbfd016fe820fc4884dd1370ac9a96ca67fe2->enter($__internal_0a66220b607fcfbec89e35b69b3cbfd016fe820fc4884dd1370ac9a96ca67fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0a66220b607fcfbec89e35b69b3cbfd016fe820fc4884dd1370ac9a96ca67fe2->leave($__internal_0a66220b607fcfbec89e35b69b3cbfd016fe820fc4884dd1370ac9a96ca67fe2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
