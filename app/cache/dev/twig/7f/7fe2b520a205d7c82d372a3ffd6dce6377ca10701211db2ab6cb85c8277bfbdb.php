<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_22580dd2ebf888bfbbadb5fd7de207123020f215fa1d1fe7af52f276b371b6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e955ce6a6f7b9ef0d74c3bfc76590bad08fe0878241fea01e3e75fa9f9c04a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e955ce6a6f7b9ef0d74c3bfc76590bad08fe0878241fea01e3e75fa9f9c04a6->enter($__internal_2e955ce6a6f7b9ef0d74c3bfc76590bad08fe0878241fea01e3e75fa9f9c04a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2e955ce6a6f7b9ef0d74c3bfc76590bad08fe0878241fea01e3e75fa9f9c04a6->leave($__internal_2e955ce6a6f7b9ef0d74c3bfc76590bad08fe0878241fea01e3e75fa9f9c04a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
