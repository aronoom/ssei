<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_100f2d0e50007332e57cf57a599493dd2558af43546e7f155f7d9e6e355d17de extends Twig_Template
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
        $__internal_dec4f2345d81517695143b72f3e4ba7aef9fd878500a5a043b59cb3020e5abc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec4f2345d81517695143b72f3e4ba7aef9fd878500a5a043b59cb3020e5abc3->enter($__internal_dec4f2345d81517695143b72f3e4ba7aef9fd878500a5a043b59cb3020e5abc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dec4f2345d81517695143b72f3e4ba7aef9fd878500a5a043b59cb3020e5abc3->leave($__internal_dec4f2345d81517695143b72f3e4ba7aef9fd878500a5a043b59cb3020e5abc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
