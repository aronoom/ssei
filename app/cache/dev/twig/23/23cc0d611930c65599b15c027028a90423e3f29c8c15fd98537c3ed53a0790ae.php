<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_146cf247ebaf108460502501557c7eda9163ae91fc4a5467264b6bdb438f9116 extends Twig_Template
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
        $__internal_1967fc3b14ec05fb4da566ef77ef2c63e03f042f39e2a3b11dd766d0e9033ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1967fc3b14ec05fb4da566ef77ef2c63e03f042f39e2a3b11dd766d0e9033ef5->enter($__internal_1967fc3b14ec05fb4da566ef77ef2c63e03f042f39e2a3b11dd766d0e9033ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1967fc3b14ec05fb4da566ef77ef2c63e03f042f39e2a3b11dd766d0e9033ef5->leave($__internal_1967fc3b14ec05fb4da566ef77ef2c63e03f042f39e2a3b11dd766d0e9033ef5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
