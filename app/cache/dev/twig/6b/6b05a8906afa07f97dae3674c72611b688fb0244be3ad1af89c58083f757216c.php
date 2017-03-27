<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9acde862814485e8ba636c5193378949f9ae1922476da67b8646286e8b641469 extends Twig_Template
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
        $__internal_4c29ec8fcbaafc3de16e0c19d2b3b465d933b62bddc9bde13731ec4f55b414fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c29ec8fcbaafc3de16e0c19d2b3b465d933b62bddc9bde13731ec4f55b414fa->enter($__internal_4c29ec8fcbaafc3de16e0c19d2b3b465d933b62bddc9bde13731ec4f55b414fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4c29ec8fcbaafc3de16e0c19d2b3b465d933b62bddc9bde13731ec4f55b414fa->leave($__internal_4c29ec8fcbaafc3de16e0c19d2b3b465d933b62bddc9bde13731ec4f55b414fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
