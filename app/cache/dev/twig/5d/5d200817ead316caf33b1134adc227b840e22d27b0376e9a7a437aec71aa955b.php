<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ed3338e30b7ae4019cff8fa2a4ec8bcca690b8adbe042045bb42ce5f53363c27 extends Twig_Template
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
        $__internal_a01a5e56b0a1b24f1e4321d3eced5f58718e2d844aa77fb54a4e973300491df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01a5e56b0a1b24f1e4321d3eced5f58718e2d844aa77fb54a4e973300491df3->enter($__internal_a01a5e56b0a1b24f1e4321d3eced5f58718e2d844aa77fb54a4e973300491df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a01a5e56b0a1b24f1e4321d3eced5f58718e2d844aa77fb54a4e973300491df3->leave($__internal_a01a5e56b0a1b24f1e4321d3eced5f58718e2d844aa77fb54a4e973300491df3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
