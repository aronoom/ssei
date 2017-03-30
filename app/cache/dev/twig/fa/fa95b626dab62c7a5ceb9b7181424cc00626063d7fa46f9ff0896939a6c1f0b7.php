<?php

/* ProjetBundle::layout.html.twig */
class __TwigTemplate_c7f0c601a2fba3a16dd058d89842adec098a769e2ffa234ee3b8c55e5e9d6c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::base.html.twig", "ProjetBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1da59141ae009cf9667d8a0a8209583972fec730e7299c5a37aef298d683b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1da59141ae009cf9667d8a0a8209583972fec730e7299c5a37aef298d683b4a->enter($__internal_e1da59141ae009cf9667d8a0a8209583972fec730e7299c5a37aef298d683b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1da59141ae009cf9667d8a0a8209583972fec730e7299c5a37aef298d683b4a->leave($__internal_e1da59141ae009cf9667d8a0a8209583972fec730e7299c5a37aef298d683b4a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b40de02b82bf12b6f7abfb21035a98522289b1394f866b94d6607bca76211d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40de02b82bf12b6f7abfb21035a98522289b1394f866b94d6607bca76211d8c->enter($__internal_b40de02b82bf12b6f7abfb21035a98522289b1394f866b94d6607bca76211d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_b40de02b82bf12b6f7abfb21035a98522289b1394f866b94d6607bca76211d8c->leave($__internal_b40de02b82bf12b6f7abfb21035a98522289b1394f866b94d6607bca76211d8c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5941ed40130f06b744567b605f4179107c54871c6f85620a892ec8f11f7ba6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5941ed40130f06b744567b605f4179107c54871c6f85620a892ec8f11f7ba6d9->enter($__internal_5941ed40130f06b744567b605f4179107c54871c6f85620a892ec8f11f7ba6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_5941ed40130f06b744567b605f4179107c54871c6f85620a892ec8f11f7ba6d9->leave($__internal_5941ed40130f06b744567b605f4179107c54871c6f85620a892ec8f11f7ba6d9_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f31ffb8a9e40c9ba1fa13bf63532399f6107748c1beb32582ba88feed9086ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31ffb8a9e40c9ba1fa13bf63532399f6107748c1beb32582ba88feed9086ee0->enter($__internal_f31ffb8a9e40c9ba1fa13bf63532399f6107748c1beb32582ba88feed9086ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f31ffb8a9e40c9ba1fa13bf63532399f6107748c1beb32582ba88feed9086ee0->leave($__internal_f31ffb8a9e40c9ba1fa13bf63532399f6107748c1beb32582ba88feed9086ee0_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle::layout.html.twig";
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
        return new Twig_Source("{% extends \"ProjetBundle::base.html.twig\" %}
{% block title %}Projet |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ProjetBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/layout.html.twig");
    }
}
