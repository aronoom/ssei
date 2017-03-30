<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_77d354c55baac426746697d7b2454cd05fe29e3ca5047df53ab40d3477c9a7b0 extends Twig_Template
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
        $__internal_ffd3dc84138c8548bc23bbbcc5f37c6d5bb9e20052fb0f646b96c4c0a7f6a596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd3dc84138c8548bc23bbbcc5f37c6d5bb9e20052fb0f646b96c4c0a7f6a596->enter($__internal_ffd3dc84138c8548bc23bbbcc5f37c6d5bb9e20052fb0f646b96c4c0a7f6a596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ffd3dc84138c8548bc23bbbcc5f37c6d5bb9e20052fb0f646b96c4c0a7f6a596->leave($__internal_ffd3dc84138c8548bc23bbbcc5f37c6d5bb9e20052fb0f646b96c4c0a7f6a596_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
