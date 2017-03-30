<?php

/* ZoneBundle:Region:modifier.html.twig */
class __TwigTemplate_eb9b4e9b9bf04ba1d9a049ebc59ede3b08c4d1864bbefd577bb4b1b36315c0e2 extends Twig_Template
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
        $__internal_2dc87c61f6a3530c40e70ad8497072370ed26877218a35e64ddd8e4714cef19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc87c61f6a3530c40e70ad8497072370ed26877218a35e64ddd8e4714cef19a->enter($__internal_2dc87c61f6a3530c40e70ad8497072370ed26877218a35e64ddd8e4714cef19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Region:modifier.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 3
                echo "        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <strong>";
                // line 5
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</strong>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 9
        echo "<form class=\"formulaire\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_modifier_region", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" novalidate  method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"modal-body\">
        <div class=\"well\">
            <div class=\"item form-group\">
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'label', array("label" => "Libellé de la région"));
        echo "
                </div>
                <div class=\"col-sm-6\">
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                </div>
                <ul class=\"parsley-errors-list filled\">
                    <li class=\"parsley-required\">
                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'errors');
        echo "
            </div>
            <br><br>
            <div class=\"item form-group\">
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'label', array("label" => "Code de la région"));
        echo "
                </div>
                <div class=\"col-sm-6\">
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                </div>
                <ul class=\"parsley-errors-list filled\">
                    <li class=\"parsley-required\">
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'errors');
        echo "
            <br><br>
            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    </div>

    <div class=\"item form-group modal-footer\">
        <div class=\"col-sm-9\">
            <div class=\"pull-right\">
                <button class=\"btn btn-warning\" enabled=false id=\"sub\" type=\"submit\">Effectuer</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_2dc87c61f6a3530c40e70ad8497072370ed26877218a35e64ddd8e4714cef19a->leave($__internal_2dc87c61f6a3530c40e70ad8497072370ed26877218a35e64ddd8e4714cef19a_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Region:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  88 => 33,  81 => 29,  75 => 26,  67 => 21,  60 => 17,  54 => 14,  43 => 9,  33 => 5,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.request.hasPreviousSession %}
    {% for flashMessage in app.session.flashBag.get('error') %}
        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <strong>{{ flashMessage }}</strong>
        </div>
    {% endfor %}
{% endif %}
<form class=\"formulaire\" action=\"{{ path('zone_modifier_region', {'id': id}) }}\" novalidate  method=\"post\" {{ form_enctype(form) }}>
    <div class=\"modal-body\">
        <div class=\"well\">
            <div class=\"item form-group\">
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.regionLibelle,\"Libellé de la région\") }}
                </div>
                <div class=\"col-sm-6\">
                    {{ form_widget(form.regionLibelle,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                </div>
                <ul class=\"parsley-errors-list filled\">
                    <li class=\"parsley-required\">
                        {{ form_errors(form.regionLibelle)}}
            </div>
            <br><br>
            <div class=\"item form-group\">
                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                    {{ form_label(form.regionCode,\"Code de la région\") }}
                </div>
                <div class=\"col-sm-6\">
                    {{ form_widget(form.regionCode,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                </div>
                <ul class=\"parsley-errors-list filled\">
                    <li class=\"parsley-required\">
                        {{ form_errors(form.regionCode)}}
            <br><br>
            {{form_rest(form)}}
        </div>
    </div>

    <div class=\"item form-group modal-footer\">
        <div class=\"col-sm-9\">
            <div class=\"pull-right\">
                <button class=\"btn btn-warning\" enabled=false id=\"sub\" type=\"submit\">Effectuer</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</form>
", "ZoneBundle:Region:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Region/modifier.html.twig");
    }
}
