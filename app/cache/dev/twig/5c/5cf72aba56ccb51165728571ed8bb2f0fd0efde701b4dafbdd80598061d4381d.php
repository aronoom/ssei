<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e97ac4084d5a2487a8aa1294d64d94dc4c904fee00bea75c4dc8a63d975d9eab extends Twig_Template
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
        $__internal_d4be0ee0a9a754f7b4777aad20371b6beec21e6676ffe6fb17c8ea0d41ee3708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4be0ee0a9a754f7b4777aad20371b6beec21e6676ffe6fb17c8ea0d41ee3708->enter($__internal_d4be0ee0a9a754f7b4777aad20371b6beec21e6676ffe6fb17c8ea0d41ee3708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d4be0ee0a9a754f7b4777aad20371b6beec21e6676ffe6fb17c8ea0d41ee3708->leave($__internal_d4be0ee0a9a754f7b4777aad20371b6beec21e6676ffe6fb17c8ea0d41ee3708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
