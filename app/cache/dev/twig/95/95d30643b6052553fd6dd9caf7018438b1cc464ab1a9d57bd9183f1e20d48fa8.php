<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_06ef76c28bbfc640519c3cbc716ce638348c884c67edd8f49c64556a1ec364b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbabdc23bef3171d86ab8bb637d73132f3a6f0564c04ea3b2f6128b1dd612423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbabdc23bef3171d86ab8bb637d73132f3a6f0564c04ea3b2f6128b1dd612423->enter($__internal_fbabdc23bef3171d86ab8bb637d73132f3a6f0564c04ea3b2f6128b1dd612423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbabdc23bef3171d86ab8bb637d73132f3a6f0564c04ea3b2f6128b1dd612423->leave($__internal_fbabdc23bef3171d86ab8bb637d73132f3a6f0564c04ea3b2f6128b1dd612423_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e057c11eb1f6737aa01c46e5ef2ab829c4a944b11a92323f6062ea4f498be931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e057c11eb1f6737aa01c46e5ef2ab829c4a944b11a92323f6062ea4f498be931->enter($__internal_e057c11eb1f6737aa01c46e5ef2ab829c4a944b11a92323f6062ea4f498be931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_e057c11eb1f6737aa01c46e5ef2ab829c4a944b11a92323f6062ea4f498be931->leave($__internal_e057c11eb1f6737aa01c46e5ef2ab829c4a944b11a92323f6062ea4f498be931_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_656e532bf523fe57d98aeebd255723acde41814b022dd9d3f25f2b29407c77ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656e532bf523fe57d98aeebd255723acde41814b022dd9d3f25f2b29407c77ef->enter($__internal_656e532bf523fe57d98aeebd255723acde41814b022dd9d3f25f2b29407c77ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_656e532bf523fe57d98aeebd255723acde41814b022dd9d3f25f2b29407c77ef->leave($__internal_656e532bf523fe57d98aeebd255723acde41814b022dd9d3f25f2b29407c77ef_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68b65081caa112d6d9e2e6cc3aa26a7c9c4c28656e11ad622853571fccb8a808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b65081caa112d6d9e2e6cc3aa26a7c9c4c28656e11ad622853571fccb8a808->enter($__internal_68b65081caa112d6d9e2e6cc3aa26a7c9c4c28656e11ad622853571fccb8a808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_68b65081caa112d6d9e2e6cc3aa26a7c9c4c28656e11ad622853571fccb8a808->leave($__internal_68b65081caa112d6d9e2e6cc3aa26a7c9c4c28656e11ad622853571fccb8a808_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  62 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}Administration|{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "UserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
