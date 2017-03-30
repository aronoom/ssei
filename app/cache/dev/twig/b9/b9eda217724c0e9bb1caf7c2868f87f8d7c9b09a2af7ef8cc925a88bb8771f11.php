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
        $__internal_03352c4d592636ae393f1f044b3684fb27d39f5807b8818c2d091cbd33e2a424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03352c4d592636ae393f1f044b3684fb27d39f5807b8818c2d091cbd33e2a424->enter($__internal_03352c4d592636ae393f1f044b3684fb27d39f5807b8818c2d091cbd33e2a424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03352c4d592636ae393f1f044b3684fb27d39f5807b8818c2d091cbd33e2a424->leave($__internal_03352c4d592636ae393f1f044b3684fb27d39f5807b8818c2d091cbd33e2a424_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89f03962f10e1fad7606f6beac4f2a503c6c9222ac9b966e932c8ac9a2e6f7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f03962f10e1fad7606f6beac4f2a503c6c9222ac9b966e932c8ac9a2e6f7ca->enter($__internal_89f03962f10e1fad7606f6beac4f2a503c6c9222ac9b966e932c8ac9a2e6f7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89f03962f10e1fad7606f6beac4f2a503c6c9222ac9b966e932c8ac9a2e6f7ca->leave($__internal_89f03962f10e1fad7606f6beac4f2a503c6c9222ac9b966e932c8ac9a2e6f7ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e1fda7790f882bd099d08fcc566a98355f95c551628aaa1837a25e808bf5225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1fda7790f882bd099d08fcc566a98355f95c551628aaa1837a25e808bf5225->enter($__internal_1e1fda7790f882bd099d08fcc566a98355f95c551628aaa1837a25e808bf5225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e1fda7790f882bd099d08fcc566a98355f95c551628aaa1837a25e808bf5225->leave($__internal_1e1fda7790f882bd099d08fcc566a98355f95c551628aaa1837a25e808bf5225_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae9628bbb2f53d30f785d29b6f2f2e74ce34f80bc37e73252cca89b66500e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae9628bbb2f53d30f785d29b6f2f2e74ce34f80bc37e73252cca89b66500e7f->enter($__internal_1ae9628bbb2f53d30f785d29b6f2f2e74ce34f80bc37e73252cca89b66500e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1ae9628bbb2f53d30f785d29b6f2f2e74ce34f80bc37e73252cca89b66500e7f->leave($__internal_1ae9628bbb2f53d30f785d29b6f2f2e74ce34f80bc37e73252cca89b66500e7f_prof);

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
