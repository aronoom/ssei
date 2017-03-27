<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3bf1711459c408cb2fb40deeabe464e789a211736041382e82b5546097a46811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_de8a1c506e00177f3db651bc2e1002e04535fd4a8d2624af604cdc1906d517c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8a1c506e00177f3db651bc2e1002e04535fd4a8d2624af604cdc1906d517c4->enter($__internal_de8a1c506e00177f3db651bc2e1002e04535fd4a8d2624af604cdc1906d517c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8a1c506e00177f3db651bc2e1002e04535fd4a8d2624af604cdc1906d517c4->leave($__internal_de8a1c506e00177f3db651bc2e1002e04535fd4a8d2624af604cdc1906d517c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b38f4f602458fc16101309c1d7e7cd920c7a2eedec5722e54aedb70addb93ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38f4f602458fc16101309c1d7e7cd920c7a2eedec5722e54aedb70addb93ee6->enter($__internal_b38f4f602458fc16101309c1d7e7cd920c7a2eedec5722e54aedb70addb93ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b38f4f602458fc16101309c1d7e7cd920c7a2eedec5722e54aedb70addb93ee6->leave($__internal_b38f4f602458fc16101309c1d7e7cd920c7a2eedec5722e54aedb70addb93ee6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a45d04646c538b7968655ae259d7d27f70c5ffe82111e84dec3ba4f5adc25609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45d04646c538b7968655ae259d7d27f70c5ffe82111e84dec3ba4f5adc25609->enter($__internal_a45d04646c538b7968655ae259d7d27f70c5ffe82111e84dec3ba4f5adc25609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a45d04646c538b7968655ae259d7d27f70c5ffe82111e84dec3ba4f5adc25609->leave($__internal_a45d04646c538b7968655ae259d7d27f70c5ffe82111e84dec3ba4f5adc25609_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaf05b2a6c080de3941cdeb266c9ad719a47066b75690c729dbd719cf4732bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf05b2a6c080de3941cdeb266c9ad719a47066b75690c729dbd719cf4732bd7->enter($__internal_aaf05b2a6c080de3941cdeb266c9ad719a47066b75690c729dbd719cf4732bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_aaf05b2a6c080de3941cdeb266c9ad719a47066b75690c729dbd719cf4732bd7->leave($__internal_aaf05b2a6c080de3941cdeb266c9ad719a47066b75690c729dbd719cf4732bd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
