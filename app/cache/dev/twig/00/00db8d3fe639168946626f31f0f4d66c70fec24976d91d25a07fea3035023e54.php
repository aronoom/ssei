<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e2718392beea3e2ba3241946de8931c0f6ee8a4cdc1ea69e02bb0d58b7359956 extends Twig_Template
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
        $__internal_f3851c0d37aa3f5df763e72f57d2567c9e9bb86d8d9b543db4d9d69fb0e3f504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3851c0d37aa3f5df763e72f57d2567c9e9bb86d8d9b543db4d9d69fb0e3f504->enter($__internal_f3851c0d37aa3f5df763e72f57d2567c9e9bb86d8d9b543db4d9d69fb0e3f504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f3851c0d37aa3f5df763e72f57d2567c9e9bb86d8d9b543db4d9d69fb0e3f504->leave($__internal_f3851c0d37aa3f5df763e72f57d2567c9e9bb86d8d9b543db4d9d69fb0e3f504_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
