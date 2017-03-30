<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b2dd49113d50852f842fa5cd2344af9fbd66bf8627c5b7e86848d1010801b202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_105b20307a16efa3a990cbed50970874c6e0e2405d60d192eecafcfda77db673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105b20307a16efa3a990cbed50970874c6e0e2405d60d192eecafcfda77db673->enter($__internal_105b20307a16efa3a990cbed50970874c6e0e2405d60d192eecafcfda77db673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_105b20307a16efa3a990cbed50970874c6e0e2405d60d192eecafcfda77db673->leave($__internal_105b20307a16efa3a990cbed50970874c6e0e2405d60d192eecafcfda77db673_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd700a14b1462134142f2fa2c7534c2a3fa81a9707a5397fbdec56a51de5961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd700a14b1462134142f2fa2c7534c2a3fa81a9707a5397fbdec56a51de5961->enter($__internal_9bd700a14b1462134142f2fa2c7534c2a3fa81a9707a5397fbdec56a51de5961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_9bd700a14b1462134142f2fa2c7534c2a3fa81a9707a5397fbdec56a51de5961->leave($__internal_9bd700a14b1462134142f2fa2c7534c2a3fa81a9707a5397fbdec56a51de5961_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_63289b88f94f461f2ab84c210c5a3a5aae61cd02fbcc3f4ac7de064a0dc707be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63289b88f94f461f2ab84c210c5a3a5aae61cd02fbcc3f4ac7de064a0dc707be->enter($__internal_63289b88f94f461f2ab84c210c5a3a5aae61cd02fbcc3f4ac7de064a0dc707be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"dashboard_graph\">
            <div class=\"row x_title\">    
                 <h3> Profile - Edit</h3>
            </div>       
";
        // line 9
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>  
";
        
        $__internal_63289b88f94f461f2ab84c210c5a3a5aae61cd02fbcc3f4ac7de064a0dc707be->leave($__internal_63289b88f94f461f2ab84c210c5a3a5aae61cd02fbcc3f4ac7de064a0dc707be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  61 => 9,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}
{% block title %}{{parent()}} Profile {% endblock %}
{% block content %}
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"dashboard_graph\">
            <div class=\"row x_title\">    
                 <h3> Profile - Edit</h3>
            </div>       
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
        </div>
    </div>  
{% endblock %}
", "FOSUserBundle:Profile:edit.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
