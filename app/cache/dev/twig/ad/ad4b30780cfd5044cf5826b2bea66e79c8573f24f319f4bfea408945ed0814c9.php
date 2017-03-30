<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4d2962ae49f613dd6e02a958bf8a007edc888494e840bf936d31aed288751a28 extends Twig_Template
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
        $__internal_82f6b98933a5c5a5a68f4f2c3e0a0b64c0fe9ae2b04068a64c2b39b7ad9b1532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f6b98933a5c5a5a68f4f2c3e0a0b64c0fe9ae2b04068a64c2b39b7ad9b1532->enter($__internal_82f6b98933a5c5a5a68f4f2c3e0a0b64c0fe9ae2b04068a64c2b39b7ad9b1532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_82f6b98933a5c5a5a68f4f2c3e0a0b64c0fe9ae2b04068a64c2b39b7ad9b1532->leave($__internal_82f6b98933a5c5a5a68f4f2c3e0a0b64c0fe9ae2b04068a64c2b39b7ad9b1532_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
