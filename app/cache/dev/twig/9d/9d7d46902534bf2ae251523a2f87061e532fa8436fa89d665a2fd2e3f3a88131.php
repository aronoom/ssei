<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6f43dac7f6fcddad9648569672b8e55e9ac3f7f12ba3cf385924e77bcc243202 extends Twig_Template
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
        $__internal_445453fcb8b8de1389ba617bd4faa80badfc790ad6f1b3f7d56480d298f0eff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445453fcb8b8de1389ba617bd4faa80badfc790ad6f1b3f7d56480d298f0eff7->enter($__internal_445453fcb8b8de1389ba617bd4faa80badfc790ad6f1b3f7d56480d298f0eff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_445453fcb8b8de1389ba617bd4faa80badfc790ad6f1b3f7d56480d298f0eff7->leave($__internal_445453fcb8b8de1389ba617bd4faa80badfc790ad6f1b3f7d56480d298f0eff7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
