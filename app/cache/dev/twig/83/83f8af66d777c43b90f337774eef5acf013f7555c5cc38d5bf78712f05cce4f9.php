<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8a0377d85b645c2782d05ea4a6940e31fd5cddc4a323ad6b1eae508d3c8bc1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_120b74dd914ed57e845f6d425e4db4101b63354b1399822f1f6dcc28939fe196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120b74dd914ed57e845f6d425e4db4101b63354b1399822f1f6dcc28939fe196->enter($__internal_120b74dd914ed57e845f6d425e4db4101b63354b1399822f1f6dcc28939fe196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_120b74dd914ed57e845f6d425e4db4101b63354b1399822f1f6dcc28939fe196->leave($__internal_120b74dd914ed57e845f6d425e4db4101b63354b1399822f1f6dcc28939fe196_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa9d2ed1c2747d63bba88122a6960ec577743e3c001c3e40b5506a97eddb063d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9d2ed1c2747d63bba88122a6960ec577743e3c001c3e40b5506a97eddb063d->enter($__internal_aa9d2ed1c2747d63bba88122a6960ec577743e3c001c3e40b5506a97eddb063d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aa9d2ed1c2747d63bba88122a6960ec577743e3c001c3e40b5506a97eddb063d->leave($__internal_aa9d2ed1c2747d63bba88122a6960ec577743e3c001c3e40b5506a97eddb063d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fcc5f65009fe5b19a9b591ad9605a1221ff1804873bd3491e9d1115c0cc67fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcc5f65009fe5b19a9b591ad9605a1221ff1804873bd3491e9d1115c0cc67fd->enter($__internal_3fcc5f65009fe5b19a9b591ad9605a1221ff1804873bd3491e9d1115c0cc67fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3fcc5f65009fe5b19a9b591ad9605a1221ff1804873bd3491e9d1115c0cc67fd->leave($__internal_3fcc5f65009fe5b19a9b591ad9605a1221ff1804873bd3491e9d1115c0cc67fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_40374e1b415490f6df9ae895d205a49463debb9c60167dc388c20c8760d77e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40374e1b415490f6df9ae895d205a49463debb9c60167dc388c20c8760d77e9c->enter($__internal_40374e1b415490f6df9ae895d205a49463debb9c60167dc388c20c8760d77e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_40374e1b415490f6df9ae895d205a49463debb9c60167dc388c20c8760d77e9c->leave($__internal_40374e1b415490f6df9ae895d205a49463debb9c60167dc388c20c8760d77e9c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
