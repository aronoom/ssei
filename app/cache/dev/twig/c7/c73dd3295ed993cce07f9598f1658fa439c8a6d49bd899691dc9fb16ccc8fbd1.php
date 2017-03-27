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
        $__internal_ebdef0b2d8a9378082215a60db378783902f762243fee8d77458a242f898e1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdef0b2d8a9378082215a60db378783902f762243fee8d77458a242f898e1a5->enter($__internal_ebdef0b2d8a9378082215a60db378783902f762243fee8d77458a242f898e1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebdef0b2d8a9378082215a60db378783902f762243fee8d77458a242f898e1a5->leave($__internal_ebdef0b2d8a9378082215a60db378783902f762243fee8d77458a242f898e1a5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0059026eacf29278fd1758f0f656e9966b4d4d2d6ae661383014b09d38329ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0059026eacf29278fd1758f0f656e9966b4d4d2d6ae661383014b09d38329ad7->enter($__internal_0059026eacf29278fd1758f0f656e9966b4d4d2d6ae661383014b09d38329ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_0059026eacf29278fd1758f0f656e9966b4d4d2d6ae661383014b09d38329ad7->leave($__internal_0059026eacf29278fd1758f0f656e9966b4d4d2d6ae661383014b09d38329ad7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e86b3ead725db8da9dc194f8b6dff1d95b4b7809ca39ba1f1ba4b14ddb52bac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86b3ead725db8da9dc194f8b6dff1d95b4b7809ca39ba1f1ba4b14ddb52bac6->enter($__internal_e86b3ead725db8da9dc194f8b6dff1d95b4b7809ca39ba1f1ba4b14ddb52bac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_e86b3ead725db8da9dc194f8b6dff1d95b4b7809ca39ba1f1ba4b14ddb52bac6->leave($__internal_e86b3ead725db8da9dc194f8b6dff1d95b4b7809ca39ba1f1ba4b14ddb52bac6_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4677c851cf1feba02f3d65531dfad92590f2f7a4073f77670ed7e349b25c386d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4677c851cf1feba02f3d65531dfad92590f2f7a4073f77670ed7e349b25c386d->enter($__internal_4677c851cf1feba02f3d65531dfad92590f2f7a4073f77670ed7e349b25c386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_4677c851cf1feba02f3d65531dfad92590f2f7a4073f77670ed7e349b25c386d->leave($__internal_4677c851cf1feba02f3d65531dfad92590f2f7a4073f77670ed7e349b25c386d_prof);

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
