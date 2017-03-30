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
        $__internal_80890ff64b4099b715e7ef0b7964f244f317f6ad73d7aba38560a5ea61e24eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80890ff64b4099b715e7ef0b7964f244f317f6ad73d7aba38560a5ea61e24eb1->enter($__internal_80890ff64b4099b715e7ef0b7964f244f317f6ad73d7aba38560a5ea61e24eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80890ff64b4099b715e7ef0b7964f244f317f6ad73d7aba38560a5ea61e24eb1->leave($__internal_80890ff64b4099b715e7ef0b7964f244f317f6ad73d7aba38560a5ea61e24eb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67b6f68b8e6e1837a585d4f2d81bc6d9b71aafdd167ecc65ce89bc885750953a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b6f68b8e6e1837a585d4f2d81bc6d9b71aafdd167ecc65ce89bc885750953a->enter($__internal_67b6f68b8e6e1837a585d4f2d81bc6d9b71aafdd167ecc65ce89bc885750953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_67b6f68b8e6e1837a585d4f2d81bc6d9b71aafdd167ecc65ce89bc885750953a->leave($__internal_67b6f68b8e6e1837a585d4f2d81bc6d9b71aafdd167ecc65ce89bc885750953a_prof);

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
