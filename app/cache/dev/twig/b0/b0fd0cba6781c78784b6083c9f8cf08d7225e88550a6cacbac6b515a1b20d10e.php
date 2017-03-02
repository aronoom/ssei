<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_98ee6079ecae8108b9522801e03160f4362ee0d17428595fe17183267671f091 extends Twig_Template
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
        $__internal_3aa3e5f36399d20482799271929a9b33c0d9f9ec634b6ba21bfafe1d9fbc1657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa3e5f36399d20482799271929a9b33c0d9f9ec634b6ba21bfafe1d9fbc1657->enter($__internal_3aa3e5f36399d20482799271929a9b33c0d9f9ec634b6ba21bfafe1d9fbc1657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3aa3e5f36399d20482799271929a9b33c0d9f9ec634b6ba21bfafe1d9fbc1657->leave($__internal_3aa3e5f36399d20482799271929a9b33c0d9f9ec634b6ba21bfafe1d9fbc1657_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
