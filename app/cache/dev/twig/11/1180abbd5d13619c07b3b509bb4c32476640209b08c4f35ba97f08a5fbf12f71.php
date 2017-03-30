<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_be988ca5939a9ad7c1dc7c2a528d8df8eaebb58454171cfeb115638328c8c7ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_bc7255a065d564e6430ea92e78886ccd5e14b6fe88d7016be26fdcbd7bdf3deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7255a065d564e6430ea92e78886ccd5e14b6fe88d7016be26fdcbd7bdf3deb->enter($__internal_bc7255a065d564e6430ea92e78886ccd5e14b6fe88d7016be26fdcbd7bdf3deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc7255a065d564e6430ea92e78886ccd5e14b6fe88d7016be26fdcbd7bdf3deb->leave($__internal_bc7255a065d564e6430ea92e78886ccd5e14b6fe88d7016be26fdcbd7bdf3deb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_653e15b88f32a381c2f77cccc6f384d73a8b3c5b00332dea8b0e7a4b2d92219d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653e15b88f32a381c2f77cccc6f384d73a8b3c5b00332dea8b0e7a4b2d92219d->enter($__internal_653e15b88f32a381c2f77cccc6f384d73a8b3c5b00332dea8b0e7a4b2d92219d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_653e15b88f32a381c2f77cccc6f384d73a8b3c5b00332dea8b0e7a4b2d92219d->leave($__internal_653e15b88f32a381c2f77cccc6f384d73a8b3c5b00332dea8b0e7a4b2d92219d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f8996bbde62f2a3fe4bdabab068f33a1983be421a561a7f4d834244b0d04ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8996bbde62f2a3fe4bdabab068f33a1983be421a561a7f4d834244b0d04ded->enter($__internal_2f8996bbde62f2a3fe4bdabab068f33a1983be421a561a7f4d834244b0d04ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_2f8996bbde62f2a3fe4bdabab068f33a1983be421a561a7f4d834244b0d04ded->leave($__internal_2f8996bbde62f2a3fe4bdabab068f33a1983be421a561a7f4d834244b0d04ded_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f298cedd6cbf01affd0bd37512a545d4341ab513ff1ba26118d49787908c41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f298cedd6cbf01affd0bd37512a545d4341ab513ff1ba26118d49787908c41a->enter($__internal_6f298cedd6cbf01affd0bd37512a545d4341ab513ff1ba26118d49787908c41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6f298cedd6cbf01affd0bd37512a545d4341ab513ff1ba26118d49787908c41a->leave($__internal_6f298cedd6cbf01affd0bd37512a545d4341ab513ff1ba26118d49787908c41a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
