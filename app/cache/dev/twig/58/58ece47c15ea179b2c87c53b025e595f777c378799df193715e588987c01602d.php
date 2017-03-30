<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_12dbfba6ae327d10e027c3ab1407de1601ca3f36e3ff9e49499d51451a7318fb extends Twig_Template
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
        $__internal_91366ca4b128b719e0b0881a64d15f5b72675e39dfac6ff7baffd8a808cf48ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91366ca4b128b719e0b0881a64d15f5b72675e39dfac6ff7baffd8a808cf48ec->enter($__internal_91366ca4b128b719e0b0881a64d15f5b72675e39dfac6ff7baffd8a808cf48ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_91366ca4b128b719e0b0881a64d15f5b72675e39dfac6ff7baffd8a808cf48ec->leave($__internal_91366ca4b128b719e0b0881a64d15f5b72675e39dfac6ff7baffd8a808cf48ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
