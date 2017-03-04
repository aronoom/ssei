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
        $__internal_90be724ea0e75118291f3df2f3b777e2249620dfc90612c2d6689ebd252ca6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90be724ea0e75118291f3df2f3b777e2249620dfc90612c2d6689ebd252ca6a3->enter($__internal_90be724ea0e75118291f3df2f3b777e2249620dfc90612c2d6689ebd252ca6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90be724ea0e75118291f3df2f3b777e2249620dfc90612c2d6689ebd252ca6a3->leave($__internal_90be724ea0e75118291f3df2f3b777e2249620dfc90612c2d6689ebd252ca6a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b5e92b9dbaf5e360a50e188c208c600e4c691ba068f7ede67e5ef580757a8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5e92b9dbaf5e360a50e188c208c600e4c691ba068f7ede67e5ef580757a8a6->enter($__internal_2b5e92b9dbaf5e360a50e188c208c600e4c691ba068f7ede67e5ef580757a8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b5e92b9dbaf5e360a50e188c208c600e4c691ba068f7ede67e5ef580757a8a6->leave($__internal_2b5e92b9dbaf5e360a50e188c208c600e4c691ba068f7ede67e5ef580757a8a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc6149368f399fc7f6d21a6e8e827db069a57b75ebeb5c790ba6b1dda212fad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6149368f399fc7f6d21a6e8e827db069a57b75ebeb5c790ba6b1dda212fad9->enter($__internal_dc6149368f399fc7f6d21a6e8e827db069a57b75ebeb5c790ba6b1dda212fad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc6149368f399fc7f6d21a6e8e827db069a57b75ebeb5c790ba6b1dda212fad9->leave($__internal_dc6149368f399fc7f6d21a6e8e827db069a57b75ebeb5c790ba6b1dda212fad9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de165b51848ff3af803ee7ab24ae0dfb9eeb91b050f64598d58871f02137ba36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de165b51848ff3af803ee7ab24ae0dfb9eeb91b050f64598d58871f02137ba36->enter($__internal_de165b51848ff3af803ee7ab24ae0dfb9eeb91b050f64598d58871f02137ba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de165b51848ff3af803ee7ab24ae0dfb9eeb91b050f64598d58871f02137ba36->leave($__internal_de165b51848ff3af803ee7ab24ae0dfb9eeb91b050f64598d58871f02137ba36_prof);

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
