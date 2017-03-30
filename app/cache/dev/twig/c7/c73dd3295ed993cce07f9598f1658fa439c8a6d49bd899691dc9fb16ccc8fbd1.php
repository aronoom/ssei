<?php

/* ZoneBundle::layout.html.twig */
class __TwigTemplate_21c49c23449d2957ed1934b02641d9ca9221caaa33721005a4877684b6ba1d5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ZoneBundle::layout.html.twig", 1);
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
        $__internal_53f59e5488e8d0f28a22d08dc0efafa2f2e8c8b10f7a0aa4dc5429c59827230d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f59e5488e8d0f28a22d08dc0efafa2f2e8c8b10f7a0aa4dc5429c59827230d->enter($__internal_53f59e5488e8d0f28a22d08dc0efafa2f2e8c8b10f7a0aa4dc5429c59827230d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f59e5488e8d0f28a22d08dc0efafa2f2e8c8b10f7a0aa4dc5429c59827230d->leave($__internal_53f59e5488e8d0f28a22d08dc0efafa2f2e8c8b10f7a0aa4dc5429c59827230d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e64a040b9436687af2ce2eb27787a276f8b484e1038f5ca2ba63b5a4def0b3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64a040b9436687af2ce2eb27787a276f8b484e1038f5ca2ba63b5a4def0b3c9->enter($__internal_e64a040b9436687af2ce2eb27787a276f8b484e1038f5ca2ba63b5a4def0b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_e64a040b9436687af2ce2eb27787a276f8b484e1038f5ca2ba63b5a4def0b3c9->leave($__internal_e64a040b9436687af2ce2eb27787a276f8b484e1038f5ca2ba63b5a4def0b3c9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c20a3a0220be97f1fcb44f3272a58cb358fadb17cacd3a7e2f27dcf51e23631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c20a3a0220be97f1fcb44f3272a58cb358fadb17cacd3a7e2f27dcf51e23631->enter($__internal_8c20a3a0220be97f1fcb44f3272a58cb358fadb17cacd3a7e2f27dcf51e23631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_8c20a3a0220be97f1fcb44f3272a58cb358fadb17cacd3a7e2f27dcf51e23631->leave($__internal_8c20a3a0220be97f1fcb44f3272a58cb358fadb17cacd3a7e2f27dcf51e23631_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a00c841b3190214b3b358e563bacae3fd0cfdc004c5e8396ee3944d1c969f14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00c841b3190214b3b358e563bacae3fd0cfdc004c5e8396ee3944d1c969f14c->enter($__internal_a00c841b3190214b3b358e563bacae3fd0cfdc004c5e8396ee3944d1c969f14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_a00c841b3190214b3b358e563bacae3fd0cfdc004c5e8396ee3944d1c969f14c->leave($__internal_a00c841b3190214b3b358e563bacae3fd0cfdc004c5e8396ee3944d1c969f14c_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle::layout.html.twig";
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
{% block title %}Location |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ZoneBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/layout.html.twig");
    }
}
